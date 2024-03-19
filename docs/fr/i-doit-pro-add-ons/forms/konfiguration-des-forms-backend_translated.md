<!-- TRANSLATED by md-translate -->
# Konfiguration das Forms Backend

# Configuration du backend Forms

Zuerst navigieren wir in den Form Backend Unterordner innerhalb der i-doit Installation:

Tout d'abord, nous naviguons dans le sous-dossier Form Backend au sein de l'installation i-doit :

```
cd /var/www/html/src/classes/modules/forms/backend/
```

Wir erstellen eine Kopie des Konfigurationstemplates:

Nous créons une copie du modèle de configuration :

```
sudo -u www-data cp .env.dist .env
```

Mit einem Texteditor wie, vioder nano, editieren wir nun die .env:

Avec un éditeur de texte comme, vioder nano, nous éditons maintenant le .env :

```
sudo nano .env
```

!!! attention "Das 'FORMS_SECRET' darf nicht leer sein. Der Schlüssel kann aus alphanumerischen- sowie Sonderzeichen bestehen."

! !! attention "Le 'FORMS_SECRET' ne doit pas être vide. La clé peut être composée de caractères alphanumériques et spéciaux".

Wir setzen nun ein FORMS_SECRET und speichern die Datei.

Nous plaçons maintenant un FORMS_SECRET et enregistrons le fichier.

| Key | Wert | Beschreibung |
| --- | --- | --- |
| FORMS_SECRET= | 'g87z$t2r346aSdas%&f52458g724g875!' | Schlüssel zum Verschlüsseln der Daten in der Datenbank  <br>Darf nicht leer sein!  <br>Zum Beispiel: FORMS_SECRET='h982t)24/(&%houaq3ho4' |
| FORMS_PORT= | '3000' | Port für Verbindungen  <br>Zum Beispiel: FORMS_PORT='3000' |
| FORMS_MONGO_DB_SERVER= | 'mongodb://127.0.0.1:27017/forms' | URL und Port zur Verbindung mit dem MongoDB Server  <br>Zum Beispiel: FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms' |

| clé | valeur | description |
| --- | --- | --- |
| FORMS_SECRET= | 'g87z$t2r346aSdas%&f52458g724g875 ! | Clé pour crypter les données dans la base de données <br>Ne doit pas être vide !  <br>Par exemple : FORMS_SECRET='h982t)24/(&%houaq3ho4' |
| FORMS_PORT= | '3000' | Port pour les connexions <br>Par exemple : FORMS_PORT='3000' |
| FORMS_MONGO_DB_SERVER= | 'mongodb://127.0.0.1:27017/forms' | URL et port de connexion au serveur MongoDB <br>Par exemple : FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms' |

Als nächstes erstellen wir eine Instanz.

Ensuite, nous créons une instance.

Um die run.sh zu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

Pour utiliser le run.sh, nous devons d'abord définir les droits d'exécution :

```
sudo chmod +x run.sh
```

Jetzt können wir die run.sh ausführen:

Nous pouvons maintenant exécuter le run.sh :

```
sudo ./run.sh instance:create {Benutzername} {Apikey}
```

!!! info ""
    Jede Forms Instanz hat eine eigene API und bekommt einen eigenen {Benutzernamen} sowie {API Key}. Diese können frei definiert werden und haben nichts mit der i-doit pro API gemeinsam.
    Die Daten müssen bei der Installation notiert werden, da sie später in der Konfiguration des Forms Add-on in der i-doit pro Oberfläche eingetragen werden müssen.
    Beispiel: sudo ./run.sh instance:create forms1 abDzfk74dsfi55FOS32

! !! info ""
    Chaque instance Forms a sa propre API et reçoit un {nom d'utilisateur} et une {clé API}. Ceux-ci peuvent être définis librement et n'ont rien en commun avec l'API i-doit pro.
    Les données doivent être notées lors de l'installation, car elles devront être saisies plus tard dans la configuration du module complémentaire Forms dans l'interface i-doit pro.
    Exemple : sudo ./run.sh instance:create forms1 abDzfk74dsfi55FOS32

Um die forms-service.shzu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

Pour utiliser forms-service.sh, nous devons d'abord définir les droits d'exécution :

```
sudo chmod +x forms-service.sh
```

Wir lassen nun den systemd Service für das Forms-Backend erstellen.<br>
Dieser wird aktiviert und gestartet:

Nous faisons maintenant créer le service systemd pour le backend Forms.<br>
Celui-ci est activé et démarré :

```
sudo ./forms-service.sh
```

[Weiter zur Konfiguration in i-doit](./konfiguration-in-i-doit.md){ .md-button .md-button--primary }

[Continuer vers la configuration dans i-doit](./configuration-in-i-doit.md){ .md-button .md-button--primary }