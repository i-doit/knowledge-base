<!-- TRANSLATED by md-translate -->
# Beispiel Standorte

# Exemple de sites

Heute wollen wir uns einmal ein praktisches Beispiel für den CSV Import anschauen.
Unser Anwendungsfall ist das automatische erstellen der Standorte innerhalb von i-doit mithilfe einer CSV Imports.

Aujourd'hui, nous allons examiner un exemple pratique d'importation de fichiers CSV.
Notre cas d'application est la création automatique des sites dans i-doit à l'aide d'une importation CSV.

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

! !! note "Cet article a été vérifié en dernier pour i-doit version 1.16.2"

Wir benötigen für das erstellen der einzelnen Objekte folgende Informationen:

Nous avons besoin des informations suivantes pour créer les différents objets :

* Den selbst erstellten Objekttyp Etage/Basement mit der Objekttyp Konstante - C__OBJECT_TYPE__FLOOR
* Objektname → den Namen des Gebäudes, der Etage oder des Raumes
* Standort → unterhalb welcher Lokation soll sich das Objekt befinden
* Objekttyp → Um welchen Objekttypen soll es sich Handeln

* Le type d'objet Étage/Basement que vous avez créé vous-même avec la constante de type d'objet - C__OBJECT_TYPE__FLOOR
* nom de l'objet → le nom du bâtiment, de l'étage ou de la pièce
* localisation → en dessous de quelle localisation l'objet doit se trouver
* Type d'objet → De quel type d'objet s'agit-il ?

Beispiel CSV Datei für diesen Import:

Exemple de fichier CSV pour cette importation :

[Import-Standorte.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/Import-Standorte.csv){ .md-button .md-button--primary }

[sites d'importation.csv :material-file-download :](../../assets/images/fr/consolidation des données/csv-import/csv-sites/import-sites.csv){ .md-button .md-button--primary }

Der Aufbau der CSV sieht wie folgt aus:

La structure du CSV se présente comme suit :

??? example "Import Standort.csv"

? ?? exemple "Importation site.csv"

```
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
```

Da wir Abhängigkeiten setzen wollen die aufeinander aufbauen, ist es wichtig in der CSV Datei eine entsprechende Reihenfolge bei den Standorten einzuhalten.
Die Root Lokation ist immer die unterste Stufe und bereits vorhanden. In dieser befinden sich die einzelnen Gebäude, in den Gebäuden die einzelnen Etagen und in den Etagen die jeweiligen Räume:

Comme nous voulons créer des dépendances qui s'appuient les unes sur les autres, il est important de respecter l'ordre des sites dans le fichier CSV.
Le site racine est toujours le niveau le plus bas et existe déjà. Dans ce dernier se trouvent les différents bâtiments, dans les bâtiments les différents étages et dans les étages les différentes pièces :

Root Lokation → Gebäude → Etage → Raum

Emplacement racine → Bâtiment → Étage → Pièce

Also kommen in der CSV Datei auch die Gebäude als erstes, dann die Etagen und als letztes die Räume.

Dans le fichier CSV, les bâtiments apparaissent donc aussi en premier, puis les étages et enfin les pièces.

[![Standortsicht](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)

[ ![Vue du site](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/1-csv-emplacement.png)](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/1-csv-emplacement.png)

Um zu definieren welcher Objekttyp jeweils angelegt werden soll, geben wir dem Import in jeder Zeile noch die Objekttyp Konstante mit auf den Weg, diese finden wir in der Objekttyp Konfiguration:

Pour définir quel type d'objet doit être créé, nous donnons à l'importation sur chaque ligne la constante du type d'objet, que nous trouvons dans la configuration du type d'objet :

[![Objekttyp-Konfigurtion](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)

[ ![Configuration du type d'objet](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/2-csv-emplacement.png)](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/2-csv-emplacement.png)

Schauen wir uns nun die Konfiguration für den Import an, im oberen Bereich können wir die Einstellungen so lassen, wie sie sind:

Regardons maintenant la configuration pour l'importation, dans la partie supérieure, nous pouvons laisser les paramètres tels quels :

[![CSV Import optionen](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)

[ ![Options d'importation CSV](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/3-csv-emplacement.png)](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/3-csv-emplacement.png)

Jetzt auf Mapping vorbereiten klicken, danach können wir die Einstellungen wie folgt anpassen:

Cliquer maintenant sur Préparer le mapping, après quoi nous pouvons adapter les paramètres comme suit :

[![CSV Objekt Matching Profile](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)

[ ![CSV Object Matching Profile](../../assets/images/fr/données-consolidation/csv-import/csv-emplacements/4-csv-emplacement.png)](../../assets/images/fr/données-consolidation/csv-import/csv-emplacements/4-csv-emplacement.png)

Nun sind wir soweit und können den Import starten, in der Standortansicht sollte sich danach folgendes Bild ergeben:

Nous sommes maintenant prêts à démarrer l'importation. L'image suivante devrait alors apparaître dans la vue du site :

[![ Standortsicht](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)

[ ![ Vue du site](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/5-csv-emplacement.png)](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/5-csv-emplacement.png)

Die Konfiguration des neu erstellten Objekttyps Etage

La configuration du type d'objet nouvellement créé Étage

[![Objekttyp-Konfigurtion](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)

[ ![Configuration du type d'objet](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/6-csv-site.png)](../../assets/images/fr/consolidation des données/csv-import/csv-emplacements/6-csv-site.png)