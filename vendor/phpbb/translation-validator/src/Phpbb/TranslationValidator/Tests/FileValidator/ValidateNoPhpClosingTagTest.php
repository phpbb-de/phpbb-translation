<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Tests\FileValidator;

use Phpbb\TranslationValidator\Output\Output;

class ValidateNoPhpClosingTagTest extends TestBase
{
	public function validateNoPhpClosingTagData()
	{
		return array(
			array('3.0', 'nophpclosingtag/withouttag.php', array()),
			array('3.0', 'nophpclosingtag/withoutnewline.php', array()),
			array('3.0', 'nophpclosingtag/withtag.php', array()),
			array('3.0', 'nophpclosingtag/withcrlf.php', array()),

			array('3.1', 'nophpclosingtag/withouttag.php', array()),
			array('3.1', 'nophpclosingtag/withoutnewline.php', array(
				Output::FATAL . '-File must not contain a PHP closing tag, but end with one new line-nophpclosingtag/withoutnewline.php-',
			)),
			array('3.1', 'nophpclosingtag/withtag.php', array(
				Output::FATAL . '-File must not contain a PHP closing tag, but end with one new line-nophpclosingtag/withtag.php-',
			)),
			array('3.1', 'nophpclosingtag/withcrlf.php', array()),
		);
	}

	/**
	* @dataProvider validateNoPhpClosingTagData
	*/
	public function testvalidateNoPhpClosingTag($phpbbVersion, $file, $expected)
	{
		$this->validator->setPhpbbVersion($phpbbVersion);
		$this->validator->validateNoPhpClosingTag($file);
		$this->assertOutputMessages($expected);
	}
}
