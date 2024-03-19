<!-- TRANSLATED by md-translate -->
# Umzug von Windows zu Linux

# Déménager de Windows à Linux

Es mag gute Gründe geben, i-doit unter [Windows](../installation/manuelle-installation/microsoft-windows-server/index.md) zu betreiben. Aus diversen Gründen empfehlen wir allerdings den Betrieb unter [Linux](../installation/manuelle-installation/debian.md). Doch wie bekommt man die gut befüllte [IT-Dokumentation](../glossar.md#Glossar-IT-Dokumentation) im laufenden Betrieb möglichst reibungslos von einem System zum anderen?

Il peut y avoir de bonnes raisons de faire fonctionner i-doit sous [Windows](../installation/manuelle-installation/microsoft-windows-server/index.md). Pour diverses raisons, nous recommandons toutefois de l'utiliser sous [Linux](../installation/manuelle-installation/debian.md). Mais comment faire pour que la [documentation informatique](../glossar.md#Glossaire-Documentation informatique) bien remplie passe d'un système à l'autre de la manière la plus fluide possible en cours d'exploitation ?

## Vorbereitungen und Annahmen

## Préparations et hypothèses

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

! !! warning "Les deux systèmes doivent être sur la même version d'i-doit !"

Bevor es los geht, sollten ein paar Dinge beachtet werden. Ziel soll sein, ohne lange Downtime und vor allem ohne Datenverlust den Umzug zu wagen.

Avant de se lancer, il faut tenir compte de quelques éléments. L'objectif doit être d'oser déménager sans temps d'arrêt prolongé et surtout sans perte de données.

Jeder, der mit den Daten von i-doit arbeitet, sollte rechtzeitig über den Umzug informiert werden. Nichts ist schlimmer als wütende Kollegen, deren Arbeit unterbrochen wurde.

Toute personne travaillant avec les données d'i-doit doit être informée à temps du déménagement. Il n'y a rien de pire que des collègues en colère dont le travail a été interrompu.

Zudem sollte identifiziert werden, welche Schnittstellen von i-doit genutzt werden. Konkret: Welche Drittsysteme wie [Nagios](../automatisierung-und-integration/network-monitoring/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md) & [Co.](../daten-konsolidieren/index.md) greifen auf i-doit zu? Während des Umzugs sollte der Datenzugriff abgeschaltet werden. Ähnliches gilt für laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und das Monitoring, welches überwacht, dass auf dem Windows-System auf Port 80/443 ein laufender Webserver HTTP-Anfragen beantwortet.

En outre, il convient d'identifier quelles interfaces sont utilisées par i-doit. Concrètement, quels sont les systèmes tiers tels que [Nagios](../automatisation-et-intégration/network-monitoring/nagios.md), [((OTRS)) Community Edition](../automatisation-et-intégration/service-desk/otrscommunity-help-desk.md) & [Co.](../daten-konsolidieren/index.md) qui accèdent à i-doit ? Pendant le déménagement, l'accès aux données devrait être désactivé. Il en va de même pour les [tâches](../automatisation-et-intégration/cli/index.md), [sauvegardes](../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) et le monitoring, qui surveille qu'un serveur web en cours d'exécution répond aux requêtes HTTP sur le port 80/443 du système Windows.

Wir nehmen an, unter Windows wird ein nicht bis minimal angepasstes XAMPP verwendet, beispielsweise eine neuere Version von den [Apache Friends](https://www.apachefriends.org/). Über diese Distribution wird der Apache Webserver, das DBMS MySQL oder MariaDB und die Scriptsprache PHP auf dem System installiert. Im Folgenden sprechen wir nur noch von MySQL, auch wenn MariaDB zum Einsatz kommt. Wenn Änderungen an der Konfiguration vorgenommen worden sind, sollten diese eventuell auch auf dem neuen System bedacht werden.

Nous supposons que sous Windows, un XAMPP non ou peu adapté est utilisé, par exemple une version plus récente de [Apache Friends](https://www.apachefriends.org/). Cette distribution permet d'installer le serveur web Apache, le SGBD MySQL ou MariaDB et le langage de script PHP sur le système. Par la suite, nous ne parlerons plus que de MySQL, même si MariaDB est utilisé. Si des modifications ont été apportées à la configuration, il convient éventuellement d'y penser également sur le nouveau système.

Zu guter Letzt gehen wir davon aus, dass das neue Heimatsystem von i-doit bereits [vorbereitet](../installation/manuelle-installation/index.md) wurde sowie sämtliche [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [-einstellungen](../installation/manuelle-installation/systemeinstellungen.md) getroffen sind. Auf dem neuen System sollten alle Dienste erreichbar sein, die i-doit erwartet: DNS, SMTP, LDAP/AD. Funktioniert alles? Okay, es kann losgehen.

Enfin, nous supposons que le nouveau système d'origine d'i-doit a déjà été [préparé](../installation/manuelle-installation/index.md) et que toutes les [conditions système](../installation/conditions système.md) et [paramètres](../installation/manuelle-installation/paramètres système.md) ont été définis. Sur le nouveau système, tous les services attendus par i-doit devraient être accessibles : DNS, SMTP, LDAP/AD. Est-ce que tout fonctionne ? OK, c'est parti.

Eines noch: Wir sollten alle System-Benutzerkonten und deren Passwörter parat haben, die auf dem alten und neuen System verwendet werden. Dazu zählen MySQL-Systembenutzer (root) und der i-doit-Benutzer für MySQL (standardmäßig idoit).

Une chose encore : nous devrions avoir sous la main tous les comptes d'utilisateurs système et leurs mots de passe, utilisés sur l'ancien et le nouveau système. Cela comprend les utilisateurs système MySQL (root) et l'utilisateur i-doit pour MySQL (idoit par défaut).

## Daten aus Windows exportieren

## Exporter des données depuis Windows

Zuallererst kümmern wir uns darum, die Daten aus dem alten System zu sichern, um sie anschließend auf das neue System zu übertragen:

Tout d'abord, nous nous occupons de sauvegarder les données de l'ancien système pour les transférer ensuite sur le nouveau :

1. Der Apache Webserver sollte abgeschaltet werden, damit keine Requests von außen eintreffen. Das Datenbank-Backend MySQL lassen wir weiterlaufen, ansonsten kommen wir an die Daten nicht heran.
2. Das Verzeichnis, in dem i-doit installiert ist (oftmals unter C:\xampp\htdocs\ zu finden), komprimieren wir als ZIP-Datei i-doit.zip.
3. Die Datenbanken von i-doit (bei Standardinstallationen mit einem Mandanten sind das idoit_system und idoit_data) exportieren wir mit der Software mysqldump.exe. Dazu öffnen wir die Eingabeaufforderung und wechseln in das Verzeichnis, wo die Software zu finden ist (beispielsweise unter C:\xampp\mysql\bin). Anschließend führen wir folgendes Kommando aus:
    ```
    mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql
    ```Nach der Passwort-Eingabe werden alle Daten in die Datei i-doit.sql geschrieben.
4. Nun stoppen wir den MySQL-Prozess und hoffen, dass wir weder MySQL noch den Apache Webserver jemals wieder unter Windows benötigen werden.

1. le serveur web Apache doit être désactivé afin de ne pas recevoir de requêtes de l'extérieur. Nous laissons le backend de la base de données MySQL continuer à fonctionner, sinon nous ne pouvons pas accéder aux données.
2. nous compressons le répertoire dans lequel i-doit est installé (souvent sous C:\xampp\htdocs\) en tant que fichier ZIP i-doit.zip.
3. nous exportons les bases de données d'i-doit (pour les installations standard avec un seul client, ce sont idoit_system et idoit_data) avec le logiciel mysqldump.exe. Pour ce faire, nous ouvrons l'invite de commande et nous nous rendons dans le répertoire où se trouve le logiciel (par exemple sous C:\xampp\mysql\bin). Ensuite, nous exécutons la commande suivante :
    ```
    mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql
    ```Après la saisie du mot de passe, toutes les données sont écrites dans le fichier i-doit.sql.
4. nous arrêtons maintenant le processus MySQL et espérons que nous n'aurons plus jamais besoin de MySQL ou du serveur web Apache sous Windows.

## Daten nach GNU/Linux umziehen

## Transférer des données vers GNU/Linux

Nachdem wir sowohl die ZIP-Datei mit dem i-doit-Verzeichnis als auch die SQL-Datei mit den Datenbankinhalten auf den neuen Server kopiert haben (gute Dienste leistet hier [WinSCP](http://winscp.net/eng/docs/lang:de)), verbinden wir uns via SSH (beispielsweise via [Putty](http://www.putty.org/)) und agieren fortan auf der Kommandozeile. Der Apache Webserver, MySQL und PHP sind fertig konfiguriert und alle benötigten Pakete sind ordnungsgemäß [installiert](../installation/index.md). Fehlt nur noch i-doit:

Après avoir copié le fichier ZIP avec le répertoire i-doit ainsi que le fichier SQL avec le contenu de la base de données sur le nouveau serveur ([WinSCP](http://winscp.net/eng/docs/lang:de)), nous nous connectons via SSH (par exemple via [Putty](http://www.putty.org/)) et agissons désormais sur la ligne de commande. Le serveur web Apache, MySQL et PHP sont configurés et tous les paquets nécessaires sont correctement [installés](../installation/index.md). Il ne manque plus qu'i-doit :

### Datenbank

### Base de données

1. Wir importieren die Datenbank. Hierzu rufen wir den MySQL-Client auf:
    ```
    mysql -uroot -p < i-doit.sql
    ```###### Wenn beim einspielen der Datenbank diese Fehlermeldung erscheint "Can't create table \idoit_data.\table_name\ (errno: 140 "Wrong create options")". Ist die Lösung dazu [HIER](../administration/troubleshooting/cant-create-table.md) zu finden.
2. Anschließend verbinden wir uns mit MySQL, um den für i-doit benötigten User einzurichten:
    ```
    mysql -uroot -p
    ```Folgende SQL-Befehle richten den Benutzer idoit ein, der Zugriff auf die beiden Datenbanken bekommt:```
    grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
    grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';
    ```Anschließend sollten wir uns zum Testen mit ebendiesen Credentials anmelden und schauen, ob sich die Datenbanken korrekt auslesen lassen:```
    mysql -uidoit -p
    use idoit_system;
    ```
3. Wenn wir schon einmal dabei sind, sollten wir die Tabelle isys_mandator auslesen, um die Credentials zu überprüfen:
    ```
    select * from isys_mandator;
    ```
4. Es kann vorkommen, dass absolute Pfade in der Datenbank hinterlegt sind. Betroffen davon sind unter anderem die Datensätze system.dir.file-upload und system.dir.image-upload in der Tabelle isys_settings:
    ```
    select * from isys_settings
    ```Relative Pfade wie upload/files/ und upload/images/ sind legitim.
5. Den MySQL-Client beenden wir mit STRG+D oder dem Befehl exit;.

1. nous importons la base de données. Pour ce faire, nous appelons le client MySQL :
    ```
    mysql -uroot -p < i-doit.sql
    ```###### Si, lors de l'importation de la base de données, ce message d'erreur apparaît "Can't create table \idoit_data.\table_name\ (errno : 140 "Wrong create options")". La solution à ce problème se trouve [ICI](../administration/troubleshooting/cant-create-table.md).
2. ensuite, nous nous connectons à MySQL pour configurer l'utilisateur nécessaire à i-doit :
    ```
    mysql -uroot -p
    ```Les commandes SQL suivantes créent l'utilisateur idoit qui aura accès aux deux bases de données:```
    grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd' ;
    grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd' ;
    ```Ensuite, nous devons nous connecter avec ces mêmes identifiants pour tester et voir si les bases de données se lisent correctement:```.
    mysql -uidoit -p
    use idoit_system ;
    ```
3. tant que nous y sommes, nous devrions lire la table isys_mandator pour vérifier les credentials :
    ```
    select * from isys_mandator ;
    ```
4. il peut arriver que des chemins d'accès absolus soient enregistrés dans la base de données. Les enregistrements concernés sont entre autres system.dir.file-upload et system.dir.image-upload dans la table isys_settings :
    ```
    select * from isys_settings
    ``Les chemins d'accès relatifs tels que upload/files/ et upload/images/ sont légitimes.
5. nous quittons le client MySQL avec CTRL+D ou la commande exit ;.

### Dateien

### fichiers

1. Die ZIP-Datei entpacken wir an gewünschter Stelle. Bei [Debian GNU/Linux](../installation/manuelle-installation/debian.md) wäre dies unterhalb von /var/www/html/:
    ```
    sudo unzip i-doit.zip
    ```
2. Anschließend setzen wir die Rechte korrekt und räumen auf:
    ```
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    sudo chmod 774 controller tenants import updatecheck *.sh
    sudo rm -r temp/*
    ```Falls nötig, löschen wir Dateien, die eventuell noch aus der XAMP-Installation stammen.

1. nous décompressons le fichier ZIP à l'endroit souhaité. Pour [Debian GNU/Linux](../installation/manuelle-installation/debian.md), ce serait sous /var/www/html/ :
    ```
    sudo unzip i-doit.zip
    ```
2. ensuite, nous définissons correctement les droits et faisons le ménage :
    ```
    sudo chown www-data:www-data -R .
    sudo find . -type d -nom \* -exec chmod 775 {} \ ;
    sudo find . -type f -exec chmod 664 {} \ ;
    sudo chmod 774 controller tenants import updatecheck *.sh
    sudo rm -r temp/*
    ```Si nécessaire, nous supprimons les fichiers qui proviennent éventuellement de l'installation de XAMP.

Jetzt wird es Zeit für einen ersten großen Test: Lässt sich über den Browser und die neue Heimat von i-doit aufrufen? Wenn nicht, ist irgendetwas bei den vorherigen Schritten schief gelaufen. Eine genaue Fehleranalyse ist hierbei wichtig.

Il est maintenant temps de faire un premier grand test : est-il possible d'accéder à i-doit via le navigateur et la nouvelle maison ? Si ce n'est pas le cas, quelque chose s'est mal passé lors des étapes précédentes. Il est important de procéder à une analyse précise des erreurs.

### Cronjobs

### Cronjobs

Was noch fehlt, ist die Übertragung der Windows-Tasks zu Cronjobs. Zumeist geht es um wiederkehrende Aufgaben, die der [CLI](../automatisierung-und-integration/cli/index.md) erledigen soll. Wer bisher keine Tasks/Cronjobs für i-doit eingerichtet hatte, sollte dies spätestens jetzt tun.

Ce qui manque encore, c'est le transfert des tâches Windows vers les cronjobs. La plupart du temps, il s'agit de tâches récurrentes que le [CLI](../automatisation-et-intégration/cli/index.md) doit effectuer. Ceux qui n'avaient pas encore configuré de tâches/jobs cron pour i-doit devraient le faire au plus tard maintenant.

### Nacharbeiten

### Retouches

Nach diesem Umzug sollten verschiedene Tests durchgeführt werden und die Schnittstellen zwischen i-doit und Dritt-Tools wieder aktiviert werden. Auch ganz wichtig ist, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen. Sollten alle Tests erfolgreich sein (davon ist hoffentlich auszugehen), kann der Wartungsmodus beendet und alle Kollegen benachrichtigt werden, dass die IT-Dokumentation wieder verfügbar ist.

Après ce déménagement, il convient d'effectuer différents tests et de réactiver les interfaces entre i-doit et les outils tiers. Il est également très important que les [sauvegardes](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md) fonctionnent. Si tous les tests sont concluants (ce que l'on peut espérer), le mode de maintenance peut être arrêté et tous les collègues peuvent être informés que la documentation informatique est à nouveau disponible.

Wie lange dauert solch ein Umzug? Wenn wir die Vor- und Nachbereitungen außen vor lassen, dauert ein Umzug nicht länger als zwei Stunden. Es lohnt sich also. Viel Erfolg!

Combien de temps dure un tel déménagement ? Si nous ne tenons pas compte des préparatifs, un déménagement ne dure pas plus de deux heures. Cela en vaut donc la peine. Bonne chance !