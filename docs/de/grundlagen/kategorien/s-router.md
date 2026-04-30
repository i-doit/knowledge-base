---
title: "Kategorie: Routing"
description: Dokumentation der Kategorie Routing in i-doit
icon:
status:
lang: de
---

# Kategorie: Routing

Die Kategorie **Routing** dokumentiert die Routing-Konfiguration eines Router-Objekts. Sie ist eine **spezifische Kategorie** und steht ausschließlich dem Objekttyp **Router** zur Verfügung. Hier wird festgehalten, welches Routing-Protokoll der Router verwendet und welche Gateway-Adressen konfiguriert sind — Informationen, die für die Netzwerkdokumentation und das Troubleshooting unverzichtbar sind.

!!! info "Spezifische Kategorie"
    Routing ist eine spezifische Kategorie, die nur dem Objekttyp Router zugeordnet ist. Für die Dokumentation der Netzwerkanbindung anderer Geräte stehen die globalen Kategorien [Hostadresse](ip.md) und [Port](network-port.md) zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Netzwerktopologie dokumentieren**: Erfasse das eingesetzte Routing-Protokoll (z.B. OSPF, BGP, RIPv2, statisch) und die konfigurierten Gateway-Adressen. Zusammen mit den Kategorien [Netz](s-net.md) und [Port](network-port.md) entsteht ein vollständiges Bild der Netzwerkinfrastruktur.
- **Troubleshooting und Fehleranalyse**: Wenn ein Netzwerksegment nicht erreichbar ist, zeigt ein Blick in die Routing-Kategorie sofort, welches Protokoll der betroffene Router verwendet und welche Gateways konfiguriert sind. Das beschleunigt die Fehlereingrenzung erheblich.
- **Change Management**: Bei Umstellungen des Routing-Protokolls — etwa von statischem Routing auf OSPF — den alten Eintrag archivieren und einen neuen anlegen. Die Änderungshistorie zeigt dann lückenlos, wann welche Konfiguration aktiv war.
- **Compliance und Audits**: In regulierten Umgebungen ist die Dokumentation der Routing-Konfiguration oft vorgeschrieben. Über den Report Manager lässt sich jederzeit ein vollständiger Überblick über alle Router und ihre Protokolle erstellen.

!!! tip "Zusammenspiel mit WAN-Leitungen"
    Router stehen häufig am Übergang zwischen LAN und WAN. Dokumentiere die WAN-Anbindung in der Kategorie [WAN-Leitungen](wan.md) und verknüpfe dort den Router über das Feld **Angeschlossene Router**. So entsteht eine lückenlose Kette von der WAN-Leitung über den Router bis ins lokale Netz.

[![Kategorie Routing](../../assets/images/de/grundlagen/kategorien/s-router.png)](../../assets/images/de/grundlagen/kategorien/s-router.png)

## Felder

### Routing-Protokoll

Das auf dem Router konfigurierte Routing-Protokoll, z.B. `OSPF`, `BGP`, `RIPv2`, `EIGRP` oder `Statisch`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen. Bei Routern, die mehrere Protokolle gleichzeitig verwenden (z.B. OSPF intern und BGP extern), empfiehlt es sich, das primäre Protokoll zu dokumentieren und Details im Beschreibungsfeld zu ergänzen.

### Gateway-Adresse

Die IP-Adresse, die als Gateway konfiguriert ist. Dieses Feld verknüpft auf Adressen, die in der Kategorie [Hostadresse](ip.md) gepflegt sind. Bei Routern mit mehreren Interfaces und unterschiedlichen Gateways pro Netzwerksegment können hier die relevanten Adressen zugewiesen werden.

### Beschreibung

Freitext für zusätzliche Angaben: OSPF-Area, BGP-AS-Nummer, Route-Maps, ACLs, Besonderheiten der Konfiguration oder Verweise auf die Konfigurationsdatei im Versionskontrollsystem.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ROUTER` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Router |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Routing-Protokoll** | `routing_protocol` | Dialog+ (erweiterbare Auswahl) |
| **Gateway-Adresse** | `gateway_address` | Dialog-Liste |
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
        "category": "C__CATS__ROUTER",
        "data": {
            "routing_protocol": "OSPF",
            "description": "OSPF Area 0, Router-ID 10.0.0.1, Redistribution von statischen Routen"
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
        "category": "C__CATS__ROUTER"
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
        "category": "C__CATS__ROUTER",
        "entry": 1,
        "data": {
            "routing_protocol": "BGP",
            "description": "Migration von OSPF auf BGP abgeschlossen, AS 65001."
        }
    },
    "id": 3
}
```
