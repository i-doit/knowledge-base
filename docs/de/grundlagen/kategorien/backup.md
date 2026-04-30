---
title: "Kategorie: Backup"
description: Dokumentation der Kategorie Backup in i-doit
icon:
status:
lang: de
---

# Kategorie: Backup

Die Kategorie **Backup** dokumentiert die Sicherungskonfiguration eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. wenn ein Server durch mehrere Backup-Jobs mit unterschiedlichen Zyklen und Sicherungsarten geschützt wird.

!!! tip "Zusammenspiel mit der Kategorie Backup (zugewiesene Objekte)"
    Diese Kategorie dokumentiert, **wovon** ein Objekt gesichert wird. Die Gegenkategorie **Backup (zugewiesene Objekte)** zeigt die Rückrichtung: Welche Objekte werden **auf** einen bestimmten Backup-Server gesichert? Beide Kategorien bilden zusammen das vollständige Bild der Datensicherung in der CMDB. Wenn du auf dem Backup-Server nachschauen willst, welche Systeme er sichert, findest du die Antwort dort.

## Verwendung

Typische Anwendungsfälle:

- **Backup-Dokumentation**: Erfasse für jedes Objekt, welche Sicherungsjobs eingerichtet sind, welcher Backup-Server die Sicherung durchführt und wohin die Daten geschrieben werden. Zusammen mit der Gegenkategorie **Backup (zugewiesene Objekte)** auf dem Backup-Server entsteht ein lückenloses Bild der Datensicherung.
- **Disaster Recovery vorbereiten**: Der Zielpfad und die Sicherungsart sind im Ernstfall entscheidend. Wenn ein System wiederhergestellt werden muss, zeigt diese Kategorie sofort, wo die Backup-Daten liegen und wie sie erstellt wurden — ohne dass jemand erst Backup-Logs durchsuchen muss.
- **Erinnerungen und Reports**: Der Zyklus-Wert lässt sich im Report Manager nutzen, um Systeme zu identifizieren, deren Sicherung überfällig ist oder deren Backup-Zyklus nicht den Vorgaben entspricht. In Kombination mit dem Benachrichtigungssystem können automatische Erinnerungen generiert werden.
- **SLA-Tracking**: Kombiniere die Backup-Kategorie mit der [Vertragszuweisung](contract-assignment.md), um nachzuweisen, dass die vertraglich vereinbarten Backup-SLAs (RPO/RTO) eingehalten werden. Ein Report kann dann zeigen: „Alle Systeme mit SLA Gold haben eine tägliche Vollsicherung."
- **Audit und Compliance**: In Audits lässt sich nachweisen, dass kritische Systeme regelmäßig gesichert werden und die Backup-Strategie den Vorgaben entspricht. Sicherungsart, Zyklus und Zielpfad liefern die nötigen Nachweise.

[![Backup](../../assets/images/de/grundlagen/kategorien/backup.png)](../../assets/images/de/grundlagen/kategorien/backup.png)

## Felder

### Bezeichnung

Der Name des Backup-Jobs, z.B. `Tägliches Full-Backup` oder `Wöchentliches Incremental DB`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Sichert durch (Backed up by)

Das Objekt, das die Sicherung durchführt – typischerweise ein Backup-Server oder eine Backup-Appliance. Über den Objekt-Browser wird eine Verknüpfung zum entsprechenden Objekt in der CMDB hergestellt. Diese Verknüpfung ist bidirektional: Auf dem verknüpften Backup-Server erscheint das aktuelle Objekt automatisch in der Kategorie **Backup (zugewiesene Objekte)**. So lässt sich sowohl vom gesicherten System als auch vom Backup-Server aus nachvollziehen, wer wen sichert.

### Backup-Typ

Die Art der Sicherung. Dialog+-Feld mit vordefinierten Werten wie `Vollsicherung`, `Inkrementell` oder `Differenziell`. Eigene Werte lassen sich bei Bedarf ergänzen.

### Zyklus

Der Rhythmus, in dem die Sicherung durchgeführt wird. Dialog+-Feld mit Werten wie `Täglich`, `Wöchentlich` oder `Monatlich`. Eigene Werte lassen sich bei Bedarf ergänzen. Dieses Feld ist besonders wertvoll für automatisierte Reports: Ein Report über alle Objekte mit Zyklus `Wöchentlich` oder `Monatlich` zeigt auf einen Blick, welche Systeme seltener gesichert werden und möglicherweise eine Anpassung brauchen.

### Zielpfad

Der Pfad, unter dem die Sicherungsdaten abgelegt werden, z.B. `/backup/srv-web-01/` oder `\\backup\share`. **Dieses Feld ist im Disaster-Recovery-Fall kritisch**: Wenn ein System wiederhergestellt werden muss, ist der Zielpfad die erste Information, die das Operations-Team braucht. Dokumentiere den Pfad so präzise wie möglich — inklusive Share-Name oder Mount-Punkt, damit im Notfall keine Zeit mit Suchen verloren geht.

### Beschreibung

Freitext für zusätzliche Angaben: Aufbewahrungsfristen, Verschlüsselung, zuständige Ansprechpartner, Restore-Anweisungen oder Besonderheiten in der Backup-Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__BACKUP` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Service, Virtueller Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Sichert durch** | `backup` | Objekt-Browser (Verknüpfung) |
| **Backup-Typ** | `backup_type` | Dialog+ (erweiterbare Auswahl) |
| **Zyklus** | `cycle` | Dialog+ (erweiterbare Auswahl) |
| **Zielpfad** | `path_to_save` | Text |
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
        "category": "C__CATG__BACKUP",
        "data": {
            "title": "Tägliches Full-Backup",
            "backup": 456,
            "backup_type": "Vollsicherung",
            "cycle": "Täglich",
            "path_to_save": "/backup/srv-web-01/",
            "description": "Vollsicherung täglich um 02:00 Uhr, Aufbewahrung 30 Tage, verschlüsselt mit AES-256"
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
        "category": "C__CATG__BACKUP"
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
        "category": "C__CATG__BACKUP",
        "entry": 32,
        "data": {
            "cycle": "Wöchentlich",
            "description": "Umstellung 2026-04: Zyklus von täglich auf wöchentlich geändert."
        }
    },
    "id": 3
}
```
