---
title: JDisc Discovery
description: Konfiguration und Nutzung von JDisc Discovery mit i-doit
icon: addons/jdisc
status:
lang: de
---

!!! warning "Wichtiger Hinweis"
    Bitte erstellen Sie **vor jeder Änderung an einer Schnittstelle oder einem Import** ein vollständiges Backup. Sollte das Ergebnis nicht zufriedenstellend sein, kann dieses problemlos wiederhergestellt werden.

[JDisc Discovery](http://www.jdisc.com/de/) ist ein Discovery-Tool zur automatischen Netzwerk-Inventarisierung. Es erkennt Hardware, Betriebssysteme, Software, Netzwerke, Virtualisierungs- und Cluster-Umgebungen. Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/it-service-management-mit-dem-discovery-tool-jdisc-und-i-doit/).

## Ziel der JDisc-Integration in i-doit

Die Integration von JDisc Discovery in i-doit zielt darauf ab, die Stärken beider Systeme zu kombinieren:

-  **Automatisierte Datenerfassung**: Nutzung der leistungsstarken Scan-Funktionen von JDisc zur automatischen Erhebung aktueller und detaillierter Inventardaten.
-  **Zentrale Datenhaltung und -verwaltung**: Überführung dieser Daten in die i-doit CMDB, um eine zentrale, konsistente und aktuelle Datenbasis ("Single Source of Truth") für alle IT-Assets zu schaffen.
-  **Reduzierung manuellen Aufwands**: Minimierung der manuellen Dateneingabe und -pflege, wodurch Zeit gespart und die Fehleranfälligkeit reduziert wird.
-  **Verbesserte Datenqualität**: Sicherstellung einer hohen Datenqualität in der CMDB durch regelmäßige, automatisierte Updates von JDisc.
-  **Fundierte Entscheidungen**: Bereitstellung einer soliden Datengrundlage für IT-Management-Aufgaben wie Change Management, Lizenzmanagement, Problem Management und strategische Planung.

## Installation

JDisc Discovery wird unter Microsoft Windows installiert (idealerweise als Server-Edition). Während des Setups:

* werden Passwörter für die PostgreSQL-Datenbank gesetzt:
  * `postgres`: Admin-Zugriff
  * `postgresro`: Nur Lesezugriff (wird für i-doit benötigt)
* muss angegeben werden, dass der PostgreSQL-Server extern erreichbar ist (Port `25321`).
* ist sicherzustellen, dass die Windows-Firewall den Port freigibt.

Weiterführende Links:

* [JDisc Dokumentation](https://jdisc.com/support/documentation/)
* [JDisc Support](https://jdisc.com/support/)

## Schnittstellen-Konfiguration in i-doit

Pfad: **Verwaltung → Import & Schnittstellen → JDISC → Konfiguration**

[![JDisc Konfiguration](../../assets/images/de/daten-konsolidieren/jdisc/1-jdisc.png)](../../assets/images/de/daten-konsolidieren/jdisc/1-jdisc.png)

### Allgemeine Einstellungen

| Parameter                             | Beschreibung                                            |
| ------------------------------------- | ------------------------------------------------------- |
| **Standard Server**                   | Wird beim manuellen Import vorausgewählt.               |
| **Bezeichnung**                       | Interner Name der Verbindung.                           |
| **Host**                              | IP-Adresse oder DNS-Name der JDisc-Instanz.             |
| **Port**                              | PostgreSQL-Port der JDisc-Datenbank (`25321` Standard). |
| **Datenbank**                         | Standard: `inventory`.                                  |
| **Benutzername**                      | z.B. `postgresro`. Nur Lesezugriff erforderlich.        |
| **Passwort**                          | Zum Benutzer gehöriges Passwort.                        |
| **Import älterer Versionen erlauben** | Nur bei alten JDisc-Versionen relevant.                 |

:material-arrow-right: Mit **Verbindung prüfen** kann die Erreichbarkeit getestet werden.

Zusätzliche Archivierungsoptionen:
Pfad: **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen → JDisc**

| Parameter       | Beschreibung                                                             |
| --------------- | ------------------------------------------------------------------------ |
| **Schwellwert** | Objekte, die länger als X Tage nicht gescannt wurden, werden archiviert. |
| **Einheit**     | Tage, Wochen oder Monate.                                                |

### Discovery-Einstellungen (WebService / GraphQL)

JDisc kann per WebService oder GraphQL ferngesteuert werden, z.B. um Scans auszulösen.

| Parameter        | Beschreibung                                 |
| ---------------- | -------------------------------------------- |
| **Benutzername** | Benutzer für den WebService/GraphQL-Zugriff. |
| **Passwort**     | Passwort des Benutzers.                      |
| **Port**         | Standard: `9000` (SOAP), `443` (GraphQL).    |
| **Protokoll**    | `http` (SOAP), `https` (GraphQL).            |

!!! info "Hinweis zur GraphQL-Integration"
    Ab i-doit Version 22 wird die moderne **GraphQL API** empfohlen. Vorteile:
    - Verschlüsselte Kommunikation via HTTPS


## JDisc-Profile definieren

Pfad: **Verwaltung → Import & Schnittstellen → JDISC → Profile**

[![JDisc Profile](../../assets/images/de/daten-konsolidieren/jdisc/2-jdisc.png)](../../assets/images/de/daten-konsolidieren/jdisc/2-jdisc.png)

Ein Profil definiert, wie JDisc-Daten Objekttypen und Kategorien in i-doit zugeordnet werden.

### Einstellungen

| Feld             | Beschreibung                       |
| ---------------- | ---------------------------------- |
| **JDisc Server** | Zugeordnete Instanz für das Profil |
| **Titel**        | Bezeichnung des Profils.           |
| **Beschreibung** | Freitext zur Dokumentation.        |

:material-arrow-right: Das mitgelieferte Profil **Example** kann als Vorlage genutzt werden.

## Import aus der Web GUI

Pfad: **Extras → Import → JDisc**

[![Import GUI](../../assets/images/de/daten-konsolidieren/jdisc/3-jdisc.png)](../../assets/images/de/daten-konsolidieren/jdisc/3-jdisc.png)

### Import-Modi

| Modus                                  | Verhalten                                                                |
| -------------------------------------- | ------------------------------------------------------------------------ |
| **Aktualisieren**                      | Erstellt neue Objekte und aktualisiert bestehende.                       |
| **Aktualisieren (Neu inventarisiert)** | Verknüpfungen zurücksetzen und neu zuordnen                              |
| **Aktualisieren (Bestehende)**         | Nur bereits vorhandene Objekte aktualisieren                             |
| **Erstellen**                          | Alle erkannten Objekte neu anlegen                                       |
| **Erstelle nur neu gescannte**         | Nur Objekte importieren, die im aktuellen Scan neu erkannt wurden        |
| **Überschreiben**                      | Objekte vollständig neu importieren, vorhandene Listen-Kategorien leeren |

### Pausieren des Imports

Die GUI erlaubt:

* **Pause**: Vorgang unterbrechen
* **Fortsetzen**: Import wieder aufnehmen
* **Abbrechen**: Sofortiger Stopp, bereits importierte Objekte bleiben erhalten

Diese Optionen sind konfigurierbar unter: **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen → JDisc**

## Kategorie: JDisc Discovery (Objekte)

Objekte können einzeln per JDisc-Daten aktualisiert werden. Voraussetzung: Seriennummer, Hostname oder FQDN ist bekannt.

[![Kategorie JDisc](../../assets/images/de/daten-konsolidieren/jdisc/6-jdisc.png)](../../assets/images/de/daten-konsolidieren/jdisc/6-jdisc.png)

!!! note "GraphQL vorausgesetzt"
    Die Seriennummer wird nur angezeigt, wenn die Verbindung per GraphQL erfolgt.

## Automatisierter Import per Konsole

Beispiel-Aufruf aus dem i-doit-Verzeichnis:

```bash
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```

Beispiel `jdisc.ini`:

```ini
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
server=2
mode=1
overwriteHost
detailedLogging=3
regenerateSearchIndex
```

:material-arrow-right: Details zur Konfiguration: [Verwendung von INI-Dateien](../../automatisierung-und-integration/cli/configuration-files.md)

## Report Views

### JDisc-Verfügbarkeit

Dieser Report vergleicht i-doit-Objekte mit JDisc-Objekten.

### JDisc-Geräte löschen

Dieser Report ermöglicht das Entfernen archivierter und gelöschter i-doit Geräte direkt aus JDisc.

!!! warning "Achtung: JDisc-Objekte werden gelöscht"
    Dieser Report löscht Objekte direkt in JDisc. Bitte vorher ein Backup/Snapshot erstellen.

!!! info "Nur mit GraphQL nutzbar"
    Die Löschfunktion funktioniert ausschließlich bei aktiver GraphQL-Verbindung.

---

## FAQ

Falls der Import das Standard-`memory_limit` von **2G** überschreitet, kann in den [Experteneinstellungen](../../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md#liste-der-einstellungen) folgender Wert gesetzt werden:

```ini
system.memory-limit.jdisc = 3G
```

---

Weitere Informationen zu Matching-Profilen, Kategorie-Mapping und erweiterten Optionen findest du in den nachgelagerten Artikeln. Diese werden nach Bedarf verlinkt oder modular erweitert.

* [Erweiterte Optionen für JDisc-Importprofile](advanced-options.md)
* [i-doit console utility Import](../../automatisierung-und-integration/cli/index.md)
* [Verwendung von INI-Dateien](../../automatisierung-und-integration/cli/configuration-files.md)
