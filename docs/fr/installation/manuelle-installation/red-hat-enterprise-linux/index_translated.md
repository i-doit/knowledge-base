<!-- TRANSLATED by md-translate -->
# Red Hat Enterprise Linux (RHEL)

# Red Hat Enterprise Linux (RHEL)

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

Nous expliquons en quelques étapes dans cet article quels paquets doivent être installés et configurés.

## Systemvoraussetzungen

## Configuration requise

Es gelten die allgemeinen [Systemvoraussetzungen](../../systemvoraussetzungen.md).

Les [conditions système requises] générales s'appliquent(../../conditions système.md).

Dieser Artikel bezieht sich auf **[RHEL](https://www.redhat.com/en) in Version 7.x**. Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

Cet article se réfère à **[RHEL](https://www.redhat.com/en) en version 7.x**. Pour déterminer quelle version est utilisée, cette commande peut être exécutée sur la console :

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

Es gibt weitere Betriebssysteme, die arg verwandt sind mit RHEL, beispielsweise der offene Nachbau **CentOS** und das von Red Hat betreute **Fedora**. Es wird allerdings nur RHEL offiziell unterstützt.

Il existe d'autres systèmes d'exploitation très proches de RHEL, par exemple la réplique ouverte **CentOS** et **Fedora**, géré par Red Hat. Toutefois, seul RHEL est officiellement pris en charge.

## Installation der Pakete

## Installation des paquets

Auf einem aktuell gehaltenen System werden

Sur un système maintenu à jour, les

* der **Apache** Webserver 2.4,
* die Script-Sprache **PHP** 7.4,
* das Datenbankmanagementsystem **MariaDB** 10.5 und
* der Caching-Server **memcached**

* le serveur web **Apache** 2.4,
* le langage de script **PHP** 7.4,
* le système de gestion de base de données **MariaDB** 10.5 et
* le serveur de mise en cache **memcached**

installiert. Allerdings verfügt RHEL in der derzeit aktuellen Version 7.x nur über veraltete Pakete, die den [Systemvoraussetzungen](../../systemvoraussetzungen.md) nicht entsprechen. Es ist daher nötig, über weitere Repositories aktuelle Pakete zu installieren. **Vorsicht:** Dritt-Repositories können die Stabilität des Betriebssystems gefährden.

sont installés. Cependant, RHEL dans sa version 7.x, actuellement en cours, ne dispose que de paquets obsolètes qui ne correspondent pas à la [configuration requise](../../systemvoraussetzung.md). Il est donc nécessaire d'installer des paquets à jour via d'autres dépôts. **Attention:** Les dépôts tiers peuvent compromettre la stabilité du système d'exploitation.

Doch zunächst werden erste Pakete aus den Standard-Repositories installiert:

Mais tout d'abord, les premiers paquets sont installés à partir des référentiels standard :

```shell
sudo yum update
    sudo yum install httpd memcached unzip wget zip
```

Für PHP ist das Repository von [Webtatic](https://webtatic.com/) empfehlenswert, weil es in der Community sehr beliebt ist und aktuell gepflegt wird. Wer die Gewährleistung von Red Hat nicht gefährden möchte, kann alternativ auf EPEL (Extra Packages for Enterprise Linux) zurückgreifen, wie [in der KB von Red Hat angemerkt](https://access.redhat.com/solutions/92263). Wir zeigen hier den weg über das [REMI Repository](https://rpms.remirepo.net/) und installieren PHP 7.4:

Pour PHP, le référentiel de [Webtatic](https://webtatic.com/) est recommandé, car il est très populaire dans la communauté et est maintenu à jour. Ceux qui ne souhaitent pas mettre en péril la garantie de Red Hat peuvent également recourir à EPEL (Extra Packages for Enterprise Linux), comme [indiqué dans la KB de Red Hat](https://access.redhat.com/solutions/92263). Nous montrons ici la voie à suivre via le [REMI Repository](https://rpms.remirepo.net/) et installons PHP 7.4 :

```shell
sudo rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
    sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
    sudo rpm --import https://rpms.remirepo.net/RPM-GPG-KEY-remi
    sudo rpm -Uvh https://rpms.remirepo.net/enterprise/remi-release-7.rpm
```

Die Installation der PHP-Pakete erfolgt danach:

L'installation des paquets PHP se fait ensuite :

```shell
sudo yum  --enablerepo remi-php74 install \
    php-bcmath php-cli php-common php-fpm php-gd php-ldap \
    php-mbstring php-mysqlnd php-opcache php-pdo \
    php-pecl-memcached php-pgsql php-soap php-xml php-zip
```

Weiterhin bietet RHEL nur veraltete Distributionspakete für MariaDB. Wir greifen daher auf das offizielle Dritt-Repository von MariaDB zurück:

De plus, RHEL ne propose que des paquets de distribution obsolètes pour MariaDB. Nous avons donc recours au dépôt tiers officiel de MariaDB :

```shell
sudo nano /etc/yum.repos.d/MariaDB.repo
```

Die Datei erhält folgenden Inhalt:

Le fichier reçoit le contenu suivant :

```shell
# MariaDB 10.5 RedHat repository list
    # [http://downloads.mariadb.org/mariadb/repositories/](http://downloads.mariadb.org/mariadb/repositories/)
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.5/rhel7-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1
```

Danach werden die Pakete installiert:

Ensuite, les paquets sont installés :

```shell
sudo rpm --import https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    sudo yum install MariaDB-server MariaDB-client
```

Damit der Apache Webserver und MariaDB beim Booten gestartet werden, sind diese Befehle erforderlich:

Pour que le serveur web Apache et MariaDB soient lancés au démarrage, ces commandes sont nécessaires :

```shell
sudo systemctl enable httpd.service
    sudo systemctl enable mariadb.service
    sudo systemctl enable memcached.service
```

Anschließend erfolgt der Start beider Dienste:

Les deux services sont ensuite lancés :

```shell
sudo systemctl start httpd.service
    sudo systemctl start mariadb.service
    sudo systemctl start memcached.service
```

Weiterhin wird der Standard-Port 80 von HTTP über die Firewall erlaubt. Diese muss nach der Anpassung neu gestartet werden:

De plus, le port standard 80 de HTTP est autorisé par le pare-feu. Celui-ci doit être redémarré après l'adaptation :

```shell
sudo firewall-cmd --permanent --add-service=http
    sudo systemctl restart firewalld.service
```

## Konfiguration

## Configuration

Die installierten Pakete für Apache Webserver, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

Les paquets installés pour le serveur web Apache, PHP et MariaDB apportent déjà des fichiers de configuration. Il est recommandé de sauvegarder les paramètres différents dans des fichiers séparés plutôt que d'adapter les fichiers de configuration existants. A chaque mise à jour du paquet, les paramètres divergents seraient critiqués ou écrasés. Les paramètres de la configuration standard sont complétés ou remplacés par les paramètres définis par l'utilisateur.

### PHP

### PHP

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

Un nouveau fichier est d'abord créé et rempli avec les paramètres nécessaires :

```shell
sudo nano /etc/php.d/i-doit.ini
```

Diese Datei erhält folgenden Inhalt:

Ce fichier aura le contenu suivant :

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
    mysqli.default_socket = /var/lib/mysql/mysql.sock
```

Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer gleich dem **Session Timeout** in den [Systemeinstellungen](../systemeinstellungen.md) von i-doit sein.

La valeur (en secondes) de **session.gc_maxlifetime** doit être supérieure ou égale au **Session Timeout** dans les [Paramètres système](../systemeinstellungen.md) d'i-doit.

Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

Le paramètre **date.timezone** doit être adapté au fuseau horaire local (voir [Liste des fuseaux horaires supportés](http://php.net/manual/de/timezones.php)).

Anschließend wird der Apache Webserver neu gestartet:

Le serveur web Apache est ensuite redémarré :

```shell
sudo systemctl restart httpd.service
```

### Apache Webserver

### Serveur web Apache

Der Default-VHost wird beibehalten und ergänzt. Dazu wird eine neue Datei erstellt und bearbeitet:

Le Vhost par défaut est conservé et complété. Pour cela, un nouveau fichier est créé et édité :

```shell
sudo nano /etc/httpd/conf.d/i-doit.conf
```

In dieser Datei wird die ergänzende gespeichert:

C'est dans ce fichier que le complémentaire est enregistré :

```shell
DirectoryIndex index.php
    DocumentRoot /var/www/html/
    <Directory /var/www/html/>
        AllowOverride All
    </Directory>
```

i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Damit diese Einstellungen berücksichtigt werden, ist die Einstellung **AllowOverride All** nötig.

i-doit fournit des paramètres Apache différents dans des fichiers nommés **.htaccess**. Pour que ces réglages soient pris en compte, le paramètre **AllowOverride All** est nécessaire.

Im nächsten Schritt wird der Apache Webserver neu gestartet:

L'étape suivante consiste à redémarrer le serveur web Apache :

```shell
sudo systemctl restart httpd.service
```

Damit Apache Lese- und Schreibrechte im künftigen Installationsverzeichnis von i-doit hat, muss dies von **SELinux** erlaubt werden:

Pour qu'Apache ait des droits de lecture et d'écriture dans le futur répertoire d'installation d'i-doit, cela doit être autorisé par **SELinux** :

```shell
sudo chown apache:apache -R /var/www/html
    sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
    sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
```

### MariaDB

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. Den Empfehlungen sollte gefolgt werden. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

Pour que MariaDB offre de bonnes performances et puisse être exploité en toute sécurité, quelques étapes sont nécessaires et doivent être suivies scrupuleusement. Cela commence par une installation sûre. Il convient de suivre les recommandations. L'utilisateur **root** doit recevoir un mot de passe sûr :

```shell
mysql_secure_installation
```

Damit i-doit beim Setup den Benutzer **root** verwenden darf, ruft man die Shell von MariaDB auf:

Pour que i-doit puisse utiliser l'utilisateur **root** lors du setup, il faut appeler le shell de MariaDB :

```shell
sudo mysql -uroot
```

In der Shell von MariaDB werden nun folgende SQL-Statements ausgeführt:

Les instructions SQL suivantes sont maintenant exécutées dans le shell de MariaDB :

```sql
ALTER USER root@localhost IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
    FLUSH PRIVILEGES;
    EXIT;
```

Anschließend wird MariaDB gestoppt. Wichtig ist hierbei das Verschieben von nicht benötigten Dateien (andernfalls droht ein signifikanter Performance-Verlust):

MariaDB est ensuite arrêté. Il est important de déplacer les fichiers inutiles (sinon, les performances risquent d'être considérablement réduites) :

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
    sudo systemctl stop mariadb.service
    sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:

Un nouveau fichier est créé pour les paramètres de configuration différents :

```shell
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```

Diese Datei enthält die neuen Konfigurationseinstellungen. Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden:

Ce fichier contient les nouveaux paramètres de configuration. Pour une performance optimale, ces paramètres doivent être adaptés au matériel (virtuel) :

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

```shell
sudo systemctl start mariadb.service
```

## Nächster Schritt

## Prochaine étape

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

Le système d'exploitation est maintenant prêt pour l'installation d'i-doit :

[Weiter zu _Setup_ …](../setup.md)

[Continuer vers _Setup_ ...](../setup.md)