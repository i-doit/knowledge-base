---
title: Google Authentifizierung via OpenID
description: "Diese Anleitung zeigt dir, wie du i-doit mit Google OpenID Connect absicherst."
icon:
status:
lang: de
---
# Google Authentifizierung via OpenID

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung zeigt, wie du i-doit mit Google OpenID Connect absicherst. Benutzer melden sich dann über ihr Google-Konto an.

## Voraussetzungen

* Apache-Webserver mit aktiviertem HTTPS/SSL
* Debian 12 oder kompatible Distribution
* Zugang zur [Google Cloud Console](https://console.cloud.google.com/)
* Google-Konto mit einem bestehenden Cloud-Projekt

***

## Schritt 1: OAuth-Client in der Google Cloud Console anlegen

1. Öffne die [Google Cloud Console](https://console.cloud.google.com/) und wähle dein Projekt aus.
2. Navigiere im linken Menü zu **APIs und Dienste → Anmeldedaten**.
3. Klicke oben auf **+ Anmeldedaten erstellen**.

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123351.png)

4. Wähle im Dropdown **OAuth-Client-ID**

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123405.png)

5. Wähle als **Anwendungstyp** die Option **Webanwendung**.
6. Vergib einen wiedererkennbaren **Namen**, z.B. `i-doit`.

![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123423.png)

7. Lasse das Feld **Autorisierte JavaScript-Quellen** leer.
8. Füge unter **Autorisierte Weiterleitungs-URIs** die folgende URL hinzu:

    ```
    https://<DEINE-SERVER-URL>/redirect_uri
    ```

    Der Pfad `/redirect_uri` muss auf dem Server nicht als Datei existieren — er dient als Callback-Ziel für Google.
9. Klicke auf **Erstellen**.

Nach der Erstellung zeigt Google ein Dialogfeld mit **Client-ID** und **Clientschlüssel**. Kopiere beide Werte — du benötigst sie für die Apache-Konfiguration.
![google openid](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid-20260409-123437.png)

<br>
!!! warning "Clientschlüssel nur einmal sichtbar"
Der Clientschlüssel wird nur beim ersten Öffnen dieses Dialogs vollständig angezeigt. Speichere ihn sofort an einem sicheren Ort.

<br>
!!! info "OAuth-Zustimmungsbildschirm"
Für den Produktionsbetrieb muss zusätzlich der **OAuth-Zustimmungsbildschirm** konfiguriert werden (unter **APIs und Dienste → OAuth-Zustimmungsbildschirm**). Für einen ersten Funktionstest ist das nicht zwingend nötig.

***

## Schritt 2: Apache-Modul installieren

Installiere `libapache2-mod-auth-openidc` auf dem Server, auf dem Apache läuft:

```shell
sudo apt install libapache2-mod-auth-openidc
```

Das Modul wird automatisch aktiviert.

***

## Schritt 3: Apache-Konfiguration anpassen

Öffne die SSL-VirtualHost-Konfiguration (Standard: `/etc/apache2/sites-available/default-ssl.conf`) und ergänze sie mit folgenden Direktiven:

```apache
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        ServerAdmin webmaster@example.com
        ServerName <DEINE-SERVER-URL>

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

        # Google Discovery-URL — alle Endpoints werden automatisch geladen
        OIDCProviderMetadataURL https://accounts.google.com/.well-known/openid-configuration

        # Client-Zugangsdaten aus der Google Cloud Console
        OIDCClientID     <Client-ID>
        OIDCClientSecret <Clientschlüssel>

        # Redirect-URI muss mit dem Eintrag in der Google Cloud Console übereinstimmen
        OIDCRedirectURI https://<DEINE-SERVER-URL>/redirect_uri

        # Beliebiges Passwort zur Verschlüsselung der OIDC-Session-Cookies
        OIDCCryptoPassphrase <Sicheres-Passwort>

        # Session läuft nach 2 Stunden Inaktivität ab
        OIDCSessionInactivityTimeout 7200

        # E-Mail-Adresse des Google-Kontos als Login-Name verwenden
        OIDCRemoteUserClaim email
        OIDCScope "openid email profile"

        <Location />
            AuthType openid-connect
            Require valid-user
            AllowOverride All
        </Location>

        # JSON-RPC-API von SSO ausnehmen: Ein API-Client kann der
        # Weiterleitung zum Identity Provider nicht folgen.
        <Location /src/jsonrpc.php>
            AuthType None
            Require all granted
        </Location>
    </VirtualHost>
</IfModule>
```

!!! warning "API erreichbar halten"

    Der Block `<Location />` stellt die komplette Installation hinter den Identity Provider, einschließlich der JSON-RPC-API unter `/src/jsonrpc.php`. Ein API-Client kann der Weiterleitung zur Anmeldeseite nicht folgen. Ohne den zweiten `<Location>`-Block schlägt daher jede API-Anfrage fehl: Der Webserver antwortet mit einer Weiterleitung (HTTP 302) statt mit der API-Antwort.

    Die Ausnahme entfernt ausschließlich die SSO-Prüfung des Webservers für diesen einen Pfad. i-doit verlangt weiterhin einen gültigen API-Key und, je nach Methode, gültige Benutzer-Anmeldedaten. Die API wird dadurch also nicht öffentlich zugänglich.

!!! info "Automatische Endpoint-Erkennung"
Dank `OIDCProviderMetadataURL` erkennt das Modul alle notwendigen Google-Endpoints automatisch. Eine manuelle Angabe einzelner Endpoints ist nicht erforderlich.

!!! warning "`<Location />` schützt auch Login-Seite, Admin Center und API"
    Mit `Require valid-user` innerhalb von `<Location />` prüft Apache jeden Request, bevor er i-doit erreicht. Ist der Identity Provider nicht verfügbar, sind damit auch die i-doit Login-Seite, das Admin Center und die JSON-RPC-API gesperrt, und der [SSO-Fallback auf lokale Konten](../sso-fallback/index.md) kann nicht greifen.

    Für einen Notzugang lasse `<Location />` weg und begrenze den Schutz auf den SSO-Einsprung. i-doit startet die SSO-Anmeldung ausschließlich bei einem Aufruf mit `?use-sso=1`:

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

    Der zweite Block ist notwendig, weil Google die Redirect-URI mit eigenen Parametern aufruft. Alternativ bleibt `<Location />` geschützt und ein zweiter, nur intern erreichbarer VirtualHost mit demselben `DocumentRoot` und ohne die OIDC-Direktiven dient als Notzugang.

***

## Schritt 4: Apache neu starten

Teste zunächst die Konfiguration auf Syntaxfehler:

```shell
sudo apache2ctl configtest
```

Wenn `Syntax OK` erscheint, starte Apache neu:

```shell
sudo systemctl restart apache2
```

***

## Schritt 5: SSO im i-doit Admin Center aktivieren

1. Öffne das **i-doit Admin Center** unter `https://<SERVER-URL>/admin/`.
2. Melde dich mit dem Admin-Center-Passwort an.
3. Klicke in der oberen Navigation auf **System settings**.
4. Scrolle zum Abschnitt **Single Sign On**.
5. Setze **Active** auf **Yes**.
6. Wähle unter **Default tenant** den gewünschten Mandanten aus.
7. Lasse **Use Domain Part** auf **No** — i-doit verwendet dann die vollständige E-Mail-Adresse als Login-Namen.
8. Klicke auf **Save**.

[![Single Sign On Einstellungen](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/9-oid.png)](/img/assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/openid/google-openid/9-oid.png)

***

## Schritt 6: Benutzer in i-doit vorbereiten

Der **Login-Name** des i-doit-Benutzers muss exakt mit der E-Mail-Adresse des Google-Kontos übereinstimmen.

1. Navigiere in i-doit zu **Verwaltung → Rechteverwaltung → Personen**.
2. Öffne den gewünschten Benutzer.
3. Setze den **Login-Namen** auf die vollständige Google-E-Mail-Adresse, z.B. `benutzer@example.com`.
4. Speichere den Benutzer.

!!! warning "Login-Name muss E-Mail-Adresse sein"
Wenn **Use Domain Part = No** gesetzt ist, wird die vollständige E-Mail-Adresse als Login-Name erwartet, z.B. `benutzer@example.com`.

***

## Ergebnis

Beim nächsten Aufruf von i-doit erscheint die Login-Seite mit der zusätzlichen Option **SSO Login**. Nach einem Klick darauf und erfolgreicher Authentifizierung bei Google wird der Benutzer in i-doit angemeldet, ohne ein i-doit Passwort einzugeben.

Seit i-doit 29 melden sich Benutzer über die einfache URL nicht mehr automatisch an, dadurch bleibt ein sauberer Logout möglich. Um den zusätzlichen Klick zu sparen, rufe i-doit direkt mit `https://<DEINE-SERVER-URL>/?use-sso=1` auf, zum Beispiel als Lesezeichen oder als Startseite des Browsers.
