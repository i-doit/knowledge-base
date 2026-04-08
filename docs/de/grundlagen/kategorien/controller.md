---
title: "Kategorie: Controller"
description: Dokumentation der Kategorie Controller in i-doit
icon:
status:
lang: de
---

# Kategorie: Controller

Die Kategorie **Controller** dokumentiert die in einem Server oder Client verbauten Storage- und RAID-Controller. Sie ist eine **Multi-Value-Kategorie** -- ein Server kann mehrere Controller besitzen, z.B. einen onboard RAID-Controller und eine zusätzliche PCIe-RAID-Karte.

Controller bilden die Schnittstelle zwischen dem Betriebssystem und den physischen Laufwerken. Ohne korrekt dokumentierte Controller fehlt ein entscheidendes Glied in der Kette von der Applikation über das Dateisystem und das RAID-Array bis hin zur einzelnen Festplatte. Besonders bei Storage-Troubleshooting ist es wichtig zu wissen, welcher Controller welche Laufwerke ansteuert und welche Firmware-Version im Einsatz ist.

!!! info "Controller vs. HBA"
    Die Kategorie Controller ist für **lokale** Storage-Controller gedacht -- RAID-Controller, SATA/SAS-Controller, NVMe-Controller. Für Fibre-Channel-Adapter, die Server mit einem SAN verbinden, gibt es die separate Kategorie [Host Bus Adapter (HBA)](hba.md). Die Unterscheidung ist wichtig, weil HBAs zusätzliche FC-spezifische Felder wie WWN und FC-Ports mitbringen.

## Verwendung

Typische Anwendungsfälle:

- **Storage-Troubleshooting**: Wenn ein RAID-Array degradiert ist, zeigt die Controller-Kategorie sofort, welcher Controller betroffen ist, welcher Hersteller und welches Modell verbaut ist, und welche Firmware läuft. Das beschleunigt die Fehleranalyse erheblich, weil der Techniker nicht erst den Server öffnen oder sich remote auf die Controller-Management-Oberfläche schalten muss.
- **Firmware-Management**: RAID-Controller-Firmware-Updates sind kritische Wartungsarbeiten. Über den Report Manager lässt sich auswerten, welche Server welche Firmware-Version verwenden -- so wird kein Controller beim Rollout eines Sicherheits-Patches vergessen.
- **Hardware-Lifecycle und Ersatzteilplanung**: Wenn ein bestimmtes Controller-Modell abgekündigt wird, zeigt ein Report sofort, wie viele Server betroffen sind. Das hilft bei der Budgetplanung für Ersatzbeschaffungen.
- **RAID-Dokumentation**: In Kombination mit der Kategorie [Laufwerk](drive.md) entsteht ein vollständiges Bild der Storage-Konfiguration: welcher Controller steuert welches RAID-Array, und welche Laufwerke gehören dazu.

[![Controller](../../assets/images/de/grundlagen/kategorien/controller.png)](../../assets/images/de/grundlagen/kategorien/controller.png)

## Felder

### Bezeichnung

Der Name oder die Bezeichnung des Controllers, z.B. `PERC H755` oder `MegaRAID 9460-16i`. Dieser Wert erscheint in der Listenansicht und dient der schnellen Identifikation.

### Typ

Die Art des Controllers, z.B. `RAID`, `SATA`, `SAS`, `NVMe` oder `SCSI`. Dialog+-Feld -- eigene Typen lassen sich ergänzen. Der Typ hilft bei der Filterung in Reports, z.B. um alle Server mit RAID-Controllern zu finden.

### Hersteller

Der Hersteller des Controllers, z.B. `Broadcom (LSI)`, `Dell (PERC)`, `HPE (Smart Array)` oder `Microchip (Adaptec)`. Dialog+-Feld mit erweiterbaren Werten. Wichtig für die Zuordnung zu Support-Verträgen und Firmware-Download-Portalen.

### Modell

Die genaue Modellbezeichnung, z.B. `MegaRAID 9460-16i` oder `Smart Array P408i-a`. Dialog+-Feld. Zusammen mit dem Hersteller ergibt sich eine eindeutige Identifikation für Ersatzteilbestellungen und Kompatibilitätsprüfungen.

### Firmware

Die aktuell installierte Firmware-Version, z.B. `51.19.0-4296`. Textfeld -- trage hier die exakte Versions-Nummer ein. Dieses Feld ist entscheidend für Firmware-Audits: Ein Report über alle Controller mit einer bestimmten Firmware-Version zeigt sofort, welche Server ein Update benötigen.

!!! warning "Firmware aktuell halten"
    Veraltete Controller-Firmware kann zu Datenverlust, Performance-Problemen oder Sicherheitslücken führen. Nutze das Firmware-Feld konsequent und gleiche es regelmäßig mit den Hersteller-Release-Notes ab. Ein Report, der alle Controller mit Firmware-Version < X filtert, ist ein einfaches aber effektives Mittel zur Risikosteuerung.

### Beschreibung

Freitext für zusätzliche Angaben: RAID-Level-Konfiguration, Cache-Größe (z.B. „2 GB FBWC"), Battery-Backup-Status, Besonderheiten bei der Konfiguration oder Links zur Hersteller-Dokumentation.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CONTROLLER` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `model` | Dialog+ (erweiterbare Auswahl) |
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
        "category": "C__CATG__CONTROLLER",
        "data": {
            "title": "Dell PERC H755",
            "type": "RAID",
            "manufacturer": "Dell",
            "model": "PERC H755",
            "firmware": "51.19.0-4296",
            "description": "8 GB Cache, Battery-Backup, RAID 10 über 8x SAS-SSDs"
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
        "category": "C__CATG__CONTROLLER"
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
        "category": "C__CATG__CONTROLLER",
        "entry": 7,
        "data": {
            "firmware": "51.20.0-4305",
            "description": "2026-04: Firmware-Update auf 51.20.0-4305 wegen CVE-2026-1234"
        }
    },
    "id": 3
}
```
