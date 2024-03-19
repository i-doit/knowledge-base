<!-- TRANSLATED by md-translate -->
# Changelog 1.16.1

# Changelog 1.16.1

[Improvement][Categories] Add Attribute Firmware for the category Network -> interfaces<br>
[Bug][LDAP] LDAP-Group Mapping doesn't work anymore<br>
[Bug][LDAP] Deleted values from AD/LDAP remain untouched in i-doit<br>
[Bug][LDAP] The ldap-sync .ini function ignoreUsersWithAttributes does not work correctly<br>
[Bug][CMDB] Cabling browser and location selection use absolute URL instead of relative URL<br>
[Bug][CMDB] The CMDB statuses 'In operation' and 'inoperative' cannot be set via CSV import<br>
[Bug][Categories] Connected object in category "logical ports" does not have a hyperlink<br>
[Bug][Categories] Cabling browser displays connector and port as pair<br>
[Bug][Categories] Rack slots cannot be used if you are on the back<br>
[Bug][Categories] Selecting a DNS domain in category "net" causes a malformed presentation of the selection field<br>
[Bug][Categories] Objects cannot be changed from the Template state to other states<br>
[Bug][Categories] The connection of a FC port is not disconnected<br>
[Bug][Categories] For patch panels the position in the cabinet is not displayed in the list view<br>
[Bug][Categories] Links should be handled the same in all categories, including link field type<br>
[Bug][Categories] Selection for a net in category "Hostaddress" sometimes selects a supernet, even if a manual selection for a layer-3-net was performed previously<br>
[Bug][Categories] The name of the 'Service type' dialog attribute cannot be clearly associated with the 'Service > Service Type >> Type' category<br>
[Bug][Categories] New field type for database field of attribute "File-link (external)"<br>
[Bug][Report-Manager] Report Manager: it always inserts a condition that was not selected<br>
[Bug][Report-Manager] HTTP Error 500 when opening a report<br>
[Bug][Report-Manager] Report with the IP list object attribute creates SQL error<br>
[Bug][Report-Manager] Using specific and global category relations at the same time in a report causes an error<br>
[Bug][Report-Manager] Error when using "Assigned SIM Cards" in Report manager<br>
[Bug][Report-Manager] Report shows wrong information of category form factor<br>
[Bug][Report-Manager] Report Manager: SQL Error message when using contract attributes<br>
[Bug][Report-Manager] Report Manager error message when Operating System is selected as attribute<br>
[Bug][Report-Manager] Report Manager: attribute connection (power consumer) not available<br>
[Bug][Report-Manager] Check for dynamic report not available for reports, created/modified via SQL editor<br>
[Bug][Report-Manager] Report Manager: Or link is not generated correctly<br>
[Bug][Report-Manager] Sorting of IP addresses in reports<br>
[Bug][Custom categories] Language constants are not replaced for checkboxes in user defined categories<br>
[Bug][Custom categories] A custom category cannot be edited if a report is displayed besides text fields<br>
[Bug][Custom categories] Link attributes from custom categories should be linked in lists<br>
[Bug][Custom categories] Default-Values for yes/no fields in custom categories are not used for selecting a default<br>
[Bug][Interface management] Zammad connection does not work for object type workstation<br>
[Bug][JDisc] Error message during JDisc import if JDisc option "Import connection endpoints" is enabled<br>
[Bug][JDisc] JDisc: Virtual network adapters are imported<br>
[Bug][JDisc] JDisc Endpoint connection<br>
[Bug][JDisc] No logbook entries through JDisc import of persons<br>
[Bug][Notifications] Receiver calculation strategy in notifications without function<br>
[Bug][Notifications] Error when executing the i-doit console with notification-send command<br>
[Bug][Lists] Presentation for grouped data (comma seperated or list) has no impact on multi value categories<br>
[Bug][Lists] The field "description" is not available to be selected for lists in custom multi-value-categories<br>
[Bug][Lists] Assigned SIM cards cannot be opened by clicking on them in the list view<br>
[Bug][Lists] Attribute "assigned object" of category "logical ports" can not be selected to be shown in object list<br>
[Bug][Active Directory] Active Directory Computer Import function does not import computers or servers<br>
[Bug][CSV Import] CSV import generates error message and does not run through<br>
[Bug][CMDB-Explorer] Language constant for roles are not translated in CMDB Explorer<br>
[Bug][Print view] Print view for categories does not work<br>
[Bug][Print view] Some HTML formatting is not displayed correctly in the print preview<br>
[Bug][Code (internal)] Fix XSS vulnerability in monitoring > Export configuration<br>
[Bug][Code (internal)] Error message when updating i-doit to Version 1.16<br>
[Bug][CMDB settings] Clean up data entry also changes user defined categories<br>
[Bug][Search] If you use the search, an SQL error message is displayed but the search is executed<br>
[Bug][Search] Duplicated objects are not automatically added to the search index<br>
[Bug][System settings] The object browser in the list editing does not use the default selected for the object browser field<br>
[Bug][List editing] List editing for assigned licenses under Application>Inastallation does not work<br>
[Bug][Object type configuration] Selection for object type icons does not include all folders<br>
[Bug][User settings] Saving the presentation of tree view has to be saved twice<br>

[Improvement][Categories] Ajout d'un firmware d'attribut pour la catégorie Network -> interfaces<br>
[Bug][LDAP] Le mappage des groupes LDAP ne fonctionne plus<br>.
[Bug][LDAP] Les valeurs supprimées de AD/LDAP restent intouchées dans i-doit<br>
[Bug][LDAP] La fonction ldap-sync .ini ignoreUsersWithAttributes ne fonctionne pas correctement<br>.
[Bug][CMDB] Cabling browser and location selection use absolute URL instead of relative URL<br>
[Bug][CMDB] Les statuts CMDB 'En service' et 'Inopérant' ne peuvent pas être définis via CSV import<br>.
[Bug][Categories] L'objet connecté dans la catégorie "ports logiques" n'a pas de lien hypertexte<br>.
[Bug][Categories] Le navigateur de câblage affiche le connecteur et le port comme une paire<br>
[Bug][Categories] Les emplacements de rack ne peuvent pas être utilisés si vous êtes à l'arrière<br>
[Bug][Categories] La sélection d'un domaine DNS dans la catégorie "net" provoque une présentation malformée du champ de sélection<br>.
[Bug][Categories] Les objets ne peuvent pas être modifiés de l'état du modèle à d'autres états<br>.
[Bug][Categories] La connexion d'un port FC n'est pas déconnectée<br>
[Bug][Categories] Pour les panneaux de brassage, la position dans le cabinet n'est pas affichée dans la vue de liste<br>.
[Bug][Categories] Les liens devraient être gérés de la même manière dans toutes les catégories, y compris le type de champ de lien<br>.
[Bug][Categories] La sélection d'un réseau dans la catégorie "Adresse de l'hôte" sélectionne parfois un supernet, même si une sélection manuelle pour un réseau de couche 3 a été effectuée précédemment<br>.
[Bug][Categories] Le nom de l'attribut de dialogue 'Type de service' ne peut pas être clairement associé à la catégorie 'Service > Type de service >> Type'<br>.
[Bug][Categories] Nouveau type de champ pour le champ de base de données de l'attribut "File-link (external)"<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : il insère toujours une condition qui n'a pas été sélectionnée<br>
[Bug][Report Manager] Erreur HTTP 500 lors de l'ouverture d'un rapport<br>
[Bug][Report Manager] Le rapport avec l'attribut IP list object crée une erreur SQL<br>.
[Bug][Report-Manager] L'utilisation de relations de catégories spécifiques et globales en même temps dans un rapport provoque une erreur<br>.
[Bug][Report Manager] Erreur lors de l'utilisation de "Assigned SIM Cards" dans le gestionnaire de rapports<br>.
[Bug][Report Manager] Le rapport affiche des informations erronées sur le facteur de forme de la catégorie<br>.
[Bug][Report-Manager] Report Manager : message d'erreur SQL lors de l'utilisation des attributs de contrat<br>
[Bug][Report-Manager] Message d'erreur du Report Manager lorsque le système d'exploitation est sélectionné comme attribut<br>
[Bug][Report-Manager] Report Manager : connexion d'attribut (power consumer) non disponible<br>
[Bug][Report-Manager] Contrôle du rapport dynamique non disponible pour les rapports créés/modifiés via l'éditeur SQL<br>
[Bug][Report-Manager] Report Manager : Or link is not generated correctly<br>
[Bug][Report-Manager] Tri des adresses IP dans les rapports<br>
[Bug][Custom categories] Les constantes de langue ne sont pas remplacées pour les cases à cocher dans les catégories définies par l'utilisateur<br>.
[Bug][Custom categories] Impossible de modifier une catégorie personnalisée si un rapport est affiché avec des champs de texte<br>.
[Bug][Custom categories] Les attributs de lien des catégories personnalisées devraient être liés dans les listes<br>.
[Bug][Custom categories] Les valeurs par défaut pour les champs oui/non dans les catégories personnalisées ne sont pas utilisées pour sélectionner une valeur par défaut<br>.
[Bug][Interface management] La connexion Zammad ne fonctionne pas pour les postes de travail de type objet<br>
[Bug][JDisc] Message d'erreur lors de l'importation de JDisc si l'option "Import connection endpoints" de JDisc est activée<br>
[Bug][JDisc] JDisc : Les adaptateurs réseau virtuels sont importés<br>.
[Bug][JDisc] JDisc Endpoint connection<br>
[Bug][JDisc] Pas d'entrées dans le logbook suite à l'importation de personnes par JDisc<br>
[Bug][Notifications] Stratégie de calcul du récepteur dans les notifications sans fonction<br>
[Bug][Notifications] Erreur lors de l'exécution de la console i-doit avec la commande notification-send<br>
[Bug][Lists] La présentation des données groupées (virgule séparée ou liste) n'a pas d'impact sur les catégories multi-valeurs<br>.
[Bug][Lists] Le champ "description" n'est pas disponible pour être sélectionné pour les listes dans les catégories multi-valeurs personnalisées<br>
[Bug][Lists] Les cartes SIM assignées ne peuvent pas être ouvertes en cliquant dessus dans l'affichage de la liste<br>.
[Bug][Lists] L'attribut "objet affecté" de la catégorie "ports logiques" ne peut pas être sélectionné pour être affiché dans la liste des objets<br>.
[Bug][Active Directory] La fonction d'importation d'ordinateurs Active Directory n'importe pas les ordinateurs ou les serveurs<br>.
[Bug][CSV Import] CSV import génère un message d'erreur et ne s'exécute pas<br>
[Bug][CMDB-Explorer] La constante de langue pour les rôles n'est pas traduite dans CMDB Explorer<br>
[Bug][Print view] La vue d'impression pour les catégories ne fonctionne pas<br>
[Bug][Print view] Certains formatages HTML ne s'affichent pas correctement dans l'aperçu avant impression<br>
[Bug][Code (interne)] Correction d'une vulnérabilité XSS dans la surveillance > Configuration de l'exportation<br>.
[Bug][Code (interne)] Message d'erreur lors de la mise à jour d'i-doit en version 1.16<br>
[Bug][CMDB settings] Clean up data entry also changes user defined categories<br>
[Bug][Search] Si vous utilisez la recherche, un message d'erreur SQL est affiché mais la recherche est exécutée<br>.
[Bug][Search] Les objets en double ne sont pas automatiquement ajoutés à l'index de recherche<br>.
[Bug][System settings] Le navigateur d'objets dans l'édition de liste n'utilise pas le champ sélectionné par défaut pour le navigateur d'objets<br>.
[Bug][Édition de liste] L'édition de liste pour les licences attribuées sous Application>Inastallation ne fonctionne pas<br>.
[Bug][Configuration du type d'objet] La sélection des icônes du type d'objet n'inclut pas tous les dossiers<br>.
[Bug][User settings] Saving the presentation of tree view must be saved twice<br>