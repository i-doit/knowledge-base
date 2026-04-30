---
title: Beispiel Lizenzen
description: "Dieses Beispiel baut auf dem CSV Import von Anwendungen auf. Du importierst Lizenzen mit allen relevanten Schluessel- und Laufzeitinformationen."
icon:
status:
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 34 geprüft"

Dieses Beispiel baut auf dem [CSV Import von Anwendungen](beispiel-fuer-den-csv-import-anwendungen.md) auf. Du importierst Lizenzen mit allen relevanten Schlüssel- und Laufzeitinformationen.

### Benötigte Informationen

-   Objekttyp → Welcher Objekttyp wird angelegt?
-   Objektname → Name der Lizenz
-   Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ → Einzel- oder Volumenlizenz?
-   Lizenzzuweisung: Lizenzschlüssel - Anzahl → Wie viele Lizenzen?
-   Lizenzzuweisung: Lizenzschlüssel - Schlüssel → Wie lautet der Lizenzschlüssel?
-   Lizenzzuweisung: Lizenzschlüssel - Seriennummer → Welche Seriennummer?
-   Lizenzzuweisung: Lizenzschlüssel - Startdatum → Ab wann gilt die Lizenz?
-   Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum → Wann läuft sie ab?
-   Lizenzzuweisung: Lizenzschlüssel - Einzelpreis → Was kostet eine Lizenz?

### Datenformate beachten

!!! note "Achte beim Import auf die korrekten Datenformate."

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)

Folgende Formate erwartet i-doit:

- **Dialog-Bezeichnungen:** Deutsche Sprache, z.B. `Einzel-Lizenz`
- **Datumsformat:** `DD.MM.YYYY` (z.B. `01.01.2021`)
- **Numerisches Format:** `X.XXX,XX` (z.B. `9.999,99`). Da Multi-Values kommasepariert angegeben werden, verwende den Punkt fur Nachkommastellen (z.B. `1000.99`)

Beispiel CSV Datei für diesen Import:

[Import-Lizenzen.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Import-Lizenzen.csv){ .md-button .md-button--primary }

??? example "Import Lizenzen.csv"
    ```text
    Objekttyp;ObjektName;Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ;Lizenzzuweisung: Lizenzschlüssel - Anzahl;Lizenzzuweisung: Lizenzschlüssel - Schlüssel;Lizenzzuweisung: Lizenzschlüssel - Seriennummer;Lizenzzuweisung: Lizenzschlüssel - Startdatum;Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum;Lizenzzuweisung: Lizenzschlüssel - Einzelpreis
    C__OBJTYPE__LICENCE;Lizenz-X;Volumen-Lizenz;1000;Lizenz-X-111-LASKDZHW;123456789;01.01.2021;31.12.2021;999.99
    C__OBJTYPE__LICENCE;Lizenz-Y;Einzel-Lizenz;1;Lizenz-Y-211-OIHUASFD;1123456789;01.06.2021;31.12.2021;1399.99
    C__OBJTYPE__LICENCE;Lizenz-Z;Volumen-Lizenz,Volumen-Lizenz;100,50;Lizenz-Z-311-IGUHOPSD,Lizenz-Z-322-IUHGASD;11123456789,11223456789;01.01.2021,01.05.2021;31.12.2021,30.04.2021;1000.99,500.99
    ```

Dieser Import hat keine Abhängigkeiten.

### Schritt-fur-Schritt-Anleitung

1. Navigiere zum CSV-Import unter **Extras → Import → CSV Import**
2. Lade die CSV-Datei hoch und klicke auf **Fur Import verwenden**
3. Setze die Multivalue-Kategorien auf **Kommasepariert**

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)

4. Konfiguriere die Zuweisungen wie im Screenshot gezeigt und starte den Import

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)

### Ergebnis

Die importierten Lizenzen erscheinen in der Listenansicht:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)

Die Kategorien **Lizenzzuweisung** und **Lizenzzuweisung: Lizenzschlüssel** sind gefullt:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)

## Import von Objekten mit Volumenlizenzen

Möchtest du ein Objekt mit einer Volumenlizenz und dem zugehörigen Key importieren, trage die Lizenz uber die Kategorie **Softwarezuweisung** ein. Die CSV-Datei muss folgende Syntax haben:

[Volumen-Lizenz.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Volumen-Lizenz.csv){ .md-button .md-button--primary }

??? example "Volumen-Lizenz.csv"
    ```text
    Titel;"Anwendung";Lizenz Schlüssel
    DESKTOP-XMS3R8;"Windows 8 Development Essentials";"Development;MDW-4253-1257"
    DESKTOP-DK2MD9L;"Windows 10 Pro";"Professional;EVT-2024-9931"
    ```

Konfiguriere das Mapping in i-doit wie folgt:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/7-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/7-csv-lic.png)

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/8-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/8-csv-lic.png)

Nach dem Import findest du in der Kategorie **Softwarezuweisung** des Objekts einen neuen Eintrag mit Lizenz und Schlüssel:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/9-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/9-csv-lic.png)
