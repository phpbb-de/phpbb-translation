<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK'					=> 'VigLink',
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink-Einstellungen',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink ist ein externer Dienst, der von Benutzern Ihres Forums erstellte Links monetarisiert, ohne sich auf das Nutzungserlebnis auszuwirken. Wenn Besucher auf diese Links klicken und auf der Ziel-Website zum Beispiel Waren oder Dienstleistungen einkaufen, dann zahlen einige Händler VigLink eine Provision. Hiervon wird ein Anteil an das phpBB-Projekt weitergegeben. Indem Sie der Verwendung von VigLink und der Weitergabe der Provision an phpBB.com zustimmen, unterstützen Sie das Open-Source-Projekt und tragen zu seiner finanziellen Absicherung bei.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Sie können diese Einstellungen jederzeit in den VigLink-Einstellungen ändern.',
	'ACP_VIGLINK_ENABLE'			=> 'VigLink aktivieren',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktiviert die Verwendung des VigLink-Dienstes.',
	'ACP_VIGLINK_EARNINGS'			=> 'Beanspruchen Sie Ihre eigenen Erträge (optional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Sie können die durch Ihr Forum generierten Erträge selbst beanspruchen, indem Sie einen eigenen VigLink Account erstellen.',
	'ACP_VIGLINK_API_KEY_INVALID'	=> '„%s“ ist kein gültiger VigLink Convert API Schlüssel.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Die VigLink Dienste wurden von phpBB deaktiviert.',
	'ACP_VIGLINK_CLAIM'				=> 'Beanspruchen Sie Ihre Erträge',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Sie können die in Ihrem Forum aus den von VigLink monetarisierten Links generierten Erträge beanspruchen anstatt sie dem phpBB Projekt zu überlassen. Um Ihre Accounteinstellungen zu verwalten erstellen Sie Ihren eigenen „VigLink Convert“ Account, indem Sie auf „Convert Account“ klicken',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert Account',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Der VigLink Convert Account Link konnte nicht abgerufen werden.'
));
