---
title: Beispiel Standorte
description: "In diesem Beispiel erstellst du eine komplette Standortstruktur (Gebaeude, Etagen, Raeume) per CSV-Import."
icon:
status:
lang: de
---
# Beispiel Standorte

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

In diesem Beispiel erstellst du eine komplette Standortstruktur (Gebäude, Etagen, Räume) per CSV-Import.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

### Benötigte Informationen

-   Den selbst erstellten Objekttyp Etage/Basement mit der Objekttyp-Konstante `C__OBJECT_TYPE__FLOOR`
-   Objektname → Name des Gebaudes, der Etage oder des Raumes
-   Standort → Unter welcher Lokation soll sich das Objekt befinden?
-   Objekttyp → Welcher Objekttyp wird angelegt?

Beispiel CSV Datei für diesen Import:

[Import-Standorte.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/Import-Standorte.csv){ .md-button .md-button--primary }

Der Aufbau der CSV sieht wie folgt aus:

??? example "Import Standort.csv"
    ```text
    ObjektName;Standort;Objekttyp
    HEADQUARTER;Root location;C__OBJTYPE__BUILDING
    Basement;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    First Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Second Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Third Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    RAUM 0.001;Basement;C__OBJTYPE__ROOM
    RAUM 0.002;Basement;C__OBJTYPE__ROOM
    RAUM 0.003;Basement;C__OBJTYPE__ROOM
    RAUM 0.004;Basement;C__OBJTYPE__ROOM
    RAUM 0.005;Basement;C__OBJTYPE__ROOM
    RAUM 0.006;Basement;C__OBJTYPE__ROOM
    RAUM 0.007;Basement;C__OBJTYPE__ROOM
    RAUM 0.008;Basement;C__OBJTYPE__ROOM
    RAUM 0.009;Basement;C__OBJTYPE__ROOM
    RAUM 0.010;Basement;C__OBJTYPE__ROOM
    RAUM 0.011;Basement;C__OBJTYPE__ROOM
    RAUM 0.012;Basement;C__OBJTYPE__ROOM
    RAUM 0.013;Basement;C__OBJTYPE__ROOM
    RAUM 0.014;Basement;C__OBJTYPE__ROOM
    RAUM 1.001;First Floor;C__OBJTYPE__ROOM
    RAUM 1.002;First Floor;C__OBJTYPE__ROOM
    RAUM 1.003;First Floor;C__OBJTYPE__ROOM
    RAUM 1.004;First Floor;C__OBJTYPE__ROOM
    RAUM 1.005;First Floor;C__OBJTYPE__ROOM
    RAUM 1.006;First Floor;C__OBJTYPE__ROOM
    RAUM 1.007;First Floor;C__OBJTYPE__ROOM
    RAUM 1.008;First Floor;C__OBJTYPE__ROOM
    RAUM 1.009;First Floor;C__OBJTYPE__ROOM
    RAUM 1.010;First Floor;C__OBJTYPE__ROOM
    RAUM 1.011;First Floor;C__OBJTYPE__ROOM
    RAUM 1.012;First Floor;C__OBJTYPE__ROOM
    RAUM 1.013;First Floor;C__OBJTYPE__ROOM
    RAUM 1.014;First Floor;C__OBJTYPE__ROOM
    RAUM 2.001;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.002;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.003;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.004;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.005;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.006;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.007;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.008;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.009;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.010;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.011;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.012;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.013;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.014;Second Floor;C__OBJTYPE__ROOM
    RAUM 3.001;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.002;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.003;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.004;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.005;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.006;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.007;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.008;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.009;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.010;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.011;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.012;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.013;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.014;Third Floor;C__OBJTYPE__ROOM
    ```

### Reihenfolge in der CSV-Datei

Da die Standorte aufeinander aufbauen, ist die Reihenfolge in der CSV-Datei entscheidend. Die Root-Lokation existiert bereits. Innerhalb davon gilt die Hierarchie:

Root-Lokation → Gebäude → Etage → Raum

In der CSV-Datei stehen daher zuerst die Gebäude, dann die Etagen und zuletzt die Räume.

[![Standortsicht](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)

Jede Zeile enthält zusätzlich die Objekttyp-Konstante. Diese findest du in der Objekttyp-Konfiguration:

[![Objekttyp-Konfigurtion](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)

### Schritt-fur-Schritt-Anleitung

1. Navigiere zum CSV-Import unter **Extras → Import → CSV Import**
2. Lade die CSV-Datei hoch und klicke auf **Fur Import verwenden**
3. Belasse die Einstellungen im oberen Bereich auf den Standardwerten

[![CSV Import optionen](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)

4. Klicke auf **Mapping vorbereiten** und konfiguriere die Zuweisungen wie im Screenshot

[![CSV Objekt Matching Profile](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)

5. Starte den Import

### Ergebnis

In der Standortansicht siehst du nun die vollständige Hierarchie:

[![Standortsicht](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)

So sieht die Konfiguration des selbst erstellten Objekttyps **Etage** aus:

[![Objekttyp-Konfigurtion](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)
