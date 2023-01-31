# Debian GNU/Linux

!!! success "Empfehlung"

    Wir [empfehlen](../systemvoraussetzungen.md) den Einsatz von Debian GNU/Linux in Version 11 "bullseye" als Betriebssystem, unter dem i-doit betrieben werden sollte.

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

Systemvoraussetzungen  
------------------------

Es gelten die allgemeinen [Systemvoraussetzungen](../systemvoraussetzungen.md).  

Dieser Artikel bezieht sich auf [**Debian GNU/Linux 11 "bullseye"**](https://debian.org/). Abweichende Installationsanweisungen für Version 8 "jessie" befinden sich unterhalb dieses Artikels. Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

    cat /etc/debian_version

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:  

    uname -m

**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

Installation der Pakete
-----------------------

Die Standard-Repositories von Debian GNU/Linux bringen bereits alle nötigen Pakete mit, um

*   den **Apache** Webserver 2.4,
*   die Script-Sprache **PHP** 7.4,
*   das Datenbankmanagementsystem **MariaDB** 10.5 und
*   den Caching-Server **memcached**

zu installieren:

    sudo apt update
    sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils

Konfiguration
-------------

Die installierten Pakete für Apache Webserver, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

### PHP

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

    sudo nano /etc/php/7.4/mods-available/i-doit.ini

Diese Datei erhält folgenden Inhalt:

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

Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer gleich dem **Session Timeout** in den [Systemeinstellungen](systemeinstellungen.md) von i-doit sein.

Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

Anschließend werden die benötigten PHP-Module aktiviert und der Apache Webserver neu gestartet:

    sudo phpenmod i-doit
    sudo phpenmod memcached
    sudo systemctl restart apache2.service

### Apache Webserver

Der Default-VHost wird deaktiviert und ein neuer angelegt:

    sudo a2dissite 000-default
    sudo nano /etc/apache2/sites-available/i-doit.conf

In dieser Datei wird die neue VHost-Konfiguration gespeichert:

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

i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Damit diese Einstellungen berücksichtigt werden, ist die Einstellung **AllowOverride All** nötig.

Im nächsten Schritt werden der neue VHost und das nötige Apache-Modul **rewrite** aktiviert sowie der Apache Webserver neu gestartet:

    sudo a2ensite i-doit
    sudo a2enmod rewrite
    sudo systemctl restart apache2.service

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. Den Empfehlungen sollte gefolgt werden. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

    sudo mysql_secure_installation

Damit i-doit beim Setup den Benutzer **root** verwenden darf, ruft man die Shell von MariaDB auf:

    sudo mysql -uroot

!!! attention "Passwort für den MariaDB root-benutzer"

    Sollte der MariaDB root-Benutzer noch kein Passwort besitzen, wird der Datenbankzugriff nach der Ausführung des ALTER USER Statements nicht mehr funktionieren. Daher sollte dem MariaDB root-Benutzer zuvor ein Passwort vergeben werden:

        SET PASSWORD for 'root'@'localhost' = PASSWORD ('passwort)';

In der Shell von MariaDB werden nun folgende SQL-Statements ausgeführt (Das 'passwort' muss durch das aktuelle Passwort des Benutzers 'root' ersetzt werden) :

    ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
    FLUSH PRIVILEGES;
    EXIT;

Nutzung von MariaDB 10.3 und abwärts

Bis MariaDB Version 10.3 wird das UPDATE-Statement in der user-Tabelle unterstützt.

    UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
  
Anschließend wird MariaDB gestoppt. Wichtig ist hierbei das Verschieben von nicht benötigten Dateien (andernfalls droht ein signifikanter Performance-Verlust):

    mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
    sudo systemctl stop mysql.service
    sudo mv /var/lib/mysql/ib_logfile[01] /tmp

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:

    sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf

Diese Datei enthält die neuen Konfigurationseinstellungen. Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden:

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

Abschließend wird MariaDB gestartet:

    sudo systemctl start mysql.service

Nächster Schritt
----------------

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu *Setup*](setup.md)

!!! info "Debian GNU/Linux 8 "jessie""

    Wer Version 8 "jessie" einsetzt, muss   einige Punkte beachten. Dies betrifft vor allem abweichende Paket-Namen und Dateipfade.

    #### Installation der Pakete    

        sudo apt update 
        sudo apt install apache2 libapache  2-mod-php5 php5 php5-cli php5-common php5-curl php5-gd php5-json php5-ldap php5-mbstring php5-mcrypt php5-mysqlnd php5-pgsql mariadb-server mariadb-client php5-memcache memcached unzip

    #### PHP    

        sudo nano /etc/php5/mods-available  /i-doit.ini

    # Einstellungen einfügen    

        sudo php5enmod i-doit   
        sudo php5enmod memcache 
        sudo systemctl restart apache2.ser  vice

    #### Apache Webserver   

        sudo a2dissite 000-default  
        sudo nano /etc/apache2/sites-avail  able/i-doit.conf

    # Einstellungen einfügen    

        sudo a2ensite i-doit    
        sudo a2enmod rewrite    
        sudo systemctl restart apache2.ser  vice

    #### MariaDB    

        mysql -uroot -p -e"SET GLOBAL inno  db_fast_shutdown = 0"
        sudo systemctl stop mysql.service   
        sudo mv /var/lib/mysql/ib_logfile[  01] /tmp
        sudo nano /etc/mysql/conf.d/i-doit  .cnf

    # Einstellungen einfügen    

        sudo systemctl start mysql.service  