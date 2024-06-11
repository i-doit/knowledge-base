# Zammad

[Zammad](https://zammad.com/) est une application Web adaptée à votre service desk. Il affichera des informations sur les objets i-doit et connectera les tickets avec les objets. Pour plus d'informations sur sa configuration et son utilisation, veuillez contacter le fournisseur derrière Zammad.

Après une installation régulière, i-doit est déjà capable d'[accéder aux tickets Zammad](./index.md).

https://zammad.com/

FAQ:
----

Une chose importante qui est souvent oubliée est que Elasticsearch doit être installé et fonctionnel sur le serveur Zammad, sans ce service i-doit ne peut pas récupérer les tickets.

Pour tester la connexion du serveur i-doit au serveur Zammad, un curl peut être utilisé :

    curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'

Veuillez étendre le curl pour pouvoir vous authentifier.

{/*examples*/}
