# checkmk 2: Questions fréquemment posées (FAQ) {/examples}

Nous avons recueilli certaines des questions les plus posées sur idoitcmk.

## Accéder à l'inventaire matériel/logiciel

Dans un environnement multi-sites, les sites sont capables de collecter des informations sur le matériel/logiciel de leurs hôtes surveillés. Si vous avez configuré idoitcmk pour récupérer des informations sur vos hôtes à partir d'un site, ce site aura besoin d'accéder à l'inventaire matériel/logiciel des autres sites. Pour ce faire, assurez-vous d'avoir les paramètres suivants :

1. Allez à `WATO > Surveillance distribuée > Modifier le site esclave > Paramètres Livestatus > Connexion`
2. Sélectionnez `Utiliser le démon proxy Livestatus`
3. Sélectionnez l'option `Port CP à connecter à` pour `Se connecter à`
4. Ajoutez le FQDN/IP et le port pour l'esclave sélectionné que d'autres sites peuvent utiliser
5. Décochez `Autoriser l'accès via TCP`
6. Enregistrez et activez vos modifications

Maintenant, vous verrez à l'intérieur de l'interface Web un bouton appelé **Inventaire** sur chaque page d'état d'un hôte. C'est un bon indicateur qu'idoitcmk peut également accéder aux informations d'inventaire via l'API Web.

## Multi-locataires

L'extension prend en charge plusieurs locataires fournis par i-doit. Pour chaque locataire i-doit, vous devez configurer une clé API unique.

Par exemple, si vous avez déjà créé 2 locataires ou plus dans i-doit. Créez pour chaque locataire un fichier de configuration légèrement différent et ajoutez la clé API de chaque locataire au paramètre i-doit.key. Le paramètre i-doit.url est toujours le même, mais les paramètres i-doit.username et i-doit.password peuvent différer. Pour chaque locataire, appelez idoitcmk et ajoutez l'option --config :

```shell
idoitcmk --config tenant1.json
idoitcmk --config tenant2.json
```

Vous pouvez même mélanger les fichiers de configuration : un fichier contient des paramètres communs et les autres sont spécifiques au locataire. Par exemple :

```shell
idoitcmk --config common.js --config tenant1.json
idoitcmk --config common.js --config tenant2.json
```

## Comparer les balises d'hôte entre checkmk et i-doit

Les balises d'hôte sont regroupées dans checkmk. Voici un exemple d'un groupe de balises avec toutes ses balises :

```shell
Internal ID: criticality
Title: Criticality
Topic: -
Choices:
    1
        Tag ID: prod
        Description: Productive system
    2
        Tag ID: critical
        Description: Business critical
    3
        Tag ID: test
        Description: Test system
    4
        Tag ID: offline
        Description: Do not monitor this host
```

Via l'API Web de checkmk, vous recevez pour la balise prod cette paire clé-valeur :

```shell
tag_criticality: prod
```

Comme vous pouvez le voir, la clé d'un groupe de balises est préfixée par tag_ suivi de son ID interne, ici : criticality. L'ID de la balise est utilisé comme valeur.

Du côté d'i-doit, ces balises regroupées sont appelées balises d'hôte statiques. Vous les trouverez dans **Extras > Check_MK 2 > Balises (statiques)**. Voici la représentation de la balise prod mentionnée ci-dessus :

```shell
Host tag (id): prod
Display name: Productive system
Host group: criticality
Description: Criticality
```

Voici une comparaison directe entre checkmk et i-doit :

| checkmk | i-doit | clé i-doit | Exemple |
| --- | --- | --- | --- |
| ID interne | Groupe d'hôtes | groupe | criticality |
| Titre | Description | -   | Criticité |
| Sujet | -   | -   | -   |
| ID de balise | Balise d'hôte (ID) | const | prod |
| Description | Nom d'affichage | val | Système productif |

## Certificats auto-signés et autres problèmes avec les connexions TLS

Il est courant de forcer des connexions HTTPS chiffrées TLS entre idoitcmk, i-doit et checkmk - même dans des réseaux privés protégés par pare-feu. Souvent, des certificats x.509 auto-signés sont utilisés. Cela ne posera aucun problème, si vous suivez ces étapes :

-   L'hôte idoitcmk fonctionne sur (précisément : OpenSSL utilisé par cURL utilisé par PHP) doit vérifier l'intégralité de la chaîne de certificats, en particulier le certificat racine. Par conséquent, importez votre certificat racine sur cet hôte. Vous devriez tester si tout fonctionne en exécutant la commande de statut :

```shell
idoitcmk status -v
```

-   En alternative, mais strictement déconseillé, désactivez cette vérification de certificat. Vous devez le désactiver pour les connexions à la fois vers i-doit et checkmk en ajoutant deux nouveaux paramètres de configuration. Exemple :

```shell
idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"
```

Veuillez garder à l'esprit que la désactivation de la vérification ne protège pas votre configuration contre les attaques de l'homme du milieu. Cela affaiblit significativement la sécurité de votre infrastructure IT. Vous serez averti.

## checkmk répond avec le code d'état HTTP 2414"

Parfois, checkmk répond avec le code d'état HTTP 414 URI trop long lors de la demande de l'inventaire matériel/logiciel API. Par exemple, cela pourrait se produire lors de l'exécution de la commande pull :

```shell
idoitcmk pull
Import inventory data into CMDB

Looking for hosts in checkmk…
Found 1234 hosts

Read hardware/software inventory data for each host…
Web server responded with HTTP status code "414"
```

Pour éviter cette erreur, vous devez diminuer le paramètre de configuration `i-doit.limitBatchRequests`. La valeur par défaut est de 500. Une valeur de 100 devrait fonctionner.

## Objets dupliqués après avoir été tirés vers i-doit

Si la correspondance ne semble pas fonctionner correctement, assurez-vous que les catégories "Checkmk Host" et "Checkmk Tags" sont attribuées aux types d'objets que vous tirez vers i-doit. Pour cela, vous pouvez utiliser [Modifier la structure des données](../../basics/assignment-of-categories-to-object-types.md)

Il peut également être nécessaire de réduire les [identifiants de tirage](./configuration.md) par exemple le nom d'hôte.
```
