<!-- TRANSLATED by md-translate -->
# Changelog 1.18.1

# Changelog 1.18.1

[Improvement][Code (internal)]                    Allow Add-on Bundling<br>
[Bug][Code (internal)]                            Existing connections from the category Cabling cannot be reconnected if the entry is selected and edited via the checkbox.<br>
[Bug][Code (internal)]                            The HTML purifier is not turned off by the Sanitize input data setting<br>
[Bug][Code (internal)]                            Links are destroyed in the Report Manager<br>
[Bug][Code (internal)]                            Install i-doit 1.18 via install.sh<br>
[Bug][Code (internal)]                            Fix security issues in Admin-Center<br>
[Bug][Code (internal)]                            Fix security issues in Admin-Center<br>
[Bug][Code (internal)]                            German LC constant was forgotten<br>
[Bug][Code (internal)]                            Rackview - vertical slots move horizontal slots<br>
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome<br>
[Bug][LDAP]                                       Matching does not work if the field title is not present in the user<br>
[Bug][LDAP]                                       Due to the ldap-sync group memberships are not deleted when the person is archived<br>
[Bug][LDAP]                                       Archived contact assignment is restored by LDAP sync<br>
[Bug][LDAP]                                       Tenant change of ldpa users forces relogging<br>
[Bug][CSV Import]                                 CSV import should remember if a category has already been emptied for overwrite mode<br>
[Bug][CSV Import]                                 Empty values in csv import are not transfered when multivalue-category is set on "Row"<br>
[Bug][CSV Import]                                 Single row CSV-Imports clears the multi-value categories<br>
[Bug][Categories]                                 In the Services - Service Type category, the dialog field is referenced incorrectly<br>
[Bug][Categories]                                 Automatic inventory number has no effect, if a default template is used<br>
[Bug][Categories]                                 Search in object browser also finds objects from object types that are normally not available for assignment<br>
[Bug][Categories]                                 Show sub-categories of the specific categories in the overview page<br>
[Bug][Categories]                                 Focus in object browser not always on filter field<br>
[Bug][Categories]                                 Add "Cores" attribute to the CPU category list<br>
[Bug][Custom categories]                          Custom categories can not be saved<br>
[Bug][Custom categories]                          Custom categories are not saved<br>
[Bug][Custom categories]                          The default value of Yes/No fields is also displayed in the view mode.<br>
[Bug][Authorization system]                       Location and all physically assigned objects below is summarized<br>
[Bug][CMDB]                                       Location view does not open automatically for logical location objects<br>
[Bug][CMDB]                                       Remove archive and delete button for relationships<br>
[Bug][CMDB]                                       HTTP 500 Error when saving changes<br>
[Bug][CMDB]                                       Values in Dialog+ Multi-Value fields are not saved<br>
[Bug][CMDB]                                       Switch chassis names are not displayed in the rack view when slots are created<br>
[Bug][CMDB]                                       Search for "." + "String" finds all objects<br>
[Bug][Import]                                     CSV Import: Contact assignments are created for archived persons in the normal state<br>
[Bug][Mass editing]                               Mass change - license assignment/application is not set in software assignment<br>
[Bug][Mass editing]                               Mass change - Multi-Value categories with add/remove are duplicated<br>
[Bug][JDisc]                                      JDisc Import creates empty logbook entries<br>
[Bug][JDisc]                                      The search index is not re-indexed after the JDisc import<br>
[Bug][JDisc]                                      JDisc custom attributes Running config, Show Version and Startup config create multiple entries<br>
[Bug][List editing]                               List edit - Incorrect display when using tab<br>
[Bug][List editing]                               Listedit: Dialogfields are not always reloaded when there is a dependency to an objectbrowser<br>
[Bug][Report-Manager]                             Missing lines when exporting a report in CSV format<br>
[Bug][Report-Manager]                             Regex in report manager causes errors and ceates wrong sql query<br>
[Bug][Report-Manager]                             Report Manager - Objekt types with the same name are only shown once<br>
[Bug][Report-Manager]                             Report Manager - Wrong SQL query for attribute contact and operating system<br>
[Bug][Report-Manager]                             "Patch level" not available for selection in report manager<br>
[Bug][Lists]                                      Error message is displayed in the object list if the "Role (Person group memberships)" attribute is added<br>
[Bug][Lists]                                      In the column Operating system > Version is not displayed with patch level in the list view of objects<br>
[Bug][Lists]                                      At Contracts the object ID is displayed behind objects in the list view in the Assigned objects column<br>
[Bug][Lists]                                      False display in "configure listview" for multi value categories<br>
[Bug][Object type configuration]                  Automatic inventory number (counter) does not work correctly<br>
[Bug][OCS]                                        OCS-Import creates invalid layer-3-net<br>
[Bug][QR-Codes]                                   QR-Code Layout 3 does not work<br>
[Bug][Notifications]                              Notifications of license expirations are not shown correctly, when template is changed<br>
[Bug][CMDB settings]                              Object browser files > Assigned objects not available<br>
[Bug][Console-base Installation/Update/Licensing] Licensed add-ons are displayed as unlicensed via the Console.php command addon-list<br>
[Bug][Update]                                     Ports cannot be created due to duplicate foreign key<br>

[Improvement][Code (internal)] Allow Add-on Bundling<br>
[Bug][Code (interne)] Les connexions existantes de la catégorie Câblage ne peuvent pas être reconnectées si l'entrée est sélectionnée et éditée via la case à cocher.<br>
[Bug][Code (interne)] Le purificateur HTML n'est pas désactivé par le paramètre Sanitize input data<br>.
[Bug][Code (interne)] Les liens sont détruits dans le gestionnaire de rapports<br>.
[Bug][Code (internal)] Installer i-doit 1.18 via install.sh<br>
[Bug][Code (internal)] Correction de problèmes de sécurité dans Admin-Center<br>
[Bug][Code (internal)] Corriger les problèmes de sécurité dans Admin-Center<br>
[Bug][Code (internal)] La constante LC en français a été oubliée<br>
[Bug][Code (internal)] Rackview - les slots verticaux déplacent les slots horizontaux<br>
[Bug][Code (internal)] Les boutons Check et Show ne peuvent plus être cliqués dans les rapports lors de l'utilisation de Chrome<br>.
[Bug][LDAP] La correspondance ne fonctionne pas si le titre du champ n'est pas présent dans l'utilisateur<br>
[Bug][LDAP] A cause de la synchronisation ldap, les membres du groupe ne sont pas supprimés lorsque la personne est archivée<br>.
[Bug][LDAP] L'association de contact archivée est restaurée par LDAP sync<br>
[Bug][LDAP] Changement de locataire des utilisateurs ldpa forçant le relogging<br>
[Bug][CSV Import] CSV import doit se souvenir si une catégorie a déjà été creusée pour le mode écrasement<br>
[Bug][CSV Import] Les valeurs vides dans l'importation csv ne sont pas transférées lorsque la catégorie multivalue est réglée sur "Row"<br>.
[Bug][CSV Import] Les importations CSV à une seule ligne nettoient les catégories multi-values<br>
[Bug][Categories] Dans la catégorie Services - Type de service, le champ de dialogue est mal référencé<br>.
[Bug][Categories] Le numéro d'inventaire automatique n'a pas d'effet si un modèle par défaut est utilisé<br>.
[Bug][Categories] La recherche dans le navigateur d'objets trouve également des objets de types d'objets qui ne sont normalement pas disponibles pour l'attribution<br>.
[Bug][Categories] Afficher les sous-catégories des catégories spécifiques dans la page d'aperçu<br>.
[Bug][Categories] Focus dans le navigateur d'objets pas toujours sur le champ de filtre<br>
[Bug][Categories] Ajouter l'attribut "Cores" à la liste des catégories de l'UC<br>
[Bug][Custom categories] Les catégories personnalisées ne peuvent pas être sauvegardées<br>
[Bug][Custom categories] Les catégories personnalisées ne sont pas sauvegardées<br>
[Bug][Custom categories] La valeur par défaut des champs Oui/Non est également affichée en mode affichage.<br>
[Bug][Authorization system] La localisation et tous les objets physiquement assignés ci-dessous sont résumés<br>
[Bug][CMDB] La vue de localisation ne s'ouvre pas automatiquement pour les objets de localisation logique<br>.
[Bug][CMDB] Suppression de l'archive et du bouton de suppression des relations<br>.
[Bug][CMDB] Erreur HTTP 500 lors de la sauvegarde des changements<br>
[Bug][CMDB] Les valeurs dans les champs Dialog+ Multi-Value ne sont pas sauvegardées<br>
[Bug][CMDB] Les noms des châssis de commutation ne sont pas affichés dans la vue du rack lors de la création des slots<br>.
[Bug][CMDB] La recherche de "." + "String" trouve tous les objets<br>.
[Bug][Import] CSV Import : Les affectations de contact sont créées pour les personnes archivées dans l'état normal<br>
[Bug][Mass editing] Changement en masse - l'assignation de licence/application n'est pas définie dans l'assignation logicielle<br>
[Bug][Mass editing] Mass change - Les catégories multi-valeurs avec add/remove sont dupliquées<br>
[Bug][JDisc] JDisc Import crée des entrées de logbook vides<br>
[Bug][JDisc] L'index de recherche n'est pas ré-indexé après l'import JDisc<br>
[Bug][JDisc] JDisc custom attributes Running config, Show Version and Startup config créent de multiples entrées<br>
[Bug][List editing] List edit - Affichage incorrect lors de l'utilisation de l'onglet<br>
[Bug][List editing] Listedit : les champs de dialogue ne sont pas toujours rechargés lorsqu'il y a une dépendance à un navigateur d'objets<br>
[Bug][Gestionnaire de rapports] Lignes manquantes lors de l'exportation d'un rapport au format CSV<br>
[Bug][Gestionnaire de rapports] Regex dans le gestionnaire de rapports provoque des erreurs et génère une requête sql incorrecte<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports - Les types d'objets avec le même nom ne sont affichés qu'une seule fois<br>
[Bug][Report-Manager] Report Manager - Mauvaise requête SQL pour contact d'attribut et système d'exploitation<br>
[Bug][Gestionnaire de rapports] "Patch level" non disponible pour la sélection dans le gestionnaire de rapports<br>
[Bug][Lists] Un message d'erreur s'affiche dans la liste des objets lorsque l'attribut "Rôle (membres du groupe de personnes)" est ajouté<br>
[Bug][Lists] Dans la colonne Système d'exploitation > Version n'est pas affichée avec le niveau de patch dans la vue liste des objets<br>.
[Bug][Lists] Dans les contrats, l'ID de l'objet est affiché derrière les objets dans la vue liste dans la colonne Objets assignés<br>.
[Bug][Lists] Affichage incorrect dans "configure listview" pour les catégories multi-valeurs<br>
[Bug][Configuration du type d'objet] Le compteur automatique d'inventaire ne fonctionne pas correctement<br>.
[Bug][OCS] L'importation OCS crée un layer-3-net invalide<br>
[Bug][QR-Codes] La mise en page du code QR 3 ne fonctionne pas<br>
[Bug][Notifications] Les notifications d'expirations de licences ne s'affichent pas correctement lorsque le template est modifié<br>
[Bug][CMDB settings] Object browser files > Assigned objects not available<br>
[Bug][Console-base Installation/Update/Licensing] Les add-ons sous licence sont affichés comme non autorisés via la commande Console.php addon-list<br>
[Bug][Update] Les ports ne peuvent pas être créés à cause d'une clé étrangère dupliquée<br>