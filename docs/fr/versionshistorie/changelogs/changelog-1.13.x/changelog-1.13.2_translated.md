<!-- TRANSLATED by md-translate -->
# Changelog 1.13.2

# Changelog 1.13.2

[Improvement][Relations] Custom relation types should have own constants<br>
[Improvement][LDAP] LDAP synchronization with other attributes than names<br>
[Improvement][Report-Manager] New dynamic properties for all categories<br>
[Bug][Report-Manager] Update: Migration of existing reports fails under certain circumstances<br>
[Bug][Report-Manager] Attribute Variant (Version) in report-manager without Function<br>
[Bug][Report-Manager] Report with a "state" condition generates an error message<br>
[Bug][Report-Manager] Report Manager views do not work correctly<br>
[Bug][Report-Manager] View Network connections of the Report Manager does not display network listeners<br>
[Bug][Report-Manager] Migrate condition "Create new Reports" to the create right<br>
[Bug][Report-Manager] Report Manager: Cannot read attribute "Variant" from category "Installation"<br>
[Bug][Report-Manager] Attribute Database instance (Category Database schema) not available in Report Manager<br>
[Bug][Report-Manager] Date format is ignored in report<br>
[Bug][Report-Manager] Object references do not display the object title<br>
[Bug][Lists] Object-lists: attribute "version number" of category "operating system" not sortable<br>
[Bug][Lists] Object-lists: attribute "version number" of category "operating system" cannot be sorted<br>
[Bug][Lists] Filtering for location path only looks at the shortened path shown<br>
[Bug][System settings] SQL error when location path is set to right justified<br>
[Bug][System settings] Sub directories for uploaded files and logs<br>
[Bug][System settings] Expert setting system.dir.import-uploads should be set by default for each client.<br>
[Bug][Check_MK] Missing setting to define the timeout of Livestatus<br>
[Bug][Validation] Validation does not work with redundant categories<br>
[Bug][CMDB] Error when documenting LUNs<br>
[Bug][CMDB] Cannot create client because CPU frequency unit is mandatory<br>
[Bug][CMDB] Saving the "CPU frequency" value without its unit is not correct<br>
[Bug][CMDB] Use the correct separator for numeric formats<br>
[Bug][List editing] Blank values ("-") in Dialog+ fields could not selected in the list edit.<br>
[Bug][List editing] Make attribute "Layer 2 Network Assignment" from the category Port available for list edit<br>
[Bug][List editing] Make attribute "Default gateway for the network" from the Host address category available for the list edit<br>
[Bug][List editing] Location selection wider in the list edit<br>
[Bug][List editing] More efficient use of available space from left to right in list edit<br>
[Bug][List editing] Dark Screen when Host Address is selected for list edit<br>
[Bug][Categories] duplicate a storage-object excludes the standard VLAN<br>
[Bug][Categories] Creation of Layer-3 nets not possible<br>
[Bug][Categories] Category "sim card" assignment of a Twincard not possible<br>
[Bug][Categories] Error "cannot find category" when editing view in category "assigned ports"<br>
[Bug][Categories] After archiving a licence, it is still being used and displayed in related installations<br>
[Bug][Categories] Warning when saving numeric attributes with German format<br>
[Bug][Templates] Objects of the types "Organization" and "Person groups" which are used in templates for assigned contacts will be<br>
[Bug][Update] Upadte to the 1.13.1 creates database error<br>
[Bug][Notifications] Notifications query error<br>
[Bug][Notifications] Notification about expired certificates that are archived<br>
[Bug][Admincenter] Login to the AdminCenter is possible with the encrypted hash<br>
[Bug][Events] Active Event-Addon causes that layer-3-net could not created<br>
[Bug][Import] JDisc import via console creates error with the category "port"<br>
[Bug][Import] XML import creates an empty logfile<br>
[Bug][Console-base Installation/Update/Licensing] After the update from i-doit 1.13 to 1.13.1 it's not possible to use search-index with the console.php<br>
[Bug][Object type configuration] Error message in Quick Configuration Wizard while creatingg new object type groups/object types<br>
[Bug][CSV Import] CSV-Import: Contact assignment via username not possible during console import<br>
[Bug][Installation] The initial tenant database is created with ID 2.<br>
[Bug][API] User defined categories are not editable with cmdb.object.create<br>
[Bug][API] In custom categories, the data type Text instead of TextArea is used for fields of type HTML editor.<br>
[Bug][Systemtools] Database export function creates a 0KB dump file<br>
[Bug][Search] Searching for Tags from category "general" not possible<br>
[Bug][JDisc] Import of port descriptions via JDISC<br>
[Bug][JDisc] Changes in the JDISC profiles forward to empty site and doesn't save changes<br>
[Bug][User settings] Default treeview changes value when numeric format is changed<br>
[Bug][Logbook] Logbook content not written for chassis when using JDisc import<br>
[Bug][Logbook] Changes of connections to objects are not shown in logbook of linked object<br>
[Bug][Logbook] The logbook receives incorrect data<br>
[Bug][Logbook] Order of logbook entries from simultanous processes sometimes not chronological<br>
[Bug][LDAP] Session management locks LDAP users if multiple tenants are used with LDAP<br>
[Bug][Objects] Object Browser: Linked license is only marked in the sub-selection<br>
[Bug][OCS] Rebuild search index after OCS import<br>
[Bug][Code (internal)] "Create new object" button in object browser should also be available if no selection is possible<br>

[Improvement][Relations] Les types de relations personnalisées doivent avoir leurs propres constantes<br>.
[Improvement][LDAP] Synchronisation LDAP avec d'autres attributs que les noms<br>
[Improvement][Gestionnaire de rapports] Nouvelles propriétés dynamiques pour toutes les catégories<br>
[Bug][Report-Manager] Mise à jour : la migration de rapports existants échoue dans certaines circonstances<br>
[Bug][Report-Manager] Attribut Variant (Version) dans report-manager sans fonction<br>
[Bug][Report-Manager] Un rapport avec une condition "state" génère un message d'erreur<br>
[Bug][Report-Manager] Les vues du gestionnaire de rapports ne fonctionnent pas correctement<br>
[Bug][Report-Manager] View Network connections of the Report Manager does not display network listeners<br>
[Bug][Report Manager] Migrer la condition "Créer de nouveaux rapports" à droite<br>.
[Bug][Report Manager] Report Manager : Cannot read attribute "Variant" from category "Installation"<br>
[Bug][Report-Manager] Instance de base de données d'attributs (schéma de base de données de catégorie) non disponible dans le Report Manager<br>.
[Bug][Report Manager] Le format de la date est ignoré dans le rapport<br>.
[Bug][Report-Manager] Les références d'objets n'affichent pas le titre de l'objet<br>
[Bug][Lists] Listes d'objets : attribut "numéro de version" de la catégorie "système d'exploitation" non triable<br>
[Bug][Lists] Listes d'objets : l'attribut "numéro de version" de la catégorie "système d'exploitation" ne peut pas être trié<br>
[Bug][Lists] Le filtrage du chemin d'accès ne prend en compte que le chemin raccourci affiché<br>.
[Bug][System settings] SQL error when location path is set to right justified<br>
[Bug][System settings] Sub directories for uploaded files and logs<br>
[Bug][System settings] Expert setting system.dir.import-uploads should be set by default for each client.<br>
[Bug][Check_MK] Paramètre manquant pour définir le délai d'attente de l'état vivant<br>
[Bug][Validation] La validation ne fonctionne pas avec les catégories redondantes<br>.
[Bug][CMDB] Erreur lors de la documentation des LUN<br>.
[Bug][CMDB] Cannot create client because CPU frequency unit is mandatory<br>
[Bug][CMDB] Sauver la valeur "CPU frequency" sans son unité n'est pas correct<br>
[Bug][CMDB] Utiliser le bon séparateur pour les formats numériques<br>
[Bug][List editing] Les valeurs vides ("-") dans les champs Dialog+ ne pouvaient pas être sélectionnées dans l'édition de la liste.<br>
[Bug][List editing] Make attribute "Layer 2 Network Assignment" from the category Port available for list edit<br>
[Bug][List editing] Make attribute "Default gateway for the network" from the Host address category available for the list edit<br>
[Bug][List editing] Sélection de l'emplacement plus large dans l'édition de la liste<br>
[Bug][List editing] Utilisation plus efficace de l'espace disponible de gauche à droite dans l'édition de liste<br>
[Bug][List editing] Ecran noir quand l'adresse de l'hôte est sélectionnée pour l'édition de la liste<br>
[Bug][Categories] dupliquer un objet de stockage exclut le VLAN par défaut<br>
[Bug][Categories] Création de réseaux de couche 3 impossible<br>
[Bug][Categories] Category "sim card" assignment of a twincard not possible<br>
[Bug][Categories] Erreur "cannot find category" lors de l'édition de la vue dans la catégorie "assigned ports"<br>
[Bug][Categories] Après l'archivage d'une licence, elle est toujours utilisée et affichée dans les installations associées<br>.
[Bug][Categories] Avertissement lors de la sauvegarde d'attributs numériques avec format français<br>
[Bug][Templates] Les objets de type "Organisation" et "Groupes de personnes" utilisés dans les modèles de contacts attribués seront<br>
[Bug][Update] Upadte to the 1.13.1 creates database error<br>
[Bug][Notifications] Erreur de requête des notifications<br>
[Bug][Notifications] Notification de certificats expirés qui sont archivés<br>
[Bug][Admincenter] La connexion à l'AdminCenter est possible avec le hash crypté<br>
[Bug][Events] Active Event-Addon provoque l'impossibilité de créer un réseau de couche 3<br>
[Bug][Import] JDisc import via console crée une erreur avec la catégorie "port"<br>
[Bug][Import] XML import crée un fichier journal vide<br>
[Bug][Console-base Installation/Update/Licensing] Après la mise à jour d'i-doit 1.13 à 1.13.1 il n'est pas possible d'utiliser search-index avec le console.php<br>
[Bug][Object type configuration] Message d'erreur dans l'assistant de configuration rapide lors de la création de nouveaux groupes/types d'objets<br>
[Bug][CSV Import] CSV Import : Contact assignment via username not possible during console import<br>
[Bug][Installation] La base de données initiale du locataire est créée avec ID 2.<br>
[Bug][API] Les catégories définies par l'utilisateur ne sont pas éditables avec cmdb.object.create<br>
[Bug][API] Dans les catégories personnalisées, le type de données Text au lieu de TextArea est utilisé pour les champs de type HTML editor.<br>
[Bug][Outils système] La fonction d'exportation de la base de données crée un fichier de vidage de 0KB<br>.
[Bug][Search] La recherche de tags de la catégorie "general" n'est pas possible<br>.
[Bug][JDisc] Importation des descriptions de ports via JDISC<br>
[Bug][JDisc] Les changements dans les profils JDISC renvoient à un site vide et n'enregistrent pas les changements<br>
[Bug][User settings] L'arborescence par défaut change de valeur lorsque le format numérique est modifié<br>
[Bug][Logbook] Contenu du logbook non écrit pour le châssis lors de l'utilisation de JDisc import<br>
[Bug][Logbook] Les changements de connexions aux objets ne sont pas affichés dans le logbook de l'objet lié<br>.
[Bug][Logbook] Le logbook reçoit des données incorrectes<br>
[Bug][Logbook] Ordre des entrées du logbook issues de processus simultanés parfois non chronologique<br>
[Bug][LDAP] La gestion des sessions verrouille les utilisateurs LDAP si plusieurs locataires sont utilisés avec LDAP<br>.
[Bug][Objects] Navigateur d'objets : La licence liée n'est marquée que dans la sous-sélection<br>.
[Bug][OCS] Reconstruction de l'index de recherche après l'importation OCS<br>
[Bug][Code (interne)] Le bouton "Create new object" dans le navigateur d'objets devrait également être disponible si aucune sélection n'est possible<br>.