# Emplacements 

L'emplacement du matériel et d'autres composants est une partie essentielle de i-doit. Cet article explique la documentation des emplacements et comment vous placez [objets](../basics/structure-of-the-it-documentation.md).

Aperçu
--------

Dans l'installation par défaut, i-doit fournit déjà des [types d'objets](../basics/structure-of-the-it-documentation.md) adaptés à la documentation des emplacements - vous pouvez les utiliser ou les masquer :

*   **Pays**
*   **Ville**
*   **Bâtiment**
*   **Salle**
*   **Rack**

Outre ces types d'objets, il existe des [catégories](../basics/structure-of-the-it-documentation.md) pour chaque objet où vous pouvez stocker l'emplacement :

*   **Emplacement** : Informations sur l'objet qui se trouve physiquement à un niveau supérieur
*   **Objets attribués localement** : Liste des objets qui se trouvent physiquement à un niveau inférieur

Les emplacements sont documentés dans une structure arborescente. Avec cette méthode, vous pouvez éviter une attribution locale multiple d'objets qui est impossible en termes physiques.

Construction du chemin de l'emplacement
--------------------------

En haut se trouve l'objet **Emplacement racine** et tous les autres emplacements sont subordonnés à cet objet. Vous ne pouvez pas supprimer cet objet.

Nous utilisons une imprimante comme exemple, elle se trouve dans une salle de bureau et la salle de bureau est attribuée à un bâtiment :

1.  Créez un bâtiment et attribuez-le à l'**Emplacement racine** via la catégorie **Emplacement**.
2.  Créez une salle et attribuez-la au bâtiment via la catégorie **Emplacement**.
3.  Créez une imprimante et attribuez-la à la salle via la catégorie **Emplacement**.

Avec cette méthode, vous générez un chemin d'emplacement appelé : **Emplacement racine → Bâtiment → Salle → Imprimante**.

[![chemin-des-emplacements](../assets/images/en/use-cases/locations/1-loc.png)](../assets/images/en/use-cases/locations/1-loc.png)

Avec chaque objet d'emplacement, l'objet subordonné associé est affiché dans la catégorie **objets attribués localement**. Vous pouvez également modifier le chemin d'emplacement via cette catégorie.

[![chemin-des-emplacements](../assets/images/en/use-cases/locations/2-loc.png)](../assets/images/en/use-cases/locations/2-loc.png)

Définir un Objet en tant que Lieu
----------------------------

Lorsque vous souhaitez définir un objet - par exemple, une pièce - également en tant que lieu pour d'autres objets, vous devez activer leur type d'objet correspondant. Cela peut être effectué sous **Administration → Paramètres CMDB → Configuration du type d'objet → <Groupe de types d'objets> → <Type d'objet> → Lieu**. Pour les types d'objets mentionnés ci-dessus, l'option est déjà définie sur **Oui**.

Configuration du Chemin du Lieu
----------------------------------

Vous pouvez configurer le chemin du lieu pour chaque locataire.

| Option | Type de données | Valeur par défaut | Description |
| --- | --- | --- | --- |
| **Administration** → Paramètres système → Paramètres du locataire → Interface graphique → Chaîne de séparation des lieux  <br>** | Chaîne | **>** | Quelle chaîne doit être utilisée pour séparer les objets d'un chemin de lieu les uns des autres? |
| **Administration** → Paramètres système → Paramètres du locataire** → Longueurs maximales → Titre de l'objet dans le chemin du lieu  <br>** | Entier positif | **16** | Combien de caractères par objet sont autorisés pour un titre d'objet dans le chemin du lieu? Une chaîne de caractères plus longue est tronquée. |
| **Administration** → Paramètres système → Paramètres du locataire** → Longueurs maximales → Chemin complet du lieu** | Entier positif | **40** | Combien de caractères sont autorisés pour le chemin du lieu? Une chaîne de caractères plus longue est tronquée. |

Positionnement du Matériel dans le Rack
-----------------------------------

Vous pouvez également utiliser des baies de serveurs comme lieux pour [positionner le matériel dans les racks](../evaluation/rack-view.md).

Châssis
-------

Une méthode similaire est utilisée pour équiper les châssis avec les modules correspondants. Cette fonctionnalité est disponible dans les types d'objets

*   **Châssis de Lame** et **Serveur de Lame** ainsi que
*   **Châssis de Commutateur** et **Commutateur** (en tant que module)

La documentation réelle est effectuée dans le dossier de catégorie **Châssis**. En attribuant un module dans la catégorie **Châssis → Appareils attribués**, vous générez également une relation de lieu.

Coordonnées Géographiques
------------------------

Dans la catégorie **Lieu**, vous pouvez stocker des [coordonnées géographiques avec latitude et longitude](./geo-coordinates.md). De cette manière, des liens vers les services de cartographie connus sont générés et l'objet est situé sur leurs cartes.


Vue de l'emplacement
--------------------

Vous pouvez naviguer à travers tous les chemins d'emplacement avec le menu de navigation de gauche sous **Vue de l'emplacement**. Vous pouvez afficher ou masquer la structure arborescente. Un objet ouvert dans la section principale du contenu est mis en surbrillance dans la **Vue de l'emplacement**.

[![locations-standort-ansicht](../assets/images/en/use-cases/locations/3-loc.png)](../assets/images/en/use-cases/locations/3-loc.png)

Emplacements Logiques
---------------------

Un lieu de travail documenté reçoit une personne en tant qu'emplacement logique. Vous pouvez également attribuer des lieux de travail à des emplacements physiques. La **Vue de l'emplacement** (voir ci-dessus) peut représenter des emplacements physiques ou logiques ou une combinaison des deux. Cette option est une [option définie par l'utilisateur](../user-authentication-and-management/builtin-authentication/creating-a-local-user.md).

Plan d'étage
------------

L'extension [Plan d'étage](../i-doit-pro-add-ons/floorplan.md) est adaptée pour créer des plans bidimensionnels sur la base des chemins d'emplacement.

Droits d'utilisateur pour les emplacements
-----------------------------------------

Pour chaque utilisateur ou groupe d'utilisateurs, vous pouvez attribuer des [autorisations d'écriture, des autorisations de lecture et de nombreuses autres autorisations pour les emplacements et les objets subordonnés](./location-bases-authorization.md).
