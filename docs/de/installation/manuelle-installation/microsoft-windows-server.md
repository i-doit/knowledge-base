# Microsoft Windows Server

Wie i-doit unter dem Betriebssystem Windows installiert wird, beschreiben wir in diesem Artikel.

!!! info "Dieser Artikel wurde zuletzt für i-doit Version **1.19** geprüft"

!!! attention "Firewall"

    Für unsere Installation deaktivieren wir die Windows Firewall, damit RDP und die Verbindung zum Webserver funktionieren. Natürlich sollten die Anwendungen und Ports in der Firewall gezielt konfiguriert werden, jedoch möchten wir dies nicht in dieser Anleitung in den Vordergrund stellen.

### Schritt 1: Die Installation

![type:video](../../assets/images/de/installation/windows/xampp-installation-unter-windows.mp4)

Zuerst wird das XAMPP-Paket unter [https://www.apachefriends.org/de/index.html](https://www.apachefriends.org/de/index.html) herunter.  
Andere Pakete funktionieren jedoch auch. Beispielweise kann das gepackte Packet (.zip) auch einfach unter C:\\ entpackt werden.  
Wichtig ist bei der Installation von XAMPP, dass der Installationspfad unbedingt "C:\\xampp" ist, weil auf das Verzeichnis "C:\\Program Files (x86)" nicht genug Rechte vorhanden sind und somit die Installation mit hoher Wahrscheinlichkeit nicht richtig funktionieren wird. 

Hierbei müssen die [Systemvoraussetzungen](../systemvoraussetzungen.md) der jeweiligen i-doit Version beachtet werden. Deshalb wird in diesem Beispiel das Installationspaket → xampp-windows-x64-8.0.23-0-VS16-installer.exe mit PHP 8 welches ab i-doit 1.19 unterstützt wird

Es müssen mindestens die Komponenten **Apache**, **MySQL** und **PHP** installiert werden.  
[![Installation](../../assets/images/de/installation/windows/schritt-1-installation.png)](../../assets/images/de/installation/windows/schritt-1-installation.png)

Als Ordner wird der Standard belassen → **`C:\xampp`**

[![Installationspfad](../../assets/images/de/installation/windows/schritt-1-installation-pfad.png)](../../assets/images/de/installation/windows/schritt-1-installation-pfad.png)

Dann wählen wir noch die Sprache aus, ich belasse diese bei **English**.

[![Installationssprache](../../assets/images/de/installation/windows/schritt-1-installation-sprache.png)](../../assets/images/de/installation/windows/schritt-1-installation-sprache.png)

Die nächsten **`Next >`** Buttons sollten selbsterklärend sein.

[![Installations abschließen](../../assets/images/de/installation/windows/schritt-1-installation-fertig.png)](../../assets/images/de/installation/windows/schritt-1-installation-fertig.png)

Somit wäre die Installations nun abgeschlossen und wir lassen mit Klick auf `Finish` das Control Panel von XAMPP starten.

[![Installation-control-panel](../../assets/images/de/installation/windows/schritt-1-installation-control-panel.png)](../../assets/images/de/installation/windows/schritt-1-installation-control-panel.png)

### Schritt 2: Die Konfiguration der Umgebung

#### PHP

Nun Konfigurieren wir PHP. Dazu Klicken wir auf den Button Config → PHP (php.ini) um die php.ini zu öffnen.

[![Konfiguration-PHP](../../assets/images/de/installation/windows/schritt-2-php.png)](../../assets/images/de/installation/windows/schritt-2-php.png)

Im Normalfall sollte die Datei automatisch mit dem Editor geöffnet werden. Wir fügen am Ende der Datei die folgenden Einstellungen ein und speichern:

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

_Zusätzlich kann es für die LDAP Extension notwendig sein, die Datei **`libsasl.dll`**von **`C:\xampp\php\`** nach `**C:**``**\xampp\apache\bin**` zu kopieren.  
Außerdem muss in der php.ini unter Dynamic Extensions die `;extension=ldap` und `;extension=gd` vom anführenden Semikolon befreit werden._

#### Apache Webserver

Gesonderte Einstellungen für den Apache Webserver sind hier nicht notwendig.  

#### MySQL/MariaDB

Nun Konfigurieren wir MySQL/MariaDB. Dazu Klicken wir auf den Button Config → my.ini.

[![Konfiguration-MySQL](../../assets/images/de/installation/windows/schritt-2-mysql.png)](../../assets/images/de/installation/windows/schritt-2-mysql.png)

Im Normalfall sollte auch diese Datei automatisch mit dem Editor geöffnet werden. Wir fügen auch hier am Ende der Datei die folgenden Einstellungen ein und speichern:

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

### Schritt 3: Starten von Apache und MySQL


Wir klicken bei Apache und MySQL auf den![start-button](../../assets/images/de/installation/windows/start.png) Start button. Ggf. wird nun ein Firewall popup erscheinen.  
Nun sollten beiden Module Grün hinterlegt sein.

[![Service-start](../../assets/images/de/installation/windows/schritt-3-start.png)](../../assets/images/de/installation/windows/schritt-3-start.png)

#### Passwort für den MySQL root

Nun sollten wir für den MySQL root Benutzer ein Passwort setzen.  
Dazu klicken wir auf den ![shell-button](../../assets/images/de/installation/windows/shell.png) Shell button.

[![shell-control-panel](../../assets/images/de/installation/windows/schritt-3-passwort-root.png)](../../assets/images/de/installation/windows/schritt-3-passwort-root.png)

Zuerst loggen wir uns ein:

    mysql -u root

Nun ändern wir das Passwort, '_thisistotallysecure!!11_' sollte durch ein eigenes Passwort ersetzt werden:

    ALTER USER 'root'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';

### Schritt 4: i-doit herunterladen und entpacken

#### i-doit Herunterladen und Entpacken
<!---Todo: Fixme--->
Nun laden wir uns i-doit in der aktuellsten Version aus dem [Kundenportal](/display/de/Kundenportal) herunter.  
Die idoit-1.xx.x.zip entpacken wir unter C:\\xampp\\htdocs und benennen den idoit-1.xx.x Ordner in idoit um.

  

### Schritt 5: Überprüfen der Installation

Mit der vorherigen Konfiguration haben wir den Webserver vorbereitet. Nun sollten wir, wenn wir in einem Browser die IP des Systems oder localhost aufrufen, die Willkommensseite des Apaches angezeigt bekommen.  
Unter `PHPInfo` im Menü kann man nachprüfen, ob die in der `php.ini` eingestellten Werte richtig übernommen wurden.

  

### Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu *Setup*](../manuelle-installation/setup.md)

### FAQ

Mit XAMPP "xampp-windows-x64-8.0.23-0-VS16-installer" wurde eine neue Version der PHP extension gd hinzugefügt.  
Daher sollte die php.ini nicht durch die der PHP7.4 Version ersetzt werden.

Für PHP 7.4 hieß diese noch `extension=gd2` und in PHP8.0 heißt Sie `extension=gd`.