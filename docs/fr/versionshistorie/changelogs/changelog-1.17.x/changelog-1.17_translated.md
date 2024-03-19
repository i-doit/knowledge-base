<!-- TRANSLATED by md-translate -->
# Changelog 1.17

# Changelog 1.17

[Improvement][Categories] New license type "CPU core-based"<br>
[Improvement][Categories] Calculation for licenses of type "CPU core based"<br>
[Improvement][Custom categories] Configuration to manually design the structure of labels and fiels of custom categories<br>
[Improvement][Lists] Filtering for empty field in object lists<br>
[Improvement][Lists] Filter for empty values in object lists<br>
[Improvement][Lists] Filter for empty values in object lists<br>
[Improvement][Logbook] Full information for changes in backwards categories<br>
[Bug][Categories] Changes on the overview page create an empty entry in the category "software assignment" if this catgory is used on the overview page and the object has an assigned operating system<br>
[Bug][Categories] Apache2 is completely used up if a free IP address is searched for but there is no free IP address in the selected address allocation.<br>
[Bug][Categories] The search domain is not added when the network is changed<br>
[Bug][Categories] ##COUNT## Placeholder is not evaluated for outputs (connection)<br>
[Bug][Categories] Description of category "Emergency Plan" (Folder) is not forwarded to category "Emergency plan properties"<br>
[Bug][Categories] "Export as CSV" button is missing in category Applications > Installation<br>
[Bug][Categories] Assignment of persons to person groups is not shown properly<br>
[Bug][Categories] CSV import: Application category is not displayed for the Application object type<br>
[Bug][Custom categories] For the "Date and time" field type, the time is not displayed in the object list<br>
[Bug][Custom categories] Custom category not usable if attributes have backslashes in title<br>
[Bug][Update] Backup config files accessable<br>
[Bug][CSV Import] Values in user-defined categories are not overwritten by the CSV import option "Overwrite empty values<br>
[Bug][CSV Import] CSV Import: When a profile is saved, the last profile in the list is always selected.<br>
[Bug][CSV Import] CSV import escaped no "special characters<br>
[Bug][CSV Import] Missing configuration of the "Number of lines per import batch" count<br>
[Bug][JDisc] JDisc: "old" logic for databases is not imported correctly<br>
[Bug][JDisc] Clusters imported via JDisc are machted only by their name<br>
[Bug][Code (internal)] Cable connections are not displayed when inputs and outputs are connected<br>
[Bug][Code (internal)] Calling a license key entry with less than (<) characters blocks the use of the Licenses > License Assignment >> License Keys category<br>
[Bug][Code (internal)] Uploaded files with an umlaut as initial letter cannot be downloaded<br>
[Bug][Code (internal)] When deleting object images the folders should also be deleted if they are empty.<br>
[Bug][Lists] Using a default sorting for object lists causes an error<br>
[Bug][Lists] Attribute selection for category list of category "software assignment" incomplete<br>
[Bug][Lists] Sorting the attribute "Salutation" in object list causes an error<br>
[Bug][Logbook] Instead of the object name the logbook contains only the ID<br>
[Bug][Report-Manager] Using attribute "Net" from category "Hostaddress" in report manager causes an error<br>
[Bug][Report-Manager] Report Manager: When using the category Service Assignment > Attribute Service there is an SQL error message<br>
[Bug][Report-Manager] When sorting by object type (General) in the report, a 500 error is displayed<br>
[Bug][Report-Manager] Sub category "persons" of category "organization" can not supply linked attributes<br>
[Bug][Report-Manager] Report Manager: using people group membership as a condition generates SQL error message<br>
[Bug][Report-Manager] Managed devices of a remote management conroller cannot be selected in the report<br>
[Bug][Report-Manager] The attribute Assigned Layer-3-net of the category Layer-2-Net ist not selectable in reports<br>
[Bug][Authorization system] Permissions of person groups are still active, even if the person group is archived or deleted<br>
[Bug][Authorization system] The permission to create objects is not inherited for person group editor<br>
[Bug][Authorization system] Display error for the permissions "archive" and "delete" for "reports in category<br>
[Bug][Authorization system] Removing LDAP right removes access to user-defined categories<br>
[Bug][Notifications] Notifications can be created without the create permission<br>
[Bug][Validation] The category Contract cannot be edited via list editing if validation is activated for the attribute "Runtime unit".<br>
[Bug][Validation] Validation for category host address automatically assigns a new IP address although it should be blocked<br>
[Bug][CMDB] Sort by object count in object list configuration does not sort correctly<br>
[Bug][CMDB] Display error after aborting editing of the "General" category<br>
[Bug][List editing] Right "categories in object type" does not enable to modify content in list edit<br>
[Bug][LDAP] Login with an LDAP user generates error messages in the exceptions.log file<br>
[Bug][Import] Target schema (category: software assignment) cannot be filled via CSV import<br>
[Bug][Import] Active Directory computer import does not offer a choice of which object type to import as<br>

[Improvement][Categories] Nouveau type de licence "CPU core-based"<br>
[Improvement][Categories] Calcul pour les licences de type "CPU core based"<br>
[Amélioration][Catégories personnalisées] Configuration pour concevoir manuellement la structure des étiquettes et des pièges des catégories personnalisées<br>.
[Improvement][Lists] Filtrage des champs vides dans les listes d'objets<br>.
[Improvement][Lists] Filtre pour les valeurs vides dans les listes d'objets<br>
[Improvement][Lists] Filtre pour les valeurs vides dans les listes d'objets<br>
[Improvement][Logbook] Full information for changes in backwards categories<br>
[Bug][Categories] Les changements sur la page d'aperçu créent un vide dans la catégorie "assignation de logiciel" si ce catgorie est utilisé sur la page d'aperçu et que l'objet a un système d'exploitation assigné<br>
[Bug][Categories] Apache2 est complètement utilisé si une adresse IP libre est recherchée mais qu'il n'y a pas d'adresse IP libre dans l'allocation d'adresse sélectionnée.<br>
[Bug][Categories] Le domaine de recherche n'est pas ajouté lorsque le réseau est modifié<br>.
[Bug][Categories] ##COUNT## Le détenteur de la place n'est pas évalué pour les sorties (connexion)<br>
[Bug][Categories] La description de la catégorie "Plan d'urgence" (dossier) n'est pas transférée dans la catégorie "Propriétés du plan d'urgence"<br>.
[Bug][Categories] Le bouton "Export as CSV" est manquant dans la catégorie Applications > Installation<br>.
[Bug][Categories] L'affectation des personnes aux groupes de personnes ne s'affiche pas correctement<br>
[Bug][Categories] CSV import : la catégorie d'application n'est pas affichée pour le type d'objet d'application<br>
[Bug][Custom categories] Pour le type de champ "Date et heure", l'heure n'est pas affichée dans la liste des objets<br>.
[Bug][Custom categories] Catégorie personnalisée inutilisable si les attributs ont des anti-slashs dans le titre<br>
[Bug][Update] Fichiers de config de sauvegarde accessibles<br>
[Bug][CSV Import] Les valeurs des catégories définies par l'utilisateur ne sont pas écrasées par l'option d'importation CSV "Overwrite empty values<br>".
[Bug][CSV Import] CSV Import : Lorsqu'un profil est sauvegardé, le dernier profil de la liste est toujours sélectionné.<br>
[Bug][CSV Import] CSV import n'échappe pas aux "caractères spéciaux<br>".
[Bug][CSV Import] Configuration manquante du compte "Nombre de lignes par lot d'import"<br>
[Bug][JDisc] JDisc : la "vieille" logique pour les bases de données n'est pas importée correctement<br>
[Bug][JDisc] Les clusters importés via JDisc ne sont rendus que par leur nom<br>.
[Bug][Code (interne)] Les connexions de câbles ne sont pas affichées lorsque les entrées et les sorties sont connectées<br>.
[Bug][Code (interne)] Appeler une entrée de clé de licence avec moins de (<) caractères bloque l'utilisation de la catégorie Licences > Affectation des licences >> Clés de licence<br>
[Bug][Code (interne)] Les fichiers téléchargés avec un umlaut comme lettre initiale ne peuvent pas être téléchargés<br>
[Bug][Code (interne)] Lors de la suppression d'images objets, les dossiers devraient également être supprimés s'ils sont vides.<br>
[Bug][Lists] L'utilisation d'un tri par défaut pour les listes d'objets provoque une erreur<br>.
[Bug][Lists] Sélection d'attributs pour la liste des catégories de la catégorie "assignation de logiciel" incomplète<br>.
[Bug][Lists] Le tri de l'attribut "Salutation" dans la liste des objets provoque une erreur<br>.
[Bug][Logbook] Au lieu du nom de l'objet, le logbook ne contient que l'ID<br>.
[Bug][Gestionnaire de rapports] L'utilisation de l'attribut "Net" de la catégorie "Adresse de l'hôte" dans le gestionnaire de rapports provoque une erreur<br>.
[Bug][Report Manager] Report Manager : Quand on utilise la catégorie Service Assignment > Attribute Service il y a un message d'erreur SQL<br>.
[Bug][Report Manager] Lorsque l'on trie par type d'objet (General) dans le rapport, une erreur de 500 est affichée<br>.
[Bug][Gestionnaire de rapports] La sous-catégorie "personnes" de la catégorie "organisation" ne peut pas fournir d'attributs liés<br>.
[Bug][Report-Manager] Report Manager : l'utilisation de l'appartenance à un groupe de personnes comme condition génère un message d'erreur SQL<br>.
[Bug][Gestionnaire de rapports] Les périphériques gérés d'un routeur de gestion à distance ne peuvent pas être sélectionnés dans le rapport<br>.
[Bug][Gestionnaire de rapports] L'attribut Assigned Layer-3-net de la catégorie Layer-2-Net n'est pas sélectionnable dans les rapports<br>.
[Bug][Authorization system] Les permissions des groupes de personnes sont toujours actives, même si le groupe de personnes est archivé ou supprimé<br>.
[Bug][Authorization system] La permission de créer des objets n'est pas héritée pour l'éditeur de groupe de personnes<br>
[Bug][Authorization system] Erreur d'affichage pour les permissions "archiver" et "supprimer" pour les "rapports dans la catégorie<br>".
[Bug][Authorization system] La suppression du droit LDAP supprime l'accès aux catégories définies par l'utilisateur<br>
[Bug][Notifications] Les notifications peuvent être créées sans la permission de création<br>.
[Bug][Validation] Le contrat de catégorie ne peut pas être modifié via l'édition de liste si la validation est activée pour l'attribut "Runtime unit".<br>
[Bug][Validation] La validation de l'adresse hôte de la catégorie attribue automatiquement une nouvelle adresse IP alors qu'elle devrait être bloquée<br>.
[Bug][CMDB] Le tri par nombre d'objets dans la configuration de la liste d'objets ne se fait pas correctement<br>.
[Bug][CMDB] Erreur d'affichage après l'arrêt de l'édition de la catégorie "General"<br>
[Bug][Édition de liste] Le droit "Catégories dans le type d'objet" ne permet pas de modifier le contenu dans l'édition de liste<br>
[Bug][LDAP] La connexion avec un utilisateur LDAP génère des messages d'erreur dans le fichier exceptions.log<br>
[Bug][Import] Le schéma cible (catégorie : attribution du logiciel) ne peut pas être rempli via CSV import<br>
[Bug][Import] L'importation d'ordinateur Active Directory n'offre pas le choix du type d'objet à importer comme<br>