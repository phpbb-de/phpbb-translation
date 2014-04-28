<?php
/**
*
* acp_board [Deutsch — Du]
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hier kannst du einige grundlegende Einstellungen deines Boards vornehmen, ihm einen passenden Namen und eine Beschreibung geben und, neben anderen Werten, die Standard-Einstellungen für Zeitzone und Sprache anpassen.',
	'BOARD_INDEX_TEXT'				=> '#Board index text',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> '#This text is displayed as the board index in the board’s breadcrumbs. If not specified, it will default to “Board index”.',
	'CUSTOM_DATEFORMAT'				=> 'Eigenes …',
	'DEFAULT_DATE_FORMAT'			=> 'Datumsformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Die Syntax entspricht der der <a href="http://www.php.net/date"><code>date()</code></a>-Funktion von PHP.',
	'DEFAULT_LANGUAGE'				=> 'Standard-Sprache',
	'DEFAULT_STYLE'					=> 'Standard-Style',
	'DISABLE_BOARD'					=> 'Board deaktivieren',
	//TODO
	//>>>>>> OLD <<<<<<: This will make the board unavailable to users. You can also enter a short (255 character) message to display if you wish.
	//>>>>>>> NEW <<<<<<: This will make the board unavailable to users who are neither administrators nor moderators. You can also enter a short (255 character) message to display if you wish.
	'DISABLE_BOARD_EXPLAIN'			=> '#Hiermit sperrst du das Board für alle Benutzer. Wenn du möchtest, kannst du eine kurze Nachricht (bis zu 255 Zeichen) angeben.',
	'DISPLAY_LAST_SUBJECT'			=> '#Display subject of last added post on forum list',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> '#The subject of the last added post will be displayed in the forum list with a hyperlink to the post. Subjects from password protected forums and forums in which user doesn’t have read access are not shown.',
	'OVERRIDE_STYLE'				=> 'Benutzer-Style überschreiben',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Verwendet den Standard-Style statt der individuell von den Benutzern gewählten Styles.',
	'SITE_DESC'						=> 'Beschreibung des Boards',
	'SITE_HOME_TEXT'				=> '#Main website text',
	'SITE_HOME_TEXT_EXPLAIN'		=> '#This text will be displayed as a link to your website homepage in the board’s breadcrumbs. If not specified, it will default to “Home”.',
	'SITE_HOME_URL'					=> '#Main website URL',
	'SITE_HOME_URL_EXPLAIN'			=> '#If specified, a link to this URL will be prepended to your board’s breadcrumbs and the board logo will link to this URL instead of the forum index. An absolute URL is required, e.g. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Name des Boards',
	'SYSTEM_TIMEZONE'				=> 'Zeitzone für Gäste',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Zeitzone, die für Benutzer verwendet wird, die nicht angemeldet sind (Gäste, Bots). Angemeldete Benutzer legen ihre Zeitzone während der Registrierung fest und können sie im persönlichen Bereich ändern.',
	'WARNINGS_EXPIRE'				=> 'Gültigkeit von Verwarnungen',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Die Anzahl der Tage, nach denen eine Verwarnung automatisch aus dem Benutzer-Profil gelöscht wird. Um Verwarnungen dauerhaft zu machen, stelle als Wert 0 ein.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hier kannst du einige Funktionen des Boards aktivieren bzw. deaktivieren.',

	'ALLOW_ATTACHMENTS'			=> 'Dateianhänge erlauben',
	'ALLOW_BIRTHDAYS'			=> 'Geburtstage aktivieren',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Aktiviert die Eingabe von Geburtstagen und die Anzeige des Alters im Profil. Beachte, dass für die Geburtstagsanzeige in der Foren-Übersicht eine getrennte Option in den Einstellungen zur Serverlast existiert.',
	'ALLOW_BOOKMARKS'			=> 'Setzen von Lesezeichen für Themen erlauben',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Der Benutzer darf persönliche Lesezeichen speichern.',
	'ALLOW_BBCODE'				=> 'BBCode erlauben',
	'ALLOW_FORUM_NOTIFY'		=> 'Beobachten von Foren erlauben',
	'ALLOW_NAME_CHANGE'			=> 'Namenswechsel erlauben',
	'ALLOW_NO_CENSORS'			=> 'Deaktivieren der Wortzensur erlauben',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Benutzer können die automatische Wortzensur in Beiträgen und Privaten Nachrichten deaktivieren.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Dateianhänge in Privaten Nachrichten erlauben',
	'ALLOW_PM_REPORT'			=> 'Benutzern die Meldung Privater Nachrichten erlauben',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Wenn diese Option aktiviert ist, können Benutzer eine Private Nachricht, die sie empfangen oder gesendet haben, an die Moderatoren des Boards melden Diese Privaten Nachrichten können dann im Moderations-Bereich eingesehen werden.',
	'ALLOW_QUICK_REPLY'			=> 'Schnellantwort erlauben',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Diese Einstellung ermöglicht es, die Schnellantwort im gesamten Board zu deaktivieren. Wenn die Einstellung aktiviert ist, regeln die spezifischen Einstellungen der Foren, ob die Schnellantwort verfügbar ist.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Absenden und Schnellantwort in allen Foren aktivieren',
	'ALLOW_SIG'					=> 'Signaturen erlauben',
	'ALLOW_SIG_BBCODE'			=> 'BBCode in Signaturen erlauben',
	'ALLOW_SIG_FLASH'			=> 'BBCode-Tag <code>flash</code> in Signaturen erlauben',
	'ALLOW_SIG_IMG'				=> 'BBCode-Tag <code>img</code> in Signaturen erlauben',
	'ALLOW_SIG_LINKS'			=> 'Links in Signaturen erlauben',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '„Nein“ deaktiviert den <code>[URL]</code> BBCode-Tag und die automatische Verlinkung von URLs.',
	'ALLOW_SIG_SMILIES'			=> 'Smilies in Signaturen erlauben',
	'ALLOW_SMILIES'				=> 'Smilies erlauben',
	'ALLOW_TOPIC_NOTIFY'		=> 'Beobachten von Themen erlauben',
	'BOARD_PM'					=> 'Private Nachrichten',
	'BOARD_PM_EXPLAIN'			=> 'Aktiviert Private Nachrichten für alle Benutzer.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatare sind im Allgemeinen kleine, einzigartige Bilder, mit denen sich die Mitglieder identifizieren können. Abhängig vom Style werden diese Bilder normalerweise unter dem Benutzernamen angezeigt, wenn Themen betrachtet werden. Hier kannst du die Art der Avatar-Nutzung festlegen. Bitte denke daran, dass du das von dir angegebene Verzeichnis erstellen und sicherstellen musst, dass es vom Webserver beschreibbar ist, damit Avatare hochgeladen werden können. Bedenke außerdem, dass Dateigrößen-Beschränkungen nur bei hochgeladenen Avataren greifen, nicht jedoch bei von anderen Seiten verlinkten Bildern.',

	'ALLOW_AVATARS'					=> 'Avatare erlauben',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Erlaubt die generelle Nutzung von Avataren.<br />Wenn du Avatare generell oder die eines bestimmten Typs deaktivierst, werden die deaktivierten Avatare nicht mehr im Board angezeigt, Benutzer können ihren Avatar aber weiterhin im persönlichen Bereich herunterladen.',
	'ALLOW_GRAVATAR'				=> '#Enable gravatar avatars',
	'ALLOW_LOCAL'					=> 'Galerie-Avatare erlauben',
	'ALLOW_REMOTE'					=> 'Remote-Avatare erlauben',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatare, die von einer anderen Website verlinkt werden.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Avatar-Upload von URL aktivieren',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Erlaubt das Hochladen eines Avatars von einer anderen Website.',
	'ALLOW_UPLOAD'					=> 'Hochladen von Avataren erlauben',
	'AVATAR_GALLERY_PATH'			=> 'Avatar-Galeriepfad',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Der Pfad von deinem phpBB-Hauptverzeichnis aus, in dem die Galerie-Avatare liegen (z.&nbsp;B. <samp>images/avatars/gallery</samp>).',
	'AVATAR_STORAGE_PATH'			=> 'Avatar Speicherpfad',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Der Pfad von deinem phpBB-Hauptverzeichnis aus, in dem die Avatare gespeichert werden (z.&nbsp;B. <samp>images/avatars/upload</samp>).',
	'MAX_AVATAR_SIZE'				=> 'Maximale Abmessungen für Avatare',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Breite &times; Höhe in Pixel',
	'MAX_FILESIZE'					=> 'Maximale Dateigröße',
	'MAX_FILESIZE_EXPLAIN'			=> 'Für hochgeladene Avatare. Bei 0 wird die Dateigröße nur durch die PHP-Konfiguration limitiert.',
	'MIN_AVATAR_SIZE'				=> 'Minimale Abmessungen für Avatare',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Breite &times; Höhe in Pixel',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Hier kannst du alle Standard-Einstellungen für Private Nachrichten vornehmen.',

	'ALLOW_BBCODE_PM'			=> 'BBCode in Privaten Nachrichten erlauben',
	'ALLOW_FLASH_PM'			=> 'BBCode-Tag <code>[FLASH]</code> in Privaten Nachrichten erlauben',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Die Möglichkeit, Flash in Privaten Nachrichten zu verwenden, hängt auch von den gesetzten Berechtigungen ab.',
	'ALLOW_FORWARD_PM'			=> 'Weiterleiten von Privaten Nachrichten erlauben',
	'ALLOW_IMG_PM'				=> 'BBCode-Tag <code>[IMG]</code> in Privaten Nachrichten erlauben',
	'ALLOW_MASS_PM'				=> 'Versand von Privaten Nachrichten an mehrere Mitglieder oder Gruppen erlauben',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Der Versand an Gruppen kann für jede Gruppe in den Gruppeneinstellungen angepasst werden.',
	'ALLOW_PRINT_PM'			=> 'Druckansicht in Privaten Nachrichten erlauben',
	'ALLOW_QUOTE_PM'			=> 'Zitate in Privaten Nachrichten erlauben',
	'ALLOW_SIG_PM'				=> 'Signatur in Privaten Nachrichten erlauben',
	'ALLOW_SMILIES_PM'			=> 'Smilies in Privaten Nachrichten erlauben',
	'BOXES_LIMIT'				=> 'Maximale Anzahl von Nachrichten pro Ordner',
	'BOXES_LIMIT_EXPLAIN'		=> 'Benutzer können in einem Ordner nicht mehr als die hier festgelegte Anzahl an Privaten Nachrichten ablegen. Um eine unbegrenzte Anzahl zuzulassen, stelle als Wert 0 ein.',
	'BOXES_MAX'					=> 'Maximale Anzahl an Ordnern',
	'BOXES_MAX_EXPLAIN'			=> 'Standardmäßig können Benutzer diese Anzahl an persönlichen Ordnern für Private Nachrichten erstellen.',
	'ENABLE_PM_ICONS'			=> 'Die Nutzung von Themen-Symbolen in Privaten Nachrichten aktivieren',
	'FULL_FOLDER_ACTION'		=> 'Standard-Verhalten bei vollem Ordner',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Das standardmäßige Verhalten, wenn der Ordner eines Benutzers voll ist und die von ihm eingestellte Aktion nicht durchführbar ist bzw. diese nicht festgelegt wurde. Eine Ausnahme gilt für den Ordner „Gesendete Nachrichten“, wo das Standard-Verhalten immer so eingestellt ist, dass alte Nachrichten gelöscht werden.',
	'HOLD_NEW_MESSAGES'			=> 'Neue Nachrichten zurückhalten',
	'PM_EDIT_TIME'				=> 'Nachträgliche Bearbeitung einschränken',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limitiert die Zeit zur Bearbeitung einer gesendeten, aber noch ungelesenen Privaten Nachricht. Um dieses Verhalten abzuschalten, stelle als Wert 0 ein.',
	'PM_MAX_RECIPIENTS'			=> 'Maximale Anzahl zulässiger Empfänger',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Die maximale Anzahl zulässiger Empfänger für eine Private Nachricht. Bei einem Wert von 0 sind unbegrenzt viele Empfänger zulässig. Diese Einstellung kann gruppenbezogen in den Gruppeneinstellungen angepasst werden.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hier kannst du alle Standard-Einstellungen für Beiträge vornehmen.',
	'ALLOW_POST_LINKS'					=> 'Links in Beiträgen/Privaten Nachrichten erlauben',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '„Nein“ deaktiviert den <code>[URL]</code> BBCode-Tag und die automatische Verlinkung von URLs.',
	'ALLOW_POST_FLASH'					=> 'BBCode-Tag <code>[FLASH]</code> in Beiträgen erlauben',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Wenn deaktiviert, ist der <code>[FLASH]</code> BBCode-Tag in Beiträgen deaktiviert. Andernfalls wird durch das Berechtigungssystem festgelegt, welche Benutzer den <code>[FLASH]</code> BBCode-Tag benutzen können.',

	'BUMP_INTERVAL'					=> 'Neu-Markierung möglich nach',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Die Zahl der Minuten, Stunden oder Tage, die seit dem letzten Beitrag zu einem Thema vergangen sein müssen, damit das Thema als „Neu“ markiert werden kann. Um die Markierung als „Neu“ vollständig zu deaktivieren, stelle als Wert 0 ein.',
	'CHAR_LIMIT'					=> 'Maximale Anzahl der Zeichen pro Beitrag/Nachricht',
	'CHAR_LIMIT_EXPLAIN'			=> 'Die maximale Zahl von Zeichen, die in einem Beitrag/einer Privaten Nachricht zulässig sind; 0 bedeutet unbegrenzt.',
	'DELETE_TIME'					=> 'Begrenze Löschzeit',
	'DELETE_TIME_EXPLAIN'			=> 'Begrenzt die Zeit, die zur Löschung eines neuen Beitrags zur Verfügung steht. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'DISPLAY_LAST_EDITED'			=> 'Bearbeitungen anzeigen',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Wähle aus, ob die Information „Zuletzt bearbeitet von“ in Beiträgen angezeigt werden soll.',
	'EDIT_TIME'						=> 'Nachträgliche Bearbeitung einschränken',
	'EDIT_TIME_EXPLAIN'				=> 'Limitiert die Zeit, in der ein neuer Beitrag bearbeitet werden kann; 0 bedeutet unbegrenzt.',
	'FLOOD_INTERVAL'				=> 'Wartezeit zwischen zwei Beiträgen',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Die Zeit in Sekunden, die ein Benutzer warten muss, bevor er einen neuen Beitrag schreiben kann. Wenn du Benutzern erlauben möchtest, die Wartezeit zu umgehen, musst du deren Befugnisse anpassen.',
	'HOT_THRESHOLD'					=> 'Grenzwert für beliebte Themen',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Anzahl der Beiträge in einem Thema, bis es als „beliebtes Thema“ angezeigt wird. Um beliebte Themen zu deaktivieren, stelle als Wert 0 ein.',
	'MAX_POLL_OPTIONS'				=> 'Maximale Anzahl an Umfrage-Optionen',
	'MAX_POST_FONT_SIZE'			=> 'Maximale Schriftgröße in Beiträgen',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximal in Beiträgen zulässige Schriftgröße. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximale Bild-Höhe in Beiträgen',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Die maximale Höhe eines Bildes/einer Flash-Datei in Beiträgen. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximale Bild-Breite in Beiträgen',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Die maximale Breite eines Bildes/einer Flash-Datei in Beiträgen. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_POST_URLS'					=> 'Maximale Anzahl an Links pro Beitrag',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximale Anzahl von Links in einem Beitrag. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MIN_CHAR_LIMIT'				=> 'Minimale Anzahl von Zeichen pro Beitrag/Nachricht',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Die minimale Anzahl von Zeichen, die ein Benutzer in einem Beitrag/einer Nachricht mindestens eingeben muss. Der Wert muss 1 oder größer sein.',
	'POSTING'						=> 'Beiträge schreiben',
	'POSTS_PER_PAGE'				=> 'Beiträge pro Seite',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximale Tiefe verschachtelter Zitate',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Die maximale Tiefe für verschachtelte Zitate. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'SMILIES_LIMIT'					=> 'Maximale Smilies pro Beitrag',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Die maximale Anzahl an Smilies in einem Beitrag. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'SMILIES_PER_PAGE'				=> 'Smilies pro Seite',
	'TOPICS_PER_PAGE'				=> 'Themen pro Seite',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hier kannst du alle Standard-Einstellungen für Signaturen vornehmen.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximale Schriftgröße',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Die maximal erlaubte Schriftgröße, die ein Benutzer für seine Signatur verwenden kann. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximale Bild-Höhe',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Die maximal erlaubte Höhe einer Bild- oder Flash-Datei in der Signatur. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximale Bild-Breite',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Die maximal erlaubte Breite einer Bild- oder Flash-Datei in der Benutzer-Signatur. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_SIG_LENGTH'				=> 'Maximale Länge',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Die maximal erlaubte Anzahl an Zeichen in der Signatur.',
	'MAX_SIG_SMILIES'				=> 'Maximale Smilies',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Die maximal erlaubte Anzahl an Smilies in der Signatur. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'MAX_SIG_URLS'					=> 'Maximale Links',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Die maximal erlaubte Anzahl der Links in der Signatur. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Hier kannst du Einstellungen bezüglich der Registrierung und der Mitgliederprofile vornehmen.',

	'ACC_ACTIVATION'				=> 'Benutzerkonto-Aktivierung',
	//TODO
	//>>>>>> OLD <<<<<<: This determines whether users have immediate access to the board or if confirmation is required. You can also completely disable new registrations. “Board-wide e-mail” must be enabled in order to use user or admin activation.
	//>>>>>>> NEW <<<<<<: This determines whether users have immediate access to the board or if confirmation is required. You can also completely disable new registrations. “Board-wide email” must be enabled in order to use user or admin activation.
	'ACC_ACTIVATION_EXPLAIN'		=> '#Diese Einstellung legt fest, ob Benutzer sofortigen Zugang zum Board haben, oder ob eine Bestätigung erforderlich ist. Du kannst neue Registrierungen auch komplett deaktivieren. Die E-Mail-Funktionalität des Boards muss aktiviert sein, damit eine Aktivierung durch den Benutzer oder einen Administrator möglich ist.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Grenze für kürzlich registrierte Benutzer',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Jeder neu registrierte Benutzer ist Mitglied der Gruppe „Kürzlich registrierte Benutzer“, bis er diese Zahl von Beiträgen erreicht hat. Du kannst diese Gruppe nutzen, um für sie die Nutzung von Privaten Nachrichten zu unterbinden oder um eine Freigabe ihrer Beiträge erforderlich zu machen. <strong>Ein Wert von 0 deaktiviert diese Funktion.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Kürzlich registrierte Benutzer-Gruppe als Standard setzen',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Wenn diese Funktion aktiviert und eine Grenze für kürzlich registrierte Benutzer gesetzt ist, werden neue Benutzer nicht nur in die <em>Kürzlich registrierte Benutzer</em>-Gruppe aufgenommen, sondern diese ist zugleich ihre Standardgruppe. Diese Funktion ist hilfreich, wenn Du einen Rang oder einen Avatar für die Gruppe festlegen willst, die dann für den Benutzer übernommen werden.',

	'ACC_ADMIN'					=> 'Durch einen Administrator',
	'ACC_DISABLE'				=> 'Registrierung deaktivieren',
	'ACC_NONE'					=> 'Keine Aktivierung (direkter Zugang ohne Prüfung)',
	//TODO
	//>>>>>> OLD <<<<<<: By user (e-mail verification)
	//>>>>>>> NEW <<<<<<: By user (email verification)
	'ACC_USER'					=> '#Durch den Benutzer (Verifizierung der E-Mail-Adresse)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	//TODO
	//>>>>>> OLD <<<<<<: Allow e-mail address re-use
	//>>>>>>> NEW <<<<<<: Allow email address re-use
	'ALLOW_EMAIL_REUSE'			=> '#Mehrfachnutzung der E-Mail-Adresse erlauben',
	//TODO
	//>>>>>> OLD <<<<<<: Different users can register with the same e-mail address.
	//>>>>>>> NEW <<<<<<: Different users can register with the same email address.
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '#Mehrere Benutzer können sich mit derselben E-Mail-Adresse registrieren.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-Fax-Nummer',
	'COPPA_MAIL'				=> 'COPPA-Post-Adresse',
	'COPPA_MAIL_EXPLAIN'		=> 'Dies ist die Adresse, zu der Eltern die COPPA-Registrierungsformulare senden können.',
	'ENABLE_COPPA'				=> 'COPPA aktivieren',
	'ENABLE_COPPA_EXPLAIN'		=> 'Dadurch müssen Benutzer erklären, ob sie 13 Jahre oder älter sind, um dem amerikanischen COPPA nachzukommen. Wenn diese Einstellung deaktiviert ist, werden die COPPA-spezifischen Gruppen nicht angezeigt.',
	'MAX_CHARS'					=> 'Max.',
	'MIN_CHARS'					=> 'Min.',
	'NO_AUTH_PLUGIN'			=> 'Keine passende Authentifizierungs-Methode gefunden.',
	'PASSWORD_LENGTH'			=> 'Passwortlänge',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Die minimale und maximale Anzahl an Zeichen in Passwörtern.',
	'REG_LIMIT'					=> 'Registrierungs-Versuche',
	'REG_LIMIT_EXPLAIN'			=> 'Die Zahl der Versuche, die ein Benutzer für die Lösung der Anti-Spam-Bot-Aufgabe hat, bevor er für die Sitzung gesperrt wird.',
	'USERNAME_ALPHA_ONLY'		=> 'Nur alphanumerische Zeichen',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumerische Zeichen und Füllzeichen',
	'USERNAME_ASCII'			=> 'ASCII (keine internationalen Unicode-Zeichen)',
	'USERNAME_LETTER_NUM'		=> 'Alle Buchstaben und Ziffern',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Alle Buchstaben, Ziffern und Füllzeichen',
	'USERNAME_CHARS'			=> 'Erlaubte Zeichen in Benutzernamen',
	'USERNAME_CHARS_ANY'		=> 'Alle Zeichen',
	'USERNAME_CHARS_EXPLAIN'	=> 'Legt fest, welche Zeichen in Benutzernamen genutzt werden können. Füllzeichen sind: Leerzeichen, -, +, _, [ und ].',
	'USERNAME_LENGTH'			=> 'Länge des Benutzernamens',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Die minimale und maximale Anzahl an Zeichen in Benutzernamen.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Allgemeine Feed-Einstellungen',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Dieses Modul stellt verschiedene ATOM-Feeds zur Verfügung. Es wandelt BBCode um, so dass er in externen Feeds dargestellt werden kann.',

	'ACP_FEED_GENERAL'					=> 'Allgemeine Feed-Einstellungen',
	'ACP_FEED_POST_BASED'				=> 'Beitragsbezogene Feed-Einstellungen',
	'ACP_FEED_TOPIC_BASED'				=> 'Themenbezogene Feed-Einstellungen',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Weitere Feed-Einstellungen',

	'ACP_FEED_ENABLE'					=> 'Feeds aktivieren',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Aktiviert oder deaktiviert ATOM-Feeds für das ganze Board.<br />Eine Deaktivierung schaltet alle Feeds unabhängig der folgenden Einstellungen ab.',
	'ACP_FEED_LIMIT'					=> 'Anzahl von Elementen',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Die maximale Anzahl von Elementen eines Feeds, die angezeigt werden.',

	'ACP_FEED_OVERALL'					=> 'Board-Feed',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Neue Beiträge des gesamten Boards.',
	'ACP_FEED_FORUM'					=> 'Forenspezifische Feeds aktivieren',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Neue Beiträge eines einzelnen Forums und Unterforen.',
	'ACP_FEED_TOPIC'					=> 'Themenspezifische Feeds aktivieren',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Neue Beiträge eines Themas.',

	'ACP_FEED_TOPICS_NEW'				=> 'Neue Themen-Feed',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Aktiviert den „Neue Themen“-Feed, der die zuletzt erstellten Themen und deren ersten Beitrag anzeigt.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktive Themen-Feed',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Aktiviert den „Aktive Themen“-Feed, der die zuletzt aktiven Themen und deren letzten Beitrag anzeigt.',
	'ACP_FEED_NEWS'						=> 'News-Feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Gibt den ersten Beitrag aus diesen Foren aus. Wähle keine Foren aus, um den News-Feed zu deaktivieren.<br />Wähle mehrere Foren aus/ab, indem du beim Klicken die <samp>Strg</samp>-Taste drückst.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Foren-Feed aktivieren',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Dieser Feed zeigt eine Liste aller Foren des Boards an.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP-Authentifizierung erlauben',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Aktiviert die HTTP-Authentifizierung. Dadurch können Benutzer Inhalte empfangen, die für Gäste nicht sichtbar sind. Um die Funktion zu nutzen, muss der Parameter <samp>auth=http</samp> der URL des Feeds hinzugefügt werden. Beachte bitte, dass bei manchen PHP-Konfigurationen eine Anpassung der .htaccess-Datei notwendig ist. Entsprechende Hinweise sind in der Datei enthalten.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Element-Statistiken',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Zeigt individuelle Statistiken unterhalb der Feed-Elemente an<br />(Ersteller, Datum und Uhrzeit, Antworten, Zugriffe)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Foren ausschließen',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Inhalte dieser Foren werden <strong>nicht in den Feeds berücksichtigt</strong>. Wähle keine Foren aus, um die Daten aller Foren auszugeben.<br />Wähle mehrere Foren aus/ab, indem du beim Klicken die <samp>Strg</samp>-Taste drückst.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hier kannst du Plugins auswählen und konfigurieren, die das automatisierte Versenden von Formularen durch Spam-Bots unterbinden sollen. Diese Plugins zeigen dem Benutzer normalerweise einen <em>CAPTCHA</em>-Test an, der für einen Computer nur schwer zu lösen ist.',
	'AVAILABLE_CAPTCHAS'					=> 'Verfügbare Plugins',
	'CAPTCHA_UNAVAILABLE'					=> 'Das Plugin kann nicht ausgewählt werden, da seine Voraussetzungen nicht erfüllt werden.',
	'CAPTCHA_GD'							=> 'GD-Grafik',
	'CAPTCHA_GD_3D'							=> 'GD 3D-Grafik',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Vordergrund-Rauschen',
	'CAPTCHA_GD_EXPLAIN'					=> 'Verwendet die GD-Library, um komplexere Grafiken erstellen zu können.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Fügt den Grafiken ein Vordergrund-Rauschen hinzu, um eine automatisierte Erkennung zu erschweren.',
	'CAPTCHA_GD_X_GRID'						=> 'Hintergrund-Rauschen x-Achse',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Verwende einen niedrigeren Wert, um die Lösung der Grafik schwieriger zu machen. 0 deaktiviert das Hintergrund-Rauschen auf der x-Achse.',
	'CAPTCHA_GD_Y_GRID'						=> 'Hintergrund-Rauschen Y-Achse',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Verwende einen niedrigeren Wert, um die Lösung der Grafik schwieriger zu machen. 0 deaktiviert das Hintergrund-Rauschen auf der y-Achse.',
	'CAPTCHA_GD_WAVE'						=> 'Wellen-Verzerrung',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Fügt der Grafik eine Wellen-Verzerrung hinzu.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-Rauschen hinzufügen',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Fügt den Grafiken zusätzliche Objekte hinzu.',
	'CAPTCHA_GD_FONTS'						=> 'Unterschiedliche Schriften nutzen',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Diese Einstellung legt fest, wie viele verschiedene Schriftformen genutzt werden. Du kannst nur die Standard-Formen nutzen oder neue Formen aktivieren. Es können auch Kleinbuchstaben hinzugefügt werden.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standard',
	'CAPTCHA_FONT_NEW'						=> 'Neue Formen',
	'CAPTCHA_FONT_LOWER'					=> 'Auch Kleinbuchstaben',
	'CAPTCHA_NO_GD'							=> 'Einfache Grafik',
	'CAPTCHA_PREVIEW_MSG'					=> 'Deine Änderungen wurden nicht gespeichert. Dies ist nur eine Vorschau.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'So würde die Anzeige des Plugins mit den aktuellen Einstellungen aussehen.',

	'CAPTCHA_SELECT'						=> 'Installierte Plugins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Die Liste enthält die Plugins, die vom Board gefunden wurden. Ausgegraute Elemente stehen derzeit nicht zur Verfügung und müssen ggf. erst konfiguriert werden, bevor sie genutzt werden können.',
	'CAPTCHA_CONFIGURE'						=> 'Plugins konfigurieren',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Ändert die Einstellungen für das ausgewählte Plugin.',
	'CONFIGURE'								=> 'Konfigurieren',
	'CAPTCHA_NO_OPTIONS'					=> 'Dieses Plugin hat keine Konfigurations-Optionen.',

	'VISUAL_CONFIRM_POST'					=> 'Spam-Bot-Schutz für Beiträge von Gästen aktivieren',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Gäste müssen eine Anti-Spam-Bot-Aufgabe beim Schreiben von Beiträgen lösen. Dadurch sollen Massenbeiträge (Spam) unterbunden werden.',
	'VISUAL_CONFIRM_REG'					=> 'Spam-Bot-Schutz für Registrierungen aktivieren',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Neue Benutzer müssen eine Anti-Spam-Bot-Aufgabe bei der Registrierung lösen. Dadurch sollen Massenregistrierungen unterbunden werden.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Benutzer Austausch der Anti-Spam-Bot-Aufgabe erlauben',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Erlaubt den Benutzern, eine neue Anti-Spam-Bot-Aufgabe anzufordern, wenn sie sie bei der Registrierung nicht lösen können. Nicht alle Plugins unterstützen diese Option.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Hier legst du die Einstellungen fest, die verwendet werden, um Cookies an die Browser deiner Benutzer zu senden. In den meisten Fällen sollten die Standardwerte ausreichend sein. Führe Änderungen mit Bedacht durch, falsche Einstellungen könnten deine Benutzer daran hindern, sich anzumelden.',

	'COOKIE_DOMAIN'				=> 'Cookie-Domain',
	'COOKIE_NAME'				=> 'Cookie-Name',
	'COOKIE_PATH'				=> 'Cookie-Pfad',
	'COOKIE_SECURE'				=> 'Sicherer Server',
	'COOKIE_SECURE_EXPLAIN'		=> 'Falls dein Server über SSL läuft, aktiviere diese Option, ansonsten lass sie deaktiviert. Wenn diese Option aktiviert ist, obwohl der Server nicht über SSL aufgerufen wird, können Fehler bei der Weiterleitung auftreten.',
	'ONLINE_LENGTH'				=> 'Zeitspanne für die Online-Anzeige',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Die Zeit in Minuten, nach der inaktive Benutzer nicht mehr in der „Wer ist online“-Anzeige erscheinen. Je größer dieser Wert ist, desto größer ist die Rechenleistung, die zur Erstellung dieser Liste benötigt wird.',
	'SESSION_LENGTH'			=> 'Sitzungslänge',
	'SESSION_LENGTH_EXPLAIN'	=> 'Die Zeit in Sekunden, nach der Sitzungen ungültig werden.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hier kannst du einige Board-Funktionen aktivieren und deaktivieren, um die beanspruchte Rechenleistung zu verringern. Auf den meisten Servern ist es allerdings nicht nötig, irgendeine Funktion zu deaktivieren. Andererseits kann es auf einigen Systemen oder auf Servern, die man sich mit anderen teilt, durchaus Vorteile bringen, wenn Funktionen abgeschaltet werden, die nicht wirklich benötigt werden. Du kannst hier auch Limits für die Systemauslastung und für die aktiven Sitzungen festlegen, bei deren Überschreitung das Board offline geht.',

	'ALLOW_CDN'						=> '#Allow usage of third party content delivery networks',
	'ALLOW_CDN_EXPLAIN'				=> '#If this setting is enabled, some files will be served from external third party servers instead of your server. This reduces the network bandwidth required by your server, but may present a privacy issue for some board administrators. In a default phpBB installation, this includes loading “jQuery” and the font “Open Sans” from Google’s content delivery network.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Zusätzliche Profil-Felder',
	'LIMIT_LOAD'					=> 'Schränke Systemauslastung ein',
	'LIMIT_LOAD_EXPLAIN'			=> 'Wenn die durchschnittliche Systemauslastung der letzten Minute (load average) diesen Wert überschreitet, geht das Board automatisch offline. 1.0 steht für eine ca. 100-prozentige Auslastung eines Prozessors. Diese Einstellung steht nur auf System zur Verfügung, die auf UNIX basieren und bei denen dieser Wert zugänglich ist. Der Wert stellt sich auf 0 zurück, wenn phpBB diesen Wert nicht auslesen konnte.',
	'LIMIT_SESSIONS'				=> 'Schränke Sitzungen ein',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Wenn die Zahl der Sitzungen innerhalb einer Minute diesen Wert überschreitet, geht das Board offline. Um keine Begrenzung festzulegen, stelle als Wert 0 ein.',
	'LOAD_CPF_MEMBERLIST'			=> 'Erlaubt Styles, zusätzliche Profil-Felder in der Mitgliederliste anzuzeigen',
	'LOAD_CPF_PM'					=> '#Display custom profile fields in private messages',
	'LOAD_CPF_VIEWPROFILE'			=> 'Zusätzliche Profil-Felder in Mitgliederprofilen anzeigen',
	'LOAD_CPF_VIEWTOPIC'			=> 'Zusätzliche Profil-Felder in der Themen-Ansicht anzeigen',
	'LOAD_USER_ACTIVITY'			=> 'Aktivität der Mitglieder anzeigen',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Zeigt im Profil und im persönlichen Bereich an, in welchen Foren und Themen ein Mitglied am aktivsten ist. Es wird empfohlen, diese Funktion in Foren zu deaktivieren, die mehr als eine Million Beiträge haben.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> '#Read Notification Expiration',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => '#Number of days that will elapse before a read notification will automatically be deleted. Set this value to 0 to make notifications permanent.',
	'RECOMPILE_STYLES'				=> 'Rekompilieren veralteter Style-Komponenten',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Prüft auf neue Style-Komponenten und rekompiliert diese.',
	'YES_ANON_READ_MARKING'			=> 'Gelesen-Markierung für Gäste',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Speichert auch für Gäste, ob ein Thema gelesen oder ungelesen ist. Wenn diese Option deaktiviert ist, erscheinen Beiträge für Gäste immer als gelesen.',
	'YES_BIRTHDAYS'					=> 'Anzeige der Geburtstage aktivieren',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Wenn deaktiviert, wird die Liste der Geburtstage nicht länger angezeigt. Um diese Funktion zu aktivieren, muss die Geburtstagsfunktion ebenfalls aktiviert werden.',
	'YES_JUMPBOX'					=> 'Anzeige der Jumpbox aktivieren',
	'YES_MODERATORS'				=> 'Anzeige der Moderatoren aktivieren',
	'YES_ONLINE'					=> 'Online-Anzeige der Mitglieder aktivieren',
	'YES_ONLINE_EXPLAIN'			=> 'Zeigt in der Foren-Übersicht, in den Foren und den Themen an, welches Mitglied online ist.',
	'YES_ONLINE_GUESTS'				=> 'Online-Anzeige der Gäste aktivieren',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Zeigt Informationen zu Gästen in „Wer ist online“ an.',
	'YES_ONLINE_TRACK'				=> 'Anzeige des Online-/Offline-Symbols aktivieren',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Zeigt im Profil und der Themen-Ansicht den Online-Status des Mitglieds an.',
	'YES_POST_MARKING'				=> 'Themen-Markierung aktivieren',
	'YES_POST_MARKING_EXPLAIN'		=> 'Zeigt an, ob ein Benutzer in einem Thema schon einen Beitrag erstellt hat.',
	'YES_READ_MARKING'				=> 'Serverseitige Gelesen-Markierung aktivieren',
	'YES_READ_MARKING_EXPLAIN'		=> 'Speichert Informationen zu gelesenen/ungelesenen Beiträgen in der Datenbank statt im Cookie.',
	'YES_UNREAD_SEARCH'				=> 'Aktiviert die Suche nach ungelesenen Beiträgen',
));

// Auth settings
$lang = array_merge($lang, array(
	//TODO
	//>>>>>> OLD <<<<<<: phpBB supports authentication plug-ins, or modules. These allow you determine how users are authenticated when they log into the board. By default three plug-ins are provided; DB, LDAP and Apache. Not all methods require additional information so only fill out fields if they are relevant to the selected method.
	//>>>>>>> NEW <<<<<<: phpBB supports authentication plug-ins, or modules. These allow you determine how users are authenticated when they log into the board. By default four plug-ins are provided: DB, LDAP, Apache, and OAuth. Not all methods require additional information so only fill out fields if they are relevant to the selected method.
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> '#phpBB unterstützt Authentifizierungs-Plugins oder -Module. Mit diesen kannst du festlegen, wie Benutzer authentifiziert werden, wenn sie sich im Forum anmelden. Standardmäßig gibt es drei Plugins: DB, LDAP und Apache. Nicht alle Methoden benötigen zusätzliche Angaben, fülle daher nur Felder aus, wenn sie für die gewählte Methode von Belang sind.',


	'AUTH_METHOD'				=> 'Authentifizierungs-Methode wählen',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> '#Both the key and secret of each enabled OAuth service provider must be provided. Only one was provided for an OAuth service provider.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> '#Each OAuth provider requires a unique secret and key in order to authenticate with the external server.<br />These should be supplied by the OAuth service when you register your website with them and should be entered exactly as provided to you.<br />Any service that does not have both a key and a secret entered here will not be available for use by the forum users.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> '#Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> '#OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> '#Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du musst die Apache-Authentifizierung konfigurieren, bevor diese Methode in phpBB eingestellt wird. Beachte, dass der Benutzername der Apache-Authentifizierung deinem phpBB-Benutzernamen entsprechen muss. Die Apache-Authentifizierung kann nur mit mod_php (nicht mit der CGI-Version) und deaktiviertem safe_mode verwendet werden.',

	'LDAP_DN'						=> 'LDAP-Basis <var>DN</var>',
	'LDAP_DN_EXPLAIN'				=> 'Distinguished Name des Verzeichnisses, in dem sich die Benutzer-Daten befinden, z.&nbsp;B. <samp>o=Meine&nbsp;Firma,c=DE</samp>.',
	//TODO
	//>>>>>> OLD <<<<<<: LDAP e-mail attribute
	//>>>>>>> NEW <<<<<<: LDAP email attribute
	'LDAP_EMAIL'					=> '#LDAP-E-Mail-Attribut',
	//TODO
	//>>>>>> OLD <<<<<<: Set this to the name of your user entry e-mail attribute (if one exists) in order to automatically set the e-mail address for new users. Leaving this empty results in empty e-mail address for users who log in for the first time.
	//>>>>>>> NEW <<<<<<: Set this to the name of your user entry email attribute (if one exists) in order to automatically set the email address for new users. Leaving this empty results in empty email address for users who log in for the first time.
	'LDAP_EMAIL_EXPLAIN'			=> '#Gib hier den Namen des E-Mail-Attributes (falls existent) ein, um die E-Mail-Adresse für neue Benutzer automatisch zu setzen. Wenn dieses Feld freigelassen wird, ist bei Benutzern, die sich zum ersten Mal anmelden, keine E-Mail-Adresse gesetzt.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Die Verbindung zum LDAP-Server mit der angegebenen Benutzernamen und Passwort ist gescheitert.',
	//TODO
	//>>>>>> OLD <<<<<<: The specified e-mail attribute does not exist.
	//>>>>>>> NEW <<<<<<: The specified email attribute does not exist.
	'LDAP_NO_EMAIL'					=> '#Das angegebene E-Mail-Attribut existiert nicht.',
	'LDAP_NO_IDENTITY'				=> 'Kann keine Anmeldekennung für %s finden.',
	'LDAP_PASSWORD'					=> 'LDAP-Passwort',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lasse das Feld für eine anonyme Verbindung frei; ansonsten gib das Passwort für obigen Benutzer an. Erforderlich bei Active Directory-Servern.<br /><em><strong>WARNUNG:</strong> Dieses Passwort wird im Klartext in der Datenbank gespeichert und ist daher für jeden einsehbar, der Zugriff auf die Datenbank oder diese Konfigurationsseite hat.</em>',
	'LDAP_PORT'						=> 'Port des LDAP-Servers',
	'LDAP_PORT_EXPLAIN'				=> 'Du kannst optional einen Port angeben, der statt dem Standardport 389 für die Verbindung zum LDAP-Server verwendet werden soll.',
	'LDAP_SERVER'					=> 'LDAP-Server-Name',
	'LDAP_SERVER_EXPLAIN'			=> 'Wenn LDAP genutzt wird, ist dies der Servername oder die IP-Adresse des LDAP-Servers. Alternativ kannst du eine URL der Form <samp>ldap://hostname:port/</samp> angeben.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Attribut, unter dem nach einem angegebenen Benutzernamen gesucht werden soll, z.&nbsp;B. <var>uid</var>, <var>sn</var> usw.',
	'LDAP_USER'						=> 'LDAP-Benutzer <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lasse das Feld für eine anonyme Verbindung frei. Wenn ausgefüllt, wird phpBB den angegebenen Benutzer dazu verwenden, um sich für die Suche nach dem passenden Benutzer wie <samp>uid=Benutzername,ou=Organisationseinheit,o=Firma,c=DE</samp> anzumelden. Erforderlich bei Active Directory-Servern.',
	'LDAP_USER_FILTER'				=> 'LDAP Benutzer-Filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Du kannst optional die durchsuchten Objekte durch weitere Filter einschränken. Zum Beispiel führt <samp>objectClass=posixGruppe</samp> zur Benutzung von <samp>(&amp;(uid=$username)(objectClass=posixGruppe))</samp>.',
));

// Server Settings
$lang = array_merge($lang, array(
	//TODO
	//>>>>>> OLD <<<<<<: Here you define server and domain dependant settings. Please ensure the data you enter is accurate, errors will result in e-mails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.
	//>>>>>>> NEW <<<<<<: Here you define server and domain dependent settings. Please ensure the data you enter is accurate, errors will result in emails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '#Hier kannst du einige Einstellungen bezüglich Server und Domain vornehmen. Bitte stelle sicher, dass die Daten, die du eingibst, auch wirklich stimmen, denn fehlerhafte Angaben könnten zu E-Mails führen, die falsche Informationen enthalten. Wenn du den Domain-Namen eingibst, denk daran, dass http:// oder eine andere Protokoll-Bezeichnung darin enthalten ist. Ändere den Port nur, wenn du weißt, dass dein Server einen anderen Port nutzt; Port 80 ist in den allermeisten Fällen richtig.',

	'ENABLE_GZIP'				=> 'gzip-Komprimierung aktivieren',
	'ENABLE_GZIP_EXPLAIN'		=> 'Der Seiteninhalt wird vor dem Senden an den Benutzer komprimiert. Dies kann den Netzverkehr reduzieren, wird aber auch zu einer Erhöhung der CPU-Last sowohl auf Server- als auch auf Benutzerseite führen. Erfordert, dass die zlib-Erweiterung von PHP geladen ist.',
	'FORCE_SERVER_VARS'			=> 'Erzwinge Server-URL-Einstellungen',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Wenn dies auf „Ja“ gestellt wird, werden die hier vorgenommenen Server-Einstellungen anstelle der automatisch ermittelten Werte genommen.',
	'ICONS_PATH'				=> 'Speicherpfad für Themen-Symbole',
	'ICONS_PATH_EXPLAIN'		=> 'Pfad von deinem phpBB-Hauptverzeichnis aus, z.&nbsp;B. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'					=> '#Enable URL Rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN'			=> '#When enabled, URLs containing ’app.php’ will be rewritten to remove the filename (i.e. app.php/foo will become /foo). <strong>Apache server’s mod_rewrite module is required for this functionality to work; if this option is enabled without mod_rewrite support, URLs on your board may be broken.</strong>',
	'MOD_REWRITE_DISABLED'					=> '#The <strong>mod_rewrite</strong> module on your Apache web server is disabled. Enable the module or contact your web hosting provider if you wish to enable this feature.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE'	=> '#We are unable to determine whether or not this server supports URL rewriting. This setting may be enabled but if URL rewriting is not available, paths generated by this board (such as for use in links) may be broken. Contact your web hosting provider if you are unsure whether or not you can safely enable this feature.',
	'PATH_SETTINGS'				=> 'Pfad-Einstellungen',
	'RANKS_PATH'				=> 'Speicherpfad für Rang-Bilder',
	'RANKS_PATH_EXPLAIN'		=> 'Pfad von deinem phpBB-Hauptverzeichnis aus, z.&nbsp;B. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Scriptpfad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Der Pfad in dem sich phpBB befindet, relativ zum Domainnamen; z.&nbsp;B. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain-Name',
	'SERVER_NAME_EXPLAIN'		=> 'Die Domain, auf der das Board läuft (bspw. <samp>www.phpbb.de</samp>).',
	'SERVER_PORT'				=> 'Server-Port',
	'SERVER_PORT_EXPLAIN'		=> 'Der Port, auf dem der Server läuft, für gewöhnlich 80. Ändere den Wert nur, wenn er sich davon unterscheidet.',
	'SERVER_PROTOCOL'			=> 'Server-Protokoll',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Dies wird als Server-Protokoll verwendet, wenn diese Einstellungen erzwungen werden. Ansonsten, oder wenn dieses Feld leer ist, werden die Einstellungen für „Sicherer Server“ aus den Cookie-Einstellungen genommen (<samp>http://</samp> oder <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL-Einstellungen',
	'SMILIES_PATH'				=> 'Speicherpfad für Smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'Pfad von deinem phpBB-Hauptverzeichnis aus, z.&nbsp;B. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Speicherpfad der Dateityp-Gruppen-Symbole',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pfad von deinem phpBB-Hauptverzeichnis aus, z.&nbsp;B. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> '#Run periodic tasks from system cron',
	'USE_SYSTEM_CRON_EXPLAIN'	=> '#When off, phpBB will arrange for periodic tasks to be run automatically. When on, phpBB will not schedule any periodic tasks by itself; a system administrator must arrange for <code>cron.php</code> to be invoked by the system cron facility at regular intervals (e.g. every 5 minutes).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Hier können die Einstellungen zu Sitzungen und zur Anmeldung festgelegt werden.',

	'ALL'							=> 'Alle',
	//TODO
	//>>>>>> OLD <<<<<<: Allow persistent logins
	//>>>>>>> NEW <<<<<<: Allow "Remember Me" logins
	'ALLOW_AUTOLOGIN'				=> '#Dauerhafte Anmeldung erlauben',
	//TODO
	//>>>>>> OLD <<<<<<: Determines whether users can autologin when they visit the board.
	//>>>>>>> NEW <<<<<<: Determines whether users are given "Remember Me" option when they visit the board.
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '#Legt fest, ob Benutzer sich automatisch bei jedem Besuch des Boards anmelden können.',
	'ALLOW_PASSWORD_RESET'			=> '#Allow password reset ("Forgot Password")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> '#Determines whether or not users are able to use the "I forgot my password" link on the login page to recover their account. If you use an external authentication mechanism you may wish to disable this feature.',
	//TODO
	//>>>>>> OLD <<<<<<: Persistent login key expiration length (in days)
	//>>>>>>> NEW <<<<<<: "Remember Me" login key expiration length (in days)
	'AUTOLOGIN_LENGTH'				=> '#Verfallszeit für Anmelde-Schlüssel',
	//TODO
	//>>>>>> OLD <<<<<<: Number of days after which persistent login keys are removed or zero to disable.
	//>>>>>>> NEW <<<<<<: Number of days after which "Remember Me" login keys are removed or zero to disable.
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '#Die Anzahl der Tage, nach denen ein Anmelde-Schlüssel für die automatische Anmeldung verfällt. Um den Schlüssel nicht verfallen zu lassen, stelle als Wert 0 ein.',
	'BROWSER_VALID'					=> 'Browser prüfen',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktiviert die Prüfung des Browsers für die jeweilige Sitzung, um die Sicherheit zu erhöhen.',
	'CHECK_DNSBL'					=> 'IP gegen Schwarze DNS-Liste prüfen',
	'CHECK_DNSBL_EXPLAIN'			=> 'Wenn aktiviert, wird die IP-Adresse des Benutzers bei der Registrierung und bei der Beitragserstellung gegen folgende DNSBL-Dienste geprüft: <a href="http://spamcop.net">spamcop.net</a> und <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Diese Prüfung kann, abhängig von der Serverkonfiguration, etwas Zeit in Anspruch nehmen. Wenn Verzögerungen oder zu viele falsche Ablehnungen beobachtet werden, sollte diese Prüfung deaktiviert werden.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	//TODO
	//>>>>>> OLD <<<<<<: Check e-mail domain for valid MX record
	//>>>>>>> NEW <<<<<<: Check email domain for valid MX record
	'EMAIL_CHECK_MX'				=> '#E-Mail-Domain auf gültigen MX-Eintrag prüfen',
	//TODO
	//>>>>>> OLD <<<<<<: If enabled, the e-mail domain provided on registration and profile changes is checked for a valid MX record.
	//>>>>>>> NEW <<<<<<: If enabled, the email domain provided on registration and profile changes is checked for a valid MX record.
	'EMAIL_CHECK_MX_EXPLAIN'		=> '#Wenn aktiviert, wird die Domain der E-Mail-Adresse bei der Registrierung und der Änderung des Profils auf einen gültigen MX-Eintrag geprüft.',
	'FORCE_PASS_CHANGE'				=> 'Passwortänderung erzwingen',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Verlangt von den Benutzern, ihr Passwort nach einer festgelegten Anzahl an Tagen zu erneuern. Um dieses Verhalten abzuschalten, stelle als Wert 0 ein.',
	'FORM_TIME_MAX'					=> 'Maximale Zeit zur Übermittlung eines Formulars',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Die Zeit, die ein Benutzer hat, um ein Formular abzusenden. Stelle als Wert -1 ein, um das Verhalten abzuschalten. Beachte, dass ein Formular unabhängig dieser Einstellung ungültig werden kann, wenn die Sitzung abläuft.',
	'FORM_SID_GUESTS'				=> 'Formulare an Gast-Sitzungen binden',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Wenn aktiviert, ist ein Formular bei Gästen nur für die aktuelle Sitzung gültig. Dies kann bei manchen Internet-Providern zu Problemen führen.',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var>-Kopfzeilen prüfen',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sitzungen werden nur fortgesetzt, wenn die übermittelte <var>X_FORWARDED_FOR</var>-Kopfzeile mit der der letzten Anfrage identisch ist. Die in <var>X_FORWARDED_FOR</var> angegebene Adresse wird ebenfalls auf Sperrung geprüft.',
	'IP_VALID'						=> 'Überprüfung der Sitzungs-IP',
	'IP_VALID_EXPLAIN'				=> 'Legt fest, welche Teile der IP eines Benutzers zur Validierung einer Sitzung herangezogen werden. <samp>Alle</samp> bedeutet, dass die komplette IP Adresse verglichen wird; <samp>A.B.C</samp> vergleicht die ersten drei Oktetts; <samp>A.B</samp> vergleicht die ersten zwei Oktetts; <samp>Keine</samp> deaktiviert die Prüfung. Bei IPv6-Adressen prüft <samp>A.B.C</samp> die ersten 4 Blöcke und <samp>A.B</samp> die ersten 3.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maximale Anzahl an Anmeldeversuchen pro IP-Adresse',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Anzahl erfolgloser Anmeldeversuche von einer IP-Adresse, nach der zusätzlich eine Anti-Spam-Bot-Aufgabe gelöst werden muss. Mit 0 wird die Prüfung erfolgloser Anmeldungen für IP-Adressen deaktiviert.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Ablaufzeit für erfolglose Anmeldeversuche von einer IP-Adresse',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Erfolglose Anmeldeversuche verfallen nach dieser Zeit.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Anmeldeversuche anhand <var>X_FORWARDED_FOR</var>-Header prüfen',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Anstatt einer Prüfung der IP-Adressen erfolgt eine Prüfung der <var>X_FORWARDED_FOR</var>-Werte im Header.<br /><em><strong>Warnung:</strong> Diese Funktion darf nur aktiviert werden, wenn sich dein Board hinter einem Proxy-Server befindet, der den <var>X_FORWARDED_FOR</var>-Header vertrauenswürdig festlegt.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximale Anzahl an Anmeldeversuchen pro Benutzername',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Anzahl erfolgloser Anmeldeversuche für ein Benutzerkonto, nach der zusätzlich eine Anti-Spam-Bot-Aufgabe gelöst werden muss. Mit 0 wird die Prüfung erfolgloser Anmeldungen für Benutzerkonten deaktiviert.',
	'NO_IP_VALIDATION'				=> 'Keine',
	'NO_REF_VALIDATION'				=> 'Keine',
	'PASSWORD_TYPE'					=> 'Passwort-Komplexität',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Legt die bei der Wahl oder Änderung eines Passworts erforderliche Komplexität fest. Nachfolgende Optionen beinhalten jeweils die darüberstehenden.',
	'PASS_TYPE_ALPHA'				=> 'Muss Buchstaben und Ziffern enthalten',
	'PASS_TYPE_ANY'					=> 'Keine Erfordernisse',
	'PASS_TYPE_CASE'				=> 'Muss Groß- und Kleinbuchstaben enthalten',
	'PASS_TYPE_SYMBOL'				=> 'Muss Sonderzeichen enthalten',
	'REF_HOST'						=> 'Prüfe nur den Hostnamen',
	'REF_PATH'						=> 'Prüfe auch den Skript-Pfad',
	'REFERER_VALID'					=> 'Referrer prüfen',
	'REFERER_VALID_EXPLAIN'			=> 'Wenn aktiviert, wird der Referrer von POST-Anfragen gegen die Einstellungen des Hostnamen/Skript-Pfads geprüft. Dies kann bei Boards zu Problemen führen, die mehrere Domains oder eine externe Anmeldung nutzen.',
	'TPL_ALLOW_PHP'					=> 'Erlaube PHP in Templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Wenn diese Option eingeschaltet ist, werden <code>PHP</code>- und <code>INCLUDEPHP</code>-Anweisungen in Templates erkannt und ausgeführt.',
));

// Email Settings
$lang = array_merge($lang, array(
	//TODO
	//>>>>>> OLD <<<<<<: This information is used when the board sends e-mails to your users. Please ensure the e-mail address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) e-mail service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.
	//>>>>>>> NEW <<<<<<: This information is used when the board sends emails to your users. Please ensure the email address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) email service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '#Diese Informationen werden benötigt, wenn das Board E-Mails an deine Benutzer sendet. Stelle bitte sicher, dass die von dir angegebene Adresse gültig ist; geblockte oder nicht zustellbare Nachrichten werden an diese Adresse geschickt. Falls dein Webhosting-Provider keinen PHP-basierten E-Mail Service anbietet, kannst du deine Nachrichten auch direkt über SMTP versenden. Dies erfordert die Angabe der Adresse eines geeigneten Servers (frage falls nötig deinen Provider). Falls der Server eine Authentifizierung erfordert (und nur, wenn dies der Fall ist), gib den Benutzernamen und das Passwort ein und wähle eine Authentifizierungsmethode aus.',

	//TODO
	//>>>>>> OLD <<<<<<: Return e-mail address
	//>>>>>>> NEW <<<<<<: Return email address
	'ADMIN_EMAIL'					=> '#Antwort-E-Mail-Adresse',
	//TODO
	//>>>>>> OLD <<<<<<: This will be used as the return address on all e-mails, the technical contact e-mail address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in e-mails.
	//>>>>>>> NEW <<<<<<: This will be used as the return address on all emails, the technical contact email address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in emails.
	'ADMIN_EMAIL_EXPLAIN'			=> '#Diese technische Kontakt-Adresse wird als Antwort-Adresse für alle E-Mails genommen. Sie wird in allen E-Mails als <samp>Rückleitungs</samp>- und <samp>Absender</samp>-Adresse verwendet.',
	//TODO
	//>>>>>> OLD <<<<<<: Users send e-mail via board
	//>>>>>>> NEW <<<<<<: Users send email via board
	'BOARD_EMAIL_FORM'				=> '#E-Mails über das Board versenden',
	//TODO
	//>>>>>> OLD <<<<<<: Instead of showing the users e-mail address users are able to send e-mails via the board.
	//>>>>>>> NEW <<<<<<: Instead of showing the users email address users are able to send emails via the board.
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '#Anstatt die E-Mail-Adresse der Benutzer anzuzeigen, können diese ihre E-Mails über das Board versenden.',
	//TODO
	//>>>>>> OLD <<<<<<: Hide e-mail addresses
	//>>>>>>> NEW <<<<<<: Hide email addresses
	'BOARD_HIDE_EMAILS'				=> '#E-Mail-Adressen verstecken',
	//TODO
	//>>>>>> OLD <<<<<<: This function keeps e-mail addresses completely private.
	//>>>>>>> NEW <<<<<<: This function keeps email addresses completely private.
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '#Diese Funktion hält E-Mail-Adressen komplett privat.',
	//TODO
	//>>>>>> OLD <<<<<<: Contact e-mail address
	//>>>>>>> NEW <<<<<<: Contact email address
	'CONTACT_EMAIL'					=> '#Kontakt-E-Mail-Adresse',
	//TODO
	//>>>>>> OLD <<<<<<: This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in e-mails.
	//>>>>>>> NEW <<<<<<: This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in emails.
	'CONTACT_EMAIL_EXPLAIN'			=> '#Diese Adresse wird angegeben, wann immer eine spezifische Kontaktmöglichkeit benötigt wird, z.&nbsp;B. bei Spam, Fehlermeldungen etc. Sie wird in allen E-Mails als <samp>Von</samp>- und <samp>Antwort</samp>-Adresse verwendet.',
	//TODO
	//>>>>>> OLD <<<<<<: E-mail function name
	//>>>>>>> NEW <<<<<<: Email function name
	'EMAIL_FUNCTION_NAME'			=> '#Name der E-Mail-Funktion',
	//TODO
	//>>>>>> OLD <<<<<<: The e-mail function used to send mails through PHP.
	//>>>>>>> NEW <<<<<<: The email function used to send mails through PHP.
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> '#Die PHP-Funktion, die genutzt wird, um E-Mails zu versenden.',
	//TODO
	//>>>>>> OLD <<<<<<: E-mail package size
	//>>>>>>> NEW <<<<<<: Email package size
	'EMAIL_PACKAGE_SIZE'			=> '#Größe von E-Mail-Paketen',
	//TODO
	//>>>>>> OLD <<<<<<: This is the number of maximum e-mails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification e-mails.
	//>>>>>>> NEW <<<<<<: This is the number of maximum emails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification emails.
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '#Dies ist die Anzahl der E-Mails, die maximal in einem Paket gesendet werden können. Diese Einstellung greift für die interne Nachrichten-Warteschlange; verwende 0, wenn du Probleme mit nicht versandten Benachrichtigungs-E-Mails hast.',
	//TODO
	//>>>>>> OLD <<<<<<: E-mail signature
	//>>>>>>> NEW <<<<<<: Email signature
	'EMAIL_SIG'						=> '#E-Mail-Signatur',
	//TODO
	//>>>>>> OLD <<<<<<: This text will be attached to all e-mails the board sends.
	//>>>>>>> NEW <<<<<<: This text will be attached to all emails the board sends.
	'EMAIL_SIG_EXPLAIN'				=> '#Dieser Text wird an alle E-Mails angehängt, die das Board versendet.',
	//TODO
	//>>>>>> OLD <<<<<<: Enable board-wide e-mails
	//>>>>>>> NEW <<<<<<: Enable board-wide emails
	'ENABLE_EMAIL'					=> '#Aktiviere E-Mail-Funktionalität',
	//TODO
	//>>>>>> OLD <<<<<<: If this is set to disabled no e-mails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will require no activation of new accounts.</em>
	//>>>>>>> NEW <<<<<<: If this is set to disabled no emails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will require no activation of new accounts.</em>
	'ENABLE_EMAIL_EXPLAIN'			=> '#Wenn dies deaktiviert ist, werden keinerlei E-Mails vom Board versendet. <em>Die Aktivierung von Benutzerkonten durch den Benutzer oder einen Administrator erfordert, dass diese Option aktiviert ist. Wenn derzeit die Aktivierung durch den Benutzer oder einen Administrator aktiviert ist, ist bei einer Deaktivierung dieser Option keine Aktivierung mehr erforderlich.</em>',
	'SMTP_AUTH_METHOD'				=> 'Authentifizierungsmethode für SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Nur benötigt, wenn ein Benutzername/Passwort eingegeben ist. Frage deinen Webhosting-Provider, falls du nicht sicher bist, welche Methode du wählen sollst.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-Passwort',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Gib nur ein Passwort ein, wenn dein SMTP-Server dies erfordert. <em><strong>WARNUNG:</strong> Dieses Passwort wird im Klartext in der Datenbank gespeichert und ist daher für jeden einsehbar, der Zugriff auf die Datenbank oder diese Konfigurationsseite hat.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-Server-Port',
	'SMTP_PORT_EXPLAIN'				=> 'Ändere diese Einstellung nur, wenn du weißt, dass dein SMTP-Server einen anderen Port nutzt.',
	'SMTP_SERVER'					=> 'SMTP-Server-Adresse',
	'SMTP_SETTINGS'					=> 'SMTP-Einstellungen',
	'SMTP_USERNAME'					=> 'SMTP-Benutzername',
	'SMTP_USERNAME_EXPLAIN'			=> 'Gib nur einen Benutzernamen ein, wenn dein SMTP-Server dies erfordert.',
	//TODO
	//>>>>>> OLD <<<<<<: Use SMTP server for e-mail
	//>>>>>>> NEW <<<<<<: Use SMTP server for email
	'USE_SMTP'						=> '#SMTP-Server für E-Mail nutzen',
	//TODO
	//>>>>>> OLD <<<<<<: Select “Yes” if you want or have to send e-mail via a named server instead of the local mail function.
	//>>>>>>> NEW <<<<<<: Select “Yes” if you want or have to send email via a named server instead of the local mail function.
	'USE_SMTP_EXPLAIN'				=> '#Wähle „Ja“ aus, wenn du E-Mails über einen SMTP-Server senden möchtest (oder musst), anstatt die PHP-eigene Mail-Funktion zu nutzen.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hier kannst du die Nutzung von <a href="http://de.wikipedia.org/wiki/Jabber">Jabber</a> für Instant Messages und Benachrichtigungen des Boards aktivieren und kontrollieren. Jabber ist ein OpenSource-Protokoll und daher für jeden verfügbar. Einige Jabber-Server nutzen Gateways oder Transport-Dienste, die es dir erlauben, Benutzer anderer Netzwerke zu kontaktieren. Nicht alle Server bieten alle Transport-Dienste an, und Änderungen an den Protokollen können Transport-Dienste am Funktionieren hindern. Stelle sicher, dass du die korrekten Daten eines bereits registrierten Jabber-Kontos eingibst — phpBB verwendet die Daten so, wie sie hier eingegeben sind.',

	'JAB_ENABLE'				=> 'Jabber aktivieren',
	'JAB_ENABLE_EXPLAIN'		=> 'Aktiviert die Nutzung von Jabber-Nachrichten und -Benachrichtigungen.',
	'JAB_GTALK_NOTE'			=> 'Beachte, dass GTalk nicht funktionieren wird, da die <samp>dns_get_record</samp>-Funktion nicht gefunden werden konnte. Diese Funktion ist in PHP 4 nicht verfügbar und nicht in Windows-Plattformen implementiert. Sie funktioniert derzeit nicht auf BSD-basierten Systemen inklusive Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-Paketgröße',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dies ist die Anzahl der Nachrichten, die in einem Paket gesendet werden. Um die Nachrichten sofort zu senden, stelle als Wert 0 ein.',
	'JAB_PASSWORD'				=> 'Jabber-Passwort',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>WARNUNG:</strong> Dieses Passwort wird im Klartext in der Datenbank gespeichert und ist daher für jeden einsehbar, der Zugriff auf die Datenbank oder diese Konfigurationsseite hat.</em>',
	'JAB_PORT'					=> 'Jabber-Port',
	'JAB_PORT_EXPLAIN'			=> 'Lass dieses Feld frei, es sei denn, du weißt, dass es nicht Port 5222 ist.',
	'JAB_SERVER'				=> 'Jabber-Server',
	'JAB_SERVER_EXPLAIN'		=> 'Siehe %sjabber.org%s für eine Liste an Servern.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-Einstellungen erfolgreich geändert.',
	'JAB_USE_SSL'				=> 'Mit SSL verbinden',
	'JAB_USE_SSL_EXPLAIN'		=> 'Wenn aktiviert, wird versucht, eine sichere Verbindung zu verwenden. Der Jabber-Port wird auf 5223 geändert, sofern Port 5222 angegeben ist.',
	'JAB_USERNAME'				=> 'Jabber-Benutzername oder JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Gib einen bereits registrierten Benutzernamen oder eine gültige JID an. Der Benutzername wird nicht auf Gültigkeit geprüft. Wenn du nur einen Benutzernamen angibst, wird die JID aus dem Benutzernamen und dem oben festgelegten Server ermittelt. Gebe ansonsten eine gültige JID wie <samp>user@jabber.org</samp> ein.',
));
