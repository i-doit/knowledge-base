<!-- TRANSLATED by md-translate -->
# Automatisierte Vertragslaufzeit Verlängerung

# Prolongation automatisée de la durée du contrat

!!! info "Wurde zuletzt getestet für i-doit version 23"

! !! info "A été testé en dernier pour i-doit version 23"

**Use-Case:**
Der Vertrag eines Mandanten hat das letzte Kündigungsdatum überschritten und soll verlängert werden.<br>
Um den Vertrag zu verlängern, machen wir uns den Befehl `extend-contracts` zu nutze.

**Use-Case:**
Le contrat d'un client a dépassé la dernière date de résiliation et doit être prolongé.
Pour prolonger le contrat, nous utilisons la commande `extend-contracts`.

## Schritt 1: Den Vertrag `extend-contract` fähig machen

## Étape 1 : rendre le contrat capable de `extend-contract`.

Damit ein Vertrag mit dem Befehl `extend-contracts` verlängert werden kann, muss er ein paar Voraussetzungen erfüllen.<br>
Dafür müssen wir den bestehenden Vertrag erst mal editieren.<br>

Pour qu'un contrat puisse être prolongé à l'aide de la commande `extend-contracts`, il doit remplir quelques conditions.<br>
Pour cela, nous devons d'abord éditer le contrat existant.<br>

Die benötigten Einstellungen finden wir in der Objektansicht des gewünschten Vertrags,

Nous trouvons les paramètres nécessaires dans la vue de l'objet du contrat souhaité,

**Vertrag → Vertragsinformationen**

**Contrat → Informations contractuelles**

[![vertragsverlaengerung-info](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)

[ ![contrat-renouvellement-info](../assets/images/fr/applicationfaelle/automatisé-renouvellement-contrat/1-avv-uc.png)](../assets/images/fr/applicationfaelle/automatisé-renouvellement-contrat/1-avv-uc.png)

welche wir anschließend editieren:

que nous éditons ensuite :

* **Vertragslaufzeitperiode** stellen wir auf _1 Jahr_
* **Vertragsende durch** stellen wir auf _Kündigung_
* **Kündigungsdatum** bleibt leer
* **Kündigungsfrist** stellen wir auf _1 Monat_ und _zum Vertragsende_

**Période de contrat** nous réglons sur _1 an_.
**Fin de contrat par** nous mettons _Résiliation_.
**la date de résiliation** reste vide
**Délai de résiliation** nous fixons _1 mois_ et _à la fin du contrat_.

[![vertragsverlaengerung-config](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)

[ ![Vertragsverlaengerung-config](../assets/images/fr/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)](../assets/images/fr/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)

!!! info "Die Voraussetzungen um den Befehl ausführen zu können lauten wie folgt:"

! !! info "Les conditions requises pour pouvoir exécuter la commande sont les suivantes :"

```
* **Vertragslaufzeitperiode** muss ausgefüllt sein
* **Vertragsende durch** muss auf Kündigung gestellt sein
* **Kündigungsdatum** muss leer sein
* **Kündigungsfrist** muss in der Vergangenheit liegen (der gleiche Tag wie Heute geht nicht!)
```

## Schritt 2: `extend-contracts` anwenden

## Étape 2 : appliquer les `extend-contracts`.

Um den Befehl `extend-contracts` anwenden zu können, müssen wir in die [Console](../automatisierung-und-integration/cli/console/index.md).

Pour pouvoir utiliser la commande `extend-contracts`, nous devons aller dans la [Console](../automatisation-et-intégration/cli/console/index.md).

Der Befehl sieht wie folgt aus:

La commande se présente comme suit :

```shell
sudo -u www-data php console.php extend-contracts --user user --password password
```

Ist der Vertrag richtig konfiguriert, wird in der [Console](../automatisierung-und-integration/cli/console/index.md) angezeigt, dass der Vertrag um 1 Jahr verlängert wurde.

Si le contrat est correctement configuré, la [Console](../automatisation-et-intégration/cli/console/index.md) indique que le contrat a été prolongé d'un an.

[![vertragsverlaengerung-console](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)

[ ![Vertragsverlaengerung-console](../assets/images/fr/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)](../assets/images/fr/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)

## Schritt 3: Automatisieren

## Étape 3 : Automatiser

Da wir nicht jeden Tag per Hand den Befehl ausführen wollen, erstellen wir nun einen **Cronjob**.
Zuerst erstellen wir einen neuen Cronjob:

Comme nous ne voulons pas exécuter la commande manuellement tous les jours, nous créons maintenant un **Cronjob**.
Tout d'abord, nous créons une nouvelle tâche cron :

```shell
sudo nano /etc/cron.d/idoit-extend-contracts
```

In diesen Cronjob fügen wir folgenden Code ein:

Dans ce cronjob, nous insérons le code suivant :

```shell
## idoit cronjob idoit-extend-contracts

    15 6 * * * www-data php /var/www/html/i-doit/console.php extend-contracts --user user --password password
```

Mit diesem Code, wird der Cronjob jeden Tag um 6:15 Uhr ausgeführt und verlängert die Verträge automatisch, falls sie den Voraussetzungen entsprechen.<br>
Der Pfad zur [Console](../automatisierung-und-integration/cli/console/index.md) muss vollständig angegeben werden und der **Username** und das **Passwort** des Benutzer der i-doit Instanz.

Avec ce code, le cronjob sera exécuté chaque jour à 6h15 et renouvellera automatiquement les contrats s'ils répondent aux conditions requises.<br>
Le chemin vers la [Console](../automatisation-et-intégration/cli/console/index.md) doit être indiqué en entier ainsi que le **nom d'utilisateur** et le **mot de passe** de l'utilisateur de l'instance i-doit.