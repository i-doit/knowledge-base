# Relations d'Objets 

[Les objets](structure-of-the-it-documentation.md) n'existent généralement pas séparément dans i-doit mais sont en relation les uns avec les autres. Les serveurs sont contenus dans des racks, les administrateurs maintiennent les serveurs, un système d'exploitation avec des logiciels s'exécute sur un serveur... Dans cet article, nous allons élaborer sur les concepts de base des relations d'objets.

## Types de Relations 

Les objets peuvent être dans différents types de relations. Pour clarifier, chaque relation reçoit un type. De nombreux types de relations prédéfinis sont déjà fournis par i-doit dans l'installation par défaut. Une liste de tous ces types peut être trouvée à **Administration → Contenu prédéfini → Types de relation d'objet**.

[![Types de Relations](../assets/images/en/basics/object-relations/1-or.png)](../assets/images/en/basics/object-relations/1-or.png)

| Titre de la relation                 | Description du point de vue de l'objet maître | Description du point de vue de l'objet esclave |
| ------------------------------------ | --------------------------------------------- | ---------------------------------------------- |
| **Service d'administration**          | **est une instance d'administration pour**    | **est géré par**                               |
| **Cartes SIM attribuées**             | **a une carte**                              | **est attribué à**                             |
| **Cartes attribuées**                 | **a une carte**                              | **est la carte de**                            |
| **Sauvegarde**                        | **sauvegarde**                               | **sauvegardé par**                             |
| **Châssis**                           | **inclut**                                   | **est inséré dans**                            |
| **Appartenances à un cluster**        | **est membre de**                            | **a pour membre**                              |
| **Affectation de service de cluster** | **est hôte pour sur**                        | **fonctionne sur**                             |
| **Point de connexion**                | **a une connexion à**                        | **est connecté avec**                          |
| **Connecteurs**                       | **est connecté à**                           | **est connecté avec**                          |
| **Affectation de contact (administre)** | **administre**                              | **est administré par**                         |
| **Affectation de contact (utilisé par)** | **est utilisé par**                         | **utilise**                                    |
| **Affectation de contrat**            | **est le contrat de**                        | **a une affectation de contrat**               |
| **SGBD**                              | **administre**                               | **est configuré dans**                         |
| **Accès à la base de données**        | **est utilisé par**                          | **a accès à la base de données**               |
| **Passerelle de base de données**     | **a une passerelle de base de données vers** | **est une passerelle de base de données**       |
| **Instance de base de données**       | **est hôte pour**                            | **fonctionne sur**                             |
| **Liens de base de données**          | **a un lien de base de données vers**        | **est un lien de base de données de**           |
| **Dépendance**                        | **a une dépendance à**                       | **dépend de**                                 |
| **Plan d'urgence**                    | **a une affectation de plan d'urgence à**    | **est un plan d'urgence pour**                 |
| **Port FC**                           | **fournit un réseau**                        | **le réseau est fourni par**                   |
| **Fichiers**                          | **a une affectation de fichier à**           | **est un fichier pour**                        |
| **Appartenances à un groupe**         | **est membre de**                            | **a pour membre**                              |
| **Siège social (Organisation)**       | **est le siège social de**                   | **est une succursale de**                      |
| **Adresse de l'hôte**                 | **fournit un réseau**                        | **le réseau est fourni par**                   |
| **Interface**                         | **a une dépendance à**                       | **dépend de**                                 |
| **Transport de couche 2**             | **transporte le réseau de couche 2**         | **est transporté par**                         |
| **Affectation de réseau de couche 2** | **a une affectation de réseau de couche 2**  | **est une affectation de réseau de couche 2 pour** |
| **Emplacement**                       | **est l'emplacement de**                     | **est situé à**                                |
| **Appareils logiques (Client)**       | **est connecté à**                           | **est connecté avec**                          |
| **Emplacement logique**               | **est une unité logique de**                 | **est attribué à**                             |
| **Affectation manuelle**              | **a une affectation manuelle à**             | **est manuel pour**                            |
| **Connexions réseau**                 | **est connecté à**                           | **est connecté avec**                          |
| **Système d'exploitation**            | **a un système d'exploitation**              | **est installé sur**                          |
| **Organisation (Organisation)**       | **a pour membre**                           | **appartient à**                               |
| **Organisation (Personnes)**          | **a pour membre**                           | **appartient à**                               |
| **Appartenances à un groupe de personnes** | **a pour membre**                        | **est membre de**                             |
| **Ports**                             | **fournit un réseau**                        | **le réseau est fourni par**                   |
| **Consommateur d'énergie**            | **fournit de l'énergie à**                   | **obtient de l'énergie de**                    |
| **Contrôleur de gestion à distance**  | **est géré à distance par**                  | **est le contrôleur de gestion de**            |
| **Partenaire de réplication**         | **est partenaire de réplication de**          | **a pour partenaire de réplication**           |
| **Composant SOA**                     | **est un composant SOA de**                  | **a un composant SOA**                         |
| **Piles SOA**                         | **a une pile SOA**                          | **est une pile SOA de**                       |
| **Composant de service**              | **est un composant de service de**            | **a un composant de service**                  |
| **Affectation de vérification de service** | **est hôte pour**                         | **fonctionne sur**                             |
| **Accès au partage**                  | **le partage est utilisé par**               | **a un accès au partage de**                   |
| **Affectation de logiciel**           | **est en cours d'exécution**                 | **fonctionne sur**                             |
| **Empilement**                        | **est une pile pour**                        | **est empilé avec**                            |
| **VRRP**                             | **a un membre VRRP**                         | **est un membre VRRP de**                      |
| **Machine virtuelle**                 | **est hôte pour**                           | **fonctionne sur**                             |
| **Hôte virtuel**                      | **est une instance d'administration pour**    | **est géré par**                               |
| **Connexion WAN**                     | **fournit une connexion WAN à**              | **est connecté à WAN**                        |

Ci-dessous la liste des types de relations, un nouveau type peut être créé en utilisant le bouton **Ajouter une nouvelle valeur**. Si vous souhaitez utiliser cette relation dans une catégorie personnalisée, vous devez la définir comme "Implicite".

[![Ajouter une nouvelle valeur](../assets/images/en/basics/object-relations/2-or.png)](../assets/images/en/basics/object-relations/2-or.png)

Les relations d'objets déjà documentées sont répertoriées dans **Extras → CMDB → Relations** selon leur type respectif. Lorsque vous cliquez sur **Tous** dans l'arborescence de navigation à gauche, toutes les relations d'objets sont chargées indépendamment de leur type. Avec de grandes documentations informatiques, cela peut prendre un certain temps pour charger la liste.

[![relations d'objets](../assets/images/en/basics/object-relations/3-or.png)](../assets/images/en/basics/object-relations/3-or.png)

## Objets de Relation

Lors de la création d'une relation entre deux objets, un troisième objet du [type](structure-of-the-it-documentation.md) **Relations** est créé en arrière-plan. Le titre de cet objet se compose du titre de l'objet maître, suivi de la description et du titre de l'objet esclave.

| Objet maître        | Description de la relation | Objet esclave |
| ------------------ | --------------------------- | ------------ |
| PDU-HQ-Intern-01-A | **fournit de l'énergie**    | ESX1         |

L'objet de relation est requis pour enregistrer les caractéristiques de la relation en tant qu'[attributs](structure-of-the-it-documentation.md). Cela inclut :

-   **Type de relation** : voir ci-dessus
-   **Pondération** : voir ci-dessous
-   **Service** (optionnel) : L'objet de relation peut être directement attribué à un service.

Comme il est déjà évident, une relation d'objet se compose d'un objet maître et d'un objet esclave. Il s'agit d'une relation pondérée. L'objet esclave dépend de l'objet maître.

[![Objets de relation](../assets/images/en/basics/object-relations/4-or.png)](../assets/images/en/basics/object-relations/4-or.png)

La direction de la relation (quel objet est le maître et lequel est l'esclave) a des conséquences pour l'[explorateur CMDB](../evaluation/cmdb-explorer/index.md). Les relations d'objet sont affichées de manière récursive soit vers le haut, soit vers le bas dans la vue arborescente. Les objets maîtres se trouvent en dessous des objets esclaves dans le [profil standard](../evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer.md).

## Exigences de licence pour les objets 

Les objets de relation ne nécessitent pas de [licence](../maintenance-and-operation/activate-license.md).

## Catégorie des relations 

Les relations avec d'autres objets sont regroupées dans la catégorie **Relations** [category](structure-of-the-it-documentation.md) par objet. Cette catégorie est attribuée à chaque type d'objet de manière fixe et peut être ouverte via l'icône des flèches.

[![Catégorie des relations](../assets/images/en/basics/object-relations/5-or.png)](../assets/images/en/basics/object-relations/5-or.png)

## Relations implicites versus explicites 

Les relations n'ont pas seulement différents types (voir ci-dessus) mais elles sont également créées de manière implicite ou explicite. Les relations implicites proviennent des catégories. Si la catégorie **Emplacement** est modifiée, par exemple, et qu'un objet qui se trouve plus haut dans la hiérarchie est sélectionné dans l'attribut **Emplacement**, alors la relation implicite de type **Emplacement** sera créée automatiquement en arrière-plan. Cette relation implicite est également affichée dans la catégorie **Relations** à **Extras → CMDB → Relations → Emplacements**.

Si vous souhaitez établir une relation entre deux objets indépendamment des catégories et de leurs attributs, une relation explicite sera créée. Cette relation explicite est créée dans la catégorie **Relations**. L'objet sur lequel vous vous trouvez à ce moment-là est présélectionné en tant qu'**Objet 1**. L'objet avec lequel **Objet 1** doit être mis en relation doit être sélectionné sous **Objet 2**. Vous devez également choisir la direction entre les deux objets. **Dépendance** est sélectionnée comme type de relation par défaut, car elle est déjà définie de manière explicite dans **Administration → Contenu prédéfini → Types de relation d'objet**. Mais vous pouvez également facilement définir une nouvelle relation explicite et l'utiliser immédiatement. Cela peut être effectué via l'icône de feuille, de manière similaire à la procédure avec les champs Dialog+.

[![Relations implicites versus explicites](../assets/images/en/basics/object-relations/6-or.png)](../assets/images/en/basics/object-relations/6-or.png)

Lors de la création d'un nouveau type de relation explicite, le type et les descriptions peuvent être définis à partir des vues d'objet correspondantes.

### Implicite ou explicite?

Alors, que vaut-il mieux : devriez-vous utiliser des relations implicites ou explicites ? La réponse est : les relations implicites. Les catégories et les attributs sont des éléments centraux pour structurer la documentation informatique. Les utilisateurs documentent dans les catégories et c'est également là que les utilisateurs cherchent des informations. Il est donc préférable de documenter les relations non spécifiques du type **Dépendance** de manière explicite dans une catégorie où les relations implicites et explicites sont variées. Les deux possibilités peuvent être évaluées, mais seules les relations implicites sont transparentes. 

## Pondération

Chaque relation reçoit une pondération, comme mentionné ci-dessus. La pondération est spécifiée en tant qu'attribut dans l'objet relation. Des valeurs entre **1** et **10** sont possibles en tant que pondération. Elles expriment à quel point l'objet esclave dépend de l'objet maître. **1** signifie **très important**, tandis que **10** signifie **peu important**. **5** est le juste milieu, il représente **important** et correspond à la valeur par défaut.

Exemple : Une alimentation reçoit son énergie d'un UPS, donc la pondération pourrait être **1 (très important)** car l'alimentation ne pourrait pas fonctionner sans un UPS utilisable. Cependant, si un nœud échoue au sein du cluster web, d'autres nœuds reprennent son travail. Cela signifie que la dépendance aux services de niveau supérieur n'est pas aussi forte et pourrait se situer entre **5 (important)** et **10 (peu important)**. 

Le module d'analyse utilise cette pondération en combinaison avec les services et la [Surveillance du Réseau](../automation-and-integration/network-monitoring/index.md) pour évaluer quels services sont affectés par des dysfonctionnements.

## Relations Parallèles

Outre les relations basées sur la direction avec des objets maîtres et esclaves, il existe également des relations parallèles dans i-doit. Les relations parallèles établissent également un lien entre deux objets, sans exprimer de dépendance mutuelle.

Exemple : Lorsqu'un cluster web avec plusieurs nœuds est documenté dans i-doit, les nœuds agissent de manière indépendante les uns des autres. Seule la fonctionnalité du cluster dépend de tous les nœuds. La catégorie **Membres du Cluster** (ou la [catégorie en miroir](structure-of-the-it-documentation.md) **Appartenances au Cluster**) crée des relations d'objet parallèles entre les membres du cluster en arrière-plan.

Une liste de toutes les relations parallèles se trouve dans **Extras → CMDB → Relations → Relations parallèles**. Elles ne peuvent pas être créées par l'utilisateur, mais sont créées implicitement et automatiquement en arrière-plan.


[![Relations Parallèles](../assets/images/en/basics/object-relations/7-or.png)](../assets/images/en/basics/object-relations/7-or.png)

## Relation d'Objet dans une Catégorie Personnalisée

Les relations d'objets peuvent être documentées dans les [catégories personnalisées](custom-categories.md). Vous devez distinguer entre deux types de champs :

-   **Navigateur d'Objets** : Aucun objet de relation n'est créé. La relation à documenter ici entre deux objets n'est pas répertoriée dans la catégorie **Relations** et l'[explorateur CMDB](../evaluation/cmdb-explorer/index.md) ne traite pas ces relations.
-   **Relation d'Objet** : Ici, seul un type de relation implicite peut être donné comme **Ajout**. Les relations explicites ne sont pas affichées.

## Navigateur d'objets ou relation d'objets ?

Pour les relations implicites et explicites, la même question se pose : quel type de champ est préférable ? Ici, la réponse est également claire : la **Relation d'Objet** a des utilisations supplémentaires et devrait donc être préférée au **Navigateur d'Objets.**

