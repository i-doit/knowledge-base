---
title: "Kategorie: Virtuelle Maschine (Übersicht)"
description: Dokumentation der Kategorie Virtuelle Maschine in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtuelle Maschine

Die Kategorie **Virtuelle Maschine** dokumentiert die Virtualisierungseigenschaften eines Gast-Objekts: auf welchem Host oder Cluster die VM läuft, welches Virtualisierungssystem zum Einsatz kommt und in welchem Zustand sich die VM befindet. Sie ist eine **Single-Value-Kategorie** – pro Objekt existiert genau ein Eintrag.

Die Kategorie bildet die **Gast-Seite** der Virtualisierungsbeziehung ab: Sie wird am VM-Objekt gepflegt und verweist auf den Host oder Cluster, auf dem diese VM ausgeführt wird. Das Gegenstück ist die Kategorie [Gastsysteme](guest-systems.md), die am Host-Objekt alle seine VMs auflistet. Beide Kategorien spiegeln dieselbe Beziehung — einmal aus Gast-Perspektive, einmal aus Host-Perspektive.

!!! warning "Essenziell für Impact-Analysen"
    Ohne gepflegte Host-Zuordnung in dieser Kategorie kann i-doit bei einem Host-Ausfall nicht automatisch ermitteln, welche VMs betroffen sind. Die Verknüpfung zwischen VM und Host ist die Grundlage für jede Ausfallanalyse in virtualisierten Umgebungen. Investiere die Zeit, diese Zuordnung korrekt und aktuell zu halten — bei einer Live-Migration muss auch die CMDB-Dokumentation nachgezogen werden.

## Verwendung

Typische Anwendungsfälle:

- **Host-Zuordnung und Virtualisierungsdokumentation**: Dokumentiere für jede VM, auf welchem physischen Host oder in welchem Cluster sie läuft. In Kombination mit der Kategorie [Gastsysteme](guest-systems.md) am Host-Objekt entsteht eine vollständige bidirektionale Virtualisierungslandkarte. Bei VMware-Umgebungen entspricht dies der Zuordnung VM → ESXi-Host, bei Hyper-V der Zuordnung VM → Hyper-V-Host.
- **VM-Migration und vMotion**: Vor und nach einer Live-Migration muss die Host-Zuordnung aktualisiert werden. Ein Report „VMs, deren Host sich im letzten Monat geändert hat" zeigt Migrationsaktivität und hilft, nicht dokumentierte Verschiebungen aufzudecken. Bei automatisiertem DRS (Distributed Resource Scheduler) sollte die CMDB regelmäßig mit dem tatsächlichen Zustand abgeglichen werden.
- **Ausfallanalyse und Incident Response**: Fällt ein Hypervisor aus, zeigt die Kategorie [Gastsysteme](guest-systems.md) am Host, welche VMs betroffen sind. Umgekehrt zeigt die Kategorie Virtuelle Maschine an jeder VM, auf welchem Host sie lief — beides zusammen ermöglicht eine schnelle Impact-Bewertung.
- **Kapazitätsplanung**: In Kombination mit der Kategorie [Rechenressourcen](computing-resources.md) wird ersichtlich, welche Ressourcen eine VM zugewiesen hat und auf welchem Host diese Ressourcen bereitgestellt werden. Das ist die Grundlage für Rightsizing und Konsolidierung.
- **Lizenzmanagement**: Oracle, Microsoft und andere Hersteller lizenzieren Software teilweise pro physischem Host. Die Kategorie Virtuelle Maschine liefert die Zuordnung VM → Host, die für die Lizenzberechnung zwingend erforderlich ist.

[![Virtuelle Maschine](../../assets/images/de/grundlagen/kategorien/virtual-machine--root.png)](../../assets/images/de/grundlagen/kategorien/virtual-machine--root.png)

## Felder

### Virtuelle Maschine

Ein Dialog-Feld, das festlegt, ob dieses Objekt eine virtuelle Maschine ist. Die möglichen Werte sind `Ja` und `Nein`. Erst wenn hier `Ja` ausgewählt ist, werden die übrigen Felder der Kategorie relevant und die Verknüpfung zum Host aktiv.

### Status

Der aktuelle Betriebszustand der virtuellen Maschine: `Running` (läuft) oder `Stopped` (angehalten). Dieser Wert dokumentiert den geplanten oder zuletzt bekannten Zustand — er wird nicht automatisch mit dem Hypervisor synchronisiert.

### Läuft auf Host/Cluster

Das Kernfeld der Kategorie: eine Verknüpfung zum Host-Server oder Cluster-Objekt, auf dem diese VM ausgeführt wird. Über den Objekt-Browser werden nur Objekte angeboten, die selbst als virtueller Host konfiguriert sind (Kategorien Virtueller Host zugewiesen). Diese Zuordnung ist die Grundlage für die bidirektionale Virtualisierungsbeziehung — der hier ausgewählte Host zeigt die VM automatisch in seiner Kategorie [Gastsysteme](guest-systems.md).

### Virtualisierungssystem

Das eingesetzte Virtualisierungssystem, z.B. `VMware ESXi`, `Microsoft Hyper-V`, `KVM/QEMU` oder `Proxmox VE`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen. Diese Information ist nützlich für Reports, die VMs nach Virtualisierungstechnologie gruppieren, z.B. bei einer geplanten Migration von Hyper-V zu VMware.

### Konfigurationsdatei

Der Pfad zur Konfigurationsdatei der VM auf dem Hypervisor, z.B. `/vmfs/volumes/datastore1/srv-web-01/srv-web-01.vmx` bei VMware oder `/etc/libvirt/qemu/srv-web-01.xml` bei KVM. Dieses Feld ist hilfreich für Administratoren, die direkt auf der Hypervisor-Ebene arbeiten und die VM-Definition bearbeiten oder sichern müssen.

### Host im Cluster

Wenn die VM einem Cluster zugeordnet ist, kann hier der spezifische physische Knoten innerhalb des Clusters angegeben werden, auf dem die VM tatsächlich ausgeführt wird. Bei einem VMware-Cluster mit drei ESXi-Hosts zeigt dieses Feld, auf welchem der drei Knoten die VM aktuell läuft — eine Ebene detaillierter als die reine Cluster-Zuordnung.

### Beschreibung

Freitext für zusätzliche Angaben: Migrationshistorie, besondere Konfiguration (CPU-/RAM-Reservierung, Affinity Rules), geplante Änderungen oder Verweise auf Change-Tickets.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_MACHINE__ROOT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Server, Blade Server, Client, Virtueller Server |

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
        "object": 1042,
        "category": "C__CATG__VIRTUAL_MACHINE__ROOT",
        "data": {
            "virtual_machine": 1,
            "state": 1,
            "hosts": 567,
            "system": "VMware ESXi",
            "config_file": "/vmfs/volumes/datastore1/srv-web-01/srv-web-01.vmx",
            "description": "Produktions-Webserver, DRS-Gruppe 'Web-Tier', keine Affinity Rule"
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
        "category": "C__CATG__VIRTUAL_MACHINE__ROOT"
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
        "category": "C__CATG__VIRTUAL_MACHINE__ROOT",
        "entry": 1,
        "data": {
            "hosts": 890,
            "description": "Migration 2026-04: VM von Host esxi-01 auf esxi-03 verschoben wegen Hardware-Refresh."
        }
    },
    "id": 3
}
```
