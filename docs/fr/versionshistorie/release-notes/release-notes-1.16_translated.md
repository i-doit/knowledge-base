<!-- TRANSLATED by md-translate -->
# Release Notes 1.16

# Notes de publication 1.16

Release date: 2021-01-18

Date de sortie : 2021-01-18

We're happy to announce a new major release of i-doit. Version 1.16 brings you a bunch of added or changed features and includes many bug fixes. We encourage you to update to this release as soon as possible.

Nous sommes heureux d'annoncer une nouvelle version majeure d'i-doit. La version 1.16 vous apporte un grand nombre de fonctionnalités ajoutées ou modifiées et comprend de nombreuses corrections de bugs. Nous vous encourageons à mettre à jour cette version dès que possible.

## Highlights in this release

## Highlights in this release

* Import from JDisc Discovery: Fetch information about support entitlements for your hardware devices and import it to i-doit's new category Support Entitlements
* …and another related feature: Decide to import cable connections between hardware devices either to i-doit's standard categories or to its new category Connection Endpoint

* Importation à partir de JDisc Discovery : Recherche d'informations sur les droits de support pour vos périphériques matériels et importation dans la nouvelle catégorie Support Entitlements d'i-doit.
* ...et une autre fonctionnalité associée : Décider d'importer les connexions de câbles entre les périphériques matériels soit dans les catégories standard d'i-doit soit dans sa nouvelle catégorie Connection Endpoint

For a complete list of changes please take a look at the [changelog](../changelogs/changelog-1.16.x/changelog-1.16.md).

Pour une liste complète des changements, veuillez consulter le [changelog](../changelogs/changelog-1.16.x/changelog-1.16.md).

## Add-ons

## Add-ons

With i-doit v1.16, we've released a bunch of add-ons to be compatible with this major release:

Avec i-doit v1.16, nous avons publié un grand nombre d'add-ons pour être compatibles avec cette version majeure :

* i-doit API add-on v1.12.1
* i-doit Checkmk add-on v1.0.2
* i-doit Documents add-on v1.4.3
* i-doit Maintenance add-on v1.1.4
* i-doit Nagios add-on v1.0.3
* i-doit Workflow add-on v1.0.5

* i-doit API add-on v1.12.1
* i-doit Checkmk add-on v1.0.2
* i-doit Documents add-on v1.4.3
* i-doit Maintenance add-on v1.1.4
* i-doit Nagios add-on v1.0.3
* i-doit Workflow add-on v1.0.5

**Note:** Before you update i-doit to v1.16 please ensure all installed add-ons are up-to-date.

**Note:** Avant de mettre à jour i-doit à la v1.16, veuillez vous assurer que tous les add-ons installés sont à jour.

## System requirements

## Exigences du système

We've slightly adjusted the system requirements for i-doit v1.16:

Nous avons légèrement ajusté les exigences système pour i-doit v1.16 :

* PHP: We recommend the use of PHP version branch 7.4 which is currently under active maintenance. We've dropped the support of PHP 7.1 and set PHP v7.2.5 as the minimum required version. But keep in mind that PHP 7.2 is end-of-live and therefore marked as deprecated. The support will be removed in i-doit v1.17.
* Note about PHP 8.0: We're working on supporting PHP 8.0 in i-doit and still need some time to fix the remaining issues. Please don't run i-doit v1.16 with PHP 8.0 as we do not support it yet.
* MariaDB: i-doit v1.16 adds support for the current stable version branch 10.5 of MariaDB. Version branch 10.1 is marked as deprecated. The support for it will be removed in i-doit v1.17.
* We still support MySQL as the database backend for i-doit v1.16 but recommend the use of MariaDB. We've marked version branch 5.6 as deprecated and will drop the support in i-doit v1.17. MySQL 5.7 is currently the only supported version branch.

* PHP : Nous recommandons l'utilisation de la branche 7.4 de la version PHP, qui est actuellement en cours de maintenance active. Nous avons supprimé le support de PHP 7.1 et mis en place PHP v7.2.5 comme version minimale requise. Mais n'oubliez pas que PHP 7.2 est en fin de vie et qu'il est donc marqué comme déconseillé. Le support sera supprimé dans i-doit v1.17.
* Note concernant PHP 8.0 : Nous travaillons sur le support de PHP 8.0 dans i-doit et avons encore besoin de temps pour corriger les problèmes restants. Veuillez ne pas exécuter i-doit v1.16 avec PHP 8.0 car nous ne le supportons pas encore.
* MariaDB : i-doit v1.16 ajoute le support pour la version stable actuelle de la branche 10.5 de MariaDB. La branche 10.1 est marquée comme dépréciée. Son support sera supprimé dans i-doit v1.17.
* Nous supportons toujours MySQL comme base de données pour i-doit v1.16 mais recommandons l'utilisation de MariaDB. Nous avons marqué la branche de version 5.6 comme dépréciée et supprimerons le support dans i-doit v1.17. MySQL 5.7 est actuellement la seule branche de version supportée.

**Note:** Before you update i-doit to v1.16 please ensure all [system requirements](../../installation/systemvoraussetzungen.md) are met.

**Note:** Avant de mettre à jour i-doit à la v1.16, veuillez vous assurer que toutes les [exigences système](../../installation/exigences système.md) sont remplies.

## Support and download

## Support and download

If you have any question about this release our customer support will be happy to help you: [help.i-doit.com](https://help.i-doit.com/)

Si tu as des questions sur cette version, notre support client sera heureux de t'aider : [help.i-doit.com](https://help.i-doit.com/)

Downloads are available for subscribed users at [login.i-doit.com](https://login.i-doit.com/).

Les téléchargements sont disponibles pour les utilisateurs abonnés à [login.i-doit.com](https://login.i-doit.com/).

Thanks for your using i-doit as your preferred IT documentation platform and being part of our great and growing community!

Merci d'utiliser i-doit comme votre plateforme de documentation informatique préférée et de faire partie de notre grande communauté en pleine expansion !

* Benjamin Heisig for the i-doit team

* Benjamin Heisig pour l'équipe i-doit
