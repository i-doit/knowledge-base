# Catégories Personnalisées {/examples}

Outre les catégories standard, _i-doit_ permet de créer (personnalisées) des [catégories](structure-of-the-it-documentation.md) afin de documenter des [attributs](./structure-of-the-it-documentation.md) supplémentaires qui ne sont pas inclus dans les catégories standard.

## Configuration de la Catégorie {/examples}

Vous pouvez trouver la configuration des catégories personnalisées dans _i-doit_ à **Administration → Structure des données → Catégories personnalisées**. Le bouton **Nouveau** est utilisé pour créer une catégorie personnalisée. Si vous avez déjà créé des catégories personnalisées, vous pouvez également les modifier ici.

[![Configuration de la Catégorie](../assets/images/en/basics/custom-categories/1-cc.png)](../assets/images/en/basics/custom-categories/1-cc.png)

En premier lieu, il est nécessaire de donner un nom unique à la catégorie afin qu'elle puisse être identifiée dans la liste des catégories.

[![liste des catégories](../assets/images/en/basics/custom-categories/2-cc.png)](../assets/images/en/basics/custom-categories/2-cc.png)

De plus, la catégorie doit être liée à un ou plusieurs [types d'objets](structure-of-the-it-documentation.md) afin de pouvoir l'utiliser.

[![types d'objets](../assets/images/en/basics/custom-categories/3-cc.png)](../assets/images/en/basics/custom-categories/3-cc.png)

Maintenant, vous pouvez définir si vous avez besoin d'une [catégorie à valeur unique](structure-of-the-it-documentation.md) ou d'une [catégorie à valeurs multiples](structure-of-the-it-documentation.md). Si vous souhaitez utiliser des attributs uniques dans leur combinaison, la configuration en tant que catégorie à valeur unique sera suffisante. Cependant, si vous souhaitez utiliser les valeurs de manière répétée, vous aurez besoin d'une catégorie à valeurs multiples. De cette manière, il est possible de sauvegarder plusieurs entrées dans une catégorie.

[![catégorie à valeurs multiples](../assets/images/en/basics/custom-categories/4-cc.png)](../assets/images/en/basics/custom-categories/4-cc.png)

Afin d'avoir accès à une catégorie dans une base de données lors de requêtes (par exemple, dans des [rapports](../evaluation/report-manager.md) personnalisés du gestionnaire de rapports), vous pouvez définir une constante de base de données. Cette constante est suggérée automatiquement lors de la création de la catégorie et peut être modifiée.

[![constante de base de données](../assets/images/en/basics/custom-categories/5-cc.png)](../assets/images/en/basics/custom-categories/5-cc.png)

## Caractéristiques de la Catégorie

Pour personnaliser votre catégorie, vous pouvez ajouter autant d'attributs que vous le souhaitez en utilisant le bouton **Ajouter un nouveau champ**.

Vous pouvez choisir parmi les [types de champs](./attribute-fields.md) suivants :

- **Case à cocher**<br>
    Une case à cocher qui peut être sélectionnée.
- **Date et Heure**<br>
    Un champ pour la date ou la date + l'heure.
- **Dialog+**<br>
    Les [Champs Dialog-Plus](./dialog-admin.md) sont des champs qui peuvent être remplis avec leurs propres valeurs pour les rendre réutilisables. Le champ dialog-plus peut également être utilisé dans d'autres catégories via l'identifiant dans le champ **Addition**, de sorte que les valeurs déjà saisies soient disponibles là-bas. À cette fin, il est nécessaire d'entrer le même identifiant dans les deux catégories.
- **Dialog+ (sélection multiple)**<br>
    Comme **Dialog+**, mais avec un nombre quelconque de valeurs.
- **Explorateur de fichiers**<br>
    Vous permet de faire référence à un fichier.
- **Éditeur HTML**<br>
    Un champ de texte qui permet une mise en forme simple du texte, comme des lettres en italique.
- **Lien**<br>
    Un champ pour afficher un hyperlien qui peut être cliqué dans la catégorie et redirigé à partir de là.
- **Chiffres uniquement**<br>
    Un champ où seuls des chiffres peuvent être saisis.
- **Explorateur d'objets**<br>
    Un champ pour créer un lien vers un autre objet. Ce lien est une référence uniquement et non une relation complète. Par conséquent, ce type de référence n'apparaîtra pas dans l'explorateur CMDB.
- **Explorateur d'objets (objets multiples)**<br>
    Comme **explorateur d'objets**, mais avec un nombre quelconque d'objets.
- **Relation d'objet**<br>
    Une relation complète est générée lors de l'utilisation d'une [relation d'objet](./object-relations.md). Le champ **Addition** permet la sélection du type de relation et du texte de relation associé. Ces relations peuvent également être trouvées dans l'explorateur CMDB. Dans la mesure du possible, ce type de champ est à privilégier par rapport à l'explorateur d'objets mentionné ci-dessus.
- **Relation d'objet** (**objets multiples**)<br>
    Comme **relation d'objet**, mais avec un nombre quelconque d'objets.
- **Rapport**<br>
    Affiche un rapport, l'ID du rapport doit être saisi dans le champ supplémentaire.
- **Champ de texte**<br>
    Un champ de texte à une seule ligne pour saisir du texte brut.
- **Champ de texte (masqué)**<br>
    Un champ de texte à une seule ligne pour saisir du texte masqué. Le contenu n'est visible que dans la base de données.
- **Champ de texte (plusieurs lignes)**<br>
    Vous pouvez saisir des textes plus longs dans ce champ de texte multi-lignes.
- **Heure**<br>
    Une heure entre 00:00 et 23:59 peut être saisie ici.
- **Champ Oui-non**<br>
    Une simple sélection oui ou non.

De plus, les éléments de design suivants sont disponibles :

- **Ligne horizontale**<br>
    Séparez graphiquement les champs et les contenus avec une ligne.
- **HTML**<br>
    Vous pouvez saisir du code HTML dans la configuration des catégories qui sera interprété dans la catégorie. Le code source sera saisi dans la configuration de la catégorie et ne peut pas être saisi par l'utilisateur lors de la consultation de la catégorie dans la documentation.
- **Javascript**<br>
    Vous pouvez saisir du code Javascript dans la configuration des catégories qui sera interprété dans la catégorie. Le code source sera saisi dans la configuration de la catégorie et ne peut pas être saisi par l'utilisateur lors de la consultation de la catégorie dans la documentation.

Comme pour la plupart des autres catégories, les catégories personnalisées ont également un **champ de description** attaché à la fin.<br>
Si vous souhaitez changer l'ordre des champs, vous pouvez le faire facilement avec la zone en pointillés au début de chaque ligne et déplacer la position des attributs via un glisser-déposer.

[![Champ de description](../assets/images/en/basics/custom-categories/6-cc.gif)](../assets/images/en/basics/custom-categories/6-cc.gif)


[![Remove](../assets/images/en/basics/custom-categories/7-cc.gif)](../assets/images/en/basics/custom-categories/7-cc.gif)

!!! attention "Attention !"

    Dès que la catégorie est utilisée, les types de champ existants ne peuvent plus être modifiés afin d'éviter toute perte de données.
    Si vous supprimez des champs dans la configuration, vous ne pourrez plus accéder à leur contenu.

Une interprétation est effectuée ci-dessous la configuration :

- **Nombre total d'entrées :**<br>
    Combien de fois cette catégorie a-t-elle été enregistrée ? Les entrées sont ajoutées par objet (une fois avec une seule valeur, par entrée avec une valeur multiple).
- **Nombre de valeurs :**<br>
    Chaque attribut rempli et enregistré est ajouté ensemble.

[![Catégorie personnalisée](../assets/images/en/basics/custom-categories/8-cc.png)](../assets/images/en/basics/custom-categories/8-cc.png)

Dès que votre catégorie est configurée et prête, vous pouvez utiliser le bouton **Enregistrer** pour rendre la catégorie disponible dans les types d'objet choisis.

## Configuration technique

La configuration technique vous aide à utiliser la catégorie personnalisée via [API](../i-doit-pro-add-ons/api/index.md). Vous pouvez l'afficher avec le bouton **Afficher la configuration technique**.

Il est possible de modifier les clés techniques pour chaque champ en cliquant sur **Changer la clé technique**

[![changer la clé technique](../assets/images/en/basics/custom-categories/9-cc.png)](../assets/images/en/basics/custom-categories/9-cc.png)

Maintenant, vous pouvez modifier la clé. La clé sera vérifiée automatiquement avant que vous puissiez enregistrer la nouvelle valeur.

!!! warning "Attention!"

    Changer la clé technique entraînera une migration des données existantes pour faire référence à la nouvelle clé.<br>
    La clé ne peut contenir que des caractères **a-z**, **0-9** et **_**.<br>
    La clé doit contenir au moins **un caractère alphabétique**.<br>
    La clé ne peut **pas être vide** ou **dépasser 64 caractères**.<br>
    La clé **doit être unique**.

[![modification de la clé de champ](../assets/images/en/basics/custom-categories/10-cc.png)](../assets/images/en/basics/custom-categories/10-cc.png)

Après avoir enregistré la catégorie personnalisée, vous pouvez consulter et utiliser la nouvelle configuration technique.

[![Configuration Technique](../assets/images/en/basics/custom-categories/11-cc.png)](../assets/images/en/basics/custom-categories/11-cc.png)
