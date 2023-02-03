Ein neuer Switch wird in Betrieb genommen, doch alle Verbindungen sollen erhalten bleiben. Wer hier nicht im Anschluss alle Anschlüsse neu dokumentieren will, nutzt das [Add-on](/display/de/i-doit+pro+Add-ons) `**Gerätetausch**. Diese erlaubt den Austausch von` [Objekten](/display/de/Struktur+der+IT-Dokumentation) bei konfigurierbarer Übernahme der bestehenden Verbindungen.  
Das Add-on hieß zuvor SwapCI bis zur Version 1.3.1.

Download und Installation
-------------------------

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons)".

Konfiguration
-------------

Die Konfiguration befindet sich unter **`Verwaltung → CMDB Einstellungen → Gerätetausch → Konfiguration`**. Sie dient größtenteils für die Definition von Standardwerten, um häufiges Tauschen zu standardisieren und zu beschleunigen.

| Option | Beschreibung |
| --- | --- |
| Option | Beschreibung |
| --- | --- |
| `**Auswählbare Objekt-Typen**` | Welche Objekte welchen Typs getauscht werden können, wird hier festgelegt. Zudem wird pro [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) festgelegt, welche [Kategorien](/display/de/Struktur+der+IT-Dokumentation) (und somit welche [Attribute](/display/de/Struktur+der+IT-Dokumentation)) getauscht werden sollen. Diejenigen Kategorien, die nicht ausgewählt werden, bleiben von einem Tausch unberührt. |
| `**CMDB Status für Tauschgeräte**` | Die Auswahl, welche Objekte zum Tauschen angeboten werden, kann über deren [`**CMDB-Status**`](/display/de/Lebens-+und+Dokumentationszyklus) eingeschränkt werden. |
| `**"Tausch" Status berücksichtigen?**` | Wenn der Tausch-Status berücksichtigt wird, erhält das getauschte Gerät den `**CMDB-Status**` `**Getauscht**` und das Tauschgerät den `**CMDB-Status In Betrieb**`. |
| `**Getauschte Geräte archivieren?**` | Das das Objekt, das getauscht wird, den [Zustand](/display/de/Lebens-+und+Dokumentationszyklus) `**Archiviert**` erhalten? |
| `**SYS-ID ebenfalls tauschen?**` | Soll das Attribut `**SYS-ID**` der Kategorie `**Allgemein**` getauscht werden? Hierbei handelt es sich um [ein Attribut zur eindeutigen Referenzierung](/display/de/Eindeutige+Referenzierungen). |

Rechtevergabe
-------------

Unter `**Verwaltung → Rechtesystem → Rechtevergabe → Gerätetausch**` können [Rechte für Personen und Personengruppen](/display/de/Rechteverwaltung) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| Bedingung | Beschreibung |
| --- | --- |
| `**Objekte Tauschen**` | Darf der Benutzer Objekte tauschen? |
| `**Tauschen nach Arbeitsplatzsystemen**` | Darf der Benutzer Arbeitsplatzkomponenten tauschen? |
| **`Gerätetausch Konfiguration`** | Darf der Benutzer die Konfiguration (siehe oben) anpassen? |
| `**Gerätetausch-Schaltfläche in der Objektliste**` | Der Benutzer hat über [die Aktionsleiste der Objekt-Liste](/display/de/Aktionsleiste) die Möglichkeit, Objekte miteinander zu tauschen. Dort erscheint der Button `**Tauschen**`. |
| `**Gerätetausch-Schaltfläche in Objekten**` | Der Benutzer hat über die Aktionsleiste innerhalb eines Objekts die Möglichkeit, das Objekt durch ein anderes zu tauschen. Dort erscheint der Button `**Tauschen**`. |

Voraussetzungen
---------------

Bevor zwei Objekte miteinander getauscht werden können, müssen folgende Voraussetzungen erfüllt sein:

*   Beide Objekte haben denselben Objekttyp.
*   Ein Objekt darf nicht mit sich selbst getauscht werden.

Objekte tauschen
----------------

Um ein Objekt gegen ein anderes zu tauschen, gibt es drei Wege:

1.  Innerhalb einer [Objekt-Liste](/display/de/Objekt-Liste) beide Objekte auswählen und in der [Aktionsleiste](/display/de/Aktionsleiste) den Button `**Tauschen**` klicken
2.  Innerhalb eines Objekts in der Aktionsleiste den Button `**Tauschen**` klicken und anschließend das Tauschgerät unter `**Lagerndes Objekt**` auswählen
3.  Unter `**Extras → Gerätetausch**` die beiden Objekte unter `**Zu tauschendes Objekt**` und `**Lagerndes Objekt**` auswählen

Über den Button `**Umstellen**` können die ausgewählten Objekte vertauscht werden.

![Auswahl über Objekt-Liste](/download/attachments/61014660/de_switches.png?version=1&modificationDate=1490275938109&api=v2&effects=drop-shadow "Auswahl über Objekt-Liste")

![Auswahl über Objekt](/download/attachments/61014660/de_switch.png?version=1&modificationDate=1490275938999&api=v2&effects=drop-shadow "Auswahl über Objekt")

Nach der Auswahl der beiden Objekte können weitere Optionen angepasst werden. Die Vorauswahl stammt aus der oben genannten Konfiguration.

| Option | Beschreibung |
| --- | --- |
| Option | Beschreibung |
| --- | --- |
| `**Zu übernehmende Kategorien**` | Siehe oben |
| `**"Tausch" Status berücksichtigen?**` | Siehe oben |
| `**Getauschte Geräte archivieren?**` | Siehe oben |
| `**SYS-ID ebenfalls tauschen?**` | Siehe oben |

Durch einen Klick auf den Button `**Gerätetausch starten**` wird der Tausch beider Objekte durchgeführt.

![Objekte tauschen](/download/attachments/61014660/de_ger%C3%A4tetausch_objekte_tauschen.png?version=1&modificationDate=1490277048420&api=v2&effects=drop-shadow "Objekte tauschen")

Tausch nach Arbeitsplatzsystemen
--------------------------------

Ein Vorauswahl für den Tausch kann über zugeordnete Arbeitsplätze erfolgen. Unter `**Extras → Gerätetausch → Tausch nach Arbeitsplatzsystemen**` wird zuerst ein Objekttyp ausgewählt. Danach erscheinen alle Objekte vom Typ `**Arbeitsplatz**`, in deren Kategorie `**Arbeitsplatzkomponenten**` Objekte diesen Typs zugeordnet sind. Von jeweils einem Arbeitsplatz wird ein Objekt zum Tauschen ausgewählt. Über den Button `**Ausgewählte Objekte tauschen**` gelangt man zur Oberfläche `**Extras → Gerätetausch → Objekte tauschen**`.

![Tausch nach Arbeitsplatzsystemen](/download/attachments/61014660/de_ger%C3%A4tetausch_arbeitsplatz.png?version=1&modificationDate=1490278338828&api=v2&effects=drop-shadow "Tausch nach Arbeitsplatzsystemen")

Tausch-Report
-------------

Ein Bericht über bisher durchgeführte Tauschaktionen wird unter `**Extras → Gerätetausch → Tausch-Report**` generiert. Die Oberfläche ist alternativ über `**Extras → Report Manager → Views → Tausch-Report**` zu erreichen.

![Tausch-Report](/download/attachments/61014660/de_ger%C3%A4tetausch_report.png?version=1&modificationDate=1490279581563&api=v2&effects=drop-shadow "Tausch-Report")

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| Version | Datum | Changelog |
| --- | --- | --- |
| 1.4 | 05.09.2022 | \[Task\]        PHP 8.0 Compatibility  <br>\[Task\]        Design Compatibility |
| 1.3.2 | 21.02.2022 | \[Bug\] Use Of German Language in English Version Of Object Swap |
| 1.3.1 | 10.08.2020 | \[Bug\] The location is lost during swap  <br>\[Bug\] Information is deleted when objects are exchanged |
| 1.3 | 20.05.2019 | ```<br>[Verbesserung] Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report[Bug] Suchindex wird nach einem Gerätetausch nicht erneuert[Bug] Gerätetausch verwendet Workflow Tabellen[Bug] Tausch-Status im englischen als einziger CMDB-Status mit großem Anfangsbuchstaben[Bug] Fehler beim Aufruf des Tausch-Reports (Gerätetausch)<br>``` |
| 1.2.5 | 02.05.2017 | ```<br>[Bug]           Fehlermeldung im AdminCenter bei der De-Installation von SWAP_CI<br>``` |
| 1.2.4 | 08.03.2017 | ```<br>[Bug]           Schaltfläche "Tauschen" aus Erweiterung "Gerätetausch" in Objektlisten hat keine Auswirkung<br>```<br><br>```<br>[Bug]           PHP und i-doit Kompabilität verbessert<br>``` |
| 1.2.3 | 08.10.2015 | ```<br>[Verbesserung]  Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report<br>```<br><br>```<br>[Bug]           Gerätetausch stellt Fehlermeldung dar, wenn man sich dessen Kontext einloggt.<br>```<br><br>```<br>[Bug]           SQL Fehler verhindert das auswählen von Kategorien zum tausch<br>``` |
| 1.2.2 | 09.03.2015 | ```<br>[Bug]           SwapCI-Modul verursacht Fehler falls Mandant das Modul nicht installiert hat<br>``` |
| 1.2.1 | 14.04.2014 | Initiales Release |