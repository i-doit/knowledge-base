---
title: Azure AD (SAML) Authentifizierung
description: "Diese Anleitung beschreibt die Einrichtung von Single Sign-On (SSO) für i-doit mit SAML."
icon:
status:
lang: de
---
# Azure AD (SAML) Authentifizierung

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung beschreibt die Einrichtung von Single Sign-On (SSO) für i-doit mit SAML. Als Authenticator wird Mellon gegen Azure AD eingesetzt.

## Vorbereitungen

Die Beispielkonfiguration verwendet einen Debian 11 Server mit Apache, Mellon und installiertem i-doit.

### Basiskonfiguration

✔ In diesem Leitfaden wird davon ausgegangen, dass Ihr Azure Active Directory bereits ordnungsgemäß konfiguriert wurde.<br>
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

    https_tu2_samlsso.synetics.test_.cert
    https_tu2_samlsso.synetics.test_.key
    https_tu2_samlsso.synetics.test_.xml

Lege die Mellon-Konfiguration an:

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Fuege die folgenden Direktiven ein:

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

Öffne den Tab **System settings** im [Admin-Center](../../../administration/admin-center.md) und passe die Konfiguration wie folgt an:

!!! attention "Wichtige Information zu Kontakten"

    Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

Solange die Konfigurationen auf dem Linux Server noch nicht aktiviert wurde, können sich Benutzer noch mit der i-doit Anmeldemaske und einem lokalen Benutzer anmelden.

## Azure AD (SAML)

Um die benötigte XML für die Mellon-Konfiguration zu erhalten, führe die folgenden Schritte aus:

### Erstellen einer benutzerdefinierten Unternehmensanwendung

Melde dich im Azure AD an und navigiere zu **Unternehmensanwendungen**.

[![Azure-AD-Unternehmensanwendung](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)

Erstelle eine eigene benutzerdefinierte Anwendung.

[![Azure-AD-Unternehmensanwendung-2](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)

Richte SSO ein.

[![Azure-AD-Unternehmensanwendung-3](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)

Wähle die Methode **SAML** und stelle im nächsten Schritt die Datei `https_tu2_samlsso.synetics.test_.xml` bereit, indem du auf **Metadatendatei hochladen** klickst.

!!! info "https_tu2_samlsso.synetics.test_.xml"

    Die Datei muss vorher von unserem Server via z.B. SFTP heruntergeladen werden.

[![Azure-AD-Unternehmensanwendung-4](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)

Speichere die Konfiguration.

!!! attention "Test"

    Falls eine Meldung erscheint ob die Konfiguration getestet werden soll, bitte mit den Button `Nein, ich werde es später testen` bestätigen

[![Azure-AD-Unternehmensanwendung-5](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)

Lade anschließend die Metadaten-XML herunter -- du benötigst sie im weiteren Verlauf.

[![Azure-AD-Unternehmensanwendung-6](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)

Passe die Zuweisung an, damit die Benutzer Zugriff auf die Unternehmensanwendung erhalten.

[![Azure-AD-Unternehmensanwendung-7](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)

Passe abschließend den eindeutigen Benutzerbezeichner an, damit Mellon die E-Mail-Adresse des Benutzers an i-doit weiterleiten kann.

Öffne dazu in der Verwaltung der Unternehmensanwendung den Punkt **Einmaliges Anmelden**. Im Hauptbereich findest du **Attribute und Ansprueche** -- bearbeite diese.

[![Azure-AD-Unternehmensanwendung-8](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)

Editiere unter **Erforderlicher Anspruch** den ersten angezeigten Anspruch.

[![Azure-AD-Unternehmensanwendung-9](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)

Ändere das **Namensbezeichnerformat** zwingend auf `E-Mail-Adresse` und das **Quellattribut** auf `user.mail`. Speichere anschließend die Konfiguration.

[![Azure-AD-Unternehmensanwendung-10](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)

Die Konfiguration der Unternehmensanwendung in Azure AD ist damit abgeschlossen.

## Aktivierung der Konfigurationen auf dem Linux Server

### Metadaten XML bereitstellen

Stelle die zuvor erstellte Metadaten-XML auf deinem Linux-Server im Verzeichnis `/etc/apache2/mellon` bereit, damit Mellon sie nutzen kann.

!!!attention "Dateiname"

    Bitte den Namen der Datei anhand der `mellon.conf` auf `AzureAD_metadata.xml` anpassen.
    Alternativ den Dateinamen in der `mellon.conf` anpassen.

Teste nun die Konfiguration und aktiviere alle notwendigen Module.

### Konfiguration testen

```shell
sudo apache2ctl configtest
```

### Module und Configs aktivieren

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Die Konfiguration des Linux-Servers ist damit abgeschlossen.

Wenn du jetzt die URL `https://tu2-samlsso.synetics.test` in deinem Browser öffnest, wirst du zur Azure AD-Anmeldung weitergeleitet. Nach erfolgreicher Anmeldung gelangst du direkt in dein i-doit.

!!! info "Fallback auf Anmeldemaske"
    Sollte sich ein Benutzer anmelden, der in i-doit noch nicht vorhanden ist, dann wird dieser automatisch auf die Anmeldemaske von i-doit weitergeleitet und kann sich mit einem lokalen Benutzer anmelden.
