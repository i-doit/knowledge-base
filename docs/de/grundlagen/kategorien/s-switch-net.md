---
title: "Kategorie: Switch"
description: Dokumentation der Kategorie Switch in i-doit
icon:
status:
lang: de
---

# Kategorie: Switch

Die Kategorie **Switch** dokumentiert die netzwerkspezifischen Eigenschaften eines Switch-Objekts. Sie ist eine **spezifische Kategorie** und steht ausschließlich dem Objekttyp **Switch** zur Verfügung. Hier werden VLAN-Management-Protokoll, die Rolle im Netzwerk und das Spanning-Tree-Protokoll erfasst — Informationen, die für die Netzwerkplanung, das Troubleshooting und die Sicherheitsdokumentation zentral sind.

!!! info "Ports separat dokumentieren"
    Die Kategorie Switch enthält nur die übergeordneten Switch-Eigenschaften. Die einzelnen Netzwerk-Ports und ihre Konfiguration (VLAN-Zuweisung, Speed, Duplex) werden in der Kategorie [Port](network-port.md) dokumentiert. Beide Kategorien zusammen ergeben das vollständige Bild eines Switches.

## Verwendung

Typische Anwendungsfälle:

- **Netzwerkdokumentation**: Erfasse das VLAN-Management-Protokoll (z.B. VTP, GVRP, manuell) und das Spanning-Tree-Protokoll (z.B. RSTP, MSTP, PVST+). Zusammen mit den Kategorien [Port](network-port.md) und [Netz](s-net.md) entsteht eine vollständige Netzwerkdokumentation.
- **Rolle im Netzwerk**: Dokumentiere, ob der Switch als **Core**, **Distribution** oder **Access Switch** fungiert. Diese Information ist für die Netzwerkarchitektur und Impact-Analysen unverzichtbar — der Ausfall eines Core-Switches hat weitreichendere Folgen als der eines Access-Switches.
- **Spanning-Tree-Analyse**: Bei Loop-Problemen oder nach Netzwerkänderungen zeigt ein Report über alle Switches mit ihrem Spanning-Tree-Protokoll sofort, ob die Konfiguration konsistent ist. Gemischte STP-Varianten (z.B. RSTP auf einem Switch, PVST+ auf einem anderen) sind eine häufige Ursache für Netzwerkprobleme.
- **VLAN-Management und Sicherheit**: Die Dokumentation des VLAN-Management-Protokolls ist sicherheitsrelevant. Ein Report kann aufzeigen, welche Switches VTP im Server-Modus verwenden — ein versehentliches Löschen von VLANs auf einem solchen Switch kann das gesamte Netzwerk betreffen.

!!! warning "Stacking-Konfiguration"
    Bei gestackten Switches empfiehlt es sich, den gesamten Stack als ein Objekt in i-doit anzulegen und die Stacking-Details (Master/Member, Stack-IDs, Prioritäten) im Beschreibungsfeld zu dokumentieren. Alternativ können die einzelnen Stack-Mitglieder als separate Objekte mit Cluster-Beziehung modelliert werden.

[![Switch](../../assets/images/de/grundlagen/kategorien/s-switch-net.png)](../../assets/images/de/grundlagen/kategorien/s-switch-net.png)

## Felder

### VLAN-Management-Protokoll

Das Protokoll, mit dem VLANs auf dem Switch verwaltet werden, z.B. `VTP` (VLAN Trunking Protocol), `GVRP` (GARP VLAN Registration Protocol) oder `Manuell`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen. Bei manueller VLAN-Verwaltung empfiehlt es sich, dies explizit einzutragen, damit klar ist, dass kein dynamisches Protokoll im Einsatz ist.

### Rolle

Die Rolle des Switches im Netzwerk, z.B. `Core`, `Distribution`, `Access` oder `Edge`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen. Diese Klassifizierung ist entscheidend für Impact-Analysen: Fällt ein Core-Switch aus, sind potenziell alle angeschlossenen Distribution- und Access-Switches betroffen.

### Spanning Tree

Das konfigurierte Spanning-Tree-Protokoll, z.B. `RSTP` (Rapid Spanning Tree), `MSTP` (Multiple Spanning Tree), `PVST+` (Per-VLAN Spanning Tree Plus) oder `Deaktiviert`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen. **Wichtig**: Dokumentiere auch, wenn Spanning Tree bewusst deaktiviert ist (z.B. in reinen Spine-Leaf-Architekturen), damit dies nicht fälschlich als Konfigurationslücke interpretiert wird.

### Beschreibung

Freitext für zusätzliche Angaben: Firmware-Version, Stacking-Konfiguration, PoE-Budget, Management-VLAN, Uplink-Konfiguration oder Besonderheiten wie 802.1X-Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__SWITCH_NET` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Switch |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **VLAN-Management-Protokoll** | `vlan` | Dialog+ (erweiterbare Auswahl) |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Spanning Tree** | `spanning_tree` | Dialog+ (erweiterbare Auswahl) |
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
        "category": "C__CATS__SWITCH_NET",
        "data": {
            "vlan": "VTP",
            "role": "Core",
            "spanning_tree": "RSTP",
            "description": "Core-Switch Rechenzentrum A, Stack aus 2x Catalyst 9300, 48 Ports PoE+, FW 17.9.4"
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
        "category": "C__CATS__SWITCH_NET"
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
        "category": "C__CATS__SWITCH_NET",
        "entry": 1,
        "data": {
            "spanning_tree": "MSTP",
            "description": "Migration von RSTP auf MSTP abgeschlossen, Instanz 1: VLAN 10-50, Instanz 2: VLAN 100-200."
        }
    },
    "id": 3
}
```
