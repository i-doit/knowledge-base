<!-- TRANSLATED by md-translate -->
# Changelog 1.0.X

# Changelog 1.0.X

<
1.0.2<br>
[Bugfix] - Innerer Content Bereich ist nicht 100% breit im Firefox - Siehe letzten Kommentar<br>
 [Bugfix] - [TTS-Modul] Kommunikation via TLS (https) nicht möglich<br>
 [Bugfix] - [Import] Blacklisting von Kategorien ist nicht aktiv.<br>
 [Bugfix] - Platzhalter im Template-System werden zu früh ersetzt<br>
 [Bugfix] - Softwarebezeichnung im (Software) Objekt-Browser<br>
 [Bugfix] - Verwaltung->Benutzereinstellungen->Objekt-Listen: Editieren-Button fehlt.<br>
 [Bugfix] - IT Grundschutz Baustein lässt sich nicht zuordnen<br>
 [Bugfix] - Rückwärtige Kontaktzuweisung klappt nicht mit eigenen Objekt-Typ-Gruppen<br>
 [Bugfix] - [Suche] Bug durch ungefiltertes Regex...?<br>
 [Bugfix] - Clustervitalität wird nicht richtig angezeigt<br>
 [Bugfix] - Kapazität mit . als Dezimaltrennzeichen wird teilweise falsch berechnet<br>
 [Bugfix] - Dateiversionen werden mit Status 1 (neu)<br>
 [Bugfix] - Breadcrumb: Markiert man ein Objekt in einer Objektliste und klickt auf Editieren, aktualisiert sich die Breadcrumb nicht.<br>
 [Bugfix] - Funktion "unfertige/archivierte/gelöschte Objekte entfernen" aufsplitten (siehe Beschreibung)<br>
 [Bugfix] - [Standort] Wird via Listeneditierung ein Objekt einem Schrank zugewiesen, erkennt der Schrank dieses als eingeschoben<br>
 [Bugfix] - JDisc-Konfiguration: leeres Passwort verursacht keine Fehlermeldung<br>
 [Bugfix] - Admin und Admingruppe als "unlöschbar" definieren<br>
 [Bugfix] - Bei der Verknüpfung von RT und i-doit auf der gleichen Maschine meldet i-doit alle Benutzer ab, wenn im RT ein Ticket mit einem referenzierten Objekt aus i-doit geöffnet wird.<br>
 [Bugfix] - API: Standort von Objekten mit ausgeben<br>
 [Bugfix] - Lizenz-Migration: Beschreibungsfeld wird nicht übernommen<br>
 [Bugfix] - CATG: Netzwerk > Interface: Template wirfd nicht geladen<br>
 [Bugfix] - Objektliste Raum: Die Raumnummer 1.3 wird als 1 angezeigt. Es wird anscheinend am Punkt abgeschnitten<br>
 [Bugfix] - Listenansicht editieren. Das "Sortieren nach" kann nicht abgespeichert werden<br>
 [Bugfix] - Währung: Es wird immer Pfund angezeigt, obwohl der Euro eingestellt ist. Eine Eigene Währung im Format "Euro;¤" ist nicht nutzbar und das Eurozeichen wird als "?" angezeigt<br>
 [Bugfix] - Wenn der Name eines Objektes über die Übersichtsseite geändert wird, ist dies nicht im Logbuch verzeichnet<br>
 [Bugfix] - Ist in der Kategorie Modell eine Beschreibung eingetragen, kann diese nicht über die Übersichtsseite geändert/gelöscht werden<br>
 [Bugfix] - CPU-Frequenz: Es wird kein Komma mehr unterstützt, was zu einer Fehlermeldung führt<br>
 [Bugfix] - Wird ein Filter im Logbuch verwendet und auf die nächste Seite gewechselt, wird der Filter zurückgesetzt<br>
 [Bugfix] - Schrankansicht: Bei geringerer Auflösung hat man mehrere Scrollbalken, was dazu führt, dass man die Funktionen so gut wie gar nicht mehr nutzen kann<br>
 [Bugfix] - Listenansicht editieren: Die Kontaktzuweisung funktioniert nicht richtig. Person ist immer leer (übrigens steht "Person" in der Kategorie Kontaktzuweisung beim Abfrageeditor im Reporting nichtmals zu Auswahl). Die anderen Felder gehen zwar, bringen aber nicht viel.<br>
 [Bugfix] - Listenansicht editieren: Beim zugewiesenen Arbeitsplatz werden die Attribute doppelt angezeigt<br>
 [Bugfix] - Dialog-Admin: Der Vertragsstatus ist nicht auffindbar. Durch eine unsinnige Sortierung ist die Suche auch sehr schwer.<br>
 [Bugfix] - Beim Abfrageeditor für das Reporting steht unter Speicher die Bezeichnung zwei mal zur Auswahl<br>
 [Bugfix] - Eigene Reports: Die nur für sich selber sichtbaren haben eine Sprachkonstante "LC_REPORT_LIST_ONLY_YOU"<br>
 [Bugfix] - [NO FIX] Abfrageeditor: Suche nach <4GB Speicher geht die einzelnen Riegel durch und nicht den gesamten Speicher (2x4GB sind nach dem Report <5GB Speicher)<br>
 [Bugfix] - Übersichtsseite einer Organisation: In der Organisation wird etwas geändert und das Objekt verliert seinen Namen<br>
 [Bugfix] - Verwaltung: Unfertige Objekte löschen -> Foreign key constraint fail<br>
 [Bugfix] - Objektvitalität: Der weiße Balken in der Mitte ist manchmal viel länger als der Rest, die Tabelle ist unförmig und passt sich nicht annähernd den Inhalten an<br>
 [Bugfix] - Beim Duplizieren wird immer das Erstellt-Datum, sowie auch die Info wer es erstellt hat, mit dupliziert<br>
 [Bugfix] - Firefox 9: Beim CSV-Import wird der Objekttyp ausgewählt aber nicht die Kategorien nachgeladen<br>
 [Bugfix] - CSV-Import: Standort-Handling<br>
 [Bugfix] - Mandant mit Umlauten führt zu Fehlern<br>
 [Bugfix] - Mandant mit Sonderzeichen führt zu Fehlern<br>
 [Bugfix] - Mögliche XSS Sicherheitslücke bei der Suche<br>

<
1.0.2<br>
[Bugfix] - La zone de contenu interne n'est pas large à 100% dans Firefox - Voir le dernier commentaire<br>.
 [Bugfix] - [Module TTS] Communication via TLS (https) impossible<br>
 [Bugfix] - [Importation] Le blacklistage des catégories n'est pas actif.<br>
 [Bugfix] - Les espaces réservés dans le système de modèles sont remplacés trop tôt<br>.
 [Bugfix] - Désignation du logiciel dans le navigateur d'objets (logiciels)<br>.
 [Bugfix] - Administration->Paramètres utilisateur->Listes d'objets : le bouton éditer est manquant.<br>
 [Bugfix] - Impossible d'attribuer un module de protection de base IT<br>.
 [Bugfix] - L'attribution de contacts en arrière ne fonctionne pas avec les groupes de types d'objets propres<br>.
 [Bugfix] - [Recherche] Bug dû à une regex non filtrée...?<br>
 [Bugfix] - La vitalité des clusters ne s'affiche pas correctement<br>.
 [Bugfix] - La capacité avec . comme séparateur décimal est parfois mal calculée<br>.
 [Bugfix] - Les versions de fichiers sont affichées avec le statut 1 (nouveau)<br>.
 [Bugfix] - Breadcrumb : Si l'on sélectionne un objet dans une liste d'objets et que l'on clique sur Editer, le fil d'Ariane ne s'actualise pas.<br>
 [Bugfix] - Fractionner la fonction "Supprimer les objets inachevés/archivés/supprimés" (voir description)<br>.
 [Bugfix] - [Emplacement] Si un objet est attribué à une armoire via l'édition de liste, l'armoire le reconnaît comme étant inséré<br>.
 [Bugfix] - Configuration JDisc : un mot de passe vide ne provoque pas de message d'erreur<br>.
 [Bugfix] - Définir l'admin et le groupe d'admin comme "ineffaçables"<br>.
 [Bugfix] - Lors de l'association de RT et i-doit sur la même machine, i-doit déconnecte tous les utilisateurs lorsqu'un ticket est ouvert dans RT avec un objet référencé d'i-doit.<br>
 [Bugfix] - API : indiquer l'emplacement des objets<br>.
 [Bugfix] - Migration de licence : le champ de description n'est pas repris<br>.
 [Bugfix] - CATG : Réseau > Interface : Le modèle n'est pas chargé<br>.
 [Bugfix] - Liste d'objets salle : le numéro de salle 1.3 est affiché comme 1. Il semble être tronqué au point<br>.
 [Bugfix] - Édition de la vue en liste. Le "tri par" ne peut pas être sauvegardé<br>.
 [Correction] - Devise : les livres sont toujours affichées alors que l'euro est sélectionné. Une devise personnalisée au format "Euro;¤" n'est pas utilisable et le signe euro est affiché comme " ?"<br>.
 [Bugfix] - Si le nom d'un objet est modifié via la page d'aperçu, cela n'est pas enregistré dans le journal de bord<br>.
 [Bugfix] - Si une description est inscrite dans la catégorie Modèle, elle ne peut pas être modifiée/supprimée via la page d'aperçu<br>.
 [Correction] - Fréquence CPU : la virgule n'est plus supportée, ce qui entraîne un message d'erreur<br>.
 [Bugfix] - Si un filtre est utilisé dans le journal et que l'on passe à la page suivante, le filtre est réinitialisé<br>.
 [Correction] - Vue de l'armoire : en basse résolution, on a plusieurs barres de défilement, ce qui fait qu'on ne peut pratiquement plus utiliser les fonctions<br>.
 [Bugfix] - Édition de la vue en liste : L'attribution des contacts ne fonctionne pas correctement. La personne est toujours vide (d'ailleurs, la "personne" n'est même pas disponible dans la catégorie Attribution de contact de l'éditeur de requêtes dans le Reporting). Les autres champs fonctionnent, mais n'apportent pas grand-chose.<br>
 [Correction de bug] - Édition de la vue en liste : Les attributs sont affichés deux fois pour le poste de travail attribué<br>.
 [Bugfix] - Dialogue Admin : le statut du contrat est introuvable. Un tri absurde rend la recherche très difficile <br>.
 [Correction] - Dans l'éditeur de requêtes pour le reporting, la désignation est disponible deux fois sous Mémoire<br>.
 [Bugfix] - Rapports personnels : ceux qui ne sont visibles que par eux-mêmes ont une constante de langage "LC_REPORT_LIST_ONLY_YOU"<br>.
 [Bugfix] - [NO FIX] Éditeur de requêtes : la recherche de <4GB de mémoire passe par chaque barre et non par la mémoire entière (2x4GB sont <5GB de mémoire après le rapport)<br>
 [Bugfix] - Page de présentation d'une organisation : quelque chose est modifié dans l'organisation et l'objet perd son nom<br>.
 [Bugfix] - Administration : supprimer les objets non terminés -> Foreign key constraint fail<br>.
 [Bugfix] - Vitalité des objets : la barre blanche au milieu est parfois beaucoup plus longue que le reste, le tableau est informe et ne s'adapte pas approximativement au contenu<br>.
 [Correction] - Lors de la duplication, la date de création et l'auteur sont toujours dupliqués<br>.
 [Bugfix] - Firefox 9 : lors de l'importation d'un CSV, le type d'objet est sélectionné mais les catégories ne sont pas rechargées<br>.
 [Bugfix] - Importation CSV : gestion de la localisation<br>.
 [Bugfix] - Le mandant avec des accents provoque des erreurs<br>.
 [Bugfix] - Le client avec des caractères spéciaux entraîne des erreurs<br>.
 [Bugfix] - Possible faille de sécurité XSS dans la recherche<br>.

1.0<br>

1.0<br>

* Komplett überarbeitetes Oberflächendesign<br>
* Neue Speicherlogik (Speichern und Abbrechen sind nun in der oberen Buttonleiste zu finden)<br>
* deutliche Performance Verbesserungen, insbesondere auf der Übersichtsseite<br>
* Überarbeitete Einzel- und Volumenlizenzverwaltung<br>
* Migrationshinweise:<br>

* Design d'interface entièrement revu<br>.
* Nouvelle logique de sauvegarde (Enregistrer et Annuler se trouvent maintenant dans la barre de boutons supérieure)<br>
* Amélioration significative des performances, notamment sur la page d'aperçu<br>.
* Gestion des licences individuelles et en volume remaniée<br>
* Indications de migration:<br>

-- 1. Eine Lizenz-Liste mit Anzahl = 5 und einzeiligem Schlüssel (je Zeile = ein Schlüssel) = 1x Volumen-Lizenz mit Anzahl 5<br>
 -- 2. Eine Lizenz-Liste mit Anzahl = 1 und einzeiligem Schlüssel = 1x Einzel-Lizenz<br>
 -- 3. Eine Lizenz-Liste mit Anzahl = 5 und 2-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen die ersten Zwei einen Schlüssel haben<br>
 -- 4. Eine Lizenz-Liste mit Anzahl = 2 und 5-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen jeder einen Schlüssel hat<br>

-- 1. une liste de licences avec nombre = 5 et clé sur une ligne (par ligne = une clé) = 1x licence en volume avec nombre 5<br>.
 -- 2. une liste de licences avec nombre = 1 et clé sur une ligne = 1x licence individuelle<br>.
 -- 3. une liste de licences avec nombre = 5 et clé sur 2 lignes = 5x licences individuelles, dont les deux premières ont une clé<br>.
 -- 4. une liste de licences avec nombre = 2 et clé de 5 lignes = 5x licences individuelles, dont chacune a une clé<br>.

* Neuer SAN-Browser für Verknüpfungen<br>
* Erweiterete JDisc-Schnittstelle<br>
* Optimierung beim Speichern von Kategorieeinträgen<br>
* Überarbeitete Rackansicht<br>
* Neue Raumansicht<br>
* Kategorie SOA-Komponenten wurde entfernt<br>
* Neuer Beziehungstyp: Vertrag<br>
* Die Workflows ermöglichen nun eine 1:n Beziehung zu CMDB Objekten<br>
* Veraltete Kategorien "Abhängigkeiten" und "SAN" wurden entfernt<br>
* Neues Feld "Service-Tag" in Kategorie Modell<br>
* Erweiterungen in der Backup Kategorie (Art, Cycle und Speicherort)<br>
* Der Name des Änderungsbenutzers im Logbuch kann in der Verwaltung<br>

* Nouveau navigateur SAN pour les raccourcis<br>.
* Interface JDisc améliorée<br>.
* Optimisation de l'enregistrement des entrées de catégories<br>.
* Vue rack retravaillée<br>
* Nouvelle vue de la salle<br>
* Suppression de la catégorie Composants SOA<br>.
* Nouveau type de relation : contrat<br>
* Les workflows permettent désormais une relation 1:n avec les objets CMDB<br>.
* Suppression des catégories obsolètes "Dépendances" et "SAN"<br>.
* Nouveau champ "Service Tag" dans la catégorie Modèle<br>.
* Améliorations dans la catégorie Sauvegarde (type, cycle et emplacement)<br>.
* Le nom de l'utilisateur de modification dans le journal peut être modifié dans l'administration<br>.

nun aus Vorname, Nachname und Benutzernamen zusammengestellt werden<br>

maintenant être composé du prénom, du nom et du nom d'utilisateur<br>.

* Verwaltung von Supernetzen (Supernetting)<br>

* Gestion de super réseaux (supernetting)<br>

[Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch<br>
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt<br>
 [Bugfix] - Personen-Stammdaten können auf der Übersichtsseite nicht gespeichert werden<br>
 [Bugfix] - Die Objektlisten erlauben nur alphabetische Sortierungen<br>
 [Bugfix] - DNS Domain lässt sich nur speichern wenn ein DNS Server gewählt ist<br>
 [Bugfix] - In der OCS Konfiguration können mehrere Datenbanken angeben, es wird aber immer die Erste verwendet<br>
 [Bugfix] - OCS-Konfiguration lässt sich nicht speichern<br>
 [Bugfix] - PHP 5.4: Fast alle Umlaute werden falsch dargestellt<br>
 [Bugfix] - Quickview Fenster wird nicht zuverlässig geschlossen<br>
 [Bugfix] - Duplizieren von einem Server schlägt mit einem Nagios Fehler fehl wenn Nagios nicht installiert ist<br>
 [Bugfix] - DCHP anstatt DHCP in Adressverwaltung<br>
 [Bugfix] - Wird ein neues Template mit dem ?generischen Template? Objekttyp angelegt, ist das Objekt voll von gefüllten Kategorien.<br>
 [Bugfix] - In der Report View ?Geplante Änderungen? erscheint eine Fehlermeldung<br>
 [Bugfix] - Bei FC-Ports geht die Zuweisung von SAN-Zoning nicht<br>
 [Bugfix] - Lizenzübersicht zeigt $ obwohl Währung auf ¤ eingestellt wurde<br>
 [Bugfix] - Bei der Zuweisung eines Clusterdienstes zu einem Cluster fehlt beim Feld ?Standardserver? eine ?Keiner? Option.<br>
 [Bugfix] - Benachrichtigungsvorlagen lassen sich nicht abspeichern<br>
 [Bugfix] - Die Hersteller / Modell Kopplung funktioniert nicht mehr<br>
 [Bugfix] - Links für Benachrichtigungen (Workflows) sind bei Verwendung von HTTPS nicht korrekt<br>
 [Bugfix] - Authoren können alle Passwörter editieren<br>
 [Bugfix] - CPU: Dokumentation von Mehrkernprozessoren und Hyperthreading<br>
 [Bugfix] - Leereinträge auf der Übersichtsseite<br>
 [Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch<br>
 [Bugfix] - Mandatory Fields funktionieren nicht bei Dialog+ Feldern<br>
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt<br>
 [Bugfix] - Fehler beim Wechseln des Mandanten<br>

[Bugfix] - Le calcul des réseaux /32 dans la gestion des adresses IP est incorrect<br>.
 [Bugfix] - La liste des sessions actives sur le tableau de bord n'est pas correcte<br>.
 [Bugfix] - Les données de base des personnes ne peuvent pas être enregistrées sur la page d'aperçu<br>.
 [Bugfix] - Les listes d'objets ne permettent qu'un tri alphabétique<br>.
 [Bugfix] - Le domaine DNS ne peut être enregistré que si un serveur DNS est sélectionné<br>.
 [Bugfix] - Dans la configuration OCS, on peut indiquer plusieurs bases de données, mais c'est toujours la première qui est utilisée<br>.
 [Bugfix] - Impossible d'enregistrer la configuration OCS<br>.
 [Bugfix] - PHP 5.4 : Presque tous les trémas sont mal affichés<br>.
 [Bugfix] - La fenêtre Quickview ne se ferme pas de manière fiable<br>.
 [Bugfix] - La duplication depuis un serveur échoue avec une erreur Nagios si Nagios n'est pas installé<br>.
 [Correction] - DCHP au lieu de DHCP dans la gestion des adresses<br>.
 [Bugfix] - Lors de la création d'un nouveau modèle avec le type d'objet "modèle générique", l'objet "modèle" est créé. l'objet est plein de catégories remplies <br>.
 [Correction] - Un message d'erreur apparaît dans la vue "Modifications prévues" du rapport<br>.
 [Correction] - L'attribution du zonage SAN ne fonctionne pas pour les ports FC<br>.
 [Correction] - L'aperçu des licences affiche $ alors que la devise est réglée sur ¤<br>.
 [Bugfix] - Lors de l'attribution d'un service de cluster à un cluster, il manque une option "Aucun" dans le champ "Serveur par défaut". option.<br>
 [Bugfix] - Impossible d'enregistrer les modèles de notification<br>.
 [Correction] - Le couplage fabricant / modèle ne fonctionne plus<br>.
 [Bugfix] - Les liens pour les notifications (workflows) ne sont pas corrects lors de l'utilisation de HTTPS<br>.
 [Bugfix] - Les auteurs peuvent éditer tous les mots de passe<br>.
 [Bugfix] - CPU : documentation sur les processeurs multi-cœurs et l'hyperthreading<br>
 [Bugfix] - Entrées vides sur la page d'aperçu<br>.
 [Bugfix] - Le calcul des réseaux /32 dans la gestion des adresses IP est incorrect<br>.
 [Bugfix] - Les champs obligatoires ne fonctionnent pas avec les champs Dialog+<br>.
 [Bugfix] - La liste des sessions actives sur le tableau de bord n'est pas correcte<br>.
 [Bugfix] - Erreur lors du changement de mandant<br>.