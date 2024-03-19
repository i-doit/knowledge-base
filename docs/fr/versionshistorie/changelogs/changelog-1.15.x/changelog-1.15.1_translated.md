<!-- TRANSLATED by md-translate -->
# Changelog 1.15.1

# Changelog 1.15.1

[Improvement][LDAP] If a user logs in via LDAP the Auth Cache should also be cleared<br>
[Improvement][Export] XML-Export: extend selection of custom categories for the export<br>
[Improvement][OCS] OCS-Import Recalculate object type of CIs based on tag configuration<br>
[Bug][JDisc] Filtering by host address not possible for JDisc import with IPv6<br>
[Bug][JDisc] The correct Layer 3 net is not assigned during JDisc import.<br>
[Bug][JDisc] The time/date at "Last updated" in the category "Custom Identifier" should only be updated by the JDISC import<br>
[Bug][Systemtools] XAMPP: System Tools > Cache / Database the mysqldump.exe path is not found<br>
[Bug][Report-Manager] Error when using variable reports in custom categories<br>
[Bug][Report-Manager] Attribute Assigned SIM Cards (Assigned SIM cards) cannot reference objects<br>
[Bug][Report-Manager] Report: For the category files the attribute assigned objects is missing<br>
[Bug][Report-Manager] The IS NULL condition for location > location is missing from the report<br>
[Bug][Report-Manager] The Report Manager does not display all objects with empty operating systems<br>
[Bug][Report-Manager] Report Manager: Attribute "Connected to port (Network -> Logical ports)" generates SQL error<br>
[Bug][Report-Manager] Reports are no longer displayed after moving to a new instance<br>
[Bug][Report-Manager] Only links using http/https are generated as hyperlink in reports<br>
[Bug][Report-Manager] The text for the output is available under the item Advanced Options<br>
[Bug][Logbook] The logbook cannot be archived to a remote database<br>
[Bug][Logbook] When purging assignments, no object information is created in back categories<br>
[Bug][Logbook] The log book does not store the object name<br>
[Bug][Logbook] Show more details while the logbook is archiving<br>
[Bug][CSV Import] Password of category passwords can not be imported via CSV import<br>
[Bug][CSV Import] Error during import of storage information (device) - Assignment of manufacturers -> model<br>
[Bug][CSV Import] Error when importing information into custom categories via CSV import<br>
[Bug][CSV Import] Changing global object type in csv import clears the whole mapping<br>
[Bug][LDAP] Open LDAP / Novell Directory Service sync does not work<br>
[Bug][Categories] The category Racks in rooms cannot show racks if there are switch/blade chassis with slots<br>
[Bug][Categories] In the object list Application the field Title of the specific category Applications>Variant is missing<br>
[Bug][Categories] The output of a yes/no field with nothing selected "-" is not correct<br>
[Bug][Categories] Archived installations are displayed in the Application > Installation category<br>
[Bug][Categories] The property "category" from the category "Logbook" is not selectable in the condition and selection while creating a new report<br>
[Bug][Categories] Content from the category "Passwords" is not indexed during the search<br>
[Bug][Categories] In the list view of Layer-3 networks, IP addresses of archived objects under assigned addresses are counted<br>
[Bug][Categories] Sorting of ports in selection within category "hostaddress" not alphabetical<br>
[Bug][Categories] Linking in category "logical ports" not working<br>
[Bug][Code (internal)] Retrieving the logbook is extremely slow using sql_calc_found_rows when there are many records<br>
[Bug][Code (internal)] Some links lead to the logout of the user<br>
[Bug][Code (internal)] The inventory.zip cannot be downloaded via the i-doit web interface<br>
[Bug][Code (internal)] No forwarding when clicking the Cancel button - Button without function<br>
[Bug][Code (internal)] Alphanumeric sorting does not sort correctly<br>
[Bug][Code (internal)] LC__UNIVERSAL__OTHER is not translated<br>
[Bug][Code (internal)] Object list: Abbreviation HE (height units) is not translated<br>
[Bug][Objects] Files were not completely migrated 1.13.x > 1.14<br>
[Bug][User settings] Sorting in configuration of category lists not possible<br>
[Bug][Authorization system] Objects of type workplace are displayed as locations in the authorization system<br>
[Bug][Authorization system] Line for last change also shows last change to users without rights<br>
[Bug][Authorization system] Users with read rights can execute reports in the Object Browser<br>
[Bug][H-Inventory] Error when importing h-inventory XML-files<br>
[Bug][Documents] SQL error message after calling the documents Preview<br>
[Bug][List editing] List edit for category "Port" not accessable within the category<br>
[Bug][List editing] Group Membership cannot be detached via list edit<br>
[Bug][List editing] Error when assigning a Layer-2-Net to a port in list edit<br>
[Bug][Object type configuration] Icons are scaled incorrectly in the object type configuration<br>
[Bug][Object type configuration] The color palette of the object color in the object type configuration cannot be used after creation via QCW<br>
[Bug][Templates] Template: Time specifications of the SLA category are not correctly transferred to objects created from template<br>
[Bug][Import] The assignment of "Assigned SIM cards > Linked SIM cards" to Cellular Phones during CSV import does not work<br>
[Bug][Lists] Object list crashes when HTML editor of a custom category is displayed in the object list<br>
[Bug][Lists] Members of person groups can not be selected for being shown in object lists<br>
[Bug][Lists] Changes to column widths in object lists are not saved<br>
[Bug][Lists] Width of columns is reset when navigating through the pages of objects<br>
[Bug][Lists] Layer 3 network object list "Filter in all fields" shows empty list after emptying the filter<br>
[Bug][API] Incorrect reference for service assignment via API<br>
[Bug][API] Attribte "model" of category "Storage" is not included in the results<br>
[Bug][Admincenter] Editing a tenant in the Admin Center resets the assigned object licenses<br>
[Bug][Custom categories] Report Manager: The filter for checkboxes filter not correct<br>
[Bug][Custom categories] HTML-content from custom categories is shown twice on overview page<br>
[Bug][Notifications] Notification about stored objects is not sent with a threshold value of 0 or -1<br>
[Bug][Notifications] Formatting of info text in description of a notification is faulty<br>
[Bug][OCS] OCS Import logging logs even when logging is switched off<br>
[Bug][Search] Search: Only 0 or 1 is displayed as score<br>
[Bug][CMDB] Do not connect root location while creating cluster membership<br>
[Bug][CMDB] Language constant for the root location does not work everywhere<br>
[Bug][Connector Cabling] Sorting in cabling browser not correct<br>

[Amélioration][LDAP] Si un utilisateur se connecte via LDAP, le cache d'authentification doit également être nettoyé<br>.
[Improvement][Export] Exportation XML : étendre la sélection des catégories personnalisées pour l'exportation<br>.
[Improvement][OCS] OCS-Import Recalculer le type d'objet des CI en fonction de la configuration des tags<br>
[Bug][JDisc] Filtrage par adresse d'hôte impossible pour l'importation JDisc avec IPv6<br>
[Bug][JDisc] Le réseau de couche 3 correct n'est pas attribué pendant l'importation de JDisc.<br>
[Bug][JDisc] L'heure/la date à "Dernière mise à jour" dans la catégorie "Identifiant personnalisé" ne devrait être mise à jour que par l'importation JDISC<br>.
[Bug][Outils système] XAMPP : Outils système > Cache / Base de données le chemin mysqldump.exe n'est pas trouvé<br>
[Bug][Gestionnaire de rapports] Erreur lors de l'utilisation de rapports variables dans des catégories personnalisées<br>.
[Bug][Gestionnaire de rapports] Attributs Assigned SIM Cards (cartes SIM assignées) ne peuvent pas être des objets de référence<br>
[Bug][Gestionnaire de rapports] Rapport : pour les fichiers de catégorie, l'attribut objets associés est manquant<br>
[Bug][Gestionnaire de rapports] La condition IS NULL pour localisation > localisation est manquante dans le rapport<br>.
[Bug][Gestionnaire de rapports] Le gestionnaire de rapports n'affiche pas tous les objets avec des systèmes d'exploitation vides<br>.
[Bug][Report Manager] Report Manager : L'attribut "Connecté au port (Réseau -> Ports logiques)" génère une erreur SQL<br>.
[Bug][Report-Manager] Les rapports ne s'affichent plus après le passage à une nouvelle instance<br>
[Bug][Gestionnaire de rapports] Seuls les liens utilisant http/https sont générés comme hyperliens dans les rapports<br>.
[Bug][Gestionnaire de rapports] Le texte pour la sortie est disponible sous l'élément Advanced Options<br>.
[Bug][Logbook] Le logbook ne peut pas être archivé dans une base de données distante<br>.
[Bug][Logbook] Lors de la purge des affectations, aucune information d'objet n'est créée dans les catégories de retour<br>.
[Bug][Logbook] Le logbook ne stocke pas le nom de l'objet<br>
[Bug][Logbook] Afficher plus de détails alors que le logbook est en cours d'archivage<br>
[Bug][CSV Import] Le mot de passe des catégories ne peut pas être importé via CSV import<br>
[Bug][CSV Import] Erreur lors de l'importation des informations de stockage (périphérique) - Affectation des fabricants -> modèle<br>
[Bug][CSV Import] Erreur lors de l'importation d'informations dans des catégories personnalisées via CSV import<br>
[Bug][CSV Import] Changer le type d'objet global dans csv import nettoie tout le mapping<br>
[Bug][LDAP] La synchronisation Open LDAP / Novell Directory Service ne fonctionne pas<br>.
[Bug][Categories] La catégorie Racks dans les salles ne peut pas afficher les racks s'il y a des châssis switch/blade avec des slots<br>
[Bug][Categories] Dans la liste des objets Application, le champ Titre de la catégorie spécifique Applications>Variant est manquant<br>.
[Bug][Categories] La sortie d'un champ oui/non avec rien de sélectionné "-" n'est pas correcte<br>.
[Bug][Categories] Les installations archivées sont affichées dans l'Application > Installation category<br>.
[Bug][Categories] La propriété "category" de la catégorie "Logbook" n'est pas sélectionnable dans la condition et la sélection lors de la création d'un nouveau rapport<br>.
[Bug][Categories] Le contenu de la catégorie "Passwords" n'est pas indexé lors de la recherche<br>.
[Bug][Categories] Dans la vue liste des réseaux de couche 3, les adresses IP des objets archivés sous des adresses attribuées sont comptées<br>.
[Bug][Categories] Le tri des ports dans la sélection de la catégorie "hostaddress" n'est pas alphabétique<br>.
[Bug][Categories] Lien dans la catégorie "ports logiques" ne fonctionne pas<br>
[Bug][Code (interne)] La récupération du logbook est extrêmement lente en utilisant sql_calc_found_rows lorsqu'il y a beaucoup d'enregistrements<br>
[Bug][Code (internal)] Certains liens conduisent à la déconnexion de l'utilisateur<br>
[Bug][Code (interne)] Le fichier inventory.zip ne peut pas être téléchargé via l'interface web i-doit<br>.
[Bug][Code (internal)] Pas de transfert en cliquant sur le bouton Annuler - Bouton sans fonction<br>
[Bug][Code (internal)] Le tri alphanumérique ne se fait pas correctement<br>.
[Bug][Code (internal)] LC__UNIVERSAL__OTHER n'est pas traduit<br>
[Bug][Code (internal)] Liste d'objets : L'abréviation HE (unités de hauteur) n'est pas traduite<br>.
[Bug][Objects] Les fichiers n'ont pas été complètement migrés 1.13.x > 1.14<br>
[Bug][User settings] Tri dans la configuration des listes de catégories pas possible<br>
[Bug][Authorization system] Les objets de type poste de travail sont affichés comme des emplacements dans le système d'autorisation<br>.
[Bug][Authorization system] La ligne pour la dernière modification indique également la dernière modification aux utilisateurs sans droits<br>
[Bug][Authorization system] Les utilisateurs avec des droits de lecture peuvent exécuter des rapports dans le navigateur d'objets<br>.
[Bug][H-Inventory] Erreur lors de l'importation de fichiers XML h-inventory<br>
[Bug][Documents] Message d'erreur SQL après avoir appelé l'aperçu des documents<br>
[Bug][List editing] Édition de la liste pour la catégorie "Port" non accessible dans la catégorie<br>
[Bug][List editing] L'appartenance à un groupe ne peut pas être détachée via l'édition de la liste<br>
[Bug][List editing] Erreur lors de l'attribution d'un réseau de couche 2 à un port dans l'édition de liste<br>
[Bug][Configuration du type d'objet] Les icônes sont incorrectement scalées dans la configuration du type d'objet<br>.
[Bug][Object type configuration] La palette de couleurs de la couleur de l'objet dans la configuration du type d'objet ne peut pas être utilisée après la création via QCW<br>
[Bug][Templates] Modèle : les spécifications de temps de la catégorie SLA ne sont pas correctement transférées aux objets créés à partir du modèle<br>.
[Bug][Import] L'assignation de "Assigned SIM cards > Linked SIM cards" aux téléphones cellulaires lors de l'importation CSV ne fonctionne pas<br>.
[Bug][Lists] La liste des objets se bloque lorsque l'éditeur HTML d'une catégorie personnalisée est affiché dans la liste des objets<br>.
[Bug][Lists] Les membres des groupes de personnes ne peuvent pas être sélectionnés pour être affichés dans les listes d'objets<br>.
[Bug][Lists] Les modifications de la largeur des colonnes dans les listes d'objets ne sont pas enregistrées<br>.
[Bug][Lists] La largeur des colonnes est réinitialisée lors de la navigation dans les pages des objets<br>.
[Bug][Lists] Layer 3 network object list "Filter in all fields" shows empty list after emptying the filter<br>
[Bug][API] Référence incorrecte pour l'attribution de service via l'API<br>
[Bug][API] L'attribut "model" de la catégorie "Storage" n'est pas inclus dans les résultats<br>
[Bug][Admincenter] Modifier un locataire dans le centre d'administration réinitialise les licences d'objets attribuées<br>
[Bug][Custom categories] Report Manager : Le filtre pour les cases à cocher ne filtre pas correctement<br>
[Bug][Custom categories] Le contenu HTML des catégories personnalisées est affiché deux fois sur la page d'aperçu<br>.
[Bug][Notifications] La notification concernant les objets stockés n'est pas envoyée avec une valeur seuil de 0 ou -1<br>
[Bug][Notifications] Le formatage du texte d'information dans la description d'une notification est incorrect<br>.
[Bug][OCS] OCS Import logging logs even when logging is switched off<br>
[Bug][Search] Recherche : Seul 0 ou 1 est affiché comme score<br>
[Bug][CMDB] Ne pas connecter l'emplacement racine lors de la création de l'appartenance au cluster<br>
[Bug][CMDB] La constante linguistique pour l'emplacement racine ne fonctionne pas partout<br>
[Bug][Connector Cabling] Le tri dans le navigateur de câblage n'est pas correct<br>