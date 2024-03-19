<!-- TRANSLATED by md-translate -->
# Beispiel Anwendungen

# Exemple d'applications

In diesem Beispiel wollen wir Anwendungen importieren. Wir möchten so viele Informationen zu einer Anwendung importieren wie möglich.

Dans cet exemple, nous voulons importer des applications. Nous voulons importer autant d'informations que possible sur une application.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

! !! note "Cet article a été vérifié en dernier pour i-doit version 1.16.2"

Für den Import können wir folgende Informationen importieren:

Pour l'importation, nous pouvons importer les informations suivantes :

* Objekttyp → Um welchen Objekttypen soll es sich Handeln
* Objekt-Titel → Wie heißt die Anwendung
* Anwendung - Spezifikation → Welche Spezifikation hat die Anwendung?
* Anwendung - Hersteller → Wer hat die Anwendung hergestellt?
* Anwendung - Installationsart → Wird die Anwendung automatisch oder manuell installiert?
* Anwendung - Registrierungs-Key → Welcher Registrierungs-Key wurde verwendet?
* Anwendung - Installationspfad → Wie lautet der Installationspfad?
* Anwendung-Varianten - Bezeichnung → Wie soll die Variante bezeichnet werden?
* Anwendung-Varianten - Variante → Wie wurde die Variante bezeichnet?
* Anwendung-Version - Versionsnummer → Welche Versionsnummern gibt es?
* Anwendung-Version - Servicepack → Welche Servicepacks gibt es?
* Anwendung-Version - Kernel → Welche Kernel Versionen gibt es?
* Anwendung-Version - Patchlevel → Welche Patchlevel gibt es?

* Type d'objet → De quel type d'objet s'agit-il ?
* Titre de l'objet → Quel est le nom de l'application ?
* Application - Spécification → Quelle est la spécification de l'application ?
* Application - fabricant → Qui a fabriqué l'application ?
* Application - Mode d'installation → L'application est-elle installée automatiquement ou manuellement ?
* Application - Clé de registre → Quelle clé de registre a été utilisée ?
* Application - Chemin d'installation → Quel est le chemin d'installation ?
* Application-Variantes - Désignation → Comment doit-on désigner la variante ?
* Application-Variantes - Variante → Comment la variante a-t-elle été désignée ?
* Application-Version - Numéro de version → Quels sont les numéros de version ?
* Version de l'application - Servicepack → Quels sont les Servicepacks disponibles ?
* Version de l'application - Noyau → Quelles sont les versions du noyau ?
* Version de l'application - Niveau de patch → Quels sont les niveaux de patch disponibles ?

Beispiel CSV Datei für diesen Import:

Exemple de fichier CSV pour cette importation :

[Import-Anwendungen.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/Import-Anwendungen.csv){ .md-button .md-button--primary }

[Applications d'importation.csv :material-file-download :](../../assets/images/fr/consolidation des données/csv-import/csv-applications/Import-applications.csv){ .md-button .md-button--primary }

??? example "Import-Anwendungen.csv"

? ?? exemple "Applications d'importation.csv

```
```text
Objekttyp;ObjektName;Anwendungen - Spezifikation;Anwendung - Hersteller;Anwendung - Installationsart;Anwendung - Registrierungs-Key;Anwendung - Installationspfad;Anwendungen: Varianten - Bezeichnung;Anwendungen: Varianten - Variante;Version - Versionsnummer;Version - Servicepack;Version - Kernel;Version - Patchlevel
C__OBJTYPE__APPLICATION;Anwendung;Spezifikation;"Hersteller Alpha";Automatisch;"Kein RegKey";"C:\Program Files\Anwendung";Anwendung PRO;Pro;1.0;Service Pack 1;;1
C__OBJTYPE__APPLICATION;Anwendungx;Spezifikation;"Hersteller Beta";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungx";Anwendungx PRO,Anwendungx ENTERPRISE;Pro,Enterprise;2,3;Service Pack 1,Service Pack 2;;1,2
C__OBJTYPE__APPLICATION;Anwendungy;Spezifikation;"Hersteller Gamma";Automatisch;"Kein RegKey";"C:\Program Files\Anwendungy";Anwendungy PRO,Anwendungy ENTERPRISE,Anwendungy BUSINESS;Pro,Enterprise,Business;1.5,2.0,2.5;Service Pack 1,Service Pack 2,Service Pack 3;;5,6,7
C__OBJTYPE__APPLICATION;Anwendungz;Spezifikation;"Hersteller Delta";Automatisch;"Kein RegKey";"/etc/Anwendungz/";Anwendungz PRO,Anwendungz ENTERPRISE,Anwendungz BUSINESS;Pro,Enterprise,Business;10,11,12;;4.19.37;2,3,4
```
```

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt. Da wir neue Anwendungen erstellen, sowie Daten zu diesen Anwendungen.

Cette importation ne suppose aucune dépendance. Comme nous créons de nouvelles applications, ainsi que des données relatives à ces applications.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Einstellungen im oberen Bereich bleiben auf den Standard Einstellungen und wir klicken auf Mapping vorbereiten.

Pour l'importation, nous nous rendons à nouveau dans la zone d'importation CSV. Les paramètres dans la partie supérieure restent sur les paramètres par défaut et nous cliquons sur Préparer le mapping.

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)

[ ![CSV Mapping](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/1-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/1-csva.png)

Jetzt können wir im unteren Bereich die Import Konfiguratio]n wie folgt vornehmen, und danach den Import Vorgang starten:

Dans la partie inférieure, nous pouvons maintenant procéder aux configurations d'importation comme suit, puis lancer le processus d'importation :

[![CSV Zuweisung](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)

[ ![Attribution CSV](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/2-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/2-csva.png)

Sollten wir alles richtig gemacht haben, erscheinen nun die einzelnen Anwendungen in der Listenansicht.

Si nous avons tout fait correctement, les différentes applications apparaissent maintenant dans la vue en liste.

[![Anwedungs Objekte](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)

[ ![Objets d'application](../../assets/images/fr/consolidation des données/csv-import/csv-applications/3-csva.png)](../../assets/images/fr/consolidation des données/csv-import/csv-applications/3-csva.png)

Außerdem sind die Kategorien `Anwendungen → Varianten` und `Version` gefüllt.

De plus, les catégories `Applications → Variantes` et `Version` sont remplies.

[![Anwendung Varianten](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/4-csva.png)

[ ![Application Variantes](../../assets/images/fr/consolidation des données/csv-import/csv-applications/4-csva.png)](../../assets/images/fr/consolidation des données/csv-import/csv-applications/4-csva.png)

[![Awendung Versionen](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/5-csva.png)

[ ![Application Versions](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/5-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/5-csva.png)