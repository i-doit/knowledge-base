# Gerätetausch

Ein neuer Switch wird in Betrieb genommen, doch alle Verbindungen sollen erhalten bleiben. Wer hier nicht im Anschluss alle Anschlüsse neu dokumentieren will, nutzt das [Add-on](./index.md) **Gerätetausch**. Diese erlaubt den Austausch von [Objekten](../grundlagen/struktur-it-dokumentation.md) bei konfigurierbarer Übernahme der bestehenden Verbindungen.

Das Add-on hieß zuvor SwapCI bis zur Version 1.3.1.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](./index.md).

## Konfiguration

Die Konfiguration befindet sich unter **Verwaltung → Add-ons → Gerätetausch → Konfiguration**. Sie dient größtenteils für die Definition von Standardwerten, um häufiges Tauschen zu standardisieren und zu beschleunigen.

| Option | Beschreibung |
| --- | --- |
| **Auswählbare Objekt-Typen** | Welche Objekte welchen Typs getauscht werden können, wird hier festgelegt. Zudem wird pro [Objekttyp](../grundlagen/struktur-it-dokumentation.md) festgelegt, welche [Kategorien](../grundlagen/struktur-it-dokumentation.md) (und somit welche [Attribute](../grundlagen/struktur-it-dokumentation.md)) getauscht werden sollen. Diejenigen Kategorien, die nicht ausgewählt werden, bleiben von einem Tausch unberührt. |
| **CMDB Status für Tauschgeräte** | Die Auswahl, welche Objekte zum Tauschen angeboten werden, kann über deren [**CMDB-Status**](../grundlagen/lebens-und-dokumentationszyklus.md) eingeschränkt werden. |
| **"Tausch" Status berücksichtigen?** | Wenn der Tausch-Status berücksichtigt wird, erhält das getauschte Gerät den **CMDB-Status** **Getauscht** und das Tauschgerät den **CMDB-Status In Betrieb**. |
| **Getauschte Geräte archivieren?** | Das das Objekt, das getauscht wird, den [Zustand](../grundlagen/lebens-und-dokumentationszyklus.md) **Archiviert** erhalten? |
| **SYS-ID ebenfalls tauschen?** | Soll das Attribut **SYS-ID** der Kategorie **Allgemein** getauscht werden? Hierbei handelt es sich um [ein Attribut zur eindeutigen Referenzierung](../grundlagen/eindeutige-referenzierungen.md). |

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Gerätetausch** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| **Objekte Tauschen** | Darf der Benutzer Objekte tauschen? |
| **Tauschen nach Arbeitsplatzsystemen** | Darf der Benutzer Arbeitsplatzkomponenten tauschen? |
| **Gerätetausch Konfiguration** | Darf der Benutzer die Konfiguration (siehe oben) anpassen? |
| **Gerätetausch-Schaltfläche in der Objektliste** | Der Benutzer hat über [die Aktionsleiste der Objekt-Liste](../grundlagen/objekt-liste/aktionsleiste.md) die Möglichkeit, Objekte miteinander zu tauschen. Dort erscheint der Button **Tauschen**. |
| **Gerätetausch-Schaltfläche in Objekten** | Der Benutzer hat über die Aktionsleiste innerhalb eines Objekts die Möglichkeit, das Objekt durch ein anderes zu tauschen. Dort erscheint der Button **Tauschen**. |

## Voraussetzungen

Bevor zwei Objekte miteinander getauscht werden können, müssen folgende Voraussetzungen erfüllt sein:

-   Beide Objekte haben denselben Objekttyp.
-   Ein Objekt darf nicht mit sich selbst getauscht werden.

## Objekte tauschen

Um ein Objekt gegen ein anderes zu tauschen, gibt es drei Wege:

1. Innerhalb einer [Objekt-Liste](../grundlagen/objekt-liste/index.md) beide Objekte auswählen und in der [Aktionsleiste](../grundlagen/objekt-liste/aktionsleiste.md) den Button **Tauschen** klicken
2. Innerhalb eines Objekts in der Aktionsleiste den Button **Tauschen** klicken und anschließend das Tauschgerät unter **Lagerndes Objekt** auswählen
3. Unter **Add-ons → Gerätetausch** die beiden Objekte unter **Zu tauschendes Objekt** und **Lagerndes Objekt** auswählen

Über den Button **Umstellen** können die ausgewählten Objekte vertauscht werden.

[![Auswahl über Objekt-Liste](../assets/images/de/i-doit-add-ons/replacement/1-rp.png)](../assets/images/de/i-doit-add-ons/replacement/1-rp.png)

[![Auswahl über Objekt](../assets/images/de/i-doit-add-ons/replacement/2-rp.png)](../assets/images/de/i-doit-add-ons/replacement/2-rp.png)

Nach der Auswahl der beiden Objekte können weitere Optionen angepasst werden. Die Vorauswahl stammt aus der oben genannten Konfiguration.

| Option | Beschreibung |
| --- | --- |
| **Zu übernehmende Kategorien** | Siehe oben |
| **"Tausch" Status berücksichtigen?** | Siehe oben |
| **Getauschte Geräte archivieren?** | Siehe oben |
| **SYS-ID ebenfalls tauschen?** | Siehe oben |

Durch einen Klick auf den Button **Gerätetausch starten** wird der Tausch beider Objekte durchgeführt.

[![Objekte tauschen](../assets/images/de/i-doit-add-ons/replacement/3-rp.png)](../assets/images/de/i-doit-add-ons/replacement/3-rp.png)

## Tausch nach Arbeitsplatzsystemen

Ein Vorauswahl für den Tausch kann über zugeordnete Arbeitsplätze erfolgen. Unter **Add-ons → Gerätetausch → Tausch nach Arbeitsplatzsystemen** wird zuerst ein Objekttyp ausgewählt. Danach erscheinen alle Objekte vom Typ **Arbeitsplatz**, in deren Kategorie **Arbeitsplatzkomponenten** Objekte diesen Typs zugeordnet sind. Von jeweils einem Arbeitsplatz wird ein Objekt zum Tauschen ausgewählt. Über den Button **Ausgewählte Objekte tauschen** gelangt man zur Oberfläche **Add-ons → Gerätetausch → Objekte tauschen**.

[![Tausch nach Arbeitsplatzsystemen](../assets/images/de/i-doit-add-ons/replacement/4-rp.png)](../assets/images/de/i-doit-add-ons/replacement/4-rp.png)

## Tausch-Report

Ein Bericht über bisher durchgeführte Tauschaktionen wird unter **Add-ons → Gerätetausch → Tausch-Report** generiert. Die Oberfläche ist alternativ über **Extras → Report Manager → Views → Tausch-Report** zu erreichen.

[![Tausch-Report](../assets/images/de/i-doit-add-ons/replacement/5-rp.png)](../assets/images/de/i-doit-add-ons/replacement/5-rp.png)

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 07.11.2023 | [Bug] No changes are recorded in the logbook<br>[Bug] Signal error when downloading a document from the document repository |
| 1.4 | 05.09.2022 | [Task] HP 8.0 Compatibility<br>[Task] Design Compatibility |
| 1.3.2 | 21.02.2022 | [Bug] Use Of German Language in English Version Of Object Swap |
| 1.3.1 | 10.08.2020 | [Bug] The location is lost during swap<br>[Bug] Information is deleted when objects are exchanged |
| 1.3 | 20.05.2019 | [Verbesserung] Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report<br>[Bug] Suchindex wird nach einem Gerätetausch nicht erneuert<br>[Bug] Gerätetausch verwendet Workflow Tabellen<br>[Bug] Tausch-Status im englischen als einziger CMDB-Status mit großem Anfangsbuchstaben<br>[Bug] Fehler beim Aufruf des Tausch-Reports (Gerätetausch)<br> |
| 1.2.5 | 02.05.2017 | [Bug] Fehlermeldung im AdminCenter bei der De-Installation von SWAP_CI<br> |
| 1.2.4 | 08.03.2017 | [Bug] Schaltfläche "Tauschen" aus Erweiterung "Gerätetausch" in Objektlisten hat keine Auswirkung<br>[Bug] PHP und i-doit Kompatibilität verbessert<br> |
| 1.2.3 | 08.10.2015 | [Verbesserung]  Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report<br>[Bug] Gerätetausch stellt Fehlermeldung dar, wenn man sich dessen Kontext einloggt.<br>[Bug] SQL Fehler verhindert das auswählen von Kategorien zum Tausch<br> |
| 1.2.2 | 09.03.2015 | [Bug] SwapCI-Modul verursacht Fehler falls Mandant das Modul nicht installiert hat<br> |
| 1.2.1 | 14.04.2014 | Initiales Release |
