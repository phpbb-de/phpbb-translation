<?php
/**
*
* app [Deutsch — Du]
*
* @package language
* @copyright (c) 2012 phpBB Group; 2014 phpBB.de
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Fehlender Wert für Argument #%1$s: <strong>%3$s</strong> in Klasse <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Es wurde kein Controller definiert.', // TODO: Übersetzung Controller
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Für den Controller wurde keine Methode festgelegt.', // TODO: Übersetzung Controller
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Der Service für den Controller "<strong>%s</strong>" ist nicht in ./config/services.yml definiert.', // TODO: Übersetzung Controller
));
