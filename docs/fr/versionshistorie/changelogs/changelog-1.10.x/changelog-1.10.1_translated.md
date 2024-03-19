<!-- TRANSLATED by md-translate -->
# Changelog 1.10.1

# Changelog 1.10.1

[Verbesserung]  Neue Attribute in Kategorie "Check_MK (Host) > Export Parameter"  <br>
[Verbesserung]  Gesamtkapazität von Festplatten im Report Manager  <br>
[Verbesserung]  Listenansicht mit mehr als zehn Spalten  <br>
[Verbesserung]  Weitere Platzhalter für Benachrichtigungen: Modell und Hersteller  <br>
[Verbesserung]  JDISC Import von Software: Optional Software Family anstatt Software Version für Objekttitel verwenden  <br>
[Verbesserung]  IP-Listen lassen sich markieren und kopieren  <br>
[Verbesserung]  Oberfläche der Kategorie Vertragszuweisung aktualisieren  <br>
[Verbesserung]  JDisc Import: Import des Attributes SNMP Syslocation in die Standort Kategorie  <br>
[Verbesserung]  Die Fuzzy-Suggestion ist nun konfigurierbar  <br>
[Verbesserung]  Validierung der Benutzereinstellungen  <br>
[Verbesserung]  Rack: Objektlink für unpositionierte Objekte  <br>
[Verbesserung]  Benutzerdefinierte Spaltenbreite für Tabellen  <br>
[Verbesserung]  Templates: Keine Vorsortierung bei anlegen eines Objektes mit gewähltem Objekttypen  <br>
[Verbesserung]  Warnhinweis zum aktualisieren der Konfiguration der Objektliste abändern  <br>
[Verbesserung]  Suche: Verwenden der Suche mit weniger als drei Zeichen nicht möglich  <br>
[Verbesserung]  Unterstützung von Expliziten Beziehungen bei Benutzerdefinierten Kategorien für den Felttyp Beziehungs-Browser  <br>
[Verbesserung]  GUI Komponente zum auswählen von Intervallen  <br>
[Verbesserung]  Konfiguration von Objekten als "positionierbar im Schrank" für neue Installationen/Mandanten  <br>
[Verbesserung]  JDISC: Feld mit Bezeichnung für verschiedene Standorte aus JDISC  <br>
[Verbesserung]  Export des CMDB-Explorers nach PNG oder JPG  <br>
[Verbesserung]  CMDB-Explorer: Legende zeigt nur Typen, welche auch Objekte beinhalten  <br>
[Änderung]      Smarty Cache-Daten in den i-doit Cache Ordner speichern  <br>
[Änderung]      Veraltete Dateien und Verzeichnisse entfernt  <br>
[Bug]           Aufruf der neuen Console aus anderen Verzeichnissen  <br>
[Bug]           Standortänderungen werden nicht an die Chassiübersicht übergeben  <br>
[Bug]           Sprachkonstanten werden in der I-Doit Open angezeigt  <br>
[Bug]           Reports werden in Benutzerdefinierte Kategorien aufgerufen wenn mindestens ein Objekt-Browser Typ konfiguriert ist  <br>
[Bug]           Platzhalter "Modell" und "Service Tag" aus Kategorie "Modell" fehlen beim QR-Code-Reader  <br>
[Bug]           Duplizieren berücksichtigt selbst bei expliziter Auswahl nicht die Kontaktzuweisung  <br>
[Bug]           Attribute der Kategorie "Lokaler Massenspeicher" kann auf der Übersichtssseite nicht angezeigt werden  <br>
[Bug]           Beim Aufruf einer Monitoring-Konfiguration wird die Auswahl "Aktiv" im Standard immer auf Ja gesetzt  <br>
[Bug]           Beim duplizieren werden Kategorien dupliziert die nicht angehakt wurden (bei Chassis?)  <br>
[Bug]           CSV-Export von Werten mit Einheiten aus Objektlisten heraus erzeugt falsche Ausgabe  <br>
[Bug]           In Kategorie "Betriebssystem" lassen sich Attribute "Variante" und "Versionsnummer" nicht in Listen einblenden  <br>
[Bug]           Import von XML-Dateien nicht möglich  <br>
[Bug]           JDisc-Import weist Clustermitgliedschaften erst zu und löscht diese dann  <br>
[Bug]           Bug beim Import via Console mit JDisc-Import  <br>
[Bug]           Beschreibungstext einer Personengruppe wird nicht auf der Übersichtsseite angezeigt  <br>
[Bug]           Rückgabewert für attach_person via API  <br>
[Bug]           API: C__CATG__IMAGE: image_selection besitzt falschen Datentyp  <br>
[Bug]           Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes  <br>
[Bug]           XML-Import per Console funktioniert nicht  <br>
[Bug]           Bearbeiten der Softwarezuweisung über die Listeneditierung löscht Informationen der Kategorie "Betriebssystem"  <br>
[Bug]           API: cmdb.category.read liest nur den ersten Wert bei benutzerdefinierten Mehrfach-Dialog-Feldern  <br>
[Bug]           Livestatus führt zu langen Wartezeiten in Objektlisten  <br>
[Bug]           API: Logs werden auch mit deaktivierter Option geschrieben  <br>
[Bug]           API: Änderungen der Kategorie Hostadresse nicht möglich  <br>
[Bug]           API: Das Feld LDAP-DN kann nicht gespeichert werden  <br>
[Bug]           API: Falscher DatenTyp (C__CATG__IMAGE/image)  <br>
[Bug]           API: Purge request meldet Database error  <br>
[Bug]           API: Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes  <br>
[Bug]           Apache-Konfiguration in [I-DOIT]/.htaccess greift nicht für Version 2.4  <br>
[Bug]           CMDB Explorer: Export von SVG funktioniert nur mit Firefox  <br>
[Bug]           Dialog-Admin: Benutzerdefinierte Dialoge tauchen mehrfach auf  <br>
[Bug]           Fehlerhafte Ausgabe bei Console ldap-sync  <br>
[Bug]           Variabler Report auf Dashboard erzeugt Fehler  <br>
[Bug]           Fehler beim Aufruf der Console: Column 'isys_obj__id' in where clause is ambiguous  <br>
[Bug]           Feld "Tags" steht im Report-Manager nicht zur Verfügung  <br>
[Bug]           Archivieren/Löschen einer Softwarezuweisung aus der Kategorie "Installation" lässt eine Beziehung im Zustand "Normal" zurück  <br>
[Bug]           Kategorie "Hostadresse" erzeugt unfertigen Eintrag, wenn diese auf der Übersichtsseite verwendet wird  <br>
[Bug]           Listen: Sortieren nach Spalte Bereiche in Netzbereichen nicht möglich  <br>
[Bug]           Datenbankfehler bei der Installation einer Lizenz innerhalb eines Mandanten  <br>
[Bug]           Seitennavigation wechselt teilweise auch die Zustandsansicht  <br>
[Bug]           Bearbeiten der Kategorie "Passwörter" über die Listeneditierung speichert das Passwort auch verschlüsselt auf der Oberfläche  <br>
[Bug]           Löschen einer größeren Anzahl (>500) von Objekten nicht möglich  <br>
[Bug]           Vertragszuweisung: Datum wird im Feld Kundennummer angezeigt  <br>
[Bug]           Listeneditierung: Spezifische Kategorie Schrank fehlt  <br>
[Bug]           JDisc: Standardtemplate wird bei Import nicht vollständig angewandt  <br>
[Bug]           Report Manager: Fehlende Attribut Layer-2 Netzzuordnung  <br>
[Bug]           Falsche Zuweisung von JDisc Informationen bei VMware Cluster-Diensten  <br>
[Bug]           Dialog-Feld des Attributs "Service-Kategorie" kann nicht im Dialog-Admin bearbeitet werden.  <br>
[Bug]           JDisc: Discovery verwendet Hostnamen anstatt FQDN  <br>
[Bug]           Import des Garantiezeitraums über CSV nicht möglich  <br>
[Bug]           PHP 7.1: Fehler im Reportmanager  <br>
[Bug]           Auswahl der Rechte für einzelne Controller Handler nicht möglich  <br>
[Bug]           Mehrfacher Klick auf die Buttons zum Archivieren/Löschen erlaubt das Überspringen von Zuständen  <br>
[Bug]           Validierungsfehlermeldung nach Eingabe des ersten Eintrags der Kategorie Datenbankzuweisung  <br>
[Bug]           OCS-Import des Attributs "Domäne" ist nicht möglich  <br>
[Bug]           Einige Dialog- und Dialog-Plus-Felder bieten auch archivierte/gelöschte Objekte zur Auswahl an  <br>
[Bug]           Standorte: Sortierung nicht korrekt wenn der Pfad zu lang ist  <br>
[Bug]           Reports: Attribut Zustand unvollständig  <br>
[Bug]           Sortierung nach Datum in Multi-Value inkorrekt  <br>
[Bug]           Templates: Keine Sortierung ersichtlich, möglich  <br>
[Bug]           Logbuch: Änderungen der Chassiposition etc. am Gerät wird nicht im Logbuch eingetragen  <br>
[Bug]           Duplizierte Chassis werden Chassiinhalte mit dupliziert  <br>
[Bug]           Variable %OBJID% nimmt letztes erstelltes Objekt als ID  <br>
[Bug]           Report Manager: Report "Logbook" aus Online Repository zeigt Objektname bei "C__LOGBOOK_EVENT__OBJECT_PURGED" in Spalte "Category"  <br>
[Bug]           Falsche Darstellung von Rechten in Kategorie "Rechtevergabe"  <br>
[Bug]           Identischer Name unterschiedlicher Kategorien (Servicezuweisung)  <br>
[Bug]           Widget "Meine geänderten Objekte" baut inkorrekten Link bei Verwendung eines Proxys auf  <br>
[Bug]           JDisc-Import löst Layer-2-Netzzzuweisung zu Ports  <br>
[Bug]           Kategorie "Datenbankzuweisung" nicht fett hervorgehoben, wenn Einträge enthalten  <br>
[Bug]           Fehlerhafte Sortierung nach ObjID anstatt nach dem angezeigten Text  <br>
[Bug]           Umlaute werden in der Lizenzübersicht nicht korrekt dargestellt  <br>
[Bug]           Beim Duplizieren eines Objektes wird das Options-Fenster nicht geschlossen  <br>
[Bug]           Mit CMDB-Explorer kann man in Chrome keine SVG-Grafik exportieren  <br>
[Bug]           Auswahl mehrerer Objekte über Checkboxen in i-doit open möglich  <br>
[Bug]           JDISC: Import überschreibt den Formfaktor von Objekten  <br>
[Bug]           Breite Spalten in der Kategorie Kontaktzuweisung verschieben die Informationen aus dem angezeigten Bereich  <br>
[Bug]           Listeneditierung löscht Verbindung mit Anschluss wenn das Interface bearbeitet wird  <br>

[Amélioration] Nouveaux attributs dans la catégorie "Check_MK (Host) > Export Parameter" <br>.
[Amélioration] Capacité totale des disques durs dans le gestionnaire de rapports <br>
[Amélioration] Vue en liste avec plus de dix colonnes <br>
[Amélioration] Plus de caractères génériques pour les notifications : Modèle et fabricant <br>
[Amélioration] Importation JDISC de logiciels : utilisation facultative de Software Family au lieu de Software Version pour les titres d'objets <br>
[Amélioration] Possibilité de marquer et de copier les listes IP <br>
[Amélioration] Mise à jour de l'interface de la catégorie Attribution de contrat <br>
[Amélioration] JDisc Import : Importation de l'attribut SNMP Syslocation dans la catégorie Site <br>
[Amélioration] La suggestion floue est désormais configurable <br>
[Amélioration] Validation des paramètres utilisateur <br>
[Amélioration] Rack : lien d'objet pour les objets non positionnés <br>
[Amélioration] Largeur de colonne définie par l'utilisateur pour les tableaux <br>
[Amélioration] Templates : pas de pré-tri lors de la création d'un objet avec un type d'objet sélectionné <br>
[Amélioration] Modifier l'avertissement de mise à jour de la configuration de la liste d'objets <br>.
[Amélioration] Recherche : impossible d'utiliser la recherche avec moins de trois caractères <br>.
[Amélioration] Prise en charge des relations explicites dans les catégories définies par l'utilisateur pour le navigateur de relations de type Felt <br>.
[Amélioration] Composant GUI pour sélectionner des intervalles <br>
[Amélioration] Configuration des objets comme "positionnables dans l'armoire" pour les nouvelles installations/clients <br>.
[Amélioration] JDISC : champ avec désignation pour différents sites depuis JDISC <br>
[Amélioration] Exportation de l'explorateur CMDB en PNG ou JPG <br>
[Amélioration] Explorateur CMDB : la légende n'affiche que les types qui contiennent aussi des objets <br>
[Modification] Enregistrer les données du cache Smarty dans le dossier de cache i-doit <br>
[Changement] Suppression des fichiers et répertoires obsolètes <br>
[bug] Appel de la nouvelle console depuis d'autres répertoires <br>
[Bug] Les changements de site ne sont pas transmis à l'aperçu du massif <br>
[Bug] Les constantes de langue sont affichées dans I-Doit Open <br>
[Bug] Les rapports sont appelés dans les catégories personnalisées si au moins un type d'explorateur d'objets est configuré <br>
[Bug] Les caractères génériques "Modèle" et "Service Tag" de la catégorie "Modèle" sont manquants dans le lecteur de code QR <br>.
[Bug] La duplication ne prend pas en compte l'attribution des contacts même si elle est explicitement sélectionnée <br>
[Bug] Les attributs de la catégorie "Mémoire de masse locale" ne peuvent pas être affichés sur la page de résumé <br>.
[Bug] Lors de l'appel d'une configuration de surveillance, le choix "Actif" est toujours réglé sur Oui par défaut <br>.
[Bug] Lors de la duplication, les catégories qui n'ont pas été cochées sont dupliquées (pour les châssis ?) <br>
[Bug] L'exportation CSV de valeurs avec des unités à partir de listes d'objets produit une sortie erronée <br>
[Bug] Dans la catégorie "Système d'exploitation", les attributs "Variante" et "Numéro de version" ne peuvent pas être affichés dans les listes <br>.
[Bug] Impossible d'importer des fichiers XML <br>.
[Bug] L'importation JDisc attribue d'abord les appartenances aux clusters et les supprime ensuite <br>.
[Bug] Bug lors de l'importation via Console avec JDisc-Import <br>
[Bug] Le texte de description d'un groupe de personnes n'est pas affiché sur la page d'aperçu <br>.
[Bug] Valeur de retour pour attach_person via API <br>
[Bug] API : C__CATG__IMAGE : image_selection possède un mauvais type de données <br>
[Bug] L'activation d'une constante d'état CMDB invalide entraîne la suppression présumée de l'objet <br>.
[Bug] L'importation XML via la console ne fonctionne pas <br>
[Bug] La modification de l'attribution des logiciels via l'édition de listes supprime les informations de la catégorie "Système d'exploitation" <br>
[Bug] API : cmdb.category.read ne lit que la première valeur pour les champs de dialogue multiples définis par l'utilisateur <br>
[Bug] L'état vivant provoque de longs temps d'attente dans les listes d'objets <br>
[Bug] API : Les logs sont écrits même si l'option est désactivée <br>
[Bug] API : Impossible de modifier la catégorie Adresse de l'hôte <br>
[Bug] API : Le champ LDAP-DN ne peut pas être enregistré <br>
[Bug] API : Mauvais type de données (C__CATG__IMAGE/image) <br>
[Bug] API : Purge request signale une erreur de base de données <br>
[Bug] API : Définition d'une constante d'état CMDB invalide entraîne la suppression présumée de l'objet <br>
[Bug] La configuration d'Apache dans [I-DOIT]/.htaccess ne fonctionne pas pour la version 2.4 <br>
[Bug] CMDB Explorer : l'exportation de SVG ne fonctionne qu'avec Firefox <br>
[Bug] Dialogue Admin : les boîtes de dialogue personnalisées apparaissent plusieurs fois <br>
[Bug] Sortie erronée sur Console ldap-sync <br>
[Bug] Rapport variable sur le tableau de bord génère des erreurs <br>
[Bug] Erreur lors de l'appel à la console : Column 'isys_obj__id' in where clause is ambiguous <br>
[Bug] Le champ "Tags" n'est pas disponible dans le gestionnaire de rapports <br>
[Bug] Archiver/supprimer une attribution de logiciel de la catégorie "Installation" laisse une relation à l'état "Normal" <br>
[Bug] La catégorie "Adresse de l'hôte" crée une entrée inachevée lorsqu'elle est utilisée sur la page de résumé <br>.
[Bug] Listes : impossible de trier par colonne Domaines dans les domaines de réseau <br>
[Bug] Erreur de base de données lors de l'installation d'une licence au sein d'un client <br>
[Bug] La navigation par page change parfois aussi la vue d'état <br>
[Bug] L'édition de la catégorie "Mots de passe" via l'édition de liste enregistre également le mot de passe sous forme cryptée dans l'interface <br>.
[Bug] Impossible de supprimer un grand nombre d'objets (>500) <br>
[Bug] Attribution de contrat : la date est affichée dans le champ numéro de client <br>
[Bug] Édition de liste : catégorie spécifique armoire manquante <br>
[Bug] JDisc : Le modèle par défaut n'est pas entièrement appliqué lors de l'importation <br>
[Bug] Report Manager : Attribut de maillage de couche 2 manquant <br>
[Bug] Attribution incorrecte des informations JDisc pour les services de cluster VMware <br>.
[Bug] Le champ de dialogue de l'attribut "Catégorie de service" ne peut pas être édité dans l'Admin de dialogue.  <br>
[Bug] JDisc : Discovery utilise le nom d'hôte au lieu du FQDN <br>
[Bug] Impossible d'importer la période de garantie via CSV <br>
[Bug] PHP 7.1 : erreur dans le gestionnaire de rapports <br>
[Bug] Impossible de sélectionner les droits pour les gestionnaires de contrôleurs individuels <br>
[Bug] Cliquer plusieurs fois sur les boutons d'archivage/suppression permet de sauter des états <br>
[Bug] Message d'erreur de validation après la saisie de la première entrée de la catégorie Attribution de base de données <br>
[Bug] L'importation OCS de l'attribut "Domaine" n'est pas possible <br>
[Bug] Certains champs de dialogue et de dialogue plus proposent également des objets archivés/supprimés à sélectionner <br>
[Bug] Emplacements : le tri n'est pas correct si le chemin est trop long <br>
[Bug] Rapports : attribut état incomplet <br>
[Bug] Tri par date incorrect dans les multi-valeurs <br>.
[Bug] Templates : pas de tri visible, possible <br>
[Bug] Journal de bord : les modifications de la position du châssis etc. sur l'appareil ne sont pas enregistrées dans le journal de bord <br>
[Bug] Duplication de châssis : le contenu du châssis est également dupliqué <br>.
[Bug] La variable %OBJID% prend le dernier objet créé comme ID <br>
[Bug] Report Manager : Le rapport "Logbook" du Online Repository affiche le nom de l'objet dans "C__LOGBOOK_EVENT__OBJECT_PURGED" dans la colonne "Category" <br>
[Bug] Mauvaise représentation des droits dans la catégorie "Attribution de droits" <br>
[Bug] Nom identique de différentes catégories (attribution de service) <br>
[Bug] Le widget "Mes éléments modifiés" crée un lien incorrect lors de l'utilisation d'un proxy <br>.
[Bug] L'importation de JDisc résout l'attribution de réseau de couche 2 aux ports <br>
[Bug] La catégorie "Attribution de base de données" n'est pas mise en évidence en gras lorsqu'elle contient des entrées <br>
[Bug] Erreur de tri par ObjID au lieu du texte affiché <br>
[Bug] Les trémas ne s'affichent pas correctement dans l'aperçu des licences <br>
[Bug] La fenêtre d'options ne se ferme pas lors de la duplication d'un objet <br>.
[Bug] Impossible d'exporter un graphique SVG avec CMDB-Explorer dans Google Chrome <br>.
[Bug] Possibilité de sélectionner plusieurs objets via des cases à cocher dans i-doit open <br>
[Bug] JDISC : l'importation écrase le facteur de forme des objets <br>
[Bug] Les colonnes larges dans la catégorie Attribution de contact déplacent les informations hors de la zone affichée <br>
[Bug] L'édition de liste supprime la connexion avec le port lors de l'édition de l'interface <br>.