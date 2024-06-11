Nous sommes heureux d'annoncer la disponibilité générale de i-doit v1.17. Il s'agit d'une mise à jour majeure avec de nouvelles fonctionnalités et des modifications, ainsi que de nombreuses corrections de bugs depuis la dernière version majeure. Consultez le [journal des modifications](../changelogs/changelog-1.17.x/changelog-1.17.md) pour une liste complète des changements. Nous vous encourageons à effectuer la mise à jour vers cette version dès que possible.

Points saillants de cette version
---------------------------------

* Nous avons amélioré la documentation des **licences** : Vous pouvez désormais documenter les licences en fonction des cœurs de CPU.
* Les paramètres des **catégories personnalisées** ont été mis à jour dans l'interface utilisateur.
* L'importation de données depuis **JDisc Discovery** introduit diverses améliorations mineures.
* Filtre pour les valeurs vides dans les listes.
* Définir combien de lignes doivent être importées à la fois à partir d'un fichier CSV en lot.

Notes de mise à jour
--------------------

La mise à jour vers cette nouvelle version [fonctionne comme d'habitude](../../maintenance-and-operation/update.md). Nous avons légèrement ajusté les [exigences système](../../installation/system-requirements.md) :

* **PHP :** Nous avons supprimé le support de la version PHP 7.2 car elle a atteint sa fin de vie. Les versions PHP 7.3 et 7.4 sont toujours prises en charge, la version 7.4 étant recommandée. (Note : Pour le moment, la version PHP 8 n'est pas prise en charge. Nous prévoyons de prendre en charge PHP 8 dans une version ultérieure.)
* **MariaDB :** Nous avons également supprimé le support de la version MariaDB 10.1 car elle a atteint sa fin de vie. Les versions MariaDB 10.2, 10.3, 10.4 et 10.5 sont toujours prises en charge, la version 10.5 étant la nouvelle version recommandée. (Note : Lorsque la version 10.6 sera marquée comme stable, nous prévoyons de la prendre en charge dans une version ultérieure.)
* **MySQL :** Nous avons supprimé le support de la version MySQL 5.6. La version 5.7 est toujours prise en charge. Cependant, nous recommandons vivement d'utiliser MariaDB à la place de MySQL.

Avant de procéder à la mise à jour, assurez-vous que toutes les exigences du système sont satisfaites et que vous avez effectué une [sauvegarde de toutes vos données](../../maintenance-and-operation/backup-and-recovery/index.md).
