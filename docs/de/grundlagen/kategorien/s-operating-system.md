---
title: "Kategorie: Betriebssysteme (spezifisch)"
description: Dokumentation der spezifischen Kategorie Betriebssysteme in i-doit
icon:
status:
lang: de
---

# Kategorie: Betriebssysteme (spezifisch)

Die Kategorie **Betriebssysteme** ist eine **spezifische Kategorie** des Objekttyps **Betriebssystem** und beschreibt die Stammdaten eines Betriebssystem-Objekts. Sie ist eine **Single-Value-Kategorie** -- pro Betriebssystem-Objekt existiert genau ein Eintrag mit den grundlegenden Eigenschaften wie Spezifikation, Hersteller, Betriebssystemfamilie und -typ.

!!! info "Stammdaten vs. Installation -- die zwei Seiten der Betriebssystem-Dokumentation"
    Diese Kategorie beschreibt, **was** ein Betriebssystem **ist** -- seine Identität, seinen Hersteller und seine Klassifikation. Sie beantwortet **nicht** die Frage, auf welchen Servern oder Clients dieses Betriebssystem installiert ist. Diese Rückwärtsansicht entsteht automatisch: Wenn in der globalen Kategorie [Betriebssystem](operating-system.md) auf einem Server das OS-Objekt zugewiesen wird, erscheint der Server in der Installationsübersicht. Die Trennung folgt dem zentralen i-doit-Prinzip: Software wird als eigenständiges Objekt mit eigenen Stammdaten gepflegt und dann beliebig vielen Hosts zugewiesen -- ohne Daten zu duplizieren.

## Verwendung

Typische Anwendungsfälle:

- **Betriebssystem-Katalog aufbauen**: Lege für jedes im Unternehmen eingesetzte Betriebssystem ein Objekt an und pflege hier die Stammdaten. In Kombination mit der globalen Kategorie [Betriebssystem](operating-system.md) auf den Ziel-Hosts entsteht ein vollständiger Überblick über die OS-Landschaft -- von der Stammdaten-Definition bis zur tatsächlichen Installation.
- **Betriebssystemfamilie und -typ klassifizieren**: Die Felder `OS-Family` und `OS-Type` ermöglichen eine Gruppierung über einzelne Versionen hinweg. So lassen sich per Report alle Systeme mit der Familie `Linux` oder dem Typ `Server` auswerten -- unabhängig davon, ob es sich um RHEL 9, Ubuntu 22.04 oder SLES 15 handelt.
- **Herstellerübersicht**: Über das Herstellerfeld lassen sich Reports erstellen, die zeigen, von welchen Anbietern Betriebssysteme im Einsatz sind -- relevant für Vendor-Management, Vertragsverhandlungen und strategische Entscheidungen (z.B. Konsolidierung auf einen OS-Hersteller).
- **Installationsart dokumentieren**: Das Feld Installationsart unterscheidet zwischen Bereitstellungsmodellen. Bei einem Server-Umzug muss ein lokal installiertes OS neu deployt werden, während ein netzwerkbasiertes PXE-Boot-Image nur eine Konfigurationsänderung erfordert.
- **Lizenzschlüssel zentral verwalten**: Der Registrierungsschlüssel wird hier am OS-Objekt gepflegt -- nicht an jedem einzelnen Host. Änderungen wie Lizenzverlängerungen müssen so nur an einer Stelle vorgenommen werden.

[![Betriebssysteme (spezifisch)](../../assets/images/de/grundlagen/kategorien/s-operating-system.png)](../../assets/images/de/grundlagen/kategorien/s-operating-system.png)

## Felder

### Spezifikation

Freitextfeld für die nähere Beschreibung oder Spezifikation des Betriebssystems, z.B. `Langzeit-Support bis 2032` oder `Gehaertetes Image fuer DMZ-Server`. Hier lassen sich Einsatzzweck, Besonderheiten oder Konfigurationshinweise hinterlegen, die über den reinen Objektnamen hinausgehen.

### Hersteller

Der Herausgeber des Betriebssystems, z.B. `Microsoft`, `Red Hat`, `Canonical`, `SUSE`. Dialog+-Feld -- eigene Werte lassen sich bei Bedarf ergänzen. In Kombination mit Reports ergibt sich eine Übersicht wie „Anzahl eingesetzter Betriebssysteme pro Hersteller".

### Installationsart

Beschreibt, wie das Betriebssystem typischerweise bereitgestellt wird. Dialog-Feld mit vordefinierten Werten. Die Unterscheidung hat praktische Konsequenzen für Rollout-Planung und Desaster-Recovery.

### Registrierungsschlüssel

Der Lizenz- oder Produktschlüssel des Betriebssystems, z.B. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. Wird zentral am OS-Objekt gepflegt, damit er nicht auf jedem einzelnen Host hinterlegt werden muss.

!!! warning "Sicherheitshinweis"
    Registrierungsschlüssel sind sensible Daten. Stelle sicher, dass die Zugriffsrechte in i-doit so konfiguriert sind, dass nur berechtigte Personen dieses Feld einsehen können. Das Rechtekonzept in i-doit ermöglicht die Einschränkung auf Kategorie-Ebene.

### Installationspfad

Der Standard-Installationspfad des Betriebssystems, z.B. `C:\Windows` oder `/`. Dieser Wert dient als Referenz -- er beschreibt den erwarteten Pfad, nicht den tatsächlichen Pfad auf jedem einzelnen Host.

### Anzahl Installationen

Die geplante oder erlaubte Anzahl von Installationen dieses Betriebssystems. Verglichen mit der tatsächlichen Anzahl der Zuweisungen in der globalen Kategorie [Betriebssystem](operating-system.md) ergibt sich sofort, ob das Lizenzkontingent ausgeschoepft ist.

### OS-Familie

Die Betriebssystemfamilie, z.B. `Windows`, `Linux`, `macOS`, `BSD`. Dieses Feld ermöglicht eine übergreifende Gruppierung: Ein Report über alle Systeme mit OS-Familie `Linux` liefert alle Linux-Distributionen, unabhängig von Version und Hersteller.

### OS-Typ

Der Betriebssystemtyp, z.B. `Server`, `Desktop`, `Embedded`, `Mobile`. Ermöglicht die Differenzierung zwischen Server- und Client-Betriebssystemen -- relevant für Lizenzmodelle (Server-CALs vs. Desktop-Lizenzen) und für Reports, die nur Server-Betriebssysteme oder nur Desktop-Betriebssysteme auswerten sollen.

### Beschreibung

Freitext für zusätzliche Angaben: End-of-Life-Datum, bekannte Kompatibilitätsprobleme, Links zur Herstellerdokumentation, interne Freigabestatus oder Migrationshinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__OPERATING_SYSTEM` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Betriebssystem |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Spezifikation** | `specification` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Installationsart** | `installation` | Dialog (Auswahl) |
| **Registrierungsschlüssel** | `registration_key` | Text |
| **Installationspfad** | `install_path` | Text |
| **Anzahl Installationen** | `installation_count` | Ganzzahl |
| **OS-Familie** | `osFamily` | Text |
| **OS-Typ** | `systemType` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM",
        "data": {
            "specification": "Long Term Support bis 2032, gehaertetes Server-Image",
            "manufacturer": "Red Hat",
            "installation": 2,
            "registration_key": "",
            "install_path": "/",
            "installation_count": 45,
            "description": "RHEL 9 LTS. Freigegeben fuer Produktion seit 2023-01."
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
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM"
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
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM",
        "entry": 1,
        "data": {
            "installation_count": 52,
            "description": "RHEL 9 LTS. 2026-04: Installationsanzahl auf 52 erhoeht nach Rollout Standort Muenchen."
        }
    },
    "id": 3
}
```
