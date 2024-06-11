# Email (SMTP) {#email-smtp}

_i-doit_ est capable d'envoyer des e-mails automatiquement en cas d'événements ou d'états spécifiques.

!!! attention "Contrôleur"

    La configuration est essentielle lorsque le [contrôleur i-doit (CLI)](./cli/index.md) est utilisé avec les [notifications](,,/../../evaluation/notifications.md) ou les workflows. Sinon, aucun e-mail ne peut être envoyé !

L'intégration d'un serveur de messagerie est possible dans la **Administration** sous **Paramètres système**. Une fenêtre de configuration avec les champs suivants est disponible :

| Champ | Description |
| --- | --- |
| Hôte SMTP | Nom de l'hôte ou l'adresse IP du serveur de messagerie. |
| Port SMTP | 25 est le port standard. Le port doit être modifié en conséquence pour une connexion chiffrée ou une configuration déviante. |
| Expéditeur | Adresse e-mail d'envoi pour l'envoi d'e-mails |
| Nom | Nom de l'expéditeur pour l'envoi d'e-mails |
| Délai d'attente | Délai d'attente pour l'envoi d'e-mails |
| Débogage SMTP | Il est souvent utile d'activer la fonction de débogage pour la configuration initiale. Le journal est déposé dans le dossier log/ du dossier principal d'_i-doit_.<br><br>(par défaut : **Non**) |
| Préfixe du sujet | Entrée facultative pour un meilleur support de l'automatisation basée sur les règles du client de messagerie. |
| Modèle de notification pour le contrat de maintenance | Ce modèle était utilisé dans une version précédente et n'est plus nécessaire dans les versions actuelles d'_i-doit_.<br><br>Dans les versions actuelles, ce modèle peut être configuré dans le **Système de notifications** dans la section **Extras**. |
| Modèle de notification pour mot de passe perdu | Un artefact d'une version antérieure sans aucune fonction, peut être ignoré. |
