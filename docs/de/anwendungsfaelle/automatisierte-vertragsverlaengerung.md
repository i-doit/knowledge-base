# Automatisierte Vertragslaufzeit Verlängerung

!!! info "Wurde zuletzt getestet für i-doit version 23"

**Use-Case:**
Der Vertrag eines Mandanten hat das letzte Kündigungsdatum überschritten und soll verlängert werden.
Um den Vertrag zu verlängern, machen wir uns den Befehl `extend-contracts` zu nutze.

## Schritt 1: Den Vertrag `extend-contract` fähig machen

Damit ein Vertrag mit dem Befehl `extend-contracts` verlängert werden kann, muss er ein paar Vorraussetzungen erfüllen.
Dafür müssen wir den bestehenden Vertrag erstmal editieren.

Die benötigten Einstellungen finden wir in der Objektansicht des gewüschten Vertrags,

**Vertrag → Vertragsinformationen**

[![vertragsverlaengerung-info](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)

welche wir anschließend editieren:

* **Vertragslaufzeitperiode** stellen wir auf *1 Jahr*
* **Vertragsende durch** stellen wir auf *Kündigung*
* **Kündigungsdatum** bleibt leer
* **Kündigungsfrist** stellen wir auf *1 Monat* und *zum Vertragsende*

[![vertragsverlaengerung-config](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)

!!! info "Die Vorraussetzungen um den Befehl ausführen zu können lauten wie folgt:"

    * **Vertragslaufzeitperiode** muss ausgefüllt sein
    * **Vertragsende durch** muss auf Kündigung gestellt sein
    * **Kündigungsdatum** muss leer sein
    * **Kündigungsfrist** muss in der Vergangenheit liegen (der gleiche Tag wie Heute geht nicht!)

## Schritt 2: `extend-contracts` anwenden

Um den Befehl `extend-contracts` anwenden zu können, müssen wir in die [Console](../automatisierung-und-integration/cli/console/index.md).

Der Befehl sieht wie folgt aus:

```shell
    sudo -u www-data php console.php extend-contracts --user user --password password
```

Ist der Vertrag richtig konfiguriert, wird in der [Console](../automatisierung-und-integration/cli/console/index.md) angezeigt, dass der Vertrag um 1 Jahr verlängert wurde. 

[![vertragsverlaengerung-console](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)

## Schritt 3: Automatisieren

Da wir nicht jeden Tag per Hand den Befehl ausführen wollen, erstellen wir nun einen **Cronjob**.
Zuerst erstellen wir einen neuen Cronjob:

```shell
    sudo nano /etc/cron.d/idoit-extend-contracts
```

In diesen Cronjob fügen wir folgenden Code ein:

```shell
    ## idoit cronjob idoit-extend-contracts

    15 6 * * * www-data php /var/www/html/i-doit/console.php extend-contracts --user user --password password
```

Mit diesem Code, wird der Cronjob jeden Tag um 6:15 Uhr ausgeführt und verlängert die Verträge automatisch, falls sie den Voraussetzungen entsprechen.
Wichtig ist nur das der Pfad zur [Console](../automatisierung-und-integration/cli/console/index.md) richtig angegeben ist und das man den **Username** und das **Passwort** der Idoit-Instanz nutzt.
