<!-- TRANSLATED by md-translate -->
# Arbeitsablauf mit VIVA

# Déroulement du travail avec VIVA

Die Möglichkeiten der IT-Dokumentation sind bereits in i-doit vielfältig und lassen sich an die Vorgaben und Bedürfnisse der jeweiligen (Organisations-)Umgebung anpassen. Das [Add-on](../index.md) **VIVA** stellt hier keine Ausnahme dar: Auch wenn die zugrunde liegenden Standards des IT-Grundschutzes viele Vorgaben machen, sind sie an zahlreichen Stellen interpretationsfähig. Dem versucht VIVA gerecht zu werden. Trotz alledem haben sich einige Arbeitsabfolgen in der Praxis etabliert, die in diesem Kapitel näher beschrieben werden. Das Beispiel stellt weder Anspruch auf Vollständigkeit noch Verbindlichkeit. Weitere (Zwischen-)Schritte wie Anpassung der Dokumentation sind wahrscheinlich nötig.

Les possibilités de documentation informatique sont déjà nombreuses dans i-doit et peuvent être adaptées aux directives et aux besoins de chaque environnement (organisationnel). Le [Add-on](../index.md) **VIVA** ne fait pas exception à la règle : Même si les normes de base de la protection informatique fondamentale donnent beaucoup de directives, elles peuvent être interprétées à de nombreux endroits. VIVA tente d'en tenir compte. Malgré tout, certaines séquences de travail se sont établies dans la pratique et sont décrites plus en détail dans ce chapitre. Cet exemple n'est ni exhaustif ni obligatoire. D'autres étapes (intermédiaires), telles que l'adaptation de la documentation, seront probablement nécessaires.

[![Schrittweiser Arbeitsablauf in Anlehnung an das Wasserfallmodell mit Rückkopplung](../../assets/images/de/i-doit-pro-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)](../../assets/images/de/i-doit-pro-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)

[ ![Processus de travail par étapes inspiré du modèle en cascade avec rétroaction](../../assets/images/fr/i-doit-pro-add-ons/viva/processus de travail/i-doit_viva_diagram_workflow.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/processus de travail/i-doit_viva_diagram_workflow.png)

Ziel dieses Arbeitsablaufs ist es, eine solide Dokumentationsbasis zu schaffen, um später eine Auditierung und Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz zu unterstützen.

L'objectif de ce processus de travail est de créer une base de documentation solide afin de soutenir ultérieurement un audit et une certification ISO 27001 sur la base de la protection informatique de base.

1. [Vorbereitung der VIVA-Installation](./vorbereitung-der-viva-installation.md): In der IT-Dokumentation von i-doit befinden sich Objekte (inklusive Standort- und Softwarezuweisung sowie Portanschlüssen, wenn möglich), die zu Services modelliert sind und vom IT-Grundschutz erfasst werden sollen.
2. IT-Grundschutz-Kataloge verwalten
    1. [IT-Grundschutz-Kataloge EL 15 von 2016 importieren](./vorgehensweise-mit-viva.md#kataloge-importieren)
    2. Bausteine, Maßnahmen und Gefährdungen anpassen (optional)
3. Informationverbund mit Zielgruppen und -objekten modellieren
    1. [Informationsverbund anlegen](./vorgehensweise-mit-viva.md#informationsverb%C3%BCnde-modellieren)
    2. [IT-Service-Assistenten (Schicht 5 _Anwendungen_) ausführen](./viva-assistenten.md#it-service-assistent-schicht-5-anwendungen); danach:
    3. [Anwendungs-Assistent (Schicht 3 _IT-Systeme_)](./viva-assistenten.md#infrastruktur-assistent-schicht-3-it-systeme)
    4. [IT-System-Assistent (Schicht 2 _Infrastruktur_)](./viva-assistenten.md#it-system-assistent-schicht-2-infrastruktur)
    5. [IT-System-Assistent (Schicht 4 _Netze_)](./viva-assistenten.md#it-system-assistent-schicht-4-netze)
4. Schutzbedarf feststellen
    1. [Schutzbedarfskategorien anpassen](./vorgehensweise-mit-viva.md#schutzbedarfskategorien-definieren)
    2. [Schutzbedarf der Zielgruppen in Schicht 5 _Anwendungen_ feststellen](./viva-assistenten.md#it-service-assistent-schicht-5-anwendungen); danach Assistenten ausführen:
    3. [Schutzbedarfs-Assistenten (Schicht 3 _IT-Systeme_)](./viva-assistenten.md#infrastruktur-assistent-schicht-3-it-systeme)
    4. [Schutzbedarfs-Assistenten (Schicht 2 _Infrastruktur_)](./viva-assistenten.md#it-system-assistent-schicht-2-infrastruktur)
5. Bausteine zuordnen und Maßnahmen umsetzen
    1. [Pro Zielgruppe die nötigen Bausteine zuordnen](./vorgehensweise-mit-viva.md#bausteine-zuordnen)
    2. [Pro Zielgruppe die Umsetzung der Maßnahmen dokumentieren](./vorgehensweise-mit-viva.md#ma%C3%9Fnahmen-umsetzen)
    3. [Prüffragen beantworten](./vorgehensweise-mit-viva.md#pr%C3%BCffragen-beantworten)
6. Risikoanalyse durchführen
    1. [Ergänzende Sicherheitsanalyse durchführen](./vorgehensweise-mit-viva.md#erg%C3%A4nzende-sicherheitsanalyse-durchf%C3%BChren)
    2. [Gegebenenfalls Risikoanalyse durchführen](./risikoanalyse-nach-it-grundschutz.md#risikoanalyse-nach-it-grundschutz)
7. Audit erstellen
    1. [Reports überprüfen](./berichte-mit-viva.md) und gegebenenfalls Schritte 2-5 wiederholen, bis Reports keine unvermeidbar negativen Ergebnisse mehr liefern
    2. Informationen zu [Referenenzdokumenten A.0](./audits-mit-viva-unterstuetzen.md#referenzdokument-a0-it-sicherheitsrichtlinien) und [A.1](./audits-mit-viva-unterstuetzen.md#referenzdokument-a1-it-strukturanalyse) hinterlegen
    3. [Audits erstellen](./audits-mit-viva-unterstuetzen.md#audits-erstellen)
    4. Ausgabe nachbearbeiten

1. [préparation de l'installation de VIVA](./préparation-de-l'installation-de-VIVA.md) : Dans la documentation IT d'i-doit se trouvent des objets (y compris l'affectation des sites et des logiciels ainsi que les connexions de ports, si possible) qui sont modélisés en services et qui doivent être couverts par la protection IT de base.
2. gérer les catalogues IT-Grundschutz
    1. [Importer les catalogues ITrundschutz EL 15 de 2016](./procédure-avec-viva.md#importer-catalogues)
    2. adapter les blocs, les mesures et les dangers (en option)
3. modéliser le réseau d'information avec des groupes et des objets cibles
    1. [créer un réseau d'information](./procédure-avec-viva.md#modéliser-un-réseau-d'information%C3%BCnde)
    2. exécuter [Assistant de services informatiques (couche 5 _Applications_)](./viva-assistants.md#assistant de services informatiques-couche-5-applications) ; ensuite :
    3. [Assistant d'application (couche 3 _systèmes_IT)](./viva-assistants.md#assistant-infrastructure-couche-3-it-systèmes)
    4. [Assistant système informatique (couche 2 _infrastructure_)](./viva-assistants.md#assistant-système-it-couche-2-infrastructure)
    5. [Assistant système informatique (couche 4 _réseaux_)](./viva-assistants.md#it-system-assistent-schicht-4-netze)
4. déterminer les besoins de protection
    1. [Adapter les catégories de besoins de protection](./procédure-avec-viva.md#définir-catégories-de-besoins-de-protection)
    2. [Déterminer les besoins de protection des groupes cibles dans la couche 5 _Applications_](./viva-assistants.md#it-service-assistant-couche-5-applications) ; ensuite exécuter les assistants :
    3. [Assistants des besoins de protection (couche 3 _systèmes-IT_)](./viva-assistants.md#assistant-infrastructure-couche-3-it-systèmes)
    4. [Assistants des besoins de protection (couche 2 _infrastructure_)](./viva-assistenten.md#it-system-assistent-schicht-2-infrastruktur)
5. attribuer des blocs et mettre en œuvre des mesures
    1. [Affecter les modules nécessaires par groupe cible](./procédure-avec-viva.md#affecter-des-briques)
    2. documenter la mise en œuvre des mesures par groupe cible](./procédure-avec-viva.md#ma%C3%9Mise-en-œuvre)
    3. répondre aux questions de contrôle](./procédure-avec-viva.md#pr%C3%BCquestion-réponse)
6. effectuer une analyse des risques
    1. [Effectuer une analyse de sécurité complémentaire](./procédure-avec-viva.md#erg%C3%A4nnzende-sicherheitsanalyse-durchf%C3%BChren)
    2. [Effectuer une analyse des risques, le cas échéant](./analyse-des-risques-selon-it-fondamental.md#analyse-des-risques-selon-it-fondamental)
7. établir un audit
    1. [Vérifier les rapports](./rapports-avec-viva.md) et, le cas échéant, répéter les étapes 2 à 5 jusqu'à ce que les rapports ne donnent plus de résultats négatifs inévitables.
    2. déposer des informations sur les [documents de référence A.0](./audits-avec-viva-support.md#document-de-référence-a0-it-directives-sécurité) et [A.1](./audits-avec-viva-support.md#document-de-référence-a1-it-analyse-structure)
    3. créer des [audits](./audits-avec-viva-support.md#créer-des-audits)
    4. retravailler la sortie
