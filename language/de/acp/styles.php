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
	//TODO
	//>>>>>> OLD <<<<<<: Here you can manage the available styles on your board. A style consists of a template, theme and imageset. You may alter existing styles, delete, deactivate, reactivate, create or import new ones. You can also see what a style will look like using the preview function. The current default style is noted by the presence of an asterisk (*). Also listed is the total user count for each style, note that overriding user styles will not be reflected here.
	//>>>>>>> NEW <<<<<<: Here you can manage the available styles on your board. You may alter existing styles, delete, deactivate, reactivate, install new ones. You can also see what a style will look like using the preview function. Also listed is the total user count for each style, note that overriding user styles will not be reflected here.
	'ACP_STYLES_EXPLAIN'	=> '#Hier kannst du die auf deinem Board verfügbaren Styles verwalten. Ein Style besteht aus einem Template, einem Theme und einer Grafiksammlung. Du kannst bestehende Styles ändern, löschen, deaktivieren, reaktivieren oder neue erstellen oder importieren. Du kannst mit der Vorschau-Funktion auch sehen, wie ein Style aussehen wird. Der derzeit aktive Standard-Style ist durch einen Stern (*) gekennzeichnet. Außerdem ist die Zahl der Benutzer angegeben, die ein Style verwenden. Bitte beachte, dass hier nicht berücksichtigt wird, ob der Style überschrieben wird.',
	'ADD_TEMPLATE'			=> 'Template erstellen',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Hier kannst du ein neues Template erstellen. Abhängig von der Serverkonfiguration und den Dateirechten können dir zusätzliche Funktionen zur Verfügung stehen. Du kannst z.&nbsp;B. die Template-Sammlung auf Grundlage einer anderen aufbauen. Du kannst eventuell auch ein Template-Archiv hochladen oder (vom store-Verzeichnis) importieren. Wenn du ein Archiv hochlädst oder importierst, kann der Name des Templates auf Wunsch auch aus dem Archiv übernommen werden (lass dazu den Namen leer).',
	'ARCHIVE_FORMAT'		=> 'Dateiarchiv-Typ',
	'AUTOMATIC_EXPLAIN'		=> 'Lass das Feld leer, um eine automatische Erkennung zu versuchen.',

	'BACKGROUND'			=> 'Hintergrund',
	'BACKGROUND_COLOUR'		=> 'Hintergrund-Farbe',
	'BACKGROUND_IMAGE'		=> 'Hintergrund-Grafik',
	'BACKGROUND_REPEAT'		=> 'Wiederholungs-Effekt',
	'BOLD'					=> 'Fett',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Gecached',
	'CACHE_FILENAME'				=> 'Template-Datei',
	'CACHE_FILESIZE'				=> 'Dateigröße',
	'CACHE_MODIFIED'				=> 'Modifiziert',
	'CANNOT_BE_INSTALLED'			=> '#Cannot be installed',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Bist du dir sicher, dass du alle gecachten Versionen deiner Template-Sammlung löschen möchtest?',
	'CONFIRM_DELETE_STYLES'			=> '#Are you sure you wish to delete selected styles?',
	'CONFIRM_UNINSTALL_STYLES'		=> '#Are you sure you wish to uninstall selected styles?',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_STYLE'					=> 'Neuen Style erstellen',
	'CREATE_TEMPLATE'				=> 'Neue Template-Sammlung erstellen',
	'CREATE_THEME'					=> 'Neues Theme erstellen',
	'CURRENT_IMAGE'					=> 'Aktuell verwendete Grafik',

	'DEACTIVATE_DEFAULT'		=> 'Du kannst den Standard-Style nicht deaktivieren.',
	'DELETE_FROM_FS'			=> 'Vom Dateisystem löschen',
	'DELETE_STYLE'				=> 'Style löschen',
	'DELETE_STYLE_EXPLAIN'		=> 'Hier kannst du das ausgewählte Style löschen. Sei vorsichtig beim Löschen von Styles, es gibt keine Rückgängig-Funktion.',
	'DELETE_STYLE_FILES_FAILED'		=> '#Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> '#Files for style "%s" have been deleted.',
	'DELETE_TEMPLATE'			=> 'Template löschen',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Hier kannst du die ausgewählte Template-Sammlung aus der Datenbank entfernen. Beachte, dass es keine Rückgängig-Funktion gibt. Du solltest daher vorher die Sammlung für zukünftige Zwecke exportieren.',
	'DETAILS'					=> 'Details',
	'DIMENSIONS_EXPLAIN'		=> 'Wird hier „ja“ ausgewählt, so wird die Höhe und die Breite der Bilder mit abgespeichert.',


	'EDIT_DETAILS_STYLE'				=> 'Style ändern',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Mit diesem Formular kannst du einen bestehenden Style ändern. Du kannst die Kombination von Template und Theme ändern, die den Style definiert. Du kannst den Style des Weiteren zum Standard für das Board machen.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Template-Details ändern',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Hier kannst du bestimmte Template-Details wie z.&nbsp;B. seinen Namen ändern.',
	'EDIT_DETAILS_THEME'				=> 'Theme-Details ändern',
	//TODO
	//>>>>>> OLD <<<<<<: Here you can edit certain theme details such as its name. You may also have the option to switch storage of the stylesheet from the filesystem to the database and vice versa. This option depends on your PHP configuration and whether your stylesheet can be written to by the web server.
	//>>>>>>> NEW <<<<<<: Here you can edit certain theme details such as its name.
	'EDIT_DETAILS_THEME_EXPLAIN'		=> '#Hier kannst du bestimmte Details eines Themes wie z.&nbsp;B. seinen Namen ändern. Du hast die Möglichkeit, den Ablageort des Stylesheets vom Dateisystem zur Datenbank oder andersherum zu ändern, sofern PHP-Konfiguration und Webserver es erlauben, in die Stylesheet-Datei zu schreiben.',
	'EDIT_TEMPLATE'						=> 'Template ändern',
	//TODO
	//>>>>>> OLD <<<<<<: Here you can edit your template set directly. Please remember that these edits are permanent and cannot be undone once submitted. If PHP can write to the template files in your styles directory any changes here will be written directly to those files. If PHP cannot write to those files they will be copied into the database and all changes will only be reflected there. Please take care when editing your template set, remember to close all replacement variable terms {XXXX} and conditional statements.
	//>>>>>>> NEW <<<<<<: Here you can edit your template set directly. Please remember that these edits are permanent and cannot be undone once submitted. Please take care when editing your template set, remember to close all replacement variable terms {XXXX} and conditional statements.
	'EDIT_TEMPLATE_EXPLAIN'				=> '#Hier kannst du deine Template-Sammlung direkt ändern. Bitte beachte, dass diese Änderungen dauerhaft sind und nicht rückgängig gemacht werden können, sobald sie abgesandt wurden. Wenn PHP direkt in die Template-Dateien in deinem styles-Verzeichnis schreiben kann, werden die Änderungen direkt in diese Dateien geschrieben. Wenn PHP nicht in diese Dateien schreiben kann, werden die Änderungen nur in der Datenbank gespeichert. Bitte sei bei der Änderung der Template-Sammlung vorsichtig. Stelle sicher, dass alle Variablen ({XXXX}) und alle bedingten Anweisungen richtig geschlossen werden.',
	'EDIT_THEME'						=> 'Theme ändern',
	'EDIT_THEME_EXPLAIN'				=> 'Hier kannst du das ausgewählte Theme anpassen und Farben, Grafiken usw. ändern.',
	'EDITOR_DISABLED'					=> 'Der Template-Editor ist deaktiviert.',
	'EXPORT'							=> 'Exportieren',

	'FOREGROUND'			=> 'Vordergrund',
	'FONT_COLOUR'			=> 'Schriftfarbe',
	'FONT_FACE'				=> 'Schriftart',
	'FONT_FACE_EXPLAIN'		=> 'Du kannst mehrere Schriftarten durch Komma getrennt angeben. Wenn ein Benutzer die erste Schriftart nicht installiert hat, wird die erste der Liste verwendet, die installiert ist.',
	'FONT_SIZE'				=> 'Schriftgröße',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Verstecke CSS-Quelltext',

	'IMAGE_WIDTH'				=> 'Grafik-Breite',
	'IMAGE_HEIGHT'				=> 'Grafik-Höhe',
	'IMAGE'						=> 'Grafik',
	'IMAGE_NAME'				=> 'Name der Grafik',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Wert',

	'ITALIC'					=> 'Kursiv',

	'IMG_CAT_BUTTONS'		=> 'Übersetzte Schaltflächen',
	'IMG_CAT_CUSTOM'		=> 'Benutzerdefinierte Grafiken',
	'IMG_CAT_FOLDERS'		=> 'Themen-Symbole',
	'IMG_CAT_FORUMS'		=> 'Forums-Symbole',
	'IMG_CAT_ICONS'			=> 'Allgemeine Symbole',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Umfrage-Grafiken',
	'IMG_CAT_UI'			=> 'Allgemeine Elemente der Benutzeroberfläche',
	'IMG_CAT_USER'			=> 'Zusätzliche Grafiken',

	'IMG_SITE_LOGO'			=> 'Zentrales Logo',
	'IMG_UPLOAD_BAR'		=> 'Fortschritt Dateiupload',
	'IMG_POLL_LEFT'			=> 'Umfrage — linkes Ende',
	'IMG_POLL_CENTER'		=> 'Umfrage — Mitte',
	'IMG_POLL_RIGHT'		=> 'Umfrage — rechtes Ende',
	'IMG_ICON_FRIEND'		=> 'Zu Freunden hinzufügen',
	'IMG_ICON_FOE'			=> 'Zu ignorierten Benutzern hinzufügen',

	'IMG_FORUM_LINK'			=> 'Forums-Link',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Gesperrtes Forum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Unterforum',
	'IMG_FORUM_UNREAD'			=> 'Forum — ungelesene Beiträge',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Gesperrtes Forum — ungelesene Beiträge',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Unterforum — ungelesene Beiträge',
	'IMG_SUBFORUM_READ'			=> 'Unterforum in Legende',
	'IMG_SUBFORUM_UNREAD'		=> 'Unterforum in Legende — ungelesene Beiträge',

	'IMG_TOPIC_MOVED'			=> 'Verschobenes Thema',

	'IMG_TOPIC_READ'				=> 'Thema',
	'IMG_TOPIC_READ_MINE'			=> 'Eigenes Thema',
	'IMG_TOPIC_READ_HOT'			=> 'Beliebtes Thema',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Eigenes beliebtes Thema',
	'IMG_TOPIC_READ_LOCKED'			=> 'Gesperrtes Thema',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Gesperrtes eigenes Thema',

	'IMG_TOPIC_UNREAD'				=> 'Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Eigenes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Beliebtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Eigenes beliebtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Gesperrtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Gesperrtes eigenes Thema — ungelesene Beiträge',

	'IMG_STICKY_READ'				=> 'Wichtiges Thema',
	'IMG_STICKY_READ_MINE'			=> 'Eigenes wichtiges Thema',
	'IMG_STICKY_READ_LOCKED'		=> 'Gesperrtes wichtiges Thema',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Gesperrtes eigenes wichtiges Thema',
	'IMG_STICKY_UNREAD'				=> 'Wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_MINE'		=> 'Eigenes wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Gesperrtes wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Gesperrtes eigenes wichtiges Thema — ungelesene Beiträge',

	'IMG_ANNOUNCE_READ'					=> 'Bekanntmachung',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Eigene Bekanntmachung',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Gesperrte Bekanntmachung',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Gesperrte eigene Bekanntmachung',
	'IMG_ANNOUNCE_UNREAD'				=> 'Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Eigene Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Gesperrte Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Gesperrte eigene Bekanntmachung — ungelesene Beiträge',

	'IMG_GLOBAL_READ'					=> 'Globale Bekanntmachung',
	'IMG_GLOBAL_READ_MINE'				=> 'Eigene globale Bekanntmachung',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Gesperrte globale Bekanntmachung',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Gesperrte eigene globale Bekanntmachung',
	'IMG_GLOBAL_UNREAD'					=> 'Globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Eigene globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Gesperrte globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Gesperrte eigene globale Bekanntmachung — ungelesene Beiträge',

	'IMG_PM_READ'		=> 'Gelesene Private Nachricht',
	'IMG_PM_UNREAD'		=> 'Ungelesene Private Nachricht',

	'IMG_ICON_BACK_TOP'		=> 'Nach oben',

	'IMG_ICON_CONTACT_EMAIL'	=> 'E-Mail senden',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_PM'		=> 'Nachricht senden',

	'IMG_ICON_POST_DELETE'			=> 'Beitrag löschen',
	'IMG_ICON_POST_EDIT'			=> 'Beitrag ändern',
	'IMG_ICON_POST_INFO'			=> 'Beitrag-Details anzeigen',
	'IMG_ICON_POST_QUOTE'			=> 'Beitrag zitieren',
	'IMG_ICON_POST_REPORT'			=> 'Beitrag melden',
	'IMG_ICON_POST_TARGET'			=> 'Kleiner Beitrag',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Kleiner ungelesener Beitrag',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Dateianhang',
	'IMG_ICON_TOPIC_LATEST'			=> 'Letzter Beitrag',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Erster ungelesener Beitrag',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Gemeldeter Beitrag',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Nicht freigegebener Beitrag',

	'IMG_ICON_USER_ONLINE'		=> 'Mitglied online',
	'IMG_ICON_USER_OFFLINE'		=> 'Mitglied offline',
	'IMG_ICON_USER_PROFILE'		=> 'Profil anzeigen',
	'IMG_ICON_USER_SEARCH'		=> 'Beiträge suchen',
	'IMG_ICON_USER_WARN'		=> 'Benutzer verwarnen',

	'IMG_BUTTON_PM_FORWARD'		=> 'Private Nachricht weiterleiten',
	'IMG_BUTTON_PM_NEW'			=> 'Neue Private Nachricht',
	'IMG_BUTTON_PM_REPLY'		=> 'Private Nachricht beantworten',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Gesperrtes Thema',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Neues Thema erstellen',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Auf Thema antworten',

	'IMG_USER_ICON1'		=> 'Benutzerdefinierte Grafik 1',
	'IMG_USER_ICON2'		=> 'Benutzerdefinierte Grafik 2',
	'IMG_USER_ICON3'		=> 'Benutzerdefinierte Grafik 3',
	'IMG_USER_ICON4'		=> 'Benutzerdefinierte Grafik 4',
	'IMG_USER_ICON5'		=> 'Benutzerdefinierte Grafik 5',
	'IMG_USER_ICON6'		=> 'Benutzerdefinierte Grafik 6',
	'IMG_USER_ICON7'		=> 'Benutzerdefinierte Grafik 7',
	'IMG_USER_ICON8'		=> 'Benutzerdefinierte Grafik 8',
	'IMG_USER_ICON9'		=> 'Benutzerdefinierte Grafik 9',
	'IMG_USER_ICON10'		=> 'Benutzerdefinierte Grafik 10',

	'INACTIVE_STYLES'			=> 'Inaktive Styles',
	'INCLUDE_DIMENSIONS'		=> 'Größenangaben speichern',
	'INCLUDE_TEMPLATE'			=> 'Template einbeziehen',
	'INCLUDE_THEME'				=> 'Theme einbeziehen',
	'INHERITING_FROM'			=> 'Geerbt von',
	'INSTALL_STYLE'				=> 'Style installieren',
	'INSTALL_STYLES'			=> 'Styles installieren',
	//TODO
	//>>>>>> OLD <<<<<<: Here you can install a new style and if appropriate the corresponding style elements. If you already have the relevant style elements installed they will not be overwritten. Some styles require existing style elements to already be installed. If you try installing such a style and do not have the required elements you will be notified.
	//>>>>>>> NEW <<<<<<: Here you can install new styles.<br />If you cannot find a specific style in list below, check to make sure style is already installed. If it is not installed, check if it was uploaded correctly.
	'INSTALL_STYLES_EXPLAIN'	=> '#Hier kannst du den ausgewählten Style und die dazugehörigen Komponenten installieren. Wenn du die relevanten Komponenten des Styles bereits installiert hast, werden diese nicht überschrieben. Manche Styles benötigen zusätzliche Komponenten, die bereits installiert sein müssen. Wenn du einen solchen Style installierst und nicht alle erforderlichen Komponenten hast, wirst du darüber informiert.',
	'INSTALLED_STYLE'			=> 'Installierte Styles',
	'INVALID_STYLE_ID'			=> '#Invalid style ID.',

	'LINE_SPACING'				=> 'Zeilenabstand',
	'LOCALISED_IMAGES'			=> 'Übersetzt',

	'NO_CLASS'					=> 'Kann Klasse in Stylesheet nicht finden.',
	'NO_IMAGE'					=> 'Keine Grafik',
	'NO_IMAGE_ERROR'			=> 'Kann Grafik nicht im Dateisystem finden.',
	'NO_MATCHING_STYLES_FOUND'	=> '#No styles match your query.',
	'NO_STYLE'					=> 'Kann Style nicht im Dateisystem finden.',
	'NO_TEMPLATE'				=> 'Kann Template nicht im Dateisystem finden.',
	'NO_THEME'					=> 'Kann Theme nicht im Dateisystem finden.',
	'NO_UNINSTALLED_STYLE'		=> 'Keine nicht installierten Styles gefunden.',
	'NO_UNIT'					=> 'Keine',

	'ONLY_STYLE'			=> 'Dies ist der einzig verbleibende Style. Du kannst ihn nicht löschen.',

	'PARENT_STYLE_NOT_FOUND'	=> '#Parent style was not found. This style may not work correctly. Please uninstall it.',
	'PURGED_CACHE'				=> '#Cache was purged.',

	'REFRESH'					=> 'Aktualisieren',
	'REPEAT_NO'					=> 'Keiner',
	'REPEAT_X'					=> 'Nur horizontal',
	'REPEAT_Y'					=> 'Nur vertikal',
	'REPEAT_ALL'				=> 'Beide Richtungen',
	'REPLACE_STYLE'				=> 'Style ersetzen durch',
	'REPLACE_STYLE_EXPLAIN'		=> 'Dieser Style ersetzt den gelöschten Style für die Benutzer, die ihn derzeit verwenden.',
	'REPLACE_TEMPLATE'			=> 'Template ersetzen durch',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Diese Template-Sammlung ersetzt die gelöschte Sammlung in allen Styles, die sie derzeit verwenden.',
	'REPLACE_THEME'				=> 'Theme ersetzen durch',
	'REPLACE_THEME_EXPLAIN'		=> 'Dieses Theme ersetzt das gelöschte Theme in allen Styles, die es derzeit verwenden.',
	'REPLACE_WITH_OPTION'		=> 'Durch „%s“ ersetzen',
	'REQUIRES_STYLE'			=> '#This style requires the style "%s" to be installed.',

	'SELECT_IMAGE'				=> 'Grafik auswählen',
	'SELECT_TEMPLATE'			=> 'Template-Datei auswählen',
	'SELECT_THEME'				=> 'Theme-Datei auswählen',
	'SELECTED_IMAGE'			=> 'Ausgewählte Grafik',
	'SELECTED_TEMPLATE'			=> 'Ausgewähltes Template',
	'SELECTED_TEMPLATE_FILE'	=> 'Ausgewählte Template-Datei',
	'SELECTED_THEME'			=> 'Ausgewähltes Theme',
	'SELECTED_THEME_FILE'		=> 'Ausgewählte Theme-Datei',
	'STORE_FILESYSTEM'			=> 'Dateisystem',
	'STYLE_ACTIVATE'			=> 'Aktivieren',
	'STYLE_ACTIVATED'			=> '#Style activated successfully',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_ADDED'				=> 'Style erfolgreich hinzugefügt.',
	'STYLE_DEACTIVATE'			=> 'Deaktivieren',
	'STYLE_DEACTIVATED'			=> '#Style deactivated successfully',
	'STYLE_DEFAULT'				=> 'Als Standard-Style festlegen',
	'STYLE_DEFAULT_CHANGE'		=> '#Change default style',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> '#You must activate style before making it default style.',
	//TODO
	//>>>>>> OLD <<<<<<: Style deleted successfully.
	//>>>>>>> NEW <<<<<<: Style "%s" deleted successfully.
	'STYLE_DELETED'				=> '#Style erfolgreich gelöscht.',
	'STYLE_DETAILS_UPDATED'		=> 'Style erfolgreich geändert.',
	'STYLE_ERR_ARCHIVE'			=> 'Bitte wähle einen Typ für das Dateiarchiv aus.',
	'STYLE_ERR_COPY_LONG'		=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'STYLE_ERR_INVALID_PARENT'	=> '#Invalid parent style.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Du musst mindestens ein Style-Element auswählen.',
	'STYLE_ERR_NAME_CHARS'		=> 'Der Name des Styles darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'STYLE_ERR_NAME_EXIST'		=> 'Ein Style mit diesem Namen existiert bereits.',
	'STYLE_ERR_NAME_LONG'		=> 'Der Name des Styles darf nicht länger als 30 Zeichen sein.',
	'STYLE_ERR_NOT_STYLE'		=> 'Das angegebene oder hochgeladene Archiv enthält kein gültiges Style.',
	'STYLE_ERR_STYLE_NAME'		=> 'Du musst einen Namen für diesen Style angeben.',
	'STYLE_EXPORT'				=> 'Style exportieren',
	//TODO
	//>>>>>> OLD <<<<<<: Here you can export a style in the form of an archive. A style does not need to contain all elements but it must contain at least one. For example if you have created a new theme and imageset for a commonly used template you could simply export the theme and imageset and omit the template. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.
	//>>>>>>> NEW <<<<<<: Here you can export a style in the form of an archive. A style does not need to contain all elements but it must contain at least one. For example if you have created a new theme for a commonly used template you could simply export the theme and omit the template. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.
	'STYLE_EXPORT_EXPLAIN'		=> '#Hier kannst du ein Style in Form eines Archives exportieren. Ein Style muss nicht alle Elemente beinhalten, aber mindestens eins. Wenn du zum Beispiel ein neues Theme und eine neue Grafiksammlung für ein weit verbreitetes Template erstellt hast, solltest du nur Theme und Grafiksammlung exportieren und das Template auslassen. Du kannst auswählen, ob du die Datei direkt herunterladen oder im store-Ordner ablegen möchtest, damit du sie später per FTP herunterladen kannst.',
	'STYLE_EXPORTED'			=> 'Style erfolgreich exportiert und als %s gespeichert.',
	'STYLE_INSTALLED'			=> '#Style "%s" has been installed.',
	'STYLE_INSTALLED_EDIT_DETAILS'	=> '#<a href="%s">Click here</a> to edit style details or to change default style.',
	'STYLE_INSTALLED_RETURN_STYLES'	=> '#<a href="%s">Click here</a> to return to installed styles list.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '#<a href="%s">Click here</a> to install more styles.',
	'STYLE_NAME'				=> 'Name des Styles',
	'STYLE_NOT_INSTALLED'		=> '#Style "%s" was not installed.',
	'STYLE_PATH'				=> '#Style path:',
	'STYLE_PARENT'				=> '#Parent style:',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Theme',
	'STYLE_UNINSTALL'			=> '#Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> '#Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> '#Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Verwendet von (inklusive Spiders/Robots)',

	'TEMPLATE_ADDED'			=> 'Template-Sammlung hinzugefügt.',
	'TEMPLATE_CACHE'			=> 'Template-Cache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Standardmäßig speichert phpBB die kompilierte Version seiner Templates. Dies reduziert jedes Mal die Serverlast, wenn eine Seite angezeigt wird und kann daher die zur Seitenerstellung benötigte Zeit reduzieren. Hier kannst du den Cache-Status jeder Datei sehen und einzelne gecachte Dateien oder den gesamten Cache leeren.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Template-Cache erfolgreich geleert.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Es sind keine gecachten Templates vorhanden.',
	//TODO
	//>>>>>> OLD <<<<<<: Template set removed from database but some files may remain on the filesystem.
	//>>>>>>> NEW <<<<<<: Template set removed from database but files remain on the filesystem.
	'TEMPLATE_DELETED_FS'		=> '#Die Template-Sammlung wurde erfolgreich gelöscht, aber einige Dateien verbleiben im Dateisystem.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Template-Details erfolgreich aktualisiert.',
	'TEMPLATE_EDITOR'			=> 'HTML-Template-Editor',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Höhe des Template-Editors',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Bitte wähle einen Typ für das Dateiarchiv aus.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Das cache-Verzeichnis, das zur Speicherung gecachter Template-Dateien verwendet wird, konnte nicht geöffnet werden.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Der Name des Templates darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Der Name des Templates darf nicht länger als 30 Zeichen sein.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Du musst einen Namen für dieses Template angeben.',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Hier kannst du eine Template-Sammlung in Form eines Archives exportieren. Dieses Archiv wird allen Dateien enthalten, die erforderlich sind, um das Template auf einem anderen Board zu installieren. Du kannst auswählen, ob du die Datei direkt herunterladen oder im store-Ordner ablegen möchtest, damit du sie später per FTP herunterladen kannst.',
	'TEMPLATE_EXPORTED'			=> 'Template erfolgreich exportiert und als %s gespeichert.',
	'TEMPLATE_FILE'				=> 'Template-Datei',
	'TEMPLATE_FILE_UPDATED'		=> 'Template-Datei erfolgreich aktualisiert.',
	'TEMPLATE_NAME'				=> 'Name des Templates',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Die Template-Datei %s konnte nicht beschrieben werden. Bitte prüfe die Berechtigungen des Verzeichnisses und der Dateien.',

	'THEME_ADDED'				=> 'Neues Theme hinzugefügt.',
	'THEME_CLASS_ADDED'			=> 'Benutzerdefinierte Klasse erfolgreich hinzugefügt.',
	'THEME_DELETED'				=> 'Theme erfolgreich gelöscht.',
	'THEME_DELETED_FS'			=> 'Das Theme wurde erfolgreich gelöscht, aber einige Dateien verbleiben im Dateisystem.',
	'THEME_DETAILS_UPDATED'		=> 'Themen-Details erfolgreich aktualisiert.',
	'THEME_EDITOR'				=> 'Theme-Editor',
	'THEME_EDITOR_HEIGHT'		=> 'Höhe des Theme-Editors',
	'THEME_ERR_ARCHIVE'			=> 'Bitte wähle einen Typ für das Dateiarchiv aus.',
	'THEME_ERR_CLASS_CHARS'		=> 'Nur alphanumerische Zeichen sowie ., :, -, _ und # sind in Klassennamen zulässig.',
	'THEME_ERR_COPY_LONG'		=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'THEME_ERR_NAME_CHARS'		=> 'Der Name des Themes darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'THEME_ERR_NAME_EXIST'		=> 'Ein Theme mit diesem Namen existiert bereits.',
	'THEME_ERR_NAME_LONG'		=> 'Der Name des Themes darf nicht länger als 30 Zeichen sein.',
	'THEME_ERR_NOT_THEME'		=> 'Das angegebene Archiv enthält kein gültiges Theme.',
	'THEME_ERR_STYLE_NAME'		=> 'Du musst einen Namen für dieses Theme angeben.',
	'THEME_FILE'				=> 'Theme-Datei',
	'THEME_FILE_NOT_WRITABLE'	=> '#Unable to write to theme file %s. Please check the permissions for the directory and the files.',
	'THEME_EXPORT'				=> 'Theme exportieren',
	'THEME_EXPORT_EXPLAIN'		=> 'Hier kannst du ein Theme in Form eines Archives exportieren. Dieses Archiv wird allen Dateien enthalten, die erforderlich sind, um das Theme auf einem anderen Board zu installieren. Du kannst auswählen, ob du die Datei direkt herunterladen oder im store-Ordner ablegen möchtest, damit du sie später per FTP herunterladen kannst.',
	'THEME_EXPORTED'			=> 'Theme erfolgreich exportiert und in %s gespeichert.',
	'THEME_NAME'				=> 'Name des Themas',
	'THEME_UPDATED'				=> 'Theme erfolgreich geändert.',

	'UNDERLINE'				=> 'Unterstrichen',
	'UNINSTALL_DEFAULT'		=> '#You cannot uninstall the default style.',
	'UNSET'					=> 'Nicht definiert',

));
