<!-- TRANSLATED by md-translate -->
# Changelog 1.5.2

# Changelog 1.5.2

[Verbesserung]  In der Chassis Ansicht wird in einer Info Box die Zugewiesenen Geräte des ausgewählten Slots angezeigt.<br>
[Verbesserung]  Benutzereinstellungen erben von den Mandanteneinstellungen<br>
[Verbesserung]  Konfigurierbare Variablen für Workflow E-Mails: IP-Adresse & Hostname (Siehe Dokumentation)<br>
[Verbesserung]  Möglichkeit zum Bearbeiten des Objekttitels bei Personen, Personengruppen und Organisationen<br>
[Verbesserung]  Beschleunigung der Ergebnisliste des Logbuch Moduls<br>
[Verbesserung]  Darstellung der Root-Lokation im Standort-Pfad als Icon<br>
[Verbesserung]  Verbesserter OCS Netzwerk Import für SNMP Geräte<br>
[Bug]           OCS-Import führt Objekte der OCS-Datenbank nicht mit manuell erzeugten Objekten zusammen, deren Attribute übereinstimmen.<br>
[Bug]           Bei Abfragen zu referenzierten RT-Tickets wird falsche Mandanten-Referenz verwendet<br>
[Bug]           Benutzerdefinierte Übersetzungen werden im Check_MK Export nicht beachtet<br>
[Bug]           Eingetragener Name beim Duplizieren mehrerer Objekte zur selben Zeit wird ignoriert<br>
[Bug]           Duplikation mehrerer Objekte führt zu identischen SYS-IDs<br>
[Bug]           Styling aus dem WYSIWYG Editor wird nicht übernommen<br>
[Bug]           Bei den Benutzerdefnierten Kategorien (Single-Value) wird immer ein neuer Datensatz erstellt<br>
[Bug]           Fehlermeldung beim Erstellen von Patchdosen aus einem Template heraus<br>
[Bug]           PDU-Kategorie erzwingt SNMP-Abfrage auf primäre IP-Adresse<br>
[Bug]           Durch Caching Probleme ist das Design einiger Module teilweise defekt<br>
[Bug]           Explizite Beziehungen können nicht gelöscht werden, da die Schaltfläche "Archivieren" ausgegraut ist.<br>
[Bug]           Fehlerhaftes HTML-Decoding in Listenbrowser<br>
[Bug]           Hashsumme steht beim Editieren des Logins im Passwortfeld<br>
[Bug]           OCS prüft beim Import nur nach Objektnamen und überschreibt dadurch unter Umständen existierende Objekte<br>
[Bug]           Konfiguration der Anzahl vorgeladener Seiten in den Objektlisten (Systemeinstellungen)<br>
[Bug]           Beim Erstellen eines Reports hat die Logbuch Kategorie in den Bedingungen immer eine Fehlermeldung ausgegeben.<br>
[Bug]           Bei Neuanlage von Beziehungen können fälschlicherweise implizite Beziehungsarten ausgewählt weden<br>
[Bug]           Speichern eines Servicebaums des CMDB-Explorers als SVG-Grafik ist im Internet Explorer 11 nicht möglich<br>
[Bug]           Objektbrowser zeigt ausgewählte logische Geräte nicht an<br>
[Bug]           Breadcrumb-Navigation endet bei "Services" vorzeitig<br>
[Bug]           Dynamische Properties bei Check_MK Tags führen zu SQL Fehler<br>
[Bug]           Template für Personen wird nicht als Template gespeichert<br>
[Bug]           Gleichnamige Attribute in den verknüpften Attributen eines Reports können nicht verwendet werden<br>
[Bug]           Checkbox aus oberster Zeile der Listen-Kategorien auf der Übersichtsseite markiert auch alle Einträge aus anderen Listenkategorien der Übersichtsseite.<br>
[Bug]           Das Löschen eines CMDB Status lässt die zugewiesenen Objekte verschwinden<br>
[Bug]           SQL-Fehler bei Verwendung des One-Support-Buttons<br>
[Bug]           Blade-Chassis Objektliste um "Logische Port"-Informationen erweitern erzeugt Fehlermeldung<br>
[Bug]           Leere Passwortfelder fordern Passworteingabe in Kategorie "Login" wenn der Benutzername geändert wird.<br>
[Bug]           Zuweisung keiner weiteren Objekte möglich, wenn ein Objekt mit Backslash zugewiesen wurde.<br>
[Bug]           CSV-Import aktualisiert nicht den Objekt-Titel, selbst wenn ein anderer Identifier konfiguriert wurde<br>
[Bug]           Update setzt Systemeinstellungen auf Standards zurück<br>
[Bug]           Kategorie "Virtuelle Geräte" gibt Fehlermeldung beim Speichern aus<br>
[Bug]           Vorder- und Rückseite in der Schrankansicht sind unterschiedlich hoch<br>
[Bug]           Attribut "Hersteller" wird nicht in der Übersicht der Softwarezuweisung angezeigt, wenn dieses aus der Kategorie "Dienste" stammt.<br>
[Bug]           Logbuch verfügt nicht über Seitenauswahl<br>
[Bug]           In duplizierten Reports wird die Auswahl "Objekte mit leeren Verknüpfungen anzeigen?" immer auf "Nein" gesetzt<br>
[Bug]           [JDisc] Beim duplizieren eines JDisc-Profils schließt sich das Popup nicht und das Profil wird nicht dupliziert.<br>
[Bug]           Einstellungen werden teilweise nicht gespeichert<br>
[Bug]           Konfiguration einer Sprachkonstanten für die Kategorie-Bezeichnung hat keine Auswirkung<br>
[Bug]           CMDB-Explorer: Standort-Pfad wird unter "Objektinformationen" angezeigt<br>
[Bug]           Logische Ports des Wirts können nicht unter "Netzwerk" der Kategorie "Virtuelle Geräte" ausgewählt werden<br>
[Bug]           Falsche Ports werden unter "Netzwerk" der Kategorie "Virtuelle Geräte" angezeigt<br>
[Bug]           CMDB-Explorer: Pfad-Markierung nicht möglich, wenn Tooltip aktiv<br>
[Bug]           Design von Kategorie "Chassis > Zugewiesene Geräte" fehlerhaft<br>
[Bug]           Hostadresse zeigt verknüpften Port nicht in "View-Modus" an<br>
[Bug]           Arbeitsplatz heißt in der englischen Übersetzung "Workstation"<br>
[Bug]           Popup für QR-Codes in Chrome unübersichtlich<br>
[Bug]           Objekt-Browser-Filter "nach Personengruppen" Zeigt die Personengruppe selbst in der Häufigkeit der zugeordneten Personenobjekte an<br>
[Bug]           In benutzerdefinierten Kategorien existiert keine Purge-Schaltfläche<br>
[Bug]           Massenänderung auf Kategorie "Netz" wählt zufälliges Objekt als DNS-Server<br>
[Bug]           Pro XML-Import desselben Objekts wird eine weitere CPU ergänzt<br>
[Bug]           "Services" lässt sich über eigene Sprachkonstanten nicht umbenennen<br>
[Bug]           Beziehungsliste zeigt falsche Seitenzählung an<br>
[Bug]           Inhalte eines neuen Workflows gehen verloren, wenn kein Objekt zugewiesen wurde<br>
[Bug]           Verbundene Geräde unter Raid-Verbund lassen sich nicht entfernen<br>
[Bug]           Service lässt keine weiteren Komponenten zu nach Hinzufügen einer Komponente mit Sonderzeichen<br>
[Bug]           Stromverbraucher ist nach dem Anlegen mit sich selbst verbunden<br>
[Bug]           Beim Speichern in der Rollenverwaltung werden die geänderten Werte zwar gespeichert, aber nach dem ersten neuladen nicht direkt dargestellt<br>
[Bug]           Adressvergabe stellt sich selbstständig auf falsche Werte um<br>
[Bug]           Variante steht bei Betriebssystem auf der Übersichtsseite nicht zur Auswahl<br>
[Bug]           Verknüpftes Interface zeigt auch archivierte Interfaces an<br>
[Bug]           Hersteller-Feld unter Dienste kann nicht leer bleiben<br>
[Bug]           Spezifische Kategorie Datenbankschema wird beim Duplizieren nicht korrekt in Objektliste dargestellt<br>
[Bug]           Für Objektgruppen lassen sich keine Templates erstellen<br>
[Bug]           Suchergebnis "NOT" mit "OR" nicht nachvollziehbar.<br>
[Bug]           Suche: Fehlender Scrollbalken bzw. Scrollbutton/-funktion bei mehrseitigen Ergebnislisten.<br>
[Bug]           Objekt-Liste von Personengruppen stimmt nicht mit Konfiguration überein<br>
[Bug]           Bei einer Suche in Objektlisten stimmen die Seitenangaben nicht<br>

[Amélioration] Dans la vue du châssis, une boîte d'information affiche les appareils attribués du slot sélectionné.
[Amélioration] Les paramètres utilisateur héritent des paramètres du mandant<br>.
[Amélioration] Variables configurables pour les e-mails de workflow : adresse IP & nom d'hôte (voir documentation)<br>
[Amélioration] Possibilité d'éditer le titre de l'objet pour les personnes, les groupes de personnes et les organisations<br>.
[Amélioration] Accélération de la liste des résultats du module Journal de bord<br>.
[Amélioration] Représentation de l'emplacement racine dans le chemin d'accès au site sous forme d'icône<br>.
[Amélioration] Amélioration de l'importation réseau OCS pour les appareils SNMP<br>
[Bug] L'importation OCS ne fusionne pas les objets de la base de données OCS avec les objets créés manuellement dont les attributs correspondent.<br>
[Bug] Les requêtes sur les tickets RT référencés utilisent une référence de mandant incorrecte<br>.
[Bug] Les traductions définies par l'utilisateur ne sont pas prises en compte dans l'exportation Check_MK<br>.
[Bug] Le nom saisi lors de la duplication de plusieurs objets en même temps est ignoré<br>.
[Bug] La duplication de plusieurs objets entraîne des ID SYS identiques<br>.
[Bug] Le style de l'éditeur WYSIWYG n'est pas repris<br>.
[Bug] Un nouvel enregistrement est toujours créé pour les catégories supprimées par l'utilisateur (Single-Value)<br>.
[Bug] Message d'erreur lors de la création de boîtes de patch à partir d'un modèle<br>.
[Bug] La catégorie PDU force l'interrogation SNMP sur l'adresse IP primaire<br>
[Bug] En raison de problèmes de mise en cache, le design de certains modules est partiellement défectueux<br>.
[Bug] Les relations explicites ne peuvent pas être supprimées car le bouton "Archiver" est grisé.<br>
[Bug] Décodage HTML erroné dans le navigateur de listes<br>.
[Bug] La somme de hachage se trouve dans le champ du mot de passe lors de l'édition du login<br>.
[Bug] OCS ne vérifie que les noms d'objets lors de l'importation et peut donc écraser des objets existants<br>.
[Bug] Configuration du nombre de pages préchargées dans les listes d'objets (paramètres système)<br>.
[Bug] Lors de la création d'un rapport, la catégorie Journal de bord dans les conditions émettait toujours un message d'erreur.<br>
[Bug] Lors de la création de relations, des types de relations implicites peuvent être sélectionnés par erreur<br>.
[Bug] Impossible d'enregistrer une arborescence de services de l'explorateur CMDB en tant que graphique SVG dans Internet Explorer 11<br>.
[Bug] Le navigateur d'objets n'affiche pas les appareils logiques sélectionnés<br>.
[Bug] La navigation dans le fil d'Ariane se termine prématurément pour les "Services"<br>.
[Bug] Les propriétés dynamiques des balises Check_MK provoquent une erreur SQL<br>.
[Bug] Le modèle pour les personnes n'est pas enregistré comme modèle<br>.
[Bug] Impossible d'utiliser des attributs de même nom dans les attributs liés d'un rapport<br>.
[Bug] La case à cocher de la ligne supérieure des catégories de la liste sur la page d'aperçu sélectionne également toutes les entrées des autres catégories de la liste sur la page d'aperçu.<br>
[Bug] La suppression d'un statut CMDB fait disparaître les objets qui lui sont associés<br>.
[Bug] Erreur SQL lors de l'utilisation du bouton One Support<br>.
[Bug] Ajouter des informations de "port logique" à la liste des objets du châssis de lames génère un message d'erreur<br>.
[Bug] Des champs de mot de passe vides demandent la saisie du mot de passe dans la catégorie "Login" lorsque le nom d'utilisateur est modifié.<br>
[Bug] Impossible d'attribuer d'autres objets si un objet a été attribué avec une barre oblique inverse.<br>
[Bug] L'importation CSV ne met pas à jour le titre de l'objet, même si un autre identifiant a été configuré<br>.
[Bug] La mise à jour réinitialise les paramètres système par défaut<br>.
[Bug] La catégorie "Périphériques virtuels" affiche un message d'erreur lors de l'enregistrement<br>.
[Bug] L'avant et l'arrière dans la vue de l'armoire sont à une hauteur différente<br>
[Bug] L'attribut "Fabricant" ne s'affiche pas dans l'aperçu de l'attribution des logiciels s'il provient de la catégorie "Services"<br>.
[Bug] Le journal de bord ne dispose pas de sélection de page<br>.
[Bug] Dans les rapports dupliqués, le choix "Afficher les objets avec des raccourcis vides ?" est toujours défini sur "Non"<br>.
[Bug] [JDisc] Lors de la duplication d'un profil JDisc, la fenêtre pop-up ne se ferme pas et le profil n'est pas dupliqué.<br>
[Bug] Certains paramètres ne sont pas enregistrés<br>.
[Bug] La configuration d'une constante de langue pour le nom de la catégorie n'a pas d'effet<br>.
[Bug] Explorateur CMDB : le chemin d'accès au site est affiché sous "Informations sur les objets"<br>.
[Bug] Les ports logiques de l'hôte ne peuvent pas être sélectionnés dans "Réseau" de la catégorie "Périphériques virtuels"<br>.
[Bug] Des ports incorrects sont affichés sous "Réseau" de la catégorie "Périphériques virtuels"<br>.
[Bug] Explorateur CMDB : impossible de marquer le chemin lorsque l'info-bulle est active<br>.
[Bug] La conception de la catégorie "Châssis > Périphériques affectés" est incorrecte<br>.
[Bug] L'adresse de l'hôte n'affiche pas le port associé en "mode affichage"<br>.
[Bug] Le poste de travail se nomme "Workstation"<br> dans la traduction anglaise
[Bug] Popup pour les codes QR dans Chrome pas très clair<br>.
[Bug] Filtre du navigateur d'objets "par groupe de personnes" Affiche le groupe de personnes lui-même dans la fréquence des objets personnes associés<br>.
[Bug] Le bouton Purge n'existe pas dans les catégories personnalisées<br>.
[Bug] Le changement en masse sur la catégorie "Réseau" choisit un objet aléatoire comme serveur DNS<br>
[Bug] Une unité centrale supplémentaire est ajoutée par importation XML du même objet<br>.
[Bug] Impossible de renommer "Services" à l'aide de ses propres constantes de langage<br>.
[Bug] La liste des relations affiche un nombre de pages erroné<br>.
[Bug] Le contenu d'un nouveau workflow est perdu si aucun objet n'est affecté<br>.
[Bug] Impossible de supprimer des périphériques connectés sous une association raid<br>.
[Bug] Le service n'autorise pas d'autres composants après l'ajout d'un composant avec des caractères spéciaux<br>.
[Bug] Le consommateur d'énergie est connecté à lui-même après avoir été créé<br>
[Bug] Lors de l'enregistrement dans la gestion des rôles, les valeurs modifiées sont certes enregistrées, mais ne sont pas directement affichées après le premier rechargement<br>.
[Bug] L'attribution des adresses se règle automatiquement sur des valeurs erronées<br>.
[Bug] La variante n'est pas disponible pour le système d'exploitation sur la page d'aperçu<br>.
[Bug] L'interface liée affiche également les interfaces archivées<br>.
[Bug] Le champ fabricant sous Services ne peut pas rester vide<br>.
[Bug] La catégorie spécifique Schéma de base de données n'est pas correctement représentée dans la liste d'objets lors de la duplication<br>.
[Bug] Impossible de créer des modèles pour les groupes d'objets<br>.
[Bug] Résultat de recherche "NOT" avec "OR" incompréhensible.<br>
[Bug] Recherche : absence de barre de défilement ou de bouton/fonction de défilement pour les listes de résultats de plusieurs pages.<br>
[Bug] La liste des objets des groupes de personnes ne correspond pas à la configuration<br>.
[Bug] Lors d'une recherche dans les listes d'objets, les indications de pages ne correspondent pas<br>.