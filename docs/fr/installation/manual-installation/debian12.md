---
title: Debian 12 GNU/Linux
description: Installation de i-doit sur Debian 12
icon: material/debian
status: new
lang: fr
---

Dans cet article, nous expliquons en quelques étapes les paquets qui doivent être installés et configurés. Nous utilisons un environnement sans **bureau**.

!!! warning ""
    Lorsque vous installez Debian, vous atteignez éventuellement un dialogue de "Sélection de logiciels" qui comporte une liste de cases à cocher pour choisir les logiciels que vous souhaitez installer initialement. Il y a une case à cocher "Environnement de bureau Debian", pré-cochée ; en la décochant, et en laissant toutes les autres cases de l'environnement de bureau non cochées (GNOME, Xfce, etc.), cela entraînera une installation sans interface graphique :

    [![Sélection de logiciels](../../assets/images/en/installation/manual-installation/debian/gui.png)](../../assets/images/en/installation/manual-installation/debian/gui.png)

## Configuration requise du système 

Les [exigences système](../system-requirements.md) générales s'appliquent.

Cet article se réfère à [**Debian GNU/Linux 12 "bookworm"**](https://www.debian.org/index.en.html). Pour savoir quelle version de Debian est utilisée, vous pouvez exécuter la commande suivante :

```shell
cat /etc/debian_version
```

En tant qu'architecture système, vous devriez utiliser un x86 en 64 bits :

```shell
uname -m
```

**x86_64** signifie 64 bits, **i386** ou **i686** seulement 32 bits.

## Installation des paquets 

Les dépôts de paquets par défaut de Debian GNU/Linux fournissent déjà les paquets nécessaires à l'installation :

-   le serveur web **Apache** 2.4
-   le langage de script **PHP** 8.2
-   le système de gestion de base de données **MariaDB** 10.11 et
-   le serveur de mise en cache **memcached**

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,gd,imagick,json,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

## Configuration 

Les paquets installés pour le serveur web Apache, PHP et MariaDB fournissent déjà des fichiers de configuration. Il est recommandé de sauvegarder les paramètres modifiés dans des fichiers séparés au lieu d'ajuster les fichiers de configuration déjà existants. Sinon, toutes les différences par rapport aux fichiers existants seraient signalées voire écrasées lors de chaque mise à jour du paquet. Les paramètres de la configuration par défaut sont complétés ou écrasés par des paramètres définis par l'utilisateur.

### PHP {#php}

Tout d'abord, un nouveau fichier est créé et rempli avec les paramètres requis :

```shell
sudo nano /etc/php/8.2/mods-available/i-doit.ini
```

!!! example "Ce fichier contient le contenu suivant spécifié par nous. Pour plus d'informations sur les paramètres, consultez [PHP.net](https://www.php.net/manual/de/ini.core.php)"

```ini
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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

La valeur de `memory_limit` doit être augmentée si nécessaire, par exemple pour de très grands rapports ou des documents étendus.<br>
La valeur (en secondes) de `session.gc_maxlifetime` doit être égale ou supérieure à celle de `Session Timeout` dans les [paramètres système](system-settings.md) de i-doit.<br>
Le paramètre `date.timezone` doit être ajusté à la zone horaire locale (voir [Liste des fuseaux horaires supportés](http://php.net/manual/en/timezones.php)).<br>
Ensuite, les modules PHP requis sont activés et le serveur web Apache est redémarré :

```shell
sudo phpenmod i-doit memcached
```

### Serveur Web Apache {#apache}

Le VHost par défaut est désactivé et un nouveau est créé :

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

!!! example "Ce fichier contient le contenu suivant spécifié par nous. Pour plus d'informations sur les paramètres, consultez [httpd.apache.org](https://httpd.apache.org/docs/2.4/en/mod/core.html)"

```shell
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DocumentRoot /var/www/html/
        <Directory /var/www/html/>
                AllowOverride All
                Require all granted
        </Directory>

        LogLevel warn
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

i-doit inclut des paramètres Apache différents dans des fichiers portant le nom **.htaccess**. Le paramètre **AllowOverride All** est requis pour que ces paramètres soient pris en compte.<br>
Avec l'étape suivante, vous activez le nouveau VHost et le module Apache nécessaire **rewrite** et le serveur web Apache est redémarré :

```shell
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### MariaDB

Pour garantir que MariaDB offre de bonnes performances et peut être utilisé de manière sécurisée, vous ne devez pas seulement suivre nos instructions, mais aussi vous informer davantage. Commencez par une installation sécurisée où les recommandations doivent être suivies. De plus, l'utilisateur **root** devrait se voir attribuer un mot de passe sécurisé.

```shell
sudo mysql_secure_installation
```

Activez le shell MariaDB afin que i-doit soit autorisé à appliquer l'utilisateur **root** lors de la configuration :

```shell
sudo mysql -uroot
```

!!! attention Annoter "Si l'installation de MariaDB a déjà été effectuée sans définir de mot de passe, connectez-vous via `mysql -u root` et définissez un mot de passe via (1)"
    ```sql
    ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('VOTRE_MOT_DE_PASSE');
    ```

1. Pour plus d'informations sur la commande, consultez ici -> <https://mariadb.com/kb/en/alter-user/>

Le mode d'arrêt d'InnoDB doit encore être modifié. La valeur `0` provoque un nettoyage complet et une fusion des tampons de modification avant l'arrêt de MariaDB :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
```

Un nouveau fichier est créé pour les différents paramètres de configuration et notre configuration standard est insérée :

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

!!! example "Ce fichier contient les nouveaux paramètres de configuration. Pour une **performance optimale, ces paramètres doivent être adaptés au matériel (virtuel)**. Pour des réglages optimaux, veuillez vous référer à [mariadb.com](https://mariadb.com/kb/en/optimization-and-tuning/)"

```ini
[mysqld]
# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
# See https://mariadb.com/kb/en/innodb-buffer-pool/
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G
# Redo log file size, the higher the better.
# MySQL/MariaDB writes one of these log files in a default installation.
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
# Disable this (= 0) if you have slow hard disks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
innodb_stats_on_metadata = 0
# The maximum number of instances is defined by the table_open_cache_instances system variable.
# The default value of the table_open_cache_instances system variable is 8, which is expected to handle up to 100 CPU cores.
# If your system is larger than this, then you may benefit from increasing the value of this system variable.
table_open_cache_instances = 8
sql-mode = ""
```

Enfin, MariaDB est redémarré :

```shell
sudo systemctl restart mysql.service
```

!!! bug "[Avertissement] Vous devez utiliser --log-bin pour que --expire-logs-days ou --binlog-expire-logs-seconds fonctionne."
    Si ce message apparaît dans le journal, commentez simplement `expire_logs_days = 10` dans le fichier `/etc/mysql/mariadb.conf.d/50-server.cnf`.
    Rapport de bug pour Debian -> <https://salsa.debian.org/mariadb-team/mariadb-server/-/merge_requests/61>

## Étape suivante 

setup.md
Maintenant que le système d'exploitation est prêt, i-doit peut être installé.

[Procéder à la **Configuration**](setup.md){ .md-button .md-button--primary }
