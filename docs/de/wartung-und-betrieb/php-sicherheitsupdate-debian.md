---
title: PHP-Sicherheitsupdate einspielen (Debian 13)
description: Die PHP-Sicherheitslücken CVE-2026-109618 und CVE-2026-109619 auf Debian 13 mit Bordmitteln schließen und i-doit danach prüfen
icon:
status:
lang: de
---

# PHP-Sicherheitsupdate einspielen (Debian 13)

Am 21.10.2026 hat das PHP-Projekt zwei kritische Lücken veröffentlicht (**CVE-2026-109618** und **CVE-2026-109619**,
jeweils Remote Code Execution, CVSS 9.2). Betroffen sind alle Betriebsarten, in denen PHP Anfragen in langlebigen
Prozessen verarbeitet, also PHP-FPM und Apache mit mod_php und damit jede i-doit-Installation. Das höchste Risiko sieht das PHP-Projekt bei mod_php. Eine vollständige
Gegenmaßnahme außer dem Update gibt es nicht.

Diese Anleitung beschreibt das Update auf **Debian 13 (trixie)** mit dem Standardpaket **PHP 8.4** aus den
Debian-Quellen, so wie es die [Installationsanleitung für Debian](../installation/manuelle-installation/debian/index.md)
einrichtet. Fremdquellen (etwa deb.sury.org) werden hier nicht behandelt.

!!! note "Getestet am 21.10.2026 mit i-doit 39.1 auf Debian 13.4, PHP-FPM 8.4"
    Debian hat die korrigierten Pakete um 15:45 Uhr MESZ bereitgestellt, etwa fünf Minuten nach der Veröffentlichung auf php.net.
    Alle Ausgaben in dieser Anleitung stammen aus diesem Lauf.

## Kurzfassung

<div class="steps" markdown>
1. Sicherung oder Snapshot anlegen
2. Pakete aktualisieren:
    ```shell
    sudo apt update && sudo apt upgrade
    ```
3. PHP-FPM und Apache neu starten:
    ```shell
    sudo systemctl restart php8.4-fpm apache2
    ```
4. Nachweis im Paket-Changelog:
    ```shell
    zcat /usr/share/doc/php8.4-cli/changelog.Debian.gz | grep -m2 CVE-2026-1096
    ```
5. i-doit prüfen: Login, ein Objekt speichern, Admin Center öffnen
</div>

## Voraussetzungen

- Debian 13 mit PHP aus den Debian-Paketquellen. Prüfen:
    ```shell
    cat /etc/debian_version
    apt-cache policy php8.4-cli
    ```
    Unter `Version table` muss `security.debian.org … trixie-security` als Quelle stehen. Fehlt die Zeile, ist die
    Security-Quelle in `/etc/apt/sources.list` nicht eingetragen und das Update kann nicht ankommen.
- Root-Rechte oder `sudo`.
- Ein Wartungsfenster von wenigen Minuten. Während des Neustarts von PHP-FPM ist i-doit kurz nicht erreichbar.

## 1. Sichern

Vor dem Update einen Snapshot der virtuellen Maschine anlegen oder mindestens das i-doit-Verzeichnis, die Datenbanken
und die Konfiguration unter `/etc/php/` und `/etc/apache2/` sichern, siehe [Backup und Restore](daten-sichern-und-wiederherstellen/index.md).
Bei einer VM ist der sauberste Weg: herunterfahren, Snapshot anlegen, wieder starten.

## 2. Ausgangsstand festhalten

```shell
php -v
dpkg -l 'php8.4*' | awk '/^ii/{print $2, $3}'
```

Beispiel vor dem Update:

```text
PHP 8.4.26 (cli) (built: Sep 24 2026 17:16:18) (NTS)
php8.4-cli 8.4.26-1~deb13u1
php8.4-fpm 8.4.26-1~deb13u1
```

Die Angabe hinter dem Bindestrich (`1~deb13u1`) ist die Debian-Paketrevision. Sie ist für den Nachweis wichtiger als
die PHP-Nummer davor.

## 3. Update einspielen

```shell
sudo apt update
apt list --upgradable 2>/dev/null | grep php
sudo apt upgrade
```

`apt list --upgradable` zeigt vorab, ob die korrigierten Pakete schon in den Quellen liegen:

```text
php8.4-cli/stable-security 8.4.27-1~deb13u1 amd64 [upgradable from: 8.4.26-1~deb13u1]
php8.4-fpm/stable-security 8.4.27-1~deb13u1 amd64 [upgradable from: 8.4.26-1~deb13u1]
```

Erscheint hier nichts, hat Debian die Pakete noch nicht veröffentlicht. Dann später erneut prüfen, nicht auf Fremdquellen
ausweichen. `apt upgrade` aktualisiert alle PHP-Pakete gemeinsam:

```text
15 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.
Get: http://security.debian.org/debian-security trixie-security/main amd64 php8.4-fpm amd64 8.4.27-1~deb13u1
Unpacking php8.4-fpm (8.4.27-1~deb13u1) over (8.4.26-1~deb13u1) ...
```

!!! warning "Zurückgehaltene Pakete"
    Steht in der Ausgabe `not upgraded` mit einer Zahl größer 0, mit `apt-mark showhold` prüfen, ob PHP-Pakete auf
    *hold* stehen. Ein gehaltenes Paket bleibt verwundbar.

## 4. Dienste neu starten

Das Paket startet PHP-FPM beim Update zwar neu, Apache lädt seine Module aber nicht von selbst. Beide Dienste
explizit neu starten und den Zustand prüfen:

```shell
sudo systemctl restart php8.4-fpm apache2
systemctl is-active php8.4-fpm apache2
```

Beide Zeilen müssen `active` lauten.

Welche Betriebsart läuft, zeigt `apache2ctl -M | grep -E 'php|proxy_fcgi'`: `proxy_fcgi_module` bedeutet PHP-FPM, `php_module` bedeutet mod_php. Die [Installationsanleitung für Debian](../installation/manuelle-installation/debian/index.md) richtet PHP-FPM ein. mod_php findest du eher bei älteren Installationen. Bei mod_php genügt `sudo systemctl restart apache2`, das Update ist dort aber besonders dringend: Das PHP-Projekt sieht das höchste Risiko bei mod_php, mit einem demonstrierten Angriff über eine nicht authentifizierte Anfrage, noch bevor Anwendungscode läuft.

## 5. Nachweis: Ist die Lücke geschlossen?

Debian, Ubuntu, Red Hat und SUSE bauen Sicherheitskorrekturen häufig in die vorhandene PHP-Version ein (Backport).
Die Versionsnummer aus `php -v` ist deshalb kein verlässlicher Nachweis. Verlässlich ist der Changelog des installierten
Pakets, der die CVE-Nummern nennt:

```shell
zcat /usr/share/doc/php8.4-cli/changelog.Debian.gz | grep -m3 -E 'CVE-2026-1096|^php8.4 \('
```

Erwartete Ausgabe:

```text
php8.4 (8.4.27-1~deb13u1) trixie-security; urgency=high
   + (CVE-2026-109618, CVE-2026-109619): Avoid state corruption via
```

Steht die CVE-Nummer im obersten Changelog-Eintrag, ist das installierte Paket korrigiert. Zusätzlich zeigt
`php -v` in diesem Fall `PHP 8.4.27`, weil Debian hier die komplette neue Upstream-Version übernommen hat. Das ist bei
Debian üblich, bei anderen Distributionen nicht; dort bleibt die Nummer gleich und nur die Paketrevision steigt.

Alternativ online: [Debian Security Tracker zu CVE-2026-109618](https://security-tracker.debian.org/tracker/CVE-2026-109618).
In der Spalte für `trixie` steht die korrigierte Paketversion; sie muss mit `dpkg -l php8.4-cli` übereinstimmen.

!!! note "Online-Changelog hinkt nach"
    `apt-get changelog php8.4-cli` lädt den Changelog vom Debian-Server. Kurz nach der Veröffentlichung war dort die
    neue Version noch nicht abrufbar. Der lokale Changelog unter `/usr/share/doc/` ist nach dem Update sofort vorhanden.

## 6. i-doit prüfen

1. `http://<i-doit-host>/` im Browser öffnen und anmelden.
2. Ein beliebiges Objekt öffnen, ein Feld ändern, speichern.
3. `http://<i-doit-host>/admin/` öffnen und anmelden. Die Seiten müssen ohne Fehlermeldung laden.

Bleibt die Seite weiß oder meldet Apache einen Fehler 500: `journalctl -u php8.4-fpm -n 50` und
`/var/log/apache2/error.log` prüfen und mit `php -m` kontrollieren, ob alle benötigten Erweiterungen geladen sind.

## Stolperfallen

- **Security-Quelle fehlt.** Ohne `deb http://security.debian.org/debian-security trixie-security main` in den
  APT-Quellen kommt kein Sicherheitsupdate an. Die Installationsanleitung für Debian richtet sie ein; bei
  Minimalinstallationen von Installationsmedien kann sie fehlen.
- **PHP-FPM läuft mit alter Binärdatei weiter.** Wer Updates automatisch einspielt (`unattended-upgrades`), hat die
  Pakete vielleicht schon, aber einen Neustart von PHP-FPM steht noch aus. `needrestart` ist auf Debian nicht
  vorinstalliert; `systemctl show -p ActiveEnterTimestamp php8.4-fpm` zeigt, wann der Dienst zuletzt gestartet wurde.
- **Gehaltene Pakete** (`apt-mark showhold`) werden von `apt upgrade` übersprungen.
- **Zwischenlösung bis zum Paket.** Bis das Paket verfügbar ist, mindert `session.upload_progress.enabled = 0` in
  `/etc/php/8.4/fpm/php.ini` eine der beiden Lücken; die andere lässt sich ohne Nebenwirkungen auf i-doit nicht abmildern.
  Den Webserver bis zum Update nur aus dem internen Netz erreichbar machen.

## Rückweg

Snapshot zurücksetzen oder die gesicherten Verzeichnisse wiederherstellen. Ein Downgrade der PHP-Pakete per APT ist
nicht vorgesehen und wegen der offenen Lücke nicht sinnvoll.

## Weiterführende Links

- [Kritisches PHP-Sicherheitsupdate (Oktober 2026)](php-sicherheitsupdate.md): Überblick für alle Distributionen
- [PHP-Sicherheitshinweis vom 21.10.2026](https://www.php.net/archive/2026.php#2026-10-21-5)
- [Debian Security Tracker: CVE-2026-109618](https://security-tracker.debian.org/tracker/CVE-2026-109618),
  [CVE-2026-109619](https://security-tracker.debian.org/tracker/CVE-2026-109619)
- [PHP-Version wechseln (Debian/Ubuntu)](php-update.md), falls eine nicht mehr unterstützte PHP-Version läuft
- [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
