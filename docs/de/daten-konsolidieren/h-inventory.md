h-inventory ist eine Open Source Software zum automatischen Inventarisieren von Hardware- und Software-Komponenten sowie ganzen Netzwerken. Die Software ist auf SourceForge unter [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) für verschiedene Betriebssysteme verfügbar.

**Inhaltsverzeichnis**

*   1[Konfiguration](#hinventory-Konfiguration)
*   2[Inventarisierung eines Microsoft Windows Clients via H-Inventory](#hinventory-InventarisierungeinesMicrosoftWindowsClientsviaH-Inventory)
*   3[Grafischer Import eines H-Inventory Exports](#hinventory-GrafischerImporteinesH-InventoryExports)
*   4[Import eines H-Inventory Exports per Console](#hinventory-ImporteinesH-InventoryExportsperConsole)

i-doit ist in der Lage, Daten aus dem Inventarisierungswerkzeug _h-inventory_ zu importieren. Die dort im XML-Format exportierten Daten werden beim Import soweit aufbereitet, dass die für eine CMDB nötigen Informationen, soweit möglich, übernommen werden können. Auf diese Weise lassen sich als Basis einer CMDB bzw. der IT-Dokumentation viele wesentlichen Informationen automatisiert sammeln, um in einem späteren Schritt manuell mit weiteren Informationen angereichert zu werden.

**Folgende Daten können von h-inventory übernommen werden:**

![](/download/attachments/7831611/hinv.jpg?version=1&modificationDate=1441873159568&api=v2)

Vor einem Import muss i-doit entsprechend konfiguriert werden.

Konfiguration
-------------

Für einen manuellen Datenimport befindet sich die Konfiguration unter `**Verwaltung → Schnittstellen / externe Daten → Import → H-Inventory → Konfiguration**`. Dort wird lediglich im Parameter `**Objekt-Matching Profil**` angegeben, [wie bereits dokumentierte Objekte identifiziert werden sollen](/display/de/Objekte+identifizieren+bei+Importen). Identifizierte Objekte werden beim Datenimport aktualisiert.

Inventarisierung eines Microsoft Windows Clients via H-Inventory
----------------------------------------------------------------

Download des H-Inventory Pakets von **`i-doit → Extras → Import → Scripts`**

![](/download/attachments/7831611/image2021-11-16_9-36-33.png?version=1&modificationDate=1637051794226&api=v2&effects=drop-shadow)

Archiv entpacken.

Zu scannende IP-Adresse(n) in **`computer.txt`** eintragen **`scan.bat`** ausführen.

Nach erfolgreicher Abarbeitung des Scripts befindet sich der Export in der Datei „**`computername-xx.xml`**“ im selben Verzeichnis.

Grafischer Import eines H-Inventory Exports
-------------------------------------------

i-doit -> Extras -> Import -> Importieren

XML Datei hochladen

Datei aus der Liste der hochgeladenen Exports auswählen

Entsprechenden Objekt-Typ und Import Verfahren auswählen - in diesem Fall Client und inventory (für H-Inventory)

Importieren mit „Next »“

Der importierte Client ist nun verfügbar

Import eines H-Inventory Exports per Console
--------------------------------------------

Neben der Möglichkeit, die XML-Datei über die i-doit Oberfläche hochzuladen und die Informationen zu importieren, kann dieser Vorgang auch automatisiert werden. Hierzu wird die i-doit [Console](/display/de/Console) verwendet. Bevor der Import ausgeführt werden kann, muss sichergestellt werden, dass die XML-Datei dem System verfügbar ist. Hierfür muss die XML-Datei in das i-doit Verzeichnis **`imports`** kopiert oder direkt dort abgelegt werden. Anschließend lässt sich der Import über die Console starten. Eine Beschreibung der möglichen Parameter und ein Beispielaufruf sind im [entsprechenden Artikel](/display/de/Optionen+und+Parameter+der+Console) für den Command import-hinventory zu finden.