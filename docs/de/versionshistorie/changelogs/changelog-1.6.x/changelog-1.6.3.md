# Changelog 1.6.3

[Verbesserung]  Direkte Verlinkung von URLs in Report-Ergebnissen<br>
[Verbesserung]  Ergänzung der zugewiesenen Lizenz in Kategorie "Installation"<br>
[Verbesserung]  Beschleunigte Suche durch Ausklammern von Beziehungen<br>
[Verbesserung]  Drastische Performanceverbesserung beim Archivieren und Wiederherstellen des Logbuchs in die "lokale Datenbank"<br>
[Änderung]      Feldtypen von Benutzerdefinierten Kategorien können nun aus Sicherheitsgründen nach Anlage nicht mehr bearbeitet werden<br>
[Bug]           Quickpurge-Button ist in Kategorie "Kontaktzuweisung" nicht verfügbar<br>
[Bug]           Eintrag in die Suchzeile eines Objekt-Browsers wird in den Filter einer dahinterliegenden Kategorieliste übernommen<br>
[Bug]           Fehler bei der Aktivierung der SNMP-Abfragen in Kategorie "PDU".<br>
[Bug]           Recht zur Einsicht von Services hat keine Auswirkungen auf "Extras" => "Services"<br>
[Bug]           Nächstmögliches Vertragsende wird bei verwendung von "Fristablauf" nicht korrekt berechnet<br>
[Bug]           Leeren des Caches verfälscht die Systemeinstellungen<br>
[Bug]           Wenn leere Kategorien ausgeblendet werden, werden Ordner-Kategorien beim ersten Aufruf ebenfalls nicht angezeigt<br>
[Bug]           Bei der ersten Erstellung kann die Anzahl an Slots eines Chassis nicht angegeben werden.<br>
[Bug]           Physikalische Standorte mit Hochkomma können im Standort-Browser nicht ausgewählt werden.<br>
[Bug]           Systemfehlermeldung unter "Beziehungen" nach Klick auf "Archivieren" oder "Quickpurge"<br>
[Bug]           Report Modul: Attribut "Beschreibung" aus der Globalen Kategorie "Standort" wird nicht angeboten.<br>
[Bug]           Fehlermeldung in Beziehungen nach Klick auf "Gehe-zur-letzten-Seite"-Button<br>
[Bug]           Attribut "Geschwindigkeit" eines Ports wird über die Listeneditierung im falschen Format gespeichert.<br>
[Bug]           Multi-Value-Option "Ersetzen" des CSV-Imports berücksichtigt keine benutzerdefinierten Kategorien<br>
[Bug]           Unter gewissen Umständen ist das Drag and Drop in Objektlisten nicht möglich<br>
[Bug]           Listeneditierung lässt das Bearbeiten einer Katgorie nicht zu, wenn ein Benutzer diese nur in einigen Objekttypen bearbeiten darf<br>
[Bug]           Beziehungsfehler "Your relation type for table 'isys_catg_contact_list' is empty" beim Verknüpfen von Kontakten<br>
[Bug]           Hinweis bei Eingabe von 0 Tagen für die Archivier-Einstellung ist inkorrekt<br>
[Bug]           Listeneditierung: Falsche Darstellung der Ja-Nein Felder von Benutzerdefinierten Kategorien<br>
[Bug]           Überflüssiger Edit-Button im Edit-Mode unter Logbuch-Archivieren<br>
[Bug]           Sonderzeichen in Textfeldern führen dazu, dass Änderungen über die Listeneditierung nicht gespeichert werden<br>
[Bug]           Beim CSV-Import über den Controller hat die Einstellung bezüglich der Überschriftenzeile keine Auswirkung<br>
[Bug]           Softwarezuweisung: Anwendungen haben teilweise eine Priorität von Primary, obwohl diese nur bei Betriebssystemen Einsatz finden sollte<br>
[Bug]           Eigenes Währungsformat hat keine Auswirkung auf die Darstellung<br>
[Bug]           Benutzerdefinierte Objekttypen tauchen im Vertragsbrowser nicht unter "kürzlich erstellt" auf<br>
[Bug]           Restgarantie in Kategorie Buchhaltung errechnet auch verbleibende Tage, wenn das Datum der Anschaffung in der Zukunft liegt<br>
[Bug]           Nach CSV-Import einer Netzadresse inkl. Suffix werden Netzmaske und Adressbereich erst nach einmaligem Bearbeiten angezeigt<br>
[Bug]           Beim CSV-Import über den i-doit Controller werden verknüpfte Objekte nicht angelegt, wenn diese nicht existieren<br>
[Bug]           Mitglieder einer selbstdefinierten Personengruppe erhalten nicht die vollen Ergebnisse einer Suchanfrage<br>
[Bug]           Nagios-Export exportiert im Attribut "display_name" den Wert 1 statt des eigentlichen Namens<br>
[Bug]           Attribut "virtual_machine" aus Kategorie C__CATG__VIRTUAL_MACHINE wird nicht korrekt über die API ausgelesen<br>
[Bug]           Inhalte aus benutzerdefinierten Kategorien werden nicht dupliziert.<br>
[Bug]           Fehlermeldung und Buttontext-Änderung in Dashboard-Konfiguration nach Klick auf "Überschreiben" ohne Objektauswahl<br>
[Bug]           SQL-Fehler beim Verändern der Check_MK Hostmerkmale<br>
[Bug]           Sortierung einer Spalte in der Ergebnisliste einer Suche leert die Seite<br>
[Bug]           Fehler beim Purgen eines Eintrags in der Kategorie "SOA-Stacks"<br>
[Bug]           Verknüpfung eines Layer-3-Netzes in der Kategorie "Hostadresse" über den CSV-Import nicht möglich<br>
[Bug]           "Doppelte Single-Value Einträge löschen" hat keinen Einfluss auf benutzerdefinierte Kategorien<br>
[Bug]           Die Portverbindungen (unter JDisc "Connections") werden nicht mehr importiert.<br>
[Bug]           Objekt-Bezeichnungen in Kategorie "Schränke" werden nur dann angezeigt, wenn das Objekt mind. 2 Höheneinheiten einnimmt<br>
[Bug]           WAN-Leitungs-Kapazitäten werden fälschlicherweise in der Listendarstellung umgerechnet<br>
[Bug]           QR-Code im Popup anders, als in der Druckansicht<br>
[Bug]           Fehler beim Ergänzen des Attributs "Variante" in die Listenansicht<br>
[Bug]           Berechtigung zur Einsicht einzelner Objekte erlaubt nicht automatisch die Ansicht der Objekt-Liste<br>
[Bug]           Logbucheintrag für den Einschub in einen Slot wird innerhalb eines Geräts nicht im Logbuch dargestellt<br>
[Bug]           CSV-Import Fehler: CSV-Helper does not exist: csv_helper__virtual<br>
[Bug]           Falscher "mouse over"-Text in Liste für "Existierende Termine"<br>
[Bug]           Api Methode "cmdb.category.create" liefert bei bereits existierenden Single Value Einträgen "true" als "id" zurück<br>
[Bug]           Einheiten zu Vertragsinformationen werden im Report nicht ausgegeben<br>
[Bug]           Attribute zu WAN-Leitungen werden bei Standard-Listendarstellung nicht korrekt angezeigt<br>
[Bug]           Darstellungfehler nach CSV-Import<br>
[Bug]           "Editieren" auf Übersichtsseiten ist für User mit Reader-Rechten nicht ausgegraut<br>
[Bug]           Lokationen einer CSV-Datei werden nicht importiert und verknüpft, wenn die Standortobjekte noch nicht existieren<br>
[Bug]           "Objekt über Klick auf die Zeile" lässt sich nicht speichern<br>
[Bug]           CSV-Import von Speicherkapazität gibt Fehlermeldung zurück<br>
[Bug]           Beim CSV-Import ändert sich das Profil von alleine<br>
[Bug]           Kategorie SOA-Stacks kann nicht zugewiesen werden<br>
[Bug]           CSV-Import Profil-Auswahl verschwindet bei kleineren Fenstern hinter der Auswahl des glob. Objekttyps<br>
[Bug]           Fehler bei der Standortberechtigung von Kategorien und Objekten in einer Lokation<br>
[Bug]           Rechte auf Kategorien unterhalb eines Standorts verhindern die Darstellung von Kategorien in der Listenkonfiguration<br>
[Bug]           Feldvalidierung (Eindeutigkeit) funktioniert nicht für benutzerdefinierte Kategorien<br>
[Bug]           Das zugeordnete Netze unter Hostadresse verändert sich beim erzeugen einer IPv4-Adresse<br>
[Bug]           Unpassende und ungeordnete Ausnahmenanzeige für das Datum-Feld unter Workflow-Parameter<br>
[Bug]           Ablauf einer Kündigungsfrist wird nicht benachrichtigt, wenn die Kündigungsfrist auf 0 steht<br>
[Bug]           Recht auf Kategorien wird beim erneuten Laden der Konfiguration nicht dargestellt<br>
[Bug]           Whitelist beim JDisc-Import akzeptiert keine Sonderzeichen/Leerzeichen<br>
[Bug]           Ausblenden eines Objekttyps führt dazu, dass Objekte dieses Typs nicht in Schrankansichten dargestellt werden<br>
[Bug]           JDisc-Import importiert einige Werte wiederholt und erzeugt unnötige Logbuch-Einträge<br>
[Bug]           Fehler beim Import von i-doit XML-Dateien<br>
[Bug]           Scrollen in der Menü-Leiste erfolgt lediglich nach links<br>
[Bug]           Auswahl von "Objekt1" und "Objekt2" aus "Beziehungsdetails" führt zu einem Fehler in der Liste der Beziehungen<br>
[Bug]           Schaltfläche zum Löschen von XML-Dateien hat keine Auswirkung<br>
[Bug]           Datenbankfehler beim Aufruf der Kategorie "Dateien" => "Zugewiesene Dateien"<br>
[Bug]           Attribut "Virtuelle Maschine" kann nicht über den CSV-Import befüllt werden<br>
[Bug]           Kategorie "Betriebssystem" kann nicht über die Listeneditierung bearbeitet werden.<br>
[Bug]           XML-Export exportiert keine benutzerdefinierten Kategorien<br>
[Bug]           Fehler in der Kontaktzuweisung im CSV-Import<br>
[Bug]           Doppeltes Speichern zerstört Softwarezuweisung<br>
[Bug]           Berechnung des nächstmöglichen Vertragsendes berechnet bei längeren Zeiträumen falsch<br>
[Bug]           Button für die Erstellung eines Objekts aus Template dauerhaft ausgegraut<br>
[Bug]           Lösen eines Objekts aus einem Netz lädt die Liste nicht automatisch neu<br>
[Bug]           Attribut "Versionsnummer" in Kategorie "Betriebssystem" wird bei Massenänderung nicht übernommen<br>
[Bug]           Legende wird in IP-Liste ausgeblendet, wenn die Auflösung nicht ausreicht, diese auf einer Seite darzustellen.<br>
[Bug]           Rechtschreibfehler in der Beschreibung der JDisc-Import Modi<br>
[Bug]           Bearbeitung der Kategorie "Buchhaltung" über Listeneditierung nur möglich, wenn "Eingekauft bei" zuvor gefüllt wurde.<br>
[Bug]           Servicezuweisung zu mehreren Objekten über die Listeneditierung wird nicht gespeichert<br>
[Bug]           Ausgeklapptes Extras-Menü ist verschoben<br>
[Bug]           In der Betriebssystem-Kategorie wird das gepflegte Betriebssystem nicht dargestellt<br>
[Bug]           "Gemanagte Geräte" können nicht über die Listeneditierung ergänzt werden.<br>
[Bug]           Event-Funktion wird bei Änderungen in Kategorie "Kontaktzuweisung" nicht ausgelöst<br>
[Bug]           Event-Funktion wird bei einem Purge in benutzerdefinierten Kategorien nicht ausgelöst<br>
[Bug]           Verwendung von mehr als 9 LDAP-Servern nicht möglich<br>
[Bug]           Verbundene Router und verbundene Netze in Kategorie "WAN-Leitungen" können nicht gelöst werden<br>
[Bug]           Im Beschreibungsfeld eingetragenen "\\" verschwinden im Logbucheintrag<br>
[Bug]           Listenansicht zeigt räumlich zugeordnete Objekte nicht an<br>
[Bug]           CSV-Import von Netzen importiert Netzmaske falsch<br>
[Bug]           Zuweisung eines Objekts eines benutzerdef. Objekttyps im Attribut "Eingekauft bei" führt beim Duplizieren des Objekts zur Anlage eines neuen Objekts<br>
[Bug]           Report-Kategorien können nicht sortiert werden<br>
[Bug]           Fehlermeldung beim Aufruf der Lizenzübersicht<br>
[Bug]           Wert "0" kann nicht in benutzerdefinierte Dialog-Plus-Felder über den CSV-Import importiert werden<br>
[Bug]           Kategorie "Gerät": Einträge für SSD und SD-Card sind doppelt<br>
[Bug]           Datumsfelder in benutzerdefinierten Kategorien werden nicht über den CSV-Import befüllt<br>
[Bug]           Feld in Kategorie SLA kann nicht verwendet werden<br>
[Bug]           Das in Beziehung stehende Objekt einer Impliziten Beziehung darf nicht über die Kategorie "Beziehungen" verändert werden.<br>
[Bug]           Listeneditierung zeigt einen Validierungsfehler, wenn ein Feld als eindeutig definiert wurde<br>
[Bug]           Verwendung eines Reports in E-Mail-Benachrichtigung gibt HTML-Tags von Beschreibungsfeldern aus<br>
[Bug]           Regulärer Ausdruck für ein Beschreibungsfeld muss die Zeichen < > & und ; erlauben, ansonsten kommt es zu einer Fehlermeldung<br>
[Bug]           OCS Import kann via "mysqli" keine Datenbank-Verbindung aufbauen<br>
