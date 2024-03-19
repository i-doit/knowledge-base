<!-- TRANSLATED by md-translate -->
# Changelog 23

# Changelog 23

[Task][Categories]               Change database field type for description fields from TEXT to LONGTEXT  
[Task][Code (Internal)]          Rename "Possible next termination date" to "Last possible termination date"  
[Improvement][CMDB]              Allow SVG as object image and icon  
[Improvement][CMDB]              Create placeholder for the 24h format  
[Improvement][Code (Internal)]   Translation of custom content  
[Improvement][Relations]         Option to set spacing for menu trees  
[Improvement][CSV Import]        Make proper use of profiles in CSV import command  
[Improvement][Categories]        Automatically extend contract runtime  
[Bug][Lists]                     Filter for Net Zone is not available in the list view  
[Bug][Lists]                     Wiring system missing in servers list view configuration  
[Bug][Lists]                     Assigned objects is missing in list view configuration  
[Bug][Lists]                     Text in list overview is cut off for multi-value fields  
[Bug][JDisc]                     JDisc import always sets the DNS server and this is logged in the logbook  
[Bug][JDisc]                     JDisc Discovery does not work with HTTP/HTTPS  
[Bug][JDisc]                     DBMS and Instance Name are not deleted correctly  
[Bug][JDisc]                     JDisc import error when "Use simple database modelling?" is activated  
[Bug][JDisc]                     JDisc import via console removes categories and other configurations  
[Bug][JDisc]                     JDisc Profile is not saved with default JDisc Server after creating a JDisc Server entry  
[Bug][List editing]              Port allocation is deleted when saving in list edit  
[Bug][List editing]              Creating a new value for model in list edit causes error  
[Bug][List editing]              Default VLAN in list edit not selectable  
[Bug][List editing]              Contact assignment does not work for empty values in list edit  
[Bug][List editing]              List edit - Headquarters are not displayed for Organizations  
[Bug][Code (Internal)]           Deny access to .ini files  
[Bug][Code (Internal)]           Fixing config.inc.php content  
[Bug][Code (Internal)]           Filter a numeric ID in the object list fails - PHP 8.1  
[Bug][Code (Internal)]           After typing 3 characters the focus of the object browser search is changed to the filter  
[Bug][Code (Internal)]           Allow opening link in new Tab for HTML Field  
[Bug][Code (Internal)]           Wrong icon for export in quick configuration wizard  
[Bug][Code (Internal)]           Attachments in racks are not working correctly  
[Bug][Code (Internal)]           Switching to location view with a huge amount of objects and locations freezes i-doit  
[Bug][Code (Internal)]           Saving Trouble Ticket System (TTS) configuration does not display a save message  
[Bug][Code (Internal)]           Uploading custom object images and icons is not possible  
[Bug][Code (Internal)]           Fix IP calculation for PHP 8+  
[Bug][Code (Internal)]           Saving the 'General' category will always show empty 'creation date' and 'last change' change in logbook  
[Bug][Code (Internal)]           PHP 8.1 error when add-on is disabled  
[Bug][Code (Internal)]           Objects with empty location category are displayed in location tree  
[Bug][Object type configuration] Specific object type categories are missing in selection  
[Bug][Object type configuration] Icons for objects are not uploaded  
[Bug][Object type configuration] Can't upload .svg for object type icon  
[Bug][Report-Manager]            Report Manager using wrong date format which displays wrong results  
[Bug][Report-Manager]            Conditions might not be loaded correctly in the report manager  
[Bug][Report-Manager]            A Net zone is not selectable for the Report Manager in a updated i-doit installation  
[Bug][Report-Manager]            Runtime of a contract is not shown in report results  
[Bug][Report-Manager]            No information about active sorting in report manager  
[Bug][Report-Manager]            Report Manager - Conditions are deleted when using one condition block  
[Bug][Report-Manager]            Different export of a report if a dynamic attribute was added in the report  
[Bug][Report-Manager]            Report Logbook is missing colors  
[Bug][LDAP]                      If the ldap-sync can not find a User in the search path a php fatal error occurs with php8.0  
[Bug][LDAP]                      The LDAP Sync does not log in the loogbok when a Person is recycled  
[Bug][LDAP]                      Each ldap-sync generates an object was archived message in the logbook  
[Bug][LDAP]                      The ldap-sync resulted in an error  
[Bug][LDAP]                      500 Error with SSO login  
[Bug][Installation]              The variable passwords_encryption_method is set to %config.security.passwords_encryption_method% after installation  
[Bug][CSV Import]                Import of CMDB status via CSV import over console creates new CMDB status instead of using the correct one  
[Bug][CSV Import]                CSV Import Profile with console.php does not handle multi value category setting  
[Bug][CSV Import]                Import of vertically assigned objects into a rack via CSV import not possible  
[Bug][CSV Import]                DateTime fields are not importable via CSV  
[Bug][CSV Import]                Imported CMDB Status via CSV are not displayed in the CMDB Settings > CMDB status  
[Bug][CSV Import]                CSV Import does not use automatic inventory number  
[Bug][CSV Import]                CSV import cache is not flushed before import via console.php  
[Bug][CSV Import]                If the --csvSeparator option is not used for the import-csv command "CSV-File empty" is displayed  
[Bug][QR-Codes]                  QR-Code not loading when using a load balancer  
[Bug][QR-Codes]                  Layout of QR-Codes in report view is irregular  
[Bug][Categories]                Using quickpurge for application>installations causes error  
[Bug][Categories]                Error when archiving service assignment  
[Bug][Categories]                Can't hide objectid  
[Bug][Categories]                SQL Error when deleting assigned objects in organizations  
[Bug][Categories]                SQL Error when archiving assigned user  
[Bug][Categories]                IP addresses are sometimes cut in ip lists  
[Bug][H-Inventory]               hinventory import error due to missing entries in constants cache  
[Bug][Validation]                CSV Import validation for automatic inventory number  
[Bug][Validation]                CSV-Import ignores validation rule "a regular expression"  
[Bug][Validation]                Chosen fields do not get highlighted when validation fails  
[Bug][Validation]                Show validation error to user if custom dialog+ field is required  
[Bug][Validation]                It is not possible to Validate the category Assigned Workplaces  
[Bug][Documents]                 Assigned objects not displayed in documents  
[Bug][Documents]                 Error when using console.php documents export outisde of i-doit folder  
[Bug][Admincenter]               No message if a Add-on with requirement 1.19 is installed in a pre 1.19 Version  
[Bug][Admincenter]               Assigned Object licenses are not counted in the Admin Center  
[Bug][Admincenter]               Admin-Center Password reset throws exception when license missing for more than 30days  
[Bug][CMDB-Explorer]             CMDB-Explorer can't export graph  
[Bug][CMDB-Explorer]             The relationships are displayed upside down in a GraphML export of the CMDB Explorer  
[Bug][Templates]                 Automatic inventory number not working for template  
[Bug][Notifications]             Notifications for license expiration do not work correctly  
[Bug][Application Redesign]      IP-List cut off when assigning an object  
[Bug][CMDB]                      Can not hide some attributes in attribute visibility  
[Bug][System tools]              Endless loading when checking mod_rewrite in system overview  
[Bug][System settings]           If the System setting Placeholder in lists is below the needed chars the ID of the object is displayed  
[Bug][Update]                    Authorization for Update via console.php not possible  
[Bug][Update]                    Error message when editing Object Type Configuration  
[Bug][Mass editing]              If a license > license key are assigned via the mass change the license key is duplicated  
[Bug][Authorization system]      Right Categories in objects with assigned role in contact assignment are not awarded  
[Bug][Custom categories]         Displaying 2 variable reports in overview does not work  
[Bug][Import]                    Werden Objekte mit Checkmk 2 Add-on Daten via XML Exportiert und in einem Mandanten ohne das Add-on Importiert bricht der Import ab  
[Bug][Monitoring]                Monitoring cannot be deactivated with the Active attribute  
[Bug][API]                       The Parent entry of a dialog+ field can not identified by title  
[Bug][API]                       Category Cabling Connectors > Assigned connector is a Array

[Tâche][Categories] Changement du type de champ de la base de données pour les champs de description de TEXT à LONGTEXT
[Tâche][Code (Interne)] Rename "Possible next termination date" to "Last possible termination date".
[Improvement][CMDB] Autoriser SVG comme image et icône d'objet
[Improvement][CMDB] Créer un support pour le format 24h
[Improvement][Code (Internal)] Traduction du contenu personnalisé
[Improvement][Relations] Option pour définir l'espacement des arborescences de menu
[Improvement][CSV Import] Make proper use of profiles in CSV import command
[Improvement][Categories] Extension automatique du temps d'exécution du contrat
[Bug][Lists] Le filtre pour Net Zone n'est pas disponible dans la vue liste
[Bug][Lists] Système d'exploitation manquant dans la configuration de la liste des serveurs
[Bug][Lists] Les objets assignés sont absents de la configuration de la vue liste
[Bug][Lists] Le texte dans l'aperçu de la liste est coupé pour les champs multi-valeurs
[Bug][JDisc] L'importation de JDisc définit toujours le serveur DNS et cela est enregistré dans le logbook
[Bug][JDisc] La découverte de JDisc ne fonctionne pas avec HTTP/HTTPS
[Bug][JDisc] Le DBMS et le nom de l'instance ne sont pas supprimés correctement
[Bug][JDisc] Erreur d'importation de JDisc lorsque "Use simple database modelling ?" est activé
[Bug][JDisc] L'importation de JDisc via la console supprime les catégories et autres configurations
[Bug][JDisc] Le profil JDisc n'est pas sauvegardé avec le serveur JDisc par défaut après la création d'une entrée de serveur JDisc
[Bug][Édition de liste] L'allocation de port est supprimée lors de la sauvegarde dans l'édition de liste
[Bug][List editing] Création d'une nouvelle valeur pour le modèle dans l'édition de liste provoque une erreur
[Bug][List editing] VLAN par défaut non sélectionnable dans l'édition de la liste
[Bug][List editing] L'affectation des contacts ne fonctionne pas pour les valeurs vides dans l'édition de la liste
[Bug][List editing] List edit - Les sièges sociaux ne sont pas affichés pour les organisations
[Bug][Code (Internal)] Refuser l'accès aux fichiers .ini
[Bug][Code (Internal)] Correction du contenu de config.inc.php
[Bug][Code (Internal)] Échec du filtrage d'un ID numérique dans la liste des objets - PHP 8.1
[Bug][Code (Internal)] Après avoir tapé 3 caractères, le focus de la recherche du navigateur d'objets est changé pour le filtre
[Bug][Code (Internal)] Autoriser l'ouverture d'un lien dans un nouvel onglet pour le champ HTML
[Bug][Code (Internal)] Mauvaise icône pour l'exportation dans l'assistant de configuration rapide
[Bug][Code (Internal)] Les pièces jointes dans les racks ne fonctionnent pas correctement
[Bug][Code (Internal)] Passer à la vue de l'emplacement avec un grand nombre d'objets et d'emplacements bloque i-doit
[Bug][Code (Internal)] La configuration Saving Trouble Ticket System (TTS) n'affiche pas de message de sauvegarde
[Bug][Code (Interne)] Le téléchargement d'images et d'icônes d'objets personnalisés n'est pas possible
[Bug][Code (Internal)] Correction du calcul de l'IP pour PHP 8+.
[Bug][Code (Internal)] La sauvegarde de la catégorie 'General' affiche toujours un changement vide 'date de création' et 'dernière modification' dans le logbook
[Bug][Code (Internal)] Erreur PHP 8.1 lorsque l'add-on est désactivé
[Bug][Code (Internal)] Les objets avec une catégorie de lieu vide sont affichés dans l'arbre des lieux
[Bug][Configuration du type d'objet] Des catégories spécifiques de type d'objet sont manquantes dans la sélection
[Bug][Object type configuration] Les icônes des objets ne sont pas téléchargées
[Bug][Configuration du type d'objet] Impossible de télécharger le fichier .svg pour l'icône du type d'objet
[Bug][Gestionnaire de rapports] Le gestionnaire de rapports utilise un format de date erroné qui affiche des résultats incorrects
[Bug][Gestionnaire de rapports] Les conditions peuvent ne pas être chargées correctement dans le gestionnaire de rapports
[Bug][Report Manager] Une Net zone n'est pas sélectionnable pour le Report Manager dans une installation i-doit mise à jour
[Bug][Report Manager] Le temps d'exécution d'un contrat n'est pas affiché dans les résultats du rapport
[Bug][Report Manager] Pas d'information sur le tri actif dans le gestionnaire de rapports
[Bug][Report Manager] Report Manager - Les conditions sont supprimées lors de l'utilisation d'un bloc de conditions
[Bug][Report Manager] Exportation différente d'un rapport si un attribut dynamique a été ajouté dans le rapport
[Bug][Gestionnaire de rapports] Le journal des rapports manque de couleurs
[Bug][LDAP] Si ldap-sync ne trouve pas un utilisateur dans le chemin de recherche une erreur fatale php se produit avec php8.0
[Bug][LDAP] La sync LDAP ne se connecte pas dans le loogbok lorsqu'une personne est recyclée.
[Bug][LDAP] Chaque synchronisation ldap génère un message objet a été archivé dans le logbook
[Bug][LDAP] La synchronisation ldap a provoqué une erreur.
[Bug][LDAP] 500 Erreur avec le login SSO
[Bug][Installation] La variable passwords_encryption_method est fixée à %config.security.passwords_encryption_method% après l'installation
[Bug][CSV Import] Importation de l'état de la CMDB via CSV import via console crée un nouvel état de la CMDB au lieu d'utiliser le bon.
[Bug][CSV Import] CSV Import Profile with console.php does not handle multi value category setting
[Bug][CSV Import] Impossible d'importer des objets assignés verticalement dans un rack via CSV import
[Bug][CSV Import] Les champs DateTime ne sont pas importables via CSV
[Bug][CSV Import] Les statuts CMDB importés via CSV ne sont pas affichés dans les Paramètres CMDB > Statut CMDB
[Bug][CSV Import] CSV Import n'utilise pas le numéro d'inventaire automatique
[Bug][CSV Import] Le cache d'importation CSV n'est pas vidangé avant l'importation via console.php
[Bug][CSV Import] Si l'option --csvSeparator n'est pas utilisée pour la commande import-csv "CSV-File empty" est affiché
[Bug][QR-Codes] Le code QR ne se charge pas lors de l'utilisation d'un équilibreur de charge
[Bug][QR-Codes] La disposition des codes QR dans l'affichage des rapports est irrégulière
[Bug][Categories] L'utilisation de quickpurge pour application>installations provoque une erreur
[Bug][Categories] Erreur lors de l'archivage de l'affectation de service
[Bug][Categories] Ne peut pas cacher l'objet.
[Bug][Categories] Erreur SQL lors de la suppression d'objets assignés dans des organisations
[Bug][Categories] Erreur SQL lors de l'archivage d'un utilisateur assigné
[Bug][Categories] Les adresses IP sont parfois coupées dans les listes ip
[Bug][H-Inventory] erreur d'import hinventory due à des entrées manquantes dans le cache des constantes
[Bug][Validation] Validation de l'importation CSV pour le numéro d'inventaire automatique
[Bug][Validation] L'importation CSV ignore la règle de validation "une expression régulière".
[Bug][Validation] Les champs en vrac ne sont pas mis en évidence en cas d'échec de la validation
[Bug][Validation] Affichage d'une erreur de validation à l'utilisateur si le champ dialogue+ personnalisé est requis
[Bug][Validation] Il n'est pas possible de valider la catégorie Lieux de travail désignés.
[Bug][Documents] Les objets assignés ne s'affichent pas dans les documents
[Bug][Documents] Erreur lors de l'utilisation de console.php documents exportation outisde du dossier i-doit
[Bug][Admincenter] Pas de message si un add-on avec exigence 1.19 est installé dans une version pré 1.19
[Bug][Admincenter] Les licences d'objets assignés ne sont pas comptabilisées dans l'Admin Center
[Bug][Admincenter] La réinitialisation du mot de passe de l'Admin Center déclenche une exception si la licence est manquante depuis plus de 30 jours.
[Bug][CMDB-Explorer] CMDB-Explorer ne peut pas exporter le graphique
[Bug][CMDB-Explorer] Les relations sont affichées à l'envers dans un export GraphML de CMDB Explorer
[Bug][Templates] Le numéro d'inventaire automatique ne fonctionne pas pour le template
[Bug][Notifications] Les notifications d'expiration de licence ne fonctionnent pas correctement
[Bug][Application Redesign] Coupure de la liste IP lors de l'affectation d'un objet
[Bug][CMDB] Ne peut pas cacher certains attributs dans la visibilité des attributs
[Bug][Outils système] Chargement sans fin lors de la vérification de mod_rewrite dans l'aperçu du système
[Bug][System settings] Si le paramètre système Placeholder dans les listes est en dessous des caractères requis, l'ID de l'objet est affiché.
[Bug][Update] Autorisation de mise à jour via console.php impossible
[Bug][Update] Message d'erreur lors de l'édition de la configuration du type d'objet
[Bug][Édition en masse] Si une licence > clé de licence sont attribuées via le changement en masse la clé de licence est dupliquée
[Bug][Système d'autorisation] Les catégories de droite dans les objets avec un rôle attribué dans l'attribution de contact ne sont pas attribuées
[Bug][Custom categories] L'affichage de 2 rapports variables dans l'aperçu ne fonctionne pas
[Bug][Import] Si des objets avec des données Checkmk 2 Add-on sont exportés via XML et importés dans un mandant sans l'Add-on, l'importation s'interrompt.
[Bug][Monitoring] Le monitoring ne peut pas être désactivé avec l'attribut Active.
[Bug][API] L'entrée parent d'un champ dialog+ ne peut pas être identifiée par le titre
[Bug][API] Category Cabling Connectors > Le connecteur assigné est un tableau