<!-- TRANSLATED by md-translate -->
# ISO 27000 mit i-doit

# ISO 27000 avec i-doit

!!! attention "Neues Add-on "ISMS""

! !! attention "Nouveau Add-on "ISMS""

```
Der Inhalt dieses Artikels ist **veraltet** und wird zukünftig **gelöscht**.

Stattdessen steht das **neue Add-on [ISMS (beta)](../i-doit-pro-add-ons/isms.md)** zur Verfügung, um ein Information Security Management System (ISMS) nach ISO 27001 aufzubauen.
```

In Deutschland beschäftigen sich dieser Tage die Energieversorgungsunternehmen (EVU) umfangreich mit den Anforderungen, die die Bundesnetzagentur (BNetzA) ihnen im Rahmen des sogenannten [IT-Sicherheitskatalogs](https://www.bsi.bund.de/grundschutz/) diktiert. Das von der Bundesregierung initiierte [IT-Sicherheitsgesetz](https://www.secupedia.info/wiki/IT-Sicherheitsgesetz) regelt die Informationssicherheit von [kritischen Infrastrukturen](https://www.kritis.bund.de/SubSites/Kritis/DE/Einfuehrung/einfuehrung_node.html), wozu EVU in der Regel zählen. Durch dieses Gesetz wird ihnen vorgeschrieben, geeignete Maßnahmen zu ergreifen, um sich vor Gefahren zu schützen, die ihre (IT-)Infrastrukturen bedrohen. Um die identifizierten Risiken zu minimieren, wird auf Mechanismen zurückgegriffen, die sich seit vielen Jahren bei zahlreichen KMU und Konzernen etabliert haben: Die Rede ist von der Einführung eines Information Security Management System (ISMS). Um eine Standardisierung eines ISMS bemüht sind Organisationen wie die ISO/IEC, die DIN und das BSI. International weit verbreitet ist die Norm-Familie [ISO/IEC 27000](https://de.wikipedia.org/wiki/ISO/IEC_27000-Reihe) (ISO27k), die die wesentlichen Aspekte berührt und darüber hinaus Normen beinhaltet, die sich speziell mit den Anforderungen von EVU beschäftigen. Sinnvolle Maßnahmen sind beispielsweise in [ISO/IEC 27002](https://de.wikipedia.org/wiki/ISO/IEC_27002) und ISO/IEC TR 27019 (deutsche Übersetzung: DIN SPEC 27009) beschrieben.

En Allemagne, les entreprises d'approvisionnement en énergie (EVU) se penchent actuellement sur les exigences dictées par l'Agence fédérale des réseaux (BNetzA) dans le cadre du [catalogue de sécurité informatique](https://www.bsi.bund.de/grundschutz/). La [loi sur la sécurité informatique](https://www.secupedia.info/wiki/IT-Sicherheitsgesetz), initiée par le gouvernement fédéral, réglemente la sécurité de l'information des [infrastructures critiques](https://www.kritis.bund.de/SubSites/Kritis/DE/Einfuehrung/einfuehrung_node.html), dont font généralement partie les EAE. Cette loi leur impose de prendre des mesures appropriées pour se protéger contre les dangers qui menacent leurs infrastructures (informatiques). Pour minimiser les risques identifiés, on a recours à des mécanismes qui se sont établis depuis de nombreuses années dans de nombreuses PME et entreprises : Il s'agit de l'introduction d'un système de gestion de la sécurité de l'information (ISMS). Des organisations telles que l'ISO/IEC, le DIN et le BSI s'efforcent de normaliser un ISMS. La famille de normes [ISO/IEC 27000](https://de.wikipedia.org/wiki/ISO/IEC_27000-Reihe) (ISO27k) est très répandue au niveau international ; elle couvre les aspects essentiels et contient en outre des normes qui traitent spécifiquement des exigences des entreprises de distribution d'énergie. Des mesures judicieuses sont par exemple décrites dans [ISO/IEC 27002](https://de.wikipedia.org/wiki/ISO/IEC_27002) et ISO/IEC TR 27019 (traduction française : DIN SPEC 27009).

## Dokumentation von IT-Infrastrukturen

## Documentation des infrastructures informatiques

Ein wesentlicher Aspekt bei der Etablierung eines ISMS ist die Analyse der eignen IT-Infrastruktur. Credo: Man kann nur schützen, was man sieht. Hierbei unterstützt die Erfassung und Pflege einer IT-Dokumentation. Um das Sicherheitsniveau in der IT signifikant zu erhöhen und auch halten zu können, ist es unabdingbar, eine sauber gepflegte IT-Dokumentation sein Eigen zu nennen. Erst durch sie wird ersichtlich,

L'analyse de l'infrastructure informatique est un aspect essentiel de la mise en place d'un ISMS. Credo : on ne peut protéger que ce que l'on voit. La saisie et la mise à jour d'une documentation informatique sont utiles à cet égard. Pour augmenter de manière significative le niveau de sécurité dans l'informatique et pouvoir le maintenir, il est indispensable de disposer d'une documentation informatique bien entretenue. Ce n'est que grâce à elle que l'on peut voir

* welche IT-Komponenten existieren,
* wo diese platziert sind,
* wer sich um sie kümmert,
* wie sie erreichbar sind,
* welche Aufgaben sie haben,
* welche Daten sie austauschen,
* …

* quels sont les composants informatiques existants,
* où ils sont placés,
* qui s'en occupe,
* comment ils sont accessibles,
* quelles sont leurs tâches,
* quelles données ils échangent ,
* ...

Der Nutzen, der aus der IT-Dokumentation gezogen wird, ist enorm und kann weit über das hinaus gehen, was nötig ist, um den Anforderungen der ISO27k-Normen zu genügen. Für den Anfang reichen oftmals wenige Objekttypen, Kategorien und Attribute:

Les avantages tirés de la documentation informatique sont énormes et peuvent aller bien au-delà de ce qui est nécessaire pour satisfaire aux exigences des normes ISO27k. Pour commencer, il suffit souvent de quelques types d'objets, catégories et attributs :

* IT-relevante Standorte: Gebäude, Räume, Racks
* IT-Komponenten: Server, virtuelle Umgebungen und Clients
* Netzwerkkomponenten: Router, Firewalls, Switches
* Passive Komponenten: Patchfelder, Verkabelungen
* Wichtige Software-Komponenten: Betriebssysteme, Dienste, Fachanwendungen, Datenbanken
* Personen und -gruppen
* Beziehungen:
    - Standortzuweisungen
    - Netz- und Port-Verbindungen
    - Softwarezuweisung
    - Kontaktzuweisung

* sites liés à l'informatique : bâtiments, salles, racks
* Composants informatiques : serveurs, environnements virtuels et clients
* Composants de réseau : routeurs, pare-feux, commutateurs
* Composants passifs : Panneaux de brassage, câblages
* Composants logiciels importants : Systèmes d'exploitation, services, applications spécialisées, bases de données
* Personnes et groupes de personnes
* Relations :
    - Attributions de sites
    - Connexions réseau et ports
    - Attribution de logiciels
    - Attribution de contacts

[![objektsicht](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)

[ ![vue d'objet](../assets/images/fr/applicationfaelle/iso-27000/1-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/1-iso.png)

Auf dieser Basis lassen sich weitere Anwendungsfälle abbilden. Beispielsweise können branchenspezifische Komponenten aus der Leitstellentechnik durch benutzerdefinierte Objekttypen und Kategorien in der IT-Dokumentation erfasst werden.

D'autres cas d'application peuvent être représentés sur cette base. Par exemple, des composants spécifiques à la branche de la technique des centres de contrôle peuvent être saisis dans la documentation informatique par des types d'objets et des catégories définis par l'utilisateur.

## Pflege von ISO27k-Dokumenten

## Maintenance des documents ISO27k

[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)
[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)

[ ![Documents ISO27k](../assets/images/fr/applicationfaelle/iso-27000/2-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/2-iso.png)
[ ![Documents ISO27k](../assets/images/fr/applicationfaelle/iso-27000/3-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/3-iso.png)

i-doit bietet zusätzlich zur IT-Dokumentation weitere Funktionalitäten, die von einem Tool-unterstützten ISMS erwartet werden. Beispielsweise lassen sich im Dokumente-Modul die meisten der von ISO27k geforderten Dokumente erzeugen. Hierzu werden die Texte um Daten aus der IT-Dokumentation ergänzt. Dies können einzelne Attribute sein, aber auch tabellarische Auflistungen ganzer Kategorien oder die Ergebnisse von zuvor erstellten Reports.

En plus de la documentation informatique, i-doit offre d'autres fonctionnalités attendues d'un ISMS assisté par un outil. Par exemple, le module Documents permet de générer la plupart des documents exigés par ISO27k. Pour ce faire, les textes sont complétés par des données issues de la documentation informatique. Il peut s'agir d'attributs individuels, mais aussi de listes tabulaires de catégories entières ou des résultats de rapports créés au préalable.

[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)

[ ![Documents ISO27k](../assets/images/fr/applicationfaelle/iso-27000/4-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/4-iso.png)

Die für ISO27k obligatorischen Dokumente können abermals in der IT-Dokumentation abgelegt und mit weiteren Angaben verknüpft werden.

Les documents obligatoires pour ISO27k peuvent à nouveau être classés dans la documentation informatique et être liés à d'autres indications.

## Umsetzung von Maßnahmen

## Mise en œuvre des mesures

In der Norm ISO/IEC 27002 und auch in anderen wie ISO/IEC 27009 werden Maßnahmen (im Englischen "Controls") definiert, die

La norme ISO/CEI 27002 et d'autres comme ISO/CEI 27009 définissent des mesures (en anglais "Controls") qui sont

* organisationsübergreifend
* auf einzelne Komponenten oder
* Gruppen von Komponenten bezogen

* à l'échelle de l'organisation
* sur des composants individuels ou
* se rapportant à des groupes de composants

umgesetzt werden sollen. Zudem ist es wichtig, wer eine Maßnahme wann und mit welcher Begründung umgesetzt hat. Weitere Informationen wie zusätzliche Dokumentationen, die eine Umsetzung nachweisen sollen, werden ebenfalls gefordert.

doivent être mises en œuvre. Il est en outre important de savoir qui a mis en œuvre une mesure, quand et avec quelle justification. D'autres informations, telles que des documentations supplémentaires destinées à prouver la mise en œuvre, sont également demandées.

[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)
[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)
[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)

[ ![Mise en œuvre des mesures](../assets/images/fr/applicationfaelle/iso-27000/5-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/5-iso.png)
[ ![Mise en œuvre des mesures](../assets/images/fr/applicationfaelle/iso-27000/6-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/6-iso.png)
[ ![Mise en œuvre des mesures](../assets/images/fr/applicationfaelle/iso-27000/7-iso.png)](../assets/images/fr/applicationfaelle/iso-27000/7-iso.png)

All diese Daten lassen sich ebenso ein einer IT-Dokumentation abbilden. Allerdings ignorieren wir hier das "IT" im Namen und machen uns die Flexibilität von i-doit zu Nutze. Wir legen dazu die Objekttypen

Toutes ces données peuvent également être représentées dans une documentation IT. Toutefois, nous ignorons ici le "IT" dans le nom et profitons de la flexibilité d'i-doit. Nous créons pour cela les types d'objets

* Normen (z. B. ISO/IEC 27002) und
* Maßnahmen

* les normes (par exemple ISO/IEC 27002) et
* mesures

an und verknüpfen diese durch benutzerdefinierte Beziehungen untereinander. Zudem verknüpfen wir diese mit den bereits dokumentierten IT-Komponenten bzw. Gruppen von IT-Komponenten. Bei letzterem helfen die Objekttypen "Objektgruppen" und "Arbeitsplätze".

et les relient entre eux par des relations définies par l'utilisateur. En outre, nous les relions aux composants informatiques ou aux groupes de composants informatiques déjà documentés. Pour ce dernier, les types d'objets "groupes d'objets" et "postes de travail" sont d'une grande aide.