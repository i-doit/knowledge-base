<!-- TRANSLATED by md-translate -->
# Objekte identifizieren bei Importen

# Identifier les objets lors des importations

i-doit verfügt über diverse Datenimporte. Bestehende Daten in der [IT-Dokumentation](../glossar.md) können dabei aktualisiert werden, anstatt meist unnötige Redundanzen zu erzeugen. Damit dies funktioniert, versucht i-doit bestehende [Objekte](../grundlagen/struktur-it-dokumentation.md) anhand von verschiedenen [Attributen](../grundlagen/struktur-it-dokumentation.md) zu identifizieren.

i-doit dispose de diverses importations de données. Les données existantes dans la [documentation IT](../glossar.md) peuvent ainsi être mises à jour au lieu de créer des redondances généralement inutiles. Pour que cela fonctionne, i-doit essaie d'identifier les [objets](../bases/structure-it-documentation.md) existants à l'aide de différents [attributs](../bases/structure-it-documentation.md).

## Betroffene Datenimporte

## Importations de données concernées

Betrachtet werden in diesem Artikel folgende Datenimporte:

Les importations de données suivantes sont examinées dans cet article :

* [CSV-Datenimport](csv-datenimport/index.md)
* [JDisc Discovery](jdisc-discovery.md)
* [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md)
* [h-inventory](h-inventory.md)

* [Importation de données CSV](csv-datenimport/index.md)
* [JDisc Discovery](jdisc-discovery.md)
* [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md)
* [h-inventory](h-inventory.md)

Weitere Datenimporte verfolgen mitunter andere Vorgehensweisen.

D'autres importations de données suivent parfois d'autres procédures.

## Vorgehensweise

## Procédure

Die Identifizierung von Objekten erfolgt zweistufig:

L'identification des objets se fait en deux étapes :

1. Die höchste Priorität genießen die eindeutigen Attribute der jeweiligen Datenquellen:
    CSV-Datenimport: _nicht anwendbar_
     JDisc: Device ID
     OCS Inventory NG: _nicht anwendbar_
     h-inventory: SeriennummerDiese Attribute werden beim ersten Datenimport gespeichert und können bei folgenden Datenimporten als Identifizierungsmerkmal verwendet werden. Falls diese Attribute nicht zur Verfügung stehen, folgt Schritt 2.
2. Anhand von Profilen erfolgt ein sogenanntes Objekt-Matching (siehe unten).

1. la priorité la plus élevée est accordée aux attributs uniques des sources de données respectives :
    Importation de données CSV : _non applicable_.
     JDisc : Device ID
     OCS Inventory NG : _non applicable_.
     h-inventory : numéro de sérieCes attributs sont enregistrés lors du premier import de données et peuvent être utilisés comme identifiant lors des imports de données suivants. Si ces attributs ne sont pas disponibles, il faut passer à l'étape 2.
2. une correspondance d'objet est effectuée sur la base de profils (voir ci-dessous).

## Profile bilden

## Créer des profils

Einige Attribute sind geeignet, um Objekte [eindeutig zu referenzieren](../grundlagen/eindeutige-referenzierungen.md). Diesen Umstand kann man sich zu nutze machen, wenn es um den Import von Daten aus Drittapplikationen geht, wo ähnliche Eindeutigkeiten existieren. Um für verschiedene Import-Fälle gewappnet zu sein, können in i-doit sogenannte Objekt-Matching Profile gebildet werden, die beim Import berücksichtigt werden sollen. Die zentrale Konfiguration befindet sich unter **Verwaltung → Import und Schnittstellen → Objekt-Matching Profile**. Es können beliebig viele Profile erstellt werden.

Certains attributs sont appropriés pour [référencer de manière univoque des objets](../bases/références-univoques.md). Cet état de fait peut être mis à profit lorsqu'il s'agit d'importer des données d'applications tierces où des univocités similaires existent. Afin de pouvoir faire face à différents cas d'importation, il est possible de créer dans i-doit des profils de correspondance d'objets qui doivent être pris en compte lors de l'importation. La configuration centrale se trouve sous **Administration → Importation et interfaces → Profils de concordance d'objets**. Il est possible de créer autant de profils que l'on veut.

[![Objekt-Matching Profile Liste](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)](../assets/images/de/daten-konsolidieren/objekt-import/1-obji.png)

[ ![Liste des profils de correspondance des objets](../assets/images/fr/consolidation des données/importation d'objets/1-obji.png)](../assets/images/fr/consolidation des données/importation d'objets/1-obji.png)

In der Standard-Installation von i-doit ist bereits ein Profil mit dem Namen **Default** enthalten, das nicht bearbeitet oder gelöscht werden darf. Über den Button **Neu** kann ein neues erstellt, über **Editieren** eines bearbeitet und über **Purge** ein Profil unwiderruflich gelöscht werden.

L'installation standard d'i-doit contient déjà un profil nommé **Default**, qui ne doit pas être modifié ou supprimé. Le bouton **Nouveau** permet d'en créer un nouveau, le bouton **Editer** permet d'en modifier un et le bouton **Purge** permet de supprimer irrémédiablement un profil.

Pro Profil sind mehrere Angaben zu machen:

Plusieurs informations doivent être fournies pour chaque profil :

* **Name**: eine aussagekräftige Beschreibung des Profils
* **Matchings**: Hier stehen verschiedene Attribute und andere Felder zur Auswahl. Anhand dieser werden bereits dokumentierte Objekte gesucht und mit den zu importierenden Daten verglichen. Die Reihenfolge ist irrelevant und kann nicht verändert werden.
* **Minimum Match**: Beim Abgleich von zu importierenden Daten und Objekten in i-doit wird überprüft, wie viele Attribute eines Objektes übereinstimmen müssen. Die auswählbare Zahl richtet sich nach der Anzahl der Attribute unter **Matchings**.

**Nom** : une description pertinente du profil
* **Matchings** : Différents attributs et autres champs sont disponibles ici. Sur la base de ceux-ci, des objets déjà documentés sont recherchés et comparés avec les données à importer. L'ordre n'est pas pertinent et ne peut pas être modifié.
* **Minimum Match** : Lors de la comparaison des données à importer et des objets dans i-doit, le système vérifie combien d'attributs d'un objet doivent correspondre. Le nombre sélectionnable dépend du nombre d'attributs sous **Matchings**.

[![Objekt-Matching Profile](../assets/images/de/daten-konsolidieren/objekt-import/2-obji.png)](../assets/images/de/daten-konsolidieren/objekt-import/2-obji.png)

[ ![Profil de correspondance des objets](../assets/images/fr/consolidation des données/importation d'objets/2-obji.png)](../assets/images/fr/consolidation des données/importation d'objets/2-obji.png)

## Mögliche Identifizierungsmerkmale

## Caractéristiques d'identification possibles

| Identifizierungsmerkmal | Anmerkungen | CSV-Datenimport | JDisc | OCS Inventory NG | h-inventory |
| --- | --- | --- | --- | --- | --- |
| Identifizierungsmerkmal | Anmerkungen | CSV-Datenimport | JDisc | OCS Inventory NG | h-inventory |
| --- | --- | --- | --- | --- | --- |
| **Benutzername** | Person importieren; siehe Kategorie **Personen → Login**, Attribut **Username** | ja  | nein | nein | nein |
| **E-Mail-Adresse** | Siehe Kategorie **E-Mail-Adressen** | ja  | nein | nein | nein |
| **FQDN** | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse** | ja  | ja  | ja  | ja  |
| **Hostname** | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse** | ja  | ja  | ja  | ja  |
| **IMEI-Nummer** | Siehe Kategorie **Mobilfunk** | ja  | nein | nein | nein |
| **Inventarnummer** | Siehe Kategorie **Buchhaltung** | ja  | nein | nein | nein |
| **IP-Adresse** | Netzwerkfähiges Gerät importieren; siehe Kategorie **Hostadresse** | ja  | ja  | nein | nein |
| **LDAP DN** | Werden Personen über [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) synchronisiert, speichert i-doit im Hintergrund den jeweiligen DN. Dieses Attribut ist in i-doit nicht einsehbar, kann aber als Identifizierungsmerkmal genutzt werden. | ja  | nein | nein | nein |
| **MAC** | Netzwerkfähiges Gerät importieren; siehe Kategorie **Netzwerk → Port**, Attribut **MAC-Adresse** | ja  | ja  | ja  | ja  |
| **Objekt-ID** | Siehe Kategorie **Allgemein**, Attribut **Objekt ID** | ja  | nein | nein | nein |
| **Objekt-SYSID** | Siehe Kategorie **Allgemein**, Attribut **SYS-ID** | ja  | nein | nein | nein |
| **Objekt-Titel** | Siehe Kategorie Allgemein, Attribut Bezeichnung | ja  | ja  | ja  | ja  |
| **Objekttyp Konstante** | Objekttyp muss übereinstimmen; siehe [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) | ja  | nein | ja  | nein |
| **Raumnummer** | Raum importieren; siehe Kategorie **Raum** | ja  | nein | nein | nein |
| **Seriennummer** | Siehe Kategorie **Modell** | ja  | ja  | ja  | ja  |
| **Service Tag** | Siehe Kategorie **Modell** | ja  | nein | nein | nein |
| **Standort** | Siehe Kategorie **Standort** | ja  | nein | nein | nein |

| caractéristique d'identification | notes | importation de données CSV | JDisc | OCS Inventory NG | h-inventory |
| --- | --- | --- | --- | --- | --- |
| Caractéristique d'identification | Notes | Importation de données CSV | JDisc | OCS Inventory NG | h-inventory |
| --- | --- | --- | --- | --- | --- |
| **Nom d'utilisateur** | Importer une personne ; voir catégorie **Personnes → Login**, attribut **Nom d'utilisateur** | oui | non | non |
| **Adresse e-mail** | Voir catégorie **Adresses e-mail** | oui | non | non |
| **FQDN** | Importer un appareil compatible réseau ; voir catégorie **Adresse hôte** | oui | oui | oui |
| **nom d'hôte** | Importer un appareil compatible réseau ; voir catégorie **adresse d'hôte** | oui | oui | oui |
| **NuméroIMEI** | Voir catégorie **Mobile** | oui | non | non |
| **Numéro d'inventaire** | Voir catégorie **Comptabilité** | oui | non | non |
| **adresse IP** | Importer un appareil compatible réseau ; voir catégorie **adresse hôte** | oui | oui | non | non |
| **LDAP DN** | Si des personnes sont synchronisées via [LDAP/AD](../authentification-et-administration-des-utilisateurs/index.md), i-doit enregistre en arrière-plan le DN correspondant. Cet attribut n'est pas visible dans i-doit, mais peut être utilisé comme identifiant. | oui | non | non |
| **MAC** | Importer un appareil compatible réseau ; voir catégorie **Réseau → Port**, attribut **Adresse MAC** | oui | oui | oui |
| **ID d'objet** | Voir catégorie **Général**, attribut **ID d'objet** | oui | non | non |
| **Objet-SYSID** | Voir catégorie **Général**, attribut **SYS-ID** | oui | non | non |
| **Titre de l'objet** | Voir catégorie Général, attribut Désignation | oui | oui | oui |
| **Type d'objet Constante** | Le type d'objet doit correspondre ; voir [types d'objets définis par l'utilisateur](../bases/typesd'objetsdéfinisparl'utilisateur.md) | oui | non | oui | non |
| **Numéro de pièce** | Importer une pièce ; voir catégorie **Pièce** | oui | non | non |
| **Numéro de série** | Voir catégorie **Modèle** | oui | oui | oui |
| **Jour de service** | Voir catégorie **Modèle** | oui | non | non |
| **Lieu** | Voir catégorie **Lieu** | oui | non | non |