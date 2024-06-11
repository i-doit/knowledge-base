# checkmk 2: Synchronisation des balises d'hôte

Les vérifications d'hôtes et de services de checkmk sont souvent basées sur son système de balisage. Vous pouvez partager des groupes de balises et les balises elles-mêmes avec i-doit en exécutant :

    idoitcmk sync-tags

Les balises seront stockées dans i-doit sous Extras > Check_MK 2 > Balises (statiques) et peuvent être attribuées à n'importe quels objets avec l'attribut Balises d'hôte dans la catégorie Balises Check_MK.

**Recommandation :** Exécutez cette commande chaque fois que vous ajoutez de nouvelles balises/groupes d'hôtes dans checkmk.

Si vous créez vos propres balises, il est important de remplir tous les champs afin que les balises puissent être créées dans CheckMK. Un mapping des champs peut être vu sur la capture d'écran.

[![Synchronisation des balises d'hôte](../../assets/images/en/i-doit-pro-add-ons/checkmk2/sync-host-tags/1-sht.png)](../../assets/images/en/i-doit-pro-add-ons/checkmk2/sync-host-tags/1-sht.png)
