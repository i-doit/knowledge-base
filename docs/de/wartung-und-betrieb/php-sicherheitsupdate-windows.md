---
title: PHP-Sicherheitsupdate einspielen (Windows)
description: Die PHP-Sicherheitslücken CVE-2026-109618 und CVE-2026-109619 bei i-doit unter Windows schließen, indem PHP gegen den korrigierten Build von php.net getauscht wird, und i-doit danach prüfen
icon: material/microsoft-windows
status:
lang: de
---

# PHP-Sicherheitsupdate einspielen (Windows)

Am 21.10.2026 hat das PHP-Projekt zwei kritische Lücken veröffentlicht (**CVE-2026-109618** und **CVE-2026-109619**,
jeweils Remote Code Execution ohne Anmeldung, CVSS 9.2). Behoben sind sie in **PHP 8.4.27, 8.3.36 und 8.2.35**. Das
höchste Risiko sieht das PHP-Projekt bei mod_php, und genau so betreibt der
[i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) PHP: als Modul im
Apache-Dienst `Apache2.4`. Jede Installation mit diesem Installer ist also betroffen.

Unter Windows gibt es keine Paketverwaltung, die PHP aktualisiert. Das Update besteht darin, die PHP-Dateien gegen den
korrigierten Build von php.net zu tauschen. Die `php.ini` bleibt dabei erhalten. Die Schritte 1–8 beschreiben das für den
**i-doit Windows Installer**. Für die Installation [unter IIS](#iis-installationsskript) und
[mit XAMPP](#xampp) gibt es eigene Abschnitte am Ende.

!!! note "Getestet am 22.10.2026 mit i-doit 38 auf Windows Server 2022, Apache 2.4.55 (Thread Safe, mod_php)"
    -   i-doit Windows Installer aus dem Kundenportal: PHP 8.2.23 → **8.2.35**
    -   Installation mit PHP 8.4 in derselben Verzeichnisstruktur: PHP 8.4.26 → **8.4.27**

    Jeweils frisch installiert mit Standardwerten, danach Update mit den Befehlen aus dieser Anleitung. Apache war jeweils
    rund 5 Sekunden gestoppt. Die Beispielausgaben stammen aus dem Lauf mit PHP 8.2.

## Kurzfassung

<div class="steps" markdown>
1. Sicherung oder Snapshot anlegen
2. Installierte Version feststellen: `C:\ProgramData\i-doit\php\php.exe -v`
3. Passenden Build „x64 Thread Safe“ als ZIP von php.net laden und die Prüfsumme vergleichen
4. Dienst `Apache2.4` stoppen, Ordner `C:\ProgramData\i-doit\php` sichern
5. ZIP über den Ordner `C:\ProgramData\i-doit\php` entpacken (überschreiben)
6. Dienst `Apache2.4` starten
7. Nachweis: `php -v` und die Zeile `PHP/8.x.y configured` im Apache-Log
8. i-doit prüfen: Login, ein Objekt speichern, Admin Center öffnen
</div>

## Voraussetzungen

-   i-doit, installiert mit dem i-doit Windows Installer. Prüfen: Der Ordner `C:\ProgramData\i-doit\php` existiert und
    der Dienst `Apache2.4` läuft.
-   Ein Konto mit Administratorrechten und eine **PowerShell als Administrator**.
-   Internetzugang vom Server zu `downloads.php.net`. Ohne Internetzugang die ZIP-Datei an einem anderen Rechner laden und
    auf den Server kopieren.
-   Ein Wartungsfenster von wenigen Minuten. Während Apache gestoppt ist, ist i-doit nicht erreichbar.

## 1. Sichern

Vor dem Update einen Snapshot der virtuellen Maschine anlegen oder mindestens die Datenbanken und den Ordner
`C:\ProgramData\i-doit` sichern, siehe [Daten sichern und wiederherstellen](daten-sichern-und-wiederherstellen/index.md).
Den Ordner `php` sichert Schritt 4 zusätzlich.

## 2. Ausgangsstand festhalten

```powershell
C:\ProgramData\i-doit\php\php.exe -v
Select-String C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf -Pattern 'php_module|PHPIniDir'
```

Beispiel vor dem Update:

```text
PHP 8.2.23 (cli) (built: Aug 27 2024 16:28:43) (ZTS Visual C++ 2019 x64)
LoadModule php_module "C:/ProgramData/i-doit/php/php8apache2_4.dll"
PHPIniDir "C:/ProgramData/i-doit/php"
```

Aus der ersten Zeile ergeben sich die beiden Angaben für den Download:

-   **Versionszweig** (hier 8.2): Im selben Zweig bleiben. Ein Wechsel etwa von 8.2 auf 8.4 ist ein eigenes Projekt, siehe
    [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix).
-   **ZTS** bedeutet Thread Safe. Für Apache mit mod_php ist das richtig und **zwingend**. Ein Non-Thread-Safe-Build
    (NTS) enthält weder `php8apache2_4.dll` noch `php8ts.dll`: Apache lädt danach ohne Fehlermeldung weiter die alten,
    verwundbaren Dateien.

## 3. Korrigierten Build laden und prüfen

Die Builds stehen unter [php.net/downloads (Windows)](https://www.php.net/downloads.php?os=windows) beziehungsweise im
Archiv `https://downloads.php.net/~windows/releases/archives/`. Benötigt wird die **ZIP-Datei „x64 Thread Safe“**, nicht
der Debug-Pack und nicht „Non Thread Safe“:

| Installiert | Ziel | Datei | SHA256 |
|---|---|---|---|
| 8.4.x | 8.4.27 | `php-8.4.27-Win32-vs17-x64.zip` | `7902fe891ff4b035d431fd429a2ec1df193ba1f6fedba425d861790465c64e6b` |
| 8.3.x | 8.3.36 | `php-8.3.36-Win32-vs16-x64.zip` | `0606810ff8fc232406aaab677b760e06af93a63a366d33ff738d4ce90501dfa5` |
| 8.2.x | 8.2.35 | `php-8.2.35-Win32-vs16-x64.zip` | `cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457` |

Laden und Prüfsumme vergleichen (Beispiel 8.2.35; für 8.3 oder 8.4 die beiden Variablen aus der Tabelle übernehmen):

```powershell
$zip  = 'php-8.2.35-Win32-vs16-x64.zip'
$hash = 'cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash
```

Die letzte Zeile muss `True` ausgeben. Bei `False` die Datei nicht verwenden.

!!! note "Visual C++ Runtime"
    Die Builds brauchen die Visual C++ Redistributable 2015–2022 (x64). Der Installer richtet sie ein (im Test Version
    14.44). Sie gilt für vs16- und vs17-Builds gleichermaßen, ein Nachinstallieren war nicht nötig. Auch mit der älteren
    Version 14.28, die XAMPP mitbringt, lief PHP 8.2.35 im Test ohne Fehler.

## 4. Apache stoppen und PHP-Ordner sichern

```powershell
Stop-Service Apache2.4
$bak = "C:\ProgramData\i-doit\php-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\ProgramData\i-doit\php $bak -Recurse
$bak
```

Apache muss gestoppt sein, sonst sind `php8ts.dll` und die Erweiterungen gesperrt und lassen sich nicht überschreiben.

## 5. Neue PHP-Dateien entpacken

```powershell
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\ProgramData\i-doit\php -Force
```

Das ZIP von php.net enthält **keine** `php.ini`, nur die Vorlagen `php.ini-development` und `php.ini-production`. Die
vorhandene `php.ini` bleibt deshalb unverändert, mit allen Erweiterungen, OPcache-Einstellungen und Pfaden. Zur Kontrolle:

```powershell
(Get-FileHash C:\ProgramData\i-doit\php\php.ini).Hash -eq (Get-FileHash "$bak\php.ini").Hash
```

Ergibt das `False`, die gesicherte Datei zurückkopieren:
`Copy-Item "$bak\php.ini" C:\ProgramData\i-doit\php\php.ini -Force`.

## 6. Apache starten

```powershell
Start-Service Apache2.4
Get-Service Apache2.4
```

Der Status muss `Running` lauten. Startet der Dienst nicht, zeigt
`C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -t` den Grund.

## 7. Nachweis: Ist die Lücke geschlossen?

Die Kommandozeile und der Webserver müssen beide die neue Version zeigen:

```powershell
C:\ProgramData\i-doit\php\php.exe -v
Select-String C:\ProgramData\i-doit\apache-2.4\logs\error.log -Pattern 'configured' | Select-Object -Last 1
Get-Process httpd | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8ts.dll' | Select-Object -First 1 FileVersion, FileName
```

Erwartete Ausgabe:

```text
PHP 8.2.35 (cli) (built: Oct 20 2026 04:17:59) (ZTS Visual C++ 2019 x64)
... AH00455: Apache/2.4.55 (Win64) PHP/8.2.35 configured -- resuming normal operations
FileVersion FileName
----------- --------
8.2.35      C:\ProgramData\i-doit\php\php8ts.dll
```

Die dritte Zeile ist der stärkste Nachweis: Sie zeigt die PHP-Bibliothek, die der laufende Apache tatsächlich geladen
hat. Die Versionsnummer muss mindestens **8.2.35**, **8.3.36** oder **8.4.27** lauten. Anders als bei
Linux-Distributionen gibt es unter Windows keine zurückportierten Korrekturen mit alter Versionsnummer: Die
Upstream-Versionsnummer ist der Nachweis.

In i-doit zeigt zusätzlich die Verwaltung unter **System Config Check** die PHP-Version an.

## 8. i-doit prüfen

1. `http://<i-doit-host>/` im Browser öffnen und anmelden.
2. Ein beliebiges Objekt öffnen, ein Feld ändern, speichern.
3. `http://<i-doit-host>/admin/` öffnen und anmelden. Die Seiten müssen ohne Fehlermeldung laden.

Im Test liefen Login, Dashboard, Objektlisten, Export und Admin Center nach dem Update ohne Fehler, die Ladezeiten waren
vor und nach dem Update gleich. Ohne eingespieltes Lizenztoken verlangt i-doit nach dem Login zuerst das Token; ein Objekt
lässt sich dann erst nach dessen Eingabe bearbeiten. Das ist unabhängig vom Update.

Bleibt die Seite weiß oder meldet Apache einen Fehler 500: `C:\ProgramData\i-doit\apache-2.4\logs\error.log` prüfen und
mit `C:\ProgramData\i-doit\php\php.exe -m` kontrollieren, ob alle Erweiterungen geladen werden. Im Test wurden alle in der
`php.ini` aktivierten Erweiterungen (unter anderem `ldap`, `gd`, `intl`, `soap`) vor und nach dem Update gleich geladen.

Läuft alles, können die ZIP-Datei in `%TEMP%` und nach einigen Tagen die Sicherung `php-backup-…` gelöscht werden.

## Stolperfallen

-   **Thread Safe, nicht NTS.** Apache mit mod_php braucht den Thread-Safe-Build. Ein NTS-ZIP ersetzt die
    Apache-Modul-Dateien nicht: `php.exe -v` zeigt dann die neue Version, der Webserver läuft aber weiter mit der alten.
    Schritt 7 deckt das auf.
-   **Versionszweig nicht wechseln.** Von 8.2.x auf 8.2.35, von 8.3.x auf 8.3.36, von 8.4.x auf 8.4.27. Ein Sprung auf einen anderen Zweig kann
    Erweiterungen und i-doit-Kompatibilität ändern.
-   **Apache vorher stoppen.** Sonst schlägt das Entpacken mit „Zugriff verweigert“ fehl oder ersetzt nur einen Teil der
    Dateien, und Apache lädt danach gemischte Versionen.
-   **`php -v` allein reicht nicht.** Es prüft nur die Datei auf der Platte. Erst die Zeile im Apache-Log oder die
    geladene `php8ts.dll` zeigt, dass der Webserver die neue Version nutzt (Schritt 7).
-   **`PHPIniDir` in der Anleitung für HTTPS.** Wer HTTPS nach der Installationsanleitung eingerichtet hat, sollte prüfen,
    dass `PHPIniDir` in der `httpd.conf` auf `C:/ProgramData/i-doit/php` zeigt. Steht dort ein anderer Pfad, lädt PHP
    eventuell eine andere oder gar keine `php.ini`. `php.exe -r "echo php_ini_loaded_file();"` zeigt die verwendete Datei.
-   **Warnung `Failed loading C:/ProgramData/i-doit/php/ext`.** Der i-doit Windows Installer aus dem Kundenportal schreibt eine fehlerhafte OPcache-Zeile (`zend_extension` ohne Dateinamen) in die `php.ini`. Die Meldung
    erscheint deshalb bei jedem `php.exe`-Aufruf, vor und nach dem Update gleich, und ist keine Folge des Updates. Behebung:
    in der `php.ini` die Zeile auf `zend_extension=opcache` ändern, `opcache.enable=1` setzen und Apache neu starten.
-   **Rückweg nur mit dem ganzen Ordner.** Die gesicherte alte `php.exe` lässt sich nicht neben den neuen Erweiterungen
    starten (`Unable to load dynamic library …`). Zum Zurückgehen immer den kompletten Ordner aus der Sicherung
    zurückkopieren, siehe Rückweg.
-   **Zwischenlösung bis zum Update.** `session.upload_progress.enabled = 0` in der `php.ini` mindert eine der beiden
    Lücken, danach Apache neu starten. Die andere Lücke bleibt offen. Den Server bis zum Update nur aus dem internen Netz
    erreichbar machen.

## IIS (Installationsskript)

Gilt für Installationen nach [i-doit unter IIS](../installation/manuelle-installation/microsoft-windows-server/iis.md).
PHP liegt dort unter `C:\PHP` und läuft per **FastCGI** (`php-cgi.exe`), nicht als Apache-Modul. Deshalb wird hier der
**Non-Thread-Safe-Build** (NTS) benötigt.

!!! note "Getestet am 22.10.2026 mit i-doit 39.1, Windows Server 2022, IIS 10, PHP 8.2.30 → 8.2.35 (NTS, FastCGI)"
    Installation mit dem korrigierten Installationsskript (siehe Warnhinweis unten), Ausgangsstand 8.2.30 wie beim
    ursprünglichen Skript, danach Update mit den folgenden Befehlen. IIS war rund 10 Sekunden gestoppt.

```powershell
$zip  = 'php-8.2.35-nts-Win32-vs16-x64.zip'
$hash = '798ffa4b9ce22a820d57048e9695df7245bf917ed067917f256942a10918a8cc'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash

iisreset /stop
$bak = "C:\PHP-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\PHP $bak -Recurse
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\PHP -Force
iisreset /start
```

`iisreset /stop` beendet auch alle `php-cgi.exe`-Prozesse; sonst sind die Dateien gesperrt. Die `php.ini` und die vom
Skript geladene `C:\PHP\cacert.pem` sind nicht im ZIP und bleiben erhalten.

**Nachweis:** IIS startet `php-cgi.exe` erst mit der ersten Anfrage. Deshalb zuerst eine Seite aufrufen, dann prüfen:

```powershell
Invoke-WebRequest http://localhost/ -UseBasicParsing | Out-Null
C:\PHP\php.exe -v
Get-Process php-cgi | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8.dll' | Select-Object -First 1 FileVersion, FileName
```

Erwartete Ausgabe:

```text
PHP 8.2.35 (cli) (built: Oct 20 2026 04:20:16) (NTS Visual C++ 2019 x64)
FileVersion FileName
----------- --------
8.2.35      C:\PHP\php8.dll
```

Die zweite Ausgabe zeigt die PHP-Bibliothek, die der laufende FastCGI-Prozess tatsächlich geladen hat. Im Test liefen
danach Login, Speichern eines Objekts und Admin Center ohne Fehler.

!!! warning "Installationsskript lädt PHP 8.2.30 nicht mehr (Stand 22.10.2026)"
    `install.ps1` holt PHP von `https://windows.php.net/downloads/releases/php-8.2.30-…`. Seit 8.2.35 erschienen ist,
    liegt 8.2.30 nur noch im Archiv; der alte Pfad liefert 404, eine Neuinstallation bricht in Schritt 1 ab. Das
    korrigierte Skript setzt `$PHP_VERSION = "8.2.35"` (schließt zugleich die Lücken) und lädt aus dem Archivpfad
    `https://downloads.php.net/~windows/releases/archives/php-$PHP_VERSION-nts-Win32-vs16-x64.zip`, unter dem auch
    künftige Versionen dauerhaft liegen bleiben. Mit dieser Korrektur lief eine komplette Neuinstallation im Test fehlerfrei
    durch (rund 10,5 Minuten, i-doit 39.1).

## XAMPP

Gilt für Installationen nach [i-doit via XAMPP](../installation/manuelle-installation/microsoft-windows-server/idoit-via-XAMPP.md).
PHP liegt unter `C:\xampp\php` und läuft wie beim Installer als **Apache-Modul**, also wird der **Thread-Safe-Build**
benötigt. Ein korrigiertes XAMPP-Paket gibt es nicht: Das neueste Windows-Paket auf apachefriends.org ist weiterhin
`xampp-windows-x64-8.2.12-0-VS16` mit PHP 8.2.12 vom November 2023. Der Austausch des PHP-Ordners funktioniert aber.

!!! note "Getestet am 22.10.2026 mit i-doit 39.1, Windows Server 2022, XAMPP 8.2.12 (Apache 2.4.58, MariaDB 10.4.32), PHP 8.2.12 → 8.2.35 (Thread Safe)"
    XAMPP nach KB-Artikel installiert und konfiguriert (Komponenten Apache, MySQL, PHP, phpMyAdmin), Apache und MySQL als
    Dienste eingerichtet, danach Update mit den folgenden Befehlen. Apache war rund eine Minute gestoppt, weil die
    Sicherung des PHP-Ordners mit PEAR länger dauert.

Apache zuerst stoppen: im **XAMPP Control Panel** bei Apache auf **Stop** klicken oder, wenn Apache als Dienst läuft,
`Stop-Service Apache2.4`. Dann:

```powershell
$zip  = 'php-8.2.35-Win32-vs16-x64.zip'
$hash = 'cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash

$bak = "C:\xampp\php-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\xampp\php $bak -Recurse
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\xampp\php -Force
```

Danach Apache wieder starten (Control Panel **Start** oder `Start-Service Apache2.4`). Die `php.ini` von XAMPP ist nicht im
ZIP und bleibt erhalten, ebenso die Pfade auf `C:\xampp\apache\bin\curl-ca-bundle.crt`. Die `httpd-xampp.conf` lädt
`php8ts.dll`, `libpq.dll` und `libsqlite3.dll` per `LoadFile` direkt aus `C:\xampp\php`; alle drei Dateien sind im ZIP
enthalten und werden mit ersetzt.

**Nachweis** wie in Schritt 7, nur mit den XAMPP-Pfaden:

```powershell
C:\xampp\php\php.exe -v
Select-String C:\xampp\apache\logs\error.log -Pattern 'configured' | Select-Object -Last 1
Get-Process httpd | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8ts.dll' | Select-Object -First 1 FileVersion
```

Erwartet: `PHP 8.2.35`, `Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.35 configured` und `8.2.35`. Im Test liefen danach
Login, Speichern eines Objekts und Admin Center ohne Fehler; alle in der `php.ini` aktivierten Erweiterungen (darunter
`ldap`, `gd`, `openssl`, `pdo_mysql`) wurden auf der Kommandozeile geladen, unter Apache alle außer `curl` (siehe
Hinweise).

!!! note "Hinweise zu XAMPP"
    -   Das XAMPP-Paket bleibt auch nach dem Austausch alt (Apache 2.4.58, MariaDB 10.4.32). Das PHP-Update schließt nur
        die beiden PHP-Lücken. Der Artikel [i-doit via XAMPP](../installation/manuelle-installation/microsoft-windows-server/idoit-via-XAMPP.md)
        nutzt XAMPP deshalb nur noch für Apache und PHP und installiert MariaDB 10.11 separat.
    -   Lädt Apache die Erweiterung `curl` nicht (`Unable to load dynamic library 'curl'` im Apache-Log), fehlen die
        `LoadFile`-Zeilen für `brotlicommon.dll`, `brotlidec.dll`, `libssh2.dll` und `nghttp2.dll` in der
        `httpd-xampp.conf`. Sie stehen in Schritt 3 des Artikels [i-doit via XAMPP](../installation/manuelle-installation/microsoft-windows-server/idoit-via-XAMPP.md).
        Auf der Kommandozeile lädt `curl` auch ohne diese Zeilen.
    -   Die `libsasl.dll` für LDAP bringt XAMPP in `C:\xampp\apache\bin` mit. Im Test funktionierte `ldap` mit PHP 8.2.35,
        ohne die Datei zu ersetzen.

## i-doit Discovery (nicht getestet)

Das Paket i-doit Discovery (Installer mit JDisc) richtet PHP wie der i-doit Windows Installer ein, aber unter
`C:\ProgramData\i-doit-discovery\php` und mit der `httpd.conf` unter `C:\ProgramData\i-doit-discovery\apache-2.4\conf`.
Der Ablauf aus den Schritten 1–8 gilt entsprechend mit diesen Pfaden. Mangels Paket haben wir ihn nicht getestet.

## Rückweg

Webserver stoppen, den PHP-Ordner löschen und durch die Sicherung ersetzen, Webserver starten:

| Installation | Webserver stoppen / starten | PHP-Ordner | Sicherung |
|---|---|---|---|
| i-doit Windows Installer | `Stop-Service Apache2.4` / `Start-Service Apache2.4` | `C:\ProgramData\i-doit\php` | `C:\ProgramData\i-doit\php-backup-…` |
| IIS | `iisreset /stop` / `iisreset /start` | `C:\PHP` | `C:\PHP-backup-…` |
| XAMPP | Control Panel oder `Stop-Service Apache2.4` | `C:\xampp\php` | `C:\xampp\php-backup-…` |

Den Rückweg haben wir nicht eigens getestet. Wegen der offenen Lücke ist er ohnehin nur als Notlösung sinnvoll. Besser: Snapshot zurücksetzen und die Ursache klären.

## Weiterführende Links

-   [PHP-Sicherheitshinweis vom 21.10.2026](https://www.php.net/archive/2026.php#2026-10-21-5)
-   [PHP 8 ChangeLog](https://www.php.net/ChangeLog-8.php) (8.4.27: GHSA-w8hw-w9fx-j79w, GHSA-6wmf-4rv5-p3rp)
-   [PHP für Windows herunterladen](https://www.php.net/downloads.php?os=windows)
-   [Update PHP und MariaDB unter Windows](../upgrades-und-umzuege/update-php-und-mariadb-fuer-windows.md)
-   [Kritisches PHP-Sicherheitsupdate (Oktober 2026)](php-sicherheitsupdate.md): Überblick für alle Plattformen
-   [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
