<!-- TRANSLATED by md-translate -->
# Installation NodeJS

# Installation NodeJS

!!! attention "Die Installation wurde zuletzt mit NodeJS v17.4 getestet"

! !! attention "L'installation a été testée en dernier avec NodeJS v17.4".

Abhängigkeiten sind [hier](https://nodejs.org/en/docs/meta/topics/dependencies/) zu finden.<br>
Ein manueller Download sowie Installation ist von [hier](https://nodejs.org/en/download/) möglich.

Les dépendances se trouvent [ici](https://nodejs.org/en/docs/meta/topics/dependencies/).<br>
Un téléchargement et une installation manuels sont possibles à partir de [ici](https://nodejs.org/en/download/).

Für den nächsten Schritt benötigen wir cURL:

Pour l'étape suivante, nous avons besoin de cURL :

```
sudo apt-get install curl
```

NodeJS wird via package manager automatisch installiert dazu verwenden wir [nodesource](https://github.com/nodesource/distributions/blob/master/README.md):

NodeJS est installé automatiquement via le package manager. Pour cela, nous utilisons [nodesource](https://github.com/nodesource/distributions/blob/master/README.md) :

```
curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -
```

Nun können wir NodeJS installieren:

Nous pouvons maintenant installer NodeJS :

```
sudo apt-get install -y nodejs
```

[Weiter zur Konfiguration das Forms Backend](./konfiguration-des-forms-backend.md){ .md-button .md-button--primary }

[Continuer vers la configuration du backend Forms](./configuration-des-forms-backend.md){ .md-button .md-button--primary }