---
title: "Objekttyp: Switch"
description: Dokumentation des Objekttyps Switch in i-doit
icon:
status:
lang: de
---

# Objekttyp: Switch

Der Objekttyp **Switch** dokumentiert Layer-2-Switches im Netzwerk. Switches verbinden Endgeräte und Server innerhalb eines lokalen Netzwerks und sind Grundlage der physikalischen Netzdokumentation in i-doit.

## Verwendung

- **Port-Dokumentation**: Erfasse jeden Port des Switches mit Bezeichnung, Verbindungsziel und VLAN-Zuweisung.
- **Rack-Integration**: Ordne den Switch einem Rack zu und hinterlege die belegten Höheneinheiten.
- **VLAN-Management**: Verknüpfe Ports mit Layer-2-Netzen (VLANs) für eine vollständige Netzwerktopologie.
- **Stacking und Chassis**: Dokumentiere gestackte Switches oder Switch-Chassis mit ihren Modulen.
- **Physikalische Verkabelung**: Verbinde Switch-Ports mit Server-Netzwerkkarten oder Patchfeld-Ports über die Kabelverbindungs-Kategorie.

[![Switch](../../assets/images/de/grundlagen/objekttypen/switch.png)](../../assets/images/de/grundlagen/objekttypen/switch.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Anschlüsse](../kategorien/connector.md)
- [Service-Zuweisung](../kategorien/it-service.md)
- [Schnittstelle](../kategorien/universal-interface.md)
- [Buchhaltung](../kategorien/accounting.md)
- [Betriebssystem](../kategorien/operating-system.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Modell](../kategorien/model.md)
- [Formfaktor](../kategorien/formfactor.md)
- [Stromverbraucher](../kategorien/power-consumer.md)
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- [Logische Ports](../kategorien/network-log-port.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Notfallplan-Zuweisung](../kategorien/emergency-plan.md)
- [Hostadresse](../kategorien/ip.md)
- [Dateizuweisung](../kategorien/file.md)
- [Software-Zuweisung](../kategorien/application.md)
- [Logbuch](../kategorien/logbook.md)
- [Zugangsdaten](../kategorien/access.md)
- [Objektbild](../kategorien/image.md)
- VRRP-Mitgliedschaft
- [Rechnung](../kategorien/invoice.md)
- Verkabelung

### Spezifische Kategorie

Die spezifische Kategorie für diesen Objekttyp ist [Switch](../kategorien/s-switch-net.md).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__SWITCH` |
| **Gruppe** | Hardware |
