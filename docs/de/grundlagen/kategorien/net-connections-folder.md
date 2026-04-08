---
title: "Kategorie: Netzwerk-Listener (Übersicht)"
description: Dokumentation der Kategorie Netzwerk-Listener (Übersicht) in i-doit
icon:
status:
lang: de
---

# Kategorie: Netzwerk-Listener (Übersicht)

Die Kategorie **Netzwerk-Listener (Übersicht)** ist eine **Ordner-Kategorie**, die alle auf einem Objekt konfigurierten Netzwerk-Listener zusammenfasst und als Gesamtübersicht darstellt. Sie selbst enthält keine eigenen Daten, sondern aggregiert die Einträge der Unterkategorie [Listener](net-listener.md) in einer gemeinsamen Listenansicht.

!!! info "Ordner-Kategorie vs. Detail-Kategorie"
    Diese Kategorie funktioniert als **Sammelansicht**: Du siehst hier auf einen Blick alle Dienste, die auf dem Objekt lauschen -- inklusive Protokoll, Port-Bereich und gebundener IP-Adresse. Um einen einzelnen Listener-Eintrag zu bearbeiten oder neu anzulegen, wechselst du in die Unterkategorie [Listener](net-listener.md). Die Felder sind identisch, weil die Ordner-Kategorie technisch dieselbe Datenquelle nutzt.

## Verwendung

Typische Anwendungsfälle:

- **Schnellüberblick über offene Dienste**: Beim Öffnen eines Server-Objekts zeigt diese Übersicht sofort, welche Ports und Protokolle aktiv sind -- ohne dass du jeden Listener einzeln anklicken musst. Bei einem Webserver siehst du auf einen Blick, dass Port 80 (HTTP), Port 443 (HTTPS) und vielleicht Port 22 (SSH) offen sind.
- **Verknüpfungsziel für Netzwerkverbindungen**: Wenn du in der Kategorie [Netzwerkverbindungen](net-connector.md) eines anderen Objekts eine ausgehende Verbindung anlegst, wählst du das Zielobjekt über den Objekt-Browser. Dabei filtert i-doit automatisch nach Objekten, die Einträge in dieser Ordner-Kategorie haben -- nur Objekte mit mindestens einem Listener tauchen als gültige Ziele auf.
- **Sicherheitsaudits und Compliance**: Über den Report Manager lassen sich alle Server mit ihren offenen Ports auflisten. So erkennst du schnell, ob ein System unerwartete Dienste exponiert, die geschlossen oder dokumentiert werden müssen.
- **Zusammenspiel mit Applikationen**: Über das Feld **Geöffnet durch Applikation** in den einzelnen Listener-Einträgen entsteht eine Verknüpfung zur Softwarelandschaft. So lässt sich nachvollziehen, welche Anwendung welchen Port belegt -- entscheidend für Change Management und Incident-Analyse.

[![Netzwerk-Listener (Übersicht)](../../assets/images/de/grundlagen/kategorien/net-connections-folder.png)](../../assets/images/de/grundlagen/kategorien/net-connections-folder.png)

## Felder

Da es sich um eine Ordner-Kategorie handelt, teilt sie sich die Felder mit der Unterkategorie [Listener](net-listener.md). Die Felder sind in der Detail-Dokumentation des Listeners ausführlich beschrieben. Hier eine kurze Übersicht:

### Layer 3/4 Protokoll

Das Transport-Protokoll der Verbindung -- typischerweise `TCP` oder `UDP`. Dialog+-Feld, das um eigene Werte erweitert werden kann (z.B. `SCTP` für Telekommunikationsumgebungen).

### Layer 5-7 Protokoll

Das Anwendungsprotokoll, z.B. `HTTP`, `HTTPS`, `SSH`, `SMTP` oder `DNS`. Dieses Feld gibt dem reinen Port-Eintrag semantische Bedeutung und ist für Reports und Filterung unverzichtbar.

### (Bind) IP-Adresse

Die IP-Adresse, an die der Dienst gebunden ist. Hier werden nur IP-Adressen angeboten, die bereits in der Kategorie Hostadresse des Objekts gepflegt sind. Ein Listener, der auf `0.0.0.0` lauscht, akzeptiert Verbindungen auf allen Interfaces.

### Port-Bereich (von/bis)

Der Port oder Port-Bereich, auf dem der Dienst lauscht. Für einen einzelnen Port sind beide Werte identisch (z.B. `443` / `443`). Port-Bereiche sind bei Anwendungen wie FTP-Passivmodus oder RPC-Diensten üblich.

### Geöffnet durch Applikation

Verknüpfung zu einem Applikations-Objekt in i-doit, das diesen Listener erzeugt. So wird sichtbar, welche Software für einen offenen Port verantwortlich ist.

### Gateway

Verknüpfung zu einem Firewall- oder Router-Objekt, über das der Datenverkehr zu diesem Listener geleitet wird. Relevant für die Dokumentation von Firewall-Regeln und Netzwerksegmentierung.

### Beschreibung

Freitext für Hinweise wie Firewall-Regel-IDs, Ticket-Nummern aus der Freigabe oder Besonderheiten der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NET_CONNECTIONS_FOLDER` |
| **Typ** | Globale Kategorie (Ordner) |
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
        "category": "C__CATG__NET_CONNECTIONS_FOLDER",
        "data": {
            "protocol": "TCP",
            "protocol_layer_5": "HTTPS",
            "ip_address": "192.168.1.10",
            "port_from": 443,
            "port_to": 443,
            "opened_by": "Apache HTTP Server",
            "description": "Webserver HTTPS-Listener, Firewall-Regel FW-2024-087"
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
        "category": "C__CATG__NET_CONNECTIONS_FOLDER"
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
        "category": "C__CATG__NET_CONNECTIONS_FOLDER",
        "entry": 5,
        "data": {
            "protocol_layer_5": "HTTP/2",
            "description": "Upgrade auf HTTP/2, Change CR-2026-003"
        }
    },
    "id": 3
}
```
