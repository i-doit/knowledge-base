<!-- TRANSLATED by md-translate -->
# Dialog-Admin

# Dialogue Admin

In _i-doit_ kommt oftmals das [Attributfeld](../glossar.md#Glossar-Attributfeld) **Dialog+** zum Einsatz, ein Dropdown-Feld, dessen Werte sich bearbeiten lassen. Diese Felder verteilen sich auf viele [Kategorien](../glossar.md) in der [IT-Dokumentation](../glossar.md) oder andere Features von _i-doit_. Die zentrale Administration der Werte findet über den **Dialog-Admin** in der **Verwaltung** statt.

Dans _i-doit_, on utilise souvent le [champ d'attribut](../glossar.md#champ d'attribut du glossaire) **Dialog+**, un champ déroulant dont les valeurs peuvent être modifiées. Ces champs sont répartis dans de nombreuses [catégories](../glossar.md) de la [documentation informatique](../glossar.md) ou dans d'autres fonctionnalités de _i-doit_. L'administration centrale des valeurs se fait via le **Dialog-Admin** dans la **Gestion**.

## Übersicht

## Aperçu

Eine Übersicht über alle [Attribute](../glossar.md) vom Feldtyp **Dialog+** ist unter **Verwaltung → Vordefinierte Inhalte → Dialog-Admin** zu finden. Im linken Navigationsbaum sind diese alphabetisch nach den zugehörigen Kategorien sortiert. Wenn eine [benutzerdefinierte Kategorie](benutzerdefinierte-kategorien.md) mit einem Attribut vom Feldtyp **Dialog+** angelegt ist, erscheint dieses Attribut mit der zugehörigen Kategorie ebenfalls im Navigationsbaum unter **Benutzerdefinierte Dialog+**.

Un aperçu de tous les [Attributs](../glossaire.md) du type de champ **Dialogue+** se trouve sous **Administration → Contenus prédéfinis → Dialogue-Admin**. Dans l'arborescence de navigation de gauche, ils sont classés par ordre alphabétique en fonction des catégories auxquelles ils appartiennent. Si une [catégorie définie par l'utilisateur](catégories-personnalisées.md) est créée avec un attribut du type de champ **Dialog+**, cet attribut et la catégorie correspondante apparaissent également dans l'arbre de navigation sous **Dialogue défini par l'utilisateur+**.

[![benutzerdefinierte-dialog+](../assets/images/de/grundlagen/dialog-admin/1-da.png)](../assets/images/de/grundlagen/dialog-admin/1-da.png)

[ ![dialogue-personnalisé+](../assets/images/fr/bases/dialog-admin/1-da.png)](../assets/images/fr/bases/dialog-admin/1-da.png)

## Werte anzeigen

## Afficher les valeurs

Klickt man im linken Navigationsbaum innerhalb des Bereichs **Dialog-Admin** auf ein Attribut, wird im Hauptbereich eine Übersicht der bisher dokumentierten Werte (falls vorhanden) geladen.

Si l'on clique sur un attribut dans l'arborescence de navigation de gauche au sein du domaine **Dialogue-Admin**, un aperçu des valeurs documentées jusqu'à présent (si elles existent) est chargé dans la zone principale.

[![werte-anzeigen](../assets/images/de/grundlagen/dialog-admin/2-da.png)](../assets/images/de/grundlagen/dialog-admin/2-da.png)

[ ![valeurs-annonces](../assets/images/fr/bases/dialog-admin/2-da.png)](../assets/images/fr/bases/dialog-admin/2-da.png)

## Werte anlegen

## Créer des valeurs

Um einen neuen Wert anzulegen klickt man oberhalb der Übersicht auf den Button **Neu**. Es öffnet sich ein Formularfeld, das ausgefüllt werden kann:

Pour créer une nouvelle valeur, il faut cliquer sur le bouton **Nouveau** au-dessus de l'aperçu. Un champ de formulaire s'ouvre alors et peut être rempli :

* **ID**:<br> Jeder Wert in einem **Dialog+**-Attribut erhält von _i-doit_ einen eindeutigen Identifier. Dieser ist beispielsweise beim Umgang mit der [API](../i-doit-pro-add-ons/api/index.md) hilfreich.
* **Bezeichnung**:<br> Hier wird der Wert angegeben, der in der Web GUI von _i-doit_ angezeigt werden soll, wenn man das **Dialog+**-Attribut betrachtet oder editiert.
* **Konstante**:<br> Neben einem eindeutigen Identifier kann ein Wert eine eindeutige Konstante erhalten. Im Gegensatz zum Identifier besteht dieser in der Regel aus einem aussagekräftigen String, der bei der Verwendung der API sehr hilfreich sein kann.
* **Status**:<br> Jeder Wert kann einen Zustand einnehmen. Um ihn bei der Dokumentation zu verwenden, sollte der Zustand Normal (2) gewählt werden.

* **ID**:<br> Chaque valeur dans un attribut **Dialog+** reçoit de _i-doit_ un identifiant unique. Celui-ci est par exemple utile lors de l'utilisation de l'[API](../i-doit-pro-add-ons/api/index.md).
* **Désignation**:<br> On indique ici la valeur qui doit être affichée dans la Web GUI de _i-doit_ lorsqu'on regarde ou édite l'attribut **Dialog+**.
* **Constante**:<br> Outre un identifiant unique, une valeur peut recevoir une constante unique. Contrairement à l'identifiant, celle-ci se compose généralement d'une chaîne de caractères significative qui peut s'avérer très utile lors de l'utilisation de l'API.
* **Status**:<br> Chaque valeur peut prendre un état. Pour l'utiliser dans la documentation, il convient de choisir l'état Normal (2).

Gespeichert wird der Wert, wie gewohnt, über den Button **Speichern**.

La valeur est enregistrée, comme d'habitude, en cliquant sur le bouton **Enregistrer**.

[![werte-anlegen](../assets/images/de/grundlagen/dialog-admin/3-da.png)](../assets/images/de/grundlagen/dialog-admin/3-da.png)

[ ![création de valeurs](../assets/images/fr/bases/dialog-admin/3-da.png)](../assets/images/fr/bases/dialog-admin/3-da.png)

## Werte bearbeiten

## Modifier les valeurs

Zum Bearbeiten der Attributs klickt man in der Übersicht auf den Wert, der bearbeitet werden soll. Das Formular entspricht der oben erklärten Oberfläche zum Anlegen eines neuen Wertes.

Pour modifier un attribut, il suffit de cliquer sur la valeur à modifier dans l'aperçu. Le formulaire correspond à l'interface expliquée ci-dessus pour créer une nouvelle valeur.

!!! info "Auswirkungen"
    -   Das Ändern und Löschen von Werten wirkt sich unmittelbar auf die IT-Dokumentation aus: Wird ein Wert im **Dialog-Admin** geändert, ändert er sich überall automatisch. Ebenso wird beim Löschen des Wertes dieser auch überall dort gelöscht, wo er verwendet wurde. Vor dem Löschen empfiehlt es sich, über einen [Report](../auswertungen/report-manager.md) diejenigen Objekte zu suchen, bei denen dieser Wert verwendet wird. Mit Hilfe dieses Reports kann für alle aufgelisteten Objekte - beispielsweise über die [Listeneditierung](../effizientes-dokumentieren/listeneditierung.md) - ein alternativer Wert ausgewählt werden.

! !! info "Conséquences"
    - La modification et la suppression de valeurs ont un impact direct sur la documentation IT : Si une valeur est modifiée dans **Dialog-Admin**, elle change automatiquement partout. De même, si la valeur est supprimée, elle est également supprimée partout où elle a été utilisée. Avant la suppression, il est recommandé de rechercher les objets pour lesquels cette valeur est utilisée via un [rapport](../évaluations/report-manager.md). Ce rapport permet de sélectionner une valeur alternative pour tous les objets listés - par exemple via l'[édition de liste](../documentation efficace/édition de liste.md).

## Werte löschen

## Effacer les valeurs

Zum Löschen eines Wertes markiert man innerhalb der Übersicht die Checkbox des Wertes und klickt anschließend auf den Button **Purge**. Der Wert wird unwiderruflich gelöscht.

Pour supprimer une valeur, on coche la case de la valeur dans l'aperçu et on clique ensuite sur le bouton **Purge**. La valeur est irrémédiablement supprimée.

In dieser tabellarischen Übersicht wird zu jedem Wert angezeigt, ob dieser gelöscht werden kann. Dies ist dadurch bedingt, dass manche Werte von _i-doit_ als gegeben vorausgesetzt sind, um bestimmte Funktionalitäten zu gewährleisten.

Dans cette vue d'ensemble sous forme de tableau, il est indiqué pour chaque valeur si elle peut être supprimée. Cela s'explique par le fait que certaines valeurs de _i-doit_ sont supposées être données pour garantir certaines fonctionnalités.

## Rechte setzen

## Définir les droits

Auf jedes **Dialog+**-Attribut kann pro Benutzer(-gruppe) Rechte vergeben werden. So ist es beispielsweise möglich und oft auch ratsam, dass nur bestimmte Benutzergruppen Werte anlegen, ändern oder löschen können, andere Benutzergruppen diese aber nur verwenden können.

Des droits peuvent être attribués à chaque attribut **Dialog+** par (groupe d')utilisateurs. Il est par exemple possible, et souvent conseillé, que seuls certains groupes d'utilisateurs puissent créer, modifier ou supprimer des valeurs, alors que d'autres groupes d'utilisateurs ne peuvent que les utiliser.