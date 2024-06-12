# checkmk 2: Utilisation

Il suffit d'exécuter l'application pour afficher quelques informations de base :

```bash
idoitcmk
```


Aide
----

Chaque commande a sa propre utilisation. Exécutez soit

```bash
idoitcmk help COMMANDE
```

ou

```bash
idoitcmk COMMANDE --help
```


Informations sur la version
---------------------------

Quelle version de idoitcmk utilisez-vous ? Il suffit d'exécuter

```bash
idoitcmk --version
```


Lister toutes les commandes
---------------------------

Si vous souhaitez savoir quelles commandes sont disponibles, vous pouvez obtenir une liste complète avec :

```bash
idoitcmk list
```


Interaction avec l'utilisateur
-----------------------------

Avant que cette application ne modifie jamais des données, elle demandera la permission de l'utilisateur. Par exemple :

17 hôtes dans Check_MK seront mis à jour
Souhaitez-vous continuer ? [O|n] :

La valeur par défaut est mise en évidence en majuscules (O), vous pouvez simplement appuyer sur Entrée pour continuer.

Si vous souhaitez automatiser l'exécution sans aucune interaction utilisateur, utilisez l'option -y ou --yes :

```bash
idoitcmk push --yes
```


Récupérer des informations sur l'état
-------------------------------------

Si vous voulez vous assurer que tout va bien, effectuez divers tests :

```bash
idoitcmk status
```


*   Environnement PHP
*   Connexion à l'API JSON-RPC i-doit
*   Connexion à l'API Web Check\_MK
*   Connexion à l'API Livestatus Check\_MK

Verbosité
---------

Pendant l'exécution de cette application, elle affichera des informations plus ou moins utiles. Vous pouvez définir le niveau de verbosité préféré avec deux options. Augmentez la verbosité avec -v ou --verbose, diminuez-la avec -q ou --quiet. Ces niveaux de journalisation sont disponibles :

| Niveau | Couleur | Option | Description |
| --- | --- | --- | --- |
| Erreur fatale | Rouge | Toujours activé | Interrompre immédiatement l'exécution |
| Erreur | Rouge | Toujours activé | Quelque chose d'important s'est mal passé |
| Avertissement | Jaune | Toujours activé | Ignorer une étape en raison d'un manque d'informations |
| Avis | Jaune | Désactivé avec -q/--quiet | Tout va bien mais vous devriez remarquer ceci |
| Info | Vert | Désactivé avec -q/--quiet | Juste une information sur ce qui se passe |
| Débogage | Gris | Activé avec -v/--verbose | Afficher tout ce que vous avez |

Désactivez la sortie colorée avec l'option --no-colors. Cela est très utile à des fins de journalisation, par exemple :

```bash
idoitcmk push --verbose --no-colors --yes > idoitcmk.log
```

Super-utilisateur
-----------------

!!! info "Remarque : Il n'est pas nécessaire d'exécuter ce script dans un environnement de production avec des droits de super-utilisateur comme root."
```
