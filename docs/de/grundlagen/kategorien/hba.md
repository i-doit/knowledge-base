---
title: "Kategorie: Host Bus Adapter (HBA)"
description: Dokumentation der Kategorie Host Bus Adapter (HBA) in i-doit
icon:
status:
lang: de
---

# Kategorie: Host Bus Adapter (HBA)

Die Kategorie **Host Bus Adapter (HBA)** dokumentiert die Fibre-Channel-Adapter, die einen Server mit einem SAN (Storage Area Network) verbinden. Sie ist eine **Multi-Value-Kategorie** -- Server in SAN-Umgebungen haben typischerweise zwei HBAs für redundante Fabric-Anbindung.

Ein HBA ist die physische Steckkarte (PCIe), die Fibre-Channel-Ports bereitstellt. Während die HBA-Kategorie den Adapter selbst beschreibt (Hersteller, Modell, Firmware), werden die einzelnen Ports in der Kategorie [FC-Port](controller-fc-port.md) dokumentiert. Zusammen bilden sie die vollständige SAN-Client-Seite eines Servers.

!!! info "HBA vs. Controller"
    HBAs sind **nicht** dasselbe wie Storage-Controller. Ein [Controller](controller.md) steuert lokale Laufwerke (RAID, SATA, SAS), während ein HBA den Server mit externem SAN-Storage verbindet. In i-doit gibt es bewusst zwei getrennte Kategorien, weil die Anwendungsfälle und die relevanten Zusatzinformationen (WWN, FC-Ports, SAN-Zoning) grundverschieden sind.

## Verwendung

Typische Anwendungsfälle:

- **SAN-Infrastruktur-Dokumentation**: Der HBA ist der Startpunkt der SAN-Anbindung auf Server-Seite. Die Dokumentation von Hersteller, Modell und Firmware bildet zusammen mit den [FC-Ports](controller-fc-port.md) und dem SAN-Zoning eine lückenlose Kette vom Server bis zum Storage.
- **Firmware-Management**: HBA-Firmware-Updates sind kritisch -- eine inkompatible Firmware kann dazu führen, dass der Server seine SAN-LUNs verliert. Über den Report Manager lassen sich alle Server mit einer bestimmten HBA-Firmware-Version identifizieren, bevor ein Update ausgerollt wird.
- **Kompatibilitätsprüfung**: Storage-Hersteller veröffentlichen Kompatibilitätsmatrizen, die festlegen, welche HBA-Modelle und Firmware-Versionen mit ihrem Storage-System zusammenarbeiten. Mit der HBA-Kategorie lässt sich schnell prüfen, ob alle Server kompatible Adapter verwenden.
- **Ersatzteilplanung**: Wenn ein HBA-Modell abgekündigt wird oder ein Adapter ausfällt, zeigt ein Report sofort, wie viele identische HBAs in der Umgebung verbaut sind. Das vereinfacht die Ersatzteilbeschaffung und Budgetplanung.
- **Dual-Fabric-Verifikation**: Best Practice in SAN-Umgebungen ist die Anbindung über zwei getrennte Fabrics. Über die HBA-Kategorie lässt sich prüfen, ob jeder Server tatsächlich zwei HBAs hat -- und ob deren FC-Ports auf unterschiedliche Fabrics verteilt sind.

!!! tip "Vollständige SAN-Dokumentation"
    Für eine vollständige SAN-Dokumentation auf Server-Seite brauchst du drei Kategorien: **HBA** (der Adapter), **[FC-Port](controller-fc-port.md)** (die Ports mit WWPNs) und **[Logische Geräte (Client)](ldev-client.md)** (die zugewiesenen LUNs). Nur wenn alle drei gepflegt sind, ergibt sich ein lückenloses Bild der SAN-Anbindung.

[![Host Bus Adapter (HBA)](../../assets/images/de/grundlagen/kategorien/hba.png)](../../assets/images/de/grundlagen/kategorien/hba.png)

## Felder

### Bezeichnung

Der Name oder die Bezeichnung des HBAs, z.B. `Emulex LPe36002` oder `QLogic QLE2772`. Verwende eine Bezeichnung, die den Adapter eindeutig identifiziert -- bei mehreren HBAs im selben Server empfiehlt sich die Ergänzung des PCIe-Slots, z.B. `QLE2772 (Slot 3)`.

### Typ

Die Art des Host-Bus-Adapters, z.B. `FC-HBA`, `FCoE-HBA` oder `iSCSI-HBA`. Dialog-Feld. Relevant, weil verschiedene HBA-Typen unterschiedliche Protokolle und Netzwerke nutzen.

### Hersteller

Der Hersteller des HBAs, z.B. `Broadcom (Emulex)`, `Marvell (QLogic)` oder `ATTO`. Dialog+-Feld mit erweiterbaren Werten. Wichtig für Support-Anfragen und Firmware-Downloads.

### Modell

Die genaue Modellbezeichnung, z.B. `LPe36002-M64` oder `QLE2772-DEL`. Dialog+-Feld. Das Modell bestimmt die unterstützten Geschwindigkeiten, die Anzahl der Ports und die Kompatibilität mit dem Storage-System.

### Firmware

Die aktuell installierte Firmware-Version, z.B. `14.2.537.16`. Textfeld. HBA-Firmware-Updates können kritisch sein -- eine falsche Version kann den SAN-Zugriff unterbrechen. Dokumentiere hier immer die tatsächlich installierte Version und aktualisiere sie nach jedem Firmware-Update.

!!! warning "Firmware vor Storage-Migration prüfen"
    Vor einer Storage-Migration (z.B. Wechsel von einem älteren zu einem neuen Storage-Array) muss die HBA-Firmware mit dem neuen Storage kompatibel sein. Prüfe die Kompatibilitätsmatrix des Storage-Herstellers und gleiche sie mit den in i-doit dokumentierten Firmware-Versionen ab.

### Beschreibung

Freitext für zusätzliche Angaben: PCIe-Slot-Nummer, Treiber-Version, zugeordnete Fabric (A/B), Besonderheiten bei der Konfiguration (z.B. Boot from SAN aktiviert) oder Hinweise zur Kompatibilität.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__HBA` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Typ** | `type` | Dialog (Auswahl) |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `model` | Dialog+ (erweiterbare Auswahl) |
| **Firmware** | `firmware` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__HBA",
        "data": {
            "title": "Emulex LPe36002 (Slot 3)",
            "type": "FC-HBA",
            "manufacturer": "Broadcom (Emulex)",
            "model": "LPe36002-M64",
            "firmware": "14.2.537.16",
            "description": "Dual-Port 64G FC HBA, Fabric A, PCIe Slot 3, Boot from SAN aktiviert"
        }
    },
    "id": 1
}
```

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__HBA"
    },
    "id": 2
}
```

#### Eintrag aktualisieren

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__HBA",
        "entry": 4,
        "data": {
            "firmware": "14.4.100.6",
            "description": "2026-04: Firmware-Update auf 14.4.100.6, Kompatibilität mit Pure Storage FlashArray//X verifiziert"
        }
    },
    "id": 3
}
```
