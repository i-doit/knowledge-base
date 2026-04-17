---
title: i-doit unter IIS auf Windows Server
description: i-doit manuell unter Internet Information Services (IIS) auf Windows Server 2022 installieren
icon: material/microsoft-windows
status:
lang: de
---

!!! note "Getestet mit i-doit **38**, **Windows Server 2022**, **PHP 8.2**, **MariaDB 10.6**"

Diese Anleitung beschreibt die Installation von i-doit unter **Internet Information Services (IIS)** auf Windows Server 2022. Die Installation erfolgt vollautomatisch per PowerShell-Script.

## Voraussetzungen

- Windows Server 2022 (Standard oder Datacenter)
- Administrator-Zugang
- Internetverbindung (ca. 150 MB Download)
- Mindestens 4 GB RAM, 2 CPU-Kerne, 40 GB freier Speicherplatz

## Installationspaket herunterladen

Das Installationspaket enthält alle benötigten Scripts:

[:material-download: idoit-iis-installer.zip herunterladen](../../../assets/downloads/idoit-iis-installer.zip)

Das Paket entpacken, zum Beispiel nach `C:\install\`. Die Ordnerstruktur danach:
<!-- cSpell:disable -->
```
C:\install\
├── install.cmd      ← Startdatei (Doppelklick)
├── install.ps1      ← Haupt-Installationsscript
├── downloads\       ← Wird automatisch befüllt
└── logs\            ← Installationsprotokoll
```
<!-- cSpell:enable -->

## Installation starten

`install.cmd` per **Doppelklick** starten. Falls keine Administratorrechte vorhanden sind, erscheint automatisch ein UAC-Prompt zur Rechteerhöhung.

Das Script durchläuft 12 Schritte und gibt den Fortschritt in der Konsole aus:

<!-- cSpell:disable -->
```
>>> Step 1/12 -- Download prerequisites <<<
    [OK]   Visual C++ 2019 Redistributable downloaded (24.2 MB).
    [OK]   PHP 8.2.30 NTS x64 downloaded (30.4 MB).
    [OK]   IIS URL Rewrite Module downloaded (5.8 MB).
    [OK]   MariaDB 10.6.25 downloaded (72.2 MB).
    [OK]   i-doit (latest) downloaded (17 MB).

>>> Step 2/12 -- Enable IIS with CGI and management features <<<
>>> Step 3/12 -- Install Visual C++ 2019 Redistributable <<<
>>> Step 4/12 -- Install PHP 8.2.30 NTS <<<
>>> Step 5/12 -- Install IIS URL Rewrite Module <<<
>>> Step 6/12 -- Install MariaDB 10.6.25 <<<
>>> Step 7/12 -- Configure MariaDB <<<
>>> Step 8/12 -- Register PHP with IIS (FastCGI handler) <<<
>>> Step 9/12 -- Extract i-doit to C:\inetpub\wwwroot <<<
>>> Step 10/12 -- Create web.config (URL rewrite rules) <<<
>>> Step 11/12 -- Initialize i-doit database <<<
>>> Step 12/12 -- Restart IIS <<<
```
<!-- cSpell:enable -->

Die Installation dauert je nach Internetgeschwindigkeit **10 bis 20 Minuten**. Am Ende werden alle Zugangsdaten angezeigt.

## Was wird installiert

| Komponente                      | Version              | Speicherort                      |
| ------------------------------- | -------------------- | -------------------------------- |
| IIS                             | 10 (Windows-Feature) | Betriebssystem                   |
| Visual C++ 2019 Redistributable | aktuell              | System                           |
| PHP                             | 8.2 NTS              | `C:\PHP\`                        |
| MariaDB                         | 10.6                 | `C:\Program Files\MariaDB 10.6\` |
| i-doit                          | neueste Version      | `C:\inetpub\wwwroot\`            |

## Zugangsdaten nach der Installation

!!! success "Standardzugänge nach der Installation"
    | Zugang                       | Benutzer | Passwort                |
    | ---------------------------- | -------- | ----------------------- |
    | **i-doit**                   | `admin`  | `admin`                 |
    | **Admin Center** (`/admin/`) | `admin`  | `admin123`              |
    | **MariaDB root**             | `root`   | `idoit_secure_password` |
    | **MariaDB i-doit**           | `idoit`  | `idoit_secure_password` |

!!! warning "Passwörter ändern"
    Die Standardpasswörter sollten nach der Installation geändert werden. Für produktive Systeme die Parameter `$DbRootPassword`, `$DbIdoitPassword` und `$AdminCenterPassword` am Anfang von `install.ps1` anpassen und die Installation erneut durchführen.

## Erste Schritte nach der Installation

Nach Abschluss ist i-doit unter `http://<Server-IP>/` erreichbar.

**Empfohlene Reihenfolge:**

1. **Admin Center aufrufen** (`http://<Server-IP>/admin/`) und mit `admin` / `admin123` anmelden
2. **Lizenz einspielen** unter **Licenses** → Lizenzschlüssel eingeben und **Save & Check** klicken
3. **i-doit aufrufen** (`http://<Server-IP>/`) und mit `admin` / `admin` anmelden
4. Initiale Konfiguration vornehmen (Sprache, Zeitzone, erste Objekte)

## PHP-Konfiguration

Die PHP-Konfiguration liegt unter `C:\PHP\php.ini`. Folgende Einstellungen werden durch das Script gesetzt:
<!-- cSpell:disable -->
```ini
max_execution_time    = 300
max_input_vars        = 10000
memory_limit          = 256M
post_max_size         = 128M
upload_max_filesize   = 128M
allow_url_fopen       = On
short_open_tag        = On
date.timezone         = Europe/Berlin
session.gc_maxlifetime = 604800
curl.cainfo           = C:\PHP\cacert.pem
openssl.cafile        = C:\PHP\cacert.pem
```
<!-- cSpell:enable -->

!!! tip "Das `memory_limit` kann bei Bedarf auf `512M` erhöht werden, z.B. bei größeren Reports oder vielen Objekten."

Aktivierte PHP-Extensions: `curl`, `fileinfo`, `gd`, `ldap`, `mbstring`, `mysqli`, `openssl`, `pdo_mysql`, `soap`, `sockets`, `zip`, `intl`

## MariaDB-Konfiguration

Die MariaDB-Konfiguration liegt unter `C:\Program Files\MariaDB 10.6\data\my.ini`:
<!-- cSpell:disable -->
```ini
[mysqld]
port                           = 3306
skip-networking                = OFF
innodb_buffer_pool_size        = 1G
innodb_log_file_size           = 512M
max_allowed_packet             = 128M
max_connections                = 200
innodb_file_per_table          = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method            = O_DIRECT
innodb_stats_on_metadata       = 0
tmp_table_size                 = 32M
max_heap_table_size            = 32M
sql_mode                       =
```
<!-- cSpell:enable -->

!!! info "Der Query Cache wurde in MariaDB 10.6 entfernt. Die `query_cache_*`-Einstellungen aus älteren Anleitungen sind nicht mehr relevant."

## IIS-Konfiguration (web.config)

i-doit benötigt eine `web.config` in `C:\inetpub\wwwroot\` für URL-Umschreibung und Admin-Center-Routing:
<!-- cSpell:disable -->
```xml
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <defaultDocument enabled="false" />
        <rewrite>
            <rules>
                <rule name="idoit_root" stopProcessing="true">
                    <match url="^$" />
                    <action type="Rewrite" url="index.php" />
                </rule>
                <rule name="idoit_admin_slash" stopProcessing="true">
                    <match url="^admin$" />
                    <action type="Redirect" url="/admin/" redirectType="Permanent" />
                </rule>
                <rule name="idoit_admin" stopProcessing="true">
                    <match url="^admin(/.*)?$" />
                    <conditions logicalGrouping="MatchAll">
                        <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                    </conditions>
                    <action type="Rewrite" url="admin/index.php" />
                </rule>
                <rule name="idoit" stopProcessing="true">
                    <match url=".*" />
                    <conditions logicalGrouping="MatchAll">
                        <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                        <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
                    </conditions>
                    <action type="Rewrite" url="index.php" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>
```
<!-- cSpell:enable -->

!!! warning "Das Admin Center muss immer mit abschliessendem Slash aufgerufen werden: `http://<Server-IP>/admin/`. Ohne Slash werden CSS-Dateien nicht korrekt geladen."

## Dienste verwalten

Nach der Installation laufen zwei Windows-Dienste:

| Dienst          | Verwaltung                               |
| --------------- | ---------------------------------------- |
| **W3SVC** (IIS) | `iisreset` oder Dienste-Manager          |
| **MariaDB**     | `net start MariaDB` / `net stop MariaDB` |

IIS neu starten:
<!-- cSpell:disable -->
```batch
iisreset /noforce
```
<!-- cSpell:enable -->

## Fehlerbehebung

### Installationslog prüfen

Bei Fehlern liegt ein detailliertes Log unter `C:\install\logs\install_<Datum>.log`.

### Bekannte Probleme

**cURL SSL-Fehler beim Lizenz-Check**

```
cURL error 60: SSL certificate problem: unable to get local issuer certificate
```

PHP auf Windows kennt den Windows-Zertifikatsspeicher nicht. Das Script installiert automatisch die Mozilla CA-Bundle-Datei (`cacert.pem`) und trägt sie in `php.ini` ein. Falls der Fehler trotzdem auftritt, manuell prüfen:
<!-- cSpell:disable -->
```batch
type C:\PHP\php.ini | findstr cainfo
```
<!-- cSpell:enable -->
Es muss `curl.cainfo = C:\PHP\cacert.pem` stehen.

---

**Admin Center zeigt kein CSS (Seite ohne Formatierung)**

Das Admin Center wurde ohne abschliessenden Slash aufgerufen (`/admin` statt `/admin/`). Der Browser lädt dann CSS relativ zur falschen Basis. Die korrekte URL ist: `http://<Server-IP>/admin/`

---

**MariaDB startet nicht**

Port 3306 könnte bereits belegt sein. Prüfen:
<!-- cSpell:disable -->
```batch
netstat -ano | findstr 3306
```
<!-- cSpell:enable -->
Weitere Details im Windows-Ereignisprotokoll: **Ereignisanzeige** → **Windows-Protokolle** → **Anwendung** → Quelle `MariaDB`.

---

**PHP-Seiten werden als Download angeboten statt ausgeführt**

Der FastCGI-Handler wurde nicht korrekt registriert. Prüfen:
<!-- cSpell:disable -->
```batch
%windir%\system32\inetsrv\appcmd list config /section:system.webServer/handlers | findstr PHP
```
<!-- cSpell:enable -->

## Nächster Schritt

Die Installation ist abgeschlossen. Im nächsten Schritt die empfohlenen Systemeinstellungen für i-doit vornehmen:

[Weiter zu **Systemeinstellungen**](../systemeinstellungen.md)
