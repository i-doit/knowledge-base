---
title: JDisc Connector
description: JDisc Connector Add-on
icon: addons/jdisc
status: new
lang: de
---

# JDisc Connector

## Übersicht

Der **JDisc Connector** ist ein Add-on für i-doit, das den automatisierten Import von IT-Objekten aus einer JDisc-Instanz ermöglicht. Die Integration basiert auf der GraphQL-Schnittstelle von JDisc und erlaubt eine präzise Synchronisation von Geräten und deren Eigenschaften in die CMDB von i-doit.

!!! warning "Das Add-on ist ab **i-doit Version 36** verfügbar. Die bisherige Integration bleibt bestehen solange das Add-on nicht installiert ist. Wird das Add-on installiert ersetzt das Add-on die bisherige Integration."

## Ziel der JDisc-Integration in i-doit

Die Integration von JDisc Discovery in i-doit zielt darauf ab, die Stärken beider Systeme zu kombinieren:

- Automatisierte Datenerfassung: Nutzung der leistungsstarken Scan-Funktionen von JDisc zur automatischen Erhebung aktueller und detaillierter Inventardaten.
- Zentrale Datenhaltung und -verwaltung: Überführung dieser Daten in die i-doit CMDB, um eine zentrale, konsistente und aktuelle Datenbasis ("Single Source of Truth") für alle IT-Assets zu schaffen.
- Reduzierung manuellen Aufwands: Minimierung der manuellen Dateneingabe und -pflege, wodurch Zeit gespart und die Fehleranfälligkeit reduziert wird.
- Verbesserte Datenqualität: Sicherstellung einer hohen Datenqualität in der CMDB durch regelmäßige, automatisierte Updates von JDisc.
- Fundierte Entscheidungen: Bereitstellung einer soliden Datengrundlage für IT-Management-Aufgaben wie Change Management, Lizenzmanagement, Problem Management und strategische Planung.

* * *

## Voraussetzungen

- Separate JDisc installation
- i-doit Version: >= 36
- JDisc mit aktivierter GraphQL-Schnittstelle
- Netzwerkzugang zum JDisc-Server
- Benutzerkonto in JDisc mit Leserechten (`postgresro`)

### Weiterführende Links:

* [JDisc Dokumentation](https://jdisc.com/support/documentation/)
* [JDisc Support](https://jdisc.com/support/)

* * *

## Installation

1. Das Add-on aus dem [Kundenportal](../../administration/kundenportal.md) herunterladen und über das [Admin-Center](../../administration/admin-center.md) hochladen und installieren
   1. **oder** das Add-on über das integrierte [Add-on & Subscription Center](../../administration/add-on-and-subscription-center.md) installieren
2. Nach der Installation erscheint ein neuer Menüpunkt im Add-on Menü

* * *

## Schnellstart

1. [Discovery Server](#discovery-server) konfigurieren
2. Verbindung prüfen
3. [Sync Profile](#sync-profile) erstellen
4. Synchronisation durchführen
5. [Status und Logs](#letzte-logs) prüfen

* * *

## Konfiguration

Einstellungen die Konfiguriert werden müssen damit die Verbindung zur JDisc Instanz hergestellt werden kann.

### Discovery Server

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)-->

| Allgemeine Einstellungen | Beschreibung                                                           |
| ------------------------ | ---------------------------------------------------------------------- |
| **Standard Server**      | Soll der Eintrag als standard Server für Sync Profile verwendet werden |
| **Name**                 | Bezeichnung des Server Eintrages                                       |
| **Host**                 | Hostadresse oder IP des Servers auf dem JDisc läuft                    |
| **Port**                 | Port der JDisc pgSQL Installation                                      |
| **Datenbank**            | JDisc Datenbankname  zumeist `Inventory`                               |
| **Benutzername**         | Benutzername für die JDisc Datenbank                                   |
| **Password**             | Password für die JDisc Datenbank                                       |
| **Versionsprüfung**      | Nur bei sehr alten JDisc-Versionen relevant                            |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)-->

| Discovery Einstellungen | Beschreibung                                       |
| ----------------------- | -------------------------------------------------- |
| **Benutzername**        | JDisc Benutzername zumeist der Windows Anmeldename |
| **Passwort**            | JDisc Benutzer Passwort                            |
| **Port**                | Port über den JDisc erreicht werden kann           |
| **Protokoll**           | Protokoll über welches JDisc erreichbar ist        |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)-->

| Discovery Kategorie Einstellungen | Beschreibung                                         |
| --------------------------------- | ---------------------------------------------------- |
| **Timeout**                       | Wert nach dem ein Timeout stattfindet                |
| **Import Wiederholungen**         | Wert der bestimmt wie oft ein Import wiederholt wird |

!!! info "Die Einstellungen lassen sich nach dem Speichern prüfen indem der erstellte Eintrag angezeigt und dort auf die Schaltflächen `Konfiguration prüfen`, `Discovery prüfen` und `GraphQL prüfen` gedrückt wird"

### Sync Profile

Konfiguration der Regeln zum Import aus JDisc.

#### Allgemeine Konfiguration

Jedes Sync Profil benötigt einen Namen und einen zugewiesenen JDisc Server.

<!--[![sync-profile-general-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)-->

| Allgemeine Konfiguration | Beschreibung                                                        |
| ------------------------ | ------------------------------------------------------------------- |
| **Name**                 | Name des Sync Profiles                                              |
| **Discovery Server**     | JDisc Discovery Server Eintrag der für dieses Profil verwendet wird |
| **Beschreibung**         | Beschreibung des Profiles                                           |

#### Objekttyp-Zuweisung

Die Spalten `Objekt Titel Transformation`, `FQDN Zusatz`, `Port Filter` und `Standort` müssen manuell über die Spaltenkonfiguration eingeblendet werden.

Jeder `JDisc-Typ` wird mit einem `i-doit Objekttyp` verknüpft. Wenn kein `i-doit Objekttyp` ausgewählt wird, wird dieser nicht importiert. Das [Import Matching Profile](../../administration/verwaltung/import-und-schnittstellen/import-matching-profile.md) wird in der [Verwaltung](../../administration/verwaltung/index.md) unter `Import und Schnittstellen > Import Matching Profile` Konfiguriert. Über das [Import Matching Profile](../../administration/verwaltung/import-und-schnittstellen/import-matching-profile.md) kann zum Beispiel gefiltert werden ob Objekte import werden die nicht über bestimmte Attribute verfügen.

#### Synchronisations-Konfiguration

<!--[![sync-profile-sync-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)-->

| Synchronisations-Konfiguration                         | Beschreibung                                                                                                                                                                                                                                                                                                          |
| ------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **JDisc Gruppe**                                       | Wird hier eine JDisc Gruppe ausgewählt werden nur Objekte aus dieserJDisc Gruppe importiert                                                                                                                                                                                                                           |
| **Filter**                                             | Hier besteht die Möglichkeit nach IP-Adressen zu filtern<br>Wird `IP-Filterliste` ausgewählt wird ein weiteres Feld dargestellt in dem die IP-Adressen eingetragen werden<br>Außerdem wird das Feld `IP-Liste aus Datei hochladen` dargestellt bei dem eine Liste mit einer IP-Adresse je Zeile hochladen werden kann |
| **Import Modus**                                       | Hier ist eine vorauswahl des zu verwendeten **Import Modus** möglich                                                                                                                                                                                                                                                  |
| **Überschneidende Host-Adressen überschreiben**        | Ist eine Host-Adresse bereits belegt wird diese überschrieben                                                                                                                                                                                                                                                         |
| **Protokollierung**                                    | Konfiguriert wie detailreich das Import Protokoll ist                                                                                                                                                                                                                                                                 |
| **Suchindex nach erfolgreichem Import neu generieren** | Konfiguriert ob der Suchindex erneuert wird, damit die neuen Objekte über die globale Suche gefunden werden können                                                                                                                                                                                                    |

#### Allgemein

| Allgemein                                                                            | Beschreibung                                                                                                                                                                                                                                                     |
| ------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Kategorien auswählen**                                                             | Welche [Kategorien](../../grundlagen/kategorien-und-attribute.md) sollen beim Import befüllt werden? Es werden nur Kategorien gelistet, die der Import behandeln kann.                                                                                           |
| **MAC-Filter (versteckt)**                                                           | Nur sichtbar wenn die Kategorie **Netzwerkport** oder **PC port** aktiviert ist. Entweder kann eine White- oder eine Blacklist für MAC Adressen gewählt werden. Eine MAC Adresse pro Zeile.                                                                      |
| **Objekttyp aktualisieren**                                                          | Ist das Device bereits als Objekt in i-doit vorhanden, kann hierüber bestimmt werden, ob der Objekttyp anhand der Zuweisung (siehe oben) aktualisiert werden soll oder nicht.                                                                                    |
| **Objekt Bezeichnung aktualisieren**                                                 | Soll die Objekt Bezeichnung durch den Import aktualisiert werden?                                                                                                                                                                                                |
| **Standort des übergeordneten Objekts übernehmen**                                   | Geräte die physikalisch an einem anderen Gerät verbunden sind erhalten automatisch den Standort des verbundenen Gerätes.                                                                                                                                         |
| **Berücksichtige Default Templates aus Objekttypen (nur für neu erstellte Objekte)** | Wird ein neues Objekt erstellt, wird automatisch das im Objekttyp hinterlegte [Template](../../effizientes-dokumentieren/templates.md) berücksichtigt.                                                                                                           |
| **CMDB-Status von Objekten ändern zu**                                               | Bereits vorhandene Objekte können beim Aktualisieren einen bestimmten **[CMDB-Status](../../grundlagen/lebens-und-dokumentationszyklus.md)** erhalten. Soll der **CMDB-Status** nicht geändert werden, ist in der Auswahl **CMDB-Status beibehalten** zu wählen. |
| **CMDB-Status für neu importierte Objekte**                                          | Neu erstellte Objekte können einen bestimmten **[CMDB-Status](../../grundlagen/lebens-und-dokumentationszyklus.md)** erhalten. Soll der **CMDB-Status** nicht geändert werden, ist in der Auswahl **-** zu wählen.                                               |
| **Custom attributes importieren**                                                    | Wenn in JDisc Discovery benutzerdefinierte Attribute (**Custom Attributes**) gepflegt werden, können diese in i-doit importiert werden. Diese werden nach dem Import in der Kategorie **JDisc Custom Attributes** angezeigt.                                     |

#### Software und Betriebssystem

| Software und Betriebssystem                                                                       | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Alle Software importieren**                                                                     | Soll inventarisierte Software als Objekttyp **Anwendungen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Alle Software importieren** -> **Softwarestandort**                                             | Nur sichtbar wenn **Alle Software importieren** aktiviert ist. Setzt den Standort von Anwendungen auf einen bestimmten Standort. Nützlich wenn Berechtigungen auf Grundlage von Standorten verwendet werden.                                                                                                                                                                                                                                                                                                                                                                                                              |
| **Softwarelizenzen importieren**                                                                  | Sollen inventarisierte Softwarelizenzen als Objekttyp **Lizenzen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Systemdienste importieren**                                                                     | Sollen inventarisierte Systemdienste als Objekttyp **Systemdienst** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **Cloud-Subskriptionen importieren**                                                              | Sollen Daten aus der **JDisc Kategorie Cloud** importiert werden?<br>Wird in die Kategorie **Zugewiesene Abonnente** importiert. Die Rückwärtige Kategorie **Zugewiesene Benutzer** ist bei Objekten vom Typ Lizenzen zu finden.                                                                                                                                                                                                                                                                                                                                                                                          |
| **Cloud-Benutzer anlegen und importieren**                                                        | Wird nur angewendet wenn die Option **Cloud-Abonnements importieren** aktiv ist.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Einfache Datenbankmodellierung verwenden**                                                      | Soll die neue oder die alte [Datenbanklogik](../../anwendungsfaelle/dokumentation-von-datenbanken.md) verwendet werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Software-Filter (versteckt)**                                                                   | Nur sichtbar wenn die Option **Alle Software importieren** aktiviert ist. Entweder kann eine White- oder eine Blacklist an Software-Applikationen angegeben werden, welche importiert werden sollen (Whitelist) oder eben nicht (Blacklist). Es können Wildcards (\*) angegeben werden. Die Liste von Titeln wird durch Kommas separiert.                                                                                                                                                                                                                                                                                 |
| **Filter als regulären Ausdruck verwenden**                                                       | Den Software Filter mit Strings oder mit Regulären Ausdrücken verwenden? Da das regex direkt an die JDisc Datenbank weitergeleitet wird, sollten die passenden regex parameter verwendet werden.<br>Diese sind z.B. unter [h](https://www.postgresql.org/docs/9.3/functions-matching.html)[https://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html) zu finden.<br><br>Hinweis eines Anwenders:<br><br>\s kann nicht verwendet werden. Hier wird mit Leerzeichen gearbeitet.<br>\d kann nicht verwendet werden. Hier muss mit [a-zA-Z] gearbeitet werden. |
| **Betriebssystemfamilie (falls verfügbar) statt Betriebssystemversion als Objekttitel verwenden** | Für den Softwareimport anstatt der Softwareversion die Softwarefamilie als Objekttitel verwenden. Z.B. anstatt "Windows Server 2008 Standard" nur "Windows" mit "Server 2008 Standard" als Variante.                                                                                                                                                                                                                                                                                                                                                                                                                      |

#### Netzwerk

| Netzwerk                                                                    | Beschreibung                                                                                                                                                                                                                               |
| --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Netzwerkschnittstellen importieren als**                                  | Inventarisierte Netzwerk-Schnittstellen können in unterschiedlichen Kategorien abgebildet werden.                                                                                                                                          |
| **In Netzwerk-Endpunkte importieren**                                       | Die Verbindungen werden nicht in die Verkabelung Kategorie, sondern in die Kategorie "Verbindungs Endpunkte" importiert. Das ermöglicht zwischen der manuellen Verkabelung und der automatischen Verkabelung durch JDisc zu unterscheiden. |
| **Alle Layer-3-Netze einbeziehen**                                          | Sollen inventarisierte IP-Netze als Objekttyp **Layer-3-Netze** importiert werden? Ist diese Option gesetzt, wird die **Layer-3-Filter** dargestellt.                                                                                      |
| **Alle Layer-3-Netze einbeziehen** -> **Layer-3-Filter**                    | Nur sichtbar wenn **Alle Layer-3-Netze einbeziehen**aktiviert ist. Geben Sie den Bereich in den folgenden Formaten an: 127.0.0.1-127.0.10.255 oder 10.40.55.0/24 oder 10.40.55.7. Eine Regel pro Zeile.                                    |
| **Alle Layer-3-Netze einbeziehen** -> **Netzwerkstandort**                  | Nur sichtbar wenn **Alle Layer-3-Netze einbeziehen** aktiviert ist. Setzt den Standort von Layer-3 Objekten auf einen bestimmten Standort. Nützlich wenn Berechtigungen auf Grundlage von Standorten verwendet werden.                     |
| **IP-Adressentypen beibehalten**                                            | Sollen **IPv4 Adressen**, **IPv6 Adressen**, **Loopback Adressen**, **Virtuelle Adressen** importiert werden?                                                                                                                              |
| **Importtyp für DHCP IP-Adressen**                                          | Sollen per DHCP zugewiesen Adressen überschrieben werden?                                                                                                                                                                                  |
| **VLANs einbeziehen**                                                       | Sollen inventarisierte VLANs als Objekttyp **Layer-2-Netze** importiert werden?                                                                                                                                                            |
| **Cluster einbeziehen**                                                     | Sollen (Virtualisierungs-)Umgebungen als Objekttyp **Cluster** importiert werden?                                                                                                                                                          |
| **Blade/Chassis-Verbindungen beim Import einbeziehen**                      | Sollen Objekte vom Typ **Blade Server** zu Objekten vom Typ **Blade Chassis** beim Import hinzugefügt werden?                                                                                                                              |
| **Objekttyp der zugewiesenen Module innerhalb eines Blade/Chassis-Gerätes** | Ist ein Blade oder Switch Chassis inventarisiert worden, können die eingesteckten Module einem bestimmten Objekttyp beim Import zugeordnet werden.                                                                                         |
| **Objekttyp der zugewiesenen Module aktualisieren**                         | Sollen die Objekttypen der zugewiesenen Module eines Blade/Chassis Gerätes aktualisiert werden?                                                                                                                                            |
| **Hostname statt FQDN als Objekttitel verwenden?**                          | Sofern Geräte ein FQDN besitzen werden diese bis zum Hostnamen aufgelöst.                                                                                                                                                                  |

* * *

## Geräteliste

Die Geräteliste zeigt alle durch den **Discovery Server** erkannten Geräte. Oben kann der gewünschte Discovery Server ausgewählt werden, daneben steht eine Suchfunktion und ein Filter. Jede Zeile entspricht einem Gerät. In den Spalten werden je nach Konfiguration unterschiedliche Attribute angezeigt, zum Beispiel der Synchronisationsstatus, der Objekttyp, die IP-Adresse oder der Hersteller.

Die Spalten lassen sich individuell anpassen über den Dialog **Spalten**. Dort können Felder ein- oder ausgeblendet werden. Am unteren Rand der Liste steht die Gesamtanzahl der Geräte sowie eine Blätterfunktion zur Navigation durch die Seiten.

!!! info "**Die Geräteliste versucht anhand der Seriennummer, MAC-Adresse und des Device Typs festzustellen, ob ein Objekt bereits synchronisiert wurde.**"

### Aktionen

In der linken Spalte **Aktionen** gibt es pro Gerät zwei Symbole:

- **Link-Button** - öffnet die JDisc Detailansicht des Geräts in einem neuen Fenster.
- **Import-Button** - Importiert das Gerät

* * *

## Dashboard

Der JDisc Connector für i-doit vereinfacht die Verwaltung von IT-Asset-Discovery und -Synchronisation. Die intuitive Web-Oberfläche bietet zentrale Funktionen und Statusanzeigen:

### Sync Info

Zugriff auf Sync-Profile und Start neuer Synchronisationsläufe. Über das Profil werden die zu synchronisierenden Objekte und Importmodi definiert.

- **Sync Profile öffnen**: Öffnet die Sync-Profile.
- **Neuen Sync starten**: Öffnet den Dialog zur Auswahl von Profil/Importmodus und startet den Prozess.

## Discovery Info

Überblick zum aktuellen Zustand des Discovery-Prozesses mit Starter-Button für neue Jobs.

- **Aktuell laufende Discovery:** Zeigt den Live-Status
- **Aktualisieren:** Aktualisiert den Discovery Status
- **Discovery Server Einstellungen öffnen:** Öffnet die Discovery Server Einstellungen
- **Geräteliste öffnen:** Öffnet die Geräteliste
- **Neue Discovery starten**: Auswahl von Server, Discovery Job und zeigt die Beschreibung. Der Start ist über den Dialog möglich.

### Letzte Logs

Schnellübersicht über die zuletzt ausgeführten Jobs, inklusive direktem Download der Logs und Statuskontrolle.

- **Status:** Erfolg oder Fehler direkt ersichtlich
- **Aktion:** Download des Logs

### Beispielhafte Log Einträge:

| ID  | Aktion | Startdatum          | Enddatum            | Servername | Profilname | Status | Log Datei               |
| --- | ------ | ------------------- | ------------------- | ---------- | ---------- | ------ | ----------------------- |
| 2   |        | 2025-09-04 12:47:48 | 2025-09-04 12:47:51 | JDisc 1    | Server     | Erfolg | YYYY-MM-DD_hh-mm-ss.log |
| 1   |        | 2025-09-04 12:07:42 | 2025-09-04 12:24:33 | JDisc 1    | Server     | Fehler | YYYY-MM-DD_hh-mm-ss.log |

* * *

## Berechtigungen

Die Berechtigungen für das JDisc Connector Add-on werden über die Rechteverwaltung in i-doit konfiguriert und können gruppenspezifisch vergeben werden. Für die Nutzung des Add-ons müssen entsprechende Zugriffsrechte auf die einzelnen Komponenten gesetzt werden.

### Verfügbare Berechtigungsbereiche

- **Dashboard**<br>
  Zugriff auf die zentrale Übersicht des Add-ons

- **Geräteliste**<br>
  Einsicht in die importierten Geräte und deren Synchronisationsstatus

- **Sync Profile**<br>
  Erstellen, Bearbeiten und Ausführen von Synchronisationsprofilen

- **Discovery Server**<br>
  Konfiguration und Prüfung der JDisc-Serververbindung

- **Logs**<br>
  Einsicht und Download der Log-Dateien zu Sync- und Discovery-Vorgängen

Änderungen müssen gespeichert werden damit sie wirksam werden.

* * *

## Fehlerbehandlung

- Konfigurationsprüfung
- Discovery- und GraphQL-Prüfung
- Loganalyse bei Fehlern

* * *

## Best Practices

- Testumgebung vor Produktiveinsatz
- Regelmäßige Prüfung der Geräteliste und Logs
- Pflege von Seriennummern und MAC-Adressen
- Dokumentation der Sync Profile
