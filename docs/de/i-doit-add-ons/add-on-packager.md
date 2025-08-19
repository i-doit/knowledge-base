# Add-on Packager

Die Idee des Add-on Packagers ist es, dem Anwender die Möglichkeit zu eröffnen, eigene vollwertige [i-doit Add-ons](./index.md) zu bauen. Dabei wird der Add-on Packager komplett über die grafische Benutzeroberfläche von i-doit bedient und es werden keine Programmierkenntnisse benötigt.

Es können die Strukturen, die der Anwender beispielsweise über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) oder den [Report Manager](../auswertungen/report-manager.md) erstellen kann, als Add-on paketiert und weitergeben werden.

Allgemeine Hinweise
-------------------

**Bitte installieren und nutzen Sie den Add-on Packager nicht auf einer Produktionsumgebung!**

Das Paketieren von Add-ons ist ein Entwicklungsprozess. Produktions- und Entwicklunsgumgebungen sollten immer getrennt werden.
Unter anderem, um Produktionsdaten vor Beschädigung oder leichtfertiger Veränderung zu schützen.
Weiterhin müssen sind Produktionsdaten hinsichtlich des Datenschutzes besonders schützenswert.
Werden Add-ons auf Produktionsumgebungen gepackt, besteht die Gefahr der versehentlichen Weitergabe von internen oder persönlichen Daten.
Gehen sie dieses Risiko nicht ein.
Nutzen Sie entweder eine dedizierte Installation oder erstellen Sie eine Kopie Ihrer Produktionsumgebung, wenn Sie Daten von dort paketieren möchten.
Nutzen sie mindestens einen dedizierten Mandanten für ihre Entwicklungen.

Im Rahmen der Entwicklungspartnerschaft wird eine kostenfreie Entwicklungslizenz bereitgestellt. Diese kann für die Entwicklung von Add-ons genutzt werden.

Installation und Lizenz
-----------------------

Der Add-on Packager wird wie jedes Add-on über das Admin-Center installiert. Der Add-on Packager ist nicht lizenzpflichtig. Er kann allerdings nur mit der pro-Variante genutzt werden.

Welche Strukturen können in ein Add-on gepackt werden?
------------------------------------------------------

Derzeit können folgende [Strukturen](../grundlagen/struktur-it-dokumentation.md) mit dem Add-on Packager in ein Add-on eingebunden werden:

*   Objekttypgruppen
*   Objekttypen
*   [Benutzerdefinierte Kategorien](../grundlagen/benutzerdefinierte-kategorien.md)
*   Reports
*   Dialog-Felder
*   [Beziehungsarten](../grundlagen/objekt-beziehungen.md)

Erstellen einer Add-on Strukturvorlage
--------------------------------------

Den Add-on Packager erreicht man wie nahezu alle Add-ons über das Extras-Menü.

Anschließend navigiert man auf den Bereich Add-ons und erstellt dort über den Button "Neu" eine neue Strukturvorlage.

Basis Informationen
-------------------

[![Basis Informationen](../assets/images/de/i-doit-add-ons/add-on-packager/1-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/1-aop.png)

In den Basis Informationen können mehrere Metadaten zu dem Add-on angegeben werden.

| <!-- -->                               | <!-- -->                                                                                                                                                                                                                                                                                                                                                                                 |
| -------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Bezeichnung**                        | Name des Add-ons                                                                                                                                                                                                                                                                                                                                                                         |
| **Hersteller**                         | Der Name Ihres Unternehmens oder Synonym                                                                                                                                                                                                                                                                                                                                                 |
| **Webseite**                           | Ein Link auf weitere Informationen zu dem Add-on(wird derzeit nicht für den Anwender angezeigt)                                                                                                                                                                                                                                                                                          |
| **Lizenzpflichtig**                    | Definiert, ob das Add-on lizenzpflichtig sein soll oder nicht. Lizenzen können nur über den i-doit Lizenzserver ausgestellt werden. Falls Sie ihr Add-on kommerziell verkaufen möchten, sprechen Sie bitte mit Ihrem Ansprechpartner der synetics GmbH.                                                                                                                                  |
| **Identifikator**                      | Der Identifikator wird bei der Erstellung als Freitext angegeben. Wird er abgespeichert, wird er mit dem Herstellernamen kombiniert, um eine Eindeutigkeit zu gewährleisten.Der Add-on Identifikator ist für die Lizenzierung, aber auch das spätere Update eines Add-ons wichtig und sollte eindeutig und unveränderlich sein.Bitte Verwenden Sie keine Leerzeichen oder Sonderzeichen. |
| **Benötigt mindestens i-doit Version** | Standardmäßig ist hier i-doit Version 1.11 eingetragen. Dieser Wert stellt die aktuelle Mindestkompatibilität dar und muss im Normalfall nicht verändert werden.                                                                                                                                                                                                                         |
| **Erstellt mit Add-on Packager**       | Gibt die verwendete Version des Add-on Packagers an, um Kompatibilität zu gewährleisten.                                                                                                                                                                                                                                                                                                 |
| **Beschreibung**                       | Freitext-beschreibung des Add-ons                                                                                                                                                                                                                                                                                                                                                        |

Eingebundene Ressourcen
-----------------------

[![Eingebundene Ressourcen](../assets/images/de/i-doit-add-ons/add-on-packager/2-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/2-aop.png)

Im Ressourcen Bereich der Strukturvorlage können die verfügbaren Strukturen ausgewählt werden. Diese sind im folgenden aufgeschlüsselt.

<!---- TODO
[![Quick Configuration Wizard](../assets/images/de/i-doit-add-ons/add-on-packager/3-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/3-aop.png)
-->

Über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) können Objekttyp Gruppen und Objekttypen angelegt und zugewiesen werden.

Objekttypgruppen
----------------

[![Objekttypgruppen](../assets/images/de/i-doit-add-ons/add-on-packager/4-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/4-aop.png)

Objekttypgruppen sind die in der Hauptnavigation verankerten Gruppierungen.

Wird eine Objekttypgruppe ausgewählt, so wird auch ausschließlich die Gruppe und die Zuordnung der Objekttypen zur Objekttypgruppe mit übernommen. Es werden nicht die Objekttypen als solche mit übernommen, diese müssen explizit im nächsten Punkt ausgewählt werden.

Objekttypen
-----------

[![Objekttypen](../assets/images/de/i-doit-add-ons/add-on-packager/5-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/5-aop.png)

Die Objekttypen sind die logische Typisierung der Objekte. Standardmäßig werden eine Menge Objekttypen ausgeliefert (Server, Clients, …).

Hier können nur die eigens erstellten Objekttypen ausgewählt werden. Mit den ausgewählten Objekttypen wird auch die Zuordnung der Kategorien in das Add-on übernommen, allerdings nicht die Kategorien als solche. Diese müssen explizit im nächsten Punkt ausgewählt werden.

Kategorien
----------

Kategorien sind logischen Klammern um die einzelnen Attribute.

[![Kategorien](../assets/images/de/i-doit-add-ons/add-on-packager/6-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/6-aop.png)

Eigene Kategorien können über die Verwaltung im Bereich "Benutzerdefinierte Kategorien" angelegt werden.

Es können nur benutzerdefinierte Kategorien ausgewählt werden.

Reports
-------

[![Reports](../assets/images/de/i-doit-add-ons/add-on-packager/7-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/7-aop.png)

Hier können Reporte aus dem Report Manager ausgewählt werden.

Dialog+-Felder
--------------

[![Dialog+-Felder](../assets/images/de/i-doit-add-ons/add-on-packager/8-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/8-aop.png)

Dialog+ Felder sind solche Felder, die dem Anwender ein Drop-Down mit festen Werten anbieten, aber die Möglichkeit geben, eigene Inhalte zu ergänzen.

Habe ich in einem Dialog+ Feld eigene Werte angelegt, so kann ich hier das Feld auswählen, damit die Werte mit dem Add-on ausgeliefert werden..

Beziehungsarten
---------------

[![Beziehungsarten](../assets/images/de/i-doit-add-ons/add-on-packager/9-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/9-aop.png)

Beziehungsarten können über die Verwaltung angelegt oder bearbeitet werden.

An dieser Stelle können die Beziehungsarten als solches samt ihren Eigenschaften ausgewählt werden, um sie mit dem Add-on auszuliefern.

Erstellen der fertigen Add-on ZIP-Datei
---------------------------------------

[![Paket erstellen](../assets/images/de/i-doit-add-ons/add-on-packager/10-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/10-aop.png)

Im unteren Bereich kann nun das Add-on als ZIP-Datei erstellt werden.

Hier muss eine Release-Version angegeben werden, die auf Semantic Versioning (bspw. 1.2.5) basieren muss.

Ebenfalls zu jeder Version gibt es einen Changelog Eintrag, der ergänzt wird sowie ein Releasedatum. Wird das Paket erstellt, landet man automatisch auf der Paketseite des Add-ons.

Pakete
------

[![Paketseite](../assets/images/de/i-doit-add-ons/add-on-packager/11-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/11-aop.png)

Die Pakete sind die fertigen ZIP Dateien der Add-ons. Jede Version jedes Add-ons bekommt eine eigene Paketseite, auf der das Add-on als ZIP Datei heruntergeladen werden kann.

[![Pakete](../assets/images/de/i-doit-add-ons/add-on-packager/12-aop.png)](../assets/images/de/i-doit-add-ons/add-on-packager/12-aop.png)

Releases
--------

| Version | Datum      | Changelog                                                                                                                                                                                                                                                 |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.4     | 2025-09-09 | [Task] PHP 8.4 compatibility<br[Bug] 500er error after install add-on with report<br[Bug] Importing reports via a add-on package removes set conditions                                                                                                   |
| 1.3     | 07.11.2023 | [Bug] Custom Object types are not replaced in report conditions<br/>[Bug] HTTP 500 while Add-on uninstall via Admin-Center                                                                                                                                |
| 1.2.1   | 22.08.2023 | [Bug] The content buttons do not work in some browsers<br>[Bug] The User is not able to download the add on zip file                                                                                                                                      |
| 1.2     | 05.09.2022 | [Task] PHP 8.0 Compatibility <br/> [Task] Design Compatibility                                                                                                                                                                                            |
| 1.1.1   | 27.07.2022 | [Bug] Packaging does not work with custom category dialog+ fields                                                                                                                                                                                         |
| 1.1     | 21.02.2022 | [Improvement] Add Report-Manager categories to the Add-On <br/> [Bug] Error message when creating a package with Dialog Plus Listener resources "Unknown column '\*\_\_sort' in 'field list'" <br/> [Bug] CSV import files are not being copied correctly |
| 1.0.1   | 04.05.2020 | [Bug] Packages with custom multi value categories become single value categories on import                                                                                                                                                                |
| 1.0     | 21.10.2019 | `Initial release`                                                                                                                                                                                                                                         |
