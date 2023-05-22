# Google Authentifizierung (OPENID)

## Requirements

*   Debian 10
*   installed i-doit
*   Server needs internet accessy
*   Server needs a valid DNS name
*   Server has to be reachable via SSL
*   Access to Google **APIs & Dienste**

## Create OAuth login credentials

Open [https://console.developers.google.com/](https://console.developers.google.com/)

1.  Go the the home screen
2.  Select "Credentials"
3.  Select "Create Credentials"
4.  Select "OAuth client ID"

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/1-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/1-oidc.png)

1.  Select "Web application"
2.  Use a recognizable title for the name
3.  Specify as Authorized Redirection URL a URL that is behind the web resource to be backed up but does not point to any content (!).
    The URL specified here as an example should be secured with authentication from [https://gauth.i-doit.com/i-doit/](https://gauth.i-doit.com/i-doit/).
    The attached resource **"redirect_uri" does not exist** on the web server!

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/2-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/2-oidc.png)

1.  Copy Client ID (will be needed later)
2.  Copy Client Secret (will be needed later)
3.  Configure OAuth approval screen
    (This is **not neccessary for a test** but will be needed on live systems)

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/3-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/3-oidc.png)

## Configure webserver

### Install the Apache package **mod_auth_openidc** in your installation of **Debian 10**

```shell
    sudo apt install libapache2-mod-auth-openidc
```

### Add the following code to your Apache configuration:

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

### This is how the configuration looks:

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/4-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/4-oidc.png)

### Restart your webserver

```
    sudo systemctl restart apache2
```

### Test authentication and finish last steps

Create the file identity.php. In our case it will be created at /var/www/html/i-doit/identity.php.

```php
    <?php
    echo $_SERVER['REMOTE_USER'];
    #print_r(array_map("htmlentities", apache_request_headers()));
    ?>
```

1.  Open the file in your browser
2.  Login via Google

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/5-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/5-oidc.png)

1.  Verify the displayed ID (This should be the ID from the e-mail address)
2.  Login into your i-doit and use this as the login name for the corresponding i-doit user
!!! warning ""
    The domain part of the address, beginning with @ is not used. The name has to be reduced to the first part:“testaccount@i-doit.com” becomes “testaccount”.

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/6-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/6-oidc.png)

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/7-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/7-oidc.png)

### Enable SSO in i-doit

1.  Open your i-doit administration
2.  Select system settings
3.  Select "**yes**" at "**Single Sign on**" option "**Active**"
4.  Save

[![openid-connect](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/8-oidc.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/openid/google-openid/8-oidc.png)

Done! If i-doit is now opened, the Google authentication appears first. After successful authentication, the user is directly logged in with the account linked to the user name.
