# Journal de bord {/examples/}

Chaque modification apportée à la [documentation informatique](../glossary.md) est notée dans le journal de bord par i-doit. De cette manière, il est facile de suivre le [cycle de vie de la documentation informatique](./life-and-documentation-cycle.md).

## Journal de bord global {/examples/}

Le journal de bord dans lequel toutes les modifications sont intégrées se trouve à **Extras → CMDB → Journal de bord**. Vous pouvez y filtrer les entrées selon divers paramètres. Si possible, une entrée contient également les modifications spécifiques (Quelle valeur a été modifiée et en quoi?).

[![Journal de bord global](../assets/images/en/basics/logbook/1-lb.png)](../assets/images/en/basics/logbook/1-lb.png)

La dernière modification peut être suivie dans la zone inférieure de chaque page.

[![dernière modification](../assets/images/en/basics/logbook/2-lb.png)](../assets/images/en/basics/logbook/2-lb.png)

## Journal de bord par objet {/examples/}

Le journal de bord peut non seulement être affiché de manière globale, mais vous pouvez également limiter la vue à un seul [objet](../glossary.md). La [catégorie](../glossary.md) **Journal de bord** est attribuée à chaque [type d'objet](../glossary.md) de manière fixe. Le journal de bord peut être consulté dans la **Vue objet** via l'icône de livre située au-dessus de l'arborescence des catégories.

[![Journal par objet](../assets/images/en/basics/logbook/3-lb.png)](../assets/images/en/basics/logbook/3-lb.png)

Les fonctions de filtre et le niveau de détail correspondent à ceux du journal global.

[![fonctions de filtre](../assets/images/en/basics/logbook/4-lb.png)](../assets/images/en/basics/logbook/4-lb.png)

## Journal par service

Pour chaque service modélisé dans i-doit, il existe un journal, qui contient les modifications apportées à tous les composants du service (ou sous-services). La catégorie s'appelle **Journal de service** et peut être ajoutée à ces types d'objets qui représentent ces services via la catégorie **Service**.

[![Journal par service](../assets/images/en/basics/logbook/5-lb.png)](../assets/images/en/basics/logbook/5-lb.png)

## Configuration du journal

Vous pouvez trouver la configuration du journal dans **Extras → CMDB → Journal → Configuration du journal**.

[![Configuration du journal](../assets/images/en/basics/logbook/6-lb.png)](../assets/images/en/basics/logbook/6-lb.png)

Les modifications ne **n'affectent pas** les entrées existantes.

Le **Nom d'utilisateur** qui est affiché dans chaque entrée peut être modifié dans la configuration. Le titre de l'[objet](../glossary.md) de la personne est considéré par défaut ; dans la plupart des cas, il se compose du prénom et du nom de famille.

!!! success "Anonymisation"
    Si le **Nom d'utilisateur** est changé pour une valeur fixe, par exemple "Anonyme", le journal est anonymisé. Le résultat est que vous ne pouvez plus retracer qui a effectué quelles modifications.

L'option pour le **Nombre maximum de modifications détaillées combinées** entraîne la synthèse des modifications simultanées. Cela entraîne une diminution du niveau de détail mais d'un autre côté, cela entraîne une augmentation des performances pour les imports.

### Supprimer complètement les entrées du journal des objets purgés

Cette option de configuration pour le journal peut être trouvée sous **Administration → Gestion du locataire → Paramètres du locataire → Journal → Supprimer complètement les entrées du journal des objets purgés**.

[![logbook-entries-purge](../assets/images/en/basics/logbook/12-lb.png)](../assets/images/en/basics/logbook/12-lb.png)

Ce paramètre est défini par défaut sur **Non**. Si vous définissez ce paramètre sur **Oui**, l'entrée du journal de l'objet sera également supprimée après la purge de l'objet lui-même.

## Activation/ Désactivation du Journal

Vous pouvez activer/désactiver le journal dans **Administration → Gestion du locataire → Paramètres du locataire → Journal → Journal des modifications détaillées du CMDB**. {/examples}

## Entrées Personnalisées

Vous pouvez générer une nouvelle entrée dans le journal pour chaque objet. Activez la catégorie **Journal** dans l'objet (voir ci-dessus). Ensuite, vous pouvez afficher le formulaire pour une nouvelle entrée via le bouton **Nouveau**. Vous pouvez définir le **Niveau d'alerte**, le **Message** et la **Description** selon vos besoins. L'entrée apparaît dans le journal après avoir cliqué sur le bouton **Enregistrer**.

[![Entrées Personnalisées](../assets/images/en/basics/logbook/7-lb.png)](../assets/images/en/basics/logbook/7-lb.png)

## Entrées des Systèmes Tiers

Le journal accepte de nouvelles entrées des systèmes tiers, par exemple via [imports](../consolidate-data/index.md), [service desks](../evaluation/cmdb-explorer/index.md), [network monitoring](../automation-and-integration/network-monitoring/index.md) et l'[API](../i-doit-pro-add-ons/api/index.md). {/examples}

## Archivage et Restauration des Anciennes Entrées

Que les anciennes entrées doivent être archivées ou non peut être configuré via **Extras → CMDB → Journal → Archiver**. Vous devez indiquer ici depuis combien de jours ces entrées doivent être pour être archivées. Cette fonctionnalité est utile si le journal est très volumineux et que l'évaluation est entravée par de longs temps de chargement. Les entrées archivées sont stockées dans une table de base de données distincte. Cette table est créée soit sur une base de données locataire respective, soit sur une troisième instance de base de données.

[![Archiver et Restaurer les Anciennes Entrées](../assets/images/en/basics/logbook/8-lb.png)](../assets/images/en/basics/logbook/8-lb.png)

L'archivage est effectué via la [Console i-doit](../i-doit-pro-add-ons/api/index.md). Cette étape peut donc également être automatisée. Un exemple correspondant d'un appel et une [liste de paramètres](../automation-and-integration/cli/console/options-and-parameters-cli.md) peuvent être trouvés dans l'article correspondant pour l'option [logbook-archive](../automation-and-integration/cli/console/options-and-parameters-cli.md#logbook-archive).

Exemple:

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

Les entrées archivées peuvent être restaurées pour une évaluation ultérieure. Cet élément peut être trouvé sous **Extras → CMDB → Logbook → Restaurer**.

[![Entrées archivées](../assets/images/en/basics/logbook/9-lb.png)](../assets/images/en/basics/logbook/9-lb.png)

## Date de création / Date de modification

Toutes les modifications apportées aux objets ([créer, modifier, archiver, supprimer, restaurer](./life-and-documentation-cycle.md)) entraînent non seulement une entrée dans le journal, mais également des modifications des [attributs](../glossary.md) **Date de création** et **Date de modification** dans la catégorie **Général** qui est attribuée à tous les types d'objets.

[![Date de création](../assets/images/en/basics/logbook/10-lb.png)](../assets/images/en/basics/logbook/10-lb.png)

Le widget Mes derniers objets modifiés affichant les dernières modifications apportées aux objets peut être ajouté au [tableau de bord](./dashboard-and-widgets.md).

[![Date de modification](../assets/images/en/basics/logbook/11-lb.png)](../assets/images/en/basics/logbook/11-lb.png)

## Définir les autorisations

Le système d'autorisation d'i-doit permet la configuration des personnes (ou groupes de personnes) autorisées à avoir accès en lecture au journal. Par exemple, vous pouvez spécifier que seuls les administrateurs d'i-doit ont l'autorisation de suivre les modifications.

{/*examples*/}
