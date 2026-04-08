---
title: "Kategorie: Grafikkarte"
description: Dokumentation der Kategorie Grafikkarte in i-doit
icon:
status:
lang: de
---

# Kategorie: Grafikkarte

Die Kategorie **Grafikkarte** dokumentiert die verbauten Grafikadapter eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Workstations mit mehreren GPUs oder Servern mit dedizierter Compute-Karte. Besonders relevant ist diese Kategorie für CAD-Arbeitsplätze, VDI-Hosts und GPU-Computing-Server, bei denen die Grafikkarte nicht nur Bildausgabe leistet, sondern eine leistungskritische Komponente ist.

!!! tip "Automatische Erkennung mit JDisc"
    JDisc kann verbaute Grafikkarten automatisch erkennen und in i-doit importieren — inklusive Hersteller, Modell und Speichergröße. Das spart bei großen Rollouts erheblichen Pflegeaufwand. Treiberversionen und Firmware solltest du nach dem Import manuell prüfen und ergänzen, da diese nicht immer zuverlässig erkannt werden.

## Verwendung

Typische Anwendungsfälle:

- **CAD- und Design-Arbeitsplätze**: Erfasse Hersteller, Modell, Speicher und Treiberversion jeder verbauten Grafikkarte. Zusammen mit den Kategorien [CPU](cpu.md) und Speicher entsteht ein vollständiges Hardware-Profil. Bei CAD-Workstations ist die GPU oft die teuerste Einzelkomponente — ihre Dokumentation ist für Beschaffung, Garantie und Lifecycle-Planung unverzichtbar.
- **GPU-Computing und KI**: In HPC-Clustern und KI-Umgebungen lässt sich über den Report Manager auswerten, welche Server welche GPU-Modelle und VRAM-Größen verwenden. Ein Report wie „Alle Server mit weniger als 24 GB VRAM" hilft bei der Kapazitätsplanung, wenn neue ML-Workloads mehr Speicher erfordern.
- **VDI-Umgebungen**: Bei Virtual-Desktop-Infrastrukturen dokumentiert die Kategorie die physischen GPUs der Hosts, die per GPU-Passthrough oder vGPU an virtuelle Desktops durchgereicht werden. Die Speichergröße bestimmt, wie viele vGPU-Profile gleichzeitig auf einem Host laufen können.
- **Treiberkompatibilität und Patch-Management**: Die Treiberversion ist entscheidend für Stabilität und Sicherheit. Ein Report über alle Systeme mit einer bestimmten Treiberversion zeigt sofort, welche Maschinen von einem bekannten Bug oder einer Sicherheitslücke betroffen sind und ein Update brauchen.

[![Grafikkarte](../../assets/images/de/grundlagen/kategorien/graphic.png)](../../assets/images/de/grundlagen/kategorien/graphic.png)

## Felder

### Bezeichnung

Der Name oder die Modellbezeichnung der Grafikkarte, z.B. `NVIDIA RTX A4000` oder `AMD Radeon Pro W6800`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Hersteller

Der Hersteller der Grafikkarte, typischerweise `NVIDIA`, `AMD` oder `Intel`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen.

### Speicher und Einheit

Der verfügbare Grafikspeicher (VRAM) der Karte. Die Einheit wird separat als `MB` oder `GB` angegeben. Für die Dokumentation empfiehlt sich der Wert laut Herstellerdatenblatt. **Der VRAM ist oft der limitierende Faktor** — bei CAD-Software bestimmt er die maximale Modellkomplexität, bei KI-Workloads die Batch-Größe und Modellgröße. Ein Report über den GPU-Speicher hilft, Systeme zu identifizieren, die für bestimmte Anforderungen nicht mehr ausreichen.

### Treiber/Firmware

Die installierte Treiberversion oder Firmware-Version der Grafikkarte, z.B. `535.129.03` (NVIDIA) oder `23.20.1` (AMD). **Dieses Feld ist kritisch für die Kompatibilitätsverfolgung**: Bestimmte Anwendungen erfordern Mindestversionen des GPU-Treibers, und Sicherheitsupdates betreffen häufig spezifische Versionsbereiche. Pflege dieses Feld bei jedem Treiberupdate, damit der aktuelle Stand jederzeit nachvollziehbar ist — besonders in regulierten Umgebungen oder bei zertifizierten CAD-Arbeitsplätzen.

### Beschreibung

Freitext für zusätzliche Angaben: GPU-Architektur, TDP, Schnittstelle (PCIe x16), Anzahl der Displayausgänge, CUDA-Kerne oder Besonderheiten in der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__GRAPHIC` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Speicher** | `memory` | Dezimalzahl |
| **Einheit** | `unit` | Dialog (Auswahl) |
| **Treiber/Firmware** | `firmware` | Text |
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
        "category": "C__CATG__GRAPHIC",
        "data": {
            "title": "NVIDIA RTX A4000",
            "manufacturer": "NVIDIA",
            "memory": 16,
            "unit": 2,
            "firmware": "535.129.03",
            "description": "16 GB GDDR6, PCIe 4.0 x16, 6144 CUDA-Kerne, TDP 140 W"
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
        "category": "C__CATG__GRAPHIC"
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
        "category": "C__CATG__GRAPHIC",
        "entry": 32,
        "data": {
            "firmware": "546.33",
            "description": "Treiberupdate 2025-06: Aktualisierung auf 546.33 für CUDA 12.3 Support."
        }
    },
    "id": 3
}
```
