# Conseils et Astuces pour Travailler avec l'API

Pour cet article, nous avons rassemblé de nombreux conseils et astuces concernant la manipulation efficace de l'[interface de programmation d'application (API)](./index.md) d'i-doit.

Ne vous répétez pas (DRY)
---------------------------

Vous n'avez pas besoin de réinventer la roue. Pour contrôler l'API, vous pouvez utiliser les différentes bibliothèques et clients disponibles actuellement. Si vous ne trouvez pas votre langage de programmation préféré, vous pouvez bien sûr remédier à cela.

Soyez Simple, Stupide (KISS)
-----------------------------

Il s'agit d'un paradigme largement connu dans le domaine du développement logiciel. Chaque script pour contrôler l'API ne devrait effectuer qu'une seule tâche. Un outil, une tâche - cette philosophie empruntée au monde Unix s'applique également à la gestion des services informatiques (ITSM). Vous devriez réduire la complexité autant que possible, sinon la maintenance du script sera seulement entravée.

Utilisez l'API au lieu de SQL
----------------------------

i-doit enregistre la plupart des données dans un système de gestion de base de données (MariaDB ou MySQL). Pour un expert en SQL, il est tentant d'accéder directement à ces données. Cependant, soyez prudent : si vous contournez explicitement les mécanismes d'i-doit et modifiez les données via SQL, vous pourriez rencontrer des problèmes entraînant une installation corrompue. Dans un tel cas, le fabricant ne garantit rien. Il est préférable d'utiliser l'API car c'est le seul moyen d'avoir la garantie que, par exemple, les [relations d'objets](../../basics/object-relations.md) ou les [entrées du journal](../../basics/logbook.md), sont créées correctement. 

{ /*examples*/ }

Utilisez l'API au lieu de l'importation de données CSV
-----------------------------------------------------------

Peut-être que vos données étaient initialement simplement organisées dans une feuille de calcul Excel, mais vous vous êtes retrouvé à les maintenir pendant de nombreuses années. Si vous souhaitez remplacer ces données par une documentation informatique structurée, vous pouvez utiliser l'importation de fichiers CSV dans de nombreux cas. Cependant, l'importation de fichiers CSV atteint ses limites lorsque vos feuilles de calcul contiennent non seulement des données brutes, mais aussi des constructions complexes. En ce qui concerne les dépendances entre les colonnes ainsi que les cellules qui stockent des informations complexes, il est conseillé de mettre en œuvre votre propre importation. L'API agit comme une méthode rapide avec laquelle vous pouvez atteindre cet objectif.

Utilisez l'API au lieu de l'exportation de données CSV
------------------------------------------------------

En ce qui concerne l'exportation de données, vous pouvez utiliser l'API de manière flexible. L'API est également une alternative au [gestionnaire de rapports](../../evaluation/report-manager.md) et à l'[exportation de données CSV](../../consolidate-data/csv-data-export.md).

Utilisez l'API pour la collecte de données
------------------------------------------

Il ne fait aucun doute que la collecte automatisée d'informations avec une découverte réseau facilite énormément la maintenance de la documentation informatique. i-doit fournit déjà des interfaces vers [JDisc Discovery](../../consolidate-data/jdisc-discovery.md), [OCS Inventory NG](../ocs-inventory-ng.md) et d'autres. Si une interface est manquante, l'API peut aider.

Utilisez l'authentification à deux facteurs
-------------------------------------------

En plus de la clé API, l'authentification supplémentaire avec un compte utilisateur offre plusieurs avantages : Avec l'authentification à deux facteurs résultante, vous pouvez obtenir une augmentation de la sécurité. De plus, cela facilite la transparence lorsque chaque script utilise son propre compte utilisateur. De cette manière, vous pouvez facilement rechercher avec le [journal](../../basics/logbook.md) quel script a modifié quelles données dans la documentation informatique.

Journalisez Toutes les Appels API
---------------------------------

Très utile pour le [dépannage](../../system-administration/troubleshooting/index.md) : Tous les appels API peuvent être journalisés par i-doit. Les requêtes et les réponses sont stockées dans des fichiers texte pratiques sous log/ dans le répertoire d'installation.

Ne testez pas dans le système productif
------------------------------------

Utilisez une autre installation à des fins de test afin que les données productives ne soient pas mises en danger en raison d'un script défectueux. Il est bien sûr essentiel de toujours effectuer une [sauvegarde](../../maintenance-and-operation/backup-and-recovery/index.md).

Sécurisez la communication
------------------------

Dans de nombreux cas, la documentation informatique contient des données sensibles qui ne doivent pas tomber entre de mauvaises mains. Pour éviter que les clés API, les données d'accès et les données utilisateur ne soient échangées via le réseau en clair, vous pouvez utiliser la communication encodée via TLS (HTTPS) avec un certificat. C'est ainsi seulement que vous pouvez garantir l'intégrité des données et éviter les abus de données. Vous trouverez un exemple de configuration et de nombreux conseils dans l'article "[Sécurité et Protection](../../maintenance-and-operation/security-and-protection.md)".

Sécurisez le script
-----------------

Actuellement, l'API contourne la [gestion des droits](../../efficient-documentation/rights-management/index.md) utilisée dans l'interface Web. Il est d'autant plus important de sécuriser l'accès à l'API et la communication avec l'API (voir ci-dessus). Il est également essentiel de protéger le script contre tout accès non autorisé.

Se Connecter et Se Déconnecter à Nouveau
------------------------------------------

Lorsque le script effectue plusieurs appels API, nous recommandons une connexion explicite. Avec la méthode **idoit.login**, une nouvelle session est créée et peut être réutilisée pour tous les autres appels API. À la fin, vous pouvez mettre fin à la session avec la méthode **idoit.logout**. De cette manière, vous pouvez conserver de nombreuses sessions que PHP supprime progressivement, parfois seulement après des semaines.

Utiliser les Requêtes Groupées
-----------------------------

L'API dispose de ce qu'on appelle des requêtes groupées. Avec un appel API, vous pouvez envoyer plusieurs requêtes simultanément. Cela améliore les performances car les connexions réseau et les frais généraux seront réduits au minimum.

Mais attention - si vous combinez trop de requêtes dans une requête groupée, une installation i-doit faible peut mettre votre système à genoux. Cela entraînerait l'arrêt du processus avec un statut HTTP 500. Dans un tel cas, il serait utile d'allouer plus de mémoire pour les processus PHP.

Automatiser l'Échange de Données
--------------------------------

Lorsque le script qui contrôle l'API de i-doit est en cours d'exécution et fonctionne, vous pouvez automatiser. Un cronjob est rapidement mis en place et facilite la maintenance des données.


Combine API and Events
----------------------

Les [événements](../events.md) dans i-doit sont un bon complément pour l'API. Lorsque vous créez un objet via i-doit ou modifiez une entrée de catégorie, vous pouvez exécuter n'importe quel script. Les données les plus importantes de l'événement sont transmises au script (Quel objet a été créé ? Quels attributs ont été mis à jour ?). Ensuite, le script exécuté peut contrôler l'API afin de demander d'autres données ou de les manipuler.

Un exemple spécifique qui montre l'utilisation à la fois de l'API et des événements est la [provision de machines virtuelles](../../use-cases/vm-provisioning.md).

Publiez Votre Script
-------------------

Si vous avez résolu un problème à l'aide d'un script pour contrôler l'API, cela n'est pas seulement utile pour vous mais peut également aider d'autres utilisateurs d'i-doit. Si vous souhaitez donner quelque chose en retour à la communauté, vous pouvez publier votre propre script sous une licence open-source ou sous une licence gratuite sur GitHub & Co. Nous apprécierions beaucoup une brève notification !

Lisez le Manuel d'Utilisation (RTFM)
------------------------------------

La base de connaissances fournit toutes les méthodes d'API et de nombreux exemples. Si vous ne trouvez pas ce que vous cherchez, vous avez peut-être trouvé quelque chose que nous avons négligé. Dans ce cas également, nous apprécierions un court message avec vos commentaires.

{/*examples*/}
