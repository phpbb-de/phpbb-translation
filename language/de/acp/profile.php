<?php
/**
*
* acp_profile [Deutsch — Du]
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Benutzerdefiniertes Profilfeld erfolgreich hinzugefügt.',
	'ALPHA_ONLY'			=> 'Nur alphanumerische Zeichen',
	'ALPHA_SPACERS'			=> 'Nur alphanumerische, Leer- und -+_[]-Zeichen',
	'ALPHA_UNDERSCORE'		=> '#Alphanumeric and underscores',
	'ALWAYS_TODAY'			=> 'Immer das aktuelle Datum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Gib hier die Optionen an.',
	'BOOL_TYPE_EXPLAIN'		=> 'Hier kannst du den Typ definieren: entweder ein Kontrollkästchen oder als Optionsfelder. Ein Kontrollkästchen wird nur angezeigt, wenn es für einen Benutzer aktiviert ist. In diesem Fall wird die <strong>zweite</strong> Option angezeigt.',

	'CHANGED_PROFILE_FIELD'		=> 'Profilfeld erfolgreich geändert.',
	'CHARS_ANY'					=> 'Alle Zeichen',
	'CHECKBOX'					=> 'Kontrollkästchen',
	'COLUMNS'					=> 'Zeichen',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standardwert',
	'CP_LANG_EXPLAIN'			=> 'Feld-Beschreibung',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Die dem Benutzer angezeigte Beschreibung für das Feld.',
	'CP_LANG_NAME'				=> 'Dem Benutzer angezeigter Name/Titel',
	'CP_LANG_OPTIONS'			=> 'Optionen',
	'CREATE_NEW_FIELD'			=> 'Neues Feld anlegen',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Mindestens ein benutzerdefiniertes Profilfeld wurde nicht übersetzt. Bitte gib die erforderlichen Informationen an, indem du auf den „Übersetzen“-Link klickst.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standard-Sprache [ %s ]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Die Spracheinträge für die Standard-Sprache sind bei diesem Profilfeld nicht angegeben.',
	'DEFAULT_VALUE'					=> 'Standardwert',
	'DELETE_PROFILE_FIELD'			=> 'Profilfeld entfernen',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Bist du dir sicher, dass du das Profilfeld entfernen möchtest?',
	'DISPLAY_AT_PROFILE'			=> 'Im persönlichen Bereich des Benutzers anzeigen',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Der Benutzer kann das Profil in seinem persönlichen Bereich ändern.',
	'DISPLAY_AT_REGISTER'			=> 'Bei der Registrierung anzeigen',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Wenn diese Option gesetzt ist, wird das Feld bei der Registrierung angezeigt.',
	'DISPLAY_ON_MEMBERLIST'			=> '#Display on memberlist screen',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> '#If this option is enabled, the field will be displayed in the user rows on the memberlist screen.',
	'DISPLAY_ON_PM'					=> '#Display on view pm screen',
	'DISPLAY_ON_PM_EXPLAIN'			=> '#If this option is enabled, the field will be displayed in the mini-profile on the pm screen.',
	'DISPLAY_ON_VT'					=> 'Bei der Themen-Ansicht anzeigen',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Wenn diese Option gesetzt ist, wird das Feld im Kurzprofil neben den Beiträgen angezeigt.',
	'DISPLAY_PROFILE_FIELD'			=> 'Profilfeld öffentlich anzeigen',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Das Profilfeld wird an allen Stellen angezeigt, die in den Einstellungen zur Serverlast aktiviert sind. Wird diese Option auf „Nein“ gestellt, so wird das Feld im Beitrag, im Profil und in der Mitgliederliste ausgeblendet.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Gib hier die Optionen an; jede Option in einer neuen Zeile.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Bitte beachte, dass du den Text der Optionen ändern oder neue Optionen an das Ende hinzufügen kannst. Es wird nicht empfohlen, neue Optionen zwischen bestehenden hinzuzufügen, weil dies zu falsch zugeordneten Optionen bei den Benutzern führen kann. Dies kann auch passieren, wenn du Optionen löscht, die nicht am Ende stehen. Wenn Optionen vom Ende entfernt werden, wird den Benutzern, die diese Optionen derzeit ausgewählt haben, die Standard-Option zugewiesen.',
	'EMPTY_FIELD_IDENT'				=> 'Die	Feld-Kennung ist nicht angegeben.',
	'EMPTY_USER_FIELD_NAME'			=> 'Bitte fülle den dem Benutzer angezeigten Namen/Titel aus.',
	'ENTRIES'						=> 'Optionen',
	'EVERYTHING_OK'					=> 'Alles in Ordnung',

	'FIELD_BOOL'				=> 'Boolescher Wert (Ja/Nein)',
	'FIELD_CONTACT_DESC'		=> '#Contact description',
	'FIELD_CONTACT_URL'			=> '#Contact link',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Feld-Beschreibung',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Die dem Benutzer angezeigte Beschreibung für das Feld.',
	'FIELD_DROPDOWN'			=> 'Auswahlfeld',
	'FIELD_IDENT'				=> 'Feld-Kennung',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Die ausgewählte Feld-Kennung existiert bereits. Bitte gib eine andere an.',
	'FIELD_IDENT_EXPLAIN'		=> 'Die Feld-Kennung dient dir zur Identifizierung des Feldes. Sie wird den Benutzern nicht angezeigt.',
	'FIELD_INT'					=> 'Zahlen',
	'FIELD_IS_CONTACT'			=> '#Display field as a contact field',
	'FIELD_IS_CONTACT_EXPLAIN'	=> '#Contact fields are displayed with in the contact section of the user profile and are displayed differently in the mini profile next to posts and private messages.',
	'FIELD_LENGTH'				=> 'Größe des Eingabefelds',
	'FIELD_NOT_FOUND'			=> 'Profilfeld nicht gefunden.',
	'FIELD_STRING'				=> 'Einzeiliges Textfeld',
	'FIELD_TEXT'				=> 'Mehrzeiliges Textfeld',
	'FIELD_TYPE'				=> 'Art des Feldes',
	'FIELD_TYPE_EXPLAIN'		=> 'Du kannst die Art des Feldes später nicht mehr ändern.',
	'FIELD_URL'					=> '#URL (Link)',
	'FIELD_VALIDATION'			=> 'Zulässige Werte',
	'FIRST_OPTION'				=> 'Erste Option',

	'HIDE_PROFILE_FIELD'			=> 'Profilfeld verstecken',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Versteckt das Feld vor allen Benutzern außer dem Benutzer selbst, Administratoren und Moderatoren, die dieses Feld weiterhin sehen können. Wenn die Anzeige des Felds im persönlichen Bereich deaktiviert ist, kann der Benutzer das Feld weder sehen noch ändern. Es kann dann nur von einem Administrator geändert werden.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Der Feld-Kennung darf nur aus Kleinbuchstaben von a bis z und _ bestehen.',
	'INVALID_FIELD_IDENT_LEN'	=> 'Die Feld-Kennung kann maximal 17 Zeichen lang sein.',
	'ISO_LANGUAGE'				=> 'Sprache [ %s ]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Sprachspezifische Optionen [ <strong>%s</strong> ]',

	'MAX_FIELD_CHARS'		=> 'Maximal zulässige Zeichenanzahl',
	'MAX_FIELD_NUMBER'		=> 'Höchste zulässige Zahl',
	'MIN_FIELD_CHARS'		=> 'Mindestens erforderliche Zeichenanzahl',
	'MIN_FIELD_NUMBER'		=> 'Niedrigste zulässige Zahl',

	'NO_FIELD_ENTRIES'			=> 'Es wurden keine Optionen angegeben.',
	'NO_FIELD_ID'				=> 'Keine ID des Feldes angegeben.',
	'NO_FIELD_TYPE'				=> 'Keine Feldart angegeben.',
	'NO_VALUE_OPTION'			=> 'Beschreibung für nicht ausgewählten Wert',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Nicht ausgewählter Wert. Wenn das Feld erforderlich ist, erhält der Benutzer eine Fehlermeldung, wenn er die hier ausgewählte Option auswählt.',
	'NUMBERS_ONLY'				=> 'Nur Ziffern (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Grundeinstellungen',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfeld erfolgreich aktiviert.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfeld erfolgreich deaktiviert.',
	'PROFILE_LANG_OPTIONS'		=> 'Sprachspezifische Optionen',
	'PROFILE_TYPE_OPTIONS'		=> 'Spezifische Optionen der Feldart',

	'RADIO_BUTTONS'				=> 'Optionsfelder',
	'REMOVED_PROFILE_FIELD'		=> 'Profilfeld erfolgreich gelöscht.',
	'REQUIRED_FIELD'			=> 'Erforderliches Feld',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Zwingt den Benutzer oder den Administrator, dieses Feld auszufüllen oder eine Option auszuwählen. Wenn das Feld bei der Registrierung nicht angezeigt wird, so muss es nur ausgefüllt werden, wenn der Benutzer sein Profil ändert.',
	'ROWS'						=> 'Zeilen',

	'SAVE'							=> 'Speichern',
	'SECOND_OPTION'					=> 'Zweite Option',
	'SHOW_NOVALUE_FIELD'			=> 'Feld anzeigen, wenn kein Wert ausgewählt wurde',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Legt fest, ob das Profilfeld angezeigt werden soll, wenn bei einem optionalen Feld kein Wert ausgewählt wurde oder der Wert eines erforderlichen Felds noch nicht festgelegt wurde.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Hier kannst du die Grundeinstellungen für dein neues Profilfeld vornehmen. Diese Angaben werden im zweiten Schritt benötigt, wo du weitere Einstellungen vornehmen und das Profilfeld weiter anpassen kannst.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Hier kannst du die Grundeinstellungen für das Profilfeld ändern. Diese Angaben werden im zweiten Schritt übernommen.',
	'STEP_1_TITLE_CREATE'			=> 'Profilfeld hinzufügen',
	'STEP_1_TITLE_EDIT'				=> 'Profilfeld ändern',
	'STEP_2_EXPLAIN_CREATE'			=> 'Hier kannst du einige Einstellungen für die Feldart festlegen.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Hier kannst du einige Einstellungen für die Feldart vornehmen.<br /><strong>Bitte beachte, dass Änderungen keine Auswirkungen auf die bereits existierenden Angaben deiner Benutzer haben.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Spezifische Optionen der Feldart',
	'STEP_2_TITLE_EDIT'				=> 'Spezifische Optionen der Feldart',
	'STEP_3_EXPLAIN_CREATE'			=> 'Da du mehr als ein Sprachpaket installiert hast, musst du auch Angaben für die anderen Sprachen machen. Du kannst diese Angaben auch später ergänzen, das Feld arbeit derweil mit der Standardsprache.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Da du mehr als ein Sprachpaket installiert hast, kannst du hier die Angaben für die anderen Sprachen ändern oder ergänzen. Wenn keine Angaben gemacht werden, arbeitet das Feld mit der Standardsprache.',
	'STEP_3_TITLE_CREATE'			=> 'Verbleibende sprachspezifische Optionen',
	'STEP_3_TITLE_EDIT'				=> 'Sprachspezifische Optionen',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Gib einen Text an, der als Standardwert vorgegeben wird. Lass das Feld leer, wenn standardmäßig ein leeres Feld angezeigt werden soll.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Gib einen Text an, der als Standardwert vorgegeben wird. Lass das Feld leer, wenn standardmäßig ein leeres Feld angezeigt werden soll.',
	'TRANSLATE'						=> 'Übersetzen',

	'USER_FIELD_NAME'	=> 'Dem Benutzer angezeigter Name/Titel',

	'VISIBILITY_OPTION'				=> 'Sichtbarkeit',
));
