---
title: "Kategorie: Netzwerkverbindungen"
description: Dokumentation der Kategorie Netzwerkverbindungen in i-doit
icon:
status:
lang: de
---

# Kategorie: Netzwerkverbindungen

Die Kategorie **Netzwerkverbindungen** dokumentiert die ausgehenden Netzwerkverbindungen eines Objekts zu anderen Objekten. Sie ist eine **Multi-Value-Kategorie** -- pro Objekt können beliebig viele Verbindungen angelegt werden, um alle Abhängigkeiten zu externen Diensten abzubilden.

!!! tip "Richtung beachten: Connector vs. Listener"
    Diese Kategorie beschreibt immer die **ausgehende** Seite einer Verbindung: Von welchem Objekt geht die Verbindung aus, und zu welchem Listener auf einem Zielobjekt wird sie aufgebaut? Die Gegenseite -- also welche Ports ein Objekt selbst öffnet -- wird in der Kategorie [Listener](net-listener.md) dokumentiert. Zusammen bilden Netzwerkverbindungen und Listener ein vollständiges Bild der Kommunikationsbeziehungen in deiner Infrastruktur.

## Verwendung

Typische Anwendungsfälle:

- **Anwendungsabhängigkeiten kartieren**: Ein Applikationsserver verbindet sich zu einem Datenbankserver auf Port 3306 (MySQL) und zu einem Redis-Cache auf Port 6379. Durch das Anlegen dieser Verbindungen wird sichtbar, welche Systeme voneinander abhängen -- entscheidend für Impact-Analysen bei Wartungen oder Ausfällen.
- **Firewall-Regeln dokumentieren**: Jede Netzwerkverbindung kann mit einem Gateway-Objekt (Firewall) verknüpft werden. So entsteht eine Zuordnung, welche Firewall-Regeln für welche Kommunikationsbeziehung verantwortlich sind. Beim Dekommissionieren eines Servers lässt sich per Report ermitteln, welche Firewall-Regeln ebenfalls entfernt werden können.
- **Change Management und Impact-Analyse**: Bevor ein Zielserver gewartet oder migriert wird, zeigt ein Blick auf die eingehenden Verbindungen (über die Listener-Seite) und die ausgehenden Verbindungen (über diese Kategorie), welche anderen Systeme betroffen sind. Das reduziert das Risiko unerwarteter Ausfälle.
- **Netzwerkvisualisierung**: Die gepflegten Verbindungsdaten können in der Objektansicht und in Reports genutzt werden, um Kommunikationsmatrizen oder Abhängigkeitsgraphen zu erzeugen.

[![Netzwerkverbindungen](../../assets/images/de/grundlagen/kategorien/net-connector.png)](../../assets/images/de/grundlagen/kategorien/net-connector.png)

## Felder

### (Quell-)IP-Adresse

Die IP-Adresse des aktuellen Objekts, von der die Verbindung ausgeht. Hier werden nur IP-Adressen angeboten, die in der Kategorie Hostadresse des Objekts gepflegt sind. Bei Servern mit mehreren Netzwerk-Interfaces ist es wichtig, die korrekte Quell-IP zu wählen, da Firewall-Regeln oft quell-IP-basiert arbeiten.

### Port-Bereich (von/bis)

Der Quell-Port-Bereich auf dem lokalen Objekt. Bei den meisten ausgehenden Verbindungen nutzt das Betriebssystem einen dynamischen Port aus dem Ephemeral-Bereich (typischerweise 1024--65535). Eine explizite Angabe ist vor allem dann sinnvoll, wenn Source-NAT-Regeln oder spezifische Firewall-Policies einen festen Quell-Port-Bereich vorschreiben.

### Listener

Die konkrete Verknüpfung zum Listener-Eintrag auf dem Zielobjekt. Dieses Feld ist **Pflicht** und bildet den Kern der Verbindungsbeziehung: Es definiert, auf welchen Port und welches Protokoll am Ziel die Verbindung aufgebaut wird. Die verfügbaren Listener werden dynamisch aus dem gewählten Zielobjekt geladen -- nur Ports, die dort in der Kategorie [Listener](net-listener.md) angelegt sind, stehen zur Auswahl.

!!! warning "Listener muss zuerst existieren"
    Bevor du eine Netzwerkverbindung anlegen kannst, muss auf dem Zielobjekt mindestens ein Listener-Eintrag vorhanden sein. Ist die Listener-Kategorie des Ziels leer, steht kein Verbindungsziel zur Verfügung. Lege also immer zuerst die Listener an, bevor du die Verbindungen konfigurierst.

### Verbunden mit

Das Zielobjekt, zu dem die Verbindung aufgebaut wird. Der Objekt-Browser filtert automatisch nach Objekten, die mindestens einen Eintrag in der Kategorie [Netzwerk-Listener (Übersicht)](net-connections-folder.md) besitzen. So wird sichergestellt, dass nur Objekte mit definierten Diensten als Verbindungsziel gewählt werden können.

### Gateway

Verknüpfung zu einem Firewall- oder Router-Objekt, über das die Verbindung geroutet wird. Dieses Feld ist besonders wertvoll für die Dokumentation von Firewall-Regeln: Zusammen mit Quell-IP, Ziel-Listener und Gateway entsteht ein vollständiger Datensatz, der einer Firewall-Regel entspricht.

### Beschreibung

Freitext für zusätzliche Informationen: Firewall-Regel-Nummer, Ticket-Referenz der Netzwerkfreigabe, Verschlüsselungsanforderungen (z.B. „TLS 1.3 erforderlich") oder Hinweise zur Authentifizierung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__NET_CONNECTOR` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Client, Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **(Quell-)IP-Adresse** | `ip_address` | Dialog (Auswahl) |
| **Port-Bereich (von)** | `port_from` | Ganzzahl |
| **Port-Bereich (bis)** | `port_to` | Ganzzahl |
| **Listener** | `connected_listener` | Dialog (Auswahl) -- Pflichtfeld |
| **Verbunden mit** | `connected_to` | Objekt-Browser (Verknüpfung) -- Pflichtfeld |
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
        "category": "C__CATG__NET_CONNECTOR",
        "data": {
            "ip_address": "192.168.1.10",
            "port_from": 1024,
            "port_to": 65535,
            "connected_listener": 47,
            "connected_to": 1055,
            "gateway": 1003,
            "description": "Verbindung zum MySQL-Server, Firewall-Regel FW-2025-112, TLS verschlüsselt"
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
        "category": "C__CATG__NET_CONNECTOR"
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
        "category": "C__CATG__NET_CONNECTOR",
        "entry": 12,
        "data": {
            "gateway": 1007,
            "description": "Gateway-Wechsel nach Firewall-Migration, Change CR-2026-015"
        }
    },
    "id": 3
}
```
