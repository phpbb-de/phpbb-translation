<?php
/**
*
* acp_search [Deutsch — Du]
*
* @package language
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und https://www.phpbb.de/go/ubersetzerteam
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Hier kannst du die Indizes der Such-Backends verwalten. Da normalerweise nur ein Backend genutzt wird, solltest du alle Indizes löschen, die du nicht verwendest. Nach der Änderung bestimmter Such-Einstellungen (z.&nbsp;B. die minimal/maximal indizierten Zeichen) kann es sinnvoll sein, den Suchindex neu aufzubauen, damit er die Änderungen berücksichtigt.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Hier kannst du festlegen, welches Backend zur Indizierung von und zur Suche nach Beiträgen verwendet wird. Du kannst verschiedene Optionen festlegen, die die Verarbeitungszeit dieser Vorgänge beeinflussen können. Manche Einstellungen sind für alle Backends identisch.',

	'COMMON_WORD_THRESHOLD'					=> 'Schwelle für häufig vorkommende Wörter',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Wörter, die in einem größeren prozentualem Anteil von Beiträgen enthalten sind, werden als häufig vorkommende Wörter angesehen. Häufig vorkommende Wörter werden in Suchanfragen ignoriert. Um dieses Verhalten abzuschalten, stell als Wert 0 ein. Die Funktion greift nur, wenn mehr als 100 Beiträge existieren. Wenn Wörter, die derzeit als häufig gekennzeichnet sind, wieder in den Suchindex aufgenommen werden sollen, muss der Index neu aufgebaut werden.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Bist du dir sicher, dass du das Backend für die Suchen ändern möchtest? Nach dem Wechsel des Backends musst du einen neuen Index für das neue Backend aufbauen. Wenn du nicht planst, zum alten Backend zurückzukehren, kannst du auch den Index des alten Backends löschen, um Systemressourcen zu sparen.',
	'CONTINUE_DELETING_INDEX'				=> 'Letzte Index-Löschung fortsetzen',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Die Löschung eines Indexes wurde gestartet. Um auf die Such-Indizes-Seite zugreifen zu können, muss dieser Vorgang erst abgeschlossen oder abgebrochen werden.',
	'CONTINUE_INDEXING'						=> 'Letzte Indizierung fortsetzen',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Eine Indizierung wurde gestartet. Um auf die Such-Indizes-Seite zugreifen zu können, muss dieser Vorgang erst abgeschlossen oder abgebrochen werden.',
	'CREATE_INDEX'							=> 'Index erstellen',

	'DELETE_INDEX'							=> 'Index löschen',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Index wird derzeit gelöscht',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Das Backend löscht derzeit seinen Index. Dieser Vorgang kann einige Minuten beanspruchen.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Die MySQL-Volltextsuche kann nur mit MySQL 4 oder höher verwendet werden.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Die MySQL-Volltextsuche kann nur mit MyISAM- oder InnoDB-Tabellen genutzt werden. Für eine Volltextsuche mit InnoDB-Tabellen ist MySQL 5.6.4 oder höher erforderlich.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Insgesamt indizierte Beiträge',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Nur Wörter mit mindestens dieser Anzahl an Zeichen werden indiziert. Dieser Wert kann nur durch den Server-Betreiber in der MySQL-Konfiguration geändert werden.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Nur Wörter mit maximal dieser Anzahl an Zeichen werden indiziert. Dieser Wert kann nur durch den Server-Betreiber in der MySQL-Konfiguration geändert werden.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> '#The PostgreSQL fulltext backend can only be used with PostgreSQL.',
	'FULLTEXT_POSTGRES_TS_NOT_USABLE'		=> '#The PostgreSQL fulltext backend can only be used with PostgreSQL 8.3 and above.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '#Total number of indexed posts',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> '#PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'				=> '#Text search Configuration Profile:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '#Minimum word length for keywords',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '#Maximum word length for keywords',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> '#This search backend requires PostgreSQL version 8.3 and above.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'			=> '#The Text search configuration profile used to determine the parser and dictionary.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> '#Words with at least this many characters will be included in the query to the database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> '#Words with no more than this many characters will be included in the query to the database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> '#Configure the following settings to generate sphinx config file',
	'FULLTEXT_SPHINX_DATA_PATH'				=> '#Path to data directory',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '#It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '#Number of posts in frequently updated delta index',
	'FULLTEXT_SPHINX_HOST'					=> '#Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> '#Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'			=> '#Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '#This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> '#Number of posts in main index',
	'FULLTEXT_SPHINX_PORT'					=> '#Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> '#Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> '#The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> '#Sphinx config file',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> '#The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> '#The sphinx data and config directory paths are not defined. Please define them to generate the config file.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Allgemeine Such-Einstellungen',
	'GO_TO_SEARCH_INDEX'					=> 'Zur Übersicht der Such-Indizes gehen',

	'INDEX_STATS'							=> 'Index-Statistik',
	'INDEXING_IN_PROGRESS'					=> 'Indizierung erfolgt',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Das Backend indiziert derzeit alle Beiträge des Boards. Dies kann abhängig von der Größe deines Boards zwischen wenigen Minuten und einigen Stunden dauern.',

	'LIMIT_SEARCH_LOAD'						=> 'Systemauslastungs-Limit für Suche',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Wenn die Systemauslastung der letzten Minute (load average) diesen Wert überschreitet, wird die Suchfunktion deaktiviert. 1.0 steht für eine ca. 100-prozentige Auslastung eines Prozessors. Diese Einstellung steht nur auf Systemen zur Verfügung, die auf UNIX basieren und bei denen dieser Wert zugänglich ist.',

	'MAX_SEARCH_CHARS'						=> 'Maximal indizierte Zeichen',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Wörter mit nicht mehr als so vielen Zeichen werden für die Suche indiziert.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maximal zulässige Wörter',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximale Zahl von Wörtern, nach denen ein Benutzer suchen kann. Ein Wert von 0 erlaubt eine Suche nach einer unbegrenzten Zahl an Wörtern.',
	'MIN_SEARCH_CHARS'						=> 'Minimal indizierte Zeichen',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Wörter mit mindestens so vielen Zeichen werden für die Suche indiziert.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Mindestlänge für Suche nach Benutzernamen',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Benutzer müssen mindestens diese Zahl von Zeichen eingeben, wenn sie eine Mitgliedersuche mit Platzhaltern durchführen. Wenn der Benutzername des Autors kürzer als diese Zahl ist, kannst du immer noch nach den Beiträgen des Benutzers suchen, indem du nach dem vollständigen Namen suchst.',

	'PROGRESS_BAR'							=> 'Fortschritt',

	'SEARCH_GUEST_INTERVAL'					=> 'Wartezeit zwischen zwei Suchvorgängen von Gästen',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Zeit in Sekunden, die Gäste zwischen Suchvorgängen warten müssen. Wenn ein Gast eine Suche durchgeführt hat, müssen alle Gäste so lange warten, bis sie die Suchfunktion wieder nutzen können.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> '#All posts up to post id %2$d have now been indexed, of which %1$d posts were within this step.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> '#The current rate of indexing is approximately %1$.1f posts per second.<br />Indexing in progress…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> '#All posts up to post id %2$d have been removed from the search index.<br />Deleting in progress…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Alle Beiträge in der Datenbank wurden erfolgreich indiziert.',
	'SEARCH_INDEX_REMOVED'					=> 'Der Suchindex für das Backend wurde erfolgreich gelöscht.',
	'SEARCH_INTERVAL'						=> 'Wartezeit zwischen zwei Suchvorgängen von Benutzern',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Zeit in Sekunden, die ein Benutzer zwischen Suchvorgängen warten muss. Dieser Zeitabstand wird für jeden Benutzer individuell gemessen.',
	'SEARCH_STORE_RESULTS'					=> 'Cache-Zeit von Suchergebnissen',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Zwischengespeicherte Suchergebnisse verfallen nach dieser Zeit (in Sekunden). Um die Zwischenspeicherung zu deaktivieren, stelle als Wert 0 ein.',
	'SEARCH_TYPE'							=> 'Verwendetes Backend',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB erlaubt dir, das für die Beitragssuche zu verwendende Backend zu wählen. Standardmäßig wird die phpBB-eigene Volltextsuche verwendet.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Du hast das Such-Backend gewechselt. Um das neue Backend zu benutzen, solltest du sicherstellen, dass für das neue Backend ein Index angelegt wurde.',

	'TOTAL_WORDS'							=> 'Insgesamt indizierte Wörter',
	'TOTAL_MATCHES'							=> 'Insgesamt indizierte Wort-Beitrags-Beziehungen',

	'YES_SEARCH'							=> 'Suchfunktion aktivieren',
	'YES_SEARCH_EXPLAIN'					=> 'Aktiviert die Suchfunktionen inklusive der Mitgliedersuche für die Benutzer.',
	'YES_SEARCH_UPDATE'						=> 'Aktualisierung des Suchindexes erlauben',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Erlaubt eine Aktualisierung des Indexes beim Erstellen/Ändern von Beiträgen. Wird überschrieben, wenn die Suchfunktion deaktiviert ist.',
));
