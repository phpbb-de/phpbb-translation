<?php
/**
*
* acp_styles [Deutsch — Du]
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
	'ACP_STYLES_EXPLAIN'	=> 'Hier kannst du die auf deinem Board verfügbaren Styles verwalten. Du kannst bestehende Styles ändern, löschen, deaktivieren, reaktivieren oder neue installieren. Du kannst mit der Vorschau-Funktion auch sehen, wie ein Style aussehen wird. Außerdem ist die Zahl der Benutzer angegeben, die ein Style verwenden. Bitte beachte, dass hier nicht berücksichtigt wird, ob der Style überschrieben wird.',

	'CANNOT_BE_INSTALLED'			=> 'Kann nicht installiert werden',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Bist du dir sicher, dass du den ausgewählten Style deinstallieren willst?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Du kannst den Standard-Style nicht deaktivieren.',
	'DELETE_FROM_FS'			=> 'Vom Dateisystem löschen',
	'DELETE_STYLE_FILES_FAILED'		=> 'Fehler beim Löschen der Dateien von Style „%s“.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Die Dateien von Style „%s“ wurden gelöscht.',
	'DETAILS'					=> 'Details',

	'INHERITING_FROM'			=> 'Geerbt von',
	'INSTALL_STYLE'				=> 'Style installieren',
	'INSTALL_STYLES'			=> 'Styles installieren',
	'INSTALL_STYLES_EXPLAIN'	=> 'Hier kannst du neue Styles installieren.<br />Wenn ein Style nicht in der untenstehenden Liste aufgeführt wird, prüfe, ob er nicht bereits schon installiert wurde. Wenn er noch nicht installiert wurde, prüfe, ob er richtig hochgeladen wurde.',
	'INVALID_STYLE_ID'			=> 'Ungültige Style-ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Keine Styles entsprachen der Abfrage.',
	'NO_UNINSTALLED_STYLE'		=> 'Keine nicht installierten Styles gefunden.',

	'PURGED_CACHE'				=> 'Der Cache wurde geleert.',

	'REQUIRES_STYLE'			=> 'Dieser Style erfordert, dass der Style „%s“ installiert ist.',

	'STYLE_ACTIVATE'			=> 'Aktivieren',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_DEACTIVATE'			=> 'Deaktivieren',
	'STYLE_DEFAULT'				=> 'Als Standard-Style festlegen',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Du musst den Style aktivieren, bevor du ihn zum Stanrd-Style machen kannst.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Ungültiger übergeordneter Style.',
	'STYLE_ERR_NAME_EXIST'		=> 'Ein Style mit diesem Namen existiert bereits.',
	'STYLE_ERR_STYLE_NAME'		=> 'Du musst einen Namen für diesen Style angeben.',
	'STYLE_INSTALLED'			=> 'Style „%s“ wurde installiert.',
	'STYLE_INSTALLED_RETURN_STYLES'	=> '<a href="%s">Hier klicken</a>, um zur Liste der installierten Styles zurückzukehren.', // TODO: siehe oben
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '<a href="%s">Hier klicken</a>, um mehr Styles zu installieren.', // TODO: siehe oben
	'STYLE_NAME'				=> 'Name des Styles',
	'STYLE_NOT_INSTALLED'		=> 'Style „%s“ wurde nicht installiert.',
	'STYLE_PATH'				=> 'Pfad des Styles',
	'STYLE_UNINSTALL'			=> 'Deinstallieren',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style „%s“ kann nicht deinstalliert werden, da untegeordnete Styles auf ihn aufbauen.',
	'STYLE_UNINSTALLED'			=> 'Style „%s“ wurde erfolgreich deinstalliert.',
	'STYLE_USED_BY'				=> 'Verwendet von (inklusive Spiders/Robots)',

	'UNINSTALL_DEFAULT'		=> 'Der Standard-Style kann nicht deinstalliert werden.',
));
