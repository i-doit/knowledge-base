---
title: LDAP Server
description: "Richte deine LDAP-Server ein und teste die Verbindung."
icon:
status:
lang: de
---
# LDAP Server

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Unter **Verwaltung → Import und Schnittstellen → LDAP → Server** konfigurierst du die Verbindung zu deinem LDAP- oder Active-Directory-Server. Trage den Hostnamen oder die IP-Adresse, den Port, den Basis-DN (Distinguished Name) sowie die Zugangsdaten für den Bind-Benutzer ein. Über die Schaltfläche **Verbindung testen** kannst du prüfen, ob i-doit den LDAP-Server erfolgreich erreicht.

Die LDAP-Verbindung wird für die Benutzerauthentifizierung und die automatische Synchronisation von Personen und Personengruppen nach i-doit verwendet. Du kannst mehrere LDAP-Server anlegen, um verschiedene Verzeichnisdienste oder Domänen anzubinden. Die ausführliche Dokumentation zur LDAP-Konfiguration findest du unter [LDAP-Verzeichnis](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md).

[![ldap servers](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/2-ldap.png)](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/2-ldap.png)

## Siehe auch

- [LDAP-Verzeichnis](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) -- Ausführliche Dokumentation zur LDAP-Anbindung
- [Import Matching Profile](../import-matching-profile.md) -- Objekt-Matching bei Importen konfigurieren
