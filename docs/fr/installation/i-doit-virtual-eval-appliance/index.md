# i-doit Virtual Eval Appliance {/%%/}

synetics fournit un appareil entièrement fonctionnel de i-doit pro. Il peut être téléchargé sous forme de machine virtuelle.

Grâce à l'appareil virtuel, les fonctionnalités de i-doit pro peuvent être évaluées aussi rapidement que possible. Vous n'avez besoin d'aucune connaissance du [LAMP Stack](../system-requirements.md) ni d'installer le logiciel. Au lieu de cela, vous pouvez commencer immédiatement avec un cadre de base.

!!! note "Pour les tests uniquement"

    L'appareil est destiné uniquement aux tests et ne doit pas être utilisé en production.

## Téléchargement

L'appareil est disponible en téléchargement gratuitement pendant le processus d'évaluation. Pour demander une licence d'essai valide, le formulaire ["On Premise" sur le site web de i-doit](https://www.i-doit.com/en/30-days-trial/) doit être utilisé.

## Démarrage

Le téléchargement est fourni sous forme d'un fichier ZIP normal qui doit être extrait après le téléchargement. Il contient un fichier OVF, qui peut être importé dans des environnements de virtualisation populaires.<br>
Lors de l'importation, des paramètres peuvent être demandés (nom, cœurs CPU, mémoire). Les paramètres par défaut peuvent être repris sans problème. S'ils sont modifiés, cependant, il est également probable que les [paramètres](../manual-installation/system-settings.md) de MariaDB et PHP doivent être ajustés également. Il est également important de respecter les [exigences système](../system-requirements.md).

[![Configuration de l'appareil](../../assets/images/en/installation/manual-installation/virtual-appliance/1-va.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/1-va.png)

!!! note "Système d'exploitation"

    Le système d'exploitation installé est **Debian GNU/Linux 11 "buster" en version 64 bits**. Si le virtualiseur ne le reconnaît pas automatiquement, il est essentiel d'entrer ces informations manuellement. Sinon, il est possible que des problèmes surviennent lors du démarrage et de l'exécution de la VM.

## Démarrage de i-doit

Lors du premier démarrage, la VM tente d'obtenir une adresse IP via DHCP et l'affiche sur la console. Lorsque vous activez l'adresse IP dans le navigateur, l'interface Web de i-doit commence à se charger.<br>
Vous pouvez configurer l'adresse IP via la console (voir ci-dessous).

## Identifiants

| Outil | Nom d'utilisateur | Mot de passe |
| --- | --- | --- |
| i-doit Web GUI | **admin** | **admin** |
| i-doit Web GUI | **controller** | **controller** |
| [Centre d'administration i-doit](../../system-administration/admin-center.md) | **admin** | **idoit** |
| SSH | **idoitadm** | **idoit** |
| MySQL (i-doit) | **idoit** | **idoit** |
| MySQL (Utilisateur système) | **root** | **idoit** |

De plus, il existe quelques [personnes et groupes de personnes prédéfinis](../../basics/initial-login.md) dans i-doit.

## Configuration

La configuration de l'appliance peut être effectuée via la console. Après vous être connecté via **SSH**, un menu apparaît :

[![Menu SSH](../../assets/images/en/installation/manual-installation/virtual-appliance/2-va.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/2-va.png)

| Raccourci | Élément du menu | Fonction |
| --- | --- | --- |
| 1 | **Configurer le réseau** | Définir la connexion réseau ; la configuration réseau est définie par défaut sur DHCP. |
| 2 | **Configuration du proxy** | Définir le proxy HTTP pour le système |
| 3 | **Configuration de messagerie électronique** | Paramètres de messagerie électronique |
| 4 | **Fuseau horaire** | Définir le fuseau horaire |
| 5 | **Disposition du clavier** | Disposition du clavier ; de est défini par défaut |
| 6 | **Changer le mot de passe de l'utilisateur idoitadm** | Changer le mot de passe de l'utilisateur idoitadm |
| 7 | **Configuration du script i-doit** | Modifier les paramètres pour CLI, [tâches cron](../../maintenance-and-operation/cronjob-setup.md), [sauvegarde et restauration](../../maintenance-and-operation/backup-and-recovery/index.md) |
| 8 | **Redémarrer le système** | Redémarrer le système |
| 9 | **Arrêter le système** | Arrêter le système |
| 0 | **Lancer le shell** | Ouvrir le shell pour d'autres actions |
| A | **Déconnexion** | Déconnecter l'utilisateur idoitadm du système |

## Scripts et Tâches Cron

L'appliance est équipée de différents scripts et tâches cron.

| Script | Objectif |
| --- | --- |
| **idoit** | CLI i-doit |
| **idoit-backup** | Exécuter une sauvegarde manuellement |
| **idoit-restore** | Restaurer |
| **idoit-jobs** | Exécuter manuellement des tâches cron |

Les scripts se trouvent dans `/usr/local/bin/`.

Des [tâches cron préconfigurées](../../automation-and-integration/cli/index.md), qui optimisent régulièrement le système, existent dans `/etc/cron.d/i-doit`.

Chaque nuit, les fichiers d'i-doit sont sauvegardés localement. La période de stockage est d'une semaine.

## Répertoires {/examples}

L'aperçu suivant vous montre l'objectif des répertoires :

| Répertoire | Objectif |
| --- | --- |
| **/var/www/html/** | Répertoire d'installation d'i-doit |
| **/etc/apache2/** | Configuration du serveur web Apache |
| **/etc/php/7.0/** | Configuration de PHP |
| **/etc/mysql/** | Configuration de MariaDB |
| **/var/log/apache2/** | Journaux du serveur web Apache |
| **/var/backups/i-doit** | Sauvegardes |

## Suivi {/examples}

L'appliance fournit une installation "nue" d'i-doit pro. Cela signifie que ni les fichiers de démonstration ni les [extensions supplémentaires](../../i-doit-pro-add-ons/index.md) ne sont inclus.<br>
Lors de la première connexion, i-doit demande une [licence](../../maintenance-and-operation/activate-license.md) valide qui doit être activée pour disposer de toutes les fonctionnalités disponibles.<br>
Des informations supplémentaires pour les premiers pas avec i-doit sont également décrites dans la base de connaissances sous [Fondamentaux](../../basics/index.md).

## Dépannage {/examples}

!!! warning "Connexion refusée"

    Si le message d'erreur suivant s'affiche lors de l'exécution d'i-doit

    ```shell
    mysqli_connect(): (HY000/2002): Connexion refusée (/var/www/html/src/classes/components/isys_component_database_mysqli.class.php:16)
    ```

    alors le service MySQL n'a probablement pas démarré. Dans la plupart des cas, cela est lié à des modifications dans le matériel virtuel de l'appliance sans ajuster les configurations. Les paramètres doivent être soit réinitialisés aux valeurs par défaut après un redémarrage de la machine, soit la configuration à `/etc/mysql/mariadb.conf.d/99-i-doit.cnf` doit être ajustée pour que le matériel soit suffisant et que le service MySQL puisse être redémarré en utilisant `systemctl start mysql`.

!!! warning "La VM ne démarre pas"

    Si la VM ne démarre pas, des paramètres insuffisants ou incompatibles du virtualiseur pourraient en être la raison. Les virtualiseurs courants fournissent souvent des indices utiles. Par exemple, il est important de spécifier le bon système d'exploitation dans la bonne version : Debian GNU/Linux 64 bits.

!!! warning  "Famille de matériel non prise en charge"

    Si l'environnement VMware appliqué n'est pas à jour, le message d'erreur **ligne 25 famille de matériel non prise en charge 'vmx-10'** s'affiche lors de l'importation. Pour activer l'importation, vous devez modifier le fichier **i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf**. À la ligne

    ```shell
    <vssd:VirtualSystemType>vmx-10</vssd:VirtualSystemType>
    ```

    vous devez sélectionner une version inférieure. La valeur **vmx-9** est adaptée pour ESXi 5.1 :

    ```shell
    <vssd:VirtualSystemType>vmx-9</vssd:VirtualSystemType>
    ```

    Après avoir enregistré, vous devez mettre à jour la valeur de hachage (SHA1) du fichier modifié dans le fichier **i-doit Eval Appliance 1.x.x i-doit 1.x.x.mf**. Vous pouvez utiliser la commande **sha1sum** sous GNU/Linux :

    ```shell
    sha1sum i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf
    ```

!!! warning  "VSphere < 6.5.0"

    Notre appliance virtuelle est chiffrée avec un hachage SHA265 pour des raisons de sécurité.<br>
    Malheureusement, vSphere ne prend en charge cela qu'à partir de la version 6.5.0.<br>
    [Ici](https://kb.vmware.com/s/article/2151537) vous pouvez trouver l'entrée officielle de VMware.<br>
    Il décrit également comment travailler avec des machines virtuelles utilisant un hachage SHA265 dans des versions antérieures à la version vSphere 6.5.0.
