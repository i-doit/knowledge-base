---
title: "Objekttyp: Remote Management Controller"
description: Dokumentation des Objekttyps Remote Management Controller in i-doit
icon:
status:
lang: de
---

# Objekttyp: Remote Management Controller

Der Objekttyp **Remote Management Controller** dokumentiert Out-of-Band-Management-Karten wie iDRAC, iLO oder IPMI. Diese Controller ermöglichen den Fernzugriff auf Server unabhängig vom Betriebssystem.

## Verwendung

- **Server-Zuordnung**: Verknüpfe den Remote Management Controller mit dem zugehörigen Server.
- **Management-Netzwerk**: Dokumentiere die separate Management-IP-Adresse des Controllers.
- **Out-of-Band-Inventar**: Erfasse alle Management-Controller als eigenständige Objekte für eine vollständige Out-of-Band-Infrastruktur.

[![Remote Management Controller](../../assets/images/de/grundlagen/objekttypen/remote-management-controller.png)](../../assets/images/de/grundlagen/objekttypen/remote-management-controller.png)

## Zugeordnete Kategorien

### Globale Kategorien

- Managed devices
- [Allgemein](../kategorien/global.md)
- Passwords
- [Modell](../kategorien/model.md)
- [Netzwerkport](../kategorien/network-interface.md)
- [Netzwerk](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port-Übersicht
- [Logische Ports](../kategorien/network-log-port.md)
- [Hostadresse](../kategorien/ip.md)
- [Logbuch](../kategorien/logbook.md)
- [Zugangsdaten](../kategorien/access.md)
- VRRP-Mitgliedschaft

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__RM_CONTROLLER` |
| **Gruppe** | Hardware |
