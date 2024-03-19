<!-- TRANSLATED by md-translate -->
# Changelog 1.17.1

# Changelog 1.17.1

[Improvements][Categories]                        Always show horizontal scroll bar in the "Cabinets" category<br>
[Bug][JDisc]                                      JDisc: Import aborts with an error message when importing clusters<br>
[Bug][JDisc]                                      Category "JDisc custom attributes" not available on overview page<br>
[Bug][JDisc]                                      JDisc: If a JDisc profile is saved before it is completely loaded, these unloaded settings will be lost.<br>
[Bug][List editing]                               List editing: host address>net zone cannot be assigned<br>
[Bug][List editing]                               If an attribute of the category Drive is edited via list editing, the field "On device" is cleared.<br>
[Bug][List editing]                               Assigning a port in category host address not possible via list edit<br>
[Bug][List editing]                               In the list editing of the category entries of Local Mass Storage > Device, the Controller and Hardware RAID Group field cannot be set for all entries<br>
[Bug][Lists]                                      Error when using attributes from category "software assignment" in list view<br>
[Bug][Lists]                                      Attributes Target schema and Used databases for list view of Application -> Installations and Software assignment is missing<br>
[Bug][Lists]                                      Surname cannot be used for default sorting of person objects<br>
[Bug][Lists]                                      Organization > Master data: Website attribute is not a link object in the object list<br>
[Bug][Lists]                                      Filtering for description in object lists does not work with special characters<br>
[Bug][Lists]                                      Filtering on attributes of category DialogYesNoProperty generates SQL error and list view does not work anymore<br>
[Bug][Lists]                                      Attribute "Cabling>Assigned to connector" does not show all connections in the object list<br>
[Bug][Lists]                                      Workplace devices (object) assigned to Workplace is not displayed in the list view of Workplaces<br>
[Bug][Categories]                                 Attributes changed on the overview page are not saved (excl. General category)<br>
[Bug][Categories]                                 In the category License Assignment > License Keys of License Objects no objects are displayed<br>
[Bug][Categories]                                 The description is not saved in the source with despite positive message<br>
[Bug][Categories]                                 Deliver VRRP cluster with the category host address<br>
[Bug][Categories]                                 Missing focus in object browser<br>
[Bug][Categories]                                 Object ID of an organization assigned as a contact is displayed in the 'Assigned organization' field<br>
[Bug][Console-base Installation/Update/Licensing] Add a time variable for the command AnonymizePersonLastChange to Console.php<br>
[Bug][Logbook]                                    No logbook entries by creating an object via the Object browser<br>
[Bug][Logbook]                                    Uploading or deleting images in the "Images" category is not recorded in the logbook<br>
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome<br>
[Bug][Code (internal)]                            Object browser: When creating an object the same object type is not automatically preselected<br>
[Bug][CSV Import]                                 CSV Import: Import of operating system versions (and patchlevel) via the operating system category<br>
[Bug][CSV Import]                                 Importing a CMDB status also clears the value, even if empty values should be ignored<br>
[Bug][CSV Import]                                 CSV-Import: Attribute Net > Standardgateway is missing<br>
[Bug][CSV Import]                                 CSV import: attribute Host address > Default gateway for the network is missing<br>
[Bug][CSV Import]                                 CSV import creates wrong connections when objects have identical port names<br>
[Bug][CSV Import]                                 CSV Import: Dialog entries are created as unfinished<br>
[Bug][Report-Manager]                             False results in the list of report results<br>
[Bug][Report-Manager]                             Report Manager: Query for relationships always checks only the master object<br>
[Bug][Report-Manager]                             Report setting "Show objects with empty assignments?" creates incorrect output<br>
[Bug][Report-Manager]                             Report Manager: If in the condition an attribute with Like %...% is filtered which has a "" in the name, no result is displayed.<br>
[Bug][Report-Manager]                             URL from the Access category is assembled incorrectly in the report<br>
[Bug][Custom categories]                          If fields are moved when editing user-defined categories, they are displayed incorrectly<br>
[Bug][Custom categories]                          Special chars in custom category names can break the navigation<br>
[Bug][Custom categories]                          Javascript fields in custom categories is sanitized and becomes unusable<br>
[Bug][API]                                        Reports displayed via the API do not show consistent date formats<br>
[Bug][Events]                                     Disconnecting from a signal does not work<br>
[Bug][System settings]                            The setting "Display style for object browser objects" > "As list" leads to incorrect highlighting<br>
[Bug][CMDB]                                       Calculation of free IP addresses for super networks calculates incorrectly<br>
[Bug][Validation]                                 Validation for integer input is limited by PHP 32bit versions<br>
[Bug][LDAP]                                       Special characters in LDAP filters are not handled without errors<br>
[Bug][Import]                                     CSV import via Console empties user-defined categories<br>
[Bug][Import]                                     Servers or clients imported via Active Directory computers have assigned themselves as operating system<br>

[Improvements][Categories] Toujours afficher la barre de défilement horizontale dans la catégorie "Cabinets"<br>.
[Bug][JDisc] JDisc : Import aborts with an error message when importing clusters<br>
[Bug][JDisc] La catégorie "Attributs personnalisés JDisc" n'est pas disponible sur la page d'aperçu<br>.
[Bug][JDisc] JDisc : Si un profil JDisc est sauvegardé avant d'être complètement chargé, ces paramètres non chargés seront perdus.<br>
[Bug][List editing] List editing : host address>net zone cannot be assigned<br>.
[Bug][List editing] Si un attribut de la catégorie Drive est édité via l'édition de liste, le champ "Sur le périphérique" est effacé.<br>
[Bug][List editing] L'attribution d'un port dans la catégorie adresse de l'hôte n'est pas possible via list edit<br>.
[Bug][List editing] Dans l'édition de la liste des entrées de catégorie du Stockage de masse local > Périphérique, le champ Contrôleur et Groupe RAID matériel ne peut pas être défini pour toutes les entrées<br>.
[Bug][Lists] Erreur lors de l'utilisation des attributs de la catégorie "software assignment" dans l'affichage de la liste<br>.
[Bug][Lists] Les attributs du schéma cible et des bases de données utilisées pour l'affichage de la liste des applications -> installations et affectation des logiciels sont manquants<br>.
[Bug][Lists] Le surnom ne peut pas être utilisé pour le tri par défaut des objets de la personne<br>
[Bug][Lists] Organisation > Données principales : L'attribut site web n'est pas un objet lien dans la liste des objets<br>.
[Bug][Lists] Le filtrage de la description dans les listes d'objets ne fonctionne pas avec les caractères spéciaux<br>.
[Bug][Lists] Le filtrage sur les attributs de la catégorie DialogYesNoProperty génère une erreur SQL et l'affichage de la liste ne fonctionne plus<br>.
[Bug][Lists] L'attribut "Cabling>Assigned to connector" ne montre pas toutes les connexions dans la liste des objets<br>.
[Bug][Lists] Les périphériques (objet) affectés à Workplace ne sont pas affichés dans la vue liste de Workplaces<br>.
[Bug][Categories] Les attributs modifiés sur la page d'aperçu ne sont pas sauvegardés (à l'exception de General category)<br>
[Bug][Categories] Dans la catégorie Affectation des licences > Clés de licence des objets de licence, aucun objet n'est affiché<br>.
[Bug][Categories] La description n'est pas sauvegardée dans la source avec un message positif<br>.
[Bug][Categories] Deliver VRRP cluster with the category host address<br>
[Bug][Categories] Focus manquant dans le navigateur d'objets<br>
[Bug][Categories] L'ID d'objet d'une organisation assignée comme contact est affiché dans le champ 'Organisation assignée'<br>.
[Bug][Console-base Installation/Update/Licensing] Ajout d'une variable temporelle pour la commande AnonymizePersonLastChange dans Console.php<br>
[Bug][Logbook] Pas d'entrées dans le logbook en créant un objet via le navigateur d'objets<br>.
[Bug][Logbook] Le téléchargement ou la suppression d'images dans la catégorie "Images" n'est pas enregistré dans le logbook<br>.
[Bug][Code (interne)] Les boutons Check et Show ne peuvent plus être cliqués dans les rapports lors de l'utilisation de Chrome<br>.
[Bug][Code (interne)] Navigateur d'objets : Lors de la création d'un objet, le même type d'objet n'est pas automatiquement présélectionné<br>.
[Bug][CSV Import] CSV Import : Importation des versions du système d'exploitation (et du niveau de patch) via la catégorie système d'exploitation<br>.
[Bug][CSV Import] L'importation d'un statut CMDB nettoie également la valeur, même si les valeurs vides devraient être ignorées<br>.
[Bug][CSV Import] CSV-Import : Attribut Net > Passerelle par défaut est manquant<br>
[Bug][CSV Import] CSV import : attribut Host address > la passerelle par défaut pour le réseau est manquante<br>
[Bug][CSV Import] CSV import crée des connexions erronées lorsque des objets ont des noms de port identiques<br>
[Bug][CSV Import] CSV Import : les entrées de dialogue sont créées comme non finies<br>
[Bug][Gestionnaire de rapports] Résultats erronés dans la liste des résultats des rapports<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : la requête pour les relations ne vérifie toujours que l'objet maître<br>
[Bug][Report Manager] Le paramètre de rapport "Afficher les objets avec des affectations vides ?" crée une sortie incorrecte<br>.
[Bug][Report Manager] Report Manager : Si dans la condition un attribut avec Like %...% est filtré qui a un "" dans le nom, aucun résultat n'est affiché.<br>
[Bug][Gestionnaire de rapports] L'URL de la catégorie d'accès est incorrectement assemblé dans le rapport<br>.
[Bug][Custom categories] Si des champs sont déplacés lors de l'édition de catégories définies par l'utilisateur, ils sont affichés de manière incorrecte<br>.
[Bug][Custom categories] Les caractères spéciaux dans les noms de catégories personnalisées peuvent casser la navigation<br>.
[Bug][Custom categories] Les champs Javascript dans les catégories personnalisées sont aseptisés et deviennent inutilisables<br>.
[Bug][API] Les rapports affichés via l'API n'affichent pas les formats de date cohérents<br>.
[Bug][Events] La déconnexion d'un signal ne fonctionne pas<br>.
[Bug][System settings] Le paramètre "Display style for object browser objects" > "As list" entraîne une mise en évidence incorrecte<br>.
[Bug][CMDB] Le calcul des adresses IP libres pour les super réseaux est incorrect<br>.
[Bug][Validation] La validation pour la saisie d'entier est limitée par les versions PHP 32bit<br>.
[Bug][LDAP] Les caractères spéciaux dans les filtres LDAP ne sont pas gérés sans erreurs<br>.
[Bug][Import] CSV import via Console emporte des catégories définies par l'utilisateur<br>
[Bug][Import] Serveurs ou clients importés via Active Directory Les ordinateurs se sont attribués le système d'exploitation<br>.