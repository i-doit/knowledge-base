---
title: "Kategorie: Installation"
description: Dokumentation der spezifischen Kategorie Installation in i-doit
icon:
status:
lang: de
---

# Kategorie: Installation

Die Kategorie **Installation** ist eine **spezifische Kategorie** der Objekttypen **Anwendung**, **Betriebssystem** und **Dienst**. Sie zeigt, auf welchen Hosts diese Software installiert ist. Sie ist eine **Multi-Value-Kategorie** – pro Software-Objekt werden beliebig viele zugewiesene Hosts aufgelistet.

!!! tip "Rückwärtsansicht – Lesen, nicht Schreiben"
    Diese Kategorie ist die **Rückansicht** der globalen Kategorie [Softwarezuweisung](application.md). Die Daten werden nicht hier gepflegt, sondern auf den Host-Objekten (Servern, Clients) über die Kategorie Softwarezuweisung. Wenn du einem Server eine Anwendung zuweist, erscheint dieser Server automatisch in der Kategorie Installation des Anwendungs-Objekts. Das Prinzip ist analog zu anderen Rückwärtsverknüpfungen in i-doit: Die Daten werden an einer Stelle gepflegt und an der anderen Stelle nur angezeigt.

## Verwendung

Typische Anwendungsfälle:

- **Installationsstatus überblicken**: Öffne ein Anwendungs-Objekt wie „Microsoft SQL Server" und wechsle in die Kategorie Installation. Du siehst sofort auf einen Blick alle Server und Clients, auf denen diese Software zugewiesen ist – inklusive Version, Variante und Lizenzzuordnung. Das erspart die Suche über einzelne Host-Objekte und beantwortet die Frage „Wo überall läuft diese Software?" in Sekunden.
- **Impact-Analyse bei Software-Änderungen**: Steht ein Major-Update oder eine Abkündigung bevor, zeigt diese Kategorie die vollständige Liste betroffener Hosts. Wird beispielsweise Java 11 abgekündigt, findest du hier alle Systeme, die migriert werden müssen – ohne einen separaten Report erstellen zu müssen.
- **Lizenz-Auslastung prüfen**: Die Anzahl der Einträge in dieser Kategorie entspricht der Anzahl der Installationen. Verglichen mit der Angabe im Feld „Anzahl Installationen" der Kategorie [Anwendungen (spezifisch)](s-application.md) oder den verfügbaren Lizenzen im Lizenz-Objekt ergibt sich sofort, ob Über- oder Unterlizenzierung vorliegt.
- **Rollout-Fortschritt verfolgen**: Bei einer unternehmensweiten Software-Einführung zeigt die Kategorie den aktuellen Stand: Welche Hosts haben die Software bereits zugewiesen bekommen, welche fehlen noch?
- **Audit-Vorbereitung**: Bei Lizenz-Audits verlangt der Hersteller eine Liste aller Installationen. Diese Kategorie liefert genau das – exportierbar über die API oder den Report Manager.

[![Installation](../../assets/images/de/grundlagen/kategorien/s-application-assigned-obj.png)](../../assets/images/de/grundlagen/kategorien/s-application-assigned-obj.png)

## Felder

Die Kategorie zeigt die folgenden Felder an, die aus der [Softwarezuweisung](application.md) der jeweiligen Host-Objekte stammen:

### Installiert auf

Das Host-Objekt, auf dem die Anwendung installiert ist – z.B. ein Server, Client oder eine virtuelle Maschine. Per Klick auf das Objekt gelangst du direkt zum Host und seiner Softwarezuweisung.

### Typ

Der Typ der Zuweisung – Betriebssystem, Software, Firmware oder Dienst. Übernommen aus der Softwarezuweisung des Hosts.

### Priorität

Gibt an, ob die Software als primäre oder sekundäre Anwendung auf dem Host gilt.

### Zugeordnete Lizenz

Die dem Host zugeordnete Lizenz für diese Anwendung – direkt aus der Softwarezuweisung übernommen.

### Zugeordneter Lizenzschlüssel

Der dem Host zugeordnete konkrete Lizenzschlüssel, falls in der Softwarezuweisung hinterlegt.

### Ziel-Datenbankschema

Verknüpfung mit dem Datenbankschema, das die Anwendung auf diesem Host nutzt.

### Zugeordneter IT-Service

Falls die Installation einem IT-Service zugeordnet ist, wird dieser hier angezeigt.

### Variante

Die gewählte Variante der Anwendung (z.B. Enterprise, Standard), wie sie in der Softwarezuweisung des Hosts hinterlegt ist. Die verfügbaren Varianten werden in der Kategorie [Varianten](s-application-variant.md) am Anwendungs-Objekt definiert.

### Versionsnummer

Die konkret auf dem Host installierte Version.

### Nagios-Services vererben

Steuert, ob Nagios-Services von der Anwendung auf den Host vererbt werden. Relevant nur bei aktiver Nagios-Integration.

### Genutzte Datenbanken

Verknüpfung mit Datenbank-Objekten, die von dieser Anwendung auf dem Host genutzt werden.

### Installiert am

Das Datum, an dem die Software auf diesem Host installiert wurde.

### Beschreibung

Freitext aus der Softwarezuweisung des Hosts.

!!! warning "Keine direkte Bearbeitung"
    Alle Felder in dieser Kategorie sind eine **Rückwärtsansicht**. Änderungen müssen auf dem jeweiligen Host-Objekt in der Kategorie [Softwarezuweisung](application.md) vorgenommen werden. Das gilt auch für die API: Zum Ändern einer Installation verwende `C__CATG__APPLICATION` auf dem Host-Objekt.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__APPLICATION_ASSIGNED_OBJ` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Anwendung, Betriebssystem, Dienst |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Installiert auf** | `object` | Objekt-Browser (Verknüpfung) |
| **Typ** | `application_type` | Dialog (Auswahl) |
| **Priorität** | `application_priority` | Dialog (Auswahl) |
| **Zugeordnete Lizenz** | `assigned_license` | Objekt-Browser (Verknüpfung) |
| **Zugeordneter Lizenzschlüssel** | `assigned_license_key` | Text |
| **Ziel-Datenbankschema** | `assigned_database_schema` | Objekt-Browser (Verknüpfung) |
| **Zugeordneter IT-Service** | `assigned_it_service` | Objekt-Browser (Verknüpfung) |
| **Variante** | `assigned_variant` | Dialog (Auswahl) |
| **Versionsnummer** | `assigned_version` | Dialog (Auswahl) |
| **Nagios-Services vererben** | `bequest_nagios_services` | Dialog (Auswahl) |
| **Genutzte Datenbanken** | `assigned_databases` | Objekt-Browser (Verknüpfung) |
| **Installiert am** | `installDate` | Datum/Zeit |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 456,
        "category": "C__CATS__APPLICATION_ASSIGNED_OBJ"
    },
    "id": 1
}
```

!!! note "Nur Lesen über die API"
    Da es sich um eine Rückwärtsverknüpfung handelt, werden Installationen nicht über diese Kategorie erstellt oder geändert. Verwende stattdessen `C__CATG__APPLICATION` auf dem jeweiligen Host-Objekt, um Softwarezuweisungen zu erstellen, zu ändern oder zu löschen. Beispiel: Um „Apache HTTP Server" dem Server mit ID 789 zuzuweisen, sende den `cmdb.category.save`-Request mit `"object": 789` und `"category": "C__CATG__APPLICATION"`.
