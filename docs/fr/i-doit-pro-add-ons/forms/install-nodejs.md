# Installer NodeJS

!!! attention "L'installation a été testée pour la dernière fois avec NodeJS v17.4"

Les dépendances peuvent être trouvées [ici](https://nodejs.org/en/docs/meta/topics/dependencies/).<br>
Un téléchargement manuel ainsi qu'une installation sont possibles à partir de [ici](https://nodejs.org/en/download/).

Pour l'étape suivante, nous avons besoin de cURL :

    sudo apt-get install curl

NodeJS 16.x est installé automatiquement via le gestionnaire de paquets, pour cela nous utilisons [nodesource](https://github.com/nodesource/distributions/blob/master/README.md) :

    curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -

Maintenant nous pouvons installer NodeJS :

    sudo apt-get install -y nodejs

[Continuer avec la configuration du backend des formulaires](./configure-forms-backend.md){ .md-button .md-button--primary }
