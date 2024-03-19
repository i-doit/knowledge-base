<!-- TRANSLATED by md-translate -->
# Changelog 1.6.2

# Changelog 1.6.2

[Neue Funktion] JDisc-Profile: Kategorie-Auswahl Erweiterung um "FC-Ports".<br>
[Verbesserung]  Neues Readonly Feld "Verwaltungsinstanz" in Kategorie Virtuelle Maschine<br>
[Verbesserung]  Neue Einheiten: "Foot", "Meter" und "Kilometer"<br>
[Verbesserung]  Zentrierte Darstellung von Popup-Fenstern<br>
[Verbesserung]  Neue Kategorie "Virtuell gemanagte Objekte"<br>
[Verbesserung]  Report-Manager Kondition zur Abfrage des Standortbaumes<br>
[Bug]           Organisationsbeziehungen werden nicht automatisiert gelöscht<br>
[Bug]           Verwendung von Profilen aus älteren Versionen im CSV-Import führt zu einem Fehler<br>
[Bug]           Systemfehlermeldung nach Klick auf "Abschließen" unter "Workflows-Workflows"<br>
[Bug]           Reports können nicht bearbeitet werden, wenn diese ohne Bedingungen gespeichert wurden<br>
[Bug]           CSV-Import erzeugt nur Einträge für Werte, die im Mapping enthalten sind<br>
[Bug]           Leere IP Adressen in Kategorie Hostadresse werden als falsche IP Adresse gekennzeichnet<br>
[Bug]           Button zum Entfernen von IP Adressen in Kategorie Hostadresse startet keine erneute Validierung<br>
[Bug]           Beim Bearbeiten eines Objekttypen in Englisch sind Konstante und Bezeichnung vertauscht<br>
[Bug]           Reiter zur Auswahl der Ansicht in Kategorie "Verkabelung" haben keine Funktion<br>
[Bug]           IP-Adresse kann nicht gespeichert werden, wenn das vierte Oktett 0 beträgt.<br>
[Bug]           Kategorien "Betriebssystem" und "Virtuelle Maschine" werden bei neuen Objekten mit inkorrekten Werten vorbefüllt<br>
[Bug]           ignoreFunction für das Ignorieren von LDAP Sync-Usern negiert die eigentliche Aussage. Eigentlich zu ignorierende User werden hier ausschließlich angelegt.<br>
[Bug]           Verkabelungsansicht zeigt nur mehrere Hops und keine Einzelverbindungen<br>
[Bug]           Javascript Fehler in Schrank-Ansicht wenn Objekt-Titel Tabs enthalten<br>
[Bug]           Kategorien "Zugewiesener Arbeitsplatz" und "Zugewiesene Endgeräte" können nicht über den CSV-Import importiert werden<br>
[Bug]           Zuvor geöffnete benutzerdefinierte Kategorie wird gelöscht, wenn umgehend eine neue erstellt wird.<br>
[Bug]           "Versionsnummer" kann in Kategorie "Anwendungen" => "Installation" nicht ausgewählt werden<br>
[Bug]           Das Anzeigen der Liste der einer Datei zugewiesenen Objekte gibt eine Fehlermeldung aus<br>
[Bug]           Identifikation von Objekten im CSV-Import erfolgt nicht<br>
[Bug]           Benutzerdefinierte Kategorien werden nicht in der Suche berücksichtigt.<br>
[Bug]           Beim CSV-Import wird das Mapping für den Objekttypen ignoriert<br>
[Bug]           Auf der Übersichtsseite werden Hostadressen nicht angezeigt<br>
[Bug]           Die Unterkategorie "Verbindung" aus der Ordnerkategorie "Netzwerkverbindungen" kann nicht geladen werden.<br>
[Bug]           Rückseite eines Chassis aus Template wird nicht übernommen<br>
[Bug]           Kategorie "Hostadresse" kann auf der Übersichtsseite nicht befüllt werden.<br>
[Bug]           Beim entfernen der "Zentrale" in Kategorie "Stammdaten" einer "Organisation" wird die dazugehörige Beziehung nicht gelöscht.<br>
[Bug]           Scrolleffekt in Hauptnavigationsleiste defekt<br>
[Bug]           Temporäre Ordner mit dem Namen "0" verursachen in einigen Fällen einen Fehler beim Löschen des Caches<br>
[Bug]           Attribut "Abgebucht" aus Kategorie "Rechnung" wird nicht korrekt gespeichert.<br>
[Bug]           Zuweisung einer Person zu einer Personengruppe erzeugt über den LDAP-Import keine Beziehung<br>
[Bug]           Vereinzelte Singlevalue Kategorien haben keine Purge Funktion<br>
[Bug]           API leert Zuordnungen in (Multi-Value) Kategorien, wenn die Werte nicht angegeben werden<br>

[Nouvelle fonction] Profils JDisc : Sélection de catégorie Extension aux "Ports FC".<br>
[Amélioration] Nouveau champ Readonly "Instance de gestion" dans la catégorie Machine virtuelle<br>
[Amélioration] Nouvelles unités : "Foot", "Meter" et "Kilometer"<br>
[Amélioration] Affichage centré des fenêtres pop-up<br>.
[Amélioration] Nouvelle catégorie "Objets gérés virtuellement"<br>
[Amélioration] Condition du gestionnaire de rapports pour la consultation de l'arborescence des sites<br>
[Bug] Les relations organisationnelles ne sont pas supprimées automatiquement<br>.
[Bug] L'utilisation de profils d'anciennes versions dans l'importation CSV provoque une erreur<br>.
[Bug] Message d'erreur système après avoir cliqué sur "Terminer" sous "Workflows-Workflows"<br>
[Bug] Les rapports ne peuvent pas être modifiés s'ils ont été enregistrés sans conditions<br>.
[Bug] L'importation CSV ne crée des entrées que pour les valeurs contenues dans le mapping<br>.
[Bug] Les adresses IP vides dans la catégorie Adresse hôte sont marquées comme adresses IP incorrectes<br>.
[Bug] Le bouton pour supprimer des adresses IP dans la catégorie Adresse hôte ne démarre pas une nouvelle validation<br>.
[Bug] Lors de la modification d'un type d'objet en anglais, la constante et le nom sont inversés<br>.
[Bug] Les onglets de sélection de la vue dans la catégorie "Câblage" n'ont pas de fonction<br>.
[Bug] L'adresse IP ne peut pas être enregistrée si le quatrième octet est 0.<br>
[Bug] Les catégories "Système d'exploitation" et "Machine virtuelle" sont pré-remplies avec des valeurs incorrectes pour les nouveaux objets<br>.
[Bug] ignoreFunction pour ignorer les utilisateurs LDAP Sync nie le message réel. Les utilisateurs à ignorer sont exclusivement créés ici <br>.
[Bug] L'affichage du câblage ne montre que plusieurs sauts et pas de connexions individuelles<br>.
[Bug] Erreur Javascript dans la vue armoire lorsque les titres des objets contiennent des onglets<br>.
[Bug] Les catégories "Poste de travail attribué" et "Terminaux attribués" ne peuvent pas être importées via l'importation CSV<br>.
[Bug] Une catégorie personnalisée ouverte précédemment est supprimée si une nouvelle est créée immédiatement <br>.
[Bug] Le "numéro de version" ne peut pas être sélectionné dans la catégorie "Applications" => "Installation"<br>.
[Bug] L'affichage de la liste des objets affectés à un fichier génère un message d'erreur<br>.
[Bug] L'identification des objets dans l'importation CSV ne se fait pas<br>.
[Bug] Les catégories définies par l'utilisateur ne sont pas prises en compte dans la recherche.<br>
[Bug] Lors de l'importation CSV, le mapping pour le type d'objet est ignoré<br>.
[Bug] Les adresses des hôtes ne sont pas affichées sur la page d'aperçu<br>.
[Bug] La sous-catégorie "Connexion" de la catégorie de dossiers "Connexions réseau" ne peut pas être chargée.<br>
[Bug] L'arrière d'un châssis n'est pas repris depuis le modèle<br>.
[Bug] La catégorie "Adresse de l'hôte" ne peut pas être remplie sur la page d'aperçu.<br>
[Bug] Lors de la suppression du "Siège" dans la catégorie "Données de base" d'une "Organisation", la relation correspondante n'est pas supprimée.<br>
[Bug] Effet de défilement défectueux dans la barre de navigation principale<br>.
[Bug] Les dossiers temporaires nommés "0" provoquent dans certains cas une erreur lors de la suppression du cache<br>.
[Bug] L'attribut "Débité" de la catégorie "Facture" n'est pas correctement enregistré.<br>
[Bug] L'attribution d'une personne à un groupe de personnes ne crée pas de relation via l'importation LDAP<br>.
[Bug] Certaines catégories Singlevalue n'ont pas de fonction de purge<br>.
[Bug] L'API vide les associations dans les catégories (multi-valeurs) si les valeurs ne sont pas spécifiées<br>.