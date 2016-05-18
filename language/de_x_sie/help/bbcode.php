<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Bilder in Beiträgen anzeigen',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Einführung',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Links erstellen',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Listen erstellen',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Andere Punkte',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Zitieren und Ausgabe von Text mit fester Weite',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formatierung von Text',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Dateianhänge können nun mit dem neuen <strong>[attachment=][/attachment]</strong>-Tag an jeder Stelle eines Beitrags eingefügt werden, sofern Dateianhänge durch die Board-Administration zugelassen wurden und Sie ausreichende Rechte zur Erstellung eines Dateianhangs haben. Innerhalb des Formulars zur Beitragserstellung finden Sie eine Auswahlliste (oder eine Schaltfläche), um Dateianhänge innerhalb des Beitrags zu platzieren.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Dateien zu einem Beitrag hinzufügen',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBBs BBCode hat einen Tag, um Bilder in einem Beitrag einzufügen. Dabei müssen zwei wichtige Punkte beachtet werden: erstens mögen es viele Benutzer nicht, wenn viele Bilder in einem Beitrag enthalten sind und zweitens muss das Bild, das Sie anzeigen möchten, bereits im Internet verfügbar sein (es darf also nicht nur auf Ihrem Computer liegen, sofern Sie ihn nicht als Webserver betreiben!). Um ein Bild anzuzeigen, müssen Sie die URL, die auf das Bild verweist, mit dem <strong>[img][/img]</strong>-Tag umschließen. Zum Beispiel:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Wie schon im Abschnitt über Links erwähnt, können Sie ein Bild auch innerhalb des <strong>[url][/url]</strong>-Tags verwenden:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />ergibt:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Ein Bild zu einem Beitrag hinzufügen',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode ist eine spezielle Umsetzung von HTML. Ob Sie BBCode in Ihren Beiträgen auf diesem Board verwenden können, wird durch die Board-Administration festgelegt. Sofern Sie es verwenden dürfen, können Sie es auch im Beitrags-Formular für diesen Beitrag deaktivieren. BBCode ist ähnlich wie HTML aufgebaut, Tags werden von eckigen Klammern („[“ und „]“) statt spitzen („&lt;“ und „&gt;“) eingeschlossen und erlauben eine bessere Kontrolle, was und wie etwas angezeigt wird. Je nach verwendetem Template werden Sie über dem Bereich für den Nachrichtentext Schaltflächen finden, die Ihnen die Verwendung von BBCode vereinfachen werden. Aber selbst dann kann die folgende Anleitung für Sie hilfreich sein.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Was ist BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBBs BBCode unterstützt mehrere Wege, um URIs (Uniform Resource Indicators), auch als URLs oder Links bekannt, zu erstellen.<ul><li>Der erste davon ist der <strong>[url=][/url]</strong>-Tag; alles, was Sie nach dem =-Zeichen angeben, wird als Link für den Inhalt des Tags verwendet. Um beispielsweise auf phpBB.de zu linken, können Sie folgenden Code verwenden:<br /><br /><strong>[url=https://www.phpbb.de/]</strong>Besuche phpBB.de!<strong>[/url]</strong><br /><br />Dies würde folgenden Link erstellen: <a href="https://www.phpbb.de/">Besuchen Sie phpBB.de!</a> Die Seite wird abhängig von den Einstellungen des Browsers des Benutzers im gleichen oder in einem neuen Fenster geöffnet.</li><li>Wenn Sie möchten, dass die URL selbst als Beschreibung angezeigt wird, können Sie dies wie folgt erreichen:<br /><br /><strong>[url]</strong>https://www.phpbb.de/<strong>[/url]</strong><br /><br />Dies würde folgenden Link erstellen: <a href="https://www.phpbb.de/">https://www.phpbb.de/</a></li><li>phpBB hat zusätzlich eine Funktion, um Links automatisch zu erkennen. Diese Funktion wandelt jede syntaktisch korrekte URL in einen Link um, ohne dass Sie einen Tag oder sogar das führende https:// angeben müssen. Wenn Sie zum Beispiel in Ihrem Text www.phpbb.de schreiben, so wird dies automatisch zu <a href="https://www.phpbb.de/">www.phpbb.de</a>, sobald Sie die Nachricht betrachten.</li><li>Die selbe Funktionalität steht auch bei E-Mail-Adressen zur Verfügung. Sie können entweder eine Adresse explizit kennzeichnen; z.&nbsp;B.:<br /><br /><strong>[email]</strong>niemand@domain.tld<strong>[/email]</strong><br /><br />Dies ergibt <a href="mailto:niemand@domain.tld">niemand@domain.tld</a>. Oder Sie können direkt niemand@domain.tld in deiner Nachricht verwenden, was automatisch umgewandelt wird, wenn Sie die Nachricht anschauen.</li></ul>Wie bei allen BBCode-Tags können Sie URLs all den anderen Tags wie <strong>[img][/img]</strong> (siehe nächsten Eintrag), <strong>[b][/b]</strong> usw. hinterlegen. Wie bei den Formatierungs-Tags liegt es an Ihnen, die richtige Reihenfolge beim Öffnen und beim Schließen einzuhalten. So ist zum Beispiel:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">nicht</span> richtig und kann dazu führen, dass Ihr Beitrag gelöscht wird.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Links auf eine andere Website',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Die zweite Listenart, die sortierte Liste, erlaubt Ihnen, festzulegen, was den Punkten vorangestellt wird. Um eine sortierte Liste zu erstellen, verwenden Sie <strong>[list=1][/list]</strong> für eine nummerierte oder alternativ <strong>[list=a][/list]</strong> für eine alphabetische Liste. Wie bei der unsortierten Liste wird jeder Punkt durch <strong>[*]</strong> festgelegt. Zum Beispiel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gehe einkaufen<br /><strong>[*]</strong>Kaufe einen neuen Computer<br /><strong>[*]</strong>Verfluche den Computer, wenn er abstürzt<br /><strong>[/list]</strong><br /><br />würde ergeben:<ol style="list-style-type: decimal;"><li>Gehe einkaufen</li><li>Kaufe einen neuen Computer</li><li>Verfluche den Computer, wenn er abstürzt</li></ol>Eine alphabetische Liste würden Sie hingegen wie folgt erstellen:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Die erste mögliche Antwort<br /><strong>[*]</strong>Die zweite mögliche Antwort<br /><strong>[*]</strong>Die dritte mögliche Antwort<br /><strong>[/list]</strong><br /><br />ergibt<ol style="list-style-type: lower-alpha"><li>Die erste mögliche Antwort</li><li>Die zweite mögliche Antwort</li><li>Die dritte mögliche Antwort</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Die erste mögliche Antwort<br /><strong>[*]</strong>Die zweite mögliche Antwort<br /><strong>[*]</strong>Die dritte mögliche Antwort<br /><strong>[/list]</strong><br /><br />ergibt<ol style="list-style-type: upper-alpha"><li>Die erste mögliche Antwort</li><li>Die zweite mögliche Antwort</li><li>Die dritte mögliche Antwort</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Die erste mögliche Antwort<br /><strong>[*]</strong>Die zweite mögliche Antwort<br /><strong>[*]</strong>Die dritte mögliche Antwort<br /><strong>[/list]</strong><br /><br />ergibt<ol style="list-style-type: lower-roman"><li>Die erste mögliche Antwort</li><li>Die zweite mögliche Antwort</li><li>Die dritte mögliche Antwort</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Die erste mögliche Antwort<br /><strong>[*]</strong>Die zweite mögliche Antwort<br /><strong>[*]</strong>Die dritte mögliche Antwort<br /><strong>[/list]</strong><br /><br />ergibt<ol style="list-style-type: upper-roman"><li>Die erste mögliche Antwort</li><li>Die zweite mögliche Antwort</li><li>Die dritte mögliche Antwort</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Eine sortierte Liste erstellen',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode unterstützt zwei Arten von Listen: unsortierte und sortierte. Sie sind im Wesentlichen identisch zu ihren HTML-Entsprechungen. Eine unsortierte Liste gibt die Elemente Ihrer Liste hintereinander durch einen Aufzählungspunkt gekennzeichnet aus. Verwenden Sie <strong>[list][/list]</strong>, um eine unsortierte Liste zu erstellen und beginnen Sie jeden Aufzählungspunkt mit <strong>[*]</strong>. Um zum Beispiel Ihre Lieblingsfarben aufzulisten, verwenden Sie:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rot<br /><strong>[*]</strong>Blau<br /><strong>[*]</strong>Gelb<br /><strong>[/list]</strong><br /><br />Dies würde folgende Liste ergeben:<ul><li>Rot</li><li>Blau</li><li>Gelb</li></ul><br />Alternativ können Sie auch den Listenpunkt-Stil definieren: <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> oder <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Eine unsortierte Liste erstellen',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Wenn Sie ein Administrator mit entsprechenden Rechten auf diesem Board sind, können Sie im Bereich für benutzerdefinierte BBCode-Tags weitere Tags definieren.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Kann ich meine eigenen Tags hinzufügen?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Wenn Sie einen Auszug eines Programmcodes oder etwas anderes, das eine feste Textweite wie eine Courier-Schrift benötigt, eingeben möchten, sollten Sie den Text in <strong>[code][/code]</strong> einschließen, z.&nbsp;B.<br /><br /><strong>[code]</strong>echo &quot;Das ist ein Stück Programmcode&quot;;<strong>[/code]</strong><br /><br />Alle Formatierungen, die innerhalb von <strong>[code][/code]</strong> genutzt werden, bleiben erhalten, wenn der Text betrachtet wird. Die Syntaxhervorhebung für PHP kann mit <strong>[code=php][/code]</strong> aktiviert werden; dies ist immer dann zu empfehlen, wenn PHP-Code gepostet wird, da so die Lesbarkeit verbessert wird.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Programmcode oder Daten mit fester Weite ausgeben',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Es gibt zwei Arten, Text zu zitieren: mit Quelle und ohne.<ul><li>Wenn Sie die „Mit Zitat antworten“-Funktion zur Antwort auf einen Beitrag verwenden, werden Sie feststellen, dass der alte Beitragstext von <strong>[quote=&quot;&quot;][/quote]</strong> umschlossen zum Nachrichtentext hinzugefügt wird. Dies erlaubt Ihnen unter Angabe einer Referenz zu einer Person oder zu etwas anderem von Ihnen gewähltem zu zitieren. Um z.&nbsp;B. einen Text von Herrn Klecks zu zitieren, sollten Sie Folgendes eingeben:<br /><br /><strong>[quote=&quot;Herr Klecks&quot;]</strong>Der Text von Herrn Klecks würde hier stehen<strong>[/quote]</strong><br /><br />Bei der Ausgabe wird dem Text automatisch „Herr Klecks hat geschrieben:“ vorangestellt. Beachten Sie, dass Sie den Namen in Anführungszeichen (&quot;&quot;) einschließen <strong>müssen</strong>, sie sind nicht optional.</li><li>Die zweite Methode erlaubt Ihnen, etwas ohne Quellangabe zu zitieren. Dazu müssen Sie den Text in <strong>[quote][/quote]</strong> einschließen. Wenn Sie die Nachricht anschauen, wird der Text in einem Zitat-Block angezeigt.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Text in Antworten zitieren',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode enthält Tags, die Ihnen eine schnelle Formatierung Ihres Textes ermöglichen. Dies wird folgendermaßen gemacht: <ul><li>Um einen Text Fett zu machen, schließen Sie ihn in <strong>[b][/b]</strong> ein. So wird z.&nbsp;B.<br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />zu <strong>Hallo</strong></li><li>Zum Unterstreichen von Text benutzen Sie <strong>[u][/u]</strong>. So wird z.&nbsp;B. aus:<br /><br /><strong>[u]</strong>Guten Morgen<strong>[/u]</strong><br /><br /><span style="text-decoration: underline">Guten Morgen</span></li><li>Um Text kursiv zu stellen, verwenden Sie <strong>[i][/i]</strong>. So wird z.&nbsp;B.<br /><br />Das ist <strong>[i]</strong>großartig!<strong>[/i]</strong><br /><br />zu Das ist <em>großartig!</em></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Wie fetter, kursiver und unterstrichener Text erstellt wird',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Um die Farbe oder die Größe Ihres Textes zu ändern, können die folgenden Tags genutzt werden. Beachten Sie dabei bitte, dass es von dem Browser und dem System des Betrachters abhängig ist, wie die Darstellung des Textes erfolgt: <ul><li>Die Farbe des Textes wird geändert, in dem er in <strong>[color=][/color]</strong> eingeschlossen wird. Sie können entweder eine den Browsern bekannte Farbe wie z.&nbsp;B. red, blue, yellow, etc. angeben oder einen Farbwert aus drei zweistelligen Hexadezimalwerten wie #FFFFFF, #000000 verwenden. Um beispielsweise roten Text zu erstellen:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />oder<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />Beides ergibt <span style="color:red">Hallo!</span>.</li><li>Die Textgröße wird in ähnlicher Weise mit <strong>[size=][/size]</strong> geändert. Dieser Tag ist abhängig von dem Template, das der Benutzer ausgewählt hat, aber die empfohlene Angabe ist ein numerischer Wert, der die Textgröße in Prozent angibt – beginnend standardmäßig mit 20 (sehr klein) und endend mit 200 (sehr groß). Zum Beispiel:<br /><br /><strong>[size=30]</strong>KLEIN<strong>[/size]</strong><br /><br />wird gewöhnlich <span style="font-size:30%;">KLEIN</span> sein,<br /><br />während:<br /><br /><strong>[size=200]</strong>GROSS!<strong>[/size]</strong><br /><br /><span style="font-size:200%;">GROSS!</span> sein wird</li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Wie die Textfarbe oder -größe geändert wird',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Natürlich können Sie das. Um z.&nbsp;B. die Aufmerksamkeit eines anderen zu erhalten, können Sie<br /><br /><strong>[size=200][color=red][b]</strong>SCHAU MICH AN!<strong>[/b][/color][/size]</strong><br /><br />schreiben, was als <span style="color:red;font-size:200%;"><strong>SCHAU MICH AN!</strong></span> ausgegeben wird.<br /><br />Wir empfehlen jedoch nicht, viel Text derart zu formatieren! Beachten Sie, dass Sie als Autor dafür verantwortlich sind, dass die Tags richtig geschlossen werden. Zum Beispiel ist das hier falsch:<br /><br /><strong>[b][u]</strong>Das ist falsch<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Kann ich Tags zur Formatierung kombinieren?',
));