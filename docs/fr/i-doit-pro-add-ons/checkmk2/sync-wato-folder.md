# checkmk 2: Synchroniser les dossiers WATO

Les hôtes peuvent être organisés de manière hiérarchique dans des dossiers. Ces dossiers peuvent être synchronisés avec i-doit et des dossiers supplémentaires dans i-doit peuvent être utilisés pour générer de nouveaux dossiers dans checkmk. Il suffit d'exécuter :

    idoitcmk sync-folders

Dans i-doit, ces dossiers WATO sont stockés dans l'attribut de dialogue+ Dossier WATO de la catégorie Hôte Check_MK.

**Recommandation :** Exécutez cette commande chaque fois que vous ajoutez un nouveau dossier dans checkmk ou i-doit. 

{ /* examples */ }
