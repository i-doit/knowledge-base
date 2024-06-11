# Journal des modifications 1.14.1

[Amélioration][Objets] ID du locataire dans l'URL et liens vers les objets  
[Amélioration][Validation] Autoriser le collage d'images dans les champs de description  
[Amélioration][Validation] Améliorer la sanitisation des données  
[Amélioration][Outils système] Afficher la différence de temps entre SQL et PHP dans l'aperçu du système  
[Bogue][Paramètres système] Paramètre Expert LDAP-Sync : L'attribution de contact / d'objets attribués est archivée lorsque le contact est archivé  
[Bogue][Paramètres système] Le chemin d'accès est mal recadré  
[Bogue][Centre d'administration] Une commande qui génère un nouveau hachage et migre toutes les données avec lui  
[Bogue][Catégories personnalisées] La gestion ne peut pas être configurée pour le type de champ Lien  
[Bogue][Catégories personnalisées] Changer le titre des catégories personnalisées modifie les noms des constantes  
[Bogue][Gestionnaire de rapports] Message d'erreur SQL lors de la récupération de la carte SIM attribuée via le Gestionnaire de rapports  
[Bogue][Gestionnaire de rapports] Sélectionner le système d'exploitation pour la sortie dans un rapport peut entraîner plusieurs lignes vides dans le rapport  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Les champs de date n'affectent pas les conditions  
[Bogue][Gestionnaire de rapports] Interface attribuée de la catégorie port vide  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Un rapport avec des catégories de l'extension VIVA2 génère un message d'erreur  
[Bogue][Gestionnaire de rapports] Informations sur l'adresse hôte attribuée à partir d'un port sélectionnable dans le générateur de requêtes  
[Bogue][Gestionnaire de rapports] Un rapport avec un champ de la catégorie Journal de bord lance une erreur SQL  
[Bogue][Gestionnaire de rapports] Les rapports variables ne montrent pas le nombre de "correspondances"  
[Bogue][Gestionnaire de rapports] Le titre Système d'exploitation n'est pas traduit en anglais dans les rapports  
[Bogue][Importation] Les objets ne peuvent pas être attribués à un réseau car le masque de réseau n'est pas mis à jour lors de l'importation  
[Bogue][Importation] L'importation CSV ne change pas le type d'objet  
[Bogue][Importation] Protéger la boîte de dialogue avec un facteur de conversion caché contre les modifications par l'importation  
[Bogue][Importation] L'importation CSV n'accède pas correctement à l'attribut "Désactiver la connexion", la valeur n'est pas mise à jour  
[Bogue][Configuration du type d'objet] L'unité de distribution d'alimentation ne peut pas être placée dans des racks avec la configuration d'objet standard  
[Bogue][Catégories] La propriété "téléphones mobiles liés" n'est pas disponible (Rapport/Documents)  
[Bogue][Catégories] Les cartes SIM attribuées génèrent des erreurs SQL dans l'extension Document  
[Bogue][Catégories] L'attribut "Fin de contrat" de la catégorie "Informations sur le contrat" n'est pas recalculé après modification du terme  
[Bogue][Catégories] Les cartes SIM ne peuvent pas être liées aux téléphones mobiles via l'objet carte SIM  
[Bogue][Catégories] Dans la catégorie Fichier, les entrées ne peuvent pas être éditées et enregistrées si elles sont éditées via marquer>Éditer.  
[Bogue][Catégories] Tri incorrect du numéro de version dans la catégorie "Logiciel" > "Installation"  
[Bogue][Catégories] Le champ à valeurs multiples "Fonctionne sur" dans la catégorie cluster attribuée ne peut être rempli qu'après le rechargement de la page  
[Bogue][Catégories] Les objets archivés attribués à des contrats sont affichés dans la vue en liste  
[Bogue][Catégories] Si le filtre par défaut est défini sur "Actif dans le catalogue de services", rien n'est affiché dans la liste déroulante  
[Bogue][Catégories] L'unité de mesure est incorrectement définie lors de la duplication des câbles  
[Bogue][Catégories] Les cartes ne peuvent pas être affichées sur la page d'aperçu des cartes SIM  
[Bogue][Catégories] Commande pour nettoyer les balises HTML  
[Bogue][Catégories] Les balises dans la catégorie "Général" sont doublées et affichées de manière incorrecte (pendant l'édition)  
[Bogue][Explorateur CMDB] Supprimer le bouton "imprimer" dans l'Explorateur CMDB  
[Bogue][Édition de liste] L'édition de liste ne prend pas en compte les modifications lors du déclenchement de l'événement  
[Bogue][Édition de liste] La liste déroulante de la catégorie "Personnes / données principales" dans la page d'édition de liste n'est pas disponible  
[Bogue][Édition de liste] Réseau / Ports logiques / Multiedit : L'adresse IP est supprimée  
[Bogue][Code (interne)] L'attribution d'objets dans la catégorie d'attribution de groupe ne peut pas être résolue via le navigateur d'objets  
[Bogue][Code (interne)] Le tri par niveau de service SLA dans la vue en liste lance une erreur SQL  
[Bogue][Code (interne)] Les emplacements ne sont pas correctement autorisés  
[Bogue][Code (interne)] Curseur pour changer la largeur de colonne dans la couche de filtre  
[Bogue][Code (interne)] Aucun objet ne peut être créé via le navigateur d'objets si le système d'autorisation est inactif  
[Bogue][Code (interne)] Les rapports dans les champs qui utilisent l'expression *alter* dans le nom de champ sont bloqués  
[Bogue][Code (interne)] Utiliser la partie de domaine pour la connexion unique  
[Bogue][Code (interne)] Aucune salle ne peut être spécifiée de manière statique dans le ldap.ini  
[Bogue][Code (interne)] Le bouton de purge rapide peut être utilisé sans sélection d'objet  
[Bogue][CMDB] Erreur lors de la duplication des groupes de personnes  
[Bogue][Recherche] La recherche dans tous les champs ne trouve pas les valeurs Dialog+  
[Bogue][Recherche] Le statut est supprimé lors du passage de la recherche standard à la recherche approfondie.  
[Bogue][Recherche] L'attribut "but" n'est pas trouvé via la recherche  
[Bogue][Recherche] La recherche d'objets (Statut : normal/archivé/supprimé) ne montre que l'ID de statut  
[Bogue][Recherche] La zone de texte "Description" Catégorie Connexions réseau -> Écouteur -> Objet écouteur n'est pas indexée  
[Bogue][Recherche] Erreur SQL lors de la recherche de caractères spéciaux  
[Bogue][Notifications] Erreur de requête SQL sur la notification "Expiration de la période de maintenance/garantie"  
[Bogue][Journal de bord] Le journal de bord ne stocke pas les affectations des appartenances à des groupes  
[Bogue][JDisc] JDISC n'importe pas les appareils connectés  
[Bogue][JDisc] JDISC n'importe pas certains logiciels  
[Bogue][JDisc] JDISC : Le groupe JDisc est ignoré et l'importation n'est alors pas possible  
[Bogue][Listes] Les licences attribuées ne sont pas affichées dans la vue en liste de l'attribution de logiciels  
[Bogue][Listes] Vue en liste : la largeur de colonne de la dernière colonne n'est pas ajustable  
[Bogue][Listes] Lorsque des modifications sont apportées à n'importe quelle largeur de colonne, la largeur de colonne de la dernière colonne devient plus large  
[Bogue][Listes] Les champs de la catégorie "Mémoire" ne peuvent pas être affichés dans la vue en liste de la catégorie à valeurs multiples  
[Bogue][API] La validation de l'API ne valide pas correctement (téléchargement de fichiers)  
[Bogue][Paramètres CMDB] La constante de dialogue ne peut pas être éditée  
[Bogue][Paramètres CMDB] Le téléchargement de profil dans l'Assistant de configuration rapide est incorrect  
[Bogue][Outils système] Lors de la duplication, la correction de l'emplacement est toujours effectuée  
[Bogue][Console] La commande Console php ne lit pas correctement le .ini  
[Bogue][Aperçu d'impression] L'aperçu d'impression ne affiche pas les catégories personnalisées  
[Bogue][Aperçu d'impression] L'aperçu d'impression trie les catégories de manière indépendante par ordre alphabétique  
[Bogue][Relations] Problème de classement avec les relations entre les groupes et les membres  
