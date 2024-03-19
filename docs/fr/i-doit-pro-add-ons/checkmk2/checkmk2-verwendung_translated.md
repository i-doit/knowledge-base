<!-- TRANSLATED by md-translate -->
# checkmk 2: Verwendung

# checkmk 2 : Utilisation

Führen Sie einfach die Anwendung aus, um einige grundlegende Informationen zu drucken:

Il suffit d'exécuter l'application pour imprimer quelques informations de base :

```
idoitcmk
```

## Hilfe

## Aide

Jeder Befehl hat seine eigene Verwendung. Entweder führen Sie

Chaque commande a sa propre utilisation. Soit vous exécutez

```
idoitcmk help COMMAND
```

oder

ou

```
idoitcmk COMMAND --help
```

## Versionsinformationen

## Informations sur la version

Welche Version von idoitcmk benutzen Sie? Führen Sie einfach

Quelle version de idoitcmk utilisez-vous ? Exécutez simplement

```
idoitcmk --version
```

## Alle Befehle auflisten

## Lister toutes les commandes

Wenn Sie wissen wollen, welche Befehle verfügbar sind, können Sie eine vollständige Liste mit:

Si vous voulez savoir quelles commandes sont disponibles, vous pouvez obtenir une liste complète avec :

```
idoitcmk list
```

## Benutzerinteraktion

## Interaction avec l'utilisateur

Bevor diese Anwendung Daten ändert, wird sie den Benutzer um Erlaubnis bitten. Zum Beispiel:

Avant de modifier des données, cette application demandera la permission à l'utilisateur. Par exemple

***17 Hosts in Check_MK werden aktualisiert***
***Möchten Sie fortfahren? [Y|n]:***

***17 hôtes dans Check_MK sont mis à jour***.
***Voulez-vous continuer ? [Y|n]:***

Der Standardwert ist in Großbuchstaben hervorgehoben (Y), so dass Sie einfach Enter drücken können, um fortzufahren.

La valeur par défaut est surlignée en majuscules (Y), il suffit donc d'appuyer sur Entrée pour continuer.

Wenn Sie die Ausführung ohne Benutzerinteraktion automatisieren möchten, verwenden Sie die Option -y oder --yes:

Si vous souhaitez automatiser l'exécution sans interaction de l'utilisateur, utilisez l'option -y ou --yes :

```
idoitcmk push --yes
```

## Abrufen von Statusinformationen

## Obtenir des informations sur l'état

Wenn Sie sicherstellen wollen, dass alles in Ordnung ist, führen Sie verschiedene Tests durch:

Si vous voulez vous assurer que tout va bien, effectuez différents tests :

```
idoitcmk status
```

Die folgenden Tests sind enthalten:

Les tests suivants sont inclus :

* PHP-Umgebung
* Verbindung zur i-doit JSON-RPC API
* Verbindung zur checkmk Web API
* Verbindung zu checkmk Livestatus API

* Environnement PHP
* Connexion à l'API JSON-RPC i-doit
* Connexion à checkmk Web API
* Connexion à l'API checkmk Livestatus

## Verbosity

## Verbosity

Während der Ausführung wird diese Anwendung mehr oder weniger nützliche Informationen ausgeben. Sie können den gewünschten Grad der Verbosity mit zwei Optionen einstellen. Erhöhen Sie die Verbosity mit -v oder --verbose, verringern Sie sie mit -q oder --quiet. Diese Protokollstufen sind verfügbar:

Pendant son exécution, cette application fournira des informations plus ou moins utiles. Vous pouvez régler le degré de verbosité souhaité à l'aide de deux options. Augmentez la verbosité avec -v ou --verbose, réduisez-la avec -q ou --quiet. Ces niveaux de protocole sont disponibles :

| Level | Farbe | Option | Beschreibung |
| --- | --- | --- | --- |
| Fatal error | Rot | Immer an | Sofortiger Abbruch der Ausführung |
| Error | Rot | Immer an | Etwas Wichtiges ist schief gelaufen |
| Warning | Gelb | Immer an | Überspringen eines Schrittes aufgrund mangelnder Informationen |
| Notice | Gelb | Deaktiviert mit -q/--quiet | Alles ist in Ordnung, aber Sie sollten Folgendes beachten |
| Info | Grün | Deaktiviert mit -q/--quiet | Nur eine Information, was los ist |
| Debug | Grau | Deaktiviert mit -v/--verbose | Drucken Sie alles aus, was Sie haben |

| niveau | couleur | option | description |
| --- | --- | --- | --- |
| Fatal error | Rouge | Toujours allumé | Interruption immédiate de l'exécution |
| Erreur | Rouge | Toujours allumé | Quelque chose d'important s'est mal passé |
| Warning | Jaune | Toujours allumé | Sauter une étape par manque d'information |
| Notice | Jaune | Désactivé par -q/--quiet | Tout va bien, mais vous devez faire attention à ce qui suit |
| Info | Vert | Désactivé avec -q/--quiet | Juste une information sur ce qui se passe |
| Debug | Gris | Désactivé avec -v/--verbose | Imprimez tout ce que vous avez |

Deaktivieren Sie die farbige Ausgabe mit der Option -no-colors. Dies ist sehr nützlich für Protokollierungszwecke, zum Beispiel:

Désactivez la sortie en couleur avec l'option -no-colors. Ceci est très utile à des fins de journalisation, par exemple :

```
idoitcmk push --verbose --no-colors --yes > idoitcmk.log
```

## Superuser-Rechte

## Droits du super-utilisateur

Hinweis: Es ist nicht notwendig, dieses Skript in einer Produktionsumgebung mit Superuser-Rechten wie root auszuführen.

Remarque : il n'est pas nécessaire d'exécuter ce script dans un environnement de production avec des droits de superutilisateur comme root.