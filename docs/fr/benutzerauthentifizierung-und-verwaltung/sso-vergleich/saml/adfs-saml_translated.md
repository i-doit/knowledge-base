<!-- TRANSLATED by md-translate -->
# ADFS (Active Directory) (SAML)

# ADFS (Active Directory) (SAML)

In dieser Anleitung beschreiben wir die Einrichtung von Single-Sign-On (SSO) für i-doit mit Hilfe von SAML. In diesem Beispiel nutzen wir Mellon als Authenticator gegen LDAP-AD-FS.

Dans ce guide, nous décrivons la mise en place d'une authentification unique (SSO) pour i-doit à l'aide de SAML. Dans cet exemple, nous utilisons Mellon comme authentificateur contre LDAP-AD-FS.

## Vorbereitungen

## Préparatifs

Wir nutzen für die Beispielkonfiguration zwei Server, einen Windows Server mit Domäne/AD und FS und einen Debian 11 Server mit Apache und Mellon:

Nous utilisons deux serveurs pour l'exemple de configuration, un serveur Windows avec domaine/AD et FS et un serveur Debian 11 avec Apache et Mellon :

| FQDN | IP  | Rolle | OS  |
| --- | --- | --- | --- |
| tu2-dc2.tu-synetics.test | 10.10.60.22 | AD, FS | Windows |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

| FQDN | IP | Rôle | OS |
| --- | --- | --- | --- |
| tu2-dc2.tu-synetics.test | 10.10.60.22 | AD, FS | Windows |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Basiskonfiguration:

### Configuration de base :

✔ Der Windows-Server muss ein konfiguriertes AD haben, welches die Rolle AD-FS beinhaltet.<br>
✔ i-doit ist bereits vorinstalliert und nutzbar.

✔ Le serveur Windows doit avoir un AD configuré qui inclut le rôle AD-FS.<br>
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

`https\_tu2\_samlsso.synetics.test\_.cert` <br>
`https\_tu2\_samlsso.synetics.test\_.key` <br>
`https\_tu2\_samlsso.synetics.test\_.xml`

`https\_tu2\_samlsso.synetics.test\_.cert` <br>
`https\_tu2\_samlsso.synetics.test\_.key` <br>
`https\_tu2\_samlsso.synetics.test\_.xml`.

Nun müssen wir die AD-FS metadaten von unserem AD abholen "URLs bitte anpassen"

Nous devons maintenant récupérer les métadonnées AD-FS de notre AD "Veuillez adapter les URL".

```shell
wget https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
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
    MellonIdPMetadataFile /etc/apache2/mellon/FederationMetadata.xml
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

In diesem Beispiel wird unter `/var/www/html` nur das Verzeichnis via Mellon geschützt. Wir können also später noch eine weitere VHost Konfiguration anlegen, um z.B. i-doit pro zu installieren.

Dans cet exemple, sous `/var/www/html`, seul le répertoire est protégé via Mellon. Nous pourrons donc créer une autre configuration VHost plus tard, par exemple pour installer i-doit pro.

Anlegen des Verzeichnisses:

Création du répertoire :

```shell
sudo mkdir -p /var/www/html/protected
```

Anlegen einer Beispiel html um den Aufruf später zu testen:

Création d'un exemple html pour tester l'appel ultérieurement :

```shell
sudo nano /var/www/html/protected/index.html
```

Beispiel:

exemple :

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

Tester la configuration :

```shell
sudo apache2ctl configtest
```

Mods, Configs aktivieren:

Activer les mods, les configs :

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Zeit synchronisieren:

Synchroniser l'heure :

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

An dieser Stelle sind wir vorerst mit der Konfiguration des Linux Servers fertig und können uns jetzt unserem AD widmen.

A ce stade, nous en avons terminé avec la configuration du serveur Linux et pouvons maintenant nous consacrer à notre AD.

## Konfiguration AD-FS:

## Configuration AD-FS :

Zuerst via z.B. WinSCP die `mellon_metadata.xml` vom Linux Server herunterladen und speichern.<br>
Anschließend öffnen wir das AD-FS Management und legen ein neuen Relying Party Trust an

Télécharger et enregistrer le fichier `mellon_metadata.xml` du serveur Linux via WinSCP par exemple.
Ensuite, nous ouvrons la gestion AD-FS et créons un nouveau Relying Party Trust.

[![Add Relying Party Trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)

[ ![Add Relying Party Trust](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-1.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-1.png)

Claims aware bleibt aktiv und dann auf Start

Claims aware reste actif et ensuite sur Start

[![Welcome](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)

[ ![Welcome](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-2.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-2.png)

Im Nächsten Schritt wählen wir "import data …." aus und navigieren zu unserer vorher gesicherten XML

Dans l'étape suivante, nous sélectionnons "import data ...." et naviguons vers notre XML précédemment sauvegardé.

[![Select data source](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)

[ ![Select data source](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-3.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-3.png)

Folgender Hinweis kann ignoriert werden, wenn er auftaucht.

La remarque suivante peut être ignorée si elle apparaît.

[![AD FS Management](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)

[ ![AD FS Management](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-4.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-4.png)

Nun tragen wir den FQDN von unserem Linux-Server ein.

Nous inscrivons maintenant le FQDN de notre serveur Linux.

[![Specify display name](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)

[ ![Specify display name](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-5.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-5.png)

Im nächsten Schritt können wir Zugriffe steuern, der Einfachheit halber belassen wir es zunächst auf Permit everyone.

Dans l'étape suivante, nous pouvons contrôler les accès. Pour simplifier, nous laissons tout d'abord Permit everyone.

[![Choose access control policy](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)

[ ![Choose access control policy](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-6.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-6.png)

Das nächste Fenster können wir auch außer Acht lassen und klicken einfach auf next.

Nous pouvons également ignorer la fenêtre suivante et cliquer simplement sur next.

[![Ready to add trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)

[ ![Ready to add trust](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-7.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-7.png)

Zum Schluss dann nur noch Close und der Party Trust ist angelegt

Enfin, il suffit de fermer le Party Trust pour qu'il soit créé.

[![Finish](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)

[ ![Finish](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-8.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-8.png)

Nun müssen wir Claim Issuance Policies definieren, damit unser User sich auch via Mail anmelden kann.

Nous devons maintenant définir des politiques de réclamation (Claim Issuance Policies) pour que notre utilisateur puisse également s'inscrire par mail.

[![AD FS edit claim](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)

[ ![AD FS edit claim](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-9.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-9.png)

Nun öffnet sich ein Fenster und wir klicken auf Add Rule.

Une fenêtre s'ouvre alors et nous cliquons sur Add Rule.

[![Add rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)

[ ![Add rule](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-10.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-10.png)

Nun wählen wir Send LDAP Attributes as Claim aus und klicken auf Next

Nous sélectionnons maintenant Send LDAP Attributes as Claim et cliquons sur Next

[![Choose rule type](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)

[ ![Choose rule type](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-11.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-11.png)

Wir geben der Rule einen eindeutigen Namen und fügen das Mapping wie angezeigt hinzu.

Nous donnons un nom unique à la règle et ajoutons le mapping comme indiqué.

[![Configure claim rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)

[ ![Configure claim rule](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-12.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-12.png)

Dann erstellen wir eine weitere Regel und wählen Transform an Incoming Claim

Ensuite, nous créons une autre règle et choisissons Transform an Incoming Claim

[![Select rule template](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)

[ ![Select rule template](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-13.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-13.png)

Bitte die Konfiguration wie folgt vornehmen:

Veuillez procéder à la configuration comme suit :

[![Configure rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)

[ ![Configure rule](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-14.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-14.png)

Nun haben wir einen voll konfigurierten Relying Party Trust und können nun einmal die Authentifizierung testen.

Nous avons maintenant un Relying Party Trust entièrement configuré et pouvons maintenant tester l'authentification.

[![Login page](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)

[ ![Login page](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-15.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-15.png)

## Test SAML-SSO

## Test SAML-SSO

Einmal im Browser die URL vom Server öffnen
Beispiel:
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

Ouvrir une fois dans le navigateur l'URL du serveur
Exemple :
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

Nach der erfolgreichen Anmeldung sollten wir folgende Ausgabe erhalten.

Une fois l'inscription réussie, nous devrions recevoir le numéro suivant.

[![Auth users only](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)

[ ![Auth users only](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-16.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-16.png)

## Installation i-doit pro:

## Installation d'i-doit pro :

Die Installation kann wie im KB-Artikel für Debian beschrieben installiert werden.

L'installation peut être effectuée comme décrit dans l'article KB pour Debian.

## Anmeldung SSO für i-doit pro

## Inscription SSO pour i-doit pro

Hierzu müssen wir einmal in die Administration -> System settings und passen die Konfiguration wie folgt an.
**Wichtige Information zu Kontakten:****Es muss zwingend die E-Mail Adresse des jeweiligen Benutzers als Login im i-doit hinterlegt sein!**

Pour cela, nous devons aller une fois dans Administration -> System settings et adapter la configuration comme suit.
**Information importante concernant les contacts:****L'adresse e-mail de l'utilisateur concerné doit impérativement être enregistrée comme login dans i-doit!**

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

[ ![i-doit SSO setting](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-17.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/saml/adfs-saml/saml-17.png)

Da wir aktuell nach unserer Anleitung bzw. KB vorgegangen sind, müssen wir die VHost Konfiguration anpassen damit wir uns nun via SSO anmelden können

Comme nous avons suivi nos instructions et notre KB, nous devons adapter la configuration du VHost pour pouvoir nous connecter via SSO.

i-doit VHost Konfiguration deaktivieren

Désactiver la configuration i-doit VHost

```shell
sudo a2dissite i-doit
```

Zu Beginn angelegte Mellon VHost Konfiguration anpassen

Ajuster la configuration Mellon VHost créée au départ

```shell
nano /etc/apache2/sites-enabled/tu2-samlsso.conf
```

Beispiel

Exemple

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
    ServerAdmin admin@example.com
    DocumentRoot /var/www/html
            <Directory /var/www/html/>
                    AllowOverride All
            </Directory>
    ServerName fqdn.example.com
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

Zum Schluss den Apache neustarten

Pour finir, redémarrer Apache

```shell
sudo systemctl restart apache2.service
```

**Fertig!**

**Prêt!**

Wenn wir nun die URL wieder in unserem Browser öffnen und uns anmelden, gelangen wir direkt zu i-doit

Si nous ouvrons à nouveau l'URL dans notre navigateur et que nous nous connectons, nous arrivons directement sur i-doit

!!! info "Fallback auf Anmeldemaske"

! !! info "Fallback sur le masque d'inscription".

```
Sollte sich ein Benutzer anmelden, der in i-doit noch nicht vorhanden ist, dann wird dieser automatisch auf die Anmeldemaske von i-doit weitergeleitet und kann sich mit einem lokalen Benutzer anmelden.
```