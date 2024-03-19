<!-- TRANSLATED by md-translate -->
# Commands im Add-on nutzen

# Utiliser les commandes dans l'add-on

Commands müssen im Add-on unter folgender Ordnerstruktur angelegt werden:

Les commandes doivent être créées dans l'add-on sous la structure de dossier suivante :

```
<add-on>/src/Console/Command.
```

Die darin in einer beliebigen Struktur angelegten Klassen sollten mit "Command" enden und müssen von der Klasse "idoit\Console\Command\AbstractCommand" erben.

Les classes qui y sont créées dans une structure quelconque doivent se terminer par "Command" et doivent hériter de la classe "idoit\Console\Command\AbstractCommand".

Dadurch wird unter anderem automatisch der Login, die Möglichkeit eine Konfigurationsdatei (.ini) zu nutzen und der Zugriff auf den i-doit-Container gegeben.

Cela permet notamment d'obtenir automatiquement le login, la possibilité d'utiliser un fichier de configuration (.ini) et l'accès au conteneur i-doit.

Folgende Methoden müssen dafür implementiert werden:

Les méthodes suivantes doivent être mises en œuvre à cet effet :

| Methode | Beschreibung |
| --- | --- |
| public function getCommandName(); | Bestimmt den Namen des Commands auf der Konsole |
| public function getCommandDescription(); | Bestimmt die Beschreibung des Commands auf der Konsole |
| public function getCommandDefinition(); | Bestimmt die "InputDefinition", zum Beispiel Argumente und Optionen |
| public function isConfigurable(); | Bestimmt, ob ein Command mittels einer .ini-Datei konfigurierbar ist |

| méthode | description |
| --- | --- |
| public function getCommandName() ; | Détermine le nom de la commande sur la console |
| public function getCommandDescription() ; | Détermine la description de la commande sur la console |
| public function getCommandDefinition() ; | Détermine la "InputDefinition", par exemple les arguments et les options |
| public function isConfigurable() ; | Détermine si une commande est configurable au moyen d'un fichier .ini |

Außerdem kann die Konstante "REQUIRES_LOGIN" überschrieben werden. Diese bestimmt, ob ein Command einen Login benötigt.

De plus, la constante "REQUIRES_LOGIN" peut être remplacée. Celle-ci détermine si une commande nécessite un login.

Durch Überschreiben der Methode
protected function execute(InputInterface $input, OutputInterface $output)

En écrasant la méthode
protected function execute(InputInterface $input, OutputInterface $output)

kann die eigentliche Funktionalität des Commands hinterlegt werden.

permet de définir la fonctionnalité proprement dite de la commande.

Anschließend ist der Command über die Kommandozeile erreichbar. Beim Aufrufen der Commands via Konsole ("php console.php command-name") muss man sich im i-doit-Installationsverzeichnis befinden, andernfalls wird der abgesetzte Befehl in Fehlern resultieren.

Ensuite, la commande est accessible via la ligne de commande. Lors de l'appel des commandes via la console ("php console.php nom-commande"), il faut se trouver dans le répertoire d'installation d'i-doit, sinon la commande envoyée aboutira à des erreurs.

Die execute Methode eines Command muss (seit i-doit 1.16) immer einen Status zurückgeben (via return):

La méthode execute d'une commande doit (depuis i-doit 1.16) toujours renvoyer un statut (via return) :

* \Symfony\Component\Console\Command\Command::SUCCESS (oder 0) für "Erfolg"
* \Symfony\Component\Console\Command\Command::FAILURE (oder 1) für "Fehlschlag"

* \Symfony\Component\Console\Command\Command::SUCCESS (ou 0) pour "succès".
* \Symfony\Component\Console\Command\Command::FAILURE (ou 1) pour "échec".

Wenn diese Rückgabe fehlt wird eine Fehlermeldung ausgegeben.

Si ce retour manque, un message d'erreur est émis.