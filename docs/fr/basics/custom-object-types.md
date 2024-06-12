# Types d'Objets Personnalisés 

Beaucoup de [types d'objets](../glossary.md) sont fournis par l'installation standard d'_i-doit_. Cependant, il est très probable que vous souhaitiez documenter des [objets](../glossary.md) qui ne conviennent pas à être assignés à l'un des types d'objets existants. Pour cette raison, il est possible de créer et de personnaliser des types d'objets.

## Accès à la Configuration

La possibilité de créer des types d'objets personnalisés se trouve dans **Administration → Structure de données → Types d'objets → [Groupe de types d'objets]**. Ici, il est possible de créer de nouveaux types d'objets et de modifier ceux existants.

En tant qu'alternative, vous pouvez également accéder à la configuration des types d'objets via le nom du [groupe de types d'objets](../glossary.md) au-dessus de la [liste des types d'objets](../glossary.md) dans le [menu arborescent](../glossary.md) sur le côté gauche. Il vous suffit de cliquer sur le lien et vous verrez la liste des types d'objets de ce groupe de types d'objets et pourrez les modifier.

[![infrastructure](../assets/images/en/basics/custom-object-types/1-cot.png)](../assets/images/en/basics/custom-object-types/1-cot.png)

[![configuration-du-type-d-objet](../assets/images/en/basics/custom-object-types/2-cot.png)](../assets/images/en/basics/custom-object-types/2-cot.png)

Utilisez le bouton **Nouveau** pour commencer à configurer un type d'objet personnalisé.

[![configuration-du-type-d-objet-2](../assets/images/en/basics/custom-object-types/3-cot.png)](../assets/images/en/basics/custom-object-types/3-cot.png)

## Champs dans la Configuration

Les champs suivants sont affichés dans les types d'objets nouveaux et existants :

- **ID**<br>
    L'ID est un numéro séquentiel attribué par le système. Sa caractéristique d'unicité permet d'identifier le type d'objet. Un changement manuel n'est pas possible.

- **Titre Traduit**<br>
    En utilisant ce champ, vous pouvez vérifier si la constante de langue que vous utilisez est correctement traduite dans la langue actuellement choisie si vous utilisez votre propre fichier de langue.

- **Constante de Langue/Titre**<br>
    Il est possible dans ce champ d'entrer une constante de langue ou un titre en texte brut. Si vous utilisez i-doit de manière multilingue, veuillez utiliser une constante que vous traduisez dans votre propre fichier de langue.

- **Préfixe SYSID**<br>
    Le préfixe [SYSID](../glossary.md) est inséré dans tous les objets de ce type lors de la génération du SYSID. Laisser ce champ vide utilisera le préfixe standard **SYSID_**. Sinon, les SYSID seront générés avec votre propre préfixe. Si le champ reste inchangé, le timestamp Unix actuel sera inclus dans le SYSID. L'ID de l'objet est inclus pour les préfixes personnalisés. 

- **Numéros d'inventaire automatiques**<br>
    Si vous souhaitez que i-doit génère automatiquement des numéros d'inventaire individuels pour les objets de ce type, vous pouvez saisir la formule ici. Des variables sont disponibles pour cela, que vous pouvez afficher via le point d'interrogation bleu à la fin de la ligne. Il est également possible de combiner ces variables entre elles et avec du texte brut. 

- **Position dans l'arborescence**<br>
    Si vous n'utilisez pas de tri alphabétique pour les types d'objets dans le menu de l'arborescence sur le côté gauche, vous pouvez créer un ordre personnalisé via le tri. Le tri s'effectue par ordre croissant en fonction des valeurs numériques. 

- **Couleur de l'objet**<br>
    Ici, vous pouvez attribuer une couleur à chaque type d'objet. Ces balises de couleur se trouvent par exemple dans l'explorateur CMDB et également dans la représentation graphique des racks pour rendre l'affichage plus transparent. 

- **Groupe de type d'objet**<br>
    Si vous avez changé d'avis lors de la configuration et avez attribué votre type d'objet à un autre groupe ou si vous avez souhaité déplacer un type d'objet existant dans un autre groupe, vous pouvez ajuster le groupe de type d'objet via cette option. 

- **Catégorie spécifique**<br>
    Vous pouvez choisir facultativement la [catégorie spécifique](../glossary.md) souhaitée et la lier au type d'objet à l'aide d'un menu déroulant. Veuillez noter que les catégories spécifiques sont mutuellement exclusives et qu'une seule catégorie spécifique peut donc être choisie. 

- **Fait sur mesure**<br>
    Les informations **Personnalisées** vous indiqueront si ce type d'objet est déjà disponible dans l'installation standard ou s'il a été créé par un utilisateur. Les types d'objets standard ne peuvent être que masqués et non supprimés. 

- **Emplacement**<br>
    Dans cette sélection, il est possible de définir si les objets de ce type sont censés servir de lieu physique pour d'autres objets. Les objets qui ne sont pas censés servir de lieu physique ne seront pas affichés dans le navigateur d'emplacement. 

- **Maître de relation**<br>
    Chaque [relation d'objet](./object-relations.md) a une direction ou une dépendance. Lors de la modification d'un objet et de la liaison avec un autre, l'objet lié dépend toujours de l'objet en cours d'édition. Cependant, si l'objet lié est un objet dont le type d'objet a été configuré en tant que maître de relation, cet objet assumera alors le rôle de maître dans la relation. 

- **Positionnable dans une baie**<br>
    Ici, vous pouvez déclarer si les objets de ce type peuvent être intégrés dans une baie dans des unités de hauteur spécifiques. Lorsque désactivé, les attributs ne sont pas disponibles pour le positionnement dans la baie. 

- **Affichage dans l'arborescence de menu**<br>
    L'affichage dans l'arborescence de menu peut être désactivé avec cette option. Si vous n'avez pas besoin des types d'objets standard et que vous souhaitez les masquer, ou si vous ne voulez pas que vos types d'objets personnalisés apparaissent dans l'arborescence de menu pour le moment, vous pouvez les masquer pour tous les utilisateurs ici. 

- **Image**<br>
    Ici, vous pouvez sélectionner une image d'objet standard pour la ligne d'information. 

- **Icône**<br>
    Avec cette option, vous pouvez déterminer l'icône qui sera affichée à côté de votre type d'objet dans l'arborescence de menu. Pour cela, vous devez spécifier le chemin de l'icône à partir du dossier d'installation de _i-doit_. 

- **Constant**<br>
    Vous pouvez déterminer une [constante](../glossary.md) qui permet des requêtes de base de données pour le type d'objet. Dans _i-doit_, la formule standard pour cela est **C__OBJTYPE__[NOM]**, tandis que **[NOM]** doit être remplacé par le nom du type d'objet. _i-doit_ génère automatiquement une constante qui reçoit l'horodatage Unix actuel à la place du nom. Remplacez l'horodatage Unix par le nom stylisé du type d'objet (idéalement uniquement des lettres capitales ASCII) pour une meilleure lisibilité (par exemple, pour les rapports SQL).

- **Modèle par défaut**<br>
    Si vous avez déjà créé des modèles en utilisant la fonction [modèle](../efficient-documentation/templates.md), vous pouvez sélectionner un modèle ici qui sera ensuite utilisé pour remplir automatiquement de nouveaux objets. De cette manière, vous pouvez pré-remplir des valeurs qui sont les mêmes pour tous les objets de ce type. Vous pouvez ajuster ces valeurs pré-remplies à tout moment, si nécessaire.

- **Page d'aperçu comme vue standard**<br>
    Avec cette option, vous déterminez si l'ouverture d'un objet de ce type affichera la [page d'aperçu](../glossary.md) ou la catégorie **Général**. Cette option est définie par défaut sur "Non". En la définissant sur "Oui", la catégorie spécifique sélectionnée sera automatiquement ajoutée à la page d'aperçu.

- **Catégories**<br>
    Vous personnalisez votre type d'objet dans cette sélection. Chaque [catégorie](../glossary.md) dont la case est activée sera disponible dans votre type d'objet. Dans la colonne de droite, vous pouvez spécifier quelles catégories seront affichées sur la page d'aperçu. Cette sélection n'est possible que si la page d'aperçu a été préalablement définie comme affichage standard. L'ordre des catégories peut être déterminé par glisser-déposer en utilisant les lignes hachurées.

- **Description**<br>
    Il est possible de laisser des indications et des notes concernant votre type d'objet.

Une fois votre configuration terminée, vous pouvez enregistrer vos paramètres via le bouton **Enregistrer**. Votre type d'objet personnalisé est maintenant disponible dans le groupe de types d'objet choisi.
