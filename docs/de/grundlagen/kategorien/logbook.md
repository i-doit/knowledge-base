---
title: "Kategorie: Logbuch"
description: Dokumentation der Kategorie Logbuch in i-doit
icon:
status:
lang: de
---

# Kategorie: Logbuch

Die Kategorie **Logbuch** zeigt die vollständige Änderungshistorie eines Objekts. Sie ist eine **Multi-Value-Kategorie** – jede Änderung an einer beliebigen Kategorie des Objekts erzeugt automatisch einen neuen Eintrag. Die Einträge werden **nicht manuell angelegt**, sondern von i-doit im Hintergrund protokolliert, sobald ein Benutzer oder ein API-Aufruf Daten verändert.

!!! info "Nur-Lese-Kategorie"
    Das Logbuch ist eine reine **Protokollkategorie**. Du kannst Einträge lesen und filtern, aber nicht manuell erstellen oder bearbeiten. Die Daten werden ausschließlich vom System geschrieben und sind damit manipulationssicher im Sinne einer Audit-Trail-Funktion.

## Verwendung

Typische Anwendungsfälle:

- **Audit Trail und Compliance**: Das Logbuch beantwortet die zentrale Frage „Wer hat wann was geändert?". Für Audits nach ISO 27001 oder BSI-Grundschutz ist diese lückenlose Nachverfolgbarkeit unverzichtbar. Prüfer können anhand der Logbucheinträge nachvollziehen, ob Änderungen autorisiert und dokumentiert waren.
- **Fehlersuche und Troubleshooting**: Wenn ein Server plötzlich nicht mehr erreichbar ist, zeigt das Logbuch, ob kurz vorher IP-Adressen, Ports oder Konfigurationen geändert wurden. Die Kombination aus Zeitstempel, Benutzer und geändertem Feld führt oft schneller zur Ursache als jedes Monitoring.
- **Nachvollziehbarkeit bei Personalwechsel**: Verlässt ein Administrator das Unternehmen, bleibt im Logbuch sichtbar, welche Änderungen diese Person an welchen Objekten vorgenommen hat. Das ist besonders wertvoll bei der Übergabe an Nachfolger.
- **Automatisierungskontrolle**: API-gesteuerte Änderungen (z.B. durch JDisc Discovery, CSV-Import oder eigene Skripte) werden ebenfalls protokolliert. So lässt sich prüfen, ob ein automatischer Import die erwarteten Werte geschrieben hat oder ob ungewollte Überschreibungen stattfanden.

!!! tip "Logbuch im Report Manager auswerten"
    Mit dem Report Manager kannst du Logbucheinträge gezielt auswerten – etwa alle Änderungen der letzten 7 Tage an Servern im Status „In Betrieb" oder alle Änderungen durch einen bestimmten Benutzer. Solche Reports helfen bei der regelmäßigen Kontrolle und lassen sich als geplante Reports per E-Mail versenden.

[![Logbuch](../../assets/images/de/grundlagen/kategorien/logbook.png)](../../assets/images/de/grundlagen/kategorien/logbook.png)

## Felder

### Datum

Der exakte Zeitstempel der Änderung, inklusive Uhrzeit. Dieser Wert wird automatisch beim Speichern gesetzt und ist nicht änderbar. Über das Datum lassen sich Änderungen zeitlich einordnen und mit externen Ereignissen (Wartungsfenster, Incidents) korrelieren.

### Objekt

Das Objekt, an dem die Änderung vorgenommen wurde. Bei der Ansicht innerhalb eines Objekts ist dies immer das aktuelle Objekt selbst. Im globalen Logbuch (unter **Extras → CMDB → Logbuch**) kannst du alle Objekte übergreifend durchsuchen.

### Ereignis

Die Art der Änderung, z.B. `Kategorie geändert`, `Objekt erstellt`, `Objekt archiviert` oder `Objekt gelöscht`. Dieses Feld gibt auf einen Blick Auskunft darüber, ob es sich um eine inhaltliche Änderung, eine Statusänderung oder eine strukturelle Aktion handelt.

### Quelle

Die Herkunft der Änderung: `GUI` (manuell über die Oberfläche), `API` (über die JSON-RPC-Schnittstelle), `Import` (CSV, JDisc, OCS u.a.) oder `Internal` (systeminterne Aktionen). Dieses Feld ist entscheidend, um manuelle Änderungen von automatisierten zu unterscheiden.

### Benutzer

Das Benutzer-Objekt, das die Änderung ausgelöst hat. Bei API-Zugriffen steht hier der API-Benutzer, bei manuellen Änderungen der angemeldete Benutzer. In Kombination mit der [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/index.md) lässt sich so prüfen, ob der Benutzer die nötige Berechtigung für die Änderung hatte.

### Objekttyp

Der Objekttyp des betroffenen Objekts zum Zeitpunkt der Änderung, z.B. `Server`, `Client` oder `Netzwerk`. Dieser Wert wird statisch gespeichert und bleibt auch dann erhalten, wenn der Objekttyp nachträglich umbenannt wird.

### Kategorie

Die Kategorie, in der die Änderung stattfand, z.B. `Hostadresse`, `Modell` oder `Kontaktzuweisung`. Damit ist sofort erkennbar, welcher Bereich des Objekts betroffen war.

### Alarmstufe

Die Dringlichkeitsstufe des Logbucheintrags: von informativen Meldungen (z.B. Objekt geöffnet) bis hin zu kritischen Änderungen (z.B. Objekt unwiderruflich gelöscht). Die Alarmstufe erleichtert das Filtern bei der Auswertung.

### Benutzername (statisch)

Der Benutzername als statischer Textwert zum Zeitpunkt der Änderung. Selbst wenn der Benutzer später umbenannt oder gelöscht wird, bleibt dieser Wert erhalten – wichtig für die langfristige Nachvollziehbarkeit.

### Ereignis (statisch)

Der Ereignistext als statischer Wert. Analog zum statischen Benutzernamen stellt dieses Feld sicher, dass die Beschreibung des Ereignisses auch dann lesbar bleibt, wenn Systemtexte geändert werden.

### Kommentar

Ein optionaler Freitext, der bei bestimmten Aktionen automatisch gesetzt wird oder manuell über die Logbuch-Oberfläche hinzugefügt werden kann. Hier stehen oft Details wie der Grund einer Statusänderung.

### Änderungen

Das Herzstück des Logbucheintrags: die detaillierten Feldänderungen im Vorher-Nachher-Format. Zeigt z.B. `IP-Adresse: 10.0.0.1 → 10.0.0.2`. Dieses Feld macht das Logbuch zum effektiven Debugging-Werkzeug.

### Zugriffstyp

Der Grund oder Kontext des Zugriffs. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen, z.B. `Wartung`, `Incident`, `Change Request`.

### Beschreibung

Freitext für zusätzliche Erläuterungen zum Logbucheintrag.

!!! warning "Logbuch-Einträge nicht löschbar"
    Im Normalbetrieb können Logbucheinträge nicht gelöscht werden. Dies ist ein bewusstes Design, um die Integrität des Audit Trails sicherzustellen. Nur über die Logbuch-Bereinigung in der Verwaltung lassen sich alte Einträge archivieren oder entfernen — und auch das sollte nur nach reiflicher Überlegung geschehen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__LOGBOOK` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Alle Objekttypen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Datum** | `date` | Datum/Zeit |
| **Objekt** | `object` | Ganzzahl |
| **Ereignis** | `event` | Dialog (Auswahl) |
| **Quelle** | `source` | Dialog (Auswahl) |
| **Benutzer** | `user` | Ganzzahl |
| **Objekttyp** | `object_type` | Text |
| **Kategorie** | `category` | Text |
| **Alarmstufe** | `alert_level` | Dialog (Auswahl) |
| **Benutzername (statisch)** | `user_name_static` | Text |
| **Ereignis (statisch)** | `event_static` | Text |
| **Kommentar** | `comment` | Textfeld (mehrzeilig) |
| **Änderungen** | `changes` | Text |
| **Zugriffstyp** | `reason` | Dialog+ (erweiterbare Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__LOGBOOK"
    },
    "id": 1
}
```

!!! info "Kein Erstellen oder Aktualisieren über die API"
    Logbucheinträge werden ausschließlich vom System erzeugt. Die API-Methode `cmdb.category.save` ist für diese Kategorie nicht vorgesehen. Änderungen an anderen Kategorien erzeugen automatisch die entsprechenden Logbucheinträge.
