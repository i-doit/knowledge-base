<!-- TRANSLATED by md-translate -->
# Changelog 1.13.1

# Changelog 1.13.1

[Task][List editing] Multiple hardware RAIDS appear in list edit although none were created<br>
[Improvement][Report-Manager] Reports should always contain a constant<br>
[Improvement][Report-Manager] Virtuelle und dynamische Properties in Report Manager Konditionen<br>
[Improvement][Categories] New Command: Restore category data of lost references<br>
[Improvement][Cabling import] The cabling import does not import as intended.<br>
[Improvement][Import] Identification of objects during csv imports via IMEI<br>
[Improvement][Code (internal)] Clear user credentials via command<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based installation of the i-doit add-ons<br>
[Improvement][CMDB-Explorer] Display direction of relations in the CMDB-Explorer<br>
[Improvement][Systemtools] Command to convert the engine from MySQL tables to INNODB<br>
[Bug][Report-Manager] Report Manager: Category "software-assignment" title is also displayed in the category "operating-system" attribute "operating-system"<br>
[Bug][Report-Manager] Report Manager: Output of the grouped MultiValues error during CSV/TXT export<br>
[Bug][Report-Manager] Attribute "variant" only displays the title in report output<br>
[Bug][Report-Manager] Missing attributes from category "Net" in Report Manager to define conditions<br>
[Bug][Report-Manager] Attribute "Aliase" not available in report Manager<br>
[Bug][Report-Manager] Attribute "hostname" from category "monitoring" is not available in report manager<br>
[Bug][Report-Manager] Simultanous display of operating system and software assignment in report not possible<br>
[Bug][Report-Manager] The role of persons is not displayed in the Report Manager.<br>
[Bug][Report-Manager] Subselects for Dynamic Groups<br>
[Bug][Report-Manager] Create reports with the Logbook category as a condition<br>
[Bug][Report-Manager] Combining object title and primary hosdt address in report manager leads to multiple output of the same object<br>
[Bug][Report-Manager] Variable report results in a SQL error<br>
[Bug][Report-Manager] Report-Manager: Assignment Category "Service Assignment" does not return blank values<br>
[Bug][Report-Manager] Reports: Combination of dynamic property and condition leads to sql error<br>
[Bug][Report-Manager] Report for "Inserted at" uses a wrong DB table<br>
[Bug][Report-Manager] It is not possible to show objects without assignments in report manager<br>
[Bug][Categories] SQL error when the category "Layer-3 net" is sorted by "Net with suffix".<br>
[Bug][Categories] Condition "Normal" can always be selected in category "General"<br>
[Bug][Categories] The Form Factor category does not store any data in the overview.<br>
[Bug][Categories] Back of a chassis is not presented in rack view<br>
[Bug][Categories] Category port dialog plus field does not work together with cabling category<br>
[Bug][Categories] Revision of the Hostadresses Category<br>
[Bug][Categories] Improved handling for editing hight unit when swapping objects between front and back of a rack<br>
[Bug][Categories] Correct formatting of the overview page when reports and categories are to be displayed<br>
[Bug][Categories] Category "service logbook" is even duplicated when not selected for duplication<br>
[Bug][Categories] Change attributes in object lists removed wrong attribute in default filter<br>
[Bug][Categories] Long port names are truncated in Port Browser<br>
[Bug][Categories] Dateien in der Kategorie Objektbild sind für alle Mandanten sichtbar<br>
[Bug][Categories] The "Assigned Organization" column does not display any data.<br>
[Bug][Categories] Relationships between objects are not displayed in the list view.<br>
[Bug][Categories] Wrong default value category "host address" in attribute "Address assignment"<br>
[Bug][Categories] Category: "Service" Subcategory "Service Type" the attribute "Type" is not loaded correctly<br>
[Bug][Categories] Title of objects in slots is not shown in category "Racks"<br>
[Bug][Categories] Database field type for isys_validation_config.isys_validation_config__json changed<br>
[Bug][Categories] Rack view: Blade chassis are not displayed vertically<br>
[Bug][Categories] Display dropdown menu to choose entry status in category "cluster members"<br>
[Bug][Categories] Deselect attributes in object lists removes values in standard filter<br>
[Bug][Categories] The time/date at "Initial Import" in the category "Custom Identifier" is not displayed correct<br>
[Bug][Categories] Double Category Entries<br>
[Bug][OCS] Capacities are always imported as byte in OCS import<br>
[Bug][OCS] Capacities of SNMP devices are not updated properly by OCS import<br>
[Bug][Lists] SQL error message in object list<br>
[Bug][Lists] Sorting location path uses root location for sorting<br>
[Bug][Lists] The description field is missing as an attribute in the category lists Configuration for the category "E-Mail Addresses"<br>
[Bug][Lists] Object list configuration only mirrors selected attributes to other users and default configuration<br>
[Bug][Lists] Logical location of an object is not displayed in object list<br>
[Bug][Lists] Setting for maximum lenght of location paths does not work with object lists<br>
[Bug][Lists] Sorting of shortened location paths in object lists<br>
[Bug][Lists] Showing linked beginning and end of conctracts in object lists<br>
[Bug][Lists] Object Lists: Add Custom Attributes<br>
[Bug][Lists] E-mail address is always displayed as HTML-mailto in object lists<br>
[Bug][Check_MK] Missing setting to define the timeout of Livestatus<br>
[Bug][LDAP] Sync all LDAP groups when paging is enabled<br>
[Bug][LDAP] Improved handling of deactivated/moved users originating from AD<br>
[Bug][LDAP] Don't show email icon if LDAP has mail set as filter<br>
[Bug][CMDB] Sort by model<br>
[Bug][CMDB] Capacities "Bit" and "Terabit" are missing<br>
[Bug][CMDB] Creating assigned devices of an blade chassis causes an white screen<br>
[Bug][List editing] Activate edited SLA´s<br>
[Bug][List editing] Edit the Service Category in List Editing<br>
[Bug][List editing] Release the connections in the Service Assignment category.<br>
[Bug][List editing] List editing: Filter for object browser does not always work<br>
[Bug][List editing] Listenditierung: Detach from a location impossible<br>
[Bug][List editing] Controller isn't selectable for all objects in list edit<br>
[Bug][List editing] List Editing: It is not possible to assign workstations in the "assigned workstation" category<br>
[Bug][List editing] Empty Sub-Categories in the list edit<br>
[Bug][List editing] Multiedit displays categories without attributes<br>
[Bug][List editing] Saving a host address generates an error message<br>
[Bug][List editing] Leave excluded fields from list edit excluded after saving<br>
[Bug][Import] CSV Import: Assignment of licences<br>
[Bug][Import] For Layer-2 nets the field = Layer-3 net assignment is missing for an import.<br>
[Bug][Import] The device assignment of the category Slots (Switch Chassis) cannot be assigned in csv-import.<br>
[Bug][Import] Import variants of operating systems<br>
[Bug][Import] OCS Import Categories<br>
[Bug][Import] Editing an object matching profile doesn't work as it should be<br>
[Bug][Objects] Error "name must be a valid object or a string" when accessing objects<br>
[Bug][Objects] Category "Virtual Devices" attribute "Host Ressource" displays incorrect "switch port groups"<br>
[Bug][Objects] Changes to DialogPlus fields are not output correctly<br>
[Bug][CSV Import] Option to overwrite existing entries in multi value categories also overwrites newly imported entries<br>
[Bug][CSV Import] CSV import also creates logbook entries, if content is not changed<br>
[Bug][CSV Import] CSV import: "Virtual machine" attribute of the "Virtual machine" category is not set correctly<br>
[Bug][System settings] Administration forwards to an empty site if Check_MK2 has been deactivated<br>
[Bug][System settings] Deny unauthenticated access to /upload/images<br>
[Bug][System settings] Darstellungsfehler in der Rechteverwaltung<br>
[Bug][System settings] HTML editor changes content enumeration<br>
[Bug][Systemtools] Improvement of location correction<br>
[Bug][Admincenter] GRANT command during tenant creation via console does not consider localhost<br>
[Bug][Admincenter] When combining tenant and subscription licenses some add-ons are not correctly licensed<br>
[Bug][Admincenter] Tenant licenses "in use" and "free" don't take deactivated tenants into account and displays wrong value for free tenant licenses<br>
[Bug][Notifications] Notification number is not reset<br>
[Bug][Notifications] Notification query error with the placeholder %notifications__threshold_unit%<br>
[Bug][Notifications] Notify a contact group<br>
[Bug][License installation (i-doit)] Limit for tenants uses incorrect counting during licensing<br>
[Bug][Code (internal)] Perform a correct property migration for the Software Assignment category<br>
[Bug][Code (internal)] The condition General > Description in the Report Manager is no longer a text field.<br>
[Bug][Code (internal)] HTTP 500 Search error message when self-created add-on is disabled<br>
[Bug][Code (internal)] When exchanging the outputs and inputs, the window is displayed empty.<br>
[Bug][Code (internal)] Check the system settings for valid JSON<br>
[Bug][Authorization system] After an object has been archived, it is no longer displayed<br>
[Bug][Authorization system] Archive/delete only possible, if the user has rights to all objects of the corresponding object type<br>
[Bug][Authorization system] Location permissions do not show archived / deleted in object lists<br>
[Bug][Authorization system] Rights check for files in the file browser<br>
[Bug][Validation] Objectview not possible if category validation is active<br>
[Bug][Validation] Validate newly created objects<br>
[Bug][Mass editing] Software assignment clears operating system assignment during mass change<br>
[Bug][Mass editing] Disconnect the field "Purchased from:" in the accounting category by the mass change.<br>
[Bug][Mass editing] Automatically replace object titles via mass change with %COUNTER:11#6%.<br>
[Bug][Mass editing] Error during the actions of mass-change<br>
[Bug][Mass editing] Creating a template for a mass change generates white screen<br>
[Bug][Custom categories] The Report Manager adds unnecessary placeholders if the category is a custom category<br>
[Bug][Custom categories] Print view of variable reports incorrect<br>
[Bug][My-doit] Assigned/created orders are not displayed in My-doit<br>
[Bug][Console] Memory leak when performing a loogbook archive via i-doit console<br>
[Bug][Logbook] Long logbook entries move the other columns out of the view area<br>
[Bug][Logbook] Wrong content in logbook when changing the selection for object assignment<br>
[Bug][Logbook] Pass changed values to the logbook<br>
[Bug][Events] When using /main/ as i-doit installation directory events are not callable<br>
[Bug][Relations] Relationships: Category "Wan-connection" Attribute: "connected networks" no relationship is created<br>
[Bug][Relations] The relationship of the category Contact assignment is deleted during archiving.<br>
[Bug][JDisc] JDISC: Import of loopback and logical ports not possible<br>
[Bug][JDisc] JDISC-import: IP-address change is not displayed correctly in the logbook<br>
[Bug][JDisc] Logbook: Empty entries through the JDisc import<br>
[Bug][H-Inventory] H-Inventory-Import: Software Assignment relationships are not removed correctly<br>
[Bug][Templates] Default tempalte is sometimes ignored for custom categories<br>
[Bug][Templates] Field-placeholder %COUNTER% does not work correctly in default templates<br>
[Bug][CMDB-Explorer] Loop when creating connections in cmdb explorer<br>
[Bug][CMDB-Explorer] CMDB-Explorer exports wrong GraphML data<br>
[Bug][CMDB-Explorer] CMDB-Explorer exports duplicated GraphML edges<br>
[Bug][Search] Search switches selection of object type group<br>
[Bug][Search] Fix deadlock in search index while using API<br>
[Bug][Search] Global search of Layer-3 networks over IP<br>
[Bug][Search] Correct formatting of the search result<br>
[Bug][Installation] Files and directories in temp/ are world-writable<br>
[Bug][Installation] Removing checks for extensions not needed to use i-doit<br>
[Bug][API] PHP warning when saving a storage device without connected HDs<br>
[Bug][API] Reading WAN category via API does not always return an object ID<br>
[Bug][API] Properties with units are not consistent when retried via API<br>
[Bug][QR-Codes] Global QR code configuration is overwritten<br>
[Bug][User settings] Numeric format setting has no effect<br>
[Bug][CMDB settings] Configurable logging<br>

[Task][List editing] Plusieurs RAIDS matériels apparaissent dans l'édition de la liste alors qu'aucun n'a été créé<br>.
[Improvement][Gestionnaire de rapports] Les rapports devraient toujours contenir une constante<br>
[Improvement][Gestionnaire de rapports] Propriétés virtuelles et dynamiques dans les conditions du gestionnaire de rapports<br>
[Improvement][Categories] Nouvelle commande : Restore category data of lost references<br>
[Improvement][Cabling import] L'importation de câblage ne se fait pas comme prévu.<br>
[Improvement][Import] Identification des objets lors des importations csv via IMEI<br>
[Improvement][Code (interne)] Clear user credentials via command<br>
[Improvement][Console-base installation/mise à jour/licensing] Installation des add-ons i-doit à partir de la console<br>
[Improvement][CMDB-Explorer] Affichage du sens des relations dans l'explorateur CMDB<br>
[Improvement][Outils système] Commande pour convertir le moteur des tables MySQL en INNODB<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : le titre de la catégorie "assignation de logiciel" est également affiché dans la catégorie "système d'exploitation" attribut "système d'exploitation"<br>
[Bug][Report-Manager] Report Manager : Sortie de l'erreur MultiValues groupées lors de l'exportation CSV/TXT<br>
[Bug][Report Manager] L'attribut "variant" n'affiche que le titre dans la sortie du rapport<br>.
[Bug][Report Manager] Attributs manquants de la catégorie "Net" dans le Report Manager pour définir les conditions<br>.
[Bug][Report Manager] Attribut "Alias" non disponible dans report Manager<br>
[Bug][Report Manager] L'attribut "hostname" de la catégorie "monitoring" n'est pas disponible dans le gestionnaire de rapports<br>.
[Bug][Report Manager] Affichage simultané de l'assignation du système d'exploitation et du logiciel dans le rapport impossible<br>
[Bug][Report-Manager] Le rôle des personnes n'est pas affiché dans le gestionnaire de rapports.<br>
[Bug][Report-Manager] Sous-sélections pour les groupes dynamiques<br>
[Bug][Report Manager] Créer des rapports avec la catégorie Logbook comme condition<br>.
[Bug][Report-Manager] Combiner le titre de l'objet et l'adresse hosdt primaire dans le gestionnaire de rapports conduit à de multiples sorties du même objet<br>
[Bug][Report Manager] Un rapport variable entraîne une erreur SQL<br>.
[Bug][Report-Manager] Report-Manager : La catégorie d'assignation "Service Assignment" ne renvoie pas de valeurs vides<br>
[Bug][Gestionnaire de rapports] Rapports : la combinaison d'une propriété dynamique et d'une condition entraîne une erreur sql<br>
[Bug][Report-Manager] Le rapport pour "Inserted at" utilise une mauvaise table DB<br>.
[Bug][Gestionnaire de rapports] Il n'est pas possible d'afficher des objets sans assignations dans le gestionnaire de rapports<br>
[Bug][Categories] Erreur SQL lorsque la catégorie "Layer-3 net" est triée par "Net avec suffixe".<br>
[Bug][Categories] La condition "Normal" peut toujours être sélectionnée dans la catégorie "General"<br>.
[Bug][Categories] La catégorie Form Factor ne stocke pas de données dans la vue d'ensemble.<br>
[Bug][Categories] Le dos d'un châssis n'est pas présenté dans la vue arrière<br>.
[Bug][Categories] Le champ Category port dialog plus ne fonctionne pas avec la catégorie de câblage<br>.
[Bug][Categories] Révision de la catégorie des adresses d'hôtes<br>
[Bug][Categories] Amélioration de la gestion de l'unité de hauteur lors de l'échange d'objets entre l'avant et l'arrière d'un rack<br>.
[Bug][Categories] Correction du formatage de la page d'aperçu lors de l'affichage des rapports et des catégories<br>.
[Bug][Categories] La catégorie "service logbook" est même dupliquée si elle n'est pas sélectionnée pour la duplication<br>.
[Bug][Categories] Changement d'attributs dans les listes d'objets, suppression d'un attribut erroné dans le filtre par défaut<br>.
[Bug][Categories] Les noms de ports longs sont tronqués dans le navigateur de ports<br>.
[Bug][Categories] Les fichiers de la catégorie image d'objet sont visibles pour tous les clients<br>
[Bug][Categories] La colonne "Assigned Organization" n'affiche pas de données.<br>
[Bug][Categories] Les relations entre les objets ne sont pas affichées dans la vue de liste.<br>
[Bug][Categories] Mauvaise valeur par défaut pour la catégorie "host address" dans l'attribut "Address assignment"<br>.
[Bug][Categories] Catégorie : "Service" Sous-catégorie "Type de service" l'attribut "Type" n'est pas chargé correctement<br>
[Bug][Categories] Le titre des objets dans les slots n'est pas affiché dans la catégorie "Racks"<br>
[Bug][Categories] Le type de champ de la base de données pour isys_validation_config.isys_validation_config__json a changé<br>
[Bug][Categories] Vue du rack : Les châssis de lames ne sont pas affichés verticalement<br>.
[Bug][Categories] Affichage du menu déroulant pour choisir l'état de l'entrée dans la catégorie "membres du cluster"<br>
[Bug][Categories] Désélectionner les attributs dans les listes d'objets supprime les valeurs dans le filtre standard<br>.
[Bug][Categories] L'heure/la date à "Initial Import" dans la catégorie "Custom Identifier" n'est pas affichée correctement<br>
[Bug][Categories] Entrées de catégories doubles<br>
[Bug][OCS] Les capacities sont toujours importées sous forme d'octets dans OCS import<br>.
[Bug][OCS] Les capacities des périphériques SNMP ne sont pas correctement mises à jour par OCS import<br>.
[Bug][Lists] Message d'erreur SQL dans la liste d'objets<br>
[Bug][Lists] Le chemin d'accès au lieu de tri utilise le lieu racine pour le tri<br>
[Bug][Lists] Le champ description est manquant comme attribut dans la configuration des listes de catégories pour la catégorie "Adresses e-mail"<br>.
[Bug][Lists] La configuration de la liste des objets ne reflète que les attributs sélectionnés pour les autres utilisateurs et la configuration par défaut<br>.
[Bug][Lists] L'emplacement logique d'un objet n'est pas affiché dans la liste des objets<br>.
[Bug][Lists] Le réglage de la longueur maximale des chemins d'accès ne fonctionne pas avec les listes d'objets<br>.
[Bug][Lists] Tri des chemins d'accès raccourcis dans les listes d'objets<br>.
[Bug][Lists] Affichage du début et de la fin des résumés dans les listes d'objets<br>.
[Bug][Lists] Listes d'objets : ajouter des attributs personnalisés<br>
[Bug][Lists] L'adresse e-mail est toujours affichée en HTML-mailto dans les listes d'objets<br>.
[Bug][Check_MK] Manque un paramètre pour définir le délai d'attente de Livestatus<br>
[Bug][LDAP] Synchronisation de tous les groupes LDAP lorsque la pagination est activée<br>.
[Bug][LDAP] Amélioration de la gestion des utilisateurs désactivés/motivés en provenance d'AD<br>.
[Bug][LDAP] Ne pas afficher l'icône d'email si LDAP a défini le mail comme filtre<br>
[Bug][CMDB] Trier par modèle<br>
[Bug][CMDB] Les capacities "Bit" et "Terabit" sont manquantes<br>
[Bug][CMDB] La création d'unités assignées d'un châssis de lames provoque un écran blanc<br>.
[Bug][List editing] Activation des SLA édités<br>
[Bug][List editing] Editer la catégorie de service dans List Editing<br>
[Bug][List editing] Libérer les connexions dans la catégorie Service Assignment.<br>
[Bug][List editing] List editing : le filtre pour le navigateur d'objets ne fonctionne pas toujours<br>
[Bug][List editing] Édition de liste : Détacher d'un emplacement impossible<br>
[Bug][List editing] Le contrôleur n'est pas sélectionnable pour tous les objets dans l'édition de liste<br>
[Bug][List editing] List Editing : Il n'est pas possible d'assigner des postes de travail dans la catégorie "poste de travail assigné"<br>
[Bug][List editing] Vider les sous-catégories dans l'édition de liste<br>
[Bug][List editing] Multiedit affiche des catégories sans attributs<br>
[Bug][List editing] La sauvegarde d'une adresse d'hôte génère un message d'erreur<br>
[Bug][List editing] Laisser les champs exclus de l'édition de la liste exclus après la sauvegarde<br>
[Bug][Import] CSV Import : Affectation des licences<br>
[Bug][Import] Pour les réseaux de couche 2, le champ = Layer-3 net assignment est manquant pour une importation.<br>
[Bug][Import] L'assignation de périphérique de la catégorie Slots (Switch Chassis) ne peut pas être assignée dans csv-import.<br>
[Bug][Import] Importer des variantes de systèmes d'exploitation<br>
[Bug][Import] OCS Import Categories<br>
[Bug][Import] L'édition d'un profil de correspondance d'objet ne fonctionne pas comme il devrait<br>
[Bug][Objects] Erreur "le nom doit être un objet valide ou une chaîne" lors de l'accès aux objets<br>
[Bug][Objects] Catégorie "Virtual Devices" attribut "Host Ressource" affiche des "switch port groups"<br> incorrects
[Bug][Objects] Les modifications apportées aux champs DialogPlus ne sont pas correctement affichées<br>.
[Bug][CSV Import] L'option d'écraser les entrées existantes dans les catégories multi-valeurs écrase également les nouvelles entrées importées<br>.
[Bug][CSV Import] CSV import crée aussi des entrées de logbook, si le contenu n'est pas modifié<br>
[Bug][CSV Import] CSV import : l'attribut "Virtual machine" de la catégorie "Virtual machine" n'est pas correctement défini<br>.
[Bug][System settings] Administration forwards to an empty site if Check_MK2 has been deactivated<br>
[Bug][System settings] Deny unauthenticated access to /upload/images<br>
[Bug][System settings] Erreur d'affichage dans la gestion des droits<br>
[Bug][System settings] L'éditeur HTML modifie l'énumération du contenu<br>
[Bug][Outils système] Amélioration de la correction de l'emplacement<br>
[Bug][Admincenter] La commande GRANT lors de la création d'un locataire via la console ne tient pas compte de l'hôte local<br>
[Bug][Admincenter] Lorsque l'on combine des licences de locataire et d'abonnement, certains add-ons ne sont pas correctement licenciés<br>.
[Bug][Admincenter] Les licences de locataires "en cours" et "gratuites" ne prennent pas en compte les locataires désactivés et affichent une valeur erronée pour les licences de locataires gratuites<br>.
[Bug][Notifications] Le numéro de notification n'est pas réinitialisé<br>
[Bug][Notifications] Erreur de requête de notification avec le support de place %notifications__threshold_unit%<br>
[Bug][Notifications] Notifier un groupe de contact<br>
[Bug][License installation (i-doit)] Limit for tenants uses incorrect counting during licensing<br>
[Bug][Code (interne)] Effectuer une migration correcte des propriétés pour la catégorie Software Assignment<br>
[Bug][Code (interne)] La condition General > Description dans le gestionnaire de rapports n'est plus un champ texte.<br>
[Bug][Code (interne)] HTTP 500 Search error message when self-created add-on is disabled<br>
[Bug][Code (interne)] Lors de l'échange des sorties et des entrées, la fenêtre s'affiche vide.<br>
[Bug][Code (interne)] Vérifier les paramètres système pour s'assurer que JSON est valide<br>.
[Bug][Authorization system] Après qu'un objet a été archivé, il n'est plus affiché<br>.
[Bug][Authorization system] Archive/delete seulement possible si l'utilisateur a des droits sur tous les objets du type d'objet correspondant<br>
[Bug][Authorization system] Les permissions de localisation n'indiquent pas les objets archivés/supprimés dans les listes d'objets<br>.
[Bug][Authorization system] Contrôle des droits pour les fichiers dans le navigateur de fichiers<br>
[Bug][Validation] Objectview impossible si la validation de la catégorie est activée<br>
[Bug][Validation] Valider les objets nouvellement créés<br>
[Bug][Mass editing] L'affectation du logiciel nettoie l'affectation du système d'exploitation lors d'un changement massif<br>
[Bug][Édition en masse] Déconnecter le champ "Acheté de :" dans la catégorie de comptabilité par le changement en masse.<br>
[Bug][Édition de masse] Remplacement automatique des titres d'objets via le changement de masse avec %COUNTER:11#6%.<br>
[Bug][Mass editing] Erreur lors des actions de changement de masse<br>
[Bug][Mass editing] La création d'un modèle pour un changement de masse génère un écran blanc<br>
[Bug][Custom categories] Le gestionnaire de rapports ajoute des marqueurs inutiles si la catégorie est une catégorie personnalisée<br>.
[Bug][Custom categories] Impression incorrecte de l'affichage des rapports variables<br>.
[Bug][My-doit] Les commandes assignées/créées ne sont pas affichées dans My-doit<br>.
[Bug][Console] Fuite de mémoire lors de l'exécution d'une archive loogbook via la console i-doit<br>
[Bug][Logbook] Les entrées longues du logbook déplacent les autres colonnes hors de la zone de visualisation<br>
[Bug][Logbook] Contenu incorrect dans le logbook lors de la modification de la sélection pour l'affectation d'objets<br>
[Bug][Logbook] Passage de valeurs modifiées au logbook<br>
[Bug][Events] Lorsque l'on utilise /main/ comme répertoire d'installation i-doit, les événements ne sont pas appelables<br>.
[Bug][Relations] Relations : Catégorie "Wan-connection" Attributs : "connected networks" aucune relation n'est créée<br>
[Bug][Relations] La relation de la catégorie "association de contacts" est supprimée lors de l'archivage.<br>
[Bug][JDisc] JDISC : Importation des ports de bouclage et logiques impossible<br>
[Bug][JDisc] JDISC-import : Le changement d'adresse IP ne s'affiche pas correctement dans le logbook<br>.
[Bug][JDisc] Logbook : Entrées vides suite à l'importation de JDisc<br>.
[Bug][H-Inventory] Importation de l'inventaire H : les relations d'affectation de logiciel ne sont pas supprimées correctement<br>
[Bug][Templates] Le tempalte par défaut est parfois ignoré pour les catégories personnalisées<br>.
[Bug][Templates] Le champ-remplacement %COUNTER% ne fonctionne pas correctement dans les modèles par défaut<br>.
[Bug][CMDB-Explorer] Boucle lors de la création de connexions dans cmdb explorer<br>
[Bug][CMDB-Explorer] CMDB-Explorer exporte des données GraphML incorrectes<br>
[Bug][CMDB-Explorer] CMDB-Explorer exporte des bords GraphML dupliqués<br>
[Bug][Search] Search switches selection of object type group<br>
[Bug][Search] Correction d'un blocage dans l'index de recherche lors de l'utilisation de l'API<br>
[Bug][Search] Recherche globale de réseaux de couche 3 sur IP<br>
[Bug][Search] Correction du formatage du résultat de la recherche<br>
[Bug][Installation] Les fichiers et répertoires dans temp/ sont en écriture mondiale<br>
[Bug][Installation] Suppression des contrôles des extensions non nécessaires pour utiliser i-doit<br>
[Bug][API] PHP warning when saving a storage device without connected HDs<br>
[Bug][API] La lecture de la catégorie WAN via l'API ne renvoie pas toujours un ID d'objet<br>
[Bug][API] Les propriétés avec unités ne sont pas cohérentes lors de la récupération via l'API<br>.
[Bug][QR-Codes] La configuration globale du QR code est écrasée<br>
[Bug][User settings] Le réglage du format numérique n'a pas d'effet<br>
[Bug][CMDB settings] Configurable logging<br>