<!-- TRANSLATED by md-translate -->
# checkmk 2: Abgleich von Objekten aus i-doit mit Hosts aus checkmk

# checkmk 2 : Comparaison d'objets d'i-doit avec des hôtes de checkmk

Bevor Sie [push](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) oder [pull](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md) ausführen, möchten Sie einen genaueren Blick darauf werfen, wie Ihre Infrastruktur in den beiden Tools i-doit und checkmk aussieht. Die Befehle [fetch-objects und fetch-hosts](./checkmk2-informationen-aus-i-doit-und-checkmk-lesen.md) geben Ihnen detaillierte Informationen über Ihre dokumentierten Objekte in i-doit oder Ihre überwachten Hosts in checkmk. Aber beide gleichen sie nicht miteinander ab. Dies wird durch den Befehl match erledigt:

Avant d'exécuter [push](./checkmk2-wato-configuration-based-data-generation.md) ou [pull](./checkmk2-bestbestdaten-in-die-cmdb-import.md), vous souhaitez jeter un coup d'œil plus attentif à la manière dont votre infrastructure apparaît dans les deux outils i-doit et checkmk. Les commandes [fetch-objects et fetch-hosts](./checkmk2-informations-of-i-doit-et-checkmk-read.md) vous donnent des informations détaillées sur vos objets documentés dans i-doit ou vos hôtes surveillés dans checkmk. Mais ni l'un ni l'autre ne les mettent en correspondance. C'est la commande match qui s'en charge :

```
idoitcmk match
```

Nach dem Vergleich jedes Objekts mit jedem Host werden einige detaillierte Berichte ausgegeben:

Après avoir comparé chaque objet à chaque hôte, quelques rapports détaillés sont produits :

* Objekte in i-doit, die von Hosts in checkmk aktualisiert werden können
* Hosts in checkmk, die nicht als Objekte in i-doit verfügbar sind
* Hosts in checkmk, die durch Objekte in i-doit aktualisiert werden können
* Objekte in i-doit, die nicht als Hosts in checkmk verfügbar sind

* objets dans i-doit qui peuvent être mis à jour par des hôtes dans checkmk
* Hôtes dans checkmk qui ne sont pas disponibles comme objets dans i-doit
* Hôtes dans checkmk qui peuvent être mis à jour par des objets dans i-doit
* Objets dans i-doit qui ne sont pas disponibles en tant qu'hôtes dans checkmk

Keine Ihrer Daten werden verändert.

Aucune de vos données n'est modifiée.

Wenn Sie die Ausführlichkeit erhöhen, gibt Ihnen dieser Befehl Hinweise, was als nächstes zu tun ist:

Si vous augmentez le niveau de détail, cette commande vous donne des indications sur ce qu'il faut faire ensuite :

```
idoitcmk match -v
```