# Champs d'attribut

Maintenant que vous êtes familiarisé avec la [structure de la documentation IT](structure-of-the-it-documentation.md), examinons de plus près les champs d'attribut fournis par i-doit dans l'interface Web.

## Aperçu

Chaque attribut pouvant être édité est représenté par un champ de formulaire. Cela s'applique aussi bien aux catégories standard qu'aux [catégories personnalisées](./custom-categories.md). Presque chaque champ d'attribut peut être [déclaré comme champ obligatoire et/ou associé à des options de validation](../efficient-documentation/validation-and-mandatory-fields.md).

[![Aperçu](../assets/images/en/basics/attribute-fields/1-af.png)](../assets/images/en/basics/attribute-fields/1-af.png)

Les attributs qui ne peuvent pas être édités n'ont pas de champ d'attribut dans la vue d'édition ou ils ont uniquement un champ avec une option en lecture seule.<br>
Un exemple d'un attribut créé dynamiquement sans champ d'attribut est ==Nom d'hôte (FQDN)== dans la catégorie ==Adresse de l'hôte==. ==Nom d'hôte (FQDN)== est composé des attributs ==Nom de l'hôte== et ==Domaine DNS==.

{/*examples*/}

[![FQDN](../assets/images/en/basics/attribute-fields/2-af.png)](../assets/images/en/basics/attribute-fields/2-af.png)

Un exemple de champ d'attribut en lecture seule est l'==Identifiant d'objet== qui est généré automatiquement.

[![Identifiant d'objet](../assets/images/en/basics/attribute-fields/3-af.png)](../assets/images/en/basics/attribute-fields/3-af.png)

## Champs de texte (Une ligne)

Vous pouvez saisir n'importe quel texte souhaité dans les champs de texte à une seule ligne. La longueur des caractères est limitée à 255 caractères. Un exemple est le ==Numéro de série== dans la catégorie ==Modèle==.

[![Champs de texte à une ligne](../assets/images/en/basics/attribute-fields/4-af.png)](../assets/images/en/basics/attribute-fields/4-af.png)

## Éditeur HTML/ Champs de texte multilignes

Les champs de texte multilignes peuvent contenir n'importe quel texte souhaité sur plusieurs lignes. La longueur des caractères est limitée à environ 65000 caractères. À partir d'un champ de texte simple, vous pouvez passer à un éditeur HTML pour formater votre texte.<br>
Vous pouvez [activer l'Éditeur ==WYSIWYG== dans l'Administration](../system-administration/administration/tenant-management/settings-for-tenant.md#cmdb), WYSIWYG signifie "What You See Is What You Get".<br>
L'éditeur HTML propose également d'autres options de formatage que vous pouvez activer via ==[Activer toutes les fonctions de l'éditeur WYSIWYG](../system-administration/administration/tenant-management/settings-for-tenant.md#cmdb)==.<br>
Presque chaque entrée de catégorie a l'attribut Description à la fin qui est présenté par défaut comme un éditeur HTML.


[![Champs de texte multilignes de l'éditeur HTML](../assets/images/en/basics/attribute-fields/5-af.png)](../assets/images/en/basics/attribute-fields/5-af.png)

## Champ de dialogue (Menu déroulant)

Le champ de dialogue est un champ de sélection déroulant. Les valeurs parmi lesquelles vous pouvez choisir une seule valeur sont prédéfinies et vous ne pouvez généralement pas les modifier. Si vous ne souhaitez pas sélectionner l'une des valeurs données, vous pouvez choisir le tiret (==-==), si possible.

Dans notre exemple, vous pouvez voir la [==Condition==](./life-and-documentation-cycle.md) dans la catégorie ==Général==.

[![Champ de dialogue](../assets/images/en/basics/attribute-fields/6-af.png)](../assets/images/en/basics/attribute-fields/6-af.png)

Un exemple d'attribut pouvant être modifié de manière centralisée est le [==Statut CMDB==](./life-and-documentation-cycle.md) dans la catégorie ==Général==.

## Champ de dialogue plus (Menu déroulant étendu)

Le champ de dialogue plus est similaire au champ de dialogue. De plus, vous pouvez définir d'autres valeurs. Pour ce faire, vous pouvez utiliser soit l'icône à droite du champ d'attribut, soit le [Dialog-Admin](./dialog-admin.md).

Exemples sont les attributs ==Catégorie== et ==Objectif== dans la catégorie ==Général==.

[![attributs](../assets/images/en/basics/attribute-fields/7-af.png)](../assets/images/en/basics/attribute-fields/7-af.png)

Lorsque vous cliquez sur l'icône, le ==Navigateur de liste== s'ouvre avec lequel vous pouvez ajouter d'autres valeurs ou modifier les valeurs existantes.

[![Navigateur de liste](../assets/images/en/basics/attribute-fields/8-af.png)](../assets/images/en/basics/attribute-fields/8-af.png)

!!! info "Veuillez noter"

    Vous ne pouvez supprimer des données que via le Dialog-Admin. Seuls les administrateurs doivent utiliser cette fonction car les valeurs de champ supprimées sont supprimées de manière irrévocable de toutes les entrées.

## Champ Multi-Dialog-Plus (multisélection)

Vous ne pouvez sélectionner qu'une seule valeur avec les champs de sélection mentionnés ci-dessus. Mais si vous souhaitez sélectionner plusieurs valeurs en même temps, vous pouvez utiliser le champ multi-dialog-plus. Vous pouvez ajouter d'autres valeurs à l'aide d'un menu déroulant. Dans certains cas, il y a des boutons supplémentaires avec lesquels vous pouvez sélectionner/désélectionner toutes les valeurs ou inverser votre sélection.

L'exemple illustre l'attribut ==Domaine DNS== dans la catégorie ==Adresse de l'hôte==.

[![Sélection multiple](../assets/images/en/basics/attribute-fields/9-af.png)](../assets/images/en/basics/attribute-fields/9-af.png)

## Champ de date

Vous pouvez utiliser le champ de date pour les entrées de date. Lorsque vous cliquez sur le champ de texte à ligne unique, un calendrier s'ouvre. En cliquant sur la date souhaitée, la date est copiée dans le champ de texte. Vous pouvez également saisir la date manuellement au format `jj.mm.aaaa`.

Notre exemple montre l'attribut ==Date de la facture== dans la catégorie ==Comptabilité==.

[![Champ de date](../assets/images/en/basics/attribute-fields/10-af.png)](../assets/images/en/basics/attribute-fields/10-af.png)

## Unités et Intervales

En plus des champs d'attributs, il y a un champ déroulant avec lequel vous pouvez déterminer des valeurs pour documenter des unités ou des intervalles. Ces valeurs peuvent être des unités de temps, des unités de mesure, des unités de poids, des périodes de temps, etc.

À titre d'exemple, vous pouvez voir la ==Période de garantie== dans la catégorie ==Comptabilité==.

[![Unités et Intervales](../assets/images/en/basics/attribute-fields/11-af.png)](../assets/images/en/basics/attribute-fields/11-af.png)

## Coûts {/examples/}

Les coûts sont documentés sous forme de nombres décimaux (ou simplifiés en nombres réels sans chiffres décimaux). Vous pouvez utiliser des points décimaux et des virgules comme caractères de séparation. De plus, le champ d'attribut indique la devise configurée. Vous pouvez [configurer la devise dans l'Administration](../system-administration/administration/user-settings/data-format.md).

À titre d'exemple, vous pouvez voir l'attribut ==Coûts d'investissement== dans la catégorie ==Comptabilité==.

[![Coûts](../assets/images/en/basics/attribute-fields/12-af.png)](../assets/images/en/basics/attribute-fields/12-af.png)

## Liens {/examples/}

Certains champs de texte à une seule ligne sont destinés à saisir des URL. Une telle entrée est utilisée pour générer un lien sur lequel l'utilisateur peut cliquer pour l'ouvrir.

Par exemple, vous pouvez trouver ce type de champ d'attribut dans la catégorie ==Accès==.

[![Liens](../assets/images/en/basics/attribute-fields/13-af.png)](../assets/images/en/basics/attribute-fields/13-af.png)

## Relations d'objets {/examples/}

Pour créer une relation entre deux objets ou plus, vous pouvez utiliser le navigateur d'objets pour les cas généraux ; pour les cas spéciaux, il existe d'autres navigateurs. Le champ de texte à une seule ligne est complété par deux icônes à droite.

Lorsque vous pouvez créer une relation un-à-un entre deux objets, vous pouvez écrire dans le champ de texte. Des suggestions de mots sont proposées pendant la saisie. Lorsque vous pouvez créer une relation un-à-n, le champ de texte est en mode lecture seule.

En cliquant sur l'icône de la loupe, le bon navigateur s'ouvre. L'icône à côté de l'icône de la loupe, une trombone avec un signal de blocage, dissout les relations existantes ou récemment sélectionnées.

[![Relations d'objets](../assets/images/en/basics/attribute-fields/14-af.png)](../assets/images/en/basics/attribute-fields/14-af.png)

### Navigateur d'objets

Le navigateur d'objets a une configuration unique, en fonction du type de relation à documenter. Pour cette raison, toutes les fonctions décrites dans le texte suivant ne sont pas toujours disponibles. Souvent, la sélection des filtres est restreinte, car, par exemple, vous n'êtes autorisé à choisir que des objets de certains types d'objets.

Lorsque vous sélectionnez l'objet référencé via des boutons radio, vous ne pouvez faire qu'un seul choix. Mais si les boutons d'ajout [![](../assets/images/en/basics/attribute-fields/15-af.png)](../assets/images/en/basics/attribute-fields/15-af.png) sont disponibles, le choix multiple est possible.

Il y a plusieurs onglets dans la partie supérieure de la fenêtre :

- **Vue d'objet**:<br> La vue d'objet est triée par filtres. Si le bon objet est manquant, vous pouvez le créer avec le bouton **Créer un nouvel objet**. Filtres :<br>
    - **par type d'objet**:<br> Vous sélectionnez d'abord le type d'objet, puis l'objet ou les objets.
    - **par groupes d'objets**:<br> Si vous utilisez le type d'objet **groupe d'objets**, les objets peuvent être répertoriés par **groupe d'objets**.
    - **par groupes de personnes**:<br> Toutes les **personnes** sont répertoriées par **groupe de personnes**.
    - **par relations**:<br> Tous les objets de relation sont répertoriés, vous devez d'abord choisir le type de relation.
    - **par date**:<br> Les objets sont triés par date. Vous avez les options suivantes : **nouvellement créé, nouvellement mis à jour, créé ce mois-ci, créé le mois dernier**.
- **Vue de l'emplacement**:<br> L'emplacement dans l'arborescence avec tous ses chemins est créé, à partir de là vous pouvez sélectionner le bon objet.
- **Recherche**:<br> Ici vous pouvez [rechercher](../efficient-documentation/search.md) des objets par le biais des titres d'objets.
- **Rapports**:<br> Les objets sont répertoriés à l'aide des rapports déjà créés [rapports](../evaluation/report-manager.md).
- **Objets sélectionnés**:<br> Dans cet onglet, tous les objets sélectionnés sont affichés. Via le bouton **Créer un nouveau groupe d'objets à partir de la sélection**, vous pouvez créer un objet du type groupe d'objets qui est ensuite rempli avec votre sélection d'objets.

Toutes les modifications actuelles sont répertoriées dans le journal.

À titre d'exemple, vous pouvez voir le ==Navigateur de contacts== de la catégorie ==Comptabilité== avec l'attribut ==Acheté à==.

[![Navigateur de contacts](../assets/images/en/basics/attribute-fields/16-af.png)](../assets/images/en/basics/attribute-fields/16-af.png)

### Sélection de l'emplacement

Ce navigateur crée une relation de type un à un avec un objet de type ==Emplacement== qui est défini comme un emplacement. En cliquant sur la loupe, la ==Sélection de l'emplacement== est activée. Elle est similaire à la ==Vue de l'emplacement== (voir ci-dessus). Le navigateur peut être trouvé dans la catégorie ==Emplacement==.

[![Sélection de l'emplacement](../assets/images/en/basics/attribute-fields/17-af.png)](../assets/images/en/basics/attribute-fields/17-af.png)

### Navigateur avec sous-sélection

Parfois, vous devez non seulement sélectionner l'objet mais aussi un attribut de cet objet. Des exemples sont l'attribut ==Connecté avec== dans la catégorie ==Port (Réseau)== où vous devez choisir une entrée ou une sortie de la catégorie ==Connecteurs (Câblage)== et la possibilité de choisir des relations logicielles dans la catégorie ==Composants de service==.

[![Navigateur avec sous-sélection](../assets/images/en/basics/attribute-fields/18-af.png)](../assets/images/en/basics/attribute-fields/18-af.png)

!!! info "Conseil"

    Lorsque le navigateur est divisé et comporte donc une sous-sélection et des boutons radio, vous devez effectuer une sélection dans les deux colonnes. Prenons par exemple le câblage de deux appareils : si vous sélectionnez uniquement l'objet connecté mais pas la connexion correspondante dans le navigateur d'objets, votre saisie ne sera pas enregistrée.
