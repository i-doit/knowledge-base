# Installation manuelle 

Cet article décrit la documentation pour l'installation manuelle d'i-doit. Les packages logiciels requis doivent être installés et configurés indépendamment. Ensuite, i-doit doit être téléchargé et installé. Les étapes nécessaires pour les tâches Cron et les sauvegardes doivent également être effectuées par l'utilisateur.

## Portée 

:material-check: Installation des packages logiciels<br>
:material-check: Configuration des packages logiciels<br>
:material-check: Installation d'i-doit<br>
:material-check: Configuration des tâches Cron<br>
:material-check: Configuration des sauvegardes<br>
:material-check: Configuration de la restauration

## Exigences 

-   Les [exigences système](../system-requirements.md) **doivent être remplies** .
-   L'un des systèmes d'exploitation GNU/Linux [pris en charge](../system-requirements.md) doit être installé avec ses mises à jour actuelles.
-   Le système doit pouvoir accéder aux référentiels de packages via une **connexion Internet** .
-   Le module Apache (**mod_php**) doit être appliqué. Les méthodes alternatives (Fast CGI, HHVM) ne sont pas prises en compte.
-   De plus, une configuration simplifiée est requise **i-doit est l'application principale** du système et Apache Web Server, PHP ainsi que MariaDB/MySQL doivent être installés localement.
-   **Règles de pare-feu et ports ouverts** i-doit est une application web typique, ce qui signifie qu'i-doit est accessible via un navigateur web pour des fonctionnalités de base. Cela se fait généralement via le port 80 (non crypté) ou le port 443 (crypté). Si un pare-feu est utilisé, ces ports doivent être ouverts pour les connexions TCP entrantes. Il est possible que vous ayez besoin de règles supplémentaires lorsque vous utilisez des fonctions supplémentaires ([notifications](../../evaluation/notifications.md), [interfaces vers des applications tierces](../../automation-and-integration/index.md)). La communication entre i-doit et MySQL/MariaDB est effectuée localement (port 3306 TCP) et normalement aucune règle de pare-feu supplémentaire n'est nécessaire pour cela.
-   **Cadres de sécurité:** Veuillez effectuer les configurations nécessaires si un cadre de sécurité, tel que **AppArmor** ou **SELinux**, est installé.

## Étapes suivantes 

Les étapes spécifiques dépendent du système d'exploitation sélectionné:

-   [Debian 12 GNU/Linux](debian12.md)
-   [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
-   [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
-   [Ubuntu Linux](ubuntu-linux/index.md)
-   [Microsoft Windows Server](microsoft-windows-server/index.md)
