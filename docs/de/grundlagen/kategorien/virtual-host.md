---
title: "Kategorie: Virtueller Host"
description: Dokumentation der Kategorie Virtueller Host in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtueller Host

Die Kategorie **Virtueller Host** kennzeichnet ein Objekt als Hypervisor und dokumentiert die zugehörige Verwaltungsinfrastruktur. Sie ist eine **Single-Value-Kategorie** – pro Objekt existiert genau ein Eintrag, da ein Server entweder als Hypervisor konfiguriert ist oder nicht.

Das zentrale Feld *Virtueller Host* ist ein Ja/Nein-Schalter: Wird er auf `Ja` gesetzt, wird das Objekt als Hypervisor markiert und steht in der Kategorie [Virtuelle Maschine](virtual-machine.md) anderer Objekte als Host zur Auswahl. Zusätzlich können ein Lizenzserver und ein Verwaltungsdienst (z.B. vCenter, SCVMM) verknüpft werden.

!!! info "Virtueller Host vs. Gastsysteme"
    Die Kategorie **Virtueller Host** aktiviert die Hypervisor-Rolle eines Objekts und verknüpft es mit der Verwaltungsschicht. Die Kategorie [Gastsysteme](guest-systems.md) listet dann die konkreten VMs auf, die auf diesem Host laufen. Beide Kategorien werden am selben Server-Objekt gepflegt: **Virtueller Host** definiert *dass* es ein Hypervisor ist, **Gastsysteme** zeigt *welche* VMs darauf laufen.

## Verwendung

Typische Anwendungsfälle:

- **Hypervisor-Kennzeichnung**: Markiere physische Server als Virtualisierungs-Hosts, damit sie im Objekt-Browser der Kategorie [Virtuelle Maschine](virtual-machine.md) als Host zur Verfügung stehen. Ohne diese Kennzeichnung kann ein Server nicht als Hypervisor für VMs ausgewählt werden — das Feld *Virtueller Host* auf `Ja` zu setzen ist also der notwendige erste Schritt bei der Dokumentation einer Virtualisierungsumgebung.
- **Verwaltungsdienst zuordnen**: Das Feld *Verwaltungsdienst* verknüpft den Hypervisor mit seinem zentralen Management-System — z.B. einem vCenter Server bei VMware, einem System Center Virtual Machine Manager (SCVMM) bei Hyper-V oder einer Proxmox VE Instanz. Damit lässt sich per Report auswerten, welche Hosts von welchem Management-System verwaltet werden — wichtig bei Migrationen und Lizenzbewertungen.
- **Lizenzserver-Zuordnung**: Bei VMware-Umgebungen wird hier der vSphere-Lizenzserver referenziert. Damit lässt sich nachvollziehen, welche Hosts welche Lizenz verwenden — entscheidend bei Lizenz-Audits und beim Wechsel von Per-Socket- auf Per-Core-Lizenzierung.
- **Virtualisierungsbestand**: Über den Report Manager lässt sich auswerten, welche Server als virtuelle Hosts konfiguriert sind. Ein Report „alle Objekte mit Virtueller Host = Ja" liefert den gesamten Hypervisor-Bestand — die Grundlage für Kapazitätsplanung, Lifecycle-Management und Lizenzierung.
- **Cluster-Zuordnung**: In Kombination mit der Kategorie [Cluster-Mitgliedschaft](cluster-memberships.md) lässt sich dokumentieren, welche Hypervisoren zu welchem Cluster gehören. Der Verwaltungsdienst verknüpft dann den Cluster mit seiner Management-Ebene.

[![Virtueller Host](../../assets/images/de/grundlagen/kategorien/virtual-host.png)](../../assets/images/de/grundlagen/kategorien/virtual-host.png)

## Felder

### Virtueller Host

Gibt an, ob das Objekt als Hypervisor fungiert (`Ja` oder `Nein`). **Dieses Feld ist der zentrale Schalter**: Erst wenn es auf `Ja` steht, wird das Objekt in der Kategorie [Virtuelle Maschine](virtual-machine.md) anderer Objekte als möglicher Host angezeigt. Setze dieses Feld auf `Ja` für jeden physischen Server, auf dem ein Hypervisor (ESXi, KVM, Hyper-V, Proxmox VE) läuft.

### Lizenzserver

Verknüpfung zum Lizenzserver-Objekt, das die Virtualisierungslizenzen für diesen Host verwaltet. Bei VMware-Umgebungen ist das typischerweise der vSphere-Lizenzserver oder das vCenter, das die Lizenzen zuweist. Bei KVM- oder Hyper-V-Umgebungen ohne dedizierten Lizenzserver kann dieses Feld leer bleiben.

### Verwaltungsdienst

Verknüpfung zum Management-System, das diesen Hypervisor verwaltet — z.B. ein vCenter Server, ein SCVMM, eine Proxmox VE Instanz oder ein oVirt Engine Objekt. Dieses Feld stellt die Beziehung zur zentralen Verwaltungsebene her und ermöglicht Reports wie „alle Hosts, die von vCenter X verwaltet werden".

### Beschreibung

Freitext für zusätzliche Angaben: Hypervisor-Version (z.B. „ESXi 8.0 Update 2"), Besonderheiten in der Konfiguration (z.B. „GPU-Passthrough aktiviert"), Hinweise zur Lizenzierung oder zum geplanten Lifecycle.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_HOST` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Server, Blade Server, Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Virtueller Host** | `virtual_host` | Dialog (Auswahl) |
| **Lizenzserver** | `license_server` | Objekt-Browser (Verknüpfung) |
| **Verwaltungsdienst** | `administration_service` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__VIRTUAL_HOST",
        "data": {
            "virtual_host": 1,
            "license_server": 456,
            "administration_service": 789,
            "description": "ESXi 8.0 Update 2, Lizenz: vSphere Enterprise Plus"
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
        "category": "C__CATG__VIRTUAL_HOST"
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
        "category": "C__CATG__VIRTUAL_HOST",
        "entry": 1,
        "data": {
            "administration_service": 790,
            "description": "Migration auf neuen vCenter Server (ID 790) abgeschlossen, 2026-04."
        }
    },
    "id": 3
}
```
