# Synchronisierung der checkmk Agenten

Checkmk bietet eine agentenbasierte Überwachung von Hosts und deren Diensten. Es gibt verschiedene Arten von Agenten, die mit i-doit geteilt werden können. Um dies zu tun, führen Sie einfach aus:

```shell
idoitcmk sync-agents
```

Dadurch werden alle verfügbaren Agententypen zu i-doit's Dialog+-Attribut "Agent" in der Kategorie Check_MK Host hinzugefügt.

**Empfehlung:** Sie müssen diesen Befehl nur einmal ausführen.
