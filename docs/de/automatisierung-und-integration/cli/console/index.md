# Console

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

i-doit verfügt über ein Command line Interface (CLI), über das sich verschiedene Aufgaben durchführen lassen. Das CLI wird beispielsweise für [Cronjobs](../../../wartung-und-betrieb/cronjobs-einrichten.md) benötigt und kann zum Automatisieren von Arbeitsschritten eingesetzt werden.

## Erste Schritte

Das CLI befindet sich im Installationsverzeichnis von i-doit, beispielsweise unter **/var/www/html/**. Es muss innerhalb dieses Verzeichnisses mit denselben Rechten des Apache Webservers aufgerufen werden. Unter Debian GNU/Linux ist dies der User **www-data**. Mittels **sudo** werden diese Rechte erlangt:

```sh
cd /var/www/html/
sudo -u www-data php console.php
```

Unter Windows wechselt man ebenso in das Installationsverzeichnis. Da die Rechte des Webservers keine Rolle spielen, genügt der Aufruf von **php.exe**, welches im Pfad des Benutzers stehen muss.

```cmd
cd C:\xampp\htdocs
php.exe console.php
```

Führt man die CLI ohne weitere Argument aus, wird die allgemeine Hilfe präsentiert:

??? abstract "Verfügbare Kommandos ohne Add-ons"
    ```text
    i-doit console utility 32

    Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  addon-activate                      Activate add-on
  addon-deactivate                    Deactivate add-on
  addon-install                       Install add-on
  addon-list                          Shows list of installed addons
  addon-uninstall                     Deactivate add-on
  admin-center-password-reset         With this command you can reset the Admin-Center password
  auth-cleanup                        Cleanup all auth paths
  clear-credentials                   It removes both attributes username and password from the users "login" category
  completion                          Dump the shell completion script
  contracts-outdated                  Updates status of outdated contracts
  extend-contracts                    Automatically extend the runtime of not-cancelled contracts
  help                                Display help for a command
  import-csv                          Imports CSV formatted files (Using a predefined CSV Import filter, defined in the GUI)
  import-csvprofiles                  List all available csv profiles
  import-hinventory                   Imports files formatted in the hInventory XML syntax
  import-jdisc                        Imports data from a JDisc server (SQL server access is defined in the GUI)
  import-jdiscdiscovery               Triggers a JDisc discovery (API Access to the JDisc server is defined in the GUI)
  import-syslog                       Imports data from a Syslog server textfile to the i-doit Logbook
  import-xml                          Imports files formatted in the i-doit XML syntax
  install                             Install the i-doit application
  jdisc-create-server                 Creates a JDisc server, based on given input
  ldap-sync                           Synchronizes LDAP user accounts with i-doit user objects
  ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (Only needs to be run when migrating between different LDAP sources)
  license-add                         Add license into i-doit
  license-assign                      Assign hosting license to i-doit tenant
  license-import                      Import licenses from the i-doit server
  license-key                         Set license key for i-doit
  license-list                        List of the licenses:  ID, Product, Type (type of license), From (start of license), Expire (expiration date of license), Licensed (max amount of licensed objects), Tenants (max amount of tenants), Environment
  license-remove                      Remove license from i-doit
  list                                List commands
  logbook-archive                     Archives Logbook entries (Settings are defined in the GUI)
  migrate-uploaded-files              Migrates uploaded files in i-doit <v1.13 to v.1.14>
  notifications-list                  Lists all notification types and notifications for later usage
  notifications-send                  Sends out e-mails for notifications defined in the notification add-on
  report-export                       Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
  search                              Triggers a search and gives the results as formatted text table
  search-index                        Deletes current search index and create it
  strip-description-html              With this command you can strip html tags in description field of all categories and objects
  sync-dynamic-groups                 Synchronize dynamic group members
  system-autoincrement                Changes the initial autoincrement value for all i-doit database tables (Affects everything, Object-IDs, category entries, etc. Use with caution!)
  system-categorycleanup              Purges optionally category entries that are in the state unfinished, archived or deleted
  system-checkforupdates              Checks for i-doit core updates
  system-convert-non-innodb-tables    Converts all tables which are not in INNODB to INNODB (Affects database encoding. Use with caution!)
  system-convert-non-utf8-tables      Changes all non-UTF8-tables to UTF8 (Affects database encoding. Use with caution!)
  system-location-fix                 Performs the location fix from the systemtools GUI
  system-objectcleanup                Purges optionally objects that are in the state unfinished, archived or deleted
  system-objectrelations              Regenerates all object relation names
  system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)
  system-set-settings                 Set system settings
  tenant-create                       Create tenant in i-doit
  tenant-disable                      Disables the tenant with specific id
  tenant-enable                       Enables the tenant with specific id
  tenant-list                         Shows list of available tenants
  tenant-remove                       Remove the i-doit Tenant
  uninstall                           Uninstall the i-doit application
  update                              Update the i-doit application
 idoit
  idoit:feature-manager               [idoit:fm] With this command it will be possible to activate a set of features in i-doit.
  idoit:set-env-var                   With this command it will be possible to set environmental variables for i-doit.
  idoit:set-update-capability         Dis- and enable the i-doit update capability
    ```

## Authentifizierung

Um über das CLI auf i-doit zugreifen zu können, ist für die meisten Commands eine Authentifizierung nötig. Dazu übergibt man einen Benutzernamen, das passende Passwort und die gewünschte [Tenant ID](../../../administration/mandantenfaehigkeit.md). Letztere ist bei einer Standardinstallation meistens die **1**.

```shell
cd /var/www/html/
sudo -u www-data php console.php [COMMAND] --user admin --password admin --tenantId 1 [WEITERE OPTIONEN]
```

!!! check "Der Benutzer "console"
    Es wird empfohlen, einen dedizierten Benutzer in i-doit für die Nutzung der CLI anzulegen. Soll dieser als [lokaler Benutzer](../../../benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen.md) konfiguriert werden, erstellt man ihn als Objekt vom Typ **Personen** mit den gewünschten Credentials in der Kategorie **Personen → Login**. Dieser Benutzer sollte Admin-Rechte erhalten. Dies kann durch die Zuordnung zur vordefinierten **Personengruppe** **Admin** geschehen.

## Hilfe

Commands werden oftmals von weiteren Argumenten begleitet. Daher liefert jedes Command eine Hilfe via **--help**:

```shell
cd /var/www/html/
sudo -u www-data php console.php search --help
```

Darüber hinaus bieten einige Commands Beispielaufrufe via **--usage**.

[Weiter zu den Befehlen](optionen-und-parameter-der-console.md){ .md-button .md-button--primary }
