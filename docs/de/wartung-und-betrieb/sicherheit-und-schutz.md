---
title: Sicherheit und Schutz
description: i-doit-Installation absichern — von der Systemhärtung über TLS bis zur API-Absicherung
icon: material/security
status:
lang: de
---

# Sicherheit und Schutz

Die IT-Dokumentation ist das Gedächtnis deiner Organisation — sie enthält Netzwerkpläne, Zugangsdaten, Vertragsdetails und Infrastrukturwissen. Ein Angreifer, der Zugriff auf deine CMDB bekommt, hat damit einen Bauplan deiner gesamten IT. Deshalb verdient i-doit denselben Schutz wie jedes andere kritische System.

Dieser Artikel orientiert sich an den klassischen Schutzzielen: **Vertraulichkeit**, **Integrität**, **Verfügbarkeit**, **Authentizität** und **Autorisierung**. Die Maßnahmen sind nach dem Zeitpunkt gegliedert — vor der Installation, danach und im laufenden Betrieb.

!!! info "Ideensammlung, keine Pflichtliste"
    Nicht jede Maßnahme passt in jede Umgebung. Ein internes Testsystem braucht weniger Härtung als eine produktive CMDB mit 50.000 Objekten. Prüfe jede Empfehlung mit gesundem Menschenverstand — und dokumentiere bewusste Ausnahmen.

---

## Vor der Installation

Bevor du i-doit [installierst](../installation/index.md), solltest du das zugrundeliegende System härten. Die Beispiele beziehen sich auf **Debian GNU/Linux** bzw. **Ubuntu**, lassen sich aber auf andere Distributionen übertragen.

### Minimales Betriebssystem

Installiere nur, was für den Betrieb nötig ist: Apache, PHP und MariaDB. Je weniger Software läuft, desto kleiner ist die Angriffsfläche.

```shell
# Laufende Dienste anzeigen:
systemctl list-units --type=service --state=running

# Offene Ports prüfen:
sudo ss -tulpen
```

Deaktiviere und entferne nicht benötigte Dienste:

```shell
# Beispiel: Druckerdienst entfernen
sudo systemctl disable --now cups.service
sudo apt purge cups
```

Das Minimalprinzip gilt auch für Apache und PHP — deaktiviere nicht benötigte Module:

```shell
sudo a2dismod proxy status
sudo phpdismod xdebug
```

!!! warning "phpMyAdmin"
    Installiere phpMyAdmin **nicht** auf Produktivsystemen. Es macht die Datenbank über den Browser erreichbar und war in der Vergangenheit wiederholt von Sicherheitslücken betroffen. Nutze stattdessen die Kommandozeile (`mysql`) oder ein lokales Tool wie DBeaver über einen SSH-Tunnel.

### Weniger Rechte ist mehr

Arbeite niemals dauerhaft als Superuser (root). Verwende [sudo](https://wiki.debian.org/sudo) für Befehle, die Root-Rechte benötigen. Dienste wie Apache laufen unter eigenen Benutzern (z.B. `www-data`) — das begrenzt den Schaden, falls ein Dienst kompromittiert wird.

### SSH absichern

SSH ist neben Apache oft der einzige von außen erreichbare Dienst. Die Konfiguration liegt unter `/etc/ssh/sshd_config`.

**Root-Login verbieten:**

```shell
PermitRootLogin no
```

**Public-Key-Authentifizierung einrichten:**

```shell
ssh-keygen -t ed25519 -f ~/.ssh/idoit-server -C "admin@firma.de"
ssh-copy-id -i ~/.ssh/idoit-server.pub idoitadm@i-doit.example.org
```

**Passwort-Login deaktivieren** (erst nachdem der Key-Login funktioniert!):

```shell
PubkeyAuthentication yes
PasswordAuthentication no
```

Danach den SSH-Dienst neu starten:

```shell
sudo systemctl restart ssh.service
```

### Updates, Updates, Updates

Halte das gesamte System aktuell — das betrifft i-doit selbst, das Betriebssystem und alle angebundenen Drittsysteme. Sicherheitslücken in veralteter Software sind einer der häufigsten Angriffsvektoren.

Für automatische Sicherheitsupdates unter Debian/Ubuntu bieten sich [Unattended Upgrades](https://wiki.debian.org/UnattendedUpgrades) an:

```shell
sudo apt install unattended-upgrades
sudo dpkg-reconfigure unattended-upgrades
```

### MariaDB absichern

Führe als Erstes `mysql_secure_installation` aus — das entfernt Testdatenbanken, anonyme Benutzer und setzt ein Root-Passwort.

Prüfe anschließend die hinterlegten Benutzer:

```sql
SELECT user, host FROM mysql.user;
```

Lösche unerwünschte Einträge (z.B. Wildcards `%` oder externe Adressen). Erlaubt sind nur `localhost`, `127.0.0.1` und `::1`. Stelle sicher, dass der Standard-Port **3306 nicht von außen erreichbar** ist.

### PHP absichern

Halte PHP immer auf dem neuesten Patch-Stand. Die für i-doit erforderlichen Einstellungen stehen in den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md). Zusätzliche Härtung erreichst du über eine eigene Konfigurationsdatei:

```shell
sudo nano /etc/php/8.2/mods-available/zz_security.ini
```

```ini
;; Dateizugriff auf i-doit und temp beschränken:
open_basedir = "/var/www/html/:/tmp/"

;; Unnötige Funktionen deaktivieren:
disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority

;; PHP-Version nicht in HTTP-Headern verraten:
expose_php = Off
```

Aktivieren:

```shell
sudo phpenmod zz_security
sudo systemctl restart apache2.service
```

!!! tip "PHP-Version anpassen"
    Ersetze `8.2` durch die PHP-Version, die du im Einsatz hast. Welche Versionen i-doit unterstützt, findest du in den [Systemvoraussetzungen](../installation/systemvoraussetzungen.md).

### Backup und Restore

Backups sind deine letzte Verteidigungslinie — gegen Angriffe, Fehlbedienung und Hardwareausfälle. Lies den Artikel zum [Sichern und Wiederherstellen](daten-sichern-und-wiederherstellen/index.md).

Ebenso wichtig: **Teste den Restore regelmäßig.** Ein Backup, das sich nicht wiederherstellen lässt, ist wertlos.

**Backups verschlüsseln:** Wenn Backups auf externe Medien oder in die Cloud wandern, verschlüssele sie — z.B. mit `gpg`:

```shell
mysqldump -u idoit -p idoit_data | gzip | gpg --symmetric --cipher-algo AES256 -o backup_$(date +%F).sql.gz.gpg
```

Für den Notfall empfiehlt sich eine **zweite, unabhängige Instanz** — z.B. eine exportierte VM im OVF-Format auf einem USB-Stick im feuerfesten Safe.

---

## Transportverschlüsselung (TLS)

Sichere die Kommunikation zwischen Browser und Server mit TLS, damit Zugangsdaten und CMDB-Daten nicht im Klartext über das Netzwerk gehen.

### Let's Encrypt (empfohlen)

Der einfachste Weg zu einem vertrauenswürdigen Zertifikat ist [Let's Encrypt](https://letsencrypt.org/) mit dem ACME-Client [Certbot](https://certbot.eff.org/):

```shell
sudo apt install certbot python3-certbot-apache
sudo certbot --apache -d cmdb.firma.de
```

Certbot konfiguriert Apache automatisch und richtet die Zertifikatserneuerung per Cronjob ein. Teste die Erneuerung:

```shell
sudo certbot renew --dry-run
```

### Apache TLS-Konfiguration

Falls du eigene Zertifikate verwendest, nutze eine moderne TLS-Konfiguration. Den [Mozilla SSL Configuration Generator](https://ssl-config.mozilla.org/) für eine aktuelle, an deine Apache-Version angepasste Konfiguration.

Beispiel für Apache mit Security-Headern:

```apache
<IfModule mod_headers.c>
    # HTTP auf HTTPS umleiten
    Header always set Strict-Transport-Security "max-age=63072000; includeSubDomains"
    # Clickjacking verhindern
    Header always set X-Frame-Options "SAMEORIGIN"
    # MIME-Sniffing unterbinden
    Header always set X-Content-Type-Options "nosniff"
    # Referrer einschränken
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
    # Server-Version verstecken
    Header unset Server
</IfModule>

ServerSignature Off
ServerTokens    Prod

<IfModule mod_ssl.c>
    SSLProtocol             all -SSLv3 -TLSv1 -TLSv1.1
    SSLCipherSuite          ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305
    SSLHonorCipherOrder     off
    SSLCompression          off
    SSLSessionTickets       off

    SSLUseStapling          on
    SSLStaplingCache        shmcb:/var/run/ocsp(128000)
    SSLStaplingResponderTimeout 5
</IfModule>

<VirtualHost *:443>
    ServerName cmdb.firma.de
    DocumentRoot /var/www/html/

    <Directory /var/www/html/>
        Options FollowSymLinks
        AllowOverride All
    </Directory>

    SSLEngine on
    SSLCertificateFile      /etc/letsencrypt/live/cmdb.firma.de/fullchain.pem
    SSLCertificateKeyFile   /etc/letsencrypt/live/cmdb.firma.de/privkey.pem

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

# HTTP → HTTPS Redirect
<VirtualHost *:80>
    ServerName cmdb.firma.de
    Redirect permanent / https://cmdb.firma.de/
</VirtualHost>
```

Prüfe deine Konfiguration mit:

- [SSL Labs von Qualys](https://www.ssllabs.com/ssltest/) — TLS-Konfiguration bewerten
- [securityheaders.io](https://securityheaders.io/) — Security-Header prüfen

### Client-Zertifikate

Einen Schritt weiter geht die Absicherung über Client-Zertifikate: Dabei prüft nicht nur der Browser das Server-Zertifikat, sondern auch der Webserver verifiziert den Client. Das ist eine starke zusätzliche Authentifizierungsschicht, erfordert aber die Verteilung und Verwaltung der Client-Zertifikate.

### Datenverschlüsselung

**Festplattenverschlüsselung schützt bei Diebstahl.** Unter GNU/Linux ist **dm-crypt/LUKS** weit verbreitet — viele Distributionen bieten dies bereits bei der Installation an. Unter Windows stehen BitLocker und VeraCrypt zur Verfügung.

Besonders relevant, wenn die Hardware nicht im eigenen Rechenzentrum steht oder i-doit auf einem Notebook läuft.

---

## Nach der Installation

### Berechtigungen im Dateisystem

Setze restriktive Dateiberechtigungen:

```shell
cd /var/www/html/

# Apache die Kontrolle geben:
sudo chown www-data:www-data -R .

# Auf Lesen und Ausführen beschränken:
sudo find . -type d -exec chmod 550 {} \;
sudo find . -type f -exec chmod 440 {} \;

# Schreibrechte nur für Verzeichnisse die es brauchen:
for dir in log/ imports/ temp/ upload/; do
    sudo find "$dir" -type d -exec chmod 770 {} \;
done
```

Vor einem [Update](update-einspielen.md) die Einschränkungen temporär aufheben:

```shell
cd /var/www/html/
sudo find . -type d -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Sichere Passwörter

Setze von Anfang an sichere Passwörter für alle Konten. Die Standardpasswörter nach der Installation sind öffentlich bekannt — ändere sie sofort.

#### Standard-Benutzer in i-doit

Die Benutzer **admin**, **reader**, **author** und **editor** haben standardmäßig das Passwort gleich dem Benutzernamen. Das ist der wichtigste Punkt nach der Installation:

- Ändere alle Standardpasswörter
- Lege für jeden realen Benutzer ein eigenes [Personenobjekt](../grundlagen/struktur-it-dokumentation.md) an
- [Archiviere](../grundlagen/lebens-und-dokumentationszyklus.md) die Standard-Benutzer nach der Einrichtung

#### Admin-Center-Passwort

Das Passwort kannst du im [Admin-Center](../administration/admin-center.md) unter **Config** ändern oder direkt in der Datei `src/config.inc.php`.

#### MySQL-Benutzer

```sql
ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'EinSicheresPasswort!2026';
```

Das neue Passwort auch in der Systemdatenbank hinterlegen:

```sql
UPDATE idoit_system.isys_mandator
SET isys_mandator__db_pass = 'EinSicheresPasswort!2026'
WHERE isys_mandator__db_user = 'idoit';
```

Zusätzlich in `src/config.inc.php` oder im Admin-Center unter **Config** anpassen.

#### Linux-Benutzer

```shell
passwd
```

### CSRF-Schutz aktivieren

Cross-Site Request Forgery (CSRF) ist ein Angriff, bei dem ein Benutzer unbemerkt Aktionen in i-doit ausführt, weil er auf einen manipulierten Link klickt. Aktiviere den Schutz im [Admin-Center](../administration/admin-center.md) unter:

**System Settings → Security → CSRF-Token → Ja**

### Zwei-Faktor-Authentifizierung

i-doit bietet eine integrierte [Zwei-Faktor-Authentifizierung (2FA)](../benutzerauthentifizierung-und-verwaltung/2fa/index.md). Damit benötigen Benutzer neben dem Passwort einen zusätzlichen Code aus einer Authenticator-App. Besonders empfehlenswert für Admin-Konten und Benutzer mit Schreibzugriff.

Zusätzliche Authentifizierungsmechanismen lassen sich über den Apache Webserver einrichten, z.B. via [Single Sign-On (SSO)](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md).

### Session-Timeout konfigurieren

Standardmäßig bleiben Sitzungen in i-doit sehr lange aktiv. Für sicherheitskritische Umgebungen solltest du den Session-Timeout verkürzen, damit vergessene Browserfenster nicht dauerhaft offen bleiben.

Die Einstellung findest du in den [Experteneinstellungen](../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md) unter `session.time` — der Wert ist in Sekunden angegeben. Ein sinnvoller Wert für Produktivumgebungen liegt bei **3600** (1 Stunde).

### API absichern

Die [JSON-RPC API](../i-doit-add-ons/api/index.md) ist ein mächtiges Werkzeug — und ein attraktives Angriffsziel. Wenn du die API nutzt, solltest du sie gezielt absichern:

- **API-Key geheim halten** — der Key gewährt vollen Zugriff. Behandle ihn wie ein Passwort.
- **Zugriff per IP einschränken** — erlaube API-Zugriffe nur von bekannten Systemen. Das kannst du über die Apache-Konfiguration oder eine Firewall-Regel lösen:

```apache
<Location "/src/jsonrpc.php">
    Require ip 192.168.1.0/24
    Require ip 10.0.0.50
</Location>
```

- **Eigenen API-Benutzer anlegen** — verwende nicht den Admin-Account für API-Zugriffe. Lege einen dedizierten Benutzer mit minimalen Rechten an.
- **API deaktivieren** wenn sie nicht gebraucht wird — das Add-on kann in der [Verwaltung](../administration/verwaltung/import-und-schnittstellen/index.md) deaktiviert werden.

---

## Firewall und Netzwerk

### Offene Ports minimieren

Jeder geschlossene Port verkleinert die Angriffsfläche. Für i-doit reichen in der Regel:

| Port | Dienst | Bemerkung |
|------|--------|-----------|
| **443** | HTTPS | i-doit Web-Oberfläche |
| **22** | SSH | Administration (idealerweise nur aus dem Admin-Netz) |

MariaDB (3306) sollte **niemals** von außen erreichbar sein.

Eine einfache Firewall mit **ufw**:

```shell
sudo apt install ufw
sudo ufw default deny incoming
sudo ufw default allow outgoing
sudo ufw allow 443/tcp
sudo ufw allow 22/tcp
sudo ufw enable
```

!!! warning "Security by Obscurity"
    Nicht-Standard-Ports (z.B. 8080, 8022) bieten keinen echten Schutz. Port-Scanner wie nmap finden offene Ports in Sekunden.

Für Apache gibt es zusätzlich die Web Application Firewall [mod_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), die Angriffsmuster in HTTP-Anfragen erkennt und blockiert.

### Firewall-Freigaben für i-doit

Damit i-doit Updates herunterladen, Lizenzen prüfen und Online-Repositories nutzen kann, müssen folgende Ziele erreichbar sein:

| Host | Protokoll | Port | Zweck |
|------|-----------|------|-------|
| [login.i-doit.com](https://login.i-doit.com) | HTTPS | 443 | Updates für i-doit und Add-ons |
| [center.i-doit.com](https://center.i-doit.com) | HTTPS | 443 | Add-on & Subscription Center<br>IPs: `159.69.103.121`, `78.46.236.49`, `35.158.127.51`, `35.158.127.52`, `35.158.127.53`<br>IPv6: `2a01:4f8:c01f:289a::`, `2a01:4f8:1c17:a07c::` |
| [crm-gateway.i-doit.com](https://crm-gateway.i-doit.com) | HTTPS | 443 | Downloads über Lizenz-Token |
| [lizenzen.i-doit.com](https://lizenzen.i-doit.com) | HTTPS | 443 | Lizenzen über Token abrufen |
| [reports-ng.i-doit.org](https://reports-ng.i-doit.org) | HTTPS | 443 | Online-Repository für [Reports](../auswertungen/report-manager.md) |
| [r.i-doit.com](https://r.i-doit.com) | HTTPS | 443 | Online-Repository für [Vorlagen](../i-doit-add-ons/documents/index.md) |
| [i-doit.com](https://www.i-doit.com) | HTTPS | 443 | Update-Check |

### Schnittstellen zu Dritt-Applikationen

| Schnittstelle | Protokoll | Standard-Port |
|---------------|-----------|---------------|
| [E-Mails senden](../auswertungen/benachrichtigungen.md) | SMTP | 25 / 465 / 587 |
| [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | LDAP / LDAPS | 389 / 636 |
| [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | PostgreSQL | 25321 |
| [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | HTTP | 9000 |
| [JDisc Discovery GraphQL](../daten-konsolidieren/jdisc/index.md) | HTTPS | 443 |
| [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | Livestatus | 6557 |
| [Znuny Help Desk](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automatisierung-und-integration/service-desk/request-tracker.md) | HTTP/HTTPS | 80 / 443 |

### Vertrauenswürdiges Netzwerk

- **Kein direkter Internetzugang** — stelle i-doit hinter einen Reverse Proxy oder in ein internes Netz. Für Updates nutze einen HTTP-Proxy.
- **Dediziertes Admin-Netz** — erlaube SSH nur aus dem Verwaltungsnetz, damit nur die Kernfunktion (HTTPS) aus dem Büronetz erreichbar ist.

### IPv4 vs. IPv6

Wenn IPv6 in deinem Netzwerk nicht verwendet wird, deaktiviere es auf dem Server. Wird es genutzt, müssen Firewall-Regeln und Dienstkonfigurationen **beide Protokolle** berücksichtigen — eine Firewall, die nur IPv4-Regeln hat, schützt nicht vor IPv6-Zugriffen.

---

## Sicherheits-Frameworks

Unter GNU/Linux schützen [SELinux](https://de.wikipedia.org/wiki/SELinux) und [AppArmor](https://de.wikipedia.org/wiki/AppArmor) zusätzlich vor unberechtigten Aktionen. Damit kannst du Apache so einsperren, dass er nur auf bestimmte Verzeichnisse zugreifen darf — selbst wenn ein Angreifer eine Schwachstelle in PHP ausnutzt.

### Angriffe automatisch abwehren

[fail2ban](http://www.fail2ban.org/) analysiert Log-Dateien und sperrt automatisch IP-Adressen nach wiederholten fehlgeschlagenen Login-Versuchen:

```shell
sudo apt install fail2ban
```

Vorkonfigurierte Regeln gibt es für SSH, Apache und MariaDB. Für i-doit selbst kannst du eine eigene Regel erstellen, die fehlgeschlagene Logins in den Apache-Logs erkennt.

---

## Monitoring und Logs

### System überwachen

Überwache das System mit einem [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) wie Checkmk oder Nagios. Wichtige Metriken:

- CPU- und Speicherauslastung
- Verfügbarer Festplattenspeicher
- Apache- und MariaDB-Prozesse
- Zertifikatsgültigkeit (TLS)
- Backup-Erfolg

### Logs auswerten

Die i-doit-eigenen Log-Dateien liegen im Verzeichnis `log/` der Installation. Werte sie regelmäßig aus — insbesondere nach Updates und bei unerwartetem Verhalten.

Für die automatische Log-Überwachung eignet sich [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps):

```shell
sudo apt install logwatch
```

Logwatch analysiert Logs von Apache, SSH und weiteren Diensten und verschickt täglich einen Report per E-Mail.

Falls das System E-Mails versenden soll, richte einen SMTP-Relay ein — z.B. mit [msmtp](https://marlam.de/msmtp/).

---

## Regelmäßige Sicherheitsprüfung

Sicherheit ist kein einmaliges Projekt, sondern ein fortlaufender Prozess. Führe regelmäßig (z.B. quartalsweise) eine Prüfung durch:

| Prüfpunkt | Wie |
|-----------|-----|
| Betriebssystem aktuell? | `apt update && apt list --upgradable` |
| PHP-Version noch unterstützt? | [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) prüfen |
| i-doit auf aktuellem Stand? | [Release Notes](../versionshistorie/release-notes/index.md) prüfen |
| Standard-Passwörter geändert? | Login mit admin/admin testen |
| Backup funktionsfähig? | Restore auf Testsystem durchführen |
| TLS-Konfiguration aktuell? | [SSL Labs](https://www.ssllabs.com/ssltest/) |
| Ungenutzte Benutzer vorhanden? | Benutzerliste in i-doit prüfen |
| Offene Ports minimal? | `sudo ss -tulpen` |
| API-Zugriff eingeschränkt? | Apache-Logs auf unbekannte IPs prüfen |
| Dateiberechtigungen korrekt? | `find /var/www/html -perm -o+w` |

---

## Hochverfügbarkeit

!!! info "Wirklich nötig?"
    In den meisten Fällen ist ein einzelnes, gut gewartetes System ausreichend. Die Systemanforderungen von i-doit sind moderat. Bevor du ein redundantes Setup planst, investiere lieber in ein durchdachtes Backup-Konzept und schnelle Wiederherstellbarkeit.

Für erhöhte Verfügbarkeit kannst du die Dienste auf dedizierten Systemen betreiben: Apache hinter einem Load Balancer, MariaDB in einem Cluster (z.B. mit [MaxScale](https://mariadb.com/products/mariadb-maxscale)), Dateien in einem verteilten Storage.

Im Kleinen helfen: RAID, ECC-RAM und redundante Netzteile an unterschiedlichen Stromphasen (idealerweise mit USV).

## Weiterführende Links

- [IT-Grundschutz des BSI](https://www.bsi.bund.de/grundschutz/) — Systematische IT-Sicherheit
- [Mozilla SSL Configuration Generator](https://ssl-config.mozilla.org/) — TLS-Konfiguration generieren
- [CIS Benchmarks](https://www.cisecurity.org/cis-benchmarks) — Härtungsrichtlinien für Betriebssysteme und Dienste
