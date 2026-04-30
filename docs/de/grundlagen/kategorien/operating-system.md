---
title: "Kategorie: Betriebssystem"
description: Dokumentation der Kategorie Betriebssystem in i-doit
icon:
status:
lang: de
---

# Kategorie: Betriebssystem

Die Kategorie **Betriebssystem** dokumentiert die installierten Betriebssysteme eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Dual-Boot-Systemen mit zwei parallel installierten Betriebssystemen.

!!! warning "Betriebssystem als eigenes Objekt — häufiger Stolperstein"
    Das Betriebssystem selbst muss **zuerst als eigenes Objekt** vom Typ **Betriebssystem** in i-doit angelegt werden. Erst dann kann es in dieser Kategorie über den Objekt-Browser ausgewählt werden. Das ist einer der häufigsten Stolpersteine für neue Benutzer: Wer versucht, den OS-Namen als Freitext einzutragen, findet kein passendes Feld. Lege also z.B. ein Objekt „Windows Server 2022" oder „RHEL 9" an, bevor du die Kategorie Betriebssystem an einem Server befüllst.

## Verwendung

Typische Anwendungsfälle:

- **Software-Inventar**: Dokumentiere, welches Betriebssystem auf welchem Server, Client oder virtuellen Maschine installiert ist. Zusammen mit der Kategorie Softwarezuweisung entsteht ein vollständiges Software-Profil.
- **Patch-Compliance**: Die Versionsnummer ist der Schlüssel für Patch-Compliance-Reports. Ein Report wie „Alle Windows-Server, die noch nicht auf Version 23H2 sind" zeigt sofort den Handlungsbedarf. In Kombination mit dem Benachrichtigungssystem können die zuständigen Administratoren (aus der [Kontaktzuweisung](contact.md)) automatisch informiert werden.
- **Lizenzmanagement**: Über das Feld „Zugeordnete Lizenz" wird jedes installierte Betriebssystem mit dem passenden Lizenzobjekt verknüpft. Der Report Manager zeigt dann, welche Lizenzen zugewiesen sind, wo Lücken bestehen und ob die Anzahl der genutzten Lizenzen das Kontingent überschreitet. Ohne diese Verknüpfung bleibt die Lizenzübersicht unvollständig.
- **Lifecycle-Tracking**: Das Installationsdatum zeigt, wie lange ein System bereits läuft. In Kombination mit den End-of-Life-Daten des Betriebssystems lassen sich Systeme identifizieren, die ein Upgrade oder eine Neuinstallation brauchen — bevor der Hersteller-Support ausläuft.
- **Compliance**: Auswertungen über den Report Manager machen sichtbar, welche Systeme veraltete oder nicht freigegebene Betriebssystemversionen nutzen. In regulierten Umgebungen (ISO 27001, BSI-Grundschutz) ist das ein wesentlicher Nachweis.

[![Betriebssystem](../../assets/images/de/grundlagen/kategorien/operating-system.png)](../../assets/images/de/grundlagen/kategorien/operating-system.png)

## Felder

### Betriebssystem

Das Betriebssystem-Objekt, das auf diesem System installiert ist, z.B. `RHEL 9.4`, `Windows Server 2022` oder `Ubuntu 24.04 LTS`. Über den Objekt-Browser wird ein bestehendes Objekt vom Typ Betriebssystem ausgewählt. Dieses Feld stellt die zentrale Verknüpfung zwischen dem dokumentierten System und dem OS-Objekt her.

### Typ

Die Art der Softwarezuweisung. Für Betriebssysteme ist der Wert `Betriebssystem` vorbelegt. Dieses Feld unterscheidet den Eintrag von regulären Softwarezuweisungen.

### Priorität

Legt fest, ob es sich um das primäre oder ein sekundäres Betriebssystem handelt. Bei Dual-Boot-Systemen erhält das Standard-OS die Priorität `Primär`, weitere Installationen `Sekundär`.

### Zugeordnete Lizenz

Die Lizenz, die diesem Betriebssystem zugewiesen ist, z.B. ein Windows-Server-Lizenzobjekt. Über den Objekt-Browser wird das passende Lizenzobjekt verknüpft. **Diese Verknüpfung ist die Brücke zum Lizenzmanagement-System von i-doit**: Nur wenn die Lizenz hier zugewiesen ist, erscheint das System in den Lizenzübersichten und Compliance-Auswertungen. Ein Report wie „Alle Server ohne zugewiesene OS-Lizenz" deckt Lücken sofort auf.

### Variante

Die Edition oder Variante des Betriebssystems, z.B. `Standard`, `Datacenter`, `Enterprise` oder `Desktop`. Ermöglicht eine feinere Unterscheidung innerhalb derselben Betriebssystem-Version.

### Versionsnummer

Die konkrete Versionsnummer des installierten Betriebssystems, z.B. `9.4`, `22H2` oder `24.04`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. **Dieses Feld ist die Grundlage für Patch-Compliance-Reports.** Pflege es konsequent bei jedem Update, damit Reports wie „Alle Systeme mit Version kleiner als X" zuverlässige Ergebnisse liefern.

### Genutzte Datenbanken

Datenbank-Objekte, die auf diesem System laufen und mit dem Betriebssystem verknüpft werden sollen. Über den Objekt-Browser können ein oder mehrere Datenbankobjekte zugeordnet werden.

### Zugeordneter IT-Service

Der IT-Service, dem dieses System zugeordnet ist. Ermöglicht die direkte Verknüpfung zwischen dem Betriebssystem-Eintrag und einem Service-Objekt – hilfreich für Service-Katalog und Impact-Analysen.

### Installationsdatum

Das Datum, an dem das Betriebssystem installiert wurde. Dieses Feld zeigt, wie lange ein System bereits in Betrieb ist — eine wichtige Information für Lifecycle-Planung und Kapazitätsentscheidungen. Ein Server, der seit fünf Jahren ohne Neuinstallation läuft, verdient mehr Aufmerksamkeit als einer, der erst kürzlich aufgesetzt wurde. In Reports lassen sich damit auch Migrationswellen nachvollziehen und planen.

### Beschreibung

Freitext für zusätzliche Angaben: Patchstand, Build-Nummer, Besonderheiten der Installation, Hinweise zu geplanten Upgrades oder sonstige Anmerkungen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__OPERATING_SYSTEM` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Router, Switch, Virtual Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Betriebssystem** | `application` | Objekt-Browser (Verknüpfung) |
| **Typ** | `application_type` | Dialog (Auswahl) |
| **Priorität** | `application_priority` | Dialog (Auswahl) |
| **Zugeordnete Lizenz** | `assigned_license` | Objekt-Browser (Verknüpfung) |
| **Variante** | `assigned_variant` | Dialog (Auswahl) |
| **Versionsnummer** | `assigned_version` | Dialog+ (erweiterbare Auswahl) |
| **Genutzte Datenbanken** | `assigned_databases` | Objekt-Browser (Verknüpfung) |
| **Zugeordneter IT-Service** | `assigned_it_service` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__OPERATING_SYSTEM",
        "data": {
            "application": 456,
            "application_type": "Betriebssystem",
            "application_priority": "Primär",
            "assigned_variant": "Datacenter",
            "assigned_version": "22H2",
            "assigned_license": 789,
            "installDate": "2025-03-15",
            "description": "Windows Server 2022 Datacenter, Build 20348, sauber installiert."
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
        "category": "C__CATG__OPERATING_SYSTEM"
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
        "category": "C__CATG__OPERATING_SYSTEM",
        "entry": 32,
        "data": {
            "assigned_version": "23H2",
            "description": "Upgrade auf 23H2 durchgeführt am 2025-11-10."
        }
    },
    "id": 3
}
```
