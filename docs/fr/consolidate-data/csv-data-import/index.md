# Importation de données CSV

De nombreuses organisations utilisent des logiciels de tableur pour leur [documentation informatique](index.md) afin de visualiser des informations sous forme de tableaux. Cela n'est pas seulement confus, mais nécessite également beaucoup de travail pour la maintenance et la mise à jour. L'utilisation de l'importation CSV vous permet d'importer des données confortablement, par exemple, depuis Microsoft Excel, OpenOffice ou LibreOffice Calc, vers _i-doit_.

## Exigences

Pour pouvoir utiliser vos données pour l'importation CSV, il est important de les enregistrer au format **.csv** avec un encodage **UTF-8**. Certaines applications de tableur ne sont pas capables de définir l'encodage lors de l'enregistrement. Dans ce cas, vous pouvez utiliser un éditeur de texte qui possède une fonction de conversion après avoir exporté vos données au format .CSV. Sur la capture d'écran suivante, vous pouvez voir la fonction **Convertir en UTF-8** dans [Notepad++](https://notepad-plus-plus.org/):

[![Codage dans Notepad++](../../assets/images/en/consolidate-data/csv-data-import/1-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/1-csvi.png)

La structure d'un fichier .CSV approprié est approximativement comme indiqué dans l'exemple suivant:

[![structure-csv](../../assets/images/en/consolidate-data/csv-data-import/2-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/2-csvi.png)

La première ligne est utilisée comme en-tête et sert d'identification de l'[attribut](../../basics/structure-of-the-it-documentation.md). Chaque ligne successive représente un [objet](../../glossary.md) individuel de votre documentation informatique.<br>
Vous pouvez également utiliser votre éditeur de texte préféré pour créer des fichiers csv.

[![nouveau-fichier-csv](../../assets/images/en/consolidate-data/csv-data-import/3-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/3-csvi.png)

Une fois que le fichier .CSV a été préparé jusqu'à ce point, vous pouvez commencer l'importation.

## Télécharger le fichier

Sous **Extras → CMDB → Importation → Importation CSV**, vous pouvez trouver l'importation CSV. Vous n'avez pas besoin de le configurer à l'avance.

Choisissez votre fichier .csv dans la première étape en utilisant le bouton **Parcourir...** et téléchargez le fichier depuis votre système. Maintenant, le fichier est affiché dans la liste et vous pouvez choisir les actions **Utiliser pour l'importation**, **Télécharger le fichier** et **Supprimer le fichier** en survolant la ligne du fichier avec le curseur de la souris.

[![upload-file](../../assets/images/en/consolidate-data/csv-data-import/4-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/4-csvi.png)

Pour passer à l'étape suivante de l'importation, vous devez cliquer sur **Utiliser pour l'importation**.

## Définir les options {/examples}

Vous devez définir certaines options avant que le processus de mappage entre les colonnes de la table et les attributs dans i-doit puisse commencer.

[![mapping](../../assets/images/en/consolidate-data/csv-data-import/5-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/5-csvi.png)

### Type d'objet {/examples}

Lorsque vous sélectionnez un [type d'objet](../../basics/structure-of-the-it-documentation.md) via le menu déroulant **Type d'objet global**, tous les objets dans le fichier `.CSV` seront importés en tant que ce type d'objet. Si vous ne définissez pas de type d'objet global, vous aurez besoin d'un champ supplémentaire dans le fichier `.CSV` pour entrer la [constante de base de données](../../basics/structure-of-the-it-documentation.md). Le type d'objet auquel l'objet sera associé est déterminé par cette constante pour chaque ligne. Cela vous permet d'importer des objets de différents types d'objets (client, imprimante, moniteurs...) à partir d'un seul fichier. Cette information doit être maintenue pour tous les objets si aucun type d'objet global n'est utilisé. Vous ne pouvez pas utiliser une forme mixte.

### Séparateurs, En-têtes et Considérer le modèle par défaut {/examples/}

Si vous utilisez un **séparateur** différent du point-virgule (;), il est possible de spécifier le séparateur utilisé.

Si vous n'utilisez pas de ligne d'en-tête, vous pouvez désactiver l'en-tête pour que la première ligne du fichier .csv soit interprétée comme le premier objet.

Les objets sont créés avec les données du [modèle par défaut](../../efficient-documentation/templates.md).

### Valeurs Vides {/examples/}

Si vous souhaitez mettre à jour des objets existants avec l'importation de données CSV, vous pouvez décider comment gérer les cellules vides dans le fichier .CSV. Avec l'option **Adopter les valeurs vides**, vous avez la possibilité de choisir entre **Oui** ou **Non** :

-   **Oui** : Les cellules vides signifient que les attributs existants (s'ils existent) sont écrasés.
-   **Non** : Les cellules vides sont ignorées de sorte que les attributs existants (s'ils existent) sont préservés.

### Gestion des Entrées dans les Catégories de Liste (Multivaluées) {/examples/}

De plus, vous devez indiquer sous quelle forme les [catégories de liste](../../basics/structure-of-the-it-documentation.md) (multivaluées) apparaissent dans le fichier `.csv`. Si aucune catégorie de ce type n'est impliquée dans l'importation des données, vous pouvez ignorer les options suivantes.

Ce qui est frappant dans l'exemple ci-dessus, c'est que "Client 02" apparaît plusieurs fois. Étant donné que ce client possède deux CPU, deux entrées (une par CPU) doivent être générées dans la catégorie de liste **CPU**. En utilisant une ligne supplémentaire, l'objet reçoit les deux entrées dans la catégorie **CPU**. Il n'est pas nécessaire d'entrer des [attributs](../../glossary.md) invariables plusieurs fois dans les lignes suivantes de l'objet. Cela signifie que vous n'avez pas à définir à nouveau le numéro d'inventaire "ABCD-2000".

Alternativement, il est possible de stocker les entrées uniques des catégories de liste soit dans une **colonne** soit dans un champ sous forme de liste **séparée par des virgules**.

Si des entrées de catégorie sont déjà présentes, vous avez plusieurs options supplémentaires :

- **Créer des entrées de catégorie uniquement si la catégorie est vide (créer si vide)**
- **Créer des entrées de catégorie et conserver celles existantes (ajouter)**
- **Créer des entrées de catégorie et remplacer celles existantes (remplacer)**

En cliquant sur le bouton **Préparer la correspondance**, vous pouvez passer à l'étape suivante.

## Définir les caractéristiques d'identification

Dès que vous avez ajusté les options, vous pouvez commencer le mappage. Tout d'abord, vous pouvez sélectionner un [**profil de correspondance d'objets**](../object-identification-during-imports.md) si vous souhaitez mettre à jour des objets existants. Vous pouvez modifier ce profil ultérieurement. 

{ /* examples */ }


[![update](../../assets/images/en/consolidate-data/csv-data-import/6-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/6-csvi.png)

## Attribution des Colonnes aux Attributs {/ * exemples * /}

Chaque colonne reçoit sa propre ligne dans la correspondance. De cette manière, vous pouvez lier chaque ligne du fichier .CSV à un attribut de _i-doit_. Cliquez sur l'icône du crayon de la ligne pour activer le champ de saisie permettant de sélectionner l'attribut associé. L'attribut correct peut maintenant être sélectionné dans le champ déroulant ou vous pouvez saisir son nom directement dans le champ pour utiliser la fonction de suggestion. La saisie sera confirmée en utilisant le bouton **Appliquer**. Liez chaque colonne de cette manière jusqu'à ce que toutes les allocations soient terminées. Vous pouvez supprimer des allocations ultérieurement. Les colonnes sans allocation seront ignorées lors de l'importation des données.

[![attributes](../../assets/images/en/consolidate-data/csv-data-import/7-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/7-csvi.png)

!!! info Détails Obligatoires
    Indiquer le titre de l'objet _et_ le type d'objet est à la fois _obligatoire_. Si vous avez défini un type d'objet global dans les options d'importation de données, vous n'avez qu'à lier le titre de l'objet à une colonne dans la correspondance. Si vous n'avez pas défini de type d'objet global, alors un lien vers une colonne en tant que type d'objet sera également requis. Sinon, il ne sera pas possible de démarrer la fonction d'importation. Le réglage du type d'objet est effectué via sa constante de base de données (par exemple **C_OBJTYPE_SERVER**). Définir le nom du type d'objet (par exemple **Serveur**) n'est **pas** suffisant.

## Création d'un Profil {/examples}

Si vous souhaitez importer d'autres fichiers .CSV avec une structure identique en ce qui concerne l'allocation des colonnes, vous pouvez enregistrer la configuration de la correspondance actuelle en tant que profil. Il en va de même pour la mise à jour du fichier actuellement utilisé et son import ultérieur. Ainsi, vous pouvez éviter des étapes de travail récurrentes. Un profil enregistré peut être sélectionné et chargé ou supprimé dans la partie supérieure des options.

S'il existe déjà un profil correspondant, vous pouvez le remplacer sans spécifier de nom.

## Début de l'Importation des Données {/examples}

Le niveau de détail pour le journal d'importation CSV peut être défini sous la correspondance. Plus le journal est détaillé, plus de temps et de ressources sont nécessaires pour l'importation. Le journal des messages de débogage peut être utile pour le dépannage éventuellement requis.

Utilisez le bouton **Importer** sous la correspondance pour démarrer l'importation. Le temps nécessaire pour l'importation dépend de l'étendue des informations que vous souhaitez importer ainsi que du niveau de journalisation sélectionné.

Une fois l'importation terminée, des informations concernant l'importation ainsi qu'une confirmation de son achèvement seront indiquées. Les objets importés ou mis à jour sont directement liés. Le contenu de ces objets peut être modifié manuellement à tout moment, si nécessaire.


[![import-complete](../../assets/images/en/consolidate-data/csv-data-import/8-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/8-csvi.png)

## Import des Relations (Liaison d'Objets)

L'importation CSV est capable de créer des liens entre des objets ([relations](../../basics/object-relations.md)) s'ils sont définis via une catégorie. L'objet à lier peut également être placé dans une colonne du fichier .CSV tandis que le champ de liaison peut être défini comme attribut à attribuer. Un exemple d'une déclaration de l'emplacement physique dans la colonne H :

[![physical-location](../../assets/images/en/consolidate-data/csv-data-import/9-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/9-csvi.png)
Après avoir sélectionné le champ lors du mappage, vous pouvez décider si la sélection de l'objet que vous allez lier se fait de manière non restreinte ou s'il y aura une restriction à un type d'objet de votre choix. De plus, les objets qui n'ont pas pu être trouvés peuvent être créés automatiquement. La définition du type d'objet des objets liés est requise dans ce cas pour qu'un objet de ce type soit créé. Pour certains types de liens, il est possible de définir les attributs dans l'attribution spéciale par lesquels l'identification est faite pour les objets qui vont être liés. En standard, le titre de l'objet est utilisé.

!!! info "Note"
    L'attribution spéciale ne peut pas être trouvée dans tous les champs de liaison. Si elle n'est pas disponible, seul le titre de l'objet est utilisé pour l'identification de l'objet à mettre à jour.

[![identification-object](../../assets/images/en/consolidate-data/csv-data-import/10-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/10-csvi.png)

## Importation de valeurs avec unités

Certains attributs contiennent des valeurs et des unités. Vous devez les saisir séparément dans les formulaires correspondants de l'interface Web. Par exemple, dans la catégorie **Moniteur**, l'attribut **Affichage** se compose du champ pour la valeur et du champ pour l'unité (pouce, cm, etc.). Afin d'importer cet attribut de manière analogue via l'importation de fichiers CSV, la valeur et l'unité doivent être ensemble dans une seule cellule. Exemples :

| Catégorie | Attribut | Attribution avec l'importation de fichiers CSV | Cellule dans le fichier CSV |
| --- | --- | --- | --- |
| **CPU** | **Fréquence du CPU** | **Fréquence du CPU (unité)** | 2,5 GHz |
| **Stockage de masse local → Appareil** | **Capacité** | **Capacité (unité)** | 4 To |
| **Moniteur** | **Affichage** | **Affichage (unité)** | 24 pouces |

## Import Automatisé de Fichiers CSV

L'importation de fichiers CSV n'est pas seulement possible manuellement via l'interface utilisateur, mais peut également être mise en œuvre en utilisant la Console i-doit. Cela permet d'automatiser l'importation, ce qui peut être utilisé pour mettre à jour les informations régulièrement. Une description de tous les paramètres peut être trouvée dans l'article correspondant, y compris un exemple sous l'option [import-csv](../../automation-and-integration/cli/console/options-and-parameters-cli.md#import-csv). De plus, l'ID d'un profil d'importation précédemment créé peut être spécifié dans l'appel. Ces ID peuvent être lus avec l'option [import-csvprofiles](../../automation-and-integration/cli/console/options-and-parameters-cli.md#import-csvprofiles). L'utilisation de cette option est également décrite dans l'article mentionné. {/examples}
