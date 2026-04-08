---
title: "Objekttyp: Layer-3-Netz"
description: Dokumentation des Objekttyps Layer-3-Netz in i-doit
icon:
status:
lang: de
---

# Objekttyp: Layer-3-Netz

Der Objekttyp **Layer-3-Netz** dokumentiert IP-Subnetze (IPv4 und IPv6). Jedes Subnetz-Objekt repräsentiert einen IP-Adressbereich und dient als Grundlage für die IP-Adressverwaltung in i-doit.

## Verwendung

- **IP-Adressverwaltung**: Dokumentiere alle IP-Subnetze mit Adresse, Maske und Gateway. i-doit zeigt belegte und freie Adressen innerhalb des Netzes.
- **Objekt-Zuweisung**: Geräte-Objekte erhalten ihre IP-Adressen durch Zuweisung zu einem Layer-3-Netz.
- **VLAN-Verknüpfung**: Verbinde Layer-3-Netze mit Layer-2-Netzen (VLANs) für vollständige Netz-Dokumentation.
- **Supernet-Hierarchie**: Ordne Subnetze einem übergeordneten Supernet zu für eine klare Adressraum-Hierarchie.
- **Reports**: Erstelle Reports über IP-Auslastung, freie Adressen und zugewiesene Geräte pro Subnetz.

[![Layer-3-Netz](../../assets/images/de/grundlagen/objekttypen/layer-3-netz.png)](../../assets/images/de/grundlagen/objekttypen/layer-3-netz.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Service-Zuweisung](../kategorien/it-service.md)
- [Buchhaltung](../kategorien/accounting.md)
- [Allgemein](../kategorien/global.md)
- [Logbuch](../kategorien/logbook.md)

### Spezifische Kategorie

Die spezifische Kategorie für diesen Objekttyp ist [Net](../kategorien/s-net.md).
Die spezifische Kategorie für diesen Objekttyp ist [IP list](../kategorien/s-net-ip-addresses.md).
Die spezifische Kategorie für diesen Objekttyp ist [DHCP](../kategorien/s-net-dhcp.md).
Die spezifische Kategorie für diesen Objekttyp ist [Netzbereich](../kategorien/s-net-zone.md).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__LAYER3_NET` |
| **Gruppe** | Netz |
