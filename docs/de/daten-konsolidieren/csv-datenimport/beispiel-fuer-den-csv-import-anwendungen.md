# Beispiel Anwendungen

In diesem Beispiel wollen wir Anwendungen importieren. Wir möchten so viele Informationen zu einer Anwendung importieren wie möglich.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

Für den Import können wir folgende Informationen importieren:

-  Objekttyp → Um welchen Objekttypen soll es sich Handeln
-  Objekt-Titel → Wie heißt die Anwendung
-  Anwendung - Spezifikation → Welche Spezifikation hat die Anwendung?
-  Anwendung - Hersteller → Wer hat die Anwendung hergestellt?
-  Anwendung - Installationsart → Wird die Anwendung automatisch oder manuell installiert?
-  Anwendung - Registrierungs-Key → Welcher Registrierungs-Key wurde verwendet?
-  Anwendung - Installationspfad → Wie lautet der Installationspfad?
-  Anwendung-Varianten - Bezeichnung → Wie soll die Variante bezeichnet werden?
-  Anwendung-Varianten - Variante → Wie wurde die Variante bezeichnet?
-  Anwendung-Version - Versionsnummer → Welche Versionsnummern gibt es?
-  Anwendung-Version - Servicepack → Welche Servicepacks gibt es?
-  Anwendung-Version - Kernel → Welche Kernel Versionen gibt es?
-  Anwendung-Version - Patchlevel → Welche Patchlevel gibt es?

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

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt. Da wir neue Anwendungen erstellen, sowie Daten zu diesen Anwendungen.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Einstellungen im oberen Bereich bleiben auf den Standard Einstellungen und wir klicken auf Mapping vorbereiten.

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)

Jetzt können wir im unteren Bereich die Import Konfiguratio]n wie folgt vornehmen, und danach den Import Vorgang starten:

[![CSV Zuweisung](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)

Sollten wir alles richtig gemacht haben, erscheinen nun die einzelnen Anwendungen in der Listenansicht.

[![Anwedungs Objekte](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)

Außerdem sind die Kategorien `Anwendungen → Varianten` und `Version` gefüllt.

[![Anwendung Varianten](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)

[![Awendung Versionen](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)
