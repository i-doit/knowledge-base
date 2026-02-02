---
title: ISMS Add-on Dokumentation
description: ISMS Add-on für i-doit, ISO 27001-konformes Risikomanagement, Maßnahmenverwaltung und Compliance.
icon: addons/ismslogo
status:
lang: de
---

## Was ist das ISMS Add-on?

Das **ISMS Add-on** für die **i-doit CMDB** ist eine leistungsstarke Erweiterung für das **Informationssicherheits-Management**. Es unterstützt Unternehmen bei der Umsetzung der **ISO 27001-Zertifizierung** und bietet umfassende Funktionen für **Risikomanagement**, **Maßnahmenverwaltung** und **Compliance**.

### Vorteile des ISMS Add-ons

- Direkte Integration in die **IT-Dokumentation**
- Unterstützung der **ISO-27000-Normenreihe**
- Erstellung von Berichten wie **Risikomatrix**, **Statement of Applicability (SoA)** und **Risikobehandlungsplan (RTP)**
- Import von Bedrohungen, Schwachstellen und Maßnahmen aus externen Katalogen
- Ideal für **KRITIS**, **BSI-Standard 200-3** und andere Sicherheitsstandards

## Systemvoraussetzungen

Das ISMS-Add-on setzt eine funktionsfähige i-doit-Installation voraus. Diese Dokumentation bezieht sich, sofern nicht anders angegeben, auf die aktuelle Version des Add-ons.

!!! warning "Das ISMS Add-on verbraucht lizenzpflichtige Objekte"
    Das ISMS Add-on verwendet etwa **2015** lizenzpflichtige Objekte, siehe [Import](configuration.md#4-maßnahmen-hinzufugen). Stellen Sie sicher, dass Ihre i-doit-Lizenz ausreichend lizenzpflichtige Objekte umfasst, um das Add-on nutzen zu können.

* * *

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](../index.md).

* * *

## Verwendung des ISMS Add-ons

1.  **Bewertungskriterien** festlegen
2.  **Schadensszenarien** definieren
3.  **Risikoklassen** und **Risikoformel** konfigurieren
4.  **Maßnahmen** anlegen
5.  **Risiken identifizieren** und **bewerten**
6.  **Maßnahmen zuordnen** und **überwachen**
7.  **Berichte erstellen**

[Zur Einrichtung](configuration.md){ .md-button}

* * *

## Objekttypen und Funktionen des ISMS Add-ons

### Neue Objekttyp-Gruppe "ISMS"

Mit der Installation des ISMS-Add-ons wird in i-doit eine neue Objekttyp-Gruppe namens "ISMS" erstellt. Diese Gruppe umfasst neue [Objekttypen](object-types-and-categories.md).

### CSV-Import und Anpassung

Für mehrere dieser Objekttypen stehen CSV-Importdateien zur Verfügung, um die Daten schnell und effizient zu übernehmen. Alle Objekte und Objekttypen können wie gewohnt in i-doit an die individuellen Anforderungen angepasst werden.
Das ISMS-Add-on unterstützt dabei auch die [Berücksichtigung von Standortrechten](configuration.md#optionale-einstellungen), um eine sichere und flexible Rechteverwaltung zu gewährleisten.

### Reports für Auswertung und Dokumentation

Zusätzlich installiert das ISMS-Add-on mehrere [Reports](reports.md), die eine erweiterte Auswertung und Dokumentation des Informationssicherheits-Managementsystems ermöglichen.

* * *

## Rechtevergabe

Das ISMS Add-on bringt neue Rechte mit, die in der [i-doit Rechteverwaltung](../../administration/verwaltung/berechtigungen.md) konfiguriert werden können. Diese Rechte steuern den Zugriff auf die Risikoklassen und die Risikoberechnung.

* * *

[Zur Einrichtung ->](configuration.md){ .md-button .md-button--primary}
