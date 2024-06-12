# Gestion des droits utilisateur via les rôles

Avec la version [1.18.2](../../version-history/release-notes/release-notes-1.18/release-notes-1.18.2.md), nous avons ajouté une nouvelle façon d'attribuer des droits dans i-doit. Il est désormais possible de donner des droits aux utilisateurs ou aux groupes sur des objets en les liant via l'attribution de contact. De plus, les droits peuvent également être liés à l'attribution de certains rôles.

## Créer un groupe de personnes et ajouter un utilisateur au groupe

Pour notre exemple, créons un objet Groupe de personnes dans i-doit "Droits utilisateur sur les objets" et ajoutons un "Utilisateur de test" à l'attribution des membres du groupe.<br>
Créez un objet Groupe de personnes et un objet Personne. Ajoutez la Personne en tant que membre du Groupe de personnes, via la catégorie Membres.

## Attribution des droits

Ouvrez maintenant la ==Administration -> Autorisations utilisateur== et ouvrez par exemple CMDB. Ici, vous insérez le titre de l'objet Groupe de personnes dans le champ `Personne / Groupe` ou sélectionnez un groupe de personnes via le bouton `Sélectionner` et chargez les droits.<br>

### Condition : Objets avec rôle attribué dans l'attribution de contact

Ici, vous pouvez définir les droits appropriés (Afficher, Modifier, Archiver, Supprimer, Exécuter, Administrateur) et ensuite sélectionner parmi les paramètres soit tous les rôles disponibles, soit un ou plusieurs rôles qui devraient être utilisés pour l'attribution des droits.

### Condition: Catégories dans les objets avec rôle assigné dans l'attribution de contact 

Ici, vous pouvez définir les droits appropriés (Créer, Afficher, Modifier, Archiver, Supprimer, Exécuter, Administrateur) puis sélectionner parmi les paramètres soit tous les rôles disponibles, soit un ou plusieurs rôles et définir si toutes les catégories ou seulement certaines doivent être utilisées pour l'attribution des droits.

### Exemple de configuration 

Dans cet exemple, tous les utilisateurs membres du groupe "Droits utilisateur sur les objets" pour les objets où ils sont liés à un contact avec le rôle d'employé obtiennent des droits sur ces objets :

[![Droits assignés](../../assets/images/en/efficient-documentation/rights-management/user-right-management-via-roles/1-urmvr.png)](../../assets/images/en/efficient-documentation/rights-management/user-right-management-via-roles/1-urmvr.png)
