# ISO 27000 mit i-doit

!!! attention "Neues Add-on "ISMS""

    Der Inhalt dieses Artikels ist **veraltet** und wird zukünftig **gelöscht**.

    Stattdessen steht das **neue Add-on [ISMS (beta)](../i-doit-pro-add-ons/isms.md)** zur Verfügung, um ein Information Security Management System (ISMS) nach ISO 27001 aufzubauen.

In Deutschland beschäftigen sich dieser Tage die Energieversorgungsunternehmen (EVU) umfangreich mit den Anforderungen, die die Bundesnetzagentur (BNetzA) ihnen im Rahmen des sogenannten [IT-Sicherheitskatalogs](https://www.bundesnetzagentur.de/DE/Sachgebiete/ElektrizitaetundGas/Unternehmen_Institutionen/Versorgungssicherheit/IT_Sicherheit/IT_Sicherheit.html) diktiert. Das von der Bundesregierung initiierte [IT-Sicherheitsgesetz](https://www.secupedia.info/wiki/IT-Sicherheitsgesetz) regelt die Informationssicherheit von [kritischen Infrastrukturen](https://www.kritis.bund.de/SubSites/Kritis/DE/Einfuehrung/einfuehrung_node.html), wozu EVU in der Regel zählen. Durch dieses Gesetz wird ihnen vorgeschrieben, geeignete Maßnahmen zu ergreifen, um sich vor Gefahren zu schützen, die ihre (IT-)Infrastrukturen bedrohen. Um die identifizierten Risiken zu minimieren, wird auf Mechanismen zurückgegriffen, die sich seit vielen Jahren bei zahlreichen KMU und Konzernen etabliert haben: Die Rede ist von der Einführung eines Information Security Management System (ISMS). Um eine Standardisierung eines ISMS bemüht sind Organisationen wie die ISO/IEC, die DIN und das BSI. International weit verbreitet ist die Norm-Familie [ISO/IEC 27000](https://de.wikipedia.org/wiki/ISO/IEC_27000-Reihe) (ISO27k), die die wesentlichen Aspekte berührt und darüber hinaus Normen beinhaltet, die sich speziell mit den Anforderungen von EVU beschäftigen. Sinnvolle Maßnahmen sind beispielsweise in [ISO/IEC 27002](https://de.wikipedia.org/wiki/ISO/IEC_27002) und ISO/IEC TR 27019 (deutsche Übersetzung: DIN SPEC 27009) beschrieben.

Dokumentation von IT-Infrastrukturen
------------------------------------

Ein wesentlicher Aspekt bei der Etablierung eines ISMS ist die Analyse der eignen IT-Infrastruktur. Credo: Man kann nur schützen, was man sieht. Hierbei unterstützt die Erfassung und Pflege einer IT-Dokumentation. Um das Sicherheitsniveau in der IT signifikant zu erhöhen und auch halten zu können, ist es unabdingbar, eine sauber gepflegte IT-Dokumentation sein Eigen zu nennen. Erst durch sie wird ersichtlich,

*   welche IT-Komponenten existieren,
*   wo diese platziert sind,
*   wer sich um sie kümmert,
*   wie sie erreichbar sind,
*   welche Aufgaben sie haben,
*   welche Daten sie austauschen,
*   …

Der Nutzen, der aus der IT-Dokumentation gezogen wird, ist enorm und kann weit über das hinaus gehen, was nötig ist, um den Anforderungen der ISO27k-Normen zu genügen. Für den Anfang reichen oftmals wenige Objekttypen, Kategorien und Attribute:

*   IT-relevante Standorte: Gebäude, Räume, Racks
*   IT-Komponenten: Server, virtuelle Umgebungen und Clients
*   Netzwerkkomponenten: Router, Firewalls, Switches
*   Passive Komponenten: Patchfelder, Verkabelungen
*   Wichtige Software-Komponenten: Betriebssysteme, Dienste, Fachanwendungen, Datenbanken
*   Personen und -gruppen
*   Beziehungen:
    *   Standortzuweisungen
    *   Netz- und Port-Verbindungen
    *   Softwarezuweisung
    *   Kontaktzuweisung

[![objektsicht](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)

Auf dieser Basis lassen sich weitere Anwendungsfälle abbilden. Beispielsweise können branchenspezifische Komponenten aus der Leitstellentechnik durch benutzerdefinierte Objekttypen und Kategorien in der IT-Dokumentation erfasst werden.

Pflege von ISO27k-Dokumenten
----------------------------

[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)
[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)

i-doit bietet zusätzlich zur IT-Dokumentation weitere Funktionalitäten, die von einem Tool-unterstützten ISMS erwartet werden. Beispielsweise lassen sich im Dokumente-Modul die meisten der von ISO27k geforderten Dokumente erzeugen. Hierzu werden die Texte um Daten aus der IT-Dokumentation ergänzt. Dies können einzelne Attribute sein, aber auch tabellarische Auflistungen ganzer Kategorien oder die Ergebnisse von zuvor erstellten Reports.

[![ISO27k-Dokumenten](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)

Die für ISO27k obligatorischen Dokumente können abermals in der IT-Dokumentation abgelegt und mit weiteren Angaben verknüpft werden.

Umsetzung von Maßnahmen
-----------------------

In der Norm ISO/IEC 27002 und auch in anderen wie ISO/IEC 27009 werden Maßnahmen (im Englischen "Controls") definiert, die

*   organisationsübergreifend
*   auf einzelne Komponenten oder
*   Gruppen von Komponenten bezogen

umgesetzt werden sollen. Zudem ist es wichtig, wer eine Maßnahme wann und mit welcher Begründung umgesetzt hat. Weitere Informationen wie zusätzliche Dokumentationen, die eine Umsetzung nachweisen sollen, werden ebenfalls gefordert.

[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)
[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)
[![Umsetzung von Maßnahmen](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)

All diese Daten lassen sich ebenso ein einer IT-Dokumentation abbilden. Allerdings ignorieren wir hier das "IT" im Namen und machen uns die Flexibilität von i-doit zu Nutze. Wir legen dazu die Objekttypen

*   Normen (z. B. ISO/IEC 27002) und
*   Maßnahmen

an und verknüpfen diese durch benutzerdefinierte Beziehungen untereinander. Zudem verknüpfen wir diese mit den bereits dokumentierten IT-Komponenten bzw. Gruppen von IT-Komponenten. Bei letzterem helfen die Objekttypen "Objektgruppen" und "Arbeitsplätze".
