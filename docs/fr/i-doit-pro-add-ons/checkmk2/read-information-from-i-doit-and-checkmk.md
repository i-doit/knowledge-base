# checkmk 2: Lire les informations depuis i-doit et checkmk

Les commandes suivantes vous donneront un aperçu rapide de votre configuration i-doit et checkmk. Elles sont très utiles à des fins de débogage et de test sans altérer vos données.

Objets i-doit
-------------

Listez les objets i-doit avec la commande fetch-objects :

    idoitcmk fetch-objects

Récupérez toutes les informations disponibles sur les objets i-doit :

    idoitcmk fetch-objects -v

Tapez --help pour voir les options en ligne de commande pour filtrer ces objets.

Hôtes checkmk
-------------

Listez les hôtes checkmk avec la commande fetch-hosts :

    idoitcmk fetch-hosts

Récupérez toutes les informations disponibles sur les hôtes checkmk :

    idoitcmk fetch-hosts -v

Tapez --help pour voir les options en ligne de commande pour filtrer ces hôtes.

Récupérez tous les hôtes, mais sans les attributs "effectifs" qui sont hérités des ensembles de règles, des dossiers, etc. :

    idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false

Comparer les objets et les hôtes
-------------------------

La commande [match](./match-objects-from-i-doit-with-hosts-from-checkmk.md) associe les objets de i-doit aux hôtes de checkmk et affiche des rapports détaillés.
