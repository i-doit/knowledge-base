---
title: PHP-Sicherheitsupdate einspielen (Ubuntu 24.04)
description: Die PHP-Sicherheitslücken CVE-2026-109618 und CVE-2026-109619 auf Ubuntu 24.04 LTS mit Bordmitteln schließen und i-doit danach prüfen
icon:
status:
lang: de
---

# PHP-Sicherheitsupdate einspielen (Ubuntu 24.04)

Am 21.10.2026 hat das PHP-Projekt zwei kritische Lücken veröffentlicht (**CVE-2026-109618** und **CVE-2026-109619**,
jeweils Remote Code Execution, CVSS 9.2). Betroffen sind alle Betriebsarten, in denen PHP Anfragen in langlebigen
Prozessen verarbeitet, also PHP-FPM und Apache mit mod_php und damit jede i-doit-Installation. Das höchste Risiko sieht
das PHP-Projekt bei mod_php. Eine vollständige Gegenmaßnahme außer dem Update gibt es nicht.

Diese Anleitung beschreibt das Update auf **Ubuntu 24.04 LTS (Noble Numbat)** mit dem Standardpaket **PHP 8.3** aus den
Ubuntu-Quellen, so wie es die [Installationsanleitung für Ubuntu](../installation/manuelle-installation/ubuntu/index.md)
einrichtet. Fremdquellen (etwa das PPA ppa:ondrej/php) werden hier nicht behandelt. Für **Ubuntu 22.04 LTS** mit PHP 8.1 gilt der
Ablauf entsprechend mit `php8.1` statt `php8.3`; USN-8948-1 liefert dort die Paketrevision `8.1.2-1ubuntu2.28`.

!!! note "Getestet am 21.10.2026 mit i-doit 39.1 auf Ubuntu 24.04.4, PHP-FPM 8.3"
    Ubuntu hat die korrigierten Pakete etwa eine Stunde nach der Veröffentlichung auf php.net bereitgestellt
    (Sicherheitshinweis USN-8948-1). Alle Ausgaben in dieser Anleitung stammen aus diesem Lauf.

## Kurzfassung

<div class="steps" markdown>
1. Sicherung oder Snapshot anlegen
2. Pakete aktualisieren:
    ```shell
    sudo apt update && sudo apt upgrade
    ```
3. PHP-FPM und Apache neu starten:
    ```shell
    sudo systemctl restart php8.3-fpm apache2
    ```
4. Nachweis im Paket-Changelog (nicht in `php -v`):
    ```shell
    zcat /usr/share/doc/php8.3-cli/changelog.Debian.gz | grep -m2 CVE-2026-1096
    ```
5. i-doit prüfen: Login, ein Objekt speichern, Admin Center öffnen
</div>

## Voraussetzungen

- Ubuntu 24.04 mit PHP aus den Ubuntu-Paketquellen. Prüfen:
    ```shell
    lsb_release -d
    apt-cache policy php8.3-cli
    ```
    Unter `Version table` muss `security.ubuntu.com … noble-security` als Quelle stehen. Fehlt die Zeile, ist die
    Security-Quelle in `/etc/apt/sources.list.d/ubuntu.sources` nicht eingetragen und das Update kann nicht ankommen.
- Root-Rechte oder `sudo`.
- Ein Wartungsfenster von wenigen Minuten. Während des Neustarts von PHP-FPM ist i-doit kurz nicht erreichbar.

## 1. Sichern

Vor dem Update einen Snapshot der virtuellen Maschine anlegen oder mindestens das i-doit-Verzeichnis, die Datenbanken
und die Konfiguration unter `/etc/php/` und `/etc/apache2/` sichern, siehe
[Daten sichern und wiederherstellen](daten-sichern-und-wiederherstellen/index.md).
Bei einer VM ist der sauberste Weg: herunterfahren, Snapshot anlegen, wieder starten.

## 2. Ausgangsstand festhalten

```shell
php -v
dpkg -l 'php8.3*' | awk '/^ii/{print $2, $3}'
```

Beispiel vor dem Update:

```text
PHP 8.3.6 (cli) (built: Oct  7 2026 18:06:38) (NTS)
php8.3-cli 8.3.6-0ubuntu0.24.04.12
php8.3-fpm 8.3.6-0ubuntu0.24.04.12
```

Ubuntu bleibt in einem LTS-Release bei einer PHP-Version (hier 8.3.6) und baut Sicherheitskorrekturen in das Paket ein.
Die Zahl hinter `ubuntu0.24.04.` ist die Paketrevision; sie zählt für den Nachweis, nicht die PHP-Nummer davor.

## 3. Update einspielen

```shell
sudo apt update
apt list --upgradable 2>/dev/null | grep php
sudo apt upgrade
```

`apt list --upgradable` zeigt vorab, ob die korrigierten Pakete schon in den Quellen liegen:

```text
php8.3-cli/noble-security 8.3.6-0ubuntu0.24.04.13 amd64 [upgradable from: 8.3.6-0ubuntu0.24.04.12]
php8.3-fpm/noble-security 8.3.6-0ubuntu0.24.04.13 amd64 [upgradable from: 8.3.6-0ubuntu0.24.04.12]
```

`apt upgrade` aktualisiert alle PHP-Pakete gemeinsam:

```text
15 upgraded, 0 newly installed, 0 to remove and 1 not upgraded.
Get: http://security.ubuntu.com/ubuntu noble-security/main amd64 php8.3-cli amd64 8.3.6-0ubuntu0.24.04.13
Unpacking php8.3-fpm (8.3.6-0ubuntu0.24.04.13) over (8.3.6-0ubuntu0.24.04.12) ...
```

!!! warning "Noch nichts da? Erst einige Minuten später erneut prüfen"
    `security.ubuntu.com` besteht aus mehreren Servern, die nicht gleichzeitig aktualisiert werden. Im Test meldete
    `apt update` noch „Hit“ mit einem alten Index, während ein anderer Server die neuen Pakete bereits hatte. Erscheint
    bei `apt list --upgradable` nichts, einige Minuten warten und `sudo apt update` wiederholen, nicht auf Fremdquellen
    ausweichen.

!!! warning "Zurückgestellte und gehaltene Pakete"
    Ubuntu rollt manche Updates stufenweise aus („phasing“). Dann meldet `apt upgrade` etwa
    `The following upgrades have been deferred due to phasing` und `1 not upgraded`. Sicherheitsupdates wie dieses
    werden nicht gestuft, im Test betraf es nur ein unbeteiligtes Paket. Steht ein PHP-Paket in dieser Liste, nimmt
    `sudo apt-get -o APT::Get::Always-Include-Phased-Updates=true upgrade` es mit. Mit `apt-mark showhold` prüfen,
    ob PHP-Pakete auf *hold* stehen; ein gehaltenes Paket bleibt verwundbar.

## 4. Dienste neu starten

Das Paket startet PHP-FPM beim Update neu, Apache lädt seine Module aber nicht von selbst. Beide Dienste explizit
neu starten und den Zustand prüfen:

```shell
sudo systemctl restart php8.3-fpm apache2
systemctl is-active php8.3-fpm apache2
```

Beide Zeilen müssen `active` lauten. Welche Betriebsart läuft, zeigt `apache2ctl -M | grep -E 'php|proxy_fcgi'`:
`proxy_fcgi_module` bedeutet PHP-FPM, `php_module` bedeutet mod_php. Die Installationsanleitung richtet PHP-FPM ein;
mod_php findet sich eher bei älteren Installationen. Bei mod_php genügt `sudo systemctl restart apache2`, das Update
ist dort aber besonders dringend. `needrestart` (auf Ubuntu Server vorinstalliert) meldet weitere Dienste, die noch mit
alten Bibliotheken laufen.

## 5. Nachweis: Ist die Lücke geschlossen?

**`php -v` zeigt nach dem Update weiterhin 8.3.6.** Das ist auf Ubuntu normal: Die Korrektur steckt in der
Paketrevision, nicht in einer neuen PHP-Version. Nur das Build-Datum hat sich geändert:

```text
PHP 8.3.6 (cli) (built: Oct 19 2026 15:16:58) (NTS)
```

Verlässlich ist der Changelog des installierten Pakets, der die CVE-Nummern nennt:

```shell
zcat /usr/share/doc/php8.3-cli/changelog.Debian.gz | grep -m6 -E 'CVE-2026-1096|^php8.3 \(|SECURITY UPDATE'
```

Erwartete Ausgabe:

```text
php8.3 (8.3.6-0ubuntu0.24.04.13) noble-security; urgency=medium
  * SECURITY UPDATE: Remote RCE via state corruption issue
    - CVE-2026-109618
    - CVE-2026-109619
```

Steht die CVE-Nummer im obersten Changelog-Eintrag, ist das installierte Paket korrigiert. Zusätzlich muss die
installierte Paketrevision mit der Angabe im Ubuntu-Tracker übereinstimmen:

```shell
dpkg -l php8.3-cli | awk '/^ii/{print $3}'
```

[Ubuntu-Tracker zu CVE-2026-109618](https://ubuntu.com/security/CVE-2026-109618): Zeile `php8.3 / 24.04 LTS noble`
muss `Fixed in 8.3.6-0ubuntu0.24.04.13` lauten. Der zugehörige Sicherheitshinweis ist
[USN-8948-1](https://ubuntu.com/security/notices/USN-8948-1). Solange dort „Needs evaluation“ oder „Pending“ steht, gibt
es noch kein Paket.

!!! note "Online-Changelog liefert 404"
    `apt-get changelog php8.3-cli` lädt den Changelog von changelogs.ubuntu.com. Im Test antwortete der Server für
    die neue Version mit „Changelog unavailable (404)“. Der lokale Changelog unter `/usr/share/doc/` ist nach dem
    Update sofort vorhanden und reicht als Nachweis.

## 6. i-doit prüfen

1. `http://<i-doit-host>/` im Browser öffnen und anmelden.
2. Ein beliebiges Objekt öffnen, ein Feld ändern, speichern.
3. `http://<i-doit-host>/admin/` öffnen und anmelden. Die Seiten müssen ohne Fehlermeldung laden.

Bleibt die Seite weiß oder meldet Apache einen Fehler 500: `journalctl -u php8.3-fpm -n 50` und
`/var/log/apache2/error.log` prüfen und mit `php -m` kontrollieren, ob alle benötigten Erweiterungen geladen sind.

## Stolperfallen

- **Security-Quelle fehlt.** Ohne `noble-security` in den APT-Quellen kommt kein Sicherheitsupdate an.
- **`php8.3-fpm` liegt in `universe`.** Das Paket hat das Update im Test trotzdem über `noble-security/universe`
  erhalten. Ubuntu Pro ist dafür nicht nötig, aber `universe` muss in den Quellen aktiviert sein.
- **PHP-FPM läuft mit alter Binärdatei weiter.** `unattended-upgrades` ist auf Ubuntu Server standardmäßig aktiv und
  spielt das Paket möglicherweise nachts ein; der Neustart von PHP-FPM und Apache steht dann trotzdem aus.
  `systemctl show -p ActiveEnterTimestamp php8.3-fpm` zeigt, wann der Dienst zuletzt gestartet wurde.
- **Phasing und gehaltene Pakete** siehe Schritt 3.
- **Zwischenlösung bis zum Paket.** `session.upload_progress.enabled = 0` in `/etc/php/8.3/fpm/php.ini` mindert eine
  der beiden Lücken; die andere lässt sich ohne Nebenwirkungen auf i-doit nicht abmildern. Den Webserver bis zum
  Update nur aus dem internen Netz erreichbar machen.

## Rückweg

Snapshot zurücksetzen oder die gesicherten Verzeichnisse wiederherstellen. Ein Downgrade der PHP-Pakete per APT ist
nicht vorgesehen und wegen der offenen Lücke nicht sinnvoll.

## Weiterführende Links

- [Kritisches PHP-Sicherheitsupdate (Oktober 2026)](php-sicherheitsupdate.md): Überblick für alle Distributionen
- [PHP-Sicherheitshinweis vom 21.10.2026](https://www.php.net/archive/2026.php#2026-10-21-5)
- [USN-8948-1](https://ubuntu.com/security/notices/USN-8948-1), [Ubuntu-Tracker CVE-2026-109618](https://ubuntu.com/security/CVE-2026-109618),
  [CVE-2026-109619](https://ubuntu.com/security/CVE-2026-109619)
- [PHP-Version wechseln (Debian/Ubuntu)](php-update.md), falls eine nicht mehr unterstützte PHP-Version läuft
- [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
