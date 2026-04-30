---
title: "Kategorie: Vertragszuweisung"
description: Dokumentation der Kategorie Vertragszuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Vertragszuweisung

Die Kategorie **Vertragszuweisung** verknüpft ein Objekt mit einem oder mehreren Verträgen. Sie ist eine **Multi-Value-Kategorie** – pro Objekt lassen sich beliebig viele Vertragszuweisungen anlegen, etwa wenn ein Server gleichzeitig unter einem Wartungsvertrag, einem Support-Vertrag und einem Leasing-Vertrag steht.

Wichtig zum Verständnis: Der Vertrag selbst ist ein eigenständiges Objekt vom Typ **Vertrag** mit eigenen Kategorien für Laufzeit, Kosten, Kündigungsfristen und Vertragspartner. In der Kategorie Vertragszuweisung wird lediglich die **Verknüpfung** zwischen dem konkreten Gerät und dem Vertragsobjekt hergestellt – optional ergänzt um eine individuelle Laufzeit und Reaktionszeit, die vom Gesamtvertrag abweichen darf.

!!! tip "Individuelle Laufzeiten pro Gerät"
    Die Felder **Vertragsbeginn** und **Vertragsende** in der Vertragszuweisung können vom Gesamtvertrag abweichen. Das ist kein Fehler, sondern gewollt: Wenn ein Server erst drei Monate nach Vertragsbeginn in den Wartungsvertrag aufgenommen wird, trägt er sein eigenes Startdatum. Ebenso kann ein Gerät vorzeitig aus dem Vertrag herausfallen, z.B. bei Rückgabe oder Austausch. Der Report „Verträge, die in 90 Tagen auslaufen" berücksichtigt diese individuellen Daten und verhindert, dass Vertragslücken unbemerkt entstehen.

## Verwendung

Typische Anwendungsfälle:

- **Wartungsverträge zuordnen**: Weise Servern, Switches oder Storage-Systemen ihren Hardware-Wartungsvertrag zu. Im Report Manager lässt sich dann auf einen Blick auswerten, welche Geräte durch einen aktiven Wartungsvertrag abgedeckt sind – und welche nicht. In Kombination mit der Kategorie [Buchhaltung](accounting.md) ergibt sich ein vollständiges Bild: Die Herstellergarantie (aus der Buchhaltung) läuft z.B. nach 36 Monaten ab, der Wartungsvertrag (aus der Vertragszuweisung) übernimmt danach.
- **SLA-Tracking und Incident-Management**: Hinterlege pro Objekt die vereinbarte **Reaktionszeit** im Feld Reaktionsrate. Wenn der Helpdesk eine Störung an einem Server bearbeitet, genügt ein Blick in die Vertragszuweisung, um zu wissen, ob „4h vor Ort" oder nur „Next Business Day" vereinbart ist. Dieses Feld ist das, worauf dein Support-Team bei Incidents als Erstes schaut – es bestimmt, wie schnell eskaliert werden muss und ob ein Techniker vor Ort gebraucht wird.
- **Leasing-Rückgabe planen**: Trage bei geleasten Notebooks und Druckern das individuelle Vertragsende ein. Ein Report über alle Objekte mit ablaufender Vertragszuweisung liefert rechtzeitig die Rückgabeliste für das kommende Quartal. Besonders wichtig: Bei Leasing-Geräten sollte der Beschaffungsweg in der [Buchhaltungs-Kategorie](accounting.md) auf „Leasing" stehen – so lassen sich Leasing-Rückgaben gezielt filtern.
- **Vertragsablauf proaktiv managen**: Der Report „Vertragszuweisungen mit Vertragsende in den nächsten 90 Tagen" ist einer der wichtigsten operativen Reports. Er zeigt rechtzeitig, welche Verträge verlängert, neu verhandelt oder gekündigt werden müssen – bevor eine Vertragslücke entsteht und ein kritischer Server plötzlich ohne Wartung dasteht.
- **Audit und Compliance**: Bei Zertifizierungen oder internen Prüfungen belegt die Vertragszuweisung lückenlos, welches Asset zu welchem Zeitraum unter welchem Vertrag stand – auch rückwirkend über archivierte Einträge.

[![Vertragszuweisung](../../assets/images/de/grundlagen/kategorien/contract-assignment.png)](../../assets/images/de/grundlagen/kategorien/contract-assignment.png)

## Felder

### Zugewiesener Vertrag

Das Vertrags-Objekt, mit dem dieses Objekt verknüpft wird. Über den Objekt-Browser wird ein Objekt vom Typ **Vertrag** ausgewählt. Der Vertrag muss bereits als eigenes Objekt in i-doit existieren – er lässt sich nicht aus dieser Kategorie heraus anlegen. Im Vertragsobjekt selbst sind dann Details wie Gesamtlaufzeit, Kosten, Kündigungsfristen und Vertragspartner hinterlegt.

### Vertragsbeginn

Das Startdatum des Vertrags für dieses konkrete Objekt. Dieser Wert kann vom Gesamtbeginn des Vertrags abweichen – etwa wenn ein Server erst Monate nach Vertragsstart in den Wartungsvertrag aufgenommen wird. Bleibt das Feld leer, gilt implizit der Vertragsbeginn aus dem Vertragsobjekt.

### Vertragsende

Das Enddatum des Vertrags für dieses Objekt. Auch hier ist eine Abweichung vom Gesamtvertragsende möglich – zum Beispiel wenn ein Gerät vorzeitig aus dem Leasing zurückgegeben oder durch ein Nachfolgemodell ersetzt wird. Besonders nützlich für Reports, die ablaufende Zuweisungen auflisten.

### Reaktionsrate

Die vereinbarte Reaktionszeit für dieses Objekt, z.B. `4h vor Ort`, `NBD` (Next Business Day) oder `24/7`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Die Reaktionsrate kann sich von Objekt zu Objekt innerhalb desselben Vertrags unterscheiden, wenn etwa für geschäftskritische Server kürzere Zeiten gelten als für Peripheriegeräte.

### Beschreibung

Freitext für zusätzliche Angaben: besondere Vertragsklauseln für dieses Objekt, Ansprechpartner beim Dienstleister, Ticket-Referenzen oder Hinweise zur Vertragshistorie.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CONTRACT_ASSIGNMENT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Switch, Router u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesener Vertrag** | `connected_contract` | Objekt-Browser (Verknüpfung) |
| **Vertragsbeginn** | `contract_start` | Datum |
| **Vertragsende** | `contract_end` | Datum |
| **Reaktionsrate** | `reaction_rate` | Dialog+ (erweiterbare Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1045,
        "category": "C__CATG__CONTRACT_ASSIGNMENT",
        "data": {
            "connected_contract": 2001,
            "contract_start": "2025-01-01",
            "contract_end": "2027-12-31",
            "reaction_rate": "4h vor Ort",
            "description": "Hardware-Wartung inkl. Vorab-Austausch defekter Komponenten"
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
        "object": 1045,
        "category": "C__CATG__CONTRACT_ASSIGNMENT"
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
        "object": 1045,
        "category": "C__CATG__CONTRACT_ASSIGNMENT",
        "entry": 8,
        "data": {
            "contract_end": "2026-06-30",
            "description": "Vertrag vorzeitig beendet – Server wird durch Nachfolgemodell ersetzt."
        }
    },
    "id": 3
}
```
