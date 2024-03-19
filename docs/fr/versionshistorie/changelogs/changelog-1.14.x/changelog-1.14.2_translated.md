<!-- TRANSLATED by md-translate -->
# Changelog 1.14.2

# Changelog 1.14.2

[Improvement][Categories] Add field for firmware version<br>
[Improvement][Custom categories] Multi-Select Field in Custom Category<br>
[Improvement][List editing] MV Custom Category: Enable List Edit<br>
[Improvement][Report-Manager] Executing user to be displayed in the report<br>
[Bug][OCS] OCS Archived entries are not set to Normal during an import<br>
[Bug][LDAP] Information about user in creation date and date of change is empty when the user is created by logging in via LDAP<br>
[Bug][Report-Manager] Report Manager: Fields in the Database Assignment category are missing as a condition<br>
[Bug][Report-Manager] Error message when using the object type as output in reports<br>
[Bug][Report-Manager] Option to control behaviour of list filter in report lists<br>
[Bug][Report-Manager] dynamic attribute "rest warranty" selectable in the report manager<br>
[Bug][Report-Manager] Assigned storage devices (host) are not displayed in reports. Only "-" is displayed<br>
[Bug][JDisc] It should be able to choose whether system services are imported via JDISC.<br>
[Bug][JDisc] Custom Identifier are not inventoried again during JDisc import despite mode "Update (Inventory again)".<br>
[Bug][JDisc] JDisc Discovery tries to establish connection despite missing credentials<br>
[Bug][Search] Fix SQL syntax error in CMDB status query<br>
[Bug][Search] Wrong results when using search for custom categories<br>
[Bug][Search] Option: "Highlight search string" leads to wrong links in description fields<br>
[Bug][Search] Search index should display correct category names (+ constant in brackets)<br>
[Bug][CMDB settings] Remove Raid:Level from the Dialog Admin<br>
[Bug][Object type configuration] Alphabetical sorting of icons in object type configuration based on the file name<br>
[Bug][CSV Import] CSV Import multiobject Persons Error<br>
[Bug][CSV Import] Database error during CSV import > assigned SIM cards<br>
[Bug][CMDB] Associated storage devices (host) in virtual machines are not displayed correctly<br>
[Bug][Logbook] The object type is not logged during a JDISC import<br>
[Bug][Logbook] Logbook only shows IDs instead of actual content when changing information in multi dialogue plus fields from custom categories<br>
[Bug][Logbook] Error in logbook when custom categories are updated via CSV import<br>
[Bug][Categories] Tags in the General category cannot be created<br>
[Bug][Categories] JDisc import of wireless access points does not empty the WiFi devices category in overwrite mode<br>
[Bug][Categories] Category VRRP in the overview page of an object creates SQL error<br>
[Bug][Categories] HTML fields: The text style "Code" is no longer selectable<br>
[Bug][Update] Missing object type constant prevents use of i-doit after update to 1.14.1<br>
[Bug][Objects] Objects of type File can no longer be opened (Others/Files)<br>
[Bug][Systemtools] Option to remove multiple single value entries does not clean up relations<br>
[Bug][System settings] Unique Check of the hostname did not work<br>
[Bug][System settings] Setting to cancel processes if a validation conflict is detected does not work with list edit<br>
[Bug][Authorization system] Rights to view the category "Interface / external data" are missing<br>
[Bug][Installation] Installation not possible, because next button is grayed out after mod_rewrite check<br>
[Bug][Lists] Multi-Value List view: column width of last column not adjustable<br>
[Bug][Interface management] Zammad: Create ticket button creates link with undefined at end<br>

[Improvement][Categories] Ajout d'un champ pour la version du firmware<br>
[Improvement][Custom categories] Champ multi-sélection dans Custom Category<br>
[Improvement][List editing] MV Custom Category : Enable List Edit<br>
[Improvement][Gestionnaire de rapports] Exécuter l'utilisateur pour être affiché dans le rapport<br>
[Bug][OCS] Les entrées archivées OCS ne sont pas définies comme normales lors d'une importation<br>
[Bug][LDAP] L'information sur l'utilisateur dans la date de création et la date de changement est vide lorsque l'utilisateur est créé en se connectant via LDAP<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : les champs de la catégorie Assignation de base de données sont manquants comme condition<br>.
[Bug][Report Manager] Message d'erreur lors de l'utilisation du type d'objet en sortie dans les rapports<br>
[Bug][Report-Manager] Option pour contrôler le comportement du filtre de liste dans les listes de rapports<br>.
[Bug][Gestionnaire de rapports] attribut dynamique "garantie de repos" sélectionnable dans le gestionnaire de rapports<br>.
[Bug][Gestionnaire de rapports] Les périphériques de stockage assignés (hôte) ne sont pas affichés dans les rapports. Seul "-" est affiché<br>.
[Bug][JDisc] Il devrait être possible de choisir si les services système sont importés via JDISC.<br>
[Bug][JDisc] Les identifiants personnalisés ne sont pas inventoriés à nouveau lors de l'importation JDisc malgré le mode "Mise à jour (inventaire à nouveau)".<br>
[Bug][JDisc] La découverte du JDisc tente d'établir une connexion malgré des identifiants manquants<br>
[Bug][Search] Correction d'une erreur de syntaxe SQL dans la requête d'état CMDB<br>
[Bug][Search] Résultats erronés lors de l'utilisation de la recherche pour des catégories personnalisées<br>
[Bug][Search] Option : "Highlight search string" entraîne des liens erronés dans les champs de description<br>
[Bug][Search] L'index de recherche devrait afficher les noms de catégories corrects (+ constante dans les brackets)<br>
[Bug][CMDB settings] Supprimer Raid:Level de la boîte de dialogue Admin<br>
[Bug][Configuration du type d'objet] Tri alphabétique des icônes dans la configuration du type d'objet en fonction du nom de fichier<br>
[Bug][CSV Import] Erreur CSV multiobjets Persons<br>
[Bug][CSV Import] Erreur de base de données lors de l'importation CSV > cartes SIM assignées<br>
[Bug][CMDB] Les périphériques de stockage associés (hôte) dans les machines virtuelles ne s'affichent pas correctement<br>
[Bug][Logbook] Le type d'objet n'est pas enregistré lors d'une importation JDISC<br>
[Bug][Logbook] Logbook affiche uniquement les ID au lieu du contenu réel lors du changement d'informations dans le multi dialogue plus les champs des catégories personnalisées<br>.
[Bug][Logbook] Erreur dans le logbook lors de la mise à jour des catégories personnalisées via CSV import<br>
[Bug][Categories] Impossible de créer des tags dans la catégorie General<br>
[Bug][Categories] L'importation JDisc des points d'accès sans fil ne vide pas la catégorie WiFi devices en mode overwrite<br>
[Bug][Categories] La catégorie VRRP dans la page de présentation d'un objet crée une erreur SQL<br>.
[Bug][Categories] Champs HTML : le style de texte "Code" n'est plus sélectionnable<br>
[Bug][Update] La constante de type d'objet manquante empêche l'utilisation d'i-doit après la mise à jour à 1.14.1<br>
[Bug][Objects] Les objets de type fichier ne peuvent plus être ouverts (Others/Files)<br>
[Bug][Outils système] L'option pour supprimer plusieurs entrées de valeurs uniques ne nettoie pas les relations<br>.
[Bug][System settings] Unique check of the hostname did not work<br>
[Bug][System settings] Paramètre pour annuler les processus si un conflit de validation est détecté ne fonctionne pas avec l'édition de liste<br>
[Bug][Authorization system] Les droits d'affichage de la catégorie "Interface / données externes" sont manquants<br>
[Bug][Installation] Installation impossible car le bouton suivant est grisé après la vérification mod_rewrite<br>
[Bug][Lists] Multi-Value List view : column width of last column not adjustable<br>
[Bug][Gestion d'interface] Zammad : le bouton Create ticket crée un lien avec une fin indéfinie<br>