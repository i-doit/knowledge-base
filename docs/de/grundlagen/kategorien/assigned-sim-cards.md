---
title: "Kategorie: Zugewiesene SIM-Karten"
description: Dokumentation der Kategorie Zugewiesene SIM-Karten in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesene SIM-Karten

Die Kategorie **Zugewiesene SIM-Karten** verknüpft SIM-Karten-Objekte mit einem Endgerät. Sie ist eine **Multi-Value-Kategorie** -- einem Gerät können mehrere SIM-Karten zugeordnet werden, z.B. bei Dual-SIM-Smartphones oder Routern mit mehreren Mobilfunk-Uplinks.

!!! tip "Teil des Mobile Device Managements"
    Diese Kategorie ist ein zentraler Baustein für die Dokumentation mobiler Geräte. Sie zeigt die **Geräteseite** der SIM-Zuordnung: welche SIM-Karten stecken in diesem Handy, Tablet oder Router? Das Gegenstück auf dem SIM-Karten-Objekt sind die Kategorien [SIM-Karte](cards.md) (Kartendaten, PIN/PUK) und **SIM** (Vertragsdaten, Rufnummer, Netzbetreiber). Über die [Vertragszuweisung](contract-assignment.md) am SIM-Objekt lässt sich zusätzlich der Mobilfunkvertrag tracken.

!!! info "Warum eigene SIM-Objekte?"
    In älteren i-doit-Versionen konnten nur 2 SIM-Karten direkt am Gerät hinterlegt werden. Das neue Modell arbeitet mit **eigenständigen SIM-Karten-Objekten**, die über diese Zuweisungskategorie mit dem Gerät verknüpft werden. Vorteil: beliebig viele SIMs pro Gerät, saubere Trennung von Karten-, Vertrags- und Gerätedaten, und die Möglichkeit, den Lebenszyklus einer SIM-Karte unabhängig vom Gerät zu dokumentieren (z.B. SIM wandert vom alten ins neue Handy).

## Verwendung

Typische Anwendungsfälle:

- **Gerätezuordnung dokumentieren**: Halte fest, welche SIM-Karte in welchem Mobiltelefon, Tablet oder IoT-Router steckt. Bei einem Geräteverlust ist sofort klar, welche Rufnummer und welcher Vertrag betroffen sind und gesperrt werden müssen.
- **Mobilfunkkosten zuordnen**: Über die Verknüpfung zwischen Gerät und SIM-Karte lässt sich nachvollziehen, welche Kosten durch welches Gerät verursacht werden. Das ist besonders relevant, wenn Mitarbeiter Dienstgeräte mit SIM-Karten nutzen und die Kosten auf Kostenstellen verteilt werden sollen.
- **Vertragsverwaltung und Lifecycle**: Wenn ein Mobilfunkvertrag ausläuft, zeigt ein Report alle Geräte mit SIM-Karten dieses Vertrags. Umgekehrt lässt sich beim Ausmustern eines Geräts schnell prüfen, ob die SIM-Karte zurückgegeben oder einem neuen Gerät zugeordnet werden muss.
- **IoT- und M2M-Szenarien**: Router, Gateways und IoT-Geräte nutzen häufig SIM-Karten für die Mobilfunkanbindung. Die Zuordnung hier dokumentiert, welche SIM in welchem Feldgerät steckt -- bei Standortwechseln oder Ausfällen eine kritische Information.



## Felder

### Zugewiesene SIM-Karten

Ein Objekt-Browser-Feld, über das SIM-Karten-Objekte mit dem Gerät verknüpft werden. Der Objekt-Browser filtert automatisch auf Objekte, die die Kategorie SIM-Karte (`C__CATG__CARDS`) besitzen -- du siehst also nur Objekte, die tatsächlich als SIM-Karte angelegt sind.

Die Verknüpfung ist bidirektional: Wird hier eine SIM-Karte zugeordnet, erscheint auf dem SIM-Karten-Objekt automatisch die Rückverknüpfung zum Gerät. So lässt sich die Zuordnung von beiden Seiten nachvollziehen.

!!! warning "SIM-Karten-Objekte müssen existieren"
    Bevor du hier eine Zuordnung vornehmen kannst, muss das SIM-Karten-Objekt bereits in i-doit angelegt sein. Lege zuerst ein Objekt vom Typ *SIM-Karte* an und pflege dort die relevanten Daten (Rufnummer, ICCID, Netzbetreiber, Vertragsinformationen), bevor du es hier dem Gerät zuweist.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__ASSIGNED_SIM_CARDS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Mobiltelefon, SIM-Karte, Tablet u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesene SIM-Karten** | `isys_obj__id` | Objekt-Browser (Verknüpfung) |
| **Zugewiesene SIM-Karten (Karten-Eintrag)** | `isys_catg_cards_list__id` | Objekt-Browser (Verknüpfung) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS",
        "data": {
            "isys_obj__id": 1205
        }
    },
    "id": 1
}
```

!!! note "Objekt-ID der SIM-Karte"
    Das Feld `isys_obj__id` erwartet die **Objekt-ID** des SIM-Karten-Objekts. Die ID lässt sich z.B. über `cmdb.objects.read` mit dem Typfilter für SIM-Karten ermitteln.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS"
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
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS",
        "entry": 3,
        "data": {
            "isys_obj__id": 1310
        }
    },
    "id": 3
}
```
