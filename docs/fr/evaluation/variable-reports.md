# Rapports de Variables

Les rapports de variables sont très utiles pour personnaliser votre installation i-doit selon vos besoins individuels.

Catégories Personnalisées
-------------------------

Beaucoup d'utilisateurs utilisent déjà les [catégories personnalisées](../basics/custom-categories.md). Une des caractéristiques des catégories personnalisées est la possibilité de lier des [objets](../basics/structure-of-the-it-documentation.md).

Pour donner un exemple : Disons que votre entreprise utilise des imprimantes qui sont assignées à certains bureaux. Les salles **1.01** à **1.07** utilisent **Imprimante A**, les salles **1.08** à **1.11** utilisent **Imprimante B**.

Cela peut être documenté avec la catégorie personnalisée **Département**. Cette catégorie est assignée au [type d'objet](../basics/structure-of-the-it-documentation.md) **Imprimante** et définie comme une [catégorie à valeur unique](../basics/structure-of-the-it-documentation.md), pas comme une [catégorie de liste ("Multi-Value")](../basics/structure-of-the-it-documentation.md). L'**attribut Département** est ajouté en tant que **Relation d'Objet (sélection multiple)** avec l'ajout **Accès Partagé**.  

[![Relation d'Objet](../assets/images/en/evaluation/variable-reports/1-vr.png)](../assets/images/en/evaluation/variable-reports/1-vr.png)

Puis passez à l'objet **Imprimante**. Maintenant, vous pouvez sélectionner les salles attribuées dans la catégorie **Département**.

[![Imprimante](../assets/images/en/evaluation/variable-reports/2-vr.png)](../assets/images/en/evaluation/variable-reports/2-vr.png)

Le résultat dans la catégorie est montré dans l'image suivante.

[![catégorie](../assets/images/en/evaluation/variable-reports/3-vr.png)](../assets/images/en/evaluation/variable-reports/3-vr.png)

Vous pouvez également visualiser le résultat avec l'[explorateur CMDB](./cmdb-explorer/index.md).

[![Explorateur CMDB](../assets/images/en/evaluation/variable-reports/4-vr.png)](../assets/images/en/evaluation/variable-reports/4-vr.png)

Vue en Miroir pour Catégorie Personnalisée

------------------------------------

Mais lorsque vous regardez la salle **1.05** maintenant, comment pouvez-vous savoir quelle imprimante est attribuée à cette salle ? Pour cela, vous avez besoin d'une vue en miroir avec laquelle vous pouvez voir quelle imprimante est liée à cette salle. Les rapports de variables fournissent une bonne solution pour de telles requêtes contextuelles.

Pour ce faire, vous configurez un [rapport](./report-manager.md) et une autre catégorie personnalisée. Tout d'abord, vous créez le rapport **Matériel lié au département**. Cochez la case **Rapport variable** et sélectionnez quelques attributs significatifs concernant les imprimantes sous **Sortie**.  

[![Sortie](../assets/images/en/evaluation/variable-reports/5-vr.png)](../assets/images/en/evaluation/variable-reports/5-vr.png)

Le générateur de requêtes offre la possibilité de définir un **Espace réservé** pour tous les liens qui génèrent des relations sous **Conditions**.

Dans notre cas, cela signifie : Le rapport "recherche" les objets dans lesquels l'[ID d'objet](../basics/unique-references.md) de l'objet actuellement sélectionné est répertorié dans la catégorie personnalisée **Département** dans l'attribut **Département**. Mais quel est l'objet sélectionné ? Il n'y a pas d'objet sélectionné dans le contexte du gestionnaire de rapports.

Par conséquent, vous devez toujours sélectionner un objet pour pouvoir remplir le rapport. Vous pouvez y parvenir en créant une catégorie pour le rapport qui exécute le rapport au sein d'un objet. Cela s'appelle **Département**, assigné à l'objet **Salle** et défini comme catégorie à valeur unique. Il y a aussi un attribut non nommé avec le **Type de champ Rapport**. L'ID du rapport mentionné ci-dessus est spécifié sous **Addition**.  

[![Type de champ Rapport](../assets/images/en/evaluation/variable-reports/6-vr.png)](../assets/images/en/evaluation/variable-reports/6-vr.png)

L'identifiant du rapport est contenu dans l'aperçu des rapports déjà définis.  
{/*examples*/}

[![Type de champ Rapport](../assets/images/en/evaluation/variable-reports/7-vr.png)](../assets/images/en/evaluation/variable-reports/7-vr.png)

Maintenant, la nouvelle catégorie est disponible dans les objets de la pièce. Il génère toujours le rapport pour l'objet dans lequel l'utilisateur se trouve actuellement. De cette manière, vous obtenez une vue en miroir de la relation avec le département.  
{/*examples*/}

[![Type de champ Rapport](../assets/images/en/evaluation/variable-reports/8-vr.png)](../assets/images/en/evaluation/variable-reports/8-vr.png)
