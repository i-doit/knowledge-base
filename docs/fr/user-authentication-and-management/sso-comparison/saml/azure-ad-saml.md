# Authentification Azure AD (SAML)

Dans ce guide, nous décrivons comment configurer l'authentification unique (SSO) pour i-doit en utilisant SAML. Nous utiliserons Mellon comme authentificateur par rapport à Azure AD via SAML.

## Préparatifs

Nous utilisons, pour la configuration d'exemple, un serveur Debian 11 avec Apache, Mellon et i-doit installé.

### Configuration de base :

✔ Ce guide suppose que votre Azure Active Directory a déjà été configuré correctement.<br>
✔ i-doit est déjà pré-installé et utilisable.

### Installation des packages

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

L'architecture du système doit être x86 en 64 bits.

## Configuration de Mellon

Pour cela, nous créons un répertoire sous `/etc/apache2` et plaçons notre fichier de configuration ici.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Avec la commande suivante, nous créons nos métadonnées Mellon "Personnalisez les URL selon vos besoins".

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

La commande crée maintenant les fichiers suivants :

    https_tu2_samlsso.synetics.test_.cert
    https_tu2_samlsso.synetics.test_.key
    https_tu2_samlsso.synetics.test_.xml

Maintenant, nous devons créer notre configuration Mellon.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Les directives suivantes sont insérées en fonction de l'exemple :

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

## Configuration Apache2

Tout d'abord, nous créons un certificat auto-signé "le nom peut être individuel".

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Exemple :

```shell
Country Name (2 letter code) [AU]:Your_Country
State or Province Name (full name) [Some-State]:Your_Province
Locality Name (eg, city) []:Your_City
Organization Name (eg, company) [Internet Widgits Pty Ltd]:Your_Organization
Organizational Unit Name (eg, section) []:Your Department
Common Name (e.g. server FQDN or YOUR name) []:mywebserver.example.com
Email Address []:your_email_address
```

Créer VHost :

```shell
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Exemple :

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
    Dans cet exemple, le répertoire `/var/www/html/i-doit` où se trouve notre i-doit est protégé en utilisant Mellon.

## Activer i-doit pro SSO

Maintenant, nous devons aller dans administration -> paramètres système et ajuster la configuration comme suit.

!!! attention "Informations importantes sur les contacts"

    Il est obligatoire que l'adresse e-mail de l'utilisateur respectif soit enregistrée en tant que connexion dans i-doit!

[![Paramètres SSO i-doit](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)

Tant que les configurations sur le serveur Linux n'ont pas encore été activées, les utilisateurs peuvent toujours se connecter avec le masque de connexion i-doit et un utilisateur local.

## Azure AD (SAML)

Afin d'obtenir le XML requis pour la configuration de Mellon, nous devons suivre les étapes suivantes (exemple) :

### Créer une application d'entreprise

Nous nous connectons à Azure AD, puis nous allons dans les applications d'entreprise.

[![Application d'entreprise Azure AD](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-1.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-1.png)

Créez votre propre application d'entreprise.

[![Azure-AD-enterprise-application-2](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-2.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-2.png)

Configurez le SSO.

[![Azure-AD-enterprise-application-3](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-3.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-3.png)

Maintenant, nous sélectionnons la méthode SAML et à l'étape suivante, nous fournissons notre `https_tu2_samlsso.synetics.test_.xml` en cliquant sur le bouton `télécharger le fichier de métadonnées`.

!!! info "https_tu2_samlsso.synetics.test_.xml"

    Le fichier doit être téléchargé au préalable depuis notre serveur via par exemple SFTP.

[![Azure-AD-enterprise-application-4](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-4.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-4.png)

Maintenant nous enregistrons la configuration.

!!! attention "Test"

    Si un message apparaît demandant de tester la configuration, veuillez confirmer avec le bouton `Non, je le testerai plus tard`.

[![Azure-AD-enterprise-application-5](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-5.jpg)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-5.jpg)

Ensuite, nous téléchargeons le fichier XML de métadonnées car il sera nécessaire ultérieurement.

[![Azure-AD-enterprise-application-6](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-6.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-6.png)

Afin que les utilisateurs puissent accéder à l'application d'entreprise, l'attribution doit être ajustée.

[![Azure-AD-enterprise-application-7](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-7.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-7.png)

Enfin, nous devons personnaliser l'identifiant unique de l'utilisateur afin que Mellon puisse transmettre l'adresse e-mail de l'utilisateur à i-doit.

Pour ce faire, nous ouvrons l'élément `Authentification unique` dans l'administration de l'application d'entreprise.
Ensuite, nous voyons dans la zone principale 'Attributs et revendications' et nous les éditons.

Maintenant, nous éditons sous `Revendication réussie` la première revendication qui est affichée.

Le format de l'identifiant de nom doit être modifié en `adresse e-mail` obligatoire.
L'attribut source doit être modifié en `user.mail`.
Ensuite, nous enregistrons la configuration.


[![Azure-AD-enterprise-application-10](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-10.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-10.png)

À ce stade, nous avons terminé la configuration de notre application d'entreprise dans Azure AD.

## Activation des configurations sur le serveur Linux

### Fournir le XML de métadonnées

Le XML de métadonnées précédemment créé doit maintenant être disponible sur notre serveur Linux dans le répertoire `/etc/apache2/mellon` afin que Mellon puisse l'utiliser.

!!!attention "Nom de fichier"

    Veuillez ajuster le nom du fichier à `AzureAD_metadata.xml` dans `mellon.conf`.
    Sinon, ajustez le nom de fichier dans `mellon.conf`.

Maintenant que nous avons créé toutes les configurations jusqu'à présent, nous pouvons les tester et activer tous les mods nécessaires.

### Tester la configuration

```shell
sudo apache2ctl configtest
```

### Activer les mods et les configurations

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

À ce stade, nous avons terminé la configuration de notre serveur Linux.

Si nous ouvrons à nouveau l'URL dans notre navigateur `https://tu2-samlsso.synetics.test`, nous serons redirigés vers la connexion Azure AD.
Après une connexion réussie, nous sommes redirigés vers notre i-doit et nous sommes connectés avec succès.

!!! info "Retour à l'écran de connexion"

    Si un utilisateur se connecte et n'existe pas encore dans i-doit, cet utilisateur est automatiquement redirigé vers l'écran de connexion i-doit et peut se connecter avec un utilisateur local.
