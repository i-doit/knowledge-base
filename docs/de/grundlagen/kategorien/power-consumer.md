---
title: "Kategorie: Stromverbraucher"
description: Dokumentation der Kategorie Stromverbraucher in i-doit
icon:
status:
lang: de
---

# Kategorie: Stromverbraucher

Die Kategorie **Stromverbraucher** dokumentiert die Netzteile eines Objekts und deren elektrische Kenndaten. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Servern mit zwei redundanten Netzteilen oder Blade-Chassis mit mehreren Einspeisungen.

Die hier dokumentierten Watt-Werte sind die **Grundlage für alle RZ-Kapazitätsberichte**: Gesamtleistungsaufnahme pro Rack, pro Reihe, pro Raum, pro Standort. Ohne gepflegte Stromverbraucher-Kategorie bleibt die Frage „Passt ein weiterer Server in dieses Rack, ohne die Stromversorgung zu überlasten?" unbeantwortet. In Kombination mit der Kategorie [Anschluss](connector.md) entsteht zudem die komplette Strom-Topologie: Vom Einspeisepunkt über die PDU bis zum einzelnen Netzteil ist jeder Anschluss nachvollziehbar.

!!! tip "BTU und Kühlungsplanung"
    Der BTU-Wert wird oft vernachlässigt, ist aber die zentrale Kenngröße für die Klimadimensionierung. Faustformel: **1 Watt ≈ 3,412 BTU/h**. Ein Rack mit 10 kW Gesamtlast erzeugt rund 34.120 BTU/h Abwärme. Ist die Kühlung nur für 30.000 BTU/h ausgelegt, droht Überhitzung. Reports, die den BTU-Wert pro Raum aggregieren, sind ein direktes Werkzeug für das Facility Management.

## Verwendung

Typische Anwendungsfälle:

- **Kapazitätsplanung im Rechenzentrum**: Erfasse Spannung, Leistungsaufnahme und Stromstärke jedes Netzteils. Über den Report Manager lässt sich die Gesamtlast pro Rack, Reihe oder Raum aggregieren — die Grundlage für eine belastbare Kapazitätsplanung der Stromversorgung. Ein Report „Racks mit mehr als X kW Gesamtlast" identifiziert Überlastungskandidaten, bevor der Leitungsschutzschalter auslöst.
- **USV-Dimensionierung**: Die Summe aller dokumentierten Watt-Werte zeigt, welche USV-Kapazität für eine Versorgungszone benötigt wird. Werden neue Geräte eingeplant, erkennt man frühzeitig, ob die vorhandene USV-Leistung noch ausreicht.
- **Wärmelast und Klimaplanung**: Das Feld BTU erfasst die Wärmeabgabe in BTU/h. Dieser Wert fließt direkt in die Dimensionierung der Kühlung ein — unverzichtbar bei der Planung neuer Rack-Belegungen oder ganzer Rechenzentrumsräume.
- **Redundanz-Dokumentation**: Durch separate Einträge für jedes Netzteil (z.B. „Netzteil 1 – Feed A" und „Netzteil 2 – Feed B") wird die Redundanzarchitektur sichtbar. Die Verknüpfung über das Feld *Zielobjekt* zeigt, an welcher PDU oder Stromschiene jedes Netzteil angeschlossen ist. So lässt sich auf einen Blick prüfen, ob beide Netzteile tatsächlich an **verschiedenen** Feeds hängen — eine häufige Fehlerquelle bei vermeintlich redundanter Stromversorgung.
- **Verknüpfung zur Anschluss-Kategorie**: Das Feld `assigned_connector` verlinkt den Stromverbraucher mit einem konkreten Anschluss an der PDU (Kategorie [Anschluss](connector.md)). Damit ist nicht nur dokumentiert, *dass* ein Server Strom bezieht, sondern auch *von welchem Port an welcher PDU*. Bei einem PDU-Ausfall zeigt ein Klick, welche Server betroffen sind.

[![Stromverbraucher](../../assets/images/de/grundlagen/kategorien/power-consumer.png)](../../assets/images/de/grundlagen/kategorien/power-consumer.png)

## Felder

### Bezeichnung

Der Name des Netzteil-Eintrags, z.B. `Netzteil 1 (redundant)` oder `PSU A – Feed Left`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Eine sprechende Bezeichnung erleichtert die Zuordnung, besonders bei Geräten mit mehreren Netzteilen.

### Aktiv

Gibt an, ob der Stromverbraucher aktuell aktiv ist. Dialog-Feld mit den Werten `Ja` und `Nein`. Inaktive Einträge können z.B. ausgebaute oder als Reserve vorgehaltene Netzteile kennzeichnen.

### Hersteller

Der Hersteller des Netzteils, z.B. `Dell`, `HP` oder `Emerson`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Bei integrierten Netzteilen wird oft der Server-Hersteller eingetragen.

### Modell

Die Modellbezeichnung des Netzteils, z.B. `L1400E-S1` oder `DPS-750AB-3`. Dialog+-Feld mit erweiterbarer Auswahl. Die exakte Modellnummer ist bei der Ersatzteilbeschaffung und bei Garantiefällen entscheidend.

### Volt

Die Eingangsspannung in Volt. In Europa ist der Standardwert `230`, in Nordamerika `120`. Bei Geräten mit Weitbereichsnetzteilen (100–240 V) wird die tatsächlich anliegende Spannung am Standort dokumentiert.

### Watt

Die Leistungsaufnahme in Watt. Dieser Wert ist die zentrale Kenngröße für die Kapazitätsplanung: Er bestimmt, wie viel elektrische Leistung das Gerät aus der Versorgung zieht. Dokumentiert wird üblicherweise die maximale Nennleistung laut Typenschild.

### Ampere

Die Stromstärke in Ampere. Der Wert ergibt sich physikalisch aus Watt und Volt, wird aber separat dokumentiert, um die Absicherung der Stromkreise prüfen zu können – ein 16-A-Stromkreis darf nicht mit mehr als 16 A belastet werden.

### BTU

Die Wärmeabgabe in BTU/h (British Thermal Units pro Stunde). Textfeld, da der Wert häufig aus Herstellerdatenblättern übernommen wird. Faustformel: 1 Watt ≈ 3,412 BTU/h. Dieser Wert ist die Grundlage für die Dimensionierung der Kühlung im Rechenzentrum.

### Zielobjekt

Verknüpfung über den Objekt-Browser zum Stromanschluss, an dem das Netzteil physisch angeschlossen ist – typischerweise ein Anschluss an einer PDU (Power Distribution Unit) oder einer Stromschiene. Über diese Verknüpfung lässt sich die gesamte Stromverkabelung vom Einspeisepunkt bis zum Endverbraucher nachvollziehen.

### Beschreibung

Freitext für zusätzliche Angaben: Effizienzklasse (80 PLUS Gold/Platinum), Firmware-Version, Wartungsintervalle, Besonderheiten der Verkabelung oder Hinweise zur Redundanzkonfiguration.

!!! note "Interne Felder"
    Die Felder `connector` und `connector_sibling` sind interne Ganzzahl-Felder, die i-doit für die Verwaltung der physischen Anschlussbeziehungen verwendet. Sie werden automatisch befüllt und sollten über die API nicht manuell gesetzt werden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__POWER_CONSUMER` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Blade Chassis, Gehäuse, Monitor, Drucker, Router u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Aktiv** | `active` | Dialog (Auswahl) |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `model` | Dialog+ (erweiterbare Auswahl) |
| **Volt** | `volt` | Dezimalzahl |
| **Watt** | `watt` | Dezimalzahl |
| **Ampere** | `ampere` | Dezimalzahl |
| **BTU** | `btu` | Text |
| **Zielobjekt** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__POWER_CONSUMER",
        "data": {
            "title": "Netzteil 1 (redundant)",
            "active": 1,
            "manufacturer": "Dell",
            "model": "L1400E-S1",
            "volt": 230,
            "watt": 1400,
            "ampere": 6.1,
            "btu": "4777",
            "description": "PSU A, Feed Left, 80 PLUS Platinum, Redundanz-Partner: Netzteil 2"
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
        "category": "C__CATG__POWER_CONSUMER"
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
        "category": "C__CATG__POWER_CONSUMER",
        "entry": 32,
        "data": {
            "watt": 1600,
            "description": "Austausch 2025-06: Netzteil auf 1600W-Modell aufgerüstet."
        }
    },
    "id": 3
}
```
