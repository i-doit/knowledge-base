# Événements {/events}

L'extension Événement [add-on](./index.md) permet un haut degré d'automatisation lors de la manipulation de la [documentation IT](../glossary.md). Si quelque chose est modifié dans la documentation IT, alors le système tiers sera informé de ces changements. Par exemple, si une nouvelle machine virtuelle est documentée dans i-doit, elle peut automatiquement être créée et provisionnée sur un hôte de virtualisation.

Attribution des droits
----------------------

Sous **Administration → Système d'autorisation → Droits → Événements**, les [droits des personnes et des groupes de personnes](../efficient-documentation/rights-management/index.md) peuvent être ajustés.

[![Attribution des droits](../assets/images/en/i-doit-pro-add-ons/events/1-eve.png)](../assets/images/en/i-doit-pro-add-ons/events/1-eve.png)

Configuration
-------------

La configuration est accessible via **Administration → Paramètres CMDB → Événements → Hooks**.

[![Configuration](../assets/images/en/i-doit-pro-add-ons/events/2-eve.png)](../assets/images/en/i-doit-pro-add-ons/events/2-eve.png)

!!! attention "404 Page non trouvée"

    Lorsque vous essayez d'accéder à la configuration des événements et que vous recevez un message d'erreur indiquant que la page est introuvable, cela est très probablement dû à une [configuration incorrecte du serveur web](../installation/manual-installation/system-settings.md). Le module Apache rewrite doit être activé et le traitement du fichier .htaccess dans le dossier d'installation de i-doit doit être autorisé (AllowOverride All).

Les événements sont associés à des commandes. Un événement est déclenché par un hook, une routine interne dans i-doit. Les événements suivants sont disponibles :

*   [Catégorie](../glossary.md)
    *   Créer (uniquement via l'interface web)
    *   Enregistrer
    *   Archiver/Supprimer/Restaurer/Purger
*   [Objet](../glossary.md)
    *   Créer
    *   Purger
*   [Type d'objet](../glossary.md)
    *   Créer/Enregistrer
    *   Purger

Ainsi, il existe des événements correspondants pour tous les [états de la documentation IT](../basics/life-and-documentation-cycle.md). Autant de combinaisons événement-commande que souhaité sont possibles.

La commande est exécutée immédiatement une fois que l'événement configuré se produit. Un script shell est exécuté à cette fin. Cela nécessite les droits d'exécution par l'utilisateur ou le groupe avec lesquels le serveur web fonctionne. Sur un système d'exploitation basé sur Debian, il s'agit de l'utilisateur www-data avec le groupe du même nom. Pour cette raison, le script sous GNU/Linux nécessite le bit de droit pour l'exécution (x). Le langage de programmation est arbitraire mais il doit être pris en charge par le système d'exploitation (Bash, PHP, Python, Perl, etc.).

[![command](../assets/images/en/i-doit-pro-add-ons/events/3-eve.png)](../assets/images/en/i-doit-pro-add-ons/events/3-eve.png)

Les informations sur l'événement sont référencées dans le script shell. Les informations sont encodées en JSON avec BASE64. Voici un exemple de chaîne JSON lors de l'enregistrement d'une entrée de catégorie (le décodage BASE64 a déjà eu lieu):

    {
        "success": 0,
        "objectID": "2912",
        "categoryID": 1,
        "categoryConst": "C__CATG__GLOBAL",
        "categoryDataID": "2949",
        "multivalue": false,
        "changes": [],
        "postData": {
            "data_id": "2948",
            "properties": {
                "title": {
                    "tag": "title",
                    "value": "Réseau du siège social",
                    "title": "LC__UNIVERSAL__TITLE"
                },
                "created": {
                    "tag": "created",
                    "value": "2016-04-26 14:41:01",
                    "title": "LC__TASK__DETAIL__WORKORDER__CREATION_DATE"
                },
                "created_by": {
                    "tag": "created_by",
                    "value": "admin",
                    "title": "LC__UNIVERSAL__CREATED_BY"
                },
                "changed_by": {
                    "tag": "changed_by",
                    "value": "admin",
                    "title": "LC__CMDB__LAST_CHANGE_BY"
                },
                "purpose": {
                    "tag": "purpose",
                    "value": "1",
                    "id": "1",
                    "title_lang": "LC__CMDB__CATG__PURPOSE_PRODUCTION",
                    "title": "LC__CMDB__CATG__GLOBAL_PURPOSE"
                },
                "category": {
                    "tag": "category",
                    "value": "2",
                    "id": "2",
                    "title_lang": "Démo",
                    "title": "LC__CMDB__CATG__GLOBAL_CATEGORY"
                },
                "sysid": {
                    "tag": "sysid",
                    "value": "SYSID_1461677372",
                    "title":"SYSID"
                },
                "cmdb_status": {
                    "tag": "cmdb_status",
                    "value": "6",
                    "id": "6",
                    "const": "C__CMDB_STATUS__IN_OPERATION",
                    "title_lang": "LC__CMDB_STATUS__IN_OPERATION",
                    "title": "LC__UNIVERSAL__CMDB_STATUS"
                },
                "type": {
                    "tag": "type",
                    "value": "77",
                    "id": "77",
                    "const": "C__OBJTYPE__SUPERNET",
                    "title_lang": "LC__OBJTYPE__SUPERNET",
                    "title": "LC__REPORT__FORM__OBJECT_TYPE"
                },
                "tag": {
                    "tag": "tag",
                    "title": "LC__CMDB__CATG__GLOBAL_TAG",
                    "value": []
                },
                "description": {
                    "tag": "description",
                    "title": "LC__CMDB__LOGBOOK__DESCRIPTION"
                }
            }
        },
        "data": {
            "2949":{
                "title": "Réseau du siège social",
                "status": "Normal",
                "created": "2016-04-26 14:47:57",
                "created_by": "admin",
                "changed": "2016-04-26 14:47:57",
                "changed_by": "admin",
                "purpose": "Production",
                "category": "Démo",
                "sysid": "SYSID_1461674878",
                "cmdb_status": "En fonctionnement",
                "type": "Supernet",
                "tag": null,
                "description": "",
                "_id": 2912,
                "_title": "<span class=\"hide\">Réseau du siège social<\/span><a name=\"Réseau du siège social\" href=\"?objID=2912\" id=\"lb_58_2912\">Réseau du siège social<\/a><script type='text\/javascript'>if ($('lb_58_2912')) new Tip('lb_58_2912', '', {ajax: {url: '\/i-doit\/?ajax=1&call=quick_info&objID=2912'}, delay: '0', stem: 'topLeft', style: 'default', className: 'objectinfo'});<\/script>",
                "_created": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
                "_changed": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
                "_cmdb_status": "<div class=\"cmdb-marker\" style=\"background-color:#33C20A;\"><\/div> En fonctionnement"
            }
        }
    }

Vous pouvez voir que la catégorie **Général** a été enregistrée avec succès pour l'objet "Réseau du siège social".

Des paramètres supplémentaires donnés au script shell peuvent également être définis. Ceux-ci sont statiques, en d'autres termes, sans espace réservé.

!!! success "Contrôleur i-doit"

    Les scripts shell décrits ne sont pas seulement adaptés pour contrôler des systèmes tiers mais aussi i-doit lui-même. Il n'y a aucune raison de ne pas utiliser un tel script shell pour accéder à l'outil en ligne de commande d'i-doit, le [contrôleur](../automation-and-integration/cli/index.md) ou l'[API](../i-doit-pro-add-ons/index.md). De cette manière, les tâches automatisées peuvent être gérées dans la documentation IT.

!!! success "Performance"

    Les commandes sont exécutées de manière synchrone. Par exemple, elles sont exécutées immédiatement dès que le bouton **Enregistrer** est utilisé et le système attendra que le script shell se termine. Avec de nombreux scripts shell et/ou des scripts étendus, cela ralentira l'interface web d'i-doit et affectera négativement sa convivialité. Pour cette raison, il peut être intéressant de créer une file d'attente : i-doit exécute un script shell qui charge les paramètres et les stocke dans une file d'attente (par exemple dans un fichier temporaire). Un autre script est exécuté pour traiter cette file d'attente, en utilisant un Cronjob ou quelque chose de similaire. De cette manière, un flux de travail asynchrone est créé de sorte que la convivialité d'i-doit ne soit pas sensiblement affectée.

Journalisation
-------

Lorsqu'un événement est déclenché et qu'il est lié à une commande, alors cette exécution est journalisée. Les 500 dernières entrées sont répertoriées dans **Administration → Paramètres CMDB → Événements → Historique (Journal)**.

[![Journalisation](../assets/images/en/i-doit-pro-add-ons/events/4-eve.png)](../assets/images/en/i-doit-pro-add-ons/events/4-eve.png)

Versions
--------

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.3 | 2022-09-05 | [Tâche] Modifier le lien vers la base de connaissances  <br>[Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception  <br>[Bug]  Les événements ne sont pas déclenchés lors du changement/de l'attribution des rôles |
| 1.2 |     | [Amélioration] L'événement contient des informations sur l'utilisateur  <br>[Bug] Les constantes de catégorie personnalisée ne sont pas transmises lors du classement des entrées |
| 1.1.1 | 2019-07-31 | [Bug] Menu déroulant vide dans les hooks pour les types d'objet<br> |
| 1.1 | 2019-01-30 | [Bug] La constante des catégories définies par l'utilisateur est manquante<br> |
| 1.0.1 |     | [Bug] Compatibilité avec i-doit 1.12<br> |
| 1.0 | 2018-07-03 | Première version |
