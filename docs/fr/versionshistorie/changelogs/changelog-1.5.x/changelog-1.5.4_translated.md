<!-- TRANSLATED by md-translate -->
# Changelog 1.5.4

# Changelog 1.5.4

[Verbesserung]  API: Neue automatische Existenzprüfung der angegebenen Objekt ID für die cmdb.category Methoden<br>
[Verbesserung]  Beschreibungsfeld aus Kategorie "Standort" wird nun in der anpassbaren Listenansicht zur Auswahl angeboten<br>
[Verbesserung]  Kategorie Service: Neues Feld "Service Nummer"<br>
[Bug]           Fehlende Lösch- und fehlerhafte Editierfunktion in der Service-Typ-Konfiguration<br>
[Bug]           Bearbeiten der Rechtekonfiguration innerhalb eines Kontakt-Objekts löscht die Rechte "Administrator", "Ansehen" und "Löschen".<br>
[Bug]           In Kategorie "Raid-Verbund" stehen alle Controller aller Objekte zur Auswahl<br>
[Bug]           Fehler beim Speichern einer Host-Adresse wenn das Attribut Hostname als Pflichtfeld definiert ist<br>
[Bug]           Beim JDisc-Import werden Speicherkapazitäten nicht korrekt ausgelesen und importiert.<br>
[Bug]           Rechtekonfiguration von Personengruppen wird beim Duplizieren nicht übernommen<br>
[Bug]           OCS-Import ignoriert bei der Namensvergabe die Unique-Einstellung<br>
[Bug]           Reports die den CMDB-Status "DELIVERED_FROM_REPAIR" abfragen, können nicht ausgeführt werden<br>
[Bug]           Kategorie "Datenbankzuweisung": Neu angelegte Inhalte werden nicht gespeichert<br>
[Bug]           OCS-Import passt das Änderungsdatum des Objektes nicht an<br>
[Bug]           In Kategorie "Installation" können Lizenzobjekte eines benutzerdefinierten Objekttyps mit der spezifischen Kategorie "Lizenzzuweisung" nicht ausgewählt werden.<br>
[Bug]           Fehler beim Speichern einer benutzerdefinierten Kategorie mit Validierung<br>
[Bug]           Aktualisierung von Objekten über den CSV-Import passt das Änderungsdatum nicht an<br>
[Bug]           Erneuter Import von h-inventory XML-Dateien führt dazu, dass die Einstellung im Wert "primär" der IP-Adresse wechselt<br>
[Bug]           Auswahl der SAN-Zone im "SAN-Zoning Browser" ist nicht möglich<br>
[Bug]           CSV-Import: Standortzuweisung zu Objekten, die lediglich aus Ziffern bestehen ist nicht möglich,da diese als Objekt-IDs interpretiert werden.<br>
[Bug]           Kategorie "Allgemein" kann nicht bearbeitet werden, wenn diese einzeln verrechtet wird.<br>
[Bug]           Objekte ohne eigenes Icon verfügen in der Standort-Sicht über falsche Icons<br>
[Bug]           Deaktivierung der Quickinfo hat keine Auswirkung<br>
[Bug]           Löschen eines Vertragsendes bewirkt, dass Vertragsende und Nächstmögliches Vertragsende auf das aktuelle Datum gesetzt werden.<br>
[Bug]           Ausgabe der Zugriffs-URL zeigt zu allen Einträgen die primäre URL an.<br>
[Bug]           Kategorie Stacking: Lösen der Objektverknüpfungen lässt Beziehungen zurück<br>
[Bug]           Verkabelungsimport: Ports/Anschlüsse werden angelegt, jedoch nicht verkabelt.<br>
[Bug]           CSV-Import: Import einer Kontaktzuweisung in benutzerdefinierten Objekttyp bewirkt leere Zuweisung<br>
[Bug]           CMDB-Explorer zeigt browserabhängig unterschiedlich falsche Ergebnisse bei Verkabelungen an<br>
[Bug]           Report Manager: Kondition nach "Engekauft bei" ignoriert "!="<br>
[Bug]           Connection-Check zu JDisc-DB bleibt rot markiert auch bei positiver Rückmeldung<br>
[Bug]           Kategorie "Datenbankzuweisung" filtert archivierte Einträge nicht aus<br>
[Bug]           Login-Username kann mehrmals vergeben werden<br>
[Bug]           CMDB-Explorer zeigt mit einem Level 1 Filter doppelte Beziehungen nicht an<br>
[Bug]           Sortierung von IDs in Objektlisten ist falsch<br>

[amélioration] API : Nouvelle vérification automatique de l'existence de l'ID d'objet spécifié pour les méthodes cmdb.category<br>.
[Amélioration] Le champ de description de la catégorie "Site" est désormais proposé à la sélection dans la vue liste personnalisable<br>.
[Amélioration] Catégorie Service : Nouveau champ "Numéro de service"<br>
[Bug] Fonction de suppression manquante et fonction d'édition incorrecte dans la configuration du type de service<br>.
[Bug] L'édition de la configuration des droits dans un objet de contact supprime les droits "Administrateur", "Voir" et "Supprimer".<br>
[Bug] Dans la catégorie "Raid-Ligue", tous les contrôleurs de tous les objets sont disponibles pour la sélection<br>.
[Bug] Erreur lors de l'enregistrement d'une adresse d'hôte si l'attribut Hostname est défini comme obligatoire<br>.
[Bug] Lors de l'importation de JDisc, les capacités de stockage ne sont pas lues et importées correctement.<br>
[Bug] La configuration des droits des groupes de personnes n'est pas reprise lors de la duplication<br>.
[Bug] L'importation OCS ignore le réglage de l'unicité lors de l'attribution des noms<br>.
[Bug] Les rapports qui demandent le statut CMDB "DELIVERED_FROM_REPAIR" ne peuvent pas être exécutés<br>.
[Bug] Catégorie "Attribution de base de données" : le contenu nouvellement créé n'est pas enregistré<br>.
[Bug] L'importation OCS n'ajuste pas la date de modification de l'objet<br>.
[Bug] Dans la catégorie "Installation", les objets de licence d'un type d'objet personnalisé avec la catégorie spécifique "Attribution de licence" ne peuvent pas être sélectionnés.<br>
[Bug] Erreur lors de l'enregistrement d'une catégorie personnalisée avec validation<br>.
[Bug] La mise à jour des objets via l'importation CSV n'ajuste pas la date de modification<br>.
[Bug] La réimportation de fichiers XML h-inventory provoque un changement de réglage dans la valeur "primaire" de l'adresse IP<br>.
[Bug] Impossible de sélectionner la zone SAN dans le "SAN-Zoning Browser"<br>.
[Bug] Importation CSV : il n'est pas possible d'attribuer des sites à des objets composés uniquement de chiffres, car ceux-ci sont interprétés comme des ID d'objets.<br>
[Bug] Impossible d'éditer la catégorie "Général" si elle est calculée individuellement.<br>
[Bug] Les objets sans icône propre ont des icônes incorrectes dans la vue du site<br>.
[Bug] La désactivation de l'info-bulle n'a aucun effet<br>.
[Bug] La suppression d'une fin de contrat entraîne la mise à jour de la date de fin de contrat et de la date de fin de contrat suivante à la date actuelle.<br>
[Bug] La sortie de l'URL d'accès affiche l'URL primaire de toutes les entrées.<br>
[Bug] Empilement de catégories : le détachement des liens d'objets laisse les relations en arrière<br>.
[Bug] Importation du câblage : les ports/raccords sont créés mais pas câblés.<br>
[Bug] Importation CSV : l'importation d'une attribution de contact dans un type d'objet défini par l'utilisateur provoque une attribution vide<br>.
[Bug] L'explorateur CMDB affiche des résultats erronés pour les câblages, en fonction du navigateur<br>.
[Bug] Gestionnaire de rapports : la condition après "Acheté chez" ignore "!="<br>.
[Bug] Le contrôle de connexion à la base de données JDisc reste marqué en rouge même en cas de réponse positive<br>
[Bug] La catégorie "Attribution de base de données" ne filtre pas les entrées archivées<br>.
[Bug] Le nom d'utilisateur de connexion peut être donné plusieurs fois<br>.
[Bug] CMDB-Explorer n'affiche pas les relations en double avec un filtre de niveau 1<br>
[Bug] Le tri des ID dans les listes d'objets est incorrect<br>.