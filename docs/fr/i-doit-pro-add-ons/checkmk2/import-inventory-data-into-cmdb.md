# checkmk 2: Importer des données d'inventaire dans CMDB

Vous laissez checkmk surveiller tous vos hôtes ? Vous laissez checkmk collecter des informations de base sur votre matériel/logiciel ? Eh bien, pourquoi ne pas partager ces informations avec votre CMDB ? Importez ou mettez à jour des objets dans i-doit en exécutant :

    idoitcmk pull

**Recommandation :** Exécutez cette commande chaque fois que vous modifiez votre configuration WATO dans checkmk ou chaque fois que les agents d'inventaire de checkmk trouvent de nouvelles informations sur le matériel/logiciel.

Options
-------

Ces options sont disponibles pendant l'exécution :

| Option | Requis | Description |
| --- | --- | --- |
| --include-alias STRING | Non  | Filtrer les hôtes par alias |
| --include-folder STRING | Non  | Filtrer les hôtes par dossier WATO |
| --include-hostname STRING | Non  | Filtrer les hôtes par nom |
| --include-ipaddress STRING | Non  | Filtrer les hôtes par adresse IPv4/v6 |
| --include-os STRING | Non  | Filtrer les hôtes par système d'exploitation |
| --include-site STRING | Non  | Filtrer les hôtes par site de surveillance |
| --include-tag TAG | Non  | Filtrer les hôtes par tag |

STRING signifie n'importe quelle chaîne incluant des caractères génériques *, ? et [ae]. Répétez l'option pour faire correspondre plus d'une STRING. Par exemple, récupérez tous les hôtes avec un système d'exploitation GNU/Linux ou Windows :

    idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"

Toute combinaison de ces filtres est logiquement combinée par ou. Par exemple, récupérez tous les hôtes avec le suffixe .example.com ou dans le dossier cloud :

    idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"

TAG est similaire à STRING mais est une combinaison clé/valeur avec le nom du tag et sa valeur. Par exemple, récupérez tous les hôtes marqués comme critiques pour l'entreprise :

    idoitcmk pull --include-tag "criticality=critical"

Configuration
-------------

Ces [paramètres de configuration](./configuration.md) sont disponibles :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| pull.createObjects | Booléen | Non  | true | Les hôtes inconnus seront créés en tant que nouveaux objets |
| pull.objectType | Chaîne | Non  | C__OBJTYPE__SERVER | Définit la constante de type d'objet pour les nouveaux objets |
| pull.updateObjects | Chaîne | Non  | overwrite | Si l'hôte est trouvé dans i-doit, écrase les entrées de catégorie existantes ou les ignore |
| pull.idenfifier | Tableau | Non  | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Recherchez ces identifiants pour faire correspondre les hôtes avec les objets ; voir la section "Identifiants" |
| pull.minMatch | Entier | Non  | 2 | L'objet et l'hôte doivent partager un nombre minimum d'identifiants |
| pull.attributes | Tableau | Non  | _Voir la section "Attributs"_ | Liste des constantes de catégorie qui seront modifiées ; voir la section "Attributs" |
| pull.enableExport | Booléen | Non  | true | Écrire la configuration de l'hôte dans la catégorie Check_MK Host |
| pull.enableLivestatus | Booléen | Non  | true | Écrire la configuration de l'hôte dans la catégorie Monitoring |
| pull.ports | Chaîne | Non  | physical | Ajouter/mettre à jour des ports réseau physiques ou logiques |
| roles.monitoring | Chaîne | Non  | Monitoring | Rôle i-doit pour les groupes de contacts utilisés dans les affectations de contacts |
```
