---
title: "Kategorie: Service"
description: Dokumentation der Kategorie Service in i-doit
icon:
status:
lang: de
---

# Kategorie: Service

Die Kategorie **Service** dokumentiert die Stammdaten eines IT-Service-Objekts. Sie ist eine **spezifische Kategorie** und steht dem Objekttyp **Service** zur Verfügung. Hier werden grundlegende Eigenschaften wie Spezifikation, Hersteller, Installationsart und Lizenzinformationen erfasst — die technische Basis, auf der Servicezuweisungen, SLAs und Geschäftskritikalität aufbauen.

!!! info "Service vs. IT-Service"
    Die Kategorie **Service** (`C__CATS__SERVICE`) beschreibt die technischen Stammdaten eines Service-Objekts (Softwareprodukt, Dienst). Für die Abbildung von Geschäftsprozessen, SLA-Zuordnungen und Kritikalitätsbewertungen steht die Kategorie [IT-Service](it-service.md) zur Verfügung. Beide Kategorien ergänzen sich: Service liefert das „Was", IT-Service das „Wie wichtig".

## Verwendung

Typische Anwendungsfälle:

- **Servicekatalog aufbauen**: Erfasse für jeden Service die Spezifikation, den Hersteller und die Installationsart. So entsteht ein strukturierter Servicekatalog, der als Grundlage für ITSM-Prozesse dient. Ein Report über alle Services mit Hersteller und Installationsstatus zeigt auf einen Blick, welche Dienste im Einsatz sind.
- **Lizenzmanagement**: Über den Registrierungsschlüssel und die Anzahl der Installationen lässt sich nachvollziehen, wie viele Instanzen eines Service lizenziert und tatsächlich installiert sind. In Kombination mit der Kategorie [Servicezuweisung](it-service.md) ergibt sich ein vollständiges Bild der Lizenznutzung.
- **Installationsdokumentation**: Der Installationspfad und die Installationsart (manuell, automatisiert, Paketmanager) dokumentieren, wie und wo der Service bereitgestellt wurde. Das ist besonders wertvoll für das Change Management und bei der Migration auf neue Plattformen.
- **Herstellerübersicht**: Über den Report Manager lässt sich auswerten, welche Hersteller im Servicekatalog vertreten sind — hilfreich für Vendor-Konsolidierung und Vertragsverhandlungen.

!!! tip "Servicezuweisung verknüpfen"
    Nachdem du einen Service in dieser Kategorie angelegt hast, weise ihn über die Kategorie [IT-Service](it-service.md) den relevanten Infrastruktur-Objekten zu. So wird sichtbar, welche Server, Clients und Netzwerkkomponenten einen bestimmten Service bereitstellen oder konsumieren.

[![Service](../../assets/images/de/grundlagen/kategorien/s-service.png)](../../assets/images/de/grundlagen/kategorien/s-service.png)

## Felder

### Spezifikation

Eine Freitextbeschreibung des Service, z.B. `E-Mail-Server für die Abteilung Vertrieb` oder `Monitoring-Agent v3.2`. Hier kann die funktionale Beschreibung oder die technische Spezifikation des Dienstes hinterlegt werden.

### Hersteller

Der Hersteller oder Anbieter des Service, z.B. `Microsoft`, `Apache Foundation` oder `Eigenentwicklung`. Dialog+-Feld — eigene Werte lassen sich bei Bedarf ergänzen.

### Installation

Die Art der Installation, z.B. `Manuell`, `Silent`, `Paketmanager` oder `Container`. Dialog-Feld mit vordefinierten Auswahlmöglichkeiten.

### Registrierungsschlüssel

Der Lizenz- oder Registrierungsschlüssel für den Service. **Achtung**: In sensiblen Umgebungen sollte der vollständige Key nicht im CMDB stehen — ein Verweis auf den Tresor oder das Lizenzmanagementsystem ist oft die bessere Wahl.

### Installationspfad

Der Pfad, unter dem der Service installiert ist, z.B. `/opt/monitoring-agent/` oder `C:\Program Files\Service\`. Hilfreich für Troubleshooting und Deinstallation.

### Anzahl Installationen

Die Gesamtanzahl der Installationen dieses Service in der Umgebung. Nützlich für die Lizenzübersicht und Kapazitätsplanung.

### Beschreibung

Freitext für zusätzliche Angaben: Versionsnummer, Abhängigkeiten, Konfigurationshinweise, bekannte Einschränkungen oder Verweise auf Dokumentation.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__SERVICE` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Service |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Spezifikation** | `specification` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Installation** | `installation` | Dialog (Auswahl) |
| **Registrierungsschlüssel** | `registration_key` | Text |
| **Installationspfad** | `install_path` | Text |
| **Anzahl Installationen** | `installation_count` | Ganzzahl |
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
        "category": "C__CATS__SERVICE",
        "data": {
            "specification": "Zentraler Monitoring-Dienst für alle Produktionsserver",
            "manufacturer": "Zabbix LLC",
            "installation": "Paketmanager",
            "registration_key": "Siehe Lizenztresor",
            "install_path": "/opt/zabbix-server/",
            "installation_count": 1,
            "description": "Zabbix Server 6.4 LTS, PostgreSQL-Backend, aktive und passive Checks"
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
        "category": "C__CATS__SERVICE"
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
        "category": "C__CATS__SERVICE",
        "entry": 1,
        "data": {
            "specification": "Zentraler Monitoring-Dienst — erweitert um Cloud-Monitoring",
            "installation_count": 3,
            "description": "Zabbix Server 7.0 LTS, Upgrade 2025-09, jetzt mit Zabbix Proxy an zwei Außenstandorten."
        }
    },
    "id": 3
}
```
