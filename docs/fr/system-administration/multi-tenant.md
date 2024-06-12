# Multi-Locataires 

_i-doit_ est capable de gérer plusieurs locataires. Cela signifie qu'une installation peut mapper une ou plusieurs [documentations informatiques](../glossary.md) indépendantes. Les cas d'utilisation sont divers : des sous-organisations qui ont besoin de documenter séparément les unes des autres aux sociétés de services informatiques, qui documentent l'informatique client dans des instances dédiées, aux fournisseurs d'hébergement qui fournissent _i-doit_ en tant que service.

!!! info "Licence"

    Pour la capacité de faire fonctionner une installation avec plusieurs locataires, une licence spéciale est requise. Plus d'informations sont disponibles [sur demande](https://www.i-doit.com/en/contact/).

Contexte
----------

Une base de données distincte existe dans _i-doit_ pour chaque locataire. Dans cette base de données, tous les contenus ainsi que les configurations sont enregistrés. De cette manière, diverses documentations informatiques complètement différentes peuvent être maintenues dans une seule instance de _i-doit_. Un échange entre locataires n'est pas prévu. Cette séparation stricte est également la raison pour laquelle le [centre d'administration](./admin-center.md) est disponible en tant qu'instance d'administration de plus haut niveau.

Configuration
-------------

L'administration des locataires se fait dans le centre d'administration. Tous les locataires actuellement créés sont répertoriés dans la section **Locataires**.

[![Configuration](../assets/images/en/system-administration/multi-tenants/1-mt.png)](../assets/images/en/system-administration/multi-tenants/1-mt.png)

Au-dessus de la liste, diverses options sont disponibles :

-   **Ajouter un nouveau locataire** : créer un nouveau locataire
-   **Éditer** : configurer un locataire existant
-   **Activer** : activer un locataire existant, s'il était désactivé auparavant
-   **Désactiver** : désactiver un locataire existant, s'il était activé auparavant
-   **Supprimer** : supprimer un locataire existant de manière **irréversible**

Un locataire est sélectionné via les cases à cocher pour la configuration. Pour activer ou désactiver ou supprimer un ou plusieurs locataires, ils sont sélectionnés.

[![Configuration](../assets/images/en/system-administration/multi-tenants/2-mt.png)](../assets/images/en/system-administration/multi-tenants/2-mt.png)

Pour chaque locataire, vous devez définir certaines propriétés (champs obligatoires):

-   **Titre de l'interface utilisateur du locataire**: nom du locataire (est affiché lors de la connexion, par exemple)
-   **Description**: en dehors de son caractère informel, cette description n'a aucun effet sur la fonctionnalité
-   **Valeur de tri**: entrez l'ordre de tri en tant qu'entier (plus la valeur est basse, plus le locataire est élevé dans la hiérarchie)
-   **Répertoire de cache**: de nombreuses données sont temporairement enregistrées dans _i-doit_ pour des raisons de performance. Pour chaque locataire, un dossier de cache dédié est créé dans le dossier **temp/** dans le chemin d'installation d'_i-doit_.
-   **Paramètres MySQL**: il est utile de nommer la base de données avec le préfixe **idoit_**. Le premier locataire reçoit par défaut le nom de base de données **idoit_data** dans le [processus d'installation](../installation/manual-installation/setup.md).

Limitation d'objets par locataire
----------------------------

Si vous utilisez une licence multi-locataire, vous pouvez définir le nombre maximum d'objets nécessaires sous licence qui sont autorisés à être documentés pour chaque locataire. Cela se fait dans le centre d'administration à **Licences**. Le paramètre **Limite d'objets** (entier) existe là pour chaque locataire.

[![Limitation d'objets par locataire](../assets/images/en/system-administration/multi-tenants/3-mt.png)](../assets/images/en/system-administration/multi-tenants/3-mt.png)

Extensions par locataire
------------------

Dans le processus d'installation/mise à jour des [extensions](../i-doit-pro-add-ons/index.md) vous pouvez choisir si cette action doit être effectuée pour un seul locataire ou pour tous les locataires. Toutes les extensions installées sont affichées par locataire dans le Centre d'administration dans **Modules**. Elles peuvent être (dés)activées par locataire. La suppression des extensions se fait pour tous les locataires.

[![Extensions par locataire](../assets/images/en/system-administration/multi-tenants/4-mt.png)](../assets/images/en/system-administration/multi-tenants/4-mt.png)

!!! attention "Mise à jour d'i-doit"

    Dans le [processus de mise à jour d'i-doit](../maintenance-and-operation/update.md) une invite demandera quelles bases de données de locataires doivent être mises à jour. Toutes sont marquées comme sélectionnées par défaut. Il est fortement recommandé de prendre en compte toutes les bases de données de locataires lors de la mise à jour. Une déviation s'applique uniquement dans des cas spécifiques et bien justifiés (par le support, par exemple).

Administration des utilisateurs
-------------------

L'[administration des utilisateurs](../basics/initial-login.md) est configurée par locataire, ce qui signifie que les objets de personne avec des données de connexion peuvent varier en fonction du locataire.

À l'écran de connexion, on vous demande dans quel locataire vous souhaitez vous connecter si plusieurs locataires sont actifs. Cependant, cela se produit uniquement si les informations d'identification de l'utilisateur sont les mêmes pour plusieurs locataires. Sinon, le locataire pour lequel les informations d'identification sont valides est chargé automatiquement.

[![Administration des utilisateurs](../assets/images/en/system-administration/multi-tenants/5-mt.png)](../assets/images/en/system-administration/multi-tenants/5-mt.png)

Si un [dossier LDAP/Active Directory (AD)](../user-authentication-and-management/ldap-directory/index.md) est lié à l'authentification et à l'autorisation, alors les serveurs configurés seront interrogés les uns après les autres lors de la connexion, pour vérifier si les informations d'identification sont valides. Ensuite, les locataires pour lesquels ces informations d'identification sont valides sont déterminés (voir ci-dessus).

Si [l'authentification unique (SSO)](../user-authentication-and-management/sso-comparison/index.md) est active, un locataire peut être choisi par défaut. Cela se fait à **Administration → Paramètres système → Authentification unique → Locataire par défaut**. Lors du démarrage d'_i-doit_, l'utilisateur est automatiquement lié à ce locataire si les informations d'identification sont correctes.

Changer de locataire
--------------

Vous pouvez passer d'un locataire à un autre sans avoir à vous déconnecter au préalable. La [barre de navigation principale](../basics/structure-of-the-it-documentation.md) affiche l'utilisateur et le locataire que vous utilisez actuellement. En survolant le nom du locataire avec votre curseur, un menu déroulant s'affiche. Ici, les autres locataires sont sélectionnables. En cliquant sur l'un d'eux, l'utilisateur est déconnecté du locataire actuel et connecté automatiquement au nouveau. Cependant, cela ne fonctionne que si les informations d'identification de l'utilisateur sont les mêmes dans les deux locataires.

[![Changer de locataire](../assets/images/en/system-administration/multi-tenants/6-mt.png)](../assets/images/en/system-administration/multi-tenants/6-mt.png)
