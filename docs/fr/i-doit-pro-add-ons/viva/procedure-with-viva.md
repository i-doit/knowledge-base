# Procédure avec VIVA {/examples}

Gérer les catalogues IT-Grundschutz

Importer des catalogues
-----------------------

La première étape vers la documentation consiste à importer les catalogues actuels d'IT-Grundschutz. Vous serez invité à le faire la première fois que vous démarrez VIVA sous Extras → VIVA. Divers catalogues sont disponibles pour la sélection :

*   Livraison supplémentaire (EL) 15 de 2016 en allemand.
*   EL 14 de 2014 en allemand
*   EL 13 de 2013 en allemand
*   EL 13 de 2013 en anglais
*   EL 12 de 2011 en allemand et
*   EL 11 de 2009 en allemand.

Les catalogues sont disponibles en téléchargement sur le site web du BSI. Selon l'EL, des étapes intermédiaires mineures peuvent être nécessaires pour convertir les catalogues dans le bon format de fichier.

Des étapes intermédiaires sont nécessaires pour l'importation car le format proposé par le BSI ne peut pas être traité directement par VIVA. Les catalogues sont disponibles en téléchargement sur le site web du BSI. Les étapes supplémentaires :

1.  Après le téléchargement : Dézipper le fichier ZIP
2.  Décompresser l'archive auto-extractible (.exe)
3.  Aller dans le dossier GSHB; il y a un sous-dossier DE disponible
4.  Renommer le dossier DE en el15de
5.  Compresser le dossier el15de au format ZIP  

Le fichier ZIP peut maintenant être traité par VIVA. Dans le menu Catalogues, il faut cliquer sur le bouton Importer. Une boîte de dialogue apparaît dans laquelle l'EL souhaité et le fichier ZIP correspondant doivent être sélectionnés. La sélection est confirmée en cliquant sur Démarrer l'importation. L'importation peut prendre plusieurs minutes et ne doit pas être interrompue.

Après l'importation réussie, l'EL apparaît sur la page chargée et peut être utilisé. Si d'autres EL doivent être utilisés, les dernières étapes doivent être répétées.

Personnaliser les catalogues
---------------------------

Les catalogues IT-Grundschutz peuvent être personnalisés individuellement. Cela signifie que de nouveaux modules, dangers et mesures peuvent être créés, que les existants peuvent être adaptés ou supprimés.

Il est également possible d'attribuer des dangers et des mesures à des modules. La spécification d'un niveau de qualification pour une mesure attribuée est prise en compte. De plus, vous pouvez consulter, ajouter et modifier les questions de test qui correspondent aux mesures respectives.

Domaines d'information du modèle
--------------------------------

Un ou plusieurs réseaux d'information peuvent être créés sous l'élément de menu Réseaux d'information. Ils représentent le point de départ pour une documentation plus approfondie. Lors de la création d'un réseau d'information, il est important de spécifier quels catalogues IT-Grundschutz doivent être appliqués au réseau d'information.

Lorsqu'un nouveau réseau d'informations est créé, un groupe cible portant le même nom et un objet cible approprié sont automatiquement créés. Les éléments constitutifs des aspects transversaux de la couche 1 sont appliqués à ce groupe cible. De même, les catégories d'exigences de protection sont remplies avec les exemples de la norme BSI 100-2.

Créer des groupes cibles
------------------------

Dans les groupes cibles, des objets cibles similaires sont regroupés. Ce processus fait partie de l'analyse de la structure (voir norme BSI 100-2, chapitre 4.2). Les groupes cibles apparaissent dans l'arborescence du menu sous les cinq couches d'un réseau d'informations. Chaque groupe cible est initialement assigné à l'une des couches suivantes lors de sa création :

1. Aspects transversaux,
2. Infrastructure,
3. Systèmes informatiques,
4. Réseaux et
5. Applications.
6. Créer un groupe cible

L'appartenance à la couche peut être étendue en assignant des éléments constitutifs d'autres couches. Le groupe d'informations lui-même est assigné à la 1ère couche, ce qui se fait automatiquement lorsqu'un nouveau groupe d'informations est créé. Une exception est le changement du module ancien (migration) : ici, l'assignation de la couche se fait sur la base des modules assignés.

Les groupes cibles des couches 4 Réseaux et 5 Applications se comportent différemment de ceux des autres couches : Les groupes cibles de la couche 4 ne contiennent aucun objet cible, mais consistent en la liaison de deux groupes cibles, qui est documentée dans l'élément Lien de communication. Au lieu de lier deux groupes cibles, un groupe peut alternativement être lié à quelque chose en dehors du réseau d'information. Exemple : Le groupe cible est lié à Internet.

Les groupes cibles de la couche 5 sont étendus par le type d'informations qu'ils traitent. VIVA apporte déjà certains types qui peuvent (et doivent) être post-traités. Il est important de spécifier ici si des données personnelles sont traitées, car cette information sera utilisée à plusieurs reprises dans le processus ultérieur. Ce type n'est donc pas non plus supprimable.

Attribuer des objets cibles
---------------------------

Les objets cibles sont déterminés au sein des groupes cibles. Les groupes cibles des réseaux de la couche 4 sont une exception. Cela fait partie de l'analyse structurelle. VIVA est étroitement lié aux données CMDB d'i-doit à ce stade. Les nouveaux objets cibles sont sélectionnés à l'aide du navigateur d'objets familier d'i-doit.

L'interconnexion avec les données de la CMDB se reflète ailleurs. Par exemple, les contacts (personnes, groupes de personnes, organisations) peuvent être liés partout où cela a du sens.

Héritage du groupe cible
------------------------

Les objets cibles héritent automatiquement des propriétés de leur groupe cible, donc aucune personnalisation supplémentaire n'est nécessaire. C'est la théorie. Cependant, la pratique a montré que certaines propriétés ne correspondent pas toujours de manière synchrone à tous les objets cibles en même temps.

Cela est particulièrement vrai pour la mise en œuvre des mesures. Par conséquent, quelques propriétés qui diffèrent du groupe cible peuvent être enregistrées au sein d'un objet cible, par exemple, pour documenter la date de mise en œuvre, qui peut différer si nécessaire.

!!! attention "Les documents de référence ne respectent pas l'héritage, mais tirent les informations des groupes cibles et non des objets cibles."

Définir les catégories de besoins de protection
----------------------------------------

L'élément Catégories de besoins de protection apparaît sous un réseau d'informations dans l'arborescence du menu. Selon la norme BSI 100-2, Chapitre 4.3.1, les scénarios de dommages sont définis ici à l'aide des catégories de besoins de protection. Lors de la création d'un réseau d'informations, les exemples donnés dans la norme sont adoptés et doivent être adaptés à votre propre organisation.

Déterminer les besoins en protection
--------------------------------------

Dans le cadre de la détermination des besoins en protection, les besoins en protection des groupes cibles individuels sont déterminés. (Voir la norme BSI 100-2, chapitres 4.3.2 à 4.3.5.) Par conséquent, les champs de formulaire correspondants peuvent être trouvés au sein d'un groupe cible.

Une caractéristique spéciale s'applique dans les réseaux de couche 4 : Le besoin en protection des liens de communication est basé sur la criticité attribuée.

Attribution de modules
----------------------

Les modules des catalogues IT-Grundschutz sont attribués aux groupes cibles. (Voir la norme BSI 100-2, Chapitre 4.4.) Les modules contiennent des dangers et des mesures incluant leurs niveaux de qualification, que VIVA prend automatiquement en compte lors de l'attribution d'un module.

Si des modules d'une couche autre que celle attribuée au groupe cible sont sélectionnés, cela entraîne également l'attribution de ce groupe cible à cette autre couche. Dans l'arborescence du menu, ce groupe apparaît donc simultanément dans plusieurs couches.

Lors de la création d'un nouveau réseau d'informations, tous les modules de la couche 1 Aspects généraux sont attribués au groupe cible créé automatiquement.

Implémentation des mesures
---------------------------

Les mesures sont, par définition, conçues pour être mises en œuvre afin de contrer les dangers identifiés. La priorisation est possible en fonction du niveau de qualification attribué à chaque mesure liée. (Voir la norme BSI 100-2, chapitres 4.4 et 4.5.).

En cliquant sur une mesure liée ci-dessous un module attribué à un groupe cible, le statut de sa mise en œuvre peut être documenté en détail.

Vérification des réponses aux questions
----------------------------------------

En règle générale, les mesures sont accompagnées d'une série de questions de vérification qui peuvent être comprises comme une liste de contrôle à cocher. Toutes les questions peuvent être répondues soit par "oui" soit par "non".

Les questions de vérification fournies dans les catalogues sont déjà prises en compte lors de l'importation et sont affichées au sein des mesures. De plus, celles-ci peuvent être modifiées, supprimées ou complétées par de nouvelles.

Les listes de contrôle, composées des questions de vérification, sont disponibles au sein des mesures attribuées aux groupes cibles.

Réaliser une analyse de sécurité supplémentaire
----------------------------------------------

L'analyse de sécurité supplémentaire (voir Norme BSI 100-2, Chapitre 4.6.) est effectuée pour chaque groupe cible. VIVA détecte automatiquement si cette étape est nécessaire en se basant sur les données de l'évaluation des exigences de protection (des connexions de communication) et si une analyse de sécurité supplémentaire est nécessaire en plus de ces informations.
