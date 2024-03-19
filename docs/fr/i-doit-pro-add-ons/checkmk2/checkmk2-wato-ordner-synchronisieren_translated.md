<!-- TRANSLATED by md-translate -->
# checkmk 2: WATO Ordner synchronisieren

# checkmk 2 : Synchroniser les dossiers WATO

Hosts können hierarchisch in Ordnern geordnet werden. Diese Ordner können mit i-doit synchronisiert werden und zusätzliche Ordner in i-doit können verwendet werden, um neue Ordner in Check_MK zu erstellen. Einfach ausführen:

Les hôtes peuvent être organisés de manière hiérarchique dans des dossiers. Ces dossiers peuvent être synchronisés avec i-doit et des dossiers supplémentaires dans i-doit peuvent être utilisés pour créer de nouveaux dossiers dans Check_MK. Exécution facile :

```
idoitcmk sync-folders
```

In i-doit werden diese WATO-Ordner im Dialog+-Attribut WATO-Ordner in der Kategorie Check_MK Host gespeichert.

Dans i-doit, ces dossiers WATO sont enregistrés dans l'attribut Dialog+ Dossier WATO dans la catégorie Check_MK Host.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie einen neuen Ordner in checkmk oder i-doit hinzufügen.

**Recommandation:** Exécutez cette commande à chaque fois que vous ajoutez un nouveau dossier dans checkmk ou i-doit.