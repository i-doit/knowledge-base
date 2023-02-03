Das [Add-on](/display/de/i-doit+pro+Add-ons) `**VIVA**` widmet sich dem Thema Informationssicherheit auf Basis von IT-Grundschutz. Es unterstützt den Benutzer bei den relevanten Dokumentationsprozessen, um ein Information Security Management System (ISMS) in einer Organisation zu etablieren.

Inhaltsverzeichnis
------------------

1.  [Einleitung zu VIVA](/display/de/Einleitung+zu+VIVA)
    1.  IT-Grundschutz
    2.  An wen sich dieses Dokument richtet
    3.  Aufbau dieses Dokuments
2.  [Vorbereitung der VIVA-Installation](/display/de/Vorbereitung+der+VIVA-Installation)
    1.  Systemvoraussetzungen
    2.  Herunterladen
    3.  Installieren
    4.  Aktualisieren
    5.  Aktivieren/Deaktivieren
    6.  Deinstallieren
    7.  Rechteverwaltung
    8.  Migrieren vom bisherigen ITGS-Modul
3.  [Vorgehensweise mit VIVA](/display/de/Vorgehensweise+mit+VIVA)
    1.  IT-Grundschutz-Kataloge verwalten
    2.  Informationsverbünde modellieren
    3.  Zielgruppen anlegen
    4.  Zielobjekte zuordnen
    5.  Zielgruppenvererbung
    6.  Schutzbedarfskategorien definieren
    7.  Schutzbedarf festlegen
    8.  Bausteine zuordnen
    9.  Maßnahmen umsetzen
    10.  Prüffragen beantworten
    11.  Ergänzende Sicherheitsanalyse durchführen
4.  [Risikoanalyse nach IT-Grundschutz](/display/de/Risikoanalyse+nach+IT-Grundschutz)
    1.  Gefährdungen identifizieren
    2.  Gefährdungen bewerten
5.  [Berichte mit VIVA](/display/de/Berichte+mit+VIVA)
    1.  Audits erstellen
    2.  Referenzdokumente
6.  [Audits mit VIVA unterstützen](/pages/viewpage.action?pageId=13598768)
7.  [VIVA-Assistenten](/display/de/VIVA-Assistenten)
    1.  Zielgruppen-Assistenten
    2.  Schutzbedarfs-Assistenten
8.  [Objekt-Kategorie VIVA](/display/de/Objekt-Kategorie+VIVA)
9.  [VIVA-Widget](/display/de/VIVA-Widget)

Anhang
------

*   [Beispiel eines möglichen Arbeitsablaufs](/display/de/Arbeitsablauf+mit+VIVA)
*   [FAQ zu VIVA](https://help.i-doit.com/hc/de/articles/115002984325-FAQ-zu-VIVA)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5.5 |     | \[Bug\] Audits exported via PDF are displayed incorrectly |
| 1.5.4 |     | \[Bug\] IT-Grundschutz catalogues cannot be imported  <br>\[Bug\] Audits exported via PDF are displayed incorrectly  <br>\[Bug\] The buttons are not completely displayed in the navbar |
| 1.5.3 |     | \[Bug\] Load audits without the necessary rights  <br>\[Bug\] VIVA tables are not created for multi-tenant instances  <br>\[Bug\] The inheritance function of measures could not be performed.  <br>\[Bug\] The VIVA add-on could not be installed on i-doit version 1.10.x.  <br>\[Bug\] Link to VIVA within an object |
| 1.5.2 | 25.01.2018 | ```<br>[Bug]           Anzahl nicht umgesetzter Maßnahmen falsch<br>```<br><br>```<br>[Bug]           Bestätigung durch enter/return  führt zu einem HTTP/500<br>```<br><br>```<br>[Bug]           VIVA Add-On kann nicht installiert werden ab i-doit Version 1.10<br>```<br><br>```<br>[Bug]           Fehler beim Aufruf von VIVA über das Icon in der Kategorieliste eines Objekts<br>```<br><br>```<br>[Bug]           Bei der Erstellung einer Verknüpfung zu einer Maßnahme kommt es zu einer Datenbankfehlermeldung<br>```<br><br>```<br>[Bug]           Kategorie zeigt keine verknüpften Bausteine an<br>```<br><br>```<br>[Bug]           Kategorie zeigt keine Mitglieder gemeinsamer Zielgruppen an<br>```<br><br>```<br>[Bug]           Statistik der Verknüpften Maßnahmen von Informationsverbünden zeigt negative Werte an<br>```<br><br>```<br>[Bug]           VIVA: Zielobjekte fehlen in linkem Menübaum<br>```<br><br>```<br>[Bug]           Umlaute werden beim PDF Export nicht korrekt dargestellt<br>```<br><br>```<br>[Bug]           Bericht "Verknüpfte CIs" vermischt Informationsverbünde<br>```<br><br>```<br>[Bug]           Bericht "Umgesetzte Maßnahmen" vermischt Informationsverbünde<br>```<br><br>```<br>[Bug]           Bericht "Anwendungen" zeigt Betriebssysteme<br>```<br><br>```<br>[Bug]           CSV-Export von verknüpften Maßnahmen zeigt andere Daten an<br>```<br><br>```<br>[Bug]           Fehler bei der Installation des VIVA Add-Ons<br>```<br><br>```<br>[Bug]           Verknüpfte Bausteine werden im Menü Baum trotz reload der Seite nicht aktualisiert<br>```<br><br>```<br>[Bug]           Fehler bei der Bearbeitung der Anmerkungen<br>```<br><br>```<br>[Bug]           Kategorie VIVA kann nicht aufgerufen werden<br>```<br><br>```<br>[Bug]           Handling von verknüpften selbstdefinierten Massnahmen unter den Zielobjekten fehlerhaft, erzeugt Datenbankfehler<br>``` |
| 1.5.1 | 02.05.2017 | ```<br>[Bug]           Bericht zu Anwendungen listet Betriebssysteme auf<br>```<br><br>```<br>[Bug]           Bericht zur Gruppenvererbung ist rot markiert, liefert aber keine Ergebnisse<br>```<br><br>```<br>[Bug]           Report zur ergänzenden Sicherheitsanalyse liefert Hinweise auf Formulare, die bereits ausgefüllt sind<br>``` |
| 1.5 | 03.06.2016 | ```<br>[Verbesserung]  Import des IT-Grundschutz-Katalog 15 EL.<br>```<br><br>```<br>[Verbesserung]  Upgrade und Verknüpfung von IT-Verbünden zu neu eingelesenem Grundschutzkatalog<br>```<br><br>```<br>[Bug]           Fehler beim Export: E_WARNING: Illegal string offset 'type' production<br>``` |
| 1.4.3 |     | ```<br>[Bug]           Zeilenumbruch in Beschreibungsfeld führt zu Fehler im Navigationsbaum<br>```<br><br>```<br>[Bug]           Kontakte die in VIVA verlinkt sind können nicht endgültig gelöscht werden.<br>``` |
| 1.4.2 |     | ```<br>[Verbesserung]  Verbesserte Darstellung der Assistenten<br>``` |