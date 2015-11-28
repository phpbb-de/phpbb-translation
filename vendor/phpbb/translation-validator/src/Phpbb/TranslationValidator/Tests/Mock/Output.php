<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Tests\Mock;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Output extends \Phpbb\TranslationValidator\Output\Output
{
	/** @var bool */
	protected $debug;

	public function __construct()
	{
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
				$this->fatals[] = $type . '-' . $message . '-'. $file . '-'. $file_details;
				break;
			case Output::ERROR:
				$this->errors[] = $type . '-' . $message . '-'. $file . '-'. $file_details;
				break;
			case Output::WARNING:
				$this->warnings[] = $type . '-' . $message . '-'. $file . '-'. $file_details;
				break;
			case Output::NOTICE:
				$this->notices[] = $type . '-' . $message . '-'. $file . '-'. $file_details;
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
		$messages = parent::getMessages();
		sort($messages);
		return $messages;
	}
}
