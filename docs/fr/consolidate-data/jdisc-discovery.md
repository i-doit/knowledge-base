# Découverte JDisc

[JDisc Discovery](http://www.jdisc.com/en/) réalise un inventaire de l'ensemble des réseaux et reconnaît tous les systèmes d'exploitation importants (y compris HP-UX, Solaris et AIX). Il reconnaît le matériel et les logiciels, les réseaux IP, les domaines Windows et Active Directory. De plus, JDisc Discovery identifie toutes les technologies de virtualisation importantes, ainsi que de nombreux environnements de cluster.

## Installation

L'installation des composants serveur JDisc sur un système Microsoft Windows (de préférence la version serveur) est nécessaire pour son fonctionnement. Les fichiers d'installation nécessaires peuvent être téléchargés via l'adresse web suivante :

[https://jdisc.com/downloads/](https://jdisc.com/downloads/)

Pendant la configuration, vous serez invité à indiquer les mots de passe à utiliser pour le SGBD PostgreSQL, qui est utilisé en arrière-plan. Cela concerne le compte administratif **postgres** et le compte **postgresro**, qui n'a que des autorisations de lecture pour la base de données JDisc. Ce dernier compte est requis pour l'interface avec i-doit. De plus, lors de la configuration, vous devez spécifier que l'instance PostgreSQL doit être accessible depuis l'extérieur. Par défaut, elle écoute sur le port **25321**. Vous devez activer ce port dans le pare-feu Windows.

Le documentation de JDisc est disponible sur [https://jdisc.com/support/documentation/](https://jdisc.com/support/documentation/).
Si vous avez des questions concernant l'installation ou la configuration de JDisc, veuillez contacter le support du fabricant [https://jdisc.com/support/](https://jdisc.com/support/).

!!! info "JDisc WebService voir [JDisc FAQ](https://jdisc.com/support/faq/)"
    > Le WebService implémente l'accès à certaines fonctionnalités de JDisc en utilisant une interface SOAP sur le port 9000. Cependant, avec la nouvelle API basée sur GraphQL, le service SOAP est obsolète. I-Doit peut accéder à notre API GraphQL pour effectuer les mêmes tâches qu'avec le service Web à partir de la version i-doit 22.<br>
    > Il suffit de changer le protocole dans i-doit en HTTPS et d'utiliser le port 443, puis i-doit utilisera l'API GraphQL et vous pourrez désinstaller l'ancien module d'extension du service Web.<br>
    > L'API GraphQL offre deux avantages majeurs :<br>
    > Elle utilise HTTPS par défaut (alors qu'avec le service Web, HTTP était utilisé par défaut)<br>
    > C'est une API moderne et puissante qui vous permet d'automatiser tout dans JDisc.<br>

## Configuration 

La configuration de l'interface se trouve sous **Administration → Importation et interfaces → JDISC → Configuration JDisc**. Vous pouvez définir un nombre quelconque d'instances de découverte JDisc. Cela permet des scénarios d'inventaire complexes avec des réseaux séparés.

[![interface-de-decouverte-jdisc](../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)

!!! info "Archiver les objets obsolètes"
    Pour archiver les objets qui n'ont pas été vus par JDisc depuis un certain nombre de jours, la valeur seuil et l'unité de la valeur seuil doivent être définies dans **Administration → Gestion du [Nom du locataire] → Paramètres pour [Nom du locataire] → JDisc**.

### Configuration JDisc 

| Paramètre                                | Commentaire                                                                                                                                                                         |
| ---------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Serveur par défaut**                   | Est l'instance impliquée qui doit être suggérée pour une importation manuelle ?                                                                                                      |
| **Hôte**                                 | Nom d'hôte / FQDN ou adresse IP de l'instance JDisc ; cela doit être accessible depuis l'instance i-doit.                                                                           |
| **Port**                                 | Port ouvert de l'instance PostgreSQL qui s'exécute en arrière-plan de la découverte JDisc.                                                                                           |
| **Base de données**                      | JDisc Discovery utilise la base de données **inventory** par défaut.                                                                                                                  |
| **Nom d'utilisateur**                    | Entrez l'un des comptes demandés lors de la configuration. Vous pouvez utiliser le compte **postgresro** avec des droits limités, car i-doit n'a besoin que d'un accès en lecture à la base de données. |
| **Mot de passe**                         | Le mot de passe attribué lors de la configuration qui correspond au compte utilisé.                                                                                                 |
| **Autoriser l'importation d'une ancienne version de JDisc ?** | Cette requête n'est pertinente que pour les anciennes versions de JDisc Discovery.                                                                                                   |

Après avoir enregistré les paramètres, vous pouvez tester la connexion à la base de données JDisc avec le bouton **Vérifier la connexion**.

Pour archiver les objets qui n'ont pas été vus par JDisc depuis un certain nombre de jours, par exemple X jours, la valeur seuil et l'unité de la valeur seuil doivent être définies sous **Administration → Gestion de [Nom du locataire] → Paramètres pour [Nom du locataire] → JDisc**.

| Paramètre          | Remarque                                                                                                                                     |
| ------------------ | -------------------------------------------------------------------------------------------------------------------------------------------- |
| **Seuil**          | Insérez un nombre. Lorsque le paramètre est défini, les objets qui n'ont pas été vus par JDisc dans cette période seront archivés à l'importation. |
| **Unité de seuil** | Jours, Semaines ou Mois                                                                                                                      |

### Paramètres de découverte

L'utilisateur peut activer une analyse avec l'instance JDisc configurée avec i-doit. À cette fin, le service web de découverte JDisc est utilisé, à condition qu'il soit installé et activé.

| Paramètre    | Commentaire                                     |
| ------------ | ---------------------------------------------- |
| **Nom d'utilisateur** | Le compte à utiliser pour le service web. |
| **Mot de passe** | Mot de passe du compte                    |
| **Port**     | Utilisez **443** pour GraphQL                     |
| **Protocole** | Utilisez: **https** pour GraphQL                  |

Après avoir enregistré les paramètres, vous pouvez tester si la configuration a été réussie avec le bouton **Vérifier la connexion**.

## Profils JDisc

Les profils JDisc d'i-doit offrent la possibilité de définir la connexion des types d'objets et de leurs attributs entre JDisc et i-doit. Sous **Administration → Import et interfaces → JDISC → Profils JDisc**, vous pouvez spécifier comment les objets trouvés par JDisc trouvent leur chemin dans la documentation informatique.

[![jdisc-discovery-profiles](../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)

L'installation par défaut d'i-doit fournit déjà des profils prédéfinis. Parmi ces profils prédéfinis se trouve le profil **Importation complète** qui a pour but d'importer toutes les données dans i-doit qui ont été inventoriées par JDisc.

!!! note "Créez vos propres profils"
    Gardez à l'esprit que vous devriez modifier ces profils pour les adapter à votre installation et aux types d'objets disponibles de JDisc qui sont associés aux types d'objets d'i-doit.

### Configuration générale

| Option           | Description                                                                                               |
| ---------------- | --------------------------------------------------------------------------------------------------------- |
| **Serveur JDisc** | Quelle instance de JDisc souhaitez-vous présélectionner lors de l'importation ? Voir aussi "Configuration" comme expliqué ci-dessus. |
| **Titre**        | Nom du profil                                                                                             |
| **Description**  | Description du profil                                                                                     |

### Attribution de type d'objet

Pour chaque type dans JDisc, vous pouvez sélectionner un type d'objet équivalent dans i-doit. Si aucun n'est sélectionné, les appareils de ce type ne seront pas importés. L'ordre des allocations est observé lors de l'importation. Afin d'identifier une allocation, la liste est traitée de haut en bas. Pour chaque ligne, la matrice a la structure suivante :

| Type JDisc                                                                                                                                           | Système d'exploitation JDisc                                                                                                                                                                                                                                           | Transformation du titre de l'objet                                                                                                                                                                                                                                      | Ajout de FQDN                                 | Filtre de port                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Profil de correspondance d'objet                                                                                                                               | Type d'objet                                                                                                                         | Emplacement                                                                                                                                              | Actions                                                                         |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| Type d'appareil de JDisc à prendre en compte lors de l'importation<br><br>La liste est lue à partir de l'instance JDisc spécifiée et conservée en mémoire tampon. | Systèmes d'exploitation qui ont déjà été inventoriés par JDisc.<br><br>Souvent, le type d'appareil n'est pas suffisant pour une affectation à un type d'objet, c'est pourquoi vous pouvez entrer le système d'exploitation en option.<br><br>Vous pouvez saisir des jokers (\*) dans ce champ. | Convertit le titre de l'objet.<br><br>**"Tel quel" Inchangé** : Le nom de l'objet n'est pas modifié<br><br>**Lettres en majuscules** : Le nom complet de l'objet est converti en majuscules.<br><br>**Lettres en minuscules** : Le nom complet de l'objet est converti en minuscules. | Ajoute un ajout de FQDN au titre de l'objet. | Quels ports réseau souhaitez-vous importer?<br><br>**Importation normale** : Tous les ports physiques et logiques sont importés.<br><br>**Aucune importation** : Dans le champ de texte, vous pouvez saisir les noms de port à ignorer.  <br>Le champ peut être utilisé avec des jokers (\*). (Exemple : Nom du port : Loopback → Les ports avec le nom Loopback ne sont pas importés)<br><br>**Port logique**/ **Port physique**/ **Port FC** : Seuls les ports nommés dans le champ de texte sont importés.<br><br>Vous pouvez combiner les critères de sorte que seuls certains ports physiques et certains ports logiques soient pris en compte. | [Quelle stratégie souhaitez-vous utiliser](object-identification-during-imports.md) pour mettre à jour les objets déjà documentés dans i-doit?<br>**Des critères de filtre supplémentaires peuvent être trouvés dans le profil de correspondance d'importation** | Les appareils importés sont attribués à ce type d'objet.<br><br>Si vous ne sélectionnez pas de type d'objet, les appareils de ce type seront ignorés. | Les objets qui répondent aux critères mentionnés ici sont affectés à un emplacement spécifique lors de l'importation. Cela est réalisé avec la catégorie **Emplacement**. | Ajouter une nouvelle attribution, dupliquer une attribution existante ou supprimer une attribution. |

### Options Supplémentaires

| Option                                                                            | Description                                                                                                                                                                                                                                |
| --------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Sélectionner les catégories**                                                             | Quelles [catégories](../basics/structure-of-the-it-documentation.md) souhaitez-vous remplir lors de l'importation ? Seules les catégories prises en charge sont répertoriées.                                                                                                |
| **Filtre MAC**                                                              | Vous pouvez sélectionner une liste blanche ou une liste noire pour les adresses MAC. Une adresse MAC par ligne.  |
| **Importer les interfaces réseau en tant que**                                                  | Vous pouvez mapper les interfaces réseau inventoriées dans différentes catégories.                                                                                                                                                                        |
| **Inclure les logiciels**                                                              | Souhaitez-vous importer les logiciels inventoriés en tant qu'objet de type **Applications** ?                                                                                                                                                                |
| **Inclure les logiciels** -> **Emplacement du logiciel**            | Visible uniquement si **Considérer le logiciel lors de l'importation** est activé. Définit l'emplacement des applications à un emplacement spécifique. Utile si les autorisations sont basées sur les emplacements. |
| **Inclure les licences logicielles**                                                     | Souhaitez-vous importer les licences inventoriées en tant qu'objet de type **Licences** ?                                                                                                                                                                    |
| **Importer les services système**                                                        | Souhaitez-vous importer les services inventoriés en tant qu'objet de type **Services Système** ?                                                                                                                                                             |
| **Importer les abonnements cloud**                                                    | Souhaitez-vous importer les données Cloud inventoriées ?<br> Les données sont importées dans la catégorie **Abonnements attribués**. La catégorie inverse **Abonnements** est assignée aux objets Licence.                                                  |
| **Importer les utilisateurs cloud inconnus**                                                    | Utilisé uniquement si l'option "Importer les abonnements cloud" est active.                                                                                                                                                                            |
| **Importer les points de connexion**                                                   | Les connexions ne sont pas importées dans la catégorie câblage, mais dans la catégorie "Point de connexion". Cela permet de distinguer entre le câblage manuel et le câblage automatique par JDisc.                                                 |
| **Utiliser une modélisation de base de données simple ?**                                                | Doit-on utiliser la logique de base de données nouvelle ou ancienne ?                                                                                                                                                                                          |
| **Inclure les réseaux de couche 3**                                                          | Souhaitez-vous importer les réseaux IP inventoriés en tant qu'objet de type **Réseaux de couche 3** ?                                                                                                                                                                 |
| **Inclure les réseaux de couche 3** -> **Filtre de couche 3**         | Visible uniquement si **Inclure les réseaux de couche 3** est activé. Spécifiez la plage dans les formats suivants : 127.0.0.1-127.0.10.255 ou 10.40.55.0/24 ou 10.40.55.7. Une règle par ligne.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Inclure les réseaux de couche 3** -> **Emplacement du réseau**       | Visible uniquement si **Inclure les réseaux de couche 3** est activé. Définit l'emplacement des objets de couche 3 à un emplacement spécifique. Utile si les autorisations sont basées sur les emplacements. |
| **Filtre de couche 3**                                                                | Spécifiez la plage dans les formats suivants : 127.0.0.1-127.0.10.255 ou 10.40.55.0/24 ou 10.40.55.7. Une règle par ligne.                                                                                                                      |
| **Conserver les types d'adresses IP**                                                         | Les adresses IPv4, les adresses IPv6, les adresses de boucle locale, les adresses virtuelles doivent-elles être importées ?                                                                                                                                                  |
| **Importer le type pour les adresses IP DHCP**                                             | Les adresses attribuées via DHCP doivent-elles être écrasées ?                                                                                                                                                                                         |
| **Inclure les VLans**                                                                 | Souhaitez-vous importer les VLans inventoriés en tant qu'objet de type **Réseaux de couche 2** ?                                                                                                                                                                   |
| **Inclure les clusters**                                                              | Souhaitez-vous importer les environnements (de virtualisation) en tant qu'objet de type **Cluster** ?                                                                                                                                                            |
| **Inclure les connexions Blade/Châssis lors de l'importation <br>**                          | Souhaitez-vous inclure les objets de type **Serveur Blade** aux objets de type **Châssis Blade** lors de l'importation ?                                                                                                                        |
| **Type d'objet des modules assignés dans une unité de lame/châssis**               | Lorsqu'un châssis de lame ou un châssis de commutation a été inventorié, vous pouvez attribuer les modules à un certain type d'objet lors de l'importation.                                                                                                               |
| **Mettre à jour le type d'objet des modules assignés**                                | Les types d'objets des modules assignés d'un périphérique de lame/châssis doivent-ils être mis à jour ?                                                                                                                                                      |
| **Importer les attributs personnalisés**                                                      | Lorsque vous maintenez des attributs personnalisés (**Attributs personnalisés**) dans JDisc Discovery, vous pouvez les importer dans i-doit. Après l'importation, ils sont affichés dans la catégorie **Attributs personnalisés JDisc**.                                          |
| **Considérer les modèles par défaut des types d'objets (uniquement pour les objets nouvellement créés)** | Lorsqu'un nouvel objet est créé, il est possible de considérer automatiquement les [modèles](../efficient-documentation/templates.md). La sélection du modèle est effectuée dans la configuration du type d'objet.                                       |
| **Changer le statut CMDB des objets en**                                              | Les objets déjà existants peuvent recevoir un certain [statut CMDB](../basics/life-and-documentation-cycle.md) lors de la mise à jour. Si vous ne souhaitez pas modifier le statut CMDB, sélectionnez l'option **Conserver le statut CMDB**.                              |
| **Filtre de logiciels**                                                               | Vous pouvez entrer une liste blanche ou une liste noire d'applications logicielles que vous souhaitez importer (Liste blanche) ou ne pas importer (Liste noire). Vous pouvez saisir des caractères génériques (\*) dans ce champ. La liste des titres est séparée par des virgules. |
| **Utiliser le filtre comme une expression régulière**                                              | Les types d'objets des modules assignés d'un périphérique de lame/châssis doivent-ils être mis à jour ?                                                                                                                                                      |
| **Utiliser la famille d'OS (si disponible) au lieu de la version d'OS comme titre d'objet**            | Pour l'importation de logiciels, utilisez la famille de logiciels comme titre d'objet au lieu de la version du logiciel. Par exemple, au lieu de "Windows Server 2008 Standard", seulement "Windows" avec "Server 2008 Standard" en tant que variante.                                        |
| **Mettre à jour le type d'objet**                                                            | Lorsque le périphérique existe déjà en tant qu'objet dans i-doit, vous pouvez déterminer si le type d'objet doit être mis à jour à l'aide de l'attribution (voir ci-dessus) ou non.                                                                          |
| **Mettre à jour le titre de l'objet**                                                           | Le titre de l'objet doit-il être mis à jour lors de l'importation ?                                                                                                                                                                                          |
| **Utiliser le nom d'hôte comme titre d'objet au lieu du FQDN ?**                                 | Si les périphériques ont un FQDN, ils sont résolus jusqu'au nom d'hôte.                                                                                                                                                                            |
| **Hériter de l'emplacement de l'objet parent**                                             | Les périphériques qui sont physiquement connectés à un autre périphérique reçoivent automatiquement l'emplacement du périphérique connecté.                                                                                                                        |

Catégories spécifiques à JDisc ou ayant des informations connexes :

-   [Abonnements attribués](../basics/categories-and-attributes.md)
-   [Source de données](../basics/categories-and-attributes.md)
-   [Attributs personnalisés JDisc](../basics/categories-and-attributes.md)
-   [Informations sur les appareils JDisc](../basics/categories-and-attributes.md)
-   [Découverte JDisc](../basics/categories-and-attributes.md)
-   [Réseau → Point de connexion](../basics/categories-and-attributes.md)
-   [Abonnements](../basics/categories-and-attributes.md)
-   [Droits d'assistance](../basics/categories-and-attributes.md)

### Identifiant personnalisé

!!! attention "Règle de correspondance"
    Le `deviceid` de JDisc est toujours utilisé pour identifier les objets.

Le `deviceid` de JDisc doit être attribué avec le type JDisc lorsque l'objet est créé dans la catégorie **Identifiant personnalisé**. Cela est destiné à identifier les objets ultérieurement.
Si aucune donnée n'est disponible, le profil de correspondance des objets est utilisé.

## Importation de données via l'interface Web

L'importation des contenus de données depuis JDisc est effectuée via **Extras → Importer → JDisc**.

[![jdisc-discovery-import](../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)

Avant d'exécuter le processus d'import, vous devez définir les paramètres d'import.<br>
Comme il est possible d'appliquer plusieurs serveurs JDisc, vous devez sélectionner le serveur JDisc dans la première étape. Le profil que vous avez défini auparavant peut également être sélectionné pour influencer les contenus importés et leur utilisation. De plus, vous pouvez définir le mode d'import. Le mode d'import **Ajouter** crée tous les objets trouvés sans vérifier s'ils existent déjà. Le mode d'import **Mettre à jour** crée uniquement des objets qui ne peuvent pas être trouvés dans le pool de données i-doit. Les catégories des objets déjà existants sont complétées (si nécessaire) avec de nouvelles données. Le mode d'import **Écraser** est, en principe, similaire au mode **Mettre à jour** mais avec la différence que les catégories de liste sont d'abord vidées puis recréées.

| **Mode d'Import**                     | **Description**                                                                                                                                                                    |
| ------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Ajouter**                           | Le mode d'import **"Créer"** créera tous les objets trouvés sans vérifier s'ils existent déjà.                                                                                      |
| **Mettre à jour**                     | Le mode d'import **"Mettre à jour"** créera uniquement des objets qui n'ont pas pu être trouvés dans i-doit. Les catégories des objets déjà existants seront complétées avec de nouvelles données (si nécessaire). |
| **Écraser**                           | Le mode d'import **"Écraser"** se comporte exactement comme le mode "Mettre à jour" avec la différence que les catégories de liste sont d'abord vidées puis nouvellement créées.         |
| **Mettre à jour (Uniquement existant)** | L'ajout de "(Uniquement existant)" mettra à jour uniquement les objets existants, aucun nouvel objet n'est créé.                                                                  |
| **Écraser (Nouvel inventaire)**       | Avec l'ajout de **"(Nouvel inventaire)"** les liens fixes i-doit-vers-dispositif-jdisc sont ignorés et les associations d'objets sont recalculées.                                |
| **Créer uniquement les appareils nouvellement scannés** | Le mode "**Créer uniquement les appareils nouvellement scannés**" crée uniquement des objets qui n'existent pas dans i-doit.                                                        |
| **Mettre à jour (Nouvel inventaire)** | Avec l'ajout de **"(Nouvel inventaire)"** les liens fixes i-doit-vers-dispositif-jdisc sont ignorés et les associations d'objets sont recalculées.                                |

Avec la fonction de journalisation, vous pouvez influencer l'étendue du journal écrit. Une journalisation plus étendue augmente la durée de l'importation.<br>
Une fois que vous avez effectué les réglages complètement, vous pouvez activer l'importation avec **Démarrer l'importation**. Veuillez noter que la durée du processus d'importation dépend à la fois de la taille de la base de données JDisc et du matériel utilisé.<br>
Une fois le processus d'importation terminé, un résumé s'affiche dans la section **Résultat**.<br>
Vous pouvez trouver les journaux générés pendant l'importation dans le répertoire i-doit appelé `log/`.

## Importation via la catégorie de découverte JDisc

Vous pouvez mettre à jour des objets individuels en utilisant la catégorie de découverte JDisc.
Il est possible de scanner le périphérique en utilisant une identification spécifique (adresse de l'hôte, FQDN et numéro de série).

[![Profil JDisc](../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)

Vous pouvez ajouter la catégorie via la configuration du type d'objet du type d'objet.

## Importation via la Console i-doit

L'importation de données de JDisc vers i-doit n'est pas seulement possible manuellement via l'interface utilisateur. Elle peut également être exécutée via la [Console i-doit](../automation-and-integration/cli/console/index.md) et ainsi automatisée. Comment générer l'appel correspondant peut être trouvé dans l'[article correspondant](../automation-and-integration/cli/console/options-and-parameters-cli.md) avec un exemple pour l'option d'importation-jdisc.

Pour l'importation, l'ID du profil souhaité peut être spécifié. L'ID peut être trouvé dans la liste des profils :

[![jdisc-discovery-id](../assets/images/en/consolidate-data/jdisc-discovery/4-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/4-jd.png)

Également, l'ID du serveur JDisc à utiliser peut être spécifié. Celui-ci peut être trouvé dans la configuration :

[![jdisc-discovery-server](../assets/images/en/consolidate-data/jdisc-discovery/5-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/5-jd.png)

Un jdisc.ini pourrait ressembler à ceci. Plus d'informations sur les fichiers .ini peuvent être trouvées [ici](../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
group=
mode=1
server=2
overwriteHost
detailedLogging=3
regenerateSearchIndex
[additional]
```

Si nous supposons que le fichier jdisc.ini est situé dans le répertoire racine de i-doit, alors l'importation est appelée avec le ldap.ini depuis le répertoire racine de i-doit comme ceci :

```shell
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```

### Rapport de disponibilité JDisc

À **Gestionnaire de rapports -> Vues** se trouve un rapport portant le nom de **Disponibilité JDisc**, qui compare les objets i-doit avec les objets JDisc.
```
