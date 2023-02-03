**Inhaltsverzeichnis**

*   1[Allgemeine Hinweise](#AddonPackager-AllgemeineHinweise)
*   2[Installation und Lizenz](#AddonPackager-InstallationundLizenz)
*   3[Welche Strukturen können in ein Add-on gepackt werden?](#AddonPackager-WelcheStrukturenkönnenineinAdd-ongepacktwerden?)
*   4[Erstellen einer Add-on Strukturvorlage](#AddonPackager-ErstelleneinerAdd-onStrukturvorlage)
*   5[Basis Informationen](#AddonPackager-BasisInformationen)
*   6[Eingebundene Ressourcen](#AddonPackager-EingebundeneRessourcen)
*   7[Objekttypgruppen](#AddonPackager-Objekttypgruppen)
*   8[Objekttypen](#AddonPackager-Objekttypen)
*   9[Kategorien](#AddonPackager-Kategorien)
*   10[Reports](#AddonPackager-Reports)
*   11[Dialog+-Felder](#AddonPackager-Dialog+-Felder)
*   12[Beziehungsarten](#AddonPackager-Beziehungsarten)
*   13[Erstellen der fertigen Add-on ZIP-Datei](#AddonPackager-ErstellenderfertigenAdd-onZIP-Datei)
*   14[Pakete](#AddonPackager-Pakete)
*   15[Releases](#AddonPackager-Releases)

Die Idee des Add-on Packagers ist es, dem Anwender die Möglichkeit zu eröffnen, eigene vollwertige [i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons) zu bauen. Dabei wird der Add-on Packager komplett über die grafische Benutzeroberfläche von i-doit bedient und es werden keine Programmierkenntnisse benötigt.

Es können die Strukturen, die der Anwender beispielsweise über den [Quick Configuration Wizard](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) oder den [Report Manager](/display/de/Report+Manager) erstellen kann, als Add-on paketiert und weitergeben werden.

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

Der Add-on Packager wird wie jedes Add-on über das Admin Center installiert. Der Add-on Packager ist nicht lizenzpflichtig. Er kann allerdings nur mit der pro-Variante genutzt werden.

Welche Strukturen können in ein Add-on gepackt werden?
------------------------------------------------------

Derzeit können folgende [Strukturen](/display/de/Struktur+der+IT-Dokumentation) mit dem Add-on Packager in ein Add-on eingebunden werden:

*   Objekttypgruppen
*   Objekttypen
*   [Benutzerdefinierte Kategorien](/display/de/Benutzerdefinierte+Kategorien)
*   Reports
*   Dialog-Felder
*   [Beziehungsarten](/display/de/Objekt-Beziehungen)

Erstellen einer Add-on Strukturvorlage
--------------------------------------

Den Add-on Packager erreicht man wie nahezu alle Add-ons über das Extras-Menü.

Anschließend navigiert man auf den Bereich Add-ons und erstellt dort über den Button “Neu” eine neue Strukturvorlage.

Basis Informationen
-------------------

![Basis Informationen](/download/attachments/82575697/image2019-10-18_11-55-25.png?version=1&modificationDate=1571393147725&api=v2&effects=drop-shadow "Basis Informationen")

In den Basis Informationen können mehrere Metadaten zu dem Add-on angegeben werden.

|     |     |
| --- | --- |
| **Bezeichnung** | Name des Add-ons |
| **Hersteller** | Der Name Ihres Unternehmens oder Synonym |
| **Webseite** | Ein Link auf weitere Informationen zu dem Add-on<br><br>(wird derzeit nicht für den Anwender angezeigt) |
| **Lizenzpflichtig** | Definiert, ob das Add-on lizenzpflichtig sein soll oder nicht. Lizenzen können nur über den i-doit Lizenzserver ausgestellt werden. Falls Sie ihr Add-on kommerziell verkaufen möchten, sprechen Sie bitte mit Ihrem Ansprechpartner der synetics GmbH. |
| **Identifikator** | Der Identifikator wird bei der Erstellung als Freitext angegeben. Wird er abgespeichert, wird er mit dem Herstellernamen kombiniert, um eine Eindeutigkeit zu gewährleisten.<br><br>Der Add-on Identifikator ist für die Lizenzierung, aber auch das spätere Update eines Add-ons wichtig und sollte eindeutig und unveränderlich sein.<br><br>Bitte Verwenden Sie keine Leerzeichen oder Sonderzeichen. |
| **Benötigt mindestens i-doit Version** | Standardmäßig ist hier i-doit Version 1.11 eingetragen. Dieser Wert stellt die aktuelle Mindestkompatibilität dar und muss im Normalfall nicht verändert werden. |
| **Erstellt mit Add-on Packager** | Gibt die verwendete Version des Add-on Packagers an, um Kompatibilität zu gewährleisten. |
| **Beschreibung** | Freitext-beschreibung des Add-ons |

Eingebundene Ressourcen
-----------------------

![Eingebundene Ressourcen](/download/attachments/82575697/image2019-10-18_11-55-57.png?version=1&modificationDate=1571393147717&api=v2&effects=drop-shadow "Eingebundene Ressourcen")

Im Ressourcen Bereich der Strukturvorlage können die verfügbaren Strukturen ausgewählt werden. Diese sind im folgenden aufgeschlüsselt.

![Quick Configuration Wizard](/download/attachments/82575697/image2019-10-18_11-56-17.png?version=1&modificationDate=1571393147708&api=v2&effects=drop-shadow "Quick Configuration Wizard")

Über den Quick Configuration Wizard können Objekttyp Gruppen und Objekttypen angelegt und zugewiesen werden.

Objekttypgruppen
----------------

![Objekttypgruppen](/download/attachments/82575697/image2019-10-18_11-56-59.png?version=1&modificationDate=1571393147700&api=v2&effects=drop-shadow "Objekttypgruppen")

Objekttypgruppen sind die in der Hauptnavigation verankerten Gruppierungen.

Wird eine Objekttypgruppe ausgewählt, so wird auch ausschließlich die Gruppe und die Zuordnung der Objekttypen zur Objekttypgruppe mit übernommen. Es werden nicht die Objekttypen als solche mit übernommen, diese müssen explizit im nächsten Punkt ausgewählt werden.

Objekttypen
-----------

![Objekttypen](/download/attachments/82575697/image2019-10-18_11-58-6.png?version=1&modificationDate=1571393147690&api=v2&effects=drop-shadow "Objekttypen")

Die Objekttypen sind die logische Typisierung der Objekte. Standardmäßig werden eine Menge Objekttypen ausgeliefert (Server, Clients, …).

Hier können nur die eigens erstellten Objekttypen ausgewählt werden. Mit den ausgewählten Objekttypen wird auch die Zuordnung der Kategorien in das Add-on übernommen, allerdings nicht die Kategorien als solche. Diese müssen explizit im nächsten Punkt ausgewählt werden.

Kategorien
----------

Kategorien sind logischen Klammern um die einzelnen Attribute.

![Kategorien](/download/attachments/82575697/image2019-10-18_11-59-42.png?version=1&modificationDate=1571393147680&api=v2&effects=drop-shadow "Kategorien")

Eigene Kategorien können über die Verwaltung im Bereich “Benutzerdefinierte Kategorien” angelegt werden.

Es können nur benutzerdefinierte Kategorien ausgewählt werden.

Reports
-------

![Reports](/download/attachments/82575697/image2019-10-18_11-59-47.png?version=1&modificationDate=1571393147670&api=v2&effects=drop-shadow "Reports")

Hier können Reporte aus dem Report Manager ausgewählt werden.

Dialog+-Felder
--------------

![](/download/attachments/82575697/image2019-10-18_12-0-55.png?version=1&modificationDate=1571393147648&api=v2&effects=drop-shadow)

Dialog+ Felder sind solche Felder, die dem Anwender ein Drop-Down mit festen Werten anbieten, aber die Möglichkeit geben, eigene Inhalte zu ergänzen.

Habe ich in einem Dialog+ Feld eigene Werte angelegt, so kann ich hier das Feld auswählen, damit die Werte mit dem Add-on ausgeliefert werden..

Beziehungsarten
---------------

![Beziehungsarten](/download/attachments/82575697/image2019-10-18_12-1-58.png?version=1&modificationDate=1571393147636&api=v2&effects=drop-shadow "Beziehungsarten")

Beziehungsarten können über die Verwaltung angelegt oder bearbeitet werden.

An dieser Stelle können die Beziehungsarten als solches samt ihren Eigenschaften ausgewählt werden, um sie mit dem Add-on auszuliefern.

Erstellen der fertigen Add-on ZIP-Datei
---------------------------------------

![Paket erstellen](/download/attachments/82575697/image2019-10-18_12-2-4.png?version=1&modificationDate=1571393147619&api=v2&effects=drop-shadow "Paket erstellen")

Im unteren Bereich kann nun das Add-on als ZIP-Datei erstellt werden.

Hier muss eine Release-Version angegeben werden, die auf Semantic Versioning (bspw. 1.2.5) basieren muss.

Ebenfalls zu jeder Version gibt es einen Changelog Eintrag, der ergänzt wird sowie ein Releasedatum. Wird das Paket erstellt, landet man automatisch auf der Paketseite des Add-ons.

Pakete
------

![Paketseite](/download/attachments/82575697/image2019-10-18_12-2-12.png?version=1&modificationDate=1571393147604&api=v2&effects=drop-shadow "Paketseite")

Die Pakete sind die fertigen ZIP Dateien der Add-ons. Jede Version jedes Add-ons bekommt eine eigene Paketseite, auf der das Add-on als ZIP Datei heruntergeladen werden kann.

![Pakete](/download/attachments/82575697/image2019-10-18_12-2-19.png?version=1&modificationDate=1571393147575&api=v2&effects=drop-shadow "Pakete")

  

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.2 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.1.1 | 27.07.2022 | \[Bug\] Packaging does not work with custom category dialog+ fields |
| 1.1 | 21.02.2022 | Improvement\] Add Report-Manager categories to the Add-On  <br>\[Bug\]         Error message when creating a package with Dialog Plus Listener resources "Unknown column '\*\_\_sort' in 'field list'"  <br>\[Bug\]         CSV import files are not being copied correctly |
| 1.0.1 | 04.05.2020 | \[Bug\] Packages with custom multi value categories become single value categories on import |
| 1.0 | 21.10.2019 | ```<br>Initial release<br>``` |