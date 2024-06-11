# Création d'un utilisateur local {/examples}

i-doit fournit déjà quelques utilisateurs locaux avec l'installation par défaut que vous pouvez utiliser pour la [connexion initiale](../../basics/initial-login.md). Cet article décrit comment créer un utilisateur local supplémentaire.

!!! check "LDAP/AD"

    La plupart des options décrites dans cet article ne se limitent pas aux utilisateurs locaux mais peuvent être combinées en relation avec l'interface [LDAP/AD](../ldap-directory/index.md).

!!! check "Urgence"

    Vous pouvez également utiliser des utilisateurs locaux lorsque des interfaces d'autorisation externes, telles que LDAP/AD ou [SSO](../sso-comparison/index.md), ne sont pas disponibles. De cette manière, vous pouvez toujours accéder à la documentation IT en cas d'urgence.

## Création d'un nouvel objet (Personne) {/examples}

Les utilisateurs dans i-doit font partie de la documentation IT, donc tous les utilisateurs sont un [objet](../../basics/structure-of-the-it-documentation.md) du type **Personnes**. Pour créer un utilisateur local, vous créez initialement un nouvel objet **Personnes**.

[![création-d'un-utilisateur-local-personne](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/1-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/1-calu.png)

Le titre de l'objet (l'attribut **Titre** dans la catégorie **Général**) doit contenir le nom complet de l'utilisateur. Le titre de l'objet correspond directement aux attributs **Prénom** et **Nom** de la catégorie **Personnes → Données maîtres**. Par exemple, si le nom de famille d'un utilisateur change, le titre de l'objet sera automatiquement adapté.

[![création-d-un-titre-d-objet-utilisateur-local](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/2-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/2-calu.png)

## Coordonnées de contact

Il est très utile de remplir les détails de la catégorie **Personnes → Données maîtres**, en particulier les attributs **Adresse e-mail** et **Société de téléphonie**. Si cette personne est affectée à un autre objet (par exemple, en tant qu'administrateur d'un serveur), ces deux attributs seront également affichés, permettant ainsi un contact rapide et une communication sans avoir à passer du temps pour la recherche. Ce lien entre la personne et le serveur est effectué dans la catégorie **Personnes → Objets affectés** ou au sein de l'objet serveur dans la catégorie **Affectation de contact**.

[![creating-a-local-user-person](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/3-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/3-calu.png)

Vous pouvez attribuer d'autres adresses e-mail dans la catégorie **Adresses e-mail**.

## Connexion Locale

L'utilisateur a besoin d'un nom d'utilisateur et d'un mot de passe pour se connecter; les deux sont attribués dans la catégorie **Personnes → Connexion**.

[![creating-a-local-user-password](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/4-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/4-calu.png)

Pour créer ou modifier un mot de passe, vous devez cliquer sur le bouton "Changer le mot de passe". Si un mot de passe est défini, le bouton "Définir vide" est affiché.

Vous pouvez prédéfinir la longueur minimale d'un mot de passe utilisateur pour chaque locataire. Cela peut être effectué sous **Administration → Gestion du [Nom du Locataire] → Paramètres pour [Nom du Locataire] → Sécurité → Longueur minimale des mots de passe utilisateur**. Entrez une valeur entière positive dans ce champ.

## Paramètres utilisateur {/examples}

Chaque utilisateur peut adapter i-doit individuellement. Beaucoup de ces paramètres se trouvent sous [**Administration → Paramètres utilisateur**](../../system-administration/administration/user-settings/index.md).

## Informations de connexion {/examples}

Même si un utilisateur n'a pas le droit de modifier la catégorie mentionnée ci-dessus **Personnes → Connexion**, il ou elle peut changer son propre mot de passe via **Administration → Paramètres utilisateur → Informations de connexion**.

[![creating-a-local-user-person](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/5-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/5-calu.png)

## Photo de profil {/examples}

Avec la catégorie **Image d'objet**, vous pouvez télécharger une photo de profil pour chaque utilisateur.

[![creating-a-local-user-person](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/6-calu.png)](../../assets/images/en/user-authentication-and-management/builtin-authentication/creating-a-local-user/6-calu.png)

## Paramètres supplémentaires {/ * exemples * /}

Aussi dans d'autres domaines, l'utilisateur a la possibilité de faire des paramétrages individuels:

*   [Configuration du tableau de bord et des widgets](../../basics/dashboard-and-widgets.md)
*   [Définition du profil dans l'explorateur CMDB comme profil par défaut](../../evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer.md)
*   [Filtres activés dans les listes d'objets](../../basics/object-list/navigation-and-filtering.md)

## Droits de l'utilisateur {/ * exemples * /}

[Les droits](../../efficient-documentation/rights-management/index.md) au sein de i-doit peuvent être attribués par utilisateur - ou mieux - par groupe de personnes. À cette fin, un utilisateur est assigné au groupe correspondant. Ce groupe possède les droits pertinents que l'utilisateur hérite. Un utilisateur peut être assigné à plusieurs groupes et hérite des droits respectifs.
