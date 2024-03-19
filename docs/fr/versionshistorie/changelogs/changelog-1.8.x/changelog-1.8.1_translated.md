<!-- TRANSLATED by md-translate -->
# Changelog 1.8.1

# Changelog 1.8.1

[Verbesserung]  Konfiguration zur Ermöglichung einer Suche nach Teilstrings in den Objektlisten<br>
[Verbesserung]  JDisc-Profil: Neues Dialog Feld zur Bestimmung des Objekttypen von Blade/Chassis Modulen<br>
[Verbesserung]  Sicherheit: Unterbundene Darstellung von Hashes in Passwortfeldern<br>
[Verbesserung]  Sicherheit: Nutzung von Authenfizierungscookies (HTTPOnly, Secure)<br>
[Verbesserung]  Sicherheit: Funktion für hash-basiertes Passwort in Admin Center (Neusetzen des Passworts über /admin/?req=config)<br>
[Verbesserung]  Sicherheit: Freie Konfiguration des Pfades für Caches und temporäre Dateien (in src/config.inc.php)<br>
[Verbesserung]  Sicherheit: CSRF Tokens beim Speichern von CMDB Kategorien (Systemeinstellungen)<br>
[Verbesserung]  Login: Nutzung eines CSRF Tokens zur zusätzlichen Absicherung des Logins (Systemeinstellungen)<br>
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort<br>
[Änderung]      Sicherheit: Verbotener Web-Zugriff auf das temp/ Verzeichnis via .htaccess Regel<br>
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt<br>
[Bug]           IP-Adressen können pro Netz nicht mehrfach vergeben werden<br>
[Bug]           Objekt-Matching Profile: Wenn das Objekt Matching Profil in den jeweiligen Import Konfigurationen nicht eingestellt wurde, wird das Profil "Default" für manche Imports nicht automatisch verwendet.<br>
[Bug]           Beschreibung in Smartcard Zertifikat wird nicht gespeichert<br>
[Bug]           Objektlisten zeigen ID eines Dialog+-Feldes anstatt des Inhalts<br>
[Bug]           PHP Warnung aufgrund von "open_basedir restriction"<br>
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung<br>
[Bug]           Fehlermeldung im RSS Widget unter Verwendung eines Proxies<br>
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar<br>
[Bug]           "IS NOT NULL" erzeugt im Report Manager einen Fehler<br>
[Bug]           Einträge aus benutzerdefinierten Multi-Value-Kateorie wird in Liste nicht angezeigt und verdoppelt andere Einträge<br>
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden<br>
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung<br>
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich<br>
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt<br>
[Bug]           Layer-2 Netzzuordnung für Ports beim CSV-Import nicht auswählbar<br>
[Bug]           Beim Anpassen der Objekttypen über den QCW ist der Lösch-Button bei Selbstdefinierten Objekttypen inaktiv und bei Standard Objekttypen aktiv<br>
[Bug]           Anlegen einer expliziten Objekt-Beziehung erzeugt SQL-Fehler<br>
[Bug]           Uneinheitliches Datumsformat<br>
[Bug]           Massenänderung leert Multi-Value-Einträge einer benutzerdefinierten Kategorie nicht<br>
[Bug]           Report Manager: Die Vergleichsoperatoren "IS NULL" und "IS NOT NULL" werden nicht korrekt dargestellt beim editieren von bestehenden Reports.<br>
[Bug]           Fehlende Sprachkonstante "LC__CMDB__OBJECT_DOES_NOT_EXIST"<br>
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller<br>
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche<br>
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt<br>
[Bug]           Standort kann nicht gelöst werden<br>
[Bug]           Vertikale Slots in leeren Schränken werden bei der Standort-Zuweisung nicht angezeigt<br>
[Bug]           Bei Layer-3 Netzen wird eine falsche Anzahl von zugewiesenen Adressen auf der Objekt-Liste angezeigt.<br>
[Bug]           Objekt-Matching Profile: Das Matching Attribut "IP-Adresse" hat bei Importen eine Datenbank Fehlermeldung ausgegeben.<br>
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status<br>
[Bug]           HTML Quelltext in der CMDB-Explorer Objektauswahl<br>
[Bug]           Filtern nach IP-Adressen nicht möglich<br>
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung<br>
[Bug]           Beschreibungsfelder aus Benutzerdefinierte Kategorien können in der Objekt-Listen Ansicht nicht gefiltert werden.<br>
[Bug]           Drop-Down-Auswahl im Internet-Explorer überlappt sich selbst<br>
[Bug]           Benutzer kann über die Suche Objektinformationen einsehen/bearbeiten, die ihm nicht verrechtet wurden.<br>
[Bug]           Rechtevergabe auf Objekte unterhalb eines Standorts erlaubt nicht die Verwendung der Schaltflächen in Objektlisten<br>
[Bug]           Kombination aus Validierung und automatischer Inventarnummer erzeugt Fehler beim Duplizieren<br>
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen<br>
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt<br>
[Bug]           Barcode aufrufen schlägt fehl<br>
[Bug]           Filter funktioniert in benutzerdefinierten Objekttypen nicht<br>
[Bug]           Mehrere Vertragsdaten nicht mehr im Report Manager vorhanden<br>
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird<br>
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt<br>
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.<br>
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.<br>
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden<br>
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden<br>
[Bug]           Objektbilder bei über den QCW neu angelegten Objekttypen werden nicht dargestellt<br>
[Bug]           Attribut Telefon wird in Listeneditierung nicht gespeichert<br>
[Bug]           Neuer Service Filter kann nicht gespeichert werden<br>
[Bug]           Attribut "Firma" ist in Objekt-Liste leer<br>
[Bug]           Dashboard kann anderen Benutzern nicht zugewiesen werden<br>
[Bug]           Knowledge Base Link in Systemeinstellungen in Englisch verweist auf deutschen Link<br>
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld<br>
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt<br>
[Bug]           DropDown-Box-Darstellung in Internet Explorer inkorrekt<br>
[Bug]           Quick Configuration Wizard: Bei der Kategorie Liste werden die abgewählten Kategorien nicht gespeichert.<br>
[Bug]           Anzeige der zweiten Seite von Services unter "Extras - Services" nicht möglich<br>
[Bug]           Button "Neu" unter "Extras - Services" nicht korrekt<br>
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.<br>
[Bug]           Button "Neu" im Dialog-Admin funktioniert nach Editieren eines Eintrages wie ein "Editieren"-Button<br>
[Bug]           Typen in Dialog-Box "Service Auswahl" im CMDB-Explorer werden bei zu langen Service-Namen inkorrekt dargestellt<br>
[Bug]           Bei Klick auf "Extras - CMDB - Beziehungen" wird das Dashboard angezeigt<br>
[Bug]           Das Objektbild wird nicht richtig mit dupliziert<br>
[Bug]           Kategorie "Bilder" wird nicht vollständig mit dupliziert<br>
[Bug]           Fehler in der Suche bei Nutzung von Klammern oder Bindestrichen<br>
[Bug]           Listeneditierung mit Kategorie Betriebssystem setzt Objektbrowser-Auswahl für Zugewiesene Lizenz nicht zurück<br>
[Bug]           Benutzerdefinierte Kategorie mit "Objekt-Beziehung (Mehrfach)" zeigt in Liste nur den ersten Eintrag an<br>
[Bug]           Purge-Button archiviert Kategorie-Einträge<br>
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden<br>
[Bug]           Service-Auswahl kann im Browser nicht angezeigt werden und bricht mit Fehler ab<br>
[Bug]           Logbucheintrag zu einem geänderten Standort enthält Quellcode<br>
[Bug]           IT-Service-Komponente wird nicht mehr im CMDB-Explorer dargestellt nach Archivierung und Neuzuweisung<br>
[Bug]           Button "Purge" bei JDisc-Profilen im Edit-Mode entfernen<br>
[Bug]           Fehlermeldung TCPDF ERROR bei der Generierung von PDF Dateien aus dem Report Manager<br>
[Bug]           Fehlende Attribute für Letzte Änderung und Erstellungsdatum in CSV Reports<br>
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung<br>
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab<br>
[Bug]           Objektvitalität wird falsch berechnet<br>
[Bug]           Korrigierte Links auf die Knowledge Base<br>
[Bug]           Makro wird im CMDB-Explorer nicht ausgeführt<br>
[Bug]           SMTP Passwort über Entwicklertools auslesbar<br>
[Bug]           Benachrichtigung mit Standort-Pfad beinhaltet Quickinfo<br>
[Bug]           Über Profil importierte Objekttypen einer anderen Instanz können nicht verwendet werden<br>
[Bug]           Attribut "Primär" aus Kategorie "Kontaktzuweisung" wird nicht im Report-Ergebnis ausgegeben<br>
[Bug]           Fehler beim Verwenden eines @-Zeichens in der Suche<br>
[Bug]           Verwendung eines Default-Templates bewirkt, dass Änderungsvorlagen als reguläre Objekte erzeugt werden<br>
[Bug]           Platzhalter werden im Report nicht ersetzt<br>
[Bug]           Listeneditierung: Datumsfelder von Benutzerdefinierte Kategorien werden nicht übernommen<br>

[Amélioration] Configuration pour permettre la recherche de sous-chaînes dans les listes d'objets<br>.
[Amélioration] Profil JDisc : nouveau champ de dialogue pour déterminer le type d'objet des modules Blade/Chassis<br>.
[Amélioration] Sécurité : représentation subordonnée des hashs dans les champs de mots de passe<br>
[Amélioration] Sécurité : utilisation de cookies d'authentification (HTTPOnly, Secure)<br>
[Amélioration] Sécurité : fonction pour un mot de passe basé sur le hachage dans Admin Center (réinitialisation du mot de passe via /admin/?req=config)<br>.
[Amélioration] Sécurité : configuration libre du chemin des caches et des fichiers temporaires (dans src/config.inc.php)<br>.
[Amélioration] Sécurité : jetons CSRF lors de l'enregistrement des catégories CMDB (paramètres système)<br>
[Amélioration] Connexion : utilisation d'un jeton CSRF pour sécuriser davantage la connexion (Paramètres système)<br>
[Amélioration] Héritage de la latitude et de la longitude dans la catégorie Emplacement<br>
[modification] Sécurité : accès web interdit au répertoire temp/ via la règle .htaccess<br>
[Bug] Erreur dans la catégorie "Vitalité des objets" lorsqu'il n'y a pas de consommation<br>.
[Bug] Les adresses IP ne peuvent pas être attribuées plusieurs fois par réseau<br>.
[Bug] Profils de correspondance d'objets : Si le profil de correspondance d'objet n'a pas été défini dans les configurations d'importation respectives, le profil "Default" n'est pas utilisé automatiquement pour certaines importations.<br>
[Bug] La description dans le certificat de carte à puce n'est pas enregistrée<br>.
[Bug] Les listes d'objets affichent l'ID d'un champ Dialog+ au lieu du contenu<br>.
[Bug] Avertissement PHP dû à "open_basedir restriction"<br>
[Bug] La sélection du type d'objet lors de la liaison d'une attribution dans l'importation CSV n'a pas d'effet<br>.
[Bug] Message d'erreur dans le widget RSS lors de l'utilisation d'un proxy<br>.
[Bug] L'attribut "Dernière modification" ne peut pas être sélectionné comme condition dans l'éditeur de requête<br>.
[Bug] "IS NOT NULL" génère une erreur dans le gestionnaire de rapports<br>.
[Bug] Les entrées de la catéorie multi-valeurs définie par l'utilisateur ne sont pas affichées dans la liste et doublent d'autres entrées<br>.
[Bug] Impossible de sélectionner un attribut de la catégorie "Objets associés à l'espace" dans les conditions du rapport<br>.
[Bug] L'importation de la vitesse d'une interface via JDisc utilise une conversion incorrecte<br>.
[Bug] Impossible de trier les colonnes dans les résultats des rapports<br>.
[Bug] L'info-bulle désactivée est quand même affichée pour le chemin d'accès au site<br>.
[Bug] Impossible de sélectionner l'attribution de réseau de couche 2 pour les ports lors de l'importation CSV<br>.
[Bug] Lors de la personnalisation des types d'objets via le QCW, le bouton de suppression est inactif pour les types d'objets définis par l'utilisateur et actif pour les types d'objets standard<br>.
[Bug] La création d'une relation d'objet explicite génère une erreur SQL<br>.
[Bug] Format de date incohérent<br>.
[Bug] La modification en masse ne vide pas les entrées multi-valeurs d'une catégorie définie par l'utilisateur<br>.
[Bug] Report Manager : les opérateurs de comparaison "IS NULL" et "IS NOT NULL" ne s'affichent pas correctement lors de l'édition de rapports existants.<br>
[Bug] Constante de langage manquante "LC__CMDB__OBJECT_DOES_NOT_EXIST"<br>.
[Bug] Le réglage de l'état de la CMDB dans le profil JDisc n'a pas d'effet lors de l'importation via le contrôleur<br>.
[Bug] L'exportation CSV d'un rapport avec des ruptures contient également les ruptures<br>.
[Bug] L'icône d'édition de la vue en liste n'est pas masquée si l'utilisateur n'a pas les droits<br>.
[Bug] L'emplacement ne peut pas être résolu<br>.
[Bug] Les slots verticaux dans les armoires vides ne sont pas affichés lors de l'attribution de l'emplacement<br>.
[Bug] Pour les réseaux de couche 3, un nombre incorrect d'adresses attribuées est affiché sur la liste des objets.<br>
[Bug] Profils de correspondance d'objets : L'attribut de correspondance "adresse IP" a généré un message d'erreur de base de données lors des importations.<br>
[Bug] Le champ "ET/OU" dans les rapports glisse lors de la sélection du statut CMDB<br>.
[Bug] Code source HTML dans la sélection d'objets CMDB Explorer<br>.
[Bug] Impossible de filtrer par adresse IP<br>.
[Bug] La traduction de la constante de langue ne se fait pas dans l'arborescence du menu de gestion<br>
[Bug] Les champs de description des catégories définies par l'utilisateur ne peuvent pas être filtrés dans l'affichage des listes d'objets.<br>
[Bug] La sélection déroulante dans Internet-Explorer se chevauche elle-même<br>.
[Bug] L'utilisateur peut voir/modifier des informations d'objets qui ne lui ont pas été attribuées via la recherche.<br>
[Bug] L'attribution de droits sur des objets en dessous d'un site ne permet pas d'utiliser les boutons dans les listes d'objets<br>.
[Bug] La combinaison de la validation et du numéro d'inventaire automatique génère des erreurs lors de la duplication<br>.
[Bug] Le début et la fin du contrat ne figurent pas dans la sélection pour l'affichage dans les listes d'objets<br>.
[Bug] Lors de l'utilisation d'informations de plus d'une catégorie multi-valeurs dans la vue en liste, les attributs sont affichés de manière répétée<br>.
[Bug] L'appel du code-barres échoue<br>.
[Bug] Le filtre ne fonctionne pas dans les types d'objets personnalisés<br>.
[Bug] Plusieurs données de contrat ne sont plus disponibles dans le Report Manager<br>.
[Bug] Erreur lors de l'utilisation d'une condition sur l'attribut "Statut CMDB" dans le rapport<br>.
[Bug] Absence de l'icône de la loupe pour sélectionner les attributs liés dans le gestionnaire de rapports<br>.
[Bug] Le lien de l'objet ne peut pas être utilisé pour ouvrir les détails de l'objet si le clic sur la ligne est désactivé.<br>
[Bug] Le champ Oui/Non des catégories définies par l'utilisateur avec une définition de champ obligatoire entraîne toujours l'impossibilité d'enregistrer l'enregistrement sur la page d'aperçu.<br>
[Bug] Les champs Oui/Non ne peuvent pas être interrogés proprement dans le gestionnaire de rapports<br>.
[Bug] Les informations de la catégorie "Sauvegarde des données" ne sont pas enregistrées sur la page d'aperçu si des champs obligatoires ont été configurés<br>.
[Bug] Les images d'objets pour les nouveaux types d'objets créés via le QCW ne sont pas affichées<br>.
[Bug] L'attribut téléphone n'est pas enregistré dans l'édition de liste<br>.
[Bug] Le nouveau filtre de service ne peut pas être enregistré<br>.
[Bug] L'attribut "Société" est vide dans la liste des objets<br>.
[Bug] Le tableau de bord ne peut pas être attribué à d'autres utilisateurs<br>
[Bug] Le lien de la base de connaissances dans les paramètres système en anglais renvoie vers un lien en français<br>
[Bug] Erreur lors de l'importation d'un fichier CSV sans champ d'identification<br>.
[Bug] Erreur lors de la connexion d'un utilisateur LDAP s'il n'a pas de droits<br>.
[Bug] Affichage incorrect des boîtes déroulantes dans Internet Explorer<br>.
[Bug] Quick Configuration Wizard : dans la liste des catégories, les catégories désélectionnées ne sont pas enregistrées.<br>
[Bug] Impossible d'afficher la deuxième page des services sous "Outils - Services"<br>.
[Bug] Le bouton "Nouveau" sous "Outils - Services" ne fonctionne pas correctement<br>.
[Bug] L'attribut "Interface" dans une connexion est vidé si la connexion est importée via l'importation de câblage.<br>
[Bug] Le bouton "Nouveau" dans le dialogue Admin fonctionne comme un bouton "Editer" après l'édition d'une entrée<br>.
[Bug] Les types dans la boîte de dialogue "Sélection de service" dans l'explorateur CMDB sont affichés de manière incorrecte si le nom du service est trop long<br>.
[Bug] Le tableau de bord s'affiche lorsque l'on clique sur "Outils - CMDB - Relations"<br>.
[Bug] L'image de l'objet n'est pas correctement dupliquée<br>.
[Bug] La catégorie "Images" n'est pas entièrement dupliquée<br>.
[Bug] Erreur dans la recherche lors de l'utilisation de parenthèses ou de tirets<br>.
[Bug] L'édition de liste avec la catégorie Système d'exploitation ne réinitialise pas la sélection du navigateur d'objets pour la licence attribuée<br>.
[Bug] Une catégorie personnalisée avec "Relation d'objet (multiple)" n'affiche que la première entrée dans la liste<br>.
[Bug] Le bouton Purge archive les entrées de catégorie<br>.
[Bug] Les attributs "Domaine DNS" et "FQDN" ne peuvent pas être édités dans le gestionnaire de rapports<br>.
[Bug] La sélection de service ne peut pas être affichée dans le navigateur et s'interrompt avec une erreur<br>.
[Bug] L'entrée du journal pour un site modifié contient du code source<br>.
[Bug] Le composant de service informatique n'est plus représenté dans l'explorateur CMDB après archivage et réaffectation<br>
[Bug] Suppression du bouton "Purge" sur les profils JDisc en mode édition<br>
[Bug] Message d'erreur TCPDF ERROR lors de la génération de fichiers PDF à partir du Report Manager<br>.
[Bug] Attributs manquants pour la dernière modification et la date de création dans les rapports CSV<br>
[Bug] La sélection de listeners dans le Report Manager entraîne un message d'erreur<br>.
[Bug] L'importation CSV s'interrompt avec un message d'erreur lors du chargement du profil<br>.
[Bug] Calcul incorrect de la vitalité des objets<br>.
[Bug] Correction des liens vers la base de connaissances<br>.
[Bug] La macro ne s'exécute pas dans l'explorateur CMDB<br>.
[Bug] Mot de passe SMTP lisible via les outils de développement<br>.
[Bug] La notification avec le chemin d'accès au site contient l'info-bulle<br>.
[Bug] Impossible d'utiliser les types d'objets d'une autre instance importés via le profil<br>.
[Bug] L'attribut "Primaire" de la catégorie "Attribution de contact" n'apparaît pas dans le résultat du rapport<br>.
[Bug] Erreur lors de l'utilisation du signe @ dans la recherche<br>.
[Bug] L'utilisation d'un modèle par défaut provoque la création de modèles de modification en tant qu'objets réguliers<br>.
[Bug] Les caractères génériques ne sont pas remplacés dans le rapport<br>.
[Bug] Édition de liste : les champs de date des catégories personnalisées ne sont pas repris<br>.