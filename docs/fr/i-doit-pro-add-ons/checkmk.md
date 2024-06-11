# CheckMK

[![Logo de Check_MK](../assets/images/en/i-doit-pro-add-ons/checkmk/1-cmk.gif)](../assets/images/en/i-doit-pro-add-ons/checkmk/1-cmk.gif){/*examples*/}

Check_MK est un logiciel de [Surveillance Réseau](../automation-and-integration/network-monitoring/index.md) qui peut être configuré depuis i-doit.

L'exportation fournit à Check_MK des fichiers de configuration WATO. WATO est l'interface de configuration de Check_MK qui gère les modifications de la configuration de surveillance et vérifie leur validité. Les configurations contiennent les adresses IP ou le nom DNS des hôtes et/ou des clusters et de leurs membres à exporter, ainsi que les propriétés des hôtes associées (tags) et les contacts liés. D'autres configurations spécifiques à la surveillance restent dans Check_MK.

L'avantage de le remplir avec i-doit est que vous n'avez pas à vous soucier de la maintenance des données deux fois et que les propriétés des hôtes, qui déterminent la surveillance dans Check_MK en fonction de règles, peuvent être générées automatiquement grâce aux informations CMD, comme par exemple l'emplacement d'un objet.

!!! attention "Attention"
    L'interface prend en charge officiellement Check_MK jusqu'à la version 1.4, toutes les versions plus récentes seront prises en charge par le [module complémentaire Check_MK 2](./checkmk2/index.md).
    Il est donc incertain quelles fonctions/zones de l'interface fonctionneront correctement avec les versions de Check_MK > 1.4.

## Configuration de base

Pour Check_MK, une configuration doit être enregistrée dans **Administration → Surveillance et interfaces → Surveillance → Exporter la configuration** dans i-doit. Le chemin local définit un chemin absolu ou relatif (par exemple, pour l'installation de i-doit) dans le système de fichiers dans lequel la configuration générée dans i-doit doit être déposée. Le lien vers l'outil de surveillance donne un lien de base pour générer des liens à partir de i-doit vers l'instance de surveillance.

D'autres paramètres de configuration sont ouverts après avoir sélectionné Check_MK comme type.

**Exporter les contacts assignés** permet de stocker les contacts qui ont été assignés aux [objets](../basics/structure-of-the-it-documentation.md) correspondants à ce rôle dans la configuration exportée de l'objet. Dans ce contexte, le [titre de l'objet](../basics/unique-references.md) des contacts est également exporté.

Dans le champ de texte brut **Site**, vous pouvez définir un site vers lequel la configuration exportée est transmise. Pour cela, **Multisite (Surveillance distribuée)** doit être réglé sur "**Oui**". 

{ /* examples */ }

Lorsque vous verrouillez des hôtes ou des dossiers, la configuration exportée ne peut plus être modifiée dans Check_MK. Cela est utile pour empêcher Check_MK de faire des modifications qui seraient écrasées à nouveau lors de la prochaine exportation.

Les sites qui sont sélectionnables comme **Site principal** sont ceux qui ont été ajoutés via plusieurs configurations d'exportation. Cette entrée peut être laissée vide s'il n'y a qu'une seule configuration.

[![Configuration de base](../assets/images/en/i-doit-pro-add-ons/checkmk/2-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/2-cmk.png)

## Catégories

En général, le [dossier de catégorie](../basics/structure-of-the-it-documentation.md) **Check_MK (Hôte)** doit être attribué aux [types d'objet](../basics/structure-of-the-it-documentation.md) qui vont être utilisés via **[Modifier la structure des données](../basics/assignment-of-categories-to-object-types.md)**.

Une configuration d'exportation doit être choisie et un nom d'hôte / une adresse d'hôte doit être défini dans la catégorie **Check_MK (HÔTE)**. De plus, l'exportation de l'adresse IP peut être empêchée, par exemple, si elle a été fournie par le DHCP et change.


[![Catégories](../assets/images/en/i-doit-pro-add-ons/checkmk/3-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/3-cmk.png)

## Balises d'hôte

Les **Balises d'hôte** sont attribuées et affichées via la catégorie du même nom. Elles sont distinguées comme suit :

-   **Balises d'hôte** - attribution simple et manuelle de balises (et donc statiquement)
-   **Balises CMDB** - balises définies par un [attribut](../basics/structure-of-the-it-documentation.md) de la CMDB
-   **Balises dynamiques** - balises d'hôte générées par des règles

Tous les types de propriétés d'hôte sont configurés via le menu **Extras** de **Check_MK**.

[![Extras Check_MK](../assets/images/en/i-doit-pro-add-ons/checkmk/4-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/4-cmk.png)

Les propriétés d'hôte statiques sont gérées manuellement. Les propriétés par défaut de Check_MK sont déjà livrées de manière prédéfinie.

Les propriétés CMDB utilisent le contenu de la CMDB. Seuls les types d'objets assignés au dossier de catégorie Check_MK sont affichés dans la configuration. Des attributs individuels peuvent être sélectionnés ici. Vous pouvez configurer une définition globale qui s'applique à tous les types d'objets répertoriés, qui ne sont pas associés à une configuration spéciale qui ignore la définition globale. Le titre d'objet de l'emplacement d'un objet peut être ajouté en tant que balise aux propriétés d'hôte via l'élément **Exporter la propriété d'emplacement générique**.

Dans l'exemple suivant, l'attribut **Système d'exploitation** du CDMB est converti en une propriété d'hôte.

[![Système d'exploitation](../assets/images/en/i-doit-pro-add-ons/checkmk/5-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/5-cmk.png)

Le serveur d'exemple est assigné au système d'exploitation Debian GNU/Linux. Cette valeur est transférée à la propriété d'hôte correspondante lors de l'exportation de la configuration.

[![serveur d'exemple](../assets/images/en/i-doit-pro-add-ons/checkmk/6-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/6-cmk.png)

Les propriétés dynamiques fonctionnent de manière similaire à l'exception qu'elles sont basées sur des règles. Dans l'exemple suivant, le type d'un objet est évalué et transmis lors de l'exportation de la configuration. Si l'objet est un serveur, il reçoit les balises d'hôte Réseau local et DMZ dans cet exemple spécifique.

[![exemple spécifique](../assets/images/en/i-doit-pro-add-ons/checkmk/7-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/7-cmk.png)

## Catégorie des Propriétés de l'Hôte

{/*examples*/}

Les propriétés d'hôte dynamiques sont affichées et les propriétés d'hôte statiques manuelles sont attribuées dans la catégorie **Propriétés d'hôte** d'un objet.

## Catégorie d'attribution de service

!!! info "Module d'analyse"
    Cette catégorie ne peut être utilisée que lorsque le module d'analyse est installé.

L'**attribution de service** est utilisée pour assigner des logiciels installés à des vérifications de service qui sont lues via [Livestatus](../automation-and-integration/network-monitoring/fetch-data-with-livestatus-ndo.md). Cela est appliqué pour calculer les services informatiques affectés en utilisant le module d'analyse et les pannes signalées par la surveillance. Dans cette catégorie, une vérification de surveillance est "mariée" à un logiciel installé sur le système, pour ainsi dire. De cette manière, les services informatiques affectés directement ou indirectement par la défaillance technique peuvent être détectés dans le module d'analyse.

## Export de la configuration

Avec **Extras → Check_MK → Export Check_MK**, vous pouvez initier manuellement l'exportation de la configuration WATO.

Des fichiers sont générés au format .mk qui peuvent être transférés vers l'instance Check_MK. Tout d'abord, ils sont enregistrés dans le dossier qui a été saisi dans la configuration d'exportation. Pour un transfert facile vers le site OMD, les données sont également _compressées_ en fichiers .zip et en tarball.

La définition de la structure d'export permet de transférer les objets exportés dans une structure de dossiers vers Check_MK. Ici, vous pouvez choisir si les emplacements ou les types d'objets doivent être enregistrés sous forme de dossiers.

## Script de transfert

Un script shell nommé **checkmk_transfer.sh** est situé dans le chemin racine de l'installation d'i-doit. Il est configuré avec les accès correspondants au site OMD, puis transfère la configuration d'i-doit vers le WATO de manière automatisée.

À cette fin, il utilise le [Contrôleur i-doit](../automation-and-integration/cli/index.md) et établit une connexion SSH avec l'instance Check_MK. Il transfère les fichiers vers le site OMD et les extrait automatiquement. Ensuite, il notifie à WATO que des modifications ont été apportées.

Une authentification par clé publique entre l'instance i-doit et le site OMD de Check_MK est requise pour le transfert via SSH. Un guide détaillé à ce sujet est disponible dans le répertoire d'installation d'i-doit sous **docs/checkmk/README**.

## Versions

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.1 | 2022-09-05 | [Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception |
| 1.0.2 |     | [Amélioration] Compatibilité avec i-doit 1.16 |
| 1.0.1 | 2019-10-14 | [Bogue] Édition de liste des catégories Check_MK<br>[Bogue] Créer de nouvelles entrées de catégorie dans la catégorie d'édition de liste "Paramètre d'exportation (sous-catégorie de Check_MK (Hôte))"<br>[Bogue] Ajouter plus de balises CMDB dynamiques<br>[Bogue] Exporter des balises d'hôte dynamiques avec des caractères spéciaux<br> |
| 1.0 | 2018-12-17 | [Amélioration] L'extension est installable<br>[Amélioration] L'extension est désinstallable<br>[Amélioration] L'extension est activable<br>[Amélioration] L'extension est désactivable<br>[Changement] Extension de Check_MK<br> |

Please provide the Markdown content you would like me to translate into French.
