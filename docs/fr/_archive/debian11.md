---
title: Debian 11 GNU/Linux
description: Installation de i-doit sur Debian 11
icon: material/debian
#status: updated
lang: fr
---

Dans cet article, nous expliquons en quelques étapes les paquets qui doivent être installés et configurés. Nous utilisons un environnement sans **bureau**.

!!! warning ""
    Lorsque vous installez Debian, vous atteignez éventuellement une boîte de dialogue "Sélection des logiciels" qui contient une liste de cases à cocher pour choisir les logiciels que vous souhaitez installer initialement. Il y a une case à cocher "Environnement de bureau Debian", pré-cochée; en la décochant, et en laissant toutes les autres cases de l'environnement de bureau non cochées (GNOME, Xfce, etc.), vous obtiendrez une installation sans interface graphique :

    [![Sélection des logiciels]()]()

## Configuration requise du système {/examples}

Les [exigences système générales]() s'appliquent.

Cet article fait référence à [**Debian GNU/Linux 11 "bullseye"**](https://www.debian.org/index.en.html). Pour savoir quelle version de Debian est utilisée, vous pouvez exécuter la commande suivante :

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
-   le langage de script **PHP** 7.4
-   le système de gestion de base de données **MariaDB** 10.5 et
-   le serveur de mise en cache **memcached**

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

## Configuration

Les paquets installés pour le serveur web Apache, PHP et MariaDB fournissent déjà des fichiers de configuration. Il est recommandé de sauvegarder les paramètres modifiés dans des fichiers séparés au lieu d'ajuster les fichiers de configuration déjà existants. Sinon, toutes les différences par rapport aux fichiers existants seraient signalées voire écrasées lors de chaque mise à jour du paquet. Les paramètres de la configuration par défaut sont complétés ou écrasés par des paramètres définis par l'utilisateur.

### PHP {/examples}

Tout d'abord, un nouveau fichier est créé et rempli avec les paramètres requis :

```shell
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

Ce fichier contient les éléments suivants :

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

La valeur (en secondes) de `session.gc_maxlifetime` doit être égale ou supérieure à la `Durée de la session` dans les [paramètres système]() de i-doit.

Le paramètre `date.timezone` doit être ajusté à la zone horaire locale (voir la [liste des fuseaux horaires supportés](http://php.net/manual/en/timezones.php)).

Ensuite, les modules PHP requis sont activés et le serveur web Apache est redémarré :

```shell
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

### Serveur Web Apache {/examples}

Le VHost par défaut est désactivé et un nouveau est créé :

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

La nouvelle configuration VHost est enregistrée dans ce fichier :

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
sudo systemctl restart apache2.service
```

### MariaDB

Seules quelques étapes sont nécessaires pour garantir que MariaDB offre de bonnes performances et un fonctionnement sécurisé. Cependant, vous devez porter une attention méticuleuse aux détails et effectuer ces étapes avec précision. Cela commence par une installation sécurisée et vous devez suivre les recommandations en conséquence. L'utilisateur **root** doit recevoir un mot de passe sécurisé :

```shell
sudo mysql_secure_installation
```

Activez l'invite MariaDB afin que i-doit soit autorisé à utiliser l'utilisateur **root** lors de la configuration :

```shell
sudo mysql -uroot
```

!!! warning "Mot de passe pour l'utilisateur root de MariaDB"
    Si l'utilisateur root de MariaDB n'a pas encore de mot de passe, l'accès à la base de données ne fonctionnera pas après l'exécution de l'instruction ALTER USER. Par conséquent, l'utilisateur root de MariaDB doit se voir attribuer un mot de passe au préalable :

```sql
SET PASSWORD for 'root'@'localhost' = PASSWORD ('motdepasse');
```

Les instructions SQL suivantes sont maintenant exécutées dans l'invite MariaDB (Le 'motdepasse' doit être remplacé par le mot de passe actuel de l'utilisateur 'root') :

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('password');
FLUSH PRIVILEGES;
EXIT;
```

!!! info "Utilisation de MariaDB 10.3 et versions antérieures"

Jusqu'à la version 10.3 de MariaDB, l'instruction UPDATE est prise en charge dans la table utilisateur.

```sql
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
```

Ensuite, MariaDB est arrêté. Il est maintenant important de déplacer les fichiers qui ne sont pas nécessaires, sinon le résultat serait une perte significative de performance :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

Un nouveau fichier est créé pour les paramètres déviants :```

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

Ce fichier contient les nouveaux paramètres de configuration. Pour des performances optimales, vous devriez adapter ces paramètres au matériel (virtuel) :

```ini
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
# MySQL/MariaDB writes two ofe these log files in a default installation.
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

Enfin, MariaDB est démarré :

```shell
sudo systemctl start mysql.service
```

## Étape suivante {/ * exemples *}

Maintenant que le système d'exploitation est prêt, vous pouvez procéder à l'installation de i-doit.

Procédez à [**Configuration**]()
```
