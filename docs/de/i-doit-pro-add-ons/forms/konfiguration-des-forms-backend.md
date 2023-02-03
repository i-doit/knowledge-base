  

  

Zuerst navigieren wir in den Form Backend Unterordner innerhalb der i-doit Installation:

[?](#)

`cd` `/var/www/html/src/classes/modules/forms/backend/`

  

Wir erstellen eine Kopie des Konfigurationstemplates:  

[?](#)

`sudo` `-u www-data` `cp` `.``env``.dist .``env`

  

Mit einem Texteditor wie, `vi` oder `nano,` editieren wir nun die `.env:  
`

[?](#)

`sudo` `nano .``env`

Das 'FORMS\_SECRET' darf nicht leer sein. Der Schlüssel kann aus alphanumerischen- sowie Sonderzeichen bestehen.

Wir setzen nun ein FORMS\_SECRET und speichern die Datei.

  

| Key | Wert | Beschreibung |
| --- | --- | --- |
| FORMS\_SECRET= | 'g87z$t2r346aSdas%&f52458g724g875!' | Schlüssel zum Verschlüsseln der Daten in der Datenbank  <br>Darf nicht leer sein!  <br>Zum Beispiel: `FORMS_SECRET='h982t)24/(&%houaq3ho4'` |
| FORMS\_PORT= | '3000' | Port für Verbindungen  <br>Zum Beispiel: `FORMS_PORT='3000'` |
| FORMS\_MONGO\_DB\_SERVER= | 'mongodb://127.0.0.1:27017/forms' | URL und Port zur Verbindung mit dem MongoDB Server  <br>Zum Beispiel: `FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms'` |

  
Als nächstes erstellen wir eine Instanz.

  

Um die `run.sh` zu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

[?](#)

`sudo` `chmod` `+x run.sh`

  

Jetzt können wir die run.sh ausführen:

[?](#)

`sudo` `.``/run``.sh instance:create {Benutzername} {Apikey}`

Jede Forms Instanz hat eine eigene API und bekommt einen eigenen {`Benutzernamen}` sowie {`API Key}`. Diese können frei definiert werden und haben nichts mit der i-doit pro API gemeinsam.

Die Daten müssen bei der Installation notiert werden, da sie später in der Konfiguration des Forms Add-on in der i-doit pro Oberfläche eingetragen werden müssen.

Beispiel: sudo ./run.sh instance:create forms1 abDzfk74dsfi55FOS32

  
Um die `forms-service.sh` zu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

[?](#)

`sudo` `chmod` `+x forms-service.sh`

  

Wir lassen nun den `systemd` Service für das Forms-Backend erstellen.  
Dieser wird aktiviert und gestartet: 

[?](#)

`sudo` `.``/forms-service``.sh`

[approve Weiter zur Konfiguration in i-doit](/display/de/Konfiguration+in+i-doit)