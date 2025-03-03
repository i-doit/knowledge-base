---
search:
  exclude: true
---
# Changelog 1.5.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  In der Chassis Ansicht wird in einer Info Box die Zugewiesenen Geräte des ausgewählten Slots angezeigt.<br>
[Verbesserung]  Benutzereinstellungen erben von den Mandanteneinstellungen<br>
[Verbesserung]  Konfigurierbare Variablen für Workflow E-Mails: IP-Adresse & Hostname (Siehe Dokumentation)<br>
[Verbesserung]  Möglichkeit zum Bearbeiten des Objekttitels bei Personen, Personengruppen und Organisationen<br>
[Verbesserung]  Beschleunigung der Ergebnisliste des Logbuch Moduls<br>
[Verbesserung]  Darstellung der Root-Lokation im Standort-Pfad als Icon<br>
[Verbesserung]  Verbesserter OCS Netzwerk Import für SNMP Geräte<br>
[Bug]           OCS-Import führt Objekte der OCS-Datenbank nicht mit manuell erzeugten Objekten zusammen, deren Attribute übereinstimmen.<br>
[Bug]           Bei Abfragen zu referenzierten RT-Tickets wird falsche Mandanten-Referenz verwendet<br>
[Bug]           Benutzerdefinierte Übersetzungen werden im Check_MK Export nicht beachtet<br>
[Bug]           Eingetragener Name beim Duplizieren mehrerer Objekte zur selben Zeit wird ignoriert<br>
[Bug]           Duplikation mehrerer Objekte führt zu identischen SYS-IDs<br>
[Bug]           Styling aus dem WYSIWYG Editor wird nicht übernommen<br>
[Bug]           Bei den Benutzerdefnierten Kategorien (Single-Value) wird immer ein neuer Datensatz erstellt<br>
[Bug]           Fehlermeldung beim Erstellen von Patchdosen aus einem Template heraus<br>
[Bug]           PDU-Kategorie erzwingt SNMP-Abfrage auf primäre IP-Adresse<br>
[Bug]           Durch Caching Probleme ist das Design einiger Module teilweise defekt<br>
[Bug]           Explizite Beziehungen können nicht gelöscht werden, da die Schaltfläche "Archivieren" ausgegraut ist.<br>
[Bug]           Fehlerhaftes HTML-Decoding in Listenbrowser<br>
[Bug]           Hashsumme steht beim Editieren des Logins im Passwortfeld<br>
[Bug]           OCS prüft beim Import nur nach Objektnamen und überschreibt dadurch unter Umständen existierende Objekte<br>
[Bug]           Konfiguration der Anzahl vorgeladener Seiten in den Objektlisten (Systemeinstellungen)<br>
[Bug]           Beim Erstellen eines Reports hat die Logbuch Kategorie in den Bedingungen immer eine Fehlermeldung ausgegeben.<br>
[Bug]           Bei Neuanlage von Beziehungen können fälschlicherweise implizite Beziehungsarten ausgewählt weden<br>
[Bug]           Speichern eines Servicebaums des CMDB-Explorers als SVG-Grafik ist im Internet Explorer 11 nicht möglich<br>
[Bug]           Objektbrowser zeigt ausgewählte logische Geräte nicht an<br>
[Bug]           Breadcrumb-Navigation endet bei "Services" vorzeitig<br>
[Bug]           Dynamische Properties bei Check_MK Tags führen zu SQL Fehler<br>
[Bug]           Template für Personen wird nicht als Template gespeichert<br>
[Bug]           Gleichnamige Attribute in den verknüpften Attributen eines Reports können nicht verwendet werden<br>
[Bug]           Checkbox aus oberster Zeile der Listen-Kategorien auf der Übersichtsseite markiert auch alle Einträge aus anderen Listenkategorien der Übersichtsseite.<br>
[Bug]           Das Löschen eines CMDB Status lässt die zugewiesenen Objekte verschwinden<br>
[Bug]           SQL-Fehler bei Verwendung des One-Support-Buttons<br>
[Bug]           Blade-Chassis Objektliste um "Logische Port"-Informationen erweitern erzeugt Fehlermeldung<br>
[Bug]           Leere Passwortfelder fordern Passworteingabe in Kategorie "Login" wenn der Benutzername geändert wird.<br>
[Bug]           Zuweisung keiner weiteren Objekte möglich, wenn ein Objekt mit Backslash zugewiesen wurde.<br>
[Bug]           CSV-Import aktualisiert nicht den Objekt-Titel, selbst wenn ein anderer Identifier konfiguriert wurde<br>
[Bug]           Update setzt Systemeinstellungen auf Standards zurück<br>
[Bug]           Kategorie "Virtuelle Geräte" gibt Fehlermeldung beim Speichern aus<br>
[Bug]           Vorder- und Rückseite in der Schrankansicht sind unterschiedlich hoch<br>
[Bug]           Attribut "Hersteller" wird nicht in der Übersicht der Softwarezuweisung angezeigt, wenn dieses aus der Kategorie "Dienste" stammt.<br>
[Bug]           Logbuch verfügt nicht über Seitenauswahl<br>
[Bug]           In duplizierten Reports wird die Auswahl "Objekte mit leeren Verknüpfungen anzeigen?" immer auf "Nein" gesetzt<br>
[Bug]           [JDisc] Beim duplizieren eines JDisc-Profils schließt sich das Popup nicht und das Profil wird nicht dupliziert.<br>
[Bug]           Einstellungen werden teilweise nicht gespeichert<br>
[Bug]           Konfiguration einer Sprachkonstanten für die Kategorie-Bezeichnung hat keine Auswirkung<br>
[Bug]           CMDB-Explorer: Standort-Pfad wird unter "Objektinformationen" angezeigt<br>
[Bug]           Logische Ports des Wirts können nicht unter "Netzwerk" der Kategorie "Virtuelle Geräte" ausgewählt werden<br>
[Bug]           Falsche Ports werden unter "Netzwerk" der Kategorie "Virtuelle Geräte" angezeigt<br>
[Bug]           CMDB-Explorer: Pfad-Markierung nicht möglich, wenn Tooltip aktiv<br>
[Bug]           Design von Kategorie "Chassis > Zugewiesene Geräte" fehlerhaft<br>
[Bug]           Hostadresse zeigt verknüpften Port nicht in "View-Modus" an<br>
[Bug]           Arbeitsplatz heißt in der englischen Übersetzung "Workstation"<br>
[Bug]           Popup für QR-Codes in Chrome unübersichtlich<br>
[Bug]           Objekt-Browser-Filter "nach Personengruppen" Zeigt die Personengruppe selbst in der Häufigkeit der zugeordneten Personenobjekte an<br>
[Bug]           In benutzerdefinierten Kategorien existiert keine Purge-Schaltfläche<br>
[Bug]           Massenänderung auf Kategorie "Netz" wählt zufälliges Objekt als DNS-Server<br>
[Bug]           Pro XML-Import desselben Objekts wird eine weitere CPU ergänzt<br>
[Bug]           "Services" lässt sich über eigene Sprachkonstanten nicht umbenennen<br>
[Bug]           Beziehungsliste zeigt falsche Seitenzählung an<br>
[Bug]           Inhalte eines neuen Workflows gehen verloren, wenn kein Objekt zugewiesen wurde<br>
[Bug]           Verbundene Geräde unter Raid-Verbund lassen sich nicht entfernen<br>
[Bug]           Service lässt keine weiteren Komponenten zu nach Hinzufügen einer Komponente mit Sonderzeichen<br>
[Bug]           Stromverbraucher ist nach dem Anlegen mit sich selbst verbunden<br>
[Bug]           Beim Speichern in der Rollenverwaltung werden die geänderten Werte zwar gespeichert, aber nach dem ersten neuladen nicht direkt dargestellt<br>
[Bug]           Adressvergabe stellt sich selbstständig auf falsche Werte um<br>
[Bug]           Variante steht bei Betriebssystem auf der Übersichtsseite nicht zur Auswahl<br>
[Bug]           Verknüpftes Interface zeigt auch archivierte Interfaces an<br>
[Bug]           Hersteller-Feld unter Dienste kann nicht leer bleiben<br>
[Bug]           Spezifische Kategorie Datenbankschema wird beim Duplizieren nicht korrekt in Objektliste dargestellt<br>
[Bug]           Für Objektgruppen lassen sich keine Templates erstellen<br>
[Bug]           Suchergebnis "NOT" mit "OR" nicht nachvollziehbar.<br>
[Bug]           Suche: Fehlender Scrollbalken bzw. Scrollbutton/-funktion bei mehrseitigen Ergebnislisten.<br>
[Bug]           Objekt-Liste von Personengruppen stimmt nicht mit Konfiguration überein<br>
[Bug]           Bei einer Suche in Objektlisten stimmen die Seitenangaben nicht<br>
