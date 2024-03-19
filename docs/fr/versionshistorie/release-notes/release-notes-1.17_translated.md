<!-- TRANSLATED by md-translate -->
# Release Notes 1.17

# Notes de publication 1.17

We're happy to announce the general availability of i-doit v1.17. This is a major update with new and changed features and a lot of bug fixes since the last major release. See the [changelog](../changelogs/changelog-1.17.x/changelog-1.17.md) for a complete list of changes. We encourage you to update to this release as soon as possible.

Nous sommes heureux d'annoncer la mise à disposition générale d'i-doit v1.17. Il s'agit d'une mise à jour majeure avec des fonctionnalités nouvelles et modifiées ainsi que de nombreuses corrections de bugs depuis la dernière version majeure. Voir le [changelog](../changelogs/changelog-1.17.x/changelog-1.17.md) pour une liste complète des changements. Nous vous encourageons à mettre à jour cette version dès que possible.

## Highlights in this release

## Highlights in this release

* We enhanced the documentation of **licenses**: You are now able to document licenses based on CPU cores.
* The settings of **custom categories** got an UI update.
* The data import from **JDisc Discovery** introduces various minor improvements.
* Filter for empty values in lists.
* Define how many rows should be imported from a CSV file at once in a batch.

* Nous avons amélioré la documentation des **licences** : Vous pouvez maintenant documenter les licences en fonction des cœurs de processeur.
* Les paramètres des **catégories personnalisées** ont eu une mise à jour de l'interface.
* L'importation de données depuis **JDisc Discovery** introduit diverses améliorations mineures.
* Filtre pour les valeurs vides dans les listes.
* Définition du nombre de lignes à importer à partir d'un fichier CSV en une seule fois dans un lot.

## Update notes

## Update notes

The update to this new version [works as usual](../../wartung-und-betrieb/update-einspielen.md). We slightly adjusted the [system requirements](../../installation/systemvoraussetzungen.md):

La mise à jour vers cette nouvelle version [fonctionne comme d'habitude](../../maintenance-et-exploitation/application-des-mises-à-jour.md). Nous avons légèrement ajusté les [exigences système](../../installation/exigences système.md) :

* **PHP:** We removed the support of PHP version 7.2 as it is end of life. PHP versions 7.3 and 7.4 are still supported while 7.4 is recommended to use. (Side note: At the moment, PHP version 8 is not supported. We plan the support of PHP 8 in a later release.)
* **MariaDB:** We also removed the support of MariaDB version 10.1 as it is end of life. MariaDB versions 10.2, 10.3, 10.4 and 10.5 are still supported while 10.5 is the new recommended version. (Side note: When version 10.6 is marked as stable we plan to support it in a later release.)
* **MySQL:** We removed the support of MySQL version 5.6. Version 5.7 is still supported. But we highly recommend to use MariaDB instead of MySQL.

* **PHP:** Nous avons supprimé le support de PHP version 7.2 car il est en fin de vie. Les versions 7.3 et 7.4 de PHP sont toujours supportées, alors que la version 7.4 est recommandée. (Side note : Actuellement, PHP version 8 n'est pas supporté. Nous prévoyons la prise en charge de PHP 8 dans une version ultérieure).
**MariaDB:** Nous avons également supprimé le support de MariaDB version 10.1 car elle est en fin de vie. Les versions 10.2, 10.3, 10.4 et 10.5 de MariaDB sont toujours supportées, tandis que 10.5 est la nouvelle version recommandée. (Side note : When version 10.6 is marked as stable we plan to support it in a later release).
* **MySQL:** Nous avons supprimé le support de MySQL version 5.6. La version 5.7 est toujours supportée. Mais nous recommandons vivement d'utiliser MariaDB au lieu de MySQL.

Before you update ensure all system requirements are met and you've made a [backup of all your data](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md).

Avant de procéder à la mise à jour, assurez-vous que toutes les exigences du système sont satisfaites et que vous avez effectué une [sauvegarde de toutes vos données](../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md).