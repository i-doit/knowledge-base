# i-doit pro mit OpenID-Connect Authentifizierung am Beispiel Google Login

OAuth Anmeldedaten erstellen
----------------------------

Gehe auf [https://console.developers.google.com/](https://console.developers.google.com/)

1.  Auf den Homebildschirm gehen
2.  Anmeldedaten auswählen
3.  Anmeldedaten erstellen
4.  OAuth-Client-ID auswählen

[![OAuth Anmeldedaten erstellen](../assets/images/de/anwendungsfaelle/open-id-connect/1-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/1-oid.png)

1.  Webanwendung auswählen
2.  Als Namen eine wiedererkennbare Bezeichnung eingeben
3.  Als Autorisierte Weiterleitungs-URL eine URL angebe, die hinter der zu sichernden Webressource liegt, aber auf keinen Inhalt zeigt (!).
    Die hier exemplarisch angegebene URL soll ab [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/) mit der Authentifizierung abgesichert werden.
    Die angehangene **Ressource "redirect\_uri" existiert nicht** auf dem Webserver!

[![OAuth Anmeldedaten erstellen](../assets/images/de/anwendungsfaelle/open-id-connect/2-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/2-oid.png)

1.  Client-ID kopieren, diese wird später benötigt
2.  Client Secret kopieren, dieses wird später benötigt
3.  Den OAuth Zustimmungsbildschirm konfigurieren
    (Dies ist **für einen ersten Test nicht notwendig**, aber für einen Produktionsbetrieb)

[![OAuth Anmeldedaten erstellen](../assets/images/de/anwendungsfaelle/open-id-connect/3-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/3-oid.png)

Webserver einrichten
--------------------

#### Unter **Debian 10** das Paket **mod\_auth\_openidc** für Apache installieren:

```
    sudo apt install libapache2-mod-auth-openidc
```

#### In der Apache Config folgenden Code einfügen

```
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

##### So sieht es im Test live aus:

[![live](../assets/images/de/anwendungsfaelle/open-id-connect/4-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/4-oid.png)

#### Den Webserver neu starten

    sudo systemctl restart apache2

Authentifizierung testen und finalisieren
-----------------------------------------

Eine Datei identity.php anlegen. In diesem Fall /var/www/html/i-doit/identity.php.

```
    <?php
    echo $_SERVER['REMOTE_USER'];
    #print_r(array_map("htmlentities", apache_request_headers()));
    ?>
```

1.  Die Datei im Browser aufrufen
2.  Per Google anmelden
    [![Google anmelden](../assets/images/de/anwendungsfaelle/open-id-connect/5-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/5-oid.png)
3.  Die erscheinende ID überprüfen (Es sollte der E-Mail entsprechen)
4.  In i-doit pro einloggen und für den gewünschten i-doit pro User als Login Namen eintragen.
    **(!) Wichtig ist, dass der Domain Part ab dem @ Zeichen von i-doit pro nicht berücksichtigt wird. Daher muss der Name auf den vorderen Teil gekürzt werden:****Aus "testaccount@[i-doit.com](http://i-doit.com)" wird "testaccount".**

[![Google anmelden](../assets/images/de/anwendungsfaelle/open-id-connect/6-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/6-oid.png)

[![Google anmelden](../assets/images/de/anwendungsfaelle/open-id-connect/7-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/7-oid.png)

SSO in i-doit pro aktivieren
------------------------

1.  Die i-doit pro Administration aufrufen
2.  Systemeinstellungen auswählen
3.  Unter Single-SignOn Active auf **yes** setzen
4.  Abspeichern

[![SSO in i-doit pro aktivieren](../assets/images/de/anwendungsfaelle/open-id-connect/8-oid.png)](../assets/images/de/anwendungsfaelle/open-id-connect/8-oid.png)

Fertig! Wird i-doit pro nun aufgerufen, erscheint zunächst die Google Authentifizierung. Nach erfolgreicher Authentifizierung ist der Anwender direkt mit dem über den mit dem User Name verknüpften Konto eingelogged.
