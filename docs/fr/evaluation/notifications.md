# Notifications

Dans cet article, nous décrivons le module de notifications, qui a pour but de vérifier diverses données dans la documentation informatique et d'envoyer des e-mails en cas d'événements spécifiques. Le module se compose de types de notifications particuliers, de la configuration de ces types de notifications, de modèles d'e-mails et enfin de l'exécution régulière du [contrôleur](../i-doit-pro-add-ons/api/index.md).

Types de Notifications
----------------------

Vous pouvez effectuer les paramétrages de configuration à **Extras → CMDB → Notifications**.

Actuellement, vous pouvez choisir parmi les types de notifications suivants :

*   **Expiration d'une période de préavis**  
    Vérifie les contrats pour la période jusqu'à l'expiration du préavis
    

*   **Expiration d'une période de maintenance/garantie**  
    Vérifie les contrats pour la période jusqu'à l'expiration de la période de maintenance/garantie
    

*   **Expiration d'une période de certification**  
    Vérifie tous les types d'objets associés à la catégorie "certificat" pour la date d'expiration du certificat

{/*examples*/}

*   **État de la CMDB - Fin**  
    Utile pour la catégorie "planification de l'état". Cette notification vous informe d'un état de la CMDB planifié qui va se terminer.
    

*   **État de la CMDB - Début**  
    Utile pour la catégorie "planification de l'état". Cette notification vous informe d'un état de la CMDB planifié qui va commencer.
    

*   **Licences gratuites**  
    Vérifie les licences pour le nombre de licences disponibles restantes.
    

*   **Objets stockés**  
    Vérifie tout type d'objet pour le nombre d'objets contenus avec le statut "stocké".
    

*   **Expiration de licence**  
    Vérifie les licences pour la période jusqu'à leur expiration.
    

*   **Notification basée sur un rapport**  
    Exécute des rapports et vous informe une fois qu'un nombre personnalisé d'objets trouvés est atteint.
    

*   **Objets inchangés**  
    Vérifie les objets qui n'ont pas été modifiés dans une période de temps définie par l'utilisateur. Peut être utile pour trouver des données très anciennes et les mettre à jour dans les processus.
    

*   **Objets modifiés**  
    Vérifie les objets qui ont été modifiés dans une période de temps définie par l'utilisateur. Par exemple, une liste quotidienne de tous les objets modifiés au cours des dernières 24 heures peut être générée.

*   **Mise à jour de i-doit**  
    Vérifie s'il existe une nouvelle version de i-doit pro disponible. i-doit nécessite une connexion internet pour le faire.
    
!!! info "Notification basée sur le rapport"

    Le type de notification "notification basée sur le rapport" peut être utilisé de manière très flexible et peut envoyer des notifications appropriées pour presque tous les événements et statuts.

Configuration
-----

La configuration des notifications suit toujours le même schéma. Les paramètres généraux, tels qu'une valeur seuil, une limite de notifications, les objets qui seront surveillés et les contacts à notifier, sont définis.

### Paramètres généraux

Le \* constitue un champ obligatoire dans i-doit.

*   **Nom****\***  
    Idéalement, le nom devrait avoir une désignation significative.
    
*   **Activation****\***  
    Vous pouvez cocher la case pour l'activation ou vous pouvez désactiver les notifications.
    
*   **Valeur seuil**  
    La valeur seuil varie en fonction de la possibilité de définir un facteur temps (X années/ mois/ jours/ heures/ minutes/ secondes) ou un compteur (nombre d'objets trouvés) pour la notification. Au-dessus des paramètres se trouve une brève explication de la notification ainsi que des informations sur ce qui est exactement vérifié par la valeur seuil.

*   **Max.** **montant** **de notifications à envoyer****\***  
    Dans le cas où la notification est vérifiée plusieurs fois et qu'un objet est trouvé plusieurs fois, vous pouvez définir une limite ici. Dès que la valeur limite est atteinte, aucune autre notification ne sera envoyée. Tout ce qui est inférieur ou égal à 0 signifie que les notifications continueront jusqu'à ce que l'objet ou les objets soient modifiés de sorte que la notification ne soit plus valide.  
      
    Exemple : Si les vérifications et les notifications sont effectuées chaque jour et qu'un 5 est saisi dans ce champ, alors les notifications s'arrêteront après 5 jours.  
      
    Le compteur sera remis à 0 si l'objet ne peut plus être trouvé par cette notification, par exemple, lorsque l'objet est mis à jour ou après que le nombre maximum de notifications a été atteint.
    
*   **Nombre de notifications envoyées**  
    Cet affichage est purement informatif et est soit augmenté lorsqu'une notification est envoyée, soit réinitialisé s'il n'y en a pas d'envoyée.
    
*   **Dat****e de la dernière vérification**  
    Également purement à des fins d'information. Il montre la dernière fois qu'une vérification a été effectuée.

*   **Description**  
    Ce champ est un champ de texte libre pour une description de la notification.

### Domaines

Les objets à vérifier par la notification peuvent être sélectionnés spécifiquement ou selon un motif dans les domaines.

*   **Objets**  
    Un ou plusieurs objets peuvent être sélectionnés via la loupe.
    
*   **Types d'objets**  
    Tous les objets d'un ou de plusieurs types d'objets sélectionnés peuvent être vérifiés ici.
    
*   **Rapports**  
    Les notifications peuvent être encore plus spécifiques avec un rapport.  
    Exemple : L'objectif est de vérifier s'il reste suffisamment de licences gratuites qui coûtent plus de 150 EUR par licence, car un processus plus long s'applique ici par rapport aux licences moins chères. Ensuite, un deuxième rapport peut être créé et utilisé dans une autre notification pour interroger les licences moins chères et effectuer une notification ultérieurement. Veuillez vraiment faire attention au domaine et aux catégories interrogées attribuées aux types d'objets!

!!! info "Types d'objets restreints"

    Seuls certains types d'objets sont pris en charge, en fonction du type de notification. Par exemple, lors de la vérification des contrats, seuls les objets de type "Contrat" et lors de la vérification des licences, seuls les objets de type "Licence" peuvent être choisis.

### Destinataire {/ * exemples * /}

Vous pouvez également notifier les destinataires de manière spécifique ou collective.

* **Rôles assignés**  
    Lorsqu'un objet est trouvé avec la notification configurée, vous pouvez informer le contact qui est assigné à l'objet dans le rôle défini ici.  
    Exemple : Le contact documenté avec le rôle de "Partenaire contractuel" peut être notifié via la catégorie "Affectation de contact" dans le contrat.
    
* **Contacts assignés**  
    Il est également possible de notifier un ou plusieurs contacts/groupes de personnes ou organisations. Il est important pour cela qu'une adresse e-mail définie soit associée à chaque objet contact.
    
* **Stratégie de calcul du destinataire**  
    **Stratégie de calcul utilisée pour les destinataires lors de la résolution des groupes de personnes en personnes. Ce paramètre n'affecte que les groupes de personnes assignés en tant que contacts.
    
      
    
    | Stratégie | Description |
    | --- | --- |
    | \-  | C'est la valeur par défaut = Groupes si disponibles, sinon personnes assignées |
    | Groupes et Personnes | L'adresse e-mail principale du groupe de personnes et de chaque membre du groupe de personnes est notifiée. |
    | Groupes si disponibles, sinon personnes assignées | Si le groupe de personnes a enregistré une adresse e-mail principale, celle-ci sera notifiée.  <br>Si le groupe de personnes n'a PAS d'adresse e-mail principale, l'adresse e-mail principale de chaque membre du groupe de personnes sera notifiée. |
    | Uniquement les groupes | Les groupes de personnes avec une adresse e-mail principale seront notifiés. |
    | Uniquement les personnes | Les membres du groupe de personnes avec une adresse e-mail principale seront notifiés. |

    
Modèles d'e-mail
----------------

Les modèles correspondant aux notifications peuvent être sélectionnés et ajustés pour la langue allemande ou anglaise dans l'arborescence de navigation de gauche. Cela s'applique toujours globalement à tous les utilisateurs et en raison de cela, vos ajustements ne doivent pas être trop spécifiques. Il n'y a pas de possibilité de réinitialiser le modèle par défaut. Que le message en allemand ou en anglais soit envoyé dépend des paramètres de l'utilisateur du contact qui sera notifié. Si cet utilisateur ne s'est jamais connecté à i-doit, la langue par défaut d'i-doit est utilisée pour la notification.

*   **Langue**  
    La langue actuellement en cours d'édition est affichée.
    
*   **Sujet**  
    Le sujet du message peut être personnalisé avec des espaces réservés de la section inférieure de l'interface.
    
*   **Texte de notification**  
    Le texte peut être assemblé avec des espaces réservés tout comme le sujet.
    
*   **Rapport**  
    Un rapport pour l'e-mail peut être défini ici, qui est ensuite utilisé pour organiser les informations d'objet trouvées dans la notification.

Configuration de l'appel avec la Console i-doit
-------------------------------------------------

Pour garantir que les notifications de configuration sont également vérifiées régulièrement, la [Console](../console/../automation-and-integration/cli/index.md) i-doit doit être exécutée avec la commande **[notifications-send](../automation-and-integration/cli/console/options-and-parameters-cli.md#notifications-send)**, par exemple en tant que tâche cron. Il n'est pas possible d'appeler chaque notification individuellement, mais toutes les notifications sont toujours vérifiées automatiquement les unes après les autres. Il est judicieux de considérer à quelle fréquence le nombre maximum de vérifications doit être effectué. Selon notre expérience, il s'est avéré utile de vérifier chaque jour peu de temps avant le début du travail, de sorte qu'il soit immédiatement clair le matin sur quoi vous devriez travailler pendant la journée.

!!! info "Astuce"

    Sans un appel de la commande via la [Console](../console/../automation-and-integration/cli/index.md) i-doit, aucune notification n'est envoyée !

Les paramètres possibles ainsi qu'un exemple d'appel pour l'envoi de notifications peuvent être trouvés dans l'[article correspondant](,/../notifications.md) pour la commande **[notifications-send](../automation-and-integration/cli/console/options-and-parameters-cli.md#notifications-send)**.

!!! info "Niveaux d'escalade"

    Vous pouvez mapper les niveaux d'escalade en utilisant le module de notification. Pour cela, vous devez configurer plusieurs notifications avec des groupes de destinataires différents et des valeurs de seuil différentes pour les mêmes types de notifications.

**Exemple d'utilisation**

    sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1

{/*examples*/}
