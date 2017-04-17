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

class ValidateDateformatsTest extends TestBase
{
	public function validateDateformatsData()
	{
		return array(
			array('EmptyArray', array(), array(
				Output::FATAL . '-Array must not be empty--EmptyArray',
			)),
			array('InvalidArray', array('Array' => array()), array(
				Output::FATAL . '-Should be type string but is type array--InvalidArray.Array',
			)),
			array('InvalidInteger', array('Integer' => 0), array(
				Output::FATAL . '-Should be type string but is type integer--InvalidInteger.Integer',
			)),
			array('ValidString', array('String' => 'foobar'), array()),
			array('UsingHTML', array('String' => 'foo<em>bar</em>'), array(
				Output::NOTICE . '-String is using additional html: <em>--UsingHTML.String',
			)),
			array('UsingHTMLKey', array('Str<em>i</em>ng' => 'foo'), array(
				Output::NOTICE . '-String is using additional html: <em>--UsingHTMLKey.Str<em>i</em>ng',
			)),
		);
	}

	/**
	 * @dataProvider validateDateformatsData
	 */
	public function testValidateDateformats($key, $validate_language, $expected)
	{
		$this->validator->validateDateformats('', $key, $validate_language);
		$this->assertOutputMessages($expected);
	}
}
