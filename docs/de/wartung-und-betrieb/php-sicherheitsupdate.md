---
title: Kritisches PHP-Sicherheitsupdate (Oktober 2026)
description: Zwei kritische RCE-Lücken in PHP (CVE-2026-109618/-109619) — wer betroffen ist und was i-doit-Betreiber jetzt tun müssen
icon:
status:
lang: de
---

# Kritisches PHP-Sicherheitsupdate (Oktober 2026)

Das PHP-Projekt hat für den **21. Oktober 2026 um 16:00 Uhr MESZ** (14:00 UTC) ein außerplanmäßiges Sicherheitsupdate angekündigt. Es soll zwei kritische Schwachstellen in PHP schließen (**CVE-2026-109618** und **CVE-2026-109619**, beide CVSS v4.0 9.2), über die Angreifer aus der Ferne Code ausführen können.

!!! info "Ab 16:00 Uhr mehr Informationen"
    Technische Details, die betroffenen PHP-Versionen und die abgesicherten Versionen veröffentlicht das PHP-Projekt erst mit dem Release. Wir ergänzen diese Seite, sobald die Informationen vorliegen.

!!! warning "Jetzt vorbereiten"
    Da i-doit auf PHP aufsetzt, sind i-doit-Installationen betroffen. Die Lücke liegt in **PHP, nicht in i-doit** — ein i-doit-Update ist nicht erforderlich. Bereite das PHP-Update jetzt vor und spiele es ein, sobald es verfügbar ist.

## Wer ist betroffen?

Nach bisherigem Stand betrifft die Lücke praktisch alle PHP-Versionen. Welche Versionszweige einen Fix erhalten, gibt das PHP-Projekt mit dem Release bekannt. **PHP 8.1 und älter** sind bereits End-of-Life und erhalten erfahrungsgemäß keine Patches mehr.

Unterstützte i-doit-Installationen laufen auf PHP 8.2–8.4. Aktualisiere alle Installationen, sobald das Update verfügbar ist.

## Was du tun musst

### On-Premises

Sobald deine Distribution die abgesicherten Pakete bereitstellt:

1. PHP-Update über deine Paketverwaltung einspielen:
    - Debian/Ubuntu: `sudo apt update && sudo apt upgrade`
    - RHEL/Rocky/Alma: `sudo dnf update`
    - SUSE: `sudo zypper update`
2. Webserver bzw. PHP-FPM neu starten, z. B. `sudo systemctl restart php8.3-fpm apache2`
3. Details zum Versionswechsel: siehe [PHP aktualisieren](php-update.md) und [Systemvoraussetzungen](../installation/systemvoraussetzungen.md).

!!! note "PHP 8.1 oder älter?"
    Für diese Versionen ist kein Fix zu erwarten. Hebe deine Installation zeitnah auf eine unterstützte Version (8.2–8.4). Bis dahin: Server nicht direkt aus dem Internet erreichbar machen.

### i-doit Appliance und Docker-Images

Für beide stellen wir aktualisierte Varianten mit der abgesicherten PHP-Version bereit. Als Appliance-Nutzer kannst du das Update wie oben über die Paketverwaltung einspielen. Für Docker ziehst du das aktualisierte Image, sobald es veröffentlicht ist.

### i-doit Cloud

Wenn du unsere Cloud nutzt, musst du nichts tun — wir aktualisieren deine Umgebung selbst.

## Quellen

- Offizielle PHP-Ankündigung: [Upcoming Critical PHP Security Release (php.net, 20.10.2026)](https://www.php.net/archive/2026.php#2026-10-20-1)
- [CERT-EU Security Advisory 2026-018: Critical Vulnerabilities in PHP](https://cert.europa.eu/publications/security-advisories/2026-018/)
- CVE-2026-109618, CVE-2026-109619
