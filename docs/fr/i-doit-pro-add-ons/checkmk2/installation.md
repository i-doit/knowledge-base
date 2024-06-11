# checkmk 2: Installation {/examples}

Après avoir satisfait aux [exigences](./requirements.md), téléchargez la dernière version stable de l'extension i-doit pro depuis le [portail client i-doit](https://portal.i-doit.com/).

Installez le fichier ZIP téléchargé [comme toute autre extension i-doit](../index.md).

## Ajout des catégories de l'extension checkmk 2

L'extension rend également disponibles les catégories "Hôte Checkmk" et "Balises Checkmk" pour tous les types d'objets. La catégorie peut être liée aux types d'objets souhaités via la configuration du type d'objet et [Modifier la structure des données](../../system-administration/administration/data-structure/edit-data-structure.md). De cette manière, seuls les types d'objets spécifiés par l'utilisateur apparaissent afin de maintenir la liste de sélection claire.

## Exécutez idoitcmk où vous le souhaitez

Le fichier ZIP contient le binaire idoitcmk que vous pouvez installer sur n'importe quel autre ordinateur sous l'hôte i-doit. Rendez-le exécutable et déplacez-le dans un répertoire de votre PATH afin de pouvoir l'exécuter dans votre terminal. Par exemple, exécutez sur un hôte GNU/Linux ou MacOS:

```shell
unzip idoit-cmk2-*.zip
chmod 755 idoitcmk
sudo mv idoitcmk /usr/local/bin/
```

Pour être à jour, vous devez répéter ces étapes.

## Exécuter idoitcmk sur le même hôte que i-doit

Sur un hôte GNU/Linux, les étapes suivantes ne sont pas très différentes de celles ci-dessus. Rendez le binaire exécutable et créez un lien symbolique vers un répertoire dans votre PATH. Dans cet exemple, i-doit est installé à /var/www/html :

```shell
chmod 755 /var/www/html/idoitcmk
sudo ln -s /var/www/html/idoitcmk /usr/local/bin/
```

Pour être à jour, vous devez télécharger et installer le fichier ZIP.
```
