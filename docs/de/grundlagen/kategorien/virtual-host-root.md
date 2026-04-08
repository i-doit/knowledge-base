---
title: "Kategorie: Virtueller Host (Übersicht)"
description: Dokumentation der Kategorie Virtueller Host (Übersicht) in i-doit
icon:
status:
lang: de
---

# Kategorie: Virtueller Host (Übersicht)

Die Kategorie **Virtueller Host (Übersicht)** ist eine **Aggregationskategorie**, die alle virtualisierungsbezogenen Informationen eines Hypervisors auf einer einzigen Seite zusammenfasst. Sie kombiniert die Inhalte der Kategorien [Virtueller Host](virtual-host.md), [Gastsysteme](guest-systems.md) und [Virtuelle Switches](virtual-switch.md) in einer Gesamtübersicht.

Diese Kategorie enthält keine eigenen, exklusiven Felder — sie fasst Daten zusammen, die in den jeweiligen Unterkategorien gepflegt werden. Änderungen werden nicht direkt in der Übersichtskategorie vorgenommen, sondern in den verlinkten Einzelkategorien. Der Zweck ist ein **konsolidierter Blick** auf die gesamte Virtualisierungskonfiguration eines Hosts, ohne zwischen mehreren Kategorien wechseln zu müssen.

!!! info "Aggregationskategorie — keine eigene Datenpflege"
    Diese Kategorie ist eine reine Zusammenfassung. Die dargestellten Informationen stammen aus den Kategorien [Virtueller Host](virtual-host.md), [Gastsysteme](guest-systems.md) und [Virtuelle Switches](virtual-switch.md). Um Daten zu ändern, navigiere zur jeweiligen Einzelkategorie. Die Übersicht aktualisiert sich automatisch, wenn Änderungen in den Unterkategorien gespeichert werden.

## Verwendung

Typische Anwendungsfälle:

- **Schnellüberblick bei Störungen**: Bei einem Host-Ausfall zeigt die Übersichtskategorie auf einen Blick: Ist der Server ein Hypervisor? Welche VMs laufen darauf? Welche virtuellen Switches sind konfiguriert? Diese Informationen sind im Incident-Fall entscheidend — ohne sie muss der Administrator zwischen mehreren Kategorien navigieren und verliert wertvolle Zeit.
- **Virtualisierungs-Dokumentation prüfen**: Beim Onboarding neuer Hosts oder bei der Qualitätssicherung der CMDB zeigt die Übersicht sofort, ob alle virtualisierungsrelevanten Kategorien gepflegt sind. Ein Host mit `Virtueller Host = Ja`, aber ohne Gastsysteme und ohne virtuelle Switches, ist entweder noch nicht vollständig dokumentiert oder tatsächlich ein ungenutzter Hypervisor — beides wert, überprüft zu werden.
- **Wartungsplanung**: Vor einem Wartungsfenster für einen Hypervisor liefert die Übersicht alle relevanten Informationen: die Liste der betroffenen VMs (aus [Gastsysteme](guest-systems.md)), den Verwaltungsdienst für die Live-Migration (aus [Virtueller Host](virtual-host.md)) und die Netzwerkkonfiguration der VMs (aus [Virtuelle Switches](virtual-switch.md)).
- **Audit und Compliance**: In regulierten Umgebungen dient die Übersicht als kompakte Referenz für die gesamte Virtualisierungskonfiguration eines Hosts. Auditoren können auf einer Seite nachvollziehen, welche Workloads auf welcher physischen Hardware laufen und wie die Netzwerktrennung konfiguriert ist.

[![Virtueller Host Übersicht](../../assets/images/de/grundlagen/kategorien/virtual-host-root.png)](../../assets/images/de/grundlagen/kategorien/virtual-host-root.png)

## Enthaltene Kategorien

Die Übersicht aggregiert folgende Kategorien:

| Kategorie | Konstante | Inhalt |
|---|---|---|
| [Virtueller Host](virtual-host.md) | `C__CATG__VIRTUAL_HOST` | Hypervisor-Kennzeichnung, Lizenzserver, Verwaltungsdienst |
| [Gastsysteme](guest-systems.md) | `C__CATG__GUEST_SYSTEMS` | Liste aller VMs auf diesem Host |
| [Virtuelle Switches](virtual-switch.md) | `C__CATG__VIRTUAL_SWITCH` | Konfigurierte vSwitches mit Port-Gruppen und Uplinks |

## Felder

Die dargestellten Felder stammen aus den Unterkategorien. Die folgenden Felder werden in der Übersicht angezeigt:

### Virtueller Host

Gibt an, ob das Objekt als Hypervisor fungiert (`Ja` oder `Nein`). Stammt aus der Kategorie [Virtueller Host](virtual-host.md).

### Lizenzserver

Verknüpfung zum Lizenzserver-Objekt. Stammt aus der Kategorie [Virtueller Host](virtual-host.md).

### Verwaltungsdienst

Verknüpfung zum Management-System (z.B. vCenter, SCVMM). Stammt aus der Kategorie [Virtueller Host](virtual-host.md).

### Beschreibung

Freitext-Beschreibung. Stammt aus der Kategorie [Virtueller Host](virtual-host.md).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__VIRTUAL_HOST_ROOT` |
| **Typ** | Globale Kategorie (Aggregation) |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Server, Blade Server, Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Virtueller Host** | `virtual_host` | Dialog (Auswahl) |
| **Lizenzserver** | `license_server` | Objekt-Browser (Verknüpfung) |
| **Verwaltungsdienst** | `administration_service` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

!!! warning "API-Zugriff auf Aggregationskategorien"
    Beim API-Zugriff über `C__CATG__VIRTUAL_HOST_ROOT` werden dieselben Daten wie über `C__CATG__VIRTUAL_HOST` zurückgegeben. Für das Lesen und Schreiben der Gastsysteme und virtuellen Switches müssen die jeweiligen Konstanten `C__CATG__GUEST_SYSTEMS` und `C__CATG__VIRTUAL_SWITCH` separat angesprochen werden.

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__VIRTUAL_HOST_ROOT",
        "data": {
            "virtual_host": 1,
            "license_server": 456,
            "administration_service": 789,
            "description": "Proxmox VE 8.1, Cluster pve-prod-01"
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
        "category": "C__CATG__VIRTUAL_HOST_ROOT"
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
        "category": "C__CATG__VIRTUAL_HOST_ROOT",
        "entry": 1,
        "data": {
            "virtual_host": 1,
            "description": "Upgrade auf Proxmox VE 8.2 abgeschlossen, 2026-04."
        }
    },
    "id": 3
}
```
