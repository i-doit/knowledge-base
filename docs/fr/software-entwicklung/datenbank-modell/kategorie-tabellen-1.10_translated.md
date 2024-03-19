<!-- TRANSLATED by md-translate -->
# Kategorie-Tabellen 1.10

# Tables des catégories 1.10

!!! info "Diesen Inhalt automatisch erstellen"

! !! info "Créer automatiquement ce contenu

```
Über den URL-Parameter load=property_infos werden die Kategorie-Tabellen für die derzeit installierte Version von i-doit erstellt. Es muss ein Benutzer angemeldet sein. Beispiel: [https://demo.i-doit.com/?load=property_infos](https://demo.i-doit.com/?load=property_infos)
```

## Globale Kategorien

## Catégories globales

### Allgemein

### Général

#### Tabelle: isys_catg_global_list

#### Tableau : isys_catg_global_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| ID  | int | isys_obj | isys_obj__id |     |     |
| Bezeichnung | text | isys_obj | isys_obj__title |     |     |
| Status | int | isys_catg_global_list | isys_obj__status |     |     |
| Erstellungsdatum | text | isys_obj | isys_obj__created |     |     |
| Erstellt von | text | isys_obj | isys_obj__created_by |     |     |
| Letzte Änderung | text | isys_obj | isys_obj__updated |     |     |
| Letzte Änderung durch | text | isys_obj | isys_obj__updated_by |     |     |
| Einsatzzweck | int | isys_catg_global_list | isys_catg_global_list__isys_purpose__id | isys_purpose | isys_purpose__id |
| Kategorie | int | isys_catg_global_list | isys_catg_global_list__isys_catg_global_category__id | isys_catg_global_category | isys_catg_global_category__id |
| SYSID | text | isys_obj | isys_obj__sysid |     |     |
| CMDB-Status | int | isys_catg_global_list | isys_obj__isys_cmdb_status__id | isys_cmdb_status | isys_cmdb_status__id |
| Objekttyp | int | isys_catg_global_list | isys_obj__isys_obj_type__id | isys_obj_type | isys_obj_type__id |
| Tags | int | global_tag | isys_obj__id | isys_tag_2_isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_obj | isys_obj__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| ID | int | isys_obj | isys_obj__id | |
| description | texte | isys_obj | isys_obj__title | |
| statut | int | isys_catg_global_list | isys_obj__status | |
| date de création | texte | isys_obj | isys_obj__created | |
| Créé par | texte | isys_obj | isys_obj__created_by | |
| dernière modification | texte | isys_obj | isys_obj__updated | |
| dernière modification par | texte | isys_obj | isys_obj__updated_by | |
| but d'utilisation | int | isys_catg_global_list | isys_catg_global_list__isys_purpose__id | isys_purpose | isys_purpose__id |
| catégorie | int | isys_catg_global_list | isys_catg_global_list__isys_catg_global_category__id | isys_catg_global_category | isys_catg_global_category__id |
| SYSID | texte | isys_obj | isys_obj__sysid | |
| statut CMDB | int | isys_catg_global_list | isys_obj__isys_cmdb_status__id | isys_cmdb_status | isys_cmdb_status__id |
| type d'objet | int | isys_catg_global_list | isys_obj__isys_obj_type__id | isys_obj_type | isys_obj_type__id |
| tags | int | global_tag | isys_obj__id | isys_tag_2_isys_obj | isys_obj__id |
| description | text_area | isys_obj | isys_obj__description | |

### Modell

### Modèle

#### Tabelle: isys_catg_model_list

#### Tableau : isys_catg_model_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hersteller | int | isys_catg_model_list | isys_catg_model_list__isys_model_manufacturer__id | isys_model_manufacturer | isys_model_manufacturer__id |
| Modell | int | isys_catg_model_list | isys_catg_model_list__isys_model_title__id | isys_model_title | isys_model_title__id |
| Produkt-ID | text | isys_catg_model_list | isys_catg_model_list__productid |     |     |
| Service Tag | text | isys_catg_model_list | isys_catg_model_list__service_tag |     |     |
| Seriennummer | text | isys_catg_model_list | isys_catg_model_list__serial |     |     |
| Firmware | text | isys_catg_model_list | isys_catg_model_list__firmware |     |     |
| Beschreibung | text_area | isys_catg_model_list | isys_catg_model_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| fabricant | int | isys_catg_model_list | isys_catg_model_list__isys_model_manufacturer__id | isys_model_manufacturer | isys_model_manufacturer__id |
| modèle | int | isys_catg_model_list | isys_catg_model_list__isys_model_title__id | isys_model_title | isys_model_title__id |
| ID produit | texte | isys_catg_model_list | isys_catg_model_list__productid | |
| service tag | text | isys_catg_model_list | isys_catg_model_list__service_tag | |
| numéro de série | texte | isys_catg_model_list | isys_catg_model_list__serial | |
| firmware | texte | isys_catg_model_list | isys_catg_model_list__firmware | |
| description | text_area | isys_catg_model_list | isys_catg_model_list__description | |

### Formfaktor

### Facteur de forme

#### Tabelle: isys_catg_formfactor_list

#### Tableau : isys_catg_formfactor_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Formfaktor | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_catg_formfactor_type__id | isys_catg_formfactor_type | isys_catg_formfactor_type__id |
| Höheneinheiten | int | isys_catg_formfactor_list | isys_catg_formfactor_list__rackunits |     |     |
| Maßeinheit | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| Breite | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_width |     |     |
| Höhe | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_height |     |     |
| Tiefe | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_depth |     |     |
| Gewicht | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_weight |     |     |
| Gewichtseinheit | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_weight_unit__id | isys_weight_unit | isys_weight_unit__id |
| Beschreibung | text_area | isys_catg_formfactor_list | isys_catg_formfactor_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| facteur de forme | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_catg_formfactor_type__id | isys_catg_formfactor_type | isys_catg_formfactor_type__id |
| unités de hauteur | int | isys_catg_formfactor_list | isys_catg_formfactor_list__rackunits | |
| unité de mesure | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| largeur | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_width | |
| hauteur | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_height | |
| profondeur | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_depth | |
| poids | float | isys_catg_formfactor_list | isys_catg_formfactor_list__installation_weight | |
| unité de poids | int | isys_catg_formfactor_list | isys_catg_formfactor_list__isys_weight_unit__id | isys_weight_unit | isys_weight_unit__id |
| description | text_area | isys_catg_formfactor_list | isys_catg_formfactor_list__description | |

### CPU

### CPU

#### Tabelle: isys_catg_cpu_list

#### Tableau : isys_catg_cpu_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_cpu_list | isys_catg_cpu_list__title |     |     |
| Hersteller | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_catg_cpu_manufacturer__id | isys_catg_cpu_manufacturer | isys_catg_cpu_manufacturer__id |
| Typ | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_catg_cpu_type__id | isys_catg_cpu_type | isys_catg_cpu_type__id |
| CPU-Frequenz | float | isys_catg_cpu_list | isys_catg_cpu_list__frequency |     |     |
| CPU-Frequenz Einheit | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_frequency_unit__id | isys_frequency_unit | isys_frequency_unit__id |
| CPU-Kerne | int | isys_catg_cpu_list | isys_catg_cpu_list__cores |     |     |
| Beschreibung | text_area | isys_catg_cpu_list | isys_catg_cpu_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_cpu_list | isys_catg_cpu_list__title | |
| fabricant | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_catg_cpu_manufacturer__id | isys_catg_cpu_manufacturer | isys_catg_cpu_manufacturer__id |
| type | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_catg_cpu_type__id | isys_catg_cpu_type | isys_catg_cpu_type__id |
| fréquence CPU | float | isys_catg_cpu_list | isys_catg_cpu_list__frequency | |
| unité de fréquence CPU | int | isys_catg_cpu_list | isys_catg_cpu_list__isys_frequency_unit__id | isys_frequency_unit | isys_frequency_unit__id |
| cœurs CPU | int | isys_catg_cpu_list | isys_catg_cpu_list__cores | |
| description | text_area | isys_catg_cpu_list | isys_catg_cpu_list__description | |

### Speicher

### Mémoire

#### Tabelle: isys_catg_memory_list

#### Tableau : isys_catg_memory_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anzahl | int | isys_catg_memory_list | isys_catg_memory_list__quantity |     |     |
| Bezeichnung | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_title__id | isys_memory_title | isys_memory_title__id |
| Hersteller | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_manufacturer__id | isys_memory_manufacturer | isys_memory_manufacturer__id |
| Typ | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_type__id | isys_memory_type | isys_memory_type__id |
| Gesamtkapazität | float | isys_catg_memory_list | isys_catg_memory_list__capacity |     |     |
| Kapazität | float | isys_catg_memory_list | isys_catg_memory_list__capacity |     |     |
| Speichereinheit | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Beschreibung | text_area | isys_catg_memory_list | isys_catg_memory_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nombre | int | isys_catg_memory_list | isys_catg_memory_list__quantité | |
| désignation | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_title__id | isys_memory_title | isys_memory_title__id |
| fabricant | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_manufacturer__id | isys_memory_manufacturer | isys_memory_manufacturer__id |
| type | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_type__id | isys_memory_type | isys_memory_type__id |
| capacité totale | float | isys_catg_memory_list | isys_catg_memory_list__capacity | |
| capacité | float | isys_catg_memory_list | isys_catg_memory_list__capacity | |
| unité de mémoire | int | isys_catg_memory_list | isys_catg_memory_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| description | text_area | isys_catg_memory_list | isys_catg_memory_list__description | |

### Netzwerk

### Réseau

#### Tabelle: isys_catg_netp_list

#### Tableau : isys_catg_netp_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_netp_list | isys_catg_netp_list__title |     |     |
| Hersteller | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_manufacturer__id | isys_iface_manufacturer | isys_iface_manufacturer__id |
| Modell | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_model__id | isys_iface_model | isys_iface_model__id |
| Seriennummer | text | isys_catg_netp_list | isys_catg_netp_list__serial |     |     |
| Slotnummer | text | isys_catg_netp_list | isys_catg_netp_list__slotnumber |     |     |
| Beschreibung | text_area | isys_catg_netp_list | isys_catg_netp_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| désignation | texte | isys_catg_netp_list | isys_catg_netp_list__title | |
| fabricant | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_manufacturer__id | isys_iface_manufacturer | isys_iface_manufacturer__id |
| modèle | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_model__id | isys_iface_model | isys_iface_model__id |
| numéro de série | texte | isys_catg_netp_list | isys_catg_netp_list__serial | |
| numéro de slot | texte | isys_catg_netp_list | isys_catg_netp_list__slotnumber | |
| description | text_area | isys_catg_netp_list | isys_catg_netp_list__description | |

### Stromverbraucher

### Consommateurs d'électricité

#### Tabelle: isys_catg_pc_list

#### Tableau : isys_catg_pc_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_pc_list | isys_catg_pc_list__title |     |     |
| Aktiv | int | isys_catg_pc_list | isys_catg_pc_list__active |     |     |
| Hersteller | int | isys_catg_pc_list | isys_catg_pc_list__isys_pc_manufacturer__id | isys_pc_manufacturer | isys_pc_manufacturer__id |
| Modell | int | isys_catg_pc_list | isys_catg_pc_list__isys_pc_model__id | isys_pc_model | isys_pc_model__id |
| Volt | text | isys_catg_pc_list | isys_catg_pc_list__volt |     |     |
| Watt | text | isys_catg_pc_list | isys_catg_pc_list__watt |     |     |
| Ampere | text | isys_catg_pc_list | isys_catg_pc_list__ampere |     |     |
| BTU | text | isys_catg_pc_list | isys_catg_pc_list__btu |     |     |
| Zielobjekt | int | output | isys_catg_pc_list__isys_catg_connector_list__id |     |     |
| Verbunden mit Anschluss | int | connected | isys_catg_pc_list__isys_catg_connector_list__id |     |     |
| Zugehöriger Eingang/Ausgang | int | isys_catg_pc_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Beschreibung | text_area | isys_catg_pc_list | isys_catg_pc_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_pc_list | isys_catg_pc_list__title | |
| actif | int | isys_catg_pc_list | isys_catg_pc_list__active | |
| fabricant | int | isys_catg_pc_list | isys_catg_pc_list__isys_pc_manufacturer__id | isys_pc_manufacturer | isys_pc_manufacturer__id |
| modèle | int | isys_catg_pc_list | isys_catg_pc_list__isys_pc_model__id | isys_pc_model | isys_pc_model__id |
| volt | text | isys_catg_pc_list | isys_catg_pc_list__volt | |
| watt | texte | isys_catg_pc_list | isys_catg_pc_list__watt | |
| ampère | texte | isys_catg_pc_list | isys_catg_pc_list__ampere | |
| BTU | texte | isys_catg_pc_list | isys_catg_pc_list__btu | |
| objet cible | int | output | isys_catg_pc_list__isys_catg_connector_list__id | |
| connectée | int | connected | isys_catg_pc_list__isys_catg_connector_list__id | |
| entrée/sortie associée | int | isys_catg_pc_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| description | text_area | isys_catg_pc_list | isys_catg_pc_list__description | |

### Schnittstelle

### Interface

#### Tabelle: isys_catg_ui_list

#### Tableau : isys_catg_ui_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_ui_list | isys_catg_ui_list__title |     |     |
| Verbindungstyp | int | isys_catg_ui_list | isys_catg_ui_list__isys_ui_con_type__id | isys_ui_con_type | isys_ui_con_type__id |
| Anschlusstyp | int | isys_catg_ui_list | isys_catg_ui_list__isys_ui_plugtype__id | isys_ui_plugtype | isys_ui_plugtype__id |
| Verbunden mit | int | connected | isys_catg_ui_list__isys_catg_connector_list__id |     |     |
| Verbunden mit Anschluss | int | connected | isys_catg_ui_list__isys_catg_connector_list__id |     |     |
| Zugehöriger Eingang/Ausgang | int | isys_catg_ui_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Beschreibung | text_area | isys_catg_ui_list | isys_catg_ui_list__description |     |     |
| Relation direction | int | isys_catg_ui_list | isys_catg_connector_list__isys_catg_relation_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_ui_list | isys_catg_ui_list__title | |
| type de connexion | int | isys_catg_ui_list | isys_catg_ui_list__isys_ui_con_type__id | isys_ui_con_type | isys_ui_con_type__id |
| type de connexion | int | isys_catg_ui_list | isys_catg_ui_list__isys_ui_plugtype__id | isys_ui_plugtype | isys_ui_plugtype__id |
| connecté | int | connected | isys_catg_ui_list__isys_catg_connector_list__id | |
| Connecté à Connexion | int | connected | isys_catg_ui_list__isys_catg_connector_list__id | |
| entrée/sortie associée | int | isys_catg_ui_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| description | text_area | isys_catg_ui_list | isys_catg_ui_list__description | |
| direction de la relation | int | isys_catg_ui_list | isys_catg_connector_list__isys_catg_relation_list__id | |

### Softwarezuweisung

### Attribution du logiciel

#### Tabelle: isys_catg_application_list

#### Tableau : isys_catg_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anwendung | int | isys_catg_application_list | isys_catg_application_list__isys_connection__id | isys_connection | isys_connection__id |
| Typ | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| Priorität | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| Zugewiesene Lizenz | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Zugewiesener Lizenzschlüssel | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Datenbankschema | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| Service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| Variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Versionsnummer | int | isys_catg_application_list | isys_catg_application_list__isys_catg_version_list__id | isys_catg_version_list | isys_catg_version_list__id |
| Nagios services vererben | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services |     |     |
| Beschreibung | text_area | isys_catg_application_list | isys_catg_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| application | int | isys_catg_application_list | isys_catg_application_list__isys_connection__id | isys_connection | isys_connection__id |
| type | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| priorité | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Clé de licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| schéma de base de données | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| numéro de version | int | isys_catg_application_list | isys_catg_application_list__isys_catg_version_list__id | isys_catg_version_list | isys_catg_version_list__id |
| Nagios services hériter | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services | |
| description | text_area | isys_catg_application_list | isys_catg_application_list__description | |

### Zugriff

### accès

#### Tabelle: isys_catg_access_list

#### Tableau : isys_catg_access_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primäre Zugriffs-URL | text | isys_catg_access_list | isys_catg_access_list__url |     |     |
| Bezeichnung | text | isys_catg_access_list | isys_catg_access_list__title |     |     |
| Zugriffstyp | int | isys_catg_access_list | isys_catg_access_list__isys_access_type__id | isys_access_type | isys_access_type__id |
| Host[:Port]/URL | text | isys_catg_access_list | isys_catg_access_list__url |     |     |
| Host[:Port]/URL | text | isys_catg_access_list | isys_catg_access_list__id |     |     |
| Primär | int | isys_catg_access_list | isys_catg_access_list__primary |     |     |
| Beschreibung | text_area | isys_catg_access_list | isys_catg_access_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| URL d'accès primaire | texte | isys_catg_access_list | isys_catg_access_list__url | |
| libellé | texte | isys_catg_access_list | isys_catg_access_list__title | |
| type d'accès | int | isys_catg_access_list | isys_catg_access_list__isys_access_type__id | isys_access_type | isys_access_type__id |
| hôte[:port]/URL | texte | isys_catg_access_list | isys_catg_access_list__url | |
| hôte[:port]/URL | texte | isys_catg_access_list | isys_catg_access_list__id | |
| primaire | int | isys_catg_access_list | isys_catg_access_list__primary | |
| description | text_area | isys_catg_access_list | isys_catg_access_list__description | |

### Datensicherung

### Sauvegarde des données

#### Tabelle: isys_catg_backup_list

#### Tableau : isys_catg_backup_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_backup_list | isys_catg_backup_list__title |     |     |
| Wird gesichert von | int | isys_catg_backup_list | isys_catg_backup_list__isys_connection__id | isys_connection | isys_connection__id |
| Art des Backups | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_type__id | isys_backup_type | isys_backup_type__id |
| Zyklus | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_cycle__id | isys_backup_cycle | isys_backup_cycle__id |
| Pfad für zu sichernde Daten | text | isys_catg_backup_list | isys_catg_backup_list__path_to_save |     |     |
| Beschreibung | text_area | isys_catg_backup_list | isys_catg_backup_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| texte | isys_catg_backup_list | isys_catg_backup_list__title | |
| est sauvegardé par | int | isys_catg_backup_list | isys_catg_backup_list__isys_connection__id | isys_connection | isys_connection__id |
| type de sauvegarde | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_type__id | isys_backup_type | isys_backup_type__id |
| cycle | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_cycle__id | isys_backup_cycle | isys_backup_cycle__id |
| chemin pour données à sauvegarder | text | isys_catg_backup_list | isys_catg_backup_list__path_to_save | |
| description | text_area | isys_catg_backup_list | isys_catg_backup_list__description | |

### Notfallplanzuweisung

### Attribution du plan d'urgence

#### Tabelle: isys_catg_emergency_plan_list

#### Tableau : isys_catg_emergency_plan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__title |     |     |
| Zugewiesener Notfallplan | int | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__isys_connection__id | isys_connection | isys_connection__id |
| Zeitbedarf | text | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id |     |     |
| Zeitbedarf (Einheit) | text | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id |     |     |
| Datum Notfallübung | text | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id |     |     |
| Beschreibung | text_area | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__title | |
| plan d'urgence attribué | int | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__isys_connection__id | isys_connection | isys_connection__id |
| besoin en temps | texte | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id | |
| temps requis (unité) | texte | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id | |
| date exercice d'urgence | texte | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__id | |
| description | text_area | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__description | |

### Dateien

### fichiers

#### Tabelle: isys_catg_file_list

#### Tableau : isys_catg_file_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Datei | int | isys_catg_file_list | isys_catg_file_list__isys_connection__id | isys_connection | isys_connection__id |
| Revision | int | isys_catg_file_list | isys_file_version__revision |     |     |
| HTTP-Link (extern) | text | isys_catg_file_list | isys_catg_file_list__link |     |     |
| Beschreibung | text_area | isys_catg_file_list | isys_catg_file_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| fichier | int | isys_catg_file_list | isys_catg_file_list__isys_connection__id | isys_connection | isys_connection__id |
| révision | int | isys_catg_file_list | isys_file_version__revision | |
| lien HTTP (externe) | texte | isys_catg_file_list | isys_catg_file_list__link | |
| description | text_area | isys_catg_file_list | isys_catg_file_list__description | |

### Kontaktzuweisung

### Attribution de contact

#### Tabelle: isys_catg_contact_list

#### Tableau : isys_catg_contact_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kontakt | int | isys_catg_contact_list | isys_catg_contact_list__id |     |     |
| Primärer Kontakt | int | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id | isys_connection | isys_connection__id |
| Kontakt | int | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id | isys_connection | isys_connection__id |
| Primär | int | isys_catg_contact_list | isys_catg_contact_list__primary_contact |     |     |
| Rolle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| Kontakte | text | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id |     |     |
| Beschreibung | text_area | isys_catg_contact_list | isys_catg_contact_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| contact | int | isys_catg_contact_list | isys_catg_contact_list__id | |
| contact primaire | int | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id | isys_connection | isys_connection__id |
| contact | int | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id | isys_connection | isys_connection__id |
| primaire | int | isys_catg_contact_list | isys_catg_contact_list__primary_contact | |
| rôle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| contacts | texte | isys_catg_contact_list | isys_catg_contact_list__isys_connection__id | |
| description | text_area | isys_catg_contact_list | isys_catg_contact_list__description | |

### Logbuch

### Journal de bord

#### Tabelle: isys_catg_logb_list

#### Tableau : isys_catg_logb_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Datum | date_time | isys_catg_logb_list | isys_logbook__date |     |     |
| Objekt | int | isys_catg_logb_list | isys_catg_logb_list__isys_obj__id |     |     |
| Ereignis | int | isys_catg_logb_list | isys_logbook__isys_logbook_event__id | isys_logbook_event | isys_logbook_event__id |
| Quelle | int | isys_catg_logb_list | isys_logbook__isys_logbook_source__id | isys_logbook_source | isys_logbook_source__id |
| Benutzer | int | isys_catg_logb_list | isys_logbook__isys_obj__id |     |     |
| Objekttyp | text | isys_catg_logb_list | isys_logbook__obj_type_static |     |     |
| Kategorie | text | isys_catg_logb_list | isys_logbook__category_static |     |     |
| Alarmlevel | text | isys_catg_logb_list | isys_logbook__isys_logbook_level__id | isys_logbook_level | isys_logbook_level__id |
| Benutzer | text | isys_catg_logb_list | isys_logbook__user_name_static |     |     |
| Ereignis | text | isys_catg_logb_list | isys_logbook__event_static |     |     |
| Kommentar | text | isys_catg_logb_list | isys_logbook__comment |     |     |
| Änderungen | text | isys_catg_logb_list | isys_logbook__changes |     |     |
| Zugriffstyp | int | isys_catg_logb_list | isys_logbook__isys_logbook_reason__id | isys_logbook_reason | isys_logbook_reason__id |
| Beschreibung | text_area | isys_catg_logb_list | isys_logbook__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| date | date_time | isys_catg_logb_list | isys_logbook__date | |
| objet | int | isys_catg_logb_list | isys_catg_logb_list__isys_obj__id | |
| événement | int | isys_catg_logb_list | isys_logbook__isys_logbook_event__id | isys_logbook_event | isys_logbook_event__id |
| source | int | isys_catg_logb_list | isys_logbook__isys_logbook_source__id | isys_logbook_source | isys_logbook_source__id |
| utilisateur | int | isys_catg_logb_list | isys_logbook__isys_obj__id | |
| type d'objet | texte | isys_catg_logb_list | isys_logbook__obj_type_static | |
| catégorie | texte | isys_catg_logb_list | isys_logbook__category_static | |
| niveau d'alarme | texte | isys_catg_logb_list | isys_logbook__isys_logbook_level__id | isys_logbook_level | isys_logbook_level__id |
| utilisateur | texte | isys_catg_logb_list | isys_logbook__user_name_static | |
| événement | texte | isys_catg_logb_list | isys_logbook__event_static | |
| commentaire | texte | isys_catg_logb_list | isys_logbook__comment | |
| modifications | texte | isys_catg_logb_list | isys_logbook__changes | |
| type d'accès | int | isys_catg_logb_list | isys_logbook__isys_logbook_reason__id | isys_logbook_reason | isys_logbook_reason__id |
| description | text_area | isys_catg_logb_list | isys_logbook__description | |

### Controller

### Contrôleur

#### Tabelle: isys_catg_controller_list

#### Tableau : isys_catg_controller_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_controller_list | isys_catg_controller_list__title |     |     |
| Typ | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_type__id | isys_controller_type | isys_controller_type__id |
| Hersteller | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_manufacturer__id | isys_controller_manufacturer | isys_controller_manufacturer__id |
| Modell | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_model__id | isys_controller_model | isys_controller_model__id |
| Beschreibung | text_area | isys_catg_controller_list | isys_catg_controller_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_controller_list | isys_catg_controller_list__title | |
| type | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_type__id | isys_controller_type | isys_controller_type__id |
| fabricant | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_manufacturer__id | isys_controller_manufacturer | isys_controller_manufacturer__id |
| modèle | int | isys_catg_controller_list | isys_catg_controller_list__isys_controller_model__id | isys_controller_model | isys_controller_model__id |
| description | text_area | isys_catg_controller_list | isys_catg_controller_list__description | |

### Standort

### emplacement

#### Tabelle: isys_catg_location_list

#### Tableau : isys_catg_location_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Standort-Pfad | text | isys_catg_location_list | isys_catg_location_list__parentid |     |     |
| Standort | int | isys_catg_location_list | isys_catg_location_list__parentid |     |     |
| Montage | int | isys_catg_location_list | isys_catg_location_list__option |     |     |
| Einschub | int | isys_catg_location_list | isys_catg_location_list__insertion |     |     |
| Position im Schrank | int | isys_catg_location_list | isys_catg_location_list__pos |     |     |
| GPS | text | isys_catg_location_list | isys_catg_location_list__gps |     |     |
| Breitengrad | text | isys_catg_location_list | isys_catg_location_list__gps |     |     |
| Längengrad | text | isys_catg_location_list | isys_catg_location_list__gps |     |     |
| LC__CMDB__CATG__LOCATION__SNMP_SYSLOCATION | text | isys_catg_location_list | isys_catg_location_list__snmp_syslocation |     |     |
| Beschreibung | text_area | isys_catg_location_list | isys_catg_location_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| chemin d'accès au site | texte | isys_catg_location_list | isys_catg_location_list__parentid | |
| site | int | isys_catg_location_list | isys_catg_location_list__parentid | |
| montage | int | isys_catg_location_list | isys_catg_location_list__option | |
| insertion | int | isys_catg_location_list | isys_catg_location_list__insertion | |
| position dans l'armoire | int | isys_catg_location_list | isys_catg_location_list__pos | |
| GPS | texte | isys_catg_location_list | isys_catg_location_list__gps | |
| latitude | texte | isys_catg_location_list | isys_catg_location_list__gps | |
| longitude | texte | isys_catg_location_list | isys_catg_location_list__gps | |
| LC__CMDB__CATG__LOCATION__SNMP_SYSLOCATION | texte | isys_catg_location_list | isys_catg_location_list__snmp_syslocation | |
| description | text_area | isys_catg_location_list | isys_catg_location_list__description | |

### Objektbild

### Image de l'objet

#### Tabelle: isys_catg_image_list

#### Tableau : isys_catg_image_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hochgeladene Bilder | json | isys_catg_image_list | isys_catg_image_list__image_link |     |     |
| Datei | text | isys_catg_image_list | isys_catg_image_list__image_link |     |     |
| Beschreibung | text_area | isys_catg_image_list | isys_catg_image_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| images téléchargées | json | isys_catg_image_list | isys_catg_image_list__image_link | |
| fichier | texte | isys_catg_image_list | isys_catg_image_list__image_link | |
| description | text_area | isys_catg_image_list | isys_catg_image_list__description | |

### Handbuchzuweisung

### Attribution du manuel

#### Tabelle: isys_catg_manual_list

#### Tableau : isys_catg_manual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_manual_list | isys_catg_manual_list__title |     |     |
| Handbuch Datei | int | isys_catg_manual_list | isys_catg_manual_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_catg_manual_list | isys_catg_manual_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_manual_list | isys_catg_manual_list__title | |
| fichier manuel | int | isys_catg_manual_list | isys_catg_manual_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_catg_manual_list | isys_catg_manual_list__description | |

### Soundkarte

### Carte son

#### Tabelle: isys_catg_sound_list

#### Tableau : isys_catg_sound_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hersteller | int | isys_catg_sound_list | isys_catg_sound_list__isys_sound_manufacturer__id | isys_sound_manufacturer | isys_sound_manufacturer__id |
| Bezeichnung | text | isys_catg_sound_list | isys_catg_sound_list__title |     |     |
| Beschreibung | text_area | isys_catg_sound_list | isys_catg_sound_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| fabricant | int | isys_catg_sound_list | isys_catg_sound_list__isys_sound_manufacturer__id | isys_sound_manufacturer | isys_sound_manufacturer__id |
| description | texte | isys_catg_sound_list | isys_catg_sound_list__title | |
| description | text_area | isys_catg_sound_list | isys_catg_sound_list__description | |

### Räumlich zugeordnete Objekte

### Objets affectés à un espace

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_catg_virtual_list | isys_catg_location_list__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_catg_virtual_list | isys_catg_location_list__isys_obj__id | |

### Grafikkarte

### Carte graphique

#### Tabelle: isys_catg_graphic_list

#### Tableau : isys_catg_graphic_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_graphic_list | isys_catg_graphic_list__title |     |     |
| Hersteller | int | isys_catg_graphic_list | isys_catg_graphic_list__isys_graphic_manufacturer__id | isys_graphic_manufacturer | isys_graphic_manufacturer__id |
| Speicher | float | isys_catg_graphic_list | isys_catg_graphic_list__memory |     |     |
| Speichereinheit | int | isys_catg_graphic_list | isys_catg_graphic_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Beschreibung | text_area | isys_catg_graphic_list | isys_catg_graphic_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| désignation | texte | isys_catg_graphic_list | isys_catg_graphic_list__title | |
| fabricant | int | isys_catg_graphic_list | isys_catg_graphic_list__isys_graphic_manufacturer__id | isys_graphic_manufacturer | isys_graphic_manufacturer__id |
| mémoire | float | isys_catg_graphic_list | isys_catg_graphic_list__memory | |
| unité de mémoire | int | isys_catg_graphic_list | isys_catg_graphic_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| description | text_area | isys_catg_graphic_list | isys_catg_graphic_list__description | |

### Virtuelle Maschine

### Machine virtuelle

#### Tabelle: isys_catg_virtual_machine_list

#### Tableau : isys_catg_virtual_machine_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtuelle Maschine | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__vm |     |     |
| Läuft auf Host | int | connection_vm | isys_catg_virtual_machine_list__isys_connection__id | isys_connection | isys_connection__id |
| Virtualisierungs-System | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_vm_type__id | isys_vm_type | isys_vm_type__id |
| Konfigurations Datei | text | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__config_file |     |     |
| Host im Cluster | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary |     |     |
| Beschreibung | text_area | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| machine virtuelle | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__vm | |
| connection_vm | isys_catg_virtual_machine_list__isys_connection__id | isys_connection | isys_connection__id |
| système de virtualisation | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_vm_type__id | isys_vm_type | isys_vm_type__id |
| fichier de configuration | texte | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__config_file | |
| hôte dans le cluster | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary | |
| description | text_area | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__description | |

### Buchhaltung

### Comptabilité

#### Tabelle: isys_catg_accounting_list

#### Tableau : isys_catg_accounting_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Inventarnummer | text | isys_catg_accounting_list | isys_catg_accounting_list__inventory_no |     |     |
| Kostenstelle | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_account__id | isys_account | isys_account__id |
| Rechnungsdatum | date | isys_catg_accounting_list | isys_catg_accounting_list__acquirementdate |     |     |
| Eingekauft bei | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_contact__id | isys_contact | isys_contact__id |
| Investitionskosten | double | isys_catg_accounting_list | isys_catg_accounting_list__price |     |     |
| Betriebskosten | double | isys_catg_accounting_list | isys_catg_accounting_list__operation_expense |     |     |
| Betriebskosten (Einheit) | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_interval__id | isys_interval | isys_interval__id |
| Kostenträger | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_catg_accounting_cost_unit__id | isys_catg_accounting_cost_unit | isys_catg_accounting_cost_unit__id |
| Lieferschein-Nummer | text | isys_catg_accounting_list | isys_catg_accounting_list__delivery_note_no |     |     |
| Beschaffungsart | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_catg_accounting_procurement__id | isys_catg_accounting_procurement | isys_catg_accounting_procurement__id |
| Lieferdatum | date | isys_catg_accounting_list | isys_catg_accounting_list__delivery_date |     |     |
| Rechnungs-Nr. | text | isys_catg_accounting_list | isys_catg_accounting_list__invoice_no |     |     |
| Bestell-Nr. | text | isys_catg_accounting_list | isys_catg_accounting_list__order_no |     |     |
| Garantiezeitraum | int | isys_catg_accounting_list | isys_catg_accounting_list__guarantee_period |     |     |
| Garantiezeitraum Einheit | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_guarantee_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Restgarantie | text | isys_catg_accounting_list | isys_catg_accounting_list__id |     |     |
| Garantiezeitraum nach | int | isys_catg_accounting_list | isys_catg_accounting_list__guarantee_period_base |     |     |
| Bestelldatum | date | isys_catg_accounting_list | isys_catg_accounting_list__order_date |     |     |
| Garantiedatum | date | isys_catg_accounting_list | isys_catg_accounting_list__id |     |     |
| Restgarantie | text | isys_catg_accounting_list | isys_catg_accounting_list__id |     |     |
| Beschreibung | text_area | isys_catg_accounting_list | isys_catg_accounting_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro d'inventaire | texte | isys_catg_accounting_list | isys_catg_accounting_list__inventory_no | |
| centre de coûts | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_account__id | isys_account | isys_account__id |
| date de facturation | isys_catg_accounting_list | isys_catg_accounting_list__acquirementdate | |
| Acheté chez | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_contact__id | isys_contact | isys_contact__id |
| frais d'investissement | double | isys_catg_accounting_list | isys_catg_accounting_list__price | |
| double | isys_catg_accounting_list | isys_catg_accounting_list__operation_expense | |
| coûts d'exploitation (unité) | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_interval__id | isys_interval | isys_interval__id |
| support de coûts | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_catg_accounting_cost_unit__id | isys_catg_accounting_cost_unit | isys_catg_accounting_cost_unit__id |
| numéro de bon de livraison | texte | isys_catg_accounting_list | isys_catg_accounting_list__delivery_note_no | |
| type d'approvisionnement | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_catg_accounting_procurement__id | isys_catg_accounting_procurement | isys_catg_accounting_procurement__id |
| date de livraison | isys_catg_accounting_list | isys_catg_accounting_list__delivery_date | |
| n° facture | texte | isys_catg_accounting_list | isys_catg_accounting_list__invoice_no | |
| texte | isys_catg_accounting_list | isys_catg_accounting_list__order_no | |
| période de garantie | int | isys_catg_accounting_list | isys_catg_accounting_list__guarantee_period | |
| période de garantie unité | int | isys_catg_accounting_list | isys_catg_accounting_list__isys_guarantee_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| garantie résiduelle | text | isys_catg_accounting_list | isys_catg_accounting_list__id | |
| période de garantie après | int | isys_catg_accounting_list | isys_catg_accounting_list__guarantee_period_base | |
| date de commande | date | isys_catg_accounting_list | isys_catg_accounting_list__order_date | |
| date de garantie | isys_catg_accounting_list | isys_catg_accounting_list__id | |
| texte | isys_catg_accounting_list | isys_catg_accounting_list__id | |
| description | text_area | isys_catg_accounting_list | isys_catg_accounting_list__description | |

### Port

### Port

#### Tabelle: isys_catg_port_list

#### Tableau : isys_catg_port_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_port_list | isys_catg_port_list__title |     |     |
| Verknüpftes Interface | int | isys_catg_port_list | isys_catg_port_list__isys_catg_netp_list__id | isys_catg_netp_list | isys_catg_netp_list__id |
| Typ | int | isys_catg_port_list | isys_catg_port_list__isys_port_type__id | isys_port_type | isys_port_type__id |
| Modus | int | isys_catg_port_list | isys_catg_port_list__isys_port_mode__id | isys_port_mode | isys_port_mode__id |
| Stecker | int | isys_catg_port_list | isys_catg_port_list__isys_plug_type__id | isys_plug_type | isys_plug_type__id |
| Negotiation | int | isys_catg_port_list | isys_catg_port_list__isys_port_negotiation__id | isys_port_negotiation | isys_port_negotiation__id |
| Duplex | int | isys_catg_port_list | isys_catg_port_list__isys_port_duplex__id | isys_port_duplex | isys_port_duplex__id |
| Geschwindigkeit | float | isys_catg_port_list | isys_catg_port_list__port_speed_value |     |     |
| Einheit | int | isys_catg_port_list | isys_catg_port_list__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| Standard | int | isys_catg_port_list | isys_catg_port_list__isys_port_standard__id | isys_port_standard | isys_port_standard__id |
| MAC-Adresse | text | isys_catg_port_list | isys_catg_port_list__mac |     |     |
| MTU | text | isys_catg_port_list | isys_catg_port_list__mtu |     |     |
| Verbunden mit | int | connected_connector | isys_catg_port_list__isys_catg_connector_list__id |     |     |
| Verbunden mit Anschluss | int | connected | isys_catg_port_list__isys_catg_connector_list__id |     |     |
| Zugehöriger Eingang/Ausgang | int | isys_catg_port_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Kabel-ID | int | isys_catg_port_list | isys_catg_connector_list__isys_cable_connection__id |     |     |
| Aktiv | int | isys_catg_port_list | isys_catg_port_list__state_enabled |     |     |
| Hostadresse | int | isys_catg_port_list | isys_catg_port_list__id | isys_catg_ip_list_2_isys_catg_port_list | isys_catg_ip_list_2_isys_catg_port_list__isys_catg_port_list__id |
| Layer-2-Netz | int | isys_catg_port_list | isys_catg_port_list__id |     |     |
| Verknüpftes Interface (HBA) | int | isys_catg_port_list | isys_catg_port_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| Standard VLAN | int | isys_catg_port_list | isys_catg_port_list__id | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id |
| Beschreibung | text_area | isys_catg_port_list | isys_catg_port_list__description |     |     |
| Relation direction | int | isys_catg_port_list | isys_catg_connector_list__isys_catg_relation_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| texte | isys_catg_port_list | isys_catg_port_list__title | |
| interface liée | int | isys_catg_port_list | isys_catg_port_list__isys_catg_netp_list__id | isys_catg_netp_list | isys_catg_netp_list__id |
| type | int | isys_catg_port_list | isys_catg_port_list__isys_port_type__id | isys_port_type | isys_port_type__id |
| mode | int | isys_catg_port_list | isys_catg_port_list__isys_port_mode__id | isys_port_mode | isys_port_mode__id |
| connecteur | int | isys_catg_port_list | isys_catg_port_list__isys_plug_type__id | isys_plug_type | isys_plug_type__id |
| Négociation | int | isys_catg_port_list | isys_catg_port_list__isys_port_negotiation__id | isys_port_negotiation | isys_port_negotiation__id |
| duplex | int | isys_catg_port_list | isys_catg_port_list__isys_port_duplex__id | isys_port_duplex | isys_port_duplex__id |
| vitesse | float | isys_catg_port_list | isys_catg_port_list__port_speed_value | |
| unité | int | isys_catg_port_list | isys_catg_port_list__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| standard | int | isys_catg_port_list | isys_catg_port_list__isys_port_standard__id | isys_port_standard | isys_port_standard__id |
| adresse MAC | texte | isys_catg_port_list | isys_catg_port_list__mac | |
| MTU | texte | isys_catg_port_list | isys_catg_port_list__mtu | |
| Connecté à | int | connected_connector | isys_catg_port_list__isys_catg_connector_list__id | |
| connectée | int | connected | isys_catg_port_list__isys_catg_connector_list__id | |
| entrée/sortie associée | int | isys_catg_port_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| ID câble | int | isys_catg_port_list | isys_catg_connector_list__isys_cable_connection__id | |
| actif | int | isys_catg_port_list | isys_catg_port_list__state_enabled | |
| adresse de l'hôte | int | isys_catg_port_list | isys_catg_port_list__id | isys_catg_ip_list_2_isys_catg_port_list | isys_catg_ip_list_2_isys_catg_port_list__isys_catg_port_list__id |
| réseau de couche 2 | int | isys_catg_port_list | isys_catg_port_list__id | |
| Interface liée (HBA) | int | isys_catg_port_list | isys_catg_port_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| VLAN standard | int | isys_catg_port_list | isys_catg_port_list__id | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id |
| description | text_area | isys_catg_port_list | isys_catg_port_list__description | |
| direction de la relation | int | isys_catg_port_list | isys_catg_connector_list__isys_catg_relation_list__id | |

### Interface

### Interface

#### Tabelle: isys_catg_netp_list

#### Tableau : isys_catg_netp_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_netp_list | isys_catg_netp_list__title |     |     |
| Hersteller | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_manufacturer__id | isys_iface_manufacturer | isys_iface_manufacturer__id |
| Modell | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_model__id | isys_iface_model | isys_iface_model__id |
| Seriennummer | text | isys_catg_netp_list | isys_catg_netp_list__serial |     |     |
| Slotnummer | text | isys_catg_netp_list | isys_catg_netp_list__slotnumber |     |     |
| Beschreibung | text_area | isys_catg_netp_list | isys_catg_netp_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| désignation | texte | isys_catg_netp_list | isys_catg_netp_list__title | |
| fabricant | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_manufacturer__id | isys_iface_manufacturer | isys_iface_manufacturer__id |
| modèle | int | isys_catg_netp_list | isys_catg_netp_list__isys_iface_model__id | isys_iface_model | isys_iface_model__id |
| numéro de série | texte | isys_catg_netp_list | isys_catg_netp_list__serial | |
| numéro de slot | texte | isys_catg_netp_list | isys_catg_netp_list__slotnumber | |
| description | text_area | isys_catg_netp_list | isys_catg_netp_list__description | |

### Logische Ports

### Ports logiques

#### Tabelle: isys_catg_log_port_list

#### Tableau : isys_catg_log_port_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_log_port_list | isys_catg_log_port_list__title |     |     |
| Netz(e) | int | isys_catg_log_port_list | isys_catg_log_port_list__id |     |     |
| MAC | text | isys_catg_log_port_list | isys_catg_log_port_list__mac |     |     |
| Typ | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_netx_ifacel_type__id | isys_netx_ifacel_type | isys_netx_ifacel_type__id |
| Zuweisung | int | isys_catg_log_port_list | isys_catg_log_port_list__id |     |     |
| Eltern-Port | int | log_port | isys_catg_log_port_list__parent | isys_catg_log_port_list | isys_catg_log_port_list__id |
| Standard | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_netp_ifacel_standard__id | isys_netp_ifacel_standard | isys_netp_ifacel_standard__id |
| Aktiv | int | isys_catg_log_port_list | isys_catg_log_port_list__active |     |     |
| Hostadresse | int | isys_catg_log_port_list | isys_catg_log_port_list__id |     |     |
| Verbunden mit Anschluss | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_catg_log_port_list__id |     |     |
| Beschreibung | text_area | isys_catg_log_port_list | isys_catg_log_port_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_log_port_list | isys_catg_log_port_list__title | |
| réseau(x) | int | isys_catg_log_port_list | isys_catg_log_port_list__id | |
| MAC | texte | isys_catg_log_port_list | isys_catg_log_port_list__mac | |
| type | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_netx_ifacel_type__id | isys_netx_ifacel_type | isys_netx_ifacel_type__id |
| affectation | int | isys_catg_log_port_list | isys_catg_log_port_list__id | |
| port parent | int | log_port | isys_catg_log_port_list__parent | isys_catg_log_port_list | isys_catg_log_port_list__id |
| standard | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_netp_ifacel_standard__id | isys_netp_ifacel_standard | isys_netp_ifacel_standard__id |
| actif | int | isys_catg_log_port_list | isys_catg_log_port_list__active | |
| adresse de l'hôte | int | isys_catg_log_port_list | isys_catg_log_port_list__id | |
| Connecté au port | int | isys_catg_log_port_list | isys_catg_log_port_list__isys_catg_log_port_list__id | |
| description | text_area | isys_catg_log_port_list | isys_catg_log_port_list__description | |

### Laufwerk

### Lecteur

#### Tabelle: isys_catg_drive_list

#### Tableau : isys_catg_drive_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Laufwerksbuchstabe | text | isys_catg_drive_list | isys_catg_drive_list__driveletter |     |     |
| Bezeichnung | text | isys_catg_drive_list | isys_catg_drive_list__title |     |     |
| Systemlaufwerk | int | isys_catg_drive_list | isys_catg_drive_list__system_drive |     |     |
| Dateisystem | int | isys_catg_drive_list | isys_catg_drive_list__isys_filesystem_type__id | isys_filesystem_type | isys_filesystem_type__id |
| Kapazität | float | isys_catg_drive_list | isys_catg_drive_list__capacity |     |     |
| Speichereinheit | int | c_unit | isys_catg_drive_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Seriennummer | text | isys_catg_drive_list | isys_catg_drive_list__serial |     |     |
| Software-RAID-Gruppe | int | isys_catg_drive_list | isys_catg_drive_list__id__raid_pool | isys_catg_raid_list | isys_catg_raid_list__id |
| Typ | int | isys_catg_drive_list | isys_catg_drive_list__isys_catd_drive_type__id | isys_catd_drive_type | isys_catd_drive_type__id |
| Auf Gerät | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| Auf Gerät Raid-Array | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_raid_list__id | isys_catg_raid_list | isys_catg_raid_list__id |
| Auf Gerät Logische Geräte (Client) | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_ldevclient_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id |
| Objekttyp Konstante | text | isys_catg_drive_list | isys_catg_drive_list__const |     |     |
| Freier Speicher | float | isys_catg_drive_list | isys_catg_drive_list__free_space |     |     |
| Speichereinheit | int | fs_unit | isys_catg_drive_list__free_space__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Belegter Speicher | float | isys_catg_drive_list | isys_catg_drive_list__used_space |     |     |
| Speichereinheit | int | us_unit | isys_catg_drive_list__used_space__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Beschreibung | text_area | isys_catg_drive_list | isys_catg_drive_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| lettre de lecteur | texte | isys_catg_drive_list | isys_catg_drive_list__driveletter | |
| titre | texte | isys_catg_drive_list | isys_catg_drive_list__titre | |
| lecteur système | int | isys_catg_drive_list | isys_catg_drive_list__system_drive | |
| système de fichiers | int | isys_catg_drive_list | isys_catg_drive_list__isys_filesystem_type__id | isys_filesystem_type | isys_filesystem_type__id |
| capacité | float | isys_catg_drive_list | isys_catg_drive_list__capacity | |
| unité de mémoire | int | c_unit | isys_catg_drive_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| numéro de série | texte | isys_catg_drive_list | isys_catg_drive_list__serial | |
| groupe RAID logiciel | int | isys_catg_drive_list | isys_catg_drive_list__id__raid_pool | isys_catg_raid_list | isys_catg_raid_list__id |
| type | int | isys_catg_drive_list | isys_catg_drive_list__isys_catd_drive_type__id | isys_catd_drive_type | isys_catd_drive_type__id |
| sur périphérique | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| Sur périphérique Matrice Raid | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_raid_list__id | isys_catg_raid_list | isys_catg_raid_list__id |
| sur périphérique Périphériques logiques (client) | int | isys_catg_drive_list | isys_catg_drive_list__isys_catg_ldevclient_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id |
| type d'objet constante | text | isys_catg_drive_list | isys_catg_drive_list__const | |
| mémoire libre | float | isys_catg_drive_list | isys_catg_drive_list__free_space | |
| unité de mémoire | int | fs_unit | isys_catg_drive_list__free_space__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| mémoire occupée | float | isys_catg_drive_list | isys_catg_drive_list__used_space | |
| unité de mémoire | int | us_unit | isys_catg_drive_list__used_space__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| description | text_area | isys_catg_drive_list | isys_catg_drive_list__description | |

### Gerät

### appareil

#### Tabelle: isys_catg_stor_list

#### Tableau : isys_catg_stor_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_type__id | isys_stor_type | isys_stor_type__id |
| Bezeichnung | text | isys_catg_stor_list | isys_catg_stor_list__title |     |     |
| Hersteller | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_manufacturer__id | isys_stor_manufacturer | isys_stor_manufacturer__id |
| Modell | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_model__id | isys_stor_model | isys_stor_model__id |
| Speichereinheit | int | isys_catg_stor_list | isys_catg_stor_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Kapazität | double | isys_catg_stor_list | isys_catg_stor_list__capacity |     |     |
| Hotspare | int | isys_catg_stor_list | isys_catg_stor_list__hotspare |     |     |
| Anschluss | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_con_type__id | isys_stor_con_type | isys_stor_con_type__id |
| Controller | int | isys_catg_stor_list | isys_catg_stor_list__isys_catg_controller_list__id | isys_catg_controller_list | isys_catg_controller_list__id |
| Hardware-RAID-Gruppe | int | isys_catg_stor_list | isys_catg_stor_list__isys_catg_raid_list__id | isys_catg_raid_list | isys_catg_raid_list__id |
| Seriennummer | text | isys_catg_stor_list | isys_catg_stor_list__serial |     |     |
| Beschreibung | text_area | isys_catg_stor_list | isys_catg_stor_list__description |     |     |
| LTO Typ | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_lto_type__id | isys_stor_lto_type | isys_stor_lto_type__id |
| FC Adresse | text | isys_catg_stor_list | isys_catg_stor_list__fc_address |     |     |
| Firmware | text | isys_catg_stor_list | isys_catg_stor_list__firmware |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_type__id | isys_stor_type | isys_stor_type__id |
| description | texte | isys_catg_stor_list | isys_catg_stor_list__title | |
| fabricant | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_manufacturer__id | isys_stor_manufacturer | isys_stor_manufacturer__id |
| modèle | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_model__id | isys_stor_model | isys_stor_model__id |
| unité de mémoire | int | isys_catg_stor_list | isys_catg_stor_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| capacité | double | isys_catg_stor_list | isys_catg_stor_list__capacity | |
| hotspare | int | isys_catg_stor_list | isys_catg_stor_list__hotspare | |
| connecteur | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_con_type__id | isys_stor_con_type | isys_stor_con_type__id |
| contrôleur | int | isys_catg_stor_list | isys_catg_stor_list__isys_catg_controller_list__id | isys_catg_controller_list | isys_catg_controller_list__id |
| groupe RAID matériel | int | isys_catg_stor_list | isys_catg_stor_list__isys_catg_raid_list__id | isys_catg_raid_list | isys_catg_raid_list__id |
| numéro de série | texte | isys_catg_stor_list | isys_catg_stor_list__serial | |
| description | text_area | isys_catg_stor_list | isys_catg_stor_list__description | |
| type LTO | int | isys_catg_stor_list | isys_catg_stor_list__isys_stor_lto_type__id | isys_stor_lto_type | isys_stor_lto_type__id |
| adresse FC | texte | isys_catg_stor_list | isys_catg_stor_list__fc_address | |
| firmware | text | isys_catg_stor_list | isys_catg_stor_list__firmware | |

### FC-Port

### Port FC

#### Tabelle: isys_catg_fc_port_list

#### Tableau : isys_catg_fc_port_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_fc_port_list | isys_catg_fc_port_list__title |     |     |
| Typ | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_fc_port_type__id | isys_fc_port_type | isys_fc_port_type__id |
| Verbundener Controller | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| Zugehöriger Eingang/Ausgang | int | isys_catg_fc_port_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Medium | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_fc_port_medium__id | isys_fc_port_medium | isys_fc_port_medium__id |
| Geschwindigkeit | int | isys_catg_fc_port_list | isys_catg_fc_port_list__port_speed |     |     |
| Geschwindigkeit Einheit | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| Node WWN | text | isys_catg_fc_port_list | isys_catg_fc_port_list__wwn |     |     |
| Port WW(P)N | text | isys_catg_fc_port_list | isys_catg_fc_port_list__wwpn |     |     |
| SAN Zone und Verknüpfungsart | int | isys_catg_fc_port_list | isys_catg_fc_port_list__id |     |     |
| Zielobjekt | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_catg_connector_list__id |     |     |
| Anschluss | int | connected | isys_catg_fc_port_list__isys_catg_connector_list__id |     |     |
| Verbindung | int | connected | isys_catg_fc_port_list__isys_catg_connector_list__id |     |     |
| Beschreibung | text_area | isys_catg_fc_port_list | isys_catg_fc_port_list__description |     |     |
| Relation direction | int | isys_catg_fc_port_list | isys_catg_connector_list__isys_catg_relation_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_fc_port_list | isys_catg_fc_port_list__title | |
| type | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_fc_port_type__id | isys_fc_port_type | isys_fc_port_type__id |
| contrôleur connecté | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| entrée/sortie associée | int | isys_catg_fc_port_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| support | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_fc_port_medium__id | isys_fc_port_medium | isys_fc_port_medium__id |
| vitesse | int | isys_catg_fc_port_list | isys_catg_fc_port_list__port_speed | |
| unité de vitesse | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| Node WWN | text | isys_catg_fc_port_list | isys_catg_fc_port_list__wwn | |
| port WW(P)N | texte | isys_catg_fc_port_list | isys_catg_fc_port_list__wwpn | |
| zone SAN et type de lien | int | isys_catg_fc_port_list | isys_catg_fc_port_list__id | |
| objet cible | int | isys_catg_fc_port_list | isys_catg_fc_port_list__isys_catg_connector_list__id | |
| connexion | int | connected | isys_catg_fc_port_list__isys_catg_connector_list__id | |
| connexion | int | connected | isys_catg_fc_port_list__isys_catg_connector_list__id | |
| description | text_area | isys_catg_fc_port_list | isys_catg_fc_port_list__description | |
| direction de la relation | int | isys_catg_fc_port_list | isys_catg_connector_list__isys_catg_relation_list__id | |

### Hostadresse

### Adresse de l'hôte

#### Tabelle: isys_catg_ip_list

#### Tableau : isys_catg_ip_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primäre Hostadresse | text | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Primärer Hostname | text | isys_catg_ip_list | isys_catg_ip_list__hostname |     |     |
| Typ | int | isys_catg_ip_list | isys_catg_ip_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| Primär | int | isys_catg_ip_list | isys_catg_ip_list__primary |     |     |
| Aktiv | int | isys_catg_ip_list | isys_catg_ip_list__active |     |     |
| Netz | int | isys_catg_ip_list | isys_cats_net_ip_addresses_list__isys_obj__id |     |     |
| Netzbereich | int | isys_catg_ip_list | isys_catg_ip_list__isys_obj__id__zone |     |     |
| Adressvergabe IPv4 | int | isys_catg_ip_list | isys_catg_ip_list__isys_ip_assignment__id | isys_ip_assignment | isys_ip_assignment__id |
| IPv4-Adresse | text | ipv4 | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Adressvergabe IPv6 | int | isys_catg_ip_list | isys_catg_ip_list__isys_ipv6_assignment__id | isys_ipv6_assignment | isys_ipv6_assignment__id |
| IPv6 Gültigkeitsbereich | int | isys_catg_ip_list | isys_catg_ip_list__isys_ipv6_scope__id | isys_ipv6_scope | isys_ipv6_scope__id |
| IPv6-Adresse | text | ipv6 | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Hostadresse | text | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Hostname | text | isys_catg_ip_list | isys_catg_ip_list__hostname |     |     |
| Domain | text | isys_catg_ip_list | isys_catg_ip_list__domain |     |     |
| DNS Server | int | dns | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_catg_ip_list | isys_catg_ip_list__id |
| DNS Server Adresse | text | dns | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_catg_ip_list | isys_catg_ip_list__id |
| Suchdomänen | int | dns_domain | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_net_dns_domain | isys_catg_ip_list__id |
| Standardgateway für das Netz | int | gateway | isys_catg_ip_list__id |     |     |
| Verknüpfter Port | int | isys_catg_ip_list | isys_catg_ip_list__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| Verknüpfter Port | int | isys_catg_ip_list | isys_catg_ip_list__isys_catg_log_port_list__id | isys_catg_log_port_list | isys_catg_log_port_list__id |
| Hostadressen | text | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id |     |     |
| Hostname (FQDN) | text | isys_catg_ip_list | isys_catg_ip_list__id |     |     |
| Aliase | text | isys_catg_ip_list | isys_catg_ip_list__id |     |     |
| Beschreibung | text_area | isys_catg_ip_list | isys_catg_ip_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| adresse d'hôte primaire | texte | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| nom d'hôte primaire | texte | isys_catg_ip_list | isys_catg_ip_list__hostname | |
| type | int | isys_catg_ip_list | isys_catg_ip_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| primaire | int | isys_catg_ip_list | isys_catg_ip_list__primary | |
| actif | int | isys_catg_ip_list | isys_catg_ip_list__active | |
| réseau | int | isys_catg_ip_list | isys_cats_net_ip_addresses_list__isys_obj__id | |
| zone de réseau | int | isys_catg_ip_list | isys_catg_ip_list__isys_obj__id__zone | |
| attribution d'adresse IPv4 | int | isys_catg_ip_list | isys_catg_ip_list__isys_ip_assignment__id | isys_ip_assignment | isys_ip_assignment__id |
| adresse IPv4 | texte | ipv4 | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| attribution d'adresse IPv6 | int | isys_catg_ip_list | isys_catg_ip_list__isys_ipv6_assignment__id | isys_ipv6_assignment | isys_ipv6_assignment__id |
| domaine de validité IPv6 | int | isys_catg_ip_list | isys_catg_ip_list__isys_ipv6_scope__id | isys_ipv6_scope | isys_ipv6_scope__id |
| adresse IPv6 | texte | ipv6 | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| adresse de l'hôte | texte | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| nom d'hôte | texte | isys_catg_ip_list | isys_catg_ip_list__nom d'hôte | |
| domaine | texte | isys_catg_ip_list | isys_catg_ip_list__domaine | |
| serveur DNS | int | dns | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_catg_ip_list | isys_catg_ip_list__id |
| adresse du serveur DNS | texte | dns | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_catg_ip_list | isys_catg_ip_list__id |
| domaines de recherche | int | dns_domain | isys_catg_ip_list__id | isys_catg_ip_list_2_isys_net_dns_domain | isys_catg_ip_list__id |
| passerelle par défaut pour le réseau | int | gateway | isys_catg_ip_list__id | |
| Port lié | int | isys_catg_ip_list | isys_catg_ip_list__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| port lié | int | isys_catg_ip_list | isys_catg_ip_list__isys_catg_log_port_list__id | isys_catg_log_port_list | isys_catg_log_port_list__id |
| adresse d'hôte | texte | isys_catg_ip_list | isys_catg_ip_list__isys_cats_net_ip_addresses_list__id | |
| nom d'hôte (FQDN) | texte | isys_catg_ip_list | isys_catg_ip_list__id | |
| alias | texte | isys_catg_ip_list | isys_catg_ip_list__id | |
| description | text_area | isys_catg_ip_list | isys_catg_ip_list__description | |

### Version

### version

#### Tabelle: isys_catg_version_list

#### Tableau : isys_catg_version_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Versionsnummer | text | isys_catg_version_list | isys_catg_version_list__title |     |     |
| Servicepack | text | isys_catg_version_list | isys_catg_version_list__servicepack |     |     |
| Kernel | text | isys_catg_version_list | isys_catg_version_list__kernel |     |     |
| Patchlevel | text | isys_catg_version_list | isys_catg_version_list__hotfix |     |     |
| Beschreibung | text_area | isys_catg_version_list | isys_catg_version_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro de version | texte | isys_catg_version_list | isys_catg_version_list__title | |
| Servicepack | texte | isys_catg_version_list | isys_catg_version_list__servicepack | |
| noyau | texte | isys_catg_version_list | isys_catg_version_list__kernel | |
| niveau de patch | texte | isys_catg_version_list | isys_catg_version_list__hotfix | |
| description | text_area | isys_catg_version_list | isys_catg_version_list__description | |

### Anschlüsse

### Connexions

#### Tabelle: isys_catg_connector_list

#### Tableau : isys_catg_connector_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_connector_list | isys_catg_connector_list__title |     |     |
| Ein-/Ausgang | int | isys_catg_connector_list | isys_catg_connector_list__type |     |     |
| Leitungsnetz | int | isys_catg_connector_list | isys_catg_connector_list__isys_connection__id | isys_connection | isys_connection__id |
| Interface | int | isys_catg_connector_list | isys_catg_connector_list__isys_interface__id | isys_interface | isys_interface__id |
| Farbe / Wellenlängen | int | fiber_wave_lengths | isys_catg_connector_list__id | isys_catg_connector_list_2_isys_fiber_wave_length | isys_catg_connector_list__id |
| Anschlussart | int | isys_catg_connector_list | isys_catg_connector_list__isys_connection_type__id | isys_connection_type | isys_connection_type__id |
| Verbunden mit Anschluss | int | connected_connector | isys_catg_connector_list__id |     |     |
| Zugehöriger Kategorietyp | text | isys_catg_connector_list | isys_catg_connector_list__assigned_category |     |     |
| Kabel | int | isys_catg_connector_list | isys_catg_connector_list__isys_cable_connection__id |     |     |
| Verwendete Faser/Ader (RX) | int | isys_catg_connector_list | isys_catg_connector_list__used_fiber_lead_rx |     |     |
| Verwendete Faser/Ader (TX) | int | isys_catg_connector_list | isys_catg_connector_list__used_fiber_lead_tx |     |     |
| Zugehöriger Eingang/Ausgang | int | isys_catg_connector_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Beschreibung | text_area | isys_catg_connector_list | isys_catg_connector_list__description |     |     |
| Relation direction | int | isys_catg_connector_list | isys_catg_connector_list__isys_catg_relation_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_connector_list | isys_catg_connector_list__title | |
| entrée/sortie | int | isys_catg_connector_list | isys_catg_connector_list__type | |
| réseau de lignes | int | isys_catg_connector_list | isys_catg_connector_list__isys_connection__id | isys_connection | isys_connection__id |
| interface | int | isys_catg_connector_list | isys_catg_connector_list__isys_interface__id | isys_interface | isys_interface__id |
| couleur / longueurs d'onde | int | fiber_wave_lengths | isys_catg_connector_list__id | isys_catg_connector_list_2_isys_fiber_wave_length | isys_catg_connector_list__id |
| type de connexion | int | isys_catg_connector_list | isys_catg_connector_list__isys_connection_type__id | isys_connection_type | isys_connection_type__id |
| Connecté au connecteur | int | connected_connector | isys_catg_connector_list__id | |
| type de catégorie associée | texte | isys_catg_connector_list | isys_catg_connector_list__assigned_category | |
| câble | int | isys_catg_connector_list | isys_catg_connector_list__isys_cable_connection__id | |
| fibre/fil utilisé (RX) | int | isys_catg_connector_list | isys_catg_connector_list__used_fiber_lead_rx | |
| fibre/fil utilisé (TX) | int | isys_catg_connector_list | isys_catg_connector_list__used_fiber_lead_tx | |
| entrée/sortie associée | int | isys_catg_connector_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| description | text_area | isys_catg_connector_list | isys_catg_connector_list__description | |
| direction de la relation | int | isys_catg_connector_list | isys_catg_connector_list__isys_catg_relation_list__id | |

### Rechnung

### facture

#### Tabelle: isys_catg_invoice_list

#### Tableau : isys_catg_invoice_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_invoice_list | isys_catg_invoice_list__denotation |     |     |
| Rechnungsdatum | date | isys_catg_invoice_list | isys_catg_invoice_list__date |     |     |
| Betrag | double | isys_catg_invoice_list | isys_catg_invoice_list__amount |     |     |
| Bearbeitet am | date | isys_catg_invoice_list | isys_catg_invoice_list__edited |     |     |
| Abgabe Finanzbuchhaltung | date | isys_catg_invoice_list | isys_catg_invoice_list__financial_accounting_delivery |     |     |
| Abgebucht | int | isys_catg_invoice_list | isys_catg_invoice_list__charged |     |     |
| Beschreibung | text_area | isys_catg_invoice_list | isys_catg_invoice_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| libellé | texte | isys_catg_invoice_list | isys_catg_invoice_list__denotation | |
| date de la facture | isys_catg_invoice_list | isys_catg_invoice_list__date | |
| montant | double | isys_catg_invoice_list | isys_catg_invoice_list__amount | |
| traité le | date | isys_catg_invoice_list | isys_catg_invoice_list__edited | |
| remise comptabilité financière | date | isys_catg_invoice_list | isys_catg_invoice_list__financial_accounting_delivery | |
| débité | int | isys_catg_invoice_list | isys_catg_invoice_list__charged | |
| description | text_area | isys_catg_invoice_list | isys_catg_invoice_list__description | |

### Stromlieferant

### Fournisseur d'électricité

#### Tabelle: isys_catg_power_supplier_list

#### Tableau : isys_catg_power_supplier_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | mine | isys_catg_connector_list__title |     |     |
| Volt | text | isys_catg_power_supplier_list | isys_catg_power_supplier_list__volt |     |     |
| Watt | text | isys_catg_power_supplier_list | isys_catg_power_supplier_list__watt |     |     |
| Ampere | text | isys_catg_power_supplier_list | isys_catg_power_supplier_list__ampere |     |     |
| Zielobjekt | int | connected_connector | isys_catg_power_supplier_list__isys_catg_connector_list__id |     |     |
| Verbunden mit Anschluss | int | connected | isys_catg_power_supplier_list__isys_catg_connector_list__id |     |     |
| Zugehöriger Eingang/Ausgang | int | isys_catg_power_supplier_list | isys_catg_connector_list__isys_catg_connector_list__id |     |     |
| Zugehöriger Kategorietyp | text | isys_catg_power_supplier_list | isys_catg_connector_list__assigned_category |     |     |
| Beschreibung | text_area | isys_catg_power_supplier_list | isys_catg_power_supplier_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| désignation | texte | mine | isys_catg_connector_list__title | |
| volt | texte | isys_catg_power_supplier_list | isys_catg_power_supplier_list__volt | |
| watt | texte | isys_catg_power_supplier_list | isys_catg_power_supplier_list__watt | |
| ampère | texte | isys_catg_power_supplier_list | isys_catg_power_supplier_list__ampere | |
| objet cible | int | connected_connector | isys_catg_power_supplier_list__isys_catg_connector_list__id | |
| Connecté au port | int | connecté | isys_catg_power_supplier_list__isys_catg_connector_list__id | |
| entrée/sortie associée | int | isys_catg_power_supplier_list | isys_catg_connector_list__isys_catg_connector_list__id | |
| type de catégorie associée | text | isys_catg_power_supplier_list | isys_catg_connector_list__assigned_category | |
| description | text_area | isys_catg_power_supplier_list | isys_catg_power_supplier_list__description | |

### RAID-Verbund

### RAID interconnecté

#### Tabelle: isys_catg_raid_list

#### Tableau : isys_catg_raid_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| RAID-Typ | int | isys_catg_raid_list | isys_catg_raid_list__isys_raid_type__id | isys_raid_type | isys_raid_type__id |
| Bezeichnung | text | isys_catg_raid_list | isys_catg_raid_list__title |     |     |
| RAID Level | int | isys_catg_raid_list | isys_catg_raid_list__isys_stor_raid_level__id | isys_stor_raid_level | isys_stor_raid_level__id |
| Controller | int | isys_catg_raid_list | isys_catg_raid_list__isys_catg_controller_list__id | isys_catg_controller_list | isys_catg_controller_list__id |
| Verbundene Geräte | int | isys_catg_raid_list | isys_catg_raid_list__id |     |     |
| Gesamtkapazität | text | isys_catg_raid_list | isys_catg_raid_list__id |     |     |
| Beschreibung | text_area | isys_catg_raid_list | isys_catg_raid_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de RAID | int | isys_catg_raid_list | isys_catg_raid_list__isys_raid_type__id | isys_raid_type | isys_raid_type__id |
| libellé | texte | isys_catg_raid_list | isys_catg_raid_list__title | |
| niveau RAID | int | isys_catg_raid_list | isys_catg_raid_list__isys_stor_raid_level__id | isys_stor_raid_level | isys_stor_raid_level__id |
| contrôleur | int | isys_catg_raid_list | isys_catg_raid_list__isys_catg_controller_list__id | isys_catg_controller_list | isys_catg_controller_list__id |
| périphériques connectés | int | isys_catg_raid_list | isys_catg_raid_list__id | |
| capacité totale | text | isys_catg_raid_list | isys_catg_raid_list__id | |
| description | text_area | isys_catg_raid_list | isys_catg_raid_list__description | |

### Logische Geräte (LDEV Server)

### Périphériques logiques (serveur LDEV)

#### Tabelle: isys_catg_sanpool_list

#### Tableau : isys_catg_sanpool_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_sanpool_list | isys_catg_sanpool_list__title |     |     |
| LUN | text | isys_catg_sanpool_list | isys_catg_sanpool_list__lun |     |     |
| Segmentgröße (kB) | float | isys_catg_sanpool_list | isys_catg_sanpool_list__segment_size |     |     |
| Speicher-Einheit | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Speichergröße | double | isys_catg_sanpool_list | isys_catg_sanpool_list__capacity |     |     |
| Zugeordnete Geräte | int | isys_catg_sanpool_list | isys_catg_sanpool_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id |
| Pfade | text | isys_catg_sanpool_list | isys_catg_sanpool_list__id |     |     |
| Multipath Technologie | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_ldev_multipath__id | isys_ldev_multipath | isys_ldev_multipath__id |
| Tierklasse | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_tierclass__id | isys_tierclass | isys_tierclass__id |
| Logische Geräte (Client) | int | isys_catg_sanpool_list | isys_catg_sanpool_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id |
| Beschreibung | text_area | isys_catg_sanpool_list | isys_catg_sanpool_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_catg_sanpool_list | isys_catg_sanpool_list__title | |
| LUN | text | isys_catg_sanpool_list | isys_catg_sanpool_list__lun | |
| taille du segment (kB) | float | isys_catg_sanpool_list | isys_catg_sanpool_list__segment_size | |
| unité de mémoire | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| taille mémoire | double | isys_catg_sanpool_list | isys_catg_sanpool_list__capacity | |
| isys_catg_sanpool_list | isys_catg_sanpool_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | isys_catg_sanpool_list__id
| chemins d'accès | texte | isys_catg_sanpool_list | isys_catg_sanpool_list__id | |
| technologie multipath | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_ldev_multipath__id | isys_ldev_multipath | isys_ldev_multipath__id |
| classe d'animaux | int | isys_catg_sanpool_list | isys_catg_sanpool_list__isys_tierclass__id | isys_tierclass | isys_tierclass__id |
| Périphériques logiques (client) | int | isys_catg_sanpool_list | isys_catg_sanpool_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id |
| description | text_area | isys_catg_sanpool_list | isys_catg_sanpool_list__description | |

### Logische Geräte (Client)

### Périphériques logiques (client)

#### Tabelle: isys_catg_ldevclient_list

#### Tableau : isys_catg_ldevclient_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_ldevclient_list | isys_catg_ldevclient_list__title |     |     |
| Pfad | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id |     |     |
| Logische Geräte (LDEV Server) | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | isys_catg_sanpool_list | isys_catg_sanpool_list__id |
| Primärer Pfad | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__primary_path |     |     |
| Multipath Technologie | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_ldev_multipath__id | isys_ldev_multipath | isys_ldev_multipath__id |
| Beschreibung | text_area | isys_catg_ldevclient_list | isys_catg_ldevclient_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_ldevclient_list | isys_catg_ldevclient_list__title | |
| chemin | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id | |
| Périphériques logiques (serveur LDEV) | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_catg_sanpool_list__id | isys_catg_sanpool_list | isys_catg_sanpool_list__id |
| chemin primaire | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__primary_path | |
| technologie multipath | int | isys_catg_ldevclient_list | isys_catg_ldevclient_list__isys_ldev_multipath__id | isys_ldev_multipath | isys_ldev_multipath__id |
| description | text_area | isys_catg_ldevclient_list | isys_catg_ldevclient_list__description | |

### Hostadapter (HBA)

### Adaptateur hôte (HBA)

#### Tabelle: isys_catg_hba_list

#### Tableau : isys_catg_hba_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_hba_list | isys_catg_hba_list__title |     |     |
| Typ | int | isys_catg_hba_list | isys_catg_hba_list__isys_hba_type__id | isys_hba_type | isys_hba_type__id |
| Hersteller | int | isys_catg_hba_list | isys_catg_hba_list__isys_controller_manufacturer__id | isys_controller_manufacturer | isys_controller_manufacturer__id |
| Modell | int | isys_catg_hba_list | isys_catg_hba_list__isys_controller_model__id | isys_controller_model | isys_controller_model__id |
| Beschreibung | text_area | isys_catg_hba_list | isys_catg_hba_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_hba_list | isys_catg_hba_list__title | |
| type | int | isys_catg_hba_list | isys_catg_hba_list__isys_hba_type__id | isys_hba_type | isys_hba_type__id |
| fabricant | int | isys_catg_hba_list | isys_catg_hba_list__isys_controller_manufacturer__id | isys_controller_manufacturer | isys_controller_manufacturer__id |
| modèle | int | isys_catg_hba_list | isys_catg_hba_list__isys_controller_model__id | isys_controller_model | isys_controller_model__id |
| description | text_area | isys_catg_hba_list | isys_catg_hba_list__description | |

### Cluster

### Cluster

#### Tabelle: isys_catg_cluster_list

#### Tableau : isys_catg_cluster_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys_catg_cluster_list | isys_catg_cluster_list__quorum |     |     |
| Verwaltungsinstanz | text | isys_catg_cluster_list | isys_catg_cluster_adm_service_list__isys_obj__id |     |     |
| Clustermitglieder | text | isys_catg_cluster_list | isys_catg_cluster_members_list__isys_obj__id |     |     |
| Clusterdienstzuweisung | text | isys_catg_cluster_list | isys_catg_cluster_service_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_catg_cluster_list | isys_catg_cluster_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| quorum | int | isys_catg_cluster_list | isys_catg_cluster_list__quorum | |
| instance de gestion | texte | isys_catg_cluster_list | isys_catg_cluster_adm_service_list__isys_obj__id | |
| membres du cluster | texte | isys_catg_cluster_list | isys_catg_cluster_members_list__isys_obj__id | |
| text | isys_catg_cluster_list | isys_catg_cluster_service_list__isys_obj__id | |
| description | text_area | isys_catg_cluster_list | isys_catg_cluster_list__description | |

### Cluster

### Cluster

#### Tabelle: isys_catg_cluster_list

#### Tableau : isys_catg_cluster_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys_catg_cluster_list | isys_catg_cluster_list__quorum |     |     |
| Verwaltungsinstanz | text | isys_catg_cluster_list | isys_catg_cluster_adm_service_list__isys_obj__id |     |     |
| Clustermitglieder | text | isys_catg_cluster_list | isys_catg_cluster_members_list__isys_obj__id |     |     |
| Clusterdienstzuweisung | text | isys_catg_cluster_list | isys_catg_cluster_service_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_catg_cluster_list | isys_catg_cluster_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| quorum | int | isys_catg_cluster_list | isys_catg_cluster_list__quorum | |
| instance de gestion | texte | isys_catg_cluster_list | isys_catg_cluster_adm_service_list__isys_obj__id | |
| membres du cluster | texte | isys_catg_cluster_list | isys_catg_cluster_members_list__isys_obj__id | |
| text | isys_catg_cluster_list | isys_catg_cluster_service_list__isys_obj__id | |
| description | text_area | isys_catg_cluster_list | isys_catg_cluster_list__description | |

### Freigabe

### Partage

#### Tabelle: isys_catg_shares_list

#### Tableau : isys_catg_shares_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Freigabename | text | isys_catg_shares_list | isys_catg_shares_list__title |     |     |
| UNC-Pfad | text | isys_catg_shares_list | isys_catg_shares_list__unc_path |     |     |
| Laufwerk | int | isys_catg_shares_list | isys_catg_shares_list__isys_catg_drive_list__id | isys_catg_drive_list | isys_catg_drive_list__id |
| Lokaler Pfad | text | isys_catg_shares_list | isys_catg_shares_list__path |     |     |
| Beschreibung | text_area | isys_catg_shares_list | isys_catg_shares_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom de partage | texte | isys_catg_shares_list | isys_catg_shares_list__title | |
| chemin UNC | texte | isys_catg_shares_list | isys_catg_shares_list__unc_path | |
| lecteur | int | isys_catg_shares_list | isys_catg_shares_list__isys_catg_drive_list__id | isys_catg_drive_list | isys_catg_drive_list__id |
| chemin local | texte | isys_catg_shares_list | isys_catg_shares_list__path | |
| description | text_area | isys_catg_shares_list | isys_catg_shares_list__description | |

### Clusterdienstzuweisung

### Attribution de services en cluster

#### Tabelle: isys_catg_cluster_service_list

#### Tableau : isys_catg_cluster_service_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_cluster_type__id | isys_cluster_type | isys_cluster_type__id |
| Clusterdienst | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_connection__id | isys_connection | isys_connection__id |
| Hostadressen | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_ip_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| Laufwerke | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_drive_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| Freigaben | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id |     |     |
| Läuft auf | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |     |     |
| Standard Server | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__cluster_members_list__id |     |     |
| Datenbankschema | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| LC__CMDB__CATG__CLUSTER__SERVICE_STATUS | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__service_status |     |     |
| Beschreibung | text_area | isys_catg_cluster_service_list | isys_catg_cluster_service_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_cluster_type__id | isys_cluster_type | isys_cluster_type__id |
| service de cluster | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_connection__id | isys_connection | isys_connection__id |
| adresses d'hôtes | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_ip_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| lecteurs | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_drive_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| partages | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id | |
| int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | |
| serveur standard | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__cluster_members_list__id | |
| schéma de base de données | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| LC__CMDB__CATG__CLUSTER__SERVICE_STATUS | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__service_status | |
| description | text_area | isys_catg_cluster_service_list | isys_catg_cluster_service_list__description | |

### Clustermitglieder

### Membres du cluster

#### Tabelle: isys_catg_cluster_members_list

#### Tableau : isys_catg_cluster_members_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Clustermitglied | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_connection__id | isys_connection | isys_connection__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| membre du cluster | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_connection__id | isys_connection | isys_connection__id |

### Clustermitgliedschaften

### Adhésions aux clusters

#### Tabelle: isys_catg_cluster_members_list

#### Tableau : isys_catg_cluster_members_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Cluster | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_obj__id | isys_connection | isys_connection__isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| cluster | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_obj__id | isys_connection | isys_connection__isys_obj__id |

### Rechenressourcen

### Ressources informatiques

#### Tabelle: isys_catg_computing_resources_list

#### Tableau : isys_catg_computing_resources_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| RAM | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__ram |     |     |
| Speicher-Einheit | int | mem1 | isys_catg_computing_resources_list__ram__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| CPU-Frequenz | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__cpu |     |     |
| CPU-Frequenz Einheit | int | isys_catg_computing_resources_list | isys_catg_computing_resources_list__cpu__isys_frequency_unit__id | isys_frequency_unit | isys_frequency_unit__id |
| Festplattenplatz | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__disc_space |     |     |
| Speicher Einheit | int | mem2 | isys_catg_computing_resources_list__ds__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| Netzwerk Bandbreite | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__network_bandwidth |     |     |
| Netzwerk Bandbreiten Einheit | int | isys_catg_computing_resources_list | isys_catg_computing_resources_list__nb__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| Beschreibung | text_area | isys_catg_computing_resources_list | isys_catg_computing_resources_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| RAM | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__ram | |
| unité de mémoire | int | mem1 | isys_catg_computing_resources_list__ram__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| fréquence CPU | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__cpu | |
| unité de fréquence CPU | int | isys_catg_computing_resources_list | isys_catg_computing_resources_list__cpu__isys_frequency_unit__id | isys_frequency_unit | isys_frequency_unit__id |
| espace disque | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__disc_space | |
| unité de mémoire | int | mem2 | isys_catg_computing_resources_list__ds__isys_memory_unit__id | isys_memory_unit | isys_memory_unit__id |
| bande passante réseau | float | isys_catg_computing_resources_list | isys_catg_computing_resources_list__network_bandwidth | |
| unité de bande passante réseau | int | isys_catg_computing_resources_list | isys_catg_computing_resources_list__nb__isys_port_speed__id | isys_port_speed | isys_port_speed__id |
| description | text_area | isys_catg_computing_resources_list | isys_catg_computing_resources_list__description | |

### SNMP

### SNMP

#### Tabelle: isys_catg_snmp_list

#### Tableau : isys_catg_snmp_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| SNMP Community | int | isys_catg_snmp_list | isys_catg_snmp_list__isys_snmp_community__id | isys_snmp_community | isys_snmp_community__id |
| Beschreibung | text_area | isys_catg_snmp_list | isys_catg_snmp_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| SNMP Community | int | isys_catg_snmp_list | isys_catg_snmp_list__isys_snmp_community__id | isys_snmp_community | isys_snmp_community__id |
| description | text_area | isys_catg_snmp_list | isys_catg_snmp_list__description | |

### Virtualisierungsserver

### Serveur de virtualisation

#### Tabelle: isys_catg_virtual_host_list

#### Tableau : isys_catg_virtual_host_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtualisierungsserver | int | isys_catg_virtual_host_list | isys_catg_virtual_host_list__virtual_host |     |     |
| Lizenzserver | int | connection_licence_server | isys_catg_virtual_host_list__license_server | isys_connection | isys_connection__id |
| Verwaltungsinstanz | int | connection_administration_service | isys_catg_virtual_host_list__administration_service | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_catg_virtual_host_list | isys_catg_virtual_host_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| serveur de virtualisation | int | isys_catg_virtual_host_list | isys_catg_virtual_host_list__virtual_host | |
| serveur de licences | int | connection_licence_server | isys_catg_virtual_host_list__license_server | isys_connection | isys_connection__id |
| instance d'administration | int | connection_administration_service | isys_catg_virtual_host_list__administration_service | isys_connection | isys_connection__id |
| description | text_area | isys_catg_virtual_host_list | isys_catg_virtual_host_list__description | |

### Virtualisierungsserver

### Serveur de virtualisation

#### Tabelle: isys_catg_virtual_host_list

#### Tableau : isys_catg_virtual_host_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtualisierungsserver | int | isys_catg_virtual_host_list | isys_catg_virtual_host_list__virtual_host |     |     |
| Lizenzserver | int | connection_licence_server | isys_catg_virtual_host_list__license_server | isys_connection | isys_connection__id |
| Verwaltungsinstanz | int | connection_administration_service | isys_catg_virtual_host_list__administration_service | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_catg_virtual_host_list | isys_catg_virtual_host_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| serveur de virtualisation | int | isys_catg_virtual_host_list | isys_catg_virtual_host_list__virtual_host | |
| serveur de licences | int | connection_licence_server | isys_catg_virtual_host_list__license_server | isys_connection | isys_connection__id |
| instance d'administration | int | connection_administration_service | isys_catg_virtual_host_list__administration_service | isys_connection | isys_connection__id |
| description | text_area | isys_catg_virtual_host_list | isys_catg_virtual_host_list__description | |

### Gastsysteme

### Systèmes invités

#### Tabelle: isys_catg_virtual_machine_list

#### Tableau : isys_catg_virtual_machine_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gastsysteme | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_obj__id |     |     |
| Hostname | text | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_obj__id |     |     |
| Läuft auf | text | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| systèmes invités | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_obj__id | |
| nom d'hôte | texte | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_obj__id | |
| texte | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary | |

### Virtuelle Maschine

### Machine virtuelle

#### Tabelle: isys_catg_virtual_machine_list

#### Tableau : isys_catg_virtual_machine_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtuelle Maschine | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__vm |     |     |
| Läuft auf Host | int | connection_vm | isys_catg_virtual_machine_list__isys_connection__id | isys_connection | isys_connection__id |
| Virtualisierungs-System | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_vm_type__id | isys_vm_type | isys_vm_type__id |
| Konfigurations Datei | text | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__config_file |     |     |
| Host im Cluster | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary |     |     |
| Beschreibung | text_area | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| machine virtuelle | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__vm | |
| connection_vm | isys_catg_virtual_machine_list__isys_connection__id | isys_connection | isys_connection__id |
| système de virtualisation | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__isys_vm_type__id | isys_vm_type | isys_vm_type__id |
| fichier de configuration | texte | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__config_file | |
| hôte dans le cluster | int | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__primary | |
| description | text_area | isys_catg_virtual_machine_list | isys_catg_virtual_machine_list__description | |

### Virtuelle Switche

### Commutateurs virtuels

#### Tabelle: isys_catg_virtual_switch_list

#### Tableau : isys_catg_virtual_switch_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__title |     |     |
| Ports | int | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__id | isys_virtual_switch_2_port | isys_virtual_switch_2_port__isys_catg_virtual_switch_list__id |
| Portgruppen | int | isys_catg_virtual_switch_list | isys_virtual_port_group__id | isys_virtual_port_group | isys_virtual_port_group__isys_catg_virtual_switch_list__id |
| Service Console Ports | int | isys_catg_virtual_switch_list | isys_service_console_port__id | isys_service_console_port | isys_service_console_port__isys_catg_virtual_switch_list__id |
| VMKernel Ports | int | isys_catg_virtual_switch_list | isys_vmkernel_port__id | isys_vmkernel_port | isys_vmkernel_port__isys_catg_virtual_switch_list__id |
| Beschreibung | text_area | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__title | |
| ports | int | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__id | isys_virtual_switch_2_port | isys_virtual_switch_2_port__isys_catg_virtual_switch_list__id |
| groupes de ports | int | isys_catg_virtual_switch_list | isys_virtual_port_group__id | isys_virtual_port_group | isys_virtual_port_group__isys_catg_virtual_switch_list__id |
| Service Console Ports | int | isys_catg_virtual_switch_list | isys_service_console_port__id | isys_service_console_port | isys_service_console_port__isys_catg_virtual_switch_list__id |
| ports VMKernel | int | isys_catg_virtual_switch_list | isys_vmkernel_port__id | isys_vmkernel_port | isys_vmkernel_port__isys_catg_virtual_switch_list__id |
| description | text_area | isys_catg_virtual_switch_list | isys_catg_virtual_switch_list__description | |

### Virtuelle Geräte

### Périphériques virtuels

#### Tabelle: isys_catg_virtual_device_list

#### Tableau : isys_catg_virtual_device_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gerätetyp | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| Host LDEV Client | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_ldevclient_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id |
| Zugehöriges Storage Gerät (Host) | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_drive_list__id | isys_catg_drive_list | isys_catg_drive_list__id |
| Zugehöriger Host Port | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| Host Schnittstelle | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_ui_list__id | isys_catg_ui_list | isys_catg_ui_list__id |
| Lokales Storage Gerät | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| Lokaler Port | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| Host Ressource | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_ui_list__id | isys_catg_ui_list | isys_catg_ui_list__id |
| Speichertyp | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_virtual_storage_type__id | isys_virtual_storage_type | isys_virtual_storage_type__id |
| Netzwerktyp | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_virtual_network_type__id | isys_virtual_network_type | isys_virtual_network_type__id |
| Switch Port Group | int | isys_catg_virtual_device_list | isys_virtual_device_host__switch_port_group |     |     |
| Cluster Speicher | text | isys_virtual_device_host | isys_virtual_device_host__cluster_storage |     |     |
| Cluster Interface | text | isys_catg_virtual_device_list | isys_virtual_device_host__cluster_ui |     |     |
| Lokales Storage Gerät | text | isys_catg_virtual_device_list | isys_catg_virtual_device_list__disk_image_location |     |     |
| Gerätetyp | text | isys_catg_virtual_device_list | isys_catg_virtual_device_list__device_type |     |     |
| Beschreibung | text_area | isys_catg_virtual_device_list | isys_catg_virtual_device_list__description |     |     |
| Typ | text | isys_catg_virtual_device_list | isys_virtual_network_type__title |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de périphérique | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| hôte client LDEV | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_ldevclient_list__id | isys_catg_ldevclient_list | isys_catg_ldevclient_list__id |
| Périphérique de stockage associé (hôte) | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_drive_list__id | isys_catg_drive_list | isys_catg_drive_list__id |
| port hôte associé | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| interface hôte | int | isys_catg_virtual_device_list | isys_virtual_device_host__isys_catg_ui_list__id | isys_catg_ui_list | isys_catg_ui_list__id |
| périphérique de stockage local | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_stor_list__id | isys_catg_stor_list | isys_catg_stor_list__id |
| port local | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_port_list__id | isys_catg_port_list | isys_catg_port_list__id |
| ressource hôte | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_catg_ui_list__id | isys_catg_ui_list | isys_catg_ui_list__id |
| type de stockage | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_virtual_storage_type__id | isys_virtual_storage_type | isys_virtual_storage_type__id |
| type de réseau | int | isys_catg_virtual_device_list | isys_virtual_device_local__isys_virtual_network_type__id | isys_virtual_network_type | isys_virtual_network_type__id |
| Switch Port Group | int | isys_catg_virtual_device_list | isys_virtual_device_host__switch_port_group | |
| stockage en cluster | texte | isys_virtual_device_host | isys_virtual_device_host__cluster_storage | |
| interface de cluster | texte | isys_catg_virtual_device_list | isys_virtual_device_host__cluster_ui | |
| périphérique de stockage local | texte | isys_catg_virtual_device_list | isys_catg_virtual_device_list__disk_image_location | |
| type de périphérique | text | isys_catg_virtual_device_list | isys_catg_virtual_device_list__device_type | |
| description | text_area | isys_catg_virtual_device_list | isys_catg_virtual_device_list__description | |
| type | texte | isys_catg_virtual_device_list | isys_virtual_network_type__title | |

### Datensicherung (zugewiesene Objekte)

### Sauvegarde des données (objets attribués)

#### Tabelle: isys_catg_backup_list

#### Tableau : isys_catg_backup_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_backup_list | isys_catg_backup_list__title |     |     |
| Sichert | int | isys_catg_backup_list | isys_catg_backup_list__isys_obj__id |     |     |
| Art des Backups | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_type__id | isys_backup_type | isys_backup_type__id |
| Zyklus | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_cycle__id | isys_backup_cycle | isys_backup_cycle__id |
| Pfad für zu sichernde Daten | text | isys_catg_backup_list | isys_catg_backup_list__path_to_save |     |     |
| Beschreibung | text_area | isys_catg_backup_list | isys_catg_backup_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| texte | isys_catg_backup_list | isys_catg_backup_list__title | |
| sauvegarde | int | isys_catg_backup_list | isys_catg_backup_list__isys_obj__id | |
| type de sauvegarde | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_type__id | isys_backup_type | isys_backup_type__id |
| cycle | int | isys_catg_backup_list | isys_catg_backup_list__isys_backup_cycle__id | isys_backup_cycle | isys_backup_cycle__id |
| chemin pour données à sauvegarder | text | isys_catg_backup_list | isys_catg_backup_list__path_to_save | |
| description | text_area | isys_catg_backup_list | isys_catg_backup_list__description | |

### Gruppenmitgliedschaft

### Adhésion à un groupe

#### Tabelle: isys_cats_group_list

#### Tableau : isys_cats_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gruppe | int | isys_cats_group_list | isys_cats_group_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_cats_group_list | isys_cats_group_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| groupe | int | isys_cats_group_list | isys_cats_group_list__isys_obj__id | |
| description | text_area | isys_cats_group_list | isys_cats_group_list__description | |

### Service Komponenten

### Composants de service

#### Tabelle: isys_catg_its_components_list

#### Tableau : isys_catg_its_components_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes Objekt | int | isys_catg_its_components_list | isys_catg_its_components_list__isys_connection__id | isys_connection | isys_connection__id |
| Objekttyp | int | itsc | isys_obj__isys_obj_type__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet assigné | int | isys_catg_its_components_list | isys_catg_its_components_list__isys_connection__id | isys_connection | isys_connection__id |
| type d'objet | int | itsc | isys_obj__isys_obj_type__id | |

### Service Logbuch

### Journal de bord du service

#### Tabelle: isys_catg_logb_list

#### Tableau : isys_catg_logb_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Datum | date_time | isys_catg_logb_list | isys_logbook__date |     |     |
| Objekt | int | isys_catg_logb_list | isys_catg_logb_list__isys_obj__id |     |     |
| Ereignis | int | isys_catg_logb_list | isys_logbook__isys_logbook_event__id | isys_logbook_event | isys_logbook_event__id |
| Quelle | int | isys_catg_logb_list | isys_logbook__isys_logbook_source__id |     |     |
| Benutzer | int | isys_catg_logb_list | isys_logbook__isys_obj__id |     |     |
| Objekttyp | text | isys_catg_logb_list | isys_logbook__obj_type_static |     |     |
| Kategorie | text | isys_catg_logb_list | isys_logbook__category_static |     |     |
| Alarmlevel | text | isys_catg_logb_list | isys_logbook__isys_logbook_level__id | isys_logbook_level | isys_logbook_level__id |
| Benutzer | text | isys_catg_logb_list | isys_logbook__user_name_static |     |     |
| Ereignis | text | isys_catg_logb_list | isys_logbook__event_static |     |     |
| Kommentar | text | isys_catg_logb_list | isys_logbook__comment |     |     |
| Änderungen | text | isys_catg_logb_list | isys_logbook__changes |     |     |
| Beschreibung | text_area | isys_catg_logb_list | isys_catg_logb_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| date | date_time | isys_catg_logb_list | isys_logbook__date | |
| objet | int | isys_catg_logb_list | isys_catg_logb_list__isys_obj__id | |
| événement | int | isys_catg_logb_list | isys_logbook__isys_logbook_event__id | isys_logbook_event | isys_logbook_event__id |
| source | int | isys_catg_logb_list | isys_logbook__isys_logbook_source__id | |
| utilisateur | int | isys_catg_logb_list | isys_logbook__isys_obj__id | |
| type d'objet | texte | isys_catg_logb_list | isys_logbook__obj_type_static | |
| catégorie | texte | isys_catg_logb_list | isys_logbook__category_static | |
| niveau d'alarme | texte | isys_catg_logb_list | isys_logbook__isys_logbook_level__id | isys_logbook_level | isys_logbook_level__id |
| utilisateur | texte | isys_catg_logb_list | isys_logbook__user_name_static | |
| événement | texte | isys_catg_logb_list | isys_logbook__event_static | |
| commentaire | texte | isys_catg_logb_list | isys_logbook__comment | |
| modifications | texte | isys_catg_logb_list | isys_logbook__changes | |
| description | text_area | isys_catg_logb_list | isys_catg_logb_list__description | |

### Servicezuweisung

### Attribution de service

#### Tabelle: isys_catg_its_components_list

#### Tableau : isys_catg_its_components_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service | int | isys_catg_its_components_list | isys_catg_its_components_list__isys_obj__id |     |     |
| SYSID | text | isys_catg_its_components_list | isys_obj__sysid |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| service | int | isys_catg_its_components_list | isys_catg_its_components_list__isys_obj__id | |
| SYSID | texte | isys_catg_its_components_list | isys_obj__sysid | |

### Beziehungen

### relations

#### Tabelle: isys_catg_relation_list

#### Tableau : isys_catg_relation_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys_catg_relation_list__isys_obj__id__master | isys_obj | isys_obj__id |
| Object 2 | int | slaveobj | isys_catg_relation_list__isys_obj__id__slave | isys_obj | isys_obj__id |
| Beziehungsart | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| Gewichtung | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| Service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice | isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_catg_relation_list | isys_catg_relation_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys_catg_relation_list__isys_obj__id__master | isys_obj | isys_obj__id |
| objet 2 | int | slaveobj | isys_catg_relation_list__isys_obj__id__slave | isys_obj | isys_obj__id |
| type de relation | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| pondération | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice | isys_obj | isys_obj__id |
| description | text_area | isys_catg_relation_list | isys_catg_relation_list__description | |

### Service Beziehung

### Relation de service

#### Tabelle: isys_catg_relation_list

#### Tableau : isys_catg_relation_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys_catg_relation_list__isys_obj__id__master | isys_obj | isys_obj__id |
| Object 2 | int | slaveobj | isys_catg_relation_list__isys_obj__id__slave | isys_obj | isys_obj__id |
| Beziehungsart | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| Gewichtung | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| Service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice | isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_catg_relation_list | isys_catg_relation_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys_catg_relation_list__isys_obj__id__master | isys_obj | isys_obj__id |
| objet 2 | int | slaveobj | isys_catg_relation_list__isys_obj__id__slave | isys_obj | isys_obj__id |
| type de relation | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| pondération | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice | isys_obj | isys_obj__id |
| description | text_area | isys_catg_relation_list | isys_catg_relation_list__description | |

### Datenbankzuweisung

### Attribution de la base de données

#### Tabelle: isys_cats_database_access_list

#### Tableau : isys_cats_database_access_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| verwendetes Datenbankschema | int | isys_cats_database_access_list | isys_cats_database_access_list__isys_obj__id |     |     |
| Software läuft auf | int | isys_cats_database_access_list | isys_catg_relation_list__isys_obj__id__slave |     |     |
| Beschreibung | text_area | isys_cats_database_access_list | isys_cats_database_access_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| schéma de base de données utilisé | int | isys_cats_database_access_list | isys_cats_database_access_list__isys_obj__id | |
| logiciel fonctionnant sur | int | isys_cats_database_access_list | isys_catg_relation_list__isys_obj__id__slave | |
| description | text_area | isys_cats_database_access_list | isys_cats_database_access_list__description | |

### Service Typ

### Type de service

#### Tabelle: isys_catg_its_type_list

#### Tableau : isys_catg_its_type_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_its_type_list | isys_catg_its_type_list__isys_its_type__id | isys_its_type | isys_its_type__id |
| Beschreibung | text_area | isys_catg_its_type_list | isys_catg_its_type_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_its_type_list | isys_catg_its_type_list__isys_its_type__id | isys_its_type | isys_its_type__id |
| description | text_area | isys_catg_its_type_list | isys_catg_its_type_list__description | |

### Passwörter

### Mots de passe

#### Tabelle: isys_catg_password_list

#### Tableau : isys_catg_password_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_password_list | isys_catg_password_list__title |     |     |
| Benutzername | text | isys_catg_password_list | isys_catg_password_list__username |     |     |
| Passwort | text | isys_catg_password_list | isys_catg_password_list__password |     |     |
| Beschreibung | text_area | isys_catg_password_list | isys_catg_password_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| libellé | texte | isys_catg_password_list | isys_catg_password_list__title | |
| nom d'utilisateur | texte | isys_catg_password_list | isys_catg_password_list__username | |
| mot de passe | texte | isys_catg_password_list | isys_catg_password_list__password | |
| description | text_area | isys_catg_password_list | isys_catg_password_list__description | |

### SOA-Stacks

### Piles SOA

#### Tabelle: isys_catg_soa_stacks_list

#### Tableau : isys_catg_soa_stacks_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__title |     |     |
| SOA-Stacks | int | isys_catg_soa_stacks_list | isys_connection__isys_obj__id |     |     |
| SOA-Komponente | int | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__id |     |     |
| Service | int | isys_catg_soa_stacks_list | isys_connection__isys_obj__id |     |     |
| Beschreibung | text_area | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__title | |
| piles SOA | int | isys_catg_soa_stacks_list | isys_connection__isys_obj__id | |
| composant SOA | int | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__id | |
| service | int | isys_catg_soa_stacks_list | isys_connection__isys_obj__id | |
| description | text_area | isys_catg_soa_stacks_list | isys_catg_soa_stacks_list__description | |

### Status-Planung

### Planification de l'état

#### Tabelle: isys_catg_planning_list

#### Tableau : isys_catg_planning_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| CMDB-Status | int | isys_catg_planning_list | isys_catg_planning_list__isys_cmdb_status__id | isys_cmdb_status | isys_cmdb_status__id |
| Gültigkeitszeitraum von | date | isys_catg_planning_list | isys_catg_planning_list__start |     |     |
| Gültigkeitszeitraum bis | date | isys_catg_planning_list | isys_catg_planning_list__end |     |     |
| Beschreibung | text_area | isys_catg_planning_list | isys_catg_planning_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| état CMDB | int | isys_catg_planning_list | isys_catg_planning_list__isys_cmdb_status__id | isys_cmdb_status | isys_cmdb_status__id |
| période de validité du | date | isys_catg_planning_list | isys_catg_planning_list__start | |
| période de validité jusqu'à | date | isys_catg_planning_list | isys_catg_planning_list__end | |
| description | text_area | isys_catg_planning_list | isys_catg_planning_list__description | |

### Verknüpfte Karten

### Cartes liées

#### Tabelle: isys_catg_assigned_cards_list

#### Tableau : isys_catg_assigned_cards_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Verknüpfte Karten | int | isys_catg_assigned_cards_list | isys_catg_assigned_cards_list__isys_obj__id__card |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| cartes liées | int | isys_catg_assigned_cards_list | isys_catg_assigned_cards_list__isys_obj__id__card | |

### SIM-Karte

### carte SIM

#### Tabelle: isys_catg_sim_card_list

#### Tableau : isys_catg_sim_card_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_cp_contract_type__id | isys_cp_contract_type | isys_cp_contract_type__id |
| verknüpftes Mobiltelefon | int | isys_catg_assigned_cards_list | isys_catg_assigned_cards_list__isys_obj__id |     |     |
| Netzanbieter | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_network_provider__id | isys_network_provider | isys_network_provider__id |
| Tarif | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_telephone_rate__id | isys_telephone_rate | isys_telephone_rate__id |
| Anfangsdatum | date | isys_catg_sim_card_list | isys_catg_sim_card_list__start_date |     |     |
| Enddatum | date | isys_catg_sim_card_list | isys_catg_sim_card_list__end_date |     |     |
| Datum für Benachrichtigung | date | isys_catg_sim_card_list | isys_catg_sim_card_list__threshold_date |     |     |
| Kartennummer | text | isys_catg_sim_card_list | isys_catg_sim_card_list__card_number |     |     |
| Telefonnummer | text | isys_catg_sim_card_list | isys_catg_sim_card_list__phone_number |     |     |
| Kundennummer | text | isys_catg_sim_card_list | isys_catg_sim_card_list__client_number |     |     |
| Pin | text | isys_catg_sim_card_list | isys_catg_sim_card_list__pin |     |     |
| Pin 2 | text | isys_catg_sim_card_list | isys_catg_sim_card_list__pin2 |     |     |
| PUK | text | isys_catg_sim_card_list | isys_catg_sim_card_list__puk |     |     |
| PUK2 | text | isys_catg_sim_card_list | isys_catg_sim_card_list__puk2 |     |     |
| Seriennummer | text | isys_catg_sim_card_list | isys_catg_sim_card_list__serial_number |     |     |
| Twin-Karte | int | isys_catg_sim_card_list | isys_catg_sim_card_list__twincard |     |     |
| Kartennummer (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_card_number |     |     |
| Telefonnummer (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_phone_number |     |     |
| Pin (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_pin |     |     |
| Pin 2 (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_pin2 |     |     |
| PUK (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_puk |     |     |
| PUK2 (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_puk2 |     |     |
| Seriennummer (Twin-Karte) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_serial_number |     |     |
| Beschreibung (Twin-Karte) (Twin-Karte) | text_area | isys_catg_sim_card_list | isys_catg_sim_card_list__optional_info |     |     |
| Beschreibung | text_area | isys_catg_sim_card_list | isys_catg_sim_card_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_cp_contract_type__id | isys_cp_contract_type | isys_cp_contract_type__id |
| téléphone mobile associé | int | isys_catg_assigned_cards_list | isys_catg_assigned_cards_list__isys_obj__id | |
| fournisseur de réseau | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_network_provider__id | isys_network_provider | isys_network_provider__id |
| tarif | int | isys_catg_sim_card_list | isys_catg_sim_card_list__isys_telephone_rate__id | isys_telephone_rate | isys_telephone_rate__id |
| date de début | isys_catg_sim_card_list | isys_catg_sim_card_list__start_date | |
| date de fin | date | isys_catg_sim_card_list | isys_catg_sim_card_list__end_date | |
| date de notification | date | isys_catg_sim_card_list | isys_catg_sim_card_list__threshold_date | |
| numéro de carte | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__card_number | |
| numéro de téléphone | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__phone_number | |
| numéro de client | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__numéro_de_client | |
| Pin | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__pin | |
| Pin 2 | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__pin2 | |
| PUK | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__puk | |
| PUK2 | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__puk2 | |
| numéro de série | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__serial_number | |
| carte jumelle | int | isys_catg_sim_card_list | isys_catg_sim_card_list__twincard | |
| numéro de carte (carte jumelée) | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_card_number | |
| numéro de téléphone (carte jumelée) | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_phone_number | |
| Pin (carte jumelée) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_pin | |
| Pin 2 (carte Twin) | text | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_pin2 | |
| PUK (carte Twin) | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_puk | |
| PUK2 (carte Twin) | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_puk2 | |
| numéro de série (carte Twin) | texte | isys_catg_sim_card_list | isys_catg_sim_card_list__tc_serial_number | |
| description (carte jumelée) (carte jumelée) | text_area | isys_catg_sim_card_list | isys_catg_sim_card_list__optional_info | |
| description | text_area | isys_catg_sim_card_list | isys_catg_sim_card_list__description | |

### TSI-Service

### Service TSI

#### Tabelle: isys_catg_tsi_service_list

#### Tableau : isys_catg_tsi_service_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| TSI-Service ID | text | isys_catg_tsi_service_list | isys_catg_tsi_service_list__tsi_service_id |     |     |
| Beschreibung | text_area | isys_catg_tsi_service_list | isys_catg_tsi_service_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| ID service TSI | texte | isys_catg_tsi_service_list | isys_catg_tsi_service_list__tsi_service_id | |
| description | text_area | isys_catg_tsi_service_list | isys_catg_tsi_service_list__description | |

### Prüfung

### examen

#### Tabelle: isys_catg_audit_list

#### Tableau : isys_catg_audit_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_audit_list | isys_catg_audit_list__title |     |     |
| Typ | int | isys_catg_audit_list | isys_catg_audit_list__type | isys_catg_audit_type | isys_catg_audit_type__id |
| Beauftragt | int | isys_catg_audit_list | isys_catg_audit_list__commission | isys_contact | isys_contact__id |
| Verantwortlich | int | isys_catg_audit_list | isys_catg_audit_list__responsible | isys_contact | isys_contact__id |
| Beteiligt | int | isys_catg_audit_list | isys_catg_audit_list__involved | isys_contact | isys_contact__id |
| Herstellerfrist | date | isys_catg_audit_list | isys_catg_audit_list__period_manufacturer |     |     |
| Betreiberfrist | date | isys_catg_audit_list | isys_catg_audit_list__period_operator |     |     |
| Durchgeführt | date | isys_catg_audit_list | isys_catg_audit_list__apply |     |     |
| Ergebnis | text_area | isys_catg_audit_list | isys_catg_audit_list__result |     |     |
| Störungen | text_area | isys_catg_audit_list | isys_catg_audit_list__fault |     |     |
| Zwischenfälle | text_area | isys_catg_audit_list | isys_catg_audit_list__incident |     |     |
| Beschreibung | text_area | isys_catg_audit_list | isys_catg_audit_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_audit_list | isys_catg_audit_list__title | |
| type | int | isys_catg_audit_list | isys_catg_audit_list__type | isys_catg_audit_type | isys_catg_audit_type__id |
| mandaté | int | isys_catg_audit_list | isys_catg_audit_list__commission | isys_contact | isys_contact__id |
| responsable | int | isys_catg_audit_list | isys_catg_audit_list__responsible | isys_contact | isys_contact__id |
| impliqué | int | isys_catg_audit_list | isys_catg_audit_list__involved | isys_contact | isys_contact__id |
| délai fabricant | date | isys_catg_audit_list | isys_catg_audit_list__period_manufacturer | |
| délai opérateur | date | isys_catg_audit_list | isys_catg_audit_list__period_operator | |
| Exécuté | date | isys_catg_audit_list | isys_catg_audit_list__apply | |
| résultat | text_area | isys_catg_audit_list | isys_catg_audit_list__result | |
| incidents | text_area | isys_catg_audit_list | isys_catg_audit_list__fault | |
| incident | text_area | isys_catg_audit_list | isys_catg_audit_list__incident | |
| description | text_area | isys_catg_audit_list | isys_catg_audit_list__description | |

### Logischer Standort

### Emplacement logique

#### Tabelle: isys_catg_logical_unit_list

#### Tableau : isys_catg_logical_unit_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id__parent |     |     |
| Beschreibung | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet parent | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id__parent | |
| description | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description | |

### Zugewiesene Endgeräte

### Terminaux attribués

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_catg_virtual_list | isys_catg_logical_unit_list__isys_obj__id | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_catg_virtual_list | isys_catg_logical_unit_list__isys_obj__id | isys_obj | isys_obj__id |

### Zugewiesener Arbeitsplatz

### Poste de travail attribué

#### Tabelle: isys_catg_logical_unit_list

#### Tableau : isys_catg_logical_unit_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id__parent |     |     |
| Beschreibung | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet parent | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id__parent | |
| description | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description | |

### Zugewiesene Arbeitsplätze

### Postes de travail attribués

#### Tabelle: isys_catg_logical_unit_list

#### Tableau : isys_catg_logical_unit_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Arbeitsplätze | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| postes de travail attribués | int | isys_catg_logical_unit_list | isys_catg_logical_unit_list__isys_obj__id | |
| description | text_area | isys_catg_logical_unit_list | isys_catg_logical_unit_list__description | |

### Vertragszuweisung

### Attribution du contrat

#### Tabelle: isys_catg_contract_assignment_list

#### Tableau : isys_catg_contract_assignment_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesener Vertrag | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__isys_connection__id | isys_connection | isys_connection__id |
| Vertragsbeginn | date | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__contract_start |     |     |
| Vertragsende | date | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__contract_end |     |     |
| Reaktionszeiten | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| Beschreibung | text_area | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| contrat attribué | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__isys_connection__id | isys_connection | isys_connection__id |
| début du contrat | date | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__contract_start | |
| fin de contrat | date | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__contract_end | |
| temps de réaction | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| description | text_area | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__description | |

### Stacking

### Empilage

#### Tabelle: isys_catg_stacking_list

#### Tableau : isys_catg_stacking_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Chassis | int | isys_catg_stacking_list | isys_catg_stacking_list__isys_connection__id | isys_connection | isys_connection__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| châssis | int | isys_catg_stacking_list | isys_catg_stacking_list__isys_connection__id | isys_connection | isys_connection__id |

### E-Mail Adressen

### Adresses e-mail

#### Tabelle: isys_catg_mail_addresses_list

#### Tableau : isys_catg_mail_addresses_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| E-Mail Adresse | text | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__title |     |     |
| Primäre E-Mail-Adresse | text | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__title |     |     |
| Primär | int | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__primary |     |     |
| Beschreibung | text_area | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| adresse e-mail | texte | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__title | |
| adresse e-mail primaire | text | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__title | |
| primaire | int | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__primary | |
| description | text_area | isys_catg_mail_addresses_list | isys_catg_mail_addresses_list__description | |

### CUCM VoIP Telefon

### CUCM Téléphone VoIP

#### Tabelle: isys_catg_voip_phone_list

#### Tableau : isys_catg_voip_phone_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Geräte Protokoll | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_protocol |     |     |
| Beschreibung | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__description2 |     |     |
| Geräte-Pool | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_pool |     |     |
| Gemeinsame Gerätekonfiguration | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__common_device_configuration |     |     |
| Tastenbelegung | int | isys_catg_voip_phone_list | isys_catg_voip_phone_list__isys_voip_phone_button_template__id | isys_voip_phone_button_template | isys_voip_phone_button_template__id |
| Belegung der programmierbaren Tasten (Softkeys) | int | isys_catg_voip_phone_list | isys_catg_voip_phone_list__isys_voip_phone_softkey_template__id | isys_voip_phone_softkey_template | isys_voip_phone_softkey_template__id |
| Gemeinsame Geräteprofil | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__common_profile |     |     |
| Anrufauswahlzone | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__calling_search_space |     |     |
| AAR Anrufauswahlzone | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__aar_calling_search_space |     |     |
| Medienressourcen Gruppenliste | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__media_resource_group_list |     |     |
| Benutzer MOH Audioquelle | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__user_hold_moh_audio_source |     |     |
| Netzwerk MOH Audioquelle | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__network_hold_moh_audio_source |     |     |
| Standort | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__location |     |     |
| AAR Gruppe | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__aar_group |     |     |
| Benutzer-Gebietsschema | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__user_locale |     |     |
| Netzwerk Gebietsschema | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__network_locale |     |     |
| Eingebaute Netzwerkbrücke | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__built_in_bridge |     |     |
| Privatsphäre | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__privacy |     |     |
| Device Mobility Mode | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_mobility_mode |     |     |
| Eigentümer Benutzer-ID | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__owner_user_id |     |     |
| Phone suite | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__phone_suite |     |     |
| Service-Bereitstellung | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__services_provisioning |     |     |
| Load name | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__load_name |     |     |
| Beschreibung | text_area | isys_catg_voip_phone_list | isys_catg_voip_phone_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| protocole de périphérique | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_protocol | |
| description | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__description2 | |
| pool de périphériques | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_pool | |
| configuration commune des périphériques | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__common_device_configuration | |
| affectation des touches | int | isys_catg_voip_phone_list | isys_catg_voip_phone_list__isys_voip_phone_button_template__id | isys_voip_phone_button_template | isys_voip_phone_button_template__id | isys_voip_phone_button_template__id
| Affectation des touches programmables (touches programmables) | int | isys_catg_voip_phone_list | isys_catg_voip_phone_list__isys_voip_phone_softkey_template__id | isys_voip_phone_softkey_template | isys_voip_phone_softkey_template__id |
| profil de périphérique commun | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__common_profile | |
| zone de sélection d'appel | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__calling_search_space | |
| AAR zone de sélection d'appel | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__aar_calling_search_space | |
| liste groupe ressources média | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__media_resource_group_list | |
| utilisateur source audio MOH | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__user_hold_moh_audio_source | |
| réseau MOH source audio | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__network_hold_moh_audio_source | |
| localisation | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__location | |
| groupe AAR | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__aar_group | |
| schéma territorial utilisateur | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__user_locale | |
| réseau régional | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__network_locale | |
| pont réseau intégré | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__built_in_bridge | |
| confidentialité | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__privacy | |
| Device Mobility Mode | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__device_mobility_mode | |
| propriétaire ID utilisateur | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__owner_user_id | |
| Phone suite | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__phone_suite | |
| fourniture de services | texte | isys_catg_voip_phone_list | isys_catg_voip_phone_list__services_provisioning | |
| Load name | text | isys_catg_voip_phone_list | isys_catg_voip_phone_list__load_name | |
| description | text_area | isys_catg_voip_phone_list | isys_catg_voip_phone_list__description | |

### CUCM VoIP Leitung

### Ligne CUCM VoIP

#### Tabelle: isys_catg_voip_phone_line_list

#### Tableau : isys_catg_voip_phone_line_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Verzeichnis-Nummer | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__directory_number |     |     |
| Route-Partition | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__route_partition |     |     |
| Beschreibung | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__description2 |     |     |
| Alarmierung Name | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__alerting_name |     |     |
| ASCII Alarmierung Name | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_alerting_name |     |     |
| Telefon Steuerung via CTI erlauben | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__allow_cti_control |     |     |
| Verbundene Geräte | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__id |     |     |
| Voice-Mail Profil | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__voice_mail_profile |     |     |
| Anrufauswahlzone | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__calling_search_space |     |     |
| Präsenzgruppe | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__presence_group |     |     |
| Benutzer MOH Audioquelle | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__user_hold_moh_audio_source |     |     |
| Netzwerk MOH Audioquelle | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__network_hold_moh_audio_source |     |     |
| Automatische Antwort | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__auto_answer |     |     |
| Alle Anrufe umleiten | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_forward_all |     |     |
| Sekundäre Anrufauswahlzone für Anrufumleitung | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__sec_calling_search_space |     |     |
| Umleiten bei besetzt intern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_busy_internal |     |     |
| Umleiten bei besetzt extern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_busy_external |     |     |
| Umleiten bei keiner Antwort intern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_answer_internal |     |     |
| Umleiten bei keiner Antwort extern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_answer_external |     |     |
| Umleiten bei keiner Berichterstattung intern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_coverage_internal |     |     |
| Umleiten bei keiner Berichterstattung extern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_coverage_external |     |     |
| Umleitung bei CTI Fehler | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_on_cti_fail |     |     |
| Umleitung bei unregistriert intern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_unregistered_internal |     |     |
| Umleitung bei unregistriert extern | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_unregistered_external |     |     |
| Klingeldauer bei keiner Antwort | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__no_answer_ring_duration |     |     |
| Anrufübernahmegruppe | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group |     |     |
| Display | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__display |     |     |
| ASCII Display | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_display |     |     |
| Titel der Leitung | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__line_text_label |     |     |
| ASCII Titel der Leitung | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_line_text_label |     |     |
| Visual message waiting indicator policy | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__visual_message_indicator |     |     |
| Audible message waiting indicator policy | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__audible_message_indicator |     |     |
| Klingel-Einstellung (Telefon im Leerlauf) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ring_settings_idle |     |     |
| Klingel-Einstellung (Telefon Aktiv) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ring_settings_active |     |     |
| Call pickup group audio alert setting (phone idle) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group_idle |     |     |
| Call pickup group audio alert setting (phone active) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group_active |     |     |
| Aufnahmeoption | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__recording_option |     |     |
| Aufnahmeprofil | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__recording_profile |     |     |
| Monitoring calling search space | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__monitoring_css |     |     |
| Verpasste Anrufe mitloggen | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__log_missed_calls |     |     |
| Externe Rufnummer Maske | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__external_phone_number_mask |     |     |
| Maximale Anzahl an Anrufen | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__max_number_of_calls |     |     |
| "Besetzt" Auslöser | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__busy_trigger |     |     |
| Name des Anrufers | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__caller_name |     |     |
| Nummer des Anrufers | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__caller_number |     |     |
| Umgeleitete Nummer | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__redirected_number |     |     |
| Gewählte Nummer | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__dialed_number |     |     |
| Beschreibung | text_area | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro de répertoire | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__directory_number | |
| partition route | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__route_partition | |
| description | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__description2 | |
| nom d'alarme | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__alerting_name | |
| nom d'alarme ASCII | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_alerting_name | |
| Autoriser le contrôle du téléphone via CTI | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__allow_cti_control | |
| Appareils connectés | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__id | |
| profil de messagerie vocale | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__voice_mail_profile | |
| zone de sélection d'appel | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__calling_search_space | |
| groupe de présence | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__presence_group | |
| utilisateur source audio MOH | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__user_hold_moh_audio_source | |
| réseau MOH source audio | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__network_hold_moh_audio_source | |
| réponse automatique | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__auto_answer | |
| Transférer tous les appels | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_forward_all | |
| zone de sélection d'appel secondaire pour le renvoi d'appel | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__sec_calling_search_space | |
| isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_busy_internal | | |
| redirection si occupé externe | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_busy_external | |
| isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_answer_internal | | |
| redirection en cas d'absence de réponse externe | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_answer_external | |
| isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_coverage_internal | | |
| redirection en cas d'absence de rapport externe | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_no_coverage_external | |
| redirection en cas d'erreur CTI | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_on_cti_fail | |
| redirection si non enregistré interne | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_unregistered_internal | |
| redirection si non enregistré externe | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__forward_unregistered_external | |
| durée de la sonnerie en l'absence de réponse | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__no_answer_ring_duration | |
| groupe de transfert d'appel | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group | |
| display | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__display | |
| ASCII Display | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_display | |
| titre de la ligne | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__line_text_label | |
| ASCII Titre de la ligne | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ascii_line_text_label | |
| Politique d'indicateur d'attente de message visuel | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__visual_message_indicator | |
| politique de l'indicateur de message audio en attente | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__audible_message_indicator | |
| réglage de la sonnerie (téléphone au repos) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ring_settings_idle | |
| Paramètre de sonnerie (téléphone actif) | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__ring_settings_active | |
| Call pickup group audio alert setting (phone idle) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group_idle | |
| Call pickup group audio alert setting (phone active) | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__call_pickup_group_active | |
| option d'enregistrement | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__recording_option | |
| profil d'enregistrement | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__recording_profile | |
| espace de recherche d'appels de surveillance | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__monitoring_css | |
| Enregistrer les appels manqués | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__log_missed_calls | |
| Masque de numéro d'appel externe | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__external_phone_number_mask | |
| nombre maximum d'appels | text | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__max_number_of_calls | |
| Déclencheur "occupé" | texte | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__busy_trigger | |
| nom de l'appelant | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__caller_name | |
| numéro de l'appelant | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__caller_number | |
| numéro redirigé | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__redirected_number | |
| numéro composé | int | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__dialed_number | |
| description | text_area | isys_catg_voip_phone_line_list | isys_catg_voip_phone_line_list__description | |

### Telefon/Fax

### Téléphone/fax

#### Tabelle: isys_catg_telephone_fax_list

#### Tableau : isys_catg_telephone_fax_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__isys_telephone_fax_type__id | isys_telephone_fax_type | isys_telephone_fax_type__id |
| Telefonnummer | text | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__telephone_number |     |     |
| Faxnummer | text | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__fax_number |     |     |
| Nebenstelle | text | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__extension |     |     |
| Pin-Code | text | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__pincode |     |     |
| IMEI-Nummer | text | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__imei |     |     |
| Beschreibung | text_area | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__isys_telephone_fax_type__id | isys_telephone_fax_type | isys_telephone_fax_type__id |
| numéro de téléphone | texte | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__telephone_number | |
| numéro de fax | texte | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__fax_number | |
| extension | texte | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__extension | |
| code pin | texte | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__pincode | |
| numéro IMEI | texte | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__imei | |
| description | text_area | isys_catg_telephone_fax_list | isys_catg_telephone_fax_list__description | |

### Smartcard Zertifikat

### Certificat de carte à puce

#### Tabelle: isys_catg_smartcard_certificate_list

#### Tableau : isys_catg_smartcard_certificate_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kartennummer | text | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__cardnumber |     |     |
| Sperrkennwort | text | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__barring_password |     |     |
| PIN-Nr. | text | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__pin_number |     |     |
| Referenznummer | text | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__reference |     |     |
| Läuft aus am | date | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__expires_on |     |     |
| Beschreibung | text_area | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro de carte | texte | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__cardnumber | |
| mot de passe de blocage | texte | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__barring_password | |
| numéro PIN | texte | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__pin_number | |
| numéro de référence | texte | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__reference | |
| expire le | date | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__expires_on | |
| description | text_area | isys_catg_smartcard_certificate_list | isys_catg_smartcard_certificate_list__description | |

### Freigabenzugriff

### Accès au partage

#### Tabelle: isys_catg_share_access_list

#### Tableau : isys_catg_share_access_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gewähltes Objekt | int | isys_catg_share_access_list | isys_catg_share_access_list__isys_connection__id | isys_connection | isys_connection__id |
| Mountpoint | text | isys_catg_share_access_list | isys_catg_share_access_list__mountpoint |     |     |
| Freigabename | int | isys_catg_share_access_list | isys_catg_share_access_list__isys_catg_shares_list__id | isys_catg_shares_list | isys_catg_shares_list__id |
| Beschreibung | text_area | isys_catg_share_access_list | isys_catg_share_access_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet sélectionné | int | isys_catg_share_access_list | isys_catg_share_access_list__isys_connection__id | isys_connection | isys_connection__id |
| point de montage | texte | isys_catg_share_access_list | isys_catg_share_access_list__mountpoint | |
| nom de partage | int | isys_catg_share_access_list | isys_catg_share_access_list__isys_catg_shares_list__id | isys_catg_shares_list | isys_catg_shares_list__id |
| description | text_area | isys_catg_share_access_list | isys_catg_share_access_list__description | |

### Zertifikat

### certificat

#### Tabelle: isys_catg_certificate_list

#### Tableau : isys_catg_certificate_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_certificate_list | isys_catg_certificate_list__isys_certificate_type__id | isys_certificate_type | isys_certificate_type__id |
| Erstelldatum | date | isys_catg_certificate_list | isys_catg_certificate_list__created |     |     |
| Ablaufdatum | date | isys_catg_certificate_list | isys_catg_certificate_list__expire |     |     |
| Common Name | text | isys_catg_certificate_list | isys_catg_certificate_list__common_name |     |     |
| Beschreibung | text_area | isys_catg_certificate_list | isys_catg_certificate_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_certificate_list | isys_catg_certificate_list__isys_certificate_type__id | isys_certificate_type | isys_certificate_type__id |
| date de création | isys_catg_certificate_list | isys_catg_certificate_list__created | |
| date d'expiration | isys_catg_certificate_list | isys_catg_certificate_list__expire | |
| nom commun | texte | isys_catg_certificate_list | isys_catg_certificate_list__nom_common | |
| description | text_area | isys_catg_certificate_list | isys_catg_certificate_list__description | |

### SLA

### SLA

#### Tabelle: isys_catg_sla_list

#### Tableau : isys_catg_sla_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service-ID | text | isys_catg_sla_list | isys_catg_sla_list__service_id |     |     |
| SLA Servicelevel | int | isys_catg_sla_list | isys_catg_sla_list__service_level |     |     |
| SLA Servicelevel (Dialog) | int | isys_catg_sla_list | isys_catg_sla_list__isys_sla_service_level__id | isys_sla_service_level | isys_sla_service_level__id |
| Wochentag | int | isys_catg_sla_list | isys_catg_sla_list__days |     |     |
| Montag | text | isys_catg_sla_list | isys_catg_sla_list__monday_time |     |     |
| Dienstag | text | isys_catg_sla_list | isys_catg_sla_list__tuesday_time |     |     |
| Mittwoch | text | isys_catg_sla_list | isys_catg_sla_list__wednesday_time |     |     |
| Donnerstag | text | isys_catg_sla_list | isys_catg_sla_list__thursday_time |     |     |
| Freitag | text | isys_catg_sla_list | isys_catg_sla_list__friday_time |     |     |
| Samstag | text | isys_catg_sla_list | isys_catg_sla_list__saturday_time |     |     |
| Sonntag | text | isys_catg_sla_list | isys_catg_sla_list__sunday_time |     |     |
| Reaktionszeit | int | isys_catg_sla_list | isys_catg_sla_list__reaction_time |     |     |
| Reaktionszeit Einheit | int | isys_catg_sla_list | isys_catg_sla_list__reaction_time_unit | isys_unit_of_time | isys_unit_of_time__id |
| Wiederherstellungszeit | int | isys_catg_sla_list | isys_catg_sla_list__recovery_time |     |     |
| Wiederherstellungszeit Einheit | int | isys_catg_sla_list | isys_catg_sla_list__recovery_time_unit | isys_unit_of_time | isys_unit_of_time__id |
| Kalender | int | isys_catg_sla_list | isys_catg_sla_list__isys_calendar__id | isys_calendar | isys_calendar__id |
| Beschreibung | text_area | isys_catg_sla_list | isys_catg_sla_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Service ID | text | isys_catg_sla_list | isys_catg_sla_list__service_id | |
| niveau de service SLA | int | isys_catg_sla_list | isys_catg_sla_list__service_level | |
| niveau de service SLA (dialogue) | int | isys_catg_sla_list | isys_catg_sla_list__isys_sla_service_level__id | isys_sla_service_level | isys_sla_service_level__id |
| jour de la semaine | int | isys_catg_sla_list | isys_catg_sla_list__days | |
| lundi | texte | isys_catg_sla_list | isys_catg_sla_list__monday_time | |
| mardi | texte | isys_catg_sla_list | isys_catg_sla_list__tuesday_time | |
| mercredi | texte | isys_catg_sla_list | isys_catg_sla_list__wednesday_time | |
| jeudi | texte | isys_catg_sla_list | isys_catg_sla_list__thursday_time | |
| vendredi | texte | isys_catg_sla_list | isys_catg_sla_list__friday_time | |
| samedi | texte | isys_catg_sla_list | isys_catg_sla_list__saturday_time | |
| dimanche | texte | isys_catg_sla_list | isys_catg_sla_list__sunday_time | |
| temps de réaction | int | isys_catg_sla_list | isys_catg_sla_list__reaction_time | |
| temps de réaction unité | int | isys_catg_sla_list | isys_catg_sla_list__reaction_time_unit | isys_unit_of_time | isys_unit_of_time__id |
| temps de récupération | int | isys_catg_sla_list | isys_catg_sla_list__recovery_time | |
| temps de récupération unité | int | isys_catg_sla_list | isys_catg_sla_list__recovery_time_unit | isys_unit_of_time | isys_unit_of_time__id |
| calendrier | int | isys_catg_sla_list | isys_catg_sla_list__isys_calendar__id | isys_calendar | isys_calendar__id |
| description | text_area | isys_catg_sla_list | isys_catg_sla_list__description | |

### LDAP

### LDAP

#### Tabelle: isys_catg_ldap_dn_list

#### Tableau : isys_catg_ldap_dn_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Distinguished Name (DN) | text | isys_catg_ldap_dn_list | isys_catg_ldap_dn_list__title |     |     |
| Beschreibung | text_area | isys_catg_ldap_dn_list | isys_catg_ldap_dn_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Distinguished Name (DN) | text | isys_catg_ldap_dn_list | isys_catg_ldap_dn_list__title | |
| description | text_area | isys_catg_ldap_dn_list | isys_catg_ldap_dn_list__description | |

### Host Definition

### Définition de l'hôte

#### Tabelle: isys_catg_nagios_list

#### Tableau : isys_catg_nagios_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | int | isys_catg_nagios_list | isys_catg_nagios_list__is_exportable |     |     |
| Exportkonfiguration | int | isys_catg_nagios_list | isys_catg_nagios_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| Templates | text | isys_catg_nagios_list | isys_catg_nagios_list__host_tpl |     |     |
| host_name | text | isys_catg_nagios_list | isys_catg_nagios_list__host_name |     |     |
| host_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__host_name_selection |     |     |
| Hostname | text | isys_catg_nagios_list | isys_catg_nagios_list__name1 |     |     |
| Alias | text | isys_catg_nagios_list | isys_catg_nagios_list__alias |     |     |
| IP-Adresse | int | isys_catg_nagios_list | isys_catg_nagios_list__isys_catg_ip_list__id | isys_catg_ip_list | isys_catg_ip_list__id |
| address_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__address_selection |     |     |
| Weitere Objekte als parent wählen | text | isys_catg_nagios_list | isys_catg_nagios_list__parents |     |     |
| Folgende Objekte als parent benutzen? | int | isys_catg_nagios_list | isys_catg_nagios_list__is_parent |     |     |
| check_command | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__check_command_parameters |     |     |
| check_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__retry_interval |     |     |
| max_check_attempts | int | isys_catg_nagios_list | isys_catg_nagios_list__max_check_attempts |     |     |
| check_period | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| active_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__passive_checks_enabled |     |     |
| notifications_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_list | isys_catg_nagios_list__notification_options |     |     |
| notification_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| initial_state | text | isys_catg_nagios_list | isys_catg_nagios_list__initial_state |     |     |
| obsess_over_host | int | isys_catg_nagios_list | isys_catg_nagios_list__obsess_over_host |     |     |
| check_freshness | int | isys_catg_nagios_list | isys_catg_nagios_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__freshness_threshold |     |     |
| flap_detection_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__high_flap_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler |     |     |
| event_handler + | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_parameters |     |     |
| process_perf_data | int | isys_catg_nagios_list | isys_catg_nagios_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_nonstatus_information |     |     |
| first_notification_delay | int | isys_catg_nagios_list | isys_catg_nagios_list__first_notification_delay |     |     |
| stalking_options | text | isys_catg_nagios_list | isys_catg_nagios_list__stalking_options |     |     |
| escalations | int | isys_catg_nagios_list | isys_catg_nagios_list__escalations |     |     |
| action_url | text | isys_catg_nagios_list | isys_catg_nagios_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image_alt |     |     |
| vrml_image | text | isys_catg_nagios_list | isys_catg_nagios_list__vrml_image |     |     |
| statusmap_image | text | isys_catg_nagios_list | isys_catg_nagios_list__statusmap_image |     |     |
| 2d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__2d_coords |     |     |
| 3d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__3d_coords |     |     |
| notes | text | isys_catg_nagios_list | isys_catg_nagios_list__notes |     |     |
| notes_url | text | isys_catg_nagios_list | isys_catg_nagios_list__notes_url |     |     |
| display_name | text | isys_catg_nagios_list | isys_catg_nagios_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__display_name_selection |     |     |
| Name | text | isys_catg_nagios_list | isys_catg_nagios_list__name2 |     |     |
| custom_object_vars | text_area | isys_catg_nagios_list | isys_catg_nagios_list__custom_obj_vars |     |     |
| Beschreibung | text_area | isys_catg_nagios_list | isys_catg_nagios_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Exporter cette configuration | int | isys_catg_nagios_list | isys_catg_nagios_list__is_exportable | |
| configuration d'exportation | int | isys_catg_nagios_list | isys_catg_nagios_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| Templates | text | isys_catg_nagios_list | isys_catg_nagios_list__host_tpl | |
| host_name | text | isys_catg_nagios_list | isys_catg_nagios_list__host_name | |
| host_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__host_name_selection | |
| nom d'hôte | texte | isys_catg_nagios_list | isys_catg_nagios_list__name1 | |
| alias | texte | isys_catg_nagios_list | isys_catg_nagios_list__alias | |
| adresse IP | int | isys_catg_nagios_list | isys_catg_nagios_list__isys_catg_ip_list__id | isys_catg_ip_list | isys_catg_ip_list__id |
| address_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__address_selection | |
| Choisir d'autres objets comme parent | text | isys_catg_nagios_list | isys_catg_nagios_list__parents | |
| Utiliser les objets suivants comme parent ? | int | isys_catg_nagios_list | isys_catg_nagios_list__is_parent | |
| check_command | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__check_command_parameters | |
| check_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__check_interval | |
| retry_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__retry_interval | |
| max_check_attempts | int | isys_catg_nagios_list | isys_catg_nagios_list__max_check_attempts | |
| check_period | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| active_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__passive_checks_enabled | |
| notifications_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_list | isys_catg_nagios_list__notification_options | |
| notification_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_interval | |
| notification_period | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| initial_state | text | isys_catg_nagios_list | isys_catg_nagios_list__initial_state | |
| obsess_over_host | int | isys_catg_nagios_list | isys_catg_nagios_list__obsess_over_host | |
| check_freshness | int | isys_catg_nagios_list | isys_catg_nagios_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__freshness_threshold | |
| flap_detection_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__high_flap_threshold | |
| event_handler_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler | |
| event_handler + | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_parameters | |
| process_perf_data | int | isys_catg_nagios_list | isys_catg_nagios_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_nonstatus_information | |
| first_notification_delay | int | isys_catg_nagios_list | isys_catg_nagios_list__first_notification_delay | |
| stalking_options | text | isys_catg_nagios_list | isys_catg_nagios_list__stalking_options | |
| escalations | int | isys_catg_nagios_list | isys_catg_nagios_list__escalations | |
| action_url | texte | isys_catg_nagios_list | isys_catg_nagios_list__action_url | |
| icon_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image_alt | |
| vrml_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__vrml_image | |
| statusmap_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__statusmap_image | |
| 2d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__2d_coords | |
| 3d_coords | texte | isys_catg_nagios_list | isys_catg_nagios_list__3d_coords | |
| notes | texte | isys_catg_nagios_list | isys_catg_nagios_list__notes | |
| notes_url | texte | isys_catg_nagios_list | isys_catg_nagios_list__notes_url | |
| display_name | text | isys_catg_nagios_list | isys_catg_nagios_list__display_name | |
| display_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__display_name_selection | |
| nom | texte | isys_catg_nagios_list | isys_catg_nagios_list__name2 | |
| custom_object_vars | text_area | isys_catg_nagios_list | isys_catg_nagios_list__custom_obj_vars | |
| description | text_area | isys_catg_nagios_list | isys_catg_nagios_list__description | |

### Nagios Gruppe

### Groupe Nagios

#### Tabelle: isys_catg_nagios_group_list

#### Tableau : isys_catg_nagios_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__is_exportable |     |     |
| Gruppen-Typ | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__type |     |     |
| display_name | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__name |     |     |
| display_name_selection | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__name_selection |     |     |
| Alias | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__alias |     |     |
| Notes | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__notes |     |     |
| Notes URL | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__notes_url |     |     |
| Action URL | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__action_url |     |     |
| Beschreibung | text_area | isys_catg_nagios_group_list | isys_catg_nagios_group_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Exporter cette configuration | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__is_exportable | |
| type de groupe | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__type | |
| display_name | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__name | |
| display_name_selection | int | isys_catg_nagios_group_list | isys_catg_nagios_group_list__name_selection | |
| alias | texte | isys_catg_nagios_group_list | isys_catg_nagios_group_list__alias | |
| Notes | texte | isys_catg_nagios_group_list | isys_catg_nagios_group_list__notes | |
| Notes URL | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__notes_url | |
| action URL | text | isys_catg_nagios_group_list | isys_catg_nagios_group_list__action_url | |
| description | text_area | isys_catg_nagios_group_list | isys_catg_nagios_group_list__description | |

### Nagios (Service)

### Nagios (service)

#### Tabelle: isys_catg_nagios_service_def_list

#### Tableau : isys_catg_nagios_service_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_active |     |     |
| service_description | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_description |     |     |
| Service-Template | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_template |     |     |
| check_command | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command_plus | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_parameters |     |     |
| max_check_attempts | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__max_check_attempts |     |     |
| check_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retry_interval |     |     |
| check_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_interval | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| notification_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name_selection |     |     |
| active_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__passive_checks_enabled |     |     |
| initial_state | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__initial_state |     |     |
| notifications_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_options |     |     |
| first_notification_delay | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__first_notification_delay |     |     |
| flap_detection_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__high_flap_threshold |     |     |
| is_volatile | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_volatile |     |     |
| obsess_over_service | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__obsess_over_service |     |     |
| check_freshness | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__freshness_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler |     |     |
| event_handler+ | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_nonstatus_information |     |     |
| stalking_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__stalking_options |     |     |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_exportable |     |     |
| escalations | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__escalations | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| Beschreibung | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__description |     |     |
| action_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image_alt |     |     |
| notes | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| actif | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_active | |
| service_description | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_description | |
| Service template | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_template | |
| check_command | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command_plus | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_parameters | |
| max_check_attempts | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__max_check_attempts | |
| check_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retry_interval | |
| check_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_interval | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| notification_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name_selection | |
| active_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__passive_checks_enabled | |
| initial_state | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__initial_state | |
| notifications_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_options | |
| first_notification_delay | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__first_notification_delay | |
| flap_detection_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__high_flap_threshold | |
| is_volatile | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_volatile | |
| obsess_over_service | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__obsess_over_service | |
| check_freshness | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__freshness_threshold | |
| event_handler_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler | |
| event_handler+ | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_nonstatus_information | |
| stalking_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__stalking_options | |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_exportable | |
| escalations | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__escalations | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| description | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__description | |
| action_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__action_url | |
| icon_image | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image_alt | |
| notes | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes | |
| notes_url | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__custom_obj_vars | |

### Nagios (Service TPL)

### Nagios (Service TPL)

#### Tabelle: isys_catg_nagios_service_tpl_def_list

#### Tableau : isys_catg_nagios_service_tpl_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| check_command | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__name |     |     |
| check_command_plus | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_parameters |     |     |
| max_check_attempts | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__max_check_attempts |     |     |
| check_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retry_interval |     |     |
| check_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name_selection |     |     |
| active_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__passive_checks_enabled |     |     |
| initial_state | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__initial_state |     |     |
| notifications_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_options |     |     |
| first_notification_delay | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__first_notification_delay |     |     |
| flap_detection_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__high_flap_threshold |     |     |
| is_volatile | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_volatile |     |     |
| obsess_over_service | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__obsess_over_service |     |     |
| check_freshness | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__freshness_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler |     |     |
| event_handler+ | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_status_info |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_nonstatus_info |     |     |
| stalking_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__stalking_options |     |     |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_exportable |     |     |
| escalations | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__escalations | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| Beschreibung | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__description |     |     |
| action_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image_alt |     |     |
| notes | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| check_command | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| nom | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__name | |
| check_command_plus | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_parameters | |
| max_check_attempts | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__max_check_attempts | |
| check_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retry_interval | |
| check_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_interval | |
| notification_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name_selection | |
| active_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__passive_checks_enabled | |
| initial_state | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__initial_state | |
| notifications_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_options | |
| first_notification_delay | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__first_notification_delay | |
| flap_detection_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__high_flap_threshold | |
| is_volatile | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_volatile | |
| obsess_over_service | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__obsess_over_service | |
| check_freshness | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__freshness_threshold | |
| event_handler_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler | |
| event_handler+ | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_status_info | |
| retain_nonstatus_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_nonstatus_info | |
| stalking_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__stalking_options | |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_exportable | |
| escalations | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__escalations | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| description | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__description | |
| action_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__action_url | |
| icon_image | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image_alt | |
| notes | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes | |
| notes_url | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__custom_obj_vars | |

### Service definition

### Définition du service

#### Tabelle: isys_catg_nagios_service_def_list

#### Tableau : isys_catg_nagios_service_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_active |     |     |
| service_description | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_description |     |     |
| Service-Template | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_template |     |     |
| check_command | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command_plus | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_parameters |     |     |
| max_check_attempts | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__max_check_attempts |     |     |
| check_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retry_interval |     |     |
| check_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_interval | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| notification_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name_selection |     |     |
| active_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__passive_checks_enabled |     |     |
| initial_state | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__initial_state |     |     |
| notifications_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_options |     |     |
| first_notification_delay | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__first_notification_delay |     |     |
| flap_detection_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__high_flap_threshold |     |     |
| is_volatile | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_volatile |     |     |
| obsess_over_service | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__obsess_over_service |     |     |
| check_freshness | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__freshness_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler |     |     |
| event_handler+ | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_nonstatus_information |     |     |
| stalking_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__stalking_options |     |     |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_exportable |     |     |
| escalations | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__escalations | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| Beschreibung | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__description |     |     |
| action_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image_alt |     |     |
| notes | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| actif | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_active | |
| service_description | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_description | |
| Service template | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__service_template | |
| check_command | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command_plus | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_command_parameters | |
| max_check_attempts | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__max_check_attempts | |
| check_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retry_interval | |
| check_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_interval | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| notification_period | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__display_name_selection | |
| active_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__passive_checks_enabled | |
| initial_state | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__initial_state | |
| notifications_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notification_options | |
| first_notification_delay | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__first_notification_delay | |
| flap_detection_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__high_flap_threshold | |
| is_volatile | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_volatile | |
| obsess_over_service | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__obsess_over_service | |
| check_freshness | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__freshness_threshold | |
| event_handler_enabled | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler | |
| event_handler+ | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__retain_nonstatus_information | |
| stalking_options | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__stalking_options | |
| LC__CATG__NAGIOS_SERVICE_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__is_exportable | |
| escalations | int | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__escalations | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__id |
| description | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__description | |
| action_url | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__action_url | |
| icon_image | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__icon_image_alt | |
| notes | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes | |
| notes_url | texte | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_service_def_list | isys_catg_nagios_service_def_list__custom_obj_vars | |

### Rückwärtige Servicezuweisung

### Attribution de service arrière

#### Tabelle: isys_catg_nagios_refs_services_list

#### Tableau : isys_catg_nagios_refs_services_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__host |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets assignés | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__host | |

### Service-Template definition

### Définition du modèle de service

#### Tabelle: isys_catg_nagios_service_tpl_def_list

#### Tableau : isys_catg_nagios_service_tpl_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| check_command | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__name |     |     |
| check_command_plus | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_parameters |     |     |
| max_check_attempts | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__max_check_attempts |     |     |
| check_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retry_interval |     |     |
| check_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name_selection |     |     |
| active_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__passive_checks_enabled |     |     |
| initial_state | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__initial_state |     |     |
| notifications_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_options |     |     |
| first_notification_delay | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__first_notification_delay |     |     |
| flap_detection_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__high_flap_threshold |     |     |
| is_volatile | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_volatile |     |     |
| obsess_over_service | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__obsess_over_service |     |     |
| check_freshness | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__freshness_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler |     |     |
| event_handler+ | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_status_info |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_nonstatus_info |     |     |
| stalking_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__stalking_options |     |     |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_exportable |     |     |
| escalations | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__escalations | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| Beschreibung | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__description |     |     |
| action_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image_alt |     |     |
| notes | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| check_command | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| nom | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__name | |
| check_command_plus | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_command_parameters | |
| max_check_attempts | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__max_check_attempts | |
| check_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retry_interval | |
| check_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period+ | int | timeperiod_plus_a | isys_catg_nagios_service_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| notification_interval | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_interval | |
| notification_period | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__display_name_selection | |
| active_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__passive_checks_enabled | |
| initial_state | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__initial_state | |
| notifications_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notification_options | |
| first_notification_delay | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__first_notification_delay | |
| flap_detection_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__high_flap_threshold | |
| is_volatile | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_volatile | |
| obsess_over_service | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__obsess_over_service | |
| check_freshness | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__freshness_threshold | |
| event_handler_enabled | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler | |
| event_handler+ | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| process_perf_data | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_status_info | |
| retain_nonstatus_information | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__retain_nonstatus_info | |
| stalking_options | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__stalking_options | |
| LC__CATG__NAGIOS_SERVICE_TPL_DEF__CONFIG_EXPORT | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__is_exportable | |
| escalations | int | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__escalations | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__id |
| description | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__description | |
| action_url | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__action_url | |
| icon_image | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__icon_image_alt | |
| notes | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes | |
| notes_url | texte | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_service_tpl_def_list | isys_catg_nagios_service_tpl_def_list__custom_obj_vars | |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | int | isys_catg_virtual_list | isys_catg_nagios_service_def_list__service_template |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets assignés | int | isys_catg_virtual_list | isys_catg_nagios_service_def_list__service_template | |

### Nagios (Host TPL)

### Nagios (Host TPL)

#### Tabelle: isys_catg_nagios_host_tpl_def_list

#### Tableau : isys_catg_nagios_host_tpl_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hostname | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name1 |     |     |
| Nagios Host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__max_check_attempts |     |     |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name_selection |     |     |
| check_command | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_parameters |     |     |
| initial_state | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__initial_state |     |     |
| check_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retry_interval |     |     |
| active_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__passive_checks_enabled |     |     |
| obsess_over_host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__obsess_over_host |     |     |
| check_freshness | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__freshness_threshold |     |     |
| flap_detection_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_options |     |     |
| event_handler | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler |     |     |
| event_handler + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_parameters |     |     |
| event_handler_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_enabled |     |     |
| low_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__high_flap_threshold |     |     |
| process_perf_data | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_nonstatus_information |     |     |
| first_notification_delay | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__first_notification_delay |     |     |
| notification_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_options |     |     |
| notifications_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notifications_enabled |     |     |
| stalking_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__stalking_options |     |     |
| escalations | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__escalations |     |     |
| Name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name2 |     |     |
| Beschreibung | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__description |     |     |
| action_url | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image_alt |     |     |
| vrml_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__vrml_image |     |     |
| statusmap_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__statusmap_image |     |     |
| notes | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom d'hôte | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name1 | |
| hôte Nagios | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__max_check_attempts | |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_interval | |
| notification_period | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name_selection | |
| check_command | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_parameters | |
| initial_state | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__initial_state | |
| check_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retry_interval | |
| active_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__passive_checks_enabled | |
| obsess_over_host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__obsess_over_host | |
| check_freshness | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__freshness_threshold | |
| flap_detection_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_options | |
| event_handler | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler | |
| event_handler + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_parameters | |
| event_handler_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_enabled | |
| low_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__high_flap_threshold | |
| process_perf_data | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_nonstatus_information | |
| first_notification_delay | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__first_notification_delay | |
| notification_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_options | |
| notifications_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notifications_enabled | |
| stalking_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__stalking_options | |
| escalations | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__escalations | |
| nom | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name2 | |
| description | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__description | |
| action_url | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__action_url | |
| icon_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image_alt | |
| vrml_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__vrml_image | |
| statusmap_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__statusmap_image | |
| notes | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes | |
| notes_url | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__custom_obj_vars | |

### Host-Template Definition

### Définition du modèle d'hôte

#### Tabelle: isys_catg_nagios_host_tpl_def_list

#### Tableau : isys_catg_nagios_host_tpl_def_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hostname | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name1 |     |     |
| Nagios Host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__max_check_attempts |     |     |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name_selection |     |     |
| check_command | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_parameters |     |     |
| initial_state | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__initial_state |     |     |
| check_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retry_interval |     |     |
| active_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__passive_checks_enabled |     |     |
| obsess_over_host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__obsess_over_host |     |     |
| check_freshness | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__freshness_threshold |     |     |
| flap_detection_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_options |     |     |
| event_handler | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler |     |     |
| event_handler + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_parameters |     |     |
| event_handler_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_enabled |     |     |
| low_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__high_flap_threshold |     |     |
| process_perf_data | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_nonstatus_information |     |     |
| first_notification_delay | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__first_notification_delay |     |     |
| notification_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_options |     |     |
| notifications_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notifications_enabled |     |     |
| stalking_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__stalking_options |     |     |
| escalations | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__escalations |     |     |
| Name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name2 |     |     |
| Beschreibung | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__description |     |     |
| action_url | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image_alt |     |     |
| vrml_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__vrml_image |     |     |
| statusmap_image | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__statusmap_image |     |     |
| notes | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes |     |     |
| notes_url | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes_url |     |     |
| custom_object_vars | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__custom_obj_vars |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom d'hôte | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name1 | |
| hôte Nagios | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_MAX_CHECK_ATTEMPTS | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__max_check_attempts | |
| LC__CATG__NAGIOS_HOST_TPL_DEF_CHECK_PERIOD | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| LC__CATG__NAGIOS_HOST_TPL_DEF_NOTIFICATION_INTERVAL | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_interval | |
| notification_period | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| display_name | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name | |
| display_name_selection | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__display_name_selection | |
| check_command | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_command_parameters | |
| initial_state | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__initial_state | |
| check_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_interval | |
| retry_interval | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retry_interval | |
| active_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__passive_checks_enabled | |
| obsess_over_host | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__obsess_over_host | |
| check_freshness | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__freshness_threshold | |
| flap_detection_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__flap_detection_options | |
| event_handler | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler | |
| event_handler + | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_parameters | |
| event_handler_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__event_handler_enabled | |
| low_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__high_flap_threshold | |
| process_perf_data | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__retain_nonstatus_information | |
| first_notification_delay | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__first_notification_delay | |
| notification_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notification_options | |
| notifications_enabled | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notifications_enabled | |
| stalking_options | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__stalking_options | |
| escalations | int | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__escalations | |
| nom | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__name2 | |
| description | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__description | |
| action_url | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__action_url | |
| icon_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__icon_image_alt | |
| vrml_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__vrml_image | |
| statusmap_image | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__statusmap_image | |
| notes | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes | |
| notes_url | texte | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__notes_url | |
| custom_object_vars | text_area | isys_catg_nagios_host_tpl_def_list | isys_catg_nagios_host_tpl_def_list__custom_obj_vars | |

### Nagios (Host)

### Nagios (hôte)

#### Tabelle: isys_catg_nagios_list

#### Tableau : isys_catg_nagios_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | int | isys_catg_nagios_list | isys_catg_nagios_list__is_exportable |     |     |
| Exportkonfiguration | int | isys_catg_nagios_list | isys_catg_nagios_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| Templates | text | isys_catg_nagios_list | isys_catg_nagios_list__host_tpl |     |     |
| host_name | text | isys_catg_nagios_list | isys_catg_nagios_list__host_name |     |     |
| host_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__host_name_selection |     |     |
| Hostname | text | isys_catg_nagios_list | isys_catg_nagios_list__name1 |     |     |
| Alias | text | isys_catg_nagios_list | isys_catg_nagios_list__alias |     |     |
| IP-Adresse | int | isys_catg_nagios_list | isys_catg_nagios_list__isys_catg_ip_list__id | isys_catg_ip_list | isys_catg_ip_list__id |
| address_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__address_selection |     |     |
| Weitere Objekte als parent wählen | text | isys_catg_nagios_list | isys_catg_nagios_list__parents |     |     |
| Folgende Objekte als parent benutzen? | int | isys_catg_nagios_list | isys_catg_nagios_list__is_parent |     |     |
| check_command | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__check_command_parameters |     |     |
| check_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__check_interval |     |     |
| retry_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__retry_interval |     |     |
| max_check_attempts | int | isys_catg_nagios_list | isys_catg_nagios_list__max_check_attempts |     |     |
| check_period | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| active_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__active_checks_enabled |     |     |
| passive_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__passive_checks_enabled |     |     |
| notifications_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__notifications_enabled |     |     |
| notification_options | text | isys_catg_nagios_list | isys_catg_nagios_list__notification_options |     |     |
| notification_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_interval |     |     |
| notification_period | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| initial_state | text | isys_catg_nagios_list | isys_catg_nagios_list__initial_state |     |     |
| obsess_over_host | int | isys_catg_nagios_list | isys_catg_nagios_list__obsess_over_host |     |     |
| check_freshness | int | isys_catg_nagios_list | isys_catg_nagios_list__check_freshness |     |     |
| freshness_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__freshness_threshold |     |     |
| flap_detection_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_enabled |     |     |
| flap_detection_options | text | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_options |     |     |
| low_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__low_flap_threshold |     |     |
| high_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__high_flap_threshold |     |     |
| event_handler_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_enabled |     |     |
| event_handler | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler |     |     |
| event_handler + | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_parameters |     |     |
| process_perf_data | int | isys_catg_nagios_list | isys_catg_nagios_list__process_perf_data |     |     |
| retain_status_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_status_information |     |     |
| retain_nonstatus_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_nonstatus_information |     |     |
| first_notification_delay | int | isys_catg_nagios_list | isys_catg_nagios_list__first_notification_delay |     |     |
| stalking_options | text | isys_catg_nagios_list | isys_catg_nagios_list__stalking_options |     |     |
| escalations | int | isys_catg_nagios_list | isys_catg_nagios_list__escalations |     |     |
| action_url | text | isys_catg_nagios_list | isys_catg_nagios_list__action_url |     |     |
| icon_image | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image |     |     |
| icon_image_alt | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image_alt |     |     |
| vrml_image | text | isys_catg_nagios_list | isys_catg_nagios_list__vrml_image |     |     |
| statusmap_image | text | isys_catg_nagios_list | isys_catg_nagios_list__statusmap_image |     |     |
| 2d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__2d_coords |     |     |
| 3d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__3d_coords |     |     |
| notes | text | isys_catg_nagios_list | isys_catg_nagios_list__notes |     |     |
| notes_url | text | isys_catg_nagios_list | isys_catg_nagios_list__notes_url |     |     |
| display_name | text | isys_catg_nagios_list | isys_catg_nagios_list__display_name |     |     |
| display_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__display_name_selection |     |     |
| Name | text | isys_catg_nagios_list | isys_catg_nagios_list__name2 |     |     |
| custom_object_vars | text_area | isys_catg_nagios_list | isys_catg_nagios_list__custom_obj_vars |     |     |
| Beschreibung | text_area | isys_catg_nagios_list | isys_catg_nagios_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Exporter cette configuration | int | isys_catg_nagios_list | isys_catg_nagios_list__is_exportable | |
| configuration d'exportation | int | isys_catg_nagios_list | isys_catg_nagios_list__export_host | isys_monitoring_export_config | isys_monitoring_export_config__id |
| Templates | text | isys_catg_nagios_list | isys_catg_nagios_list__host_tpl | |
| host_name | text | isys_catg_nagios_list | isys_catg_nagios_list__host_name | |
| host_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__host_name_selection | |
| nom d'hôte | texte | isys_catg_nagios_list | isys_catg_nagios_list__name1 | |
| alias | texte | isys_catg_nagios_list | isys_catg_nagios_list__alias | |
| adresse IP | int | isys_catg_nagios_list | isys_catg_nagios_list__isys_catg_ip_list__id | isys_catg_ip_list | isys_catg_ip_list__id |
| address_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__address_selection | |
| Choisir d'autres objets comme parent | text | isys_catg_nagios_list | isys_catg_nagios_list__parents | |
| Utiliser les objets suivants comme parent ? | int | isys_catg_nagios_list | isys_catg_nagios_list__is_parent | |
| check_command | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command | isys_nagios_commands | isys_nagios_commands__id |
| check_command+ | int | isys_catg_nagios_list | isys_catg_nagios_list__check_command_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| check_command_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__check_command_parameters | |
| check_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__check_interval | |
| retry_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__retry_interval | |
| max_check_attempts | int | isys_catg_nagios_list | isys_catg_nagios_list__max_check_attempts | |
| check_period | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| check_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__check_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| active_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__active_checks_enabled | |
| passive_checks_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__passive_checks_enabled | |
| notifications_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__notifications_enabled | |
| notification_options | text | isys_catg_nagios_list | isys_catg_nagios_list__notification_options | |
| notification_interval | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_interval | |
| notification_period | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| notification_period + | int | isys_catg_nagios_list | isys_catg_nagios_list__notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| initial_state | text | isys_catg_nagios_list | isys_catg_nagios_list__initial_state | |
| obsess_over_host | int | isys_catg_nagios_list | isys_catg_nagios_list__obsess_over_host | |
| check_freshness | int | isys_catg_nagios_list | isys_catg_nagios_list__check_freshness | |
| freshness_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__freshness_threshold | |
| flap_detection_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_enabled | |
| flap_detection_options | text | isys_catg_nagios_list | isys_catg_nagios_list__flap_detection_options | |
| low_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__low_flap_threshold | |
| high_flap_threshold | int | isys_catg_nagios_list | isys_catg_nagios_list__high_flap_threshold | |
| event_handler_enabled | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_enabled | |
| event_handler | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler | |
| event_handler + | int | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_plus | isys_nagios_commands_plus | isys_nagios_commands_plus__id |
| event_handler_parameters | text | isys_catg_nagios_list | isys_catg_nagios_list__event_handler_parameters | |
| process_perf_data | int | isys_catg_nagios_list | isys_catg_nagios_list__process_perf_data | |
| retain_status_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_status_information | |
| retain_nonstatus_information | int | isys_catg_nagios_list | isys_catg_nagios_list__retain_nonstatus_information | |
| first_notification_delay | int | isys_catg_nagios_list | isys_catg_nagios_list__first_notification_delay | |
| stalking_options | text | isys_catg_nagios_list | isys_catg_nagios_list__stalking_options | |
| escalations | int | isys_catg_nagios_list | isys_catg_nagios_list__escalations | |
| action_url | texte | isys_catg_nagios_list | isys_catg_nagios_list__action_url | |
| icon_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__icon_image | |
| icon_image_alt | text | isys_catg_nagios_list | isys_catg_nagios_list__icon_image_alt | |
| vrml_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__vrml_image | |
| statusmap_image | texte | isys_catg_nagios_list | isys_catg_nagios_list__statusmap_image | |
| 2d_coords | text | isys_catg_nagios_list | isys_catg_nagios_list__2d_coords | |
| 3d_coords | texte | isys_catg_nagios_list | isys_catg_nagios_list__3d_coords | |
| notes | texte | isys_catg_nagios_list | isys_catg_nagios_list__notes | |
| notes_url | texte | isys_catg_nagios_list | isys_catg_nagios_list__notes_url | |
| display_name | text | isys_catg_nagios_list | isys_catg_nagios_list__display_name | |
| display_name_selection | int | isys_catg_nagios_list | isys_catg_nagios_list__display_name_selection | |
| nom | texte | isys_catg_nagios_list | isys_catg_nagios_list__name2 | |
| custom_object_vars | text_area | isys_catg_nagios_list | isys_catg_nagios_list__custom_obj_vars | |
| description | text_area | isys_catg_nagios_list | isys_catg_nagios_list__description | |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | text | isys_catg_virtual_list | isys_catg_nagios_list__host_tpl |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets attribués | texte | isys_catg_virtual_list | isys_catg_nagios_list__host_tpl | |

### Servicecheckzuweisung

### Attribution de chèque de service

#### Tabelle: isys_catg_nagios_refs_services_list

#### Tableau : isys_catg_nagios_refs_services_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

### Nagios (Anwendungen)

### Nagios (applications)

#### Tabelle: isys_catg_nagios_refs_services_list

#### Tableau : isys_catg_nagios_refs_services_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

### Servicecheckzuweisung

### Attribution de chèque de service

#### Tabelle: isys_catg_nagios_refs_services_list

#### Tableau : isys_catg_nagios_refs_services_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__isys_obj__id__service | isys_obj | isys_obj__id |

### Nagios Service-Dependencies

### Dépendances de service Nagios

#### Tabelle: isys_catg_nagios_service_dep_list

#### Tableau : isys_catg_nagios_service_dep_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Host | int | chostdep | isys_catg_nagios_service_dep_list__host_dep_connection | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__id |
| Service (Master) | int | cservicedep | isys_catg_nagios_service_dep_list__service_dep_connection |     |     |
| Host (Master) | int | chost | isys_catg_nagios_service_dep_list__host_connection | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__id |
| inherits_parent | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__inherits_parent |     |     |
| execution_failure_criteria | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__exec_fail_criteria | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__id |
| notification_failure_criteria | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__notif_fail_criteria | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__id |
| dependency_period | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__dep_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| dependency_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_dep_list__dep_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| Beschreibung | text_area | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| hôte | int | chostdep | isys_catg_nagios_service_dep_list__host_dep_connection | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__id |
| service (maître) | int | cservicedep | isys_catg_nagios_service_dep_list__service_dep_connection | |
| hôte (maître) | int | chost | isys_catg_nagios_service_dep_list__host_connection | isys_catg_nagios_refs_services_list | isys_catg_nagios_refs_services_list__id |
| inherits_parent | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__inherits_parent | |
| execution_failure_criteria | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__exec_fail_criteria | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__id |
| notification_failure_criteria | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__notif_fail_criteria | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__id |
| dependency_period | int | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__dep_period | isys_nagios_timeperiods | isys_nagios_timeperiods__id |
| dependency_period+ | int | timeperiod_plus_b | isys_catg_nagios_service_dep_list__dep_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| description | text_area | isys_catg_nagios_service_dep_list | isys_catg_nagios_service_dep_list__description | |

### Anschrift

### Adresse

#### Tabelle: isys_catg_address_list

#### Tableau : isys_catg_address_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Adresszusatz | text_area | isys_catg_address_list | isys_catg_address_list__address |     |     |
| Straße | text | isys_catg_address_list | isys_catg_address_list__street |     |     |
| Hausnummer | text | isys_catg_address_list | isys_catg_address_list__house_no |     |     |
| Etagen | int | isys_catg_address_list | isys_catg_address_list__stories |     |     |
| Postleitzahl | text | isys_catg_address_list | isys_catg_address_list__postalcode |     |     |
| Ort | text | isys_catg_address_list | isys_catg_address_list__city |     |     |
| Region | text | isys_catg_address_list | isys_catg_address_list__region |     |     |
| Land | text | isys_catg_address_list | isys_catg_address_list__country |     |     |
| Beschreibung | text_area | isys_catg_address_list | isys_catg_address_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| complément d'adresse | text_area | isys_catg_address_list | isys_catg_address_list__address | |
| rue | texte | isys_catg_address_list | isys_catg_address_list__street | |
| numéro de maison | texte | isys_catg_address_list | isys_catg_address_list__house_no | |
| étages | int | isys_catg_address_list | isys_catg_address_list__stories | |
| code postal | texte | isys_catg_address_list | isys_catg_address_list__postalcode | |
| localité | texte | isys_catg_address_list | isys_catg_address_list__city | |
| région | texte | isys_catg_address_list | isys_catg_address_list__region | |
| pays | texte | isys_catg_address_list | isys_catg_address_list__country | |
| description | text_area | isys_catg_address_list | isys_catg_address_list__description | |

### Monitoring

### Surveillance

#### Tabelle: isys_catg_monitoring_list

#### Tableau : isys_catg_monitoring_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv? | int | isys_catg_monitoring_list | isys_catg_monitoring_list__active |     |     |
| Host | int | isys_catg_monitoring_list | isys_catg_monitoring_list__isys_monitoring_hosts__id | isys_monitoring_hosts | isys_monitoring_hosts__id |
| Hostname | text | isys_catg_monitoring_list | isys_catg_monitoring_list__host_name |     |     |
| Hostname auswahl | int | isys_catg_monitoring_list | isys_catg_monitoring_list__host_name_selection |     |     |
| Beschreibung | text_area | isys_catg_monitoring_list | isys_catg_monitoring_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Actif ? | int | isys_catg_monitoring_list | isys_catg_monitoring_list__active | |
| hôte | int | isys_catg_monitoring_list | isys_catg_monitoring_list__isys_monitoring_hosts__id | isys_monitoring_hosts | isys_monitoring_hosts__id |
| nom d'hôte | texte | isys_catg_monitoring_list | isys_catg_monitoring_list__ nom_d'hôte | |
| sélection du nom d'hôte | int | isys_catg_monitoring_list | isys_catg_monitoring_list__host_name_selection | |
| description | text_area | isys_catg_monitoring_list | isys_catg_monitoring_list__description | |

### Livestatus

### État de vie

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Livestatus | int | isys_catg_virtual_list | isys_catg_monitoring_list__active |     |     |
| Livestatus (Knopf) | int | isys_catg_virtual_list | isys_catg_monitoring_list__active |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| état vivant | int | isys_catg_virtual_list | isys_catg_monitoring_list__active | |
| état vivant (bouton) | int | isys_catg_virtual_list | isys_catg_monitoring_list__active | |

### Fahrzeug

### véhicule

#### Tabelle: isys_catg_vehicle_list

#### Tableau : isys_catg_vehicle_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kennzeichen | text | isys_catg_vehicle_list | isys_catg_vehicle_list__licence_plate |     |     |
| Beschreibung | text_area | isys_catg_vehicle_list | isys_catg_vehicle_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| code | texte | isys_catg_vehicle_list | isys_catg_vehicle_list__licence_plate | |
| description | text_area | isys_catg_vehicle_list | isys_catg_vehicle_list__description | |

### Flugzeug

### avion

#### Tabelle: isys_catg_aircraft_list

#### Tableau : isys_catg_aircraft_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Luftfahrzeugkennzeichen | text | isys_catg_aircraft_list | isys_catg_aircraft_list__registration |     |     |
| Beschreibung | text_area | isys_catg_aircraft_list | isys_catg_aircraft_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| code d'aéronef | texte | isys_catg_aircraft_list | isys_catg_aircraft_list__registration | |
| description | text_area | isys_catg_aircraft_list | isys_catg_aircraft_list__description | |

### Netzwerkverbindungen

### Connexions réseau

#### Tabelle: isys_catg_net_listener_list

#### Tableau : isys_catg_net_listener_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol__id | isys_net_protocol | isys_net_protocol__id |
| Layer 5-7 Protokoll | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol_layer_5__id | isys_net_protocol_layer_5 | isys_net_protocol_layer_5__id |
| (Bind) IP-Adresse | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Von | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_from |     |     |
| Bis | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_to |     |     |
| Geöffnet durch Applikation | int | opened_by | isys_catg_net_listener_list__opened_by | isys_obj | isys_obj__id |
| Gateway | int | gateway | isys_catg_net_listener_list__gateway | isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_catg_net_listener_list | isys_catg_net_listener_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| couche 3/4 protocole | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol__id | isys_net_protocol | isys_net_protocol__id |
| protocole couche 5-7 | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol_layer_5__id | isys_net_protocol_layer_5 | isys_net_protocol_layer_5__id |
| (Bind) Adresse IP | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| de | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_from | |
| à | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_to | |
| ouvert par application | int | opened_by | isys_catg_net_listener_list__opened_by | isys_obj | isys_obj__id |
| passerelle | int | passerelle | isys_catg_net_listener_list__gateway | isys_obj | isys_obj__id |
| description | text_area | isys_catg_net_listener_list | isys_catg_net_listener_list__description | |

### Listener

### Listener

#### Tabelle: isys_catg_net_listener_list

#### Tableau : isys_catg_net_listener_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol__id | isys_net_protocol | isys_net_protocol__id |
| Layer 5-7 Protokoll | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol_layer_5__id | isys_net_protocol_layer_5 | isys_net_protocol_layer_5__id |
| (Bind) IP-Adresse | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Von | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_from |     |     |
| Bis | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_to |     |     |
| Geöffnet durch Applikation | int | opened_by | isys_catg_net_listener_list__opened_by | isys_obj | isys_obj__id |
| Gateway | int | gateway | isys_catg_net_listener_list__gateway | isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_catg_net_listener_list | isys_catg_net_listener_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| couche 3/4 protocole | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol__id | isys_net_protocol | isys_net_protocol__id |
| protocole couche 5-7 | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_net_protocol_layer_5__id | isys_net_protocol_layer_5 | isys_net_protocol_layer_5__id |
| (Bind) Adresse IP | int | isys_catg_net_listener_list | isys_catg_net_listener_list__isys_cats_net_ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| de | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_from | |
| à | int | isys_catg_net_listener_list | isys_catg_net_listener_list__port_to | |
| ouvert par application | int | opened_by | isys_catg_net_listener_list__opened_by | isys_obj | isys_obj__id |
| passerelle | int | passerelle | isys_catg_net_listener_list__gateway | isys_obj | isys_obj__id |
| description | text_area | isys_catg_net_listener_list | isys_catg_net_listener_list__description | |

### Verbindung

### Connexion

#### Tabelle: isys_catg_net_connector_list

#### Tableau : isys_catg_net_connector_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| (Source) IP-Adresse | int | isys_catg_net_connector_list | isys_catg_net_connector_list__ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| Von | int | isys_catg_net_connector_list | isys_catg_net_connector_list__port_from |     |     |
| Bis | int | isys_catg_net_connector_list | isys_catg_net_connector_list__port_to |     |     |
| Listener | int | isys_catg_net_connector_list | isys_catg_net_connector_list__isys_catg_net_listener_list__id | isys_catg_net_listener_list | isys_catg_net_listener_list__id |
| Verbunden mit | int | isys_catg_net_connector_list | isys_catg_net_connector_list__isys_catg_net_listener_list__id | isys_catg_net_listener_list | isys_catg_net_listener_list__id |
| Gateway | int | gateway | isys_catg_net_connector_list__gateway | isys_obj | isys_obj__id |
| Beschreibung | text_area | isys_catg_net_connector_list | isys_catg_net_connector_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| (Source) Adresse IP | int | isys_catg_net_connector_list | isys_catg_net_connector_list__ip_addresses_list__id | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |
| de | int | isys_catg_net_connector_list | isys_catg_net_connector_list__port_from | |
| Bis | int | isys_catg_net_connector_list | isys_catg_net_connector_list__port_to | |
| Listener | int | isys_catg_net_connector_list | isys_catg_net_connector_list__isys_catg_net_listener_list__id | isys_catg_net_listener_list | isys_catg_net_listener_list__id |
| Connecté à | int | isys_catg_net_connector_list | isys_catg_net_connector_list__isys_catg_net_listener_list__id | isys_catg_net_listener_list | isys_catg_net_listener_list__id |
| passerelle | int | passerelle | isys_catg_net_connector_list__gateway | isys_obj | isys_obj__id |
| description | text_area | isys_catg_net_connector_list | isys_catg_net_connector_list__description | |

### Verwaltungsinstanz

### Instance administrative

#### Tabelle: isys_catg_cluster_adm_service_list

#### Tableau : isys_catg_cluster_adm_service_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Verwaltungsinstanz (Objekt) | int | isys_catg_cluster_adm_service_list | isys_catg_cluster_adm_service_list__isys_connection__id | isys_connection | isys_connection__id |
| Objekttyp | int | isys_catg_cluster_adm_service_list | isys_obj__isys_obj_type__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| instance de gestion (objet) | int | isys_catg_cluster_adm_service_list | isys_catg_cluster_adm_service_list__isys_connection__id | isys_connection | isys_connection__id |
| type d'objet | int | isys_catg_cluster_adm_service_list | isys_obj__isys_obj_type__id | |

### JDisc Custom Attributes

### JDisc Custom Attributes

#### Tabelle: isys_catg_jdisc_ca_list

#### Tableau : isys_catg_jdisc_ca_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Attribut | text | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__title |     |     |
| Wert | text | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__content |     |     |
| Typ | int | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__isys_jdisc_ca_type__id | isys_jdisc_ca_type | isys_jdisc_ca_type__id |
| Ordner | text_area | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__folder |     |     |
| Beschreibung | text_area | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| attribut | texte | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__title | |
| valeur | texte | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__contenu | |
| type | int | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__isys_jdisc_ca_type__id | isys_jdisc_ca_type | isys_jdisc_ca_type__id |
| dossier | text_area | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__folder | |
| description | text_area | isys_catg_jdisc_ca_list | isys_catg_jdisc_ca_list__description | |

### NDO

### NDO

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| NDO Status | text | isys_catg_virtual_list |     |     |     |
| NDO Status Button | text | isys_catg_virtual_list |     |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| NDO Status | text | isys_catg_virtual_list | | |
| bouton d'état NDO | texte | isys_catg_virtual_list | | |

### Kabel

### câble

#### Tabelle: isys_catg_cable_list

#### Tableau : isys_catg_cable_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art des Kabels | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_type__id | isys_cable_type | isys_cable_type__id |
| Farbe | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_colour__id | isys_cable_colour | isys_cable_colour__id |
| Belegung | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_occupancy__id | isys_cable_occupancy | isys_cable_occupancy__id |
| Kabellänge | float | isys_catg_cable_list | isys_catg_cable_list__length |     |     |
| Längeneinheit | int | isys_catg_cable_list | isys_catg_cable_list__isys_depth_unit__id |     |     |
| Maximale Anzahl an Fasern/Adern | int | isys_catg_cable_list | isys_catg_cable_list__max_amount_of_fibers_leads |     |     |
| Verbindung | text | isys_catg_cable_list | isys_catg_cable_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_catg_cable_list | isys_catg_cable_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de câble | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_type__id | isys_cable_type | isys_cable_type__id |
| couleur | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_colour__id | isys_cable_colour | isys_cable_colour__id |
| occupation | int | isys_catg_cable_list | isys_catg_cable_list__isys_cable_occupancy__id | isys_cable_occupancy | isys_cable_occupancy__id |
| longueur de câble | float | isys_catg_cable_list | isys_catg_cable_list__length | |
| unité de longueur | int | isys_catg_cable_list | isys_catg_cable_list__isys_depth_unit__id | |
| nombre maximal de fibres/fils | int | isys_catg_cable_list | isys_catg_cable_list__max_amount_of_fibers_leads | |
| connexion | texte | isys_catg_cable_list | isys_catg_cable_list__isys_obj__id | |
| description | text_area | isys_catg_cable_list | isys_catg_cable_list__description | |

### Custom Identifier

### Identifiant personnalisé

#### Tabelle: isys_catg_identifier_list

#### Tableau : isys_catg_identifier_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Key | text | isys_catg_identifier_list | isys_catg_identifier_list__key |     |     |
| Value | text | isys_catg_identifier_list | isys_catg_identifier_list__value |     |     |
| Zuletzt editiert | date_time | isys_catg_identifier_list | isys_catg_identifier_list__datetime |     |     |
| Art | int | isys_catg_identifier_list | isys_catg_identifier_list__isys_catg_identifier_type__id | isys_catg_identifier_type | isys_catg_identifier_type__id |
| Gruppe | text | isys_catg_identifier_list | isys_catg_identifier_list__group |     |     |
| Letzter Scan | text | isys_catg_identifier_list | isys_catg_identifier_list__last_scan |     |     |
| Letzte Aktualisierung | date_time | isys_catg_identifier_list | isys_obj__updated |     |     |
| Beschreibung | text_area | isys_catg_identifier_list | isys_catg_identifier_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| clé | texte | isys_catg_identifier_list | isys_catg_identifier_list__key | |
| valeur | texte | isys_catg_identifier_list | isys_catg_identifier_list__value | |
| Dernière édition | date_heure | isys_catg_identifier_list | isys_catg_identifier_list__datetime | |
| type | int | isys_catg_identifier_list | isys_catg_identifier_list__isys_catg_identifier_type__id | isys_catg_identifier_type | isys_catg_identifier_type__id |
| groupe | texte | isys_catg_identifier_list | isys_catg_identifier_list__group | |
| dernière analyse | texte | isys_catg_identifier_list | isys_catg_identifier_list__last_scan | |
| dernière mise à jour | date_time | isys_catg_identifier_list | isys_obj__updated | |
| description | text_area | isys_catg_identifier_list | isys_catg_identifier_list__description | |

### Service

### Service

#### Tabelle: isys_catg_service_list

#### Tableau : isys_catg_service_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service Nummer | text | isys_catg_service_list | isys_catg_service_list__service_number |     |     |
| Art des Service | int | isys_catg_service_list | isys_catg_service_list__isys_service_type__id | isys_service_type | isys_service_type__id |
| Service-Kategorie | int | isys_catg_service_list | isys_catg_service_list__isys_service_category__id | isys_service_category | isys_service_category__id |
| Business Unit | int | isys_catg_service_list | isys_catg_service_list__isys_business_unit__id | isys_business_unit | isys_business_unit__id |
| Aktiv im Service-Katalog | int | isys_catg_service_list | isys_catg_service_list__active |     |     |
| Servicebeschreibung intern | text_area | isys_catg_service_list | isys_catg_service_list__service_description_intern |     |     |
| Servicebeschreibung extern | text_area | isys_catg_service_list | isys_catg_service_list__service_description_extern |     |     |
| Aliase | int | srv_alias | isys_catg_service_list__id | isys_catg_service_list_2_isys_service_alias | isys_catg_service_list__id |
| Beschreibung | text_area | isys_catg_service_list | isys_catg_service_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro de service | text | isys_catg_service_list | isys_catg_service_list__service_number | |
| type de service | int | isys_catg_service_list | isys_catg_service_list__isys_service_type__id | isys_service_type | isys_service_type__id |
| catégorie de service | int | isys_catg_service_list | isys_catg_service_list__isys_service_category__id | isys_service_category | isys_service_category__id |
| Business Unit | int | isys_catg_service_list | isys_catg_service_list__isys_business_unit__id | isys_business_unit | isys_business_unit__id |
| Actif dans le catalogue des services | int | isys_catg_service_list | isys_catg_service_list__active | |
| description de service interne | text_area | isys_catg_service_list | isys_catg_service_list__service_description_intern | |
| description de service externe | text_area | isys_catg_service_list | isys_catg_service_list__service_description_externe | |
| alias | int | srv_alias | isys_catg_service_list__id | isys_catg_service_list_2_isys_service_alias | isys_catg_service_list__id |
| description | text_area | isys_catg_service_list | isys_catg_service_list__description | |

### Betriebssystem

### Système d'exploitation

#### Tabelle: isys_catg_application_list

#### Tableau : isys_catg_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Betriebssystem | int | isys_catg_application_list | isys_catg_application_list__isys_connection__id | isys_connection | isys_connection__id |
| Typ | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| Priorität | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| Zugewiesene Lizenz | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Zugewiesener Lizenzschlüssel | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| Variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Versionsnummer | int | isys_catg_application_list | isys_catg_application_list__isys_catg_version_list__id | isys_catg_version_list | isys_catg_version_list__id |
| Beschreibung | text_area | isys_catg_application_list | isys_catg_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| système d'exploitation | int | isys_catg_application_list | isys_catg_application_list__isys_connection__id | isys_connection | isys_connection__id |
| type | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| priorité | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| clé de licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| numéro de version | int | isys_catg_application_list | isys_catg_application_list__isys_catg_version_list__id | isys_catg_version_list | isys_catg_version_list__id |
| description | text_area | isys_catg_application_list | isys_catg_application_list__description | |

### QinQ SP-VLAN

### QinQ SP-VLAN

#### Tabelle: isys_catg_qinq_list

#### Tableau : isys_catg_qinq_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | int | isys_catg_qinq_list | isys_catg_qinq_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_catg_qinq_list | isys_catg_qinq_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| SP-VLAN attribué | int | isys_catg_qinq_list | isys_catg_qinq_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_catg_qinq_list | isys_catg_qinq_list__description | |

### Faser/Ader

### Fibre/fil

#### Tabelle: isys_catg_fiber_lead_list

#### Tableau : isys_catg_fiber_lead_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Label | text | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__label |     |     |
| Kategorie | int | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__isys_fiber_category__id | isys_fiber_category | isys_fiber_category__id |
| Farbe | int | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__isys_cable_colour__id | isys_cable_colour | isys_cable_colour__id |
| Dämpfung | float | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__damping |     |     |
| Beschreibung | text_area | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| étiquette | texte | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__label | |
| catégorie | int | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__isys_fiber_category__id | isys_fiber_category | isys_fiber_category__id |
| couleur | int | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__isys_cable_colour__id | isys_cable_colour | isys_cable_colour__id |
| atténuation | float | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__damping | |
| description | text_area | isys_catg_fiber_lead_list | isys_catg_fiber_lead_list__description | |

### QinQ CE-VLAN

### QinQ CE-VLAN

#### Tabelle: isys_catg_qinq_list

#### Tableau : isys_catg_qinq_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | int | isys_catg_qinq_list | isys_catg_qinq_list__isys_connection__id | isys_connection | isys_connection__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| SP-VLAN attribué | int | isys_catg_qinq_list | isys_catg_qinq_list__isys_connection__id | isys_connection | isys_connection__id |

### Bilder

### images

#### Tabelle: isys_catg_images_list

#### Tableau : isys_catg_images_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Dateiname | text | isys_catg_images_list | isys_catg_images_list__filename |     |     |
| Dateiinhalte | text | isys_catg_images_list | isys_catg_images_list__filecontent |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom de fichier | texte | isys_catg_images_list | isys_catg_images_list__filename | |
| contenu du fichier | texte | isys_catg_images_list | isys_catg_images_list__filecontent | |

### WAN-Leitungen

### Lignes WAN

#### Tabelle: isys_catg_wan_list

#### Tableau : isys_catg_wan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_wan_list | isys_catg_wan_list__title |     |     |
| Rolle | int | isys_catg_wan_list | isys_catg_wan_list__isys_wan_role__id | isys_wan_role | isys_wan_role__id |
| Typ | int | isys_catg_wan_list | isys_catg_wan_list__isys_wan_type__id | isys_wan_type | isys_wan_type__id |
| Kanäle | int | isys_catg_wan_list | isys_catg_wan_list__channels |     |     |
| Rufnummer(n) | text_area | isys_catg_wan_list | isys_catg_wan_list__call_numbers |     |     |
| Standort des Anschlusses | int | isys_catg_wan_list | isys_catg_wan_list__connection_location | isys_obj | isys_obj__id |
| Kapazität UP | float | isys_catg_wan_list | isys_catg_wan_list__capacity_up |     |     |
| Kapazität UP Einheit | int | isys_catg_wan_list | isys_catg_wan_list__capacity_up_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Kapazität DOWN | float | isys_catg_wan_list | isys_catg_wan_list__capacity_down |     |     |
| Kapazität DOWN Einheit | int | isys_catg_wan_list | isys_catg_wan_list__capacity_down_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Max. Kapazität UP | float | isys_catg_wan_list | isys_catg_wan_list__max_capacity_up |     |     |
| Max. Kapazität UP Einheit | int | isys_catg_wan_list | isys_catg_wan_list__max_capacity_up_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Max. Kapazität DOWN | float | isys_catg_wan_list | isys_catg_wan_list__max_capacity_down |     |     |
| Max. Kapazität DOWN Einheit | int | isys_catg_wan_list | isys_catg_wan_list__max_capacity_down_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Projektnummer | text | isys_catg_wan_list | isys_catg_wan_list__project_no |     |     |
| VLAN-ID | int | isys_catg_wan_list | isys_catg_wan_list__vlan | isys_obj | isys_obj__id |
| Warenkorbnummer | text | isys_catg_wan_list | isys_catg_wan_list__shopping_cart_no |     |     |
| Ticket Nr. | text | isys_catg_wan_list | isys_catg_wan_list__ticket_no |     |     |
| Kunden Nr. | text | isys_catg_wan_list | isys_catg_wan_list__customer_no |     |     |
| Verbundene Router | int | isys_catg_wan_list | isys_catg_wan_list__id | isys_catg_wan_list_2_router | isys_catg_wan_list_2_router__isys_catg_wan_list__id |
| Verbundene Netze | int | isys_catg_wan_list | isys_catg_wan_list__id | isys_catg_wan_list_2_net | isys_catg_wan_list_2_net__isys_catg_wan_list__id |
| Beschreibung | text_area | isys_catg_wan_list | isys_catg_wan_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_wan_list | isys_catg_wan_list__title | |
| rôle | int | isys_catg_wan_list | isys_catg_wan_list__isys_wan_role__id | isys_wan_role | isys_wan_role__id |
| type | int | isys_catg_wan_list | isys_catg_wan_list__isys_wan_type__id | isys_wan_type | isys_wan_type__id |
| canaux | int | isys_catg_wan_list | isys_catg_wan_list__channels | |
| numéro(s) d'appel | text_area | isys_catg_wan_list | isys_catg_wan_list__call_numbers | |
| emplacement de la connexion | int | isys_catg_wan_list | isys_catg_wan_list__connection_location | isys_obj | isys_obj__id |
| capacité UP | float | isys_catg_wan_list | isys_catg_wan_list__capacity_up | |
| capacité UP unité | int | isys_catg_wan_list | isys_catg_wan_list__capacity_up_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| capacité DOWN | float | isys_catg_wan_list | isys_catg_wan_list__capacity_down | |
| capacité DOWN unité | int | isys_catg_wan_list | isys_catg_wan_list__capacity_down_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| capacité max. Capacité UP | float | isys_catg_wan_list | isys_catg_wan_list__max_capacity_up | |
| capacité max. Capacité UP unité | int | isys_catg_wan_list | isys_catg_wan_list__max_capacity_up_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Max. Capacité DOWN | float | isys_catg_wan_list | isys_catg_wan_list__max_capacity_down | |
| capacité max. Capacité DOWN Unité | int | isys_catg_wan_list | isys_catg_wan_list__max_capacity_down_unit | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| numéro de projet | texte | isys_catg_wan_list | isys_catg_wan_list__project_no | |
| VLAN-ID | int | isys_catg_wan_list | isys_catg_wan_list__vlan | isys_obj | isys_obj__id |
| numéro de panier | texte | isys_catg_wan_list | isys_catg_wan_list__shopping_cart_no | |
| n° de ticket | texte | isys_catg_wan_list | isys_catg_wan_list__ticket_no | |
| N° client | texte | isys_catg_wan_list | isys_catg_wan_list__customer_no | |
| Routeurs connectés | int | isys_catg_wan_list | isys_catg_wan_list__id | isys_catg_wan_list_2_router | isys_catg_wan_list_2_router__isys_catg_wan_list__id |
| Réseaux connectés | int | isys_catg_wan_list | isys_catg_wan_list__id | isys_catg_wan_list_2_net | isys_catg_wan_list_2_net__isys_catg_wan_list__id |
| description | text_area | isys_catg_wan_list | isys_catg_wan_list__description | |

### Remote Management Controller

### Contrôleur de gestion à distance

#### Tabelle: isys_catg_rm_controller_list

#### Tableau : isys_catg_rm_controller_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primäre ZugriffsURL | text | isys_catg_rm_controller_list | isys_catg_access_list__id |     |     |
| Remote Management Controller | int | isys_catg_rm_controller_list | isys_catg_rm_controller_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_catg_rm_controller_list | isys_catg_rm_controller_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| URL d'accès primaire | texte | isys_catg_rm_controller_list | isys_catg_access_list__id | |
| contrôleur de gestion à distance | int | isys_catg_rm_controller_list | isys_catg_rm_controller_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_catg_rm_controller_list | isys_catg_rm_controller_list__description | |

### Verwaltete Geräte

### Périphériques gérés

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Remote Management Controller | int | isys_catg_virtual_list | isys_connection__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| contrôleur de gestion à distance | int | isys_catg_virtual_list | isys_connection__isys_obj__id | |

### Virtuell gemanagte Objekte

### Objets gérés virtuellement

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_catg_virtual_list | isys_catg_virtual_host_list__administration_service |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_catg_virtual_list | isys_catg_virtual_host_list__administration_service | |

### VRRP

### VRRP

#### Tabelle: isys_catg_vrrp_list

#### Tableau : isys_catg_vrrp_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_catg_vrrp_list | isys_catg_vrrp_list__isys_vrrp_type__id | isys_vrrp_type | isys_vrrp_type__id |
| VR ID | text | isys_catg_vrrp_list | isys_catg_vrrp_list__vr_id |     |     |
| Beschreibung | text_area | isys_catg_vrrp_list | isys_catg_vrrp_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_catg_vrrp_list | isys_catg_vrrp_list__isys_vrrp_type__id | isys_vrrp_type | isys_vrrp_type__id |
| VR ID | texte | isys_catg_vrrp_list | isys_catg_vrrp_list__vr_id | |
| description | text_area | isys_catg_vrrp_list | isys_catg_vrrp_list__description | |

### Mitglieder

### membres

#### Tabelle: isys_catg_vrrp_member_list

#### Tableau : isys_catg_vrrp_member_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| VRRP Mitglied | int | isys_catg_vrrp_member_list | isys_catg_vrrp_member_list__isys_catg_log_port_list__id | isys_catg_log_port_list | isys_catg_log_port_list__id |
| Beschreibung | text_area | isys_catg_vrrp_member_list | isys_catg_vrrp_member_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| membre VRRP | int | isys_catg_vrrp_member_list | isys_catg_vrrp_member_list__isys_catg_log_port_list__id | isys_catg_log_port_list | isys_catg_log_port_list__id |
| description | text_area | isys_catg_vrrp_member_list | isys_catg_vrrp_member_list__description | |

### Stack Mitglieder

### Membres de la pile

#### Tabelle: isys_catg_stack_member_list

#### Tableau : isys_catg_stack_member_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Mitglied | int | isys_catg_stack_member_list | isys_catg_stack_member_list__stack_member | isys_obj | isys_obj__id |
| Modus | int | isys_catg_stack_member_list | isys_catg_stack_member_list__mode |     |     |
| Beschreibung | text_area | isys_catg_stack_member_list | isys_catg_stack_member_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| membre | int | isys_catg_stack_member_list | isys_catg_stack_member_list__stack_member | isys_obj | isys_obj__id |
| mode | int | isys_catg_stack_member_list | isys_catg_stack_member_list__mode | |
| description | text_area | isys_catg_stack_member_list | isys_catg_stack_member_list__description | |

### Letzter eingeloggter Benutzer

### Dernier utilisateur connecté

#### Tabelle: isys_catg_last_login_user_list

#### Tableau : isys_catg_last_login_user_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Letzter eingeloggter Benutzer | text | isys_catg_last_login_user_list | isys_catg_last_login_user_list__last_login |     |     |
| Typ | text | isys_catg_last_login_user_list | isys_catg_last_login_user_list__type |     |     |
| Beschreibung | text_area | isys_catg_last_login_user_list | isys_catg_last_login_user_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Dernier utilisateur connecté | texte | isys_catg_last_login_user_list | isys_catg_last_login_user_list__last_login | |
| type | text | isys_catg_last_login_user_list | isys_catg_last_login_user_list__type | |
| description | text_area | isys_catg_last_login_user_list | isys_catg_last_login_user_list__description | |

### Netzbereich

### Zone de réseau

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereiche | text | isys_catg_virtual_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| zones | texte | isys_catg_virtual_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |

### Optionen

### options

#### Tabelle: isys_catg_net_zone_options_list

#### Tableau : isys_catg_net_zone_options_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereichsfarbe | text | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__color |     |     |
| Bereichsfarbe | text | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__domain |     |     |
| Beschreibung | text_area | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| couleur de zone | texte | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__color | |
| couleur de la zone | text | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__domain | |
| description | text_area | isys_catg_net_zone_options_list | isys_catg_net_zone_options_list__description | |

### Bereiche

### domaines

#### Tabelle: isys_catg_virtual_list

#### Tableau : isys_catg_virtual_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereiche | text | isys_catg_virtual_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| zones | texte | isys_catg_virtual_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |

## Spezifische Kategorien

## Catégories spécifiques

### Rack

### Rack

#### Tabelle: isys_cats_enclosure_list

#### Tableau : isys_cats_enclosure_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertikale Einschübe (Frontseite) | int | isys_cats_enclosure_list | isys_cats_enclosure_list__vertical_slots_front |     |     |
| Vertikale Einschübe (Rückseite) | int | isys_cats_enclosure_list | isys_cats_enclosure_list__vertical_slots_rear |     |     |
| Sortierung der Höheneinheit | text | isys_cats_enclosure_list | isys_cats_enclosure_list__slot_sorting |     |     |
| Beschreibung | text_area | isys_cats_enclosure_list | isys_cats_enclosure_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Tiroirs verticaux (face avant) | int | isys_cats_enclosure_list | isys_cats_enclosure_list__vertical_slots_front | |
| tiroirs verticaux (arrière) | int | isys_cats_enclosure_list | isys_cats_enclosure_list__vertical_slots_rear | |
| tri de l'unité de hauteur | text | isys_cats_enclosure_list | isys_cats_enclosure_list__slot_sorting | |
| description | text_area | isys_cats_enclosure_list | isys_cats_enclosure_list__description | |

### Raum

### espace

#### Tabelle: isys_cats_room_list

#### Tableau : isys_cats_room_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_cats_room_list | isys_cats_room_list__isys_room_type__id | isys_room_type | isys_room_type__id |
| Raumnummer | text | isys_cats_room_list | isys_cats_room_list__number |     |     |
| Stockwerk | text | isys_cats_room_list | isys_cats_room_list__floor |     |     |
| Beschreibung | text_area | isys_cats_room_list | isys_cats_room_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_room_list | isys_cats_room_list__isys_room_type__id | isys_room_type | isys_room_type__id |
| numéro de pièce | texte | isys_cats_room_list | isys_cats_room_list__number | |
| étage | texte | isys_cats_room_list | isys_cats_room_list__floor | |
| description | text_area | isys_cats_room_list | isys_cats_room_list__description | |

### Dienste

### services

#### Tabelle: isys_cats_application_list

#### Tableau : isys_cats_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys_cats_application_list | isys_cats_application_list__specification |     |     |
| Hersteller | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| Installationsart | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| Registrierungs-Key | text | isys_cats_application_list | isys_cats_application_list__registration_key |     |     |
| Installationspfad | text | isys_cats_application_list | isys_cats_application_list__install_path |     |     |
| Anzahl Installationen | int | isys_cats_application_list |     |     |     |
| Beschreibung | text_area | isys_cats_application_list | isys_cats_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| spécification | texte | isys_cats_application_list | isys_cats_application_list__specification | |
| fabricant | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| type d'installation | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| clé d'enregistrement | texte | isys_cats_application_list | isys_cats_application_list__registration_key | |
| chemin d'installation | texte | isys_cats_application_list | isys_cats_application_list__install_path | |
| nombre d'installations | int | isys_cats_application_list | | |
| description | text_area | isys_cats_application_list | isys_cats_application_list__description | |

### Switch

### Switch

#### Tabelle: isys_cats_switch_net_list

#### Tableau : isys_cats_switch_net_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| VLAN Management Protokoll | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_vlan_management_protocol__id | isys_vlan_management_protocol | isys_vlan_management_protocol__id |
| Rolle | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_switch_role__id | isys_switch_role | isys_switch_role__id |
| Spanning Tree | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_switch_spanning_tree__id | isys_switch_spanning_tree | isys_switch_spanning_tree__id |
| Beschreibung | text_area | isys_cats_switch_net_list | isys_cats_switch_net_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| protocole de gestion VLAN | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_vlan_management_protocol__id | isys_vlan_management_protocol | isys_vlan_management_protocol__id |
| rôle | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_switch_role__id | isys_switch_role | isys_switch_role__id |
| Spanning Tree | int | isys_cats_switch_net_list | isys_cats_switch_net_list__isys_switch_spanning_tree__id | isys_switch_spanning_tree | isys_switch_spanning_tree__id |
| description | text_area | isys_cats_switch_net_list | isys_cats_switch_net_list__description | |

### WAN-Leitungen

### Lignes WAN

#### Tabelle: isys_cats_wan_list

#### Tableau : isys_cats_wan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Rolle | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_role__id | isys_wan_role | isys_wan_role__id |
| Typ | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_type__id | isys_wan_type | isys_wan_type__id |
| Kapazität | double | isys_cats_wan_list | isys_cats_wan_list__capacity |     |     |
| Kapazitätseinheit | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_capacity_unit__id | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| Beschreibung | text_area | isys_cats_wan_list | isys_cats_wan_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| rôle | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_role__id | isys_wan_role | isys_wan_role__id |
| type | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_type__id | isys_wan_type | isys_wan_type__id |
| capacité | double | isys_cats_wan_list | isys_cats_wan_list__capacity | |
| unité de capacité | int | isys_cats_wan_list | isys_cats_wan_list__isys_wan_capacity_unit__id | isys_wan_capacity_unit | isys_wan_capacity_unit__id |
| description | text_area | isys_cats_wan_list | isys_cats_wan_list__description | |

### Notfallplan

### Plan d'urgence

#### Tabelle: isys_cats_emergency_plan_list

#### Tableau : isys_cats_emergency_plan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zeitbedarf | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__calc_time_need |     |     |
| Einheit | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Datum Notfallübung | date_time | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__practice_actual_date |     |     |
| Beschreibung | text_area | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| temps requis | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__calc_time_need | |
| unité | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| date_exercice_d'urgence | date_time | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__practice_actual_date | |
| description | text_area | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__description | |

### Klimaanlage

### Climatisation

#### Tabelle: isys_cats_ac_list

#### Tableau : isys_cats_ac_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_type__id | isys_ac_type | isys_ac_type__id |
| Schwellwert | float | isys_cats_ac_list | isys_cats_ac_list__threshold |     |     |
| Speicher-Einheit | int | isys_cats_ac_list | isys_cats_ac_list__isys_temp_unit__id | isys_temp_unit | isys_temp_unit__id |
| Kapazitätseinheit | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_refrigerating_capacity_unit__id | isys_ac_refrigerating_capacity_unit | isys_ac_refrigerating_capacity_unit__id |
| Kühlleistung | float | isys_cats_ac_list | isys_cats_ac_list__capacity |     |     |
| Luftmenge | float | isys_cats_ac_list | isys_cats_ac_list__air_quantity |     |     |
| isys_volume_unit | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_air_quantity_unit__id | isys_ac_air_quantity_unit | isys_ac_air_quantity_unit__id |
| Breite | float | isys_cats_ac_list | isys_cats_ac_list__width |     |     |
| Höhe | float | isys_cats_ac_list | isys_cats_ac_list__height |     |     |
| Tiefe | float | isys_cats_ac_list | isys_cats_ac_list__depth |     |     |
| isys_depth_unit | int | isys_cats_ac_list | isys_cats_ac_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| Beschreibung | text_area | isys_cats_ac_list | isys_cats_ac_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_type__id | isys_ac_type | isys_ac_type__id |
| seuil | float | isys_cats_ac_list | isys_cats_ac_list__threshold | |
| unité de mémoire | int | isys_cats_ac_list | isys_cats_ac_list__isys_temp_unit__id | isys_temp_unit | isys_temp_unit__id |
| unité de capacité | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_refrigerating_capacity_unit__id | isys_ac_refrigerating_capacity_unit | isys_ac_refrigerating_capacity_unit__id |
| capacité de refroidissement | float | isys_cats_ac_list | isys_cats_ac_list__capacity | |
| volume d'air | float | isys_cats_ac_list | isys_cats_ac_list__air_quantity | |
| isys_volume_unit | int | isys_cats_ac_list | isys_cats_ac_list__isys_ac_air_quantity_unit__id | isys_ac_air_quantity_unit | isys_ac_air_quantity_unit__id |
| largeur | float | isys_cats_ac_list | isys_cats_ac_list__width | |
| hauteur | float | isys_cats_ac_list | isys_cats_ac_list__height | |
| profondeur | float | isys_cats_ac_list | isys_cats_ac_list__depth | |
| isys_depth_unit | int | isys_cats_ac_list | isys_cats_ac_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| description | text_area | isys_cats_ac_list | isys_cats_ac_list__description | |

### WiFi-Gerät

### Périphérique Wi-Fi

#### Tabelle: isys_cats_access_point_list

#### Tableau : isys_cats_access_point_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_access_point_list | isys_cats_access_point_list__title |     |     |
| Funktion | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_function__id | isys_wlan_function | isys_wlan_function__id |
| Standard | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_standard__id | isys_wlan_standard | isys_wlan_standard__id |
| Kanal | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_channel__id | isys_wlan_channel | isys_wlan_channel__id |
| SSID übertragen | int | isys_cats_access_point_list | isys_cats_access_point_list__broadcast_ssid |     |     |
| SSID | text | isys_cats_access_point_list | isys_cats_access_point_list__ssid |     |     |
| MAC-Filter | int | isys_cats_access_point_list | isys_cats_access_point_list__mac_filter |     |     |
| Authentifikation | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_auth__id | isys_wlan_auth | isys_wlan_auth__id |
| Verschlüsselung | int | isys_cats_access_point_list | isys_cats_access_point_list__encryption | isys_wlan_encryption | isys_wlan_encryption__id |
| Schlüssel | text | isys_cats_access_point_list | isys_cats_access_point_list__key |     |     |
| Beschreibung | text_area | isys_cats_access_point_list | isys_cats_access_point_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_access_point_list | isys_cats_access_point_list__title | |
| fonction | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_function__id | isys_wlan_function | isys_wlan_function__id |
| standard | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_standard__id | isys_wlan_standard | isys_wlan_standard__id |
| canal | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_channel__id | isys_wlan_channel | isys_wlan_channel__id |
| SSID transmis | int | isys_cats_access_point_list | isys_cats_access_point_list__broadcast_ssid | |
| SSID | texte | isys_cats_access_point_list | isys_cats_access_point_list__ssid | |
| filtre MAC | int | isys_cats_access_point_list | isys_cats_access_point_list__mac_filter | |
| authentification | int | isys_cats_access_point_list | isys_cats_access_point_list__isys_wlan_auth__id | isys_wlan_auth | isys_wlan_auth__id |
| cryptage | int | isys_cats_access_point_list | isys_cats_access_point_list__encryption | isys_wlan_encryption | isys_wlan_encryption__id |
| clé | texte | isys_cats_access_point_list | isys_cats_access_point_list__key | |
| description | text_area | isys_cats_access_point_list | isys_cats_access_point_list__description | |

### Monitor

### moniteur

#### Tabelle: isys_cats_monitor_list

#### Tableau : isys_cats_monitor_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Display | float | isys_cats_monitor_list | isys_cats_monitor_list__display |     |     |
| Einheit | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| Typ | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_monitor_type__id | isys_monitor_type | isys_monitor_type__id |
| Auflösung | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_monitor_resolution__id | isys_monitor_resolution | isys_monitor_resolution__id |
| Pivot | int | isys_cats_monitor_list | isys_cats_monitor_list__pivot |     |     |
| Lautsprecher | int | isys_cats_monitor_list | isys_cats_monitor_list__speaker |     |     |
| Beschreibung | text_area | isys_cats_monitor_list | isys_cats_monitor_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| affichage | float | isys_cats_monitor_list | isys_cats_monitor_list__display | |
| unité | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_depth_unit__id | isys_depth_unit | isys_depth_unit__id |
| type | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_monitor_type__id | isys_monitor_type | isys_monitor_type__id |
| résolution | int | isys_cats_monitor_list | isys_cats_monitor_list__isys_monitor_resolution__id | isys_monitor_resolution | isys_monitor_resolution__id |
| Pivot | int | isys_cats_monitor_list | isys_cats_monitor_list__pivot | |
| haut-parleur | int | isys_cats_monitor_list | isys_cats_monitor_list__speaker | |
| description | text_area | isys_cats_monitor_list | isys_cats_monitor_list__description | |

### Arbeitsplatzsystem

### Système de poste de travail

#### Tabelle: isys_cats_client_list

#### Tableau : isys_cats_client_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ des Clients | int | isys_cats_client_list | isys_cats_client_list__isys_client_type__id | isys_client_type | isys_client_type__id |
| Tastatur-Layout | text | isys_cats_client_list | isys_cats_client_list__keyboard_layout |     |     |
| Beschreibung | text_area | isys_cats_client_list | isys_cats_client_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de client | int | isys_cats_client_list | isys_cats_client_list__isys_client_type__id | isys_client_type | isys_client_type__id |
| disposition du clavier | texte | isys_cats_client_list | isys_cats_client_list__keyboard_layout | |
| description | text_area | isys_cats_client_list | isys_cats_client_list__description | |

### FC-Switch

### Commutateur FC

#### Tabelle: isys_cats_switch_fc_list

#### Tableau : isys_cats_switch_fc_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_switch_fc_list | isys_cats_switch_fc_list__title |     |     |
| Aktiv | int | isys_cats_switch_fc_list | isys_cats_switch_fc_list__unit_active |     |     |
| Beschreibung | text_area | isys_cats_switch_fc_list | isys_cats_switch_fc_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_switch_fc_list | isys_cats_switch_fc_list__title | |
| actif | int | isys_cats_switch_fc_list | isys_cats_switch_fc_list__unit_active | |
| description | text_area | isys_cats_switch_fc_list | isys_cats_switch_fc_list__description | |

### Routing

### Routage

#### Tabelle: isys_cats_router_list

#### Tableau : isys_cats_router_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Routingprotokoll | int | isys_cats_router_list | isys_cats_router_list__routing_protocol | isys_routing_protocol | isys_routing_protocol__id |
| Gateway Adresse | int | isys_cats_router_list | isys_cats_router_list__id |     |     |
| Beschreibung | text_area | isys_cats_router_list | isys_cats_router_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| protocole de routage | int | isys_cats_router_list | isys_cats_router_list__routing_protocol | isys_routing_protocol | isys_routing_protocol__id |
| adresse de la passerelle | int | isys_cats_router_list | isys_cats_router_list__id | |
| description | text_area | isys_cats_router_list | isys_cats_router_list__description | |

### Drucker

### imprimante

#### Tabelle: isys_cats_prt_list

#### Tableau : isys_cats_prt_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_type__id | isys_cats_prt_type | isys_cats_prt_type__id |
| Farbe | int | isys_cats_prt_list | isys_cats_prt_list__iscolor |     |     |
| Duplex | int | isys_cats_prt_list | isys_cats_prt_list__isduplex |     |     |
| Emulation | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_emulation__id | isys_cats_prt_emulation | isys_cats_prt_emulation__id |
| Papierformat | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_paper__id | isys_cats_prt_paper | isys_cats_prt_paper__id |
| Beschreibung | text_area | isys_cats_prt_list | isys_cats_prt_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_type__id | isys_cats_prt_type | isys_cats_prt_type__id |
| couleur | int | isys_cats_prt_list | isys_cats_prt_list__iscolor | |
| Duplex | int | isys_cats_prt_list | isys_cats_prt_list__isduplex | |
| émulation | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_emulation__id | isys_cats_prt_emulation | isys_cats_prt_emulation__id |
| format de papier | int | isys_cats_prt_list | isys_cats_prt_list__isys_cats_prt_paper__id | isys_cats_prt_paper | isys_cats_prt_paper__id |
| description | text_area | isys_cats_prt_list | isys_cats_prt_list__description | |

### Dateien

### fichiers

#### Tabelle: isys_cats_file_list

#### Tableau : isys_cats_file_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_file_list | isys_file_version__title |     |     |
| Dateiname | int | isys_cats_file_list | isys_file_version__isys_file_physical__id |     |     |
| Kategorie | int | isys_cats_file_list | isys_cats_file_list__isys_file_category__id | isys_file_category | isys_file_category__id |
| Revision | text | isys_cats_file_list | isys_file_version__revision |     |     |
| Versions-Beschreibung | text_area | isys_cats_file_list | isys_file_version__description |     |     |
| Beschreibung | text_area | isys_cats_file_list | isys_cats_file_list__description |     |     |
| Version | int | isys_cats_file_list | isys_cats_file_list__isys_file_version__id | isys_file_version | isys_file_version__id |
| MD5 Checksumme | text | isys_cats_file_list | isys_file_physical__md5 |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_file_list | isys_file_version__title | |
| nom de fichier | int | isys_cats_file_list | isys_file_version__isys_file_physical__id | |
| catégorie | int | isys_cats_file_list | isys_cats_file_list__isys_file_category__id | isys_file_category | isys_file_category__id |
| révision | texte | isys_cats_file_list | isys_file_version__revision | |
| description de la version | text_area | isys_cats_file_list | isys_file_version__description | |
| description | text_area | isys_cats_file_list | isys_cats_file_list__description | |
| version | int | isys_cats_file_list | isys_cats_file_list__isys_file_version__id | isys_file_version | isys_file_version__id |
| somme de contrôle MD5 | texte | isys_cats_file_list | isys_file_physical__md5 | |

### Anwendungen

### applications

#### Tabelle: isys_cats_application_list

#### Tableau : isys_cats_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys_cats_application_list | isys_cats_application_list__specification |     |     |
| Hersteller | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| Installationsart | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| Registrierungs-Key | text | isys_cats_application_list | isys_cats_application_list__registration_key |     |     |
| Installationspfad | text | isys_cats_application_list | isys_cats_application_list__install_path |     |     |
| Anzahl Installationen | int | isys_cats_application_list |     |     |     |
| Beschreibung | text_area | isys_cats_application_list | isys_cats_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| spécification | texte | isys_cats_application_list | isys_cats_application_list__specification | |
| fabricant | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| type d'installation | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| clé d'enregistrement | texte | isys_cats_application_list | isys_cats_application_list__registration_key | |
| chemin d'installation | texte | isys_cats_application_list | isys_cats_application_list__install_path | |
| nombre d'installations | int | isys_cats_application_list | | |
| description | text_area | isys_cats_application_list | isys_cats_application_list__description | |

### Netz

### Réseau

#### Tabelle: isys_cats_net_list

#### Tableau : isys_cats_net_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_net_list | isys_cats_net_list__title |     |     |
| Typ | int | isys_cats_net_list | isys_cats_net_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| Netz | text | isys_cats_net_list | isys_cats_net_list__address |     |     |
| Netzmaske | text | isys_cats_net_list | isys_cats_net_list__mask |     |     |
| Standardgateway | int | isys_cats_net_list | isys_cats_net_list__isys_catg_ip_list__id |     |     |
| Adresse von | text | isys_cats_net_list | isys_cats_net_list__address_range_from |     |     |
| Adresse bis | text | isys_cats_net_list | isys_cats_net_list__address_range_to |     |     |
| DNS-Server | int | isys_cats_net_list | isys_cats_net_list__id | isys_cats_net_list_2_isys_catg_ip_list | isys_cats_net_list__id |
| DNS Domäne | int | dns_domain | isys_cats_net_list__id | isys_cats_net_list_2_isys_net_dns_domain | isys_cats_net_list__id |
| CIDR-Suffix | int | isys_cats_net_list | isys_cats_net_list__cidr_suffix |     |     |
| Reverse DNS | text | isys_cats_net_list | isys_cats_net_list__reverse_dns |     |     |
| Layer-2-Netz Zuordnung | int | isys_cats_net_list | isys_obj__id |     |     |
| Netz | text | isys_cats_net_list |     |     |     |
| Adressbereich | text | isys_cats_net_list | isys_obj__id |     |     |
| Netz mit Suffix | text | isys_cats_net_list | isys_obj__id |     |     |
| Zugewiesene Adressen | text | isys_cats_net_list | isys_obj__id |     |     |
| Beschreibung | text_area | isys_cats_net_list | isys_cats_net_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_net_list | isys_cats_net_list__title | |
| type | int | isys_cats_net_list | isys_cats_net_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| réseau | texte | isys_cats_net_list | isys_cats_net_list__address | |
| masque réseau | texte | isys_cats_net_list | isys_cats_net_list__mask | |
| passerelle par défaut | int | isys_cats_net_list | isys_cats_net_list__isys_catg_ip_list__id | |
| adresse de | texte | isys_cats_net_list | isys_cats_net_list__address_range_from | |
| adresse jusqu'à | texte | isys_cats_net_list | isys_cats_net_list__address_range_to | |
| serveur DNS | int | isys_cats_net_list | isys_cats_net_list__id | isys_cats_net_list_2_isys_catg_ip_list | isys_cats_net_list__id |
| domaine DNS | int | dns_domain | isys_cats_net_list__id | isys_cats_net_list_2_isys_net_dns_domain | isys_cats_net_list__id |
| suffixe CIDR | int | isys_cats_net_list | isys_cats_net_list__cidr_suffix | |
| DNS inversé | texte | isys_cats_net_list | isys_cats_net_list__reverse_dns | |
| attribution de réseau de couche 2 | int | isys_cats_net_list | isys_obj__id | |
| réseau | texte | isys_cats_net_list | | |
| plage d'adresses | texte | isys_cats_net_list | isys_obj__id | |
| réseau avec suffixe | texte | isys_cats_net_list | isys_obj__id | |
| adresses attribuées | texte | isys_cats_net_list | isys_obj__id | |
| description | text_area | isys_cats_net_list | isys_cats_net_list__description | |

### Mobilfunk

### Téléphonie mobile

#### Tabelle: isys_cats_mobile_phone_list

#### Tableau : isys_cats_mobile_phone_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| IMEI-Nummer | text | isys_cats_mobile_phone_list | isys_cats_mobile_phone_list__imei_number |     |     |
| Beschreibung | text_area | isys_cats_mobile_phone_list | isys_cats_mobile_phone_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro IMEI | texte | isys_cats_mobile_phone_list | isys_cats_mobile_phone_list__imei_number | |
| description | text_area | isys_cats_mobile_phone_list | isys_cats_mobile_phone_list__description | |

### Objektgruppe

### Groupe d'objets

#### Tabelle: isys_cats_group_list

#### Tableau : isys_cats_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_cats_group_list | isys_cats_group_list__isys_connection__id | isys_connection | isys_connection__id |
| Objekttyp | text | isys_cats_group_list | connected_type |     |     |
| Beschreibung | text_area | isys_cats_group_list | isys_cats_group_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_cats_group_list | isys_cats_group_list__isys_connection__id | isys_connection | isys_connection__id |
| type d'objet | text | isys_cats_group_list | connected_type | |
| description | text_area | isys_cats_group_list | isys_cats_group_list__description | |

### Lizenzschlüssel

### Clé de licence

#### Tabelle: isys_cats_lic_list

#### Tableau : isys_cats_lic_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Schlüssel | text | isys_cats_lic_list | isys_cats_lic_list__key |     |     |
| Seriennummer | text | isys_cats_lic_list | isys_cats_lic_list__serial |     |     |
| Lizenz Typ | int | isys_cats_lic_list | isys_cats_lic_list__type |     |     |
| Anzahl | int | isys_cats_lic_list | isys_cats_lic_list__amount |     |     |
| Lizenzen in Benutzung | int | isys_cats_lic_list | isys_cats_lic_list__id |     |     |
| Freie Lizenzen | int | isys_cats_lic_list | isys_cats_lic_list__id |     |     |
| Startdatum | date | isys_cats_lic_list | isys_cats_lic_list__start |     |     |
| Ablaufdatum | date | isys_cats_lic_list | isys_cats_lic_list__expire |     |     |
| Einzelpreis | double | isys_cats_lic_list | isys_cats_lic_list__cost |     |     |
| Gesamtkosten | double | isys_cats_lic_list | isys_cats_lic_list__id |     |     |
| Beschreibung | text_area | isys_cats_lic_list | isys_cats_lic_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| clé | texte | isys_cats_lic_list | isys_cats_lic_list__key | |
| numéro de série | texte | isys_cats_lic_list | isys_cats_lic_list__serial | |
| type de licence | int | isys_cats_lic_list | isys_cats_lic_list__type | |
| nombre | int | isys_cats_lic_list | isys_cats_lic_list__amount | |
| Licences en cours d'utilisation | int | isys_cats_lic_list | isys_cats_lic_list__id | |
| Licences libres | int | isys_cats_lic_list | isys_cats_lic_list__id | |
| date de début | isys_cats_lic_list | isys_cats_lic_list__start | |
| date d'expiration | isys_cats_lic_list | isys_cats_lic_list__expire | |
| prix unitaire | double | isys_cats_lic_list | isys_cats_lic_list__cost | |
| coût total | double | isys_cats_lic_list | isys_cats_lic_list__id | |
| description | text_area | isys_cats_lic_list | isys_cats_lic_list__description | |

### Aktuelle Datei

### Fichier actuel

#### Tabelle: isys_cats_file_list

#### Tableau : isys_cats_file_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_file_list | isys_file_version__title |     |     |
| Dateiname | int | isys_cats_file_list | isys_file_version__isys_file_physical__id |     |     |
| Kategorie | int | isys_cats_file_list | isys_cats_file_list__isys_file_category__id | isys_file_category | isys_file_category__id |
| Revision | text | isys_cats_file_list | isys_file_version__revision |     |     |
| Versions-Beschreibung | text_area | isys_cats_file_list | isys_file_version__description |     |     |
| Beschreibung | text_area | isys_cats_file_list | isys_cats_file_list__description |     |     |
| Version | int | isys_cats_file_list | isys_cats_file_list__isys_file_version__id | isys_file_version | isys_file_version__id |
| MD5 Checksumme | text | isys_cats_file_list | isys_file_physical__md5 |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_file_list | isys_file_version__title | |
| nom de fichier | int | isys_cats_file_list | isys_file_version__isys_file_physical__id | |
| catégorie | int | isys_cats_file_list | isys_cats_file_list__isys_file_category__id | isys_file_category | isys_file_category__id |
| révision | texte | isys_cats_file_list | isys_file_version__revision | |
| description de la version | text_area | isys_cats_file_list | isys_file_version__description | |
| description | text_area | isys_cats_file_list | isys_cats_file_list__description | |
| version | int | isys_cats_file_list | isys_cats_file_list__isys_file_version__id | isys_file_version | isys_file_version__id |
| somme de contrôle MD5 | texte | isys_cats_file_list | isys_file_physical__md5 | |

### Dateiversionen

### versions de fichiers

#### Tabelle: isys_file_version_list

#### Tableau : isys_file_version_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Dateiname | text | isys_file_version_list | isys_file_physical__filename_original |     |     |
| Datei Inhalt | text | isys_file_version_list | isys_file_physical__filename |     |     |
| Bezeichnung | text | isys_file_version_list | isys_file_version__title |     |     |
| Revision | text | isys_file_version_list | isys_file_version__revision |     |     |
| Upload Datum | text | isys_file_version_list | isys_file_physical__date_uploaded |     |     |
| Versions-Beschreibung | text_area | isys_file_version_list | isys_file_version__description |     |     |
| MD5 Checksumme | text | isys_file_version_list | isys_file_physical__md5 |     |     |
| Upload von | text | isys_file_version_list | isys_file_physical__user_id_uploaded |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom de fichier | texte | isys_file_version_list | isys_file_physical__filename_original | |
| contenu du fichier | texte | isys_file_version_list | isys_file_physical__filename | |
| nom | texte | isys_file_version_list | isys_file_version__title | |
| révision | texte | isys_file_version_list | isys_file_version__revision | |
| date de téléchargement | texte | isys_file_version_list | isys_file_physical__date_uploaded | |
| description de la version | text_area | isys_file_version_list | isys_file_version__description | |
| somme de contrôle MD5 | texte | isys_file_version_list | isys_file_physical__md5 | |
| texte | isys_file_version_list | isys_file_physical__user_id_uploaded | |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_cats_file_list

#### Tableau : isys_cats_file_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | int | isys_cats_file_list |     |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets assignés | int | isys_cats_file_list | | |

### Notfallplan Eigenschaften

### Plan d'urgence Caractéristiques

#### Tabelle: isys_cats_emergency_plan_list

#### Tableau : isys_cats_emergency_plan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zeitbedarf | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__calc_time_need |     |     |
| Einheit | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Datum Notfallübung | date_time | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__practice_actual_date |     |     |
| Beschreibung | text_area | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| temps requis | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__calc_time_need | |
| unité | int | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| date_exercice_d'urgence | date_time | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__practice_actual_date | |
| description | text_area | isys_cats_emergency_plan_list | isys_cats_emergency_plan_list__description | |

### zugewiesene Objekte

### objets attribués

#### Tabelle: isys_catg_emergency_plan_list

#### Tableau : isys_catg_emergency_plan_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_catg_emergency_plan_list | isys_catg_emergency_plan_list__isys_obj__id | |

### Netzart

### Type de filet

#### Tabelle: isys_cats_ws_net_type_list

#### Tableau : isys_cats_ws_net_type_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzart | int | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__isys_net_type_title__id | isys_net_type_title | isys_net_type_title__id |
| Beschreibung | text_area | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de réseau | int | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__isys_net_type_title__id | isys_net_type_title | isys_net_type_title__id |
| description | text_area | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__description | |

### Zugeordnete Objekte

### Objets associés

#### Tabelle: isys_cats_ws_net_type_list

#### Tableau : isys_cats_ws_net_type_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | int | isys_cats_ws_net_type_list | isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets attribués | int | isys_cats_ws_net_type_list | isys_obj__id | |

### Leitungsnetz

### réseau de lignes

#### Tabelle: isys_cats_ws_net_type_list

#### Tableau : isys_cats_ws_net_type_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzart | int | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__isys_net_type_title__id | isys_net_type_title | isys_net_type_title__id |
| Beschreibung | text_area | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de réseau | int | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__isys_net_type_title__id | isys_net_type_title | isys_net_type_title__id |
| description | text_area | isys_cats_ws_net_type_list | isys_cats_ws_net_type_list__description | |

### Unterbrechungsfreie Stromversorgung

### Alimentation sans interruption

#### Tabelle: isys_cats_ups_list

#### Tableau : isys_cats_ups_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_cats_ups_list | isys_cats_ups_list__isys_ups_type__id | isys_ups_type | isys_ups_type__id |
| Batterietyp | int | isys_cats_ups_list | isys_cats_ups_list__isys_ups_battery_type__id | isys_ups_battery_type | isys_ups_battery_type__id |
| Anzahl Batterien | int | isys_cats_ups_list | isys_cats_ups_list__battery_amount |     |     |
| Ladedauer | int | isys_cats_ups_list | isys_cats_ups_list__charge_time |     |     |
| Einheit | int | charge_time | isys_cats_ups_list__charge_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Autonomiezeit unter Volllast | int | isys_cats_ups_list | isys_cats_ups_list__autonomy_time |     |     |
| Einheit | int | autonomy_time | isys_cats_ups_list__autonomy_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Beschreibung | text_area | isys_cats_ups_list | isys_cats_ups_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_ups_list | isys_cats_ups_list__isys_ups_type__id | isys_ups_type | isys_ups_type__id |
| type de batterie | int | isys_cats_ups_list | isys_cats_ups_list__isys_ups_battery_type__id | isys_ups_battery_type | isys_ups_battery_type__id |
| nombre de batteries | int | isys_cats_ups_list | isys_cats_ups_list__battery_amount | |
| durée de charge | int | isys_cats_ups_list | isys_cats_ups_list__charge_time | |
| unité | int | charge_time | isys_cats_ups_list__charge_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| temps d'autonomie à pleine charge | int | isys_cats_ups_list | isys_cats_ups_list__autonomy_time | |
| unité | int | autonomy_time | isys_cats_ups_list__autonomy_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| description | text_area | isys_cats_ups_list | isys_cats_ups_list__description | |

### Netzersatzanlage

### Système de remplacement du réseau

#### Tabelle: isys_cats_eps_list

#### Tableau : isys_cats_eps_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art | int | isys_cats_eps_list | isys_cats_eps_list__isys_cats_eps_type__id | isys_cats_eps_type | isys_cats_eps_type__id |
| Anlaufzeit | int | isys_cats_eps_list | isys_cats_eps_list__warmup_time |     |     |
| Einheit | int | isys_cats_eps_list | isys_cats_eps_list__warmup_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Kraftstofftank | int | isys_cats_eps_list | isys_cats_eps_list__fuel_tank |     |     |
| Einheit | int | isys_cats_eps_list | isys_cats_eps_list__isys_volume_unit__id | isys_volume_unit | isys_volume_unit__id |
| Autonomiezeit | int | isys_cats_eps_list | isys_cats_eps_list__autonomy_time |     |     |
| Einheit | int | isys_cats_eps_list | isys_cats_eps_list__autonomy_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| Beschreibung | text_area | isys_cats_eps_list | isys_cats_eps_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_eps_list | isys_cats_eps_list__isys_cats_eps_type__id | isys_cats_eps_type | isys_cats_eps_type__id |
| temps de démarrage | int | isys_cats_eps_list | isys_cats_eps_list__warmup_time | |
| unité | int | isys_cats_eps_list | isys_cats_eps_list__warmup_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| réservoir de carburant | int | isys_cats_eps_list | isys_cats_eps_list__fuel_tank | |
| unité | int | isys_cats_eps_list | isys_cats_eps_list__isys_volume_unit__id | isys_volume_unit | isys_volume_unit__id |
| temps d'autonomie | int | isys_cats_eps_list | isys_cats_eps_list__autonomy_time | |
| unité | int | isys_cats_eps_list | isys_cats_eps_list__autonomy_time__isys_unit_of_time__id | isys_unit_of_time | isys_unit_of_time__id |
| description | text_area | isys_cats_eps_list | isys_cats_eps_list__description | |

### SAN Zoning

### SAN Zoning

#### Tabelle: isys_cats_san_zoning_list

#### Tableau : isys_cats_san_zoning_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_san_zoning_list | isys_cats_san_zoning_list__title |     |     |
| Mitglieder | int | isys_cats_san_zoning_list | isys_cats_san_zoning_list__id |     |     |
| Beschreibung | text_area | isys_cats_san_zoning_list | isys_cats_san_zoning_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_san_zoning_list | isys_cats_san_zoning_list__title | |
| membres | int | isys_cats_san_zoning_list | isys_cats_san_zoning_list__id | |
| description | text_area | isys_cats_san_zoning_list | isys_cats_san_zoning_list__description | |

### Organisation

### Organisation

#### Tabelle: isys_cats_organization_list

#### Tableau : isys_cats_organization_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_organization_list | isys_cats_organization_list__title |     |     |
| Telefon | text | isys_cats_organization_list | isys_cats_organization_list__telephone |     |     |
| Fax | text | isys_cats_organization_list | isys_cats_organization_list__fax |     |     |
| Webseite | text | isys_cats_organization_list | isys_cats_organization_list__website |     |     |
| Zentrale | int | isys_cats_organization_list | isys_cats_organization_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_cats_organization_list | isys_cats_organization_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_organization_list | isys_cats_organization_list__title | |
| téléphone | texte | isys_cats_organization_list | isys_cats_organization_list__telephone | |
| fax | texte | isys_cats_organization_list | isys_cats_organization_list__fax | |
| site web | text | isys_cats_organization_list | isys_cats_organization_list__website | |
| centrale | int | isys_cats_organization_list | isys_cats_organization_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_cats_organization_list | isys_cats_organization_list__description | |

### Stammdaten

### Données de base

#### Tabelle: isys_cats_organization_list

#### Tableau : isys_cats_organization_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_organization_list | isys_cats_organization_list__title |     |     |
| Telefon | text | isys_cats_organization_list | isys_cats_organization_list__telephone |     |     |
| Fax | text | isys_cats_organization_list | isys_cats_organization_list__fax |     |     |
| Webseite | text | isys_cats_organization_list | isys_cats_organization_list__website |     |     |
| Zentrale | int | isys_cats_organization_list | isys_cats_organization_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_cats_organization_list | isys_cats_organization_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_organization_list | isys_cats_organization_list__title | |
| téléphone | texte | isys_cats_organization_list | isys_cats_organization_list__telephone | |
| fax | texte | isys_cats_organization_list | isys_cats_organization_list__fax | |
| site web | text | isys_cats_organization_list | isys_cats_organization_list__website | |
| centrale | int | isys_cats_organization_list | isys_cats_organization_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_cats_organization_list | isys_cats_organization_list__description | |

### Personen

### personnes

#### Tabelle: isys_cats_organization_list

#### Tableau : isys_cats_organization_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | int | isys_cats_organization_list | isys_cats_person_list__isys_obj__id |     |     |
| Kontakt | int | isys_cats_organization_list | isys_cats_person_list__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom | int | isys_cats_organization_list | isys_cats_person_list__isys_obj__id | |
| contact | int | isys_cats_organization_list | isys_cats_person_list__isys_obj__id | |

### Personen

### personnes

#### Tabelle: isys_cats_person_list

#### Tableau : isys_cats_person_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_person_list | isys_cats_person_list__title |     |     |
| Anrede | text | isys_cats_person_list | isys_cats_person_list__salutation |     |     |
| Vorname | text | isys_cats_person_list | isys_cats_person_list__first_name |     |     |
| Nachname | text | isys_cats_person_list | isys_cats_person_list__last_name |     |     |
| Titel (Akademischer Grad) | text | isys_cats_person_list | isys_cats_person_list__academic_degree |     |     |
| Funktion | text | isys_cats_person_list | isys_cats_person_list__function |     |     |
| Dienstbezeichnung | text | isys_cats_person_list | isys_cats_person_list__service_designation |     |     |
| Straße | text | isys_cats_person_list | isys_cats_person_list__street |     |     |
| Ort | text | isys_cats_person_list | isys_cats_person_list__city |     |     |
| PLZ | text | isys_cats_person_list | isys_cats_person_list__zip_code |     |     |
| E-Mail Adresse | text | isys_cats_person_list | isys_catg_mail_addresses_list__title |     |     |
| Telefon Firma | text | isys_cats_person_list | isys_cats_person_list__phone_company |     |     |
| Telefon Privat | text | isys_cats_person_list | isys_cats_person_list__phone_home |     |     |
| Handy | text | isys_cats_person_list | isys_cats_person_list__phone_mobile |     |     |
| Fax | text | isys_cats_person_list | isys_cats_person_list__fax |     |     |
| Pager | text | isys_cats_person_list | isys_cats_person_list__pager |     |     |
| Personalnummer | text | isys_cats_person_list | isys_cats_person_list__personnel_number |     |     |
| Abteilung | text | isys_cats_person_list | isys_cats_person_list__department |     |     |
| Firma | int | isys_cats_person_list | isys_cats_person_list__isys_connection__id | isys_connection | isys_connection__id |
| ID  | text | isys_cats_person_list | isys_cats_person_list__isys_ldap__id |     |     |
| DN  | text | isys_cats_person_list | isys_cats_person_list__ldap_dn |     |     |
| Beschreibung | text_area | isys_cats_person_list | isys_cats_person_list__description |     |     |
| Custom 1 | text | isys_cats_person_list | isys_cats_person_list__custom1 |     |     |
| Custom 2 | text | isys_cats_person_list | isys_cats_person_list__custom2 |     |     |
| Custom 3 | text | isys_cats_person_list | isys_cats_person_list__custom3 |     |     |
| Custom 4 | text | isys_cats_person_list | isys_cats_person_list__custom4 |     |     |
| Custom 5 | text | isys_cats_person_list | isys_cats_person_list__custom5 |     |     |
| Custom 6 | text | isys_cats_person_list | isys_cats_person_list__custom6 |     |     |
| Custom 7 | text | isys_cats_person_list | isys_cats_person_list__custom7 |     |     |
| Custom 8 | text | isys_cats_person_list | isys_cats_person_list__custom8 |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_person_list | isys_cats_person_list__title | |
| titre | texte | isys_cats_person_list | isys_cats_person_list__salutation | |
| prénom | texte | isys_cats_person_list | isys_cats_person_list__first_name | |
| nom de famille | texte | isys_cats_person_list | isys_cats_person_list__last_name | |
| titre (grade académique) | texte | isys_cats_person_list | isys_cats_person_list__academic_degree | |
| fonction | texte | isys_cats_person_list | isys_cats_person_list__function | |
| désignation du service | texte | isys_cats_person_list | isys_cats_person_list__service_designation | |
| rue | texte | isys_cats_person_list | isys_cats_person_list__street | |
| ville | texte | isys_cats_person_list | isys_cats_person_list__city | |
| code postal | texte | isys_cats_person_list | isys_cats_person_list__zip_code | |
| adresse e-mail | texte | isys_cats_person_list | isys_catg_mail_addresses_list__title | |
| téléphone entreprise | texte | isys_cats_person_list | isys_cats_person_list__phone_company | |
| téléphone privé | texte | isys_cats_person_list | isys_cats_person_list__phone_home | |
| téléphone mobile | texte | isys_cats_person_list | isys_cats_person_list__phone_mobile | |
| fax | texte | isys_cats_person_list | isys_cats_person_list__fax | |
| pager | texte | isys_cats_person_list | isys_cats_person_list__pager | |
| numéro de personnel | texte | isys_cats_person_list | isys_cats_person_list__personnel_numéro | |
| département | texte | isys_cats_person_list | isys_cats_person_list__department | |
| société | int | isys_cats_person_list | isys_cats_person_list__isys_connection__id | isys_connection | isys_connection__id |
| ID | texte | isys_cats_person_list | isys_cats_person_list__isys_ldap__id | |
| DN | texte | isys_cats_person_list | isys_cats_person_list__ldap_dn | |
| description | text_area | isys_cats_person_list | isys_cats_person_list__description | |
| Custom 1 | texte | isys_cats_person_list | isys_cats_person_list__custom1 | |
| Custom 2 | texte | isys_cats_person_list | isys_cats_person_list__custom2 | |
| Custom 3 | texte | isys_cats_person_list | isys_cats_person_list__custom3 | |
| Custom 4 | texte | isys_cats_person_list | isys_cats_person_list__custom4 | |
| Custom 5 | texte | isys_cats_person_list | isys_cats_person_list__custom5 | |
| Custom 6 | texte | isys_cats_person_list | isys_cats_person_list__custom6 | |
| Custom 7 | texte | isys_cats_person_list | isys_cats_person_list__custom7 | |
| Custom 8 | texte | isys_cats_person_list | isys_cats_person_list__custom8 | |

### Stammdaten

### Données de base

#### Tabelle: isys_cats_person_list

#### Tableau : isys_cats_person_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_person_list | isys_cats_person_list__title |     |     |
| Anrede | text | isys_cats_person_list | isys_cats_person_list__salutation |     |     |
| Vorname | text | isys_cats_person_list | isys_cats_person_list__first_name |     |     |
| Nachname | text | isys_cats_person_list | isys_cats_person_list__last_name |     |     |
| Titel (Akademischer Grad) | text | isys_cats_person_list | isys_cats_person_list__academic_degree |     |     |
| Funktion | text | isys_cats_person_list | isys_cats_person_list__function |     |     |
| Dienstbezeichnung | text | isys_cats_person_list | isys_cats_person_list__service_designation |     |     |
| Straße | text | isys_cats_person_list | isys_cats_person_list__street |     |     |
| Ort | text | isys_cats_person_list | isys_cats_person_list__city |     |     |
| PLZ | text | isys_cats_person_list | isys_cats_person_list__zip_code |     |     |
| E-Mail Adresse | text | isys_cats_person_list | isys_catg_mail_addresses_list__title |     |     |
| Telefon Firma | text | isys_cats_person_list | isys_cats_person_list__phone_company |     |     |
| Telefon Privat | text | isys_cats_person_list | isys_cats_person_list__phone_home |     |     |
| Handy | text | isys_cats_person_list | isys_cats_person_list__phone_mobile |     |     |
| Fax | text | isys_cats_person_list | isys_cats_person_list__fax |     |     |
| Pager | text | isys_cats_person_list | isys_cats_person_list__pager |     |     |
| Personalnummer | text | isys_cats_person_list | isys_cats_person_list__personnel_number |     |     |
| Abteilung | text | isys_cats_person_list | isys_cats_person_list__department |     |     |
| Firma | int | isys_cats_person_list | isys_cats_person_list__isys_connection__id | isys_connection | isys_connection__id |
| ID  | text | isys_cats_person_list | isys_cats_person_list__isys_ldap__id |     |     |
| DN  | text | isys_cats_person_list | isys_cats_person_list__ldap_dn |     |     |
| Beschreibung | text_area | isys_cats_person_list | isys_cats_person_list__description |     |     |
| Custom 1 | text | isys_cats_person_list | isys_cats_person_list__custom1 |     |     |
| Custom 2 | text | isys_cats_person_list | isys_cats_person_list__custom2 |     |     |
| Custom 3 | text | isys_cats_person_list | isys_cats_person_list__custom3 |     |     |
| Custom 4 | text | isys_cats_person_list | isys_cats_person_list__custom4 |     |     |
| Custom 5 | text | isys_cats_person_list | isys_cats_person_list__custom5 |     |     |
| Custom 6 | text | isys_cats_person_list | isys_cats_person_list__custom6 |     |     |
| Custom 7 | text | isys_cats_person_list | isys_cats_person_list__custom7 |     |     |
| Custom 8 | text | isys_cats_person_list | isys_cats_person_list__custom8 |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_person_list | isys_cats_person_list__title | |
| titre | texte | isys_cats_person_list | isys_cats_person_list__salutation | |
| prénom | texte | isys_cats_person_list | isys_cats_person_list__first_name | |
| nom de famille | texte | isys_cats_person_list | isys_cats_person_list__last_name | |
| titre (grade académique) | texte | isys_cats_person_list | isys_cats_person_list__academic_degree | |
| fonction | texte | isys_cats_person_list | isys_cats_person_list__function | |
| désignation du service | texte | isys_cats_person_list | isys_cats_person_list__service_designation | |
| rue | texte | isys_cats_person_list | isys_cats_person_list__street | |
| ville | texte | isys_cats_person_list | isys_cats_person_list__city | |
| code postal | texte | isys_cats_person_list | isys_cats_person_list__zip_code | |
| adresse e-mail | texte | isys_cats_person_list | isys_catg_mail_addresses_list__title | |
| téléphone entreprise | texte | isys_cats_person_list | isys_cats_person_list__phone_company | |
| téléphone privé | texte | isys_cats_person_list | isys_cats_person_list__phone_home | |
| téléphone mobile | texte | isys_cats_person_list | isys_cats_person_list__phone_mobile | |
| fax | texte | isys_cats_person_list | isys_cats_person_list__fax | |
| pager | texte | isys_cats_person_list | isys_cats_person_list__pager | |
| numéro de personnel | texte | isys_cats_person_list | isys_cats_person_list__personnel_numéro | |
| département | texte | isys_cats_person_list | isys_cats_person_list__department | |
| société | int | isys_cats_person_list | isys_cats_person_list__isys_connection__id | isys_connection | isys_connection__id |
| ID | texte | isys_cats_person_list | isys_cats_person_list__isys_ldap__id | |
| DN | texte | isys_cats_person_list | isys_cats_person_list__ldap_dn | |
| description | text_area | isys_cats_person_list | isys_cats_person_list__description | |
| Custom 1 | texte | isys_cats_person_list | isys_cats_person_list__custom1 | |
| Custom 2 | texte | isys_cats_person_list | isys_cats_person_list__custom2 | |
| Custom 3 | texte | isys_cats_person_list | isys_cats_person_list__custom3 | |
| Custom 4 | texte | isys_cats_person_list | isys_cats_person_list__custom4 | |
| Custom 5 | texte | isys_cats_person_list | isys_cats_person_list__custom5 | |
| Custom 6 | texte | isys_cats_person_list | isys_cats_person_list__custom6 | |
| Custom 7 | texte | isys_cats_person_list | isys_cats_person_list__custom7 | |
| Custom 8 | texte | isys_cats_person_list | isys_cats_person_list__custom8 | |

### Login

### Connexion

#### Tabelle: isys_cats_person_list

#### Tableau : isys_cats_person_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Username | text | isys_cats_person_list | isys_cats_person_list__title |     |     |
| Passwort | text | isys_cats_person_list | isys_cats_person_list__user_pass |     |     |
| Passwort | text | isys_cats_person_list |     |     |     |
| Beschreibung | text_area | isys_cats_person_list | isys_cats_person_list__description |     |     |
| Custom 1 | text | isys_cats_person_list | isys_cats_person_list__custom1 |     |     |
| Custom 2 | text | isys_cats_person_list | isys_cats_person_list__custom2 |     |     |
| Custom 3 | text | isys_cats_person_list | isys_cats_person_list__custom3 |     |     |
| Custom 4 | text | isys_cats_person_list | isys_cats_person_list__custom4 |     |     |
| Custom 5 | text | isys_cats_person_list | isys_cats_person_list__custom5 |     |     |
| Custom 6 | text | isys_cats_person_list | isys_cats_person_list__custom6 |     |     |
| Custom 7 | text | isys_cats_person_list | isys_cats_person_list__custom7 |     |     |
| Custom 8 | text | isys_cats_person_list | isys_cats_person_list__custom8 |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom d'utilisateur | texte | isys_cats_person_list | isys_cats_person_list__title | |
| mot de passe | texte | isys_cats_person_list | isys_cats_person_list__user_pass | |
| mot de passe | texte | isys_cats_person_list | | |
| description | text_area | isys_cats_person_list | isys_cats_person_list__description | |
| Custom 1 | texte | isys_cats_person_list | isys_cats_person_list__custom1 | |
| Custom 2 | texte | isys_cats_person_list | isys_cats_person_list__custom2 | |
| Custom 3 | texte | isys_cats_person_list | isys_cats_person_list__custom3 | |
| Custom 4 | texte | isys_cats_person_list | isys_cats_person_list__custom4 | |
| Custom 5 | texte | isys_cats_person_list | isys_cats_person_list__custom5 | |
| Custom 6 | texte | isys_cats_person_list | isys_cats_person_list__custom6 | |
| Custom 7 | texte | isys_cats_person_list | isys_cats_person_list__custom7 | |
| Custom 8 | texte | isys_cats_person_list | isys_cats_person_list__custom8 | |

### Personengruppenmitgliedschaft

### Adhésion de groupe de personnes

#### Tabelle: isys_person_2_group_list

#### Tableau : isys_person_2_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Personengruppenmitgliedschaft | int | isys_person_2_group_list | isys_cats_person_group_list__isys_obj__id |     |     |
| Kontakt | int | isys_person_2_group_list | isys_person_2_group__isys_obj__id__group |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| appartenance à un groupe de personnes | int | isys_person_2_group_list | isys_cats_person_group_list__isys_obj__id | |
| contact | int | isys_person_2_group_list | isys_person_2_group__isys_obj__id__group | |

### Personengruppen

### Groupes de personnes

#### Tabelle: isys_cats_person_group_list

#### Tableau : isys_cats_person_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Name | text | isys_cats_person_group_list | isys_cats_person_group_list__title |     |     |
| Email | text | isys_cats_person_group_list | isys_catg_mail_addresses_list__title |     |     |
| Telefon | text | isys_cats_person_group_list | isys_cats_person_group_list__phone |     |     |
| LDAP-Gruppe (Mapping) | text | isys_cats_person_group_list | isys_cats_person_group_list__ldap_group |     |     |
| Beschreibung | text_area | isys_cats_person_group_list | isys_cats_person_group_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom | texte | isys_cats_person_group_list | isys_cats_person_group_list__title | |
| email | texte | isys_cats_person_group_list | isys_catg_mail_addresses_list__title | |
| téléphone | texte | isys_cats_person_group_list | isys_cats_person_group_list__phone | |
| groupe LDAP (mapping) | texte | isys_cats_person_group_list | isys_cats_person_group_list__ldap_group | |
| description | text_area | isys_cats_person_group_list | isys_cats_person_group_list__description | |

### Stammdaten

### Données de base

#### Tabelle: isys_cats_person_group_list

#### Tableau : isys_cats_person_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Name | text | isys_cats_person_group_list | isys_cats_person_group_list__title |     |     |
| Email | text | isys_cats_person_group_list | isys_catg_mail_addresses_list__title |     |     |
| Telefon | text | isys_cats_person_group_list | isys_cats_person_group_list__phone |     |     |
| LDAP-Gruppe (Mapping) | text | isys_cats_person_group_list | isys_cats_person_group_list__ldap_group |     |     |
| Beschreibung | text_area | isys_cats_person_group_list | isys_cats_person_group_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| nom | texte | isys_cats_person_group_list | isys_cats_person_group_list__title | |
| email | texte | isys_cats_person_group_list | isys_catg_mail_addresses_list__title | |
| téléphone | texte | isys_cats_person_group_list | isys_cats_person_group_list__phone | |
| groupe LDAP (mapping) | texte | isys_cats_person_group_list | isys_cats_person_group_list__ldap_group | |
| description | text_area | isys_cats_person_group_list | isys_cats_person_group_list__description | |

### Mitglieder

### membres

#### Tabelle: isys_person_2_group_list

#### Tableau : isys_person_2_group_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorname | text | isys_person_2_group_list | isys_cats_person_list__first_name |     |     |
| Nachname | text | isys_person_2_group_list | isys_cats_person_list__last_name |     |     |
| Abteilung | text | isys_person_2_group_list | isys_cats_person_list__department |     |     |
| Telefon Firma | text | isys_person_2_group_list | isys_cats_person_list__phone_company |     |     |
| Email | text | isys_person_2_group_list | isys_cats_person_list__mail_address |     |     |
| Firma | int | isys_person_2_group_list | isys_cats_person_list__isys_connection__id |     |     |
| Bezeichnung | text | isys_person_2_group_list | isys_cats_person_list__title |     |     |
| Mitglieder | int | isys_person_2_group_list | isys_cats_person_list__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| prénom | texte | isys_person_2_group_list | isys_cats_person_list__first_name | |
| nom de famille | texte | isys_person_2_group_list | isys_cats_person_list__last_name | |
| département | texte | isys_person_2_group_list | isys_cats_person_list__department | |
| téléphone entreprise | texte | isys_person_2_group_list | isys_cats_person_list__phone_company | |
| email | texte | isys_person_2_group_list | isys_cats_person_list__mail_address | |
| société | int | isys_person_2_group_list | isys_cats_person_list__isys_connection__id | |
| nom | texte | isys_person_2_group_list | isys_cats_person_list__title | |
| membres | int | isys_person_2_group_list | isys_cats_person_list__isys_obj__id | |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_catg_contact_list

#### Tableau : isys_catg_contact_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene Objekte | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id |     |     |
| Rolle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets attribués | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id | |
| rôle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_catg_contact_list

#### Tableau : isys_catg_contact_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id |     |     |
| Objekttyp | int | isys_catg_contact_list | isys_obj__isys_obj_type__id |     |     |
| Rolle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| Beschreibung | text_area | isys_catg_contact_list | isys_catg_contact_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id | |
| type d'objet | int | isys_catg_contact_list | isys_obj__isys_obj_type__id | |
| rôle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| description | text_area | isys_catg_contact_list | isys_catg_contact_list__description | |

### Zugewiesene Objekte

### Objets attribués

#### Tabelle: isys_catg_contact_list

#### Tableau : isys_catg_contact_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id |     |     |
| Objekttyp | int | isys_catg_contact_list | isys_obj__isys_obj_type__id |     |     |
| Rolle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| Beschreibung | text_area | isys_catg_contact_list | isys_cats_person_contact_assign_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet | int | isys_catg_contact_list | isys_catg_contact_list__isys_obj__id | |
| type d'objet | int | isys_catg_contact_list | isys_obj__isys_obj_type__id | |
| rôle | int | isys_catg_contact_list | isys_catg_contact_list__isys_contact_tag__id | isys_contact_tag | isys_contact_tag__id |
| description | text_area | isys_catg_contact_list | isys_cats_person_contact_assign_list__description | |

### Zugeordnete Cluster

### Clusters affectés

#### Tabelle: isys_catg_cluster_service_list

#### Tableau : isys_catg_cluster_service_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete Cluster | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id |     |     |
| Typ | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_cluster_type__id | isys_cluster_type | isys_cluster_type__id |
| Läuft auf | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |     |     |
| Standard Server | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_connection__id |     |     |
| Hostadressen | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_ip_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| Laufwerke | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__property |     |     |
| Freigaben | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id |     |     |
| Datenbankschema | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| LC__CMDB__CATG__CLUSTER__SERVICE_STATUS | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__service_status |     |     |
| Beschreibung | text_area | isys_catg_cluster_service_list | isys_catg_cluster_service_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| clusters associés | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id | |
| type | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_cluster_type__id | isys_cluster_type | isys_cluster_type__id |
| int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | |
| serveur standard | int | isys_catg_cluster_members_list | isys_catg_cluster_members_list__isys_connection__id | |
| adresses d'hôtes | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__id | isys_catg_ip_list_2_isys_catg_cluster_service_list | isys_catg_cluster_service_list__id |
| lecteurs | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__property | |
| partages | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_obj__id | |
| schéma de base de données | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| LC__CMDB__CATG__CLUSTER__SERVICE_STATUS | int | isys_catg_cluster_service_list | isys_catg_cluster_service_list__service_status | |
| description | text_area | isys_catg_cluster_service_list | isys_catg_cluster_service_list__description | |

### Beziehungsdetails

### Détails de la relation

#### Tabelle: isys_catg_relation_list

#### Tableau : isys_catg_relation_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object1 | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__master |     |     |
| Object2 | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__slave |     |     |
| Service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice |     |     |
| Beziehungsart | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| Gewichtung | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| Beschreibung | text_area | isys_catg_relation_list | isys_catg_relation_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Object1 | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__master | |
| Object2 | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__slave | |
| service | int | isys_catg_relation_list | isys_catg_relation_list__isys_obj__id__itservice | |
| type de relation | int | isys_catg_relation_list | isys_catg_relation_list__isys_relation_type__id | isys_relation_type | isys_relation_type__id |
| pondération | int | isys_catg_relation_list | isys_catg_relation_list__isys_weighting__id | isys_weighting | isys_weighting__id |
| description | text_area | isys_catg_relation_list | isys_catg_relation_list__description | |

### Datenbankschema

### Schéma de la base de données

#### Tabelle: isys_cats_database_schema_list

#### Tableau : isys_cats_database_schema_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Läuft auf | int | isys_cats_database_schema_list | isys_cats_database_schema_list__isys_connection__id |     |     |
| Datenbankinstanz | int | isys_cats_database_schema_list | isys_cats_database_schema_list__isys_cats_db_instance_list__id | isys_cats_database_instance_list | isys_cats_database_instance_list__id |
| Bezeichnung | text | isys_cats_database_schema_list | isys_cats_database_schema_list__title |     |     |
| Storage-Engine | text | isys_cats_database_schema_list | isys_cats_database_schema_list__storage_engine |     |     |
| Beschreibung | text_area | isys_cats_database_schema_list | isys_cats_database_schema_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| int | isys_cats_database_schema_list | isys_cats_database_schema_list__isys_connection__id | | |
| instance de base de données | int | isys_cats_database_schema_list | isys_cats_database_schema_list__isys_cats_db_instance_list__id | isys_cats_database_instance_list | isys_cats_database_instance_list__id |
| libellé | texte | isys_cats_database_schema_list | isys_cats_database_schema_list__title | |
| moteur de stockage | text | isys_cats_database_schema_list | isys_cats_database_schema_list__storage_engine | |
| description | text_area | isys_cats_database_schema_list | isys_cats_database_schema_list__description | |

### Datenbanklinks

### Liens de la base de données

#### Tabelle: isys_cats_database_links_list

#### Tableau : isys_cats_database_links_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_database_links_list | isys_cats_database_links_list__title |     |     |
| Verknüpftes Datenbankschema | int | isys_cats_database_links_list | isys_cats_database_links_list__isys_connection__id | isys_connection | isys_connection__id |
| Ziel-Benutzer | text | isys_cats_database_links_list | isys_cats_database_links_list__target_user |     |     |
| Besitzer | text | isys_cats_database_links_list | isys_cats_database_links_list__owner |     |     |
| Öffentlich | int | isys_cats_database_links_list | isys_cats_database_links_list__public |     |     |
| Beschreibung | text_area | isys_cats_database_links_list | isys_cats_database_links_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| libellé | texte | isys_cats_database_links_list | isys_cats_database_links_list__title | |
| schéma de base de données lié | int | isys_cats_database_links_list | isys_cats_database_links_list__isys_connection__id | isys_connection | isys_connection__id |
| utilisateur cible | texte | isys_cats_database_links_list | isys_cats_database_links_list__target_user | |
| propriétaire | texte | isys_cats_database_links_list | isys_cats_database_links_list__owner | |
| public | int | isys_cats_database_links_list | isys_cats_database_links_list__public | |
| description | text_area | isys_cats_database_links_list | isys_cats_database_links_list__description | |

### DBMS

### SGBD

#### Tabelle: isys_cats_dbms_list

#### Tableau : isys_cats_dbms_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys_cats_dbms_list | isys_cats_dbms_list__isys_dbms__id | isys_dbms | isys_dbms__id |
| Beschreibung | text_area | isys_cats_dbms_list | isys_cats_dbms_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys_cats_dbms_list | isys_cats_dbms_list__isys_dbms__id | isys_dbms | isys_dbms__id |
| description | text_area | isys_cats_dbms_list | isys_cats_dbms_list__description | |

### Instanz / Oracle Datenbank

### Instance / Base de données Oracle

#### Tabelle: isys_cats_database_instance_list

#### Tableau : isys_cats_database_instance_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys_cats_database_instance_list | isys_cats_database_instance_list__isys_connection__id | isys_connection | isys_connection__id |
| Bezeichnung | text | isys_cats_database_instance_list | isys_cats_database_instance_list__title |     |     |
| Listener | text | isys_cats_database_instance_list | isys_cats_database_instance_list__listener |     |     |
| Datenbankschema | int | isys_cats_database_instance_list | isys_cats_database_instance_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_cats_database_instance_list | isys_cats_database_instance_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys_cats_database_instance_list | isys_cats_database_instance_list__isys_connection__id | isys_connection | isys_connection__id |
| description | texte | isys_cats_database_instance_list | isys_cats_database_instance_list__title | |
| listener | text | isys_cats_database_instance_list | isys_cats_database_instance_list__listener | |
| schéma de base de données | int | isys_cats_database_instance_list | isys_cats_database_instance_list__isys_obj__id | |
| description | text_area | isys_cats_database_instance_list | isys_cats_database_instance_list__description | |

### PDU

### PDU

#### Tabelle: isys_cats_pdu_list

#### Tableau : isys_cats_pdu_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| PDU | text | isys_cats_pdu_list | isys_cats_pdu_list__pdu_id |     |     |
| Beschreibung | text_area | isys_cats_pdu_list | isys_cats_pdu_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| PDU | texte | isys_cats_pdu_list | isys_cats_pdu_list__pdu_id | |
| description | text_area | isys_cats_pdu_list | isys_cats_pdu_list__description | |

### Branch

### Branche

#### Tabelle: isys_cats_pdu_branch_list

#### Tableau : isys_cats_pdu_branch_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| PDU | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__pdu_id |     |     |
| Branch-ID | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__branch_id |     |     |
| Aufnahmefähig | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__receptables |     |     |
| Beschreibung | text_area | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| PDU | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__pdu_id | |
| ID de la branche | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__branch_id | |
| réceptif | int | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__receptables | |
| description | text_area | isys_cats_pdu_branch_list | isys_cats_pdu_branch_list__description | |

### Gleichgerichtete Beziehungen

### Relations alignées

#### Tabelle: isys_cats_relpool_list

#### Tableau : isys_cats_relpool_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_relpool_list | isys_cats_relpool_list__title |     |     |
| Mindestmenge an aktiven Komponenten | text | isys_cats_relpool_list | isys_cats_relpool_list__threshold |     |     |
| Gleichgerichtete Beziehungen | text | isys_cats_relpool_list | isys_cats_relpool_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_cats_relpool_list | isys_cats_relpool_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| désignation | texte | isys_cats_relpool_list | isys_cats_relpool_list__title | |
| quantité minimale de composants actifs | text | isys_cats_relpool_list | isys_cats_relpool_list__threshold | |
| relations alignées | text | isys_cats_relpool_list | isys_cats_relpool_list__isys_obj__id | |
| description | text_area | isys_cats_relpool_list | isys_cats_relpool_list__description | |

### Datenbankobjekte

### Objets de la base de données

#### Tabelle: isys_cats_database_objects_list

#### Tableau : isys_cats_database_objects_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_database_objects_list | isys_cats_database_objects_list__title |     |     |
| Typ | int | isys_cats_database_objects_list | isys_cats_database_objects_list__isys_database_objects__id | isys_database_objects | isys_database_objects__id |
| Beschreibung | text_area | isys_cats_database_objects_list | isys_cats_database_objects_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| description | texte | isys_cats_database_objects_list | isys_cats_database_objects_list__title | |
| type | int | isys_cats_database_objects_list | isys_cats_database_objects_list__isys_database_objects__id | isys_database_objects | isys_database_objects__id |
| description | text_area | isys_cats_database_objects_list | isys_cats_database_objects_list__description | |

### Datenbankzugriff

### Accès à la base de données

#### Tabelle: isys_cats_database_access_list

#### Tableau : isys_cats_database_access_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete Objekte | int | isys_cats_database_access_list | isys_cats_database_access_list__isys_connection__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets associés | int | isys_cats_database_access_list | isys_cats_database_access_list__isys_connection__id | |

### Datenbank Gateway

### Passerelle de base de données

#### Tabelle: isys_cats_database_gateway_list

#### Tableau : isys_cats_database_gateway_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gateway Typ | text | isys_cats_database_gateway_list | isys_cats_database_gateway_list__type |     |     |
| Host | text | isys_cats_database_gateway_list | isys_cats_database_gateway_list__host |     |     |
| Port | text | isys_cats_database_gateway_list | isys_cats_database_gateway_list__port |     |     |
| User | text | isys_cats_database_gateway_list | isys_cats_database_gateway_list__user |     |     |
| verwendetes Datenbankschema | int | isys_cats_database_gateway_list | isys_cats_database_gateway_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_cats_database_gateway_list | isys_cats_database_gateway_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de passerelle | texte | isys_cats_database_gateway_list | isys_cats_database_gateway_list__type | |
| hôte | texte | isys_cats_database_gateway_list | isys_cats_database_gateway_list__host | |
| port | texte | isys_cats_database_gateway_list | isys_cats_database_gateway_list__port | |
| utilisateur | texte | isys_cats_database_gateway_list | isys_cats_database_gateway_list__user | |
| schéma de base de données utilisé | int | isys_cats_database_gateway_list | isys_cats_database_gateway_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_cats_database_gateway_list | isys_cats_database_gateway_list__description | |

### Replikation

### Réplication

#### Tabelle: isys_cats_replication_list

#### Tableau : isys_cats_replication_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Replikationsmechanismus | int | isys_cats_replication_list | isys_cats_replication_list__isys_replication_mechanism__id | isys_replication_mechanism | isys_replication_mechanism__id |
| Beschreibung | text_area | isys_cats_replication_list | isys_cats_replication_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| mécanisme de réplication | int | isys_cats_replication_list | isys_cats_replication_list__isys_replication_mechanism__id | isys_replication_mechanism | isys_replication_mechanism__id |
| description | text_area | isys_cats_replication_list | isys_cats_replication_list__description | |

### Replikationspartner

### Partenaire de réplication

#### Tabelle: isys_cats_replication_partner_list

#### Tableau : isys_cats_replication_partner_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Replikationstyp | int | isys_cats_replication_partner_list | isys_cats_replication_partner_list__isys_replication_type__id | isys_replication_type | isys_replication_type__id |
| Replikationspartner | int | isys_cats_replication_partner_list | isys_cats_replication_partner_list__isys_connection__id | isys_connection | isys_connection__id |
| Beschreibung | text_area | isys_cats_replication_partner_list | isys_cats_replication_partner_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de réplication | int | isys_cats_replication_partner_list | isys_cats_replication_partner_list__isys_replication_type__id | isys_replication_type | isys_replication_type__id |
| partenaire de réplication | int | isys_cats_replication_partner_list | isys_cats_replication_partner_list__isys_connection__id | isys_connection | isys_connection__id |
| description | text_area | isys_cats_replication_partner_list | isys_cats_replication_partner_list__description | |

### Installation

### Installation

#### Tabelle: isys_catg_application_list

#### Tableau : isys_catg_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id |     |     |
| Typ | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| Priorität | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| Zugewiesene Lizenz | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Zugewiesener Lizenzschlüssel | text | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Datenbankschema | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| Service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| Variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services vererben | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services |     |     |
| Beschreibung | text_area | isys_catg_application_list | isys_catg_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Installé sur | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id | |
| type | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| priorité | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| clé de licence attribuée | texte | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| schéma de base de données | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services hériter | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services | |
| description | text_area | isys_catg_application_list | isys_catg_application_list__description | |

### Middleware

### Middleware

#### Tabelle: isys_cats_application_list

#### Tableau : isys_cats_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys_cats_application_list | isys_cats_application_list__specification |     |     |
| Hersteller | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| Installationsart | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| Registrierungs-Key | text | isys_cats_application_list | isys_cats_application_list__registration_key |     |     |
| Installationspfad | text | isys_cats_application_list | isys_cats_application_list__install_path |     |     |
| Anzahl Installationen | int | isys_cats_application_list |     |     |     |
| Beschreibung | text_area | isys_cats_application_list | isys_cats_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| spécification | texte | isys_cats_application_list | isys_cats_application_list__specification | |
| fabricant | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| type d'installation | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| clé d'enregistrement | texte | isys_cats_application_list | isys_cats_application_list__registration_key | |
| chemin d'installation | texte | isys_cats_application_list | isys_cats_application_list__install_path | |
| nombre d'installations | int | isys_cats_application_list | | |
| description | text_area | isys_cats_application_list | isys_cats_application_list__description | |

### Kryptokarte

### carte cryptographique

#### Tabelle: isys_cats_krypto_card_list

#### Tableau : isys_cats_krypto_card_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zertifikatsnummer | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_number |     |     |
| Certgate Karten-Nummer | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certgate_card_number |     |     |
| Zertifikatsname | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_title |     |     |
| Zertifikatsperrkennwort | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_password |     |     |
| Zertifikatsablauf | date | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_procedure |     |     |
| Ausgabedatum | date | isys_cats_krypto_card_list | isys_cats_krypto_card_list__date_of_issue |     |     |
| IMEI-Nummer | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__imei_number |     |     |
| verknüpftes Mobiltelefon | int | isys_cats_krypto_card_list | isys_catg_assigned_cards_list__isys_obj__id |     |     |
| Beschreibung | text_area | isys_cats_krypto_card_list | isys_cats_krypto_card_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| numéro de certificat | texte | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_number | |
| numéro de carte Certgate | texte | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certgate_card_number | |
| nom du certificat | texte | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_title | |
| mot de passe de la révocation du certificat | texte | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_password | |
| expiration du certificat | date | isys_cats_krypto_card_list | isys_cats_krypto_card_list__certificate_procedure | |
| date d'émission | date | isys_cats_krypto_card_list | isys_cats_krypto_card_list__date_of_issue | |
| numéro IMEI | text | isys_cats_krypto_card_list | isys_cats_krypto_card_list__imei_number | |
| téléphone mobile associé | int | isys_cats_krypto_card_list | isys_catg_assigned_cards_list__isys_obj__id | |
| description | text_area | isys_cats_krypto_card_list | isys_cats_krypto_card_list__description | |

### IP-Liste

### Liste d'IP

#### Tabelle: isys_cats_net_ip_addresses_list

#### Tableau : isys_cats_net_ip_addresses_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| Hostadresse | text | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__title |     |     |
| Objekt | int | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id |     |     |
| Adressvergabe IPv4 | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_ip_assignment__id | isys_ip_assignment | isys_ip_assignment__id |
| Adressvergabe IPv6 | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_ipv6_assignment__id | isys_ipv6_assignment | isys_ipv6_assignment__id |
| Objekt | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_obj__id |     |     |
| IP-Liste öffnen | text | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_link__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_net_type__id | isys_net_type | isys_net_type__id |
| adresse_hôte | texte | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__title | |
| objet | int | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_list__id | |
| attribution d'adresses IPv4 | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_ip_assignment__id | isys_ip_assignment | isys_ip_assignment__id |
| attribution d'adresse IPv6 | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_ipv6_assignment__id | isys_ipv6_assignment | isys_ipv6_assignment__id |
| objet | int | isys_cats_net_ip_addresses_list | isys_catg_ip_list__isys_obj__id | |
| ouvrir liste IP | texte | isys_cats_net_ip_addresses_list | isys_cats_net_ip_addresses_link__isys_obj__id | |

### DHCP

### DHCP

#### Tabelle: isys_cats_net_dhcp_list

#### Tableau : isys_cats_net_dhcp_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ v4 | int | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__isys_net_dhcp_type__id | isys_net_dhcp_type | isys_net_dhcp_type__id |
| Typ v6 | int | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__isys_net_dhcpv6_type__id | isys_net_dhcpv6_type | isys_net_dhcpv6_type__id |
| DHCP von | text | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__range_from |     |     |
| DHCP bis | text | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__range_to |     |     |
| Beschreibung | text_area | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type v4 | int | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__isys_net_dhcp_type__id | isys_net_dhcp_type | isys_net_dhcp_type__id |
| type v6 | int | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__isys_net_dhcpv6_type__id | isys_net_dhcpv6_type | isys_net_dhcpv6_type__id |
| DHCP de | texte | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__range_from | |
| DHCP à | texte | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__range_to | |
| description | text_area | isys_cats_net_dhcp_list | isys_cats_net_dhcp_list__description | |

### Layer-2-Netz

### Réseau de couche 2

#### Tabelle: isys_cats_layer2_net_list

#### Tableau : isys_cats_layer2_net_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| ID (VLAN) | text | isys_cats_layer2_net_list | isys_cats_layer2_net_list__ident |     |     |
| Standard VLAN | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__standard |     |     |
| Typ | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_layer2_net_type__id | isys_layer2_net_type | isys_layer2_net_type__id |
| Unterart | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_layer2_net_subtype__id | isys_layer2_net_subtype | isys_layer2_net_subtype__id |
| IP-Helper-Adressen | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__id |     |     |
| Layer-3-Netz Zuordnung | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__id | isys_cats_layer2_net_2_layer3 | isys_obj__id |
| VRF | text | isys_cats_layer2_net_list | isys_cats_layer2_net_list__vrf |     |     |
| VRF Kapazität | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__vrf_capacity |     |     |
| VRF Kapazität (Einheit) | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_wan_capacity_unit |     |     |
| Beschreibung | text_area | isys_cats_layer2_net_list | isys_cats_layer2_net_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| ID (VLAN) | texte | isys_cats_layer2_net_list | isys_cats_layer2_net_list__ident | |
| VLAN par défaut | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__standard | |
| type | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_layer2_net_type__id | isys_layer2_net_type | isys_layer2_net_type__id |
| sous-type | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_layer2_net_subtype__id | isys_layer2_net_subtype | isys_layer2_net_subtype__id |
| adresses IP helper | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__id | |
| affectation réseau couche 3 | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__id | isys_cats_layer2_net_2_layer3 | isys_obj__id |
| VRF | texte | isys_cats_layer2_net_list | isys_cats_layer2_net_list__vrf | |
| capacité VRF | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__vrf_capacity | |
| capacité VRF (unité) | int | isys_cats_layer2_net_list | isys_cats_layer2_net_list__isys_wan_capacity_unit | |
| description | text_area | isys_cats_layer2_net_list | isys_cats_layer2_net_list__description | |

### Zugewiesene Ports

### Ports attribués

#### Tabelle: isys_cats_layer2_net_assigned_ports_list

#### Tableau : isys_cats_layer2_net_assigned_ports_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt-Titel | int | isys_cats_layer2_net_assigned_ports_list | isys_cats_layer2_net_assigned_ports_list__isys_obj__id |     |     |
| Zugewiesene Ports | int | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id |     |     |
| MAC-Adresse | int | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Titre de l'objet | int | isys_cats_layer2_net_assigned_ports_list | isys_cats_layer2_net_assigned_ports_list__isys_obj__id | |
| ports alloués | int | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id | |
| adresse MAC | int | isys_cats_layer2_net_assigned_ports_list | isys_catg_port_list__id | |

### Vertrag

### contrat

#### Tabelle: isys_cats_contract_list

#### Tableau : isys_cats_contract_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertragsart | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_type__id | isys_contract_type | isys_contract_type__id |
| Vertragsnummer | text | isys_cats_contract_list | isys_cats_contract_list__contract_no |     |     |
| Kundennummer | text | isys_cats_contract_list | isys_cats_contract_list__customer_no |     |     |
| Interne Nummer | text | isys_cats_contract_list | isys_cats_contract_list__internal_no |     |     |
| Kosten | double | isys_cats_contract_list | isys_cats_contract_list__costs |     |     |
| Kostenberechnung | text | isys_cats_contract_list | isys_cats_contract_list__cost_calculation |     |     |
| Produkt | text | isys_cats_contract_list | isys_cats_contract_list__product |     |     |
| Reaktionszeiten | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| Vertragsstatus | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_status__id | isys_contract_status | isys_contract_status__id |
| Vertragsbeginn | date | isys_cats_contract_list | isys_cats_contract_list__start_date |     |     |
| Vertragsende | date | isys_cats_contract_list | isys_cats_contract_list__end_date |     |     |
| Laufzeit | int | isys_cats_contract_list | isys_cats_contract_list__runtime |     |     |
| Laufzeit Einheit | int | isys_cats_contract_list | isys_cats_contract_list__runtime_unit | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Nächstmögliches Vertragsende | text | isys_cats_contract_list | isys_cats_contract_list__id |     |     |
| Vertragsende durch | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_end_type__id | isys_contract_end_type | isys_contract_end_type__id |
| Nächstmögliches Kündigungsdatum | text | isys_cats_contract_list | isys_cats_contract_list__id |     |     |
| Kündigungsdatum | date | isys_cats_contract_list | isys_cats_contract_list__notice_date |     |     |
| Kündigungsfrist | int | isys_cats_contract_list | isys_cats_contract_list__notice_period |     |     |
| Kündigungsfrist Einheit | int | isys_cats_contract_list | isys_cats_contract_list__notice_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Kündigungstyp | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_notice_period_type__id | isys_contract_notice_period_type | isys_contract_notice_period_type__id |
| Wartungs-/Garantiefrist | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period |     |     |
| Frist Einheit | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Zahlart | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_payment_period__id | isys_contract_payment_period | isys_contract_payment_period__id |
| Beschreibung | text_area | isys_cats_contract_list | isys_cats_contract_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de contrat | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_type__id | isys_contract_type | isys_contract_type__id |
| numéro de contrat | texte | isys_cats_contract_list | isys_cats_contract_list__contract_no | |
| numéro de client | texte | isys_cats_contract_list | isys_cats_contract_list__customer_no | |
| numéro interne | texte | isys_cats_contract_list | isys_cats_contract_list__internal_no | |
| coûts | double | isys_cats_contract_list | isys_cats_contract_list__costs | |
| calcul des coûts | text | isys_cats_contract_list | isys_cats_contract_list__cost_calculation | |
| produit | texte | isys_cats_contract_list | isys_cats_contract_list__product | |
| temps de réaction | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| statut du contrat | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_status__id | isys_contract_status | isys_contract_status__id |
| début du contrat | date | isys_cats_contract_list | isys_cats_contract_list__start_date | |
| fin de contrat | date | isys_cats_contract_list | isys_cats_contract_list__end_date | |
| durée | int | isys_cats_contract_list | isys_cats_contract_list__runtime | |
| durée unité | int | isys_cats_contract_list | isys_cats_contract_list__runtime_unit | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| prochaine fin de contrat possible | texte | isys_cats_contract_list | isys_cats_contract_list__id | |
| fin de contrat par | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_end_type__id | isys_contract_end_type | isys_contract_end_type__id |
| date de résiliation la plus proche | texte | isys_cats_contract_list | isys_cats_contract_list__id | |
| date de préavis | date | isys_cats_contract_list | isys_cats_contract_list__notice_date | |
| délai de préavis | int | isys_cats_contract_list | isys_cats_contract_list__notice_period | |
| unité de préavis | int | isys_cats_contract_list | isys_cats_contract_list__notice_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| type de résiliation | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_notice_period_type__id | isys_contract_notice_period_type | isys_contract_notice_period_type__id |
| délai de maintenance/garantie | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period | |
| délai unité | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| type de paiement | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_payment_period__id | isys_contract_payment_period | isys_contract_payment_period__id |
| description | text_area | isys_cats_contract_list | isys_cats_contract_list__description | |

### Vertragsinformationen

### Informations contractuelles

#### Tabelle: isys_cats_contract_list

#### Tableau : isys_cats_contract_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertragsart | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_type__id | isys_contract_type | isys_contract_type__id |
| Vertragsnummer | text | isys_cats_contract_list | isys_cats_contract_list__contract_no |     |     |
| Kundennummer | text | isys_cats_contract_list | isys_cats_contract_list__customer_no |     |     |
| Interne Nummer | text | isys_cats_contract_list | isys_cats_contract_list__internal_no |     |     |
| Kosten | double | isys_cats_contract_list | isys_cats_contract_list__costs |     |     |
| Kostenberechnung | text | isys_cats_contract_list | isys_cats_contract_list__cost_calculation |     |     |
| Produkt | text | isys_cats_contract_list | isys_cats_contract_list__product |     |     |
| Reaktionszeiten | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| Vertragsstatus | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_status__id | isys_contract_status | isys_contract_status__id |
| Vertragsbeginn | date | isys_cats_contract_list | isys_cats_contract_list__start_date |     |     |
| Vertragsende | date | isys_cats_contract_list | isys_cats_contract_list__end_date |     |     |
| Laufzeit | int | isys_cats_contract_list | isys_cats_contract_list__runtime |     |     |
| Laufzeit Einheit | int | isys_cats_contract_list | isys_cats_contract_list__runtime_unit | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Nächstmögliches Vertragsende | text | isys_cats_contract_list | isys_cats_contract_list__id |     |     |
| Vertragsende durch | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_end_type__id | isys_contract_end_type | isys_contract_end_type__id |
| Nächstmögliches Kündigungsdatum | text | isys_cats_contract_list | isys_cats_contract_list__id |     |     |
| Kündigungsdatum | date | isys_cats_contract_list | isys_cats_contract_list__notice_date |     |     |
| Kündigungsfrist | int | isys_cats_contract_list | isys_cats_contract_list__notice_period |     |     |
| Kündigungsfrist Einheit | int | isys_cats_contract_list | isys_cats_contract_list__notice_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Kündigungstyp | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_notice_period_type__id | isys_contract_notice_period_type | isys_contract_notice_period_type__id |
| Wartungs-/Garantiefrist | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period |     |     |
| Frist Einheit | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| Zahlart | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_payment_period__id | isys_contract_payment_period | isys_contract_payment_period__id |
| Beschreibung | text_area | isys_cats_contract_list | isys_cats_contract_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de contrat | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_type__id | isys_contract_type | isys_contract_type__id |
| numéro de contrat | texte | isys_cats_contract_list | isys_cats_contract_list__contract_no | |
| numéro de client | texte | isys_cats_contract_list | isys_cats_contract_list__customer_no | |
| numéro interne | texte | isys_cats_contract_list | isys_cats_contract_list__internal_no | |
| coûts | double | isys_cats_contract_list | isys_cats_contract_list__costs | |
| calcul des coûts | text | isys_cats_contract_list | isys_cats_contract_list__cost_calculation | |
| produit | texte | isys_cats_contract_list | isys_cats_contract_list__product | |
| temps de réaction | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_reaction_rate__id | isys_contract_reaction_rate | isys_contract_reaction_rate__id |
| statut du contrat | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_status__id | isys_contract_status | isys_contract_status__id |
| début du contrat | date | isys_cats_contract_list | isys_cats_contract_list__start_date | |
| fin de contrat | date | isys_cats_contract_list | isys_cats_contract_list__end_date | |
| durée | int | isys_cats_contract_list | isys_cats_contract_list__runtime | |
| durée unité | int | isys_cats_contract_list | isys_cats_contract_list__runtime_unit | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| prochaine fin de contrat possible | texte | isys_cats_contract_list | isys_cats_contract_list__id | |
| fin de contrat par | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_end_type__id | isys_contract_end_type | isys_contract_end_type__id |
| date de résiliation la plus proche | texte | isys_cats_contract_list | isys_cats_contract_list__id | |
| date de préavis | date | isys_cats_contract_list | isys_cats_contract_list__notice_date | |
| délai de préavis | int | isys_cats_contract_list | isys_cats_contract_list__notice_period | |
| unité de préavis | int | isys_cats_contract_list | isys_cats_contract_list__notice_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| type de résiliation | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_notice_period_type__id | isys_contract_notice_period_type | isys_contract_notice_period_type__id |
| délai de maintenance/garantie | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period | |
| délai unité | int | isys_cats_contract_list | isys_cats_contract_list__maintenance_period_unit__id | isys_guarantee_period_unit | isys_guarantee_period_unit__id |
| type de paiement | int | isys_cats_contract_list | isys_cats_contract_list__isys_contract_payment_period__id | isys_contract_payment_period | isys_contract_payment_period__id |
| description | text_area | isys_cats_contract_list | isys_cats_contract_list__description | |

### Zugeordnete Objekte

### Objets associés

#### Tabelle: isys_catg_contract_assignment_list

#### Tableau : isys_catg_contract_assignment_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete Objekte | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__isys_obj__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objets associés | int | isys_catg_contract_assignment_list | isys_catg_contract_assignment_list__isys_obj__id | |

### Chassis

### Châssis

#### Tabelle: isys_cats_chassis_view_list

#### Tableau : isys_cats_chassis_view_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_width |     |     |
| Vorderseite vertikale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_height |     |     |
| Vorderseite Rastergröße | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_size |     |     |
| Rückseite horizontale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_width |     |     |
| Rückseite vertikale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_height |     |     |
| Rückseite Rastergröße | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_size |     |     |
| Beschreibung | text_area | isys_cats_chassis_view_list | isys_cats_chassis_view_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| recto unités horizontales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_width | |
| unités verticales de face | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_height | |
| recto Taille de la grille | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_size | |
| dos unités horizontales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_width | |
| dos unités verticales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_height | |
| arrière Taille de la grille | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_size | |
| description | text_area | isys_cats_chassis_view_list | isys_cats_chassis_view_list__description | |

### Slots

### Slots

#### Tabelle: isys_cats_chassis_slot_list

#### Tableau : isys_cats_chassis_slot_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anschlusstyp | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__isys_chassis_connector_type__id | isys_chassis_connector_type | isys_chassis_connector_type__id |
| Einschub | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__insertion |     |     |
| Slotbezeichnung | text | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__title |     |     |
| Horizontale Position | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__x_from |     |     |
| Bis Horizontale Position | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__x_to |     |     |
| Vertikale Position | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__y_from |     |     |
| Bis Vertikale Position | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__y_to |     |     |
| Gerätezuordnung | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__id |     |     |
| Beschreibung | text_area | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type de connecteur | int | isys_cats_chassis_slot_list | isys_cats_chassis_list__is_chassis_connector_type__id | isys_chassis_connector_type | isys_chassis_connector_type__id |
| insertion | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__insertion | |
| nom du slot | texte | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__title | |
| Position horizontale | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__x_from | |
| à Position horizontale | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__x_to | |
| Position verticale | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__y_from | |
| à la position verticale | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__y_to | |
| affectation de périphérique | int | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__id | |
| description | text_area | isys_cats_chassis_slot_list | isys_cats_chassis_slot_list__description | |

### Zugewiesene Geräte

### Périphériques attribués

#### Tabelle: isys_cats_chassis_list

#### Tableau : isys_cats_chassis_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Rolle | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_chassis_role__id | isys_chassis_role | isys_chassis_role__id |
| Gerätezuordnung | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_connection__id | isys_connection | isys_connection__id |
| Gerätezuordnung (Hostadapter) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| Gerätezuordnung (Interface) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_netp_list__id | isys_catg_netp_list | isys_catg_netp_list__id |
| Gerätezuordnung (Stromverbraucher) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_pc_list__id | isys_catg_pc_list | isys_catg_pc_list__id |
| Eingeschoben bei | int | isys_cats_chassis_list | isys_cats_chassis_list__id |     |     |
| Beschreibung | text_area | isys_cats_chassis_list | isys_cats_chassis_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| rôle | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_chassis_role__id | isys_chassis_role | isys_chassis_role__id |
| association de dispositifs | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_connection__id | isys_connection | isys_connection__id |
| association de périphériques (adaptateur hôte) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_hba_list__id | isys_catg_hba_list | isys_catg_hba_list__id |
| Affectation de périphérique (interface) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_netp_list__id | isys_catg_netp_list | isys_catg_netp_list__id |
| Affectation des appareils (consommateurs de courant) | int | isys_cats_chassis_list | isys_cats_chassis_list__isys_catg_pc_list__id | isys_catg_pc_list | isys_catg_pc_list__id |
| inséré à | int | isys_cats_chassis_list | isys_cats_chassis_list__id | |
| description | text_area | isys_cats_chassis_list | isys_cats_chassis_list__description | |

### Chassis Ansicht

### Vue du châssis

#### Tabelle: isys_cats_chassis_view_list

#### Tableau : isys_cats_chassis_view_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_width |     |     |
| Vorderseite vertikale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_height |     |     |
| Vorderseite Rastergröße | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_size |     |     |
| Rückseite horizontale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_width |     |     |
| Rückseite vertikale Einheiten | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_height |     |     |
| Rückseite Rastergröße | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_size |     |     |
| Beschreibung | text_area | isys_cats_chassis_view_list | isys_cats_chassis_view_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| recto unités horizontales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_width | |
| unités verticales de face | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_height | |
| recto Taille de la grille | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__front_size | |
| dos unités horizontales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_width | |
| dos unités verticales | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_height | |
| arrière Taille de la grille | int | isys_cats_chassis_view_list | isys_cats_chassis_view_list__rear_size | |
| description | text_area | isys_cats_chassis_view_list | isys_cats_chassis_view_list__description | |

### Varianten

### Variantes

#### Tabelle: isys_cats_app_variant_list

#### Tableau : isys_cats_app_variant_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bezeichnung | text | isys_cats_app_variant_list | isys_cats_app_variant_list__title |     |     |
| Variante | text | isys_cats_app_variant_list | isys_cats_app_variant_list__variant |     |     |
| Beschreibung | text_area | isys_cats_app_variant_list | isys_cats_app_variant_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre | texte | isys_cats_app_variant_list | isys_cats_app_variant_list__title | |
| variante | texte | isys_cats_app_variant_list | isys_cats_app_variant_list__variant | |
| description | text_area | isys_cats_app_variant_list | isys_cats_app_variant_list__description | |

### Nagios

### Nagios

#### Tabelle: isys_cats_person_nagios_list

#### Tableau : isys_cats_person_nagios_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Alias | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__alias |     |     |
| contact_name | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__contact_name |     |     |
| contact_name selection | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__contact_name_selection |     |     |
| host_notification_enabled | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_enabled |     |     |
| service_notification_enabled | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_enabled |     |     |
| host_notification_period | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_period |     |     |
| host_notification_period+ | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| service_notification_period | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_period |     |     |
| service_notification_period+ | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| host_notification_options | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_options |     |     |
| service_notification_options | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_options |     |     |
| host_notification_commands | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_commands |     |     |
| service_notification_commands | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_commands |     |     |
| can_submit_commands | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__can_submit_commands |     |     |
| retain_status_information | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__retain_status_information |     |     |
| Diese Konfiguration exportieren | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__is_exportable |     |     |
| retain_nonstatus_information | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__retain_nonstatus_information |     |     |
| custom_object_vars | text_area | isys_cats_person_nagios_list | isys_cats_person_nagios_list__custom_obj_vars |     |     |
| Beschreibung | text_area | isys_cats_person_nagios_list | isys_cats_person_nagios_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| alias | texte | isys_cats_person_nagios_list | isys_cats_person_nagios_list__alias | |
| nom_contact | texte | isys_cats_person_nagios_list | isys_cats_person_nagios_list__nom_contact | |
| contact_name selection | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__contact_name_selection | |
| host_notification_enabled | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_enabled | |
| service_notification_enabled | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_enabled | |
| host_notification_period | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_period | |
| host_notification_period+ | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| service_notification_period | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_period | |
| service_notification_period+ | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_period_plus | isys_nagios_timeperiods_plus | isys_nagios_timeperiods_plus__id |
| host_notification_options | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_options | |
| service_notification_options | texte | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_options | |
| host_notification_commands | text | isys_cats_person_nagios_list | isys_cats_person_nagios_list__host_notification_commands | |
| service_notification_commands | texte | isys_cats_person_nagios_list | isys_cats_person_nagios_list__service_notification_commands | |
| can_submit_commands | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__can_submit_commands | |
| retain_status_information | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__retain_status_information | |
| Exporter cette configuration | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__is_exportable | |
| retain_nonstatus_information | int | isys_cats_person_nagios_list | isys_cats_person_nagios_list__retain_nonstatus_information | |
| custom_object_vars | text_area | isys_cats_person_nagios_list | isys_cats_person_nagios_list__custom_obj_vars | |
| description | text_area | isys_cats_person_nagios_list | isys_cats_person_nagios_list__description | |

### Nagios

### Nagios

#### Tabelle: isys_cats_person_group_nagios_list

#### Tableau : isys_cats_person_group_nagios_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | int | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__is_exportable |     |     |
| alias | text | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__alias |     |     |
| Beschreibung | text_area | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Exporter cette configuration | int | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__is_exportable | |
| alias | texte | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__alias | |
| description | text_area | isys_cats_person_group_nagios_list | isys_cats_person_group_nagios_list__description | |

### Typ

### Type

#### Tabelle: isys_cats_group_type_list

#### Tableau : isys_cats_group_type_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys_cats_group_type_list | isys_cats_group_type_list__type |     |     |
| Report | int | isys_cats_group_type_list | isys_cats_group_type_list__isys_report__id |     |     |
| Beschreibung | text_area | isys_cats_group_type_list | isys_cats_group_type_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| type | int | isys_cats_group_type_list | isys_cats_group_type_list__type | |
| rapport | int | isys_cats_group_type_list | isys_cats_group_type_list__isys_report__id | |
| description | text_area | isys_cats_group_type_list | isys_cats_group_type_list__description | |

### Zugewiesene logische Ports

### Ports logiques alloués

#### Tabelle: isys_catg_log_port_list_2_isys_obj

#### Tableau : isys_catg_log_port_list_2_isys_obj

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Objekt-Titel | int | main | isys_obj__id |     |     |
| Zugewiesene logische Ports | int | isys_catg_log_port_list | isys_catg_log_port_list__id |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| titre de l'objet | int | main | isys_obj__id | |
| ports logiques alloués | int | isys_catg_log_port_list | isys_catg_log_port_list__id | |

### Installation

### Installation

#### Tabelle: isys_catg_application_list

#### Tableau : isys_catg_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id |     |     |
| Typ | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| Priorität | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| Zugewiesene Lizenz | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Zugewiesener Lizenzschlüssel | text | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Datenbankschema | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| Service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| Variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services vererben | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services |     |     |
| Beschreibung | text_area | isys_catg_application_list | isys_catg_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Installé sur | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id | |
| type | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| priorité | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| clé de licence attribuée | texte | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| schéma de base de données | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services hériter | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services | |
| description | text_area | isys_catg_application_list | isys_catg_application_list__description | |

### Installation

### Installation

#### Tabelle: isys_catg_application_list

#### Tableau : isys_catg_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id |     |     |
| Typ | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| Priorität | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| Zugewiesene Lizenz | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Zugewiesener Lizenzschlüssel | text | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| Datenbankschema | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| Service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| Variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services vererben | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services |     |     |
| Beschreibung | text_area | isys_catg_application_list | isys_catg_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| Installé sur | int | isys_catg_application_list | isys_catg_application_list__isys_obj__id | |
| type | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_type__id | isys_catg_application_type | isys_catg_application_type__id |
| priorité | int | isys_catg_application_list | isys_catg_application_list__isys_catg_application_priority__id | isys_catg_application_priority | isys_catg_application_priority__id |
| licence attribuée | int | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| clé de licence attribuée | texte | isys_catg_application_list | isys_catg_application_list__isys_cats_lic_list__id | isys_cats_lic_list | isys_cats_lic_list__id |
| schéma de base de données | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_cats_database_access_list | isys_cats_database_access_list__id |
| service | int | isys_catg_application_list | isys_catg_application_list__isys_catg_relation_list__id | isys_catg_its_components_list | isys_catg_its_components_list__id |
| variante | int | isys_catg_application_list | isys_catg_application_list__isys_cats_app_variant_list__id | isys_cats_app_variant_list | isys_cats_app_variant_list__id |
| Nagios services hériter | int | isys_catg_application_list | isys_catg_application_list__bequest_nagios_services | |
| description | text_area | isys_catg_application_list | isys_catg_application_list__description | |

### Netzbereiche

### Zones de réseau

#### Tabelle: isys_cats_net_zone_list

#### Tableau : isys_cats_net_zone_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzbereich Objekt | int | isys_cats_net_zone_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |
| Bereich von | text | isys_cats_net_zone_list | isys_cats_net_zone_list__range_from |     |     |
| Bereich von | text | isys_cats_net_zone_list | isys_cats_net_zone_list__range_from_long |     |     |
| Bereich bis | text | isys_cats_net_zone_list | isys_cats_net_zone_list__range_to |     |     |
| Bereich bis | text | isys_cats_net_zone_list | isys_cats_net_zone_list__range_to_long |     |     |
| Beschreibung | text_area | isys_cats_net_zone_list | isys_cats_net_zone_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| objet zone réseau | int | isys_cats_net_zone_list | isys_cats_net_zone_list__isys_obj__id__zone | isys_obj | isys_obj__id |
| plage de | texte | isys_cats_net_zone_list | isys_cats_net_zone_list__range_from | |
| plage de | texte | isys_cats_net_zone_list | isys_cats_net_zone_list__range_from_long | |
| plage jusqu'à | texte | isys_cats_net_zone_list | isys_cats_net_zone_list__range_to | |
| plage jusqu'à | texte | isys_cats_net_zone_list | isys_cats_net_zone_list__range_to_long | |
| description | text_area | isys_cats_net_zone_list | isys_cats_net_zone_list__description | |

### Betriebssysteme

### Systèmes d'exploitation

#### Tabelle: isys_cats_application_list

#### Tableau : isys_cats_application_list

| Feld | Typ | Tabelle | Datenbank-Feld | Referenz-Tabelle | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys_cats_application_list | isys_cats_application_list__specification |     |     |
| Hersteller | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| Installationsart | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| Registrierungs-Key | text | isys_cats_application_list | isys_cats_application_list__registration_key |     |     |
| Installationspfad | text | isys_cats_application_list | isys_cats_application_list__install_path |     |     |
| Anzahl Installationen | int | isys_cats_application_list |     |     |     |
| Beschreibung | text_area | isys_cats_application_list | isys_cats_application_list__description |     |     |

| champ | type | table | champ de base de données | table de référence | référence |
| --- | --- | --- | --- | --- | --- |
| spécification | texte | isys_cats_application_list | isys_cats_application_list__specification | |
| fabricant | int | isys_cats_application_list | isys_cats_application_list__isys_application_manufacturer__id | isys_application_manufacturer | isys_application_manufacturer__id |
| type d'installation | int | isys_cats_application_list | isys_cats_application_list__isys_installation_type__id | isys_installation_type | isys_installation_type__id |
| clé d'enregistrement | texte | isys_cats_application_list | isys_cats_application_list__registration_key | |
| chemin d'installation | texte | isys_cats_application_list | isys_cats_application_list__install_path | |
| nombre d'installations | int | isys_cats_application_list | | |
| description | text_area | isys_cats_application_list | isys_cats_application_list__description | |