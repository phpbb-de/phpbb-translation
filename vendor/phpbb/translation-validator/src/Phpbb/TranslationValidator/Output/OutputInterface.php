<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Output;

interface OutputInterface extends \Symfony\Component\Console\Output\OutputInterface
{
	const FATAL = 4;
	const WARNING = 3;
	const ERROR = 2;
	const NOTICE = 1;

	/**
	 * Write a message to the output, but only if Debug is enabled.
	 *
	 * @param $message string|array $messages The message as an array of lines or a single string
	 *
	 * @throws \InvalidArgumentException When unknown output type is given
	 */
	public function writelnIfDebug($message);

	/**
	 * Add a new message to the output of the validator.
	 *
	 * @param int		$type Type message
	 * @param string	$message Message
	 * @param string	$file
	 * @param string	$file_details
	 */
	public function addMessage($type, $message, $file = null, $file_details = null);

	/**
	 * Get all messages saved in the message queue.
	 * @return array Array with messages
	 */
	public function getMessages();

	/**
	 * Get the amount of messages that have a specific level.
	 * @param int $type
	 * @return int
	 */
	public function getMessageCount($type);
}
