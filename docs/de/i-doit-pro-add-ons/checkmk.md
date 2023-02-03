![Logo von Check_MK](/download/attachments/57180183/mathiaskettner_logo.gif?version=1&modificationDate=1474895940245&api=v2)

Check\_MK ist eine Software für [Network Monitoring](/display/de/Network+Monitoring), die aus i-doit heraus konfiguriert werden kann.  

Der Export beliefert Check\_MK mit WATO-Konfigurationsdateien. WATO ist die Konfigurationsoberfläche von Check\_MK, welche Änderungen an der Monitoring-Konfiguration verwaltet und deren Gültigkeit überprüft. Die Konfigurationen beinhalten IP-Adresse oder den DNS-Namen von zu exportierenden Hosts und/oder Cluster und deren Mitgliedern sowie zugeordnete Hostmerkmale (Tags) und verknüpfte Kontakte. Weitere Monitoring-spezifische Konfigurationen verbleiben in Check\_MK.

Der Vorteil durch die Befüllung mit i-doit liegt darin, dass keine doppelte Datenpflege betrieben werden muss und die Hostmerkmale, die in Check\_MK das Monitoring regelbasiert bestimmen, automatisiert durch CMDB-Informationen, wie beispielsweise den Standort eines Objektes, generiert werden können.

  

**Inhaltsverzeichnis**

*   1[Grundkonfiguration](#Checkmk-Grundkonfiguration)
*   2[Kategorien](#Checkmk-Kategorien)
*   3[Hostmerkmale](#Checkmk-Hostmerkmale)
*   4[Kategorie Hostmerkmale](#Checkmk-KategorieHostmerkmale)
*   5[Kategorie Servicezuweisung](#Checkmk-KategorieServicezuweisung)
*   6[Export der Konfiguration](#Checkmk-ExportderKonfiguration)
*   7[Transfer Script](#Checkmk-TransferScript)
*   8[Releases](#Checkmk-Releases)

Achtung!

Schnittstelle unterstützt offiziell ausschließlich Check\_MK bis Version 1.4. Für alle neueren Versionen ist das [Check\_MK 2 Add-on](/display/en/Checkmk2) vorgesehen.  
Welche Funktionen/Bereiche der Schnittstelle auch mit Check\_MK Versionen > 1.4 fehlerfrei funktionieren ist daher unklar.

  

Grundkonfiguration
------------------

In i-doit wird unter **`Verwaltung →`** **`Schnittstellen → Monitoring → Exportkonfiguration`** eine Konfiguration für Check\_MK hinterlegt. Der lokale Pfad definiert einen absoluten oder relativen Pfad (beispielsweise zur Installation von i-doit) im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der Link zum Monitoring-Tool gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

Nach der Auswahl von Check\_MK als Typ öffnen sich weitere Konfigurationsparameter.

**`Zugewiesene Kontakte exportieren`** erlaubt es, die den entsprechenden [Objekten](/display/de/Struktur+der+IT-Dokumentation) in dieser Rolle zugewiesene Kontakte in der exportierten Konfiguration des Objekts mit abzulegen. Hierbei wird der [Objekttitel](/display/de/Eindeutige+Referenzierungen) der Kontakte mit exportiert.  

Im Freitextfeld **`Site`** kann eine Site definiert werden, an welche die exportierte Konfiguration weitergereicht wird. Hierfür muss **`Multisite (Distributed Monitoring)`** auf "Ja" gesetzt werden.

Wenn man Hosts oder Ordner sperrt, kann man die exportierte Konfiguration in Check\_MK nicht mehr bearbeiten. Dies ist sinnvoll, damit in Check\_MK keine Änderungen durchgeführt werden, die nach dem nächsten Export dann wieder überschrieben werden würden.

Als **`Master Site`** sind die Sites auswählbar, die über mehrere Exportkonfigurationen hinzugekommen sind. Gibt es nur eine Konfiguration, kann der Eintrag leer gelassen werden.![](/download/attachments/57180183/checkmk_export_config.png?version=1&modificationDate=1474895942882&api=v2)  

Kategorien
----------

Grundsätzlich muss den zu nutzenden [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) über den [**`Quick Configuration Wizard`**](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) der [Kategorie-Ordner](/display/de/Struktur+der+IT-Dokumentation) **`Check_Mk (Host)`** zugeordnet werden.

In der Kategorie **`Check_MK (Host)`** wird eine Export-Konfiguration ausgewählt und ein zu nutzender Hostname bzw. eine zu nutzende Hostadresse definiert. Zudem kann verhindert werden, dass die IP-Adresse exportiert wird, beispielsweise wenn diese per DHCP geliefert wurde und sich ändert.

![](/download/attachments/57180183/checkmk_kategorie.png?version=1&modificationDate=1474895942491&api=v2)  

Hostmerkmale
------------

Über die Kategorie **`Hostmerkmale`** werden diese zugewiesen oder angezeigt. Es wird unterschieden zwischen:

*   `**Hostmerkmale**`: einfache manuelle Zuweisung von Merkmalen (daher statisch)
    
*   `**CMDB Merkmale**`: Merkmale, die durch ein [Attribut](/display/de/Struktur+der+IT-Dokumentation) aus der CMDB ausgeprägt werden
    
*   `**Dynamische Merkmale**`: Hostmerkmale, die durch Regelungen generiert werden
    

Alle Arten von Hostmerkmalen werden unter `**Extras → Check_MK**` konfiguriert.

Die statischen Hostmerkmale werden manuell gepflegt. Die Standardmerkmale von Check\_MK werden bereits vorkonfiguriert ausgeliefert.

Die CMDB-Merkmale bedienen sich an Inhalten aus der CMDB. In der Konfiguration werden nur Objekttypen angezeigt, die den Kategorieordner `**Check_MK**` zugeordnet haben. Hier können einzelne Attribute ausgewählt werden. Es kann eine globale Definition eingerichtet werden, die für alle aufgelisteten Objekttypen ohne spezielle Konfiguration gültig ist, die die globale Definition ignoriert. Über `**Generisches Standort-Merkmal exportieren**` kann der Objekttitel des Standorts eines Objekts als Tag zu den Hostmerkmalen hinzugefügt werden.

Im folgenden Beispiel wird das Attribut **`Betriebssystem`** aus der CDMB in ein Hostmerkmal gewandelt.

![](/download/attachments/57180183/checkmk_configuration.png?version=1&modificationDate=1474895941720&api=v2&effects=drop-shadow)  

Der Server im Beispiel hat als Betriebssystem Debian 7.1 zugewiesen. Dieser Wert wird beim Export der Konfiguration zu dem entsprechenden Hostmerkmal übernommen.

  

Die dynamischen Merkmale funktionieren ähnlich, nur dass sie regelbasiert arbeiten. Im folgenden Beispiel wird der Standort eines Objektes ausgewertet und beim Export der Konfiguration die angegebenen Hostmerkmale mit übergeben. Steht ein Server im konkreten Beispiel unterhalb des Standortes München, bekommt er das Hostmerkmal WAN mitgegeben.

Kategorie Hostmerkmale
----------------------

In der Kategorie `**Hostmerkmale**` eines Objektes werden die dynamischen Hostmerkmale angezeigt und die manuellen, statischen Hostmerkmale zugewiesen.

Kategorie Servicezuweisung
--------------------------

Analyse-Modul

Diese Kategorie ist nur bei installiertem Analyse-Modul nutzbar.

Die `**Servicezuweisung**` dient zur Zuweisung von installierter Software zu Service-Checks, die per [Livestatus](/pages/viewpage.action?pageId=57180182) ausgelesen werden. Dies wird genutzt, um im Analyse-Modul anhand von aus dem Monitoring gemeldeten Ausfällen zu errechnen, welche IT-Services betroffen sind. In der Kategorie wird quasi ein Monitoring Check mit einer auf dem System installierten Software "verheiratet".

Dadurch kann im Analyse-Modul ermittelt werden, welche IT-Services direkt oder indirekt von dem technischen Ausfall betroffen sind.

Export der Konfiguration
------------------------

Über `**Extras → Check_MK → Check_MK Export**` erreichbar kann manuell der Export der WATO-Konfigurationsdaten angestoßen werden.

Erzeugt werden Dateien im `.mk`\-Format, die zur Check\_MK-Instanz übertragen werden können. Zunächst werden diese im Verzeichnis abgelegt, welches in der Exportkonfiguration angegeben wurde. Zur einfachen Übertragung in die OMD Site werden die Daten zusätzlich als `.zip` und als Tarball gepackt.

Die Definition der Export-Struktur erlaubt es, die exportierten Objekte in einer Ordnerstruktur ins Check\_MK zu übertragen. Hierbei kann gewählt werden, ob entweder die Standorte als Ordner angelegt werden sollen oder die Objekttypen.

Transfer Script
---------------

Im Installationsverzeichnis von i-doit befindet sich ein Shellscript namens `checkmk_transfer.sh`. Dieses wird mit den entsprechenden Zugriffen auf die OMD Site konfiguriert und überträgt dann automatisiert die i-doit-Konfiguration ins WATO.

  

Dazu steuert es die [i-doit Console](/display/de/Console) an und baut eine SSH-Verbindung zur Check\_MK-Instanz auf. Es überträgt die Daten in die OMD Site und entpackt diese automatisch. Anschließend signalisiert es WATO, dass Änderungen vorliegen.

Voraussetzung für die Übertragung per SSH ist Public-Key-Authentifizierung zwischen der i-doit-Instanz und der Check\_MK OMD Site. Eine detaillierte Anleitung dazu liegt im Installationverzeichnis von i-doit unter `docs/checkmk/README` bzw. `README.german`.

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.0.2 |     | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.0.1 | 14.10.2019 | ```<br>[Bug] List editing of Check_MK categories<br>```<br><br>```<br>[Bug] Create new category entries in the list editing category "Export Parameter (subcategory of Check_MK (Host))"<br>```<br><br>```<br>[Bug] Add more dynamic CMDB-tags<br>```<br><br>```<br>[Bug] Export of dynamic host tags with special characters<br>``` |
| 1.0 | 17.12.2018 | ```<br>[Improvement] Add-on is installable[Improvement] Add-on is uninstallable[Improvement] Add-on is activatable[Improvement] Add-on is deactivatable[Change] Add-onize Check_MK<br>``` |