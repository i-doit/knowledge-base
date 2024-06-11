# Authentification Google via OpenID {/%%%/}

## Exigences {/%%%/}

*   Debian 10
*   i-doit installé
*   Le serveur doit avoir accès à Internet
*   Le serveur doit avoir un nom DNS valide
*   Le serveur doit être accessible via SSL
*   Accès aux **APIs & Services Google**

## Créer des identifiants de connexion OAuth {/%%%/}

Ouvrez [https://console.developers.google.com/](https://console.developers.google.com/)

1.  Accédez à l'écran d'accueil
2.  Sélectionnez "Identifiants"
3.  Sélectionnez "Créer des identifiants"
4.  Sélectionnez "ID client OAuth"

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/1-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/1-oidc.png)

1.  Sélectionnez "Application Web"
2.  Utilisez un titre reconnaissable pour le nom
3.  Spécifiez une URL de redirection autorisée qui se trouve derrière la ressource web à sauvegarder mais ne pointe vers aucun contenu (!).
    L'URL spécifiée ici à titre d'exemple doit être sécurisée avec une authentification depuis [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/).
    La ressource attachée **"redirect_uri" n'existe pas** sur le serveur web!

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/2-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/2-oidc.png)

1. Copiez l'identifiant du client (sera nécessaire ultérieurement)
2. Copiez le secret du client (sera nécessaire ultérieurement)
3. Configurez l'écran d'approbation OAuth
   (Ce n'est **pas nécessaire pour un test** mais sera nécessaire sur les systèmes en direct)

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/3-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/3-oidc.png)

## Configurez le serveur web

### Installez le package Apache **mod_auth_openidc** dans votre installation de **Debian 10**

```shell
sudo apt install libapache2-mod-auth-openidc
```

### Ajoutez le code suivant à votre configuration Apache :

```ini
OIDCProviderMetadataURL https://accounts.google.com/.well-known/openid-configuration
OIDCClientID <Client_ID_aus_der_Google_API_Console>
OIDCClientSecret <Client_Secret_aus_der_Google_API_Console>
# OIDCRedirectURI ist die vorher angegebene Redirect URL, die auf einen nicht
# existierenden Content zeigt, der hinter der abgesicherten URL liegt
OIDCRedirectURI https://<SERVER-URL>/i-doit/redirect_uri
OIDCCryptoPassphrase <Irgendein_Passwort_definieren_für_die_Verschlüsselung>
OIDCProviderIssuer accounts.google.com
OIDCProviderAuthorizationEndpoint https://accounts.google.com/o/oauth2/auth
OIDCProviderTokenEndpoint https://accounts.google.com/o/oauth2/token
OIDCProviderTokenEndpointAuth client_secret_post
OIDCProviderUserInfoEndpoint https://www.googleapis.com/plus/v1/people/me/openIdConnect
OIDCProviderJwksUri https://www.googleapis.com/oauth2/v2/certs
OIDCRemoteUserClaim email
OIDCScope "email"
<Location /i-doit/>
    AuthType openid-connect
    Require valid-user
</Location>
```

### Voici à quoi ressemble la configuration :

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/4-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/4-oidc.png)

### Redémarrer votre serveur web

```shell
sudo systemctl restart apache2
```

### Tester l'authentification et terminer les dernières étapes

Créez le fichier identity.php. Dans notre cas, il sera créé à /var/www/html/i-doit/identity.php.

```php
<?php
echo $_SERVER['REMOTE_USER'];
#print_r(array_map("htmlentities", apache_request_headers()));
?>
```

1. Ouvrez le fichier dans votre navigateur
2. Connectez-vous via Google

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/5-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/5-oidc.png)

1. Vérifiez l'ID affiché (Cela devrait être l'ID de l'adresse e-mail)
2. Connectez-vous à votre i-doit et utilisez ceci comme nom d'utilisateur pour l'utilisateur i-doit correspondant

!!! warning
    La partie du domaine de l'adresse, commençant par @ n'est pas utilisée. Le nom doit être réduit à la première partie : "testaccount@i-doit.com" devient "testaccount".

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/6-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/6-oidc.png)

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/7-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/7-oidc.png)

### Activer le SSO dans i-doit

1. Ouvrez votre administration i-doit
2. Sélectionnez les paramètres du système
3. Sélectionnez "**oui**" à l'option "**Single Sign on**" "**Actif**"
4. Enregistrez

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/8-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/8-oidc.png)

Terminé ! Si i-doit est maintenant ouvert, l'authentification Google apparaît en premier. Après une authentification réussie, l'utilisateur est directement connecté avec le compte lié au nom d'utilisateur.


