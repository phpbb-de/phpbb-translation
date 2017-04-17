<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Output implements \Phpbb\TranslationValidator\Output\OutputInterface
{
	/** @var array */
	protected $fatals = array();

	/** @var array */
	protected $errors = array();

	/** @var array */
	protected $warnings = array();

	/** @var array */
	protected $notices = array();

	/** @var \Symfony\Component\Console\Output\OutputInterface */
	protected $output;

	/** @var bool */
	protected $debug;

	public function __construct(\Symfony\Component\Console\Output\OutputInterface $output, $debug)
	{
		$this->output = $output;
		$this->debug = $debug;
	}

	/**
	 * Writes a message to the output.
	 *
	 * @param string|array $messages The message as an array of lines or a single string
	 * @param Boolean $newline Whether to add a newline
	 * @param integer $type The type of output (one of the OUTPUT constants)
	 *
	 * @throws \InvalidArgumentException When unknown output type is given
	 *
	 * @api
	 */
	public function write($messages, $newline = false, $type = self::OUTPUT_NORMAL)
	{
		return $this->output->write($messages, $newline, $type);
	}

	/**
	 * Writes a message to the output and adds a newline at the end.
	 *
	 * @param string|array $messages The message as an array of lines of a single string
	 * @param integer $type The type of output (one of the OUTPUT constants)
	 *
	 * @throws \InvalidArgumentException When unknown output type is given
	 *
	 * @api
	 */
	public function writeln($messages, $type = self::OUTPUT_NORMAL)
	{
		return $this->output->writeln($messages, $type);
	}

	/**
	 * Sets the verbosity of the output.
	 *
	 * @param integer $level The level of verbosity (one of the VERBOSITY constants)
	 *
	 * @api
	 */
	public function setVerbosity($level)
	{
		return $this->output->setVerbosity($level);
	}

	/**
	 * Gets the current verbosity of the output.
	 *
	 * @return integer The current level of verbosity (one of the VERBOSITY constants)
	 *
	 * @api
	 */
	public function getVerbosity()
	{
		return $this->output->getVerbosity();
	}

	/**
	 * Sets the decorated flag.
	 *
	 * @param Boolean $decorated Whether to decorate the messages
	 *
	 * @api
	 */
	public function setDecorated($decorated)
	{
		return $this->output->setDecorated($decorated);
	}

	/**
	 * Gets the decorated flag.
	 *
	 * @return Boolean true if the output will decorate messages, false otherwise
	 *
	 * @api
	 */
	public function isDecorated()
	{
		return $this->output->isDecorated();
	}

	/**
	 * Sets output formatter.
	 *
	 * @param OutputFormatterInterface $formatter
	 *
	 * @api
	 */
	public function setFormatter(OutputFormatterInterface $formatter)
	{
		return $this->output->setFormatter($formatter);
	}

	/**
	 * Returns current output formatter instance.
	 *
	 * @return  OutputFormatterInterface
	 *
	 * @api
	 */
	public function getFormatter()
	{
		return $this->output->getFormatter();
	}

	/**
	 * Write a message to the output, but only if Debug is enabled.
	 *
	 * @param $message string|array $messages The message as an array of lines of a single string
	 *
	 * @throws \InvalidArgumentException When unknown output type is given
	 */
	public function writelnIfDebug($message)
	{
		if ($this->debug)
		{
			$this->writeln($message);
		}
	}

	/**
	 * Add a new message to the output of the validator.
	 *
	 * @param int		$type Type message
	 * @param string	$message Message
	 * @param string	$file
	 * @param string	$file_details
	 */
	public function addMessage($type, $message, $file = null, $file_details = null)
	{
		switch ($type)
		{
			case Output::FATAL:
				$this->fatals[] = new Message($type, $message, $file, $file_details);
				break;
			case Output::ERROR:
				$this->errors[] = new Message($type, $message, $file, $file_details);
				break;
			case Output::WARNING:
				$this->warnings[] = new Message($type, $message, $file, $file_details);
				break;
			case Output::NOTICE:
				$this->notices[] = new Message($type, $message, $file, $file_details);
				break;
			default:
				// TODO: Decide on this?
		}
	}

	/**
	 * Get all messages saved into the message queue.
	 * @return array Array with messages
	 */
	public function getMessages()
	{
		return array_merge($this->fatals, $this->errors, $this->warnings, $this->notices);
	}

	/**
	 * Get the amount of messages that were fatal.
	 * @param int $type
	 * @return int
	 */
	public function getMessageCount($type)
	{
		switch ($type)
		{
			case Output::FATAL:
				return sizeof($this->fatals);
			case Output::ERROR:
				return sizeof($this->errors);
			case Output::WARNING:
				return sizeof($this->warnings);
			case Output::NOTICE:
				return sizeof($this->notices);
		}
		return 0;
	}
}
