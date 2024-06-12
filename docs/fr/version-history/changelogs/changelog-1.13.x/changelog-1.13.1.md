# Journal des modifications 1.13.1

[Tâche][Édition de liste] Plusieurs RAIDS matériels apparaissent dans la liste d'édition alors qu'aucun n'a été créé  
[Amélioration][Gestionnaire de rapports] Les rapports devraient toujours contenir une constante  
[Amélioration][Gestionnaire de rapports] Propriétés virtuelles et dynamiques dans les conditions du Gestionnaire de rapports  
[Amélioration][Catégories] Nouvelle commande : Restaurer les données de catégorie des références perdues  
[Amélioration][Importation de câblage] L'importation de câblage ne s'effectue pas comme prévu.  
[Amélioration][Importation] Identification des objets lors des importations CSV via IMEI  
[Amélioration][Code (interne)] Effacer les informations d'identification de l'utilisateur via une commande  
[Amélioration][Installation/Mise à jour/Licence basée sur la console] Installation basée sur la console des modules complémentaires i-doit  
[Amélioration][Explorateur CMDB] Affichage de la direction des relations dans l'Explorateur CMDB  
[Amélioration][Outils système] Commande pour convertir le moteur des tables MySQL en INNODB  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Le titre de la catégorie "affectation de logiciel" est également affiché dans l'attribut "système d'exploitation" de la catégorie "système d'exploitation"  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Erreur de sortie des MultiValues groupés lors de l'exportation CSV/TXT  
[Bogue][Gestionnaire de rapports] L'attribut "variante" n'affiche que le titre dans la sortie du rapport  
[Bogue][Gestionnaire de rapports] Attributs manquants de la catégorie "Net" dans le Gestionnaire de rapports pour définir des conditions  
[Bogue][Gestionnaire de rapports] L'attribut "Alias" n'est pas disponible dans le Gestionnaire de rapports  
[Bogue][Gestionnaire de rapports] L'attribut "nom d'hôte" de la catégorie "surveillance" n'est pas disponible dans le gestionnaire de rapports  
[Bogue][Gestionnaire de rapports] Affichage simultané du système d'exploitation et de l'affectation de logiciel dans le rapport non possible  
[Bogue][Gestionnaire de rapports] Le rôle des personnes n'est pas affiché dans le Gestionnaire de rapports.  
[Bogue][Gestionnaire de rapports] Sous-sélections pour les groupes dynamiques  
[Bogue][Gestionnaire de rapports] Créer des rapports avec la catégorie Journal des modifications comme condition  
[Bogue][Gestionnaire de rapports] Combinaison du titre de l'objet et de l'adresse principale de l'hôte dans le gestionnaire de rapports entraîne une sortie multiple du même objet  
[Bogue][Gestionnaire de rapports] Le rapport variable entraîne une erreur SQL  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : La catégorie "Affectation de service" ne renvoie pas de valeurs vides  
[Bogue][Gestionnaire de rapports] Rapports : La combinaison de propriété dynamique et de condition entraîne une erreur SQL  
[Bogue][Gestionnaire de rapports] Le rapport pour "Inséré à" utilise une mauvaise table de base de données  
[Bogue][Gestionnaire de rapports] Il n'est pas possible d'afficher des objets sans affectation dans le gestionnaire de rapports  
[Bogue][Catégories] Erreur SQL lorsque la catégorie "Réseau de couche 3" est triée par "Réseau avec suffixe".  
[Bogue][Catégories] La condition "Normal" peut toujours être sélectionnée dans la catégorie "Général"  
[Bogue][Catégories] La catégorie Facteur de forme ne stocke aucune donnée dans l'aperçu.  
[Bogue][Catégories] L'arrière d'un châssis n'est pas présenté dans la vue en rack  
[Bogue][Catégories] Le dialogue de la catégorie port plus le champ ne fonctionne pas avec la catégorie de câblage  
[Bogue][Catégories] Révision de la catégorie des adresses d'hôte  
[Bogue][Catégories] Gestion améliorée de l'édition de l'unité de hauteur lors de l'échange d'objets entre l'avant et l'arrière d'un rack  
[Bogue][Catégories] Formatage correct de la page d'aperçu lors de l'affichage de rapports et de catégories  
[Bogue][Catégories] La catégorie "journal des modifications de service" est même dupliquée lorsqu'elle n'est pas sélectionnée pour duplication  
[Bogue][Catégories] Modifier les attributs dans les listes d'objets a supprimé un attribut incorrect dans le filtre par défaut  
[Bogue][Catégories] Les noms de port longs sont tronqués dans le navigateur de ports  
[Bogue][Catégories] Les fichiers de la catégorie d'image d'objet sont visibles pour tous les locataires  
[Bogue][Catégories] La colonne "Organisation attribuée" ne affiche aucune donnée.  
[Bogue][Catégories] Les relations entre les objets ne sont pas affichées dans la vue en liste.  
[Bogue][Catégories] Mauvaise valeur par défaut de la catégorie "adresse d'hôte" dans l'attribut "Affectation d'adresse"  
[Bogue][Catégories] Catégorie : "Service" Sous-catégorie "Type de service" l'attribut "Type" n'est pas chargé correctement  
[Bogue][Catégories] Le titre des objets dans les emplacements n'est pas affiché dans la catégorie "Racks"  
[Bogue][Catégories] Le type de champ de base de données pour isys_validation_config.isys_validation_config__json a été modifié  
[Bogue][Catégories] Vue en rack : Les châssis de lames ne sont pas affichés verticalement  
[Bogue][Catégories] Affichage du menu déroulant pour choisir l'état d'entrée dans la catégorie "membres de cluster"  
[Bogue][Catégories] Désélectionner des attributs dans les listes d'objets supprime les valeurs dans le filtre standard  
[Bogue][Catégories] L'heure/la date à "Importation initiale" dans la catégorie "Identifiant personnalisé" n'est pas affichée correctement  
[Bogue][Catégories] Entrées de catégorie en double  
[Bogue][OCS] Les capacités sont toujours importées en tant qu'octet dans l'importation OCS  
[Bogue][OCS] Les capacités des périphériques SNMP ne sont pas mises à jour correctement par l'importation OCS  
[Bogue][Listes] Message d'erreur SQL dans la liste d'objets  
[Bogue][Listes] Le tri du chemin d'emplacement utilise l'emplacement racine pour le tri  
[Bogue][Listes] Le champ de description est manquant en tant qu'attribut dans les listes de catégories Configuration pour la catégorie "Adresses e-mail"  
[Bogue][Listes] La configuration de la liste d'objets ne reflète que les attributs sélectionnés pour d'autres utilisateurs et la configuration par défaut  
[Bogue][Listes] L'emplacement logique d'un objet n'est pas affiché dans la liste d'objets  
[Bogue][Listes] Le paramètre de longueur maximale des chemins d'emplacement ne fonctionne pas avec les listes d'objets  
[Bogue][Listes] Tri des chemins d'emplacement raccourcis dans les listes d'objets  
[Bogue][Listes] Affichage des débuts et fins liés des contrats dans les listes d'objets  
[Bogue][Listes] Listes d'objets : Ajouter des attributs personnalisés  
[Bogue][Listes] L'adresse e-mail est toujours affichée en tant que courrier électronique HTML dans les listes d'objets  
[Bogue][Check_MK] Paramètre manquant pour définir le délai d'attente de Livestatus  
[Bogue][LDAP] Synchroniser tous les groupes LDAP lorsque la pagination est activée  
[Bogue][LDAP] Gestion améliorée des utilisateurs désactivés/déplacés provenant d'AD  
[Bogue][LDAP] Ne pas afficher l'icône d'e-mail si LDAP a défini le courrier comme filtre  
[Bogue][CMDB] Trier par modèle  
[Bogue][CMDB] Les capacités "Bit" et "Térabit" manquent  
[Bogue][CMDB] La création de périphériques assignés à un châssis de lames provoque un écran blanc  
[Bug][Édition de liste] Activer les SLA édités  
[Bug][Édition de liste] Modifier la catégorie de service dans l'édition de liste  
[Bug][Édition de liste] Libérer les connexions dans la catégorie d'attribution de service.  
[Bug][Édition de liste] Édition de liste : Le filtre pour le navigateur d'objets ne fonctionne pas toujours  
[Bug][Édition de liste] Édition de liste : Détacher d'un emplacement impossible  
[Bug][Édition de liste] Le contrôleur n'est pas sélectionnable pour tous les objets dans l'édition de liste  
[Bug][Édition de liste] Édition de liste : Il n'est pas possible d'attribuer des postes de travail dans la catégorie "poste de travail attribué"  
[Bug][Édition de liste] Sous-catégories vides dans l'édition de liste  
[Bug][Édition de liste] L'édition multiple affiche des catégories sans attributs  
[Bug][Édition de liste] Enregistrer une adresse d'hôte génère un message d'erreur  
[Bug][Édition de liste] Laisser les champs exclus de l'édition de liste exclus après l'enregistrement  
[Bug][Import] Import CSV : Attribution de licences  
[Bug][Import] Pour les réseaux de couche 2, le champ = Attribution de réseau de couche 3 est manquant pour une importation.  
[Bug][Import] L'attribution d'appareils de la catégorie Emplacements (Châssis de commutateur) ne peut pas être attribuée dans l'importation csv.  
[Bug][Import] Importer des variantes de systèmes d'exploitation  
[Bug][Import] Catégories d'importation OCS  
[Bug][Import] L'édition d'un profil d'objet ne fonctionne pas comme il se doit  
[Bug][Objets] Erreur "le nom doit être un objet valide ou une chaîne" lors de l'accès aux objets  
[Bug][Objets] Catégorie "Appareils virtuels" attribut "Ressource hôte" affiche incorrectement "groupes de ports de commutation"  
[Bug][Objets] Les modifications des champs DialogPlus ne sont pas correctement affichées  
[Bug][Import CSV] Option pour écraser les entrées existantes dans les catégories à valeurs multiples écrase également les nouvelles entrées importées  
[Bug][Import CSV] L'import CSV crée également des entrées de journal, si le contenu n'est pas modifié  
[Bug][Import CSV] Import CSV : L'attribut "Machine virtuelle" de la catégorie "Machine virtuelle" n'est pas défini correctement  
[Bug][Paramètres système] L'administration redirige vers un site vide si Check_MK2 a été désactivé  
[Bug][Paramètres système] Refuser l'accès non authentifié à /upload/images  
[Bug][Paramètres système] Erreur d'affichage dans la gestion des droits  
[Bug][Paramètres système] L'éditeur HTML modifie l'énumération du contenu  
[Bug][Outils système] Amélioration de la correction d'emplacement  
[Bug][Centre d'administration] La commande GRANT lors de la création de locataire via la console ne tient pas compte de localhost  
[Bug][Centre d'administration] Lors de la combinaison des licences de locataire et d'abonnement, certains modules complémentaires ne sont pas correctement licenciés  
[Bug][Centre d'administration] Les licences de locataire "en cours d'utilisation" et "libres" ne tiennent pas compte des locataires désactivés et affichent une valeur incorrecte pour les licences de locataire libres  
[Bug][Notifications] Le numéro de notification n'est pas réinitialisé  
[Bug][Notifications] Erreur de requête de notification avec le paramètre %notifications__threshold_unit%  
[Bug][Notifications] Notifier un groupe de contacts  
[Bug][Installation de licence (i-doit)] La limite pour les locataires utilise un comptage incorrect lors de la licence  
[Bug][Code (interne)] Effectuer une migration correcte des propriétés pour la catégorie Attribution de logiciel  
[Bug][Code (interne)] La condition Général > Description dans le Gestionnaire de rapports n'est plus un champ de texte.  
[Bug][Code (interne)] Erreur de recherche HTTP 500 lorsqu'un module complémentaire créé par l'utilisateur est désactivé  
[Bug][Code (interne)] Lors de l'échange des sorties et des entrées, la fenêtre est affichée vide.  
[Bug][Code (interne)] Vérifier les paramètres système pour un JSON valide  
[Bug][Système d'autorisation] Après qu'un objet a été archivé, il n'est plus affiché  
[Bug][Système d'autorisation] Archiver/supprimer uniquement possible, si l'utilisateur a des droits sur tous les objets du type d'objet correspondant  
[Bug][Système d'autorisation] Les autorisations d'emplacement ne montrent pas les objets archivés/supprimés dans les listes d'objets  
[Bug][Système d'autorisation] Vérification des droits pour les fichiers dans le navigateur de fichiers  
[Bug][Validation] Affichage de l'objet non possible si la validation de catégorie est active  
[Bug][Validation] Valider les objets nouvellement créés  
[Bug][Édition de masse] L'attribution de logiciel efface l'attribution de système d'exploitation lors du changement de masse  
[Bug][Édition de masse] Déconnecter le champ "Acheté chez :" dans la catégorie comptabilité par le changement de masse.  
[Bug][Édition de masse] Remplacer automatiquement les titres d'objet via un changement de masse avec %COUNTER:11#6%.  
[Bug][Édition de masse] Erreur lors des actions de changement de masse  
[Bug][Édition de masse] La création d'un modèle pour un changement de masse génère un écran blanc  
[Bug][Catégories personnalisées] Le Gestionnaire de rapports ajoute des espaces réservés inutiles si la catégorie est une catégorie personnalisée  
[Bug][Catégories personnalisées] La vue d'impression des rapports variables est incorrecte  
[Bug][My-doit] Les commandes attribuées/créées ne sont pas affichées dans My-doit  
[Bug][Console] Fuite de mémoire lors de l'archivage du journal via la console i-doit  
[Bug][Journal] Les entrées longues du journal déplacent les autres colonnes hors de la zone d'affichage  
[Bug][Journal] Contenu incorrect dans le journal lors du changement de la sélection pour l'attribution d'objet  
[Bug][Journal] Transmettre les valeurs modifiées au journal  
[Bug][Événements] Lors de l'utilisation de /main/ comme répertoire d'installation de i-doit, les événements ne sont pas accessibles  
[Bug][Relations] Relations : Catégorie "Connexion Wan" Attribut : "réseaux connectés" aucune relation n'est créée  
[Bug][Relations] La relation de la catégorie Attribution de contact est supprimée lors de l'archivage.  
[Bug][JDisc] JDISC : Importation des boucles locales et des ports logiques non possible  
[Bug][JDisc] Importation JDISC : Le changement d'adresse IP n'est pas affiché correctement dans le journal  
[Bug][JDisc] Journal : Entrées vides via l'importation JDisc  
[Bug][H-Inventory] Importation H-Inventory : Les relations d'attribution de logiciel ne sont pas supprimées correctement  
[Bug][Modèles] Le modèle par défaut est parfois ignoré pour les catégories personnalisées  
[Bug][Modèles] Le placeholder de champ %COUNTER% ne fonctionne pas correctement dans les modèles par défaut  
[Bug][Explorateur CMDB] Boucle lors de la création de connexions dans l'explorateur cmdb  
[Bug][Explorateur CMDB] L'explorateur CMDB exporte des données GraphML incorrectes  
[Bug][Explorateur CMDB] L'explorateur CMDB exporte des arêtes GraphML dupliquées  
[Bug][Recherche] La recherche bascule la sélection du groupe de type d'objet  
[Bug][Recherche] Correction d'un blocage dans l'index de recherche lors de l'utilisation de l'API  
[Bug][Recherche] Recherche globale des réseaux de couche 3 via IP  
[Bug][Recherche] Formatage correct du résultat de la recherche  
[Bug][Installation] Les fichiers et répertoires dans temp/ sont accessibles en écriture par tout le monde  
[Bug][Installation] Suppression des vérifications des extensions non nécessaires pour utiliser i-doit  
[Bug][API] Avertissement PHP lors de l'enregistrement d'un périphérique de stockage sans disques durs connectés  
[Bug][API] La lecture de la catégorie WAN via l'API ne renvoie pas toujours un ID d'objet  
[Bug][API] Les propriétés avec unités ne sont pas cohérentes lorsqu'elles sont récupérées via l'API  
[Bug][Codes QR] La configuration globale des codes QR est écrasée  
[Bug][Paramètres utilisateur] Le paramètre de format numérique n'a pas d'effet  
[Bug][Paramètres CMDB] Journalisation configurable  