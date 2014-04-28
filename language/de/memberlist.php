<?php
/**
*
* memberlist [Deutsch — Du]
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Am meisten aktiv in Forum',
	'ACTIVE_IN_TOPIC'		=> 'Am meisten aktiv in Thema',
	'ADD_FOE'				=> 'Zu den ignorierten Mitgliedern hinzufügen',
	'ADD_FRIEND'			=> 'Zu den Freunden hinzufügen',
	'AFTER'					=> 'Nach dem',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Vor dem',

	//TODO
	//>>>>>> OLD <<<<<<: Send a copy of this e-mail to yourself.
	//>>>>>>> NEW <<<<<<: Send a copy of this email to yourself.
	'CC_EMAIL'				=> '#Eine Kopie dieser E-Mail an mich senden.',
	'CONTACT_USER'			=> 'Kontaktdaten',

	'DEST_LANG'				=> 'Sprache',
	'DEST_LANG_EXPLAIN'		=> 'Wähle — sofern verfügbar — eine passende Sprache aus, in der der Empfänger die Nachricht erhalten soll.',

	//TODO
	//>>>>>> OLD <<<<<<: This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your e-mail address.
	//>>>>>>> NEW <<<<<<: This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.
	'EMAIL_BODY_EXPLAIN'	=> '#Diese Nachricht wird als reiner Text verschickt, verwende daher kein HTML oder BBCode. Als Antwort-Adresse für die E-Mail wird deine E-Mail-Adresse angegeben.',
	//TODO
	//>>>>>> OLD <<<<<<: Sorry but all e-mail related functions have been disabled.
	//>>>>>>> NEW <<<<<<: Sorry but all email related functions have been disabled.
	'EMAIL_DISABLED'		=> '#Leider wurden alle E-Mail-Funktionen deaktiviert.',
	//TODO
	//>>>>>> OLD <<<<<<: The e-mail has been sent.
	//>>>>>>> NEW <<<<<<: The email has been sent.
	'EMAIL_SENT'			=> '#Die E-Mail wurde gesendet.',
	//TODO
	//>>>>>> OLD <<<<<<: This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your e-mail address.
	//>>>>>>> NEW <<<<<<: This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.
	'EMAIL_TOPIC_EXPLAIN'	=> '#Diese Nachricht wird als reiner Text verschickt, verwende daher kein HTML oder BBCode. Hinweise zu dem Thema werden der Nachricht automatisch hinzugefügt. Als Antwort-Adresse für die E-Mail wird deine E-Mail-Adresse angegeben.',
	//TODO
	//>>>>>> OLD <<<<<<: You must provide a valid e-mail address for the recipient.
	//>>>>>>> NEW <<<<<<: You must provide a valid email address for the recipient.
	'EMPTY_ADDRESS_EMAIL'	=> '#Du musst eine gültige E-Mail-Adresse für den Empfänger angeben.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du musst eine Nachricht angeben, die versendet werden soll.',
	'EMPTY_MESSAGE_IM'		=> 'Du musst eine Nachricht angeben, die versendet werden soll.',
	'EMPTY_NAME_EMAIL'		=> 'Du musst den Namen des Empfängers angeben.',
	//TODO
	//>>>>>> OLD <<<<<<: You must specify a subject for the e-mail.
	//>>>>>>> NEW <<<<<<: You must specify a subject for the email.
	'EMPTY_SUBJECT_EMAIL'	=> '#Du musst einen Betreff für die E-Mail angeben.',
	'EQUAL_TO'				=> 'Entspricht',

	'FIND_USERNAME_EXPLAIN'	=> 'Benutze dieses Formular, um nach Mitgliedern zu suchen. Es müssen nicht alle Felder ausgefüllt werden. Verwende ein * als Platzhalter für teilweise Übereinstimmungen. Verwende das Format <kbd>JJJJ-MM-TT</kbd> (z.&nbsp;B. <samp>2002-01-01</samp>), um Datumswerte anzugeben. Benutze die Kontrollkästchen, um mehrere Benutzer auszuwählen (mehrere Benutzer werden abhängig vom Formular akzeptiert) und wähle dann „Markierte auswählen“.',
	//TODO
	//>>>>>> OLD <<<<<<: You cannot send another e-mail at this time. Please try again later.
	//>>>>>>> NEW <<<<<<: You cannot send another email at this time. Please try again later.
	'FLOOD_EMAIL_LIMIT'		=> '#Du kannst derzeit keine weitere E-Mail versenden. Bitte versuche es später erneut.',

	'GROUP_LEADER'			=> 'Gruppenleiter',

	'HIDE_MEMBER_SEARCH'	=> 'Das Suchformular ausblenden',

	'IM_ADD_CONTACT'		=> 'Kontakt hinzufügen',
	'IM_DOWNLOAD_APP'		=> 'Anwendung herunterladen',
	'IM_JABBER'				=> 'Bitte beachte, dass die Benutzer den Empfang unverlangter Nachrichten deaktiviert haben können.',
	'IM_JABBER_SUBJECT'		=> 'Dies ist eine automatische Nachricht, bitte beantworte sie nicht. Nachricht von Benutzer %1$s auf %2$s.',
	'IM_MESSAGE'			=> 'Deine Nachricht',
	'IM_NAME'				=> 'Dein Name',
	'IM_NO_DATA'			=> 'Es gibt keine passenden Kontaktdaten für diesen Benutzer.',
	'IM_NO_JABBER'			=> 'Direkter Kontakt zu Jabber-Benutzern wird auf diesem Board nicht unterstützt. Du benötigst einen installierten Jabber-Client auf deinem Rechner, um den Benutzer kontaktieren zu können.',
	'IM_RECIPIENT'			=> 'Empfänger',
	'IM_SEND'				=> 'Nachricht senden',
	'IM_SEND_MESSAGE'		=> 'Nachricht senden',
	'IM_SENT_JABBER'		=> 'Deine Nachricht an %1$s wurde erfolgreich gesendet.',
	'IM_USER'				=> 'Eine Instant Message senden',

	'LAST_ACTIVE'				=> 'Letzte Aktivität',
	'LESS_THAN'					=> 'Weniger als',
	'LIST_USERS'				=> array(
		1	=> '%d Mitglied',
		2	=> '%d Mitglieder',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Du musst registriert und angemeldet sein, um die Liste der Team-Mitglieder anzuschauen.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Du musst registriert und angemeldet sein, um auf die Mitgliederliste zuzugreifen.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Du musst registriert und angemeldet sein, um nach Mitgliedern zu suchen.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Du musst registriert und angemeldet sein, um Profile anzuschauen.',

	'MORE_THAN'				=> 'Mehr als',

	//TODO
	//>>>>>> OLD <<<<<<: You are not permitted to send e-mail to this user.
	//>>>>>>> NEW <<<<<<: You are not permitted to send email to this user.
	'NO_EMAIL'				=> '#Du bist nicht berechtigt, eine E-Mail an diesen Benutzer zu senden.',
	'NO_VIEW_USERS'			=> 'Du bist nicht berechtigt, die Mitgliederliste oder Profile anzusehen.',

	'ORDER'					=> 'Sortierung',
	'OTHER'					=> 'Anderes Zeichen',

	'POST_IP'				=> 'Erstellt von IP/Domain',

	'REAL_NAME'				=> 'Name des Empfängers',
	'RECIPIENT'				=> 'Empfänger',
	'REMOVE_FOE'			=> 'Aus der Liste der ignorierten Mitglieder entfernen',
	'REMOVE_FRIEND'			=> 'Aus der Liste der Freunde entfernen',

	'SELECT_MARKED'			=> 'Markierte auswählen',
	'SELECT_SORT_METHOD'	=> 'Sortierung auswählen',
	'SEND_ICQ_MESSAGE'		=> 'ICQ-Nachricht senden',
	'SEND_IM'				=> 'Instant Message senden',
	'SEND_JABBER_MESSAGE'	=> 'Jabber-Nachricht senden',
	'SEND_MESSAGE'			=> 'Nachricht',
	'SEND_YIM_MESSAGE'		=> 'YIM-Nachricht senden',
	//TODO
	//>>>>>> OLD <<<<<<: E-mail
	//>>>>>>> NEW <<<<<<: Email
	'SORT_EMAIL'			=> '#E-Mail',
	'SORT_LAST_ACTIVE'		=> 'Letzte Aktivität',
	'SORT_POST_COUNT'		=> 'Beitragszahl',

	'USERNAME_BEGINS_WITH'	=> 'Benutzername fängt an mit',
	'USER_ADMIN'			=> 'Benutzer administrieren',
	'USER_BAN'				=> 'Sperren',
	'USER_FORUM'			=> 'Benutzer-Statistik',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Bislang wurde keine Erinnerung versendet',
		1		=> '%1$d Erinnerung versendet<br />» %2$s',
		2		=> '%1$d Erinnerungen versendet<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Anwesenheit im Board',
	'USERS_PER_PAGE'		=> 'Mitglieder pro Seite',

	'VIEWING_PROFILE'		=> 'Profil von %s',
));
