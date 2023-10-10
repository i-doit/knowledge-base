# Daten abfragen mit Livestatus/NDOUtils

Für einen Soll-/Ist-Vergleich zwischen der Soll-Dokumentation in i-doit und dem Ist-Zustand, den eine Software für [Network Monitoring](../network-monitoring/index.md) liefert, bietet sich eine passende Schnittstelle an. Mit dieser lassen sich Daten aus dem Network Monitoring in i-doit anzeigen und auswerten.

## Schnittstellen

Es werden die Schnittstellen

*   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (bzw. IDOUtils) sowie

*   [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)

für [Nagios](https://www.nagios.org/), [Check\_MK](https://mathias-kettner.de/check_mk), [Icinga](https://www.icinga.org/) und kompatiblen Forks unterstützt.

!!! success "Empfehlung"

    MK Livestatus bietet eine sehr performante Anbindung an das Network Monitoring. Daher ist es den NDOUtils zu bevorzugen.

## Grundkonfiguration

Voraussetzung ist ein laufendes NDOUtils oder MK Livestatus auf dem Monitoring-System. In i-doit muss unter **Verwaltung → Import und Schnittstellen → Monitoring → Livestatus/NDO** der Zugriff auf eine der Schnittstellen konfiguriert werden.

[![datenabfragenmls-access](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/1-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/1-nm.png)

Je nach Typ der Schnittstelle muss nun entweder ein TCP/UNIX Socket oder eine Datenbankkonfiguration mit entsprechenden Zugriffsberechtigungen angegeben werden.

Beispiel NDOUtils:

[![datenabfragenmls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)

Beispiel MK Livestatus:

[![datenabfragenmls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/3-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/3-nm.png)

## Kategorien

Um die Daten auszulesen muss über **[Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md)** den [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) der [Kategorie-Ordner](../../grundlagen/struktur-it-dokumentation.md) **Monitoring** zugewiesen werden. In der Kategorie **Monitoring** muss jeweils für das [Objekt](../../grundlagen/struktur-it-dokumentation.md) der [Identifizierungsschlüssel](../../grundlagen/eindeutige-referenzierungen.md) für das Monitoring konfiguriert werden. Dazu kann entweder der Objekttitel, der Hostname mit oder ohne Domain Name oder ein frei gewählter Name genutzt werden. Dieser Eintrag bestimmt den Namen, der im Monitoring abgefragt wird.

Falls mehrere Monitoring-Instanzen konfiguriert sind, wird die entsprechende Instanz ausgewählt.

[![datenabfragenmls-multiinstance](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)

Wird die Kategorie aktiviert und der Eintrag abgespeichert, kann in der Kategorie **Livestatus** bzw. **NDO** der aktuelle Status abgefragt werden.

[![datenabfragenmls-status](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)

Zusätzlich kann in der [Objektlistenkonfiguration](../../grundlagen/objekt-liste/listenansicht-konfigurieren.md) eine Spalte für NDO oder Livestatus ausgewählt werden, so dass in den [Objekt-Liste](../../grundlagen/objekt-liste/index.md) der aktuelle Hoststatus mit angezeigt wird.

[![datenabfragenmls-objlist](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)

## Logbucheinträge aus dem Monitoring

Über die [Console](../cli/console/index.md) können Statusmeldungen aus dem Monitoring in das [Logbuch](../../grundlagen/logbuch.md) von i-doit übertragen werden. Dazu muss der entsprechende Handler [nagios-ndoutils](../cli/console/optionen-und-parameter-der-console.md#nagios-ndoutils) aufgerufen werden und es werden automatisch alle Statusänderungen, die sich seit dem letzten Lauf geändert haben, in das Logbuch übertragen.
