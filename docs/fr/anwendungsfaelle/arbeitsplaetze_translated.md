<!-- TRANSLATED by md-translate -->
# Arbeitsplätze

# Postes de travail

In i-doit können IT-Arbeitsplätze dokumentiert werden. Auf diese Weise hat man jederzeit im Blick, welcher Mitarbeiter über welche IT-Komponenten verfügt und wo sie zu finden sind.

Les postes de travail informatiques peuvent être documentés dans i-doit. De cette manière, on sait à tout moment quel collaborateur dispose de quels composants informatiques et où ils se trouvent.

## Personen und deren Arbeitsplätze

## Personnes et leurs postes de travail

Neben der physikalischen Zuordnung von [Objekten](../grundlagen/struktur-it-dokumentation.md) zu [Standorten](../anwendungsfaelle/standorte.md), können Arbeitsplätze als logisches Konstrukt dokumentiert werden. An zentraler Stelle steht der [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Arbeitsplatz**.

Outre l'attribution physique de [objets](../grundlagen/struktur-it-dokumentation.md) à [sites](../anwendungsfaelle/standorte.md), les postes de travail peuvent être documentés en tant que construction logique. Le [type d'objet](../grundlagen/struktur-it-dokumentation.md) **poste de travail** occupe une place centrale.

[![Arbeitsplätze](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)

[ ![Postes de travail](../assets/images/fr/applications/place de travail/1-ap.png)](../assets/images/fr/applications/place de travail/1-ap.png)

Ein Objekt diesen Typs wird über die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Logischer Standort** einer Person zugeordnet.

Un objet de ce type est attribué à une personne via la [catégorie](../bases/structure-it-documentation.md) **Situation logique**.

[![Kategorie](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)

[ ![Catégorie](../assets/images/fr/applications/travaux/2-ap.png)](../assets/images/fr/applications/travaux/2-ap.png)

Umgekehrt wird über das **Personen**-Objekt in der Kategorie **Zugewiesene Arbeitsplätze** diese Person einem oder auch weiteren Arbeitsplätzen zugeordnet.

Inversement, l'objet **Personnes** dans la catégorie **Travaux attribués** permet d'attribuer cette personne à un ou plusieurs autres postes de travail.

[![Zugewiesener-Arbeitsplatz](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)

[ ![Poste de travail assigné](../assets/images/fr/applications/travail/3-ap.png)](../assets/images/fr/applications/travail/3-ap.png)

## IT-Komponenten am Arbeitsplatz

## Composants informatiques sur le lieu de travail

Die Zuordnung von beliebigen (IT-)Komponenten zu einem Arbeitsplatz geschieht innerhalb des **Arbeitsplatz**-Objekts in der Kategorie **Zugewiesene Endgeräte**.

L'attribution de n'importe quel composant (informatique) à un poste de travail se fait au sein de l'objet **Poste de travail** dans la catégorie **Terminaux attribués**.

[![Zugewiesenes-Endgeräte](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)

[ ![Terminaux attribués](../assets/images/fr/applications/travail/4-ap.png)](../assets/images/fr/applications/travail/4-ap.png)

Ein Endgerät kann stets nur einem Arbeitsplatz zugeordnet werden. Welcher Arbeitsplatz das ist, kann innerhalb des Endgerät-Objekts in der Kategorie **Zugewiesener Arbeitsplatz** recherchiert werden.

Un terminal ne peut être attribué qu'à un seul poste de travail. Il est possible de rechercher de quel poste de travail il s'agit à l'intérieur de l'objet terminal dans la catégorie **Poste de travail attribué**.

[![Zugewiesner-Arbeitsplatz](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)

[ ![Poste de travail assigné](../assets/images/fr/applications/place de travail/5-ap.png)](../assets/images/fr/applications/place de travail/5-ap.png)

## Standort eines Arbeitsplatzes

## Emplacement d'un poste de travail

Zu guter Letzt kann ein Arbeitsplatz ebenfalls physikalisch verortet werden, beispielsweise in einem Büroraum. Mit dem Add-on [**Raumplan**](../i-doit-pro-add-ons/floorplan.md) kann dieser Raum anschließend visualisiert werden.

Enfin, un poste de travail peut également être localisé physiquement, par exemple dans une pièce de bureau. Avec le module complémentaire [**plan de salle**](../i-doit-pro-add-ons/floorplan.md), cette salle peut ensuite être visualisée.

[![Raumplan](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)

[ ![Plan de la salle](../assets/images/fr/applications/travail/6-ap.png)](../assets/images/fr/applications/travail/6-ap.png)

## Umzug eines Arbeitsplatzes

## Déménagement d'un lieu de travail

Sollte eine Person intern den Platz wechseln, kann diese inklusive Arbeitsplatz und ausgewählten Endgeräten umziehen. Eine komfortable Funktion bietet das Add-on **[Relocate-CI](../i-doit-pro-add-ons/relocate-ci.md)**.

Si une personne change de place en interne, elle peut déménager, y compris le poste de travail et les terminaux sélectionnés. Le module complémentaire **[Relocate-CI](../i-doit-pro-add-ons/relocate-ci.md)** offre une fonction confortable.