<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */
namespace Phpbb\TranslationValidator\Tests\LangKeyValidator;

use Phpbb\TranslationValidator\Output\Output;

class ValidateTest extends TestBase
{
	public function validateData()
	{
		return array(
			array('String-Array', 'foobar', array(), array(
				Output::FATAL . '-Key should be type string but is type array--String-Array',
			)),
			array('Array-String', array(), 'foobar', array(
				Output::FATAL . '-Key should be type array but is type string--Array-String',
			)),
			array('String-Int', 'foobar', 0, array(
				Output::FATAL . '-Key should be type string but is type integer--String-Int',
			)),
			array('Int-String', 0, 'foobar', array(
				Output::FATAL . '-Key should be type integer but is type string--Int-String',
			)),
			array('Array-Int', array(), 0, array(
				Output::FATAL . '-Key should be type array but is type integer--Array-Int',
			)),
			array('Int-Array', 0, array(), array(
				Output::FATAL . '-Key should be type integer but is type array--Int-Array',
			)),
		);
	}

	/**
	 * @dataProvider validateData
	 */
	public function testValidate($key, $against_language, $validate_language, $expected)
	{
		$this->validator->validate('', $key, $against_language, $validate_language);
		$this->assertOutputMessages($expected);
	}
}
