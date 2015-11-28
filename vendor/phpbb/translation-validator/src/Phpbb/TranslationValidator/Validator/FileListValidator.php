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

class FileListValidator
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
	 * Validates the directories
	 *
	 * Directories should not miss any files.
	 * Directories must not contain additional php files.
	 * Directories should not contain additional files.
	 *
	 * @return	array	List of files we can continue to validate.
	 */
	public function validate()
	{
		$sourceFiles = $this->getFileList($this->sourcePath);
		// License file is required but missing from en/, so we add it here
		$sourceFiles[] = $this->sourceLanguagePath . 'LICENSE';
		$sourceFiles = array_unique($sourceFiles);

		$originFiles = $this->getFileList($this->originPath);

		$missingSubsilver2Files = $availableSubsilver2Files = array();
		$validFiles = array();
		foreach ($sourceFiles as $sourceFile)
		{
			$testOriginFile = str_replace('/' . $this->sourceIso . '/', '/' . $this->originIso . '/', $sourceFile);
			if (!in_array($testOriginFile, $originFiles))
			{
				if ($this->phpbbVersion === '3.1' && strpos($testOriginFile, 'styles/subsilver2/') === 0)
				{
					$missingSubsilver2Files[] = $testOriginFile;
				}
				else
				{
					$this->output->addMessage(Output::FATAL, 'Missing required file', $testOriginFile);
				}
			}
			else if (substr($sourceFile, -4) != '.gif' && substr($sourceFile, -12) != 'imageset.cfg')
			{
				if ($this->phpbbVersion === '3.1' && strpos($testOriginFile, 'styles/subsilver2/') === 0)
				{
					$availableSubsilver2Files[] = $testOriginFile;
				}
				$validFiles[$sourceFile] = $testOriginFile;
			}
		}

		if ($this->phpbbVersion === '3.1' && !empty($availableSubsilver2Files) && !empty($missingSubsilver2Files))
		{
			// Either subsilver2 has to be completly there, or not at all
			foreach ($missingSubsilver2Files as $testOriginFile)
			{
				$this->output->addMessage(Output::FATAL, 'Missing required file', $testOriginFile);
			}
		}
		else if ($this->phpbbVersion === '3.1' && empty($availableSubsilver2Files) && !empty($missingSubsilver2Files))
		{
			// If subsilver2 is not there at all, we throw a little warning
			$this->output->addMessage(Output::WARNING, 'Missing subsilver2 files');
		}

		foreach ($originFiles as $origin_file)
		{
			$testSourceFile = str_replace('/' . $this->originIso . '/', '/' . $this->sourceIso . '/', $origin_file);
			if (!in_array($testSourceFile, $sourceFiles))
			{
				if (in_array($origin_file, array(
					$this->originLanguagePath . 'AUTHORS',
					$this->originLanguagePath . 'CHANGELOG',
					$this->originLanguagePath . 'README',
					$this->originLanguagePath . 'VERSION',
				)))
				{
					$this->output->addMessage(Output::NOTICE, 'Found additional file', $origin_file);
				}
				else if ($this->phpbbVersion == '3.1' && in_array($origin_file, array(
					$this->originLanguagePath . 'AUTHORS.md',
					$this->originLanguagePath . 'CHANGELOG.md',
					$this->originLanguagePath . 'README.md',
					$this->originLanguagePath . 'VERSION.md',
				)))
				{
					$this->output->addMessage(Output::NOTICE, 'Found additional file', $origin_file);
				}
				else
				{
					if (substr($origin_file, -10) === '/index.htm' || $origin_file === 'index.htm')
					{
						$level = Output::NOTICE;
					}
					else if ($this->phpbbVersion === '3.2' && strpos($origin_file, 'styles/subsilver2/') === 0)
					{
						$level = Output::FATAL;
					}
					else
					{
						$level = (substr($origin_file, -3) !== '.md') ? Output::FATAL : Output::ERROR;
					}
					$this->output->addMessage($level, 'Found additional file', $origin_file);
				}
			}
		}

		return $validFiles;
	}

	/**
	 * Returns a list of files in the directory
	 *
	 * @param	string	$dir	Directory to go through
	 * @return	array	List of files
	 */
	protected function getFileList($dir)
	{
		$finder = new Finder();
		$iterator = $finder
			->ignoreDotFiles(false)
			->files()
			->sortByName()
			->in($dir)
		;

		$files = array();
		foreach ($iterator as $file)
		{
			/** @var \SplFileInfo $file */
			$files[] = str_replace(DIRECTORY_SEPARATOR, '/', substr($file->getPathname(), strlen($dir) + 1));
		}

		return $files;
	}
}
