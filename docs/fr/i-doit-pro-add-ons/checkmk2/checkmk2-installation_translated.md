<!-- TRANSLATED by md-translate -->
# checkmk 2: Installation

# checkmk 2 : Installation

Nachdem Sie sich mit dem [Anforderungen](./checkmk2-anforderungen.md) Laden Sie die neueste stabile Version des i-doit pro Add-ons von der [i-doit Kundenportal](../../administration/kundenportal.md).

Après vous être connecté au [Exigences](./checkmk2-exigences.md) Téléchargez la dernière version stable du module complémentaire i-doit pro depuis le [Portail client i-doit](../../administration/portail client.md).

Installieren Sie die heruntergeladene ZIP-Datei [wie jedes andere i-doit Add-on](../index.md).

Installez le fichier ZIP téléchargé [comme tout autre module complémentaire i-doit](../index.md).

## Hinzufügen der checkmk 2 Add-on Kategorien

## Ajouter les catégories de checkmk 2 add-on

Das Add-on macht zusätzlich die Kategorien "Checkmk Host" und "Checkmk Tags" für alle Objekttypen verfügbar. Die Kategorie kann über die Objekttypkonfiguration und über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) mit den gewünschten Objekttypen verknüpft werden. Auf diese Weise erscheinen nur die Objekttypen, die vom Benutzer angegeben werden, um die Auswahlliste übersichtlich zu halten.

Le module complémentaire rend en outre les catégories "Checkmk Host" et "Checkmk Tags" disponibles pour tous les types d'objets. La catégorie peut être liée aux types d'objets souhaités via la configuration des types d'objets et via [Modifier la structure de données](../../administration/administration/structure de données/modifier-la-structure-de-données.md). De cette manière, seuls les types d'objets indiqués par l'utilisateur apparaissent afin de garder la liste de sélection claire.

## Führen Sie idoitcmk dort aus, wo Sie wollen

## Exécutez idoitcmk là où vous le souhaitez

Die ZIP-Datei enthält die Binärdatei idoitcmk, die Sie auf jedem anderen Computer unterhalb des i-doit-Hosts installieren können. Machen Sie es ausführbar und verschieben Sie es in ein Verzeichnis in Ihrem PATH, damit Sie es in Ihrem Terminal ausführen können. Führen Sie es zum Beispiel auf einem GNU/Linux- oder MacOS-Host aus:

Le fichier ZIP contient le fichier binaire idoitcmk que vous pouvez installer sur n'importe quel autre ordinateur en dessous de l'hôte i-doit. Rendez-le exécutable et déplacez-le dans un répertoire de votre PATH afin de pouvoir l'exécuter dans votre terminal. Exécutez-le par exemple sur un hôte GNU/Linux ou MacOS :

```
unzip idoit-cmk2-*.zip
chmod 755 idoitcmk
sudo mv idoitcmk /usr/local/bin/
```

Um auf dem neuesten Stand zu sein, müssen Sie diese Schritte wiederholen.

Pour être à jour, vous devez répéter ces étapes.

## Führen Sie idoitcmk auf demselben Rechner wie i-doit aus

## Exécutez idoitcmk sur le même ordinateur qu'i-doit

Auf einem GNU/Linux-Host unterscheiden sich die folgenden Schritte nicht wesentlich von den oben genannten. Machen Sie die Binärdatei ausführbar und erstellen Sie einen symbolischen Link zu einem Verzeichnis in Ihrem PATH. In diesem Beispiel wird i-doit installiert unter /var/www/html:

Sur un hôte GNU/Linux, les étapes suivantes ne sont pas très différentes de celles décrites ci-dessus. Rendez le fichier binaire exécutable et créez un lien symbolique vers un répertoire de votre PATH. Dans cet exemple, i-doit est installé sous /var/www/html :

```
chmod 755 /var/www/html/idoitcmk
sudo ln -s /var/www/html/idoitcmk /usr/local/bin/
```

Um auf dem neuesten Stand zu sein, müssen Sie diese Schritte wiederholen.

Pour être à jour, vous devez répéter ces étapes.