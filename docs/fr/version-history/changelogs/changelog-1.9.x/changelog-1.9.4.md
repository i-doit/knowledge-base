# Journal des modifications 1.9.4

[Amélioration] Nouvelle interface TTS vers Zammad  
[Amélioration] Suppression d'objets via le changement de masse  
[Amélioration] Le script de transfert Check_MK notifie désormais les changements dans Check_MK 1.4  
[Amélioration] Vue pour les étiquettes "Réseau de couche 3" dans les vues de liste  
[Bogue] Changer le mot de passe du centre d'administration dans le centre d'administration provoque l'affichage de mots de passe vides dans la catégorie "mots de passe"  
[Bogue] Catégorie 'Appartenances aux groupes': Utilisation du filtre de type d'objet au lieu du filtre de catégorie dans la barre de recherche  
[Bogue] idoit.search ne renvoie aucun résultat  
[Bogue] Import OCS : Une adresse réseau incorrecte a été calculée pour certaines adresses d'hôtes  
[Bogue] Édition de liste : La validation dans la catégorie 'Adresse d'hôte' manque, même si le FQDN est globalement unique  
[Bogue] L'exécution d'un rapport génère un message d'erreur lorsque les attributs "Type de connexion" et "Connecté à" de la catégorie "Connecteurs" sont utilisés.  
[Bogue] Mauvais nombre de demandes de validation dans l'édition de liste  
[Bogue] Le bouton "Nouveau droit" dans la catégorie "autorisation" en dessous de "groupe de contacts" ne fonctionne pas  
[Bogue] Mauvais filtre standard sélectionné dans les listes d'objets  
[Bogue] Le niveau de correctif n'est pas affiché dans la catégorie 'Affectation de logiciels'  
[Bogue] Versions : Le niveau de correctif n'est pas affiché dans les 'Installations'  
[Bogue] Problèmes de performances dans l'édition de liste  
[Bogue] Catégorie "surveillance" disponible dans les rapports  
[Bogue] JDISC : Les services de cluster ne sont pas importés correctement  
[Bogue] CheckMK : Erreur de message d'erreur d'erreur UTF8/ASCII dans CheckMK-Instance  
[Bogue] Le tri par nombre d'objets dans la vue de liste des types d'objets est incorrect  
[Bogue] Les paramètres généraux ne sont pas affichés correctement  
[Bogue] Plusieurs navigateurs d'objets dans les catégories entraînent des valeurs écrasées  
[Bogue] Affichage d'un tiret dans la liste d'objets en cas de boîte de dialogue de sélection multiple + champs  
[Bogue] Les appartenances aux groupes de personnes de l'explorateur CMDB ne sont pas mises à jour  
[Bogue] Les entrées dans l'admin de dialogue ne peuvent pas être enregistrées si le titre reste le même  
[Bogue] Impossible de supprimer l'alias d'adresse d'hôte  
[Bogue] Import JDISC : L'adresse IP n'est pas mise à jour  
[Bogue] Ne peut pas être utilisé pour la sortie de rapport avec les lettres "B", "N", "P" et "S"  
[Bogue] Navigateur d'objets : Le bouton de sélection "Tout" est manquant  
[Bogue] Le tri des emplacements disponibles dans un châssis est défectueux  
[Bogue] Les catégories personnalisées ne peuvent pas être triées avec des types de boîtes de dialogue dans la vue de liste des types d'objets  
[Bogue] La liste d'objets passe à d'autres types d'objets si plus de 50 objets doivent être affichés  
[Bogue] Mauvais texte de survol affiché pour le bouton Löschen dans la liste IP Layer 3-Net  
[Bogue] Dans les workflows, au lieu d'une URL, l'adresse IP de l'installation I-Doit est enregistrée  
[Bogue] Le tri par statut CMDB dans les listes d'objets n'est possible que s'il est en dernier  
[Bogue] Dans les catégories personnalisées, les journaux sont toujours écrits à partir du système d'autorisation.  
[Bogue] L'invite de connexion affiche une erreur PHP concernant LDAP  
[Bogue] Impossible de passer d'un groupe d'objets statique à dynamique  
[Bogue] Impossible de changer le fabricant du modèle dans Dialog-Admin  
[Bogue] Import CSV : Impossible d'attribuer des appareils via une catégorie spécifique 'Châssis'  
[Bogue] Impossible d'envoyer des notifications aux contacts avec un rôle attribué  
[Bogue] Journal de bord du service : L'option 'Grouper par' fournit des résultats incorrects  
[Bogue] Import CSV : Les objets avec les mêmes titres d'objet dans différents types d'objets ne sont pas correctement attribués  
[Bogue] Les objets spatialement assignés archivés sont affichés dans la vue de liste  
[Bogue] Les châssis dans une vue en rack affichent de manière incorrecte dans la vue de la pièce  
[Bogue] Il n'est pas possible de connecter des connecteurs via 'Connecter ce connecteur unique'  
[Bogue] Le navigateur de câblage n'est pas accessible lors de l'utilisation des droits pour "catégories dans le type d'objet"  
[Bogue] Attributs d'importation CSV manquants  
[Bogue] Le câblage via l'aperçu du connecteur ne fonctionne pas  
[Bogue] Les droits spécifiques seront écrasés lorsque vous modifiez la condition  
[Bogue] Pas de droits pour "réinitialiser le système d'autorisation" après l'installation par install.sh  
[Bogue] Catégorie 'Ports' : Les titres qui dépassent la longueur maximale des titres sont coupés  
[Bogue] Les entrées dans l'admin de dialogue avec des caractères spéciaux ne peuvent pas être éditées  
[Bogue] La synchronisation des données LDAP archive l'utilisateur "admin"  
[Bogue] Les objets sont affichés comme verrouillés plusieurs fois, mais sans verrou réel  
[Bogue] Titre d'objet vide pour les objets de personne à partir de l'importation CSV dans certaines circonstances  
[Bogue] La création d'un seul câblage manquant génère une boucle de messages d'erreur  
[Bogue] Mauvaise URL après déconnexion du plan d'étage  
[Bogue] Barre de défilement horizontale manquante dans la catégorie facture  
[Bogue] La recherche de suggestion dans QCW ne montre pas les catégories de dossiers (réseau)  
[Bogue] Retard sous Quickinfo ne fonctionne pas  
[Bogue] L'attribut "Affectation de contact" affiche uniquement l'ID du contact  
[Bogue] Le répertoire de téléchargement défini n'est pas utilisé  
[Bogue] Les liens renvoient aux objets et non au lien lui-même  
[Bogue] Les relations dans la catégorie "validation" sont mal allouées  
[Bogue] Import CSV : SGBD non disponible  
[Bogue] [ouvert] Pas d'info rapide au survol de la souris  
[Bogue] Perte de menu dans AdminCenter en raison d'un point d'interrogation dans le lien AdminCenter  
[Bogue] Dialog-Admin : Les attributs personnalisés ne sont pas affichés dans la liste d'objets  
[Bogue] Clé de paramètres "maxlengths" avec faute de frappe et pas claire  
[Bogue] L'option JDISC "créer" ne prend pas en compte l'identifiant personnalisé déjà utilisé comme "obsolète"  
[Bogue] Il n'est pas possible d'importer plusieurs adresses IP via l'importation CSV  
