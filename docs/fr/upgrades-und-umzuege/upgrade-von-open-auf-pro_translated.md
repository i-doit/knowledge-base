<!-- TRANSLATED by md-translate -->
# Upgrade von i-doit open auf pro

# Mise à niveau d'i-doit open vers pro

Wie steigt man schnell und einfach von _i-doit open_ auf _i-doit pro_ mit erweiterten Funktionen um?

Comment passer rapidement et facilement de _i-doit open_ à _i-doit pro_ avec des fonctions avancées ?

## Motivation

## Motivation

Warum sollte die IT-Infrastruktur eher mit der pro- als mit der open-Variante von i-doit dokumentiert werden? Der Grund ist einfach: [i-doit pro verfügt über wesentlich mehr Funktionen](https://www.i-doit.org/cmdb-it-documentation/), die bei der täglichen Arbeit eine große Hilfe darstellen.

Pourquoi l'infrastructure informatique devrait-elle être documentée avec la variante pro d'i-doit plutôt qu'avec la variante open ? La raison est simple : [i-doit pro dispose de beaucoup plus de fonctions](https://www.i-doit.org/cmdb-it-documentation/), qui sont d'une grande aide dans le travail quotidien.

## In Sieben Schritten zur _i-doit pro_

## En sept étapes vers le _i-doit pro_

Bevor wir ins Detail gehen, verschaffen wir uns einen kurzen Überblick, welche Schritte erforderlich sind:

Avant d'entrer dans les détails, faisons un rapide tour d'horizon des étapes nécessaires :

1. Vorbereitung
2. pro-Update herunterladen und durchführen
3. pro-addon installieren
4. Lizenz einspielen
5. Caches leeren
6. Rechte konfigurieren
7. Nacharbeiten

1. préparation
2. télécharger et exécuter la mise à jour pro
3. installer pro-addon
4. installer la licence
5. vider les caches
6. configurer les droits
7. travaux de finition

## Vorbereitung

## préparation

Wichtig: Dieser Vorgang kann nicht rückgängig gemacht werden. Ein funktionierendes [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) ist daher unablässig.Nach dem Upgrade ist eine gültige [Lizenz für i-doit pro](../wartung-und-betrieb/lizenz-aktivieren.md)erforderlich. Ebenso müssen die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [Einstellungen](../installation/manuelle-installation/systemeinstellungen.md) erfüllt sein.

Important : Cette procédure ne peut pas être annulée. Une [sauvegarde](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md) est donc indispensable.Après la mise à niveau, une [licence pour i-doit pro](../maintenance-et-exploitation/activer-une-licence.md) valide est nécessaire. De même, la [configuration système requise](../installation/conditions système.md) et les [paramètres](../installation/installation manuelle/paramètres système.md) doivent être remplis.

Sollte es sich um eine ältere open-Installation handeln, müssen noch weitere Schritte befolgt werden:

S'il s'agit d'une ancienne installation open, d'autres étapes doivent être suivies :

* Wenn i-doit open **0.9.x** oder älter installiert ist, ist ein Upgrade nicht möglich.
* Wenn i-doit open **1.4.x** installiert ist, muss erst auf die neuste Version ab 1.8 aktualisiert werden.
* Wenn i-doit open **1.8.x** oder höher installiert ist, kann das Upgrade fortgesetzt werden.

* Si i-doit open **0.9.x** ou plus ancien est installé, une mise à jour n'est pas possible.
* Si i-doit open **1.4.x** est installé, il faut d'abord mettre à jour vers la dernière version à partir de 1.8.
* Si i-doit open **1.8.x** ou plus est installé, la mise à jour peut être poursuivie.

Die jeweils aktuelle Version steht auf [i-doit.org](http://i-doit.org/) zum Download bereit.

La version actuelle peut être téléchargée sur [i-doit.org](http://i-doit.org/).

## _pro_-Update herunterladen und durchführen

## Télécharger et effectuer la mise à jour de _pro_.

Das Update-Paket der pro-Variante muss im [Kundenportal](../administration/kundenportal.md) heruntergeladen und [auf die übliche Art und Weise eingespielt](../wartung-und-betrieb/update-einspielen.md) werden. Wichtig ist hierbei, dass die Versionsnummern der installierten open- und der gewünschten pro-Variante übereinstimmen. Beispiel: Ist i-doit open 1.8 installiert, muss das Update-Paket i-doit pro 1.8 verwendet werden.

Le paquet de mise à jour de la variante pro doit être téléchargé dans le [portail clients](../administration/kundenportal.md) et [importé de la manière habituelle](../maintenance-et-exploitation/update-einspielen.md). Il est important que les numéros de version de la variante open installée et de la variante pro souhaitée concordent. Exemple : Si i-doit open 1.8 est installé, le paquet de mise à jour i-doit pro 1.8 doit être utilisé.

Mit dem Installations-Paket der pro-Variante funktioniert das Upgrade nicht.

La mise à niveau ne fonctionne pas avec le package d'installation de la variante pro.

## _i-doit pro_-addon installieren

## _i-doit pro_-addon installer

Nach dem Update auf die pro-Variante muss das pro-addon installiert werden. Das pro-addon ist bereits im [Admin Center](../administration/admin-center.md) unter **Add-ons** verfügbar. Dort befindet sich ein Button zum Installieren.

Après la mise à jour vers la variante pro, le pro-addon doit être installé. Le pro-addon est déjà disponible dans [Admin Center](../administration/admin-center.md) sous **Add-ons**. Vous y trouverez un bouton pour l'installer.

## Lizenz einspielen

## Importer la licence

Das eigentliche Upgrade ist nun vollendet und muss nur noch durch eine gültige Lizenz "veredelt" werden. Die Lizenz kann [direkt im Admin Center unter **Licenses** eingespielt](../wartung-und-betrieb/lizenz-aktivieren.md) werden.

La mise à niveau proprement dite est maintenant terminée et il ne reste plus qu'à la "peaufiner" avec une licence valide. La licence peut être [directement installée dans l'Admin Center sous **Licenses**](../maintenance-et-exploitation/activer-licence.md).

## Caches leeren

## Vider les caches

Nun melden wir uns vom Admin Center ab und in i-doit an. Dort klicken wir uns über **Verwaltung → Systemtools → Cache / Datenbank** zur Schaltfläche **Kompletten Cache leeren**. Anschließend leeren wir den Browser-eigenen Cache mit der Tastenkombination **STRG+F5.**

Nous nous déconnectons maintenant de l'Admin Center et nous nous connectons à i-doit. Là, nous cliquons sur **Administration → Outils système → Cache / Base de données** jusqu'au bouton **Vider complètement le cache**. Ensuite, nous vidons le cache du navigateur avec la combinaison de touches **STRG+F5.**.

## Rechte konfigurieren

## Configurer les droits

Im Gegensatz zu i-doit open besitzt i-doit pro ein umfangreiches, frei konfigurierbares [Rechtesystem](../effizientes-dokumentieren/rechteverwaltung/index.md). Der angemeldete Benutzer wird daher noch nicht über alle Berechtigungen verfügen.

Contrairement à i-doit open, i-doit pro possède un [système de droits] étendu et librement configurable(../documentation-efficace/gestion des droits/index.md). L'utilisateur connecté ne disposera donc pas encore de tous les droits.

Um dem Benutzer mit wenigen Schritten vollen Zugriff zu gewähren, rufen wir **Verwaltung→ Rechtesystem** **→ Rechtesystem zurücksetzen** auf und erteilen ihm mit der Eingabe der Credentials für das [Admin Center](../administration/admin-center.md) vollen Zugriff auf i-doit.

Pour donner à l'utilisateur un accès complet en quelques étapes, nous appelons **Administration→ Système de droits** **→ Réinitialiser le système de droits** et lui donnons un accès complet à i-doit en entrant les credentials pour le [Admin Center](../administration/admin-center.md).

Nun können über die einzelnen Rechtevergaben weitere Rechte für Personen und Personengruppen konfiguriert werden.

Il est maintenant possible de configurer d'autres droits pour des personnes et des groupes de personnes via les différentes attributions de droits.

## Nacharbeiten

## Retouches

Falls noch nicht geschehen, sollten folgende Dinge nicht außer Acht gelassen werden, damit i-doit reibungslos funktioniert:

Si ce n'est pas déjà fait, les choses suivantes ne doivent pas être négligées pour que i-doit fonctionne sans problème :

* [Backup und Restore einrichten und testen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
* [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md) (mit dem Controller)
* [Optional Update auf aktuelle pro-Version durchführen:](../wartung-und-betrieb/update-einspielen.md) Mit einer gültigen Lizenz ist es möglich und auch sehr empfehlenswert, immer auf die neuste Version von i-doit pro zu aktualisieren.

* [Configurer et tester la sauvegarde et la restauration](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md)
* [Configurer les tâches cron](../automatisation-et-intégration/cli/index.md) (avec le contrôleur)
* [En option, effectuer une mise à jour vers la version pro actuelle :](../maintenance-et-exploitation/importer-une-mise-à-jour.md) Avec une licence valide, il est possible et même fortement recommandé de toujours mettre à jour vers la version la plus récente d'i-doit pro.

## Downgrade auf i-doit open?

## Downgrade vers i-doit open ?

Es ist nicht vorgesehen, auf niedrigere Versionen von i-doit zurückzukehren. Dies gilt auch für Downgrades von der _i-doit pro_ auf die _i-doit open_ Variante.

Il n'est pas prévu de revenir à des versions inférieures d'i-doit. Cela vaut également pour les downgrades de la version _i-doit pro_ vers la version _i-doit open_.