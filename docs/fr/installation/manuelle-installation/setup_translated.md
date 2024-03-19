<!-- TRANSLATED by md-translate -->
# Setup

# Setup

Wenn die nötigen Vorbereitungen getroffen sind - zum Beispiel [die Konfiguration des zugrunde liegenden Betriebssystems](../manuelle-installation/index.md), kann das Setup von i-doit beginnen.

Une fois les préparatifs nécessaires effectués - par exemple [la configuration du système d'exploitation sous-jacent](../manual-installation/index.md), l'installation d'i-doit peut commencer.

## Schnellstart

## Démarrage rapide

In einem Verzeichnis, auf das der Apache Webserver Zugriff hat, entpackt man das Installationspaket von i-doit. Anschließend steuert man mit dem Browser dieses Verzeichnis an und folgt den Anweisungen des Setups.

Dans un répertoire auquel le serveur web Apache a accès, on décompresse le paquet d'installation d'i-doit. Ensuite, on accède à ce répertoire avec le navigateur et on suit les instructions du setup.

## Installationspaket herunterladen und entpacken

## Télécharger le paquet d'installation et le décompresser

Das Installationspaket der pro-Variante ist für alle Kunden im [Kundenportal](../../administration/kundenportal.md) erreichbar, das der open-Variante unter [i-doit.org](https://i-doit.org/). Dieses Paket wird auf den vorbereiteten Server kopiert, entpackt und die Dateien sowie Verzeichnisse mit den passenden Rechten versehen. Diese Anweisungen unterscheiden sich je nach Betriebssystem.

Le paquet d'installation de la variante pro est accessible à tous les clients dans [Portail clients](../../administration/kundenportal.md), celui de la variante open sous [i-doit.org](https://i-doit.org/). Ce paquet est copié sur le serveur préparé, décompressé et les fichiers ainsi que les répertoires sont dotés des droits adéquats. Ces instructions diffèrent selon le système d'exploitation.

### Debian GNU/Linux oder Ubuntu Linux

### Debian GNU/Linux ou Ubuntu Linux

Der Apache Webserver läuft mit den Rechten des Users **www-data** und der gleichnamigen Gruppe **www-data**. Das Hauptverzeichnis vom Apache Webserver lautet **/var/www/html/**:

Le serveur web Apache fonctionne avec les droits de l'utilisateur **www-data** et du groupe du même nom **www-data**. Le répertoire principal du serveur web Apache est **/var/www/html/** :

```shell
sudo mkdir /var/www/html/i-doit
    sudo cp i-doit.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo unzip i-doit.zip
    sudo rm i-doit.zip
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
```

### Red Hat Enterprise Linux (RHEL)

### Red Hat Enterprise Linux (RHEL)

Der Apache Webserver läuft mit den Rechten des Users **apache** und der gleichnamigen Gruppe **apache**. Das Hauptverzeichnis vom Apache Webserver lautet **/var/www/html/**:

Le serveur web Apache fonctionne avec les droits de l'utilisateur **apache** et du groupe du même nom **apache**. Le répertoire principal du serveur web Apache est **/var/www/html/** :

```shell
sudo mkdir /var/www/html/i-doit
    sudo cp i-doit.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo unzip i-doit.zip
    sudo rm i-doit.zip
    sudo chown apache:apache -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
```

### Suse Linux Enterprise Server (SLES)

### Suse Linux Enterprise Server (SLES)

Der Apache Webserver läuft mit den Rechten des Users **wwwrun** und der Gruppe **www**. Das Hauptverzeichnis vom Apache Webserver lautet **/srv/www/htdocs/**:

Le serveur web Apache fonctionne avec les droits de l'utilisateur **wwwrun** et du groupe **www**. Le répertoire principal du serveur web Apache est **/srv/www/htdocs/** :

```shell
sudo mkdir /srv/www/htdocs/i-doit
    sudo cp i-doit.zip /srv/www/htdocs/i-doit/
    cd /srv/www/htdocs/i-doit/
    sudo unzip i-doit.zip
    sudo rm i-doit.zip
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
```

### Microsoft Windows Server

### Microsoft Windows Server

Spezifische Datei- und Verzeichnisrechte sind in der Regel nicht zu setzen, wenn der mit XAMPP installierte Apache Webserver mit denselben Nutzerrechten läuft.

En règle générale, il n'est pas nécessaire de définir des droits spécifiques sur les fichiers et les répertoires si le serveur web Apache installé avec XAMPP fonctionne avec les mêmes droits d'utilisateur.

## Setup durchführen

## Effectuer la configuration

i-doit lässt sich auf zwei Arten installieren: Bequem über die Web GUI (für Einsteiger empfohlen) oder über die Konsole (beispielsweise für die automatisierte Installation).

i-doit peut être installé de deux manières : Confortablement via l'interface graphique Web (recommandé pour les débutants) ou via la console (par exemple pour une installation automatisée).

### Web GUI

### Web GUI

Das Setup wird automatisch aufgerufen, wenn man mit dem Browser i-doit aufruft (Beispiel http://i-doit-host/i-doit/).

Le setup est appelé automatiquement lorsque l'on appelle i-doit avec le navigateur (exemple http://i-doit-host/i-doit/).

#### System Check

#### Contrôle du système

Im ersten Schritt werden wichtige Systemeinstellungen abgefragt. Sollte etwas nicht in Ordnung sein, wird der Benutzer darauf hingewiesen.

La première étape consiste à vérifier les paramètres importants du système. Si quelque chose n'est pas en ordre, l'utilisateur en est informé.

[![system-check](../../assets/images/de/installation/setup/i-doit_setup_01_system_check.png)](../../assets/images/de/installation/setup/i-doit_setup_01_system_check.png)

[ ![system-check](../../assets/images/fr/installation/setup/i-doit_setup_01_system_check.png)](../../assets/images/fr/installation/setup/i-doit_setup_01_system_check.png)

#### Directory Configuration

#### Configuration de l'annuaire

Hierbei werden die Pfade abgefragt, in der installations- und benutzerspezifische Dateien abgelegt werden sollen. Die Vorschläge können übernommen werden.

Les chemins d'accès dans lesquels les fichiers spécifiques à l'installation et à l'utilisateur doivent être placés sont demandés. Les propositions peuvent être acceptées.

[![directory-configuration](../../assets/images/de/installation/setup/i-doit_setup_02_directory_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_02_directory_configuration.png)

[ ![directory-configuration](../../assets/images/fr/installation/setup/i-doit_setup_02_directory_configuration.png)](../../assets/images/fr/installation/setup/i-doit_setup_02_directory_configuration.png)

#### Database Configuration

#### Configuration de la base de données

Für die Datenbank-Anbindung sind wichtige Credentials und Einstellungen einzutragen. Für i-doit werden mindestens zwei Datenbanken und ein spezieller Benutzer angelegt.

Pour la connexion à la base de données, il convient d'entrer des identifiants et des paramètres importants. Pour i-doit, il faut créer au moins deux bases de données et un utilisateur spécial.

[![database-configuration](../../assets/images/de/installation/setup/i-doit_setup_03_database_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_03_database_configuration.png)

[ ![database-configuration](../../assets/images/fr/installation/setup/i-doit_setup_03_database_configuration.png)](../../assets/images/fr/installation/setup/i-doit_setup_03_database_configuration.png)

* **Connection settings**
    - **Host:** in der Regel der Host selbst, also localhost oder 127.0.0.1
    - **Port:** in der Regel der Standard-Port von MySQL/MariaDB, also 3306
    - **Username:** Benutzername des Datenbank-Systembenutzers, meistens root
    - **Password:** Passwort des Benutzers
* **MySQL user settings**
    - **Username**: Benutzername des Besitzers der i-doit-Datenbanken, meistens idoit
    - **Password**: Passwort des Benutzers
* **Database settings**
    - **System Database Name:** Name der Systemdatenbank, meistens idoit_system
    - **Mandator Database Name:** Name der Datenbank für den ersten Mandanten, meistens idoit_data
    - **Mandator title:** Titel des Mandanten, meistens der Name der Organisation, die im Fokus steht
    - **Start value for object/configuration item IDs:** in der Regel

* **Connection settings**
    - **Host:** en général l'hôte lui-même, donc localhost ou 127.0.0.1
    - **Port:** en général le port standard de MySQL/MariaDB, soit 3306
    - **Username:** nom d'utilisateur du système de base de données, généralement root
    - **Password:** Mot de passe de l'utilisateur
**MySQL user settings**
    - **Username** : nom d'utilisateur du propriétaire des bases de données i-doit, le plus souvent idoit
    - **Password** : Mot de passe de l'utilisateur
**Database settings**
    - **System Database Name:** Nom de la base de données système, le plus souvent idoit_system
    - **Mandator Database Name:** Nom de la base de données pour le premier mandant, le plus souvent idoit_data
    - **Mandator title:** Titre du mandant, le plus souvent le nom de l'organisation qui est en focus
    - **Start value for object/configuration item IDs:** en général

!!! success "Unix Socket vs. Network Port"

! !! succes "Unix Socket vs. Network Port"

```
PHP kann sich auf zwei Arten mit MariaDB/MySQL verbinden: zum einen per Unix Socket, zum anderen über TCP/IP. Wir empfehlen, den performanteren Unix Socket zu verwenden. Die Verwendung des Unix Sockets wird erzwungen, wenn man in der oben genannten Konfiguration Host den Wert **localhost** einträgt. Eine andere Angabe (**127.0.0.1**, FQDN o. ä.) führt dazu, dass TCP/IP verwendet wird.

MariaDB/MySQL öffnet in der Regel beim Start des Dienstes einen Unix Socket. Der Pfad dorthin wird in der Einstellung **socket** angegeben und lautet beispielsweise unter [Debian GNU/Linux](debian.md) **/var/run/mysqld/mysqld.sock**. Dieser Wert muss PHP bekannt sein, damit i-doit eine Verbindung zu MariaDB/MySQL aufbauen kann. Die entsprechende PHP-Einstellung lautet **mysqli.default_socket**. Wer nach der Installationsanleitung vorgegangen ist, kann die selbst erstellte PHP-Konfigurationsdatei um diese Einstellung ergänzen, zum Beispiel: **mysqli.default_socket = /var/run/mysqld/mysqld.sock**

Nachträgliche Änderungen an den PHP-Einstellungen werden erst wirksam, wenn der Dienst des Apache Webservers neu geladen wird. Beispiel unter Debian GNU/Linux: `sudo systemctl reload apache2.service`

Dieser Tipp bezieht sich auf Unix-artige Betriebssysteme. Windows ist davon ausgenommen.
```

#### Framework Configuration

#### Configuration du framework

Für den Zugang zum **[Admin-Center](../../administration/admin-center.md)** in i-doit gibt es gesonderte Credentials, die hier festgelegt werden können. Es wird empfohlen, dies auch zu tun.

Pour l'accès au **[Admin-Center](../../administration/admin-center.md)** dans i-doit, il existe des credentials séparés qui peuvent être définis ici. Il est recommandé de faire de même.

[![framework-configuration](../../assets/images/de/installation/setup/i-doit_setup_04_framework_configuration.png)](../../assets/images/de/installation/setup/i-doit_setup_04_framework_configuration.png)

[ ![framework-configuration](../../assets/images/fr/installation/setup/i-doit_setup_04_framework_configuration.png)](../../assets/images/fr/installation/setup/i-doit_setup_04_framework_configuration.png)

#### Config Check

#### Contrôle de la configuration

In diesem Schritt werden alle vorherigen Schritte zusammengefasst und überprüft, ob das Setup vollzogen werden kann.

Cette étape résume toutes les étapes précédentes et permet de vérifier si l'installation peut être effectuée.

#### Installation

#### Installation

In diesem Schritt geschieht die eigentliche Installation von i-doit auf dem System. Nach erfolgreicher Installation folgt eine Zusammenfassung. Danach kann i-doit aufgerufen und verwendet werden.

L'installation proprement dite d'i-doit sur le système a lieu à cette étape. Une fois l'installation terminée, un résumé est affiché. Ensuite, i-doit peut être appelé et utilisé.

### Konsole

### Console

Über die Konsole lässt sich i-doit über die mitgelieferte [console.php](../../automatisierung-und-integration/cli/console/index.md) installieren: durch einen geführten Assistenten oder durch eine einfache Zeile, die sich für automatisierte Installationen eignet. Beide Arten führt man innerhalb des **i-doit**-Verzeichnisses durch:

Dans la console, i-doit peut être installé via le fichier [console.php](../../automatisation-et-intégration/cli/console/index.md) fourni : par un assistant guidé ou par une simple ligne, qui convient pour les installations automatisées. Les deux méthodes s'effectuent dans le répertoire **i-doit** :

cd /var/www/html/i-doit/

cd /var/www/html/i-doit/

Es ist zwingend erforderlich, die folgenden Befehle mit dem Benutzer auszuführen, mit dessen Rechten der Webserver läuft. Bei [Debian](debian.md) basierten Betriebssystemen ist dies **www-data**, unter RHEL **apache** und SLES **wwwrun**.

Il est impératif d'exécuter les commandes suivantes avec l'utilisateur avec les droits duquel le serveur web fonctionne. Pour les systèmes d'exploitation basés sur [Debian](debian.md), il s'agit de **www-data**, sous RHEL **apache** et SLES **wwwrun**.

Die Optionen orientieren sich am Setup über die Web GUI.

Les options s'orientent vers la configuration via l'interface utilisateur Web.

#### Geführte Installation

#### Installation guidée

```
sudo -u www-data php console.php install
```

Der Assistent fragt einige Credentials und Einstellungen ab. In Klammern angegebene Werte sind Standardwerte, die durch Druck auf **Enter** übernommen werden.

L'assistant demande quelques informations d'identification et paramètres. Les valeurs indiquées entre parenthèses sont des valeurs par défaut qui sont acceptées en appuyant sur **Enter**.

Anschließend kann ein [Mandant](../../administration/mandantenfaehigkeit.md) über das [Admin Center](../../administration/admin-center.md) oder über die [console.php](../../automatisierung-und-integration/cli/console/index.md) erstellt werden.

Ensuite, un [mandant](../../administration/mandantenfaehigkeit.md) peut être créé via le [Admin Center](../../administration/admin-center.md) ou via la [console.php](../../automatisierung-und-integration/cli/console/index.md).

sudo -u www-data php console.php create-tenant

sudo -u www-data php console.php create-tenant

#### Automatisierte Installation

#### Installation automatisée

```shell
sudo -u www-data php console.php install --root-user mysqlrootuser --root-password mysqlrootpassword --host localhost --port 3306 --database idoit_system --user mysqlidoituser --password mysqlidoitpassword --admin-password admincenterpw --no-interaction
```

Nun wurde i-doit installiert. Wir benötigen noch einen [Mandant](../../administration/mandantenfaehigkeit.md). Diesen erstellen wir auch über die [console.php](../../automatisierung-und-integration/cli/console/index.md):

Maintenant, i-doit a été installé. Nous avons encore besoin d'un [mandant](../../administration/mandantfaehigkeit.md). Nous le créons également via le [console.php](../../automatisation-et-intégration/cli/console/index.md) :

```shell
sudo -u www-data php console.php tenant-create --root-user mysqlrootuser --root-password mysqlrootpassword --host localhost --port 3306 --database idoit_system --user mysqlidoituser --password mysqlidoitpassword --admin-password admincenterpw --no-interaction
```

## Weitere Schritte

## Autres étapes

* [Lizenz herunterladen und einspielen](../../wartung-und-betrieb/lizenz-aktivieren.md)
* [Backup einrichten](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
* [Cronjobs einrichten](../../wartung-und-betrieb/cronjobs-einrichten.md)
* [Erstanmeldung](../../grundlagen/erstanmeldung.md)

* [Télécharger et installer la licence](../../maintenance-et-exploitation/activer-une-licence.md)
* [Configurer une sauvegarde](../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md)
* [Configurer les tâches cron](../../maintenance-et-exploitation/configuration-des-travaux-cron.md)
* [Première connexion](../../bases/connexion.md)
