# ADFS (Active Directory) (SAML et Mellon)

Dans ce tutoriel, nous décrivons comment configurer l'authentification unique (SSO) pour i-doit en utilisant SAML. Dans cet exemple, nous utilisons Mellon comme authentificateur contre LDAP-AD-FS.

## Préparatifs

Nous utilisons deux serveurs pour la configuration d'exemple, un serveur Windows avec domaine/AD et FS et un serveur Debian 11 avec Apache et Mellon :

| FQDN | IP  | Rôle | OS  |
| --- | --- | --- | --- |
| tu2-dc2.tu-synetics.test | 10.10.60.22 | AD, FS | Windows |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Configuration de base

✔ Le serveur Windows doit avoir un AD configuré qui inclut le rôle AD-FS.<br>
✔ I-doit est déjà pré-installé et utilisable.

### Installation des paquets

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

L'architecture du système doit être x86 en 64 bits.

## Configuration de Mellon

Nous créons un répertoire pour cela sous `/etc/apache2` et stockons nos données de configuration ici.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Avec la commande suivante, nous créons nos métadonnées Mellon "Veuillez ajuster les URL"

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

Cela crée maintenant les fichiers suivants

`https\_tu2\_samlsso.synetics.test\_.cert`<br>
`https\_tu2\_samlsso.synetics.test\_.key`<br>
`https\_tu2\_samlsso.synetics.test\_.xml`

Maintenant nous devons récupérer les métadonnées AD-FS de notre AD "Veuillez ajuster les URL"

```shell
wget https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
```

Maintenant nous devons créer notre configuration Mellon.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Insérez les directives de configuration suivantes basées sur l'exemple:

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

## Configuration Apache2

Tout d'abord, nous créons un certificat auto-signé "le nom peut être individuel".

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Créer VHost :

```shell
sudo nano /etc/apache2/sites-available/mywebserver.con
```

Dans cet exemple, seul le répertoire protégé via Mellon est protégé sous `/var/www/html`. Nous pouvons donc créer ultérieurement une autre configuration VHost pour installer par exemple i-doit pro.

Créer le répertoire :

```shell
sudo mkdir -p /var/www/html/protected
```

Créer un exemple de fichier html pour tester l'appel ultérieurement :

```shell
sudo nano /var/www/html/protected/index.html
```

Tester la configuration :

```shell
sudo apache2ctl configtest
```

Activer les modules et les configurations :

```shell
sudo a2enmod auth_mellon
```

Synchroniser l'heure :

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

À ce stade, nous avons terminé la configuration du serveur Linux pour le moment et pouvons maintenant nous concentrer sur notre AD.

## Configuration AD-FS

Téléchargez d'abord le fichier `mellon_metadata.xml` du serveur Linux par exemple via WinSCP et enregistrez-le.

[![Ajouter une confiance de partie fiable](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-1.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-1.png)

Les revendications restent actives, puis sur Démarrer

[![Bienvenue](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-2.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-2.png)

À l'étape suivante, nous sélectionnons "importer des données ...." et naviguons vers notre XML précédemment enregistré

[![Sélectionner la source de données](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-3.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-3.png)

La note suivante peut être ignorée si elle apparaît.

[![Gestion AD FS](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-4.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-4.png)

Maintenant, nous saisissons le FQDN de notre serveur Linux.

[![Spécifier le nom d'affichage](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-5.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-5.png)

Dans l'étape suivante, nous pouvons contrôler les accès, pour simplifier, nous le laissons pour le moment sur "Permettre à tout le monde".

[![Choisir la politique de contrôle d'accès](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-6.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-6.png)

Nous pouvons également ignorer la fenêtre suivante et simplement cliquer sur Suivant.

[![Prêt à ajouter la confiance](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-7.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-7.png)

Enfin, cliquez simplement sur Fermer et la Confiance de Partie est créée.

[![Terminer](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-8.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-8.png)

Maintenant, nous devons définir les politiques d'émission de revendications afin que notre utilisateur puisse également se connecter via le courrier électronique.

[![Modifier la revendication AD FS](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-9.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-9.png)

Maintenant, une fenêtre s'ouvre et nous cliquons sur Ajouter une règle.

[![Ajouter une règle](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-10.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-10.png)

Maintenant, nous sélectionnons Envoyer les attributs LDAP en tant que revendication et cliquons sur Suivant

[![Choisir le type de règle](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-11.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-11.png)

Nous donnons à la règle un nom unique et ajoutons le mappage comme indiqué.

[![Configurer la règle de revendication](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-12.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-12.png)

Ensuite, nous créons une autre règle et sélectionnons Transformer une réclamation entrante

[![Sélectionnez le modèle de règle](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-13.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-13.png)

Veuillez configurer comme suit :

[![Configurer la règle](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-14.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-14.png)

Maintenant, nous avons un Trust de partie Relying entièrement configuré et pouvons tester l'authentification une fois.

[![Page de connexion](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-15.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-15.png)

## Test SAML-SSO

Ouvrez l'URL du serveur une fois dans le navigateur
Exemple :
[https://monserveurweb.example.com/protégé](https://monserveurweb.example.com/protégé)


Après une inscription réussie, nous devrions recevoir la sortie suivante.

[![Utilisateurs authentifiés uniquement](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-16.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-16.png)

## Installation i-doit pro

L'installation peut être effectuée comme décrit dans l'article KB pour [Debian](../../../installation/manual-installation/debian12.md).

## Connexion SSO pour i-doit pro

Pour cela, nous devons aller dans Administration -> Paramètres système et ajuster la configuration comme suit.
Informations importantes sur les contacts : **Il est obligatoire que l'adresse e-mail de l'utilisateur respectif soit enregistrée en tant que connexion dans i-doit !**

[![Paramètres SSO i-doit](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)

Étant donné que nous avons suivi nos instructions ou l'article KB actuellement, nous devons ajuster la configuration VHost afin de pouvoir maintenant nous connecter via SSO.

Désactiver le Vhost i-doit

```shell
sudo a2dissite i-doit
```

Personnaliser le Vhost Mellon créé au début

```shell
nano /etc/apache2/sites-enabled/tu2-samlsso.conf
```

Exemple :

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

Enfin, redémarrez Apache une fois

```shell
sudo systemctl restart apache2.service
```

**Terminé !**

Si nous ouvrons à nouveau l'URL dans notre navigateur et nous connectons, nous serons directement redirigés vers i-doit

!!! info "Retour à l'écran de connexion"
    Si un utilisateur se connecte et n'existe pas encore dans i-doit, cet utilisateur est automatiquement redirigé vers l'écran de connexion i-doit et peut se connecter avec un utilisateur local.
