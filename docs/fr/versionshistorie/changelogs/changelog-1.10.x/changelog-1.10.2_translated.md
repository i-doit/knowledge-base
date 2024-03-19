<!-- TRANSLATED by md-translate -->
# Changelog 1.10.2

# Changelog 1.10.2

[Verbesserung][Systemtools]              Objekte Zähler in Systemübersicht für aktuellen Mandanten<br>
[Verbesserung][Report-Manager]           Erweiterung der Attribute CPU-Kerne und -Sockets im Report Manager<br>
[Verbesserung][API]                      API: Livestatus-Instanzen auslesen, erstellen, aktualisieren und löschen<br>
[Verbesserung][API]                      Statische Host Tags via API erstellen, auslesen, aktualisieren und löschen<br>
[Bug][Benutzerdefinierte Kategorien]     Konstanten benutzerdefinierter Kategorien erhalten festen Prefix<br>
[Bug][Benutzerdefinierte Kategorien]     Unterschiedliche Darstellung eines HTML-Editor Felds im View- und Edit Mode<br>
[Bug][Benutzerdefinierte Kategorien]     Werte von Benutzerdefinierten Dialog+ Feldern können im Dialog-Admin nur einmal gespeichert werden<br>
[Bug][Benutzerdefinierte Kategorien]     Falsche Bereinigung von HTML-Feldern in benutzerdefinierten Kategorien<br>
[Bug][Benutzerdefinierte Kategorien]     Beim duplizieren von Objekten wurden in Benutzerdefinierten Kategorien alle leeren Dialog+ Felder mit einem Wert gesetzt<br>
[Bug][Kategorien]                        Die "Alle Tickets" Kategorie hat nun einen intuitiven Link zum referenzierten Ticket<br>
[Bug][Kategorien]                        Rack Statistiken zeigen nicht alle verfügbaren Berechnungen<br>
[Bug][Kategorien]                        Inhalte aus Kategorieerweiterungen für Personen werden gelöscht, wenn die Kategorie "Stammdaten" bearbeitet wird<br>
[Bug][Kategorien]                        Löschen von Standortzuweisungen beim Bearbeiten der Kategorie ohne ausreichende Rechte<br>
[Bug][Kategorien]                        Keine Verknüpfung der Datenbankinstanz im Datenbankschema<br>
[Bug][Kategorien]                        (Source) IP-Adresse Zuweisung fehlerhaft<br>
[Bug][Kategorien]                        Unerwünschte Default-Werte<br>
[Bug][Kategorien]                        Fehlerhafte RAID-Informationen beim Duplizieren<br>
[Bug][Kategorien]                        Kategorie Kryptokarte bleibt grau trotz befüllten Attributen<br>
[Bug][Kategorien]                        Verbindung einer VM zu einem Cluster ohne Hostauswahl nicht möglich<br>
[Bug][Kategorien]                        Überprüfung der Eingabe im deutschen oder englischen Zahlenformat bei Eingabe von Ampere, Volt oder Watt<br>
[Bug][Kategorien]                        Ampere-Anzeige mit sehr vielen Nachkommastellen<br>
[Bug][Kategorien]                        Kabellänge wird beim Duplizieren nicht berücksichtigt<br>
[Bug][Kategorien]                        Reaktionszeit kann keine halben Stunden speichern<br>
[Bug][Kategorien]                        Anschlussart wird beim Duplizieren nicht übernommen<br>
[Bug][Kategorien]                        Lösen einer Datenbankinstanz unter bestimmten Bedingungen nicht möglich<br>
[Bug][CMDB]                              Bei einer Datenbank Instanz werden auch archivierte und gelöschte Datenbank Schema angezeigt<br>
[Bug][CMDB]                              Eintragen einer Null im Dialog-Admin nicht möglich<br>
[Bug][CMDB]                              Fehlende Übersetzung von "Mandant" bei Mandantenauswahl<br>
[Bug][CMDB]                              Login in idoit-Ansicht nach zu frühem Timeout fehlerhaft<br>
[Bug][Listen]                            Sortieren nach Kategorie und Einsatzzweck in Listen nicht möglich<br>
[Bug][Listen]                            Keine Anzeige der Datenbankinstanz in der Liste der Datenbankschemata<br>
[Bug][Listen]                            Keine Anzeige des Datenbankschema in der Liste der Datenbankinstanzen<br>
[Bug][Listen]                            Sortierung nach tags in Objektlisten nicht möglich<br>
[Bug][Listen]                            Objektlisten speichern nicht den Standardfilter<br>
[Bug][Listen]                            Zuordnen von Attribut "Zugeordnete Geräte (Speichernetze > Logische Geräte (LDEV Server))" in Liste nicht möglich<br>
[Bug][Listen]                            Filtern auf das Attribut "Tags" nicht möglich<br>
[Bug][Listen]                            Fehlerhafte Sortierung der Kosten in der Listenansicht von Verträgen<br>
[Bug][Listen]                            Zugewiesene IP-Adressen werden falsch sortiert<br>
[Bug][OCS]                               Import von CPU-Kernen aus OCS Inventory<br>
[Bug][OCS]                               OCS-Import liefert Titel in geschweiften Klammern statt gesetzten Namen<br>
[Bug][OCS]                               OCS: IP-Adresse/Netz wird durch einen Import nicht aktualisiert<br>
[Bug][API]                               API: API erzeugt unverbundenes Kabel beim Erstellen eines physikalischen Netzwerk-Ports<br>
[Bug][API]                               API: Header nicht RFC 2616 konform<br>
[Bug][API]                               Fehlende Logbucheinträge bei der Erzeugung von Inhalten über die API<br>
[Bug][API]                               API liefert falsche Session-ID trotz erfoglreichem Login<br>
[Bug][API]                               API: Eintragen einer IP-Adresse via API bei Kategorievalidierung "Hostadresse" führt zu Fehlermeldung<br>
[Bug][API]                               API: cmdb.category.create erstellt keinen Eintrag in einem benutzerdefinierten Mehrfach-Dialog-Feld<br>
[Bug][API]                               API: Batch request mit cmdb.category.create oder .update wirft SQL-Fehler für Modell-Kategorie<br>
[Bug][QR-Codes]                          QR-Code: Schrift ist immer zentriert<br>
[Bug][Templates]                         Standardtemplate wird nicht angewendet wenn Übersichtsseite aktiv ist<br>
[Bug][Templates]                         Vordefinierte Templates können bereinigt werden, tauchen aber wieder auf<br>
[Bug][Templates]                         Default Template wird bei der Objekterstellung nicht verwendet<br>
[Bug][Benachrichtigungen]                Benachrichtigungen beachten auch archivierte und gelöschte Kontakte<br>
[Bug][Benachrichtigungen]                Rechtschreibfehler in der Konfiguration von Benachrichtigungen für unveränderte Objekte<br>
[Bug][Benachrichtigungen]                Benachrichtigungen für Lizenzablauf wird nur auf dem ersten Lizenzschlüssel angewandt<br>
[Bug][Beziehungen]                       Software: Anzahl der Installationen berücksichtigt nicht den Zustand<br>
[Bug][Beziehungen]                       Archivierte Beziehung "verknüpfte Karten" bleiben in der SIM-Karte bestehen<br>
[Bug][Logbuch]                           Logbuch: Änderungen in der Kategorie "Vertragszuweisung" am Attribut Leistungsschein werden nicht geschrieben<br>
[Bug][Logbuch]                           Werden auf der Übersichtsseite Einträge in der Kategorie Allgemein verändert, werden im Logbuch Änderungen zur Kategorie Standort erfasst<br>
[Bug][Logbuch]                           Beim Editieren der Kategorie Allgemein werden keine Logbucheinträge geschrieben<br>
[Bug][Logbuch]                           Falsche Informationen im Logbuch bei Kategorien mit Default-Werten<br>
[Bug][Logbuch]                           Falsche Logbuch-Information zu Standorten<br>
[Bug][CMDB-Explorer]                     Keine schlüssige Sortierung im CMDB Explorer<br>
[Bug][CMDB-Explorer]                     CMDB-Explorer - Fehlende Attribute bei benutzerdefinierten Profilen<br>
[Bug][Report-Manager]                    Report-Manager: Kategorie "Passwort" fehlt<br>
[Bug][Report-Manager]                    "Zustand" und "Status" werden inkonsistent verwendet<br>
[Bug][Report-Manager]                    Attribut "Standardgateway für das Netz" kann nicht im Report-Manager verwendet werden<br>
[Bug][Report-Manager]                    DB-Fehlermeldung beim Ausführen eines Reports mit mehr als einer Kondition<br>
[Bug][Report-Manager]                    Option zum Ausblenden von Objekten mit leeren Verknüpfungen im Report funktioniert nicht bei Benutzerdefinierten Kategorien<br>
[Bug][Report-Manager]                    Kategorie "Virtuelle Geräte" steht nicht im Report Manager zur Verfügung<br>
[Bug][Report-Manager]                    Report Manager: Purge-Button wird angezeigt, trotz fehlender Rechte<br>
[Bug][Objekte]                           Druckansicht gibt Passwörter der Kategorie "Passwort" verschlüsselt aus<br>
[Bug][Objekte]                           Löschen von Systembenutzern möglich<br>
[Bug][Objekte]                           Objekttyp wird im Objekt Browser der Kategorie Servicezuweisung nicht angezeigt<br>
[Bug][Objekte]                           Mouseover in Listenansicht verschwindet aus dem sichtbaren Bereich<br>
[Bug][Objekte]                           Archivieren innerhalb eines Objektes nicht möglich<br>
[Bug][JEDI/Jdisc]                        Manuell gepflegte Standorte werden beim JDisc-Import der sysLocation überschrieben/geleert<br>
[Bug][JEDI/Jdisc]                        Fehlerhafter Import der Chassis-Ansicht über JDisc<br>
[Bug][JEDI/Jdisc]                        Import Filter JDISC für Hostadressen<br>
[Bug][Dokumente]                         Falsche Formatierung von Datum in Dokumente Add-on<br>
[Bug][Listeneditierung]                  Eingabe von Geldbeträgen nur mit Punkt anstatt Komma möglich<br>
[Bug][Listeneditierung]                  Listeneditierung: Löschen von E-Mailadressen führt zu Fehleinträgen<br>
[Bug][Listeneditierung]                  Multi-Value-Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug][Listeneditierung]                  Listeneditierung: Es werden Attribute validiert, die gar nicht dargestellt werden<br>
[Bug][Listeneditierung]                  Beschreibungsfelder werden in der Listeneditierung validiert<br>
[Bug][Listeneditierung]                  Inkonsistentes Verhalten bei DialogPlus-Feldern in der Listeneditierung<br>
[Bug][CSV]                               Attribut "Patchlevel" wird nicht über den CSV-Import befüllt<br>
[Bug][CSV]                               Sonderzuweisung nach Raumnummer funktioniert beim CSV Import nicht<br>
[Bug][CSV]                               CSV-Import: Raumnummer wird nicht erkannt/gefunden<br>
[Bug][CSV]                               Import des CMDB-Status beim CSV-Import über die Konsole nicht möglich<br>
[Bug][Check_MK]                          Check_MK Transferskript schlägt fehlt weil keine idoit_hosttags.mk Datei erstellt wird<br>
[Bug][Check_MK]                          Dynamische Check_MK Hostmerkmale lassen sich nicht löschen<br>
[Bug][Monitoring]                        FQDN im Monitoring nicht korrekt<br>
[Bug][CMDB Einstellungen]                Mehrfachauswahl in der Liste der Objekttyp-Konfiguration ohne Funktion<br>
[Bug][CMDB Einstellungen]                Fehlerhafte Auswahl in der Objekttyp-Konfiguration bei der Auswahl mehrerer Checkboxen<br>
[Bug][CMDB Einstellungen]                Fehlende Aufforderung zur Eingabe eines Änderungskommentars trotz aktiviertem Zustand<br>
[Bug][Update]                            Falsche Übersetzung von "Mandant" während des i-doit Updates<br>
[Bug][Admincenter]                       Error Tracker bremst das System massiv<br>
[Bug][LDAP]                              Console: User,Password bei Report über CLI Console werden nicht übergeben<br>
[Bug][LDAP]                              Open-LDAP-Sync: UID/Loginname wird nicht akzeptiert<br>
[Bug][Console]                           Console: Ausgabe archivierter Benutzer im ldap-sync fehlerhaft<br>
[Bug][Systemeinstellungen]               Systemeinstellung "Anzeigelimit von Hostadressen" hat keine Wirkung auf Listen<br>
[Bug][Systemeinstellungen]               SSO: Deep links führen immer zum Dashboard<br>
[Bug][Import]                            Fehlermeldung, dass der i-doit controller "deprecated" ist beim Import von XML-Dateien oder Inhalten aus OCS<br>
[Bug][Systemtools]                       Online Repositories über HTTPS<br>
[Bug][Validierung]                       Automatisch erzeugte Inventarnummer umgeht Validierung dieses Attributs<br>
[Bug][Suche]                             Nutzen verschiedener Suchmodi im Ergebnisfenster bei bestimmten Zeichen in der Liste nicht möglich<br>
[Änderung][CMDB]                         Anschlüsse im Quickinfo vereinheitlichen<br>

[Amélioration][Outils système] Objets Compteur dans l'aperçu du système pour le mandant actuel<br>
[Amélioration][Gestionnaire de rapports] Extension des attributs Cœurs et sockets CPU dans le gestionnaire de rapports<br>.
[Amélioration][API] API : Lire, créer, mettre à jour et supprimer des instances d'état vivant<br>
[Amélioration][API] Création, lecture, mise à jour et suppression de balises d'hôtes statiques via l'API<br>.
[Bug][Catégories personnalisées] Les constantes des catégories personnalisées ont un préfixe fixe<br>.
[Bug][Catégories personnalisées] Affichage différent d'un champ de l'éditeur HTML en mode affichage et en mode édition<br>.
[Bug][Catégories personnalisées] Les valeurs des champs Dialogue+ personnalisés ne peuvent être enregistrées qu'une seule fois dans Dialogue-Admin<br>.
[Bug][Catégories personnalisées] Nettoyage incorrect des champs HTML dans les catégories personnalisées<br>.
[Bug][Catégories personnalisées] Lors de la duplication d'objets dans les catégories personnalisées, tous les champs Dialog+ vides étaient définis avec une valeur<br>.
[Bug][Catégories] La catégorie "Tous les billets" a maintenant un lien intuitif vers le billet référencé<br>.
[Bug][Catégories] Les statistiques du rack n'affichent pas tous les calculs disponibles<br>
[Bug][Catégories] Le contenu des extensions de catégorie pour les personnes est supprimé lors de la modification de la catégorie "Données de base"<br>.
[Bug][Catégories] Suppression des attributions de site lors de la modification de la catégorie sans droits suffisants<br>
[Bug][Catégories] Pas de lien de l'instance de la base de données dans le schéma de la base de données<br>
[Bug][Catégories] Attribution d'adresse IP (source) erronée<br>
[Bug][Catégories] Valeurs par défaut indésirables<br>
[Bug][Catégories] Informations RAID erronées lors de la duplication<br>
[Bug][Catégories] La catégorie Carte crypto reste grise malgré des attributs remplis<br>
[Bug][Catégories] Connexion impossible d'une VM à un cluster sans sélection d'hôte<br>
[Bug][Catégories] Vérification de la saisie en format numérique allemand ou anglais lors de la saisie d'ampères, de volts ou de watts<br>
[Bug][Catégories] Affichage des ampères avec un très grand nombre de chiffres après la virgule<br>
[Bug][Catégories] La longueur du câble n'est pas prise en compte lors de la duplication<br>.
[Bug][Catégories] Le temps de réaction ne peut pas enregistrer les demi-heures<br>
[Bug][Catégories] Le type de connexion n'est pas pris en compte lors de la duplication<br>
[Bug][Catégories] Impossible de détacher une instance de base de données dans certaines conditions<br>
[Bug][CMDB] Une instance de base de données affiche également les schémas de base de données archivés et supprimés<br>.
[Bug][CMDB] Impossible de saisir un zéro dans le dialogue Admin<br>.
[Bug][CMDB] Traduction manquante de "Mandant" lors de la sélection du mandant<br>.
[Bug][CMDB] Erreur de connexion dans l'affichage idoit après un délai d'attente trop court<br>
[Bug][Listes] Impossible de trier par catégorie et par utilisation dans les listes<br>
[Bug][Listes] Pas d'affichage de l'instance de la base de données dans la liste des schémas de base de données<br>
[Bug][Listes] Pas d'affichage du schéma de la base de données dans la liste des instances de la base de données<br>
[Bug][Listes] Impossible de trier par tags dans les listes d'objets<br>
[Bug][Listes] Les listes d'objets n'enregistrent pas le filtre par défaut<br>
[Bug][Listes] Impossible d'associer l'attribut "Périphériques associés (Réseaux de stockage > Périphériques logiques (serveur LDEV))" dans la liste<br>
[Bug][Listes] Impossible de filtrer sur l'attribut "Tags"<br>
[Bug][Listes] Erreur de tri des coûts dans la vue en liste des contrats<br>
[Bug][Listes] Les adresses IP attribuées sont mal triées<br>
[Bug][OCS] Importation de noyaux de CPU depuis OCS Inventory<br>
[Bug][OCS] L'importation OCS renvoie des titres entre accolades au lieu de noms composés<br>.
[Bug][OCS] OCS : adresse IP/réseau n'est pas mis à jour par une importation<br>
[Bug][API] API : L'API crée un câble non connecté lors de la création d'un port réseau physique<br>.
[Bug][API] API : En-tête non conforme à la RFC 2616<br>
[Bug][API] Absence d'entrées dans le journal lors de la création de contenu via l'API<br>
[Bug][API] L'API fournit un identifiant de session incorrect malgré une connexion réussie<br>
[Bug][API] API : La saisie d'une adresse IP via l'API lors de la validation de la catégorie "Adresse de l'hôte" entraîne un message d'erreur<br>.
[Bug][API] API : cmdb.category.create ne crée pas d'entrée dans un champ de dialogue multiple défini par l'utilisateur<br>
[Bug][API] API : Une demande par lot avec cmdb.category.create ou .update provoque une erreur SQL pour la catégorie modèle<br>.
[Bug][QR-Codes] Code QR : La police est toujours centrée<br>
[Bug][Templates] Le modèle par défaut n'est pas appliqué lorsque la page de présentation est active<br>.
[Bug][Templates] Les templates prédéfinis peuvent être nettoyés, mais réapparaissent<br>.
[Bug][Templates] Le template par défaut n'est pas utilisé lors de la création d'objets<br>
[Bug][Notifications] Les notifications prennent en compte les contacts archivés et supprimés<br>.
[Bug][Notifications] Erreur d'orthographe dans la configuration des notifications pour les objets non modifiés<br>
[Bug][Notifications] Les notifications d'expiration de licence ne s'appliquent qu'à la première clé de licence<br>
[Bug][Relations] Logiciel : le nombre d'installations ne tient pas compte de l'état<br>
[Bug][Relations] Les relations archivées "cartes liées" persistent dans la carte SIM<br>
[Bug][Journal de bord] Journal de bord : les modifications dans la catégorie "attribution de contrat" de l'attribut bon de prestation ne sont pas écrites<br>.
[Bug][Journal de bord] Si des entrées de la catégorie Généralités sont modifiées sur la page d'aperçu, les modifications de la catégorie Emplacement sont enregistrées dans le journal de bord<br>.
[Bug][Journal de bord] Lors de l'édition de la catégorie Général, les entrées du journal ne sont pas écrites<br>.
[Bug][Journal de bord] Informations incorrectes dans le journal de bord pour les catégories avec des valeurs par défaut<br>
[Bug][Journal de bord] Informations du journal de bord incorrectes pour les sites<br>
[Bug][CMDB-Explorer] Pas de tri cohérent dans CMDB Explorer<br>
[Bug][CMDB-Explorer] CMDB-Explorer - Attributs manquants pour les profils personnalisés<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : catégorie "Mot de passe" manquante<br>
[Bug][Gestionnaire de rapports] Utilisation incohérente des termes "état" et "statut"<br>.
[Bug][Report-Manager] L'attribut "Passerelle par défaut pour le réseau" ne peut pas être utilisé dans le Report-Manager<br>.
[Bug][Report-Manager] Message d'erreur DB lors de l'exécution d'un rapport avec plus d'une condition<br>
[Bug][Report-Manager] L'option pour masquer les objets avec des liens vides dans le rapport ne fonctionne pas avec les catégories définies par l'utilisateur<br>.
[Bug][Gestionnaire de rapports] La catégorie "Périphériques virtuels" n'est pas disponible dans le Gestionnaire de rapports<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : le bouton Purge s'affiche malgré l'absence de droits<br>
[Bug][Objets] L'aperçu avant impression affiche les mots de passe de la catégorie "Mot de passe" de manière cryptée<br>
[Bug][Objets] Possibilité de supprimer des utilisateurs système<br>
[Bug][Objets] Le type d'objet ne s'affiche pas dans le navigateur d'objets de la catégorie Attribution de service<br>
[Bug][Objets] Le survol de la souris dans la vue en liste disparaît de la zone visible<br>
[Bug][Objets] Impossible d'archiver dans un objet<br>
[Bug][JEDI/Jdisc] Les emplacements gérés manuellement sont écrasés/vidés lors de l'importation JDisc de sysLocation<br>
[Bug][JEDI/Jdisc] Importation erronée de la vue du châssis via JDisc<br>
[Bug][JEDI/Jdisc] Filtre d'importation JDISC pour les adresses d'hôtes<br>
[Bug][Documents] Mauvais formatage de la date dans le module complémentaire Documents<br>
[Bug][Édition de liste] Saisie de montants monétaires uniquement possible avec un point au lieu d'une virgule<br>
[Bug][Édition de liste] Édition de liste : la suppression d'adresses e-mail entraîne des entrées erronées<br>
[Bug][édition de liste] Impossible de modifier les catégories multi-valeurs via l'édition de liste<br>.
[Bug][Édition de liste] Édition de liste : des attributs sont validés alors qu'ils ne sont pas représentés<br>
[Bug][édition de liste] Les champs de description sont validés dans l'édition de liste<br>.
[Bug][édition de liste] Comportement incohérent des champs DialogPlus dans l'édition de liste<br>
[Bug][CSV] L'attribut "Patchlevel" n'est pas rempli via l'importation CSV<br>.
[Bug][CSV] L'attribution spéciale par numéro de salle ne fonctionne pas lors de l'importation CSV<br>.
[Bug][CSV] Importation CSV : le numéro de salle n'est pas reconnu/trouvé<br>
[Bug][CSV] Impossible d'importer l'état de la CMDB lors de l'importation CSV via la console<br>
[Bug][Check_MK] Le script de transfert Check_MK échoue car le fichier idoit_hosttags.mk n'est pas créé<br>.
[Bug][Check_MK] Impossible de supprimer les caractéristiques dynamiques de l'hôte Check_MK<br>
[Bug][Monitoring] FQDN incorrect dans le monitoring<br>
[Bug][Paramètres CMDB] Sélection multiple dans la liste de configuration du type d'objet sans fonction<br>
[Bug][Paramètres CMDB] Sélection erronée dans la configuration du type d'objet lors de la sélection de plusieurs cases à cocher<br>
[Bug][Paramètres CMDB] Absence de demande de saisie d'un commentaire de modification malgré l'état activé<br>
[Bug][Mise à jour] Mauvaise traduction de "Mandant" pendant la mise à jour d'i-doit<br>
[Bug][Admincenter] L'Error Tracker ralentit énormément le système<br>
[Bug][LDAP] Console : User,Password ne sont pas transmis lors d'un rapport via CLI Console<br>
[Bug][LDAP] Open-LDAP-Sync : UID/nom de login n'est pas accepté<br>
[Bug][Console] Console : Erreur dans la sortie des utilisateurs archivés dans ldap-sync<br>.
[Bug][Paramètres système] Le paramètre système "Limite d'affichage des adresses d'hôtes" n'a pas d'effet sur les listes<br>.
[Bug][Paramètres système] SSO : les liens profonds mènent toujours au tableau de bord<br>
[Bug][Importation] Message d'erreur indiquant que le contrôleur i-doit est "deprecated" lors de l'importation de fichiers XML ou de contenus depuis OCS<br>
[Bug][Outils système] Référentiels en ligne via HTTPS<br>
[Bug][Validation] Le numéro d'inventaire généré automatiquement contourne la validation de cet attribut<br>
[Bug][Recherche] Impossible d'utiliser différents modes de recherche dans la fenêtre de résultats pour certains caractères de la liste<br>
[Modification][CMDB] Uniformiser les connecteurs dans l'info-bulle<br>