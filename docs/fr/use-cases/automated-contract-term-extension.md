# Extension automatique de la durée du contrat

!!! info "A été testé pour la dernière fois pour la version 23 d'i-doit"

**Cas d'utilisation :**
Le contrat d'un client a dépassé la dernière date de résiliation et doit être prolongé.
Pour prolonger le contrat, nous utiliserons la commande `extend-contracts`.

## Étape 1 : Rendre le contrat capable d'être prolongé avec `extend-contracts`

Pour prolonger un contrat avec la commande `extend-contracts`, il doit répondre à quelques exigences.
Pour ce faire, nous devons d'abord modifier le contrat existant.<br>

Les paramètres requis se trouvent dans la vue objet du contrat souhaité,

**Contrat → Informations sur le contrat**

[![contractextension-info](../assets/images/en/use-cases/automated-contract-extension/1-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/1-avv-uc.png)

Que nous éditons ensuite comme suit :

* **Période de fonctionnement** que nous définissons à *1 an*.
* **Fin de contrat par** que nous définissons à *Avis de résiliation*.
* **Date de résiliation** reste *vide*.
* **Délai de résiliation** que nous définissons à *1 mois* et *à la fin du contrat*.

[![contract-extension-config](../assets/images/en/use-cases/automated-contract-extension/2-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/2-avv-uc.png)

!!! info "Les prérequis pour exécuter la commande sont les suivants :"

    * **Période de fonctionnement** doit être remplie.
    * **Fin de contrat par** doit être définie sur résiliation
    * **Date de résiliation** doit être vide
    * **Délai de résiliation** doit être dans le passé (le même jour qu'aujourd'hui n'est pas possible !)

## Étape 2 : Appliquer `extend-contracts`

Pour pouvoir appliquer la commande `extend-contracts`, nous devons nous rendre sur la [Console](../automation-and-integration/cli/console/index.md).

La commande devrait ressembler à ceci :

```shell
    sudo -u www-data php console.php extend-contracts --user user --password password
```

Si le contrat est configuré correctement, la [Console](../automation-and-integration/cli/console/index.md) montrera que le contrat a été prolongé d'un an.

[![contract-extension-console](../assets/images/en/use-cases/automated-contract-extension/3-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/3-avv-uc.png)

## Étape 3: Automatiser {/examples}

Étant donné que nous ne voulons pas exécuter la commande manuellement à chaque fois, nous allons maintenant créer une **tâche cron**.
Tout d'abord, nous créons une nouvelle tâche cron :

```shell
    sudo nano /etc/cron.d/idoit-extend-contracts.
```

Dans cette tâche cron, nous ajoutons le code suivant :

```shell
    ## tâche cron idoit-extend-contracts

    15 6 * * www-data php /var/www/html/i-doit/console.php extend-contracts --user user --password password
```

Avec ce code, la tâche cron s'exécutera tous les jours à 6h15 du matin et prolongera automatiquement les contrats si les conditions sont remplies.<br>
La seule chose importante est que le chemin d'accès à la [Console](../automation-and-integration/cli/console/index.md) soit correct et que vous utilisiez le **nom d'utilisateur** et le **mot de passe** de l'instance idoit.
