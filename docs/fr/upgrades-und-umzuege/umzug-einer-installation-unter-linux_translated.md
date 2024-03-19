<!-- TRANSLATED by md-translate -->
# Umzug einer Installation unter GNU/Linux

# Déménager une installation sous GNU/Linux

In diesem Artikel beschreiben wir die generelle Vorgehensweise, um eine Installation von i-doit von einem GNU/Linux zu einem anderen umzuziehen. Der Umzug umfasst sowohl die Datenbanken, als auch die Dateien und Verzeichnisse.

Dans cet article, nous décrivons la procédure générale pour déplacer une installation d'i-doit d'un GNU/Linux à un autre. Le déménagement concerne aussi bien les bases de données que les fichiers et les répertoires.

## Vorbereitungen und Annahmen

## Préparations et hypothèses

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

! !! warning "Les deux systèmes doivent être sur la même version d'i-doit !"

Es sind ein paar Dinge zu beachten, um einen möglichst reibungslosen Umzug zu gewährleisten:

Il y a quelques éléments à prendre en compte pour que le déménagement se déroule le mieux possible :

1. i-doit und optional installierte [i-doit pro Add-ons](../i-doit-pro-add-ons/index.md) sollten auf einem [aktuellen Stand](../wartung-und-betrieb/update-einspielen.md) sein.
2. Wir verändern das alte System nicht, um im Fall der Fälle schnell wieder in den Ursprungszustand zurückkehren zu können.
3. Die gezeigten Befehle passen zu einem aktuellen [Debian GNU/Linux](../installation/manuelle-installation/debian.md) und sollten an die entsprechende Umgebung angepasst werden. Blindes Ausführen der Befehle sollten vermieden werden.

1. i-doit et les [add-ons i-doit pro](../i-doit-pro-add-ons/index.md) installés en option doivent être à une [version actuelle](../maintenance-et-exploitation/installer-une-mise-à-jour.md).
2. nous ne modifions pas l'ancien système afin de pouvoir revenir rapidement à l'état initial en cas de besoin.
3. les commandes présentées correspondent à une [Debian GNU/Linux](../installation/manuelle-installation/debian.md) actuelle et devraient être adaptées à l'environnement correspondant. Il convient d'éviter d'exécuter les commandes à l'aveugle.

## Neues System vorbereiten

## Préparer un nouveau système

Zunächst gilt es, das neue System so weit wie möglich vorzubereiten:

Il s'agit tout d'abord de préparer le nouveau système autant que possible :

1. Das neue Betriebssystem entspricht den [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und ist auf einem aktuellen Stand.
2. Auf dem neuen Betriebssystem sind die [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) konfiguriert worden.
3. Gängige [Sicherheitsmaßnahmen](../wartung-und-betrieb/sicherheit-und-schutz.md) wurden durchgeführt.

1. le nouveau système d'exploitation est conforme à la [configuration système requise](../installation/configuration système requise.md) et est à jour.
2. les [paramètres système](../installation/installation manuelle/paramètres système.md) ont été configurés sur le nouveau système d'exploitation.
3. les [mesures de sécurité](../maintenance-et-exploitation/sécurité-et-protection.md) courantes ont été appliquées.

## Altes System außer Betrieb nehmen

## Mettre l'ancien système hors service

Das alte System sollte bereits während des Umzugs nicht mehr produktiv verwendet werden:

L'ancien système ne devrait déjà plus être utilisé de manière productive pendant le déménagement :

1. Downtimes sind nervig - vor allem unerwartete. Die Benutzer von i-doit sollten vorab informiert worden sein, dass die Installation umzieht und in welchem Zeitraum sie nicht erreichbar ist.
2. [Automatisierte Zugriffe von Drittsystemen](../automatisierung-und-integration/index.md) sollten deaktiviert werden.
3. [Cronjobs](../automatisierung-und-integration/cli/index.md) sollten ebenfalls deaktiviert werden. Hierzu reicht es meist, die Befehlszeilen auszukommentieren.
4. Nach Sicherstellung der obigen Punkte sollte der Apache Webserver gestoppt werden:
    ```
    sudo systemctl stop apache2.service
    ```

1. les downtimes sont agaçants - surtout ceux qui sont inattendus. Les utilisateurs d'i-doit devraient avoir été informés à l'avance du déménagement de l'installation et de la période pendant laquelle elle ne sera pas accessible.
2) [Les accès automatisés de systèmes tiers](../automatisation-et-intégration/index.md) devraient être désactivés.
3. les [tâches cron](../automatisation-et-intégration/cli/index.md) doivent également être désactivées. Pour cela, il suffit généralement de commenter les lignes de commande.
4. après avoir vérifié les points ci-dessus, le serveur web Apache doit être arrêté :
    ```
    sudo systemctl stop apache2.service
    ```

## Dateien und Verzeichnisse umziehen

## Déplacer des fichiers et des répertoires

1. Wir kopieren das gesamte Installationsverzeichnis von i-doit vom alten auf das neue System. Das Verzeichnis befindet sich in vielen Fällen unter /var/www/html/. Beispiel mit SSH, wobei i-doit im Verzeichnis /var/www/html/i-doit/ zu finden ist:
    ```
    scp -r user@oldsystem:/var/www/html/i-doit/ /tmp/
    scp -r /tmp/i-doit/ user@newsystem:/tmp/
    ssh user@newsystem
    sudo -u www-data cp -r /tmp/i-doit/ /var/www/html/
    ```
2. Nach dem Kopieren sollte sichergestellt werden, dass die Dateisystemrechte richtig gesetzt sind. Der Apache Webserver benötigt Lese- und Schreibrechte auf das vollständige Installationsverzeichnis. Weitere Hinweise gibt der Artikel "[Setup](../installation/manuelle-installation/setup.md)". Beispiel:
    ```
    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```
3. Interne Caches speichert i-doit unterhalb des temp/-Verzeichnisses. Die Inhalte sollten komplett entfernt werden. Bei der ersten Verwendung von i-doit werden die Caches automatisch erstellt:
    ```
    sudo rm -r temp/*
    ```
4. Es sollte kontrolliert werden, ob die Datei .htaccess kopiert wurde:
    ```
    ls -lha /var/www/html/i-doit/.htaccess
    ```

1. nous copions l'ensemble du répertoire d'installation d'i-doit de l'ancien système vers le nouveau. Dans de nombreux cas, le répertoire se trouve sous /var/www/html/. Exemple avec SSH, où i-doit se trouve dans le répertoire /var/www/html/i-doit/ :
    ```
    scp -r user@oldsystem:/var/www/html/i-doit/ /tmp/
    scp -r /tmp/i-doit/ user@newsystem:/tmp/
    ssh utilisateur@newsystem
    sudo -u www-data cp -r /tmp/i-doit/ /var/www/html/
    ```
2. après la copie, il faut s'assurer que les droits du système de fichiers sont correctement définis. Le serveur web Apache a besoin de droits de lecture et d'écriture sur le répertoire d'installation complet. L'article "[Setup](../installation/manuelle-installation/setup.md)" donne de plus amples informations. Exemple : :
    ```
    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -nom \* -exec chmod 775 {} \ ;
    sudo find . -type f -exec chmod 664 {} \ ;
    ```
3. les caches internes sont stockés par i-doit sous le répertoire temp/. Il convient d'en supprimer complètement le contenu. Lors de la première utilisation d'i-doit, les caches sont créés automatiquement :
    ```
    sudo rm -r temp/*
    ```
4. il convient de vérifier si le fichier .htaccess a été copié :
    ```
    ls -lha /var/www/html/i-doit/.htaccess
    ```

## Datenbanken umziehen

## Déplacer les bases de données

1. i-doit benötigt mindestens 2 [Datenbanken](../software-entwicklung/datenbank-modell/index.md). Von jeder einzelnen sollte auf dem alten System ein Dump erstellt werden:
    ```
    mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
    mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql
    ```###### Wenn beim einspielen der Datenbank diese Fehlermeldung erscheint "Can't create table \idoit_data.\table_name\ (errno: 140 "Wrong create options")". Ist die Lösung dazu [HIER](../administration/troubleshooting/cant-create-table.md) zu finden.
2. Diese Dumps kopieren wir auf das neue System:
    ```
    scp user@oldsystem:/tmp/idoit_system.sql /tmp/
    scp user@oldsystem:/tmp/idoit_data.sql /tmp/
    scp /tmp/idoit_system.sql user@newsystem:/tmp/
    scp /tmp/idoit_data.sql user@newsystem:/tmp/
    ```
3. Diese Dumps spielen wir im neuen System ein:
    ```
    mysql -uroot -p
    CREATE DATABASE idoit_system;
    CREATE DATABASE idoit_data;
    exit
    mysql -uroot -p idoit_system < /tmp/idoit_system.sql
    mysql -uroot -p idoit_data < /tmp/idoit_data.sql
    ```
4. Beim ursprünglichen [Setup](../installation/manuelle-installation/setup.md) von i-doit wurde ein MySQL-Benutzer erstellt (Standard: idoit). Dieser muss mit denselben Berechtigungen und demselben Passwort auf dem neuen System vorhanden sein. Dazu melden wir uns mit dem Superuser von MySQL an:
    ```
    mysql -uroot -p
    ```Nun führen wir die nötigen SQL-Befehle aus:```
    GRANT ALL PRIVILEGES ON idoit_system.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
    GRANT ALL PRIVILEGES ON idoit_data.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
    exit;
    ```Für einen Test melden wir uns mit diesem Benutzer an:```
    mysql -uidoit -p
    ```Wenn wir schon einmal dabei sind, können wir die Credentials für die Mandanten-Datenbanken überprüfen:```
    SELECT * FROM idoit_system.isys_mandator;
    exit;
    ```Das obige Passwort für den Benutzer idoit sollte deckungsgleich mit den Angaben in der Datei /var/www/html/i-doit/src/config.inc.php sein.

1. i-doit nécessite au moins 2 [bases de données](../software-entwicklung/datenbank-modell/index.md). Un dump de chacune d'entre elles devrait être créé sur l'ancien système :
    ```
    mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
    mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql
    ```###### Si lors de l'importation de la base de données ce message d'erreur apparaît "Can't create table \idoit_data.\table_name\ (errno : 140 "Wrong create options")". La solution à ce problème se trouve [ICI](../administration/troubleshooting/cant-create-table.md).
2) Nous copions ces dumps sur le nouveau système :
    ```
    scp user@oldsystem:/tmp/idoit_system.sql /tmp/
    scp user@oldsystem:/tmp/idoit_data.sql /tmp/
    scp /tmp/idoit_system.sql user@newsystem:/tmp/
    scp /tmp/idoit_data.sql user@newsystem:/tmp/
    ```
3. on joue ces dumps dans le nouveau système :
    ```
    mysql -uroot -p
    CREATE DATABASE idoit_system ;
    CREATE DATABASE idoit_data ;
    exit
    mysql -uroot -p idoit_system < /tmp/idoit_system.sql
    mysql -uroot -p idoit_data < /tmp/idoit_data.sql
    ```
4. lors du [setup](../installation/manuelle-installation/setup.md) initial d'i-doit, un utilisateur MySQL a été créé (par défaut : idoit). Celui-ci doit être présent sur le nouveau système avec les mêmes autorisations et le même mot de passe. Pour cela, nous nous connectons avec le super-utilisateur de MySQL :
    ```
    mysql -uroot -p
    ```Nous exécutons maintenant les commandes SQL nécessaires:```
    GRANT ALL PRIVILEGES ON idoit_system.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd' ;
    GRANT ALL PRIVILEGES ON idoit_data.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd' ;
    exit ;
    ```Pour un test, nous nous connectons avec cet utilisateur:```
    mysql -uidoit -p
    ```Pendant que nous y sommes, nous pouvons vérifier les credentials pour les bases de données des clients:```
    SELECT * FROM idoit_system.isys_mandator ;
    exit ;
    ```Le mot de passe ci-dessus pour l'utilisateur idoit devrait être identique à celui indiqué dans le fichier /var/www/html/i-doit/src/config.inc.php.

## Nachbereitung

## Suivi

1. DNS-Einträge, IP-Adressen, Hostnames etc. sollten im Nachgang angepasst werden, damit i-doit wie gewohnt erreichbar ist.
2. Schnittstellen zu Drittsystemen können nun wieder aktiviert werden. Die Funktionen sollten geprüft werden.
3. Cronjobs sollten wieder aktiviert und getestet werden.
4. [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) sollten eingerichtet und getestet werden.
5. Wenn auch die WebGUI wie gewohnt reagiert und alle Daten in i-doit augenscheinlich vorhanden sind, ist der Umzug erfolgreich verlaufen.

1. les enregistrements DNS, les adresses IP, les noms d'hôtes, etc. doivent être adaptés par la suite pour qu'i-doit soit accessible comme d'habitude.
2. les interfaces avec des systèmes tiers peuvent désormais être réactivées. Les fonctions devraient être vérifiées.
3. les tâches cron devraient être réactivées et testées.
4) Les [sauvegardes](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md) doivent être activées et testées.
5. si la WebGUI réagit comme d'habitude et que toutes les données sont visiblement présentes dans i-doit, le déménagement s'est bien déroulé.
