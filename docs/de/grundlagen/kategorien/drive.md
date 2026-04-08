---
title: "Kategorie: Laufwerk"
description: Dokumentation der Kategorie Laufwerk in i-doit
icon:
status:
lang: de
---

# Kategorie: Laufwerk

Die Kategorie **Laufwerk** dokumentiert die Speicherlaufwerke eines Objekts — von der physischen Festplatte über SSDs bis hin zu logischen Volumes. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Servern mit mehreren Festplatten, SSDs oder logischen Volumes. Über die Verknüpfungsfelder zu RAID-Gruppen und logischen Geräten bildet diese Kategorie die Brücke zwischen der physischen und der logischen Speicherschicht.

!!! tip "Zusammenspiel mit der RAID-Kategorie"
    Physische Laufwerke werden über die Felder *Software-RAID-Gruppe* und *Auf Gerät (RAID-Array)* mit der Kategorie **RAID** verknüpft. Erst wenn diese Zuordnung gepflegt ist, lässt sich nachvollziehen, welche physischen Platten zu welchem RAID-Verbund gehören — entscheidend für die Ausfallanalyse und den gezielten Austausch defekter Laufwerke.

## Verwendung

Typische Anwendungsfälle:

- **Speicherhardware inventarisieren**: Erfasse Typ, Kapazität, Seriennummer und Firmware jeder Festplatte, SSD oder NVMe. Zusammen mit den Kategorien [CPU](cpu.md) und [Speicher](memory.md) entsteht ein vollständiges Hardware-Profil. JDisc Discovery befüllt diese Kategorie automatisch mit den erkannten Laufwerksdaten.
- **Mountpoints und Laufwerksbuchstaben dokumentieren**: Der Mountpoint zeigt, welches Laufwerk welche Funktion hat: `C:` ist das Windows-Systemlaufwerk, `/var` unter Linux enthält Logdateien und Datenbanken, `/home` die Benutzerdaten. Diese Information ist im Störungsfall entscheidend — wenn `/var` vollläuft, muss genau dieses Laufwerk erweitert werden, nicht irgendein anderes.
- **Kapazitätsüberwachung**: Die Felder *Freier Speicher* und *Belegter Speicher* ermöglichen gezielte Reports — z.B. „alle Laufwerke mit weniger als 10% freiem Speicher" oder „alle Server, deren Systemlaufwerk zu über 80% belegt ist". Diese Reports sind die Grundlage für proaktive Kapazitätsplanung, bevor ein Laufwerk tatsächlich volläuft.
- **RAID- und LVM-Zuordnung**: Über die Verknüpfungsfelder lassen sich Laufwerke einem Software-RAID-Verbund, einem physischen Controller oder einem logischen Volume zuordnen. So entsteht eine nachvollziehbare Kette von der physischen Platte über das RAID-Array bis zum logischen Volume, auf dem das Dateisystem liegt.
- **Lifecycle und Austausch**: Beim Tausch einer Festplatte den alten Eintrag archivieren und einen neuen anlegen. Seriennummer und Firmware bleiben so lückenlos nachvollziehbar — wichtig bei Garantieansprüchen und für die Dokumentation von RAID-Rebuilds.

[![Laufwerk](../../assets/images/de/grundlagen/kategorien/drive.png)](../../assets/images/de/grundlagen/kategorien/drive.png)

## Felder

### Laufwerksbuchstabe/Mountpoint

Der Mountpoint oder Laufwerksbuchstabe, unter dem das Laufwerk im Betriebssystem erreichbar ist, z.B. `C:`, `D:` oder `/var`. Bei Linux-Systemen wird hier der Mountpoint eingetragen, bei Windows der Laufwerksbuchstabe. **Dieses Feld bestimmt die funktionale Zuordnung des Laufwerks**: `C:` bzw. `/` ist das Betriebssystem, `/var` enthält Logdateien und Datenbankdaten, `/home` die Benutzerdateien. Im Störungsfall — etwa wenn ein Dateisystem vollläuft — zeigt dieses Feld sofort, welches physische oder logische Laufwerk betroffen ist und erweitert werden muss.

### Bezeichnung

Der Name oder die Modellbezeichnung des Laufwerks, z.B. `Samsung 990 PRO 2TB` oder `WD Ultrastar DC HC560`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Bei JDisc-Imports wird hier die vom Betriebssystem gemeldete Laufwerksbezeichnung eingetragen.

### Systemlaufwerk

Gibt an, ob es sich um das Systemlaufwerk handelt (`Ja` oder `Nein`). **Dieses Flag kennzeichnet das Boot-Laufwerk** — also das Laufwerk, auf dem das Betriebssystem installiert ist und von dem der Server startet. Das ist besonders bei Servern mit mehreren Laufwerken wichtig: Bei einem Ausfall des Systemlaufwerks fällt der gesamte Server aus, während ein Datenlaufwerk ggf. durch ein Spare ersetzt werden kann. In Reports lässt sich gezielt nach Systemlaufwerken filtern, um z.B. deren Belegung oder Alter zu überwachen.

### Dateisystem

Das auf dem Laufwerk verwendete Dateisystem, z.B. `NTFS`, `ext4`, `XFS` oder `ZFS`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Das Dateisystem bestimmt Leistungscharakteristiken und maximale Dateigrößen — `XFS` ist z.B. bei großen Dateien und Datenbanken oft die bessere Wahl als `ext4`.

### Kapazität und Einheit

Die Gesamtkapazität des Laufwerks. Die Einheit wird separat als `MB`, `GB` oder `TB` angegeben. Zusammen mit *Freier Speicher* und *Belegter Speicher* ergibt sich ein vollständiges Bild der Auslastung. Für die Kapazitätsplanung empfiehlt sich ein Report, der alle Laufwerke mit einer Belegung über 80% auflistet.

### Seriennummer

Die Seriennummer des Laufwerks laut Hersteller. Wird beim JDisc-Import automatisch ausgelesen. Wichtig für Garantieansprüche und zur eindeutigen Identifikation beim Austausch — gerade bei RAID-Verbünden mit mehreren identischen Platten ist die Seriennummer das einzige Unterscheidungsmerkmal.

### Typ

Der Laufwerkstyp, z.B. HDD, SSD oder NVMe. Ermöglicht die Unterscheidung verschiedener Speichertechnologien in Reports und Filtern. Ein Report „alle Server, die noch HDDs als Systemlaufwerk verwenden" hilft bei der Planung eines SSD-Rollouts.

### Freier Speicher

Der aktuell freie Speicherplatz auf dem Laufwerk. Wird typischerweise durch automatische Inventarisierung (JDisc) befüllt und bei jedem Scan aktualisiert. **Dieses Feld ist die Grundlage für proaktive Kapazitätsüberwachung**: Ein Report „alle Laufwerke mit weniger als 10 GB freiem Speicher" warnt rechtzeitig, bevor ein Dateisystem vollläuft und den Dienst beeinträchtigt.

### Belegter Speicher

Der aktuell belegte Speicherplatz auf dem Laufwerk. Zusammen mit dem freien Speicher und der Gesamtkapazität ergibt sich ein vollständiges Bild der Auslastung. Über die Änderungshistorie lässt sich zudem nachvollziehen, wie schnell der belegte Speicher wächst — hilfreich für die Prognose, wann eine Erweiterung notwendig wird.

### Firmware

Die Firmware-Version des Laufwerks. Relevant für Kompatibilitätsprüfungen und Updates — insbesondere bei SSDs, wo Firmware-Updates kritische Fehler beheben können, die zu Datenverlust führen. Per Report lassen sich Geräte mit veralteter Laufwerks-Firmware gezielt identifizieren.

### Software-RAID-Gruppe

Verknüpft das Laufwerk mit einer Software-RAID-Gruppe. Zeigt an, zu welchem RAID-Verbund das Laufwerk gehört. Diese Verknüpfung ist die Grundlage dafür, bei einem Plattenausfall sofort zu sehen, welcher RAID-Verbund betroffen ist und ob Redundanz noch gegeben ist.

### Auf Gerät

Verknüpfung zum physischen Gerät (Controller oder Storage-System), an dem das Laufwerk angeschlossen ist. Damit lässt sich nachvollziehen, welcher RAID-Controller oder welches SAN die Platte verwaltet.

### Auf Gerät (RAID-Array)

Verknüpfung zum RAID-Array, dem das Laufwerk zugeordnet ist. Zusammen mit dem Feld *Software-RAID-Gruppe* entsteht eine vollständige Dokumentation der Speicherarchitektur: physische Platte → RAID-Array → logisches Volume → Dateisystem.

### Auf Gerät (Logisches Gerät)

Verknüpfung zu einem logischen Volume oder einer LVM-Struktur, der das Laufwerk zugeordnet ist. Besonders relevant in Linux-Umgebungen, wo LVM-Volumes flexibel über mehrere physische Platten verteilt werden.

### Beschreibung

Freitext für zusätzliche Angaben: Einbauplatz (z.B. „Slot 3, Backplane A"), Garantieinformationen, Performance-Klasse (z.B. „SAS 12 Gbit/s, 15k RPM"), Besonderheiten in der Konfiguration oder Hinweise zum Einsatzzweck (z.B. „dediziert für Datenbanklog").

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__DRIVE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Laufwerksbuchstabe/Mountpoint** | `mount_point` | Text |
| **Bezeichnung** | `title` | Text |
| **Systemlaufwerk** | `system_drive` | Dialog (Auswahl) |
| **Dateisystem** | `filesystem` | Dialog+ (erweiterbare Auswahl) |
| **Kapazität** | `capacity` | Dezimalzahl |
| **Einheit** | `unit` | Dialog (Auswahl) |
| **Seriennummer** | `serial` | Text |
| **Typ** | `drive_type` | Ganzzahl |
| **Freier Speicher** | `free_space` | Dezimalzahl |
| **Belegter Speicher** | `used_space` | Dezimalzahl |
| **Firmware** | `firmware` | Text |
| **Software-RAID-Gruppe** | `assigned_raid` | Dialog (Auswahl) |
| **Auf Gerät** | `device` | Dialog (Auswahl) |
| **Auf Gerät (RAID-Array)** | `raid` | Dialog (Auswahl) |
| **Auf Gerät (Logisches Gerät)** | `ldev` | Dialog (Auswahl) |
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
        "category": "C__CATG__DRIVE",
        "data": {
            "mount_point": "C:",
            "title": "Samsung 990 PRO 2TB",
            "system_drive": 1,
            "filesystem": "NTFS",
            "capacity": 2000,
            "unit": 3,
            "serial": "S6B2NJ0W123456",
            "drive_type": 2,
            "description": "Systemlaufwerk, NVMe M.2, PCIe 4.0 x4"
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
        "category": "C__CATG__DRIVE"
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
        "category": "C__CATG__DRIVE",
        "entry": 32,
        "data": {
            "capacity": 2000,
            "free_space": 850,
            "used_space": 1150,
            "description": "Kapazitaetspruefung 2026-04: 57% belegt."
        }
    },
    "id": 3
}
```
