<!-- TRANSLATED by md-translate -->
# checkmk 2: Synchronisierung der checkmk Agenten

# checkmk 2 : Synchronisation des agents checkmk

checkmk bietet eine agentenbasierte Überwachung von Hosts und deren Diensten. Es gibt verschiedene Arten von Agenten, die mit i-doit geteilt werden können. Um dies zu tun, führen Sie einfach aus:

checkmk offre une surveillance des hôtes et de leurs services basée sur des agents. Il existe différents types d'agents qui peuvent être partagés avec i-doit. Pour ce faire, il suffit d'exécuter

```
idoitcmk sync-agents
```

Dadurch werden alle verfügbaren Agententypen zu i-doit's Dialog+-Attribut "Agent" in der Kategorie Check_MK Host hinzugefügt.

Ainsi, tous les types d'agents disponibles sont ajoutés à l'attribut Dialog+ d'i-doit "Agent" dans la catégorie Check_MK Host.

**Empfehlung:** Sie müssen diesen Befehl nur einmal ausführen.

**Recommandation:** Vous ne devez exécuter cette commande qu'une seule fois.