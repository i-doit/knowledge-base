---
title: Beispiel Anwendungen
description: In diesem Beispiel importierst du Anwendungen mit möglichst vielen Detailinformationen per CSV.
icon:
status:
lang: de
---
# Beispiel Anwendungen

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

In diesem Beispiel importierst du Anwendungen mit möglichst vielen Detailinformationen per CSV.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

### Welche Daten kannst du importieren?

-   Objekttyp → Um welchen Objekttypen soll es sich handeln
-   Objekt-Titel → Wie heisst die Anwendung
-   Anwendung - Spezifikation → Welche Spezifikation hat die Anwendung?
-   Anwendung - Hersteller → Wer hat die Anwendung hergestellt?
-   Anwendung - Installationsart → Wird die Anwendung automatisch oder manuell installiert?
-   Anwendung - Registrierungs-Key → Welcher Registrierungs-Key wurde verwendet?
-   Anwendung - Installationspfad → Wie lautet der Installationspfad?
-   Anwendung-Varianten - Bezeichnung → Wie soll die Variante bezeichnet werden?
-   Anwendung-Varianten - Variante → Wie wurde die Variante bezeichnet?
-   Anwendung-Version - Versionsnummer → Welche Versionsnummern gibt es?
-   Anwendung-Version - Servicepack → Welche Servicepacks gibt es?
-   Anwendung-Version - Kernel → Welche Kernel Versionen gibt es?
-   Anwendung-Version - Patchlevel → Welche Patchlevel gibt es?

Beispiel CSV Datei für diesen Import:

[Import-Anwendungen.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/Import-Anwendungen.csv){ .md-button .md-button--primary }

??? example "Import-Anwendungen.csv"
    ```text
    Objekttyp;ObjektName;Anwendungen - Spezifikation;Anwendung - Hersteller;Anwendung - Installationsart;Anwendung - Registrierungs-Key;Anwendung - Installationspfad;Anwendungen: Varianten - Bezeichnung;Anwendungen: Varianten - Variante;Version - Versionsnummer;Version - Servicepack;Version - Kernel;Version - Patchlevel
    C__OBJTYPE__APPLICATION;Anwendung;Spezifikation;"Hersteller Alpha";Automatisch;"Kein RegKey";"C:\Program Files\Anwendung";Anwendung PRO;Pro;1.0;Service Pack 1;;1
    C__OBJTYPE__APPLICATION;Anwendungx;Spezifikation;"Hersteller Beta";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungx";Anwendungx PRO,Anwendungx ENTERPRISE;Pro,Enterprise;2,3;Service Pack 1,Service Pack 2;;1,2
    C__OBJTYPE__APPLICATION;Anwendungy;Spezifikation;"Hersteller Gamma";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungy";Anwendungy PRO,Anwendungy ENTERPRISE,Anwendungy BUSINESS;Pro,Enterprise,Business;1.5,2.0,2.5;Service Pack 1,Service Pack 2,Service Pack 3;;5,6,7
    C__OBJTYPE__APPLICATION;Anwendungz;Spezifikation;"Hersteller Delta";Automatisch;"Kein RegKey";"/etc/Anwendungz/";Anwendungz PRO,Anwendungz ENTERPRISE,Anwendungz BUSINESS;Pro,Enterprise,Business;10,11,12;;4.19.37;2,3,4
    ```

Dieser Import hat keine Abhängigkeiten -- du erstellst neue Anwendungen inklusive aller zugehörigen Daten.

### Schritt-fur-Schritt-Anleitung

1. Navigiere zum CSV-Import unter **Extras → Import → CSV Import**
2. Lade die CSV-Datei hoch und klicke auf **Fur Import verwenden**
3. Belasse die Einstellungen im oberen Bereich auf den Standardwerten und klicke auf **Mapping vorbereiten**

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)

4. Konfiguriere im unteren Bereich die Zuweisungen wie im Screenshot gezeigt
5. Starte den Import

[![CSV Zuweisung](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)

### Ergebnis

Nach dem Import findest du die Anwendungen in der Listenansicht:

[![Anwendungs-Objekte](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)

Die Kategorien `Anwendungen → Varianten` und `Version` sind ebenfalls gefullt:

[![Anwendungs-Varianten](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)

[![Anwendungs-Versionen](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)
