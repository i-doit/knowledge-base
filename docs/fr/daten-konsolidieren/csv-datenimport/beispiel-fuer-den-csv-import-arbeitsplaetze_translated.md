<!-- TRANSLATED by md-translate -->
# Beispiel Arbeitsplätze

# Exemple de postes de travail

In diesem Beispiel bauen wir auf den [CSV Import von Standorten](beispiel-fuer-den-csv-import-standorte-erstellen.md) auf, und wollen Arbeitsplätze importieren.
Diese sollen einem Raum als Standort zugewiesen werden und weiterhin wollen wir den Arbeitsplätzen Clients, Bildschirme und Drucker zuweisen.

Dans cet exemple, nous nous basons sur [importation CSV de sites](exemple-pour-l'importation-csv-des-sites-créer.md), et nous voulons importer des postes de travail.
Nous voulons les attribuer à une salle en tant que site et nous voulons également attribuer des clients, des écrans et des imprimantes aux postes de travail.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

! !! note "Cet article a été vérifié en dernier pour i-doit version 1.16.2"

Für den Import benötigen wir folgende Informationen:

Pour l'importation, nous avons besoin des informations suivantes :

* Objektname → den Namen des Arbeitsplatzes, des Clients, des Bildschirms oder des Druckers
* Standort → unterhalb welcher Lokation soll sich das Objekt befinden
* Objekttyp → Um welchen Objekttypen soll es sich Handeln
* Arbeitsplatz Zuweisung → Welchem Arbeitsplatz soll die Komponente zugewiesen werden

* nom de l'objet → le nom du poste de travail, du client, de l'écran ou de l'imprimante
* emplacement → sous quel emplacement l'objet doit se trouver
* Type d'objet → De quel type d'objet s'agit-il ?
* Affectation au poste de travail → A quel poste de travail le composant doit-il être affecté ?

Beispiel CSV Datei für diesen Import:

Exemple de fichier CSV pour cette importation :

[Import-Arbeitsplaetze.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-arbeitsplaetze/Import-Arbeitsplaetze.csv){ .md-button .md-button--primary }

[Importation-Travail.csv :material-file-download :](../../assets/images/fr/consolidation-données/csv-import/csv-travail/import-travail.csv){ .md-button .md-button--primary }

??? example "Import-Arbeitsplaetze.csv"

? ?? example "Importation de documents de travail.csv

```
```text
ObjektName;Standort;Objekttyp;AP Zuweisung
AP0001;RAUM 1.001;C__OBJTYPE__WORKSTATION;
AP0002;RAUM 1.002;C__OBJTYPE__WORKSTATION;
AP0003;RAUM 1.003;C__OBJTYPE__WORKSTATION;
AP0004;RAUM 1.004;C__OBJTYPE__WORKSTATION;
AP0005;RAUM 1.005;C__OBJTYPE__WORKSTATION;
AP0006;RAUM 1.006;C__OBJTYPE__WORKSTATION;
AP0007;RAUM 1.007;C__OBJTYPE__WORKSTATION;
AP0008;RAUM 2.001;C__OBJTYPE__WORKSTATION;
AP0009;RAUM 2.002;C__OBJTYPE__WORKSTATION;
AP0010;RAUM 2.003;C__OBJTYPE__WORKSTATION;
AP0011;RAUM 2.004;C__OBJTYPE__WORKSTATION;
AP0012;RAUM 2.005;C__OBJTYPE__WORKSTATION;
AP0013;RAUM 2.006;C__OBJTYPE__WORKSTATION;
AP0014;RAUM 2.007;C__OBJTYPE__WORKSTATION;
AP0015;RAUM 3.003;C__OBJTYPE__WORKSTATION;
AP0016;RAUM 3.004;C__OBJTYPE__WORKSTATION;
AP0017;RAUM 3.005;C__OBJTYPE__WORKSTATION;
AP0018;RAUM 3.006;C__OBJTYPE__WORKSTATION;
AP0019;RAUM 3.007;C__OBJTYPE__WORKSTATION;
AP0020;RAUM 3.008;C__OBJTYPE__WORKSTATION;
WS001;;C__OBJTYPE__CLIENT;AP0001
WS002;;C__OBJTYPE__CLIENT;AP0002
WS003;;C__OBJTYPE__CLIENT;AP0003
WS004;;C__OBJTYPE__CLIENT;AP0004
WS005;;C__OBJTYPE__CLIENT;AP0005
WS006;;C__OBJTYPE__CLIENT;AP0006
WS007;;C__OBJTYPE__CLIENT;AP0007
WS008;;C__OBJTYPE__CLIENT;AP0008
WS009;;C__OBJTYPE__CLIENT;AP0009
WS010;;C__OBJTYPE__CLIENT;AP0010
WS011;;C__OBJTYPE__CLIENT;AP0011
WS012;;C__OBJTYPE__CLIENT;AP0012
WS013;;C__OBJTYPE__CLIENT;AP0013
WS014;;C__OBJTYPE__CLIENT;AP0014
WS015;;C__OBJTYPE__CLIENT;AP0015
WS016;;C__OBJTYPE__CLIENT;AP0016
WS017;;C__OBJTYPE__CLIENT;AP0017
WS018;;C__OBJTYPE__CLIENT;AP0018
WS019;;C__OBJTYPE__CLIENT;AP0019
WS020;;C__OBJTYPE__CLIENT;AP0020
TFT001;;C__OBJTYPE__MONITOR;AP0001
TFT002;;C__OBJTYPE__MONITOR;AP0002
TFT003;;C__OBJTYPE__MONITOR;AP0003
TFT004;;C__OBJTYPE__MONITOR;AP0004
TFT005;;C__OBJTYPE__MONITOR;AP0005
TFT006;;C__OBJTYPE__MONITOR;AP0006
TFT007;;C__OBJTYPE__MONITOR;AP0007
TFT008;;C__OBJTYPE__MONITOR;AP0008
TFT009;;C__OBJTYPE__MONITOR;AP0009
TFT010;;C__OBJTYPE__MONITOR;AP0010
TFT011;;C__OBJTYPE__MONITOR;AP0011
TFT012;;C__OBJTYPE__MONITOR;AP0012
TFT013;;C__OBJTYPE__MONITOR;AP0013
TFT014;;C__OBJTYPE__MONITOR;AP0014
TFT015;;C__OBJTYPE__MONITOR;AP0015
TFT016;;C__OBJTYPE__MONITOR;AP0016
TFT017;;C__OBJTYPE__MONITOR;AP0017
TFT018;;C__OBJTYPE__MONITOR;AP0018
TFT019;;C__OBJTYPE__MONITOR;AP0019
TFT020;;C__OBJTYPE__MONITOR;AP0020
PRNT001;;C__OBJTYPE__PRINTER;AP0001
PRNT002;;C__OBJTYPE__PRINTER;AP0002
PRNT003;;C__OBJTYPE__PRINTER;AP0003
PRNT004;;C__OBJTYPE__PRINTER;AP0004
PRNT005;;C__OBJTYPE__PRINTER;AP0005
PRNT006;;C__OBJTYPE__PRINTER;AP0006
PRNT007;;C__OBJTYPE__PRINTER;AP0007
PRNT008;;C__OBJTYPE__PRINTER;AP0008
PRNT009;;C__OBJTYPE__PRINTER;AP0009
PRNT010;;C__OBJTYPE__PRINTER;AP0010
PRNT011;;C__OBJTYPE__PRINTER;AP0011
PRNT012;;C__OBJTYPE__PRINTER;AP0012
PRNT013;;C__OBJTYPE__PRINTER;AP0013
PRNT014;;C__OBJTYPE__PRINTER;AP0014
PRNT015;;C__OBJTYPE__PRINTER;AP0015
PRNT016;;C__OBJTYPE__PRINTER;AP0016
PRNT017;;C__OBJTYPE__PRINTER;AP0017
PRNT018;;C__OBJTYPE__PRINTER;AP0018
PRNT019;;C__OBJTYPE__PRINTER;AP0019
PRNT020;;C__OBJTYPE__PRINTER;AP0020
```
```

Auch bei diesem Beispiel ergeben sich Abhängigkeiten. Die Standorte sind schon vorhanden, sie wurden über das Beispiel zur [Standortanlage](beispiel-fuer-den-csv-import-standorte-erstellen.md) angelegt.
Als nächstes kommen nun die Arbeitsplätze selber, wir müssen diese als erstes erstellen, damit wir danach direkt die einzelnen Komponenten wie Clients, Bildschirm und Drucker diesen zuweisen können.
Deshalb stehen die einzelnen Arbeitsplätze in der CSV Datei auch an erster Stelle.

Des dépendances apparaissent également dans cet exemple. Les sites existent déjà, ils ont été créés à l'aide de l'exemple de [création de site](exemple-pour-import-csv-site-create.md).
Nous devons d'abord créer les postes de travail afin de pouvoir leur attribuer directement les différents composants tels que les clients, l'écran et l'imprimante.
C'est pourquoi les différents postes de travail sont placés en premier dans le fichier CSV.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Einstellungen im oberen Bereich bleiben auf den Standard Einstellungen und wir klicken auf Mapping vorbereiten.

Pour l'importation, nous nous rendons à nouveau dans la zone d'importation CSV. Les paramètres dans la partie supérieure restent sur les paramètres par défaut et nous cliquons sur Préparer le mapping.

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/1-csva.png)

[ ![CSV Mapping](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/1-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/1-csva.png)

Jetzt können wir im unteren Bereich die Import Konfiguration wie folgt vornehmen, und danach den Import Vorgang starten:

Nous pouvons maintenant procéder à la configuration de l'importation comme suit dans la partie inférieure, puis lancer le processus d'importation :

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/2-csva.png)

[ ![CSV Mapping](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/2-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/2-csva.png)

Sollten wir alles richtig gemacht haben, erscheinen nun die einzelnen Arbeitsplätze, sind einem Standort zugeordnet und unter jedem Arbeitsplatz finden wir einen zugeordneten Client, Bildschirm und Drucker.

Si nous avons tout fait correctement, les différents postes de travail apparaissent maintenant, sont attribués à un site et sous chaque poste de travail, nous trouvons un client, un écran et une imprimante attribués.

[![CSV Mapping](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-anwendungen/3-csva.png)

[ ![CSV Mapping](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/3-csva.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-applications/3-csva.png)