---
title: "Objekttyp: Speichersystem"
description: Dokumentation des Objekttyps Speichersystem in i-doit
icon:
status:
lang: de
---

# Objekttyp: Speichersystem

Der Objekttyp **Speichersystem** dokumentiert Storage Area Networks (SAN) und Network Attached Storage (NAS). Speichersysteme sind zentrale Datenspeicher, die von mehreren Servern genutzt werden.

## Verwendung

- **Speicher-Inventar**: Dokumentiere Hersteller, Modell und Kapazität des Speichersystems.
- **SAN-Topologie**: Verknüpfe das Speichersystem über FC-Ports mit FC-Switches und Servern.
- **Logical Device Server (LDEV)**: Dokumentiere die zugewiesenen logischen Laufwerke (LUNs) und ihre Server-Zuordnungen.
- **Kapazitätsplanung**: Erstelle Reports über belegten und verfügbaren Speicherplatz.

[![Speichersystem](../../assets/images/de/grundlagen/objekttypen/speichersystem.png)](../../assets/images/de/grundlagen/objekttypen/speichersystem.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Laufwerk](../kategorien/drive.md)
- [Anschlüsse](../kategorien/connector.md)
- [Service-Zuweisung](../kategorien/it-service.md)
- [Schnittstelle](../kategorien/universal-interface.md)
- [Gerät](../kategorien/storage-device.md)
- [Logische Geräte (LDEV Server)](../kategorien/ldev-server.md)
- [Logische Geräte (Client)](../kategorien/ldev-client.md)
- [FC-Port](../kategorien/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../kategorien/hba.md)
- [Buchhaltung](../kategorien/accounting.md)
- Storage Area Network
- [Betriebssystem](../kategorien/operating-system.md)
- [RAID-Array](../kategorien/raid.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Modell](../kategorien/model.md)
- [Formfaktor](../kategorien/formfactor.md)
- [Controller](../kategorien/controller.md)
- [Stromverbraucher](../kategorien/power-consumer.md)
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- Direct Attached Storage
- [Logische Ports](../kategorien/network-log-port.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Notfallplan-Zuweisung](../kategorien/emergency-plan.md)
- [Dateizuweisung](../kategorien/file.md)
- [Software-Zuweisung](../kategorien/application.md)
- [Logbuch](../kategorien/logbook.md)
- [Zugangsdaten](../kategorien/access.md)
- [Backup](../kategorien/backup.md)
- [Objektbild](../kategorien/image.md)
- VRRP-Mitgliedschaft
- Verkabelung

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__SAN` |
| **Gruppe** | Hardware |
