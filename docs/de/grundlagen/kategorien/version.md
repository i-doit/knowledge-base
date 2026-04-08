---
title: "Kategorie: Versionsnummer"
description: Dokumentation der Kategorie Versionsnummer in i-doit
icon:
status:
lang: de
---

# Kategorie: Versionsnummer

Die Kategorie **Versionsnummer** dokumentiert die Versionen und Releases einer Software, eines Betriebssystems oder eines Services. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. für jede veröffentlichte Version einer Anwendung oder jedes installierte Service Pack.

Diese Kategorie wird typischerweise an Objekten vom Typ **Anwendung**, **Betriebssystem** oder **Service** gepflegt. Sie bildet das Gegenstück zur Kategorie [Softwarezuweisung](application.md): Während die Softwarezuweisung dokumentiert, *welche* Software auf einem Server oder Client installiert ist, dokumentiert die Versionsnummer-Kategorie am Software-Objekt selbst, *welche Versionen* dieser Software existieren. In der Softwarezuweisung kann dann auf eine bestimmte Version verwiesen werden.

!!! info "Versionen und Softwarezuweisung"
    Damit in der Kategorie [Softwarezuweisung](application.md) eine bestimmte Version einer Anwendung ausgewählt werden kann, muss diese Version zuerst hier in der Kategorie Versionsnummer am Software-Objekt angelegt sein. Die Versionsnummer-Kategorie ist also die **Stammdaten-Quelle** für alle Versionsinformationen in i-doit. Ohne gepflegte Versionseinträge bleibt das Versionsfeld in der Softwarezuweisung leer.

## Verwendung

Typische Anwendungsfälle:

- **Software-Versionsverwaltung**: Erfasse alle veröffentlichten oder im Einsatz befindlichen Versionen einer Anwendung. Für ein Objekt „Microsoft SQL Server" könnten Einträge wie `2019 CU25`, `2022 CU12` und `2022 CU15` existieren. So entsteht ein Versionskatalog, der in Softwarezuweisungen referenziert werden kann.
- **Patchlevel-Dokumentation**: Die Felder *Servicepack*, *Kernel* und *Patchlevel* ermöglichen eine granulare Erfassung des Aktualisierungsstands. Für Betriebssysteme ist insbesondere das Kernel-Feld relevant — z.B. `5.15.0-91-generic` bei Ubuntu oder `6.1.0-18-amd64` bei Debian.
- **Compliance und Audit**: In regulierten Umgebungen muss nachgewiesen werden, welche Softwareversionen im Einsatz sind. Über den Report Manager lässt sich auswerten, welche Objekte eine bestimmte Version verwenden — z.B. „alle Server mit Java 8" oder „alle Clients mit einer veralteten Browser-Version". Diese Reports sind die Grundlage für Patch-Compliance-Berichte.
- **Lifecycle-Management**: Durch die Dokumentation aller bekannten Versionen lässt sich der Lebenszyklus einer Software nachvollziehen. End-of-Life-Versionen können in der Beschreibung gekennzeichnet werden, sodass per Report alle Systeme identifiziert werden, die noch eine nicht mehr unterstützte Version verwenden.
- **Standardisierung**: Definiere pro Anwendung eine „aktuelle Standardversion" und dokumentiere diese als eigenen Versionseintrag. In Reports lässt sich dann auswerten, welche Server oder Clients von der Standardversion abweichen — die Grundlage für Update-Kampagnen.

[![Versionsnummer](../../assets/images/de/grundlagen/kategorien/version.png)](../../assets/images/de/grundlagen/kategorien/version.png)

## Felder

### Versionsnummer

Die eigentliche Versionsnummer, z.B. `22.04.3 LTS`, `2022 CU15` oder `3.2.1`. Dieser Wert erscheint in der Listenansicht der Kategorie, in Reports und als Auswahlwert in der Kategorie [Softwarezuweisung](application.md). Empfehlung: Verwende das vom Hersteller kommunizierte Versionsformat, um Konsistenz zu gewährleisten.

### Servicepack

Die Service-Pack-Bezeichnung, z.B. `SP1`, `SP2` oder `Service Pack 3`. Besonders relevant für ältere Microsoft-Produkte (Windows Server 2008 SP2, SQL Server 2012 SP4) und andere Software mit Service-Pack-Modell.

### Kernel

Die Kernel-Version, z.B. `5.15.0-91-generic` oder `6.1.0-18-amd64`. Primär relevant für Linux-Betriebssysteme und andere Unix-artige Systeme, bei denen die Kernel-Version unabhängig von der Distributions-Version gepflegt wird. Bei Sicherheitslücken auf Kernel-Ebene (z.B. CVEs) lässt sich per Report sofort ermitteln, welche Systeme einen betroffenen Kernel verwenden.

### Patchlevel

Der Patchlevel oder das kumulative Update, z.B. `CU25`, `Patch 14` oder `2024-01`. Ermöglicht eine feingranulare Dokumentation des Aktualisierungsstands unterhalb der Hauptversion. Insbesondere bei Datenbank-Software (Oracle, SQL Server) ist der Patchlevel sicherheitsrelevant und auditpflichtig.

### Beschreibung

Freitext für zusätzliche Angaben: Release-Datum, End-of-Life-Datum, Changelog-Highlights, bekannte Einschränkungen oder Hinweise zur Kompatibilität mit anderen Softwareversionen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VERSION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Anwendung, Betriebssystem, Service |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Versionsnummer** | `title` | Text |
| **Servicepack** | `servicepack` | Text |
| **Kernel** | `kernel` | Text |
| **Patchlevel** | `patchlevel` | Text |
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
        "category": "C__CATG__VERSION",
        "data": {
            "title": "22.04.3 LTS",
            "kernel": "5.15.0-91-generic",
            "patchlevel": "2024-01",
            "description": "Ubuntu 22.04.3 LTS, Release 2024-01, Support bis April 2027."
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
        "category": "C__CATG__VERSION"
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
        "category": "C__CATG__VERSION",
        "entry": 5,
        "data": {
            "patchlevel": "2024-07",
            "description": "Patchlevel aktualisiert: 2024-01 auf 2024-07. Kernel bleibt unveraendert."
        }
    },
    "id": 3
}
```
