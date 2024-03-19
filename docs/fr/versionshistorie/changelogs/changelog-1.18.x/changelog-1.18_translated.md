<!-- TRANSLATED by md-translate -->
# Changelog 1.18

# Changelog 1.18

[Improvement][Password Encryption 2.0] New Cryptohashing for user passwords<br>
[Improvement][Custom categories]       New field type "Number field" in the custom categories<br>
[Improvement][Custom categories]       Dependencies for dialog+ fields in custom categories<br>
[Improvement][Custom categories]       Use variables in custom categories<br>
[Improvement][System settings]         Free defineable COUNTER variables<br>
[Improvement][Import]                  Net zones are not assigned to objects imported from JDisc<br>
[Bug][CSV Import]                      Export custom categories of type report in csv<br>
[Bug][Authorization system]            Archive and delete right has no effect for "objects below a logical location".<br>
[Bug][Authorization system]            Creating a report changes the permissions system and assigns new permissions<br>
[Bug][Authorization system]            Users automatically get full access to objects they create<br>
[Bug][Authorization system]            Right assignment for object type "Container" possible<br>
[Bug][Authorization system]            Improved naming for rights, permitting access to content below a defined object<br>
[Bug][Authorization system]            Clean up for permissions, relating to objects below a physical/logical location<br>
[Bug][Authorization system]            Sometimes, the same permission is shown more than once<br>
[Bug][Authorization system]            User settings: Presence not configurable<br>
[Bug][Authorization system]            The Layer 2 Net > Assigned ports category for Layer 2 Net objects cannot be edited<br>
[Bug][Categories]                      The attribute "Last revision" of the documents category should be displayed in the object list<br>
[Bug][Categories]                      Unneccessary information about missing create right when editing an object<br>
[Bug][Categories]                      List of assigned object of a license cannot be sorted<br>
[Bug][Categories]                      Net areas are not loaded in the filters for the object list view<br>
[Bug][Categories]                      New mode selectable per default for ports ("Stacking")<br>
[Bug][Categories]                      The position of the label of the empty values filter is not related to the checkboxes<br>
[Bug][Categories]                      Sorting ports and connectors in the cabling browser<br>
[Bug][Categories]                      If contract assignments are detached an empty category entry with "{}" as the designation remains<br>
[Bug][JDisc]                           Do not create new person objects but link existing ones<br>
[Bug][JDisc]                           New JDisc custom attribute type is not imported to i-doit<br>
[Bug][JDisc]                           Import of address assignment field from JDisc<br>
[Bug][Report-Manager]                  Report does not display attributes when outputting the "People" subcategory from the "Organization" category<br>
[Bug][Report-Manager]                  Report Manager does not replace Placeholder<br>
[Bug][Report-Manager]                  Report Manager: Parameters in the condition change when opening a report<br>
[Bug][Report-Manager]                  Wrong values when listing information from category Computing resources in a report<br>
[Bug][Report-Manager]                  Improved information about report type during creation<br>
[Bug][API]                             Person Groups cannot be added via Person -> Persons group memberships<br>
[Bug][Custom categories]               In custom categories at the Object-Relationship field type the relationship type cannot be saved<br>
[Bug][OCS]                             OCS Import: If Multi Value categories are imported there are duplicate entries<br>
[Bug][Code (internal)]                 "Changes" parameter of the signals contains no array<br>
[Bug][Code (internal)]                 500er Error if no object browser entry is selected for editing<br>
[Bug][Code (internal)]                 Legend of Net disappears when scrolling down<br>
[Bug][Code (internal)]                 Database Folder icons are not displayed<br>
[Bug][LDAP]                            For an LDAP filter with * as a placeholder no objects are imported<br>
[Bug][Search]                          Global search for "%aa" causes SQL Error<br>
[Bug][Search]                          Search finds archived/deleted objects, even if they are excluded by system setting, if their content is modified after changing the state of the object to archived/deleted<br>
[Bug][Search]                          If the object type of an object is changed, the object will be found with both object types in the search<br>
[Bug][Import]                          LDAP/AD import ignores the default template for object types<br>
[Bug][Import]                          Exported objects that are installed vertically in cabinets are mapped incorrectly by XML import<br>
[Bug][Import]                          CSV import by comma-separated multi-value attributes of a user-defined category<br>
[Bug][Import]                          Importing SIM cards - cards with linked cellular phones does not create a relationship<br>
[Bug][List editing]                    Custom categories that have a report field cannot be opened in list editing<br>
[Bug][Validation]                      Duplicate objects bypasses the configured validation<br>
[Bug][Validation]                      Description field in custom categories cannot be set to mandatory in the validation<br>
[Bug][Logbook]                         Logbook entries of assigned workplace components and assigned workstation are only shown in one direction<br>
[Bug][Lists]                           Sort by roles in groups of people > Members does not sort correctly<br>
[Bug][Lists]                           For solved single relations {} are displayed in the list view<br>
[Bug][Lists]                           Available licenses aren't shown correctly in list view(core-based)<br>
[Bug][Lists]                           In our lists the pager icon for "previous page" is missing<br>
[Bug][CMDB]                            Language constant for the root location does not work everywhere<br>
[Bug][CMDB]                            Propose Passwort variant "Stark" is not translatet into english<br>
[Bug][Objects]                         Changes in categories are not output correctly via the Events add-on<br>
[Bug][CMDB settings]                   Special characters for custom categories with JavaScript fields are cleaned up<br>
[Bug][Object type configuration]       Icons for the object tree are in the wrong folder<br>
[Bug][Notifications]                   Type for notifications in german version<br>

[Improvement][Password Encryption 2.0] Nouveau cryptohashing pour les mots de passe utilisateurs<br>
[Improvement][Custom categories] Nouveau type de champ "Number field" dans les custom categories<br>
[Improvement][Custom categories] Dependencies for dialog+ fields in custom categories<br>
[Improvement][Custom categories] Use variables in custom categories<br>
[Improvement][System settings] Free defineable COUNTER variables<br>
[Improvement][Import] Net zones are not assigned to objects imported from JDisc<br>
[Bug][CSV Import] Exportation des catégories personnalisées du type de rapport dans csv<br>
[Bug][Authorization system] Le droit d'archiver et de supprimer n'a pas d'effet sur les "objets en dessous d'un emplacement logique".<br>
[Bug][Authorization system] La création d'un rapport modifie le système de permissions et attribue de nouvelles permissions<br>.
[Bug][Authorization system] Les utilisateurs obtiennent automatiquement un accès complet aux objets qu'ils créent<br>.
[Bug][Authorization system] Affectation correcte possible pour le type d'objet "Conteneur"<br>
[Bug][Authorization system] Amélioration du nommage des droits, permettant l'accès au contenu sous un objet défini<br>
[Bug][Authorization system] Nettoyage des permissions, concernant les objets sous un emplacement physique/logique<br>
[Bug][Authorization system] Parfois, la même permission est affichée plus d'une fois<br>.
[Bug][Authorization system] Paramètres utilisateur : présence non configurable<br>
[Bug][Authorization system] La catégorie Layer 2 Net > Assigned ports pour les objets Layer 2 Net ne peut pas être éditée<br>.
[Bug][Categories] L'attribut "Dernière révision" de la catégorie de documents devrait être affiché dans la liste des objets<br>.
[Bug][Categories] Informations inutiles sur le droit de création manquant lors de l'édition d'un objet<br>.
[Bug][Categories] Impossible de trier la liste des objets attribués à une licence<br>
[Bug][Categories] Les zones nettes ne sont pas chargées dans les filtres pour la vue de la liste des objets<br>
[Bug][Categories] Nouveau mode sélectionnable par défaut pour les ports ("Stacking")<br>
[Bug][Categories] La position de l'étiquette du filtre des valeurs vides n'est pas liée aux cases à cocher<br>.
[Bug][Categories] Trier les ports et les connecteurs dans le navigateur de câblage<br>.
[Bug][Categories] Si les affectations de contrat sont détachées, une entrée de catégorie vide avec "{}" comme désignation subsiste<br>.
[Bug][JDisc] Ne pas créer de nouveaux objets personnes mais relier les existants<br>.
[Bug][JDisc] Le nouveau type d'attribut personnalisé JDisc n'est pas importé dans i-doit<br>
[Bug][JDisc] Importation du champ d'attribution d'adresse depuis JDisc<br>
[Bug][Gestionnaire de rapports] Le rapport n'affiche pas les attributs lors de l'extraction de la sous-catégorie "Personnes" de la catégorie "Organisation"<br>.
[Bug][Gestionnaire de rapports] Le gestionnaire de rapports ne remplace pas Placeholder<br>
[Bug][Report-Manager] Report Manager : les paramètres dans la condition changent lors de l'ouverture d'un rapport<br>
[Bug][Report-Manager] Valeurs incorrectes lors du listing des informations de la catégorie Ressources informatiques dans un rapport<br>
[Bug][Gestionnaire de rapports] Amélioration des informations sur le type de rapport lors de sa création<br>
[Bug][API] Les groupes de personnes ne peuvent pas être ajoutés via Personne -> Membres du groupe de personnes<br>.
[Bug][Custom categories] Dans les catégories personnalisées au niveau du type de champ relationnel objet, le type de relation ne peut pas être sauvegardé<br>.
[Bug][OCS] OCS Import : Si les catégories multi-valeurs sont importées, il y a des entrées en double<br>.
[Bug][Code (interne)] Le paramètre "Changes" des signaux ne contient pas de tableau<br>.
[Bug][Code (interne)] Erreur de 500 si aucune entrée de navigateur d'objet n'est sélectionnée pour l'édition<br>
[Bug][Code (internal)] La légende du Net disparaît lorsque l'on fait défiler vers le bas<br>
[Bug][Code (internal)] Les icônes des dossiers de la base de données ne s'affichent pas<br>
[Bug][LDAP] Pour un filtre LDAP avec * comme placeholder aucun objet n'est importé<br>
[Bug][Search] La recherche globale de "%aa" provoque une erreur SQL<br>.
[Bug][Search] La recherche trouve des objets archivés/détruits, même s'ils sont exclus par la configuration du système, si leur contenu est modifié après le changement de l'état de l'objet en archivé/détruit<br>.
[Bug][Search] Si le type d'objet d'un objet est modifié, l'objet sera trouvé avec les deux types d'objets dans la recherche<br>.
[Bug][Import] L'importation LDAP/AD ignore le modèle par défaut pour les types d'objets<br>.
[Bug][Import] Les objets exportés qui sont installés verticalement dans les cabinets sont mal mappés par l'import XML<br>.
[Bug][Import] Importation CSV par attributs multi-values séparés par des virgules d'une catégorie définie par l'utilisateur<br>
[Bug][Import] Importation de cartes SIM - les cartes avec des téléphones cellulaires liés ne créent pas de relation<br>
[Bug][Édition de liste] Les catégories personnalisées qui ont un champ de rapport ne peuvent pas être ouvertes en édition de liste<br>.
[Bug][Validation] Les objets en double contournent la validation configurée<br>
[Bug][Validation] Le champ Description dans les catégories personnalisées ne peut pas être rendu obligatoire dans la validation<br>.
[Bug][Logbook] Les entrées du journal des composants du poste de travail assigné et du poste de travail assigné ne sont affichées que dans un sens<br>.
[Bug][Lists] Le tri par rôle dans les groupes de personnes > Membres ne se fait pas correctement<br>.
[Bug][Lists] Pour les relations individuelles résolues {} sont affichées dans la vue de liste<br>.
[Bug][Lists] Les licences disponibles ne s'affichent pas correctement dans la vue de la liste (basée sur le noyau) <br>.
[Bug][Lists] Dans nos listes, l'icône du pager "page précédente" est manquante<br>.
[Bug][CMDB] La constante linguistique pour l'emplacement racine ne fonctionne pas partout<br>
[Bug][CMDB] La variante de mot de passe "Stark" n'est pas traduite en anglais<br>.
[Bug][Objects] Les changements dans les catégories ne sont pas correctement affichés via l'add-on Events<br>.
[Bug][CMDB settings] Les caractères spéciaux pour les catégories personnalisées avec les champs JavaScript sont nettoyés<br>
[Bug][Configuration du type d'objet] Les icônes de l'arborescence des objets sont dans le mauvais dossier<br>.
[Bug][Notifications] Type de notifications dans la version allemande<br>.