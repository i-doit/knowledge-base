# Cycle de vie et Documentation

Les composants informatiques viennent et partent. Vous les planifiez, les achetez, les exploitez et les retirez finalement du service. Bingo : Cet article concerne la gestion du cycle de vie. Il joue un rôle important dans la [documentation informatique](../glossary.md), car il peut être utilisé pour suivre l'état qu'un composant a ou devrait avoir. De plus, il devrait être possible d'archiver ou de supprimer la [documentation informatique](../glossary.md) elle-même.

## Cycle de vie des composants informatiques

Le cycle de vie d'un composant informatique est documenté dans l'état de la CMDB. Les états CMD suivants sont disponibles avec une installation i-doit fraîche :

-   **planifié**
-   **commandé**
-   **livré**
-   **assemblé**
-   **testé**
-   **en exploitation (non modifiable)**
-   **défectueux**
-   **inopérant (non modifiable)**
-   **en réparation**
-   **livré de la réparation**
-   **stocké**
-   **mis au rebut**
-   **Statut i-doit (non modifiable)**
-   **Modèle (non modifiable)**

Le **statut de la CMDB** peut être affiché en tant que colonne dans les listes d'objets afin de voir le plus rapidement possible l'état cible d'un objet documenté.

[![État de la CMDB](../assets/images/en/basics/life-and-documentation-cycle/1-ladc.png)](../assets/images/en/basics/life-and-documentation-cycle/1-ladc.png)

!!! success "Planification"

    En représentant le cycle de vie, il est possible d'utiliser _i-doit_ pour la planification. Qu'il s'agisse d'une prochaine grande mise à jour ou d'une relocalisation - la documentation informatique est toujours présente et offre des déclarations valides.

### Définir l'état de la CMDB par objet

Pour représenter le cycle de vie complet d'un [objet](../glossary.md), l'attribut d'état de la CMDB dans la catégorie **Général** est utilisé par [objet](../glossary.md). Si un nouvel objet est créé, il reçoit **en fonctionnement** comme son **état de la CMDB**, s'il n'est pas explicitement défini sur un état différent.

[![Définir l'état de la CMDB par objet](../assets/images/en/basics/life-and-documentation-cycle/2-ladc.png)](../assets/images/en/basics/life-and-documentation-cycle/2-ladc.png)

### Gérer l'état de la CMDB

L'ajout, la modification ou la suppression d'un **état de la CMDB** est effectué via **Administration → Contenu prédéfini → État de la CMDB**. Pour chaque **état de la CMDB**, les informations suivantes sont nécessaires:

-   Nom unique/ [constante de langue (pour la traduction)](../system-administration/localization.md)
-   Constante unique (utile pour utiliser l'[API](../i-doit-pro-add-ons/api/index.md), par exemple)
-   Couleur (utilisée dans les listes d'objets, la catégorie **Général**, dans l'**Explorateur CMDB** et dans de nombreux autres cas)

[![Gérer l'état de la CMDB](../assets/images/en/basics/life-and-documentation-cycle/3-ladc.png)](../assets/images/en/basics/life-and-documentation-cycle/3-ladc.png)

## Cycle de vie de la documentation IT

Outre les objets à documenter, la documentation elle-même peut également être soumise à un cycle de vie. Un artefact de documentation peut être archivé une fois qu'il n'est plus nécessaire. Un artefact peut également être marqué comme supprimé, de sorte qu'une personne responsable de la documentation IT puisse supprimer définitivement cet artefact via la fonction **Purge**.

!!! success "Processus de suppression"

    Il peut être utile pour les environnements plus importants d'établir les processus nécessaires pour l'archivage et la suppression des artefacts de documentation. À quel moment des parties de la documentation doivent-elles être archivées ? Qui peut nettoyer la documentation IT ? Ce genre de questions doit être abordé par l'équipe. Le système de permission d'i-doit fournit les paramètres nécessaires pour attribuer les droits d'archivage ou de purge de parties de la documentation à des utilisateurs spécifiques.

### États 

Presque tous les artefacts de documentation (objets, entrées de catégorie, valeurs dans les [**champs Dialog+**](./dialog-admin.md) etc.) reçoivent un état :

-   **Normal** : Lorsqu'il fonctionne normalement (créer, éditer), chaque artefact reçoit cet état et peut être utilisé n'importe où.
-   **Archivé** : L'artefact est caché dans la [documentation informatique](../glossary.md). Son utilisation ultérieure, par exemple le lien, n'est plus possible.
-   **Supprimé** : L'artefact est censé être purgé mais existe toujours complètement avec toutes les relations dans la documentation informatique. En dehors de cela, l'état est similaire à **Archivé**.

Le cycle prévoit que chaque artefact de documentation reçoive le statut **Normal**. Plus tard, les états seront **Archivés** puis **Supprimés**. Une restauration à l'état précédent respectif est possible à tout moment.

En plus de ces trois états, il existe également des cas spéciaux concernant les objets :

-   **Inachevé** : Cet état est attribué à un nouvel objet qui a été créé mais pas enregistré. Cela se produit, par exemple, lorsqu'un nouvel objet est créé mais que le bouton **Enregistrer** n'est pas pressé. Ces objets ne peuvent être trouvés que via un rapport et peuvent ensuite être utilisés. Vous devriez supprimer régulièrement les objets inachevés via **Administration → Gestion du [Nom du locataire] → Réparation et nettoyage → Supprimer les objets inachevés**. En alternative, les objets inachevés peuvent être supprimés automatiquement. Plus de détails peuvent être trouvés ci-dessous.
-   **Modèle** : Un objet peut être utilisé comme un [modèle](../efficient-documentation/templates.md) pour d'autres objets.
-   **Modifier le modèle** : Un objet peut être utilisé comme modèle de modification pour [changer en masse](../efficient-documentation/mass-change.md).

Si vous souhaitez supprimer définitivement un artefact de documentation, marquez-le d'abord comme **Supprimé** puis utilisez la fonction **Purge**. Cependant, ce n'est pas un état car toutes les données (y compris l'état précédent et les entrées du journal) seront supprimées lors du processus de **Purge**. Cela signifie que l'objet et son existence ne pourront plus être retracés ; vous devez donc utiliser la fonction avec une prudence particulière.

### Archiver des objets, les marquer comme supprimés ou les purger

L'état d'un objet est visible dans la catégorie **Général**. Si vous souhaitez archiver un objet, le marquer comme supprimé ou le purger, vous pouvez le faire via les [listes d'objets](./object-list/index.md). À cette fin, les cases à cocher des objets correspondants sont cochées et l'un des boutons **Archiver**, **Supprimer** ou **Purger** doit être pressé.

Il n'est possible de passer à l'état suivant que s'il est possible. Si un objet est dans l'état **Normal**, il ne sera possible de le changer qu'à l'état **Archivé**. Vous ne pouvez supprimer un objet qu'en utilisant la liste filtrée des objets archivés dans le coin supérieur droit. En utilisant **Recycler**, l'objet revient à son état précédent.


[![object-status](../assets/images/en/basics/life-and-documentation-cycle/4-ladc.png)](../assets/images/en/basics/life-and-documentation-cycle/4-ladc.png)

Il n'y a pas d'autre requête lors de la purge d'un objet sauf si des relations avec d'autres objets existent. 

### Archiver les entrées de catégorie, les marquer comme supprimées ou les purger

Une fonctionnalité similaire à celle des objets existe pour certaines [catégories de liste](../glossary.md) ("Multi-valeur"). Avec cette fonction, vous pouvez archiver les entrées de catégorie, les marquer comme supprimées ou les purger. 

### Suppression simplifiée (Purge rapide)

Pour purger un artefact de documentation, il doit d'abord être archivé et marqué comme supprimé. Pour raccourcir ce cycle, il est possible d'activer le bouton **Purge rapide**. Cela se fait via **Administration → Gestion du [Nom du locataire] → Paramètres pour CMDB → CMDB → Activer le bouton Purge rapide**. De cette manière, vous pouvez purger un objet ou une entrée de catégorie indépendamment de son état. 

### Liste de tous les objets archivés ou marqués comme supprimés

Pour obtenir une liste de tous les objets qui sont archivés ou marqués comme supprimés, vous pouvez utiliser un rapport qui peut être configuré via le générateur de requêtes. 

### Supprimer les objets ou les entrées de catégorie inachevés/archivés/marqués comme supprimés collectivement (**Purge**)

Dans presque tous les cas, les objets inachevés sont indésirables car ils ne sont pas visibles et ne peuvent donc pas être édités. Cependant, les objets archivés ou marqués comme supprimés sont également souvent indésirables. Il en va de même pour les entrées de catégorie. Il est donc conseillé de purger ces artefacts de documentation indésirables. À cette fin, vous pouvez utiliser deux méthodes : la suppression manuelle ou automatique.

#### Suppression manuelle

Vous pouvez supprimer les artefacts via l'interface web. La fonction respective se trouve à **Administration → Gestion de [Nom du locataire] → Réparation et nettoyage → Objets** ou **Catégories**. Après avoir utilisé l'un des boutons fournis, une notification affichant la quantité d'objets/entrées de catégorie que vous êtes sur le point de supprimer sera affichée. Après le processus de suppression, des statistiques sur la quantité d'objets/entrées de catégorie supprimés seront également affichées.

#### Suppression automatisée

Le [contrôleur](../automation-and-integration/cli/index.md) offre également la possibilité de supprimer de manière irrévocable des objets indésirables. Le gestionnaire correspondant s'appelle cleanup_objects. Le paramètre -t détermine le groupe d'objets à supprimer en fonction de leur état :

-   -t 1: supprimer les objets inachevés
-   -t 3: supprimer les objets archivés
-   -t 4: supprimer les objets marqués comme supprimés

Exemple de suppression des objets inachevés :

    sudo -u www-data console.php system-objectcleanup -u admin -p admin -i 1 --objectStatus 3

L'automatisation consiste à exécuter le contrôleur régulièrement via une tâche cron. Un exemple avec d'autres tâches cron importantes peut être trouvé dans [l'article concernant le contrôleur](../automation-and-integration/cli/index.md).

### Changement d'états dans le journal

Les changements d'états sont enregistrés intégralement dans le journal. Seulement lorsque une entrée d'objet/catégorie est purgée, les entrées de journal associées seront définitivement supprimées.
