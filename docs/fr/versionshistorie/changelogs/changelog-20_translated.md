<!-- TRANSLATED by md-translate -->
# Changelog 20

# Changelog 20

[Task][Code (Internal)]             Change versioning schema<br>
[Task][Code (Internal)]             Remove callables from smarty plugin parameters 'modify' and 'p_func'<br>
[Improvement][Application Redesign] Allow user to define the category field margin<br>
[Bug][CMDB]                         When I purge a Layer 3 network the remaining IP Addresses should be moved to the Global v4 Layer 3 Net<br>
[Bug][CMDB]                         Show referenced LDAP server in "LDAP" category<br>
[Bug][CMDB]                         IPv6 address range is cut off<br>
[Bug][CMDB]                         rack view vertical slots do not display parallel to each other anymore and the view is moved when to much are added<br>
[Bug][Custom categories]            Recommendation list for dates blocks the calendar<br>
[Bug][CMDB-Explorer]                Limit results in CMDB-Explorer<br>
[Bug][Lists]                        IDs in multi value custom categories are not sorted correctly<br>
[Bug][Lists]                        Memory size is not considered when filtering for capacity<br>
[Bug][Lists]                        Wrong Sorting of dates in object list<br>
[Bug][Lists]                        Overwriting the list configuration of a user does not work<br>
[Bug][Lists]                        Sorting of net attributes not possible with active filter<br>
[Bug][Categories]                   Active logging of last log in of a user prevents saving a new password<br>
[Bug][Categories]                   Category lists - Make all attributes selectable (part 1)<br>
[Bug][Categories]                   Objects from object types with specific category Persons cannot be added to Organization (Persons) category<br>
[Bug][Categories]                   Fields for date of creation and date of last change are not read only on overview page<br>
[Bug][Categories]                   The Location browser does not display the Location Tree when using Right System<br>
[Bug][Categories]                   If category operating system is used on overview page, a false new entry is created in this category<br>
[Bug][Categories]                   If category host address is used on overview page, a false new entry is created in this category<br>
[Bug][Categories]                   Attribute "Purchased at" has an assigned object when creating a new object<br>
[Bug][Categories]                   GEO coordinates cannot be inherited<br>
[Bug][JDisc]                        JDisc import duplicates layer-3 objects<br>
[Bug][JDisc]                        Can not create or save new JDisc Profile when Change CMDB-Status of objects to is set to Keep CMDB-Status<br>
[Bug][JDisc]                        JDisc: Set default value for cloud subscriptions Value alters JDisc profiles<br>
[Bug][Report-Manager]               Report Manager does not display the value costs of category contract assignment<br>
[Bug][Report-Manager]               Unable to create categories in reportmanager<br>
[Bug][Report-Manager]               A configured Report condition with a Operator like >= is not functional<br>
[Bug][Report-Manager]               Using Location attribute in Reports triggers SQL error<br>
[Bug][Report-Manager]               Referencing Assigned Objects from the Master object displays the master object<br>
[Bug][Report-Manager]               False results in the list of report results<br>
[Bug][Report-Manager]               Sorting by object type does not work<br>
[Bug][Report-Manager]               Result list for reports stops count at 1500 results<br>
[Bug][Report-Manager]               PHP error when assigning Groups directly to a notification and using PHP8<br>
[Bug][Report-Manager]               Using locations in the report manager as attributes ends in error<br>
[Bug][Code (Internal)]              Maintenance with Interval leads to error<br>
[Bug][Code (Internal)]              Error message after login "Tenantsettings are only available after logging in."<br>
[Bug][Code (Internal)]              Wrong breadcrumb URL for add-ons with URL rewrite<br>
[Bug][Code (Internal)]              HTTP 500 if the SQL timeout is too short<br>
[Bug][Code (Internal)]              Indexing attributes do not work with custom Add-on<br>
[Bug][Code (Internal)]              Import profile is not migrated after 1.18.2 update<br>
[Bug][CSV Import]                   Custom categories: Dialog+ entries with a dependency are not correctly imported and assigned<br>
[Bug][CSV Import]                   CSV Import does not assign a Person to a Custom Category Object Browser (single) field<br>
[Bug][CSV Import]                   If the attribute Login > Username is set for a person this person cannot log in with the stored password.<br>
[Bug][CSV Import]                   Importing content for Yes/No fields not possible with 0/1 via CSV import<br>
[Bug][CSV Import]                   CPU Frequency is 0 when importing via CSV<br>
[Bug][CSV Import]                   Memory>Capacity is not filled via CSV<br>
[Bug][LDAP]                         LDAP Sync assign groups to users which are not member of the group<br>
[Bug][API]                          'InstallDate' property can not be set in application category via API<br>
[Bug][API]                          API is ignoring Validation of Unique attributes<br>
[Bug][API]                          API category and attribute configuration does not load<br>
[Bug][Authorization system]         Category net is not displayed in overview despite correct rights<br>
[Bug][Objects]                      The root location is clickable in the location view<br>
[Bug][List editing]                 All version numbers are displayed in list edit<br>
[Bug][List editing]                 List edit not saving correctly when one object is selected<br>
[Bug][List editing]                 "purchased at" in Category accounting is filled with a default value in list edit<br>
[Bug][Search]                       Global search for inventory number does not work when using counter<br>
[Bug][Search]                       Global search with ' or % causes sql error<br>
[Bug][Templates]                    Disallow using category "Authorization config" for Templates<br>
[Bug][Logbook]                      When I purge a Layer 3 network no Logbook entries are created<br>
[Bug][Logbook]                      Value for yes/no fields in logbook is empty<br>
[Bug][New cabling logic]            Fiber connection is not deleted<br>
[Bug][System settings]              More Info for System Parameter > Keep status of imported objects?<br>
[Bug][Licence settings]             Changing the client name resets the assigned object licenses.<br>
~~[Improvement][Report-Manager]                             Report Manager: Additional column with export buttons in the report list~~<br>

[Tâche][Code (Interne)] Modifier le schéma de versioning<br>
[Task][Code (Internal)] Supprimer les appels des paramètres 'modify' et 'p_func'<br> du plugin smarty
[Improvement][Application Redesign] Permettre à l'utilisateur de définir la marge du champ de la catégorie<br>
[Bug][CMDB] Quand je purge un réseau de couche 3, les adresses IP restantes devraient être déplacées vers le réseau global v4 de couche 3<br>.
[Bug][CMDB] Afficher le serveur LDAP référencé dans la catégorie "LDAP"<br>
[Bug][CMDB] La plage d'adresses IPv6 est coupée<br>
[Bug][CMDB] Les slots verticaux de la vue rack ne s'affichent plus en parallèle et la vue est déplacée quand trop sont ajoutés<br>
[Bug][Custom categories] Liste de recommandations pour les dates de blocage du calendrier<br>
[Bug][CMDB-Explorer] Limite des résultats dans CMDB-Explorer<br>
[Bug][Lists] Les identifiants dans les catégories personnalisées multi-valeurs ne sont pas triés correctement<br>
[Bug][Lists] La taille de la mémoire n'est pas prise en compte lors du filtrage de la capacité<br>
[Bug][Lists] Mauvais tri des dates dans la liste d'objets<br>
[Bug][Lists] L'écrasement de la configuration de la liste d'un utilisateur ne fonctionne pas<br>
[Bug][Lists] Tri des attributs nets impossible avec filtre actif<br>
[Bug][Categories] L'enregistrement actif du dernier log d'un utilisateur empêche la sauvegarde d'un nouveau mot de passe<br>
[Bug][Categories] Listes de catégories - Rendre tous les attributs sélectionnables (partie 1)<br>
[Bug][Categories] Les objets des types d'objets avec une catégorie spécifique Personnes ne peuvent pas être ajoutés à la catégorie Organisation (Personnes)<br>.
[Bug][Categories] Les champs de date de création et de date de dernière modification ne sont pas lus uniquement sur la page d'aperçu<br>.
[Bug][Categories] Le navigateur de localisation n'affiche pas l'arbre de localisation lors de l'utilisation du système droit<br>.
[Bug][Categories] Si le système d'exploitation de la catégorie est utilisé sur la page d'aperçu, une fausse nouvelle entrée est créée dans cette catégorie<br>.
[Bug][Categories] Si l'adresse de l'hôte de la catégorie est utilisée sur la page d'aperçu, une fausse nouvelle entrée est créée dans cette catégorie<br>.
[Bug][Categories] L'attribut "Purchased at" a un objet assigné lors de la création d'un nouvel objet<br>.
[Bug][Categories] Les coordonnées GEO ne peuvent pas être héritées<br>
[Bug][JDisc] JDisc import duplique des objets de la couche 3<br>
[Bug][JDisc] Impossible de créer ou de sauvegarder un nouveau profil JDisc lors de la modification de l'état CMDB d'objets pour qu'il soit défini sur Conserver l'état CMDB<br>
[Bug][JDisc] JDisc : Définition de la valeur par défaut pour les abonnements au cloud Value altère les profils JDisc<br>
[Bug][Gestionnaire de rapports] Le gestionnaire de rapports n'affiche pas les coûts de valeur de l'affectation de contrat par catégorie<br>
[Bug][Report-Manager] Impossible de créer des catégories dans reportmanager<br>
[Bug][Reportmanager] Une condition de rapport configurée avec un opérateur tel que >= n'est pas fonctionnelle<br>.
[Bug][Reportmanager] L'utilisation de l'attribut Location dans les rapports déclenche une erreur SQL<br>.
[Bug][Report-Manager] Referencing Assigned Objects from the Master object displays the master object<br>
[Bug][Gestionnaire de rapports] Résultats incorrects dans la liste des résultats de rapports<br>
[Bug][Report-Manager] Le tri par type d'objet ne fonctionne pas<br>
[Bug][Report-Manager] La liste des résultats pour les rapports s'arrête de compter à 1500 résultats<br>
[Bug][Gestionnaire de rapports] Erreur PHP lors de l'affectation de groupes directement à une notification et en utilisant PHP8<br>
[Bug][Gestionnaire de rapports] L'utilisation de lieux dans le gestionnaire de rapports comme attributs se termine par une erreur<br>.
[Bug][Code (Internal)] La maintenance avec intervalle provoque une erreur<br>
[Bug][Code (Internal)] Message d'erreur après la connexion "Les réglages du locataire ne sont disponibles qu'après la connexion."<br>
[Bug][Code (Internal)] URL du breadcrumb erronée pour les add-ons avec réécriture de l'URL<br>
[Bug][Code (Internal)] HTTP 500 si le délai d'attente SQL est trop court<br>
[Bug][Code (Internal)] Les attributs d'indexation ne fonctionnent pas avec les add-ons personnalisés<br>
[Bug][Code (Internal)] Le profil d'importation n'est pas migré après la mise à jour 1.18.2<br>
[Bug][CSV Import] Custom categories : Dialog+ entries with a dependency are not correctly imported and assigned<br>
[Bug][CSV Import] CSV Import n'assigne pas une personne à un champ de navigateur d'objet de catégorie personnalisée (unique)<br>
[Bug][CSV Import] Si l'attribut Login > Username est défini pour une personne, cette personne ne peut pas se connecter avec le mot de passe enregistré.<br>
[Bug][CSV Import] Importation du contenu des champs Oui/Non impossible avec 0/1 via CSV import<br>
[Bug][CSV Import] Fréquence CPU est 0 lors de l'importation via CSV<br>
[Bug][CSV Import] Mémoire>La capacité n'est pas remplie via CSV<br>.
[Bug][LDAP] La synchronisation LDAP attribue des groupes à des utilisateurs qui ne sont pas membres du groupe<br>.
[Bug][API] La propriété 'InstallDate' ne peut pas être définie dans la catégorie d'application via l'API<br>.
[Bug][API] L'API ignore la validation des attributs uniques<br>
[Bug][API] La configuration de la catégorie et des attributs de l'API ne se charge pas<br>
[Bug][Authorization system] Le net de la catégorie n'est pas affiché dans la vue d'ensemble malgré des droits corrects<br>
[Bug][Objets] L'emplacement racine est cliquable dans la vue de l'emplacement<br>
[Bug][Édition de la liste] Tous les numéros de version sont affichés dans l'édition de la liste<br>.
[Bug][List editing] L'édition de liste ne s'enregistre pas correctement lorsqu'un objet est sélectionné<br>
[Bug][List editing] "purchased at" dans Category accounting est rempli avec une valeur par défaut dans list edit<br>
[Bug][Search] La recherche globale du numéro d'inventaire ne fonctionne pas lors de l'utilisation du compteur<br>
[Bug][Search] La recherche globale avec ' ou % provoque une erreur sql<br>
[Bug][Templates] Désactiver l'utilisation de la catégorie "Authorization config" pour les modèles<br>
[Bug][Logbook] Lorsque je purge un réseau de niveau 3, aucune entrée n'est créée dans le logbook<br>.
[Bug][Logbook] La valeur pour les champs oui/non dans le logbook est vide<br>
[Bug][New cabling logic] La connexion fibre n'est pas supprimée<br>
[Bug][System settings] More Info for System Parameter > Keep status of imported objects?<br>
[Bug][Licence settings] Changer le nom du client réinitialise les licences d'objets attribuées.<br>
~~[Improvement][Gestionnaire de rapports] Gestionnaire de rapports : colonne supplémentaire avec boutons d'exportation dans la liste des rapports~~<br>