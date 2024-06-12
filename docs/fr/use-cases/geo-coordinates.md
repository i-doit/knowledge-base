# Coordonnées Géographiques 

Chaque [objet](../basics/structure-of-the-it-documentation.md) dans i-doit peut être étiqueté avec des coordonnées géographiques indiquant la longitude et la latitude.

Enregistrement des Coordonnées Géographiques
--------------------------------------------

Si ce n'est pas encore fait, vous pouvez déterminer les coordonnées géographiques d'un emplacement via divers services de cartographie et de navigation. Les coordonnées sont enregistrées dans la **Catégorie** **Emplacement** [category](../basics/structure-of-the-it-documentation.md). Ici, vous pouvez trouver les attributs **Latitude** et **Longitude**.

[![geo-coordinates](../assets/images/en/use-cases/geo-coordinates/en_geo_coordinates.png)](../assets/images/en/use-cases/geo-coordinates/en_geo_coordinates.png)

Accès aux Cartes
----------------

Deux boutons sont affichés dans la **Catégorie** **Emplacement** dès que les coordonnées sont enregistrées. Le bouton **Google Maps** ouvre un onglet pour le service de cartographie du même nom dans le navigateur web. Une étiquette affiche les coordonnées géographiques. Il en va de même pour le bouton **OpenStreetMap**.

Héritage des Coordonnées Géographiques
---------------------------------------

Chaque objet localisé est situé dans l'arborescence des emplacements ; cela signifie qu'il y a toujours un objet de niveau supérieur (jusqu'à l'**Emplacement racine**). Les coordonnées géographiques d'un objet de niveau supérieur peuvent être héritées afin qu'elles soient transmises aux objets subordonnés avec une affectation spatiale. Pour ce faire, sélectionnez l'objet de niveau supérieur dans l'attribut **Emplacement** de la **Catégorie** **Emplacement**. Après avoir cliqué sur le bouton **Hériter des coordonnées GEO**, les attributs **Latitude** et **Longitude** sont automatiquement remplis avec les spécifications de l'objet de niveau supérieur.

Un processus d'héritage automatisé des coordonnées d'objet vers tous les autres objets avec une affectation spatiale ne se produit pas.
