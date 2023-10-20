# Sicherheit und Schutz

Die IT-Dokumentation umfasst in vielen Fällen sehr sensible Daten, die geschützt werden müssen. In diesem Artikel beleuchten wir, welche Schutzmechanismen greifen, um eine Installation von i-doit abzusichern. Insbesondere arbeiten wir auf die Schutzziele Vertraulichkeit, Integrität, Verfügbarkeit, Authentizität und Autorisierung hin.

!!!info "Warum ist dieser Artikel so lang?"

    Zugegeben, der Artikel ist lang. Das Thema Informationssicherheit von Web-Applikationen ist ein sehr weites Feld, über das man lang und breit diskutieren kann.

    Trotzdem: Aufgrund der Masse an sinnvollen Maßnahmen kratzen wir lediglich an der Oberfläche und verweisen zu weiterführenden Informationen, wo es nur geht. Dieser Artikel ist daher als Ideensammlung gedacht. Die einzelnen Maßnahmen sollten stets mit gesundem Menschenverstand und dem notwendigen Know How hinterfragt werden.

!!!info "Warum nicht Teil der Installation?"

    Die hier aufgeführten Tipps gehören nicht zum normalen Umfang einer [Installation von i-doit](../installation/index.md) und stellen keine [Systemanforderungen](../installation/systemvoraussetzungen.md) dar. Es handelt sich um zusätzliche Sicherheitsmaßnahmen, die überwiegend das Betriebssystem und die installierten Pakete betreffen.

Vor der Installation von i-doit
-------------------------------

Bevor i-doit [installiert](../installation/index.md) wird, können wir bereits einige Maßnahmen durchführen, um das System, auf dem i-doit fußt, zu härten. Als Beispiel dient ein [Debian GNU/Linux](../installation/manuelle-installation/debian.md), auf dem i-doit installiert ist bzw. werden soll.

### Weniger Rechte ist mehr

Wer auf dem Betriebssystem mit einem Benutzer angemeldet ist, der nicht von vornherein alle Rechte besitzt, kann potenziell weniger (unabsichtlichen) Schaden anrichten. **Auf die Anmeldung als Superuser (root) sollte verzichtet werden.** Etabliert hat sich stattdessen der Einsatz von [sudo](https://wiki.debian.org/sudo), um temporär Befehle mit den Rechten von root ausführen zu können.

Viele Dienste laufen mit eigenen Usern/Gruppen. Apache unter Debian GNU/Linux läuft mit dem User www-data und der gleichnamigen Gruppe.

### SSH absichern

Neben Apache ist SSH der einzige Dienst, der von außen zu erreichen ist. **SSH dient der Administration des Systems über die Kommandozeile.** Die Konfiguration des SSH-Servers befindet sich unter **/etc/ssh/sshd\_config**. Die Standard-Installation bietet bereits ein gutes Maß an Sicherheit, die wir allerdings noch weiter erhöhen können.

Um gängige Brute-Force-Attacken einzuschränken, sollte die Anmeldung mit dem Superuser (root) nicht erlaubt sein:

    PermitRootLogin no

Anstatt sich Passwörter zu merken, bietet sich das Public-Key-Verfahren an. Dazu wird auf dem Client ein Paar aus Public und Private Key erzeugt:

    ssh-keygen -t rsa -f mykey -b 4096 -C myemail@example.org

Auf den Server wird anschließend der Public Key kopiert:

    ssh-copy-key -i ~/.ssh/mykey.pub idoitadm@i-doit.example.org

Und in der Konfiguration vom SSH-Server stellen wir das Verfahren von Passwörtern auf Public Keys um:

    PubkeyAuthentication yes
    PasswordAuthentication no

Der SSH-Dienst muss anschließend neu gestartet werden:

    sudo systemctl restart ssh.service

### Update, Updates, Updates

Der wohl wichtigste Tipp ist: **Das System muss auf einem aktuellen Stand sein.** Im IT-Sprech: Ohne Patchmanagement funktioniert Informationssicherheit nicht. Insbesondere ist darauf zu achten, die i-doit-Installation auf dem neuesten Stand zu halten, das darunter liegende Betriebssystem, die Clients, die auf das i-doit zugreifen, inklusive Webbrowser. Auch Dritt-Systeme, die mit i-doit kommunizieren, sollten stets aktuell gehalten werden.

Manuell Updates einspielen ist lästig. Wer keine zentrale Steuerung und Automatisierung einsetzt, kann die Updates dem Betriebssystem überlassen. Unter Debian GNU/Linux bieten sich die [Unattended Updates](https://wiki.debian.org/UnattendedUpgrades) an. Hierüber werden die Paket-Repositories abgerufen, (Sicherheits-)Updates bis hin zu Upgrades von Paketen durchgeführt. Zudem werden die Administratoren per E-Mail benachrichtigt.

### Minimales Betriebssystem

Ein minimales Betriebssystem zeichnet sich dadurch aus, dass nur Anwendungen und Dienste installiert sind, die wirklich essentiell für den Betrieb sind. **Es gilt, das gesamte System auf seine Kernfunktion (hier: i-doit) zu beschränken.** Dass heißt, wir benötigen im Grunde nur Apache, PHP und MariaDB/MySQL. Und ein paar zusätzliche Anwendungen und Dienste, die in diesem Artikel erwähnt werden. Auf alles andere wie eine grafische Oberfläche mit Desktop, einen Drucker-Dienst oder einen Minecraft-Server kann getrost verzichtet werden.

Eine gewöhnliche Installation bringt teilweise unnötigen Ballast mit, von dem wir uns erst einmal befreien müssen. Dazu sollten wir uns die laufenden Prozesse und offenen Ports genauer anschauen:

    # Laufende Dienste, die von Systemd verwaltet werden:
    systemctl list-units

    # Laufende Prozesse und Systemresourcen übersichtlich anzeigen lassen:
    htop

    # Derzeit offene Ports:
    sudo netstat -tulpen

Was überflüssig ist, kann gestoppt, deaktiviert oder gar vom System gelöscht werden. Hier ein Beispiel:

    # Beispiel: Druckerdienst CUPS deaktivieren und stoppen:
    sudo systemctl disable cups.service
    sudo systemctl stop cups.service

    # Druckerdienst CUPS löschen:
    sudo apt remove cups

    # Druckerdienst CUPS inkl. Konfiguration löschen:

    sudo apt purge cups

**Das Minimalprinzip gilt nicht nur für das Betriebssystem, sondern auch für die installierten Dienste und Anwendungen.** Für Apache und PHP gibt es weitaus mehr Module, als für den reibungslosen Betrieb von i-doit benötigt werden. Beispiele: mod_proxy für Apache oder xdebug für PHP sollten nur installiert und aktiviert sein, wenn diese wirklich benötigt werden.

Deaktivieren lassen sich die Module mit diesen Befehlen:

    sudo a2dismod proxy
    sudo phpdismod xdebug

Da i-doit im Hintergrund MariaDB/MySQL einsetzt, installieren einige Kunden die Web-Applikation [phpMyAdmin](https://www.phpmyadmin.net/). Wir raten dringend davon ab, denn dadurch wird die abgeschottete Datenbank nach außen hin verfügbar gemacht. phpMyAdmin ist in den vergangenen Jahren immer wieder durch Sicherheitslücken negativ aufgefallen, was die Problematik nochmals verschärfen könnte. phpMyAdmin leistet gute Dienste, aber nicht auf einem Produktivsystem mit sensiblen Daten.

### Backup & Restore

**Backups sind essentiell.** Wer keine Sicherungen macht, handelt grob fahrlässig. Dass Backups gemacht werden müssen, ist also jedem klar. Doch wie? Für i-doit haben wir einen eigenen Artikel zum [Sichern und Wiederherstellen der IT-Dokumentation](daten-sichern-und-wiederherstellen/index.md). Dabei haben wir außer acht gelassen, wie oft (täglich, wöchentlich, …) und mit welchen Strategien (Vollsicherung, inkrementell, differentiell, Image) vorgegangen werden sollte. Das bleibt auch jeder Organisation selbst überlassen, denn die Anforderungen an akzeptablem Datenverlust sowie Ausfall- und Wiederherstellungszeiten sind unterschiedlich.

**Ebenso wichtig wie das Backup selbst ist die Wiederherstellung**, also der Restore. Wer den Restore nicht testet, hat auch kein funktionierendes Backup, heißt es oft.

Schnell kommt eine weitere wichtige Frage: Was ist, wenn die gesamte Infrastruktur nicht zur Verfügung steht und die IT-Dokumentation davon ebenso betroffen ist? Unser Tipp: Hierbei hilft **eine zweite Instanz, die unabhängig von der übrigen IT-Infrastruktur läuft**. Viele Kunden setzen i-doit auf einer virtuellen Maschine ein. Diese kann man regelmäßig exportieren und sicher verwahren, beispielsweise auf einem USB-Stick in einem feuerfesten Safe. Im wahrsten Sinne des Wortes ein Cold Standby. Im Fall des Falles kann man die virtuelle Maschine dann auf einem Notebook starten. Für die maximale Kompatibilität bietet sich das [OVF-Dateiformat](https://de.wikipedia.org/wiki/Open_Virtualization_Format) für virtuelle Maschinen an. Dieses Format wird von den gängigen Virtualisierern wie VMware und VirtualBox unterstützt.

### MariaDB/MySQL absichern

**Die gröbste Absicherung von MariaDB/MySQL überlassen wir dem Kommandozeilenwerkzeug mysql_secure_installation.** Dies richtet unter anderem ein Passwort für den Benutzer root ein (wenn noch nicht geschehen). Anschließend sollten wir uns auf dem DBMS einmal umschauen. Dazu melden wir uns als root an:

    mysql -uroot -p -hlocalhost

Nun verschaffen wir uns einen Überblick über die derzeit hinterlegten Benutzer:

    SELECT * FROM mysql.user;

Nicht gewollte Einträge sollten wir löschen. Unerwünschte Benutzer haben unter Host ein Wildcard (%) oder von außen erreichbare Adressen. Erwünscht sind die Hosts localhost, 127.0.0.1 (IPv4) und ::1 (IPv6).

Wichtig ist, dass der Dienst von außen nicht erreichbar ist. Meist läuft der Dienst unter dem Standart-Port 3306. Auch für MariaDB/MySQL existieren dedizierte **Application Firewalls**. Diese sind unter anderem in der Lage, schadhafte SQL-Queries zu unterbinden. Eine konkrete Empfehlung haben wir derzeit nicht.

### PHP absichern

Wir schließen uns den üblichen Rants zu PHP keineswegs an, denn die Scriptsprache lässt sich für unsere Zwecke angemessen "härten". Eine wichtige Botschaft ist: **PHP sollte immer auf dem neusten Patch-Stand sein.** Hierbei ist zu beachten, welche Major-Versionen von PHP (5.x, 7.x) von den PHP-Entwicklern und welche PHP-Pakete von der genutzten Distribution unterstützt werden. Distributionen setzen oftmals nicht auf die neusten Major-Versionen, sondern pflegen ältere, eher stabilere Versionen. Diese werden mit Bug- und Security-Fixes gepatcht. Updates von PHP sollten also immer schnellstmöglich eingespielt werden.

Für den Betrieb von i-doit erforderliche haben wir bereits in den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) beschrieben. **Diese Einstellungen lassen sich durch zusätzliche erweitern.** Dafür erstellen wir eine neue .ini-Datei:

    sudo editor /etc/php/7.2/mods-available/zz_security.ini

Dort hinterlegen wir unsere Einstellungen:

    ;; Einschränkung auf Verzeichnisse, auf die PHP zugreifen darf:
    open_basedir = "/var/www/html/i-doit/:/tmp/"

    ;; Unnötige Methoden deaktivieren:
    disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,

    ;; Verwendete PHP-Version nicht in den HTTP-Headers mitsenden:
    expose_php = Off

Anschließend müssen die Einstellungen noch aktiviert werden:

    sudo php5enmod zz_security
    sudo systemctl restart apache2.service

Für PHP existiert die **Sicherheits-Erweiterung [Suhosin](https://suhosin.org/)**. Sie greift sehr tief in die Ausführung von PHP-Methoden ein. Das ist teilweise sinnvoll, aber birgt auch die Gefahr, dass i-doit nicht mehr vollständig funktioniert. Konkrete Einstellungen können wir noch nicht abschließend empfehlen.

### Transportverschlüsselung

i-doit ist eine Client-Server-Anwendung, dass heißt, es existiert eine Server-Instanz, die mit einer Client-Instanz über ein Netzwerk kommuniziert. Zudem kann i-doit über Schnittstellen mit weiteren Server-Instanzen kommunizieren, beispielsweise [LDAP zur Anmeldung von Benutzern](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md).

Um diese Kommunikationsverbindungen abzusichern, bietet sich die Transportverschlüsselung via TLS an. Beispielsweise kann der Apache Webserver mit einem vertrauenswürdigen X.509-Zertifikat ausgestattet werden, damit ein Webbrowser **via HTTPS auf die IT-Dokumentation zugreifen** kann. Bei Zertifikaten sollten viele Dinge beachtet werden: u. a. Gültigkeitsdauer, Vertrauenskette, verwendete Ciphers und Hashes. Mozilla bietet einen passenden [Generator für die Apache-Konfiguration](https://mozilla.github.io/server-side-tls/ssl-config-generator/) an und liefert jede Menge [Hintergrundinformationen zu Server-seitigem TLS](https://wiki.mozilla.org/Security/Server_Side_TLS). Weitere gute Quellen sind die [SSL Labs von Qualys](https://www.ssllabs.com/ssltest/) und die Website [securityheaders.io](https://securityheaders.io/), die auch passende Tests der Konfiguration durchführen.

Hier ist ein Beispiel für Debian GNU/Linux 8.x, um verschiedene Sicherheitsmechanismen zu etablieren. Die entsprechenden Pfade und Domain Names müssen angepasst werden:

    <IfModule mod_headers.c>
        ## See <https://securityheaders.io/>:
        Header always set Content-Security-Policy "default-src 'unsafe-inline' 'unsafe-eval' data: http://i-doit.example.net:80 https://i-doit.example.net:443"
        Header always set X-Frame-Options "SAMEORIGIN"
        Header always set X-XSS-Protection "1; mode=block"
        Header always set X-Content-Type-Options "nosniff"

        ## Avoid information about the Web server:
        Header unset Server
    </IfModule>

    ## Avoid information about the Web server:
    ServerSignature Off
    ServerTokens    Prod

    <IfModule mod_ssl.c>
            ## See <https://mozilla.github.io/server-side-tls/ssl-config-generator/>:
            SSLProtocol             all -SSLv3 -TLSv1 -TLSv1.1
            SSLCipherSuite          ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256
            SSLHonorCipherOrder     on
            SSLCompression          off

            SSLUseStapling  on
            SSLStaplingResponderTimeout     5
            SSLStaplingReturnResponderErrors        off
            SSLStaplingCache        shmcb:/var/run/ocsp(128000)

            Header always set Strict-Transport-Security "max-age=15768000; includeSubDomains"
    </IfModule>

    <IfModule mod_ssl.c>
            <VirtualHost *:443>
                    ServerAdmin info@i-doit.example.net
                    Servername i-doit.example.net

                    DocumentRoot /var/www/html/

                    <Directory /var/www/html/>
                            Options FollowSymLinks
                            AllowOverride All
                    </Directory>

                    CustomLog /var/log/apache2/access.log combined
                    ServerSignature Off

                    LogLevel info ssl:warn
                    ErrorLog ${APACHE_LOG_DIR}/error.log

                    SSLEngine on

                    SSLCertificateFile      /etc/ssl/i-doit.example.net.crt
                    SSLCertificateKeyFile   /etc/ssl/i-doit.example.net.key

                    ## Let i-doit know about some SSL settings (see <https://httpd.apache.org/docs/2.4/mod/mod_ssl.html#ssloptions>):
                    <FilesMatch "\.(php)$">
                            SSLOptions +StdEnvVars
                    </FilesMatch>
            </VirtualHost>
    </IfModule>

Einen Schritt weiter geht die zusätzliche **Absicherung via Client-Zertifikate**. Hierzu überprüft nicht nur der Client, ob dem Server-Zertifikat vertraut wird, sondern auch der Webserver überprüft den Webbrowser auf Authentizität.

#### Https für Windows einrichten

Die folgende Anleitung zeigt, wie Sie SSL für Windows mit i-doit einrichten.

##### Voraussetzungen

Vorab benötigen Sie ein gültiges Zertifikat im .crt und .key Format.

##### Konfigurationsschritte

1. **Erstellen der ssl.conf-Datei**: Navigieren Sie zu Ihrem i-doit-Ordner unter `/i-doit/apache-2.4/conf/extra/` und erstellen Sie die Datei `ssl.conf`. Die Datei sollte folgenden Inhalt haben:

```apacheconf
<VirtualHost *:443>
   DocumentRoot "${SRVROOT}/htdocs"
   ServerName localhost

   SSLEngine on
   SSLCertificateFile "C:/certificate/Zertifikat.crt" # Ersetzen Sie dies durch den Pfad zu Ihrem Zertifikat.
   SSLCertificateKeyFile "C:/certificate/private-key.key" # Ersetzen Sie dies durch den Pfad zu Ihrem privaten Schlüssel.

   <Directory "${SRVROOT}/htdocs">
       Options Indexes FollowSymLinks MultiViews
       AllowOverride all
       Require all granted
       AddHandler application/x-httpd-php .php
   </Directory>

   ErrorLog "logs/ssl_error.log"
   LogLevel warn

   <IfModule log_config_module>
       LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
       LogFormat "%h %l %u %t \"%r\" %>s %b" common
       <IfModule logio_module>
           LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %I %O" combinedio
       </IfModule>
       CustomLog "logs/ssl_access.log" common
   </IfModule>
</VirtualHost>
```

2. **Anpassungen in der httpd.conf**: Bearbeiten Sie die `httpd.conf`-Datei, die sich unter `/i-doit/apache-2.4/conf/` befindet:

- Fügen Sie `Listen 443` hinzu und kommentieren Sie `Listen 80` aus.
- Stellen Sie sicher, dass das SSL-Modul geladen ist und die `ssl.conf` inkludiert wird.

Die Datei sieht dann ungefähr so aus:

```apacheconf
Define SRVROOT "C:/i-doit/apache-2.4"

ServerRoot "${SRVROOT}"
# Listen 80
Listen 443

LoadModule actions_module modules/mod_actions.so
LoadModule alias_module modules/mod_alias.so
...
LoadModule ssl_module modules/mod_ssl.so
Include conf/extra/ssl.conf
...
```

3. **Server-Neustart**: Starten Sie den Apache-Webserver neu. Öffnen Sie die Eingabeaufforderung:

   - Drücken Sie `Win + R`, geben Sie `cmd` ein und drücken Sie Enter.

Navigieren Sie zum Apache-Bin-Verzeichnis, z.B. `C:/i-doit/apache-2.4/bin`, und geben Sie den folgenden Befehl ein, um den Apache-Webserver neu zu starten:

```bash
cd C:/i-doit/apache-2.4/bin
httpd.exe -k restart
```

Der Apache-Webserver wird neu gestartet. Speichern Sie Ihre Konfigurationsänderungen in der `httpd.conf`-Datei, bevor Sie den Befehl ausführen.

Das war's! Ihre i-doit-Installation ist jetzt für SSL auf Windows konfiguriert.

**Hinweis:** Passen Sie die Pfade und Konfigurationseinstellungen entsprechend Ihrer eigenen Umgebung an. Stellen Sie sicher, dass Ihr Zertifikat und privater Schlüssel in den angegebenen Pfaden vorhanden sind.

### Datenverschlüsselung

**Die Verschlüsselung von Festplatten/SSDs schützt bei Diebstahl.** Auf Clients ist sie daher keine Seltenheit und [von gängigen Normen gefordert](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/m/m04/m04337.html?nn=6604938). Bei Servern ist solch eine Verschlüsselung eher selten, da dies in der Administration oftmals als hinderlich gesehen wird. Gut, die unberechtigte Entwendung von Servern passiert nicht sehr oft und wird kann durch andere Schutzmaßnahmen verhindert werden. Sollte die Hardware, auf der i-doit läuft, allerdings nicht im eigenen Rechenzentrum abgesichert laufen, wächst das Misstrauen gegenüber dem Dienstleister, der die Hardware zur Verfügung stellt. In kleineren Betrieben ist i-doit teilweise gar auf Notebooks installiert.

Wer sich für die Verschlüsselung der Daten entscheidet, hat verschiedene Möglichkeiten: Unter GNU/Linux ist dm-crypt/LUKS weit verbreitet. Viele Distributionen bieten bereits bei der Installation an, die Daten zu verschlüsseln. Unter Windows bieten sich BitLocker und Veracrypt an.

### Firewall und offene Ports

**Jeder Port, der nicht nach außen hin geöffnet ist, verkleinert die Angriffsvektoren.** Da i-doit eine Web-Applikation ist, reichen oftmals die Ports 80 und 443 aus. Apache kann über die Einstellung Listen in der Datei /etc/apache2/ports.conf und die passende VHost-Konfiguration eingeschränkt werden. MariaDB/MySQL sollte von außen gar nicht erst erreichbar sein. Um das System via SSH zu administrieren, muss ebenfalls ein Port geöffnet sein (Standard: 22).

Doch Vorsicht: **"Security by Obscurity" ist ein denkbar schlechter Schutz.** Hierbei werden Nicht-Standard-Ports im höheren vier- oder gar fünfstelligen Bereich verwendet. Apache läuft häufig unter Port 8080 und SSH unter 8022. Diese Methodik stellt keine große Hürde bei einem Angriff dar, denn Port-Scanner wie nmap finden solche offenen Ports ohne Probleme.

Das Unterbinden von ICMP (beispielsweise von ping benutzt) ist ebenfalls [keine gute Idee](http://shouldiblockicmp.com/).

Lässt sich ein Dienst nicht durch die eigene Konfiguration einschränken, hilft eine Firewall. Eine komfortable **Application Firewall** unter GNU/Linux ist ufw, das in wenigen Schritten aktiviert ist und im Hintergrund Regeln für iptables einrichtet:

    sudo apt install ufw
    sudo ufw allow 80/tcp
    sudo ufw allow 443/tcp
    sudo ufw allow 22/tcp
    sudo ufw disable
    sudo ufw enable

Speziell an Webserver richtet sich eine **Web Application Firewall**. Eine sehr bekannte ist [mod\_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), eine Erweiterung für Apache.

Noch sinnvoller, aber aufwendiger umzusetzen und zu betreiben, ist eine externe, **dedizierte Firewall**. i-doit sollte erlaubt sein, nach Updates suchen und auf Online Repositories (z. B. für [Reports](../auswertungen/report-manager.md) und [Vorlagen](../i-doit-pro-add-ons/documents/dokumentenvorlagen.md) zugreifen zu dürfen:

| Host | Protokoll | Port | Beschreibung |
| --- | --- | --- | --- |
| **login.i-doit.com** | **HTTP** | **80** | Updates für i-doit und dessen Add-ons herunterladen |
| **login.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **reports-ng.i-doit.org** | **HTTP** | **80** | Online Repositories (z. B. für [Reports](../auswertungen/report-manager.md)) |
| **reports-ng.i-doit.org** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **r.i-doit.com** | **HTTP** | **80** | Online Repositories (z. B. für [Vorlagen](../i-doit-pro-add-ons/documents/index.md)) |
| **r.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **news.i-doit.com** | **HTTP** | **80** | Neuigkeiten zu i-doit im Dashboard (open-Variante) |
| **news.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **i-doit.com** | **HTTP** | **80** | Nach Updates der pro-Variante suchen |
| **i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **i-doit.org** | **HTTP** | **80** | Nach Updates der open-Variante suchen |
| **i-doit.org** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **lizenzen.i-doit.com** | **HTTP** | **80** | Lizenzen über Token abrufen |
| **lizenzen.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |

Sind eine oder mehrere Schnittstellen zu Dritt-Applikationen konfiguriert, muss der jeweilige Zugriff ebenfalls erlaubt sein:

| Schnittstelle | Protokoll | Standard-Port |
| --- | --- | --- |
| [E-Mails senden](../auswertungen/benachrichtigungen.md) | **SMTP** | **25/465/587** |
| [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | **LDAP** | **389/636** |
| [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | **Livestatus** | **6557** |
| [NDOUtils/IDOUtils](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | **MySQL** | **3306** |
| [OTRS Help Desk](../automatisierung-und-integration/service-desk/otrs-help-desk.md), [Request Tracker](../automatisierung-und-integration/service-desk/request-tracker.md), iTop | **HTTP/HTTPS** | **80/443** |
| [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) | **PostgreSQL** | **25321** |
| [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) | **HTTP** | **9000** |
| [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md) | **MySQL** | **3306** |

### Sicherheits-Frameworks

Sicherheits-Frameworks bieten einen zusätzlichen Schutz, dass Dienste, Applikationen und Benutzer nur berechtigte Aktionen durchführen dürfen. Unter GNU/Linux sind [SELinux](https://de.wikipedia.org/wiki/SELinux) und [AppArmor](https://de.wikipedia.org/wiki/AppArmor) weit verbreitet. Zumindest liegen sie den meisten Distributionen bei, sind aber meist nicht aktiviert. Für i-doit bietet sich an, Apache einzusperren. Der Dienst darf dann **nur noch auf bestimmte Verzeichnisse lesend und/oder schreibend zugreifen**.

Unter Debian GNU/Linux gibt es derzeit einen Bug in selinux-policy-default, der den sinnvollen Einsatz von SELinux verhindert. Wir vertiefen dieses Thema zu einem späteren Zeitpunkt.

### Angriffe automatisch abwehren

**Angriffe frühzeitig zu erkennen und abzuwehren ist nur noch automatisiert zu meistern.** Ein kleines, aber feines Helferlein stellt [fail2ban](http://www.fail2ban.org/) dar. Es analysiert kontinuierlich Log-Dateien von gängigen Diensten, um Angriffe zu erkennen. Brute-Force-Attacken auf SSH kann fail2ban daher schnell zunichte machen. Man kann es so konfigurieren, dass nach 3 fehlgeschlagenen Logins direkt hintereinander, die dazugehörige IP-Adresse via iptables gesperrt wird.

Vorkonfigurierte Jails bietet fail2ban für SSH, Apache und MariaDB/MySQL.

Nach der Installation von i-doit
--------------------------------

Direkt nach der Installation ergreifen wir weitere Maßnahmen.

### Berechtigungen im Dateisystem

**Das Dateisystem bietet viele Möglichkeiten, unberechtigte Zugriffe auf Code und Daten auszuschließen.** Debian GNU/Linux verwendet in der Regel Ext4. Hierfür können wir die Standard-Tools chown, chmod und chattr verwenden:

    # Wechsel ins Installations-Verzeichnis von i-doit:
    cd /var/www/html/i-doit

    # Apache sollte die volle Kontrolle über die Dateien und Verzeichnisse haben:
    sudo chown www-data:www-data -R .

    # Diese Kontrolle schränken wir auf das Lesen und Ausführen ein:
    sudo find . -type d -name \* -exec chmod 550 {} \;
    sudo find . -type f -exec chmod 440 {} \;
    sudo chmod 550 controller tenants import updatecheck *.sh

    # Diese Rechte versiegeln wir, sodass nicht einmal root etwas ändern darf:
    sudo chattr -R +i .

    # Na gut, in einige Verzeichnisse sollte i-doit schreiben dürfen:

    for dir in "log/ imports/ temp/ upload/"; do sudo chattr -R -i "$dir" && sudo find "$dir" -type d -name \* -exec chmod 770 {} \;; done

Bei einem Update von i-doit müssen einige Einschränkungen temporär aufgehoben werden:

    # Wechsel ins Installations-Verzeichnis von i-doit:
    cd /var/www/html/i-doit
    sudo chattr -R -i .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    sudo chmod 774 controller *.sh setup/*.sh

Ist das Update eingespielt, sollten die Einschränkungen wieder aktiviert werden.

### Sichere Passwörter

Ein i-doit wird für Testzwecke "schnell mal" aufgesetzt. Dieses "schnell mal" bedeutet leider allzu oft, dass sich niemand um sichere Passwörter Gedanken macht. Das muss nicht sein. Wer konsequent **von Anfang an sichere Passwörter** setzt, hat im Nachhinein weniger Aufwand, diese potenziellen Sicherheitslücken zu stopfen. Konkret geht es um diese Passwörter:

*   MySQL-Benutzer, den i-doit für die Datenbanken einrichtet
*   Benutzer für das Admin Center
*   Standard-Benutzer in i-doit (admin, reader, author, editor)

#### MySQL-Benutzer

--------------------------------
Dieser Benutzer wird bereits beim [Setup](../installation/manuelle-installation/setup.md) angelegt. Das Passwort kann nachträglich mit wenigen SQL-Befehlen geändert werden. Es wird davon ausgegangen, dass der Benutzer idoit heißt und die [System-Datenbank](../software-entwicklung/datenbank-modell/index.md) idoit_system. Zuerst kommt die Anmeldung:

    mysql -uroot -p -hlocalhost

Anschließend folgt das ändern des Passworts:

    ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';

Dieses Passwort muss auch i-doit mitgeteilt werden. Zuerst in der Systemdatenbank, damit die [Mandanten-Datenbanken](../software-entwicklung/datenbank-modell/index.md) erreicht werden können:

    UPDATE idoit_system.isys_mandator SET isys_mandator__db_pass = 'thisistotallysecure!!11' WHERE isys_mandator__db_user = 'idoit';

Und zuletzt muss das Passwort in der zentralen Konfiguration abgelegt werden, damit die System-Datenbank erreicht werden kann. Dies geschieht entweder im Admin Center unter **Config** oder in der Datei src/config.inc.php im Installationsverzeichnis von i-doit.

#### Benutzer für das Admin Center

Dieser Benutzer wird ebenfalls beim Setup angelegt. Anschließend kann das Passwort dort unter **Config** geändert werden. Alternativ kann die Datei src/config.inc.php bearbeitet werden.

#### Standard-Benutzer in i-doit

Die Benutzer admin, reader, author und editor werden bereits beim Setup angelegt. Best Practice ist es, diese Benutzer niemals zu verwenden, sondern für jeden Benutzer ein eigenes [Personenobjekt](../grundlagen/struktur-it-dokumentation.md) anzulegen. Die Personenobjekte für admin & Co. können nicht gelöscht, aber [archiviert](../grundlagen/struktur-it-dokumentation.md) werden. Dadurch wird die Anmeldung ausgeschlossen. Wer auf den Einsatz dieser Standard-Benutzer nicht verzichten möchte, sollte deren Passwörter dringend ändern, weil sie gleichlautend mit dem Benutzernamen sind. Erledigt wird dies im jeweiligen Personenobjekt in der Kategorie **Personen → Login**.

#### Standard-Benutzer unter Linux

Bereits bei der Installation des Betriebssystems wird ein Standard-Benutzer angelegt, der ebenso ein sicheres Passwort verdient. Nachträglich ändern lässt es sich mit:

    passwd

### CSRF Tokens aktivieren

i-doit bringt mehrere Maßnahmen mit, um Angriffe, die unter [**Cross-Site-Request-Forgery** (CSRF oder XSRF)](https://de.wikipedia.org/wiki/Cross-Site-Request-Forgery) firmieren, zu erschweren. Aktiviert werden die Maßnahmen im Admin Center unter **System setting → Security → CSRF-Token** mit der Angabe **Ja**.

### Zwei-Faktor-Authentifizierung

Die Anmeldung via Benutzernamen und -passwort wird heutzutage als nicht mehr zeitgemäß angesehen. **Zusätzliche Authentifzierungsmechanismen bringen einen Zugewinn an Sicherheit.** Wenn ein weiterer Mechanismus hinzukommt, spricht man von Zwei-Faktor-Authentifizierung, bei mehr als zweien von Mehr-Faktor-Authentifizierung. Eine gängige Art der Umsetzung ist der Einsatz eines (USB-)Tokens.

i-doit erlaubt zusätzliche Mechanismen durch den zugrunde liegenden Apache Webserver. Beispielsweise beruht die das **[Single-Sign-On-Verfahren](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md)** darauf. Dieses lässt sich dazu nutzen, weitere Mechanismen direkt im Webserver zu aktivieren und zu konfigurieren. Hier sind praktisch keine Grenzen gesetzt, solange das Verfahren i-doit über entsprechende HTTP-Header mitteilt, für welchen Benutzer die Authentifizierung erfolgreich ist.

### Monitoring und Logs

Alle getätigten Maßnahmen sollten permanent überwacht werden. Bestenfalls automatisch.

Das System ist gut in einem [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) wie Nagios oder Check\_MK aufgehoben. Es gibt kaum etwas, was sich nicht damit überwachen lässt. Wichtig ist beispielsweise, das Betriebssystem und die (virtuelle) Hardware im Blick zu haben: laufende Prozesse, Speicherverbrauch, angemeldete Benutzer, verfügbare Updates usw. **Für i-doit sollten Apache, MariaDB/MySQL und der verfügbare Speicherplatz überwacht werden.**

Neben dem Network Monitoring bieten sich noch weitere Dienste an, die **Logs überwachen**. Bevor man mit der Installation eines ausgewachsenen Log-Servers (zum Beispiel [Logstash](https://www.elastic.co/products/logstash)) beginnt, kann man erst einmal auf kleinere Tools wie [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps) zurückgreifen. Logwatch überwacht die Log-Dateien von Apache, SSH sowie weiteren Diensten und verschickt täglich einen gut lesbaren Report per E-Mail.

i-doit produziert ebenfalls laufend Log-Dateien. Im Installationsverzeichnis befinden sie sich unterhalb vom Verzeichnis log/. Eine (regelmäßige) Auswertung lohnt sich nicht nur bei der [Suche nach Fehlern](../administration/troubleshooting/index.md).

Nachdem [Cronjobs einmal eingerichtet](../automatisierung-und-integration/cli/console/index.md) worden sind, interessiert sich niemand mehr dafür. Das ist fatal, wenn beim automatischen Ausführen etwas schief geht und niemand etwas mitbekommt. Es ist demnach ratsam, die **Ausgaben von laufenden Jobs in Log-Dateien umzuleiten** und bei Bedarf E-Mails zu verschicken.

Apropos E-Mail: Wenn das System E-Mails verschicken soll (wie es Logwatch täglich tut), sollte man dies vorher testen. Ein passender SMTP-Server sollte erreichbar sein. Eventuell hilft es, einen simplen Dienst wie [sSMTP](https://wiki.debian.org/sSMTP) als Relay-Server zu verwenden.

Eine weitere Möglichkeit, das System permanent von außen auf Schwachstellen zu überprüfen, ist der Einsatz eines **Schwachstellen-Scanners** wie [OpenVAS](http://www.openvas.org/).

Über den Tellerrand geschaut
----------------------------

Es gibt zahlreiche weitere Maßnahmen, die etwas außerhalb der eigentlichen Installation liegen, aber nicht unerwähnt bleiben sollten.

### Hochverfügbarkeit

!!! info  "Wirklich nötig?"

    Wir wurden schon oft gefragt, wie man i-doit performant aufsetzt. Schnell ist die Rede von redundanten Systemen. Doch das ist in den meisten Fällen überdimensioniert und zu komplex. Bevor man ein Arsenal an Hard- und Software auf die IT-Dokumentation loslässt, ist es besser, ein(!) simples, aber durchdachtes System aufzusetzen und regelmäßig zu warten. Aus Performance-Gründen hat unseres Wissens nach noch kein Kunde ein redundantes System für i-doit benötigt, da die Systemanforderungen recht moderat sind. i-doit funktioniert mit den angegebenen Anforderungen problemlos mit a) vielen Daten und b) vielen Benutzern zur selben Zeit.

Um die Verfügbarkeit der IT-Dokumentation zu erhöhen, kann es helfen, die einzelnen Dienste **redundant** und auf dedizierten Systemen (Bare Metal, VM oder Container) zu betreiben. i-doit benötigt zum Betrieb einen Apache-Webserver, der redundant durch einen oder gar mehrere Load Balancer angesteuert werden kann. Die Datenbanken können auf einem MariaDB-Cluster, der beispielsweise von [MaxScale](https://mariadb.com/products/mariadb-maxscale) verwaltet wird, gespeichert werden. Die Daten, die i-doit im Dateisystem ablegt, können in einem (verteilten) Storage-System gespeichert werden. Und der Cache, der von memcached verwaltet wird, kann ebenfalls ausgelagert werden.

Doch das ist Stoff für einen weiteren Artikel.

Um "im Kleinen" anzufangen, sollte die drunter liegende Hardware betrachtet werden: ein RAID, ECC-Speicherschutz beim RAM und redundant ausgelegte Netzteile (die auch wirklich an unterschiedlichen Stromphasen hängen, bestenfalls abgesichert durch USV, Generator & Co.) sind übliche Schutzmaßnahmen.

### Vertrauenswürdiges Netzwerk

Ein Blick sollte auch auf die Netzwerkinfrastruktur geworfen werden, in der das i-doit-System läuft und erreicht werden kann.

Eine Maßnahme wäre eine direkte Trennung zum Internet. Ein **HTTP-Proxy** würde es erlauben, dass das System Updates beziehen darf.

Eine weitere Maßnahme wäre, ein **dediziertes Netz für die Administration** zu verwenden. So könnte man den offenen Port für SSH aus der "Schusslinie" ziehen. Nur noch die Kernfunktion, also der Apache-Webserver wäre erreichbar. Ob nun durch physikalisch Trennung von Subnetzen oder via VLAN oder VPN, überlassen wir dem Leser.

### IPv4 vs. IPv6

Viele der genannten Maßnahmen sind unabhängig davon, ob IP in Version 4 oder 6 verwendet wird. IPv6 genießt in vielen Organisationen keine weite Verbreitung. Kommt es gar nicht zum Einsatz (was schade wäre), sollte es auch konsequent deaktiviert werden. Soll es hingegen benutzt werden, sollte es genauso sicher behandelt werden wie IPv4. Lauschen Dienste nach außen mit geöffneten Ports, sollte dies sowohl für IPv4 als auch v6 konfiguriert werden. Gegebenenfalls sind Firewall-Regeln anzupassen.

Das Routing und die Adressvergabe in IPv6-Netzen unterscheiden sich von von IPv4-Netzen. Wer hier nicht aufpasst, macht eventuell das System im weltweiten Internet verfügbar, obwohl das bei IPv4 ausgeschlossen wurde.

Weiterführende Links
--------------------

Wer tiefer in die Materie einsteigen möchte (und wer möchte das nach dem Lesen dieses Artikels nicht?), wird unter anderem hier fündig:

*   Einen guten Einstieg in die (sichere) Administration von einem Linux-Betriebssystem, bietet der Blog-Artikel "[My First 10 Minutes On a Server - Primer for Securing Ubuntu](https://www.codelitt.com/blog/my-first-10-minutes-on-a-server-primer-for-securing-ubuntu/)".
*   Die Norm IT-Grundschutz vom BSI listet mit den [IT-Grundschutz-Katalogen](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/itgrundschutzkataloge_node.html) jede Menge Gefahren, denen die IT tagtäglich ausgesetzt ist. Passend dazu liefert das BSI geeignete Maßnahmen zur Risikominimierung gleich mit. Die Kataloge dienen in vielen Fällen als Quelle für andere Standards und Normen wie ISO27001. Für den sicheren Betrieb von i-doit sind insbesondere diese Bausteine eine gute Lektüre:
    *   [B 3.101 Allgemeiner Server](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b03/b03101.html "B 3.101 Allgemeiner Server")
    *   [B 3.102 Server unter Unix](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b03/b03102.html "B 3.102 Server unter Unix")
    *   [B 3.304 Virtualisierung](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b03/b03304.html "B 3.304 Virtualisierung")
    *   [B 5.4 Webserver](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b05/b05004.html "B 5.4 Webserver")
    *   [B 5.7 Datenbanken](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b05/b05007.html "B 5.7 Datenbanken")
    *   [B 5.21 Webanwendungen](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b05/b05021.html "B 5.21 Webanwendungen")
    *   [B 5.24 Web-Services](https://www.bsi.bund.de/DE/Themen/ITGrundschutz/ITGrundschutzKataloge/Inhalt/_content/baust/b05/b05024.html "B 5.24 Web-Services")
*   Die [Open Web Application Security Project (OWASP)](https://www.owasp.org/index.php/Main_Page) ist ein gemeinnütziges NGO, das sich der Informationssicherheit von Web-Applikationen verschrieben hat und gängige Angriffsszenarien, aber auch Maßnahmen zur Risikominimierung aufzeigt.
