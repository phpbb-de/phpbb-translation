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

class ValidatePluralKeysTest extends TestBase
{
	public function validatePluralKeysData()
	{
		return array(
			array('EmptyArray', 0, array(), array(
				Output::FATAL . '-Plural array must not be empty--EmptyArray',
			)),
			array('EmptyZeroArray', 0, array(0 => 'None'), array(
				Output::FATAL . '-Plural array must not be empty--EmptyZeroArray',
			)),
			array('FullArray', 0, array(
					1 => 'Default',
			), array()),
			array('FullZeroArray', 0, array(
					0 => 'Zero',
					1 => 'Default',
			), array()),
			array('MissingArray', 1, array(
					1 => 'Default',
					//2 => 'Default2 Missing',
				), array(
				Output::WARNING . '-Plural array is missing case: 2--MissingArray',
			)),
			array('MissingZeroArray', 1, array(
					0 => 'Zero',
					1 => 'Default1',
					//2 => 'Default2 Missing',
				), array(
				Output::WARNING . '-Plural array is missing case: 2--MissingZeroArray',
			)),
			array('AdditionalArray', 0, array(
					1 => 'Default',
					2 => 'Additional',
				), array(
				Output::FATAL . '-Plural array has additional case: 2--AdditionalArray',
			)),
			array('AdditionalZeroArray', 0, array(
					0 => 'Zero',
					1 => 'Default',
					2 => 'Additional',
				), array(
				Output::FATAL . '-Plural array has additional case: 2--AdditionalZeroArray',
			)),
		);
	}

	/**
	 * @dataProvider validatePluralKeysData
	 */
	public function testValidatePluralKeys($key, $plural_rule, $validate_language, $expected)
	{
		$this->validator->setPluralRule($plural_rule);

		$this->validator->validatePluralKeys('', $key, array(), $validate_language);
		$this->assertOutputMessages($expected);
	}
}
