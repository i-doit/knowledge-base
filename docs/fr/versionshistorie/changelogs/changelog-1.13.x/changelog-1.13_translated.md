<!-- TRANSLATED by md-translate -->
# Changelog 1.13

# Changelog 1.13

[Task][List editing] Multiple hardware RAIDS appear in list edit although none were created<br>
[Improvement][Code (internal)] Securiy update for external libraries<br>
[Improvement][Code (internal)] i-doit no longer supports PHP 5.6, minimum requirement is PHP 7<br>
[Improvement][Code (internal)] Check for duplicate assigned categories after add-on installation<br>
[Improvement][LDAP] Sync attributes objectSid and objectGUID via LDAP<br>
[Improvement][Update] Improve i-doit updater<br>
[Improvement][Installation] Compatibility for PHP 7.3<br>
[Improvement][Installation] Add support for newer MariaDB versions<br>
[Improvement][Lists] New attribute "contact + role" for object lists - thanks to Christian Haase<br>
[Improvement][Service] Services: Service View for other object types in the menu-tree<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based management of i-doit tenants<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based Licensing of i-doit<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based management of i-doit add-ons<br>
[Change][Categories] Multi Dialog Plus fields do not use new line<br>
[Bug][Categories] Data in the Monitoring category cannot be saved.<br>
[Bug][Categories] The Form Factor category does not store any data in the overview.<br>
[Bug][Categories] Saved profiles of the QCW are visible in all clients.<br>
[Bug][Categories] Archived attributes are displayed in the list view of the object type<br>
[Bug][Categories] Add attribute "Telephone rate" to the category SIM card in the dialog admin<br>
[Bug][Categories] Changing database field type for license keys to allow longer license keys<br>
[Bug][Categories] Option to select database instance also offers archived/deleted instances for selection<br>
[Bug][Categories] Sorting and Filtering Live Status<br>
[Bug][Categories] Standard filtering of CMDB status<br>
[Bug][Categories] Attribute priority can not be selected to be shown in list of multi value category "softwareassignment"<br>
[Bug][Categories] Single check of each categories when installing the pro add-on<br>
[Bug][Categories] Mouseover in categories only load after refresh of page<br>
[Bug][Categories] FQDN not used in print view<br>
[Bug][Categories] Show assigned objects in the list view for groups of people<br>
[Bug][Categories] Filter by contract type<br>
[Bug][Categories] Category "SIM card", no leading zeros can be added / deleted on the overview page<br>
[Bug][List editing] Create new category entries for all objects in list editing<br>
[Bug][List editing] Sub-category "Installation" is missing in the list edit<br>
[Bug][List editing] HTTP 500 error / empty page when calling list editing when Nagios Add-On was uninstalled<br>
[Bug][List editing] List Editing: Calendar selection moves outside the visible area<br>
[Bug][List editing] List edit of category "power consumer"<br>
[Bug][List editing] Logical location can not be saved via list edit<br>
[Bug][Lists] Filter for Objects is missing<br>
[Bug][Lists] Archiving a database instance causes some attributes of database scheme not being shown in object list for "database scheme"<br>
[Bug][Lists] The category "Contract assignment" is displayed empty in the default list of object lists<br>
[Bug][Lists] Filtering is not possible with the Virtual Machine attribute of the Virtual Machine category<br>
[Bug][Lists] Object lists: attribute "Description" of the specific category "Organization" is not saved<br>
[Bug][Lists] Special characters in filtering option for dialogue plus fields cause the filter to deliver an empty result<br>
[Bug][Lists] Object titles are not visible anymore after object has been archived/deleted<br>
[Bug][Lists] The version number and variant should not be shown in the object lists configuration<br>
[Bug][Lists] Create Dialog+ values via the filter in the object list<br>
[Bug][Lists] The objects are not shown in the object list<br>
[Bug][Lists] Default filter "virtual machine> virtual machine" is ignored in object list<br>
[Bug][OCS] OCS import: When importing an SNMP device, the operating system is not imported correctly<br>
[Bug][OCS] OCS-IMPORT: Category "Operating system" is overwritten during an import<br>
[Bug][OCS] Import of CPU cores from OCS inventory failed<br>
[Bug][Logbook] Incorrect description / operation in log recovery<br>
[Bug][Logbook] Logbook: Assignment categories don't create an log entry for assigned object<br>
[Bug][CSV Import] Fields are cleared during csv import, even if they do not appear as part of the import<br>
[Bug][CSV Import] Objects are skipped during CSV import<br>
[Bug][CSV Import] CSV-Import: Import via CLI overwrite existing objects<br>
[Bug][CSV Import] Version number (Category: Software assignment) cannot be filled via CSV import<br>
[Bug][CSV Import] Importing content into dialogue fields vis csv import is case sensitive<br>
[Bug][Import] The company of a person is emptied during CSV import.<br>
[Bug][Update] Missing Check of PHP Extensions in the GUI Updater<br>
[Bug][Code (internal)] Output in Infobox can block the user from working with i-doit<br>
[Bug][Code (internal)] Indexing of the category C__CATG__NET_LISTENER<br>
[Bug][Code (internal)] When accessing i-doit, index.php cannot be found<br>
[Bug][Code (internal)] Saving a SIM card without twin-card "card number" leads to SQL error<br>
[Bug][Code (internal)] Many links are directed to old `http` addresses<br>
[Bug][Code (internal)] idoit-rights.sh tries to set rights to folders which are not available<br>
[Bug][Code (internal)] Unnecessary dialog+ table "isys_catg_cpu_frequency"<br>
[Bug][Custom categories] Poor performance when saving/updating multivalue categories<br>
[Bug][Custom categories] Print view of reports in custom categories incorrect<br>
[Bug][Custom categories] Data cleansing overwrites the HTML toolbar.<br>
[Bug][Custom categories] Reports are displayed for selecting attributes in Custom Categories<br>
[Bug][LDAP] LDAP Sync: Import of organization incorrect<br>
[Bug][LDAP] SSO-authentication when full specification of index.php not possible<br>
[Bug][LDAP] LDAP connection handling<br>
[Bug][LDAP] Subcategory "Master data" Provide the attribute "Salutation" for ldap-sync<br>
[Bug][LDAP] LDAP Sync: Contact Assignment / Assigned objects are not archived when the contact is archived<br>
[Bug][LDAP] Configure LDAP via API<br>
[Bug][Print view] Print-preview on object browsers with multiselect of custom categories broken<br>
[Bug][Print view] Print preview shows HTML code<br>
[Bug][Report-Manager] Report Manager: Output of the grouped MultiValues error during PDF export<br>
[Bug][Report-Manager] Attributes of category "Assigned workstations" can not be used in report Manager<br>
[Bug][Report-Manager] Sub-Kategorie "Anschlüsse" Attribut "Sub-Kategorie" Anschlüsse "Attribut" Ein / Ausgang "für Report-Manager bereitstellen" für Report-Manager bereitstellen<br>
[Bug][Report-Manager] Attribute "standard gateway for net" can not be used in report manager as condition<br>
[Bug][CMDB settings] Limiting the view via rights does not effect location browser<br>
[Bug][Open-Version] Console.php error<br>
[Bug][Installation] Dead Link in setup<br>
[Bug][JDisc] JDisc-Import Fehler: "CMDB Error: Relation type should not be empty."<br>
[Bug][Systemtools] Re-new relation objects cannot be executed<br>
[Bug][H-Inventory] Object matching profile does not get applied for H-Inventory<br>
[Bug][Request Tracker] Request Tracker: Language Constants are not used/translated<br>
[Bug][Request Tracker] Request Tracker: In the "All Objects" tab, all objects are selected.<br>
[Bug][Validation] Wrong validation on inventory number<br>
[Bug][Search] Automatic DeepSearch does not work, when normal search did not find any results<br>
[Bug][Authorization system] Prohibit users from assigning work centers<br>
[Bug][Relations] Correct display of the relations in state archived/deleted<br>
[Bug][Console-base Installation/Update/Licensing] Using the "system-checkforupdates" command outputs constants<br>
[Bug][Cabling view] Enable horizontal scrolling for overview in cabling >> connectors<br>

[Tâche][Édition de liste] Plusieurs RAIDS matériels apparaissent dans l'édition de liste alors qu'aucun n'a été créé<br>.
[Improvement][Code (internal)] Mise à jour de la sécurité pour les librairies externes<br>
[Improvement][Code (interne)] i-doit ne supporte plus PHP 5.6, le minimum requis est PHP 7<br>
[Improvement][Code (internal)] Contrôle des catégories assignées en double après l'installation d'un add-on<br>
[Improvement][LDAP] Sync attributs objectSid et objectGUID via LDAP<br>
[Improvement][Update] Improve i-doit updater<br>
[Improvement][Installation] Compatibilité pour PHP 7.3<br>
[Improvement][Installation] Add support for newer MariaDB versions<br>
[Improvement][Lists] Nouvel attribut "contact + rôle" pour les listes d'objets - merci à Christian Haase<br>.
[Improvement][Service] Services : Service View pour d'autres types d'objets dans le menu-tree<br>
[Improvement][Console-base Installation/Update/Licensing] Gestion par console des locataires i-doit<br>
[Improvement][Console-base Installation/Update/Licensing] Licensing de i-doit basé sur la console<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based management of i-doit add-ons<br>
[Change][Categories] Les champs Multi Dialog Plus n'utilisent pas de nouvelle ligne<br>
[Bug][Categories] Les données de la catégorie Monitoring ne peuvent pas être sauvegardées.<br>
[Bug][Categories] La catégorie Form Factor ne stocke pas de données dans la vue d'ensemble.<br>
[Bug][Categories] Les profils sauvegardés du QCW sont visibles dans tous les clients.<br>
[Bug][Categories] Les attributs archivés sont affichés dans la vue liste du type d'objet<br>.
[Bug][Categories] Ajout de l'attribut "Telephone rate" à la catégorie SIM card dans la boîte de dialogue admin<br>.
[Bug][Categories] Changement du type de champ de la base de données pour les clés de licence afin d'autoriser des clés de licence plus longues<br>.
[Bug][Categories] L'option de sélection de l'instance de la base de données offre également les instances archivées/supprimées pour la sélection<br>.
[Bug][Categories] Tri et filtrage des statuts en direct<br>
[Bug][Categories] Filtrage par défaut de l'état de la CMDB<br>
[Bug][Categories] La priorité des attributs ne peut pas être sélectionnée pour être affichée dans la liste de la catégorie multi-valeurs "softwareassignment"<br>
[Bug][Categories] Vérification unique de chaque catégorie lors de l'installation de l'add-on pro<br>
[Bug][Categories] Le survol des catégories ne se charge qu'après le rafraîchissement de la page<br>.
[Bug][Categories] FQDN pas utilisé dans la vue d'impression<br>
[Bug][Categories] Afficher les objets assignés dans la vue liste pour des groupes de personnes<br>
[Bug][Categories] Filtre par type de contrat<br>
[Bug][Categories] Catégorie "SIM card", aucun zéro de tête ne peut être ajouté / supprimé sur la page d'aperçu<br>
[Bug][List editing] Création de nouvelles entrées de catégories pour tous les objets en édition de liste<br>
[Bug][List editing] La sous-catégorie "Installation" est manquante dans l'édition de liste<br>
[Bug][List editing] HTTP 500 error / empty page when calling list editing when Nagios Add-On was uninstallated<br>
[Bug][List editing] List Editing : la sélection du calendrier se déplace en dehors de la zone visible<br>
[Bug][List editing] Édition de la liste de la catégorie "power consumer"<br>
[Bug][List editing] Impossible de sauvegarder l'emplacement logique via l'édition de liste<br>
[Bug][Lists] Le filtre pour les objets est manquant<br>
[Bug][Lists] L'archivage d'une instance de base de données provoque l'absence de certains attributs du schéma de base de données dans la liste des objets pour "schéma de base de données"<br>.
[Bug][Lists] La catégorie "Affectation de contrat" est affichée vide dans la liste d'objets par défaut<br>.
[Bug][Lists] Le filtrage n'est pas possible avec l'attribut machine virtuelle de la catégorie machine virtuelle<br>
[Bug][Lists] Listes d'objets : l'attribut "Description" de la catégorie spécifique "Organisation" n'est pas sauvegardé<br>
[Bug][Lists] Les caractères spéciaux dans l'option de filtrage pour les champs dialogue plus provoquent le résultat vide du filtre<br>.
[Bug][Lists] Les titres des objets ne sont plus visibles après que l'objet a été archivé/supprimé<br>.
[Bug][Lists] Le numéro de version et la variante ne doivent pas être affichés dans la configuration des listes d'objets<br>.
[Bug][Lists] Créer des valeurs Dialog+ via le filtre dans la liste des objets<br>.
[Bug][Lists] Les objets ne sont pas affichés dans la liste des objets<br>.
[Bug][Lists] Le filtre par défaut "machine virtuelle> machine virtuelle" est ignoré dans la liste des objets<br>.
[Bug][OCS] Importation OCS : Lors de l'importation d'un périphérique SNMP, le système d'exploitation n'est pas importé correctement<br>.
[Bug][OCS] OCS-IMPORT : La catégorie "Operating system" est écrasée lors d'une importation<br>
[Bug][OCS] Echec de l'importation des cœurs de processeur depuis l'inventaire OCS<br>.
[Bug][Logbook] Description / opération incorrecte dans la récupération du journal<br>
[Bug][Logbook] Logbook : Les catégories d'affectation ne créent pas d'entrée dans le journal pour l'objet affecté<br>.
[Bug][CSV Import] Les champs sont nettoyés lors de l'import csv, même s'ils n'apparaissent pas dans le cadre de l'import<br>
[Bug][CSV Import] Les objets sont désactivés pendant l'importation CSV<br>.
[Bug][CSV Import] CSV Import : Import via CLI overwrite existing objects<br>
[Bug][CSV Import] Numéro de version (Catégorie : Software assignment) ne peut pas être rempli via CSV import<br>
[Bug][CSV Import] Importing content into dialogue fields vis csv import is case sensitive<br>
[Bug][Import] La société d'une personne est supprimée lors de l'importation CSV.<br>
[Bug][Update] Absence de vérification des extensions PHP dans l'outil de mise à jour de l'interface graphique<br>.
[Bug][Code (interne)] La sortie dans l'infobox peut bloquer l'utilisateur de travailler avec i-doit<br>
[Bug][Code (interne)] Indexation de la catégorie C__CATG__NET_LISTENER<br>
[Bug][Code (interne)] Lors de l'accès à i-doit, index.php ne peut pas être trouvé<br>
[Bug][Code (internal)] La sauvegarde d'une carte SIM sans numéro de carte double entraîne une erreur SQL<br>.
[Bug][Code (interne)] De nombreux liens sont dirigés vers d'anciennes adresses `http`<br>
[Bug][Code (interne)] idoit-rights.sh tente de définir des droits sur des dossiers qui ne sont pas disponibles<br>
[Bug][Code (internal)] Dialogue+ table "isys_catg_cpu_frequency"<br> inutile
[Bug][Custom categories] Mauvaise performance lors de la sauvegarde/ mise à jour de catégories multivaluées<br>
[Bug][Custom categories] Impression incorrecte de l'affichage des rapports dans les catégories personnalisées<br>.
[Bug][Custom categories] Le nettoyage des données écrase la barre d'outils HTML.<br>
[Bug][Custom categories] Les rapports sont affichés lorsque les attributs sont sélectionnés dans les catégories personnalisées<br>.
[Bug][LDAP] LDAP Sync : importation de l'organisation incorrecte<br>
[Bug][LDAP] Authentification SSO lorsque la spécification complète de index.php n'est pas possible<br>
[Bug][LDAP] Gestion des connexions LDAP<br>
[Bug][LDAP] Sous-catégorie "Master data" Fournir l'attribut "Salutation" pour ldap-sync<br>
[Bug][LDAP] LDAP Sync : Contact Assignment / Assigned objects are not archived when the contact is archived<br>
[Bug][LDAP] Configurer LDAP via API<br>
[Bug][Print view] Aperçu avant impression sur les navigateurs d'objets avec multi-sélection de catégories personnalisées interrompu<br>
[Bug][Print view] L'aperçu avant impression affiche le code HTML<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : sortie de l'erreur MultiValues groupées lors de l'exportation PDF<br>
[Bug][Gestionnaire de rapports] Les attributs de la catégorie "Postes de travail assignés" ne peuvent pas être utilisés dans le gestionnaire de rapports<br>.
[Bug][Report Manager] Sous-catégorie "Ports" Attribut "Sous-catégorie" Ports "Attribut" Entrée / Sortie "à fournir au gestionnaire de rapports" à fournir au gestionnaire de rapports<br>
[Bug][Report-Manager] L'attribut "passerelle par défaut pour le réseau" ne peut pas être utilisé dans le gestionnaire de rapports comme condition<br>.
[Bug][CMDB settings] Limiter la vue via les droits n'affecte pas le navigateur de localisation<br>
[Bug][Version Open] Erreur Console.php<br>
[Bug][Installation] Dead Link in setup<br>
[Bug][JDisc] Erreur d'importation de JDisc : "CMDB Error : Relation type should not be empty."<br>
[Bug][Systemtools] Les nouveaux objets relationnels ne peuvent pas être exécutés<br>
[Bug][H-Inventory] Le profil de correspondance d'objet ne s'applique pas à H-Inventory<br>
[Bug][Request Tracker] Request Tracker : Language Constants are not used/translated<br>
[Bug][Request Tracker] Request Tracker : Dans l'onglet "All Objects", tous les objets sont sélectionnés.<br>
[Bug][Validation] Mauvaise validation sur le numéro d'inventaire<br>
[Bug][Search] La recherche automatique en profondeur ne fonctionne pas lorsque la recherche normale n'a pas trouvé de résultats<br>.
[Bug][Système d'autorisation] Interdire aux utilisateurs d'assigner des centres de travail<br>
[Bug][Relations] Correction de l'affichage des relations dans l'état archived/deleted<br>
[Bug][Console-base Installation/Update/Licensing] Utilisation de la commande "system-checkforupdates" pour sortir des constantes<br>
[Bug][Cabling view] Enable horizontal scrolling for overview in cabling >> connectors<br>