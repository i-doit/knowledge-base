**Requirements**
----------------

*   Debian 10
*   installed i-doit
*   Server needs internet access  
    
*   Server needs a valid DNS name
*   Server has to be reachable via SSL  
    
*   Access to Google **APIs & Dienste**

Create OAuth login credentials  

---------------------------------

Open [https://console.developers.google.com/](https://console.developers.google.com/)

1.  Go the the home screen  
    
2.  Select "`Credentials`"  
    
3.  Select "`Create Credentials`"  
    
4.  Select "`OAuth client ID`"  
    

![](/download/attachments/82575980/01b.png?version=1&modificationDate=1580129197293&api=v2)

  

1.  Select "`Web application`"
2.  Use a recognizable title for the name
3.  Specify as Authorized Redirection URL a URL that is behind the web resource to be backed up but does not point to any content (!).  
    The URL specified here as an example should be secured with authentication from [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/).  
    The attached resource **"redirect\_uri" does not exist** on the web server!

![](/download/thumbnails/82575980/02b.png?version=1&modificationDate=1580129197281&api=v2)

  

1.  Copy Client ID (will be needed later)  
    
2.  Copy Client Secret (will be needed later)  
    
3.  Configure OAuth approval screen  
    (This is **not neccessary for a test** but will be needed on live systems)

![](/download/thumbnails/82575980/03b.png?version=1&modificationDate=1580129197265&api=v2)

Configure webserver  

----------------------

#### Install the Apache package **mod\_auth\_openidc** in your installation of **Debian 10**  

[?](#)

`sudo` `apt` `install` `libapache2-mod-auth-openidc`

#### Add the following code to your Apache configuration:  

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

##### This is how the configuration looks:  

![](/download/thumbnails/82575980/04.png?version=2&modificationDate=1580129197252&api=v2)

#### Restart your webserver  

[?](#)

`sudo` `systemctl restart apache2`

Test authentication and finish last steps  

--------------------------------------------

Create the file `identity.php`. In our case it will be created at `/var/www/html/i-doit/identity.php`.

[?](#)

`<?php`

`echo` `$_SERVER[``'REMOTE_USER'``];`

`#print_r(array_map("htmlentities", apache_request_headers()));`

`?>`

  

1.  Open the file in your browser  
    
2.  Login via Google

![](/download/attachments/82575980/05b.png?version=1&modificationDate=1580129197240&api=v2)

  

1.  Verify the displayed ID (This should be the ID from the e-mail address)  
    
2.  Login into your i-doit and use this as the login name for the corresponding i-doit user  
    **(!) Important: The domain part of the address, beginning with @ is not used. The name has to be reduced to the first part:****“testaccount@i-doit.com” becomes “testaccount”.**

![](/download/attachments/82575980/06.png?version=2&modificationDate=1580129197225&api=v2)

![](/download/attachments/82575980/07.png?version=2&modificationDate=1580129197187&api=v2)

Enable SSO in i-doit  

-----------------------

1.  Open your i-doit administration  
    
2.  Select system settings  
    
3.  Select "`**yes**`" at "**Single Sign on**" option "**`Active`**"  
    
4.  Save

![](/download/attachments/82575980/08.png?version=2&modificationDate=1580129197173&api=v2)  
  

Done! If i-doit is now opened, the Google authentication appears first. After successful authentication, the user is directly logged in with the account linked to the user name.