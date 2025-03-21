---
title: Setup
description: Setup
icon:
status:
lang: de
---

Wenn die nötigen Vorbereitungen getroffen sind - zum Beispiel [die Konfiguration des zugrunde liegenden Betriebssystems](../manuelle-installation/index.md), kann das Setup von i-doit beginnen.

## Schnellstart

In einem Verzeichnis, auf das der Apache HTTP Server Zugriff hat, entpackt man das Installationspaket von i-doit. Anschließend steuert man mit dem Browser dieses Verzeichnis an und folgt den Anweisungen des Setups.

## Installationspaket herunterladen und entpacken

Das Installationspaket der pro-Variante ist für alle Kunden im [Kundenportal](../../administration/kundenportal.md) erreichbar, das der open-Variante unter [i-doit.org](https://i-doit.org/). Dieses Paket wird auf den vorbereiteten Server kopiert, entpackt und die Dateien sowie Verzeichnisse mit den passenden Rechten versehen. Diese Anweisungen unterscheiden sich je nach Betriebssystem.

### Debian oder Ubuntu

Der Apache HTTP Server läuft mit den Rechten des Users **www-data** und der gleichnamigen Gruppe **www-data**. Das Hauptverzeichnis vom Apache HTTP Server lautet **/var/www/html/**:

i-doit Ordner erstellen und die Dateien hinein kopieren:

```sh
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
```

Nun die Rechte setzen, damit der Apache HTTP Server Benutzer lesen und schreiben kann:

```sh
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Red Hat Enterprise Linux (RHEL)

Der Apache HTTP Server läuft mit den Rechten des Users **apache** und der gleichnamigen Gruppe **apache**. Das Hauptverzeichnis vom Apache HTTP Server lautet **/var/www/html/**:

i-doit Ordner erstellen und die Dateien hinein kopieren:

```sh
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
```

Nun die Rechte setzen, damit der Webserver Benutzer lesen und schreiben kann:

```sh
sudo chown apache:apache -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Suse Linux Enterprise Server (SLES)

Der Apache HTTP Server läuft mit den Rechten des Users **wwwrun** und der Gruppe **www**. Das Hauptverzeichnis vom Apache HTTP Server lautet **/srv/www/htdocs/**:

```sh
sudo mkdir /srv/www/htdocs/i-doit
sudo cp i-doit.zip /srv/www/htdocs/i-doit/
cd /srv/www/htdocs/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
```

Nun die Rechte setzen, damit der Webserver Benutzer lesen und schreiben kann:

```sh
sudo chown wwwrun:www -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Microsoft Windows Server

Spezifische Datei- und Verzeichnisrechte sind in der Regel nicht zu setzen, wenn der mit XAMPP installierte Apache HTTP Server mit denselben Nutzerrechten läuft.

## Setup durchführen

i-doit lässt sich auf zwei Arten installieren: Bequem über die Web GUI (für Einsteiger empfohlen) oder über die [Konsole](#konsole) (beispielsweise für die automatisierte Installation).

### Web GUI

Das Setup wird automatisch aufgerufen, wenn man mit dem Browser i-doit aufruft (Beispiel <http://i-doit-host/i-doit/>).

#### System Check

Im ersten Schritt werden wichtige Systemeinstellungen abgefragt. Sollte etwas nicht in Ordnung sein, wird der Benutzer darauf hingewiesen.

[![system-check](../../assets/images/de/installation/setup/i-doit_setup_01_system_check.png)](../../assets/images/de/installation/setup/i-doit_setup_01_system_check.png)

#### Directory Configuration

Hierbei werden die Pfade abgefragt, in der installations- und benutzerspezifische Dateien abgelegt werden sollen. Die Vorschläge können übernommen werden.

[![directory-configuration](../../assets/images/de/installation/setup/i-doit_setup_02_directory_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_02_directory_configuration.png)

#### Database Configuration

Für die Datenbank-Anbindung sind wichtige Credentials und Einstellungen einzutragen. Für i-doit werden mindestens zwei Datenbanken und ein spezieller Benutzer angelegt.

[![database-configuration](../../assets/images/de/installation/setup/i-doit_setup_03_database_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_03_database_configuration.png)

-   **Connection settings**
    -   **Host:** in der Regel der Host selbst, also localhost oder 127.0.0.1
    -   **Port:** in der Regel der Standard-Port von MySQL/MariaDB, also 3306
    -   **Username:** Benutzername des Datenbank-Systembenutzers, meistens root
    -   **Password:** Passwort des Benutzers
-   **MySQL user settings**
    -   **Username**: Benutzername des Besitzers der i-doit-Datenbanken, meistens idoit
    -   **Password**: Passwort des Benutzers
-   **Database settings**
    -   **System Database Name:** Name der Systemdatenbank, meistens idoit_system
    -   **Mandator Database Name:** Name der Datenbank für den ersten Mandanten, meistens idoit_data
    -   **Mandator title:** Titel des Mandanten, meistens der Name der Organisation, die im Fokus steht
    -   **Start value for object/configuration item IDs:** in der Regel

!!! success "Unix Socket vs. Network Port"

    PHP kann sich auf zwei Arten mit MariaDB/MySQL verbinden: zum einen per Unix Socket, zum anderen über TCP/IP. Wir empfehlen, den performanteren Unix Socket zu verwenden. Die Verwendung des Unix Sockets wird erzwungen, wenn man in der oben genannten Konfiguration Host den Wert **localhost** einträgt. Eine andere Angabe (**127.0.0.1**, FQDN o. ä.) führt dazu, dass TCP/IP verwendet wird.

    MariaDB/MySQL öffnet in der Regel beim Start des Dienstes einen Unix Socket. Der Pfad dorthin wird in der Einstellung **socket** angegeben und lautet beispielsweise unter Debian GNU/Linux **/var/run/mysqld/mysqld.sock**. Dieser Wert muss PHP bekannt sein, damit i-doit eine Verbindung zu MariaDB/MySQL aufbauen kann. Die entsprechende PHP-Einstellung lautet **mysqli.default_socket**. Wer nach der Installationsanleitung vorgegangen ist, kann die selbst erstellte PHP-Konfigurationsdatei um diese Einstellung ergänzen, zum Beispiel: **mysqli.default_socket = /var/run/mysqld/mysqld.sock**

    Nachträgliche Änderungen an den PHP-Einstellungen werden erst wirksam, wenn der Dienst des Apache HTTP Servers neu geladen wird. Beispiel unter Debian GNU/Linux: `sudo systemctl reload apache2.service`

    Dieser Tipp bezieht sich auf Unix-artige Betriebssysteme. Windows ist davon ausgenommen.

#### Framework Configuration

Für den Zugang zum **[Admin-Center](../../administration/admin-center.md)** in i-doit gibt es gesonderte Credentials, die hier festgelegt werden können. Es wird empfohlen, dies auch zu tun.

[![framework-configuration](../../assets/images/de/installation/setup/i-doit_setup_04_framework_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_04_framework_configuration.png)

#### Config Check

In diesem Schritt werden alle vorherigen Schritte zusammengefasst und überprüft, ob das Setup vollzogen werden kann.

#### Installation

In diesem Schritt geschieht die eigentliche Installation von i-doit auf dem System. Nach erfolgreicher Installation folgt eine Zusammenfassung. Danach kann i-doit aufgerufen und verwendet werden.

### Konsole

Über die Konsole lässt sich i-doit über die mitgelieferte [console.php](../../automatisierung-und-integration/cli/console/index.md) installieren: durch einen geführten Assistenten oder durch eine einfache Zeile, die sich für automatisierte Installationen eignet. Beide Arten führt man innerhalb des **i-doit**\-Verzeichnisses durch:

```sh
cd /var/www/html/i-doit/
```

Es ist zwingend erforderlich, die folgenden Befehle mit dem Benutzer auszuführen, mit dessen Rechten der Webserver läuft. Bei Debian basierten Betriebssystemen ist dies **www-data**, unter RHEL **apache** und SLES **wwwrun**.

Die Optionen orientieren sich am Setup über die Web GUI.

#### Geführte Installation über die Konsole

```shell
sudo -u www-data php console.php install
```

Der Assistent fragt einige Credentials und Einstellungen ab. In Klammern angegebene Werte sind Standardwerte, die durch Druck auf **Enter** übernommen werden.

Anschließend kann ein [Mandant](../../administration/mandantenfaehigkeit.md) über das [Admin-Center](../../administration/admin-center.md) oder über die [console.php](../../automatisierung-und-integration/cli/console/index.md) erstellt werden.

```shell
sudo -u www-data php console.php create-tenant
```

#### Automatisierte Installation über die Konsole

```shell
sudo -u www-data php console.php install --root-user mysqlrootuser --root-password mysqlrootpassword --host localhost --port 3306 --database idoit_system --user mysqlidoituser --password mysqlidoitpassword --admin-password admincenterpw --no-interaction
```

Nun wurde i-doit installiert. Wir benötigen noch einen [Mandant](../../administration/mandantenfaehigkeit.md). Diesen erstellen wir auch über die [console.php](../../automatisierung-und-integration/cli/console/index.md):

```shell
sudo -u www-data php console.php tenant-create --root-user mysqlrootuser --root-password mysqlrootpassword --database idoit_system --user mysqlidoituser --password mysqlidoitpassword --no-interaction --title "CMDB"
```

## Weitere Schritte

-   [Lizenz herunterladen und einspielen](../../wartung-und-betrieb/lizenzierung.md)
-   [Backup einrichten](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
-   [Cronjobs einrichten](../../wartung-und-betrieb/cronjobs-einrichten.md)
-   [Erstanmeldung](../../grundlagen/erstanmeldung.md)
