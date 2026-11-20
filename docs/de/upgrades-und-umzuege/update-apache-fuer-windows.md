---
title: Apache aktualisieren (i-doit Windows Installer)
description: Den Apache-Webserver einer Installation mit dem i-doit Windows Installer auf eine neuere Version 2.4.x aktualisieren, ohne i-doit und die Konfiguration anzufassen
icon: material/microsoft-windows
status:
lang: de
---

# Apache aktualisieren (i-doit Windows Installer)

Der [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) bringt einen
eigenen Apache-Webserver mit und richtet ihn als Dienst `Apache2.4` ein. Eine Paketverwaltung, die Apache aktualisiert,
gibt es unter Windows nicht. Das Update besteht darin, die Programmdateien von Apache gegen einen neueren Build von
[Apache Lounge](https://www.apachelounge.com/download/) zu tauschen. Konfiguration und i-doit selbst bleiben dabei
unverändert.

!!! note "Getestet am 20.11.2026 mit i-doit 39.2 auf Windows Server 2022"
    -   i-doit Windows Installer 1.1.1 (PHP 8.4.27 Thread Safe), frisch installiert mit Standardwerten
    -   Apache 2.4.55 (Apache Lounge VS17) → **2.4.71** (Apache Lounge VS18, `httpd-2.4.71-261112-Win64-VS18.zip`)
    -   Danach geprüft: Anmeldung, Objekt anlegen und speichern, Admin Center. Rückweg auf 2.4.55 ebenfalls getestet.

    Der Tausch selbst dauerte rund 3 Sekunden, mit Sicherung des Apache-Ordners rund 2 Minuten. Andere Windows-Versionen haben wir nicht getestet.

## Kurzfassung

<div class="steps" markdown>
1. Sicherung oder Snapshot anlegen
2. Installierte Version feststellen: `C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -v`
3. Aktuellen Build "Win64" als ZIP von Apache Lounge laden und die Prüfsumme vergleichen
4. Visual C++ Redistributable auf den Stand bringen, den Apache Lounge verlangt
5. Dienst `Apache2.4` stoppen, Ordner `apache-2.4` sichern
6. Nur die Ordner `bin` und `modules` ersetzen, `conf` und `htdocs` bleiben
7. Konfiguration prüfen und Dienst `Apache2.4` starten
8. Nachweis im Apache-Log, i-doit prüfen
</div>

## Voraussetzungen

-   i-doit, installiert mit dem i-doit Windows Installer. Prüfen: Der Ordner `C:\ProgramData\i-doit\apache-2.4` existiert
    und der Dienst `Apache2.4` läuft.
-   Ein Konto mit Administratorrechten und eine **PowerShell als Administrator**.
-   Internetzugang vom Server zu `www.apachelounge.com` und `aka.ms`. Ohne Internetzugang die Dateien an einem anderen
    Rechner laden und auf den Server kopieren.
-   Ein Wartungsfenster von wenigen Minuten.

!!! warning "i-doit liegt im Apache-Ordner"
    Der Installer legt i-doit unter `C:\ProgramData\i-doit\apache-2.4\htdocs` ab, die angepasste Konfiguration unter
    `C:\ProgramData\i-doit\apache-2.4\conf`. Den Ordner `apache-2.4` deshalb **nie komplett ersetzen** und beim Rückweg
    nie `htdocs` aus einer Sicherung zurückkopieren. Getauscht werden nur `bin` und `modules`.

## 1. Sichern

Vor dem Update einen Snapshot der virtuellen Maschine anlegen oder mindestens die Datenbanken und den Ordner
`C:\ProgramData\i-doit` sichern, siehe
[Daten sichern und wiederherstellen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md). Schritt 5
sichert den Apache-Ordner zusätzlich.

## 2. Ausgangsstand festhalten

```powershell
$A = "C:\ProgramData\i-doit\apache-2.4"
& "$A\bin\httpd.exe" -v
Get-ItemProperty HKLM:\SOFTWARE\Microsoft\VisualStudio\14.0\VC\Runtimes\x64 | Select-Object Version
```

Beispiel vor dem Update:

```text
Server version: Apache/2.4.55 (Win64)
Apache Lounge VS17 Server built:   Feb  9 2023 09:58:39

Version
-------
v14.44.35211.00
```

## 3. Neuen Build laden und prüfen

Auf [apachelounge.com/download](https://www.apachelounge.com/download/) die ZIP-Datei **"Win64"** des aktuellen Apache
2.4 laden. Zu jeder Datei veröffentlicht Apache Lounge eine Datei `.zip.txt` mit der SHA256-Prüfsumme. Beispiel mit dem
getesteten Build:

```powershell
$zip  = 'httpd-2.4.71-261112-Win64-VS18.zip'
$hash = '44961A929DFF16B767B3ADBCEA55760A942A00239B2891DC55806BE34029E1FC'
$dl   = 'C:\apache-update'
New-Item $dl -ItemType Directory -Force | Out-Null
curl.exe -sSL -o "$dl\$zip" "https://www.apachelounge.com/download/VS18/binaries/$zip"
(Get-FileHash "$dl\$zip" -Algorithm SHA256).Hash -eq $hash
Expand-Archive "$dl\$zip" -DestinationPath "$dl\x" -Force
```

Die vorletzte Zeile muss `True` ausgeben. Bei `False` die Datei nicht verwenden. Für einen neueren Build Dateiname,
Pfad und Prüfsumme von der Download-Seite übernehmen.

!!! tip "curl.exe statt Invoke-WebRequest"
    `Invoke-WebRequest` aus Windows PowerShell 5.1 bricht bei apachelounge.com mit "308 Permanent Redirect" ab.
    `curl.exe` ist in Windows enthalten und folgt der Weiterleitung.

## 4. Visual C++ Redistributable aktualisieren

Apache Lounge nennt auf der Download-Seite die Version des Visual C++ Redistributable, die der Build braucht. Für den
VS18-Build war das 14.52.37029. Der Installer bringt eine ältere Version mit (im Test 14.44). Das Redistributable kommt
direkt von Microsoft:

```powershell
curl.exe -sSL -o "$dl\vc_redist.x64.exe" https://aka.ms/vc14/vc_redist.x64.exe
(Get-AuthenticodeSignature "$dl\vc_redist.x64.exe").Status
Start-Process "$dl\vc_redist.x64.exe" -ArgumentList '/install','/quiet','/norestart' -Wait
```

Die zweite Zeile muss `Valid` ausgeben. Im Test war kein Neustart nötig. PHP läuft mit der neueren Version unverändert
weiter.

## 5. Apache stoppen und sichern

```powershell
Stop-Service Apache2.4
$bak = "C:\ProgramData\i-doit\apache-2.4-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item $A $bak -Recurse
$bak
```

Die Sicherung enthält auch `htdocs` mit i-doit und dauerte im Test rund zwei Minuten. Für den Rückweg werden daraus nur
`bin` und `modules` gebraucht.

## 6. bin und modules ersetzen

```powershell
$N = "$dl\x\Apache24"
Remove-Item "$A\bin","$A\modules" -Recurse -Force
Copy-Item "$N\bin","$N\modules" $A -Recurse
```

Die beiden Ordner werden **komplett ersetzt, nicht zusammengeführt**. Ältere Builds enthalten Dateien, die neuere nicht
mehr haben, und umgekehrt. Alle anderen Ordner aus dem ZIP (`conf`, `htdocs`, `logs` und so weiter) werden nicht
kopiert. Der Dienst muss nicht neu eingerichtet werden, weil Pfad und Name von `httpd.exe` gleich bleiben.

## 7. Konfiguration prüfen und Apache starten

```powershell
& "$A\bin\httpd.exe" -t
Start-Service Apache2.4
Get-Service Apache2.4
```

`httpd.exe -t` muss `Syntax OK` melden. PowerShell zeigt die Meldung rot an, weil Apache sie auf den Fehlerkanal
schreibt. Das ist kein Fehler.

## 8. Nachweis und i-doit prüfen

```powershell
& "$A\bin\httpd.exe" -v
Get-Content "$A\logs\error.log" -Tail 6
```

Ergebnis im Test:

```text
Server version: Apache/2.4.71 (Win64)
Apache Lounge VS18 Server built:   Nov 11 2026 08:56:23
... AH00455: Apache/2.4.71 (Win64) PHP/8.4.27 configured -- resuming normal operations
```

Die Zeile `AH00455` zeigt, dass der laufende Dienst die neue Apache-Version nutzt und PHP geladen hat. Danach in i-doit
anmelden, ein Objekt öffnen und speichern und das Admin Center aufrufen.

Läuft alles, können der Ordner `C:\apache-update` und nach einigen Tagen die Sicherung `apache-2.4-backup-...` gelöscht
werden.

## Stolperfallen

-   **Nur `bin` und `modules` tauschen.** Ein komplettes Ersetzen des Ordners `apache-2.4` löscht i-doit (`htdocs`) und
    die vom Installer angepasste `httpd.conf`.
-   **Apache vorher stoppen.** Sonst sind `httpd.exe` und die Module gesperrt und lassen sich nicht ersetzen.
-   **Visual C++ Redistributable.** Apache Lounge setzt die auf der Download-Seite genannte Version voraus. Im Test
    startete der neue Build auch mit der älteren Version, unterstützt ist das laut Apache Lounge aber nicht.
-   **Meldung `Failed loading C:/ProgramData/i-doit/php/ext` im Log.** Sie erscheint im Test mit dem alten und dem neuen
    Apache gleichermaßen und hat mit dem Update nichts zu tun.

## i-doit Discovery (nicht getestet)

Das Paket i-doit Discovery richtet Apache wie der i-doit Windows Installer ein, aber unter
`C:\ProgramData\i-doit-discovery\apache-2.4`. Der Ablauf gilt entsprechend mit diesem Pfad. Wir haben ihn nicht getestet.

## Rückweg

Getestet: Dienst stoppen, `bin` und `modules` aus der Sicherung zurückkopieren, Dienst starten. `htdocs`, `conf` und
`logs` bleiben unberührt.

```powershell
Stop-Service Apache2.4
Remove-Item "$A\bin","$A\modules" -Recurse -Force
Copy-Item "$bak\bin","$bak\modules" $A -Recurse
& "$A\bin\httpd.exe" -t
Start-Service Apache2.4
& "$A\bin\httpd.exe" -v
```

## Weiterführende Links

-   [Apache Lounge Downloads](https://www.apachelounge.com/download/)
-   [Apache HTTP Server: Sicherheitshinweise 2.4](https://httpd.apache.org/security/vulnerabilities_24.html)
-   [Update PHP und MariaDB für Windows](update-php-und-mariadb-fuer-windows.md)
-   [PHP-Sicherheitsupdate einspielen (Windows)](../wartung-und-betrieb/php-sicherheitsupdate-windows.md)
-   [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
