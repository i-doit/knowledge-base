# checkmk 2: Associer des objets de i-doit avec des hôtes de checkmk 

Avant d'exécuter [push](./generate-wato-configuration-base-on-cmdb-data.md) ou [pull](./import-inventory-data-into-cmdb.md), vous souhaitez jeter un coup d'œil approfondi sur l'apparence de votre infrastructure dans les deux outils i-doit et checkmk. Les commandes [fetch-objects et fetch-hosts](./read-information-from-i-doit-and-checkmk.md) vous fournissent des informations détaillées sur vos objets documentés dans i-doit ou vos hôtes surveillés dans checkmk. Mais ils ne les mettent pas en correspondance les uns avec les autres. Cela est fait par la commande match :

    idoitcmk match

Après avoir comparé chaque objet avec chaque hôte, des rapports détaillés seront imprimés :

*   Objets dans i-doit qui peuvent être mis à jour par des hôtes dans checkmk
*   Hôtes dans checkmk qui ne sont pas disponibles en tant qu'objets dans i-doit
*   Hôtes dans checkmk qui peuvent être mis à jour par des objets dans i-doit
*   Objets dans i-doit qui ne sont pas disponibles en tant qu'hôtes dans checkmk

Aucune de vos données ne sera modifiée.

Si vous augmentez la verbosité, cette commande vous donnera des indications sur ce qu'il faut faire ensuite:

    idoitcmk match -v
