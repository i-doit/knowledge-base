---
title: "Checkliste für die IT-Dokumentation"
description: "Diese Checkliste begleitet dich Schritt für Schritt von der Planung bis zum produktiven Einsatz deiner IT-Dokumentation mit i-doit."
icon:
status:
lang: de
---
# Checkliste für die IT-Dokumentation

Diese Checkliste begleitet dich Schritt für Schritt von der Planung bis zum produktiven Einsatz deiner IT-Dokumentation mit i-doit. Arbeite die Punkte der Reihe nach ab — so vergisst du nichts Wichtiges.

## 1. Organisatorische Vorarbeit

- [ ] Anforderungen klären: Was soll dokumentiert werden und welchen Nutzen soll es bringen?
- [ ] Dokumentations-Team definieren: Wer verwaltet und pflegt die IT-Dokumentation?
- [ ] Fachabteilungen einbinden: Wer soll mit der Dokumentation arbeiten?
- [ ] Bisherige Dokumentation sichten: Gibt es Excel-Listen, Wiki-Seiten oder andere Tools, die abgelöst werden?
- [ ] Dritt-Anwendungen identifizieren: Welche Systeme sollen angebunden werden (Monitoring, Ticketing, LDAP)?
- [ ] Meilensteine festlegen: Wann soll was erreicht sein?

## 2. i-doit kennenlernen

- [ ] [Testlizenz anfordern](https://www.i-doit.com/i-doit-testen/) und i-doit evaluieren
- [ ] [Grundlagen](../grundlagen/index.md) in der Knowledge Base lesen
- [ ] i-doit beschaffen: Objektpaket und Supportvertrag abschließen

## 3. i-doit einrichten

- [ ] Server vorbereiten: [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) prüfen
- [ ] [i-doit installieren](../installation/index.md)
- [ ] Lizenz im [Admin Center](../administration/admin-center.md) einspielen
- [ ] [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md) (Suche, Benachrichtigungen, Workflows)
- [ ] [Backup und Recovery](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) einrichten und testen
- [ ] Testsystem einrichten (optional, empfohlen für größere Umgebungen)

## 4. i-doit konfigurieren

- [ ] [Benutzer und Gruppen](../benutzerauthentifizierung-und-verwaltung/index.md) anlegen, ggf. [LDAP](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) anbinden
- [ ] Standard-Passwörter ändern (admin, reader, editor, author)
- [ ] Relevante [Objekttypen](../grundlagen/objekttyp-konfiguration.md) aktivieren, nicht benötigte deaktivieren
- [ ] [Kategorien den Objekttypen zuordnen](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)
- [ ] Bei Bedarf [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) und [Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) anlegen
- [ ] [Objektlisten](../grundlagen/objekt-liste/index.md) für die Teams vorkonfigurieren
- [ ] [Dashboard](../grundlagen/dashboard-und-widgets.md) einrichten
- [ ] Dritt-Anwendungen integrieren und testen ([JDisc](../daten-konsolidieren/jdisc/index.md), [Monitoring](../automatisierung-und-integration/network-monitoring/index.md), [Service Desk](../automatisierung-und-integration/service-desk/index.md))

## 5. Daten befüllen

- [ ] Bestehende Daten importieren: [CSV-Import](../daten-konsolidieren/csv-datenimport/index.md) für Excel-Listen
- [ ] Automatische Inventarisierung einrichten: [JDisc Discovery](../daten-konsolidieren/jdisc/index.md)
- [ ] Manuelle Nacharbeiten erledigen: Standorte zuordnen, Beziehungen pflegen
- [ ] Datenqualität prüfen: Sind alle wichtigen Objekte erfasst?

## 6. Produktiv einsetzen

- [ ] IT-Dokumentation in die täglichen Arbeitsprozesse einbinden
- [ ] Alle Benutzer schulen
- [ ] [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/index.md) konfigurieren: Wer darf was sehen und bearbeiten?
- [ ] Regelmäßige Reviews einplanen: Ist die Dokumentation aktuell?
- [ ] Prozess für neue Anforderungen etablieren

---

Du hast Ergänzungen oder brauchst Unterstützung? Schreib uns an [help@i-doit.com](mailto:help@i-doit.com) oder tausche dich im [Community Forum](https://community.i-doit.com/) aus.
