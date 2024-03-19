<!-- TRANSLATED by md-translate -->
# h-inventory

# h-inventory

h-inventory ist eine Open Source Software zum automatischen Inventarisieren von Hardware- und Software-Komponenten sowie ganzen Netzwerken. Die Software ist auf SourceForge unter [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) für verschiedene Betriebssysteme verfügbar.

h-inventory est un logiciel open source permettant d'inventorier automatiquement des composants matériels et logiciels ainsi que des réseaux entiers. Le logiciel est disponible sur SourceForge à l'adresse [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) pour différents systèmes d'exploitation.

i-doit ist in der Lage, Daten aus dem Inventarisierungswerkzeug _h-inventory_ zu importieren. Die dort im XML-Format exportierten Daten werden beim Import soweit aufbereitet, dass die für eine CMDB nötigen Informationen, soweit möglich, übernommen werden können. Auf diese Weise lassen sich als Basis einer CMDB bzw. der IT-Dokumentation viele wesentlichen Informationen automatisiert sammeln, um in einem späteren Schritt manuell mit weiteren Informationen angereichert zu werden.

i-doit est en mesure d'importer des données de l'outil d'inventaire _h-inventory_. Les données exportées au format XML sont préparées lors de l'importation de manière à ce que les informations nécessaires à une CMDB puissent être reprises, dans la mesure du possible. De cette manière, il est possible de collecter automatiquement de nombreuses informations essentielles comme base d'une CMDB ou d'une documentation informatique, afin de pouvoir les enrichir manuellement avec d'autres informations dans une étape ultérieure.

**Folgende Daten können von h-inventory übernommen werden:**

**Les données suivantes peuvent être reprises de h-inventory :**

[![Attribute und Kategorien](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

[ ![Attributs et catégories](../assets/images/fr/consolidation des données/h-inventory/1-hinv.jpg)](../assets/images/fr/consolidation des données/h-inventory/1-hinv.jpg)

Vor einem Import muss i-doit entsprechend konfiguriert werden.

Avant toute importation, i-doit être configuré en conséquence.

## Konfiguration

## Configuration

Für einen manuellen Datenimport befindet sich die Konfiguration unter **Verwaltung → Import und Schnittstellen → H-Inventory → Konfiguration**. Dort wird lediglich im Parameter **Objekt-Matching Profil** angegeben, [wie bereits dokumentierte Objekte identifiziert werden sollen](objekt-identifizieren-bei-importen.md). Identifizierte Objekte werden beim Datenimport aktualisiert.

Pour une importation manuelle des données, la configuration se trouve sous **Administration → Importation et interfaces → H-Inventory → Configuration**. On y indique simplement dans le paramètre **Object-Matching Profil** [comment les objets déjà documentés doivent être identifiés](objekt-identifizieren-bei-importen.md). Les objets identifiés sont mis à jour lors de l'importation des données.

## Inventarisierung eines Microsoft Windows Clients via H-Inventory

## Inventaire d'un client Microsoft Windows via H-Inventory

Download des H-Inventory Pakets von **Extras → CMDB → Import → H-Inventory**

Télécharger le paquet H-Inventory de **Extras → CMDB → Import → H-Inventory**

[![XML Import](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

[ ![XML Import](../assets/images/fr/consolidation des données/h-inventory/1-hinv.jpg)](../assets/images/fr/consolidation des données/h-inventory/1-hinv.jpg)

Archiv entpacken.
Zu scannende IP-Adresse(n) in **computer.txt** eintragen **scan.bat** ausführen.
Nach erfolgreicher Abarbeitung des Scripts befindet sich der Export in der Datei "**computername-xx.xml**" im selben Verzeichnis.

Décompresser l'archive.
Saisir la ou les adresses IP à scanner dans **computer.txt** **exécuter scan.bat**.
Une fois le script exécuté avec succès, l'exportation se trouve dans le fichier "**computername-xx.xml**" du même répertoire.

## Grafischer Import eines H-Inventory Exports

## Importation graphique d'un export H-Inventory

1. i-doit -> Extras -> Import -> Importieren
2. XML Datei hochladen
3. Datei aus der Liste der hochgeladenen Exports auswählen
4. Entsprechenden Objekt-Typ und Import Verfahren auswählen - in diesem Fall Client und inventory (für H-Inventory)
5. Importieren mit "Next »"
6. Der importierte Client ist nun verfügbar

1. i-doit -> Outils -> Importer -> Importer
2. télécharger le fichier XML
3. sélectionner le fichier dans la liste des exportations téléchargées
4. sélectionner le type d'objet et la procédure d'importation correspondants - dans ce cas, client et inventory (pour H-Inventory)
5. importer en cliquant sur "Next "".
6. le client importé est maintenant disponible

## Import eines H-Inventory Exports per Console

## Importation d'un export H-Inventory par console

Neben der Möglichkeit, die XML-Datei über die i-doit Oberfläche hochzuladen und die Informationen zu importieren, kann dieser Vorgang auch automatisiert werden. Hierzu wird die i-doit [Console](../automatisierung-und-integration/cli/console/index.md) verwendet. Bevor der Import ausgeführt werden kann, muss sichergestellt werden, dass die XML-Datei dem System verfügbar ist. Hierfür muss die XML-Datei in das i-doit Verzeichnis **imports** kopiert oder direkt dort abgelegt werden. Anschließend lässt sich der Import über die Console starten. Eine Beschreibung der möglichen Parameter und ein Beispielaufruf sind im [entsprechenden Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#import-hinventory) für den Command import-hinventory zu finden.

Outre la possibilité de télécharger le fichier XML via l'interface i-doit et d'importer les informations, il est également possible d'automatiser ce processus. Pour cela, on utilise la [Console] d'i-doit(../automatisation-et-intégration/cli/console/index.md). Avant de pouvoir effectuer l'importation, il faut s'assurer que le fichier XML est disponible pour le système. Pour cela, il faut copier le fichier XML dans le répertoire i-doit **imports** ou l'y déposer directement. L'importation peut ensuite être lancée via la Console. Une description des paramètres possibles et un exemple d'appel sont disponibles dans [l'article correspondant](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#import-hinventory) pour la commande import-hinventory.