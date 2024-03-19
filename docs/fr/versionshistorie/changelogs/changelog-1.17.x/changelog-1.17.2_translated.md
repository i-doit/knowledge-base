<!-- TRANSLATED by md-translate -->
# Changelog 1.17.2

# Changelog 1.17.2

[Improvement][Categories]   Option to define if relations to an archived object should be displayed as archived or normal<br>
[Improvement][Console]      Functions for cleaning up objects via i-doit console<br>
[Bug][Lists]                Objects from relations are not shown in object lists<br>
[Bug][Lists]                Filtering in object lists does not find Umlauts<br>
[Bug][Lists]                Object list for network area shows wrong information for the category Network area > Options<br>
[Bug][Lists]                When exporting the Service > Service Components list, the ID in {}<br>
[Bug][JDisc]                JDisc import imports all cloud users<br>
[Bug][JDisc]                Some information to operating systems are only imported into the description field<br>
[Bug][JDisc]                Objects without any details do not get imported via JDisc<br>
[Bug][JDisc]                Using i-doit >=1.16.3 with an older version of JDisc (<5022) fails because of a missing JDisc Table "ipdnsserverconfiguration"<br>
[Bug][System settings]      The configuration for the Standard LDAP group is not to be found in the client settings but in the cross-system settings under System Parameters<br>
[Bug][Categories]           ##COUNT## Placeholder is not evaluated for outputs (connection)<br>
[Bug][Categories]           Selecting a name shema in category "connectors" uses a wrong default<br>
[Bug][Categories]           Connection of logical ports is not saved<br>
[Bug][Categories]           Missing categories to select for overview page<br>
[Bug][Categories]           Purge button in category "location" not available<br>
[Bug][Categories]           Button "Purge" is performed without a security query<br>
[Bug][Categories]           In category "Cabling" > "connectors" object IDs are shown next to cable names<br>
[Bug][Custom categories]    If the value of a Yes-No field of a user-defined category is changed via the overview page, the value is not saved<br>
[Bug][Custom categories]    Dialog+ values are not identified by category<br>
[Bug][Custom categories]    The default value of Yes/No fields is also displayed in the view mode.<br>
[Bug][Custom categories]    Handling for YES/No fields in user-defined categories cannot be changed<br>
[Bug][CMDB settings]        In the Category Services the Dialog Attribut Alias cannot be accessed via the Dialog-Admin<br>
[Bug][CMDB settings]        Add option to object browser configuration to limit the types of creatable objects<br>
[Bug][Dashboard]            The date is not displayed in German on the Dashboard > Welcome widget<br>
[Bug][Code (internal)]      Saved passwords can no longer be issued<br>
[Bug][Code (internal)]      The object list is not loaded if an object has a '(Apostrophe) in its name<br>
[Bug][Code (internal)]      Apostrophes are not escaped<br>
[Bug][Code (internal)]      Extending existing categories with attributes via an add-on the data is not stored<br>
[Bug][Code (internal)]      Attributes in existing categories are not merged correctly when they are extended via an add-on<br>
[Bug][Update]               Update across a major version should not be possible (>=1.16.1 > 1.17.1)<br>
[Bug][CSV Import]           CSV Import: Import of operating system versions via the operating system category<br>
[Bug][Report-Manager]       The table isys_user_session can be read out by SQL report<br>
[Bug][Report-Manager]       Report displays incorrect attributes for the "Managed devices" category<br>
[Bug][Report-Manager]       Report Manager: Using Installed on -> Operating system as condition generates SQL error message<br>
[Bug][Authorization system] By setting a role in contact assignments, the object is opened if the rights are insufficient<br>
[Bug][OCS]                  OCS Import: If Multi Value categories are imported there are duplicate entries<br>
[Bug][Validation]           Validation of unique Dialog Plus fields does not allow editing the Multi-Value entry<br>
[Bug][CMDB]                 In the category Cabling > Connectors the Configured value for the "Naming scheme for output pairs" is not considered<br>
[Bug][LDAP]                 Missing error message if the path to the .ini or the filename is not entered correctly<br>
[Bug][List editing]         Sorting for IPv4 address not possible in list edit<br>
[Bug][Logbook]              Creating a client creates CPU and memory entries in the logbook<br>

[Improvement][Categories] Option pour définir si les relations avec un objet archivé doivent être affichées comme archived ou normal<br>.
[Improvement][Console] Fonctions pour nettoyer les objets via la console i-doit<br>
[Bug][Lists] Les objets des relations ne sont pas affichés dans les listes d'objets<br>.
[Bug][Lists] Le filtrage dans les listes d'objets ne trouve pas les trémas<br>.
[Bug][Lists] La liste des objets pour la zone de réseau affiche des informations erronées pour la catégorie Zone de réseau > Options<br>.
[Bug][Lists] Lors de l'exportation du service > Service Components list, l'ID dans {}<br>
[Bug][JDisc] JDisc imports all cloud users<br>
[Bug][JDisc] Certaines informations sur les systèmes d'exploitation ne sont importées que dans le champ de description<br>.
[Bug][JDisc] Les objets sans aucun détail ne sont pas importés via JDisc<br>.
[Bug][JDisc] L'utilisation d'i-doit >=1.16.3 avec une version plus ancienne de JDisc (<5022) échoue à cause d'une table JDisc manquante "ipdnsserverconfiguration"<br>
[Bug][System settings] La configuration du groupe LDAP par défaut ne se trouve pas dans les paramètres du client mais dans les paramètres du cross-system sous System Parameters<br>.
[Bug][Categories] ##COUNT## Le porteur de place n'est pas évalué pour les sorties (connexion)<br>
[Bug][Categories] Sélection d'un thème de nom dans la catégorie "connectors" utilise un mauvais défaut<br>
[Bug][Categories] La connexion des ports logiques n'est pas sauvegardée<br>
[Bug][Categories] Categories manquantes à sélectionner pour la page d'aperçu<br>
[Bug][Categories] Bouton de purge dans la catégorie "location" non disponible<br>
[Bug][Categories] Le bouton "Purge" s'exécute sans requête de sécurité<br>
[Bug][Categories] Dans la catégorie "Cabling" > "connectors", les ID des objets sont affichés à côté des noms de câbles<br>.
[Bug][Custom categories] Si la valeur d'un champ Oui-Non d'une catégorie définie par l'utilisateur est modifiée via la page d'aperçu, la valeur n'est pas sauvegardée<br>.
[Bug][Custom categories] Les valeurs Dialog+ ne sont pas identifiées par la catégorie<br>.
[Bug][Custom categories] La valeur par défaut des champs Oui/Non est également affichée en mode affichage.<br>
[Bug][Custom categories] Impossible de modifier la gestion des champs YES/No dans les catégories définies par l'utilisateur<br>.
[Bug][CMDB settings] Dans la catégorie Services, l'alias d'attribut de dialogue n'est pas accessible via l'Admin de dialogue<br>.
[Bug][CMDB settings] Ajouter une option à la configuration du navigateur d'objets pour limiter les types d'objets créables<br>.
[Bug][Dashboard] La date n'est pas affichée en français sur le widget Dashboard > Welcome<br>
[Bug][Code (interne)] Les mots de passe sauvegardés ne peuvent plus être délivrés<br>.
[Bug][Code (interne)] La liste des objets ne se charge pas si un objet a une '(apostrophe) dans son nom<br>.
[Bug][Code (internal)] Les apostrophes ne sont pas évacuées<br>
[Bug][Code (interne)] Extension de catégories existantes avec des attributs via un add-on les données ne sont pas stockées<br>
[Bug][Code (internal)] Les attributs des catégories existantes ne sont pas correctement fusionnés lorsqu'ils sont étendus via un add-on<br>.
[Bug][Update] La mise à jour vers une version majeure ne devrait pas être possible (>=1.16.1 > 1.17.1)<br>
[Bug][CSV Import] CSV Import : importation des versions du système d'exploitation via la catégorie système d'exploitation<br>
[Bug][Gestionnaire de rapports] La table isys_user_session peut être lue par le rapport SQL<br>.
[Bug][Gestionnaire de rapports] Le rapport affiche des attributs incorrects pour la catégorie "Périphériques gérés"<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : Utiliser Installed on -> Operating system comme condition génère un message d'erreur SQL<br>.
[Bug][Authorization system] En définissant un rôle dans les affectations de contact, l'objet est ouvert si les droits sont insuffisants<br>
[Bug][OCS] OCS Import : Si des catégories multi-valeurs sont importées, il y a des entrées en double<br>.
[Bug][Validation] La validation des champs uniques Dialog Plus ne permet pas d'éditer l'entrée Multi-Value<br>
[Bug][CMDB] Dans la catégorie Câblage > Connecteurs, la valeur configurée pour le "Schéma de nommage des paires de sortie" n'est pas prise en compte<br>.
[Bug][LDAP] Message d'erreur manquant si le chemin vers le .ini ou le nom de fichier n'est pas correctement saisi<br>.
[Bug][List editing] Tri pour l'adresse IPv4 impossible dans l'édition de la liste<br>
[Bug][Logbook] La création d'un client crée des entrées CPU et mémoire dans le logbook<br>.