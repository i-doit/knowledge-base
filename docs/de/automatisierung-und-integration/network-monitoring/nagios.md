Nagios ist eine Software für [Network Monitoring](/display/de/Network+Monitoring), das aus den Daten der [IT-Dokumentation](/display/de/Glossar) heraus konfiguriert werden kann. Dadurch lassen sich eine doppelte Pflege von Daten vermeiden und Fehler minimieren. Der in i-doit verfügbare Export erlaubt es, vollständige oder partielle Konfigurationen zu erzeugen. Dazu werden in der i-doit-Oberfläche Nagios-Konfigurationen manuell angelegt oder automatisiert mit Werten unterfüttert.

Kompatibilität

Der exportierten Daten sind mit der Version 3 von Nagios und Version 1 von Icinga kompatibel. Version 4 von Nagios ist nicht vollständig kompatibel. Weitere Derivate von Nagios werden nicht unterstützt.

Grundkonfiguration
------------------

  

**Inhaltsverzeichnis**

*   1[Grundkonfiguration](#Nagios-Grundkonfiguration)
*   2[Basiskonfigurationen](#Nagios-Basiskonfigurationen)
*   3[Konfiguration in Objekten](#Nagios-KonfigurationinObjekten)
*   4[Export der Nagios Konfiguration](#Nagios-ExportderNagiosKonfiguration)
*   5[Changelog](#Nagios-Changelog)

Unter `**Verwaltung → Schnittstellen / externe Daten → Monitoring → Exportkonfiguration**` wird die Konfiguration hinterlegt. Der `**Lokale Pfad**` definiert einen absoluten oder relativen Pfad zur i-doit Installation im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der **`Link zum Monitoring Tool`** gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

![](/download/attachments/57180184/1.png?version=2&modificationDate=1606810588386&api=v2)

Basiskonfigurationen
--------------------

Unter **`Extras → Nagios`** werden die Basiskonfigurationen angelegt.

![](/download/attachments/57180184/2.png?version=1&modificationDate=1606810318237&api=v2)

Dazu gehört die Hauptkonfiguration, Service- und Host-Templates sowie weitere grundlegende Einstellungen. Alle Werte sind 1:1 mit der Nagios-Konfiguration deckungsgleich.

Konfiguration in Objekten
-------------------------

Alle weiteren Konfigurationen werden innerhalb der [Objekte](/display/de/Struktur+der+IT-Dokumentation) vorgenommen. Der einfachste Fall ist die Konfiguration von Hostparametern. Hierzu muss über den [**`Quick Configuration Wizard`**](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) der [Kategorie](/display/de/Struktur+der+IT-Dokumentation) Ordner **`Nagios (Host)`** zu den gewünschten [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) zugewiesen werden.

In der Kategorie **`Host Definition`** kann dann entweder über ein Nagios Template oder durch individuelle Konfiguration eine Hostdefinition für Nagios hinterlegt werden.

![](/download/attachments/57180184/Bildschirmfoto%202020-12-01%20um%2009.13.07.png?version=1&modificationDate=1606810395924&api=v2)

Das Prinzip der Host- und Service Templates ist mit der Nagios-Konfiguration deckungsgleich.

Über die Kategorie **`Servicezuweisung`** werden in der Basiskonfiguration definierte Servicechecks einem Host zugewiesen.

Als Ergebnis bildet sich später hieraus die Konfiguration einer klassischen Host-zu-Service-Zuweisung. Es gibt zusätzlich einen zweiten Weg, wie Services zu Hosts zugewiesen werden können. Dies geschieht über die Vererbung über ein Softwareobjekt.

in einem Softwareobjekt in der Kategorie `**Nagios (Anwendungen)**` wird ein Servicecheck zugewiesen, analog zu der Zuweisung zu einem Host.

Ist diese Anwendung nun über die Kategorie `**Softwarezuweisung**` auf einem Host installiert, wird der Servicecheck auf den Host automatisch vererbt.

Weitere Nagios-Konfigurationen innerhalb von Objekten finden sich in Objekten vom Typ `**Personen **`sowie in `**Personengruppen **`und `**Objektgruppen**`.

  

Export der Nagios Konfiguration
-------------------------------

Unter `**Verwaltung → Schnittstellen / externe Daten → Monitoring → Nagios Export**` können die Nagios-Konfigurationen manuell exportiert werden. Dazu wird eine Exportkonfiguration ausgewählt und optional eine Validierung der Parameter angewählt.

![](/download/attachments/57180184/1.png?version=2&modificationDate=1606810588386&api=v2)

Die Validierung überprüft grundlegende Abhängigkeiten, ob beispielsweise eine IP-Adresse für einen Host eingetragen ist. Diese Überprüfung soll davor schützen, korrupte Nagios-Konfigurationen zu erzeugen, allerdings ist es kein 100-prozentiger Schutz. Zur Sicherheit sollte immer ein Test mit der Nagios Binary über die erzeugte Konfiguration gefahren werden.

Die Konfigurationsdateien werden gemäß dem konfigurierten Pfad auf dem Dateisystem abgelegt und entsprechen den in den Kategorien konfigurierten Werten.

Selbstverständlich lässt sich der Export der Dateien auch über die i-doit [Console](/display/de/Console) automatisieren. Eine Beschreibung der einzelnen Parameter sowie ein Beispiel sind im [entsprechenden Artikel](/display/de/Optionen+und+Parameter+der+Console) für die Option **`nagios-export`** zu finden.

Changelog
---------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 05.09.2022 | \[Task\] PHP 8.0 compatibility  <br>\[Task\] Design Compatibility |
| 1.0.3 |     | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.0.2 |     | \[Bug\] The Nagios category cannot be opened among persons  <br>\[Bug\] Clicking on "Edit" after saving an object, navigates to object list  <br>\[Bug\] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1 |     | \[Bug\] Creation of Nagios tables is performed in the wrong order |
| 1.0 |     | \[Change\] Add-onize Nagios |