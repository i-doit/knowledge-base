---
title: "Kategorie: Anwendungen (spezifisch)"
description: Dokumentation der spezifischen Kategorie Anwendungen in i-doit
icon:
status:
lang: de
---

# Kategorie: Anwendungen (spezifisch)

Die Kategorie **Anwendungen** ist eine **spezifische Kategorie** des Objekttyps **Anwendung** und beschreibt die Stammdaten einer Software. Sie ist eine **Single-Value-Kategorie** – pro Anwendungs-Objekt existiert genau ein Eintrag mit den grundlegenden Eigenschaften wie Spezifikation, Hersteller, Installationsart und Registrierungsschlüssel.

!!! info "Stammdaten vs. Installation – ein häufiges Missverständnis"
    Diese Kategorie beschreibt, **was** eine Anwendung **ist** – also ihre Identität und Stammdaten. Sie beantwortet nicht die Frage, **wo** die Anwendung installiert ist. Dafür ist die globale Kategorie [Softwarezuweisung](application.md) zuständig, die auf den Ziel-Hosts (Servern, Clients) gepflegt wird. Die Trennung folgt einem zentralen i-doit-Prinzip: Software wird als eigenständiges Objekt mit eigenen Stammdaten gepflegt und dann beliebig vielen Hosts zugewiesen – ohne Daten zu duplizieren.

## Verwendung

Typische Anwendungsfälle:

- **Software-Katalog aufbauen**: Lege für jede im Unternehmen eingesetzte Software ein Objekt vom Typ Anwendung an und pflege hier die Stammdaten. Zusammen mit den Kategorien [Varianten](s-application-variant.md) und Versionen entsteht ein zentraler Software-Katalog, auf den alle Softwarezuweisungen verweisen. Die Kategorie [Installation](s-application-assigned-obj.md) zeigt dann automatisch, auf welchen Hosts diese Software zugewiesen ist.
- **Herstellerübersicht**: Über das Herstellerfeld lässt sich per Report auswerten, von welchen Herstellern Software im Einsatz ist – nützlich für Vendor-Management, Vertragsverhandlungen und Risikoanalysen (Abhängigkeit von einem Anbieter).
- **Installationstyp dokumentieren**: Das Feld Installationsart unterscheidet zwischen verschiedenen Bereitstellungsmodellen. Diese Information ist entscheidend für die Planung von Rollouts und Migrationen: Ein SaaS-Produkt erfordert keine lokale Deinstallation bei einem Server-Wechsel, eine klassische Installation dagegen schon.
- **Lizenz-Schlüssel zentral verwalten**: Der Registrierungsschlüssel wird hier am Software-Objekt gepflegt – nicht an jedem einzelnen Host. Das vermeidet Redundanz und stellt sicher, dass der Schlüssel nur an einer Stelle aktualisiert werden muss, z.B. bei einer Lizenzverlängerung.
- **Installationsanzahl und -pfad**: Die Felder Installationsanzahl und Installationspfad dokumentieren den Standard-Installationspfad und die erwartete Anzahl Installationen – Referenzwerte für Deployment-Automatisierung und Lizenzplanung.

[![Anwendungen (spezifisch)](../../assets/images/de/grundlagen/kategorien/s-application.png)](../../assets/images/de/grundlagen/kategorien/s-application.png)

## Felder

### Spezifikation

Freitextfeld für die nähere Beschreibung oder Spezifikation der Anwendung, z.B. `Webserver für interne Portale` oder `ERP-System Produktion`. Hier lassen sich Einsatzzweck, technische Anforderungen oder Konfigurationshinweise hinterlegen, die über den reinen Objektnamen hinausgehen.

### Hersteller

Der Hersteller oder Herausgeber der Software, z.B. `Microsoft`, `Apache Software Foundation`, `SAP`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Im Zusammenspiel mit Reports ermöglicht dieses Feld Auswertungen wie „Alle Anwendungen des Herstellers Oracle" oder „Anzahl eingesetzter Software-Produkte pro Hersteller".

### Installationsart

Beschreibt, wie die Anwendung typischerweise bereitgestellt wird. Dialog-Feld mit vordefinierten Werten. Die Unterscheidung hat praktische Konsequenzen: Bei einem Server-Umzug muss lokal installierte Software neu deployt werden, während browserbasierte oder SaaS-Anwendungen nur eine Konfigurationsänderung erfordern.

### Registrierungsschlüssel

Der Lizenz- oder Registrierungsschlüssel der Software, z.B. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. Wird zentral am Anwendungs-Objekt gepflegt, damit er nicht auf jedem Host einzeln hinterlegt werden muss.

!!! warning "Sicherheitshinweis"
    Registrierungsschlüssel sind sensible Daten. Stelle sicher, dass die Zugriffsrechte in i-doit so konfiguriert sind, dass nur berechtigte Personen (z.B. Lizenzmanager, IT-Einkauf) dieses Feld einsehen können. Das Rechtekonzept in i-doit ermöglicht die Einschränkung auf Kategorie-Ebene.

### Installationspfad

Der Standard-Installationspfad der Anwendung auf dem Zielsystem, z.B. `C:\Program Files\Microsoft SQL Server` oder `/opt/application`. Dieser Wert dient als Referenz für Deployment-Skripte und Troubleshooting – er beschreibt den **erwarteten** Pfad, nicht den tatsächlichen Pfad auf jedem einzelnen Host.

### Anzahl Installationen

Die geplante oder erlaubte Anzahl von Installationen. Dieser Wert kann als Referenz für das Lizenzmanagement dienen: Wenn die Lizenz 50 Installationen erlaubt, steht hier `50`. Verglichen mit der tatsächlichen Anzahl der Einträge in der Kategorie [Installation](s-application-assigned-obj.md) ergibt sich sofort, ob die Grenze erreicht ist.

### Beschreibung

Freitext für zusätzliche Angaben: Einsatzzweck, Lizenzmodell-Hinweise, bekannte Inkompatibilitäten, Links zur Herstellerdokumentation oder interne Zuständigkeiten (z.B. „Fachverantwortung: Team Middleware").

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__APPLICATION` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Anwendung |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Spezifikation** | `specification` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Installationsart** | `installation` | Dialog (Auswahl) |
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
        "object": 456,
        "category": "C__CATS__APPLICATION",
        "data": {
            "specification": "Zentraler Webserver für interne Portale und Reverse-Proxy",
            "manufacturer": "Apache Software Foundation",
            "installation": 2,
            "registration_key": "",
            "install_path": "/etc/apache2",
            "installation_count": 12,
            "description": "Open-Source-Webserver. Fachverantwortung: Team Middleware."
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
        "object": 456,
        "category": "C__CATS__APPLICATION"
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
        "object": 456,
        "category": "C__CATS__APPLICATION",
        "entry": 1,
        "data": {
            "installation_count": 15,
            "description": "Open-Source-Webserver. 2026-04: Installationsanzahl auf 15 erhöht nach Rollout in Standort Berlin."
        }
    },
    "id": 3
}
```
