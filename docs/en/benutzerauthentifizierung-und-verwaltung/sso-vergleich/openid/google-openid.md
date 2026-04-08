---
title: Google Authentication via OpenID
description: "This guide shows you how to secure i-doit with Google OpenID Connect."
icon:
status:
lang: en
---
# Google Authentication via OpenID

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide shows you how to secure i-doit with Google OpenID Connect. Users then log in via their Google account.

## Create OAuth Credentials

Open the [Google API Console](https://console.developers.google.com/) and perform the following steps:

1. Go to the home screen.
2. Select **Credentials**.
3. Click **Create Credentials**.
4. Select **OAuth Client ID**.

[![Create OAuth credentials](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/1-oid.png)

1. Select **Web application** as the type.
2. Assign a recognizable name.
3. Enter an **Authorized redirect URL** that lies behind the web resource to be protected but does not point to any existing content.
    In the example, everything from `https://gauth.i-doit.com/i-doit/` is protected -- the appended resource `redirect_uri` does not actually exist on the web server.

[![Create OAuth credentials](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/2-oid.png)

1. Copy the **Client ID** -- you will need it later.
2. Copy the **Client Secret** -- you will need it later.
3. Configure the **OAuth consent screen** (not required for an initial test, but necessary for production use).

[![Create OAuth credentials](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/3-oid.png)

## Set Up the Web Server

### Install Package (Debian 10)

```shell
    sudo apt install libapache2-mod-auth-openidc
```

### Adjust Apache Configuration

Add the following code to the Apache configuration:

```ini
OIDCProviderMetadataURL https://accounts.google.com/.well-known/openid-configuration
OIDCClientID <Client_ID_from_Google_API_Console>
OIDCClientSecret <Client_Secret_from_Google_API_Console>
# OIDCRedirectURI is the previously specified redirect URL that points to non-existing
# content behind the protected URL
OIDCRedirectURI https://<SERVER-URL>/i-doit/redirect_uri
OIDCCryptoPassphrase <Define_any_password_for_encryption>
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

### Live View During Testing

[![live](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/4-oid.png)

### Restart the Web Server

```shell
sudo systemctl restart apache2
```

### Test and Finalize Authentication

Create a file `identity.php` (in this case at `/var/www/html/i-doit/identity.php`):

```php
<?php
echo $_SERVER['REMOTE_USER'];
#print_r(array_map("htmlentities", apache_request_headers()));
?>
```

1. Open the file in your browser.
2. Log in via Google.
    [![Google login](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/5-oid.png)
3. Check the displayed ID (it should match the email address).
4. Log in to i-doit and enter the ID as the login name for the desired user.

    !!! warning
         Important: The domain part after the @ sign is not considered by i-doit. Therefore, the name must be shortened to the part before it: "testaccount@[i-doit.com](http://i-doit.com)" becomes "testaccount".

[![Google login](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/6-oid.png)

[![Google login](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/7-oid.png)

## Enable SSO in i-doit

1. Open the i-doit Administration.
2. Select **System Settings**.
3. Under **Single Sign-On**, set the option **Active** to **yes**.
4. Save the setting.

[![Enable SSO in i-doit](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/8-oid.png)

The setup is complete. When accessing i-doit, the Google authentication screen now appears first. After successful login, the user is directly logged in with the account linked via the login name.
