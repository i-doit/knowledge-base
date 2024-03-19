<!-- TRANSLATED by md-translate -->
# Automatische Installation

# Installation automatique

Dieser Artikel behandelt die automatische [Installation](index.md) von i-doit. Auf einem frisch installierten GNU/Linux-Betriebssystem werden alle nötigen Konfigurationsschritte durchgeführt und i-doit installiert. Zusätzlich werden Cronjobs, Backups und weitere nützliche CLI-Werkzeuge mitgeliefert. Dazu wird lediglich ein Script ausgeführt.

Cet article traite de l'[installation](index.md) automatique d'i-doit. Sur un système d'exploitation GNU/Linux fraîchement installé, toutes les étapes de configuration nécessaires sont effectuées et i-doit est installé. De plus, des cronjobs, des sauvegardes et d'autres outils CLI utiles sont fournis. Pour cela, il suffit d'exécuter un script.

## Umfang

## portée

✔ Software-Pakete installieren<br>
✔ Software-Pakete konfigurieren<br>
✔ i-doit installieren<br>
✔ Cronjobs einrichten<br>
✔ Backups einrichten<br>
✔ Restore einrichten

✔ Installer les progiciels<br>.
✔ Configurer les packs logiciels<br>
✔ Installer i-doit<br>
✔ Configurer les tâches cron<br>
✔ Configurer les sauvegardes<br>
✔ Configurer la restauration

## Voraussetzungen

## conditions préalables

* Die [Systemvoraussetzungen](systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
* Eines der [unterstützten](systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist frisch installiert.
* Das System kann über eine Internetanbindung auf Paket-Repositories und Web Services von i-doit zugreifen.

* La [configuration requise](systemrequis.md) **doit** être remplie. La pile LAMP mentionnée (Apache Web Server, MariaDB/MySQL, PHP) en est exclue.
* Un des systèmes d'exploitation GNU/Linux [supportés](systemrequis.md) vient d'être installé.
* Le système peut accéder aux dépôts de paquets et aux services web d'i-doit via une connexion Internet.

## Benutzung

## utilisation

Die Installation übernimmt ein [Script](https://github.com/i-doit/scripts#install-i-doit-on-a-gnulinux-operating-system), das auf dem Betriebssystem ausgeführt wird. <br>
Die folgenden Schritte finden auf der Kommandozeile statt. Dazu verbindet man sich beispielsweise via **SSH**. Anschließend lädt man das Script herunter und macht es ausführbar:

L'installation est assurée par un [script](https://github.com/i-doit/scripts#install-i-doit-on-a-gnulinux-operating-system) qui s'exécute sur le système d'exploitation. <br>
Les étapes suivantes se déroulent sur la ligne de commande. Pour cela, on se connecte par exemple via **SSH**. Ensuite, on télécharge le script et on le rend exécutable :

```shell
wget https://raw.githubusercontent.com/i-doit/scripts/main/idoit-install
chmod 755 idoit-install
```

Das Script muss mit **root**-Rechten ausgeführt werden. Wenn **sudo** zur Verfügung steht:

Le script doit être exécuté avec les droits **root**. Si **sudo** est disponible :

```shell
sudo ./idoit-install
```

Alternativ meldet man sich als **root** an:

Alternativement, on se connecte en tant que **root** :

```shell
su
./idoit-install
```

Das Script stellt mehrere Fragen zur Konfiguration. Für alle Fragen gibt es vordefinierte Antworten, die mit dem Drücken von **ENTER** übernommen werden können.

Le script pose plusieurs questions sur la configuration. Pour toutes les questions, il y a des réponses prédéfinies qui peuvent être appliquées en appuyant sur **ENTER**.

## Nächste Schritte

## Prochaines étapes

* [Eine gültige Lizenz einspielen (nur i-doit pro)](../wartung-und-betrieb/lizenz-aktivieren.md)
* [Tipps zur Sicherheit und zum Schutz beachten](../wartung-und-betrieb/sicherheit-und-schutz.md)
* [Erste Schritte mit i-doit](../grundlagen/index.md)

* [Importer une licence valide (uniquement i-doit pro)](../maintenance-et-exploitation/activer-une-licence.md)
* [Observer les conseils de sécurité et de protection](../maintenance-et-exploitation/sécurité-et-protection.md)
* [Premiers pas avec i-doit](../bases/index.md)
