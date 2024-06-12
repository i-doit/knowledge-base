# Nagios

Nagios est un logiciel de [surveillance réseau](./index.md) qui peut être configuré à partir des données de la [documentation informatique](../../glossary.md). De cette manière, vous pouvez éviter que les données doivent être maintenues deux fois et vous pouvez minimiser les erreurs. La fonction d'exportation disponible dans i-doit permet la création de configurations complètes ou partielles. À cette fin, vous créez manuellement des configurations Nagios dans l'interface i-doit ou vous les remplissez automatiquement avec des valeurs.

!!! info "Compatibilité"
    Les données exportées sont compatibles avec Nagios Version 3 et Icinga Version 1. La version 4 de Nagios n'est pas entièrement compatible. D'autres versions de Nagios ne sont pas prises en charge.

## Configuration de base

Vous enregistrez la configuration sous **Administration → Surveillance et interfaces → Surveillance → Configuration d'exportation**. Le **Chemin local** définit un chemin absolu ou relatif vers l'installation i-doit dans le système de fichiers dans lequel la configuration créée par i-doit doit être stockée. Le **Lien vers votre outil de surveillance** spécifie un lien de base pour générer des liens vers l'instance de surveillance à partir de i-doit.

[![Configurations de base](../../assets/images/en/automation-and-integration/network-monitoring/nagios/1-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/1-nag.png)

## Configurations de base 

Vous pouvez créer les configurations de base sous **Extras → Nagios**.

[![Configurations de base](../../assets/images/en/automation-and-integration/network-monitoring/nagios/2-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/2-nag.png)

Cela inclut la configuration principale, les modèles de service et les modèles d'hôte ainsi que d'autres paramètres de base. Toutes les valeurs sont identiques à la configuration de Nagios.

## Configuration dans les objets 

Toutes les configurations supplémentaires sont effectuées dans les [objets](../../basics/structure-of-the-it-documentation.md). Le cas le plus simple est la configuration des paramètres de l'hôte. À cette fin, le dossier **Nagios (Hôte)**[catégorie](../../basics/structure-of-the-it-documentation.md) doit être assigné au type d'objet souhaité via l'**[Éditer la structure des données](../../basics/assignment-of-categories-to-object-types.md)**.

Dans la catégorie **Définition de l'hôte**, une définition d'hôte pour Nagios peut être définie soit via un modèle Nagios, soit via une configuration individuelle.

[![Définition de l'hôte](../../assets/images/en/automation-and-integration/network-monitoring/nagios/3-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/3-nag.png)

Le concept de modèles d'hôtes et de modèles de services est identique à la configuration originale de Nagios.

Les vérifications de service définies dans la configuration de base sont attribuées à un hôte via la catégorie **Affectation de service**.

Cela conduit ensuite à la configuration d'une affectation classique d'hôte/service. De plus, il existe une deuxième façon d'attribuer des services aux hôtes, à savoir en les héritant à travers un objet logiciel.

Une vérification de service est attribuée à un objet logiciel dans la catégorie **Nagios (Applications)**, de manière analogue à l'attribution à un hôte.

Si cette application est installée sur un hôte via la catégorie **Affectation de logiciel**, alors la vérification de service est automatiquement héritée par l'hôte.

De plus, des configurations Nagios supplémentaires peuvent être trouvées dans les objets **Personnes** ainsi que dans les **groupes de personnes** et les **groupes d'objets**.

## Export de la Configuration Nagios

Les configurations Nagios peuvent être exportées manuellement via **Administration → Surveillance et interfaces → Export Nagios**. À cette fin, vous sélectionnez une configuration d'exportation et éventuellement vous pouvez également choisir une validation des paramètres.

[![Export de la Configuration Nagios](../../assets/images/en/automation-and-integration/network-monitoring/nagios/4-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/4-nag.png)

La validation vérifie les dépendances de base, par exemple, si une adresse IP a été saisie pour un hôte, etc. Cette vérification est censée empêcher la génération de configurations Nagios corrompues. Cependant, ce n'est pas une protection sûre à 100 %, vous devriez toujours exécuter un test avec le binaire Nagios pour vérifier la configuration générée.

Les fichiers de configuration sont stockés selon le chemin configuré sur le système de fichiers et correspondent aux valeurs qui ont été configurées dans les catégories.

L'exportation des fichiers peut être automatisée via le [contrôleur](../cli/index.md) bien sûr. À cette fin, le gestionnaire **nagios_export** est exécuté en indiquant l'ID de configuration d'exportation en utilisant le paramètre **-n ID**.

## Journal des modifications

| Version | Date       | Journal des modifications                                                                                                                                                                                                      |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.1.1   | 2023-08-22 | [Amélioration] Compatibilité PHP 8.1                                                                                                                                                                                           |
| 1.1     | 2022-09-05 | [Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception                                                                                                                                                          |
| 1.0.3   |            | [Amélioration] Compatibilité avec i-doit 1.16                                                                                                                                                                                   |
| 1.0.2   |            | [Bogue] La catégorie Nagios ne peut pas être ouverte parmi les personnes  <br>[Bogue] En cliquant sur "Modifier" après avoir enregistré un objet, la navigation se fait vers la liste des objets  <br>[Bogue] Cliquer sur "Modifier" dans la liste des objets ne devrait être possible que si l'objet est sélectionné |
| 1.0.1   |            | [Bogue] La création des tables Nagios est effectuée dans le mauvais ordre                                                                                                                                                       |
| 1.0     |            | [Changement] Ajouter Nagios en tant qu'extension                                                                                                                                                                               |


