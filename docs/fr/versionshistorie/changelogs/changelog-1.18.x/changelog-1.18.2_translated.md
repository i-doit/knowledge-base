<!-- TRANSLATED by md-translate -->
# Changelog 1.18.2

# Changelog 1.18.2

[Task][Code (internal)]                           Change all database tables to "Row Format: Dynamic" in fresh installations<br>
[Improvement][CSV Import]                         The object browser of a custom category should be able to use a special assignment via the model > serial number<br>
[Improvement][Logbook]                            Anonymize logbook entries<br>
[Improvement][Authorization system]               Right assignment based on contact assignment<br>
[Bug][Categories]                                 The alarm level cannot be selected in logbook entries<br>
[Bug][Categories]                                 The attribute "Last revision" of the documents category should be displayed in the object list<br>
[Bug][Categories]                                 IPv6 address is shown as available although it is already in use<br>
[Bug][Categories]                                 Default gateway for the net cannot be set in the host address category<br>
[Bug][Categories]                                 MAC-addresses using seven bytes do not apply to the validation in i-doit and cannot be saved<br>
[Bug][Categories]                                 Stack members not displayed in list view configuration<br>
[Bug][JDisc]                                      JDisc Discovery: Identification of the device by FQDN does not work<br>
[Bug][JDisc]                                      JDisc Import - Rename Interfaces<br>
[Bug][JDisc]                                      Debugging for JDisc Import logs does not work (-vvv)<br>
[Bug][JDisc]                                      Matching of Switch Stacks from JDisc in i-doit<br>
[Bug][API]                                        Can't assign a Person via API request<br>
[Bug][API]                                        Create custom dialog+ entries with relation<br>
[Bug][Notifications]                              Notifications based on roles do not send E-Mails to persons, if a group is assigned with the role<br>
[Bug][Notifications]                              Additional placeholders for the e-mail templates of the notifications<br>
[Bug][Notifications]                              Notifications - Expiration of a certificate period does not work<br>
[Bug][Report-Manager]                             Report Manager: Query for relationships always checks only the master object<br>
[Bug][Report-Manager]                             Older reports that contain an object id or placeholder do not show conditions<br>
[Bug][Report-Manager]                             Operators are missing in a report that is supposed to display free memory (drive)<br>
[Bug][Report-Manager]                             Report Manager - Attribute Of/To causes sql error<br>
[Bug][CMDB settings]                              Object browser configuration for "Layer-2 Net assignment" from category "Port" is missing<br>
[Bug][H-Inventory]                                H-Inventory-Import: Software Assignment relationships are not removed correctly<br>
[Bug][Code (internal)]                            SyncMerger does not work if properties were touched by "mod.cmdb.extendProperties"<br>
[Bug][Code (internal)]                            Relation type property is missing in Reports<br>
[Bug][Code (internal)]                            Login with admin user overwrites credentials of other user<br>
[Bug][Custom categories]                          Custom category horizontal Line requires title<br>
[Bug][Custom categories]                          Info icon for horizontale line is not displayed correctly<br>
[Bug][CMDB]                                       Software assigment - Field "Installed at" adds time when deleting<br>
[Bug][CMDB]                                       Dynamic reports not possible for varaiable reports with placeholder<br>
[Bug][CMDB]                                       Nested multiselect dialog data will not be displayed correctly in view mode<br>
[Bug][Console-base Installation/Update/Licensing] Installing add-ons via Console.php prompts for the parameters despite specifying the parameters<br>
[Bug][Console-base Installation/Update/Licensing] Create tenant via console.php i-doit OPEN<br>
[Bug][OCS]                                        OCS Import: Duplicate entries in the Memory category<br>
[Bug][Search]                                     After a search for content containing "CALL" while the highlighting of the search is active, category content is not shown<br>
[Bug][Logbook]                                    Deleted/Archived users via ldap are not shown in the logbook<br>
[Bug][Print view]                                 Custom categories - yes/no field is displayed uncorrectly in print view<br>
[Bug][List editing]                               List editing for host address > Search domain does not save when values are only deleted (Entry sanitized)<br>
[Bug][List editing]                               List edit - Filter for contact assignment>primary does not work<br>
[Bug][CMDB-Explorer]                              In the GraphML export of the CMDB Explorer data to objects are missing<br>
[Bug][Authorization system]                       Display of inherited rights shows wrong parameter selection<br>

[Tâche][Code (interne)] Changer toutes les tables de la base de données en "Row Format : Dynamic" dans les nouvelles installations<br>.
[Improvement][CSV Import] Le navigateur d'objets d'une catégorie personnalisée doit pouvoir utiliser une affectation spéciale via le modèle > numéro de série<br>.
[Improvement][Logbook] Anonymiser les entrées du logbook<br>
[Improvement][Authorization system] Right assignment based on contact assignment<br>
[Bug][Categories] Le niveau d'alerte ne peut pas être sélectionné dans les entrées de logbook<br>
[Bug][Categories] L'attribut "Dernière révision" de la catégorie de documents devrait être affiché dans la liste des objets<br>.
[Bug][Categories] L'adresse IPv6 est affichée comme disponible alors qu'elle est déjà utilisée<br>.
[Bug][Categories] La passerelle par défaut pour le réseau ne peut pas être définie dans la catégorie adresse de l'hôte<br>.
[Bug][Categories] Les adresses MAC utilisant sept octets ne s'appliquent pas à la validation dans i-doit et ne peuvent pas être sauvegardées<br>
[Bug][Categories] Les membres de la pile ne sont pas affichés dans la configuration de la vue en liste<br>
[Bug][JDisc] Découverte JDisc : l'identification du périphérique par FQDN ne fonctionne pas<br>
[Bug][JDisc] JDisc Import - Rename Interfaces<br>
[Bug][JDisc] Le débogage des journaux d'importation JDisc ne fonctionne pas (-vvv)<br>
[Bug][JDisc] Correspondance des piles de switch de JDisc dans i-doit<br>
[Bug][API] Impossible d'assigner une personne via une requête API<br>
[Bug][API] Créer des entrées de dialogue+ personnalisées avec relation<br>
[Bug][Notifications] Les notifications basées sur les rôles n'envoient pas d'email aux personnes si un groupe est assigné avec le rôle<br>.
[Bug][Notifications] Prises de place supplémentaires pour les modèles d'e-mail des notifications<br>
[Bug][Notifications] Notifications - Expiration d'une période de certificat ne fonctionne pas<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : la requête pour les relations ne vérifie toujours que l'objet maître<br>
[Bug][Gestionnaire de rapports] Les anciens rapports contenant un identifiant ou un emplacement d'objet n'affichent pas les conditions<br>.
[Bug][Report Manager] Des opérateurs sont manquants dans un rapport censé afficher de la mémoire libre (drive)<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports - Attribut Of/To provoque une erreur sql<br>
[Bug][CMDB settings] La configuration du navigateur objet pour "Layer-2 Net assignment" de la catégorie "Port" est manquante<br>.
[Bug][H-Inventory] Importation de l'inventaire H : les relations d'affectation de logiciel ne sont pas supprimées correctement<br>
[Bug][Code (interne)] SyncMerger ne fonctionne pas si des propriétés ont été touchées par "mod.cmdb.extendProperties"<br>
[Bug][Code (internal)] La propriété de type de relation est manquante dans les rapports<br>.
[Bug][Code (internal)] La connexion avec l'utilisateur admin écrase les identifiants d'un autre utilisateur<br>
[Bug][Custom categories] La ligne horizontale de la catégorie personnalisée requiert un titre<br>
[Bug][Custom categories] L'icône d'information pour la ligne horizontale ne s'affiche pas correctement<br>
[Bug][CMDB] Software assigment - Le champ "Installed at" ajoute du temps lors de la suppression<br>
[Bug][CMDB] Rapports dynamiques impossibles pour les rapports variables avec placeholder<br>
[Bug][CMDB] Les données des dialogues multi-sélections imbriqués ne s'affichent pas correctement en mode affichage<br>.
[Bug][Console-base Installation/Update/Licensing] Installation d'add-ons via Console.php prompts pour les paramètres malgré la spécification des paramètres<br>
[Bug][Console-base Installation/Update/Licensing] Créer un tenant via console.php i-doit OPEN<br>
[Bug][OCS] OCS Import : entrées en double dans la catégorie Mémoire<br>
[Bug][Search] Après une recherche de contenu contenant "CALL" alors que la mise en évidence de la recherche est active, le contenu de la catégorie n'est pas affiché<br>.
[Bug][Logbook] Les utilisateurs supprimés/archivés via ldap ne sont pas affichés dans le logbook<br>.
[Bug][Print view] Categories personnalisées - le champ oui/non est affiché de manière incorrecte dans la vue d'impression<br>
[Bug][List editing] Edition de la liste pour l'adresse de l'hôte > Le domaine de recherche n'enregistre pas quand les valeurs sont seulement supprimées (Entry sanitized)<br>
[Bug][List editing] List edit - Filter for contact assignment>primary does not work<br>.
[Bug][CMDB-Explorer] Dans l'export GraphML de CMDB Explorer, les données sur les objets sont manquantes<br>.
[Bug][Système d'autorisation] L'affichage des droits hérités montre une mauvaise sélection des paramètres<br>.