<!-- TRANSLATED by md-translate -->
# Dateien hochladen und verknüpfen

# Télécharger et lier des fichiers

Zu einer vollumfänglichen IT-Dokumentation gehören oftmals auch Dokumente in Form Dateien. Ob nun Betriebshandbücher, Notfallpläne, Verträge, Installationsprotokolle oder Treiber: Wichtige Dateien gehören mit [Objekten](../grundlagen/struktur-it-dokumentation.md) in i-doit verknüpft.

Une documentation IT complète comprend souvent des documents sous forme de fichiers. Qu'il s'agisse de manuels d'exploitation, de plans d'urgence, de contrats, de protocoles d'installation ou de pilotes, les fichiers importants doivent être liés à [objets](../bases/structure-it-documentation.md) dans i-doit.

## Dateien sind Objekte

## Les fichiers sont des objets

Jede hochgeladene Datei in i-doit ist automatisch ein Objekt. Das hat den Vorteil, dass man diesen Dateien beliebige [Kategorien und Attribute](../grundlagen/struktur-it-dokumentation.md) zuschreiben und sie mit beliebigen anderen Objekten [verknüpfen](../grundlagen/objekt-beziehungen.md) kann. i-doit bringt in der Standardinstallation bereits passende [Objekttypen](../grundlagen/struktur-it-dokumentation.md) mit:

Chaque fichier téléchargé dans i-doit est automatiquement un objet. Cela présente l'avantage de pouvoir attribuer à ces fichiers n'importe quelles [catégories et attributs](../bases/structure-it-documentation.md) et de les [relier] à n'importe quel autre objet(../bases/relations-objets.md). i-doit inclut déjà dans son installation standard des [types d'objets](../bases/structure-it-documentation.md) adaptés :

* **Dateien** und
* **Notfallplan**.

**Fichiers** et
**Plan d'urgence**.

Diese lassen sich durch weitere [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) erweitern, beispielsweise für Betriebshandbücher.

Ceux-ci peuvent être complétés par d'autres [types d'objets définis par l'utilisateur](../bases/types d'objets définis par l'utilisateur.md), par exemple pour les manuels d'exploitation.

Die eigentliche Funktionalität (hochladen, verknüpfen, etc.) ist im [Kategorie-Ordner](../grundlagen/struktur-it-dokumentation.md) **Dateien** zu finden. Diese besteht aus folgenden Unterkategorien:

La fonctionnalité proprement dite (télécharger, relier, etc.) se trouve dans le [dossier de catégories](../bases/structure-it-documentation.md) **fichiers**. Celui-ci se compose des sous-catégories suivantes :

* **Aktuelle Datei**: Informationen zur hochgeladenen Datei, Download-Möglichkeit und Kategorisierung der Datei
* **Dateiversionen**: Zu jeder Datei können beliebig viele Versionen existieren. Ein erneutes Hochladen der Datei erzeugt eine neue Version.
* **Zugewiesene Objekte**: Mit welchen Objekten ist diese Datei verknüpft? (reine Ansicht ohne Funktion)

* **Fichier actuel** : Informations sur le fichier téléchargé, possibilité de téléchargement et catégorisation du fichier.
**Versions de fichiers** : Pour chaque fichier, il peut exister autant de versions que souhaité. Un nouveau téléchargement du fichier crée une nouvelle version.
**Objets associés** : À quels objets ce fichier est-il associé ? (vue pure sans fonction)

Der Kategorie-Ordner **Dateien** gehört zu den [spezifischen Kategorien](../grundlagen/struktur-it-dokumentation.md), der sich über die [Objekttypkonfiguration](../grundlagen/benutzerdefinierte-objekttypen.md) beliebigen Objekttypen zuordnen lässt.

Le dossier de catégories **Fichiers** fait partie des [catégories spécifiques](../bases/structure-it-documentation.md), qui peut être attribué à n'importe quel type d'objet via la [configuration des types d'objets](../bases/types d'objets définis par l'utilisateur.md).

[![Aktuelle Datei](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)

[ ![Fichier courant](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)

[![Dateiversionen](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)

[ ![Versions du fichier](../assets/images/fr/applicationfaelle/fichiers-téléchargement-et-verknuepfen/2-dhuv.png)](../assets/images/fr/applicationfaelle/fichiers-téléchargement-et-verknuepfen/2-dhuv.png)

[![Dateiversionen](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)

[ ![Versions du fichier](../assets/images/fr/applicationfaelle/fichiers-téléchargement-et-verknuepfen/3-dhuv.png)](../assets/images/fr/applicationfaelle/fichiers-téléchargement-et-verknuepfen/3-dhuv.png)

[![Zugewiesene Objekte](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)

[ ![Objets attribués](../assets/images/fr/applicationfaelle/fichiers-upload-et-verknuepfen/4-dhuv.png)](../assets/images/fr/applicationfaelle/fichiers-upload-et-verknuepfen/4-dhuv.png)

In mehreren [rückwärtigen Kategorien](../grundlagen/struktur-it-dokumentation.md) erfolgt die Verknüpfung zwischen Datei-Objekten und weiteren Objekten:

Dans plusieurs [catégories arrière](../grundlagen/struktur-it-dokumentation.md), le lien entre les objets fichiers et d'autres objets est effectué :

* Dateizuweisung
* Handbuchzuweisung
* Notfallplanzuweisung

* Assignation de fichiers
* attribution de manuel
* attribution de plan d'urgence

Diese [globalen Kategorien](../grundlagen/struktur-it-dokumentation.md) können [beliebigen Objekttypen zugeordnet](../grundlagen/benutzerdefinierte-objekttypen.md) werden und verfolgen ähnliche Funktionen, nämlich Dateien zuweisen.

Ces [catégories globales](../bases/structure-it-documentation.md) peuvent être [assignées à n'importe quel type d'objet](../bases/types-d'objets-définis-par-l'utilisateur.md) et poursuivent des fonctions similaires, à savoir assigner des fichiers.

[![globalen Kategorien](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)

[ ![Catégories globales](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)

## Dateien hochladen und mit Objekten verknüpfen

## Télécharger des fichiers et les associer à des objets

Eine neue Datei kann über zwei Wege hochgeladen werden: Entweder erstellt man ein neues Objekt vom Typ **Dateien** und lädt anschließend in der Kategorie **Dateiversionen** die Datei hoch. Oder man geht den Weg über das Objekt, das mit der Datei verknüpft werden soll: Hierbei nutzt man die Kategorie **Dateizuweisung**.

Un nouveau fichier peut être téléchargé de deux manières : Soit on crée un nouvel objet de type **Fichiers** et on télécharge ensuite le fichier dans la catégorie **Versions de fichiers**. Soit on passe par l'objet qui doit être lié au fichier : On utilise dans ce cas la catégorie **Affectation de fichier**.

Für Dateien, die über die Kategorie Dateizuweisung hochgeladen werden, legt i-doit automatisch je ein Objekt an. Das spart einige Klicks.

Pour les fichiers téléchargés via la catégorie Attribution de fichiers, i-doit crée automatiquement un objet pour chacun. Cela permet d'économiser quelques clics.

Das Attribut **Datei-Zuordnung (Objekt)** ist dabei recht flexibel:

L'attribut **Attribution de fichier (objet)** est assez flexible à cet égard :

* Per Drag'n'Drop kann eine Datei vom Desktop & Co. in das Attributfeld hineingezogen werden.
* Per Autovervollständigung können bereits hochgeladene Dateien zugeordnet werden.
* Über das Lupen-Icon öffnet sich der **Datei-Browser**, über den die Datei hochgeladen und ausgewählt wird.

* Un fichier peut être glissé dans le champ d'attributs à partir du bureau et autres.
* Les fichiers déjà téléchargés peuvent être attribués par autocomplétion.
* L'icône de la loupe permet d'ouvrir le **navigateur de fichiers** à partir duquel le fichier est téléchargé et sélectionné.

[![Datei-Zuordnung](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)

[ ![Association de fichiers](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)

Der **Datei-Browser** listet alle verfügbaren Dateien auf. Diese lassen sich über das Attribut **Kategorie** einordnen, sodass eine bessere Übersicht gewährleistet ist.

Le **Navigateur de fichiers** répertorie tous les fichiers disponibles. Ceux-ci peuvent être classés à l'aide de l'attribut **Catégorie**, ce qui garantit une meilleure vue d'ensemble.

[![Datei-Browser](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)

[ ![File Browser](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)](../assets/images/fr/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)

## Dateien in benutzerdefinierten Kategorien verknüpfen

## Associer des fichiers dans des catégories personnalisées

Um eine Datei mit einem Objekt zu verknüpfen, ist man nicht auf die Standard-Kategorien von i-doit angewiesen. In einer [benutzerdefinierten Kategorie](../grundlagen/benutzerdefinierte-kategorien.md) kann man Attribute vom Feldtyp **Datei Browser** hinzufügen.

Pour associer un fichier à un objet, on n'est pas obligé d'utiliser les catégories standard d'i-doit. Dans une [catégorie personnalisée](../bases/catégories-personnalisées.md), on peut ajouter des attributs du type de champ **Fichier Navigateur**.

!!! success "Dokumente-Modul"

! !! success "Module de documents

```
Wer Betriebshandbücher, Notfallpläne & Co. direkt aus der IT-Dokumentation generieren möchte, sollte den Einsatz des [Dokumente-Moduls](../i-doit-pro-add-ons/documents/index.md) für i-doit in Betracht ziehen. Hierüber lassen sich umfangreiche Textdokumente mit [Attributen](../grundlagen/struktur-it-dokumentation.md), Bildern und [Reports](../auswertungen/report-manager.md) aus i-doit anreichern.
```