<?php
/**
*
* acp_email [Deutsch — Du]
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

// Email settings
$lang = array_merge($lang, array(
	//TODO
	//>>>>>> OLD <<<<<<: Here you can e-mail a message to either all of your users or all users of a specific group <strong>having the option to receive mass e-mails enabled</strong>. To achieve this an e-mail will be sent out to the administrative e-mail address supplied, with a blind carbon copy sent to all recipients. The default setting is to only include 50 recipients in such an e-mail, for more recipients more e-mails will be sent. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed.
	//>>>>>>> NEW <<<<<<: Here you can email a message to either all of your users or all users of a specific group <strong>having the option to receive mass emails enabled</strong>. To achieve this an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. The default setting is to only include 50 recipients in such an email, for more recipients more emails will be sent. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed.
	'ACP_MASS_EMAIL_EXPLAIN'		=> '#Hier kannst du eine Nachricht per E-Mail an alle Mitglieder des Boards oder einer spezifischen Gruppe senden, <strong>sofern diese den Erhalt von Informationen per E-Mail zugelassen haben</strong>. Dazu wird eine E-Mail an die festgelegte administrative E-Mail-Adresse verschickt und alle Empfänger als Blindkopie (BCC) hinzugefügt. Standardmäßig wird pro 50 Empfänger eine solche E-Mail versandt; bei mehreren Empfängern werden mehrere E-Mails versandt. Bitte habe nach dem Absenden Geduld, wenn du eine Nachricht an eine große Gruppe schickst und breche den Vorgang nicht ab. Bei einer Massen-E-Mail ist es normal, dass ihr Versand länger dauert. Du wirst benachrichtigt, sobald der Vorgang abgeschlossen wurde.',
	'ALL_USERS'						=> 'Alle Mitglieder',

	'COMPOSE'				=> 'Entwerfen',

	//TODO
	//>>>>>> OLD <<<<<<: There were one or more errors while sending the e-mail. Please check the %sError log%s for detailed error messages.
	//>>>>>>> NEW <<<<<<: There were one or more errors while sending the email. Please check the %sError log%s for detailed error messages.
	'EMAIL_SEND_ERROR'		=> '#Es sind ein oder mehrere Fehler beim Versand der E-Mail aufgetreten. Bitte prüfe das %sFehler-Protokoll%s für detailliertere Fehlermeldungen.',
	'EMAIL_SENT'			=> 'Die Nachricht wurde versendet.',
	'EMAIL_SENT_QUEUE'		=> 'Die Nachricht wurde in die Warteschlange eingereiht.',

	'LOG_SESSION'			=> 'E-Mail-Sitzung im Fehler-Protokoll protokollieren',

	'SEND_IMMEDIATELY'		=> 'Sofort senden',
	'SEND_TO_GROUP'			=> 'An Gruppe senden',
	'SEND_TO_USERS'			=> 'An Benutzer senden',
	'SEND_TO_USERS_EXPLAIN'	=> 'Hier eingegebene Namen überschreiben jede oben ausgewählte Gruppe. Gib jeden Benutzer in einer neuen Zeile an.',

	'MAIL_BANNED'			=> 'Gesperrte Benutzer einschließen',
	//TODO
	//>>>>>> OLD <<<<<<: When sending a mass e-mail to a group you can select here whether banned users will also receive the e-mail.
	//>>>>>>> NEW <<<<<<: When sending a mass email to a group you can select here whether banned users will also receive the email.
	'MAIL_BANNED_EXPLAIN'	=> '#Wenn du eine Nachricht an eine Gruppe sendest, kannst du hier auswählen, ob gesperrte Benutzer auch eine E-Mail erhalten sollen.',
	'MAIL_HIGH_PRIORITY'	=> 'Hoch',
	'MAIL_LOW_PRIORITY'		=> 'Niedrig',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Priorität der E-Mail',
	'MASS_MESSAGE'			=> 'Deine Nachricht',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bitte beachte, dass du nur reinen Text verwenden kannst. Alle Auszeichnungen werden vor dem Versand entfernt.',

	'NO_EMAIL_MESSAGE'		=> 'Du musst eine Nachricht angeben.',
	'NO_EMAIL_SUBJECT'		=> 'Du musst einen Betreff für die Nachricht angeben.',
));
