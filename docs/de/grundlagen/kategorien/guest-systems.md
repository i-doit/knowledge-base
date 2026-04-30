---
title: "Kategorie: Gastsysteme"
description: Dokumentation der Kategorie Gastsysteme in i-doit
icon:
status:
lang: de
---

# Kategorie: Gastsysteme

Die Kategorie **Gastsysteme** zeigt die virtuellen Maschinen, die auf einem Hypervisor oder physischen Host laufen. Sie ist eine **Multi-Value-Kategorie** – pro Objekt werden beliebig viele Gastsysteme aufgelistet, also sämtliche VMs, die auf genau diesem Host ausgeführt werden.

Die Kategorie bildet die **Host-Seite** der Virtualisierungsbeziehung ab: Sie wird am Server-Objekt (dem Hypervisor) gepflegt und listet dessen Gäste auf. Das Gegenstück ist die Kategorie **Virtuelle Maschine**, die auf dem Gast-Objekt selbst die Zuordnung zum Host zeigt. Beide Kategorien spiegeln dieselbe Beziehung — einmal aus Host-Perspektive, einmal aus Gast-Perspektive.

Diese Kategorie ist die **Grundlage für Virtualisierungs-Kapazitätsplanung**: Wie viele VMs laufen pro Host? Welche Hosts sind überlastet, welche haben noch Reserven? In Kombination mit den Kategorien [CPU](cpu.md) und Speicher am selben Host-Objekt entsteht ein vollständiges Bild der Ressourcenauslastung — nicht nur die Anzahl der VMs, sondern auch die physischen Ressourcen, die ihnen zur Verfügung stehen.

!!! tip "Hosts mit zu vielen VMs identifizieren"
    Ein Report „Hosts mit mehr als X Gastsystemen" ist eines der effektivsten Werkzeuge für die Virtualisierungsplanung. Überladene Hypervisoren sind ein Risiko: Bei einem Host-Ausfall sind mehr VMs betroffen, Live-Migration dauert länger, und die Performance aller Gäste leidet. Definiere einen Schwellenwert (z.B. 20 VMs pro Host) und überwache ihn regelmäßig per Report.

## Verwendung

Typische Anwendungsfälle:

- **Virtualisierungs-Dokumentation**: Erfasse auf einen Blick, welche virtuellen Maschinen auf einem bestimmten ESXi-Host, Hyper-V-Server oder KVM-Hypervisor laufen. Zusammen mit den Kategorien [CPU](cpu.md) und Speicher am Host-Objekt entsteht ein vollständiges Bild der physischen Ressourcen, die den Gästen zur Verfügung stehen.
- **Kapazitätsplanung**: Über den Report Manager lässt sich auswerten, wie viele VMs pro Host betrieben werden. Hosts mit ungewöhnlich vielen Gastsystemen fallen sofort auf — hilfreich bei der Entscheidung, ob ein weiterer Host benötigt wird oder VMs umverteilt werden sollten. Ein Report, der Gastsysteme-Anzahl mit CPU-Kernen und RAM des Hosts korreliert, zeigt die tatsächliche Ressourcen-Dichte.
- **Migration und Wartung**: Vor einer Host-Migration oder einem Wartungsfenster zeigt die Kategorie sofort, welche VMs betroffen sind und verschoben werden müssen. In Kombination mit dem Feld „Runs on" ist auch die Cluster-Zuordnung ersichtlich. Bei einem ESXi-Host mit 15 VMs ist die Planung des Wartungsfensters eine andere als bei einem Host mit 3 VMs — die Gastsysteme-Kategorie liefert diese Information auf einen Blick.
- **Compliance und Audit**: In regulierten Umgebungen muss nachgewiesen werden, welche Workloads auf welcher physischen Hardware laufen — etwa bei Datenschutz-Anforderungen zur Datenlokalität oder bei lizenzrechtlichen Vorgaben (z.B. Oracle-Lizenzen, die pro physischem Host berechnet werden).
- **Ausfallanalyse**: Fällt ein Hypervisor aus, zeigt die Gastsysteme-Kategorie innerhalb von Sekunden, welche VMs betroffen sind. In Kombination mit der Kategorie [Servicezuweisung](it-service.md) an den VM-Objekten lässt sich sofort ableiten, welche IT-Services beeinträchtigt sind — die Grundlage für eine schnelle Incident-Kommunikation.

[![Gastsysteme](../../assets/images/de/grundlagen/kategorien/guest-systems.png)](../../assets/images/de/grundlagen/kategorien/guest-systems.png)

## Felder

### Gastsysteme

Das Kernelement der Kategorie: eine Verknüpfung zum Objekt der virtuellen Maschine. Über den Objekt-Browser wird hier ein bestehendes VM-Objekt ausgewählt und dem Host zugeordnet. Jeder Eintrag entspricht einer VM, die auf diesem Host läuft. Beim Erstellen über die API wird dieses Feld mit dem Key `object` (nicht `objID`) im `data`-Block übergeben – der Wert ist die Objekt-ID der virtuellen Maschine.

### Hostname

Der Hostname des Gastsystems, wie er im Netzwerk bekannt ist. Dieses Feld wird in der Regel automatisch aus den Stammdaten des verknüpften Objekts übernommen und dient der schnellen Identifikation in der Listenansicht, ohne das VM-Objekt öffnen zu müssen.

### Runs on

Zeigt an, auf welcher Infrastruktur-Ebene die VM ausgeführt wird – beispielsweise ein Cluster oder ein bestimmter Hypervisor-Knoten. Dieses Feld stellt den Kontext zur übergeordneten Virtualisierungsschicht her und ist besonders bei Cluster-Setups nützlich, in denen VMs zwischen mehreren physischen Knoten verschoben werden können.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__GUEST_SYSTEMS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Gastsysteme** | `object` | Objekt-Browser (Verknüpfung) |
| **Hostname** | `hostname` | Text |
| **Runs on** | `runs_on` | Text |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__GUEST_SYSTEMS",
        "data": {
            "object": 456
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
        "category": "C__CATG__GUEST_SYSTEMS"
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
        "category": "C__CATG__GUEST_SYSTEMS",
        "entry": 32,
        "data": {
            "object": 789
        }
    },
    "id": 3
}
```
