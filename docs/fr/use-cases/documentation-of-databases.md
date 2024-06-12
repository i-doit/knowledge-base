# Documentation des Bases de Données

Avec la version 1.xx de i-doit, nous avons ajouté une variante supplémentaire qui peut être utilisée pour documenter les bases de données au sein de i-doit.

Les deux modèles diffèrent en ce que l'ancien modèle incluait les trois types d'objets suivants :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/1-dod.png)](../assets/images/en/use-cases/documentation-of-databases/1-dod.png)

**SGBD** - ce type d'objet correspond à celui des applications normales, nous pouvons définir ici quel logiciel de base de données est disponible dans l'entreprise.

**Instance de base de données** - ce type d'objet montre où les SGBD individuels sont installés et quelles instances sont disponibles.

**Schéma de base de données** - ce type d'objet montre les bases de données respectives définies dans chaque instance.

En utilisant i-doit comme exemple, MariaDB serait le SGBD, l'installation sur le serveur i-doit serait l'instance et idoit\_system et idoit\_data seraient les schémas de base de données.

Dans le nouveau modèle, nous adoptons une approche légèrement différente ici. Nous conservons l'objet SGBD, mais ajoutons l'onglet Bases de Données Assignées dans la vue en liste de la catégorie Installation de Base de Données SGBD. Cela permet de voir directement à l'objet SGBD quelles bases de données sont fournies par le logiciel de base de données respectif. Pour rester avec l'exemple de i-doit, l'objet SGBD MariaDB montrerait l'installation sur le serveur respectif et les bases de données idoit\_data et idoit\_system.

Dans le nouveau modèle, les types d'objets schéma de base de données et instance de base de données sont abandonnés et remplacés par une nouvelle catégorie bases de données. L'idée ici est de documenter les bases de données là où elles sont exécutées. Ainsi, si une base de données s'exécute sur un serveur, nous attribuons la catégorie là-bas et la maintenons directement à la ressource. Si la base de données s'exécute sur un cluster, nous attribuons la catégorie aux objets de cluster et documentons là-bas.

La nouvelle catégorie offre une nouvelle vue de la hiérarchie des bases de données qui peut être étendue :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/2-dod.png)](../assets/images/en/use-cases/documentation-of-databases/2-dod.png)


Below _Bases de données -> Bases de données_, nous pouvons maintenant documenter les bases de données respectives s'exécutant sur la ressource :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/3-dod.png)](../assets/images/en/use-cases/documentation-of-databases/3-dod.png)

Below _Bases de données -> SGBD_, nous voyons la connexion à l'objet SGBD respectif auquel le serveur est lié.

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/4-dod.png)](../assets/images/en/use-cases/documentation-of-databases/4-dod.png)


**Migration de la documentation de base de données existante vers le nouveau modèle**

Vous pouvez décider quel type de documentation de base de données convient le mieux à vos besoins. Si vous souhaitez passer du modèle ancien au nouveau, nous proposons une fonction de modération que vous pouvez trouver dans l'administration sous Outils Système -> Base de données de cache :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/5-dod.png)](../assets/images/en/use-cases/documentation-of-databases/5-dod.png)
Après avoir cliqué, vous recevrez un autre message sur l'effet de la migration :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/6-dod.png)](../assets/images/en/use-cases/documentation-of-databases/6-dod.png)

Et lorsque la migration est terminée, un message apparaîtra indiquant si la migration a été réussie :

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/7-dod.png)](../assets/images/en/use-cases/documentation-of-databases/7-dod.png)
