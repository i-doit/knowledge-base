---
title: Was ist i-doit?
description: i-doit ist eine IT-Dokumentations- und CMDB-Lösung — ein zentraler Ort für alles, was deine IT ausmacht
icon:
status:
lang: de
---

# Was ist i-doit?

i-doit ist eine **IT-Dokumentations- und CMDB-Lösung**. CMDB steht für Configuration Management Database — eine zentrale Datenbank, in der du deine gesamte IT-Infrastruktur abbildest: Server, Netzwerke, Software, Verträge, Standorte und die Beziehungen zwischen all diesen Elementen.

Stell dir i-doit als das Gedächtnis deiner IT-Abteilung vor. Statt Informationen über dutzende Excel-Tabellen, Wiki-Seiten, Notizen und Köpfe zu verteilen, sammelst du alles an einem Ort — strukturiert, durchsuchbar und für alle Beteiligten zugänglich.

## Wofür wird i-doit eingesetzt?

i-doit deckt ein breites Spektrum ab. Die häufigsten Einsatzbereiche:

### IT-Infrastruktur dokumentieren

- **Hardware:** Server, Clients, Switches, Router, Firewalls, USVs — mit Modell, Seriennummer, Standort und Rack-Position
- **Netzwerk:** IP-Adressen, VLANs, Subnetze, Ports und Verkabelung
- **Software:** Betriebssysteme, Applikationen, Datenbanken — mit Versionen und Lizenzen
- **Standorte:** Gebäude, Räume, Racks — hierarchisch aufgebaut mit visueller [Rack-Ansicht](../grundlagen/kategorien/s-enclosure.md)

### Beziehungen abbilden

In der Realität steht kein System allein. Ein Webserver braucht einen Datenbankserver, läuft auf einer VM, die auf einem Host in einem Rack steht. i-doit bildet diese Abhängigkeiten als **Objekt-Beziehungen** ab — und macht sie im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) visuell sichtbar.

Das ist besonders wertvoll wenn du wissen musst: *Was ist betroffen, wenn Server X ausfällt?*

### Verträge und Lizenzen verwalten

Wann läuft der Wartungsvertrag für die Firewall ab? Wie viele Lizenzen sind noch frei? Wer ist der Ansprechpartner beim Dienstleister? i-doit verknüpft Verträge, Lizenzen und Kontakte direkt mit den betroffenen IT-Komponenten.

### Compliance und Audits unterstützen

Ob ISO 27001, BSI IT-Grundschutz oder interne Revisionen — eine aktuelle CMDB liefert die Daten, die Auditoren sehen wollen. i-doit dokumentiert nicht nur den Ist-Zustand, sondern auch den [Lebenszyklus](../grundlagen/lebens-und-dokumentationszyklus.md) jeder Komponente.

### Prozesse automatisieren

Über die [API](../i-doit-add-ons/api/index.md) und [Schnittstellen](../automatisierung-und-integration/index.md) lässt sich i-doit in bestehende Workflows einbinden: Monitoring-Systeme wie Checkmk melden Statusänderungen, Service-Desk-Systeme referenzieren CMDB-Objekte, JDisc Discovery füllt die Dokumentation automatisch per Netzwerk-Scan.

## Wie ist i-doit aufgebaut?

i-doit organisiert Informationen in drei Ebenen:

```
Objekttyp        →  Was ist es?         (Server, Client, Switch, Person, Vertrag)
  └── Objekt     →  Welches genau?      (Webserver-01, Büro-PC-042, Vertrag-SAP)
       └── Kategorien  →  Welche Details?  (IP-Adresse, CPU, Standort, Kontaktperson)
```

- **Objekttypen** definieren die Art: Server, Client, Raum, Person, Vertrag. i-doit bringt über 70 [vordefinierte Objekttypen](../grundlagen/objekttypen/index.md) mit, und du kannst [eigene anlegen](../grundlagen/benutzerdefinierte-objekttypen.md).
- **Objekte** sind die konkreten Einträge: *Webserver-01*, *Raum 3.14*, *Max Mustermann*.
- **Kategorien** enthalten die Datenfelder: IP-Adresse, Modell, Seriennummer, Standort. i-doit hat über 120 [vordefinierte Kategorien](../grundlagen/kategorien/index.md).

Mehr dazu: [Konzepte und Begriffe](konzepte-und-begriffe.md)

## On-Premise oder Cloud?

i-doit gibt es in zwei Varianten:

| | On-Premise | [Cloud](../idoit-cloud/index.md) |
|---|---|---|
| **Hosting** | Auf deinem eigenen Server | Von i-doit in deutschen Rechenzentren |
| **Installation** | Du installierst und wartest selbst | Fertig eingerichtet in 15 Minuten |
| **Updates** | Du entscheidest wann | Automatisch innerhalb von 7 Tagen |
| **Backup** | Deine Verantwortung | Automatisch (stündlich bis jährlich) |
| **Anpassungen** | Volle Kontrolle (SSH, CLI, PHP) | Eingeschränkt (kein Shell-Zugang) |
| **Automatisierung** | [Cronjobs](../wartung-und-betrieb/cronjobs-einrichten.md) + Console | [Flows Lite](../idoit-cloud/index.md#automatisierung-mit-flows-lite) |

Beide Varianten bieten denselben Funktionsumfang bei der IT-Dokumentation. Die Unterschiede liegen in Administration und Zugriff.

## Wie starte ich?

1. **Evaluieren:** [Testlizenz anfordern](https://www.i-doit.com/i-doit-testen/) und i-doit ausprobieren
2. **Installieren:** [Installationsanleitung](../installation/index.md) folgen (oder Cloud-Instanz buchen)
3. **Einrichten:** [Wie beginne ich zu dokumentieren?](wie-beginne-ich-zu-dokumentieren.md) lesen
4. **Planen:** [Checkliste für die IT-Dokumentation](checkliste-fuer-die-it-dokumentation.md) abarbeiten
5. **Lernen:** [Grundlagen](../grundlagen/index.md) — Objekte, Kategorien und Listen verstehen

## Siehe auch

- [Wie beginne ich zu dokumentieren?](wie-beginne-ich-zu-dokumentieren.md) — Schritt für Schritt zur ersten Dokumentation
- [Checkliste für die IT-Dokumentation](checkliste-fuer-die-it-dokumentation.md) — Alle wichtigen Punkte auf einen Blick
- [Konzepte und Begriffe](konzepte-und-begriffe.md) — Objekte, Kategorien, Attribute und Beziehungen erklärt
- [Glossar](../glossar.md) — Begriffe rund um i-doit
