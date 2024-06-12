# Modèle de base de données

*   [Tables de catégorie 1.10](./category-tables-1.10.md)
*   [Tables de catégorie 1.9](./category-tables-1.9.md)

La plupart des paramètres et contenus sont enregistrés dans un Système de Gestion de Base de Données (SGBD) par i-doit. [MySQL ou MariaDB](../../installation/system-requirements.md) sont utilisés comme SGBD. Mais quelle est la structure du modèle de base de données i-doit?

Fondamentaux
------------

Certaines des plus de 400 tables de la base de données du locataire sont structurées à l'aide d'un schéma de noms défini. Par exemple, c'est la raison pour laquelle toutes les tables i-doit ont le préfixe "isys\_".

D'autres identifiants pour les catégories CMDB sont "cats" pour des catégories spécifiques et "catg" pour des catégories globales. Ils se terminent par le nom anglais de la catégorie pertinente et le suffixe \_list (par exemple, _isys\_catg\_model\_list_, _isys\_catg\_memory\_list_). Les tables de catégorie représentent 50% de la base de données complète. Une autre partie importante des tables sont des listes de dialogues avec lesquelles les listes déroulantes sont remplies. Beaucoup de ces listes spéciales contiennent des valeurs sur le type et le fabricant et peuvent être reconnues grâce à leurs noms, tels que "type" ou "manufacturer".

Références (Clés étrangères)
----------------------------

Pour éviter les redondances dans le schéma de données, les bases de données i-doit sont structurées de manière relationnelle et normalisées selon le schéma de la troisième forme normale. Les clés étrangères ont une désignation uniforme (voir également le paragraphe sur "Schéma de noms") de sorte que vous puissiez les reconnaître immédiatement.

Schéma de noms
---------------

Outre la désignation des tables individuelles, il existe un concept cohérent pour les noms qui traverse toutes les désignations de champ des tables i-doit. Il commence par le nom de la table, suivi du nom réel de la colonne. Par exemple, le champ id de la table _isys\_catg\_cpu\_list_ est appelé :

    isys_catg_cpu_list__id
        /\              /\
     Table CPU            Colonne (ID)
    isys_catg_cpu_list__title
        /\               /\
     Table CPU            Colonne (titre)

De même, les références à d'autres champs (clés étrangères) suivent un principe similaire. Une référence contient toujours le nom complet de la colonne référencée, de sorte que vous puissiez toujours voir à quelle colonne de table la référence pointe grâce au nom.

Exemple de référence d'objet d'une catégorie :  

    isys_catg_cpu_list__isys_obj__id
    /\                 /\      /\
    Tableau CPU      Tableau Obj.    Colonne

Objets
------

Chaque objet est un enregistrement de données dans la table _isys\_obj_. Les caractéristiques, telles que le type d'objet (serveurs, clients, routeurs, etc.), la date de création, le statut (normal, archivé, supprimé) et quelques attributs supplémentaires, sont enregistrés dans cette table. La détermination du type d'objet est effectuée en référençant la table _isys\_obj\_type_ dans laquelle les caractéristiques et l'emplacement respectifs (infrastructure, logiciel, etc.) sont enregistrés.

Catégories Globales et Spécifiques
----------------------------------

Chaque catégorie est reflétée dans la base de données en tant que table individuelle et est en relation 1:n avec l'objet. En principe, il y a une distinction entre les valeurs uniques et les listes. Les valeurs uniques sont des entrées simples (par exemple, comptabilité ou facteur de forme) et une seule entrée par objet existe dans la table. En revanche, les listes permettent des entrées multiples (CPU, mémoire, ports ...). Dans chaque enregistrement de données de la catégorie globale, il y a une référence à un seul objet.

Exemple de la structure de la catégorie globale pour une carte graphique et de la catégorie globale pour les adresses IP :

_isys\_catg\_graphic\_list_ est au-dessus de la clé étrangère _isys\_catg\_graphic\_list\_\_isys\_obj\_\_id_ par rapport à l'objet. Par le même schéma, l'adresse IP est en relation avec l'objet :  
_isys\_catg\_ip\_list_ contient la clé étrangère _isys\_catg\_ip\_list\_\_isys\_obj\_\_id_.

Cela se traduit par la déclaration SQL suivante pour la détermination de tous les objets, de leurs cartes graphiques et des détails des adresses IP :

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

Les mêmes règles s'appliquent également aux catégories spécifiques. Une requête pour tous les détails nets de tous les objets nets se présente comme suit:

```sql
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

**Diagramme: Relation entre les catégories et les objets**

[![Diagramme: Relation entre les catégories et les objets](../../assets/images/en/software-development/database-model/1-dm.png)](../../assets/images/en/software-development/database-model/1-dm.png)
**

Dans le diagramme, vous pouvez voir comment un objet est lié à la catégorie globale CPU. Cette catégorie accède à nouveau aux entrées Dialog+, telles que le fabricant et le type. Il en va de même avec la catégorie globale Facteur de forme qui accède au type de facteur de forme.

[![Diagramme: Relation entre les catégories et les objets](../../assets/images/en/software-development/database-model/1-dm.png)](../../assets/images/en/software-development/database-model/1-dm.png)

Ce diagramme illustre les relations d'un objet avec la catégorie "Adresse hôte" (IP). L'objet (par exemple, Serveur1) est dans la table _isys\_obj_, les adresses IP allouées sont dans la table _isys\_catg\_ip\_list_. En raison du niveau détaillé des caractéristiques de l'adresse hôte, trois tables supplémentaires sont référencées à côté des détails de base (nom d'hôte, adresse ...):

*   _isys\_connection_, contenant la connexion à l'objet réseau
*   _isys\_ip\_assignment_, déterminant la forme d'attribution de l'IP (DHCP, statique)
*   _isys\_net\_type_, fournissant le type de réseau

Utilisateurs, Contacts, Personnes, Groupes de personnes
-------------------------------------------------------

Les contacts, qui peuvent être à la fois des utilisateurs internes et des personnes externes dans i-doit, sont enregistrés dans la table _isys\_obj_ avec les types d'objets respectifs. Les utilisateurs internes diffèrent des "contacts" externes uniquement par le remplissage du contenu avec les paramètres d'authentification i-doit (comme le nom d'utilisateur ou le mot de passe) dans la table _isys\_cats\_person\_list_. Les groupes (et les groupes de droits) sont enregistrés dans _isys\_obj_ par le système_.

Journal de bord
-------

Le journal de bord se compose d'entrées dans la table _isys\_logbook_. Cette table a de nouveau des références à d'autres tables. Les tables suivantes sont importantes :

*   _isys\_logbook\_archive_ (entrées de journal de bord archivées)
*   _isys\_logbook\_event_ (événements, tels que créés, modifiés ou supprimés)
*   _isys\_logbook\_level_ (niveau d'alarme pour une présentation colorée dans le journal de bord et priorité)
*   _isys\_logbook\_source_ (où l'événement a été déclenché, par exemple, source interne ou externe, Nagios, etc.)

Aperçu de la Table
---------------------

Catégories CMDB

*   isysgui\_catg
*   isysgui\_cats
*   isysgui\_custom

Table de dialogue pour la comptabilité (isys\_catg\_account\_list)

*   isys\_account

Tables pour les connexions de câbles

*   isys\_cable\_connection
*   isys\_cable\_type

Catégories globales

*   isys\_catg\_access\_list
*   isys\_catg\_accounting\_list
*   isys\_catg\_application\_list
*   isys\_catg\_backup\_list
*   isys\_catg\_connector\_list
*   isys\_catg\_contact\_list
*   isys\_catg\_controller\_list
*   isys\_catg\_cpu\_frequency
*   isys\_catg\_cpu\_list
*   isys\_catg\_distributor
*   isys\_catg\_drive\_list
*   isys\_catg\_emergency\_plan\_list
*   isys\_catg\_fc\_port\_list
*   isys\_catg\_file\_list
*   isys\_catg\_formfactor\_list
*   isys\_catg\_global\_category
*   isys\_catg\_global\_list
*   isys\_catg\_graphic\_list
*   isys\_catg\_idic\_list
*   isys\_catg\_image\_list
*   isys\_catg\_ip\_list
*   isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list
*   isys\_catg\_ip\_list\_2\_isys\_netp\_ifacel
*   isys\_catg\_lic\_list
*   isys\_catg\_location\_list
*   isys\_catg\_logb\_list
*   isys\_catg\_maintenance\_list
*   isys\_catg\_manual\_list
*   isys\_catg\_memory\_list
*   isys\_catg\_model\_list
*   isys\_catg\_nagios
*   isys\_catg\_nagios\_list
*   isys\_catg\_netp\_list
*   isys\_catg\_netv
*   isys\_catg\_netv\_list
*   isys\_catg\_net\_type\_list
*   isys\_catg\_odep\_list
*   isys\_catg\_overview\_list
*   isys\_catg\_port\_list
*   isys\_catg\_port\_list\_2\_isys\_netp\_con
*   isys\_catg\_port\_list\_2\_isys\_netp\_ifacel
*   isys\_catg\_power\_consumer\_list
*   isys\_catg\_sanpool\_list
*   isys\_catg\_sound\_list
*   isys\_catg\_stor\_list
*   isys\_catg\_ui\_list
*   isys\_catg\_version\_list
*   isys\_catg\_virtual\_list
*   isys\_catg\_virtual\_machine\_list
*   isys\_catg\_workflow\_list


Catégories spécifiques

*   isys\_cats\_access\_point\_list
*   isys\_cats\_ac\_list
*   isys\_cats\_application\_list
*   isys\_cats\_building\_list
*   isys\_cats\_client\_list
*   isys\_cats\_cp\_contract\_list
*   isys\_cats\_distributor
*   isys\_cats\_emergency\_plan\_list
*   isys\_cats\_enclosure\_list
*   isys\_cats\_file\_list
*   isys\_cats\_group\_list
*   isys\_cats\_lic\_group
*   isys\_cats\_lic\_item
*   isys\_cats\_lic\_list
*   isys\_cats\_location\_generic\_list
*   isys\_cats\_maintenance\_list
*   isys\_cats\_monitor\_list
*   isys\_cats\_net\_list
*   isys\_cats\_pobj\_list
*   isys\_cats\_prt\_emulation
*   isys\_cats\_prt\_list
*   isys\_cats\_prt\_paper
*   isys\_cats\_room\_list
*   isys\_cats\_router\_list
*   isys\_cats\_san\_list
*   isys\_cats\_service\_list
*   isys\_cats\_switch\_fc\_list
*   isys\_cats\_switch\_net\_list
*   isys\_cats\_tapelib\_list
*   isys\_cats\_wan\_list
*   isys\_cats\_ws\_net\_type\_list

Connexions entre objets et catégories

*   isys\_connection

Références de contact

*   isys\_contact
*   isys\_contact\_data\_item
*   isys\_contact\_type

Combinaisons d'objets

*   isys\_container

Dialogue : Type de contrat mobile

*   isys\_cp\_contract\_type

Informations sur la version et la révision de la base de données i-doit

*   isys\_db\_init

Dépendances, type de dépendance

*   isys\_dependency
*   isys\_dep\_type

Table de connexion pour le lecteur au stockage

*   isys\_drive\_list\_2\_stor\_list

Modèles d'exportation

*   isys\_export

Dialogue : Médium de port FC

*   isys\_fc\_port\_medium

Fichiers

*   isys\_file\_category (catégorie)
*   isys\_file\_group (groupe)
*   isys\_file\_physical (chemin du fichier physique)
*   isys\_file\_type (types de fichiers)

Administration de groupe

*   isys\_group

Table de connexion des _groupes de droits_ aux modules, objets, contacts ou sessions utilisateur

*   isys\_group\_2\_isys\_module
*   isys\_group\_2\_isys\_obj
*   isys\_group\_2\_isys\_person\_intern
*   isys\_group\_2\_isys\_user\_session

Dialogue : Attribution d'IP

*   isys\_ip\_assignment

Configuration LDAP

*   isys\_ldap (connexion au serveur LDAP)
*   isys\_ldap\_directory (types de répertoires)

*   isys\_location\_image

Enregistrement des objets verrouillés (objets en cours de traitement)

*   isys\_lock

Journal

*   isys\_logbook
*   isys\_logbook\_archive
*   isys\_logbook\_event
*   isys\_logbook\_event\_class
*   isys\_logbook\_lc\_parameter
*   isys\_logbook\_level
*   isys\_logbook\_source

Dialogue : Temps de réaction pour les contrats de maintenance

*   isys\_maintenance\_reaction\_rate

Dialogue : Titre de la mémoire de travail

*   isys\_memory\_title

Dialogue : Titre du modèle

*   isys\_model\_title

Administration des modules

*   isys\_module

Moniteur

*   isys\_monitor\_resolution
*   isys\_monitor\_unit

Tables pour la configuration Nagios

*   isys\_nagios\_commands
*   isys\_nagios\_config
*   isys\_nagios\_contacts
*   isys\_nagios\_contact\_groups
*   isys\_nagios\_dependency
*   isys\_nagios\_host\_escalations
*   isys\_nagios\_nagioshosts
*   isys\_nagios\_ndo
*   isys\_nagios\_service
*   isys\_nagios\_service\_escalations
*   isys\_nagios\_timeperiods

Dialogues pour la catégorie spécifique Net (Réseau de couche 3-Net)

*   isys\_net\_dns\_domain
*   isys\_net\_dns\_server
*   isys\_net\_type
*   isys\_net\_type\_title

Table pour les objets CMDB (éléments de configuration)

*   isys\_obj

Table pour les types d'objets CMDB (types de CI)

*   isys\_obj\_type

Groupe de types d'objets et table de connexion des types d'objets aux catégories globales

*   isys\_obj\_type\_2\_isysgui\_catg
*   isys\_obj\_type\_2\_isysgui\_catg\_overview
*   isys\_obj\_type\_group

Table pour les organisations

*   isys\_organisation\_intern\_iop

Table pour les contacts

*   isys\_person\_extern
*   isys\_person\_intern
*   isys\_person\_intern\_iop

Dialogues de port

*   isys\_port\_duplex
*   isys\_port\_negotiation
*   isys\_port\_speed
*   isys\_port\_standard

Connexion électrique

*   isys\_power\_con
*   isys\_power\_female\_socket
*   isys\_power\_fuse\_ampere
*   isys\_power\_male\_plug

Catégorie Général : But prévu

*   isys\_purpose

Administration des rôles et des droits

*   isys\_right

*   isys\_right\_2\_isys\_role
*   isys\_role

Unité de capacité SAN

*   isys\_san\_capacity\_unit

Recherche

*   isys\_search

Service

*   isys\_service\_manufacturer

Niveau de RAID

*   isys\_stor\_raid\_level

Bibliothèque de bandes

*   isys\_tapelib\_type

Groupes d'arborescence d'objets (infrastructure, logiciel, autres)

*   isys\_tree\_group

Unité de temps

*   isys\_unit\_of\_time

Paramètres des utilisateurs, sessions et paramètres

*   isys\_user\_locale
*   isys\_user\_mydoit
*   isys\_user\_session
*   isys\_user\_setting
*   isys\_user\_ui

WAN

*   isys\_wan\_capacity\_unit
*   isys\_wan\_role
*   isys\_wan\_type

Spécifications Wifi

*   isys\_wf\_type\_2\_wf\_tp
*   isys\_wlan\_auth
*   isys\_wlan\_channel
*   isys\_wlan\_encryption
*   isys\_wlan\_function
*   isys\_wlan\_standard

Tables pour la gestion des flux de travail

*   isys\_workflow
*   isys\_workflow\_2\_isys\_workflow\_action
*   isys\_workflow\_action
*   isys\_workflow\_action\_parameter
*   isys\_workflow\_action\_type
*   isys\_workflow\_category
*   isys\_workflow\_status
*   isys\_workflow\_template\_parameter
*   isys\_workflow\_type

Tables temporaires

*   temp\_obj\_data

Tables Dialog-Plus
------------------

*   isys\_ac\_air\_quantity\_unit => Système de climatisation : unité de quantité d'air

*   isys\_ac\_refrigerating\_capacity\_unit => Système de climatisation : unité de capacité de refroidissement

*   isys\_guarantee\_period\_unit => Période de garantie : unité

*   isys\_memory\_unit => Mémoire : unité

*   isys\_stor\_unit => Stockage : unité

*   isys\_temp\_unit => Température : unité

*   isys\_ac\_type => Système de climatisation : type

*   isys\_catd\_drive\_type => Disque : type

*   isys\_catg\_cpu\_type => CPU : type

*   isys\_catg\_formfactor\_type => Facteur de forme

*   isys\_cats\_prt\_type => Imprimante : type

*   isys\_client\_type => Client : type

*   isys\_controller\_type => Contrôleur : type

*   isys\_filesystem\_type => Système de fichiers

*   isys\_memory\_type => Mémoire : type

*   isys\_monitor\_type => Moniteur : type

*   isys\_port\_type => Port : type

*   isys\_power\_fuse\_type => Objet d'alimentation : type de fusible

*   isys\_power\_connection\_type => Objet d'alimentation : type de connecteur

*   isys\_room\_type => Salle : type

*   isys\_stor\_con\_type => Stockage : type de connexion


*   isys\_stor\_type => Stockage : type de périphérique

*   isys\_ui\_con\_type => Interface : type de connexion

*   isys\_ui\_plugtype => Interface : type de prise

*   isys\_application\_manufacturer => Applications : fabricant

*   isys\_catg\_cpu\_manufacturer => CPU : fabricant

*   isys\_controller\_manufacturer => Contrôleur : fabricant

*   isys\_graphic\_manufacturer => Cartes graphiques : fabricant

*   isys\_memory\_manufacturer => Mémoire : fabricant

*   isys\_model\_manufacturer => Modèle : fabricant

*   isys\_sound\_manufacturer => Cartes son : fabricant

*   isys\_stor\_manufacturer => Stockage : fabricant

*   isys\_controller\_model => Contrôleur : modèle

*   isys\_stor\_model => Stockage : modèle

*   isys\_depth\_unit => Facteur de forme : unité

*   isys\_iface\_manufacturer => Interface : fabricant

*   isys\_iface\_model => Interface : modèle

*   isys\_pc\_manufacturer => Grand public : fabricant

*   isys\_pc\_model => Grand public : modèle

*   isys\_plug\_type => Port : prise

*   isys\_netx\_ifacel\_type => Interface log. : type

*   isys\_fc\_port\_type => Port FC : type

*   isys\_access\_type => Accès : type d'accès
