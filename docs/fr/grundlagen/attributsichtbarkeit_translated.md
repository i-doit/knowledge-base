<!-- TRANSLATED by md-translate -->
# Attributsichtbarkeit

# Visibilité des attributs

Die Sichtbarkeit von [Attributen](attributfelder.md) wird unter [Datenansicht](../administration/verwaltung/datenansicht/index.md) konfiguriert werden.

La visibilité des [attributs](attributfelder.md) est configurée sous [vue des données](../administration/gestion/vue des données/index.md).

Es ist damit möglich bestimmte Attribute in [Kategorien](kategorien-und-attribute.md) oder/und auf der [Übersichtsseite von Objekttypen](objekttypen.md) auszublenden.

Il est ainsi possible de masquer certains attributs dans [catégories](catégories-et-attributs.md) ou/et sur la [page d'aperçu des types d'objets](typesd'objets.md).

Die konfigurierte Sichtbarkeit wird für alle Benutzer übernommen.

La visibilité configurée est reprise pour tous les utilisateurs.

[![Attributsichtbarkeit](../assets/images/de/grundlagen/attributsichtbarkeit/1-as.png)](../assets/images/de/grundlagen/attributsichtbarkeit/1-as.png)

[ ![Visibilité des attributs](../assets/images/fr/bases/visibilité des attributs/1-as.png)](../assets/images/fr/bases/visibilité des attributs/1-as.png)

## Rechte setzen

## Définir les droits

[Die Rechte](../administration/verwaltung/berechtigungen.md) zur Ansicht und zum Bearbeiten der Attributsichtbarkeit kann pro Benutzer(-gruppe) vergeben werden. So ist es beispielsweise möglich und oft auch ratsam, dass nur bestimmte Benutzergruppen Attribute ausblenden können.

[Les droits](../administration/administration/permissions.md) d'affichage et de modification de la visibilité des attributs peuvent être attribués par utilisateur (groupe d'utilisateurs). Il est par exemple possible, et souvent conseillé, que seuls certains groupes d'utilisateurs puissent masquer des attributs.

[![rechte-setzen](../assets/images/de/grundlagen/attributsichtbarkeit/2-as.png)](../assets/images/de/grundlagen/attributsichtbarkeit/2-as.png)

[ ![placer-droit](../assets/images/fr/bases/visibilité des attributs/2-as.png)](../assets/images/fr/bases/visibilité des attributs/2-as.png)

## Verwendung

## Utilisation

Wenn die Attributsichtbarkeit im Editiermodus geöffnet wird, können alle Kategorien (global, spezifisch und benutzerdefiniert) über ein Dropdown-Feld am oberen Rand ausgewählt werden. Neben diesem Drop-Down-Feld befindet sich die Schaltfläche "Konfiguration hinzufügen.

Lorsque la visibilité des attributs est ouverte en mode d'édition, toutes les catégories (globale, spécifique et personnalisée) peuvent être sélectionnées via un champ déroulant en haut. À côté de ce champ déroulant se trouve le bouton "Ajouter une configuration.

Wenn diese Schaltfläche verwendet wird, wird die Kategorie als Block in die aktuelle Schnittstelle geladen

Lorsque ce bouton est utilisé, la catégorie est chargée en bloc dans l'interface actuelle.

Dieser Block enthält eine Liste aller Attribute, die in der Kategorie verwendet werden. In der Kopfzeile dieses Blocks befinden sich Namen für Spalten: "Kategorie Bezeichnung", "Sichtbarkeit" und "Übersichtsseite".

Ce bloc contient une liste de tous les attributs utilisés dans la catégorie. Dans l'en-tête de ce bloc se trouvent les noms des colonnes : "Catégorie Désignation", "Visibilité" et "Page de présentation".

Neben dem Namen der Kategorie befindet sich ein Dreieck, das nach unten im geöffnetem Zustand und nach rechts im geschlossenem Zustand zeigt , um den Block zu verdecken/zu verkleinern, so dass nur die Kopfzeile sichtbar bleibt.

À côté du nom de la catégorie se trouve un triangle qui pointe vers le bas lorsqu'il est ouvert et vers la droite lorsqu'il est fermé, pour masquer/réduire le bloc afin que seul l'en-tête reste visible.

Ganz rechts in jedem Block befindet sich ein rotes X-Symbol , mit dem Sie die Konfiguration für diese Kategorie entfernen können. Wenn es verwendet wird, wird der Block entfernt.

Tout à droite de chaque bloc se trouve un symbole X rouge qui permet de supprimer la configuration de cette catégorie. S'il est utilisé, le bloc est supprimé.

Standardmäßig ist die Sichtbarkeit für alle Attribute aktiviert "Angezeigt" [![button-angezeigt](../assets/images/de/grundlagen/attributsichtbarkeit/3-as.png)](../assets/images/de/grundlagen/attributsichtbarkeit/3-as.png). In diesem Zustand ist die Schaltfläche grün und mit "Angezeigt"  beschriftet. Wenn Sie darauf klicken, wird die Schaltfläche grau und mit "Ausgeblendet" [![button-ausgeblendet](../assets/images/de/grundlagen/attributsichtbarkeit/4-as.png)](../assets/images/de/grundlagen/attributsichtbarkeit/4-as.png) beschriftet.

Par défaut, la visibilité est activée pour tous les attributs "Affiché" [ ![bouton-affiché](../assets/images/fr/bases/visibilité des attributs/3-as.png)](../assets/images/fr/bases/visibilité des attributs/3-as.png). Dans cet état, le bouton est vert et porte la mention "Affiché". Lorsque vous cliquez dessus, le bouton devient gris et est étiqueté "Caché" [ ![bouton-caché](../assets/images/fr/bases/visibilité des attributs/4-as.png)](../assets/images/fr/bases/visibilité des attributs/4-as.png).

**Objekt Bezeichnung**, **Zustand** und **CMDB-Status** können **nicht** ausgeblendet werden. In den entsprechenden Spalten steht ein Hinweis "Kann nicht ausgeblendet werden".

**La désignation de l'objet**, **l'état** et **le statut de la CMDB** ne peuvent **pas être masqués**. Les colonnes correspondantes contiennent une remarque "Ne peut pas être masqué".

Wenn ein Attribut ausgeblendet ist, wird es in der Kategorie für alle Objekte (aller Objekttypen) nicht mehr angezeigt. Außerdem wird die Option zum ausblenden auf der Übersichtsseite automatisch deaktiviert.

Lorsqu'un attribut est masqué, il n'apparaît plus dans la catégorie pour tous les objets (de tous les types d'objets). De plus, l'option de masquage est automatiquement désactivée sur la page d'aperçu.

Wenn ein Attribut ausgeblendet werden soll aber über die Validierungseinstellungen als Pflichtfeld definiert ist, erhält der Benutzer eine Information (Popup), wenn er auf die Schaltfläche "Speichern" klickt:

Si un attribut doit être masqué mais est défini comme obligatoire via les paramètres de validation, l'utilisateur reçoit une information (popup) lorsqu'il clique sur le bouton "Enregistrer" :

!!! popup "Popup"
    _Die folgenden Attribute wurden zuvor als Pflichtfelder definiert:_
    [LISTE ALLER BETROFFENEN ATTRIBUTE]
    _Wenn Sie diese auf der Oberfläche verbergen wird die Pflichtfelddefinition für sie aufgehoben. Möchten Sie fortfahren?_

! !! popup "Popup"
    _Les attributs suivants ont été préalablement définis comme obligatoires:__.
    [LISTE DE TOUS LES ATTRIBUTS CONCERNÉS]
    _Si vous les cachez dans l'interface, la définition de champ obligatoire est annulée pour eux. Voulez-vous continuer ?

Durch eine Ja/Nein-Auswahl wird diese Änderung bestätigt oder verworfen.

Une sélection Oui/Non permet de confirmer ou d'infirmer cette modification.

Die letzte Spalte erlaubt es, die ausgewählten Attribute nur auf Übersichtsseiten auszublenden, in den regulären Kategorien werden diese Attribute jedoch weiterhin angezeigt. Wenn ein Attribut in der Kategorie bereits ausgeblendet ist, ist die Auswahl hier deaktiviert.

La dernière colonne permet de masquer les attributs sélectionnés uniquement sur les pages d'aperçu, mais ces attributs restent affichés dans les catégories régulières. Si un attribut est déjà masqué dans la catégorie, la sélection est désactivée ici.

[![attributsichtbarkeit-2](../assets/images/de/grundlagen/attributsichtbarkeit/5-as.png)](../assets/images/de/grundlagen/attributsichtbarkeit/5-as.png)

[ ![visibilité des attributs-2](../assets/images/fr/bases/visibilité des attributs/5-as.png)](../assets/images/fr/bases/visibilité des attributs/5-as.png)