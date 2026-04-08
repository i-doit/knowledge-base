---
title: "Kategorie: Beziehung"
description: Dokumentation der Kategorie Beziehung in i-doit
icon:
status:
lang: de
---

# Kategorie: Beziehung

Die Kategorie **Beziehung** zeigt sämtliche Beziehungen (Relationen) eines Objekts in einer tabellarischen Übersicht. Sie ist eine **Multi-Value-Kategorie**, denn ein einzelnes Objekt kann dutzende oder hunderte Beziehungen besitzen — von Netzwerkverbindungen über Software-Zuweisungen bis hin zu Standort-Verknüpfungen.

!!! info "Überwiegend eine Leseansicht"
    Die meisten Beziehungen entstehen implizit, wenn in anderen Kategorien Verknüpfungen angelegt werden — z.B. wenn in der Kategorie [Port](network-port.md) ein Kabel angeschlossen oder in [Kontaktzuweisung](contact.md) ein Verantwortlicher eingetragen wird. Die Kategorie **Beziehung** sammelt all diese Verknüpfungen an einem Ort. Manuelle Beziehungen können hier ebenfalls angelegt werden, in der Praxis ist das aber selten nötig.

## Warum diese Kategorie wichtig ist

i-doit ist eine relationale CMDB — ihr eigentlicher Wert liegt nicht in den einzelnen Objekten, sondern in den Beziehungen zwischen ihnen. Die Kategorie **Beziehung** macht dieses Beziehungsgeflecht sichtbar und navigierbar. Sie beantwortet Fragen wie: „Wovon hängt dieser Server ab?", „Welche Objekte sind betroffen, wenn dieser Switch ausfällt?" oder „Welche Personen sind diesem Service zugeordnet?". Ohne diese Übersicht müsste man jede einzelne Kategorie eines Objekts durchsuchen, um seine Abhängigkeiten zu verstehen.

## Verwendung

Typische Anwendungsfälle:

- **Impact-Analyse**: Bevor ein Server heruntergefahren oder ein Switch gepatcht wird, zeigt die Beziehungskategorie alle abhängigen Objekte. Das verhindert unerwartete Ausfälle und ist eine Grundvoraussetzung für fundiertes Change Management.
- **Abhängigkeitsvisualisierung im CMDB-Explorer**: Die Kategorie **Beziehung** liefert die Datenbasis für den **CMDB-Explorer**, der die Beziehungen als interaktiven Graphen darstellt. Vom tabellarischen Überblick in dieser Kategorie bis zur visuellen Darstellung im Explorer ist es ein Klick.
- **Fehlersuche und Root-Cause-Analyse**: Bei einem Incident zeigt die Beziehungskategorie, welche Infrastrukturkomponenten (Switches, Router, Storage) mit dem betroffenen Objekt verbunden sind — und lenkt die Analyse in die richtige Richtung.
- **Service-Modellierung**: IT-Services in i-doit bestehen aus Beziehungen zwischen Servicekomponenten. Die Beziehungskategorie zeigt, welche Objekte zu einem Service gehören und wie sie gewichtet sind — entscheidend für SLA-Bewertungen.

[![Beziehung](../../assets/images/de/grundlagen/kategorien/relation.png)](../../assets/images/de/grundlagen/kategorien/relation.png)

## Felder

### Beziehungsobjekt (Master)

Das Objekt auf der „gebenden" Seite der Beziehung. In einer Beziehung „Server *ist Mitglied von* Cluster" wäre der Server das Master-Objekt. Welches Objekt Master und welches Slave ist, hängt vom Beziehungstyp ab und beeinflusst die Richtung im CMDB-Explorer.

### Beziehungsobjekt (Slave)

Das Objekt auf der „empfangenden" Seite der Beziehung. Im obigen Beispiel wäre der Cluster das Slave-Objekt. Die Unterscheidung zwischen Master und Slave bestimmt die Abhängigkeitsrichtung und damit das Ergebnis der Impact-Analyse.

### Beziehungstyp

Die Art der Beziehung, z.B. „ist Mitglied von", „ist Standort von", „ist verbunden mit" oder „ist zugewiesen an". i-doit bringt zahlreiche vordefinierte Beziehungstypen mit, und über die Verwaltung lassen sich eigene Typen ergänzen. Der Beziehungstyp gibt der Verknüpfung eine semantische Bedeutung — er macht aus einer abstrakten Linie im Graphen eine verständliche Aussage.

### Gewichtung

Die Gewichtung bestimmt, wie stark die Abhängigkeit zwischen den beiden Objekten ist. Die Standardwerte reichen von „Sehr gering" bis „Sehr hoch". Diese Gewichtung fließt in die Berechnung der Service-Verfügbarkeit und die Darstellung im CMDB-Explorer ein: Je höher die Gewichtung, desto größer der Impact bei einem Ausfall des verknüpften Objekts.

### Service

Optionale Zuordnung zu einem IT-Service-Objekt. Wenn eine Beziehung im Kontext eines bestimmten Services relevant ist, kann sie diesem Service zugeordnet werden. Das ermöglicht eine service-bezogene Filterung der Beziehungen.

### Beschreibung

Freitext für zusätzliche Erläuterungen zur Beziehung: Warum besteht diese Abhängigkeit? Ist sie temporär? Gibt es Besonderheiten, die bei Änderungen beachtet werden müssen?

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__RELATION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Alle Objekttypen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Beziehungsobjekt (Master)** | `object1` | Objekt-Browser |
| **Beziehungsobjekt (Slave)** | `object2` | Objekt-Browser |
| **Beziehungstyp** | `relation_type` | Dialog+ (erweiterbare Auswahl) |
| **Gewichtung** | `weighting` | Dialog (Auswahl) |
| **Service** | `itservice` | Dialog (Objekt-Referenz) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__RELATION"
    },
    "id": 1
}
```

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__RELATION",
        "data": {
            "object1": 1042,
            "object2": 2001,
            "relation_type": 1,
            "weighting": 5,
            "description": "Primäre Netzwerkverbindung zum Core-Switch"
        }
    },
    "id": 2
}
```
