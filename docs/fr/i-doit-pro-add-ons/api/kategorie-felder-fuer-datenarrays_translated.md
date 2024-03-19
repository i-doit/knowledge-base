<!-- TRANSLATED by md-translate -->
# Kategorie felder für Datenarrays

# Champs de catégorie pour les tableaux de données

In diesem Artikel werden alle in i-doit verfügbaren [Kategorien und deren Attribute](../../grundlagen/struktur-it-dokumentation.md) aufgeführt. Dies kann sehr hilfreich sein, wenn die [programmierbare Schnittstelle (API)](./index.md) von i-doit eingesetzt wird.

Cet article liste toutes les [catégories et leurs attributs](../../bases/structure-it-documentation.md) disponibles dans i-doit. Cela peut être très utile si l'[interface programmable (API)](./index.md) d'i-doit est utilisée.

Diesen Inhalt automatisch erstellen

Créer automatiquement ce contenu

Über den URL-Parameter load=api_properties werden die Kategorie-Tabellen für die derzeit installierte Version von i-doit erstellt. Es muss ein Benutzer angemeldet sein. Beispiel:[https://demo.i-doit.com/?load=api_properties](https://demo.i-doit.com/?load=api_properties)

Le paramètre URL load=api_properties permet de créer les tableaux de catégories pour la version d'i-doit actuellement installée. Un utilisateur doit être connecté. Exemple :[https://demo.i-doit.com/?load=api_properties](https://demo.i-doit.com/?load=api_properties)

## Globale Kategorien (catg)

## Catégories globales (catg)

### Allgemein (C__CATG__GLOBAL)

### Général (C__CATG__GLOBAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| ID  | id  | int |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Status | status | int |     | Ja  |
| Erstellungsdatum | created | text |     | Ja  |
| Erstellt von | created_by | text |     | Ja  |
| Letzte Änderung | changed | text |     | Ja  |
| Letzte Änderung durch | changed_by | text |     | Ja  |
| Einsatzzweck | purpose | int | isys_purpose__id | Ja  |
| Kategorie | category | int | isys_catg_global_category__id | Ja  |
| SYSID | sysid | text |     | Ja  |
| CMDB-Status | cmdb_status | int | isys_cmdb_status__id | Ja  |
| Objekttyp | type | int | isys_obj_type__id | Ja  |
| Tags | tag | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| ID | id | int | | Oui |
| titre | texte | | Oui |
| statut | status | int | | Oui |
| date de création | created | texte | | oui |
| créé par | created_by | text | | Oui |
| dernière modification | changed | text | | Oui |
| dernière modification par | changed_by | text | | Oui |
| but d'utilisation | purpose | int | isys_purpose__id | Oui |
| catégorie | category | int | isys_catg_global_category__id | oui |
| SYSID | sysid | text | | Oui |
| statut CMDB | cmdb_status | int | isys_cmdb_status__id | Oui |
| type d'objet | type | int | isys_obj_type__id | Oui |
| tags | tag | int | isys_obj__id | oui |
| description | text_area | | Oui |

### Modell (C__CATG__MODEL)

### Modèle (C__CATG__MODEL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hersteller | manufacturer | int | isys_model_manufacturer__id | Ja  |
| Modell | title | int | isys_model_title__id | Ja  |
| Produkt-ID | productid | text |     | Ja  |
| Service Tag | service_tag | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Firmware | firmware | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| fabricant | manufacturer | int | isys_model_manufacturer__id | Oui |
| modèle | title | int | isys_model_title__id | Oui |
| ID produit | productid | text | | Oui |
| service_tag | text | | Oui |
| numéro de série | serial | text | | Oui |
| firmware | firmware | text | | Oui |
| description | text_area | | Oui |

### Formfaktor (C__CATG__FORMFACTOR)

### Facteur de forme (C__CATG__FORMFACTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Formfaktor | formfactor | int | isys_catg_formfactor_type__id | Ja  |
| Höheneinheiten | rackunits | int |     | Ja  |
| Maßeinheit | unit | int | isys_depth_unit__id | Ja  |
| Breite | width | float |     | Ja  |
| Höhe | height | float |     | Ja  |
| Tiefe | depth | float |     | Ja  |
| Gewicht | weight | float |     | Ja  |
| Gewichtseinheit | weight_unit | int | isys_weight_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| facteur de forme | formfactor | int | isys_catg_formfactor_type__id | Oui |
| unités de hauteur | rackunits | int | | Oui |
| unité de mesure | unit | int | isys_depth_unit__id | Oui |
| largeur | width | float | | Oui |
| hauteur | height | float | | oui |
| profondeur | depth | float | | oui |
| poids | float | | Oui |
| unité de poids | weight_unit | int | isys_weight_unit__id | Oui |
| description | text_area | | Oui |

### CPU (C__CATG__CPU)

### CPU (C__CATG__CPU)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys_catg_cpu_manufacturer__id | Ja  |
| Typ | type | int | isys_catg_cpu_type__id | Ja  |
| CPU-Frequenz | frequency | float |     | Ja  |
| CPU-Frequenz Einheit | frequency_unit | int | isys_frequency_unit__id | Ja  |
| CPU-Kerne | cores | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| fabricant | manufacturer | int | isys_catg_cpu_manufacturer__id | Oui |
| type | int | isys_catg_cpu_type__id | Oui |
| fréquence CPU | frequency | float | | Oui |
| unité de fréquence CPU | frequency_unit | int | isys_frequency_unit__id | Oui |
| noyaux CPU | cores | int | | Oui |
| description | text_area | | Oui |

### Speicher (C__CATG__MEMORY)

### Mémoire (C__CATG__MEMORY)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anzahl | quantity | int |     | Ja  |
| Bezeichnung | title | int | isys_memory_title__id | Ja  |
| Hersteller | manufacturer | int | isys_memory_manufacturer__id | Ja  |
| Typ | type | int | isys_memory_type__id | Ja  |
| Gesamtkapazität | total_capacity | float |     | Ja  |
| Kapazität | capacity | float |     | Ja  |
| Speichereinheit | unit | int | isys_memory_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nombre | quantity | int | | oui |
| titre | title | int | isys_memory_title__id | Oui |
| manufacturer | int | isys_memory_manufacturer__id | Oui |
| type | int | isys_memory_type__id | Oui |
| capacité totale | total_capacity | float | | Oui |
| capacité | float | | Oui |
| unité de mémoire | unit | int | isys_memory_unit__id | Oui |
| description | text_area | | Oui |

### Netzwerk (C__CATG__NETWORK)

### Réseau (C__CATG__NETWORK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys_iface_manufacturer__id | Ja  |
| Modell | model | int | isys_iface_model__id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Slotnummer | slot | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| fabricant | manufacturer | int | isys_iface_manufacturer__id | Oui |
| modèle | model | int | isys_iface_model__id | Oui |
| numéro de série | serial | text | | oui |
| numéro de slot | slot | text | | Oui |
| description | text_area | | Oui |

### Stromverbraucher (C__CATG__POWER_CONSUMER)

### Consommateur d'électricité (C__CATG__POWER_CONSUMER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Hersteller | manufacturer | int | isys_pc_manufacturer__id | Ja  |
| Modell | model | int | isys_pc_model__id | Ja  |
| Volt | volt | text |     | Ja  |
| Watt | watt | text |     | Ja  |
| Ampere | ampere | text |     | Ja  |
| BTU | btu | text |     | Ja  |
| Zielobjekt | assigned_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| active | int | | Oui |
| fabricant | manufacturer | int | isys_pc_manufacturer__id | Oui |
| modèle | model | int | isys_pc_model__id | Oui |
| volt | volt | texte | | Oui |
| watt | watt | text | | oui |
| ampère | ampère | texte | | oui |
| BTU | btu | texte | | Oui |
| objet cible | assigned_connector | int | | Oui |
| connecteur | int | | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| description | text_area | | Oui |

### Schnittstelle (C__CATG__UNIVERSAL_INTERFACE)

### Interface (C__CATG__UNIVERSAL_INTERFACE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verbindungstyp | type | int | isys_ui_con_type__id | Ja  |
| Anschlusstyp | plug | int | isys_ui_plugtype__id | Ja  |
| Verbunden mit | assigned_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Relation direction | relation_direction | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type de connexion | type | int | isys_ui_con_type__id | Oui |
| type de connexion | plug | int | isys_ui_plugtype__id | Oui |
| Connecté à | assigned_connector | int | | Oui |
| Connecté au connecteur | connector | int | | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| description | text_area | | Oui |
| direction_relation | relation_direction | int | | Oui |

### Softwarezuweisung (C__CATG__APPLICATION)

### Attribution de logiciel (C__CATG__APPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anwendung | application | int | isys_connection__id | Ja  |
| Typ | application_type | int | isys_catg_application_type__id | Ja  |
| Priorität | application_priority | int | isys_catg_application_priority__id | Ja  |
| Zugewiesene Lizenz | assigned_license | int | isys_cats_lic_list__id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned_license_key | int | isys_cats_lic_list__id | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Service | assigned_it_service | int | isys_catg_its_components_list__id | Ja  |
| Variante | assigned_variant | int | isys_cats_app_variant_list__id | Ja  |
| Versionsnummer | assigned_version | int | isys_catg_version_list__id | Ja  |
| Nagios services vererben | bequest_nagios_services | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| application | int | isys_connection__id | Oui |
| type | application_type | int | isys_catg_application_type__id | Oui |
| priorité | application_priority | int | isys_catg_application_priority__id | oui |
| licence attribuée | assigned_license | int | isys_cats_lic_list__id | Oui |
| clé de licence assignée | assigned_license_key | int | isys_cats_lic_list__id | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| service | assigned_it_service | int | isys_catg_its_components_list__id | oui |
| variante | assigned_variant | int | isys_cats_app_variant_list__id | oui |
| numéro de version | assigned_version | int | isys_catg_version_list__id | oui |
| bequest_nagios_services | int | | Oui |
| description | text_area | | Oui |

### Zugriff (C__CATG__ACCESS)

### Accès (C__CATG__ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre Zugriffs-URL | primary_url | text |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Zugriffstyp | type | int | isys_access_type__id | Ja  |
| Host[:Port]/URL | url | text |     | Ja  |
| Host[:Port]/URL | formatted_url | text |     | Ja  |
| Primär | primary | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| primary_url | text | | Oui |
| titre | texte | | Oui |
| type d'accès | type | int | isys_access_type__id | Oui |
| hôte[:port]/URL | url | texte | | Oui |
| Host[:Port]/URL | formatted_url | text | | Oui |
| primary | int | | Oui |
| description | text_area | | Oui |

### Datensicherung (C__CATG__BACKUP)

### Sauvegarde des données (C__CATG__BACKUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Wird gesichert von | backup | int | isys_connection__id | Ja  |
| Art des Backups | backup_type | int | isys_backup_type__id | Ja  |
| Zyklus | cycle | int | isys_backup_cycle__id | Ja  |
| Pfad für zu sichernde Daten | path_to_save | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| Sauvegardé par | backup | int | isys_connection__id | Oui |
| type de sauvegarde | backup_type | int | isys_backup_type__id | Oui |
| cycle | cycle | int | isys_backup_cycle__id | Oui |
| chemin pour données à sauvegarder | path_to_save | text | | Oui |
| description | text_area | | Oui |

### Notfallplanzuweisung (C__CATG__EMERGENCY_PLAN)

### Attribution du plan d'urgence (C__CATG__EMERGENCY_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Zugewiesener Notfallplan | emergency_plan | int | isys_connection__id | Ja  |
| Zeitbedarf | time_needed | text |     | Ja  |
| Zeitbedarf (Einheit) | time_needed_unit | text |     | Ja  |
| Datum Notfallübung | practice_date | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| plan d'urgence attribué | emergency_plan | int | isys_connection__id | Oui |
| temps requis | time_needed | texte | | oui |
| temps requis (unité) | time_needed_unit | text | | Oui |
| date exercice d'urgence | practice_date | text | | Oui |
| description | text_area | | Oui |

### Dateien (C__CATG__FILE)

### fichiers (C__CATG__FILE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datei | file | int | isys_connection__id | Ja  |
| Revision | revision | int |     | Ja  |
| HTTP-Link (extern) | link | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| fichier | file | int | isys_connection__id | Oui |
| révision | revision | int | | Oui |
| lien HTTP (externe) | link | text | | Oui |
| description | text_area | | Oui |

### Kontaktzuweisung (C__CATG__CONTACT)

### Attribution de contact (C__CATG__CONTACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kontakt | contact | int |     | Ja  |
| Primärer Kontakt | primary_contact | int | isys_connection__id | Ja  |
| Kontakt | contact_object | int | isys_connection__id | Ja  |
| Primär | primary | int |     | Ja  |
| Rolle | role | int | isys_contact_tag__id | Ja  |
| Kontakte | contact_list | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| contact | int | | Oui |
| contact primaire | primary_contact | int | isys_connection__id | oui |
| contact_objet | int | isys_connection__id | oui | contact primaire
| primaire | primary | int | | oui |
| rôle | role | int | isys_contact_tag__id | oui |
| contacts | contact_list | text | | Oui |
| description | text_area | | Oui |

### Logbuch (C__CATG__LOGBOOK)

### Journal de bord (C__CATG__LOGBOOK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datum | date | date_time |     | Ja  |
| Objekt | object | int |     | Ja  |
| Ereignis | event | int | isys_logbook_event__id | Ja  |
| Quelle | source | int | isys_logbook_source__id | Ja  |
| Benutzer | user | int |     | Ja  |
| Objekttyp | object_type | text |     | Ja  |
| Kategorie | category | text |     | Ja  |
| Alarmlevel | alert_level | text | isys_logbook_level__id | Ja  |
| Benutzer | user_name_static | text |     | Ja  |
| Ereignis | event_static | text |     | Ja  |
| Kommentar | comment | text |     | Ja  |
| Änderungen | changes | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Zugriffstyp | reason | int | isys_logbook_reason__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| date | date_time | | Oui |
| objet | object | int | | Oui |
| événement | event | int | isys_logbook_event__id | Oui |
| source | int | isys_logbook_source__id | oui |
| utilisateur | int | | oui |
| type d'objet | object_type | text | | Oui |
| catégorie | category | text | | Oui |
| niveau d'alarme | alert_level | texte | isys_logbook_level__id | Oui |
| utilisateur | nom_utilisateur_static | texte | | oui |
| événement | event_static | texte | | oui |
| commentaire | texte | | Oui |
| modifications | changes | text | | Oui |
| description | text_area | | Oui |
| type d'accès | reason | int | isys_logbook_reason__id | Oui |

### Controller (C__CATG__CONTROLLER)

### Contrôleur (C__CATG__CONTROLLER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys_controller_type__id | Ja  |
| Hersteller | manufacturer | int | isys_controller_manufacturer__id | Ja  |
| Modell | model | int | isys_controller_model__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type | int | isys_controller_type__id | Oui |
| manufacturer | manufacturer | int | isys_controller_manufacturer__id | Oui |
| modèle | model | int | isys_controller_model__id | Oui |
| description | text_area | | Oui |

### Standort (C__CATG__LOCATION)

### Lieu (C__CATG__LOCATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Standort-Pfad | location_path | text |     | Ja  |
| Standort | parent | int |     | Ja  |
| Montage | option | int |     | Ja  |
| Einschub | insertion | int |     | Ja  |
| Position im Schrank | pos | int |     | Ja  |
| GPS | gps | text |     | Ja  |
| Breitengrad | latitude | text |     | Ja  |
| Längengrad | longitude | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| chemin d'accès au site | location_path | text | | Oui |
| emplacement | parent | int | | Oui |
| montage | option | int | | Oui |
| insertion | insertion | int | | Oui |
| position dans l'armoire | pos | int | | Oui |
| GPS | gps | texte | | Oui |
| latitude | texte | | Oui |
| longitude | texte | | Oui |
| description | text_area | | Oui |

### Objektbild (C__CATG__IMAGE)

### Image de l'objet (C__CATG__IMAGE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hochgeladene Bilder | image_selection | int |     | Ja  |
| Datei | image | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| images téléchargées | image_selection | int | | Oui |
| fichier | image | texte | | Oui |
| description | text_area | | Oui |

### Handbuchzuweisung (C__CATG__MANUAL)

### Attribution du manuel (C__CATG__MANUAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Handbuch Datei | manual | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| manuel fichier | manuel | int | isys_connection__id | oui |
| description | text_area | | Oui |

### Soundkarte (C__CATG__SOUND)

### Carte son (C__CATG__SOUND)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hersteller | manufacturer | int | isys_sound_manufacturer__id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| fabricant | manufacturer | int | isys_sound_manufacturer__id | Oui |
| description | titre | texte | | oui |
| description | text_area | | Oui |

### Räumlich zugeordnete Objekte (C__CATG__OBJECT)

### Objets associés à l'espace (C__CATG__OBJECT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | assigned_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | assigned_object | int | | Oui |

### Grafikkarte (C__CATG__GRAPHIC)

### carte graphique (C__CATG__GRAPHIC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys_graphic_manufacturer__id | Ja  |
| Speicher | memory | float |     | Ja  |
| Speichereinheit | unit | int | isys_memory_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| fabricant | manufacturer | int | isys_graphic_manufacturer__id | Oui |
| mémoire | float | | Oui |
| unité de mémoire | unit | int | isys_memory_unit__id | Oui |
| description | text_area | | Oui |

### Virtuelle Maschine (C__CATG__VIRTUAL_MACHINE)

### Machine virtuelle (C__CATG__VIRTUAL_MACHINE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtuelle Maschine | virtual_machine | int |     | Ja  |
| Läuft auf Host | hosts | int | isys_connection__id | Ja  |
| Virtualisierungs-System | system | int | isys_vm_type__id | Ja  |
| Konfigurations Datei | config_file | text |     | Ja  |
| Host im Cluster | primary | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| machine virtuelle | virtual_machine | int | | Oui |
| hosts | int | isys_connection__id | Oui |
| système de virtualisation | système | int | isys_vm_type__id | Oui |
| fichier de configuration | config_file | text | | Oui |
| hôte dans le cluster | primary | int | | Oui |
| description | text_area | | Oui |

### Buchhaltung (C__CATG__ACCOUNTING)

### Comptabilité (C__CATG__ACCOUNTING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Inventarnummer | inventory_no | text |     | Ja  |
| Kostenstelle | account | int | isys_account__id | Ja  |
| Rechnungsdatum | acquirementdate | date |     | Ja  |
| Eingekauft bei | contact | int | isys_contact__id | Ja  |
| Investitionskosten | price | double |     | Ja  |
| Betriebskosten | operation_expense | double |     | Ja  |
| Betriebskosten (Einheit) | operation_expense_interval | int | isys_interval__id | Ja  |
| Kostenträger | cost_unit | int | isys_catg_accounting_cost_unit__id | Ja  |
| Lieferschein-Nummer | delivery_note_no | text |     | Ja  |
| Beschaffungsart | procurement | int | isys_catg_accounting_procurement__id | Ja  |
| Lieferdatum | delivery_date | date |     | Ja  |
| Rechnungs-Nr. | invoice_no | text |     | Ja  |
| Bestell-Nr. | order_no | text |     | Ja  |
| Garantiezeitraum | guarantee_period | int |     | Ja  |
| Garantiezeitraum Einheit | guarantee_period_unit | int | isys_guarantee_period_unit__id | Ja  |
| Restgarantie | guarantee_period_status | text |     | Ja  |
| Garantiezeitraum nach | guarantee_period_base | int |     | Ja  |
| Bestelldatum | order_date | date |     | Ja  |
| Garantiedatum | guarantee_date | date |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro d'inventaire | inventory_no | text | | Oui |
| centre de coûts | account | int | isys_account__id | Oui |
| date de la facture | acquirementdate | date | | Oui |
| contact | int | isys_contact__id | oui | acheté auprès de
| coût d'investissement | prix | double | | oui |
| coûts d'exploitation | operation_expense | double | | Oui |
| coût d'exploitation (unité) | operation_expense_interval | int | isys_interval__id | Oui |
| unité de coûts | cost_unit | int | isys_catg_accounting_cost_unit__id | Oui |
| numéro de bon de livraison | delivery_note_no | text | | Oui |
| type d'approvisionnement | procurement | int | isys_catg_accounting_procurement__id | Oui |
| date de livraison | delivery_date | date | | oui |
| n° de facture | invoice_no | texte | | Oui |
| order_no | text | | Oui |
| période de garantie | guarantee_period | int | | Oui |
| période de garantie unité | guarantee_period_unit | int | isys_guarantee_period_unit__id | Oui |
| garantie résiduelle | guarantee_period_status | text | | oui |
| période de garantie après | guarantee_period_base | int | | Oui |
| date de commande | order_date | date | | Oui |
| date de garantie | guarantee_date | date | | oui |
| description | text_area | | Oui |

### Port (C__CMDB__SUBCAT__NETWORK_PORT)

### Port (C__CMDB__SUBCAT__NETWORK_PORT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verknüpftes Interface | interface | int | isys_catg_netp_list__id | Ja  |
| Typ | port_type | int | isys_port_type__id | Ja  |
| Modus | port_mode | int | isys_port_mode__id | Ja  |
| Stecker | plug_type | int | isys_plug_type__id | Ja  |
| Negotiation | negotiation | int | isys_port_negotiation__id | Ja  |
| Duplex | duplex | int | isys_port_duplex__id | Ja  |
| Geschwindigkeit | speed | float |     | Ja  |
| Einheit | speed_type | int | isys_port_speed__id | Ja  |
| Standard | standard | int | isys_port_standard__id | Ja  |
| MAC-Adresse | mac | text |     | Ja  |
| MTU | mtu | text |     | Ja  |
| Verbunden mit | assigned_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Kabel-ID | cable | int |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Hostadresse | addresses | int | isys_catg_ip_list_2_isys_catg_port_list__isys_catg_port_list__id | Ja  |
| Layer-2-Netz | layer2_assignment | int |     | Ja  |
| Verknüpftes Interface (HBA) | hba | int | isys_catg_hba_list__id | Ja  |
| Standard VLAN | default_vlan | int | isys_catg_port_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Relation direction | relation_direction | int |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| interface liée | interface | int | isys_catg_netp_list__id | Oui |
| type | port_type | int | isys_port_type__id | oui |
| mode_port | int | isys_port_mode__id | Oui |
| connecteur | plug_type | int | isys_plug_type__id | oui |
| Negotiation | negotiation | int | isys_port_negotiation__id | Oui |
| duplex | duplex | int | isys_port_duplex__id | oui |
| vitesse | speed | float | | oui |
| unité | type_de_vitesse | int | isys_port_speed__id | oui |
| standard | int | isys_port_standard__id | Oui |
| adresse MAC | mac | texte | | oui |
| MTU | mtu | text | | Oui |
| Connecté à | assigned_connector | int | | Oui |
| connector | int | | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| ID câble | cable | int | | Oui |
| active | int | | Oui |
| adresse d'hôte | adresses | int | isys_catg_ip_list_2_isys_catg_port_list__isys_catg_port_list__id | Oui |
| réseau de couche 2 | layer2_assignment | int | | Oui |
| Interface liée (HBA) | hba | int | isys_catg_hba_list__id | Oui |
| VLAN par défaut | default_vlan | int | isys_catg_port_list__id | Oui |
| description | text_area | | Oui |
| direction_relation | relation_direction | int | | Oui |

### Interface (C__CMDB__SUBCAT__NETWORK_INTERFACE_P)

### Interface (C__CMDB__SUBCAT__NETWORK_INTERFACE_P)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys_iface_manufacturer__id | Ja  |
| Modell | model | int | isys_iface_model__id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Slotnummer | slot | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| fabricant | manufacturer | int | isys_iface_manufacturer__id | Oui |
| modèle | model | int | isys_iface_model__id | Oui |
| numéro de série | serial | text | | oui |
| numéro de slot | slot | text | | Oui |
| description | text_area | | Oui |

### Logische Ports (C__CMDB__SUBCAT__NETWORK_INTERFACE_L)

### Ports logiques (C__CMDB__SUBCAT__NETWORK_INTERFACE_L)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Netz(e) | net | int |     | Ja  |
| MAC | mac | text |     | Ja  |
| Typ | port_type | int | isys_netx_ifacel_type__id | Ja  |
| Zuweisung | ports | int |     | Ja  |
| Eltern-Port | parent | int | isys_catg_log_port_list__id | Ja  |
| Standard | standard | int | isys_netp_ifacel_standard__id | Ja  |
| Aktiv | active | int |     | Ja  |
| Hostadresse | addresses | int |     | Ja  |
| Verbunden mit Anschluss | assigned_connector | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| réseau(x) | net | int | | Oui |
| MAC | mac | text | | Oui |
| type | port_type | int | isys_netx_ifacel_type__id | Oui |
| assignation | ports | int | | Oui |
| port parent | parent | int | isys_catg_log_port_list__id | oui |
| standard | int | isys_netp_ifacel_standard__id | oui |
| active | active | int | | oui |
| adresse de l'hôte | addresses | int | | oui |
| assigned_connector | int | | Oui |
| description | text_area | | Oui |

### Laufwerk (C__CATG__DRIVE)

### Lecteur (C__CATG__DRIVE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Laufwerksbuchstabe | mount_point | text |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Systemlaufwerk | system_drive | int |     | Ja  |
| Dateisystem | filesystem | int | isys_filesystem_type__id | Ja  |
| Kapazität | capacity | float |     | Ja  |
| Speichereinheit | unit | int | isys_memory_unit__id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Software-RAID-Gruppe | assigned_raid | int | isys_catg_raid_list__id | Ja  |
| Typ | drive_type | int | isys_catd_drive_type__id | Ja  |
| Auf Gerät | device | int | isys_catg_stor_list__id | Ja  |
| Auf Gerät | raid | int | isys_catg_raid_list__id | Ja  |
| Auf Gerät | ldev | int | isys_catg_ldevclient_list__id | Ja  |
| Objekttyp Konstante | category_const | text |     | Ja  |
| Freier Speicher | free_space | float |     | Ja  |
| Speichereinheit | free_space_unit | int | isys_memory_unit__id | Ja  |
| Belegter Speicher | used_space | float |     | Ja  |
| Speichereinheit | used_space_unit | int | isys_memory_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| lettre de lecteur | mount_point | text | | Oui |
| nom | titre | texte | | Oui |
| lecteur système | system_drive | int | | Oui |
| système de fichiers | filesystem | int | isys_filesystem_type__id | Oui |
| capacité | float | | Oui |
| unité de mémoire | unit | int | isys_memory_unit__id | Oui |
| numéro de série | serial | text | | oui |
| groupe RAID logiciel | assigned_raid | int | isys_catg_raid_list__id | Oui |
| type | drive_type | int | isys_catd_drive_type__id | oui |
| sur le périphérique | device | int | isys_catg_stor_list__id | oui |
| sur le périphérique | raid | int | isys_catg_raid_list__id | oui |
| sur le périphérique | ldev | int | isys_catg_ldevclient_list__id | oui |
| type d'objet Constante | category_const | text | | Oui |
| espace mémoire libre | free_space | float | | Oui |
| unité de mémoire | free_space_unit | int | isys_memory_unit__id | Oui |
| espace_utilisé | float | | Oui |
| unité de mémoire | used_space_unit | int | isys_memory_unit__id | Oui |
| description | text_area | | Oui |

### Gerät (C__CMDB__SUBCAT__STORAGE__DEVICE)

### périphérique (C__CMDB__SUBCAT__STORAGE__DEVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_stor_type__id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys_stor_manufacturer__id | Ja  |
| Modell | model | int | isys_stor_model__id | Ja  |
| Speichereinheit | unit | int | isys_memory_unit__id | Ja  |
| Kapazität | capacity | double |     | Ja  |
| Hotspare | hotspare | int |     | Ja  |
| Anschluss | connected | int | isys_stor_con_type__id | Ja  |
| Controller | controller | int | isys_catg_controller_list__id | Ja  |
| Hardware-RAID-Gruppe | raid_group | int | isys_catg_raid_list__id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| LTO Typ | lto_type | int | isys_stor_lto_type__id | Ja  |
| FC Adresse | fc_address | text |     | Ja  |
| Firmware | firmware | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_stor_type__id | Oui |
| description | title | text | | oui |
| manufacturer | int | isys_stor_manufacturer__id | Oui |
| modèle | model | int | isys_stor_model__id | Oui |
| unité de mémoire | unit | int | isys_memory_unit__id | Oui |
| capacité | capacity | double | | oui |
| hotspare | hotspare | int | | Oui |
| connected | int | isys_stor_con_type__id | Oui |
| contrôleur | controller | int | isys_catg_controller_list__id | Oui |
| groupe RAID matériel | raid_group | int | isys_catg_raid_list__id | oui |
| numéro de série | serial | text | | oui |
| description | text_area | | Oui |
| type LTO | lto_type | int | isys_stor_lto_type__id | Oui |
| Adresse FC | fc_address | text | | Oui |
| firmware | firmware | text | | Oui |

### FC-Port (C__CATG__CONTROLLER_FC_PORT)

### Port FC (C__CATG__CONTROLLER_FC_PORT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys_fc_port_type__id | Ja  |
| Verbundener Controller | connected_controller | int | isys_catg_hba_list__id | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Medium | medium | int | isys_fc_port_medium__id | Ja  |
| Geschwindigkeit | speed | int |     | Ja  |
| Geschwindigkeit Einheit | speed_unit | int | isys_port_speed__id | Ja  |
| Node WWN | wwn | text |     | Ja  |
| Port WW(P)N | wwpn | text |     | Ja  |
| SAN Zone und Verknüpfungsart | san_zones | int |     | Ja  |
| Zielobjekt | target | int |     | Ja  |
| Anschluss | connector | int |     | Ja  |
| Verbindung | assigned_connector | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Relation direction | relation_direction | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type | int | isys_fc_port_type__id | Oui |
| contrôleur connecté | connected_controller | int | isys_catg_hba_list__id | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| support | medium | int | isys_fc_port_medium__id | Oui |
| vitesse | speed | int | | oui |
| unité de vitesse | speed_unit | int | isys_port_speed__id | Oui |
| Node WWN | wwn | text | | Oui |
| Port WW(P)N | wwpn | text | | Oui |
| SAN Zone et type de lien | san_zones | int | | Oui |
| objet cible | target | int | | Oui |
| connexion | connector | int | | Oui |
| connexion | assigned_connector | int | | Oui |
| description | text_area | | Oui |
| direction_relation | relation_direction | int | | Oui |

### Hostadresse (C__CATG__IP)

### Adresse de l'hôte (C__CATG__IP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre Hostadresse | primary_hostaddress | text | isys_cats_net_ip_addresses_list__id | Ja  |
| Primärer Hostname | primary_hostname | text |     | Ja  |
| Typ | net_type | int | isys_net_type__id | Ja  |
| Primär | primary | int |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Netz | net | int |     | Ja  |
| Netzbereich | zone | int |     | Ja  |
| Adressvergabe IPv4 | ipv4_assignment | int | isys_ip_assignment__id | Ja  |
| IPv4-Adresse | ipv4_address | text | isys_cats_net_ip_addresses_list__id | Ja  |
| Adressvergabe IPv6 | ipv6_assignment | int | isys_ipv6_assignment__id | Ja  |
| IPv6 Gültigkeitsbereich | ipv6_scope | int | isys_ipv6_scope__id | Ja  |
| IPv6-Adresse | ipv6_address | text | isys_cats_net_ip_addresses_list__id | Ja  |
| Hostadresse | hostaddress | text | isys_cats_net_ip_addresses_list__id | Ja  |
| Hostname | hostname | text |     | Ja  |
| Domain | domain | text |     | Ja  |
| DNS Server | dns_server | int | isys_catg_ip_list__id | Ja  |
| DNS Server Adresse | dns_server_address | text | isys_catg_ip_list__id | Ja  |
| Suchdomänen | search_domain | int | isys_catg_ip_list__id | Ja  |
| Standardgateway für das Netz | use_standard_gateway | int |     | Ja  |
| Verknüpfter Port | assigned_port | int | isys_catg_port_list__id | Ja  |
| Verknüpfter Port | assigned_logical_port | int | isys_catg_log_port_list__id | Ja  |
| Hostadressen | all_ips | text |     | Ja  |
| Hostname (FQDN) | primary_fqdn | text |     | Ja  |
| Aliase | aliases | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| adresse_d'hôte_primaire | primary_hostaddress | text | isys_cats_net_ip_addresses_list__id | Oui |
| nom d'hôte primaire | primary_hostname | text | | Oui |
| type | net_type | int | isys_net_type__id | oui |
| primaire | primary | int | | oui |
| active | int | | Oui |
| réseau | net | int | | oui |
| zone de réseau | int | | Oui |
| attribution d'adresse IPv4 | ipv4_assignment | int | isys_ip_assignment__id | Oui |
| adresse IPv4 | ipv4_address | text | isys_cats_net_ip_addresses_list__id | Oui |
| attribution d'adresse IPv6 | ipv6_assignment | int | isys_ipv6_assignment__id | Oui |
| ipv6_scope | int | isys_ipv6_scope__id | Oui |
| adresse IPv6 | ipv6_address | text | isys_cats_net_ip_addresses_list__id | Oui |
| adresse de l'hôte | hostaddress | texte | isys_cats_net_ip_addresses_list__id | oui |
| nom d'hôte | hostname | texte | | oui |
| domaine | domain | text | | Oui |
| serveur DNS | dns_server | int | isys_catg_ip_list__id | Oui |
| Adresse du serveur DNS | dns_server_address | text | isys_catg_ip_list__id | Oui |
| domaines de recherche | search_domain | int | isys_catg_ip_list__id | Oui |
| passerelle par défaut pour le réseau | use_standard_gateway | int | | Oui |
| port associé | assigned_port | int | isys_catg_port_list__id | Oui |
| port associé | assigned_logical_port | int | isys_catg_log_port_list__id | oui |
| adresses d'hôtes | all_ips | text | | Oui |
| nom d'hôte (FQDN) | primary_fqdn | text | | Oui |
| alias | aliases | text | | Oui |
| description | text_area | | Oui |

### Version (C__CATG__VERSION)

### Version (C__CATG__VERSION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Versionsnummer | title | text |     | Ja  |
| Servicepack | servicepack | text |     | Ja  |
| Kernel | kernel | text |     | Ja  |
| Patchlevel | patchlevel | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro de version | title | text | | Oui |
| servicepack | texte | | Oui |
| noyau | kernel | texte | | Oui |
| niveau de patch | patchlevel | texte | | Oui |
| description | text_area | | Oui |

### Anschlüsse (C__CATG__CONNECTOR)

### Connecteurs (C__CATG__CONNECTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Ein-/Ausgang | type | int |     | Ja  |
| Leitungsnetz | wiring_system | int | isys_connection__id | Ja  |
| Interface | interface | int | isys_interface__id | Ja  |
| Faser / Wellenlängen | fiber_wave_lengths | int | isys_catg_connector_list__id | Ja  |
| Anschlussart | connection_type | int | isys_connection_type__id | Ja  |
| Verbunden mit Anschluss | assigned_connector | int |     | Ja  |
| Zugehöriger Kategorietyp | assigned_category | text |     | Ja  |
| Kabel | cable_connection | int |     | Ja  |
| Verwendete Faser/Ader (RX) | used_fiber_lead_rx | int |     | Ja  |
| Verwendete Faser/Ader (TX) | used_fiber_lead_tx | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Relation direction | relation_direction | int |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| entrée/sortie | type | int | | Oui |
| système de câblage | int | isys_connection__id | Oui |
| interface | interface | int | isys_interface__id | Oui |
| fibre / longueurs d'onde | fiber_wave_lengths | int | isys_catg_connector_list__id | Oui |
| type de connexion | connection_type | int | isys_connection_type__id | Oui |
| Connecté à la connexion | assigned_connector | int | | Oui |
| assigned_category | text | | Oui |
| cable_connection | int | | Oui |
| fibre/fil utilisé (RX) | used_fiber_lead_rx | int | | Oui |
| fibre/fil utilisé (TX) | used_fiber_lead_tx | int | | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| description | text_area | | Oui |
| direction_relation | relation_direction | int | | Oui |

### Rechnung (C__CATG__INVOICE)

### Facture (C__CATG__INVOICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | denotation | text |     | Ja  |
| Rechnungsdatum | date | date |     | Ja  |
| Betrag | amount | double |     | Ja  |
| Bearbeitet am | edited | date |     | Ja  |
| Abgabe Finanzbuchhaltung | financial_accounting_delivery | date |     | Ja  |
| Abgebucht | charged | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| désignation | dénotation | texte | | oui |
| date de la facture | date | | Oui |
| montant | double | | oui |
| Traité le | edited | date | | Oui |
| financial_accounting_delivery | date | | Oui |
| débité | charged | int | | Oui |
| description | text_area | | Oui |

### Stromlieferant (C__CATG__POWER_SUPPLIER)

### Fournisseur d'électricité (C__CATG__POWER_SUPPLIER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Volt | volt | text |     | Ja  |
| Watt | watt | text |     | Ja  |
| Ampere | ampere | text |     | Ja  |
| Zielobjekt | assigned_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector_sibling | int |     | Ja  |
| Zugehöriger Kategorietyp | assigned_category | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| volt | volt | text | | Oui |
| watt | watt | texte | | Oui |
| ampère | ampère | texte | | oui |
| objet cible | assigned_connector | int | | Oui |
| connecteur | int | | Oui |
| entrée/sortie associée | connector_sibling | int | | Oui |
| assigned_category | text | | Oui |
| description | text_area | | Oui |

### RAID-Verbund (C__CATG__RAID)

### RAID interconnecté (C__CATG__RAID)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| RAID-Typ | raid_type | int | isys_raid_type__id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| RAID Level | raid_level | int | isys_stor_raid_level__id | Ja  |
| Controller | controller | int | isys_catg_controller_list__id | Ja  |
| Verbundene Geräte | storages | int |     | Ja  |
| Gesamtkapazität | full_capacity | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de RAID | raid_type | int | isys_raid_type__id | Oui |
| nom | titre | texte | | oui |
| RAID Level | raid_level | int | isys_stor_raid_level__id | Oui |
| contrôleur | controller | int | isys_catg_controller_list__id | oui |
| périphériques connectés | storages | int | | oui |
| capacité totale | full_capacity | text | | Oui |
| description | text_area | | Oui |

### Logische Geräte (LDEV Server) (C__CATG__LDEV_SERVER)

### Périphériques logiques (serveur LDEV) (C__CATG__LDEV_SERVER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| LUN | lun | text |     | Ja  |
| Segmentgröße (kB) | segment_size | float |     | Ja  |
| Speicher-Einheit | unit | int | isys_memory_unit__id | Ja  |
| Speichergröße | capacity | double |     | Ja  |
| Zugeordnete Geräte | connected_devices | int | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | Ja  |
| Pfade | paths | text |     | Ja  |
| Multipath Technologie | multipath | int | isys_ldev_multipath__id | Ja  |
| Tierklasse | tierclass | int | isys_tierclass__id | Ja  |
| Logische Geräte (Client) | ldev_clients | int | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| LUN | lun | text | | Oui |
| taille du segment (kB) | segment_size | float | | Oui |
| unité de mémoire | unit | int | isys_memory_unit__id | Oui |
| capacity | double | | Oui |
| connected_devices | int | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | Oui |
| chemins d'accès | paths | texte | | oui |
| technologie multipath | multipath | int | isys_ldev_multipath__id | Oui |
| classe animale | tierclass | int | isys_tierclass__id | oui |
| Périphériques logiques (client) | ldev_clients | int | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | Oui |
| description | text_area | | Oui |

### Logische Geräte (Client) (C__CATG__LDEV_CLIENT)

### Périphériques logiques (client) (C__CATG__LDEV_CLIENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Pfad | paths | int |     | Ja  |
| Logische Geräte (LDEV Server) | assigned_ldevserver | int | isys_catg_sanpool_list__id | Ja  |
| Primärer Pfad | primary_path | int |     | Ja  |
| Multipath Technologie | multipath | int | isys_ldev_multipath__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| chemin | paths | int | | Oui |
| assigned_ldevserver | int | isys_catg_sanpool_list__id | Oui |
| chemin primaire | primary_path | int | | Oui |
| technologie multipath | multipath | int | isys_ldev_multipath__id | Oui |
| description | text_area | | Oui |

### Hostadapter (HBA) (C__CATG__HBA)

### Adaptateur hôte (HBA) (C__CATG__HBA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys_hba_type__id | Ja  |
| Hersteller | manufacturer | int | isys_controller_manufacturer__id | Ja  |
| Modell | model | int | isys_controller_model__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type | int | isys_hba_type__id | Oui |
| manufacturer | manufacturer | int | isys_controller_manufacturer__id | Oui |
| modèle | model | int | isys_controller_model__id | Oui |
| description | text_area | | Oui |

### Cluster (C__CATG__CLUSTER_ROOT)

### Cluster (C__CATG__CLUSTER_ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Ja  |
| Verwaltungsinstanz | administration_service | text |     | Ja  |
| Clustermitglieder | cluster_members | text |     | Ja  |
| Clusterdienstzuweisung | cluster_service | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| quorum | quorum | int | | Oui |
| administration_service | texte | | Oui |
| membres du cluster | cluster_members | text | | Oui |
| attribution de service de cluster | cluster_service | texte | | Oui |
| description | text_area | | Oui |

### Cluster (C__CATG__CLUSTER)

### Cluster (C__CATG__CLUSTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Ja  |
| Verwaltungsinstanz | administration_service | text |     | Ja  |
| Clustermitglieder | cluster_members | text |     | Ja  |
| Clusterdienstzuweisung | cluster_service | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| quorum | quorum | int | | Oui |
| administration_service | texte | | Oui |
| membres du cluster | cluster_members | text | | Oui |
| attribution de service de cluster | cluster_service | texte | | Oui |
| description | text_area | | Oui |

### Freigabe (C__CATG__SHARES)

### Partage (C__CATG__SHARES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Freigabename | title | text |     | Ja  |
| UNC-Pfad | unc_path | text |     | Ja  |
| Laufwerk | volume | int | isys_catg_drive_list__id | Ja  |
| Lokaler Pfad | path | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nom de partage | title | text | | Oui |
| chemin UNC | unc_path | texte | | Oui |
| lecteur | volume | int | isys_catg_drive_list__id | Oui |
| chemin local | path | texte | | oui |
| description | text_area | | Oui |

### Clusterdienstzuweisung (C__CATG__CLUSTER_SERVICE)

### Allocation de service de cluster (C__CATG__CLUSTER_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_cluster_type__id | Ja  |
| Clusterdienst | cluster_service | int | isys_connection__id | Ja  |
| Hostadressen | hostaddresses | int | isys_catg_cluster_service_list__id | Ja  |
| Laufwerke | drives | int | isys_catg_cluster_service_list__id | Ja  |
| Freigaben | shares | int |     | Ja  |
| Läuft auf | runs_on | int |     | Ja  |
| Standard Server | default_server | int |     | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_cluster_type__id | Oui |
| service de cluster | cluster_service | int | isys_connection__id | oui |
| adresses d'hôtes | hostaddresses | int | isys_catg_cluster_service_list__id | Oui |
| lecteurs | drives | int | isys_catg_cluster_service_list__id | oui |
| partages | shares | int | | Oui |
| runs_on | int | | Oui |
| serveur par défaut | default_server | int | | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| description | text_area | | Oui |

### Clustermitglieder (C__CATG__CLUSTER_MEMBERS)

### Membres du cluster (C__CATG__CLUSTER_MEMBERS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Clustermitglied | member | int | isys_connection__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| membre du cluster | membre | int | isys_connection__id | Oui |

### Clustermitgliedschaften (C__CATG__CLUSTER_MEMBERSHIPS)

### Adhésions aux clusters (C__CATG__CLUSTER_MEMBERSHIPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Cluster | connected_object | int | isys_connection__isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| cluster | connected_object | int | isys_connection__isys_obj__id | Oui |

### Rechenressourcen (C__CATG__COMPUTING_RESOURCES)

### Ressources de calcul (C__CATG__COMPUTING_RESOURCES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| RAM | ram | float |     | Ja  |
| Speicher-Einheit | ram_unit | int | isys_memory_unit__id | Ja  |
| CPU-Frequenz | cpu | float |     | Ja  |
| CPU-Frequenz Einheit | cpu_unit | int | isys_frequency_unit__id | Ja  |
| Festplattenplatz | disc_space | float |     | Ja  |
| Speicher Einheit | disc_space_unit | int | isys_memory_unit__id | Ja  |
| Netzwerk Bandbreite | network_bandwidth | float |     | Ja  |
| Netzwerk Bandbreiten Einheit | network_bandwidth_unit | int | isys_port_speed__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| RAM | ram | float | | Oui |
| unité de mémoire | ram_unit | int | isys_memory_unit__id | Oui |
| fréquence CPU | cpu | float | | oui |
| unité de fréquence CPU | cpu_unit | int | isys_frequency_unit__id | Oui |
| espace disque | disc_space | float | | Oui |
| unité de mémoire | disc_space_unit | int | isys_memory_unit__id | Oui |
| bande passante réseau | network_bandwidth | float | | Oui |
| unité de bande passante réseau | network_bandwidth_unit | int | isys_port_speed__id | Oui |
| description | text_area | | Oui |

### SNMP (C__CATG__SNMP)

### SNMP (C__CATG__SNMP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| SNMP Community | title | int | isys_snmp_community__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| SNMP Community | title | int | isys_snmp_community__id | Oui |
| description | text_area | | Oui |

### Virtueller Host (C__CATG__VIRTUAL_HOST_ROOT)

### Hôte virtuel (C__CATG__VIRTUAL_HOST_ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtueller Host | virtual_host | int |     | Ja  |
| Lizenzserver | license_server | int | isys_connection__id | Ja  |
| Verwaltungsinstanz | administration_service | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| hôte virtuel | virtual_host | int | | Oui |
| serveur de licences | license_server | int | isys_connection__id | Oui |
| administration_service | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Virtueller Host (C__CATG__VIRTUAL_HOST)

### Hôte virtuel (C__CATG__VIRTUAL_HOST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtueller Host | virtual_host | int |     | Ja  |
| Lizenzserver | license_server | int | isys_connection__id | Ja  |
| Verwaltungsinstanz | administration_service | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| hôte virtuel | virtual_host | int | | Oui |
| serveur de licences | license_server | int | isys_connection__id | Oui |
| administration_service | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Gastsysteme (C__CATG__GUEST_SYSTEMS)

### Systèmes invités (C__CATG__GUEST_SYSTEMS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gastsysteme | connected_object | int |     | Ja  |
| Hostname | hostname | text |     | Ja  |
| Läuft auf | runs_on | text |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| systèmes invités | connected_object | int | | Oui |
| nom d'hôte | hostname | text | | Oui |
| runs_on | text | | Oui |

### Virtuelle Maschine (C__CATG__VIRTUAL_MACHINE__ROOT)

### Machine virtuelle (C__CATG__VIRTUAL_MACHINE__ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtuelle Maschine | virtual_machine | int |     | Ja  |
| Läuft auf Host | hosts | int | isys_connection__id | Ja  |
| Virtualisierungs-System | system | int | isys_vm_type__id | Ja  |
| Konfigurations Datei | config_file | text |     | Ja  |
| Host im Cluster | primary | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| machine virtuelle | virtual_machine | int | | Oui |
| hosts | int | isys_connection__id | Oui |
| système de virtualisation | système | int | isys_vm_type__id | Oui |
| fichier de configuration | config_file | text | | Oui |
| hôte dans le cluster | primary | int | | Oui |
| description | text_area | | Oui |

### Virtuelle Switche (C__CATG__VIRTUAL_SWITCH)

### Commutateurs virtuels (C__CATG__VIRTUAL_SWITCH)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Ports | ports | int | isys_virtual_switch_2_port__isys_catg_virtual_switch_list__id | Ja  |
| Portgruppen | portgroup | int | isys_virtual_port_group__isys_catg_virtual_switch_list__id | Ja  |
| Service Console Ports | serviceconsoleports | int | isys_service_console_port__isys_catg_virtual_switch_list__id | Ja  |
| VMKernel Ports | vmkernelports | int | isys_vmkernel_port__isys_catg_virtual_switch_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| ports | ports | int | isys_virtual_switch_2_port__isys_catg_virtual_switch_list__id | Oui |
| groupes de ports | portgroup | int | isys_virtual_port_group__isys_catg_virtual_switch_list__id | Oui |
| Service Console Ports | serviceconsoleports | int | isys_service_console_port__isys_catg_virtual_switch_list__id | Oui |
| ports VMKernel | vmkernelports | int | isys_vmkernel_port__isys_catg_virtual_switch_list__id | oui |
| description | text_area | | Oui |

### Virtuelle Geräte (C__CATG__VIRTUAL_DEVICE)

### Périphériques virtuels (C__CATG__VIRTUAL_DEVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gerätetyp | host_stor_device | int | isys_catg_stor_list__id | Ja  |
| Host LDEV Client | host_ldev_client | int | isys_catg_ldevclient_list__id | Ja  |
| Zugehöriges Storage Gerät (Host) | host_drive | int | isys_catg_drive_list__id | Ja  |
| Zugehöriger Host Port | host_port | int | isys_catg_port_list__id | Ja  |
| Host Schnittstelle | host_interface | int | isys_catg_ui_list__id | Ja  |
| Lokales Storage Gerät | local_stor_device | int | isys_catg_stor_list__id | Ja  |
| Lokaler Port | local_port | int | isys_catg_port_list__id | Ja  |
| Host Ressource | local_interface | int | isys_catg_ui_list__id | Ja  |
| Speichertyp | storage_type | int | isys_virtual_storage_type__id | Ja  |
| Netzwerktyp | network_type | int | isys_virtual_network_type__id | Ja  |
| Switch Port Group | switch_port_group | int |     | Ja  |
| Cluster Speicher | cluster_storage | text |     | Ja  |
| Cluster Interface | cluster_interface | text |     | Ja  |
| Lokales Storage Gerät | disk_image_location | text |     | Ja  |
| Gerätetyp | device_type | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Typ | virtual_network_type | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de périphérique | host_stor_device | int | isys_catg_stor_list__id | Oui |
| hôte client LDEV | host_ldev_client | int | isys_catg_ldevclient_list__id | oui |
| périphérique de stockage associé (hôte) | host_drive | int | isys_catg_drive_list__id | Oui |
| port hôte associé | host_port | int | isys_catg_port_list__id | Oui |
| interface hôte | host_interface | int | isys_catg_ui_list__id | Oui |
| Périphérique de stockage local | local_stor_device | int | isys_catg_stor_list__id | Oui |
| port local | local_port | int | isys_catg_port_list__id | oui |
| ressource hôte | local_interface | int | isys_catg_ui_list__id | oui |
| type de stockage | storage_type | int | isys_virtual_storage_type__id | oui |
| type de réseau | network_type | int | isys_virtual_network_type__id | Oui |
| Switch Port Group | switch_port_group | int | | Oui |
| cluster storage | cluster_storage | text | | Oui |
| interface de cluster | cluster_interface | texte | | Oui |
| périphérique de stockage local | disk_image_location | text | | Oui |
| type de périphérique | device_type | text | | Oui |
| description | text_area | | Oui |
| type | virtual_network_type | text | | Oui |

### Datensicherung (zugewiesene Objekte) (C__CATG__BACKUP__ASSIGNED_OBJECTS)

### Sauvegarde des données (objets assignés) (C__CATG__BACKUP__ASSIGNED_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Sichert | backup | int |     | Ja  |
| Art des Backups | backup_type | int | isys_backup_type__id | Ja  |
| Zyklus | cycle | int | isys_backup_cycle__id | Ja  |
| Pfad für zu sichernde Daten | path_to_save | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| sauvegarde | int | | Oui |
| type de sauvegarde | backup_type | int | isys_backup_type__id | Oui |
| cycle | int | isys_backup_cycle__id | Oui |
| chemin pour données à sauvegarder | path_to_save | text | | Oui |
| description | text_area | | Oui |

### Gruppenmitgliedschaft (C__CATG__GROUP_MEMBERSHIPS)

### Appartenance à un groupe (C__CATG__GROUP_MEMBERSHIPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gruppe | connected_object | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| groupe | connected_object | int | | Oui |
| description | text_area | | Oui |

### Service Komponenten (C__CATG__IT_SERVICE_COMPONENTS)

### Composants du service (C__CATG__IT_SERVICE_COMPONENTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes Objekt | connected_object | int | isys_connection__id | Ja  |
| Objekttyp | objtype | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet assigné | connected_object | int | isys_connection__id | Oui |
| type d'objet | objtype | int | | Oui |

### Service Logbuch (C__CATG__ITS_LOGBOOK)

### Journal de service (C__CATG__ITS_LOGBOOK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datum | date | date_time |     | Ja  |
| Objekt | object | int |     | Ja  |
| Ereignis | event | int | isys_logbook_event__id | Ja  |
| Quelle | source | int |     | Ja  |
| Benutzer | user | int |     | Ja  |
| Objekttyp | object_type | text |     | Ja  |
| Kategorie | category | text |     | Ja  |
| Alarmlevel | alert_level | text | isys_logbook_level__id | Ja  |
| Benutzer | user_name_static | text |     | Ja  |
| Ereignis | event_static | text |     | Ja  |
| Kommentar | comment | text |     | Ja  |
| Änderungen | changes | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| date | date_time | | Oui |
| objet | object | int | | Oui |
| événement | event | int | isys_logbook_event__id | Oui |
| source | int | | Oui |
| utilisateur | int | | Oui |
| type d'objet | object_type | texte | | oui |
| catégorie | category | text | | Oui |
| niveau d'alarme | alert_level | texte | isys_logbook_level__id | Oui |
| utilisateur | nom_utilisateur_static | texte | | oui |
| événement | event_static | texte | | oui |
| commentaire | texte | | Oui |
| modifications | changes | text | | Oui |
| description | text_area | | Oui |

### Servicezuweisung (C__CATG__IT_SERVICE)

### Assignation de service (C__CATG__IT_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service | connected_object | int |     | Ja  |
| SYSID | sysid | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| service | connected_object | int | | Oui |
| SYSID | sysid | text | | Oui |

### Beziehungen (C__CATG__RELATION)

### relations (C__CATG__RELATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys_obj__id | Nein |
| Object 2 | object2 | int | isys_obj__id | Nein |
| Beziehungsart | relation_type | int | isys_relation_type__id | Nein |
| Gewichtung | weighting | int | isys_weighting__id | Nein |
| Service | itservice | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys_obj__id | Non |
| Object 2 | object2 | int | isys_obj__id | Non |
| type de relation | relation_type | int | isys_relation_type__id | Non |
| pondération | weighting | int | isys_weighting__id | Non |
| service | itservice | int | isys_obj__id | oui |
| description | text_area | | oui |

### Service Beziehung (C__CATG__IT_SERVICE_RELATIONS)

### Relation de service (C__CATG__IT_SERVICE_RELATIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys_obj__id | Nein |
| Object 2 | object2 | int | isys_obj__id | Nein |
| Beziehungsart | relation_type | int | isys_relation_type__id | Nein |
| Gewichtung | weighting | int | isys_weighting__id | Nein |
| Service | itservice | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys_obj__id | Non |
| Object 2 | object2 | int | isys_obj__id | Non |
| type de relation | relation_type | int | isys_relation_type__id | Non |
| pondération | weighting | int | isys_weighting__id | Non |
| service | itservice | int | isys_obj__id | oui |
| description | text_area | | oui |

### Datenbankzuweisung (C__CATG__DATABASE_ASSIGNMENT)

### Attribution de base de données (C__CATG__DATABASE_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| verwendetes Datenbankschema | database_assignment | int |     | Nein |
| Software läuft auf | runs_on | int |     | Nein |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| schéma de base de données utilisé | database_assignment | int | | Non |
| logiciel fonctionne sur | runs_on | int | | Non |
| description | text_area | | Oui |

### Service Typ (C__CATG__ITS_TYPE)

### Type de service (C__CATG__ITS_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | its_type | int | isys_its_type__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | its_type | int | isys_its_type__id | oui |
| description | text_area | | Oui |

### Passwörter (C__CATG__PASSWD)

### Mots de passe (C__CATG__PASSWD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Benutzername | username | text |     | Ja  |
| Passwort | password | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| nom d'utilisateur | username | text | | Oui |
| mot de passe | password | text | | oui |
| description | text_area | | Oui |

### SOA-Stacks (C__CATG__SOA_STACKS)

### Piles SOA (C__CATG__SOA_STACKS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| SOA-Stacks | soa_stack_object | int |     | Ja  |
| SOA-Komponente | soa_stack_components | int |     | Ja  |
| Service | soa_stack_it_services | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| SOA Stacks | soa_stack_object | int | | Oui |
| composant SOA | soa_stack_components | int | | Oui |
| service | soa_stack_it_services | int | | Oui |
| description | text_area | | Oui |

### Status-Planung (C__CATG__PLANNING)

### Planification de l'état (C__CATG__PLANNING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| CMDB-Status | cmdb_status | int | isys_cmdb_status__id | Ja  |
| Gültigkeitszeitraum von | start | date |     | Ja  |
| Gültigkeitszeitraum bis | end | date |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| statut CMDB | cmdb_status | int | isys_cmdb_status__id | Oui |
| période de validité de | start | date | | oui |
| période de validité jusqu'à | end | date | | oui |
| description | text_area | | Oui |

### Verknüpfte Karten (C__CATG__ASSIGNED_CARDS)

### Cartes liées (C__CATG__ASSIGNED_CARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verknüpfte Karten | connected_obj | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| connected_obj | int | | Oui |

### SIM-Karte (C__CATG__SIM_CARD)

### Carte SIM (C__CATG__SIM_CARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_cp_contract_type__id | Ja  |
| verknüpftes Mobiltelefon | assigned_mobile | int |     | Ja  |
| Netzanbieter | network_provider | int | isys_network_provider__id | Ja  |
| Telefonrate | telephone_rate | int | isys_telephone_rate__id | Ja  |
| Anfangsdatum | start | date |     | Ja  |
| Enddatum | end | date |     | Ja  |
| Datum für Benachrichtigung | threshold_date | date |     | Ja  |
| Kartennummer | card_no | text |     | Ja  |
| Telefonnummer | phone_no | text |     | Ja  |
| Kundennummer | client_no | text |     | Ja  |
| Pin | pin | text |     | Ja  |
| Pin 2 | pin2 | text |     | Ja  |
| PUK | puk | text |     | Ja  |
| PUK2 | puk2 | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Twin-Karte | twincard | int |     | Ja  |
| Kartennummer (Twin-Karte) | tc_card_no | text |     | Ja  |
| Telefonnummer (Twin-Karte) | tc_phone_no | text |     | Ja  |
| Pin (Twin-Karte) | tc_pin | text |     | Ja  |
| Pin 2 (Twin-Karte) | tc_pin2 | text |     | Ja  |
| PUK (Twin-Karte) | tc_puk | text |     | Ja  |
| PUK2 (Twin-Karte) | tc_puk2 | text |     | Ja  |
| Seriennummer (Twin-Karte) | tc_serial_no | text |     | Ja  |
| Beschreibung (Twin-Karte) (Twin-Karte) | optional_info | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_cp_contract_type__id | Oui |
| mobile associé | assigned_mobile | int | | Oui |
| fournisseur de réseau | network_provider | int | isys_network_provider__id | Oui |
| telephone_rate | int | isys_telephone_rate__id | Oui |
| date de début | start | date | | oui |
| date de fin | end | date | | oui |
| date de notification | threshold_date | date | | oui |
| numéro de carte | card_no | texte | | oui |
| numéro de téléphone | phone_no | text | | Oui |
| numéro de client | client_no | text | | Oui |
| Pin | pin | text | | Oui |
| Pin 2 | pin2 | text | | Oui |
| PUK | puk | texte | | Oui |
| PUK2 | puk2 | texte | | Oui |
| numéro de série | serial | text | | Oui |
| carte jumelée | twincard | int | | Oui |
| numéro de carte (carte jumelle) | tc_card_no | text | | Oui |
| numéro de téléphone (carte twin) | tc_phone_no | text | | Oui |
| Pin (carte jumelée) | tc_pin | text | | Oui |
| Pin 2 (carte Twin) | tc_pin2 | text | | Oui |
| PUK (carte Twin) | tc_puk | text | | Oui |
| PUK2 (carte Twin) | tc_puk2 | text | | Oui |
| numéro de série (carte Twin) | tc_serial_no | text | | Oui |
| description (carte twin) (carte twin) | optional_info | text_area | | Oui |
| description | text_area | | Oui |

### TSI-Service (C__CATG__TSI_SERVICE)

### Service TSI (C__CATG__TSI_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| TSI-Service ID | tsi_service_id | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| ID service TSI | tsi_service_id | text | | Oui |
| description | text_area | | Oui |

### Prüfung (C__CATG__AUDIT)

### Examen (C__CATG__AUDIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys_catg_audit_type__id | Ja  |
| Beauftragt | commission | int | isys_contact__id | Ja  |
| Verantwortlich | responsible | int | isys_contact__id | Ja  |
| Beteiligt | involved | int | isys_contact__id | Ja  |
| Herstellerfrist | period_manufacturer | date |     | Ja  |
| Betreiberfrist | period_operator | date |     | Ja  |
| Durchgeführt | apply | date |     | Ja  |
| Ergebnis | result | text_area |     | Ja  |
| Störungen | fault | text_area |     | Ja  |
| Zwischenfälle | incident | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type | int | isys_catg_audit_type__id | Oui |
| commission | int | isys_contact__id | Oui |
| responsable | responsible | int | isys_contact__id | oui |
| impliqué | involved | int | isys_contact__id | Oui |
| délai fabricant | period_manufacturer | date | | oui |
| délai opérateur | period_operator | date | | oui |
| appliqué | date | | Oui |
| result | text_area | | Oui |
| incident | fault | text_area | | Oui |
| incident | incident | text_area | | Oui |
| description | text_area | | Oui |

### Logischer Standort (C__CATG__LOGICAL_UNIT)

### Emplacement logique (C__CATG__LOGICAL_UNIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | parent | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| parent | int | | Oui |
| description | text_area | | Oui |

### Zugewiesene Endgeräte (C__CATG__ASSIGNED_LOGICAL_UNIT)

### Terminaux attribués (C__CATG__ASSIGNED_LOGICAL_UNIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | assigned_object | int | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | assigned_object | int | isys_obj__id | Oui |

### Zugewiesener Arbeitsplatz (C__CATG__ASSIGNED_WORKSTATION)

### Poste de travail attribué (C__CATG__ASSIGNED_WORKSTATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | parent | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| parent | int | | Oui |
| description | text_area | | Oui |

### Zugewiesene Arbeitsplätze (C__CATG__PERSON_ASSIGNED_WORKSTATION)

### Postes de travail attribués (C__CATG__PERSON_ASSIGNED_WORKSTATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Arbeitsplätze | assigned_workstations | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| postes de travail assignés | assigned_workstations | int | | Oui |
| description | text_area | | Oui |

### Vertragszuweisung (C__CATG__CONTRACT_ASSIGNMENT)

### Attribution du contrat (C__CATG__CONTRACT_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesener Vertrag | connected_contract | int | isys_connection__id | Ja  |
| Vertragsbeginn | contract_start | date |     | Ja  |
| Vertragsende | contract_end | date |     | Ja  |
| Reaktionszeiten | reaction_rate | int | isys_contract_reaction_rate__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| contrat assigné | connected_contract | int | isys_connection__id | Oui |
| début de contrat | contract_start | date | | oui |
| fin de contrat | contract_end | date | | oui |
| temps de réaction | reaction_rate | int | isys_contract_reaction_rate__id | Oui |
| description | text_area | | Oui |

### Stacking (C__CATG__STACKING)

### Empilage (C__CATG__STACKING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Chassis | assigned_object | int | isys_connection__id | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Chassis | assigned_object | int | isys_connection__id | Oui |

### E-Mail Adressen (C__CATG__MAIL_ADDRESSES)

### Adresses e-mail (C__CATG__MAIL_ADDRESSES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| E-Mail Adresse | title | text |     | Ja  |
| Primäre E-Mail-Adresse | primary_mail | text |     | Ja  |
| Primär | primary | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| adresse e-mail | title | text | | Oui |
| adresse e-mail primaire | primary_mail | text | | Oui |
| primaire | primaire | int | | Oui |
| description | text_area | | Oui |

### CUCM VoIP Telefon (C__CATG__VOIP_PHONE)

### CUCM Téléphone VoIP (C__CATG__VOIP_PHONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Geräte Protokoll | device_protocol | text |     | Ja  |
| Beschreibung | description2 | text |     | Ja  |
| Geräte-Pool | device_pool | text |     | Ja  |
| Gemeinsame Gerätekonfiguration | common_configuration | text |     | Ja  |
| Tastenbelegung | button_template | int | isys_voip_phone_button_template__id | Ja  |
| Belegung der programmierbaren Tasten (Softkeys) | softkey_template | int | isys_voip_phone_softkey_template__id | Ja  |
| Gemeinsame Geräteprofil | common_profile | text |     | Ja  |
| Anrufauswahlzone | calling_search_space | text |     | Ja  |
| AAR Anrufauswahlzone | aar_calling_search_space | text |     | Ja  |
| Medienressourcen Gruppenliste | media_resource_group_list | text |     | Ja  |
| Benutzer MOH Audioquelle | user_hold_moh_audio_source | text |     | Ja  |
| Netzwerk MOH Audioquelle | network_hold_moh_audio_source | text |     | Ja  |
| Standort | location | text |     | Ja  |
| AAR Gruppe | aar_group | text |     | Ja  |
| Benutzer-Gebietsschema | user_locale | text |     | Ja  |
| Netzwerk Gebietsschema | network_locale | text |     | Ja  |
| Eingebaute Netzwerkbrücke | built_in_bridge | text |     | Ja  |
| Privatsphäre | privacy | text |     | Ja  |
| Device Mobility Mode | device_mobility_mode | text |     | Ja  |
| Eigentümer Benutzer-ID | owner_user_id | text |     | Ja  |
| Phone suite | phone_suite | text |     | Ja  |
| Service-Bereitstellung | services_provisioning | text |     | Ja  |
| Load name | load_name | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| protocole de périphérique | device_protocol | text | | Oui |
| description2 | text | | Oui |
| pool de périphériques | device_pool | text | | Oui |
| common_configuration | text | | Oui |
| configuration des boutons | button_template | int | isys_voip_phone_button_template__id | Oui |
| modèle de touches programmables (softkeys) | softkey_template | int | isys_voip_phone_softkey_template__id | Oui |
| profil commun de l'appareil | common_profile | text | | Oui |
| zone de sélection d'appel | calling_search_space | text | | Oui |
| AAR zone de sélection d'appel | aar_calling_search_space | text | | Oui |
| liste de groupe de ressources média | media_resource_group_list | text | | Oui |
| utilisateur source audio MOH | user_hold_moh_audio_source | text | | Oui |
| réseau source audio MOH | network_hold_moh_audio_source | text | | Oui |
| site | location | text | | Oui |
| groupe AAR | aar_group | texte | | Oui |
| user_locale | text | | Oui |
| réseau_locale | texte | | Oui |
| pont réseau intégré | built_in_bridge | text | | Oui |
| privacy | text | | Oui |
| Device Mobility Mode | device_mobility_mode | text | | Oui |
| ID utilisateur propriétaire | owner_user_id | text | | Oui |
| Phone suite | phone_suite | text | | Oui |
| fourniture de services | services_provisioning | texte | | Oui |
| Load name | load_name | text | | Oui |
| description | text_area | | Oui |

### CUCM VoIP Leitung (C__CATG__VOIP_PHONE_LINE)

### Ligne CUCM VoIP (C__CATG__VOIP_PHONE_LINE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verzeichnis-Nummer | directory_number | text |     | Ja  |
| Route-Partition | route_partition | text |     | Ja  |
| Beschreibung | description2 | text |     | Ja  |
| Alarmierung Name | alerting_name | text |     | Ja  |
| ASCII Alarmierung Name | ascii_alerting_name | text |     | Ja  |
| Telefon Steuerung via CTI erlauben | allow_cti_control | int |     | Ja  |
| Verbundene Geräte | associated_devices | int |     | Ja  |
| Voice-Mail Profil | voice_mail_profile | text |     | Ja  |
| Anrufauswahlzone | calling_search_space | text |     | Ja  |
| Präsenzgruppe | presence_group | text |     | Ja  |
| Benutzer MOH Audioquelle | user_hold_moh_audio_source | text |     | Ja  |
| Netzwerk MOH Audioquelle | network_hold_moh_audio_source | text |     | Ja  |
| Automatische Antwort | auto_answer | text |     | Ja  |
| Alle Anrufe umleiten | call_forward_all | text |     | Ja  |
| Sekundäre Anrufauswahlzone für Anrufumleitung | sec_calling_search_space | text |     | Ja  |
| Umleiten bei besetzt intern | forward_busy_internal | text |     | Ja  |
| Umleiten bei besetzt extern | forward_busy_external | text |     | Ja  |
| Umleiten bei keiner Antwort intern | forward_no_answer_internal | text |     | Ja  |
| Umleiten bei keiner Antwort extern | forward_no_answer_external | text |     | Ja  |
| Umleiten bei keiner Berichterstattung intern | forward_no_coverage_internal | text |     | Ja  |
| Umleiten bei keiner Berichterstattung extern | forward_no_coverage_external | text |     | Ja  |
| Umleitung bei CTI Fehler | forward_on_cti_fail | text |     | Ja  |
| Umleitung bei unregistriert intern | forward_unregistered_internal | text |     | Ja  |
| Umleitung bei unregistriert extern | forward_unregistered_external | text |     | Ja  |
| Klingeldauer bei keiner Antwort | no_answer_ring_duration | text |     | Ja  |
| Anrufübernahmegruppe | call_pickup_group | text |     | Ja  |
| Display | display | text |     | Ja  |
| ASCII Display | ascii_display | text |     | Ja  |
| Titel der Leitung | line_text_label | text |     | Ja  |
| ASCII Titel der Leitung | ascii_line_text_label | text |     | Ja  |
| Visual message waiting indicator policy | visual_message_indicator | text |     | Ja  |
| Audible message waiting indicator policy | audible_message_indicator | text |     | Ja  |
| Klingel-Einstellung (Telefon im Leerlauf) | ring_settings_idle | text |     | Ja  |
| Klingel-Einstellung (Telefon Aktiv) | ring_settings_active | text |     | Ja  |
| Call pickup group audio alert setting (phone idle) | call_pickup_group_idle | text |     | Ja  |
| Call pickup group audio alert setting (phone active) | call_pickup_group_active | text |     | Ja  |
| Aufnahmeoption | recording_option | text |     | Ja  |
| Aufnahmeprofil | recording_profile | text |     | Ja  |
| Monitoring calling search space | monitoring_css | text |     | Ja  |
| Verpasste Anrufe mitloggen | log_missed_calls | int |     | Ja  |
| Externe Rufnummer Maske | external_phone_number_mask | text |     | Ja  |
| Maximale Anzahl an Anrufen | max_number_of_calls | text |     | Ja  |
| "Besetzt" Auslöser | busy_trigger | text |     | Ja  |
| Name des Anrufers | caller_name | int |     | Ja  |
| Nummer des Anrufers | caller_number | int |     | Ja  |
| Umgeleitete Nummer | redirected_number | int |     | Ja  |
| Gewählte Nummer | dialed_number | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro de répertoire | directory_number | text | | Oui |
| route_partition | text | | Oui |
| description2 | text | | Oui |
| nom d'alerte | alerting_name | text | | Oui |
| Nom d'alerte ASCII | nom_alerte_ascii | texte | | Oui |
| allow_cti_control | int | | Oui |
| appareils connectés | associated_devices | int | | Oui |
| profil de messagerie vocale | voice_mail_profile | text | | Oui |
| zone de sélection d'appel | calling_search_space | text | | Oui |
| groupe de présence | presence_group | text | | Oui |
| utilisateur source audio MOH | user_hold_moh_audio_source | text | | Oui |
| réseau source audio MOH | network_hold_moh_audio_source | text | | Oui |
| réponse automatique | auto_answer | text | | Oui |
| Renvoyer tous les appels | call_forward_all | text | | Oui |
| zone de sélection d'appel secondaire pour le renvoi d'appel | sec_calling_search_space | text | | Oui |
| forward_busy_internal | text | | Oui |
| forward_busy_external | text | | Oui |
| forward_no_answer_internal | text | | Oui |
| redirection sans réponse externe | forward_no_answer_external | text | | Oui |
| forward_no_coverage_internal | text | | Oui |
| forward_no_coverage_external | text | | Oui |
| redirection en cas d'erreur CTI | forward_on_cti_fail | text | | Oui |
| forward_unregistered_internal | text | | Yes | redirection en cas de non-enregistrement interne
| forward_unregistered_external | text | | Oui |
| durée de la sonnerie en l'absence de réponse | no_answer_ring_duration | text | | Oui |
| groupe de transfert d'appel | call_pickup_group | text | | Oui |
| Display | display | text | | Oui |
| affichage ASCII | ascii_display | texte | | Oui |
| titre de la ligne | line_text_label | text | | Oui |
| ASCII Titre de la ligne | ascii_line_text_label | text | | Oui |
| Visual message waiting indicator policy | visual_message_indicator | text | Oui |
| Audible message waiting indicator policy | audible_message_indicator | text | | Oui |
| réglage de la sonnerie (téléphone au repos) | ring_settings_idle | text | | Oui |
| réglage de la sonnerie (téléphone actif) | ring_settings_active | text | | Oui |
| Call pickup group audio alert setting (phone idle) | call_pickup_group_idle | text | | Yes |
| Call pickup group audio alert setting (phone active) | call_pickup_group_active | text | | Yes |
| option d'enregistrement | recording_option | text | | Oui |
| profil d'enregistrement | recording_profile | texte | | Oui |
| espace de recherche d'appels de surveillance | monitoring_css | text | | Oui |
| loger les appels manqués | log_missed_calls | int | | Oui |
| masque de numérotation externe | external_phone_number_mask | text | | Oui |
| nombre maximal d'appels | max_number_of_calls | text | | Oui |
| déclencheur "occupé" | busy_trigger | text | | Oui |
| nom de l'appelant | caller_name | int | | Oui |
| numéro de l'appelant | caller_number | int | | Oui |
| numéro redirigé | redirected_number | int | | Oui |
| numéro composé | dialed_number | int | | Oui |
| description | text_area | | Oui |

### Telefon/Fax (C__CATG__TELEPHONE_FAX)

### Téléphone/Fax (C__CATG__TELEPHONE_FAX)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_telephone_fax_type__id | Ja  |
| Telefonnummer | telephone_number | text |     | Ja  |
| Faxnummer | fax_number | text |     | Ja  |
| Nebenstelle | extension | text |     | Ja  |
| Pin-Code | pincode | text |     | Ja  |
| IMEI-Nummer | imei | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_telephone_fax_type__id | Oui |
| numéro de téléphone | telephone_number | text | | Oui |
| numéro de fax | fax_number | text | | Oui |
| extension | texte | | Oui |
| code pin | pincode | text | | Oui |
| numéro IMEI | imei | texte | | Oui |
| description | text_area | | Oui |

### Smartcard Zertifikat (C__CATG__SMARTCARD_CERTIFICATE)

### Certificat de carte à puce (C__CATG__SMARTCARD_CERTIFICATE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kartennummer | cardnumber | text |     | Ja  |
| Sperrkennwort | barring_password | text |     | Ja  |
| PIN-Nr. | pin_nr | text |     | Ja  |
| Referenznummer | reference | text |     | Ja  |
| Läuft aus am | expires_on | date |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro de carte | cardnumber | text | | Oui |
| mot de passe de blocage | barring_password | text | | Oui |
| n° PIN | pin_nr | text | | Oui |
| numéro de référence | reference | text | | Oui |
| expires_on | date | | oui |
| description | text_area | | Oui |

### Freigabenzugriff (C__CATG__SHARE_ACCESS)

### Accès au partage (C__CATG__SHARE_ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gewähltes Objekt | assigned_objects | int | isys_connection__id | Ja  |
| Mountpoint | mountpoint | text |     | Ja  |
| Freigabename | shares | int | isys_catg_shares_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet sélectionné | assigned_objects | int | isys_connection__id | Oui |
| point de montage | mountpoint | texte | | oui |
| nom de partage | shares | int | isys_catg_shares_list__id | Oui |
| description | text_area | | Oui |

### Zertifikat (C__CATG__CERTIFICATE)

### Certificat (C__CATG__CERTIFICATE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_certificate_type__id | Ja  |
| Erstelldatum | create_date | date |     | Ja  |
| Ablaufdatum | expire_date | date |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_certificate_type__id | Oui |
| date de création | create_date | date | | oui |
| date d'expiration | expire_date | date | | oui |
| description | text_area | | Oui |

### SLA (C__CATG__SLA)

### SLA (C__CATG__SLA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service-ID | service_id | text |     | Ja  |
| SLA Servicelevel | service_level | int |     | Ja  |
| SLA Servicelevel (Dialog) | service_level_dialog | int | isys_sla_service_level__id | Ja  |
| Wochentag | days | int |     | Ja  |
| Montag | monday_time | text |     | Ja  |
| Dienstag | tuesday_time | text |     | Ja  |
| Mittwoch | wednesday_time | text |     | Ja  |
| Donnerstag | thursday_time | text |     | Ja  |
| Freitag | friday_time | text |     | Ja  |
| Samstag | saturday_time | text |     | Ja  |
| Sonntag | sunday_time | text |     | Ja  |
| Reaktionszeit | reaction_time | int |     | Ja  |
| Reaktionszeit Einheit | reaction_time_unit | int | isys_unit_of_time__id | Ja  |
| Wiederherstellungszeit | recovery_time | int |     | Ja  |
| Wiederherstellungszeit Einheit | recovery_time_unit | int | isys_unit_of_time__id | Ja  |
| Kalender | calendar | int | isys_calendar__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| ID service | service_id | text | | Oui |
| niveau de service SLA | service_level | int | | Oui |
| SLA niveau de service (dialogue) | service_level_dialog | int | isys_sla_service_level__id | Oui |
| jour de la semaine | days | int | | oui |
| lundi | monday_time | text | | oui |
| mardi | tuesday_time | text | | Oui |
| mercredi | wednesday_time | text | | Oui |
| jeudi | thursday_time | text | | Oui |
| vendredi | friday_time | text | | Oui |
| samedi | saturday_time | text | | Oui |
| dimanche | sunday_time | text | | Oui |
| temps de réaction | reaction_time | int | | Oui |
| temps de réaction unité | reaction_time_unit | int | isys_unit_of_time__id | Oui |
| temps de récupération | recovery_time | int | | Oui |
| temps de récupération unité | recovery_time_unit | int | isys_unit_of_time__id | Oui |
| calendrier | calendar | int | isys_calendar__id | Oui |
| description | text_area | | Oui |

### LDAP (C__CATG__LDAP_DN)

### LDAP (C__CATG__LDAP_DN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Distinguished Name (DN) | title | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Distinguished Name (DN) | title | text | | Oui |
| description | text_area | | Oui |

### Host Definition (C__CATG__NAGIOS)

### Définition de l'hôte (C__CATG__NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is_exportable | int |     | Ja  |
| Exportkonfiguration | export_host | int | isys_monitoring_export_config__id | Ja  |
| Templates | host_template | text |     | Ja  |
| host_name | host_name | text |     | Ja  |
| host_name_selection | host_name_selection | int |     | Ja  |
| Hostname | name1 | text |     | Ja  |
| Alias | alias | text |     | Ja  |
| IP-Adresse | address | int | isys_catg_ip_list__id | Ja  |
| address_selection | address_selection | int |     | Ja  |
| Weitere Objekte als parent wählen | parents | text |     | Ja  |
| Folgende Objekte als parent benutzen? | is_parent | int |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | host_notification_options | text |     | Ja  |
| notification_interval | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| initial_state | initial_state | text |     | Ja  |
| obsess_over_host | obsess_over_host | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| event_handler_parameters | event_handler_parameters | text |     | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| vrml_image | vrml_image | text |     | Ja  |
| statusmap_image | statusmap_image | text |     | Ja  |
| 2d_coords | twod_coords | text |     | Ja  |
| 3d_coords | threed_coords | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Exporter cette configuration | is_exportable | int | | Oui |
| configuration d'exportation | export_host | int | isys_monitoring_export_config__id | Oui |
| modèles | host_template | texte | | oui |
| nom_hôte | nom_hôte | texte | | Oui |
| sélection_nom_hôte | sélection_nom_hôte | int | | Oui |
| nom d'hôte | nom1 | texte | | Oui |
| alias | alias | text | | Oui |
| adresse IP | address | int | isys_catg_ip_list__id | Oui |
| address_selection | address_selection | int | | Oui |
| Choisir d'autres objets comme parent | parents | text | | Oui |
| Utiliser les objets suivants comme parent ? | is_parent | int | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | host_notification_options | text | | Oui |
| notification_interval | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| initial_state | initial_state | text | | Oui |
| obsess_over_host | obsess_over_host | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| event_handler_parameters | event_handler_parameters | text | | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| escalations | escalations | int | | Oui |
| action_url | action_url | texte | | Oui |
| icon_image | icon_image | texte | | Oui |
| icon_image_alt | icon_image_alt | text | | Oui |
| vrml_image | vrml_image | texte | | Oui |
| statusmap_image | statusmap_image | text | | Oui |
| 2d_coords | twod_coords | texte | | Oui |
| 3d_coords | threed_coords | texte | | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| nom_affichage | nom_affichage | texte | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| nom | nom2 | texte | | oui |
| custom_object_vars | custom_object_vars | text_area | Oui |
| description | text_area | | Oui |

### Nagios Gruppe (C__CATG__NAGIOS_GROUP)

### Groupe Nagios (C__CATG__NAGIOS_GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is_exportable | int |     | Ja  |
| Gruppen-Typ | type | int |     | Ja  |
| display_name | name | text |     | Ja  |
| display_name_selection | name_selection | int |     | Ja  |
| Alias | alias | text |     | Ja  |
| Notes | notes | text |     | Ja  |
| Notes URL | notes_url | text |     | Ja  |
| Action URL | action_url | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Exporter cette configuration | is_exportable | int | | Oui |
| type de groupe | type | int | | Oui |
| display_name | nom | texte | | Oui |
| display_name_selection | name_selection | int | | Oui |
| alias | alias | texte | | Oui |
| Notes | notes | texte | | Oui |
| Notes URL | notes_url | texte | | Oui |
| Action URL | action_url | text | | Oui |
| description | text_area | | Oui |

### Nagios (Service) (C__CATG__NAGIOS_SERVICE_FOLDER)

### Nagios (Service) (C__CATG__NAGIOS_SERVICE_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv | is_active | int |     | Ja  |
| service_description | service_description | text |     | Ja  |
| Service-Template | template | text |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| notification_interval | notification_interval | int | isys_catg_nagios_service_def_list__id | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | service_notification_options | text |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| is_volatile | is_volatile | int |     | Ja  |
| obsess_over_service | obsess_over_service | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | is_exportable | int |     | Ja  |
| escalations | escalations | int | isys_catg_nagios_service_def_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| actif | is_active | int | | Oui |
| service_description | service_description | text | | Oui |
| modèle de service | template | text | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| notification_interval | notification_interval | int | isys_catg_nagios_service_def_list__id | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| initial_state | initial_state | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | service_notification_options | text | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| is_volatile | is_volatile | int | | Oui |
| obsess_over_service | obsess_over_service | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | is_exportable | int | | Oui |
| escalations | escalations | int | isys_catg_nagios_service_def_list__id | Oui |
| description | text_area | | Oui |
| action_url | action_url | text | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_ancienne | icon_image_ancienne | texte | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Nagios (Service TPL) (C__CATG__NAGIOS_SERVICE_TPL_FOLDER)

### Nagios (Service TPL) (C__CATG__NAGIOS_SERVICE_TPL_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| check_command | check_command | int | isys_catg_nagios_service_tpl_def_list__id | Ja  |
| name | name | text |     | Ja  |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| notification_interval | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | service_notification_options | text |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| is_volatile | is_volatile | int |     | Ja  |
| obsess_over_service | obsess_over_service | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | is_exportable | int |     | Ja  |
| escalations | escalations | int | isys_catg_nagios_service_tpl_def_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| check_command | check_command | int | isys_catg_nagios_service_tpl_def_list__id | Oui |
| name | name | text | | Oui |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| notification_interval | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| initial_state | initial_state | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | service_notification_options | text | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| is_volatile | is_volatile | int | | Oui |
| obsess_over_service | obsess_over_service | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | is_exportable | int | | Oui |
| escalations | escalations | int | isys_catg_nagios_service_tpl_def_list__id | Oui |
| description | text_area | | Oui |
| action_url | action_url | text | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_ancienne | icon_image_ancienne | texte | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Service definition (C__CATG__NAGIOS_SERVICE_DEF)

### Définition du service (C__CATG__NAGIOS_SERVICE_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv | is_active | int |     | Ja  |
| service_description | service_description | text |     | Ja  |
| Service-Template | template | text |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| notification_interval | notification_interval | int | isys_catg_nagios_service_def_list__id | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | service_notification_options | text |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| is_volatile | is_volatile | int |     | Ja  |
| obsess_over_service | obsess_over_service | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | is_exportable | int |     | Ja  |
| escalations | escalations | int | isys_catg_nagios_service_def_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| actif | is_active | int | | Oui |
| service_description | service_description | text | | Oui |
| modèle de service | template | text | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| notification_interval | notification_interval | int | isys_catg_nagios_service_def_list__id | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| initial_state | initial_state | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | service_notification_options | text | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| is_volatile | is_volatile | int | | Oui |
| obsess_over_service | obsess_over_service | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | is_exportable | int | | Oui |
| escalations | escalations | int | isys_catg_nagios_service_def_list__id | Oui |
| description | text_area | | Oui |
| action_url | action_url | text | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_ancienne | icon_image_ancienne | texte | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Rückwärtige Servicezuweisung (C__CATG__NAGIOS_REFS_SERVICES_BACKWARDS)

### Attribution de service arrière (C__CATG__NAGIOS_REFS_SERVICES_BACKWARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned_objects | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objets assignés | assigned_objects | int | | Oui |

### Service-Template definition (C__CATG__NAGIOS_SERVICE_TPL_DEF)

### Définition du modèle de service (C__CATG__NAGIOS_SERVICE_TPL_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| check_command | check_command | int | isys_catg_nagios_service_tpl_def_list__id | Ja  |
| name | name | text |     | Ja  |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| notification_interval | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | service_notification_options | text |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| is_volatile | is_volatile | int |     | Ja  |
| obsess_over_service | obsess_over_service | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | is_exportable | int |     | Ja  |
| escalations | escalations | int | isys_catg_nagios_service_tpl_def_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| check_command | check_command | int | isys_catg_nagios_service_tpl_def_list__id | Oui |
| name | name | text | | Oui |
| check_command_plus | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period+ | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| notification_interval | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period+ | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| initial_state | initial_state | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | service_notification_options | text | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| is_volatile | is_volatile | int | | Oui |
| obsess_over_service | obsess_over_service | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler+ | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | is_exportable | int | | Oui |
| escalations | escalations | int | isys_catg_nagios_service_tpl_def_list__id | Oui |
| description | text_area | | Oui |
| action_url | action_url | text | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_ancienne | icon_image_ancienne | texte | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Zugewiesene Objekte (C__CATG__NAGIOS_SERVICE_REFS_TPL_BACKWARDS)

### Objets assignés (C__CATG__NAGIOS_SERVICE_REFS_TPL_BACKWARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned_objects | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objets assignés | assigned_objects | int | | Oui |

### Nagios (Host TPL) (C__CATG__NAGIOS_HOST_TPL_FOLDER)

### Nagios (Host TPL) (C__CATG__NAGIOS_HOST_TPL_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Ja  |
| Nagios Host | nagios_host | int | isys_monitoring_export_config__id | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | max_check_attempts | int |     | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| obsess_over_host | obsess_over_host | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| event_handler_parameters | event_handler_parameters | text |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| notification_options | host_notification_options | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| vrml_image | vrml_image | text |     | Ja  |
| statusmap_image | statusmap_image | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nom d'hôte | name | text | | Oui |
| Nagios Host | nagios_host | int | isys_monitoring_export_config__id | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | max_check_attempts | int | | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| initial_state | initial_state | text | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| obsess_over_host | obsess_over_host | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| event_handler_parameters | event_handler_parameters | text | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| notification_options | host_notification_options | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| escalations | escalations | int | | Oui |
| nom | nom2 | texte | | oui |
| description | text_area | | Oui |
| action_url | action_url | texte | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_alt | icon_image_alt | text | | Oui |
| vrml_image | vrml_image | texte | | Oui |
| statusmap_image | statusmap_image | texte | | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Host-Template Definition (C__CATG__NAGIOS_HOST_TPL_DEF)

### Définition du modèle d'hôte (C__CATG__NAGIOS_HOST_TPL_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Ja  |
| Nagios Host | nagios_host | int | isys_monitoring_export_config__id | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | max_check_attempts | int |     | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| initial_state | initial_state | text |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| obsess_over_host | obsess_over_host | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| event_handler_parameters | event_handler_parameters | text |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| notification_options | host_notification_options | text |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| vrml_image | vrml_image | text |     | Ja  |
| statusmap_image | statusmap_image | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nom d'hôte | name | text | | Oui |
| Nagios Host | nagios_host | int | isys_monitoring_export_config__id | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | max_check_attempts | int | | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| display_name | display_name | text | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| initial_state | initial_state | text | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| obsess_over_host | obsess_over_host | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| event_handler_parameters | event_handler_parameters | text | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| notification_options | host_notification_options | text | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| escalations | escalations | int | | Oui |
| nom | nom2 | texte | | oui |
| description | text_area | | Oui |
| action_url | action_url | texte | | Oui |
| icon_image | icon_image | text | | Oui |
| icon_image_alt | icon_image_alt | text | | Oui |
| vrml_image | vrml_image | texte | | Oui |
| statusmap_image | statusmap_image | texte | | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| custom_object_vars | custom_object_vars | text_area | | Oui |

### Nagios (Host) (C__CATG__NAGIOS_HOST_FOLDER)

### Nagios (hôte) (C__CATG__NAGIOS_HOST_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is_exportable | int |     | Ja  |
| Exportkonfiguration | export_host | int | isys_monitoring_export_config__id | Ja  |
| Templates | host_template | text |     | Ja  |
| host_name | host_name | text |     | Ja  |
| host_name_selection | host_name_selection | int |     | Ja  |
| Hostname | name1 | text |     | Ja  |
| Alias | alias | text |     | Ja  |
| IP-Adresse | address | int | isys_catg_ip_list__id | Ja  |
| address_selection | address_selection | int |     | Ja  |
| Weitere Objekte als parent wählen | parents | text |     | Ja  |
| Folgende Objekte als parent benutzen? | is_parent | int |     | Ja  |
| check_command | check_command | int | isys_nagios_commands__id | Ja  |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Ja  |
| check_command_parameters | check_command_parameters | text |     | Ja  |
| check_interval | check_interval | int |     | Ja  |
| retry_interval | retry_interval | int |     | Ja  |
| max_check_attempts | max_check_attempts | int |     | Ja  |
| check_period | check_period | int | isys_nagios_timeperiods__id | Ja  |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| active_checks_enabled | active_checks_enabled | int |     | Ja  |
| passive_checks_enabled | passive_checks_enabled | int |     | Ja  |
| notifications_enabled | notifications_enabled | int |     | Ja  |
| notification_options | host_notification_options | text |     | Ja  |
| notification_interval | notification_interval | int |     | Ja  |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Ja  |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| initial_state | initial_state | text |     | Ja  |
| obsess_over_host | obsess_over_host | int |     | Ja  |
| check_freshness | check_freshness | int |     | Ja  |
| freshness_threshold | freshness_threshold | int |     | Ja  |
| flap_detection_enabled | flap_detection_enabled | int |     | Ja  |
| flap_detection_options | flap_detection_options | text |     | Ja  |
| low_flap_threshold | low_flap_threshold | int |     | Ja  |
| high_flap_threshold | high_flap_threshold | int |     | Ja  |
| event_handler_enabled | event_handler_enabled | int |     | Ja  |
| event_handler | event_handler | int |     | Ja  |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Ja  |
| event_handler_parameters | event_handler_parameters | text |     | Ja  |
| process_perf_data | process_perf_data | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| first_notification_delay | first_notification_delay | int |     | Ja  |
| stalking_options | stalking_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| action_url | action_url | text |     | Ja  |
| icon_image | icon_image | text |     | Ja  |
| icon_image_alt | icon_image_alt | text |     | Ja  |
| vrml_image | vrml_image | text |     | Ja  |
| statusmap_image | statusmap_image | text |     | Ja  |
| 2d_coords | twod_coords | text |     | Ja  |
| 3d_coords | threed_coords | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes_url | notes_url | text |     | Ja  |
| display_name | display_name | text |     | Ja  |
| display_name_selection | display_name_selection | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Exporter cette configuration | is_exportable | int | | Oui |
| configuration d'exportation | export_host | int | isys_monitoring_export_config__id | Oui |
| modèles | host_template | texte | | oui |
| nom_hôte | nom_hôte | texte | | Oui |
| sélection_nom_hôte | sélection_nom_hôte | int | | Oui |
| nom d'hôte | nom1 | texte | | Oui |
| alias | alias | text | | Oui |
| adresse IP | address | int | isys_catg_ip_list__id | Oui |
| address_selection | address_selection | int | | Oui |
| Choisir d'autres objets comme parent | parents | text | | Oui |
| Utiliser les objets suivants comme parent ? | is_parent | int | | Oui |
| check_command | check_command | int | isys_nagios_commands__id | Oui |
| check_command+ | check_command_plus | int | isys_nagios_commands_plus__id | Oui |
| check_command_parameters | check_command_parameters | text | | Oui |
| check_interval | check_interval | int | | Oui |
| retry_interval | retry_interval | int | | Oui |
| max_check_attempts | max_check_attempts | int | | Oui |
| check_period | check_period | int | isys_nagios_timeperiods__id | Oui |
| check_period + | check_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| active_checks_enabled | active_checks_enabled | int | | Oui |
| passive_checks_enabled | passive_checks_enabled | int | | Oui |
| notifications_enabled | notifications_enabled | int | | Oui |
| notification_options | host_notification_options | text | | Oui |
| notification_interval | notification_interval | int | | Oui |
| notification_period | notification_period | int | isys_nagios_timeperiods__id | Oui |
| notification_period + | notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| initial_state | initial_state | text | | Oui |
| obsess_over_host | obsess_over_host | int | | Oui |
| check_freshness | check_freshness | int | | Oui |
| freshness_threshold | freshness_threshold | int | | Oui |
| flap_detection_enabled | flap_detection_enabled | int | | Oui |
| flap_detection_options | flap_detection_options | text | | Oui |
| low_flap_threshold | low_flap_threshold | int | | Oui |
| high_flap_threshold | high_flap_threshold | int | | Oui |
| event_handler_enabled | event_handler_enabled | int | | Oui |
| event_handler | event_handler | int | | Oui |
| event_handler + | event_handler_plus | int | isys_nagios_commands_plus__id | Oui |
| event_handler_parameters | event_handler_parameters | text | | Oui |
| process_perf_data | process_perf_data | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| first_notification_delay | first_notification_delay | int | | Oui |
| stalking_options | stalking_options | text | | Oui |
| escalations | escalations | int | | Oui |
| action_url | action_url | texte | | Oui |
| icon_image | icon_image | texte | | Oui |
| icon_image_alt | icon_image_alt | text | | Oui |
| vrml_image | vrml_image | texte | | Oui |
| statusmap_image | statusmap_image | text | | Oui |
| 2d_coords | twod_coords | texte | | Oui |
| 3d_coords | threed_coords | texte | | Oui |
| notes | notes | texte | | Oui |
| notes_url | notes_url | texte | | Oui |
| nom_affichage | nom_affichage | texte | | Oui |
| display_name_selection | display_name_selection | int | | Oui |
| nom | nom2 | texte | | oui |
| custom_object_vars | custom_object_vars | text_area | Oui |
| description | text_area | | Oui |

### Zugewiesene Objekte (C__CATG__NAGIOS_HOST_TPL_ASSIGNED_OBJECTS)

### Objets assignés (C__CATG__NAGIOS_HOST_TPL_ASSIGNED_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned_objects | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| assigned_objects | text | | Oui |

### Servicezuweisung (C__CATG__NAGIOS_REFS_SERVICES)

### Attribution de service (C__CATG__NAGIOS_REFS_SERVICES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Oui |

### Nagios (Anwendungen) (C__CATG__NAGIOS_APPLICATION_FOLDER)

### Nagios (applications) (C__CATG__NAGIOS_APPLICATION_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Oui |

### Servicezuweisung (C__CATG__NAGIOS_APPLICATION_REFS_NAGIOS_SERVICE)

### Attribution de service (C__CATG__NAGIOS_APPLICATION_REFS_NAGIOS_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned_objects | int | isys_obj__id | Oui |

### Nagios Service-Dependencies (C__CATG__NAGIOS_SERVICE_DEP)

### Dépendances des services Nagios (C__CATG__NAGIOS_SERVICE_DEP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Host | host | int | isys_catg_nagios_refs_services_list__id | Ja  |
| Service (Master) | service_dependency | int |     | Nein |
| Host (Master) | host_dependency | int | isys_catg_nagios_refs_services_list__id | Ja  |
| inherits_parent | inherits_parent | int |     | Ja  |
| execution_failure_criteria | execution_fail_criteria | int | isys_catg_nagios_service_dep_list__id | Ja  |
| notification_failure_criteria | notification_fail_criteria | int | isys_catg_nagios_service_dep_list__id | Ja  |
| dependency_period | dependency_period | int | isys_nagios_timeperiods__id | Ja  |
| dependency_period+ | dependency_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| hôte | host | int | isys_catg_nagios_refs_services_list__id | Oui |
| service (maître) | service_dependency | int | | Non |
| hôte (maître) | host_dependency | int | isys_catg_nagios_refs_services_list__id | oui |
| inherits_parent | inherits_parent | int | | Oui |
| execution_failure_criteria | execution_fail_criteria | int | isys_catg_nagios_service_dep_list__id | Oui |
| notification_failure_criteria | notification_fail_criteria | int | isys_catg_nagios_service_dep_list__id | Oui |
| dependency_period | dependency_period | int | isys_nagios_timeperiods__id | Oui |
| dependency_period+ | dependency_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| description | text_area | | Oui |

### Anschrift (C__CATG__ADDRESS)

### Adresse (C__CATG__ADDRESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Adresszusatz | address | text_area |     | Ja  |
| Straße | street | text |     | Ja  |
| Hausnummer | house_no | text |     | Ja  |
| Etagen | stories | int |     | Ja  |
| Postleitzahl | postcode | text |     | Ja  |
| Ort | city | text |     | Ja  |
| Region | region | text |     | Ja  |
| Land | country | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| complément d'adresse | address | text_area | | Oui |
| rue | street | text | | Oui |
| numéro de maison | house_no | texte | | Oui |
| étages | stories | int | | Oui |
| code postal | postcode | text | | Oui |
| ville | city | text | | oui |
| région | texte | | Oui |
| pays | texte | | Oui |
| description | text_area | | Oui |

### Monitoring (C__CATG__MONITORING)

### Surveillance (C__CATG__MONITORING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv? | active | int |     | Ja  |
| Host | monitoring_host | int | isys_monitoring_hosts__id | Ja  |
| Hostname | host_name | text |     | Ja  |
| Hostname auswahl | host_name_selection | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Actif ? | active | int | | Oui |
| hôte | monitoring_host | int | isys_monitoring_hosts__id | Oui |
| nom d'hôte | host_name | text | | Oui |
| sélection_nom_d'hôte | host_name_selection | int | | Oui |
| description | text_area | | Oui |

### Livestatus (C__CATG__LIVESTATUS)

### État de vie (C__CATG__LIVESTATUS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Livestatus | livestatus_state | int |     | Ja  |
| Livestatus (Knopf) | livestatus_state_button | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| état vivant | livestatus_state | int | | Oui |
| état vivant (bouton) | livestatus_state_button | int | | Oui |

### Fahrzeug (C__CATG__VEHICLE)

### Véhicule (C__CATG__VEHICLE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kennzeichen | licence_plate | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| code | licence_plate | text | | Oui |
| description | text_area | | Oui |

### Flugzeug (C__CATG__AIRCRAFT)

### avion (C__CATG__AIRCRAFT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Luftfahrzeugkennzeichen | registration | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| immatriculation de l'aéronef | registration | text | | Oui |
| description | text_area | | Oui |

### Netzwerkverbindungen (C__CATG__NET_CONNECTIONS_FOLDER)

### Connexions réseau (C__CATG__NET_CONNECTIONS_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | protocol | int | isys_net_protocol__id | Ja  |
| Layer 5-7 Protokoll | protocol_layer_5 | int | isys_net_protocol_layer_5__id | Ja  |
| (Bind) IP-Adresse | ip_address | int | isys_cats_net_ip_addresses_list__id | Ja  |
| Von | port_from | int |     | Ja  |
| Bis | port_to | int |     | Ja  |
| Geöffnet durch Applikation | opened_by | int | isys_obj__id | Ja  |
| Gateway | gateway | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Protocole de couche 3/4 | protocol | int | isys_net_protocol__id | Oui |
| Protocole de couche 5-7 | protocole_layer_5 | int | isys_net_protocol_layer_5__id | Oui |
| (Bind) Adresse IP | ip_address | int | isys_cats_net_ip_addresses_list__id | Oui |
| de | port_from | int | | oui |
| jusqu'à | port_to | int | | Oui |
| ouvert par application | opened_by | int | isys_obj__id | Oui |
| passerelle | gateway | int | isys_obj__id | Oui |
| description | text_area | | Oui |

### Listener (C__CATG__NET_LISTENER)

### Listener (C__CATG__NET_LISTENER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | protocol | int | isys_net_protocol__id | Ja  |
| Layer 5-7 Protokoll | protocol_layer_5 | int | isys_net_protocol_layer_5__id | Ja  |
| (Bind) IP-Adresse | ip_address | int | isys_cats_net_ip_addresses_list__id | Ja  |
| Von | port_from | int |     | Ja  |
| Bis | port_to | int |     | Ja  |
| Geöffnet durch Applikation | opened_by | int | isys_obj__id | Ja  |
| Gateway | gateway | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Protocole de couche 3/4 | protocol | int | isys_net_protocol__id | Oui |
| Protocole de couche 5-7 | protocole_layer_5 | int | isys_net_protocol_layer_5__id | Oui |
| (Bind) Adresse IP | ip_address | int | isys_cats_net_ip_addresses_list__id | Oui |
| de | port_from | int | | oui |
| jusqu'à | port_to | int | | Oui |
| ouvert par application | opened_by | int | isys_obj__id | Oui |
| passerelle | gateway | int | isys_obj__id | Oui |
| description | text_area | | Oui |

### Verbindung (C__CATG__NET_CONNECTOR)

### Connexion (C__CATG__NET_CONNECTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| (Source) IP-Adresse | ip_address | int | isys_cats_net_ip_addresses_list__id | Ja  |
| Von | port_from | int |     | Ja  |
| Bis | port_to | int |     | Ja  |
| Listener | connected_listener | int | isys_catg_net_listener_list__id | Nein |
| Verbunden mit | connected_to | int | isys_catg_net_listener_list__id | Nein |
| Gateway | gateway | int | isys_obj__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| (Source) Adresse IP | ip_address | int | isys_cats_net_ip_addresses_list__id | Oui |
| de | port_from | int | | oui |
| jusqu'à | port_to | int | | Oui |
| listener | connected_listener | int | isys_catg_net_listener_list__id | Non |
| connecté à | connected_to | int | isys_catg_net_listener_list__id | Non |
| passerelle | gateway | int | isys_obj__id | oui |
| description | text_area | | Oui |

### Verwaltungsinstanz (C__CATG__CLUSTER_ADM_SERVICE)

### Instance administrative (C__CATG__CLUSTER_ADM_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verwaltungsinstanz (Objekt) | connected_object | int | isys_connection__id | Ja  |
| Objekttyp | objtype | int |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| instance de gestion (objet) | connected_object | int | isys_connection__id | Oui |
| type d'objet | objtype | int | | Oui |

### JDisc Custom Attributes (C__CATG__JDISC_CA)

### JDisc Custom Attributes (C__CATG__JDISC_CA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Attribut | attribute | text |     | Ja  |
| Wert | attribute_content | text |     | Ja  |
| Typ | attribute_type | int | isys_jdisc_ca_type__id | Ja  |
| Ordner | attribute_folder | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| attribut | attribut | texte | | Oui |
| valeur | attribute_content | text | | Oui |
| type | attribute_type | int | isys_jdisc_ca_type__id | Oui |
| dossier | attribute_folder | text_area | | Oui |
| description | text_area | | Oui |

### LC__CATG__CMK_FOLDER (C__CATG__CMK)

### LC__CATG__CMK_FOLDER (C__CATG__CMK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK__ACTIVE | active | int |     | Ja  |
| Exportkonfiguration | export_config | int |     | Ja  |
| LC__CATG__CMK__ALIAS | title | text |     | Ja  |
| LC__CATG__CMK__EXPORT_IP | export_ip | int |     | Ja  |
| Hostadresse | hostaddress | int |     | Ja  |
| LC__CATG__CMK__HOSTNAME | host_name | text |     | Ja  |
| LC__CATG__CMK__HOSTNAME | host_name_selection | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK__ACTIVE | active | int | | Oui |
| export_config | int | | Oui |
| LC__CATG__CMK__ALIAS | titre | texte | | Oui |
| LC__CATG__CMK__EXPORT_IP | export_ip | int | | Oui |
| adresse de l'hôte | hostaddress | int | | oui |
| LC__CATG__CMK__HOSTNAME | nom_hôte | texte | | Oui |
| LC__CATG__CMK__HOSTNAME | host_name_selection | int | | Oui |
| description | text_area | | Oui |

### LC__CATG__CMK_TAG (C__CATG__CMK_TAG)

### LC__CATG__CMK_TAG (C__CATG__CMK_TAG)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK_TAG__TAGS | tags | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK_TAG__TAGS | tags | text | | Oui |
| description | text_area | | Oui |

### LC__CATG__CMK_HOST_SERVICE (C__CATG__CMK_HOST_SERVICE)

### LC__CATG__CMK_HOST_SERVICE (C__CATG__CMK_HOST_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK_SERVICE__CHECK_MK_SERVICES | service | text |     | Ja  |
| LC__CATG__CMK_SERVICE__SOFTWARE_ASSIGNMENT | software_assignment | int | isys_catg_application_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK_SERVICE__CHECK_MK_SERVICES | service | texte | | Oui |
| LC__CATG__CMK_SERVICE__SOFTWARE_ASSIGNMENT | software_assignment | int | isys_catg_application_list__id | Oui |
| description | text_area | | Oui |

### LC__CATG__CMK_SERVICE (C__CATG__CMK_SERVICE)

### LC__CATG__CMK_SERVICE (C__CATG__CMK_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC__MODULE__CHECK_MK__HOST | host | int |     | Ja  |
| LC__CATG__CMK_SERVICE__CHECK_MK_SERVICES | service | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| LC__MODULE__CHECK_MK__HOST | host | int | | Oui |
| LC__CATG__CMK_SERVICE__CHECK_MK_SERVICES | service | texte | | Oui |
| description | text_area | | Oui |

### LC__CATG__CMK_DEF (C__CATG__CMK_DEF)

### LC__CATG__CMK_DEF (C__CATG__CMK_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK__ACTIVE | active | int |     | Ja  |
| Exportkonfiguration | export_config | int |     | Ja  |
| LC__CATG__CMK__ALIAS | title | text |     | Ja  |
| LC__CATG__CMK__EXPORT_IP | export_ip | int |     | Ja  |
| Hostadresse | hostaddress | int |     | Ja  |
| LC__CATG__CMK__HOSTNAME | host_name | text |     | Ja  |
| LC__CATG__CMK__HOSTNAME | host_name_selection | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| LC__CATG__CMK__ACTIVE | active | int | | Oui |
| export_config | int | | Oui |
| LC__CATG__CMK__ALIAS | titre | texte | | Oui |
| LC__CATG__CMK__EXPORT_IP | export_ip | int | | Oui |
| adresse de l'hôte | hostaddress | int | | oui |
| LC__CATG__CMK__HOSTNAME | nom_hôte | texte | | Oui |
| LC__CATG__CMK__HOSTNAME | host_name_selection | int | | Oui |
| description | text_area | | Oui |

### NDO (C__CATG__NDO)

### NDO (C__CATG__NDO)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| NDO Status | ndo_state | text |     | Ja  |
| NDO Status Button | ndo_state_button | text |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| NDO Status | ndo_state | text | | Oui |
| NDO Status Button | ndo_state_button | text | | Oui |

### Kabel (C__CATG__CABLE)

### Câble (C__CATG__CABLE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art des Kabels | cable_type | int | isys_cable_type__id | Ja  |
| Farbe | cable_colour | int | isys_cable_colour__id | Ja  |
| Belegung | cable_occupancy | int | isys_cable_occupancy__id | Ja  |
| Länge in CM | length | float |     | Ja  |
| Längeneinheit | length_unit | int |     | Ja  |
| Maximale Anzahl an Fasern/Adern | max_amount_of_fibers_leads | int |     | Ja  |
| Verbindung | connection | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de câble | cable_type | int | isys_cable_type__id | Oui |
| couleur | cable_colour | int | isys_cable_colour__id | oui |
| occupation | cable_occupancy | int | isys_cable_occupancy__id | oui |
| longueur en CM | length | float | | Oui |
| unité de longueur | length_unit | int | | Oui |
| nombre maximal de fibres/conducteurs | max_amount_of_fibers_leads | int | | Oui |
| connection | connection | text | | Oui |
| description | text_area | | Oui |

### Custom Identifier (C__CATG__IDENTIFIER)

### Identifiant personnalisé (C__CATG__IDENTIFIER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Key | key | text |     | Ja  |
| Value | value | text |     | Ja  |
| Zuletzt editiert | last_edited | date_time |     | Ja  |
| Art | type | int | isys_catg_identifier_type__id | Ja  |
| Gruppe | group | text |     | Ja  |
| Letzter Scan | last_scan | text |     | Ja  |
| Letzte Aktualisierung | last_updated | date_time |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Key | key | text | | Oui |
| Value | value | text | | Oui |
| dernièrement édité | last_edited | date_time | | Oui |
| type | int | isys_catg_identifier_type__id | Oui |
| groupe | text | | Oui |
| dernière analyse | last_scan | text | | Oui |
| dernière mise à jour | last_updated | date_time | | Oui |
| description | text_area | | Oui |

### Service (C__CATG__SERVICE)

### Service (C__CATG__SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service Nummer | service_number | text |     | Ja  |
| Art des Service | type | int | isys_service_type__id | Ja  |
| Service-Kategorie | category | int | isys_service_category__id | Ja  |
| Business Unit | business_unit | int | isys_business_unit__id | Ja  |
| Aktiv im Service-Katalog | active | int |     | Ja  |
| Servicebeschreibung intern | service_description_intern | text_area |     | Ja  |
| Servicebeschreibung extern | service_description_extern | text_area |     | Ja  |
| Aliase | service_alias | int | isys_catg_service_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro de service | service_number | text | | Oui |
| type de service | type | int | isys_service_type__id | Oui |
| catégorie de service | category | int | isys_service_category__id | oui |
| unité d'affaires | business_unit | int | isys_business_unit__id | oui |
| actif dans le catalogue des services | active | int | | Oui |
| description de service interne | service_description_intern | text_area | | Oui |
| description de service externe | service_description_externe | text_area | | Oui |
| alias | service_alias | int | isys_catg_service_list__id | Oui |
| description | text_area | | Oui |

### Betriebssystem (C__CATG__OPERATING_SYSTEM)

### Système d'exploitation (C__CATG__OPERATING_SYSTEM)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Betriebssystem | application | int | isys_connection__id | Ja  |
| Typ | application_type | int | isys_catg_application_type__id | Ja  |
| Priorität | application_priority | int | isys_catg_application_priority__id | Ja  |
| Zugewiesene Lizenz | assigned_license | int | isys_cats_lic_list__id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned_license_key | int | isys_cats_lic_list__id | Ja  |
| Service | assigned_it_service | int | isys_catg_its_components_list__id | Ja  |
| Variante | assigned_variant | int | isys_cats_app_variant_list__id | Ja  |
| Versionsnummer | assigned_version | int | isys_catg_version_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| système d'exploitation | application | int | isys_connection__id | Oui |
| type | application_type | int | isys_catg_application_type__id | Oui |
| priorité | application_priority | int | isys_catg_application_priority__id | oui |
| licence attribuée | assigned_license | int | isys_cats_lic_list__id | Oui |
| clé de licence assignée | assigned_license_key | int | isys_cats_lic_list__id | Oui |
| service | assigned_it_service | int | isys_catg_its_components_list__id | oui |
| variante | assigned_variant | int | isys_cats_app_variant_list__id | oui |
| numéro de version | assigned_version | int | isys_catg_version_list__id | oui |
| description | text_area | | Oui |

### QinQ SP-VLAN (C__CATG__QINQ_SP)

### QinQ SP-VLAN (C__CATG__QINQ_SP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | spvlan | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| SP-VLAN attribué | spvlan | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Faser/Ader (C__CATG__FIBER_LEAD)

### Fibre/fil (C__CATG__FIBER_LEAD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Label | label | text |     | Ja  |
| Kategorie | category | int | isys_fiber_category__id | Ja  |
| Farbe | color | int | isys_cable_colour__id | Ja  |
| Dämpfung | damping | float |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| label | label | texte | | Oui |
| catégorie | category | int | isys_fiber_category__id | Oui |
| couleur | color | int | isys_cable_colour__id | oui |
| damping | float | | Oui |
| description | text_area | | Oui |

### QinQ CE-VLAN (C__CATG__QINQ_CE)

### QinQ CE-VLAN (C__CATG__QINQ_CE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | spvlan | int | isys_connection__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| SP-VLAN attribué | spvlan | int | isys_connection__id | Oui |

### Bilder (C__CATG__IMAGES)

### images (C__CATG__IMAGES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Dateiname | name | text |     | Nein |
| Dateiinhalte | content | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nom de fichier | name | text | | Non |
| contenu du fichier | texte | | oui |

### WAN-Leitungen (C__CATG__WAN)

### Lignes WAN (C__CATG__WAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Rolle | role | int | isys_wan_role__id | Ja  |
| Typ | type | int | isys_wan_type__id | Ja  |
| Kanäle | channels | int |     | Ja  |
| Rufnummer(n) | call_numbers | text_area |     | Ja  |
| Standort des Anschlusses | connection_location | int | isys_obj__id | Ja  |
| Kapazität UP | capacity_up | float |     | Ja  |
| Kapazität UP Einheit | capacity_up_unit | int | isys_wan_capacity_unit__id | Ja  |
| Kapazität DOWN | capacity_down | float |     | Ja  |
| Kapazität DOWN Einheit | capacity_down_unit | int | isys_wan_capacity_unit__id | Ja  |
| Max. Kapazität UP | max_capacity_up | float |     | Ja  |
| Max. Kapazität UP Einheit | max_capacity_up_unit | int | isys_wan_capacity_unit__id | Ja  |
| Max. Kapazität DOWN | max_capacity_down | float |     | Ja  |
| Max. Kapazität DOWN Einheit | max_capacity_down_unit | int | isys_wan_capacity_unit__id | Ja  |
| Projektnummer | project_no | text |     | Ja  |
| VLAN-ID | vlan_id | int | isys_obj__id | Ja  |
| Warenkorbnummer | shopping_cart_no | text |     | Ja  |
| Ticket Nr. | ticket_no | text |     | Ja  |
| Kunden Nr. | customer_no | text |     | Ja  |
| Verbundene Router | router | int | isys_catg_wan_list_2_router__isys_catg_wan_list__id | Ja  |
| Verbundene Netze | net | int | isys_catg_wan_list_2_net__isys_catg_wan_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| rôle | role | int | isys_wan_role__id | Oui |
| type | int | isys_wan_type__id | Oui |
| canaux | channels | int | | Oui |
| numéro(s) d'appel | call_numbers | text_area | | Oui |
| emplacement du raccordement | connection_location | int | isys_obj__id | Oui |
| capacité UP | capacity_up | float | | oui |
| capacité UP unité | capacity_up_unit | int | isys_wan_capacity_unit__id | Oui |
| capacité DOWN | capacity_down | float | | oui |
| unité de capacité DOWN | capacity_down_unit | int | isys_wan_capacity_unit__id | Oui |
| capacité max. Capacité UP | max_capacity_up | float | | Oui |
| Max. Capacité UP unité | max_capacity_up_unit | int | isys_wan_capacity_unit__id | Oui |
| capacité max. Capacité DOWN | max_capacity_down | float | | Oui |
| valeur max. Capacité DOWN unité | max_capacity_down_unit | int | isys_wan_capacity_unit__id | Oui |
| numéro de projet | project_no | texte | | oui |
| VLAN-ID | vlan_id | int | isys_obj__id | Oui |
| numéro de panier | shopping_cart_no | texte | | oui |
| ticket_no | texte | | Oui |
| N° client | customer_no | text | | Oui |
| routeurs connectés | router | int | isys_catg_wan_list_2_router__isys_catg_wan_list__id | Oui |
| réseaux connectés | net | int | isys_catg_wan_list_2_net__isys_catg_wan_list__id | Oui |
| description | text_area | | Oui |

### Remote Management Controller (C__CATG__RM_CONTROLLER)

### Contrôleur de gestion à distance (C__CATG__RM_CONTROLLER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre ZugriffsURL | remote_url | text |     | Ja  |
| Remote Management Controller | connected_object | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| URL d'accès primaire | remote_url | text | | Oui |
| contrôleur de gestion à distance | connected_object | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Verwaltete Geräte (C__CATG__RM_CONTROLLER_BACKWARD)

### Périphériques gérés (C__CATG__RM_CONTROLLER_BACKWARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Remote Management Controller | connected_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| contrôleur de gestion à distance | connected_object | int | | Oui |

### Virtuell gemanagte Objekte (C__CATG__MANAGED_OBJECTS)

### Objets gérés virtuellement (C__CATG__MANAGED_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | connected_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | connected_object | int | | Oui |

### VRRP (C__CATG__VRRP)

### VRRP (C__CATG__VRRP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_vrrp_type__id | Ja  |
| VR ID | vrid | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_vrrp_type__id | Oui | VRR
| VR ID | vrid | text | | Oui |
| description | text_area | | Oui |

### Mitglieder (C__CATG__VRRP_MEMBER)

### membres (C__CATG__VRRP_MEMBER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| VRRP Mitglied | member | int | isys_catg_log_port_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| membre VRRP | member | int | isys_catg_log_port_list__id | Oui |
| description | text_area | | Oui |

### Stack Mitglieder (C__CATG__STACK_MEMBER)

### Membres de la pile (C__CATG__STACK_MEMBER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Mitglied | assigned_object | int | isys_obj__id | Ja  |
| Modus | mode | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| membre | assigned_object | int | isys_obj__id | Oui |
| mode | int | | Oui |
| description | text_area | | Oui |

### Letzter eingeloggter Benutzer (C__CATG__LAST_LOGIN_USER)

### Dernier utilisateur connecté (C__CATG__LAST_LOGIN_USER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Letzter eingeloggter Benutzer | last_login | text |     | Ja  |
| Typ | type | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| dernier utilisateur connecté | last_login | text | | Oui |
| type | text | | Oui |
| description | text_area | | Oui |

### Netzbereich (C__CATG__NET_ZONE)

### Zone de réseau (C__CATG__NET_ZONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereiche | from-to | text | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| domaines | from-to | texte | isys_obj__id | oui |

### Optionen (C__CATG__NET_ZONE_OPTIONS)

### Options (C__CATG__NET_ZONE_OPTIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereichsfarbe | color | text |     | Ja  |
| Bereichsfarbe | domain | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| couleur de la zone | color | text | | Oui |
| couleur de domaine | domaine | texte | | Oui |
| description | text_area | | Oui |

### Bereiche (C__CATG__NET_ZONE_SCOPES)

### zones (C__CATG__NET_ZONE_SCOPES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereiche | from-to | text | isys_obj__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| domaines | from-to | texte | isys_obj__id | oui |

## Spezifische Kategorien (cats)

## Catégories spécifiques (cats)

### Rack (C__CATS__ENCLOSURE)

### Rack (C__CATS__ENCLOSURE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertikale Einschübe (Frontseite) | vertical_slots_front | int |     | Ja  |
| Vertikale Einschübe (Rückseite) | vertical_slots_rear | int |     | Ja  |
| Sortierung der Höheneinheit | slot_sorting | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| slots verticaux (face avant) | vertical_slots_front | int | | Oui |
| tiroirs verticaux (arrière) | vertical_slots_rear | int | | Oui |
| tri de l'unité de hauteur | slot_sorting | text | | Oui |
| description | text_area | | Oui |

### Raum (C__CATS__ROOM)

### Salle (C__CATS__ROOM)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_room_type__id | Ja  |
| Raumnummer | number | text |     | Ja  |
| Stockwerk | floor | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_room_type__id | Oui |
| numéro de pièce | number | text | | Oui |
| étage | floor | text | | Oui |
| description | text_area | | Oui |

### Dienste (C__CATS__SERVICE)

### Services (C__CATS__SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys_application_manufacturer__id | Ja  |
| Installationsart | installation | int | isys_installation_type__id | Ja  |
| Registrierungs-Key | registration_key | text |     | Ja  |
| Installationspfad | install_path | text |     | Ja  |
| Anzahl Installationen | installation_count | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| specification | specification | text | | Oui |
| fabricant | manufacturer | int | isys_application_manufacturer__id | Oui |
| type d'installation | installation | int | isys_installation_type__id | Oui |
| clé d'enregistrement | registration_key | text | | Oui |
| chemin d'installation | install_path | texte | | Oui |
| nombre d'installations | installation_count | int | | Oui |
| description | text_area | | Oui |

### Switch (C__CATS__SWITCH_NET)

### Commutateur (C__CATS__SWITCH_NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| VLAN Management Protokoll | vlan | int | isys_vlan_management_protocol__id | Ja  |
| Rolle | role | int | isys_switch_role__id | Ja  |
| Spanning Tree | spanning_tree | int | isys_switch_spanning_tree__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| protocole de gestion VLAN | vlan | int | isys_vlan_management_protocol__id | Oui |
| rôle | role | int | isys_switch_role__id | oui |
| spanning_tree | int | isys_switch_spanning_tree__id | Oui |
| description | text_area | | Oui |

### WAN-Leitungen (C__CATS__WAN)

### Lignes WAN (C__CATS__WAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Rolle | role | int | isys_wan_role__id | Ja  |
| Typ | type | int | isys_wan_type__id | Ja  |
| Kapazität | capacity | double |     | Ja  |
| Kapazitätseinheit | capacity_unit | int | isys_wan_capacity_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| rôle | role | int | isys_wan_role__id | oui |
| type | int | isys_wan_type__id | Oui |
| capacity | double | | Oui |
| unité de capacité | capacity_unit | int | isys_wan_capacity_unit__id | Oui |
| description | text_area | | Oui |

### Notfallplan (C__CATS__EMERGENCY_PLAN)

### Plan d'urgence (C__CATS__EMERGENCY_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zeitbedarf | time_needed | int |     | Ja  |
| Einheit | time_unit | int | isys_unit_of_time__id | Ja  |
| Datum Notfallübung | practice_date | date_time |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| temps requis | time_needed | int | | Oui |
| unité | time_unit | int | isys_unit_of_time__id | Oui |
| date exercice d'urgence | practice_date | date_time | | oui |
| description | text_area | | Oui |

### Klimaanlage (C__CATS__AC)

### Climatisation (C__CATS__AC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art | type | int | isys_ac_type__id | Ja  |
| Schwellwert | threshold | float |     | Ja  |
| Speicher-Einheit | threshold_unit | int | isys_temp_unit__id | Ja  |
| Kapazitätseinheit | capacity_unit | int | isys_ac_refrigerating_capacity_unit__id | Ja  |
| Kühlleistung | capacity | float |     | Ja  |
| Luftmenge | air_quantity | float |     | Ja  |
| Volumen-Einheit | air_quantity_unit | int | isys_ac_air_quantity_unit__id | Ja  |
| Breite | width | float |     | Ja  |
| Höhe | height | float |     | Ja  |
| Tiefe | depth | float |     | Ja  |
| Maßeinheit | dimension_unit | int | isys_depth_unit__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_ac_type__id | Oui |
| seuil | float | | Oui |
| unité de mémoire | threshold_unit | int | isys_temp_unit__id | Oui |
| unité de capacité | capacity_unit | int | isys_ac_refrigerating_capacity_unit__id | Oui |
| capacité de refroidissement | capacity | float | | oui |
| quantité d'air | air_quantity | float | | Oui |
| unité de volume | air_quantity_unit | int | isys_ac_air_quantity_unit__id | Oui |
| largeur | width | float | | oui |
| hauteur | height | float | | oui |
| profondeur | depth | float | | Oui |
| unité de mesure | dimension_unit | int | isys_depth_unit__id | Oui |
| description | text_area | | Oui |

### WiFi-Gerät (C__CATS__ACCESS_POINT)

### Périphérique WiFi (C__CATS__ACCESS_POINT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Funktion | function | int | isys_wlan_function__id | Ja  |
| Standard | standard | int | isys_wlan_standard__id | Ja  |
| Kanal | channel | int | isys_wlan_channel__id | Ja  |
| SSID übertragen | broadcast_ssid | int |     | Ja  |
| SSID | ssid | text |     | Ja  |
| MAC-Filter | mac_filter | int |     | Ja  |
| Authentifikation | auth | int | isys_wlan_auth__id | Ja  |
| Verschlüsselung | encryption_id | int | isys_wlan_encryption__id | Ja  |
| Schlüssel | key | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| fonction | function | int | isys_wlan_function__id | Oui |
| standard | int | isys_wlan_standard__id | Oui |
| canal | channel | int | isys_wlan_channel__id | Oui |
| SSID transmis | broadcast_ssid | int | | Oui |
| SSID | ssid | text | | Oui |
| filtre MAC | mac_filter | int | | Oui |
| authentification | auth | int | isys_wlan_auth__id | Oui |
| cryptage | encryption_id | int | isys_wlan_encryption__id | Oui |
| clé | key | text | | oui |
| description | text_area | | Oui |

### Monitor (C__CATS__MONITOR)

### Moniteur (C__CATS__MONITOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Display | size | float |     | Ja  |
| Einheit | size_unit | int | isys_depth_unit__id | Ja  |
| Typ | type | int | isys_monitor_type__id | Ja  |
| Auflösung | resolution | int | isys_monitor_resolution__id | Ja  |
| Pivot | pivot | int |     | Ja  |
| Lautsprecher | speaker | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Display | size | float | | Oui |
| unité | size_unit | int | isys_depth_unit__id | Oui |
| type | int | isys_monitor_type__id | Oui |
| résolution | resolution | int | isys_monitor_resolution__id | oui |
| pivot | pivot | int | | oui |
| haut-parleur | speaker | int | | oui |
| description | text_area | | Oui |

### Arbeitsplatzsystem (C__CATS__CLIENT)

### Système de poste de travail (C__CATS__CLIENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ des Clients | type | int | isys_client_type__id | Ja  |
| Tastatur-Layout | keyboard_layout | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de client | type | int | isys_client_type__id | Oui |
| disposition du clavier | keyboard_layout | text | | Oui |
| description | text_area | | Oui |

### FC-Switch (C__CATS__SWITCH_FC)

### Commutateur FC (C__CATS__SWITCH_FC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Aktiv | is_active | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| actif | is_active | int | | Oui |
| description | text_area | | Oui |

### Routing (C__CATS__ROUTER)

### Routage (C__CATS__ROUTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Routingprotokoll | routing_protocol | int | isys_routing_protocol__id | Ja  |
| Gateway Adresse | gateway_address | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| protocole de routage | routing_protocol | int | isys_routing_protocol__id | Oui |
| adresse_passerelle | gateway_address | int | | Oui |
| description | text_area | | Oui |

### Drucker (C__CATS__PRT)

### Imprimante (C__CATS__PRT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_cats_prt_type__id | Ja  |
| Farbe | is_color | int |     | Ja  |
| Duplex | is_duplex | int |     | Ja  |
| Emulation | emulation | int | isys_cats_prt_emulation__id | Ja  |
| Papierformat | paper_format | int | isys_cats_prt_paper__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_cats_prt_type__id | Oui |
| couleur | is_color | int | | oui |
| Duplex | is_duplex | int | | Oui |
| émulation | emulation | int | isys_cats_prt_emulation__id | Oui |
| format papier | paper_format | int | isys_cats_prt_paper__id | Oui |
| description | text_area | | Oui |

### Dateien (C__CATS__FILE)

### fichiers (C__CATS__FILE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | file_title | text |     | Ja  |
| Dateiname | file_physical | int |     | Ja  |
| Kategorie | file_category | int | isys_file_category__id | Ja  |
| Revision | revision | text |     | Ja  |
| Versions-Beschreibung | version_description | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Version | current_version | int | isys_file_version__id | Ja  |
| MD5 Checksumme | md5_hash | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | file_title | text | | Oui |
| nom de fichier | file_physical | int | | Oui |
| catégorie | file_category | int | isys_file_category__id | Oui |
| révision | revision | text | | Oui |
| description de la version | version_description | text_area | | Oui |
| description | text_area | | Oui |
| version | current_version | int | isys_file_version__id | Oui |
| somme de contrôle MD5 | md5_hash | texte | | oui |

### Anwendungen (C__CATS__APPLICATION)

### Applications (C__CATS__APPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys_application_manufacturer__id | Ja  |
| Installationsart | installation | int | isys_installation_type__id | Ja  |
| Registrierungs-Key | registration_key | text |     | Ja  |
| Installationspfad | install_path | text |     | Ja  |
| Anzahl Installationen | installation_count | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| specification | specification | text | | Oui |
| fabricant | manufacturer | int | isys_application_manufacturer__id | Oui |
| type d'installation | installation | int | isys_installation_type__id | Oui |
| clé d'enregistrement | registration_key | text | | Oui |
| chemin d'installation | install_path | texte | | Oui |
| nombre d'installations | installation_count | int | | Oui |
| description | text_area | | Oui |

### Netz (C__CATS__NET)

### Réseau (C__CATS__NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys_net_type__id | Ja  |
| Netz | address | text |     | Ja  |
| Netzmaske | netmask | text |     | Ja  |
| Standardgateway | gateway | int |     | Ja  |
| Adresse von | range_from | text |     | Ja  |
| Adresse bis | range_to | text |     | Ja  |
| DNS-Server | dns_server | int | isys_cats_net_list__id | Ja  |
| DNS Domäne | dns_domain | int | isys_cats_net_list__id | Ja  |
| CIDR-Suffix | cidr_suffix | int |     | Ja  |
| Reverse DNS | reverse_dns | text |     | Ja  |
| Layer-2-Netz Zuordnung | layer2_assignments | int |     | Ja  |
| Netz | address_v6 | text |     | Ja  |
| Adressbereich | address_range | text |     | Ja  |
| Netz mit Suffix | address_with_suffix | text |     | Ja  |
| Zugewiesene Adressen | free_addresses | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| type | int | isys_net_type__id | Oui |
| réseau | address | text | | Oui |
| netmask | text | | Oui |
| passerelle par défaut | gateway | int | | Oui |
| adresse de | range_from | texte | | oui |
| adresse jusqu'à | range_to | text | | Oui |
| serveur DNS | dns_server | int | isys_cats_net_list__id | Oui |
| domaine DNS | dns_domain | int | isys_cats_net_list__id | Oui |
| suffixe CIDR | cidr_suffix | int | | Oui |
| DNS inversé | reverse_dns | texte | | Oui |
| assignations réseau couche 2 | layer2_assignments | int | | Oui |
| réseau | address_v6 | text | | Oui |
| plage d'adresses | address_range | text | | Oui |
| réseau avec suffixe | adresse_avec_suffixe | texte | | Oui |
| adresses attribuées | free_addresses | texte | | oui |
| description | text_area | | Oui |

### Mobilfunk (C__CATS__CELL_PHONE_CONTRACT)

### Téléphonie mobile (C__CATS__CELL_PHONE_CONTRACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| IMEI-Nummer | imei_number | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro IMEI | imei_number | text | | Oui |
| description | text_area | | Oui |

### Objektgruppe (C__CATS__GROUP)

### Groupe d'objets (C__CATS__GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys_connection__id | Ja  |
| Objekttyp | object_type | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | object | int | isys_connection__id | Oui |
| type d'objet | object_type | text | | Oui |
| description | text_area | | Oui |

### Lizenzschlüssel (C__CMDB__SUBCAT__LICENCE_LIST)

### Clé de licence (C__CMDB__SUBCAT__LICENCE_LIST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Schlüssel | key | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Lizenz Typ | type | int |     | Ja  |
| Anzahl | amount | int |     | Ja  |
| Lizenzen in Benutzung | used_licences | int |     | Ja  |
| Freie Lizenzen | lic_not_in_use | int |     | Ja  |
| Startdatum | start | date |     | Ja  |
| Ablaufdatum | expire | date |     | Ja  |
| Einzelpreis | cost | double |     | Ja  |
| Gesamtkosten | overall_costs | double |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| clé | key | text | | Oui |
| numéro de série | serial | text | | Oui |
| type de licence | type | int | | Oui |
| nombre | amount | int | | Oui |
| licences en cours d'utilisation | used_licences | int | | Oui |
| licences libres | lic_not_in_use | int | | Oui |
| date de début | start | date | | oui |
| date d'expiration | expire | date | | oui |
| prix unitaire | coût | double | | oui |
| coût total | overall_costs | double | | Oui |
| description | text_area | | Oui |

### Aktuelle Datei (C__CMDB__SUBCAT__FILE_ACTUAL)

### Fichier courant (C__CMDB__SUBCAT__FILE_ACTUAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | file_title | text |     | Ja  |
| Dateiname | file_physical | int |     | Ja  |
| Kategorie | file_category | int | isys_file_category__id | Ja  |
| Revision | revision | text |     | Ja  |
| Versions-Beschreibung | version_description | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Version | current_version | int | isys_file_version__id | Ja  |
| MD5 Checksumme | md5_hash | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | file_title | text | | Oui |
| nom de fichier | file_physical | int | | Oui |
| catégorie | file_category | int | isys_file_category__id | Oui |
| révision | revision | text | | Oui |
| description de la version | version_description | text_area | | Oui |
| description | text_area | | Oui |
| version | current_version | int | isys_file_version__id | Oui |
| somme de contrôle MD5 | md5_hash | texte | | oui |

### Dateiversionen (C__CMDB__SUBCAT__FILE_VERSIONS)

### Versions des fichiers (C__CMDB__SUBCAT__FILE_VERSIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Dateiname | file_physical | text |     | Ja  |
| Datei Inhalt | file_content | text |     | Ja  |
| Bezeichnung | file_title | text |     | Ja  |
| Revision | revision | text |     | Ja  |
| Upload Datum | upload_date | text |     | Ja  |
| Versions-Beschreibung | version_description | text_area |     | Ja  |
| MD5 Checksumme | md5_hash | text |     | Ja  |
| Upload von | uploaded_by | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| nom de fichier | file_physical | text | | Oui |
| contenu du fichier | file_content | text | | Oui |
| file_title | text | | Oui |
| révision | revision | text | | Oui |
| date de téléchargement | upload_date | texte | | oui |
| description_version | version_description | text_area | | Oui |
| somme de contrôle MD5 | md5_hash | texte | | Oui |
| uploaded_by | text | | Oui |

### Zugewiesene Objekte (C__CMDB__SUBCAT__FILE_OBJECTS)

### Objets assignés (C__CMDB__SUBCAT__FILE_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned_objects | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objets assignés | assigned_objects | int | | Oui |

### Notfallplan Eigenschaften (C__CMDB__SUBCAT__EMERGENCY_PLAN)

### Propriétés du plan d'urgence (C__CMDB__SUBCAT__EMERGENCY_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zeitbedarf | time_needed | int |     | Ja  |
| Einheit | time_unit | int | isys_unit_of_time__id | Ja  |
| Datum Notfallübung | practice_date | date_time |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| temps requis | time_needed | int | | Oui |
| unité | time_unit | int | isys_unit_of_time__id | Oui |
| date exercice d'urgence | practice_date | date_time | | oui |
| description | text_area | | Oui |

### zugewiesene Objekte (C__CMDB__SUBCAT__EMERGENCY_PLAN_LINKED_OBJECT_LIST)

### objets assignés (C__CMDB__SUBCAT__EMERGENCY_PLAN_LINKED_OBJECT_LIST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | object | text | | oui |

### Netzart (C__CMDB__SUBCAT__WS_NET_TYPE)

### Type de réseau (C__CMDB__SUBCAT__WS_NET_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzart | title | int | isys_net_type_title__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de réseau | title | int | isys_net_type_title__id | Oui |
| description | text_area | | Oui |

### Zugeordnete Objekte (C__CMDB__SUBCAT__WS_ASSIGNMENT)

### Objets associés (C__CMDB__SUBCAT__WS_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | connected_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objets assignés | connected_object | int | | Oui |

### Leitungsnetz (C__CATS__WS)

### réseau de lignes (C__CATS__WS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzart | title | int | isys_net_type_title__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de réseau | title | int | isys_net_type_title__id | Oui |
| description | text_area | | Oui |

### Unterbrechungsfreie Stromversorgung (C__CATS__UPS)

### Alimentation électrique sans interruption (C__CATS__UPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys_ups_type__id | Ja  |
| Batterietyp | battery_type | int | isys_ups_battery_type__id | Ja  |
| Anzahl Batterien | amount | int |     | Ja  |
| Ladedauer | charge_time | int |     | Ja  |
| Einheit | charge_time_unit | int | isys_unit_of_time__id | Ja  |
| Autonomiezeit unter Volllast | autonomy_time | int |     | Ja  |
| Einheit | autonomy_time_unit | int | isys_unit_of_time__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_ups_type__id | Oui |
| type de batterie | battery_type | int | isys_ups_battery_type__id | Oui |
| nombre de batteries | amount | int | | oui |
| durée de charge | charge_time | int | | Oui |
| unité | charge_time_unit | int | isys_unit_of_time__id | Oui |
| temps d'autonomie à pleine charge | autonomy_time | int | | Oui |
| unité | autonomy_time_unit | int | isys_unit_of_time__id | Oui |
| description | text_area | | Oui |

### Netzersatzanlage (C__CATS__EPS)

### Système de remplacement du réseau (C__CATS__EPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art | type | int | isys_cats_eps_type__id | Ja  |
| Anlaufzeit | warmup_time | int |     | Ja  |
| Einheit | warmup_time_unit | int | isys_unit_of_time__id | Ja  |
| Kraftstofftank | fuel_tank | int |     | Ja  |
| Einheit | volume_unit | int | isys_volume_unit__id | Ja  |
| Autonomiezeit | autonomy_time | int |     | Ja  |
| Einheit | autonomy_time_unit | int | isys_unit_of_time__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | int | isys_cats_eps_type__id | Oui |
| temps de démarrage | warmup_time | int | | Oui |
| unité | warmup_time_unit | int | isys_unit_of_time__id | Oui |
| réservoir de carburant | fuel_tank | int | | Oui |
| unité | volume_unit | int | isys_volume_unit__id | Oui |
| temps d'autonomie | autonomy_time | int | | oui |
| unité | autonomy_time_unit | int | isys_unit_of_time__id | Oui |
| description | text_area | | Oui |

### SAN Zoning (C__CATS__SAN_ZONING)

### SAN Zoning (C__CATS__SAN_ZONING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Mitglieder | members | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| membres | members | int | | Oui |
| description | text_area | | Oui |

### Organisation (C__CATS__ORGANIZATION)

### Organisation (C__CATS__ORGANIZATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Nein |
| Telefon | telephone | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Webseite | website | text |     | Ja  |
| Zentrale | headquarter | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | non |
| telephone | telephone | text | | Oui |
| fax | texte | | Oui |
| site web | website | text | | Oui |
| siège social | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Stammdaten (C__CATS__ORGANIZATION_MASTER_DATA)

### Données de base (C__CATS__ORGANIZATION_MASTER_DATA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Nein |
| Telefon | telephone | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Webseite | website | text |     | Ja  |
| Zentrale | headquarter | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | non |
| telephone | telephone | text | | Oui |
| fax | texte | | Oui |
| site web | website | text | | Oui |
| siège social | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Personen (C__CATS__ORGANIZATION_PERSONS)

### personnes (C__CATS__ORGANIZATION_PERSONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | int |     | Ja  |
| Kontakt | contact | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | object | int | | oui |
| contact | int | | Oui |

### Personen (C__CATS__PERSON)

### personnes (C__CATS__PERSON)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Anrede | salutation | text |     | Ja  |
| Vorname | first_name | text |     | Ja  |
| Nachname | last_name | text |     | Ja  |
| Titel (Akademischer Grad) | academic_degree | text |     | Ja  |
| Funktion | function | text |     | Ja  |
| Dienstbezeichnung | service_designation | text |     | Ja  |
| Straße | street | text |     | Ja  |
| Ort | city | text |     | Ja  |
| PLZ | zip_code | text |     | Ja  |
| E-Mail Adresse | mail | text |     | Ja  |
| Telefon Firma | phone_company | text |     | Ja  |
| Telefon Privat | phone_home | text |     | Ja  |
| Handy | phone_mobile | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Pager | pager | text |     | Ja  |
| Personalnummer | personnel_number | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Firma | organization | int | isys_connection__id | Ja  |
| ID  | ldap_id | text |     | Ja  |
| DN  | ldap_dn | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Custom 1 | custom_1 | text |     | Ja  |
| Custom 2 | custom_2 | text |     | Ja  |
| Custom 3 | custom_3 | text |     | Ja  |
| Custom 4 | custom_4 | text |     | Ja  |
| Custom 5 | custom_5 | text |     | Ja  |
| Custom 6 | custom_6 | text |     | Ja  |
| Custom 7 | custom_7 | text |     | Ja  |
| Custom 8 | custom_8 | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| salutation | text | | Oui |
| prénom | first_name | text | | oui |
| nom de famille | last_name | text | | Oui |
| titre (grade académique) | academic_degree | text | | Oui |
| fonction | function | text | | Oui |
| service_designation | text | | Oui |
| rue | street | text | | oui |
| ville | city | text | | oui |
| code postal | zip_code | texte | | Oui |
| adresse e-mail | mail | texte | | oui |
| Téléphone entreprise | phone_company | text | | Oui |
| Téléphone privé | phone_home | text | | Oui |
| téléphone mobile | phone_mobile | texte | | Oui |
| fax | texte | | Oui |
| pager | texte | | Oui |
| numéro personnel | personnel_number | text | | Oui |
| department | text | | Oui |
| société | organisation | int | isys_connection__id | Oui |
| ID | ldap_id | texte | | Oui |
| DN | ldap_dn | texte | | Oui |
| description | text_area | | Oui |
| Custom 1 | custom_1 | text | | Oui |
| Custom 2 | custom_2 | text | | Oui |
| Custom 3 | custom_3 | texte | | Oui |
| Custom 4 | custom_4 | texte | | Oui |
| Custom 5 | custom_5 | texte | | Oui |
| Custom 6 | custom_6 | texte | | Oui |
| Custom 7 | custom_7 | texte | | Oui |
| Custom 8 | custom_8 | texte | | Oui |

### Stammdaten (C__CATS__PERSON_MASTER)

### Données de base (C__CATS__PERSON_MASTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Anrede | salutation | text |     | Ja  |
| Vorname | first_name | text |     | Ja  |
| Nachname | last_name | text |     | Ja  |
| Titel (Akademischer Grad) | academic_degree | text |     | Ja  |
| Funktion | function | text |     | Ja  |
| Dienstbezeichnung | service_designation | text |     | Ja  |
| Straße | street | text |     | Ja  |
| Ort | city | text |     | Ja  |
| PLZ | zip_code | text |     | Ja  |
| E-Mail Adresse | mail | text |     | Ja  |
| Telefon Firma | phone_company | text |     | Ja  |
| Telefon Privat | phone_home | text |     | Ja  |
| Handy | phone_mobile | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Pager | pager | text |     | Ja  |
| Personalnummer | personnel_number | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Firma | organization | int | isys_connection__id | Ja  |
| ID  | ldap_id | text |     | Ja  |
| DN  | ldap_dn | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Custom 1 | custom_1 | text |     | Ja  |
| Custom 2 | custom_2 | text |     | Ja  |
| Custom 3 | custom_3 | text |     | Ja  |
| Custom 4 | custom_4 | text |     | Ja  |
| Custom 5 | custom_5 | text |     | Ja  |
| Custom 6 | custom_6 | text |     | Ja  |
| Custom 7 | custom_7 | text |     | Ja  |
| Custom 8 | custom_8 | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | Oui |
| salutation | text | | Oui |
| prénom | first_name | text | | oui |
| nom de famille | last_name | text | | Oui |
| titre (grade académique) | academic_degree | text | | Oui |
| fonction | function | text | | Oui |
| service_designation | text | | Oui |
| rue | street | text | | oui |
| ville | city | text | | oui |
| code postal | zip_code | texte | | Oui |
| adresse e-mail | mail | texte | | oui |
| Téléphone entreprise | phone_company | text | | Oui |
| Téléphone privé | phone_home | text | | Oui |
| téléphone mobile | phone_mobile | texte | | Oui |
| fax | texte | | Oui |
| pager | texte | | Oui |
| numéro personnel | personnel_number | text | | Oui |
| department | text | | Oui |
| société | organisation | int | isys_connection__id | Oui |
| ID | ldap_id | texte | | Oui |
| DN | ldap_dn | texte | | Oui |
| description | text_area | | Oui |
| Custom 1 | custom_1 | text | | Oui |
| Custom 2 | custom_2 | text | | Oui |
| Custom 3 | custom_3 | texte | | Oui |
| Custom 4 | custom_4 | texte | | Oui |
| Custom 5 | custom_5 | texte | | Oui |
| Custom 6 | custom_6 | texte | | Oui |
| Custom 7 | custom_7 | texte | | Oui |
| Custom 8 | custom_8 | texte | | Oui |

### Login (C__CATS__PERSON_LOGIN)

### Connexion (C__CATS__PERSON_LOGIN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Username | title | text |     | Ja  |
| Passwort | user_pass | text |     | Ja  |
| Passwort | user_pass2 | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |
| Custom 1 | custom_1 | text |     | Ja  |
| Custom 2 | custom_2 | text |     | Ja  |
| Custom 3 | custom_3 | text |     | Ja  |
| Custom 4 | custom_4 | text |     | Ja  |
| Custom 5 | custom_5 | text |     | Ja  |
| Custom 6 | custom_6 | text |     | Ja  |
| Custom 7 | custom_7 | text |     | Ja  |
| Custom 8 | custom_8 | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Username | title | text | | Oui |
| mot de passe | user_pass | texte | | oui |
| mot de passe | user_pass2 | texte | | oui |
| description | text_area | | Oui |
| Custom 1 | custom_1 | text | | Oui |
| Custom 2 | custom_2 | text | | Oui |
| Custom 3 | custom_3 | texte | | Oui |
| Custom 4 | custom_4 | texte | | Oui |
| Custom 5 | custom_5 | texte | | Oui |
| Custom 6 | custom_6 | texte | | Oui |
| Custom 7 | custom_7 | texte | | Oui |
| Custom 8 | custom_8 | texte | | Oui |

### Personengruppenmitgliedschaft (C__CATS__PERSON_ASSIGNED_GROUPS)

### Appartenance à un groupe de personnes (C__CATS__PERSON_ASSIGNED_GROUPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Personengruppenmitgliedschaft | connected_object | int |     | Ja  |
| Kontakt | contact | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| appartenance à un groupe de personnes | connected_object | int | | Oui |
| contact | int | | Oui |

### Personengruppen (C__CATS__PERSON_GROUP)

### Groupes de personnes (C__CATS__PERSON_GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Name | title | text |     | Ja  |
| Email | email_address | text |     | Ja  |
| Telefon | phone | text |     | Ja  |
| LDAP-Gruppe (Mapping) | ldap_group | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Name | title | text | | Oui |
| Email | email_address | text | | Oui |
| téléphone | phone | text | | oui |
| groupe LDAP (mapping) | ldap_group | text | | Oui |
| description | text_area | | Oui |

### Stammdaten (C__CATS__PERSON_GROUP_MASTER)

### Données de base (C__CATS__PERSON_GROUP_MASTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Name | title | text |     | Ja  |
| Email | email_address | text |     | Ja  |
| Telefon | phone | text |     | Ja  |
| LDAP-Gruppe (Mapping) | ldap_group | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Name | title | text | | Oui |
| Email | email_address | text | | Oui |
| téléphone | phone | text | | oui |
| groupe LDAP (mapping) | ldap_group | text | | Oui |
| description | text_area | | Oui |

### Mitglieder (C__CATS__PERSON_GROUP_MEMBERS)

### membres (C__CATS__PERSON_GROUP_MEMBERS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorname | first_name | text |     | Ja  |
| Nachname | last_name | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Telefon Firma | phone_company | text |     | Ja  |
| Email | email_address | text |     | Ja  |
| Firma | organization | int |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Mitglieder | connected_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| prénom | first_name | text | | oui |
| nom de famille | last_name | text | | Oui |
| department | text | | Oui |
| téléphone entreprise | phone_company | texte | | oui |
| email | email_address | text | | Oui |
| société | organisation | int | | oui |
| nom | titre | texte | | oui |
| membres | connected_object | int | | Oui |

### Zugewiesene Objekte (C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT)

### Objets assignés (C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | int |     | Ja  |
| Rolle | role | int | isys_contact_tag__id | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | object | int | | oui |
| rôle | role | int | isys_contact_tag__id | Oui |

### Zugewiesene Objekte (C__CATS__PERSON_CONTACT_ASSIGNMENT)

### Objets assignés (C__CATS__PERSON_CONTACT_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys_connection__isys_obj__id | Nein |
| Objekttyp | object_type | int |     | Ja  |
| Rolle | role | int | isys_contact_tag__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | object | int | isys_connection__isys_obj__id | Non |
| type d'objet | object_type | int | | oui |
| rôle | role | int | isys_contact_tag__id | oui |
| description | text_area | | Oui |

### Zugewiesene Objekte (C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT)

### Objets assignés (C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys_connection__isys_obj__id | Nein |
| Objekttyp | object_type | int |     | Ja  |
| Rolle | role | int | isys_contact_tag__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet | object | int | isys_connection__isys_obj__id | Non |
| type d'objet | object_type | int | | oui |
| rôle | role | int | isys_contact_tag__id | oui |
| description | text_area | | Oui |

### Zugeordnete Cluster (C__CATS__CLUSTER_SERVICE)

### Clusters associés (C__CATS__CLUSTER_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Cluster | cluster | int |     | Nein |
| Typ | type | int | isys_cluster_type__id | Ja  |
| Läuft auf | runs_on | int |     | Ja  |
| Standard Server | default_server | int |     | Ja  |
| Hostadressen | hostaddresses | int | isys_catg_cluster_service_list__id | Ja  |
| Laufwerke | drives | int |     | Ja  |
| Freigaben | shares | int |     | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Cluster associé | cluster | int | | Non |
| type | int | isys_cluster_type__id | Oui |
| runs_on | int | | Oui |
| serveur par défaut | default_server | int | | Oui |
| adresses d'hôtes | hostaddresses | int | isys_catg_cluster_service_list__id | Oui |
| lecteurs | drives | int | | oui |
| Partages | shares | int | | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| description | text_area | | Oui |

### Beziehungsdetails (C__CATS__RELATION_DETAILS)

### Détails de la relation (C__CATS__RELATION_DETAILS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object1 | object1 | int |     | Ja  |
| Object2 | object2 | int |     | Ja  |
| Service | itservice | int |     | Ja  |
| Beziehungsart | relation_type | int | isys_relation_type__id | Ja  |
| Gewichtung | weighting | int | isys_weighting__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Object1 | object1 | int | | Oui |
| Object2 | object2 | int | | Oui |
| service | itservice | int | | Oui |
| type de relation | relation_type | int | isys_relation_type__id | Oui |
| pondération | weighting | int | isys_weighting__id | oui |
| description | text_area | | Oui |

### Datenbankschema (C__CATS__DATABASE_SCHEMA)

### Schéma de la base de données (C__CATS__DATABASE_SCHEMA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Läuft auf | link | int |     | Ja  |
| Datenbankinstanz | instance | int | isys_cats_database_instance_list__id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Storage-Engine | storage_engine | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| link | int | | Oui |
| instance de base de données | instance | int | isys_cats_database_instance_list__id | Oui |
| nom | titre | texte | | oui |
| moteur de stockage | storage_engine | text | | Oui |
| description | text_area | | Oui |

### Datenbanklinks (C__CATS__DATABASE_LINKS)

### Liens de la base de données (C__CATS__DATABASE_LINKS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verknüpftes Datenbankschema | link | int | isys_connection__id | Ja  |
| Ziel-Benutzer | target_user | text |     | Ja  |
| Besitzer | owner | text |     | Ja  |
| Öffentlich | public | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| schéma de base de données lié | link | int | isys_connection__id | Oui |
| utilisateur cible | target_user | text | | Oui |
| propriétaire | owner | text | | oui |
| Public | public | int | | Oui |
| description | text_area | | Oui |

### DBMS (C__CATS__DBMS)

### DBMS (C__CATS__DBMS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| DBMS | dbms | int | isys_dbms__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| DBMS | dbms | int | isys_dbms__id | Oui |
| description | text_area | | Oui |

### Instanz / Oracle Datenbank (C__CATS__DATABASE_INSTANCE)

### Instance / Base de données Oracle (C__CATS__DATABASE_INSTANCE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| DBMS | instance | int | isys_connection__id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Listener | listener | text |     | Ja  |
| Datenbankschema | database_schema | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| DBMS | instance | int | isys_connection__id | Oui |
| description | titre | texte | | oui |
| listener | listener | text | | Oui |
| schéma de base de données | database_schema | int | | Oui |
| description | text_area | | Oui |

### PDU (C__CATS__PDU)

### PDU (C__CATS__PDU)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu_id | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| PDU | pdu_id | text | | Oui |
| description | text_area | | Oui |

### Branch (C__CATS__PDU_BRANCH)

### Branche (C__CATS__PDU_BRANCH)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu_id | int |     | Ja  |
| Branch-ID | branch_id | int |     | Ja  |
| Aufnahmefähig | receptables | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| PDU | pdu_id | int | | Oui |
| ID de branche | branch_id | int | | Oui |
| receptables | int | | Oui |
| description | text_area | | Oui |

### Gleichgerichtete Beziehungen (C__CATS__PARALLEL_RELATION)

### Relations alignées (C__CATS__PARALLEL_RELATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Mindestmenge an aktiven Komponenten | threshold | text |     | Ja  |
| Gleichgerichtete Beziehungen | rel_pool | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| quantité minimale de composants actifs | seuil | texte | | oui |
| Relations de même niveau | rel_pool | text | | Oui |
| description | text_area | | Oui |

### Datenbankobjekte (C__CATS__DATABASE_OBJECTS)

### Objets de la base de données (C__CATS__DATABASE_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | database_object | int | isys_database_objects__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | title | text | | Oui |
| type | database_object | int | isys_database_objects__id | Oui |
| description | text_area | | Oui |

### Datenbankzugriff (C__CATS__DATABASE_ACCESS)

### Accès à la base de données (C__CATS__DATABASE_ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Objekte | access | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Objets associés | access | int | | Oui |

### Datenbank Gateway (C__CATS__DATABASE_GATEWAY)

### Passerelle de base de données (C__CATS__DATABASE_GATEWAY)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gateway Typ | type | text |     | Ja  |
| Host | host | text |     | Ja  |
| Port | port | text |     | Ja  |
| User | user | text |     | Ja  |
| verwendetes Datenbankschema | target_schema | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de passerelle | type | texte | | Oui |
| hôte | host | text | | Oui |
| port | port | texte | | Oui |
| utilisateur | texte | | Oui |
| schéma de base de données utilisé | target_schema | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Replikation (C__CATS__REPLICATION)

### Réplication (C__CATS__REPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Replikationsmechanismus | replication_mechanism | int | isys_replication_mechanism__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| mécanisme de réplication | replication_mechanism | int | isys_replication_mechanism__id | Oui |
| description | text_area | | Oui |

### Replikationspartner (C__CATS__REPLICATION_PARTNER)

### Partenaire de réplication (C__CATS__REPLICATION_PARTNER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Replikationstyp | type | int | isys_replication_type__id | Ja  |
| Replikationspartner | replication_partner | int | isys_connection__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de réplication | type | int | isys_replication_type__id | Oui |
| partenaire de réplication | replication_partner | int | isys_connection__id | Oui |
| description | text_area | | Oui |

### Installation (C__CATS__APPLICATION_ASSIGNED_OBJ)

### Installation (C__CATS__APPLICATION_ASSIGNED_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application_type | int | isys_catg_application_type__id | Ja  |
| Priorität | application_priority | int | isys_catg_application_priority__id | Ja  |
| Zugewiesene Lizenz | assigned_license | int | isys_cats_lic_list__id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned_license_key | text | isys_cats_lic_list__id | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Service | assigned_it_service | int | isys_catg_its_components_list__id | Ja  |
| Variante | assigned_variant | int | isys_cats_app_variant_list__id | Ja  |
| Nagios services vererben | bequest_nagios_services | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Installé sur | object | int | | Non |
| type | application_type | int | isys_catg_application_type__id | oui |
| priorité | application_priority | int | isys_catg_application_priority__id | oui |
| licence attribuée | assigned_license | int | isys_cats_lic_list__id | Oui |
| assigned_license_key | text | isys_cats_lic_list__id | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| service | assigned_it_service | int | isys_catg_its_components_list__id | oui |
| variante | assigned_variant | int | isys_cats_app_variant_list__id | oui |
| hériter des services Nagios | bequest_nagios_services | int | | Oui |
| description | text_area | | Oui |

### Middleware (C__CATS__MIDDLEWARE)

### Middleware (C__CATS__MIDDLEWARE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys_application_manufacturer__id | Ja  |
| Installationsart | installation | int | isys_installation_type__id | Ja  |
| Registrierungs-Key | registration_key | text |     | Ja  |
| Installationspfad | install_path | text |     | Ja  |
| Anzahl Installationen | installation_count | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| specification | specification | text | | Oui |
| fabricant | manufacturer | int | isys_application_manufacturer__id | Oui |
| type d'installation | installation | int | isys_installation_type__id | Oui |
| clé d'enregistrement | registration_key | text | | Oui |
| chemin d'installation | install_path | texte | | Oui |
| nombre d'installations | installation_count | int | | Oui |
| description | text_area | | Oui |

### Kryptokarte (C__CATS__KRYPTO_CARD)

### Carte cryptographique (C__CATS__KRYPTO_CARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zertifikatsnummer | certificate_number | text |     | Ja  |
| Certgate Karten-Nummer | certgate_card_number | text |     | Ja  |
| Zertifikatsname | certificate_title | text |     | Ja  |
| Zertifikatsperrkennwort | certificate_password | text |     | Ja  |
| Zertifikatsablauf | certificate_procedure | date |     | Ja  |
| Ausgabedatum | date_of_issue | date |     | Ja  |
| IMEI-Nummer | imei_number | text |     | Ja  |
| verknüpftes Mobiltelefon | assigned_mobile | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| numéro de certificat | certificate_number | text | | Oui |
| numéro de carte Certgate | certgate_card_number | text | | Oui |
| nom du certificat | certificate_title | text | | Oui |
| mot de passe de la révocation du certificat | certificate_password | text | | Oui |
| certificate_procedure | date | | Oui |
| date_of_issue | date | | Oui |
| numéro IMEI | imei_number | texte | | oui |
| mobile associé | assigned_mobile | int | | Oui |
| description | text_area | | Oui |

### IP-Liste (C__CATS__NET_IP_ADDRESSES)

### Liste d'IP (C__CATS__NET_IP_ADDRESSES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | net_type | int | isys_net_type__id | Ja  |
| Hostadresse | title | text |     | Ja  |
| Objekt | assigned_object | int |     | Ja  |
| Adressvergabe IPv4 | ipv4_assignment | int | isys_ip_assignment__id | Ja  |
| Adressvergabe IPv6 | ipv6_assignment | int | isys_ipv6_assignment__id | Ja  |
| Objekt | object | int |     | Ja  |
| IP-Liste öffnen | ip_address_link | text |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | net_type | int | isys_net_type__id | oui |
| adresse de l'hôte | title | text | | oui |
| objet | assigned_object | int | | Oui |
| attribution d'adresse IPv4 | ipv4_assignment | int | isys_ip_assignment__id | Oui |
| attribution d'adresse IPv6 | ipv6_assignment | int | isys_ipv6_assignment__id | Oui |
| objet | object | int | | Oui |
| ouvrir liste IP | ip_address_link | text | | Oui |

### DHCP (C__CATS__NET_DHCP)

### DHCP (C__CATS__NET_DHCP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ v4 | type | int | isys_net_dhcp_type__id | Ja  |
| Typ v6 | typev6 | int | isys_net_dhcpv6_type__id | Ja  |
| DHCP von | range_from | text |     | Ja  |
| DHCP bis | range_to | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type v4 | type | int | isys_net_dhcp_type__id | Oui |
| type v6 | typev6 | int | isys_net_dhcpv6_type__id | Oui |
| DHCP de | range_from | texte | | Oui |
| DHCP jusqu'à | range_to | texte | | Oui |
| description | text_area | | Oui |

### Layer-2-Netz (C__CATS__LAYER2_NET)

### Réseau de couche 2 (C__CATS__LAYER2_NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| ID (VLAN) | vlan_id | text |     | Ja  |
| Standard VLAN | standard | int |     | Ja  |
| Typ | type | int | isys_layer2_net_type__id | Ja  |
| Unterart | subtype | int | isys_layer2_net_subtype__id | Ja  |
| IP-Helper-Adressen | ip_helper_addresses | int |     | Ja  |
| Layer-3-Netz Zuordnung | layer3_assignments | int | isys_obj__id | Ja  |
| VRF | vrf | text |     | Ja  |
| VRF Kapazität | vrf_capacity | int |     | Ja  |
| VRF Kapazität (Einheit) | vrf_capacity_unit | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| ID (VLAN) | vlan_id | text | | Oui |
| standard VLAN | standard | int | | Oui |
| type | int | isys_layer2_net_type__id | Oui |
| sous-type | subtype | int | isys_layer2_net_subtype__id | Oui |
| adresses IP helper | ip_helper_addresses | int | | Oui |
| assignations réseau couche 3 | layer3_assignments | int | isys_obj__id | Oui |
| VRF | vrf | text | | Oui |
| capacité VRF | vrf_capacity | int | | Oui |
| capacité VRF (unité) | vrf_capacity_unit | int | | Oui |
| description | text_area | | Oui |

### Zugewiesene Ports (C__CATS__LAYER2_NET_ASSIGNED_PORTS)

### Ports alloués (C__CATS__LAYER2_NET_ASSIGNED_PORTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt-Titel | isys_obj__id | int |     | Ja  |
| Zugewiesene Ports | isys_catg_port_list__id | int |     | Ja  |
| MAC-Adresse | isys_catg_port_list__mac | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Titre de l'objet | isys_obj__id | int | | Oui |
| ports alloués | isys_catg_port_list__id | int | | Oui |
| adresse MAC | isys_catg_port_list__mac | int | | Oui |

### Vertrag (C__CATS__CONTRACT)

### Contrat (C__CATS__CONTRACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertragsart | type | int | isys_contract_type__id | Ja  |
| Vertragsnummer | contract_no | text |     | Ja  |
| Kundennummer | customer_no | text |     | Ja  |
| Interne Nummer | internal_no | text |     | Ja  |
| Kosten | costs | double |     | Ja  |
| Produkt | product | text |     | Ja  |
| Reaktionszeiten | reaction_rate | int | isys_contract_reaction_rate__id | Ja  |
| Vertragsstatus | contract_status | int | isys_contract_status__id | Ja  |
| Vertragsbeginn | start_date | date |     | Ja  |
| Vertragsende | end_date | date |     | Ja  |
| Laufzeit | run_time | int |     | Ja  |
| Laufzeit Einheit | run_time_unit | int | isys_guarantee_period_unit__id | Ja  |
| Nächstmögliches Vertragsende | next_contract_end_date | text |     | Ja  |
| Vertragsende durch | end_type | int | isys_contract_end_type__id | Ja  |
| Nächstmögliches Kündigungsdatum | next_notice_end_date | text |     | Ja  |
| Kündigungsdatum | notice_date | date |     | Ja  |
| Kündigungsfrist | notice_period | int |     | Ja  |
| Kündigungsfrist Einheit | notice_period_unit | int | isys_guarantee_period_unit__id | Ja  |
| Kündigungstyp | notice_type | int | isys_contract_notice_period_type__id | Ja  |
| Wartungs-/Garantiefrist | maintenance_period | int |     | Ja  |
| Frist Einheit | maintenance_period_unit | int | isys_guarantee_period_unit__id | Ja  |
| Zahlart | payment_period | int | isys_contract_payment_period__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de contrat | type | int | isys_contract_type__id | Oui |
| numéro de contrat | contract_no | texte | | oui |
| numéro de client | customer_no | text | | oui |
| numéro interne | internal_no | texte | | oui |
| coûts | double | | Oui |
| produit | text | | Oui |
| temps de réaction | reaction_rate | int | isys_contract_reaction_rate__id | Oui |
| statut du contrat | contract_status | int | isys_contract_status__id | oui |
| début de contrat | start_date | date | | oui |
| fin de contrat | end_date | date | | oui |
| durée | run_time | int | | oui |
| durée unité | run_time_unit | int | isys_guarantee_period_unit__id | Oui |
| prochaine fin de contrat possible | next_contract_end_date | text | | Oui |
| fin de contrat par | end_type | int | isys_contract_end_type__id | Oui |
| prochaine date possible de résiliation | next_notice_end_date | text | | Oui |
| notice_date | date | | oui | date de préavis
| délai de préavis | notice_period | int | | Oui |
| délai de préavis unité | notice_period_unit | int | isys_guarantee_period_unit__id | Oui |
| type de résiliation | notice_type | int | isys_contract_notice_period_type__id | Oui |
| période de maintenance/garantie | maintenance_period | int | | Oui |
| période unité | maintenance_period_unit | int | isys_guarantee_period_unit__id | Oui |
| type de paiement | payment_period | int | isys_contract_payment_period__id | Oui |
| description | text_area | | Oui |

### Vertragsinformationen (C__CATS__CONTRACT_INFORMATION)

### Informations sur le contrat (C__CATS__CONTRACT_INFORMATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertragsart | type | int | isys_contract_type__id | Ja  |
| Vertragsnummer | contract_no | text |     | Ja  |
| Kundennummer | customer_no | text |     | Ja  |
| Interne Nummer | internal_no | text |     | Ja  |
| Kosten | costs | double |     | Ja  |
| Produkt | product | text |     | Ja  |
| Reaktionszeiten | reaction_rate | int | isys_contract_reaction_rate__id | Ja  |
| Vertragsstatus | contract_status | int | isys_contract_status__id | Ja  |
| Vertragsbeginn | start_date | date |     | Ja  |
| Vertragsende | end_date | date |     | Ja  |
| Laufzeit | run_time | int |     | Ja  |
| Laufzeit Einheit | run_time_unit | int | isys_guarantee_period_unit__id | Ja  |
| Nächstmögliches Vertragsende | next_contract_end_date | text |     | Ja  |
| Vertragsende durch | end_type | int | isys_contract_end_type__id | Ja  |
| Nächstmögliches Kündigungsdatum | next_notice_end_date | text |     | Ja  |
| Kündigungsdatum | notice_date | date |     | Ja  |
| Kündigungsfrist | notice_period | int |     | Ja  |
| Kündigungsfrist Einheit | notice_period_unit | int | isys_guarantee_period_unit__id | Ja  |
| Kündigungstyp | notice_type | int | isys_contract_notice_period_type__id | Ja  |
| Wartungs-/Garantiefrist | maintenance_period | int |     | Ja  |
| Frist Einheit | maintenance_period_unit | int | isys_guarantee_period_unit__id | Ja  |
| Zahlart | payment_period | int | isys_contract_payment_period__id | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type de contrat | type | int | isys_contract_type__id | Oui |
| numéro de contrat | contract_no | texte | | oui |
| numéro de client | customer_no | text | | oui |
| numéro interne | internal_no | texte | | oui |
| coûts | double | | Oui |
| produit | text | | Oui |
| temps de réaction | reaction_rate | int | isys_contract_reaction_rate__id | Oui |
| statut du contrat | contract_status | int | isys_contract_status__id | oui |
| début de contrat | start_date | date | | oui |
| fin de contrat | end_date | date | | oui |
| durée | run_time | int | | oui |
| durée unité | run_time_unit | int | isys_guarantee_period_unit__id | Oui |
| prochaine fin de contrat possible | next_contract_end_date | text | | Oui |
| fin de contrat par | end_type | int | isys_contract_end_type__id | Oui |
| prochaine date possible de résiliation | next_notice_end_date | text | | Oui |
| notice_date | date | | oui | date de préavis
| délai de préavis | notice_period | int | | Oui |
| délai de préavis unité | notice_period_unit | int | isys_guarantee_period_unit__id | Oui |
| type de résiliation | notice_type | int | isys_contract_notice_period_type__id | Oui |
| période de maintenance/garantie | maintenance_period | int | | Oui |
| période unité | maintenance_period_unit | int | isys_guarantee_period_unit__id | Oui |
| type de paiement | payment_period | int | isys_contract_payment_period__id | Oui |
| description | text_area | | Oui |

### Zugeordnete Objekte (C__CATS__CONTRACT_ALLOCATION)

### Objets associés (C__CATS__CONTRACT_ALLOCATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Objekte | assigned_object | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| assigned_object | int | | Oui |

### Chassis (C__CATS__CHASSIS)

### Châssis (C__CATS__CHASSIS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | front_x | int |     | Ja  |
| Vorderseite vertikale Einheiten | front_y | int |     | Ja  |
| Vorderseite Rastergröße | front_size | int |     | Ja  |
| Rückseite horizontale Einheiten | rear_x | int |     | Ja  |
| Rückseite vertikale Einheiten | rear_y | int |     | Ja  |
| Rückseite Rastergröße | rear_size | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| recto unités horizontales | front_x | int | | Oui |
| recto unités verticales | front_y | int | | Oui |
| front_size | int | | Oui |
| verso unités horizontales | rear_x | int | | Oui |
| verso unités verticales | rear_y | int | | Oui |
| rear_size | int | | Oui |
| description | text_area | | Oui |

### Slots (C__CATS__CHASSIS_SLOT)

### Slots (C__CATS__CHASSIS_SLOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anschlusstyp | connector_type | int | isys_chassis_connector_type__id | Ja  |
| Einschub | insertion | int |     | Ja  |
| Slotbezeichnung | title | text |     | Ja  |
| Horizontale Position | from_x | int |     | Ja  |
| Bis Horizontale Position | to_x | int |     | Ja  |
| Vertikale Position | from_y | int |     | Ja  |
| Bis Vertikale Position | to_y | int |     | Ja  |
| Gerätezuordnung | assigned_devices | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type_de_connexion | connector_type | int | isys_chassis_connector_type__id | Oui |
| insertion | int | | Oui |
| Titre du slot | title | text | | Oui |
| Position horizontale | from_x | int | | Oui |
| à Position horizontale | to_x | int | | Oui |
| Position verticale | from_y | int | | Oui |
| Jusqu'à la position verticale | to_y | int | | Oui |
| assigned_devices | int | | Oui |
| description | text_area | | Oui |

### Zugewiesene Geräte (C__CATS__CHASSIS_DEVICES)

### Périphériques attribués (C__CATS__CHASSIS_DEVICES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Rolle | role | int | isys_chassis_role__id | Ja  |
| Gerätezuordnung | assigned_device | int | isys_connection__id | Ja  |
| Gerätezuordnung (Hostadapter) | assigned_hba | int | isys_catg_hba_list__id | Ja  |
| Gerätezuordnung (Interface) | assigned_interface | int | isys_catg_netp_list__id | Ja  |
| Gerätezuordnung (Stromverbraucher) | assigned_power_consumer | int | isys_catg_pc_list__id | Ja  |
| Eingeschoben bei | assigned_slots | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Key | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| rôle | role | int | isys_chassis_role__id | Oui |
| assignment device | assigned_device | int | isys_connection__id | Oui |
| assigned_hba | int | isys_catg_hba_list__id | Oui |
| assigned_interface | int | isys_catg_netp_list__id | Oui |
| assigned_power_consumer | int | isys_catg_pc_list__id | Oui |
| inséré à | assigned_slots | int | | Oui |
| description | text_area | | Oui |

### Chassis Ansicht (C__CATS__CHASSIS_VIEW)

### Vue du châssis (C__CATS__CHASSIS_VIEW)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | front_x | int |     | Ja  |
| Vorderseite vertikale Einheiten | front_y | int |     | Ja  |
| Vorderseite Rastergröße | front_size | int |     | Ja  |
| Rückseite horizontale Einheiten | rear_x | int |     | Ja  |
| Rückseite vertikale Einheiten | rear_y | int |     | Ja  |
| Rückseite Rastergröße | rear_size | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| recto unités horizontales | front_x | int | | Oui |
| recto unités verticales | front_y | int | | Oui |
| front_size | int | | Oui |
| verso unités horizontales | rear_x | int | | Oui |
| verso unités verticales | rear_y | int | | Oui |
| rear_size | int | | Oui |
| description | text_area | | Oui |

### Varianten (C__CATS__APPLICATION_VARIANT)

### Variantes (C__CATS__APPLICATION_VARIANT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Variante | variant | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| description | titre | texte | | oui |
| variante | texte | | Oui |
| description | text_area | | Oui |

### Nagios (C__CATS__PERSON_NAGIOS)

### Nagios (C__CATS__PERSON_NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Alias | alias | text |     | Ja  |
| contact_name | contact_name | text |     | Ja  |
| contact_name selection | contact_name_selection | int |     | Ja  |
| host_notification_enabled | host_notification_enabled | int |     | Ja  |
| service_notification_enabled | service_notification_enabled | int |     | Ja  |
| host_notification_period | host_notification_period | int |     | Ja  |
| host_notification_period+ | host_notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| service_notification_period | service_notification_period | int |     | Ja  |
| service_notification_period+ | service_notification_period_plus | int | isys_nagios_timeperiods_plus__id | Ja  |
| host_notification_options | host_notification_options | text |     | Ja  |
| service_notification_options | service_notification_options | text |     | Ja  |
| host_notification_commands | host_notification_commands | text |     | Ja  |
| service_notification_commands | service_notification_commands | text |     | Ja  |
| can_submit_commands | can_submit_commands | int |     | Ja  |
| retain_status_information | retain_status_information | int |     | Ja  |
| Diese Konfiguration exportieren | is_exportable | int |     | Ja  |
| retain_nonstatus_information | retain_nonstatus_information | int |     | Ja  |
| custom_object_vars | custom_object_vars | text_area |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| alias | alias | texte | | Oui |
| nom_contact | nom_contact | texte | | Oui |
| sélection_nom_contact | sélection_nom_contact | int | | Oui |
| host_notification_enabled | host_notification_enabled | int | | Oui |
| service_notification_enabled | service_notification_enabled | int | | Oui |
| host_notification_period | host_notification_period | int | | Oui |
| host_notification_period+ | host_notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| service_notification_period | service_notification_period | int | | Oui |
| service_notification_period+ | service_notification_period_plus | int | isys_nagios_timeperiods_plus__id | Oui |
| host_notification_options | host_notification_options | text | | Oui |
| service_notification_options | service_notification_options | texte | | Oui |
| host_notification_commands | host_notification_commands | text | | Oui |
| service_notification_commands | service_notification_commands | text | | Oui |
| can_submit_commands | can_submit_commands | int | | Oui |
| retain_status_information | retain_status_information | int | | Oui |
| exporter cette configuration | is_exportable | int | | Oui |
| retain_nonstatus_information | retain_nonstatus_information | int | | Oui |
| custom_object_vars | custom_object_vars | text_area | Oui |
| description | text_area | | Oui |

### Nagios (C__CATS__PERSON_GROUP_NAGIOS)

### Nagios (C__CATS__PERSON_GROUP_NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is_exportable | int |     | Ja  |
| alias | alias | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Exporter cette configuration | is_exportable | int | | Oui |
| alias | alias | texte | | Oui |
| description | text_area | | Oui |

### Typ (C__CATS__GROUP_TYPE)

### Type (C__CATS__GROUP_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | group_type | int |     | Ja  |
| Report | report | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| type | group_type | int | | Oui |
| rapport | report | int | | Oui |
| description | text_area | | Oui |

### Zugewiesene logische Ports (C__CATS__LAYER2_NET_ASSIGNED_LOGICAL_PORTS)

### Ports logiques alloués (C__CATS__LAYER2_NET_ASSIGNED_LOGICAL_PORTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt-Titel | isys_obj__id | int |     | Ja  |
| Zugewiesene logische Ports | isys_catg_log_port_list__id | int |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Titre de l'objet | isys_obj__id | int | | Oui |
| ports logiques alloués | isys_catg_log_port_list__id | int | | Oui |

### Installation (C__CATS__APPLICATION_SERVICE_ASSIGNED_OBJ)

### Installation (C__CATS__APPLICATION_SERVICE_ASSIGNED_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application_type | int | isys_catg_application_type__id | Ja  |
| Priorität | application_priority | int | isys_catg_application_priority__id | Ja  |
| Zugewiesene Lizenz | assigned_license | int | isys_cats_lic_list__id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned_license_key | text | isys_cats_lic_list__id | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Service | assigned_it_service | int | isys_catg_its_components_list__id | Ja  |
| Variante | assigned_variant | int | isys_cats_app_variant_list__id | Ja  |
| Nagios services vererben | bequest_nagios_services | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Installé sur | object | int | | Non |
| type | application_type | int | isys_catg_application_type__id | oui |
| priorité | application_priority | int | isys_catg_application_priority__id | oui |
| licence attribuée | assigned_license | int | isys_cats_lic_list__id | Oui |
| assigned_license_key | text | isys_cats_lic_list__id | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| service | assigned_it_service | int | isys_catg_its_components_list__id | oui |
| variante | assigned_variant | int | isys_cats_app_variant_list__id | oui |
| hériter des services Nagios | bequest_nagios_services | int | | Oui |
| description | text_area | | Oui |

### Installation (C__CATS__APPLICATION_DBMS_ASSIGNED_OBJ)

### Installation (C__CATS__APPLICATION_DBMS_ASSIGNED_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application_type | int | isys_catg_application_type__id | Ja  |
| Priorität | application_priority | int | isys_catg_application_priority__id | Ja  |
| Zugewiesene Lizenz | assigned_license | int | isys_cats_lic_list__id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned_license_key | text | isys_cats_lic_list__id | Ja  |
| Datenbankschema | assigned_database_schema | int | isys_cats_database_access_list__id | Ja  |
| Service | assigned_it_service | int | isys_catg_its_components_list__id | Ja  |
| Variante | assigned_variant | int | isys_cats_app_variant_list__id | Ja  |
| Nagios services vererben | bequest_nagios_services | int |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| Installé sur | object | int | | Non |
| type | application_type | int | isys_catg_application_type__id | oui |
| priorité | application_priority | int | isys_catg_application_priority__id | oui |
| licence attribuée | assigned_license | int | isys_cats_lic_list__id | Oui |
| assigned_license_key | text | isys_cats_lic_list__id | Oui |
| schéma de base de données | assigned_database_schema | int | isys_cats_database_access_list__id | Oui |
| service | assigned_it_service | int | isys_catg_its_components_list__id | oui |
| variante | assigned_variant | int | isys_cats_app_variant_list__id | oui |
| hériter des services Nagios | bequest_nagios_services | int | | Oui |
| description | text_area | | Oui |

### Netzbereiche (C__CATS__NET_ZONE)

### Zones de réseau (C__CATS__NET_ZONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzbereich Objekt | zone | int | isys_obj__id | Ja  |
| Bereich von | range_from | text |     | Ja  |
| Bereich von | range_from_long | text |     | Ja  |
| Bereich bis | range_to | text |     | Ja  |
| Bereich bis | range_to_long | text |     | Ja  |
| Beschreibung | description | text_area |     | Ja  |

| Nom du champ | Clé | Type de données | Référence | Facultatif |
| --- | --- | --- | --- | --- |
| objet de plage de réseau | zone | int | isys_obj__id | oui |
| plage de | range_from | texte | | oui |
| plage de | range_from_long | texte | | oui |
| range_to | text | | Oui |
| range_to_long | text | | Oui |
| description | text_area | | Oui |