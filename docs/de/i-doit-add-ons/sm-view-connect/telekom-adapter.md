---
title: SHD SM-VIEW Connect - Telekom-Adapter
description: SHD SM-VIEW Connect - Telekom-Adapter
icon:
status:
lang: de
---

Mit dem Telekom-Adapter ist es möglich, Vertragsdaten und SIM-Karten vom Portal der Telekom nach i-doit zu importieren.

Zur Nutzung des Adapters benötigen Sie eine entsprechende Lizenz, welche Sie über den Marketplace von synetics oder direkt von SHD erhalten können.

[Zur Dokumentation des Add-ons](https://smdocu.atlassian.net/wiki/spaces/SKB/pages/2296709154/SM-VIEW+Connect+-+Telekom-Adapter){ .md-button .md-button--primary }

## Installation

Zur Nutzung des Telekom-Adapters ist ein Internetzugriff vom i-doit Host auf das Portal der Telekom nötig.

Die Nutzung des Telekom-Portals muss beim Anbieter mit Hilfe der B2B-Abteilung beantragt werden. Im nächsten Schritt ist es nötig ein TLS-Zertifikat zu erstellen und der Telekom mitzuteilen. Dieses wird dann für den vereinbarten Rahmenvertrag freigeschaltet. Nach erfolgreicher Beantragung muss das Zertifikat dann nach i-doit importiert werden.

Sie können das Zertifikat und den privaten Schlüssel unter dem Menüpunkt “Client Zertifikat Upload” hochladen.

[![Zertifikate hochladen](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-100916.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-100916.png)

Im unteren Bereich der Seite befindet sich die Zertifikatsübersicht:

[![Übersicht über die verwendeten Zertifikate](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101046.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101046.png)

Hier besteht auch die Möglichkeit, hochgeladene Zertifikate zu löschen.

## Basiseinstellungen

Neben den allgemeinen Basiseinstellungen können Sie für den Telekom-Adapter folgende Einstellungen vornehmen:

[![Basiseinstellungen des Telekom-Adapters](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101326.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101326.png)

-   Api Basis URL: Die Basis-URL zum Telekom-Portal, ohne abschließenden “/”.
-   API Benutzername: Ein gültiger Nutzername mit Zugriff auf das Telekom-Portal.
-   Api Passwort: Das entsprechende Passwort des Nutzers.
-   Zertifikat Passphrase: Die von der Telekom übermittelte Passphrase zum Zertifikat.
-   Telekom Kundennummer: Ihre Telekom Kundennummer.
-   Telekom Vertrags ID: Ihre Telekom Vertrags-ID.
-   Standard Ziel-Kategorien nicht befüllen: Wenn aktiviert, wird das hinterlegte Standard-Mapping ignoriert und nur die im folgenden Abschnitt zugewiesenen Werte befüllt.
-   Import Limit: Maximale Anzahl der Objekte, welche importiert werden.

## Konfiguration des Mappings

Zum Bearbeiten der Konfiguration wechseln Sie bitte mit einem Klick auf den Knopf “Editieren” in den Bearbeitungsmodus.

Die Konfiguration des Objekttyp-Mappers und des Objekt-Matchings sind unter folgendem Link beschrieben: [SM-VIEW Connect - Grundlagen](https://smdocu.atlassian.net/wiki/x/AQDli).

## Wert Mapping

Für den Telekom-Adapter ist es möglich, verfügbare Einträge für Telefontarif und Provider auf bereits bestehende Einträge in i-doit abzubilden. Dies hat den Vorteil, dass beispielsweise mehrere Einträge zu einem Provider - “D1” oder “Telekom” auf einen einzigen Provider-Namen in i-doit gemappt werden können.

[![Mapping von Werten der externen Datenquelle auf Werte in i-doit](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101805.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240327-101805.png)

## Import

Neben dem automatischen, zeitgesteuerten Import haben Sie zusätzlich die Möglichkeit, einen Import manuell zu starten.

[![Start eines manuellen Imports](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-053234.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-053234.png)

Mit einem Klick auf den Knopf “Import starten” werden die jeweiligen Daten nach i-doit importiert.

## Welche Daten werden importiert?

Folgende Daten können grundsätzlich importiert werden:

-   Verträge
    -   mit Laufzeiten
    -   mit Tarifoptionen
    -   mit Rufnummern
    -   deren SIM-Karten
    -   mit PIN / PUK
    -   mit eSIM / klassische SIM / Multi-SIM

## Standardzuweisung

Ohne dass ein Mapping vorgenommen wird werden bereits Standardwerte befüllt. Dieses Verhalten lässt sich durch den Schalter “Standard Ziel-Kategorien nicht befüllen” in den Einstellungen ausschalten.

Der Ziel-Objekttyp entspricht dem oben ausgewählten Wert.

| Quell-Wert                     | Ziel-Kategorie | Ziel-Wert     |
| ------------------------------ | -------------- | ------------- |
| import.contract_tariff_name    | SIM            | Tarif         |
| import.contract_start_date     | SIM            | Anfangsdatum  |
| import.contract_end_date       | SIM            | Enddatum      |
| import.sim_meta_field_iccid_id | Karten         | Kartennummer  |
| import.sim_field_phone_number  | SIM            | Telefonnummer |
| import.sim_field_pin1          | Karten         | Pin           |
| import.sim_field_pin2          | Karten         | Pin2          |
| import.sim_field_puk1          | Karten         | PUK           |
| import.sim_field_puk2          | Karten         | PUK2          |
| import.sim.network_provider    | SIM            | Netzanbieter  |
| import.sim.customer_number     | SIM            | Kundennummer  |

[![Standardzuweisung](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/image-20240424-142506.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/image-20240424-142506.png)

## Verwendung von SIM-Karten/Vertragsdaten Daten

Im Standard wird der Objekttyp “SIM-Karte” verwendet um die Vertragsdaten zu halten, der Objekttyp kann im Konfigurator verändert werden. Da der Name “SIM-Karte” etwas Irreführend ist hat es sich in den meisten Installationen angeboten den Namen des Objekttyps auf etwa “Mobilfunkvertrag” oder ähnliches zu ändern.

Zu den Kopfdaten des Vertrags werden dann die SIM-Karten in der Kategorie “Karten” importiert.

Diese können dann einem Mobiltelefon zugewiesen werden.

[![Zugewiesene Karten zu einem Vertrag](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-052338.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-052338.png)

In der Kategorie “SIM” finden Sie nach dem Import alle relevanten Laufzeitdaten des Vertrages.

[![Laufzeitdaten des Vertrages](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-052635.png)](../../assets/images/de/i-doit-add-ons/sm-view-connect/telekom-adapter/grafik-20240410-052635.png)
