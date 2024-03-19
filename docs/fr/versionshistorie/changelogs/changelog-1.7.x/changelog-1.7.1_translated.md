<!-- TRANSLATED by md-translate -->
# Changelog 1.7.1

# Changelog 1.7.1

[Neue Funktion] Api: Möglichkeit zum Archivieren eines Objektes (Parameter "status" in Methode cmdb.object.delete)<br>
[Neue Funktion] Neue Felder "Freier-" und "Belegter Speicher" in Kategorie Laufwerk<br>
[Neue Funktion] JDisc-Import: Berücksichtigung von freiem und benutzem Speicherplatz beim Import von Laufwerken<br>
[Verbesserung]  Export Funktion für Objektlisten als CSV<br>
[Verbesserung]  QR-Code Konfiguration um QR-Code Printer ergänzt<br>
[Verbesserung]  Unfertige Objekte Löschen: Anzeige der Objekte<br>
[Verbesserung]  Kategorien in den Konditionseinstellungen eines Reports nun durchsuchbar<br>
[Verbesserung]  Anzeige von E-Mail-Adressen als klickbarer Link in Reports<br>
[Verbesserung]  Suche: Neue Funktion Deep Search durchsucht auch Teilbegriffe (in Systemeinstellungen als Standard definierbar)<br>
[Änderung]      Entfernen der Sprachauswahl beim Login (die Auswahl führte dazu, dass die konfigurierte Sprache nicht verwendet wurde)<br>
[Änderung]      Umbenennung der Kategorie "Zugewiesene Endgeräte" in "Arbeitsplatzkomponenten"<br>
[Bug]           OCS-Import: Geschwindigkeit von Ports werden nicht richtig importiert<br>
[Bug]           Gastsysteme verschwinden aus einem Cluster, nachdem die Verwaltungsinstanz gesetzt wurde<br>
[Bug]           "Host Resourcen" aus der Kategorie Virtuelle Geräte werden nicht von vollständig angezeigt.<br>
[Bug]           Report View "Verkabelung" erzeugt Fehlermeldung<br>
[Bug]           Lesezeichen-Reihenfolge läßt sich nicht ändern<br>
[Bug]           CSV-Import von Informationen in Kategorie "WAN-Leitungen" nur unter bestimmten Bedingungen möglich<br>
[Bug]           JDisc-Import: Speicherüberlauf bei sehr großer Anzahl zu importierender Ports<br>
[Bug]           Interfaces können nicht mehr angelegt werden<br>
[Bug]           CSV-Import über die Konsole erstellt keine Logbuch-Einträge<br>
[Bug]           Chassis Einstellungen können nicht gespeichert werden<br>
[Bug]           Trial Meldung wird angezeigt trotz gültiger Lizenz<br>
[Bug]           Fehler beim Speichern der Kategorie "Zugeweisene Objekte"<br>
[Bug]           Falsches ROW_FORMAT in zwei MySQL Tabellen verursacht Fehler bei Installation in MySQL 5.7<br>
[Bug]           Speicherüberlauf beim CSV-Export eines Reports mit sehr vielen Inhalten<br>
[Bug]           Leere Darstellung von " > " beim Standortpfad in Reports<br>
[Bug]           Kategorie SLA in Service wird nicht korrekt gespeichert und kann nicht mehr gelöscht werden<br>
[Bug]           Darstellungseinstellung Standard-Baumansicht stellt sich nach Klick auf eine Objekttyp-Gruppe wieder auf Objektsicht zurück<br>
[Bug]           Einige Button unter Beziehungen bei Status "Archiviert" und "Gelöscht" anwählbar, auch wenn keine Objekte vorhanden<br>
[Bug]           JDisc Standard Profil bei Erstellung einer Objekttyp-Konfiguration nicht vorhanden<br>
[Bug]           Fehler beim Aufruf einer Objektliste mit dem Attribut "VLAN-ID" aus der Kategorie "WAN-Leitung"<br>
[Bug]           Kategorie Buchhaltung kann nicht gespeichert werden, wenn kein "Datum der Anschaffung" hinterlegt wurde<br>
[Bug]           Kategorie "Rechteverwaltung" taucht zusätzlich in der Kategorie-Liste auf.<br>
[Bug]           Lizenzschlüssel werden nur gespeichert, wenn ein Ablaufdatum angegeben wird.<br>
[Bug]           Kategorie Buchhaltung lässt sich nicht bei der Anlage von Objekten über die Übersichtsseite pflegen<br>
[Bug]           Fehler beim Aufruf einer benutzerdefinierten Kategorie über Suchergebnisse<br>
[Bug]           "Typ" wird beim JDisc-Import nicht ins Logbuch geschrieben<br>
[Bug]           Bei Benutzung eines Filters, zeigt die Listeneditierung zwar die einzelnen Zeilen, diese aber nur mit leeren Inhalten an<br>
[Bug]           checkmk_transfer.sh wirft PHP Fatal Error<br>
[Bug]           Datumsformate innerhalb der Listeneditierung nicht einheitlich<br>
[Bug]           Standort-Pfad im Report besteht lediglich aus dem Zeichen ><br>
[Bug]           Fehler beim Aufruf von Objektlisten aktivem CMDB-Status-Filter aus dem my-doit-Bereich<br>
[Bug]           Neue Dateiversion kann nicht hochgeladen werden<br>
[Bug]           Templates vom Objekttyp Gebäude werden nicht als Template sondern als Objekt im Zustand Normal gespeichert.<br>
[Bug]           Das Anlegen neuer Wartungen ist nicht möglich<br>
[Bug]           Inhalte aus benutzerdefinierten Kategorien werden in Listenansicht nicht dargestellt, sobald diese bearbeitet wurde<br>
[Bug]           JEDI-/JDisc-Import setzt Kommastelle bei Laufwerkskapazitäten falsch<br>
[Bug]           Systemfehlermeldung nach Klick auf "Purge" unter "Benachrichtigungen"<br>
[Bug]           Kündigungsinformationen werden in Listeneditierung nicht auf alle Objekte übertragen, wenn die Informationen in der Zeile "Alle Objekte" eingetragen werden<br>
[Bug]           Zugewiesene Objekte in Kategorie "Stacking" lassen sich nicht entfernen, wenn keine weiteren Zuweisungen mehr vorhanden sind.<br>
[Bug]           Attribute aus Kategorie "Organisation" verschwinden aus der Konfiguration der Listenansicht<br>
[Bug]           Beim Duplizieren eines Kontakts ist die E-Mail-Adresse beim Duplikat doppelt vorhanden <br>
[Bug]           Abfrage eines leeren Dialog-Plus-Felds im Abfrage-Editor ist nicht möglich<br>
[Bug]           Report berücksichtigt bei Bedingung "ungleich" keine Leerwerte<br>
[Bug]           Überflüssiger "Editieren"-Button in Unterkategorie "Service - Service Typ"<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem läßt sich auch ohne vorherige Betriebssystem-Objektauswahl ändern<br>
[Bug]           Im JDisc-Profil erscheint kein Hinweis, dass die Verbindung zum gewählten Server fehlschlägt<br>
[Bug]           Purge-Button ist aktiv, obwohl keine JDisc-Konfiguratonen angelegt sind<br>
[Bug]           Navigationsbaum wird beim Aufruf eines JDisc-Profils nicht aufgeklappt<br>
[Bug]           Beim Anklicken der Objekt-Anzeigefelder in Kategorie "Beziehungsdetails" werden die Objekte ausgeblendet<br>
[Bug]           Lesezeichen-Definitionen werden komplett gelöscht durch "falsches" Übernehmen<br>
[Bug]           Zählerfunktion in Verkabelungsimport grafisch kaputt<br>
[Bug]           Bei der Auswahl des deutschen Datumsformats wird in Objektlisten die englische Darstellung genutzt<br>
[Bug]           Report-View "CMDB-Status Änderungen" stellt nicht alle Änderungen dar<br>
[Bug]           Fehler bei der Eingabe von zusätzlichen Leerzeichen in der Suche<br>
[Bug]           Änderung eines Betriebssystems zeigt im Logbuch lediglich die ID des verknüpften Objekts<br>
[Bug]           Verwendung einiger Sonderzeichen führt zu Fehler in der Suche<br>
[Bug]           Reader sieht auf Übersichtsseite einen "Editier"-Button<br>
[Bug]           Filter "Quelle" im Logbuch filtert nicht korrekt auf "Benutzer"<br>
[Bug]           Fehlermeldung im Widget "CMDB Status Lebenszyklus" nach Hinzufügen ins Dashboard<br>
[Bug]           CSV-Import besagt fälschlicherweise, dass die Kategorie "Datensicherung" nicht dem Objekttyp zugewiesen ist<br>
[Bug]           Reports mit benutzerdefinierten Kategorien geben Objekte fälschlicherweise mehrfach aus<br>
[Bug]           Suggestion-Feld der Suche wird nur einmal aktualisiert<br>
[Bug]           Logbuch-Eintrag zu Softwarezuweisung zeigt nur die ID statt des Namens<br>

[Nouvelle fonction] Api : possibilité d'archiver un objet (paramètre "status" dans la méthode cmdb.object.delete)<br>
[Nouvelle fonction] Nouveaux champs "Mémoire libre" et "Mémoire occupée" dans la catégorie lecteur<br>
[Nouvelle fonction] Importation JDisc : prise en compte de l'espace libre et de l'espace utilisé lors de l'importation des lecteurs<br>.
[Amélioration] Fonction d'exportation des listes d'objets au format CSV<br>
[Amélioration] Configuration du code QR complétée par une imprimante de code QR<br>
[Amélioration] Suppression des objets non terminés : Affichage des objets<br>
[Amélioration] Possibilité de rechercher des catégories dans les paramètres de condition d'un rapport<br>.
[Amélioration] Affichage des adresses e-mail sous forme de lien cliquable dans les rapports<br>.
[Amélioration] Recherche : La nouvelle fonction Deep Search recherche également des termes partiels (définissable comme standard dans les paramètres système)<br>
[Modification] Suppression du choix de la langue lors de la connexion (ce choix ne permettait pas d'utiliser la langue configurée)<br>
[Changement] Changement du nom de la catégorie "Terminaux attribués" en "Composants du poste de travail"<br>.
[Bug] Importation OCS : la vitesse des ports n'est pas importée correctement<br>.
[Bug] Les systèmes invités disparaissent d'un cluster après que l'instance de gestion a été définie<br>.
[Bug] Les "Ressources hôte" de la catégorie Périphériques virtuels ne s'affichent pas complètement <br>.
[Bug] La vue du rapport "Câblage" génère un message d'erreur<br>.
[Bug] Impossible de modifier l'ordre des signets<br>.
[Bug] Importation CSV d'informations dans la catégorie "Lignes WAN" seulement possible sous certaines conditions<br>.
[Bug] Importation de JDisc : débordement de mémoire si le nombre de ports à importer est très important<br>.
[Bug] Impossible de créer des interfaces<br>.
[Bug] L'importation CSV via la console ne crée pas d'entrées dans le journal<br>.
[Bug] Impossible d'enregistrer les paramètres du châssis<br>.
[Bug] Le message d'essai s'affiche malgré une licence valide<br>
[Bug] Erreur lors de l'enregistrement de la catégorie "Objets attribués"<br>
[Bug] Un ROW_FORMAT incorrect dans deux tables MySQL provoque une erreur lors de l'installation dans MySQL 5.7<br>.
[Bug] Débordement de mémoire lors de l'exportation CSV d'un rapport avec beaucoup de contenu<br>.
[Bug] Affichage vide de " > " pour le chemin d'accès au site dans les rapports<br>.
[Bug] La catégorie SLA dans le service n'est pas correctement enregistrée et ne peut plus être supprimée<br>.
[Bug] Le paramètre d'affichage de l'arborescence standard revient à la vue objet après avoir cliqué sur un groupe de types d'objets<br>.
[Bug] Certains boutons sous les relations peuvent être sélectionnés lorsque le statut est "Archivé" ou "Supprimé", même si aucun objet n'existe<br>.
[Bug] Le profil standard JDisc n'est pas présent lors de la création d'une configuration de type d'objet<br>.
[Bug] Erreur lors de l'appel d'une liste d'objets avec l'attribut "VLAN-ID" de la catégorie "Ligne WAN"<br>.
[Bug] Impossible d'enregistrer la catégorie "Comptabilité" si aucune "date d'acquisition" n'a été définie<br>.
[Bug] La catégorie "Gestion des droits" apparaît en plus dans la liste des catégories <br>.
[Bug] Les clés de licence ne sont enregistrées que si une date d'expiration est indiquée.<br>
[Bug] La catégorie Comptabilité ne peut pas être gérée lors de la création d'objets via la page d'aperçu<br>.
[Bug] Erreur lors de l'appel d'une catégorie personnalisée via les résultats de recherche<br>.
[Bug] Le "type" n'est pas écrit dans le journal lors de l'importation JDisc<br>.
[Bug] Lors de l'utilisation d'un filtre, l'édition de la liste affiche les lignes individuelles, mais seulement avec un contenu vide<br>.
[Bug] checkmk_transfer.sh provoque une erreur fatale PHP<br>.
[Bug] Les formats de date ne sont pas uniformes dans l'édition de liste<br>.
[Bug] Le chemin d'accès au site dans le rapport se compose uniquement du caractère ><br>.
[Bug] Erreur lors de l'appel des listes d'objets avec le filtre d'état CMDB actif depuis la zone my-doit<br>.
[Bug] Impossible de télécharger une nouvelle version de fichier<br>.
[Bug] Les templates du type d'objet Bâtiment ne sont pas enregistrés en tant que templates mais en tant qu'objets à l'état Normal.<br>
[Bug] La création de nouvelles maintenances n'est pas possible<br>.
[Bug] Le contenu des catégories personnalisées n'est pas affiché dans la vue en liste une fois que celle-ci a été modifiée<br>.
[Bug] L'importation JEDI/JDisc place mal la virgule dans les capacités des lecteurs<br>.
[Bug] Message d'erreur système après avoir cliqué sur "Purge" sous "Notifications"<br>.
[Bug] Les informations de résiliation ne sont pas appliquées à tous les objets dans l'édition de liste lorsque les informations sont saisies dans la ligne "Tous les objets"<br>.
[Bug] Impossible de supprimer des objets attribués dans la catégorie "Empilement" s'il n'y a plus d'autres attributions.<br>
[Bug] Les attributs de la catégorie "Organisation" disparaissent de la configuration de la vue en liste<br>.
[Bug] Lors de la duplication d'un contact, l'adresse e-mail est dupliquée dans le double <br>.
[Bug] Impossible d'interroger un champ Dialogue Plus vide dans l'éditeur de requêtes<br>.
[Bug] Le rapport ne prend pas en compte les valeurs vides si la condition est "différent"<br>.
[Bug] Bouton "Editer" superflu dans la sous-catégorie "Service - Type de service"<br>.
[Bug] Le numéro de version dans la catégorie système d'exploitation peut être modifié sans sélection préalable de l'objet système d'exploitation<br>.
[Bug] Le profil JDisc ne signale pas l'échec de la connexion au serveur sélectionné<br>.
[Bug] Le bouton Purge est actif alors qu'aucune configuration JDisc n'a été créée<br>.
[Bug] L'arbre de navigation ne s'ouvre pas lors de l'appel d'un profil JDisc<br>.
[Bug] Les objets sont masqués lorsque l'on clique sur les champs d'affichage des objets dans la catégorie "Détails des relations"<br>.
[Bug] Les définitions de signets sont complètement effacées par un "mauvais" transfert<br>.
[Bug] Fonction de compteur dans l'importation de câblage graphiquement cassée<br>
[Bug] Si le format de date allemand est sélectionné, la représentation anglaise est utilisée dans les listes d'objets<br>.
[Bug] La vue du rapport "Modifications de l'état de la CMDB" ne représente pas toutes les modifications<br>.
[Bug] Erreur lors de la saisie d'espaces supplémentaires dans la recherche<br>.
[Bug] La modification d'un système d'exploitation affiche uniquement l'ID de l'objet lié dans le journal<br>.
[Bug] L'utilisation de certains caractères spéciaux entraîne une erreur dans la recherche<br>.
[Bug] Le lecteur voit un bouton "Editer" sur la page d'aperçu<br>.
[Bug] Le filtre "Source" dans le journal de bord ne filtre pas correctement sur "Utilisateur"<br>
[Bug] Message d'erreur dans le widget "Cycle de vie de l'état CMDB" après ajout dans le tableau de bord<br>.
[Bug] L'importation CSV indique à tort que la catégorie "Sauvegarde des données" n'est pas affectée au type d'objet<br>.
[Bug] Les rapports avec des catégories définies par l'utilisateur renvoient par erreur des objets plusieurs fois<br>.
[Bug] Le champ de suggestion de la recherche n'est mis à jour qu'une seule fois<br>.
[Bug] L'entrée du journal concernant l'attribution du logiciel n'affiche que l'ID au lieu du nom<br>.