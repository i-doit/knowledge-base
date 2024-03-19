<!-- TRANSLATED by md-translate -->
# Changelog 1.6

# Changelog 1.6

[Neue Funktion] Neue Kategorie zur Verknüpfung von Remote Management Controllern<br>
[Neue Funktion] Rückwärtige Ansicht "Gemanagte Geräte" für Remote Management Devices<br>
[Neue Funktion] Bearbeitung von Anschlusstypen in globaler Verkabelungsansicht<br>
[Neue Funktion] Dokumentation von Softwareversionen und Patchleveln<br>
[Neue Funktion] Listeneditierung: Erweiterung der Kontaktzuweisung um das Attribut "Rolle"<br>
[Neue Funktion] Modul Wartung (Zur Planung von Wartungsfenstern)<br>
[Neue Funktion] Auswertbarkeit von Attribut "Host im Cluster" für Kategorie Virtuelle Maschine<br>
[Neue Funktion] Neue Kategorie Remote Management Controller<br>
[Neue Funktion] Wartungsmodul: Option zur Auflösung von Kontaktgruppen<br>
[Neue Funktion] Neue globale Verkabelungsansichten<br>
[Neue Funktion] Import der JDISC Netzverbindungen unter Netzwerkverbindungen -> Connector/Listener<br>
[Neue Funktion] CSV Import spezifischer Kategorien<br>
[Neue Funktion] Direkter NSLOOKUP und PING aus IP Liste heraus<br>
[Neue Funktion] Benutzerdefinierte Kategorien auf der Übersichtsseite<br>
[Neue Funktion] Boolean-Wert für Attribut in einer benutzerdefinierten Kategorie<br>
[Neue Funktion] Erweiterung der Suche um "benutzerdefinierte Kategorien"<br>
[Neue Funktion] Benutzerdefinierte Kategorien zur Auswahl in Objektlisten<br>
[Neue Funktion] Schnelle Massenping Funktion durch Einbindung von NMAP oder FPing<br>
[Neue Funktion] Abfrage von DNS A-Records über NSLookup<br>
[Neue Funktion] Abfrage von DNS PTR-Records über NSLookup<br>
[Verbesserung]  Kategorie Gastsysteme: Vererbung von Gastsystemen aus einem Cluster<br>
[Verbesserung]  Filterung zu importierender Software beim JDisc Import (Blacklist/Whitelist)<br>
[Verbesserung]  JDisc: Neuer Modus "Aktualisieren (Neu inventarisiert)" implementieren<br>
[Verbesserung]  JDisc Import von Patchleveln<br>
[Verbesserung]  Neuer Button zum Leeren der Check MK Export Tags<br>
[Verbesserung]  Check_MK Export Sprache einstellen<br>
[Verbesserung]  Automatisches Generieren von Reports via Controller<br>
[Verbesserung]  JDISC Import: Option zum CMDB Status setzen<br>
[Verbesserung]  Neuer Objekttyp Remote Management Controller<br>
[Verbesserung]  Kategorie SLA: neues Feld<br>
[Verbesserung]  Anzahl anzuzeigender Objekte für jede Person einzeln konfigurierbar<br>
[Verbesserung]  Verbesserte Sortierung der Ports in der Kategorie Portübersicht<br>
[Verbesserung]  Optimierter RAM-Bedarf bei JDisc Import über den controller (php-cli)<br>
[Verbesserung]  update_data.xml für PRO Modul<br>
[Verbesserung]  Login Protokollierung in Log Datei: log/system<br>
[Verbesserung]  Rechtesystem: Einfachere Ausklammerung von Kategorierechten<br>
[Verbesserung]  Implizite Beziehung für Dateizuweisungen<br>
[Verbesserung]  Quickpurge über API<br>
[Verbesserung]  Neues Feld MTU in Kategorie Ports<br>
[Verbesserung]  Listeneditierung: Funktion zum Hinzufügen von Multivalue Einträgen<br>
[Verbesserung]  Neue CMDB Kategorie: Bilder<br>
[Verbesserung]  Neues Dialog+ Feld mit Mehrfachauswahl (z.B. in Hostadresse: DNS Server)<br>
[Verbesserung]  Link zu Objekten in der Objektliste in neuem Fenster öffnen<br>
[Verbesserung]  Diverse Erweiterungen der Kategorie WAN-Leitung<br>
[Änderung]      Änderung des JDisc Imports aus Liste der "Connected Devices": Es werden nur noch 1:1 verbundene Devices importiert (Trunk- bzw. virtualisierte Ports werden somit ausgelassen)<br>
[Änderung]      Umbenennung des "mandator" controller moduls und shell-scripts in "tenants"<br>
[Änderung]      Neues Log Verzeichnis: i-doit-root/log/ & Umzug der Log Dateien ldap_debug.txt, error_log und Update Logs<br>
[Änderung]      Einbindung von Monolog als neue i-doit logging Engine<br>
[Änderung]      Vorhandene Instanzen von "f_multiselect" ersetzen<br>
[Änderung]      Ungewollte Organisationsbeziehungen beim update löschen<br>
[Bug]           Fehlende Sortierung der Höheneinheiten in Schränken führt dazu, dass diese nicht im Raum umpositioniert werden können<br>
[Bug]           Vertragsbeginn und Vertragsende werden in Kategorie Vertragszuweisung nicht aktualisiert, wenn sie geändert werden<br>
[Bug]           Systemweite Einstellungen zu Unique-Checks wurden parallel zu den Mandanten-Einstellungen migriert<br>
[Bug]           OCS-Import: Klarere Abgrenzung eines erfolgreichen Imports von überschriebenen Objekten<br>
[Bug]           Objekte können nicht aus Templates erzeugt werden, wenn diese über ein &-Zeichen im Titel verfügen<br>
[Bug]           Verrechtung auf Upload von Dateien in Datei-Browser nicht möglich<br>
[Bug]           Portübersicht stellt nicht alle Inhalte vollständig dar<br>
[Bug]           Frequenz wird in Reports ohne Einheit ausgegeben.<br>
[Bug]           Massenänderung trägt Logbuch Historie "von" und "auf" verkehrt ein (verwechselt)<br>
[Bug]           Lösen einer Zuordnung in der IP-Liste über die Schaltfläche "Lösen" entfernt nicht die Beziehung<br>
[Bug]           Verwendung der MAC-Adresse in Objekt-Liste führt zu mehrfachen Einträgen in der Objekt-Liste<br>
[Bug]           Default VLAN kann erst ausgewählt werden, nachdem der Datensatz des Ports gespeichert wurde<br>
[Bug]           Steckerart eines Ports wird nicht auf die Anschlussart des Anschlusses übertragen<br>
[Bug]           Angabe der Kapazität von Speicherriegeln in MB führt dazu, dass die Gesamtkapazität in der Listenansicht mit 0GB dargestellt wird<br>
[Bug]           CSS Cache verursacht unschönes Design in einigen Modulen<br>
[Bug]           "Alle Tickets" Kategorie liefert keine Inhalte - RT Connector defekt?<br>
[Bug]           Übernahme des Pagelimits für Listen in Systemeinstellungen<br>
[Bug]           Konfiguration für SMTP Benutzer und Passwort<br>
[Bug]           Hat ein Objekt mehrere Beziehungen zu einem Anderen, wird in der ersten Ebene nur eine Beziehung dargestellt<br>
[Bug]           Migrationsobjekte haben die spezifische Kategorie Netz zugewiesen<br>
[Bug]           JS Fehler in CMDB-Explorer, wenn Objekttypen mit Hochkomma im Namen existieren<br>
[Bug]           Manchen Einträgen der Kategorie Hostadresse kann keine DNS-Domäne hinzugefügt werden.<br>
[Bug]           API Methode idoit.version liefert Fehlermeldung<br>
[Bug]           In Kategorie "JDisc Discovery": Kein Feedback bei nicht erreichbarem Webservice<br>
[Bug]           Quickinfo aktualisiert Daten der Kontaktzuweisung nicht sofort<br>
[Bug]           Nicht benötigte Schaltflächen in Kategorie "Mitglieder" unter Personengruppen<br>
[Bug]           Geänderte Personengruppenmitgliedschaften werden nicht im Logbuch angezeigt<br>
[Bug]           Trotz Recht zur Bearbeitung einer Kategorie ist die Anpassung über die Listeneditierung nicht möglich.<br>
[Bug]           Hostname wird immer als eindeutig vorausgesetzt, selbst wenn keine Validierung konfiguriert wurde<br>
[Bug]           JDisc Import: Aufgrund von dopplungen erfolgt die Identifizierung des Objekts nicht mehr zusätzlich über die IP Adresse<br>
[Bug]           Nicht nachvollziehbarer Editier"modus" bei benutzerdefinierten Multi-Value-Kategorien ohne Auswahl eines Eintrags bei Klick auf "Editieren"<br>
[Bug]           Einträge zu einer Benutzerdef. Kategorie werden nicht als "normal" sondern als "archiviert" angelegt, wenn zuvor ein andrer Eintrag archiviert wurde.<br>
[Bug]           DNS Domäne kann nicht gespeichert werden, wenn diese bereits verwendet wurde / existiert<br>
[Bug]           "Monitoring"-Widget nicht in Widget-Liste enthalten.<br>
[Bug]           OCS-Import: Klarere Beschreibung von "Error 95"<br>
[Bug]           Fehlermeldung beim Versuch mit "Speichern" eine Änderung in der Kategorie "Speicher" vorzunehmen (Validierung Aktiv)<br>
[Bug]           JDISC-Konfiguration: Zusätzliche Optionen werden nicht gespeichert.<br>
[Bug]           Fehlermeldung in "Verkabelung/Anschlüsse" bei Sortierung nach "Kabel" oder "Faser/Wellenlänge".<br>

[Nouvelle fonction] Nouvelle catégorie pour lier les contrôleurs de gestion à distance<br>
[Nouvelle fonction] Vue arrière "Périphériques gérés" pour les contrôleurs de gestion à distance<br>
[Nouvelle fonction] Modification des types de connexion dans la vue globale du câblage<br>
[Nouvelle fonction] Documentation des versions logicielles et des niveaux de correctifs<br>
[Nouvelle fonction] Édition de liste : extension de l'attribution des contacts par l'attribut "rôle"<br>
[Nouvelle fonction] Module Maintenance (pour la planification des fenêtres de maintenance)<br>
[Nouvelle fonction] Possibilité d'évaluer l'attribut "Hôte dans le cluster" pour la catégorie Machine virtuelle<br>.
[Nouvelle fonction] Nouvelle catégorie Contrôleur de gestion à distance<br>
[Nouvelle fonction] Module de maintenance : option de résolution des groupes de contacts<br>
[Nouvelle fonction] Nouvelles vues globales de câblage<br>
[Nouvelle fonction] Importation des connexions réseau JDISC sous Connexions réseau -> Connecteur/Listener<br>
[Nouvelle fonction] Importation CSV de catégories spécifiques<br>
[Nouvelle fonction] NSLOOKUP et PING directs à partir de la liste IP<br>
[Nouvelle fonction] Catégories définies par l'utilisateur sur la page d'aperçu<br>
[Nouvelle fonction] Valeur booléenne pour un attribut dans une catégorie personnalisée<br>
[Nouvelle fonction] Extension de la recherche par "catégories définies par l'utilisateur"<br>
[Nouvelle fonction] Catégories personnalisées à sélectionner dans les listes d'objets<br>
[Nouvelle fonction] Fonction ping de masse rapide par intégration de NMAP ou FPing<br>
[Nouvelle fonction] Interrogation des enregistrements DNS A via NSLookup<br>
[Nouvelle fonction] Interrogation des enregistrements DNS PTR via NSLookup<br>
[Amélioration] Catégorie Systèmes invités : héritage des systèmes invités d'un cluster<br>
[Amélioration] Filtrage des logiciels à importer lors de l'importation JDisc (liste noire/liste blanche)<br>
[Amélioration] JDisc : Implémenter un nouveau mode "Actualiser (Réinventé)"<br>
[Amélioration] Importation JDisc des niveaux de patch<br>
[Amélioration] Nouveau bouton pour vider les tags Check MK Export<br>
[Amélioration] Réglage de la langue Check_MK Export<br>
[Amélioration] Génération automatique de rapports via le contrôleur<br>
[Amélioration] JDISC Import : définir l'option pour le statut CMDB<br>
[Amélioration] Nouveau type d'objet Contrôleur de gestion à distance<br>
[Amélioration] Catégorie SLA : nouveau champ<br>
[Amélioration] Nombre d'objets à afficher configurable individuellement pour chaque personne<br>
[Amélioration] Amélioration du tri des ports dans la catégorie Aperçu des ports<br>
[Amélioration] Optimisation des besoins en RAM lors de l'importation de JDisc via le contrôleur (php-cli)<br>
[Amélioration] update_data.xml pour le module PRO<br>
[Amélioration] Journalisation des logs dans le fichier log : log/system<br>
[Amélioration] Système de droits : Exclusion plus simple des droits de catégorie<br>
[Amélioration] Relation implicite pour les assignations de fichiers<br>
[Amélioration] Quickpurge via API<br>
[Amélioration] Nouveau champ MTU dans la catégorie Ports<br>
[Amélioration] Édition de liste : fonction d'ajout d'entrées multivaluées<br>
[Amélioration] Nouvelle catégorie CMDB : Images<br>
[Amélioration] Nouveau champ Dialog+ avec choix multiple (par ex. dans Adresse hôte : serveur DNS)<br>
[Amélioration] Ouverture d'un lien vers des objets de la liste d'objets dans une nouvelle fenêtre<br>
[Amélioration] Diverses extensions de la catégorie Ligne WAN<br>
[Modification] Modification de l'importation JDisc à partir de la liste des "Connected Devices" : seuls les périphériques connectés 1:1 sont désormais importés (les ports trunk ou virtualisés sont ainsi omis)<br>
[Changement du nom du module de contrôle "mandator" et des scripts shell en "tenants"<br>.
[Changement] Nouveau répertoire de logs : i-doit-root/log/ & déplacement des fichiers logs ldap_debug.txt, error_log et update logs<br>
[Changement] Intégration de Monolog comme nouveau moteur de logging i-doit<br>
[Modification] Remplacer les instances existantes de "f_multiselect"<br>
[modification] Suppression des relations organisationnelles non souhaitées lors de la mise à jour<br>
[Bug] L'absence de tri des unités de hauteur dans les armoires entraîne l'impossibilité de les repositionner dans la pièce<br>
[Bug] Le début et la fin du contrat ne sont pas mis à jour dans la catégorie Attribution de contrat lorsqu'ils sont modifiés<br>.
[Bug] Les paramètres des contrôles uniques à l'échelle du système ont été migrés en parallèle avec les paramètres des clients<br>.
[Bug] Importation OCS : distinction plus claire entre une importation réussie et des objets écrasés<br>.
[Bug] Les objets ne peuvent pas être créés à partir de modèles s'ils ont un signe & dans le titre<br>.
[Bug] Impossibilité d'autoriser le téléchargement de fichiers dans l'explorateur de fichiers<br>.
[Bug] L'aperçu des ports n'affiche pas complètement tous les contenus<br>.
[Bug] La fréquence est indiquée sans unité dans les rapports <br>.
[Bug] La modification en masse porte l'historique du journal "de" et "à" à l'envers (confondu)<br>
[Bug] La suppression d'une association dans la liste des IP via le bouton "Supprimer" ne supprime pas la relation<br>.
[Bug] L'utilisation de l'adresse MAC dans la liste des objets entraîne des entrées multiples dans la liste des objets<br>.
[Bug] Le VLAN par défaut ne peut être sélectionné qu'après avoir enregistré l'enregistrement du port<br>.
[Bug] Le type de connecteur d'un port n'est pas transféré au type de connecteur du port<br>.
[Bug] L'indication de la capacité des verrous de mémoire en Mo provoque l'affichage de la capacité totale en 0GB dans la vue en liste<br>.
[Bug] Cache CSS provoque un design inesthétique dans certains modules<br>
[Bug] La catégorie "Tous les billets" ne fournit aucun contenu - RT Connector défectueux?<br>
[Bug] Reprise de la limite de page pour les listes dans les paramètres système<br>.
[Bug] Configuration de l'utilisateur et du mot de passe SMTP<br>
[Bug] Si un objet a plusieurs relations avec un autre, une seule relation est représentée au premier niveau<br>.
[Bug] Les objets de migration sont affectés à la catégorie spécifique Réseau<br>.
[Bug] Erreur JS dans l'explorateur CMDB lorsqu'il existe des types d'objets avec une apostrophe dans le nom<br>.
[Bug] Impossible d'ajouter un domaine DNS à certaines entrées de la catégorie Adresse de l'hôte.<br>
[Bug] La méthode API idoit.version renvoie un message d'erreur<br>.
[Bug] Dans la catégorie "JDisc Discovery" : pas de feedback si le service web n'est pas accessible<br>.
[Bug] L'info-bulle ne met pas immédiatement à jour les données d'attribution des contacts<br>.
[Bug] Boutons inutiles dans la catégorie "Membres" sous les groupes de personnes<br>.
[Bug] Les appartenances à des groupes de personnes modifiées ne sont pas affichées dans le journal de bord<br>.
[Bug] Malgré le droit d'éditer une catégorie, l'adaptation via l'édition de liste n'est pas possible.<br>
[Bug] Le nom d'hôte est toujours supposé unique, même si aucune validation n'a été configurée<br>.
[Bug] Importation JDisc : en raison de doublons, l'identification de l'objet ne se fait plus en plus par l'adresse IP<br>.
[Bug] Mode d'édition non compréhensible pour les catégories multi-valeurs définies par l'utilisateur sans sélection d'une entrée en cliquant sur "Editer"<br>.
[Bug] Les entrées d'une catégorie personnalisée ne sont pas créées comme "normales" mais comme "archivées" si une autre entrée a été archivée auparavant <br>.
[Bug] Le domaine DNS ne peut pas être enregistré s'il a déjà été utilisé / existe<br>.
[Bug] Le widget "Monitoring" n'est pas inclus dans la liste des widgets.<br>
[Bug] Importation OCS : description plus claire de "Error 95"<br>
[Bug] Message d'erreur lors d'une tentative de modification de la catégorie "Mémoire" avec "Enregistrer" (Validation Active)<br>.
[Bug] Configuration JDISC : les options supplémentaires ne sont pas enregistrées.<br>
[Bug] Message d'erreur dans "Câblage/Ports" en cas de tri par "câble" ou "fibre/longueur d'onde".<br>