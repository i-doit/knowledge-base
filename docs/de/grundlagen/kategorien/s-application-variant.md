---
title: "Kategorie: Varianten"
description: Dokumentation der spezifischen Kategorie Varianten in i-doit
icon:
status:
lang: de
---

# Kategorie: Varianten

Die Kategorie **Varianten** ist eine **spezifische Kategorie** der Objekttypen **Anwendung**, **Betriebssystem** und **Dienst**. Sie definiert die verfügbaren Produktvarianten oder Editionen einer Software. Sie ist eine **Multi-Value-Kategorie** – pro Software-Objekt können beliebig viele Varianten angelegt werden, z.B. `Standard`, `Enterprise` und `Datacenter` für einen Windows Server.

## Warum Varianten statt freier Texteingabe?

In vielen Organisationen wird dieselbe Software in unterschiedlichen Editionen eingesetzt: SQL Server Standard auf Entwicklungsservern, SQL Server Enterprise in der Produktion. Ohne ein kontrolliertes Varianten-Modell schleichen sich schnell inkonsistente Bezeichnungen ein – `Enterprise`, `Ent.`, `ENTERPRISE`, `Enterprise Edition` – die Reports unbrauchbar machen und Lizenzauswertungen verfälschen.

Die Kategorie Varianten löst dieses Problem, indem sie die gültigen Editionen **zentral am Software-Objekt** definiert. In der Kategorie [Softwarezuweisung](application.md) auf den Host-Objekten steht dann ein Dialog-Feld bereit, das nur diese vordefinierten Varianten zur Auswahl anbietet. Das Ergebnis: konsistente Daten, verlässliche Reports und korrektes Lizenzmanagement.

!!! tip "Varianten vor der Zuweisung anlegen"
    Lege die Varianten **bevor** du die Software Hosts zuweist an. Nur Varianten, die in dieser Kategorie existieren, stehen in der [Softwarezuweisung](application.md) im Feld „Variante" zur Auswahl. Vergisst du diesen Schritt, bleibt das Varianten-Feld leer und Administratoren müssen nachträglich alle Zuweisungen ergänzen.

## Verwendung

Typische Anwendungsfälle:

- **Editions-Katalog pflegen**: Definiere für jede Anwendung die verfügbaren Editionen – z.B. `Community`, `Professional`, `Enterprise`. Neue Editionen (etwa nach einem Produktrelaunch des Herstellers) können jederzeit ergänzt werden, ohne bestehende Zuweisungen zu ändern.
- **Lizenzmanagement unterstützen**: Unterschiedliche Varianten haben unterschiedliche Lizenzkosten und -bedingungen. Wenn in der Softwarezuweisung die korrekte Variante gewählt ist, lässt sich per Report auswerten, wie viele Enterprise- vs. Standard-Lizenzen benötigt werden – die Grundlage für Einkaufsverhandlungen und True-Ups.
- **Compliance-Nachweise**: Bei Audits muss nachgewiesen werden, dass auf Produktionsservern die lizenzierte Enterprise-Edition läuft und nicht die Standard-Edition. Die Kombination aus Varianten-Kategorie und Softwarezuweisung liefert diesen Nachweis pro Host. In der Rückansicht über die Kategorie [Installation](s-application-assigned-obj.md) ist sofort ersichtlich, welche Variante wo im Einsatz ist.
- **Migrations- und Upgrade-Planung**: Soll eine Anwendung von Standard auf Enterprise migriert werden, zeigt ein Report über die Softwarezuweisung mit Variantenfilter alle betroffenen Hosts.

[![Varianten](../../assets/images/de/grundlagen/kategorien/s-application-variant.png)](../../assets/images/de/grundlagen/kategorien/s-application-variant.png)

## Felder

### Bezeichnung

Der Name der Variante, z.B. `Standard`, `Enterprise`, `Datacenter`, `Community Edition` oder `Professional Plus`. Wähle eine Bezeichnung, die zum offiziellen Produktnamen des Herstellers passt – das erleichtert die Zuordnung bei Lizenz-Audits und vermeidet Verwechslungen.

### Variante

Ein optionales Kürzel oder eine ergänzende Kennung für die Variante, z.B. `ENT`, `STD`, `DC`. Nützlich, wenn in Reports oder Exporten kompakte Bezeichnungen gewünscht sind. Dieses Feld kann auch für interne Klassifizierungen verwendet werden, die vom offiziellen Produktnamen abweichen.

### Beschreibung

Freitext für zusätzliche Angaben: Unterschiede zwischen den Editionen, Hinweise zu Feature-Einschränkungen (z.B. „Standard: max. 128 GB RAM, kein Always-On") oder Links zur Hersteller-Vergleichsmatrix. Eine gut gepflegte Beschreibung hilft dem IT-Einkauf bei der Entscheidung, welche Edition für einen bestimmten Einsatzzweck geeignet ist.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__APPLICATION_VARIANT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Anwendung, Betriebssystem, Dienst |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Variante** | `variant` | Text |
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
        "category": "C__CATS__APPLICATION_VARIANT",
        "data": {
            "title": "Enterprise",
            "variant": "ENT",
            "description": "Voller Funktionsumfang: Always-On, unbegrenzter RAM, Partitionierung. Lizenz pro Kern."
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
        "category": "C__CATS__APPLICATION_VARIANT"
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
        "category": "C__CATS__APPLICATION_VARIANT",
        "entry": 5,
        "data": {
            "title": "Enterprise Edition",
            "description": "Umbenennung 2026-01: Hersteller hat 'Enterprise' in 'Enterprise Edition' geändert. Feature-Umfang unverändert."
        }
    },
    "id": 3
}
```
