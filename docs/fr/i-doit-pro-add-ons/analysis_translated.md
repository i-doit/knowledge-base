<!-- TRANSLATED by md-translate -->
# Analysis

# Analyse

Das [Add-on](index.md) **Analyse** ermöglicht im Schwerpunkt zwei Anwendungen: Zum Einen untersucht es die Daten- und Dokumentationsqualität und liefert eine interaktive Ergebnisansicht mit dem ermittelten Status. Zum Anderen dient es der Simulation von Ausfällen. So können "Was passiert wenn"-Szenarien durchgespielt und in ihren Auswirkungen auf die Infrastruktur analysiert werden. Bei kombinierter Nutzung mit der Schnittstelle zur Monitoring-Lösung [Checkmk](../i-doit-pro-add-ons/checkmk2/index.md) können auch Live-Ausfälle entsprechend ihrer Auswirkung direkt untersucht werden.

Le [Add-on](index.md) **Analyse** permet deux applications principales : D'une part, il examine la qualité des données et de la documentation et fournit une vue interactive des résultats avec l'état déterminé. D'autre part, il sert à simuler des pannes. Il est ainsi possible de simuler des scénarios "que se passe-t-il si" et d'en analyser les conséquences sur l'infrastructure. En cas d'utilisation combinée avec l'interface de la solution de surveillance [Checkmk](../i-doit-pro-add-ons/checkmk2/index.md), il est également possible d'analyser directement les pannes en direct en fonction de leur impact.

## Download und Installation

## Téléchargement et installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](./index.md)".

Ce module complémentaire peut être installé ultérieurement. L'article "[i-doit pro Add-ons](./index.md)" fournit des descriptions détaillées concernant le téléchargement, l'installation, les mises à jour, etc.

## Konfiguration

## Configuration

Eine gesonderte Konfiguration ist nicht vorgesehen.

Une configuration séparée n'est pas prévue.

## Rechtevergabe

## Attribution de droits

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Analyse** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

Sous **Administration → Système de droits → Attribution des droits → Analyse**, il est possible d'adapter [Droits pour les personnes et groupes de personnes](../documentation efficace/administration des droits/index.md).

| Bedingung | Beschreibung |
| --- | --- |
| **Analysen** | Analysen durchführen |
| **Datenqualität-Profile verwalten** | Profile für die **Datenqualität** erstellen, bearbeiten und/oder unwiderruflich löschen |

| condition | description |
| --- | --- |
| **Analyses** | Effectuer des analyses |
| **Gérer les profils de qualité des données** | Créer, modifier et/ou supprimer irrévocablement des profils de **qualité des données** |

## Ausfallsimulation

## Simulation de panne

Möchte man herausfinden, welche Auswirkungen ein Ausfall eines bestimmten Objekts auf dokumentierte Services hat, hilft die passende Simulation unter **Extras → Analyse → Ausfallsimulation** weiter. Über den Tab **Manuelle Objektauswahl** kann man mehrere Optionen angeben:

Si l'on souhaite découvrir quelles sont les conséquences d'une défaillance d'un certain objet sur les services documentés, la simulation appropriée sous **Extras → Analyse → Simulation de défaillance** est d'une grande aide. L'onglet **Sélection manuelle de l'objet** permet de spécifier plusieurs options :

| Option | Beschreibung |
| --- | --- |
| **Objektauswahl** | Auswahl von einem oder mehreren Objekten, die ausgefallen sind (oder sein sollen) |
| **Servicefilter** | Eingrenzung der Analyse auf eine bestimmte Tiefe, bestimmte Objekttypen, -Beziehungen usw.; die Konfiguration befindet sich unter **Extras → Services → Servicefilter**. |
| **Ansicht** | Servicebaum vereinfacht darstellen |
| **Anzeigefilter** | Nachträgliche Filterung |

| option | description |
| --- | --- |
| **Sélection d'objets** | Sélection d'un ou plusieurs objets qui sont (ou doivent être) défaillants |
| **Filtre de service** | Limitation de l'analyse à une certaine profondeur, à certains types d'objets, à certaines relations, etc. ; la configuration se trouve sous **Outils → Services → Filtre de service**. |
| **Affichage** | Arborescence des services simplifiée |
| **Filtre d'affichage** | Filtrage ultérieur |

Nach Klick auf den Button **Simulation starten** wird unterhalb der Optionen das Ergebnis präsentiert: Erst folgt eine Auflistung der betroffenen Services, wobei auch in der Hierarchie übergeordnete Services aufgelistet sein können. Dies hängt vom gewählten **Servicefilter** ab. Pro Service wird eine **Ausfallschwere** angegeben und je nach Schweregrad von grün (leicht) bis rot (schwer) dargestellt. Hierbei wird die Gewichtung von [Objekt-Beziehungen](../grundlagen/objekt-beziehungen.md) ausgewertet. Folgt hinter dem numerischen Feld ein **C**, weißt dies darauf hin, dass das ausgefallene Objekt Teil eines Clusters ist.

Après avoir cliqué sur le bouton **Démarrer la simulation**, le résultat est présenté sous les options : Tout d'abord, une liste des services concernés s'affiche, sachant que des services supérieurs dans la hiérarchie peuvent également être listés. Cela dépend du **filtre de service** choisi. Pour chaque service, une **gravité de la panne** est indiquée et représentée selon le degré de gravité de vert (léger) à rouge (grave). La pondération de [relations entre objets](../bases/relations-objets.md) est ici évaluée. Si le champ numérique est suivi d'un **C**, cela indique que l'objet défaillant fait partie d'un cluster.

Unter **Baumansicht** wird ein Servicebaum aufgebaut, um den Ausfall auf diese Art zu visualisieren.

Sous **Affichage arborescent**, un arbre de service est construit pour visualiser la panne de cette manière.

[![Ausfallsimulation](../assets/images/de/i-doit-pro-add-ons/analysis/1-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/1-ans.png)

[ ![Simulation de défaillance](../assets/images/fr/i-doit-pro-add-ons/analysis/1-ans.png)](../assets/images/fr/i-doit-pro-add-ons/analysis/1-ans.png)

Über den Tab **Report Objektauswahl** hat man zusätzlich die Möglichkeit, basierend auf einem [Report](../auswertungen/report-manager.md) Objekte auszuwählen, die von einem Ausfall betroffen sind.

L'onglet **Sélection d'objets de rapport** permet en outre de sélectionner les objets concernés par une panne en se basant sur un [Rapport](../évaluations/report-manager.md).

## Ausfälle live

## Pannes en direct

Eine Variante der oben beschriebenen Ausfallsimulation befindet sich unter **Extras → Analyse → Ausfälle live**. i-doit greift hierbei auf die Schnittstelle zu einem konfigurierten [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) (beispielsweise [Checkmk](../i-doit-pro-add-ons/checkmk.md)) zurück. Aus zu analysierenden Soll-Daten werden Ist-Daten: Fällt tatsächlich ein Host aus, kann nun simuliert werden, welche Auswirkungen dieser Ausfall auf die dokumentierten Services hat.

Une variante de la simulation de panne décrite ci-dessus se trouve sous **Extras → Analyse → Pannes en direct**. i-doit recourt ici à l'interface d'un [Network Monitoring](../automatisierung-et-integration/network-monitoring/index.md) configuré (par exemple [Checkmk](../i-doit-pro-add-ons/checkmk.md)). Les données théoriques à analyser deviennent des données réelles : Si un hôte tombe effectivement en panne, il est maintenant possible de simuler les effets de cette panne sur les services documentés.

## Datenqualität

## Qualité des données

Über den Punkt **Extras → Analyse → Datenqualität** kann gemessen werden, inwiefern die IT-Dokumentation ausgefüllt ist. Hier liegt der Anspruch, dass [zu jedem sichtbaren Objekttypen jede zugeordnete Kategorie](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) eines jeden Objekts ausgefüllt ist. Dies definiert die Marke 100 Prozent.

Le point **Extras → Analyse → Qualité des données** permet de mesurer dans quelle mesure la documentation IT est remplie. C'est ici que se situe l'exigence que [pour chaque type d'objet visible, chaque catégorie attribuée](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) de chaque objet soit remplie. Cela définit la marque 100 pour cent.

Beispiel: Es existieren 21 Objekte vom Typ **Client**. Diesem Objekttypen sind 20 Kategorien zugeordnet. Um 100 Prozent zu erreichen, müssten für alle 21 Objekte alle Kategorien ausgefüllt sein. Besteht eine Lücke, verringert sich die prozentuale Angabe.

Exemple : il existe 21 objets de type **Client**. Vingt catégories sont attribuées à ce type d'objet. Pour atteindre 100 %, toutes les catégories doivent être remplies pour les 21 objets. S'il y a une lacune, le pourcentage diminue.

Zu jedem Objekttypen können weitere Details über den Button Detaillierte Informationen darstellen eingeblendet werden. Wenn Lücken bestehen, kann über die Lupe zu jeder Kategorie eine Liste von betroffenen Objekten generiert werden.

Pour chaque type d'objet, des détails supplémentaires peuvent être affichés en cliquant sur le bouton Afficher les informations détaillées. S'il existe des lacunes, une liste d'objets concernés peut être générée via la loupe pour chaque catégorie.

[![Datenqualität](../assets/images/de/i-doit-pro-add-ons/analysis/2-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/2-ans.png)

[ ![Qualité des données](../assets/images/fr/i-doit-pro-add-ons/analysis/2-ans.png)](../assets/images/fr/i-doit-pro-add-ons/analysis/2-ans.png)

Sollten Objekttypen und/oder Kategorien das Ergebnis verfälschen, kann man sie jeweils ausblenden. Daraufhin wird das Ergebnis neu berechnet. Solche Anpassungen kann in Profilen gespeichert werden, um sie später wieder aufzurufen. Dazu klickt man auf den Button **Speichern**. Anschließend vergibt man unter **Name** einen aussagekräftigen Titel. Unter **Benutzerspezifisch** gibt man an, ob nur der jeweilige Benutzer das Profil aufrufen darf oder ob es für alle Benutzer freigegeben ist. Bereits gespeicherte Profile erscheinen im linken Navigationsbaum unterhalb von **Datenqualität**.

Si les types d'objets et/ou les catégories faussent le résultat, il est possible de les masquer. Le résultat est alors recalculé. De telles adaptations peuvent être enregistrées dans des profils afin de pouvoir les rappeler ultérieurement. Pour cela, on clique sur le bouton **Enregistrer**. Ensuite, on attribue un titre significatif sous **Nom**. Sous **Spécifique à l'utilisateur**, on indique si seul l'utilisateur concerné peut appeler le profil ou si celui-ci est autorisé à tous les utilisateurs. Les profils déjà enregistrés apparaissent dans l'arbre de navigation de gauche, en dessous de **Qualité des données**.

[![Profil zur Datenqualität erstellen](../assets/images/de/i-doit-pro-add-ons/analysis/3-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/3-ans.png)

[ ![Créer un profil de qualité des données](../assets/images/fr/i-doit-pro-add-ons/analysis/3-ans.png)](../assets/images/fr/i-doit-pro-add-ons/analysis/3-ans.png)

## Objektkatalog

## Catalogue d'objets

Um sich auflisten zu lassen, welche Objekte zu einem Service gehören, dient der Punkt unter **Extras → Analyse → Objektkatalog**. Über **Objektauswahl** wählt man ein Objekt vom Typ **Service** aus. Danach grenzt man die Analyse optional über den **Servicefilter** ein. Ähnlich wie im [Report Manager](../auswertungen/report-manager.md) kann man die Anzeige der Objekte variieren, indem man aus [globalen und spezifischen Kategorien](../grundlagen/struktur-it-dokumentation.md) die passenden [Attribute](../grundlagen/struktur-it-dokumentation.md) wählt. Ein Klick auf **Objektdaten laden** generiert das tabellarische Ergebnis.

Pour obtenir une liste des objets qui appartiennent à un service, il faut utiliser le point sous **Extras → Analyse → Catalogue d'objets**. Avec **Sélection d'objet**, on choisit un objet de type **Service**. Ensuite, on délimite l'analyse en option via le **filtre de service**. Comme dans le [Report Manager](../exploitations/report-manager.md), il est possible de varier l'affichage des objets en choisissant parmi les [catégories globales et spécifiques](../bases/structure-it-documentation.md) les [attributs](../bases/structure-it-documentation.md) adéquats. Un clic sur **Charger les données de l'objet** génère le résultat sous forme de tableau.

[![Objektkatalog](../assets/images/de/i-doit-pro-add-ons/analysis/4-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/4-ans.png)

[ ![Catalogue d'objets](../assets/images/fr/i-doit-pro-add-ons/analysis/4-ans.png)](../assets/images/fr/i-doit-pro-add-ons/analysis/4-ans.png)

## Servicekosten

## Frais de service

Was kostet die Erbringung einer Dienstleistung? Diese Frage beantwortet der Punkt unter **Extras → Analyse → Servicekosten** auf Basis der IT-Dokumentation. Zuerst wählt man unter **Objektauswahl** ein Objekt vom Typ **Service** aus. Danach grenzt man die Analyse optional über den **Servicefilter** ein. Durch Klick auf den Button **Servicekosten berechnen** werden die Daten analysiert und aufbereitet. Das Ergebnis wird über den Punkt **Kosten Zusammenfassung** komprimiert dargestellt:

Combien coûte la fourniture d'un service ? Le point sous **Extras → Analyse → Coûts des services** répond à cette question sur la base de la documentation IT. Tout d'abord, on choisit sous **Sélection d'objets** un objet de type **Service**. Ensuite, on délimite l'analyse en option par le **filtre service**. En cliquant sur le bouton **Calculer les coûts de service**, les données sont analysées et préparées. Le résultat est présenté sous forme condensée via le point **Résumé des coûts** :

| Kategorie | Beschreibung |
| --- | --- |
| **Lizenzkosten** | Siehe Kategorie **Softwarezuweisung** |
| **Investitionskosten** | Siehe Kategorie **Buchhaltung** |
| **Jährliche Betriebskosten** | Siehe Kategorie **Buchhaltung** |
| **Vertragskosten** | Siehe Kategorie **Vertragszuweisung** |

| catégorie | description |
| --- | --- |
| **Coûts de licence** | Voir catégorie **Affectation du logiciel** |
| **Coûts d'investissement** | Voir catégorie **Comptabilité** |
| **Coûts d'exploitation annuels** | Voir catégorie **Comptabilité** |
| **Coût du contrat** | Voir catégorie **Affectation du contrat** |

Unter **Weitere Zusammenfassungen** wird der maximale Energiebedarf von Hardware-Objekten zusammengefasst (siehe Kategorie **Stromverbraucher**).

Sous **Autres résumés**, la consommation maximale d'énergie des objets matériels est résumée (voir la catégorie **Consommateurs d'énergie**).

Nach einem Tortendiagramm der oben genannten Kosten folgt eine detaillierte Aufschlüsselung, welche Daten pro **Kategorie** und analysiertes Objekt ausgewertet wurden.

Après un camembert des coûts susmentionnés, suit une ventilation détaillée des données analysées par **catégorie** et par objet analysé.

[![Servicekosten](../assets/images/de/i-doit-pro-add-ons/analysis/5-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/5-ans.png)

[ ![Coût du service](../assets/images/fr/i-doit-pro-add-ons/analysis/5-ans.png)](../assets/images/fr/i-doit-pro-add-ons/analysis/5-ans.png)

## Kategorie Analyse

## Catégorie Analyse

Jedem Objekt ist nach der Aktivierung des **Analyse**-Add-ons eine Kategorie mit demselben Namen **Analyse** zugeordnet. Über diese Kategorie gelangt man direkt zur **Ausfallsimulation**, wobei unter **Objektauswahl** das jeweilige Objekt bereits vorselektiert.

Après l'activation du module complémentaire **Analyse**, une catégorie du même nom **Analyse** est attribuée à chaque objet. Cette catégorie permet d'accéder directement à la **simulation de panne**, l'objet concerné étant déjà présélectionné sous **sélection d'objet**.

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.4 | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files |
| 1.3.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Service assignment is not displayed in data quality<br>[Bug] It is not possible to remove categories in data-quality profiles |
| 1.3 | 05.09.2022 | [Task] PHP 8.0 Compatibility <br/> [Task] Design Compatibility |
| 1.2 | 21.02.2022 | [Improvement] Dataquality on a report basis <br/> [Improvement] Implement API methods for the data quality report <br/> [Improvement] English add-on renaming to Analysis <br/> [Bug] Result In Objectcatalog Is Incomplete And Partially Incorrect |
| 1.1.4 | 20.10.2020 | [Bug] Missing option to add object types back into the data quality profiles after they were removed <br/> [Bug] Data quality is not evaluated correctly for user-defined categories |
| 1.1.3 | 04.05.2020 | [Bug] The "Report object selection" under "Failure simulation" must change the source for the reports. <br/> [Bug] Empty object types generate an SQL error in the data quality. <br/> [Bug] When opening data quality an SQL error is output |
| 1.1.2 | 05.07.2019 | [Bug] Impact simulation aborts with PHP fatal error |
| 1.1.1 | 05.12.2018 | [Verbesserung] PHP 7.2 Kompatibilität <br/> [Verbesserung] Links im Ergebnis der Ausfallsimulation sollten in einem neuen Browser-Fenster geöffnet werden <br/> [Bug] Objektkatalog: Anzeige der Attribute fehlerhaft <br/> [Bug] Objekt "Personen" fehlende Zuordnung von Arbeitsplätzen in der Detailansicht <br/> [Bug] Kein "Objektdaten laden" möglich, wenn bei Klick auf "Objektdaten laden" kein Objekt ausgewählt war |
| 1.1 | 19.07.2018 | [Verbesserung]  Neue Visualisierung im Datenqualität-Report[Änderung] Datenqualität zeigt Objekttyp Kabel nicht an <br/> [Bug] "Objekte ohne Daten auflisten" bei benutzerdefinierten Kategorien führt zu SQL-Fehler <br/> [Bug] Fehler beim Anzeigen der detaillierten Informationen in benutzerdefinierte Kategorien <br/> [Bug] Fehlermeldung im neuen Fenster nach Klick auf Objektlink in Datenqualität |
| 1.0.5 | 31.07.2017 | [Verbesserung]  Performance der Datenqualität verbessern <br/> [Verbesserung]  Neue Option zur Berechnung der Gesamtkosten <br/> [Bug] Eigene Objekt-Icons werden in der Datenqualität nicht skaliert <br/> [Bug] Servicekosten nutzen falsche Währungszeichen <br/> [Bug] Benutzerdefinierte Icons werden falsch dargestellt. |
| 1.0.4 | 02.05.2017 | [Bug] Bei der Ausführung einer Ausfallsimulation kommt es je nach Größe der Datenbank zu einem Timeout |
| 1.0.3 | 08.03.2017 | [Änderung] Verbesserte Stabilität und Performance in der internen Auswertung des Servicebaums <br/> [Bug] Aufrufen der Servicekosten gibt Fehler aus <br/> [Bug] Benutzerdefinierte Kategorien werden nicht ausgewertet <br/> [Bug] get_currency() Fehler beim Ausführen der Reportview "Servicekosten" |
| 1.0.2 | 09.03.2015 |     |
| 1.0.1 | 23.09.2014 | [Bug] Änderung der Gewichtung einer Beziehung hat keinen Einfluss auf die "Ausfallschwere". <br/> [Bug] Kategorie "Netzverbindungen" zeigt immer eine Datenqualität von 0% an. <br/> [Bug] Kategorie "Schränke" wird immer mit einer Datenqualität von 0% angegeben. |
| 1.0 | 20.08.2014 | Initiales Release |

| version | date | changelog |
| --- | --- | --- |
| 1.4 | 07.11.2023 | [Tâche] Utiliser de nouvelles routes pour afficher les images d'objet et de type d'objet / déplacer les fichiers liés aux modules complémentaires |
| 1.3.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Service assignment is not displayed in data quality<br>[Bug] It is not possible to remove categories in data-quality profiles |
| 1.3 | 05.09.2022 | [Tâche] Compatibilité PHP 8.0 <br/> [Tâche] Compatibilité de conception |
| 1.2 | 21.02.2022 | [Improvement] Data Quality on a Report basis <br/> [Improvement] Implement API methods for the data quality report <br/> [Improvement] English add-on renaming to Analysis <br/> [Bug] Result In Objectcatalog Is Incomplete And Partially Incorrect |
| 1.1.4 | 20.10.2020 | [Bug] Option manquante pour ajouter à nouveau des types d'objets dans les profils de qualité des données après leur suppression <br/> [Bug] La qualité des données n'est pas évaluée correctement pour les catégories définies par l'utilisateur |
| 1.1.3 | 04.05.2020 | [Bug] La "Sélection d'objet de rapport" sous "Simulation d'échec" doit changer la source pour les rapports. <br/> [Bug] Les types d'objets vides génèrent une erreur SQL dans la qualité des données. <br/> [Bug] Lors de l'ouverture de la qualité des données, une erreur SQL est émise |
| 1.1.2 | 05.07.2019 | [Bug] Abandon de la simulation d'impact avec erreur fatale PHP |
| 1.1.1 | 05.12.2018 | [Amélioration] Compatibilité PHP 7.2 <br/> [Amélioration] Les liens dans le résultat de la simulation de défaillance devraient s'ouvrir dans une nouvelle fenêtre du navigateur <br/> [Bug] Catalogue d'objets : Affichage des attributs erroné <br/> [Bug] Objet "Personnes" attribution des postes de travail manquante dans la vue détaillée <br/> [Bug] Impossible de "Charger les données de l'objet" si aucun objet n'était sélectionné lors du clic sur "Charger les données de l'objet" |
| 1.1 | 19.07.2018 | [Amélioration] Nouvelle visualisation dans le rapport de qualité des données[Modification] Qualité des données n'affiche pas le type d'objet Câble <br/> [Bug] "Lister les objets sans données" dans les catégories définies par l'utilisateur entraîne une erreur SQL <br/> [Bug] Erreur lors de l'affichage des informations détaillées dans les catégories définies par l'utilisateur <br/> [Bug] Message d'erreur dans la nouvelle fenêtre après avoir cliqué sur le lien de l'objet dans Qualité des données |
| 1.0.5 | 31.07.2017 | [Amélioration] Amélioration des performances de la qualité des données <br/> [Amélioration] Nouvelle option pour le calcul du coût total <br/> [Bug] Les icônes d'objets personnalisés ne sont pas mis à l'échelle dans la qualité des données <br/> [Bug] Les coûts de service utilisent des caractères monétaires incorrects <br/> [Bug] Les icônes personnalisées sont mal affichées. |
| 1.0.4 | 02.05.2017 | [Bug] Lors de l'exécution d'une simulation de panne, un délai d'attente se produit selon la taille de la base de données |
| 1.0.3 | 08.03.2017 | [Changement] Amélioration de la stabilité et des performances dans l'évaluation interne de l'arbre des services <br/> [Bug] L'appel des coûts des services renvoie des erreurs <br/> [Bug] Les catégories définies par l'utilisateur ne sont pas évaluées <br/> [Bug] get_currency() Erreur lors de l'exécution de la vue du rapport "Coûts des services" |
| 1.0.2 | 09.03.2015 | |
| 1.0.1 | 23.09.2014 | [Bug] La modification de la pondération d'une relation n'a pas d'influence sur la "gravité de la défaillance". <br/> [Bug] La catégorie "Connexions réseau" affiche toujours une qualité de données de 0%. <br/> [Bug] La catégorie "Armoires" affiche toujours une qualité de données de 0%. |
| 1.0 | 20.08.2014 | Release initiale |