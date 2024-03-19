<!-- TRANSLATED by md-translate -->
# Gerätetausch

# Remplacement de l'appareil

Ein neuer Switch wird in Betrieb genommen, doch alle Verbindungen sollen erhalten bleiben. Wer hier nicht im Anschluss alle Anschlüsse neu dokumentieren will, nutzt das [Add-on](./index.md) **Gerätetausch**. Diese erlaubt den Austausch von [Objekten](../grundlagen/struktur-it-dokumentation.md) bei konfigurierbarer Übernahme der bestehenden Verbindungen.

Un nouveau switch est mis en service, mais toutes les connexions doivent être conservées. Celui qui ne veut pas ici documenter à nouveau toutes les connexions à la suite, utilise le [Add-on](./index.md) **Echange d'appareils**. Celui-ci permet d'échanger des [objets](../bases/structure-it-documentation.md) en reprenant les connexions existantes de manière configurable.

Das Add-on hieß zuvor SwapCI bis zur Version 1.3.1.

L'add-on s'appelait auparavant SwapCI jusqu'à la version 1.3.1.

## Download und Installation

## Téléchargement et installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit pro Add-ons](./index.md).

Ce module complémentaire peut être installé ultérieurement. L'article [i-doit pro Add-ons](./index.md) fournit des descriptions détaillées concernant le téléchargement, l'installation, les mises à jour, etc.

## Konfiguration

## Configuration

Die Konfiguration befindet sich unter **Verwaltung → Add-ons → Gerätetausch → Konfiguration**. Sie dient größtenteils für die Definition von Standardwerten, um häufiges Tauschen zu standardisieren und zu beschleunigen.

La configuration se trouve sous **Administration → Add-ons → Echange d'appareils → Configuration**. Elle sert en grande partie à définir des valeurs par défaut afin de standardiser et d'accélérer les échanges fréquents.

| Option | Beschreibung |
| --- | --- |
| **Auswählbare Objekt-Typen** | Welche Objekte welchen Typs getauscht werden können, wird hier festgelegt. Zudem wird pro [Objekttyp](../grundlagen/struktur-it-dokumentation.md) festgelegt, welche [Kategorien](../grundlagen/struktur-it-dokumentation.md) (und somit welche [Attribute](../grundlagen/struktur-it-dokumentation.md)) getauscht werden sollen. Diejenigen Kategorien, die nicht ausgewählt werden, bleiben von einem Tausch unberührt. |
| **CMDB Status für Tauschgeräte** | Die Auswahl, welche Objekte zum Tauschen angeboten werden, kann über deren [**CMDB-Status**](../grundlagen/lebens-und-dokumentationszyklus.md) eingeschränkt werden. |
| **"Tausch" Status berücksichtigen?** | Wenn der Tausch-Status berücksichtigt wird, erhält das getauschte Gerät den **CMDB-Status** **Getauscht** und das Tauschgerät den **CMDB-Status In Betrieb**. |
| **Getauschte Geräte archivieren?** | Das das Objekt, das getauscht wird, den [Zustand](../grundlagen/lebens-und-dokumentationszyklus.md) **Archiviert** erhalten? |
| **SYS-ID ebenfalls tauschen?** | Soll das Attribut **SYS-ID** der Kategorie **Allgemein** getauscht werden? Hierbei handelt es sich um [ein Attribut zur eindeutigen Referenzierung](../grundlagen/eindeutige-referenzierungen.md). |

| option | description |
| --- | --- |
| **Types d'objets sélectionnables** | On définit ici quels objets de quel type peuvent être échangés. De plus, pour chaque [type d'objet](../grundlagen/struktur-it-dokumentation.md), on définit quelles [catégories](../grundlagen/struktur-it-dokumentation.md) (et donc quels [attributs](../grundlagen/struktur-it-dokumentation.md)) doivent être échangées. Les catégories qui ne sont pas sélectionnées ne sont pas affectées par l'échange. |
| Le choix des objets proposés à l'échange peut être limité par leur [**StatutCMDB**](../bases/cycledevieetdedocumentation.md). |
| Si le statut d'échange est pris en compte, l'appareil échangé reçoit le **statut CMDB** **échangé** et l'appareil échangé le **statut CMDB En service**. |
| **Archivage des appareils échangés?** | Que l'objet qui est échangé reçoive l'[état](../bases/cycle de vie et de documentation.md) **Archivé** ? |
| L'attribut **SYS-ID** de la catégorie **Général** doit-il être échangé ? Il s'agit ici d'un [attribut de référencement unique](../bases/références-uniques.md). |

## Rechtevergabe

## Attribution de droits

Unter **Verwaltung → Berechtigungen → Gerätetausch** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

Sous **Administration → Autorisations → Remplacement d'appareils**, il est possible d'adapter [Droits pour personnes et groupes de personnes](../documentation efficace/administration des droits/index.md).

| Bedingung | Beschreibung |
| --- | --- |
| **Objekte Tauschen** | Darf der Benutzer Objekte tauschen? |
| **Tauschen nach Arbeitsplatzsystemen** | Darf der Benutzer Arbeitsplatzkomponenten tauschen? |
| **Gerätetausch Konfiguration** | Darf der Benutzer die Konfiguration (siehe oben) anpassen? |
| **Gerätetausch-Schaltfläche in der Objektliste** | Der Benutzer hat über [die Aktionsleiste der Objekt-Liste](../grundlagen/objekt-liste/aktionsleiste.md) die Möglichkeit, Objekte miteinander zu tauschen. Dort erscheint der Button **Tauschen**. |
| **Gerätetausch-Schaltfläche in Objekten** | Der Benutzer hat über die Aktionsleiste innerhalb eines Objekts die Möglichkeit, das Objekt durch ein anderes zu tauschen. Dort erscheint der Button **Tauschen**. |

| condition | description |
| --- | --- |
| **Echange d'objets** | L'utilisateur peut-il échanger des objets ? |
| **Echange par système de poste de travail** | L'utilisateur peut-il échanger des composants de poste de travail ? |
| **Echange de configuration d'appareils** | L'utilisateur peut-il adapter la configuration (voir ci-dessus) ? |
| **Bouton d'échange d'appareils dans la liste des objets** | L'utilisateur a la possibilité d'échanger des objets entre eux via [la barre d'action de la liste des objets](../bases/liste des objets/barre d'action.md). Le bouton **Échanger** y apparaît. |
| L'utilisateur a la possibilité, via la barre d'action à l'intérieur d'un objet, d'échanger cet objet avec un autre. Le bouton **Echanger** y apparaît. |

## Voraussetzungen

## conditions préalables

Bevor zwei Objekte miteinander getauscht werden können, müssen folgende Voraussetzungen erfüllt sein:

Avant de pouvoir échanger deux objets entre eux, les conditions suivantes doivent être remplies :

* Beide Objekte haben denselben Objekttyp.
* Ein Objekt darf nicht mit sich selbst getauscht werden.

* Les deux objets ont le même type d'objet.
* Un objet ne peut pas être échangé avec lui-même.

## Objekte tauschen

## Echanger des objets

Um ein Objekt gegen ein anderes zu tauschen, gibt es drei Wege:

Pour échanger un objet contre un autre, il y a trois façons de procéder :

1. Innerhalb einer [Objekt-Liste](../grundlagen/objekt-liste/index.md) beide Objekte auswählen und in der [Aktionsleiste](../grundlagen/objekt-liste/aktionsleiste.md) den Button **Tauschen** klicken
2. Innerhalb eines Objekts in der Aktionsleiste den Button **Tauschen** klicken und anschließend das Tauschgerät unter **Lagerndes Objekt** auswählen
3. Unter **Add-ons → Gerätetausch** die beiden Objekte unter **Zu tauschendes Objekt** und **Lagerndes Objekt** auswählen

1. dans une [liste d'objets](../bases/liste d'objets/index.md), sélectionner les deux objets et cliquer sur le bouton **Échanger** dans la [barre d'action](../bases/liste d'objets/barre d'action.md)
2. à l'intérieur d'un objet, cliquer sur le bouton **Echange** dans la barre d'action et sélectionner ensuite l'appareil d'échange sous **Objet en stock**.
3. sous **Add-ons → Echange d'appareils**, sélectionner les deux objets sous **Objet à échanger** et **Objet en stock**.

Über den Button **Umstellen** können die ausgewählten Objekte vertauscht werden.

Le bouton **Remplacer** permet d'intervertir les objets sélectionnés.

[![Auswahl über Objekt-Liste](../assets/images/de/i-doit-pro-add-ons/replacement/1-rp.png)](../assets/images/de/i-doit-pro-add-ons/replacement/1-rp.png)

[ ![Sélection par liste d'objets](../assets/images/fr/i-doit-pro-add-ons/replacement/1-rp.png)](../assets/images/fr/i-doit-pro-add-ons/replacement/1-rp.png)

[![Auswahl über Objekt](../assets/images/de/i-doit-pro-add-ons/replacement/2-rp.png)](../assets/images/de/i-doit-pro-add-ons/replacement/2-rp.png)

[ ![Sélection par objet](../assets/images/fr/i-doit-pro-add-ons/replacement/2-rp.png)](../assets/images/fr/i-doit-pro-add-ons/replacement/2-rp.png)

Nach der Auswahl der beiden Objekte können weitere Optionen angepasst werden. Die Vorauswahl stammt aus der oben genannten Konfiguration.

Après avoir sélectionné les deux objets, d'autres options peuvent être adaptées. La présélection provient de la configuration mentionnée ci-dessus.

| Option | Beschreibung |
| --- | --- |
| **Zu übernehmende Kategorien** | Siehe oben |
| **"Tausch" Status berücksichtigen?** | Siehe oben |
| **Getauschte Geräte archivieren?** | Siehe oben |
| **SYS-ID ebenfalls tauschen?** | Siehe oben |

| option | description |
| --- | --- |
| **Catégories à reprendre** | Voir ci-dessus |
| **Tenir compte de l'état "Echange"?** | Voir ci-dessus |
| **Archivage des appareils échangés?** | Voir ci-dessus |
| **Echanger également le SYS-ID?** | Voir ci-dessus |

Durch einen Klick auf den Button **Gerätetausch starten** wird der Tausch beider Objekte durchgeführt.

En cliquant sur le bouton **Démarrer l'échange d'appareils**, l'échange des deux objets est effectué.

[![Objekte tauschen](../assets/images/de/i-doit-pro-add-ons/replacement/3-rp.png)](../assets/images/de/i-doit-pro-add-ons/replacement/3-rp.png)

[ ![Echanger des objets](../assets/images/fr/i-doit-pro-add-ons/replacement/3-rp.png)](../assets/images/fr/i-doit-pro-add-ons/replacement/3-rp.png)

## Tausch nach Arbeitsplatzsystemen

## Echange par système de poste de travail

Ein Vorauswahl für den Tausch kann über zugeordnete Arbeitsplätze erfolgen. Unter **Add-ons → Gerätetausch → Tausch nach Arbeitsplatzsystemen** wird zuerst ein Objekttyp ausgewählt. Danach erscheinen alle Objekte vom Typ **Arbeitsplatz**, in deren Kategorie **Arbeitsplatzkomponenten** Objekte diesen Typs zugeordnet sind. Von jeweils einem Arbeitsplatz wird ein Objekt zum Tauschen ausgewählt. Über den Button **Ausgewählte Objekte tauschen** gelangt man zur Oberfläche **Add-ons → Gerätetausch → Objekte tauschen**.

Une présélection pour l'échange peut être effectuée via des postes de travail attribués. Sous **Add-ons → Echange d'appareils → Echange par systèmes de postes de travail**, on sélectionne d'abord un type d'objet. Ensuite, tous les objets de type **poste de travail** apparaissent, dans la catégorie **composants de poste de travail** des objets de ce type sont attribués. Un objet de chaque poste de travail est sélectionné pour être échangé. En cliquant sur le bouton **Echanger les objets sélectionnés**, on accède à l'interface **Add-ons → Echange d'appareils → Echanger des objets**.

[![Tausch nach Arbeitsplatzsystemen](../assets/images/de/i-doit-pro-add-ons/replacement/4-rp.png)](../assets/images/de/i-doit-pro-add-ons/replacement/4-rp.png)

[ ![Echange par système de postes de travail](../assets/images/fr/i-doit-pro-add-ons/replacement/4-rp.png)](../assets/images/fr/i-doit-pro-add-ons/replacement/4-rp.png)

## Tausch-Report

## Rapport d'échange

Ein Bericht über bisher durchgeführte Tauschaktionen wird unter **Add-ons → Gerätetausch → Tausch-Report** generiert. Die Oberfläche ist alternativ über **Extras → Report Manager → Views → Tausch-Report** zu erreichen.

Un rapport sur les échanges effectués jusqu'à présent est généré sous **Add-ons → Echange d'appareils → Rapport d'échange**. L'interface est accessible alternativement via **Extras → Report Manager → Views → Echange-Report**.

[![Tausch-Report](../assets/images/de/i-doit-pro-add-ons/replacement/5-rp.png)](../assets/images/de/i-doit-pro-add-ons/replacement/5-rp.png)

[ ![Rapport d'échange](../assets/images/fr/i-doit-pro-add-ons/replacement/5-rp.png)](../assets/images/fr/i-doit-pro-add-ons/replacement/5-rp.png)

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 07.11.2023 | [Bug] No changes are recorded in the logbook<br>[Bug] Signal error when downloading a document from the document repository |
| 1.4 | 05.09.2022 | [Task] HP 8.0 Compatibility<br>[Task] Design Compatibility |
| 1.3.2 | 21.02.2022 | [Bug] Use Of German Language in English Version Of Object Swap |
| 1.3.1 | 10.08.2020 | [Bug] The location is lost during swap<br>[Bug] Information is deleted when objects are exchanged |
| 1.3 | 20.05.2019 | [Verbesserung] Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report<br>[Bug] Suchindex wird nach einem Gerätetausch nicht erneuert<br>[Bug] Gerätetausch verwendet Workflow Tabellen<br>[Bug] Tausch-Status im englischen als einziger CMDB-Status mit großem Anfangsbuchstaben<br>[Bug] Fehler beim Aufruf des Tausch-Reports (Gerätetausch)<br> |
| 1.2.5 | 02.05.2017 | [Bug] Fehlermeldung im AdminCenter bei der De-Installation von SWAP_CI<br> |
| 1.2.4 | 08.03.2017 | [Bug] Schaltfläche "Tauschen" aus Erweiterung "Gerätetausch" in Objektlisten hat keine Auswirkung<br>[Bug] PHP und i-doit Kompatibilität verbessert<br> |
| 1.2.3 | 08.10.2015 | [Verbesserung]  Attribute "Seriennummer" und "Modellbezeichnung" im Gerätetausch-Report<br>[Bug] Gerätetausch stellt Fehlermeldung dar, wenn man sich dessen Kontext einloggt.<br>[Bug] SQL Fehler verhindert das auswählen von Kategorien zum Tausch<br> |
| 1.2.2 | 09.03.2015 | [Bug] SwapCI-Modul verursacht Fehler falls Mandant das Modul nicht installiert hat<br> |
| 1.2.1 | 14.04.2014 | Initiales Release |

| version | date | changelog |
| --- | --- | --- |
| 1.5 | 07.11.2023 | [Bug] Aucun changement n'est enregistré dans le logbook<br>[Bug] Signal error when downloading a document from the document repository |
| 1.4 | 05.09.2022 | [Tâche] Compatibilité HP 8.0<br>[Tâche] Compatibilité de conception |
| 1.3.2 | 21.02.2022 | [Bug] Use Of German Language in English Version Of Object Swap |
| 1.3.1 | 10.08.2020 | [Bug] L'emplacement est perdu lors de la permutation<br>[Bug] Les informations sont supprimées lorsque les objets sont échangés |
| 1.3 | 20.05.2019 | [Amélioration] Attributs "Numéro de série" et "Nom du modèle" dans le rapport d'échange de périphériques<br>[Bug] L'index de recherche n'est pas renouvelé après un échange de périphériques<br>[Bug] L'échange de périphériques utilise des tables de workflow<br>[Bug] Statut d'échange en anglais comme seul statut CMDB commençant par une grande lettre<br>[Bug] Erreur lors de l'appel du rapport d'échange (échange de périphériques)<br> |
| 1.2.5 | 02.05.2017 | [Bug] Message d'erreur dans AdminCenter lors de la désinstallation de SWAP_CI<br> |
| 1.2.4 | 08.03.2017 | [Bug] Le bouton "Echanger" de l'extension "Echange d'appareils" dans les listes d'objets n'a aucun effet<br>[Bug] Compatibilité PHP et i-doit améliorée<br> |
| 1.2.3 | 08.10.2015 | [Amélioration] Attributs "Numéro de série" et "Nom du modèle" dans le rapport d'échange d'appareils<br>[Bug] L'échange d'appareils affiche un message d'erreur lorsqu'on se connecte à son contexte<br>[Bug] Une erreur SQL empêche de sélectionner des catégories pour l'échange<br> |
| 1.2.2 | 09.03.2015 | [Bug] Le module SwapCI provoque une erreur si le client n'a pas installé le module<br> |
| 1.2.1 | 14.04.2014 | Version initiale |