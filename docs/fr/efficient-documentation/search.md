# Recherche

"Cherchez et vous trouverez." Une recherche spécifique dans la [documentation informatique](../glossary.md) nécessite une recherche rapide et confortable. Une recherche spécifique est souvent une méthode plus rapide que de naviguer à travers les structures de menu.

## Le Champ de Recherche

Le champ de recherche est situé dans l'interface web d'i-doit dans le coin supérieur droit. Ici, vous pouvez rechercher n'importe quel terme de la documentation informatique. En tapant, les premiers résultats apparaissent déjà (suggestions de recherche), ils peuvent être sélectionnés à l'aide de la souris ou du clavier (auto-complétion) pour accéder directement à l'ensemble de données trouvé.

[![Le Champ de Recherche](../assets/images/en/efficient-documentation/search/1-se.png)](../assets/images/en/efficient-documentation/search/1-se.png)

Outre le texte brut, la recherche peut être restreinte à des [attributs d'objet](../glossary.md) spécifiques :

-   Si la recherche commence par un dièse suivi de l'[identifiant d'objet](../glossary.md) (#123), la page d'aperçu de l'objet associé à cet identifiant sera ouverte en appuyant sur la touche Entrée.
-   Si la recherche commence par le mot-clé titre suivi de deux-points et du titre de l'objet, l'objet correspondant sera affiché (titre:acme).

## Les Résultats de la Recherche {/%%/}

Si les suggestions de recherche mentionnées ci-dessus ne conduisent pas au résultat souhaité, appuyer sur retour affichera une page avec les résultats de la recherche. À côté de chaque ensemble de données trouvé, la source est également indiquée, par exemple, l'[attribut](../glossary.md) d'une catégorie d'un [type d'objet](../glossary.md) dans le module [CMDB](../glossary.md).

[![Les Résultats de la Recherche](../assets/images/en/efficient-documentation/search/2-se.png)](../assets/images/en/efficient-documentation/search/2-se.png)

!!! success "Définir un signet/favori"
    Chaque recherche peut être référencée via l'URL. La recherche du terme "acme" donne l'URL [http://i-doit/search?q=acme](http://i-doit/search?q=acme). Les résultats de recherche peuvent être enregistrés comme signets/favoris dans le navigateur web afin de pouvoir y accéder plus rapidement.

## Mode de Recherche

Il existe deux modes de recherche sélectionnables qui peuvent tous conduire à des résultats différents :

-   **Normal :** L'indexation (voir ci-dessous) est utilisée pour la recherche. C'est le paramètre par défaut.
-   **Recherche Approfondie :** Les attributs sont scannés un par un. L'index est ignoré. Ce mode de recherche prend plus de temps que les autres.

Le mode de recherche peut être sélectionné dans **Extras → CMDB → Recherche** après la première recherche. À **Administration → Gestion de [Nom du locataire] → Paramètres pour [Nom du locataire] → Recherche → Mode de recherche par défaut**, vous pouvez sélectionner le mode spécifique que vous souhaitez utiliser automatiquement à l'avenir.

## Recherche approfondie automatique

Si une recherche avec le mode prédéfini (voir ci-dessus) fournit un résultat insatisfaisant ou même aucun résultat, vous pouvez effectuer une **Recherche approfondie** automatiquement. Vous pouvez configurer les paramètres de la **Recherche approfondie** sous **Administration → Gestion de [Nom du locataire] → Paramètres pour [Nom du locataire] → Recherche → Recherche approfondie automatique** :

| Option | Description |
| --- | --- |
| **Actif** | Les résultats de la recherche sont complétés par une **Recherche approfondie** supplémentaire. |
| **Actif, en l'absence de résultats** | La **Recherche approfondie** supplémentaire est lancée en l'absence de résultats. |
| **Désactivé** | La **Recherche approfondie** supplémentaire est omise. |

## Indexation

Initialement, l'index de recherche est généré automatiquement lors de la mise à jour ou de l'installation. Seulement pour les bases de données très volumineuses avec plus de 500 000 objets, il doit être généré manuellement pour garantir que la recherche est rapide et fournit de bons résultats. L'index peut être créé ou mis à jour en arrière-plan indépendamment des interactions de l'utilisateur. Cette action est déclenchée via la Console i-doit. Un exemple d'appel et des explications des paramètres possibles peuvent être trouvés dans l'article correspondant.

```shell
php console.php search-index -uadmin -padmin -i 1
```

Alternativement, la réindexation peut également être exécutée dans l'administration i-doit à [Réparation et nettoyage](../system-administration/administration/tenant-management/repair-and-clean-up.md) via le bouton **Renouveler l'index de recherche**.

!!! info "Exigence en mémoire"
    Sur un système d'exploitation de type Unix, l'index est de 500 Mo par million d'enregistrements de données indexés. En général, la durée d'une requête de recherche n'est pas augmentée par des index plus grands.

## Recherche via la Console

L'outil [CLI](../automation-and-integration/cli/console/options-and-parameters-cli.md#search) vous permet de rechercher via la ligne de commande. Un exemple :

```shell
sudo -u www-data php console.php search -uadmin -padmin --searchString=acme
+------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
| ID   | Key                                                   | Found Match                                                            | Score |
+------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
| 538  | Database scheme > Global > Title                      | i-doit Tenant ACME IT Solutions                                        | 4.04  |
| 25   | Organisation > Global > Title                         | ACME IT Solutions GmbH                                                 | 4.04  |
| 157  | Person groups > Mail Addresses > Title                | Team: intern@acme-it.example                                           | 4.04  |
| 158  | Persons > Mail Addresses > Title                      | Adam Riese: a.riese@acme-it.example                                    | 4.04  |
| 160  | Persons > Mail Addresses > Title                      | Mara Thon: m.thon@acme-it.example                                      | 4.04  |
| 164  | Persons > Mail Addresses > Title                      | Falk Narei: f.narei@acme-it.example                                    | 4.04  |
| 25   | Organisation > Mail Addresses > Title                 | ACME IT Solutions GmbH: info@acme-it.example                           | 4.04  |
[...]
+------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
```

## Recherche via l'API

Il est également possible de rechercher la [documentation IT](../basics/structure-of-the-it-documentation.md) via l'[Interface de Programmation Applicative (API)](../i-doit-pro-add-ons/api/index.md) de i-doit. La méthode requise est idoit.search :

```json
{
    "version": "2.0",
    "method": "idoit.search",
    "params": {
        "q": "acme",
        "apikey": "c1ia5q",
        "language": "en"
    },
    "id": 1
}
```

Le serveur répond comme suit:

```json
{
    "jsonrpc": "2.0",
    "result": [
        {
            "documentId": "1412",
            "key": "Client > Ip > Dns domain",
            "value": "Laptop 001: intern.acme-it.example",
            "type": "cmdb",
            "link": "\/?objID=1412&catgID=47&cateID=47&highlight=acme",
            "score": 0
        },
        // […]
    ],
    "id": 1
}
```

## Ajuster l'indexation {/adjust-the-indexing}

L'indexation d'i-doit utilise de nombreuses fonctionnalités fournies par MySQL/MariaDB. Celles-ci peuvent être personnalisées. Pour certains paramètres, le fichier de configuration de MySQL/MariaDB est ajusté (par exemple à `/etc/mysql/conf.d/i-doit.cnf`). Pour d'autres paramètres, il est nécessaire d'exécuter des instructions SQL pour lesquelles le client en ligne de commande est adapté. Exemple :

```shell
mysql -uroot -p -hlocalhost
```

### Longueur des mots

Une question importante pour l'indexation est de savoir quelle [longueur minimale d'un mot](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_ft_min_token_size) doit être. Souvent, cette valeur est définie à 3 caractères. Des termes comme "PC 01" ne seront pas trouvés avec cette valeur. Une spécification appropriée serait une valeur de 2 ou même 1 caractère(s).

```conf
innodb_ft_min_token_size = 2 # nombre minimal de caractères pour un terme recherché
```

Ce paramètre pourrait entraîner un index beaucoup plus grand qu'auparavant.

### Séparateurs de mots

Afin de différencier les mots, divers caractères sont utilisés comme séparateurs (par exemple espace, point, tiret). Pour trouver le terme "PC-01", le terme est séparé en "PC" et "01". La longueur du mot est à nouveau le facteur décisif pour savoir si "PC" et "01" sont indexés ou non.

### Mots vides

[Les mots vides](https://fr.wikipedia.org/wiki/Mot_vide) sont les termes qui sont ignorés lors de la recherche. Ainsi, l'index ne doit pas prendre en compte ces mots. Des exemples de tels mots sont "à", "que" et "avec". MySQL fournit déjà une liste de mots vides qui est relativement petite, cependant, et ne contient que des termes anglais. Cette liste peut être remplacée par votre propre liste. Vous pouvez utiliser les déclarations SQL suivantes :

Accédez à la base de données système de i-doit :

```sql
USE idoit_system;
```

Si la table n'existe pas encore, elle doit être créée :

```sql
CREATE TABLE IF NOT EXISTS isys_search_stopwords (value VARCHAR(18) NOT NULL DEFAULT '') ENGINE=INNODB DEFAULT CHARSET=latin1;
```

## Vider la table

```sql
TRUNCATE TABLE isys_search_stopwords;
```

Insérer la liste des mots vides :

```sql
INSERT INTO isys_search_stopwords (value)
VALUES ('mais'), ('comme'), ('aussi'), ('à'), ('ainsi'), ('sur'), ('depuis'), ('suis'), ('jusqu\'à'), ('sont'), ('là'), ('par'), ('donc'), ('parce que'), ('que'), ('le'), ('votre'), ('dont'), ('ce'),('encore'), ('là'), ('vous'), ('à travers'), ('un'), ('une'), ('il'), ('cela'), ('le vôtre'), ('pour'), ('avait'), ('ici'), ('derrière'), ('je'), ('leur'), ('dans'), ('est'), ('oui'), ('chaque'), ('tout le monde'), ('tout'), ('peut'), ('faire'), ('mon'), ('mien'), ('avec'), ('doit'), ('après'), ('ensuite'), ('non'), ('pas'), ('maintenant'), ('ou'), ('être'), ('son'), ('elle'), ('devrait'), ('doit'), ('jusqu\'à présent'), ('au-dessus'), ('et'), ('notre'), ('nôtre'), ('sous'), ('de'), ('avant'), ('quand'), ('pourquoi'), ('quoi'), ('continuer'), ('plus loin'), ('si'), ('qui'), ('devenir'), ('devient'), ('comment'), ('encore'), ('nous'), ('à');
```

Listes de mots vides dans diverses langues peuvent être trouvées sur internet.<br>
Les paramètres suivants sont nécessaires pour remplacer la liste MySQL par votre liste :

```conf
innodb_ft_server_stopword_table = 'idoit_system/isys_search_stopwords'
```

### Activer les modifications d'index

Trois étapes sont nécessaires pour rendre les modifications du comportement de l'index effectives. Tout d'abord, vous devez redémarrer le service MySQL. La commande suivante est utilisée pour les systèmes d'exploitation basés sur Debian :

```shell
sudo systemctl restart mysql.service
```

Ensuite, l'instruction SQL suivante doit être exécutée pour chaque base de données locataire :

```sql
OPTIMIZE TABLE isys_search_idx;
```

Instruction SQL complète pour le premier locataire avec la base de données idoit_data :

```sql
USE idoit_data;
OPTIMIZE TABLE isys_search_idx;
```

Enfin, la réindexation via le contrôleur i-doit doit être effectuée (voir ci-dessus).

### Augmenter la limite de 2500 résultats

Si les objets sont nommés consécutivement par exemple 123456-00001 à 123456-99999, seuls les objets jusqu'à 123456-2500 peuvent être trouvés avec les paramètres de recherche normaux.<br>
Cette limite est pour des raisons de performance. Pour augmenter cette limite, un paramètre d'expert doit être ajouté.

Voici un exemple où la limite a été fixée à 5000 résultats.

| Clé | Valeur | Type |
| --- | --- | --- |
| search.limit | 5000 | Au niveau du locataire |
