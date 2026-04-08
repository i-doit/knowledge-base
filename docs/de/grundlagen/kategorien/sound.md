---
title: "Kategorie: Soundkarte"
description: Dokumentation der Kategorie Soundkarte in i-doit
icon:
status:
lang: de
---

# Kategorie: Soundkarte

Die Kategorie **Soundkarte** dokumentiert die Audio-Hardware eines Objekts. Sie ist eine **Multi-Value-Kategorie** — pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Workstations mit einer Onboard-Soundkarte und einer zusätzlichen professionellen Audio-Schnittstelle. Die Kategorie ist vor allem für **Arbeitsplatzrechner** relevant — auf Servern ist Audio-Hardware in der Regel nicht vorhanden oder bewusst deaktiviert.

!!! tip "Automatische Erkennung mit JDisc"
    JDisc kann Soundkarten automatisch erkennen und in i-doit importieren — inklusive Hersteller und Modellbezeichnung. Bei großen Client-Rollouts spart das erheblichen Pflegeaufwand. Beachte jedoch, dass auf Servern erkannte Audio-Geräte (z.B. virtuelle Soundkarten in VMs) meist irrelevant sind und beim Import gefiltert werden sollten.

## Verwendung

Typische Anwendungsfälle:

- **Arbeitsplatz-Inventar**: Erfasse Hersteller und Modell der verbauten Soundkarte. Zusammen mit den Kategorien [CPU](cpu.md), [Grafikkarte](graphic.md) und Speicher entsteht ein vollständiges Hardware-Profil des Arbeitsplatzes. Besonders relevant für Multimedia-Arbeitsplätze, Callcenter-Agenten und Konferenzräume.
- **Spezialarbeitsplätze**: In Tonstudios, Redaktionen oder bei Telefonarbeitsplätzen ist die Soundkarte eine geschäftskritische Komponente. Die Dokumentation von Hersteller, Modell und Treiberversion (im Beschreibungsfeld) ist für Support und Ersatzbeschaffung unverzichtbar.
- **Sicherheits- und Compliance-Prüfung**: In sicherheitskritischen Umgebungen ist Audio-Hardware auf Servern und sensiblen Workstations oft bewusst deaktiviert. Ein Report über alle Objekte mit einer aktiven Soundkarte kann Abweichungen von der Security-Policy aufdecken.
- **Hardware-Lifecycle**: Bei einem Austausch oder Upgrade der Soundkarte (z.B. von Onboard auf eine dedizierte USB-Audio-Schnittstelle) den alten Eintrag archivieren und einen neuen anlegen. Die Änderungshistorie bleibt so lückenlos erhalten.

!!! info "Server und virtuelle Maschinen"
    Auf Servern und virtuellen Maschinen ist die Soundkarte-Kategorie in der Regel nicht relevant und kann über die Objekttyp-Konfiguration ausgeblendet werden, um die Oberfläche schlank zu halten. Aktiviere sie gezielt nur bei Objekttypen, bei denen Audio-Hardware tatsächlich dokumentiert werden muss.

[![Soundkarte](../../assets/images/de/grundlagen/kategorien/sound.png)](../../assets/images/de/grundlagen/kategorien/sound.png)

## Felder

### Hersteller

Der Hersteller der Soundkarte, z.B. `Realtek`, `Creative`, `Focusrite` oder `Intel`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen.

### Bezeichnung

Der Name oder die Modellbezeichnung der Soundkarte, z.B. `Realtek ALC897` oder `Focusrite Scarlett 2i2`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Beschreibung

Freitext für zusätzliche Angaben: Treiberversion, Schnittstelle (PCIe, USB, Onboard), Anzahl der Ein-/Ausgangskanäle, unterstützte Abtastraten oder besondere Konfigurationshinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__SOUND` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Server, Client, Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Bezeichnung** | `title` | Text |
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
        "category": "C__CATG__SOUND",
        "data": {
            "manufacturer": "Focusrite",
            "title": "Scarlett 2i2 3rd Gen",
            "description": "USB-C Audio-Interface, 2 Eingänge, 2 Ausgänge, 192 kHz/24-Bit, Treiber 4.102.28"
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
        "category": "C__CATG__SOUND"
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
        "category": "C__CATG__SOUND",
        "entry": 2,
        "data": {
            "title": "Scarlett 2i2 4th Gen",
            "description": "Upgrade 2025-08: Austausch 3rd Gen auf 4th Gen, Treiber 5.12.0, USB-C."
        }
    },
    "id": 3
}
```
