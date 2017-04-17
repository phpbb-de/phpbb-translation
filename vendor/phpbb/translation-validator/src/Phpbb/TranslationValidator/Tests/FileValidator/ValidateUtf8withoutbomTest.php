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

class ValidateUtf8withoutbomTest extends TestBase
{
	public function validateUtf8withoutbomdata()
	{
		return array(
			array('utf8withoutbom/without.php', array()),
			array('utf8withoutbom/with.php', array(
				Output::FATAL . '-File must be encoded using UTF8 without BOM-utf8withoutbom/with.php-',
			)),
		);
	}

	/**
	* @dataProvider validateUtf8withoutbomdata
	*/
	public function testValidateUtf8withoutbom($file, $expected)
	{
		$this->validator->validateUtf8withoutbom($file);
		$this->assertOutputMessages($expected);
	}
}
