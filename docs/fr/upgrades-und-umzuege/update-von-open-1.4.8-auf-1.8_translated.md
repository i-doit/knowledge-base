<!-- TRANSLATED by md-translate -->
# Update von i-doit open 1.4.8 auf 1.8

# Mise à jour d'i-doit open 1.4.8 à 1.8

Dieser Artikel geht auf die Besonderheiten ein, die bei einem Update der open-Variante von Version 1.4.8 zu 1.8 zu berücksichtigen sind.

Cet article aborde les particularités à prendre en compte lors d'une mise à jour de la variante open de la version 1.4.8 à la version 1.8.

## Vorbereitung

## préparation

Der Sprung von Version 1.4.8 auf Version 1.8 bringt viele Änderungen mit sich. Es wurde einiges an der Web GUI geändert, aber auch am Datenbankmodell. Die API kann wesentlich mehr und wird als separates Modul kostenlos angeboten.

Le passage de la version 1.4.8 à la version 1.8 entraîne de nombreux changements. Certaines modifications ont été apportées à l'interface utilisateur Web, mais aussi au modèle de base de données. L'API peut faire beaucoup plus et est proposée gratuitement en tant que module séparé.

## Download

## Téléchargement

Das Update-Paket können Sie hier herunterladen:

Vous pouvez télécharger le paquet de mise à jour ici :

[![](../assets/downloads/idoit-open-1.8-update.zip)idoit-open-1.8-update.zip](../assets/downloads/idoit-open-1.8-update.zip)

[ ![](../assets/downloads/idoit-open-1.8-update.zip)idoit-open-1.8-update.zip](../assets/downloads/idoit-open-1.8-update.zip)

Zu beachten sind hierbei die Versionsstände:

Il convient de tenir compte des versions :

* Die bisher eingesetzte Installation ist in der Version 1.4.8. Sollte eine vorherige Version eingesetzt sein, muss die Installation auf Version 1.4.8 aktualisiert werden.
* Das Update erfolgt zunächst auf Version 1.8. Es kann nicht auf neuere Versionen aktualisiert werden, bevor nicht das Update auf Version 1.8 durchgeführt worden ist.

* L'installation utilisée jusqu'à présent est dans la version 1.4.8. Si une version précédente est utilisée, l'installation doit être mise à jour à la version 1.4.8.
* La mise à jour s'effectue d'abord sur la version 1.8. Il n'est pas possible de passer à une version plus récente avant d'avoir effectué la mise à jour sur la version 1.8.

## Durchführung

## exécution

Nach dem Download wird das Update-Paket in das Installationsverzeichnis von i-doit kopiert und entpackt. Auf einem Debian-basierten Betriebssystem könnte dies folgendermaßen geschehen:

Après le téléchargement, le paquet de mise à jour est copié dans le répertoire d'installation d'i-doit et décompressé. Sur un système d'exploitation basé sur Debian, cela pourrait se faire de la manière suivante :

```
sudo -u www-data cp idoit-open-1.8-update.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip idoit-open-1.8-update.zip
```

Der Pfad ist dementsprechend anzupassen. Das Kopieren und Entpacken erfolgt mit dem User des Apache Webservers, damit das Update mit dessen Rechten problemlos erfolgt.

Le chemin doit être adapté en conséquence. La copie et la décompression se font avec l'utilisateur du serveur web Apache, afin que la mise à jour se fasse sans problème avec ses droits.

Die anschließende Update-Prozedur unterscheidet sich grundlegend nicht von einem gewöhnlichen [Update über die Web GUI](../wartung-und-betrieb/update-einspielen.md). Da es sich bei der Version 1.8 um ein Major-Update handelt, dürfen vorherige Major-Updates nicht übersprungen werden. Die Updates werden demnach nacheinander eingespielt. Nachdem das erste Update erfolgt ist, wird man aufgefordert, ein weiteres Update einzuspielen. Diese Prozedur wiederholt sich so lange, bis die Version 1.8 erreicht ist. Folgender Update-Pfad ergibt sich daraus:

La procédure de mise à jour qui s'ensuit ne diffère pas fondamentalement d'une [mise à jour via l'interface graphique web] ordinaire(../maintenance-et-exploitation/importer-une-mise-à-jour.md). Comme la version 1.8 est une mise à jour majeure, les mises à jour majeures précédentes ne peuvent pas être ignorées. Les mises à jour sont donc appliquées les unes après les autres. Après la première mise à jour, il est demandé d'effectuer une autre mise à jour. Cette procédure se répète jusqu'à ce que la version 1.8 soit atteinte. Le chemin de mise à jour suivant en résulte :

1. Update von Version 1.4.8 auf Version 1.5
2. Update von Version 1.5 auf Version 1.6
3. Update von Version 1.6 auf Version 1.7
4. Update von Version 1.7 auf Version 1.8

1ère mise à jour de la version 1.4.8 à la version 1.5
2. mise à jour de la version 1.5 à la version 1.6
3. mise à jour de la version 1.6 à la version 1.7
4. mise à jour de la version 1.7 à la version 1.8

Sind alle Schritte nacheinander erfolgreich durchgelaufen, ist das Update auf Version 1.8 erledigt. In der Web GUI erscheint nun die Versionsnummer 1.8.

Si toutes les étapes ont été effectuées avec succès les unes après les autres, la mise à jour à la version 1.8 est terminée. Le numéro de version 1.8 apparaît maintenant dans la Web GUI.

## Nachbereitung

## Suivi

Nach dem Update lohnt es sich, weitere Schritte zu befolgen:

Après la mise à jour, il vaut la peine de suivre d'autres étapes :

* [Backup konfigurieren](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
* [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md)

* [Configurer la sauvegarde](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md)
* [Configurer les tâches cron](../automatisation-et-intégration/cli/index.md)

## Troubleshooting

## Dépannage

Bei jedem Schritt wird eine Log-Datei im Verzeichnis log/ angelegt. Sollte ein Schritt aufgrund eines Fehlers nicht beendet werden, wird dies im Log protokolliert. Von weiteren Update-Schritten sollte man absehen, um Folgefehler zu vermeiden. Hilfestellungen bei Fehlern gibt es im [open-Forum](https://forum.i-doit.org/).

Un fichier journal est créé à chaque étape dans le répertoire log/. Si une étape ne se termine pas en raison d'une erreur, celle-ci est consignée dans le journal. Il faut s'abstenir d'effectuer d'autres étapes de mise à jour afin d'éviter des erreurs ultérieures. Vous trouverez de l'aide en cas d'erreur dans le [open-Forum](https://forum.i-doit.org/).

[Weitere Tipps bei Problemen](../administration/troubleshooting/index.md) finden sich hier in der Knowledge Base.

[Autres conseils en cas de problèmes](../administration/troubleshooting/index.md) se trouvent ici dans la base de connaissances.