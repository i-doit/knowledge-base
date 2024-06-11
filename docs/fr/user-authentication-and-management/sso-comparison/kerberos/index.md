# Authentification unique (SSO)

L'authentification via l'Authentification unique (SSO) est bien adaptée pour une connexion automatisée à i-doit au sein d'un intranet.

!!! info "Cet article a été vérifié pour la version 1.17.2 de i-doit"

!!! info "Ce tutoriel ne fonctionne plus avec Debian 11 car le module Apache2 mod_auth_kerb n'est plus disponible."

    Vous devriez utiliser [GSSAPI](../gssapi/index.md) à la place.

Exigences et hypothèses

Les conditions suivantes sont à la base de cet article :

*   i-doit est [installé](../../../installation/manual-installation/setup.md) sur un système GNU/Linux
*   Un [Active Directory (AD)](../../ldap-directory/index.md) sur Windows Server 2008/2012 est utilisé pour l'authentification.

Cet article décrit comment configurer l'Authentification unique (SSO) dans un serveur web Apache avec auth_kerb.

!!! attention "Sensibilité à la casse"
    Une attention particulière doit être portée aux lettres majuscules et minuscules dans la configuration.

Configurer Active Directory (AD)
-------------------------------

Dans AD, un utilisateur est généré pour l'accès SSO. Exemple : 

{ /* examples */ }

*   Nom du serveur i-doit : **idoit.mydomain.local**
*   Domaine AD : **addomain.local**
*   Utilisateur SSO : **ssouser**
*   Mot de passe : **password**

Un fichier keytab est généré sur un contrôleur de domaine AD en utilisant l'utilisateur admin avec l'aide des utilitaires ktpass.

```shell
ktpass -princ HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab
```

Le fichier krb5.keytab généré est ensuite copié sur le serveur _i-doit_ à /etc/krb5.keytab.

Ensuite, ouvrez **Utilisateurs et ordinateurs Active Directory** (adsiedit.msc). Dans **Affichage**, activez l'option **Fonctionnalités avancées**. Maintenant, ouvrez l'objet utilisateur SSO. Recherchez les valeurs **userPrincipalName** et servicePrincipalName dans l'onglet **Éditeur d'attributs**. Dans les deux cas, **exactement une entrée** avec la valeur **HTTP/idoit.mydomain.local** doit être définie.

Configurer le serveur Web Apache
-------------------------------

Le module auth_kerb est requis pour le serveur web Apache.

Debian GNU/Linux ou Ubuntu Linux:

```shell
sudo apt install libapache2-mod-auth-kerb
```

Suse Linux Enterprise Server (SLES):

```shell
sudo zypper in apache2-mod_auth_kerb
```

Activer le module:

```shell
sudo a2enmod auth_kerb
```

Maintenant, la configuration pour Kerberos sera écrite (remplacez dc.mydomain.local par le contrôleur de domaine):

```shell
    # cat /etc/krb5.conf
    [libdefaults]
    default_realm = ADDOMAIN.LOCAL

    [realms]
    ADDOMAIN.LOCAL = {
    admin_server = dc.mydomain.local
    kdc          = dc.mydomain.local
    }

    [domain_realm]
    idoit.mydomain.local = ADDOMAIN.LOCAL
    .mydomain.local = ADDOMAIN.LOCAL
    mydomain.local = ADDOMAIN.LOCAL
```

Exécutez la commande suivante pour tester la configuration:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

Le mot de passe de l'utilisateur SSO est demandé. Avec la commande

```shell
klist
```
vous pouvez vérifier si un ticket valide existe ou non.

Ensuite, la configuration Apache pour le VHost auquel _i-doit_ est accessible est complétée dans la directive Directory:

```shell
    <Directory "/path/to/i-doit/">
        AuthType Kerberos
        KrbAuthRealms ADDOMAIN.LOCAL
        KrbServiceName HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL
        Krb5Keytab /etc/krb5.keytab
        KrbMethodNegotiate on
        KrbMethodK5Passwd off
        require valid-user
    </Directory>
```

Pour appliquer les modifications, le serveur web Apache doit être redémarré:

### Debian GNU/Linux ou Ubuntu ou Suse Linux Enterprise Server (SLES):

```shell
sudo systemctl restart apache2.service
```

Configurer i-doit
----------------

À partir de la version 1.5, le SSO peut être configuré via l'interface web d'i-doit. Les paramètres correspondants se trouvent dans **Administration → Paramètres système**. **SSO** doit être activé ici.

Configuration côté client du navigateur
-------------------------------------------

Enfin, chaque navigateur doit être configuré pour utiliser automatiquement le SSO.

### Microsoft Internet Explorer (IE) {/ * exemples * /}

Le serveur _i-doit_ doit être ajouté aux sites intranet locaux dans les paramètres d'IE. Après cela, l'élément **Connexion automatique avec le nom d'utilisateur et le mot de passe actuels** doit être activé sous **Authentification de l'utilisateur** dans l'option **Niveau personnalisé**. De plus, assurez-vous d'activer l'option **Authentification Windows intégrée** dans l'onglet **Avancé** des **Options Internet**.

### Mozilla Firefox et Google Chrome {/ * exemples * /}

Le SSO est également possible pour ces navigateurs. Des informations détaillées sur la configuration peuvent être trouvées sur Internet. Vous pouvez trouver un exemple pour Firefox [ici](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

Dépannage
----------

Si vous rencontrez des problèmes concernant l'authentification, les questions et les indications suivantes peuvent vous aider :

*   Comparez les paramètres de temps dans Linux et Windows DC. Sont-ils les mêmes ?
*   Dans la plupart des cas, le serveur n'est accessible que via le FQDN complet i-doit.mydomain.local.
*   Le serveur _i-doit_ a-t-il accès au contrôleur de domaine ? Y a-t-il un pare-feu entre ces deux éléments ?
*   L'utilisateur de domaine SSO est-il déverrouillé ?
*   Le DC peut-il être résolu par DNS à partir du serveur _i-doit_ ?
*   Le serveur web a-t-il l'autorisation de lecture pour le fichier krb5.keytab ?

I am ready to start translating the Markdown content into French. Please paste the content you would like me to translate.
