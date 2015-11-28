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

class ValidateIsoTest extends TestBase
{
	public function validateIsoFileData()
	{
		return array(
			array('iso/valid_iso.txt', array()),
			array('iso/more_iso.txt', array(
				Output::FATAL . '-Must contain exactly 3 lines: 1. English name, 2. Native name, 3. Author information-iso/more_iso.txt-',
			)),
			array('iso/fewer_iso.txt', array(
				Output::FATAL . '-Must contain exactly 3 lines: 1. English name, 2. Native name, 3. Author information-iso/fewer_iso.txt-',
			)),
		);
	}

	/**
	* @dataProvider validateIsoFileData
	*/
	public function testValidateIsoFile($file, $expected)
	{
		$this->validator->validateIsoFile($file);
		$this->assertOutputMessages($expected);
	}
}
