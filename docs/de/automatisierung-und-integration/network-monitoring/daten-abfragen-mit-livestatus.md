**Inhaltsverzeichnis**

*   1[Schnittstellen](#DatenabfragenmitLivestatus/NDOUtils-Schnittstellen)
*   2[Grundkonfiguration](#DatenabfragenmitLivestatus/NDOUtils-Grundkonfiguration)
*   3[Kategorien](#DatenabfragenmitLivestatus/NDOUtils-Kategorien)
*   4[Logbucheinträge aus dem Monitoring](#DatenabfragenmitLivestatus/NDOUtils-LogbucheinträgeausdemMonitoring)

Für einen Soll-/Ist-Vergleich zwischen der Soll-Dokumentation in i-doit und dem Ist-Zustand, den eine Software für [Network Monitoring](/display/de/Network+Monitoring) liefert, bietet sich eine passende Schnittstelle an. Mit dieser lassen sich Daten aus dem Network Monitoring in i-doit anzeigen und auswerten.  

Schnittstellen  

-----------------

Es werden die Schnittstellen

*   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (bzw. IDOUtils) sowie
    

*   [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)
    

für [Nagios](https://www.nagios.org/), [Check\_MK](https://mathias-kettner.de/check_mk), [Icinga](https://www.icinga.org/) und kompatiblen Forks unterstützt.

  

  

Empfehlung

MK Livestatus bietet eine sehr performante Anbindung an das Network Monitoring. Daher ist es den NDOUtils zu bevorzugen.

Grundkonfiguration
------------------

Voraussetzung ist ein laufendes NDOUtils oder MK Livestatus auf dem Monitoring-System. In i-doit muss unter `**Verwaltung → Schnittstellen → Monitoring → Livestatus/NDO**` der Zugriff auf eine der Schnittstellen konfiguriert werden.

![](/download/attachments/57180182/Livestatus-NDO-de.png?version=1&modificationDate=1591170609843&api=v2)

Je nach Typ der Schnittstelle muss nun entweder ein TCP/UNIX Socket oder eine Datenbankkonfiguration mit entsprechenden Zugriffsberechtigungen angegeben werden.

Beispiel NDOUtils:

![](/download/attachments/57180182/NDO-konfig.png?version=1&modificationDate=1591170390321&api=v2)

Beispiel MK Livestatus:

![](/download/attachments/57180182/livestatus-konfig.png?version=1&modificationDate=1591170413054&api=v2)

Kategorien
----------

Um die Daten auszulesen muss über den **`[Quick Configuration Wizard](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen)`** den [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) der [Kategorie-Ordner](/display/de/Struktur+der+IT-Dokumentation) **`Monitoring`** zugewiesen werden. In der Kategorie `**Monitoring**` muss jeweils für das [Objekt](/display/de/Struktur+der+IT-Dokumentation) der [Identifizierungsschlüssel](/display/de/Eindeutige+Referenzierungen) für das Monitoring konfiguriert werden. Dazu kann entweder der Objekttitel, der Hostname mit oder ohne Domain Name oder ein frei gewählter Name genutzt werden. Dieser Eintrag bestimmt den Namen, der im Monitoring abgefragt wird.

Falls mehrere Monitoring-Instanzen konfiguriert sind, wird die entsprechende Instanz ausgewählt.

![](/download/attachments/57180182/Monitoring-de.png?version=1&modificationDate=1591177945267&api=v2)

Wird die Kategorie aktiviert und der Eintrag abgespeichert, kann in der `Kategorie **Livestatus**` bzw. `**NDO**` der aktuelle Status abgefragt werden.

 ![](/download/attachments/57180182/Monitoring-NDO-Status-de.png?version=1&modificationDate=1591177974482&api=v2)

Zusätzlich kann in der [Objektlistenkonfiguration](/display/de/Listenansicht+konfigurieren) eine Spalte für NDO oder Livestatus ausgewählt werden, so dass in den [Objekt-Liste](/display/de/Objekt-Liste) der aktuelle Hoststatus mit angezeigt wird.

![](/download/attachments/57180182/Nagios-listenkonfig-NDO-Status.png?version=1&modificationDate=1591178068664&api=v2)

Logbucheinträge aus dem Monitoring
----------------------------------

Über die [Console](/display/de/Console) können Statusmeldungen aus dem Monitoring in das [Logbuch](/display/de/Logbuch) von i-doit übertragen werden. Dazu muss der entsprechende Handler [nagios-ndoutils](https://kb.i-doit.com/display/de/Optionen+und+Parameter+der+Console#OptionenundParameterderConsole-nagios-ndoutils) aufgerufen werden und es werden automatisch alle Statusänderungen, die sich seit dem letzten Lauf geändert haben, in das Logbuch übertragen.