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

class ValidateCSSFileTest extends TestBase
{
	public function validateCSSFileData()
	{
		return array(
			array('css/valid.css', array()),
			array('css/invalid.css', array(
				Output::FATAL . '-CSS rule is invalid: .invalid-inline-css/invalid.css-',
				Output::FATAL . '-Stylesheet file is missing CSS rules: .invalid-inline, .invalid-inline2-css/invalid.css-',
				Output::FATAL . '-Stylesheet file structure is invalid: .invalid-inline2 invalid: inline2;-css/invalid.css-',
			)),
			array('css/invalid2.css', array(
				Output::FATAL . '-Stylesheet file structure is invalid (Output after last rule)-css/invalid2.css-',
				Output::FATAL . '-Stylesheet file is missing CSS rules: .missing-rule-css/invalid2.css-',
				Output::FATAL . '-Stylesheet file has additional CSS rules: .additional-rule-css/invalid2.css-',
			)),
		);
	}

	/**
	* @dataProvider validateCSSFileData
	*/
	public function testValidateCSSFile($file, $expected)
	{
		$this->validator->validateCSSFile($file, $file);
		$this->assertOutputMessages($expected);
	}
}
