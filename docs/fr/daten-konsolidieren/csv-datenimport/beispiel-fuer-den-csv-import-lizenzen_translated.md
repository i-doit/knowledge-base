<!-- TRANSLATED by md-translate -->
# Beispiel Lizenzen

# Exemple de licences

!!! note "Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft"

! !! note "Cet article a été vérifié en dernier pour i-doit version 1.16.2"

In diesem Beispiel bauen wir auf den [CSV Import von Anwendungen](beispiel-fuer-den-csv-import-anwendungen.md) auf und wollen Lizenzen importieren.

Dans cet exemple, nous nous basons sur [CSV importation d'applications](exemple-pour-le-csv-import-applications.md) et voulons importer des licences.

Für den Import benötigen wir folgende Informationen:

Pour l'importation, nous avons besoin des informations suivantes :

* Objekttyp → Um welchen Objekttypen soll es sich Handeln
* Objektname → den Namen des Clients
* Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ → Welcher Lizenz Typ wird importiert, Einzel- oder Volumen?
* Lizenzzuweisung: izenzschlüssel - Anzahl → Welche Anzahl an Lizenzen gibt es?
* Lizenzzuweisung: Lizenzschlüssel - Schlüssel→ Wie lautet der Lizenzschlüssel?
* Lizenzzuweisung: Lizenzschlüssel - Seriennummer → Welche Seriennummer soll zugeordnet werden?
* Lizenzzuweisung: Lizenzschlüssel - Startdatum → Ab wann kann die Lizenz verwendet werden?
* Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum → Wann läuft die Lizenz ab?
* Lizenzzuweisung: Lizenzschlüssel - Einzelpreis → Was kostet eine Lizenz?

* Type d'objet → De quel type d'objet s'agit-il ?
* Nom de l'objet → le nom du client
* Attribution de licence : clé de licence - type de licence → Quel type de licence est importé, simple ou volume ?
* Attribution de licence : clé de licence - nombre → Quel est le nombre de licences ?
* Attribution de licence : Clé de licence - Clé→ Quelle est la clé de licence ?
* Attribution de licence : Clé de licence - Numéro de série → Quel numéro de série doit être attribué ?
* Attribution de la licence : Clé de licence - Date de début → A partir de quand la licence peut-elle être utilisée ?
* Attribution de la licence : Clé de licence - date d'expiration → Quand la licence expire-t-elle ?
* Attribution de la licence : Clé de licence - Prix unitaire → Combien coûte une licence ?

!!! note "Bei jedem Import muss auch die Darstellung der Daten beachtet werden."

! !! note "Pour chaque importation, il faut également tenir compte de la présentation des données".

Zum Beispiel:

Par exemple

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-import/csv-licences/1-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-import/csv-licences/1-csv-lic.png)

Es werden Dialog Bezeichnungen in deutscher Sprache erwartet zum Beispiel: Einzel-Lizenz
Hier wird das Datumsformat DD.MM.YYYY (01.01.2021) erwartet
Und das Numerische Format: X.XXX,XX (9.999,99) da wir allerdings Multi-Values Kommasepariert angeben verwenden wir den Punkt für die "nachkommastellen" also 1000.99

Les désignations de dialogue en langue allemande sont attendues, par exemple : Einzel-Lizenz
Le format de date DD.MM.YYYY (01.01.2021) est attendu ici.
Et le format numérique : X.XXX,XX (9.999,99) étant donné que nous indiquons des multi-valeurs séparées par des virgules, nous utilisons le point pour les "décimales", c'est-à-dire 1000.99.

Beispiel CSV Datei für diesen Import:

Exemple de fichier CSV pour cette importation :

[Import-Lizenzen.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Import-Lizenzen.csv){ .md-button .md-button--primary }

[Licences d'importation.csv :material-file-download :](../../assets/images/fr/consolidation des données/csv-import/csv-licences/Import-Licences.csv){ .md-button .md-button--primary }

??? example "Import Lizenzen.csv"

? ?? exemple "Importation de licences.csv

```
```text
Objekttyp;ObjektName;Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ;Lizenzzuweisung: Lizenzschlüssel - Anzahl;Lizenzzuweisung: Lizenzschlüssel - Schlüssel;Lizenzzuweisung: Lizenzschlüssel - Seriennummer;Lizenzzuweisung: Lizenzschlüssel - Startdatum;Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum;Lizenzzuweisung: Lizenzschlüssel - Einzelpreis
C__OBJTYPE__LICENCE;Lizenz-X;Volumen-Lizenz;1000;Lizenz-X-111-LASKDZHW;123456789;01.01.2021;31.12.2021;999.99
C__OBJTYPE__LICENCE;Lizenz-Y;Einzel-Lizenz;1;Lizenz-Y-211-OIHUASFD;1123456789;01.06.2021;31.12.2021;1399.99
C__OBJTYPE__LICENCE;Lizenz-Z;Volumen-Lizenz,Volumen-Lizenz;100,50;Lizenz-Z-311-IGUHOPSD,Lizenz-Z-322-IUHGASD;11123456789,11223456789;01.01.2021,01.05.2021;31.12.2021,30.04.2021;1000.99,500.99
```
```

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt.

Aucune dépendance n'est requise pour cette importation.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Multivalue-Kategorien setzen wir auf Kommasepariert.

Pour l'importation, nous nous rendons à nouveau dans la zone d'importation CSV. Les catégories multivaluées sont séparées par des virgules.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-import/csv-licences/2-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-import/csv-licences/2-csv-lic.png)

Jetzt können wir im unteren Bereich die Import Konfiguration wie folgt vornehmen und danach den Import Vorgang starten:

Nous pouvons maintenant procéder à la configuration de l'importation comme suit dans la partie inférieure et lancer ensuite le processus d'importation :

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-importation/csv-licences/3-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-importation/csv-licences/3-csv-lic.png)

Solltest du alles richtig gemacht haben, erscheinen nun die einzelnen Lizenzen in der Listenansicht.

Si tu as tout fait correctement, les différentes licences apparaissent maintenant dans la liste.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-import/csv-licences/4-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-import/csv-licences/4-csv-lic.png)

Außerdem sind die KategorienLizenzzuweisungund Lizenzzuweisung: Lizenzschlüssel gefüllt.

En outre, les catégoriesAttribution de licenceet Attribution de licence : clé de licence sont remplies.

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-import/csv-licences/5-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-import/csv-licences/5-csv-lic.png)

[![Darstellung in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)

[ ![Représentation dans i-doit](../../assets/images/fr/consolidation des données/csv-import/csv-licences/6-csv-lic.png)](../../assets/images/fr/consolidation des données/csv-import/csv-licences/6-csv-lic.png)