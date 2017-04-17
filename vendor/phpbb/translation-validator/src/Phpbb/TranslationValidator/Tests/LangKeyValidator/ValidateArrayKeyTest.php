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

class ValidateArrayKeyTest extends TestBase
{
	public function validateArrayKeyData()
	{
		return array(
			// Invalid types
			array('String-Array', 'foobar', array(), array(
				Output::FATAL . '-Should be type string but is type array--String-Array',
			)),
			array('Array-String', array(), 'foobar', array(
				Output::FATAL . '-Should be type array but is type string--Array-String',
			)),
			array('String-Int', 'foobar', 0, array(
				Output::FATAL . '-Should be type string but is type integer--String-Int',
			)),
			array('Int-String', 0, 'foobar', array(
				Output::FATAL . '-Should be type integer but is type string--Int-String',
			)),
			array('Array-Int', array(), 0, array(
				Output::FATAL . '-Should be type array but is type integer--Array-Int',
			)),
			array('Int-Array', 0, array(), array(
				Output::FATAL . '-Should be type integer but is type array--Int-Array',
			)),

			// Missing keys
			array('MissingKey', array('foo' => 'bar'), array('bar' => 'bar2'), array(
				Output::FATAL . '-Array is missing key: foo--MissingKey',
				Output::FATAL . '-Array has invalid key: bar--MissingKey',
				Output::ERROR . '-Key was not validated: bar--MissingKey.bar',
			)),
			array('MissingIntKey', array(1 => 'bar', 2 => 'bars'), array(1 => 'bar/s'), array(
			)),
		);
	}

	/**
	 * @dataProvider validateArrayKeyData
	 */
	public function testValidateArrayKey($key, $against_language, $validate_language, $expected)
	{
		$this->validator->validateArrayKey('', $key, $against_language, $validate_language);
		$this->assertOutputMessages($expected);
	}
}
