# Azure AD (SAML) Authentifizierung

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

In dieser Anleitung beschreiben wir die Einrichtung von Single-Sign-On (SSO) für i-doit mit Hilfe von SAML. In diesem Beispiel nutzen wir Mellon als Authenticator gegen Azure AD via SAML.

## Vorbereitungen

Wir nutzen für die Beispielkonfiguration ein Debian 11 Server mit Apache, Mellon und installierten i-doit.

### Basiskonfiguration

✔ In diesem Leitfaden wird davon ausgegangen, dass Ihr Azure Active Directory bereits ordnungsgemäß konfiguriert wurde.<br>
✔ i-doit ist bereits vorinstalliert und nutzbar.

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

    https_tu2_samlsso.synetics.test_.cert
    https_tu2_samlsso.synetics.test_.key
    https_tu2_samlsso.synetics.test_.xml

Nun müssen wir unsere Mellon Konfiguration anlegen.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Folgende Direktiven werden anhand des Beispiels eingefügt:

```shell
<Location / >
    MellonSPPrivateKeyFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.key
    MellonSPCertFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.cert
    MellonSPMetadataFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.xml
    MellonIdPMetadataFile /etc/apache2/mellon/AzureAD_metadata.xml
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
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Beispiel:

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        DocumentRoot /var/www/html/i-doit
        <Directory /var/www/html/i-doit/>
                AllowOverride All
        </Directory>
        ServerSignature Off
        ErrorLog /var/log/apache2/error.log
        CustomLog /var/log/apache2/access.log combined
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
        MellonUser "http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name"
    </Location>
</IfModule>
```

!!! info ""
    In diesem Beispiel wird das Verzeichnis `/var/www/html/i-doit` in dem unser i-doit liegt, mittels Mellon geschützt.

## Anmeldung SSO für i-doit aktivieren

Hierzu müssen wir in den **System settings** Tab des [Admin-Center](../../../administration/admin-center.md) und passen die dortige Konfiguration wie folgt an.

!!! attention "Wichtige Information zu Kontakten"

    Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

Solange die Konfigurationen auf dem Linux Server noch nicht aktiviert wurde, können sich Benutzer noch mit der i-doit Anmeldemaske und einem lokalen Benutzer anmelden.

## Azure AD (SAML)

Damit wir nun noch die benötigte XML für die Mellon Konfiguration erhalten, müssen wir folgende Schritte ausführen (Beispiel):

### Erstellen einer benutzerdefinierten Unternehmensanwendung

Wir melden uns im Azure AD und gehen dann auf Unternehmensanwendungen.

[![Azure-AD-Unternehmensanwendung](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)

Erstellen einer eigene benutzerdefinierte Anwendung.

[![Azure-AD-Unternehmensanwendung-2](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)

SSO einrichten.

[![Azure-AD-Unternehmensanwendung-3](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)

Nun wählen wir die Methode SAML aus und im nächsten Schritt stellen wir unsere `https_tu2_samlsso.synetics.test_.xml` bereit indem wir auf den Button `Metadatendatei hochladen` klicken.

!!! info "https_tu2_samlsso.synetics.test_.xml"

    Die Datei muss vorher von unserem Server via z.B. SFTP heruntergeladen werden.

[![Azure-AD-Unternehmensanwendung-4](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)

Nun Speichern wir die Konfiguration.

!!! attention "Test"

    Falls eine Meldung erscheint ob die Konfiguration getestet werden soll, bitte mit den Button `Nein, ich werde es später testen` bestätigen

[![Azure-AD-Unternehmensanwendung-5](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)

Im Anschluss laden wir die Metadaten XML herunter da diese im späteren Verlauf noch benötigt wird.

[![Azure-AD-Unternehmensanwendung-6](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)

Damit die Benutzer den Zugriff auf die Unternehmensanwendung erhalten, muss die Zuweisung angepasst werden.

[![Azure-AD-Unternehmensanwendung-7](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)

Zuletzt müssen wir dann noch den eindeutigen Benutzerbezeichner anpassen, damit Mellon die E-Mail Adresse des Benutzers an i-doit weiterleiten kann.

Hierzu öffnen wir in der Verwaltung der Unternehmensanwendung den Punkt `Einmaliges Anmelden`.
Anschließend sehen wir im Hauptbereich `Attribute und Ansprüche` und bearbeiten diese.

[![Azure-AD-Unternehmensanwendung-8](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)

Nun Editieren wir unter `Erfolgerlicher Anspruch` den ersten Anspruch der angezeigt wird.

[![Azure-AD-Unternehmensanwendung-9](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)

Das Namensbezeichnerformat muss zwingend auf `E-Mail-Adresse` geändert werden.
Das Quellattribut muss auf `user.mail` geändert werden.
Anschließend speichern wir die Konfiguration.

[![Azure-AD-Unternehmensanwendung-10](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)

An dieser Stelle sind wir fertig mit der Konfiguration unserer Unternehmensanwendung in Azure AD.

## Aktivierung der Konfigurationen auf dem Linux Server

### Metadaten XML bereitstellen

Die zuvor erstellte Metadaten XML müssen wir nun auf unserem Linuxserver im Verzeichnis `/etc/apache2/mellon` bereitstellen damit Mellon diese nutzen kann.

!!!attention "Dateiname"

    Bitte den Namen der Datei anhand der `mellon.conf` auf `AzureAD_metadata.xml` anpassen.
    Alternativ den Dateinamen in der `mellon.conf` anpassen.

Da wir nun alle Konfigurationen soweit erstellt haben, können wir diese testen und alle notwendigen Mods aktivieren.

### Config testen

```shell
sudo apache2ctl configtest
```

### Mods, Configs aktivieren

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

An dieser Stelle sind wir mit der Konfiguration des Linux Servers fertig.

Wenn wir nun die URL wieder in unserem Browser öffnen `https://tu2-samlsso.synetics.test` werden wir zur Azure AD Anmeldung weitergeleitet.
Nach erfolgreicher Anmeldung werden wir dann wieder auf unser i-doit weitergeleitet und sind erfolgreich angemeldet

!!! info "Fallback auf Anmeldemaske"
    Sollte sich ein Benutzer anmelden, der in i-doit noch nicht vorhanden ist, dann wird dieser automatisch auf die Anmeldemaske von i-doit weitergeleitet und kann sich mit einem lokalen Benutzer anmelden.
