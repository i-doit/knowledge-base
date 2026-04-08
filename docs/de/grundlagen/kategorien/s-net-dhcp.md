---
title: "Kategorie: DHCP"
description: Dokumentation der Kategorie DHCP in i-doit
icon:
status:
lang: de
---

# Kategorie: DHCP

Die Kategorie **DHCP** dokumentiert die DHCP-Adressbereiche innerhalb eines Layer-3-Netzes. Sie ist eine **Multi-Value-Kategorie** – pro Netz-Objekt können mehrere DHCP-Ranges definiert werden, z.B. wenn verschiedene Adressbereiche für unterschiedliche Geräteklassen (Clients, Drucker, VoIP-Telefone) vorgesehen sind.

Die DHCP-Kategorie gehört zum Netz-Objekt und ergänzt die Kategorie [Netz](s-net.md) um die dynamische Adressvergabe. Zusammen mit der Kategorie [IP-Liste](s-net-ip-addresses.md) ergibt sich ein vollständiges Bild: Die Netz-Kategorie definiert den Adressraum, die DHCP-Kategorie markiert die dynamischen Bereiche, und die IP-Liste zeigt die tatsächliche Belegung.

!!! info "Dokumentation, nicht Konfiguration"
    i-doit konfiguriert **keinen** DHCP-Server. Die DHCP-Kategorie dokumentiert lediglich, welche Adressbereiche für die dynamische Vergabe vorgesehen sind. Die tatsächliche DHCP-Server-Konfiguration erfolgt weiterhin auf dem jeweiligen Server oder Netzwerkgerät. Der Wert der Dokumentation liegt in der Übersicht: Welche Bereiche sind statisch, welche dynamisch? Gibt es Überschneidungen? Sind die Ranges noch aktuell?

!!! warning "DHCP-Ranges und statische Adressen"
    Achte darauf, dass DHCP-Ranges keine Adressen enthalten, die in der Kategorie [Hostadresse](ip.md) als statisch vergeben sind. i-doit warnt nicht automatisch vor Überschneidungen – die Konsistenz liegt in der Verantwortung des Administrators. Ein regelmäßiger Abgleich per Report („Alle statischen IPs innerhalb von DHCP-Ranges") ist empfehlenswert.

## Verwendung

Typische Anwendungsfälle:

- **DHCP-Bereiche dokumentieren**: Für jedes Subnetz wird festgehalten, welcher Adressbereich dem DHCP-Server zur Verfügung steht. Das ist die Grundlage für die Netzwerkplanung und vermeidet Adresskonflikte.
- **Mehrere Scopes pro Netz**: In einem /24-Netz kann z.B. der Bereich `.100-.149` für Clients und `.150-.199` für Drucker reserviert sein. Jeder Scope wird als eigener Eintrag angelegt, optional mit einer Beschreibung des Verwendungszwecks.
- **IPv4 und IPv6 gemeinsam**: Die Kategorie unterstützt sowohl IPv4-DHCP als auch IPv6-DHCPv6-Bereiche. Über das Typ-Feld wird unterschieden, ob es sich um einen IPv4- oder IPv6-Scope handelt.
- **Kapazitätsplanung**: Reports über die DHCP-Ranges zeigen, wie groß die dynamischen Pools sind und ob sie bei wachsender Geräteanzahl noch ausreichen. In Kombination mit der [IP-Liste](s-net-ip-addresses.md) lässt sich die tatsächliche Auslastung vergleichen.
- **Netzwerk-Redesign vorbereiten**: Beim Umbau von Netzwerksegmenten liefert die DHCP-Kategorie eine klare Übersicht, welche Ranges angepasst, verschoben oder zusammengelegt werden müssen.

[![DHCP](../../assets/images/de/grundlagen/kategorien/s-net-dhcp.png)](../../assets/images/de/grundlagen/kategorien/s-net-dhcp.png)

## Felder

### Typ IPv4 (Type IPv4)

Der DHCP-Typ für IPv4-Netze. Dialog-Feld mit Werten wie „DHCP", „DHCP Reserved" oder „DHCP Excluded". Damit lässt sich differenzieren, ob ein Bereich zur freien Vergabe steht, für bestimmte Geräte reserviert ist oder explizit ausgeschlossen wird.

### Typ IPv6 (Type IPv6)

Der DHCP-Typ für IPv6-Netze. Dialog-Feld mit IPv6-spezifischen Werten wie „DHCPv6" oder „Stateless". Wird nur relevant, wenn das zugehörige Netz-Objekt ein IPv6-Netz ist.

### DHCP von (DHCP from)

Die erste Adresse des DHCP-Bereichs, z.B. `192.168.10.100` oder `fd00::100`. Zusammen mit „DHCP bis" definiert dieses Feld den dynamischen Adresspool.

### DHCP bis (DHCP to)

Die letzte Adresse des DHCP-Bereichs, z.B. `192.168.10.199` oder `fd00::1ff`. Der Bereich zwischen „von" und „bis" steht dem DHCP-Server zur Vergabe zur Verfügung.

### Beschreibung

Freitext für zusätzliche Angaben: Verwendungszweck des Bereichs (z.B. „Client-Pool Büro 3. OG"), Lease-Time, zugehöriger DHCP-Server, Besonderheiten der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__NET_DHCP` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Layer-3-Netz (LAYER3_NET), Supernet (SUPERNET) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ IPv4** | `type` | Dialog (Auswahl) |
| **Typ IPv6** | `typev6` | Dialog (Auswahl) |
| **DHCP von** | `range_from` | Text |
| **DHCP bis** | `range_to` | Text |
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
        "category": "C__CATS__NET_DHCP",
        "data": {
            "type": "DHCP",
            "range_from": "192.168.10.100",
            "range_to": "192.168.10.199",
            "description": "Client-Pool Büro 3. OG, Lease-Time 8h, DHCP-Server: srv-dhcp-01"
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
        "objID": 123,
        "category": "C__CATS__NET_DHCP"
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
        "category": "C__CATS__NET_DHCP",
        "entry": 5,
        "data": {
            "range_to": "192.168.10.220",
            "description": "Pool-Erweiterung 2026-04: 20 zusätzliche Adressen für neue Clients"
        }
    },
    "id": 3
}
```
