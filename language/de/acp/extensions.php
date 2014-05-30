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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Erweiterung',
	'EXTENSIONS'				=> 'Erweiterungen',
	'EXTENSIONS_ADMIN'			=> 'Erweiterungen verwalten',
	'EXTENSIONS_EXPLAIN'		=> 'Hier kannst du den Status all deiner Erweiterungen prüfen und Informationen über sie einsehen.',
	'EXTENSION_INVALID_LIST'	=> 'Die Erweiterung „%s“ ist ungültig.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Die ausgewählte Erweiterung ist nicht mit deinem Board kompatibel. Bitte prüfe auf der Details-Seite, ob deine phpBB- und PHP-Version unterstützt werden.',
	'EXTENSION_DIR_INVALID'		=> 'Die ausgewählte Erweiterung besitzt eine ungültige Verzeichnisstruktur und kann nicht aktiviert werden.',

	'DETAILS'				=> 'Details',

	'EXTENSIONS_DISABLED'	=> 'Deaktivierte Erweiterungen',
	'EXTENSIONS_ENABLED'	=> 'Aktivierte Erweiterungen',

	'EXTENSION_DELETE_DATA'	=> 'Daten löschen',
	'EXTENSION_DISABLE'		=> 'Deaktivieren',
	'EXTENSION_ENABLE'		=> 'Aktivieren',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Durch das Löschen der Daten einer Erweiterung werden allen Daten und Einstellungen gelöscht. Die Dateien der Erweiterung bleiben erhalten, so dass sie erneut aktiviert werden kann.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Durch das Deaktivieren einer Erweiterung bleiben alle Dateien, Daten und Einstellungen erhalten, die Erweiterung steht auf deinem Board jedoch nicht mehr zur Verfügung.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Durch das Aktivieren einer Erweiterung kannst du sie auf deinem Board nutzen.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Die Daten der Erweiterung werden derzeit gelöscht. Bitte verlasse oder aktualisiere diese Seite nicht, bis der Vorgang abgeschlossen wurde.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Die Erweiterung wird derzeit deaktiviert. Bitte verlasse oder aktualisiere diese Seite nicht, bis der Vorgang abgeschlossen wurde.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Die Erweiterung wird derzeit aktiviert. Bitte verlasse oder aktualisiere diese Seite nicht, bis der Vorgang abgeschlossen wurde.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Die Daten der Erweiterung wurden erfolgreich gelöscht',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Die Erweiterung wurde erfolgreich deaktiviert',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Die Erweiterung wurde erfolgreich aktiviert',

	'EXTENSION_NAME'			=> 'Name der Erweiterung',
	'EXTENSION_ACTIONS'			=> 'Vorgänge',
	'EXTENSION_OPTIONS'			=> 'Optionen',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Eine Erweiterung aktualisieren',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Deaktiviere die Erweiterung</li>
			<li>Lösche die Dateien der Erweiterung aus dem Dateisystem</li>
			<li>Lade die neuen Dateien hoch</li>
			<li>Aktiviere die Erweiterung</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Eine Erweiterung komplett aus dem Board entfernen',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Deaktiviere die Erweiterung</li>
			<li>Lösche die Daten der Erweiterung</li>
			<li>Lösche die Dateien der Erweiterung aus dem Dateisystem</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Bist du dir sicher, dass du die Daten, die „%s“ zugeordnet sind, löschen möchtest?<br /><br />Dadurch werden alle Daten und Einstellungen dieser Erweiterung entfernt. <strong>Dieser Vorgang kann nicht rückgängig gemacht werden!</strong>',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Bist du dir sicher, dass du die Erweiterung „%s“ deaktivieren möchtest?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Bist du dir sicher, dass du die Erweiterung „%s“ aktivieren möchtest?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> '#Are you sure that you wish to force the use of unstable version?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Zurück zur Liste der Erweiterungen',

	'EXT_DETAILS'			=> 'Informationen zur Erweiterung',
	'DISPLAY_NAME'			=> 'Angezeigter Name',
	'CLEAN_NAME'			=> 'Technischer Name',
	'TYPE'					=> 'Typ',
	'DESCRIPTION'			=> 'Beschreibung',
	'VERSION'				=> 'Version',
	'HOMEPAGE'				=> 'Homepage',
	'PATH'					=> 'Datei-Pfad',
	'TIME'					=> 'Veröffentlichungszeitpunkt',
	'LICENSE'				=> 'Lizenz',

	'REQUIREMENTS'			=> 'Voraussetzungen',
	'PHPBB_VERSION'			=> 'phpBB-Version',
	'PHP_VERSION'			=> 'PHP-Version',
	'AUTHOR_INFORMATION'	=> 'Informationen zum Autor',
	'AUTHOR_NAME'			=> 'Name',
	'AUTHOR_EMAIL'			=> 'E-Mail',
	'AUTHOR_HOMEPAGE'		=> 'Homepage',
	'AUTHOR_ROLE'			=> 'Rolle',

	'NOT_UP_TO_DATE'		=> '#%s is not up to date',
	'UP_TO_DATE'			=> '#%s is up to date',
	'ANNOUNCEMENT_TOPIC'	=> '#Release Announcement',
	'DOWNLOAD_LATEST'		=> '#Download Version',
	'NO_VERSIONCHECK'		=> '#No version check information given.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> '#Re-Check all versions',
	'FORCE_UNSTABLE'					=> '#Always check for unstable versions',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> '#Version check settings',
));