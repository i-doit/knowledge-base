---
title: i-doit MCP
description: "Mit dem i-doit MCP Add-on verbindest du einen KI-Assistenten über das Model Context Protocol mit deiner IT-Dokumentation."
icon:
status: new
lang: de
---
# i-doit MCP

Das i-doit MCP [Add-on](../index.md) verbindet deine [IT-Dokumentation](../../glossar.md) mit KI-Clients, die das Model Context Protocol (MCP) unterstützen. Ein KI-Assistent beantwortet dann Fragen zu deiner CMDB in normaler Sprache, zum Beispiel "Welche Server haben wir in Hamburg?" oder "Wo steht LAPTOP-42?".

Der Assistent arbeitet immer mit den Rechten der Person, zu der sein Zugriffstoken gehört. Er sieht und ändert nie mehr, als diese Person in i-doit selbst dürfte. Im Auslieferungszustand ist der Zugriff nur lesend. Schreiben muss ausdrücklich eingeschaltet werden, siehe [Schreibzugriff](#schreibzugriff).

## Voraussetzungen

- i-doit 39 oder neuer. Die Adresse, mit der sich der KI-Client verbindet (`src/mcp.php`), ist Teil von i-doit 39.
- Das [i-doit API Add-on](../api/index.md), installiert und aktiv. Ohne das API Add-on lassen sich keine Kategoriedaten lesen. Objekttypen, die Suche und die allgemeinen Daten eines Objekts funktionieren auch ohne.
- Die JSON-RPC API ist für den Mandanten eingeschaltet: **JSON-RPC API aktivieren** unter **Verwaltung → Add-ons → JSON-RPC API** steht auf **Ja**. Solange die Option aus ist, wird jede Anfrage eines KI-Clients abgewiesen.
- Ein KI-Client, der MCP über HTTP unterstützt.

## Installation

Das Add-on wird wie jedes andere Add-on installiert, siehe [Add-ons](../index.md). Nach der Installation findest du es im Hauptmenü unter **Add-ons → i-doit MCP** mit drei Seiten:

- **Anleitung zum Verbinden**
- **Zugriffstoken**
- **Anfrage-Protokoll**

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → i-doit MCP** können [Rechte für Personen und Personengruppen](../../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden:

| Recht | Zweck |
| --- | --- |
| **Client-Konfiguration erzeugen** | Die Seite **Anleitung zum Verbinden** öffnen und eine Client-Konfiguration erzeugen |
| **Anfrage-Protokoll** | Das Anfrage-Protokoll ansehen (Anzeigen) und leeren (Löschen) |
| **Zugriffstoken verwalten** | Zugriffstoken ansehen, anlegen, aktivieren und deaktivieren (Anzeigen, Bearbeiten) sowie löschen (Löschen) |
| **Zugriffstoken Schreibzugriff erteilen** | Zugriffstoken für das Schreiben freigeben oder wieder auf nur lesen setzen |

Ein Zugriffstoken ist das, was einem Client Zugang zum MCP-Server gibt. Ein eigenes Recht dafür gibt es nicht. Um den Zugang zu entziehen, deaktivierst oder löschst du das Token.

## KI-Client verbinden

Öffne **Add-ons → i-doit MCP → Anleitung zum Verbinden**. Die Seite zeigt den Abschnitt **Ihren KI-Assistenten in 3 Schritten verbinden**, den **Einrichtungsstatus** und die **Client-Konfiguration**.

Der **Einrichtungsstatus** prüft, ob das API Add-on verfügbar ist und ob die JSON-RPC API für den Mandanten eingeschaltet ist. Nur wenn beides erfüllt ist, können Tool-Aufrufe Daten lesen.

### 1. Zugriffstoken besorgen

Lege auf der Seite **Zugriffstoken** mit **Token erstellen** ein Token an:

1. Wähle das **Personenobjekt**, zu dem das Token gehört. Es lassen sich nur Personenobjekte auswählen.
2. Gib optional eine **Bezeichnung** ein, zum Beispiel das Gerät oder den Client, auf dem das Token verwendet wird.
3. Speichere.

Das neue Token wird nur einmal angezeigt. Kopiere es sofort. i-doit speichert nur einen Fingerabdruck, daher lässt sich das Token später nicht mehr anzeigen. Geht es verloren, löschst du das Token und legst ein neues an.

Ein Token gehört immer zu dem Mandanten, in dem es angelegt wurde, und funktioniert nur dort. Die Person eines Tokens lässt sich nachträglich nicht ändern. Lege stattdessen für die andere Person ein neues Token an.

### 2. Konfiguration erzeugen

Füge das Token im Abschnitt **Client-Konfiguration** ein und klicke auf **Konfiguration erzeugen**. Du erhältst zwei Blöcke zum Kopieren:

- eine Konfigurationsdatei für Clients, die über eine Datei konfiguriert werden
- eine Kommandozeile für Clients, die über die Kommandozeile konfiguriert werden

Beide Blöcke enthalten bereits die Adresse deiner i-doit Installation und dein Token. Das Token-Feld ist optional. Lässt du es leer, steht in den Blöcken ein Platzhalter anstelle des Tokens.

Die Seite speichert das Token nicht. Das Feld ist bei jedem Öffnen der Seite leer.

Die Konfigurationsdatei hat diese Form:

```json
{
  "mcpServers": {
    "i-doit": {
      "type": "http",
      "url": "https://idoit.example.com/src/mcp.php",
      "headers": {
        "Authorization": "Bearer <your-token>",
        "Content-Type": "application/json",
        "Accept": "application/json"
      }
    }
  }
}
```

Die Kommandozeile, hier für Claude Code:

```shell
claude mcp add --transport http i-doit https://idoit.example.com/src/mcp.php \
  --header "Authorization: Bearer <your-token>" \
  --header "Content-Type: application/json" \
  --header "Accept: application/json"
```

!!! tip "Erzeugte Adresse verwenden"
    Kopiere die Adresse immer aus der erzeugten Konfiguration. i-doit leitet sie aus der Adresse ab, unter der du die Installation erreichst.

### 3. In den KI-Client einfügen

Füge die Konfiguration in deinen KI-Client ein. Der Client erkennt die verfügbaren Funktionen selbst. In i-doit gibt es kein Eingabefeld für Fragen: Du stellst deine Fragen in deinem KI-Client.

## Zugriffstoken verwalten

Die Seite **Zugriffstoken** listet alle Token des Mandanten. Markiere ein oder mehrere Token und nutze die Schaltflächen in der Werkzeugleiste:

- **Aktivieren** und **Deaktivieren** schalten ein Token ein oder aus. Ein Client mit einem deaktivierten Token funktioniert sofort nicht mehr.
- **Löschen** entfernt ein Token endgültig. Das lässt sich nicht rückgängig machen.
- **Schreiben erlauben** und **Nur lesen** legen fest, ob ein Token Daten ändern darf. Die Spalte **Zugriff** zeigt **nur lesen** oder **lesen und schreiben**.

Neue Token sind immer **nur lesen**.

## Schreibzugriff

Lesen funktioniert ohne weitere Einstellung. Schreiben braucht alles Folgende zugleich:

1. Das Rechtesystem von i-doit ist aktiv: **Rechtesystem** im Abschnitt **Sicherheit** der [Mandanten-Einstellungen](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md). Es ist standardmäßig aktiv.
2. **Schreibzugriff über MCP erlauben** ist unter **Verwaltung → Add-ons → i-doit MCP** eingeschaltet. Standardmäßig ist die Option aus.
3. Das Token ist für das Schreiben freigegeben (**lesen und schreiben**).

Zusätzlich wird jede einzelne Änderung gegen die CMDB-Rechte der Person geprüft, zu der das Token gehört, und sie durchläuft die Validierung und das Logbuch von i-doit.

Endgültiges Löschen (Purge) braucht zusätzlich **Endgültiges Löschen (Purge) über MCP erlauben**. Diese Option wirkt nur, solange auch **Schreibzugriff über MCP erlauben** eingeschaltet ist.

Passwörter werden nie an den KI-Client zurückgegeben und lassen sich über MCP nicht schreiben.

## Einstellungen

Die Einstellungen findest du unter **Verwaltung → Add-ons → i-doit MCP**. Zum Ansehen und Ändern brauchst du das Recht für die Systemeinstellungen.

| Einstellung | Bedeutung |
| --- | --- |
| **Standard-Ergebnisgrenze** | Wie viele Einträge ein Tool-Aufruf standardmäßig zurückgibt. Standardwert: 500. Ein Client kann weniger anfordern. Das Maximum ist 5000. |
| **Schreibzugriff über MCP erlauben** | Erlaubt Token mit Schreibfreigabe, Daten zu ändern, siehe [Schreibzugriff](#schreibzugriff) |
| **Endgültiges Löschen (Purge) über MCP erlauben** | Erlaubt zusätzlich das endgültige Löschen |

!!! info "Client neu verbinden"
    MCP-Clients sehen eine Änderung dieser Einstellungen erst, nachdem sie sich neu verbunden haben.

## Anfrage-Protokoll

Die Seite **Anfrage-Protokoll** listet jede Anfrage der KI-Clients mit Zeitpunkt, Person, Methode und Tool. **Details anzeigen** öffnet die Argumente und gegebenenfalls den Fehler einer Anfrage.

- **Als CSV exportieren** lädt das vollständige Protokoll herunter. Der Filter auf der Seite gilt nicht für den Export.
- **Log leeren** löscht alle Einträge. Das lässt sich nicht rückgängig machen.

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.0 | 2026-10-08 | Initial release |
