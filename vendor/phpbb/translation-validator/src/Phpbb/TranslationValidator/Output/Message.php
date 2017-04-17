<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Output;

class Message
{
	protected $type;
	protected $message;
	protected $file;
	protected $file_details;

	/**
	 * @param int		$type Type message
	 * @param string	$message Message
	 * @param string	$file
	 * @param string	$file_details
	 */
	public function __construct($type, $message, $file = null, $file_details = null)
	{
		$this->type = $type;
		$this->message = $message;
		$this->file = $file;
		$this->file_details = $file_details;
	}

	public function getType()
	{
		return $this->type;
	}

	public function __toString()
	{
		$file = '';

		if ($this->file !== null)
		{
			$file = ' in ' . $this->file;

			if ($this->file_details !== null)
			{
				$file .= ':' . $this->file_details;
			}
		}

		switch ($this->type)
		{
			case Output::NOTICE:
				return " <notice>Notice{$file}:</notice>\n$this->message";
			case Output::WARNING:
				return " <warning>Warning{$file}:</warning>\n$this->message";
			case Output::ERROR:
				return " <error>Error{$file}:</error>\n$this->message";
			case Output::FATAL:
				return " <fatal>Fatal{$file}:</fatal>\n$this->message";
			default:
				return '';
		}
	}
}
