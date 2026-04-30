---
title: "Objekttyp: Virtueller Server"
description: Dokumentation des Objekttyps Virtueller Server in i-doit
icon:
status:
lang: de
---

# Objekttyp: Virtueller Server

Der Objekttyp **Virtueller Server** dokumentiert virtuelle Maschinen (VMs), die Serveraufgaben übernehmen. Ein virtueller Server läuft auf einem Virtuellen Host und verhält sich für Applikationen wie ein physikalischer Server.

## Verwendung

- **VM-Inventar**: Dokumentiere alle virtuellen Maschinen mit zugewiesenen Ressourcen (vCPU, RAM, Speicher).
- **Host-Zuweisung**: Weise die VM dem zugehörigen Virtuellen Host zu.
- **Betriebssystem und Anwendungen**: Dokumentiere OS und installierte Dienste analog zum Server-Objekttyp.
- **Migration**: Verfolge VM-Migrationen zwischen Hosts durch Aktualisierung der Host-Zuweisung.

[![Virtueller Server](../../assets/images/de/grundlagen/objekttypen/virtueller-server.png)](../../assets/images/de/grundlagen/objekttypen/virtueller-server.png)

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
- Storage Area Network
- [Virtuelle Geräte](../kategorien/virtual-device.md)
- [Freigabezugriff](../kategorien/share-access.md)
- [Listener](../kategorien/net-listener.md)
- [Netzwerkverbindungen](../kategorien/net-connector.md)
- [Betriebssystem](../kategorien/operating-system.md)
- [RAID-Array](../kategorien/raid.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Grafikkarte](../kategorien/graphic.md)
- [Modell](../kategorien/model.md)
- [Freigaben](../kategorien/shares.md)
- [CPU](../kategorien/cpu.md)
- [Controller](../kategorien/controller.md)
- [Speicher](../kategorien/memory.md)
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- Direct Attached Storage
- [Logische Ports](../kategorien/network-log-port.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Hostadresse](../kategorien/ip.md)
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
| **Objekttyp-Konstante** | `C__OBJTYPE__VIRTUAL_SERVER` |
| **Gruppe** | Software |
