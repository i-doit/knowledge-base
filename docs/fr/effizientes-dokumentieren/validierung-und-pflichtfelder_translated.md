<!-- TRANSLATED by md-translate -->
!!! info 
    Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/validierung-von-daten-und-eingaben-in-i-doit/)

! !! info
    Vous trouverez un exemple pratique sur notre [blog](https://www.i-doit.com/blog/validierung-von-daten-und-eingaben-in-i-doit/)

Wer die Eindeutigkeit von [Attributen](../glossar.md) sicherstellen möchte oder bei der Pflege von bestimmten Feldern nur definierte Werte erwartet oder Felder zu Pflichtfeldern machen möchte, findet bei i-doit die entsprechenden Funktionen.

Ceux qui souhaitent garantir l'unicité des [Attributs](../glossaire.md) ou qui n'attendent que des valeurs définies lors de la gestion de certains champs ou qui souhaitent rendre des champs obligatoires, trouveront chez i-doit les fonctions correspondantes.

## Überblick

## vue d'ensemble

Folgende Anforderungen erfüllt die Validierung:

La validation répond aux exigences suivantes :

* Festlegung vorgeschriebener Werte für einzelne Felder
* Festlegung einer Eindeutigkeit des Feldwerts pro [Objekt](../grundlagen/struktur-it-dokumentation.md) ([Listen-Kategorie](../grundlagen/struktur-it-dokumentation.md))/[Objekttyp](../grundlagen/struktur-it-dokumentation.md)/[Mandant](../glossar.md) (global)
* Definition des Feldes als Pflichtfeld bei der Erzeugung eines neuen Objekts/Bearbeitung der Informationen

* Définition de valeurs prescrites pour des champs individuels
* Définition d'une unicité de la valeur du champ par [objet](../bases/structure-it-documentation.md) ([catégorie de liste](../bases/structure-it-documentation.md))/[type d'objet](../bases/structure-it-documentation.md)/[mandant](../glossaire.md) (global)
* Définition du champ comme obligatoire lors de la création d'un nouvel objet/modification des informations

## Konfiguration

## Configuration

Du findest die Möglichkeit zur Festlegung dieser Einstellungen **Verwaltung → CMDB-Einstellungen → Validierung**. Im Auslieferungszustand wirst du hier noch keine Konfiguration vorfinden. Die Konfiguration erfolgt pro Kategorie. Wähle die Kategorie, aus der du ein oder mehrere Attribute validieren möchtest.

Tu trouveras la possibilité de définir ces paramètres **Administration → Paramètres CMDB → Validation**. A la livraison, tu ne trouveras pas encore de configuration ici. La configuration se fait par catégorie. Choisis la catégorie dont tu veux valider un ou plusieurs attributs.

[![validierung-validieren](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/1-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/1-vup.png)

[ ![validation-validation](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/1-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/1-vup.png)

Nun stehen dir die Attribute der Kategorie zur Konfiguration der Validierung bereit. Mit der Schaltfläche **Pflichtfeld** kannst du eine Eingabe in dieses Feld durch die Benutzer voraussetzen. Es ist nicht möglich, die Kategorie zu speichern, wenn das Feld leer ist. Die Kennzeichnung in der Kategorie erfolgt über ein rotes Sternchen (*) neben der Bezeichnung des Attributs.

Les attributs de la catégorie sont maintenant disponibles pour la configuration de la validation. Avec le bouton **Champ obligatoire**, tu peux supposer une saisie dans ce champ par les utilisateurs. Il n'est pas possible d'enregistrer la catégorie si le champ est vide. Le marquage dans la catégorie se fait par un astérisque rouge (*) à côté de la désignation de l'attribut.

Weiterhin kannst du angeben, ob das Attribut in deiner [IT-Dokumentation](../grundlagen/struktur-it-dokumentation.md) eindeutig sein muss, also maximal einmal vorhanden sein darf. Dies erfolgt über folgende Schaltflächen:

En outre, tu peux indiquer si l'attribut doit être unique dans ta [documentation IT](../grundlagen/struktur-it-dokumentation.md), c'est-à-dire s'il ne peut exister qu'une seule fois au maximum. Cela se fait à l'aide des boutons suivants :

* **Eindeutig (pro Objekt)**: Diese Option steht nur in Listen-Kategorien (Multi-Value-Kategorien) zur Verfügung. Wenn du sie aktivierst, ist es innerhalb dieses Objekts nicht möglich, denselben Wert in zwei Einträgen dieser Kategorie wiederholt zu verwenden. Es ist jedoch möglich, den eingetragenen Wert in anderen Objekten erneut zu pflegen.
* **Eindeutig (pro Objekttyp)**: Wenn du die Option pro Objekttyp aktivierst, darf derselbe Wert nicht in einem weiteren Objekt dieses Typs vorhanden sein.
* **Eindeutig (Global)**: Der eingetragene Wert ist im gesamten Mandanten eindeutig und kann in diesem Attribut in keinem anderen Objekt erneut verwendet werden.

**Entier (par objet)** : Cette option n'est disponible que dans les catégories de listes (catégories multi-valeurs). Si tu l'actives, il n'est pas possible, au sein de cet objet, de réutiliser la même valeur dans deux entrées de cette catégorie. Il est toutefois possible de gérer à nouveau la valeur saisie dans d'autres objets.
**Unique (par type d'objet)** : Si tu actives l'option par type d'objet, la même valeur ne peut pas être présente dans un autre objet de ce type.
* **Unique (global)** : La valeur saisie est unique dans l'ensemble du mandant et ne peut pas être réutilisée dans cet attribut dans un autre objet.

Sollte ein Wert für ein Feld bereits in Verwendung sein, wird der Benutzer durch einen Hinweis darüber informiert, dass die doppelte Verwendung dieses Wertes nicht möglich ist, wenn er den Eintrag speichern möchte.

Si une valeur pour un champ est déjà en cours d'utilisation, l'utilisateur est informé par un message que la double utilisation de cette valeur n'est pas possible s'il souhaite enregistrer l'entrée.

[![validierung-alarm](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/2-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/2-vup.png)

[ ![validation-alarme](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/2-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/2-vup.png)

Die Auswahl **Attribut muss** steht dort zur Verfügung, wo nicht bereits eine Kategorie-interne Validierung erfolgt. Ein Datumsfeld ist beispielsweise generell nur in der Lage ein Datum aufzunehmen und zu speichern. [Dialog-Plus-Felder](../grundlagen/attributfelder.md) lassen ausschließlich die festgelegten Werte zur Auswahl zu. Derartige Felder können daher nicht auf einen bestimmten Feldwert beschränkt werden.

Le choix **Attribut doit** est disponible là où il n'y a pas déjà de validation interne à la catégorie. Un champ de date, par exemple, ne peut généralement contenir et enregistrer qu'une seule date. Les champs [Dialogue Plus](../bases/champs d'attributs.md) ne permettent de sélectionner que les valeurs définies. De tels champs ne peuvent donc pas être limités à une valeur de champ spécifique.

Insofern keine Kategorie-interne Validierung vorliegt, kannst du entweder bestimmte Inhaltstypen festlegen, denen der Wert entsprechen muss oder eigene Textwerte vorgeben, aus denen die Anwender auswählen können.

S'il n'y a pas de validation interne à la catégorie, tu peux soit définir certains types de contenu auxquels la valeur doit correspondre, soit définir tes propres valeurs de texte parmi lesquelles les utilisateurs peuvent choisir.

!!! info "Spezialfälle"

! !! info "Cas spéciaux

```
Es gibt Kategorien, die bereits über eine interne Validierung verfügen, die sich weder abschalten, noch anpassen lässt. Beispielsweise wird in der Kategorie "Hostadresse" die Angabe einer IP-Adresse überprüft, ob sie entweder dem Standard für IPv4 oder IPv6 entspricht.
```

Falls du den Anwendern eigene Werte vorgibst, kannst du optional eine Drop-Down-Liste erzeugen, aus der die Anwender die Werte wählen können. So kann der Feldwert ausschließlich aus einer Liste ausgewählt werden, deren Inhalt nur in der Verwaltung in der Konfiguration der Validierung verändert werden kann.

Si tu donnes aux utilisateurs leurs propres valeurs, tu peux créer en option une liste déroulante dans laquelle les utilisateurs peuvent choisir les valeurs. Ainsi, la valeur du champ peut être choisie exclusivement dans une liste dont le contenu ne peut être modifié que dans l'administration, dans la configuration de la validation.

[![validierung-dropdown](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/3-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/3-vup.png)

[ ![validation-dropdown](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/3-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/3-vup.png)

Wenn du alle Felder der Kategorie gemäß deiner Vorgaben konfiguriert hast, speichere die Einstellungen über die Schaltfläche **Speichern**. Wiederhole diese Schritte für alle Kategorien, in denen du Werte validieren und/oder als Pflichtfeld deklarieren möchtest.

Une fois que tu as configuré tous les champs de la catégorie selon tes préférences, enregistre les paramètres en cliquant sur le bouton **Enregistrer**. Répète ces étapes pour toutes les catégories dans lesquelles tu souhaites valider des valeurs et/ou les déclarer obligatoires.

Pro Kategorie, für die du eine Validierung anlegst, wird ein Bereich in der Konfiguration erzeugt. Diese Bereiche lassen sich zur Steigerung der Übersichtlichkeit auf- und zuklappen, indem du die Kopfzeile dieser Bereiche anklickst, die den Titel der Kategorie beinhalten. Solltest du eine Konfiguration einer Kategorie nicht länger benötigen, kannst du diese über das X am Ende dieser Zeile vollständig entfernen.

Pour chaque catégorie pour laquelle tu crées une validation, une zone est créée dans la configuration. Ces zones peuvent être ouvertes et fermées pour plus de clarté, en cliquant sur l'en-tête de ces zones, qui contient le titre de la catégorie. Si tu n'as plus besoin de la configuration d'une catégorie, tu peux la supprimer complètement en cliquant sur le X à la fin de cette ligne.

[![validierung-speichern](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/4-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/4-vup.png)

[ ![validation-sauvegarde](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/4-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/4-vup.png)

!!! info "Vorsicht beim Entfernen"

! !! info "Attention à l'enlèvement

```
Wenn du die Konfiguration einer Kategorie entfernst, gehen die Validierungseinstellungen unwiderruflich verloren.
```

## Validierungs-Cache erneuern

## Renouveler le cache de validation

In der Konfiguration ist es dir im oberen Bereich auch möglich, den Validierungs-Cache zu erneuern. In der Regel wird dieser beim Anlegen einer neuen Konfiguration automatisch geleert. In seltenen Fällen kann es jedoch vorkommen, dass das System diese Aufgabe nicht übernimmt. Wenn du also feststellst, dass eine Validierungskonfiguration in einer Kategorie nicht greift oder eine entfernte Validierung weiterhin aktiv zu sein scheint, leere den Cache, damit das System die veränderten Einstellungen erkennt.

Dans la partie supérieure de la configuration, il t'est également possible de renouveler le cache de validation. En règle générale, celui-ci est automatiquement vidé lors de la création d'une nouvelle configuration. Dans de rares cas, il peut toutefois arriver que le système ne se charge pas de cette tâche. Par conséquent, si tu constates qu'une configuration de validation ne fonctionne pas dans une catégorie ou qu'une validation supprimée semble toujours active, vide le cache afin que le système reconnaisse les paramètres modifiés.

[![validierung-erneuern](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/5-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/5-vup.png)

[ ![validation-renouvellement](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/5-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/5-vup.png)

## Reguläre Ausdrücke testen

## Tester les expressions régulières

Falls du vorgeben möchtest, dass Felder regulären Ausdrücken entsprechen müssen und dir nicht sicher bist, ob der von dir verwendete reguläre Ausdruck korrekt ist, kannst du über diesen Bereich den regulären Ausdruck eintragen und prüfen, ob die von dir erwartete Eingabe im Feld zugelassen würde.

Si tu veux indiquer que les champs doivent correspondre à des expressions régulières et que tu n'es pas sûr que l'expression régulière que tu utilises soit correcte, tu peux utiliser cette section pour saisir l'expression régulière et vérifier si la saisie que tu attends serait autorisée dans le champ.

[![validierung-testen](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/6-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/6-vup.png)

[ ![validation-test](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/6-vup.png)](../assets/images/fr/documentation-efficace/validation-et-champs-obligatoires/6-vup.png)