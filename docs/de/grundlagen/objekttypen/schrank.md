---
title: "Objekttyp: Schrank"
description: Dokumentation des Objekttyps Schrank in i-doit
icon:
status:
lang: de
---

# Objekttyp: Schrank

Der Objekttyp **Schrank** dokumentiert Server-Racks und Netzwerkschränke. Schränke nehmen andere Objekte wie Server, Switches oder Patchfelder auf und bilden die physikalische Grundstruktur des Rechenzentrums in i-doit.

## Verwendung

- **Rack-Layout**: Visualisiere die Belegung eines Racks in Höheneinheiten. i-doit zeigt eine grafische Ansicht der eingebauten Komponenten.
- **Standortzuweisung**: Weise den Schrank einem Raum zu, um die vollständige Standorthierarchie Land → Stadt → Gebäude → Raum → Schrank abzubilden.
- **Kapazitätsplanung**: Erkenne freie Höheneinheiten und plane den Einbau neuer Komponenten.
- **Stromversorgung**: Verknüpfe PDUs und USVs, die den Schrank mit Strom versorgen.
- **Kabelmanagement**: Dokumentiere Patchfelder und Kabeltrassen innerhalb des Racks.

[![Schrank](../../assets/images/de/grundlagen/objekttypen/schrank.png)](../../assets/images/de/grundlagen/objekttypen/schrank.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Service-Zuweisung](../kategorien/it-service.md)
- [Buchhaltung](../kategorien/accounting.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Locally assigned objects](../kategorien/object.md)
- [Modell](../kategorien/model.md)
- [Formfaktor](../kategorien/formfactor.md)
- [Stromverbraucher](../kategorien/power-consumer.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Dateizuweisung](../kategorien/file.md)
- [Logbuch](../kategorien/logbook.md)
- [Objektbild](../kategorien/image.md)

### Spezifische Kategorie

Die spezifische Kategorie für diesen Objekttyp ist [Schrank](../kategorien/s-enclosure.md).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__ENCLOSURE` |
| **Gruppe** | Hardware |
