# Gestionnaire de rapports 

Le système de reporting est un instrument utile pour rassembler, traiter et envoyer des données à un tiers. Par conséquent, _i-doit_ possède un gestionnaire de rapports qui peut traiter toutes les données de la [documentation informatique](../glossary.md) de manière exhaustive.

Aperçu
------

Vous pouvez accéder au gestionnaire de rapports via **Extras → Gestionnaire de rapports** dans la section de navigation principale. Sur le côté gauche de l'arborescence de navigation, les éléments **Rapports**, **Dépôt en ligne** et **Vues** sont affichés. Dans le texte suivant, ces éléments sont décrits plus en détail. Si le gestionnaire de rapports ou les éléments de l'arborescence de navigation n'apparaissent que de manière incomplète ou ne s'affichent pas du tout, cela est dû à des autorisations manquantes.

[![Aperçu](../assets/images/en/evaluation/report-manager/1-rm.png)](../assets/images/en/evaluation/report-manager/1-rm.png)

Évaluer un rapport
------------------

Les rapports créés peuvent être trouvés dans l'élément **Rapports**. Lorsque la [configuration de _i-doit_](../installation/manual-installation/setup.md) vient d'être terminée, il n'y aura pas encore de rapports dans cette section.


[![Rapports](../assets/images/en/evaluation/report-manager/2-rm.png)](../assets/images/en/evaluation/report-manager/2-rm.png)

En cliquant sur un rapport dans la liste, ce rapport sera exécuté avec les données actuelles. Dans _i-doit_, la liste des résultats d'un rapport est présentée sous forme tabulaire. Les rapports sont toujours axés sur les objets et leurs attributs. Pour chaque ligne de résultats, l'accent est mis sur un objet principal et les détails de ses attributs et relations avec d'autres objets peuvent être indiqués. En cliquant sur une ligne, l'objet correspondant sera chargé.

[![Rapports](../assets/images/en/evaluation/report-manager/3-rm.png)](../assets/images/en/evaluation/report-manager/3-rm.png)

Le tableau offre diverses fonctionnalités (tri et filtrage des colonnes, pagination). De plus, les rapports peuvent être exportés dans différents formats (texte brut, CSV, XML et PDF). L'exportation au format CSV est recommandée pour un traitement ultérieur dans un logiciel de tableur.

Un objet de type **Groupe d'objets** peut être créé à partir d'un rapport. Les objets du rapport sont attribués à la catégorie du même nom de manière statique. Il est également possible de créer un objet de type **Groupe d'objets** avec une affectation dynamique des objets. Pour ce faire, sélectionnez l'option correspondante dans la catégorie **Type** et choisissez un rapport. Désormais, ce groupe d'objets contient toujours la liste à jour des objets donnés en résultats par le rapport assigné. Cela se fait en temps d'exécution.

Catégoriser les rapports
---------------------------

Les rapports peuvent être catégorisés. Ils seront associés par défaut à la catégorie **Global** qui est toujours disponible et ne peut pas être supprimée. L'avantage de la catégorisation réside dans le concept de permissions : Vous pouvez définir des autorisations d'accès séparément pour chaque catégorie. De nouvelles catégories peuvent être créées et les existantes peuvent être modifiées via l'élément **Catégories** sur la page des rapports. À cette fin, le champ de description facultatif peut être utile.

[![Catégories](../assets/images/en/evaluation/report-manager/4-rm.png)](../assets/images/en/evaluation/report-manager/4-rm.png)

Vérifier les autorisations

S'il est impossible de créer ou de modifier des catégories de rapports, il est conseillé de vérifier les autorisations à cet effet et de s'assurer que l'utilisateur actuellement connecté est autorisé et dispose des autorisations correspondantes.

Créer ou Modifier des Rapports
-------------------------------

Les rapports peuvent être copiés. Pour ce faire, sélectionnez un rapport et cliquez sur le bouton **Dupliquer**. Vous pouvez supprimer un rapport via le bouton **Purger**. Cette étape est irréversible.

[![Dupliquer](../assets/images/en/evaluation/report-manager/5-rm.png)](../assets/images/en/evaluation/report-manager/5-rm.png)

Il existe deux façons de créer un rapport, qui seront expliquées plus en détail ci-dessous.

### Constructeur de requêtes

Le constructeur de requêtes fournit une interface graphique pour créer un nouveau rapport ou modifier un existant. L'éditeur est ouvert avec le bouton **Nouveau**. Alternativement, il peut être trouvé à côté du bouton dans le champ déroulant en tant que bouton **constructeur de requêtes**. Pour modifier un rapport existant, sélectionnez la case à cocher à côté du rapport et cliquez sur l'un des boutons mentionnés ci-dessus.

[![constructeur de requêtes](../assets/images/en/evaluation/report-manager/6-rm.png)](../assets/images/en/evaluation/report-manager/6-rm.png)

Le titre et la catégorie sont essentiels. En plus de cela, il est souvent utile d'entrer une brève description.

Vous pouvez tester le rapport avec le bouton **Vérifier**. Un maximum de 25 résultats est affiché dans une fenêtre contextuelle.

#### Options Avancées

[![Options Avancées](../assets/images/en/evaluation/report-manager/7-rm.png)](../assets/images/en/evaluation/report-manager/7-rm.png)

Les options avancées suivantes sont disponibles.

| Option | Description |
| --- | --- |
| **Afficher HTML** | Si l'option est définie sur Oui, l'HTML est également affiché dans les rapports. |
| **Présentation multivaleur groupée** | Cette option regroupe les entrées multivaluées en un objet en dessous de l'autre. |
| **Afficher les objets avec des affectations vides ?** | Cette option concerne les sous-requêtes d'objets qui sont associés les uns aux autres. Si l'attribut représentant cette affectation est vide, c'est-à-dire qu'aucun objet n'est lié, le résultat sera vide lorsque l'option est définie sur **Non**. Sinon, la cellule dans le résultat sera vide. |
| **Afficher les objets de relation ?** | Il existe un objet de relation pour chaque relation entre deux objets. Lorsque vous sélectionnez **Oui**, l'objet de relation sera également affiché dans le résultat. |
| **Tri** | Certains attributs sélectionnés peuvent être triés automatiquement dès que le rapport est exécuté. Avec cette option, vous pouvez également choisir si vous souhaitez trier par ordre croissant ou décroissant. |
| **Filtre de statut pour les catégories multivaluées** | Faut-il afficher les entrées multivaluées archivées, supprimées, normales, inachevées ou toutes les catégories ? |

#### Sortie

[![Sortie](../assets/images/en/evaluation/report-manager/8-rm.png)](../assets/images/en/evaluation/report-manager/8-rm.png)

La zone **Sortie** offre la possibilité de définir les colonnes de la liste des résultats. Sélectionnez les attributs souhaités parmi les trois types de catégories **globale**, **spécifique** et **personnalisée**. Chaque attribut définit une colonne. Vous pouvez définir l'ordre des lignes par glisser-déposer.

Certains attributs sélectionnés peuvent être triés automatiquement dès que le rapport est exécuté. Pour cela, vous pouvez utiliser le bouton radio à côté de l'attribut sélectionné. Si aucun attribut n'est sélectionné, l'ID de l'objet sera la clé de tri.

Davantage d'attributs de l'objet associé peuvent être choisis via la loupe affichée lorsqu'une référence d'objet est sélectionnée comme attribut. Pour cela, une autre requête est ouverte lorsque vous cliquez sur la loupe, suivant le principe décrit ci-dessus. Bien sûr, ces sous-requêtes peuvent également être transformées en sous-requêtes elles-mêmes (récursives).

De plus, vous avez les options suivantes :

#### Conditions

[![Conditions](../assets/images/en/evaluation/report-manager/9-rm.png)](../assets/images/en/evaluation/report-manager/9-rm.png)

Toutes les conditions souhaitées peuvent être définies en utilisant l'élément **Conditions**. Afin de vérifier un attribut particulier, cet attribut est sélectionné avec la catégorie correspondante. Ensuite, la requête logique sera construite : Quelle valeur l'attribut doit-il correspondre (ou non) ? Des déclarations typiques telles que =, !=, <, > etc. sont possibles ici et correspondent aux types de champ de l'attribut. La sélection est également conforme à l'attribut sélectionné.

Des imbrications simples en utilisant _et_ ou _ou_ sont possibles en définissant des conditions supplémentaires en utilisant le bouton + et des blocs de conditions. Les conditions sont supprimées en utilisant le bouton **-**. Les blocs de conditions vides sont supprimés automatiquement.

Des conditions peuvent être définies pour les attributs des objets en relation en choisissant l'attribut avec la relation d'objet et en définissant la condition sur **Attribut lié**. Ensuite, d'autres conditions peuvent être définies dans des blocs de conditions supplémentaires.

### Éditeur SQL 

Chaque rapport peut être créé ou édité dans l'éditeur SQL, y compris ceux créés dans le générateur de requêtes. À partir de la page d'aperçu des **Rapports**, cliquez sur le champ déroulant à côté de **Nouveau** ou sélectionnez un rapport existant et cliquez sur le champ déroulant à côté de **Éditer** et choisissez l'**Éditeur SQL**.

Basculer entre le générateur de requêtes et l'éditeur SQL

Lorsque vous avez créé ou édité un rapport à l'aide de l'éditeur SQL, toute modification ultérieure via le générateur de requêtes ne sera plus possible. Explication : Dans l'éditeur SQL, tout le spectre du SQL est disponible. Comme le générateur de requêtes est limité à un sous-ensemble du SQL (ce qui est suffisant dans la plupart des cas), la requête créée pourrait être détruite en raison de cette différence.

[![Éditeur SQL](../assets/images/en/evaluation/report-manager/10-rm.png)](../assets/images/en/evaluation/report-manager/10-rm.png)

La requête est écrite en SQL dans le champ de formulaire **Requête SQL**. La connaissance de la structure de la base de données de _i-doit_ est requise pour cela. Il est important de toujours interroger les objets et de sélectionner l'ID de l'objet comme première colonne (invisible) :

```sql
    SELECT obj_main.isys_obj__id AS '__id__' FROM isys_obj AS obj_main;
```

Les noms de colonnes peuvent être saisis de manière multilingue et seront automatiquement traduits en temps réel par _i-doit_ :

```sql
    obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1'
```

!!! réussite Concevoir des rapports complexes

Les approches suivantes sont utiles pour concevoir des rapports complexes qui utilisent de nombreuses fonctionnalités de SQL :

1. Créez le rapport en utilisant le générateur de requêtes (autant que possible)
2. Copiez le rapport
3. Modifiez la copie en utilisant l'éditeur SQL

Cela présente l'avantage de ne pas avoir besoin de connaître la structure de la base de données de _i-doit_ et que le rapport préparé peut toujours être modifié en utilisant le générateur de requêtes.

Exportation/Importation de rapports
-----------------------------------

Les rapports peuvent également être exportés et importés. Il est possible de sélectionner le rapport correspondant via la case à cocher et de l'exporter via le bouton en haut de la liste dans un fichier. Ce fichier peut être importé dans une autre installation ou un autre locataire pour y être disponible. Si ce rapport a été créé via le générateur de requêtes, il peut également être modifié avec le générateur de requêtes dans la nouvelle instance.
```

Lors du transfert d'un rapport, veuillez noter que les conditions et les résultats faisant référence à un contenu individuel/personnalisé (c'est-à-dire un ID d'objet spécifique ou une catégorie personnalisée) pourraient devoir être modifiés, car le résultat du rapport pourrait différer des attentes.

Dépôt en ligne
--------------

Certains rapports précédemment créés sont déjà disponibles en téléchargement sur Internet. Ceux-ci peuvent être exécutés directement ou enregistrés localement via l'élément **Dépôt en ligne**. Une connexion Internet est requise pour cela.

[![Dépôt en ligne](../assets/images/en/evaluation/report-manager/11-rm.png)](../assets/images/en/evaluation/report-manager/11-rm.png)

Vues des rapports
-----------------

Les **vues des rapports** offrent des fonctionnalités et des vues supplémentaires pour les rapports mentionnés ci-dessus. Les nouvelles vues ne peuvent pas être créées, les vues existantes ne peuvent pas être modifiées ou supprimées.

[![Vues des rapports](../assets/images/en/evaluation/report-manager/12-rm.png)](../assets/images/en/evaluation/report-manager/12-rm.png)

Sélection de **vues de rapports** utiles :

-   **Codes QR** : Traitement et impression de plusieurs étiquettes simultanément pouvant également contenir un code QR ainsi que des informations supplémentaires et un logo.
-   **Appareils dans un emplacement (format liste)**
-   **Connexions réseau**
-   **Connexions de câbles ouvertes**

[![Vues du rapport](../assets/images/en/evaluation/report-manager/13-rm.png)](../assets/images/en/evaluation/report-manager/13-rm.png)

Export Automatique des Rapports
-------------------------------

Vous pouvez exporter automatiquement des rapports existants en tant que fichier sans avoir besoin d'intervenir manuellement. Utilisez l'outil en ligne de commande d'_i-doit_, le [contrôleur](../automation-and-integration/cli/index.md), à cette fin. Le gestionnaire de contrôleur correspondant est le rapport. Lorsque le contrôleur est exécuté sans autres déclarations, l'aide apparaîtra :

    sudo -u www-data php console.php report-export --help
 
    Utilisation :
    report-export [options]
    
    Options :
    -r, --reportId=REPORTID              ID du rapport
    -d, --exportPath=EXPORTPATH          Chemin pour exporter le rapport
    -f, --exportFilename=EXPORTFILENAME  Nom du fichier d'export, sans extension (par ex. .pdf).
                                        Par défaut, c'est le titre du rapport
    -t, --exportFileType=EXPORTFILETYPE  Type de fichier de l'export. Options possibles : csv, txt, pdf, xml [par défaut : "csv"]
    -u, --user=USER                      Utilisateur
    -p, --password=MOTDEPASSE            Mot de passe
    -i, --tenantId=IDLOCATAIRE           ID du locataire [par défaut : 1]
    -c, --config=CONFIG                  Fichier de configuration
    -h, --help                           Afficher ce message d'aide
    -q, --quiet                          Ne pas afficher de message
    -V, --version                        Afficher la version de l'application
        --ansi                           Forcer la sortie ANSI
        --no-ansi                        Désactiver la sortie ANSI
    -n, --no-interaction                 Ne poser aucune question interactive
    -v|vv|vvv, --verbose                 Augmenter la verbosité des messages : 1 pour une sortie normale, 2 pour une sortie plus verbeuse et 3 pour le débogage

    
    Aide:
    Exécute un rapport i-doit et l'enregistre dans un fichier au format CSV, TXT, PDF ou XML

Par exemple, l'automatisation peut être effectuée par une tâche cron.

!!! info "Notification basée sur le rapport"

    Pour les rapports qui sont positifs et donnent des résultats, _i-doit_ peut envoyer des [e-mails](./notifications.md) correspondants.

Attribuer des autorisations
------------------

Vous pouvez attribuer des autorisations pour le gestionnaire de rapports aux utilisateurs et aux groupes d'utilisateurs (représentés dans _i-doit_ par les types d'objets **Personnes** et **Groupes de personnes**). Avec **Administration → Système d'autorisation → Droits → Gestionnaire de rapports** vous pouvez attribuer les autorisations suivantes :

*   **Créer de nouveaux rapports**
*   **Dépôt en ligne**
*   **Vues de rapport**
*   **Catégories**
*   **Rapports dans les catégories**
*   **Rapports**
    

[![Attribuer des autorisations](../assets/images/en/evaluation/report-manager/14-rm.png)](../assets/images/en/evaluation/report-manager/14-rm.png)
