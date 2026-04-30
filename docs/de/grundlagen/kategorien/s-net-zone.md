---
title: "Kategorie: Netzzone"
description: Dokumentation der spezifischen Kategorie Netzzone in i-doit
icon:
status:
lang: de
---

# Kategorie: Netzzone

Die Kategorie **Netzzone** ordnet einem Layer-3-Netz oder Supernetz eine oder mehrere Netzzonen zu. Sie ist eine **Multi-Value-Kategorie** -- pro Netz-Objekt können beliebig viele Zonen-Einträge angelegt werden, um unterschiedliche Sicherheits- oder Segmentierungsbereiche innerhalb eines Netzes abzubilden.

!!! info "Netzzone vs. Netz -- zwei Ebenen der Netzwerkdokumentation"
    Die Kategorie [Netz](s-net.md) beschreibt die technischen Parameter eines Layer-3-Netzes: IP-Bereich, Subnetzmaske, Gateway. Die Kategorie **Netzzone** ergänzt diese technische Sicht um eine **logische Segmentierung**: Welcher Sicherheitszone gehört ein Netz an? Typische Zonen sind `DMZ`, `Intern`, `Management` oder `Gaestenetz`. Diese Trennung ist entscheidend, weil ein und dasselbe Subnetz in unterschiedlichen Sicherheitskontexten betrieben werden kann -- und die Firewall-Regeln sich nach der Zone richten, nicht nach dem IP-Bereich allein.

## Verwendung

Typische Anwendungsfälle:

- **Firewall-Segmentierung dokumentieren**: Ordne jedem Netz die Sicherheitszone zu, in der es sich befindet. Die Zonen entsprechen den Zonen deiner Firewall-Konfiguration (z.B. Palo Alto Security Zones, Fortinet Zones). Im Report Manager lässt sich dann auswerten, welche Netze in welcher Zone liegen -- die Grundlage für Firewall-Rule-Reviews und Change-Requests.
- **Compliance-Nachweis**: Regulatorische Frameworks wie ISO 27001, BSI-Grundschutz und PCI-DSS verlangen eine dokumentierte Netzsegmentierung. Die Netzzone liefert genau diesen Nachweis: Welche Netze gehören zur DMZ, welche zum internen Bereich, welche zum Management-Netz? Auditoren können die Zuordnung direkt in i-doit prüfen.
- **Zonenübergänge analysieren**: Wenn zwei Netze unterschiedlichen Zonen zugeordnet sind, muss der Verkehr zwischen ihnen durch eine Firewall oder ein Gateway fliessen. Über die Netzzone lassen sich diese Übergänge identifizieren und mit den tatsächlichen Firewall-Regeln abgleichen -- ein Soll-Ist-Vergleich für die Netzsicherheit.
- **IP-Bereich innerhalb der Zone einschränken**: Die Felder `Zone from` und `Zone to` definieren den IP-Bereich, der innerhalb des Netzes zu dieser Zone gehört. Das ist nuetzlich, wenn ein Subnetz in mehrere Zonen aufgeteilt ist -- etwa wenn die ersten 50 Adressen zur Serverzone und die restlichen zur Clientzone gehören.
- **Mikrosegmentierung**: In modernen Netzwerkarchitekturen (Zero Trust, SDN) werden Netze feingranular segmentiert. Die Multi-Value-Fähigkeit der Kategorie ermöglicht es, einem einzelnen Netz mehrere Zonen mit unterschiedlichen IP-Bereichen zuzuweisen -- ideal für die Dokumentation von Mikrosegmentierung.

[![Netzzone](../../assets/images/de/grundlagen/kategorien/s-net-zone.png)](../../assets/images/de/grundlagen/kategorien/s-net-zone.png)

## Felder

### Netzzonen-Objekt

Verknüpfung mit dem Netzzonen-Objekt, das die Zone repräsentiert. Das Ziel-Objekt ist typischerweise vom Objekttyp **Netzzone** und trägt einen sprechenden Namen wie `DMZ`, `Intern-Server` oder `Management-VLAN`. Über den Objekt-Browser wird die Verknüpfung hergestellt. Das Netzzonen-Objekt kann seinerseits weitere Informationen tragen, etwa eine Beschreibung der Sicherheitsrichtlinien für diese Zone.

### Zone from / Zone to

Der IP-Adressbereich innerhalb des Netzes, der zu dieser Zone gehört. `Zone from` ist die erste IP-Adresse des Bereichs, `Zone to` die letzte. Wenn das gesamte Netz einer einzigen Zone zugeordnet ist, können diese Felder leer bleiben -- die Zone gilt dann implizit für den gesamten IP-Bereich des Netzes. Die Felder `range_from_long` und `range_to_long` enthalten die numerische (Long-)Darstellung der IP-Adressen und werden intern für Berechnungen und Sortierung verwendet.

!!! tip "Praxisbeispiel: Geteiltes Subnetz"
    Ein `/24`-Netz (10.10.1.0/24) wird aufgeteilt: Adressen .1-.127 gehören zur Zone `Server-Intern`, Adressen .128-.254 zur Zone `Client-Intern`. Lege zwei Einträge in der Netzzone an -- einen mit `Zone from: 10.10.1.1` / `Zone to: 10.10.1.127` und einen mit `Zone from: 10.10.1.128` / `Zone to: 10.10.1.254`. So ist die Segmentierung innerhalb des Subnetzes sauber dokumentiert.

### Beschreibung

Freitext für ergänzende Angaben zur Zonenzuordnung: Begruendung der Zuordnung, Verweis auf Firewall-Regelwerke, Datum der letzten Prüfung oder Hinweise auf geplante Änderungen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__NET_ZONE` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Layer-3-Netz, Supernetz |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Netzzonen-Objekt** | `zone` | Objekt-Browser (Verknüpfung) |
| **Zone from** | `range_from` | Text |
| **Zone from (Long)** | `range_from_long` | Text |
| **Zone to** | `range_to` | Text |
| **Zone to (Long)** | `range_to_long` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATS__NET_ZONE",
        "data": {
            "zone": 780,
            "range_from": "10.10.1.1",
            "range_to": "10.10.1.127",
            "description": "Server-Segment innerhalb des /24-Netzes, Zone: Intern-Server"
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
        "object": 501,
        "category": "C__CATS__NET_ZONE"
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
        "object": 501,
        "category": "C__CATS__NET_ZONE",
        "entry": 12,
        "data": {
            "range_to": "10.10.1.63",
            "description": "2026-04: Bereich auf /26 reduziert nach Netzwerk-Redesign."
        }
    },
    "id": 3
}
```
