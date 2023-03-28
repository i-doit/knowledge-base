# Einrichtung von SAML-SSO

In dieser Anleitung beschreiben wir die Einrichtung von Single-Sign-On (SSO) für i-doit mit Hilfe von SAML. In diesem Beispiel nutzen wir Mellon als authenticator gegen LDAP-AD-FS.

## Vorbereitungen

Wir nutzen für die Beispielkonfiguration zwei Server, einen Windows Server mit Domäne/AD und FS und einen Debian 11 Server mit Apache und Melon:

| FQDN | IP  | Rolle | OS  |
| --- | --- | --- | --- |
| tu2-dc2.tu-synetics.test | 10.10.60.22 | AD, FS | Windows |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Basis Konfiguration:

✔ Beide Server müssen sich gegenseitig per FQDN auflösen können.<br>
✔ Der Windows-Server muss ein konfiguriertes AD haben, welches die Rolle AD-FS beinhaltet.<br>
✔ I-doit ist bereits vorinstalliert und nutzbar.

### Pakete Installieren

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen

## Mellon Konfiguration

Wir erstellen hierzu ein Verzeichnis unter `/etc/apache2` und legen hier unsere Konfigurationsdaten ab.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Mit folgendem Befehl erstellen wir unsere Mellon Metadaten "URLs bitte anpassen"

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

Dies erstellt nun folgende Dateien

`https\_tu2\_samlsso.synetics.test\_.cert`

`https\_tu2\_samlsso.synetics.test\_.key`

`https\_tu2\_samlsso.synetics.test\_.xml`

Nun müssen wir die AD-FS metadaten von unserem AD abholen "URLs bitte anpassen"

```shell
wget https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
```

Nun müssen wir unsere Mellon-Konfiguration anlegen.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Folgende Konfigurationsdirektiven anhand des Beispiel einfügen:

```shell
<Location / >
    MellonSPPrivateKeyFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.key
    MellonSPCertFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.cert
    MellonSPMetadataFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.xml
    MellonIdPMetadataFile /etc/apache2/mellon/FederationMetadata.xml
    MellonEndpointPath /mellon
    MellonEnable "info"
</Location>
```

## Apache2 Konfiguration

Zuerst erstellen wir ein selbst signiertes Zertifikat "Name kann individuell sein"

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Beispiel:

```shell
Country Name (2 letter code) [AU]:Your_Country
State or Province Name (full name) [Some-State]:Your_Province
Locality Name (eg, city) []:Your_City
Organization Name (eg, company) [Internet Widgits Pty Ltd]:Your_Organization
Organizational Unit Name (eg, section) []:Your Department
Common Name (e.g. server FQDN or YOUR name) []:mywebserver.example.com
Email Address []:your_email_address
```

VHost erstellen:

```shell
sudo nano /etc/apache2/sites-available/mywebserver.con
```

Beispiel:

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        DocumentRoot /var/www/html
        ServerSignature Off
        ErrorLog /var/log/apache2/error.log
        CustomLog /var/log/apache2/access.log combined
        LogLevel info ssl:warn
        SSLEngine on
        SSLCertificateFile /etc/ssl/certs/mywebserver.pem
        SSLCertificateKeyFile /etc/ssl/private/mywebserver.key
    </VirtualHost>
    <Location /protected>
        Require valid-user
        AuthType "Mellon"
        MellonEnable "auth"
        MellonDecoder "none"
        MellonVariable "cookie"
        MellonSecureCookie On
    </Location>
</IfModule>
```

In diesem Beispiel wird unter `/var/www/html` nur das Verzeichnis protected via Mellon geschützt. Wir können also später noch eine weitere VHost-Config anlegen, um z.B. i-doit pro zu installieren.

Anlegen des Verzeichnisses:

```shell
sudo mkdir -p /var/www/html/protected
```

Anlegen einer Beispiel html um den Aufruf später zu testen:

```shell
sudo nano /var/www/html/protected/index.html
```

Beispiel:

```shell
<html>
    <head>
        <title>Index Page</title>
    </head>
    <body>
        <h2>This simple index page will only be accessible once your users successfully sign-in via Azure AD with their valid credentials!</h2>
    </body>
</html>
```

Config testen:

```shell
sudo apache2ctl configtest
```

Mods, Configs aktivieren:

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Zeit synchronisieren:

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

An dieser Stelle sind wir vorerst mit der Konfiguration des Linux-Servers fertig und können uns jetzt unserem AD widmen.

## Konfiguration AD-FS:

Zuerst via z.B. WinSCP die `mellon_metadata.xml` vom Linuxserver herunterladen und speichern.<br>
Anschließend öffnen wir das AD-FS Management und legen ein neuen Relying Party Trust an

[![Add Relying Party Trust](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-1.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-1.png)

Claims aware bleibt aktiv und dann auf Start

[![Welcome](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-2.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-2.png)

Im Nächsten Schritt wählen wir "import data …." aus und navigieren zu unserer vorher gesicherten XML

[![Select data source](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-3.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-3.png)

Folgender Hinweis kann ignoriert werden, wenn er auftaucht.

[![AD FS Management](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-4.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-4.png)

Nun tragen wir den FQDN von unserem Linux-Server ein.

[![Specify display name](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-5.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-5.png)

Im nächsten Schritt können wir Zugriffe steuern, der Einfachheit halber belassen wir es zunächst auf Permit everyone.

[![Choose access control policy](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-6.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-6.png)

Das nächste Fenster können wir auch außer Acht lassen und klicken einfach auf next.

[![Ready to add trust](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-7.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-7.png)

Zum Schluss dann nur noch Close und der Party Trust ist angelegt

[![Finish](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-8.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-8.png)

Nun müssen wir Claim Issuance Policies definieren, damit unser User sich auch via Mail anmelden kann.

[![AD FS edit claim](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-9.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-9.png)

Nun öffnet sich ein Fenster und wir klicken auf Add Rule.

[![Add rule](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-10.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-10.png)

Nun wählen wir Send LDAP Attributes as Claim aus und klicken auf Next

[![Choose rule type](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-11.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-11.png)

Wir geben der Rule einen eindeutigen Namen und fügen das Mapping wie angezeigt hinzu.

[![Configure claim rule](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-12.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-12.png)

Dann erstellen wir eine weitere Regel und wählen Transform an Incoming Claim

[![Select rule template](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-13.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-13.png)

Bitte die Konfiguration wie folgt vornehmen:

[![Configure rule](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-14.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-14.png)

Nun haben wir einen voll konfigurierten Relying Party Trust und können nun einmal die Authentifizierung testen.

[![Login page](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-15.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-15.png)

## Test SAML-SSO

Einmal im Browser die URL vom Server öffnen
Beispiel:
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

Nach der erfolgreichen Anmeldung sollten wir folgende Ausgabe erhalten.

[![Auth users only](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-16.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-16.png)

## Installation i-doit pro:

Die Installation kann wie im KB-Artikel für Debian beschrieben installiert werden.

## Anmeldung SSO für i-doit pro

Hierzu müssen wir einmal in die Administration -> System settings und passen die Konfiguration wie folgt an.
**Wichtige Information zu Kontakten:****Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!**

[![i-doit SSO setting](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-17.png)](../../assets/images/de/automatisierung-und-integration/single-sign-on/saml-sso/saml-17.png)

Da wir aktuell nach unserer Anleitung bzw. KB vorgegangen sind, müssen wir die VHost Konfiguration anpassen damit wir uns nun via SSO anmelden können

i-doit Vhost disablen

```shell
sudo a2dissite i-doit
```

Am Anfang angelegten Mellon Vhost anpassen

```shell
nano /etc/apache2/sites-enabled/tu2-samlsso.conf
```

Beispiel

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
    ServerAdmin admin@example.com
    DocumentRoot /var/www/html
            <Directory /var/www/html/>
                    AllowOverride All
            </Directory>
    ServerName  fqdn.example.com
    ServerSignature Off
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    LogLevel info ssl:warn

    SSLEngine on
    SSLCertificateFile /etc/ssl/certs/mywebserver.pem
    SSLCertificateKeyFile /etc/ssl/private/mywebserver.key
    </VirtualHost>
    <Location />
    Require valid-user
        AuthType "Mellon"
        MellonEnable "auth"
        MellonDecoder "none"
        MellonVariable "cookie"
        MellonSecureCookie On
    </Location>
</IfModule>
```

Zum Schluss einmal Apache neustarten

```shell
sudo systemctl restart apache2.service
```

**Fertig!**

Wenn wir nun die URL wieder in unserem Browser öffnen und uns anmelden, gelangen wir direkt zum i-doit
