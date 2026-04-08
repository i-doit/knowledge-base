---
title: Zwei-Faktor-Authentisierung (2FA)
description: Zwei-Faktor-Authentisierungsmöglichkeiten für i-doit
icon: material/two-factor-authentication
status:
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Die Zwei-Faktor-Authentisierung (2FA) schützt deinen i-doit-Zugang mit einer zusätzlichen Sicherheitsstufe. Neben dem Passwort benötigst du beim Login einen zeitbasierten Code aus einer Authenticator-App.

[![Zwei-Faktor-Authentisierung](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/2fa.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/2fa.png)

## Integrierte Zwei-Faktor-Authentisierung

### 2FA aktivieren

So aktivierst du 2FA für deinen Benutzer:

1. Navigiere zu **Benutzereinstellungen → Passwort und Login**.
2. Klicke im Bereich **Zwei-Faktor-Authentifizierung** auf **Editieren**.
3. Klicke auf **Aktivieren** und scanne den angezeigten QR-Code mit deiner Authenticator-App.
4. Gib den 6-stelligen Code aus der App ein, um die Einrichtung abzuschließen.

Ab dem nächsten Login fragt i-doit zusätzlich zum Passwort den 6-stelligen Authenticator-Code ab.

### 2FA deaktivieren

So deaktivierst du 2FA:

1. Navigiere zu **Benutzereinstellungen → Passwort und Login**.
2. Klicke im Bereich **Zwei-Faktor-Authentifizierung** auf **Bearbeiten**.
3. Klicke auf **Deaktivieren** und bestätige mit dem 6-stelligen Code aus deiner Authenticator-App.

!!! note "Ein Administrator kann die 2FA auch über die [Verwaltung](../../administration/verwaltung/zwei-faktor-authentisierung.md) für einzelne Benutzer deaktivieren."

## Externe Zwei-Faktor-Authentisierung

Alternativ kannst du 2FA auf Webserver-Ebene über externe Module einrichten:

-   [Google Authenticator Apache Module](https://code.google.com/archive/p/google-authenticator-apache-module/wikis/GoogleAuthenticatorApacheModule.wiki)
-   [Apache Guacamole TOTP](https://guacamole.apache.org/doc/gug/totp-auth.html)
