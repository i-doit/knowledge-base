---
title: Report Manager
description: "Das Berichtswesen ist ein geeignetes Mittel, um Daten zu verdichten, aufzubereiten und an Dritte weiterzugeben."
icon: report-manager
status:
lang: de
---

# Report Manager

Das Berichtswesen ist ein geeignetes Mittel, um Daten zu verdichten, aufzubereiten und an Dritte weiterzugeben. _i-doit_ verfügt daher über einen Report Manager, der vollumfänglich Daten aus der [IT-Dokumentation](../glossar.md) verarbeiten kann.

## Überblick

Der Report Manager ist über die Hauptnavigationsleiste unter **Extras → Report Manager** zu erreichen. Im Navigationsbaum auf der linken Seite erscheinen die Punkte **Reports**, **Online Repository** und **Views**, auf die im folgenden eingegangen wird. Sollte der Report Manager bzw. die Punkte im Navigationsbaum nicht oder nur unvollständig erscheinen, liegt das an fehlenden Berechtigungen.

[![Überblick](../assets/images/de/auswertungen/report-manager/1-rm.png)](../assets/images/de/auswertungen/report-manager/1-rm.png)

## Report-Special Add-on

Mit dem Report-Special Add-on werden ca. 50 vorgefertigte Reports importiert. Mehr Informationen zum Add-on findest du im [Kundenportal](../administration/kundenportal.md).

## Report auswerten

Die selbst erstellten Reports befinden sich unter dem Punkt **Reports**. Nach dem [Setup von _i-doit_](../installation/manuelle-installation/setup.md) befinden sich daher noch keine Reports in diesem Bereich.

[![report-auswerten](../assets/images/de/auswertungen/report-manager/2-rm.png)](../assets/images/de/auswertungen/report-manager/2-rm.png)

Klicke auf einen Report in der Liste, um ihn mit den aktuellen Daten auszuführen. Die Ergebnisliste ist tabellarisch aufgebaut. Reports fokussieren sich stets auf Objekte und deren Attribute -- pro Ergebniszeile steht ein Hauptobjekt im Fokus, zu dem beliebige Attribute wie Beziehungen zu anderen Objekten angegeben sein können. Durch einen Klick auf eine Zeile öffnest du das entsprechende Objekt.

[![report-auswerten2](../assets/images/de/auswertungen/report-manager/3-rm.png)](../assets/images/de/auswertungen/report-manager/3-rm.png)

Die Tabelle bietet verschiedene Funktionalitäten (Spaltensortierung, nach einer Spalte filtern, Pagination). Weiterhin lässt sich ein Report in verschiedene Formate exportieren (Klartext, CSV, XML und PDF). Für die Weiterverarbeitung mit einem Tabellenkalkulationsprogramm o. ä. bietet sich der Export ins CSV-Format an.

Aus einem Report kannst du ein Objekt vom Typ **Objektgruppe** generieren. Die Objekte aus dem Report sind der gleichnamigen Kategorie statisch zugeordnet. Alternativ legst du eine **Objektgruppe** mit dynamischer Zuweisung an: Wähle dazu in der Kategorie **Typ** die entsprechende Einstellung und verknüpfe einen Report. Die Objektgruppe enthält dann immer die aktuelle Ergebnisliste des Reports -- zur Laufzeit ermittelt.

## Reports kategorisieren

Reports lassen sich in Kategorien einordnen. Standardmäßig werden sie der Kategorie **Global** zugeordnet, die nicht gelöscht werden kann. Der Vorteil: Pro Kategorie kannst du festlegen, wer darauf zugreifen darf. Auf der Seite **Reports** erstellst oder bearbeitest du Kategorien über den Punkt **Kategorien**. Das optionale Beschreibungsfeld hilft bei der Orientierung.

[![reports-kategorisieren](../assets/images/de/auswertungen/report-manager/4-rm.png)](../assets/images/de/auswertungen/report-manager/4-rm.png)

!!! info "Hinweis"
    Sollte es nicht möglich sein, Report-Kategorien zu erstellen und/oder zu bearbeiten, ist es ratsam, die Berechtigungen hierfür zu überprüfen und sicherzustellen, dass der aktuell eingeloggte User über die Berechtigungen hierfür verfügt.

## Report erstellen oder bearbeiten

Du kannst Reports kopieren, indem du einen Report markierst und auf **Duplizieren** klickst. Über den Button **Purge** löschst du einen Report unwiderruflich.

[![reports-erstellen-oder-bearbeiten](../assets/images/de/auswertungen/report-manager/5-rm.png)](../assets/images/de/auswertungen/report-manager/5-rm.png)

Zum Erstellen eines Reports bieten sich zwei Arten an, die im folgenden näher erläutert werden.

### Abfrage-Editor

Der Abfrage-Editor bietet eine grafische Oberfläche, um Reports zu erstellen oder zu bearbeiten. Rufe ihn über den Button **Neu** auf oder wähle im Drop-Down-Feld daneben **Abfrage-Editor**. Um einen bestehenden Report zu bearbeiten, aktiviere die Checkbox neben dem Report und klicke auf einen der genannten Buttons.

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

Im Bereich **Ausgabe** definierst du die Spalten der Ergebnisliste. Wähle die gewünschten Attribute aus den drei Kategorietypen **Global**, **Spezifisch** und **Benutzerdefiniert** aus. Jedes Attribut definiert eine Spalte, deren Reihenfolge du per Drag'n'Drop festlegst.

Über die Radiobox neben einem Attribut aktivierst du die automatische Sortierung. Ist kein Attribut ausgewählt, wird nach der Objekt-ID sortiert.

Wählst du als Attribut eine Objektreferenzierung, kannst du über die eingeblendete Lupe weitere Attribute des verknüpften Objekts hinzufügen. Diese Unterabfragen lassen sich beliebig verschachteln (rekursiv).

#### Bedingungen

[![Bedingungen](../assets/images/de/auswertungen/report-manager/9-rm.png)](../assets/images/de/auswertungen/report-manager/9-rm.png)

Über den Punkt **Bedingungen** gibst du die gewünschten Filterkriterien an. Wähle das zu prüfende Attribut mit der passenden Kategorie aus und konstruiere die logische Abfrage: Welchem Wert muss das Attribut entsprechen (oder nicht)? Typische Operatoren wie `=`, `!=`, `<`, `>` stehen je nach Feldtyp zur Verfügung.

Über den **+**-Button fuegest du weitere Bedingungen hinzu und verschachtelst sie mit **und** oder **oder**. Über den **-**-Button entfernst du Bedingungen. Leere Konditionsbloecke werden automatisch entfernt.

Um Bedingungen auf Attribute verknüpfter Objekte zu setzen, wähle das Attribut mit der Objektbeziehung aus und setze die Bedingung auf **Verknüpftes Attribut**. In einem Unterkonditionsblock gibst du dann die weiteren Bedingungen an.

#### Aktualisieren der Reports nach einem Update

Durch i-doit updates kann sich auch der Abfrage-Editor ändern, sodass Abfragen anders aufgebaut werden als zuvor. Damit die Reporte immer die aktuelle Logik verwenden, ist es notwendig diese Abfragen aktualisieren zu lassen. Entweder ist dies über die [Verwaltung](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) möglich oder über das [i-doit console utility](../automatisierung-und-integration/cli/index.md).

[![Reporte aktualisieren](../assets/images/de/auswertungen/report-manager/15-rm.png)](../assets/images/de/auswertungen/report-manager/15-rm.png)

### SQL-Editor

Jeden Report kannst du über den SQL-Editor erstellen oder bearbeiten -- auch solche, die mit dem Abfrage-Editor erstellt wurden. Klicke auf der Übersichtsseite der **Reports** das Drop-Down-Feld neben **Neu** oder selektiere einen bestehenden Report, klicke das Drop-Down-Feld neben **Bearbeiten** und wähle **SQL-Editor**.

!!! info "Wechsel zwischen Abfrage- und SQL-Editor"
    Wird ein Report mit dem SQL-Editor erstellt oder bearbeitet, ist die nachträgliche Bearbeitung mit dem Abfrage-Editor nicht mehr möglich. Hintergrund: Im SQL-Editor steht das volle Spektrum von SQL zur Verfügung. Da der Abfrage-Editor auf ein Subset von SQL beschränkt ist (was in den meisten Fällen reicht), könnte durch diese Differenz die erstellt Abfrage zerstört werden.

[![sql-editor](../assets/images/de/auswertungen/report-manager/10-rm.png)](../assets/images/de/auswertungen/report-manager/10-rm.png)

Im Formularfeld **SQL-Abfrage** schreibst du die Abfrage in SQL. Kenntnisse über die Datenbank-Struktur von i-doit sind hier erforderlich. Wichtig: Du musst immer Objekte abfragen und als erste (unsichtbare) Spalte die ID des Objektes selektieren:

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

Du kannst Reports exportieren und importieren. Wähle den gewünschten Report über die Checkbox und klicke auf die Export-Schaltfläche. Die exportierte Datei lässt sich in einer anderen Instanz oder einem anderen Mandanten importieren. Reports, die mit dem Abfrage-Editor erstellt wurden, bleiben auch nach dem Import über den Abfrage-Editor bearbeitbar.

Beachte beim Transfer: Bedingungen und Ausgaben, die sich auf individuelle Inhalte beziehen (z.B. eine Objekt-ID oder eine benutzerdefinierte Kategorie), musst du nachbearbeiten, wenn diese in der Ziel-Instanz nicht identisch sind.

## Online Repository

Im Internet stehen vorgefertigte Reports zum Download bereit. Über den Punkt **Online Repository** kannst du diese direkt ausführen oder lokal speichern. Eine bestehende Internetverbindung ist dafür erforderlich.

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

Bestehende Reports können automatisiert als Datei exportiert werden, ohne das ein Benutzer manuell eingreifen muss. Dies geschieht über das [i-doit console utility](../automatisierung-und-integration/cli/index.md) via `report-export`.

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

Benutzern und Benutzergruppen (Objekttypen **Personen** und **Personengruppen**) kannst du Rechte für den Report Manager vergeben. Die Konfiguration findest du unter **Verwaltung > Berechtigungen > Report Manager**. Folgende Rechte stehen zur Verfügung:

*   **Online Repository**
*   **Report Views**
*   **Reports**
*   **Reports in Kategorien**
*   **Kategorien**
*   **Report exportieren**
*   **Report importieren**
*   **Selbsterstellte Reports**

[![rechte-vergeben](../assets/images/de/auswertungen/report-manager/14-rm.png)](../assets/images/de/auswertungen/report-manager/14-rm.png

## Variable Reports

Mit [Variablen Reports](../anwendungsfaelle/variable-reports.md) kann man sich Daten anzeigen lassen, welche Objektspezifisch sind, statt statisch wie bei normalen Reports.
