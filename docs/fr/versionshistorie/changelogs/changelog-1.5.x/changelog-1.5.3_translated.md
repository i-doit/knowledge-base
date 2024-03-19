<!-- TRANSLATED by md-translate -->
# Changelog 1.5.3

# Changelog 1.5.3

[Verbesserung]  Nutzung der eingestellten Benutzersprache bei Verbindungen über die API<br>
[Verbesserung]  Einstellbares Default Profil im CMDB Explorer<br>
[Verbesserung]  JDisc: Import von Gastsysteme bei einem Virtuellen Host<br>
[Verbesserung]  Vorauswahl des Objekttyps beim Erstellen neuer Objekte aus Templates sollte leer sein<br>
[Bug]           Bei manueller Eingabe einer IP mit definiertem Pflichtfeld wird weiterhin ein Hinweis dargestellt<br>
[Bug]           Reports liefern einen SQL-Fehler, obwohl diese zuvor in der Vorschau aufgerufen werden konnten<br>
[Bug]           [Report Manager] Bei der Erstellung eines Reports von mehr als einer Benutzerdefinierten Kategorie wird eine falsche Ausgabe angezeigt.
[Bug]           Letzter Stand der Objekte im Lebenszyklus zeigt immer "Defekt".<br>
[Bug]           Attribut "Hostadresse" aus Kategorie "Export Parameter" wird in der Listeneditierung nicht übernommen.<br>
[Bug]           Host-Ressource bleibt in der Übersicht leer<br>
[Bug]           array_merge(): Argument #1 is not an array in isys_component_template_language_manager.class.php<br>
[Bug]           Sprachdefinition aus de_custom.inc.php werden in Objekttypkonfiguration und Listeneditierung nicht übernommen<br>
[Bug]           Kategorie "SLA": Anfangsservicezeiten lassen sich nicht speichern<br>
[Bug]           Unendliches Scrollen in der Schrank-Kategorie ab einer bestimmten Schriftvergrößerung<br>
[Bug]           Listeneditierung der Kategorie "Hostadresse" löscht bestehende IPv4-Adressen<br>
[Bug]           Bei Verrechtung auf "Objekte unterhalb eines Standortes" werden die Rechte bei umfangreichen CSV-Imports nicht vollständig übernommen<br>
[Bug]           Selbst-definierter Objekttyp lässt sich nicht löschen<br>
[Bug]           JDisc: Import einer virtuellen Maschine nach Hostadresse führt keine Zuweisung zum physikalischen Host durch<br>
[Bug]           Darstellung des Betriebssystems in Report gibt alle Softwarezuweisungen aus<br>
[Bug]           Attribut "Zugehörige Ausgänge" kann nicht ausgewählt werden.<br>
[Bug]           Objektlisten-Filter filtert nicht über die komplette Objektliste.<br>
[Bug]           JDisc-Import erstellt neue CPUs, falls die Frequenz in der JDisc-Datenbank abweicht<br>
[Bug]           Darstellung der Menü-Leiste im CMDB-Explorer nicht korrekt, wenn Wiki-Links eingebunden werden<br>
[Bug]           Betriebskosten werden in der Eregebnisliste des Reports ohne Einheit ausgegeben.<br>
[Bug]           Servicezuweisung im Objekttyp "Anwendungen" mehrfach verfügbar<br>
[Bug]           Beziehungen eines Vertrags werdem trotz Auswahl der Kategorie "Beziehungen" nicht dupliziert<br>
[Bug]           Systemfehler beim Archivieren in Multi-Value-Kategorien, nachdem ein Objekt über "Editieren" geöffnet wird<br>
[Bug]           Javascript Fehlermeldung beim übernehmen von Objekten unter "Virtueller Host" > Verwaltungsinstanz<br>
[Bug]           JDisc-Import: "Firmware Version" wird nicht unter "Model" > "Firmware" importiert.<br>
[Bug]           Fehlermeldung bei der Validierung von Hostadressen<br>
[Bug]           Berechtigung "Objekte unterhalb Lokation" erlaubt nur den Zugriff auf ein Objekt pro Objekttyp unterhalb der Lokation<br>
[Bug]           Validierung signalisiert Fehler auch nach Korrektur<br>
[Bug]           Nach Hinzufügen neuer Objekte zu Objektgruppe fehlen Funktionen zum Bearbeiten<br>
[Bug]           Pflichtfelddefinition hat keine Auswirkungen wenn die Kategorie auf der Übersichtsseite verwendet wird<br>
[Bug]           Versand einer Benachrichtigung auf Basis einer Rolle erfolgt an alle Benutzer, die bei einem beliebigen Objekt über diese Rolle verfügen.
[Bug]           Beim nochmaligen Anmelden im Admin-Center verschwindet das Menü<br>
[Bug]           Rückwärtige Kategorie "Zugeordnete Objekte" von Verträgen ist nicht editierbar.<br>

[Amélioration] Utilisation de la langue de l'utilisateur lors des connexions via l'API<br>.
[Amélioration] Profil par défaut réglable dans CMDB Explorer<br>
[Amélioration] JDisc : Importation de systèmes invités sur un hôte virtuel<br>
[Amélioration] La présélection du type d'objet lors de la création de nouveaux objets à partir de templates doit être vide<br>.
[Bug] Une note continue d'être affichée lors de la saisie manuelle d'une IP avec un champ obligatoire défini<br>.
[Bug] Les rapports renvoient une erreur SQL alors qu'ils pouvaient être appelés dans l'aperçu<br>.
[Bug] [Report Manager] Une sortie incorrecte est affichée lors de la création d'un rapport de plus d'une catégorie définie par l'utilisateur.
[Bug] Le dernier état des objets dans le cycle de vie indique toujours "Défectueux".<br>
[Bug] L'attribut "Adresse de l'hôte" de la catégorie "Paramètres d'exportation" n'est pas repris dans l'édition de liste.<br>
[Bug] La ressource hôte reste vide dans l'aperçu<br>.
[Bug] array_merge() : L'argument #1 n'est pas un tableau dans isys_component_template_language_manager.class.php<br>
[Bug] La définition de la langue dans de_custom.inc.php n'est pas reprise dans la configuration du type d'objet et l'édition de liste<br>.
[Bug] Catégorie "SLA" : les heures de service initiales ne peuvent pas être enregistrées<br>.
[Bug] Défilement infini dans la catégorie armoire à partir d'un certain grossissement de police<br>.
[Bug] L'édition de liste de la catégorie "Adresse hôte" supprime les adresses IPv4 existantes<br>.
[Bug] Les droits sur les "objets en dessous d'un site" ne sont pas entièrement repris lors d'importations CSV volumineuses<br>.
[Bug] Impossible de supprimer un type d'objet auto-défini<br>.
[Bug] JDisc : L'importation d'une machine virtuelle par adresse d'hôte n'effectue pas l'assignation à l'hôte physique<br>.
[Bug] La représentation du système d'exploitation dans le rapport affiche toutes les affectations logicielles<br>.
[Bug] Impossible de sélectionner l'attribut "Sorties associées"<br>.
[Bug] Le filtre de la liste d'objets ne filtre pas sur la liste d'objets complète.<br>
[Bug] L'importation JDisc crée de nouvelles UC si la fréquence dans la base de données JDisc est différente<br>.
[Bug] Affichage incorrect de la barre de menu dans l'explorateur CMDB lorsque des liens wiki sont intégrés<br>.
[Bug] Les coûts d'exploitation sont affichés sans unité dans la liste des résultats du rapport <br>.
[Bug] Attribution de service disponible plusieurs fois dans le type d'objet "Applications"<br>.
[Bug] Les relations d'un contrat ne sont pas dupliquées malgré la sélection de la catégorie "Relations"<br>.
[Bug] Erreur système lors de l'archivage dans les catégories multi-valeurs après l'ouverture d'un objet via "Editer"<br>.
[Bug] Message d'erreur Javascript lors du transfert d'objets sous "Hôte virtuel" > Instance administrative<br>.
[Bug] Importation JDisc : "Firmware Version" n'est pas importé sous "Model" > "Firmware".<br>
[Bug] Message d'erreur lors de la validation des adresses d'hôtes<br>
[Bug] L'autorisation "Objets en dessous du lieu" ne permet d'accéder qu'à un seul objet par type d'objet en dessous du lieu<br>.
[Bug] La validation signale des erreurs même après correction<br>.
[Bug] Après l'ajout de nouveaux objets à un groupe d'objets, il manque des fonctions pour les éditer<br>.
[Bug] La définition d'un champ obligatoire n'a pas d'effet si la catégorie est utilisée sur la page d'aperçu<br>.
[Bug] Envoi d'une notification basée sur un rôle à tous les utilisateurs disposant de ce rôle pour un objet quelconque.
[Bug] Le menu disparaît lorsque l'on se reconnecte au centre d'administration<br>.
[Bug] La catégorie arrière "Objets affectés" des contrats n'est pas éditable.<br>