# Connexion Initiale {/%%/}

i-doit est [installé](../installation/index.md) et vous voulez vous connecter pour la première fois ? Aucun problème ! Cependant, il y a quelques points à garder à l'esprit et c'est pourquoi il vaut la peine de lire cet article.

## Utilisateurs et Groupes par Défaut

!!! danger "Veuillez changer les mots de passe après l'installation !"

Il existe quelques utilisateurs par défaut pour la connexion qui sont assignés à des groupes par défaut et ont donc des [permissions](./../efficient-documentation/rights-management/index.md) prédéfinies.

| Utilisateur | Mot de Passe | Groupe | Permissions (description courte) |
| --- | --- | --- | --- |
| **admin** | **admin** | **Admin** | Tous les droits, également pour l'administration |
| **archivar** | **archivar** | **Archivar** | Lecture et édition |
| **author** | **author** | **Author** | Créer, éditer, archiver et exécuter |
| **editor** | **editor** | **Editor** | Lecture et édition |
| **reader** | **reader** | **Reader** | Lecture |

Les utilisateurs répertoriés reçoivent leurs permissions à travers les groupes du même nom.

## Connexion

Sélectionnez de préférence l'utilisateur **admin** parmi les utilisateurs par défaut mentionnés ci-dessus car la fonctionnalité de cet utilisateur n'est pas restreinte.

[![Connexion](../assets/images/en/basics/initial-login/1-il.png)](../assets/images/en/basics/initial-login/1-il.png)

## Ajouter d'autres utilisateurs et groupes

Chaque utilisateur dans i-doit est un [objet](structure-of-the-it-documentation.md) du type **Personnes**. Après la connexion initiale, nous vous recommandons vivement de configurer une [connexion LDAP](../user-authentication-and-management/ldap-directory/index.md) ou d'autres utilisateurs locaux _et_ de modifier les identifiants des utilisateurs mentionnés ci-dessus. À cette fin, vous pouvez sélectionner l'utilisateur particulier dans le [groupe d'objets](structure-of-the-it-documentation.md) **Contacts** sous le [type d'objet](structure-of-the-it-documentation.md) **Personnes** et modifier les identifiants, ou désactiver la connexion, dans la catégorie **Personnes → Connexion**. En outre, vous pouvez également [archiver](life-and-documentation-cycle.md) les objets **Personnes**. En procédant ainsi, la connexion de ces utilisateurs est refusée.

!!! success "Administrateur local"
    Même si vous utilisez un [serveur de répertoire LDAP ou un annuaire Active Directory (AD)](../user-authentication-and-management/ldap-directory/index.md), il est recommandé de configurer un utilisateur local avec tous les droits. Ainsi, vous pourriez toujours vous connecter en tant qu'administrateur local si le service externe est indisponible.

## Texte de Bienvenue

Lorsque vous souhaitez accueillir les utilisateurs avec un texte pendant le processus de connexion, il est possible d'entrer un texte correspondant dans le [Centre d'administration](../system-administration/admin-center.md) sous **Paramètres système → Connexion → Texte de bienvenue pour la connexion**.

[![Connexion avec texte de bienvenue](../assets/images/en/basics/initial-login/2-il.png)](../assets/images/en/basics/initial-login/2-il.png){/*examples*/}
