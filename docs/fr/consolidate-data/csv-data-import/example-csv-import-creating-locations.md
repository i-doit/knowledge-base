# Exemple d'importation CSV - Création de lieux

Aujourd'hui, nous allons examiner un exemple pratique d'importation CSV.
Notre cas d'utilisation est la création automatique de lieux dans i-doit en utilisant une importation CSV.

!!! info "Cet article a été vérifié pour la version i-doit 1.17.1"

Nous avons besoin des informations suivantes pour créer les objets individuels :

- Le type d'objet créé par soi-même Étage/Sous-sol avec la constante de type d'objet → C\_\_OBJECT\_TYPE\_\_FLOOR.
- Nom de l'objet → le nom du bâtiment, de l'étage ou de la pièce
- Lieu → sous quel lieu l'objet doit être situé
- Type d'objet → quel type d'objet il doit être

Exemple de fichier CSV pour cette importation :

[Télécharger le fichier Import-Location.csv :material-file-download:](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/Import-Location.csv){ .md-button .md-button--primary }

La structure du CSV est la suivante :

??? example "Import Location.csv"

    ```text
    Object title;Location;Object type
    HEADQUARTER;Root location;C__OBJTYPE__BUILDING
    Basement;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    First Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Second Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Third Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Room 0.001;Basement;C__OBJTYPE__ROOM
    Room 0.002;Basement;C__OBJTYPE__ROOM
    Room 0.003;Basement;C__OBJTYPE__ROOM
    Room 0.004;Basement;C__OBJTYPE__ROOM
    Room 0.005;Basement;C__OBJTYPE__ROOM
    Room 0.006;Basement;C__OBJTYPE__ROOM
    Room 0.007;Basement;C__OBJTYPE__ROOM
    Room 0.008;Basement;C__OBJTYPE__ROOM
    Room 0.009;Basement;C__OBJTYPE__ROOM
    Room 0.010;Basement;C__OBJTYPE__ROOM
    Room 0.011;Basement;C__OBJTYPE__ROOM
    Room 0.012;Basement;C__OBJTYPE__ROOM
    Room 0.013;Basement;C__OBJTYPE__ROOM
    Room 0.014;Basement;C__OBJTYPE__ROOM
    Room 1.001;First Floor;C__OBJTYPE__ROOM
    Room 1.002;First Floor;C__OBJTYPE__ROOM
    Room 1.003;First Floor;C__OBJTYPE__ROOM
    Room 1.004;First Floor;C__OBJTYPE__ROOM
    Room 1.005;First Floor;C__OBJTYPE__ROOM
    Room 1.006;First Floor;C__OBJTYPE__ROOM
    Room 1.007;First Floor;C__OBJTYPE__ROOM
    Room 1.008;First Floor;C__OBJTYPE__ROOM
    Room 1.009;First Floor;C__OBJTYPE__ROOM
    Room 1.010;First Floor;C__OBJTYPE__ROOM
    Room 1.011;First Floor;C__OBJTYPE__ROOM
    Room 1.012;First Floor;C__OBJTYPE__ROOM
    Room 1.013;First Floor;C__OBJTYPE__ROOM
    Room 1.014;First Floor;C__OBJTYPE__ROOM
    Room 2.001;Second Floor;C__OBJTYPE__ROOM
    Room 2.002;Second Floor;C__OBJTYPE__ROOM
    Room 2.003;Second Floor;C__OBJTYPE__ROOM
    Room 2.004;Second Floor;C__OBJTYPE__ROOM
    Room 2.005;Second Floor;C__OBJTYPE__ROOM
    Room 2.006;Second Floor;C__OBJTYPE__ROOM
    Room 2.007;Second Floor;C__OBJTYPE__ROOM
    Room 2.008;Second Floor;C__OBJTYPE__ROOM
    Room 2.009;Second Floor;C__OBJTYPE__ROOM
    Room 2.010;Second Floor;C__OBJTYPE__ROOM
    Room 2.011;Second Floor;C__OBJTYPE__ROOM
    Room 2.012;Second Floor;C__OBJTYPE__ROOM
    Room 2.013;Second Floor;C__OBJTYPE__ROOM
    Room 2.014;Second Floor;C__OBJTYPE__ROOM
    Room 3.001;Third Floor;C__OBJTYPE__ROOM
    Room 3.002;Third Floor;C__OBJTYPE__ROOM
    Room 3.003;Third Floor;C__OBJTYPE__ROOM
    Room 3.004;Third Floor;C__OBJTYPE__ROOM
    Room 3.005;Third Floor;C__OBJTYPE__ROOM
    Room 3.006;Third Floor;C__OBJTYPE__ROOM
    Room 3.007;Third Floor;C__OBJTYPE__ROOM
    Room 3.008;Third Floor;C__OBJTYPE__ROOM
    Room 3.009;Third Floor;C__OBJTYPE__ROOM
    Room 3.010;Third Floor;C__OBJTYPE__ROOM
    Room 3.011;Third Floor;C__OBJTYPE__ROOM
    Room 3.012;Third Floor;C__OBJTYPE__ROOM
    Room 3.013;Third Floor;C__OBJTYPE__ROOM
    Room 3.014;Third Floor;C__OBJTYPE__ROOM
    ```

Comme nous voulons définir des dépendances qui se construisent les unes sur les autres, il est important de maintenir un ordre correspondant pour les lieux dans le fichier CSV.  
Le lieu racine est toujours le niveau le plus bas et existe déjà. Dans ce lieu se trouvent les bâtiments individuels, dans les bâtiments les étages individuels et dans les étages les pièces respectives:

  Emplacement racine → Bâtiment → Étage → Salle { /*examples*/ }

Donc, dans le fichier CSV, les bâtiments viennent en premier, puis les étages et enfin les salles.

[![bâtiments-étage-salle](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/1-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/1-csv-cl.png)

Pour définir quel type d'objet doit être créé dans chaque cas, nous attribuons à l'importation, sur chaque ligne, la constante de type d'objet de la manière suivante, que nous trouvons dans la configuration du type d'objet :

[![configuration-type-objet](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/2-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/2-csv-cl.png)

Maintenant, regardons la configuration pour l'importation, dans la zone supérieure, nous pouvons laisser les paramètres tels qu'ils sont :

[![configuration](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/3-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/3-csv-cl.png)

Maintenant, cliquez sur Préparer la correspondance, après quoi nous pouvons ajuster les paramètres comme suit:

[![préparer-la-correspondance](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/4-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/4-csv-cl.png)

Maintenant, nous sommes prêts et pouvons commencer l'importation, dans la vue de l'emplacement l'image suivante devrait apparaître ensuite:

[![démarrer-l'importation](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/5-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/5-csv-cl.png)

La configuration du type d'objet nouvellement créé Étage:

[![configuration](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/6-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/6-csv-cl.png)
