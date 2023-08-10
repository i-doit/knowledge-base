# Controller

i-doit verfügt über ein Kommandozeilen-Werkzeug namens Controller.

!!! warning "Deprecated"

    Der Controller ist seit Version 1.10 als veraltet markiert und wird in einer der nächsten Versionen entfernt werden. Als Alternative gilt die [Console](../cli/console/index.md).

Erste Schritte
--------------

Der Controller befindet sich im Hauptverzeichnis von i-doit. Wenn Du laut [Installationsanleitung](../../installation/manuelle-installation/setup.md) vorgegangen bist, befindet sich das Hauptverzeichnis bei [Debian](../../installation/manuelle-installation/debian.md)\-basierten Betriebssystemen unter **/var/www/html/i-doit/**:

    $ ll /var/www/html/i-doit/controller
    -rwxrwxr-- 1 www-data www-data 314 Jul 7 14:23 /var/www/html/i-doit/controller

Um Fehler zu vermeiden, ist es wichtig, den Controller mit dem selben Benutzer aufzurufen, den der Webserver benutzt. Im Beispiel ist es **www-data**. Zudem ist es wichtig, erst in das Hauptverzeichnis von i-doit zu wechseln, bevor man den den Controller aufruft:

```shell
    $ cd /var/www/html/i-doit/
    $ sudo -u www-data ./controller

    Usage: controller.php [OPTION] [PARAMETERS]
    e.g.: controller.php -v -m workflow
    Options:
        -m HANDLER   Load handler HANDLER module.
        -u username  i-doit username
        -p password  i-doit password
        -i tenant    ID of tenant to connect to (use './tenants ls' for a list)
        -h           This help text
        -v           Verbose mode
        -d           Displays ALL debug messages
```

    HANDLER can be one of the following availlable handlers:
    addldapdn, archivelog, cleanup_auth, cleanup_objects, csv_import, import, isc_dhcpd, jdisc, jdisc_discovery, ldap, maintenance, nagios, nagios_export, notifications, ocs, regenerate_relations, report, syslog, tenants, updatecheck, workflow

Da [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)\-Betriebsysteme nicht mit dem Bash-Skript vom Controller umgehen können, ist dieser leicht abgewandelt in der Eingabeaufforderung aufzurufen:

    php.exe controller.php

Mandant und Credentials
-----------------------

Um den Controller verwenden zu können, ist eine Authentifizierung gegenüber i-doit notwendig. Hierfür benötigt man Benutzername (**-u**), Passwort (**-p**) und die eindeutige ID des zu verwendenen Mandanten (**-i**).

!!! check "Der Benutzer "controller""

    Es wird empfohlen, für den Controller einen dedizierten Benutzer in i-doit anzulegen. Soll dieser als lokaler Benutzer konfiguriert werden, erstellt man ihn als Objekt vom Typ **Personen** mit den gewünschten Credentials in der Kategorie **Personen → Login**. Dieser Benutzer sollte Admin-Rechte erhalten. Dies kann durch die Zuordnung zur vordefinierten **Personengruppe** Admin geschehen.

Um herauszufinden, welche eindeutige ID ein bestimmer Mandant hat, kann man folgendes Kommando benutzen:

```shell
    $ sudo -u www-data ./tenants ls
    Mandator-Handler initialized (2015-07-22 10:32:42)
    Availlable Mandators:
    ID: Title (Language) (host:port) [status]
    1 : ACME IT Solutions (localhost:3306) [active]
    2 : Schulz GmbH (localhost:3306) [active]
```

Bei i-doit-Installationen mit nur einem Mandanten lautet die ID in der Regel **1**.

Handler
-------

Der Controller ist in der Lage, verschiedene Aktionen auszuführen. Diese werden wiederum durch Handler repräsentiert. Um einen bestimmten Handler aufzurufen, wird der Parameter **-m** benötigt.

### Liste von Handlern

| Handler | pro-Variante | open-Variante | Add-on | Beschreibung |
| --- | --- | --- | --- | --- |
| **[addldapdn](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)** | ja  | ja  | -   | Synchronisiere aus einem LDAP/AD den Distinguished Name (DN) der Benutzer (siehe Kategorie **LDAP**) |
| **[archivelog](../../grundlagen/logbuch.md)** | ja  | ja  | -   | Logbuch-Einträge archivieren |
| **[check_mk](../network-monitoring/daten-abfragen-mit-livestatus.md)** | ja  | ja  | -   | Ist-Zustand aus dem Network Monitoring ins Logbuch schreiben |
| **[cleanup_auth](../../effizientes-dokumentieren/rechteverwaltung/index.md)** | ja  | ja  | -   | Rechtesystem bereinigen |
| **[cleanup_objects](../../grundlagen/lebens-und-dokumentationszyklus.md)** | ja  | ja  | -   | Objekte bereinigen |
| **[csv_import](../../daten-konsolidieren/csv-datenimport/index.md)** | ja  | -   | -   | Daten aus einer CSV-Datei importieren |
| **[document](../../i-doit-pro-add-ons/documents/index.md)** | -   | -   | **[Documents](../../i-doit-pro-add-ons/documents/index.md)** | Neue Revision eines Dokuments erstellen |
| **import** | ja  | ja  | -   | i-doit XML oder [h-inventory XML](../../daten-konsolidieren/h-inventory.md) importieren |
| **increment_config** | ja  | ja  | -   | auto_increment von MariaDB-/MySQL-Tabellen auf einen positiven Integer-Wert setzen |
| **isc_dhcpd** | ja  | ja  | -   | Konfiguration für ISC DHCPD exportieren |
| **[jdisc](../../daten-konsolidieren/jdisc-discovery.md)** | ja  | ja  | -   | Daten aus JDisc importieren |
| **[jdisc_discovery](../../daten-konsolidieren/jdisc-discovery.md)** | ja  | ja  | -   | Einen Discovery Job bei JDisc auslösen |
| **[ldap](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)** | ja  | ja  | -   | Daten aus einem LDAP-Verzeichnis oder Active Directory (AD) importieren |
| **[maintenance](../../i-doit-pro-add-ons/maintenance.md)** | -   | -   | **[Maintenance](../../i-doit-pro-add-ons/maintenance.md)** | E-Mails bei geplanten Wartungen versenden |
| **[nagios](../network-monitoring/daten-abfragen-mit-livestatus.md)** | ja  | ja  | -   | Ist-Zustand aus dem Network Monitoring ins Logbuch schreiben |
| **[nagios_export](../network-monitoring/nagios.md)** | ja  | ja  | -   | Nagios-Konfiguration exportieren |
| **[notifications](../e-mail.md)** | ja  | ja  | -   | Benachrichtigungen per E-Mail versenden |
| **[ocs](../../i-doit-pro-add-ons/ocs-inventory-ng.md)** | ja  | ja  | -   | Daten aus OCS Inventory NG importieren |
| **[regenerate_relations](../../grundlagen/objekt-beziehungen.md)** | ja  | ja  | -   | Objekt-Beziehungen neu aufbauen |
| **[report](../../auswertungen/report-manager.md)** | ja  | -   | -   | Einen Report als Datei exportieren |
| **[search\_index](../../effizientes-dokumentieren/suche.md)** | ja  | ja  | -   | In i-doit suchen oder Suchindex erstellen/erneuern |
| **syslog** | ja  | ja  | -   | Daten aus dem Syslog in das Logbuch von i-doit importieren |
| **[tenants](../cli/controller.md#mandant-und-credentials)** | ja  | ja  | -   | Mandanten auflisten, aktivieren und deaktivieren |
| **[updatecheck](../../wartung-und-betrieb/update-einspielen.md)** | ja  | ja  | -   | Nach Aktualisierungen für i-doit suchen |
| **workflow** | ja  | ja  | -   | Workflow-Benachrichtigungen per E-Mail versenden |

### Konfiguration von Handlern

#### Zusätzliche Parameter angeben

Manche Handler erfordern weitere Optionen, die direkt dem Controller über bestimmte Parameter mitgegeben werden können. Welche dies sind, kannst du den Links bei der Liste von Handlern entnehmen.

#### Konfigurations-Datei anpassen

Zu manchen Handlern gibt es jeweils eine spezielle Konfigurationsdatei. Beispiele befinden sich unterhalb des Hauptverzeichnis von i-doit in **src/handler/config/examples/**. Damit eine Konfigurationsdatei berücksichtigt wird, muss diese im Verzeichnis **src/handler/config/** verfügbar sein.
