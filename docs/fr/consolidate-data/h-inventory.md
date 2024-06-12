# H-Inventory

h-inventory est un logiciel open source pour l'inventaire automatique des composants matériels et logiciels ainsi que des réseaux entiers. Le logiciel est disponible sur SourceForge à [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) pour divers systèmes d'exploitation.

i-doit est capable d'importer des données de l'outil d'inventaire h-inventory. Les données exportées au format XML sont préparées lors de l'importation de manière à ce que les informations nécessaires pour un CMDB puissent être reprises autant que possible. De cette manière, de nombreuses informations essentielles peuvent être collectées automatiquement comme base pour un CMDB ou une documentation informatique, afin d'être enrichies manuellement avec d'autres informations dans une étape ultérieure.

**Les données suivantes peuvent être transférées depuis h-inventory :**

**[![h-inventory-transfer](../assets/images/en/consolidate-data/h-inventory/1-hi.png)](../assets/images/en/consolidate-data/h-inventory/1-hi.png)**

Avant une importation, i-doit doit être configuré en conséquence.

Configuration
-------------

Pour une importation manuelle des données, la configuration se trouve sous Administration → Interfaces / Données externes → Importation → h-Inventory → Configuration. Là, seul le paramètre Profil de Correspondance d'Objets est utilisé pour spécifier [comment les objets déjà documentés doivent être identifiés](object-identification-during-imports.md). Les objets identifiés sont mis à jour lors de l'importation des données.

Inventaire d'un client Microsoft Windows via H-Inventory
-------------------------------------------------------

Téléchargez le package H-Inventory depuis i-doit → Outils → Importation → Scripts

[![h-inventory-transfer](../assets/images/en/consolidate-data/h-inventory/2-hi.png)](../assets/images/en/consolidate-data/h-inventory/2-hi.png)

Décompressez l'archive.

Saisissez l'adresse IP des ordinateurs à scanner dans computer.txt. Exécutez scan.bat.

Après l'exécution réussie du script, l'export se trouve dans le fichier "computername-xx.xml" dans le même répertoire.

Importation graphique d'un export H-Inventory
-----------------------------------------

i-doit -> Outils -> Importation -> Importer


Téléchargez le fichier XML

Sélectionnez le fichier dans la liste des exports téléchargés

Sélectionnez le type d'objet approprié et la méthode d'importation - dans ce cas, client et inventaire (pour H-Inventory)

Importez avec "Suivant".

Le client importé est maintenant disponible

  

Import d'un export H-Inventory via la console
--------------------------------------------

Outre la possibilité de télécharger le fichier XML via l'interface i-doit et d'importer les informations, ce processus peut également être automatisé. La [Console](../automation-and-integration/cli/console/index.md) i-doit est utilisée à cette fin. Avant que l'importation puisse être exécutée, il faut s'assurer que le fichier XML est disponible pour le système. Pour ce faire, le fichier XML doit être copié dans le répertoire imports d'i-doit ou y être directement stocké. Ensuite, l'importation peut être lancée via la console. Une description des paramètres possibles et un exemple d'appel se trouvent dans l'article [correspondant](../automation-and-integration/cli/console/options-and-parameters-cli.md) pour la commande d'importation-hinventory.
