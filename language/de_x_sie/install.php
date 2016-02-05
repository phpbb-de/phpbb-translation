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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Installations-Routine',
	'SELECT_LANG'	=> 'Sprache wählen',

	'STAGE_INSTALL'	=> 'phpBB installieren',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Einführung',
	'INTRODUCTION_BODY'		=> 'Willkommen bei phpBB3!<br /><br />phpBB ist die am weitesten verbreitete Open-Source-Forensoftware. phpBB3 ist die jüngste Fortsetzung einer im Jahr 2000 begonnenen Entwicklungsgeschichte. Wie seine Vorversionen ist phpBB3 funktionsreich, benutzerfreundlich und vollständig vom phpBB-Team unterstützt. phpBB3 verbessert deutlich, was phpBB2 beliebt gemacht hat und bringt neue Funktionen, die häufig gefragt und nicht in den Vorversionen enthalten waren. Wir hoffen, dass es Ihre Erwartungen übertrifft.<br /><br />Dieses Installations-System wird Sie durch die Installation von phpBB3, das Update von einer älteren auf die aktuelle Version von phpBB3 als auch die Konvertierung von einem anderen Software-Paket (inklusive phpBB2) führen. Für weitere Informationen empfehlen wir Ihnen, <a href="../docs/INSTALL.html">die Installationsanweisungen</a> zu lesen.<br /><br />Um die Lizenz von phpBB3 zu lesen oder Informationen über den Erhalt von Support und unsere Einstellung dazu zu erhalten, wählen Sie bitte die entsprechende Option aus dem seitlichen Menü aus. Um fortzufahren, wählen Sie bitte oben das entsprechende Register aus.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Für die aktuelle, stabile Version von phpBB3 wird kostenloser Support gewährt. Dies umfasst:</p><ul><li>Installation</li><li>Konfiguration</li><li>Technische Fragen</li><li>Probleme durch eventuelle Fehler in der Software</li><li>Aktualisierung von Release Candidates (RC) oder stabilen Versionen zur aktuellen stabilen Version</li><li>Konvertierungen von phpBB 2.0.x zu phpBB3</li><li>Konvertierung von anderen Forensoftwares zu phpBB3 (Bitte beachten Sie das <a href="https://www.phpbb.com/community/viewforum.php?f=486">Konvertierungs-Forum (englisch)</a> (<a href="https://www.phpbb.de/go/3.1/konvertierung">Konvertierungs-Support auf phpBB.de</a>))</li></ul><p>Wir ermutigen Benutzer, die noch eine Beta-Version von phpBB3 verwenden, ihre Installation mit einer aktuellen Ausgabe von phpBB3 zu ersetzen.</p><h2>Erweiterungen / Styles</h2><p>Fragen bezüglich von Erweiterungen stellen Sie bitte im <a href="https://www.phpbb.com/community/viewforum.php?f=451">englischsprachigen Erweiterungen-Forum</a> (<a href="https://www.phpbb.de/go/3.1/extensions">Modifikationen auf phpBB.de</a>).<br />Fragen bezüglich Styles, Templates und Themes stellen Sie bitte im <a href="https://www.phpbb.com/community/viewforum.php?f=471">englischsprachigen Styles-Forum</a> (<a href="https://www.phpbb.de/go/3.1/styles">Styles auf phpBB.de</a>).<br /><br />Wenn sich Ihre Frage direkt auf ein bestimmtes Paket bezieht, stellen Sie Ihre Frage bitte direkt in dem Thema, das für das Paket vorgesehen ist.</p><h2>Support erhalten</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Das phpBB Willkommenspaket (englisch)</a><br /><a href="https://www.phpbb.com/support/">Supportbereich (englisch)</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Schnellstartanleitung (englisch)</a><br /><a href="https://www.phpbb.de/go/3.1/ersteschritte">Erste Schritte mit phpBB</a><br /><a href="https://www.phpbb.de/go/3.1/support">deutschsprachiger Support auf phpBB.de</a><br /><a href="https://www.phpbb.de/go/3.1/schnellstart">Schnellstartanleitung</a><br /><br />Um immer die neuesten Informationen zu Updates und Veröffentlichungen zu erhalten, sollten Sie sich für den <a href="https://www.phpbb.com/support/">phpBB Newsletter (englisch)</a> anmelden (<a href="https://www.phpbb.de/go/newsletter">deutschsprachiger phpBB.de-Newsletter</a>).<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Willkommen bei der Installation',
	'INSTALL_INTRO_BODY'	=> 'Dieser Assistent ermöglicht Ihnen die Installation von phpBB3 auf Ihrem Server.</p><p>Bevor Sie fortsetzen können, benötigen Sie die Daten Ihrer Datenbank. Wenn Sie die Daten Ihrer Datenbank nicht kennen, kontaktieren Sie bitte Ihren Server-Betreiber und fragen Sie nach den Daten. Ohne die Datenbankdaten können Sie nicht fortfahren. Sie benötigen:</p>
	<ul>
		<li>Den Datenbank-Typ — die Art der Datenbank, auf die Sie zugreifen werden.</li>
		<li>Den Hostname oder DSN des Datenbankservers — die Adresse, unter der der Datenbankserver erreichbar ist.</li>
		<li>Den Port des Datenbank-Servers — den Port, über den der Datenbankserver erreicht wird (in den meisten Fällen ist diese Information nicht notwendig).</li>
		<li>Den Namen der Datenbank — den Namen der Datenbank auf dem Server.</li>
		<li>Den Benutzernamen und das Passwort für die Datenbank — die Zugangsdaten, um auf die Datenbank zugreifen zu können.</li>
	</ul>

	<p><strong>Hinweis:</strong> wenn Sie SQLite verwenden, sollten Sie den vollständigen Pfad zu Ihrer Datenbank-Datei im DSN-Feld eingeben und die Felder für Benutzername und Passwort frei lassen. Aus Sicherheitsgründen sollte die Datenbank in keinem Verzeichnis gespeichert werden, das aus dem Internet zugänglich ist.</p>

	<p>phpBB3 unterstützt folgende Datenbank-Typen:</p>
	<ul>
		<li>MySQL 3.23 und höher (MySQLi wird unterstützt)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 und höher (direkt oder über ODBC)</li>
		<li>MS SQL Server 2005 und höher (nativ)</li>
		<li>Oracle</li>
	</ul>

	<p>Es werden nur die Datenbank-Typen zur Auswahl angeboten, die Ihr Server unterstützt.',

	'ACP_LINK'	=> '<a href="%1$s">Zum Administrations-Bereich</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB ist bereits installiert.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ist nicht installiert.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'Datei existiert nicht',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Um phpBB installieren zu können, muss die Datei „%1$s“ existieren.',
	'FILE_NOT_WRITABLE'			=> 'Datei nicht beschreibbar',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Um phpBB installieren zu können, muss die Datei „%1$s“ beschreibbar sein.',

	'DIRECTORY_NOT_EXISTS'				=> 'Verzeichnis existiert nicht',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Um phpBB installieren zu können, muss das Verzeichnis „%1$s“ existieren.',
	'DIRECTORY_NOT_WRITABLE'			=> 'Verzeichnis nicht beschreibbar',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Um phpBB installieren zu können, muss das Verzeichnis „%1$s“ beschreibbar sein.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-Version',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB erfordert PHP 5.4.0 oder höher.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-Funktion getimagesize() ist erforderlich',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Damit phpBB richtig funktioniert, muss die Funktion getimagesize() verfügbar sein.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8-Unterstützung',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB wird nicht funktionieren, wenn die PHP-Installation ohne UTF-8-Unterstützung in der PCRE-Erweiterung kompiliert wurde.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON-Unterstützung',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Damit phpBB richtig funktioniert, muss die PHP JSON-Erweiterung verfügbar sein.',
	'PHP_SUPPORTED_DB'					=> 'Unterstützte Datenbanken',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Sie müssen Unterstützung für mindestens eine kompatible Datenbank in PHP bereitstellen. Falls keine Datenbank-Module als verfügbar angezeigt werden, sollten Sie Ihren Webhosting-Provider kontaktieren oder die entsprechende PHP-Dokumentation zu Rate ziehen.',

	'RETEST_REQUIREMENTS'	=> 'Systemanforderungen erneut prüfen',

	'STAGE_REQUIREMENTS'	=> 'Systemanforderungen prüfen'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Sie müssen alle Felder dieses Blocks ausfüllen.',
	'PHPBB_ALREADY_INSTALLED'	=> 'phpBB ist bereits installiert.'
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Daten für die Installation erfassen',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator-Details',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administrator-Konfiguration',
	'ADMIN_PASSWORD'			=> 'Administrator-Passwort',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bestätigung des Administrator-Passworts',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Bitte geben Sie ein Passwort mit einer Länge von 6 bis 30 Zeichen ein.',
	'ADMIN_USERNAME'			=> 'Benutzername des Administrators',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Bitte geben Sie einen Benutzernamen mit einer Länge von 3 bis 20 Zeichen ein.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Die angegebene E-Mail-Adresse ist ungültig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Die eingegebenen Passwörter stimmen nicht überein.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Das eingegebene Passwort ist zu lang. Die maximale Länge beträgt 30 Zeichen.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Das eingegebene Passwort ist zu kurz. Die minimale Länge beträgt 6 Zeichen.',
	'INST_ERR_USER_TOO_LONG'		=> 'Der von Ihnen angegebene Benutzername ist zu lang. Die maximale Länge beträgt 20 Zeichen.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Der von Ihnen angegebene Benutzername ist zu kurz. Die minimale Länge beträgt 3 Zeichen.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Konfiguration des Boards',
	'DEFAULT_LANGUAGE'	=> 'Standard-Sprache',
	'BOARD_NAME'		=> 'Titel des Boards',
	'BOARD_DESCRIPTION'	=> 'Kurze Beschreibung des Boards',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Datenbank-Einstellungen',

	// Form labels
	'DB_CONFIG'				=> 'Datenbank-Konfiguration',
	'DBMS'					=> 'Datenbank-Typ',
	'DB_HOST'				=> 'Datenbankserver-Hostname oder DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN steht für Data Source Name und ist nur für ODBC-Installationen relevant. Bei PostgreSQL wird mit <em>localhost</em> eine Verbindung zum lokalen Server über UNIX-Domain-Socket hergestellt und mit <em>127.0.0.1</em> über TCP. Für SQLite ist der vollständige Pfad der Datenbank-Datei anzugeben.',
	'DB_PORT'				=> 'Datenbankserver-Port',
	'DB_PORT_EXPLAIN'		=> 'Lassn Sie dieses Feld frei, es sei denn, Sie wissen, dass der Server nicht den Standard-Port verwendet.',
	'DB_PASSWORD'			=> 'Datenbank-Passwort',
	'DB_NAME'				=> 'Name der Datenbank',
	'DB_USERNAME'			=> 'Datenbank-Benutzername',
	'TABLE_PREFIX'			=> 'Präfix der Tabellen in der Datenbank',
	'TABLE_PREFIX_EXPLAIN'	=> 'Das Tabellen-Präfix muss mit einem Buchstaben beginnen und darf nur Buchstaben, Ziffern und Unterstriche enthalten.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativ ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi-Erweiterung',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Kann das PHP-Modul für den gewählten Datenbank-Typ nicht laden.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Das angegebene Tabellen-Präfix ist nicht zulässig. Es muss mit einem Buchstaben beginnen und darf nur Buchstaben, Ziffern und Unterstriche enthalten.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Das angegebene Tabellen-Präfix ist zu lang. Die maximale Länge beträgt %d Zeichen.',
	'INST_ERR_DB_NO_NAME'			=> 'Kein Datenbank-Name angegeben.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Die angegebene Datenbank-Datei liegt innerhalb Ihres Board-Verzeichnisses. Sie sollten sie an einem nicht über das Web zugänglichen Ort ablegen.',
	'INST_ERR_DB_CONNECT'			=> 'Es kann keine Verbindung zur Datenbank aufgebaut werden. Details stehen in unten angezeigter Fehlermeldung.',
	'INST_ERR_DB_NO_ERROR'			=> 'Es wurde keine Fehlermeldung übergeben.',
	'INST_ERR_PREFIX'				=> 'Es existieren bereits Tabellen mit dem angegebenen Präfix, bitte wählen Sie ein alternatives.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Die auf diesem System installierte MySQL-Version ist nicht kompatibel mit der „MySQL mit MySQLi-Erweiterung“-Option, die von Ihnen gewählt wurde. Bitte versuchen Sie stattdessen die „MySQL“-Option.',
	'INST_ERR_DB_NO_SQLITE'			=> 'Die installierte Version der SQLite-Erweiterung ist zu alt. Sie muss auf 2.8.2 oder höher aktualisiert werden.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Die installierte Version der SQLite-Erweiterung ist zu alt. Sie muss auf 3.6.15 oder höher aktualisiert werden.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Die installierte Oracle-Version erfordert, dass der Parameter <var>NLS_CHARACTERSET</var> auf <var>UTF8</var> gesetzt ist. Bitte aktualisieren Sie Oracle auf Version 9.2 oder höher oder ändern Sie den genannten Parameter entsprechend.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Die ausgewählte Datenbank wurde nicht mit der Codierung <var>UNICODE</var> oder <var>UTF8</var> erstellt. Bitte versuchen Sie die Installation erneut mit einer Datenbank, die mit dieser Codierung erstellt wurde.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-Mail-Konfiguration',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Server-Konfiguration',
	'SCRIPT_PATH'				=> 'Scriptpfad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Der Pfad, in dem die phpBB-Dateien abgelegt sind, relativ zum Domainnamen. Z.&nbsp;B. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Danke, die Board-Administration',
	'CONFIG_SITE_DESC'				=> 'Ein kurzer Text, der Ihr Forum beschreibt',
	'CONFIG_SITENAME'				=> 'ihredomain.tld',

	'DEFAULT_INSTALL_POST'			=> 'Dies ist ein Beispielbeitrag Ihrer phpBB3-Installation. Alles scheint zu funktionieren. Wenn Sie möchten, können Sie diesen Beitrag löschen und mit der Einrichtung Ihres Boards fortfahren. Während des Installationsvorgangs wurden Ihrer ersten Kategorie und Ihrem ersten Forum passende Berechtigungen für die Benutzergruppen Administratoren, Bots, globale Moderatoren, Gäste, Registrierte Benutzer und Registrierte COPPA-Benutzer zugewiesen. Wenn Sie sich entscheiden, auch Ihre erste Kategorie und Ihr erstes Forum zu löschen, dürfen Sie nicht vergessen, den genannten Gruppen entsprechende Rechte für alle neuen Kategorien und Foren, die Sie erstellen, zuzuweisen. Es wird jedoch empfohlen, Ihre erste Kategorie und Ihr erstes Forum umzubenennen und deren Rechte zu übernehmen, wenn neue Kategorien und Foren erstellt werden. Viel Spaß mit phpBB!',

	'FORUMS_FIRST_CATEGORY'			=> 'Ihre erste Kategorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschreibung Ihres ersten Forums.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ihr erstes Forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Der gemeldete Beitrag enthält Links zu illegaler Software oder Raubkopien.',
	'REPORT_SPAM'					=> 'Der gemeldete Beitrag hat nur zum Ziel, für eine Website oder ein anderes Produkt zu werben.',
	'REPORT_OFF_TOPIC'				=> 'Der gemeldete Beitrag betrifft ein anderes Thema.',
	'REPORT_OTHER'					=> 'Keine der genannten Kategorien. Bitte benutzen Sie „Weitere Informationen“ für Ihre Meldung.',

	'SMILIES_ARROW'					=> 'Pfeil',
	'SMILIES_CONFUSED'				=> 'Verwirrt',
	'SMILIES_COOL'					=> 'Fetzig',
	'SMILIES_CRYING'				=> 'Weinend oder sehr traurig',
	'SMILIES_EMARRASSED'			=> 'Verlegen',
	'SMILIES_EVIL'					=> 'Böse oder sehr verärgert',
	'SMILIES_EXCLAMATION'			=> 'Ausruf',
	'SMILIES_GEEK'					=> 'Computerfreak',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Verärgert',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Frage',
	'SMILIES_RAZZ'					=> 'Hänseln',
	'SMILIES_ROLLING_EYES'			=> 'Augen verdrehen',
	'SMILIES_SAD'					=> 'Traurig',
	'SMILIES_SHOCKED'				=> 'Erschüttert',
	'SMILIES_SMILE'					=> 'Lächeln',
	'SMILIES_SURPRISED'				=> 'Überrascht',
	'SMILIES_TWISTED_EVIL'			=> 'Verrückter Teufel',
	'SMILIES_UBER_GEEK'				=> 'Extremer Computerfreak',
	'SMILIES_VERY_HAPPY'			=> 'Überglücklich',
	'SMILIES_WINK'					=> 'Zwinkern',

	'TOPICS_TOPIC_TITLE'			=> 'Willkommen bei phpBB3!',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Übersicht',
	'MENU_INTRO'		=> 'Einführung',
	'MENU_LICENSE'		=> 'Lizenz',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Erstelle Konfigurationsdatei',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> 'Füge Konfigurationseinstellungen hinzu',
	'TASK_ADD_DEFAULT_DATA'			=> 'Lege Standard-Einstellungen in der Datenbank fest',
	'TASK_CREATE_DATABASE_SCHEMA'	=> 'Erstelle Datenbankstruktur',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registriere Bots',
	'TASK_ADD_LANGUAGES'	=> 'Installiere verfügbare Sprachen',
	'TASK_ADD_MODULES'		=> 'Installiere Module',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Sende Benachrichtigungs-Mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Führe Migrationen durch',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Die Installations-Routine wurde erfolgreich beendet',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nicht gefunden',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Ein Modul konnte nicht gefunden werden, da der Dienst „%s“ nicht definiert ist.',

	'TASK_NOT_FOUND'				=> 'Aufgabe nicht gefunden',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Ein Aufgabe konnte nicht gefunden werden, da der Dienst „%s“ nicht definiert ist.',

	'SKIP_MODULE'	=> 'Überspringe Modul „%s“',
	'SKIP_TASK'		=> 'Überspringe Aufgabe „%s“',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alle Aufgaben für die Installations-Routine sollen mit „installer“ beginnen',
	'TASK_CLASS_NOT_FOUND'				=> 'Die Defininition einer Aufgabe für die Installations-Routine ist ungültig. Der Name des Dienstes ist „%1$s“, der erwartete Namensraum der Klasse „%2$s“. Weitere Informationen können in der Dokumentation von „task_interface“ gefunden werden.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Die Konfigurationsdatei für die Installations-Routine ist nicht beschreibbar.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Installiere phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Zeige die Konfigurationsdatei, die verwendet wird',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validiere eine Konfigurationsdatei',
	'CLI_CONFIG_FILE'				=> 'Zu verwendende Konfigurationsdatei',
	'MISSING_FILE'					=> 'Auf die Datei %1$s kann nicht zugegriffen werden',
	'MISSING_DATA'					=> 'Der Konfigurationsdatei fehlen Einträge oder enthält ungültige Einstellungen.',
	'INVALID_YAML_FILE'				=> 'Die YAML-Datei %1$s konnte nicht verarbeitet werden',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Update der phpBB-Installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Mit dieser Option können Sie Ihre phpBB-Version auf den neuesten Stand bringen.<br />Während dieses Prozesses wird die Integrität aller Ihrer Dateien überprüft. Sie haben die Möglichkeit, alle Dateiunterschiede vor dem Update zu überprüfen.<br /><br />Die Dateiaktualisierung an sich kann auf zwei Wegen erfolgen:</p><h2>Manuelle Aktualisierung</h2><p>Bei dieser Methode laden Sie nur die von Ihnen geänderten Dateien herunter, damit Sie sichergehen können, dass die von Ihnen durchgeführten Dateiänderungen nicht verloren gehen. Nach dem Herunterladen dieses Archivs müssen Sie die Dateien in die entsprechenden Verzeichnisse Ihrer phpBB-Installation hochladen. Nachdem Sie das getan haben, können Sie die Dateiüberprüfung erneut ausführen, um zu sehen, ob Sie alle Dateien korrekt hochgeladen haben.</p><h2>Automatische Aktualisierung über FTP</h2><p>Diese Methode ist der ersten sehr ähnlich, mit dem Unterschied, dass Sie die veränderten Dateien nicht herunter- und anschließend von Hand wieder hochladen müssen. Dies wird automatisch erledigt. Um diese Methode nutzen zu können, müssen Sie Ihre FTP-Anmeldedaten kennen, da sie abgefragt werden. Nach der Fertigstellung wird auch hier eine Integritätsprüfung der Dateien ausgeführt.<br /><br />',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Umfang des durchzuführenden Updates',

	'UPDATE_TYPE_ALL'		=> 'Die Dateien und die Datenbank aktualisieren',
	'UPDATE_TYPE_DB_ONLY'	=> 'Nur die Datenbank aktualisieren',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Methoden zur Datei-Aktualisierung',

	'UPDATE_FILE_METHOD'			=> 'Methode zur Datei-Aktualisierung',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Geänderte Dateien in Archiv herunterladen',
	'UPDATE_FILE_METHOD_FTP'		=> 'Dateien per FTP aktualisieren (automatisch)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Dateien per Direktzugriff aktualisieren (automatisch)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Archiv-Format für Download auswählen',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-Einstellungen',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Es wurde kein Update-Verzeichnis gefunden. Bitte stellen Sie sicher, dass Sie die richtigen Dateien hochgeladen haben.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Ihre Version ist auf dem neuesten Stand. Es ist nicht nötig, das Update-Tool auszuführen. Wenn Sie eine Integritätsprüfung der Dateien ausführen möchten, stellen Sie sicher, dass Sie das richtige Update-Paket hochgeladen haben.',
	'OLD_UPDATE_FILES'				=> 'Die Update-Dateien sind nicht auf dem neuesten Stand. Die gefundenen Update-Dateien sind für ein Update von phpBB %1$s auf phpBB %2$s, aber die neueste Version von phpBB ist %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Die gefundenen Update-Dateien sind inkompatibel zu Ihrer installierten Version. Ihre phpBB-Version ist %1$s. Das Update-Paket aktualisiert Version %2$s auf %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Dateien aktualisieren',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Prüfe Dateien',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Die Datei %s konnte nicht für den Dateivergleich geöffnet werden.',

	'UPDATE_FILE_DIFF'		=> 'Vergleiche geänderte Dateien',
	'ALL_FILES_DIFFED'		=> 'Alle geänderten Dateien wurden verglichen.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Dateien aktualisieren',

	'DOWNLOAD'							=> 'Herunterladen',
	'DOWNLOAD_CONFLICTS'				=> 'Archivdatei mit Konflikten herunterladen',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Suchen Sie nach &lt;&lt;&lt;, um die Konflikte zu finden',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Archiv mit veränderten Dateien herunterladen',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Nach dem Download sollten Sie das Archiv entpacken. Darin sind die geänderten Dateien enthalten, die Sie in Ihr phpBB-Verzeichnis laden müssen. Bitte laden Sie die Dateien in die entsprechenden Verzeichnisse hoch. Nachdem Sie alle Dateien hochgeladen haben, können Sie mit dem Update-Vorgang fortfahren.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Die Datei ist bereits auf dem neuesten Stand.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Unterschiedsanzeige für diese Datei nicht möglich.',
	'FILE_USED'						=> 'Informationen benutzt von',			// Single file
	'FILES_CONFLICT'				=> 'Dateien mit Konflikten',
	'FILES_CONFLICT_EXPLAIN'		=> 'Die folgenden Dateien wurden geändert und entsprechen nicht den Originaldateien der alten Version. phpBB hat festgestellt, dass diese Dateien nicht konfliktfrei zusammengeführt werden können. Bitte sehen Sie sich die Konflikte an und versuchen Sie, sie von Hand zu lösen oder fahren Sie mit der Aktualisierung fort, indem Sie Ihre bevorzugte Methode des Zusammenführens auswählen. Wenn Sie die Konflikte von Hand lösen, prüfen Sie die Dateien nach der Bearbeitung erneut. Sie können außerdem die Zusammenführungsmethode für jede Datei getrennt angeben. Die erste Methode erzeugt eine Datei, in der die problematischen Zeilen Ihrer alten Datei verworfen werden, die andere Methode verwirft die Änderungen der neuen Datei.',
	'FILES_DELETED'					=> 'Zu löschende Dateien',
	'FILES_DELETED_EXPLAIN'			=> 'Die folgenden Dateien existieren nicht mehr in der neuen Version. Diese Dateien müssen aus Ihrer Installation gelöscht werden.',
	'FILES_MODIFIED'				=> 'Geänderte Dateien',
	'FILES_MODIFIED_EXPLAIN'		=> 'Die folgenden Dateien wurden geändert und entsprechen nicht den Originaldateien der alten Version. In der aktualisierten Version werden Ihre Änderungen und die Neuerungen der phpBB-Datei zusammengeführt.',
	'FILES_NEW'						=> 'Neu hinzuzufügende Dateien',
	'FILES_NEW_EXPLAIN'				=> 'Die folgenden Dateien fehlen in Ihrer Installation. Sie werden dieser hinzugefügt.',
	'FILES_NEW_CONFLICT'			=> 'Neue Dateien, die bereits existieren',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Die folgenden Dateien sind neu in der aktuellen Version, aber es wurde festgestellt, dass bereits eine Datei mit dem gleichen Namen im gleichen Verzeichnis existiert. Diese wird durch die neue Datei überschrieben.',
	'FILES_NOT_MODIFIED'			=> 'Nicht geänderte Dateien',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Die folgenden Dateien sind nicht geändert und entsprechen den originalen phpBB-Dateien der Version, von der aus Sie updaten möchten.',
	'FILES_UP_TO_DATE'				=> 'Bereits aktualisierte Dateien',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Die folgenden Dateien sind bereits auf dem neuesten Stand und müssen nicht aktualisiert werden.',
	'TOGGLE_DISPLAY'				=> 'Datei-Liste ein-/ausblenden',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Aktualisiere Dateien',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Die Methode zur Datei-Aktualisierung „%1$s“ ist gescheitert. Die Installationsroutine wird die Alternative „%2$s“ versuchen.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Die Datei-Aktualisierung ist gescheitert. Es stehen keine weiteren Alternativen zur Verfügung.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Mit dem Update fortfahren',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Dateien erneut prüfen',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Datenbank aktualisieren',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Die Datenbank wurde erfolgreich aktualisiert',
));
