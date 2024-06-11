# Suse Linux Enterprise Server (SLES)

!!! alert "OBSOLETE"

Dans cet article, nous expliquons en quelques étapes quelles sont les packages qui doivent être installés et configurés.

!!! failure "Le guide est obsolète et sera renouvelé"
    Pour plus d'informations, consultez <https://github.com/i-doit/knowledge-base/issues/423>

## Configuration système

Les [exigences système générales](../system-requirements.md) s'appliquent.

Cet article concerne [**Suse Linux Enterprise Server 15**](https://www.suse.com/solutions/enterprise-linux/). Pour savoir quelle version est utilisée, vous pouvez exécuter la commande suivante :

```shell
cat /etc/os-release
```

En tant qu'architecture système, vous devriez utiliser un x86 en 64 bits :

```shell
uname -m
```

**x86_64** signifie 64 bits, **i386** ou **i686** seulement 32 bits.

## Installation des packages

Les dépôts de packages par défaut de Suse Linux Enterprise Server (SLES) fournissent déjà les packages nécessaires à l'installation :

-   le serveur web **Apache** 2.4
-   le langage de script **PHP** 7.2 (à partir de SLES 15 SP 2 : **PHP** 7.4)
-   le système de gestion de base de données **MariaDB** 10.2 (à partir de SLES 15 SP 2 : **MariaDB** 10.4) et
-   le serveur de mise en cache **memcached**

Tout d'abord, vous devez activer des modules complémentaires supplémentaires dans **Yast** :

-   **Module Web et Scripting**

Vous pouvez vérifier avec la commande suivante si les deux modules complémentaires sont activés :

```shell
sudo zypper repos -E
```

Ensuite, les packages requis sont installés avec zypper :

```shell
sudo zypper refresh
sudo zypper update
sudo zypper install \
apache2 apache2-mod_php7 \
mariadb mariadb-client \
memcached \
php7 php7-bcmath php7-bz2 php7-ctype php7-curl php7-gd php7-gettext php7-fileinfo \
php7-json php7-ldap php7-mbstring php7-mcrypt php7-memcached php7-mysql php7-opcache \
php7-openssl php7-pdo php7-pgsql php7-phar php7-posix php7-soap php7-sockets php7-sqlite \
php7-xsl php7-zip php7-zlib
```

Pour démarrer Apache Webserver et MariaDB lors du processus de démarrage, les commandes suivantes sont nécessaires :

```shell
sudo systemctl enable apache2.service
sudo systemctl enable mysql.service
sudo systemctl enable memcached.service
```

Ensuite, les deux services sont démarrés :

```shell
sudo systemctl start apache2.service
sudo systemctl start mysql.service
sudo systemctl start memcached.service
```

Le port par défaut HTTP 80 est autorisé via le pare-feu. Le pare-feu doit être redémarré après que les ajustements ont été effectués :

```shell
sudo firewall-cmd -zone=public -add-port=80/tcp --permanent
```

## Configuration

Les packages installés pour le serveur web Apache, PHP et MariaDB fournissent déjà des fichiers de configuration. Il est recommandé de sauvegarder les paramètres modifiés dans des fichiers séparés au lieu d'ajuster les fichiers de configuration déjà existants. Sinon, toutes les différences par rapport aux fichiers existants seraient signalées voire écrasées lors de chaque mise à jour du package. Les paramètres de la configuration par défaut sont complétés ou écrasés par des paramètres définis par l'utilisateur.

### PHP

Tout d'abord, un nouveau fichier est créé et rempli avec les paramètres requis :

```shell
sudo nano /etc/php7/conf.d/i-doit.ini
```

Ce fichier contient les éléments suivants :

```shell
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

La valeur (en secondes) de `session.gc_maxlifetime` doit être la même ou supérieure à la `Durée de la session` dans les [paramètres du système](system-settings.md) de i-doit.

Le paramètre `date.timezone` doit être ajusté au fuseau horaire local (voir [Liste des fuseaux horaires supportés](http://php.net/manual/en/timezones.php)).

Ensuite, le serveur web Apache est redémarré :

```shell
sudo systemctl restart apache2.service
```

### Serveur Web Apache

Une nouvelle configuration VHost est créée à partir du modèle existant **vhost.template** :

```shell
sudo nano /etc/apache2/vhosts.d/i-doit.conf
```

Dans ce fichier, la configuration VHost est modifiée et enregistrée :

```shell
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

i-doit inclut des paramètres Apache différents dans des fichiers portant le nom **.htaccess**. Le paramètre **AllowOverride All** est requis pour que ces paramètres soient pris en compte.

À l'étape suivante, vous activez les modules Apache nécessaires **php7**, **rewrite** et **mod_access_compat** et le serveur web Apache est redémarré :

```shell
sudo a2enmod php7
sudo a2enmod rewrite
sudo a2enmod mod_access_compat
sudo systemctl restart apache2.service
```

### MariaDB

Seules quelques étapes sont nécessaires pour garantir que MariaDB offre de bonnes performances et un fonctionnement sûr. Cependant, vous devez porter une attention méticuleuse aux détails et effectuer ces étapes avec précision. Cela commence par une installation sécurisée et vous devriez suivre les recommandations en conséquence. L'utilisateur **root** devrait recevoir un mot de passe sécurisé :

```shell
mysql_secure_installation
```

Activez le shell MariaDB afin que i-doit soit autorisé à appliquer l'utilisateur **root** lors de la configuration :

```shell
sudo mysql -uroot
```

Les déclarations SQL suivantes sont maintenant exécutées dans le shell MariaDB :

```shell
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
FLUSH PRIVILEGES;
EXIT;
```

Ensuite, MariaDB est arrêté. Il est maintenant important de déplacer les fichiers qui ne sont pas nécessaires, sinon le résultat serait une perte significative de performances :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

Un nouveau fichier est créé pour les paramètres de configuration déviants :

```shell
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```

Ce fichier contient les nouveaux paramètres de configuration. Pour des performances optimales, vous devriez adapter ces paramètres au matériel (virtuel) :

```shell
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

Enfin, MariaDB est démarré avec :

```shell
sudo systemctl start mysql.service
```

## Étape suivante

Maintenant que le système d'exploitation est prêt, i-doit peut être installé.

Poursuivez avec [**Configuration** …](setup.md)
```
