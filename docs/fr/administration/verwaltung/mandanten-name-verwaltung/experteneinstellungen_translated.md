<!-- TRANSLATED by md-translate -->
# Experteneinstellungen

# Paramètres des experts

Die Experteneinstellungen sind so etwas wie die "Registry" von i-doit. Hier können viele Einstellungen gesetzt werden, die teilweise nicht über die Web GUI erreichbar sind.

Les paramètres experts sont un peu comme le "registre" d'i-doit. Il est possible d'y définir de nombreux paramètres, dont certains ne sont pas accessibles via l'interface utilisateur Web.

!!! attention "Vorsicht"
    In der Regel ist es nicht nötig, in den Experteneinstellungen Werte hinzuzufügen oder zu verändern. Für den normalen Gebrauch bringt die Web GUI an den entsprechenden Stellen Funktionen mit, um das Verhalten von i-doit zu steuern.
    Vor der Änderung an den Experteneinstellungen sollte **unbedingt ein [Backup](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) angefertigt** werden. Einige der aufgelisteten Einstellungen haben einen gravierenden Einfluss auf die Applikation. Im Zweifel hilft der [Support](../../kundenportal.md) gerne weiter.

! !! attention "Attention".
    En règle générale, il n'est pas nécessaire d'ajouter ou de modifier des valeurs dans les paramètres experts. Pour une utilisation normale, l'interface utilisateur Web comporte des fonctions aux endroits appropriés pour contrôler le comportement d'i-doit.
    Avant de modifier les paramètres experts, il est **impératif de faire une [sauvegarde](../../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md). Certains des paramètres énumérés ont un impact important sur l'application. En cas de doute, le [Support](../../kundenportal.md) vous aidera volontiers.

## Konfiguration

## Configuration

Zu erreichen sind die Einstellungen unter **Verwaltung → [Mandanten-Name] Verwaltung → Experteneinstellungen**.

Les paramètres sont accessibles sous **Administration → [nom du mandant] Administration → Paramètres des experts**.

Jede Einstellung besteht aus drei Teilen:

Chaque plan se compose de trois parties :

| Key                                                                                                                                                        | Standard Wert                                                                                                         | Beschreibung                                                                                                                                                                                                                                                                                                                                       |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Der Schlüssel (**Key**) gibt der Einstellung einen eindeutigen Namen. Sollte ein Schlüssel noch nicht existieren, kann er nachträglich hinzugefügt werden. | Der Wert (**Value**) ist in der Regel eine Zeichenkette bzw. ein längerer Text (String) oder eine Ganzzahl (Integer). | Über den Typ (**Type**) wird die Reichweite der Einstellung angegeben. Eine Einstellung mit dem Typ **Tenant-wide** wirkt sich nur auf denjenigen Mandanten aus, mit dem der Benutzer derzeit angemeldet ist. **System-wide** bedeutet, dass sich die Einstellung auf das gesamte i-doit auswirkt, also unabhängig von den verfügbaren Mandanten. |

| clé | valeur par défaut | description |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| La clé (**Key**) donne un nom unique au paramètre. Si une clé n'existe pas encore, elle peut être ajoutée ultérieurement. | La valeur (**Value**) est généralement une chaîne de caractères ou un texte plus long (string) ou un nombre entier (integer). | Le type (**Type**) permet d'indiquer la portée du paramètre. Un réglage de type **Tenant-wide** n'a d'effet que sur le mandant avec lequel l'utilisateur est actuellement connecté. **System-wide** signifie que le réglage a un effet sur l'ensemble de l'i-doit, donc indépendamment des mandants disponibles. |

## Liste der Einstellungen

## Liste des paramètres

| Key                                           | Standard Wert                               | Beschreibung                                                                                                                                                                                       |
| --------------------------------------------- | ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| api.authenticated-users-only                  | 1                                           | Erzwingt die Authentifizierung für die Verwendung der API                                                                                                                                         |
| auth.active                                   | 1                                           | Aktivierung/Deaktivierung des Rechtesystems                                                                                                                                                       |
| auth.logging                                  | 1                                           | Aktiviert/Deaktiviert das loggen von Rechtesystem-Meldungen                                                                                                                                       |
| auth.use-in-cmdb-explorer                     | 0                                           | Aktiviert die Berücksichtigung von Rechten im CMDB-Explorer. Objekte auf die nicht verrechtet sind werden nicht dargestellt / weiter iteriert                                                     |
| auth.use-in-cmdb-explorer-service-browser     | 0                                           | Aktiviert die Berücksichtigung von Rechten im CMDB-Explorer Service Popup. Der User sieht nur die Services, auf die er Rechte hat.                                                                |
| auth.use-in-object-browser                    | 0                                           | Aktiviert die Berücksichtigung von Rechten im Objekt Browser. Objekte die nicht verrechtet sind werden nicht dargestellt. Bereits ausgewählte Objekte werden mit "[Ausgeblendet]" dargestellt   |
| auth.use-in-file-browser                      | 0                                           | Aktiviert die Berücksichtigung von Rechten im File Browser. Objekte auf die nicht verrechtet sind werden nicht dargestellt. Bereits ausgewählte Objekte werden mit "[Ausgeblendet]" dargestellt |
| auth.use-in-location-tree                     | 0                                           | Aktiviert die Berücksichtigung von Rechten im Standort Baum. Objekte die nicht verrechtet sind werden nicht dargestellt / aufgeklappt.                                                            |
| cache.default-expiration-time                 | 86400                                       | Legt die Zeit in Sekunden fest, für welche bestimmte Systeminterne Caches behalten werden (z.B. Rechtesystem, Analyse Ergebnisse)                                                                 |
| ckeditor.font_names                           | Arial;Courier New;Times New Roman;Helvetica | Verwendbare Schriftarten im WYSIWYG Editor                                                                                                                                                        |
| cmdb.limits.order-threshhold                  | 10000                                       | Limit an Zeilen für die TableComponent ab wann nur noch indexierte Felder sortiert und gefiltert werden können                                                                                    |
| cmdb.limits.obj-browser.objects-in-viewmode   | 8                                           | Maximale Anzahl darzustellender Objekte im Objektbrowser im Viewmode                                                                                                                              |
| cmdb.limits.object-table-columns              | 10                                          | Legt fest, wie viele Spalten in den Objektlisten angezeigt werden dürfen.                                                                                                                         |
| cmdb.limits.port-lists-layer2                 | 5                                           | Limitierung der aufgeführten Layer2-Netze in der Portliste                                                                                                                                        |
| cmdb.limits.port-lists-vlans                  | 10                                          | Limitierung der aufgeführten VLANs in der Portliste                                                                                                                                               |
| cmdb.limits.port-overview-default-vlan-only   | 0                                           | In der Portübersicht soll lediglich das Standard-VLAN angezeigt werden                                                                                                                            |
| cmdb.multiedit.text-size-in-px                | 120                                         | Textgröße in der Listeneditierung                                                                                                                                                                 |
| cmdb.objtype.OBJECT_TYPE_ID.auto-inventory-no | -                                           | Muster für die Generierung automatischer Inventarnummern in der Buchhaltungskategorie                                                                                                             |
| cmdb.only-show-ranked-entries-as-such         | 0                                           | Option zur Festlegung, ob Beziehungen zu einem archivierten Objekt als archiviert oder normal angezeigt werden sollen                                                                             |
| cmdb.quickpurge                               | -                                           | Aktivieren/Deaktivieren der Quickpurge-Funktionalität                                                                                                                                             |
| cmdb.skip-unidirectional-connection-ranking   | 0                                           | Option um festzulegen, ob Verknüpfungen zu einem archivierten Objekt als archiviert oder normal dargestellt werden sollen                                                                         |
| cmdb.unique.hostname                          | -                                           | Aktivieren/Deaktivieren von einzigartigen Hostnamen                                                                                                                                               |
| cmdb.unique.ip-address                        | -                                           | Aktivieren/Deaktivieren von einzigartigen Ips                                                                                                                                                     |
| cmdb.unique.layer-2-net                       | -                                           | Aktivieren/Deaktivieren von einzigartigen Layer-2 Ids                                                                                                                                             |
| cmdb.unique.object-title                      | -                                           | Aktivieren/Deaktivieren von einzigartigen Objekt-Titel                                                                                                                                            |
| gui.empty_value                               | -                                           | Definiert die Darstellung eines Leerwerts in der Oberfläche                                                                                                                                       |
| gui.nat-sort.port-list                        | 1                                           | Lexikografische Sortierung der Portliste                                                                                                                                                          |
| jdisc.import-unidentified-devices             | false                                       | Aktivieren/Deaktivieren von Imports unidentifizierter JDisc-Objekte                                                                                                                               |
| maxlength.dialog_plus                         | 110                                         | Maximale Zeichenlänge für Einträge in Dialoglisten                                                                                                                                                  |
| maxlength.location.objects                    | 16                                          | Maximale Anzahl darzustellender Objekte                                                                                                                                                           |
| maxlength.location.path                       | 40                                          | Maximale Länge von Standortpfaden                                                                                                                                                                 |
| maxlength.object.lists                        | 55                                          | Maximale Anzahl darzustellender Objekte in Objektlisten                                                                                                                                            |
| search.global.autostart-deep-search           | 0                                           | Automatische Deep Search Suche                                                                                                                                                                    |
| security.passwort.minlength                   | 4                                           | Mindestlänge für Benutzerpasswörter                                                                                                                                                               |
| qrcode.config                                 |                                             | QR-Code Konfiguration                                                                                                                                                                             |

| clé | valeur par défaut | description |
| --------------------------------------------- | ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| api.authenticated-users-only | 1 | Force l'authentification pour l'utilisation de l'API |
| auth.active | 1 | Activation/désactivation du système de droits |
| auth.logging | 1 | Active/désactive la journalisation des messages du système de droits |
| auth.use-in-cmdb-explorer | 0 | Active la prise en compte des droits dans l'explorateur CMDB. Les objets sur lesquels il n'y a pas de droits ne sont pas affichés / l'itération se poursuit |
| auth.use-in-cmdb-explorer-service-browser | 0 | Active la prise en compte des droits dans le popup de service de CMDB-Explorer. L'utilisateur ne voit que les services sur lesquels il a des droits.                                                                |
| auth.use-in-object-browser | 0 | Active la prise en compte des droits dans le navigateur d'objets. Les objets qui n'ont pas de droits ne sont pas affichés. Les objets déjà sélectionnés sont affichés avec "[Caché]" |
| auth.use-in-file-browser | 0 | Active la prise en compte des droits dans le File Browser. Les objets sur lesquels il n'y a pas de droits ne sont pas affichés. Les objets déjà sélectionnés sont affichés avec "[Caché]" |
| auth.use-in-location-tree | 0 | Active la prise en compte des droits dans l'arborescence des sites. Les objets qui ne sont pas justifiés ne sont pas affichés/développés.                                                            |
| cache.default-expiration-time | 86400 | Définit le temps, en secondes, pendant lequel certains caches internes au système sont conservés (par ex. système de droits, résultats d'analyse) |
| ckeditor.font_names | Arial;Courier New;Times New Roman;Helvetica | Polices utilisables dans l'éditeur WYSIWYG |
| cmdb.limits.order-threshhold | 10000 | Limite de lignes pour le TableComponent à partir de laquelle seuls les champs indexés peuvent être triés et filtrés |
| cmdb.limits.obj-browser.objects-in-viewmode | 8 | Nombre maximal d'objets à afficher dans le navigateur d'objets en mode de visualisation |
| cmdb.limits.object-table-columns | 10 | Définit le nombre de colonnes pouvant être affichées dans les listes d'objets.                                                                                                                         |
| cmdb.limits.port-lists-layer2 | 5 | Limite des réseaux de couche 2 énumérés dans la liste des ports |
| cmdb.limits.port-lists-vlans | 10 | Limitation des VLANs listés dans la liste des ports |
| cmdb.limits.port-overview-default-vlan-only | 0 | Seul le VLAN par défaut doit être affiché dans la liste des ports |
| cmdb.multiedit.text-size-in-px | 120 | Taille du texte dans l'édition de la liste |
| cmdb.objtype.OBJECT_TYPE_ID.auto-inventory-no | - | Modèle pour la génération de numéros d'inventaire automatiques dans la catégorie comptable |
| cmdb.only-show-ranked-entries-as-such | 0 | Option pour déterminer si les relations avec un objet archivé doivent être affichées comme archivées ou normales |
| cmdb.quickpurge | - | Activer/désactiver la fonctionnalité de quickpurge |
| cmdb.skip-unidirectional-connection-ranking | 0 | Option pour spécifier si les liens vers un objet archivé doivent être affichés comme archivés ou normaux |
| cmdb.unique.hostname | - | Activer/désactiver les noms d'hôtes uniques |
| cmdb.unique.ip-address | - | Activer/désactiver les ips uniques |
| cmdb.unique.layer-2-net | - | Activer/désactiver les Ids uniques de la couche 2 |
| cmdb.unique.object-title | - | Activer/désactiver les titres d'objets uniques |
| gui.empty_value | - | Définir la représentation d'une valeur vide dans l'interface |
| gui.nat-sort.port-list | 1 | Tri lexicographique de la liste des ports |
| jdisc.import-unidentified-devices | false | Activer/désactiver les importations d'objets JDisc non identifiés |
| maxlength.dialog_plus | 110 | Longueur maximale de caractères pour les entrées dans les listes de dialogue |
| maxlength.location.objects | 16 | Nombre maximum d'objets à afficher |
| maxlength.location.path | 40 | Longueur maximale des chemins d'accès aux sites |
| maxlength.object.lists | 55 | Nombre maximum d'objets à afficher dans les listes d'objets |
| search.global.autostart-deep-search | 0 | Recherche profonde automatique |
| security.passwort.minlength | 4 | Longueur minimale des mots de passe utilisateur |
| qrcode.config | | Configuration du code QR |

## Liste der Einstellungen (Benutzer)

## Liste des paramètres (utilisateur)

| Key                             | Standard Wert | Beschreibung                                                                                                                                                                                                      |
| ------------------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| gui.leftcontent.width           | 235           | Definiert die Breite des linken Baumbereichs in Pixeln                                                                                                                                                           |
| workflows.max-checklist-entries | 7             | Maximale Einträge in Checklisten                                                                                                                                                                                 |
| gui.login.display               | user-name     | Darstellung des Namens im "logged in as" Bereich:<br>- user-name: lfischer<br>- full-name: Dr. Leonard Fischer<br>- full-name-plus: Dr. Leonard Fischer (lfischer)<br>- first-last-name-abbreviation: L. Fischer |

| clé | valeur par défaut | description |
| ------------------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| gui.leftcontent.width | 235 | Définit la largeur en pixels de la partie gauche de l'arborescence |
| workflows.max-checklist-entries | 7 | Entrées maximales dans les listes de contrôle |
| gui.login.display | nom d'utilisateur | Présentation du nom dans la zone "logged in as":<br>- nom d'utilisateur : lfischer<br>- nom complet : Dr. Leonard Fischer<br>- nom complet-plus : Dr. Leonard Fischer (lfischer)<br>- premier-dernier-nom-abréviation : L. Fischer |