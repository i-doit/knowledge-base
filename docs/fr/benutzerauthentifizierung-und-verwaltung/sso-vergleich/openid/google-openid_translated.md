<!-- TRANSLATED by md-translate -->
# Google Authentifizierung via OpenID

# Authentification Google via OpenID

## OAuth Anmeldedaten erstellen

## Créer des identifiants OAuth

Gehe auf [https://console.developers.google.com/](https://console.developers.google.com/)

Va sur [https://console.developers.google.com/](https://console.developers.google.com/)

1. Auf den Homebildschirm gehen
2. Anmeldedaten auswählen
3. Anmeldedaten erstellen
4. OAuth-Client-ID auswählen

1. aller sur l'écran d'accueil
2. sélectionner les données de connexion
3. créer des données de connexion
4. sélectionner l'ID client OAuth

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)

[ ![Créer des identifiants OAuth](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/1-oid.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/1-oid.png)

1. Webanwendung auswählen
2. Als Namen eine wiedererkennbare Bezeichnung eingeben
3. Als Autorisierte Weiterleitungs-URL eine URL angebe, die hinter der zu sichernden Webressource liegt, aber auf keinen Inhalt zeigt (!).
 Die hier exemplarisch angegebene URL soll ab [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/) mit der Authentifizierung abgesichert werden.
 Die angehangene **Ressource "redirect_uri" existiert nicht** auf dem Webserver!

1. sélectionner l'application web
2. saisir comme nom une désignation reconnaissable
3. indiquer comme URL de redirection autorisée une URL qui se trouve derrière la ressource web à sécuriser, mais qui ne pointe sur aucun contenu ( !).
 L'URL indiquée ici à titre d'exemple doit être sécurisée avec l'authentification à partir de [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/).
 La **ressource "redirect_uri" jointe n'existe pas** sur le serveur web !

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)

[ ![Créer des identifiants OAuth](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/2-oid.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/2-oid.png)

1. Client-ID kopieren, diese wird später benötigt
2. Client Secret kopieren, dieses wird später benötigt
3. Den OAuth Zustimmungsbildschirm konfigurieren
 (Dies ist **für einen ersten Test nicht notwendig**, aber für einen Produktionsbetrieb)

1. copier l'ID client, celui-ci sera nécessaire plus tard
2. copier le secret client, qui sera nécessaire plus tard
3. configurer l'écran d'approbation OAuth.
 (Ceci n'est pas nécessaire **pour un premier test**, mais l'est pour un fonctionnement en production)

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)

[ ![Créer des identifiants OAuth](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/3-oid.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/3-oid.png)

## Webserver einrichten

## Configurer un serveur web

### Unter **Debian 10** das Paket **mod_auth_openidc** für Apache installieren

### Sous **Debian 10**, installez le paquet **mod_auth_openidc** pour Apache

```shell
sudo apt install libapache2-mod-auth-openidc
```

### In der Apache Config folgenden Code einfügen

### Insérer le code suivant dans Apache Config

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

### So sieht es im Test live aus

### Voici à quoi ressemble le test en direct

[![live](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)

[ ![live](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaisonsso/openid/google-openid/4-oid.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/comparaisonsso/openid/google-openid/4-oid.png)

### Den Webserver neu starten

### Redémarrer le serveur web

```shell
sudo systemctl restart apache2
```

### Authentifizierung testen und finalisieren

### Tester et finaliser l'authentification

Eine Datei identity.php anlegen. In diesem Fall /var/www/html/i-doit/identity.php.

Créer un fichier identity.php. Dans ce cas, /var/www/html/i-doit/identity.php.

```php
<?php
echo $_SERVER['REMOTE_USER'];
#print_r(array_map("htmlentities", apache_request_headers()));
?>
```

1. Die Datei im Browser aufrufen
2. Per Google anmelden
 [![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)
3. Die erscheinende ID überprüfen (Es sollte der E-Mail entsprechen)
4. In i-doit einloggen und für den gewünschten i-doit User als Login Namen eintragen.
    !!! warning
          Wichtig ist, dass der Domain Part ab dem @ Zeichen von i-doit nicht berücksichtigt wird. Daher muss der Name auf den vorderen Teil gekürzt werden:Aus "testaccount@[i-doit.com](http://i-doit.com)" wird "testaccount".

1. ouvrir le fichier dans le navigateur
2. se connecter via Google
 [ ![Se connecter à Google](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/5-oid.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/5-oid.png)
3. vérifier l'ID qui apparaît (il doit correspondre à l'e-mail)
4. se connecter à i-doit et entrer le nom de connexion de l'utilisateur i-doit souhaité.
    ! !! warning
          Il est important de noter que la partie du domaine à partir du caractère @ n'est pas prise en compte par i-doit. C'est pourquoi le nom doit être raccourci à la partie antérieure : "testaccount@[i-doit.com](http://i-doit.com)" devient "testaccount".

[![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)

[ ![Connexion Google](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/6-oid.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/6-oid.png)

[![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)

[ ![Connexion Google](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/7-oid.png)](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/7-oid.png)

## SSO in i-doit aktivieren

## Activer le SSO dans i-doit

1. Die i-doit Administration aufrufen
2. Systemeinstellungen auswählen
3. Unter Single-SignOn Active auf **yes** setzen
4. Abspeichern

1. ouvrir l'administration i-doit
2. sélectionner les paramètres système
3. sous Single-SignOn Active, régler sur **yes**.
4. enregistrer

[![SSO in i-doit aktivieren](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)

[ ![Activer le SSO dans i-doit](../../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/8-oid.png)](../../assets/images/fr/authentification et gestion des utilisateurs/sso-comparaison/openid/google-openid/8-oid.png)

Fertig! Wird i-doit nun aufgerufen, erscheint zunächst die Google Authentifizierung. Nach erfolgreicher Authentifizierung ist der Anwender direkt mit dem über den mit dem User Name verknüpften Konto eingelogged.

C'est terminé ! Si i-doit est maintenant appelé, l'authentification Google apparaît d'abord. Une fois l'authentification réussie, l'utilisateur est connecté directement avec le compte lié au nom d'utilisateur.