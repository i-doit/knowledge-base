---
title: "Kategorie: Netz"
description: Dokumentation der Kategorie Netz in i-doit
icon:
status:
lang: de
---

# Kategorie: Netz

Die Kategorie **Netz** ist die zentrale spezifische Kategorie für Objekte vom Typ **Layer-3-Netz** und **Supernet**. Sie dokumentiert die Stammdaten eines IP-Netzes: Netzadresse, Subnetzmaske, CIDR-Suffix, Standard-Gateway und DNS-Konfiguration. Jedes Layer-3-Netz-Objekt in i-doit trägt genau einen Eintrag dieser Kategorie – sie ist eine **Single-Value-Kategorie**.

Die Kategorie Netz bildet zusammen mit der Kategorie [Hostadresse](ip.md) das Rückgrat der Netzwerkdokumentation und des IP-Adress-Managements (IPAM) in i-doit. Das Netz-Objekt definiert den Adressraum, und die Hostadress-Einträge auf den einzelnen Geräten belegen die Adressen innerhalb dieses Raums. Die zugehörigen Kategorien [DHCP](s-net-dhcp.md) und [IP-Liste](s-net-ip-addresses.md) ergänzen die Dokumentation um dynamische Adressbereiche und eine Gesamtübersicht aller belegten Adressen.

!!! warning "Netz-Objekt zuerst anlegen"
    Das Layer-3-Netz-Objekt muss **vor** den Hostadress-Einträgen auf den Endgeräten existieren. Nur so kann in der Kategorie [Hostadresse](ip.md) das richtige Netz ausgewählt werden. Wird kein Netz zugeordnet, landen IP-Adressen im vordefinierten Auffangnetz „Global v4" bzw. „Global v6" und tauchen nicht in der IPAM-Übersicht des gewünschten Subnetzes auf.

!!! tip "CIDR-Suffix und Subnetzmaske"
    i-doit berechnet Subnetzmaske und CIDR-Suffix wechselseitig. Es reicht, eines der beiden Felder einzugeben – das andere wird automatisch ergänzt. Auch die Felder „Adresse von" und „Adresse bis" (der nutzbare Hostbereich) werden automatisch aus Netzadresse und Maske berechnet.

## Verwendung

Typische Anwendungsfälle:

- **IP-Adress-Management (IPAM)**: Das Netz-Objekt definiert den verfügbaren Adressraum. In der Kategorie [IP-Liste](s-net-ip-addresses.md) sieht man auf einen Blick, welche Adressen vergeben, reserviert oder frei sind. Reports liefern Auslastungszahlen pro Subnetz – unverzichtbar für die Kapazitätsplanung.
- **Netzwerksegmentierung dokumentieren**: Jedes Subnetz wird als eigenes Layer-3-Netz-Objekt angelegt – mit Netzadresse, Gateway und VLAN-Zuordnung (über die Layer-2-Netz-Zuweisung). Dadurch entsteht eine vollständige Übersicht der Netzwerksegmente, die sowohl für das Netzwerkteam als auch für Sicherheitsaudits nutzbar ist.
- **DNS-Konfiguration**: Die Felder DNS-Server und DNS-Domain dokumentieren, welche DNS-Server für dieses Netz zuständig sind und welche Domain-Suffixe gelten. Das Feld Reverse-DNS hält die PTR-Zone fest, z.B. `10.168.192.in-addr.arpa`.
- **Gateway-Dokumentation**: Das Standard-Gateway wird als Dialog-Feld gepflegt und referenziert eine IP-Adresse innerhalb des Netzes. Es erscheint automatisch in der IPAM-Übersicht und in der Kategorie [Hostadresse](ip.md), wenn ein neues Gerät diesem Netz zugeordnet wird.
- **Supernetting**: Objekte vom Typ Supernet verwenden dieselbe Kategorie, um übergeordnete Netzbereiche zu definieren. So lässt sich eine hierarchische Netzstruktur abbilden, z.B. ein /16-Supernet, das mehrere /24-Subnetze enthält.
- **Layer-2/Layer-3-Verknüpfung**: Über das Feld „Layer-2-Netz-Zuweisung" wird das logische IP-Netz mit einem physischen VLAN-Objekt verknüpft. Damit schlägt die Dokumentation die Brücke zwischen IP-Adressierung und VLAN-Segmentierung.

[![Netz](../../assets/images/de/grundlagen/kategorien/s-net.png)](../../assets/images/de/grundlagen/kategorien/s-net.png)

## Felder

### Typ

Unterscheidet zwischen IPv4 und IPv6. Je nach Auswahl werden die passenden Adressfelder angezeigt. Dialog-Feld – die Auswahl bestimmt das Verhalten der gesamten Kategorie.

### Netzadresse (Net)

Die Netzwerkadresse des Subnetzes, z.B. `192.168.10.0` oder `fd00:abcd::`. Dies ist die Basisadresse, aus der zusammen mit der Subnetzmaske der gesamte Adressbereich berechnet wird.

### Subnetzmaske (Netmask)

Die Subnetzmaske in Dotted-Decimal-Notation, z.B. `255.255.255.0`. Wird automatisch aus dem CIDR-Suffix berechnet und umgekehrt. Bei IPv6-Netzen entfällt dieses Feld – dort wird ausschließlich das CIDR-Suffix verwendet.

### CIDR-Suffix

Die Präfixlänge in CIDR-Notation, z.B. `24` für ein /24-Netz (256 Adressen). Wird wechselseitig mit der Subnetzmaske berechnet. Gängige Werte: 24 (Class C), 16 (Class B), 8 (Class A) sowie /48 oder /64 bei IPv6.

### Standard-Gateway (Default Gateway)

Das Standard-Gateway dieses Netzes. Dialog-Feld, das die im Netz vorhandenen IP-Adressen zur Auswahl anbietet. Das Gateway erscheint in der IPAM-Übersicht und wird automatisch als Vorschlag in neuen Hostadress-Einträgen angezeigt.

### Adresse von / Adresse bis (Address from / Address to)

Der nutzbare Hostbereich des Netzes. Wird automatisch aus Netzadresse und Maske berechnet, z.B. `192.168.10.1` bis `192.168.10.254` bei einem /24-Netz. Diese Werte definieren den Bereich, in dem i-doit freie Adressen vorschlägt.

### DNS-Server (DNS server)

Verknüpfung mit einem oder mehreren Objekten, die als DNS-Server für dieses Netz fungieren. Objekt-Browser-Feld – es werden bestehende Server-Objekte aus i-doit ausgewählt.

### DNS-Domain (DNS domain)

Die DNS-Domain(s), die in diesem Netz gelten, z.B. `intern.example.com`. Mehrfachauswahl – es können mehrere Suchdomänen hinterlegt werden.

### Reverse-DNS

Die Reverse-DNS-Zone (PTR-Zone) für dieses Netz, z.B. `10.168.192.in-addr.arpa`. Freitext – wird nicht automatisch berechnet, sondern manuell gepflegt.

### Layer-2-Netz-Zuweisung (Layer-2-net assignment)

Verknüpft das Layer-3-Netz mit einem oder mehreren Layer-2-Netz-Objekten (VLANs). Objekt-Browser-Feld. Diese Zuordnung dokumentiert, welches VLAN dem IP-Subnetz zugrunde liegt – eine wichtige Information für Netzwerkadministratoren und Firewall-Regeln.

### Netzadresse IPv6 (Net v6)

Bei IPv6-Netzen die vollständige Netzadresse in IPv6-Notation. Wird nur angezeigt, wenn der Typ auf IPv6 gesetzt ist.

### Adressbereich (Address range)

Berechnetes Feld, das den gesamten Adressbereich als Zeichenkette darstellt.

### Netz mit Suffix (Net with suffix)

Berechnetes Feld: Die Netzadresse inklusive CIDR-Suffix, z.B. `192.168.10.0/24`. Wird in Listen und Reports als kompakte Darstellung verwendet.

### Zugewiesene Adressen (Assigned addresses)

Berechnetes Feld, das die Belegung des Netzes anzeigt – wie viele Adressen vergeben bzw. frei sind. Dieses Feld ist der Schnelleinstieg in die Kapazitätsauswertung.

### Beschreibung

Freitext für zusätzliche Angaben: Verwendungszweck des Netzes (Servernetz, Management-Netz, DMZ), Standortbezug, Firewall-Regeln, Ansprechpartner.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__NET` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Layer-3-Netz (LAYER3_NET), Supernet (SUPERNET) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog (Auswahl) |
| **Netzadresse** | `address` | Text |
| **Subnetzmaske** | `netmask` | Text |
| **Standard-Gateway** | `gateway` | Dialog (Auswahl) |
| **Adresse von** | `range_from` | Text |
| **Adresse bis** | `range_to` | Text |
| **DNS-Server** | `dns_server` | Objekt-Browser (Verknüpfung) |
| **DNS-Domain** | `dns_domain` | Mehrfachauswahl |
| **CIDR-Suffix** | `cidr_suffix` | Ganzzahl |
| **Reverse-DNS** | `reverse_dns` | Text |
| **Layer-2-Netz-Zuweisung** | `layer2_assignments` | Objekt-Browser (Verknüpfung) |
| **Netzadresse IPv6** | `address_v6` | Text |
| **Adressbereich** | `address_range` | Text |
| **Netz mit Suffix** | `address_with_suffix` | Text |
| **Zugewiesene Adressen** | `free_addresses` | Text |
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
        "category": "C__CATS__NET",
        "data": {
            "type": 1,
            "address": "192.168.10.0",
            "netmask": "255.255.255.0",
            "cidr_suffix": 24,
            "dns_server": [456, 789],
            "dns_domain": ["intern.example.com"],
            "reverse_dns": "10.168.192.in-addr.arpa",
            "description": "Servernetz Standort Berlin, Rack-Reihe A, VLAN 10"
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
        "category": "C__CATS__NET"
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
        "category": "C__CATS__NET",
        "entry": 1,
        "data": {
            "gateway": "192.168.10.1",
            "description": "Gateway-Wechsel 2026-04: Neuer Core-Router R-CORE-02 aktiv"
        }
    },
    "id": 3
}
```
