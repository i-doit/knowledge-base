**Voraussetzungen**
-------------------

*   Debian 10
*   Installiertes i-doit
*   Server muss das Internet erreichen können
*   Server muss einen gültigen DNS Namen haben
*   Server muss über SSL erreichbar sein  
    
*   Zugang zu Google **APIs & Dienste**

OAuth Anmeldedaten erstellen
----------------------------

Gehe auf [https://console.developers.google.com/](https://console.developers.google.com/)

1.  Auf den Homebildschirm gehen
2.  Anmeldedaten auswählen
3.  Anmeldedaten erstellen
4.  OAuth-Client-ID auswählen

![](/download/attachments/82575935/01.png?version=1&modificationDate=1580112680508&api=v2)

  

1.  Webanwendung auswählen
2.  Als Namen eine wiedererkennbare Bezeichnung eingeben
3.  Als Autorisierte Weiterleitungs-URL eine URL angebe, die hinter der zu sichernden Webressource liegt, aber auf keinen Inhalt zeigt (!).  
    Die hier exemplarisch angegebene URL soll ab [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/) mit der Authentifizierung abgesichert werden.  
    Die angehangene **Ressource “redirect\_uri” existiert nicht** auf dem Webserver!

![](/download/attachments/82575935/02.png?version=1&modificationDate=1580112680499&api=v2)

1.  Client-ID kopieren, diese wird später benötigt
2.  Client Secret kopieren, dieses wird später benötigt
3.  Den OAuth Zustimmungsbildschirm konfigurieren  
    (Dies ist **für einen ersten Test nicht notwendig**, aber für einen Produktionsbetrieb)

![](/download/attachments/82575935/03.png?version=1&modificationDate=1580112680489&api=v2)

Webserver einrichten
--------------------

#### Unter **Debian 10** das Paket **mod\_auth\_openidc** für Apache installieren:  

[?](#)

`sudo` `apt` `install` `libapache2-mod-auth-openidc`

#### In der Apache Config folgenden Code einfügen

[?](#)

`OIDCProviderMetadataURL https:``//accounts``.google.com/.well-known``/openid-configuration`

`OIDCClientID <Client_ID_aus_der_Google_API_Console>`

`OIDCClientSecret <Client_Secret_aus_der_Google_API_Console>`

`# OIDCRedirectURI ist die vorher angegebene Redirect URL, die auf einen nicht`

`# existierenden Content zeigt, der hinter der abgesicherten URL liegt`

`OIDCRedirectURI https:``//``<SERVER-URL>``/i-doit/redirect_uri`

`OIDCCryptoPassphrase <Irgendein_Passwort_definieren_für_die_Verschlüsselung>`

`OIDCProviderIssuer accounts.google.com`

`OIDCProviderAuthorizationEndpoint https:``//accounts``.google.com``/o/oauth2/auth`

`OIDCProviderTokenEndpoint https:``//accounts``.google.com``/o/oauth2/token`

`OIDCProviderTokenEndpointAuth client_secret_post`

`OIDCProviderUserInfoEndpoint https:``//www``.googleapis.com``/plus/v1/people/me/openIdConnect`

`OIDCProviderJwksUri https:``//www``.googleapis.com``/oauth2/v2/certs`

`OIDCRemoteUserClaim email`

`OIDCScope` `"email"`

`<Location` `/i-doit/``>`

`AuthType openid-connect`

`Require valid-user`

`<``/Location``>`

##### So sieht es im Test live aus:

![](/download/attachments/82575935/04.png?version=1&modificationDate=1580112680476&api=v2)

#### Den Webserver neu starten

[?](#)

`sudo` `systemctl restart apache2`

Authentifizierung testen und finalisieren
-----------------------------------------

Eine Datei `identity.php` anlegen. In diesem Fall `/var/www/html/i-doit/identity.php`.

[?](#)

`<?php`

`echo` `$_SERVER[``'REMOTE_USER'``];`

`#print_r(array_map("htmlentities", apache_request_headers()));`

`?>`

  

1.  Die Datei im Browser aufrufen
2.  Per Google anmelden  
    ![](/download/attachments/82575935/05.png?version=1&modificationDate=1580112680463&api=v2)  
      
    
3.  Die erscheinende ID überprüfen (Es sollte der E-Mail entsprechen)
4.  In i-doit einloggen und für den gewünschten i-doit User als Login Namen eintragen.  
    **(!) Wichtig ist, dass der Domain Part ab dem @ Zeichen von i-doit nicht berücksichtigt wird. Daher muss der Name auf den vorderen Teil gekürzt werden:****Aus “testaccount@[i-doit.com](http://i-doit.com)” wird “testaccount”.**

  

![](/download/attachments/82575935/06.png?version=1&modificationDate=1580112680417&api=v2)

![](/download/attachments/82575935/07.png?version=1&modificationDate=1580112680402&api=v2)

SSO in i-doit aktivieren
------------------------

1.  Die i-doit Administration aufrufen
2.  Systemeinstellungen auswählen
3.  Unter Single-SignOn Active auf `**yes**` setzen
4.  Abspeichern

![](/download/attachments/82575935/08.png?version=1&modificationDate=1580112680371&api=v2)

  
  

Fertig! Wird i-doit nun aufgerufen, erscheint zunächst die Google Authentifizierung. Nach erfolgreicher Authentifizierung ist der Anwender direkt mit dem über den mit dem User Name verknüpften Konto eingelogged.