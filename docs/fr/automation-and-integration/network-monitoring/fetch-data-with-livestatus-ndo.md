# Récupérer des données avec Livestatus / NDOUtils {/examples}

Pour une comparaison cible/réel entre la documentation cible dans i-doit et l'état réel fourni par un logiciel de [Surveillance Réseau](./index.md), une interface appropriée peut être très utile. Avec cette interface, vous pouvez afficher les données de la Surveillance Réseau dans i-doit et les évaluer.

## Interfaces {/examples}

Les interfaces

-   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (ou IDOUtils) et
-   [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)

pour [Nagios](https://www.nagios.org/), [Check\_MK](http://mathias-kettner.com/check_mk.html), [Icinga](https://www.icinga.org/) et tous les forks compatibles sont pris en charge.

!!! success "Recommandation"
    MK Livestatus offre une connexion très performante à la Surveillance Réseau. Il est donc préférable à NDOUtils.

## Configuration de base {/examples}

Un NDOUtils ou MK Livestatus en cours d'exécution est requis sur le système de surveillance. L'accès à l'une des interfaces doit être configuré dans i-doit à **Administration → Interfaces et interfaces → Surveillance → Livestatus/NDO**.


[![Livestatus/NDO](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/1-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/1-fdwls.png)

Un socket TCP/UNIX ou une configuration de base de données avec les autorisations d'accès correspondantes doit être défini en fonction du type d'interface.

Exemple pour NDOUtils:

[![NDOUtils](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/2-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/2-fdwls.png)

Exemple pour MK Livestatus:

[![Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/3-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/3-fdwls.png)

## Catégories

Afin de lire les données du [dossier de catégorie](../../basics/structure-of-the-it-documentation.md) **Monitoring**, il faut attribuer les [types d'objet](../../basics/structure-of-the-it-documentation.md) à la **[Structure de données](../../basics/assignment-of-categories-to-object-types.md)**. La [clé d'identification](../../basics/unique-references.md) respective pour la surveillance doit être configurée pour l'[objet](../../basics/structure-of-the-it-documentation.md) dans la catégorie **Monitoring**. Pour cela, le titre de l'objet, le nom d'hôte avec ou sans nom de domaine ou un nom choisi librement peuvent être utilisés. Cette entrée détermine le nom qui est interrogé dans la surveillance.

Si plusieurs instances de surveillance sont configurées, l'instance correspondante est choisie.

[![surveillance](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/4-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/4-fdwls.png)

Si la catégorie est activée et l'entrée enregistrée, alors le statut actuel peut être interrogé dans la catégorie **Livestatus** ou la catégorie **NDO**.

[![Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/5-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/5-fdwls.png)

Une colonne pour le NDO ou Livestatus peut être également choisie dans la [configuration de la liste d'objets](../../basics/object-list/configuration-of-the-list-view.md) afin que le statut actuel de l'hôte soit également affiché dans la [liste d'objets](../../basics/object-list/index.md).

[![Liste d'objets avec Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/6-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/6-fdwls.png)

## Entrées de journal de surveillance

Les notifications d'état provenant de la surveillance peuvent être transférées au journal i-doit via le [contrôleur](../cli/index.md). Le gestionnaire correspondant, **check_mk** ou **nagios**, doit être ouvert et tous les changements d'état survenus depuis la dernière exécution sont automatiquement transférés au journal.

{/*examples*/}
