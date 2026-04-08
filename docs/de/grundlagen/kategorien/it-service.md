---
title: "Kategorie: Servicezuweisung"
description: Dokumentation der Kategorie Servicezuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Servicezuweisung

Die Kategorie **Servicezuweisung** verknüpft ein Objekt mit einem oder mehreren IT-Services. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Zuweisungen angelegt werden, sodass beispielsweise ein einzelner Server gleichzeitig als Komponente des E-Mail-Dienstes, des Monitoring-Systems und eines ERP-Services dokumentiert ist.

Diese Kategorie ist der **entscheidende Schritt, der eine CMDB vom reinen Inventar zum ITSM-Werkzeug macht**. Ohne Servicezuweisungen dokumentiert i-doit lediglich, *was* vorhanden ist — mit ihnen dokumentiert es, *wofür* es eingesetzt wird. Erst durch die Verknüpfung zwischen Infrastruktur und Service wird die Frage beantwortbar: „Wenn dieser Server ausfällt, welche Geschäftsprozesse sind betroffen?" Das ist die Grundlage für Business Impact Analysis (BIA), Incident-Priorisierung und fundiertes Change-Management.

!!! tip "Service-Baum im CMDB-Explorer"
    Die Servicezuweisungen aller Objekte bilden zusammen den **Service-Baum**, der im CMDB-Explorer visuell dargestellt wird. Dort ist auf einen Blick sichtbar, welche Server, Switches, Applikationen und Cluster einen bestimmten IT-Service tragen — und wie tief die Abhängigkeitskette reicht. Ist dieser Baum vollständig gepflegt, genügt ein Klick auf den Service, um die gesamte Infrastruktur dahinter zu sehen. Fehlen Zuweisungen, erscheint der Service als isolierter Knoten ohne Kontext.

## Verwendung

Typische Anwendungsfälle:

- **Impact-Analyse und Incident-Priorisierung**: Über die Servicezuweisung erkennt i-doit, welche IT-Services ausfallen, wenn ein bestimmter Server, Switch oder eine Applikation nicht mehr verfügbar ist. Ein Datenbankserver, der den Services „SAP ERP" und „Business Intelligence" zugewiesen ist, hat eine offensichtlich höhere Priorität als ein Testserver ohne Servicezuweisung. Dieses Wissen ist die Grundlage für Business Impact Analysis (BIA) und bestimmt, ob ein Incident als „kritisch" oder „niedrig" eingestuft wird.
- **SLA-Zuordnung**: Indem ein Objekt einem Service zugewiesen wird, der einen definierten Service Level besitzt, lässt sich ableiten, welche Verfügbarkeitsanforderungen für die zugrunde liegende Infrastruktur gelten. Ein Datenbankserver, der dem Service „SAP ERP" zugewiesen ist, erbt implizit dessen SLA-Anforderungen.
- **CMDB-Explorer**: Die Servicezuweisung erzeugt Beziehungen, die im CMDB-Explorer als Baumstruktur visualisiert werden. So wird auf einen Blick sichtbar, welche Komponenten zu welchem Service gehören und wie tief die Abhängigkeitskette reicht.
- **ITSM-Integration**: Wird i-doit als CMDB an ein ITSM-Tool wie OTRS, Znuny oder Zammad angebunden, bildet die Servicezuweisung die Brücke zwischen Configuration Items und den Services, die in Tickets referenziert werden. Ein Incident kann so automatisch dem richtigen Service zugeordnet werden.
- **Change-Management**: Vor einem geplanten Change zeigt die Servicezuweisung, welche Services von der Wartung betroffen sind. So lassen sich Wartungsfenster gezielt auf Zeiten legen, in denen die betroffenen Services die geringste Nutzung haben — und die Stakeholder der jeweiligen Services können proaktiv informiert werden.
- **Reporting und Dokumentationslücken**: Über den Report Manager lassen sich Auswertungen erstellen, die zeigen, welche Objekte keinem Service zugeordnet sind — ein häufiger Indikator für unvollständige Dokumentation. Ein Report „Server ohne Servicezuweisung" deckt blinde Flecken in der CMDB auf, die bei einem Incident zur bösen Überraschung werden können.

[![Servicezuweisung](../../assets/images/de/grundlagen/kategorien/it-service.png)](../../assets/images/de/grundlagen/kategorien/it-service.png)

## Felder

### Service

Der zugewiesene IT-Service. Über einen Objekt-Browser wird ein Objekt vom Typ **IT-Service**, **System Service** oder einem anderen serviceartigen Objekttyp ausgewählt. Jeder Eintrag in dieser Multi-Value-Kategorie repräsentiert genau eine Servicezuordnung. Die Auswahl erstellt automatisch eine bidirektionale Beziehung – der verknüpfte Service zeigt das zugewiesene Objekt seinerseits als Servicekomponente an.

### SYSID

Die System-ID des zugewiesenen Service-Objekts. Dieses Feld wird automatisch aus dem verknüpften Objekt übernommen und ist schreibgeschützt. Die SYSID dient als eindeutiger technischer Bezeichner und kann in Exporten oder Schnittstellen-Konfigurationen als Referenz verwendet werden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__IT_SERVICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Switch, Router, Cluster, Applikation, Gebäude u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Service** | `connected_object` | Objekt-Browser (Verknüpfung) |
| **SYSID** | `sysid` | Text (schreibgeschützt) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__IT_SERVICE",
        "data": {
            "connected_object": 456
        }
    },
    "id": 1
}
```

!!! note "Hinweis"
    Diese Kategorie erwartet den Parameter `object` statt `objID` beim Speichern. Der Wert von `connected_object` ist die Objekt-ID des IT-Services, dem das Objekt zugewiesen werden soll.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "objID": 123,
        "category": "C__CATG__IT_SERVICE"
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
        "category": "C__CATG__IT_SERVICE",
        "entry": 1,
        "data": {
            "connected_object": 789
        }
    },
    "id": 3
}
```
