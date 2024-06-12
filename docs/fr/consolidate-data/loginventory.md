# LOGINventory 

!!! danger ""
    
    Avec la version 1.11 de i-doit, LOGINventory a été supprimé

  

En utilisant cette importation, les informations de LOGINventory peuvent être importées dans _i-doit_ et utilisées là-bas.

Exigences
------------

*   L'importation prend en charge uniquement LOGINventory jusqu'à la version 5 incluse. Pour le moment, la version 6 et les versions ultérieures ne sont pas prises en charge.
*   PDO doit être installé.
*   Le pilote PDO dblib doit être installé.
*   Le paramètre global tds version doit être défini sur 7.0 dans le fichier freetds.conf.

Paramètres dans i-doit
------------------

Les paramètres pour LOGINventory se trouvent à **Administration → Interfaces → données externes → Loginventory**.

Configuration de la base de données
-----------------------------

**IP :** serveur sur lequel se trouve la base de données.

**Port :** le port IP pour la communication (par défaut 3108).

**Base de données / Schéma :** description de la base de données (par défaut **loginventory**).

**Nom d'utilisateur :** nom d'utilisateur pour se connecter à la base de données.

**Mot de passe :** auto-explicatif.

  

[![loginventory](../assets/images/en/consolidate-data/loginventory/LOGINVENTORY1.jpg)](../assets/images/en/consolidate-data/loginventory/LOGINVENTORY1.jpg)

  

Configuration de l'Interface
------------------------------

Ici, vous pouvez définir le comportement par défaut de l'importation pour le LOGINventory.

**Type d'objet d'importation par défaut :** Tous les objets importés dans le LOGINventory sont créés avec le type d'objet sélectionné.

**Base de données par défaut :** Une base de données peut être choisie comme base par défaut qui sera chargée dès que quelqu'un se trouve sur la page d'importation.

**Connecter uniquement les applications connues :** Avec cette option, vous pouvez déterminer si seules les connexions sont créées pour les logiciels qui existent déjà dans le système _i-doit_ ou si les connexions de logiciels créent également des applications supplémentaires dans _i-doit_.

**Journal d'activité actif pendant l'importation :** Avec cette option, vous pouvez déterminer si des entrées de journal d'activité sont créées pendant l'importation ou non. L'importation sera plus lente lors de l'activation de cette option en raison de la création d'entrées de journal. Cette option devrait tout de même être activée.

**Importation :** Les bases de données qui ont été ajoutées dans la configuration peuvent être sélectionnées sur la page d'importation. Il est également possible de modifier le type d'objet par défaut pour l'importation en cours si nécessaire.


