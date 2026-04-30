---
title: "Kategorie: Logische Geräte (Client)"
description: Dokumentation der Kategorie Logische Geräte (Client) in i-doit
icon:
status:
lang: de
---

# Kategorie: Logische Geräte (Client)

Die Kategorie **Logische Geräte (Client)** dokumentiert die logischen Speichergeräte (LUNs, Volumes), die einem Server aus einem SAN-Storage-System zugewiesen sind. Sie ist eine **Multi-Value-Kategorie** -- ein Server kann viele LUNs von verschiedenen Storage-Systemen gleichzeitig nutzen.

Diese Kategorie zeigt die **Konsumenten-Seite** der SAN-Storage-Zuweisung: Welche LUNs sieht dieser Server, über welche Pfade erreicht er sie, und welche Multipath-Technologie sorgt für Redundanz? Das Gegenstück auf der Storage-Seite ist die Kategorie **Logische Geräte (LDEV Server)**, in der die LUNs auf dem Storage-Array selbst dokumentiert werden.

!!! tip "Client und Server gehören zusammen"
    Die Kategorie Logische Geräte (Client) am Server und die Kategorie Logische Geräte (LDEV Server) am Storage-System bilden ein Paar. Über das Feld *Logische Geräte (LDEV Server)* wird die Verbindung zwischen beiden Seiten hergestellt. Erst wenn beide Seiten gepflegt sind, ergibt sich ein vollständiges Bild der Storage-Zuweisung: welcher Server welche LUN von welchem Storage-Array über welche Pfade nutzt.

## Verwendung

Typische Anwendungsfälle:

- **LUN-Zuordnung dokumentieren**: In SAN-Umgebungen ist die Frage "Welche LUNs sind welchem Server zugewiesen?" eine der häufigsten Anfragen an das Storage-Team. Die Kategorie Logische Geräte (Client) beantwortet diese Frage direkt am Server-Objekt, ohne dass man sich auf die Storage-Management-Konsole schalten muss.
- **Multipath-Dokumentation**: Über das Feld *Multipath-Technologie* wird dokumentiert, welches Multipath-Framework verwendet wird -- z.B. `DM-Multipath` (Linux), `PowerPath` (Dell EMC), `RDAC` oder `Windows MPIO`. Diese Information ist entscheidend für das Troubleshooting bei Pfadausfällen, weil jede Technologie eigene Diagnose-Tools und Konfigurationsbesonderheiten mitbringt.
- **Pfad-Analyse**: Das Feld *Pfad* zeigt, über welche [FC-Ports](controller-fc-port.md) und [HBAs](hba.md) die LUN erreichbar ist. Bei einem HBA-Ausfall lässt sich so sofort erkennen, welche LUNs betroffen sind und ob der verbleibende Pfad ausreicht.
- **Storage-Migration vorbereiten**: Beim Umzug von einem alten auf ein neues Storage-System zeigt die Kategorie, welche Server welche LUNs nutzen. Das ist die Grundlage für den Migrationsplan: Welche Server müssen umgestellt werden, welche neuen LUNs werden benötigt, und welche Pfade müssen konfiguriert werden?
- **Kapazitätsplanung**: In Kombination mit den Storage-seitigen LDEV-Server-Einträgen ergibt sich ein vollständiger Überblick, welche Server wie viel SAN-Storage nutzen -- hilfreich für die Budgetplanung und Beschaffung von zusätzlicher Kapazität.

!!! warning "Pfade aktuell halten"
    Wenn ein HBA getauscht oder ein FC-Port umverkabelt wird, ändern sich die Pfade zu den LUNs. Aktualisiere in diesem Fall nicht nur die Kategorien [HBA](hba.md) und [FC-Port](controller-fc-port.md), sondern auch die Pfad-Zuordnungen in dieser Kategorie. Veraltete Pfad-Informationen können bei Troubleshooting in die Irre führen.

[![Logische Geräte (Client)](../../assets/images/de/grundlagen/kategorien/ldev-client.png)](../../assets/images/de/grundlagen/kategorien/ldev-client.png)

## Felder

### Bezeichnung

Der Name des logischen Geräts, wie es der Server sieht, z.B. `sdb`, `dm-3`, `LUN 42` oder der Volume-Label. Verwende die Bezeichnung, die auch der Betriebssystem-Administrator kennt, damit die Zuordnung eindeutig ist.

### Pfad

Die FC-Port-Pfade, über die das logische Gerät erreichbar ist. Hier werden die [FC-Ports](controller-fc-port.md) verknüpft, über die der Server auf die LUN zugreift. Bei einer Multipath-Konfiguration hat ein logisches Gerät typischerweise zwei oder vier Pfade -- idealerweise über unterschiedliche HBAs und Fabrics.

### Logische Geräte (LDEV Server)

Die Verknüpfung zum Storage-seitigen LDEV-Server-Eintrag. Dieses Feld stellt die Verbindung zwischen der Client-Sicht (Server) und der Server-Sicht (Storage-Array) her. Über diese Verknüpfung lässt sich navigieren: vom Server zur LUN-Konfiguration auf dem Storage-System und umgekehrt.

### Primärer Pfad

Der bevorzugte Pfad für I/O-Operationen. Bei aktiv/passiv-Konfigurationen (z.B. ALUA mit preferred path) ist dies der Pfad, über den im Normalbetrieb die Daten fließen. Bei aktiv/aktiv-Konfigurationen kann dieser Wert zur Kennzeichnung des optimierten Pfads genutzt werden.

### Multipath-Technologie

Das verwendete Multipath-Framework, z.B. `DM-Multipath`, `PowerPath`, `Windows MPIO`, `NativeMPIO` oder `RDAC`. Dialog+-Feld -- eigene Werte können ergänzt werden. Die Multipath-Technologie bestimmt die Diagnosewerkzeuge und das Failover-Verhalten, deshalb ist diese Information bei Störungen essenziell.

### Beschreibung

Freitext für zusätzliche Angaben: LUN-ID auf dem Storage-System, Dateisystem-Typ (ext4, XFS, NTFS), Mount-Point, Kapazität, Performance-Tier (SSD/HDD) oder Hinweise zur Nutzung (z.B. "Oracle Tablespace DATA").

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__LDEV_CLIENT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Pfad** | `paths` | Objekt-Browser (Verknüpfung) |
| **Logische Geräte (LDEV Server)** | `assigned_ldevserver` | Objekt-Browser (Verknüpfung) |
| **Primärer Pfad** | `primary_path` | Ganzzahl |
| **Multipath-Technologie** | `multipath` | Dialog+ (erweiterbare Auswahl) |
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
        "category": "C__CATG__LDEV_CLIENT",
        "data": {
            "title": "dm-3 (LUN 42)",
            "assigned_ldevserver": 2055,
            "multipath": "DM-Multipath",
            "description": "Oracle Tablespace DATA, XFS, 500 GB, Performance-Tier SSD, LUN-ID 42 auf NetApp FAS8700"
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
        "category": "C__CATG__LDEV_CLIENT"
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
        "category": "C__CATG__LDEV_CLIENT",
        "entry": 9,
        "data": {
            "assigned_ldevserver": 3010,
            "description": "2026-04: LUN-Migration von NetApp FAS8700 (LUN 42) auf Pure Storage FlashArray (Vol oracle-data-01)"
        }
    },
    "id": 3
}
```
