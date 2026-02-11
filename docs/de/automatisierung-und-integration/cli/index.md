---
title: i-doit console utility
description: Befehle der i-doit console utility
icon: material/console
status:
lang: de
---

# i-doit console utility

Dieses Dokument beschreibt die Verwendung der i-doit console utility. Die i-doit console utility ermöglicht die Automatisierung von administrativen Aufgaben, den Import von Daten und die Integration von i-doit in bestehende Systemlandschaften.

-----

## Grundlagen der i-doit console utility

Die Befehle der i-doit console utility werden über die Datei `console.php` ausgeführt, die sich im Hauptverzeichnis Ihrer i-doit-Installation befindet.

### Aufruf der Konsole

Um einen Befehl auszuführen, müssen Sie in das i-doit-Installationsverzeichnis wechseln und die Datei mit PHP ausführen. Es ist auch möglich, den vollständigen Pfad zur Datei zu verwenden, um sie von einem beliebigen Ort aus auszuführen. Wichtig ist, dass der Befehl mit den Rechten des Webserver-Benutzers (z. B. `www-data`, `wwwrun` oder `apache`) ausgeführt wird, um Berechtigungsprobleme zu vermeiden.

```bash
# In das i-doit-Verzeichnis wechseln (Pfad anpassen)
cd /var/www/html

# Befehl als Webserver-Benutzer ausführen
sudo -u www-data php console.php <BEFEHL> [OPTIONEN]
```

### Authentifizierung

Fast jeder Befehl erfordert eine Authentifizierung gegenüber i-doit. Die folgenden Parameter sind dafür essenziell:

  * `--user <BENUTZERNAME>`: Der Benutzername eines i-doit-Benutzers mit den notwendigen Berechtigungen.
  * `--password <PASSWORT>`: Das Passwort des Benutzers.
  * `--tenantId <MANDANTEN-ID>`: Die ID des Mandanten, in dem der Befehl ausgeführt werden soll. Die Standard-ID ist `1`.

**Sicherheitshinweis:** Die direkte Angabe des Passworts als Parameter kann ein Sicherheitsrisiko darstellen, da es in der Prozessliste und im Shell-Verlauf sichtbar ist.

### Allgemeine (globale) Optionen

Diese Optionen können mit den meisten Befehlen kombiniert werden:

| Option             | Alias           | Beschreibung                                                     |
| ------------------ | --------------- | ---------------------------------------------------------------- |
| `--help`           | `-h`            | Zeigt die Hilfe für einen spezifischen Befehl an.                |
| `--quiet`          | `-q`            | Unterdrückt alle Ausgaben außer Fehlermeldungen.                 |
| `--verbose`        | `-v, -vv, -vvv` | Erhöht die Ausführlichkeit der Ausgabe (nützlich für Debugging). |
| `--version`        | `-V`            | Zeigt die Version der i-doit console an.                         |
| `--no-interaction` | `-n`            | Deaktiviert interaktive Nachfragen (z.B. "Sind Sie sicher?").    |

-----

## Wichtige Befehlskategorien und Beispiele

Die Befehle der i-doit console utility lassen sich in logische Gruppen unterteilen.

### Import und Synchronisation

Dies sind die am häufigsten genutzten Befehle zur Automatisierung der Datenpflege.

#### import-csv

Importiert Objekte und deren Attribute aus einer CSV-Datei. Benötigt ein in der i-doit-Weboberfläche vorkonfiguriertes Importprofil.

  * **Syntax:**
    ```bash
    php console.php import-csv [AUTHENTIFIZIERUNG] --importFile <PFAD_ZUR_CSV> --importProfileId <PROFIL_ID>
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php import-csv --user=admin --password='geheim' --tenantId=1 --importFile=/var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId=1 --csvSeparator=";" --multiValueMode=column
    ```

#### ldap-sync

Synchronisiert Benutzer und Gruppen aus einem LDAP-Verzeichnis (z. B. Microsoft Active Directory). Das Attribut-Mapping wird über eine INI-Datei konfiguriert.

  * **Syntax:**
    ```bash
    php console.php ldap-sync [AUTHENTIFIZIERUNG] --config <PFAD_ZUR_INI>
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php ldap-sync --user=admin --password='geheim' --tenantId=1 --verbose
    ```
    *Tipp:* Eine Beispiel-Konfigurationsdatei finden Sie hier: [Konfigurationsdatei](https://www.google.com/search?q=configuration-files.md%23example-for-the-command-ldap-sync)

#### import-jdisc

Importiert Daten aus der Netzwerk-Discovery-Lösung JDisc.

  * **Syntax:**
    ```bash
    php console.php import-jdisc [AUTHENTIFIZIERUNG] --server <JDISC_SERVER_ID>
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php import-jdisc --user=admin --password='geheim' --server=1 --tenantId=1
    ```

-----

### Systemadministration und Wartung

Diese Befehle unterstützen bei der Wartung und Pflege der i-doit-Instanz.

#### search-index

Erstellt den Suchindex neu. Notwendig, wenn die Suche in der Weboberfläche keine oder veraltete Ergebnisse liefert.

  * **Syntax:**
    ```bash
    php console.php search-index [AUTHENTIFIZIERUNG]
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php search-index --user=admin --password='geheim' --tenantId=1
    ```

#### system-categorycleanup

Bereinigt Kategorie-Daten von Objekten, die archiviert oder gelöscht wurden.

  * **Syntax:**
    ```bash
    php console.php system-categorycleanup [AUTHENTIFIZIERUNG] --categoryStatus <STATUSID>
    ```
  * **Beispiel (bereinigt archivierte Objekte):**
    ```bash
    sudo -u www-data php console.php system-categorycleanup --user=admin --password='geheim' --categoryStatus=1 --tenantId=1 --no-interaction
    ```

-----

### Add-on- und Lizenzverwaltung

Verwaltet installierte Add-ons und Lizenzen über die Kommandozeile.

#### addon-list

Listet alle verfügbaren Add-ons und deren Status (aktiviert/deaktiviert) auf.

  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php addon-list --user=admin --password='geheim'
    ```

#### addon-activate / addon-deactivate

Aktiviert oder deaktiviert ein spezifisches Add-on. Der Identifier wird durch den Befehl [addon-list](https://www.google.com/search?q=%23addon-list) angezeigt.

  * **Syntax:**
    ```bash
    php console.php addon-activate [AUTHENTIFIZIERUNG] --addon <ADDON_NAME>
    php console.php addon-deactivate [AUTHENTIFIZIERUNG] --addon <ADDON_NAME>
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php addon-activate --user admin --password 'geheim' --addon=document
    ```

#### license-key

Fügt einen neuen Lizenz-Token zur i-doit-Installation hinzu.

  * **Syntax:**
    ```bash
    php console.php license-key [AUTHENTIFIZIERUNG] --key <LIZENZTOKEN> --no-interaction
    ```
  * **Beispiel:**
    ```bash
    sudo -u www-data php console.php license-key --user=admin --password='geheim' --key=8z9hr12798g1ftg2p0o13ft3 --no-interaction
    ```

-----

## Automatisierung

### Dedizierter Benutzer für die i-doit console utility

Richten Sie in der i-doit-Weboberfläche einen dedizierten Benutzer für Automatisierungsaufgaben ein. Vergeben Sie nur die unbedingt notwendigen Berechtigungen (z. B. Import-Rechte) an diesen Benutzer, anstatt den globalen `admin`-Account zu verwenden.

### Verwendung in Crontab

Die Befehle der i-doit console utility eignen sich hervorragend für die Automatisierung via Crontab. Zur Hilfe lassen sich im Internet sogenannte "Crontab generator" Seiten finden.

  * **Beispiel: Nächtlicher CSV-Import und Neuaufbau des Suchindex**

    Öffnen Sie die Crontab des Webserver-Benutzers mit `sudo -u www-data crontab -e` und fügen Sie folgende Zeilen hinzu:

    ```crontab
    # Führe den CSV-Import jeden Tag um 02:00 Uhr aus
    0 2 * * * /usr/bin/php /var/www/html/console.php console.php import-csv --user=cli-user --password='geheim' --tenantId=1 --importFile=/var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId=1 --csvSeparator=";" --multiValueMode=column --quiet

    # Baue den Suchindex jeden Tag um 02:30 Uhr neu auf
    30 2 * * * /usr/bin/php /var/www/html/console.php search-index --user=cli-user --password='geheim' --tenantId=1 --quiet
    ```

!!! note "[Verwendung der Aufgabenplanung unter Microsoft Windows](https://www.google.com/search?q=../task-scheduling-and-cronjobs.md%23windows-task-scheduler)"

### Einen Befehl und seine Optionen finden

Um alle verfügbaren Befehle aufzulisten, führen Sie `console.php` ohne Argumente aus:

```bash
sudo -u www-data php console.php
```

Um die spezifischen Optionen und Parameter für einen einzelnen Befehl zu sehen, verwenden Sie die Option `--help` oder `-h`:

```bash
sudo -u www-data php console.php import-csv --help
```

## Verfügbare Befehle der i-doit console utility (ohne Add-ons)

```text
i-doit console utility 35

Usage:
  command [options] [arguments]

Options:
  -h, --help            Zeigt die Hilfe für den angegebenen Befehl an. Wenn kein Befehl angegeben wird, wird die Hilfe für den list-Befehl angezeigt
  -q, --quiet           Keine Nachrichten ausgeben
  -V, --version         Diese Anwendungsversion anzeigen
      --ansi|--no-ansi  ANSI-Ausgabe erzwingen (oder deaktivieren mit --no-ansi)
  -n, --no-interaction  Keine interaktiven Fragen stellen
  -v|vv|vvv, --verbose  Ausführlichkeit der Nachrichten erhöhen: 1 für normale Ausgabe, 2 für ausführlichere Ausgabe und 3 für Debug-Ausgabe

Available commands:
    addon-activate                      Add-on aktivieren
    addon-deactivate                    Add-on deaktivieren
    addon-install                       Add-on installieren
    addon-license-check                 Dieser Befehl prüft, ob ein bestimmtes Add-on lizenziert ist.
    addon-list                          Zeigt eine Liste der installierten Add-ons an
    addon-uninstall                     Add-on deinstallieren
    admin-center-password-reset         Mit diesem Befehl können Sie das Admin-Center-Passwort zurücksetzen
    auth-cleanup                        Alle Auth-Pfade bereinigen
    check_mk-export                     Exportiert i-doit-Objekte und Host-Tags in Check_MK WATO-Konfigurationsdateien
    check_mk-livestatus                 Importiert Statusänderungen aus Livestatus in das i-doit Logbuch
    clear-credentials                   Entfernt die Attribute Benutzername und Passwort aus der Kategorie "Login" des Benutzers
    completion                          Gibt das Shell-Vervollständigungs-Skript aus
    contracts-outdated                  Aktualisiert den Status von abgelaufenen Verträgen
    extend-contracts                    Verlängert automatisch die Laufzeit von nicht gekündigten Verträgen
    help                                Hilfe für einen Befehl anzeigen
    import-csv                          Importiert CSV-formatierte Dateien (unter Verwendung eines vordefinierten CSV-Importfilters, der in der GUI definiert ist)
    import-csvprofiles                  Listet alle verfügbaren CSV-Profile auf
    import-hinventory                   Importiert Dateien, die in der hInventory XML-Syntax formatiert sind
    import-jdisc                        Importiert Daten von einem JDisc-Server (SQL-Server-Zugriff ist in der GUI definiert)
    import-jdiscdiscovery               Löst eine JDisc-Discovery aus (API-Zugriff auf den JDisc-Server ist in der GUI definiert)
    import-ocs                          Importiert Daten von einem OCS Inventory NG-Server (SQL-Server-Zugriff ist in der GUI definiert)
    import-syslog                       Importiert Daten aus einer Syslog-Server-Textdatei in das i-doit Logbuch
    import-xml                          Importiert Dateien, die in der i-doit XML-Syntax formatiert sind
    install                             Die i-doit-Anwendung installieren
    jdisc-create-server                 Erstellt einen JDisc-Server basierend auf den eingegebenen Daten
    ldap-sync                           Synchronisiert LDAP-Benutzerkonten mit i-doit-Benutzerobjekten
    ldap-syncdn                         Synchronisiert LDAP-Benutzer-DN-Attribute mit i-doit-Benutzerobjekten (muss nur bei Migration zwischen verschiedenen LDAP-Quellen ausgeführt werden)
    license-add                         Lizenz in i-doit hinzufügen
    license-assign                      Hosting-Lizenz einem i-doit-Mandanten zuweisen
    license-check                       Prüft, ob der i-doit-Mandant lizenziert ist
    license-import                      Lizenzen vom i-doit-Server importieren
    license-key                         Lizenzschlüssel für i-doit setzen
    license-list                        Liste der Lizenzen: ID, Produkt, Typ (Lizenztyp), Von (Lizenzbeginn), Ablaufen (Ablaufdatum der Lizenz), Lizenziert (max. Anzahl lizenzierter Objekte), Mandanten (max. Anzahl Mandanten)
    license-remove                      Lizenz aus i-doit entfernen
    list                                Befehle auflisten
    migrate-uploaded-files              Migriert hochgeladene Dateien in i-doit <v1.13 zu v.1.14>
    notifications-list                  Listet alle Benachrichtigungstypen und Benachrichtigungen zur späteren Verwendung auf
    notifications-send                  Versendet E-Mails für Benachrichtigungen, die im Benachrichtigungs Add-on definiert sind
    report-export                       Führt einen i-doit-Report aus und speichert ihn als CSV-, TXT-, PDF- oder XML-Datei
    report-refresher                    Aktualisiert einen oder alle Reports.
    search                              Löst eine Suche aus und gibt die Ergebnisse als formatierte Texttabelle aus
    search-index                        Löscht den aktuellen Suchindex und erstellt ihn neu
    strip-description-html              Mit diesem Befehl können Sie HTML-Tags im Beschreibungsfeld aller Kategorien und Objekte entfernen
    sync-dynamic-groups                 Mitglieder dynamischer Gruppen synchronisieren
    system-autoincrement                Ändert den anfänglichen Autoincrement-Wert für alle i-doit-Datenbanktabellen (Betrifft alles, Objekt-IDs, Kategorieeinträge usw. Mit Vorsicht verwenden!)
    system-categorycleanup              Bereinigt optional Kategorie-Einträge, die sich im Zustand unfertig, archiviert oder gelöscht befinden
    system-checkforupdates              Prüft auf i-doit-Core-Updates
    system-convert-non-innodb-tables    Konvertiert alle Tabellen, die nicht in INNODB sind, zu INNODB (Beeinflusst die Datenbankkodierung. Mit Vorsicht verwenden!)
    system-convert-non-utf8-tables      Ändert alle nicht-UTF8-Tabellen zu UTF8 (Beeinflusst die Datenbankkodierung. Mit Vorsicht verwenden!)
    system-location-fix                 Führt den Location-Fix aus den Systemtools der GUI aus
    system-objectcleanup                Bereinigt optional Objekte, die sich im Zustand unfertig, archiviert oder gelöscht befinden
    system-objectrelations              Generiert alle Objektbeziehungsnamen neu
    system-refresh-table-configuration  Aktualisiert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien)
    system-set-settings                 Systemeinstellungen setzen
    tenant-create                       Mandant in i-doit erstellen
    tenant-disable                      Deaktiviert den Mandanten mit der spezifischen ID
    tenant-enable                       Aktiviert den Mandanten mit der spezifischen ID
    tenant-list                         Zeigt eine Liste der verfügbaren Mandanten an
    tenant-remove                       Den i-doit-Mandanten entfernen
    tenant-set-settings                 Dieser Befehl ermöglicht es Ihnen, mandantenbezogene Einstellungen festzulegen, indem Sie eine Einstellungsliste basierend auf JSON bereitstellen
    uninstall                           Die i-doit-Anwendung deinstallieren
    update                              Die i-doit-Anwendung aktualisieren
idoit
    idoit:feature-manager               [idoit:fm] Mit diesem Befehl wird es möglich sein, eine Reihe von Features in i-doit zu aktivieren.
    idoit:set-env-var                   Mit diesem Befehl wird es möglich sein, Umgebungsvariablen für i-doit zu setzen.
    idoit:set-update-capability         Die i-doit-Update-Fähigkeit de- und aktivieren
logbook
    logbook:archive                     Archiviert Logbuch-Einträge (Einstellungen werden in der GUI definiert)
system
    system:tenant-export                Exportieren Sie Ihre Mandantendaten einschließlich hochgeladener Dateien in ein ZIP-Paket.
    system:tenant-import                Importieren Sie Ihre Mandantendaten einschließlich hochgeladener Dateien aus einem ZIP-Paket, das mit dem Befehl system:tenant-export generiert wurde.
```
