# Service Desk

Le service desk est une interface clé avec le client dans de nombreuses organisations. Si le client a une question sur un produit, il soumet une demande à l'équipe de support. En relation avec l'ITIL, on parle également d'"incidents", en ce qui concerne les questions de développement logiciel, on parle plutôt de "problèmes". Habituellement, les demandes sont faites par e-mail ou par appel téléphonique et sont organisées en tickets. Il existe une multitude de différentes applications (web) pour soutenir un service desk. Ces applications accèdent souvent à des ressources supplémentaires (bases de données clients, etc.) pour examiner et traiter les demandes de manière exhaustive et efficace. Une ressource importante est la [documentation IT](../../glossary.md) : Si un collègue d'une division spécialisée signale une imprimante défectueuse au service informatique, la documentation IT fournit des informations utiles sur le modèle, l'emplacement, l'adresse IP, l'accès à distance et bien d'autres choses.

Applications prises en charge

L'installation par défaut d'i-doit fournit des interfaces vers plusieurs applications du domaine du service desk. 



*   [((OTRS)) Community Edition Help Desk](./otrscommunity-help-desk.md)
*   [Request Tracker (RT)](./request-tracker.md)

… et iTop.

L'installation spécifique et l'utilisation des extensions (RT) et des modules (((OTRS)) Community Edition) sont décrites dans les articles correspondants ou les liens pertinents sont inclus. Dans le texte suivant, nous nous concentrons sur la configuration et les fonctions d'i-doit.

Configuration
-------------

Vous effectuez la configuration concernant les applications mentionnées ci-dessus sous **Administration → Interfaces/ données externes → Système de gestion des incidents (SGI) → Configuration**.

[![Configuration](../../assets/images/en/automation-and-integration/service-desk/0-sd.png)](../../assets/images/en/automation-and-integration/service-desk/0-sd.png)

|     |     |
| --- | --- |
| **Option** | **Description** |
| **Type de SGI** | Quel type d'application souhaitez-vous sélectionner ? |
| **Actif** | Souhaitez-vous activer l'interface ? |
| **Nom d'utilisateur** | i-doit doit se connecter à l'application avec un utilisateur pour récupérer des données. Pour des raisons de sécurité, vous devriez choisir un utilisateur dédié. |
| **Mot de passe** | Mot de passe de l'utilisateur respectif |
| **URL incluant le protocole** | Lien vers l'interface web de l'application, par exemple [https://rt.example.org/rt](https://rt.example.org/rt) |

Lecture des Tickets
-------------------

Lorsqu'un ticket est référencé à un objet dans i-doit via l'application, vous pouvez afficher cette référence dans i-doit. Pour cela, vous devez définir l'option **Actif** sur **Oui** dans la configuration. Pour chaque objet, vous pouvez accéder à la catégorie **Tous les tickets** avec l'icône de bulle de dialogue [![icon](../../assets/images/en/automation-and-integration/service-desk/1-sd.png)](../../assets/images/en/automation-and-integration/service-desk/1-sd.png).

[![Lecture des Tickets](../../assets/images/en/automation-and-integration/service-desk/2-sd.png)](../../assets/images/en/automation-and-integration/service-desk/2-sd.png)

Cette catégorie répertorie tous les tickets référencés et affiche des détails supplémentaires sur chaque ticket. En cliquant sur le ticket, vous pouvez l'ouvrir dans l'interface web de l'application de service desk.

Créer un Nouveau Ticket
-------------------

Vous pouvez également créer un nouveau ticket avec la catégorie **Tous les tickets**. Lorsque vous cliquez sur le bouton **Créer un ticket** dans la partie supérieure de la fenêtre, le formulaire web de l'application de service desk s'ouvre et référence l'objet pour lequel vous souhaitez créer un ticket.

Si vous utilisez l'application [Request Tracker (RT)](./request-tracker.md), vous devez également choisir la file à laquelle le ticket est attribué. La configuration des files prédéfinies est effectuée avec **Administration → Paramètres système → Paramètres système → Files Request Tracker**. Ici, vous saisissez les files de manière séparée par des virgules.

Entrées de journal pour les tickets
-----------------------------------

Lorsque vous créez ou gérez un ticket dans l'application de service desk et qu'au moins un objet de i-doit est référencé dans le processus, vous pouvez retracer cela dans le [journal](../../basics/logbook.md) par la suite.

[![Entrées de journal pour les tickets](../../assets/images/en/automation-and-integration/service-desk/3-sd.png)](../../assets/images/en/automation-and-integration/service-desk/3-sd.png)
