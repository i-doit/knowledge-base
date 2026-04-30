---
title: "Kategorie: Virtuelle Maschine"
description: Dokumentation der Kategorie Virtuelle Maschine in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtuelle Maschine

Die Kategorie **Virtuelle Maschine** dokumentiert die Virtualisierungseigenschaften eines Gast-Objekts — auf welchem Host oder Cluster die VM läuft, welches Virtualisierungssystem verwendet wird und in welchem Zustand sich die VM befindet. Sie ist eine **Single-Value-Kategorie** – pro Objekt existiert genau ein Eintrag, da eine VM zu einem bestimmten Zeitpunkt auf genau einem Host läuft.

Diese Kategorie bildet die **Gast-Seite** der Virtualisierungsbeziehung ab: Sie wird am VM-Objekt gepflegt und zeigt dessen Zuordnung zum Host. Das Gegenstück ist die Kategorie [Gastsysteme](guest-systems.md), die auf dem Host-Objekt die Liste aller Gäste zeigt. Beide Kategorien spiegeln dieselbe Beziehung — einmal aus Gast-Perspektive, einmal aus Host-Perspektive.

!!! tip "Virtualisierungskategorien im Zusammenspiel"
    Die vollständige Dokumentation einer VM erfordert mehrere Kategorien: **Virtuelle Maschine** (diese Kategorie) ordnet die VM einem Host zu. [Virtuelle Geräte](virtual-device.md) dokumentiert die einzelnen virtualisierten Komponenten (vNICs, vDisks). [CPU](cpu.md), [Speicher](memory.md) und [Laufwerk](drive.md) beschreiben die Ressourcen aus Sicht des Gastbetriebssystems. Zusammen entsteht ein vollständiges Bild — von der Host-Zuordnung über die virtuelle Hardware bis zur Betriebssystem-Sicht.

## Verwendung

Typische Anwendungsfälle:

- **Host-Zuordnung**: Das wichtigste Feld *Läuft auf Host/Cluster* verknüpft die VM mit ihrem Hypervisor. Damit ist auf einen Blick ersichtlich, auf welcher physischen Hardware die VM läuft. Bei einem Host-Ausfall lässt sich über die Gegenkategorie [Gastsysteme](guest-systems.md) am Host sofort ermitteln, welche VMs betroffen sind — oder umgekehrt: von der VM aus direkt zum Host navigieren.
- **Virtualisierungssystem dokumentieren**: Das Feld *Virtualisierungssystem* erfasst die verwendete Technologie: VMware, KVM/QEMU, Hyper-V, Xen, Proxmox VE oder andere. Per Report lässt sich auswerten, welche Virtualisierungstechnologien im Einsatz sind — hilfreich bei Konsolidierungsprojekten oder beim Auslaufen von Supportverträgen (z.B. VMware-zu-Proxmox-Migration).
- **VM-Status**: Das Feld *Status* zeigt, ob die VM eingeschaltet, ausgeschaltet oder pausiert ist. In Kombination mit der automatischen Inventarisierung (JDisc) wird dieser Status regelmäßig aktualisiert. Ein Report „alle VMs im Status ausgeschaltet seit mehr als 90 Tagen" identifiziert vergessene oder nicht mehr benötigte Maschinen — ein wichtiger Beitrag zur Ressourcenoptimierung.
- **Cluster-Zuordnung**: Bei VMs in einem HA-Cluster zeigt das Feld *Host im Cluster*, auf welchem physischen Knoten die VM aktuell läuft. Das ist besonders in vSphere-Clustern relevant, wo VMs per DRS zwischen Hosts verschoben werden. Die Kategorie dokumentiert dann den primären Host.
- **Konfigurationsdatei**: Der Pfad zur VM-Konfigurationsdatei (z.B. `.vmx` bei VMware oder `.xml` bei KVM) wird im Feld *Konfigurationsdatei* erfasst. Diese Information ist beim manuellen Troubleshooting oder bei der Wiederherstellung einer VM aus einem Backup unverzichtbar.

[![Virtuelle Maschine](../../assets/images/de/grundlagen/kategorien/virtual-machine.png)](../../assets/images/de/grundlagen/kategorien/virtual-machine.png)

## Felder

### Virtuelle Maschine

Gibt an, ob das Objekt eine virtuelle Maschine ist (`Ja` oder `Nein`). **Dieses Feld ist der zentrale Schalter**: Erst wenn es auf `Ja` steht, wird das Objekt als VM behandelt und die übrigen Felder dieser Kategorie werden relevant. Bei JDisc-Imports wird dieses Feld automatisch gesetzt, wenn eine VM erkannt wird.

### Status

Der aktuelle Betriebszustand der VM, z.B. `eingeschaltet`, `ausgeschaltet` oder `pausiert`. Wird bei automatischer Inventarisierung regelmäßig aktualisiert. In Reports lässt sich gezielt nach ausgeschalteten VMs filtern, um ungenutzte Ressourcen zu identifizieren.

### Läuft auf Host/Cluster

Verknüpfung zum Host-Objekt oder Cluster, auf dem die VM ausgeführt wird. Über den Objekt-Browser wird ein Server- oder Cluster-Objekt ausgewählt, das zuvor in der Kategorie [Virtueller Host](virtual-host.md) als Hypervisor gekennzeichnet wurde. Dieses Feld ist das **Kernstück der Virtualisierungsdokumentation** — es stellt die Beziehung zwischen Gast und Host her.

### Virtualisierungssystem

Die verwendete Virtualisierungstechnologie, z.B. `VMware`, `KVM`, `Hyper-V`, `Xen` oder `Proxmox VE`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Ermöglicht Reports über die Verteilung der Virtualisierungstechnologien im Unternehmen.

### Konfigurationsdatei

Der Pfad zur Konfigurationsdatei der VM, z.B. `/vmfs/volumes/datastore1/vm-web01/vm-web01.vmx` bei VMware oder `/etc/libvirt/qemu/vm-web01.xml` bei KVM. Diese Information ist bei der manuellen Wiederherstellung einer VM oder beim Troubleshooting von Startproblemen unverzichtbar.

### Host im Cluster

Gibt bei Cluster-Konfigurationen an, auf welchem physischen Knoten innerhalb des Clusters die VM primär läuft. Relevant bei VMware DRS, Hyper-V Live Migration oder Proxmox HA — Umgebungen, in denen VMs automatisch zwischen Cluster-Knoten verschoben werden können.

### Beschreibung

Freitext für zusätzliche Angaben: Einsatzzweck der VM, zugeordnete Anwendungen, Besonderheiten in der Konfiguration (z.B. „GPU-Passthrough", „NUMA-Pinning") oder Hinweise zum Lifecycle.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_MACHINE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Virtuelle Maschine** | `virtual_machine` | Dialog (Auswahl) |
| **Status** | `state` | Dialog (Auswahl) |
| **Läuft auf Host/Cluster** | `hosts` | Objekt-Browser (Verknüpfung) |
| **Virtualisierungssystem** | `system` | Dialog+ (erweiterbare Auswahl) |
| **Konfigurationsdatei** | `config_file` | Text |
| **Host im Cluster** | `primary` | Dialog (Auswahl) |
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
        "category": "C__CATG__VIRTUAL_MACHINE",
        "data": {
            "virtual_machine": 1,
            "state": 1,
            "hosts": 456,
            "system": "VMware",
            "config_file": "/vmfs/volumes/datastore1/vm-web01/vm-web01.vmx",
            "description": "Webserver, Ubuntu 22.04, 4 vCPU, 8 GB RAM"
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
        "category": "C__CATG__VIRTUAL_MACHINE"
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
        "category": "C__CATG__VIRTUAL_MACHINE",
        "entry": 1,
        "data": {
            "hosts": 789,
            "description": "Live-Migration auf Host esxi-03 (ID 789), 2026-04."
        }
    },
    "id": 3
}
```
