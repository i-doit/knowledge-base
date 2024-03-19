<!-- TRANSLATED by md-translate -->
# Changelog 1.16.3

# Changelog 1.16.3

[Bug][Notifications] Notification: Expiration of a certificate period - Despite threshold value, certificates outside the threshold value are also displayed<br>
[Bug][Notifications] Notifications: Recipients receive all objects although they are not selected as contact<br>
[Bug][Lists] Problems with the delete and purge button in object lists<br>
[Bug][Lists] Attribute "Members" is not available for person groups in lists<br>
[Bug][CSV Import] CSV Import: 'Start at line' and 'Import lines'<br>
[Bug][CSV Import] CSV Import: Import of operating system versions (and patchlevel) via the operating system category<br>
[Bug][CSV Import] Number of created or updated objects does not show the correct total number<br>
[Bug][CSV Import] When assigning an object via CSV import, the attribute object ID can not be used<br>
[Bug][CSV Import] Error when importing a contact assignment via csv-import<br>
[Bug][CSV Import] Attribute "Type" of category "certificate" is not filled via csv import<br>
[Bug][Categories] The search domain is cleared when the network is changed and saved<br>
[Bug][Categories] Attribute "Used Databases" is not saved properly<br>
[Bug][Categories] Option to click on a line does not open the object in assignment categories<br>
[Bug][Categories] Object types with the specific category 'Chassis' are not displayed correctly in cabinets<br>
[Bug][Categories] Archived power consumers are added to the power consumption of a Rack<br>
[Bug][Categories] Sim cards are not loaded correctly by clicking on the object link<br>
[Bug][Categories] ##COUNT## Placeholder is not evaluated for outputs (connection)<br>
[Bug][Code (internal)] Dialog+ Admin: The attribute Network > Port > Standard is not displayed<br>
[Bug][Code (internal)] The word e-mail is not spelled correctly in i-doit<br>
[Bug][Code (internal)] Legend of the IP list of layer-3 networks does not scroll without errors and runs to infinity<br>
[Bug][Code (internal)] Spelling mistake: Administration > CMDB settings > Object type configuration >> Orhpaned object types<br>
[Bug][Code (internal)] Wrong validation logic for Textarea properties in the API<br>
[Bug][Console] Error when using the i-doit console command search-index<br>
[Bug][Custom categories] When objects are duplicated, user-defined categories remain empty<br>
[Bug][Custom categories] Adding new values in Dialog+ (multiple selection) fields deletes existing entries<br>
[Bug][Custom categories] Custom category with ID 31 has no commentary field<br>
[Bug][Custom categories] Yes No Fields are displayed after saving - with -1<br>
[Bug][System settings] Barcode configuration no longer exists<br>
[Bug][Report-Manager] Identical attribute selection from different assigned objects causes them to be missing in the report<br>
[Bug][Report-Manager] Report Manager: Report does not show results although the Check button shows relations<br>
[Bug][Report-Manager] Investment costs are always empty in report results<br>
[Bug][Report-Manager] Duplicated variable reports are not flagged as variable reports, as long as the placeholder is not modified or a new placeholder is added<br>
[Bug][Report-Manager] Description text of a placeholder field does not change when a different type of placeholder is selected<br>
[Bug][Report-Manager] Description of report is cut when using some special characters<br>
[Bug][Report-Manager] SQL report is not displayed<br>
[Bug][Report-Manager] Date of creation and date of last change are no date fields for conditions in report manager<br>
[Bug][Report-Manager] Connection endpoints in the Report Manager generate an error message<br>
[Bug][Report-Manager] Used databases for software assignments as output attribute for reports generates errors<br>
[Bug][Report-Manager] Report Manager: SQL error message when using the Assigned Objects (Assigned Objects (Contract)) Attribute<br>
[Bug][Report-Manager] Wrong Name for Virtual devices Categorie in Report Manager<br>
[Bug][Report-Manager] Reports with nested output filters show only the object IDs<br>
[Bug][Documents] Assigned terminals of assigned workstations are not displayed in the document<br>
[Bug][Console-base Installation/Update/Licensing] auth-cleanup command deletes rights<br>
[Bug][Authorization system] Loaded parameters in the right configuration are set back to a default value when opening the configuration again<br>
[Bug][JDisc] JDisc Import: Import of Operating system > Version does not work correct<br>
[Bug][JDisc] Importing monitors via JDisc causes duplicated connections<br>
[Bug][JDisc] JDisc import assignes ip addresses twice<br>
[Bug][JDisc] JDISC: DNS server is not set during import<br>
[Bug][JDisc] The DBMS is displayed with and without version in the "Databases" folder category<br>
[Bug][OCS] OCS import empties all categories despite allCatsOverwrite=0<br>
[Bug][Object type configuration] Error message when activating custom categories<br>
[Bug][Mass editing] Deleting an object via mass change does not change the date of last change<br>
[Bug][Mass editing] User-defined categories are ignored during mass changes from templates<br>
[Bug][Templates] custom categories are ignored when creating objects from templates<br>
[Bug][Import] Active Directory computer import displays only 10 objects<br>
[Bug][List editing] Sorting in list edit by using object title is not possible<br>
[Bug][Search] SQL error message when using the search if there are many spaces<br>
[Bug][Search] Create search index via console generates error message<br>
[Bug][Cabling import] Cabling import cannot identify inputs and outputs if the title is the same<br>
[Bug][LDAP] LDAP-Sync: Check for sufficient rights for person group assignments<br>

[Bug][Notifications] Notification : Expiration d'une période de certificat - Malgré la valeur seuil, les certificats en dehors de la valeur seuil sont également affichés<br>.
[Bug][Notifications] Notifications : les destinataires reçoivent tous les objets alors qu'ils ne sont pas sélectionnés comme contact<br>
[Bug][Lists] Problèmes avec les boutons de suppression et de purge dans les listes d'objets<br>.
[Bug][Lists] L'attribut "Members" n'est pas disponible pour les groupes de personnes dans les listes<br>
[Bug][CSV Import] CSV Import : 'Start at line' and 'Import lines'<br>
[Bug][CSV Import] CSV Import : Importation des versions du système d'exploitation (et du niveau de patch) via la catégorie du système d'exploitation<br>
[Bug][CSV Import] Le nombre d'objets créés ou mis à jour n'affiche pas le nombre total correct<br>
[Bug][CSV Import] Lors de l'attribution d'un objet via CSV import, l'attribut ID de l'objet ne peut pas être utilisé<br>.
[Bug][CSV Import] Erreur lors de l'importation d'une attribution de contact via csv-import<br>
[Bug][CSV Import] L'attribut "Type" de la catégorie "certificate" n'est pas rempli via csv import<br>.
[Bug][Categories] Le domaine de recherche est effacé lorsque le réseau est modifié et sauvegardé<br>.
[Bug][Categories] L'attribut "Used Databases" n'est pas correctement sauvegardé<br>.
[Bug][Categories] L'option de cliquer sur une ligne n'ouvre pas l'objet dans les catégories d'affectation<br>.
[Bug][Categories] Les types d'objets avec la catégorie spécifique 'Châssis' ne s'affichent pas correctement dans les cabinets<br>.
[Bug][Categories] Les consommations d'énergie archivées sont ajoutées à la consommation d'énergie d'un rack<br>.
[Bug][Categories] Les cartes Sim ne sont pas chargées correctement en cliquant sur le lien de l'objet<br>.
[Bug][Categories] ##COUNT## Le porte-place n'est pas évalué pour les sorties (connexion)<br>
[Bug][Code (internal)] Dialog+ Admin : L'attribut Network > Port > Standard n'est pas affiché<br>
[Bug][Code (interne)] Le mot e-mail n'est pas correctement orthographié dans i-doit<br>.
[Bug][Code (interne)] La légende de la liste des IP des réseaux de couche 3 ne défile pas sans erreur et s'étend à l'infini<br>.
[Bug][Code (internal)] Erreur d'orthographe : Administration > Paramètres CMDB > Configuration du type d'objet >> Types d'objets orhpaned<br>
[Bug][Code (interne)] Logique de validation erronée pour les propriétés Textarea dans l'API<br>
[Bug][Console] Erreur lors de l'utilisation de la commande i-doit console search-index<br>
[Bug][Custom categories] Lorsque des objets sont dupliqués, les catégories définies par l'utilisateur restent vides<br>.
[Bug][Custom categories] L'ajout de nouvelles valeurs dans les champs Dialog+ (sélections multiples) supprime les entrées existantes<br>.
[Bug][Custom categories] La catégorie personnalisée avec ID 31 n'a pas de champ de commentaire<br>.
[Bug][Custom categories] Yes Aucun champ n'est affiché après la sauvegarde - avec -1<br>
[Bug][System settings] La configuration du code-barres n'existe plus<br>
[Bug][Gestionnaire de rapports] La sélection d'attributs identiques à partir de différents objets assignés provoque leur absence dans le rapport<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : le rapport n'affiche pas les résultats alors que le bouton Check indique les relations<br>
[Bug][Gestionnaire de rapports] Les coûts d'investissement sont toujours vides dans les résultats du rapport<br>.
[Bug][Gestionnaire de rapports] Les rapports variables dupliqués ne sont pas signalés comme des rapports variables tant que le support n'est pas modifié ou qu'un nouveau support n'est pas ajouté<br>.
[Bug][Report-Manager] Le texte de description d'un champ placeholder ne change pas lorsqu'un autre type de placeholder est sélectionné<br>.
[Bug][Report-Manager] La description du rapport est coupée lors de l'utilisation de certains caractères spéciaux<br>.
[Bug][Report-Manager] Le rapport SQL ne s'affiche pas<br>
[Bug][Report-Manager] La date de création et la date de dernière modification ne sont pas des champs de date pour les conditions dans le gestionnaire de rapports<br>
[Bug][Report Manager] Les points de connexion dans le gestionnaire de rapports génèrent un message d'erreur<br>.
[Bug][Gestionnaire de rapports] Les bases de données utilisées pour les affectations logicielles comme attribut de sortie pour les rapports génèrent des erreurs<br>.
[Bug][Report-Manager] Report Manager : message d'erreur SQL lors de l'utilisation des attributs Assigned Objects (Assigned Objects (Contract))<br>
[Bug][Report-Manager] Mauvais nom pour la catégorie Virtual devices dans Report Manager<br>
[Bug][Gestionnaire de rapports] Les rapports avec filtres de sortie emboîtés n'affichent que les ID d'objets<br>
[Bug][Documents] Les terminaux assignés des postes de travail assignés ne sont pas affichés dans le document<br>.
[Bug][Console-base installation/mise à jour/licensing] auth-cleanup command deletes rights<br>
[Bug][Authorization system] Les paramètres chargés dans la bonne configuration sont remis à une valeur par défaut quand on ouvre à nouveau la configuration<br>.
[Bug][JDisc] JDisc Import : Importation du système d'exploitation > Version ne fonctionne pas correctement<br>
[Bug][JDisc] Importer des moniteurs via JDisc provoque des connexions dupliquées<br>
[Bug][JDisc] JDisc import assigne des adresses ip deux fois<br>
[Bug][JDisc] JDISC : le serveur DNS n'est pas configuré pendant l'importation<br>
[Bug][JDisc] Le SGBD est affiché avec et sans la version dans la catégorie du dossier "Bases de données"<br>.
[Bug][OCS] OCS import emporte toutes les catégories despite allCatsOverwrite=0<br>
[Bug][Configuration du type d'objet] Message d'erreur lors de l'activation des catégories personnalisées<br>
[Bug][Mass editing] Deleting an object via mass change does not change the date of last change<br>
[Bug][Mass editing] Les catégories définies par l'utilisateur sont ignorées lors des modifications en masse des templates<br>
[Bug][Templates] les catégories personnalisées sont ignorées lors de la création d'objets à partir de templates<br>
[Bug][Importation] L'importation d'ordinateur Active Directory n'affiche que 10 objets<br>
[Bug][Édition de liste] Le tri dans l'édition de liste en utilisant le titre de l'objet n'est pas possible<br>
[Bug][Search] message d'erreur SQL lors de l'utilisation de la recherche s'il y a beaucoup d'espaces<br>
[Bug][Search] La création d'un index de recherche via la console génère un message d'erreur<br>.
[Bug][Cabling import] Cabling import ne peut pas identifier les entrées et les sorties si le titre est le même<br>.
[Bug][LDAP] Synchronisation LDAP : vérifier les droits suffisants pour les assignations de groupes de personnes<br>