**Contenu**

*   1 [Profils préconfigurés](./profiles-in-the-cmdb-explorer.md)
*   2 [Création et modification d'un profil](./profiles-in-the-cmdb-explorer.md)

Pour personnaliser la vue, des profils peuvent être créés dans l'[explorateur CMDB](./index.md), offrant ainsi un aperçu optimal des dépendances dans votre [documentation informatique](../../glossary.md).

Profils préconfigurés
----------------------

_i-doit_ propose des profils préconfigurés. Ceux-ci ne peuvent pas être édités directement, mais des copies peuvent être créées et modifiées.

*   **Profil standard** : Toutes les relations sont visualisées. Aucun filtre n'est appliqué. Diverses informations sont affichées pour chaque objet.
*   **Micro profil** : La représentation est réduite aux icônes de type d'objet.
*   **Profil réseau** : Ce profil est utilisé pour la vue en diagramme et n'est donc pas disponible pour la vue en arborescence.

Création et modification d'un profil
------------------------------

Les profils existants peuvent être modifiés ou copiés, et de nouveaux profils peuvent être ajoutés via l'icône de crayon à côté du champ de sélection du profil actif dans la [barre d'outils](./index.md). Le bouton à côté de chaque profil vous permet de définir ce profil comme par défaut, de sorte que ses paramètres soient immédiatement utilisés lors de l'ouverture d'un [objet](../../glossary.md) dans l'explorateur CMDB. Un point vert indique que le profil est le profil par défaut activé.

Les paramètres généraux sont définis dans la partie supérieure de la vue d'édition. Cette vue s'ouvre en cliquant sur l'icône du crayon dans la ligne du profil souhaité. À côté du titre du profil, vous pouvez déterminer si la représentation du chemin vers l'objet racine sera activée, si l'info-bulle doit être affichée et quelle orientation sera utilisée. Un aperçu de la configuration est affiché sur le côté droit des paramètres généraux.

[![Gérer les profils](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/1-pitce.png)](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/1-pitce.png)

La représentation graphique des tuiles est définie dans l'onglet **Options visuelles**. La couleur de mise en évidence et la largeur sont définies là-bas. Les lignes à utiliser sont activées en cochant les cases à cocher. Chaque objet peut avoir jusqu'à huit lignes. La configuration est identique dans chaque ligne. Le contenu de la ligne est sélectionné dans le menu déroulant. Ici, quelques attributs prédéfinis sont disponibles pour la sélection. L'arrière-plan peut correspondre à la couleur de l'objet afin qu'il soit indépendant du [type d'objet](../../glossary.md) ou vous pouvez utiliser une couleur définie personnalisée. Vous pouvez déterminer la couleur de la police ainsi que la mise en forme des caractères. Les options de mise en forme sont définies via les boutons.

[![Options visuelles](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/2-pitce.png)](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/2-pitce.png)

L'onglet **Valeurs par défaut** vous permet de définir des valeurs qui peuvent également être ajustées lors de l'application. Ici, vous pouvez définir la direction et le filtre de service standard ainsi que définir le filtre de type d'objet. Le filtre de type d'objet limite la vue aux types d'objets sélectionnés.

[![Valeurs par défaut](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/3-pitce.png)](../../assets/images/en/evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer/3-pitce.png)

Les informations sur l'objet, qui sont affichées dans la zone d'informations lors de l'activation d'un objet, sont sélectionnées dans l'onglet **Informations sur l'objet**. La sélection se fait via la [catégorie](../../glossary.md) dans le menu déroulant, puis en utilisant l'icône plus à côté de l' [attribut](../../glossary.md) souhaité que vous souhaitez afficher. Les attributs sélectionnés peuvent être supprimés en utilisant à nouveau l'icône moins dans la colonne **Attributs sélectionnés**.
