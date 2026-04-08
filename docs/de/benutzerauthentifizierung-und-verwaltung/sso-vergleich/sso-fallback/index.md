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

Keine, i-doit unterstützt den SSO-Fallback standardmäßig. Stelle jedoch sicher, dass mindestens ein lokales i-doit Benutzerkonto mit Administratorrechten existiert, um im Notfall Zugriff zu gewährleisten.

Sofern nicht direkt die i-doit URL mit dem Parameter `?use-sso=1` aufgerufen wird, wird die Login-Seite angezeigt, die sowohl die SSO-Option als auch die Möglichkeit zur Anmeldung mit lokalen i-doit Benutzerkonten bietet.

## Siehe auch

- [SSO-Vergleich](../index.md) — Vergleich der SSO-Methoden
- [Benutzerauthentifizierung und -verwaltung](../../index.md) — Übersicht zur Benutzerverwaltung
- [Administration](../../../administration/index.md) — Verwaltung und Konfiguration
