# Beispiel Standorte

Heute wollen wir uns einmal ein praktisches Beispiel für den CSV Import anschauen.
Unser Anwendungsfall ist das automatische erstellen der Standorte innerhalb von i-doit mithilfe einer CSV Imports.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

Wir benötigen für das erstellen der einzelnen Objekte folgende Informationen:

*   Den selbst erstellten Objekttyp Etage/Basement mit der Objekttyp Konstante - `C__OBJECT_TYPE__FLOOR`
*   Objektname → den Namen des Gebäudes, der Etage oder des Raumes
*   Standort → unterhalb welcher Lokation soll sich das Objekt befinden 
*   Objekttyp → Um welchen Objekttypen soll es sich Handeln

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

Da wir Abhängigkeiten setzen wollen die aufeinander aufbauen, ist es wichtig in der CSV Datei eine entsprechende Reihenfolge bei den Standorten einzuhalten.
Die Root Lokation ist immer die unterste Stufe und bereits vorhanden. In dieser befinden sich die einzelnen Gebäude, in den Gebäuden die einzelnen Etagen und in den Etagen die jeweiligen Räume:

 Root Lokation → Gebäude → Etage → Raum

Also kommen in der CSV Datei auch die Gebäude als erstes, dann die Etagen und als letztes die Räume.

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)

Um zu definieren welcher Objekttyp jeweils angelegt werden soll, geben wir dem Import in jeder Zeile noch die Objekttyp Konstante mit auf den Weg, diese finden wir in der Objekttyp Konfiguration:

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)

Schauen wir uns nun die Konfiguration für den Import an, im oberen Bereich können wir die Einstellungen so lassen, wie sie sind:

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)

Jetzt auf Mapping vorbereiten klicken, danach können wir die Einstellungen wie folgt anpassen:

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)

Nun sind wir soweit und können den Import starten, in der Standortansicht sollte sich danach folgendes Bild ergeben:

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)

Die Konfiguration des neu erstellten Objekttyps Etage

[![](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)
