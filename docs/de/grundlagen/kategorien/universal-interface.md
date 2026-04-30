---
title: "Kategorie: Schnittstelle"
description: Dokumentation der Kategorie Schnittstelle in i-doit
icon:
status:
lang: de
---

# Kategorie: Schnittstelle

Die Kategorie **Schnittstelle** dokumentiert die physischen Anschlüsse eines Objekts – USB-Ports, serielle und parallele Schnittstellen, Thunderbolt-Buchsen, Displayanschlüsse und ähnliche Verbindungspunkte, die kein Netzwerk-Port sind. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, etwa wenn ein Server über mehrere USB-Ports, einen seriellen Management-Port und einen VGA-Ausgang verfügt.

Diese Kategorie wird oft übersehen, weil Netzwerk-Ports und Stromversorgung im Vordergrund stehen. Dabei sind Schnittstellen für drei Bereiche unverzichtbar: **Sicherheitsaudits** (welche USB-Ports sind aktiv und könnten als Angriffsvektor dienen?), **Peripherie-Tracking** (welche Geräte hängen wo?) und **Hardware-Troubleshooting** (ist die serielle Konsole korrekt verbunden?). Über das Feld *Verbunden mit* zeigt die Kategorie, welche Geräte tatsächlich angeschlossen sind — KVM-Switches, serielle Konsolen, USB-Dongles für Lizenzierung oder externe Speichergeräte.

!!! tip "USB-Ports und Sicherheitsaudits"
    In sicherheitskritischen Umgebungen (ISO 27001, BSI-Grundschutz) müssen USB-Ports dokumentiert und deren Status nachgewiesen werden. Nutze das Beschreibungsfeld, um den Sperrstatus festzuhalten: „Deaktiviert per BIOS-Richtlinie", „Physisch versiegelt (Sicherheitssiegel #2025-042)" oder „Freigegeben für HID-Geräte". Ein Report über alle Schnittstellen vom Typ USB zeigt dem Auditor in Sekunden den vollständigen Überblick.

## Verwendung

Typische Anwendungsfälle:

- **Peripherie-Dokumentation**: Erfasse, welche physischen Anschlüsse ein Gerät besitzt und welche Peripheriegeräte daran angeschlossen sind. Über das Feld *Verbunden mit* lässt sich eine direkte Verbindung zu einem anderen Objekt herstellen — beispielsweise ein Monitor am DisplayPort, ein Scanner am USB-Port oder ein KVM-Switch an der seriellen Schnittstelle. So ist jederzeit nachvollziehbar, welche Peripherie an welchem Server hängt.
- **Hardware-Inventar vervollständigen**: Zusammen mit den Kategorien [Port](network-port.md), [CPU](cpu.md) und Speicher entsteht ein vollständiges Bild der physischen Ausstattung. Besonders bei Patch Panels und PDUs ist die lückenlose Dokumentation aller Anschlüsse entscheidend.
- **Sicherheitsaudits und Compliance**: In regulierten Umgebungen müssen USB-Ports und andere Schnittstellen erfasst und deren Status dokumentiert werden. Die Kombination aus Verbindungstyp (USB), Steckertyp (Typ-A) und Beschreibung (Sperrstatus) liefert dem Auditor ein vollständiges Bild. Ein Report „alle aktiven USB-Schnittstellen an Servern im Serverraum A" beantwortet typische Audit-Fragen direkt.
- **Troubleshooting bei Out-of-Band-Management**: Serielle Konsolen-Ports (COM1, COM2) sind die letzte Rettung, wenn Netzwerkzugang und IPMI/iLO gleichzeitig ausfallen. Ist dokumentiert, welcher Server über welchen seriellen Port mit welchem Konsolenserver verbunden ist, spart das im Ernstfall wertvolle Minuten.
- **Verkabelung nachvollziehen**: Über die Connector-Felder wird jede Schnittstelle Teil des i-doit-Verkabelungsmodells. So lässt sich im Kabelweg nachvollziehen, welcher Anschluss über welches Kabel mit welchem Gegenstück verbunden ist.

[![Schnittstelle](../../assets/images/de/grundlagen/kategorien/universal-interface.png)](../../assets/images/de/grundlagen/kategorien/universal-interface.png)

## Felder

### Bezeichnung

Der Name oder die Kennung der Schnittstelle, z.B. `USB 3.0 Front links`, `COM1` oder `Thunderbolt 4 (Typ-C)`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Eine sprechende Benennung erleichtert die Zuordnung, wenn ein Objekt viele Anschlüsse besitzt.

### Verbindungstyp

Die Art der Verbindung, z.B. `USB`, `Seriell`, `Parallel`, `Thunderbolt` oder `HDMI`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Der Verbindungstyp klassifiziert die Schnittstelle auf einer höheren Ebene und eignet sich gut für die Filterung in Reports.

### Steckertyp

Der konkrete Stecker- oder Buchsentyp, z.B. `USB Typ-A`, `USB Typ-C`, `DB-9`, `DB-25` oder `Mini-DisplayPort`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. In Kombination mit dem Verbindungstyp ergibt sich ein präzises Bild der physischen Schnittstelle.

### Verbunden mit

Das Objekt und der Anschluss, mit dem diese Schnittstelle verbunden ist. Über den Objekt-Browser lässt sich ein bestehendes Objekt auswählen und dessen Connector zuordnen. So entsteht eine bidirektionale Verbindung, die im Verkabelungsmodell von i-doit sichtbar ist – beispielsweise ein KVM-Switch, der per USB mit einem Server verbunden ist.

### Zugewiesener Connector

Die interne ID des Connector-Eintrags, der dieser Schnittstelle zugeordnet ist. Dieses Feld wird in der Regel automatisch von i-doit verwaltet und muss nur bei API-basierten Imports manuell gesetzt werden.

### Zugewiesener Input/Output

Die interne ID des zugehörigen Input/Output-Gegenstücks im Connector-Modell. Auch dieses Feld wird typischerweise automatisch gepflegt und ist vor allem bei der API-Nutzung relevant.

### Beschreibung

Freitext für zusätzliche Angaben: Position am Gehäuse (Front/Rückseite), Sperrstatus, maximale Datenrate, Firmware-Version des Controllers oder Hinweise zur Nutzungsfreigabe.

### Beziehungsrichtung

Die Richtung der Beziehung im i-doit-Beziehungsmodell. Wird automatisch gesetzt, wenn eine Verbindung über das Feld *Verbunden mit* hergestellt wird. Bei manueller API-Nutzung kann die Richtung explizit angegeben werden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__UNIVERSAL_INTERFACE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Server, Kabel, Mobilfunkvertrag, Client, Monitor, Patch Panel, PDU, Drucker u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Verbindungstyp** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Steckertyp** | `plug` | Dialog+ (erweiterbare Auswahl) |
| **Verbunden mit** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
| **Zugewiesener Connector** | `connector` | Ganzzahl |
| **Zugewiesener Input/Output** | `connector_sibling` | Ganzzahl |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |
| **Beziehungsrichtung** | `relation_direction` | Ganzzahl |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__UNIVERSAL_INTERFACE",
        "data": {
            "title": "USB 3.0 Front links",
            "type": "USB",
            "plug": "USB Typ-A",
            "description": "Frontpanel, oberer Port. Für Peripherie freigegeben."
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
        "category": "C__CATG__UNIVERSAL_INTERFACE"
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
        "category": "C__CATG__UNIVERSAL_INTERFACE",
        "entry": 45,
        "data": {
            "title": "USB 3.0 Front links",
            "description": "Port deaktiviert per BIOS-Einstellung. Sicherheitsrichtlinie SR-2025-03."
        }
    },
    "id": 3
}
```
