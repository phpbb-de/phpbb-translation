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

class ValidateDefinedInPhpbbTest extends TestBase
{
	public function validateDefinedInPhpbbData()
	{
		return array(
			array('in_phpbb/valid.php', array()),
			array('in_phpbb/invalid.php', array(
				Output::FATAL . '-Must check whether IN_PHPBB is defined-in_phpbb/invalid.php-',
			)),
		);
	}

	/**
	* @dataProvider validateDefinedInPhpbbData
	*/
	public function testValidateDefinedInPhpbb($file, $expected)
	{
		$this->validator->validateDefinedInPhpbb($file);
		$this->assertOutputMessages($expected);
	}
}
