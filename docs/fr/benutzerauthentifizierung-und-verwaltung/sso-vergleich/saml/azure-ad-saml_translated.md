<!-- TRANSLATED by md-translate -->
# Azure AD (SAML) Authentifizierung

# Authentification Azure AD (SAML)

In dieser Anleitung beschreiben wir die Einrichtung von Single-Sign-On (SSO) für i-doit mit Hilfe von SAML. In diesem Beispiel nutzen wir Mellon als Authenticator gegen Azure AD via SAML.

Dans ce guide, nous décrivons la mise en place d'une authentification unique (SSO) pour i-doit à l'aide de SAML. Dans cet exemple, nous utilisons Mellon comme authentificateur contre Azure AD via SAML.

## Vorbereitungen

## Préparatifs

Wir nutzen für die Beispielkonfiguration ein Debian 11 Server mit Apache, Mellon und installierten i-doit.

Pour l'exemple de configuration, nous utilisons un serveur Debian 11 avec Apache, Mellon et i-doit installé.

### Basiskonfiguration:

### Configuration de base :

✔ In diesem Leitfaden wird davon ausgegangen, dass Ihr Azure Active Directory bereits ordnungsgemäß konfiguriert wurde.<br>
✔ i-doit ist bereits vorinstalliert und nutzbar.

✔ Ce guide part du principe que votre Azure Active Directory a déjà été correctement configuré.<br>
✔ i-doit est déjà préinstallé et utilisable.

### Pakete Installieren

### Installer des paquets

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen

L'architecture du système devrait être un x86 en 64bit.

## Mellon Konfiguration

## Configuration Mellon

Wir erstellen hierzu ein Verzeichnis unter `/etc/apache2` und legen hier unsere Konfigurationsdaten ab.

Nous créons pour cela un répertoire sous `/etc/apache2` et y plaçons nos données de configuration.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Mit folgendem Befehl erstellen wir unsere Mellon Metadaten "URLs bitte anpassen"

Avec la commande suivante, nous créons nos métadonnées Mellon "Veuillez adapter les URL".

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

Dies erstellt nun folgende Dateien

Cela crée maintenant les fichiers suivants

```
https_tu2_samlsso.synetics.test_.cert
https_tu2_samlsso.synetics.test_.key
https_tu2_samlsso.synetics.test_.xml
```

Nun müssen wir unsere Mellon Konfiguration anlegen.

Nous devons maintenant créer notre configuration Mellon.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Folgende Direktiven werden anhand des Beispiels eingefügt:

Les directives suivantes sont insérées à l'aide de l'exemple :

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

## Configuration d'Apache2

Zuerst erstellen wir ein selbst signiertes Zertifikat "Name kann individuell sein"

Nous créons d'abord un certificat auto-signé "le nom peut être individuel".

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Beispiel:

exemple :

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

Créer un VHost :

```shell
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Beispiel:

exemple :

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

! !! info ""
    Dans cet exemple, le répertoire `/var/www/html/i-doit` dans lequel se trouve notre i-doit est protégé au moyen de Mellon.

## Anmeldung SSO für i-doit pro aktivieren

## Activer la connexion SSO pour i-doit pro

Hierzu müssen wir einmal in die Administration -> System settings und passen die Konfiguration wie folgt an.

Pour cela, nous devons aller une fois dans Administration -> System settings et adapter la configuration comme suit.

!!! attention "Wichtige Information zu Kontakten"

! !! attention "Information importante sur les contacts".

```
Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!
```

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

[ ![i-doit SSO setting](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-17.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-17.png)

Solange die Konfigurationen auf dem Linux Server noch nicht aktiviert wurde, können sich Benutzer noch mit der i-doit Anmeldemaske und einem lokalen Benutzer anmelden.

Tant que les configurations sur le serveur Linux n'ont pas été activées, les utilisateurs peuvent encore se connecter avec le masque de connexion i-doit et un utilisateur local.

## Azure AD (SAML)

## Azure AD (SAML)

Damit wir nun noch die benötigte XML für die Mellon Konfiguration erhalten, müssen wir folgende Schritte ausführen (Beispiel):

Pour obtenir le XML nécessaire à la configuration de Mellon, nous devons suivre les étapes suivantes (exemple) :

### Erstellen einer benutzerfedinierten Unternehmensanwendung

### Créer une application d'entreprise personnalisée

Wir melden uns im Azure AD und gehen dann auf Unternehmensanwendungen.

Nous nous connectons à Azure AD, puis nous allons sur les applications d'entreprise.

[![Azure-AD-Unternehmensanwendung](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)

[ ![Application d'entreprise Azure-AD](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer.png)

Erstellen einer eigene benutzerdefiniere Anwendung.

Créer sa propre application personnalisée.

[![Azure-AD-Unternehmensanwendung-2](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)

[ ![Application Azure-AD-Entreprise-2](../../../assets/images/fr/authentification des utilisateurs et administration/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-2.png)](../../assets/images/fr/authentification des utilisateurs et administration/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-2.png)

SSO einrichten.

Configurer le SSO.

[![Azure-AD-Unternehmensanwendung-3](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)

[ ![Application Azure-AD-Entreprise-3](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-3.png)](../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-3.png)

Nun wählen wir die Methode SAML aus und im nächsten Schritt stellen wir unsere `https_tu2_samlsso.synetics.test_.xml` bereit indem wir auf den Button `Metadatendatei hochladen` klicken.

Nous sélectionnons maintenant la méthode SAML et dans l'étape suivante, nous préparons notre `https_tu2_samlsso.synetics.test_.xml` en cliquant sur le bouton `Télécharger le fichier de métadonnées`.

!!! info "https_tu2_samlsso.synetics.test_.xml"

! !! info "https_tu2_samlsso.synetics.test_.xml

```
Die Datei muss vorher von unserem Server via z.B. SFTP heruntergeladen werden.
```

[![Azure-AD-Unternehmensanwendung-4](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)

[ ![Application Azure-AD-Entreprise-4](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-remplacement-4.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-remplacement-4.png)

Nun Speichern wir die Konfiguration.

Enregistrons maintenant la configuration.

!!! attention "Test"

! !! attention "test"

```
Falls eine Meldung erscheint ob die Konfiguration getestet werden soll, bitte mit den Button `Nein, ich werde es später testen` bestätigen
```

[![Azure-AD-Unternehmensanwendung-5](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)

[ ![Application Azure-AD-Entreprise-5](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-5.jpg)](../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-5.jpg)

Im Anschluss laden wir die Metadaten XML herunter da diese im späteren Verlauf noch benötigt wird.

Ensuite, nous téléchargeons les métadonnées XML, car elles seront nécessaires plus tard.

[![Azure-AD-Unternehmensanwendung-6](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)

[ ![Application d'entreprise Azure-AD-6](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications d'entreprise-création-6.png)](../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications d'entreprise-création-6.png)

Damit die Benutzer den Zugriff auf die Unternehmensanwendung erhalten, muss die Zuweisung angepasst werden.

Pour que les utilisateurs puissent accéder à l'application d'entreprise, l'attribution doit être adaptée.

[![Azure-AD-Unternehmensanwendung-7](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)

[ ![Application d'entreprise Azure-AD-7](../../../assets/images/fr/authentification des utilisateurs et administration/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer-7.png)](../../assets/images/fr/authentification des utilisateurs et administration/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer-7.png)

Zuletzt müssen wir dann noch den eindeutigen Benutzerbezeichner anpassen, damit Mellon die E-Mail Adresse des Benutzers an i-doit weiterleiten kann.

Enfin, nous devons encore adapter l'identifiant unique de l'utilisateur pour que Mellon puisse transmettre l'adresse e-mail de l'utilisateur à i-doit.

Hierzu öffnen wir in der Verwaltung der Unternehmensanwendung den Punkt `Einmaliges Anmelden`.
Anschließend sehen wir im Hauptbereich `Attribute und Ansprüche` und bearbeiten diese.

Pour ce faire, nous ouvrons dans l'administration de l'application d'entreprise le point `S'inscrire une seule fois`.
Ensuite, nous voyons dans le domaine principal `Attributs et revendications` et nous les modifions.

[![Azure-AD-Unternehmensanwendung-8](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)

[ ![Application d'entreprise Azure-AD-8](../../../assets/images/fr/authentification des utilisateurs et administration/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer-8.png)](../../assets/images/fr/authentification des utilisateurs et administration/sso-comparaison/saml/azure-ad/azure-ad-applications d'entreprise-créer-8.png)

Nun Editieren wir unter `Erfolgerlicher Anspruch` den ersten Anspruch der angezeigt wird.

Maintenant, nous éditons sous `Reclamation réussie` la première réclamation qui s'affiche.

[![Azure-AD-Unternehmensanwendung-9](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)

[ ![Application Azure-AD-Entreprise-9](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-remplacement-9.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-remplacement-9.png)

Das Namensbezeichnerformat muss zwingend auf `E-Mail-Adresse` geändert werden.
Das Quellattribut muss auf `user.mail` geändert werden.
Anschließend speichern wir die Konfiguration.

Le format de l'identificateur de nom doit impérativement être modifié en `adresse e-mail`.
L'attribut source doit être modifié en `user.mail`.
Ensuite, nous enregistrons la configuration.

[![Azure-AD-Unternehmensanwendung-10](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)

[ ![Application Azure-AD-Entreprise-10](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-10.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaison saml/azure-ad/azure-ad-applications-entreprise-créer-10.png)

An dieser Stelle sind wir fertig mit der Konfiguration unserer Unternehmensanwendung in Azure AD.

À ce stade, nous avons terminé de configurer notre application d'entreprise dans Azure AD.

## Aktivierung der Konfigurationen auf dem Linux Server

## Activation des configurations sur le serveur Linux

### Metadaten XML bereitstellen

### Fournir des métadonnées XML

Die zuvor erstellte Metadaten XML müssen wir nun auf unserem Linuxserver im Verzeichnis `/etc/apache2/mellon` bereitstellen damit Mellon diese nutzen kann.

Nous devons maintenant mettre à disposition le XML de métadonnées créé précédemment sur notre serveur Linux dans le répertoire `/etc/apache2/mellon` afin que Mellon puisse l'utiliser.

!!!attention "Dateiname"

! !! attention "Nom du fichier

```
Bitte den Namen der Datei anhand der `mellon.conf` auf `AzureAD_metadata.xml` anpassen.
Alternativ den Dateinamen in der `mellon.conf` anpassen.
```

Da wir nun alle Konfigurationen soweit erstellt haben, können wir diese testen und alle notwendigen Mods aktivieren.

Maintenant que nous avons créé toutes les configurations jusqu'ici, nous pouvons les tester et activer tous les mods nécessaires.

###Config testen

###Tester la configuration

```shell
sudo apache2ctl configtest
```

###Mods, Configs aktivieren

###Mods, activer les configs

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

An dieser Stelle sind wir mit der Konfiguration des Linux Servers fertig.

À ce stade, nous avons terminé la configuration du serveur Linux.

Wenn wir nun die URL wieder in unserem Browser öffnen `https://tu2-samlsso.synetics.test` werden wir zur Azure AD Anmeldung weitergeleitet.
Nach erfolgreicher Anmeldung werden wir dann wieder auf unser i-doit weitergeleitet und sind erfolgreich angemeldet

Si nous ouvrons à nouveau l'URL dans notre navigateur `https://tu2-samlsso.synetics.test`, nous sommes redirigés vers l'inscription Azure AD.
Une fois l'inscription réussie, nous sommes redirigés vers notre i-doit et sommes connectés avec succès.

!!! info "Fallback auf Anmeldemaske"

! !! info "Fallback sur le masque d'inscription".

```
Sollte sich ein Benutzer anmelden, der in i-doit noch nicht vorhanden ist, dann wird dieser automatisch auf die Anmeldemaske von i-doit weitergeleitet und kann sich mit einem lokalen Benutzer anmelden.
```