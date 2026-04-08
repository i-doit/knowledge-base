---
title: "Kategorie: Softwarezuweisung"
description: Dokumentation der Kategorie Softwarezuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Softwarezuweisung

Die Kategorie **Softwarezuweisung** verknüpft Software-Objekte mit dem Host, auf dem sie installiert sind. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Zuweisungen angelegt werden, z.B. wenn auf einem Server ein Betriebssystem, eine Datenbank und mehrere Fachanwendungen installiert sind.

Wichtig zum Verständnis: Software wird in i-doit als eigenständiges Objekt vom Typ **Anwendung** gepflegt – mit eigenen Kategorien für Varianten, Versionen und Lizenzen. Die Kategorie Softwarezuweisung dokumentiert nicht die Software selbst, sondern ausschließlich die **Beziehung** zwischen einer Software und einem konkreten Host. Dadurch lässt sich dieselbe Software mehreren Hosts zuweisen, ohne Stammdaten zu duplizieren.

!!! warning "Software-Objekt muss zuerst existieren"
    Die häufigste Support-Frage zu dieser Kategorie: „Warum kann ich keine Software zuweisen?" Die Antwort: Das Software-Objekt muss **zuerst als eigenständiges Objekt** vom Typ **Anwendung** angelegt werden – erst dann taucht es im Objekt-Browser dieser Kategorie auf. Die Softwarezuweisung erstellt keine neuen Software-Objekte, sie verknüpft nur bestehende. Lege also z.B. ein Objekt „Apache HTTP Server" vom Typ Anwendung an, bevor du es einem Server zuweist.

## Verwendung

Typische Anwendungsfälle:

- **Software-Inventar**: Erfasse für jeden Server, Client oder Switch, welche Software in welcher Version installiert ist. Das ergibt ein vollständiges Bild der Softwarelandschaft pro Gerät. In Kombination mit der Kategorie [Betriebssystem](operating-system.md) – die das Betriebssystem separat abbildet – entsteht ein lückenloses Software-Profil.
- **Lizenzmanagement**: Über das Feld „Zugeordnete Lizenz" wird jede Installation einem konkreten Lizenz-Objekt zugeordnet. Jede Verknüpfung zählt als eine verbrauchte Lizenz. Im Zusammenspiel mit der Kategorie Lizenzzuweisung lässt sich so auswerten, wie viele Lizenzen verbraucht sind und wo Über- oder Unterlizenzierung droht. Fehlt die Lizenzzuordnung, wird die Installation in Lizenz-Reports als **unlizenziert** ausgewiesen – ein wichtiges Signal für den Einkauf.
- **Versionstracking und Patchmanagement**: Durch die dokumentierte Versionsnummer je Host lässt sich per Report ermitteln, welche Systeme noch auf einer veralteten Version laufen und ein Update benötigen. Ein konkretes Beispiel: Der Report „Alle Server mit Java-Version < 17" liefert die Grundlage für eine gezielte Update-Kampagne – und dokumentiert gleichzeitig den Compliance-Status für Auditoren.
- **Compliance-Audits**: Reports über die Softwarezuweisung liefern eine prüfbare Übersicht aller installierten Anwendungen – inklusive Installationsdatum, Version und Lizenzzuordnung. Da jeder Eintrag auch den Typ (Betriebssystem, Software, Firmware, Dienst) enthält, lassen sich gezielte Auswertungen erstellen, z.B. „Alle Hosts mit Firmware älter als 2024".
- **Abhängigkeiten abbilden**: Über die Felder „Ziel-Datenbankschema" und „Genutzte Datenbanken" lassen sich Abhängigkeiten zwischen Anwendungen und Datenbanken dokumentieren. Im Störungsfall zeigt ein Blick auf diese Verknüpfung sofort, welche Anwendungen betroffen sind, wenn eine Datenbank-Instanz ausfällt.

[![Softwarezuweisung](../../assets/images/de/grundlagen/kategorien/application.png)](../../assets/images/de/grundlagen/kategorien/application.png)

## Felder

### Anwendung

Das Software-Objekt, das diesem Host zugewiesen wird. Es muss als eigenes Objekt vom Typ **Anwendung** in i-doit existieren, bevor es hier verknüpft werden kann. Beispiele: `Microsoft SQL Server`, `Apache HTTP Server`, `SAP ERP`. Über den Objekt-Browser lässt sich das gewünschte Software-Objekt suchen und auswählen.

### Typ

Klassifiziert die Art der zugewiesenen Software. Die verfügbaren Dialog-Werte sind:

- **Betriebssystem** – z.B. Windows Server 2022, Debian 12
- **Software** – klassische Anwendungssoftware
- **Firmware** – z.B. BIOS/UEFI-Versionen, Switch-Firmware
- **Dienst** – Hintergrunddienste und Services

Die Unterscheidung ist wichtig für Reports: So lässt sich z.B. gezielt nach allen Hosts filtern, deren Betriebssystem eine bestimmte Version unterschreitet.

### Priorität

Gibt an, ob die Software als **primäre** oder **sekundäre** Anwendung auf dem Host gilt. Primär bedeutet, dass der Host hauptsächlich für diese Software betrieben wird – etwa ein dedizierter Datenbankserver. Sekundär kennzeichnet Hilfs- oder Zusatzsoftware wie Monitoring-Agents oder Backup-Clients.

### Zugeordnete Lizenz

Verknüpft die Installation mit einem konkreten Lizenz-Objekt in i-doit. Dieses Lizenz-Objekt enthält die Lizenzdetails (Lizenztyp, Anzahl, Schlüssel). Durch die Verknüpfung hier wird eine Lizenz als „verbraucht" gezählt. Wenn keine Lizenz zugeordnet ist, wird die Installation in Lizenz-Reports als unlizenziert ausgewiesen.

### Zugeordneter IT-Service

Ordnet die Softwareinstallation einem IT-Service zu. Das ist besonders nützlich für ITSM-Prozesse: Wenn ein IT-Service wie „E-Mail" definiert ist, können alle zugehörigen Softwareinstallationen (Exchange Server, Spam-Filter, Antivirus auf dem Mailserver) diesem Service zugeordnet werden. Ausfälle lassen sich so direkt auf betroffene Services zurückführen.

### Variante

Die Produktvariante oder Edition der Software, z.B. `Enterprise`, `Standard`, `Community`, `Professional`. Dialog-Feld – die verfügbaren Varianten werden am Software-Objekt selbst in der Kategorie „Varianten" definiert und stehen hier zur Auswahl.

### Versionsnummer

Die konkret installierte Version der Software auf diesem Host, z.B. `2024.1`, `8.0.32`, `22H2`. Dialog+-Feld – neue Versionen können direkt eingegeben oder aus der am Software-Objekt hinterlegten Versionsliste gewählt werden. Dieses Feld ist zentral für Patchmanagement-Reports.

### Ziel-Datenbankschema

Verknüpft die Softwareinstallation mit einem Datenbankschema-Objekt. Relevant für Anwendungen, die auf ein bestimmtes Datenbankschema zugreifen – z.B. eine ERP-Anwendung, die das Schema `SAP_PROD` auf einem SQL-Server nutzt.

### Genutzte Datenbanken

Verknüpft die Softwareinstallation mit Datenbank-Objekten, die von dieser Anwendung genutzt werden. Im Unterschied zum Ziel-Datenbankschema wird hier die Datenbank-Instanz selbst referenziert. Nützlich, um Abhängigkeiten zwischen Anwendungen und Datenbanken abzubilden.

### Installationsdatum

Das Datum, an dem die Software auf diesem Host installiert wurde. Hilfreich für Lifecycle-Tracking und Compliance-Nachweise – z.B. um nachzuweisen, wann ein Sicherheitsupdate eingespielt wurde.

### Beschreibung

Freitext für zusätzliche Angaben: Installationshinweise, Konfigurationsbesonderheiten, Ticket-Referenzen zum Change oder sonstige Anmerkungen zur Softwarezuweisung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__APPLICATION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Virtual Server, Switch, Router, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Anwendung** | `application` | Objekt-Browser (Verknüpfung) |
| **Typ** | `application_type` | Dialog (Auswahl) |
| **Priorität** | `application_priority` | Dialog (Auswahl) |
| **Zugeordnete Lizenz** | `assigned_license` | Objekt-Browser (Verknüpfung) |
| **Zugeordneter IT-Service** | `assigned_it_service` | Objekt-Browser (Verknüpfung) |
| **Variante** | `assigned_variant` | Dialog (Auswahl) |
| **Versionsnummer** | `assigned_version` | Dialog+ (erweiterbare Auswahl) |
| **Ziel-Datenbankschema** | `assigned_database_schema` | Objekt-Browser (Verknüpfung) |
| **Genutzte Datenbanken** | `assigned_databases` | Objekt-Browser (Verknüpfung) |
| **Installationsdatum** | `installDate` | Datum/Zeit |
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
        "category": "C__CATG__APPLICATION",
        "data": {
            "application": 456,
            "application_type": 2,
            "application_priority": 1,
            "assigned_license": 789,
            "assigned_variant": "Enterprise",
            "assigned_version": "2024.1",
            "installDate": "2025-03-15",
            "description": "Installiert im Rahmen von CHG-2025-0042. Konfiguration laut Standard-Template."
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
        "category": "C__CATG__APPLICATION"
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
        "category": "C__CATG__APPLICATION",
        "entry": 32,
        "data": {
            "assigned_version": "2024.2",
            "description": "Update auf 2024.2 am 2025-06-10, siehe CHG-2025-0098."
        }
    },
    "id": 3
}
```
