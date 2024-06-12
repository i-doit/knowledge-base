# Journal des modifications 1.15.1

[Amélioration][LDAP] Si un utilisateur se connecte via LDAP, le cache d'authentification doit également être effacé  
[Amélioration][Export] Export XML : étendre la sélection des catégories personnalisées pour l'exportation  
[Amélioration][OCS] Importation OCS : recalculer le type d'objet des CI en fonction de la configuration des balises  
[Erreur][JDisc] Filtrage par adresse hôte impossible pour l'importation JDisc avec IPv6  
[Erreur][JDisc] Le bon réseau de niveau 3 n'est pas attribué lors de l'importation JDisc.  
[Erreur][JDisc] La date/heure de "Dernière mise à jour" dans la catégorie "Identifiant personnalisé" ne doit être mise à jour que par l'importation JDISC  
[Erreur][Outils système] XAMPP : Outils système > Cache / Base de données le chemin de mysqldump.exe n'est pas trouvé  
[Erreur][Gestionnaire de rapports] Erreur lors de l'utilisation de rapports variables dans des catégories personnalisées  
[Erreur][Gestionnaire de rapports] L'attribut Cartes SIM attribuées (Cartes SIM attribuées) ne peut pas référencer des objets  
[Erreur][Gestionnaire de rapports] Rapport : Pour la catégorie fichiers, l'attribut objets attribués est manquant  
[Erreur][Gestionnaire de rapports] La condition EST NULL pour l'emplacement > l'emplacement est manquante dans le rapport  
[Erreur][Gestionnaire de rapports] Le Gestionnaire de rapports n'affiche pas tous les objets avec des systèmes d'exploitation vides  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : L'attribut "Connecté au port (Réseau -> Ports logiques)" génère une erreur SQL  
[Erreur][Gestionnaire de rapports] Les rapports ne sont plus affichés après le transfert vers une nouvelle instance  
[Erreur][Gestionnaire de rapports] Seuls les liens utilisant http/https sont générés comme hyperlien dans les rapports  
[Erreur][Gestionnaire de rapports] Le texte de la sortie est disponible sous l'élément Options avancées  
[Erreur][Journal] Le journal ne peut pas être archivé dans une base de données distante  
[Erreur][Journal] Lors de la suppression des affectations, aucune information d'objet n'est créée dans les catégories arrière  
[Erreur][Journal] Le journal ne stocke pas le nom de l'objet  
[Erreur][Journal] Afficher plus de détails pendant l'archivage du journal  
[Erreur][Importation CSV] Le mot de passe des catégories de mots de passe ne peut pas être importé via l'importation CSV  
[Erreur][Importation CSV] Erreur lors de l'importation des informations de stockage (appareil) - Attribution des fabricants -> modèle  
[Erreur][Importation CSV] Erreur lors de l'importation d'informations dans des catégories personnalisées via l'importation CSV  
[Erreur][Importation CSV] Changer le type d'objet global dans l'importation csv efface tout le mappage  
[Erreur][LDAP] La synchronisation Open LDAP / Novell Directory Service ne fonctionne pas  
[Erreur][Catégories] La catégorie Racks dans les salles ne peut pas afficher les racks s'il y a des châssis de commutation/lame avec des emplacements  
[Erreur][Catégories] Dans la liste d'objets Application, le champ Titre de la catégorie spécifique Applications>Variante est manquant  
[Erreur][Catégories] La sortie d'un champ oui/non avec rien sélectionné "-" n'est pas correcte  
[Erreur][Catégories] Les installations archivées sont affichées dans la catégorie Application > Installation  
[Erreur][Catégories] La propriété "catégorie" de la catégorie "Journal" n'est pas sélectionnable dans la condition et la sélection lors de la création d'un nouveau rapport  
[Erreur][Catégories] Le contenu de la catégorie "Mots de passe" n'est pas indexé lors de la recherche  
[Erreur][Catégories] Dans la vue en liste des réseaux de niveau 3, les adresses IP des objets archivés sous les adresses attribuées sont comptées  
[Erreur][Catégories] Le tri des ports dans la sélection dans la catégorie "adresse hôte" n'est pas alphabétique  
[Erreur][Catégories] Le lien dans la catégorie "ports logiques" ne fonctionne pas  
[Erreur][Code (interne)] La récupération du journal est extrêmement lente en utilisant sql_calc_found_rows lorsqu'il y a de nombreux enregistrements  
[Erreur][Code (interne)] Certains liens conduisent à la déconnexion de l'utilisateur  
[Erreur][Code (interne)] Le fichier inventory.zip ne peut pas être téléchargé via l'interface web i-doit  
[Erreur][Code (interne)] Pas de redirection en cliquant sur le bouton Annuler - Bouton sans fonction  
[Erreur][Code (interne)] Le tri alphanumérique ne trie pas correctement  
[Erreur][Code (interne)] LC__UNIVERSAL__OTHER n'est pas traduit  
[Erreur][Code (interne)] Liste d'objets : L'abréviation HE (unités de hauteur) n'est pas traduite  
[Erreur][Objets] Les fichiers n'ont pas été entièrement migrés 1.13.x > 1.14  
[Erreur][Paramètres utilisateur] Le tri dans la configuration des listes de catégories n'est pas possible  
[Erreur][Système d'autorisation] Les objets de type poste de travail sont affichés comme des emplacements dans le système d'autorisation  
[Erreur][Système d'autorisation] La ligne de dernière modification montre également la dernière modification aux utilisateurs sans droits  
[Erreur][Système d'autorisation] Les utilisateurs avec des droits de lecture peuvent exécuter des rapports dans le navigateur d'objets  
[Erreur][H-Inventory] Erreur lors de l'importation de fichiers XML d'inventaire h  
[Erreur][Documents] Message d'erreur SQL après l'appel de l'aperçu des documents  
[Erreur][Édition de liste] Édition de liste pour la catégorie "Port" non accessible dans la catégorie  
[Erreur][Édition de liste] L'appartenance à un groupe ne peut pas être détachée via l'édition de liste  
[Erreur][Édition de liste] Erreur lors de l'attribution d'un réseau de niveau 2 à un port en édition de liste  
[Erreur][Configuration du type d'objet] Les icônes sont mal dimensionnées dans la configuration du type d'objet  
[Erreur][Configuration du type d'objet] La palette de couleurs de la couleur d'objet dans la configuration du type d'objet ne peut pas être utilisée après la création via QCW  
[Erreur][Modèles] Modèle : Les spécifications de temps de la catégorie SLA ne sont pas correctement transférées aux objets créés à partir du modèle  
[Erreur][Importation] L'attribution de "Cartes SIM attribuées > Cartes SIM liées" aux téléphones cellulaires lors de l'importation CSV ne fonctionne pas  
[Erreur][Listes] La liste d'objets plante lorsque l'éditeur HTML d'une catégorie personnalisée est affiché dans la liste d'objets  
[Erreur][Listes] Les membres des groupes de personnes ne peuvent pas être sélectionnés pour être affichés dans les listes d'objets  
[Erreur][Listes] Les modifications des largeurs de colonnes dans les listes d'objets ne sont pas enregistrées  
[Erreur][Listes] La largeur des colonnes est réinitialisée lors de la navigation à travers les pages d'objets  
[Erreur][Listes] La liste d'objets du réseau de niveau 3 "Filtrer dans tous les champs" affiche une liste vide après avoir vidé le filtre  
[Erreur][API] Référence incorrecte pour l'attribution de service via API  
[Erreur][API] L'attribut "modèle" de la catégorie "Stockage" n'est pas inclus dans les résultats  
[Erreur][Centre d'administration] L'édition d'un locataire dans le Centre d'administration réinitialise les licences d'objets attribués  
[Erreur][Catégories personnalisées] Gestionnaire de rapports : Le filtre pour les filtres de cases à cocher n'est pas correct  
[Erreur][Catégories personnalisées] Le contenu HTML des catégories personnalisées est affiché deux fois sur la page de présentation  
[Erreur][Notifications] La notification sur les objets stockés n'est pas envoyée avec une valeur de seuil de 0 ou -1  
[Erreur][Notifications] La mise en forme du texte d'information dans la description d'une notification est défectueuse  
[Erreur][OCS] L'enregistrement de l'importation OCS est enregistré même lorsque la journalisation est désactivée  
[Erreur][Recherche] Recherche : Seuls 0 ou 1 sont affichés comme score  
[Erreur][CMDB] Ne pas connecter l'emplacement racine lors de la création de l'appartenance à un cluster  
[Erreur][CMDB] La constante de langue pour l'emplacement racine ne fonctionne pas partout  
[Erreur][Connecteur de câblage] Le tri dans le navigateur de câblage n'est pas correct  


