# Mettre à jour i-doit

Lorsque vous travaillez avec i-doit, vous devriez toujours utiliser la version la plus récente. Les versions mineures contiennent toujours de nombreuses corrections de bugs, tandis que les versions majeures ajoutent de nouvelles fonctionnalités et améliorent les fonctionnalités déjà existantes. Les mises à jour mineures sont publiées environ toutes les quatre semaines et les mises à jour majeures tous les six mois. La mise à jour peut être [effectuée via l'interface web d'i-doit](./update.md), tant qu'une connexion internet est disponible (et le cas échéant, via un proxy HTTP). Alternativement, la mise à jour peut être [préparée via la console](./update.md) puis être poursuivie dans l'interface web.

=== "Ignorer les versions >=20"
    !!! attention "Ignorer les versions >= 20"
        Si vous souhaitez passer directement à une version plus récente, par exemple 26, vous pouvez télécharger le dernier package de mise à jour depuis le [portail client](../system-administration/customer-portal.md) et le décompresser dans le dossier i-doit pro sur l'hôte i-doit. Vous pouvez trouver les étapes nécessaires [ici](update.md#update-prepared-via-the-console).
        À partir de la version **25** avec le [correctif](../system-administration/hotfixes/hotfix-archive/index.md), la version 27 est également proposée au téléchargement lors de la vérification de la mise à jour.

=== "Ignorer les versions de publication <= 1.19"
    !!! attention "Ignorer les versions de publication <= 1.19"
        Si la version 1.13.1 est actuellement installée et que la version 1.13.3 est déjà disponible, seule la version suivante la plus élevée - c'est-à-dire 1.13.2 - sera affichée. Cependant, les versions mineures peuvent généralement être ignorées. Néanmoins, toutes les versions mineures seront installées une par une jusqu'à ce que la dernière version soit atteinte. Si vous souhaitez passer directement à la version 1.13.3, vous pouvez télécharger le dernier package depuis le portail client et le décompresser sur l'hôte i-doit. Vous trouverez les étapes nécessaires ici dans la partie inférieure de l'article.

!!! warning "Sauvegarde"
    Avant de procéder à la mise à jour, il est essentiel de créer une [sauvegarde](./backup-and-recovery/index.md).

!!! attention "Permissions d'écriture"
    Si un message d'erreur apparaît lors du téléchargement et de l'extraction, il arrive souvent que le serveur Web Apache n'ait pas les permissions d'écriture pour le chemin dans lequel i-doit est installé. Voir [ici](#update-prepared-via-the-console)

## Mise à jour via l'interface web

La mise à jour peut être effectuée soit via **Administration → gestion du [Nom-du-locataire]** en cliquant sur le bouton **mise à jour i-doit** près du titre ou via le widget de lancement rapide dans le tableau de bord ou via l'URL <http://i-doit-host/i-doit/?load=update>.


[![Mise à jour via le tableau de bord](../assets/images/en/maintenance-and-operation/update/1-update.png)](../assets/images/en/maintenance-and-operation/update/1-update.png)

Lors du lancement, une interface apparaît dans laquelle l'état actuel du système est examiné. Nous pouvons voir dans notre capture d'écran que l'extension PHP mcrypt n'a pas été trouvée. Si un tel message d'état est affiché, il est très important d'ajuster le système de manière appropriée. Pour cela, vous devriez consulter nos [exigences système](../installation/system-requirements.md) et [gestion des locataires](../system-administration/administration/tenant-management/index.md). Après avoir ajusté l'environnement, tout devrait être vérifié avec une marque verte ou marqué d'un "OK".

### Étape 1 : Mise à jour d'i-doit et vérification de compatibilité

[![Mise à jour d'i-doit](../assets/images/en/maintenance-and-operation/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

### Étape 2 : Mises à jour disponibles

À cette étape, tous les packages de mise à jour disponibles sont affichés. Dans notre exemple, la version 25 d'i-doit est installée et ne peut donc être mise à jour qu'à la même version.

[![Mises à jour disponibles](../assets/images/en/maintenance-and-operation/update/3-update.png)](../assets/images/en/maintenance-and-operation/update/3-update.png)

En cliquant sur **Vérifier une nouvelle version**, vous pouvez vérifier si un package plus récent est disponible. Pour cela, vous avez besoin d'une connexion internet.<br>
Si une nouvelle version est disponible, le package de mise à jour peut être téléchargé et extrait en cliquant sur **Télécharger**.<br>
Si vous avez une URL pour le package de mise à jour, vous pouvez insérer le lien et cliquer sur **Télécharger et extraire**.

[![Mises à jour disponibles](../assets/images/en/maintenance-and-operation/update/4-update.png)](../assets/images/en/maintenance-and-operation/update/4-update.png)

Maintenant, une nouvelle version est disponible pour la mise à jour. La mise à jour peut être lancée en cliquant sur **Suivant**. Pour voir tous les changements notables pour ce package, vous pouvez trouver une liste sous **voir le journal des modifications**.

[![Mises à jour disponibles](../assets/images/en/maintenance-and-operation/update/5-update.png)](../assets/images/en/maintenance-and-operation/update/5-update.png)

### Étape 3: Base de données

Généralement, les cases sont cochées comme indiqué dans la capture d'écran, de sorte que la base de données système et toutes les bases de données mandataires associées sont sélectionnées pour la mise à jour par défaut. S'il n'y a aucune raison de ne pas mettre à jour des bases de données mandataires particulières, toutes les sélections doivent être conservées.

[![Bases de données](../assets/images/en/maintenance-and-operation/update/6-update.png)](../assets/images/en/maintenance-and-operation/update/6-update.png)

### Étape 4: Mise à jour des fichiers

Maintenant, au plus tard, une [sauvegarde](./backup-and-recovery/index.md) doit être effectuée. Dès qu'une sauvegarde est effectuée, vous pouvez démarrer la mise à jour en cliquant sur le bouton **Oui, j'ai fait une sauvegarde ! - Démarrer la mise à jour**.

[![Mise à jour des fichiers](../assets/images/en/maintenance-and-operation/update/7-update.png)](../assets/images/en/maintenance-and-operation/update/7-update.png)

### Étape 5: Aperçu (Journal)

Chaque changement peut avoir des effets sur les fichiers et les bases de données. Si quelque chose ne va pas (typiquement en raison de permissions d'écriture manquantes), une erreur rouge "ERREUR" apparaît. Si un "TERMINÉ" vert est affiché pour chaque changement, vous pouvez passer à l'étape suivante en cliquant sur **Suivant**.

[![Aperçu](../assets/images/en/maintenance-and-operation/update/8-update.png)](../assets/images/en/maintenance-and-operation/update/8-update.png)

### Étape 6: Migration

Selon la mise à jour, les données existantes seront modifiées. L'étape de "Migration" exécute ces changements et indique si ces changements ont été effectués avec succès ou non.

[![Migration](../assets/images/en/maintenance-and-operation/update/9-update.png)](../assets/images/en/maintenance-and-operation/update/9-update.png)

### Étape 7: Migration des attributs

Suite à la soi-disant "Migration des propriétés", tout devrait être à nouveau marqué en vert.

[![Migration des attributs](../assets/images/en/maintenance-and-operation/update/10-update.png)](../assets/images/en/maintenance-and-operation/update/10-update.png)

### Étape 8: Achèvement

Maintenant, la mise à jour est terminée. Des informations plus détaillées sur la mise à jour peuvent être trouvées dans le fichier journal lié. Vous pouvez revenir à i-doit en cliquant sur **Exécuter i-doit v.[VERSION]**. Il est recommandé de vider à la fois le cache du navigateur et le cache i-doit sous **Administration → Gestion du [Nom-du-locataire] → Réparation et nettoyage**.

[![Complétion](../assets/images/en/maintenance-and-operation/update/11-update.png)](../assets/images/en/maintenance-and-operation/update/11-update.png)

## Mise à jour préparée via la console 

La mise à jour peut être préparée, mais pas exécutée via la console. Pour la préparation, le dernier package de mise à jour doit être téléchargé depuis le [portail client i-doit](../system-administration/customer-portal.md).

Le package de mise à jour peut être stocké sur le serveur (par exemple, via [WinSCP](https://winscp.net/eng/index.php)). Déplacez le package dans le dossier principal de i-doit par la suite, si vous ne l'avez pas déjà mis là. Cela peut être effectué en utilisant la commande suivante :

```shell
mv idoit-26-update.zip /var/www/html/i-doit/
```

Ensuite, le package doit être extrait et tous les fichiers existants doivent être écrasés.

```shell
cd /var/www/html/i-doit
unzip idoit-26-update.zip
```

Maintenant, les autorisations des fichiers sont ajustées afin de donner au serveur Web à la fois un accès en lecture et un accès en écriture à i-doit.

!!! info ""
    La combinaison utilisateur:groupe **www-data:www-data** utilisée ici fait référence à **Debian GNU/Linux ou Ubuntu Linux**.<br>
    Si un autre système d'exploitation est utilisé, la combinaison utilisateur:groupe utilisée doit être adaptée.

```shell
cd /var/www/html/i-doit/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

Maintenant, vous pouvez consulter nos instructions pour la [mise à jour via l'interface web](./update.md) et sauter les étapes concernant le téléchargement du dernier package.
```
