---
title: Google Authentifizierung via OpenID
description: "Diese Anleitung zeigt dir, wie du i-doit mit Google OpenID Connect absicherst."
icon:
status:
lang: de
---
# Google Authentifizierung via OpenID

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung zeigt dir, wie du i-doit mit Google OpenID Connect absicherst. Benutzer melden sich dann über ihr Google-Konto an.

## OAuth Anmeldedaten erstellen

Öffne die [Google API Console](https://console.developers.google.com/) und führe folgende Schritte aus:

1. Gehe auf den Homebildschirm.
2. Wähle **Anmeldedaten**.
3. Klicke auf **Anmeldedaten erstellen**.
4. Wähle **OAuth-Client-ID**.

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)

1. Wähle **Webanwendung** als Typ.
2. Vergib einen wiedererkennbaren Namen.
3. Trage als **Autorisierte Weiterleitungs-URL** eine URL ein, die hinter der zu schützenden Webressource liegt, aber auf keinen existierenden Inhalt zeigt.
    Im Beispiel wird ab `https://gauth.i-doit.com/i-doit/` abgesichert -- die angehaengte Ressource `redirect_uri` existiert dabei nicht auf dem Webserver.

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)

1. Kopiere die **Client-ID** -- du benötigst sie später.
2. Kopiere das **Client Secret** -- du benötigst es später.
3. Konfiguriere den **OAuth-Zustimmungsbildschirm** (für einen ersten Test nicht notwendig, aber für den Produktionsbetrieb).

[![OAuth Anmeldedaten erstellen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)

## Webserver einrichten

### Paket installieren (Debian 10)

```shell
    sudo apt install libapache2-mod-auth-openidc
```

### Apache-Konfiguration anpassen

Fuege folgenden Code in die Apache-Config ein:

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

### Live-Ansicht im Test

[![live](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)

### Webserver neu starten

```shell
sudo systemctl restart apache2
```

### Authentifizierung testen und finalisieren

Lege eine Datei `identity.php` an (in diesem Fall unter `/var/www/html/i-doit/identity.php`):

```php
<?php
echo $_SERVER['REMOTE_USER'];
#print_r(array_map("htmlentities", apache_request_headers()));
?>
```

1. Rufe die Datei im Browser auf.
2. Melde dich per Google an.
    [![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)
3. Überprüfe die erscheinende ID (sie sollte der E-Mail entsprechen).
4. Logge dich in i-doit ein und trage die ID als Login-Name für den gewünschten Benutzer ein.

    !!! warning
         Wichtig ist, dass der Domain Part ab dem @ Zeichen von i-doit nicht berücksichtigt wird. Daher muss der Name auf den vorderen Teil gekürzt werden:Aus "testaccount@[i-doit.com](http://i-doit.com)" wird "testaccount".

[![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)

[![Google anmelden](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)

## SSO in i-doit aktivieren

1. Rufe die i-doit-Administration auf.
2. Wähle **Systemeinstellungen**.
3. Setze unter **Single Sign-On** die Option **Active** auf **yes**.
4. Speichere die Einstellung.

[![SSO in i-doit aktivieren](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)

Die Einrichtung ist abgeschlossen. Beim Aufruf von i-doit erscheint jetzt zuerst die Google-Authentifizierung. Nach erfolgreicher Anmeldung ist der Benutzer direkt mit dem über den Login-Namen verknüpften Konto eingeloggt.
