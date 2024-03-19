<!-- TRANSLATED by md-translate -->
# Changelog 25

# Changelog 25

[Task][Code (Internal)]                           Remove all query_cache_* options from the systemoverview of i-doit<br>
[Task][Code (Internal)]                           Use buttons to edit properties in custom category configuration<br>
[Task][System settings]                           Create new i-doit administration structure<br>
[Task][System settings]                           Search text is hidden after clicking anywhere else<br>
[Improvement][Custom categories]                  Define your own attribute keys in custom categories<br>
[Improvement][Custom categories]                  Change isys_catg_custom_fields_list__field_content from text to longtext<br>
[Improvement][CMDB]                               Add object name of a server to list view of "logical devices (Client)" category<br>
[Improvement][CMDB]                               Add ID to list view of assigned objects from person group<br>
[Improvement][Installation]                       MySQL 8.0 compatibility<br>
[Bug][Categories]                                 Adding a chassis to the back of a rack does not show the front of the chassis<br>
[Bug][Categories]                                 Duplicate of workplace has identical workplace components<br>
[Bug][Categories]                                 Placeholder helper is not displayed when the category has no saved data<br>
[Bug][Categories]                                 Ipv4 adress out of range when changing layer3 net<br>
[Bug][Categories]                                 All workplaces assigned when creating a person<br>
[Bug][Categories]                                 Can not copy passwords with double click if special characters are used<br>
[Bug][Authorization system]                       Set the expert setting auth.active to 1 by default<br>
[Bug][Authorization system]                       Rights set by the database get overwritten when viewed<br>
[Bug][Authorization system]                       Rights are not granted to a Person<br>
[Bug][LDAP]                                       LDAP page should not break when testing connection<br>
[Bug][Documents]                                  Placeholder "assigned workplaces (general->title)" shows title of main object<br>
[Bug][Documents]                                  Kosten und Laufzeit des Vertrags werden nicht richtig angezeigt<br>
[Bug][CMDB]                                       Do not break i-doit when object type is clicked in breadcrumb<br>
[Bug][Update]                                     Empty Migration log after update to Version 23<br>
[Bug][CSV Import]                                 CPU frequency + CPU frequency unit can not imported at once<br>
[Bug][Custom categories]                          Can't save custom categories in overview on creation, when service assignment is also in the overview (>=php8)<br>
[Bug][Custom categories]                          Duplicate technical keys when creating many fields at once in custom category<br>
[Bug][Code (Internal)]                            Object Browser request canceled<br>
[Bug][Code (Internal)]                            JS error when user is not allowed to see the search<br>
[Bug][Code (Internal)]                            Error when creating object with locally assigned object category in overview<br>
[Bug][Code (Internal)]                            No object type group selected, when accessing i-doit via "index.php"<br>
[Bug][JDisc]                                      JDisc Discovery does not use the correct port<br>
[Bug][Report-Manager]                             %LIKE% Operator for guarantee date is not working<br>
[Bug][Report-Manager]                             SQL query is wrongly created when using Assigned workstation -> Parent object<br>
[Bug][Report-Manager]                             Report Manager - Query for runtime not built correctly<br>
[Bug][Report-Manager]                             Exported SQL-based report can not be imported without an error<br>
[Bug][Admincenter]                                i-doit tries to check the hashed password as plaintext<br>
[Bug][Search]                                     Exception error when creating fc ports<br>
[Bug][Lists]                                      Expiration date in certificates does not sort correctly<br>
[Bug][List editing]                               Up/Down scrollbar is not anchored in list edit<br>
[Bug][List editing]                               List edit - Software assignment is not updated via list overview<br>
[Bug][API]                                        API-Examples displays object as string<br>
[Bug][Console-base Installation/Update/Licensing] Using "clear-credentials" command deletes user name

[Tâche][Code (Interne)] Supprimer toutes les options query_cache_* de la vue du système d'i-doit<br>.
[Tâche][Code (Interne)] Utiliser les boutons pour éditer les propriétés dans la configuration des catégories personnalisées<br>
[Task][System settings] Créer une nouvelle structure d'administration i-doit<br>
[Tâche][Paramètres système] Le texte de recherche est masqué après avoir cliqué ailleurs<br>
[Improvement][Custom categories] Définir vos propres clés d'attributs dans les catégories personnalisées<br>
[Improvement][Custom categories] Changement de isys_catg_custom_fields_list__field_content de text à longtext<br>
[Improvement][CMDB] Ajout du nom d'objet d'un serveur à la liste de vue de la catégorie "Périphériques logiques (client)"<br>
[Improvement][CMDB] Add ID to list view of assigned objects from person group<br>
[Improvement][Installation] Compatibilité MySQL 8.0<br>
[Bug][Categories] Ajouter un châssis à l'arrière d'un rack ne permet pas de voir l'avant du châssis<br>
[Bug][Categories] Un double de poste de travail a des composants de poste de travail identiques<br>
[Bug][Categories] L'aide Placeholder ne s'affiche pas lorsque la catégorie n'a pas de données enregistrées<br>.
[Bug][Categories] Adresse Ipv4 hors de portée lors du changement de layer3 net<br>
[Bug][Categories] Tous les postes de travail attribués lors de la création d'une personne<br>
[Bug][Categories] Ne peut pas copier les mots de passe avec un double clic si des caractères spéciaux sont utilisés<br>
[Bug][Authorization system] Réglage du paramètre expert auth.active à 1 par défaut<br>
[Bug][Authorization system] Les droits définis par la base de données sont écrasés lors de la consultation<br>.
[Bug][Authorization system] Les droits ne sont pas accordés à une personne<br>
[Bug][LDAP] La page LDAP ne doit pas s'interrompre lors du test de connexion<br>.
[Bug][Documents] Le cartouche "assigned workplaces (general->title)" affiche le titre de l'objet principal<br>.
[Bug][Documents] Le coût et la durée du contrat ne sont pas affichés correctement<br>
[Bug][CMDB] Ne pas casser i-doit quand le type d'objet est cliqué dans le breadcrumb<br>
[Bug][Update] Empty Migration log after update to version 23<br>
[Bug][CSV Import] CPU frequency + CPU frequency unit cannot be imported at once<br>
[Bug][Custom categories] Impossible de sauvegarder les catégories personnalisées dans la vue d'ensemble lors de la création, si l'affectation de service est également dans la vue d'ensemble (>=php8)<br>
[Bug][Custom categories] Duplication des clés techniques lors de la création de nombreux champs à la fois dans la catégorie personnalisée<br>
[Bug][Code (Internal)] Demande de navigateur objet annulée<br>
[Bug][Code (Internal)] Erreur JS quand l'utilisateur n'est pas autorisé à voir la recherche<br>
[Bug][Code (Internal)] Erreur lors de la création d'un objet avec une catégorie d'objet attribuée localement dans l'aperçu<br>.
[Bug][Code (Internal)] Pas de groupe de type d'objet sélectionné, lors de l'accès à i-doit via "index.php"<br>
[Bug][JDisc] JDisc Discovery n'utilise pas le port correct<br>
[Bug][Report-Manager] L'opérateur %LIKE% pour la date de garantie ne fonctionne pas<br>
[Bug][Gestionnaire de rapports] La requête SQL n'est pas créée correctement lors de l'utilisation de la station de travail assignée -> objet parent<br>.
[Bug][Report-Manager] Report Manager - Query for runtime not built correctly<br>
[Bug][Report Manager] Impossible d'importer un rapport SQL exporté sans erreur<br>.
[Bug][Admincenter] i-doit tente de vérifier le mot de passe haché en texte brut<br>
[Bug][Search] Erreur d'exception lors de la création de ports fc<br>
[Bug][Lists] La date d'expiration dans les certificats ne se trie pas correctement<br>
[Bug][List editing] La barre de défilement haut/bas n'est pas ancrée dans l'édition de liste<br>
[Bug][List editing] List edit - L'affectation du logiciel n'est pas mise à jour via l'aperçu de la liste<br>
[Bug][API] API-Examples affiche l'objet comme une chaîne<br>
[Bug][Console-base Installation/Update/Licensing] La commande "clear-credentials" supprime le nom d'utilisateur