---
title: "Kategorie: Modell"
description: Dokumentation der Kategorie Modell in i-doit
icon:
status:
lang: de
---

# Kategorie: Modell

Die Kategorie **Modell** erfasst die Hardware-Identität eines Objekts: Hersteller, Modellbezeichnung, Seriennummer und Service Tag. Sie ist eine **Single-Value-Kategorie** – jedes Objekt hat genau einen Modell-Eintrag. Zusammen mit der Kategorie [Formfaktor](formfactor.md) ergibt sich ein vollständiges Hardware-Profil: Modell liefert die *Identität* (was ist es?), Formfaktor die *physischen Abmessungen* (wie groß und schwer ist es?).

!!! tip "JDisc Discovery befüllt diese Kategorie automatisch"
    Beim JDisc-Import werden Hersteller, Modell, Seriennummer und Service Tag direkt aus SNMP/WMI-Daten übernommen. In den meisten Umgebungen muss diese Kategorie nicht manuell gepflegt werden — sie wird beim ersten Scan automatisch befüllt und bei jedem weiteren Scan aktualisiert.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Inventar**: Hersteller und Modell bilden zusammen mit der Seriennummer die eindeutige Identifikation eines Geräts. Diese Daten werden häufig für Garantieabfragen beim Hersteller benötigt — ohne Seriennummer oder Service Tag lässt sich im Support-Fall kein Ticket eröffnen.
- **Service Tag für Herstellersupport**: Der Service Tag ist bei Dell der direkte Schlüssel zum [Dell Support-Portal](https://www.dell.com/support): Tag eingeben, sofort Garantiestatus, Treiber und Konfigurationsdetails abrufen. Bei HP heißt das Äquivalent „Product Number / Serial", bei Lenovo „Machine Type / Serial". Wer diesen Wert in i-doit pflegt, spart im Ernstfall wertvolle Minuten.
- **Asset-Tracking und Beschaffung**: Über die Produkt-ID lassen sich Geräte einer bestimmten Bestellposition oder einem Rahmenvertrag zuordnen. Beim Hardware-Refresh zeigt ein Report sofort, wie viele Geräte eines bestimmten Modells im Einsatz sind — hilfreich für Mengenrabatte und Austauschplanung.
- **Firmware-Verwaltung**: Dokumentiere die aktuelle BIOS- und Firmware-Version. Per Report Manager lassen sich gezielt Geräte identifizieren, deren Firmware-Stand unter einer bestimmten Version liegt — unverzichtbar bei Sicherheitslücken, die ein BIOS-Update erfordern, oder bei VMware-Kompatibilitätsprüfungen.
- **Vollständiges Hardware-Profil**: Modell + [CPU](cpu.md) + [Speicher](memory.md) + [Formfaktor](formfactor.md) ergeben zusammen die komplette Hardware-Dokumentation eines Geräts. Erst wenn alle vier Kategorien gepflegt sind, ist das Gerät vollständig inventarisiert.

[![Modell](../../assets/images/de/grundlagen/kategorien/model.png)](../../assets/images/de/grundlagen/kategorien/model.png)

## Felder

### Hersteller

Der Hardware-Hersteller, z.B. `Dell Technologies`, `Hewlett Packard Enterprise`, `Lenovo`. Dialog+-Feld – eigene Werte werden bei der Eingabe automatisch angelegt. Beim JDisc-Import wird der Hersteller aus den SNMP/WMI-Daten übernommen. Über den Report Manager lässt sich schnell auswerten, wie sich die Herstellerverteilung im Unternehmen darstellt — relevant für Rahmenverträge und strategische Beschaffungsentscheidungen.

### Modell

Die Modellbezeichnung, z.B. `PowerEdge R750`, `ProLiant DL360 Gen11`, `ThinkSystem SR650 V3`. Ebenfalls ein Dialog+-Feld. In Kombination mit dem Hersteller ergibt sich die eindeutige Gerätebezeichnung. Bei einem Hardware-Refresh zeigt ein Report auf Basis dieses Feldes sofort, welche Modellgenerationen noch im Einsatz sind und wo ein Austausch fällig wird.

### Produkt-ID

Die interne Produktnummer des Herstellers, z.B. `R750-XS-2U`. Hilfreich bei der Beschaffung und beim Abgleich mit Bestellungen oder Rahmenverträgen. Wer dieses Feld konsequent pflegt, kann bei Nachbestellungen sofort die exakte Konfigurationsvariante benennen — ohne erst in alten Bestellungen suchen zu müssen.

### Service Tag

Die herstellerseitige Kennung für Support und Garantie. Bei Dell ist dies der 7-stellige Service Tag (z.B. `DELLSRV42X`), der direkt auf der Dell-Support-Seite eingegeben werden kann, um Garantiestatus, Treiber-Downloads und die Originalkonfiguration abzurufen. Bei HP und Lenovo ist das Äquivalent die Kombination aus Produktnummer und Seriennummer. **Ohne diesen Wert dauert jede Support-Anfrage länger**, weil der Hersteller das Gerät erst manuell identifizieren muss.

### Seriennummer

Die Seriennummer des Geräts, üblicherweise auf einem Etikett am Gehäuse oder im BIOS hinterlegt. Wird beim JDisc-Import automatisch aus WMI/SNMP ausgelesen. Für Inventarzwecke, Versicherungsfälle und die Zuordnung bei Reparaturen unverzichtbar. In Kombination mit dem Service Tag ergibt sich eine lückenlose Geräteidentifikation über den gesamten Lifecycle hinweg.

### Firmware

Die aktuell installierte Firmware-Version. Hier kann sowohl die BIOS-Version als auch die Firmware weiterer Komponenten (z.B. iDRAC, iLO, BMC) dokumentiert werden. Beispiel: `BIOS 1.12.3 (2024-11-15)`. **Per Report Manager lassen sich gezielt Geräte mit veralteter Firmware identifizieren** — z.B. alle Server mit einer BIOS-Version unterhalb eines bestimmten Patch-Standes. Das ist besonders wichtig bei bekannten Sicherheitslücken (CVEs), die ein Firmware-Update erfordern.

### Beschreibung

Freitext für ergänzende Angaben: Ausstattungsvariante, Besonderheiten in der Konfiguration, Zertifizierungen (z.B. „zertifiziert für RHEL 9 und VMware ESXi 8"), Garantie-Enddatum oder Hinweise zum Wartungsvertrag.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__MODEL` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Alle hardware-nahen Objekttypen (Server, Client, Switch, Router, u.a.) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Modell** | `title` | Dialog+ (erweiterbare Auswahl) |
| **Produkt-ID** | `productid` | Text |
| **Service Tag** | `service_tag` | Text |
| **Seriennummer** | `serial` | Text |
| **Firmware** | `firmware` | Text |
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
        "category": "C__CATG__MODEL",
        "data": {
            "manufacturer": "Dell Technologies",
            "title": "PowerEdge R750",
            "productid": "R750-XS-2U",
            "service_tag": "DELLSRV42X",
            "serial": "SN-2024-MUC-0042",
            "firmware": "BIOS 1.12.3 (2024-11-15)",
            "description": "2U Rack Server, Dual Socket LGA 4189, zertifiziert für RHEL 9 und VMware ESXi 8"
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
        "category": "C__CATG__MODEL"
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
        "category": "C__CATG__MODEL",
        "data": {
            "firmware": "BIOS 2.1.0 (2025-03-20)",
            "description": "Firmware-Update durchgeführt am 2025-03-22."
        }
    },
    "id": 3
}
```
