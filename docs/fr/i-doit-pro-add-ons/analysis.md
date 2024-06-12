# Analyse

Le **Module d'Analyse** [complément](../i-doit-pro-add-ons/index.md) permet principalement deux implémentations : D'une part, il examine la qualité des données et la qualité de la documentation et fournit une vue interactive des résultats indiquant l'état déterminé. D'autre part, le complément peut être utilisé pour simuler des pannes. De cette manière, vous pouvez parcourir divers scénarios "Que se passe-t-il si..." et analyser leur impact sur l'infrastructure. En utilisant conjointement l'interface de la solution de surveillance [Checkmk](./checkmk.md), vous pouvez également examiner directement les pannes en direct en ce qui concerne leur effet.

Téléchargement et Installation
------------------------------

Vous pouvez installer ce complément ultérieurement à tout moment. L'article "[Compléments](./index.md)" fournit des descriptions détaillées concernant le téléchargement, l'installation, les mises à jour, etc.

Configuration
-------------

Il n'y a pas de disposition pour une configuration séparée.

Attribution des Droits
----------------------

Vous pouvez définir des [autorisations pour les personnes et les groupes de personnes](../efficient-documentation/rights-management/index.md) via **Administration → Système d'autorisation → Droits → Analyse**. 



| Condition | Description |
| --- | --- |
| **Analytique** | Exécution des analyses |
| **Gérer les profils de qualité des données** | Créer, modifier des profils pour la **Qualité des données** et/ou les supprimer de manière irrévocable |

Simulation d'impact
-------------------

Lorsque vous souhaitez savoir quelles conséquences l'échec d'un certain objet aurait sur les services documentés, vous pouvez utiliser la simulation appropriée sous **Extras → Analyse → Simulation d'impact**. Avec l'onglet de **Sélection manuelle**, vous pouvez sélectionner plusieurs options :

| Option | Description |
| --- | --- |
| **Sélection d'objet** | Sélection d'un ou plusieurs objets en échec (ou que vous souhaitez tester en échec) |
| **Filtre de service** | Limitation de l'analyse à un certain degré/profondeur, certains types d'objets, relations d'objets, etc. ; la configuration se trouve sous **Extras → Services → Filtre de service.** |
| **Type de vue** | Représentation simplifiée de la **Vue arborescente** |
| **Filtre de résultat** | Filtrage ultérieur |

Après avoir cliqué sur le bouton **Démarrer la simulation**, le résultat est affiché sous la section Options : Tout d'abord, il y a une liste des services concernés. Les services qui se trouvent à un niveau supérieur dans la hiérarchie peuvent également être répertoriés ici, en fonction du **Filtre de service** sélectionné. Pour chaque service, le **Poids de l'impact** est indiqué et représenté en vert (échec mineur) ou en rouge (échec majeur) en fonction du degré de gravité. L'évaluation est effectuée en mettant l'accent sur les [relations d'objets](../basics/object-relations.md) affectées. Si un "C" suit le champ numérique, l'objet en échec fait partie d'un cluster.

Pour visualiser l'échec, un arbre de services est construit sous **Vue arborescente**.

[![Vue arborescente](../assets/images/en/i-doit-pro-add-ons/analysis/1-ana.png)](../assets/images/en/i-doit-pro-add-ons/analysis/1-ana.png)

Avec l'onglet appelé **Sélection par rapport**, vous avez la possibilité supplémentaire de choisir les objets qui sont affectés par un échec sur la base d'un [Rapport](../evaluation/report-manager.md).

Impact Live
-----------

Une variante de la simulation d'échec décrite ci-dessus se trouve dans ****Extras → Analyse → Impact live****. Ici, i-doit fait référence à l'interface d'un [Monitoring réseau configuré](../automation-and-integration/network-monitoring/index.md) (par exemple, [Checkmk](./checkmk.md)). Les données cibles à analyser deviennent des données réelles. Si un hôte échoue réellement, vous pouvez maintenant simuler quelles sont les conséquences de cet échec en ce qui concerne les services documentés.

Qualité des données
-------------------

Avec l'élément de menu **Extras → Analyse → Qualité des données**, vous pouvez mesurer dans quelle mesure la documentation informatique est remplie. L'aspiration est que [pour chaque type d'objet visible, chaque catégorie attribuée](../basics/assignment-of-categories-to-object-types.md) à chaque objet soit remplie. C'est la définition de l'objectif de 100%.

Il y a 21 objets du type **Client**. 20 catégories sont assignées à ce type d'objet. Afin d'atteindre l'objectif de 100 %, toutes les catégories doivent être remplies pour les 21 objets. Le pourcentage diminue pour chaque détail manquant.

Vous pouvez afficher des détails supplémentaires pour chaque type d'objet en cliquant sur le bouton **Afficher les informations détaillées**. En cas de données manquantes, vous pouvez générer une liste des objets concernés pour chaque catégorie avec la fonction **Loupe**.

[![Afficher les informations détaillées](../assets/images/en/i-doit-pro-add-ons/analysis/2-ana.png)](../assets/images/en/i-doit-pro-add-ons/analysis/2-ana.png)

Si les types d'objets et/ou les catégories faussent les résultats, vous pouvez les masquer. Ensuite, le résultat est recalculé. Vous pouvez enregistrer ces ajustements dans des profils en cliquant sur le bouton **Enregistrer** et les recharger à tout moment. Choisissez un titre concluant sous **Nom**. Dans **Utilisateur spécifique**, vous pouvez déterminer si seul l'utilisateur respectif peut charger le profil ou si le profil est accessible à tous les utilisateurs. Les profils déjà enregistrés sont affichés dans l'arborescence de navigation de gauche sous **Qualité des données**.

[![Qualité des données](../assets/images/en/i-doit-pro-add-ons/analysis/3-ana.png)](../assets/images/en/i-doit-pro-add-ons/analysis/3-ana.png)

Catalogue d'Objets
--------------

Vous pouvez créer une liste vous montrant quels objets appartiennent à un service. Avec ****Extras → Analyse → Catalogue d'objets****, vous pouvez choisir un objet du type **Service** via **Sélection d'objet**. Ensuite, vous limitez éventuellement l'analyse via le ****Filtre de service****. De manière similaire au [Gestionnaire de rapports](../evaluation/report-manager.md), vous pouvez varier l'affichage des objets en sélectionnant les [attributs](../basics/structure-of-the-it-documentation.md) correspondants des [catégories globales et spécifiques](../basics/structure-of-the-it-documentation.md). En cliquant sur **Charger les données de l'objet**, le résultat est généré dans une vue tabulaire.

[![Catalogue d'Objets](../assets/images/en/i-doit-pro-add-ons/analysis/4-ana.png)](../assets/images/en/i-doit-pro-add-ons/analysis/4-ana.png)

Coûts de Service

Quels sont les coûts pour la prestation d'un service donné ? Cette question peut être répondue avec **Extras → Analyse → Coûts de service** sur la base de la documentation IT. Tout d'abord, vous sélectionnez un objet du type **Service** sous **Sélection d'objet**. Ensuite, vous limitez éventuellement l'analyse via le **Filtre de service**. En cliquant sur le bouton **Calculer les coûts de service**, les données seront analysées et préparées. Le résultat est présenté dans une vue d'ensemble compressée via l'élément **Vue d'ensemble des coûts**.

| Catégorie | Description |
| --- | --- |
| **Coûts de licence** | Voir la catégorie **Affectation de logiciel** |
| **Coûts d'investissement** | Voir la catégorie **Comptabilité** |
| **Dépenses d'exploitation annuelles** | Voir la catégorie **Comptabilité** |
| **Coûts de contrat** | Voir la catégorie **Affectation de contrat** <br> |

La demande maximale en énergie des objets matériels est résumée dans la section **Aperçu divers** (voir la catégorie **Consommateur d'énergie**).

En plus d'un diagramme circulaire illustrant les coûts mentionnés ci-dessus, il y a un détail de la répartition listant les données qui ont été évaluées par **Catégorie** et objet analysé.

[![Coûts de service](../assets/images/en/i-doit-pro-add-ons/analysis/5-ana.png)](../assets/images/en/i-doit-pro-add-ons/analysis/5-ana.png)

Catégorie d'Analyse
-------------------

Une catégorie du même nom **Analyse** est assignée à chaque objet après l'activation de l'extension **Analyse**. Via cette catégorie, vous pouvez accéder directement à la **Simulation d'impact**, où l'objet respectif est déjà présélectionné sous **Sélection d'objet**.


Releases
--------

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.5 | 2024-02-27 | [Tâche] Compatibilité PHP 8.2, nettoyage de l'utilisation des couleurs |
| 1.4 | 2023-11-07 | [Tâche] Utiliser de nouvelles routes pour afficher les images d'objet et de type d'objet / déplacer les fichiers liés à l'extension |
| 1.3.1 | 2023-08.22 | [Amélioration] Compatibilité PHP 8.1<br>[Bug] L'attribution de service n'est pas affichée dans la qualité des données<br>[Bug] Il n'est pas possible de supprimer des catégories dans les profils de qualité des données |
| 1.3 | 2022-09-05 | [Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception |
| 1.2 | 2022-02-21 | [Amélioration] Qualité des données sur une base de rapport  <br>[Amélioration] Implémenter des méthodes API pour le rapport de qualité des données  <br>[Amélioration] Renommer l'extension anglaise en Analyse  <br>[Bug] Le résultat dans le catalogue d'objets est incomplet et partiellement incorrect |
| 1.1.4 | 2020-10-20 | [Bug] Option manquante pour réintégrer les types d'objets dans les profils de qualité des données après leur suppression  <br>[Bug] La qualité des données n'est pas évaluée correctement pour les catégories définies par l'utilisateur |
| 1.1.3 | 2020-05-04 | [Bug] La "Sélection d'objet de rapport" sous "Simulation d'échec" doit changer la source des rapports.  <br>[Bug] Les types d'objets vides génèrent une erreur SQL dans la qualité des données.  <br>[Bug] Lors de l'ouverture de la qualité des données, une erreur SQL est affichée |
| 1.1.2 | 2019-07-05 | [Bug] La simulation d'impact s'interrompt avec une erreur fatale PHP |
| 1.1.1 | 2018-12-05 | [Amélioration] Compatibilité PHP 7.2<br>[Amélioration] Les liens dans le résultat de la simulation d'échec devraient s'ouvrir dans une nouvelle fenêtre de navigateur<br>[Bug] Catalogue d'objets : affichage des attributs incorrect<br>[Bug] Objet "Personnes" : affectation manquante des postes de travail dans la vue détaillée<br>[Bug] Impossible de "Charger les données de l'objet" lorsque aucun objet n'était sélectionné en cliquant sur "Charger les données de l'objet" |
| 1.1 | 2018-07-19 | [Amélioration] Nouvelles visualisations dans le rapport de qualité des données<br>[Changement] La qualité des données n'affiche pas le type d'objet câble<br>[Bug] "Afficher les objets sans données" pour les catégories personnalisées entraîne une erreur SQL<br>[Bug] Erreur d'affichage des informations détaillées dans les catégories personnalisées<br>[Bug] Message d'erreur après avoir cliqué sur le lien d'objet dans la qualité des données |
| 1.0.5 | 2017-07-31 | [Amélioration] Améliorer les performances de la qualité des données<br>[Amélioration] Nouvelle option de calcul des coûts totaux<br>[Bug] La taille des icônes d'objet ne s'adapte pas dans la vue d'ensemble de la qualité des données<br>[Bug] Les coûts de service utilisent une mauvaise devise<br>[Bug] Les icônes définies par l'utilisateur sont mal affichées |
| 1.0.4 | 2017-05-02 | [Bug] Lorsqu'une simulation d'impact est exécutée, un délai d'attente se produit en fonction de la taille de la base de données<br> |
| 1.0.3 | 2017-03-08 | [Changement] Stabilité et performances améliorées lors de l'évaluation de l'arborescence de services internes<br>[Bug] L'invocation des coûts de service affiche une note de défaut<br>[Bug] Les catégories personnalisées ne sont pas évaluées><br>[Bug] Erreur get_currency() lors de l'exécution de la vue du rapport "coûts de service" |
| 1.0.2 | 2015-03-09 |     |
| 1.0.1 | 2014-09-23 | [Bug] Changer le poids d'une relation n'a aucun impact sur la gravité de l'échec<br>[Bug] Les connexions réseau de catégorie montrent une qualité des données de 0% à tout moment<br>[Bug] La baie de catégorie montre une qualité des données de 0% à tout moment |
| 1.0 | 2014-08-20 | Version initiale |

