# Configurer le Backend des Formulaires

Tout d'abord, nous naviguons vers le sous-dossier Form Backend dans l'installation de i-doit :

    cd /var/www/html/src/classes/modules/forms/backend/

Nous créons une copie du modèle de configuration :

    sudo -u www-data cp .env.dist .env

En utilisant un éditeur de texte comme vi ou nano, nous éditons maintenant le fichier .env :

    sudo nano .env

!!! attention "Le 'FORMS\_SECRET' ne doit pas être vide. La clé peut être composée de caractères alphanumériques et spéciaux."

Nous définissons maintenant un FORMS\_SECRET et enregistrons le fichier.

| Clé | Valeur | Description |
| --- | --- | --- |
| FORMS\_SECRET | 'g87z$t2r346aSdas%&f52458g724g875!' | Clé pour crypter les données dans la base de données.  <br>Ne doit pas être vide !  <br>Exemple : FORMS_SECRET='h982t)24/(&%houaq3ho4' |
| FORMS\_PORT | '3000' | Port pour les connexions  <br>Exemple : FORMS_PORT='3000' |
| FORMS\_MONGO\_DB\_SERVER | 'mongodb://127.0.0.1:27017/forms' | URL et port pour se connecter au serveur MongoDB  <br>Exemple : FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms' |

Ensuite, nous créons une instance.

Pour utiliser run.sh, nous devons d'abord définir les droits d'exécution :

```bash
sudo chmod +x run.sh
```

Maintenant, nous pouvons exécuter run.sh :

```bash
sudo ./run.sh instance:create {Nom d'utilisateur} {Clé API}
```

!!!info ""
    Chaque instance de Forms a son propre API et obtient son propre {Nom d'utilisateur} et {Clé API}. Ceux-ci peuvent être définis librement et n'ont rien en commun avec l'API i-doit pro.

    Les données doivent être notées lors de l'installation, car elles doivent être saisies ultérieurement dans la configuration de l'extension Forms dans l'interface i-doit pro.

    Exemple : sudo ./run.sh instance:create forms1 abDzfk74dsfi55FOS32

Nous devons créer un service pour le backend Forms, afin qu'il s'exécute en arrière-plan.

Pour utiliser forms-service.sh, nous devons d'abord définir les droits pour l'exécuter :

```bash
sudo chmod +x forms-service.sh
```

Nous avons maintenant créé le service systemd pour le backend Forms.<br>
Le service sera activé et démarré :

```bash
sudo ./forms-service.sh
```

[ Continuer la configuration dans i-doit](./configuration-in-i-doit.md){ .md-button .md-button--primary }
```
