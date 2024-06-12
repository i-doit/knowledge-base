# Assistants VIVA 

Alors que le chapitre sur la procédure avec VIVA décrit une manière manuelle de documenter toutes les informations pertinentes pour l'IT-Grundschutz, l'extension VIVA comprend un grand nombre de assistants pour rendre ce processus partiellement automatisé. Les assistants analysent les données dans VIVA et dans la CMDB de i-doit à l'avance pour générer des suggestions que l'utilisateur peut ensuite éditer et/ou adopter. Les interrelations complexes au sein du réseau d'informations deviennent ainsi visibles. L'utilisateur a donc la possibilité de documenter plus rapidement et plus confortablement.

Les assistants se trouvent en dessous de chaque réseau d'informations sous forme de boutons dans les barres d'actions et de navigation respectives. Lorsqu'un assistant est appelé, une fenêtre contextuelle s'ouvre qui s'intègre parfaitement dans l'interface VIVA. Les assistants fonctionnent tous selon un schéma similaire :

1. Analyser les données de VIVA et/ou de la documentation IT de i-doit.
2. Compiler des suggestions et les préparer visuellement.
3. Post-traitement des propositions par l'utilisateur.
4. Enregistrer ou rejeter les propositions par l'utilisateur.

Les assistants soutiennent un processus étendu qui parcourt une partie significative de la documentation. Ce processus est expliqué comme une procédure possible dans le chapitre Exemple d'un flux de travail possible.

Les fonctionnalités spécifiques des différents assistants sont discutées ci-dessous. Ils sont divisés en assistants de groupes cibles et en assistants d'exigences de protection.

Assistants de groupes cibles
--------------------

Ce type d'assistant suggère des groupes cibles adaptés en fonction des données existantes. De nouveaux groupes cibles avec un numéro et une désignation IT-Grundschutz peuvent ainsi être créés de manière pratique. Les suggestions peuvent être rejetées ou, si approprié, étendues. Les assistants individuels sont expliqués plus en détail ci-dessous. La séquence se réfère à la procédure possible décrite dans l'annexe Exemple d'un flux de travail possible. Les assistants se trouvent dans les couches respectives.

Assistant de Service IT (Couche 5 Applications)
----------------------------------------

Cet assistant analyse les CI de type Service dans la documentation IT de i-doit, plus précisément : la catégorie Composants de Service. Les composants sont analysés sous différents angles et, si nécessaire, ajoutés à la liste des objets cibles à proposer. Une approche récursive est utilisée. Les CI suivants sont suggérés s'ils sont trouvés :

*   Le service lui-même
*   Services subordonnés ; leurs composants sont analysés tour à tour
*   CIs logiciels
*   Logiciels installés des composants (basés sur la catégorie d'attribution de logiciel, c'est-à-dire les CIs de type application, service système, système d'exploitation, etc.)
*   Logiciels installés (basés sur l'objet de dépendance)
*   Membres des groupes d'objets
*   Membres des clusters
*   Services de cluster

Même si aucun CI correspondant n'est identifié, une proposition est générée à partir du service. Le résultat global de l'analyse - et donc de la proposition - se compose d'une liste de services dont les noms (composés du titre de l'objet) sont utilisés pour les identifiants de groupe, et éventuellement des CIs correspondants qui répondent aux critères de la couche, c'est-à-dire représentent une application au sens large.  
**Exemple** : Dans la documentation informatique de i-doit, il y a un objet de type Service appelé "Web". Dans sa catégorie de composants de service, trois objets sont liés : un objet logiciel de type Applications ("Serveur HTTP Apache"), un objet de type Serveur ("Serveur Web") sur lequel une application est installée (catégorie Attribution de logiciel ; à savoir "Shop"), et un objet de Relation (qui représente une attribution de logiciel ; à savoir "nginx exécuté sur un proxy inverse"). À partir de cela, la proposition pour un groupe cible est générée : Le nom correspond au service, donc "web". L'application "Serveur HTTP Apache", "Shop" et "ngnix" sont pris comme objets cibles liés.

Assistant d'Application (Systèmes IT de Couche 3)
---------------------------------------

Cet assistant est utile pour suggérer des groupes cibles à partir de la couche des systèmes IT. Il utilise des données de la couche 5 Applications. S'il existe des groupes cibles dont les objets cibles ont une relation avec des objets cibles potentiels de cette couche, ils sont regroupés et suggérés comme un ou plusieurs groupes.

**Exemple** : La couche 5 Applications contient le groupe "A 1 Web". L'objet cible "Serveur HTTP Apache" y est contenu, ce qui résulte de l'objet du même nom dans la CMDB. Cet objet (logiciel) est installé sur un serveur ("Serveur Web") (catégorie Installation ou Attribution de logiciel). Ce serveur est donc adapté en tant qu'objet cible pour un groupe dans la couche 3 des systèmes IT. Si cet objet cible n'a pas encore été attribué à un groupe cible, la proposition est générée pour créer un groupe cible qui contient le CI "Serveur Web".

Assistant du Système Informatique (Infrastructure de Couche 2)
--------------------------------------------------------------

Les bâtiments et les salles contiennent des composants matériels. S'il existe des groupes cibles correspondants pour le matériel dans les systèmes informatiques de couche 3, il est conseillé de regrouper également ces bâtiments et salles dans des groupes cibles. Cet assistant s'occupe de cela. Il analyse les affectations de localisation des objets cibles déjà existants de la couche 3 et génère des suggestions de groupes cibles à partir de l'infrastructure de couche 2. Ici, tous les objets cibles de la couche 3 sont pris en compte qui ont une affectation de localisation mais dont la localisation n'a pas encore été enregistrée en tant qu'objet cible d'un groupe dans la couche 2. Tous les objets conteneurs sont considérés comme des objets cibles de la couche 2, c'est-à-dire des objets dont le type d'objet est adapté comme emplacement. Les suggestions sont récursives, par conséquent toute la chaîne d'affectations de localisation est prise en compte (à l'exception de "l'emplacement racine").

**Exemple** : Dans les systèmes informatiques de couche 2, le groupe cible "Serveur Web S 1" existe, auquel l'objet cible "Serveur Web" est assigné. Ce serveur est situé dans la salle "Salle des serveurs I". La salle se trouve dans le "Bâtiment principal". Si ce n'est pas déjà fait, l'assistant suggère de créer un groupe cible qui inclut la salle et le bâtiment.

Assistant du Système Informatique (Réseaux de Couche 4)
------------------------------------------------------

Dans la documentation informatique d'i-doit, il existe de nombreuses façons de documenter les connexions entre deux objets. L'une des plus essentielles est la connexion via les ports réseau. De cette manière, des infrastructures réseau entières peuvent être modélisées jusqu'au moindre détail. Cet assistant utilise ces données pour suggérer des connexions de communication entre les groupes cibles. Ces groupes cibles proviennent tous des systèmes informatiques de couche 3. En conséquence, l'assistant analyse les objets cibles de la couche 3 qui correspondent à un objet dans la CMDB qui a des entrées dans la catégorie Ports Réseau. Comme dans la catégorie Aperçu des Ports, il peut y avoir une connexion entre deux objets ou plus avec un début (l'objet lui-même), des objets intermédiaires (par exemple, des composants passifs tels que des panneaux de brassage) et un objet final qui est utilisé pour une analyse ultérieure. S'il existe un objet cible dans les systèmes informatiques de couche 3 pour cet objet final, il est examiné si cet objet cible est assigné à un groupe cible qui n'a pas encore de lien de communication avec le groupe cible de l'objet de départ. Si tel est le cas, les deux groupes cibles sont suggérés comme liens de communication.

Les liens de communication mènent finalement à un "réseau nettoyé" qui abstrait des détails et ne permet que les informations essentielles pour maintenir la clarté. Par conséquent, il est également nécessaire d'abstraire de la richesse des détails dans les données de la CMDB, que le wizard tente de soulager l'utilisateur.

**Exemple**: Un objet de type Serveur avec la désignation "Serveur Web" appartient en tant qu'objet cible au groupe cible "S 1 Serveur Web" (systèmes informatiques de couche 3). Le groupe cible "SW 1 Switch" existe également dans cette couche avec l'objet cible "Switch I", derrière lequel l'objet du même nom est caché dans la CMDB. Dans la CMDB, les deux objets sont connectés via la catégorie de port. Le fait que des composants passifs tels que des panneaux de brassage soient interposés entre les deux n'a également aucun effet. Si les deux groupes cibles n'ont pas encore de lien de communication commun dans les réseaux de couche 3, le wizard en suggérera un.

Wizard du système informatique (applications de couche 5)
-------------------------------------------------------

Ce wizard procède de manière analogue au wizard des applications (systèmes informatiques de couche 3) : Sur la base des groupes cibles de la couche 3, des suggestions de groupes cibles dans les applications de la couche 5 sont générées. À cette fin, la catégorie Affectation de logiciel dans la CMDB d'i-doit est utilisée.

Wizard d'infrastructure (systèmes informatiques de couche 3)
-----------------------------------------------------------

Similaire au wizard précédent, ce wizard se comporte de la même manière que le wizard du système informatique (infrastructure de couche 2). Les groupes cibles de l'infrastructure de couche 2 sont analysés pour voir si des groupes cibles de couche 3 peuvent en être générés. La catégorie Affectation de localisation dans la CMDB d'i-doit est utilisée à cette fin.

Wizards des besoins de protection
---------------------------------

Les wizards de ce type font des suggestions sur la manière dont le besoin de protection devrait être conçu. À cette fin, les groupes cibles associés sont analysés, ce qui entraîne une héritage du besoin de protection tel que suggéré dans la norme BSI. (Voir Norme BSI 100-2, Chapitre 4.3 Détermination des besoins de protection.) En bref, la classe de protection la plus élevée (normale, élevée, très élevée) est héritée pour chaque valeur de base (confidentialité, intégrité, disponibilité). Les exemples dans les sections suivantes illustrent le principe.

Les sorciers sont situés au sein des groupes cibles pour aider directement à déterminer les besoins de protection respectifs. Si le besoin de protection doit être traité pour plusieurs groupes cibles en même temps, les sorciers sont situés au sein des couches. Dans ce qui suit, le sorcier respectif d'une couche est discuté. Des suggestions peuvent être générées pour les couches 2 infrastructure et 3 systèmes informatiques.

Sorcier des Besoins de Protection (Couche 3 Systèmes informatiques).
---------------------------------------------

Tout comme le Sorcier des Applications (couche 3 Systèmes informatiques), les groupes cibles de la couche 5 applications sont analysés pour déterminer s'ils sont liés à un groupe spécifique (ou des groupes) de cette couche. Ici, les informations d'attribution/installation de logiciels sont utilisées.

**Exemple**: Le groupe cible "Site Web" existe dans la couche 5 Applications. Le besoin de protection est défini comme suit :

*   Confidentialité : normale
*   Intégrité : normale
*   Disponibilité : très élevée

De plus, le groupe cible "Forum" existe dans la même couche avec le besoin de protection défini comme suit :

*   Confidentialité : élevée
*   Intégrité : normale
*   Disponibilité : élevée

Dans la couche 3 Systèmes informatiques, il y a le groupe cible correspondant "Serveur Web" sur lequel le site web et le forum sont hébergés. Le sorcier suggère maintenant le besoin de protection suivant :

*   Confidentialité : élevée
*   Intégrité : normale
*   Disponibilité : très élevée

Sorcier des Besoins de Protection (Couche 2 Infrastructure)
------------------------------------------------

Tout comme le Sorcier des Systèmes Informatiques (Couche 2 Infrastructure), l'attribution de site est analysée pour déterminer les besoins de protection d'un groupe cible (ou des groupes) dans la Couche 2 qui est lié à un groupe cible dans la Couche 3 Systèmes informatiques.

**Exemple**: Il y a un groupe cible "salle des serveurs" dans la couche 2. Il y a deux serveurs dans cette salle, qui sont couverts par les groupes cibles "serveur de messagerie" et "serveur web" dans la couche 3.

Besoin de protection du "serveur de messagerie" :

*   Confidentialité : très élevée
*   Intégrité : élevée
*   Disponibilité : très élevée

Besoin de protection du "Serveur Web" :

*   Confidentialité : élevée
*   Intégrité : normale
*   Disponibilité : très élevée

Selon l'attribution de l'emplacement, le sorcier suggère l'exigence de protection suivante pour "Salle des serveurs":

*   Confidentialité : très élevée
*   Intégrité : élevée
*   Disponibilité : très élevée

