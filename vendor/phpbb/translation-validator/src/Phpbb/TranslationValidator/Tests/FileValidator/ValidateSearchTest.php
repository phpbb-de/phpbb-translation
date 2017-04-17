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

class ValidateSearchTest extends TestBase
{
	public function validateSearchSynonymsFileData()
	{
		return array(
			array('search_synonyms/valid.php', array()),
			array('search_synonyms/no_synonyms.php', array(
				Output::FATAL . '-Must only contain the synonyms-array-search_synonyms/no_synonyms.php-',
			)),
			array('search_synonyms/invalid_synonyms.php', array(
				Output::FATAL . '-Must only contain the synonyms-array-search_synonyms/invalid_synonyms.php-',
			)),
			array('search_synonyms/additional_variable.php', array(
				Output::FATAL . '-Must only contain the synonyms-array-search_synonyms/additional_variable.php-',
			)),
			array('search_synonyms/invalid_synonym.php', array(
				Output::FATAL . '-Must only contain entries of type string => string: s:3:"bar"; => i:1;-search_synonyms/invalid_synonym.php-',
				Output::FATAL . '-Must only contain entries of type string => string: i:0; => s:4:"this";-search_synonyms/invalid_synonym.php-',
				Output::FATAL . '-Must only contain entries of type string => string: i:1; => i:2;-search_synonyms/invalid_synonym.php-',
			)),
		);
	}

	/**
	* @dataProvider validateSearchSynonymsFileData
	*/
	public function testValidateSearchSynonymsFile($file, $expected)
	{
		$this->validator->validateSearchSynonymsFile($file);
		$this->assertOutputMessages($expected);
	}

	public function validateSearchIgnoreWordsFileData()
	{
		return array(
			array('search_ignore_words/valid.php', array()),
			array('search_ignore_words/no_words.php', array(
				Output::FATAL . '-Must only contain the words-array-search_ignore_words/no_words.php-',
			)),
			array('search_ignore_words/invalid_words.php', array(
				Output::FATAL . '-Must only contain the words-array-search_ignore_words/invalid_words.php-',
			)),
			array('search_ignore_words/additional_variable.php', array(
				Output::FATAL . '-Must only contain the words-array-search_ignore_words/additional_variable.php-',
			)),
			array('search_ignore_words/invalid_word.php', array(
				Output::FATAL . '-Must only contain entries of type string: i:0;-search_ignore_words/invalid_word.php-',
			)),
		);
	}

	/**
	* @dataProvider validateSearchIgnoreWordsFileData
	*/
	public function testValidateSearchIgnoreWordsFile($file, $expected)
	{
		$this->validator->validateSearchIgnoreWordsFile($file);
		$this->assertOutputMessages($expected);
	}
}
