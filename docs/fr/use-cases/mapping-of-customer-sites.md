# Cartographie des sites clients

Les clients ont souvent plusieurs sites qui doivent être représentés dans une hiérarchie et attribués individuellement aux composants informatiques.

Approche
--------

Nous fournissons à nos clients des composants matériels et logiciels. Il est donc essentiel de documenter à la fois nos clients et les composants informatiques qu'ils utilisent. Pour générer un aperçu simple, nous voulons utiliser la vue de localisation i-doit.

[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/1-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/1-mocs.png)[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/2-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/2-mocs.png)

Configuration
-------------

Tout ce dont vous avez besoin pour la configuration se trouve dans la **Configuration du type d'objet** sous **Administration → Paramètres de la CMDB**. Enregistrez les clients dans le type d'objet indépendant **Client**. Définissez le type d'objet comme **localisation**. Les catégories **Localisation** et **Objets attribués localement** doivent être attribuées au moins. D'autres catégories peuvent être utiles (**Organisation**, **Adresse**, **Adresses e-mail**, **Affectation de contact**, **Accès**) pour documenter les clients aussi en détail que nécessaire.

[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/3-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/3-mocs.png)[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/4-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/4-mocs.png) 

Application
-----------

Lors de la création d'un nouveau client, le client doit être attribué à la [localisation racine](../glossary.md). Des constructions imbriquées avec des sous-clients sont également possibles. Pour cela, les sous-clients sont attribués localement à d'autres clients. Sous les clients, un nombre quelconque d'objets peut être attribué. Utilisez la catégorie "Objets attribués localement" ou alternativement la catégorie "Localisation" dans les objets que vous souhaitez attribuer.
