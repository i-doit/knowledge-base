# Explorateur CMDB

L'explorateur CMDB représente graphiquement les [relations entre les objets](../../basics/object-relations.md). Vous pouvez générer diverses vues des dépendances pour obtenir un aperçu rapide. Ces vues peuvent ensuite être exportées dans différents formats pour une édition ultérieure.

Accéder à l'Explorateur CMDB
------------------------

L'explorateur CMDB peut être accédé à la fois via la barre de menu en haut et à l'intérieur d'un [objet](../../basics/structure-of-the-it-documentation.md) via l'icône associée au-dessus de la liste des [catégories](../../glossary.md).

[![Accéder à l'Explorateur CMDB](../../assets/images/en/evaluation/cmdb-explorer/1-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/1-ce.png)

Lorsque vous ouvrez l'explorateur CMDB via l'icône d'un objet, cet objet est présélectionné en tant qu'objet racine. L'explorateur CMDB est chargé sans aucun objet présélectionné lorsque vous ouvrez l'explorateur CMDB via la barre de menu.

Segmentation de l'Explorateur CMDB
---------------------------------

L'explorateur CMDB est divisé en trois sections, qui ont les rôles suivants:

*   **Zone de contenu**  
    Cette zone concerne la représentation graphique des contenus au centre.
    
*   **Zone d'information**  
    Cette zone est située à gauche de la zone de contenu et peut être utilisée pour obtenir des informations plus détaillées.
    
*   **Barre d'outils**  
    La barre d'outils de fonction est utilisée pour configurer la vue. Elle est située au-dessus de la zone de contenu.
    

Zone de Contenu
---------------

La zone de contenu est située au centre de l'explorateur CMDB. Vous y trouverez tous les contenus et en ce qui concerne la représentation et la portée, les contenus correspondent aux paramètres que vous avez définis. La forme de représentation peut être déterminée à l'aide des [Profils](./profiles-in-the-cmdb-explorer.md). La section présentée dans la zone de contenu peut être déplacée à tout moment. Pour ce faire, cliquez sur la zone libre de la présentation, maintenez le bouton de la souris enfoncé et déplacez l'affichage. Pour afficher plus de relations d'un objet, vous pouvez double-cliquer sur sa tuile. Si d'autres relations existent, elles seront développées. La zone d'information contient des informations supplémentaires sur l'objet sélectionné et est située à gauche de la zone de contenu. L'objet est sélectionné en cliquant simplement sur sa tuile. Dès qu'un objet est sélectionné, le chemin vers l'objet racine est tracé à des fins d'illustration.

[![Zone de contenu](../../assets/images/en/evaluation/cmdb-explorer/2-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/2-ce.png)

Orientation des relations

La direction de l'expansion des tuiles individuelles dépend de l'orientation de la relation. Pour chaque relation, il y a un objet maître et un objet esclave. Une fois qu'une orientation a été choisie, elle ne peut pas être modifiée dans l'explorateur CMDB, ce qui signifie que les tuiles s'étendant vers le bas ne peuvent montrer que des relations qui s'étendraient également vers le bas.

Zone d'information
------------------

La zone d'information est située sur la bordure gauche de l'explorateur CMDB et affiche des informations supplémentaires sur l'objet choisi. Le type d'informations affichées peut être déterminé via le [profil](profiles-in-the-cmdb-explorer.md) appliqué à l'explorateur CMDB. Une fois qu'un objet a été sélectionné, le bouton **Afficher / Masquer le type d'objet** peut être utilisé pour griser tous les [objets de ce type](../../basics/structure-of-the-it-documentation.md). Si vous souhaitez sélectionner un autre objet en tant qu'objet racine, alors le bouton **Définir comme racine** peut être utilisé. De cette manière, la centralisation peut être mise sur l'objet actuellement activé et les relations sont construites autour de cet objet. Via **Ouvrir l'objet**, l'objet est ouvert dans i-doit afin que vous puissiez voir et éditer ses attributs. Les couleurs d'objet pour chaque [type d'objet](../../glossary.md) sont affichées dans la légende. Il est également possible de griser tous les objets d'un type globalement dans l'explorateur CMDB.

[![Zone d'information](../../assets/images/en/evaluation/cmdb-explorer/3-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/3-ce.png)

Barre d'outils
--------------

L'objet qui est affiché de manière centralisée et autour duquel les relations sont construites est sélectionné dans la barre d'outils au-dessus de la zone de contenu. De plus, il est possible de choisir le [profil](profiles-in-the-cmdb-explorer.md) pour la représentation. En plus du **Profil par défaut**, un **Profil Micro** est proposé dans l'état de livraison qui vous permet d'afficher plus d'informations dans une zone plus petite. L'affichage peut également être influencé par le **Filtre de service**. Les conditions pour les objets et les relations à prendre en compte peuvent être définies ici. Les filtres de service peuvent être configurés dans **Extras → Services → Filtre de service**. La profondeur de la représentation et le statut CMDB des objets peuvent être définis comme conditions en plus du type de relation, de son poids et des types d'objets affichés.

L'orientation de l'affichage peut être ajustée en utilisant le bouton **Changer l'orientation**. Ici, il est possible de laisser la représentation être affichée soit de haut en bas, soit de gauche à droite. La présentation de gauche à droite est recommandée pour les visualisations étendues. De plus, il est possible de choisir la forme d'affichage. Via le bouton **Changer la forme d'affichage**, vous pouvez passer de la **Vue arborescente** à une **Vue en réseau**. Dans la vue arborescente, il peut arriver que les objets soient affichés plusieurs fois s'ils sont liés à d'autres objets à différents endroits. Un objet est affiché exactement une fois dans la vue en réseau et toutes les relations sont générées à partir de sa tuile. Pour des représentations de relations plus complexes, la vue arborescente est recommandée. 

{/*examples*/}

Le zoom sur l'écran peut être ajusté en utilisant les boutons **Zoom avant** et **Zoom arrière**. Le centrage avec un niveau de zoom de 100% est effectué via le bouton **Centrer et zoomer à 100%**. Alternativement, vous pouvez également utiliser la molette de la souris pour zoomer.

Le bouton **Exporter** vous permet d'exporter le contenu actuel de l'explorateur CMDB vers d'autres formats, qui peuvent être utilisés de manière externe. En utilisant le bouton **Imprimer**, vous préparerez la section d'écran actuelle pour l'impression. **Plein écran** étendra la zone affichée à une surface plus grande, de sorte qu'il y ait plus d'espace disponible pour la représentation.

[![Barre d'outils](../../assets/images/en/evaluation/cmdb-explorer/4-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/4-ce.png)
