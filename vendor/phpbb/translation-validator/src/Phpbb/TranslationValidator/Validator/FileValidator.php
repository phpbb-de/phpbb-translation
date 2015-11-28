<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Validator;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Finder\Finder;
use Phpbb\TranslationValidator\Output\Output;
use Phpbb\TranslationValidator\Output\OutputInterface;

class FileValidator
{
	/** @var string */
	protected $originIso;
	/** @var string */
	protected $originPath;
	/** @var string */
	protected $originLanguagePath;
	/** @var string */
	protected $sourceIso;
	/** @var string */
	protected $sourcePath;
	/** @var string */
	protected $sourceLanguagePath;
	/** @var string */
	protected $phpbbVersion;

	/** @var bool */
	protected $debug;

	/** @var \Symfony\Component\Console\Input\InputInterface */
	protected $input;
	/** @var \Phpbb\TranslationValidator\Output\OutputInterface */
	protected $output;

	/**
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 */
	public function __construct(InputInterface $input, OutputInterface $output)
	{
		$this->input = $input;
		$this->output = $output;
		$this->langkeyValidator = new LangKeyValidator($input, $output);
	}

	/**
	 * Set phpBB Version
	 *
	 * @param string $originIso		The ISO of the language to validate
	 * @param string $originPath	Path to the origin directory
	 * @param string $originLanguagePath	Relative path to the origin language/ directory
	 * @return $this
	 */
	public function setOrigin($originIso, $originPath, $originLanguagePath)
	{
		$this->originIso = $originIso;
		$this->originPath = $originPath;
		$this->originLanguagePath = $originLanguagePath;
		$this->langkeyValidator->setOrigin($originIso, $originPath, $originLanguagePath);
		return $this;
	}

	/**
	 * Set phpBB Version
	 *
	 * @param string $sourceIso		The ISO of the language to validate against
	 * @param string $sourcePath	Path to the source directory
	 * @param string $sourceLanguagePath	Relative path to the source language/ directory
	 * @return $this
	 */
	public function setSource($sourceIso, $sourcePath, $sourceLanguagePath)
	{
		$this->sourceIso = $sourceIso;
		$this->sourcePath = $sourcePath;
		$this->sourceLanguagePath = $sourceLanguagePath;
		$this->langkeyValidator->setSource($sourceIso, $sourcePath, $sourceLanguagePath);
		return $this;
	}

	/**
	 * Set phpBB Version
	 *
	 * @param string $phpbbVersion	The phpBB Version to validate against (3.0|3.1|3.2)
	 * @return $this
	 */
	public function setPhpbbVersion($phpbbVersion)
	{
		$this->phpbbVersion = $phpbbVersion;
		$this->langkeyValidator->setPhpbbVersion($phpbbVersion);
		return $this;
	}

	/**
	 * Set plural rule
	 *
	 * @param int $pluralRule
	 * @return $this
	 */
	public function setPluralRule($pluralRule)
	{
		$this->pluralRule = $pluralRule;
		$this->langkeyValidator->setPluralRule($pluralRule);
		return $this;
	}

	/**
	 * Set debug mode
	 *
	 * @param bool $debug Debug mode
	 * @return $this
	 */
	public function setDebug($debug)
	{
		$this->debug = $debug;
		$this->langkeyValidator->setDebug($debug);
		return $this;
	}

	/**
	 * Decides which validation function to use
	 *
	 * @param	string	$sourceFile		Source file for comparison
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validate($sourceFile, $originFile)
	{
		$this->validateLineEndings($originFile);
		if (substr($originFile, -4) === '.php')
		{
			$this->validateDefinedInPhpbb($originFile);
			$this->validateUtf8withoutbom($originFile);
			$this->validateNoPhpClosingTag($originFile);
		}

		if (strpos($originFile, $this->originLanguagePath . 'email/') === 0 && substr($originFile, -4) === '.txt')
		{
			$this->validateEmail($sourceFile, $originFile);
		}
		else if (strpos($originFile, $this->originLanguagePath . 'help_') === 0 && substr($originFile, -4) === '.php')
		{
			$this->validateHelpFile($sourceFile, $originFile);
		}
		else if ($originFile == $this->originLanguagePath . 'search_synonyms.php')
		{
			$this->validateSearchSynonymsFile($originFile);
		}
		else if ($originFile == $this->originLanguagePath . 'search_ignore_words.php')
		{
			$this->validateSearchIgnoreWordsFile($originFile);
		}
		else if (substr($originFile, -4) === '.php')
		{
			$this->validateLangFile($sourceFile, $originFile);
		}
		else if (substr($originFile, -9) === 'index.htm')
		{
			$this->validateIndexFile($originFile);
		}
		else if ($originFile === $this->originLanguagePath . 'LICENSE')
		{
			$this->validateLicenseFile($originFile);
		}
		else if ($originFile === $this->originLanguagePath . 'iso.txt')
		{
			$this->validateIsoFile($originFile);
		}
		else if ($this->phpbbVersion !== '3.0' && substr($originFile, -4) === '.css')
		{
			$this->validateUtf8withoutbom($originFile);
			$this->validateCSSFile($sourceFile, $originFile);
		}
		else
		{
			$this->output->addMessage(Output::NOTICE, 'File is not validated', $originFile);
		}
	}

	/**
	 * Validates a normal language file
	 *
	 * Files should not produce any output.
	 * Files should only define the $lang variable.
	 * Files must have all language keys defined in the source file.
	 * Files should not have additional language keys.
	 *
	 * @param	string	$sourceFile		Source file for comparison
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateLangFile($sourceFile, $originFile)
	{
		ob_start();
		/** @var $lang */
		include($this->originPath . '/' . $originFile);

		$defined_variables = get_defined_vars();
		if (sizeof($defined_variables) != 3 || !isset($defined_variables['lang']) || gettype($defined_variables['lang']) != 'array')
		{
			$this->output->addMessage(Output::FATAL, 'Must only contain the lang-array', $originFile);
			if (!isset($defined_variables['lang']) || gettype($defined_variables['lang']) != 'array')
			{
				return;
			}
		}

		$output = ob_get_contents();
		ob_end_clean();

		if ($output !== '')
		{
			$this->output->addMessage(Output::FATAL, 'Must not produces output: ' . htmlspecialchars($output), $originFile);
		}

		$validate = $lang;
		unset($lang);

		/** @var $lang */
		include($this->sourcePath . '/' . $sourceFile);
		$against = $lang;
		unset($lang);

		foreach ($against as $againstLangKey => $againstLanguage)
		{
			if (!isset($validate[$againstLangKey]))
			{
				$this->output->addMessage(Output::FATAL, 'Must contain key: ' . $againstLangKey, $originFile);
				continue;
			}

			$this->langkeyValidator->validate($originFile, $againstLangKey, $againstLanguage, $validate[$againstLangKey]);
		}

		foreach ($validate as $validateLangKey => $validateLanguage)
		{
			if (!isset($against[$validateLangKey]))
			{
				$this->output->addMessage(Output::FATAL, 'Must not contain key: ' . $validateLangKey, $originFile);
			}
		}
	}

	/**
	 * Validates a email .txt file
	 *
	 * Emails must have a subject when the source file has one, otherwise must not have one.
	 * Emails must have a signature when the source file has one, otherwise must not have one.
	 * Emails should use template vars, used by the source file.
	 * Emails should not use additional template vars.
	 * Emails should not use any HTML.
	 * Emails should contain a newline at their end.
	 *
	 * @param	string	$sourceFile		Source file for comparison
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateEmail($sourceFile, $originFile)
	{
		$sourceContent = (string) file_get_contents($this->sourcePath . '/' . $sourceFile);
		$originContent = (string) file_get_contents($this->originPath . '/' . $originFile);
		$originContent = str_replace("\r\n", "\n", $originContent);
		$originContent = str_replace("\r", "\n", $originContent);

		$sourceContent = explode("\n", $sourceContent);
		$originContent = explode("\n", $originContent);

		// Is the file saved as UTF8 with BOM?
		if (substr($originContent[0], 0, 3) === "\xEF\xBB\xBF")
		{
			$this->output->addMessage(Output::FATAL, 'File must be encoded using UTF8 without BOM', $originFile);
			$originContent[0] = substr($originContent[0], 3);
		}

		// One language contains a subject, the other one does not
		if (strpos($sourceContent[0], 'Subject: ') === 0 && strpos($originContent[0], 'Subject: ') !== 0)
		{
			$this->output->addMessage(Output::FATAL, 'Must have a "Subject: "-line', $originFile);
		}
		else if (strpos($sourceContent[0], 'Subject: ') !== 0 && strpos($originContent[0], 'Subject: ') === 0)
		{
			$this->output->addMessage(Output::FATAL, 'Must not have a "Subject: "-line', $originFile);
		}

		// One language contains the signature, the other one does not
		if ((end($sourceContent) === '{EMAIL_SIG}' || prev($sourceContent) === '{EMAIL_SIG}')
			&& end($originContent) !== '{EMAIL_SIG}' && prev($originContent) !== '{EMAIL_SIG}')
		{
			$this->output->addMessage(Output::FATAL, 'Must have the signature appended', $originFile);
		}
		else if ((end($originContent) === '{EMAIL_SIG}' || prev($originContent) === '{EMAIL_SIG}')
			&& end($sourceContent) !== '{EMAIL_SIG}' && prev($sourceContent) !== '{EMAIL_SIG}')
		{
			$this->output->addMessage(Output::FATAL, 'Must not have the signature appended', $originFile);
		}

		$originTemplateVars = $sourceTemplateVars = array();
		preg_match_all('/{.+?}/', implode("\n", $originContent), $originTemplateVars);
		preg_match_all('/{.+?}/', implode("\n", $sourceContent), $sourceTemplateVars);


		$additionalOrigin = array_diff($sourceTemplateVars[0], $originTemplateVars[0]);
		$additionalSource = array_diff($originTemplateVars[0], array_merge(array(
			'{U_BOARD}',
			'{EMAIL_SIG}',
			'{SITENAME}',
		), $sourceTemplateVars[0]));

		// Check the used template variables
		if (!empty($additionalSource))
		{
			$this->output->addMessage(Output::FATAL, 'Is using additional variables: ' . implode(', ', $additionalSource), $originFile);
		}

		if (!empty($additionalOrigin))
		{
			$this->output->addMessage(Output::ERROR, 'Is not using variables: ' . implode(', ', $additionalOrigin), $originFile);
		}

		$validateHtml = array();
		preg_match_all('/\<.+?\>/', implode("\n", $originContent), $validateHtml);
		if (!empty($validateHtml) && !empty($validateHtml[0]))
		{
			foreach ($validateHtml[0] as $possibleHtml)
			{
				if (substr($possibleHtml, 0, 5) !== '<!-- ' || substr($possibleHtml, -4) !== ' -->')
				{
					$this->output->addMessage(Output::FATAL, 'Using additional HTML: ' . htmlspecialchars($possibleHtml), $originFile);
				}
			}
		}

		// Check for new liens at the end of the file
		if (end($originContent) !== '')
		{
			$level = ($this->phpbbVersion !== '3.0') ? Output::FATAL : Output::NOTICE;
			$this->output->addMessage($level, 'Missing new line at the end of the file', $originFile);
		}
	}

	/**
	 * Validates a help_*.php file
	 *
	 * Files must only contain the variable $help.
	 * This variable must be an array of arrays.
	 * Subarrays must only have the indexes 0 and 1,
	 * with 0 being the headline and 1 being the description.
	 *
	 * Files must contain an entry with 0 and 1 being '--',
	 * causing the column break in the page.
	 *
	 * @todo		Check for template vars and html
	 * @todo		Check for triple --- and other typos of it.
	 *
	 * @param	string	$sourceFile		Source file for comparison
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateHelpFile($sourceFile, $originFile)
	{
		/** @var $help */
		include($this->originPath . '/' . $originFile);

		$defined_variables = get_defined_vars();
		if (sizeof($defined_variables) != 3 || !isset($defined_variables['help']) || gettype($defined_variables['help']) != 'array')
		{
			$this->output->addMessage(Output::FATAL, 'Should only contain the help-array', $originFile);
			return;
		}

		$validate = $help;
		unset($help);

		/** @var $help */
		include($this->sourcePath . '/' . $sourceFile);
		$against = $help;
		unset($help);

		$column_breaks = 0;
		$entry = 0;
		foreach ($validate as $help)
		{
			if (gettype($help) != 'array' || sizeof($help) != 2 || !isset($help[0]) || !isset($help[1]))
			{
				$this->output->addMessage(Output::FATAL, 'Found invalid entry: ' . serialize($help), $originFile, $entry);
			}
			else if ($help[0] == '--' && $help[1] == '--')
			{
				$column_breaks++;
			}

			if (isset($help[0]))
			{
				$compare = isset($against[$entry][0]) ? $against[$entry][0] : '';
				$this->langkeyValidator->validate($originFile, $entry . '.0', $compare, $help[0]);
			}

			if (isset($help[1]))
			{
				$compare = isset($against[$entry][1]) ? $against[$entry][1] : '';
				$this->langkeyValidator->validate($originFile, $entry . '.1', $compare, $help[1]);
			}
			$entry++;
		}

		if ($column_breaks != 1)
		{
			$this->output->addMessage(Output::FATAL, 'Must have exactly one column break entry', $originFile);
		}
	}

	/**
	 * Validates the search_synonyms.php file
	 *
	 * Files must only contain the variable $synonyms.
	 * This variable must be an array of string => string entries.
	 *
	 * @todo		Check for template vars and html
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateSearchSynonymsFile($originFile)
	{
		/** @var $synonyms */
		include($this->originPath . '/' . $originFile);

		$defined_variables = get_defined_vars();
		if (sizeof($defined_variables) != 2 || !isset($defined_variables['synonyms']) || gettype($defined_variables['synonyms']) != 'array')
		{
			$this->output->addMessage(Output::FATAL, 'Must only contain the synonyms-array', $originFile);
			return;
		}

		foreach ($synonyms as $synonym1 => $synonym2)
		{
			if (gettype($synonym1) != 'string' || gettype($synonym2) != 'string')
			{
				$this->output->addMessage(Output::FATAL, 'Must only contain entries of type string => string: ' . serialize($synonym1) . ' => ' . serialize($synonym2), $originFile);
			}
		}
	}

	/**
	 * Validates the search_ignore_words.php file
	 *
	 * Files must only contain the variable $words.
	 * This variable must be an array of string entries.
	 *
	 * @todo		Check for template vars and html
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateSearchIgnoreWordsFile($originFile)
	{
		/** @var $words */
		include($this->originPath . '/' . $originFile);

		$defined_variables = get_defined_vars();
		if (sizeof($defined_variables) != 2 || !isset($defined_variables['words']) || gettype($defined_variables['words']) != 'array')
		{
			$this->output->addMessage(Output::FATAL, 'Must only contain the words-array', $originFile);
			return;
		}

		foreach ($words as $word)
		{
			if (gettype($word) != 'string')
			{
				//@todo use $i
				$this->output->addMessage(Output::FATAL, 'Must only contain entries of type string: ' . serialize($word), $originFile);
			}
		}
	}

	/**
	 * Validates the LICENSE file
	 *
	 * Only "GNU GENERAL PUBLIC LICENSE Version 2" is allowed
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateLicenseFile($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);

		if (md5($fileContents) != 'e060338598cd2cd6b8503733fdd40a11')
		{
			$this->output->addMessage(Output::FATAL, 'License must be: GNU GENERAL PUBLIC LICENSE Version 2, June 1991', $originFile);
		}
	}

	/**
	 * Validates a index.htm file
	 *
	 * Only empty index.htm or the default htm file are allowed
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateIndexFile($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);

		// Empty index.htm file or one that displayes an empty white page
		if ($fileContents !== '' && md5($fileContents) != '16703867d439efbd7c373dc2269e25a7')
		{
			$this->output->addMessage(Output::FATAL, 'File must be empty', $originFile);
		}
	}

	/**
	 * Validates the iso.txt file
	 *
	 * Should only contain 3 lines:
	 * 1. English name of the language
	 * 2. Native name of the language
	 * 3. Line with information about the author
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateIsoFile($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);
		$isoFile = explode("\n", $fileContents);

		if (sizeof($isoFile) != 3)
		{
			$this->output->addMessage(Output::FATAL, 'Must contain exactly 3 lines: 1. English name, 2. Native name, 3. Author information', $originFile);
		}
	}

	/**
	 * Validates whether a file checks for the IN_PHPBB constant
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateDefinedInPhpbb($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);

		// Regex copied from MPV
		if (!preg_match("#defined([ ]+){0,1}\\(([ ]+){0,1}'IN_PHPBB'#", $fileContents))
		{
			$this->output->addMessage(Output::FATAL, 'Must check whether IN_PHPBB is defined', $originFile);
		}
	}

	/**
	 * Validates whether a file checks for the IN_PHPBB constant
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateUtf8withoutbom($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);
		$fileContents = explode("\n", $fileContents);
		$fileContents = $fileContents[0];

		// Is the file saved as UTF8 with BOM?
		if (substr($fileContents, 0, 3) === "\xEF\xBB\xBF")
		{
			$this->output->addMessage(Output::FATAL, 'File must be encoded using UTF8 without BOM', $originFile);
		}
	}

	/**
	 * Validates whether a file does not contain a closing php tag
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateNoPhpClosingTag($originFile)
	{
		if ($this->phpbbVersion === '3.0')
		{
			return;
		}

		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);
		$fileContents = str_replace("\r\n", "\n", $fileContents);
		$fileContents = str_replace("\r", "\n", $fileContents);

		// Does the file contain anything after the last ");"
		if (substr($fileContents, -3) !== ");\n")
		{
			$this->output->addMessage(Output::FATAL, 'File must not contain a PHP closing tag, but end with one new line', $originFile);
		}
	}

	/**
	 * Validates whether a file checks whether the file uses Linux line endings
	 *
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateLineEndings($originFile)
	{
		$fileContents = (string) file_get_contents($this->originPath . '/' . $originFile);

		if (strpos($fileContents, "\r") !== false)
		{
			$this->output->addMessage(Output::FATAL, 'Not using Linux line endings (LF)', $originFile);
		}
	}

	/**
	 * Validates whether a file checks whether the file uses Linux line endings
	 *
	 * @param	string	$sourceFile		Source file for comparison
	 * @param	string	$originFile		File to validate
	 * @return	null
	 */
	public function validateCSSFile($sourceFile, $originFile)
	{
		$sourceFileContents = (string) file_get_contents($this->sourcePath . '/' . $sourceFile);
		$originFileContents = (string) file_get_contents($this->originPath . '/' . $originFile);

		$sourceRules = $this->getCSSRules($sourceFile, $sourceFileContents);
		$originRules = $this->getCSSRules($originFile, $originFileContents);

		$missingRules = array_diff(array_keys($sourceRules), array_keys($originRules));
		$additionalRules = array_diff(array_keys($originRules), array_keys($sourceRules));
		if (!empty($missingRules))
		{
			$this->output->addMessage(Output::FATAL, 'Stylesheet file is missing CSS rules: ' . implode(', ', $missingRules), $originFile);
		}
		if (!empty($additionalRules))
		{
			$this->output->addMessage(Output::FATAL, 'Stylesheet file has additional CSS rules: ' . implode(', ', $additionalRules), $originFile);
		}
	}

	protected function getCSSRules($fileName, $fileContent)
	{
		// Remove comments
		$fileContent = preg_replace('#/\*(?:.(?!/)|[^\*](?=/)|(?<!\*)/)*\*/#s', '', $fileContent);
		#$fileContent = str_replace(array("\t", "\n"), ' ', $fileContent);
		$fileContent = preg_replace('!\s+!', ' ', $fileContent) . ' ';

		$content = explode('} ', $fileContent);
		if (trim(array_pop($content)) !== '')
		{
			$this->output->addMessage(Output::FATAL, 'Stylesheet file structure is invalid (Output after last rule)', $fileName);
		}

		$cssRules = array();
		foreach ($content as $section)
		{
			if (strpos($section, '{') === false)
			{
				$this->output->addMessage(Output::FATAL, 'Stylesheet file structure is invalid: ' . trim($section), $fileName);
				continue;
			}

			list($rule, $ruleContent) = explode(' {', $section, 2);
			$rule = trim($rule);
			$ruleContent = trim($ruleContent);

			if (strpos($ruleContent, '{') !== false)
			{
				$this->output->addMessage(Output::FATAL, 'CSS rule is invalid: ' . $rule, $fileName);
				continue;
			}

			if (!isset($cssRules[$rule]))
			{
				$cssRules[$rule] = '';
			}

			$cssRules[$rule] .= $ruleContent;
		}

		return $cssRules;
	}
}
