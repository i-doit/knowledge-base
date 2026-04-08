---
title: "Kategorie: RAID-Array"
description: Dokumentation der Kategorie RAID-Array in i-doit
icon:
status:
lang: de
---

# Kategorie: RAID-Array

Die Kategorie **RAID-Array** dokumentiert die RAID-Konfiguration eines Objekts — also wie physische Laufwerke zu logischen Verbünden zusammengefasst sind. Sie ist eine **Multi-Value-Kategorie**, da ein Server durchaus mehrere RAID-Arrays besitzen kann: z.B. ein RAID-1 für das Betriebssystem und ein RAID-5 für Nutzdaten.

!!! info "Zusammenspiel mit Laufwerk und Controller"
    Die RAID-Kategorie verknüpft Informationen aus zwei weiteren Kategorien: Die physischen Festplatten oder SSDs werden in der Kategorie [Laufwerk](drive.md) dokumentiert, der RAID-Controller in der Kategorie [Controller](controller.md). Das RAID-Array referenziert beide und fügt die RAID-spezifischen Informationen (Level, Kapazität) hinzu. Erst durch dieses Zusammenspiel entsteht ein vollständiges Bild der Storage-Architektur.

## Warum diese Kategorie wichtig ist

Ein RAID-Array ist kein bloßes Konfigurationsdetail — es bestimmt die Verfügbarkeit, Performance und nutzbare Kapazität des Speichersystems. Fällt eine Platte in einem RAID-5 aus, bleibt das System online — aber nur wenn dokumentiert ist, welche Platten zum Array gehören und welcher Level konfiguriert ist, kann der Administrator schnell und korrekt reagieren. Ohne diese Dokumentation beginnt im Ernstfall eine zeitraubende Analyse, die den Rebuild verzögert und das Risiko eines Datenverlusts erhöht.

## Verwendung

Typische Anwendungsfälle:

- **Storage-Dokumentation**: Für jeden Server wird festgehalten, welche RAID-Level konfiguriert sind, welche physischen Laufwerke zum Array gehören und welche nutzbare Kapazität resultiert. Das ist die Grundlage für jedes Storage-Konzept.
- **Rebuild-Planung bei Plattenausfall**: Fällt ein Laufwerk aus, zeigt die RAID-Kategorie sofort, zu welchem Array es gehört, welcher RAID-Level konfiguriert ist und ob noch Redundanz vorhanden ist. Ein RAID-5 mit einer ausgefallenen Platte hat keine Redundanz mehr — sofortiges Handeln ist nötig.
- **Kapazitätsplanung**: Reports über RAID-Arrays zeigen, wo die nutzbare Kapazität knapp wird. Bei einem RAID-6 mit acht 4-TB-Platten stehen nur 24 TB netto zur Verfügung — diese Information muss nicht jedes Mal neu berechnet werden, wenn sie in der CMDB steht.
- **Migration und Refresh**: Bei einem Storage-Refresh lässt sich über die RAID-Kategorie auswerten, welche Server noch auf ältere RAID-Level (z.B. RAID-5 statt RAID-6) oder kleinere Plattengrößen setzen und daher priorisiert werden sollten.

[![RAID-Array](../../assets/images/de/grundlagen/kategorien/raid.png)](../../assets/images/de/grundlagen/kategorien/raid.png)

## Felder

### Typ

Der RAID-Typ — typischerweise `Hardware-RAID` oder `Software-RAID`. Diese Unterscheidung ist betriebsrelevant: Bei einem Hardware-RAID übernimmt der physische Controller die Berechnung, bei Software-RAID die CPU des Hosts. Im Fehlerfall unterscheiden sich die Recovery-Verfahren grundlegend.

### Bezeichnung

Ein frei wählbarer Name für das Array, z.B. `OS-Mirror` oder `Data-Array-01`. Dieser Wert erscheint in der Listenansicht und in Reports. Aussagekräftige Namen erleichtern die Zuordnung erheblich — insbesondere wenn ein Server mehrere Arrays besitzt.

### RAID-Level

Das konfigurierte RAID-Level: `RAID 0` (Striping, keine Redundanz), `RAID 1` (Mirroring), `RAID 5` (Striping mit einfacher Parität), `RAID 6` (doppelte Parität) oder `RAID 10` (Kombination aus Mirroring und Striping). Die Wahl des Levels bestimmt das Verhältnis zwischen Performance, Kapazität und Ausfallsicherheit.

!!! warning "RAID ist kein Backup"
    RAID schützt vor dem Ausfall einzelner Laufwerke, aber nicht vor Datenverlust durch versehentliches Löschen, Ransomware oder Controller-Defekte. Die Dokumentation des RAID-Levels ersetzt keine Backup-Strategie — stelle sicher, dass parallel auch die Kategorie [Backup](backup.md) gepflegt ist.

### Controller

Referenz auf den RAID-Controller, der dieses Array verwaltet. Der Wert wird aus den Einträgen der Kategorie [Controller](controller.md) des gleichen Objekts übernommen. Bei Hardware-RAID ist dies der physische Controller (z.B. Dell PERC H755), bei Software-RAID bleibt das Feld leer oder verweist auf einen virtuellen Controller.

### Verbundene Geräte

Die physischen Laufwerke, die Mitglieder dieses RAID-Arrays sind. Diese Verknüpfung stellt den Bezug zur Kategorie [Laufwerk](drive.md) her. Bei einem Plattenausfall zeigt dieses Feld sofort, welche Disk betroffen ist und welche weiteren Disks zum gleichen Array gehören.

### Gesamtkapazität

Die Bruttokapazität aller Mitglieds-Laufwerke zusammen — also die Summe der Einzelkapazitäten vor Anwendung des RAID-Levels. Dieser Wert wird aus den verbundenen Geräten berechnet.

### RAID-Kapazität

Die nutzbare Nettokapazität nach Anwendung des RAID-Levels. Bei vier 4-TB-Platten im RAID-5 sind das 12 TB, im RAID-6 nur 8 TB. Dieser Wert ist die relevante Größe für die Kapazitätsplanung.

### Beschreibung

Freitext für zusätzliche Details: Stripe-Größe, Cache-Policy (Write-Back vs. Write-Through), geplante Erweiterungen, bekannte Einschränkungen oder Hinweise zum Recovery-Verfahren.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__RAID` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Storage-System, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `raid_type` | Dialog (Auswahl) |
| **Bezeichnung** | `title` | Text |
| **RAID-Level** | `raid_level` | Dialog (Auswahl) |
| **Controller** | `controller` | Dialog (Referenz auf Controller-Kategorie) |
| **Verbundene Geräte** | `storages` | Dialog (Referenz auf Laufwerke) |
| **Gesamtkapazität** | `full_capacity` | Text (berechnet) |
| **RAID-Kapazität** | `capacity` | Text (berechnet) |
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
        "category": "C__CATG__RAID",
        "data": {
            "raid_type": 1,
            "title": "OS-Mirror",
            "raid_level": 2,
            "controller": 7,
            "storages": [101, 102],
            "description": "RAID-1 für Betriebssystem, 2x 480 GB SSD, Write-Through-Cache"
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
        "category": "C__CATG__RAID"
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
        "category": "C__CATG__RAID",
        "entry": 3,
        "data": {
            "description": "2026-03: Disk 3 (Slot 2) getauscht nach SMART-Warnung, Rebuild abgeschlossen."
        }
    },
    "id": 3
}
```
