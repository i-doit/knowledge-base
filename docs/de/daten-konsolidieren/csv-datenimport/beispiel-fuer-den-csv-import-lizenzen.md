# Beispiel Lizenzen

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

In diesem Beispiel bauen wir auf den [CSV Import von Anwendungen](beispiel-fuer-den-csv-import-anwendungen.md) auf und wollen Lizenzen importieren.

Für den Import benötigen wir folgende Informationen:

-  Objekttyp → Um welchen Objekttypen soll es sich Handeln
-  Objektname → den Namen des Clients
-  Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ → Welcher Lizenz Typ wird importiert, Einzel- oder Volumen?
-  Lizenzzuweisung: Lizenzschlüssel - Anzahl → Welche Anzahl an Lizenzen gibt es?
-  Lizenzzuweisung: Lizenzschlüssel - Schlüssel→ Wie lautet der Lizenzschlüssel?
-  Lizenzzuweisung: Lizenzschlüssel - Seriennummer → Welche Seriennummer soll zugeordnet werden?
-  Lizenzzuweisung: Lizenzschlüssel - Startdatum → Ab wann kann die Lizenz verwendet werden?
-  Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum → Wann läuft die Lizenz ab?
-  Lizenzzuweisung: Lizenzschlüssel - Einzelpreis → Was kostet eine Lizenz?

!!! note "Bei jedem Import muss auch die Darstellung der Daten beachtet werden."

Zum Beispiel:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)

Es werden Dialog Bezeichnungen in deutscher Sprache erwartet zum Beispiel: Einzel-Lizenz
Hier wird das Datumsformat DD.MM.YYYY (01.01.2021) erwartet
Und das Numerische Format: X.XXX,XX (9.999,99) da wir allerdings Multi-Values Kommasepariert angeben verwenden wir den Punkt für die "nachkommastellen" also 1000.99

Beispiel CSV Datei für diesen Import:

[Import Lizenzen.csv](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Import-Lizenzen.csv)

??? example "Import Lizenzen.csv"

    ```text
    Objekttyp;ObjektName;Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ;Lizenzzuweisung: Lizenzschlüssel - Anzahl;Lizenzzuweisung: Lizenzschlüssel - Schlüssel;Lizenzzuweisung: Lizenzschlüssel - Seriennummer;Lizenzzuweisung: Lizenzschlüssel - Startdatum;Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum;Lizenzzuweisung: Lizenzschlüssel - Einzelpreis
    C__OBJTYPE__LICENCE;Lizenz-X;Volumen-Lizenz;1000;Lizenz-X-111-LASKDZHW;123456789;01.01.2021;31.12.2021;999.99
    C__OBJTYPE__LICENCE;Lizenz-Y;Einzel-Lizenz;1;Lizenz-Y-211-OIHUASFD;1123456789;01.06.2021;31.12.2021;1399.99
    C__OBJTYPE__LICENCE;Lizenz-Z;Volumen-Lizenz,Volumen-Lizenz;100,50;Lizenz-Z-311-IGUHOPSD,Lizenz-Z-322-IUHGASD;11123456789,11223456789;01.01.2021,01.05.2021;31.12.2021,30.04.2021;1000.99,500.99
    ```

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Multivalue-Kategorien setzen wir auf Kommasepariert.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)

Jetzt können wir im unteren Bereich die Import Konfiguration wie folgt vornehmen und danach den Import Vorgang starten:

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)

Solltest du alles richtig gemacht haben, erscheinen nun die einzelnen Lizenzen in der Listenansicht.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)

Außerdem sind die KategorienLizenzzuweisungund Lizenzzuweisung: Lizenzschlüssel gefüllt.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)
