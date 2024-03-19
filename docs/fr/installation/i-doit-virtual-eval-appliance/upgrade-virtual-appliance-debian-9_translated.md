<!-- TRANSLATED by md-translate -->
# Upgrade der i-doit Virtual Eval Appliance auf Debian GNU/Linux 9 "Stretch"

# Mise à niveau de l'appliance d'évaluation virtuelle i-doit vers Debian GNU/Linux 9 "Stretch

Neben der Wartung von i-doit sollte auch die Pflege des darunter liegenden Betriebssystems nicht außer Acht gelassen werden. Wir beschreiben das Upgrade von [Debian GNU/Linux](../manuelle-installation/debian.md) in Version 8 "Jessie" auf 9 "Stretch". In einigen Schritten ist die [i-doit Eval Virtual Appliance](index.md) auf dem neuesten Stand.

Outre la maintenance d'i-doit, il ne faut pas négliger la maintenance du système d'exploitation sous-jacent. Nous décrivons la mise à niveau de [Debian GNU/Linux](../manuelle-installation/debian.md) version 8 "Jessie" vers 9 "Stretch". En quelques étapes, l'[i-doit Eval Virtual Appliance](index.md) est mise à jour.

!!! info "Warum ein Upgrade?"

! !! info "Pourquoi une mise à niveau ?"

```
Warum lohnt sich die Mühe, das Betriebssystem auf den neusten Stand anzuheben? Es gibt sehr gute Gründe:
    1. Die IT-Dokumentation beinhaltet [sensible Daten, die zu schützen sind](../../wartung-und-betrieb/sicherheit-und-schutz.md). Dies kann nur gewährleistet werden, wenn alle Systemkomponenten auf einem aktuellen Stand sind.
1. Der Wechsel von PHP 5.6 auf 7.0 bringt einen messbaren Performance-Schub.
```

## Voraussetzungen

## conditions préalables

Einige Dinge müssen vor dem Upgrade bedacht werden:

Certains éléments doivent être pris en compte avant la mise à niveau :

* Das Upgrade beschreibt lediglich die i-doit Virtual Eval Appliance in Version 1.2.x.
* Es wird davon ausgegangen, dass keine Änderungen (außer Updates) am System vorgenommen wurden. Nachträgliche Änderungen liegen nicht in unserer Verantwortung.
* Es steht genügend freier Speicher zur Verfügung. Das Update benötigt zwischenzeitlich ca. 1 GByte an Speicherplatz.

* La mise à niveau décrit uniquement l'appliance i-doit Virtual Eval dans sa version 1.2.x.
* Il est supposé qu'aucune modification (autre que des mises à jour) n'a été apportée au système. Les modifications ultérieures ne relèvent pas de notre responsabilité.
* Il y a suffisamment de mémoire libre à disposition. La mise à jour nécessite entre-temps environ 1 Go d'espace mémoire.

## Tipps

## conseils

Weiterhin sollte vor einem Upgrade Folgendes bedacht werden:

En outre, avant de procéder à une mise à niveau, il convient de prendre en compte les éléments suivants :

* [Backups](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) sollten vorhanden sein.
* Benutzer von i-doit sollten vor der Downtime informiert werden.
* Automatismen, Cronjobs und externe Zugriffe sollten für die Dauer des Upgrades gestoppt werden.

* [Sauvegardes](../../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md) devraient être disponibles.
* Les utilisateurs d'i-doit devraient être informés avant le temps d'arrêt.
* Les automatismes, les cronjobs et les accès externes devraient être stoppés pendant la durée de la mise à niveau.

Viele weitere [Hinweise zum Upgrade des Betriebssystems](https://www.debian.org/releases/stretch/) liefert die Debian Community.

De nombreux autres [conseils pour la mise à niveau du système d'exploitation](https://www.debian.org/releases/stretch/) sont fournis par la communauté Debian.

## Upgrade vorbereiten

## Préparer la mise à niveau

Wir verbinden uns via SSH und rufen im Menü den Punkt **0 Launch Shell** auf.

Nous nous connectons via SSH et appelons dans le menu le point **0 Launch Shell**.

Anschließend führen wir Updates durch:

Nous effectuons ensuite des mises à jour :

```shell
sudo apt update
    sudo apt upgrade
    sudo apt-get autoremove
    sudo apt clean
```

Anschließend muss das System neugestartet werden. Aufgrund eines Fehlers muss der Linux-Kernel auf dem neusten Stand sein:

Le système doit ensuite être redémarré. En raison d'une erreur, le noyau Linux doit être mis à jour :

```shell
sudo systemctl reboot
```

Nach dem Neustart verbinden wir uns abermals via SSH und rufen die Shell im Menü auf. Nun stellen wir sicher, dass Version **8.8** im Einsatz ist:

Après le redémarrage, nous nous connectons à nouveau via SSH et appelons le shell dans le menu. Nous nous assurons maintenant que la version **8.8** est utilisée :

```shell
cat /etc/debian_release
```

Sollte dies nicht der Fall sein, wird das Upgrade fehlschlagen.

Si ce n'est pas le cas, la mise à niveau échouera.

Vorsorglich sollte der Webserver gestoppt werden, damit i-doit nicht zwischenzeitlich aufgerufen wird:

Par précaution, il convient d'arrêter le serveur web afin qu'i-doit ne soit pas appelé entre-temps :

```shell
sudo systemctl stop apache2.service
```

Somit ist alles für das Upgrade vorbereitet.

Ainsi, tout est prêt pour la mise à niveau.

## Upgrade durchführen

## Effectuer la mise à niveau

Die Quellen für die Distributionspakete werden nun angepasst:

Les sources des paquets de distribution sont maintenant adaptées :

```shell
sudo nano /etc/apt/sources.list
```

Folgende Zeile wird am Ende ergänzt:

La ligne suivante est ajoutée à la fin :

```shell
deb http://mirrors.kernel.org/debian stretch main contrib
```

Alle vorherigen Zeilen werden auskommentiert. Hierbei wird jeder Zeile ein **#** vorangestellt.

Toutes les lignes précédentes sont commentées. Pour cela, chaque ligne est précédée de **#**.

Anschließend werden die Paketquellen aktualisiert und ein Update der Pakete durchgeführt:

Ensuite, les sources des paquets sont actualisées et une mise à jour des paquets est effectuée :

```shell
sudo apt update
    sudo apt upgrade
```

Beim letzten Befehl werden mehrere Benutzer-Interaktionen nötig:

La dernière commande nécessite plusieurs interactions de l'utilisateur :

1. Die Frage **Restart services during package upgrades without asking?** ist mit **Yes** zu beantworten.
2. Das Überschreiben von **Configuration file '/etc/issue'** ist mit **N** zu beantworten.
3. Das Überschreiben von **Configuration file '/etc/issue.net'** ist ebenfalls mit **N** zu beantworten.

1. à la question **Restart services during package upgrades without asking?** il faut répondre par **Yes**.
2. l'écrasement du fichier de configuration '/etc/issue'** doit être répondu par **N**.
3. la réponse à l'écrasement du fichier de configuration '/etc/issue.net'** est également **N**.

Nun folgt das eigentliche Upgrade der Pakete auf neue Versionen:

Vient ensuite la mise à niveau proprement dite des paquets vers les nouvelles versions :

```shell
sudo apt dist-upgrade
```

Damit der neue Linux-Kernel aktiv wird, starten wir das System neu:

Pour que le nouveau noyau Linux soit actif, nous redémarrons le système :

```shell
sudo systemctl reboot
```

Das Upgrade auf Version 9 ist somit abgeschlossen.

La mise à niveau vers la version 9 est donc terminée.

## Nachbereitung

## Suivi

Nach dem Neustart verbinden wir uns abermals via SSH mit dem System und rufen im Menü die Shell auf.

Après le redémarrage, nous nous connectons à nouveau au système via SSH et appelons le shell dans le menu.

Erst einmal räumen wir bei den Distributionspaketen auf:

Tout d'abord, nous faisons le ménage dans les paquets de distribution :

```shell
sudo apt autoremove
    sudo apt clean
```

Nun müssen wir den Apache Webserver und PHP anpassen, weil statt PHP 5.6 nun 7.0 mitgeliefert wird:

Nous devons maintenant adapter le serveur web Apache et PHP, car au lieu de PHP 5.6, c'est désormais 7.0 qui est fourni :

```shell
sudo cp /etc/php5/mods-available/i-doit.ini /etc/php/7.0/mods-available/
    sudo phpenmod -v 7.0 i-doit
    sudo apt-get purge libapache2-mod-php5 php5
    sudo apt install libapache2-mod-php php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mcrypt php-memcached php-mysql php-pgsql php-xml php-zip
    sudo a2enmod php7.0
    sudo systemctl restart apache2.service
```

Änderungen an den Konfigurationsdateien sind nicht nötig.

Il n'est pas nécessaire de modifier les fichiers de configuration.

Auch das DBMS MariaDB muss angepasst werden:

Le SGBD MariaDB doit également être adapté :

```shell
sudo mv /etc/mysql/conf.d/i-doit.cnf /etc/mysql/mariadb.conf.d/99-i-doit.cnf
    sudo systemctl restart mysql.service
```

Damit der Welcome Screen und das Menü richtig funktionieren, müssen einige Zeilen angepasst werden:

Pour que l'écran d'accueil et le menu fonctionnent correctement, quelques lignes doivent être adaptées :

```shell
sudo nano /usr/local/bin/appliance_getip.sh
```

Der Inhalt wird hierdurch ersetzt:

Le contenu est remplacé par ceci :

```shell
#!/bin/bash
    /bin/hostname -I | awk -F: '{ print " "$1 }'
```

Weiterhin:

Continuer :

```shell
sudo nano /usr/local/bin/get-ip-address
```

Inhalt:

Contenu :

```shell
#!/bin/bash
    echo "/bin/hostname -I"
```

Und zu guter Letzt die Versions-Nummer der Appliance:

Et enfin, le numéro de version de l'appliance :

```shell
sudo nano /etc/i-doit/appliance.conf
```

Inhalt:

Contenu :

```shell
APPLIANCE_VERSION="1.3.0"
```

Damit ist auch die Nachbereitung abgeschlossen. Nun können wieder alle Automatismen gestartet werden. Die Downtime ist beendet und i-doit kann wieder von den Benutzern wie gewohnt aufgerufen werden.

Le traitement ultérieur est ainsi terminé. Tous les automatismes peuvent maintenant être redémarrés. Le temps d'arrêt est terminé et i-doit peut à nouveau être appelé par les utilisateurs comme d'habitude.