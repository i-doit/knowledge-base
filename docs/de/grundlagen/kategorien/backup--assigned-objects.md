---
title: "Kategorie: Backup (zugewiesene Objekte)"
description: Dokumentation der Kategorie Backup (zugewiesene Objekte) in i-doit
icon:
status:
lang: de
---

# Kategorie: Backup (zugewiesene Objekte)

Die Kategorie **Backup (zugewiesene Objekte)** zeigt die Rückwärts-Verknüpfung der Kategorie [Backup](backup.md). Während die Backup-Kategorie auf einem Quell-Objekt definiert, *wohin* es gesichert wird, zeigt diese Kategorie auf dem **Backup-Server** (oder Storage), *welche* Objekte durch ihn gesichert werden. Sie ist eine **Multi-Value-Kategorie** -- pro Backup-Server können beliebig viele gesicherte Objekte aufgelistet sein.

!!! info "Rückwärts-Verknüpfung verstehen"
    Du pflegst die Backup-Beziehung immer auf dem **Quell-Objekt** in der Kategorie [Backup](backup.md). Dort traegst du ein: "Server X wird gesichert auf Backup-Server Y, Typ Vollbackup, Zyklus täglich." Die Kategorie **Backup (zugewiesene Objekte)** auf Backup-Server Y wird dann automatisch befuellt -- sie zeigt alle Objekte, die Y als Backup-Ziel referenzieren. Du musst (und kannst) hier keine Daten manuell anlegen.

## Verwendung

Typische Anwendungsfälle:

- **Backup-Server-Dokumentation**: Auf einen Blick sehen, welche Systeme von einem bestimmten Backup-Server gesichert werden. Bei Ausfall des Backup-Servers ist sofort klar, welche Systeme betroffen sind und manuell gesichert werden müssen.
- **Kapazitätsplanung**: Wird ein Backup-Server zu voll, zeigt die Liste aller zugewiesenen Objekte, welche Backups umverteilt werden könnten. In Kombination mit dem Feld `Speicherpfad` ergibt sich ein Überblick über die Verzeichnisstruktur.
- **Audit und Compliance**: Auditoren fragen häufig: "Welche Systeme werden durch diesen Backup-Server geschützt?" Diese Kategorie liefert die Antwort ohne manuellen Aufwand -- vorausgesetzt, die Backup-Kategorie ist auf den Quell-Objekten korrekt gepflegt.
- **Impact-Analyse**: Bei geplanter Wartung oder Dekommissionierung eines Backup-Servers zeigt die Liste der zugewiesenen Objekte den vollen Impact -- jedes dort aufgeführte System braucht ein alternatives Backup-Ziel.

[![Backup (zugewiesene Objekte)](../../assets/images/de/grundlagen/kategorien/backup--assigned-objects.png)](../../assets/images/de/grundlagen/kategorien/backup--assigned-objects.png)

## Felder

### Bezeichnung

Der Titel des Backup-Eintrags, wie er auf dem Quell-Objekt in der [Backup](backup.md)-Kategorie vergeben wurde. Dient der schnellen Identifikation des Backup-Jobs, z.B. "Naechtliches Full-Backup" oder "DB-Dump täglich".

### Backups

Verknüpfung zum Quell-Objekt -- also dem System, das gesichert wird. Über diesen Objekt-Browser-Link navigierst du direkt zum gesicherten Server, Client oder zur Applikation.

### Backup-Typ

Die Art der Sicherung, z.B. `Vollbackup`, `Inkrementell` oder `Differenziell`. Dialog+-Feld, dessen Werte sich an die eigene Backup-Strategie anpassen lassen.

### Zyklus

Die Häufigkeit der Sicherung, z.B. `Taeglich`, `Woechentlich` oder `Stuendlich`. Dialog+-Feld -- eigene Zyklen können ergänzt werden.

### Speicherpfad

Der Pfad, unter dem die Sicherung auf dem Backup-Server abgelegt wird, z.B. `/backup/veeam/srv-db-01/` oder `\\nas02\backups\exchange`. Hilfreich für die Fehlersuche und die Kapazitätsplanung auf Dateisystem-Ebene.

### Beschreibung

Freitext für zusätzliche Details: Aufbewahrungsdauer (Retention), Verschlüsselungsstatus, verantwortliches Team oder Verweise auf die Backup-Policy.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__BACKUP__ASSIGNED_OBJECTS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server u.a. |

!!! warning "Rückwärts-Kategorie"
    Die Daten in dieser Kategorie stammen aus der Kategorie [Backup](backup.md) der zugewiesenen Quell-Objekte. Änderungen müssen dort vorgenommen werden. Schreib-Zugriffe über die API auf `C__CATG__BACKUP__ASSIGNED_OBJECTS` wirken sich technisch auf die Backup-Einträge der Quell-Objekte aus.

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Backups** | `backup` | Objekt-Browser (Verknüpfung) |
| **Backup-Typ** | `backup_type` | Dialog+ (erweiterbare Auswahl) |
| **Zyklus** | `cycle` | Dialog+ (erweiterbare Auswahl) |
| **Speicherpfad** | `path_to_save` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 310,
        "category": "C__CATG__BACKUP__ASSIGNED_OBJECTS"
    },
    "id": 1
}
```

#### Eintrag aktualisieren

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 310,
        "category": "C__CATG__BACKUP__ASSIGNED_OBJECTS",
        "entry": 5,
        "data": {
            "title": "Naechtliches Full-Backup",
            "cycle": "Taeglich",
            "path_to_save": "/backup/veeam/srv-db-01/",
            "description": "Retention: 30 Tage, AES-256 verschluesselt"
        }
    },
    "id": 2
}
```
