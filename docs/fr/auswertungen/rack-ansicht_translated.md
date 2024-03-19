<!-- TRANSLATED by md-translate -->
# Rack-Ansicht

# Vue du rack

i-doit bringt eine Visualisierung von 19"-Racks mit. Alle verbauten Komponenten werden übersichtlich angezeigt. Statistiken zu freien Höheneinheiten, maximaler Energiebedarf und freie Netzwerkports in Switches und Patchpanels unterstützen bei der Kapazitätsplanung.

i-doit apporte une visualisation des racks 19". Tous les composants installés sont affichés de manière claire. Les statistiques sur les unités de hauteur libres, la consommation d'énergie maximale et les ports réseau libres dans les commutateurs et les panneaux de brassage aident à la planification des capacités.

## Kategorie Schrank

## Catégorie armoire

Die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Schrank** ist dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Schrank** in der Standard-[Installation](../installation/index.md) von i-doit bereits zugeordnet. Die Kategorie zeigt das modellierte Rack von vorne und hinten.

La [catégorie](../bases/structure-it-documentation.md) **Baie** est déjà associée au [type d'objet](../bases/structure-it-documentation.md) **Baie** dans l'[installation] standard(../installation/index.md) de i-doit. La catégorie montre le rack modélisé de face et de dos.

[![Kategorie Schrank](../assets/images/de/auswertungen/rack-ansicht/1-ra.png)](../assets/images/de/auswertungen/rack-ansicht/1-ra.png)

[ ![Catégorie Armoire](../assets/images/fr/évaluations/rack-ansicht/1-ra.png)](../assets/images/fr/évaluations/rack-ansicht/1-ra.png)

!!! success "Schrank = Rack"

! !! success "Armoire = Rack"

```
Die Screenshots zeigen eine Demo-Installation von i-doit, in der der ursprüngliche Objekttyp **Schrank** und die gleichnamige Kategorie in **Rack** umbenannt wurden. Wer sein [eigenes Vokabular in die IT-Dokumentation einbringen](../administration/mehrsprachigkeit-und-uebersetzungen.md) möchte, kann das problemlos tun.
```

## Schrank-Attribute bearbeiten

## Modifier les attributs de l'armoire

Die Höheneinheiten des Racks werden in der Kategorie **Formfaktor** definiert. Diese Kategorie ist dem Objekttyp **Schrank** ebenfalls bereits zugeordnet, wenn i-doit installiert wird. In der Kategorie sollte neben dem Attribut **Höheneinheiten** auch der **Formfaktor** von **19"** angegeben werden.

Les unités de hauteur du rack sont définies dans la catégorie **Facteur de forme**. Cette catégorie est également déjà affectée au type d'objet **Baie** lors de l'installation d'i-doit. Dans la catégorie, il convient d'indiquer, outre l'attribut **Unités de hauteur**, le **Facteur de forme** de **19"**.

[![Schrank-Attribute bearbeiten](../assets/images/de/auswertungen/rack-ansicht/2-ra.png)](../assets/images/de/auswertungen/rack-ansicht/2-ra.png)

[ ![Modifier les attributs de l'armoire](../assets/images/fr/évaluations/rack-view/2-ra.png)](../assets/images/fr/évaluations/rack-view/2-ra.png)

Im Beispiel nimmt das Rack 19"-fähige Komponenten in maximal 42 Höheneinheiten auf.

Dans l'exemple, le rack accueille des composants compatibles 19" dans un maximum de 42 unités de hauteur.

Die auf- oder absteigende **Sortierung der Höheneinheiten** findet wiederum in der Kategorie **Schrank** statt. Dazu wechseln man durch den Button **Editieren** in den Modus zum Bearbeiten. Im Kästchen auf der rechten Seite befindet sich das entsprechende Drop-Down-Menü.

Le **tri croissant ou décroissant des unités de hauteur** s'effectue à nouveau dans la catégorie **Armoire**. Pour cela, il faut passer en mode d'édition en cliquant sur le bouton **Editer**. Le menu déroulant correspondant se trouve dans la case sur le côté droit.

In diesem Kästchen kann zudem angegeben werden, wie viele **vertikale Einschübe** für **vorne** und **hinten** zur Verfügung stehen. Beispielsweise werden darüber seitlich angebrachte PDUs dokumentiert. Im Screenshot sind für **vorne** und **hinten** je 2 **vertikale Einschübe** zu sehen, die abwechselnd links und rechts platziert werden.

Dans cette case, il est également possible d'indiquer combien de **tiroirs verticaux** sont disponibles pour **l'avant** et **l'arrière**. Par exemple, cela permet de documenter les PDU installées sur le côté. Dans la capture d'écran, on voit 2 **tiroirs verticaux** pour **avant** et **arrière**, qui sont placés alternativement à gauche et à droite.

[![Schrank-Attribute bearbeiten](../assets/images/de/auswertungen/rack-ansicht/3-ra.png)](../assets/images/de/auswertungen/rack-ansicht/3-ra.png)

[ ![Modifier les attributs de l'armoire](../assets/images/fr/évaluations/rack-view/3-ra.png)](../assets/images/fr/évaluations/rack-view/3-ra.png)

## Objekte in Schrank positionieren

## Positionner les objets dans l'armoire

Um Racks mit [Objekten](../grundlagen/struktur-it-dokumentation.md) zu befüllen, gelten zwei Voraussetzungen: Zum Einen muss pro Objekt in dessen Kategorie **Formfaktor** angegeben sein, wie viele **Höheneinheiten** es belegt und zusätzlich sollte angegeben werden dass es den **Formfaktor** **19"** hat. Zum Anderen muss in der [Objekttyp-Konfiguration](../grundlagen/benutzerdefinierte-objekttypen.md) der Haken gesetzt sein, dass Objekte diesen Typs **im Schrank positionierbar** sind. Fehlt der Eintrag in der Kategorie **Formfaktor**, nimmt i-doit an, es handelt sich um eine 19"-Komponente mit 1 HE.

Pour remplir les racks avec des [objets](../grundlagen/struktur-it-dokumentation.md), deux conditions sont requises : D'une part, il faut indiquer pour chaque objet dans sa catégorie **Facteur de forme** combien d'unités de hauteur il occupe et il faut également indiquer qu'il a le **Facteur de forme** **19"**. D'autre part, dans la [configuration du type d'objet](../bases/types d'objets définis par l'utilisateur.md), la case doit être cochée pour que les objets de ce type puissent être **positionnés dans l'armoire**. Si l'entrée dans la catégorie **Facteur de forme** manque, i-doit suppose qu'il s'agit d'un composant 19" avec 1 UH.

Die Zuordnung von Objekt zu Rack findet in der Kategorie **Standort** statt, in der physikalische Standorte miteinander in [Beziehung](../grundlagen/objekt-beziehungen.md) gesetzt werden. Zuerst wird im Attribut **Standort** das Rack ausgewählt. Anschließend erscheinen weitere Attribute, die es auszufüllen gilt:

L'affectation d'un objet à un rack se fait dans la catégorie **Site**, dans laquelle les sites physiques sont mis en [relation](../bases/objets-relations.md). Le rack est d'abord sélectionné dans l'attribut **Site**. Ensuite, d'autres attributs apparaissent, qu'il faut remplir :

* **Montage**:<br>
Wird das Objekt **horizontal** ("normaler" Einbau) oder **vertikal** (beispielsweise PDUs an der Seite) eingebaut?
* **Einschub**:<br>
Belegt das Objekt die komplette Tiefe des Racks (**Vorder- und Rückseite**) oder ist es lediglich an der **Vorderseite** oder der **Rückseite** montiert? Bei einseitig montierten Objekten kann dieselbe Höheneinheit doppelt belegt werden, sprich einmal vorne und einmal hinten.
* **Position im Schrank**:<br>
Bei **horizontaler** Montage werden die Höhenheiten ausgewählt. Je nach dem, wie viele HE ein Objekt einnimmt, ändern sich die Angaben im Drop-Down-Menü. Bei **vertikaler** Montage stehen hier die **Slots** (rechts oben = 1, links oben = 2, rechts unten = 3, links unten = 4, usw.). Bereits belegte HEs oder Slots sind ausgeblendet.

* **Montage** :<br>
L'objet est-il installé **horizontalement** (montage "normal") ou **verticalement** (par exemple, PDU sur le côté) ?
* **Insertion**:<br>
L'objet occupe-t-il toute la profondeur du rack (**face avant et arrière**) ou est-il uniquement monté sur la **face avant** ou la **face arrière** ? Pour les objets montés d'un seul côté, la même unité de hauteur peut être occupée deux fois, c'est-à-dire une fois à l'avant et une fois à l'arrière.
* **Position dans l'armoire**:<br>
En cas de montage **horizontal**, les unités de hauteur sont sélectionnées. Les indications du menu déroulant changent en fonction du nombre d'UH qu'occupe un objet. En cas de montage **vertical**, les **slots** se trouvent ici (en haut à droite = 1, en haut à gauche = 2, en bas à droite = 3, en bas à gauche = 4, etc.) Les HE ou les slots déjà occupés sont masqués.

[![Objekte in Schrank positionieren](../assets/images/de/auswertungen/rack-ansicht/4-ra.png)](../assets/images/de/auswertungen/rack-ansicht/4-ra.png)

[ ![Positionner les objets dans l'armoire](../assets/images/fr/évaluations/rack-view/4-ra.png)](../assets/images/fr/évaluations/rack-view/4-ra.png)

Bereits zugeordnete Objekte werden in der **Standortsicht** und in der Kategorie **Räumlich zugeordnete Objekte** angezeigt.

Les objets déjà affectés sont affichés dans la **vue du site** et dans la catégorie **objets affectés à un espace**.

[![Objekte in Schrank positionieren](../assets/images/de/auswertungen/rack-ansicht/5-ra.png)](../assets/images/de/auswertungen/rack-ansicht/5-ra.png)

[ ![Positionner les objets dans le placard](../assets/images/fr/évaluations/rack-view/5-ra.png)](../assets/images/fr/évaluations/rack-view/5-ra.png)

## Zugeordnete Objekte bearbeiten

## Modifier les objets affectés

In der Kategorie **Schrank** gibt es Möglichkeiten, die zugeordneten Objekte zu bearbeiten. Zu jedem Objekt gibt es einen kleinen Button mit Pfeil nach unten. Klickt man auf ihn, erhält man folgende Optionen:

Dans la catégorie **Armoire**, il y a des possibilités d'éditer les objets attribués. Pour chaque objet, il y a un petit bouton avec une flèche vers le bas. Si l'on clique dessus, on obtient les options suivantes :

* **Objektlink**:<br>
Die Übersichtsseite des Objekts wird geöffnet.
* **Objekt neu zuweisen**:<br>
Ein Dialog öffnet sich auf der rechten Seite, um dem man ein Objekt neu positionieren kann (siehe unten).
* **Objekt lösen**:<br>
Die Angabe, an welcher Position im Rack das Objekt montiert ist, wird gelöscht. Das Objekt bleibt weiterhin über die Standortzuweisung dem Rack zugeordnet.

* **Lien de l'objet**:<br>
La page de présentation de l'objet s'ouvre.
* **Réaffecter l'objet**:<br>.
Une boîte de dialogue s'ouvre sur le côté droit, autour de laquelle on peut repositionner un objet (voir ci-dessous).
* **Détacher un objet**:<br>
L'indication de la position dans le rack à laquelle l'objet est monté est supprimée. L'objet reste toujours affecté au rack via l'attribution d'emplacement.

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/6-ra.png)](../assets/images/de/auswertungen/rack-ansicht/6-ra.png)

[ ![Modifier les objets affectés](../assets/images/fr/évaluations/rack-view/6-ra.png)](../assets/images/fr/évaluations/rack-view/6-ra.png)

Objekt, die zwar räumlich dem Rack zugeordnet, aber noch nicht positioniert sind, werden auf der rechten Seite im Kästchen **Unpositionierte Objekte** aufgelistet. Über den Button mit dem Zahnrad können die benötigten HEs des Objekts geändert werden. Über den Button mit dem X wird die Standortzuweisung unwiderruflich gelöscht (**purge**).

Les objets qui sont spatialement affectés au rack, mais qui ne sont pas encore positionnés, sont listés à droite dans la case **Objets non positionnés**. Le bouton avec la roue dentée permet de modifier les HE nécessaires de l'objet. Le bouton avec le X permet de supprimer irrévocablement l'attribution de l'emplacement (**purge**).

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/7-ra.png)](../assets/images/de/auswertungen/rack-ansicht/7-ra.png)

[ ![Modifier les objets affectés](../assets/images/fr/évaluations/rack-view/7-ra.png)](../assets/images/fr/évaluations/rack-view/7-ra.png)

Klickt man auf das Objekt in der Liste, öffnet sich ein weiteres Kästchen darunter. Über die Dialoge kann das Objekt im Rack positioniert werden.

Si l'on clique sur l'objet dans la liste, une autre boîte s'ouvre en dessous. Les boîtes de dialogue permettent de positionner l'objet dans le rack.

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/8-ra.png)](../assets/images/de/auswertungen/rack-ansicht/8-ra.png)

[ ![Modifier les objets affectés](../assets/images/fr/évaluations/rack-view/8-ra.png)](../assets/images/fr/évaluations/rack-view/8-ra.png)

## Statistiken

## statistiques

Die Kategorie Schrank bringt eine vielfältige Auswertung über die zugeordneten Objekte mit. Über der visuellen Ansicht des Racks befindet sich das Kästchen Statistiken, das mit einem Klick auf den Pfeil auf der linken Seite auf- und zugeklappt werden kann.

La catégorie Rack apporte une évaluation variée sur les objets attribués. Au-dessus de la vue visuelle de l'armoire se trouve la case Statistiques, qui peut être ouverte ou fermée en cliquant sur la flèche à gauche.

[![Statistiken](../assets/images/de/auswertungen/rack-ansicht/9-ra.png)](../assets/images/de/auswertungen/rack-ansicht/9-ra.png)

[ ![Statistiques](../assets/images/fr/évaluations/rack-view/9-ra.png)](../assets/images/fr/évaluations/rack-view/9-ra.png)

Die Statistiken setzen sich aus verschiedenen Attributen des Racks und von zugeordneten Objekten zusammen:

Les statistiques se composent de différents attributs du rack et des objets qui lui sont affectés :

| Statistik | Objekte | Kategorien | Attribute |
| --- | --- | --- | --- |
| **Freie Einschübe** | **Rack**<br><br>Räumlich zugeordnete Objekte | **Formfaktor**<br><br>**Standort** | **Höheneinheiten**<br><br>**Montage**, **Einschub**, **Position im Schrank** |
| **Belegte Einschübe** | siehe oben | siehe oben | siehe oben |
| **Freie vertikale Einschübe** | siehe oben | siehe oben | siehe oben |
| **Belegte vertikale Einschübe** | siehe oben | siehe oben | siehe oben |
| **PDU Anschlüsse (Eingang)** | Räumlich zugeordnete Objekte vom Typ **Steckdosenleiste** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **PDU Anschlüsse (Ausgang)** | Räumlich zugeordnete Objekte vom Typ **Steckdosenleiste** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Switch Ports** | Räumlich zugeordnete Objekte vom Typ **Switch** | **Netzwerk → Port** | **Stecker**, **Verbunden mit** |
| **FC-Switch Ports** | Räumlich zugeordnete Objekte vom Typ **FC-Switch** | **Netzwerk → Port** | **Stecker**, **Verbunden mit** |
| **Patch Panel Ports (Eingänge)** | Räumlich zugeordnete Objekte vom Typ **Patchfeld** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Patch Panel Ports (Ausgänge)** | Räumlich zugeordnete Objekte vom Typ **Patchfeld** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Gesamter Stromverbrauch** | Räumlich zugeordnete Objekte | **Stromverbraucher** | **Watt** |
| **Gesamte Wärmeenergie** | Räumlich zugeordnete Objekte | **Stromverbraucher** | **BTU** |

| Statistiques | Objets | Catégories | Attributs |
| --- | --- | --- | --- |
| **Inserts libres** | **Rack**<br><br>Objets affectés spatialement | **Facteur de forme**<br><br>**Emplacement** | **Unités de hauteur**<br><br>Montage**, **Inserts**, **Position dans l'armoire** |
| **Baies occupées** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **Inserts verticaux libres** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **Baies verticales occupées** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **PortsPDU (entrée)** | Objets affectés spatialement de type **Bande de prises** | **Câblage → Ports** | **Entrée/Sortie**, **Type de port**, **Connecté à** |
| **PortsPDU (sortie)** | Objets affectés spatialement de type **Bande de prises** | **Câblage → Ports** | **Entrée/Sortie**, **Type de connexion**, **Connecté à** |
| **Switch Ports** | Objets de type **Switch** affectés à l'espace | **Réseau → Port** | **Connecteur**, **Lié à** |
| **Commutateur FC Ports** | Objets spatiaux de type **Commutateur FC** | **Réseau → Port** | **Connecteur**, **Connecté à** |
| **Ports du panneau de brassage (entrées)** | Objets affectés spatialement de type **Panneau de brassage** | **Câblage → Connecteurs** | **Entrée/Sortie**, **Type de connexion**, **Connecté à** |
| **Ports du panneau de brassage (sorties)** | Objets de type **panneau de brassage** attribués dans l'espace | **Câblage → Connexions** | **Entrée/Sortie**, **Type de connexion**, **Connecté à** |
| **Consommation électrique totale** | Objets affectés à un local | **Consommateur électrique** | **Watts** |
| **Energie thermique totale** | Objets affectés géographiquement | **Consommateur d'électricité** | **BTU** |

## Kategorie Schränke

## Catégorie Armoires

Ist ein Rack einem Raum über die Kategorie Standort zugeordnet, steht eine weitere Visualisierung zur Verfügung. Dem Objekttyp Raum ist in der Standard-Installation von i-doit bereits die Kategorie Schränke zugeordnet. Über diese werden alle dem Raum zugeordneten Objekte vom Typ Schrank visuell dargestellt.

Si un rack est attribué à une pièce via la catégorie Emplacement, une autre visualisation est disponible. Dans l'installation standard d'i-doit, la catégorie Armoires est déjà attribuée au type d'objet Salle. Celle-ci permet de représenter visuellement tous les objets de type armoire affectés à la salle.

[![Kategorie Schränke](../assets/images/de/auswertungen/rack-ansicht/10-ra.png)](../assets/images/de/auswertungen/rack-ansicht/10-ra.png)

[ ![Catégorie Armoires](../assets/images/fr/évaluations/rack-view/10-ra.png)](../assets/images/fr/évaluations/rack-view/10-ra.png)

Oberhalb der Visualisierung bestehen verschiedene Optionen.

Différentes options sont disponibles au-dessus de la visualisation.

* **Schränke neu positionieren**:<br>
Hierüber kann die Reihenfolge der Racks angepasst werden.
* **Alle Schränke aller untergeordneten Standorte laden!**<br>
Tiefer in der Standort-Hierarchie zugeordnete Racks werden ebenfalls geladen. Standardmäßig werden direkt zugeordnete Objekte vom Typ **Schrank** dargestellt. Die Kategorie **Schränke** kann dadurch beispielsweise Objekten vom Typ **Gebäude** zugeordnet werden, in denen sich Räume und erst darunter Racks befinden.
* **Statistiken für alle Schränke laden**:<br>
Die Statistiken (siehe oben) aller Racks werden nacheinander angezeigt.

* **Repositionner les racks** :<br>
Ceci permet d'adapter l'ordre des racks.
* **Charger toutes les armoires de tous les sites subordonnés!**<br>.
Les racks affectés plus bas dans la hiérarchie des sites sont également chargés. Par défaut, les objets directement attribués de type **armoire** sont représentés. La catégorie **Armoires** peut ainsi être attribuée par exemple à des objets de type **Bâtiment**, dans lesquels se trouvent des pièces et seulement en dessous des racks.
* **Charger les statistiques pour toutes les armoires**:<br>
Les statistiques (voir ci-dessus) de tous les racks sont affichées l'une après l'autre.
