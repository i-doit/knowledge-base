<!-- TRANSLATED by md-translate -->
# Changelog 1.3

# Changelog 1.3

[Erweiterung]  Schnittstelle zum IT Monitoring System Check_MK (http://mathias-kettner.de/check_mk.html)<br>
[Erweiterung]  Check_MK: Validierung von Exports<br>
[Erweiterung]  Neue Kategorie für N:M Beziehung für Software und Check_MK Services<br>
[Erweiterung]  Vererbte Ansicht in der Softwarezuweisung für Check_MK Services<br>
[Erweiterung]  Check_MK: Neuer Logbuch Controller zum Updaten von historischen Statusinformationen zu Hosts<br>
[Erweiterung]  Bünderlung der Nagios und Check_MK Status Abfragen in Listenansichten<br>
[Erweiterung]  Diverse Optimierungen im neuen i-doit Design<br>
[Erweiterung]  Neues Hinweis- und Erfolgsmeldungssystem in der i-doit Oberfläche<br>
[Erweiterung]  Erweiterung der Listeneditierung um weitere Kategorien (z.B. Hostadresse, SW-Zuweisung)<br>
[Erweiterung]  Neuer Feldtyp Objekt-Beziehung bei den Benutzerdefinierten Kategorien<br>
[Erweiterung]  Neues Feld "Mountpoint" in Kategorie "Freigabezugriff"<br>
[Erweiterung]  Speicherbare CSV Profile<br>
[Erweiterung]  CSV Import: Keyfeld für Referenzierung eines Objektes und Ermöglichung von Updates<br>
[Erweiterung]  CSV Import: Import in Beschreibungsfelder<br>
[Erweiterung]  Neues Feld "Zahlweise" in Kategorie Vertragsinformationen<br>
[Erweiterung]  Möglichkeit zur Auswahl eines bestehenden Objektbildes<br>
[Erweiterung]  Import von mehreren JDisc/JEDI Servern<br>
[Erweiterung]  Darstellung des CMDB Status in der Schrankansicht<br>
[Erweiterung]  CMDB Status in Quickinfo mit aufnehmen<br>
[Erweiterung]  Neue globale Kategorie Anschrift<br>
[Erweiterung]  Firma beim LDAP-Kontakte-Sync mit importieren und entsprechend verknüpfen<br>
[Erweiterung]  Nur bestimte LDAP Server per Kommandozeile synchronisieren<br>
[Erweiterung]  Verwaltungsoberfläche für Rollen in der Kategorie Kontaktzuweisung<br>
[Erweiterung]  Direkteinstieg zu bestimmter Objekt-ID über die globale Suche mit # Präfix (#1234)<br>
[Erweiterung]  Möglichkeit zur Anzeige von Text unterhalb eines QR Codes<br>
[Erweiterung]  Aktualisierung der JDisc-Schnittstelle (Version 3)<br>
[Erweiterung]  JDisc Import von Blades<br>
[Erweiterung]  JDisc Import von Clusterkonfigurationen<br>
[Erweiterung]  JDisc Import von IPv6 Adressen<br>
[Erweiterung]  JDisc Erkennung von Switch Interfaces<br>
[Erweiterung]  Exportierter "contact_name" im Nagios Export nun benutzerdefiniert<br>
[Erweiterung]  Neuer Rechtepfad: Kategorien in Lokation<br>
[Erweiterung]  Neuer Rechtepfad: Kategorien in Objekt<br>
[Erweiterung]  Update der i-doit Template Enging "Smarty" von Version 2 auf 3.1.15<br>
[Erweiterung]  Zwei neue Platzhalter %objectname_downcase% und "%objectname_uppercase%" in Kategorie Zugriff<br>
[Erweiterung]  Neue BTU Angaben in Rackansicht<br>
[Erweiterung]  Neues Settings Handling; Die config.inc.php wurde aus dem Dateisystem in die Oberfläche (Verwaltung -> Systemeinstellungen) verlagert<br>
[Bugfix]       Logbuch Änderungen werden nicht mehr protokolliert<br>
[Bugfix]       Spezifische Kategorie Mobiltelefon umbenannt in Mobilfunk<br>
[Bugfix]       Kategorie "Cluster": Beim öffnen des Beziehungs- Objektbrowsers, funktioniert die Preselection nicht. Es wird immer die Root-Lokation selektiert.<br>
[Bugfix]       Layer-2-Netze: Kategorie "Zugewiesene log. Ports": Spalte Objekt zeigt nur den Objekttypen und nicht das Objekt an.<br>
[Bugfix]       Generelle merging Probleme bei den Kategorien Port, Logischer Port und Hostadresse beim JDisc Import<br>
[Bugfix]       Beim OCS Import wurden die zu aktualisierenden Objekte neu erstellt wenn man die Modell Kategorie für den Import nicht ebenfalls selektiert.<br>
[Bugfix]       Mögliche XSS Injektion beim setzen eines Objekt Titels über die i-doit APi<br>
[Bugfix]       Mögliches XSS Problem (siehe CVE-2014-1597)<br>
[Bugfix]       Die IP Statistik in der Kategorie IP Liste für IPV4 zeigte eine falsche Anzahl von freien IP Adressen an.<br>
[Bugfix]       Listeneditierung: Verwendung der Listeneditierung leert das Beschreibungsfeld (beobachtet in Kategorie Allgemein)<br>
[Bugfix]       Einträge der Kategorie "Allgemein" im Objekttyp "Blade Chassis" werden über die Massenänderung nicht angepasst.<br>
[Bugfix]       Diverse JDisc Fehlerbehebungen<br>
[Bugfix]       Die Verwaltungsinstanz wird entfernt, wenn ein Objekt als Gastsystem zugewiesen wird<br>
[Bugfix]       Die Gastsystemzuweisung erzeugt keinen Logbuch Eintrag<br>
[Bugfix]       Ein Problem im Dialog-Admin wurde gelöst, bei welchem einige Felder nicht korrekt bearbeitet werden konnten<br>
[Bugfix]       Problembehebung bei einem Report, welcher das Schlüsselwort "update" beinhaltet<br>
[Bugfix]       Das Kalenderwidget zeigt Dezember 2013 nicht richtig an<br>
[Bugfix]       Feld Lizenz zur Softwarezuweisungsliste hinzugefügt<br>
[Bugfix]       Mögliche Ajax XSS Schwachstelle (siehe CVE-2014-1237)<br>
[Bugfix]       Ein LDAP Problem wurde gelöst, bei welchem sich einige Benutzer mit Sonderzeichen im Namen nicht korrekt anmelden konnten<br>
[Bugfix]       Die Kategorie Hostadresse ist auf der Übersichtsseite nicht zugänglich<br>
[Bugfix]       Bei Kontaktobjekten (Personen, Personengruppen, ...) kann in der Kategorie "Allgemein" die Bezeichnung geändert werden<br>
               Dieses Feld sollte jedoch gesperrt sein, wie es auf der Übersichtsseite der Fall ist, und aus den Stammdaten übernommen werden<br>
[Bugfix]       Es ist nicht möglich die Kategorie Dateiversionen zu speichern<br>
[Bugfix]       Auf der Übersichtsseite des Objekttypen Dateien funktioniert die Auswahl einer neuen Datei nicht<br>
[Bugfix]       Wenn als Dateiversion "-" gewählt wurde, kann ab diesem Zeitpunkt keine andere Datei mehr gewählt werden<br>
[Bugfix]       Selbst bei vollständig entzogenen Rechten für das Modul CMDB ist im linken Baum-Menü die erste Objekttypgruppe zu sehen (jedoch ist diese leer)<br>
[Bugfix]       Wenn eine Beziehung über Gastsysteme erzeugt wird, bleibt die Eigenschaft "Läuft auf Host / Cluster" der Kategorie "Virtuelle Maschine" leer<br>
               Weist man hier nun das Cluster zu, wird die Beziehung doppelt erzeugt<br>
[Bugfix]       Wenn über Chrome & Safari benutzerdefinierte Kategorien bearbeitet werden, werden die Feldtypen beim Bearbeiten auf "Text" geändert<br>
[Bugfix]       Raum-Schrankansicht: Vorder/Rückseite umschalten ist nicht möglich<br>
[Bugfix]       Die Logbuch Wiederherstellen Funktion schlägt fehl<br>
[Bugfix]       Problem mit expliziten Beziehungen in einem IT-Service<br>
[Bugfix]       In der IP-Liste ist der Default GW nicht gelb markiert<br>
[Bugfix]       Kategorie Hostadressen: Primär und Aktiv muss standardmäßig auf "JA"<br>
[Bugfix]       Konfiguration einer Standard-Sortierung über die Objektlistenkonfiguration führt bei manchen Eigenschaften dazu, dass die Objektlisten nicht aufgerufen werden können<br>
[Bugfix]       Keine Sprach-Lokalisierung der Buttons unter Extras -> Suche<br>
[Bugfix]       Clustereigenschaften im Rahmen von Verknüpfungen werden willkürlich ohne Benutzereingabe festgelegt<br>
[Bugfix]       Häufigkeit von Checklisten (Workflows) kann nicht korrekt verwendet werden<br>
[Bugfix]       Mehrfachauswahl des IT Services in Kategorie Softwarezuweisung nicht möglich<br>
[Bugfix]       Kategorienordner Dienste ist nicht verfügbar<br>
[Bugfix]       Auswahl des Feldtyps "HTML" in Benutzerdefinierten Kategorien bewirkt, dass in der Kategorie eine nicht nutzbare Fläche ohne Eingabefunktion erzeugt wird<br>
[Bugfix]       Leereinträge in Datumsfeldern sind nicht wirklich leer sondern werden als 0000-00-00 oder 01.01.1970 dargestellt<br>
[Bugfix]       Kategorie "Monitor": Die Eigenschaft "Lautsprecher" wird nicht gespeichert, wenn diese auf "nein" gesetzt wird.<br>
               Die Anzeige im View-Mode der Kategorie bleibt leer. Beim nächsten Öffnen des Edit-Mode steht die Eigenschaft auf "ja".<br>
[Bugfix]       Wenn unter Eigene Reports => Neu => die Eigenschaft "Benutzerspezifisch" gewählt wird, ist der Report nach dem Abspeichern trotzdem global<br>
[Bugfix]       Darstellung der Eigenschaft "Geldwert/Preis" aus Kategorie Buchhaltung ist in der Listenansicht undeutlich<br>
[Bugfix]       Kategorienordner DBMS: Hier muss es wie im Kategorienordner Anwendungen eine Kategorie "Varianten" geben<br>
[Bugfix]       Das Feld Cluster Verwaltungsinstanz wählt automatisch ein willkürliches Objekt aus<br>
[Bugfix]       Bei einer Massenänderung wird in Kategorie Modell unter Hersteller immer das erste Feld ausgewählt<br>
[Bugfix]       Das Freigeben von IP Adressen durch die Archivierung oder Löschung des Hostadressen Eintrages veranlasst das Entfernen der Adresse nicht aus der IP-Adressliste<br>
[Bugfix]       Beim Duplizieren eines Objekts wird trotz Vergebung eines neuen Namens eine #2 angehängt<br>
[Bugfix]       Fehler beim Duplizieren im CMDB Explorer<br>
[Bugfix]       Beim duplizieren/importieren wird die Benutzerdefinierte Kategorie immer neu erzeugt<br>
[Bugfix]       Syslog Daten aus controller Module werden nicht mehr importiert<br>
[Bugfix]       Das Kontextmenü für eine Node im CMDB Explorer funktiniuert nicht<br>
[Bugfix]       API: cmdb.object_types gibt die "Objektgruppe" nicht mit aus<br>
[Bugfix]       Einige Sonderzeichen können über die API nicht an i-doit übermittelt werden<br>
[Bugfix]       Der LDAP Sync füllt einige Parameter zum jeweiligen Personen Objekt nicht korrekt<br>
[Bugfix]       Die Vorschlagfunktion für IP Adressen schlägt IP Adressen vom falschen Typ vor<br>
[Bugfix]       In der IP Adressliste können keine Bereiche definiert werden<br>
[Bugfix]       Archivierte IP Adressen können ienen IP-Adress Konflikt in der IP Adressliste verursachen<br>
[Bugfix]       Das Paging in den Suchergebnissen funktioniert nicht<br>
[Bugfix]       IE8 - Die Rechtesystem Parameter werden im Internet Explorer 8 nicht nachgeladen<br>
[Bugfix]       [Widget] Die Lizenzübersicht errechnet einen falschen "verbleibende Tage" Wert<br>
[Bugfix]       Auf der Übersichtsseite werden unter gewissen Umständen nicht die konfigurierten Kategorien dargestellt<br>
[Bugfix]       [Nagios] Der Export zeigt teilweise einen "Malformed JSON ..." Fehler<br>
[Bugfix]       Darstellungsfehler unter der Kategorie Supernet: Aus "x/y adressen frei" wurde "x/y Adressen in Benutzung"<br>
[Bugfix]       Die Kategorie Vertragszuweisung zeigt leere Daten als 01.01.1970 an<br>
[Bugfix]       Der Button "Alle unfertigen und archivierten Objekte löschen" zeigt einen Bestätigungsdialog mit Umlautfehlern an<br>
[Bugfix]       Das löschen von unfertigen/archivierten oder gelöschten Kategorieeinträgen zeigt eine SQL Exception<br>
[Bugfix]       Die Kategorie Hostadresse zeigt leere Einträge auf der Überssichtsseite<br>
[Bugfix]       Die Farbe von IP Adressen in der IP Liste ändert sich nicht wenn die Adresszuweisungsmethode in der Hostadresse geändert wurde<br>
[Bugfix]       Das Duplizieren oder Ändern von Informationen in der Massenänderung resultiert in doppelten Kategorieeinträgen<br>
[Bugfix]       Das Sortieren von Suchergebnissen funktioniert nicht<br>
[Bugfix]       Der Einsatzzweck in Kategorie Allgemein ist in den Listenansichten leer<br>
[Bugfix]          [Objekt-Browser] In der Standortsicht werden nur Standort-Objekte angezeigt.<br>
[Bugfix]       [Objekt-Browser] der Filter "Gruppe" sollte "Objektgruppe" heißen.<br>
[Bugfix]       Das Archivieren von Chassis Slots resultiert in einer Fehlermeldung<br>
[Bugfix]       Die Übersichtsseite zeigt nicht die korrekten Kategorien wenn die Rechtesystem Regel "Kategorien in Objekttypen" verwendetet wird<br>
[Bugfix]       Wenn mehr als eine Berechtigung auf Reports gelegt wird bleibt die Anzeige von Reports komplett leer<br>
[Bugfix]       Lizenzierungsproblem im Zusammenhang mit der i-doit Mandanten Datenbank<br>
[Bugfix]       Die Massenänderungn funktioniert nicht mit Objektbildern<br>
[Bugfix]       Einige Logbuch Änderungen werden nicht mehr protokolliert<br>
[Bugfix]       Single Sign On Problem bei Übergeben der Domäne<br>
[Bugfix]       Das Lösen einer IP Adresse in der IP-Liste erzeugt keinen Logbuch Eintrag in dem Objekt<br>
[Bugfix]       Sprachkonstanten in Anschlüsse-Kategorie<br>
[Bugfix]       "Neu" Button im globalen Logbuch entfernt<br>
[Bugfix]       Der Listenfilter für Objektlisten funktioniert nicht richtig<br>
[Bugfix]       Session Warnung bei automatischer Abmeldung<br>

[Extension] Interface avec le système de surveillance informatique Check_MK (http://mathias-kettner.de/check_mk.html)<br>
[Extension] Check_MK : validation des exportations<br>
[Extension] Nouvelle catégorie pour la relation N:M pour les logiciels et les services Check_MK<br>
[Extension] Vue héritée dans l'attribution des logiciels pour les services Check_MK<br>
[Extension] Check_MK : Nouveau contrôleur de journal pour la mise à jour des informations d'état historiques sur les hôtes<br>.
[Extension] Fusion des requêtes d'état Nagios et Check_MK dans les vues en liste<br>.
[Extension] Diverses optimisations dans le nouveau design d'i-doit<br>
[Extension] Nouveau système d'avis et de messages de réussite dans l'interface i-doit<br>
[Extension] Extension de l'édition de listes à d'autres catégories (par ex. adresse de l'hôte, attribution SW)<br>
[Extension] Nouveau type de champ Relation d'objet pour les catégories définies par l'utilisateur<br>.
[Extension] Nouveau champ "Mountpoint" dans la catégorie "Accès au partage"<br>.
[Extension] Profils CSV enregistrables<br>
[Extension] Importation CSV : champ clé pour référencer un objet et permettre les mises à jour<br>
[Extension] CSV Import : Importation dans les champs de description<br>
[Extension] Nouveau champ "Mode de paiement" dans la catégorie Informations sur le contrat<br>
[Extension] Possibilité de sélectionner une image d'objet existante<br>
[Extension] Importation de plusieurs serveurs JDisc/JEDI<br>
[Extension] Représentation du statut CMDB dans la vue de l'armoire<br>
[Extension] Inclure le statut CMDB dans l'info-bulle<br>
[Extension] Nouvelle catégorie globale Adresse<br>
[Extension] Importer la société lors de la synchronisation des contacts LDAP et la lier en conséquence<br>.
[Extension] Synchroniser uniquement certains serveurs LDAP par ligne de commande<br>.
[Extension] Interface de gestion des rôles dans la catégorie Attribution de contacts<br>.
[Extension] Accès direct à un ID d'objet spécifique via la recherche globale avec # préfixe (#1234)<br>
[Extension] Possibilité d'afficher du texte en dessous d'un code QR<br>.
[Extension] Mise à jour de l'interface JDisc (version 3)<br>
[Extension] Importation JDisc de lames<br>
[Extension] Importation JDisc de configurations de clusters<br>
[Extension] Importation JDisc d'adresses IPv6<br>
[Extension] JDisc détection d'interfaces de switch<br>
[Extension] Le "contact_name" exporté dans l'export Nagios est maintenant défini par l'utilisateur<br>
[Extension] Nouveau chemin de droits : catégories dans la localisation<br>
[Extension] Nouveau chemin de droits : catégories dans objet<br>
[Extension] Mise à jour du Template Enging i-doit "Smarty" de la version 2 à la version 3.1.15<br>
[Extension] Deux nouveaux caractères génériques %objectname_downcase% et "%objectname_uppercase%" dans l'accès aux catégories<br>.
[Extension] Nouvelles données BTU dans l'affichage des racks<br>.
[Extension] Nouvelle gestion des paramètres ; le fichier config.inc.php a été déplacé du système de fichiers vers l'interface (Administration -> Paramètres système)<br>.
[Bugfix] Les modifications du journal ne sont plus enregistrées<br>.
[Bugfix] Catégorie spécifique Téléphone mobile renommée en Téléphonie mobile<br>
[Bugfix] Catégorie "Cluster" : lors de l'ouverture du navigateur d'objets de relations, la présélection ne fonctionne pas. L'emplacement racine est toujours sélectionné.<br>
[Bugfix] Réseaux de couche 2 : catégorie "Ports log. attribués". Ports" : La colonne Objet n'affiche que le type d'objet et non l'objet.<br>
[Bugfix] Problèmes généraux de fusion pour les catégories Port, Port logique et Adresse de l'hôte lors de l'importation JDisc<br>.
[Bugfix] Lors de l'importation OCS, les objets à mettre à jour étaient recréés si on ne sélectionnait pas également la catégorie modèle pour l'importation. <br>
[Bugfix] Possibilité d'injection XSS lors de la définition d'un titre d'objet via l'APi i-doit<br>.
[Bugfix] Problème XSS possible (voir CVE-2014-1597)<br>
[Bugfix] Les statistiques IP dans la catégorie liste IP pour IPV4 affichaient un nombre incorrect d'adresses IP libres.<br>
[Bugfix] Édition de liste : l'utilisation de l'édition de liste vide le champ de description (observé dans la catégorie Général)<br>.
[Bugfix] Les entrées de la catégorie "Général" dans le type d'objet "Blade Chassis" ne sont pas ajustées via la modification en masse.<br>
[Bugfix] Correction de divers bugs JDisc<br>.
[Bugfix] L'instance de gestion est supprimée lorsqu'un objet est attribué comme système invité<br>.
[Bugfix] L'assignation d'un système invité ne crée pas d'entrée dans le journal<br>.
[Correction d'un problème dans la boîte de dialogue Admin où certains champs ne pouvaient pas être modifiés correctement<br>.
[Bugfix] Correction d'un problème avec un rapport contenant le mot-clé "update"<br>.
[Bugfix] Le widget du calendrier n'affiche pas correctement décembre 2013<br>.
[Bugfix] Ajout du champ Licence à la liste d'attribution des logiciels<br>.
[Bugfix] Possible faille Ajax XSS (voir CVE-2014-1237)<br>
[Bugfix] Résolution d'un problème LDAP où certains utilisateurs avec des caractères spéciaux dans leur nom ne pouvaient pas se connecter correctement<br>.
[Bugfix] La catégorie Adresse de l'hôte n'est pas accessible sur la page d'aperçu<br>.
[Bugfix] Pour les objets de contact (personnes, groupes de personnes, ...), il est possible de modifier le nom dans la catégorie "Général"<br>.
               Ce champ devrait cependant être verrouillé, comme c'est le cas sur la page d'aperçu, et repris des données de base<br>.
[Bugfix] Il n'est pas possible d'enregistrer la catégorie Versions de fichiers<br>.
[Bugfix] Sur la page d'aperçu du type d'objet Fichiers, la sélection d'un nouveau fichier ne fonctionne pas<br>.
[Bugfix] Si "-" est sélectionné comme version de fichier, il n'est plus possible de sélectionner un autre fichier à partir de ce moment-là<br>.
[Bugfix] Même si les droits du module CMDB sont complètement retirés, le premier groupe de types d'objets est visible dans le menu arborescent de gauche (mais il est vide)<br>.
[Correction] Lorsqu'une relation est créée via des systèmes invités, la propriété "Exécuté sur hôte / cluster" de la catégorie "Machine virtuelle" reste vide<br>.
               Si l'on attribue maintenant le cluster à cette propriété, la relation est créée deux fois<br>.
[Bugfix] Lors de la modification de catégories personnalisées via Chrome & Safari, les types de champs sont modifiés en "Texte" lors de la modification<br>.
[Bugfix] Vue de l'armoire de la salle : il n'est pas possible de passer de l'avant à l'arrière<br>.
[Bugfix] La fonction de restauration du journal échoue<br>.
[Bugfix] Problème avec les relations explicites dans un service informatique<br>.
[Bugfix] Dans la liste des IP, le GW par défaut n'est pas surligné en jaune<br>.
[Bugfix] Catégorie des adresses d'hôtes : Primaire et Actif doit être sur "OUI"<br> par défaut.
[Bugfix] La configuration d'un tri par défaut via la configuration de la liste d'objets entraîne l'impossibilité d'accéder aux listes d'objets pour certaines propriétés<br>.
[Bugfix] Pas de localisation de la langue des boutons sous Outils -> Recherche<br>.
[Bugfix] Les propriétés de cluster dans le cadre des liens sont définies arbitrairement sans saisie de l'utilisateur<br>.
[Bugfix] La fréquence des listes de contrôle (workflows) ne peut pas être utilisée correctement<br>.
[Bugfix] Impossible de sélectionner plusieurs fois le service IT dans la catégorie Attribution de logiciel<br>
[Bugfix] Le dossier de catégorie Services n'est pas disponible<br>
[Bugfix] La sélection du type de champ "HTML" dans les catégories personnalisées entraîne la création d'une zone inutilisable sans fonction de saisie dans la catégorie<br>.
[Bugfix] Les entrées vides dans les champs de date ne sont pas vraiment vides mais sont affichées comme 0000-00-00 ou 01.01.1970<br>.
[Bugfix] Catégorie "Moniteur" : La propriété "Haut-parleur" n'est pas enregistrée si elle est définie sur "non".<br>
               L'affichage dans le mode View de la catégorie reste vide. Lors de la prochaine ouverture de l'Edit-Mode, la propriété sera sur "oui".<br>
[Bugfix] Si la propriété "Spécifique à l'utilisateur" est sélectionnée sous Mes rapports => Nouveau =>, le rapport est quand même global après l'enregistrement<br>.
[Bugfix] L'affichage de la propriété "Valeur monétaire/prix" de la catégorie Comptabilité n'est pas clair dans la vue en liste<br>.
[Bugfix] Dossier de catégories DBMS : il doit y avoir une catégorie "Variantes" comme dans le dossier de catégories Applications<br>.
[Bugfix] Le champ Instance de gestion du cluster sélectionne automatiquement un objet arbitraire<br>.
[Bugfix] Lors d'une modification en masse, le premier champ est toujours sélectionné dans la catégorie Modèle sous Fabricant<br>.
[Bugfix] La libération d'adresses IP par l'archivage ou la suppression de l'entrée de l'adresse de l'hôte ne provoque pas la suppression de l'adresse de la liste des adresses IP<br>.
[Correction d'un bug lors de la duplication d'un objet, un #2 est ajouté malgré l'attribution d'un nouveau nom<br>.
[Bugfix] Erreur lors de la duplication dans CMDB Explorer<br>
[Bugfix] Lors de la duplication/importation, la catégorie définie par l'utilisateur est toujours recréée<br>.
[Bugfix] Les données syslog des modules de contrôle ne sont plus importées<br>.
[Bugfix] Le menu contextuel d'un nœud dans CMDB Explorer ne fonctionne pas<br>.
[Bugfix] API : cmdb.object_types n'affiche pas le "groupe d'objets"<br>.
[Bugfix] Certains caractères spéciaux ne peuvent pas être transmis à i-doit via l'API<br>.
[Bugfix] La synchronisation LDAP ne remplit pas correctement certains paramètres pour chaque objet personne<br>.
[Bugfix] La fonction de suggestion d'adresses IP propose des adresses IP d'un type incorrect<br>.
[Bugfix] Il n'est pas possible de définir des plages dans la liste des adresses IP<br>.
[Bugfix] Les adresses IP archivées peuvent provoquer un conflit d'adresse IP dans la liste des adresses IP<br>.
[Bugfix] Le paging dans les résultats de recherche ne fonctionne pas<br>.
[Bugfix] IE8 - Les paramètres du système de droits ne sont pas rechargés dans Internet Explorer 8<br>.
[Bugfix] [Widget] Le récapitulatif des licences calcule une valeur erronée de "jours restants"<br>.
[Bugfix] Dans certaines circonstances, la page d'aperçu n'affiche pas les catégories configurées<br>.
[Bugfix] [Nagios] L'exportation affiche parfois une erreur "Malformed JSON ...". erreur<br>
[Bugfix] Erreur d'affichage sous la catégorie Supernet : "x/y adressen frei" devient "x/y addresses in use"<br>.
[Bugfix] La catégorie Attribution de contrat affiche des dates vides comme 01.01.1970<br>.
[Bugfix] Le bouton "Supprimer tous les objets non terminés et archivés" affiche une boîte de dialogue de confirmation avec des erreurs d'accentuation<br>.
[Bugfix] La suppression des entrées de catégories inachevées/archivées ou supprimées affiche une exception SQL<br>.
[Bugfix] La catégorie Adresse de l'hôte affiche des entrées vides sur la page d'aperçu<br>.
[Bugfix] La couleur des adresses IP dans la liste IP ne change pas si la méthode d'attribution d'adresse a été modifiée dans l'adresse hôte<br>.
[Bugfix] La duplication ou la modification d'informations dans la modification en masse résulte en des entrées de catégorie en double<br>.
[Bugfix] Le tri des résultats de recherche ne fonctionne pas<br>.
[Bugfix] Le champ d'application dans la catégorie Général est vide dans les vues en liste<br>.
[Bugfix] [Explorateur d'objets] Dans la vue du site, seuls les objets du site sont affichés.<br>
[Bugfix] [Explorateur d'objets] le filtre "Groupe" devrait s'appeler "Groupe d'objets".<br>
[Bugfix] L'archivage de slots de châssis résulte en un message d'erreur<br>.
[Correction] La page de résumé n'affiche pas les catégories correctes lorsque la règle de système de droits "Catégories dans les types d'objets" est utilisée<br>.
[Bugfix] Si plus d'une autorisation est donnée sur les rapports, l'affichage des rapports reste complètement vide<br>.
[Bugfix] Problème de licence avec la base de données des clients i-doit<br>.
[Bugfix] Le changement en masse ne fonctionne pas avec les images d'objets<br>.
[Bugfix] Certaines modifications du journal ne sont plus enregistrées<br>.
[Bugfix] Problème d'authentification unique lors de la transmission du domaine<br>.
[Bugfix] La suppression d'une adresse IP dans la liste des IP ne crée pas d'entrée dans le journal de l'objet<br>.
[Bugfix] Constantes de langue dans la catégorie Ports<br>.
[Bugfix] Suppression du bouton "Nouveau" dans le journal global<br>.
[Bugfix] Le filtre des listes d'objets ne fonctionne pas correctement<br>.
[Bugfix] Avertissement de session en cas de déconnexion automatique<br>