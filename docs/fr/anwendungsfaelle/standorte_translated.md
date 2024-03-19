<!-- TRANSLATED by md-translate -->
# Standorte

# Emplacements

Die Verortung von Hardware & Co. ist ein essentieller Bestandteil von i-doit. In diesem Artikel wird erklärt, wie man Standorte dokumentiert und [Objekte](../grundlagen/struktur-it-dokumentation.md) dort platziert.

La localisation de matériel informatique & Co. est une partie essentielle d'i-doit. Cet article explique comment documenter les emplacements et y placer [objets](../bases/structure-it-documentation.md).

## Übersicht

## Aperçu

i-doit verfügt bereits in der Standard-Installation über passende [Objekttypen](../grundlagen/struktur-it-dokumentation.md), die für die Dokumentation von Standorten genutzt (oder ausgeblendet) werden können:

i-doit dispose déjà dans l'installation standard de [types d'objets](../grundlagen/struktur-it-dokumentation.md) appropriés qui peuvent être utilisés (ou masqués) pour la documentation des sites :

* **Land**
* **Stadt**
* **Gebäude**
* **Raum**
* **Schrank**

* **Pays**
* **Ville**
* **Bâtiment**
* **pièce**
* **armoire**

Neben diesen Objekttypen gibt es pro Objekt [Kategorien](../grundlagen/struktur-it-dokumentation.md), in denen die Verortung hinterlegt wird:

Outre ces types d'objets, il existe pour chaque objet des [catégories](../bases/structure-it-documentation.md) dans lesquelles la localisation est enregistrée :

* **Standort**: Angabe für das physikalisch übergeordnete Objekt
* **Räumlich zugeordnete Objekte**: Liste von physikalisch untergeordneten Objekten

* **Lieu** : Indication pour l'objet physique supérieur
* **Objets spatialement affectés** : liste des objets physiquement subordonnés

Standorte werden in einer Baumstruktur dokumentiert. Dadurch wird verhindert, dass Objekte räumlich mehrmals verortet werden können, was physikalisch nicht möglich ist.

Les emplacements sont documentés dans une structure arborescente. Cela permet d'éviter que des objets soient localisés plusieurs fois dans l'espace, ce qui n'est physiquement pas possible.

## Standort-Pfad aufbauen

## Construire le chemin d'accès au site

An oberster Stelle steht das Objekt **Root-Lokation**, dem alle anderen Standorte untergeordnet werden. Dieses Objekt kann nicht gelöscht werden.

En haut de la liste se trouve l'objet **Root-Location**, auquel tous les autres sites sont subordonnés. Cet objet ne peut pas être supprimé.

Als Beispiel dient ein Drucker, der in einem Büroraum steht, der wiederum einem Gebäude zugeordnet ist:

L'exemple est celui d'une imprimante placée dans un bureau, lui-même rattaché à un bâtiment :

1. Erstelle ein Gebäude und ordne dieses über die **Standort**-Kategorie der **Root-Lokation** zu.
2. Erstelle einen Raum und ordne diesen über die **Standort**-Kategorie dem Gebäude zu.
3. Erstelle einen Drucker und ordne diesen über die **Standort**-Kategorie dem Raum zu.

Créez un bâtiment et associez-le à la **localisation racine** via la catégorie **localisation**.
2. créer une salle et l'attribuer au bâtiment via la catégorie **emplacement**.
3. créer une imprimante et l'attribuer à la salle via la catégorie **emplacement**.

Dadurch entsteht ein sogenannter Standortpfad: **Root-Lokation → Gebäude → Raum → Drucker**.

Il en résulte ce que l'on appelle un chemin de localisation : **Lieu racine → Bâtiment → Salle → Imprimante**.

[![Standort-Pfad](../assets/images/de/anwendungsfaelle/standorte/1-stan.png)](../assets/images/de/anwendungsfaelle/standorte/1-stan.png)

[ ![Chemin d'accès au site](../assets/images/fr/applicationfaelle/standorte/1-stan.png)](../assets/images/fr/applicationfaelle/standorte/1-stan.png)

Bei jedem Standort-Objekt wird das jeweils untergeordnete Objekt in der Kategorie **Räumlich zugeordnete Objekte** angezeigt. Eine Bearbeitung des Standortpfads ist auch über diese Kategorie möglich.

Pour chaque objet de localisation, l'objet subordonné correspondant est affiché dans la catégorie **Objets spatialement affectés**. Il est également possible de modifier le chemin d'accès au site via cette catégorie.

[![Standort-Pfad](../assets/images/de/anwendungsfaelle/standorte/2-stan.png)](../assets/images/de/anwendungsfaelle/standorte/2-stan.png)

[ ![Chemin d'accès au site](../assets/images/fr/applicationfaelle/standorte/2-stan.png)](../assets/images/fr/applicationfaelle/standorte/2-stan.png)

## Objekt als Standort definieren

## Définir l'objet comme site

Damit ein Objekt - beispielsweise ein Raum - als Standort für andere Objekte definiert werden kann, muss dessen Objekttyp dazu aktiviert werden. Dies geschieht unter **Verwaltung → Datenstruktur → Objekttypen → [Objekttyp Gruppe] → [Objekttyp] → Standort**. Bei den oben angegebenen Objekttypen steht die Option bereits auf **Ja**.

Pour qu'un objet - par exemple une pièce - puisse être défini comme emplacement pour d'autres objets, son type d'objet doit être activé à cet effet. Cela se fait sous **Administration → Structure de données → Types d'objets → [Type d'objet groupe] → [Type d'objet] → Emplacement**. Pour les types d'objets indiqués ci-dessus, l'option est déjà sur **Oui**.

## Standort-Pfad konfigurieren

## Configurer le chemin d'accès au site

Der Standortpfad kann unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name]** konfiguriert werden.

Le chemin d'accès au site peut être configuré sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant]**.

| Option | Datentyp | Standardwert | Beschreibung |
| --- | --- | --- | --- |
| **Oberflächendarstellung → String zur Separation von Standorten** | Zeichenkette | **>** | Durch welche Zeichenfolge sollen die Objekte eines Standortpfads voneinander separiert werden? |
| **Maximallänge von Zeichenfolgen → Objektbezeichnung im Standortpfad** | Positive Ganzzahl | **16** | Wie viele Zeichen darf der Objekt-Titel pro Objekt innerhalb eines Standortpfads haben? Zeichen darüber hinaus werden abgeschnitten. |
| **Maximallänge von Zeichenfolgen → Kompletter Standortpfad** | Positive Ganzzahl | **40** | Wie viele Zeichen darf der vollständige Standortpfad haben? Länge Zeichenketten werden beschnitten. |
| **Display Limits -> Limit der Tiefe des Standortpfades** | Positive Ganzzahl | **5** | Wie viele Standorte im Standortpfad angezeigt werden sollen |
| **Oberflächendarstellung → Orientierung des Standortpfades** | Dropdown | Linksbündig (default)<br>Rechtsbündig |

| option | type de données | valeur par défaut | description |
| --- | --- | --- | --- |
| **Représentation de l'interface → Chaîne de séparation des sites** | Chaîne de caractères | **>** | Par quelle chaîne de caractères les objets d'un chemin de site doivent-ils être séparés les uns des autres ? |
| **Longueur maximale des chaînes de caractères → Titre de l'objet dans le chemin de site** | Entier positif | **16** | Combien de caractères le titre de l'objet peut-il avoir par objet dans un chemin de site ? Les caractères au-delà de ce nombre sont tronqués. |
| **Longueur maximale des chaînes de caractères → Chemin complet de localisation** | Entier positif | **40** | Combien de caractères le chemin complet de localisation peut-il comporter ? Longueur Les chaînes de caractères sont tronquées. |
| Entier positif | **5** | Combien de sites doivent être affichés dans le chemin d'accès au site |
| **Représentation de l'interface → Orientation du chemin du site** | Dropdown | Alignement à gauche (par défaut)<br>Alignement à droite |

## Hardware in Rack positionieren

## Positionner le matériel dans le rack

Serverschränke können ebenfalls als Standorte verwendet werden, [um Hardware dort zu positionieren](../auswertungen/rack-ansicht.md).

Les armoires de serveurs peuvent également être utilisées comme emplacements [pour y positionner du matériel](../évaluations/rack-view.md).

## Chassis

## Châssis

Um Chassis mit entsprechenden Modulen auszustatten, wird ein ähnlicher Mechanismus verwendet. Dieses Feature steht in den Objekttypen

Pour équiper les châssis de modules correspondants, un mécanisme similaire est utilisé. Cette fonctionnalité est disponible dans les types d'objets

* **Blade Chassis** und **Blade Server** sowie
* **Switch Chassis** und **Switch** (als Modul)

**Blade Chassis** et **Blade Server** ainsi que
**Switch Chassis** et **Switch** (comme module)

bereit. Die eigentliche Dokumentation findet im Kategorie-Ordner **Chassis** statt. Durch die Zuordnung eines Moduls in der Kategorie **Chassis → Zugewiesene Geräte** wird ebenfalls eine Standort-Beziehung erstellt.

est prêt. La documentation proprement dite se trouve dans le dossier de catégorie **Chassis**. En attribuant un module dans la catégorie **Chassis → Appareils attribués**, une relation de site est également créée.

## Geo-Koordinaten

## Coordonnées géographiques

In der Kategorie **Standort** können [Geo-Koordinaten mit Längen- und Breitengrad](./geo-koordinaten.md) hinterlegt werden. Dadurch werden Links zu bekannten Kartendiensten erstellt, auf deren Karte das Objekt verortet wird.

Dans la catégorie **Lieu**, il est possible d'enregistrer des [coordonnées géographiques avec latitude et longitude](./geo-coordonnées.md). Cela permet de créer des liens vers des services de cartographie connus, sur la carte desquels l'objet est localisé.

## Standortansicht

## Vue du site

Die Navigation durch alle Standortpfade ist innerhalb der linken Navigationsleiste unter **Standortsicht** möglich. Die Baumstruktur kann auf- und zugeklappt werden. Ein im Haupt-Inhaltsbereich geöffnetes Objekt wird in der **Standortansicht** hervorgehoben.

La navigation à travers tous les chemins de site est possible dans la barre de navigation de gauche sous **Vue du site**. L'arborescence peut être développée et réduite. Un objet ouvert dans la zone de contenu principale est mis en évidence dans la **Vue du site**.

[![Standortsicht](../assets/images/de/anwendungsfaelle/standorte/3-stan.png)](../assets/images/de/anwendungsfaelle/standorte/3-stan.png)

[ ![Vue du site](../assets/images/fr/applications-sites/3-stan.png)](../assets/images/fr/applications-sites/3-stan.png)

## Logische Standorte

## Emplacements logiques

Ein dokumentierter Arbeitsplatz erhält eine Person als logischen Standort. Zudem können Arbeitsplätze physikalischen Standorten zugeordnet werden. Die **Standortsicht** (siehe oben) kann entweder physikalische oder logische Standorte oder eine Kombination aus beiden darstellen. Diese Option ist [benutzerdefiniert](../benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen.md).

Un poste de travail documenté se voit attribuer une personne comme emplacement logique. En outre, les postes de travail peuvent être attribués à des emplacements physiques. La vue **Site** (voir ci-dessus) peut représenter soit des sites physiques, soit des sites logiques, soit une combinaison des deux. Cette option est [définie par l'utilisateur](../authentification-et-gestion-des-utilisateurs/authentification-intégrée/créer-un-utilisateur-local.md).

## Raumplan

## Plan de la salle

Das Add-on [Raumplan](../i-doit-pro-add-ons/floorplan.md) eignet sich dazu, auf Basis der Standortpfade zweidimensionale Pläne zu erstellen.

Le module complémentaire [Raumplan](../i-doit-pro-add-ons/floorplan.md) convient pour créer des plans bidimensionnels sur la base des chemins d'accès aux sites.

## Benutzerrechte auf Standorte

## Droits d'utilisateur sur les sites

Für jeden Benutzer bzw. jede Gruppe von Benutzern können Lese-, Schreib- und viele weitere [Rechte auf Standorte und darunter liegende Objekte](./standort-basierte-benutzerrechte.md) vergeben werden.

Pour chaque utilisateur ou groupe d'utilisateurs, il est possible d'attribuer des droits de lecture, d'écriture et bien d'autres [droits sur les sites et les objets sous-jacents](./droits-utilisateur-sur-site.md).