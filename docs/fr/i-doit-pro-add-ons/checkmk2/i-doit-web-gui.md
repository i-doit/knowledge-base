# checkmk 2: i-doit Web GUI 

La plupart des interactions utilisateur sont basées sur le [module complémentaire Check\_MK hérité](../checkmk.md) d'i-doit qui est actuellement livré avec i-doit pro/open. Ce module complémentaire hérité doit être activé [via le Centre d'administration i-doit](../index.md) (il est activé par défaut).

## Activer les appels en temps réel

Permettez à i-doit de récupérer l'état des vérifications d'hôtes et de services via Livestatus en temps réel. La configuration se fait via Administration > Interfaces / données externes > Surveillance > Livestatus / NDO.

Ces appels d'état peuvent être affichés dans n'importe quel objet ou dans les listes d'objets pour chaque type. Ajoutez la catégorie Surveillance à ces types d'objets via **Administration > Structure des données > Modifier la structure des données**.

Activez manuellement les appels d'état dans cette catégorie pour chaque objet ou [idoitcmk pull](./import-inventory-data-into-cmdb.md) s'en chargera via le paramètre de configuration pull.enableLivestatus dans [configuration setting](./configuration.md).

## Gérer les balises d'hôtes

i-doit vous permet de gérer les balises d'hôtes. Il existe des balises d'hôtes "statiques" et "dynamiques" :

-   "statiques" signifie que vous créez manuellement des balises dans Extras > Check_MK 2 > Balises (statiques) et les ajoutez à l'hôte dans la catégorie Balises Check_MK.
-   "dynamiques" signifie que cela se fait automatiquement via des ensembles de règles dans Extras > Check_MK 2 > Balises (dynamiques).

Les balises d'hôte "statique" et "dynamique" seront affichées dans la catégorie Tags Check_MK. Elles seront exportées vers Check\_MK via [idoitcmk push](./generate-wato-configuration-base-on-cmdb-data.md).

## Appeler idoitcmk via l'interface Web

La catégorie Hôte Check_MK propose plusieurs boutons qui déclenchent idoitcmk en arrière-plan :

-   L'hôte existe-t-il dans checkmk ? : Identifier l'hôte dans checkmk par son nom d'hôte
-   Mettre à jour l'objet depuis checkmk : Extraire les données de l'hôte checkmk pour mettre à jour cet objet.
-   Créer/mettre à jour l'hôte dans checkmk : Les données de l'objet seront poussées vers checkmk. Soit un nouvel hôte sera créé dans checkmk, soit un existant sera mis à jour.
-   Supprimer l'hôte dans checkmk : Si cet objet existe en tant qu'hôte dans checkmk, il sera supprimé.

Avant que vous ou tout autre utilisateur n'appuyiez sur l'un de ces boutons, veuillez les exécuter manuellement sur l'interface de ligne de commande pour vous assurer qu'ils font ce qu'ils sont censés faire.

La configuration se fait via Administration > Interfaces / données externes > Surveillance > Check_MK. En définissant l'application Run idoitcmk, i-doit doit savoir où idoitcmk est situé. Si vous avez suivi attentivement les [étapes d'installation](../../installation/index.md), utilisez ceci :

```shell
/usr/local/bin/idoitcmk
```

Astuce : Vous voudrez peut-être ajouter des options par défaut chaque fois qu'un des boutons est déclenché. Par exemple, dans un environnement multi-locataire, fournissez des paramètres de configuration spécifiques au locataire :

```shell
/usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json
```

La journalisation est activée par défaut. Pour les premières étapes, il est toujours bon de savoir ce qui se passe.

Pour autoriser les utilisateurs/groupes d'utilisateurs à déclencher ces boutons, accédez à Administration > Système d'autorisation > Droits > CMDB, chargez un utilisateur/groupe et activez le droit d'exécution pour une ou plusieurs conditions :

-   Catégorie,
-   Catégorie dans le type d'objet,
-   Catégorie dans l'objet,
-   Catégorie dans les objets sous un emplacement et/ou
-   Catégories dans mes objets créés
```
