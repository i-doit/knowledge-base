# i-doit via XAMPP

!!! note ""
    This article has been verified for i-doit version **31**

!!! attention "Firewall"

    We disable the Windows firewall for our installation so that RDP and web server connection work. Applications and ports need to be precisely configured in the firewall, however, we do not want to focus on that in this article.

## Étape 1 : Installation de XAMPP

First, download the XAMPP package from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html). Here, we are using the installer (xampp-win32-XXX-installer.exe). Other packages are also good. The compressed package (.zip), for example, can simply be extracted to C:\\. It is important to note that the installation path for XAMPP should be "C:\\xampp" as "C:\\Program Files (x86)" does not have sufficient permission rights, which will likely result in a faulty installation. Bitnami is not necessary and can be unchecked during the installation process.

Here, the [System Requirements](../../system-requirements.md) of the respective i-doit version must be considered. Therefore, in this example, the installation package → `xampp-windows-x64-7.4.20-0-VC15-installer.exe`

At least the **Apache**, **MySQL**, and **PHP** components must be installed.

[![Select components](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/1-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/1-mws.png)

The default folder is left as is → **C:\xampp**

[![Select installation folder](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/2-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/2-mws.png)

Then, we select the language, I leave it in **English**.

[![Select language](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/3-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/3-mws.png)

Les prochains boutons **Suivant** devraient être explicites.

[![Terminer](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/4-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/4-mws.png)

Maintenant, l'installation est terminée et nous démarrons le panneau de contrôle de XAMPP en cliquant sur Terminer.

[![Panneau de contrôle](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/5-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/5-mws.png)

## Étape 2 : Configuration de XAMPP

### PHP

Maintenant nous configurons PHP. Pour cela, nous cliquons sur le bouton Config → PHP (php.ini) pour ouvrir le php.ini.

[![Configurer php](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/6-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/6-mws.png)

Normalement, le fichier devrait s'ouvrir automatiquement avec l'éditeur. Nous ajoutons les paramètres suivants à la fin du fichier et sauvegardons :

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
```

_De plus, pour l'extension LDAP, il peut être nécessaire de copier le fichier libsasl.dll de `C:\\xampp\\php\\` vers `C:\\xampp\\apache\\bin`._
_Aussi, sous Extensions Dynamiques, le `;extension=ldap` doit être libéré du point-virgule initial._

## Serveur Web Apache

Des paramètres séparés pour le serveur web Apache ne sont pas nécessaires ici.

### MySQL/MariaDB

Maintenant nous configurons MySQL/MariaDB. Pour cela, nous cliquons sur le bouton Config → my.ini.

[![Configurer MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/7-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/7-mws.png)

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

## Étape 3 : Démarrer Apache et MySQL 

Nous cliquons sur le [![Démarrer](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/8-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/8-mws.png) bouton pour Apache et MySQL. Si nécessaire, une fenêtre contextuelle de pare-feu apparaîtra.
Maintenant, les deux modules devraient être mis en surbrillance en vert.


[![Modules démarrés](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/9-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/9-mws.png)

### Mot de passe pour le root MySQL 

Maintenant, nous devons définir un mot de passe pour l'utilisateur root MySQL.
Pour cela, nous cliquons sur le bouton [![shell](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/10-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/10-mws.png).

[![Shell et panneau de contrôle](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/11-mws.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/xampp/11-mws.png)

Tout d'abord, nous nous connectons :

```shell
mysql -u root
```

Maintenant, nous changeons le mot de passe, '_thisistotallysecure!!11_' doit être remplacé par votre propre mot de passe :

```shell
ALTER USER 'root'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';
```

## Étape 4 : Télécharger et décompresser i-doit 

### Télécharger et décompresser i-doit 

Maintenant, nous téléchargeons i-doit dans la dernière version depuis le portail client.
Nous déballons le `idoit-xx.x.zip` sous `C:\\xampp\\htdocs` et renommons le dossier en idoit.

## Étape 5 : Vérifier l'installation 

Avec la configuration précédente, nous avons préparé le serveur web. Maintenant, lorsque nous appelons l'IP du système ou localhost dans un navigateur, nous devrions obtenir la page de bienvenue d'Apache affichée.
Sous **PHPInfo** dans le menu, vous pouvez vérifier si les valeurs définies dans php.ini ont été correctement prises en compte.

## Next Step 

Maintenant, le système d'exploitation est prêt et i-doit peut être installé.

Passez à [**Configuration** …](../setup.md)

### FAQ 

Avec XAMPP `xampp-windows-x64-8.0.23-0-VS16-installer`, une nouvelle version de l'extension PHP gd a été ajoutée.
Par conséquent, le `php.ini` ne doit pas être remplacé par celui de la version PHP 7.4.

Pour PHP 7.4, il était appelé `extension=gd2` et en PHP 8.0, il est appelé `extension=gd`.
