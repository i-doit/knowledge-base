<!-- TRANSLATED by md-translate -->
# Changelog 1.12

# Changelog 1.12

[Aufgabe][Export]                            Caching in "isys_export_helper" ein/ausschaltbar machen<br>
[Verbesserung][Check_MK]                     Check_MK Add-onisieren<br>
[Verbesserung][Update]                       Warnmeldung bei Update unter PHP 5.6 oder 7.0<br>
[Verbesserung][JEDI/Jdisc]                   JDisc: Optionaler Scann von Geräten via "IP/FQDN"<br>
[Verbesserung][Webserver-Konfiguration]      Veraltete URL-Rewrite-Regeln entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Einstellungen bezogen auf Apache-Version 2.2 aus .htaccess-Dateien entfernen<br>
[Verbesserung][Webserver-Konfiguration]      PHP-Einstellungen aus .htaccess-Datei entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Einstellung "FollowSymlinks" aus .htaccess-Datei entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Zusammenfassen aller .htaccess-Dateien zu einer Datei<br>
[Verbesserung][Benutzerdefinierte Kategorien]Attribute sollen per Option "ApiOnly" über die GUI nicht veränderbar sein<br>
[Verbesserung][Benutzerdefinierte Kategorien]Neuer Feld-Typ für die benutzerdefinierten Kategorien<br>
[Verbesserung][LDAP]                         LDAP: Login-Sync optional mittels Sync-Benutzer statt i-doit Benutzer<br>
[Verbesserung][API]                          Einbettung von "?load=api_properties" in die i-doit Konfiguration<br>
[Verbesserung][Suche]                        Erneuerung des Suchindex über die Oberfläche<br>
[Verbesserung][Console]                      Command zur Befüllung von dynamischen Gruppen<br>
[Verbesserung][Code]                         PHP 7.2 Kompatibilität<br>
[Verbesserung][Listeneditierung]             Listeneditierung - Kategorie "Betriebssystem": Auswahl der Variante nicht möglich<br>
[Verbesserung][CMDB]                         Kategorie Hostadresse: Objektbrowser soll nur IPv4 oder IPv6 Netze anzeigen<br>
[Verbesserung][Nagios]                       Nagios Add-onisieren<br>
[Bug][Listeneditierung]                      In der Listeneditierung ist in der Kategorie Hostadresse das Feld Adresservegabe nicht verfügbar<br>
[Bug][Listeneditierung]                      Listeneditierung: Die Kategorie Dateizuweisung verfügbar machen<br>
[Bug][Listeneditierung]                      Werte für Kategorien sollen für alle Objekte übernommen werden, die über Daten in der Kategorie verfügen<br>
[Bug][Listeneditierung]                      Listeneditierung nicht mehr verfügbar<br>
[Bug][Listeneditierung]                      Listeneditierung wird beim Klick auf Objekttyp-Konfiguration zurückgesetzt<br>
[Bug][Listeneditierung]                      Die Standortvorschläge unter Listeneditierung sind hinter anderem Element versteckt<br>
[Bug][Listeneditierung]                      Darstellung der Icons in Listeneditierung korrigieren<br>
[Bug][Listeneditierung]                      Bei der Listeneditierung MUSS man eine Auswahl bei Ja/Nein Feldern treffen<br>
[Bug][Listeneditierung]                      Attribut Adressvergabe (Kategorie Hostadresse) nicht in Listeneditierung verfügbar<br>
[Bug][Listeneditierung]                      Attribut "Versionsnummer (Patchlevel)" fehlt in Listeneditierung der Kategorie "Softwarezuweisung"<br>
[Bug][Listeneditierung]                      Listeneditierung: Kategorie "Lokaler Massenspeicher" und Subkategorien fehlen<br>
[Bug][Listeneditierung]                      Listeneditierung der Kategorie "SLA" funktioniert nicht<br>
[Bug][Check_MK]                              Trennung von Check_MK und Check_MK 2.0 Inhalten<br>
[Bug][Listen]                                Attribute der Kategorie "Speicher" können nicht in die Listenansicht aufgenommen werden<br>
[Bug][Listen]                                Eindeutiges Verhalten für Filtervorschläge in Objektlisten implementieren<br>
[Bug][Listen]                                Multi-Value-Kategorien nehmen auf der Übersichtsseite generell viel Platz ein, selbst, wenn nur ein Eintrag existiert<br>
[Bug][Listen]                                Editieren Button fehlt in den Templates von Massenänderungen<br>
[Bug][JEDI/Jdisc]                            Probleme, den JDisc Webservice zu verwenden<br>
[Bug][JEDI/Jdisc]                            JDISC: Filtern nach logischen Ports fehlerhaft<br>
[Bug][JEDI/Jdisc]                            JDisc: Fehlerhafte Cluster Zuweisung bei Gastsystemen<br>
[Bug][JEDI/Jdisc]                            JDisc-Import: Betriebssystem-Lizenzen werden bei einem Import nicht zugewiesen<br>
[Bug][Workflows]                             Nach Installation des Workflow Add-Ons unter i-doit 1.12 erscheint bei Zugriff auf's Add-On nur eine leere Seite<br>
[Bug][Objekte]                               Bei der Erstellung von neuen Clients wird ein Speichermodul erstellt sofern auf der Übersichtsseite die Kategorie Speicher aufgeführt wird<br>
[Bug][Objekte]                               Subkategorie "gastsysteme" der Kategorie "Virtueller Host" führt eine gemischte Zuweisung zu inkonsistente Ansicht<br>
[Bug][CMDB Einstellungen]                    Allgemeine-Einstellungen: Standardwert "Änderungskommentar"<br>
[Bug][CMDB Einstellungen]                    Sortierung im Dialog-Admin nach Bearbeiten nicht möglich<br>
[Bug][Export]                                XML-Export über Export Wizard wird fehlerhaft generiert und nicht angezeigt<br>
[Bug][Beziehungen]                           Datenbankfehler bei Auswahl von Beziehungen beheben<br>
[Bug][Beziehungen]                           Objekttyp als Beziehungsmaster setzt nur Beziehungen, die keine fest definierte Richtung haben<br>
[Bug][Update]                                i-doit Update sollte lediglich der Admin-Gruppe gestattet sein<br>
[Bug][Update]                                Behebe Warnung über unerwartete Parameter während eines Updates<br>
[Bug][Import]                                CSV-Import: Leeren von Datumsfeldern nicht möglich<br>
[Bug][CMDB]                                  "Counter"-Platzhalter ist für die Bezeichnung bei Anlage von Anschlüssen nicht verfügbar<br>
[Bug][CSV]                                   CSV-Import: Mehrere Kontaktzuweisungen in Modus "Spalte" mit verschiedenen Objekttypen führt zu Fehlern<br>
[Bug][Code]                                  Speicher Passwörter ohne Bereinigung<br>
[Bug][Code]                                  Kompatibilität zu Mobile Browser<br>
[Bug][Kategorien]                            Erstellung von Eintrag in "Betriebssystem"-Kategorie erstellt zwei Einträge<br>
[Bug][Kategorien]                            Falscher Property-Type für Attribut "Personen > Stammdaten > Anrede"<br>
[Bug][Kategorien]                            Fehlerhafte Informationen in der Druckansicht zu IP-Listen<br>
[Bug][Kategorien]                            Druckansicht für IP-Liste unsortiert<br>
[Bug][Kategorien]                            Personen: "Firma" ist nach dem Speichern nicht in Stammdaten zu sehen<br>
[Bug][Kategorien]                            Attribut Suchdomäne aus der Kategorie Hostadresse wird bei der Objekt Duplizierung nicht mit übernommen<br>
[Bug][Kategorien]                            Sortierungen im Standortbaum und Standortrequester<br>
[Bug][Kategorien]                            Rolle Hinzufügen unter Personengruppen Zugewiesene Objekte<br>
[Bug][Kategorien]                            Objektbrowser listet im Objektbrowser erstellte Objekte erst nach Refresh/Ansichtswechsel<br>
[Bug][Kategorien]                            Schrankansicht in Kategorie Schränke fehlerhaft<br>
[Bug][Kategorien]                            Anlegen von Anschlüssen nicht möglich, wenn die Allgemeine Einstellung "Änderungskommentar deaktivieren" deaktiviert ist<br>
[Bug][Kategorien]                            Falsche Sortierung in Kategorie "Zugewiesene Objekte"<br>
[Bug][Installation]                          Pfad "/upload/files/" wird bei Installation nicht angelegt<br>
[Bug][Installation]                          Empfehlung für PHP-Version auf 7.2 erweitern<br>
[Bug][LDAP]                                  LDAP: falsche prüfung der Funktionen<br>
[Bug][LDAP]                                  LDAP: TLS- und STARTTLS ignoriert definierten Port<br>
[Bug][Report-Manager]                        Fehlende Formatierung in der Ausgabe von Reports<br>
[Bug][Report-Manager]                        Verwendung von Stammdaten Vorname im Reportmanager führt zu Fehlermeldung<br>
[Bug][Systemeinstellungen]                   Systemtools: Man kann die Admin etc. Gruppen durch die Systemtools löschen<br>
[Bug][Systemeinstellungen]                   Icons werden nicht geladen wenn ein Proxy Server verwendet wird<br>
[Bug][Suche]                                 Suche: Objekte aus Templaterstellung werden nicht indexiert<br>
[Bug][Validierung]                           Validierung Allgemein Kategorie Bezeichnung als Pflichtfeld setzen führt zu Anzeigefehlern bei der Verwendung von Objekt Standard Templates<br>
[Bug][Dashboard]                             Widget: Darstellung vieler Lesezeichen führt zu einer korrupten Ansicht<br>
[Bug][Benutzerdefinierte Kategorien]         Performance von Kategorielisten sinkt bei vielen Dialog-Plus Einträgen<br>
[Bug][Webserver-Konfiguration]               Log-Dateien dürfen nicht via Webserver erreichbar sein<br>
[Bug][Benutzereinstellungen]                 Button zum Zurücksetzen der Spaltenkonfiguration für Kategorielisten setzt immer auf den Auslieferungszustand zurück<br>
[Bug][API]                                   API: Übergibt man eine ID als String ist es möglich das die falsche Daten übernommen werden<br>
[Änderung][Performance]                      Verbesserte Performance für Kategoriebaum bei benutzerdefinierten Kategorien mit Report<br>

[Tâche][Export] Rendre la mise en cache activable/désactivable dans "isys_export_helper"<br>
[Amélioration][Check_MK] Add-oniser Check_MK<br>
[Amélioration][Mise à jour] Message d'avertissement lors d'une mise à jour sous PHP 5.6 ou 7.0<br>
[Amélioration][JEDI/Jdisc] JDisc : Scannage optionnel des appareils via "IP/FQDN"<br>
[Amélioration][Configuration du serveur web] Suppression des règles d'URL réécrites obsolètes<br>
[Amélioration][Configuration du serveur web] Suppression des paramètres relatifs à Apache version 2.2 dans les fichiers .htaccess<br>
[Amélioration][Configuration du serveur Web] Supprimer les paramètres PHP des fichiers .htaccess<br>
[Amélioration][Configuration du serveur Web] Supprimer le paramètre "FollowSymlinks" du fichier .htaccess<br>
[Amélioration][Configuration du serveur web] Fusionner tous les fichiers .htaccess en un seul fichier<br>
[Amélioration][Catégories personnalisées]Les attributs ne doivent pas être modifiables par l'option "ApiOnly" via l'interface graphique<br>.
[Amélioration][Catégories personnalisées]Nouveau type de champ pour les catégories personnalisées<br>
[Amélioration][LDAP] LDAP : synchronisation de la connexion en option via un utilisateur de synchronisation au lieu d'un utilisateur i-doit<br>
[Amélioration][API] Incorporation de "?load=api_properties" dans la configuration i-doit<br>
[Amélioration][Recherche] Renouvellement de l'index de recherche via l'interface<br>
[Amélioration][Console] Commande de remplissage des groupes dynamiques<br>
[Amélioration][Code] Compatibilité PHP 7.2<br>
[Amélioration][Édition de liste] Édition de liste - catégorie "Système d'exploitation" : impossible de choisir la variante<br>
[Amélioration][CMDB] Catégorie Adresse de l'hôte : Le navigateur d'objets ne doit afficher que les réseaux IPv4 ou IPv6<br>
[Amélioration][Nagios] Add-oniser Nagios<br>
[Bug][Édition de liste] Dans l'édition de liste, dans la catégorie Adresse de l'hôte, le champ Saisie de l'adresse n'est pas disponible<br>.
[Bug][Édition de liste] Édition de liste : rendre la catégorie Assignation de fichier disponible<br>
[bug][édition de liste] Les valeurs des catégories doivent être appliquées à tous les objets qui ont des données dans la catégorie<br>.
[Bug][édition de liste] L'édition de liste n'est plus disponible<br>
[Bug][édition de liste] L'édition de liste est réinitialisée lorsque l'on clique sur Configuration du type d'objet<br>
[Bug][Édition de liste] Les suggestions de localisation sous Édition de liste sont cachées derrière un autre élément<br>.
[Bug][édition de liste] Corriger l'affichage des icônes dans l'édition de liste<br>
[Bug][édition de liste] Dans l'édition de liste, il FAUT faire un choix pour les champs oui/non<br>.
[bug][édition de liste] Attribut attribution d'adresse (catégorie adresse hôte) non disponible dans l'édition de liste<br>.
[bug][édition de liste] Attribut "Numéro de version (niveau de patch)" manquant dans l'édition de liste de la catégorie "Attribution de logiciel"<br>
[Bug][Édition de liste] Édition de liste : la catégorie "Mémoire de masse locale" et les sous-catégories sont manquantes<br>.
[Bug][Édition de liste] L'édition de liste de la catégorie "SLA" ne fonctionne pas<br>
[Bug][Check_MK] Séparation des contenus Check_MK et Check_MK 2.0<br>
[Bug][Listes] Les attributs de la catégorie "Mémoire" ne peuvent pas être inclus dans la vue en liste<br>
[Bug][Listes] Implémenter un comportement unique pour les suggestions de filtre dans les listes d'objets<br>
[Bug][Listes] Les catégories multi-valeurs prennent généralement beaucoup de place sur la page d'aperçu, même s'il n'y a qu'une seule entrée<br>
[Bug][Listes] Bouton d'édition manquant dans les templates de modifications en masse<br>
[Bug][JEDI/Jdisc] Problèmes pour utiliser le service web JDisc<br>
[Bug][JEDI/Jdisc] JDISC : filtrage par ports logiques erroné<br>
[Bug][JEDI/Jdisc] JDisc : Attribution de clusters erronée pour les systèmes invités<br>.
[Bug][JEDI/Jdisc] Importation JDisc : les licences du système d'exploitation ne sont pas attribuées lors d'une importation<br>
[Bug][Workflows] Après l'installation du Workflow Add-On sous i-doit 1.12, seule une page vide apparaît lors de l'accès au Add-On<br>.
[Bug][Objets] Lors de la création de nouveaux clients, un module de stockage est créé si la catégorie Stockage est mentionnée sur la page d'aperçu<br>.
[Bug][Objets] La sous-catégorie "Systèmes invités" de la catégorie "Hôte virtuel" entraîne une affectation mixte et une vue incohérente<br>.
[Bug][Paramètres CMDB] Paramètres généraux : Valeur par défaut "Commentaire de modification"<br>
[Bug][Paramètres CMDB] Impossible de trier dans le dialogue Admin après modification<br>
[Bug][Export] L'export XML via l'assistant d'export est généré de manière incorrecte et n'est pas affiché<br>.
[Bug][Relations] Correction d'une erreur de base de données lors de la sélection de relations<br>
[Bug][Relations] Le type d'objet en tant que maître des relations ne définit que les relations qui n'ont pas de direction fixe<br>.
[Bug][Update] La mise à jour i-doit ne devrait être autorisée qu'au groupe Admin<br>.
[Bug][Update] Correction de l'avertissement de paramètres inattendus lors d'une mise à jour<br>
[Bug][Importation] Importation CSV : impossible de vider les champs de date<br>
[Bug][CMDB] Le caractère générique "Counter" n'est pas disponible pour la désignation lors de la création de connexions<br>.
[Bug][CSV] Importation CSV : plusieurs attributions de contacts en mode "colonne" avec différents types d'objets entraîne des erreurs<br>.
[Bug][Code] Mémorisation des mots de passe sans nettoyage<br>
[Bug][Code] Compatibilité avec les navigateurs mobiles<br>
[Bug][Catégories] Création d'une entrée dans la catégorie "Système d'exploitation" crée deux entrées<br>
[Bug][Catégories] Property-Type incorrect pour l'attribut "Personnes > Données de base > Civilité"<br>
[Bug][Catégories] Informations incorrectes dans l'aperçu avant impression des listes d'adresses IP<br>.
[Bug][Catégories] Aperçu avant impression non trié pour les listes IP<br>
[Bug][Catégories] Personnes : "Société" n'est pas visible dans les données de base après l'enregistrement<br>
[Bug][Catégories] L'attribut domaine de recherche de la catégorie adresse hôte n'est pas repris lors de la duplication d'objet<br>.
[Bug][Catégories] Tri dans l'arborescence des sites et le requêteur de sites<br>
[Bug][Catégories] Rôle Ajouter sous Groupes de personnes Objets attribués<br>
[Bug][Catégories] Le navigateur d'objets ne liste les objets créés dans le navigateur d'objets qu'après rafraîchissement/changement de vue<br>
[Bug][Catégories] Affichage incorrect des armoires dans la catégorie Armoires<br>
[Bug][Catégories] Impossible de créer des connexions si le paramètre général "Désactiver le commentaire de modification" est désactivé<br>.
[Bug][Catégories] Mauvais tri dans la catégorie "Objets attribués"<br>
[Bug][Installation] Le chemin "/upload/files/" n'est pas créé lors de l'installation<br>.
[Bug][Installation] Étendre la recommandation de version de PHP à 7.2<br>
[Bug][LDAP] LDAP : vérification incorrecte des fonctions<br>.
[Bug][LDAP] LDAP : TLS et STARTTLS ignorent le port défini<br>
[Bug][Gestionnaire de rapports] Manque de formatage dans la sortie des rapports<br>.
[Bug][Gestionnaire de rapports] L'utilisation de la racine Prénom dans le gestionnaire de rapports entraîne un message d'erreur<br>.
[Bug][Paramètres système] Outils système : On peut supprimer les groupes Admin etc. par les outils système<br>.
[Bug][Paramètres système] Les icônes ne sont pas chargées lorsqu'un serveur proxy est utilisé<br>.
[Bug][Recherche] Recherche : les objets de la création de modèles ne sont pas indexés<br>.
[Bug][Validation] Définir la validation de la catégorie générale comme obligatoire entraîne des erreurs d'affichage lors de l'utilisation de templates standard pour les objets<br>.
[Bug][Dashboard] Widget : l'affichage de nombreux signets entraîne une vue corrompue<br>
[Bug][Catégories personnalisées] Les performances des listes de catégories chutent en présence de nombreuses entrées Dialog-Plus<br>.
[Bug][Configuration du serveur web] Les fichiers log ne doivent pas être accessibles via le serveur web<br>
[Bug][Paramètres utilisateur] Le bouton de réinitialisation de la configuration des colonnes pour les listes de critères revient toujours à l'état par défaut<br>.
[Bug][API] API : Si l'on transmet un ID sous forme de chaîne de caractères, il est possible que les données transmises soient erronées<br>.
[Modification][Performance] Amélioration de la performance de l'arborescence des catégories pour les catégories personnalisées avec rapport<br>.