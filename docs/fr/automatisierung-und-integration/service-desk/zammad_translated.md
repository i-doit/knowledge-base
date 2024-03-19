<!-- TRANSLATED by md-translate -->
# Zammad

# Zammad

[Zammad](https://zammad.com/) ist eine Web-Applikation für den Service Desk. Es ist in der Lage, auf Informationen zu Objekten aus i-doit zuzugreifen und diese mit Tickets zu verknüpfen. Für weitere Informationen zur Konfiguration und Nutzung von Zammad, hilft der Hersteller gerne weiter.

[Zammad](https://zammad.com/) est une application web pour le Service Desk. Elle est capable d'accéder à des informations sur des objets d'i-doit et de les associer à des tickets. Pour plus d'informations sur la configuration et l'utilisation de Zammad, le fabricant se fera un plaisir de vous aider.

i-doit bringt bereits in der Standardinstallation alle Funktionen mit, um [auf Tickets in Zammad zuzugreifen](index.md).

i-doit apporte déjà dans l'installation standard toutes les fonctions pour [accéder aux tickets dans Zammad](index.md).

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/)

Vous trouverez un exemple pratique sur notre [blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/)

## FAQ:

## FAQ :

Eine wichtige Sache die häufig vergessen wird ist, dass elasticsearch auf dem Zammad Server installiert und funktionsfähig sein muss, ohne diesen Service kann i-doit die Tickets nicht abrufen.

Une chose importante que l'on oublie souvent, c'est qu'elasticsearch doit être installé et fonctionnel sur le serveur Zammad, sans ce service, i-doit ne peut pas récupérer les tickets.

Um die Verbindung vom i-doit Server zum Zammad Server zu testen kann ein Curl verwendet werden:

Pour tester la connexion du serveur i-doit au serveur Zammad, on peut utiliser un curl :

```shell
curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'
```

Bitte den curl so erweitern, dass Sie sich authentifizieren können.

Veuillez étendre le curl de manière à pouvoir vous authentifier.