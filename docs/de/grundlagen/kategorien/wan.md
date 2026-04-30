---
title: "Kategorie: WAN-Leitungen"
description: Dokumentation der Kategorie WAN-Leitungen in i-doit
icon:
status:
lang: de
---

# Kategorie: WAN-Leitungen

Die Kategorie **WAN-Leitungen** dokumentiert Wide-Area-Network-Verbindungen eines Objekts. Sie ist eine **Multi-Value-Kategorie** — pro Objekt können beliebig viele WAN-Verbindungen angelegt werden, z.B. bei Standorten mit redundanter Anbindung über verschiedene Provider. Die Kategorie erfasst Bandbreiten, Provider-Informationen, Circuit-IDs und die Verknüpfung zu den angebundenen Netzen und Routern.

!!! info "Standortvernetzung ganzheitlich dokumentieren"
    WAN-Leitungen sind das Bindeglied zwischen Standorten. Kombiniere diese Kategorie mit der Kategorie [Netz](s-net.md) für die lokalen Netzsegmente und der Kategorie [Routing](s-router.md) für die Router an den Übergabepunkten. So entsteht eine durchgängige Dokumentation der gesamten Standortvernetzung.

## Verwendung

Typische Anwendungsfälle:

- **Provider-Management**: Erfasse für jede WAN-Leitung den Provider, die Vertragsnummer (Kundennummer), die Projektnummer und die Warenkorbbestellnummer. So lässt sich jederzeit nachvollziehen, welche Leitungen bei welchem Provider unter welchem Vertrag laufen — unverzichtbar bei Kündigungen, Störungsmeldungen und Vertragsverhandlungen.
- **Bandbreitenplanung**: Die Felder für Upload- und Download-Kapazität (Ist und Maximum) ermöglichen eine detaillierte Bandbreitenübersicht. Ein Report über alle WAN-Leitungen mit weniger als 100 Mbit/s zeigt sofort, welche Standorte bei steigendem Datenaufkommen zum Engpass werden.
- **Redundanz und Ausfallsicherheit**: Bei Standorten mit mehreren WAN-Leitungen (z.B. Primär über MPLS, Backup über Internet-VPN) dokumentiert jeder Eintrag eine Leitung. Über die Rolle (Primary, Backup) ist sofort erkennbar, welche Leitung im Fehlerfall übernimmt.
- **Störungsmanagement**: Die Ticketnummer und Circuit-ID (Projektnummer) sind die Schlüsselinformationen, die der Provider bei einer Störungsmeldung benötigt. Wenn diese Daten in i-doit gepflegt sind, spart das im Ernstfall wertvolle Minuten.
- **Netz- und Router-Verknüpfung**: Über die Felder **Angeschlossene Router** und **Angeschlossene Netze** wird die WAN-Leitung direkt mit den relevanten Infrastruktur-Objekten verknüpft. Impact-Analysen zeigen dann automatisch, welche Netze und Router betroffen sind, wenn eine Leitung ausfällt.

!!! tip "VLAN-Zuordnung"
    Wenn die WAN-Leitung in einem bestimmten VLAN terminiert, nutze das Feld **VLAN-ID** zur Verknüpfung mit dem entsprechenden Layer-2-Netz-Objekt. Das schließt die Lücke zwischen der physischen WAN-Dokumentation und der logischen Netzstruktur.

[![WAN-Leitungen](../../assets/images/de/grundlagen/kategorien/wan.png)](../../assets/images/de/grundlagen/kategorien/wan.png)

## Felder

### Bezeichnung

Der Name der WAN-Verbindung, z.B. `MPLS Berlin-München` oder `Internet Backup Standort Süd`. Dieser Wert erscheint in der Listenansicht und in Reports.

### Rolle

Die Rolle der Leitung im Netzwerk, z.B. `Primary`, `Backup` oder `Management`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen.

### Typ

Die Technologie der WAN-Verbindung, z.B. `MPLS`, `Internet VPN`, `SD-WAN`, `Standleitung` oder `DSL`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen.

### Kanäle

Die Anzahl der Kanäle (Channels), z.B. bei ISDN-Leitungen oder gebündelten Verbindungen.

### Rufnummer(n)

Rufnummern, die der WAN-Leitung zugeordnet sind. Mehrzeiliges Textfeld — bei mehreren Nummern eine pro Zeile eintragen.

### Standort der Verbindung

Verknüpfung zu einem Standort-Objekt in i-doit (z.B. Gebäude oder Raum), an dem die WAN-Leitung physisch terminiert. Objekt-Browser-Feld.

### Kapazität UP und Kapazität UP Einheit

Die tatsächliche Upload-Bandbreite der Leitung. Die Einheit wird separat als `kbit/s`, `Mbit/s` oder `Gbit/s` angegeben. Dokumentiere hier die vertraglich zugesicherte Bandbreite.

### Kapazität DOWN und Kapazität DOWN Einheit

Die tatsächliche Download-Bandbreite der Leitung. Analog zur Upload-Kapazität.

### Max. Kapazität UP und Max. Kapazität DOWN

Die maximal mögliche Bandbreite der Leitung (Burst oder technisches Maximum), getrennt nach Upload und Download mit jeweiliger Einheit. Nützlich, um zu dokumentieren, welche Reserven eine Leitung bietet.

### Projektnummer

Die interne oder providerseitige Projektnummer bzw. Circuit-ID der Leitung. **Dieses Feld ist kritisch für Störungsmeldungen** — der Provider identifiziert die Leitung in der Regel über diese Nummer.

### VLAN-ID

Verknüpfung zu einem Layer-2-Netz-Objekt, in dem die WAN-Leitung terminiert. Objekt-Browser-Feld.

### Warenkorbnummer

Die Bestellnummer aus dem Beschaffungsprozess. Hilfreich für die Nachverfolgung von Bestellungen und die Zuordnung zu Rechnungen.

### Ticketnummer

Eine Referenz auf ein Ticket (z.B. aus dem Ticketsystem), das mit der Bereitstellung oder einer Störung der Leitung zusammenhängt.

### Kundennummer

Die Kundennummer beim Provider. Wichtig für die Zuordnung bei Störungsmeldungen und Vertragsfragen.

### Angeschlossene Router

Verknüpfung zu Router-Objekten, die an der WAN-Leitung angeschlossen sind. Objekt-Browser-Feld — mehrere Router können zugewiesen werden. Siehe auch Kategorie [Routing](s-router.md).

### Angeschlossene Netze

Verknüpfung zu Netz-Objekten, die über die WAN-Leitung erreichbar sind. Objekt-Browser-Feld — mehrere Netze können zugewiesen werden. Siehe auch Kategorie [Netz](s-net.md).

### Beschreibung

Freitext für zusätzliche Angaben: SLA-Details, Kündigungsfristen, technische Ansprechpartner beim Provider, Übergabepunkte oder besondere Konfigurationshinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__WAN` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | WAN-Leitungen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Kanäle** | `channels` | Ganzzahl |
| **Rufnummer(n)** | `call_numbers` | Textfeld (mehrzeilig) |
| **Standort der Verbindung** | `connection_location` | Objekt-Browser (Verknüpfung) |
| **Kapazität UP** | `capacity_up` | Dezimalzahl |
| **Kapazität UP Einheit** | `capacity_up_unit` | Dialog (Auswahl) |
| **Kapazität DOWN** | `capacity_down` | Dezimalzahl |
| **Kapazität DOWN Einheit** | `capacity_down_unit` | Dialog (Auswahl) |
| **Max. Kapazität UP** | `max_capacity_up` | Dezimalzahl |
| **Max. Kapazität UP Einheit** | `max_capacity_up_unit` | Dialog (Auswahl) |
| **Max. Kapazität DOWN** | `max_capacity_down` | Dezimalzahl |
| **Max. Kapazität DOWN Einheit** | `max_capacity_down_unit` | Dialog (Auswahl) |
| **Projektnummer** | `project_no` | Text |
| **VLAN-ID** | `vlan_id` | Objekt-Browser (Verknüpfung) |
| **Warenkorbnummer** | `shopping_cart_no` | Text |
| **Ticketnummer** | `ticket_no` | Text |
| **Kundennummer** | `customer_no` | Text |
| **Angeschlossene Router** | `router` | Objekt-Browser (Verknüpfung) |
| **Angeschlossene Netze** | `net` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__WAN",
        "data": {
            "title": "MPLS Berlin-München Primary",
            "role": "Primary",
            "type": "MPLS",
            "capacity_up": 100,
            "capacity_up_unit": 3,
            "capacity_down": 100,
            "capacity_down_unit": 3,
            "max_capacity_up": 200,
            "max_capacity_up_unit": 3,
            "max_capacity_down": 200,
            "max_capacity_down_unit": 3,
            "project_no": "CID-2025-04711",
            "customer_no": "KD-889900",
            "description": "MPLS-Primärleitung, Provider: Telekom, SLA 99.9%, 4h Entstörzeit"
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
        "category": "C__CATG__WAN"
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
        "category": "C__CATG__WAN",
        "entry": 5,
        "data": {
            "capacity_up": 200,
            "capacity_down": 200,
            "description": "Bandbreitenupgrade 2025-10: 100 Mbit/s auf 200 Mbit/s symmetrisch."
        }
    },
    "id": 3
}
```
