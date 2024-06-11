# "Lien perdu vers la base de données"

Problème
--------

Le message d'erreur **Lien perdu vers la base de données** apparaît dans le formulaire de connexion après avoir saisi les informations d'identification. La connexion échoue.

Solution
--------

i-doit n'est pas capable d'accéder à la base de données du locataire souhaité. Cette erreur peut survenir rapidement une fois que l'installation de i-doit a été déplacée vers un autre système et que les utilisateurs MySQL/MariaDB n'existent pas sur le nouveau système.

i-doit enregistre tous les locataires configurés dans la base de données système (idoit_system pour les [installations par défaut](../../installation/manual-installation/setup.md)) dans la table isys_mandator. Chaque locataire reçoit une base de données distincte des autres (idoit_data pour le premier locataire pour les installations par défaut). Des informations d'identification dédiées peuvent être attribuées pour accéder à cette base de données. Elles se trouvent dans les colonnes isys_mandator__db_user et isys_mandator__db_pass. Il convient de vérifier leur validité. Il ne faut pas non plus négliger de vérifier les autres détails.

Cela peut être testé via la ligne de commande :

    mysql -hlocalhost -uidoit -p

Ici, les informations d'identification pour la base de données du locataire souhaité doivent être saisies. Après l'exécution de la commande, mysql demandera le mot de passe. Si la connexion échoue, les informations d'identification ne sont pas valides. Si la connexion réussit, une vérification supplémentaire doit être effectuée pour voir si l'utilisateur dispose des autorisations de lecture pour la base de données du locataire :

    mysql> USE idoit_data;
    mysql> SHOW TABLES;

Encore une fois : Si des messages d'erreur s'affichent, quelque chose ne va pas.

Un examen plus approfondi de la table des utilisateurs de MySQL/MariaDB clarifiera/résoudra le problème. Pour cela, vous devez être connecté en tant qu'administrateur de base de données (généralement root) :

    mysql -hlocalhost -uroot -p
    mysql> USE mysql;
    mysql> SELECT * FROM user;

L'utilisateur peut être ajouté avec cette commande s'il est manquant :

    mysql> GRANT ALL PRIVILEGES ON idoit_data TO 'idoit'@'localhost' IDENTIFIED BY 'idoit';

Dans cet exemple, une attention particulière doit être accordée au remplacement du nom de la base de données du locataire, de l'utilisateur et de son mot de passe par les valeurs correctes/sécurisées.

Si vous hésitez à utiliser la ligne de commande, des outils d'administration pour MySQL/MariaDB comme par exemple [phpMyAdmin](https://fr.wikipedia.org/wiki/PhpMyAdmin) peuvent être utilisés en alternative.
