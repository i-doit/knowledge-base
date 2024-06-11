# checkmk 2: Synchroniser les sites checkmk

checkmk offre une surveillance distribuée des hôtes et de leurs services. Vous pouvez configurer plusieurs hôtes de surveillance appelés "sites". Pour partager ces sites avec i-doit, exécutez :

    idoitcmk sync-sites

_Les sites sans hôtes ne sont pas pris en compte._

Dans i-doit, ces sites sont stockés dans l'attribut de dialogue+ Site de la catégorie Hôte Check_MK.

**Recommandation :** Exécutez cette commande chaque fois que vous ajoutez un nouveau site.
