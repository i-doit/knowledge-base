<!-- TRANSLATED by md-translate -->
# Changelog 1.19

# Changelog 1.19

[Task][Application Redesign]   Redesign the i-doit application<br>
[Task][Code (Internal)]        Implement a way to inject menus to the administration area<br>
[Task][System tools]           Add function in the administration area to clean up unfinished / deleted dialog entries<br>
[Task][CMDB]                   Rename “Layer-2 Network” into “Layer-2 Network Assignment” from Category Network » Port<br>
[Improvement][System settings] Option to disable validation for MAC-addresses<br>
[Improvement][System settings] New Configuration Translation<br>
[Improvement][System settings] Definition of default language<br>
[Improvement][Categories]      Hide attributes from categories<br>
[Improvement][Categories]      New optional field "Last Login" in category "Login" of Users/Persons<br>
[Improvement][Report-Manager]  Reports can now be imported and exported<br>
[Bug][Categories]              Custom Counter are not available for manual input into inventory attribute number<br>
[Bug][Categories]              Error when trying to assign a new workstation on overview page<br>
[Bug][System tools]            Missing preview icons for removing unfinished/archived/deleted category entries<br>
[Bug][Report-Manager]          Location tree is broken<br>
[Bug][Report-Manager]          Placeholder "after current date" isn't working in reports<br>
[Bug][Report-Manager]          Connection endpoint not queryable in reports<br>
[Bug][Report-Manager]          Checkbox in report causes error<br>
[Bug][Report-Manager]          Placeholder "unequal object id" does not work correctly<br>
[Bug][Report-Manager]          Operators missing for operating system>version number in report conditions<br>
[Bug][Report-Manager]          Wrong output in reports of vertically assembled objects in racks<br>
[Bug][Report-Manager]          Operators missing for Memory>Capacity<br>
[Bug][Report-Manager]          Saving a report with operator "subcnd" does not work<br>
[Bug][Report-Manager]          Wrong query when using yes/no field in conditions<br>
[Bug][Report-Manager]          Operating system > version is not displayed in Report Manager<br>
[Bug][Console]                 Commands can not be executed in i-doit OPEN<br>
[Bug][CMDB]                    End of contract is not calculated automatically, when adding contract details via Forms Add-on<br>
[Bug][CMDB]                    Archived/Deleted objects are also displayed in assigned objects<br>
[Bug][CMDB]                    Settings for location path do not apply to location paths in report results<br>
[Bug][CSV Import]              CSV Import via Console does not work<br>
[Bug][CSV Import]              CSV Export of report inserts constant instead of entry<br>
[Bug][CSV Import]              Object relations are not assigned when using automatic option<br>
[Bug][CSV Import]              Contract assignment does not import correctly via CSV<br>
[Bug][Connector cabling]       Editing connectors causes error<br>
[Bug][API]                     Changing the object type via the API is no longer possible<br>
[Bug][API]                     Dialog+ entries with a relation can not be set with one API request into the category<br>
[Bug][Templates]               Error when creating objects from templates using a %COUNTER%<br>
[Bug][Templates]               Template for persons does not take over data from the categories Persons > Person group membership, Persons > Master data<br>
[Bug][Import]                  CSV Import: Importing a Layer 2 Net twice creates a random Layer-3-net assignment<br>
[Bug][Import]                  The XML import does not create CMDB statuses<br>
[Bug][Import]                  Method storageModel_import missing<br>
[Bug][Code (Internal)]         Updating with wrong row_size for Table isys_cats_person_list<br>
[Bug][Code (Internal)]         Using a custom counter in a text field from a custom category results in a SQL error<br>
[Bug][Code (Internal)]         "tenant-create" command does not check if the provided database user already exists<br>
[Bug][Code (Internal)]         Performance loss by adding the OBJ_OWNER in version 1.18<br>
[Bug][Code (Internal)]         Create missing foreign key<br>
[Bug][Code (Internal)]         DropDown menu of tenant selection closes on loss of focus<br>
[Bug][Authorization system]    Custom Counter can be edited/created without permissions<br>
[Bug][Authorization system]    Via Person group authorized parameters are not correctly displayed in the Person rights view<br>
[Bug][LDAP]                    Direct client forwarding with tenant_id does not work with SSO<br>
[Bug][LDAP]                    Tenant change via LDAP User and active SSO does not work<br>
[Bug][LDAP]                    LDAP-Caching mechanism does not work because of different admin password hashes<br>
[Bug][List editing]            Solving software assignments via list editing generates an SQL error message<br>
[Bug][List editing]            Specific category master data from organisation is not visible in list edit<br>
[Bug][List editing]            Endless loading when adding new values in list edit<br>
[Bug][List editing]            Applications can not be detached in list edit<br>
[Bug][List editing]            SQL Error when detaching operating system in list edit<br>
[Bug][List editing]            Selecting values in list-edit without creating entries first can result in errors<br>
[Bug][Mass editing]            Mass change - license assignment/application is not set in software assignment<br>
[Bug][Lists]                   HTML from WYSIWYG fields is not displayed in object lists<br>
[Bug][Lists]                   Listview - Colum "object" shows archived objects in workstation<br>
[Bug][Lists]                   Filter for dialog+ fields in custom categories does not work for handling (API+ Import full)<br>
[Bug][Lists]                   SQL Error when adding attribute role to list view<br>
[Bug][Lists]                   Person groups>Number of members not sortable in list view<br>
[Bug][Lists]                   SQL-Error when filtering all fields in a Object list with Attribute Condition (General)<br>
[Bug][Lists]                   Filter for capacity does not work correctly<br>
[Bug][Lists]                   "Installed at" in Application is not displayed in list view<br>
[Bug][Lists]                   Double scrollbar and number of pages not visible<br>
[Bug][QR-Codes]                QR-Code preview doesn't load correctly<br>
[Bug][QR-Codes]                QR-Codes in preview do not match the ones in the popup<br>
[Bug][Admincenter]             Uninstall Add-on leads to a HTTP 500 error<br>
[Bug][Admincenter]             "No such file or directory" error when using "" in password for the MySQL User<br>
[Bug][Check_MK]                Unnecessary use Statement in isys_cmdb_dao_category_s_person.class.php creates PHP Warning<br>
[Bug][Custom categories]       Administration options vanish when using apostrophes in custom categories<br>
[Bug][Custom categories]       Language constant is overwritten when editing custom category field<br>
[Bug][Notifications]           Notifications are only sent in the language of the cronjob user<br>
[Bug][Notifications]           Report based notification is not saved when unchecking "active"<br>
[Bug][JDisc]                   No fallback if no standard JDisc server is configured<br>
[Bug][JDisc]                   Domains are not checked during JDisc import<br>
[Bug][JDisc]                   Address allocation is set to static when importing with mode "update"<br>
[Bug][JDisc]                   JDisc import always sets the DNS server and this is logged in the logbook as Internal source<br>
[Bug][CMDB settings]           Using a start value for custom counters creates an empty counter in the configuration<br>
[Bug][Logbook]                 Create logbook entries for Persongroup assignments by the LDAP Sync<br>
[Bug][Objects]                 Object title duplicates ""<br>
[Bug][Print view]              Print preview displays wrong attributes<br>
[Bug][Export]                  Create objects via template if a user-defined category is contained there that represents a report<br>
[Bug][Search]                  Filter for capacity doesn't work<br>
[Bug][Dashboard]               Attributes are displayed truncated in the Object information list on the dashboard<br>
[Bug][Dashboard]               If e.g. sorted by the title the Object information list widget will be reset and emptied.<br>
[Bug][H-Inventory]             hinventory xml import creates new cpu-cores with every import<br>
[Bug][System settings]         Ping command with nmap requires super user permissions<br>

[Task][Application Redesign] Redesign de l'application i-doit<br>
[Tâche][Code (Interne)] Mettre en place un moyen d'injecter des menus dans la zone d'administration<br>.
[Tâche][Outils système] Ajouter une fonction dans la zone d'administration pour nettoyer les entrées de dialogue non terminées / supprimées<br>
[Tâche][CMDB] Renommer "Layer-2 Network" en "Layer-2 Network Assignment" à partir de la catégorie Réseau " Port<br>
[Improvement][System settings] Option pour désactiver la validation pour les adresses MAC<br>
[Improvement][System settings] Nouvelle traduction de la configuration<br>
[Improvement][System settings] Définition de la langue par défaut<br>
[Improvement][Categories] Hide attributes from categories<br>
[Improvement][Categories] Nouveau champ optionnel "Dernier login" dans la catégorie "Login" des utilisateurs/personnes<br>
[Improvement][Gestionnaire de rapports] Les rapports peuvent maintenant être importés et exportés<br>
[Bug][Categories] Les compteurs personnalisés ne sont pas disponibles pour la saisie manuelle du numéro d'attribut de l'inventaire<br>.
[Bug][Categories] Erreur lors de la tentative d'assignation d'un nouveau poste de travail sur la page d'aperçu<br>
[Bug][Outils système] Absence d'icônes d'aperçu pour la suppression des entrées de catégories non finies/archivées/supprimées<br>
[Bug][Report-Manager] L'arbre de localisation est cassé<br>
[Bug][Report-Manager] Le repère "after current date" ne fonctionne pas dans les rapports<br>.
[Bug][Report-Manager] Le point de connexion n'est pas interrogeable dans les rapports<br>.
[Bug][Report-Manager] La case à cocher dans le rapport provoque une erreur<br>
[Bug][Report-Manager] Le repère "unequal object id" ne fonctionne pas correctement<br>.
[Bug][Report-Manager] Opérateurs manquants pour le système d'exploitation>numéro de version dans les conditions du rapport<br>.
[Bug][Report-Manager] Mauvaise sortie dans les rapports d'objets assemblés verticalement en racks<br>
[Bug][Report-Manager] Opérateurs manquants pour Memory>Capacity<br>.
[Bug][Report-Manager] Sauvegarder un rapport avec l'opérateur "subcnd" ne fonctionne pas<br>
[Bug][Report-Manager] Mauvaise requête lors de l'utilisation du champ yes/no dans les conditions<br>
[Bug][Report-Manager] Système d'exploitation > version n'est pas affiché dans Report Manager<br>
[Bug][Console] Les commandes ne peuvent pas être exécutées dans i-doit OPEN<br>
[Bug][CMDB] La fin du contrat n'est pas calculée automatiquement lors de l'ajout des détails du contrat via Forms Add-on<br>
[Bug][CMDB] Les objets archivés/supprimés sont également affichés dans les objets assignés<br>.
[Bug][CMDB] Les paramètres du chemin d'accès ne s'appliquent pas aux chemins d'accès dans les résultats des rapports<br>.
[Bug][CSV Import] L'importation CSV via la console ne fonctionne pas<br>
[Bug][CSV Import] Exportation CSV des inserts du rapport en lieu et place de l'entrée<br>
[Bug][CSV Import] Les relations entre les objets ne sont pas attribuées lors de l'utilisation de l'option automatique<br>.
[Bug][CSV Import] L'affectation des contrats ne s'importe pas correctement via CSV<br>
[Bug][Connector cabling] L'édition de connecteurs provoque une erreur<br>
[Bug][API] Changer le type d'objet via l'API n'est plus possible<br>
[Bug][API] Les entrées de dialogue+ avec une relation ne peuvent pas être placées dans la catégorie avec une requête API<br>.
[Bug][Templates] Erreur lors de la création d'objets à partir de templates en utilisant un %COUNTER%<br>
[Bug][Templates] Le modèle pour les personnes ne reprend pas les données des catégories Personnes > Adhésion au groupe de personnes, Personnes > Données de base<br>.
[Bug][Import] CSV Import : Importer un réseau de niveau 2 deux fois crée une affectation aléatoire de réseau de niveau 3<br>
[Bug][Import] L'importation XML ne crée pas les statuts CMDB<br>
[Bug][Import] La méthode storageModel_import est manquante<br>
[Bug][Code (Internal)] Mise à jour avec une taille de ligne incorrecte pour la table isys_cats_person_list<br>
[Bug][Code (Internal)] L'utilisation d'un compteur personnalisé dans un champ de texte à partir d'une catégorie personnalisée entraîne une erreur SQL<br>.
[Bug][Code (Internal)] La commande "tenant-create" ne vérifie pas si l'utilisateur de la base de données fournie existe déjà<br>
[Bug][Code (Internal)] Perte de performance en ajoutant le OBJ_OWNER dans la version 1.18<br>
[Bug][Code (Internal)] Création d'une clé étrangère manquante<br>
[Bug][Code (Internal)] Le menu déroulant de la sélection du locataire se ferme sur perte de focus<br>
[Bug][Authorization system] Le compteur personnalisé peut être édité/créé sans permissions<br>
[Bug][Authorization system] Les paramètres autorisés via le groupe de personnes ne sont pas correctement affichés dans la vue des droits de la personne<br>
[Bug][LDAP] La redirection directe du client avec tenant_id ne fonctionne pas avec SSO<br>
[Bug][LDAP] Le changement de locataire via l'utilisateur LDAP et le SSO actif ne fonctionne pas<br>
[Bug][LDAP] Le mécanisme de mise en cache LDAP ne fonctionne pas à cause de hachages de mots de passe admin différents<br>
[Bug][List editing] La résolution d'assignations logicielles via l'édition de listes génère un message d'erreur SQL<br>.
[Bug][List editing] Les données de base des catégories spécifiques de l'organisation ne sont pas visibles dans l'édition de la liste<br>.
[Bug][List editing] Chargement sans fin lors de l'ajout de nouvelles valeurs dans list edit<br>
[Bug][List editing] Les applications ne peuvent pas être détachées dans l'édition de liste<br>
[Bug][List editing] SQL Error when detaching operating system in list edit<br>
[Bug][List editing] Sélectionner des valeurs dans l'édition de la liste sans créer d'abord des entrées peut entraîner des erreurs<br>.
[Bug][Mass editing] Changement en masse - l'assignation de licence/application n'est pas définie dans l'assignation du logiciel<br>
[Bug][Lists] Le HTML des champs WYSIWYG n'est pas affiché dans les listes d'objets<br>.
[Bug][Lists] Listview - Colum "object" montre les objets archivés dans le poste de travail<br>
[Bug][Lists] Le filtre pour les champs dialog+ dans les catégories personnalisées ne fonctionne pas pour la manipulation (API+ Import full)<br>
[Bug][Lists] Erreur SQL lors de l'ajout du rôle d'attribut à la vue liste<br>
[Bug][Lists] Groupes de personnes>Nombre de membres non triable dans la vue liste<br>.
[Bug][Lists] Erreur SQL lors du filtrage de tous les champs d'une liste d'objets avec la condition d'attribut (General)<br>
[Bug][Lists] Le filtre pour la capacité ne fonctionne pas correctement<br>
[Bug][Lists] "Installed at" dans l'application n'est pas affiché dans la vue liste<br>
[Bug][Lists] Double barre de défilement et nombre de pages non visibles<br>
[Bug][QR-Codes] L'aperçu du code QR ne se charge pas correctement<br>
[Bug][QR-Codes] Les codes QR dans l'aperçu ne correspondent pas à ceux dans le popup<br>
[Bug][Admincenter] Uninstall Add-on provoque une erreur HTTP 500<br>
[Bug][Admincenter] Erreur "No such file or directory" lors de l'utilisation de "" dans le mot de passe de l'utilisateur MySQL<br>
[Bug][Check_MK] Unnecessary use statement in isys_cmdb_dao_category_s_person.class.php creates PHP Warning<br>
[Bug][Custom categories] Les options d'administration disparaissent lors de l'utilisation d'apostrophes dans les catégories personnalisées<br>.
[Bug][Custom categories] La constante de langue est écrasée lors de l'édition d'un champ de catégorie personnalisé<br>
[Bug][Notifications] Les notifications ne sont envoyées que dans la langue de l'utilisateur du cronjob<br>.
[Bug][Notifications] La notification basée sur un rapport n'est pas sauvegardée lors de la non vérification "active"<br>.
[Bug][JDisc] Pas de retour en arrière si aucun serveur JDisc standard n'est configuré<br>
[Bug][JDisc] Les domaines ne sont pas vérifiés lors de l'importation JDisc<br>
[Bug][JDisc] L'allocation d'adresse est définie en statique lors de l'importation en mode "mise à jour"<br>.
[Bug][JDisc] L'importation JDisc définit toujours le serveur DNS et celui-ci est enregistré dans le logbook comme source interne<br>.
[Bug][CMDB settings] L'utilisation d'une valeur de départ pour les compteurs personnalisés crée un compteur vide dans la configuration<br>.
[Bug][Logbook] Création d'entrées dans le logbook pour les affectations de groupes de personnes par la synchronisation LDAP<br>.
[Bug][Objects] Le titre de l'objet est dupliqué ""<br>.
[Bug][Print view] L'aperçu avant impression affiche des attributs incorrects<br>
[Bug][Export] Création d'objets via le modèle si une catégorie définie par l'utilisateur est contenue dans celui-ci et représente un rapport<br>.
[Bug][Search] Le filtre pour la capacité ne fonctionne pas<br>
[Bug][Dashboard] Les attributs sont affichés tronqués dans la liste d'informations de l'objet sur le tableau de bord<br>.
[Bug][Dashboard] Si, par exemple, le widget de la liste des informations sur les objets est trié par titre, il est réinitialisé et supprimé.<br>
[Bug][H-Inventory] hinventory xml import crée de nouveaux cpu-cores à chaque import<br>
[Bug][System settings] Ping command with nmap requires super user permissions<br>