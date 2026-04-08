---
title: "Kategorie: Netzwerk-Interface"
description: Dokumentation der Kategorie Netzwerk-Interface in i-doit
icon:
status:
lang: de
---

# Kategorie: Netzwerk-Interface

Die Kategorie **Netzwerk-Interface** dokumentiert die physischen Netzwerkadapter eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Interfaces erfasst werden, z.B. Onboard-NICs, PCIe-Erweiterungskarten oder Fibre-Channel-HBAs.

!!! info "Interface vs. Port – die entscheidende Unterscheidung"
    In i-doit wird zwischen **Interface** (Hardware) und **[Port](network-port.md)** (logische Verbindung) unterschieden. Das Interface repräsentiert die **physische Netzwerkkarte** – mit Hersteller, Modell und Seriennummer. Der Port repräsentiert einen **einzelnen Anschluss** auf dieser Karte – mit MAC-Adresse, Geschwindigkeit, VLAN-Zuordnung und Verkabelung. Eine 4-Port-NIC erzeugt also einen Interface-Eintrag und vier Port-Einträge. Diese Trennung spiegelt die Realität wider: Beim Hardware-Tausch wird das Interface gewechselt, die Port-Konfiguration (VLANs, IP-Adressen) muss danach auf der neuen Karte wiederhergestellt werden.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Dokumentation der Netzwerkkarten**: Erfasse Hersteller, Modell und Seriennummer jeder verbauten NIC. Zusammen mit der Kategorie [Port](network-port.md) und [Hostadresse](ip.md) entsteht eine vollständige Netzwerkdokumentation von der physischen Karte über den logischen Port bis zur IP-Adresse.
- **Firmware-Management**: Das Firmware-Feld dokumentiert den aktuellen Stand jeder Netzwerkkarte. Per Report lässt sich ermitteln, welche Interfaces noch auf einer älteren Firmware-Version laufen und ein Update benötigen – besonders wichtig bei Sicherheitspatches.
- **Ersatzteil- und RMA-Management**: Die Seriennummer ist der Schlüssel für Garantieansprüche und RMA-Prozesse beim Hersteller. Statt die Nummer vor Ort vom Aufkleber abzulesen, findet sie der Support direkt in der CMDB.
- **Slot-Dokumentation und Hardwaretausch**: Die Slotnummer zeigt, in welchem PCIe-Slot die Karte steckt. Beim Austausch einer defekten NIC weiß der Techniker sofort, welchen Slot er ansprechen muss. Bei Servern mit vielen Erweiterungskarten spart das erhebliche Zeit.
- **Kapazitätsplanung Netzwerk**: Über Reports lässt sich auswerten, welche Server welche NIC-Modelle verwenden. Steht ein Upgrade von 10G auf 25G an, zeigt ein Report sofort alle betroffenen Interfaces und die zugehörigen Server.

[![Netzwerk-Interface](../../assets/images/de/grundlagen/kategorien/network-interface.png)](../../assets/images/de/grundlagen/kategorien/network-interface.png)

## Felder

### Bezeichnung

Der Name des Netzwerk-Interfaces, z.B. `eno1`, `enp3s0f0`, `Intel X710-DA2` oder `Onboard NIC 1`. Dieser Wert erscheint in der Listenansicht und wird als Referenz verwendet, wenn Ports diesem Interface zugeordnet werden. Wähle eine Benennung, die sowohl für Administratoren als auch für Techniker vor Ort eindeutig ist.

### Hersteller

Der Hersteller der Netzwerkkarte, z.B. `Intel`, `Broadcom`, `Mellanox/NVIDIA` oder `Chelsio`. Dialog+-Feld – eigene Werte lassen sich ergänzen. Der Hersteller ist der wichtigste Filter für Treiber- und Firmware-Updates, da diese herstellerspezifisch verteilt werden.

### Modell

Die genaue Modellbezeichnung, z.B. `X710-DA2`, `BCM57416`, `ConnectX-6 Dx` oder `E810-XXVDA4`. Dialog+-Feld. In Kombination mit dem Hersteller ermöglicht das Modell eine eindeutige Identifikation für Ersatzteilbeschaffung, Kompatibilitätsprüfungen (Firmware, Treiber, Hypervisor-HCL) und Standardisierungsreports.

### Seriennummer

Die eindeutige Seriennummer der Netzwerkkarte, z.B. `MYSLR1234567`. Wird für RMA-Fälle und Asset-Tracking benötigt. Bei Onboard-NICs ist häufig keine separate Seriennummer vorhanden – das Feld kann in diesem Fall leer bleiben.

### Slotnummer

Der physische Steckplatz der Karte, z.B. `PCIe Slot 2`, `Mezzanine Slot 1` (bei Blade-Servern) oder `Onboard`. Diese Information ist bei Hardwarearbeiten vor Ort unverzichtbar: Der Techniker findet die richtige Karte ohne Rätselraten. Bei Blade-Servern im Blade-Chassis ist die Slot-Zuordnung besonders wichtig, da die Mezzanine-Slots die Fabric-Anbindung bestimmen.

### Firmware

Der aktuelle Firmware-Stand, z.B. `22.5.7` oder `4.40.0553`. NIC-Firmware-Updates sind häufiger als man denkt – sie beheben Stabilitätsprobleme, schließen Sicherheitslücken und erweitern die Kompatibilität. Durch die Dokumentation in der CMDB lässt sich der Rollout eines Firmware-Updates gezielt planen und nachverfolgen.

### Beschreibung

Freitext für alles, was in den strukturierten Feldern keinen Platz findet: Anzahl der Ports auf der Karte, unterstützte Geschwindigkeiten (1G/10G/25G/100G), besondere Fähigkeiten (SR-IOV, RDMA, iSCSI-Offload, DPDK-Unterstützung), Treiberversion und -typ, oder Hinweise zur physischen Verkabelung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NETWORK_INTERFACE` |
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
        "category": "C__CATG__NETWORK_INTERFACE",
        "data": {
            "title": "Intel X710-DA2",
            "manufacturer": "Intel",
            "model": "X710-DA2",
            "serial": "INTC8834B007",
            "slot": "PCIe Slot 2",
            "firmware": "9.20, 0x8000E4A0",
            "description": "2-Port 10GbE SFP+ Adapter, SR-IOV-fähig, DPDK-kompatibel, Treiber: i40e 2.24.6"
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
        "category": "C__CATG__NETWORK_INTERFACE"
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
        "category": "C__CATG__NETWORK_INTERFACE",
        "entry": 3,
        "data": {
            "firmware": "9.30, 0x8000F1B2",
            "description": "Firmware-Update 2026-04: Update auf 9.30 wegen Kompatibilität mit ESXi 8.0 U3."
        }
    },
    "id": 3
}
```
