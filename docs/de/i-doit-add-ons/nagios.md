---
title: Nagios
description: "Nagios ist eine Software für Network Monitoring, die du aus den Daten deiner IT-Dokumentation heraus konfigurierst."
icon: addons/nagios
status:
lang: de
---

# Nagios

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle oder einem Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kannst du es dann wiederherstellen."

Nagios ist eine Software für [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md), die du aus den Daten deiner [IT-Dokumentation](../glossar.md) heraus konfigurierst. So vermeidest du doppelte Datenpflege und minimierst Fehler. Der Export erzeugt vollständige oder partielle Konfigurationen -- entweder manuell angelegt oder automatisiert mit Werten aus i-doit befuellt.

!!! info "Kompatibilität"
    Die exportierten Daten sind mit der Version 3 von Nagios und Version 1 von Icinga kompatibel. Version 4 von Nagios ist nicht vollständig kompatibel. Weitere Derivate von Nagios werden nicht unterstützt.

## Grundkonfiguration

Richte die Konfiguration unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration** ein:

- **Lokaler Pfad** -- Absoluter oder relativer Pfad, in dem die erzeugte Konfiguration abgelegt wird.
- **Link zum Monitoring Tool** -- Basislink, um aus i-doit Links auf die Monitoring-Instanz zu generieren.

[![Nagios-verwalten](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)

## Basiskonfigurationen

Unter **Add-ons → Nagios** werden die Basiskonfigurationen angelegt.

[![Nagios-extras](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)

Dazu gehört die Hauptkonfiguration, Service- und Host-Templates sowie weitere grundlegende Einstellungen. Alle Werte sind 1:1 mit der Nagios-Konfiguration deckungsgleich.

## Konfiguration in Objekten

Alle weiteren Konfigurationen nimmst du innerhalb der [Objekte](../grundlagen/struktur-it-dokumentation.md) vor. Für Host-Parameter gehst du so vor:

1. Weise über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) den gewünschten [Objekttypen](../grundlagen/struktur-it-dokumentation.md) den [Kategorie](../grundlagen/struktur-it-dokumentation.md)-Ordner **Nagios (Host)** zu.
2. Hinterlege in der Kategorie **Host Definition** eine Hostdefinition -- entweder über ein Nagios-Template oder durch individuelle Konfiguration.

[![Nagios-konfiguration](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)

Host- und Service-Templates entsprechen dem Nagios-Prinzip. Über die Kategorie **Servicezuweisung** weist du einem Host Servicechecks zu.

Es gibt zwei Wege, Services mit Hosts zu verknüpfen:

1. **Direkte Zuweisung** -- Über die Kategorie **Servicezuweisung** im Host-Objekt.
2. **Vererbung über Software** -- Weise in einem Softwareobjekt (Kategorie **Nagios (Anwendungen)**) einen Servicecheck zu. Ist die Software über die Kategorie **Softwarezuweisung** auf einem Host installiert, erbt der Host den Servicecheck automatisch.

Weitere Nagios-Konfigurationen findest du in Objekten vom Typ **Personen**, **Personengruppen** und **Objektgruppen**.

## Export der Nagios Konfiguration

Den Export startest du manuell unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration**. Wähle eine Exportkonfiguration und aktiviere optional die Validierung.

[![Nagios-export](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)](../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)

Die Validierung prüft grundlegende Abhängigkeiten -- z. B. ob eine IP-Adresse für einen Host eingetragen ist. Sie schützt vor korrupten Konfigurationen, bietet aber keinen 100-prozentigen Schutz. Teste die erzeugte Konfiguration daher immer zusätzlich mit der Nagios-Binary.

Die Konfigurationsdateien werden im konfigurierten Pfad abgelegt. Den Export kannst du auch über das [i-doit console utility](../automatisierung-und-integration/cli/index.md) automatisieren (`--help` zeigt alle Optionen).

## CLI Console Commands und Optionen

| Command                             | Interne Beschreibung                                                                   |
| ----------------------------------- | -------------------------------------------------------------------------------------- |
| [nagios-export](#nagios-export)     | Exportiert die Nagios-Einstellungen und i-doit Objekte in Nagios-Konfigurationsdateien |
| [nagios-ndoutils](#nagios-ndoutils) | Importiert Monitoring Statusänderungen aus den NDOUtils in das i-doit Logbuch          |

!!! info "Diese Befehle sind erst nach Installation des Nagios Add-ons verfügbar."

### nagios-export

Exportiert die Nagios-Einstellungen und i-doit Objekte in Nagios-Konfigurationsdateien.

**Optionen:**

| Parameter (Kurzform) | Parameter (Langform)        | Beschreibung                                                                                     |
| -------------------- | --------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --nagiosHostId=NAGIOSHOSTID | Angabe des Nagios-Hosts, der für den Export verwendet werden soll                                |
|                      | --validate                  | Validiert die Exportdateien                                                                      |
| -u                   | --user=[USERNAME]           | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                   | --password=[PASSWORD]       | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                   | --tenantId=[TENANT-ID]      | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -c                   | --config=[CONFIG-FILE]      | Angabe des Pfades zur Konfigurationsdatei                                                        |
| -h                   | --help                      | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                   | --quiet                     | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                   | --version                   | Ausgabe der Version der i-doit Console                                                           |
|                      | --ansi<br>--no-ansi         | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                   | --no-interaction            | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv      | --verbose                   | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php nagios-export --user admin --password admin --tenantId 1 --nagiosHostId 1
```

### nagios-ndoutils

Importiert Monitoring Statusänderungen aus den NDOUtils in das i-doit Logbuch.

**Optionen:**

| Parameter (Kurzform) | Parameter (Langform)   | Beschreibung                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                   | --password=[PASSWORD]  | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                   | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei                                                        |
| -h                   | --help                 | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                   | --quiet                | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                   | --version              | Ausgabe der Version der i-doit Console                                                           |
|                      | --ansi<br>--no-ansi    | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                   | --no-interaction       | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv      | --verbose              | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php nagios-ndoutils --user admin --password admin --tenantId 1
```

## Changelog
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                   |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.4     | 2025-03-31 | [Task] Remove gettext extension from add-on                                                                                                                                                                                 |
| 1.3     | 25.02.2025 | [Task] Make symfony 6.4 compatible <br>[Bug] Some attributes are not writable via API in category folder Persons category Nagios                                                                                            |
| 1.2     | 07.09.2024 | [Bug] Server error when open Nagios category                                                                                                                                                                                |
| 1.1.1   | 22.08.2023 | [Improvement] PHP 8.1 Compatibility                                                                                                                                                                                         |
| 1.1     | 05.09.2022 | [Task] PHP 8.0 compatibility  <br>[Task] Design Compatibility                                                                                                                                                               |
| 1.0.3   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                |
| 1.0.2   |            | [Bug] The Nagios category cannot be opened among persons<br>[Bug] Clicking on "Edit" after saving an object, navigates to object list<br>[Bug] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1   |            | [Bug] Creation of Nagios tables is performed in the wrong order                                                                                                                                                             |
| 1.0     |            | [Change] Add-onize Nagios                                                                                                                                                                                                   |
