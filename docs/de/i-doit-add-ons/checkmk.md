# Checkmk

[![Logo von Check_MK](../assets/images/de/i-doit-add-ons/checkmk/1-cmk.gif)](../assets/images/de/i-doit-add-ons/checkmk/1-cmk.gif)

Check\_MK ist eine Software für [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md), die aus i-doit heraus konfiguriert werden kann.

Der Export beliefert Check\_MK mit WATO-Konfigurationsdateien. WATO ist die Konfigurationsoberfläche von Check\_MK, welche Änderungen an der Monitoring-Konfiguration verwaltet und deren Gültigkeit überprüft. Die Konfigurationen beinhalten IP-Adresse oder den DNS-Namen von zu exportierenden Hosts und/oder Cluster und deren Mitgliedern sowie zugeordnete Hostmerkmale (Tags) und verknüpfte Kontakte. Weitere Monitoring-spezifische Konfigurationen verbleiben in Check\_MK.

Der Vorteil durch die Befüllung mit i-doit liegt darin, dass keine doppelte Datenpflege betrieben werden muss und die Hostmerkmale, die in Check\_MK das Monitoring regelbasiert bestimmen, automatisiert durch CMDB-Informationen, wie beispielsweise den Standort eines Objektes, generiert werden können.

!!! attention "Achtung!"

    Schnittstelle unterstützt offiziell ausschließlich Check\_MK bis Version 1.4. Für alle neueren Versionen ist das [Check\_MK 2 Add-on](./checkmk2/index.md) vorgesehen.
    Welche Funktionen/Bereiche der Schnittstelle auch mit Check\_MK Versionen > 1.4 fehlerfrei funktionieren ist daher unklar.

Grundkonfiguration
------------------

In i-doit wird unter **Verwaltung →** **Schnittstellen → Monitoring → Exportkonfiguration** eine Konfiguration für Check\_MK hinterlegt. Der lokale Pfad definiert einen absoluten oder relativen Pfad (beispielsweise zur Installation von i-doit) im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der Link zum Monitoring-Tool gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

Nach der Auswahl von Check\_MK als Typ öffnen sich weitere Konfigurationsparameter.

**Zugewiesene Kontakte exportieren** erlaubt es, die den entsprechenden [Objekten](../grundlagen/struktur-it-dokumentation.md) in dieser Rolle zugewiesene Kontakte in der exportierten Konfiguration des Objekts mit abzulegen. Hierbei wird der [Objekttitel](../grundlagen/eindeutige-referenzierungen.md) der Kontakte mit exportiert.

Im Freitextfeld **Site** kann eine Site definiert werden, an welche die exportierte Konfiguration weitergereicht wird. Hierfür muss **Multisite (Distributed Monitoring)** auf "Ja" gesetzt werden.

Wenn man Hosts oder Ordner sperrt, kann man die exportierte Konfiguration in Check\_MK nicht mehr bearbeiten. Dies ist sinnvoll, damit in Check\_MK keine Änderungen durchgeführt werden, die nach dem nächsten Export dann wieder überschrieben werden würden.

Als **Master Site** sind die Sites auswählbar, die über mehrere Exportkonfigurationen hinzugekommen sind. Gibt es nur eine Konfiguration, kann der Eintrag leer gelassen werden.[![Master Site](../assets/images/de/i-doit-add-ons/checkmk/2-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/2-cmk.png)

Kategorien
----------

Grundsätzlich muss den zu nutzenden [Objekttypen](../grundlagen/struktur-it-dokumentation.md) über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) der [Kategorie-Ordner](../grundlagen/struktur-it-dokumentation.md) **Check_Mk (Host)** zugeordnet werden.

In der Kategorie **Check_MK (Host)** wird eine Export-Konfiguration ausgewählt und ein zu nutzender Hostname bzw. eine zu nutzende Hostadresse definiert. Zudem kann verhindert werden, dass die IP-Adresse exportiert wird, beispielsweise wenn diese per DHCP geliefert wurde und sich ändert.

[![Check_MK (Host)](../assets/images/de/i-doit-add-ons/checkmk/3-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/3-cmk.png)

Hostmerkmale
------------

Über die Kategorie **Hostmerkmale** werden diese zugewiesen oder angezeigt. Es wird unterschieden zwischen:

*   **Hostmerkmale**: einfache manuelle Zuweisung von Merkmalen (daher statisch)

*   **CMDB Merkmale**: Merkmale, die durch ein [Attribut](../grundlagen/struktur-it-dokumentation.md) aus der CMDB ausgeprägt werden

*   **Dynamische Merkmale**: Hostmerkmale, die durch Regelungen generiert werden

Alle Arten von Hostmerkmalen werden unter **Extras → Check_MK** konfiguriert.

Die statischen Hostmerkmale werden manuell gepflegt. Die Standardmerkmale von Check\_MK werden bereits vorkonfiguriert ausgeliefert.

Die CMDB-Merkmale bedienen sich an Inhalten aus der CMDB. In der Konfiguration werden nur Objekttypen angezeigt, die den Kategorieordner **Check_MK** zugeordnet haben. Hier können einzelne Attribute ausgewählt werden. Es kann eine globale Definition eingerichtet werden, die für alle aufgelisteten Objekttypen ohne spezielle Konfiguration gültig ist, die die globale Definition ignoriert. Über **Generisches Standort-Merkmal exportieren** kann der Objekttitel des Standorts eines Objekts als Tag zu den Hostmerkmalen hinzugefügt werden.

Im folgenden Beispiel wird das Attribut **Betriebssystem** aus der CDMB in ein Hostmerkmal gewandelt.

[![Betriebssystem](../assets/images/de/i-doit-add-ons/checkmk/4-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/4-cmk.png)

Der Server im Beispiel hat als Betriebssystem Debian 7.1 zugewiesen. Dieser Wert wird beim Export der Konfiguration zu dem entsprechenden Hostmerkmal übernommen.

Die dynamischen Merkmale funktionieren ähnlich, nur dass sie regelbasiert arbeiten. Im folgenden Beispiel wird der Standort eines Objektes ausgewertet und beim Export der Konfiguration die angegebenen Hostmerkmale mit übergeben. Steht ein Server im konkreten Beispiel unterhalb des Standortes München, bekommt er das Hostmerkmal WAN mitgegeben.

Kategorie Hostmerkmale
----------------------

In der Kategorie **Hostmerkmale** eines Objektes werden die dynamischen Hostmerkmale angezeigt und die manuellen, statischen Hostmerkmale zugewiesen.

Kategorie Servicezuweisung
--------------------------

Analyse-Modul

Diese Kategorie ist nur bei installiertem Analyse-Modul nutzbar.

Die **Servicezuweisung** dient zur Zuweisung von installierter Software zu Service-Checks, die per [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) ausgelesen werden. Dies wird genutzt, um im Analyse-Modul anhand von aus dem Monitoring gemeldeten Ausfällen zu errechnen, welche IT-Services betroffen sind. In der Kategorie wird quasi ein Monitoring Check mit einer auf dem System installierten Software "verheiratet".

Dadurch kann im Analyse-Modul ermittelt werden, welche IT-Services direkt oder indirekt von dem technischen Ausfall betroffen sind.

Export der Konfiguration
------------------------

Über **Extras → Check_MK → Check_MK Export** erreichbar kann manuell der Export der WATO-Konfigurationsdaten angestoßen werden.

Erzeugt werden Dateien im .mk\-Format, die zur Check\_MK-Instanz übertragen werden können. Zunächst werden diese im Verzeichnis abgelegt, welches in der Exportkonfiguration angegeben wurde. Zur einfachen Übertragung in die OMD Site werden die Daten zusätzlich als .zip und als Tarball gepackt.

Die Definition der Export-Struktur erlaubt es, die exportierten Objekte in einer Ordnerstruktur ins Check\_MK zu übertragen. Hierbei kann gewählt werden, ob entweder die Standorte als Ordner angelegt werden sollen oder die Objekttypen.

Transfer Script
---------------

Im Installationsverzeichnis von i-doit befindet sich ein Shellscript namens checkmk_transfer.sh. Dieses wird mit den entsprechenden Zugriffen auf die OMD Site konfiguriert und überträgt dann automatisiert die i-doit-Konfiguration ins WATO.

Dazu steuert es die [i-doit Console](../automatisierung-und-integration/cli/index.md) an und baut eine SSH-Verbindung zur Check\_MK-Instanz auf. Es überträgt die Daten in die OMD Site und entpackt diese automatisch. Anschließend signalisiert es WATO, dass Änderungen vorliegen.

Voraussetzung für die Übertragung per SSH ist Public-Key-Authentifizierung zwischen der i-doit-Instanz und der Check\_MK OMD Site. Eine detaillierte Anleitung dazu liegt im Installationverzeichnis von i-doit unter docs/checkmk/README bzw. README.german.

Releases
--------

| Version | Date       | Changelog                                                                                                                                                                                                                                                             |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.1     | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br> [Task] Design Compatibility                                                                                                                                                                                                        |
| 1.0.2   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                                          |
| 1.0.1   | 14.10.2019 | [Bug] List editing of Check_MK categories <br> [Bug] Create new category entries in the list editing category "Export Parameter (subcategory of Check_MK (Host))" <br>[Bug] Add more dynamic CMDB-tags <br> [Bug] Export of dynamic host tags with special characters |
| 1.0     | 17.12.2018 | [Improvement] Add-on is installable[Improvement] Add-on is uninstallable <br> [Improvement] Add-on is activatable <br> [Improvement] Add-on is deactivatable <br> [Change] Add-onize Check_MK                                                                         |
