# Nagios

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

Nagios ist eine Software für [Network Monitoring](index.md), das aus den Daten der [IT-Dokumentation](../../glossar.md) heraus konfiguriert werden kann. Dadurch lassen sich eine doppelte Pflege von Daten vermeiden und Fehler minimieren. Der in i-doit verfügbare Export erlaubt es, vollständige oder partielle Konfigurationen zu erzeugen. Dazu werden in der i-doit-Oberfläche Nagios-Konfigurationen manuell angelegt oder automatisiert mit Werten unterfüttert.

!!! info "Kompatibilität"

    Die exportierten Daten sind mit der Version 3 von Nagios und Version 1 von Icinga kompatibel. Version 4 von Nagios ist nicht vollständig kompatibel. Weitere Derivate von Nagios werden nicht unterstützt.

## Grundkonfiguration

Unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration** wird die Konfiguration hinterlegt. Der **Lokale Pfad** definiert einen absoluten oder relativen Pfad zur i-doit Installation im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der **Link zum Monitoring Tool** gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

[![nagios-verwalten](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)

## Basiskonfigurationen

Unter **Add-ons → Nagios** werden die Basiskonfigurationen angelegt.

[![nagios-extras](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)

Dazu gehört die Hauptkonfiguration, Service- und Host-Templates sowie weitere grundlegende Einstellungen. Alle Werte sind 1:1 mit der Nagios-Konfiguration deckungsgleich.

## Konfiguration in Objekten

Alle weiteren Konfigurationen werden innerhalb der [Objekte](../../grundlagen/struktur-it-dokumentation.md) vorgenommen. Der einfachste Fall ist die Konfiguration von Host Parameter. Hierzu muss über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) der [Kategorie](../../grundlagen/struktur-it-dokumentation.md) Ordner **Nagios (Host)** zu den gewünschten [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) zugewiesen werden.

In der Kategorie **Host Definition** kann dann entweder über ein Nagios Template oder durch individuelle Konfiguration eine Hostdefinition für Nagios hinterlegt werden.

[![nagios-konfiguration](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)

Das Prinzip der Host- und Service Templates ist mit der Nagios-Konfiguration deckungsgleich.
Über die Kategorie **Servicezuweisung** werden in der Basiskonfiguration definierte Servicechecks einem Host zugewiesen.
Als Ergebnis bildet sich später hieraus die Konfiguration einer klassischen Host-zu-Service-Zuweisung. Es gibt zusätzlich einen zweiten Weg, wie Services zu Hosts zugewiesen werden können. Dies geschieht über die Vererbung über ein Softwareobjekt.<br>
in einem Softwareobjekt in der Kategorie **Nagios (Anwendungen)** wird ein Servicecheck zugewiesen, analog zu der Zuweisung zu einem Host.
Ist diese Anwendung nun über die Kategorie **Softwarezuweisung** auf einem Host installiert, wird der Servicecheck auf den Host automatisch vererbt.
Weitere Nagios-Konfigurationen innerhalb von Objekten finden sich in Objekten vom Typ **Personen sowie in Personengruppen und Objektgruppen**.

## Export der Nagios Konfiguration

Unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration** können die Nagios-Konfigurationen manuell exportiert werden. Dazu wird eine Exportkonfiguration ausgewählt und optional eine Validierung der Parameter angewählt.

[![nagios-export](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)

Die Validierung überprüft grundlegende Abhängigkeiten, ob beispielsweise eine IP-Adresse für einen Host eingetragen ist. Diese Überprüfung soll davor schützen, korrupte Nagios-Konfigurationen zu erzeugen, allerdings ist es kein 100-prozentiger Schutz. Zur Sicherheit sollte immer ein Test mit der Nagios Binary über die erzeugte Konfiguration gefahren werden.

Die Konfigurationsdateien werden gemäß dem konfigurierten Pfad auf dem Dateisystem abgelegt und entsprechen den in den Kategorien konfigurierten Werten.

Selbstverständlich lässt sich der Export der Dateien auch über die i-doit [Console](../cli/console/index.md) automatisieren. Eine Beschreibung der einzelnen Parameter sowie ein Beispiel sind im [entsprechenden Artikel](../cli/console/optionen-und-parameter-der-console.md#nagios-export) für die Option **Exportkonfiguration** zu finden.

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

| Version | Date       | Changelog                                                                                                                                                                                                                   |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.2     | 07.09.2024 | [Bug] Server error when open Nagios category                                                                                                                                                                                |
| 1.1.1   | 22.08.2023 | [Improvement] PHP 8.1 Compatibility                                                                                                                                                                                         |
| 1.1     | 05.09.2022 | [Task] PHP 8.0 compatibility  <br>[Task] Design Compatibility                                                                                                                                                               |
| 1.0.3   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                |
| 1.0.2   |            | [Bug] The Nagios category cannot be opened among persons<br>[Bug] Clicking on "Edit" after saving an object, navigates to object list<br>[Bug] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1   |            | [Bug] Creation of Nagios tables is performed in the wrong order                                                                                                                                                             |
| 1.0     |            | [Change] Add-onize Nagios                                                                                                                                                                                                   |
