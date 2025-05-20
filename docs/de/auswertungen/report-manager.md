---
title: Report Manager
description: Report Manager
icon: report-manager
status:
lang: de
---

# Report Manager

Das Berichtswesen ist ein geeignetes Mittel, um Daten zu verdichten, aufzubereiten und an Dritte weiterzugeben. _i-doit_ verfügt daher über einen Report Manager, der vollumfänglich Daten aus der [IT-Dokumentation](../glossar.md) verarbeiten kann.

## Überblick

Der Report Manager ist über die Hauptnavigationsleiste unter **Extras → Report Manager** zu erreichen. Im Navigationsbaum auf der linken Seite erscheinen die Punkte **Reports**, **Online Repository** und **Views**, auf die im folgenden eingegangen wird. Sollte der Report Manager bzw. die Punkte im Navigationsbaum nicht oder nur unvollständig erscheinen, liegt das an fehlenden Berechtigungen.

[![Ueberblick](../assets/images/de/auswertungen/report-manager/1-rm.png)](../assets/images/de/auswertungen/report-manager/1-rm.png)

## Report-Special Add-on

Mit dem Report-Special Add-on werden ca. 50 vorgefertigte Reports importiert. Mehr Informationen zum Add-on finden Sie im [Kundenportal](../administration/kundenportal.md).

## Report auswerten

Die selbst erstellten Reports befinden sich unter dem Punkt **Reports**. Nach dem [Setup von _i-doit_](../installation/manuelle-installation/setup.md) befinden sich daher noch keine Reports in diesem Bereich.

[![report-auswerten](../assets/images/de/auswertungen/report-manager/2-rm.png)](../assets/images/de/auswertungen/report-manager/2-rm.png)

Beim Klicken auf einen Report in der Liste, wird dieser mit den aktuellen Daten ausgeführt. Die Ergebnisliste eines Reports ist in _i-doit_ tabellarisch aufgebaut. Reports fokussieren sich stets auf Objekte und deren Attribute. Pro Ergebniszeile steht daher ein Hauptobjekt im Fokus, zu dem beliebige Attribute wie Beziehungen zu anderen Objekten angegeben sein können. Durch einen Klick auf eine Zeile wird das dementsprechende Objekt geladen.

[![report-auswerten2](../assets/images/de/auswertungen/report-manager/3-rm.png)](../assets/images/de/auswertungen/report-manager/3-rm.png)

Die Tabelle bietet verschiedene Funktionalitäten (Spaltensortierung, nach einer Spalte filtern, Pagination). Weiterhin lässt sich ein Report in verschiedene Formate exportieren (Klartext, CSV, XML und PDF). Für die Weiterverarbeitung mit einem Tabellenkalkulationsprogramm o. ä. bietet sich der Export ins CSV-Format an.

Aus einem Report lässt sich ein Objekt vom Typ **Objektgruppe** generieren. Deren gleichnamige Kategorie sind die Objekte aus dem Report statisch zugeordnet. Alternativ ist es möglich, eine Objekt vom Typ **Objektgruppe** anzulegen, deren Objektzuweisung dynamisch sind. Dazu wählt man in der Kategorie **Typ** die entsprechende Einstellung aus und wählt einen Report. Von nun an enthält diese Objektgruppe immer die aktuelle Liste an Objekten, die der zugeordnete Report als Ergebnis liefert. Dies geschieht also zur Laufzeit.

## Reports kategorisieren

Reports können kategorisiert werden. Standardmäßig werden sie der Kategorie **Global** zugeordnet, die standardmäßig zur Verfügung steht und nicht gelöscht werden kann. Der Vorteil der Kategorisierung liegt im Berechtigungskonzept: Pro Kategorie kann angegeben werden, wer darauf zugreifen darf. Befindet man sich auf der Seite Reports, können über den Punkt **Kategorien** neue Kategorien erstellt oder bestehende bearbeitet werden. Hilfreich hierbei ist das optionale Beschreibungsfeld.

[![reports-kategorisieren](../assets/images/de/auswertungen/report-manager/4-rm.png)](../assets/images/de/auswertungen/report-manager/4-rm.png)

!!! info "Hinweis"
    Sollte es nicht möglich sein, Report-Kategorien zu erstellen und/oder zu bearbeiten, ist es ratsam, die Berechtigungen hierfür zu überprüfen und sicherzustellen, dass der aktuell eingeloggte User über die Berechtigungen hierfür verfügt.

## Report erstellen oder bearbeiten

Reports können kopiert werden. Hierzu markiert man einen Report und klickt auf den Button **Duplizieren**. Gelöscht wird ein Report über den Button **Purge**. Dieser Schritt ist unwiderruflich.

[![reports-erstellen-oder-bearbeiten](../assets/images/de/auswertungen/report-manager/5-rm.png)](../assets/images/de/auswertungen/report-manager/5-rm.png)

Zum Erstellen eines Reports bieten sich zwei Arten an, die im folgenden näher erläutert werden.

### Abfrage-Editor

Der Abfrage-Editor bietet eine grafische Oberfläche, um einen neuen Report zu erstellen oder einen bestehenden zu bearbeiten. Er wird über den Button **Neu** aufgerufen. Alternativ findet man neben diesem Button in dem Drop-Down-Feld den Button **Abfrage-Editor**. Soll ein bestehender Report bearbeitet werden, muss die Checkbox neben dem Report ausgewählt und einer der oben genannten Buttons geklickt werden.

[![abfrage-editor](../assets/images/de/auswertungen/report-manager/6-rm.png)](../assets/images/de/auswertungen/report-manager/6-rm.png)

Essentiell ist der Titel und die Kategorie. Zudem ist es oftmals hilfreich eine kurze Beschreibung zu hinterlegen. Über den Button **Prüfen** kann der Report getestet werden. In einem Popup werden maximal 25 Ergebnisse präsentiert.

#### Erweiterte Optionen

[![erweiterte-optionen](../assets/images/de/auswertungen/report-manager/7-rm.png)](../assets/images/de/auswertungen/report-manager/7-rm.png)

Es gibt folgende erweiterte Optionen.

| Option                                         | Beschreibung                                                                                                                                                                                                                                                                                                   |
| ---------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Zeige HTML**                                 | Wenn die Option auf Ja gesetzt ist wird in Reports auch HTML angezeigt.                                                                                                                                                                                                                                        |
| **Gruppierte Multivalue-Darstellung**          | Diese Option gruppiert Multi-Value Einträge zu einem Objekt untereinander                                                                                                                                                                                                                                      |
| **Objekte mit leeren Verknüpfungen anzeigen?** | Diese Option bezieht sich auf Unterabfragen zu Objekten, die in Beziehung stehen. Sollte das Attribut, das diese Beziehung repräsentiert, leer sein, d. h., es steht kein Objekt in Beziehung, wird das Ergebnis leer sein, wenn die Option auf **Nein** steht. Andernfalls bleibt die Zelle im Ergebnis leer. |
| **Beschreibungsfeld Format beibehalten**       | Soll das Format des Beschreibungsfeldes beibehalten werden?                                                                                                                                                                                                                                                    |
| **Beziehungsobjekte mit ausgeben?**            | Hinter jeder Beziehung zwischen zwei Objekten steht ein Beziehungsobjekt. Wenn diese Option auf **Ja** steht, wird das Beziehungsobjekt ebenfalls im Ergebnis angezeigt.                                                                                                                                       |
| **Sortierung**                                 | Nach einigen ausgewählten Attributen kann automatisch sortiert werden, sobald der Report ausgeführt wird. Mit dieser Option lässt sich zusätzlich einstellen, ob die Sortierung auf- oder absteigend geschieht.                                                                                                |
| **Statusfilter für Multi-Value Kategorien**    | Sollen archivierte, gelöschte, normale, unfertige oder Alle Multi-Value Einträge aus Kategorien angezeigt werden?                                                                                                                                                                                              |
| **Statusfilter für Zugewiesene Objekte**       | Sollen archivierte, gelöschte, normale, unvollständige oder alle Objekte aus Zuordnungskategorien angezeigt werden?                                                                                                                                                                                            |
#### Ausgabe

[![Ausgabe](../assets/images/de/auswertungen/report-manager/8-rm.png)](../assets/images/de/auswertungen/report-manager/8-rm.png)

Im Bereich **Ausgabe** hat man die Möglichkeit, die Spalten der Ergebnisliste zu definieren. Dazu wählt man die gewünschten Attribute aus den drei Kategorietypen **Global**, **Spezifisch** und **Benutzerdefiniert** aus. Jedes Attribut definiert eine Spalte. Die Reihenfolge der Spalten lässt sich per Drag'n'Drop festlegen.

Nach einigen ausgewählten Attributen kann automatisch sortiert werden, sobald der Report ausgeführt wird. Dazu dient die Radiobox neben dem ausgewählten Attribut. Ist kein Attribut ausgewählt, wird nach der Objekt-ID sortiert.

Wird als Attribut eine Objektreferenzierung ausgewählt, können über die eingeblendete Lupe weitere Attribute des in Beziehung stehenden Objekts ausgewählt werden. Dazu öffnet sich beim Klick auf die Lupe eine weitere Abfrage nach dem oben beschriebenen Prinzip. Diese Unterabfragen können selbstverständlich wiederum zu Unterabfragen gemacht werden (rekursiv).

#### Bedingungen

[![Bedingungen](../assets/images/de/auswertungen/report-manager/9-rm.png)](../assets/images/de/auswertungen/report-manager/9-rm.png)

Über den Punkt **Bedingungen** können gewünschte Konditionen angegeben werden. Um auf ein bestimmtes Attribut zu prüfen, wird dieses mit der passenden Kategorie ausgewählt. Daraufhin wird die logische Abfrage konstruiert: Welchem Wert muss das Attribut entsprechen (oder nicht)? Typische Angaben wie =, !=, <, > usw. sind hier möglich und richten sich nach dem Feldtypen des Attributs. Ebenfalls richtet sich die Auswahl nach dem ausgewählten Attribut.

Einfache Verschachtelungen mit und oder oder sind möglich, indem über den **+**\-Button und Konditionsblöcke weitere Bedingungen angegeben werden. Über den **-**\-Button werden Bedingungen entfernt. Leere Konditionsblöcke werden automatisch entfernt.

Möchte man Bedingungen setzen, die auf Attribute von Objekten, die in Beziehung stehen, abzielen, wählt man das Attribut mit der Objektbeziehung aus und setzt die Bedingung auf **Verknüpftes Attribut**. Daraufhin kann man in einem Unterkonditionsblock weitere Bedingungen angeben.

#### Aktualisieren der Reports nach einem Update

Durch i-doit updates kann sich auch der Abfrage-Editor ändern, sodass Abfragen anders aufgebaut werden als zuvor. Damit die Reporte immer die aktuelle Logik verwenden, ist es notwendig diese Abfragen aktualisieren zu lassen. Entweder ist dies über die [Verwaltung](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) möglich oder über eine [CLI Befehl](../automatisierung-und-integration/cli/console/befehle-und-optionen.md#report-refresher).

[![Reporte aktualisieren](../assets/images/de/auswertungen/report-manager/15-rm.png)](../assets/images/de/auswertungen/report-manager/15-rm.png)

### SQL-Editor

Jeder Report lässt sich über den SQL-Editor erstellen oder bearbeiten - also auch diejenigen, die mit dem Abfrage-Editor erstellt worden sind. Auf der Übersichtsseite der **Reports** klickt man entweder das Drop-Down-Feld neben **Neu** oder selektiert einen bestehenden Report und klickt das Drop-Down-Feld neben **Bearbeiten** an und wählt den Punkt **SQL-Editor**.

!!! info "Wechsel zwischen Abfrage- und SQL-Editor"
    Wird ein Report mit dem SQL-Editor erstellt oder bearbeitet, ist die nachträgliche Bearbeitung mit dem Abfrage-Editor nicht mehr möglich. Hintergrund: Im SQL-Editor steht das volle Spektrum von SQL zur Verfügung. Da der Abfrage-Editor auf ein Subset von SQL beschränkt ist (was in den meisten Fällen reicht), könnte durch diese Differenz die erstellt Abfrage zerstört werden.

[![sql-editor](../assets/images/de/auswertungen/report-manager/10-rm.png)](../assets/images/de/auswertungen/report-manager/10-rm.png)

Im Formularfeld **SQL-Abfrage** wird die Abfrage in SQL geschrieben. Kenntnisse über die Datenbank-Struktur von i-doit sind hier vonnöten. Wichtig ist, dass man immer Objekte abfragt und als erste (unsichtbare) Spalte die ID des Objektes selektiert:

```sql
SELECT obj_main.isys_obj__id AS '__id__' FROM isys_obj AS obj_main;
```

Die Spalten-Namen können multilingual angegeben werden und werden von _i-doit_ bei der Echtzeitabfrage automatisch übersetzt:

```sql
obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1'
```

!!! success "Komplexe Reports gestalten"
    Um komplexe Reports zu gestalten, die viele Features von SQL ausreizen, bietet sich folgende Vorgehensweise an:

    1.  Erstellen des Reports mit dem Abfrage-Editor (so weit es geht)
    2.  Report kopieren
    3.  Kopie mit dem SQL-Editor nachbearbeiten

    Vorteile sind, dass man nicht unbedingt die Datenbank-Struktur von i-doit kennen muss und dass man den vorbereiteten Report immer noch mit dem Abfrage-Editor bearbeiten kann.

## Report exportieren/importieren

Reports können auch exportiert bzw. importiert werden. Wenn der gewünschte Report über die Checkbox gewählt wurde, kann er über die Schaltfläche oben in eine Datei exportiert werden. Diese Datei kann in einer anderen Instanz oder einem anderen Mandanten importiert werden, sodass der Report dort ebenfalls genutzt werden kann. Die Bearbeitung ist, wenn der Report ursprünglich über den Abfrage-Editor erstellt wurde, auch weiterhin über den Abfrage-Editor möglich.

Beim Transfer eines Reports ist zu beachten, dass Bedingungen und Ausgaben, die sich auf individuelle Inhalte (z.B. eine Objekt-ID oder eine benutzerdefinierte Kategorie) beziehen, nachbearbeitet werden müssen, wenn diese nicht in der Ziel-Instanz identisch sind, da sie andernfalls ein Ergebnis liefern, das von der Erwartung abweicht.

## Online Repository

Im Internet sind bereits einige vorgefertigte Reports zum Download verfügbar. Über den Punkt **Online Repository** kann man diese direkt ausführen oder erst lokal speichern. Eine bestehende Internetverbindung ist dazu nötig.

[![online-repository](../assets/images/de/auswertungen/report-manager/11-rm.png)](../assets/images/de/auswertungen/report-manager/11-rm.png)

## Report Views

**Report Views** bieten über die oben genannten Reports zusätzliche Funktionen und Ansichten. Neue können nicht angelegt, bestehende nicht bearbeitet oder gelöscht werden.

[![report-views](../assets/images/de/auswertungen/report-manager/12-rm.png)](../assets/images/de/auswertungen/report-manager/12-rm.png)

Auswahl von nützlichen **Report Views**:

*   **QR Codes**: Aufbereiten und Drucken von mehreren Labels gleichzeitig, die einen QR-Code sowie weitere Informationen und ein Logo enthalten können.
*   **Geräte in einem Standort (Listenformat)**
*   **Netzwerkverbindungen**
*   **Offene Kabelverbindungen**

[![report-views-2](../assets/images/de/auswertungen/report-manager/13-rm.png)](../assets/images/de/auswertungen/report-manager/13-rm.png)

## Reports automatisiert exportieren

Bestehende Reports können automatisiert als Datei exportiert werden, ohne das ein Benutzer manuell eingreifen muss. Dies geschieht über das Kommandozeilen-Werkzeug von _i-doit_, der [console.php](../automatisierung-und-integration/cli/console/index.md) via [report-export](../automatisierung-und-integration/cli/console/befehle-und-optionen.md#report-export).

```shell
sudo -u www-data php console.php report-export --help

Usage:
    report-export [options]

Options:
-r, --reportId=REPORTID              ID of the report
-d, --exportPath=EXPORTPATH          Path to export the report into
-f, --exportFilename=EXPORTFILENAME  File name of export file, without extension (e.g. .pdf). Default is the title of the report
-t, --exportFileType=EXPORTFILETYPE  File Type of the export. Possible options: csv, txt, pdf, xml [default: "csv"]
-u, --user=USER                      User
-p, --password=PASSWORD              Password
-i, --tenantId=TENANTID              Tenant ID [default: 1]
-c, --config=CONFIG                  Config File
-h, --help                           Display this help message
-q, --quiet                          Do not output any message
-V, --version                        Display this application version
--ansi                               Force ANSI output
--no-ansi                            Disable ANSI output
-n, --no-interaction                 Do not ask any interactive question
-v|vv|vvv, --verbose                 Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
    Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
```

Die Automatisierung kann beispielsweise durch einen Cronjob erledigt werden.

!!! info "Report-basierte Benachrichtigung"
    _i-doit_ kann bei positiven Reports, also Reports mit Ergebnissen, passende [E-Mails versenden](benachrichtigungen.md).

## Rechte vergeben

Benutzern und Benutzergruppen (in i-doit vertreten durch die Objekttypen **Personen** und **Personengruppen**) können Rechte für den Report Manager vergeben werden. Konfigurieren lässt sich dies über **Verwaltung → Berechtigungen → Report Manager**. Folgende Rechte lassen sich vergeben:

*   **Online Repository**
*   **Report Views**
*   **Reports**
*   **Reports in Kategorien**
*   **Kategorien**
*   **Report exportieren**
*   **Report importieren**
*   **Selbsterstellte Reports**

[![rechte-vergeben](../assets/images/de/auswertungen/report-manager/14-rm.png)](../assets/images/de/auswertungen/report-manager/14-rm.png)
