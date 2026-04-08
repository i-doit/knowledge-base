---
title: Objekte identifizieren bei Importen
description: "Beim Datenimport erkennt i-doit bereits vorhandene Objekte anhand bestimmter Attribute und aktualisiert sie, anstatt Duplikate zu erzeugen."
icon:
status:
lang: de
---
# Objekte identifizieren bei Importen

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Beim Datenimport erkennt i-doit bereits vorhandene [Objekte](../grundlagen/struktur-it-dokumentation.md) anhand bestimmter [Attribute](../grundlagen/struktur-it-dokumentation.md) und aktualisiert sie, anstatt Duplikate zu erzeugen. Dieser Artikel beschreibt, wie diese Identifizierung funktioniert und wie du sie konfigurierst.

## Betroffene Datenimporte

Die hier beschriebene Identifizierung gilt fur folgende Importwege:

*   [CSV-Datenimport](csv-datenimport/index.md)
*   [JDisc Discovery](jdisc/index.md)
*   [OCS Inventory NG](../i-doit-add-ons/ocs-inventory-ng.md)
*   [h-inventory](h-inventory.md)

Andere Importwege verwenden unter Umstanden eigene Verfahren.

## Vorgehensweise

Die Identifizierung erfolgt in zwei Stufen:

**Stufe 1 -- Eindeutige Attribute der Datenquelle:**

Jede Datenquelle liefert ein eigenes eindeutiges Attribut, das i-doit beim ersten Import speichert:

*   CSV-Datenimport: _nicht anwendbar_<br>
*   JDisc: Device ID<br>
*   OCS Inventory NG: _nicht anwendbar_<br>
*   h-inventory: Seriennummer<br>

Bei Folgeimporten greift i-doit zuerst auf dieses Attribut zuruck. Steht es nicht zur Verfugung, folgt Stufe 2.

**Stufe 2 -- Objekt-Matching uber Profile:**

Hier vergleicht i-doit die zu importierenden Daten mit vorhandenen Objekten anhand eines konfigurierbaren Profils (siehe unten).

## Profile bilden

Bestimmte Attribute eignen sich, um Objekte [eindeutig zu referenzieren](../grundlagen/eindeutige-referenzierungen.md). Dieses Prinzip nutzt du beim Import aus Drittapplikationen: Du legst ein Objekt-Matching-Profil an, das festlegt, anhand welcher Attribute i-doit bestehende Objekte erkennt.

Die zentrale Konfiguration findest du unter **Verwaltung → Import und Schnittstellen → Import Matching Profile**. Du kannst beliebig viele Profile erstellen.

[![Objekt-Matching Profile Liste](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)

In der Standard-Installation von i-doit ist bereits ein Profil mit dem Namen **Default** enthalten, das nicht bearbeitet oder gelöscht werden darf. Über den Button **Neu** kann ein neues erstellt, über **Editieren** eines bearbeitet und über **Purge** ein Profil unwiderruflich gelöscht werden.

Jedes Profil besteht aus folgenden Einstellungen:

*   **Name:** Vergib eine aussagekraftige Bezeichnung fur das Profil.
*   **Matchings:** Wahle die Attribute aus, anhand derer i-doit bestehende Objekte sucht und mit den Importdaten vergleicht. Die Reihenfolge spielt keine Rolle.
*   **Minimum Match:** Lege fest, wie viele der gewahlten Attribute ubereinstimmen mussen, damit i-doit ein Objekt als identisch erkennt.
*   **Filter fur neue Objekte (JDisc):** Diese Option betrifft nur **neue** Objekte beim JDisc-Import. Du kannst Objekte vom Import ausschließen, denen bestimmte Attribute fehlen (Hostname, Seriennummer, Objekt-Titel, MAC oder IP-Adresse).
*   **Minimale Filterubereinstimmung (JDisc):** Lege die Mindestanzahl fehlender Attribute fest, ab der **neue** Importobjekte ignoriert werden.

[![Objekt-Matching Profile](../assets/images/de/daten-konsolidieren/objekt-import/2-obji.png)](../assets/images/de/daten-konsolidieren/objekt-import/2-obji.png)

## Mögliche Identifizierungsmerkmale

| Identifizierungsmerkmal | Anmerkungen                                                                                                                                                                                                                                                                   | JDisc | CSV-Datenimport | OCS Inventory NG | h-inventory |
| ----------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----- | --------------- | ---------------- | ----------- |
| **IP-Adresse**          | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse**                                                                                                                                                                                                            | ja    | ja              | nein             | nein        |
| **Benutzername**        | Person importieren; siehe Kategorie **Personen → Login**, Attribut **Username**                                                                                                                                                                                               | nein  | ja              | nein             | nein        |
| **Objekt-SYSID**        | Siehe Kategorie **Allgemein**, Attribut **SYS-ID**                                                                                                                                                                                                                            | nein  | ja              | nein             | nein        |
| **IMEI-Nummer**         | Siehe Kategorie **Mobilfunk**                                                                                                                                                                                                                                                 | nein  | ja              | nein             | nein        |
| **Seriennummer**        | Siehe Kategorie **Modell**                                                                                                                                                                                                                                                    | ja    | ja              | ja               | ja          |
| **Service Tag**         | Siehe Kategorie **Modell**                                                                                                                                                                                                                                                    | nein  | ja              | nein             | nein        |
| **Inventarnummer**      | Siehe Kategorie **Buchhaltung**                                                                                                                                                                                                                                               | nein  | ja              | nein             | nein        |
| **Standort**            | Siehe Kategorie **Standort**                                                                                                                                                                                                                                                  | nein  | ja              | nein             | nein        |
| **Objekttyp Konstante** | Objekttyp muss übereinstimmen; siehe [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md)                                                                                                                                                        | nein  | ja              | ja               | nein        |
| **Objekt-Titel**        | Siehe Kategorie Allgemein, Attribut Bezeichnung                                                                                                                                                                                                                               | ja    | ja              | ja               | ja          |
| **Objekt-ID**           | Siehe Kategorie **Allgemein**, Attribut **Objekt ID**                                                                                                                                                                                                                         | nein  | ja              | nein             | nein        |
| **Hostname**            | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse**                                                                                                                                                                                                            | ja    | ja              | ja               | ja          |
| **E-Mail-Adresse**      | Siehe Kategorie **E-Mail-Adressen**                                                                                                                                                                                                                                           | nein  | ja              | nein             | nein        |
| **Raumnummer**          | Raum importieren; siehe Kategorie **Raum**                                                                                                                                                                                                                                    | nein  | ja              | nein             | nein        |
| **Host Alias**          | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse**                                                                                                                                                                                                            | ja    | ja              | ja               | ja          |
| **FQDN**                | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse**                                                                                                                                                                                                            | ja    | ja              | ja               | ja          |
| **MAC**                 | Netzwerkfähiges Gerät importieren; siehe Kategorie **Netzwerk → Port**, Attribut **MAC-Adresse**                                                                                                                                                                              | ja    | ja              | ja               | ja          |
| **LDAP DN**             | Werden Personen über [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) synchronisiert, speichert i-doit im Hintergrund den jeweiligen DN. Dieses Attribut ist in i-doit nicht einsehbar, kann aber als Identifizierungsmerkmal genutzt werden. | nein  | ja              | nein             | nein        |
