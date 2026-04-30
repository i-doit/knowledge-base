---
title: "Kategorie: Virtuelle Switches"
description: Dokumentation der Kategorie Virtuelle Switches in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtuelle Switches

Die Kategorie **Virtuelle Switches** dokumentiert die virtuellen Netzwerk-Switches eines Hypervisors — vSwitches bei VMware, virtuelle Bridges bei KVM oder virtuelle Switches bei Hyper-V. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, da ein Hypervisor typischerweise mehrere vSwitches für verschiedene Netzwerksegmente konfiguriert hat.

Virtuelle Switches sind die **Netzwerkgrundlage der Virtualisierung**: Sie verbinden die virtuellen Netzwerkkarten (vNICs) der Gastsysteme mit den physischen Netzwerkadaptern des Hosts. Über Port-Gruppen werden VMs bestimmten VLANs oder Netzwerksegmenten zugeordnet. Die Kategorie wird am **Host-Objekt** (dem Hypervisor) gepflegt und stellt die Brücke zwischen der virtuellen und der physischen Netzwerkebene her.

!!! tip "Zusammenspiel mit Port-Kategorien"
    Die physischen Uplinks eines vSwitch sind in der Kategorie [Netzwerk-Port](network-port.md) am selben Host-Objekt dokumentiert. Die virtuellen Ports der Gastsysteme werden in der Kategorie [Virtuelle Geräte](virtual-device.md) am VM-Objekt über das Feld *Switch Port Group* dem entsprechenden vSwitch zugeordnet. Für eine vollständige Netzwerkdokumentation sollten alle drei Kategorien gepflegt sein.

## Verwendung

Typische Anwendungsfälle:

- **Netzwerktopologie der Virtualisierung**: Erfasse alle vSwitches eines Hypervisors mit ihren Port-Gruppen und physischen Uplinks. In einer VMware-Umgebung hat ein ESXi-Host typischerweise mindestens zwei vSwitches: einen für das Management-Netzwerk und einen für den VM-Traffic. Die korrekte Dokumentation dieser Struktur ist die Grundlage für Netzwerk-Troubleshooting und Sicherheitsanalysen.
- **VLAN-Zuordnung**: Port-Gruppen auf vSwitches definieren, in welchem VLAN die angeschlossenen VMs kommunizieren. Durch die Dokumentation der Port-Gruppen in dieser Kategorie lässt sich per Report auswerten, welche VMs in welchem VLAN hängen — ohne auf den Hypervisor zugreifen zu müssen. Das ist besonders bei Sicherheitsaudits relevant, wenn die Netzwerktrennung nachgewiesen werden muss.
- **Uplink-Redundanz prüfen**: Die Zuordnung physischer Ports zu einem vSwitch zeigt, ob Uplink-Redundanz gegeben ist. Ein vSwitch mit nur einem physischen Uplink ist ein Single Point of Failure — fällt dieser Adapter aus, verlieren alle VMs auf diesem vSwitch ihre Netzwerkverbindung. Ein Report „vSwitches mit weniger als 2 Uplinks" identifiziert diese Risiken.
- **VMkernel-Ports dokumentieren**: Die Felder *Service Console Ports* und *VMKernel Ports* erfassen die speziellen Ports für Management-Traffic, vMotion, iSCSI-Storage und NFS-Traffic. Diese Ports sind für den Betrieb des Hypervisors kritisch und müssen bei Netzwerkumstellungen besonders berücksichtigt werden.
- **Migration und Standardisierung**: Vor einer Netzwerkumstellung (z.B. Einführung von Distributed vSwitches oder Migration auf einen neuen Hypervisor) liefert die Kategorie den Ist-Zustand aller vSwitch-Konfigurationen. Durch den Vergleich mehrerer Hosts lassen sich Abweichungen von der Standardkonfiguration erkennen.

[![Virtuelle Switches](../../assets/images/de/grundlagen/kategorien/virtual-switch.png)](../../assets/images/de/grundlagen/kategorien/virtual-switch.png)

## Felder

### Bezeichnung

Der Name des virtuellen Switches, z.B. `vSwitch0`, `vSwitch1`, `br0` oder `Default Switch`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Bei VMware-Umgebungen entspricht der Name dem vSwitch-Namen im vSphere Client.

### Ports

Die physischen Netzwerk-Ports (Uplinks), die dem vSwitch zugeordnet sind. Hier werden die physischen Adapter des Hosts ausgewählt, über die der vSwitch mit dem physischen Netzwerk verbunden ist — z.B. `vmnic0`, `vmnic1` oder `eth0`. Mehrere Ports bedeuten Uplink-Redundanz: Fällt ein Adapter aus, übernimmt der andere den Traffic.

### Port-Gruppen

Die konfigurierten Port-Gruppen auf diesem vSwitch. Jede Port-Gruppe definiert ein Netzwerksegment mit eigenen Einstellungen (VLAN-ID, Sicherheitsrichtlinien, Traffic-Shaping). VMs werden über ihre virtuellen Netzwerkkarten einer Port-Gruppe zugeordnet — z.B. `VM Network`, `VLAN 100 - Produktion` oder `DMZ`.

### Service Console Ports

Die Service-Console-Ports auf diesem vSwitch — relevant bei älteren ESXi-Versionen mit separatem Service-Console-Interface. Dokumentiert, über welchen Port das Management-Netzwerk des Hypervisors erreichbar ist.

### VMKernel Ports

Die VMKernel-Ports auf diesem vSwitch. VMKernel-Ports werden für Management-Traffic, vMotion, iSCSI-Storage, NFS-Traffic und Fault Tolerance Logging verwendet. Jeder VMKernel-Port hat eine eigene IP-Adresse und kann für bestimmte Services aktiviert werden — z.B. ein VMKernel-Port auf VLAN 200 für vMotion-Traffic.

### Beschreibung

Freitext für zusätzliche Angaben: VLAN-Konfiguration der Port-Gruppen, Teaming-Policy (z.B. „Active/Standby" oder „Load Balancing"), Security-Einstellungen (Promiscuous Mode, MAC-Adressänderungen) oder Hinweise zur geplanten Migration auf Distributed vSwitches.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_SWITCH` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Ports** | `ports` | Dialog-Liste |
| **Port-Gruppen** | `portgroup` | Dialog (Auswahl) |
| **Service Console Ports** | `serviceconsoleports` | Dialog (Auswahl) |
| **VMKernel Ports** | `vmkernelports` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__VIRTUAL_SWITCH",
        "data": {
            "title": "vSwitch0",
            "description": "Management + VM-Traffic, Uplinks: vmnic0/vmnic1, Teaming: Active/Standby, Port-Gruppen: Management Network (VLAN 10), VM Network (VLAN 100)"
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
        "object": 123,
        "category": "C__CATG__VIRTUAL_SWITCH"
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
        "object": 123,
        "category": "C__CATG__VIRTUAL_SWITCH",
        "entry": 2,
        "data": {
            "title": "vSwitch1",
            "description": "Storage-Traffic (iSCSI), Uplinks: vmnic2/vmnic3, MTU 9000 (Jumbo Frames)"
        }
    },
    "id": 3
}
```
