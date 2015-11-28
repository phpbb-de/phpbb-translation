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

class ValidateEmailTest extends TestBase
{
	public function validateEmailData()
	{
		return array(
			array('email/email.txt', array(
				Output::FATAL . '-Must have a "Subject: "-line-email/email.txt-',
				Output::FATAL . '-Must have the signature appended-email/email.txt-',
				Output::FATAL . '-Is using additional variables: {TEMPLATE_VAR_DOES_NOT_EXIST}, {U_ACTIVATE*NOT_USING_NORMAL_VAR*}-email/email.txt-',
				Output::ERROR . '-Is not using variables: {U_ACTIVATE}-email/email.txt-',
				Output::FATAL . '-Using additional HTML: &lt;a href=&quot;localhost&quot;&gt;-email/email.txt-',
				Output::FATAL . '-Using additional HTML: &lt;/a&gt;-email/email.txt-',
				Output::NOTICE . '-Missing new line at the end of the file-email/email.txt-',
			)),
			array('email/invalid_sig.txt', array(
				Output::FATAL . '-File must be encoded using UTF8 without BOM-email/invalid_sig.txt-',
				Output::FATAL . '-Must not have the signature appended-email/invalid_sig.txt-',
				Output::FATAL . '-Is using additional variables: {YEHAA}-email/invalid_sig.txt-',
			)),
			array('email/crlf_sig.txt', array()),
		);
	}

	/**
	* @dataProvider validateEmailData
	*/
	public function testValidateEmail($file, $expected)
	{
		$this->validator->validateEmail($file, $file);
		$this->assertOutputMessages($expected);
	}

	public function validateEmailAscraeusData()
	{
		return array(
			array('email/email.txt', array(
				Output::FATAL . '-Must have a "Subject: "-line-email/email.txt-',
				Output::FATAL . '-Must have the signature appended-email/email.txt-',
				Output::FATAL . '-Is using additional variables: {TEMPLATE_VAR_DOES_NOT_EXIST}, {U_ACTIVATE*NOT_USING_NORMAL_VAR*}-email/email.txt-',
				Output::ERROR . '-Is not using variables: {U_ACTIVATE}-email/email.txt-',
				Output::FATAL . '-Using additional HTML: &lt;a href=&quot;localhost&quot;&gt;-email/email.txt-',
				Output::FATAL . '-Using additional HTML: &lt;/a&gt;-email/email.txt-',
				Output::FATAL . '-Missing new line at the end of the file-email/email.txt-',
			)),
		);
	}

	/**
	* @dataProvider validateEmailAscraeusData
	*/
	public function testValidateEmailAscraeus($file, $expected)
	{
		$this->validator->setPhpbbVersion('3.1');
		$this->validator->validateEmail($file, $file);
		$this->assertOutputMessages($expected);
	}
}
