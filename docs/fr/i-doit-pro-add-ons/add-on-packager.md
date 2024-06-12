# Packageur d'extension

L'idée du Packageur d'extension est de donner à l'utilisateur la possibilité de construire ses propres [extensions](./index.md) complètes. Le Packageur d'extension est entièrement opéré via l'interface utilisateur graphique d'i-doit et aucune compétence en programmation n'est requise.<br>
Les structures que l'utilisateur peut créer en utilisant [Modifier la structure des données](../basics/assignment-of-categories-to-object-types.md) ou le [Gestionnaire de rapports](../evaluation/report-manager.md), par exemple, peuvent être emballées et distribuées sous forme d'extensions.

## Notes générales

**Veuillez ne pas installer et utiliser le Packageur d'extension sur un environnement de production !**

L'emballage des extensions est un processus de développement. Les environnements de production et de développement doivent toujours être séparés.<br>
Entre autres, pour protéger les données de production contre les dommages ou les modifications négligentes.<br>
De plus, les données de production doivent être particulièrement protégées en matière de protection des données.<br>
Si des extensions sont emballées sur des environnements de production, il y a un risque de divulgation accidentelle de données internes ou personnelles.<br>
Ne prenez pas ce risque.<br>
Utilisez soit une installation dédiée, soit créez une copie de votre environnement de production si vous souhaitez emballer des données à partir de là.<br>
Utilisez au moins un client dédié pour vos développements.

Une licence de développement gratuite est fournie dans le cadre du partenariat de développement. Cela peut être utilisé pour le développement d'extensions.

## Installation et Licence

Comme toute extension, l'extension Packageur est installée via le Centre d'administration. L'extension Packageur ne nécessite pas de licence. Cependant, elle ne peut être utilisée qu'avec la version pro.

## Quelles structures peuvent être emballées dans une extension ?

Actuellement, les [structures](../basics/structure-of-the-it-documentation.md) suivantes peuvent être incluses dans une extension avec le Packageur d'extension :

Groupes de types d'objets<br>
Types d'objets<br>
[Catégories personnalisées](../basics/custom-categories.md)<br>
[Rapports](../evaluation/report-manager.md)<br>
Champs de dialogue<br>
[Types de relations](../basics/object-relations.md)

## Créer un modèle structurel d'extension

Le Packageur d'extension peut être accédé comme presque toutes les extensions via le menu Outils.<br>
Ensuite, accédez à la zone des extensions et créez un nouveau modèle structurel en cliquant sur le bouton "Nouveau".

## Informations de base

[![Informations de base](../assets/images/en/i-doit-pro-add-ons/add-on-packager/1-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/1-adp.png)

Dans les informations de base, plusieurs métadonnées peuvent être spécifiées pour l'extension.

|     |     |
| --- | --- |
| **Titre** | Nom de l'extension |
| **Fabricant** | Le nom de votre entreprise ou synonyme |
| **Site Web** | Un lien vers des informations supplémentaires sur l'extension<br>(actuellement non affiché pour l'utilisateur) |
| **Nécessite une licence<br>** | Définit si l'extension doit être soumise à une licence ou non. Les licences ne peuvent être délivrées que via le serveur de licences i-doit. Si vous souhaitez vendre votre extension commercialement, veuillez contacter votre interlocuteur chez synetics GmbH. |
| **Identifiant** | L'identifiant est spécifié en tant que texte libre lors de la création. Une fois enregistré, il est combiné avec le nom du fabricant pour garantir l'unicité.<br>L'identifiant de l'extension est important pour la licence, mais aussi pour la mise à jour ultérieure d'une extension et doit être unique et immuable.<br>Veuillez ne pas utiliser d'espaces ou de caractères spéciaux. |
| **Version minimale requise d'i-doit<br>** | La version 1.11 d'i-doit est saisie par défaut ici. Cette valeur représente la compatibilité minimale actuelle et n'a généralement pas besoin d'être modifiée. |
| **Créé avec Add-on Packager** | Spécifie la version de l'Add-on Packager utilisée pour garantir la compatibilité. |
| **Description** | Description textuelle libre de l'extension |

## Ressources incluses

[![Ressources incluses](../assets/images/en/i-doit-pro-add-ons/add-on-packager/2-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/2-adp.png)

Les structures disponibles peuvent être sélectionnées dans la zone des ressources du modèle structurel. Elles sont répertoriées ci-dessous.

[![Ressources incluses](../assets/images/en/i-doit-pro-add-ons/add-on-packager/3-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/3-adp.png)

Les structures disponibles peuvent être sélectionnées dans la zone des ressources du modèle structurel.

## Groupes de types d'objets

[![Groupes de types d'objets](../assets/images/en/i-doit-pro-add-ons/add-on-packager/4-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/4-adp.png)

Les groupes de types d'objets sont les regroupements ancrés dans la navigation principale.<br>
Si un groupe de types d'objets est sélectionné, seuls le groupe et l'attribution des types d'objets au groupe de types d'objets sont copiés. Les types d'objets ne sont pas copiés en tant que tels, ils doivent être sélectionnés explicitement au point suivant.

## Types d'objets

[![Types d'objets](../assets/images/en/i-doit-pro-add-ons/add-on-packager/5-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/5-adp.png)

Les types d'objets sont la typologie logique des objets. Un certain nombre de types d'objets sont livrés en standard (serveurs, clients, ...).<br>
Vous ne pouvez sélectionner que les types d'objets que vous avez créés vous-même. Avec les types d'objets sélectionnés, l'attribution des catégories est également transférée à l'extension, mais pas les catégories en tant que telles. Celles-ci doivent être sélectionnées explicitement au point suivant.

## Catégories

Les catégories sont des regroupements logiques autour des attributs individuels.

[![Catégories](../assets/images/en/i-doit-pro-add-ons/add-on-packager/6-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/6-adp.png)

Des catégories personnalisées peuvent être créées via l'administration dans la zone "Catégories définies par l'utilisateur".<br>
Seules les catégories définies par l'utilisateur peuvent être sélectionnées.

## Rapports

[![Rapports](../assets/images/en/i-doit-pro-add-ons/add-on-packager/7-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/7-adp.png)

Les rapports du Gestionnaire de rapports peuvent être sélectionnés ici.

## Champs Dialog+

[![Champs Dialog+](../assets/images/en/i-doit-pro-add-ons/add-on-packager/8-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/8-adp.png)

Les champs Dialog+ sont des champs qui offrent à l'utilisateur un menu déroulant avec des valeurs fixes, mais donnent la possibilité d'ajouter du contenu personnalisé.<br>
Si j'ai créé mes propres valeurs dans un champ Dialog+, je peux sélectionner le champ ici pour que les valeurs soient livrées avec l'extension.

## Types de relations

[![Types de relations](../assets/images/en/i-doit-pro-add-ons/add-on-packager/9-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/9-adp.png)

Les types de relations peuvent être créés ou modifiés via l'administration.<br>
À ce stade, vous pouvez sélectionner les types de relations en tant que tels, y compris leurs propriétés, pour les livrer avec l'extension.

## Création du fichier ZIP de l'extension finalisée

[![Création du fichier ZIP de l'extension finalisée](../assets/images/en/i-doit-pro-add-ons/add-on-packager/10-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/10-adp.png)

Dans la zone inférieure, l'extension peut maintenant être créée en tant que fichier ZIP.<br>
Une version de publication doit être spécifiée ici, qui doit être basée sur la Sémantique de Version (par exemple, 1.2.5).<br>
Également pour chaque version, il y a une entrée de journal des modifications, qui sera ajoutée ainsi qu'une date de publication. Lorsque le package est créé, vous serez automatiquement redirigé vers la page du package de l'extension.

## Paquets

[![Paquets](../assets/images/en/i-doit-pro-add-ons/add-on-packager/11-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/11-adp.png)

Les paquets sont les fichiers ZIP finis des extensions. Chaque version de chaque extension a sa propre page de package où l'extension peut être téléchargée en tant que fichier ZIP.

[![Paquets](../assets/images/en/i-doit-pro-add-ons/add-on-packager/12-adp.png)](../assets/images/en/i-doit-pro-add-ons/add-on-packager/12-adp.png)

## Versions

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.3 | 2023-11-07 | [Bug] Les types d'objets personnalisés ne sont pas remplacés dans les conditions du rapport<br/>[Bug] Erreur HTTP 500 lors de la désinstallation de l'extension via le Centre d'administration |
| 1.2.1 | 2023-08-22 | [Bug] Les boutons de contenu ne fonctionnent pas dans certains navigateurs<br>[Bug] L'utilisateur ne peut pas télécharger le fichier zip de l'extension |
| 1.2 | 2022-09-05 | [Tâche] Compatibilité PHP 8.0<br>[Tâche] Compatibilité de conception |
| 1.1.1 | 2022-07-27 | [Bug] L'emballage ne fonctionne pas avec les champs de dialogue de catégorie personnalisée+ |
| 1.1 | 2022-02-21 | [Amélioration] Ajouter les catégories du Gestionnaire de rapports à l'extension<br>[Bug] Message d'erreur lors de la création d'un package avec des ressources de Listener Dialog Plus "Colonne inconnue '\*\_\_sort' dans la liste des champs'"<br>[Bug] Les fichiers d'importation CSV ne sont pas copiés correctement |
| 1.0.1 | 2020-05-04 | [Bug] Les packages avec des catégories de valeurs multiples personnalisées deviennent des catégories de valeurs uniques lors de l'importation |
| 1.0 | 2019-10-21 | Première version |
