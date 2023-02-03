**Inhaltsverzeichnis**

*   1[Unterstützte Sprachen](#MehrsprachigkeitundÜbersetzungen-UnterstützteSprachen)
*   2[Automatische Sprache je nach Browser-Einstellung](#MehrsprachigkeitundÜbersetzungen-AutomatischeSprachejenachBrowser-Einstellung)
*   3[Sprachwechsel](#MehrsprachigkeitundÜbersetzungen-Sprachwechsel)
*   4[Sprache pro Benutzer](#MehrsprachigkeitundÜbersetzungen-SpracheproBenutzer)
*   5[Sprachkonstanten](#MehrsprachigkeitundÜbersetzungen-Sprachkonstanten)
*   6[Beispiele](#MehrsprachigkeitundÜbersetzungen-Beispiele)
    *   6.1[Mehrsprachige Objekttypgruppen](#MehrsprachigkeitundÜbersetzungen-MehrsprachigeObjekttypgruppen)
    *   6.2[Mehrsprachige Objekttypen](#MehrsprachigkeitundÜbersetzungen-MehrsprachigeObjekttypen)
    *   6.3[Mehrsprachige Objekt-Titel](#MehrsprachigkeitundÜbersetzungen-MehrsprachigeObjekt-Titel)
    *   6.4[Mehrsprachige Kategorien](#MehrsprachigkeitundÜbersetzungen-MehrsprachigeKategorien)
    *   6.5[Mehrsprachige Attribute](#MehrsprachigkeitundÜbersetzungen-MehrsprachigeAttribute)

_Do you speak IT documentation?_ Englisch ist und bleibt die Standard-Sprache in der Informationstechnologie, doch Vielfalt belebt: Daher unterstützt i-doit mehrere Sprachen. In diesem Artikel zeigen wir unter anderem, wie sich bestehende Übersetzungen anpassen lassen.

Unterstützte Sprachen
---------------------

| Sprache | i-doit open | i-doit pro |
| --- | --- | --- |
| Sprache | i-doit open | i-doit pro |
| --- | --- | --- |
| Englisch | ja  | ja  |
| Deutsch | nein | ja  |

Die Mehrsprachigkeit bezieht sich auf die [Web GUI von i-doit](/display/de/Struktur+der+IT-Dokumentation). In Englisch gehalten sind der [Login](/display/de/Erstanmeldung), das [Admin Center](/display/de/Admin+Center), das [Setup](/display/de/Setup), der [Update-Assistent](/display/de/Update+einspielen) und das [Kommandozeilen-Tool Controller](/display/de/CLI).

Neue Sprachen unterstützen

i-doit lässt sich nicht ohne Eingriff in den Quellcode durch weitere Sprachen erweitern. Gibt es Bestrebungen, i-doit in eine weitere Sprache zu übersetzen, freuen wir uns über eine Nachricht.

Automatische Sprache je nach Browser-Einstellung
------------------------------------------------

Webbrowser senden bei Anfragen an einen Webserver in der Regel die präferierten Sprachen des Benutzers mit. Diese werden von i-doit beim Login ausgewertet, sodass sich i-doit dem Benutzer automatisch in der passenden Sprache präsentiert. Dieses Verhalten kann unter `**Verwaltung → Benutzereinstellungen → Darstellung → Sprache durch Browser wählen**` beeinflusst werden.

Sprachwechsel
-------------

Jeder Benutzer ist in der Lage, während der Arbeit mit i-doit die Sprache zu wechseln. Dies geschieht in der Web GUI über die Länderflaggen, die oben rechts angezeigt werden.

![](/download/attachments/37781507/sprachwechsel.png?version=1&modificationDate=1463145464710&api=v2)

Sprache pro Benutzer
--------------------

[Beim ersten Anmelden in i-doit](/display/de/Erstanmeldung) erhält der Benutzer automatisch die englische Oberfläche. Jeder Benutzer kann individuell einstellen, welche Sprache als Standard gesetzt werden soll. Dies geschieht unter `**Verwaltung → Benutzereinstellungen → Darstellung → Sprache**`. Hier den richtigen Wert einzustellen ist wichtig, um beispielsweise [E-Mail-Benachrichtigungen](/display/de/Benachrichtigungen) in der gewünschten Sprache zu erhalten, da die E-Mail-Vorlagen mehrsprachig sind.

Sprachkonstanten
----------------

Innerhalb des Quellcodes und der Datenbanken werden zu übersetzende Texte durch sogenannte Sprachkonstanten repräsentiert. Beispiel für den Objekttyp `**Raum**`:

| Sprachkonstante | Englisch | Deutsch |
| --- | --- | --- |
| Sprachkonstante | Englisch | Deutsch |
| --- | --- | --- |
| `LC__CMDB__OBJTYPE__ROOM` | Room | Raum |

Im Quellcode bzw. den Datenbanken steht lediglich die Sprachkonstante `LC__CMDB__OBJTYPE__ROOM`. Der Benutzer erhält allerdings in der Web GUI von i-doit die passende Übersetzung ("Room" oder "Raum"). Sprachkonstanten erkennt man daran, dass diese lediglich Großbuchstaben (`A-Z`), Unterstriche (`_`) und ggf. Zahlen (`0-9`) enthalten. Sie beginnen immer mit dem Prefix `LC__`.

Bei einem Server-Aufruf im Browser zieht i-doit Übersetzungstabellen heran. Diese befinden sich im Installationsverzeichnis von i-doit unter `src/lang`. Für jede Sprache existiert ein Kürzel (`de` für Deutsch, `en` für Englisch).

| Datei | Bemerkung | Update-sicher? |
| --- | --- | --- |
| Datei | Bemerkung | Update-sicher? |
| --- | --- | --- |
| `de_custom.example.inc.php` | Beispiel-Datei für benutzerdefinierte Anpassungen an der deutschen Sprache (wird für die Web GUI ignoriert) | nein |
| `de_custom.inc.php` | Benutzerdefinierte Anpassungen an der deutschen Sprache (optional) | ja  |
| `de.inc.php` | Deutsche Sprache | nein |
| `en_custom.inc.php` | Benutzerdefinierte Anpassungen an der englischen Sprache (optional) | ja  |
| `en.inc.php` | Englisch Sprache | nein |

Achtung: Die Änderungen an den Dateien `src/lang/<Sprache>.inc.php` werden bei einem [Update](/display/de/Update+einspielen) überschrieben und sollten daher nicht angepasst werden. Stattdessen sollten die entsprechenden `custom`\-Dateien angepasst werden. Alle Dateien enthalten PHP-Quellcode, der sich leicht anpassen lässt. Für jede Übersetzung schreibt man eine neue Zeile nach demselben Schema:

[?](#)

`$g_langcache``[``'LC__EXAMPLE'``] =` `'Beispiel-Übersetzung'``;`

Aus der Sprachkonstante LC\_\_EXAMPLE wird somit "Beispiel-Übersetzung".

Die `custom`\-Dateien eignen sich nicht nur dafür neue Übersetzungen einzuführen, sondern auch bestehende zu überschreiben.

Sprachen ausschließen

Damit i-doit lediglich in einer Sprache den Benutzern zur Verfügung steht, hilft es, die nicht benötigten Sprachdateien zu ersetzen. Um beispielsweise i-doit lediglich in Englisch anzubieten führt man folgende Aktionen auf der Kommandozeile aus:

[?](#)

`cd` `/var/www/html/i-doit` `# Wechsel in das Installationsverzeichnis von i-doit (ggf. anpassen)`

`cd` `src``/lang/` `# Wechsel in das Verzeichnis mit den Sprachdateien`

`cp` `de.inc.php de.inc.php.bak` `# Man weiß ja nie ;-)`

`cp` `en.inc.php de.inc.php` `# Deutsche durch englische Sprache ersetzen`

`# Optional, wenn bereits Anpassungen vorgenommen wurden:`

`#cp de_custom.inc.php de_custom.inc.php.bak`

`#cp en_custom.inc.php de_custom.inc.php`

Da diese Vorgehensweise nicht Update-sicher ist, sollte dies nach jedem Update wiederholt werden.

Beispiele
---------

Prinzipiell lässt sich jeder Text in der Web GUI übersetzen. Um herauszufinden, welche Sprachkonstante verwendet wird, hilft es in vielen Fällen, in den Sprachkonstanten nach den Übersetzungen zu suchen.

### Mehrsprachige Objekttypgruppen

In der Mandanten-Datenbank stehen in der Tabelle `isys_obj_type_group` in der Spalte `isys_obj_type_group__title` die Sprachkonstanten. Wird eine neue [Objekttypgruppe](/display/de/Struktur+der+IT-Dokumentation) erstellt, kann hier in der Datenbank der Wert in eine Sprachkonstante umgewandelt werden. Eine bestehende Objekttypgruppe sollte nicht in der Datenbank anders benannt werden. Stattdessen sollte in den `custom`\-Dateien die jeweilige Sprachkonstante neu übersetzt werden.

### Mehrsprachige Objekttypen

Unter `**Verwaltung → CMDB Einstellungen → Objekttyp Konfiguration → [Objekttypgruppe] → [Objekttyp] →**` `**Sprachkonstante / Bezeichnung**` kann ein [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) mehrsprachig angegeben werden. Dies gilt sowohl für Standard-, als auch für [benutzerdefinierte Objekttype](/display/de/Benutzerdefinierte+Objekttypen)n.

### Mehrsprachige Objekt-Titel

Mehrsprachige [Objekt-Titel](/display/de/Struktur+der+IT-Dokumentation) sind nicht möglich. Dies würde eine [eindeutige Referenzierung](/display/de/Eindeutige+Referenzierungen) behindern.

### Mehrsprachige Kategorien

Handelt es sich um eine Standard-[Kategorie](/display/de/Struktur+der+IT-Dokumentation), kann die Sprachkonstante in den `custom`\-Dateien überschrieben werden.

Bei [benutzerdefinierten Kategorien](/display/de/Benutzerdefinierte+Kategorien) wird der Kategorie-Titel mit einer Sprachkonstante belegt und diese in den `custom`\-Dateien übersetzt.

### Mehrsprachige Attribute

Die Standard-[Attribute](/display/de/Struktur+der+IT-Dokumentation) werden über die Sprachdateien übersetzt. Die Sprachkonstanten befinden sich im Quellcode und sollten daher nicht angepasst werden.

Attribute in benutzerdefinierten Kategorien können mit einer Sprachkonstante übersetzt werden.