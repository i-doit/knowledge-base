---
title: Google Authentication via OpenID
description: "This guide shows you how to set up Google OpenID Connect authentication for i-doit."
icon:
status:
lang: en
---
# Google Authentication via OpenID

!!! warning "Please create a complete backup before making any changes to an interface or import. If the result is not satisfactory, the backup can then be restored."

This guide shows you how to secure i-doit with Google OpenID Connect. Users then log in via their Google account.

## Prerequisites

* Apache web server with HTTPS/SSL enabled
* Debian 12 or compatible distribution
* Access to the [Google Cloud Console](https://console.cloud.google.com/)
* Google account with an existing Cloud project

***

## Step 1: Create an OAuth Client in the Google Cloud Console

1. Open the [Google Cloud Console](https://console.cloud.google.com/) and select your project.
2. In the left menu, navigate to **APIs & Services → Credentials**.
3. Click **+ Create Credentials** at the top.

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123351.png)

4. Select **OAuth Client ID** from the dropdown

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123405.png)

5. Select **Web application** as the **Application type**.
6. Enter a recognizable **Name**, e.g. `i-doit`.

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123423.png)

7. Leave the **Authorized JavaScript origins** field empty.
8. Under **Authorized redirect URIs**, add the following URL:

    ```
    https://<YOUR-SERVER-URL>/redirect_uri
    ```

    The path `/redirect_uri` does not need to exist as a file on the server — it only serves as the callback target for Google.
9. Click **Create**.

After creation, Google displays a dialog with the **Client ID** and **Client Secret**. Copy both values — you will need them for the Apache configuration.
![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123437.png)

<br>
!!! warning "Client Secret is only shown once"
The Client Secret is only fully displayed when this dialog is first opened. Save it immediately in a secure location.

<br>
!!! info "OAuth Consent Screen"
For production use, you also need to configure the **OAuth consent screen** (under **APIs & Services → OAuth consent screen**). This is not strictly required for an initial functional test.

***

## Step 2: Install the Apache Module

Install `libapache2-mod-auth-openidc` on the server running Apache:

```shell
sudo apt install libapache2-mod-auth-openidc
```

The module is activated automatically.

***

## Step 3: Adjust Apache Configuration

Open the SSL VirtualHost configuration (default: `/etc/apache2/sites-available/default-ssl.conf`) and add the OpenID Connect directives:

```apache
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        ServerAdmin webmaster@example.com
        ServerName <YOUR-SERVER-URL>

        DocumentRoot /var/www/html/
        <Directory /var/www/html/>
            AllowOverride All
            Require all granted
        </Directory>

        <FilesMatch "\.(cgi|shtml|phtml|php)$">
            SSLOptions +StdEnvVars
        </FilesMatch>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        SSLEngine on
        SSLCertificateFile    /path/to/cert.crt
        SSLCertificateKeyFile /path/to/key.key
        SSLProtocol -all +TLSv1.2 +TLSv1.3

        # Google discovery URL — all endpoints are loaded automatically
        OIDCProviderMetadataURL https://accounts.google.com/.well-known/openid-configuration

        # Client credentials from the Google Cloud Console
        OIDCClientID     <Client-ID>
        OIDCClientSecret <Client-Secret>

        # Redirect URI must match the entry in the Google Cloud Console
        OIDCRedirectURI https://<YOUR-SERVER-URL>/redirect_uri

        # Any password to encrypt the OIDC session cookies
        OIDCCryptoPassphrase <Secure-Password>

        # Session expires after 2 hours of inactivity
        OIDCSessionInactivityTimeout 7200

        # Use the Google account's email address as the login name
        OIDCRemoteUserClaim email
        OIDCScope "openid email profile"

        <Location />
            AuthType openid-connect
            Require valid-user
            AllowOverride All
        </Location>
    </VirtualHost>
</IfModule>
```

!!! info "Automatic Endpoint Discovery"
Thanks to `OIDCProviderMetadataURL`, the module automatically discovers all necessary Google endpoints. Manual configuration of individual endpoints is not required.

!!! warning "`<Location />` also protects the login page, the Admin Center and the API"
    With `Require valid-user` inside `<Location />`, Apache authenticates every request before it reaches i-doit. If the identity provider is unavailable, the i-doit login page, the Admin Center and the JSON-RPC API are locked out as well, and the [SSO fallback to local accounts](../sso-fallback/index.md) cannot take effect.

    To keep an emergency access, drop `<Location />` and restrict the protection to the SSO entry point instead. i-doit starts the SSO login only when it is called with `?use-sso=1`:

    ```apache
    <If "%{QUERY_STRING} =~ /(^|&)use-sso=1(&|$)/">
        AuthType openid-connect
        Require valid-user
    </If>

    <Location "/redirect_uri">
        AuthType openid-connect
        Require valid-user
    </Location>
    ```

    The second block is required because Google calls the redirect URI with its own parameters. As an alternative, keep `<Location />` protected and add a second VirtualHost that is reachable internally only, with the same `DocumentRoot` and without the OIDC directives.

***

## Step 4: Restart Apache

First, test the configuration for syntax errors:

```shell
sudo apache2ctl configtest
```

If `Syntax OK` appears, restart Apache:

```shell
sudo systemctl restart apache2
```

***

## Step 5: Enable SSO in the i-doit Admin Center

1. Open the **i-doit Admin Center** at `https://<SERVER-URL>/admin/`.
2. Log in with the Admin Center password.
3. Click **System settings** in the top navigation.
4. Scroll down to the **Single Sign On** section.
5. Set **Active** to **Yes**.
6. Select the desired tenant under **Default tenant**.
7. Leave **Use Domain Part** set to **No** — i-doit will then use the full email address as the login name.
8. Click **Save**.

[![Single Sign On settings](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/9-oid.png)](/img/assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/9-oid.png)

***

## Step 6: Prepare Users in i-doit

The **login name** of the i-doit user must exactly match the Google account's email address.

1. In i-doit, navigate to **Administration → Rights management → Persons**.
2. Open the desired user.
3. Set the **Login name** to the full Google email address, e.g. `user@example.com`.
4. Save the user.

!!! warning "Login name must be an email address"
When **Use Domain Part = No** is set, the full email address is expected as the login name, e.g. `user@example.com`.

***

## Result

The next time i-doit is called, the login page appears with the additional **SSO Login** option. After a click on it and a successful authentication with Google, the user is logged into i-doit without entering an i-doit password.

Since i-doit 29 the plain URL no longer logs users in automatically, which keeps a proper logout possible. To skip the extra click, call i-doit directly with `https://<YOUR-SERVER-URL>/?use-sso=1`, for example as a bookmark or as the browser start page.
