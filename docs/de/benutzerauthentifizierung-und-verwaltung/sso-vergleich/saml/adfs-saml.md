---
title: ADFS (Active Directory) (SAML)
description: "Diese Anleitung beschreibt die Einrichtung von Single Sign-On (SSO) für i-doit mit SAML."
icon:
status:
lang: de
---
# ADFS (Active Directory) (SAML)

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung beschreibt die Einrichtung von Single Sign-On (SSO) für i-doit mit SAML. Als Authenticator wird Mellon gegen AD FS (Active Directory Federation Services) eingesetzt.

## Vorbereitungen

Die Beispielkonfiguration verwendet zwei Server -- einen Windows Server mit Domaene/AD und FS sowie einen Debian 11 Server mit Apache und Mellon:

| FQDN                      | IP           | Rolle         | OS       |
| ------------------------- | ------------ | ------------- | -------- |
| tu2-dc2.tu-synetics.test  | 10.10.60.22  | AD, FS        | Windows  |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Basiskonfiguration

✔ Der Windows-Server muss ein konfiguriertes AD haben, welches die Rolle AD-FS beinhaltet.<br>
✔ i-doit ist bereits vorinstalliert und nutzbar.

### Pakete Installieren

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen

## Mellon Konfiguration

Erstelle ein Verzeichnis unter `/etc/apache2` für die Konfigurationsdaten.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Erstelle die Mellon-Metadaten mit folgendem Befehl (passe die URLs an deine Umgebung an):

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

Dieser Befehl erstellt folgende Dateien:

`https\_tu2\_samlsso.synetics.test\_.cert` <br>
`https\_tu2\_samlsso.synetics.test\_.key` <br>
`https\_tu2\_samlsso.synetics.test\_.xml`

Hole die AD-FS-Metadaten von deinem AD ab (passe die URL an):

```shell
wget https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
```

Lege nun die Mellon-Konfiguration an:

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Fuege die folgenden Direktiven ein:

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

Erstelle zuerst ein selbst signiertes Zertifikat (der Name ist frei wählbar):

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

Erstelle einen VHost:

```shell
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Beispiel-Konfiguration:

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

In diesem Beispiel wird unter `/var/www/html` nur das Unterverzeichnis `/protected` via Mellon geschützt. Du kannst später eine weitere VHost-Konfiguration anlegen, um z.B. i-doit einzubinden.

Lege das Verzeichnis an:

```shell
sudo mkdir -p /var/www/html/protected
```

Erstelle eine Beispiel-HTML-Datei, um den Aufruf später zu testen:

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

Teste die Konfiguration:

```shell
sudo apache2ctl configtest
```

Aktiviere die benötigten Module und Configs:

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Synchronisiere die Systemzeit:

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

Damit ist die Konfiguration des Linux-Servers vorerst abgeschlossen. Im nächsten Schritt richtest du AD FS ein.

## Konfiguration AD-FS

Lade zunächst die `mellon_metadata.xml` vom Linux-Server herunter (z.B. via WinSCP). Öffne dann das AD-FS Management und lege einen neuen Relying Party Trust an:

[![Add Relying Party Trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)

Lass **Claims aware** aktiv und klicke auf **Start**.

[![Welcome](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)

Wähle im nächsten Schritt **Import data from a file** und navigiere zur zuvor gesicherten XML-Datei.

[![Select data source](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)

Den folgenden Hinweis kannst du ignorieren, falls er erscheint.

[![AD FS Management](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)

Trage den FQDN deines Linux-Servers ein.

[![Specify display name](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)

Im nächsten Schritt kannst du Zugriffe steuern. Für den Anfang belasse die Einstellung auf **Permit everyone**.

[![Choose access control policy](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)

Das nächste Fenster kannst du überspringen -- klicke auf **Next**.

[![Ready to add trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)

Klicke auf **Close** -- der Relying Party Trust ist damit angelegt.

[![Finish](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)

Definiere nun die **Claim Issuance Policies**, damit sich Benutzer via E-Mail anmelden können.

[![AD FS edit claim](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)

Es öffnet sich ein Fenster -- klicke auf **Add Rule**.

[![Add rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)

Wähle **Send LDAP Attributes as Claim** und klicke auf **Next**.

[![Choose rule type](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)

Vergib der Rule einen eindeutigen Namen und fuege das Mapping wie angezeigt hinzu.

[![Configure claim rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)

Erstelle eine weitere Regel und wähle **Transform an Incoming Claim**.

[![Select rule template](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)

Nimm die Konfiguration wie folgt vor:

[![Configure rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)

Der Relying Party Trust ist nun vollständig konfiguriert. Teste die Authentifizierung:

[![Login page](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)

## Test SAML-SSO

Öffne die URL des Servers in deinem Browser:
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

Nach der erfolgreichen Anmeldung solltest du folgende Ausgabe sehen:

[![Auth users only](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)

## Installation i-doit

Die Installation kann wie im KB-Artikel für [Debian](../../../installation/manuelle-installation/debian/index.md) beschrieben installiert werden.

## Anmeldung SSO für i-doit

Öffne den Tab **System settings** im [Admin-Center](../../../administration/admin-center.md) und passe die Konfiguration wie folgt an:

!!! attention "Wichtige Information zu Kontakten"

    Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

Passe die VHost-Konfiguration an, damit die Anmeldung via SSO funktioniert.

Deaktiviere die i-doit-VHost-Konfiguration:

```shell
sudo a2dissite i-doit
```

Passe die zu Beginn angelegte Mellon-VHost-Konfiguration an:

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

Starte den Apache neu:

```shell
sudo systemctl restart apache2.service
```

Die Einrichtung ist abgeschlossen. Wenn du die URL jetzt in deinem Browser öffnest und dich anmeldest, gelangst du direkt zu i-doit.

!!! info "Fallback auf Anmeldemaske"

    Sollte sich ein Benutzer anmelden, der in i-doit noch nicht vorhanden ist, dann wird dieser automatisch auf die Anmeldemaske von i-doit weitergeleitet und kann sich mit einem lokalen Benutzer anmelden.
