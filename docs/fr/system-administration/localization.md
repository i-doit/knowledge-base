# Localisation

_Parlez-vous la documentation informatique ?_ L'anglais est et restera la langue standard dans le domaine de la technologie de l'information. Mais comme la diversité enrichit, i-doit prend en charge plusieurs langues. Entre autres, nous vous montrerons comment ajuster les traductions existantes dans cet article.

Langues prises en charge
-------------------------

| Langue | i-doit open | i-doit pro |
| --- | --- | --- |
| Anglais | oui | oui |
| Allemand | non | oui |

La localisation se réfère à l'[interface web d'i-doit](../basics/structure-of-the-it-documentation.md). [Connexion](../basics/initial-login.md), [Centre d'administration](./admin-center.md), [Configuration](../installation/manual-installation/setup.md), [Assistant de mise à jour](../maintenance-and-operation/update.md) ainsi que l'[outil en ligne de commande Controller](../automation-and-integration/cli/index.md) sont en anglais.

!!! info "Support de nouvelles langues"

    i-doit ne peut pas être étendu avec des langues supplémentaires sans toucher au code source. Nous serions heureux d'entendre parler de vous s'il y a des efforts pour traduire i-doit dans une autre langue.

Langue automatique selon les paramètres du navigateur
----------------------------------------------------

Lors de l'envoi d'une requête à un serveur web, les navigateurs web transmettent généralement également les langues préférées de l'utilisateur. Cette information est analysée par i-doit lors de la connexion afin que i-doit soit représenté à l'utilisateur dans la langue respective automatiquement. Vous pouvez influencer ce comportement à **Administration → Paramètres utilisateur → **Présentation** → Sélectionner la langue par navigateur**.

Changement de langue
--------------------

Pendant le travail avec i-doit, il est possible pour chaque utilisateur de passer à une autre langue. Vous pouvez changer la langue en sélectionnant le drapeau correspondant du pays dans la boîte d'administration en haut à droite de l'interface web.

[![Changement de langue](../assets/images/en/system-administration/localization/1-loc.png)](../assets/images/en/system-administration/localization/1-loc.png)

Langue par utilisateur
----------------------

Lorsque l'utilisateur se connecte pour la première fois ([connexion initiale](../basics/initial-login.md)) à i-doit, l'interface en anglais est affichée par défaut. Chaque utilisateur peut définir la langue à utiliser comme standard individuellement. Cela peut être effectué sous **Administration → Paramètres utilisateur → Langue de l'utilisateur**.<br>
Il est important de définir la bonne valeur afin de recevoir, par exemple, des [notifications par e-mail](../evaluation/notifications.md) dans la langue souhaitée, car les modèles d'e-mail sont multilingues.


Constantes de Langue
------------------

Les textes à traduire sont représentés par ce qu'on appelle des constantes de langue dans le code source et les bases de données. Exemple pour le type d'objet **Room** :

| Constante de langue | Anglais | Allemand |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

Seule la constante de langue LC__CMDB__OBJTYPE__ROOM se trouve dans le code source/dans les bases de données. L'utilisateur reçoit cependant la traduction correspondante ("Room" ou "Raum") dans l'interface web de i-doit. Les constantes de langue peuvent être identifiées par le fait qu'elles ne contiennent que des lettres majuscules (A-Z), des traits de soulignement (_) et dans certains cas des chiffres (0-9). Elles commencent toujours par le préfixe LC__.

Avec un appel serveur dans le navigateur, i-doit utilise des tables de traduction. Celles-ci se trouvent dans le chemin d'installation de i-doit à `src/lang`. Il y a une abréviation pour chaque langue, par exemple, de pour l'allemand, en pour l'anglais).

| Fichier | Commentaire | Mise à jour sécurisée ? |
| --- | --- | --- |
| de_custom.example.inc.php | Fichier d'exemple pour des ajustements personnalisés à la langue allemande (est ignoré pour l'interface web) | non  |
| de_custom.inc.php | Ajustements personnalisés à la langue allemande (optionnel) | oui |
| de.inc.php | Langue allemande | non  |
| en_custom.inc.php | Ajustements personnalisés à la langue anglaise (optionnel) | oui |
| en.inc.php | Langue anglaise | non  |

!!! hint "Modification de la traduction"
    Si vous souhaitez modifier la traduction, utilisez ==Administration → Vue des données → [Profils de langue](./administration/data-view/language-profiles.md)== configuration.

!!! warning
    Les modifications apportées aux fichiers src/lang/<Langue>.inc.php sont écrasées lors de la [mise à jour](../maintenance-and-operation/update.md) et ne doivent donc pas être ajustées. Les fichiers personnalisés correspondants doivent être ajustés à la place. Tous les fichiers contiennent du code source PHP qui peut être ajusté facilement. Pour chaque traduction, une nouvelle ligne est écrite en suivant le même schéma :

```conf
$g_langcache['LC__EXAMPLE'] = 'Exemple de traduction';
```

La constante de langue LC\_\_EXAMPLE devient "Exemple de traduction".<br>
Les fichiers personnalisés ne conviennent pas seulement pour de nouvelles traductions mais aussi pour écraser celles existantes.

!!! success "Exclure les langues"

    Afin de fournir aux utilisateurs une seule langue, il peut être utile de remplacer les fichiers de langue inutiles. Si vous souhaitez fournir i-doit uniquement en anglais, par exemple, effectuez les actions suivantes dans la ligne de commande :
    ```
    cd /var/www/html/i-doit # Change to the installation path of i-doit (adjust if needed)
    cd src/lang/ # Change to the folder containing the language files
    cp de.inc.php de.inc.php.bak # You never know ;-)
    cp en.inc.php de.inc.php # Replace german language with the english one
    # Optional, if adjustments have already been made:
    #cp de_custom.inc.php de_custom.inc.php.bak
    #cp en_custom.inc.php de_custom.inc.php
    ```
    Comme cette procédure n'est pas sûre pour les mises à jour, elle doit être répétée après chaque mise à jour.

Exemples
--------

En général, tout texte de l'interface web peut être traduit. Si vous souhaitez savoir quelle constante de langue est utilisée, il peut être utile de rechercher des traductions dans les constantes de langue dans de nombreux cas.

### Groupes d'objets multilingues

Les constantes de langue se trouvent dans la ligne nommée isys_obj_type_group__title de la table appelée isys_obj_type_group dans la base de données du locataire. Si un nouveau [groupe de types d'objets](../basics/structure-of-the-it-documentation.md) est créé, la valeur peut être convertie en une constante de langue dans la base de données. Un groupe de types d'objets existant ne doit pas être renommé dans la base de données. Au lieu de cela, la constante de langue respective doit être traduite à nouveau dans les fichiers personnalisés.

### Types d'objets multilingues

Un [type d'objet](../basics/structure-of-the-it-documentation.md) peut être défini comme localisé à **Administration → Paramètres CMDB → Configuration des types d'objets → [Groupe de types d'objets] → Constante de langue / Titre**. Cela s'applique aussi bien aux types d'objets standard qu'aux [types d'objets personnalisés](../basics/custom-object-types.md).

### Titres d'objets multilingues

Les [titres d'objets](../basics/structure-of-the-it-documentation.md) localisés ne sont pas possibles. Cela entraverait le [référencement non ambigu](../basics/unique-references.md).

### Catégories multilingues

Si la catégorie concernée est une [catégorie standard,](../basics/structure-of-the-it-documentation.md) vous pouvez écraser la constante de langue dans les fichiers personnalisés.

En cas de [catégories personnalisées](../basics/custom-categories.md), le titre de la catégorie est lié à une constante de langue qui est traduite dans les fichiers personnalisés.

### Attributs multilingues

Les [attributs](../basics/structure-of-the-it-documentation.md) par défaut sont traduits via les fichiers de langue. Les constantes de langue se trouvent dans le code source et ne doivent donc pas être ajustées.

Les attributs dans les [catégories personnalisées](../basics/custom-categories.md) peuvent être traduits avec une constante de langue.
