# Commands im Add-on nutzen

Commands müssen im Add-on unter folgender Ordnerstruktur angelegt werden:

    <add-on>/src/Console/Command.

Die darin in einer beliebigen Struktur angelegten Klassen sollten mit "Command" enden und müssen von der Klasse "idoit\Console\Command\AbstractCommand" erben.

Dadurch wird unter anderem automatisch der Login, die Möglichkeit eine Konfigurationsdatei (.ini) zu nutzen und der Zugriff auf den i-doit-Container gegeben.

Folgende Methoden müssen dafür implementiert werden:

| Methode | Beschreibung |
| --- | --- |
| public function getCommandName(); | Bestimmt den Namen des Commands auf der Konsole |
| public function getCommandDescription(); | Bestimmt die Beschreibung des Commands auf der Konsole |
| public function getCommandDefinition(); | Bestimmt die "InputDefinition", zum Beispiel Argumente und Optionen |
| public function isConfigurable(); | Bestimmt, ob ein Command mittels einer .ini\-Datei konfigurierbar ist |

Außerdem kann die Konstante "REQUIRES_LOGIN" überschrieben werden. Diese bestimmt, ob ein Command einen Login benötigt.

Durch Überschreiben der Methode
protected function execute(InputInterface $input, OutputInterface $output)

kann die eigentliche Funktionalität des Commands hinterlegt werden.

Anschließend ist der Command über die Kommandozeile erreichbar. Beim Aufrufen der Commands via Konsole ("php console.php command-name") muss man sich im i-doit-Installationsverzeichnis befinden, andernfalls wird der abgesetzte Befehl in Fehlern resultieren.

Die execute Methode eines Command muss (seit i-doit 1.16) immer einen Status zurückgeben (via return):

*   \Symfony\Component\Console\Command\Command::SUCCESS (oder 0) für "Erfolg"
*   \Symfony\Component\Console\Command\Command::FAILURE (oder 1) für "Fehlschlag"

Wenn diese Rückgabe fehlt wird eine Fehlermeldung ausgegeben.
