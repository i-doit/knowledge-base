---
title: "Kategorie: Zertifikat"
description: Dokumentation der Kategorie Zertifikat in i-doit
icon:
status:
lang: de
---

# Kategorie: Zertifikat

Die Kategorie **Zertifikat** dokumentiert digitale Zertifikate, die einem Objekt zugeordnet sind. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können mehrere Zertifikate erfasst werden, z.B. ein SSL/TLS-Zertifikat für HTTPS und ein separates Zertifikat für die API-Schnittstelle.

!!! warning "Ablaufdaten im Blick behalten"
    Abgelaufene Zertifikate gehören zu den häufigsten Ursachen für ungeplante Ausfälle: Webseiten zeigen Sicherheitswarnungen, API-Verbindungen schlagen fehl, VPN-Tunnel brechen zusammen. Die Kategorie Zertifikat ermöglicht es, Ablaufdaten systematisch zu erfassen und über den Report Manager oder die Benachrichtigungsfunktion rechtzeitig zu warnen — bevor der Ernstfall eintritt.

## Verwendung

Typische Anwendungsfälle:

- **SSL/TLS-Zertifikate verwalten**: Erfasse für jeden Webserver, Loadbalancer oder Reverse Proxy die eingesetzten TLS-Zertifikate mit Common Name, Typ und Ablaufdatum. Ein Report über alle Zertifikate, die in den nächsten 30 Tagen ablaufen, ist das einfachste Frühwarnsystem gegen Zertifikatsausfälle.
- **Code-Signing-Zertifikate**: Dokumentiere Zertifikate, die zum Signieren von Software, Skripten oder Treibern verwendet werden. Der Ablauf eines solchen Zertifikats kann dazu führen, dass Installationen oder Updates fehlschlagen.
- **Client-Zertifikate und Maschinen-Authentifizierung**: In Umgebungen mit 802.1X oder zertifikatsbasierter VPN-Authentifizierung muss dokumentiert sein, welches Gerät welches Zertifikat verwendet. Die Kategorie liefert diese Zuordnung.
- **Zertifikats-Lifecycle**: Vom Erstellungsdatum bis zum Ablaufdatum nachvollziehen, wann ein Zertifikat erneuert werden muss. Beim Austausch den alten Eintrag archivieren und einen neuen anlegen — die Änderungshistorie zeigt dann lückenlos, welche Zertifikate im Laufe der Zeit im Einsatz waren.

!!! tip "Benachrichtigungen bei Ablauf einrichten"
    Unter **Extras → Benachrichtigungen** kannst du eine Benachrichtigung einrichten, die automatisch eine E-Mail versendet, wenn ein Zertifikat in X Tagen abläuft. In Kombination mit einem Report, der alle Zertifikate mit Ablaufdatum auflistet, hast du ein zweistufiges Sicherheitsnetz gegen vergessene Verlängerungen.

[![Zertifikat](../../assets/images/de/grundlagen/kategorien/certificate.png)](../../assets/images/de/grundlagen/kategorien/certificate.png)

## Felder

### Typ

Die Art des Zertifikats, z.B. `SSL/TLS`, `Code Signing`, `S/MIME` oder `Client`. Da es sich um ein Dialog+-Feld handelt, kannst du eigene Typen ergänzen — etwa `Wildcard`, `EV (Extended Validation)` oder `Let's Encrypt`. Eine konsistente Benennung erleichtert das Filtern in Reports erheblich.

### Erstellungsdatum

Das Datum, an dem das Zertifikat ausgestellt wurde. Zusammen mit dem Ablaufdatum ergibt sich die Gültigkeitsdauer. Typische Laufzeiten sind 1 Jahr (Let's Encrypt: 90 Tage). Ein ungewöhnlich altes Erstellungsdatum kann ein Hinweis darauf sein, dass ein Zertifikat längst hätte erneuert werden müssen.

### Ablaufdatum

Das kritischste Feld dieser Kategorie: der Tag, an dem das Zertifikat ungültig wird. Dieses Datum ist die Grundlage für Reports und Benachrichtigungen. Ein Report mit der Bedingung `Ablaufdatum < heute + 30 Tage` zeigt alle Zertifikate, die zeitnah erneuert werden müssen. Ohne gepflegtes Ablaufdatum ist die gesamte Zertifikatsverwaltung in der CMDB wertlos.

### Common Name

Der Common Name (CN) des Zertifikats — bei TLS-Zertifikaten typischerweise der Hostname oder die Domain, z.B. `*.example.com` oder `api.example.com`. Bei Wildcard-Zertifikaten steht hier die Wildcard-Domain. Der Common Name ist der wichtigste Identifikator, um ein Zertifikat einem konkreten Dienst zuzuordnen.

### Beschreibung

Freitext für ergänzende Details: ausstellende CA (z.B. DigiCert, Let's Encrypt), Subject Alternative Names (SANs), verwendeter Schlüsselalgorithmus (RSA 2048, ECDSA P-256), Speicherort des Private Keys, zuständiger Administrator oder Hinweise zur automatischen Verlängerung (z.B. per Certbot).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CERTIFICATE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Applikation, Datenbankschema, Lizenz, Betriebssystem, Service u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Erstellungsdatum** | `create_date` | Datum |
| **Ablaufdatum** | `expire_date` | Datum |
| **Common Name** | `common_name` | Textfeld (mehrzeilig) |
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
        "category": "C__CATG__CERTIFICATE",
        "data": {
            "type": "SSL/TLS",
            "create_date": "2026-01-15",
            "expire_date": "2027-01-15",
            "common_name": "*.example.com",
            "description": "Wildcard-Zertifikat, DigiCert, RSA 2048 Bit, SANs: example.com, *.example.com"
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
        "category": "C__CATG__CERTIFICATE"
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
        "category": "C__CATG__CERTIFICATE",
        "entry": 12,
        "data": {
            "expire_date": "2027-04-15",
            "description": "Verlängerung 2026-04: neues Zertifikat von DigiCert, Laufzeit 12 Monate, alter CN beibehalten"
        }
    },
    "id": 3
}
```
