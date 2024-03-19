<!-- TRANSLATED by md-translate -->
# Changelog 27

# Changelog 27

[Task][Application Redesign]                       Redesign the login page<br>
[Task][Code (Internal)]                            Remove 'logical-location-handling' setting, refer to 'Relocate CI' add-on<br>
[Task][Code (Internal)]                            Update ACE Editor<br>
[Task][Console-base Installation/Update/Licensing] Description for import-jdisc --regenerateSearchIndex is missing<br>
[Task][JDisc]                                      Improve JDisc communication<br>
[Task][Single Sign On (SSO)]                       Implement new expert setting + login logic for SSO<br>
[Task][Update]                                     Add information about planned deprecation of PHP 7.4 to setup and update procedure<br>
[Improvement][Category folders]                    Implement category folders feature<br>
[Improvement][JDisc]                               Create mapping between i-doit objects and category entries and JDISC data<br>
[Improvement][JDisc]                               Format the object title text (lowercase / uppercase)<br>
[Improvement][JDisc]                               Add Serial number as Identification of the device for JDisc Discovery<br>
[Improvement][JDisc]                               Import panel size of monitors / Importiere die Panelgröße von Monitoren<br>
[Improvement][Logbook]                             Option to decide, whether logbook entries are removed or untouched when an object is purged<br>
[Improvement][Categories]                          Improve process to set an empty password<br>
[Improvement][CMDB-Explorer]                       Group object types in CMDB-Explorer<br>
[Bug][Validation]                                  No validation error when duplicating<br>
[Bug][Validation]                                  Setting status of service type entries to archived or deleted makes entries invisible and none selectable<br>
[Bug][Notifications]                               The User is not able to create notification settings<br>
[Bug][Categories]                                  Categories selected for 'categories on the overview' get automatically filled when creating a new object or template<br>
[Bug][Categories]                                  Default gateway overwritten when duplicating object<br>
[Bug][Categories]                                  Assigning a software via software assignment before assigning a operating system causes version number to disappear<br>
[Bug][Categories]                                  Placeholder %OBJTITLE% is not working in category accounting > Inventory number via Template<br>
[Bug][Categories]                                  SQL Error when creating more than 16 model entries<br>
[Bug][Categories]                                  Model not displayed when creating more than 16 objects without saving the object afterwards<br>
[Bug][Categories]                                  Multiple operating systems at software assignment causes weird behavior at version numbers from operating systems category<br>
[Bug][Custom categories]                           Changing technical keys to only contain words causes entries to lose the values when filled with API (Dialog+)<br>
[Bug][Custom categories]                           Disconnecting relation in custom category causes sql error<br>
[Bug][Code (Internal)]                             Uninstalling add-ons over admin-center does not work if user is also logged into i-doit<br>
[Bug][Code (Internal)]                             Adjust naming of network interface category<br>
[Bug][Code (Internal)]                             Can't save counter with # format<br>
[Bug][Code (Internal)]                             Saving a long link as a bookmark in the bookmark widget removes edit and remove button<br>
[Bug][Code (Internal)]                             Add relationship menu item to extras menu<br>
[Bug][Code (Internal)]                             Wrong attribute name while reading through API<br>
[Bug][Code (Internal)]                             Do not add spaces to custom multiline text fields<br>
[Bug][Code (Internal)]                             Installation of incompatible add-on does not throw an error<br>
[Bug][Code (Internal)]                             Translate deselect button again<br>
[Bug][Code (Internal)]                             Do not display an empty Extras menu if the user does not have the right to do so<br>
[Bug][i-doit Login]                                Display error message when a user logs in with incorrect credentials<br>
[Bug][System settings]                             Open calendar picker when calendar input field is focused<br>
[Bug][System settings]                             LDAP Debug log is only available in System settings (Admin Center)<br>
[Bug][LDAP]                                        Ldap-sync creates a duplicated logbook entries for a archived user<br>
[Bug][LDAP]                                        Group Assignment is not removed for LDAP Users if the user was moved to another LDAP group<br>
[Bug][LDAP]                                        Administration > Import and interfaces > LDAP > Attribute extension cannot be saved<br>
[Bug][Logbook]                                     If a change in the administration with "logbook commentary" is saved a missleading information tells that a loogbook entry has been created.<br>
[Bug][API]                                         Creating and setting a Dialog entry with a String which is only a number is not logged<br>
[Bug][API]                                         PHP Error when posting a API request without installed i-doit pro add-on API<br>
[Bug][List editing]                                Software not displayed in list view when assigned via list edit<br>
[Bug][List editing]                                Adding a new model in list edit causes database error<br>
[Bug][List editing]                                Assignment categories not editable in list edit<br>
[Bug][List editing]                                Allow user to add dialog+ values in list edit<br>
[Bug][CMDB]                                        Trying to save a Database Installation twice leads to an error<br>
[Bug][CMDB]                                        SQL error in report manager for DBMS> database installation categories<br>
[Bug][CMDB]                                        Edit button in IP-List should be hidden<br>
[Bug][CMDB]                                        Setting "show primary entry only" for a master object (custom category) gives HTTP 500 Error at preview<br>
[Bug][CMDB]                                        SQL error after double update of DBMS installation<br>
[Bug][New cabling logic]                           Cabling Browser shows wrong assignment of input and output<br>
[Bug][Report-Manager]                              Using software assignment in reports causes wrong number of matches<br>
[Bug][Report-Manager]                              DNS Server is not shown in a report even though it is set in a Layer-3 Net<br>
[Bug][Report-Manager]                              Assigned workstation-> Parent Object not working in report manager<br>
[Bug][Report-Manager]                              Report does not display all possible results<br>
[Bug][Report-Manager]                              CSV export of reports with grouped multivalue presentation may contain a lot of empty rows<br>
[Bug][Report-Manager]                              Operators missing for accounting>date of invoice<br>
[Bug][H-Inventory]                                 Importing H-Inventory xml file displays error message<br>
[Bug][Connector cabling]                           Cabling browser does not display ports correctly<br>
[Bug][CSV Import]                                  Attaching files via CSV Import ends with error message<br>
[Bug][CSV Import]                                  CSV Export of report inserts constant instead of entry<br>
[Bug][CSV Import]                                  CSV Import of Multi Value Category Data does not work correctly over the console.php<br>
[Bug][CSV Import]                                  Database error when importing via csv<br>
[Bug][Update]                                      Updating from 24 to 25 sets the Monetary format to NULL for all Users<br>
[Bug][Lists]                                       List view for multi value entries is not checking columns<br>
[Bug][Lists]                                       SQL error when filtering in object type switch chassis for Device assignment (Slots)<br>
[Bug][Lists]                                       Show X entries in the object list is not persistent<br>
[Bug][Lists]                                       List view config missing when editing<br>
[Bug][Lists]                                       Can't move attributes in list view for categories<br>
[Bug][Lists]                                       List filter in object type configuration does not reset<br>
[Bug][Lists]                                       Option "default filter filters within all fields" causes date warning<br>
[Bug][Dashboard]                                   adding "cluster service assignment" attributes to the "object information list" widget at the dashboard gives error<br>
[Bug][Dashboard]                                   Use correct links in quicklaunch widget<br>
[Bug][Search]                                      Filtering for date fields in list overview not working<br>
[Bug][Templates]                                   Contact assignment in templates not working for JDisc Imports<br>
[Bug][JDisc]                                       FC-Ports are not completely imported via JDisc import<br>
[Bug][JDisc]                                       JDisc import via console stops with error<br>
[Bug][JDisc]                                       Importing JDisc profile displays foreign key constraint error message<br>
[Bug][JDisc]                                       JDisc import with "Only create newly scanned devices" import mode creates duplicates<br>
[Bug][Console-base Installation/Update/Licensing]  sync-dynamic-groups command using wrong database table<br>
[Bug][CMDB-Explorer]                               Language constants are displayed in the object info of the cmdb explorer<br>
[Bug][i-doit Licensing 2.0]                        License expiration countdown is not displayed on the dashboard<br>
[Bug][Authorization system]                        If "Location and all physically assigned objects" is used as a right the overview page can be seen although it is not authorized<br>
[Bug][Relations]                                   Function to clear the password of users has no effect<br>
[Bug][Single Sign On (SSO)]                        Language of default tenant overwrites languages of other tenants<br>

[Task][Application Redesign] Redesign de la page de connexion<br>
[Task][Code (Internal)] Supprimer le paramètre 'logical-location-handling', se référer à l'add-on 'Relocate CI'<br>
[Tâche][Code (Interne)] Mise à jour de l'éditeur ACE<br>
[Task][Console-base Installation/Mise à jour/Licensing] Description for import-jdisc --regenerateSearchIndex is missing<br>
[Tâche][JDisc] Améliorer la communication JDisc<br>
[Tâche][Single Sign On (SSO)] Implement new expert setting + login logic for SSO<br>
[Tâche][Mise à jour] Ajouter des informations sur la dépréciation prévue de PHP 7.4 dans la procédure de configuration et de mise à jour<br>.
[Improvement][Category folders] Implement category folders feature<br>
[Improvement][JDisc] Créer un mapping entre les objets i-doit et les entrées de catégorie et les données JDISC<br>
[Improvement][JDisc] Formatage du texte du titre de l'objet (lowercase / uppercase)<br>
[Improvement][JDisc] Ajouter le numéro de série comme identification du périphérique pour la découverte JDisc<br>
[Improvement][JDisc] Import panel size of monitors / Importer la taille du panneau des moniteurs<br>
[Improvement][Logbook] Option pour décider si les entrées du logbook sont supprimées ou non lors de la purge d'un objet<br>.
[Improvement][Categories] Amélioration du processus pour définir un mot de passe vide<br>
[Improvement][CMDB-Explorer] Types d'objets de groupe dans CMDB-Explorer<br>
[Bug][Validation] Pas d'erreur de validation lors de la duplication<br>
[Bug][Validation] Paramétrer l'état des entrées de type de service en archivé ou supprimé rend les entrées invisibles et aucune sélectionnable<br>
[Bug][Notifications] L'utilisateur ne peut pas créer de paramètres de notification<br>
[Bug][Categories] Les catégories sélectionnées pour les 'catégories sur l'aperçu' sont automatiquement remplies lors de la création d'un nouvel objet ou d'un modèle<br>.
[Bug][Categories] Passerelle par défaut écrasée lors de la duplication d'un objet<br>
[Bug][Categories] L'attribution d'un logiciel via l'affectation de logiciel avant l'attribution d'un système d'exploitation entraîne la disparition du numéro de version<br>.
[Bug][Categories] Le repère %OBJTITLE% ne fonctionne pas dans la comptabilité des catégories > Numéro d'inventaire via le modèle<br>.
[Bug][Categories] Erreur SQL lors de la création de plus de 16 entrées de modèle<br>
[Bug][Categories] Modèle non affiché lors de la création de plus de 16 objets sans sauvegarder l'objet après<br>
[Bug][Categories] Plusieurs systèmes d'exploitation à l'affectation du logiciel provoque un comportement étrange aux numéros de version à partir de la catégorie des systèmes d'exploitation<br>
[Bug][Custom categories] Changer les clés techniques pour ne contenir que des mots entraîne la perte des valeurs lors du remplissage avec l'API (Dialog+)<br>.
[Bug][Custom categories] Déconnecter une relation dans une catégorie personnalisée provoque une erreur sql<br>
[Bug][Code (Internal)] Uninstalling add-ons over admin-center does not work if user is also logged into i-doit<br>
[Bug][Code (Internal)] Ajuster le nom de la catégorie de l'interface réseau<br>
[Bug][Code (Internal)] Impossible de sauvegarder le compteur avec # format<br>
[Bug][Code (Internal)] Sauvegarder un long lien comme marque-page dans le widget marque-page supprime le bouton éditer et supprimer<br>
[Bug][Code (Internal)] Ajouter un élément de menu de relations au menu extras<br>
[Bug][Code (Internal)] Nom d'attribut erroné lors de la lecture par l'API<br>
[Bug][Code (Internal)] Ne pas ajouter d'espace dans les champs de texte multiligne personnalisés<br>
[Bug][Code (Internal)] L'installation d'un add-on incompatible ne provoque pas d'erreur<br>.
[Bug][Code (Internal)] Translate deselect button again<br>
[Bug][Code (Internal)] Ne pas afficher un menu Outils vide si l'utilisateur n'a pas le droit de le faire<br>.
[Bug][i-doit Login] Affichage d'un message d'erreur lorsqu'un utilisateur se connecte avec des identifiants incorrects<br>
[Bug][System settings] Ouvrir le sélecteur de calendrier lorsque le champ de saisie du calendrier est focalisé<br>
[Bug][System settings] Le journal de débogage LDAP n'est disponible que dans les paramètres système (Admin Center)<br>.
[Bug][LDAP] Ldap-sync crée une entrée de journal dupliquée pour un utilisateur archivé<br>
[Bug][LDAP] L'assignation de groupe n'est pas supprimée pour les utilisateurs LDAP si l'utilisateur a été déplacé vers un autre groupe LDAP<br>
[Bug][LDAP] Administration > Importation et interfaces > LDAP > L'extension d'attribut ne peut pas être sauvegardée<br>.
[Bug][Logbook] Si une modification dans l'administration avec "commentaire logbook" est sauvegardée, une information erronée indique qu'un loogbook a été créé.<br>
[Bug][API] La création et le paramétrage d'une entrée de dialogue avec une chaîne de caractères qui n'est qu'un nombre ne sont pas enregistrés<br>.
[Bug][API] Erreur PHP lors de l'envoi d'une demande d'API sans installation de l'API i-doit pro<br> add-on
[Bug][List editing] Le logiciel n'est pas affiché dans la vue liste lorsqu'il est attribué via list edit<br>
[Bug][List editing] Ajout d'un nouveau modèle dans l'édition de liste provoque une erreur de base de données<br>
[Bug][List editing] Les catégories d'affectation ne sont pas modifiables dans l'édition de la liste<br>.
[Bug][List editing] Permettre à l'utilisateur d'ajouter des valeurs dialog+ dans l'édition de la liste<br>
[Bug][CMDB] Essayer de sauvegarder une installation de base de données deux fois entraîne une erreur<br>
[Bug][CMDB] Erreur SQL dans le gestionnaire de rapports pour les catégories d'installation de base de données DBMS><br>.
[Bug][CMDB] Le bouton d'édition dans la liste des IP devrait être caché<br>
[Bug][CMDB] Paramétrer "montrer l'entrée primaire seulement" pour un objet maître (catégorie personnalisée) donne une erreur HTTP 500 à l'aperçu<br>
[Bug][CMDB] Erreur SQL après une double mise à jour de l'installation du SGBD<br>
[Bug][New cabling logic] Cabling Browser shows wrong assignment of input and output<br>
[Bug][Gestionnaire de rapports] L'utilisation de l'assignation logicielle dans les rapports provoque un nombre erroné de correspondances<br>
[Bug][Gestionnaire de rapports] Le serveur DNS n'est pas affiché dans un rapport même s'il est défini dans un réseau de couche 3<br>.
[Bug][Gestionnaire de rapports] Assigned workstation-> Parent Object ne fonctionne pas dans le gestionnaire de rapports<br>.
[Bug][Gestionnaire de rapports] Le rapport n'affiche pas tous les résultats possibles<br>
[Bug][Gestionnaire de rapports] L'exportation CSV de rapports avec présentation multivaluée groupée peut contenir un grand nombre de lignes vides<br>.
[Bug][Report-Manager] Opérateurs manquants pour la comptabilité>date de la facture<br>.
[Bug][H-Inventory] L'importation du fichier xml H-Inventory affiche un message d'erreur<br>.
[Bug][Connector cabling] Le navigateur de câblage n'affiche pas correctement les ports<br>.
[Bug][CSV Import] L'accès aux fichiers via CSV Import se termine par un message d'erreur<br>.
[Bug][CSV Import] Exportation CSV des inserts du rapport en lieu et place de l'entrée<br>
[Bug][CSV Import] L'importation CSV de données de catégories multi-valeurs ne fonctionne pas correctement via le console.php<br>
[Bug][CSV Import] Erreur de base de données lors de l'importation via csv<br>
[Bug][Update] Updating from 24 to 25 sets the monetary format to NULL for all users<br>
[Bug][Lists] La vue liste pour les entrées multi-valeurs ne vérifie pas les colonnes<br>
[Bug][Lists] Erreur SQL lors du filtrage dans le châssis de commutation de type d'objet pour l'affectation des périphériques (slots)<br>
[Bug][Lists] L'affichage des X entrées dans la liste des objets n'est pas persistant<br>
[Bug][Lists] Configuration de la vue de la liste manquante lors de l'édition<br>
[Bug][Lists] Impossible de déplacer les attributs dans la vue liste pour les catégories<br>
[Bug][Lists] Le filtre de liste dans la configuration du type d'objet ne se réinitialise pas<br>
[Bug][Lists] L'option "filters default filters within all fields" provoque un avertissement de date<br>
[Bug][Dashboard] ajouter des attributs "cluster service assignment" au widget "object information list" sur le dashboard donne une erreur<br>.
[Bug][Dashboard] Utiliser des liens corrects dans le widget de lancement rapide<br>
[Bug][Search] Filtrage des champs de date dans l'aperçu de la liste ne fonctionne pas<br>
[Bug][Templates] Affectation des contacts dans les templates ne fonctionne pas pour les importations JDisc<br>
[Bug][JDisc] Les ports FC ne sont pas complètement importés via JDisc import<br>
[Bug][JDisc] JDisc import via console s'arrête avec erreur<br>
[Bug][JDisc] L'importation d'un profil JDisc affiche un message d'erreur de contrainte de clé étrangère<br>
[Bug][JDisc] JDisc import avec le mode d'import "Only create newly scanned devices" crée des duplicates<br>
[Bug][Console-base Installation/Update/Licensing] commande sync-dynamic-groups utilisant une mauvaise table de base de données<br>
[Bug][CMDB-Explorer] Les constantes de langue sont affichées dans les infos objet de l'explorateur cmdb<br>
[Bug][i-doit Licensing 2.0] Le compte à rebours d'expiration de la licence n'est pas affiché sur le tableau de bord<br>.
[Bug][Système d'autorisation] Si "Location and all physically assigned objects" est utilisé comme un droit la page d'aperçu peut être vue même si elle n'est pas autorisée<br>
[Bug][Relations] La fonction permettant d'effacer le mot de passe des utilisateurs n'a aucun effet<br>.
[Bug][Single Sign On (SSO)] La langue du locataire par défaut écrase les langues des autres locataires<br>