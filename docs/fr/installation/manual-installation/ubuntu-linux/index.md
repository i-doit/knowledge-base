---
title: Ubuntu 22.04 GNU/Linux
description: Installation de i-doit sur Ubuntu 22.04
icon: material/ubuntu
#status: new
lang: de
---

Dans cet article, nous expliquons en quelques étapes les paquets qui doivent être installés et configurés.

## Configuration requise du système

Les [exigences système](../../system-requirements.md) générales s'appliquent.

Si vous souhaitez utiliser [Ubuntu Linux](https://www.ubuntu.com/) comme système d'exploitation, la version serveur **22.04 LTS "Jammy Jellyfish"** est recommandée. Pour savoir quelle version est utilisée, vous pouvez exécuter la commande suivante :

```shell
cat /etc/os-release
```

En tant qu'architecture système, vous devriez utiliser un x86 en 64 bits :

```shell
uname -m
```

**x86_64** signifie 64 bits, **i386** ou **i686** seulement 32 bits.

## Installation des paquets

Si vous souhaitez utiliser les dépôts de paquets officiels, suivez les instructions suivantes pour l'installation de :

*   le serveur web **Apache** 2.4
*   le langage de script **PHP** 8.1
*   le système de gestion de base de données **MariaDB** 10.6 et
*   le serveur de mise en cache **memcached**

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,gd,imagick,json,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

## Configuration

Les paquets installés pour le serveur web Apache, PHP et MariaDB fournissent déjà des fichiers de configuration.<br>
Il est recommandé de sauvegarder les paramètres modifiés dans des fichiers séparés au lieu d'ajuster les fichiers de configuration déjà existants. Sinon, toutes les différences par rapport aux fichiers existants seraient signalées ou même écrasées lors de chaque mise à jour du paquet. Les paramètres de la configuration par défaut sont complétés ou écrasés par des paramètres définis par l'utilisateur.

### PHP

Tout d'abord, un nouveau fichier est créé et rempli avec les paramètres requis :

```shell
sudo nano /etc/php/8.1/mods-available/i-doit.ini
```

!!! example "Ce fichier contient le contenu suivant spécifié par nous. Pour plus d'informations sur les paramètres, consultez [PHP.net](https://www.php.net/manual/de/ini.core.php)"

Le `memory_limit` doit être augmenté si nécessaire, par exemple pour de très grands rapports ou des documents étendus.<br>
La valeur (en secondes) de `session.gc_maxlifetime` doit être la même ou supérieure à la `Durée de la session` dans les [paramètres du système](../system-settings.md) d'i-doit.<br>
Le paramètre `date.timezone` doit être ajusté à l'heure locale (voir [Liste des fuseaux horaires supportés](http://php.net/manual/en/timezones.php)).<br>
Ensuite, les modules PHP requis sont activés et le serveur web Apache est redémarré:<br>

```shell
sudo phpenmod i-doit memcached
```

### Serveur Web Apache

Le VHost par défaut est désactivé et un nouveau est créé:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

La nouvelle configuration VHost est enregistrée dans ce fichier:

```shell
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DirectoryIndex index.php
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
Avec l'étape suivante, vous activez le nouveau VHost et le module Apache nécessaire **rewrite** et le serveur web Apache est redémarré:

```shell
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### MariaDB

Seules quelques étapes sont nécessaires pour garantir que MariaDB offre de bonnes performances et un fonctionnement sûr. Cependant, vous devez porter une attention méticuleuse aux détails et effectuer ces étapes avec précision. Cela commence par une installation sécurisée et vous devriez suivre les recommandations en conséquence.<br>
L'utilisateur **root** doit recevoir un mot de passe sécurisé:

```shell
mysql_secure_installation
```

Activez l'invite MariaDB afin qu'i-doit soit autorisé à utiliser l'utilisateur **root** lors de la configuration:

```shell
sudo mysql -uroot
```

Les déclarations SQL suivantes sont maintenant effectuées dans l'invite MariaDB (Le mot de passe 'password' doit être remplacé par le mot de passe actuel de l'utilisateur 'root'):

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('password');
FLUSH PRIVILEGES;
EXIT;
```
{ /*examples*/ }

Ensuite, MariaDB **10.6** est arrêté. Il est maintenant important de déplacer les fichiers qui ne sont pas nécessaires, sinon le résultat serait une perte significative de performance :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```
{ /*examples*/ }

Un nouveau fichier est créé pour les paramètres déviants :

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```
{ /*examples*/ }

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
{ /*examples*/ }

Enfin, MariaDB est redémarré :

```shell
sudo systemctl restart mysql.service
```
{ /*examples*/ }

## Étape suivante

Maintenant que le système d'exploitation est prêt, i-doit peut être installé.

[Procéder à la **Configuration**](../setup.md){ .md-button .md-button--primary }

