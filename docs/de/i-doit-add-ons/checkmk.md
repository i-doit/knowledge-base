---
title: Checkmk
description: "Check\\_MK ist eine Software für Network Monitoring, die du aus i-doit heraus konfigurieren kannst."
icon:
status:
lang: de
---
# Checkmk

[![Logo von Check_MK](../assets/images/de/i-doit-add-ons/checkmk/1-cmk.gif)](../assets/images/de/i-doit-add-ons/checkmk/1-cmk.gif)

Check\_MK ist eine Software für [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md), die du aus i-doit heraus konfigurieren kannst.

Das Add-on exportiert WATO-Konfigurationsdateien an Check\_MK. WATO verwaltet Änderungen an der Monitoring-Konfiguration und prüft deren Gültigkeit. Die exportierten Konfigurationen enthalten IP-Adressen oder DNS-Namen der Hosts und Cluster, zugeordnete Hostmerkmale (Tags) sowie verknüpfte Kontakte. Weitere Monitoring-spezifische Konfigurationen verbleiben in Check\_MK.

Der Vorteil: Du vermeidest doppelte Datenpflege. Hostmerkmale, die in Check\_MK das Monitoring regelbasiert steuern, werden automatisch aus CMDB-Informationen wie dem Standort eines Objekts generiert.

!!! attention "Achtung!"

    Schnittstelle unterstützt offiziell ausschließlich Check\_MK bis Version 1.4. Für alle neueren Versionen ist das [Check\_MK 2 Add-on](./checkmk2/index.md) vorgesehen.
    Welche Funktionen/Bereiche der Schnittstelle auch mit Check\_MK Versionen > 1.4 fehlerfrei funktionieren ist daher unklar.

## Grundkonfiguration

Richte die Konfiguration unter **Verwaltung → Schnittstellen → Monitoring → Exportkonfiguration** ein:

1. Lege den **lokalen Pfad** fest -- einen absoluten oder relativen Pfad im Dateisystem, in dem die erzeugte Konfiguration abgelegt wird.
2. Gib den **Link zum Monitoring-Tool** an, damit i-doit Links auf die Monitoring-Instanz generieren kann.
3. Wähle **Check\_MK** als Typ -- weitere Parameter erscheinen.

Die wichtigsten Parameter:

- **Zugewiesene Kontakte exportieren**: Legt die den [Objekten](../grundlagen/struktur-it-dokumentation.md) zugewiesenen Kontakte inklusive [Objekttitel](../grundlagen/eindeutige-referenzierungen.md) in der Konfiguration ab.
- **Site**: Definiert die Site, an die die Konfiguration weitergereicht wird. Setze dafür **Multisite (Distributed Monitoring)** auf "Ja".
- **Hosts/Ordner sperren**: Verhindert, dass die exportierte Konfiguration in Check\_MK bearbeitet wird -- so werden deine Einstellungen beim nächsten Export nicht überschrieben.
- **Master Site**: Wähle hier die Site aus, die über mehrere Exportkonfigurationen hinzugekommen ist. Bei nur einer Konfiguration lässt du das Feld leer.

[![Master Site](../assets/images/de/i-doit-add-ons/checkmk/2-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/2-cmk.png)

## Kategorien

Ordne den gewünschten [Objekttypen](../grundlagen/struktur-it-dokumentation.md) über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) den [Kategorie-Ordner](../grundlagen/struktur-it-dokumentation.md) **Check_MK (Host)** zu.

In der Kategorie **Check_MK (Host)** wählst du eine Export-Konfiguration aus und definierst den Hostnamen bzw. die Hostadresse. Optional verhinderst du den Export der IP-Adresse -- z. B. wenn diese per DHCP zugewiesen wird und sich ändert.

[![Check_MK (Host)](../assets/images/de/i-doit-add-ons/checkmk/3-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/3-cmk.png)

## Hostmerkmale

Über die Kategorie **Hostmerkmale** werden diese zugewiesen oder angezeigt. Es wird unterschieden zwischen:

*   **Hostmerkmale**: einfache manuelle Zuweisung von Merkmalen (daher statisch)

*   **CMDB Merkmale**: Merkmale, die durch ein [Attribut](../grundlagen/struktur-it-dokumentation.md) aus der CMDB ausgeprägt werden

*   **Dynamische Merkmale**: Hostmerkmale, die durch Regelungen generiert werden

Alle Arten von Hostmerkmalen werden unter **Extras → Check_MK** konfiguriert.

Die statischen Hostmerkmale werden manuell gepflegt. Die Standardmerkmale von Check\_MK werden bereits vorkonfiguriert ausgeliefert.

Die CMDB-Merkmale greifen auf Inhalte aus der CMDB zu. In der Konfiguration siehst du nur Objekttypen, denen der Kategorieordner **Check_MK** zugeordnet ist. Du kannst einzelne Attribute auswählen und eine globale Definition einrichten, die für alle Objekttypen ohne spezielle Konfiguration gilt. Über **Generisches Standort-Merkmal exportieren** fuegst du den Objekttitel des Standorts als Tag zu den Hostmerkmalen hinzu.

Im folgenden Beispiel wird das Attribut **Betriebssystem** aus der CMDB in ein Hostmerkmal umgewandelt.

[![Betriebssystem](../assets/images/de/i-doit-add-ons/checkmk/4-cmk.png)](../assets/images/de/i-doit-add-ons/checkmk/4-cmk.png)

Der Server im Beispiel hat als Betriebssystem Debian 7.1 zugewiesen. Dieser Wert wird beim Export der Konfiguration zu dem entsprechenden Hostmerkmal übernommen.

Die dynamischen Merkmale arbeiten regelbasiert. Im folgenden Beispiel wird der Standort eines Objekts ausgewertet: Steht ein Server unterhalb des Standorts "Muenchen", erhält er beim Export automatisch das Hostmerkmal "WAN".

### Kategorie Hostmerkmale

In der Kategorie **Hostmerkmale** eines Objektes werden die dynamischen Hostmerkmale angezeigt und die manuellen, statischen Hostmerkmale zugewiesen.

### Kategorie Servicezuweisung

!!! info "Diese Kategorie ist nur bei installiertem Analyse-Modul nutzbar."

Über die **Servicezuweisung** verknüpfst du installierte Software mit Service-Checks, die per [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) ausgelesen werden. So kann das Analyse-Modul anhand von Monitoring-Ausfaellen ermitteln, welche IT-Services direkt oder indirekt betroffen sind.

## Export der Konfiguration

Den Export startest du manuell unter **Extras → Check_MK → Check_MK Export**.

Dabei werden `.mk`-Dateien erzeugt und im konfigurierten Verzeichnis abgelegt. Zur einfachen Übertragung in die OMD Site werden die Daten zusätzlich als `.zip` und als Tarball gepackt.

Die Export-Struktur bestimmt, wie die Objekte in Check\_MK organisiert werden: Du kannst wählen, ob Standorte oder Objekttypen als Ordnerstruktur angelegt werden.

## Transfer Script

Im Installationsverzeichnis von i-doit findest du das Shellscript `checkmk_transfer.sh`. Dieses Script automatisiert den gesamten Transfer:

1. Es steuert die [i-doit Console](../automatisierung-und-integration/cli/index.md) an.
2. Es baut eine SSH-Verbindung zur Check\_MK-Instanz auf.
3. Es überträgt die Daten in die OMD Site und entpackt sie.
4. Es signalisiert WATO, dass Änderungen vorliegen.

**Voraussetzung:** Public-Key-Authentifizierung zwischen der i-doit-Instanz und der Check\_MK OMD Site. Eine detaillierte Anleitung findest du im Installationsverzeichnis unter `docs/checkmk/README` bzw. `README.german`.

## Releases

| Version | Date       | Changelog                                                                                                                                                                                                                                                            |
| ------- | ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.1.1   | 09.09.2025 | [Task] PHP 8.4 compatibility                                                                                                                                                                                                                                         |
| 1.1     | 05.09.2022 | [Task] PHP 8.0 Compatibility<br> [Task] Design Compatibility                                                                                                                                                                                                         |
| 1.0.2   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                                         |
| 1.0.1   | 14.10.2019 | [Bug] List editing of Check_MK categories<br> [Bug] Create new category entries in the list editing category "Export Parameter (subcategory of Check_MK (Host))" <br>[Bug] Add more dynamic CMDB-tags <br> [Bug] Export of dynamic host tags with special characters |
| 1.0     | 17.12.2018 | [Improvement] Add-on is installable[Improvement] Add-on is uninstallable <br> [Improvement] Add-on is activatable <br> [Improvement] Add-on is deactivatable <br> [Change] Add-onize Check_MK                                                                        |
