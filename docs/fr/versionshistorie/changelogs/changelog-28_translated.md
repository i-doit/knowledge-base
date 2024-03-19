<!-- TRANSLATED by md-translate -->
# Changelog 28

# Changelog 28

[Task][Category folders]         Streamline wording of move browser in Category Tree<br>
[Task][Category folders]         Streamline wording of reorder modal in category tree feature<br>
[Task][Category folders]         Rename message when folder is empty<br>
[Task][Category folders]         Reset category list when the search is deleted<br>
[Task][Category folders]         Improve category folders drag and drop<br>
[Task][Category folders]         Add option to select and move multiple items<br>
[Task][Category folders]         Rename GERMAN Expand Button<br>
[Task][Category folders]         Add info to empty state of category folders feature<br>
[Task][Category folders]         Disable move button when nothing is selected<br>
[Task][Category folders]         Add information about the use of language constants to add a modal folder<br>
[Task][Code (Internal)]          Remove global $g_convert variable<br>
[Task][Code (Internal)]          Show architecture in system-overview<br>
[Task][List editing]             The text with leading zeros needs to be written more clearly.<br>
[Improvement][Import]            Allow user to import "input" of the first object in cabling import<br>
[Improvement][JDisc]             JDisc: It should be possible to import more information (SLOT) regarding hard disc<br>
[Improvement][JDisc]             Import von einzelnen Geräten aus JDisc anhand der IP über die Console / IP filter for JDisc import console command<br>
[Improvement][JDisc]             New JDisc Import Mode: "Update (Existing)"<br>
[Improvement][JDisc]             JDisc Import: Importiere SNMP Attribute<br>
[Improvement][JDisc]             Comparison of available objects from i-doit and JDisc<br>
[Improvement][JDisc]             Archive objects, that have not been seen by JDisc for a defined set of days<br>
[Bug][Code (Internal)]           Refactor the automatic update-check to a separate (ajax) request<br>
[Bug][Code (Internal)]           Installation of different Add-on Versions does not replace old files<br>
[Bug][Code (Internal)]           Changes in SMTP configuration encrypt the password<br>
[Bug][Code (Internal)]           Assigned clusters are removed after saving the object type configuration<br>
[Bug][Code (Internal)]           de-humanize the login page<br>
[Bug][Code (Internal)]           Mouseover at object placed in rack shows html character instead of "ß" if language is german<br>
[Bug][Code (Internal)]           Wrong translation of Editing lock<br>
[Bug][Code (Internal)]           Creating a object-type at "edit-datastructure" causes error because of https<br>
[Bug][Code (Internal)]           Fix object ID reset in URL in "Configurate object browser" after canceling an edit<br>
[Bug][Code (Internal)]           Icon redirects are not cached<br>
[Bug][Code (Internal)]           Changing technical key in multi value category causes problems in listview<br>
[Bug][Code (Internal)]           Too small resolution does not display object titles in search bar<br>
[Bug][CMDB]                      TypeError when assigning a Software<br>
[Bug][CMDB]                      JDisc Import date is imported as string and not as date<br>
[Bug][CMDB]                      Location is not selectable in object browser<br>
[Bug][CMDB]                      Removing 'end of contract' of a contract makes it reappear after saving even though the runtime is now 0<br>
[Bug][CMDB]                      Language constant overwrites another attribute<br>
[Bug][CMDB]                      Date fields in category SIM are prefilled with character '-'<br>
[Bug][LDAP]                      Creating an LDAP/AD filter that includes multiple filters<br>
[Bug][Custom categories]         Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)<br>
[Bug][JDisc]                     JDisc mapping error with MAC address<br>
[Bug][JDisc]                     Saving a JDisc profile with a empty categories selection displays malformed JSON warning<br>
[Bug][Category folders]          It is possible to select disabled folders as target<br>
[Bug][Category folders]          Translations should not be overwritten after opening the category folders for the first time<br>
[Bug][Category folders]          Fix move of categories when search is used<br>
[Bug][Category folders]          Fix jumping view port when searching and selecting items<br>
[Bug][Category folders]          After using search and delete the string via the X it is not possible to select category/folder container<br>
[Bug][Category folders]          Security issue category folders prevent XSS usage in folder names<br>
[Bug][Category folders]          Show root folder categories in move folder modal<br>
[Bug][Category folders]          Correct sorting of category folders and categories<br>
[Bug][Category folders]          Remove leftover categories<br>
[Bug][Category folders]          Show language constants in edit folder modals<br>
[Bug][Category folders]          Do not collapse category folders automatically<br>
[Bug][Category folders]          Do not show language constant in add folder modal<br>
[Bug][Category folders]          Do not show "no content" text when category is moved in empty folder<br>
[Bug][Security]                  Prevent SQL-Injection in combobox endpoints (solves: CVE-2023-46856 & CVE-2023-49303)<br>
[Bug][Security]                  Prevent loading "isys_cats_person_list" data over combobox "load" endpoint<br>
[Bug][Security]                  Escape config values before writing them into config.inc.php (solves: CVE-2023-49300)<br>
[Bug][Security]                  Remove option to download other files than i-doit update files via atomatic updater (solves: CVE-2023-49307)<br>
[Bug][Security]                  Remove possibility to execute mysqldump over the UI<br>
[Bug][Security]                  Prevent XSS in "qr.php" (solves: CVE-2023-49301)<br>
[Bug][Security]                  Prevent XSS in category update for "File Links" (solves: CVE-2023-49302)<br>
[Bug][Security]                  Prevent XSS in IT-Service Filter (solves: CVE-2023-49304)<br>
[Bug][Security]                  Prevent XSS in Logbook entries through category data (solves: CVE-2023-49305)<br>
[Bug][Security]                  Prevent XSS in usage of "proxy.php" (solves: CVE-2023-49306)<br>
[Bug][Security]                  Prevent Path Traversal in Filemanager endpoint (solves: CVE-2023-49308)<br>
[Bug][Security]                  Prevent Path Traversal in Filemanager "Image" in CMDB (solves: CVE-2023-49309)<br>
[Bug][Security]                  Prevent Path Traversal in Import Module which allows to delete files (solves: CVE-2023-49311)<br>
[Bug][Security]                  Disallow file urls in "reports.browser-url" to prevent exposing sensitive file contents (solves: CVE-2023-49310)<br>
[Bug][Security]                  Add rights guard to isys_ajax_handler_logbook.class.php<br>
[Bug][Security]                  Add guard by right-checking to "isys_ajax_handler_json.class.php"<br>
[Bug][Report-Manager]            Report objects adds after each column<br>
[Bug][Report-Manager]            Exported report displays **id** column<br>
[Bug][Report-Manager]            HTML is displayed in Report<br>
[Bug][Report-Manager]            Adding a condition block for location > below > X location outputs no results<br>
[Bug][Report-Manager]            Status filter for multivalue categories in report manager is not working correctly for custom categories<br>
[Bug][Report-Manager]            Status filter for multivalue categories is not working for CPU cores<br>
[Bug][Report-Manager]            Operators for some fields can not be selected - TypeError: equation.map is not a function<br>
[Bug][Report-Manager]            Placeholder is not correctly replaced<br>
[Bug][Report-Manager]            SQL error in report manager for Wiring System > Assigned objects categories<br>
[Bug][Report-Manager]            %LIKE% Operator for guarantee date is not working correctly<br>
[Bug][Report-Manager]            '=' operator does not work correctly for custom categories<br>
[Bug][Report-Manager]            The encoding of umlauts are displayed in report titles<br>
[Bug][API]                       Can not use API when the API System Person is deleted<br>
[Bug][API]                       Contact roles can not be authorized for API<br>
[Bug][API]                       SQL error when using order_by<br>
[Bug][Categories]                Reordering category folders causes visibility "eye" to disappear<br>
[Bug][Categories]                'Edit' button disappears after 'purging' single value categories<br>
[Bug][Categories]                Vertical slots for rack backside are mirrored<br>
[Bug][Categories]                Deselecting a stack member sets it to generic location<br>
[Bug][Categories]                Typo in category "Remote Management Controller" attribute "Primäre ZugriffsURL"<br>
[Bug][System settings]           Not setting SMTP Timeout leads to SMTP Error<br>
[Bug][System settings]           Save buttons do not display a success notification<br>
[Bug][System settings]           Create Ticket button does not use the configured URL with PORT<br>
[Bug][System settings]           API System setting overwrites tenant setting<br>
[Bug][System settings]           System settings are not set through expert settings<br>
[Bug][Validation]                Enable user to filter for attribute settings<br>
[Bug][Validation]                Show empty attribute settings table to user<br>
[Bug][Validation]                Do not show error message in tooltip while hovering over validation error in custom fields<br>
[Bug][Validation]                Description fields yield validation errors on 32bit systems<br>
[Bug][Notifications]             Group and User receive notification if receive strategy (-) is selected and both user & group have primary emails<br>
[Bug][Notifications]             Neither group nor user receive notification if receive strategy (Groups if available, else assigned persons) is selected and only group member has primary email<br>
[Bug][Notifications]             Notifications interval does sent E-Mails also a day after interval date<br>
[Bug][List editing]              Can't create Model in list edit<br>
[Bug][Search]                    Minimum search string error message should match setting<br>
[Bug][Logging]                   Show detailed log does not work<br>
[Bug][Lists]                     Sorting numbers in multi value category<br>
[Bug][CMDB-Explorer]             SQL Error in CMDB Explorer<br>
[Bug][Monitoring]                Monitoring - Livestatus add KeepAlive for checkmk<br>
[Bug][Object type configuration] Assigned SIM cards can not be displayed on the Overview page<br>
[Bug][Installation]              mod_rewrite test button is not working<br>
[Bug][Admincenter]               A tenant can be over-licensed when deactivated<br>

[Task][Category folders] Streamline wording of move browser in Category Tree<br>
[Task][Category folders] Streamline wording of reorder modal in category tree feature<br>
[Tâche][Category folders] Rename message when folder is empty<br>
[Tâche][Category folders] Réinitialiser la liste des catégories lorsque la recherche est supprimée<br>
[Tâche][Category folders] Améliorer le glisser-déposer des dossiers de catégories<br>
[Tâche][Dossiers de catégorie] Ajouter une option pour sélectionner et déplacer plusieurs éléments<br>.
[Task][Category folders] Rename GERMAN Expand Button<br>
[Task][Category folders] Add info to empty state of category folders feature<br>
[Tâche][Category folders] Désactiver le bouton de déplacement quand rien n'est sélectionné<br>
[Task][Category folders] Ajout d'informations sur l'utilisation des constantes de langue pour ajouter un dossier modal<br>
[Task][Code (Internal)] Supprimer globalement la variable $g_convert<br>
[Task][Code (Internal)] Afficher l'architecture dans la vue système<br>
[Tâche][Édition de liste] Le texte avec des zéros en tête doit être écrit plus clairement.<br>
[Improvement][Import] Permettre à l'utilisateur d'importer "input" du premier objet dans cabling import<br>
[Improvement][JDisc] JDisc : Il devrait être possible d'importer plus d'informations (SLOT) concernant le disque dur<br>.
[Improvement][JDisc] Importer des périphériques individuels depuis JDisc en utilisant l'IP via la console / IP filter for JDisc import console command<br>
[Improvement][JDisc] Nouveau mode d'importation JDisc : "Update (Existing)"<br>
[Improvement][JDisc] JDisc Import : Importer les attributs SNMP<br>
[Improvement][JDisc] Comparaison des objets disponibles depuis i-doit et JDisc<br>
[Improvement][JDisc] Archives d'objets qui n'ont pas été vus par JDisc pendant un nombre de jours défini<br>.
[Bug][Code (Internal)] Refactoring the automatic update-check to a separate (ajax) request<br>
[Bug][Code (Internal)] L'installation de différentes versions de modules complémentaires ne remplace pas les anciens fichiers<br>.
[Bug][Code (Internal)] Changements dans la configuration SMTP encryptant le mot de passe<br>
[Bug][Code (Internal)] Les clusters assignés sont supprimés après la sauvegarde de la configuration du type d'objet<br>
[Bug][Code (Internal)] déshumaniser la page de connexion<br>
[Bug][Code (Internal)] Le survol de l'objet placé dans le rack affiche le caractère html au lieu du "ß" si la langue est le français<br>.
[Bug][Code (Internal)] Mauvaise traduction du verrou d'édition<br>
[Bug][Code (Internal)] La création d'un type d'objet à "edit-datastructure" provoque une erreur à cause du https<br>
[Bug][Code (Internal)] Correction de la réinitialisation de l'ID de l'objet dans l'URL de "Configurer le navigateur d'objets" après l'annulation d'une édition<br>
[Bug][Code (Internal)] Les redirections d'icônes ne sont pas mises en cache<br>
[Bug][Code (Internal)] Changer la clé technique dans la catégorie multi-valeurs cause des problèmes dans listview<br>
[Bug][Code (Internal)] Une résolution trop faible n'affiche pas les titres des objets dans la barre de recherche<br>.
[Bug][CMDB] TypeError lors de l'attribution d'un logiciel<br>
[Bug][CMDB] La date d'importation du JDisc est importée comme une chaîne et non comme une date<br>
[Bug][CMDB] Le lieu n'est pas sélectionnable dans le navigateur d'objets<br>.
[Bug][CMDB] La suppression de la 'fin de contrat' d'un contrat le fait réapparaître après la sauvegarde même si le temps d'exécution est maintenant 0<br>
[Bug][CMDB] La constante de langage écrase un autre attribut<br>
[Bug][CMDB] Les champs de date dans la catégorie SIM sont pré-filtrés avec le caractère '-'<br>
[Bug][LDAP] Création d'un filtre LDAP/AD qui inclut plusieurs filtres<br>.
[Bug][Custom categories] Changer les clés techniques pour ne contenir que des mots provoque la perte des valeurs lors du remplissage avec API (Number only)<br>
[Bug][JDisc] Erreur de mappage JDisc avec l'adresse MAC<br>
[Bug][JDisc] Sauver un profil JDisc avec une sélection de catégories vide affiche un avertissement JSON malformé<br>.
[Bug][Category folders] Il est possible de sélectionner des dossiers désactivés comme cible<br>.
[Bug][Category folders] Les traductions ne doivent pas être écrasées après l'ouverture des dossiers de catégories pour la première fois<br>.
[Bug][Category folders] Correction du déplacement des catégories lors de la recherche<br>.
[Bug][Category folders] Correction du saut de port lors de la recherche et de la sélection d'éléments<br>.
[Bug][Category folders] Après avoir utilisé la recherche et supprimé la chaîne via le X, il n'est pas possible de sélectionner le conteneur de la catégorie/du dossier<br>.
[Bug][Category folders] Security issue category folders prevent XSS usage in folder names<br>
[Bug][Category folders] Afficher les catégories de dossiers racine dans le mode de déplacement des dossiers<br>.
[Bug][Category folders] Correct sorting of category folders and categories<br>
[Bug][Category folders] Supprimer les catégories de gauche<br>
[Bug][Category folders] Afficher les constantes de langue dans les modals d'édition de dossier<br>
[Bug][Category folders] Ne pas collapser automatiquement les dossiers de catégories<br>.
[Bug][Category folders] Do not show language constant in add folder modal<br>
[Bug][Category folders] Ne pas afficher le texte "no content" lorsque la catégorie est déplacée dans un dossier vide<br>.
[Bug][Security] Prevent SQL Injection in combobox endpoints (solves : CVE-2023-46856 & CVE-2023-49303)<br>
[Bug][Security] Prevent loading "isys_cats_person_list" data over combobox "load" endpoint<br>
[Bug][Security] Escape config values before writing them into config.inc.php (solves : CVE-2023-49300)<br>
[Bug][Security] Suppression de l'option de téléchargement de fichiers autres que les fichiers de mise à jour i-doit via atomatic updater (solves : CVE-2023-49307)<br>
[Bug][Security] Suppression de la possibilité d'exécuter mysqldump via l'interface utilisateur<br>.
[Bug][Security] Prevent XSS in "qr.php" (solves : CVE-2023-49301)<br>
[Bug][Security] Prevent XSS in category update for "File Links" (solves : CVE-2023-49302)<br>
[Bug][Security] Prevent XSS in IT Service Filter (solves : CVE-2023-49304)<br>
[Bug][Security] Prevent XSS in Logbook entries through category data (solves : CVE-2023-49305)<br>
[Bug][Security] Prevent XSS in use of "proxy.php" (solves : CVE-2023-49306)<br>
[Bug][Security] Prevent Path Traversal in Filemanager endpoint (solves : CVE-2023-49308)<br>
[Bug][Security] Prevent Path Traversal in Filemanager "Image" in CMDB (solves : CVE-2023-49309)<br>
[Bug][Security] Prevent Path Traversal in Import Module which allows to delete files (solves : CVE-2023-49311)<br>
[Bug][Security] Disallow file urls in "reports.browser-url" to prevent exposing sensitive file contents (solves : CVE-2023-49310)<br>
[Bug][Security] Ajouter une garde des droits à isys_ajax_handler_logbook.class.php<br>
[Bug][Security] Add guard by right-checking to "isys_ajax_handler_json.class.php"<br>.
[Bug][Gestionnaire de rapports] Ajout d'objets de rapport après chaque colonne<br>
[Bug][Gestionnaire de rapports] Exported report displays **id** column<br>
[Bug][Gestionnaire de rapports] Le HTML est affiché dans le rapport<br>.
[Bug][Report-Manager] Ajout d'un bloc de conditions pour la localisation > below > X location outputs no results<br>
[Bug][Report Manager] Le filtre d'état pour les catégories multivaluées dans le gestionnaire de rapports ne fonctionne pas correctement pour les catégories personnalisées<br>.
[Bug][Report Manager] Le filtre d'état pour les catégories multivaluées ne fonctionne pas pour les cœurs de CPU<br>
[Bug][Report Manager] Impossible de sélectionner les opérateurs pour certains champs - TypeError : equation.map n'est pas une fonction<br>
[Bug][Report-Manager] Le repère n'est pas correctement remplacé<br>.
[Bug][Gestionnaire de rapports] Erreur SQL dans le gestionnaire de rapports pour Wiring System > Assigned objects categories<br>
[Bug][Gestionnaire de rapports] L'opérateur %LIKE% pour la date de garantie ne fonctionne pas correctement<br>
[Bug][Report-Manager] L'opérateur '=' ne fonctionne pas correctement pour les catégories personnalisées<br>.
[Bug][Gestionnaire de rapports] L'encodage des trémas est affiché dans les titres des rapports<br>.
[Bug][API] Impossible d'utiliser l'API lorsque la personne du système API a été supprimée<br>
[Bug][API] Les rôles de contact ne peuvent pas être autorisés pour API<br>
[Bug][API] Erreur SQL lors de l'utilisation de order_by<br>
[Bug][Categories] Le réordonnancement des dossiers de catégories provoque la disparition de la visibilité "eye"<br>.
[Bug][Categories] Le bouton 'Edit' disparaît après avoir 'purgé' les catégories à valeur unique<br>
[Bug][Categories] Les emplacements verticaux pour l'arrière du rack sont reflétés<br>
[Bug][Categories] Désélectionner un membre de la pile le place à l'emplacement générique<br>
[Bug][Categories] Typo dans la catégorie "Contrôleur de gestion à distance" attribut "Primary AccessURL"<br>
[Bug][System settings] Le fait de ne pas régler le délai SMTP entraîne une erreur SMTP<br>.
[Bug][System settings] Les boutons d'enregistrement n'affichent pas de notification de réussite<br>.
[Bug][System settings] Le bouton Create Ticket n'utilise pas l'URL configurée avec PORT<br>
[Bug][System settings] API System setting overwrites tenant setting<br>
[Bug][System settings] Les paramètres système ne sont pas définis par les paramètres experts<br>
[Bug][Validation] Permettre à l'utilisateur de filtrer les paramètres d'attributs<br>
[Bug][Validation] Afficher une table de paramètres d'attributs vide à l'utilisateur<br>
[Bug][Validation] Ne pas afficher de message d'erreur dans l'info-bulle lors du survol d'une erreur de validation dans les champs personnalisés<br>
[Bug][Validation] Les champs de description génèrent des erreurs de validation sur les systèmes 32bit<br>.
[Bug][Notifications] Le groupe et l'utilisateur reçoivent une notification si la stratégie de réception (-) est sélectionnée et que l'utilisateur et le groupe ont des emails primaires<br>.
[Bug][Notifications] Ni le groupe ni l'utilisateur ne reçoivent de notification si la stratégie de réception (groupes si disponibles, sinon personnes assignées) est sélectionnée et que seul le membre du groupe a l'email principal<br>
[Bug][Notifications] L'intervalle de notification envoie des e-mails même un jour après la date d'intervalle<br>.
[Bug][Édition de liste] Impossible de créer un modèle dans l'édition de liste<br>
[Bug][Search] Le message d'erreur de chaîne de recherche minimum devrait correspondre au réglage<br>
[Bug][Logging] Show detailed log does not work<br>
[Bug][Lists] Tri des numéros dans la catégorie multi-valeurs<br>
[Bug][CMDB-Explorer] Erreur SQL dans CMDB Explorer<br>
[Bug][Monitoring] Monitoring - Livestatus add KeepAlive for checkmk<br>
[Bug][Object type configuration] Les cartes SIM assignées ne peuvent pas être affichées sur la page d'aperçu<br>
[Bug][Installation] mod_rewrite test button is not working<br>
[Bug][Admincenter] Un locataire peut être sur-licencié lorsqu'il est désactivé<br>