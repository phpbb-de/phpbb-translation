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

class ValidateHtmlTest extends TestBase
{
	public function validateHtmlData()
	{
		return array(
			array('None', 'foobar', 'foobar', array()),
			array('Same', '<em>foobar</em>', '<em>foobar</em>', array()),
			array('Different html', '<em>foobar</em>', '<strong>foobar</strong>', array(
				Output::NOTICE . '-String is using additional html: <strong>--Different html',
			)),
			array('Additional html', '<em>foobar</em>', '<em>foobar</em> <a href="#">foobar</a> <strong>foobar</strong> <invalid>foobar</invalid>', array(
				Output::NOTICE . '-String is using additional html: <strong>--Additional html',
				Output::ERROR . '-String is using additional html: <a href="#">--Additional html',
				Output::FATAL . '-String is using additional html: <invalid>--Additional html',
			)),
			array('Additional unclosed html', '<em>foobar</em>', '<em>foobar</em> <strong>foobar', array(
				Output::NOTICE . '-String is using additional html: <strong>--Additional unclosed html',
				Output::FATAL . '-String is missing closing tag for html: strong--Additional unclosed html',
			)),
			array('Invalid html', '<em>foobar</em>', '<em>foobar</em><em>foobar</e m>', array(
				Output::FATAL . '-String is using invalid html: </e m>--Invalid html',
				Output::FATAL . '-String is missing closing tag for html: em--Invalid html',
			)),
			array('Unclosed html', '<em>foobar</em>', '<em>foo<em>foobar</em>bar', array(
				Output::FATAL . '-String is missing closing tag for html: em--Unclosed html',
			)),

			array(
				'http:// vs https://',
				'<a href="https://www.phpbb.com/">foobar</a>', '<a href="http://www.phpbb.com/">bar foo</a>',
				array(
					Output::NOTICE . '-String is using additional html: <a href="http://www.phpbb.com/">--http:// vs https://',
				),
			),
			array(
				'Different link',
				'<a href="https://www.phpbb.com/">foobar</a>', '<a href="https://www.phpbb.de/">bar foo</a>',
				array(
					Output::WARNING . '-String is using additional html: <a href="https://www.phpbb.de/">--Different link',
				),
			),
			array(
				'TRANSLATION_INFO',
				'Additional link in translator credits', '<a href="https://www.phpbb.com/">bar foo</a>',
				array(
					Output::WARNING . '-String is using additional html: <a href="https://www.phpbb.com/">-language/origin/common.php-TRANSLATION_INFO',
				),
				'language/origin/common.php',
			),
			array(
				'Additional link in help page',
				'foobar', '<a href="https://www.phpbb.com/">bar foo</a>',
				array(
					Output::WARNING . '-String is using additional html: <a href="https://www.phpbb.com/">-language/origin/help_faq.php-Additional link in help page',
				),
				'language/origin/help_faq.php',
			),
			array(
				'Additional link',
				'foobar', '<a href="https://www.phpbb.de/">bar foo</a>',
				array(
					Output::ERROR . '-String is using additional html: <a href="https://www.phpbb.de/">--Additional link',
				),
			),
		);
	}

	/**
	* @dataProvider validateHtmlData
	*/
	public function testValidateHtml($key, $against_language, $validate_language, $expected, $file = '')
	{
		$this->validator->validateHtml($file, $key, $against_language, $validate_language);
		$this->assertOutputMessages($expected);
	}
}
