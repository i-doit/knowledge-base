---
title: "Kategorie: FC-Port"
description: Dokumentation der Kategorie FC-Port in i-doit
icon:
status:
lang: de
---

# Kategorie: FC-Port

Die Kategorie **FC-Port** dokumentiert die Fibre-Channel-Ports eines Servers oder Storage-Systems. Sie ist eine **Multi-Value-Kategorie** -- ein HBA hat typischerweise zwei oder vier FC-Ports, und jeder wird als eigener Eintrag erfasst.

Fibre-Channel-Ports sind das physische Bindeglied zwischen einem Server und dem SAN (Storage Area Network). Jeder Port besitzt weltweit eindeutige Adressen (WWN/WWPN), über die das SAN-Zoning gesteuert wird. Ohne korrekt dokumentierte FC-Ports ist eine saubere SAN-Dokumentation nicht möglich -- und ohne SAN-Dokumentation wird jede Storage-Migration oder jedes Zoning-Update zum Blindflug.

!!! tip "FC-Port immer mit HBA verknüpfen"
    Jeder FC-Port gehört physisch zu einem [Host Bus Adapter (HBA)](hba.md). Über das Feld *Verbundener Controller* wird diese Zuordnung hergestellt. Trage zuerst den HBA in der Kategorie [HBA](hba.md) ein, und verknüpfe dann die FC-Ports. So entsteht eine vollständige Kette: Server -> HBA -> FC-Port -> SAN-Zone -> Storage.

## Verwendung

Typische Anwendungsfälle:

- **SAN-Zoning-Dokumentation**: Die WWPN eines FC-Ports wird in der SAN-Switch-Konfiguration (Zoning) verwendet, um festzulegen, welcher Server auf welche Storage-LUNs zugreifen darf. Wenn die WWPN in i-doit dokumentiert ist, kann das Storage-Team bei Zoning-Änderungen die korrekte Adresse nachschlagen, ohne sich am Server anmelden zu müssen.
- **Fabric-Inventar**: Über den Report Manager lassen sich alle FC-Ports mit ihren WWPNs, Geschwindigkeiten und Verbindungen auflisten. Das ergibt ein vollständiges Fabric-Inventar, das bei SAN-Audits oder Migrationen unverzichtbar ist.
- **Multipath-Analyse**: Moderne SAN-Konfigurationen nutzen redundante Pfade (Multipath I/O). Jeder Pfad läuft über einen eigenen FC-Port. Die FC-Port-Kategorie zeigt, über welche Ports ein Server mit dem SAN verbunden ist, und in Kombination mit der Kategorie [Logische Geräte (Client)](ldev-client.md) ergibt sich ein vollständiges Multipath-Bild.
- **Troubleshooting bei SAN-Problemen**: Wenn ein Server keinen Zugriff auf eine LUN hat, prüft der Storage-Admin die WWPN im Zoning. Stimmt die dokumentierte WWPN mit der tatsächlichen überein? Ist der Port-Typ korrekt? Ist die Geschwindigkeit richtig ausgehandelt? All diese Informationen sind in der FC-Port-Kategorie hinterlegt.
- **Migration und Refresh**: Beim Austausch eines HBAs ändern sich die WWPNs. Die alte WWPN muss aus dem Zoning entfernt und die neue hinzugefügt werden. Die FC-Port-Kategorie dokumentiert sowohl den alten Zustand (archivierter Eintrag) als auch den neuen.

!!! warning "WWPN-Konsistenz sicherstellen"
    Die WWPN ist die kritischste Information in dieser Kategorie. Eine falsche WWPN im Zoning bedeutet entweder keinen Zugriff (harmlos) oder -- schlimmer -- Zugriff auf die falschen LUNs (Datenverlust-Risiko). Prüfe WWPNs immer gegen die tatsächliche Konfiguration am Server und am SAN-Switch.

[![FC-Port](../../assets/images/de/grundlagen/kategorien/controller-fc-port.png)](../../assets/images/de/grundlagen/kategorien/controller-fc-port.png)

## Felder

### Bezeichnung

Der Name des FC-Ports, z.B. `FC0` oder `Port 1 - Fabric A`. Verwende eine eindeutige Benennung, die den physischen Slot und die Fabric-Zuordnung erkennen lässt.

### Typ

Der Port-Typ, z.B. `N_Port` (Node Port, Standardfall bei Server-HBAs), `F_Port` (Fabric Port, auf SAN-Switch-Seite), `E_Port` (Inter-Switch-Link) oder `NL_Port` (Arbitrated Loop). Dialog+-Feld -- eigene Typen können ergänzt werden.

### Verbundener Controller

Der [HBA](hba.md), zu dem dieser FC-Port gehört. Dieses Feld referenziert einen Eintrag aus der HBA-Kategorie desselben Objekts. Die Zuordnung ist wichtig, weil ein Server mehrere HBAs haben kann und die FC-Ports korrekt zugeordnet werden müssen.

### Zugewiesener Ein-/Ausgang

Referenz auf den zugehörigen physischen Connector des Objekts. Wird für die Kabelverbindungs-Dokumentation in i-doit verwendet.

### Medium

Der physische Medientyp der FC-Verbindung, z.B. `Multimode Fibre`, `Singlemode Fibre` oder `Copper (SFP+)`. Dialog+-Feld. Relevant für die Beschaffung der richtigen SFP-Module und Kabel.

### Geschwindigkeit und Geschwindigkeits-Einheit

Die Linkgeschwindigkeit des FC-Ports, z.B. `16` mit Einheit `Gbit/s`. Gängige Werte sind 8, 16, 32 oder 64 Gbit/s. Die tatsächlich ausgehandelte Geschwindigkeit kann niedriger sein als die Maximalgeschwindigkeit -- dokumentiere den konfigurierten oder ausgehandelten Wert.

### Node WWN

Die World Wide Node Name (WWNN) des HBAs, z.B. `20:00:00:25:B5:01:00:0A`. Die WWNN identifiziert den HBA als Ganzes (nicht den einzelnen Port) und wird bei manchen SAN-Konfigurationen für das Zoning verwendet.

### Port WW(P)N

Die World Wide Port Name (WWPN) dieses spezifischen FC-Ports, z.B. `21:00:00:25:B5:01:00:0A`. Die WWPN ist die **wichtigste** Adresse für das SAN-Zoning, weil sie jeden einzelnen Port weltweit eindeutig identifiziert. Die meisten SAN-Konfigurationen verwenden WWPN-basiertes Zoning.

### SAN-Zone und Verbindungstyp

Die SAN-Zone(n), denen dieser FC-Port zugewiesen ist. Verknüpft den Port mit den in i-doit dokumentierten SAN-Zoning-Konfigurationen. In größeren SAN-Umgebungen gehört ein Port häufig zu mehreren Zonen.

### Zielobjekt

Das Objekt, mit dem dieser FC-Port physisch verbunden ist -- typischerweise ein SAN-Switch-Port oder direkt ein Storage-Port (bei Direct-Attach-Konfigurationen).

### Verbindung

Die physische Kabelverbindung zu einem anderen FC-Port. Hier wird die tatsächliche Punkt-zu-Punkt-Verbindung dokumentiert, inklusive des verbundenen Ports am Zielobjekt.

### Beschreibung

Freitext für zusätzliche Informationen: SFP-Modul-Typ, Fabric-Zuordnung (A/B), VSAN-Zugehörigkeit, Besonderheiten bei der Verkabelung oder Hinweise zum Zoning.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CONTROLLER_FC_PORT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server, Virtueller Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Verbundener Controller** | `connected_controller` | Dialog (Auswahl) |
| **Zugewiesener Ein-/Ausgang** | `connector_sibling` | Ganzzahl |
| **Medium** | `medium` | Dialog+ (erweiterbare Auswahl) |
| **Geschwindigkeit** | `speed` | Ganzzahl |
| **Geschwindigkeits-Einheit** | `speed_unit` | Dialog (Auswahl) |
| **Node WWN** | `wwn` | Text |
| **Port WW(P)N** | `wwpn` | Text |
| **SAN-Zone und Verbindungstyp** | `san_zones` | Objekt-Browser (Verknüpfung) |
| **Zielobjekt** | `target` | Objekt-Browser (Verknüpfung) |
| **Verbindung** | `connector` | Ganzzahl |
| **Verbindung** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |
| **Beziehungsrichtung** | `relation_direction` | Ganzzahl |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__CONTROLLER_FC_PORT",
        "data": {
            "title": "FC0 - Fabric A",
            "type": "N_Port",
            "connected_controller": 15,
            "medium": "Multimode Fibre",
            "speed": 32,
            "speed_unit": 3,
            "wwn": "20:00:00:25:B5:01:00:0A",
            "wwpn": "21:00:00:25:B5:01:00:0A",
            "description": "Fabric A, SFP+ 32G SW, verbunden mit SAN-Switch-A Port 12"
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
        "object": 1042,
        "category": "C__CATG__CONTROLLER_FC_PORT"
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
        "object": 1042,
        "category": "C__CATG__CONTROLLER_FC_PORT",
        "entry": 3,
        "data": {
            "speed": 32,
            "speed_unit": 3,
            "description": "2026-04: SFP-Upgrade von 16G auf 32G, neues SFP-Modul Brocade 32G SW"
        }
    },
    "id": 3
}
```
