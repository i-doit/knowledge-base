---
title: "i-doit via XAMPP"
description: "Wie i-doit unter dem Betriebssystem Windows installiert wird, beschreiben wir in diesem Artikel."
icon:
status:
lang: de
---
# i-doit via XAMPP

Wie i-doit unter dem Betriebssystem Windows mit XAMPP installiert wird, beschreiben wir in diesem Artikel.

!!! info "Dieser Artikel wurde zuletzt für i-doit Version **39.1** geprüft"

!!! note "Getestet am 22.10.2026 mit Windows Server 2022, XAMPP 8.2.12 (Apache 2.4.58), PHP 8.2.35 (Thread Safe) und MariaDB 10.11.19"

!!! warning "XAMPP wird nur noch für Apache und PHP verwendet"
    Das neueste XAMPP-Paket für Windows ist `xampp-windows-x64-8.2.12-0-VS16` vom November 2023. Es enthält PHP 8.2.12 und MariaDB 10.4.32. i-doit setzt seit Version 30 mindestens **MariaDB 10.6** voraus, und PHP 8.2.12 hat bekannte Sicherheitslücken. Deshalb installieren wir aus XAMPP nur **Apache** und **PHP**, bringen PHP auf den aktuellen Stand und installieren MariaDB separat.<br>
    PHP 8.2 gilt für i-doit als veraltet, PHP 8.4 wird empfohlen. Ein XAMPP-Paket mit PHP 8.4 gibt es nicht. Beachte die [Systemvoraussetzungen](../../systemvoraussetzungen.md).

!!! attention "Firewall"
    Für unsere Installation deaktivieren wir die Windows Firewall, damit RDP und die Verbindung zum Webserver funktionieren. Natürlich sollten die Anwendungen und Ports in der Firewall gezielt konfiguriert werden, jedoch möchten wir dies nicht in dieser Anleitung in den Vordergrund stellen.

Alle Befehle in dieser Anleitung werden in einer **PowerShell als Administrator** ausgeführt.

## Schritt 1: XAMPP installieren

Lade das Installationspaket `xampp-windows-x64-8.2.12-0-VS16-installer.exe` unter [https://www.apachefriends.org/de/index.html](https://www.apachefriends.org/de/index.html) herunter und starte es.
Eine Warnung zur Benutzerkontensteuerung (UAC) bestätigst du mit **OK**.

Wähle bei den Komponenten nur **Apache** und **PHP** aus. Entferne die Haken bei allen anderen Komponenten, insbesondere bei **MySQL** und **phpMyAdmin**.

[![Komponenten](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-komponenten.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-komponenten.png)

Als Ordner wird der Standard belassen → **C:\xampp**. Installiere XAMPP nicht unter `C:\Program Files`, weil dort die Schreibrechte fehlen.

[![Installationspfad](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)

Die Sprache belassen wir bei **Englisch**.

[![Installationssprache](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)

Mit **Next >** startet die Installation. Auf der letzten Seite kann der Haken für das Control Panel entfernt werden, weil wir Apache als Windows-Dienst betreiben. Mit **Finish** ist die Installation abgeschlossen.

## Schritt 2: PHP aktualisieren

XAMPP liefert PHP 8.2.12 aus. Tausche PHP direkt nach der Installation gegen die aktuelle Version 8.2.x (**Thread Safe**) aus, wie im Abschnitt **XAMPP** der Anleitung [PHP-Sicherheitsupdate unter Windows](../../../wartung-und-betrieb/php-sicherheitsupdate-windows.md) beschrieben. Da Apache noch nicht läuft, muss vorher nichts gestoppt werden.

Prüfe danach die Version:

```powershell
C:\xampp\php\php.exe -v
```

## Schritt 3: PHP und Apache konfigurieren

### PHP

Öffne die Datei `C:\xampp\php\php.ini` in einem Editor.

Aktiviere unter **Dynamic Extensions** die folgenden Erweiterungen, indem du das Semikolon am Zeilenanfang entfernst:

```ini
extension=gd
extension=intl
extension=ldap
extension=soap
extension=sockets
extension=zip
```

Die Zeile `;extension=openssl` bleibt auskommentiert. XAMPP lädt OpenSSL bereits am Ende der Datei über `extension=php_openssl.dll`.

Füge anschließend am Ende der Datei die folgenden Einstellungen ein und speichere:

```ini
allow_url_fopen = On
file_uploads = On
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
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

`date.timezone` muss zur Zeitzone von Windows passen. Sonst meldet i-doit in der Systemübersicht unter **System Config Check** eine Zeitdifferenz zwischen PHP und MariaDB.

Die Datei `libsasl.dll` für LDAP muss nicht kopiert werden. XAMPP bringt sie in `C:\xampp\apache\bin` bereits mit.

### Apache

Damit Apache die PHP-Erweiterung `curl` laden kann, braucht er einige Bibliotheken aus dem PHP-Ordner. Öffne die Datei `C:\xampp\apache\conf\extra\httpd-xampp.conf` und ergänze direkt unter der Zeile `LoadFile "C:/xampp/php/libsqlite3.dll"` diese vier Zeilen:

```apache
LoadFile "C:/xampp/php/brotlicommon.dll"
LoadFile "C:/xampp/php/brotlidec.dll"
LoadFile "C:/xampp/php/libssh2.dll"
LoadFile "C:/xampp/php/nghttp2.dll"
```

Ohne diese Zeilen steht im Apache-Log `logs\error.log` die Meldung `Unable to load dynamic library 'curl'`, und i-doit kann keine Verbindungen über HTTPS aufbauen, zum Beispiel für die Update-Prüfung.

Richte Apache als Windows-Dienst ein und starte ihn:

```powershell
C:\xampp\apache\bin\httpd.exe -k install
Start-Service Apache2.4
```

Der Dienst `Apache2.4` startet danach automatisch mit Windows. Ggf. erscheint eine Abfrage der Windows Firewall.

## Schritt 4: MariaDB installieren

Lade MariaDB **10.11** als MSI-Paket für Windows (`mariadb-10.11.x-winx64.msi`) unter [https://mariadb.org/download/](https://mariadb.org/download/) herunter und installiere es. Vergib im Assistenten ein Passwort für den Benutzer `root` und lass MariaDB als Dienst mit dem Namen **MariaDB** auf Port **3306** installieren.

Alternativ lässt sich das Paket ohne Assistent installieren. Ersetze `<Passwort>` durch ein eigenes Passwort und den Dateinamen durch die heruntergeladene Version:

```powershell
msiexec /i mariadb-10.11.19-winx64.msi /qn SERVICENAME=MariaDB PASSWORD=<Passwort> PORT=3306
```

Öffne danach die Datei `C:\Program Files\MariaDB 10.11\data\my.ini`. Im Abschnitt `[mysqld]` stehen bereits `datadir`, `port` und `innodb_buffer_pool_size`. Den Wert für `innodb_buffer_pool_size` setzt das Setup passend zum Arbeitsspeicher; er bleibt erhalten. Füge darunter, noch vor dem Abschnitt `[client]`, die folgenden Einstellungen ein und speichere:

```ini
innodb_log_file_size = 512M
innodb_sort_buffer_size = 64M
sort_buffer_size = 262144
join_buffer_size = 262144
max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M
tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
innodb_stats_on_metadata = 0
table_open_cache_instances = 8
sql-mode = ""
```

Starte MariaDB neu:

```powershell
Restart-Service MariaDB
```

## Schritt 5: i-doit herunterladen und entpacken

Lade i-doit in der aktuellsten Version aus dem [Kundenportal](../../../administration/kundenportal.md) herunter.
Entpacke die `idoit-xx.zip` in den neuen Ordner `C:\xampp\htdocs\idoit`. Im Ordner liegen danach direkt die Unterordner `admin`, `src`, `setup` usw.

## Schritt 6: Überprüfen der Installation

Rufe im Browser `http://<i-doit-host>/idoit/` auf. Es erscheint die Installationsseite von i-doit mit der Prüfung der Systemvoraussetzungen.
Gib bei der Einrichtung als Datenbank-Server `127.0.0.1` mit Port `3306` und den MariaDB-Benutzer `root` mit dem Passwort aus Schritt 4 an.

## Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu **Setup**](../../manuelle-installation/setup.md)

Für spätere PHP-Updates gilt die Anleitung [PHP-Sicherheitsupdate unter Windows](../../../wartung-und-betrieb/php-sicherheitsupdate-windows.md). Die Zeilen in der `httpd-xampp.conf` aus Schritt 3 bleiben dabei gültig, weil die Bibliotheken mit dem PHP-Ordner ausgetauscht werden.
