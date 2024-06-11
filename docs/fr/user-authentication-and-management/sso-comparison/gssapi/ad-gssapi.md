# SSO via Active Directory with GSSAPI

Pour une connexion automatique à i-doit au sein d'un intranet, l'authentification via Single Sign On (SSO) est la meilleure option.

Conditions et hypothèses
--------------------------

Les conditions suivantes sont à la base de cet article :

*   i-doit est [installé](../../../installation/manual-installation/index.md) sous GNU/Linux.
*   Active Directory (AD) sur Windows Server 2008/2012 est utilisé pour l'authentification.

Cet article décrit comment configurer Single Sign On (SSO) sous le serveur web Apache en utilisant \mod-auth-gssapi\.

!!! attention "Majuscules et minuscules"
    La configuration est sensible à la casse.

Configurer Active Directory (AD)
-------------------------------

Un utilisateur est généré dans AD pour l'accès SSO. Exemple :

*   Nom du serveur i-doit : idoit.mydomain.local
*   Domaine AD : addomain.local
*   Utilisateur SSO : ssouser
*   Mot de passe : password

Configuration du serveur i-doit
----------------------------------

Installation de tous les paquets requis

Debian GNU/Linux ou Ubuntu Linux :

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi kinit krb5-user
```

Info:
Indiquer le domaine "REALM": addomain.local
Nom d'hôte "Serveur de mot de passe" mydomaincontroller

Redémarrer Apache:

```shell
sudo systemctl restart apache2.service
```

Enregistrement initial et création du keytab
-----------------------------------------------

Authentification du serveur:

```shell
kinit <Compte Administrateur AD>
```

Création du keytab:
```shell
msktutil --server <Contrôleur de domaine AD> --user-creds-only --update --use-service-account --service HTTP/idoit.mydomain.local --keytab /etc/apache2/apache_krb5.keytab --password <MOT DE PASSE DU COMPTE DE SERVICE> --account-name ssouser
```

Attribuer des autorisations pour Apache

```shell
chmod 644 /etc/apache2/apache_krb5.keytab
```

Configurer le serveur Web Apache
---------------------------

Ce fichier personnalisera la nouvelle configuration VHost:

```shell
sudo nano /etc/apache2/sites-available/i-doit.conf
```

```shell
    <Directory /var/www/html/>

            AuthType GSSAPI
            AuthName "i-doit Kerberos auth"
            GssapiBasicAuth On
            GssapiCredStore keytab:/etc/apache2/apache_krb5.keytab
            GssapiLocalName On

            Require valid-user

    </Directory>
```

Ensuite, redémarrez Apache une fois pour que les changements prennent effet

```shell
sudo systemctl restart apache2.service
```

Pour tester la configuration, exécutez la commande suivante:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```
