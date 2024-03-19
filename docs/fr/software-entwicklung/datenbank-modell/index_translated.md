<!-- TRANSLATED by md-translate -->
# Datenbank-Modell

# Modèle de base de données

i-doit speichert die meisten Inhalte und Einstellungen in einem Database Management System (DBMS) ab. Als DBMS kommen [MySQL oder MariaDB](../../installation/systemvoraussetzungen.md) zum Einsatz. Doch wie ist das Datenbank-Modell von i-doit aufgebaut?

i-doit enregistre la plupart des contenus et des paramètres dans un système de gestion de base de données (SGBD). Les SGBD utilisés sont [MySQL ou MariaDB](../../installation/systemrequirements.md). Mais comment le modèle de base de données d'i-doit est-il structuré ?

## Grundsätzliches

## Principes de base

Einige der insgesamt über 400 Tabellen der Mandanten Datenbank sind über ein definiertes Namensschema aufgebaut. So haben beispielsweise alle i-doit Tabellen das Präfix "isys_".

Certaines des plus de 400 tables de la base de données des mandants sont structurées selon un schéma de dénomination défini. Par exemple, toutes les tables i-doit ont le préfixe "isys_".

CMDB Kategorien folgen mit der Kennung "cats" für spezifisch und "catg" globale Kategorien und enden mit der englischen Bezeichnung der entsprechenden Kategorie und dem Suffix _list (z.B. isys_catg_model_list, isys_catg_memory_list). Die Kategorie Tabellen machen 50% der gesamten Datenbank aus. Ein weiterer großer Teil der Tabellen sind Dialog Listen, mit denen Comboboxen gefüllt werden. Viele dieser speziellen Listen beinhalten Werte über Typ und Hersteller und sind somit durch Namen wie zum Beispiel "type" oder "manufacturer" erkenntlich.

Les catégories CMDB sont suivies de l'identifiant "cats" pour les catégories spécifiques et "catg" pour les catégories globales et se terminent par le nom anglais de la catégorie correspondante et le suffixe _list (par ex. isys_catg_model_list, isys_catg_memory_list). Les tables de catégories représentent 50% de l'ensemble de la base de données. Une autre grande partie des tables sont des listes de dialogue avec lesquelles les combobox sont remplies. Beaucoup de ces listes spéciales contiennent des valeurs sur le type et le fabricant et sont donc reconnaissables par des noms comme par exemple "type" ou "manufacturer".

## Referenzierungen (Foreign Keys)

## Références (Foreign Keys)

Zur Vermeidung von Redundanzen innerhalb des Datenschemas, sind die i-doit Datenbanken relational aufgebaut und nach dem Schema der 3. Normalform normalisiert. Fremdschlüssel haben eine einheitliche Benamung (siehe hierzu Abschnitt "Namensschema"), wodurch sie direkt ersichtlich werden.

Pour éviter les redondances au sein du schéma de données, les bases de données i-doit sont structurées de manière relationnelle et normalisées selon le schéma de la troisième forme normale. Les clés étrangères ont une dénomination uniforme (voir à ce sujet le paragraphe "Schéma de dénomination"), ce qui les rend directement visibles.

## Namensschema

## Schéma de noms

Neben der Benennung der einzelnen Tabellen, zieht sich ein konsequentes Namensschema durch alle Feldbezeichnungen der i-doit Tabellen, welches mit dem Namen der Tabelle beginnt, gefolgt von dem eigentlichen Namen der Spalte. Somit heisst das id Feld der Tabelle isys_catg_cpu_list zum Beispiel:

Outre la dénomination des différentes tables, un schéma de dénomination cohérent s'applique à toutes les désignations de champs des tables i-doit, commençant par le nom de la table, suivi du nom de la colonne proprement dite. Ainsi, le champ id de la table isys_catg_cpu_list s'appelle par exemple

```
isys_catg_cpu_list__id
/\              /\
Tabelle CPU Spalte (ID)
isys_catg_cpu_list__title
/\               /\
Tabelle CPU Spalte (Titel)
```

Referenzen auf andere Felder (Fremdschlüssel) folgen analog hierzu einem ähnlichen Grundsatz. Eine Referenz beinhaltet immer den kompletten Namen der referenzierten Spalte, so ist anhand des Namens immer ersichtlich, auf welche Tabellenspalte die Referenz zeigt.

Les références à d'autres champs (clés étrangères) suivent un principe similaire. Une référence contient toujours le nom complet de la colonne référencée, ce qui permet de savoir à quelle colonne du tableau la référence fait référence.

Beispiel Objektreferenz einer Kategorie:

Exemple de référence d'objet d'une catégorie :

```
isys_catg_cpu_list__isys_obj__id
/\                 /\      /\
Tabelle CPU Tabelle Obj. Spalte
```

## Objekte

## objets

Jedes Objekt ist jeweils ein Datensatz in der Tabelle _isys_obj_. In dieser Tabelle werden Eigenschaften wie der Objekttyp (Server, Clients, Router, etc.), das Erstellungsdatum, der Status (Normal, Archiviert, Gelöscht) und einige zusätzliche Attribute festgehalten. Die Bestimmung des Objekttypen erfolgt durch die Referenzierung der Tabelle _isys_obj_type,_ in der sich die entsprechende Ausprägung und Lokation (Infrastruktur, Software etc.) befindet.

Chaque objet est un enregistrement dans la table _isys_obj_. Cette table contient des propriétés telles que le type d'objet (serveur, clients, routeurs, etc.), la date de création, le statut (normal, archivé, supprimé) et quelques attributs supplémentaires. La détermination du type d'objet s'effectue en référençant la table _isys_obj_type,_ dans laquelle se trouvent l'attribut et le lieu correspondants (infrastructure, logiciel, etc.).

## Globale und spezifische Kategorien

## Catégories globales et spécifiques

Jede Kategorie spiegelt sich in der Datenbank als eigene Tabelle wieder und steht in einer 1:n Beziehung zum Objekt. Es wird grundsätzlich zwischen Listen und Single Values unterschieden. Single Values sind einfache Einträge (z.B. Buchhaltung oder Formfaktor), von denen pro Objekt genau ein Eintrag in der Tabelle existiert. Listen dagegen ermöglichen Mehrfacheintragungen (CPU, Speicher, Ports, ..). In jedem Datensatz der globalen Kategorie wird auf ein einzelnes Objekt referenziert.

Chaque catégorie se reflète dans la base de données sous la forme d'un tableau distinct et entretient une relation 1:n avec l'objet. Une distinction fondamentale est faite entre les listes et les Single Values. Les Single Values sont des entrées simples (p. ex. comptabilité ou facteur de forme), dont il existe exactement une entrée par objet dans la table. Les listes, en revanche, permettent des entrées multiples (CPU, mémoire, ports, ...). Dans chaque enregistrement de la catégorie globale, il est fait référence à un seul objet.

Beispielaufbau globale Kategorie Grafikkarte und globale Kategoire IP Adressen:

Exemple de construction de la catégorie globale "carte graphique" et de la catégorie globale "adresses IP" :

isys_catg_graphic_list steht über den Fremdschlüssel isys_catg_graphic_list__isys_obj__id in Beziehnung zum Objekt. Über das gleiche Schema steht die IP Adresse in Verbindung zum Objekt:  
isys_catg_ip_list beinhaltet den Fremdschlüssel isys_catg_ip_list__isys_obj__id.

isys_catg_graphic_list est en relation avec l'objet via la clé étrangère isys_catg_graphic_list__isys_obj__id. L'adresse IP est en relation avec l'objet via le même schéma :
isys_catg_ip_list contient la clé étrangère isys_catg_ip_list__isys_obj__id.

Somit ergibt sich folgenes SQL Statement für die Ermittlung alle Objekte, dessen Grafikkarte und IP Infos:

Il en résulte la déclaration SQL suivante pour la détermination de tous les objets, de leur carte graphique et des informations IP :

```
SELECT
isys_obj__title,
isys_catg_graphic_list__title,
isys_catg_graphic_list__memory,
isys_memory_unit__title,
isys_catg_ip_list__hostname,
isys_catg_ip_list__address
FROM isys_obj
INNER JOIN isys_catg_graphic_list
ON isys_catg_graphic_list__isys_obj__id = isys_obj__id
INNER JOIN isys_memory_unit
ON isys_catg_graphic_list__isys_memory_unit__id = isys_memory_unit__id
INNER JOIN isys_catg_ip_list
ON isys_catg_ip_list__isys_obj__id = isys_obj__id
```

Spezifische Kategorien verhalten sich gleich. Die Abfrage der Netzinformationen aller Netz Objekte würde folgendermaßen aussehen:

Les catégories spécifiques se comportent de la même manière. La requête des informations sur le réseau de tous les objets du réseau se présenterait comme suit :

```
SELECT
isys_obj__title,
isys_cats_net_list__address,
isys_cats_net_list__dhcp_range_from,
isys_cats_net_list__dhcp_range_to,
isys_cats_net_list__dhcp,
isys_cats_net_list__def_gw
FROM
isys_cats_net_list
INNER JOIN isys_obj
ON isys_cats_net_list__isys_obj__id = isys_obj__id
```

**Diagramm: Beziehung zwischen Kategorien und Objekten**

**Diagramme : relation entre les catégories et les objets**.

**[![datenbankmodell-beziehungen](../../assets/images/de/software-entwicklung/datenbank-modell/1-dm.png)](../../assets/images/de/software-entwicklung/datenbank-modell/1-dm.png)  
**

**[ ![relations du modèle de base de données](../../assets/images/fr/software-entwicklung/datenbank-modell/1-dm.png)](../../assets/images/fr/software-entwicklung/datenbank-modell/1-dm.png)
**

In der Grafik ist zu sehen wie ein Objekt mit der globalen Kategorie CPU verknüpft ist. Diese Kategorie greift wiederum auf Dialog+ Einträge wie den Hersteller und den Typ zu. Das gleiche geschieht mit der globalen Kategorie Formfaktor, die auf den Formfaktor-Typ zugreift.

Dans le graphique, on peut voir comment un objet est lié à la catégorie globale CPU. Cette catégorie accède à son tour à des entrées Dialog+ comme le fabricant et le type. La même chose se produit avec la catégorie globale Facteur de forme, qui accède au type de facteur de forme.

[![datenbankmodell-formfaktor](../../assets/images/de/software-entwicklung/datenbank-modell/2-dm.png)](../../assets/images/de/software-entwicklung/datenbank-modell/2-dm.png)

[ ![datenbank model-formfaktor](../../assets/images/fr/software-entwicklung/datenbank-modell/2-dm.png)](../../assets/images/fr/software-entwicklung/datenbank-modell/2-dm.png)

Diese Darstellung erläutert die Beziehungen eines Objektes zur Kategorie "Hostadresse" (IP). Das Objekt selbst (z.B. Server1) befindet sich in der Tabelle isys_obj. Die zugewiesenen IP Adressen in der Tabelle isys_catg_ip_list. Bedingt durch die detailierte Ausprägungstiefe der Hostadresse, werden neben den Grundinformationen (hostname, address, ..) drei weitere Tabellen referenziert:

Cette représentation explique les relations d'un objet avec la catégorie "adresse hôte" (IP). L'objet lui-même (p. ex. Server1) se trouve dans la table isys_obj, les adresses IP attribuées dans la table isys_catg_ip_list. En raison du niveau de détail de l'adresse d'hôte, trois tables supplémentaires sont référencées en plus des informations de base (hostname, address, ..) :

* isys_connection, welche die Verbindung zum Netz-Objekt beinhaltet
* isys_ip_assignment, welche die Zuweisungsform der IP bestimmt (DHCP, statisch)
* isys_net_type, welche die Netzart liefert

* isys_connection, qui contient la connexion à l'objet réseau
* isys_ip_assignment, qui détermine le mode d'attribution de l'IP (DHCP, statique)
* isys_net_type, qui fournit le type de réseau

## Benutzer, Kontakte, Personen, Personengruppen

## Utilisateurs, contacts, personnes, groupes de personnes

Kontakte, welche in i-doit sowohl interne Benutzer, als auch externe Personen umfassen können, fliessen in die Tabelle _isys_obj_ mit entsprechendem Objekttypen ein. Interne Benutzer unterscheiden sich von externen "Kontakten" lediglich durch die Befüllung der i-doit Authentifizierungs-Parametern (Konkret: Benutzername, Passwort) in der Tabelle _isys_cats_person_list_. Gruppen (und Rechtegruppen) speichert das System in _isys_obj._

Les contacts qui, dans i-doit, peuvent comprendre aussi bien des utilisateurs internes que des personnes externes, sont intégrés dans la table _isys_obj_ avec le type d'objet correspondant. Les utilisateurs internes se distinguent des "contacts" externes uniquement par le remplissage des paramètres d'authentification i-doit (concrètement : nom d'utilisateur, mot de passe) dans la table _isys_cats_person_list_. Le système enregistre les groupes (et les groupes de droits) dans _isys_obj._.

## Logbuch

## Journal de bord

Das Logbuch besteht aus Einträgen in der Tabelle isys_logbook. In dieser Tabelle existieren wieder einige Referenzen zu anderen Tabellen. Wichtig dafür sind folgende Tabellen:

Le journal de bord est constitué d'entrées dans la table isys_logbook. Dans cette table, il existe à nouveau quelques références à d'autres tables. Les tables suivantes sont importantes à cet égard :

* isys_logbook_archive (Archivierte Logbucheinträge)
* isys_logbook_event (Ereignisse wie Erstellt, Geändert, Gelöscht usw.)
* isys_logbook_level (Alarmlevel für farbige Darstellung im Logbuch und Dringlichkeit)
* isys_logbook_source (von wo ging das Event aus, z.B. intern, extern, Nagios etc.)

* isys_logbook_archive (entrées de journal archivées)
* isys_logbook_event (événements tels que Créé, Modifié, Supprimé, etc.)
* isys_logbook_level (niveau d'alarme pour la représentation en couleur dans le journal et l'urgence)
* isys_logbook_source (d'où est parti l'événement, par ex. interne, externe, Nagios, etc.)

## Tabellenübersicht

## Aperçu des tableaux

CMDB Kategorien

Catégories CMDB

* isysgui_catg
* isysgui_cats
* isysgui_custom

* isysgui_catg
* isysgui_cats
* isysgui_custom

Dialog Tabelle für Buchhaltung (isys_catg_account_list)

Table de dialogue pour la comptabilité (isys_catg_account_list)

* isys_account

* isys_account

Verkabelungstabellen

Tableaux de câblage

* isys_cable_connection
* isys_cable_type

* isys_cable_connection
* isys_cable_type

Globale Kategorien

Catégories globales

* isys_catg_access_list
* isys_catg_accounting_list
* isys_catg_application_list
* isys_catg_backup_list
* isys_catg_connector_list
* isys_catg_contact_list
* isys_catg_controller_list
* isys_catg_cpu_frequency
* isys_catg_cpu_list
* isys_catg_distributor
* isys_catg_drive_list
* isys_catg_emergency_plan_list
* isys_catg_fc_port_list
* isys_catg_file_list
* isys_catg_formfactor_list
* isys_catg_global_category
* isys_catg_global_list
* isys_catg_graphic_list
* isys_catg_idic_list
* isys_catg_image_list
* isys_catg_ip_list
* isys_catg_ip_list_2_isys_catg_port_list
* isys_catg_ip_list_2_isys_netp_ifacel
* isys_catg_lic_list
* isys_catg_location_list
* isys_catg_logb_list
* isys_catg_maintenance_list
* isys_catg_manual_list
* isys_catg_memory_list
* isys_catg_model_list
* isys_catg_nagios
* isys_catg_nagios_list
* isys_catg_netp_list
* isys_catg_netv
* isys_catg_netv_list
* isys_catg_net_type_list
* isys_catg_odep_list
* isys_catg_overview_list
* isys_catg_port_list
* isys_catg_port_list_2_isys_netp_con
* isys_catg_port_list_2_isys_netp_ifacel
* isys_catg_power_consumer_list
* isys_catg_sanpool_list
* isys_catg_sound_list
* isys_catg_stor_list
* isys_catg_ui_list
* isys_catg_version_list
* isys_catg_virtual_list
* isys_catg_virtual_machine_list
* isys_catg_workflow_list

* isys_catg_access_list
* isys_catg_accounting_list
* isys_catg_application_list
* isys_catg_backup_list
* isys_catg_connector_list
* isys_catg_contact_list
* isys_catg_controller_list
* isys_catg_cpu_frequency
* isys_catg_cpu_list
* isys_catg_distributor
* isys_catg_drive_list
* isys_catg_emergency_plan_list
* isys_catg_fc_port_list
* isys_catg_file_list
* isys_catg_formfactor_list
* isys_catg_global_category
* isys_catg_global_list
* isys_catg_graphic_list
* isys_catg_idic_list
* isys_catg_image_list
* isys_catg_ip_list
* isys_catg_ip_list_2_isys_catg_port_list
* isys_catg_ip_list_2_isys_netp_ifacel
* isys_catg_lic_list
* isys_catg_location_list
* isys_catg_logb_list
* isys_catg_maintenance_list
* isys_catg_manual_list
* isys_catg_memory_list
* isys_catg_model_list
* isys_catg_nagios
* isys_catg_nagios_list
* isys_catg_netp_list
* isys_catg_netv
* isys_catg_netv_list
* isys_catg_net_type_list
* isys_catg_odep_list
* isys_catg_overview_list
* isys_catg_port_list
* isys_catg_port_list_2_isys_netp_con
* isys_catg_port_list_2_isys_netp_ifacel
* isys_catg_power_consumer_list
* isys_catg_sanpool_list
* isys_catg_sound_list
* isys_catg_stor_list
* isys_catg_ui_list
* isys_catg_version_list
* isys_catg_virtual_list
* isys_catg_virtual_machine_list
* isys_catg_workflow_list

Spezifische Kategorien

Catégories spécifiques

* isys_cats_access_point_list
* isys_cats_ac_list
* isys_cats_application_list
* isys_cats_building_list
* isys_cats_client_list
* isys_cats_cp_contract_list
* isys_cats_distributor
* isys_cats_emergency_plan_list
* isys_cats_enclosure_list
* isys_cats_file_list
* isys_cats_group_list
* isys_cats_lic_group
* isys_cats_lic_item
* isys_cats_lic_list
* isys_cats_location_generic_list
* isys_cats_maintenance_list
* isys_cats_monitor_list
* isys_cats_net_list
* isys_cats_pobj_list
* isys_cats_prt_emulation
* isys_cats_prt_list
* isys_cats_prt_paper
* isys_cats_room_list
* isys_cats_router_list
* isys_cats_san_list
* isys_cats_service_list
* isys_cats_switch_fc_list
* isys_cats_switch_net_list
* isys_cats_tapelib_list
* isys_cats_wan_list
* isys_cats_ws_net_type_list

* isys_cats_access_point_list
* isys_cats_ac_list
* isys_cats_application_list
* isys_cats_building_list
* isys_cats_client_list
* isys_cats_cp_contract_list
* isys_cats_distributor
* isys_cats_emergency_plan_list
* isys_cats_enclosure_list
* isys_cats_file_list
* isys_cats_group_list
* isys_cats_lic_group
* isys_cats_lic_item
* isys_cats_lic_list
* isys_cats_location_generic_list
* isys_cats_maintenance_list
* isys_cats_monitor_list
* isys_cats_net_list
* isys_cats_pobj_list
* isys_cats_prt_emulation
* isys_cats_prt_list
* isys_cats_prt_paper
* isys_cats_room_list
* isys_cats_router_list
* isys_cats_san_list
* isys_cats_service_list
* isys_cats_switch_fc_list
* isys_cats_switch_net_list
* isys_cats_tapelib_list
* isys_cats_wan_list
* isys_cats_ws_net_type_list

Verbindungen zwischen Objekten und Kategorien

Liens entre les objets et les catégories

* isys_connection

* isys_connection

Kontaktrefenzen

Références de contact

* isys_contact
* isys_contact_data_item
* isys_contact_type

* isys_contact
* isys_contact_data_item
* isys_contact_type

Objekt-Kobinationen

Combinaisons d'objets

* isys_container

* isys_container

Dialog: Typ des Mobilfunkvertrags

le dialogue : Type de contrat de téléphonie mobile

* isys_cp_contract_type

* isys_cp_contract_type

Informationen über Version und Revision der i-doit Datenbank

Informations sur la version et la révision de la base de données i-doit

* isys_db_init

* isys_db_init

Abhängigkeiten, Art der Abhängkeit

Dépendances, type de dépendance

* isys_dependency
* isys_dep_type

* isys_dependency
* isys_dep_type

Verknüpfungstabelle für Laufwerk an Storage

Tableau des liens entre le lecteur et le stockage

* isys_drive_list_2_stor_list

* isys_drive_list_2_stor_list

Exportvorlagen

Modèles d'exportation

* isys_export

* isys_export

Dialog: FC Port Medium

Dialogue de l'entreprise : FC Port Moyen

* isys_fc_port_medium

* isys_fc_port_medium

Dateien

Fichiers

* isys_file_category (Kategorie)
* isys_file_group (Gruppierung)
* isys_file_physical (Pfad zur physikalischen Datei)
* isys_file_type (Dateitypen)

* isys_file_category (catégorie)
* isys_file_group (regroupement)
* isys_file_physical (chemin d'accès au fichier physique)
* isys_file_type (types de fichiers)

Gruppenverwaltung

Gestion des groupes

* isys_group

* isys_group

Verknüpfungstabelle der _Rechtegruppen_ zu Modulen, Objekten, Kontakten oder User-Sessions

Tableau des liens des _groupes de droits_ vers des modules, des objets, des contacts ou des sessions utilisateur

* isys_group_2_isys_module
* isys_group_2_isys_obj
* isys_group_2_isys_person_intern
* isys_group_2_isys_user_session

* isys_group_2_isys_module
* isys_group_2_isys_obj
* isys_group_2_isys_personne_interne
* isys_group_2_isys_user_session

Dialog: IP Zuweisung

Dialogue de gestion : Attribution d'IP

* isys_ip_assignment

* isys_ip_assignment

LDAP Konfiguration

Configuration LDAP

* isys_ldap (Verbindung zu LDAP Server)
* isys_ldap_directory (Directory Typen)

* isys_ldap (connexion au serveur LDAP)
* isys_ldap_directory (types de répertoires)

T

T

* isys_location_image

* isys_location_image

Registrierung gesperrter Objekte (Objekte in Bearbeitung)

Enregistrement des objets bloqués (objets en cours de traitement)

* isys_lock

* isys_lock

Logbuch

Journal de bord

* isys_logbook
* isys_logbook_archive
* isys_logbook_event
* isys_logbook_event_class
* isys_logbook_lc_parameter
* isys_logbook_level
* isys_logbook_source

* isys_logbook
* isys_logbook_archive
* isys_logbook_event
* isys_logbook_event_class
* isys_logbook_lc_parameter
* isys_logbook_level
* isys_logbook_source

Dialog: Reaktionszeiten für Wartungsverträge

Dialogue de l'entreprise : Temps de réponse pour les contrats de maintenance

* isys_maintenance_reaction_rate

* isys_maintenance_reaction_rate

Dialog: Name des Arbeitsspeichers

Dialogue de la boîte de dialogue : Nom de la mémoire de travail

* isys_memory_title

* isys_memory_title

Dialog: Modellbezeichnung

le dialogue : Désignation du modèle

* isys_model_title

* isys_model_title

Modulverwaltung

Gestion des modules

* isys_module

* isys_module

Monitor

Moniteur

* isys_monitor_resolution
* isys_monitor_unit

* isys_monitor_resolution
* isys_monitor_unit

Tabellen für die Nagios Konfiguration

Tableaux pour la configuration de Nagios

* isys_nagios_commands
* isys_nagios_config
* isys_nagios_contacts
* isys_nagios_contact_groups
* isys_nagios_dependency
* isys_nagios_host_escalations
* isys_nagios_nagioshosts
* isys_nagios_ndo
* isys_nagios_service
* isys_nagios_service_escalations
* isys_nagios_timeperiods

* isys_nagios_commands
* isys_nagios_config
* isys_nagios_contacts
* isys_nagios_contact_groups
* isys_nagios_dependency
* isys_nagios_host_escalations
* isys_nagios_nagioshosts
* isys_nagios_ndo
* isys_nagios_service
* isys_nagios_service_escalations
* isys_nagios_timeperiods

Dialoge für spezifische Kategorie Netz (Layer 3-Netz)

Dialogues pour catégorie spécifique Réseau (réseau de couche 3)

* isys_net_dns_domain
* isys_net_dns_server
* isys_net_type
* isys_net_type_title

* isys_net_dns_domain
* isys_net_dns_server
* isys_net_type
* isys_net_type_title

Tabelle für CMDB Objekte (Configuration Items)

Tableau pour les objets CMDB (Configuration Items)

* isys_obj

* isys_obj

Tabelle für CMDB Objekttypen (CI Typen)

Tableau des types d'objets CMDB (types CI)

* isys_obj_type

* isys_obj_type

Objekttypgruppe und Verknüpfungstabelle von Objekttypen zu globalen Kategorien

Groupe de types d'objets et table de liens des types d'objets aux catégories globales

* isys_obj_type_2_isysgui_catg
* isys_obj_type_2_isysgui_catg_overview
* isys_obj_type_group

* isys_obj_type_2_isysgui_catg
* isys_obj_type_2_isysgui_catg_overview
* isys_obj_type_groupe

Tabelle für Organisationen

Tableau pour les organisations

* isys_organisation_intern_iop

* isys_organisation_interne_iop

Tabelle für Kontakte

Tableau pour les contacts

* isys_person_extern
* isys_person_intern
* isys_person_intern_iop

* isys_personne_externe
* isys_personne_interne
* isys_personne_interne_iop

Port dialoge

Dialogues de port

* isys_port_duplex
* isys_port_negotiation
* isys_port_speed
* isys_port_standard

* isys_port_duplex
* isys_port_negotiation
* isys_port_speed
* isys_port_standard

Stromverbindung

Connexion électrique

* isys_power_con
* isys_power_female_socket
* isys_power_fuse_ampere
* isys_power_male_plug

* isys_power_con
* isys_power_female_socket
* isys_power_fuse_ampere
* isys_power_male_plug

Kategorie Allgemein: Einsatzzweck

Catégorie Généralités : Utilisation

* isys_purpose

* isys_purpose

Rollen- und Rechteverwaltung

Gestion des rôles et des droits

* isys_right
* isys_right_2_isys_role
* isys_role

* isys_right
* isys_right_2_isys_role
* isys_role

SAN-Kapazitätseinheit

Unité de capacité SAN

* isys_san_capacity_unit

* isys_san_capacity_unit

Suche

Recherche

* isys_search

* isys_search

Service

Service

* isys_service_manufacturer

* isys_service_manufacturer

Raidlevel

Niveau du raid

* isys_stor_raid_level

* isys_stor_raid_level

Tapelibrary

Tapelibrary

* isys_tapelib_type

* isys_tapelib_type

Objektbaumgruppen (Infrastruktur, Software, Andere)

Groupes d'arbres d'objets (infrastructure, logiciels, autres)

* isys_tree_group

* isys_tree_group

Zeiteinheit

Unité de temps

* isys_unit_of_time

* isys_unit_of_time

User locales, Sessions und Einstellungen

Locaux d'utilisateurs, sessions et paramètres

* isys_user_locale
* isys_user_mydoit
* isys_user_session
* isys_user_setting
* isys_user_ui

* isys_user_locale
* isys_user_mydoit
* isys_user_session
* isys_user_setting
* isys_user_ui

WAN

WAN

* isys_wan_capacity_unit
* isys_wan_role
* isys_wan_type

* isys_wan_capacity_unit
* isys_wan_role
* isys_wan_type

Wifi-Angaben

Indications Wifi

* isys_wf_type_2_wf_tp
* isys_wlan_auth
* isys_wlan_channel
* isys_wlan_encryption
* isys_wlan_function
* isys_wlan_standard

* isys_wf_type_2_wf_tp
* isys_wlan_auth
* isys_wlan_channel
* isys_wlan_encryption
* isys_wlan_function
* isys_wlan_standard

Tabellen für Workflowmanagement

Tableaux pour la gestion des flux de travail

* isys_workflow
* isys_workflow_2_isys_workflow_action
* isys_workflow_action
* isys_workflow_action_parameter
* isys_workflow_action_type
* isys_workflow_category
* isys_workflow_status
* isys_workflow_template_parameter
* isys_workflow_type

* isys_workflow
* isys_workflow_2_isys_workflow_action
* isys_workflow_action
* isys_workflow_action_parameter
* isys_workflow_action_type
* isys_workflow_category
* isys_workflow_status
* isys_workflow_template_parameter
* isys_workflow_type

Temporäre Tabellen

Tableaux temporaires

* temp_obj_data

* temp_obj_data

## Dialog-Plus-Tabellen

## Tableaux Dialog Plus

* isys_ac_air_quantity_unit => Klimaanlage: Einheit Luftmenge
* isys_ac_refrigerating_capacity_unit => Klimaanlage: Einheit Kühlleistung
* isys_guarantee_period_unit => Garantiezeit: Einheit
* isys_memory_unit => Speicher: Einheit
* isys_stor_unit => Storage: Einheit
* isys_temp_unit => Temperatur: Einheit
* isys_ac_type => Klimaanlage: Art
* isys_catd_drive_type => Laufwerk: Typ
* isys_catg_cpu_type => CPU: Typ
* isys_catg_formfactor_type => Formfaktor
* isys_cats_prt_type => Drucker: Art
* isys_client_type => Client: Typ
* isys_controller_type => Controller: Typ
* isys_filesystem_type => Dateisystem
* isys_memory_type => Speicher: Typ
* isys_monitor_type => Monitor: Typ
* isys_port_type => Port: Typ
* isys_power_fuse_type => Stromobjekt: Sicherungstyp
* isys_power_connection_type => Stromobjekt: Typ der Buchse
* isys_room_type => Raum: Typ
* isys_stor_con_type => Storage: Anschluss
* isys_stor_type => Storage: Gerätetyp
* isys_ui_con_type => Schnittstelle: Verbindungstyp
* isys_ui_plugtype => Schnittstelle: Anschlusstyp
* isys_application_manufacturer => Anwendungen: Hersteller
* isys_catg_cpu_manufacturer => CPU: Hersteller
* isys_controller_manufacturer => Controller: Hersteller
* isys_graphic_manufacturer => Grafikkarten: Hersteller
* isys_memory_manufacturer => Speicher: Hersteller
* isys_model_manufacturer => Modell: Hersteller
* isys_sound_manufacturer => Soundkarten: Hersteller
* isys_stor_manufacturer => Storage: Hersteller
* isys_controller_model => Controller: Modell
* isys_stor_model => Storage: Modell
* isys_depth_unit => Formfaktor: Einheit
* isys_iface_manufacturer => Interface: Hersteller
* isys_iface_model => Interface: Modell
* isys_pc_manufacturer => Verbraucher: Hersteller
* isys_pc_model => Verbraucher: Modell
* isys_plug_type => Port: Stecker
* isys_netx_ifacel_type => log. Interface: Typ
* isys_fc_port_type => FC-Port: Typ
* isys_access_type => Zugriff: Zugriffstyp

* isys_ac_air_quantity_unit => Climatisation : unité de quantité d'air
* isys_ac_refrigerating_capacity_unit => Climatisation : unité de puissance de refroidissement
* isys_guarantee_period_unit => période de garantie : unité
* isys_memory_unit => mémoire : unité
* isys_stor_unit => Stockage : unité
* isys_temp_unit => température : unité
* isys_ac_type => Climatisation : type
* isys_catd_drive_type => Lecteur : type
* isys_catg_cpu_type => CPU : type
* isys_catg_formfactor_type => facteur de forme
* isys_cats_prt_type => imprimante : type
* isys_client_type => Client : type
* isys_controller_type => Contrôleur : type
* isys_filesystem_type => Système de fichiers
* isys_memory_type => Mémoire : type
* isys_monitor_type => Moniteur : type
* isys_port_type => Port : type
* isys_power_fuse_type => Objet de courant : type de fusible
* isys_power_connection_type => Objet de courant : type de prise
* isys_room_type => Pièce : type
* isys_stor_con_type => Stockage : connexion
* isys_stor_type => Stockage : type de périphérique
* isys_ui_con_type => Interface : type de connexion
* isys_ui_plugtype => Interface : type de connexion
* isys_application_manufacturer => applications : Fabricant
* isys_catg_cpu_manufacturer => CPU : fabricant
* isys_controller_manufacturer => Contrôleur : fabricant
* isys_graphic_manufacturer => Cartes graphiques : fabricant
* isys_memory_manufacturer => Mémoire : fabricant
* isys_model_manufacturer => Modèle : fabricant
* isys_sound_manufacturer => Cartes son : fabricant
* isys_stor_manufacturer => Stockage : fabricant
* isys_controller_model => Contrôleur : modèle
* isys_stor_model => Stockage : modèle
* isys_depth_unit => Facteur de forme : unité
* isys_iface_manufacturer => Interface : Fabricant
* isys_iface_model => Interface : Modèle
* isys_pc_manufacturer => Consommateur : fabricant
* isys_pc_model => Consommateur : Modèle
* isys_plug_type => Port : connecteur
* isys_netx_ifacel_type => log. interface : Type
* isys_fc_port_type => port FC : type
* isys_access_type => accès : type d'accès
