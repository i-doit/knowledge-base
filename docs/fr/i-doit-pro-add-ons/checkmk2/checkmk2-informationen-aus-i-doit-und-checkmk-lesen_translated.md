<!-- TRANSLATED by md-translate -->
# checkmk 2 Informationen aus i-doit und checkmk lesen

# checkmk 2 Lire les informations d'i-doit et de checkmk

Die folgenden Befehle geben Ihnen einen schnellen Überblick über Ihre i-doit- und checkmk Konfiguration. Sie sind sehr nützlich für Debugging- und Testzwecke, ohne Ihre Daten zu verändern.

Les commandes suivantes vous donnent un aperçu rapide de votre configuration i-doit et checkmk. Elles sont très utiles à des fins de débogage et de test, sans modifier vos données.

## i-doit Objekte

## objets i-doit

Auflisten der i-doit Objekte mit dem Befehl fetch-objects:

Lister les objets i-doit avec la commande fetch-objects :

```
idoitcmk fetch-objects
```

Holt alle verfügbaren Informationen über i-doit-Objekte:

Obtient toutes les informations disponibles sur les objets i-doit :

```
idoitcmk fetch-objects -v
```

Geben Sie --help für Kommandozeilenoptionen ein, um diese Objekte zu filtern.

Saisissez --help pour les options de ligne de commande afin de filtrer ces objets.

## Check_MK-Hosts

## Check_MK-Hosts

Auflisten der checkmk Hosts mit dem Befehl fetch-hosts:

Lister les hôtes checkmk avec la commande fetch-hosts :

```
idoitcmk fetch-hosts
```

Holt alle verfügbaren Informationen über checkmk Hosts:

Obtient toutes les informations disponibles sur les hôtes checkmk :

```
idoitcmk fetch-hosts -v
```

Geben Sie --help für Kommandozeilenoptionen ein, um diese Hosts zu filtern.

Saisissez --help pour les options de ligne de commande afin de filtrer ces hôtes.

Holt alle Hosts, aber ohne "effektive" Attribute, die von Regelsätzen, Ordnern, etc. geerbt werden:

Récupère tous les hôtes, mais sans les attributs "effectifs" hérités des jeux de règles, des dossiers, etc :

```
idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false
```

## Objekte und Hosts vergleichen

## Comparer les objets et les hôtes

Der Befehl [match](./checkmk2-abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md) vergleicht Objekte aus i-doit mit Hosts aus checkmk und gibt detaillierte Berichte aus.

La commande [match](./checkmk2-comparaison-des-objets-de-i-doit-avec-les-hôtes-de-checkmk.md) compare les objets de i-doit avec les hôtes de checkmk et génère des rapports détaillés.