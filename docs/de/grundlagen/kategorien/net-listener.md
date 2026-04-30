---
title: "Kategorie: Listener"
description: Dokumentation der Kategorie Listener in i-doit
icon:
status:
lang: de
---

# Kategorie: Listener

Die Kategorie **Listener** dokumentiert die Dienste und Ports, die auf einem Objekt geöffnet sind und auf eingehende Verbindungen warten. Sie ist eine **Multi-Value-Kategorie** -- pro Objekt können beliebig viele Listener-Einträge angelegt werden, um alle aktiven Netzwerkdienste abzubilden.

!!! info "Listener, Connector und Ordner -- das Zusammenspiel"
    Die Netzwerkkommunikation in i-doit wird über drei zusammenhängende Kategorien abgebildet: Der **Listener** definiert, welche Ports ein Objekt öffnet (die „Serverseite"). Die Kategorie [Netzwerkverbindungen](net-connector.md) dokumentiert, welche ausgehenden Verbindungen ein Objekt aufbaut (die „Clientseite"). Die Kategorie [Netzwerk-Listener (Übersicht)](net-connections-folder.md) ist die Ordner-Kategorie, die alle Listener eines Objekts in einer Sammelansicht zusammenführt.

## Verwendung

Typische Anwendungsfälle:

- **Firewall-Dokumentation**: Jeder Listener-Eintrag entspricht einer eingehenden Firewall-Regel: Protokoll, Port und gebundene IP-Adresse definieren, was von außen erreichbar sein soll. Zusammen mit dem Gateway-Feld (Firewall-Objekt) entsteht eine vollständige Zuordnung von Dienst zu Firewall-Regel.
- **Sicherheitsaudits und Hardening**: Ein Report über alle Listener-Einträge zeigt sofort, welche Ports auf welchen Servern offen sind. Unerwartete Einträge -- etwa ein MySQL-Listener auf Port 3306, der auf `0.0.0.0` statt auf `127.0.0.1` lauscht -- fallen bei der Auswertung direkt auf und können gezielt gehärtet werden.
- **Dienstinventar und Service-Mapping**: Durch die Verknüpfung über das Feld **Geöffnet durch Applikation** wird sichtbar, welche Software welchen Port belegt. Das ist unverzichtbar für Change Management: Wird ein Port geändert, weißt du sofort, welche Applikation betroffen ist.
- **Abhängigkeitsanalyse**: Listener sind das Verbindungsziel für die Kategorie [Netzwerkverbindungen](net-connector.md). Wenn andere Objekte Verbindungen zu einem Listener aufgebaut haben, zeigt das die Abhängigkeiten auf -- entscheidend vor Wartungsarbeiten oder Migrationen.

[![Listener](../../assets/images/de/grundlagen/kategorien/net-listener.png)](../../assets/images/de/grundlagen/kategorien/net-listener.png)

## Felder

### Layer 3/4 Protokoll

Das Transport-Protokoll -- in der Regel `TCP` oder `UDP`. Dialog+-Feld, sodass bei Bedarf weitere Protokolle wie `SCTP` oder `DCCP` ergänzt werden können. Die Wahl des Protokolls ist relevant für die korrekte Abbildung von Firewall-Regeln, da diese üblicherweise nach TCP und UDP unterscheiden.

### Layer 5-7 Protokoll

Das Anwendungsprotokoll, das auf diesem Port läuft: `HTTP`, `HTTPS`, `SSH`, `SMTP`, `DNS`, `LDAP` usw. Dieses Feld verleiht dem Port-Eintrag eine semantische Bedeutung -- Port 443 allein sagt wenig, Port 443 mit Protokoll `HTTPS` macht den Zweck sofort klar. Ebenfalls ein Dialog+-Feld.

### (Bind) IP-Adresse

Die IP-Adresse, an die der Dienst gebunden ist. Die Auswahl beschränkt sich auf IP-Adressen, die bereits in der Kategorie Hostadresse des Objekts angelegt sind. Typische Werte:

- Eine **spezifische IP** (z.B. `192.168.1.10`) -- der Dienst ist nur über dieses Interface erreichbar
- **0.0.0.0** -- der Dienst lauscht auf allen IPv4-Interfaces

!!! tip "Sicherheitsrelevanz der Bind-Adresse"
    Ein Datenbank-Listener, der auf `0.0.0.0` statt auf `127.0.0.1` lauscht, ist potenziell von jedem Netzwerksegment erreichbar. Dokumentiere die Bind-Adresse sorgfältig -- sie ist ein wichtiger Indikator für die Angriffsfläche eines Systems.

### Port-Bereich (von/bis)

Der Port oder Port-Bereich, auf dem der Dienst lauscht. Für einen einzelnen Port sind beide Werte identisch (z.B. `22` / `22` für SSH). Port-Bereiche kommen vor bei:

- **FTP-Passivmodus**: z.B. Ports 30000--31000
- **RPC-Dienste**: dynamisch zugewiesene Port-Ranges
- **Anwendungsspezifische Bereiche**: z.B. bei Microservice-Architekturen

### Geöffnet durch Applikation

Verknüpfung zu einem Applikations-Objekt, das diesen Listener erzeugt. Hier wählst du z.B. das Objekt „Apache HTTP Server" oder „PostgreSQL" aus. Diese Verknüpfung schließt die Lücke zwischen Netzwerk- und Anwendungsdokumentation: Du siehst nicht nur, dass Port 5432 offen ist, sondern auch, dass PostgreSQL dafür verantwortlich ist.

### Gateway

Verknüpfung zu einem Firewall- oder Router-Objekt, über das der eingehende Verkehr geroutet wird. Zusammen mit Protokoll, Port und Bind-Adresse entsteht so ein vollständiger Datensatz, der einer Firewall-Allow-Regel entspricht.

### Beschreibung

Freitext für ergänzende Informationen: Firewall-Regel-ID (z.B. „FW-2025-087"), Konfigurationshinweise (z.B. „nur aus Management-VLAN erreichbar"), Ticket-Nummern der Netzwerkfreigabe oder TLS-Konfigurationsdetails.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NET_LISTENER` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Client, Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Layer 3/4 Protokoll** | `protocol` | Dialog+ (erweiterbare Auswahl) |
| **Layer 5-7 Protokoll** | `protocol_layer_5` | Dialog+ (erweiterbare Auswahl) |
| **(Bind) IP-Adresse** | `ip_address` | Dialog (Auswahl) |
| **Port-Bereich (von)** | `port_from` | Ganzzahl |
| **Port-Bereich (bis)** | `port_to` | Ganzzahl |
| **Geöffnet durch Applikation** | `opened_by` | Dialog (Auswahl) |
| **Gateway** | `gateway` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__NET_LISTENER",
        "data": {
            "protocol": "TCP",
            "protocol_layer_5": "HTTPS",
            "ip_address": "192.168.1.10",
            "port_from": 443,
            "port_to": 443,
            "opened_by": "Apache HTTP Server",
            "gateway": 1003,
            "description": "Produktions-Webserver, TLS 1.3, Firewall-Regel FW-2025-087"
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
        "category": "C__CATG__NET_LISTENER"
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
        "category": "C__CATG__NET_LISTENER",
        "entry": 5,
        "data": {
            "protocol_layer_5": "HTTP/2",
            "description": "Upgrade auf HTTP/2, Change CR-2026-003, alte Firewall-Regel beibehalten"
        }
    },
    "id": 3
}
```
