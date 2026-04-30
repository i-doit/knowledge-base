---
title: "Objekttyp: Blade Server"
description: Dokumentation des Objekttyps Blade Server in i-doit
icon:
status:
lang: de
---

# Objekttyp: Blade Server

Der Objekttyp **Blade Server** dokumentiert Blade-Module, die in einem **Blade Chassis** betrieben werden. Blade Server sind kompakte Serverbausteine ohne eigenes Netzteil oder Kühlsystem – diese Ressourcen teilen sich alle Blades eines Chassis.

## Verwendung

- **Chassis-Zuordnung**: Verknüpfe jeden Blade Server mit dem zugehörigen Blade Chassis. i-doit zeigt die belegten Steckplätze in der Chassis-Übersicht.
- **Hardware-Inventar**: Dokumentiere CPU, RAM und Laufwerke jedes Blade-Moduls – analog zum Server-Objekttyp.
- **Virtualisierung**: Blade Server dienen häufig als Hypervisoren. Verknüpfe sie mit den darauf laufenden virtuellen Maschinen.
- **Standort**: Der physikalische Standort ergibt sich über das Blade Chassis und das zugehörige Rack.

[![Blade Server](../../assets/images/de/grundlagen/objekttypen/blade-server.png)](../../assets/images/de/grundlagen/objekttypen/blade-server.png)

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
- [Clustermitgliedschaft](../kategorien/cluster-memberships.md)
- [Virtueller Host](../kategorien/virtual-host.md)
- [Gastsysteme](../kategorien/guest-systems.md)
- [Virtuelle Switches](../kategorien/virtual-switch.md)
- [Virtuelle Geräte](../kategorien/virtual-device.md)
- [Backup (zugewiesene Objekte)](../kategorien/backup--assigned-objects.md)
- [Gruppenmitgliedschaft](../kategorien/group-memberships.md)
- [Freigabezugriff](../kategorien/share-access.md)
- [Betriebssystem](../kategorien/operating-system.md)
- [RAID-Array](../kategorien/raid.md)
- [Allgemein](../kategorien/global.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Standort](../kategorien/location.md)
- [Grafikkarte](../kategorien/graphic.md)
- [Modell](../kategorien/model.md)
- [Freigaben](../kategorien/shares.md)
- [Formfaktor](../kategorien/formfactor.md)
- [Soundkarte](../kategorien/sound.md)
- [CPU](../kategorien/cpu.md)
- [Controller](../kategorien/controller.md)
- [Speicher](../kategorien/memory.md)
- [Stromverbraucher](../kategorien/power-consumer.md)
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- Direct Attached Storage
- [Logische Ports](../kategorien/network-log-port.md)
- [Handbuchzuweisung](../kategorien/manual.md)
- [Notfallplan-Zuweisung](../kategorien/emergency-plan.md)
- [Hostadresse](../kategorien/ip.md)
- [Dateizuweisung](../kategorien/file.md)
- [Software-Zuweisung](../kategorien/application.md)
- [Logbuch](../kategorien/logbook.md)
- [Zugangsdaten](../kategorien/access.md)
- [Backup](../kategorien/backup.md)
- [Objektbild](../kategorien/image.md)
- VRRP-Mitgliedschaft
- [Rechnung](../kategorien/invoice.md)
- Verkabelung

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__BLADE_SERVER` |
| **Gruppe** | Hardware |
