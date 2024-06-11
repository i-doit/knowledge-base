# Verrouillage d'Objet

Collaborer à la documentation informatique a aussi ses pièges. C'est pourquoi i-doit propose une fonction pour empêcher que les utilisateurs qui apportent des modifications écrasent les modifications effectuées par d'autres utilisateurs. Avec la fonction de verrouillage d'objet, un utilisateur spécifique obtient des permissions d'écriture exclusives. Tous les autres utilisateurs n'ont que des permissions de lecture tant que le verrou est actif.

Fonctionnalité
-------------

Lorsqu'un utilisateur modifie un [objet](../basics/structure-of-the-it-documentation.md), celui-ci est verrouillé pendant une certaine période de temps pour les autres utilisateurs. Même si les autres utilisateurs peuvent consulter l'objet, ils ne peuvent pas le modifier. Une référence en rouge vif est affichée sur la [page d'aperçu](../basics/structure-of-the-it-documentation.md) et dans chaque [catégorie](../basics/structure-of-the-it-documentation.md) de l'objet, indiquant que cet objet est verrouillé et précisant par qui : **- VERROUILLÉ ([Utilisateur]) -**

Dès que le verrouillage de l'objet est activé, un compteur démarre. Lorsque le décompte est terminé, l'objet est à nouveau déverrouillé. Pendant cette période, l'utilisateur devrait avoir enregistré ses modifications afin d'éviter le risque que d'autres utilisateurs écrasent les modifications (ou vice versa).

L'objet sera déverrouillé prématurément une fois que l'utilisateur aura enregistré ses modifications.

[![Fonctionnalité](../assets/images/en/efficient-documentation/object-lock/1-ol.png)](../assets/images/en/efficient-documentation/object-lock/1-ol.png)
[![Fonctionnalité](../assets/images/en/efficient-documentation/object-lock/2-ol.png)](../assets/images/en/efficient-documentation/object-lock/2-ol.png)

Configuration
-------------

Le verrouillage de l'objet est actif pendant 120 secondes dans l'installation par défaut d'i-doit. Cela peut être configuré à **Administration → Paramètres CMDB → Configuration générale → Verrouillage d'objet** :

*   **Activer le verrouillage des objets en mode édition :** Voulez-vous activer le verrouillage de l'objet ?
*   **Délai d'attente :** Temps en secondes pour le compte à rebours.

[![Configuration](../assets/images/en/efficient-documentation/object-lock/3-ol.png)](../assets/images/en/efficient-documentation/object-lock/3-ol.png)

Liste des objets verrouillés
----------------------

Tous les objets actuellement verrouillés sont affichés dans une liste en dessous de la configuration (**Administration → Paramètres CMDB → Configuration générale → Verrouillage d'objet**). Tous les objets verrouillés peuvent être déverrouillés prématurément via le bouton **Supprimer**.

[![Liste des objets verrouillés](../assets/images/en/efficient-documentation/object-lock/4-ol.png)](../assets/images/en/efficient-documentation/object-lock/4-ol.png)
