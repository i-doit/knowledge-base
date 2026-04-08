---
title: "Kategorie: IP-Liste"
description: Dokumentation der Kategorie IP-Liste in i-doit
icon:
status:
lang: de
---

# Kategorie: IP-Liste

Die Kategorie **IP-Liste** zeigt alle IP-Adressen, die innerhalb eines Layer-3-Netzes vergeben sind. Sie ist eine **Multi-Value-Kategorie** und gehört zu Objekten vom Typ **Layer-3-Netz** und **Supernet**. Jeder Eintrag repräsentiert eine IP-Adresse, die über die Kategorie [Hostadresse](ip.md) einem Gerät zugewiesen wurde.

Der entscheidende Unterschied zu anderen Kategorien: Die IP-Liste ist primär eine **Rückwärtsansicht**. Die Daten werden nicht direkt in dieser Kategorie gepflegt, sondern entstehen automatisch, wenn auf einem Endgerät in der Kategorie [Hostadresse](ip.md) eine IP-Adresse angelegt und diesem Netz-Objekt zugeordnet wird. Die IP-Liste aggregiert diese Zuordnungen und zeigt sie gebündelt am Netz-Objekt an – eine Art Live-Übersicht des gesamten Subnetzes.

!!! info "Lesen statt Schreiben"
    Die IP-Liste ist in erster Linie eine **Leseansicht**. Die eigentliche Datenpflege findet in der Kategorie [Hostadresse](ip.md) auf den einzelnen Geräten statt. Wenn eine IP-Adresse in der IP-Liste fehlt, liegt das daran, dass der Hostadress-Eintrag auf dem betreffenden Gerät entweder nicht existiert oder dem falschen Netz zugeordnet ist. Die Lösung ist immer: Den Hostadress-Eintrag auf dem Gerät prüfen und das korrekte Netz zuordnen.

!!! tip "IPAM-Übersicht"
    Die IP-Liste ist das Herzstück des IP-Adress-Managements in i-doit. Zusammen mit der Kategorie [Netz](s-net.md), die den Adressraum definiert, und der Kategorie [DHCP](s-net-dhcp.md), die die dynamischen Bereiche markiert, ergibt sich ein vollständiges Bild: Welche Adressen sind vergeben, welche frei, welche liegen im DHCP-Bereich? Diese Übersicht ist die Grundlage für die Vergabe neuer Adressen und die Erkennung von Doppelbelegungen.

## Verwendung

Typische Anwendungsfälle:

- **IP-Belegung auf einen Blick**: Die IP-Liste zeigt pro Netz alle vergebenen Adressen mit dem zugeordneten Objekt. Ein Netzwerkadministrator sieht sofort, welche Adressen belegt sind und welches Gerät dahintersteht – ohne jedes Gerät einzeln öffnen zu müssen.
- **Freie Adressen finden**: Durch den Vergleich der IP-Liste mit dem Adressbereich aus der Kategorie [Netz](s-net.md) erkennt man die Lücken – also die verfügbaren Adressen für neue Geräte. i-doit schlägt beim Anlegen eines neuen Hostadress-Eintrags automatisch die nächste freie Adresse vor.
- **Doppelbelegungen erkennen**: Wenn zwei Geräte versehentlich dieselbe IP-Adresse zugewiesen bekommen haben, wird dies in der IP-Liste sichtbar – die Adresse erscheint doppelt mit unterschiedlichen Objekten.
- **Netz-Auslastung bewerten**: Die Anzahl der Einträge in der IP-Liste im Verhältnis zum gesamten Adressraum zeigt die Auslastung des Subnetzes. Reports können Netze mit hoher Auslastung (z.B. > 80%) identifizieren und rechtzeitig eine Erweiterung oder Segmentierung anregen.
- **Netzwerk-Migration planen**: Beim Umzug von Geräten in ein neues Subnetz zeigt die IP-Liste alle betroffenen Objekte. So lässt sich eine vollständige Migrationsliste erstellen, ohne ein einziges Gerät zu übersehen.
- **Adressvergabe-Typ prüfen**: Die Felder zur Adressvergabe (statisch, DHCP, SLAAC) zeigen, wie jede Adresse vergeben wurde. Ein Report „Alle Server mit DHCP-Adresse" deckt Konfigurationsfehler auf – Server sollten in der Regel statische Adressen haben.

[![IP-Liste](../../assets/images/de/grundlagen/kategorien/s-net-ip-addresses.png)](../../assets/images/de/grundlagen/kategorien/s-net-ip-addresses.png)

## Felder

### Typ (Type)

Unterscheidet zwischen IPv4 und IPv6. Dialog-Feld – der Wert ergibt sich aus dem Typ des Hostadress-Eintrags auf dem zugeordneten Gerät.

### Hostadresse (Host address)

Die IP-Adresse selbst, z.B. `192.168.10.25` oder `fd00::1a2b`. Dieser Wert stammt aus dem Feld „IPv4-Adresse" bzw. „IPv6-Adresse" der Kategorie [Hostadresse](ip.md) auf dem Endgerät.

### Objekt (Object)

Das Objekt, dem diese IP-Adresse zugewiesen ist – z.B. ein Server, Client oder Router. Über dieses Feld lässt sich direkt zum zugeordneten Gerät navigieren. Dies ist der zentrale Mehrwert der IP-Liste: Die Zuordnung von Adresse zu Gerät auf einen Blick.

### Adressvergabe IPv4 (Address allocation IPv4)

Die Art der Adresszuweisung für IPv4: Statisch, DHCP oder Nicht vergeben. Dieser Wert wird aus dem Hostadress-Eintrag auf dem Endgerät gespiegelt.

### Adressvergabe IPv6 (Address allocation IPv6)

Die Art der Adresszuweisung für IPv6: Statisch, DHCPv6, SLAAC oder Nicht vergeben. Analog zum IPv4-Feld, aber mit IPv6-spezifischen Optionen.

### Objekt (object)

Die Objekt-ID des zugeordneten Geräts als Ganzzahl. Dieses Feld wird intern für die Verknüpfung verwendet.

### IP-Liste öffnen (Open IP list)

Link zur grafischen IPAM-Ansicht des Netzes, die alle Adressen als Tabelle oder Grid darstellt.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__NET_IP_ADDRESSES` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Layer-3-Netz (LAYER3_NET), Supernet (SUPERNET) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `net_type` | Dialog (Auswahl) |
| **Hostadresse** | `title` | Text |
| **Objekt** | `assigned_object` | Objekt-Browser (Verknüpfung) |
| **Adressvergabe IPv4** | `ipv4_assignment` | Dialog (Auswahl) |
| **Adressvergabe IPv6** | `ipv6_assignment` | Dialog (Auswahl) |
| **Objekt (ID)** | `object` | Ganzzahl |
| **IP-Liste öffnen** | `ip_address_link` | Text |

### API-Beispiele

!!! note "Primär eine Lese-Kategorie"
    Die IP-Liste wird üblicherweise über die API **gelesen**, nicht geschrieben. Die Einträge entstehen automatisch durch Hostadress-Zuweisungen auf den Endgeräten. Direkte Schreibzugriffe auf diese Kategorie sind möglich, aber in der Praxis selten sinnvoll – die Datenpflege sollte über die Kategorie [Hostadresse](ip.md) auf den einzelnen Objekten erfolgen.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "objID": 123,
        "category": "C__CATS__NET_IP_ADDRESSES"
    },
    "id": 1
}
```

Die Antwort enthält alle IP-Adressen, die diesem Netz-Objekt zugeordnet sind, inklusive der zugehörigen Objekt-IDs und Hostnamen. Ein typischer Anwendungsfall: Über die API die Belegung eines Subnetzes abfragen und mit der tatsächlichen Netzwerkkonfiguration abgleichen.

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATS__NET_IP_ADDRESSES",
        "data": {
            "net_type": 1,
            "title": "192.168.10.50",
            "ipv4_assignment": 2,
            "object": 456
        }
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
        "category": "C__CATS__NET_IP_ADDRESSES",
        "entry": 12,
        "data": {
            "ipv4_assignment": 1
        }
    },
    "id": 3
}
```
