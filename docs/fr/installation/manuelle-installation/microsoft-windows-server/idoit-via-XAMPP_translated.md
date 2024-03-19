<!-- TRANSLATED by md-translate -->
# i-doit via XAMPP

# i-doit via XAMPP

Wie i-doit unter dem Betriebssystem Windows installiert wird, beschreiben wir in diesem Artikel.

Nous décrivons dans cet article comment installer i-doit sous le système d'exploitation Windows.

!!! info "Dieser Artikel wurde zuletzt für i-doit Version **1.19** geprüft"

! !! info "Cet article a été vérifié en dernier pour i-doit version **1.19**"

!!! attention "Firewall"

! !! attention "pare-feu"

```
Für unsere Installation deaktivieren wir die Windows Firewall, damit RDP und die Verbindung zum Webserver funktionieren. Natürlich sollten die Anwendungen und Ports in der Firewall gezielt konfiguriert werden, jedoch möchten wir dies nicht in dieser Anleitung in den Vordergrund stellen.
```

### Schritt 1: Die Installation

### Étape 1 : l'installation

![type:video](../../../assets/images/de/installation/microsoft-windows/xampp/xampp-installation-unter-windows.mp4)

![type:video](../../assets/images/fr/installation/microsoft-windows/xampp/xampp-installation-sous-windows.mp4)

Zuerst wird das XAMPP-Paket unter [https://www.apachefriends.org/de/index.html](https://www.apachefriends.org/de/index.html) herunter.<br>
Andere Pakete funktionieren jedoch auch. Beispielweise kann das gepackte Packet (.zip) auch einfach unter C:\ entpackt werden.<br>
Wichtig ist bei der Installation von XAMPP, dass der Installationspfad unbedingt "C:\xampp" ist, weil auf das Verzeichnis "C:\Program Files (x86)" nicht genug Rechte vorhanden sind und somit die Installation mit hoher Wahrscheinlichkeit nicht richtig funktionieren wird.

Tout d'abord, le paquet XAMPP est téléchargé à l'adresse [https://www.apachefriends.org/de/index.html](https://www.apachefriends.org/de/index.html). <br>
D'autres paquets fonctionnent également. Par exemple, le paquet compressé (.zip) peut aussi être simplement décompressé sous C:\.<br>.
Lors de l'installation de XAMPP, il est important que le chemin d'installation soit impérativement "C:\xampp", car il n'y a pas assez de droits sur le répertoire "C:\Program Files (x86)" et il est donc fort probable que l'installation ne fonctionne pas correctement.

Hierbei müssen die [Systemvoraussetzungen](../../systemvoraussetzungen.md) der jeweiligen i-doit Version beachtet werden. Deshalb wird in diesem Beispiel das Installationspaket → xampp-windows-x64-8.0.23-0-VS16-installer.exe mit PHP 8 welches ab i-doit 1.19 unterstützt wird

Pour cela, il faut tenir compte de la [configuration requise](../../systemvoraussetzung.md) de chaque version d'i-doit. Dans cet exemple, le paquet d'installation → xampp-windows-x64-8.0.23-0-VS16-installer.exe avec PHP 8 est supporté à partir de la version 1.19 d'i-doit.

Es müssen mindestens die Komponenten **Apache**, **MySQL** und **PHP** installiert werden.<br>
[![Installation](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation.png)

Il faut installer au moins les composants **Apache**, **MySQL** et **PHP**.<br>
[ ![Installation](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation.png)](../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation.png)

Als Ordner wird der Standard belassen → **C:\xampp**

Le dossier par défaut est laissé → **C:\xampp**.

[![Installationspfad](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)

[ ![Chemin d'installation](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-1-installation-chemin.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-1-installation-chemin.png)

Dann wählen wir noch die Sprache aus, ich belasse diese bei **English**.

Ensuite, nous choisissons encore la langue, je la laisse à **English**.

[![Installationssprache](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)

[ ![Langue d'installation](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)

Die nächsten **Next >** Buttons sollten selbsterklärend sein.

Les boutons suivants **Next >** devraient être explicites.

[![Installations abschließen](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-fertig.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-fertig.png)

[ ![Terminer l'installation](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-1-installation-finie.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-1-installation-finie.png)

Somit wäre die Installations nun abgeschlossen und wir lassen mit Klick auf Finish das Control Panel von XAMPP starten.

L'installation est maintenant terminée et nous lançons le panneau de contrôle de XAMPP en cliquant sur Finish.

[![Installation-control-panel](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)

[ ![Installation-control-panel](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)

### Schritt 2: Die Konfiguration der Umgebung

### Étape 2 : la configuration de l'environnement

#### PHP

#### PHP

Nun Konfigurieren wir PHP. Dazu Klicken wir auf den Button Config → PHP (php.ini) um die php.ini zu öffnen.

Nous allons maintenant configurer PHP. Pour cela, nous cliquons sur le bouton Config → PHP (php.ini) pour ouvrir le php.ini.

[![Konfiguration-PHP](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-php.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-php.png)

[ ![Configuration-PHP](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-2-php.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-2-php.png)

Im Normalfall sollte die Datei automatisch mit dem Editor geöffnet werden. Wir fügen am Ende der Datei die folgenden Einstellungen ein und speichern:

Normalement, le fichier devrait s'ouvrir automatiquement avec l'éditeur. Nous ajoutons les paramètres suivants à la fin du fichier et enregistrons :

```
allow_url_fopen = Yes
file_uploads = On
magic_quotes_gpc = Off
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
register_globals = Off
short_open_tag = On
upload_max_filesize = 128M
display_errors = Off
display_startup_errors = Off
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = On
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
```

_Zusätzlich kann es für die LDAP Extension notwendig sein, die Datei **libsasl.dll**von **C:\xampp\php** nach **C:****\xampp\apache\bin** zu kopieren.<br>
Außerdem muss in der php.ini unter Dynamic Extensions die ;extension=ldap und ;extension=gd vom anführenden Semikolon befreit werden._

De plus, pour l'extension LDAP, il peut être nécessaire de copier le fichier **libsasl.dll** de **C:\xampp\php** vers **C:****\xampp\apache\bin**.<br>
De plus, dans le php.ini, sous Dynamic Extensions, il faut supprimer le point-virgule en tête de ;extension=ldap et ;extension=gd._

#### Apache Webserver

#### Serveur web Apache

Gesonderte Einstellungen für den Apache Webserver sind hier nicht notwendig.

Il n'est pas nécessaire de procéder à des réglages particuliers pour le serveur web Apache.

#### MySQL/MariaDB

#### MySQL/MariaDB

Nun Konfigurieren wir MySQL/MariaDB. Dazu Klicken wir auf den Button Config → my.ini.

Nous allons maintenant configurer MySQL/MariaDB. Pour cela, nous cliquons sur le bouton Config → my.ini.

[![Konfiguration-MySQL](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-mysql.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-mysql.png)

[ ![Configuration-MySQL](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-2-mysql.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-2-mysql.png)

Im Normalfall sollte auch diese Datei automatisch mit dem Editor geöffnet werden. Wir fügen auch hier am Ende der Datei die folgenden Einstellungen ein und speichern:

Normalement, ce fichier devrait également s'ouvrir automatiquement avec l'éditeur. Nous ajoutons ici aussi les paramètres suivants à la fin du fichier et enregistrons :

```
[mysqld]

# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
#
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G

# Use multiple instances if you have innodb_buffer_pool_size > 10G, 1 every 4GB
innodb_buffer_pool_instances = 1

# Redo log file size, the higher the better.
# MySQL/MariaDB writes two of these log files in a default installation.
innodb_log_file_size = 512M

innodb_sort_buffer_size = 64M
sort_buffer_size = 262144 # default
join_buffer_size = 262144 # default

max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M

tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1

# Disable this (= 0) if you have only one to two CPU cores, change it to 4 for a quad core.
innodb_thread_concurrency = 0

# Disable this (= 0) if you have slow harddisks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT

innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
# Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4

innodb_stats_on_metadata = 0

sql-mode = ""
```

### Schritt 3: Starten von Apache und MySQL

### Étape 3 : Démarrer Apache et MySQL

Wir klicken bei Apache und MySQL auf den![start-button](../../../assets/images/de/installation/microsoft-windows/xampp/start.png) Start button. Ggf. wird nun ein Firewall popup erscheinen.<br>
Nun sollten beiden Module Grün hinterlegt sein.

Pour Apache et MySQL, nous cliquons sur le bouton ![start-button](../../../assets/images/fr/installation/microsoft-windows/xampp/start.png) Start. Le cas échéant, un popup de pare-feu apparaîtra. <br>
Les deux modules devraient maintenant être sur fond vert.

[![Service-start](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-start.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-start.png)

[ ![Service-start](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-3-start.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/schritt-3-start.png)

#### Passwort für den MySQL root

#### Mot de passe pour le root MySQL

Nun sollten wir für den MySQL root Benutzer ein Passwort setzen.<br>
Dazu klicken wir auf den ![shell-button](../../../assets/images/de/installation/microsoft-windows/xampp/shell.png) Shell button.

Nous devons maintenant définir un mot de passe pour l'utilisateur root de MySQL. <br>
Pour cela, nous cliquons sur le ![shell-button](../../../assets/images/fr/installation/microsoft-windows/xampp/shell.png) Shell button.

[![shell-control-panel](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-passwort-root.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-passwort-root.png)

[ ![shell-control-panel](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-3-password-root.png)](../../../assets/images/fr/installation/microsoft-windows/xampp/pas-3-password-root.png)

Zuerst loggen wir uns ein:

D'abord, on se connecte :

```
mysql -u root
```

Nun ändern wir das Passwort, '_thisistotallysecure!!11_' sollte durch ein eigenes Passwort ersetzt werden:

Maintenant, nous allons changer le mot de passe, '_thisistotallysecure!!11_' devrait être remplacé par un mot de passe personnel :

```
ALTER USER 'root'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';
```

### Schritt 4: i-doit herunterladen und entpacken

### Étape 4 : télécharger et décompresser i-doit

#### i-doit Herunterladen und Entpacken

#### Télécharger et décompresser i-doit

Nun laden wir uns i-doit in der aktuellsten Version aus dem [Kundenportal](../../../administration/kundenportal.md) herunter.<br>
Die idoit-1.xx.x.zip entpacken wir unter C:\xampp\htdocs und benennen den idoit-1.xx.x Ordner in idoit um.

Maintenant, nous téléchargeons i-doit dans sa dernière version à partir du [portail client](../../../administration/portail client.md).<br>
Nous décompressons le fichier idoit-1.xx.x.zip dans C:\xampp\htdocs et renommons le dossier idoit-1.xx.x en idoit.

### Schritt 5: Überprüfen der Installation

### Étape 5 : Vérifier l'installation

Mit der vorherigen Konfiguration haben wir den Webserver vorbereitet. Nun sollten wir, wenn wir in einem Browser die IP des Systems oder localhost aufrufen, die Willkommensseite des Apaches angezeigt bekommen.<br>
Unter PHPInfo im Menü kann man nachprüfen, ob die in der php.ini eingestellten Werte richtig übernommen wurden.

Avec la configuration précédente, nous avons préparé le serveur web. Maintenant, si nous appelons l'IP du système ou localhost dans un navigateur, nous devrions voir la page de bienvenue d'Apache.<br>
Sous PHPInfo dans le menu, on peut vérifier si les valeurs définies dans le php.ini ont été correctement reprises.

### Nächster Schritt

### Prochaine étape

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

Le système d'exploitation est maintenant prêt pour l'installation d'i-doit :

[Weiter zu _Setup_](../../manuelle-installation/setup.md)

[Suivant _Setup_](../../installation-manuelle/setup.md)

### FAQ

### FAQ

Mit XAMPP "xampp-windows-x64-8.0.23-0-VS16-installer" wurde eine neue Version der PHP extension gd hinzugefügt.<br>
Daher sollte die php.ini nicht durch die der PHP7.4 Version ersetzt werden.

Avec XAMPP "xampp-windows-x64-8.0.23-0-VS16-installer", une nouvelle version de l'extension PHP gd a été ajoutée.<br>
Par conséquent, le php.ini ne doit pas être remplacé par celui de la version PHP7.4.

Für PHP 7.4 hieß diese noch extension=gd2 und in PHP8.0 heißt Sie extension=gd.

Pour PHP 7.4, elle s'appelait extension=gd2 et pour PHP8.0, elle s'appelle extension=gd.