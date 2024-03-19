<!-- TRANSLATED by md-translate -->
# checkmk 2: checkmk sites synchronisieren

# checkmk 2 : synchroniser les sites checkmk

checkmk bietet eine verteilte Überwachung von Hosts und deren Diensten. Sie können mehrere Überwachungshosts konfigurieren, die als "Sites" bezeichnet werden. Um diese Sites mit i-doit zu teilen, führen Sie aus:

checkmk offre une surveillance distribuée des hôtes et de leurs services. Vous pouvez configurer plusieurs hôtes de surveillance, appelés "sites". Pour partager ces sites avec i-doit, exécutez

```
idoitcmk sync-sites
```

*Sites ohne Hosts werden nicht berücksichtigt.

*Les sites sans hôtes ne sont pas pris en compte.

In i-doit werden diese Sites im Dialog+ Attribut Site in der Kategorie Check_MK Host gespeichert.

Dans i-doit, ces sites sont enregistrés dans l'attribut Dialog+ Site dans la catégorie Check_MK Host.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie eine neue Site hinzufügen.

**Recommandation:** Exécutez cette commande à chaque fois que vous ajoutez un nouveau site.