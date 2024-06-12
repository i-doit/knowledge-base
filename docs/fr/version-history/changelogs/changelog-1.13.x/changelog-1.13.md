# Journal des modifications 1.13

[Tâche][Édition de liste] Plusieurs RAIDS matériels apparaissent dans la liste d'édition alors qu'aucun n'a été créé  
[Amélioration][Code (interne)] Mise à jour de sécurité pour les bibliothèques externes  
[Amélioration][Code (interne)] i-doit ne prend plus en charge PHP 5.6, la configuration minimale est PHP 7  
[Amélioration][Code (interne)] Vérifier les catégories attribuées en double après l'installation de l'extension  
[Amélioration][LDAP] Synchroniser les attributs objectSid et objectGUID via LDAP  
[Amélioration][Mise à jour] Améliorer le programme de mise à jour i-doit  
[Amélioration][Installation] Compatibilité avec PHP 7.3  
[Amélioration][Installation] Ajouter le support pour les versions plus récentes de MariaDB  
[Amélioration][Listes] Nouvel attribut "contact + rôle" pour les listes d'objets - merci à Christian Haase  
[Amélioration][Service] Services : Affichage des services pour d'autres types d'objets dans l'arborescence du menu  
[Amélioration][Installation/ Mise à jour / Licence basées sur la console] Gestion basée sur la console des locataires i-doit  
[Amélioration][Installation/ Mise à jour / Licence basées sur la console] Licence basée sur la console d'i-doit  
[Amélioration][Installation/ Mise à jour / Licence basées sur la console] Gestion basée sur la console des extensions i-doit  
[Changement][Catégories] Les champs Multi Dialog Plus ne passent pas à la ligne suivante  
[Bogue][Catégories] Les données de la catégorie Surveillance ne peuvent pas être enregistrées.  
[Bogue][Catégories] La catégorie Facteur de forme ne stocke aucune donnée dans l'aperçu.  
[Bogue][Catégories] Les profils enregistrés du QCW sont visibles dans tous les clients.  
[Bogue][Catégories] Les attributs archivés sont affichés dans la vue en liste du type d'objet  
[Bogue][Catégories] Ajouter l'attribut "Taux de téléphone" à la catégorie Carte SIM dans l'administration du dialogue  
[Bogue][Catégories] Changer le type de champ de base de données pour les clés de licence pour permettre des clés de licence plus longues  
[Bogue][Catégories] L'option de sélection d'instance de base de données propose également des instances archivées/supprimées pour la sélection  
[Bogue][Catégories] Tri et filtrage de l'état en direct  
[Bogue][Catégories] Le filtre standard de l'état CMDB ne peut pas être sélectionné pour être affiché dans la liste de la catégorie de valeurs multiples "affectation de logiciel"  
[Bogue][Catégories] Vérification unique de chaque catégorie lors de l'installation de l'extension pro  
[Bogue][Catégories] Le survol dans les catégories ne se charge qu'après le rafraîchissement de la page  
[Bogue][Catégories] FQDN non utilisé dans la vue d'impression  
[Bogue][Catégories] Afficher les objets attribués dans la vue en liste pour les groupes de personnes  
[Bogue][Catégories] Filtrer par type de contrat  
[Bogue][Catégories] Catégorie "Carte SIM", aucun zéro initial ne peut être ajouté/supprimé sur la page d'aperçu  
[Bogue][Édition de liste] Créer de nouvelles entrées de catégorie pour tous les objets dans l'édition de liste  
[Bogue][Édition de liste] La sous-catégorie "Installation" est manquante dans l'édition de liste  
[Bogue][Édition de liste] Erreur HTTP 500 / page vide lors de l'appel de l'édition de liste lorsque l'extension Nagios a été désinstallée  
[Bogue][Édition de liste] Édition de liste : La sélection du calendrier se déplace en dehors de la zone visible  
[Bogue][Édition de liste] Édition de liste de la catégorie "consommateur d'énergie"  
[Bogue][Édition de liste] L'emplacement logique ne peut pas être enregistré via l'édition de liste  
[Bogue][Listes] Le filtre pour les objets est manquant  
[Bogue][Listes] Archiver une instance de base de données fait que certains attributs du schéma de base de données ne sont pas affichés dans la liste d'objets pour "schéma de base de données"  
[Bogue][Listes] La catégorie "Affectation de contrat" est affichée vide dans la liste par défaut des listes d'objets  
[Bogue][Listes] Le filtrage n'est pas possible avec l'attribut Machine virtuelle de la catégorie Machine virtuelle  
[Bogue][Listes] Listes d'objets : l'attribut "Description" de la catégorie spécifique "Organisation" n'est pas enregistré  
[Bogue][Listes] Les caractères spéciaux dans l'option de filtrage pour les champs de dialogue plus provoquent la fourniture d'un résultat vide  
[Bogue][Listes] Les titres des objets ne sont plus visibles après que l'objet a été archivé/supprimé  
[Bogue][Listes] Le numéro de version et la variante ne doivent pas être affichés dans la configuration des listes d'objets  
[Bogue][Listes] Créer des valeurs Dialog+ via le filtre dans la liste d'objets  
[Bogue][Listes] Les objets ne sont pas affichés dans la liste d'objets  
[Bogue][Listes] Le filtre par défaut "machine virtuelle > machine virtuelle" est ignoré dans la liste d'objets  
[Bogue][OCS] Import OCS : Lors de l'importation d'un périphérique SNMP, le système d'exploitation n'est pas importé correctement  
[Bogue][OCS] IMPORTATION OCS : La catégorie "Système d'exploitation" est écrasée lors d'une importation  
[Bogue][OCS] L'importation des cœurs de CPU à partir de l'inventaire OCS a échoué  
[Bogue][Journal] Description / opération incorrecte dans la récupération du journal  
[Bogue][Journal] Journal : Les catégories attribuées ne créent pas une entrée de journal pour l'objet attribué  
[Bogue][Import CSV] Les champs sont effacés lors de l'importation CSV, même s'ils ne font pas partie de l'importation  
[Bogue][Import CSV] Les objets sont ignorés lors de l'importation CSV  
[Bogue][Import CSV] Importation CSV : L'importation via CLI écrase les objets existants  
[Bogue][Import CSV] Le numéro de version (Catégorie : Affectation de logiciel) ne peut pas être rempli via l'importation CSV  
[Bogue][Import CSV] L'importation de contenu dans les champs de dialogue via l'importation CSV est sensible à la casse  
[Bogue][Import] La société d'une personne est vidée lors de l'importation CSV.  
[Bogue][Mise à jour] Vérification manquante des extensions PHP dans le programme de mise à jour GUI  
[Bogue][Code (interne)] La sortie dans Infobox peut bloquer l'utilisateur dans i-doit  
[Bogue][Code (interne)] Indexation de la catégorie C__CATG__NET_LISTENER  
[Bogue][Code (interne)] Lors de l'accès à i-doit, index.php ne peut pas être trouvé  
[Bogue][Code (interne)] Enregistrer une carte SIM sans carte jumelle "numéro de carte" entraîne une erreur SQL  
[Bogue][Code (interne)] De nombreux liens sont dirigés vers d'anciennes adresses `http`  
[Bogue][Code (interne)] idoit-rights.sh tente de définir des droits sur des dossiers qui ne sont pas disponibles  
[Bogue][Code (interne)] Table de dialogue+ inutile "isys_catg_cpu_frequency"  
[Bogue][Catégories personnalisées] Mauvaises performances lors de l'enregistrement/mise à jour des catégories à valeurs multiples  
[Bogue][Catégories personnalisées] La vue d'impression des rapports dans les catégories personnalisées est incorrecte  
[Bogue][Catégories personnalisées] La purification des données écrase la barre d'outils HTML.  
[Bogue][Catégories personnalisées] Les rapports sont affichés pour la sélection des attributs dans les catégories personnalisées  
[Bogue][LDAP] Synchronisation LDAP : Importation d'organisation incorrecte  
[Bogue][LDAP] Authentification SSO lorsque la spécification complète de index.php n'est pas possible  
[Bogue][LDAP] Gestion de la connexion LDAP  
[Bogue][LDAP] Sous-catégorie "Données principales" Fournir l'attribut "Civilité" pour la synchronisation LDAP  
[Bogue][LDAP] Synchronisation LDAP : Affectation de contact / Les objets attribués ne sont pas archivés lorsque le contact est archivé  
[Bogue][LDAP] Configurer LDAP via API  
[Bogue][Aperçu d'impression] Aperçu avant impression sur les navigateurs d'objets avec sélection multiple de catégories personnalisées cassé  
[Bogue][Aperçu d'impression] L'aperçu avant impression affiche du code HTML  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Erreur de sortie des MultiValues groupés lors de l'exportation PDF  
[Bogue][Gestionnaire de rapports] Les attributs de la catégorie "Postes de travail attribués" ne peuvent pas être utilisés dans le gestionnaire de rapports  
[Bogue][Gestionnaire de rapports] Sous-catégorie "Connexions" Attribut "Sous-catégorie" Connexions "Attribut" Entrée / Sortie "pour le gestionnaire de rapports prêt à l'emploi" pour le gestionnaire de rapports prêt à l'emploi  
[Bogue][Gestionnaire de rapports] L'attribut "passerelle standard pour le réseau" ne peut pas être utilisé dans le gestionnaire de rapports en tant que condition  
[Bogue][Paramètres CMDB] Limiter la vue via les droits n'affecte pas le navigateur d'emplacement  
[Bogue][Version ouverte] Erreur Console.php  
[Bogue][Installation] Lien mort dans la configuration  
[Bogue][JDisc] Erreur d'importation JDisc : "Erreur CMDB : Le type de relation ne doit pas être vide."  
[Bogue][Outils système] Les objets de relation renouvelés ne peuvent pas être exécutés  
[Bogue][H-Inventory] Le profil de correspondance d'objet n'est pas appliqué pour H-Inventory  
[Bogue][Request Tracker] Request Tracker : Les constantes de langue ne sont pas utilisées/traduites  
[Bogue][Request Tracker] Request Tracker : Dans l'onglet "Tous les objets", tous les objets sont sélectionnés.  
[Bogue][Validation] Validation incorrecte sur le numéro d'inventaire  
[Bogue][Recherche] La recherche approfondie automatique ne fonctionne pas, lorsque la recherche normale n'a pas trouvé de résultats  
[Bogue][Système d'autorisation] Interdire aux utilisateurs d'attribuer des centres de travail  
[Bogue][Relations] Affichage correct des relations dans l'état archivé/supprimé  
[Bogue][Installation/ Mise à jour / Licence basées sur la console] L'utilisation de la commande "system-checkforupdates" affiche des constantes  
[Bogue][Vue de câblage] Activer le défilement horizontal pour l'aperçu dans le câblage >> connecteurs  
