# Notes de version 26 

Nous sommes heureux d'annoncer i-doit pro 26. Cette version marquera le début de l'introduction des nouvelles versions de PHP en prenant en charge officiellement PHP 8.1. Ne vous inquiétez pas si votre système d'exploitation vous oblige à utiliser PHP 7.4. Cette version restera compatible avec i-doit jusqu'à la fin de 2023, vous avez donc un peu plus de temps pour préparer votre système.

Nous avons effectué un nettoyage en supprimant les anciennes fonctions "Controller" qui ont été remplacées par les [Commandes de console](../../automation-and-integration/cli/console/index.md) en 2017. En plus de cette suppression, nous avons également supprimé du code des interfaces inutilisées et mis à jour notre moteur de modèle pour améliorer les performances globales et l'expérience utilisateur.

Nous vous encourageons à [mettre à jour](../../maintenance-and-operation/update.md) vers cette version dès que possible pour bénéficier de toutes ces améliorations.

## Points forts de cette version

-   {++PHP 8.1++} est officiellement pris en charge avec i-doit 26.
-   Suppression du contrôleur i-doit pro obsolète.
-   Nettoyage des interfaces obsolètes.
-   Mise à jour du moteur de modèle ==Smarty==.

## Extensions

Aux côtés de i-doit pro 26, nous publierons de nouvelles versions améliorées des extensions avec des modifications de compatibilité.<br>
Si vous utilisez une ou plusieurs de ces extensions, vous devez les mettre à jour ==avant== d'appliquer la mise à jour de i-doit pro.

-   [Analyse 1.3.1](../../i-doit-pro-add-ons/analysis.md)
-   [Maintenance 1.2.2](../../i-doit-pro-add-ons/maintenance.md)
-   [Nagios 1.1.1](../../automation-and-integration/network-monitoring/nagios.md)
-   [Workflow 1.1.1](../../i-doit-pro-add-ons/workflow.md)
-   [Packager 1.2.1](../../i-doit-pro-add-ons/add-on-packager.md)
