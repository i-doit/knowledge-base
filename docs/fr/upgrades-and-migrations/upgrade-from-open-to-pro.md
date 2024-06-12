# Mise à niveau de i-doit open vers i-doit pro

Comment passer de _i-doit_ _open_ à _i-doit pro_ avec des fonctionnalités supplémentaires de manière rapide et facile?

Motivation
----------

Quels sont les avantages de documenter l'infrastructure informatique plutôt avec la version _i-doit pro_ que avec la version _i-doit_ _open_? La raison est simple: _[i-doit pro offre considérablement plus de fonctions](https://www.i-doit.org/cmdb-it-documentation/)_ qui peuvent être d'une grande aide pour votre travail quotidien.

_i-doit pro_ en sept étapes
---------------------------

Voici un aperçu rapide des étapes nécessaires avant d'entrer dans les détails:

1.  Préparation
2.  Téléchargement et mise en œuvre de la mise à jour _pro_
3.  Installation de l'extension _i-doit pro_
4.  Activation de la licence
5.  Vider le cache
6.  Configurer les autorisations
7.  Finir le travail

Préparation
-----------

Important : Cette procédure est irréversible. Il est essentiel de créer une [sauvegarde](../maintenance-and-operation/backup-and-recovery/index.md)! Après la mise à niveau, une [licence valide pour _i-doit_ pro](../maintenance-and-operation/activate-license.md) est requise. Les [exigences du système](../installation/system-requirements.md) et les [paramètres du système](../installation/manual-installation/system-settings.md) doivent également être respectés.

Si vous utilisez une ancienne version de l'installation _i-doit open_, vous devez tenir compte des faits suivants :

- Lorsque vous utilisez la version **0.9.x** ou une version antérieure de _i-doit open_, une mise à jour n'est pas possible.
- Lorsque vous utilisez la version **1.4.x** de _i-doit open_, vous devez effectuer une mise à jour vers la version la plus récente à partir de la version 1.8.
- Si vous avez installé _i-doit open_ **1.8.x** ou une version ultérieure, vous pouvez continuer avec la mise à jour.

Vous pouvez télécharger la version la plus récente sur [i-doit.org](http://i-doit.org/).

Téléchargement et mise en œuvre de la mise à jour _pro_
--------------------------------------------------------

Téléchargez le package de mise à jour de _i-doit pro_ depuis le [portail client](../system-administration/customer-portal.md) et effectuez une mise à jour [de la manière habituelle](../maintenance-and-operation/update.md). Il est important que le numéro de version de la version _i-doit open_ installée corresponde à la version _i-doit pro_ souhaitée. Exemple : Vous devez utiliser le package de mise à jour _i-doit pro_ 1.8 si votre version installée est _i-doit open_ 1.8.

L'amélioration ne fonctionne pas avec le paquet d'installation de la version _i-doit pro_.

Installation de l'extension _i-doit pro_
----------------------------------------

Après avoir mis à niveau vers la version _pro_, vous devez installer l'extension _pro_. L'extension __pro__ est disponible dans le [centre d'administration](../system-administration/admin-center.md) sous **Extensions**. Vous y trouverez le bouton d'installation.

Activation de la licence
------------------------

La mise à niveau est maintenant terminée et la dernière étape est l'activation d'une licence valide. Vous pouvez l'activer directement dans le [Centre d'administration sous **Licences**](../maintenance-and-operation/activate-license.md).

Effacer le cache
----------------

Maintenant, nous nous déconnectons du Centre d'administration et nous nous reconnectons à _i-doit_. Ensuite, nous naviguons dans **Administration** → **Outils système → Cache / Base de données** jusqu'au bouton **Effacer le cache complet**. Nous vidons le cache du navigateur en appuyant sur **CTRL+F5**.

Configurer les autorisations
----------------------------

Contrairement à _i-doit open, i-doit pro_ possède un [système d'autorisation](../system-administration/administration/user-permissions.md) librement configurable. Pour cette raison, l'utilisateur connecté à ce moment n'aura pas toutes les autorisations.

Pour donner à votre utilisateur administrateur un accès complet en quelques étapes, allez dans **Administration** → **Système d'autorisation** → **Réinitialisation du système d'autorisation** et donnez à votre utilisateur un accès complet à _i-doit_ en saisissant les informations d'identification pour le [Centre d'administration](../system-administration/admin-center.md).

Maintenant, vous pouvez configurer l'attribution des autorisations pour les personnes et les groupes de personnes.

Finalisation du travail
--------------

Si ce n'est pas encore fait, vous devriez effectuer les étapes suivantes pour garantir un fonctionnement optimal de _i-doit_ :

*   [Configurer et tester la sauvegarde et la restauration](../maintenance-and-operation/backup-and-recovery/index.md)
*   [Configurer les Cronjobs](../automation-and-integration/cli/index.md) (avec le contrôleur)
*   [Effectuer une mise à jour facultative vers la version actuelle de _i-doit pro_ :](../maintenance-and-operation/update.md) Avec une licence valide, il est possible et recommandé de toujours mettre à jour vers la dernière version de _i-doit pro_.  
    

Revenir à _i-doit open_?
---------------------------

Il n'est pas prévu de revenir à une version antérieure d'_i-doit_. Cela vaut également pour les rétrogradations de _i-doit pro_ vers la variante _i-doit open_.


