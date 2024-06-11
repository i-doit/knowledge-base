# Mise à niveau vers MySQL 5.6 ou MariaDB 10.0

À partir de la version 1.7 d'i-doit, les [exigences système](../installation/system-requirements.md) pour la base de données changent. Alors que la version 1.6 nécessitait au moins MySQL 5.5 ou MariaDB 5.5, la version 1.7 nécessite MySQL 5.6 ou MariaDB 10.0. Cela peut également entraîner des changements dans les [systèmes d'exploitation](../installation/manual-installation/index.md) pris en charge par synetics. Cet article décrit les détails les plus importants pour garantir le bon fonctionnement d'i-doit.

Pour déterminer quelle version est utilisée, la commande suivante peut être exécutée dans la ligne de commande (cela fonctionne à la fois avec MySQL et MariaDB) :

    mysql --version

Pour chaque système d'exploitation, il peut y avoir plusieurs chemins de mise à niveau. Nous recommandons l'utilisation de ceux qui, de notre point de vue, ont le moins d'impact sur le système :

| **Système d'exploitation** | **Version** | **Ancienne base de données** | **Nouvelle base de données** |
| --- | --- | --- | --- |
| Debian GNU/Linux | 8   | MySQL 5.5, MariaDB 10.0 | MariaDB 10.0 |
|     | 7.8 | MySQL 5.5 | MariaDB 10.0 |
| Ubuntu | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6 |
|     | 12.04 LTS | MySQL 5.5 | MariaDB 10.0 |
| Red Hat Enterprise Linux (RHEL) | 7.1 | MariaDB 5.5 | MariaDB 10.0 |
|     | 6.7 | MySQL 5.1 | MariaDB 10.0 |
| SUSE Linux Enterprise Server (SLES) | 12  | MariaDB 10.0 | MariaDB 10.0 |
| Windows Server | 2008/2012 | en fonction de la version de XAMPP | MariaDB 10.0 | 

{/*examples*/}

!!! attention "Avant d'apporter des modifications au système, il est absolument vital de [sécuriser les données](../maintenance-and-operation/backup-and-recovery/index.md). Comme la durée du processus de mise à niveau varie en fonction du système d'exploitation, tous les utilisateurs d'_i-doit_ doivent être informés à l'avance."

Debian GNU/Linux 8
------------------

La version 8 de Debian GNU/Linux contient MySQL 5.5 et MariaDB 10.0 dans les paquets standard. Si MySQL est installé, il suffit d'installer le paquet MariaDB. Ce faisant, MySQL est remplacé par MariaDB :

    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Debian GNU/Linux 7.8
--------------------

La version 7.8 de Debian GNU/Linux contient MySQL 5.5 dans les paquets standard, mais pas MariaDB. Pour utiliser MariaDB, le [dépôt officiel de MariaDB peut être téléchargé et installé](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Debian&distro_release=wheezy--wheezy&version=10.0). Attention : les dépôts tiers peuvent nuire au système. MySQL est remplacé par MariaDB lors de l'installation de ce dernier:

```plaintext
    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/debian](http://mirror.23media.de/mariadb/repo/10.0/debian) wheezy main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Ubuntu 14.04 LTS
----------------

La version 14.04 LTS d'[Ubuntu](../installation/manual-installation/ubuntu-linux/index.md) contient MySQL 5.5, 5.6 et MariaDB 5.5 dans les paquets standard. Pour cette raison, nous recommandons d'utiliser MySQL 5.6. Si MySQL 5.5 ou MariaDB 5.5 sont déjà installés, ils seront remplacés par MySQL 5.6 :

    sudo apt-get update
    sudo apt-get install mysql-server-5.6 php5-mysqlnd mysql-client-core-5.6 mysql-client-5.6

Ubuntu 12.04 LTS
----------------

La version 12.04 LTS d'[Ubuntu](../installation/manual-installation/ubuntu-linux/index.md) contient MySQL 5.5 dans les paquets standard mais pas MariaDB. Étant donné que cette version du système d'exploitation contient des paquets très anciens pour MySQL, PHP et Apache Webserver, nous ne recommandons pas son utilisation et conseillons plutôt de passer à la version 14.04 LTS. Si cela n'est pas possible, un passage à MariaDB 10.0 peut être effectué en [téléchargeant et installant le dépôt officiel de MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0). Attention : les dépôts tiers peuvent compromettre le système. MySQL est remplacé par l'installation de MariaDB :
```

```bash
sudo apt-get update
sudo apt-get install python-software-properties
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/ubuntu](http://mirror.23media.de/mariadb/repo/10.0/ubuntu) precise main'
sudo apt-get update
sudo apt-get install mariadb-server php5-mysqlnd
```

Red Hat Enterprise Linux 7.1
----------------------------

La version 7.1 de [Red Hat Enterprise Linux (RHEL)](../installation/manual-installation/red-hat-enterprise-linux/index.md) contient MariaDB 5.5 dans les paquets standard mais pas MySQL. Pour passer à MariaDB 10.0, seulement quelques étapes sont nécessaires [selon une entrée de blog de MariaDB](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7). De cette manière, MariaDB 5.5 est remplacé par 10.0. Attention : les dépôts tiers peuvent compromettre le système.

!!! attention "Ce chemin de mise à niveau concerne la variante 64 bits du système d'exploitation."

Tout d'abord, la version actuelle est désinstallée :

```markdown
    sudo yum remove mariadb-server mariadb-libs
```

Après cela, le fichier /etc/yum.repos.d/MariaDB.repo doit être créé et édité :

```markdown
    # Liste de dépôt RedHat MariaDB 10.0
    # [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel7-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1
```

Enfin, les packages sont installés, le serveur MariaDB est démarré et les bases de données sont mises à jour :

```markdown
    sudo yum install MariaDB-server MariaDB-client
    sudo /etc/init.d/mysql start
    sudo mysql_upgrade -uroot -p
```

Lors de la désinstallation des packages mentionnés précédemment, l'extension PHP associée peut également être désinstallée. Pour l'installer à nouveau, nous avons besoin des commandes suivantes :

```markdown
    sudo yum install php-mysqlnd.x86_64
    sudo service httpd restart
```

Red Hat Enterprise Linux 6.7
----------------------------

La version 6.7 de [Red Hat Enterprise Linux (RHEL)](../installation/manual-installation/red-hat-enterprise-linux/index.md) contient MySQL 5.1 dans les packages standard mais pas MariaDB. Étant donné que cette version du système d'exploitation contient des packages très anciens pour MySQL, PHP et le serveur web Apache, nous conseillons généralement de ne pas l'utiliser et recommandons plutôt de passer à la version 7.1. Si cela n'est pas possible, un passage à MariaDB 10.0 peut être effectué en [téléchargeant et en installant le dépôt officiel pour MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0), comme décrit dans un [article de blog MariaDB](https://mariadb.com/kb/en/mariadb/yum/). Attention : les dépôts tiers peuvent compromettre le système.
```

!!! attention "Ce chemin de mise à niveau fait référence à la variante 64 bits du système d'exploitation."

Tout d'abord, la version actuelle est désinstallée :

```bash
sudo yum remove mysql-server mysql-libs
```

Après cela, le fichier /etc/yum.repos.d/MariaDB.repo doit être créé et édité :

```bash
# Liste de dépôt RedHat MariaDB 10.0
# [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.0/rhel6-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

Enfin, le package est installé :

```bash
sudo yum install MariaDB-server MariaDB-client
```

SUSE Linux Enterprise Server 12
-------------------------------

La version 12 de [SUSE Linux Enterprise Server (SLES)](../installation/manual-installation/suse-linux-enterprise-server.md) contient déjà MariaDB 10.0 dans les paquets standard mais pas MySQL. Par conséquent, aucune mise à niveau n'est nécessaire.

Windows Server 2008/2012
------------------------

XAMPP est recommandé si [Windows Server 2008/2012](../installation/manual-installation/microsoft-windows-server/index.md) est utilisé. La distribution XAMPP mise à disposition par [Apache Friends](https://www.apachefriends.org/) inclut le serveur Web Apache, PHP et MariaDB. Il est important de toujours utiliser la dernière version disponible.

!!! attention "Étant donné qu'il n'existe ni documentation officielle ni mécanisme de mise à jour pour XAMPP, le chemin de mise à niveau peut être compliqué et sujet à des erreurs. Par conséquent, une **sauvegarde [actuelle](../maintenance-and-operation/backup-and-recovery/index.md) et des tests approfondis** après la mise à niveau sont obligatoires."

Les étapes suivantes sont nécessaires si une version de XAMPP sans MariaDB 10.0 est appliquée :

1. Copiez le dossier XAMPP, dans la plupart des cas dans C:\xampp\
2. Téléchargez la dernière version de XAMPP depuis le [site officiel](https://www.apachefriends.org/index.html)
3. Désinstallez la version actuelle de XAMPP
4. Supprimez le dossier XAMPP
5. Installez la nouvelle version de XAMPP dans le même dossier
6. Restaurez les dossiers htdocs et mysql\data à partir de la copie du dossier XAMPP, ne remplacez pas les fichiers existants
7. Ajustez les fichiers de configuration pour qu'ils répondent aux [paramètres système](../installation/manual-installation/system-settings.md) requis
8. Démarrez le serveur Web Apache et MariaDB5
9. Effectuez des tests

Dépannage
---------

!!! attention "Incompatibilité mineure entre les en-têtes et la version mineure de la bibliothèque client"

Il est possible que i-doit ne puisse pas établir une connexion avec le serveur MySQL/MariaDB après la mise à niveau. Le message d'erreur suivant s'affiche :

```php
mysqli_connect(): Headers and client library minor version mismatch. Headers:50544 Library:100024 (/var/www/html/i-doit/src/classes/components/isys_component_database_mysqli.class.php:16)
```

La raison de cette erreur réside dans les processus Apache encore en cours d'exécution. Les liaisons PHP pour MySQL/MariaDB (mysqli) devraient accéder à la nouvelle interface de MySQL/MariaDB, mais l'ancienne interface est toujours en mémoire. En redémarrant Apache, vous pouvez résoudre ce problème. Exemple pour Debian/Ubuntu :

```bash
sudo service apache2 restart
```

{/*examples*/}
