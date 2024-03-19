<!-- TRANSLATED by md-translate -->
# Optionen und Parameter der Console

# Options et paramètres de la console

!!! attention "Hinweise"

! !! attention "Indications"

```
Sämtliche Beispiele auf dieser Seite beziehen sich auf die Verwendung des i-doit Benutzers mit der Kombination Benutzername/Passwort: **admin**/**admin**.<br>
Alle Parameter sind case-sensitive, dies bedeutet, dass Groß- und Kleinschreibung gemäß den Beispielen und Vorgaben exakt einzuhalten sind.
```

## Folgende Handler stehen für die i-doit Console zur Verfügung

## Les gestionnaires suivants sont disponibles pour la console i-doit

| Command | Systeminterne Beschreibung (en) |
| --- | --- |
| [CompileDocuments](#compiledocuments) | Compile Documents |
| [addon-activate](#addon-activate) | Aktivieren von Add-ons |
| [addon-deactivate](#addon-deactivate) | Deaktivieren von Add-ons |
| [addon-install](#addon-install) | Installieren von Add-ons |
| [addon-list](#addon-list) | Zeigt eine Liste mit allen installierten Add-ons an |
| [admin-center-password-reset](#admin-center-password-reset) | Passwort für das Admin-Center zurücksetzen |
| [auth-cleanup](#auth-cleanup) | Rechtesystem bereinigen |
| [check_mk-export](#check_mk-export) | Konfigurationsdaten für Check_MK exportieren |
| [check_mk-livestatus](#check_mk-livestatus) | Ist-Zustand aus Check_MK ins Logbuch schreiben |
| [clear-credentials](#clear-credentials) | Entfernt die Anmeldeinformationen von Benutzern |
| [completion](#completion) | Das Shell-Vervollständigungsskript ausgeben |
| [contracts-outdated](#contracts-outdated) | Aktualisiert den Status ausgelaufener Verträge |
| [documents](#documents) | Dokumente und revisionen erzeugen und exportieren |
| [extend-contracts](#extend-contracts) | Verlängert die Laufzeit eines Vertrags, wenn dessen letztmögliches Kündigungsdatum in der Vergangenheit liegt |
| [help](#help) | Zeigt die Hilfe zu einem Befehl an |
| [import-csv](#import-csv) | Daten aus einer CSV-Datei importieren (Nutzt einen definiertes Import Profil aus der GUI) |
| [import-csvprofiles](#import-csvprofiles) | Auflisten aller CSV-Importprofile |
| [import-hinventory](#import-hinventory) | Daten aus h-inventory importieren |
| [import-jdisc](#import-jdisc) | Daten aus JDisc Discovery importieren (SQL Server Zugriff wird über die GUI konfiguriert) |
| [import-jdiscdiscovery](#import-jdiscdiscovery) | Einen Scan in JDisc Discovery starten (API Zugriff wird über die GUI konfiguriert) |
| [import-syslog](#import-syslog) | Daten aus einem Syslog in das Logbuch von i-doit importieren |
| [import-xml](#import-ocs) | Daten aus XML importieren |
| [install](#install) | Installiert i-doit |
| [ldap-sync](#ldap-sync) | Personen und Personengruppen aus einem [LDAP-Verzeichnis oder Active Directory (AD)](../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) importieren |
| [ldap-syncdn](#ldap-sync) | Synchronisiere aus einem LDAP/AD den Distinguished Name (DN) der Benutzer (siehe Kategorie LDAP) |
| [license-add](#license-add) | Fügt eine Lizenz für i-doit hinzu (in Bearbeitung) |
| [license-assign](#license-assign) | Ordnet eine Hosting Lizenz einem Mandaten zu (in Bearbeitung) |
| [license-import](#license-import) | Importiert Lizenzen vom i-doit Server (in Bearbeitung) |
| [license-key](#license-key) | Setzt einen Lizenzschlüssel für i-doit (in Bearbeitung) |
| [license-list](#license-list) | Listet alle Lizenzen mit allen Informationen auf (ID; Produkt; Typ; Startdatum; Enddatum; lizenzierte Objekte; lizenzierte Mandanten; Umgebung) |
| [license-remove](#license-remove) | Entfernt Lizenzen von i-doit |
| [list](#list) | Listet alle console Kommandos auf |
| [logbook-archive](#logbook-archive) | Logbuch-Einträge archivieren |
| [maintenance](#maintenance) | Sendet Benachrichtigungen zu geplanten Wartungen aus dem Wartungs Add-on |
| [migrate-uploaded-files](#migrate-uploaded-files) | Migriert hochgeladene Dateien von i-doit <v1.13 zu v.1.14> |
| [nagios-export](#nagios-export) | Nagios-Konfiguration exportieren |
| [nagios-ndoutils](#nagios-ndoutils) | Ist-Zustand aus Nagios ins Logbuch schreiben |
| [notifications-list](#notifications-list) | Listet alle [Benachrichtigungen](../../../auswertungen/benachrichtigungen.md) auf |
| [notifications-send](#notifications-send) | Benachrichtigungen per E-Mail versenden (Benachrichtigungen werden in der GUI konfiguriert) |
| [report-export](#report-export) | Einen Report als Datei exportieren |
| [search](#search) | In i-doit suchen |
| [search-index](#search-index) | Suchindex erstellen/erneuern |
| [strip-description-html](#strip-description-html) | Mit diesem Befehl können Sie html-Tags im Beschreibungsfeld aller Kategorien und Objekte entfernen |
| [sync-dynamic-groups](#sync-dynamic-groups) | Synchronisiert dynamische Gruppenmitglieder neu |
| [system-autoincrement](#system-autoincrement) | auto_increment von MariaDB-/MySQL-Tabellen auf einen positiven Integer-Wert setzen (Betrifft die Datenstruktur! Mit Vorsicht zu nutzen!) |
| [system-categorycleanup](#system-categorycleanup) | Bereinigt optional Kategorieeinträge, die sich im Status unfertig, archiviert oder gelöscht befinden |
| [system-checkforupdates](#system-checkforupdates) | Nach Aktualisierungen für i-doit suchen |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables) | Konvertiert alle Tabellen, welche nicht in INNODB sind zu INNODB (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables) | Konvertiert alle non-UTF8-Tabellen in UTF8-Tabellen (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| [system-location-fix](#system-location-fix) | Führt die Standortkorrektur aus der GUI auf der Konsole aus |
| [system-maintenancecontract](#system-maintenancecontract) | E-Mail für Wartungsverträge senden (Funktion veraltet. Bitte<br>[notifications-send](#notifications-send) nutzen) |
| [system-objectcleanup](#system-objectcleanup) | Objekte bereinigen (Objekte mit dem Status "unfertig", "archiviert" oder "gelöscht" werden endgültig entfernt) |
| [system-objectrelations](#system-objectrelations) | Objekt-Beziehungen neu aufbauen |
| [system-refresh-table-configuration](#system-refresh-table-configuration) |Erneuert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien) |
| [tenant-create](#tenant-create) | Einen neuen Mandanten hinzufügen |
| [tenant-disable](#tenant-disable) | Einen bestehenden Mandanten deaktivieren |
| [tenant-enable](#tenant-enable) | Einen bestehenden Mandanten aktivieren |
| [tenant-list](#tenant-list) | Alle verfügbaren Mandanten auflisten |
| [tenant-remove](#tenant-remove) | Einen bestehenden Mandanten entfernen |
| [uninstall](#uninstall) | Deinstalliert i-doit |
| [update](#update) | Update von i-doit installieren |
| [workflows-process](#workflows-process) | Verarbeitet alle Arbeitsabläufe, versendet E-Mails und erstellt neue Aufgaben aus Checklisten |

| Commande | Description(s) interne(s) du système |
| --- | --- |
| [CompileDocuments](#compiledocuments) | Compile Documents |
| [addon-activate](#addon-activate) | Activer les add-ons |
| [addon-deactivate](#addon-deactivate) | Désactiver les add-ons |
| [addon-install](#addon-install) | Installer des add-ons |
| [addon-list](#addon-list) | Affiche une liste de tous les add-ons installés |
| [admin-center-password-reset](#admin-center-password-reset) | Réinitialiser le mot de passe pour le centre d'administration |
| [auth-cleanup](#auth-cleanup) | Nettoyer le système de droits |
| [check_mk-export](#check_mk-export) | Exporter les données de configuration pour Check_MK |
| [check_mk-livestatus](#check_mk-livestatus) | Écrire l'état réel de Check_MK dans le journal |
| [clear-credentials](#clear-credentials) | Supprime les informations d'identification des utilisateurs |
| [completion](#completion) | Imprimer le script de complétion du shell |
| [contracts-outdated](#contracts-outdated) | Met à jour le statut des contrats expirés |
| [documents](#documents) | Créer et exporter des documents et des révisions |
| [extend-contracts](#extend-contracts) | Prolonge la durée d'un contrat si sa dernière date de résiliation possible se situe dans le passé |
| [help](#help) | Affiche l'aide d'une commande |
| [import-csv](#import-csv) | Importer des données depuis un fichier CSV (Utilise un profil d'importation défini dans l'interface utilisateur graphique) |
| [import-csvprofiles](#import-csvprofiles) | Lister tous les profils d'importation CSV |
| [import-hinventory](#import-hinventory) | Importer des données depuis h-inventory |
| [import-jdisc](#import-jdisc) | Importer des données depuis JDisc Discovery (l'accès au serveur SQL est configuré via l'interface graphique) |
| [import-jdiscdiscovery](#import-jdiscdiscovery) | Lancer un scan dans JDisc Discovery (l'accès API est configuré via l'interface graphique) |
| [import-syslog](#import-syslog) | Importer des données d'un syslog dans le journal de bord d'i-doit |
| [import-xml](#import-ocs) | Importer des données depuis XML |
| [install](#install) | Installe i-doit |
| [ldap-sync](#ldap-sync) | Importer des personnes et des groupes de personnes depuis un [répertoire LDAP ou Active Directory (AD)](../../../authentification et gestion des utilisateurs/répertoireldap/index.md) |
| [ldap-syncdn](#ldap-sync) | Synchroniser depuis un LDAP/AD le Distinguished Name (DN) des utilisateurs (voir catégorie LDAP) |
| [license-add](#license-add) | Ajoute une licence pour i-doit (en cours) |
| [license-assign](#license-assign) | Associe une licence d'hébergement à un mandant (en cours) |
| [license-import](#license-import) | Importe les licences du serveur i-doit (en cours) |
| [license-key](#license-key) | Définit une clé de licence pour i-doit (en cours) |
| [license-list](#license-list) | Liste toutes les licences avec toutes les informations (ID ; produit ; type ; date de début ; date de fin ; objets sous licence ; clients sous licence ; environnement) |
| [license-remove](#license-remove) | Supprime les licences d'i-doit |
| [list](#list) | Liste toutes les commandes console |
| [logbook-archive](#logbook-archive) | Archiver les entrées du journal |
| [maintenance](#maintenance) | Envoie des notifications de maintenance planifiée depuis l'add-on de maintenance |
| [migrate-uploaded-files](#migrate-uploaded-files) | Migre les fichiers téléchargés de i-doit <v1.13 vers v.1.14> |
| [nagios-export](#nagios-export) | Exporter la configuration de nagios |
| [nagios-ndoutils](#nagios-ndoutils) | écrire l'état réel de Nagios dans le journal |
| [notifications-list](#notifications-list) | Liste toutes les [notifications](../../../évaluations/notifications.md) |
| [notifications-send](#notifications-send) | Envoyer les notifications par email (les notifications sont configurées dans l'interface graphique) |
| [report-export](#report-export) | Exporter un rapport sous forme de fichier |
| [search](#search) | Rechercher dans i-doit |
| [search-index](#search-index) | créer/renouveler l'index de recherche |
| [strip-description-html](#strip-description-html) | Cette commande permet de supprimer les balises html dans le champ de description de toutes les catégories et objets |
| [sync-dynamic-groups](#sync-dynamic-groups) | Resynchronise les membres des groupes dynamiques |
| [system-autoincrement](#system-autoincrement) | mettre l'auto_increment des tables MariaDB/MySQL à une valeur entière positive (Concerne la structure des données ! A utiliser avec précaution !) |
| [system-categorycleanup](#system-categorycleanup) | Nettoie facultativement les entrées de catégorie qui sont dans le statut inachevé, archivé ou supprimé |
| [system-checkforupdates](#system-checkforupdates) | Rechercher des mises à jour pour i-doit |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables) | Convertit toutes les tables qui ne sont pas en INNODB en INNODB (Concerne l'encodage de la base de données. A utiliser avec précaution !) |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables) | Convertit toutes les tables non-UTF8 en tables UTF8 (Concerne l'encodage de la base de données. A utiliser avec précaution !) |
| [system-location-fix](#system-location-fix) | Effectue la correction de l'emplacement depuis l'interface graphique sur la console |
| [system-maintenancecontract](#system-maintenancecontract) | Envoyer un e-mail pour les contrats de maintenance (fonction obsolète. Veuillez utiliser<br>[notifications-send](#notifications-send)) |
| [system-objectcleanup](#system-objectcleanup) | Nettoyer les objets (les objets avec le statut "inachevé", "archivé" ou "supprimé" sont définitivement supprimés) |
| [system-objecttrelations](#system-objecttrelations) | Reconstruire les relations entre les objets |
| [system-refresh-table-configuration](#system-refresh-table-configuration) |Remplacer toutes les configurations de listes disponibles (types d'objets et catégories) |
| [tenant-create](#tenant-create) | Ajouter un nouveau client |
| [tenant-disable](#tenant-disable) | Désactiver un client existant |
| [tenant-enable](#tenant-enable) | Activer un client existant |
| [tenant-list](#tenant-list) | Lister tous les mandants disponibles |
| [tenant-remove](#tenant-remove) | Supprimer un client existant |
| [uninstall](#uninstall) | Désinstaller i-doit |
| [update](#update) | Installer la mise à jour d'i-doit |
| [workflows-process](#workflows-process) | Traite tous les flux de travail, envoie des e-mails et crée de nouvelles tâches à partir de listes de contrôle |

!!! attention "Konfigurationsdatei und Parameter --config"

! !! attention "Fichier de configuration et paramètres --config

```
Es ist möglich dem Aufruf zusätzliche Inhalte über eine Konfigurationsdatei zu übergeben. Diese Datei muss im i-doit Verzeichnis src/handler/config/ abgelegt werden. Ein Beispiel in Form der Datei "isys_handler_ldap.ini" ist im Verzeichnis src/handler/config/examples/ zu finden.<br>
Wenn diese Datei beim Vorgang berücksichtigt werden soll, muss sie über den Parameter --config bzw. -c eingebunden werden.
```

### CompileDocuments

### CompileDocuments

Aktualisiert Dokumente

Actualise les documents

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --documentId=DOCUMENTID | Mehrere Dokument-IDs (mehrere Werte zulässig) |
| -u | --user=USERNAME | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -t | --tenant=TENANT-ID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -t | --documentId=DOCUMENTID | Plusieurs ID de document (plusieurs valeurs autorisées) |
| -u | --user=USERNAME | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=PASSWORD | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -t | --tenant=TENANT-ID | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php CompileDocuments --user admin --password admin --tenant 1 --documentId 123 --documentId 321
```

### addon-activate

### addon-activate

Aktiviert installierte Add-ons für den gewünschten Mandanten

Active les add-ons installés pour le mandant souhaité

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -a | --addon=[ADDON] | Identification du module complémentaire (plusieurs valeurs autorisées) |
| -t | --tenant=[TENANT-ID] | ID du client (plusieurs valeurs autorisées) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-activate --user admin --password admin --tenant 1 --addon api
```

### addon-deactivate

### addon-deactivate

Deaktiviert installierte Add-ons für den gewünschten Mandanten

Désactive les add-ons installés pour le mandant souhaité

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -a | --addon=[ADDON] | Identification du module complémentaire (plusieurs valeurs autorisées) |
| -t | --tenant=[TENANT-ID] | ID du client (plusieurs valeurs autorisées) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api
```

### addon-install

### addon-install

Installiert Add-ons für den gewünschten Mandanten

Installe des add-ons pour le mandant souhaité

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -z | --zip=[ZIP] | Pfad zur Add-on ZIP-Datei |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -z | --zip=[ZIP] | chemin vers le fichier ZIP du module complémentaire |
| -a | --addon=[ADDON] | Identification de l'add-on (plusieurs valeurs autorisées) |
| -t | --tenant=[TENANT-ID] | ID du client (plusieurs valeurs autorisées) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-install --user admin --password admin --tenant 1 --addon api --zip /path/to/the/zip/file.zip
```

### addon-list

### addon-list

Zeigt eine Liste mit allen installierten Add-ons zum ausgewählten Mandanten an

Affiche une liste de tous les add-ons installés pour le mandant sélectionné

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -a | --addon=[ADDON] | Identification du module complémentaire (plusieurs valeurs autorisées) |
| -t | --tenant=[TENANT-ID] | ID du client (plusieurs valeurs autorisées) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-list --tenant 1
```

### admin-center-password-reset

### admin-center-password-reset

Passwort für das Admin-Center zurücksetzen

Réinitialiser le mot de passe pour le centre d'administration

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php admin-center-password-reset --user admin --password admin
```

### auth-cleanup

### auth-cleanup

Leert den Cache des Rechtesystems, damit die derzeit konfigurierten Rechte aktuell sind bzw. aktualisiert werden.

Vide le cache du système de droits afin que les droits actuellement configurés soient actuels ou mis à jour.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1
```

### check_mk-export

### check_mk-export

Führt einen Check_MK Export durch

Effectue une exportation Check_MK

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -l | --exportLanguage=EXPORTLANGUAGE | Festlegung der für den Export verwendeten Sprache (Standard = 0) |
| -x | --exportStructure=EXPORTSTRUCTURE | Festlegung der für den Export verwendeten Struktur (Standard = 0) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -l | --exportLanguage=EXPORTLANGUAGE | Définition de la langue utilisée pour l'exportation (par défaut = 0) |
| -x | --exportStructure=EXPORTSTRUCTURE | Définition de la structure utilisée pour l'exportation (par défaut = 0) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php check_mk-export --user admin --password admin --tenantId 1
```

### check_mk-livestatus

### check_mk-livestatus

Importiert die Änderungen am Monitoring-Status aus Livestatus nach i-doit

Importe les modifications du statut de monitoring de Livestatus vers i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php check_mk-livestatus --user admin --password admin --tenantId 1
```

### clear-credentials

### clear-credentials

Entfernt die Einträge der Attribute `username` und `password` von Benutzerlogins

Supprime les entrées des attributs `username` et `password` des logins d'utilisateurs

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --object=[OBJECT] | Objekt-ID des zu deaktivierenden Benutzers |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --object=[OBJECT] | ID d'objet de l'utilisateur à désactiver |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -h | --help | Message d'aide pour afficher des informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php clear-credentials --user admin --password admin --object ObjectID
```

### completion

### completion

Der Befehl completion gibt das Shell-Vervollständigungsskript aus, das für die Verwendung der automatischen Shell-Vervollständigung erforderlich ist (derzeit wird nur die Bash-Vervollständigung unterstützt).

La commande completion affiche le script de complétion shell nécessaire à l'utilisation de la complétion automatique shell (actuellement, seule la complétion bash est prise en charge).

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --debug | Das Debug-Protokoll der Fertigstellung verfolgen |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --debug | Suivre le journal de débogage de l'achèvement |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -h | --help | Message d'aide pour afficher des informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php completion
```

### contracts-outdated

### contrats-outdated

Aktualisiert den Status veralteter Verträge

Actualise le statut des contrats obsolètes

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=TENANTID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=USER | nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=PASSWORD | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=TENANTID | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php contracts-outdated --user admin --password admin
```

### documents

### documents

Ermöglicht die Erstellung von Revisionen oder den Export eines oder mehrerer Dokumente

Permet de créer des révisions ou d'exporter un ou plusieurs documents

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --create_revision | Erzeugt eine oder mehrere Revisionen für bestimmte Dokumente |
|     | --export | Exportiert ein oder mehrere Dokumente in eine Datei |
|     | --id=ID | Ein oder mehrere Dokumente nach ID auswählen (mehrere Werte zulässig) |
|     | --all_documents | Selektiert alle Dokumente |
|     | --all_category=ALL_CATEGORY | Wählt alle Dokumente in der Kategorie aus |
|     | --all_template=ALL_TEMPLATE | Selektiert alle Dokumente mit Vorlage |
|     | --all_object=ALL_OBJECT | Selektiert alle Dokumente mit Objekt |
|     | --export_format=EXPORT_FORMAT | Exportformat: PDF oder HTML |
|     | --export_folder=EXPORT_FOLDER | Wohin soll das Dokument exportiert werden? Der Ordner muss existieren und beschreibbar sein |
| -u | --user=USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=TENANTID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -c | --config=CONFIG | Konfigurationsdatei |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v|vv|vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --create_revision | Crée une ou plusieurs révisions pour certains documents |
| | --exportation | Exporte un ou plusieurs documents dans un fichier |
| | --id=ID | Sélectionner un ou plusieurs documents par ID (plusieurs valeurs autorisées) |
| | --all_documents | Sélectionne tous les documents |
| | --all_category=ALL_CATEGORY | Sélectionne tous les documents dans la catégorie |
| | --all_template=ALL_TEMPLATE | Sélectionne tous les documents avec modèle |
| | --all_object=ALL_OBJECT | Sélectionne tous les documents avec objet |
| | --export_format=EXPORT_FORMAT | Format d'exportation : PDF ou HTML |
| | --export_folder=EXPORT_FOLDER | Où le document doit-il être exporté ? Le dossier doit exister et être accessible en écriture |
| -u | --user=USER | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=PASSWORD | Mot de passe pour authentifier l'utilisateur indiqué précédemment |
| -i | --tenantId=TENANTID | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -c | --config=CONFIG | fichier de configuration |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v|vv|vv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php documents --user admin --password admin --create_revision
```

### extend-contracts

### extend-contracts

Verlängert die Laufzeit eines Vertrags, dessen letztmögliches Kündigungsdatum in der Vergangenheit liegt

Prolonge la durée d'un contrat dont la dernière date de résiliation possible se situe dans le passé.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --simulate | Simuliert die Vertragserweiterung |
| -u | --user=USER |  Username |
| -p | --password=PASSWORD | Passwort |
| -i | --tenantID=TENANTID | Tenant ID [default: 1] |
| -h | --help | Zeigt Hilfe für den Befehl an |
| -c | --config=CONFIG | Konfigurationsdatei |
| -q | --quit | Es wird keine Nachricht angezeigt |
| -v | --version | Zeigt die Version der Anwendung an |
|        | --ansi / --no-ansi | Erzwingt ANSI Ausgabe / Deaktiviert ANSI Ausgabe |
| -v / -vv / -vvv | --verbose | Erhöht die Ausführlichkeit der Nachricht [default: 1] |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --simulate | Simule l'extension du contrat |
| -u | --user=USER | nom d'utilisateur |
| -p | --password=PASSWORD | mot de passe |
| -i | --tenantID=TENANTID | Tenant ID [par défaut : 1] |
| -h | --help | Affiche l'aide pour la commande |
| -c | --config=CONFIG | fichier de configuration |
| -q | --quit | Aucun message n'est affiché |
| -v | --version | Affiche la version de l'application |
| | --ansi / --no-ansi | Force la sortie ANSI / Désactive la sortie ANSI |
| -v / -vv / -vvv | --verbose | Augmente le niveau de détail du message [par défaut : 1] |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php extend-contracts --user admin --password admin
```

### help

### help

Zeigt in Verbindung mit einem anderen Befehl dessen Nutzung, Argumente und Optionen an

En association avec une autre commande, affiche son utilisation, ses arguments et ses options

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --format=[FORMAT] | Format der Ausgabe festlegen (txt, xml, json or md) [Default: txt] |
|     | --raw | Ausgabe der Befehls-Hilfe |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --format=[FORMAT] | Définir le format de sortie (txt, xml, json ou md) [Par défaut : txt] |
| | --raw | sortie de l'aide de la commande |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php help --format=txt <command>
```

### import-csv

### import-csv

Führt den Import einer CSV-Datei mit den gewünschten Importparametern durch

Effectue l'importation d'un fichier CSV avec les paramètres d'importation souhaités

**Optionen**

**Options**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Gibt die Datei und deren Pfad an, die für den Import verwendet werden soll |
|     | --importProfileId=IMPORTPROFILEID | Legt fest, mit welchem Profil der Import ausgeführt werden soll |
|     | --csvSeparator=CSVSEPARATOR | Definiert die Trennzeichen für den Import |
|     | --multiValueMode=MULTIVALUEMODE | Legt den Modus für Multi-Value-Kategorien fest (Mögliche Werte: "row", "column" oder "comma") |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --importFile=IMPORTFILE | Indique le fichier et son chemin à utiliser pour l'importation |
| | --importProfileId=IMPORTPROFILEID | Indique le profil avec lequel l'importation doit être effectuée |
| | --csvSeparator=CSVSEPARATOR | Définit les séparateurs pour l'importation |
| | --multiValueMode=MULTIVALUEMODE | Définit le mode pour les catégories multi-valeurs (valeurs possibles : "row", "column" ou "comma") |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-csv --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId 1 --csvSeparator ";" --multiValueMode column
```

### import-csvprofiles

### import-csvprofiles

Gibt eine Auflistung der Import-Profile für den CSV-Import zurück

Renvoie une liste des profils d'importation pour l'importation CSV

**Optionen**

**Options**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-csvprofiles --user admin --password admin --tenantId 1
```

### import-hinventory

### import-hinventory

Führt einen h-inventory Import einer kompatiblen XML-Datei durch

Effectue une importation h-inventory d'un fichier XML compatible

**Optionen**

**Options**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Gibt die Datei und deren Pfad an, die für den Import verwendet werden soll |
|     | --usage | Weitere detaillierte Informationen zur Verwendung des Commands |
|     | --objectType=OBJECTTYPE | Importiert den angegebenen Objekttypen |
|     | --objectId=OBJECTID | Importiert ausschließlich das angegebene Objekt |
| -f | --force | Erzwingt das Aktualisieren bestehender Objekte aber überschreibt die importierten Kategorien |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --importFile=IMPORTFILE | Indique le fichier et son chemin à utiliser pour l'importation |
| | --usage | Plus d'informations détaillées sur l'utilisation de la commande |
| | --objectType=OBJECTTYPE | Importe le type d'objet spécifié |
| | --objectId=OBJECTID | Importe uniquement l'objet spécifié |
| -f | --force | Force la mise à jour des objets existants mais écrase les catégories importées |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-hinventory --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-h-inventory-import.xml
```

### import-jdisc

### import-jdisc

Führt einen JDisc-Import nach i-doit durch.

Effectue une importation JDisc vers i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -r | --profile=PROFILE | Angabe/Auswahl des JDisc-Profils, das für den Import verwendet werden soll |
| -g | --group=GROUP | Angabe/Auswahl der Gruppen ID, die für den Import verwendet werden soll |
| -x | --mode=MODE | Auswahl des Import-Modus. Folgende IDs stehen zur Verfügung:<br>**1**: "Erstellen": Der Import-Modus "Erstellen" wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren.<br>**2**: "Aktualisieren": Der Import-Modus "Aktualisieren" wird nur Objekte erstellen, die in i-doit nicht gefunden werden konnten. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt.<br>**3**: "Überschreiben": Der Import-Modus "Überschreiben" verhält sich genauso wie der Modus "Aktualisieren" mit dem Unterschied, das Listen-Kategorien erst geleert und dann neu angelegt werden.<br>**4**: "Aktualisieren (Neu inventarisiert)": Mit dem Zusatz "(Neu inventarisiert)" werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.<br>**5**: "Überschreiben (Neu inventarisiert)":  Mit dem Zusatz "(Neu inventarisiert)" werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.<br>**6**: Der Import-Modus "Erstelle nur neu gescannte Geräte" erstellt nur neu gescannte Objekte, existierende werden übersprungen.<br>**7**: Der Import-Modus "Aktualisieren (Nur existierende Objekte) erstellt nur bereits existierende Objekte. Es werden keine neuen Objekte erstellt. |
| -s | --server=SERVER | Angabe der Server-ID um diesen auszuwählen |
| -o | --overwriteHost | Festlegen, ob sich überschneidende Hostadressen überschrieben werden sollen |
| -l | -detailedLogging[=DETAILEDLOGGING] | Erhöht die Protokollierungsstufe:<br>**1**: auf niedriger Log-Ebene werden nur Hinweise und Warnungen protokolliert<br>**2**: zusätzlich zur niedrigen Log-Ebene werden Fehler protokolliert<br>**3**: zusätzlich zur normalen Log-Ebene werden Debug-Meldungen protokolliert (speicherintensiv) |
| -b | --regenerateSearchIndex | Führt automatisch die Erneuerung des Suchindex aus |
|    | --listProfiles | Erzeugt eine Liste der verfügbaren Profile |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -r | --profile=PROFILE | Spécification/sélection du profil JDisc à utiliser pour l'importation |
| -g | --group=GROUP | Spécification/sélection de l'ID de groupe à utiliser pour l'importation |
| -x | --mode=MODE | Sélection du mode d'importation. Les ID suivants sont disponibles:<br>**1** : "Créer" : Le mode d'importation "Créer" créera tous les objets trouvés sans vérifier s'ils existent déjà.<br>**2** : "Actualiser" : Le mode d'importation "Actualiser" ne créera que les objets qui n'ont pas été trouvés dans i-doit. Les catégories d'objets existants sont complétées (si nécessaire) par de nouvelles données.<br>**3** : "Ecraser" : Le mode d'importation "Ecraser" se comporte de la même manière que le mode "Actualiser", à la différence que les catégories de la liste sont d'abord vidées puis recréées.<br>**4** : "Actualiser (Nouvel inventaire)" : Avec l'ajout "(Réinventé)", les liens fixes idoit-vers-jdisc-device sont annulés et les appartenances d'objets recalculées.<br>**5** : "Écraser (Réinventé)" :  (Réinventé)" permet d'annuler les liens fixes idoit-vers-jdisc-device et de recalculer les appartenances d'objets.<br>**6** : Le mode d'importation "Créer uniquement les appareils nouvellement scannés" ne crée que les objets nouvellement scannés, les objets existants sont ignorés.<br>**7** : Le mode d'importation "Actualiser (objets existants uniquement)" ne crée que des objets existants. Aucun nouvel objet n'est créé. |
| -s | --server=SERVER | Spécification de l'ID du serveur pour le sélectionner |
| -o | --overwriteHost | Définir si les adresses d'hôtes qui se chevauchent doivent être écrasées |
| -l | -detailedLogging[=DETAILEDLOGGING] | Augmente le niveau de journalisation :<br>**1** : au niveau de journalisation bas, seules les notes et les avertissements sont journalisés<br>**2** : en plus du niveau de journalisation bas, les erreurs sont journalisées<br>**3** : en plus du niveau de journalisation normal, les messages de débogage sont journalisés (gourmand en mémoire) |
| -b | --regenerateSearchIndex | Exécute automatiquement le renouvellement de l'index de recherche |
| | --listProfiles | Génère une liste des profils disponibles |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à s'exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-jdisc --user admin --password admin --tenantId 1 --profile 3 --mode 4 --server 2 --detailedLogging 3 --regenerateSearchIndex
```

### import-jdiscdiscovery

### import-jdiscdiscovery

Löst einen JDisc Discovery Job aus.

Déclenche une tâche de découverte JDisc.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -s | --server=SERVER | Auswahl des JDisc-Servers |
| -j | --discoveryJob=DISCOVERYJOB | Auswahl des Discovery Jobs (Standard: "Discover all") |
| -d | --deviceHostname=DEVICEHOSTNAME | Auswahl des Geräts anhand des Hostnames |
| -a | --deviceHostAddress=DEVICEHOSTADDRESS | Auswahl des Geräts anhand der Hostadresse |
| -l | --showLog | Zeigt das Log während des Discoveries an |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -s | --server=SERVER | Sélection du serveur JDisc |
| -j | --discoveryJob=DISCOVERYJOB | Sélection de la tâche de découverte (par défaut : "Discover all") |
| -d | --deviceHostname=DEVICEHOSTNAME | Sélection du périphérique par son nom d'hôte |
| -a | --deviceHostAddress=DEVICEHOSTADDRESS | Sélection du périphérique par l'adresse de l'hôte |
| -l | --showLog | Affiche le journal pendant la découverte |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-jdiscdiscovery --user admin --password admin --tenantId 1 --server 2
```

### import-syslog

### import-syslog

Importiert Inhalte aus einer Syslog Server Textdatei in das i-doit Logbuch.

Importe le contenu d'un fichier texte du serveur Syslog dans le journal i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-syslog --user admin --password admin --tenantId 1
```

### import-xml

### import-xml

Führt einen Import einer XML-Datei nach i-doit durch.

Effectue l'importation d'un fichier XML dans i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Angabe der Import-Datei sowie deren Pfad |
|     | --usage | Detaillierte Informationen zur Verwendung des Commands |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --importFile=IMPORTFILE | Indication du fichier d'importation ainsi que de son chemin |
| | --usage | Informations détaillées sur l'utilisation de la commande |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-xml --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-xml-import.xml
```

### install

### install

Installieren Sie die i-doit Anwendung

Installer l'application i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --root-user=ROOT-USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --root-password[=ROOT-PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
|  | --host=HOST | Benutzername des privilegierten DB-Benutzers [Standard: "root"] |
|  | --port=PORT | Port für DB-Verbindung [standardmäßig: 3306] |
| -d | --database=DATABASE | i-doit System Datenbankname [Standard: "idoit_system_temp"] |
| -U | --user=USER | Benutzername der i-doit-System-DB [Standard: "idoit"] |
| -P | --password[=PASSWORD] | Passwort für i-doit system DB |
|  | --admin-password[=ADMIN-PASSWORD] | Passwort für i-doit admin center |
| -l | --license-server=LICENSE-SERVER | Pfad für den i-doit Lizenzserver [Standard: "https://lizenzen.i-doit.com"] |
| -k | --key[=KEY] | Lizenzschlüssel für i-doit |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --root-user=ROOT-USER | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --root-password[=ROOT-PASSWORD] | mot de passe pour authentifier l'utilisateur spécifié précédemment |
| | --host=HOST | nom d'utilisateur de l'utilisateur privilégié de la BD [par défaut : "root"] |
| | --port=PORT | Port pour la connexion à la BD [par défaut : 3306] |
| -d | --database=DATABASE | nom de la base de données du système i-doit [par défaut : "idoit_system_temp"] |
| -U | --user=USER | nom d'utilisateur de la base de données du système i-doit [par défaut : "idoit"] |
| -P | --password[=PASSWORD] | mot de passe pour la BD i-doit system |
| | --admin-password[=ADMIN-PASSWORD] | mot de passe pour i-doit admin center |
| -l | --license-server=LICENSE-SERVER | Chemin pour le serveur de licences i-doit [par défaut : "https://lizenzen.i-doit.com"] |
| -k | --key[=KEY] | Clé de licence pour i-doit |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php install
```

### ldap-sync

### ldap-sync

Synchronisiert Benutzer aus dem LDAP nach i-doit und legt diese als Personenobjekte an.

Synchronise les utilisateurs du LDAP vers i-doit et les crée en tant qu'objets de personne.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -l | --ldapServerId=LDAPSERVERID | Gibt die ID des LDAP-Servers an, von dem die User synchronisiert werden sollen   <br>Wird keine ldapServerId angegeben werden alle Aktiven Server synchronisiert |
|     | --dumpConfig | Gibt die derzeitige Konfiguration aus der Konfigurationsdatei aus |
|     | --connectionRankingActive[=CONNECTIONRANKINGACTIVE] | Option, die alle Verbindungen von allen reaktivierten Benutzern reaktiviert.  <br>Standardkonfiguration ist die Experteneinstellung 'ldap.connection-ranking-active' (Tenant-wide) mit dem Wert '1'. |
|     | --dropExistingRelations[=DROPEXISTINGRELATIONS] | Wenn eine bestehende ldap-Gruppe Gruppenmitglied-Benutzer hat, die nicht zu diesen synchronisierten Benutzern gehören,  <br>werden diese gelöscht.  <br>1 = bestehende Beziehungen löschen, 0 = bestehende Beziehungen ignorieren [Standard: 0]. |
|     | --archiveDeletedGroups | Wenn eine gelöschte ldap-Gruppe in i-doit verbleibt, dann archiviere oder lösche sie.  <br>Standard = false  <br>Mögliche Werte sind archive oder delete |
|     | --useDefaultTemplates | Verwende das standard Template wenn ein Objekt über dieses Kommando erstellt wird (v1.18) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -l | --ldapServerId=LDAPSERVERID | Indique l'ID du serveur LDAP à partir duquel les utilisateurs doivent être synchronisés <br>Si aucun ldapServerId n'est indiqué, tous les serveurs actifs seront synchronisés |
| | --dumpConfig | Donne la configuration actuelle à partir du fichier de configuration |
| | --connectionRankingActive[=CONNECTIONRANKINGACTIVE] | Option qui réactive toutes les connexions de tous les utilisateurs réactivés.  <br>La configuration par défaut est le paramètre expert 'ldap.connection-ranking-active' (Tenant-wide) avec la valeur '1'. |
| | --dropExistingRelations[=DROPEXISTINGRELATIONS] | Si un groupe ldap existant a des utilisateurs membres du groupe qui n'appartiennent pas à ces utilisateurs synchronisés, <br>ils seront supprimés.  <br>1 = supprimer les relations existantes, 0 = ignorer les relations existantes [par défaut : 0]. |
| | --archiveDeletedGroups | Si un groupe ldap supprimé reste dans i-doit, l'archiver ou le supprimer.  <br>Standard = false <br>Les valeurs possibles sont archive ou delete |
| | --useDefaultTemplates | Utiliser le modèle par défaut quand un objet est créé avec cette commande (v1.18) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```

### ldap-syncdn

### ldap-syncdn

Synchronisiert LDAP DNs mit den i-doit Usern.

Synchronise les DN LDAP avec les utilisateurs i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --ldapServerId=LDAPSERVERID | Angabe des LDAP-Servers über die ID |
| -o | --objectType=OBJECTTYPE | Angabe des Objekttyps als Konstante (z.B. C__OBJTYPE__SERVER) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --ldapServerId=LDAPSERVERID | Indication du serveur LDAP via l'ID |
| -o | --objectType=OBJECTTYPE | Indication du type d'objet sous forme de constante (par ex. C__OBJTYPE__SERVER) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1
```

### list

### liste

Listet alle Befehle auf. Format der Ausgabe kann geändert werden.

Répertorie toutes les commandes. Le format de la sortie peut être modifié.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --format=[FORMAT] | Format der Ausgabe festlegen (txt, xml, json or md) [Default: txt] |
|     | --raw | Ausgabe der Befehls-Hilfe |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --format=[FORMAT] | Définir le format de sortie (txt, xml, json ou md) [Par défaut : txt] |
| --raw | sortie de l'aide de la commande |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php list --format=txt
```

**license-add**

**license-add**

Fügt eine Lizenz für i-doit hinzu

Ajoute une licence pour i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license=[LICENSE] | Pfadangabe zur Lizenzdatei (/path/to/license/file.key) |
| -t | --tenant=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -l | --license=[LICENSE] | Chemin d'accès au fichier de licence (/path/to/license/file.key) |
| -t | --tenant=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-add --user admin --password admin --tenantId 1 --license /path/to/license/file.key
```

### license-assign

### license-assign

Ordnet eine Hosting Lizenz einem Mandaten zu

Affecte une licence d'hébergement à un mandant

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --count=[COUNT] | Anzahl zu lizenzierender Objekte [Default: 0] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --count=[COUNT] | nombre d'objets à licencier [par défaut : 0] |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000
```

### license-import

### license-import

Importiert Lizenzen vom i-doit Lizenz-Server

Importe les licences du serveur de licences i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license-server=[LICENSE-SERVER] | Pfad zum i-doit Lizenz-Server [Default: "https://lizenzen.i-doit.com"] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -l | --license-server=[LICENSE-SERVER] | Chemin d'accès au serveur de licences i-doit [Par défaut : "https://lizenzen.i-doit.com"] |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-import --user admin --password admin --license-server https://lizenzen.i-doit.com
```

### license-key

### clé de licence

Setzt einen Lizenzschlüssel für i-doit

Définit une clé de licence pour i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license-server=[LICENSE-SERVER] | Pfad zum i-doit Lizenz-Server [Default: "[https://lizenzen.i-doit.com](https://lizenzen.i-doit.com)"] |
| -k | --key=[KEY] | Lizenzschlüssel für i-doit |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -l | --license-server=[LICENSE-SERVER] | Chemin d'accès au serveur de licences i-doit [Par défaut : "[https://lizenzen.i-doit.com](https://lizenzen.i-doit.com)"] |
| -k | --key=[KEY] | Clé de licence pour i-doit |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-key --user admin --password admin --license-server https://lizenzen.i-doit.com --key license
```

### license-list

### liste des licences

Listet alle installierten Lizenzen

Liste toutes les licences installées

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --tenant=[TENANT] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -t | --tenant=[TENANT] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-list --tenant 1
```

### license-remove

### license-remove

Löscht eine Lizenz aus i-doit

Supprime une licence d'i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license=[LICENSE] | Lizenz-ID zu der zu löschenden Lizenz |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -l | --license=[LICENSE] | ID de la licence à supprimer |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-remove --user admin --password admin --license LicenseID
```

### logbook-archive

### logbook-archive

Archiviert die Logbucheinträge mit einem definierten Alter, gemäß den Einstellungen auf der i-doit Oberfläche.

Archive les entrées du journal avec un âge défini, selon les paramètres de l'interface i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

### maintenance

### maintenance

Verschickt E-Mails mit geplanten Wartungen gemäß den im Add-on "Wartungen" festgelegten Zeiträumen.

Envoie des e-mails avec des maintenances planifiées selon les périodes définies dans l'add-on "Maintenances".

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php maintenance --user admin --password admin --tenantId 1
```

### migrate-uploaded-files

### migrate-uploaded-files

Migriert hochgeladene Dateien in i-doit <v1.13 zu v.1.14>

Migre les fichiers téléchargés vers i-doit <v1.13 vers v.1.14>.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php migrate-uploaded-files
```

### nagios-export

### nagios-export

!!!info
    Dieser Befehl ist erst nach installation des Nagios Add-ons verfügbar.

!!!info
    Cette commande n'est disponible qu'après l'installation du module complémentaire Nagios.

Exportiert die Nagios-Einstellungen und i-doit Objekte in Nagios-Konfigurationsdateien.

Exporte les paramètres de Nagios et les objets i-doit dans les fichiers de configuration de Nagios.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --nagiosHostId=NAGIOSHOSTID | Angabe des Nagios-Hosts, der für den Export verwendet werden soll |
|     | --validate | Validiert die Exportdateien |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --nagiosHostId=NAGIOSHOSTID | Indication de l'hôte Nagios qui doit être utilisé pour l'exportation |
| | --validate | Valide les fichiers d'exportation |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | Mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php nagios-export --user admin --password admin --tenantId 1 --nagiosHostId 1
```

### nagios-ndoutils

### nagios-ndoutils

!!!info
    Dieser Befehl ist erst nach installation des Nagios Add-ons verfügbar.

!!!info
    Cette commande n'est disponible qu'après l'installation du module complémentaire Nagios.

Importiert Monitoring Statusänderungen aus den NDOUtils in das i-doit Logbuch.

Importe les changements d'état de monitoring des NDOUtils dans le journal de bord i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php nagios-ndoutils --user admin --password admin --tenantId 1
```

### notifications-list

### liste de notifications

Listet alle [Benachrichtigungen](../../../auswertungen/benachrichtigungen.md) auf

Liste toutes les [notifications](../../../évaluations/notifications.md)

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php notifications-list --user admin --password admin --tenantId 1
```

### notifications-send

### notifications-send

Verschickt die auf der i-doit Oberfläche konfigurierten Benachrichtigungen

Envoi des notifications configurées sur l'interface i-doit

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --notification-ids=NOTIFICATION-IDS | Übergabe bestimmter zu sendender Benachrichtigungs-IDs 1,2,3 |
|     | --notification-type-ids=NOTIFICATION-TYPE-IDS | Übergeben Sie spezifische IDs für die zu sendenden Benachrichtigungen 1,2,3 |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --notification-ids=NOTIFICATION-IDS | Transfert de certains ID de notification à envoyer 1,2,3 |
| | --notification-type-ids=NOTIFICATION-TYPE-IDS | Passez des ID spécifiques pour les notifications à envoyer 1,2,3 |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```

### report-export

### rapport-export

Exportiert einen Report in das gewünschte Dateiformat.

Exporte un rapport dans le format de fichier souhaité.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -r | --reportId=REPORTID | ID des zu exportierenden Reports |
| -d | --exportPath=EXPORTPATH | Pfad, zu dem der Export erfolgen soll |
| -f | --exportFilename=EXPORTFILENAME | Dateiname der Exportdatei ohne Dateiendung |
| -t | --exportFileType=EXPORTFILETYPE | Dateityp der Exportdatei. Mögliche Werte: csv, txt, pdf, xml (Standard:  "csv") |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -r | --reportId=REPORTID | ID du rapport à exporter |
| -d | --exportPath=EXPORTPATH | Chemin vers lequel l'exportation doit être effectuée |
| -f | --exportFilename=EXPORTFILENAME | Nom du fichier d'exportation sans extension de fichier |
| -t | --exportFileType=EXPORTFILETYPE | Type de fichier d'exportation. Valeurs possibles : csv, txt, pdf, xml (par défaut : "csv") |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php report-export --user admin --password admin --tenantId 1 --reportId 27 --exportPath /var/www/exported-reports/ --exportFilename Report-Buchhaltung-November-2019 --exportFileType csv
```

### search

### recherche

Sucht nach Inhalten in der Dokumentation

Recherche de contenu dans la documentation

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --searchString=SEARCHSTRING | Inhalt, nach dem gesucht werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --searchString=SEARCHSTRING | Contenu à rechercher |
| -u | --user=[USERNAME] | nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php search --user admin --password admin --tenantId 1 --searchString "Server001"
```

### search-index

### search-index

Erneuert den Suchindex, indem dieser gelöscht und neu geschrieben wird.

Renouvelle l'index de recherche en le supprimant et en le réécrivant.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --update | Anstatt nur einen neuen Index zu erstellen, werden die aktuellen Index-Dokumente überschrieben |
|     | --category=CATEGORY | Whitelist der Kategorien |
|     | --dry-run | Reindex ausführen, ohne zu speichern |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --update | Au lieu de créer seulement un nouvel index, les documents d'index actuels sont écrasés |
| | --category=CATEGORY | Liste blanche des catégories |
| | --dry-run | Exécuter Reindex sans sauvegarder |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
```

### strip-description-html

### strip-description-html

Mit diesem Befehl können Sie html-Tags im Beschreibungsfeld aller Kategorien und Objekte entfernen

Cette commande permet de supprimer les balises html dans le champ de description de toutes les catégories et de tous les objets.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php strip-description-html --user admin --password admin --tenantId 1
```

### sync-dynamic-groups

### sync-dynamic-groups

Synchronisiert dynamische Gruppenmitglieder neu.

Resynchronise les membres dynamiques du groupe.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -g | --groups=GROUPS | Kommaseparierte Liste von IDs der dynamischen Gruppen |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -g | --groups=GROUPS | Liste séparée par des virgules des ID des groupes dynamiques |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php sync-dynamic-groups --user admin --password admin --tenantId --groups 173,188,219
```

### system-autoincrement

### système-autoincrément

Legt den Wert des Auto-Increment des Systems fest. Dies beeinflusst Objekt-IDs, Kategorie-Einträge, etc. Beim Zurücksetzen des Auto-Increments kann es passieren, dass einige Inhalte nicht mehr zugänglich sind.

Définit la valeur de l'auto-incrément du système. Cela affecte les ID d'objets, les entrées de catégories, etc. Lors de la réinitialisation de l'auto-incrément, il peut arriver que certains contenus ne soient plus accessibles.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --autoIncrement=AUTOINCREMENT | Zahl, auf die das Auto-Increment festgelegt werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --autoIncrement=AUTOINCREMENT | Nombre auquel l'auto-incrément doit être fixé |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20
```

### system-categorycleanup

### system-categorycleanup

Bereinigt optional Kategorieeinträge, die sich im Status unfertig, archiviert oder gelöscht befinden

Nettoie facultativement les entrées de catégorie qui ont le statut inachevé, archivé ou supprimé.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --categoryStatus=CATEGORYSTATUS | Use to start cleaning up the specified status:<br>**1** für "unfertige" Kategorieeinträge<br>**3** für "archivierte" Kategorieeinträge<br>**4** für "gelöschte" Kategorieeinträge | |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --categoryStatus=CATEGORYSTATUS | Utiliser pour commencer à nettoyer l'état spécifié:<br>**1** pour les entrées de catégorie "non terminées"<br>**3** pour les entrées de catégorie "archivées"<br>**4** pour les entrées de catégorie "supprimées" | |
| -u | --user=[USERNAME] | nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-categorycleanup --user admin --password admin --tenantId 1 --categoryStatus 3
```

### system-checkforupdates

### system-checkforupdates

Prüft, ob eine neue i-doit Version verfügbar ist.

Vérifie si une nouvelle version d'i-doit est disponible.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-checkforupdates
```

### system-convert-non-innodb-tables

### system-convert-non-innodb-tables

Konvertiert alle nicht INNODB Tabellen nach INNODB.

Convertit toutes les tables non INNODB en INNODB.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --convert | Startet den Vorgang, alle nicht UTF-8-tables zu konvertieren |
|     | --table=[TABLE] | Tabelle die überprüft und konvertiert werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --convert | Démarre le processus de conversion de toutes les tables non UTF-8 |
| | --table=[TABLE] | Table à vérifier et à convertir |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-convert-non-innodb-tables --convert --table TABLE_NAME
```

### system-convert-non-utf8-tables

### system-convert-non-utf8-tables

Konvertiert alle nicht UTF-8 Datentypen nach UTF-8.

Convertit tous les types de données non UTF-8 en UTF-8.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --convert | Startet den Vorgan, alle nicht UTF-8-tables zu konvertieren |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --convert | Démarre le processus de conversion de toutes les tables non UTF-8 |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-convert-non-utf8-tables --convert
```

### system-location-fix

### system-location-fix

Führt die Standortkorrektur aus der GUI in der Konsole aus

Exécute la correction de la localisation à partir de l'interface graphique dans la console

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config /path/to/config/file
```

### system-maintenancecontract

### système-maintenancecontract

Verschickt eine E-Mail Benachrichtigung für Wartungskontakte.

Envoie une notification par e-mail pour les contacts de maintenance.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-maintenancecontract --user admin --password admin --tenantId 1
```

### system-objectcleanup

### system-objectcleanup

Bereinigt alle Objekte mit einem selbst definierbarem Status.

Nettoie tous les objets dont le statut peut être défini par l'utilisateur.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --objectStatus=OBJECTSTATUS | Legt fest, welcher Status bereinigt werden soll:  1: "unfertig"; 3: "archiviert"; 4: "gelöscht" |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --objectStatus=OBJECTSTATUS | Définit quel statut doit être nettoyé : 1 : "inachevé" ; 3 : "archivé" ; 4 : "supprimé" |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1
```

### system-objectrelations

### system-objecttrelations

Erneuert die Bezeichnungen aller Objektbeziehungen.

Renouvelle les désignations de toutes les relations entre objets.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --categoryConstant=CATEGORYCONSTANT | Konstante der Kategorie, für die der Vorgang ausgeführt werden soll (z.B. C__CATG__IP) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| | --categoryConstant=CATEGORYCONSTANT | Constante de la catégorie pour laquelle l'opération doit être exécutée (par ex. C__CATG__IP) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP
```

### system-refresh-table-configuration

### system-refresh-table-configuration

Aktualisiert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien)

Actualise toutes les configurations de listes disponibles (types d'objets et catégories)

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -a  | --all | Verarbeitet alle Objekttyp-Tabellenkonfigurationen |
| -o | --object-types=OBJECT-TYPES | Nur bestimmte Objekttyp-Tabellenkonfigurationen über ihre Konstante verarbeiten (es ist möglich, eine durch Komma getrennte Liste von Konstanten zu übergeben) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -a | --all | Traite toutes les configurations de tables de types d'objets |
| -o | --object-types=OBJECT-TYPES | Ne traite que certaines configurations de table de type d'objet via leur constante (il est possible de passer une liste de constantes séparées par une virgule) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[MOT DE PASSE] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-refresh-table-configuration --user admin --password admin --tenantId 1
```

### tenant-create

### tenant-create

Erstellt einen neuen Mandanten

Crée un nouveau client

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --root-user=[ROOT-USER] | Benutzername des privilegierten DB-Benutzers [default: "root"] |
| -p | --root-password=[ROOT-PASSWORD] | Passwort des privilegierten DB-Benutzers |
| -U | --user=[USER] | Benutzername der DB für neuen Mandanten [default: "idoit"] |
| -P | --password=[PASSWORD] | Password der DB für den neuen Mandanten |
| -d | --database=[DATABASE] | DB Name für den neuen Mandanten [default: "idoit_data"] |
| -t | --title=[TITLE] | Name des neuen Mandanten[default: "Your company name"] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --root-user=[ROOT-USER] | Nom d'utilisateur de l'utilisateur privilégié de la BD [par défaut : "root"] |
| -p | --root-password=[ROOT-PASSWORD] | mot de passe de l'utilisateur privilégié de la BD |
| -U | --user=[USER] | Nom d'utilisateur de la BD pour le nouveau client [par défaut : "idoit"] |
| -P | --password=[PASSWORD] | Mot de passe de la BD pour le nouveau mandant |
| -d | --database=[DATABASE] | Nom de la BD pour le nouveau mandant [par défaut : "idoit_data"] |
| -t | --title=[TITLE] | Nom du nouveau client[par défaut : "Your company name"] |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-create --title Musterfirma --user idoit --password idoitpassword -- enable --tenantId 3
```

### tenant-disable

### tenant-disable

Deaktiviert einen existierenden Mandaten.

Désactive un mandataire existant.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-disable --tenantId 3
```

### tenant-enable

### tenant-enable

Aktiviert einen bestehenden Mandanten.

Active un mandant existant.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-enable --tenantId 3
```

### tenant-list

### liste des participants

Listet alle bestehenden Mandanten auf.

Répertorie tous les mandants existants.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-list
```

### tenant-remove

### tenant-remove

Entfernt einen bestehenden Mandanten

Supprime un mandant existant

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenant=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenant=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-remove --user admin --password admin --tenant 1
```

### uninstall

### uninstall

Deinstalliert die genutzte i-doit Installation

Désinstalle l'installation i-doit utilisée

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -h | --help | Message d'aide pour afficher des informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php uninstall --user admin --password admin
```

### update

### mise à jour

Update von i-doit installieren.

Installer la mise à jour d'i-doit.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -z | --zip=[ZIP] | Angabe des Pfades zum Update-Paket |
|     | --v=V | Zu installierende Version |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -z | --zip=[ZIP] | Indication du chemin d'accès au paquet de mise à jour |
| | --v=V | Version à installer |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactive toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php update --user admin --password admin --zip /path/to/zip/file.zip --v 1.14
```

### workflows-process

### workflows-process

Sendet E-Mails zu Workflows und erstellt Aufgaben aus Checklisten.

Envoie des e-mails sur les workflows et crée des tâches à partir de listes de contrôle.

**Optionen:**

**Options:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --types=TYPES | Workflow-Typen (mehrere Werte sind möglich) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

| Paramètre (forme courte) | Paramètre (forme longue) | Description |
| --- | --- | --- |
| -t | --types=TYPES | Types de workflow (plusieurs valeurs possibles) |
| -u | --user=[USERNAME] | Nom d'utilisateur d'un utilisateur autorisé à exécuter |
| -p | --password=[PASSWORD] | mot de passe pour authentifier l'utilisateur précédemment spécifié |
| -i | --tenantId=[TENANT-ID] | ID du mandant à utiliser (par défaut : 1) |
| -c | --config=[CONFIG-FILE] | Indication du chemin d'accès au fichier de configuration |
| -h | --help | Message d'aide pour l'affichage d'informations supplémentaires |
| -q | --quiet | Quiet-Mode pour désactiver le retour |
| -V | --version | Sortie de la version de la console i-doit |
| | --ansi|--no-ansi | Forcer la sortie ANSI (ou désactiver --no-ansi) |
| -n | --no-interaction | Désactiver toutes les questions d'interaction de la console i-doit |
| -v / -vv / -vvv | --verbose | Augmente l'étendue de la restitution. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist
```