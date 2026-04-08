---
title: "Kategorie: Logische Ports"
description: Dokumentation der Kategorie Logische Ports in i-doit
icon:
status:
lang: de
---

# Kategorie: Logische Ports

Die Kategorie **Logische Ports** dokumentiert die virtuellen Netzwerkschnittstellen eines Objekts -- also alle Interfaces, die nicht direkt einer physischen Buchse entsprechen. Sie ist eine **Multi-Value-Kategorie** und das logische Gegenstück zur Kategorie [Port](network-port.md), die physische Netzwerkanschlüsse abbildet.

!!! info "Physische Ports vs. logische Ports"
    Die Kategorie [Port](network-port.md) dokumentiert die **physischen** Netzwerkbuchsen eines Geräts (z.B. `eth0`, `Gi0/1`). Logische Ports hingegen sind **virtuelle Konstrukte**, die auf physischen Ports aufsetzen: VLAN-Interfaces, Bond-Interfaces, Bridges, LAGs oder Loopback-Interfaces. Ein logischer Port hat oft eine eigene MAC-Adresse und eigene IP-Adressen, existiert aber nur in der Software-Konfiguration des Betriebssystems oder der Netzwerkkomponente.

## Verwendung

Typische Anwendungsfälle:

- **VLAN-Dokumentation**: Auf einem Switch oder Router wird pro VLAN ein logisches Interface angelegt (z.B. `vlan100`, `irb.200`). Über das Feld **Netz(e)** wird der logische Port dem zugehörigen Layer-2-Netz zugeordnet. So entsteht eine vollständige Zuordnung, welches VLAN auf welchem Gerät konfiguriert ist -- entscheidend für Netzwerkplanung und Troubleshooting.
- **Link Aggregation und Bonding**: Wenn zwei oder mehr physische Ports zu einem Bond oder einer LACP-Gruppe zusammengefasst werden, bildet der logische Port die resultierende Schnittstelle ab. Über das Feld **Port-Zuordnung** werden die beteiligten physischen Ports referenziert. So ist jederzeit nachvollziehbar, welche physischen Leitungen einen Bond bilden.
- **Bridge-Interfaces**: Bei Virtualisierungs-Hosts werden häufig Bridge-Interfaces erstellt, über die VMs mit dem physischen Netzwerk verbunden werden. Der logische Port dokumentiert die Bridge (z.B. `br0`, `virbr0`), und die Port-Zuordnung zeigt, welcher physische Port darunter liegt.
- **Loopback- und Management-Interfaces**: Router und Firewalls verwenden Loopback-Interfaces (`lo0`, `Loopback0`) für Management-Zugriff und Routing-Protokolle. Diese lassen sich als logische Ports mit eigener IP-Adresse dokumentieren.
- **Netzwerk-Inventarisierung per JDisc oder i-doit Discovery**: Automatische Scans erfassen logische Interfaces und tragen sie direkt in diese Kategorie ein. Die manuelle Pflege entfällt in vielen Fällen.

[![Logische Ports](../../assets/images/de/grundlagen/kategorien/network-log-port.png)](../../assets/images/de/grundlagen/kategorien/network-log-port.png)

## Felder

### Bezeichnung

Der Name des logischen Interfaces, wie er auf dem Gerät konfiguriert ist: `bond0`, `vlan100`, `br-lan`, `Loopback0`, `Port-Channel1` usw. Dieser Wert erscheint in der Listenansicht und in Reports und sollte exakt der Konfiguration auf dem Gerät entsprechen, um eine eindeutige Zuordnung zu ermöglichen.

### Netz(e)

Verknüpfung zu einem oder mehreren Layer-2-Netz-Objekten (Typ „Layer-2-Netz"). Bei VLAN-Interfaces ist dies die zentrale Zuordnung: Das logische Interface `vlan100` wird mit dem Layer-2-Netz-Objekt „VLAN 100 -- Management" verknüpft. Es können mehrere Netze zugeordnet werden, z.B. bei Trunk-Interfaces, die mehrere VLANs transportieren.

### MAC

Die MAC-Adresse des logischen Interfaces. Bei Bond-Interfaces ist dies typischerweise die MAC-Adresse des ersten Slave-Ports. Bei VLAN-Interfaces erbt sie meist die MAC des physischen Parent-Ports. Die MAC-Adresse ist für die Netzwerkanalyse und das Troubleshooting auf Layer 2 relevant.

### Typ

Die Art des logischen Interfaces, z.B. `Bond`, `Bridge`, `VLAN`, `Loopback` oder `LAG`. Dialog+-Feld -- eigene Typen können bei Bedarf ergänzt werden. Dieser Wert ermöglicht eine gezielte Filterung in Reports: So lassen sich z.B. alle Bond-Interfaces oder alle VLAN-Interfaces im Netzwerk auflisten.

### Port-Zuordnung

Die Zuordnung der physischen Ports, die diesem logischen Port zugrunde liegen. Bei einem Bond-Interface werden hier die beteiligten physischen Ports (z.B. `eth0`, `eth1`) verknüpft. Bei einem VLAN-Interface ist dies der physische Port, auf dem das VLAN-Tagging stattfindet. Diese Verknüpfung schlägt die Brücke zwischen logischer und physischer Netzwerkdokumentation.

### Parent-Port

Verweis auf einen übergeordneten logischen Port. Dies ermöglicht die Abbildung hierarchischer Strukturen -- z.B. ein VLAN-Interface, das auf einem Bond-Interface aufsetzt: `bond0.100` hat als Parent-Port `bond0`. Ohne diese Hierarchie wäre die tatsächliche Netzwerktopologie nicht korrekt abbildbar.

### Standard

Der Netzwerkstandard des logischen Interfaces, z.B. `802.1Q` (VLAN-Tagging), `802.3ad` (LACP) oder `802.1D` (Bridging). Dialog+-Feld für eigene Ergänzungen. Der Standard gibt an, welches Protokoll hinter dem logischen Interface steckt.

### Aktiv

Gibt an, ob das logische Interface aktuell aktiv (`Ja`) oder deaktiviert (`Nein`) ist. Deaktivierte Interfaces bleiben in der Dokumentation erhalten, werden aber als inaktiv gekennzeichnet -- nützlich, um temporär stillgelegte VLANs oder Bonds nachzuverfolgen.

### Hostadresse

Die dem logischen Port zugewiesenen IP-Adressen. Hier werden IP-Adressen aus der Kategorie Hostadresse des Objekts verknüpft. Ein logischer Port kann mehrere IP-Adressen tragen -- z.B. bei Anycast-Konfigurationen oder Secondary-Adressen.

### Angeschlossen an Connector

Verknüpfung zu einem logischen Port auf einem anderen Objekt -- also die logische Gegenstelle einer Verbindung. Dies ermöglicht die Dokumentation von Punkt-zu-Punkt-Verbindungen auf logischer Ebene, z.B. zwischen zwei Switches, die über ein VLAN-Trunk-Interface miteinander kommunizieren.

### Beschreibung

Freitext für ergänzende Details: LACP-Modus (active/passive), Hash-Policy des Bonds (layer2, layer3+4), VLAN-ID falls nicht im Titel enthalten, STP-Konfiguration oder Hinweise zur Verwendung in der Virtualisierungsumgebung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NETWORK_LOG_PORT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Chassis, Blade Server, Client, PDU, Drucker, Router, Server, Switch u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Netz(e)** | `net` | n2m (Mehrfachverknüpfung) |
| **MAC** | `mac` | Text |
| **Typ** | `port_type` | Dialog+ (erweiterbare Auswahl) |
| **Port-Zuordnung** | `ports` | dialog_list |
| **Parent-Port** | `parent` | Dialog (Auswahl) |
| **Standard** | `standard` | Dialog+ (erweiterbare Auswahl) |
| **Aktiv** | `active` | Dialog (Auswahl: Ja/Nein) |
| **Hostadresse** | `addresses` | dialog_list |
| **Angeschlossen an Connector** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__NETWORK_LOG_PORT",
        "data": {
            "title": "bond0",
            "mac": "00:50:56:9A:3C:01",
            "port_type": "Bond",
            "standard": "802.3ad",
            "active": 1,
            "description": "LACP Bond, Mode 802.3ad, Hash-Policy layer3+4, Slaves: eth0 + eth1"
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
        "object": 1042,
        "category": "C__CATG__NETWORK_LOG_PORT"
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
        "object": 1042,
        "category": "C__CATG__NETWORK_LOG_PORT",
        "entry": 8,
        "data": {
            "active": 0,
            "description": "Bond deaktiviert am 2026-03-15, VLAN-Migration auf neuen Switch abgeschlossen"
        }
    },
    "id": 3
}
```
