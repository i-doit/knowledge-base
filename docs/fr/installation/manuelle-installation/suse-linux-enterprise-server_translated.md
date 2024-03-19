<!-- TRANSLATED by md-translate -->
# Suse Linux Enterprise Server (SLES)

# Suse Linux Enterprise Server (SLES)

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

Nous expliquons en quelques étapes dans cet article quels paquets doivent être installés et configurés.

## Systemvoraussetzungen

## Configuration requise

Es gelten die allgemeinen [Systemvoraussetzungen](../systemvoraussetzungen.md).

Les [conditions système requises] générales (../conditions système.md) s'appliquent.

Dieser Artikel bezieht sich auf [**Suse Linux Enterprise Server 15**](https://www.suse.com/de-de/solutions/enterprise-linux/). Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

Cet article se réfère à [**Suse Linux Enterprise Server 15**](https://www.suse.com/de-de/solutions/enterprise-linux/). Pour déterminer quelle version est utilisée, on peut exécuter cette commande sur la console :

```
cat /etc/os-release
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:

L'architecture du système devrait être un x86 en 64bit :

```
uname -m
```

**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

**x86_64** signifie 64bit, **i386** ou **i686** seulement 32bit.

## Installation der Pakete

## Installation des paquets

Die Standard-Repositories von Suse Linux Enterprise Server (SLES) bringen bereits alle nötigen Pakete mit, um

Les référentiels standards de Suse Linux Enterprise Server (SLES) apportent déjà tous les paquets nécessaires pour

* den **Apache** Webserver 2.4,
* die Script-Sprache **PHP** 7.2 (ab SLES 15 SP 2: **PHP**7.4),
* das Datenbankmanagementsystem **MariaDB** 10.2 (ab SLES 15 SP 2: **MariaDB**10.4) und
* den Caching-Server **memcached**

* le serveur web **Apache** 2.4,
* le langage de script **PHP** 7.2 (à partir de SLES 15 SP 2 : **PHP**7.4),
* le système de gestion de base de données **MariaDB** 10.2 (à partir de SLES 15 SP 2 : **MariaDB**10.4) et
* le serveur de mise en cache **memcached**

zu installieren.

à installer.

Vorerst ist die Aktivierung von zusätzlichen Add-ons in **Yast** nötig:

Pour l'instant, il est nécessaire d'activer des add-ons supplémentaires dans **Yast** :

* **Web and Scripting Module**

**Web and Scripting Module** (module web et script)

Um zu prüfen, ob beide Add-ons aktiviert sind, ruft man folgenden Befehl auf:

Pour vérifier si les deux add-ons sont activés, il faut appeler la commande suivante :

```
sudo zypper repos -E
```

Mit zypper werden anschließend die nötigen Pakete installiert:

Les paquets nécessaires sont ensuite installés avec zypper :

```
sudo zypper refresh
sudo zypper update
sudo zypper install \
apache2 apache2-mod_php74 \
mariadb mariadb-client \
memcached \
php74 php74-bcmath php74-bz2 php74-ctype php74-curl php74-gd php74-gettext php74-fileinfo \
php74-json php74-ldap php74-mbstring php74-mcrypt php74-memcached php74-mysql php74-opcache \
php74-openssl php74-pdo php74-pgsql php74-phar php74-posix php74-soap php74-sockets php74-sqlite \
php74-xsl php74-zip php74-zlib
```

Damit der Apache Webserver und MariaDB beim Booten gestartet werden, sind diese Befehle erforderlich:

Pour que le serveur web Apache et MariaDB soient lancés au démarrage, ces commandes sont nécessaires :

```
sudo systemctl enable apache2.service
sudo systemctl enable mysql.service
sudo systemctl enable memcached.service
```

Anschließend erfolgt der Start beider Dienste:

Les deux services sont ensuite lancés :

```
sudo systemctl start apache2.service
sudo systemctl start mysql.service
sudo systemctl start memcached.service
```

Weiterhin wird der Standard-Port 80 von HTTP über die Firewall erlaubt. Diese muss nach der Anpassung neu gestartet werden:

De plus, le port standard 80 de HTTP est autorisé par le pare-feu. Celui-ci doit être redémarré après l'adaptation :

```
sudo firewall-cmd --zone=public --add-port=80/tcp --permanent
```

## Konfiguration

## Configuration

Die installierten Pakete für Apache Webserver, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

Les paquets installés pour le serveur web Apache, PHP et MariaDB apportent déjà des fichiers de configuration. Il est recommandé de sauvegarder les paramètres différents dans des fichiers séparés plutôt que d'adapter les fichiers de configuration existants. A chaque mise à jour du paquet, les paramètres divergents seraient critiqués ou écrasés. Les paramètres de la configuration standard sont complétés ou remplacés par les paramètres définis par l'utilisateur.

### PHP

### PHP

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

Un nouveau fichier est d'abord créé et rempli avec les paramètres nécessaires :

```
sudo vi /etc/php74/conf.d/i-doit.ini
```

Diese Datei erhält folgenden Inhalt:

Ce fichier aura le contenu suivant :

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
mysqli.default_socket = /var/run/mysql/mysql.sock
```

Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer gleich dem **Session Timeout** in den [Systemeinstellungen](systemeinstellungen.md) von i-doit sein.

La valeur (en secondes) de **session.gc_maxlifetime** doit être supérieure ou égale au **Session Timeout** dans les [Préférences Système](systemeinstellungen.md) d'i-doit.

Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

Le paramètre **date.timezone** doit être adapté au fuseau horaire local (voir [Liste des fuseaux horaires supportés](http://php.net/manual/de/timezones.php)).

Anschließend wird der Apache Webserver neu gestartet:

Le serveur web Apache est ensuite redémarré :

```
sudo systemctl restart apache2.service
```

### Apache Webserver

### Serveur web Apache

Ein wird eine neue VHost-Konfiguration aus dem existierenden Template **vhost.template** erzeugt:

Une nouvelle configuration VHost est créée à partir du modèle existant **vhost.template** :

```
sudo cp /etc/apache2/vhosts.d/vhost.template /etc/apache2/vhosts.d/i-doit.conf
sudo vi /etc/apache2/vhosts.d/i-doit.conf
```

In dieser Datei wird die VHost-Konfiguration angepasst und gespeichert:

La configuration VHost est adaptée et enregistrée dans ce fichier :

```
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DocumentRoot /srv/www/htdocs/
        <Directory /srv/www/htdocs/>
                AllowOverride All
                Require all granted
        </Directory>

        LogLevel warn
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Damit diese Einstellungen berücksichtigt werden, ist die Einstellung **AllowOverride All** nötig.

i-doit fournit des paramètres Apache différents dans des fichiers nommés **.htaccess**. Pour que ces réglages soient pris en compte, le paramètre **AllowOverride All** est nécessaire.

Im nächsten Schritt werden die nötigen Apache-Module **php7**, **rewrite** und **mod_access_compat** aktiviert sowie der Apache Webserver neu gestartet:

L'étape suivante consiste à activer les modules Apache nécessaires **php7**, **rewrite** et **mod_access_compat** et à redémarrer le serveur web Apache :

```
sudo a2enmod php7
sudo a2enmod rewrite
sudo a2enmod mod_access_compat
sudo systemctl restart apache2.service
```

### MariaDB

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. Den Empfehlungen sollte gefolgt werden. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

Pour que MariaDB offre de bonnes performances et puisse être exploité en toute sécurité, quelques étapes sont nécessaires et doivent être suivies scrupuleusement. Cela commence par une installation sûre. Il convient de suivre les recommandations. L'utilisateur **root** doit recevoir un mot de passe sûr :

```
mysql_secure_installation
```

Damit i-doit beim Setup den Benutzer **root** verwenden darf, ruft man die Shell von MariaDB auf:

Pour que i-doit puisse utiliser l'utilisateur **root** lors du setup, il faut appeler le shell de MariaDB :

```
sudo mysql -uroot
```

In der Shell von MariaDB werden nun folgende SQL-Statements ausgeführt:

Les instructions SQL suivantes sont maintenant exécutées dans le shell de MariaDB :

```
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
FLUSH PRIVILEGES;
EXIT;
```

!!! info "Änderung ab MariaDB 10.4 und aufwärts"

! !! info "Modification à partir de la version 10.4 de MariaDB et suivantes".

```
Ab MariaDB Version 10.4 und aufwärts wird das UPDATE-Statement nicht mehr in der user-Tabelle unterstützt.
Nun muss das Statement ALTER USER genutzt werden:

    ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
```

Anschließend wird MariaDB gestoppt. Wichtig ist hierbei das Verschieben von nicht benötigten Dateien (andernfalls droht ein signifikanter Performance-Verlust):

MariaDB est ensuite arrêté. Il est important de déplacer les fichiers inutiles (sinon, les performances risquent d'être considérablement réduites) :

```
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:

Un nouveau fichier est créé pour les paramètres de configuration différents :

```
sudo vi /etc/my.cnf.d/99-i-doit.cnf
```

Diese Datei enthält die neuen Konfigurationseinstellungen. Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden:

Ce fichier contient les nouveaux paramètres de configuration. Pour une performance optimale, ces paramètres doivent être adaptés au matériel (virtuel) :

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

Abschließend wird MariaDB gestartet:

Enfin, MariaDB est lancé :

```
sudo systemctl start mysql.service
```

## Nächster Schritt

## Prochaine étape

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

Le système d'exploitation est maintenant prêt pour l'installation d'i-doit :

[Weiter zu _Setup_](setup.md)

[Suivant _Setup_](setup.md)