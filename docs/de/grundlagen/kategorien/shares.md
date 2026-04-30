---
title: "Kategorie: Freigaben"
description: Dokumentation der Kategorie Freigaben in i-doit
icon:
status:
lang: de
---

# Kategorie: Freigaben

Die Kategorie **Freigaben** dokumentiert die Netzwerkfreigaben (SMB/CIFS-Shares), die ein Server bereitstellt. Sie ist eine **Multi-Value-Kategorie** — pro Objekt können beliebig viele Freigaben angelegt werden, z.B. für verschiedene Abteilungs- oder Projektlaufwerke auf einem Dateiserver. Die Kategorie erfasst den Freigabenamen, den UNC-Pfad, das zugehörige Volume und den lokalen Pfad auf dem Server.

!!! info "Gegenstück: Freigabezugriff"
    Die Kategorie Freigaben dokumentiert, welche Shares ein Server **bereitstellt**. Das Gegenstück — welche Clients auf diese Shares **zugreifen** — wird in der Kategorie [Freigabezugriff](share-access.md) auf den jeweiligen Client-Objekten gepflegt. Zusammen ergeben beide Kategorien eine vollständige Dokumentation der Dateifreigabe-Beziehungen.

## Verwendung

Typische Anwendungsfälle:

- **Dateiserver-Dokumentation**: Erfasse für jeden Share den Freigabenamen, den UNC-Pfad und den lokalen Pfad auf dem Server. So entsteht eine vollständige Übersicht aller Freigaben pro Dateiserver — die Grundlage für Berechtigungsprüfungen, Migrationen und Kapazitätsplanung.
- **Migration und Konsolidierung**: Bei der Migration von Dateiservern zeigt ein Report über alle Freigaben, welche Shares umgezogen werden müssen. In Kombination mit der Kategorie [Freigabezugriff](share-access.md) auf den Clients ist sofort klar, welche Benutzer betroffen sind und welche Mountpoints angepasst werden müssen.
- **Berechtigungsdokumentation**: Im Beschreibungsfeld lassen sich die NTFS- und Share-Berechtigungen dokumentieren — wer hat Lese-, wer Schreibzugriff. Das ist besonders in regulierten Umgebungen wichtig, wo die Zugriffskontrolle nachweisbar sein muss.
- **Kapazitätsplanung**: Über die Verknüpfung mit dem Volume (Laufwerk) wird ersichtlich, auf welcher Festplatte oder welchem Storage-Volume die Freigabe liegt. Zusammen mit der Kategorie [Laufwerk](drive.md) lässt sich die Speicherauslastung pro Share nachvollziehen.

!!! warning "Versteckte Freigaben"
    Administrative Shares (z.B. `C$`, `ADMIN$`, `IPC$`) sollten in der Regel nicht in i-doit dokumentiert werden — sie existieren auf jedem Windows-Server und würden den Überblick unnötig aufblähen. Konzentriere dich auf bewusst eingerichtete Freigaben, die für den Geschäftsbetrieb relevant sind. Nutze bei Bedarf das `$`-Suffix im Freigabenamen, um auch benutzerdefinierte versteckte Freigaben (z.B. `Daten$`) korrekt abzubilden.

[![Freigaben](../../assets/images/de/grundlagen/kategorien/shares.png)](../../assets/images/de/grundlagen/kategorien/shares.png)

## Felder

### Freigabename

Der Name der Netzwerkfreigabe, z.B. `Projekte`, `Daten$` oder `Software`. Dieser Wert wird in der Listenansicht und in Reports angezeigt und ist der Name, unter dem der Share im Netzwerk sichtbar ist.

### UNC-Pfad

Der vollständige UNC-Pfad (Universal Naming Convention) der Freigabe, z.B. `\\SRV-FILE01\Projekte`. Dieser Pfad wird von Clients zum Verbinden der Freigabe verwendet und sollte exakt so eingetragen werden, wie er im Netzwerk erreichbar ist.

### Volume

Verknüpfung zum Laufwerk (Volume) auf dem Server, auf dem die Freigabe physisch liegt. Dialog-Feld, das die in der Kategorie [Laufwerk](drive.md) angelegten Volumes zur Auswahl anbietet. So wird die Beziehung zwischen logischer Freigabe und physischem Speicher hergestellt.

### Lokaler Pfad

Der Pfad auf dem Server-Dateisystem, der als Freigabe bereitgestellt wird, z.B. `D:\Daten\Projekte` oder `/srv/samba/projekte`. Wichtig für die Administration: Der lokale Pfad zeigt, wo die Daten physisch auf dem Server liegen.

### Beschreibung

Freitext für zusätzliche Angaben: Berechtigungen (NTFS und Share-Level), Quota-Einstellungen, DFS-Namespace-Pfad, Backup-Zugehörigkeit oder besondere Zugriffsregeln.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__SHARES` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Server, Client, Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Freigabename** | `title` | Text |
| **UNC-Pfad** | `unc_path` | Text |
| **Volume** | `volume` | Dialog (Auswahl) |
| **Lokaler Pfad** | `path` | Text |
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
        "category": "C__CATG__SHARES",
        "data": {
            "title": "Projekte",
            "unc_path": "\\\\SRV-FILE01\\Projekte",
            "volume": "D:",
            "path": "D:\\Daten\\Projekte",
            "description": "Projektlaufwerk, NTFS: GRP_Projekte_RW (Ändern), GRP_Projekte_RO (Lesen), Quota 500 GB"
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
        "category": "C__CATG__SHARES"
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
        "category": "C__CATG__SHARES",
        "entry": 4,
        "data": {
            "unc_path": "\\\\SRV-FILE02\\Projekte",
            "path": "E:\\Daten\\Projekte",
            "description": "Migration 2025-11: Share von SRV-FILE01 auf SRV-FILE02 umgezogen, neues Volume E:."
        }
    },
    "id": 3
}
```
