---
title: SSO Fallback zu Builtin
description: "Der SSO-Fallback ermöglicht es, dass Benutzer sich auch dann noch mit einem lokalen i-doit Benutzerkonto anmelden können, wenn die zentrale..."
icon:
status:
lang: de
---
# SSO Fallback zu Builtin

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

## Was bedeutet "SSO Fallback" in i-doit?

Der SSO-Fallback ermöglicht es, dass Benutzer sich auch dann noch mit einem lokalen i-doit Benutzerkonto anmelden können, wenn die zentrale Authentifizierung über SSO (z.B. LDAP, Kerberos, SAML) fehlschlägt. Dies ist besonders wichtig für Notfälle oder Wartungsarbeiten.

## Welche Konfiguration ist dazu notwendig?

In i-doit keine, der SSO-Fallback wird standardmäßig unterstützt. Stelle jedoch sicher, dass mindestens ein lokales i-doit Benutzerkonto mit Administratorrechten existiert, um im Notfall Zugriff zu gewährleisten.

Sofern nicht direkt die i-doit URL mit dem Parameter `?use-sso=1` aufgerufen wird, wird die Login-Seite angezeigt, die sowohl die SSO-Option als auch die Möglichkeit zur Anmeldung mit lokalen i-doit Benutzerkonten bietet.

!!! warning "Authentifizierung im Webserver kann den Fallback ausschalten"
    Der Fallback funktioniert nur, solange der Webserver den Request an i-doit weitergibt. Eine Konfiguration, die den kompletten VirtualHost schützt, zum Beispiel `Require valid-user` innerhalb von `<Location />`, prüft jeden Request vorher: ist der Identity Provider nicht verfügbar, bleiben auch Login-Seite, Admin Center und JSON-RPC-API gesperrt.

    Begrenze den Schutz auf den SSO-Einsprung, also den Aufruf mit `?use-sso=1` samt Callback-Pfad des Moduls, oder stelle einen zweiten, nur intern erreichbaren VirtualHost ohne diesen Schutz bereit. Ein Beispiel steht in [Google Authentifizierung via OpenID](../openid/google-openid.md).

## Siehe auch

- [SSO-Vergleich](../index.md) — Vergleich der SSO-Methoden
- [Benutzerauthentifizierung und -verwaltung](../../index.md) — Übersicht zur Benutzerverwaltung
- [Administration](../../../administration/index.md) — Verwaltung und Konfiguration
