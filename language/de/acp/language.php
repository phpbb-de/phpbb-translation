<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe language/de/AUTHORS.md und https://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Sprachdateien Administrations-Bereich',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hier kannst du Sprachpakete installieren und entfernen. Das Standard-Sprachpaket ist mit einem Stern (*) gekennzeichnet.',

	'DELETE_LANGUAGE_CONFIRM'		=> '#Are you sure you wish to delete “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Installierte Sprachpakete',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Sprachdetails erfolgreich aktualisiert.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Dieses Sprachpaket ist bereits installiert.',
	//TODO
	//>>>>>> OLD <<<<<<: 'The language pack <strong>%s</strong> has been removed successfully. All users using this language have been reset to the boards default language.',
	//>>>>>> NEW <<<<<<: 'The language pack “%s” has been removed successfully. All users using this language have been reset to the board’s default language.',
	'LANGUAGE_PACK_DELETED'				=> 'Das Sprachpaket <strong>%s</strong> wurde erfolgreich entfernt. Alle Benutzer, die dieses Paket genutzt haben, wurden auf die Standard-Sprache des Boards umgestellt.',
	'LANGUAGE_PACK_DETAILS'				=> 'Sprachpaket-Details',
	//TODO
	//>>>>>> OLD <<<<<<: 'The language pack <strong>%s</strong> has been successfully installed.',
	//>>>>>> NEW <<<<<<: 'The language pack “%s” has been successfully installed.',
	'LANGUAGE_PACK_INSTALLED'			=> 'Das Sprachpaket <strong>%s</strong> wurde erfolgreich installiert.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Die Sprachvariablen der benutzerdefinierten Profilfelder wurden von der Standard-Sprache übernommen. Bitte passe sie gegebenenfalls an.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokaler Name',
	'LANGUAGE_PACK_NAME'				=> 'Name',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Das gewählte Sprachpaket existiert nicht.',
	'LANGUAGE_PACK_USED_BY'				=> 'Verwendet von (inklusive Spiders/Robots)',
	'LANGUAGE_VARIABLE'					=> 'Wert der Variablen',
	'LANG_AUTHOR'						=> 'Autor des Sprachpakets',
	'LANG_ENGLISH_NAME'					=> 'Englischer Name',
	'LANG_ISO_CODE'						=> 'ISO-Code',
	'LANG_LOCAL_NAME'					=> 'Lokaler Name',

	'MISSING_LANG_FILES'		=> '#Missing language files',
	'MISSING_LANG_VARIABLES'	=> 'Fehlende Sprachvariablen',

	'NO_FILE_SELECTED'				=> 'Du hast keine Sprachdatei angegeben.',
	'NO_LANG_ID'					=> 'Du hast kein Sprachpaket angegeben.',
	//TODO
	//>>>>>> OLD <<<<<<: 'You are not able to remove the default language pack.<br />If you want to remove this language pack, change your boards default language first.',
	//>>>>>> NEW <<<<<<: 'You are not able to remove the default language pack.<br />If you want to remove this language pack, change your board’s default language first.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Du kannst das Standard-Sprachpaket nicht entfernen.<br />Wenn du dieses Sprachpaket entfernen möchtest, musst du zuerst die Standard-Sprache das Boards ändern.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Keine deinstallierten Sprachpakete',

	//TODO
	//>>>>>> OLD <<<<<<: 'The following language files are missing from the %s language folder',
	//>>>>>> NEW <<<<<<: 'The following language files are missing from the “%s” language folder',
	'THOSE_MISSING_LANG_FILES'			=> 'Die folgenden Sprachdateien fehlen im %s-Sprachpaket',
	//TODO
	//>>>>>> OLD <<<<<<: 'The following language variables are missing from the <strong>%s</strong> language pack',
	//>>>>>> NEW <<<<<<: 'The following language variables are missing from the “%s” language pack',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Die folgenden Sprachvariablen fehlen im <strong>%s</strong>-Sprachpaket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Deinstallierte Sprachpakete',
));
