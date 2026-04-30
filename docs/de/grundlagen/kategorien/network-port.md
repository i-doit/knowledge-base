---
title: "Kategorie: Port"
description: Dokumentation der Kategorie Port in i-doit
icon:
status:
lang: de
---

# Kategorie: Port

Die Kategorie **Port** dokumentiert die physischen und logischen Netzwerk-Ports eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei einem Switch mit 48 Ethernet-Ports oder einem Server mit mehreren Netzwerkkarten.

Ports sind die **Brücke zwischen logischer und physischer Netzwerkdokumentation**: Auf der logischen Seite verknüpfen sie über die [Hostadresse](ip.md) IP-Adressen und Subnetze, auf der physischen Seite verbinden sie sich über das Feld *Verbunden mit* und die Kategorie [Anschluss](connector.md) mit der Verkabelungsinfrastruktur. Ohne gepflegte Port-Kategorie fehlt der entscheidende Baustein, um die Frage „Welcher Server hängt physisch an welchem Switch-Port und in welchem VLAN?" beantworten zu können.

!!! tip "Netzwerksegmentierung und Sicherheitsaudits"
    Die VLAN-Zuordnung an Ports ist nicht nur eine technische Feinheit — sie ist die Grundlage für Netzwerksegmentierungs-Audits. Auditoren prüfen, ob Produktions- und Entwicklungssysteme tatsächlich in getrennten VLANs liegen. Sind die Zuordnungen in i-doit gepflegt, lässt sich diese Frage per Report in Sekunden beantworten statt manuell an jedem Switch nachzuschauen.

## Verwendung

Typische Anwendungsfälle:

- **Netzwerk-Dokumentation**: Erfasse jeden Port mit Typ, Geschwindigkeit, MAC-Adresse und Standard. Zusammen mit den Kategorien [Schnittstelle](universal-interface.md) und [Hostadresse](ip.md) entsteht ein vollständiges Netzwerk-Profil des Objekts.
- **Verkabelung und Patching**: Über die Felder *Verbunden mit* und *Kabel* lässt sich die physische Verbindung zwischen Ports und Patchfeldern lückenlos abbilden – vom Server-Port über das Patchpanel bis zum Switch. Das Feld `assigned_connector` verknüpft dabei direkt mit der Patching-Infrastruktur: Patchpanels, Wanddosen und Verteilerschränke werden Teil einer durchgängigen Kabelkette.
- **VLAN-Zuordnung**: Ports können Layer-2-Netzen zugewiesen werden. Trunk-Ports erhalten mehrere VLANs, Access-Ports ein Standard-VLAN. So wird die logische Netzwerksegmentierung dokumentiert — die Voraussetzung für fundierte Segmentierungsberichte und Compliance-Nachweise.
- **Troubleshooting bei Speed/Duplex-Mismatches**: Geschwindigkeit und Duplex-Modus werden häufig unterschätzt, sind aber eine klassische Fehlerquelle: Ein Port auf 100 Mbit/s Half-Duplex, die Gegenstelle auf Autonegotiation — das Ergebnis sind Paketverluste und schlechte Performance. Sind diese Werte in i-doit dokumentiert, lässt sich der Fehler innerhalb von Minuten identifizieren statt stundenlang am Switch zu suchen.
- **MAC-Adressen-Tracking**: Die dokumentierte MAC-Adresse ermöglicht das Aufspüren unbekannter oder nicht autorisierter Geräte im Netzwerk. Ein Report über alle MAC-Adressen im Abgleich mit dem Switch-Output zeigt sofort, ob ein fremdes Gerät angeschlossen wurde — essentiell für die Netzwerksicherheit.
- **Kapazitätsplanung**: Über den Report Manager lässt sich auswerten, welche Ports aktiv sind, welche Geschwindigkeiten genutzt werden und wo noch freie Kapazitäten vorhanden sind. Ein Report „Switches mit weniger als 10 % freien Ports" warnt rechtzeitig vor Engpässen.

[![Port](../../assets/images/de/grundlagen/kategorien/network-port.png)](../../assets/images/de/grundlagen/kategorien/network-port.png)

## Felder

### Bezeichnung

Der Name des Ports, z.B. `eth0`, `GigabitEthernet0/1` oder `ens192`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Typ

Der Port-Typ, z.B. `Ethernet`, `FC` (Fibre Channel) oder `10GBase-T`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen.

### Modus

Der Betriebsmodus des Ports: `Access` (ein VLAN) oder `Trunk` (mehrere VLANs). Relevant für die VLAN-Dokumentation und die korrekte Zuordnung von Layer-2-Netzen.

### Stecker

Der physische Steckertyp, z.B. `RJ-45`, `SFP`, `SFP+` oder `LC`. Dialog+-Feld für die Dokumentation der physischen Anschlussart.

### Autonegotiation

Gibt an, ob der Port Geschwindigkeit und Duplex automatisch mit der Gegenstelle aushandelt (`Ja`) oder ob feste Werte konfiguriert sind (`Nein`).

### Duplex

Der Duplex-Modus: `Full` (gleichzeitiges Senden und Empfangen) oder `Half`. Bei modernen Gigabit-Verbindungen ist Full-Duplex Standard.

### Geschwindigkeit und Einheit

Die Port-Geschwindigkeit als Dezimalzahl. Die Einheit wird separat als `Mbit/s` oder `Gbit/s` angegeben, z.B. `1` + `Gbit/s` für einen Gigabit-Port.

### Standard

Der Netzwerkstandard, z.B. `1000BASE-T`, `10GBASE-SR` oder `100BASE-TX`. Dialog+-Feld – eigene Werte lassen sich ergänzen.

### MAC-Adresse

Die MAC-Adresse des Ports im Format `AA:BB:CC:DD:EE:FF`. Wichtig für die eindeutige Identifikation auf Layer 2.

### MTU

Die Maximum Transmission Unit in Bytes, z.B. `1500` (Standard-Ethernet) oder `9000` (Jumbo Frames).

### Verbunden mit

Über den Objekt-Browser wird die Gegenstelle ausgewählt – ein anderer Port oder ein Anschluss an einem Patchpanel. So entsteht die physische Verbindungskette.

### Kabel

Verknüpfung mit einem Kabel-Objekt. Ermöglicht die Dokumentation des verwendeten Kabels (Typ, Länge, Bezeichnung) als eigenständiges CMDB-Objekt.

### Aktiv

Gibt an, ob der Port aktiv (`Ja`) oder deaktiviert (`Nein`) ist. Nützlich für die Kapazitätsplanung und das Erkennen ungenutzter Ports.

### Hostadresse

Zugeordnete IP-Adressen aus der Kategorie Hostadresse. Verknüpft den Port mit seiner logischen Adressierung.

### Layer-2-Netz-Zuordnung

VLAN-Zuordnung des Ports. Bei Trunk-Ports können mehrere Layer-2-Netze zugewiesen werden. Die VLANs müssen zuvor als eigene Objekte vom Typ *Layer-2-Netz* angelegt sein.

### Standard-VLAN

Das Native VLAN bzw. Standard-VLAN des Ports. Bei Access-Ports ist dies das einzige VLAN, bei Trunk-Ports das untagged VLAN.

### Beschreibung

Freitext für zusätzliche Angaben: Konfigurationshinweise, Port-Security-Einstellungen, Besonderheiten oder Referenzen auf externe Dokumentation.

!!! note "Interne Verknüpfungsfelder"
    Die Felder `connector`, `connector_sibling`, `relation_direction`, `interface` und `hba` sind interne Felder, die Verknüpfungen zu Anschlüssen, Schnittstellen und HBA-Controllern abbilden. Sie werden von i-doit automatisch verwaltet und müssen in der Regel nicht manuell gepflegt werden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NETWORK_PORT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Router, Switch, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Typ** | `port_type` | Dialog+ (erweiterbare Auswahl) |
| **Modus** | `port_mode` | Dialog+ (erweiterbare Auswahl) |
| **Stecker** | `plug_type` | Dialog+ (erweiterbare Auswahl) |
| **Autonegotiation** | `negotiation` | Dialog (Auswahl) |
| **Duplex** | `duplex` | Dialog (Auswahl) |
| **Geschwindigkeit** | `speed` | Dezimalzahl |
| **Geschwindigkeit-Einheit** | `speed_type` | Dialog (Auswahl) |
| **Standard** | `standard` | Dialog+ (erweiterbare Auswahl) |
| **MAC-Adresse** | `mac` | Text |
| **MTU** | `mtu` | Text |
| **Verbunden mit** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
| **Kabel** | `cable` | Objekt-Browser (Verknüpfung) |
| **Aktiv** | `active` | Dialog (Auswahl) |
| **Hostadresse** | `addresses` | Dialog-Liste |
| **Layer-2-Netz-Zuordnung** | `layer2_assignment` | n2m (Mehrfachzuordnung) |
| **Standard-VLAN** | `default_vlan` | Dialog (Auswahl) |
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
        "category": "C__CATG__NETWORK_PORT",
        "data": {
            "title": "GigabitEthernet0/1",
            "port_type": "Ethernet",
            "port_mode": "Access",
            "plug_type": "RJ-45",
            "negotiation": 1,
            "duplex": "Full",
            "speed": 1,
            "speed_type": 2,
            "standard": "1000BASE-T",
            "mac": "AA:BB:CC:DD:EE:01",
            "mtu": "1500",
            "active": 1,
            "description": "Uplink zum Core-Switch, Port-Security aktiviert"
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
        "category": "C__CATG__NETWORK_PORT"
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
        "category": "C__CATG__NETWORK_PORT",
        "entry": 45,
        "data": {
            "speed": 10,
            "speed_type": 2,
            "standard": "10GBASE-SR",
            "plug_type": "SFP+",
            "description": "Upgrade 2026-04: 10G SFP+ Modul eingesetzt"
        }
    },
    "id": 3
}
```
