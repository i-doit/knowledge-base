<!-- TRANSLATED by md-translate -->
# Benutzerdefinierte Kategorien

# Catégories définies par l'utilisateur

Neben den Standard-Kategorien in i-doit können eigene (benutzerdefinierte) [Kategorien](struktur-it-dokumentation.md) erstellt werden, um zusätzliche [Attribute](struktur-it-dokumentation.md) zu dokumentieren, die in den Standard-Kategorien nicht enthalten sind.

En plus des catégories standard dans i-doit, il est possible de créer ses propres [catégories](struktur-it-dokumentation.md) (définies par l'utilisateur) afin de documenter des [attributs](struktur-it-dokumentation.md) supplémentaires qui ne sont pas contenus dans les catégories standard.

## Konfiguration der Kategorie

## Configuration de la catégorie

Die Konfiguration der benutzerdefinierten Kategorien ist unter **Verwaltung → Datenstruktur → Benutzerdefinierte Kategorien** zu finden.Über den Button **Neu** wird eine benutzerdefinierte Kategorie erzeugt. Existieren bereits benutzerdefinierte Kategorien, können diese nachträglich bearbeitet werden.

La configuration des catégories définies par l'utilisateur se trouve sous **Administration → Structure des données → Catégories définies par l'utilisateur**.Une catégorie définie par l'utilisateur est créée en cliquant sur le bouton **Nouveau**. Si des catégories définies par l'utilisateur existent déjà, elles peuvent être modifiées ultérieurement.

[![benutzerdefinierte-kategorien](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)

[ ![catégories-personnalisées](../assets/images/fr/bases/catégories-personnalisées/1-bk.png)](../assets/images/fr/bases/catégories-personnalisées/1-bk.png)

Im ersten Schritt ist es notwendig, die Kategorie mit einem eindeutigen Namen zu bezeichnen, damit sie in der Kategorie-Liste identifiziert werden kann.

Dans un premier temps, il est nécessaire de désigner la catégorie par un nom unique afin de pouvoir l'identifier dans la liste des catégories.

[![benutzerdefinierte-kategorien-2](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)

[ ![catégories-personnalisées-2](../assets/images/fr/bases/catégories-personnalisées/2-bk.png)](../assets/images/fr/bases/catégories-personnalisées/2-bk.png)

Weiterhin muss die Kategorie mit einem oder mehreren [Objekttypen](struktur-it-dokumentation.md) verknüpft werden, damit diese genutzt werden kann.

De plus, la catégorie doit être liée à un ou plusieurs [types d'objets](structure-it-documentation.md) pour pouvoir être utilisée.

[![benutzerdefinierte-kategorien-3](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)

[ ![catégories-personnalisées-3](../assets/images/fr/bases/catégories-personnalisées/3-bk.png)](../assets/images/fr/bases/catégories-personnalisées/3-bk.png)

Danach muss festgelegt werden, ob es sich um eine [Single-](struktur-it-dokumentation.md) oder [Multi-Value-Kategorie](struktur-it-dokumentation.md) (Listen-Kategorie) handeln soll. Wenn Attribute gepflegt werden soll, die in ihrer Kombination eindeutig sind, ist die Konfiguration als Single-Value-Kategorie ausreichend. Sollen jedoch die Werte mehrfach gepflegt werden, so ist eine Multi-Value-Kategorie die richtige Wahl. Auf diese Weise ist es möglich, mehrfache Einträge in einer Kategorie zu speichern.

Il faut ensuite déterminer s'il s'agit d'une [catégorie à valeur unique](structure-it-documentation.md) ou d'une [catégorie à valeurs multiples](structure-it-documentation.md) (catégorie liste). S'il s'agit de gérer des attributs qui sont uniques dans leur combinaison, la configuration en tant que catégorie à valeur unique est suffisante. Mais si les valeurs doivent être gérées plusieurs fois, une catégorie multi-valeurs est le bon choix. De cette manière, il est possible de stocker des entrées multiples dans une catégorie.

[![benutzerdefinierte-kategorien-4](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)

[ ![catégories-personnalisées-4](../assets/images/fr/bases/catégories-personnalisées/4-bk.png)](../assets/images/fr/bases/catégories-personnalisées/4-bk.png)

Um auf die Kategorie bei Abfragen (zum Beispiel in selbst geschriebenen [Reports](../auswertungen/report-manager.md)) zugreifen zu können, sollte außerdem eine Konstante hinterlegt werden. Diese Konstante wird beim Erstellen der Kategorie automatisch vorgeschlagen und darf geändert werden.

Afin de pouvoir accéder à la catégorie lors de requêtes (par exemple dans des [rapports](../extraits/report-manager.md) écrits par l'utilisateur), il convient en outre de définir une constante. Cette constante est proposée automatiquement lors de la création de la catégorie et peut être modifiée.

[![benutzerdefinierte-kategorien-5](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)

[ ![catégories-personnalisées-5](../assets/images/fr/bases/catégories-personnalisées/5-bk.png)](../assets/images/fr/bases/catégories-personnalisées/5-bk.png)

## Ausprägung der Kategorie

## Expression de la catégorie

Um eine Kategorie auszuprägen, können beliebig viele Attribute über den Button **Mehrere Felder hinzufügen** hinzugefügt werden. Hier stehen folgende [Feldtypen](attributfelder.md) zur Auswahl:

Pour définir une catégorie, il est possible d'ajouter autant d'attributs que souhaité en cliquant sur le bouton **Ajouter plusieurs champs**. Les [types de champs](attributfelder.md) suivants sont disponibles ici :

* **Checkbox**<br>
Eine Checkbox die markiert werden kann
* **Dateibrowser**<br>
Eine Datei referenzieren
* **Datum und Uhrzeit**<br>
Ein Feld zum Eintragen eines Datums und/oder einer Uhrzeit; innerhalb der Kategorie steht hier ein Kalender zur Verfügung, mit dem die Auswahl ermöglicht wird.
* **Dialog+**<br>
[Dialog-Plus-Felder](dialog-admin.md), die mit eigenen Werten befüllt werden können, sodass diese wiederverwendbar sind. Über den Identifier im Feld **Zusatz** kann das Dialog-Plus-Feld auch in anderen Kategorien genutzt werden, sodass dort die bereits eingetragenen Werte zur Verfügung stehen. Hierfür ist es notwendig, denselben Identifier in beiden Kategorien einzutragen.
* **Dialog+ (Mehrfachauswahl)**<br>
Wie **Dialog+**, nur mit beliebig vielen Werten
* **HTML-Editor**<br>
Ein Textfeld, das einfache Textformatierungen wie zum Beispiel kursive Schrift erlaubt
* **Ja-Nein-Feld**<br>
Eine einfache Ja-oder-Nein-Auswahl
* **Link**<br>
Ein Feld zur Angabe eines Hyperlinks, der innerhalb der Kategorie angeklickt werden kann und dort weiterleitet
* **Nur Zahlen sind erlaubt**<br>
Ein Feld in dem nur Zahlen eingetragen werden können.
* **Objekt-Beziehung**<br>
Bei der Verwendung einer [Objektbeziehung](objekt-beziehungen.md) wird eine vollwertige Beziehung erzeugt. Das Feld **Zusatz** erlaubt die Auswahl der Beziehungsart und den damit verbundenen Beziehungstext. Diese Beziehungen sind auch im CMDB Explorer aufzufinden. Wenn möglich, ist dieser Feldtyp dem oben genannten Objekt-Browser zu bevorzugen.
* **Objekt-Beziehung (Mehrere Objekte)**<br>
Wie **Objekt-Beziehung**, nur mit beliebig vielen Objekten
* **Objekt-Browser**<br>
Ein Feld zur Erzeugung einer Verknüpfung mit einem anderen Objekt. Hierbei handelt es sich nur um eine Referenzierung und nicht um eine vollwertige Beziehung. Eine solche Referenzierung wird daher nicht im CMDB Explorer erscheinen.
* **Objekt-Browser (Mehrere Objekte)**<br>
Wie **Objekt-Browser**, nur mit beliebig vielen Objekten
* **Report**<br>
Zeigt einen Report an, dazu muss die ID des Report in das Zusatz Feld eingetragen werden.
* **Textfeld**<br>
Ein einzeiliges Textfeld zur Eingabe von Freitext
* **Textfeld (maskiert)**<br>
Ein einzeiliges Textfeld zur Eingabe von maskiertem Freitext. Der Inhalt ist nur in der Datenbank sichtbar.
* **Textfeld (Mehrzeilig)**<br>
In diesem mehrzeiligen Textfeld können längere Texte hinterlegt werden.
* **Datum und Uhrzeit**<br>
Ein Feld für Datum oder für Datum + Uhrzeit
* **Zeit**<br>
Hier kann eine Uhrzeit zwischen 00:00 und 23:59 angegeben werden

* **Checkbox**<br>
Une case à cocher qui peut être sélectionnée
* **Navigateur de fichiers**<br>
Référencer un fichier
* **Date et heure**<br>
Un champ pour saisir une date et/ou une heure ; au sein de la catégorie, un calendrier est ici disponible pour permettre la sélection.
* **Dialogue+**<br>
Champs [Dialogue-Plus](dialog-admin.md), qui peuvent être remplis avec des valeurs propres, de sorte qu'elles soient réutilisables. Grâce à l'identifiant dans le champ **Ajout**, le champ Dialogue Plus peut également être utilisé dans d'autres catégories, de sorte que les valeurs déjà saisies y soient disponibles. Pour cela, il est nécessaire de saisir le même identifiant dans les deux catégories.
* **Dialog+ (choix multiple)**<br>
Comme **Dialog+**, mais avec un nombre quelconque de valeurs.
* **Éditeur HTML**<br>
Un champ de texte qui permet une mise en forme simple du texte, comme par exemple l'italique.
**Champ oui/non**<br>
Un choix simple de type oui ou non
* **Lien**<br>
Un champ pour indiquer un lien hypertexte sur lequel on peut cliquer à l'intérieur de la catégorie et y être redirigé.
**Seuls les chiffres sont autorisés**<br>
Un champ dans lequel seuls des chiffres peuvent être saisis.
**Relation d'objet**<br>
Lors de l'utilisation d'une [relation d'objet](objekt-beziehungen.md), une relation à part entière est créée. Le champ **Ajout** permet de choisir le type de relation et le texte de la relation qui lui est associé. Ces relations peuvent également être trouvées dans CMDB Explorer. Dans la mesure du possible, ce type de champ est à préférer à l'explorateur d'objets mentionné ci-dessus.
* **Relation objet (plusieurs objets)**<br>
Comme **Relation d'objet**, mais avec un nombre d'objets quelconque.
* **Navigateur d'objets**<br>
Un champ pour créer un lien avec un autre objet. Il s'agit ici uniquement d'un référencement et non d'une relation à part entière. Une telle référence n'apparaîtra donc pas dans CMDB Explorer.
* **Object Browser (Plusieurs objets)**<br>
Comme **Object Browser**, mais avec un nombre quelconque d'objets.
* **Rapport**<br>
Affiche un rapport, pour cela l'ID du rapport doit être saisi dans le champ supplémentaire.
**Champ de texte**<br>
Un champ de texte d'une ligne pour la saisie de texte libre.
* **Champ de texte (masqué)**<br>
Un champ de texte d'une ligne pour la saisie de texte libre masqué. Le contenu n'est visible que dans la base de données.
* **Champ de texte (plusieurs lignes)**<br>
Ce champ de texte de plusieurs lignes permet de déposer des textes plus longs.
**Date et heure**<br>
Un champ pour la date ou pour la date + l'heure.
* **Heure**<br>
Il est possible d'indiquer ici une heure comprise entre 00:00 et 23:59.

Zusätzlich sind folgende Elemente verfügbar:

Les éléments suivants sont également disponibles :

* **Horizontale Linie**<br>
Eine Linie zur optischen Abgrenzung von Feldern und Inhalten
* **HTML**<br>
Die Möglichkeit in der Konfiguration der Kategorie HTML-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden.
* **Javascript**<br>
Die Möglichkeit in der Konfiguration der Kategorie Javascript-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden.

* **Ligne horizontale**<br>
Une ligne pour délimiter visuellement les champs et les contenus.
* **HTML**<br>
La possibilité d'inscrire dans la configuration de la catégorie un code HTML qui sera interprété dans la catégorie. Le code source est inscrit dans la configuration de la catégorie et ne peut pas être inscrit lors de l'appel de la catégorie dans la documentation par les utilisateurs.
* **Javascript**<br>
La possibilité d'inscrire dans la configuration de la catégorie un code Javascript qui sera interprété dans la catégorie. Le code source est inscrit dans la configuration de la catégorie et ne peut pas être inscrit lors de l'appel de la catégorie dans la documentation par les utilisateurs.

Wie bei fast jeder anderen Kategorie wird bei einer benutzerdefinierten automatisch ein **Beschreibungsfeld** am Ende angehangen.
Die Reihenfolge der erstellten Attribute kann über die schraffierten Flächen am Anfang jeder Zeile per Drag'n'Drop verändert werden.

Comme pour presque toutes les autres catégories, un champ **description** est automatiquement ajouté à la fin d'une catégorie définie par l'utilisateur.
L'ordre des attributs créés peut être modifié par glisser-déposer via les zones hachurées au début de chaque ligne.

[![benutzerdefinierte-kategorien-6](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)

[ ![catégories-personnalisées-6](../assets/images/fr/bases/catégories-personnalisées/6-bk.gif)](../assets/images/fr/bases/catégories-personnalisées/6-bk.gif)

Über den Button **Entfernen** können Attribute gelöscht werden.

Le bouton **Supprimer** permet de supprimer des attributs.

[![benutzerdefinierte-kategorien-7](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)

[ ![catégories-personnalisées-7](../assets/images/fr/bases/catégories-personnalisées/7-bk.gif)](../assets/images/fr/bases/catégories-personnalisées/7-bk.gif)

!!! attention "Achtung!"
    Sobald die Kategorie in Verwendung ist, ist das Ändern von bestehenden Feldtypen nicht mehr möglich, um Datenverlust zu vermeiden.<br>
    Sollten Felder in der Konfiguration entfernt werden, kann man auf deren Inhalte nicht mehr zugreifen.<br>
    Anschließend müssen die Attribute über die [Systemreparatur und Bereinigung](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) neu indiziert werden.

! !! attention "Attention !"
    Dès que la catégorie est utilisée, il n'est plus possible de modifier les types de champs existants afin d'éviter toute perte de données.<br>
    Si des champs devaient être supprimés dans la configuration, il ne serait plus possible d'accéder à leur contenu.<br>
    Ensuite, les attributs doivent être réindexés via [Réparation et nettoyage du système](../administration/administration/administration-nom-de-client/réparation-et-nettoyage-du-système.md).

Unterhalb der Konfiguration erfolgt eine Auswertung:

Une évaluation est effectuée en dessous de la configuration :

* **Kategorieeinträge gesamt**:<br> Wie oft wurde die Kategorie gespeichert? Pro Objekt werden die Einträge (bei Single-Value also einmal, bei Multi-Value pro Eintrag) zusammen gerechnet.
* **Gepflegte Werte**:<br> Jedes Attribut, das ausgefüllt und gespeichert wurde, wird Objekt-übergreifend zusammen gezählt.

* **Total des entrées de la catégorie**:<br> Combien de fois la catégorie a-t-elle été enregistrée ? Pour chaque objet, les entrées sont calculées ensemble (donc une fois pour les valeurs uniques, et par entrée pour les valeurs multiples).
**Valeurs gérées**:<br> Chaque attribut qui a été rempli et enregistré est compté ensemble pour tous les objets.

[![benutzerdefinierte-kategorien-8](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)

[ ![catégories-personnalisées-8](../assets/images/fr/bases/catégories-personnalisées/8-bk.png)](../assets/images/fr/bases/catégories-personnalisées/8-bk.png)

Sobald deine Kategorie konfiguriert und ausgeprägt wurde, kannst du die Schaltfläche **Speichern** verwenden, damit die Kategorie in den ausgewählten Objekttypen zur Verfügung steht.

Une fois que ta catégorie a été configurée et définie, tu peux utiliser le bouton **Enregistrer** pour que la catégorie soit disponible dans les types d'objets sélectionnés.

## Technische Konfiguration

## Configuration technique

Um die benutzerdefinierte Kategorie über die [API](../i-doit-pro-add-ons/api/index.md) nutzen zu können, hilft die technische Konfiguration. Diese ist über den Button **Technische Konfiguration anzeigen** erreichbar.

Pour pouvoir utiliser la catégorie personnalisée via l'[API](../i-doit-pro-add-ons/api/index.md), la configuration technique est utile. Celle-ci est accessible en cliquant sur le bouton **Afficher la configuration technique**.

Es ist möglich, die technischen Schlüssel für jedes Feld zu ändern, indem Sie auf **Technischen Schlüssel ändern** klicken.

Il est possible de modifier la clé technique de chaque champ en cliquant sur **Modifier la clé technique**.

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)

[ ![Modifier la clé technique](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/9-bk.png)](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/9-bk.png)

Jetzt können Sie den Schlüssel ändern. Der Schlüssel wird automatisch überprüft, bevor Sie den neuen Wert speichern können.

Vous pouvez maintenant modifier la clé. La clé est automatiquement vérifiée avant que vous ne puissiez enregistrer la nouvelle valeur.

!!! warning "Achtung!"
    Das ändern eines Schlüssels führt zu einer Migration der hinterlegten Daten zum neuen Schlüssel<br>
    Der Schlüssel muss aus den Zeichen **a-z**, **0-9** und **_** bestehen.<br>
    Der Schlüssel muss mindestens **einen Buchstaben beinhalten**.<br>
    Der Schlüssel **darf nicht leer** oder **länger als 64 Zeichen sein**.<br>
    Der Schlüssel **muss einzigartig sein**.

! !! warning "Attention !"
    La modification d'une clé entraîne une migration des données déposées vers la nouvelle clé<br>.
    La clé doit être composée des caractères **a-z**, **0-9** et **_**.<br>
    La clé doit contenir au moins **une lettre**.<br>
    La clé **ne doit pas être vide** ou **plus longue que 64 caractères**.<br>
    La clé **doit être unique**.

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)

[ ![Modifier la clé technique](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/10-bk.png)](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/10-bk.png)

Nachdem Sie die benutzerdefinierte Kategorie gespeichert haben, können Sie die neue technische Konfiguration anzeigen und verwenden.

Après avoir enregistré la catégorie personnalisée, vous pouvez afficher et utiliser la nouvelle configuration technique.

[![Technische Konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)

[ ![Configuration technique](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/11-bk.png)](../assets/images/fr/bases/catégories-définies-par-l'utilisateur/11-bk.png)