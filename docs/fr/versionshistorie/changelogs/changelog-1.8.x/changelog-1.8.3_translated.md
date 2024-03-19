<!-- TRANSLATED by md-translate -->
# Changelog 1.8.3

# Changelog 1.8.3

[Verbesserung]  Objektlisten: Performance des Attributs "Betriebssystem" aus der Kategorie "Betriebssystem" verbessert<br>
[Verbesserung]  Im CMDB-Explorer werden die Beziehungsrichtungen nun besser dargestellt<br>
[Verbesserung]  Es werden alle Referenzen des angeklickten Objekts im CMDB-Explorer markiert<br>
[Verbesserung]  Button "Teilstring Suche in Objektlisten als Standard setzen" unter Tools / Datenbank in der Verwaltung<br>
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten<br>
[Verbesserung]  JDISC Import Option "Objekttyp aktualisieren"<br>
[Verbesserung]  Verbundene Kabel können gespeichert werden, wenn kein Anschluss definiert ist<br>
[Bug]           Vertragsbeginn und -ende lassen sich nicht als Bedingung auswählen<br>
[Bug]           Einspielen eines Profils im Quick Configuration Wizard wirft Fehlermeldung<br>
[Bug]           Die Spalten einer Objekt-Liste wurde nicht aktualisiert nachdem diese über die Objekt-Listen Konfiguration bearbeitet wurde<br>
[Bug]           Importe/API erstellen keinen Eintrag in Kategorie "Aktuelle Datei"<br>
[Bug]           DB-Fehler nach Klick auf "Check_MK:Hostmerkmale" unter Dialog-Admin<br>
[Bug]           Eingegebene Zahlen in Textfeldern werden wieder dargestellt<br>
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden<br>
[Bug]           In der Hostadresse werden die logischen Ports im Feld "Verknüpfter Port" wieder dargestellt<br>
[Bug]           Über die Kontaktzuweisung erstellte Personen werden nicht in der globalen Suche gefunden<br>
[Bug]           Wiki-Link wird bei verborgenen Feldern nicht länger dargestellt<br>
[Bug]           Bei der Port Kategorie wird eine Fehlermeldung ausgegeben wenn der i-doit MySQL-Benutzer keine Ausführungsrechte besitzt um Prozeduren auszuführen<br>
[Bug]           Kommas hinter den Template-Namen<br>
[Bug]           post_max_size wird zwei Mal in der Systemübersicht angezeigt<br>
[Bug]           Neue Einträge in der Kategorie "Hostadresse" werden immer als Primär gekenntzeichnet<br>
[Bug]           Modell ist beim Editieren nicht mehr ausgefüllt, wenn der Inhalt aus JDisc stammt<br>
[Bug]           LDAP: Beim einloggen eines LDAP Benutzers wird dieser immer der eingestellten LDAP Standardgruppe hinzugefügt<br>
[Bug]           Monitoring Instanz kann nicht auf "-" gesetzt werden<br>
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt<br>
[Bug]           Löschen von Kabel hinterlässt Beziehung zwischen den verkabelten Objekten<br>
[Bug]           Session Timeout-Wert von <= 0 oder >= 99999[..] führt dazu, dass man sich nicht mehr einloggen kann<br>
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück<br>
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer<br>
[Bug]           Wechsel von Suchergebnis auf CMDB-Explorer öffnet Suchmaske<br>
[Bug]           Report Manager: Komma und Punkt wird in Währungsfeldern vertauscht<br>
[Bug]           Report Manager: Layer-3-Netzdetails werden nicht angezeigt, wenn über eine benutzerdefinierte Kategorie hinweg abgefragt wird<br>
[Bug]           Dateiversionen: Wird die aktuellste Version gelöscht, wird nicht die vorherige Version angeboten<br>
[Bug]           Falsche Übersetzung in benutzerdefinierten Kategorien<br>
[Bug]           Leitungsnetz wird im Objekt Browser nicht angezeigt<br>
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"<br>
[Bug]           Das Erstellen Recht auf "Objekte vom Typ" (Alle) zeigt nun keine weiteren Objekte in der Objektliste an<br>
[Bug]           Suchstring wird fehlerhaft manipuliert beim suchen<br>
[Bug]           API-Logs werden auch geschrieben, wenn die Einstellung hierzu deaktiviert wurde<br>
[Bug]           "Root" im Standortpfad der Objektlisten ausblenden<br>
[Bug]           Wartungs-Modul: Mehrfache Anrede bei Auswahl von mehreren Objekten<br>
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt<br>
[Bug]           Logout nicht möglich bei der Verwendung von SSO<br>
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer<br>
[Bug]           Login im AdminCenter mit belliebigem Account - außer admin - ohne Paswort möglich<br>
[Bug]           PHP-Error beim Aufruf der PDU-Kategorie nach fehlerhafter SNMP-Abfrage<br>
[Bug]           Vertragsdaten werden bei CSV-Import nicht aktualisiert<br>
[Bug]           Bei Geo-Koordinaten wird der Nach-Komma-Anteil abgeschnitten bei Verwendung von Komma<br>
[Bug]           OCS: Port-Beschreibung wird nicht importiert<br>
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird<br>
[Bug]           JDisc Import: Beim Modus "Aktualisieren (Neu Inventarisiert)" werden neu gescannte Geräte nicht richtig importiert wenn diese in einer JDisc-Gruppe zugewiesen sind<br>
[Bug]           Über die Übersichtsseite kann die Verknüpfung zu einem Mobiltelefon nicht entfernt werden<br>
[Bug]           Sonderzeichen werden in der Passwort Kategorie nicht gespeichert "<>"<br>
[Bug]           CSV-Import: Dateiendung .csv darf keine Großbuchstaben haben<br>
[Bug]           Benachrichtigung "Veränderte Objekte": Schwellwert hat keinen Einfluss auf die Benachrichtigung<br>
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung<br>
[Bug]           Kategorie "DHCP" fehlt im CSV-Import<br>
[Bug]           Benachrichtigungen: Tage verhalten sich anders als Monate<br>
[Bug]           JDisc Import: Controller Aufruf erzeugt eine unverständliche Felermeldung wenn kein Standard Server definiert ist<br>
[Bug]           Objekte werden unnötig mehrfach gesperrt<br>
[Bug]           Legende in Verkabelungsansicht überlagert Informationen<br>
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser<br>
[Bug]           Attribute-Darstellung inkorrekt bei Check_MK-Host-Tags<br>
[Bug]           Pfeil für die Sortierung sortiert nicht<br>
[Bug]           CMDB-Explorer hängt sich bei Standort-Objekten auf, wenn nur auf diese eine Berechtigung zum Ansehen besteht<br>
[Bug]           Bei Klick auf "Suche" in der Breadcrumb-Zeile wird eine leere Seite angezeigt<br>
[Bug]           Anzahl anzuzeigender Objekte fehlerhaft<br>
[Bug]           Änderungen am Attribut "Einschub" über den CSV-Import im Logbuch nicht nachvollziehbar<br>
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser<br>
[Bug]           Tags werden nicht in der Suche gefunden<br>
[Bug]           Jeder Login-berechtigte Benutzer darf ein Update von i-doit durchführen<br>
[Bug]           Objekt-Beziehung (Mehrere Objekte) wird bei Massenänderung nicht übernommen<br>
[Bug]           Positionen im Schrank zur Auswahl, die belegt sind<br>
[Bug]           Sprachkonstanten werden im Editiermodus bei Kategorieerweiterungen übersetzt<br>
[Bug]           Fehler bei Berechnung der Raid Kapazität in der Liste Lokaler Massenspeicher -> Gerät<br>
[Bug]           LIMIT in Report wird beim Export ignoriert<br>
[Bug]           Name des validierten Feldes in der Fehlermeldung unter Umständen uneindeutig<br>
[Bug]           Status der Einträge im Dialog-Admin werden übersetzt dargestellt<br>
[Bug]           Überflüssiger Scrollbalken in der Listeneditierung<br>
[Bug]           Systemfehlermeldung bei Exportieren ohne Standortobjekt<br>
[Bug]           Diagrammtypen im Widget "Diagramm" in Auswahl vertauscht<br>
[Bug]           Speichereinheit-Anzeige in Widget "Rechner" in "RAID Kapazität" wird nicht angepasst<br>
[Bug]           Interner "i-doit Status" kann fälschlicherweise als Filter unter "CMDB-Status" ausgewählt werden<br>
[Bug]           Erster Workflow-Parameter wird überschrieben nach Neuerstellung eines anderen Parameters<br>
[Bug]           Keine Status-Auswahl unter "Workflows->Workflows" möglich<br>
[Bug]           Button "Abbrechen" fehlt bei "Neue E-Mail-Vorlage erstellen"<br>
[Bug]           Falsche Anzeige des Screens oder der Button nach "Abbrechen" oder "Speichern" einer Benachrichtigungs- oder E-Mail-Vorlage<br>
[Bug]           Gelöschte Report-Kategorie wird im Treebrowser weiter angezeigt<br>
[Bug]           Fehlender "Abbrechen"-Button im Abfrage-Editor des Report-Managers<br>

[Amélioration] Listes d'objets : amélioration des performances de l'attribut "Système d'exploitation" de la catégorie "Système d'exploitation"<br>.
[Amélioration] Dans l'explorateur CMDB, les directions des relations sont désormais mieux représentées<br>.
[Amélioration] Toutes les références de l'objet cliqué sont mises en évidence dans l'explorateur CMDB<br>.
[Amélioration] Bouton "Définir la recherche de sous-chaînes dans les listes d'objets comme standard" sous Outils / Base de données dans l'administration<br>.
[Amélioration] Bouton pour supprimer un filtre dans les listes d'objets<br>
[Amélioration] Option d'importation JDISC "Mettre à jour le type d'objet"<br>
[Amélioration] Les câbles connectés peuvent être enregistrés si aucun raccordement n'est défini<br>
[Bug] Le début et la fin du contrat ne peuvent pas être sélectionnés comme condition<br>.
[Bug] L'importation d'un profil dans l'assistant de configuration rapide génère un message d'erreur<br>.
[Bug] Les colonnes d'une liste d'objets n'étaient pas mises à jour après avoir été modifiées via la configuration des listes d'objets<br>.
[Bug] Les importations/API ne créent pas d'entrée dans la catégorie "Fichier actuel"<br>.
[Bug] Erreur dans la base de données après avoir cliqué sur "Check_MK:Caractéristiques de l'hôte" sous Dialogue-Admin<br>.
[Bug] Les chiffres saisis dans les champs de texte sont à nouveau affichés<br>.
[Bug] Impossible d'importer la latitude et la longitude via l'importation CSV<br>.
[Bug] Dans l'adresse de l'hôte, les ports logiques sont à nouveau représentés dans le champ "Port lié"<br>.
[Bug] Les personnes créées via l'attribution de contacts ne sont pas trouvées dans la recherche globale<br>.
[Bug] Le lien wiki n'est plus affiché dans les champs masqués<br>.
[Bug] Un message d'erreur est affiché pour la catégorie de port si l'utilisateur i-doit MySQL ne possède pas les droits d'exécution pour exécuter des procédures<br>.
[Bug] Virgules après les noms de modèles<br>.
[Bug] post_max_size est affiché deux fois dans l'aperçu du système<br>.
[Bug] Les nouvelles entrées dans la catégorie "Adresse de l'hôte" sont toujours marquées comme primaires<br>.
[Bug] Le modèle n'est plus rempli lors de l'édition si le contenu provient de JDisc<br>.
[Bug] LDAP : lorsqu'un utilisateur LDAP se connecte, il est toujours ajouté au groupe LDAP par défaut<br>.
[Bug] L'instance de surveillance ne peut pas être définie sur "-"<br>.
[Bug] Les conditions sur l'attribut "Insertion" ne sont pas correctement appliquées dans le gestionnaire de rapports<br>.
[Bug] La suppression de câbles laisse une relation entre les objets câblés<br>.
[Bug] Une valeur de timeout de session <= 0 ou >= 99999[...] entraîne l'impossibilité de se connecter<br>.
[Bug] La suppression d'une attribution de slot laisse une entrée dans "objets spatialement attribués"<br>
[Bug] Sélection d'attributs pour la catégorie "Système d'exploitation" dans le gestionnaire de rapports vide<br>
[Bug] Le passage du résultat de recherche à l'explorateur CMDB ouvre le masque de recherche<br>.
[Bug] Report Manager : la virgule et le point sont inversés dans les champs de devise<br>.
[Bug] Report Manager : les détails du réseau de la couche 3 ne sont pas affichés lors d'une requête sur une catégorie définie par l'utilisateur<br>.
[Bug] Versions de fichiers : Si la version la plus récente est supprimée, la version précédente n'est pas proposée<br>.
[Bug] Mauvaise traduction dans les catégories définies par l'utilisateur<br>.
[Bug] Le réseau de lignes ne s'affiche pas dans le navigateur d'objets<br>.
[Bug] Format de date incorrect dans la catégorie "Attribution de contrat"<br>.
[Bug] Le droit de création sur "Objets de type" (Tous) n'affiche plus d'autres objets dans la liste des objets<br>.
[Bug] La chaîne de recherche est manipulée de manière incorrecte lors de la recherche<br>.
[Bug] Les logs API sont écrits même si le paramètre est désactivé<br>.
[Bug] Cacher "Root" dans le chemin de localisation des listes d'objets<br>.
[Bug] Module de maintenance : S'adresser à plusieurs personnes lors de la sélection de plusieurs objets<br>.
[Bug] La capacité du raid dans les systèmes de stockage est toujours représentée en Go<br>.
[Bug] Impossible de se déconnecter lors de l'utilisation du SSO<br>.
[Bug] Champs vides dans la configuration LDAP lors de l'appel de la vue d'édition<br>
[Bug] Possibilité de se connecter à AdminCenter avec n'importe quel compte - sauf admin - sans mot de passe<br>.
[Bug] Erreur PHP lors de l'appel de la catégorie PDU après une requête SNMP erronée<br>.
[Bug] Les données du contrat ne sont pas mises à jour lors de l'importation CSV<br>.
[Bug] Pour les coordonnées géographiques, la partie après la virgule est coupée lors de l'utilisation de la virgule<br>.
[Bug] OCS : la description des ports n'est pas importée<br>.
[Bug] Informations de journal incorrectes pour les armoires lorsqu'un objet est repositionné<br>.
[Bug] Importation JDisc : en mode "Actualiser (Nouvel inventaire)", les appareils nouvellement scannés ne sont pas importés correctement lorsqu'ils sont assignés dans un groupe JDisc<br>.
[Bug] Impossible de supprimer le lien vers un téléphone portable à partir de la page d'aperçu<br>.
[Bug] Les caractères spéciaux ne sont pas enregistrés dans la catégorie mot de passe "<>"<br>.
[Bug] Importation CSV : l'extension de fichier .csv ne peut pas être en majuscules<br>.
[Bug] Notification "Objets modifiés" : le seuil n'a pas d'influence sur la notification<br>.
[Bug] La catégorie "DHCP" est absente de l'édition de la liste<br>.
[Bug] La catégorie "DHCP" est manquante dans l'importation CSV<br>.
[Bug] Notifications : Les jours se comportent différemment des mois<br>
[Bug] JDisc Import : l'appel du contrôleur génère un message de champ incompréhensible si aucun serveur par défaut n'est défini<br>.
[Bug] Les objets sont verrouillés inutilement plusieurs fois<br>.
[Bug] La légende dans l'affichage du câblage recouvre les informations<br>.
[Bug] Affichage incorrect des icônes dans le navigateur de listes<br>.
[Bug] Représentation incorrecte des attributs pour les balises Check_MK-Host<br>.
[Bug] La flèche de tri ne trie pas<br>.
[Bug] L'explorateur CMDB se bloque sur les objets de site s'ils sont les seuls à être autorisés à être consultés<br>.
[Bug] Une page vide s'affiche lorsque l'on clique sur "Recherche" dans le fil d'Ariane<br>.
[Bug] Erreur dans le nombre d'objets à afficher<br>.
[Bug] Impossible de suivre les modifications de l'attribut "Insertion" via l'importation CSV dans le journal de bord<br>.
[Bug] Le paramètre expert "auth.use-in-location-tree" désactive l'emplacement racine pour tous les utilisateurs dans l'explorateur de site<br>.
[Bug] Les tags ne sont pas trouvés dans la recherche<br>.
[Bug] Chaque utilisateur autorisé à se connecter peut faire une mise à jour d'i-doit<br>
[Bug] La relation entre les objets (plusieurs objets) n'est pas reprise lors d'une modification en masse<br>.
[Bug] Positions dans l'armoire à sélectionner qui sont occupées<br>
[Bug] Les constantes de langue sont traduites en mode édition lors des extensions de catégorie<br>.
[Bug] Erreur de calcul de la capacité du raid dans la liste Mémoire de masse locale -> Périphérique<br>.
[Bug] LIMIT dans le rapport est ignoré lors de l'exportation<br>
[Bug] Le nom du champ validé dans le message d'erreur peut être ambigu<br>.
[Bug] L'état des entrées dans le dialogue Admin est traduit<br>.
[Bug] Barre de défilement superflue dans l'édition de liste<br>.
[Bug] Message d'erreur système lors de l'exportation sans objet de localisation<br>
[Bug] Inversion des types de diagramme dans le widget "Diagramme" dans la sélection<br>.
[Bug] L'affichage de l'unité de stockage dans le widget "Calculatrice" dans "Capacité RAID" n'est pas ajusté<br>.
[Bug] Le "Statut i-doit" interne peut être sélectionné par erreur comme filtre sous "Statut CMDB"<br>.
[Bug] Le premier paramètre de workflow est écrasé après la création d'un autre paramètre<br>.
[Bug] Impossible de sélectionner un statut sous "Workflows->Workflows"<br>.
[Bug] Bouton "Annuler" manquant pour "Créer un nouveau modèle d'e-mail"<br>.
[Bug] Affichage incorrect de l'écran ou des boutons après "Annuler" ou "Enregistrer" un modèle de notification ou d'e-mail<br>.
[Bug] La catégorie de rapport supprimée reste affichée dans le navigateur d'arborescence<br>.
[Bug] Bouton "Annuler" manquant dans l'éditeur de requêtes du gestionnaire de rapports<br>.