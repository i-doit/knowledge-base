# Exportation de données CSV

De nombreuses données peuvent être exportées directement depuis la [documentation informatique](../glossary.md) au format CSV afin d'être traitées, par exemple, avec un tableur.

Liste d'objets
-----------

Les objets et leurs attributs peuvent être exportés via la [liste d'objets](../basics/object-list/index.md) en cliquant sur le bouton **Exporter en CSV** dans la barre d'actions. Les colonnes correspondent aux attributs [configurés dans la vue de liste](../basics/object-list/configuration-of-the-list-view.md). La [filtration active de la liste d'objets](../basics/object-list/navigation-and-filtering.md) n'est **pas** observée lors de l'exportation.

[![liste-d-objets](../assets/images/en/consolidate-data/csv-data-export/1-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/1-csv-de.png)

Catégories de liste
---------------

L'exportation CSV prend actuellement en charge de nombreuses [catégories de liste](../glossary.md) (multivaluées). Les entrées et les [attributs](../glossary.md) qui sont affichés dans leur liste sont proposés en téléchargement en appuyant sur le bouton **Exporter en CSV**. Les noms des attributs sont utilisés comme titres de colonne.

[![list-categories](../assets/images/en/consolidate-data/csv-data-export/2-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/2-csv-de.png)

Rapports
--------

Également le [gestionnaire de rapports](../evaluation/report-manager.md) offre la fonction d'exportation au format CSV. Utilisez le bouton **CSV** dans un rapport pour activer la fonction.

[![rapports](../assets/images/en/consolidate-data/csv-data-export/3-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/3-csv-de.png)

Format CSV
----------

Les fichiers CSV sont des fichiers texte simples dans lesquels des colonnes séparées par des virgules sont stockées dans chaque ligne. Dans ce cas, un point-virgule est utilisé comme séparateur de colonnes. Les données sont encodées en Unicode (UTF-8).

Microsoft Excel

Dans certains cas, il peut arriver que Microsoft Excel n'affiche pas correctement les données du fichier CSV exporté. En particulier, des erreurs d'encodage peuvent être remarquées. Pour éviter cela, le fichier CSV ne doit pas être ouvert directement mais importé d'abord :

1.  Exporter et enregistrer le fichier CSV
2.  Ouvrir Excel
3.  Cliquez sur **À partir du texte** dans l'onglet **Données**
4.  Ouvrir le fichier CSV
5.  Définir la source du fichier sur **65001 : Unicode (UTF-8)** dans la boîte de dialogue de l'**Assistant d'importation de texte**
6.  Cliquez sur **Suivant**
7.  Sélectionnez la case à cocher **Point-virgule** pour choisir un séparateur
8.  Cliquez sur **Terminer**
