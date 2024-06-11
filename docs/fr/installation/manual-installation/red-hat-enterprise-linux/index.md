# Red Hat Enterprise Linux 8 (RHEL 8)

Cet article décrit les packages qui doivent être installés et configurés.

## Configuration requise du système

Les [configurations système générales](../../system-requirements.md) s'appliquent.

Cet article fait référence à **RHEL en version 8.x**
Pour déterminer quelle version est utilisée, cette commande peut être exécutée sur la console :

```shell
cat /etc/os-release
```

En tant qu'architecture système, un x86 en 64 bits devrait être utilisé :

```shell
uname -m
```

**x86_64** signifie 64 bits, **i386** ou **i686** seulement pour 32 bits.

Il existe d'autres systèmes d'exploitation étroitement liés à RHEL, tels que la réplique ouverte CentOS et Fedora, qui est maintenue par Red Hat. Cependant, seul RHEL est officiellement pris en charge.

## Installation des packages

Sur un système à jour

-   le serveur web **Apache** 2.4,
-   le langage de script **PHP** 7.4,
-   le système de gestion de base de données **MariaDB** 10.5
-   le serveur de mise en cache **memcached**

Cependant, la **version 8.x actuelle de RHEL** ne contient que des packages obsolètes qui ne répondent pas aux exigences du système.<br>
Il est donc nécessaire d'installer des packages actuels à partir d'autres dépôts.

Mais soyez **prudent** car les dépôts tiers pourraient compromettre la stabilité du système d'exploitation !

Tout d'abord, les premiers packages sont installés à partir des dépôts par défaut :

```shell
sudo dnf update
sudo dnf install httpd memcached unzip wget zip
```

Pour PHP, les Packages supplémentaires pour Enterprise Linux (EPEL) actuels sont inclus :

```shell
sudo rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-8
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-8.noarch.rpm
```

Une fois le dépôt inclus, les versions possibles sont initialisées et ensuite la version souhaitée peut être activée (nous utilisons PHP 7.3 ici) :

```shell
sudo dnf module list php
sudo dnf module install php:7.4 -y
```

Les packages PHP sont ensuite installés :

```shell
sudo dnf install php php-bcmath php-cli php-common php-curl php-gd php-json php-ldap php-mysql php-pgsql php-soap php-xml php-zip
```

De plus, RHEL n'offre que des packages de distribution obsolètes pour MariaDB. Par conséquent, nous utilisons le dépôt tiers officiel de MariaDB :

```shell
sudo nano /etc/yum.repos.d/MariaDB.repo
```

Le fichier contient le contenu suivant :

```shell
# MariaDB 10.5 RHEL repository list
# http://downloads.mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.5/rhel8-amd64
module_hotfixes=1
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

Après l'installation des paquets (Remarque : MariaDB nécessite le paquet supplémentaire boost-program-options pour une installation propre) :

```shell
sudo dnf install boost-program-options
sudo dnf install MariaDB-server MariaDB-client --disablerepo=AppStream
```

Ces commandes sont nécessaires pour démarrer le serveur web Apache et MariaDB au démarrage :

```shell
sudo systemctl enable httpd.service
sudo systemctl enable mariadb.service
sudo systemctl enable memcached.service
```

Les deux services sont ensuite démarrés :

```shell
sudo systemctl start httpd.service
sudo systemctl start mariadb.service
sudo systemctl start memcached.service
```

De plus, le port par défaut 80 du protocole HTTP est autorisé à travers le pare-feu. Celui-ci doit être redémarré après l'ajustement :

```shell
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```

## Configuration

Les paquets installés pour le serveur web Apache, PHP et MariaDB sont déjà fournis avec des fichiers de configuration. Il est recommandé de stocker différents paramètres dans des fichiers séparés au lieu d'adapter les fichiers de configuration existants. Chaque fois que vous mettez à jour le paquet, les différents paramètres seront modifiés ou écrasés. Les paramètres de la configuration standard seront complétés ou écrasés par ceux définis par l'utilisateur.

### PHP

Tout d'abord, un nouveau fichier est créé et rempli avec les paramètres nécessaires :

```shell
sudo nano /etc/php.d/i-doit.ini
```

Ce fichier reçoit le contenu suivant :

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
mysqli.default_socket = /var/lib/mysql/mysql.sock
```

La valeur (en secondes) de `session.gc_maxlifetime` doit être supérieure ou égale à la `durée de session` dans les paramètres système de i-doit.

Le paramètre `date.timezone` doit être ajusté au fuseau horaire local (voir [liste des fuseaux horaires supportés](http://php.net/manual/en/timezones.php)).

Ensuite, le serveur web Apache est redémarré :

```shell
sudo systemctl restart httpd.service
```

### Serveur web Apache

Le vhost par défaut est conservé et ajouté. Un nouveau fichier est créé et édité :

```shell
sudo nano /etc/httpd/conf.d/i-doit.conf
```

Dans ce fichier, le supplémentaire est stocké :

```shell
DirectoryIndex index.php
DocumentRoot /var/www/html/
<Directory /var/www/html/>
    AllowOverride All
</Directory>
```

i-doit fournit différents paramètres Apache dans des fichiers nommés **.htaccess**. Pour que ces paramètres soient pris en compte, le paramètre **AllowOverride All est requis**.

La prochaine étape consiste à redémarrer le serveur web Apache :

```shell
sudo systemctl restart httpd.service
```

Pour qu'Apache ait des autorisations de lecture et d'écriture dans le répertoire d'installation future de i-doit, cela doit être autorisé par **SELinux** :

```shell
sudo chown apache:apache -R /var/www/html
sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
```

### MariaDB

Pour que MariaDB fonctionne bien et fonctionne en toute sécurité, quelques étapes doivent être effectuées méticuleusement. Cela commence par une installation sécurisée. Les recommandations doivent être suivies. Le mot de passe sécurisé doit être attribué à l'utilisateur **root** :

```shell
mysql_secure_installation
```

Pour permettre à i-doit d'utiliser l'utilisateur **root** lors de la configuration, appelez l'interpréteur de commandes de MariaDB :

```shell
sudo mysql -uroot
```

Les instructions SQL suivantes sont maintenant exécutées dans l'interpréteur de commandes de MariaDB

```shell
ALTER USER root@localhost IDENTIFIED VIA mysql_native_password;
FLUSH PRIVILEGES;
EXIT;
```

MariaDB est ensuite arrêté. Il est important de déplacer les fichiers inutiles (sinon vous risquez une perte de performance significative) :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mariadb.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

Un nouveau fichier est créé pour les différents paramètres de configuration :

```shell
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```

Ce fichier contient les nouveaux paramètres de configuration. Pour des performances optimales, ces paramètres doivent être adaptés au matériel (virtuel) :

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

Enfin, MariaDB est démarré :

```shell
sudo systemctl start mariadb.service
```

## Étape suivante

Le système d'exploitation est maintenant prêt pour l'installation de i-doit :

[Aller à la configuration ...](../../manual-installation/setup.md)

Please provide the Markdown content you would like me to translate into French.
