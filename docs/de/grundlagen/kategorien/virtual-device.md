---
title: "Kategorie: Virtuelle Geräte"
description: Dokumentation der Kategorie Virtuelle Geräte in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtuelle Geräte

Die Kategorie **Virtuelle Geräte** dokumentiert die virtualisierten Hardware-Komponenten einer virtuellen Maschine — virtuelle Netzwerkkarten (vNICs), virtuelle Festplatten (vDisks) und andere virtuelle Geräte, die dem Gast zugewiesen sind. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, da eine VM typischerweise mehrere virtuelle Geräte besitzt.

Diese Kategorie wird am **VM-Objekt** (dem Gast) gepflegt und stellt die **Brücke zwischen der virtuellen und der physischen Schicht** her: Jedes virtuelle Gerät kann mit einer konkreten Host-Ressource verknüpft werden — einem physischen Port, einem Speichergerät oder einem RAID-Array auf dem Hypervisor. Damit lässt sich nachvollziehen, welche physische Hardware hinter einer virtuellen Ressource steht.

!!! tip "Zusammenspiel mit Gastsysteme und Virtuelle Maschine"
    Die Kategorie [Gastsysteme](guest-systems.md) am Host listet die VMs auf. Die Kategorie [Virtuelle Maschine](virtual-machine.md) am Gast zeigt die Zuordnung zum Host. Die Kategorie **Virtuelle Geräte** geht einen Schritt weiter und dokumentiert die einzelnen virtualisierten Komponenten der VM — und verknüpft sie mit den physischen Ressourcen des Hosts. Alle drei Kategorien zusammen ergeben ein vollständiges Bild der Virtualisierungsbeziehung.

## Verwendung

Typische Anwendungsfälle:

- **VM-Hardware-Inventar**: Erfasse alle virtuellen Geräte einer VM — vNICs, vDisks, vCPUs und virtuelle Interfaces. Zusammen mit der Kategorie [Virtuelle Maschine](virtual-machine.md) entsteht eine vollständige Dokumentation der VM-Konfiguration, wie sie auch im Hypervisor-Management (vSphere Client, Hyper-V Manager) sichtbar ist.
- **Mapping zur physischen Infrastruktur**: Über die Host-Ressourcen-Felder lässt sich nachvollziehen, welcher physische Port, welches Speichergerät oder welches RAID-Array auf dem Hypervisor hinter einem virtuellen Gerät steht. Bei Performance-Problemen einer VM zeigt diese Verknüpfung sofort, ob das Problem auf der physischen Schicht liegt — z.B. ein überlastetes RAID-Array, das von mehreren VMs geteilt wird.
- **Netzwerk-Dokumentation virtueller Maschinen**: Virtuelle Netzwerkkarten werden über die Felder *Lokaler Port*, *Korrespondierender Host-Port* und *Switch Port Group* dokumentiert. In Kombination mit der Kategorie [Virtuelle Switches](virtual-switch.md) am Host entsteht eine vollständige Netzwerktopologie der virtualisierten Umgebung.
- **Storage-Zuordnung**: Über die Felder *Host-Ressource*, *Zugewiesenes Speichergerät (Host)* und *Host-RAID-Array* lässt sich die Storage-Kette nachvollziehen: von der virtuellen Festplatte der VM über das Datastore-Backend bis zum physischen RAID-Array oder SAN-LUN auf dem Host.
- **Migration und Troubleshooting**: Vor einer VM-Migration zeigt die Kategorie, welche Host-Ressourcen die VM nutzt. Nach einer Migration müssen die Host-seitigen Verknüpfungen aktualisiert werden — insbesondere bei Storage- und Netzwerk-Zuordnungen, die sich zwischen Hosts unterscheiden können.

[![Virtuelle Geräte](../../assets/images/de/grundlagen/kategorien/virtual-device.png)](../../assets/images/de/grundlagen/kategorien/virtual-device.png)

## Felder

### Host-Ressource (Speicher)

Verknüpfung zu einem Speichergerät auf dem Host, das diesem virtuellen Gerät zugrunde liegt. Zeigt, welches physische Storage-Device (z.B. ein Datastore oder eine LUN) die Daten der virtuellen Festplatte tatsächlich speichert.

### Host-LDEV-Client

Verknüpfung zum logischen Gerät (LDEV) auf dem Host, das dem virtuellen Gerät zugeordnet ist. Relevant bei SAN-Umgebungen, in denen LUNs als logische Geräte dem Host präsentiert und dann an die VM durchgereicht werden.

### Zugewiesenes Speichergerät (Host)

Verknüpfung zu einem Laufwerk auf dem Host, das der VM als virtuelles Speichergerät bereitgestellt wird. Ermöglicht die Zuordnung der virtuellen Festplatte zu einem konkreten physischen Laufwerk oder einer Partition auf dem Hypervisor.

### Korrespondierender Host-Port

Verknüpfung zum physischen Netzwerk-Port auf dem Host, der hinter der virtuellen Netzwerkkarte steht. Zeigt, über welchen physischen Uplink die VM tatsächlich kommuniziert — entscheidend bei Netzwerk-Troubleshooting und Bandbreitenplanung.

### Host-Interface

Verknüpfung zum Host-Interface (z.B. einem VMkernel-Port oder einem Management-Interface), das dem virtuellen Gerät zugeordnet ist.

### Host-RAID-Array

Verknüpfung zum RAID-Array auf dem Host, auf dem die virtuelle Festplatte liegt. Zusammen mit der Kategorie [RAID](raid.md) am Host-Objekt lässt sich nachvollziehen, welches RAID-Level und welche physischen Platten die Daten der VM absichern.

### Lokales Speichergerät

Verknüpfung zum lokalen Speichergerät innerhalb der VM — dem virtuellen Laufwerk aus Sicht des Gastbetriebssystems. Dieses Feld verbindet die virtuelle Geräte-Ebene mit der Kategorie [Laufwerk](drive.md) am VM-Objekt.

### Lokaler Port

Verknüpfung zum lokalen Netzwerk-Port der VM — der virtuellen Netzwerkkarte aus Sicht des Gastbetriebssystems. Verbindet die virtuelle Geräte-Ebene mit der Kategorie Netzwerk-Port am VM-Objekt.

### Host-Ressource (Interface)

Verknüpfung zu einem Host-Interface, das dem virtuellen Gerät zugeordnet ist. Ergänzt die Host-Port-Verknüpfung um weitere Interface-Typen.

### Speichertyp

Der Typ des virtuellen Speichers, z.B. `Thick Provisioned`, `Thin Provisioned` oder `Raw Device Mapping`. Dialog+-Feld. Relevant für die Kapazitätsplanung: Thin-Provisioned-Disks belegen zunächst weniger Platz auf dem Datastore, können aber unerwartet wachsen.

### Netzwerktyp

Der Typ der virtuellen Netzwerkverbindung, z.B. `E1000`, `VMXNET3` oder `VirtIO`. Dialog+-Feld. Der Netzwerktyp bestimmt Performance und Treiberkompatibilität im Gastbetriebssystem.

### Switch Port Group

Verknüpfung zur Port-Gruppe des [virtuellen Switches](virtual-switch.md), der die virtuelle Netzwerkkarte zugeordnet ist. Die Port-Gruppe definiert VLAN-Zuordnung, Sicherheitsrichtlinien und Traffic-Shaping für den virtuellen Netzwerkverkehr.

### Cluster-Storage

Bezeichnung des Cluster-Speichers, auf dem das virtuelle Gerät liegt — z.B. der Name eines Shared Datastores in einem VMware-Cluster oder eines Cluster Shared Volumes in Hyper-V.

### Cluster-Interface

Bezeichnung des Cluster-Interfaces, über das die VM im Cluster kommuniziert.

### Pfad

Der Pfad zur Disk-Image-Datei der virtuellen Festplatte, z.B. `[datastore1] vm-web01/vm-web01.vmdk` bei VMware oder `/var/lib/libvirt/images/vm-web01.qcow2` bei KVM. Diese Information ist beim Troubleshooting und bei manuellen Storage-Operationen unverzichtbar.

### Gerätetyp

Der Typ des virtuellen Geräts, z.B. `Hard disk`, `Network adapter`, `CD/DVD drive` oder `SCSI controller`. Klassifiziert das virtuelle Gerät nach seiner Funktion.

### Typ (Netzwerk)

Zusätzliche Typisierung für virtuelle Netzwerkgeräte, z.B. `Bridged`, `NAT` oder `Host-only`.

### Beschreibung

Freitext für zusätzliche Angaben: Performance-Einstellungen (z.B. IOPS-Limits, Bandbreiten-Reservierungen), Besonderheiten in der Konfiguration oder Hinweise zur Verwendung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_DEVICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Host-Ressource (Speicher)** | `host_stor_device` | Dialog (Auswahl) |
| **Host-LDEV-Client** | `host_ldev_client` | Dialog (Auswahl) |
| **Zugewiesenes Speichergerät (Host)** | `host_drive` | Dialog (Auswahl) |
| **Korrespondierender Host-Port** | `host_port` | Dialog (Auswahl) |
| **Host-Interface** | `host_interface` | Dialog (Auswahl) |
| **Host-RAID-Array** | `host_raid` | Dialog (Auswahl) |
| **Lokales Speichergerät** | `local_stor_device` | Dialog (Auswahl) |
| **Lokaler Port** | `local_port` | Dialog (Auswahl) |
| **Host-Ressource (Interface)** | `local_interface` | Dialog (Auswahl) |
| **Speichertyp** | `storage_type` | Dialog+ (erweiterbare Auswahl) |
| **Netzwerktyp** | `network_type` | Dialog+ (erweiterbare Auswahl) |
| **Switch Port Group** | `switch_port_group` | Dialog (Auswahl) |
| **Cluster-Storage** | `cluster_storage` | Text |
| **Cluster-Interface** | `cluster_interface` | Text |
| **Pfad** | `disk_image_location` | Text |
| **Gerätetyp** | `device_type` | Text |
| **Typ (Netzwerk)** | `virtual_network_type` | Text |
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
        "category": "C__CATG__VIRTUAL_DEVICE",
        "data": {
            "device_type": "Hard disk",
            "storage_type": "Thin Provisioned",
            "disk_image_location": "[datastore1] vm-web01/vm-web01.vmdk",
            "description": "Systemplatte, 80 GB, Thin Provisioned auf Datastore 1"
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
        "category": "C__CATG__VIRTUAL_DEVICE"
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
        "category": "C__CATG__VIRTUAL_DEVICE",
        "entry": 5,
        "data": {
            "storage_type": "Thick Provisioned Eager Zeroed",
            "description": "Konvertierung von Thin auf Thick nach Performance-Problemen, 2026-04."
        }
    },
    "id": 3
}
```
