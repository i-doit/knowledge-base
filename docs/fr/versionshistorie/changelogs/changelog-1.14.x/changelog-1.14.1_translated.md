<!-- TRANSLATED by md-translate -->
# Changelog 1.14.1

# Changelog 1.14.1

[Improvement][Objects] Tenant ID in URL and links to objects<br>
[Improvement][Validation] Enable image pasting into description fields<br>
[Improvement][Validation] Improve data sanitazion<br>
[Improvement][Systemtools] Show time difference between SQL and PHP in system overview<br>
[Bug][System settings] Expertsetting LDAP-Sync: Contact assignment / assigned objects are archived when the contact is archived<br>
[Bug][System settings] The location path is poorly cropped<br>
[Bug][Admincenter] A command that generates a new hash and migrates all data with it<br>
[Bug][Custom categories] Handling cannot be configured for the Link field type<br>
[Bug][Custom categories] Changing title of custom categories changes names of constants<br>
[Bug][Report-Manager] SQL error message when retrieving assigned SIM card via Report Manager<br>
[Bug][Report-Manager] Selecting the operating system for output in a report may cause several empty rpws in the report<br>
[Bug][Report-Manager] Report Manager: Datefields do bnt affect conditions<br>
[Bug][Report-Manager] Assigned interface of category port empty<br>
[Bug][Report-Manager] Report Manager: A report with categories from the VIVA2 Add-On generates an error message<br>
[Bug][Report-Manager] Information about assigned host address from a port selectable in query builder<br>
[Bug][Report-Manager] Report with one field from the category Logbook throws SQL error<br>
[Bug][Report-Manager] Variable reports do not display the number of "matches"<br>
[Bug][Report-Manager] The title Operating System is not translated to English in reports<br>
[Bug][Import] Objects cannot be assigned to a net because the netmask is not updated during import<br>
[Bug][Import] CSV Import does not change object type<br>
[Bug][Import] Protect dialog box with hidden conversion factor from changes by import<br>
[Bug][Import] CSV-Import does not access the attribute "Disable Login" correctly, value is not updated<br>
[Bug][Object type configuration] Power distribution unit cannot be placed in racks with the standard object configuration<br>
[Bug][Categories] The Property "linked mobile phones" not available (Report/Documents)<br>
[Bug][Categories] Assigned SIM cards generate SQL errors in the Document-Addon<br>
[Bug][Categories] Attribute "End of contract" of the category "Contract information" is not recalculated after change of the term<br>
[Bug][Categories] SIM cards cannot be linked to mobile phones via the SIM card object<br>
[Bug][Categories] In the File category, entries cannot be edited and saved if they are edited via mark>Edit.<br>
[Bug][Categories] Wrong sorting of version number in category "Software" > "Installation"<br>
[Bug][Categories] Multi-Value field "Runs on" in category assigned cluster could only be filled after reloading the page<br>
[Bug][Categories] Archived objects assigned to contracts are displayed in the list view<br>
[Bug][Categories] If the default filter is set to "Active in Service Catalog" nothing is displayed in the dropdown list<br>
[Bug][Categories] The unit of measurement is set incorrectly when duplicating cables<br>
[Bug][Categories] Cards can not displayed on the Overview Page of SIM-Cards<br>
[Bug][Categories] Command for cleaning up HTML tags<br>
[Bug][Categories] Tags in the category "General" are doubled and displayed incorrectly (while editing)<br>
[Bug][CMDB-Explorer] Remove "print" button in the CMDB-Explorer<br>
[Bug][List editing] List edit does not provide changes when triggering event<br>
[Bug][List editing] Dropdown of category "Persons / master data" in List-Edit page not available<br>
[Bug][List editing] Network / Logical Ports / Multiedit: IP address is deleted<br>
[Bug][Code (internal)] Assignment of objects in the category group assignment cannot be solved via object browser<br>
[Bug][Code (internal)] Sorting by SLA service level in list view throws SQL error<br>
[Bug][Code (internal)] Locations are not properly authorized<br>
[Bug][Code (internal)] Cusor to change the column width within the filter layer<br>
[Bug][Code (internal)] No objects can be created via the object browser if the authorization system is inactive<br>
[Bug][Code (internal)] Reports in the fields which use the expression _alter_ in the field name are blocked<br>
[Bug][Code (internal)] Use domain part for single sign on login<br>
[Bug][Code (internal)] No rooms can be specified statically in the ldap.ini<br>
[Bug][Code (internal)] Quickpurge button can be used without object selection<br>
[Bug][CMDB] Error when duplicating person groups<br>
[Bug][Search] The search in all fields does not find Dialog+ values<br>
[Bug][Search] The status is removed when switching from standard search to Deep Search.<br>
[Bug][Search] Attribute "purpose" is not found via search<br>
[Bug][Search] Searching of objects (Status: normal/archived/deleted) shows only the status ID<br>
[Bug][Search] Textbox "Description" Category Network Connections -> Listener -> Listener Object is not indexed<br>
[Bug][Search] SQL error when searching for special characters<br>
[Bug][Notifications] SQL query error on "Expiry of maintenance/warranty period" notification<br>
[Bug][Logbook] The logbook does not store assignments of group memberships<br>
[Bug][JDisc] JDISC does not import connected devices<br>
[Bug][JDisc] JDISC does not import certain software<br>
[Bug][JDisc] JDISC: JDisc group is ignored and import is then not possible<br>
[Bug][Lists] Assigned licenses are not displayed in the software assignment list view<br>
[Bug][Lists] List view: column width of last column not adjustable<br>
[Bug][Lists] When changes are made to any column width, the column width of the last column becomes wider<br>
[Bug][Lists] Fields from category "Memory" cannot be shown in list view of multivalue category<br>
[Bug][API] API validation does not validate correctly (file upload)<br>
[Bug][CMDB settings] Dialog constant cannot be edited<br>
[Bug][CMDB settings] Profile download in Quick Configuration Wizard incorrect<br>
[Bug][Systemtools] When duplicating, the location correction is always carried out<br>
[Bug][Console] php Console Command does not read the .ini correctly<br>
[Bug][Print view] Print Preview does not display Custom Categories<br>
[Bug][Print view] Print view sorts categories independently alphabetically<br>
[Bug][Relations] Rankin issue with relations between groups and members<br>

[Improvement][Objects] Tenant ID dans l'URL et liens vers les objets<br>
[Improvement][Validation] Enable image pasting into description fields<br>
[Improvement][Validation] Améliorer l'assainissement des données<br>
[Improvement][Outils système] Afficher la différence de temps entre SQL et PHP dans la vue d'ensemble du système<br>.
[Bug][System settings] Expertsetting LDAP-Sync : Contact assignment / assigned objects are archived when the contact is archived<br>
[Bug][System settings] Le chemin de localisation est mal recadré<br>
[Bug][Admincenter] Une commande qui génère un nouveau hash et migre toutes les données avec celui-ci<br>
[Bug][Custom categories] La manipulation ne peut pas être configurée pour le type de champ de lien<br>.
[Bug][Custom categories] Le changement de titre des catégories personnalisées modifie le nom des constantes<br>.
[Bug][Gestionnaire de rapports] Message d'erreur SQL lors de la récupération de la carte SIM attribuée via le gestionnaire de rapports<br>
[Bug][Report Manager] Sélectionner le système d'exploitation pour la sortie dans un rapport peut provoquer plusieurs rpw vides dans le rapport<br>.
[Bug][Report Manager] Report Manager : Datefields do bnt affect conditions<br>
[Bug][Report Manager] Interface assignée de port de catégorie vide<br>
[Bug][Report-Manager] Report Manager : Un rapport avec des catégories provenant de l'add-on VIVA2 génère un message d'erreur<br>.
[Bug][Report-Manager] Information sur l'adresse d'hôte assignée à partir d'un port sélectionnable dans le générateur de requêtes<br>
[Bug][Gestionnaire de rapports] Un rapport avec un champ de la catégorie Logbook génère une erreur SQL<br>.
[Bug][Report-Manager] Les rapports variables n'affichent pas le nombre de "matches"<br>.
[Bug][Gestionnaire de rapports] Le titre Système d'exploitation n'est pas traduit en anglais dans les rapports<br>.
[Bug][Import] Les objets ne peuvent pas être affectés à un réseau car le masque de réseau n'est pas mis à jour lors de l'importation<br>.
[Bug][Import] CSV Import ne change pas de type d'objet<br>
[Bug][Import] Protéger la boîte de dialogue avec le facteur de conversion caché des modifications par l'import<br>
[Bug][Import] CSV-Import n'accède pas correctement à l'attribut "Disable Login", la valeur n'est pas mise à jour<br>
[Bug][Configuration du type d'objet] L'unité de distribution d'énergie ne peut pas être placée dans des racks avec la configuration d'objet standard<br>.
[Bug][Categories] La propriété "linked mobile phones" n'est pas disponible (Report/Documents)<br>
[Bug][Categories] Les cartes SIM attribuées génèrent des erreurs SQL dans le Document-Addon<br>
[Bug][Categories] L'attribut "Fin de contrat" de la catégorie "Informations sur le contrat" n'est pas recalculé après le changement du terme<br>.
[Bug][Categories] Les cartes SIM ne peuvent pas être reliées aux téléphones mobiles via l'objet SIM card<br>
[Bug][Categories] Dans la catégorie File, les entrées ne peuvent pas être éditées et sauvegardées si elles sont éditées via mark>Edit.<br>
[Bug][Categories] Mauvais tri du numéro de version dans la catégorie "Software" > "Installation"<br>
[Bug][Categories] Le champ multi-valeur "Runs on" dans le cluster assigné à la catégorie ne pouvait être rempli qu'après le rechargement de la page<br>.
[Bug][Categories] Les objets archivés affectés à des contrats sont affichés dans la vue de liste<br>.
[Bug][Categories] Si le filtre par défaut est réglé sur "Actif dans le catalogue des services", rien n'est affiché dans la liste déroulante<br>.
[Bug][Categories] L'unité de mesure est mal réglée lors de la duplication des câbles<br>.
[Bug][Categories] Les cartes ne peuvent pas être affichées sur la page de présentation des cartes SIM<br>.
[Bug][Categories] Commande de nettoyage des balises HTML<br>
[Bug][Categories] Les balises de la catégorie "General" sont doublées et affichées de manière incorrecte (lors de l'édition)<br>.
[Bug][CMDB-Explorer] Suppression du bouton "imprimer" dans l'explorateur CMDB<br>
[Bug][List editing] L'édition de liste ne fournit pas de changements lors du déclenchement de l'événement<br>
[Bug][List editing] Le menu déroulant de la catégorie "Personnes / données de base" n'est pas disponible dans la page d'édition de la liste<br>.
[Bug][List editing] Network / Logical Ports / Multiedit : l'adresse IP est supprimée<br>
[Bug][Code (interne)] L'assignation d'objets dans la catégorie assignation de groupe ne peut pas être résolue via le navigateur d'objets<br>.
[Bug][Code (interne)] Le tri par niveau de service SLA dans la vue liste provoque une erreur SQL<br>
[Bug][Code (interne)] Les emplacements ne sont pas correctement autorisés<br>
[Bug][Code (interne)] Cusor pour changer la largeur de la colonne dans la couche de filtre<br>
[Bug][Code (interne)] Aucun objet ne peut être créé via le navigateur d'objets si le système d'autorisation est inactif<br>.
[Bug][Code (interne)] Les rapports dans les champs qui utilisent l'expression _alter_ dans le nom du champ sont bloqués<br>.
[Bug][Code (internal)] Utiliser la partie domaine pour une seule signature sur le login<br>
[Bug][Code (internal)] Aucune salle ne peut être spécifiée statiquement dans le fichier ldap.ini<br>
[Bug][Code (internal)] Le bouton Quickpurge peut être utilisé sans sélection d'objet<br>
[Bug][CMDB] Erreur lors de la duplication de groupes de personnes<br>
[Bug][Search] La recherche dans tous les champs ne trouve pas les valeurs Dialog+<br>
[Bug][Search] Le statut est supprimé lors du passage de la recherche standard à la recherche approfondie.<br>
[Bug][Search] L'attribut "purpose" n'est pas trouvé via la recherche<br>.
[Bug][Search] La recherche d'objets (état : normal/archivé/détruit) n'affiche que l'ID de l'état<br>.
[Bug][Search] Textbox "Description" Category Network Connections -> Listener -> L'objet Listener n'est pas indexé<br>
[Bug][Search] Erreur SQL lors de la recherche de caractères spéciaux<br>
[Bug][Notifications] Erreur de requête SQL sur la notification "Expiration de la période de maintenance/warranty"<br>
[Bug][Logbook] Le logbook ne stocke pas les affectations des membres du groupe<br>.
[Bug][JDisc] JDISC n'importe pas les périphériques connectés<br>
[Bug][JDisc] Le JDISC n'importe pas certains logiciels<br>
[Bug][JDisc] JDISC : le groupe JDisc est ignoré et l'importation n'est alors pas possible<br>
[Bug][Lists] Les licences attribuées ne sont pas affichées dans la vue de la liste des attributions de logiciels<br>
[Bug][Lists] Vue des listes : largeur de la dernière colonne non ajustable<br>
[Bug][Lists] Lorsque des modifications sont apportées à la largeur d'une colonne, la largeur de la dernière colonne devient plus large<br>.
[Bug][Lists] Les champs de la catégorie "Mémoire" ne peuvent pas être affichés dans la vue liste de la catégorie multivaluée<br>.
[Bug][API] La validation de l'API ne se fait pas correctement (téléchargement de fichiers)<br>
[Bug][CMDB settings] Impossible d'éditer la constante de dialogue<br>
[Bug][CMDB settings] Téléchargement de profil incorrect dans l'assistant de configuration rapide<br>
[Bug][Outils système] Lors de la duplication, la correction de l'emplacement est toujours effectuée<br>
[Bug][Console] php Console Command ne lit pas correctement le .ini<br>
[Bug][Print view] L'aperçu avant impression n'affiche pas les catégories personnalisées<br>
[Bug][Print view] Print view trie les catégories de manière indépendante par ordre alphabétique<br>
[Bug][Relations] Problème de classement avec les relations entre les groupes et les membres<br>