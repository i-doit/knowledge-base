---
title: Zwei-Faktor-Authentisierung (2FA)
description: Zwei-Faktor-Authentisierungsmöglichkeiten für i-doit
icon: material/two-factor-authentication
status:
lang: de
---

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

## Integrierte Zwei-Faktor-Authentisierung

### 2FA aktivieren

Um 2FA zu aktivieren, muss jeder Benutzer die **Zwei-Faktor-Authentifizierung** Einstellung unter **Benutzereinstellungen** → **Passwort und Login** aufrufen.<br>
Klicken Sie auf **Editieren** und anschließend auf **Aktivieren**. Nach Eingabe des 6-stelligen Authentifizierungscodes ist die 2FA-Authentifizierung aktiviert.

Beim nächstem Login wird nun der 6 stellige Authenticator-Code abgefragt.

### 2FA deaktivieren (2FA)

Um 2FA zu deaktivieren, der Benutzer die **Zwei-Faktor-Authentifizierung** Einstellung unter **Benutzereinstellungen** → **Passwort und Login** aufrufen.<br>
Klicken Sie auf **Bearbeiten** und anschließend auf **Deaktivieren**. Nach Eingabe des 6-stelligen Authentifizierungscodes ist die 2FA-Authentifizierung deaktiviert.

!!! note "Ein Administrator hat die Möglichkeit die 2FA über die [Verwaltung](../../administration/verwaltung/zwei-faktor-authentisierung.md) für Benutzer zu deaktivieren."

## Externe Zwei-Faktor-Authentisierung

Links zu externen 2FA-Authentifizierungsmethoden bereitstellen

-   [Google](https://code.google.com/archive/p/google-authenticator-apache-module/wikis/GoogleAuthenticatorApacheModule.wiki)
-   [Apache Guacamole](https://guacamole.apache.org/doc/gug/totp-auth.html)
