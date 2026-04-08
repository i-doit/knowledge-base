---
title: "Objekttyp: Steckdosenleiste"
description: Dokumentation des Objekttyps Steckdosenleiste in i-doit
icon:
status:
lang: de
---

# Objekttyp: Steckdosenleiste

Der Objekttyp **Steckdosenleiste** dokumentiert Power Distribution Units (PDU), die für die Stromversorgung von Geräten in Racks eingesetzt werden. PDUs verteilen die Netzspannung auf mehrere Steckdosen und können die Stromaufnahme messen oder einzelne Ports schalten.

## Verwendung

- **Rack-Stromversorgung**: Dokumentiere PDUs als Teil der Rack-Infrastruktur und weise sie einem Schrank zu.
- **Gerätezuordnung**: Verknüpfe Server und andere Geräte mit den PDU-Ports, an die sie angeschlossen sind.
- **Stromplanung**: Plane die Stromentstehung pro Rack auf Basis der dokumentierten Anschlüsse.
- **Redundanz**: Dokumentiere redundante PDUs für die Hochverfügbarkeits-Analyse.

[![Steckdosenleiste](../../assets/images/de/grundlagen/objekttypen/steckdosenleiste.png)](../../assets/images/de/grundlagen/objekttypen/steckdosenleiste.png)

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

Die spezifische Kategorie für diesen Objekttyp ist [PDU](../kategorien/s-pdu.md).
Die spezifische Kategorie für diesen Objekttyp ist [Branch](../kategorien/s-pdu-branch.md).
Die spezifische Kategorie für diesen Objekttyp ist PDU Overview.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__PDU` |
| **Gruppe** | Hardware |
