# Exemple d'importation CSV - Applications

Dans cet exemple, nous voulons importer des applications. Nous voulons importer autant d'informations que possible sur une application.

!!! info "Cet article a été vérifié pour la version i-doit 1.16.2"

Pour l'importation, nous pouvons importer les informations suivantes :

- Type d'objet → Quel type d'objet devrait-il être ?
- Titre de l'objet → Quel est le nom de l'application ?
- Application - Spécification → Quelle est la spécification de l'application ?
- Application - Fabricant → Qui a fabriqué l'application ?
- Application - Installation → L'application est-elle installée automatiquement ou manuellement ?
- Application - Clé d'enregistrement → Quelle clé d'enregistrement a été utilisée ?
- Application - Chemin d'installation → Quel est le chemin d'installation ?
- Variantes d'application - Titre → Comment la variante doit-elle être nommée ?
- Variantes d'application - Variante → Comment la variante a-t-elle été nommée ?
- Version - Numéro de version → Quels sont les numéros de version ?
- Version - Service Pack → Quels sont les Service Packs disponibles ?
- Version - Noyau → Quelles versions de noyau sont disponibles ?
- Version - Niveau de correctif → Quels niveaux de correctif sont disponibles ?

Fichier CSV d'exemple pour cette importation :

[Télécharger le fichier Import-Applications.csv](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/Import-Applications.csv)

??? example "Import Applications.csv"

    ```text
    Object type;Object title;Application - Specification;Application - Manufacturer;Application - Installation;Application - Registration key;Application - Install path;Variants - Title;Variants - Variant;Version - Version number;Version - Servicepack;Version - Kernel;Version - Patchlevel
    C__OBJTYPE__APPLICATION;Application;Specification;"Manufacturer Alpha";Automatic;"No RegKey";"C:\Program Files\Application";Application PRO;Pro;1.0;Service Pack 1;;1
    C__OBJTYPE__APPLICATION;Applicationx;Specification;"Manufacturer Beta";Automatic;"No RegKey";"C:\Program Files\Applicationx";Application PRO,Applicationx ENTERPRISE;Pro,Enterprise;2,3;Service Pack 1,Service Pack 2;;1,2
    C__OBJTYPE__APPLICATION;Applicationy;Specification;"Manufacturer Gamma";Automatic;"No RegKey";"C:\Program Files\Application";Application PRO,Applicationy ENTERPRISE,Applicationy BUSINESS;Pro,Enterprise,Business;1.5,2.0,2.5;Service Pack 1,Service Pack 2,Service Pack 3;;5,6,7 C__OBJTYPE__APPLICATION;Applicationz;Specification;"Manufacturer Delta";Automatic;"No RegKey";"/etc/Applicationz/";Applicationz PRO,Applicationz ENTERPRISE,Applicationz BUSINESS;Pro,Enterprise,Business;10,11,12;;4.19.37;2,3,4
    ```

Cette importation ne suppose aucune dépendance. Comme nous créons de nouvelles applications, ainsi que des données sur ces applications.

Pour l'importation, nous retournons à la zone d'importation CSV. Les paramètres dans la zone supérieure restent aux réglages par défaut et nous cliquons sur Préparer la Mise en correspondance :

[![Préparer la mise en correspondance](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/1-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/1-csvi-a.png)

Maintenant, nous pouvons configurer l'importation dans la zone inférieure comme suit, puis démarrer le processus d'importation :

[![Démarrer le processus d'importation](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/2-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/2-csvi-a.png)

Si nous avons tout fait correctement, les applications individuelles apparaîtront maintenant dans la vue en liste.

[![vue en liste](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/3-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/3-csvi-a.png)

De plus, les catégories Applications → Variantes et Version sont remplies.

[![catégories](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/4-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/4-csvi-a.png)

[![catégories](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/5-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/5-csvi-a.png)
