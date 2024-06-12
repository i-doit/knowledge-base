# Validation et Champs Obligatoires

Si vous souhaitez garantir l'unicité des [attributs](../glossary.md) ou si vous attendez uniquement des valeurs définies lors de la maintenance de champs particuliers ou si vous souhaitez rendre certains champs obligatoires, alors i-doit fournira les fonctionnalités correspondantes.

Aperçu
--------

La validation répond aux exigences suivantes :

*   Détermination des valeurs spécifiées pour des champs particuliers
*   Détermination de l'unicité de la valeur du champ par [objet](../glossary.md) (catégorie à valeurs multiples)/ [type d'objet](../glossary.md)/ [client](../glossary.md) (global)
*   Définition du champ comme obligatoire lors de la création d'un nouvel objet ou de la modification des informations

Configuration
-------------

Vous pouvez trouver la possibilité de spécifier ces paramètres dans **Administration** **→ Paramètres CMDB → Validation**. Vous ne trouverez aucune configuration ici à l'état de livraison. La configuration est effectuée par catégorie. Choisissez une catégorie pour laquelle vous souhaitez valider un ou plusieurs attributs.

[![Configuration](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/1-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/1-vamv.png)

Maintenant, les attributs de la catégorie sont prêts pour la configuration de la validation. En utilisant le bouton **Champ obligatoire**, l'entrée des utilisateurs dans ce champ devient obligatoire. Il n'est pas possible de sauvegarder la catégorie si ce champ est vide. L'indication pour cela dans la catégorie est un astérisque rouge (\*) à côté du nom de l'attribut.

De plus, vous pouvez indiquer si l'attribut doit être unique ou non dans votre [documentation informatique](../basics/structure-of-the-it-documentation.md) et donc ne peut exister qu'une seule fois. Cela se fait via les boutons suivants :

*   **Unique (par objet) :** Cette option n'est disponible que dans les catégories à valeurs multiples. Lorsqu'elle est activée, il n'est pas possible pour cet objet d'utiliser la même valeur de manière répétée dans deux entrées de cette catégorie. Il est cependant possible d'utiliser la valeur saisie dans d'autres objets.
    
*   **Unique (par type d'objet) :** La même valeur ne peut pas exister dans un autre objet de ce type lorsque vous activez cette option par type d'objet.

*   **Unique (global):** La valeur saisie est unique pour l'ensemble du locataire et ne peut pas être utilisée pour cet attribut sur un autre objet.

    Si une valeur est déjà utilisée pour un champ mais que l'utilisateur essaie de sauvegarder l'entrée, un avis l'informera que l'utilisation répétée de cette valeur n'est pas possible.

[![values](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/2-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/2-vamv.png)

La sélection **L'attribut doit être** n'est disponible que lorsque aucune validation de catégorie interne n'a déjà lieu. Un champ de date, par exemple, est uniquement capable de recevoir une date et de la sauvegarder. Les [champs de dialogue plus](../basics/attribute-fields.md) vous permettent uniquement de sélectionner des valeurs définies. Par conséquent, ces champs ne peuvent pas être limités à des valeurs de champ spécifiques.

Tant qu'aucune validation n'existe dans la catégorie, vous pouvez soit déterminer des types de contenu spécifiques auxquels la valeur doit correspondre, soit indiquer des valeurs textuelles personnalisées parmi lesquelles l'utilisateur peut choisir.

!!! info "Cas spéciaux"

    Il existe certaines catégories qui ont déjà une validation interne qui ne peut ni être désactivée ni ajustée. Dans la catégorie "Adresse hôte", par exemple, il y a une vérification pour savoir si une adresse IP saisie correspond aux normes pour IPv4 ou IPv6.

Si vous spécifiez des valeurs personnalisées pour les utilisateurs, vous pouvez éventuellement créer une liste déroulante à partir de laquelle les utilisateurs peuvent sélectionner les valeurs. De cette manière, les valeurs pour le champ ne peuvent être choisies que dans une liste et le contenu de cette liste ne peut être modifié que dans la configuration de la validation dans la section d'administration.

[![section d'administration](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/3-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/3-vamv.png)

Enregistrez les paramètres via le bouton **Enregistrer**, une fois que vous avez configuré tous les champs de la catégorie selon vos exigences. Répétez cette étape pour toutes les catégories dans lesquelles vous souhaitez valider des valeurs et/ou déclarer des champs comme obligatoires.

Une section sera créée dans la configuration pour chaque catégorie pour laquelle vous créez une validation. Pour améliorer la transparence, ces sections peuvent être développées ou refermées en cliquant sur leurs en-têtes qui contiennent le titre de la catégorie. Si vous n'avez plus besoin d'une configuration d'une catégorie, vous pouvez la supprimer complètement via le X à la fin de la ligne.

[![catégorie](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/4-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/4-vamv.png)

!!! info "Attention lors de la suppression"

    Lors de la suppression de la configuration d'une catégorie, toutes les configurations de validation seront perdues de manière irréversible.

Renouveler le Cache de Validation
---------------------------------

Il est également possible de renouveler le cache de validation dans la zone supérieure de la configuration. Lors de la création d'une nouvelle configuration, le cache sera généralement effacé automatiquement. Il peut arriver dans de rares cas que le système n'effectue pas cette tâche. Si vous constatez que votre configuration de validation n'a pas d'effet dans une catégorie, ou qu'une validation supprimée semble toujours être active, effacez le cache afin que le système reconnaisse les paramètres modifiés. 



[![Renouveler le cache de validation](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/5-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/5-vamv.png)

Tester les expressions régulières
------------------------

Dans cette section, les expressions régulières peuvent être saisies et testées pour voir si votre saisie attendue a été acceptée dans ce champ ou non. Cela est utile si vous souhaitez que certains champs correspondent à des expressions régulières et que vous n'êtes pas sûr que l'expression régulière que vous avez utilisée soit correcte.

[![Tester les expressions régulières](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/6-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/6-vamv.png)
