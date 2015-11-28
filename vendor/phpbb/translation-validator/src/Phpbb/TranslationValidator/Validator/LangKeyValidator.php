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

class LangKeyValidator
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

	/** @var int */
	protected $pluralRule;

	/** @var bool */
	protected $debug;

	/** @var \Symfony\Component\Console\Input\InputInterface */
	protected $input;
	/** @var \Phpbb\TranslationValidator\Output\OutputInterface */
	protected $output;

	/**
	 * List of additional html we found
	 *
	 * This will allow to not display the same error multiple times for the same string
	 * Structure: file -> key -> html-tag
	 *
	 * @var array
	 */
	protected $additionalHtmlFound = array();

	/**
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 */
	public function __construct(InputInterface $input, OutputInterface $output)
	{
		$this->input = $input;
		$this->output = $output;
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
		return $this;
	}

	/**
	 * Validates type of the language and decides on further validation
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	mixed	$against_language		Original language
	 * @param	mixed	$validate_language		Translated language
	 * @return	null
	 */
	public function validate($file, $key, $against_language, $validate_language)
	{
		if (gettype($against_language) !== gettype($validate_language))
		{
			$this->output->addMessage(Output::FATAL, sprintf('Key should be type %s but is type %s', gettype($against_language), gettype($validate_language)), $file, $key);
			return;
		}

		if ($this->phpbbVersion !== '3.0' && $key === 'PLURAL_RULE')
		{
			if ($validate_language < 0 || $validate_language > 15)
			{
				$this->output->addMessage(Output::FATAL, sprintf('The plural rule %d, which you are trying to use, does not exist. For more information see https://wiki.phpbb.com/Plural_Rules.', $validate_language), $file, $key);
				return;
			}
		}
		else if ($key === 'DIRECTION')
		{
			if (!in_array($validate_language, array('ltr', 'rtl')))
			{
				$this->output->addMessage(Output::FATAL, sprintf('The text direction %s, which you are trying to use, does not exist. Currently only ltr (left-to-right) and rtl (right-to-left) are allowed.', $validate_language), $file, $key);
				return;
			}
		}
		else if ($key === 'USER_LANG')
		{
			if (str_replace('_', '-', $this->originIso) !== $validate_language && strpos($validate_language, $this->originIso . '-') !== 0)
			{
				$this->output->addMessage(Output::FATAL, sprintf('The user language %s, which you are trying to use, does not match the language.', $validate_language), $file, $key);
				return;
			}
		}
		else if (gettype($against_language) === 'string')
		{
			$this->validateString($file, $key, $against_language, $validate_language);
		}
		else
		{
			$this->validateArray($file, $key, $against_language, $validate_language);
		}
	}

	/**
	 * Decides which array validation function should be used, based on the key
	 *
	 * Supports:
	 *	- Dateformats
	 *	- Datetime
	 *	- Timezones
	 *	- BBCode Tokens
	 *	- Report Reasons
	 *	- Plurals
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	array	$against_language		Original language
	 * @param	array	$validate_language		Translated language
	 * @return	null
	 */
	public function validateArray($file, $key, $against_language, $validate_language)
	{
		//var_dump($key, $against_language); echo '<br /><br />';
		if ($key === 'dateformats')
		{
			$this->validateDateformats($file, $key, $validate_language);
		}
		else if (
			$key === 'datetime' ||
			$key === 'timezones' ||
			$key === 'tokens' ||
			$key === 'report_reasons' ||
			$key === 'PM_ACTION' ||
			$key === 'PM_CHECK' ||
			$key === 'PM_RULE'
		)
		{
			$this->validateArrayKey($file, $key, $against_language, $validate_language);
		}
		// ACL array in 3.0, removed in 3.1
		else if ($this->phpbbVersion === '3.0' && strpos($key, 'acl_') === 0)
		{
			$this->validateAcl($file, $key, $against_language, $validate_language);
		}
		// Some special arrays in 3.0, removed in 3.1
		else if ($this->phpbbVersion === '3.0' && (
			$key === 'permission_cat' ||
			$key === 'permission_type' ||
			$key === 'tz' ||
			$key === 'tz_zones'))
		{
			$this->validateArrayKey($file, $key, $against_language, $validate_language);
		}
		// Some special plurals in 3.0
		else if ($this->phpbbVersion === '3.0' && ($key === 'datetime.AGO' || $key === 'NUM_POSTS_IN_QUEUE' || $key === 'USER_LAST_REMINDED'))
		{
			$this->validateArrayKey($file, $key, $against_language, $validate_language);
		}
		else
		{
			$against_keys = array_keys($against_language);
			$key_types = array();
			foreach ($against_keys as $against_key)
			{
				$type = gettype($against_key);
				if (!isset($key_types[$type]))
				{
					$key_types[$type] = 0;
				}
				$key_types[$type]++;
			}

			if (sizeof($key_types) == 1)
			{
				if (isset($key_types['string']))
				{
					$this->validateArrayKey($file, $key, $against_language, $validate_language);
				}
				else if ($this->phpbbVersion !== '3.0' && isset($key_types['integer']))
				{
					$this->validatePluralKeys($file, $key, $against_language, $validate_language);
				}
				else if ($this->phpbbVersion === '3.0' && isset($key_types['integer']))
				{
					// For 3.0 this should not happen
					$this->output->addMessage(Output::NOTICE, 'Array has unsupported type integer', $file, $key);
				}
				else
				{
					$this->output->addMessage(Output::NOTICE, 'Array has mixed types: ' . implode(', ', array_keys($key_types)), $file, $key);
				}
			}
			else
			{
				$this->output->addMessage(Output::NOTICE, 'Array has mixed types: ' . implode(', ', array_keys($key_types)), $file, $key);
			}
		}
	}

	/**
	 * Validates the plural keys
	 *
	 * The set of plural cases should not be empty
	 * There might be an additional case for 0 items
	 * There must not be an additional case
	 * There might be less cases then possible
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	array	$against_language		Original language
	 * @param	array	$validate_language		Translated language
	 * @return	null
	 */
	public function validatePluralKeys($file, $key, $against_language, $validate_language)
	{
		$origin_cases = array_keys($validate_language);

		if (empty($origin_cases))
		{
			$this->output->addMessage(Output::FATAL, 'Plural array must not be empty', $file, $key);
			return;
		}

		$valid_cases = $this->getPluralKeys($this->pluralRule);

		$intersect_cases = array_intersect($origin_cases, $valid_cases);
		$missing_cases = array_diff($valid_cases, $origin_cases);
		$additional_cases = array_diff($origin_cases, $valid_cases, array(0));

		if (!empty($additional_cases))
		{
			$this->output->addMessage(Output::FATAL, 'Plural array has additional case: ' . implode(', ', $additional_cases), $file, $key);
		}

		if (empty($intersect_cases))
		{
			// No intersection means there are no entries apart from the 0
			$this->output->addMessage(Output::FATAL, 'Plural array must not be empty', $file, $key);
			return;
		}

		if (!empty($missing_cases))
		{
			// Do we want to allow this? Lazy translators...
			$this->output->addMessage(Output::WARNING, 'Plural array is missing case: ' . implode(', ', $missing_cases), $file, $key);
		}

		if (!empty($intersect_cases))
		{
			$compare_against = '';
			if ($against_language)
			{
				$compare_against = end($against_language);
			}

			foreach ($intersect_cases as $case)
			{
				$this->validateString($file, $key . '.' . $case, $compare_against, $validate_language[$case], true);
			}
		}
	}

	/**
	 * Returns an array with the valid cases for the given plural rule
	 *
	 * @param	int	$pluralRule
	 * @return	array
	 * @throws \Exception
	 */
	protected function getPluralKeys($pluralRule)
	{
		switch ($pluralRule)
		{
			case 0:
				return array(1);
			case 1:
			case 2:
			case 15:
				return array(1, 2);
			case 3:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:
			case 14:
				return array(1, 2, 3);
			case 4:
			case 10:
			case 13:
				return array(1, 2, 3, 4);
			case 11:
				return array(1, 2, 3, 4, 5);
			case 12:
				return array(1, 2, 3, 4, 5, 6);
		}

		throw new \Exception('Unsupported plural rule');
	}

	/**
	 * Validates the dateformats
	 *
	 * Should not be empty
	 * Keys and Descriptions should not contain HTML
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	array	$validate_language		Translated language
	 * @return	null
	 */
	public function validateDateformats($file, $key, $validate_language)
	{
		if (empty($validate_language))
		{
			$this->output->addMessage(Output::FATAL, 'Array must not be empty', $file, $key);
			return;
		}

		foreach ($validate_language as $dateformat => $example_time)
		{
			$this->validateString($file, $key . '.' . $dateformat, '', $dateformat);
			$this->validateString($file, $key . '.' . $dateformat, '', $example_time);
		}
	}

	/**
	 * Validates a permission entry
	 *
	 * Should have a cat and lang key
	 * cat should be the same as in origin language
	 * lang should compare like a string to origin lang
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	array	$against_language		Original language
	 * @param	array	$validate_language		Translated language
	 * @return	null
	 */
	public function validateAcl($file, $key, $against_language, $validate_language)
	{
		if (!isset($validate_language['cat']))
		{
			$this->output->addMessage(Output::FATAL, 'Permission is missing the cat-key', $file, $key);
		}
		else if ($validate_language['cat'] !== $against_language['cat'])
		{
			$this->output->addMessage(Output::FATAL, sprintf('Permission should have cat %1$s but has %2$s', $against_language['cat'], $validate_language['cat']), $file, $key);
		}

		if (!isset($validate_language['lang']))
		{
			$this->output->addMessage(Output::FATAL, 'Permission is missing the lang-key', $file, $key);
		}
		else
		{
			$this->validateString($file, $key, $against_language['lang'], $validate_language['lang']);
		}
	}

	/**
	 * Validates an array entry
	 *
	 * Arrays that have strings as key, must have the same keys in the foreign language
	 * Arrays that have integers as keys, might have different ones (plurals)
	 * Additional keys can not be further validated
	 *
	 * Function works recursive
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	array	$against_language		Original language
	 * @param	array	$validate_language		Translated language
	 * @return	null
	 */
	public function validateArrayKey($file, $key, $against_language, $validate_language)
	{
		if (gettype($against_language) !== gettype($validate_language))
		{
			$this->output->addMessage(Output::FATAL, sprintf('Should be type %1$s but is type %2$s', gettype($against_language), gettype($validate_language)), $file, $key);
			return;
		}

		$cat_validate_keys = array_keys($validate_language);
		$cat_against_keys = array_keys($against_language);
		$invalid_keys = array_diff($cat_validate_keys, $cat_against_keys);

		foreach ($against_language as $array_key => $lang)
		{
			// Only error for string keys, plurals might force different keys
			if (!isset($validate_language[$array_key]))
			{
				if (gettype($array_key) == 'string')
				{
					$this->output->addMessage(Output::FATAL, 'Array is missing key: ' . $array_key, $file, $key);
				}
				continue;
			}

			if (is_string($lang))
			{
				$this->validateString($file, $key . '.' . $array_key, $lang, $validate_language[$array_key]);
			}
			else
			{
				$this->validateArray($file, $key . '.' . $array_key, $lang, $validate_language[$array_key]);
			}
		}

		if (!empty($invalid_keys))
		{
			foreach ($invalid_keys as $array_key)
			{
				if (gettype($array_key) == 'string')
				{
					$this->output->addMessage(Output::FATAL, 'Array has invalid key: ' . $array_key, $file, $key);
				}
				else if ($this->phpbbVersion === '3.0' && ($key === 'datetime.AGO' || $key === 'NUM_POSTS_IN_QUEUE' || $key === 'USER_LAST_REMINDED'))
				{
					// 3.0 plurals
					$this->output->addMessage(Output::WARNING, 'Array has additional key: ' . $array_key, $file, $key);
				}
				else
				{
					// Strangly used plural?
					$this->output->addMessage(Output::FATAL, 'Array has invalid key: ' . $array_key, $file, $key);
				}
				$this->output->addMessage(Output::ERROR, 'Key was not validated: ' . $array_key, $file, $key . '.' . $array_key);
			}
		}
	}

	/**
	 * Validates a string
	 *
	 * Checks whether replacements %d and %s are used correctly
	 * Checks for HTML
	 *
	 * @param	string	$file		File to validate
	 * @param	string	$key		Key to validate
	 * @param	string	$against_language		Original language string
	 * @param	string	$validate_language		Translated language string
	 * @param	bool	$is_plural	String is part of a plural (we don't complain, if the first integer is missing)
	 * @return	null
	 */
	public function validateString($file, $key, $against_language, $validate_language, $is_plural = false)
	{
		if (gettype($against_language) !== gettype($validate_language))
		{
			$this->output->addMessage(Output::FATAL, sprintf('Should be type %1$s but is type %2$s', gettype($against_language), gettype($validate_language)), $file, $key);
			return;
		}

		$against_strings = $against_strings_nonumber = substr_count($against_language, '%s');
		$against_integers = $against_integers_nonumber = substr_count($against_language, '%d');
		$validate_strings = $validate_strings_nonumber = substr_count($validate_language, '%s');
		$validate_integers = $validate_integers_nonumber = substr_count($validate_language, '%d');

		$against_integers_ary = $validate_integers_ary = array();
		for ($i = 1; $i < 10; $i++)
		{
			if ($looping_count = substr_count($against_language, '%' . $i . '$s'))
			{
				$against_strings++;
			}
			if ($looping_count = substr_count($against_language, '%' . $i . '$d'))
			{
				$against_integers++;
				$against_integers_ary[] = $i;
			}
			if ($looping_count = substr_count($validate_language, '%' . $i . '$s'))
			{
				$validate_strings++;
			}
			if ($looping_count = substr_count($validate_language, '%' . $i . '$d'))
			{
				$validate_integers++;
				$validate_integers_ary[] = $i;
			}
		}

		if ($against_strings - $validate_strings !== 0)
		{
			$level = Output::FATAL;
			if ($this->originLanguagePath . 'ucp.php' === $file && in_array($key, array('TERMS_OF_USE_CONTENT', 'PRIVACY_POLICY')))
			{
				$level = Output::ERROR;
			}

			$this->output->addMessage($level, sprintf('Should have %1$s string arguments, but has %2$s', $against_strings, $validate_strings), $file, $key);
		}

		if ($against_integers - $validate_integers !== 0)
		{
			if (!$is_plural || ($is_plural && abs($against_integers - $validate_integers) !== 1))
			{
				$level = Output::FATAL;
				// phpBB 3.0 Plural workarounds
				if ($this->phpbbVersion === '3.0' && abs($against_integers - $validate_integers) === 1 &&
					($this->originLanguagePath . 'common.php' === $file && $key === 'VIEW_ONLINE_TIME')
				)
				{
					$level = Output::WARNING;
				}
				$this->output->addMessage($level, sprintf('Should have %1$s integer arguments, but has %2$s', $against_integers, $validate_integers), $file, $key);
			}
			else if ($is_plural)
			{
				// If there are more then 1 integer parameters and they have no numbers
				// the number of integers must match!
				if ($against_integers_nonumber > 1)
				{
					$this->output->addMessage(Output::FATAL, sprintf('Should have %1$s integer arguments, but has %2$s', $against_integers, $validate_integers), $file, $key);
				}
				else if (!$against_integers_nonumber)
				{
					if (sizeof($against_integers_ary) > sizeof($validate_integers_ary))
					{
						// If the integers have numbers, only the first integer is allowed to be missing.
						array_pop($against_integers_ary);
						$diff = array_diff($against_integers_ary, $validate_integers_ary);
						if (!empty($diff))
						{
							$this->output->addMessage(Output::FATAL, sprintf('Should have %1$s integer arguments, but has %2$s', $against_integers, $validate_integers), $file, $key);
						}
					}
					else
					{
						// But this could also happen to the against language. So when the first integer
						// of the validate language is prior to against, that is okay aswell.
						array_pop($validate_integers_ary);
						$diff = array_diff($validate_integers_ary, $against_integers_ary);
						if (empty($diff))
						{
							$this->output->addMessage(Output::FATAL, sprintf('Should have %1$s integer arguments, but has %2$s', $against_integers, $validate_integers), $file, $key);
						}
					}
				}

			}
		}

		$this->validateHtml($file, $key, $against_language, $validate_language);
	}

	/**
	 * Validates the html usage in a string
	 *
	 * Checks whether the used HTML tags are also used in the original language.
	 * Omitting tags is okay, as long as both (start and end) are omitted.
	 *
	 * @param	string	$file			File to validate
	 * @param	string	$key			Key to validate
	 * @param	string	$sourceString	Language string to validate against
	 * @param	string	$originString	Language string to validate
	 * @return	null
	 */
	public function validateHtml($file, $key, $sourceString, $originString)
	{
		if ($this->originLanguagePath . 'install.php' === $file && in_array($key, array(
			'INSTALL_CONGRATS_EXPLAIN',
			'INSTALL_INTRO_BODY',
			'SUPPORT_BODY',
			'UPDATE_INSTALLATION_EXPLAIN',
			'OVERVIEW_BODY',
		)) || $this->originLanguagePath . 'ucp.php' === $file && in_array($key, array(
			'TERMS_OF_USE_CONTENT',
			'PRIVACY_POLICY',
		)))
		{
			$sourceString = '<p>' . $sourceString . '</p>';
			$originString = '<p>' . $originString . '</p>';
		}

		$sourceHtml = $originHtml = $openTags = array();
		preg_match_all('/\<.+?\>/', $sourceString, $sourceHtml);
		preg_match_all('/\<.+?\>/', $originString, $originHtml);

		if (empty($originHtml) || empty($originHtml[0]))
		{
			// Return when we have no HTML
			return;
		}
		$sourceHtml = isset($sourceHtml[0]) ? $sourceHtml[0] : array();

		$failedUnclosed = false;
		foreach ($originHtml[0] as $possibleHtml)
		{
			$openingTag = $possibleHtml[1] !== '/';
			$ignoreAdditional = false;

			// The closing tag contains a space
			if (!$openingTag && strpos($possibleHtml, ' ') !== false)
			{
				$this->output->addMessage(Output::FATAL, 'String is using invalid html: ' . $possibleHtml, $file, $key);
				$ignoreAdditional = true;
			}

			$tag = (strpos($possibleHtml, ' ') !== false) ? substr($possibleHtml, 1, strpos($possibleHtml, ' ') - 1) : substr($possibleHtml, 1, strpos($possibleHtml, '>') - 1);
			$tag = ($openingTag) ? $tag : substr($tag, 1);

			if ($openingTag)
			{
				if (in_array($tag, $openTags))
				{
					if (!$failedUnclosed)
					{
						$this->output->addMessage(Output::FATAL, 'String is missing closing tag for html: ' . $tag, $file, $key);
					}
					$failedUnclosed = true;
				}
				else if (substr($possibleHtml, -3) !== ' />')
				{
					$openTags[] = $tag;
				}
			}
			else if (empty($openTags))
			{
				if (!$failedUnclosed)
				{
					$this->output->addMessage(Output::FATAL, sprintf('String is closing tag for html “%s” which was not opened before', $tag), $file, $key);
				}
				$failedUnclosed = true;
			}
			else if (end($openTags) != $tag)
			{
				if (!$failedUnclosed)
				{
					$this->output->addMessage(Output::FATAL, 'String is missing closing tag for html: ' . end($openTags), $file, $key);
				}
				$failedUnclosed = true;
			}
			else
			{
				array_pop($openTags);
			}

			// HTML tag is not used in original language
			if (!$ignoreAdditional && !in_array($possibleHtml, $sourceHtml) && !isset($this->additionalHtmlFound[$file][$key][$possibleHtml]))
			{
				$this->additionalHtmlFound[$file][$key][$possibleHtml] = true;
				if (strpos($possibleHtml, '</') === 0)
				{
					// Do not add an additional entry for closing tags
					continue;
				}

				$level = $this->getErrorLevelForAdditionalHtml($possibleHtml);
				if (strpos($possibleHtml, '<a ') === 0)
				{
					if (in_array(str_replace('http://', 'https://', $possibleHtml), $sourceHtml))
					{
						$level = Output::NOTICE;
					}
					else if (
						in_array('</a>', $sourceHtml) ||
						$this->originLanguagePath . 'common.php' === $file && $key === 'TRANSLATION_INFO' ||
						$this->originLanguagePath . 'help_faq.php' === $file ||
						$this->originLanguagePath . 'help_bbcode.php' === $file
					)
					{
						// Source contains a link aswell, mostly IST changed the link to better match the language
						// It's the translation info with the credit links of the translators
						// Or the help pages (faq and bbcode help), where links are not as bad as in other places.
						$level = Output::WARNING;
					}
				}

				$this->output->addMessage($level, 'String is using additional html: ' . $possibleHtml, $file, $key);
			}
		}

		if (!empty($openTags) && !$failedUnclosed)
		{
			$this->output->addMessage(Output::FATAL, 'String is missing closing tag for html: ' . $openTags[0], $file, $key);
		}
	}

	/**
	 * Returns the error level for a given HTML
	 *
	 * Error:
	 *  - <i> should be <em>
	 *  - <b> should be <strong>
	 * Notice:
	 *  - <em>
	 *  - <strong>
	 *  - <samp>
	 *  - <u>
	 *  - <br />
	 * Fatal:
	 *  - others
	 *
	 * @param string $html
	 * @return int Error level
	 */
	protected function getErrorLevelForAdditionalHtml($html)
	{
		if (preg_match('#^<(i|b|ul|ol|li|h3)( style="[a-zA-Z0-9_\:\ \;\-]+")?>$#', $html))
		{
			return Output::ERROR;
		}

		if (in_array($html, array(
			'<em>',
			'<strong>',
			'<samp>',
			'<u>',
			'<br />',
		)))
		{
			return Output::NOTICE;
		}

		if (preg_match('#^<a href="([a-zA-Z0-9_\:\&\/\?\.\-\#\@]+)">$#', $html) ||
			preg_match('#^<a href="([a-zA-Z0-9_\:\&\/\?\.\-\#]+)" rel="external">$#', $html))
		{
			return Output::ERROR;
		}

		return Output::FATAL;
	}
}
