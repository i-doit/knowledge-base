# checkmk 2: Host Tags synchronisieren

Die Host- und Service-Prüfungen von checkmk basieren häufig auf dem Tagging-System. Sie können Tag-Gruppen und die Tags selbst mit i-doit teilen, indem Sie ausführen:

```shell
    idoitcmk sync-tags
```

Die Tags werden in i-doit unter Extras > Check_MK 2 > Tags (statisch) gespeichert und können allen Objekten mit dem Attribut Host tags in der Kategorie Check_MK Tags zugewiesen werden.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie neue Host-Tags/Gruppen in checkmk hinzufügen.

Wenn eigene Tags angelegt werden ist es wichtig alle Felder anzufüllen, damit die Tags im CheckMK angelegt werden können. Ein Mapping der Felder ist auf dem Screenshot zu sehen.

[![Host Tags synchronisieren](../../assets/images/de/i-doit-add-ons/checkmk2/host-tags/host-tags.png)](../../assets/images/de/i-doit-add-ons/checkmk2/host-tags/host-tags.png)
