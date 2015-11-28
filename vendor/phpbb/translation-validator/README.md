# phpBB Translation Validator Extension

Allows to validate **phpBB** language packages.

## Requirement

This extension requires php 5.3.3 or later to be set up.

## Installation for validating a language package locally

*Note:* the validator only works when you have the source language pack in your directory (default source language is `en`).

1. [Download](https://github.com/nickvergessen/phpbb-translation-validator/archive/master.zip) the package.
2. Run `php composer.phar install` to download the dependencies
3. Run `php src/Phpbb/TranslationValidator/PhpbbTranslationValidator.php` to get information how to run the validator

## Installation for validating a language package on TravisCI

1. Add the TranslationValidator as a dependecy:

		{
			"require-dev": {
				"phpbb/translation-validator": "1.3.*"
			}
		}

2. Add the `php vendor/bin/PhpbbTranslationValidator.php` call you run locally to your `.travis.yml`

## Tests and Continuous Intergration

[![Build Status](https://travis-ci.org/phpbb/phpbb-translation-validator.png?branch=master)](https://travis-ci.org/phpbb/phpbb-translation-validator)

We use Travis-CI as a continous intergtation server and phpunit for our unit testing. See more information on the [phpBB development wiki](https://wiki.phpbb.com/Unit_Tests).

## License

[GPLv2](license.txt)
