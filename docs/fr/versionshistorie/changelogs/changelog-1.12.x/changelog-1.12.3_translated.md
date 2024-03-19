<!-- TRANSLATED by md-translate -->
# Changelog 1.12.3

# Changelog 1.12.3

[Improvement][Admincenter] Create tenants without root MySQL user<br>
[Improvement][Code (internal)] Notification popups do not vanish on click<br>
[Improvement][System settings] Option to disable object count in object browser<br>
[Bug][Categories] Duplicates when saving entries<br>
[Bug][Categories] Existing content of category "files" can not be edited an saved<br>
[Bug][Categories] Subcategory "RAID array/Device" Selection of a controller<br>
[Bug][Categories] The "Next possible cancellation date" attribute of the "Contract" category will not be recalculated<br>
[Bug][Categories] IP Helper addresses cannot be created via the overview page<br>
[Bug][Categories] Layer 3 nets cannot be duplicated correctly<br>
[Bug][Categories] Default gateway missing in IPv6 networks (Layer 3)<br>
[Bug][Categories] Sort Attribute by numeric values<br>
[Bug][Categories] Saving the object list resets the column width<br>
[Bug][Categories] Removed wrong button "New" in category "service logbook"<br>
[Bug][Categories] SQL error "foreign key constraint failes" when assigning a headquarters to an organization<br>
[Bug][Categories] All Service Managers are displayed in the overview page of the Service Categories<br>
[Bug][Categories] Find out and fix wrong selects in dialog properties<br>
[Bug][Categories] The category "assigned objects" does not behave like a multi-value category.<br>
[Bug][LDAP] Duplicate assignment of person to person group via LDAP<br>
[Bug][LDAP] LDAP Login via HOTP<br>
[Bug][LDAP] Login with LDAPS not possible<br>
[Bug][LDAP] No LDAP authentication possible after update<br>
[Bug][Lists] Pagination returns an error starting from page 3 or 4<br>
[Bug][Lists] Custom Show categories "MultiValue" in category lists<br>
[Bug][Lists] Filtering of drop down fields in object lists not possible<br>
[Bug][Lists] Subcategory "RAID Array" incorrect calculation of capacity<br>
[Bug][Lists] Objekt-list configuration table does not contain any values<br>
[Bug][JDisc] The loading icon does not disappear in Firefox after a scan over the JDisc Discovery category has been completed.<br>
[Bug][System settings] LDAP Config in the client settings<br>
[Bug][System settings] Passwords can not be decrypted<br>
[Bug][System settings] Incorrect forwarding after editing in Dialog+ Admin<br>
[Bug][System settings] The setting "logbook.changes.multivalue-threshold" affects all tenants<br>
[Bug][i-doit Licensing 2.0] Buyers license loses its validity<br>
[Bug][i-doit Licensing 2.0] License error after update because of add-on licensing logic<br>
[Bug][i-doit Licensing 2.0] Add-On icons are not displayed correctly in licence overview<br>
[Bug][Licence settings] i-doit can be used without licensing<br>
[Bug][Licence settings] Validation dates of licenses always equal the current time after updating i-doit<br>
[Bug][Update] Update of i-doit Open only possible with errors<br>
[Bug][Print view] Wrong data in print view of category "accounting"<br>
[Bug][Print view] Print view incomplete in the category "contact assignment"<br>
[Bug][Print view] Calculation of the guarantee in the print preview is not correct<br>
[Bug][Objects] Can not duplicate the "People" object type<br>
[Bug][Mass editing] Not possible to edit templates for mass changes<br>
[Bug][Code (internal)] Object view is cleared<br>
[Bug][List editing] No list editing possible if Global Validation is set up.<br>
[Bug][List editing] List editing of inputs or outputs not possible with ##COUNTER##<br>
[Bug][List editing] List edit does not consider person, who made the last change to show in category "General"<br>
[Bug][List editing] Release the link "Purchased from:" in the Accounting category.<br>
[Bug][List editing] List-edit: Sub-categories of the category "Layer 2 network" are missing<br>
[Bug][List editing] List editing of object screens not possible<br>
[Bug][List editing] List editing of category rack / cabinet not possible<br>
[Bug][List editing] Editing service assignment via list edit throws error<br>
[Bug][List editing] List editing of user-defined Multi-Value categories<br>
[Bug][List editing] Category "Workplace components" can not be used via the list edit<br>
[Bug][List editing] Category "Assigned workplaces" can not be used via listedit<br>
[Bug][List editing] List Editing of Date Fields of User Defined Categories<br>
[Bug][OCS] OCS Import: Incorrect assignment of networks in single-IP networks<br>
[Bug][Search] Inconsistent indexing for custom categories<br>
[Bug][License installation (i-doit)] Wrong values for licence duration and end date in licence widget<br>
[Bug][Report-Manager] Specific category "Middleware" not available for output in report manager<br>
[Bug][Report-Manager] Process report-based notifications with field placeholders in report<br>
[Bug][Report-Manager] Error when using a placeholder for the current date<br>
[Bug][Report-Manager] Cable connections are not completely displayed in the report (Connection)<br>
[Bug][Report-Manager] Lengths in reports are converted<br>
[Bug][Report-Manager] Self-created SQL reports are not executed if one or more spaces are at the end of the query.<br>
[Bug][API] Don't link empty organization to person<br>
[Bug][API] cmdb.category.create and .update handle unit attributes differently when those are not explicitly set<br>
[Bug][API] Fix to link IP address with network port via API<br>
[Bug][Templates] Default Template is not used for objects, created via object browser<br>
[Bug][Installation] Grant DB user remote access to databases if external DBMS is used<br>
[Bug][CMDB] Contact assignments are lost during duplication<br>
[Bug][CMDB] Wrong display of netto capacity of raid device under local storage<br>
[Bug][CMDB] Filtering by empty string leads to error in object browser configuration<br>
[Bug][CMDB] Broken icon for "object group"<br>
[Bug][CMDB] License Widget displays no or incorrect data<br>
[Bug][Dashboard] Widget: Appearance of many bookmarks leads to a corrupt view<br>
[Bug][CSV Import] CSV import object matching via console import not possible<br>
[Bug][CSV Import] Not neccessary option to import length unit in csv import<br>
[Bug][Export] CSV export displays capacity of devices incorrectly<br>
[Bug][Relations] Display of wrong type in CMDB-Explorer<br>
[Bug][Relations] Relationship cannot be established<br>
[Bug][Admincenter] Creating a new tenant also creates a duplicated MySQL user with identical name<br>
[Bug][Admincenter] Delete clients with the authorized user<br>
[Bug][CMDB-Explorer] CMDB explorer shows relations from entries in custom categories which are archived or deleted<br>
[Bug][Authorization system] Missing sorting in suggestion area of selection for persons/person groups in rights configuration<br>
[Bug][Authorization system] Object Browser ignores the rights of the user<br>

[Amélioration][Centre d'administration] Créer des locataires sans utilisateur MySQL root<br>
[Improvement][Code (interne)] Les popups de notification ne disparaissent pas au clic<br>.
[Improvement][System settings] Option pour désactiver le comptage d'objets dans le navigateur d'objets<br>
[Bug][Categories] Duplications lors de la sauvegarde des entrées<br>
[Bug][Categories] Le contenu existant de la catégorie "fichiers" ne peut pas être édité ou sauvegardé<br>.
[Bug][Categories] Sous-catégorie "RAID array/Device" Sélection d'un contrôleur<br>
[Bug][Categories] L'attribut "Prochaine date d'annulation possible" de la catégorie "Contrat" n'est pas recalculé<br>.
[Bug][Categories] Les adresses IP Helper ne peuvent pas être créées via la page d'aperçu<br>.
[Bug][Categories] Les réseaux de couche 3 ne peuvent pas être dupliqués correctement<br>
[Bug][Categories] Passerelle par défaut manquante dans les réseaux IPv6 (couche 3)<br>
[Bug][Categories] Trier les attributs par valeurs numériques<br>
[Bug][Categories] Sauver la liste des objets réinitialise la largeur de la colonne<br>
[Bug][Categories] Suppression du mauvais bouton "New" dans la catégorie "service logbook"<br>
[Bug][Categories] Erreur SQL "foreign key constraint fails" lors de l'attribution d'un siège social à une organisation<br>
[Bug][Categories] Tous les gestionnaires de services sont affichés dans la page de présentation des catégories de services<br>.
[Bug][Categories] Découvrir et corriger les mauvaises sélections dans les propriétés de dialogue<br>.
[Bug][Categories] La catégorie "objets assignés" ne se comporte pas comme une catégorie multi-valeurs.<br>
[Bug][LDAP] Duplicate assignment of person to person group via LDAP<br>
[Bug][LDAP] Connexion LDAP via HOTP<br>
[Bug][LDAP] Connexion avec LDAPS impossible<br>
[Bug][LDAP] Pas d'authentification LDAP possible après la mise à jour<br>
[Bug][Lists] La pagination renvoie une erreur en commençant à la page 3 ou 4<br>
[Bug][Lists] Affichage personnalisé des catégories "MultiValue" dans les listes de catégories<br>.
[Bug][Lists] Filtrage des champs déroulants dans les listes d'objets impossible<br>
[Bug][Lists] Sous-catégorie "RAID Array" calcul incorrect de la capacité<br>
[Bug][Lists] La table de configuration de la liste d'objets ne contient aucune valeur<br>
[Bug][JDisc] L'icône de chargement ne disparaît pas dans Firefox après qu'une analyse sur la catégorie de découverte JDisc a été effectuée.<br>
[Bug][System settings] Config LDAP dans les paramètres du client<br>
[Bug][System settings] Les mots de passe ne peuvent pas être décryptés<br>
[Bug][System settings] Incorrect forwarding after editing in Dialog+ Admin<br>
[Bug][System settings] Le paramètre "logbook.changes.multivalue-threshold" affecte tous les locataires<br>
[Bug][i-doit Licensing 2.0] La licence de l'acheteur perd sa validité<br>
[Bug][i-doit Licensing 2.0] Erreur de licence après la mise à jour à cause de la logique de licence add-on<br>
[Bug][i-doit Licensing 2.0] Les icônes des modules complémentaires ne s'affichent pas correctement dans l'aperçu de la licence<br>
[Bug][Licence settings] i-doit peut être utilisé sans licence<br>
[Bug][Licence settings] Les dates de validation des licences sont toujours égales à l'heure actuelle après la mise à jour d'i-doit<br>.
[Bug][Update] Mise à jour de i-doit Open uniquement possible avec des erreurs<br>
[Bug][Print view] Données erronées dans la vue d'impression de la catégorie "comptabilité"<br>
[Bug][Print view] Print view incomplet dans la catégorie "contact assignment"<br>
[Bug][Print view] Calcul incorrect de la garantie dans l'aperçu avant impression<br>.
[Bug][Objects] Impossible de dupliquer le type d'objet "People"<br>
[Bug][Édition en masse] Impossible d'éditer les templates pour des changements en masse<br>
[Bug][Code (interne)] La vue de l'objet est effacée<br>
[Bug][List editing] Pas d'édition de liste possible si la validation globale est activée.<br>
[Bug][List editing] L'édition de listes d'entrées ou de sorties n'est pas possible avec ##COUNTER##<br>.
[Bug][List editing] L'édition de liste ne tient pas compte de la personne qui a fait le dernier changement à afficher dans la catégorie "General"<br>.
[Bug][List editing] Suppression du lien "Acheté de :" dans la catégorie Comptabilité.<br>
[Bug][List editing] List-edit : les sous-catégories de la catégorie "Réseau de couche 2" sont manquantes<br>.
[Bug][List editing] L'édition de liste des écrans d'objets n'est pas possible<br>
[Bug][List editing] List editing of category rack / cabinet not possible<br>
[Bug][List editing] L'édition de l'affectation de service via l'édition de liste provoque une erreur<br>
[Bug][List editing] Édition de listes de catégories multi-valeurs définies par l'utilisateur<br>
[Bug][List editing] Impossible d'utiliser la catégorie "Workplace components" via l'édition de liste<br>
[Bug][List editing] La catégorie "Assigned workplaces" ne peut pas être utilisée via listedit<br>
[Bug][List editing] Édition de la liste des champs de date des catégories définies par l'utilisateur<br>
[Bug][OCS] OCS Import : Incorrect assignment of networks in single-IP networks<br>
[Bug][Search] Indexation incohérente pour les catégories personnalisées<br>
[Bug][License installation (i-doit)] Valeurs incorrectes pour la durée de la licence et la date de fin dans le widget de licence<br>
[Bug][Gestionnaire de rapports] Catégorie spécifique "Middleware" non disponible pour la sortie dans le gestionnaire de rapports<br>
[Bug][Gestionnaire de rapports] Processus de notification basé sur le rapport avec des marqueurs de champ dans le rapport<br>
[Bug][Report-Manager] Erreur lors de l'utilisation d'un marqueur de place pour la date actuelle<br>
[Bug][Report-Manager] Les connexions de câbles ne sont pas entièrement affichées dans le rapport (Connection)<br>
[Bug][Report-Manager] Les longueurs dans les rapports sont converties<br>
[Bug][Gestionnaire de rapports] Les rapports SQL auto-créés ne sont pas exécutés si un ou plusieurs espaces sont présents à la fin de la requête.<br>
[Bug][API] Ne pas lier une organisation vide à une personne<br>
[Bug][API] cmdb.category.create et .update gèrent différemment les attributs d'unité lorsqu'ils ne sont pas explicitement définis<br>.
[Bug][API] Correction de la liaison de l'adresse IP avec le port réseau via l'API<br>
[Bug][Templates] Le modèle par défaut n'est pas utilisé pour les objets créés via le navigateur d'objets<br>.
[Bug][Installation] Attribuer à l'utilisateur DB l'accès à distance aux bases de données si un SGBD externe est utilisé<br>
[Bug][CMDB] Les affectations de contacts sont perdues lors de la duplication<br>
[Bug][CMDB] Affichage incorrect de la capacité nette du périphérique raid sous stockage local<br>
[Bug][CMDB] Le filtrage par chaîne vide provoque une erreur dans la configuration du navigateur d'objets<br>
[Bug][CMDB] Broken icon for "object group"<br>
[Bug][CMDB] Le widget des licences n'affiche pas de données ou affiche des données incorrectes<br>
[Bug][Dashboard] Widget : L'apparition de nombreux signets entraîne une vue corrompue<br>
[Bug][CSV Import] CSV import object matching via console import not possible<br>
[Bug][CSV Import] Pas d'option nécessaire pour importer l'unité de longueur dans csv import<br>
[Bug][Export] CSV export displays capacity of devices incorrectly<br>
[Bug][Relations] Affichage d'un mauvais type dans l'explorateur CMDB<br>
[Bug][Relations] La relation ne peut pas être établie<br>
[Bug][Admincenter] La création d'un nouveau locataire crée également un utilisateur MySQL dupliqué avec un nom identique<br>
[Bug][Admincenter] Suppression des clients avec l'utilisateur autorisé<br>
[Bug][CMDB-Explorer] CMDB explorer montre les relations des entrées dans les catégories personnalisées qui sont archivées ou supprimées<br>.
[Bug][Authorization system] Absence de tri dans la zone de suggestion de sélection pour les personnes/groupes de personnes dans la configuration des droits<br>.
[Bug][Authorization system] Le navigateur d'objets ignore les droits de l'utilisateur<br>