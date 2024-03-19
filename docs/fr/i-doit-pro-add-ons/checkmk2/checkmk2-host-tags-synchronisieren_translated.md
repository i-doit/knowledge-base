<!-- TRANSLATED by md-translate -->
# checkmk 2: Host Tags synchronisieren

# checkmk 2 : Synchroniser les tags d'hôte

Die Host- und Service-Prüfungen von checkmk basieren häufig auf dem Tagging-System. Sie können Tag-Gruppen und die Tags selbst mit i-doit teilen, indem Sie ausführen:

Les vérifications d'hôtes et de services de checkmk sont souvent basées sur le système de balisage. Vous pouvez partager des groupes de balises et les balises elles-mêmes avec i-doit en exécutant

```shell
idoitcmk sync-tags
```

Die Tags werden in i-doit unter Extras > Check_MK 2 > Tags (statisch) gespeichert und können allen Objekten mit dem Attribut Host tags in der Kategorie Check_MK Tags zugewiesen werden.

Les tags sont enregistrés dans i-doit sous Outils > Check_MK 2 > Tags (statiques) et peuvent être attribués à tous les objets avec l'attribut Host tags dans la catégorie Check_MK Tags.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie neue Host-Tags/Gruppen in checkmk hinzufügen.

**Recommandation:** Exécutez cette commande à chaque fois que vous ajoutez de nouveaux tags/groupes d'hôtes dans checkmk.

Wenn eigene Tags angelegt werden ist es wichtig alle Felder anzufüllen, damit die Tags im CheckMK angelegt werden können. Ein Mapping der Felder ist auf dem Screenshot zu sehen.

Lorsque l'on crée ses propres tags, il est important de remplir tous les champs pour que les tags puissent être créés dans le CheckMK. Une cartographie des champs est visible sur la capture d'écran.

[![Host Tags synchronisieren](../../assets/images/de/i-doit-pro-add-ons/checkmk2/host-tags/host-tags.png)](../../assets/images/de/i-doit-pro-add-ons/checkmk2/host-tags/host-tags.png)

[ ![Synchroniser les tags d'hôte](../../assets/images/fr/i-doit-pro-add-ons/checkmk2/host-tags/host-tags.png)](../../assets/images/fr/i-doit-pro-add-ons/checkmk2/host-tags/host-tags.png)