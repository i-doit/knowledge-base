---
title: "Kategorie: Logische Geräte (LDEV Server)"
description: Dokumentation der Kategorie Logische Geräte (LDEV Server) in i-doit
icon:
status:
lang: de
---

# Kategorie: Logische Geräte (LDEV Server)

Die Kategorie **Logische Geräte (LDEV Server)** dokumentiert die logischen Volumes (LUNs), die ein Storage-System bereitstellt. Sie ist eine **Multi-Value-Kategorie** – pro Storage-Array können beliebig viele LUNs angelegt werden, was die tatsächliche Aufteilung des physischen Speichers in nutzbare Einheiten abbildet.

!!! info "LDEV Server vs. LDEV Client"
    Diese Kategorie beschreibt die **Anbieter-Seite** (Storage-Array). Das Gegenstück ist die Kategorie [Logische Geräte (LDEV Client)](ldev-client.md), die auf dem konsumierenden Server gepflegt wird und zeigt, welche LUNs ein Server nutzt. Beide Seiten sind über das Feld **Logical devices (Client)** bzw. die Pfad-Zuordnung miteinander verknüpft.

## Verwendung

Typische Anwendungsfälle:

- **SAN-Storage-Dokumentation**: Erfasse alle LUNs, die ein Storage-Array (z.B. NetApp FAS, Dell PowerStore, HPE 3PAR) bereitstellt. Zusammen mit den Kategorien [FC-Port](network-port.md) und [HBA](hba.md) entsteht eine vollständige SAN-Dokumentation vom Storage bis zum Server.
- **Kapazitätsplanung**: Über den Report Manager lässt sich auswerten, wie viel Kapazität pro Storage-Array vergeben ist und wie viel freier Speicher verbleibt. Tier-Klassen helfen dabei, zwischen SSD-Tiers und HDD-Tiers zu unterscheiden.
- **Multipath-Dokumentation**: Die Felder Pfade und Primärer Pfad bilden ab, über welche FC-Ports eine LUN erreichbar ist. Das ist entscheidend für die Ausfallsicherheit: Fällt ein Pfad aus, zeigt die Dokumentation sofort den redundanten Weg.
- **Storage-Lifecycle und Migration**: Bei einem Storage-Refresh kannst du im Report Manager alle LUNs eines alten Arrays auflisten, die zugeordneten Server identifizieren und die Migration gezielt planen.

[![Logische Geräte (LDEV Server)](../../assets/images/de/grundlagen/kategorien/ldev-server.png)](../../assets/images/de/grundlagen/kategorien/ldev-server.png)

## Felder

### Bezeichnung

Der Name der LUN oder des logischen Volumes, z.B. `LUN_SQL_DATA_01` oder `vol_vmware_ds03`. Wähle eine sprechende Namenskonvention, die Rückschlüsse auf den Verwendungszweck erlaubt. Dieser Wert erscheint in der Listenansicht und in Reports.

### LUN

Die LUN-Nummer oder der LUN-Identifier, wie er auf dem Storage-Array konfiguriert ist, z.B. `0` oder `3A:2F`. Dieser Wert muss mit der tatsächlichen Konfiguration auf dem Storage übereinstimmen, damit die Zuordnung zwischen CMDB und Realität eindeutig bleibt.

### Segmentgröße (kB)

Die Segmentgröße (Stripe Size) in Kilobyte. Dieser Wert ist relevant für die Performance-Dokumentation: Eine typische Segmentgröße bei OLTP-Workloads liegt bei `64 kB`, bei sequentiellen Workloads wie Backup-Streams oft bei `256 kB` oder mehr. In der Praxis wird dieser Wert selten manuell gepflegt, sondern eher durch automatisierte Imports aus dem Storage-Management befüllt.

### Speichereinheit

Die Maßeinheit für das Kapazitätsfeld – typischerweise `GB` oder `TB`. Achte darauf, dass du innerhalb deiner CMDB einheitlich bleibst, um Vergleiche in Reports nicht zu verfälschen.

### Kapazität

Die Größe der LUN in der gewählten Speichereinheit. Bei einem 500 GB großen Volume trägst du hier `500` ein und wählst als Einheit `GB`. Dieser Wert ist die Grundlage für Kapazitäts-Reports und sollte die nutzbare (nicht die Roh-)Kapazität widerspiegeln.

### Angeschlossene Geräte

Über den Objekt-Browser werden hier die Geräte verknüpft, die auf diese LUN zugreifen – typischerweise Server oder Hypervisoren. Diese Verknüpfung ist das Herzstück der SAN-Dokumentation: Sie zeigt auf einen Blick, welche Systeme von diesem Storage abhängig sind.

### Pfade

Die FC-Ports oder iSCSI-Pfade, über die diese LUN erreichbar ist. Bei einem typischen Dual-Fabric-Setup werden hier mindestens zwei Pfade eingetragen. Diese Information ist unverzichtbar für die Ausfallanalyse: Wenn ein Fabric ausfällt, zeigt die Dokumentation sofort, welche LUNs betroffen sind.

### Primärer Pfad

Der Index des bevorzugten Pfads aus der Pfad-Liste. Der Storage oder das Multipath-Framework des Servers nutzt diesen Pfad primär und schaltet erst bei Ausfall auf die Alternativpfade um.

### Multipath-Technologie

Die verwendete Multipath-Software oder -Technologie, z.B. `PowerPath`, `DM-Multipath` oder `MPIO`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Dieser Wert hilft dem Storage-Team zu verstehen, welche Multipath-Lösung auf den konsumierenden Servern konfiguriert ist.

### Tier-Klasse

Die Speicherklasse der LUN, z.B. `Tier 1 (SSD)`, `Tier 2 (SAS)` oder `Tier 3 (NL-SAS)`. Dialog+-Feld. Die Tier-Klasse ist wichtig für die Kostenverrechnung und für SLA-Dokumentation: Geschäftskritische Datenbanken sollten auf Tier-1-Storage liegen, Archivdaten dagegen auf günstigerem Tier-3-Storage.

### Logische Geräte (Client)

Verknüpfung zu den [LDEV-Client](ldev-client.md)-Einträgen auf den konsumierenden Servern. Diese Rückverknüpfung stellt sicher, dass die Zuordnung in beide Richtungen navigierbar ist: Vom Storage-Array aus siehst du, welche Server die LUN nutzen – und vom Server aus, welches Array den Speicher bereitstellt.

### Beschreibung

Freitext für zusätzliche Informationen: RAID-Level, Deduplizierung, Kompression, Replikationsstatus, Snapshot-Policies oder besondere Vereinbarungen mit dem Storage-Team.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__LDEV_SERVER` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Client, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **LUN** | `lun` | Text |
| **Segmentgröße (kB)** | `segment_size` | Dezimalzahl |
| **Speichereinheit** | `unit` | Dialog (Auswahl) |
| **Kapazität** | `capacity` | Dezimalzahl |
| **Angeschlossene Geräte** | `connected_devices` | Objekt-Browser (Verknüpfung) |
| **Pfade** | `paths` | Objekt-Browser (Verknüpfung) |
| **Primärer Pfad** | `primary_path` | Ganzzahl |
| **Multipath-Technologie** | `multipath` | Dialog+ (erweiterbare Auswahl) |
| **Tier-Klasse** | `tierclass` | Dialog+ (erweiterbare Auswahl) |
| **Logische Geräte (Client)** | `ldev_clients` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 4711,
        "category": "C__CATG__LDEV_SERVER",
        "data": {
            "title": "LUN_SQL_DATA_01",
            "lun": "0",
            "segment_size": 64,
            "unit": 3,
            "capacity": 500,
            "multipath": "DM-Multipath",
            "tierclass": "Tier 1 (SSD)",
            "description": "SQL Server Daten-LUN, RAID 10, Deduplizierung deaktiviert"
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
        "object": 4711,
        "category": "C__CATG__LDEV_SERVER"
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
        "object": 4711,
        "category": "C__CATG__LDEV_SERVER",
        "entry": 15,
        "data": {
            "capacity": 1000,
            "description": "Erweiterung 2026-03: LUN von 500 GB auf 1 TB vergrößert wegen Datenbankwachstum."
        }
    },
    "id": 3
}
```
