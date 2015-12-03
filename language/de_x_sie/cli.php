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
* siehe language/de_x_sie/AUTHORS.md und https://www.phpbb.de/go/ubersetzerteam
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Verwenden Sie diese Option, wenn sich die Konfigurations-Einstellung zu oft ändert, um effizient gecached zu werden.',
	'CLI_CONFIG_CURRENT'				=> 'Aktuell eingestellter Wert. Nutzen Sie 0 und 1, um einen boolschen Wert festzulegen',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigurations-Einstellung %s erfolgreich gelöscht.',
	'CLI_CONFIG_NEW'					=> 'Neuer Konfigurations-Wert. Nutzen Sie 0 und 1, um einen boolschen Wert festzulegen',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurations-Einstellung %s existiert nicht',
	'CLI_CONFIG_OPTION_NAME'			=> 'Der Name der Konfigurations-Einstellung',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Verwenden Sie diese Option, wenn der Wert ohne Zeilenwechsel am Ende ausgegeben werden soll.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Wert, um den erhöht werden soll',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfigurations-Einstellung %s erfolgreich erhöht',
	'CLI_CONFIG_SET_FAILURE'			=> 'Konnte Konfiguration %s nicht einstellen',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfiguration %s erfolgreich eingestellt',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Gibt eine Liste aller bereiten und aller nicht bereiten Cron-Jobs aus.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Führt alle bereiten Cron-Jobs aus.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Name des Jobs, der ausgeführt werden soll',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Zeigt alle installierten und verfügbaren Migrationen an.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Aktualisiert die Datenbank über eine Migration.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Macht eine Migration rückgängig.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Löscht eine Konfigurations-Einstellung',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deaktiviert die angegebene Erweiterung.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiviert die angegebene Erweiterung.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Findet Migrationen, die von keinen anderen Migrationen vorausgesetzt werden.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Gibt den Wert einer Konfigurations-Einstellung aus',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Erhöht eine Kofigurations-Einstellung',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Gibt alle in der Datenbank und im Dateisystem vorhandenen Erweiterungen aus.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Name der Umgebung.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Im abgesicherten Modus ausführen (ohne Erweiterungen).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Komandozeile starten.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Löscht die angegebene Erweiterung.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Listet die Arten von Texten auf, die neu analysiert werden können.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Analysiert gespeicherte Texte mit dem aktuellen text_formatter-Service neu.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Text-Art die neu analysiert werden soll. Leer lassen, um alles neu zu analysieren',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Keine Änderungen speichern; nur ausgeben, was passieren würde',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Niedrigste Eintrags-ID, die verarbeitet wird',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Höchste Eintrags-ID, die verarbeitet wird',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Geschätzte Zahl von Einträgen, die in einem Durchgang verarbeitet werden',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Startet die Analyse dort, wo die letzte Ausführung endete',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Berechnet die Einträge im Feld user_email_hash der Benutzer-Tabelle neu.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Legt den Wert für eine Konfigurations-Einstellung fest, wenn die derzeitige Einstellung dem angegebenen Vergleichswert entspricht',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Legt den Wert für eine Konfigurations-Einstellung fest',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Löscht alle existierenden Vorschaubilder.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Erstellt alle fehlenden Vorschaubilder.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Erstellt alle Vorschaubilder neu.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Konnte Erweiterung %s nicht deaktivieren',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Erweiterung %s erfolgreich deaktiviert',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Konnte Erweiterung %s nicht aktivieren',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Erweiterung %s erfolgreich aktiviert',
	'CLI_EXTENSION_NAME'				=> 'Name der Erweiterung',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Konnte Arbeitsdaten der Erweiterung %s nicht löschen',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Arbeitsdaten der Erweiterung %s erfolgreich gelöscht',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Es wurden keine Erweiterungen gefunden.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Verfügbar',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deaktiviert',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiviert',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Alle E-Mail-Hashes wurden erfolgreich neu ermittelt.',

	'CLI_MIGRATION_NAME'					=> 'Name der Migration inkl. Namesraum (Schrägstriche statt Backslashes verwenden, um Probleme zu vermeiden).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Verfügbare Migrationen',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installierte Migrationen',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Nur installierte Migrationen anzeigen',
	'CLI_MIGRATIONS_EMPTY'                  => 'Keine Migrationen.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Analysiere %1$s (Bereich %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Analysiere %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Analyse erfolgreich abgeschlossen',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) gelöscht.',
	'CLI_THUMBNAIL_DELETING'	=> 'Lösche Vorschaubilder',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) übersprungen.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) erstellt.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Erstelle Vorschaubilder',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Alle Vorschaubilder wurden neu erstellt.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Alle Vorschaubilder wurden gelöscht.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Keine Vorschaubilder zu erstellen.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Keine Vorschaubilder zu löschen.',
));
