# MySQL/MariaDB Ne Démarre Pas Après Avoir Modifié innodb_log_file_size

Problème
--------

Il est [recommandé](../../installation/manual-installation/system-settings.md) d'augmenter la valeur de innodb_log_file_size (en fonction de la RAM) pour une meilleure performance de MySQL/MariaDB. Après ce changement, le service est redémarré mais seul un message d'erreur apparaît :

    110216  9:48:41  InnoDB: Initialisation du pool de mémoires tampons, taille = 128.0M
    110216  9:48:41  InnoDB: Initialisation du pool de mémoires tampons terminée
    InnoDB: Erreur : le fichier journal ./ib_logfile0 a une taille différente de 0 5242880 octets
    InnoDB: de celle spécifiée dans le fichier .cnf 0 33554432 octets !
    110216  9:48:41 [ERREUR] La fonction d'initialisation du plugin 'InnoDB' a retourné une erreur.
    110216  9:48:41 [ERREUR] L'enregistrement du plugin 'InnoDB' en tant que MOTEUR DE STOCKAGE a échoué.

Solution
--------

Arrêtez le service de manière propre et supprimez tous les journaux existants lors du changement de cette option, comme décrit de manière plus détaillée dans une [réponse sur StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size) :

    mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
    sudo service mysql stop
    sudo mv /var/lib/mysql/ib_logfile[01] /tmp
    sudo service mysql start

MySQL/MariaDB recrée automatiquement les journaux. Cela peut prendre du temps dans de plus grandes bases de données. La nouvelle valeur pour innodb_log_file_size est maintenant active.
