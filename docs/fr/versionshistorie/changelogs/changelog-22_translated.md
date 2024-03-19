<!-- TRANSLATED by md-translate -->
# Changelog 22

# Changelog 22

[Improvement][Application Redesign] Improve the main menu to automatically switch on small screens<br>
[Improvement][JDisc]                Import Soundcards from JDisc<br>
[Improvement][JDisc]                Import fields "Last Scan" and "Last Discovered"<br>
[Improvement][JDisc]                Monitors should adopt the location of assigned objects<br>
[Improvement][JDisc]                Information about last import from JDisc<br>
[Bug][Application Redesign]         The size of the barcode is no longer generated dynamically<br>
[Bug][Application Redesign]         CMDB-Explorer - Search field is too small<br>
[Bug][Application Redesign]         Correct the appearance of the language switch button<br>
[Bug][Application Redesign]         Fix layout of "Connection" category on small screens<br>
[Bug][Report-Manager]               Make the attribute "Aliases" of the category "Service" to be selectable in the report manager<br>
[Bug][Report-Manager]               Report do not display Object title instead of the ID<br>
[Bug][Report-Manager]               Operator LIKE %...% is not working in reports for operating system>variant<br>
[Bug][Categories]                   This IP address is available function checks the wrong Layer 3-Net<br>
[Bug][Categories]                   Category "Operating system" always gets a time stamp for date of installation<br>
[Bug][Categories]                   Fatal error when displaying a specific category on the overview as standard page<br>
[Bug][Categories]                   The License browser displays license key as License title<br>
[Bug][Categories]                   File Browser button has the wrong attribute<br>
[Bug][Categories]                   Lists of specific categories contains different information<br>
[Bug][Categories]                   Brackets not displayed in WYSIWGY Editor<br>
[Bug][Categories]                   The column width for notification e-mail templates resets after opening a report in another tab<br>
[Bug][Categories]                   Wrong scaling when zooming for assigned categories<br>
[Bug][API]                          Fix security issue in i-doit (reported by Tim Püttmanns, maxence)<br>
[Bug][API]                          Api System user is not useable<br>
[Bug][API]                          debug level of json api can not be disabled<br>
[Bug][JDisc]                        The User is not able to save a JDisc configuration<br>
[Bug][JDisc]                        JDisc import via console.php with mode=6 does not Match correct<br>
[Bug][JDisc]                        JDisc Import - "Installed at" is not imported correctly<br>
[Bug][JDisc]                        JDisc import with Use simple database modelling activated ends in error<br>
[Bug][JDisc]                        A Software Assignment > Version number is not updated via JDisc Import<br>
[Bug][JDisc]                        JDisc Import with PHP8.0 ends in error when Use simple database modelling is activated<br>
[Bug][JDisc]                        JDisc Import logical Ports with a single IP Address<br>
[Bug][LDAP]                         ldap-sync caching prevents user from login<br>
[Bug][Notifications]                Notifications do not only notificate groups if the stategy Groups if available, otherwise assigned persons is selected<br>
[Bug][Notifications]                Language templates in notifications - saving not possible<br>
[Bug][CSV Import]                   Custom category field type Object-Browser (Several objects) is displayed as Object browser (One object) in CSV Import<br>
[Bug][CSV Import]                   The view in the csv assignment is shifted by larger resolutions<br>
[Bug][CSV Import]                   The CSV Import assignment displays object type selection for attribute fields without object type selection<br>
[Bug][CSV Import]                   CSV Import with activated validation for Host address > Domain displays error - PHP 8.0<br>
[Bug][Code (Internal)]              Error: General error: Log file has not been set yet<br>
[Bug][Code (Internal)]              Missing language constant for Administrator and User role<br>
[Bug][Code (Internal)]              The combined location view displays objects twice<br>
[Bug][Code (Internal)]              settings.cache should allways contain a array<br>
[Bug][Code (Internal)]              Object browser uses combined view for locations<br>
[Bug][Validation]                   Can't delete validation when selecting "a value from the textarea below"<br>
[Bug][Validation]                   Validation not working when selecting "a value from the textarea below"<br>
[Bug][Authorization system]         Inherit Rights via contact assignment from group to member<br>
[Bug][Authorization system]         rights management select options all invert none are missing in 1.19<br>
[Bug][Authorization system]         Parameters in authorization system are expanded<br>
[Bug][Relations]                    Display spacers can not be set to No<br>
[Bug][System tools]                 Missing MySQL Checks<br>
[Bug][Custom categories]            Code in "Javascript" fields in custom categories gets obfuscated<br>
[Bug][Events]                       List edit - Dialog+ (multi value) entries for custom categories are not saved<br>
[Bug][CMDB-Explorer]                CMDB-Explorer export does not work<br>
[Bug][List editing]                 All version numbers are displayed in list edit<br>
[Bug][List editing]                 list edit of location category can not edit objects which have no location set<br>
[Bug][List editing]                 List edit - Model is not displayed<br>
[Bug][Admincenter]                  If a tenant has a wrong password for MySQL the Admin Center is blocked<br>
[Bug][Lists]                        Wrong sorting of locations<br>
[Bug][Lists]                        Listview - filtering of date only works with english format<br>
[Bug][Lists]                        Objects cannot be opened with read-only permissions<br>
[Bug][Dashboard]                    The remaining time of the i-doit license is not displayed on the dashboard<br>
[Bug][Update]                       Update URL is not useable<br>
[Bug][CMDB settings]                The object type sorting is not stored inital and is displayed incorrectly in the gui<br>

[Improvement][Application Redesign] Améliorer le menu principal pour passer automatiquement sur les petits écrans<br>.
[Improvement][JDisc] Importer des cartes son depuis JDisc<br>
[Improvement][JDisc] Importer les champs "Dernier scan" et "Dernier découvert"<br>
[Improvement][JDisc] Les moniteurs doivent adopter l'emplacement des objets assignés<br>.
[Improvement][JDisc] Information sur la dernière importation depuis JDisc<br>
[Bug][Application Redesign] La taille du code-barres n'est plus générée dynamiquement<br>.
[Bug][Application Redesign] CMDB-Explorer - Le champ de recherche est trop petit<br>
[Bug][Application Redesign] Correction de l'apparence du bouton de changement de langue<br>
[Bug][Application Redesign] Correction de la présentation de la catégorie "Connexion" sur les petits écrans<br>.
[Bug][Gestionnaire de rapports] Rendre l'attribut "Alias" de la catégorie "Service" sélectionnable dans le gestionnaire de rapports<br>.
[Bug][Gestionnaire de rapports] Le rapport n'affiche pas le titre de l'objet au lieu de l'ID<br>.
[Bug][Gestionnaire de rapports] L'opérateur LIKE %...% ne fonctionne pas dans les rapports pour système d'exploitation>variant<br>.
[Bug][Categories] Cette adresse IP est disponible fonction vérifie le mauvais réseau de couche 3<br>
[Bug][Categories] La catégorie "Operating system" obtient toujours un horodatage pour la date d'installation<br>
[Bug][Categories] Fatal error when displaying a specific category on the overview as standard page<br>
[Bug][Categories] Le navigateur de licence affiche la clé de licence comme titre de licence<br>.
[Bug][Categories] Le bouton du navigateur de fichiers n'a pas le bon attribut<br>.
[Bug][Categories] Les listes de catégories spécifiques contiennent des informations différentes<br>.
[Bug][Categories] Les brackets ne s'affichent pas dans l'éditeur WYSIWGY<br>
[Bug][Categories] La largeur de colonne pour les modèles d'e-mail de notification se réinitialise après l'ouverture d'un rapport dans un autre onglet<br>.
[Bug][Categories] Mauvaise mise à l'échelle lors du zoom pour les catégories attribuées<br>
[Bug][API] Correction d'un problème de sécurité dans i-doit (signalé par Tim Püttmanns, maxence)<br>
[Bug][API] L'utilisateur du système Api n'est pas utilisable<br>
[Bug][API] le niveau de débogage de l'api json ne peut pas être désactivé<br>
[Bug][JDisc] L'utilisateur ne peut pas sauvegarder une configuration JDisc<br>
[Bug][JDisc] JDisc import via console.php avec mode=6 ne correspond pas correctement<br>
[Bug][JDisc] JDisc Import - "Installed at" n'est pas importé correctement<br>
[Bug][JDisc] JDisc import avec Use simple database modelling activated se termine en erreur<br>
[Bug][JDisc] Une assignation de logiciel > numéro de version n'est pas mise à jour via JDisc Import<br>.
[Bug][JDisc] JDisc Import with PHP8.0 ends in error when Use simple database modelling is activated<br>
[Bug][JDisc] JDisc Import logical ports with a single IP address<br>
[Bug][LDAP] la mise en cache ldap-sync empêche l'utilisateur de se connecter<br>
[Bug][Notifications] Les notifications ne notifient pas seulement les groupes si la stratégie Groupes est disponible, autrement les personnes assignées sont sélectionnées<br>.
[Bug][Notifications] Modèles de langue dans les notifications - sauvegarde impossible<br>
[Bug][CSV Import] Le type de champ de catégorie personnalisé Object-Browser (Several objects) est affiché comme Object browser (One object) dans CSV Import<br>
[Bug][CSV Import] La vue dans le mappage csv est décalée par de plus grandes résolutions<br>
[Bug][CSV Import] L'assignation CSV Import affiche la sélection du type d'objet pour les champs d'attributs sans sélection du type d'objet<br>.
[Bug][CSV Import] CSV Import avec validation activée pour l'adresse de l'hôte > Domain displays error - PHP 8.0<br>
[Bug][Code (Internal)] Erreur : General error : Log file has not been set yet<br>
[Bug][Code (Internal)] Constante de langue manquante pour le rôle d'administrateur et d'utilisateur<br>
[Bug][Code (Internal)] La vue combinée des lieux affiche deux fois les objets<br>.
[Bug][Code (Internal)] settings.cache devrait contenir un tableau<br> à chaque fois
[Bug][Code (Internal)] Le navigateur d'objets utilise la vue combinée pour les emplacements<br>.
[Bug][Validation] Impossible de supprimer la validation en sélectionnant "une valeur dans le textarea ci-dessous"<br>.
[Bug][Validation] La validation ne fonctionne pas lorsque l'on sélectionne "une valeur dans le textarea ci-dessous"<br>.
[Bug][Authorization system] Inherit Rights via contact assignment from group to member<br>
[Bug][Authorization system] les options de sélection de la gestion des droits sont inversées et aucune n'est manquante dans la version 1.19<br>.
[Bug][Authorization system] Les paramètres du système d'autorisation sont étendus<br>
[Bug][Relations] Les espaces d'affichage ne peuvent pas être réglés sur No<br>
[Bug][Outils système] Vérification MySQL manquante<br>
[Bug][Custom categories] Le code dans les champs "Javascript" dans les catégories personnalisées est obfusqué<br>
[Bug][Events] List edit - Dialog+ (multi value) entries for custom categories are not saved<br>
[Bug][CMDB-Explorer] L'exportation de CMDB-Explorer ne fonctionne pas<br>
[Bug][List editing] Tous les numéros de version sont affichés dans list edit<br>
[Bug][List editing] l'édition de liste de la catégorie emplacement ne peut pas éditer des objets qui n'ont pas de réglage d'emplacement<br>
[Bug][List editing] List edit - le modèle n'est pas affiché<br>
[Bug][Centre d'administration] Si un locataire a un mauvais mot de passe pour MySQL, le centre d'administration est bloqué<br>.
[Bug][Lists] Mauvais tri des emplacements<br>
[Bug][Lists] Listview - le filtrage des dates ne fonctionne qu'avec le format anglais<br>
[Bug][Lists] Les objets ne peuvent pas être ouverts avec des permissions en lecture seule<br>
[Bug][Dashboard] Le temps restant de la licence i-doit n'est pas affiché sur le dashboard<br>
[Bug][Update] L'URL de mise à jour n'est pas utilisable<br>
[Bug][CMDB settings] Le tri du type d'objet n'est pas stocké inital et est affiché de manière incorrecte dans le gui<br>.