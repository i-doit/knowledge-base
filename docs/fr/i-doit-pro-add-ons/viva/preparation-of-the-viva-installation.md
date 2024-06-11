# Préparation de l'installation de VIVA

Avant d'utiliser l'[extension VIVA de i-doit pro](../index.md) pour la première fois, vous devez l'installer.

Exigences système
-------------------

En plus des [exigences système](../../installation/system-requirements.md) et des [paramètres système](../../installation/manual-installation/system-settings.md) généralement applicables à i-doit, cette extension impose les conditions suivantes au système sur lequel elle est installée :

Un i-doit pro exécutable dans les versions actuellement prises en charge par Synetics est installé.  
Le paramètre PHP short_open_tag est activé (On).  
Facultativement, Graphviz (sous forme des binaires dot ou neato) est requis sur le système pour créer un réseau nettoyé et la fonction exec de PHP doit être autorisée à s'exécuter. Cela ne fonctionnera pas sur un système d'exploitation Windows.

Téléchargement, installation, mise à jour, (dés)activation
---------------------------------------

Voir l'article sur les [extensions i-doit pro](../index.md).

Gestion des droits
-----------------

i-doit pro dispose d'une gestion des droits fine et granulaire, qui est également utilisée pour VIVA. Les droits peuvent être attribués par utilisateur/groupe d'utilisateurs sous Administration → Système de droits → VIVA. Les droits suivants sont disponibles:

Lecture d'accès : l'édition n'est pas possible.  
Accès en écriture : lecture, création, enregistrement et suppression d'informations.  
Accès administratif : sans restrictions.  
Pour simplifier les premières étapes, le groupe de personnes éponyme VIVA est créé lors de l'installation, qui dispose déjà de droits administratifs. Si des personnes doivent recevoir ces droits, il suffit de les ajouter à ce groupe de personnes. De cette manière, le groupe de personnes Admin obtient un accès administratif.

!!! attention Note

    Après l'installation, l'utilisateur connecté n'a pas encore l'appartenance au groupe correspondant. Par conséquent, VIVA n'apparaît pas dans le menu Extras. Si l'objet personne correspondant à l'utilisateur a été ajouté au groupe de personnes, l'utilisateur doit se reconnecter une fois pour que le changement prenne effet. Après cela, VIVA apparaît dans le menu Extras.

Migration du module ITGS précédent
-------------------------------------

Déjà depuis i-doit pro en version 0.9.9-6 pro, un module pour documenter les informations pertinentes pour la protection de la base IT a été inclus. VIVA le remplace complètement et l'étend avec de nombreuses nouvelles fonctions. Si une documentation a déjà été effectuée dans l'ancien module, ces données peuvent être transférées à VIVA sans laisser de résidus.

Préparer la migration
-----------------------

Afin de transférer les données du vieux module aussi facilement que possible, les hypothèses suivantes sont faites :

*   Les catalogues IT-Grundschutz EL 11 de 2009 seront utilisés dans l'ancien module.
*   Les catalogues EL 12 de 2011 doivent être utilisés dans VIVA. L'importation doit déjà avoir eu lieu.
*   Dans l'ancien module, le type d'objet groupe ITGS a été utilisé pour la documentation des groupes cibles.
*   Les objets assignés à ces groupes ITGS sont du même type, c'est-à-dire qu'ils correspondent à la définition des groupes cibles et des objets.
*   La documentation pertinente pour l'IT-Grundschutz est extraite des groupes ITGS et des objets dans i-doit qui n'héritent pas de leur documentation d'un groupe ITGS.
*   Ces objets non regroupés sont chacun transformés en groupes cibles.
*   Sur la base du titre du client utilisé en cours d'exécution, une nouvelle fédération d'informations est créée. Les groupes d'informations existants dans VIVA ne sont pas touchés.
*   L'attribution de couche des groupes est basée sur leurs modules liés.

Effectuer la migration
------------------------

Si les exigences sont satisfaites et que l'ancien module n'est pas encore supprimé, la migration peut être lancée via l'interface web en utilisant VIVA → Migration. Vous pouvez choisir entre deux actions :

*   Démarrer la migration ...
*   Supprimer l'ancien module ...

Le premier guide à travers la migration et montre la progression des étapes respectives. Après que l'utilisateur a défini les groupes ITGS comme groupes cibles et les a assignés à une couche IT-Grundschutz, la migration est effectuée. En cliquant sur Terminer, l'utilisateur est redirigé vers la fédération d'informations nouvellement créée.

Facultativement, l'ancien module incluant toutes les données (objets, catégories) peut être supprimé après la migration. Cette étape est irrévocable.

!!! attention "Avant d'effectuer l'une des actions ci-dessus, une sauvegarde de la base de données et de l'installation i-doit devrait être effectuée afin de pouvoir revenir à un état de fonctionnement en cas d'erreur."
