<!-- TRANSLATED by md-translate -->
# CSV-Datenexport

# Exportation de données CSV

Viele Daten lassen sich direkt aus der [IT-Dokumentation](../glossar.md) im CSV-Format exportieren, um diese mit einer Tabellenkalkulation o. ä. zu verarbeiten.

De nombreuses données peuvent être exportées directement depuis la [documentation informatique](../glossaire.md) au format CSV afin de les traiter avec un tableur ou autre.

## Objekt-Liste

## Liste d'objets

Objekte und deren Attribute lassen sich über die [Objekt-Liste](../grundlagen/objekt-liste/index.md) exportieren. Hierzu dient der Button **Als CSV exportieren** in der Aktionsleiste. Die Spalten entsprechen den [in der Listenansicht konfigurierten Attributen](../grundlagen/objekt-liste/listenansicht-konfigurieren.md). Eine aktive [Filterung der Objekt-Liste](../grundlagen/objekt-liste/navigieren-und-filtern.md) wird beim Export **nicht** berücksichtigt.

Les objets et leurs attributs peuvent être exportés via la [liste d'objets](../bases/liste d'objets/index.md). Le bouton **Exporter au format CSV** dans la barre d'action est utilisé à cet effet. Les colonnes correspondent aux [attributs configurés dans la vue en liste](../bases/liste-objet/configurer-vue-en-liste.md). Un [filtrage de la liste d'objets](../bases/objet-liste/naviguer-et-filtrer.md) actif n'est **pas** pris en compte lors de l'exportation.

[![CSV-Export in der Aktionsleiste](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)

[ ![Exportation CSV dans la barre d'action](../assets/images/fr/consolidation des données/csv-datenexport/1-csv-fr.png)](../assets/images/fr/consolidation des données/csv-datenexport/1-csv-fr.png)

## Listen-Kategorien

## Catégories de listes

Derzeit unterstützt der CSV-Export viele der [Listen-Kategorien](../glossar.md) (Multi-Value). Die in deren Liste aufgeführten Einträge und [Attribute](../glossar.md) werden nach Druck auf den Button **Als CSV exportieren** zum Download angeboten. Als Spaltenüberschriften dienen die Attributnamen.

Actuellement, l'exportation CSV supporte un grand nombre de [listes-catégories](../glossar.md) (Multi-Value). Les entrées et [attributs](../glossar.md) figurant dans leur liste sont proposés au téléchargement après avoir cliqué sur le bouton **Exporter au format CSV**. Les noms des attributs servent d'en-têtes de colonnes.

[![Multi-Value Kategorie](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)

[ ![Catégorie multi-valeurs](../assets/images/fr/consolidation des données/csv-datenexport/2-csv-fr.png)](../assets/images/fr/consolidation des données/csv-datenexport/2-csv-fr.png)

## Reports

## Rapports

Der [Report Manager](../auswertungen/report-manager.md) verfügt ebenfalls über einen Export ins CSV-Format. In einem Report klickt man dazu auf den Button **CSV**.aadawdwa

Le [Report Manager](../auswertungen/report-manager.md) dispose également d'une fonction d'exportation au format CSV. Dans un rapport, il suffit de cliquer sur le bouton **CSV**.aadawdwa

[![Report Darstellung](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)

[ ![Présentation du rapport](../assets/images/fr/consolidation des données/csv-exportation de données/3-csv-fr.png)](../assets/images/fr/consolidation des données/csv-exportation de données/3-csv-fr.png)

## CSV-Format

## format CSV

CSV-Dateien sind einfache Textdateien, in der pro Zeile Komma-separierte Spalten hinterlegt sind. In diesem Fall dient ein Semikolon als Trennzeichen von Spalten. Die Daten sind im Zeichensatz Unicode (UTF-8) kodiert.

Les fichiers CSV sont des fichiers texte simples dans lesquels des colonnes séparées par des virgules sont enregistrées par ligne. Dans ce cas, un point-virgule sert de séparateur de colonnes. Les données sont encodées dans le jeu de caractères Unicode (UTF-8).

!!! info "Microsoft Excel"

! !! info "Microsoft Excel

```
Es kann vorkommen, dass Microsoft Excel die Daten in der exportierten CSV-Datei nicht korrekt darstellt. Insbesondere Encoding-Fehler sind zu beobachten. Um dies zu verhindern, sollte die CSV-Datei nicht direkt geöffnet, sondern erst importiert werden:

1. CSV-Datei exportieren und speichern
2. Excel öffnen
3. Im Reiter **Daten** auf **Aus Text** klicken
4. CSV-Datei öffnen
5. Im Dialog **Textkonvertierungsassistent** den **Dateiursprung** auf **65001 : Unicode (UTF-8)** setzen
6. Auf **Weiter** klicken
7. Als **Trennzeichen** die Checkbox **Semikolon** wählen
8. Auf **Fertigstellen** klicken
```