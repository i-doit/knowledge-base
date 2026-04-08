---
title: "Kategorie: Rechenressourcen"
description: Dokumentation der Kategorie Rechenressourcen in i-doit
icon:
status:
lang: de
---

# Kategorie: Rechenressourcen

Die Kategorie **Rechenressourcen** dokumentiert die einer virtuellen Maschine oder Anwendung zugewiesenen Compute-Ressourcen: CPU-Frequenz, RAM, Festplattenkapazität und Netzwerkbandbreite. Sie ist eine **Single-Value-Kategorie** – pro Objekt existiert genau ein Eintrag, der die zugesicherten oder konfigurierten Ressourcen zusammenfasst.

!!! info "Nicht zu verwechseln mit physischer Hardware"
    Die Kategorie Rechenressourcen beschreibt die **zugewiesenen** Ressourcen, nicht die physisch verbaute Hardware. Die physischen CPUs eines Hosts werden in der Kategorie [CPU](cpu.md) dokumentiert, der physische Arbeitsspeicher in der Kategorie Speicher. Rechenressourcen dagegen bilden ab, was eine VM oder Anwendung **tatsächlich nutzen darf** — also das, was im Hypervisor oder Orchestrator konfiguriert ist.

## Verwendung

Typische Anwendungsfälle:

- **Kapazitätsplanung in virtualisierten Umgebungen**: Vergleiche die Summe der zugewiesenen Rechenressourcen aller Gastsysteme mit den physischen Ressourcen des Hosts. Ein ESXi-Host mit 128 GB RAM, auf dem VMs mit insgesamt 192 GB konfiguriert sind, ist überbucht — das ist gewollt, muss aber dokumentiert und überwacht werden. In Kombination mit der Kategorie [Gastsysteme](guest-systems.md) am Host-Objekt entsteht ein vollständiges Bild der Ressourcenverteilung.
- **VM-Sizing und Rightsizing**: Über den Report Manager lassen sich VMs identifizieren, die ungewöhnlich viel oder wenig Ressourcen zugewiesen haben. Eine VM mit 32 GB RAM, die konstant nur 4 GB nutzt, verschwendet Kapazität. Die dokumentierten Rechenressourcen liefern die Planungsgrundlage für Rightsizing-Projekte.
- **Kosten- und Lizenzrechnung**: In Cloud- und Hosting-Umgebungen bestimmen die zugewiesenen Ressourcen direkt die Kosten. Ein Report, der alle VMs eines Mandanten mit ihren Rechenressourcen auflistet, ist die Basis für die interne Leistungsverrechnung.
- **Migrations- und Change-Planung**: Vor einer VM-Migration zeigt die Kategorie sofort, welche Ressourcen auf dem Zielhost bereitstehen müssen. In Kombination mit der Kategorie [Virtuelle Maschine](virtual-machine--root.md) ist auch die aktuelle Hostzuordnung ersichtlich.

[![Rechenressourcen](../../assets/images/de/grundlagen/kategorien/computing-resources.png)](../../assets/images/de/grundlagen/kategorien/computing-resources.png)

## Felder

### RAM

Die Menge des zugewiesenen Arbeitsspeichers. Bei virtuellen Maschinen entspricht dieser Wert der im Hypervisor konfigurierten RAM-Größe, z.B. `8` GB oder `16384` MB. In Kombination mit dem Feld **Speichereinheit** ergibt sich die vollständige Angabe.

### Speichereinheit

Die Einheit für das RAM-Feld — üblicherweise `GB` oder `MB`. Achte darauf, innerhalb deiner CMDB einheitlich zu bleiben, da Reports sonst Äpfel mit Birnen vergleichen.

### CPU-Frequenz

Die zugewiesene oder garantierte Prozessorfrequenz. Bei virtuellen Maschinen ist dies die im Hypervisor konfigurierte CPU-Leistung, z.B. `2.4` GHz. Zusammen mit der **Frequenz-Einheit** ergibt sich der vollständige Wert.

### CPU-Frequenz-Einheit

Die Einheit für die CPU-Frequenz — `MHz` oder `GHz`.

### Festplattenkapazität

Der zugewiesene Festplattenspeicher, z.B. `100` GB für die Systempartition einer VM. Dieser Wert bildet die konfigurierte Disk-Größe ab, nicht den tatsächlich belegten Speicherplatz.

### Festplattenkapazität-Einheit

Die Einheit für das Festplattenfeld — typischerweise `GB` oder `TB`.

### Netzwerkbandbreite

Die zugewiesene oder garantierte Netzwerkbandbreite, z.B. `1` Gbit/s. In virtualisierten Umgebungen mit Quality-of-Service-Regeln dokumentiert dieses Feld die reservierte Bandbreite pro VM.

### Netzwerkbandbreite-Einheit

Die Einheit für die Netzwerkbandbreite — z.B. `Mbit/s` oder `Gbit/s`.

### Beschreibung

Freitext für zusätzliche Angaben: Reservierungen vs. Limits, Burst-Konfigurationen, CPU-Shares oder Anmerkungen zur Ressourcen-Policy.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__COMPUTING_RESOURCES` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Anwendung, Betriebssystem, Service u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **RAM** | `ram` | Dezimalzahl |
| **Speichereinheit** | `ram_unit` | Dialog (Auswahl) |
| **CPU-Frequenz** | `cpu` | Dezimalzahl |
| **CPU-Frequenz-Einheit** | `cpu_unit` | Dialog (Auswahl) |
| **Festplattenkapazität** | `disc_space` | Dezimalzahl |
| **Festplattenkapazität-Einheit** | `disc_space_unit` | Dialog (Auswahl) |
| **Netzwerkbandbreite** | `network_bandwidth` | Dezimalzahl |
| **Netzwerkbandbreite-Einheit** | `network_bandwidth_unit` | Dialog (Auswahl) |
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
        "category": "C__CATG__COMPUTING_RESOURCES",
        "data": {
            "ram": 16,
            "ram_unit": 3,
            "cpu": 2.4,
            "cpu_unit": 3,
            "disc_space": 100,
            "disc_space_unit": 3,
            "network_bandwidth": 1,
            "network_bandwidth_unit": 2,
            "description": "VM-Sizing laut Kapazitätsplanung Q1/2026, 4 vCPUs à 2.4 GHz"
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
        "category": "C__CATG__COMPUTING_RESOURCES"
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
        "category": "C__CATG__COMPUTING_RESOURCES",
        "entry": 1,
        "data": {
            "ram": 32,
            "description": "Upgrade 2026-04: RAM von 16 auf 32 GB erhöht wegen Lastspitzen."
        }
    },
    "id": 3
}
```
