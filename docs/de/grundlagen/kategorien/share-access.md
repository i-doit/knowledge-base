---
title: "Kategorie: Freigabezugriff"
description: Dokumentation der Kategorie Freigabezugriff in i-doit
icon:
status:
lang: de
---

# Kategorie: Freigabezugriff

Die Kategorie **Freigabezugriff** dokumentiert, auf welche Netzwerkfreigaben ein Objekt zugreift. Sie ist eine **Multi-Value-Kategorie** — pro Objekt können beliebig viele Freigabezugriffe angelegt werden, z.B. wenn ein Client auf mehrere Dateiserver-Shares zugreift. Die Kategorie bildet die **Rückwärtsbeziehung** zur Kategorie [Freigaben](shares.md): Während Freigaben auf dem Server dokumentiert, welche Shares er bereitstellt, zeigt Freigabezugriff auf dem Client, welche Shares er konsumiert.

!!! info "Freigaben vs. Freigabezugriff"
    Die beiden Kategorien ergänzen sich:

    - **[Freigaben](shares.md)** (`C__CATG__SHARES`): Wird auf dem **Server** gepflegt und dokumentiert, welche Netzwerkfreigaben er bereitstellt (z.B. `\\SRV01\Daten$`).
    - **Freigabezugriff** (`C__CATG__SHARE_ACCESS`): Wird auf dem **Client** gepflegt und dokumentiert, auf welche Freigaben er zugreift und wo sie gemountet sind.

    Zusammen entsteht ein vollständiges Bild der Dateifreigabe-Beziehungen in der Infrastruktur.

## Verwendung

Typische Anwendungsfälle:

- **Client-Konfiguration dokumentieren**: Erfasse für jeden Client, welche Netzlaufwerke gemappt sind und wo sie eingehängt werden (Mountpoint). Das ist besonders wertvoll beim Troubleshooting, wenn ein Benutzer auf „sein Laufwerk" nicht zugreifen kann — ein Blick in i-doit zeigt sofort, welcher Server und welche Freigabe betroffen ist.
- **Impact-Analyse bei Serverwartung**: Über den Report Manager lässt sich auswerten, welche Clients auf die Freigaben eines bestimmten Servers zugreifen. Vor einer geplanten Wartung können betroffene Benutzer gezielt informiert werden.
- **Migration und Umzug**: Bei der Migration von Dateiservern zeigt ein Report über alle Freigabezugriffe, welche Clients umkonfiguriert werden müssen. Kein Client wird vergessen, kein Mountpoint übersehen.
- **Lizenz- und Compliance-Prüfung**: In manchen Fällen ist der Zugriff auf bestimmte Freigaben lizenzrelevant (z.B. Software-Repositories). Die Dokumentation in i-doit schafft Transparenz.

!!! tip "Automatisierung mit JDisc"
    JDisc kann gemountete Netzlaufwerke auf Windows-Clients automatisch erkennen und als Freigabezugriff in i-doit importieren. Das reduziert den manuellen Pflegeaufwand erheblich — besonders in großen Umgebungen mit Hunderten von Clients.

[![Freigabezugriff](../../assets/images/de/grundlagen/kategorien/share-access.png)](../../assets/images/de/grundlagen/kategorien/share-access.png)

## Felder

### Ausgewähltes Objekt

Verknüpfung zum Server-Objekt, auf dem die Freigabe liegt. Objekt-Browser-Feld — wähle hier den Dateiserver oder NAS aus, auf dessen Freigabe zugegriffen wird.

### Mountpoint

Der lokale Einhängepunkt, unter dem die Freigabe auf dem Client verfügbar ist, z.B. `Z:` (Windows-Laufwerksbuchstabe) oder `/mnt/daten` (Linux). Dieses Feld ist entscheidend für das Troubleshooting — Benutzer kennen oft nur den Laufwerksbuchstaben, nicht den UNC-Pfad.

### Freigabename

Der Name der Freigabe auf dem Server, z.B. `Daten$` oder `Projekte`. Dialog-Feld, das die auf dem verknüpften Server-Objekt in der Kategorie [Freigaben](shares.md) angelegten Shares zur Auswahl anbietet.

### Beschreibung

Freitext für zusätzliche Angaben: Zugriffsberechtigung (Lesen/Schreiben), Gruppenrichtlinie, die das Laufwerk verbindet, oder Anmerkungen zur Verwendung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__SHARE_ACCESS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Server, Client, Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Ausgewähltes Objekt** | `assigned_objects` | Objekt-Browser (Verknüpfung) |
| **Mountpoint** | `mountpoint` | Text |
| **Freigabename** | `shares` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 456,
        "category": "C__CATG__SHARE_ACCESS",
        "data": {
            "assigned_objects": 123,
            "mountpoint": "P:",
            "shares": "Projekte",
            "description": "Projektlaufwerk, Zugriff über AD-Gruppe GRP_Projekte_RW"
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
        "object": 456,
        "category": "C__CATG__SHARE_ACCESS"
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
        "object": 456,
        "category": "C__CATG__SHARE_ACCESS",
        "entry": 7,
        "data": {
            "mountpoint": "Q:",
            "description": "Laufwerksbuchstabe geändert: P: → Q: wegen Konflikt mit Drucker-Port."
        }
    },
    "id": 3
}
```
