# VIVA

!!! warning "Obsolète"
    Cet add-on n'est plus développé et a été remplacé par Viva 2

L'add-on VIVA est dédié au thème de la sécurité de l'information basée sur l'IT-Grundschutz. Il soutient l'utilisateur dans les processus de documentation pertinents pour établir un Système de Gestion de la Sécurité de l'Information (SGSI) dans une organisation.

Table des matières
-----------------

1. Introduction à VIVA
    1. IT-Grundschutz
    2. À qui ce document s'adresse
    3. Structure de ce document
2. Préparation de l'installation de VIVA
    1. Configuration système
    2. Téléchargement
    3. Installation
    4. Mise à jour
    5. Activer/Désactiver
    6. Désinstaller
    7. Gestion des droits
    8. Migration depuis le module ITGS précédent
3. Procédure avec VIVA  
    1. Gérer les catalogues IT-Grundschutz
    2. Modéliser les réseaux d'information
    3. Créer des groupes cibles
    4. Assigner des objets cibles
    5. Héritage des groupes cibles
    6. Définir les catégories de besoins de protection
    7. Définir les besoins de protection
    8. Assigner des modules
    9. Mettre en œuvre des mesures
    10. Répondre aux questions de test
    11. Effectuer une analyse de sécurité supplémentaire
4. Analyse des risques selon l'IT-Grundschutz  
    1. Identifier les dangers
    2. Évaluer les dangers
5. Rapports avec VIVA  
    1. Créer des audits
    2. Documents de référence
6. Soutenir les audits avec VIVA
7. Assistants VIVA  
    1. Assistants de groupes cibles
    2. Assistants de besoins de protection
8. Catégorie d'objet VIVA
9. Widget VIVA

Annexe
------

*   Exemple d'un flux de travail possible
*   FAQ sur VIVA


Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.5.5 |     | [Bug] Audits exported via PDF are displayed incorrectly |
| 1.5.4 |     | [Bug] IT-Grundschutz catalogues cannot be imported  <br>[Bug] Audits exported via PDF are displayed incorrectly  <br>[Bug] The buttons are not completely displayed in the navbar |
| 1.5.3 |     | [Bug] Load audits without the necessary rights  <br>[Bug] VIVA tables are not created for multi-tenant instances  <br>[Bug] The inheritance function of measures could not be performed.  <br>[Bug] The VIVA add-on could not be installed on i-doit version 1.10.x.  <br>[Bug] Link to VIVA within an object |
| 1.5.2 | 2018-01-25 | <br>[Bug] Category VIVA cannot be used<br>[Bug] Error when editing comments<br>[Bug] Connected elements in menu are not updated, even when reloading the page<br>[Bug] Error while installing the VIVA add-on<br>[Bug] CSV export of linked safeguards shows not the right data<br>[Bug] Report "Applications" shows operating systems<br>[Bug] Report "implemented safeguards" mixes informations domains<br>[Bug] Report "linked CIs" mixes informations domains<br>[Bug] Umlauts are not displayed correctly during PDF export<br>[Bug] VIVA: Target objects not being displayed in left menu tree<br>[Bug] VIVA: Negative numbers are displayed in the Linked safeguards field within the Linked modules<br>[Bug] Category doesn't show any members of common target groups<br>[Bug] Category doesn't show any linked module<br>[Bug] When creating a link to a measure, a database error message occurs<br>[Bug] Error when accessing VIVA via icon in category list of objects<br>[Bug] VIVA add-on can not be installed<br>[Bug] Confirmation by enter / return leads to an HTTP / 500<br>[Bug] Number of unreacted actions wrong<br>[Bug] Handling of connected self defined controls within target objects faulty, will create database error<br> |
| 1.5.1 | 2017-05-02 | [Bug] Report for supplementary security analysis shows false positives<br>[Bug] Report for group inheritance is marked red, but shows no results<br>[Bug] Report for applications shows operating systems<br> |
| 1.5 | 2016-06-03 | [Improvement] Upgrade and connection from "IT-Verbünden" to new imported "Grundschutzkatalog"<br>[Improvement] Import of "IT-Grundschutz-Katalog 15 EL."[Bug] Error in export: E_WARNING: Illegal string offset 'type' production<br> |
| 1.4.3 |     | [Bug] Contacts linked by VIVA can't be purged.<br>[Bug] Line break in comment field results with errors in tree<br> |
| 1.4.2 |     | [Improvement] Improved representation of assistants<br> |
