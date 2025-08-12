---
title: Integrierte Authentifizierung
description: Ein Überblick über die Methoden zur Benutzerauthentifizierung in i-doit, von lokalen Benutzern über LDAP/AD bis hin zu SSO und 2FA.
icon:
status:
lang: de
---

# Integrierte Authentifizierung

!!! warning "Backup-Hinweis"
    Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle oder einem Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses problemlos wiederhergestellt werden.

## Überblick

i-doit bietet eine flexible Auswahl an Authentifizierungsmethoden, die auf verschiedene Anwendungsfälle und Sicherheitsanforderungen zugeschnitten sind. Diese Seite gibt Ihnen einen Überblick über die verfügbaren Optionen von der einfachen lokalen Anmeldung über die Anbindung an ein zentrales Active Directory bis hin zu erweiterten Verfahren wie Single Sign-On (SSO) oder der Zwei-Faktor-Authentifizierung (2FA).

---

## Lokale Benutzer

Lokale Benutzer werden direkt in i-doit als Objekte vom Typ "Person" verwaltet und sind sofort einsatzbereit. Ihre größte Stärke liegt darin, als **unabhängiger Notfallzugang** zu fungieren, falls zentrale Authentifizierungssysteme wie LDAP/AD einmal nicht erreichbar sein sollten.

Weiterführende Links:

* [Lokalen Benutzer anlegen](lokalen-benutzer-anlegen.md)

---

## LDAP / Active Directory

i-doit unterstützt die nahtlose Integration mit Verzeichnisdiensten wie LDAP oder Active Directory. Dies ermöglicht:

* **Zentrale Authentifizierung** beim Web-Login über das bestehende Unternehmenskonto.
* **Automatisierten Import** von Benutzern und Gruppen (optional per Konsole).

Weitere Informationen:

* [LDAP-Verzeichnis integrieren](../ldap-verzeichnis/index.md)

---

## API-Zugriff (JSON-RPC)

Für die **Automatisierung von Prozessen** und die Anbindung externer Tools bietet i-doit eine leistungsstarke JSON-RPC API. Für die Nutzung wird pro Mandant ein lokaler Benutzer mit einem gültigen API-Schlüssel benötigt.

Weitere Informationen:

* [i-doit API Add-on](../../i-doit-add-ons/api/index.md)

---

## Erweiterte Authentifizierungsverfahren

Um Komfort und Sicherheit weiter zu steigern, unterstützt i-doit moderne Authentifizierungsverfahren:

* **Single Sign-On (SSO):** Reduziert über SAML oder Kerberos die Anmeldehürden für Benutzer und steigert den Komfort.
* **Zwei-Faktor-Authentifizierung (2FA):** Ergänzt den Login um eine zweite Sicherheitsstufe und schützt Konten wirksam vor unbefugtem Zugriff.

Weitere Informationen:

* [SSO über Azure AD (SAML)](../sso-vergleich/saml/azure-ad-saml.md)
* [2-Faktor-Authentifizierung](../2fa/index.md)

---

## Fazit

Lokale **Benutzer** ermöglichen sofortigen Zugang und dienen als Notfall-Login. LDAP/AD bietet die zentrale Verwaltung für größere Teams. Die **API** ist der Schlüssel zur Automatisierung und Integration. **SSO** und **2FA** steigern Komfort und Sicherheit in Enterprise-Umgebungen.
