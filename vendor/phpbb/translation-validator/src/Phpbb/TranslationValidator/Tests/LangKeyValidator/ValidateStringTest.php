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

class ValidateStringTest extends TestBase
{
	public function validateStringData()
	{
		return array(
			array('Plain', 'foobar', 'foobar', array()),
			array('String', 'foobar %s', 'foo %s bar', array()),
			array('2 strings', 'foobar %s %s', 'foo %1$s %2$s bar', array()),
			array('2 strings reordered', 'foobar %s %s', 'foo %2$s %1$s bar', array()),
			array('2 strings with reuse', 'foobar %s %s', 'foo %2$s %1$s bar %2$s', array()),
			array('2 strings with reuse/skip', 'foobar %s %s', 'foo %2$s bar %2$s', array(
				Output::FATAL . '-Should have 2 string arguments, but has 1--2 strings with reuse/skip',
				)),
			array('Integer', 'foobar %d', 'foo %d bar', array()),
			array('2 integers', 'foobar %d %d', 'foo %1$d %2$d bar', array()),
			array('2 integers reordered', 'foobar %d %d', 'foo %2$d %1$d bar', array()),
			array('Mixed', 'foobar %d %s', 'foo %d %s bar', array()),
			array('Mixed reordered', 'foobar %d %s', 'foo %s %d bar', array()),
			array('Mixed reordered #$', 'foobar %d %s', 'foo %2$s %1$d bar', array()),
			array('Mixed missing int', 'foobar %d %s', 'foo %s bar', array(
				Output::FATAL . '-Should have 1 integer arguments, but has 0--Mixed missing int',
			)),
			array('Mixed missing string', 'foobar %d %s', 'foo %d bar', array(
				Output::FATAL . '-Should have 1 string arguments, but has 0--Mixed missing string',
			)),
			array('Mixed invalid int', 'foobar %d %s', 'foo %s %d %d bar', array(
				Output::FATAL . '-Should have 1 integer arguments, but has 2--Mixed invalid int',
			)),
			array('Mixed invalid string', 'foobar %d %s', 'foo %s %s %d bar', array(
				Output::FATAL . '-Should have 1 string arguments, but has 2--Mixed invalid string',
			)),
		);
	}

	/**
	 * @dataProvider validateStringData
	 */
	public function testValidateString($key, $against_language, $validate_language, $expected)
	{
		$this->validator->validateString('', $key, $against_language, $validate_language);
		$this->assertOutputMessages($expected);
	}

	public function validateStringPluralsData()
	{
		return array(
			array('Integer', 'foobar %d', 'foo %d bar', array()),
			array('MissingInt', 'foobar %d', 'foo bar', array()),
			array('2Integers', 'foobar %d %d', 'foo %d %d bar', array()),
			array('2IntegersMissingInt', 'foobar %d %d', 'foo %d bar', array(
				Output::FATAL . '-Should have 2 integer arguments, but has 1--2IntegersMissingInt',
			)),
			array('2IntegersNum', 'foobar %1$d %2$d', 'foo %1$d %2$d bar', array()),
			array('2IntegersNumMissingInt1', 'foobar %1$d %2$d', 'foo %2$d bar', array(
				Output::FATAL . '-Should have 2 integer arguments, but has 1--2IntegersNumMissingInt1',
			)),
			array('2IntegersNumMissingInt2', 'foobar %1$d %2$d', 'foo %1$d bar', array()),
			array('2IntegersNumMAdditionalInt1', 'foobar %2$d', 'foo %1$d %2$d bar', array()),
			array('2IntegersNumMAdditionalInt2', 'foobar %1$d', 'foo %1$d %2$d bar', array(
				Output::FATAL . '-Should have 1 integer arguments, but has 2--2IntegersNumMAdditionalInt2',
			)),
		);
	}

	/**
	 * @dataProvider validateStringPluralsData
	 */
	public function testValidateStringPlurals($key, $against_language, $validate_language, $expected)
	{
		$this->validator->validateString('', $key, $against_language, $validate_language, true);
		$this->assertOutputMessages($expected);
	}
}
