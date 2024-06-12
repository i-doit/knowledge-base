# Dépannage 

Comportement non transparent dans i-doit. Une erreur ! Comment y faire face ? Veuillez lire la suite ! Cela pourrait être utile.

## Ne Paniquez Pas ! 

Tout d'abord, il est très important de rester calme. Les erreurs arrivent. À nous. À vous. À tout le monde. Le monde ne va pas s'arrêter. Très, très rarement les documentations informatiques disparaissent simplement.

Après le choc initial, il s'agit d'évaluer la situation et d'agir correctement. "Correctement" signifierait, en cas d'erreur, de nous informer le plus rapidement possible mais aussi le plus en détail possible. Commencez par rassembler toutes les informations avant de nous contacter. De cette manière, nous pouvons rapidement aider sans avoir besoin de nombreuses autres demandes.

## Analyser les Erreurs 

**Que se passe-t-il exactement lorsque l'erreur se produit ? Quelles étapes sont effectuées pour provoquer l'erreur ? Existe-t-il un message d'erreur ? L'erreur est-elle reproductible ?** - Ce sont des questions importantes auxquelles il convient de répondre avant d'entrer dans les détails.

Voici une petite liste de contrôle sur ce qu'il convient de rechercher au-delà de cela :

1.  **L'erreur est-elle déjà connue et peut-être même corrigée ?**<br> Nous tenons une [liste pour de nombreuses erreurs](../hotfixes/index.md) ici dans la base de connaissances. Notre [FAQ](https://help.i-doit.com/hc/en-us/categories/115000434905) est également une source de solutions possibles. Une recherche courageuse via le moteur de recherche de votre choix pourrait également fournir d'autres indices.
2.  **i-doit a-t-il été correctement installé et configuré ?**<br> Une erreur peut survenir lorsque nos [exigences système](../../installation/system-requirements.md) et [paramètres système](../../installation/manual-installation/system-settings.md) n'ont pas été pris en compte. Les informations indiquées peuvent également changer. Un regard sur les paramètres actifs au moment de l'erreur peut apporter de la clarté. Vous devriez également vérifier en outre si les **autorisations de fichiers** dans le chemin d'installation de i-doit ont été correctement définies.
3.  **i-doit est-il maintenu régulièrement ?**<br> Une erreur pourrait déjà avoir été résolue et un correctif peut avoir été publié. Assurez-vous d'utiliser la **version la plus récente** de i-doit.
4.  **Y a-t-il des problèmes superposés ?**<br> Il pourrait y avoir des problèmes de réseau, par exemple. Des systèmes tiers connectés pourraient être configurés différemment ou même dysfonctionner.
5.  **Les fichiers journaux de i-doit sont-ils disponibles ?**<br> Les [imports](../../consolidate-data/index.md), les [notifications](../../evaluation/notifications.md) ou les [requêtes API](../../i-doit-pro-add-ons/api/index.md) peuvent être journalisés, par exemple. Il existe également différents niveaux de journalisation dans certains cas, par exemple, lors de l'importation de données depuis JDisc. Plus le niveau est élevé (le débogage est le plus élevé), plus les détails dans l'analyse des erreurs. Ces journaux se trouvent dans le chemin d'installation de i-doit dans le dossier `log/`. Certains d'entre eux peuvent être activés à [Administration → Paramètres du locataire → Paramètres du locataire → Journalisation](../administration/tenant-management/settings-for-tenant.md#logging).
6.  **Des exceptions sont-elles lancées ?**<br> De nombreuses erreurs peuvent être interceptées en PHP. Ces erreurs sont rassemblées dans le chemin d'installation de i-doit dans `log/exception.log`. Cette option est activée à [Administration → Paramètres du locataire → Paramètres du locataire → Journalisation](../administration/tenant-management/settings-for-tenant.md#logging).
7.  **Les erreurs de PHP sont-elles transmises au serveur web Apache ?**<br> Si vous suivez nos [paramètres système](../../installation/manual-installation/system-settings.md), vous journalisez également de nombreuses erreurs du serveur web Apache. Ce journal peut être trouvé dans les systèmes d'exploitation basés sur Debian à `/var/log/apache2/error.log`.
8.  **Le serveur web signale-t-il une erreur au navigateur web ?**<br> Dans le cas où l'erreur ne se produit pas dans l'interface web : Parfois, le serveur web envoie un message d'erreur au navigateur sans que celui-ci soit visible pour l'utilisateur. L'utilisation des consoles de développement des navigateurs rendra la communication entre ces deux éléments visible, y compris les problèmes éventuels.
9.  **Le système d'exploitation signale-t-il une erreur ?**<br> Peut-être que le problème n'est pas associé à i-doit mais aux services utilisés, comme le serveur web Apache, MySQL/MariaDB ou le système d'exploitation lui-même. Les services sous GNU/Linux sont généralement administrés via un service Init comme systemd. Celui-ci écrit des rapports dans le Syslog, qui se trouve le plus souvent à `/var/log/syslog`.


!!! success "Débogage pour les débutants"

    Pour observer une erreur non pas a posteriori mais en temps réel, il est utile d'examiner les fichiers journaux mentionnés ci-dessus tout en examinant la charge système en même temps. Les fichiers journaux peuvent être ouverts dans GNU/Linux avec la commande tail -f <logfile>. Les changements sont immédiatement visibles. Pour observer la charge système, des commandes en ligne comme top, htop, atop et free sont utiles. Notez que les processus d'Apache et de MySQL/MariaDB utilisent des quantités exceptionnelles de temps CPU et/ou de mémoire.

## Rédiger un rapport de bug

**Si nous connaissons un bug, nous pouvons le corriger**. Si vous avez signé un contrat de support avec nous, nous avons déjà les données de contact nécessaires à notre disposition. Les bugs peuvent également être signalés sans contrat de support via le [centre d'aide](https://help.i-doit.com).

!!! tip ""

    Veuillez toujours indiquer les **versions** d'i-doit, les add-ons affectés, le serveur web Apache, PHP et MySQL/MariaDB en cours d'utilisation. Le fichier d'informations sur l'environnement i-doit, téléchargeable dans le [centre d'administration](../admin-center.md), vous aidera à le faire. Les fichiers de configuration, les fichiers journaux, les captures d'écran et le message d'erreur en texte brut soutiennent également l'analyse. Les **réponses** aux questions mentionnées ci-dessus sont également d'une grande aide pour nous et en retour pour vous.

Mettre en forme votre rapport de bug de manière esthétique ou même l'intégrer dans des PDF de haute qualité est moins important pour nous. Nous sommes cependant beaucoup plus heureux d'avoir un ton de conversation amical et objectif. Cela va de soi.

## Nous prendrons contact avec vous

Dans un court laps de temps, nous recontacterons les clients ayant un contrat de support (proposant souvent déjà une solution). Nous essayons de reproduire le problème sur nos systèmes de test en utilisant vos informations. Si ce bug est considéré comme tel, il sera résolu dès que possible. Avant de fournir une solution, elle passera d'abord par nos processus de test. La qualité nécessite du temps. Ensuite, nous publierons la correction dans le cadre de nos cycles de publication. Quelles que soient les raisons : Parfois, il faut plus de temps pour résoudre un problème. Dans ces cas, nous vous demandons votre compréhension. Nous continuons à travailler dessus.

## Tout va bien ?

Nous sommes heureux de recevoir vos retours une fois que vous avez essayé une solution proposée (correctif, contournement, etc.). Cela a fonctionné ? Fantastique. Le problème persiste ? D'accord, nous essaierons alors différentes méthodes. Un problème de suivi est survenu ? Ne paniquez pas, nous passerons à nouveau par toutes les étapes jusqu'à ce que tous les problèmes soient identifiés et, espérons-le, résolus. Et n'oubliez pas : vous ne marcherez jamais seul.
