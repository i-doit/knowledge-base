# Journal des modifications 1.10.1

[Amélioration] Nouveaux attributs dans la catégorie "Check_MK (Hôte) > Exportation des paramètres"  
[Amélioration] Capacité totale des disques dans le Gestionnaire de rapports  
[Amélioration] Vue en liste avec plus de dix colonnes  
[Amélioration] Plus de placeholders pour les notifications : modèle et fabricant  
[Amélioration] Importation JDISC de logiciels : utilisation facultative de la famille de logiciels au lieu de la version du logiciel comme titre de l'objet  
[Amélioration] Impossible de copier des adresses IP à partir de listes d'adresses IP  
[Amélioration] Mettre à jour l'interface graphique de la catégorie attribution de contrat  
[Amélioration] Importation JDisc : Importation de l'attribut SNMP Syslocation dans la catégorie emplacement  
[Amélioration] La suggestion floue peut maintenant être configurée  
[Amélioration] Validation des paramètres utilisateur  
[Amélioration] Rack : lien d'objet pour les objets non positionnés  
[Amélioration] Largeur de colonne auto-définie pour les tables  
[Amélioration] Modèles : Pas de tri préalable lors de la création d'un objet avec le type d'objet sélectionné  
[Amélioration] Modifier l'avertissement pour mettre à jour la configuration de la liste d'objets  
[Amélioration] Recherche : Impossible d'utiliser la recherche avec moins de trois caractères  
[Amélioration] Prise en charge des relations explicites dans les catégories personnalisées pour le type de champ Navigateur de relations  
[Amélioration] Composant d'interface graphique pour sélectionner des intervalles  
[Amélioration] Configuration des objets comme "positionnable dans le rack" pour les nouvelles installations/locataires  
[Amélioration] JDISC : Champ avec étiquette pour les emplacements différents de JDISC  
[Amélioration] Exportateur de l'explorateur CMDB en PNG ou JPG  
[Amélioration] Explorateur CMDB : La légende ne montre que les types d'objets qui incluent des objets  
[Changement] Enregistrer les fichiers de cache smarty dans le répertoire de cache i-doit  
[Changement] Suppression des anciens fichiers et répertoires  
[Bogue] Utilisation de la nouvelle console depuis d'autres emplacements  
[Bogue] Les modifications d'emplacement ne seront pas transmises à la vue d'ensemble du châssis  
[Bogue] Les constantes vocales sont affichées dans l'I-Doit Open  
[Bogue] Les rapports sont appelés dans les catégories personnalisées lorsqu'au moins un type de navigateur d'objets est configuré  
[Bogue] Les placeholders "Modèle" et "Service Tag" manquent dans le lecteur de codes QR  
[Bogue] La duplication d'un objet ne duplique pas l'attribution de contact  
[Bogue] Les attributs de la catégorie "Stockage directement attaché" ne peuvent pas être affichés sur la page d'aperçu  
[Bogue] Lors de l'ouverture d'une configuration de surveillance, la sélection de "actif" est toujours prédéfinie, peu importe si elle était active (oui/non) auparavant  
[Bogue] Lors de la duplication d'un objet (châssis), certaines catégories sont également dupliquées, même si elles n'ont pas été sélectionnées  
[Bogue] L'export CSV des valeurs avec unités à partir des listes d'objets crée une sortie incorrecte  
[Bogue] Impossible d'afficher les attributs "variante" et "numéro de version" de la catégorie "système d'exploitation" dans les listes  
[Bogue] Importation de fichiers XML non possible  
[Bogue] L'importation JDisc alloue des membres de cluster et les supprime après l'importation  
[Bogue] Bug lors de l'utilisation du gestionnaire JDisc via la console  
[Bogue] Le texte de description n'est pas affiché sur la page d'aperçu d'un objet  
[Bogue] Valeur de retour pour attach_person via API  
[Bogue] API : C__CATG__IMAGE : la sélection d'image contient un mauvais type de données  
[Bogue] Le réglage d'une constante de statut cmdb non valide entraîne la suppression de l'objet  
[Bogue] L'importation XML via la console ne fonctionne pas  
[Bogue] L'édition de l'attribution de logiciel via l'édition de liste supprime le contenu de la catégorie "Système d'exploitation"  
[Bogue] API : cmdb.category.read ne récupère que la première valeur d'un champ de dialogue personnalisé (multiple)  
[Bogue] Livestatus entraîne de longs temps d'attente dans les listes d'objets  
[Bogue] API : Des journaux sont créés, même avec le paramètre désactivé  
[Bogue] API : Impossible de changer l'adresse de l'hôte de la catégorie  
[Bogue] API : Le champ LDAP-DN ne peut pas être enregistré  
[Bogue] API : Mauvais type de données (C__CATG__IMAGE/image)  
[Bogue] API : La sortie de la demande de purge génère une erreur de base de données  
[Bogue] Le réglage d'une constante de statut cmdb non valide entraîne la suppression de l'objet  
[Bogue] La configuration Apache dans [I-DOIT]/.htaccess n'est pas adaptée à la version 2.4  
[Bogue] Explorateur CMDB : L'exportation des SVG ne fonctionne qu'avec Firefox  
[Bogue] Admin de dialogue : Les champs de dialogue personnalisés apparaissent plusieurs fois  
[Bogue] Sortie incorrecte lors de l'utilisation de la synchronisation ldap via la console  
[Bogue] Rapport variable sur le tableau de bord génère une erreur  
[Bogue] Erreur lors de l'utilisation de la console : La colonne 'isys_obj__id' dans la clause where est ambiguë  
[Bogue] Le champ "Tags" n'est pas disponible dans le Gestionnaire de rapports  
[Bogue] Archivage/Suppression d'une attribution de logiciel conserve une relation dans l'état "normal"  
[Bogue] La catégorie "adresse de l'hôte" crée une entrée inachevée si elle est utilisée sur la page d'aperçu  
[Bogue] Listes : Impossible de trier après la colonne Scope dans les zones Net  
[Bogue] Erreur de base de données lors de l'installation d'un fichier de licence dans un locataire  
[Bogue] La navigation par page modifie la sélection de la condition  
[Bogue] L'édition de la catégorie "mots de passe" via l'édition de liste enregistre les mots de passe cryptés dans l'interface  
[Bogue] Impossible de supprimer un grand nombre (> 500) d'objets  
[Bogue] Attribution de contrat : La date est affichée dans le champ Numéro de client  
[Bogue] Édition de liste : La catégorie spécifique armoire manque  
[Bogue] JDisc : Le modèle standard n'est pas entièrement appliqué lors de l'importation  
[Bogue] Gestionnaire de rapports : Attribut manquant Mappage du réseau de couche 2  
[Bogue] Attribution incorrecte des informations JDisc aux services de cluster VMware  
[Bogue] Champ de dialogue de l'attribut "catégorie de service" ne peut pas être édité dans l'admin de dialogue  
[Bogue] JDisc : La découverte utilise le nom d'hôte au lieu du FQDN  
[Bogue] Importation de garantie via CSV non possible  
[Bogue] PHP 7.1 : Erreur dans le Gestionnaire de rapports  
[Bogue] La sélection des droits pour des gestionnaires de contrôleurs spécifiques n'est pas possible  
[Bogue] Plusieurs clics sur les boutons d'archivage/suppression sautent d'autres états  
[Bogue] Message d'erreur après saisie du premier élément dans la catégorie Attribution de base de données  
[Bogue] Importation OCS du domaine non possible  
[Bogue] Certains champs de dialogue et de dialogue-plus permettent également de sélectionner des objets archivés/supprimés  
[Bogue] Les emplacements : Tri incorrect si le chemin est trop long  
[Bogue] Rapports : état d'attribut incomplet  
[Bogue] Trier par date en multi-valeur incorrect  
[Bogue] Modèles : Aucun tri visible, possible  
[Bogue] Journal : Les modifications de la position du châssis, etc. sur le périphérique ne sont pas saisies dans le journal  
[Bogue] Les châssis dupliqués seront dupliqués avec le contenu du châssis  
[Bogue] Variable% OBJID% prend le dernier objet créé comme identifiant  
[Bogue] Gestionnaire de rapports : Le rapport du dépôt en ligne 'Journal' montre le nom de l'objet 'C__LOGBOOK_EVENT__OBJECT_PURGED' dans la colonne 'Catégorie'  
[Bogue] Mauvaise présentation des droits dans la catégorie "droits"  
[Bogue] Nom identique pour différentes catégories (attribution de service)  
[Bogue] Le widget "mes objets modifiés" crée un lien incorrect lors de l'utilisation d'une configuration de proxy  
[Bogue] L'importation JDisc supprime l'attribution de réseau de couche 2 aux ports  
[Bogue] La catégorie "Attribution de base de données" n'est pas imprimée en gras, lorsqu'elle est remplie de contenu  
[Bogue] Tri par réseau attribué incorrect dans la catégorie Adresse de l'hôte  
[Bogue] Les umlauts ne sont pas affichés correctement dans l'aperçu de la licence  
[Bogue] Le volet d'options ne se ferme pas après la duplication d'un objet  
[Bogue] Impossible d'exporter des graphiques SVG avec l'explorateur CMDB dans Chrome  
[Bogue] La sélection de plusieurs objets via des cases à cocher dans i-doit open est possible  
[Bogue] JDISC : L'importation écrase le facteur de forme des objets  
[Bogue] Les colonnes larges coupent les colonnes  
[Bogue] L'édition de liste efface la connexion avec le port lors de l'édition de l'interface  

