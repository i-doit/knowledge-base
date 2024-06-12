# Exemple d'importation CSV - Lieux de travail

Dans cet exemple, nous nous appuyons sur l'[importation CSV des emplacements](example-csv-import-creating-locations.md) et souhaitons importer des lieux de travail.  
Ceux-ci doivent être attribués à une salle en tant qu'emplacement et nous voulons également attribuer des clients, des moniteurs et des imprimantes aux lieux de travail.

!!! info "Cet article a été vérifié pour la version 1.17.1 d'i-doit"

Pour l'importation, nous avons besoin des informations suivantes :

-  Titre de l'objet → le nom du poste de travail, du client, de l'écran ou de l'imprimante.
-  Emplacement → sous quel emplacement l'objet doit être situé
-  Type d'objet → quel type d'objet il doit être
-  Attribution des lieux de travail → à quel poste de travail le composant doit être attribué

Fichier CSV d'exemple pour cette importation :

[Télécharger le fichier Import-Workplaces.csv :material-file-download:](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/Import-Workplaces.csv){ .md-button .md-button--primary }

??? example "Import Workplaces.csv"

    ```text
    Object title;Location;Object type;Workplace assignment
    AP0001;Room 1.001;C__OBJTYPE__WORKSTATION;;
    AP0002;Room 1.002;C__OBJTYPE__WORKSTATION;;
    AP0003;Room 1.003;C__OBJTYPE__WORKSTATION;;
    AP0004;Room 1.004;C__OBJTYPE__WORKSTATION;;
    AP0005;Room 1.005;C__OBJTYPE__WORKSTATION;;
    AP0006;Room 1.006;C__OBJTYPE__WORKSTATION;;
    AP0007;Room 1.007;C__OBJTYPE__WORKSTATION;;
    AP0008;Room 2.001;C__OBJTYPE__WORKSTATION;;
    AP0009;Room 2.002;C__OBJTYPE__WORKSTATION;;
    AP0010;Room 2.003;C__OBJTYPE__WORKSTATION;;
    AP0011;Room 2.004;C__OBJTYPE__WORKSTATION;;
    AP0012;Room 2.005;C__OBJTYPE__WORKSTATION;;
    AP0013;Room 2.006;C__OBJTYPE__WORKSTATION;;
    AP0014;Room 2.007;C__OBJTYPE__WORKSTATION;;
    AP0015;Room 3.003;C__OBJTYPE__WORKSTATION;;
    AP0016;Room 3.004;C__OBJTYPE__WORKSTATION;;
    AP0017;Room 3.005;C__OBJTYPE__WORKSTATION;;
    AP0018;Room 3.006;C__OBJTYPE__WORKSTATION;;
    AP0019;Room 3.007;C__OBJTYPE__WORKSTATION;;
    AP0020;Room 3.008;C__OBJTYPE__WORKSTATION;;
    WS001;;C__OBJTYPE__CLIENT;AP0001
    WS002;;C__OBJTYPE__CLIENT;AP0002
    WS003;;C__OBJTYPE__CLIENT;AP0003
    WS004;;C__OBJTYPE__CLIENT;AP0004
    WS005;;C__OBJTYPE__CLIENT;AP0005
    WS006;;C__OBJTYPE__CLIENT;AP0006
    WS007;;C__OBJTYPE__CLIENT;AP0007
    WS008;;C__OBJTYPE__CLIENT;AP0008
    WS009;;C__OBJTYPE__CLIENT;AP0009
    WS010;;C__OBJTYPE__CLIENT;AP0010
    WS011;;C__OBJTYPE__CLIENT;AP0011
    WS012;;C__OBJTYPE__CLIENT;AP0012
    WS013;;C__OBJTYPE__CLIENT;AP0013
    WS014;;C__OBJTYPE__CLIENT;AP0014
    WS015;;C__OBJTYPE__CLIENT;AP0015
    WS016;;C__OBJTYPE__CLIENT;AP0016
    WS017;;C__OBJTYPE__CLIENT;AP0017
    WS018;;C__OBJTYPE__CLIENT;AP0018
    WS019;;C__OBJTYPE__CLIENT;AP0019
    WS020;;C__OBJTYPE__CLIENT;AP0020
    TFT001;;C__OBJTYPE__MONITOR;AP0001
    TFT002;;C__OBJTYPE__MONITOR;AP0002
    TFT003;;C__OBJTYPE__MONITOR;AP0003
    TFT004;;C__OBJTYPE__MONITOR;AP0004
    TFT005;;C__OBJTYPE__MONITOR;AP0005
    TFT006;;C__OBJTYPE__MONITOR;AP0006
    TFT007;;C__OBJTYPE__MONITOR;AP0007
    TFT008;;C__OBJTYPE__MONITOR;AP0008
    TFT009;;C__OBJTYPE__MONITOR;AP0009
    TFT010;;C__OBJTYPE__MONITOR;AP0010
    TFT011;;C__OBJTYPE__MONITOR;AP0011
    TFT012;;C__OBJTYPE__MONITOR;AP0012
    TFT013;;C__OBJTYPE__MONITOR;AP0013
    TFT014;;C__OBJTYPE__MONITOR;AP0014
    TFT015;;C__OBJTYPE__MONITOR;AP0015
    TFT016;;C__OBJTYPE__MONITOR;AP0016
    TFT017;;C__OBJTYPE__MONITOR;AP0017
    TFT018;;C__OBJTYPE__MONITOR;AP0018
    TFT019;;C__OBJTYPE__MONITOR;AP0019
    TFT020;;C__OBJTYPE__MONITOR;AP0020
    PRNT001;;C__OBJTYPE__PRINTER;AP0001
    PRNT002;;C__OBJTYPE__PRINTER;AP0002
    PRNT003;;C__OBJTYPE__PRINTER;AP0003
    PRNT004;;C__OBJTYPE__PRINTER;AP0004
    PRNT005;;C__OBJTYPE__PRINTER;AP0005
    PRNT006;;C__OBJTYPE__PRINTER;AP0006
    PRNT007;;C__OBJTYPE__PRINTER;AP0007
    PRNT008;;C__OBJTYPE__PRINTER;AP0008
    PRNT009;;C__OBJTYPE__PRINTER;AP0009
    PRNT010;;C__OBJTYPE__PRINTER;AP0010
    PRNT011;;C__OBJTYPE__PRINTER;AP0011
    PRNT012;;C__OBJTYPE__PRINTER;AP0012
    PRNT013;;C__OBJTYPE__PRINTER;AP0013
    PRNT014;;C__OBJTYPE__PRINTER;AP0014
    PRNT015;;C__OBJTYPE__PRINTER;AP0015
    PRNT016;;C__OBJTYPE__PRINTER;AP0016
    PRNT017;;C__OBJTYPE__PRINTER;AP0017
    PRNT018;;C__OBJTYPE__PRINTER;AP0018
    PRNT019;;C__OBJTYPE__PRINTER;AP0019
    PRNT020;;C__OBJTYPE__PRINTER;AP0020
    ```

Il y a aussi des dépendances dans cet exemple. Les emplacements existent déjà, ils ont été créés via l'exemple de création d'emplacement.  
Ensuite viennent les postes de travail eux-mêmes, nous devons les créer en premier lieu, afin de pouvoir ensuite attribuer directement les composants individuels tels que les clients, le moniteur et l'imprimante à ceux-ci.  
Par conséquent, les postes de travail individuels sont également en première place dans le fichier CSV.

Pour l'importation, revenons à la zone d'importation CSV. Les paramètres dans la zone supérieure restent aux réglages par défaut et nous cliquons sur Préparer la Mise en correspondance :

[![préparer-la-mise-en-correspondance](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/1-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/1-csv-i-w.png)

Maintenant, nous pouvons configurer l'importation dans la zone inférieure comme suit, puis démarrer le processus d'importation :

[![processus-d'importation](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/2-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/2-csv-i-w.png)

Si nous avons tout fait correctement, les postes de travail individuels apparaîtront maintenant, seront assignés à un emplacement et sous chaque poste de travail, nous trouverons un client, un moniteur et une imprimante assignés.

[![postes-de-travail-individuels](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/3-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/3-csv-i-w.png)


