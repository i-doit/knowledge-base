# Gestion des droits

Qui est autorisé à lire et à modifier quelles données dans i-doit?  
Cette question fréquemment posée est basée sur l'intention de créer un concept de droits d'utilisateur pour votre propre documentation informatique.  
Toute personne autorisée à se connecter ne devrait pas nécessairement être autorisée à lire ou même à modifier des données sensibles.  
i-doit dispose d'une gestion complète des droits pour protéger votre documentation informatique contre tout accès non autorisé et préserver son intégrité.

Personnes et Groupes de Personnes

Vous pouvez attribuer des droits à des personnes et des groupes de personnes. Lorsque vous attribuez un certain droit à un groupe, toutes les personnes appartenant à ce groupe hériteront de cette autorisation. Les utilisateurs autorisés à se connecter sont enregistrés en tant qu'objets de type **Personne** dans i-doit. Les groupes ont le type **Groupes de personnes**.

!!! success "Créer des groupes"

    Il s'agit d'une approche éprouvée dans le secteur informatique de créer des concepts de rôles non pas pour des utilisateurs individuels mais pour des groupes (souvent appelés rôles). De cette manière, la manipulation est plus facile et plus intelligente car les utilisateurs peuvent être assignés à un ou plusieurs groupes. En conséquence, vous n'avez qu'à configurer les droits en un petit nombre de points.

La configuration par défaut d'i-doit comprend certains objets **Personne** qui sont assignés à des **Groupes de personnes** et ont ainsi des droits prédéfinis :

| Utilisateur | Mot de passe | Groupe | Droits (aperçu uniquement) |
| --- | --- | --- | --- |
| admin | admin | Admin | Tous les droits, également pour l'administration |
| archivar | archivar | Archivar | Lecture et modification |
| auteur | auteur | Auteur | Créer, modifier, [archiver](../../basics/life-and-documentation-cycle.md) et exécuter |
| éditeur | éditeur | Éditeur | Lecture et modification |
| lecteur | lecteur | Lecteur | Lecture |

Les utilisateurs répertoriés héritent de leurs droits à travers les groupes portant le même nom.

!!! success "Connecter les droits à LDAP/AD"

    Comme déjà décrit dans l'article sur [Connexion initiale](../../basics/initial-login.md), il est judicieux d'automatiser les affectations de personnes et de groupes avec la connexion à un [dossier LDAP/Active Directory (AD)](../../user-authentication-and-management/ldap-directory/index.md).

Droits Positifs
---------------

La gestion des droits d'i-doit suit le concept de droits positifs. Cela signifie que vous pouvez attribuer des autorisations à des personnes ou des groupes, mais vous ne pouvez pas les retirer.

Exemple : La personne X est assignée aux groupes **Admin** et **Reader**. Bien que le groupe **Reader** ait uniquement des droits de lecture dans i-doit, la personne X est autorisée à tout faire, car la personne X a également reçu les droits du groupe **Admin** qui est autorisé à tout faire dans i-doit.

Droits Additifs
---------------

De plus, les droits s'ajoutent. Si quelqu'un est assigné à plusieurs groupes, cette personne hérite des droits de tous les groupes. De même, les droits s'ajoutent lorsque des droits sont attribués à la personne et aux groupes correspondants de la personne.

Exemple : La personne X est dans le groupe **Reader** et autorisée à tout lire mais pas à modifier les données dans i-doit. De plus, la personne X obtient le droit de créer des [rapports](../../evaluation/report-manager.md). Pour cette personne, ce droit est ajouté aux autorisations du groupe **Reader**.

Structure Générale de la Configuration
--------------------------------------

Pour chaque module, la configuration est toujours structurée de la même manière, seuls les droits diffèrent. Dans un premier temps, vous sélectionnez un objet du type **Personne** ou **Groupe de personnes** dans le champ **Personne / Groupe de personnes**. Lorsque vous saisissez le titre de l'objet, des objets correspondants seront suggérés. Un clic sur le bouton **Charger les droits** charge la configuration qui est enregistrée pour ce module.

Si une personne hérite des droits de groupes associés, ces droits hérités sont également affichés lorsque les droits pour cet objet de personne spécifié sont chargés. Cependant, les droits hérités ne peuvent pas être modifiés et sont donc affichés en gris.

La configuration dans l'interface graphique Web est structurée sous forme de tableau.

| [![icon](../../assets/images/en/efficient-documentation/rights-management/1-rm.png)](../../assets/images/en/efficient-documentation/rights-management/1-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/2-rm.png)](../../assets/images/en/efficient-documentation/rights-management/2-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/3-rm.png)](../../assets/images/en/efficient-documentation/rights-management/3-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/4-rm.png)](../../assets/images/en/efficient-documentation/rights-management/4-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/5-rm.png)](../../assets/images/en/efficient-documentation/rights-management/5-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/6-rm.png)](../../assets/images/en/efficient-documentation/rights-management/6-rm.png) | [![icon](../../assets/images/en/efficient-documentation/rights-management/7-rm.png)](../../assets/images/en/efficient-documentation/rights-management/7-rm.png) | Condition | Paramètre | Action |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Créer | Lire | Modifier | Archiver | Supprimer | Exécuter | Administrateur | Quel domaine est concerné ? | Paramètres optionnels | [![](../../assets/images/en/efficient-documentation/rights-management/8-rm.png)](../../assets/images/en/efficient-documentation/rights-management/8-rm.png) Supprimer le droit |

Le **Condition** est sélectionné à partir d'un menu déroulant. Les premières colonnes attribuent des autorisations précises pour cette condition. En partie, elles sont affichées en gris et ne peuvent donc pas être activées car il n'a pas de sens d'attribuer des droits pour la condition en question. Les paramètres optionnels dépendent également de la condition. Dans la dernière colonne, vous pouvez effectuer des actions (jusqu'à présent : supprimer des droits).

[![Condition](../../assets/images/en/efficient-documentation/rights-management/9-rm.png)](../../assets/images/en/efficient-documentation/rights-management/9-rm.png)

En cliquant sur le bouton **Nouveau droit**, vous pouvez ajouter une nouvelle ligne au tableau.

!!! success "Droits de test"

    Pour tester les conséquences de la configuration, vous pourriez ouvrir un deuxième navigateur (par exemple, en mode "privé") et vous connecter avec un utilisateur affecté par les changements de configuration. Vous pourriez également générer un utilisateur de test que vous attribuez aux groupes à tester.

Lorsque vous avez terminé avec toutes les configurations souhaitées, activez les droits avec le bouton **Enregistrer**.

!!! attention "Renouveler le cache"

    Il se peut parfois que les droits ne soient pas activés immédiatement, par exemple, parce que les utilisateurs en question sont toujours connectés. Pour activer les nouveaux droits, vous devez renouveler le cache des droits avec **Administration → Outils système → Cache / Base de données → Cache → Effacer le cache d'authentification**. Nous vous suggérons également de renouveler le cache [automatiquement avec un Cronjob régulièrement](../../i-doit-pro-add-ons/api/index.md).

Modules
-------

Afin de maintenir la gestion des droits dans une structure claire, tous les droits sont divisés en modules. Vous pouvez trouver les modules sous **Administration → Système d'autorisation → Droits**.

*   **Administration**
*   **Analyse**
*   **Système d'autorisation**
*   **[CMDB](./cmdb-right-management.md)**
*   **Tableau de bord**
*   **Dialog-Admin**
*   **Documents**
*   **Événements**
*   **Export**
*   **Plan d'étage**
*   **Importation**
*   **Journal**
*   **Maintenance**
*   **Nagios**
*   **Notifications**
*   **Échange d'objets**
*   **Relocaliser-CI**
*   **Gestionnaire de rapports**
*   **Recherche**
*   **Services**
*   **Modèles/ Changements massifs**
*   **VIVA**
*   **Câblage**

Restauration des droits
--------------

Avec **Administration → Système d'autorisation → Réinitialisation du système d'autorisation**, vous pouvez attribuer tous les droits à l'utilisateur avec lequel vous êtes actuellement connecté. Cela signifie que tous les droits disponibles sont attribués à l'objet personne de cet utilisateur. Vous devez saisir les informations d'identification pour le [Centre d'administration](../../system-administration/admin-center.md) pour activer cette fonction.

Désactivation du système d'autorisation
------------------------------------

Vous pouvez désactiver la gestion des droits pour attribuer tous les droits à tous les utilisateurs avec **Administration → Paramètres du système → Paramètres du système** **→ Système d'autorisation**.

Catégorie de configuration d'autorisation
-----------------------------

En plus des types d'objets **Personnes** et **Groupes de personnes**, il existe la catégorie **Configuration d'autorisation**. Cette catégorie offre une configuration fortement simplifiée concernant la gestion des droits des modules mentionnés ci-dessus. Les droits **Lire**, **Modifier**, **Archiver**, **Supprimer**, **Exécuter** et **Administrateur** sont disponibles pour les modules individuels. Cette fonction est similaire à la gestion des droits simple des anciennes versions d'i-doit. Pour voir et appliquer cette catégorie, vous avez besoin du droit **Administrateur** pour cette catégorie dans le module **CMDB**.

[![Catégorie de configuration d'autorisation](../../assets/images/en/efficient-documentation/rights-management/10-rm.png)](../../assets/images/en/efficient-documentation/rights-management/10-rm.png)

!!! attention "Idée générale"

    La catégorie de configuration d'**autorisation** offrait aux utilisateurs de la gestion des droits existante une transition en douceur lors de l'introduction de la nouvelle gestion des droits. Cependant, cette catégorie est maintenant devenue beaucoup moins importante. Par conséquent, vous ne devriez plus l'utiliser. En aucun cas, vous ne devriez mélanger les droits des modules individuels avec les configurations de cette catégorie en même temps.
