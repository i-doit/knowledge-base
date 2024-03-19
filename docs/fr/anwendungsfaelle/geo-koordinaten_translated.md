<!-- TRANSLATED by md-translate -->
# Geo-Koordinaten

# Coordonnées géographiques

Jedes [Objekt](../grundlagen/struktur-it-dokumentation.md) in i-doit lässt sich mit geografischen Koordinaten in Form von Breiten- und Längengrad versehen.

Chaque [objet](../bases/structure-it-documentation.md) dans i-doit peut être doté de coordonnées géographiques sous forme de latitude et de longitude.

## Geo-Koordinaten speichern

## Enregistrer les coordonnées géographiques

Falls noch nicht geschehen, lassen sich die Geo-Koordinaten eines Standorts über diverse Karten- und Navigationsdienste ermitteln. Die Koordinaten werden in der [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Standort** gespeichert. Dort stehen die beiden Attribute **Breitengrad** und **Längengrad** zur Verfügung.

Si ce n'est pas déjà fait, les coordonnées géographiques d'un site peuvent être obtenues via divers services de cartographie et de navigation. Les coordonnées sont enregistrées dans la [catégorie](../grundlagen/struktur-it-dokumentation.md) **Site**. Les deux attributs **latitude** et **longitude** y sont disponibles.

[![standort](../assets/images/de/anwendungsfaelle/geo-koordinaten/de_geo-koordinaten.png)](../assets/images/de/anwendungsfaelle/geo-koordinaten/de_geo-koordinaten.png)

[ ![site](../assets/images/fr/applicationfaelle/geo-coordinates/fr_geo-coordinates.png)](../assets/images/fr/applicationfaelle/geo-coordinates/fr_geo-coordinates.png)

## Karten aufrufen

## Appeler les cartes

Sobald die Koordinaten gespeichert sind, werden in der Kategorie **Standort** zwei Buttons angezeigt. Der Button **Google Maps** öffnet im Webbrowser einen neuen Tab zum gleichnamigen Kartendienst. Eine Markierung weist auf die Geo-Koordinaten hin. Der Button **OpenStreetMap** verhält sich analog.

Dès que les coordonnées sont enregistrées, deux boutons s'affichent dans la catégorie **Lieu**. Le bouton **Google Maps** ouvre dans le navigateur web un nouvel onglet vers le service de cartes du même nom. Un marqueur indique les coordonnées géographiques. Le bouton **OpenStreetMap** se comporte de manière analogue.

## Koordinaten vererben

## Hériter des coordonnées

Jedes verortete Objekt befindet sich innerhalb des Standortbaums, d. h., es gibt immer ein übergeordnetes Objekt (bis hin zur **Root-Lokation**/**Root location**). Die Geo-Koordinaten eines übergeordneten Objekts können auf die räumlich zugeordneten Objekte vererbt werden. Dazu wird in der Kategorie **Standort** zuerst das übergeordnete Objekt im Attribut **Standort** ausgewählt. Nach Klick auf den Button **GEO Koordinaten vererben** werden die beiden Attribute **Breitengrad** und **Längengrad** automatisch mit den Angaben des übergeordneten Objekts ausgefüllt.

Chaque objet localisé se trouve à l'intérieur de l'arbre de localisation, c'est-à-dire qu'il y a toujours un objet supérieur (jusqu'à la **localisation racine**/**Root location**). Les coordonnées géographiques d'un objet supérieur peuvent être héritées par les objets spatialement associés. Pour ce faire, l'objet parent est d'abord sélectionné dans la catégorie **Lieu** dans l'attribut **Lieu**. Après avoir cliqué sur le bouton **Hériter des coordonnées géographiques**, les deux attributs **Latitude** et **Longitude** sont automatiquement remplis avec les données de l'objet supérieur.

Eine automatisierte Vererbung der Koordinaten von einem Objekt zu allen räumlich zugeordneten Objekten findet nicht statt.

Il n'y a pas d'héritage automatique des coordonnées d'un objet à tous les objets spatialement affectés.