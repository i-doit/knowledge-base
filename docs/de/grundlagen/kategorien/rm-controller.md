---
title: "Kategorie: Remote Management Controller"
description: Dokumentation der Kategorie Remote Management Controller in i-doit
icon:
status:
lang: de
---

# Kategorie: Remote Management Controller

Die Kategorie **Remote Management Controller** dokumentiert die Out-of-Band-Management-Schnittstellen eines Servers — also Komponenten wie Dell iDRAC, HPE iLO, Supermicro BMC oder generische IPMI-Interfaces. Sie ist eine **Multi-Value-Kategorie**, da ein Server theoretisch mehrere Management-Controller besitzen kann (z.B. einen iDRAC und einen zusätzlichen BMC).

!!! tip "Warum Out-of-Band-Management dokumentiert gehört"
    Remote Management Controller sind die letzte Rettungsleine, wenn ein Server nicht mehr über das reguläre Netzwerk erreichbar ist. Wer schon einmal nachts um drei in einem RZ stand, weil die iDRAC-IP nirgends dokumentiert war, weiß: Diese Kategorie spart im Ernstfall Stunden. Trage mindestens die primäre Zugriffs-URL und das zugeordnete Management-Objekt ein.

## Warum diese Kategorie wichtig ist

Physische Server in Rechenzentren werden fast nie über Tastatur und Monitor administriert — das übernimmt der Remote Management Controller. Er ermöglicht Konsolzugriff, Neustart, BIOS-Konfiguration und Hardware-Monitoring, selbst wenn das Betriebssystem nicht mehr reagiert. Ohne dokumentierte Management-Zugänge ist der Administrator bei einem Ausfall auf physischen Zugang angewiesen — was bei verteilten Standorten oder Colocation-Rechenzentren Stunden oder Tage dauern kann.

## Verwendung

Typische Anwendungsfälle:

- **Lights-Out-Administration**: In Rechenzentren ohne permanente Vor-Ort-Präsenz ist der Remote Management Controller der primäre Zugangsweg für Hardware-Operationen. Die Kategorie liefert die URL, über die der Administrator das Web-Interface des Controllers erreicht.
- **Incident Response**: Server reagiert nicht mehr? Die dokumentierte Management-URL ermöglicht sofortigen Out-of-Band-Zugriff — ohne erst in Passwort-Safes oder Wiki-Seiten suchen zu müssen. In Kombination mit der Kategorie [Zugriff](access.md) entsteht ein vollständiges Bild aller Zugangswege.
- **Hardware-Monitoring**: Moderne Management-Controller melden Temperaturen, Lüfterdrehzahlen, Netzteilstatus und Festplattengesundheit. Die Dokumentation des Controllers in der CMDB stellt sicher, dass Monitoring-Systeme wissen, welchen Controller sie abfragen müssen.
- **Firmware-Management**: Management-Controller benötigen regelmäßige Firmware-Updates. Über Reports lässt sich auswerten, welche Server welchen Controller-Typ haben — und damit, welche Firmware-Versionen ausgerollt werden müssen.

[![Remote Management Controller](../../assets/images/de/grundlagen/kategorien/rm-controller.png)](../../assets/images/de/grundlagen/kategorien/rm-controller.png)

## Felder

### Primäre Zugriffs-URL

Die URL, über die das Web-Interface des Management-Controllers erreichbar ist — z.B. `https://idrac-srv01.mgmt.example.com` oder `https://192.168.10.51`. Dieses Feld ist der zentrale Anlaufpunkt für Administratoren, die auf den Controller zugreifen müssen. Der Wert wird aus der verknüpften Kategorie [Zugriff](access.md) des zugeordneten Management-Objekts übernommen.

!!! info "Zugriffs-URL über das verknüpfte Objekt"
    Die primäre URL wird nicht direkt in diesem Feld editiert, sondern aus dem zugeordneten Remote-Management-Objekt (Feld „Remote Management Controller") übernommen. Pflege die URL daher in der Kategorie [Zugriff](access.md) des Management-Objekts — sie erscheint dann automatisch hier.

### Remote Management Controller

Ein Objekt-Browser-Feld, das auf das Management-Controller-Objekt verweist. In der Praxis wird häufig ein eigenes Objekt vom Typ „Remote Management Controller" angelegt, das die IP-Adresse (über die Kategorie [Hostadresse](ip.md)) und die Zugriffs-URL (über [Zugriff](access.md)) des Controllers trägt. Die Verknüpfung hier stellt die Beziehung zwischen dem physischen Server und seinem Management-Controller her.

### Beschreibung

Freitext für zusätzliche Informationen: Controller-Typ (iDRAC 9, iLO 5, BMC), Firmware-Version, Hinweise zur Netzwerkanbindung (dediziertes MGMT-VLAN vs. Shared NIC), Standard-Zugangsdaten-Verweis oder besondere Konfigurationshinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__RM_CONTROLLER` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Blade Chassis u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Primäre Zugriffs-URL** | `remote_url` | Text (nur Lesen, aus verknüpftem Objekt) |
| **Remote Management Controller** | `connected_object` | Objekt-Browser (Verbindungsobjekt) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__RM_CONTROLLER",
        "data": {
            "connected_object": 2050,
            "description": "Dell iDRAC 9 Enterprise, Firmware 6.10.30.00, dediziertes MGMT-VLAN 10"
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
        "category": "C__CATG__RM_CONTROLLER"
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
        "category": "C__CATG__RM_CONTROLLER",
        "entry": 1,
        "data": {
            "description": "2026-04: Firmware-Update auf 7.00.00.00 durchgeführt, neue Web-UI aktiv."
        }
    },
    "id": 3
}
```
