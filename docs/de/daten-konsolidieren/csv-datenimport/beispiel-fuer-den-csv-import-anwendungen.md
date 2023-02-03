In diesem Beispiel wollen wir Anwendungen importieren. Wir möchten so viele Informationen zu einer Anwendung importieren wie möglich.  

Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft

  

  
Für den Import können wir folgende Informationen importieren:

*   Objekttyp → Um welchen Objekttypen soll es sich Handeln
*   Objekt-Titel → Wie heißt die Anwendung
*   Anwendung - Spezifikation → Welche Spezifikation hat die Anwendung?
*   Anwendung - Hersteller → Wer hat die Anwendung hergestellt?
*   Anwendung - Installationsart → Wird die Anwendung automatisch oder manuell installiert?
*   Anwendung - Registrierungs-Key → Welcher Registrierungs-Key wurde verwendet?
*   Anwendung - Installationspfad → Wie lautet der Installationspfad?
*   Anwendung-Varianten - Bezeichnung → Wie soll die Variante bezeichnet werden?
*   Anwendung-Varianten - Variante → Wie wurde die Variante bezeichnet?
*   Anwendung-Version - Versionsnummer → Welche Versionsnummern gibt es?
*   Anwendung-Version - Servicepack → Welche Servicepacks gibt es?
*   Anwendung-Version - Kernel → Welche Kernel Versionen gibt es?
*   Anwendung-Version - Patchlevel → Welche Patchlevel gibt es?

  

Beispiel CSV Datei für diesen Import:

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-file.png)Import Anwendungen.csv](/download/attachments/97289021/Import%20Anwendungen.csv?version=3&modificationDate=1620656583610&api=v2)

**Import Anwendungen.csv** Quelle erweitern

[expand source](#)[?](#)

`Objekttyp;ObjektName;Anwendungen - Spezifikation;Anwendung - Hersteller;Anwendung - Installationsart;Anwendung - Registrierungs-Key;Anwendung - Installationspfad;Anwendungen: Varianten - Bezeichnung;Anwendungen: Varianten - Variante;Version - Versionsnummer;Version - Servicepack;Version - Kernel;Version - Patchlevel`

`C__OBJTYPE__APPLICATION;Anwendung;Spezifikation;"Hersteller Alpha";Automatisch;"Kein RegKey";"C:\Program Files\Anwendung";Anwendung PRO;Pro;1.0;Service Pack 1;;1`

`C__OBJTYPE__APPLICATION;Anwendungx;Spezifikation;"Hersteller Beta";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungx";Anwendungx PRO,Anwendungx ENTERPRISE;Pro,Enterprise;2,3;Service Pack 1,Service Pack 2;;1,2`

`C__OBJTYPE__APPLICATION;Anwendungy;Spezifikation;"Hersteller Gamma";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungy";Anwendungy PRO,Anwendungy ENTERPRISE,Anwendungy BUSINESS;Pro,Enterprise,Business;1.5,2.0,2.5;Service Pack 1,Service Pack 2,Service Pack 3;;5,6,7`

`C__OBJTYPE__APPLICATION;Anwendungz;Spezifikation;"Hersteller Delta";Automatisch;"Kein RegKey";"/etc/Anwendungz/";Anwendungz PRO,Anwendungz ENTERPRISE,Anwendungz BUSINESS;Pro,Enterprise,Business;10,11,12;;4.19.37;2,3,4`

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt. Da wir neue Anwendungen erstellen, sowie Daten zu diesen Anwendungen.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Einstellungen im oberen Bereich bleiben auf den Standard Einstellungen und wir klicken auf Mapping vorbereiten.

![](/download/attachments/97289021/optionen.png?version=3&modificationDate=1620647754227&api=v2&effects=drop-shadow)

Jetzt können wir im unteren Bereich die Import Konfiguration wie folgt vornehmen, und danach den Import Vorgang starten:

![](/download/attachments/97289021/zuweisungen.png?version=3&modificationDate=1622626244567&api=v2&effects=drop-shadow)

Sollten wir alles richtig gemacht haben, erscheinen nun die einzelnen Anwendungen in der Listenansicht.

![](/download/attachments/97289021/liste.png?version=1&modificationDate=1620646861669&api=v2&effects=drop-shadow)

Außerdem sind die Kategorien `Anwendungen → Varianten` und `Version` gefüllt.

![](/download/attachments/97289021/varienten.png?version=2&modificationDate=1620648670024&api=v2&effects=drop-shadow)

![](/download/attachments/97289021/version.png?version=2&modificationDate=1620648684363&api=v2&effects=drop-shadow)