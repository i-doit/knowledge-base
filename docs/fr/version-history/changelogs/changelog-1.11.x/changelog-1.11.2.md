# Journal des modifications 1.11.2

[Amélioration][Code (interne)]                  Changement du comportement du sélecteur de locataire  
[Amélioration][Code (interne)]                  Ajout de la prise en charge de l'extension PHP "memcached", en plus de "memcache"  
[Amélioration][Catégories personnalisées]        La catégorie personnalisée de rétrogradation / rapport ne doit pas être écrasée dans la catégorie  
[Amélioration][Tableau de bord]                 La visualisation du temps d'exécution restant dans le widget de licence est déroutante  
[Erreur][Catégories]                            Le bouton "Ajouter" dans la catégorie "objets assignés" (sous la catégorie "fichiers")  
[Erreur][Catégories]                            Le tri dans le navigateur d'objets n'est pas clair  
[Erreur][Catégories]                            L'appartenance à un groupe de catégories ne peut pas être assignée à un groupe d'objets  
[Erreur][Catégories]                            Catégorie Comptabilité, l'attribut acheté à ne peut pas être déconnecté  
[Erreur][Catégories]                            La catégorie Fichiers / Objets Assignés affiche de fausses entrées  
[Erreur][Catégories]                            La fonction de suggestion pour le navigateur d'objets avec sous-sélection empêche l'enregistrement de l'entrée  
[Erreur][Catégories]                            Plusieurs affectations d'un objet dans des catégories d'affectation entraînent la suppression des affectations existantes lors de la création d'une nouvelle affectation dans cette catégorie  
[Erreur][Catégories]                            Les objets recyclés doivent conserver leur nom d'origine  
[Erreur][Catégories]                            La sélection de condition dans la catégorie "Objets assignés" sous "Personnes" n'est pas disponible  
[Erreur][Catégories]                            Nettoyage incorrect des données dans la sous-catégorie "Informations sur le contrat" dans l'attribut "Coûts"  
[Erreur][Catégories]                            La catégorie "Accès" enregistre plusieurs fois les données entraînant un enregistrement de données en double  
[Erreur][Catégories]                            Le filtre dans la configuration de la liste des catégories trouve des objets  
[Erreur][Catégories]                            La catégorie "Groupe de personnes" La sous-catégorie "Objets assignés" ne comporte pas le bouton Modifier dans la vue en liste  
[Erreur][Catégories]                            La catégorie "Groupe de personnes" La sous-catégorie "Membres" ne permet pas d'éditer cette vue  
[Erreur][Catégories]                            Calcul incorrect de la vitalité de l'objet de catégorie  
[Erreur][Catégories]                            La sélection de statut dans la catégorie "objets assignés localement" n'est pas disponible  
[Erreur][Catégories]                            Le tri des emplacements de châssis dans la catégorie "Châssis - Emplacements" est défectueux  
[Erreur][Tableau de bord]                       Plus d'informations dans le widget de calendrier  
[Erreur][Tableau de bord]                       Mise en évidence des entrées dans le widget de calendrier  
[Erreur][Tableau de bord]                       La regroupement des résultats de rapport est perdu dans le widget lors du tri  
[Erreur][Édition de masse]                      Changement de masse : la création d'un nouveau modèle affiche trop de catégories comme modifiées  
[Erreur][Listes]                               Le symbole de filtre dans la liste d'objets n'est pas affiché  
[Erreur][Listes]                               Le tri dans la sous-catégorie "Clé de licence" de la catégorie "Affectation de licence" est incorrect  
[Erreur][Listes]                               L'affectation de service archivée est affichée dans les listes d'objets  
[Erreur][Listes]                               Port > Adresse hôte dans la vue en liste crée une erreur  
[Erreur][Listes]                               La vue en liste affiche une mauvaise date de garantie  
[Erreur][Listes]                               Navigateur d'emplacement : Le tri dans la sélection de site est incorrect  
[Erreur][Listes]                               Les services archivés / supprimés sont affichés dans les listes d'objets  
[Erreur][Listes]                               Il n'est pas possible de filtrer les attributs des catégories personnalisées dans les listes d'objets  
[Erreur][Listes]                               Les liens d'informations rapides ne fonctionnent pas dans les listes de catégories  
[Erreur][Listes]                               Les contrats assignés ne sont pas affichés dans la liste d'objets, lorsque aucune date de début et de fin n'est définie pour le contrat  
[Erreur][Listes]                               Les suggestions de filtre dans les listes d'objets ne correspondent pas toujours  
[Erreur][Listes]                               Tri incorrect des adresses IP dans les listes d'objets  
[Erreur][Listes]                               La pagination/le filtrage dans la liste de catégories n'est pas possible  
[Erreur][Listes]                               Le ping via nmap renvoie de faux résultats et affiche un message d'erreur "service non disponible" dans le navigateur  
[Erreur][Listes]                               L'attribut "description" de la catégorie "système d'exploitation" n'est pas disponible dans certaines fonctionnalités  
[Erreur][Listes]                               Champs vides après avoir choisi des attributs associés dans la liste  
[Erreur][Listes]                               Le contrat assigné n'est pas affiché dans la liste d'objets  
[Erreur][Listes]                               Impossible de trier après "Type de groupe" et "Exporter cette configuration"  
[Erreur][Listes]                               Le chemin d'accès de l'emplacement est aligné à gauche dans plusieurs zones  
[Erreur][Listes]                               Le tri de la date dans la vue d'objet est incorrect  
[Erreur][CSV]                                 Importation CSV : Le type d'objet "Organisation" est importé sans titre  
[Erreur][CSV]                                 Lors de l'importation de personnes via l'importation CSV, il crée occasionnellement des relations d'organisation non définies  
[Erreur][CSV]                                 La correspondance avec l'attribut "allocation d'adresse IPv4" sera ignorée par l'importation de données CSV  
[Erreur][CSV]                                 Importation CSV : Les attributs "Numéro de version / Niveau de correctif" sont manquants dans l'affectation  
[Erreur][CSV]                                 L'exportation CSV des catégories à valeurs multiples n'inclut pas de délimiteurs  
[Erreur][CSV]                                 L'identification des objets en utilisant une virgule n'est pas possible dans l'importation CSV  
[Erreur][LDAP]                                Synchronisation LDAP : Le fichier de configuration est ignoré  
[Erreur][LDAP]                                Si aucune connexion au serveur LDAP ne peut être établie, il essaiera de se connecter en permanence  
[Erreur][Recherche]                            La recherche ne trouve pas le contenu des champs de description  
[Erreur][Recherche]                            Performances médiocres de la synchronisation LDAP via des catégories personnalisées  
[Erreur][Recherche]                            L'attribut "étiquette de service" de la catégorie "modèle" ne peut pas être trouvé via la recherche  
[Erreur][Recherche]                            Les index de recherche "Catégories personnalisées" ne sont pas entièrement indexés  
[Erreur][Recherche]                            La liste des résultats de recherche ne montre que les ID de ces catégories au lieu de leurs noms  
[Erreur][Recherche]                            L'adresse MAC n'est pas indexée  
[Erreur][Recherche]                            La recherche n'utilise pas le paramètre pour ignorer les objets archivés/supprimés  
[Erreur][Recherche]                            Balises HTML dans les résultats de recherche  
[Erreur][Recherche]                            La catégorie "Modèle" n'est pas entièrement indexée dans la recherche  
[Erreur][Recherche]                            Informations incorrectes sur la réindexation  
[Erreur][Recherche]                            La sélection du mode d'affichage disparaît lors de l'utilisation de la recherche  
[Erreur][Recherche]                            Contrôleur : Avertissement PHP au gestionnaire "search_index"  
[Erreur][CMDB]                                Le navigateur d'objets n'affiche pas tous les objets avec la catégorie lieu de travail assigné sous l'emplacement logique  
[Erreur][Gestionnaire de rapports]             La duplication d'un rapport définit toujours l'attribut "Présentation multivaleur groupée" sur "oui"  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : L'attribut "Adresse principale de l'hôte" entraîne une erreur SQL via la catégorie d'affectation  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : La catégorie "Affectation de contact" L'attribut "Rôle" entraîne une erreur s'il est explicitement sélectionné  
[Erreur][Gestionnaire de rapports]             Les caractères spéciaux dans les champs de description font que ces champs sont vides dans l'exportation lorsqu'ils sont utilisés dans un rapport  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : Le champ "Dialogue + Sélection multiple" entraîne des erreurs SQL dans les conditions  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : Les conditions ne sont pas rechargées  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : Catégorie "Objet parent" divers attributs de la catégorie "données principales" entraînent des erreurs  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : Tri incorrect des "adresses d'hôte"  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : L'option "Affichage multivaleur groupé" est enregistrée comme Oui  
[Erreur][Gestionnaire de rapports]             PHP 7.1 coupe des parties de SQL des rapports  
[Erreur][Gestionnaire de rapports]             L'attribut manquant "Affectation de réseau de couche 2" de la catégorie "Réseau" dans le Gestionnaire de rapports  
[Erreur][Gestionnaire de rapports]             Erreur lors de la modification d'un rapport existant  
[Erreur][Gestionnaire de rapports]             Erreur lors de l'exécution du rapport  
[Erreur][Gestionnaire de rapports]             Gestionnaire de rapports : Latitude et longitude non disponibles comme critères  
[Erreur][Gestionnaire de rapports]             L'ordre par adresse d'hôte ne fonctionne pas  
[Erreur][Nagios]                              Incompatibilité de Nagios avec l'Add-On de maintenance  
[Erreur][Édition de liste]                    Édition de liste : Dans la catégorie "Mots de passe" le contenu de l'attribut "Mot de passe" peut être perdu  
[Erreur][Édition de liste]                    Performances médiocres du navigateur d'objets dans l'édition de liste  
[Erreur][Édition de liste]                    L'attribut "Allocation d'adresse" dans la catégorie "Adresse hôte" n'est pas disponible dans l'édition de liste  
[Erreur][Connecteur de câblage]               La routine de détection des câbles libres est défectueuse  
[Erreur][Codes QR]                            /src/outils/php/barcode.php génère une notification  
[Erreur][Codes QR]                            /src/outils/php/qr/qr_img.php génère une erreur fatale  
[Erreur][Check_MK]                            Check-MK : L'exportation via l'interface graphique / le script entraîne des calculs non désirés sur le système de fichiers  
[Erreur][Check_MK]                            Check_mk : La catégorie "Cluster" entraîne la perte d'objets lors d'une exportation  
[Erreur][Configuration du type d'objet]        La catégorie "Général" peut être déplacée sans effet dans la configuration de la page d'aperçu  
[Erreur][Objets]                              Navigateur d'objets : L'échelle des icônes est manquante  
[Erreur][Objets]                              La duplication d'objets avec des affectations de contact entraîne des titres cassés  
[Erreur][Objets]                              L'adresse MAC est toujours écrite en minuscules  
[Erreur][Objets]                              La catégorie "appartenance à un groupe" ne peut pas être assignée à une collection  
[Erreur][Objets]                              Les balises ne seront pas dupliquées  
[Erreur][Contrôleur]                          Contrôleur : L'exportation d'un rapport entraîne une erreur PHP verbeuse  
[Erreur][Validation]                          Les champs de description ne sont pas affichés comme obligatoires  
[Erreur][Validation]                          La duplication d'un objet ne tient pas compte de la validation  
[Erreur][Gestion de l'interface]               TTS : Divers attributs liés aux tickets liés sont manquants lors de l'utilisation de RT  
[Erreur][Active Directory]                    Message d'erreur Connexion avec SSO configuré  
[Erreur][Installation]                        Avertissement PHP lors de l'installation et de l'utilisation  
[Erreur][Paramètres utilisateur]              Le tri par défaut dans les listes de catégories ne peut pas être supprimé  
[Erreur][Request Tracker]                     RT : Mauvaise URL lors de l'utilisation de "Ouvrir dans le système de tickets"  
[Erreur][Vue d'impression]                    La vue d'impression est vide pour les catégories personnalisées utilisant un rapport  
[Erreur][Mise à jour]                         Vérification automatique après clé de cryptage vide  
[Erreur][Mise à jour]                         Réponse incorrecte lors de la mise à jour si les fichiers ne peuvent pas être remplacés en raison de permissions manquantes  
[Erreur][Relations]                           Les relations des clusters aux services de cluster ne sont pas correctes si l'état est archivé/supprimé  
[Erreur][Relations]                           Les objets de relation ne sont pas archivés lorsque les objets associés sont archivés dans les catégories correspondantes  
[Erreur][Catégories personnalisées]           La vue en liste des catégories personnalisées est incorrecte  
