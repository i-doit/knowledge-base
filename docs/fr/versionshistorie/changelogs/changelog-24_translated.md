<!-- TRANSLATED by md-translate -->
# Changelog 24

# Changelog 24

[Task][Code (Internal)]                                 Unify uploaded file-paths for windows and other operating systems<br> 
[Task][Relations]                                       Improve field size in "Administration > User settings > Presentation"<br> 
[Task][LDAP]                                            Trim LDAP configuration inputs to prevent errors<br> 
[Task][JDisc]                                           Implement new JDisc profile option to use hostname as object title (instead of FQDN)<br> 
[Improvement][JDisc]                                    JDISC Profile Ex and Import<br> 
[Improvement][Code (Internal)]                          Support MariaDB 10.6.X<br> 
[Bug][List editing]                                     Improved layout for list edit to view more entries at the same time on the screen<br> 
[Bug][List editing]                                     Sorting Cabling > Connectors in Listedit<br> 
[Bug][List editing]                                     Position in rack is not editable by the list edit<br> 
[Bug][List editing]                                     List Edit should add entries and values when values for all is added<br> 
[Bug][List editing]                                     Positioning objects in a rack via multiedit shows different results<br> 
[Bug][Report-Manager]                                   Attributes "target schema" and "software runs on" is not displayable in report context<br> 
[Bug][Report-Manager]                                   subcnd for Service assignment category attribute Service is missing<br> 
[Bug][Report-Manager]                                   Operators missing for operating system>version number in report conditions<br> 
[Bug][Report-Manager]                                   Enter button causes unpredictable events<br> 
[Bug][Categories]                                       Adding a model in category model not possible<br> 
[Bug][Categories]                                       Free IPv6 addresses are not shown correctly<br> 
[Bug][Categories]                                       Filter in object lists is not fully shown and cut off<br> 
[Bug][Categories]                                       Custom category on overview page causes the last category to disappear from the overview page<br> 
[Bug][Categories]                                       Category lists - Make all attributes selectable (part 2)<br> 
[Bug][Categories]                                       Reminder warranty not displayed when almost running out<br> 
[Bug][Categories]                                       Duplicate of workplace has identical workplace components<br> 
[Bug][Categories]                                       Assigned clusters displays empty site<br> 
[Bug][Categories]                                       Placeholder %OBJTITLE% is not working in category accounting > Inventory number<br> 
[Bug][Categories]                                       Placeholder insert wrong data when used in template as title<br> 
[Bug][Categories]                                       Attribute visibility not working for General > Description in overview<br> 
[Bug][Categories]                                       Attribute visibility not working for Masterdata > Description<br> 
[Bug][Categories]                                       No selection possible for no selection in the category Monitor (Pivot and Speaker)<br> 
[Bug][Categories]                                       Image order cannot be saved<br> 
[Bug][Categories]                                       Object counter %COUNTER% not counting per object type<br> 
[Bug][Code (Internal)]                                  Data leak when using SQL Injection to manipulate cmdb.status (contributed by Roberto Dagostino)<br> 
[Bug][Code (Internal)]                                  Images in a description fields which were inserted via URL or copy&paste are not displayed<br> 
[Bug][Code (Internal)]                                  Archive and delete buttons is missing in Relations category<br> 
[Bug][Code (Internal)]                                  In a XAMPP installation images are not previewed and inserted in documents<br> 
[Bug][Code (Internal)]                                  XML Import language constant LC__MODULE__IMPORT__IMPORTED_AT is displayed<br> 
[Bug][Code (Internal)]                                  First location in locations tree is clickable<br> 
[Bug][Code (Internal)]                                  Better object browser performance<br> 
[Bug][Code (Internal)]                                  Sanitize input data deletes wysiwyg editor tags<br> 
[Bug][Code (Internal)]                                  Description field is limited to 65,535 characters<br> 
[Bug][Notifications]                                    Interval does not work for notifications<br> 
[Bug][Notifications]                                    E-Mail Template with any property from cagegory (License keys) will result in an empty E-Mail<br> 
[Bug][Notifications]                                    Notification about stored objects is not possible when the CMDB Status is altered<br> 
[Bug][Import]                                           Error when duplicating a object with Color / wave lenghts selected in a Cabling -> Connectors entry<br> 
[Bug][JDisc]                                            Some JDisc changes are declared as source internal<br> 
[Bug][JDisc]                                            JDisc Import - "Only create newly scanned devices" creates duplicates<br> 
[Bug][Lists]                                            Filtering virtual host > yes/no does not work in object lists<br> 
[Bug][Lists]                                            Sorting of IPv6 addresses<br> 
[Bug][Lists]                                            Filter custom fields with date without time in object lists not possible<br> 
[Bug][Lists]                                            Person not displayed in preview when filtering<br> 
[Bug][Lists]                                            Fields that allow only numbers from custom categories are not sorted properly<br> 
[Bug][Lists]                                            Description field in software assignment not displayed in list view<br> 
[Bug][API]                                              Error message when system api user is archived/deleted<br> 
[Bug][API]                                              Creating a location entry via API sets latitude and longitude to 0<br> 
[Bug][API]                                              'type' option for cmdb.objects filter does not work with id<br> 
[Bug][API]                                              "Categories and attributes" contains empty categories like Document and Floorplan<br> 
[Bug][Dashboard]                                        Reports in dashboard cause error when empty<br> 
[Bug][Dashboard]                                        Dashboard "jumps" to the report widget<br> 
[Bug][CMDB settings]                                    Default translation is overwritten<br> 
[Bug][CMDB settings]                                    Translation is empty when deleting a translation<br> 
[Bug][CMDB settings]                                    Custom translation - Changes only visible after reloading the site<br> 
[Bug][Custom categories]                                Wrong sorting for dialog+ field in custom categories<br> 
[Bug][Custom categories]                                Custom category not editable when adding report as a field<br> 
[Bug][Application Redesign]                             Long titles are cut off<br> 
[Bug][Authorization system]                             Date of change is updated without rights via overview<br> 
[Bug][Templates]                                        Counter %OBJID% not working for templates<br> 
[Bug][Templates]                                        Automatic inventory number does not work if objects are created via template.<br> 
[Bug][LDAP]                                             An empty ldap password does not give an error message when tested<br> 
[Bug][LDAP]                                             The ldap-sync import objects with no title<br> 
[Bug][LDAP]                                             Ldap-sync creates a log for every archived user for every sync<br> 
[Bug][Relations]                                        Grouping object type as dropdown does not work correctly<br> 
[Bug][Logbook]                                          SQL Error in logbook when displaying archived view<br> 
[Bug][Migration of all report views in other functions] 500 Error when downloading report view as csv<br> 
[Bug][CSV Import]                                       Description of assigned workstation not imported via CSV<br> 
[Bug][Search]                                           Tenant setting for search is not working

[Tâche][Code (Interne)] Unifier les chemins de fichiers téléchargés pour Windows et les autres systèmes d'exploitation<br>.
[Tâche][Relations] Améliorer la taille des champs dans "Administration > Paramètres utilisateur > Présentation"<br>.
[Tâche][LDAP] Trim des entrées de configuration LDAP pour éviter les erreurs<br>.
[Tâche][JDisc] Mise en place d'une nouvelle option de profil JDisc pour utiliser le nom de l'hôte comme titre de l'objet (au lieu de FQDN)<br>
[Improvement][JDisc] Ex et import de profil JDISC<br>
[Improvement][Code (Internal)] Support de MariaDB 10.6.X<br>
[Bug][List editing] Amélioration de la mise en page pour l'édition de liste afin d'afficher plus d'entrées en même temps sur l'écran<br>
[Bug][List editing] Tri du câblage > Connecteurs dans Listedit<br>
[Bug][List editing] La position dans le rack n'est pas modifiable par l'éditeur de liste<br>
[Bug][List editing] L'éditeur de liste devrait ajouter des entrées et des valeurs lorsque des valeurs sont ajoutées pour tout<br>
[Bug][List editing] Positionner des objets dans un rack via multiedit donne des résultats différents<br>
[Bug][Report-Manager] Les attributs "target schema" et "software runs on" ne sont pas affichables dans le contexte du rapport<br>.
[Bug][Report-Manager] Le sous-cnd pour l'attribut de catégorie d'affectation de service est manquant<br>.
[Bug][Report-Manager] Opérateurs manquants pour le système d'exploitation>numéro de version dans les conditions du rapport<br>.
[Bug][Report-Manager] Le bouton Enter provoque des événements imprévisibles<br>
[Bug][Categories] Ajout d'un modèle dans le modèle de catégorie impossible<br>
[Bug][Categories] Les adresses IPv6 gratuites ne s'affichent pas correctement<br>
[Bug][Categories] Le filtre dans les listes d'objets n'est pas entièrement affiché et coupé<br>
[Bug][Categories] La catégorie personnalisée sur la page d'aperçu provoque la disparition de la dernière catégorie de la page d'aperçu<br>.
[Bug][Categories] Listes de catégories - Rendre tous les attributs sélectionnables (partie 2)<br>
[Bug][Categories] Le message de rappel n'est pas affiché alors qu'il est presque terminé<br>.
[Bug][Categories] Duplicate of workplace has identical workplace components<br>
[Bug][Categories] Assigned clusters display empty site<br>
[Bug][Categories] Le repère %OBJTITLE% ne fonctionne pas dans la comptabilité des catégories > Numéro d'inventaire<br>.
[Bug][Categories] Le détenteur de la place insère des données erronées lorsqu'il est utilisé comme titre dans le template<br>
[Bug][Categories] La visibilité des attributs ne fonctionne pas pour General > Description dans l'aperçu<br>
[Bug][Categories] La visibilité de l'attribut ne fonctionne pas pour Masterdata > Description<br>
[Bug][Categories] Pas de sélection possible pour aucune sélection dans la catégorie Monitor (Pivot et Speaker)<br>
[Bug][Categories] L'ordre des images ne peut pas être sauvegardé<br>
[Bug][Categories] Compteur d'objets %COUNTER% ne compte pas par type d'objet<br>
[Bug][Code (Internal)] Fuite de données lors de l'utilisation de l'injection SQL pour manipuler cmdb.status (contribué par Roberto Dagostino)<br>
[Bug][Code (Internal)] Les images dans les champs de description insérées par URL ou par copier-coller ne sont pas affichées<br>.
[Bug][Code (Internal)] Les boutons Archive et Delete sont absents dans la catégorie Relations<br>.
[Bug][Code (Internal)] Dans une installation XAMPP, les images ne sont pas prévisualisées et insérées dans les documents<br>.
[Bug][Code (Internal)] La constante de langue d'importation XML LC__MODULE__IMPORT__IMPORTED_AT est affichée<br>
[Bug][Code (Internal)] La première localisation dans l'arbre des localisations est cliquable<br>
[Bug][Code (Internal)] Meilleure performance du navigateur d'objets<br>
[Bug][Code (Internal)] Sanitize input data deletes wysiwyg editor tags<br>
[Bug][Code (Internal)] Le champ de description est limité à 65,535 caractères<br>
[Bug][Notifications] L'intervalle ne fonctionne pas pour les notifications<br>
[Bug][Notifications] Le modèle d'e-mail avec n'importe quelle propriété de cagegory (clés de licence) résulte en un e-mail vide<br>.
[Bug][Notifications] La notification des objets stockés n'est pas possible lorsque l'état de la CMDB est modifié<br>.
[Bug][Import] Erreur lors de la duplication d'un objet avec des longueurs d'onde de couleur sélectionnées dans une entrée Cabling -> Connectors<br>.
[Bug][JDisc] Certains changements de JDisc sont déclarés comme source interne<br>.
[Bug][JDisc] JDisc Import - "Only create newly scanned devices" crée des duplicates<br>
[Bug][Lists] Le filtrage de l'hôte virtuel > oui/non ne fonctionne pas dans les listes d'objets<br>.
[Bug][Lists] Tri des adresses IPv6<br>
[Bug][Lists] Filtrage des champs personnalisés avec date sans heure impossible dans les listes d'objets<br>
[Bug][Lists] Personne non affichée en aperçu lors du filtrage<br>
[Bug][Lists] Les champs qui n'autorisent que des numéros de catégories personnalisées ne sont pas correctement triés<br>.
[Bug][Lists] Le champ de description dans l'attribution du logiciel n'est pas affiché dans la vue de la liste<br>.
[Bug][API] Message d'erreur lorsque l'utilisateur de l'api système est archivé/supprimé<br>
[Bug][API] La création d'une entrée de localisation via l'API définit la latitude et la longitude à 0<br>
[Bug][API] L'option 'type' pour le filtre cmdb.objects ne fonctionne pas avec id<br>
[Bug][API] "Categories and attributes" contient des catégories vides comme Document et Floorplan<br>
[Bug][Dashboard] Les rapports dans le tableau de bord provoquent une erreur lorsqu'ils sont vides<br>
[Bug][Dashboard] Dashboard "jumps" to the report widget<br>
[Bug][CMDB settings] La traduction par défaut est écrasée<br>
[Bug][CMDB settings] La traduction est vide lors de la suppression d'une traduction<br>
[Bug][CMDB settings] Traduction personnalisée - Les changements ne sont visibles qu'après le rechargement du site<br>
[Bug][Custom categories] Mauvais tri pour le champ dialog+ dans les catégories personnalisées<br>
[Bug][Custom categories] Catégorie personnalisée non modifiable lors de l'ajout d'un rapport comme champ<br>
[Bug][Application Redesign] Les titres longs sont coupés<br>
[Bug][Système d'autorisation] La date de modification est mise à jour sans droits via l'aperçu<br>.
[Bug][Templates] Compteur %OBJID% ne fonctionne pas pour les templates<br>
[Bug][Templates] Le numéro d'inventaire automatique ne fonctionne pas si les objets sont créés via le template.<br>
[Bug][LDAP] Un mot de passe ldap vide ne donne pas de message d'erreur lors du test<br>.
[Bug][LDAP] La synchronisation ldap importe des objets sans titre<br>.
[Bug][LDAP] Ldap-sync crée un log pour chaque utilisateur archivé pour chaque sync<br>
[Bug][Relations] Le type d'objet groupé comme dropdown ne fonctionne pas correctement<br>
[Bug][Logbook] Erreur SQL dans le logbook lors de l'affichage de la vue archivée<br>
[Bug][Migration de toutes les vues du rapport dans d'autres fonctions] 500 Erreur lors du téléchargement de la vue du rapport au format csv<br>
[Bug][CSV Import] Description du poste de travail assigné non importé via CSV<br>
[Bug][Search] Le paramétrage du locataire pour la recherche ne fonctionne pas