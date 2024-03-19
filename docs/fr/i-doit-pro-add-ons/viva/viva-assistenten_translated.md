<!-- TRANSLATED by md-translate -->
# VIVA-Assistenten

# Assistants VIVA

Während im Kapitel zur _[Vorgehensweise mit VIVA](./vorgehensweise-mit-viva.md)_ ein manueller Weg beschrieben wird, um alle IT-Grundschutz-relevanten Informationen zu dokumentieren, umfasst das [Add-on](../index.md) **VIVA** eine Vielzahl an Assistenten, um diesen Weg teil-automatisiert zu gestalten. Die Assistenten analysieren im Vorfeld die Daten in VIVA und in der CMDB von i-doit, um daraus Vorschläge zu generieren, die der Anwender anschließend nachbearbeiten und/oder übernehmen kann. Komplexe Zusammenhänge innerhalb des Informationsverbunds werden dadurch sichtbar. Der Anwender hat somit die Möglichkeit, schneller und komfortabler zu dokumentieren.

Alors que le chapitre sur la _[procédure avec VIVA](./procédure-avec-viva.md)_ décrit une méthode manuelle pour documenter toutes les informations pertinentes pour la protection de base des TI, le [Add-on](../index.md) **VIVA** comprend un grand nombre d'assistants permettant d'automatiser partiellement cette procédure. Les assistants analysent au préalable les données dans VIVA et dans la CMDB d'i-doit afin de générer des propositions que l'utilisateur peut ensuite retravailler et/ou reprendre. Les relations complexes au sein du réseau d'informations deviennent ainsi visibles. L'utilisateur a ainsi la possibilité de documenter plus rapidement et plus confortablement.

[![Aktions- und Navigationsleiste der Zielgruppen](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/1-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/1-va.png)

[ ![Barre d'action et de navigation des groupes cibles](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/1-va.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/1-va.png)

Zu finden sind die Assistenten unterhalb eines jeden Informationsverbunds als Buttons in den jeweiligen Aktions- und Navigationsleisten. Beim Aufruf eines Assistenten öffnet sich ein Popup, welches sich nahtlos in die Oberfläche von VIVA einfügt. Die Assistenten arbeiten allesamt nach einem ähnlichen Schema:

Les assistants se trouvent sous chaque groupe d'informations sous forme de boutons dans les barres d'action et de navigation respectives. Lorsqu'un assistant est appelé, une fenêtre pop-up s'ouvre et s'intègre parfaitement dans l'interface de VIVA. Les assistants fonctionnent tous selon un schéma similaire :

1. Daten aus VIVA und/oder derIT-Dokumentation von i-doit analysieren
2. Vorschläge zusammenstellen und visuell aufbereiten
3. Vorschläge nachbearbeiten durch den Anwender
4. Vorschläge speichern oder verwerfen durch den Anwender

1. analyser les données de VIVA et/ou de la documentation IT d'i-doit
2. rassembler les propositions et les présenter visuellement
3. retravailler les propositions par l'utilisateur
4. sauvegarde ou rejet des propositions par l'utilisateur

Die Assistenten unterstützen einen umfangreichen Prozess, der sich durch einen wesentlichen Teil der Dokumentation hindurchzieht. Dieser Prozess wird als mögliche Vorgehensweise im Kapitel _[Beispiel eines möglichen Arbeitsablaufs](./arbeitsablauf-mit-viva.md)_ erläutert.

Les assistants soutiennent un vaste processus qui s'étend sur une partie importante de la documentation. Ce processus est expliqué en tant que procédure possible dans le chapitre _[Exemple d'un processus de travail possible](./processus-de-travail-avec-viva.md)_.

Im Folgenden wird auf die spezifischen Eigenschaften der verschiedenen Assistenten eingegangen. Diese werden in[_Zielgruppen-Assistenten_](#zielgruppen-assistenten) und [_Schutzbedarfs-Assistenten_](#VIVAAssistenten-Schutzbedarfs-Assistenten) unterteilt.

Les caractéristiques spécifiques des différents assistants sont décrites ci-dessous. Ceux-ci sont divisés en [_Assistants groupes cibles_](#assistantsgroupescibles) et [_Assistants besoins de protection_](#assistantsVIVA-assistantsbesoinsdeprotection).

## Zielgruppen-Assistenten

## Assistants de groupe cible

Diese Art von Assistenten schlägt geeignete [Zielgruppen](./vorgehensweise-mit-viva.md#zielgruppen-anlegen) auf Basis bestehender Daten vor. Neue Zielgruppen mit IT-Grundschutz-Nummer und Bezeichnung lassen sich dadurch bequem anlegen. Vorschläge können verworfen oder, wenn sinnvoll, erweitert werden. Nachfolgend werden die einzelnen Assistenten näher erläutert. Die Reihenfolge bezieht sich auf die mögliche Vorgehensweise, die im Anhang [_Beispiel eines möglichen Arbeitsablaufs_](./arbeitsablauf-mit-viva.md) beschrieben ist. Zu finden sind die Assistenten innerhalb der jeweiligen Schichten.

Ce type d'assistant propose des [groupes cibles] appropriés(./procédure-avec-viva.md#créer-des-groupes-cibles) sur la base des données existantes. Il est ainsi possible de créer facilement de nouveaux groupes cibles avec un numéro et une désignation IT-Grundschutz. Les propositions peuvent être rejetées ou, si cela s'avère judicieux, étendues. Les différents assistants sont expliqués plus en détail ci-après. L'ordre se réfère à la procédure possible décrite dans l'annexe [_exemple d'un processus de travail possible_](./processus-de-travail-avec-viva.md). Les assistants se trouvent dans les équipes respectives.

| Assistenten | Quelle: Objekttypen | Quelle: Kategorien |
| --- | --- | --- |
| [IT-Service-Assistent (Schicht 5 _Anwendungen_)](#it-service-assistent-schicht-5-anwendungen) | IT-Service | IT-Service-Komponenten |
| [Anwendungs-Assistent (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) | Software (Anwendungen, Dienste, Betriebsysteme, usw.) | Softwarezuweisung, Installation |
| [IT-System-Assistent (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Standortzuweisung |
| [IT-System-Assistent (Schicht 4 _Netze_)](#it-system-assistent-schicht-4-netze) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Netzwerkports |
| [IT-System-Assistent (Schicht 5 _Anwendungen_)](#it-service-assistent-schicht-5-anwendungen) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Softwarezuweisung, Installation |
| [Infrastruktur-Assistent (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) | Container-Objekte (Gebäude, Räume, usw.) | Standortzuweisung |

| Assistants | Source : Types d'objets | Source : Catégories |
| --- | --- | --- |
| [Assistant de service informatique (couche 5 _Applications_)](#it-service-assistant-couche-5-applications) | Service informatique | Composants de service informatique |
| [Assistant applications (couche 3 _systèmes_IT)](#assistant-infrastructure-couche-3-it-systèmes) | Logiciels (applications, services, systèmes d'exploitation, etc.) | Attribution de logiciels, installation |
| [Assistant système IT (couche 2 _infrastructure_)](#it-assistant-système-couche-2-infrastructure) | Matériel actif (virtuel) (serveurs, clients, etc.) | Attribution de site |
| [Assistant système IT (Couche 4 _Réseaux_)](#it-system-assistent-schicht-4-netze) | (Virtuel) Matériel actif (serveurs, clients, etc.) | Ports réseau |
| [Assistant système informatique (couche 5 _Applications_)](#it-service-assistant-couche-5-applications) | (Virtuel) Matériel actif (serveurs, clients, etc.) | Attribution de logiciels, installation |
| [Assistant d'infrastructure (couche 3 _systèmes_IT)](#assistantd'infrastructure-couche-3-it-systèmes) | Objets conteneurs (bâtiments, salles, etc.) | Attribution de site |

### IT-Service-Assistent (Schicht 5 _Anwendungen_)

### Assistant de service informatique (couche 5 _Applications_)

Dieser Assistent analysiert die CIs vom Typ _Service_ in derIT-Dokumentation von i-doit, genauer: die Kategorie _Service-Komponenten_. Die Komponenten werden unter verschiedenen Gesichtspunkten analysiert und gegebenenfalls in die Liste der vorzuschlagenen Zielobjekte aufgenommen. Dabei wird rekursiv vorgegangen. Folgende CIs werden vorgeschlagen, wenn sie gefunden werden:

Cet assistant analyse les CI de type _Service_ dans la documentation IT d'i-doit, plus précisément la catégorie _Composants de service_. Les composants sont analysés sous différents aspects et, le cas échéant, ajoutés à la liste des objets cibles à proposer. Pour ce faire, on procède de manière récursive. Les CI suivants sont proposés lorsqu'ils sont trouvés :

* Der Service selbst
* Untergeordnete Services; deren Komponenten werden wiederum analysiert
* Software-CIs
* Installierte Software von Komponenten (basierend auf der Kategorie _Softwarezuweisung_ sprich CIs vom Typ _Anwendung_, _Systemdienst, Betriebssystem, usw.)_
* Installierte Software (basierend auf dem Beziehungsobjekt)
* Mitglieder von Objektgruppen
* Mitglieder von Cluster
* Clusterdienste

* Le service lui-même
* Services subordonnés ; leurs composants sont à leur tour analysés
* Les CI logiciels
* Logiciels installés des composants (basés sur la catégorie _Attribution de logiciels_ c'est-à-dire les CI de type _application_, _service système, système d'exploitation, etc.
* Logiciels installés (basés sur l'objet de relation)
* Membres de groupes d'objets
* Membres de clusters
* Services de cluster

Auch wenn keine passenden CIs identifiziert werden, wird aus dem Service ein Vorschlag generiert. Das Gesamtergebnis der Analyse - und damit der Vorschlag - besteht aus einer Liste von Services, deren Namen (bestehend aus dem Objekt-Titel) für die Gruppen-Bezeichner verwendet werden, und dazu optional passende CIs, die den Kriterien der Schicht entsprechen sprich eine Anwendung im weiteren Sinne darstellen.

Même si aucun CI correspondant n'est identifié, une proposition est générée à partir du service. Le résultat global de l'analyse - et donc la proposition - se compose d'une liste de services dont le nom (composé du titre de l'objet) est utilisé pour les identificateurs de groupe et, en option, des CI correspondants qui répondent aux critères de la couche, c'est-à-dire qui représentent une application au sens large.

[![IT-Service-Assistent (Schicht 5 Anwendungen)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/2-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/2-va.png)

[ ![Assistant de service informatique (applications de niveau 5)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistenten/2-va.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistenten/2-va.png)

**Beispiel:** In der IT-Dokumentation von i-doit gibt es ein Objekt vom Typ _Service_ mit der Bezeichnung "Web". In dessen Kategorie _Service-Komponenten_ sind drei Objekte verknüpft: ein Software-Objekt vom Typ _Anwendungen_ ("Apache HTTP Server"), ein Objekt vom Typ _Server_ ("Webserver"), auf dem eine Anwendung installiert ist (Kategorie _Softwarezuweisung_; namentlich "Shop"), und ein Beziehungsobjekt (welches eine Software-Zuweisung darstellt; namentlich "nginx läuft auf Reverse Proxy"). Daraus wird der Vorschlag für eine Zielgruppe generiert: Der Name entspricht dem Service, demnach "Web". Als verknüpfte Zielobjekte werden die Anwendung "Apache HTTP Server", "Shop" und "ngnix" herangezogen.

**Exemple:** Dans la documentation IT d'i-doit, il existe un objet de type _Service_ nommé "Web". Dans sa catégorie _Composants de service_, trois objets sont liés : un objet logiciel de type _Applications_ ("Serveur HTTP Apache"), un objet de type _Serveur_ ("Serveur Web") sur lequel est installée une application (catégorie _Affectation logicielle_ ; nommée "Boutique"), et un objet de relation (qui représente une affectation logicielle ; nommée "nginx fonctionne sur Reverse Proxy"). La proposition de groupe cible est générée à partir de ces éléments : Le nom correspond au service, par conséquent "Web". L'application "Apache HTTP Server", "Shop" et "ngnix" sont utilisés comme objets cibles liés.

### Anwendungs-Assistent (Schicht 3 IT-Systeme)

### Assistant d'application (Systèmes informatiques de niveau 3)

Um Zielgruppen der Schicht _IT-Systeme_ vorgeschlagen zu bekommen, bietet sich dieser Assistent an. Er zieht Daten aus der Schicht 5 _Anwendungen_ heran. Befinden sich dort Zielgruppen, deren Zielobjekte eine Relation zu potenziellen Zielobjekten dieser Schicht haben, werden diese gruppiert und als eine oder mehrere Gruppen vorgeschlagen.

Cet assistant permet de proposer des groupes cibles de la couche _Systèmes informatiques_. Il utilise les données de la couche 5 _Applications_. S'il s'y trouve des groupes cibles dont les objets cibles ont une relation avec des objets cibles potentiels de cette couche, ceux-ci sont regroupés et proposés comme un ou plusieurs groupes.

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/3-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/3-va.png)

[ ![Assistant d'application (couche 3 systèmes informatiques)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/3-va.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/3-va.png)

**Beispiel:** In Schicht 5 _Anwendungen_ befindet sich die Gruppe "A 1 Web". Dort enthalten ist das Zielobjekt "Apache HTTP Server", das aus dem gleichnamigen Objekt in der CMDB resultiert. Dieses (Software-)Objekt ist auf einem Server ("Webserver") installiert (Kategorie _Installation_ beziehungsweise _Softwarezuweisungen_). Dieser Server eignet sich folglich als Zielobjekt für eine Gruppe in der Schicht 3 _IT-Systeme_. Ist dieses Zielobjekt auch tatsächlich noch keiner Zielgruppe zugeordnet, wird daraus der Vorschlag generiert, eine Zielgruppe zu erstellen, die das CI "Webserver" beinhaltet.

**Exemple:** Dans la couche 5 _Applications_ se trouve le groupe "A 1 Web". On y trouve l'objet cible "Apache HTTP Server", qui résulte de l'objet du même nom dans la CMDB. Cet objet (logiciel) est installé sur un serveur ("serveur web") (catégorie _Installation_ ou _Affectations logicielles_). Ce serveur convient donc comme objet cible pour un groupe de la couche 3 _Systèmes informatiques_. Si cet objet cible n'est effectivement pas encore attribué à un groupe cible, la proposition de créer un groupe cible contenant le CI "serveur web" est générée.

### IT-System-Assistent (Schicht 2 _Infrastruktur_)

### Assistant système informatique (couche 2 _infrastructure_)

In Gebäuden und Räumen stehen Hardware-Komponenten. Existieren zur Hardware entsprechende Zielgruppen in der Schicht 3 _IT-Systeme_, so ist es ratsam, diese Gebäude und Räume ebenfalls zu Zielgruppen zusammenzufassen. Dies übernimmt dieser Assistent. Er analysiert die Standortzuordnungen aus bereits existierenden Zielobjekten der Schicht 3 und generiert daraus Vorschläge für Zielgruppen aus der Schicht 2 _Infrastruktur_. Hierbei werden alle Zielobjekte der Schicht 3 berücksichtigt, die zwar eine Standortzuweisung haben, doch dessen Standort noch nicht als Zielobjekt einer Gruppe in Schicht 2 erfasst worden ist. Als Zielobjekte der Schicht 2 kommen alle Container-Objekte in Frage, d. h., es handelt sich um Objekte, deren Objekttyp sich als Standort eignet. Die Vorschläge sind rekursiv, folglich wird die gesamte Kette an Standortzuweisungen berücksichtigt (exklusive "Root-Lokation").

Les bâtiments et les salles contiennent des composants matériels. S'il existe des groupes cibles correspondant au matériel dans la couche 3 _Systèmes IT_, il est conseillé de regrouper également ces bâtiments et pièces en groupes cibles. C'est ce que fait cet assistant. Il analyse les affectations de sites à partir des objets cibles déjà existants de la couche 3 et génère à partir de là des propositions pour les groupes cibles de la couche 2 _Infrastructure_. Il prend en compte tous les objets cibles de la couche 3 qui ont certes une affectation de site, mais dont le site n'a pas encore été saisi comme objet cible d'un groupe de la couche 2. Tous les objets conteneurs entrent en ligne de compte comme objets cibles de la couche 2, c'est-à-dire qu'il s'agit d'objets dont le type d'objet convient comme site. Les propositions sont récursives, c'est-à-dire que toute la chaîne des affectations de localisation est prise en compte (à l'exception de la localisation "racine").

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/4-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/4-va.png)

[ ![Assistant d'application (couche 3 systèmes informatiques)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/4-va.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/4-va.png)

**Beispiel:** In der Schicht 2 _IT-Systeme_ existiert die Zielgruppe "S 1 Webserver", der das Zielobjekt "Webserver" zugeordnet ist. Dieser Server steht im Raum "Serverraum I". Der Raum befindet sich im "Hauptgebäude". Soweit noch nicht geschehen, schlägt der Assistent vor, eine Zielgruppe zu erstellen, die Raum und Gebäude beinhaltet.

**Exemple:** Dans la couche 2 _Systèmes informatiques_, il existe le groupe cible "S 1 Serveur web", auquel est attribué l'objet cible "Serveur web". Ce serveur se trouve dans la salle "Salle des serveurs I". Cette salle se trouve dans le "bâtiment principal". Si ce n'est pas déjà fait, l'assistant propose de créer un groupe cible qui comprend la salle et le bâtiment.

### IT-System-Assistent (Schicht 4 _Netze_)

### Assistant système informatique (couche 4 _réseaux_)

In der IT-Dokumentation von i-doit gibt es viele Möglichkeiten, Verbindungen zwischen zwei Objekten zu dokumentieren. Eine Wesentliche ist die Verbindung über Netzwerkports. Auf diese Weise können ganze Netzwerk-Infrastrukturen bis ins kleinste Detail modelliert werden. Diese Daten nutzt dieser Assistent, um Kommunikationsverbindungen zwischen Zielgruppen vorzuschlagen. Diese Zielgruppen stammen alle aus der Schicht 3 _IT-Systeme_. Der Assistent analysiert demnach Zielobjekte aus Schicht 3, denen ein Objekt in der CMDB entspricht, das Einträge in der Kategorie _Netzwerkports_ hat. Wie in der Kategorie _Portübersicht_ gibt es möglicherweise eine Verbindung zwischen zwei oder mehreren Objekten mit Anfang (das Objekt selbst), Zwischenobjekten (zum Beispiel passive Komponenten wie Patchpanels) und einem Endobjekt, das für die weitere Analyse herangezogen wird. Gibt es zu diesem Endobjekt ein Zielobjekt in der Schicht 3 _IT-Systeme_, wird untersucht, ob dieses Zielobjekt einer Zielgruppe zugeordnet ist, die noch keine Kommunikationsverbindung mit der Zielgruppe des Anfangsobjekts hat. Sollte dies der Fall sein, werden beide Zielgruppen als Kommunikationsverbindungen vorgeschlagen.

Dans la documentation informatique d'i-doit, il existe de nombreuses possibilités de documenter les connexions entre deux objets. L'une des plus importantes est la connexion via des ports réseau. De cette manière, des infrastructures de réseau entières peuvent être modélisées dans les moindres détails. Cet assistant utilise ces données pour proposer des liens de communication entre des groupes cibles. Ces groupes cibles proviennent tous de la couche 3 _systèmes informatiques_. L'assistant analyse donc les objets cibles de la couche 3 auxquels correspond un objet de la CMDB qui a des entrées dans la catégorie _Ports réseau_. Comme dans la catégorie _Aperçu des ports_, il peut y avoir un lien entre deux ou plusieurs objets avec un début (l'objet lui-même), des objets intermédiaires (par exemple des composants passifs comme les panneaux de brassage) et un objet final qui sera utilisé pour la suite de l'analyse. S'il existe un objet cible pour cet objet final dans la couche 3 _Systèmes IT_, on examine si cet objet cible est affecté à un groupe cible qui n'a pas encore de lien de communication avec le groupe cible de l'objet initial. Si c'est le cas, les deux groupes cibles sont proposés comme liens de communication.

Kommunikationsverbindungen führen letztlich zu einem "bereinigten Netzplan", der von den Details abstrahiert und nur wesentliche Informationen zulässt, um die Übersichtlichkeit zu wahren. Daher muss auch vom Detailreichtum der CMDB-Daten abstrahiert werden, was der Assistent versucht, dem Anwender abzunehmen.

Les liens de communication conduisent en fin de compte à un "réseau épuré" qui fait abstraction des détails et n'autorise que les informations essentielles afin de préserver la clarté. Il faut donc également faire abstraction de la richesse des détails des données CMDB, ce que l'assistant tente de faire à la place de l'utilisateur.

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/5-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/5-va.png)

[ ![Assistant d'application (couche 3 systèmes informatiques)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/5-va.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/assistants/5-va.png)

**Beispiel:** Ein Objekt vom Typ _Server_ mit der Bezeichnung "Webserver" gehört als Zielobjekt zur Zielgruppe "S 1 Webserver" (Schicht 3 _IT-Systeme_). Ebenfalls in dieser Schicht existiert die Zielgruppe "SW 1 Switch" mit dem Zielobjekt "Switch I", hinter dem sich das gleichnamige Objekt in der CMDB verbirgt. In der CMDB sind beide Objekte über die Port-Kategorie miteinander verbunden. Auch die Tatsache, dass zwischen beiden passive Komponenten wie Patchpanels zwischengeschaltet sind, hat keine Auswirkungen. Sollten nun beide Zielgruppen noch nicht über eine gemeinsame Kommunikationsverbindung in Schicht 3 _Netze_ verfügen, schlägt der Assistent diese vor.

**Exemple:** Un objet de type _Serveur_ avec la désignation "Serveur Web" appartient comme objet cible au groupe cible "S 1 Serveur Web" (couche 3 _Systèmes IT_). Dans cette couche également, il existe le groupe cible "SW 1 Switch" avec l'objet cible "Switch I", derrière lequel se cache l'objet du même nom dans la CMDB. Dans la CMDB, les deux objets sont reliés entre eux par la catégorie de port. Le fait que des composants passifs tels que des panneaux de brassage soient intercalés entre les deux n'a pas non plus d'effet. Si les deux groupes cibles ne disposent pas encore d'une connexion de communication commune dans la couche 3 _Réseaux_, l'assistant la propose.

### IT-System-Assistent (Schicht 5 _Anwendungen_)

### Assistant système informatique (couche 5 _Applications_)

Analog zum [Anwendungs-Assistent (Schicht 3 IT-Systeme)](./viva-assistenten.md) verfährt dieser Assistent: Auf Basis der Zielgruppen in Schicht 3 werden Vorschläge für Zielgruppen der Schicht 5 _Anwendungen_ generiert. Dazu wird die Kategorie _Softwarezuweisung_ in der CMDB von i-doit herangezogen.

Cet assistant procède de manière analogue à [Assistant d'application (couche 3 Systèmes informatiques)](./viva-assistants.md) : sur la base des groupes cibles de la couche 3, des propositions sont générées pour les groupes cibles de la couche 5 _Applications_. Pour cela, la catégorie _Affectation des logiciels_ dans la CMDB d'i-doit est utilisée.

### Infrastruktur-Assistent (Schicht 3 _IT-Systeme_)

### Assistant d'infrastructure (couche 3 _systèmes informatiques_)

Ähnlich wie beim vorherigen Assistenten verhält sich dieser analog zum [IT-System-Assistenten (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur). Zielgruppen aus der Schicht 2 _Infrastruktur_ werden analysiert, ob daraus Zielgruppen der Schicht 3 generiert werden können. Dazu dient die Kategorie _Standortzuweisung_ in der CMDB von i-doit.

Comme pour l'assistant précédent, il se comporte de manière analogue à [Assistant système informatique (couche 2 _infrastructure_)](#it-system-assistent-schicht-2-infrastruktur). Les groupes cibles de la couche 2 _Infrastructure_ sont analysés afin de déterminer s'ils peuvent être utilisés pour générer des groupes cibles de la couche 3. La catégorie _Affectation des sites_ dans la CMDB d'i-doit sert à cela.

## Schutzbedarfs-Assistenten

## Assistants de besoin de protection

Assistenten dieser Art machen Vorschläge, wie der [Schutzbedarf](./vorgehensweise-mit-viva.md#schutzbedarf-festlegen) gestaltet werden sollte. Dazu werden zusammengehörige Zielgruppen analysiert, sodass sich eine Vererbung des Schutzbedarfs ergibt, wie er im BSI-Standard vorgeschlagen wird. (Siehe BSI-Standard 100-2, Kapitel 4.3 _Schutzbedarfsfeststellung_.) Kurz zusammengefasst wird die zu jedem Grundwert (Vertraulichkeit, Integrität, Verfügbarkeit) höchste Schutzklasse (normal, hoch, sehr hoch) vererbt. Die Beispiele in den folgenden Abschnitten verdeutlichen das Prinzip.

Les assistants de ce type font des propositions sur la manière dont le [besoin de protection](./procédure-avec-viva.md#définir-besoin-de-protection) devrait être conçu. Pour ce faire, les groupes cibles associés sont analysés, de sorte qu'il en résulte un héritage du besoin de protection, tel qu'il est proposé dans la norme BSI. (Voir norme BSI 100-2, chapitre 4.3 _Détermination des besoins de protection_.) En résumé, la classe de protection la plus élevée (normale, élevée, très élevée) pour chaque valeur de base (confidentialité, intégrité, disponibilité) est héritée. Les exemples des paragraphes suivants illustrent ce principe.

Die Assistenten befinden sich innerhalb der Zielgruppen, um die jeweilige Schutzbedarfsfeststellung direkt zu assistieren. Soll der Schutzbedarf für mehrere Zielgruppen gleichzeitig bearbeitet werden, bieten sich die Assistenten innerhalb der Schichten an. Im Folgenden wird auf den jeweiligen Assistenten einer Schicht eingegangen. Hierbei lassen sich Vorschläge für die Schichten [2 _Infrastruktur_](#it-system-assistent-schicht-2-infrastruktur) und [3 _IT-Systeme_](#it-system-assistent-schicht-2-infrastruktur) generieren.

Les assistants se trouvent à l'intérieur des groupes cibles afin d'assister directement l'établissement des besoins de protection respectifs. Si les besoins de protection doivent être traités simultanément pour plusieurs groupes cibles, les assistants se trouvent au sein des couches. Les assistants d'une couche sont décrits ci-après. Il est possible de générer des propositions pour les couches [2 _infrastructure_](#it-system-assistent-schicht-2-infrastruktur) et [3 _IT-Systeme_](#it-system-assistent-schicht-2-infrastruktur).

### Schutzbedarfs-Assistenten (Schicht 3 _IT-Systeme_)

### Assistants de besoin de protection (couche 3 _systèmes informatiques_)

Ähnlich dem [Anwendungs-Assistenten (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) werden die Zielgruppen der Schicht 5 _Anwendungen_ daraufhin analysiert, ob sie in Relation zu einer bestimmten Gruppe (oder mehreren) dieser Schicht stehen. Hierbei werden die Informationen zur Softwarezuweisung/Installation herangezogen.

De manière similaire à [l'assistant d'application (couche 3 _systèmes IT_)](#assistant-infrastructure-couche-3-it-systèmes), les groupes cibles de la couche 5 _applications_ sont analysés afin de déterminer s'ils sont en relation avec un certain groupe (ou plusieurs) de cette couche. Pour ce faire, les informations relatives à l'attribution/l'installation des logiciels sont utilisées.

**Beispiel:** Es existiert die Zielgruppe "Website" in der Schicht 5 _Anwendungen_. Der Schutzbedarf ist wie folgt gesetzt:

**Exemple:** Il existe le groupe cible "site web" dans la couche 5 _Applications_. Le besoin de protection est défini comme suit :

* Vertraulichkeit: normal
* Integrität: normal
* Verfügbarkeit: sehr hoch

* Confidentialité : normale
* Intégrité : normale
* Disponibilité : très élevée

Zudem existiert in derselben Schicht die Zielgruppe "Forum" mit dem festgestellten Schutzbedarf:

En outre, il existe dans la même couche le groupe cible "Forum" avec le besoin de protection constaté :

* Vertraulichkeit: hoch
* Integrität: normal
* Verfügbarkeit: hoch

* Confidentialité : élevée
* Intégrité : normale
* Disponibilité : élevée

In der Schicht 3 _IT-Systeme_ gibt es die entsprechende Zielgruppe "Webserver", auf dem die Website und das Forum gehostet sind. Der Assistent schlägt nun folgenden Schutzbedarf vor:

Dans la couche 3 _Systèmes informatiques_, il y a le groupe cible correspondant "Serveur web", sur lequel le site web et le forum sont hébergés. L'assistant propose maintenant le besoin de protection suivant :

* Vertraulichkeit: hoch
* Integrität: normal
* Verfügbarkeit: sehr hoch

* Confidentialité : élevée
* Intégrité : normale
* Disponibilité : très élevée

### Schutzbedarfs-Assistenten (Schicht 2 _Infrastruktur_)

### Assistants de besoin de protection (couche 2 _Infrastructure_)

Wie auch beim [IT-System-Assistenten (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur) wird die Standortzuweisung analysiert, um daraus den Schutzbedarf einer Zielgruppe (oder mehrerer) in Schicht 2 zu ermitteln, die im Zusammenhang mit einer Zielgruppe der Schicht 3 _IT-Systeme_ steht.

Comme pour [Assistant système informatique (couche 2 _infrastructure_)](#it-assistant-système-couche-2-infrastructure), l'attribution des sites est analysée afin d'en déduire les besoins de protection d'un (ou plusieurs) groupe(s) cible(s) de la couche 2, en relation avec un groupe cible de la couche 3 _systèmes informatiques_.

**Beispiel:** Es existiert in der Schicht 2 eine Zielgruppe "Serverraum". In diesem Raum stehen zwei Server, die durch die Zielgruppen "E-Mail-Server" und "Webserver" der Schicht 3 abgedeckt sind.

**Exemple:** Il existe dans la couche 2 un groupe cible "salle de serveurs". Dans cette salle se trouvent deux serveurs qui sont couverts par les groupes cibles "serveur de messagerie" et "serveur web" de la couche 3.

Schutzbedarf von "E-Mail-Server":

Besoin de protection du "serveur de messagerie

* Vertraulichkeit: sehr hoch
* Integrität: hoch
* Verfügbarkeit: sehr hoch

* Confidentialité : très élevée
* Intégrité : élevée
* Disponibilité : très élevée

Schutzbedarf von "Webserver":

Besoin de protection du "serveur web

* Vertraulichkeit: hoch
* Integrität: normal
* Verfügbarkeit: sehr hoch

* Confidentialité : élevée
* Intégrité : normale
* Disponibilité : très élevée

Aufgrund der Standortzuweisung schlägt der Assistent folgenden Schutzbedarf für "Serverraum" vor:

Sur la base de l'attribution des sites, l'assistant propose le niveau de protection suivant pour la "salle des serveurs" :

* Vertraulichkeit: sehr hoch
* Integrität: hoch
* Verfügbarkeit: sehr hoch

* Confidentialité : très élevée
* Intégrité : élevée
* Disponibilité : très élevée
