---
title: "Kategorie: Netzwerk"
description: Dokumentation der Kategorie Netzwerk in i-doit
icon:
status:
lang: de
---

# Kategorie: Netzwerk

Die Kategorie **Netzwerk** dokumentiert die physischen Netzwerkadapter (NICs) eines Objekts auf Hardware-Ebene. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Netzwerkkarten erfasst werden, z.B. zwei Onboard-NICs und eine zusätzliche PCIe-Netzwerkkarte.

!!! info "Netzwerk vs. Port vs. Hostadresse"
    Die Kategorie **Netzwerk** beschreibt die **physische Hardware** – die Netzwerkkarte selbst mit Hersteller, Modell und Seriennummer. Die Kategorie [Port](network-port.md) dokumentiert die **logischen Anschlüsse** dieser Karte (Geschwindigkeit, Duplex, VLAN, MAC-Adresse). Die Kategorie [Hostadresse](ip.md) erfasst die **IP-Konfiguration** einzelner Ports. Diese drei Kategorien bilden zusammen die vollständige Netzwerkdokumentation eines Objekts: Hardware → logischer Port → IP-Adresse.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Inventar der Netzwerkadapter**: Erfasse Hersteller und Modell jeder verbauten NIC. Das ist besonders wichtig für Treiber-Management und Firmware-Updates: Ein Report kann alle Server mit einer bestimmten NIC (z.B. `Broadcom BCM57414`) auflisten, wenn ein kritisches Firmware-Update ansteht.
- **Slot-Zuordnung**: Das Feld Slotnummer dokumentiert, in welchem PCIe-Slot die Karte steckt. Bei einem Hardwaretausch weiß der Techniker sofort, welchen Slot er öffnen muss – ohne den Server erst aufzuschrauben und nachzuschauen.
- **Seriennummern-Tracking**: Die Seriennummer der NIC ist bei RMA-Fällen (Return Merchandise Authorization) und Garantieabwicklungen erforderlich. Statt die Seriennummer vor Ort vom Aufkleber abzulesen, findet der Support sie direkt in der CMDB.
- **Firmware-Dokumentation**: Das Firmware-Feld hält den aktuellen Firmware-Stand fest. In Kombination mit Reports lässt sich prüfen, welche NICs noch auf einer veralteten Firmware-Version laufen und ein Update benötigen.

[![Netzwerk](../../assets/images/de/grundlagen/kategorien/network.png)](../../assets/images/de/grundlagen/kategorien/network.png)

## Felder

### Bezeichnung

Der Name des Netzwerkadapters, z.B. `eth0`, `eno1` oder `Intel I350-T4`. Dieses Feld erscheint in der Listenansicht und dient der schnellen Identifikation. Verwende die Betriebssystem-Bezeichnung (z.B. `eno1`) oder den Modellnamen – je nachdem, was in deiner Organisation üblicher ist.

### Hersteller

Der Hersteller der Netzwerkkarte, z.B. `Intel`, `Broadcom`, `Mellanox` oder `Realtek`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Dieser Wert ist entscheidend für Treiber- und Firmware-Management, da Updates herstellerspezifisch bereitgestellt werden.

### Modell

Die genaue Modellbezeichnung der NIC, z.B. `I350-T4`, `BCM57414` oder `ConnectX-6`. Dialog+-Feld. In Kombination mit dem Hersteller ergibt sich eine eindeutige Identifikation der Hardware, die für Kompatibilitätsprüfungen und Ersatzteilbeschaffung benötigt wird.

### Seriennummer

Die eindeutige Seriennummer der Netzwerkkarte. Wird für Garantieansprüche, RMA-Prozesse und Asset-Tracking benötigt. Bei Onboard-NICs ist häufig keine separate Seriennummer vorhanden – in diesem Fall kann das Feld leer bleiben oder auf die Seriennummer des Mainboards verwiesen werden.

### Slotnummer

Der physische Steckplatz, in dem die Karte verbaut ist, z.B. `PCIe Slot 3` oder `Onboard`. Diese Information beschleunigt Hardware-Arbeiten vor Ort erheblich: Der Techniker weiß sofort, welchen Slot er ansprechen muss, ohne das Gehäuse erst öffnen und suchen zu müssen.

### Firmware

Der aktuelle Firmware-Stand der Netzwerkkarte, z.B. `20.5.13` oder `14.32.20.04`. Firmware-Updates für NICs beheben häufig Stabilitätsprobleme oder Sicherheitslücken. Durch die Dokumentation in der CMDB lässt sich per Report schnell ermitteln, welche Karten noch ein Update benötigen.

### Beschreibung

Freitext für ergänzende Details: Anzahl der Ports, unterstützte Geschwindigkeiten (1G/10G/25G), besondere Fähigkeiten (SR-IOV, RDMA, iSCSI-Offload), Treiberversion oder Hinweise zur Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NETWORK` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Blade Chassis, Client, PDU, Drucker, Router, Mobilfunkvertrag |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `model` | Dialog+ (erweiterbare Auswahl) |
| **Seriennummer** | `serial` | Text |
| **Slotnummer** | `slot` | Text |
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
        "category": "C__CATG__NETWORK",
        "data": {
            "title": "eno1 - Intel I350-T4",
            "manufacturer": "Intel",
            "model": "I350-T4",
            "serial": "INTC4712A003",
            "slot": "PCIe Slot 1",
            "firmware": "1.63, 0x80001179",
            "description": "4-Port 1GbE Adapter, SR-IOV-fähig, Treiber: igb 5.14.16"
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
        "category": "C__CATG__NETWORK"
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
        "category": "C__CATG__NETWORK",
        "entry": 8,
        "data": {
            "firmware": "1.67, 0x80001245",
            "description": "Firmware-Update 2026-03: Sicherheitspatch für CVE-2026-1234 eingespielt."
        }
    },
    "id": 3
}
```
