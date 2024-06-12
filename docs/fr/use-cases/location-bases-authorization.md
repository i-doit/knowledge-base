# Autorisation basée sur l'emplacement

i-doit permet la définition d'une gestion des droits très fine pour permettre un accès limité à la documentation informatique pour certains groupes d'utilisateurs. Cela inclut également les droits des utilisateurs qui n'affectent que des [emplacements](./locations.md) spécifiques.

Tâche d'exemple
------------

M. Smith est responsable de tous les serveurs à l'emplacement de Düsseldorf. Les autorisations de l'utilisateur de M. Smith doivent être limitées de telle sorte qu'il puisse voir tous les serveurs à l'emplacement de Düsseldorf et créer de nouveaux [objets](../basics/structure-of-the-it-documentation.md) de serveur. Il aura le droit de modifier toutes les [catégories](../basics/structure-of-the-it-documentation.md) de tous les serveurs à l'emplacement de Düsseldorf. Mais les autres serveurs ou objets dans d'autres emplacements ne devraient pas être accessibles pour M. Smith.

Configuration
-------------

Sous **[Administration → Système d'autorisation → Droits → CMDB](../efficient-documentation/rights-management/cmdb-right-management.md)**, vous définissez les droits **Vue** et **Modifier** pour l'**Objet Personne** de M. Smith aux **Conditions**

*   **Objets sous un emplacement** et
*    **Catégorie dans les objets sous un emplacement** 

pour permettre la lecture et l'écriture des objets et de leurs catégories.

Sélectionnez Düsseldorf comme **Paramètre** dans chaque cas.

Vous devez définir le droit **Créer** pour les **Objet(s) de type** Serveur pour permettre la création de nouveaux objets. Pour permettre l'accès aux catégories des objets nouvellement créés, le droit **Catégories dans mes objets créés** doit être défini pour toutes les catégories. En option, vous pouvez également le définir uniquement pour la catégorie **Emplacement** afin qu'une affectation physique devienne possible.

Afin que ces limitations prennent également effet dans le [navigateur d'objets](../basics/object-relations.md), dans la [vue d'emplacement](./locations.md) ainsi que dans l'[Explorateur CMDB](../evaluation/cmdb-explorer/index.md), vous devez définir des paramètres avancés sous **Administration → Paramètres système → Paramètres experts**:

| Clé | Valeur |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

Vous pouvez trouver une explication détaillée de ces paramètres dans l'article [CMDB (Gestion des droits des utilisateurs)](../efficient-documentation/rights-management/cmdb-right-management.md).

Gestion
--------

Le processus de création d'un nouveau serveur par M. Smith est le suivant : il crée un nouveau serveur, modifie la catégorie **Emplacement** et attribue le serveur à un emplacement sous Düsseldorf.
