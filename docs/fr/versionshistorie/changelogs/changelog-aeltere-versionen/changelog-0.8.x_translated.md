<!-- TRANSLATED by md-translate -->
# Changelog 0.8.X

# Changelog 0.8.X

0.8.6<br>
Folgende Fehler sind behoben:<br>

0.8.6<br>
Les bugs suivants ont été corrigés :<br>

* Ermittlung des Installationsverzeichnisses<br>
* Im Element Switch fehlt das Feld Gateway<br>
* Kein Dynamischer Datenbankname<br>
* Hauptnavigation verschwindet und taucht nicht mehr auf<br>
* Im Element "Router" in den Wan Modulen fehlt das Feld "Gateway"<br>
* Fehlendes Feld "Beschreibungen" bei Element "Terminals"<br>
* Fehlende Felder bei Element "Appliances"<br>
* Netzwerkkonfiguration in Drucker-Detailansicht nicht verfügbar<br>
* Netzwerkbearbeitung unter Element "Server" ohne Möglichkeit direkt einen Switch zuzuordnen<br>
* Bearbeitung von Lizenzen nicht möglich<br>
* Fehlerhafte Sortierung der Objekte über "Weiter"-Buttons<br>
* Man kann Rechtegruppe 'Administrator' löschen und sich alle Rechte als Administrator entziehen<br>
* Fehler unter "Meine Dokumente"<br>
* Ansprechpartner nicht bearbeitbar<br>
* Löschen von Netzwerkdevices fehlerhaft<br>
* Kalender Pop-Up bei Wartungsverträgen zu groß<br>
* 'Weitere' Ansprechpartner Link funktioniert nicht<br>
* Kalenderanzeige bei Arbeitsaufträgen<br>
* Namensanzeige in Arbeitsaufträgen<br>
* Sortierung in der Listenansicht der IT-Elemente fehlerhaft<br>
* Fehler bei 'Neuer Arbeitsauftrag'<br>
* Nach Änderung der sysop-Passwortes erscheint das Menü nicht mehr<br>
* Datumsüberschreitung Arbeitsaufträge<br>
* Löschen von Arbeitsaufträgen<br>
* Einträge in der Kategorie "Arbeitsauftraege" sind nicht richtig verlinkt<br>
* Suche-Funktion durchsucht zu wenig Felder<br>
* main.php: Link zu IT-Elementen in "Letzte Updates"<br>
* menu.php: Suchfunktion meldet "Kein Suchbegriff eingegeben" bei fehlendem<br>

* Détermination du répertoire d'installation<br>.
* Le champ Gateway manque dans l'élément Switch<br>.
* Pas de nom de base de données dynamique<br>
* La navigation principale disparaît et n'apparaît plus<br>.
* Dans l'élément "Router" des modules Wan, le champ "Gateway"<br> manque.
* Champ "Descriptions" manquant dans l'élément "Terminaux" <br>.
* Champs manquants dans l'élément "Appliances" <br>.
* Configuration réseau non disponible dans la vue détaillée de l'imprimante<br>.
* Edition du réseau sous l'élément "Serveur" sans possibilité d'attribuer directement un switch<br>
* Edition des licences impossible<br>
* Tri erroné des éléments via les boutons "Suivant"<br>.
* Possibilité de supprimer le groupe de droits 'Administrateur' et de se retirer tous les droits d'administrateur<br>.
* Erreur sous "Mes documents"<br>.
* Interlocuteur non modifiable<br>
* Erreur de suppression des périphériques réseau<br>.
* Pop-Up du calendrier trop grand pour les contrats de maintenance<br>
* Le lien 'Autres' contacts ne fonctionne pas<br>.
* Affichage du calendrier pour les ordres de travail<br>
* Affichage du nom dans les ordres de travail<br>
* Erreur de tri dans la liste des éléments informatiques<br>.
* Erreur dans 'Nouvel ordre de travail'<br>
* Après modification du mot de passe sysop, le menu n'apparaît plus<br>.
* Dépassement de la date des ordres de travail<br>
* Suppression d'ordres de travail<br>
* Les entrées de la catégorie "ordres de travail" ne sont pas correctement reliées<br>.
* La fonction de recherche parcourt trop peu de champs<br>
* main.php : Lien vers les éléments IT dans "Dernières mises à jour"<br>
* menu.php : La fonction de recherche signale "Aucun terme de recherche saisi" en cas d'absence de<br>

Suchbegriff<br>

Terme de recherche<br>

* main.php: Es werden \n's in der RSS-Feed-Ausgabe angezeigt.<br>
* CMDB: Kalenderbild wird nicht angezeigt<br>
* Calender: Kalender zeigt unter Windows system-spezifische Warnungen<br>
* Installer: Der i-doit SQL Dump wird nicht komplett eingelesen, da Windows-<br>

* main.php : Des \n's sont affichés dans la sortie du flux RSS.<br>
* CMDB : l'image du calendrier ne s'affiche pas<br>.
* Calender : le calendrier affiche des avertissements spécifiques au système sous Windows<br>.
* Installateur : le dump SQL d'i-doit n'est pas lu en entier, car le système d'exploitation Windows<br>.

zeilenumbrüche das Einlesen der letzten Zeile verhindern<br>

les sauts de ligne empêchent la lecture de la dernière ligne<br>.

* INSTALL: Text verweist auf falsche Installations-URL<br>
* debug.inc: Debugausgabe wird in den DocumentRoot geschrieben, jetzt<br>

* INSTALL : le texte renvoie à une mauvaise URL d'installation<br>.
* debug.inc : la sortie de débogage est écrite dans le DocumentRoot, maintenant<br>

in /debugs (bitte dem Webserver hierauf Rechte geben).<br>

dans /debugs (veuillez donner les droits au serveur Web sur ce point).<br>

Allgemeine Änderungen:<br>

Modifications générales:<br>

* Config: Basismodulkonfiguration temporär entfernt<br>
* Config/CMDB: "Datentabellen leeren" gefixt. Passwort lässt sich in der<br>

* Config : Configuration du module de base temporairement supprimée<br>.
* Config/CMDB : "Vider les tables de données" corrigé. Le mot de passe peut être modifié dans la<br>

config.inc einstellen<br>

Configurer config.inc<br>

* SQL Rights module: SQL-Abfragen optimiert<br>
* Session Management optimiert<br>

* Module SQL Rights : Requêtes SQL optimisées<br>
* Gestion de session optimisée<br>

0.8.5<br>

0.8.5<br>

* Allgemein: Rechteverwaltung implementiert, Administration von Benutzer und<br>

* Généralités : gestion des droits implémentée, administration des utilisateurs et<br> des

Gruppen jetzt möglich. Darüber hinaus ein neues Datenbankmodell für das<br>
Rechtesystem (siehe alle mit 'ur_' beginnenden Tabellen in der Datenbank<br>
'doit') entwickelt.<br>

groupes est désormais possible. En outre, un nouveau modèle de base de données pour le<br> système de droits.
système de droits (voir toutes les tables commençant par 'ur_' dans la base de données<br>.
doit') a été développé.<br>

* Allgemein: Neue Lizenzverwaltung (unter IT-Elemente / Software /<br>

* Généralités : nouvelle gestion des licences (sous Eléments informatiques / Logiciels /<br>)

Anwendungen & Dienste zu finden)<br>

applications & services)<br>

* Allgemein: Neues Applikationsdesign<br>
* Allgemein: Refakturierung und Redesign des Application Frameworks<br>
* Allgemein: Module lassen sich jetzt im Banner und im Explorer einfügen<br>
* Allgemein: Navigationsleiste (navbar.inc)<br>
* CMDB: Navigationsleiste implementiert<br>
* CMDB: Die Auswahlpunkte der Detailansicht befinden sich jetzt auf der linken<br>

* Général : nouveau design d'application<br>.
* Général : Refacturation et refonte du framework d'application<br>.
* Général : les modules peuvent désormais être insérés dans la bannière et l'explorateur<br>.
* Général : barre de navigation (navbar.inc)<br>
* CMDB : barre de navigation implémentée<br>.
* CMDB : les éléments de sélection de la vue détaillée se trouvent maintenant sur la gauche<br>.

Seite<br>

Page<br>

* Rechteverwaltung: In die Module CMDB, Arbeitsaufträge, Checklisten und<br>

* Gestion des droits : dans les modules CMDB, ordres de travail, listes de contrôle et<br>.

Dateiverwaltung implementiert.<br>

Gestion des fichiers mise en œuvre.<br>

0.8.2<br>

0.8.2<br>

* Allgemein: Windows-Version ist jetzt als Stable verfügbar<br>
* Arbeitsaufträge: 'Zurueck'-Button funktionierte in Auftragsansicht nicht<br>
* Wartungsverträge: SQL-Aufruf gefixt<br>
* CMDB: Normale Benutzer konnten Datensätze löschen<br>
* Allgemein: Installationsanleitung (INSTALL) um einige wichtige Punkte<br>

* Général : la version Windows est maintenant disponible en tant que stable<br>.
* Ordres de travail : le bouton 'Retour' ne fonctionnait pas dans l'affichage des ordres<br>.
* Contrats de maintenance : Appel SQL corrigé<br>.
* CMDB : les utilisateurs normaux pouvaient supprimer des enregistrements<br>.
* Général : ajout de quelques points importants au guide d'installation (INSTALL)<br>.

erweitert.<br>

élargi.<br>

* CMDB: Statussymbol für Elemente entfernt (bis NMS vollständig vorhanden ist)<br>
* Allgemein: Einige optische Kleinigkeiten gefixt<br>

* CMDB : suppression de l'icône d'état des éléments (jusqu'à ce que le NMS soit complètement en place)<br>
* Général : quelques petites choses visuelles corrigées<br>.

0.8.1.1 - Windows Beta<br>

0.8.1.1 - Windows Bêta<br>

* Allgemein: i-doit ist jetzt Windows kompatibel (getestet auf WAMP)<br>
* CMDB: Link von Arbeitsauftragsmodul zu Auftragsansicht war fehlerhaft<br>
* Wartung: Wartungsvertragsverwaltung gefixt, da löschen der Einträge nicht<br>

* Général : i-doit est maintenant compatible avec Windows (testé sur WAMP)<br>
* CMDB : le lien entre le module des ordres de travail et la vue des ordres était incorrect<br>.
* Maintenance : gestion des contrats de maintenance corrigée car la suppression des entrées ne se faisait pas<br>.

funktionierte.<br>

fonctionnait.<br>

0.8.1.1<br>

0.8.1.1<br>

* Meine Dokumente: Einzelne Kategorien werden jetzt farblich voneinander<br>

* Mes documents : les différentes catégories sont désormais séparées par des couleurs<br>.

getrennt<br>

séparés<br>

* Wartung: Tool zum Verwalten mehrere Subverträge.<br>
* Wieder diverse Kleinigkeiten und Bugfixes, unter anderem bei Pfadangaben<br>
* CMDB: Bei Subdatensatzanzeige wird nun die aktuelle Nummer des anzuzeigenden<br>

* Maintenance : outil pour gérer plusieurs sous-contrats.<br>
* A nouveau, diverses petites choses et corrections de bugs, entre autres pour les indications de chemin<br>.
* CMDB : lors de l'affichage des sous-enregistrements, le numéro actuel de l'enregistrement à afficher<br> est désormais affiché.

Datensatzes angezeigt<br>

de l'ensemble de données<br>

* CMDB: Mozilla hat bei zu langen Texten in einer Zelle den Text in der<br>

* CMDB : Mozilla, lorsque le texte d'une cellule est trop long, a<br>

Detailansicht verschoben<br>

Détail déplacé<br>

* CMDB: Kontaktdetails Themeverzeichnis gefixt<br>
* Checklisten: Direkt nach der Erstellung konnte eine Checkliste weder<br>

* CMDB : détails des contacts du répertoire de thèmes corrigés<br>.
* Listes de contrôle : juste après sa création, une liste de contrôle ne pouvait être ni<br>

bearbeitet noch gelöscht werden<br>

être modifiés ou supprimés<br>

0.8.1<br>

0.8.1<br>

* Checklisten: Auswahlliste mit den Benutzern wurde noch per LDAP und nicht<br>

* Listes de contrôle : la liste de sélection avec les utilisateurs était encore transmise par LDAP et non<br> par le biais d'un serveur.

über die Wrapperfunktionen abgefragt, es kam zu einem Fatal Error (cm)<br>

consulté via les fonctions du wrapper, une erreur fatale (cm)<br> s'est produite

* Suchfunktion: Suchte nichts aufgrund falscher Verlinkungen - fixed (aw)<br>
* Dateiverwaltung: Theme wurde nicht richtig übersetzt, somit konnten einige<br>

* Fonction de recherche : ne cherchait rien à cause de liens incorrects - corrigé (aw)<br>.
* Gestion des fichiers : le thème n'était pas correctement traduit, donc certains<br>

Icons nicht mit angezeigt werden (aw)<br>

Les icônes ne sont pas affichées (aw)<br>.

* Dateiverwaltung: Benutzer haben nun nicht mehr das Recht, Dateien hochzu-<br>

* Gestion des fichiers : les utilisateurs n'ont désormais plus le droit de télécharger des fichiers<br>.

laden und zu löschen (aw)<br>

charger et supprimer (aw)<br>.

* Diverse Kleinigkeiten, sowie funktional als auch optisch (aw, cm)<br>
* Installation: Hat functions.inc.php genutzt, in der ein DB-Select ausge-<br>

* Diverses petites choses, aussi bien fonctionnelles qu'esthétiques (aw, cm)<br>.
* Installation : a utilisé functions.inc.php, dans lequel une sélection DB a été faite.

führt wurde, obwohl keine DB verfügbar ist<br>

bien qu'aucune base de données ne soit disponible<br>.

* Allgemein: functions.inc.php, verzeichnisspezifische Anweisungen entfernt<br>

* Général : functions.inc.php, instructions spécifiques aux répertoires supprimées<br>.

0.8<br>

0.8<br>

* Erstes offizielles Release, folgende Dinge wurden hier deaktiviert:<br>
* LDAP-Benutzerverwaltung<br>
* NMS (momentan nur SNMP und Nagios Log/Config Parser/Creation)<br>

* Première version officielle, les choses suivantes ont été désactivées ici :<br>
* Gestion des utilisateurs LDAP<br>.
* NMS (actuellement seulement SNMP et Nagios Log/Config Parser/Creation)<br>
