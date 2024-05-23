# Objekte identifizieren bei Importen

i-doit verfügt über diverse Datenimporte. Bestehende Daten in der [IT-Dokumentation](../glossar.md) können dabei aktualisiert werden, anstatt meist unnötige Redundanzen zu erzeugen. Damit dies funktioniert, versucht i-doit bestehende [Objekte](../grundlagen/struktur-it-dokumentation.md) anhand von verschiedenen [Attributen](../grundlagen/struktur-it-dokumentation.md) zu identifizieren.

## Betroffene Datenimporte

Betrachtet werden in diesem Artikel folgende Datenimporte:

*   [CSV-Datenimport](csv-datenimport/index.md)
*   [JDisc Discovery](jdisc-discovery.md)
*   [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md)
*   [h-inventory](h-inventory.md)

Weitere Datenimporte verfolgen mitunter andere Vorgehensweisen.

## Vorgehensweise

Die Identifizierung von Objekten erfolgt zweistufig:

1. Die höchste Priorität genießen die eindeutigen Attribute der jeweiligen Datenquellen:

    CSV-Datenimport: _nicht anwendbar_<br>
    JDisc: Device ID<br>
    OCS Inventory NG: _nicht anwendbar_<br>
    h-inventory: Seriennummer<br>

    Diese Attribute werden beim ersten Datenimport gespeichert und können bei folgenden Datenimporten als Identifizierungsmerkmal verwendet werden. Falls diese Attribute nicht zur Verfügung stehen, folgt Schritt 2.

2. Anhand von Profilen erfolgt ein sogenanntes Objekt-Matching (siehe unten).

## Profile bilden

Einige Attribute sind geeignet, um Objekte [eindeutig zu referenzieren](../grundlagen/eindeutige-referenzierungen.md). Diesen Umstand kann man sich zu nutze machen, wenn es um den Import von Daten aus Drittapplikationen geht, wo ähnliche Eindeutigkeiten existieren. Um für verschiedene Import-Fälle gewappnet zu sein, können in i-doit sogenannte Objekt-Matching Profile gebildet werden, die beim Import berücksichtigt werden sollen. Die zentrale Konfiguration befindet sich unter **Verwaltung → Import und Schnittstellen → Import Matching Profile**. Es können beliebig viele Profile erstellt werden.

[![Objekt-Matching Profile Liste](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)

In der Standard-Installation von i-doit ist bereits ein Profil mit dem Namen **Default** enthalten, das nicht bearbeitet oder gelöscht werden darf. Über den Button **Neu** kann ein neues erstellt, über **Editieren** eines bearbeitet und über **Purge** ein Profil unwiderruflich gelöscht werden.

Pro Profil sind mehrere Angaben zu machen:

*   **Name**:<br> eine aussagekräftige Beschreibung des Profils
*   **Matchings**:<br> Hier stehen verschiedene Attribute und andere Felder zur Auswahl. Anhand dieser werden bereits dokumentierte Objekte gesucht und mit den zu importierenden Daten verglichen. Die Reihenfolge ist irrelevant und kann nicht verändert werden.
*   **Minimum Match**:<br> Beim Abgleich von zu importierenden Daten und Objekten in i-doit wird überprüft, wie viele Attribute eines Objektes übereinstimmen müssen. Die auswählbare Zahl richtet sich nach der Anzahl der Attribute unter **Matchings**.
*   **Filter für neue Objekte (JDISC)**:<br>**Die Option Neuer Objektfilter betrifft nur NEUE Objekte beim JDisc-Import.** Objekte vom Import ausschließen, welche nicht über konfigurierte Attribute verfügen. Möglich sind Hostname, Seriennummer, Objekt-Titel, MAC und IP-Adresse.
*   **Minimale Filterübereinstimmung (JDISC)**:<br>Mindestanzahl fehlender Attribute, um **NEUE** Importobjekte zu ignorieren.

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
