Viele Daten lassen sich direkt aus der [IT-Dokumentation](/display/de/Glossar) im CSV-Format exportieren, um diese mit einer Tabellenkalkulation o. ä. zu verarbeiten.

**Inhaltsverzeichnis**

*   1[Listen-Kategorien](#CSVDatenexport-Listen-Kategorien)
*   2[Reports](#CSVDatenexport-Reports)
*   3[CSV-Format](#CSVDatenexport-CSV-Format)

Objekt-Liste

Objekte und deren Attribute lassen sich über die [Objekt-Liste](/display/de/Objekt-Liste) exportieren. Hierzu dient der Button `**Als CSV exportieren**` in der Aktionsleiste. Die Spalten entsprechen den [in der Listenansicht konfigurierten Attributen](/display/de/Listenansicht+konfigurieren). Eine aktive [Filterung der Objekt-Liste](/display/de/Navigieren+und+filtern) wird beim Export **nicht** berücksichtigt.

![](/download/attachments/28901395/objekt-liste_aktionsleiste.png?version=1&modificationDate=1476367679017&api=v2)

Listen-Kategorien
-----------------

Derzeit unterstützt der CSV-Export viele der [Listen-Kategorien](/display/de/Glossar) (Multi-Value). Die in deren Liste aufgeführten Einträge und [Attribute](/display/de/Glossar) werden nach Druck auf den Button **`Als CSV exportieren`** zum Download angeboten. Als Spaltenüberschriften dienen die Attributnamen.

![](/download/attachments/28901395/kontaktzuweisung.png?version=1&modificationDate=1458309723352&api=v2)

Reports
-------

Der [Report Manager](/display/de/Report+Manager) verfügt ebenfalls über einen Export ins CSV-Format. In einem Report klickt man dazu auf den Button `**CSV**`.

![](/download/attachments/28901395/report_beispiel_lizenzuebersicht.png?version=1&modificationDate=1476367679038&api=v2)

CSV-Format
----------

CSV-Dateien sind einfache Textdateien, in der pro Zeile Komma-separierte Spalten hinterlegt sind. In diesem Fall dient ein Semikolon als Trennzeichen von Spalten. Die Daten sind im Zeichensatz Unicode (UTF-8) kodiert.

Microsoft Excel

Es kann vorkommen, dass Microsoft Excel die Daten in der exportierten CSV-Datei nicht korrekt darstellt. Insbesondere Encoding-Fehler sind zu beobachten. Um dies zu verhindern, sollte die CSV-Datei nicht direkt geöffnet, sondern erst importiert werden:

1.  CSV-Datei exportieren und speichern
2.  Excel öffnen
3.  Im Reiter `**Daten**` auf `**Aus Text**` klicken
4.  CSV-Datei öffnen
5.  Im Dialog `**Textkonvertierungsassistent**` den `**Dateiursprung**` auf `**65001 : Unicode (UTF-8)**` setzen
6.  Auf `**Weiter**` klicken
7.  Als `**Trennzeichen**` die Checkbox `**Semikolon**` wählen
8.  Auf `**Fertigstellen**` klicken