---
title: "Kategorie: Speichergeräte"
description: Dokumentation der Kategorie Speichergeräte (Device) in i-doit
icon:
status:
lang: de
---

# Kategorie: Speichergeräte

Die Kategorie **Speichergeräte** (im englischen Interface als „Device" bezeichnet) dokumentiert die physischen Speichergeräte eines Objekts — Festplatten, SSDs, Bandlaufwerke und andere Datenträger auf Hardware-Ebene. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Servern mit mehreren physischen Festplatten in verschiedenen Einschüben.

Diese Kategorie bildet die **unterste Schicht der Speicherarchitektur** in i-doit ab: das physische Gerät selbst. Darüber liegen die Kategorien [Controller](controller.md) (der RAID-Controller oder HBA, an dem das Gerät angeschlossen ist), [RAID](raid.md) (der logische Verbund mehrerer Speichergeräte) und [Laufwerk](drive.md) (das logische Volume mit Dateisystem und Mountpoint). Erst wenn alle vier Ebenen gepflegt sind, entsteht eine lückenlose Dokumentation vom physischen Datenträger bis zum Dateisystem.

!!! tip "Abgrenzung zur Kategorie Laufwerk"
    Die Kategorie **Speichergeräte** beschreibt die physische Hardware — Modell, Seriennummer, Kapazität, Einbauplatz. Die Kategorie [Laufwerk](drive.md) beschreibt die logische Sicht — Mountpoint, Dateisystem, belegter Speicher. Eine physische SSD (Speichergerät) kann mehrere Partitionen haben, die als separate Laufwerke dokumentiert werden. Beide Kategorien ergänzen sich und sollten parallel gepflegt werden.

## Verwendung

Typische Anwendungsfälle:

- **Physisches Speicherinventar**: Erfasse Typ, Hersteller, Modell, Kapazität und Seriennummer jedes physischen Datenträgers. Zusammen mit den Kategorien [CPU](cpu.md) und [Speicher](memory.md) entsteht ein vollständiges Hardware-Profil. JDisc Discovery befüllt diese Kategorie automatisch mit den erkannten Geräten.
- **RAID-Zuordnung**: Über das Feld *Hardware-RAID-Gruppe* wird jedes Speichergerät seinem RAID-Verbund zugeordnet. So lässt sich bei einem Plattenausfall sofort nachvollziehen, welches RAID-Array betroffen ist und ob die Redundanz noch gegeben ist. Hotspare-Platten werden über das gleichnamige Feld gekennzeichnet.
- **Controller-Zuordnung**: Das Feld *Controller* verknüpft das Speichergerät mit dem [RAID-Controller](controller.md) oder HBA, an dem es physisch angeschlossen ist. Bei Servern mit mehreren Controllern (z.B. ein interner RAID-Controller und ein externer HBA für das SAN) ist diese Zuordnung entscheidend für die Fehleranalyse.
- **Bandlaufwerke dokumentieren**: Über die Felder *LTO-Typ* und *FC-Adresse* lassen sich auch Tape-Libraries und einzelne Bandlaufwerke dokumentieren — wichtig für Backup-Konzepte und die Zuordnung von Sicherungsmedien zu physischen Geräten.
- **Lifecycle und Garantie**: Seriennummer, Firmware-Version und Einbauplatz bilden die Grundlage für Garantieabwicklung und proaktiven Austausch. Ein Report „alle Speichergeräte mit Firmware älter als Version X" hilft bei der Planung von Firmware-Rollouts.

[![Speichergeräte](../../assets/images/de/grundlagen/kategorien/storage-device.png)](../../assets/images/de/grundlagen/kategorien/storage-device.png)

## Felder

### Typ

Der Gerätetyp des Speichermediums, z.B. `HDD`, `SSD`, `NVMe` oder `Tape`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Dieser Wert bestimmt die grundlegende Technologie und ist die Basis für Reports wie „alle Server, die noch HDDs statt SSDs verwenden".

### Bezeichnung

Der Name oder die Modellbezeichnung des Speichergeräts, z.B. `Samsung PM9A3 3.84TB` oder `Seagate Exos X20 18TB`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Hersteller

Der Gerätehersteller, z.B. `Samsung`, `Seagate`, `Western Digital` oder `HPE`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen.

### Modell

Die konkrete Modellreihe oder Produktbezeichnung, z.B. `PM9A3` oder `Exos X20`. Ermöglicht eine detailliertere Differenzierung als der Hersteller allein — insbesondere bei Firmware-Updates, die oft modellspezifisch sind.

### Speichereinheit

Die Maßeinheit der Kapazität, z.B. `MB`, `GB` oder `TB`. Wird zusammen mit dem Feld *Kapazität* verwendet.

### Kapazität

Die Brutto-Kapazität des Speichergeräts laut Hersteller. In Kombination mit der Speichereinheit ergibt sich die Gesamtgröße, z.B. `3.84` TB oder `18` TB. Dieser Wert ist die physische Rohkapazität — die nutzbare Kapazität nach RAID-Overhead wird in der Kategorie [RAID](raid.md) dokumentiert.

### Hotspare

Gibt an, ob das Speichergerät als Hotspare konfiguriert ist (`Ja` oder `Nein`). Ein Hotspare ist eine Ersatzplatte, die bei Ausfall eines RAID-Mitglieds automatisch einspringt. Die korrekte Dokumentation von Hotspares ist entscheidend für die Bewertung der RAID-Redundanz — ein RAID 5 ohne Hotspare ist bei einem zweiten Plattenausfall während des Rebuilds bereits ungeschützt.

### Anschluss

Der Anschlusstyp, über den das Speichergerät verbunden ist, z.B. `SAS`, `SATA`, `NVMe`, `FC` oder `USB`. Dialog+-Feld. Relevant für Performance-Bewertungen und bei Austauschplanungen — ein SAS-Controller kann keine SATA-Platte als Ersatz verwenden, wenn der Backplane-Anschluss nicht kompatibel ist.

### Controller

Verknüpfung zum [Controller](controller.md), an dem das Speichergerät physisch angeschlossen ist. Bei Servern mit mehreren RAID-Controllern oder HBAs zeigt dieses Feld, welcher Controller die Platte verwaltet — entscheidend bei Ausfallanalysen und Controller-Firmware-Updates.

### Hardware-RAID-Gruppe

Verknüpfung zur [RAID](raid.md)-Gruppe, der das Speichergerät zugeordnet ist. Definiert, welche physischen Platten gemeinsam ein RAID-Array bilden. Zusammen mit dem Hotspare-Feld ergibt sich ein vollständiges Bild der physischen RAID-Konfiguration.

### Seriennummer

Die Seriennummer des Speichergeräts laut Hersteller. Wird beim JDisc-Import automatisch ausgelesen. Bei Garantieansprüchen und beim gezielten Austausch in einem RAID-Verbund mit identischen Platten ist die Seriennummer das einzige eindeutige Identifikationsmerkmal.

### LTO-Typ

Der LTO-Generationstyp bei Bandlaufwerken, z.B. `LTO-8` oder `LTO-9`. Dialog+-Feld. Nur relevant für Tape-Libraries und einzelne Bandlaufwerke. Die LTO-Generation bestimmt die Kapazität und die Rückwärtskompatibilität zu älteren Bändern.

### FC-Adresse

Die Fibre-Channel-Adresse des Speichergeräts, relevant bei SAN-angebundenen Geräten und FC-Tape-Libraries. Format typischerweise als WWN (World Wide Name) oder FC-Port-Adresse.

### Firmware

Die aktuelle Firmware-Version des Speichergeräts. Relevant für Kompatibilitätsprüfungen und Updates — insbesondere bei SSDs, wo Firmware-Updates kritische Fehler beheben können. Per Report lassen sich Geräte mit veralteter Firmware gezielt identifizieren.

### Slot

Der physische Einbauplatz oder Slot-Nummer im Server oder Storage-Gehäuse, z.B. `Slot 3` oder `Bay 12`. Diese Information ist beim physischen Austausch einer defekten Platte unverzichtbar — der Techniker vor Ort muss wissen, welche Platte im Gehäuse gezogen werden soll.

### Beschreibung

Freitext für zusätzliche Angaben: Performance-Klasse (z.B. „SAS 12 Gbit/s, 15k RPM"), Garantieinformationen, Einsatzzweck (z.B. „dediziert für Datenbanklog") oder Hinweise zur Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__STORAGE_DEVICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Bezeichnung** | `title` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `model` | Dialog+ (erweiterbare Auswahl) |
| **Speichereinheit** | `unit` | Dialog (Auswahl) |
| **Kapazität** | `capacity` | Dezimalzahl |
| **Hotspare** | `hotspare` | Dialog (Auswahl) |
| **Anschluss** | `connected` | Dialog+ (erweiterbare Auswahl) |
| **Controller** | `controller` | Dialog (Auswahl) |
| **Hardware-RAID-Gruppe** | `raid_group` | Dialog (Auswahl) |
| **Seriennummer** | `serial` | Text |
| **LTO-Typ** | `lto_type` | Dialog+ (erweiterbare Auswahl) |
| **FC-Adresse** | `fc_address` | Text |
| **Firmware** | `firmware` | Text |
| **Slot** | `slot` | Text |
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
        "category": "C__CATG__STORAGE_DEVICE",
        "data": {
            "type": "SSD",
            "title": "Samsung PM9A3 3.84TB",
            "manufacturer": "Samsung",
            "model": "PM9A3",
            "unit": 3,
            "capacity": 3840,
            "hotspare": 0,
            "connected": "NVMe",
            "serial": "S6EWNX0T123456",
            "firmware": "GDC5602Q",
            "slot": "Slot 1",
            "description": "NVMe U.2, PCIe 4.0 x4, DWPD 1.0"
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
        "category": "C__CATG__STORAGE_DEVICE"
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
        "category": "C__CATG__STORAGE_DEVICE",
        "entry": 32,
        "data": {
            "firmware": "GDC5802Q",
            "description": "Firmware-Update 2026-04: GDC5602Q auf GDC5802Q aktualisiert."
        }
    },
    "id": 3
}
```
