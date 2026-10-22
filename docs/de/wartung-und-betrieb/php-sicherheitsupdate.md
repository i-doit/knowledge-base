---
title: Kritisches PHP-Sicherheitsupdate (Oktober 2026)
description: Zwei kritische RCE-Lücken in PHP (CVE-2026-109618/-109619) — wer betroffen ist und was i-doit-Betreiber jetzt tun müssen
icon:
status:
lang: de
---

# Kritisches PHP-Sicherheitsupdate (Oktober 2026)

Am 21. Oktober 2026 hat das PHP-Projekt die Versionen **PHP 8.5.12, 8.4.27, 8.3.36 und 8.2.35** veröffentlicht. Sie schließen zwei kritische Schwachstellen (**CVE-2026-109618** und **CVE-2026-109619**, beide CVSS v4.0 9.2), über die Angreifer ohne Anmeldung aus der Ferne Code ausführen können.

!!! warning "Jetzt handeln"
    Da i-doit auf PHP aufsetzt, sind alle i-doit-Installationen betroffen. Die Lücke liegt in **PHP, nicht in i-doit** — ein i-doit-Update ist nicht erforderlich. Aktualisiere PHP, sobald deine Distribution die Pakete bereitstellt.

## Was ist betroffen?

| Lücke | Ursache | Details |
| --- | --- | --- |
| CVE-2026-109618 | Remote Code Execution über die Behandlung von Speicherfehlern (Out of Memory) | [GHSA-w8hw-w9fx-j79w](https://github.com/php/php-src/security/advisories/GHSA-w8hw-w9fx-j79w) |
| CVE-2026-109619 | Remote Code Execution über veralteten Zustand im PHP-Worker | [GHSA-6wmf-4rv5-p3rp](https://github.com/php/php-src/security/advisories/GHSA-6wmf-4rv5-p3rp) |

Betroffen ist jede PHP-Installation, die Webanfragen beantwortet: PHP-FPM, Apache mit mod_php, php-cgi, FrankenPHP und LiteSpeed. Das höchste Risiko sieht das PHP-Projekt bei **mod_php**. Dort ist ein Angriff demonstriert, der greift, bevor überhaupt Anwendungscode läuft.

Unterstützte i-doit-Installationen laufen auf PHP 8.2–8.4. Für alle diese Zweige gibt es einen Fix.

## Was du tun musst

### On-Premises (Linux)

Die Linux-Distributionen haben die Patches vorab erhalten und liefern eigene Pakete aus. Nutze die Pakete deiner Distribution:

1. Vorher sichern: Snapshot der VM oder Backup von i-doit-Verzeichnis, Datenbank und PHP-Konfiguration.
2. PHP-Update über die Paketverwaltung einspielen und die Dienste neu starten. PHP-FPM und Apache laden die neuen Pakete erst nach einem Neustart.

    | Distribution | Update | Dienste neu starten |
    | --- | --- | --- |
    | Debian 13 (Pakete seit 21.10., 15:45 Uhr, [ausführliche Anleitung](php-sicherheitsupdate-debian.md)) | `sudo apt update && sudo apt upgrade` | `sudo systemctl restart apache2 php8.4-fpm` |
    | Ubuntu 24.04 (Pakete seit 21.10., ca. 16:05 Uhr, [ausführliche Anleitung](php-sicherheitsupdate-ubuntu.md)) | `sudo apt update && sudo apt upgrade` | `sudo systemctl restart apache2 php8.3-fpm` |
    | RHEL 10 / Rocky / Alma (Pakete seit 22.10., 00:58 Uhr, [ausführliche Anleitung](php-sicherheitsupdate-rocky.md)) | `sudo dnf --refresh update 'php*'` | `sudo systemctl restart httpd php-fpm` |
    | SLES 15 SP6 | `sudo zypper refresh && sudo zypper patch` | `sudo systemctl restart apache2 php-fpm` |

    Mit mod_php statt PHP-FPM genügt der Neustart des Webservers.

3. Prüfen, ob der Fix installiert ist (siehe unten).
4. i-doit testen: Anmelden, ein Objekt öffnen und speichern, das Admin-Center öffnen.

!!! info "Die Versionsnummer zeigt den Fix nicht immer an"
    Debian und Red Hat Enterprise Linux 10 (auch Rocky und Alma) übernehmen die neue PHP-Version, `php -v` zeigt danach `8.4.27` bzw. `8.3.36`. Ubuntu und SUSE bauen den Fix dagegen in ihre bestehende PHP-Version ein (Backport). `php -v` zeigt dort weiterhin z. B. `8.3.6` und nicht `8.3.36`. Ob der Fix installiert ist, erkennst du an der CVE-Nummer im Paket-Changelog, an der Paketversion im Sicherheitshinweis oder im Security-Tracker deiner Distribution:

    - Debian: `zgrep CVE-2026-10961 /usr/share/doc/php8.4-cli/changelog.Debian.gz` oder [Debian Security Tracker](https://security-tracker.debian.org/tracker/CVE-2026-109618)
    - Ubuntu: `zgrep CVE-2026-10961 /usr/share/doc/php8.3-cli/changelog.Debian.gz` oder [Ubuntu CVE-Seite](https://ubuntu.com/security/CVE-2026-109618)
    - RHEL/Rocky/Alma: `rpm -q php` mit der Version im Sicherheitshinweis vergleichen, für Rocky `8.3.36-1.el10_2` laut [RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070). `dnf updateinfo info --cve CVE-2026-109618` zeigt ihn erst, wenn die Spiegelserver die Advisory-Metadaten ausliefern, im Test Stunden nach den Paketen.
    - SLES/openSUSE: `zypper lp --cve=CVE-2026-109618` oder [SUSE CVE-Seite](https://www.suse.com/security/cve/CVE-2026-109618.html)

!!! danger "PHP aus dem Remi-Repository"
    Wenn du PHP aus `rpms.remirepo.net` bezogen hast: Laut PHP-Projekt erhält dieses Repository am 21. Oktober keine Updates. Wechsle auf die Pakete deiner Distribution.

Details zum Wechsel auf eine andere PHP-Version findest du unter [PHP aktualisieren](php-update.md) und in den [Systemvoraussetzungen](../installation/systemvoraussetzungen.md).

### On-Premises (Windows)

Das PHP-Projekt stellt die neuen Versionen auch als [Windows-Binaries](https://www.php.net/downloads.php?os=windows) bereit. Unter Windows tauschst du die PHP-Dateien gegen den korrigierten Build aus. Wie das für den i-doit Windows Installer, IIS und XAMPP geht und welcher Build (Thread Safe oder Non Thread Safe) jeweils passt, beschreibt die [ausführliche Anleitung für Windows](php-sicherheitsupdate-windows.md).

### PHP 8.1 oder älter

Das PHP-Projekt liefert für diese Versionen keine Updates mehr. Einige Distributionen und LTS-Anbieter stellen zurückportierte Fixes bereit, zum Beispiel Ubuntu 22.04 LTS für PHP 8.1 (Paket `8.1.2-1ubuntu2.28`, USN-8948-1). Frag bei deinem Anbieter nach oder hebe deine Installation auf eine unterstützte Version (8.2–8.4). PHP 8.2 erhält noch bis zum 31. Dezember 2026 Sicherheitsupdates.

### Wenn du nicht sofort aktualisieren kannst

Laut PHP-Projekt gibt es **keine vollständige Gegenmaßnahme**, nur das Update schließt die Lücken. Bis dahin verringern diese Schritte das Risiko:

- `session.upload_progress.enabled = 0` in der `php.ini` oder im FPM-Pool setzen und alle PHP-Worker neu starten. Das blockiert die bestätigten Angriffswege für CVE-2026-109619. `ini_set()` oder `.user.ini` reichen dafür nicht.
- Den i-doit-Server nur aus dem internen Netz oder per VPN erreichbar machen.

Die übrigen Maßnahmen aus der PHP-Ankündigung, zum Beispiel `memory_limit=-1` oder ein sehr kleines `post_max_size`, sind für i-doit nicht praktikabel.

### i-doit Appliance und Docker-Images

Für beide stellen wir aktualisierte Varianten mit der abgesicherten PHP-Version bereit. Als Appliance-Nutzer kannst du das Update wie oben über die Paketverwaltung einspielen. Für Docker ziehst du das aktualisierte Image, sobald es veröffentlicht ist.

### i-doit Cloud

Wenn du unsere Cloud nutzt, musst du nichts tun — wir aktualisieren deine Umgebung selbst.

## Quellen

- [Security advisory: Critical remote code execution vulnerabilities (php.net, 21.10.2026)](https://www.php.net/archive/2026.php#2026-10-21-5)
- [GHSA-w8hw-w9fx-j79w (CVE-2026-109618)](https://github.com/php/php-src/security/advisories/GHSA-w8hw-w9fx-j79w)
- [GHSA-6wmf-4rv5-p3rp (CVE-2026-109619)](https://github.com/php/php-src/security/advisories/GHSA-6wmf-4rv5-p3rp)
- [CERT-EU Security Advisory 2026-018: Critical Vulnerabilities in PHP](https://cert.europa.eu/publications/security-advisories/2026-018/)
