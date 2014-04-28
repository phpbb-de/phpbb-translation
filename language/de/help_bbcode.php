<?php
/**
*
* help_bbcode [Deutsch — Du]
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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Einführung'
	),
	array(
		0 => 'Was ist BBCode?',
		1 => 'BBCode ist eine spezielle Umsetzung von HTML. Ob du BBCode in deinen Beiträgen auf diesem Board verwenden kannst, wird durch die Board-Administration festgelegt. Sofern du es verwenden darfst, kannst du es auch im Beitrags-Formular für diesen Beitrag deaktivieren. BBCode ist ähnlich wie HTML aufgebaut, Tags werden von eckigen Klammern („[“ und „]“) statt spitzen („&lt;“ und „&gt;“) eingeschlossen und erlauben eine bessere Kontrolle, was und wie etwas angezeigt wird. Je nach verwendetem Template wirst du über dem Bereich für den Nachrichtentext Schaltflächen finden, die dir die Verwendung von BBCode vereinfachen werden. Aber selbst dann kann die folgende Anleitung für dich hilfreich sein.'
	),
	array(
		0 => '--',
		1 => 'Formatierung von Text'
	),
	array(
		0 => 'Wie fetter, kursiver und unterstrichener Text erstellt wird',
		1 => 'BBCode enthält Tags, die dir eine schnelle Formatierung deines Textes ermöglichen. Dies wird folgendermaßen gemacht: <ul><li>Um einen Text Fett zu machen, schließe ihn in <strong>[b][/b]</strong> ein. So wird z.&nbsp;B.<br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />zu <strong>Hallo</strong></li><li>Zum Unterstreichen von Text benutze <strong>[u][/u]</strong>. So wird z.&nbsp;B. aus:<br /><br /><strong>[u]</strong>Guten Morgen<strong>[/u]</strong><br /><br /><span style="text-decoration: underline">Guten Morgen</span></li><li>Um Text kursiv zu stellen, verwende <strong>[i][/i]</strong>. So wird z.&nbsp;B.<br /><br />Das ist <strong>[i]</strong>großartig!<strong>[/i]</strong><br /><br />zu Das ist <em>großartig!</em></li></ul>'
	),
	array(
		0 => 'Wie die Textfarbe oder -größe geändert wird',
		1 => 'Um die Farbe oder die Größe deines Textes zu ändern, können die folgenden Tags genutzt werden. Beachte dabei bitte, dass es von dem Browser und dem System der Betrachter abhängig ist, wie die Darstellung des Textes erfolgt: <ul><li>Die Farbe des Textes wird geändert, in dem er in <strong>[color=][/color]</strong> eingeschlossen wird. Du kannst entweder eine den Browsern bekannte Farbe wie z.&nbsp;B. red, blue, yellow, etc. angeben oder einen Farbwert aus drei zweistelligen Hexadezimalwerten wie #FFFFFF, #000000 verwenden. Um beispielsweise roten Text zu erstellen:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />oder<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />Beides ergibt <span style="color:red">Hallo!</span>.</li><li>Die Textgröße wird in ähnlicher Weise mit <strong>[size=][/size]</strong> geändert. Dieser Tag ist abhängig von dem Template, das der Benutzer ausgewählt hat, aber die empfohlene Angabe ist ein numerischer Wert, der die Textgröße in Prozent angibt – beginnend standardmäßig mit 20 (sehr klein) und endend mit 200 (sehr groß). Zum Beispiel:<br /><br /><strong>[size=30]</strong>KLEIN<strong>[/size]</strong><br /><br />wird gewöhnlich <span style="font-size:30%;">KLEIN</span> sein,<br /><br />während:<br /><br /><strong>[size=200]</strong>GROSS!<strong>[/size]</strong><br /><br /><span style="font-size:200%;">GROSS!</span> sein wird</li></ul>'
	),
	array(
		0 => 'Kann ich Tags zur Formatierung kombinieren?',
		1 => 'Natürlich kannst du das. Um z.&nbsp;B. die Aufmerksamkeit eines anderen zu erhalten, kannst du<br /><br /><strong>[size=200][color=red][b]</strong>SCHAU MICH AN!<strong>[/b][/color][/size]</strong><br /><br />schreiben, was als <span style="color:red;font-size:200%;"><strong>SCHAU MICH AN!</strong></span> ausgegeben wird.<br /><br />Wir empfehlen jedoch nicht, viel Text derart zu formatieren! Beachte, dass du als Autor dafür verantwortlich bist, dass die Tags richtig geschlossen werden. Zum Beispiel ist das hier falsch:<br /><br /><strong>[b][u]</strong>Das ist falsch<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Zitieren und Ausgabe von Text mit fester Weite'
	),
	array(
		0 => 'Text in Antworten zitieren',
		1 => 'Es gibt zwei Arten, Text zu zitieren: mit Quelle und ohne.<ul><li>Wenn du die „Mit Zitat antworten“-Funktion zur Antwort auf einen Beitrag verwendest, wirst du feststellen, dass der alte Beitragstext von <strong>[quote=&quot;&quot;][/quote]</strong> umschlossen zum Nachrichtentext hinzugefügt wird. Dies erlaubt dir unter Angabe einer Referenz zu einer Person oder zu etwas anderem von dir gewähltem zu zitieren. Um z.&nbsp;B. einen Text von Herrn Klecks zu zitieren, solltest du Folgendes eingeben:<br /><br /><strong>[quote=&quot;Herr Klecks&quot;]</strong>Der Text von Herrn Klecks würde hier stehen<strong>[/quote]</strong><br /><br />Bei der Ausgabe wird dem Text automatisch „Herr Klecks hat geschrieben:“ vorangestellt. Beachte, dass du den Namen in Anführungszeichen (&quot;&quot;) einschließen <strong>musst</strong>, sie sind nicht optional.</li><li>Die zweite Methode erlaubt dir, etwas ohne Quellangabe zu zitieren. Dazu musst du den Text in <strong>[quote][/quote]</strong> einschließen. Wenn du die Nachricht anschaust, wird der Text in einem Zitat-Block angezeigt.</li></ul>'
	),
	array(
		0 => 'Programmcode oder Daten mit fester Weite ausgeben',
		1 => 'Wenn du einen Auszug eines Programmcodes oder etwas anderes, das eine feste Textweite wie eine Courier-Schrift benötigt, eingeben möchtest, solltest du den Text in <strong>[code][/code]</strong> einschließen, z.&nbsp;B.<br /><br /><strong>[code]</strong>echo &quot;Das ist ein Stück Programmcode&quot;;<strong>[/code]</strong><br /><br />Alle Formatierungen, die innerhalb von <strong>[code][/code]</strong> genutzt werden, bleiben erhalten, wenn der Text betrachtet wird. Die Syntaxhervorhebung für PHP kann mit <strong>[code=php][/code]</strong> aktiviert werden; dies ist immer dann zu empfehlen, wenn PHP-Code gepostet wird, da so die Lesbarkeit verbessert wird.'
	),
	array(
		0 => '--',
		1 => 'Listen erstellen'
	),
	array(
		0 => 'Eine unsortierte Liste erstellen',
		1 => 'BBCode unterstützt zwei Arten von Listen: unsortierte und sortierte. Sie sind im Wesentlichen identisch zu ihren HTML-Entsprechungen. Eine unsortierte Liste gibt die Elemente deiner Liste hintereinander durch einen Aufzählungspunkt gekennzeichnet aus. Verwende <strong>[list][/list]</strong>, um eine unsortierte Liste zu erstellen und beginne jeden Aufzählungspunkt mit <strong>[*]</strong>. Um zum Beispiel deine Lieblingsfarben aufzulisten, verwende:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rot<br /><strong>[*]</strong>Blau<br /><strong>[*]</strong>Gelb<br /><strong>[/list]</strong><br /><br />Dies würde folgende Liste ergeben:<ul><li>Rot</li><li>Blau</li><li>Gelb</li></ul>'
	),
	array(
		0 => 'Eine sortierte Liste erstellen',
		1 => 'Die zweite Listenart, die sortierte Liste, erlaubt dir, festzulegen, was den Punkten vorangestellt wird. Um eine sortierte Liste zu erstellen, verwende <strong>[list=1][/list]</strong> für eine nummerierte oder alternativ <strong>[list=a][/list]</strong> für eine alphabetische Liste. Wie bei der unsortierten Liste wird jeder Punkt durch <strong>[*]</strong> festgelegt. Zum Beispiel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gehe einkaufen<br /><strong>[*]</strong>Kaufe einen neuen Computer<br /><strong>[*]</strong>Verfluche den Computer, wenn er abstürzt<br /><strong>[/list]</strong><br /><br />würde ergeben:<ol style="list-style-type: decimal;"><li>Gehe einkaufen</li><li>Kaufe einen neuen Computer</li><li>Verfluche den Computer, wenn er abstürzt</li></ol>Eine alphabetische Liste würdest du hingegen wie folgt erstellen:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Die erste mögliche Antwort<br /><strong>[*]</strong>Die zweite mögliche Antwort<br /><strong>[*]</strong>Die dritte mögliche Antwort<br /><strong>[/list]</strong><br /><br />ergibt<ol style="list-style-type: lower-alpha"><li>Die erste mögliche Antwort</li><li>Die zweite mögliche Antwort</li><li>Die dritte mögliche Antwort</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Links erstellen'
	),
	array(
		0 => 'Links auf eine andere Website',
		//TODO
		//>>>>>> OLD <<<<<<: phpBB BBCode supports a number of ways of creating URIs (Uniform Resource Indicators) better known as URLs.<ul><li>The first of these uses the <strong>[url=][/url]</strong> tag, whatever you type after the = sign will cause the contents of that tag to act as a URL. For example to link to phpBB.com you could use:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">Visit phpBB!</a> Please notice that the link opens in the same window or a new window depending on the users browser preferences.</li><li>If you want the URL itself displayed as the link you can do this by simply using:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Additionally, phpBB features something called <i>Magic Links</i>, this will turn any syntactically correct URL into a link without you needing to specify any tags or even the leading http://. For example typing www.phpbb.com into your message will automatically lead to <a href="http://www.phpbb.com/">www.phpbb.com</a> being output when you view the message.</li><li>The same thing applies equally to e-mail addresses, you can either specify an address explicitly for example:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />which will output <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.
		//>>>>>>> NEW <<<<<<: phpBB BBCode supports a number of ways of creating URIs (Uniform Resource Indicators) better known as URLs.<ul><li>The first of these uses the <strong>[url=][/url]</strong> tag, whatever you type after the = sign will cause the contents of that tag to act as a URL. For example to link to phpBB.com you could use:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">Visit phpBB!</a> Please notice that the link opens in the same window or a new window depending on the users browser preferences.</li><li>If you want the URL itself displayed as the link you can do this by simply using:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Additionally, phpBB features something called <i>Magic Links</i>, this will turn any syntactically correct URL into a link without you needing to specify any tags or even the leading http://. For example typing www.phpbb.com into your message will automatically lead to <a href="http://www.phpbb.com/">www.phpbb.com</a> being output when you view the message.</li><li>The same thing applies equally to email addresses, you can either specify an address explicitly for example:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />which will output <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.
		1 => '#phpBBs BBCode unterstützt mehrere Wege, um URIs (Uniform Resource Indicators), auch als URLs oder Links bekannt, zu erstellen.<ul><li>Der erste davon ist der <strong>[url=][/url]</strong>-Tag; alles, was du nach dem =-Zeichen angibst, wird als Link für den Inhalt des Tags verwendet. Um beispielsweise auf phpBB.de zu linken, kannst du folgenden Code verwenden:<br /><br /><strong>[url=https://www.phpbb.de/]</strong>Besuche phpBB.de!<strong>[/url]</strong><br /><br />Dies würde folgenden Link erstellen: <a href="https://www.phpbb.de/">Besuche phpBB.de!</a> Die Seite wird abhängig von den Einstellungen des Browsers des Benutzers im gleichen oder in einem neuen Fenster geöffnet.</li><li>Wenn du möchtest, dass die URL selbst als Beschreibung angezeigt wird, kannst du dies wie folgt erreichen:<br /><br /><strong>[url]</strong>https://www.phpbb.de/<strong>[/url]</strong><br /><br />Dies würde folgenden Link erstellen: <a href="https://www.phpbb.de/">https://www.phpbb.de/</a></li><li>phpBB hat zusätzlich eine Funktion, um Links automatisch zu erkennen. Diese Funktion wandelt jede syntaktisch korrekte URL in einen Link um, ohne dass du einen Tag oder sogar das führende http:// angeben musst. Wenn du zum Beispiel in deinem Text www.phpbb.de schreibst, so wird dies automatisch zu <a href="https://www.phpbb.de/">www.phpbb.de</a>, sobald du die Nachricht betrachtest.</li><li>Die selbe Funktionalität steht auch bei E-Mail-Adressen zur Verfügung. Du kannst entweder eine Adresse explizit kennzeichnen; z.&nbsp;B.:<br /><br /><strong>[email]</strong>niemand@domain.tld<strong>[/email]</strong><br /><br />Dies ergibt <a href="mailto:niemand@domain.tld">niemand@domain.tld</a>. Oder du kannst direkt niemand@domain.tld in deiner Nachricht verwenden, was automatisch umgewandelt wird, wenn du die Nachricht anschaust.</li></ul>Wie bei allen BBCode-Tags kannst du URLs all den anderen Tags wie <strong>[img][/img]</strong> (siehe nächsten Eintrag), <strong>[b][/b]</strong> usw. hinterlegen. Wie bei den Formatierungs-Tags liegt es an dir, die richtige Reihenfolge beim Öffnen und beim Schließen einzuhalten. So ist zum Beispiel:<br /><br /><strong>[url=http://www.google.de/][img]</strong>http://www.google.com/intl/de_de/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">nicht</span> richtig und kann dazu führen, dass dein Beitrag gelöscht wird.'
	),
	array(
		0 => '--',
		1 => 'Bilder in Beiträgen anzeigen'
	),
	array(
		0 => 'Ein Bild zu einem Beitrag hinzufügen',
		1 => 'phpBBs BBCode hat einen Tag, um Bilder in einem Beitrag einzufügen. Dabei müssen zwei wichtige Punkte beachtet werden: erstens mögen es viele Benutzer nicht, wenn viele Bilder in einem Beitrag enthalten sind und zweitens muss das Bild, das du anzeigen willst, bereits im Internet verfügbar sein (es darf also nicht nur auf deinem Computer liegen, sofern du ihn nicht als Webserver betreibst!). Um ein Bild anzuzeigen, musst du die URL, die auf das Bild verweist, mit dem <strong>[img][/img]</strong>-Tag umschließen. Zum Beispiel:<br /><br /><strong>[img]</strong>http://www.google.com/intl/de_de/images/logo.gif<strong>[/img]</strong><br /><br />Wie schon im Abschnitt über Links erwähnt, kannst du ein Bild auch innerhalb des <strong>[url][/url]</strong>-Tags verwenden:<br /><br /><strong>[url=http://www.google.de/][img]</strong>http://www.google.com/intl/de_de/images/logo.gif<strong>[/img][/url]</strong><br /><br />ergibt:<br /><br /><a href="http://www.google.de/"><img src="http://www.google.com/intl/de_de/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Dateien zu einem Beitrag hinzufügen',
		1 => 'Dateianhänge können nun mit dem neuen <strong>[attachment=][/attachment]</strong>-Tag an jeder Stelle eines Beitrags eingefügt werden, sofern Dateianhänge durch die Board-Administration zugelassen wurden und du ausreichende Rechte zur Erstellung eines Dateianhangs hast. Innerhalb des Formulars zur Beitragserstellung findest du eine Auswahlliste (oder eine Schaltfläche), um Dateianhänge innerhalb des Beitrags zu platzieren.'
	),
	array(
		0 => '--',
		1 => 'Andere Punkte'
	),
	array(
		0 => 'Kann ich meine eigenen Tags hinzufügen',
		1 => 'Wenn du ein Administrator mit entsprechenden Rechten auf diesem Board bist, kannst du im Bereich für benutzerdefinierte BBCode-Tags weitere Tags definieren.'
	)
);
