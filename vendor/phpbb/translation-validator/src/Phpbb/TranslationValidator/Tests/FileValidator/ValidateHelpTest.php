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

class ValidateHelpTest extends TestBase
{
	public function validateHelpFileData()
	{
		return array(
			array('help/valid.php', array()),
			array('help/no_help.php', array(
				Output::FATAL . '-Should only contain the help-array-help/no_help.php-',
			)),
			array('help/invalid_help_var.php', array(
				Output::FATAL . '-Should only contain the help-array-help/invalid_help_var.php-',
			)),
			array('help/additional_variable.php', array(
				Output::FATAL . '-Should only contain the help-array-help/additional_variable.php-',
			)),
			array('help/invalid_help.php', array(
				Output::FATAL . '-Found invalid entry: a:1:{i:0;s:2:"--";}-help/invalid_help.php-0',
				Output::FATAL . '-Found invalid entry: a:2:{i:0;s:2:"--";i:2;s:2:"--";}-help/invalid_help.php-1',
				Output::FATAL . '-Found invalid entry: a:1:{s:3:"lol";s:3:"bar";}-help/invalid_help.php-2',
				Output::FATAL . '-Found invalid entry: s:3:"foo";-help/invalid_help.php-3',
				Output::FATAL . '-Must have exactly one column break entry-help/invalid_help.php-',
			)),
		);
	}

	/**
	* @dataProvider validateHelpFileData
	*/
	public function testValidateHelpFile($file, $expected)
	{
		$this->validator->validateHelpFile($file, $file);
		$this->assertOutputMessages($expected);
	}
}
