<!-- TRANSLATED by md-translate -->
# Changelog 1.15.2

# Changelog 1.15.2

[Improvement][Authorization system] Creation of objects of certain object types is possible despite missing authorization<br>
[Improvement][OCS] Compatibility with new OCS versions<br>
[Bug][User settings] Validation for login passwords<br>
[Bug][Notifications] Notifications are not sent to members of a group of people<br>
[Bug][Notifications] Notifications do not send e-mails to groups, even if they match the role assignment<br>
[Bug][Notifications] Notification: Expiration of a certificate period - Despite threshold value, certificates outside the threshold value are also displayed<br>
[Bug][Notifications] Links in notifications are created incorrectly<br>
[Bug][Notifications] Notifications are sent, even if the observed objects do not match the conditions<br>
[Bug][Relations] The field "Layer 2 Net Assignment" within the "Net" category of "Layer-3 Net" objects does not create a relation to the "Layer 2 net" object<br>
[Bug][Lists] Linking manufacturer and model in object list filters<br>
[Bug][Lists] Sorting yes/no fields in object lists generates SQL errors<br>
[Bug][Export] CMDB export via XML cannot be imported into i-doit<br>
[Bug][Code (internal)] ISMS: Report with attributes "Likelihood" and "Likelihood after treatment" always shows "Likelihood"<br>
[Bug][Code (internal)] "Loose" cables cannot be connected to existing connectors<br>
[Bug][Code (internal)] The Configuration object type is not saved<br>
[Bug][Code (internal)] Selection of linked attributes is not loaded/opened when an existing placeholder is edited<br>
[Bug][Code (internal)] Sorting in the list browser of Dialog-Plus fields sorts case sensitive<br>
[Bug][Code (internal)] Tooltip is always created at the bottom right of the object during mouse-over<br>
[Bug][Code (internal)] Linked database in the database category does not refer to the database<br>
[Bug][Categories] Selection for DBMS of category "Instance / Oracle database" shows archived/deleted entries<br>
[Bug][Categories] Information about Achievement certificate is reset when editing<br>
[Bug][Categories] Softwareversion of DBMS not included in selection<br>
[Bug][Categories] Automatic update of status and CMDB-status of outdated contracts<br>
[Bug][Categories] The list view of the category Network > Port overview shows VLAN Layer-2 and Layer-3 networks not line-separated<br>
[Bug][Categories] Backward category "Assigned subscriptions" shows no entries<br>
[Bug][Categories] Used databases for software assignments are not displayed in the software installation<br>
[Bug][Categories] Category "Workplace components" shows archived and deleted items<br>
[Bug][Report-Manager] Some attributes cause a lot of empty pages in report results<br>
[Bug][Report-Manager] User without rights to edit all reports of one category can not edit a report from list<br>
[Bug][Report-Manager] Rework all the attributes of the subcategory "Databases" from the folder "Databases" for the Report Manager.<br>
[Bug][Report-Manager] Report Manager: PDF export ASCII diagram is not displayed correctly<br>
[Bug][Report-Manager] Report Manager: Condition Location:Assembly > Vertical cannot be selected<br>
[Bug][Report-Manager] Reports: Reports with output with location:mounting information ignores the value "Vertical<br>
[Bug][Import] Database Error in OCS Import<br>
[Bug][Import] CSV Import: Operating system and version are not assigned<br>
[Bug][Import] Assign CSV import attributes as linked objects, with automatic object type selection does not work correctly<br>
[Bug][JDisc] Content from category "location" is overwritten/deleted when performing a JDisc import<br>
[Bug][JDisc] JDISC: Location of imported objects in enclosures with unpositioned objects will be removed<br>
[Bug][List editing] Field for notice period value of contracts missing in list edit<br>
[Bug][Custom categories] Content of custom multi value categories are not shown on overview page<br>
[Bug][Logbook] No logbook entry is created for the Connected Object when a connection is created via the category Network > Port<br>
[Bug][Logbook] The logbook contains the ID instead of the object name of a location after change<br>
[Bug][H-Inventory] Error when importing h-inventory XML-files<br>
[Bug][CSV Import] Memory usage for CSV import<br>
[Bug][CSV Import] CSV Import: Category Databases > Database Attributes Assigned DBMS missing<br>
[Bug][CSV Import] CSV Import: Attribute missing Import Server > DBMS > DBMS<br>
[Bug][CSV Import] CSV Import: Object type> Database schema specific category > Database schema is not available for import<br>
[Bug][Installation] Installation script does not use given database user for configuration<br>
[Bug][Installation] Operating system check from the i-doit installation marks unsupported operating systems as OK<br>
[Bug][Search] Search for host address -> Alias shows the language constant of the alias<br>

[Improvement][Authorization system] La création d'objets de certains types d'objets est possible malgré l'absence d'autorisation<br>.
[Improvement][OCS] Compatibilité avec les nouvelles versions d'OCS<br>
[Bug][User settings] Validation pour les mots de passe de connexion<br>
[Bug][Notifications] Les notifications ne sont pas envoyées aux membres d'un groupe de personnes<br>
[Bug][Notifications] Les notifications n'envoient pas d'e-mails aux groupes, même s'ils correspondent à l'attribution de rôle<br>
[Bug][Notifications] Notification : Expiration d'une période de certificat - Malgré la valeur seuil, les certificats en dehors de la valeur seuil sont également affichés<br>.
[Bug][Notifications] Les liens dans les notifications sont créés de manière incorrecte<br>.
[Bug][Notifications] Les notifications sont envoyées même si les objets observés ne correspondent pas aux conditions<br>.
[Bug][Relations] Le champ "Layer 2 Net Assignment" dans la catégorie "Net" des objets "Layer-3 Net" ne crée pas de relation avec l'objet "Layer 2 net"<br>
[Bug][Lists] Lien entre le fabricant et le modèle dans les filtres de liste d'objets<br>
[Bug][Lists] Trier les champs oui/non dans les listes d'objets génère des erreurs SQL<br>
[Bug][Export] CMDB export via XML ne peut pas être importé dans i-doit<br>
[Bug][Code (interne)] ISMS : Rapport avec attributs "Likelihood" et "Likelihood after treatment" affiche toujours "Likelihood"<br>
[Bug][Code (internal)] Les câbles "lâches" ne peuvent pas être connectés aux connecteurs existants<br>
[Bug][Code (internal)] Le type d'objet de configuration n'est pas sauvegardé<br>
[Bug][Code (internal)] La sélection des attributs liés n'est pas chargée/ouverte lorsqu'un porte-place existant est édité<br>.
[Bug][Code (internal)] Le tri dans le navigateur de liste des champs Dialog-Plus trie les cas sensibles<br>.
[Bug][Code (interne)] L'info-bulle est toujours créée en bas à droite de l'objet lors d'un mouse-over<br>
[Bug][Code (interne)] Base de données liée dans la catégorie base de données ne fait pas référence à la base de données<br>
[Bug][Categories] La sélection pour le SGBD de la catégorie "Instance / Oracle database" montre des entrées archivées/supprimées<br>
[Bug][Categories] L'information sur le certificat de réussite est réinitialisée lors de l'édition<br>.
[Bug][Categories] Version logicielle du SGBD non incluse dans la sélection<br>
[Bug][Categories] Mise à jour automatique du statut et du statut CMDB des contrats obsolètes<br>
[Bug][Categories] La vue de la liste de la catégorie Réseau > Vue d'ensemble des ports montre les réseaux VLAN couche 2 et couche 3 non séparés en ligne<br>
[Bug][Categories] La catégorie précédente "Assigned subscriptions" ne montre pas d'entrées<br>.
[Bug][Categories] Les bases de données utilisées pour les affectations logicielles ne sont pas affichées dans l'installation du logiciel<br>.
[Bug][Categories] La catégorie "Workplace components" affiche les éléments archivés et supprimés<br>.
[Bug][Gestionnaire de rapports] Certains attributs provoquent un grand nombre de pages vides dans les résultats des rapports<br>.
[Bug][Gestionnaire de rapports] Les utilisateurs n'ayant pas les droits d'éditer tous les rapports d'une catégorie ne peuvent pas éditer un rapport à partir de la liste<br>.
[Bug][Gestionnaire de rapports] Revoir tous les attributs de la sous-catégorie "Bases de données" du dossier "Bases de données" pour le Gestionnaire de rapports.<br>
[Bug][Report Manager] Report Manager : Le diagramme ASCII PDF export ne s'affiche pas correctement<br>.
[Bug][Report-Manager] Report Manager : Condition Location:Assembly > Vertical ne peut être sélectionnée<br>
[Bug][Report Manager] Reports : Rapports avec sortie avec information location:mounting ignore la valeur "Vertical<br>".
[Bug][Import] Erreur de base de données dans OCS Import<br>
[Bug][Import] CSV Import : Le système d'exploitation et la version ne sont pas assignés<br>
[Bug][Import] Affectation des attributs CSV importés comme objets liés, avec sélection automatique du type d'objet ne fonctionne pas correctement<br>
[Bug][JDisc] Le contenu de la catégorie "Emplacement" est écrasé/supprimé lors de l'exécution d'une importation JDisc<br>.
[Bug][JDisc] JDISC : L'emplacement des objets importés dans des enclos avec des objets non positionnés sera supprimé<br>
[Bug][List editing] Champ pour la valeur de la période de préavis des contrats manquant dans l'édition de liste<br>
[Bug][Custom categories] Le contenu des catégories multi-valeurs personnalisées n'est pas affiché sur la page d'aperçu<br>.
[Bug][Logbook] Aucune entrée de logbook n'est créée pour l'objet connecté lorsqu'une connexion est créée via la catégorie Réseau > Port<br>.
[Bug][Logbook] Le logbook contient l'ID au lieu du nom de l'objet d'un lieu après modification<br>
[Bug][H-Inventory] Erreur lors de l'importation de fichiers XML h-inventory<br>
[Bug][CSV Import] Utilisation de la mémoire pour l'importation de CSV<br>
[Bug][CSV Import] CSV Import : Category Databases > Database Attributes Assigned DBMS missing<br>
[Bug][CSV Import] CSV Import : Attribute missing Import Server > DBMS > DBMS<br>
[Bug][CSV Import] CSV Import : Object type> Database schema specific category > Database schema is not available for import<br>
[Bug][Installation] Le script d'installation n'utilise pas l'utilisateur de base de données donné pour la configuration<br>
[Bug][Installation] La vérification du système d'exploitation à partir de l'installation i-doit indique que les systèmes d'exploitation non pris en charge sont OK<br>.
[Bug][Search] Recherche de l'adresse de l'hôte -> Alias indique la constante de langue de l'alias<br>