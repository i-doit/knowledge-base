# Console

i-doit verfügt über ein Commandline Interface (CLI), über das sich verschiedene Aufgaben durchführen lassen. Das CLI wird beispielsweise für [Cronjobs](../../../wartung-und-betrieb/cronjobs-einrichten.md) benötigt und kann zum Automatisieren von Arbeitsschritten eingesetzt werden.

### Erste Schritte

Das CLI befindet sich im Installationsverzeichnis von i-doit, beispielsweise unter **/var/www/html/**. Es muss innerhalb dieses Verzeichnisses mit denselben Rechten des Apache Webservers aufgerufen werden. Unter [Debian GNU/Linux](../../../installation/manuelle-installation/debian.md) ist dies der User **www-data**. Mittels **sudo** werden diese Rechte erlangt:

```shell
    cd /var/www/html/
    sudo -u www-data php console.php
```

Unter Windows wechselt man ebenso in das Installationsverzeichnis. Da die Rechte des Webservers keine Rolle spielen, genügt der Aufruf von **php.exe**, welches im Pfad des Benutzers stehen muss.

```shell
    cd C:\xampp\htdocs
    php.exe console.php
```

Führt man die CLI ohne weitere Argument aus, wird die allgemeine Hilfe präsentiert:

```shell
    i-doit console utility 1.17.1

    Usage:
        command [options] [arguments]

    Options:
        -h, --help            Display this help message
        -q, --quiet           Do not output any message
        -V, --version         Display this application version
        --ansi            Force ANSI output
        --no-ansi         Disable ANSI output
        -n, --no-interaction Do not ask any interactive question
        -v|vv|vvv, --verbose Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Available commands:
    CompileDocuments
    addon-activate                      Activate add-on
    addon-deactivate                    Deactivate add-on
    addon-install                       Install add-on
    addon-list                          Shows list of installed addons
    admin-center-cryptohash-reset       With this command you can update the Crypto-hash and update encrypted passwords
    admin-center-password-reset         With this command you can reset the Admin-Center password
    auth-cleanup                        Cleanup all auth paths
    clear-credentials                   It removes both attributes username and password from the users "login" category
    contracts-outdated                  Updates status of outdated contracts
    documents
    help                                Displays help for a command
    import-csv                          Imports CSV formatted files (Using a predefined CSV Import filter, defined in the GUI)
    import-csvprofiles                  List all available csv profiles
    import-hinventory                   Imports files formatted in the hInventory XML syntax
    import-jdisc                        Imports data from a JDisc server (SQL server access is defined in the GUI)
    import-jdiscdiscovery               Triggers a JDisc discovery (API Access to the JDisc server is defined in the GUI)
    import-ocs                          Imports data from an OCS inventory NG server (SQL server access is defined in the GUI)
    import-syslog                       Imports data from a Syslog server textfile to the i-doit Logbook
    import-xml                          Imports files formatted in the i-doit XML syntax
    install                             Install the i-doit application
    ldap-sync                           Synchronizes LDAP user accounts with i-doit user objects
    ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (Only needs to be run when migrating between different LDAP sources)
    license-add                         Add license into i-doit
    license-assign                      Assign hosting license to i-doit tenant
    license-import                      Import licenses from the i-doit server
    license-key                         Set license key for i-doit
    license-list                        List of the licenses: id, type of license, assigned tenant, organisation, valid from, expire date, amount of licensed objects, amount of used objects, licensed add-ons
    license-remove                      Remove license from i-doit
    list                                Lists commands
    logbook-archive                     Archives Logbook entries (Settings are defined in the GUI)
    migrate-uploaded-files              Migrates uploaded files in i-doit <v1.13 to v.1.14>
    notifications-send                  Sends out e-mails for notifications defined in the notification add-on
    report-export                       Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
    search                              Triggers a search and gives the results as formatted text table
    search-index                        Deletes current search index and create it
    strip-description-html              With this command you can strip html tags in description field of all categories and objects
    sync-dynamic-groups                 Syncronize dynamic group members
    system-autoincrement                Changes the initial autoincrement value for all i-doit database tables (Affects everything, Object-IDs, category entries, etc. Use with caution!)
    system-checkforupdates              Checks for i-doit core updates
    system-convert-non-innodb-tables    Converts all tables which are not in INNODB to INNODB (Affects database encoding. Use with caution!)
    system-convert-non-utf8-tables      Changes all non-UTF8-tables to UTF8 (Affects database encoding. Use with caution!)
    system-location-fix                 Performs the location fix from the systemtools GUI
    system-objectcleanup                Purges optionally objects that are in the state unfinished, archived or deleted
    system-objectrelations              Regenerates all object relation names
    system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)
    tenant-create                       Create tenant in i-doit
    tenant-disable                      Disables the tenant with specific id
    tenant-enable                       Enables the tenant with specific id
    tenant-list                         Shows list of available tenants
    tenant-remove                       Remove the i-doit Tenant
    uninstall                           Uninstall the i-doit application
    update                              Update the i-doit application
```

### Authentifizierung

Um über das CLI auf i-doit zugreifen zu können, ist für die meisten Commands eine Authentifizierung nötig. Dazu übergibt man einen Benutzernamen, das passende Passwort und die gewünschte [Tenant ID](../../../administration/mandantenfaehigkeit.md). Letztere ist bei einer Standardinstallation meistens die **1**.

```shell
    cd /var/www/html/
    sudo -u www-data php console.php [COMMAND] --user admin --password admin --tenantId 1 [WEITERE OPTIONEN]
```

!!! check "Der Benutzer "controller""

    Es wird empfohlen, einen dedizierten Benutzer in i-doit für die Nutzung der CLI anzulegen. Soll dieser als [lokaler Benutzer](../../../anwendungsfaelle/lokalen-benutzer-anlegen.md) konfiguriert werden, erstellt man ihn als Objekt vom Typ **Personen** mit den gewünschten Credentials in der Kategorie **Personen → Login**. Dieser Benutzer sollte Admin-Rechte erhalten. Dies kann durch die Zuordnung zur vordefinierten **Personengruppe** **Admin** geschehen.

### Hilfe

Commands werden oftmals von weiteren Argumenten begleitet. Daher liefert jedes Command eine Hilfe via **--help**:

```shell
    cd /var/www/html/
    sudo -u www-data php console.php search --help
```

Darüber hinaus bieten einige Commands Beispielaufrufe via **--usage**.

### Commands

| Command | pro-Variante | open-Variante | [Add-on](../../../i-doit-pro-add-ons/index.md) | Beschreibung |
| --- | --- | --- | --- | --- |
| **addon-activate** | ja  | ja  | \-  | Aktivieren von Add-ons |
| **addon-deactivate** | ja  | ja  | \-  | Deaktivieren von Add-ons |
| **addon-install** | ja  | ja  | \-  | Installieren von Add-ons |
| **addon-list** | ja  | ja  | \-  | Zeigt eine Liste mit allen installierten Add-ons an |
| **admin-center-cryptohash-reset** | ja  | ja  | \-  | Der Crypto-hash von i-doit wird geändert, wodurch die gesamte Verschlüsselung erneuert wird (ACHTUNG! Vor der Durchführung sollte ein [Backup](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt werden) |
| **admin-center-password-reset** | ja  | ja  | \-  | Passwort für das Admin-Center zurücksetzen |
| **auth-cleanup** | ja  | ja  | -   | [Rechtesystem](../../../effizientes-dokumentieren/rechteverwaltung/index.md) bereinigen |
| **check_mk-export** | ja  | ja  | Check\_MK 1 / 2 | Konfigurationsdaten für [Checkmk](../../../i-doit-pro-add-ons/checkmk.md) exportieren |
| **check_mk-livestatus** | ja  | ja  | Check\_MK 1 / 2 | Ist-Zustand aus [Checkmk](../../../i-doit-pro-add-ons/checkmk.md) ins Logbuch schreiben |
| **clear-credentials** | ja  | ja  | \-  | Entfernt die Anmeldeinformationen von Benutzern |
| **extend-contracts** | ja | nein | \- | Erweitert die Laufzeit eines Vertrags, wenn dessen Kündigungsdatum in der Vergangenheit liegt
| **help** | ja  | ja  | \-  | Zeigt die Hilfe zu einem Befehl an |
| **import-csv** | ja  | nein | -   | Daten aus einer [CSV-Datei](../../../daten-konsolidieren/csv-datenimport/index.md) importieren |
| **import-csvprofiles** | ja  | nein | -   | Auflisten aller [CSV-Importprofile](../../../daten-konsolidieren/csv-datenimport/index.md) |
| **import-hinventory** | ja  | ja  | -   | Daten aus [h-inventory](../../../daten-konsolidieren/h-inventory.md) importieren |
| **import-jdisc** | ja  | ja  | -   | Daten aus [JDisc Discovery](../../../daten-konsolidieren/jdisc-discovery.md) importieren |
| **import-jdiscdiscovery** | ja  | ja  | -   | Einen Scan in [JDisc Discovery](../../../daten-konsolidieren/jdisc-discovery.md) starten |
| **import-ocs** | ja  | ja  | -   | Daten aus [OCS Inventory NG](../../../i-doit-pro-add-ons/ocs-inventory-ng.md) importieren |
| **import-syslog** | ja  | ja  | -   | Daten aus einem Syslog in das [Logbuch](../../../grundlagen/logbuch.md) von i-doit importieren |
| **import-xml** | ja  | ja  | -   | Daten aus XML importieren |
| **ldap-sync** | ja  | ja  | -   | Personen und Personengruppen aus einem [LDAP-Verzeichnis oder Active Directory (AD)](../../ldap-verzeichnis/index.md) importieren |
| **ldap-syncdn** | ja  | ja  | -   | Synchronisiere aus einem [LDAP/AD](../../ldap-verzeichnis/index.md) den Distinguished Name (DN) der Benutzer (siehe Kategorie **LDAP**) |
| **license-add** | ja  | nein | \-  | Fügt eine Lizenz für i-doit hinzu (in Bearbeitung) |
| **license-assign** | ja  | nein | \-  | Ordnet eine Hosting Lizenz einem Mandaten zu (in Bearbeitung) |
| **license-import** | ja  | nein | \-  | Importiert Lizenzen vom i-doit Server (in Bearbeitung) |
| **license-key** | ja  | nein | \-  | Setzt einen Lizenzschlüssel für i-doit (in Bearbeitung) |
| **license-list** | ja  | nein | \-  | Listet alle Lizenzen mit allen Informationen auf (ID; Produkt; Typ; Startdatum; Enddatum; lizenzierte Objekte; lizenzierte Mandanten; Umgebung) |
| **license-remove** | ja  | nein | \-  | Entfernt Lizenzen von i-doit |
| **logbook-ar****chive** | ja  | ja  | -   | [Logbuch-Einträge](../../../grundlagen/logbuch.md) archivieren |
| **maintenance** | ja  | ja  | Wartung | Sendet Benachrichtigungen zu geplanten Wartungen aus dem Wartungs Add-on |
| **nagios-export** | ja  | ja  | Nagios | [Nagios](../../network-monitoring/nagios.md)\-Konfiguration exportieren |
| **nagios-ndoutils** | ja  | ja  | Nagios | Ist-Zustand aus [Nagios](../../network-monitoring/nagios.md) ins Logbuch schreiben |
| **notifications-send** | ja  | ja  | -   | [Benachrichtigungen](../../../auswertungen/benachrichtigungen.md) per E-Mail versenden |
| **report-export** | ja  | nein | -   | Einen [Report](../../../auswertungen/report-manager.md) als Datei exportieren |
| **search** | ja  | ja  | -   | In i-doit [suchen](../../../effizientes-dokumentieren/suche.md) |
| **search-index** | ja  | ja  | -   | [Suchindex](../../../effizientes-dokumentieren/suche.md) erstellen/erneuern |
| **system-autoincrement** | ja  | ja  | -   | auto_increment von MariaDB-/MySQL-[Tabellen](../../../software-entwicklung/datenbank-modell/index.md) auf einen positiven Integer-Wert setzen |
| **system-checkforupdates** | ja  | ja  | -   | Nach [Aktualisierungen](../../../wartung-und-betrieb/update-einspielen.md) für i-doit suchen |
| **system-convert-non-innodb-tables** | ja  | ja  | \-  | Konvertiert alle Tabellen, welche nicht in INNODB sind zu INNODB (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| **system-convert-non-utf8-tables** | ja  | ja  | \-  | Konvertiert alle non-UTF8-Tabellen in UTF8-Tabellen (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| **system-location-fix** | ja  | ja  | \-  | Führt die Standortkorrektur aus der GUI auf der Konsole aus |
| **system-maintenancecontract** | ja  | ja  | -   | E-Mail für Wartungsverträge senden |
| **system-objectcleanup** | ja  | ja  | -   | [Objekte bereinigen](../../../grundlagen/lebens-und-dokumentationszyklus.md) |
| **system-objectrelations** | ja  | ja  | -   | [Objekt-Beziehungen](../../../grundlagen/objekt-beziehungen.md) neu aufbauen |
| **system-refresh-table-configuration** | ja  | ja  | \-  | Erneuert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien) |
| **tenant-create** | ja  | nein | -   | Einen neuen [Mandanten](../../../administration/mandantenfaehigkeit.md) hinzufügen |
| **tenant-disable** | ja  | nein | -   | Einen bestehenden [Mandanten](../../../administration/mandantenfaehigkeit.md) deaktivieren |
| **tenant-enable** | ja  | nein | -   | Einen bestehenden [Mandanten](../../../administration/mandantenfaehigkeit.md) aktivieren |
| **tenant-list** | ja  | nein | -   | Alle verfügbaren [Mandanten](../../../administration/mandantenfaehigkeit.md) auflisten |
| **tenant-remove** | ja  | nein | \-  | Einen bestehenden [Mandanten](../../../administration/mandantenfaehigkeit.md) entfernen |
| **uninstall** | ja  | ja  | \-  | Deinstalliert i-doit |
| **update** | ja  | ja  | \-  | Update von i-doit installieren |
| **workflows-process** | ja  | ja  | -   | Workflow-Benachrichtigungen per E-Mail versenden |
