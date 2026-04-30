---
title: "Objekttyp: Unterbrechungsfreie Stromversorgung"
description: Dokumentation des Objekttyps Unterbrechungsfreie Stromversorgung in i-doit
icon:
status:
lang: de
---

# Objekttyp: Unterbrechungsfreie Stromversorgung

Der Objekttyp **Unterbrechungsfreie Stromversorgung** dokumentiert USV-Geräte, die bei Stromausfällen die Versorgung aufrechterhalten. USVs sichern kritische Geräte wie Server, Switches und Speichersysteme ab.

## Verwendung

- **Rack-Integration**: Weise die USV einem Rack zu und hinterlege die belegten Höheneinheiten.
- **Geschützte Geräte**: Verknüpfe die USV mit den Geräten, die sie absichert.
- **Kapazitätsplanung**: Dokumentiere die Nennleistung der USV und die angeschlossene Last.
- **Wartungsplanung**: Hinterlege Wartungsintervalle für den Akkutausch.

[![Unterbrechungsfreie Stromversorgung](../../assets/images/de/grundlagen/objekttypen/usv.png)](../../assets/images/de/grundlagen/objekttypen/usv.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Anschlüsse](../kategorien/connector.md)
- [Service-Zuweisung](../kategorien/it-service.md)
- [Schnittstelle](../kategorien/universal-interface.md)
- [Buchhaltung](../kategorien/accounting.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Modell](../kategorien/model.md)
- Power supplier
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- [Logische Ports](../kategorien/network-log-port.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Notfallplan-Zuweisung](../kategorien/emergency-plan.md)
- [Hostadresse](../kategorien/ip.md)
- [Dateizuweisung](../kategorien/file.md)
- [Logbuch](../kategorien/logbook.md)
- [Objektbild](../kategorien/image.md)
- VRRP-Mitgliedschaft
- Verkabelung

### Spezifische Kategorie

Die spezifische Kategorie für diesen Objekttyp ist Uninterruptible power supply.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__UPS` |
| **Gruppe** | Hardware |
