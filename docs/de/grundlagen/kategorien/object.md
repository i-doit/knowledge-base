---
title: "Kategorie: Lokal zugewiesene Objekte"
description: Dokumentation der Kategorie Lokal zugewiesene Objekte in i-doit
icon:
status:
lang: de
---

# Kategorie: Lokal zugewiesene Objekte

Die Kategorie **Lokal zugewiesene Objekte** zeigt alle Objekte, die diesem Standort physisch zugewiesen sind. Sie ist die **Rückwärts-Ansicht** der Kategorie [Standort](location.md) und wird automatisch von i-doit befüllt -- manuelle Einträge sind nicht vorgesehen.

!!! info "Standort zeigt WO, diese Kategorie zeigt WAS"
    Die Kategorie [Standort](location.md) beantwortet die Frage „**Wo** befindet sich dieses Objekt?" -- sie verweist auf das übergeordnete Standort-Objekt (Gebäude, Raum, Schrank). Die Kategorie **Lokal zugewiesene Objekte** beantwortet die umgekehrte Frage: „**Was** befindet sich an diesem Standort?" Sie listet alle Objekte auf, die in ihrer Standort-Kategorie auf das aktuelle Objekt verweisen. Zusammen bilden beide Kategorien die vollständige Standort-Hierarchie in i-doit ab.

## Verwendung

Typische Anwendungsfälle:

- **Rauminventar auf einen Blick**: Öffnest du einen Raum, zeigt diese Kategorie alle Schränke, Drucker, Clients und sonstigen Objekte, die diesem Raum zugewiesen sind. So erhältst du ohne manuellen Aufwand ein vollständiges Inventar des physischen Standorts.
- **Rack-Belegung**: Bei einem Schrank-Objekt listet die Kategorie alle Server, Switches, Patchpanels und sonstigen Einschübe auf, die im Schrank eingebaut sind. In Kombination mit der Rack-Ansicht (die auf der Kategorie [Formfaktor](formfactor.md) basiert) ergibt sich ein vollständiges Bild der Schrankbelegung.
- **Gebäudeübersicht**: Auf Gebäudeebene zeigt die Kategorie alle Räume, Etagen und sonstigen Unterobjekte. So lässt sich die gesamte Standort-Hierarchie top-down durchnavigieren: Gebäude -> Raum -> Schrank -> Server.
- **Umzugsplanung und Dekommissionierung**: Vor einem Standortwechsel oder der Räumung eines Raums zeigt die Kategorie sofort, welche Objekte betroffen sind. Ein Report über diese Kategorie liefert die vollständige Umzugsliste.
- **Blade-Chassis-Bestückung**: Bei Blade-Chassis-Objekten werden hier die eingesetzten Blade-Server aufgelistet -- analog zur physischen Bestückung des Chassis.

!!! warning "Nur-Lese-Kategorie"
    Diese Kategorie wird **nicht direkt bearbeitet**. Die Zuordnung erfolgt ausschließlich über die Kategorie [Standort](location.md) des jeweiligen Kind-Objekts. Wenn du einen Server aus der Liste entfernen willst, musst du dessen Standort-Kategorie ändern -- nicht diese Kategorie. Das stellt sicher, dass die Standort-Hierarchie konsistent bleibt.

[![Lokal zugewiesene Objekte](../../assets/images/de/grundlagen/kategorien/object.png)](../../assets/images/de/grundlagen/kategorien/object.png)

## Felder

### Objekt

Zeigt die verknüpften Objekte an, die diesem Standort zugewiesen sind. Es handelt sich um eine Rückwärtsverknüpfung: i-doit sucht automatisch alle Objekte, deren Kategorie [Standort](location.md) auf das aktuelle Objekt verweist, und listet sie hier auf. Die Darstellung umfasst den Objekttitel und den Objekttyp. Ein Klick auf einen Eintrag navigiert zum jeweiligen Objekt.

Da die Zuordnung über die Standort-Kategorie der Kind-Objekte gesteuert wird, ist dieses Feld effektiv schreibgeschützt. Eine Änderung der Zuordnung erfolgt immer am Kind-Objekt selbst.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__OBJECT` |
| **Typ** | Globale Kategorie (Rückwärts-Kategorie) |
| **Multi-Value** | Ja (automatisch befüllt) |
| **Zugeordnet zu** | Blade Chassis, Gebäude, Enclosure, Raum u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Objekt** | `assigned_object` | Objekt-Browser (Verknüpfung, rückwärts) |

### API-Beispiele

#### Einträge lesen

Die primäre API-Nutzung dieser Kategorie ist das **Lesen** -- um alle an einem Standort befindlichen Objekte abzufragen:

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__OBJECT"
    },
    "id": 1
}
```

#### Eintrag erstellen

Um ein Objekt einem Standort zuzuweisen, legst du den Eintrag über die Kategorie [Standort](location.md) (`C__CATG__LOCATION`) des Kind-Objekts an -- nicht über diese Kategorie. Technisch ist es jedoch auch über die API möglich, die Zuordnung direkt zu setzen:

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__OBJECT",
        "data": {
            "assigned_object": 1055
        }
    },
    "id": 2
}
```

!!! tip "Empfohlener Weg über die Standort-Kategorie"
    Für konsistente Ergebnisse ist es empfehlenswert, die Zuordnung über `C__CATG__LOCATION` am Kind-Objekt vorzunehmen. So werden automatisch alle abhängigen Felder (Einschub, GPS-Koordinaten, Rackposition) korrekt gesetzt.
