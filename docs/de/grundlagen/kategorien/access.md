---
title: "Kategorie: Zugriff"
description: Dokumentation der Kategorie Zugriff in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugriff

Die Kategorie **Zugriff** dokumentiert die Zugangswege zu einem Objekt. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. eine Web-Oberfläche auf Port 443, ein SSH-Zugang auf Port 22 und eine iDRAC-Remote-Console für die Out-of-Band-Verwaltung.

!!! tip "Klickbare Links direkt in der CMDB"
    Jede URL, die in dieser Kategorie hinterlegt wird, rendert i-doit als **klickbaren Link** in der Oberfläche. Ein einziger Klick öffnet die Web-Oberfläche des Geräts direkt im Browser – kein Copy-Paste, kein Nachschlagen. Gerade bei Incidents, wenn jede Sekunde zählt, ist das unbezahlbar. Die als **primär** markierte URL erscheint zusätzlich in der Objektliste, sodass du bereits aus der Listenansicht heraus direkt auf das Gerät springen kannst.

## Verwendung

Typische Anwendungsfälle:

- **Schnellzugriff aus der CMDB**: Hinterlege die URL zur Web-Oberfläche eines Servers, einer Firewall oder eines Netzwerk-Switches. i-doit rendert den Eintrag als klickbaren Link – ein Klick genügt, um direkt im Browser auf das Gerät zu springen, ohne die Adresse erst nachschlagen zu müssen. Der primäre Zugriff erscheint sogar in der Objektliste – du musst das Objekt nicht einmal öffnen, um den Link zu nutzen.
- **Notfalldokumentation**: Im Incident-Fall zählt jede Sekunde. Wenn SSH-Zugang, iLO-Konsole und IPMI-Adresse bereits in der CMDB stehen, findet das Bereitschafts-Team den richtigen Zugangsweg sofort – auch nachts, auch ohne Vorkenntnisse zum System. Kombiniere die Zugriffs-Kategorie mit der Kategorie [Kontaktzuweisung](contact.md), um nicht nur zu wissen, *wie* man auf ein System kommt, sondern auch *wer* darauf zugreifen darf und wer im Störungsfall verantwortlich ist.
- **Onboarding neuer Mitarbeiter**: Neue Kolleginnen und Kollegen erhalten über die Zugriffs-Kategorie eine strukturierte Übersicht aller relevanten Einstiegspunkte: das Ticket-System per HTTPS, der Monitoring-Server per SSH, die Datenbank per RDP auf den Jump-Host. So wird die CMDB zur zentralen Anlaufstelle für den Einstieg in die IT-Landschaft.
- **Übersicht über Zugangswege**: Über den Report Manager lässt sich auswerten, welche Objekte welche Zugriffsarten verwenden – hilfreich, um z.B. alle Systeme zu finden, die noch unverschlüsseltes HTTP oder Telnet nutzen. Ein Report wie „Alle Objekte mit Zugriffsart Telnet" deckt Sicherheitslücken auf, bevor der Auditor sie findet.
- **Verknüpfung mit der Netzwerkdokumentation**: In Kombination mit der [Hostadresse](ip.md) entsteht ein vollständiges Bild: Die Hostadresse dokumentiert die IP, die Zugriffs-Kategorie den konkreten Dienst und Port. Für ein Monitoring-System könnte das z.B. bedeuten: Hostadresse `10.10.1.50`, Zugriff `https://10.10.1.50:9090` (Prometheus UI).

[![Zugriff](../../assets/images/de/grundlagen/kategorien/access.png)](../../assets/images/de/grundlagen/kategorien/access.png)

## Felder

### Bezeichnung

Ein sprechender Name für den Zugangseintrag, z.B. `Web-Oberfläche`, `SSH-Zugang`, `iDRAC Remote Console` oder `Monitoring Dashboard`. Die Bezeichnung erscheint in der Listenansicht der Kategorie und in Reports. Wähle einen Namen, der auf den ersten Blick erkennen lässt, wohin der Link führt und wozu er dient.

### Zugriffsart

Die Art des Zugangs – also das verwendete Protokoll oder die Technologie. Dialog+-Feld mit vordefinierten Werten wie `HTTP`, `HTTPS`, `SSH`, `RDP`, `Telnet`, `iLO` oder `iDRAC`. Eigene Werte lassen sich bei Bedarf ergänzen, z.B. `VNC`, `IPMI` oder `WinRM`. Die Zugriffsart bestimmt, wie i-doit die URL in der Ansicht formatiert und welches Schema beim Klick verwendet wird.

### Host[:Port]/URL

Die vollständige Adresse des Zugangs. Hier wird die URL oder der Verbindungsstring eingetragen, z.B. `https://srv-web-01.bhb.local:8443`, `ssh://admin@10.10.1.100` oder `rdp://jumphost.intern.local`. i-doit rendert diesen Wert als klickbaren Link. Achte darauf, das Protokoll-Präfix und ggf. den Port mit anzugeben, damit der Link direkt funktioniert.

### Primärer Zugriff

Kennzeichnet, ob dieser Eintrag der bevorzugte Zugangsweg zum Objekt ist. Dialog-Feld mit den Werten `Ja` und `Nein`. Pro Objekt sollte genau ein Eintrag als primär markiert werden – dieser wird in Übersichten und der Objektliste bevorzugt angezeigt. Typischerweise ist das die Web-Oberfläche oder der am häufigsten genutzte Zugangsweg.

### Beschreibung

Freitext für zusätzliche Hinweise: Zugangsdaten-Verweis (z.B. "Credentials im Passwort-Manager unter Eintrag XY"), besondere Voraussetzungen (VPN erforderlich, Client-Zertifikat nötig) oder Einschränkungen (nur aus dem Management-Netz erreichbar, nur für Notfälle vorgesehen).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__ACCESS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Router, Switch, Drucker, Service, Virtueller Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Zugriffsart** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Host[:Port]/URL** | `url` | Text |
| **Primärer Zugriff** | `primary` | Dialog (Auswahl) |
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
        "category": "C__CATG__ACCESS",
        "data": {
            "title": "Web-Oberfläche",
            "type": "HTTPS",
            "url": "https://srv-web-01.bhb.local:8443",
            "primary": 1,
            "description": "Admin-Panel, Zugang über VPN erforderlich. Credentials im Passwort-Manager."
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
        "category": "C__CATG__ACCESS"
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
        "category": "C__CATG__ACCESS",
        "entry": 32,
        "data": {
            "title": "SSH-Zugang",
            "type": "SSH",
            "url": "ssh://admin@10.10.1.100",
            "description": "Wartungszugang für Systemadministratoren."
        }
    },
    "id": 3
}
```
