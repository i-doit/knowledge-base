# Mehrsprachigkeit und Übersetzungen

_Do you speak IT documentation?_ Englisch ist und bleibt die Standard-Sprache in der Informationstechnologie, doch Vielfalt belebt: Daher unterstützt i-doit pro mehrere Sprachen. In diesem Artikel zeigen wir unter anderem, wie sich bestehende Übersetzungen anpassen lassen.

Unterstützte Sprachen
---------------------

| Sprache | i-doit open | i-doit pro |
| --- | --- | --- |
| Englisch | ja  | ja  |
| Deutsch | nein | ja  |

Die Mehrsprachigkeit bezieht sich auf die [Web GUI von i-doit pro](../grundlagen/struktur-it-dokumentation.md). In Englisch gehalten sind der [Login](../grundlagen/erstanmeldung.md), das [Admin Center](../administration/admin-center.md), das [Setup](../installation/manuelle-installation/setup.md), der [Update-Assistent](../wartung-und-betrieb/update-einspielen.md) und das [Kommandozeilen-Tool Controller](../automatisierung-und-integration/cli/index.md).

!!! info "Neue Sprachen unterstützen"

    Wie Sie andere Sprachen hinzufügen können finden Sie [HIER](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md)

Automatische Sprache je nach Browser-Einstellung
------------------------------------------------

Webbrowser senden bei Anfragen an einen Webserver in der Regel die präferierten Sprachen des Benutzers mit. Diese werden von i-doit pro beim Login ausgewertet, sodass sich i-doit pro dem Benutzer automatisch in der passenden Sprache präsentiert. Dieses Verhalten kann unter **Verwaltung → Benutzereinstellungen → Darstellung → Sprache durch Browser wählen** beeinflusst werden.

Sprachwechsel
-------------

Jeder Benutzer ist in der Lage, während der Arbeit mit i-doit pro die Sprache zu wechseln. Dies geschieht in der Web GUI über die Länderflaggen, die oben rechts angezeigt werden.

[![Sprachwechsel](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)

Sprache pro Benutzer
--------------------

[Beim ersten Anmelden in i-doit pro](../grundlagen/erstanmeldung.md) erhält der Benutzer automatisch die englische Oberfläche. Jeder Benutzer kann individuell einstellen, welche Sprache als Standard gesetzt werden soll. Dies geschieht unter **Verwaltung → Benutzereinstellungen → Darstellung → Sprache**. Hier den richtigen Wert einzustellen ist wichtig, um beispielsweise [E-Mail-Benachrichtigungen](../auswertungen/benachrichtigungen.md) in der gewünschten Sprache zu erhalten, da die E-Mail-Vorlagen mehrsprachig sind.

Sprachkonstanten
----------------

Innerhalb des Quellcodes und der Datenbanken werden zu übersetzende Texte durch sogenannte Sprachkonstanten repräsentiert. Beispiel für den Objekttyp **Raum**:

| Sprachkonstante | Englisch | Deutsch |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

Im Quellcode bzw. den Datenbanken steht lediglich die Sprachkonstante LC__CMDB__OBJTYPE__ROOM. Der Benutzer erhält allerdings in der Web GUI von i-doit pro die passende Übersetzung ("Room" oder "Raum"). Sprachkonstanten erkennt man daran, dass diese lediglich Großbuchstaben (A-Z), Unterstriche (_) und ggf. Zahlen (0-9) enthalten. Sie beginnen immer mit dem Prefix LC__.

Bei einem Server-Aufruf im Browser zieht i-doit pro Übersetzungstabellen heran. Diese befinden sich im Installationsverzeichnis von i-doit pro unter src/lang. Für jede Sprache existiert ein Kürzel (de für Deutsch, en für Englisch).

| Datei | Bemerkung | Update-sicher? |
| --- | --- | --- |
| de_custom.example.inc.php | Beispiel-Datei für benutzerdefinierte Anpassungen an der deutschen Sprache (wird für die Web GUI ignoriert) | nein |
| de_custom.inc.php | Benutzerdefinierte Anpassungen an der deutschen Sprache (optional) | ja  |
| de.inc.php | Deutsche Sprache | nein |
| en_custom.inc.php | Benutzerdefinierte Anpassungen an der englischen Sprache (optional) | ja  |
| en.inc.php | Englisch Sprache | nein |

Achtung: Die Änderungen an den Dateien src/lang/<Sprache>.inc.php werden bei einem [Update](../wartung-und-betrieb/update-einspielen.md) überschrieben und sollten daher nicht angepasst werden. Stattdessen sollten die entsprechenden Übersetzungen [HIER](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md) verwenden oder die custom\-Dateien angepasst werden. Alle Dateien enthalten PHP-Quellcode, der sich leicht anpassen lässt. Für jede Übersetzung schreibt man eine neue Zeile nach demselben Schema:

    $g_langcache['LC__EXAMPLE'] = 'Beispiel-Übersetzung';

Aus der Sprachkonstante `LC__EXAMPLE` wird somit `Beispiel-Übersetzung`.

Die custom\-Dateien eignen sich nicht nur dafür neue Übersetzungen einzuführen, sondern auch bestehende zu überschreiben.

!!! success "Sprachen ausschließen"

    Damit i-doit pro lediglich in einer Sprache den Benutzern zur Verfügung steht, hilft es, die nicht benötigten Sprachdateien zu ersetzen. Um beispielsweise i-doit pro lediglich in Englisch anzubieten führt man folgende Aktionen auf der Kommandozeile aus:

        cd /var/www/html/i-doit # Wechsel in das Installationsverzeichnis von i-doit pro (ggf. anpassen)
        cd src/lang/ # Wechsel in das Verzeichnis mit den Sprachdateien
        cp de.inc.php de.inc.php.bak # Man weiß ja nie ;-)
        cp en.inc.php de.inc.php # Deutsche durch englische Sprache ersetzen
        # Optional, wenn bereits Anpassungen vorgenommen wurden:
        #cp de_custom.inc.php de_custom.inc.php.bak
        #cp en_custom.inc.php de_custom.inc.php

    Da diese Vorgehensweise nicht Update-sicher ist, sollte dies nach jedem Update wiederholt werden.

Beispiele
---------

Prinzipiell lässt sich jeder Text in der Web GUI übersetzen. Um herauszufinden, welche Sprachkonstante verwendet wird, hilft es in vielen Fällen, in den Sprachkonstanten nach den Übersetzungen zu suchen.

### Mehrsprachige Objekttypgruppen

In der Mandanten-Datenbank stehen in der Tabelle isys_obj_type_group in der Spalte isys_obj_type_group__title die Sprachkonstanten. Wird eine neue [Objekttypgruppe](../grundlagen/struktur-it-dokumentation.md) erstellt, kann hier in der Datenbank der Wert in eine Sprachkonstante umgewandelt werden. Eine bestehende Objekttypgruppe sollte nicht in der Datenbank anders benannt werden. Stattdessen sollte in den custom\-Dateien die jeweilige Sprachkonstante neu übersetzt werden.

### Mehrsprachige Objekttypen

Unter **Verwaltung → CMDB Einstellungen → Objekttyp Konfiguration → [Objekttypgruppe] → [Objekttyp] →** **Sprachkonstante / Bezeichnung** kann ein [Objekttyp](../grundlagen/struktur-it-dokumentation.md) mehrsprachig angegeben werden. Dies gilt sowohl für Standard-, als auch für [benutzerdefinierte Objekttype](../grundlagen/benutzerdefinierte-objekttypen.md)n.

### Mehrsprachige Objekt-Titel

Mehrsprachige [Objekt-Titel](../grundlagen/struktur-it-dokumentation.md) sind nicht möglich. Dies würde eine [eindeutige Referenzierung](../grundlagen/eindeutige-referenzierungen.md) behindern.

### Mehrsprachige Kategorien

Handelt es sich um eine Standard-[Kategorie](../grundlagen/struktur-it-dokumentation.md), kann die Sprachkonstante in den custom\-Dateien überschrieben werden.

Bei [benutzerdefinierten Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) wird der Kategorie-Titel mit einer Sprachkonstante belegt und diese in den custom\-Dateien übersetzt.

### Mehrsprachige Attribute

Die Standard-[Attribute](../grundlagen/struktur-it-dokumentation.md) werden über die Sprachdateien übersetzt. Die Sprachkonstanten befinden sich im Quellcode und sollten daher nicht angepasst werden.

Attribute in benutzerdefinierten Kategorien können mit einer Sprachkonstante übersetzt werden.
