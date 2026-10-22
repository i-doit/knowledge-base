---
title: PHP-Sicherheitsupdate einspielen (Rocky Linux 10)
description: Die PHP-Sicherheitslücken CVE-2026-109618 und CVE-2026-109619 auf Rocky Linux 10 mit Bordmitteln schließen und i-doit danach prüfen
icon:
status:
lang: de
---

# PHP-Sicherheitsupdate einspielen (Rocky Linux 10)

Am 21.10.2026 hat das PHP-Projekt zwei kritische Lücken veröffentlicht (**CVE-2026-109618** und **CVE-2026-109619**,
jeweils Remote Code Execution, CVSS 9.2). Betroffen sind alle Betriebsarten, in denen PHP Anfragen in langlebigen
Prozessen verarbeitet, also PHP-FPM und Apache mit mod_php und damit jede i-doit-Installation. Das höchste Risiko sieht
das PHP-Projekt bei mod_php. Eine vollständige Gegenmaßnahme außer dem Update gibt es nicht.

Diese Anleitung beschreibt das Update auf **Rocky Linux 10** mit dem Standardpaket **PHP 8.3** aus dem Repository
AppStream, so wie es die [Installationsanleitung für Rocky Linux](../installation/manuelle-installation/rocky-linux/index.md)
einrichtet. Fremdquellen (etwa Remi's RPM repository) werden hier nicht behandelt. Für **Red Hat Enterprise Linux 10** und
AlmaLinux 10 gilt der Ablauf gleich, nur der Sicherheitshinweis heißt dort RHSA beziehungsweise ALSA statt RLSA.

!!! note "Getestet am 22.10.2026 mit i-doit 39.1 auf Rocky Linux 10.2, PHP-FPM 8.3"
    Rocky Linux hat die korrigierten Pakete in der Nacht zum 22.10. bereitgestellt, rund neun Stunden nach der
    Veröffentlichung auf php.net, der Sicherheitshinweis [RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070)
    folgte gut eine Stunde später. Alle Ausgaben in dieser Anleitung stammen aus diesem Lauf.

## Kurzfassung

<div class="steps" markdown>
1. Sicherung oder Snapshot anlegen
2. Pakete aktualisieren:
    ```shell
    sudo dnf --refresh update 'php*'
    ```
3. PHP-FPM und Apache neu starten:
    ```shell
    sudo systemctl restart php-fpm httpd
    ```
4. Nachweis über die Paketversion und den Sicherheitshinweis:
    ```shell
    rpm -q php php-fpm
    sudo dnf updateinfo info --cve CVE-2026-109618
    ```
5. i-doit prüfen: Login, ein Objekt speichern, Admin Center öffnen
</div>

## Voraussetzungen

- Rocky Linux 10 mit PHP aus dem Repository AppStream. Prüfen:
    ```shell
    cat /etc/os-release | head -3
    dnf repolist
    rpm -q php-fpm
    ```
    `dnf repolist` muss `appstream` und `baseos` enthalten. Die Paketversion endet auf `.el10_2` (oder `.el10_1`,
    je nach Minor-Release). Endet sie auf `.remi` oder ähnlich, stammt PHP aus einer Fremdquelle und diese Anleitung
    passt nicht.
- Root-Rechte oder `sudo`.
- Ein Wartungsfenster von wenigen Minuten. Während des Neustarts von PHP-FPM ist i-doit kurz nicht erreichbar.

## 1. Sichern

Vor dem Update einen Snapshot der virtuellen Maschine anlegen oder mindestens das i-doit-Verzeichnis, die Datenbanken
und die Konfiguration unter `/etc/php.ini`, `/etc/php.d/`, `/etc/php-fpm.d/` und `/etc/httpd/` sichern, siehe
[Daten sichern und wiederherstellen](daten-sichern-und-wiederherstellen/index.md).
Bei einer VM ist der sauberste Weg: herunterfahren, Snapshot anlegen, wieder starten.

## 2. Ausgangsstand festhalten

```shell
php -v
rpm -qa 'php*' --qf '%{NAME} %{VERSION}-%{RELEASE}\n' | sort
```

Beispiel vor dem Update:

```text
PHP 8.3.33 (cli) (built: Jul 28 2026 17:56:10) (NTS gcc x86_64)
php 8.3.33-1.el10_2
php-cli 8.3.33-1.el10_2
php-common 8.3.33-1.el10_2
php-fpm 8.3.33-1.el10_2
```

Anders als Ubuntu oder SUSE übernimmt Red Hat in Enterprise Linux 10 die jeweils neue PHP-Patchversion komplett
(„rebase“). Nach dem Update zeigt `php -v` deshalb eine höhere Versionsnummer, hier 8.3.36.

## 3. Update einspielen

```shell
sudo dnf --refresh check-update 'php*'
sudo dnf update 'php*'
```

`check-update` zeigt vorab, ob die korrigierten Pakete schon im Repository liegen (Rückgabewert 100 bedeutet „Updates
vorhanden“, 0 bedeutet „nichts anstehend“):

```text
php.x86_64                           8.3.36-1.el10_2                   appstream
php-cli.x86_64                       8.3.36-1.el10_2                   appstream
php-fpm.x86_64                       8.3.36-1.el10_2                   appstream
```

`dnf update 'php*'` aktualisiert alle PHP-Pakete gemeinsam:

```text
Upgrading:
 php                x86_64       8.3.36-1.el10_2          appstream       7.8 k
 php-cli            x86_64       8.3.36-1.el10_2          appstream       3.6 M
 php-fpm            x86_64       8.3.36-1.el10_2          appstream       1.9 M
Transaction Summary
Upgrade  14 Packages
Complete!
```

!!! warning "Noch nichts da? Metadaten erzwingen und Spiegelserver abwarten"
    `dnf` hält die Paketlisten bis zu 48 Stunden im Cache. Im Test meldete `dnf check-update` noch „nichts anstehend“,
    obwohl die Pakete auf dl.rockylinux.org seit sechs Stunden lagen. Erst `--refresh` (oder `sudo dnf clean metadata`)
    holte die neue Liste. Außerdem erhalten die Spiegelserver die Pakete zeitversetzt: Beim Download erschienen Zeilen wie
    `[MIRROR] php-8.3.36-1.el10_2.x86_64.rpm: Status code: 404`. Das ist kein Fehler, `dnf` weicht selbst auf den
    nächsten Spiegel aus. Bricht die Transaktion ganz ab, einige Minuten warten und den Befehl wiederholen, nicht auf
    Fremdquellen ausweichen.

!!! note "Paketgruppe php8.4"
    Rocky Linux 10 liefert zusätzlich die Paketgruppe `php8.4` (Pakete `php8.4`, `php8.4-fpm`, …). Wer damit installiert
    hat, aktualisiert mit `sudo dnf update 'php8.4*'`; der zugehörige Sicherheitshinweis ist
    [RLSA-2026:87071](https://errata.rockylinux.org/RLSA-2026:87071). Modul-Streams (`dnf module enable php:8.3`) gibt es
    in Enterprise Linux 10 nicht mehr, `dnf module list php` meldet „No matching Modules to list“.

## 4. Dienste neu starten

Das Paket startet PHP-FPM beim Update nicht neu, die alten Prozesse laufen mit der verwundbaren Binärdatei weiter.
Beide Dienste explizit neu starten und den Zustand prüfen:

```shell
sudo systemctl restart php-fpm httpd
systemctl is-active php-fpm httpd
```

Beide Zeilen müssen `active` lauten. Welche Betriebsart läuft, zeigt `httpd -M | grep -E 'php|proxy_fcgi'`:
`proxy_fcgi_module` bedeutet PHP-FPM, `php_module` bedeutet mod_php. Die Installationsanleitung richtet PHP-FPM ein.
Bei mod_php genügt `sudo systemctl restart httpd`, das Update ist dort aber besonders dringend.

Ob noch Prozesse mit alten Bibliotheken laufen, zeigt `sudo dnf needs-restarting` (Plugin `dnf-plugins-core`, auf
Rocky Linux 10 vorinstalliert). Nach dem Neustart der beiden Dienste bleibt die Ausgabe leer.

## 5. Nachweis: Ist die Lücke geschlossen?

Zuerst die installierte Version prüfen:

```shell
php -v
rpm -q php php-fpm
```

Erwartete Ausgabe:

```text
PHP 8.3.36 (cli) (built: Oct 19 2026 14:00:34) (NTS gcc x86_64)
php-8.3.36-1.el10_2.x86_64
php-fpm-8.3.36-1.el10_2.x86_64
```

Die Version `8.3.36-1.el10_2` (oder höher) ist genau die aus dem Sicherheitshinweis
[RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070) („Important: php security update“, veröffentlicht am
22.10.2026). Er nennt CVE-2026-109618, CVE-2026-109619 und zusätzlich CVE-2026-91765 (Denial of Service im SOAP-Parser).

Den Sicherheitshinweis kann `dnf` auch lokal zeigen, sobald die Spiegelserver die Advisory-Metadaten ausliefern:

```shell
sudo dnf updateinfo info --cve CVE-2026-109618
sudo dnf updateinfo list --all --with-cve | grep 'php-8.3.36'
```

Erwartet wird eine Zeile wie `CVE-2026-109618  Important/Sec. php-8.3.36-1.el10_2.x86_64` und der Eintrag
`RLSA-2026:87070` mit dem Status „Installed“.

!!! warning "Der RPM-Changelog nennt keine CVE-Nummern"
    `rpm -q --changelog php` zeigt für dieses Update nur `rebase to 8.3.36`. Anders als auf Debian und Ubuntu ist der
    Changelog hier kein Nachweis. Zuverlässig sind die Paketversion im Vergleich mit dem Sicherheitshinweis und die
    Ausgabe von `dnf updateinfo`.

!!! note "Advisory-Metadaten kommen später als die Pakete"
    Im Test lagen die Pakete ab 00:58 Uhr auf den Servern, der Sicherheitshinweis RLSA-2026:87070 war ab 02:08 Uhr auf
    errata.rockylinux.org sichtbar, aber um 07:00 Uhr hatte `dnf updateinfo` ihn noch nicht. Zeigt `dnf updateinfo` nichts,
    obwohl `rpm -q php` bereits `8.3.36-1.el10_2` meldet, ist das Update trotzdem installiert.

Für Red Hat Enterprise Linux 10 gilt die [Red Hat CVE-Seite zu CVE-2026-109618](https://access.redhat.com/security/cve/CVE-2026-109618)
(Einstufung „Important“, CVSS 8.1 nach Red Hat-Bewertung) mit dem zugehörigen RHSA.

## 6. i-doit prüfen

1. `http://<i-doit-host>/` im Browser öffnen und anmelden.
2. Ein beliebiges Objekt öffnen, ein Feld ändern, speichern.
3. `http://<i-doit-host>/admin/` öffnen und anmelden. Die Seiten müssen ohne Fehlermeldung laden.

Bleibt die Seite weiß oder meldet Apache einen Fehler 500: `journalctl -u php-fpm -n 50`, `/var/log/php-fpm/error.log`
und `/var/log/httpd/idoit_error.log` prüfen und mit `php -m` kontrollieren, ob alle benötigten Erweiterungen geladen
sind.

## Stolperfallen

- **Veraltete Paketlisten.** Ohne `--refresh` oder `dnf clean metadata` sieht `dnf` das Update bis zu zwei Tage nicht.
- **Spiegelserver hinken nach.** `[MIRROR] … 404`-Zeilen beim Download sind normal, `dnf` wechselt den Spiegel selbst.
- **PHP-FPM läuft mit alter Binärdatei weiter.** Das Paket startet den Dienst nicht neu. Auch `dnf-automatic`, falls
  eingerichtet, spielt nur das Paket ein. `systemctl show -p ActiveEnterTimestamp php-fpm` zeigt, wann der Dienst
  zuletzt gestartet wurde.
- **`rpm -q --changelog` ohne CVE.** Nachweis über Paketversion und `dnf updateinfo`, siehe Schritt 5.
- **Paketgruppe php8.4** hat einen eigenen Sicherheitshinweis, siehe Schritt 3.
- **Zwischenlösung bis zum Paket.** `session.upload_progress.enabled = 0` in `/etc/php.d/i-doit.ini` mindert eine
  der beiden Lücken; die andere lässt sich ohne Nebenwirkungen auf i-doit nicht abmildern. Den Webserver bis zum
  Update nur aus dem internen Netz erreichbar machen.

## Rückweg

Snapshot zurücksetzen oder die gesicherten Verzeichnisse wiederherstellen. `dnf history undo` könnte die Transaktion
zurückrollen, ist wegen der offenen Lücke aber nicht sinnvoll.

## Weiterführende Links

- [PHP-Sicherheitshinweis vom 21.10.2026](https://www.php.net/archive/2026.php#2026-10-21-5)
- [RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070) (php), [RLSA-2026:87071](https://errata.rockylinux.org/RLSA-2026:87071) (php8.4)
- [Red Hat CVE-2026-109618](https://access.redhat.com/security/cve/CVE-2026-109618), [CVE-2026-109619](https://access.redhat.com/security/cve/CVE-2026-109619)
- [Kritisches PHP-Sicherheitsupdate (Oktober 2026)](php-sicherheitsupdate.md): Überblick für alle Distributionen
- [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
