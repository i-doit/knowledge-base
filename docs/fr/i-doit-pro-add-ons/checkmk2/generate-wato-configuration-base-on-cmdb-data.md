# checkmk 2: Générer la configuration WATO basée sur les données de la CMDB

i-doit fournit des informations détaillées sur votre infrastructure informatique, y compris tous vos hôtes. Ces hôtes peuvent être partagés avec Check\_MK afin que vous n'ayez à documenter/configurer vos hôtes qu'une seule fois. Pour pousser ces hôtes vers checkmk, exécutez :

    idoitcmk push

Gardez à l'esprit que les objets doivent être marqués dans i-doit pour être exportés vers Check\_MK. Vérifiez la catégorie Check_MK Host avant d'exécuter cette commande.

**Recommandation :** Exécutez cette commande chaque fois que vous modifiez vos données de la CMDB.

Options
-------

Ces options sont disponibles pendant l'exécution :

| Option | Requis | Description |
| --- | --- | --- |
| --include-ids IDs | Non  | Filtrer les objets i-doit par identifiant |
| --include-title TITRE | Non  | Filtrer les objets i-doit par titre |
| --include-type TYPE | Non  | Filtrer les objets i-doit par type |

IDs signifie une liste d'identifiants d'objets séparés par des virgules.

TITRE signifie n'importe quel titre d'objet incluant des jokers *, ? et [ae]. Le titre n'est pas sensible à la casse. Répétez l'option pour faire correspondre plusieurs titres d'objets.

TYPE signifie le type d'objet représenté par son titre, sa constante ou son identifiant. Comme pour le TITRE, les jokers sont autorisés et la recherche n'est pas sensible à la casse. Répétez l'option pour correspondre à plusieurs types d'objets.

Toute combinaison de ces filtres est logiquement combinée par ou. Par exemple, poussez tous les hôtes avec les identifiants d'objet 1, 2 et 3 et tous les hôtes qui correspondent à *.example.com dans leurs titres :

```bash
idoitcmk push --include-ids 1,2,3 --include-title "*.example.com"
```

Configuration
-------------

Ces [paramètres de configuration](./configuration.md) sont disponibles :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | Chaîne | Non | C__OBJTYPE__PERSON_GROUP | Les groupes de contacts sont marqués par ce type (utilisez une constante !) |
| push.activateChanges | Booléen | Non | false | Activer tous les changements sauf les changements étrangers |
| push.autoMatching | Chaîne | Non | all | Désactiver l'auto-étiquetage (none), rechercher simplement la première correspondance (first) ou essayer de faire correspondre toutes les expressions (all) |
| push.autoSite | Booléen | Non | false | Dans un environnement multi-site, chaque hôte est surveillé par un site. Avec la valeur location, le site peut être identifié automatiquement par le chemin d'accès de l'emplacement de l'objet. |
| push.autoTagging | Objet | Non | – | Ajouter des balises d'hôte dynamiquement en fonction des informations d'objet qui correspondent à des expressions régulières ; voir la section "Auto-étiquetage" |
| push.bakeAgents | Booléen | Non | false | Cuire automatiquement les agents ; ne déploie pas les agents |
| push.contactGroupIdentifier | Chaîne | Non | titre | Collecter les groupes de contacts par leurs titres d'objet (titre) ou par leurs DNs LDAP (ldap) |
| push.defaultWATOFolder | Chaîne | Non | – | Pousser les hôtes vers ce dossier s'il n'est pas défini ; une valeur vide signifie le dossier principal |
| push.discoverServices | Booléen | Non | false | Rechercher des services sur les hôtes nouveaux/modifiés |
| roles.monitoring | Chaîne | Non | Monitoring | Rôle i-doit pour les groupes de contacts utilisés dans les affectations de contacts |
