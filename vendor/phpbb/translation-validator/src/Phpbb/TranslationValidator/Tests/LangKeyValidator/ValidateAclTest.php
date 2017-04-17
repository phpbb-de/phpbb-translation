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

class ValidateAclTest extends TestBase
{
	public function validateAclData()
	{
		return array(
			array('MissingCat', array('lang' => 'foo', 'cat' => 'bar'), array('lang' => 'foo'), array(
				Output::FATAL . '-Permission is missing the cat-key--MissingCat',
			)),
			array('MissingLang', array('lang' => 'foo', 'cat' => 'bar'), array('cat' => 'bar'), array(
				Output::FATAL . '-Permission is missing the lang-key--MissingLang',
			)),
			array('InvalidCat', array('lang' => 'foo', 'cat' => 'bar'), array('lang' => 'foo', 'cat' => 'notBar'), array(
				Output::FATAL . '-Permission should have cat bar but has notBar--InvalidCat',
			)),
		);
	}

	/**
	* @dataProvider validateAclData
	*/
	public function testValidateAcl($key, $against_language, $validate_language, $expected)
	{
		$this->validator->validateAcl('', $key, $against_language, $validate_language);
		$this->assertOutputMessages($expected);
	}
}
