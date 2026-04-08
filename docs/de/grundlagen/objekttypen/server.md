---
title: "Objekttyp: Server"
description: Dokumentation des Objekttyps Server in i-doit
icon:
status:
lang: de
---

# Objekttyp: Server

Der Objekttyp **Server** dokumentiert physikalische Server in der IT-Infrastruktur. Jeder Eintrag steht für ein reales Gerät – von kleinen Tower-Servern bis hin zu Hochleistungs-Rack-Servern. Server sind in i-doit eines der zentralen Objekte: Sie bilden das Herzstück des Hardware-Inventars und verknüpfen sich mit Betriebssystemen, Anwendungen, Netzwerkports, Standorten und Personen.

## Verwendung

- **Hardware-Inventar**: Erfasse Hersteller, Modell, Formfaktor und verbaute Komponenten (CPU, RAM, Laufwerke). Zusammen ergibt sich ein vollständiges technisches Profil jedes Servers.
- **Standortzuweisung**: Weise den Server einem Rack in einem Raum eines Gebäudes zu. Die grafische Rack-Ansicht zeigt den belegten Höheneinheitenbereich.
- **Betriebssystem und Anwendungen verknüpfen**: Dokumentiere, welches OS und welche Dienste auf dem Server laufen – Grundlage für Impact-Analysen.
- **Lifecycle-Management**: Verfolge den gesamten Lebenszyklus über den CMDB-Status – von der Planung über den Betrieb bis zur Außerbetriebnahme.
- **Virtualisierung**: Kennzeichne Server als Virtualisierungshost und verwalte von dort aus die zugehörigen virtuellen Maschinen.

[![Server](../../assets/images/de/grundlagen/objekttypen/server.png)](../../assets/images/de/grundlagen/objekttypen/server.png)

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
- [Vertragszuweisung](../kategorien/contract-assignment.md)
- [Freigabezugriff](../kategorien/share-access.md)
- [Listener](../kategorien/net-listener.md)
- [Netzwerkverbindungen](../kategorien/net-connector.md)
- [Betriebssystem](../kategorien/operating-system.md)
- [Remote Management Controller](../kategorien/rm-controller.md)
- [DBMS-Informationen](../kategorien/database.md)
- [Datenbanktabellen](../kategorien/database-table.md)
- [Datenbankschema](../kategorien/database-sa.md)
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
| **Objekttyp-Konstante** | `C__OBJTYPE__SERVER` |
| **Gruppe** | Hardware |
