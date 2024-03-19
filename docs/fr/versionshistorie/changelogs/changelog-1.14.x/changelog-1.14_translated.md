<!-- TRANSLATED by md-translate -->
# Changelog 1.14

# Changelog 1.14

[Improvement][Code (internal)] Compatibility for PHP 7.4<br>
[Improvement][Code (internal)] i-doit no longer supports PHP 7.0, minimum requirement is PHP 7.1<br>
[Improvement][Code (internal)] Remove unnecessary WYSIWYG formatting options<br>
[Improvement][Installation] Add support for MariaDB 10.4<br>
[Improvement][Categories] Category "Access" adjustable default value for the attribute "Primary"<br>
[Improvement][Categories] Additional button for "Back" of the category "racks" in rooms<br>
[Improvement][Categories] Extension of the SIM card category for multi-sim<br>
[Improvement][CSV Import] CSV export only contains selected objects<br>
[Improvement][CMDB] SIM CARDS make more then two cards possible<br>
[Improvement][Controller] Location correction can be called up separately via the i-doit controller/console<br>
[Improvement][Object type configuration] Preview for Icons of object types<br>
[Bug][CSV Import] CSV import: Remove object title as mandatory field when mapped to existing objects<br>
[Bug][Cabling view] Cabling browser lists ports in order of creation<br>
[Bug][CMDB] SQL error when selecting cluster services<br>
[Bug][CMDB] Mouseover cache will not be updated on changes<br>
[Bug][CMDB] When cleaning up category entries, not all data in the database is cleaned up.<br>
[Bug][CMDB] Long object titles in the cabling browser are not displayed completely<br>
[Bug][CMDB] The button "Link to this page" jumps to the category list view instead of remaining in the current entry<br>
[Bug][CMDB] Wrong translation for default weighting of relationship types<br>
[Bug][Categories] Position in the rack only possible after saving the object<br>
[Bug][Categories] Live status can no longer be called<br>
[Bug][Categories] The checkbox in the List category does not contain a record ID.<br>
[Bug][Categories] First level of logical location view only shows objects of type "workspace", even if there are other objects, serving as a logical location, at this level<br>
[Bug][Categories] Missing information about logical ports in connected objects<br>
[Bug][Categories] Type of category Network of a super network cannot be changed<br>
[Bug][Categories] The Sim-card category is by default on the overview page of the Sim card object<br>
[Bug][Categories] height unit in front and back views of rack are shown incorrect<br>
[Bug][OCS] Connected devices are not found during import using the DEVICEMACADDRESS and object title.<br>
[Bug][CMDB-Explorer] CMDB Explorer does not display object information<br>
[Bug][CMDB-Explorer] Print feature of CMDB explorer only creates partially output/print<br>
[Bug][CMDB-Explorer] CMDB-Explorer freezes when tenant is changed in a new browser tab<br>
[Bug][Validation] Option to handle validation conflicts during object creation via templates<br>
[Bug][LDAP] Client selection restricted by LDAP user authentication $authenticationHash<br>
[Bug][LDAP] LDAP: User login missing relationship to person group<br>
[Bug][LDAP] The ldap-sync command does not use the specified configuration<br>
[Bug][Relations] Weighting of the relationships of service components is reset to standard<br>
[Bug][Lists] Cluster Services Listenansicht schmeisst SQL Fehler und wird nicht angezeigt<br>
[Bug][Lists] Displaying assigned objects of a person in object list not possible<br>
[Bug][Print view] Reports without results in user-defined categories cause print view errors<br>
[Bug][Report-Manager] Error in Report Manager, conditions with "%NOT LIKE%" are executed as "%LIKE%".<br>
[Bug][Report-Manager] Conditions of a report are not fulfilled completely<br>
[Bug][Report-Manager] Field placeholder in report generates SQL error message<br>
[Bug][Report-Manager] Report-Manager: Selection restricted at conditions "linked attribute"<br>
[Bug][Report-Manager] Sorting the output according to the name in the report<br>
[Bug][Code (internal)] Create import and upload folders for each client<br>
[Bug][Update] Recursively create folders for uploading files<br>
[Bug][Update] Migration of reports not possible 1.13 > 1.13.1-2<br>
[Bug][Admincenter] Admin Center login does not work after updating to i-doit 1.13.2<br>
[Bug][Console] Relationships are misrepresented when using php console.php system-objectrelations<br>
[Bug][Search] Memory exception when creating search index<br>
[Bug][Licence settings] License widget: color of remaining term not according to definition<br>
[Bug][JDisc] When port changes are made by JDISC, the linked object is not logged.<br>
[Bug][JDisc] If the CMDB status is changed by JDISC, it will not be logged.<br>
[Bug][CMDB settings] The default Object-Browser setting of category "Storage Area Network" > "FC port" is not used<br>
[Bug][CMDB settings] Object browser Layer-2-Net / Layer-3-Net assignment not existing<br>
[Bug][XML] Importing files via XML skips the contents of the subcategory "File Version<br>
[Bug][Custom categories] Sanitize input data deletes the HTML toolbar.<br>
[Bug][Custom categories] Display renamed field names correctly<br>
[Bug][Import] CSV Import: Assignment of licences<br>
[Bug][Import] CSV File is not Imported when it ends with .CSV (Uppercase)<br>
[Bug][Session] Object lock stays intact when user logs out<br>
[Bug][Logbook] No logbook entry at the server if it is assigned to a locker - Vice-versa: locker creates log entry<br>
[Bug][Objects] Cabinet view: validation prevents the placement of an object<br>
[Bug][Objects] Operating system assignment of version is faulty<br>
[Bug][Objects] Objects with quotes ("") in the title are wrong displayed in the layer-3-net overview<br>
[Bug][Objects] Layer-2-net in objects are displayed with [] instead of empty value<br>
[Bug][Objects] IPv6 supernet also displays subnets outside the defined range<br>
[Bug][List editing] Placeholder creates faulty view in list edit<br>

[Improvement][Code (internal)] Compatibilité pour PHP 7.4<br>
[Improvement][Code (internal)] i-doit ne supporte plus PHP 7.0, le minimum requis est PHP 7.1<br>
[Improvement][Code (internal)] Suppression des options de formatage WYSIWYG inutiles<br>
[Improvement][Installation] Ajout du support pour MariaDB 10.4<br>
[Improvement][Categories] Catégorie "Access" adjustable default value for the attribute "Primary"<br>
[Improvement][Categories] Ajout d'un bouton pour "Retour" de la catégorie "racks" dans les salles<br>
[Improvement][Categories] Extension de la catégorie carte SIM pour le multi-sim<br>
[Improvement][CSV Import] CSV export only contains selected objects<br>
[Improvement][CMDB] Les SIM CARDS font plus de deux cartes possibles<br>
[Improvement][Controller] La correction de la localisation peut être appelée séparément via le contrôleur/console i-doit<br>
[Improvement][Configuration du type d'objet] Aperçu des icônes des types d'objets<br>
[Bug][CSV Import] CSV import : Suppression du titre de l'objet comme champ obligatoire lors de la mise en correspondance avec des objets existants<br>
[Bug][Cabling view] Cabling browser lists ports in order of creation<br>
[Bug][CMDB] Erreur SQL lors de la sélection de services cluster<br>
[Bug][CMDB] Le cache du survol de la souris n'est pas mis à jour en cas de changement<br>
[Bug][CMDB] Lors du nettoyage des entrées de catégories, toutes les données de la base de données ne sont pas nettoyées.<br>
[Bug][CMDB] Les titres des objets longs dans le navigateur d'installation ne s'affichent pas complètement<br>.
[Bug][CMDB] Le bouton "Lien vers cette page" passe à l'affichage de la liste des catégories au lieu de rester dans l'entrée actuelle<br>.
[Bug][CMDB] Mauvaise traduction pour la pondération par défaut des types de relations<br>
[Bug][Categories] Position dans le rack uniquement possible après la sauvegarde de l'objet<br>
[Bug][Categories] L'état en direct ne peut plus être appelé<br>
[Bug][Categories] La case à cocher dans la catégorie de la liste ne contient pas d'ID d'enregistrement.<br>
[Bug][Categories] Le premier niveau de la vue de l'emplacement logique n'affiche que les objets de type "espace de travail", même s'il y a d'autres objets servant d'emplacement logique à ce niveau<br>.
[Bug][Categories] Manque d'information sur les ports logiques dans les objets connectés<br>
[Bug][Categories] Impossible de changer le type de réseau de catégorie d'un super réseau<br>.
[Bug][Categories] La catégorie Sim-card est par défaut sur la page de présentation de l'objet Sim-card<br>.
[Bug][Categories] l'unité de hauteur dans les vues avant et arrière du rack est affichée de manière incorrecte<br>
[Bug][OCS] Les appareils connectés ne sont pas trouvés lors de l'importation en utilisant DEVICEMACADDRESS et le titre de l'objet.<br>
[Bug][CMDB-Explorer] CMDB Explorer n'affiche pas les informations sur les objets<br>.
[Bug][CMDB-Explorer] La fonction d'impression de CMDB explorer ne crée que des sorties/impressions partielles<br>.
[Bug][CMDB-Explorer] CMDB-Explorer se bloque lorsque le locataire est changé dans un nouvel onglet du navigateur<br>.
[Bug][Validation] Option pour gérer les conflits de validation lors de la création d'objets via des modèles<br>.
[Bug][LDAP] Sélection du client limitée par l'authentification de l'utilisateur LDAP $authenticationHash<br>
[Bug][LDAP] LDAP : Connexion utilisateur manque de relation avec le groupe de personnes<br>
[Bug][LDAP] La commande ldap-sync n'utilise pas la configuration spécifiée<br>
[Bug][Relations] Pondération des relations des composants du service réinitialisée par défaut<br>
[Bug][Lists] L'affichage de la liste des services de cluster renvoie des erreurs SQL et n'est pas affiché<br>.
[Bug][Lists] Affichage des objets attribués à une personne dans la liste des objets impossible<br>
[Bug][Print view] Les rapports sans résultats dans les catégories définies par l'utilisateur provoquent des erreurs d'affichage<br>.
[Bug][Gestionnaire de rapports] Erreur dans le gestionnaire de rapports, les conditions avec "%NOT LIKE%" sont exécutées comme "%LIKE%".<br>
[Bug][Gestionnaire de rapports] Les conditions d'un rapport ne sont pas entièrement remplies<br>.
[Bug][Report-Manager] Le champ placeholder dans le rapport génère un message d'erreur SQL<br>.
[Bug][Report-Manager] Report-Manager : sélection limitée aux conditions "linked attribute"<br>
[Bug][Gestionnaire de rapports] Tri de la sortie selon le nom dans le rapport<br>
[Bug][Code (interne)] Création de dossiers d'importation et de téléchargement pour chaque client<br>
[Bug][Update] Recursively create folders for uploading files<br>
[Bug][Update] Migration des rapports impossible 1.13 > 1.13.1-2<br>
[Bug][Admincenter] La connexion à l'Admin Center ne fonctionne pas après la mise à jour vers i-doit 1.13.2<br>
[Bug][Console] Les relations sont mal représentées lors de l'utilisation de php console.php system-objecttrelations<br>
[Bug][Search] Exception de mémoire lors de la création d'un index de recherche<br>
[Bug][Licence settings] License widget : couleur du terme restant non conforme à la définition<br>
[Bug][JDisc] Lorsque des changements de port sont effectués par JDISC, l'objet lié n'est pas connecté.<br>
[Bug][JDisc] Si l'état de la CMDB est modifié par JDISC, il n'est pas enregistré.<br>
[Bug][CMDB settings] Le paramètre par défaut du navigateur d'objets de la catégorie "Storage Area Network" > "FC port" n'est pas utilisé<br>.
[Bug][CMDB settings] L'affectation de l'Object browser Layer-2-Net / Layer-3-Net n'existe pas<br>
[Bug][XML] L'importation de fichiers via XML écrase le contenu de la sous-catégorie "File Version<br>".
[Bug][Custom categories] Sanitize input data supprime la barre d'outils HTML.<br>
[Bug][Custom categories] Afficher correctement les noms de champs renommés<br>.
[Bug][Import] CSV Import : Affectation des licences<br>
[Bug][Import] Le fichier CSV n'est pas importé s'il se termine par .CSV (Uppercase)<br>
[Bug][Session] Le verrouillage d'objet reste intact lorsque l'utilisateur se connecte<br>
[Bug][Logbook] Pas d'entrée de logbook sur le serveur s'il est assigné à un locker - Vice-versa : locker crée une entrée de log<br>
[Bug][Objects] Vue du cabinet : la validation empêche le placement d'un objet<br>
[Bug][Objects] L'assignation de la version au système d'exploitation est incorrecte<br>
[Bug][Objects] Les objets avec des citations ("") dans le titre ne sont pas affichés correctement dans la vue d'ensemble du réseau de la couche 3<br>.
[Bug][Objects] Layer-2-net in objects are displayed with [] instead of empty value<br>
[Bug][Objects] IPv6 supernet affiche également les sous-réseaux en dehors de la plage définie<br>.
[Bug][List editing] Placeholder crée une vue erronée dans l'édition de liste<br>