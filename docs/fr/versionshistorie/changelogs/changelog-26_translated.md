<!-- TRANSLATED by md-translate -->
# Changelog 26

# Changelog 26

[Task][Code (Internal)]        Security - Path traversal<br>
[Task][Code (Internal)]        Security - Stored XSS<br>
[Task][Code (Internal)]        Integrate/Reintegrate static php code analysis tools to identify logical errors<br>
[Task][Console]                Remove old 'controller' code in favor of 'Commands'<br>
[Task][Console]                Remove usages of old 'interfaces'<br>
[Improvement][Code (Internal)] PHP 8.1 Compatibility<br>
[Bug][JDisc]                   Exported JDisc profile should have the title in its filename<br>
[Bug][JDisc]                   Error when importing logbook with jdisc<br>
[Bug][JDisc]                   Do not remove export/import buttons when deleting jdisc profile<br>
[Bug][Code (Internal)]         Allow user to update custom object types<br>
[Bug][Code (Internal)]         XSS Javascript vulnerability<br>
[Bug][Code (Internal)]         Allow user to change custom category attributes<br>
[Bug][Code (Internal)]         Update description length validation<br>
[Bug][Code (Internal)]         Formfactor in overview causes data sanitation warning when empty<br>
[Bug][Code (Internal)]         Correct re-direction of quicklinks in dashboard<br>
[Bug][Code (Internal)]         LC__UNIVERSAL__MONTS is displayed for Month value in Accounting > Remainder warranty<br>
[Bug][Code (Internal)]         Set default Objecttype sorting to Alphabetically<br>
[Bug][Code (Internal)]         "Remainder warranty" not translating "months" properly from language constant<br>
[Bug][Code (Internal)]         404 Error when opening notifications menu<br>
[Bug][Code (Internal)]         i-doit is misspelled in Administration > tenant management > Rights & Directories<br>
[Bug][Code (Internal)]         Wrong translation for hash for CSV-export delimiter<br>
[Bug][Code (Internal)]         Exported Filename is FQFN when downloading file in object picture category<br>
[Bug][Code (Internal)]         The filemanager can no longer download specific files<br>
[Bug][Code (Internal)]         Set database without overwriting service<br>
[Bug][Custom categories]       Key constraint fails when detaching a contact in a custom category with a object relation field<br>
[Bug][System settings]         Make MySQL 8.0 compatible in the gui<br>
[Bug][API]                     cmdb.category.purge does not work with C__CATG__LOCATION<br>
[Bug][Categories]              Variable report on overview page causes 500 error<br>
[Bug][Categories]              Rearranging racks is not possible when scrolling down<br>
[Bug][Categories]              Path to save is deleted when editing from Backup (assigned Objects)<br>
[Bug][Categories]              If entries in subcategory DBMS from category databases are archived the corresponding entries in the software assignment category are not being archived<br>
[Bug][Categories]              Saving of MedTec category produces "CSRF-Mismatch" error<br>
[Bug][Categories]              500 Error when adding variable report to overview page of an object
[Bug][Categories]              Wrong versions are loaded when multiple Operating systems are assigned
[Bug][Categories]              Change property type of category "Telphone/Fax" from Dialog to Dialog Plus<br>
[Bug][LDAP]                    OpenLDAP search for groups in OU is overwritten by search for users in OU<br>
[Bug][LDAP]                    Allow user to check LDAP connection when editing via list table<br>
[Bug][Logbook]                 The Primary attribute in Contact assignment is not written to the logbook<br>
[Bug][Logbook]                 Multiple entries in Logbook when adding/changing assignments in category "group memberships"<br>
[Bug][Admincenter]             Support button in Admin Center leads to customer portal<br>
[Bug][CSV Import]              The csv import takes a long time because the location fix is executed<br>
[Bug][CSV Import]              Date field from custom categories not displayed in mapping of csv import<br>
[Bug][CMDB]                    Placeholder helper does not display object specific placeholders when category is not saved<br>
[Bug][CMDB]                    The user is not able to create a "Software assignment" without filling in the "Installed at" field<br>
[Bug][CMDB]                    CSRF Error while saving custom category<br>
[Bug][Lists]                   Allow user to filter for custom date fields<br>
[Bug][Application Redesign]    Rights for locations not readable<br>
[Bug][Templates]               using a template with categorie password with a empty password prevents objects to be created from the template<br>
[Bug][List editing]            Do not replace version/variant with -1 when software assignment is updated<br>
[Bug][i-doit Licensing 2.0]    A Buyers license is not displayed with no expiration date<br>

[Tâche][Code (Interne)] Sécurité - Traversée de chemin<br>
[Tâche][Code (Interne)] Sécurité - Stored XSS<br>
[Tâche][Code (Interne)] Intégrer/Réintégrer les outils statiques d'analyse de code php pour identifier les erreurs logiques<br>
[Tâche][Console] Supprimer l'ancien code 'contrôleur' en faveur de 'Commandes'<br>
[Tâche][Console] Supprimer les usages des anciennes 'interfaces'<br>
[Improvement][Code (Internal)] Compatibilité PHP 8.1<br>
[Bug][JDisc] Le profil JDisc exporté devrait avoir le titre dans son nom de fichier<br>
[Bug][JDisc] Erreur lors de l'importation du logbook avec jdisc<br>
[Bug][JDisc] Ne pas supprimer les boutons exporter/importer lors de la suppression d'un profil jdisc<br>
[Bug][Code (Internal)] Autoriser l'utilisateur à mettre à jour les types d'objets personnalisés<br>
[Bug][Code (Internal)] Vulnérabilité XSS Javascript<br>
[Bug][Code (Internal)] Permettre à l'utilisateur de modifier les attributs de catégorie personnalisés<br>
[Bug][Code (Internal)] Mise à jour de la validation de la longueur de la description<br>
[Bug][Code (Internal)] Le facteur de forme dans l'aperçu provoque un avertissement d'assainissement des données lorsqu'il est vide<br>
[Bug][Code (Internal)] Correction de la redirection des liens rapides dans le tableau de bord<br>
[Bug][Code (Internal)] LC__UNIVERSAL__MONTS est affiché pour la valeur du mois dans la comptabilité > Remainder warranty<br>
[Bug][Code (Internal)] Définition du tri par défaut du type d'objet en alphabétique<br>
[Bug][Code (Internal)] "Remainder warranty" ne traduit pas correctement "mois" à partir de la constante de langue<br>
[Bug][Code (Internal)] 404 Error when opening notifications menu<br>
[Bug][Code (Internal)] i-doit est mal orthographié dans Administration > gestion des locataires > Droits et répertoires<br>
[Bug][Code (Internal)] Mauvaise traduction pour le hachage du délimiteur d'exportation CSV<br>
[Bug][Code (Internal)] Le nom du fichier exporté est FQFN lors du téléchargement d'un fichier dans la catégorie image d'objet<br>
[Bug][Code (Internal)] Le gestionnaire de fichiers ne peut plus télécharger des fichiers spécifiques<br>.
[Bug][Code (Internal)] Définir la base de données sans écraser le service<br>
[Bug][Custom categories] La contrainte clé échoue lors de la suppression d'un contact dans une catégorie personnalisée avec un champ de relation d'objet<br>.
[Bug][System settings] Make MySQL 8.0 compatible in the gui<br>
[Bug][API] cmdb.category.purge ne fonctionne pas avec C__CATG__LOCATION<br>
[Bug][Categories] Rapport variable sur la page d'aperçu provoque 500 erreurs<br>
[Bug][Categories] Rearranging racks is not possible when scrolling down<br>
[Bug][Categories] Le chemin d'accès à la sauvegarde est supprimé lors de l'édition à partir de la sauvegarde (objets assignés)<br>.
[Bug][Categories] Si les entrées dans les SGBD de sous-catégorie des bases de données de catégorie sont archivées, les entrées correspondantes dans la catégorie d'affectation du logiciel ne sont pas archivées<br>.
[Bug][Categories] La sauvegarde de la catégorie MedTec produit une erreur "CSRF-Mismatch"<br>.
[Bug][Categories] 500 Erreur lors de l'ajout d'un rapport de variable à la page d'aperçu d'un objet
[Bug][Categories] Des versions incorrectes sont chargées lorsque plusieurs systèmes d'exploitation sont assignés
[Bug][Categories] Changement du type de propriété de la catégorie "Téléphone/Fax" de Dialogue à Dialog Plus<br>.
[Bug][LDAP] La recherche OpenLDAP pour les groupes dans OU est écrasée par la recherche pour les utilisateurs dans OU<br>
[Bug][LDAP] Permettre à l'utilisateur de vérifier la connexion LDAP lors de l'édition via la table de liste<br>
[Bug][Logbook] L'attribut primaire dans l'attribution des contacts n'est pas écrit dans le logbook<br>.
[Bug][Logbook] Entrées multiples dans le logbook lors de l'ajout/changement d'affectations dans la catégorie "membres du groupe"<br>
[Bug][Admincenter] Le bouton Support dans Admin Center mène au portail client<br>
[Bug][CSV Import] L'importation csv prend beaucoup de temps car la correction de localisation est exécutée<br>
[Bug][CSV Import] Le champ date des catégories personnalisées n'est pas affiché dans le mapping de l'import csv<br>
[Bug][CMDB] L'aide de l'emplacement n'affiche pas les emplacements spécifiques à l'objet lorsque la catégorie n'est pas sauvegardée<br>.
[Bug][CMDB] L'utilisateur ne peut pas créer un "Affectation logiciel" sans remplir le champ "Installé à"<br>.
[Bug][CMDB] Erreur CSRF lors de la sauvegarde d'une catégorie personnalisée<br>
[Bug][Lists] Permettre à l'utilisateur de filtrer les champs de date personnalisés<br>
[Bug][Application Redesign] Droits pour les emplacements non lisibles<br>
[Bug][Templates] utiliser un template avec un mot de passe de catégorie avec un mot de passe vide empêche les objets d'être créés à partir du template<br>
[Bug][Édition de liste] Ne pas remplacer version/variant par -1 lors de la mise à jour de l'assignation du logiciel<br>
[Bug][i-doit Licensing 2.0] Une licence d'acheteur n'est pas affichée sans date d'expiration<br>