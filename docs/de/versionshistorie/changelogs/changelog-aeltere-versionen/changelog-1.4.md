# Changelog 1.4

[Erweiterung]   "Report Modul" wird zu "Report Manager"<br>
[Erweiterung]       Bearbeitung von Reports, welche mit dem Abfrage Editor erstellt wurden<br>
[Erweiterung]       Unterstützung von Benutzerdefinierten Kategorien<br>
[Erweiterung]       Sub-Anfrage von referenzierten Objekten zur Darstellung von mehr als nur dem Objektnamen<br>
[Erweiterung]       Gruppierung und Verschachtelung von Konditionen<br>
[Erweiterung]       Reports lassen sich nun kategorisieren<br>
[Erweiterung]   i-doit Api<br>
[Erweiterung]       Neue JSON-RPC Login Möglichkeiten zur Authentifizierung gegen die i-doit API (siehe JSON-RPC Doku 1.4)<br>
[Erweiterung]        JSON-RPC Batch requests (<http://www.jsonrpc.org/specification#batch>)<br>
[Erweiterung]       Möglichkeit zur Zählung von Objekten in Api Abfrage cmdb.object_types<br>
[Erweiterung]       Api Methode cmdb.object.read liefert nunmehr direkt das angefragt Objekt anstatt Array mit nur einem Key "0"<br>
[Erweiterung]   Export von Check MK Konfigurationen<br>
[Erweiterung]   Aus der Zuweisung der Cluster Verwaltungsinstanz wird nun eine Beziehung erzeugt<br>
[Erweiterung]   JDisc: Matching beim Aktualisieren nach Hostname, MAC und/oder IP-Adresse<br>
[Erweiterung]   JDisc: Erkeunng von VMware, Citrix und MS HyperV Cluster<br>
[Erweiterung]   JDisc: Neuer Objekttyp VRRP/HSRP Cluster zur Kategorisierung von Clustern<br>
[Erweiterung]   Netzwerkverbindungen bieten die Möglichkeit zur Dokumentation von TCP/UDP/ICMP Verbindungen<br>
[Erweiterung]       Neue Kategorie Listener<br>
[Erweiterung]       Neue Kategorie Connector<br>
[Erweiterung]       Report View zur Auswertung von allen dokumentierten Netzwerkverbindungen<br>
[Erweiterung]   Anzeige der Beziehungsart im Quickinfo Overlay<br>
[Erweiterung]   Die Beziehungsarten erhalten eine angepasste Oberfläche zum definieren der "Standard"-Gewichtung<br>
[Erweiterung]   Möglichkeit zur Anzeige von Inventarnummern im QR Code<br>
[Erweiterung]   Deinstallation von Modulen im Admin-Center<br>
[Erweiterung]   Angabe eines Default VLANs in der Kategorie Netzwerk -> Port<br>
[Erweiterung]   Neues Modul: IT Service<br>
[Erweiterung]   OCS Inventory NG: Oberfläche modernisiert<br>
[Erweiterung]   In der Kategorie Kontaktzuweisung kann nun ein und derselbe Kontakt mit unterschiedlichen Rollen mehrfach zugewiesen werden.<br>
[Erweiterung]   Neue Verwaltungsoberfläche für Beziehungsarten<br>
[Erweiterung]   Die Report-View für QR-Codes bietet nun verschiedene Layouts an.<br>
[Erweiterung]   Neue Objekttypen "Land", "Stadt", "Flugzeug" und "Fahrzeug" mit entsprechenden Kategorien<br>
[Bugfix]        JDisc: Der Port Typ wird nicht importiert<br>
[Bugfix]        Diverse Probleme mit hochgeladenen Dateien<br>
[Bugfix]        LDAP Sync erzeugt leere Organisationsobjekte<br>
[Bugfix]        NDO Kategorie unter Ordner "Monitoring" wird nicht dargestellt<br>
[Bugfix]        Fehler beim Erzeugen von PDU Branches<br>
[Bugfix]        Kategorie Freigabenzugriff fehlt in der Listeneditierung<br>
[Bugfix]        Beschreibungsfelder werden in der Massenänderung nicht berücksichtigt<br>
[Bugfix]        VoIP-Telefone haben keine Allgemein-Kategorie<br>
[Bugfix]        Fehler: Not unique table/alias: 'isys_obj' im CSV-Import<br>
[Bugfix]        Globales Suchfeld erscheint auch bei fehlender Berechtigung für die Suchfunktion<br>
[Bugfix]        Spalten benutzerdefinierter Multi-Value-Kategorien können nicht sortiert werden<br>
[Bugfix]        JDisc: Weitere Eigenschaften in Kategorie Gerät (lokaler Massenspeicher) berücksichtigen<br>
[Bugfix]        JDisc: Datenbankinstanzen berücksichtigen<br>
[Bugfix]        Nagios-Host-Link ist nicht mehr vorhanden<br>
[Bugfix]        "LDAP Operations error" beim Suchen innerhalb der gesamten Domäne<br>
[Bugfix]        OCS Inventory NG: Einstellung für das automatische Überschreiben sämtlicher Softwarezuweisungen in OCS Konfiguration<br>
[Bugfix]        OCS Inventory NG: Weitere kleine Fehler behoben<br>
[Bugfix]        OCS Inventory NG: Ein Problem beim erkennen des Hostnames wurde gelöst<br>
[Bugfix]        [Module Manager] Missing "ZIP" extension returns wrong error message when installing/updating module<br>
[Bugfix]        [Module Manager] Fehler bei fehlender PHP ZIP Erweiterung<br>
[Bugfix]        Fehler in der Funktion "archivierte/gelöschte Kategorieeinträge löschen"<br>
[Bugfix]        Das Pflichtfeld für Standort lässt sich durch Auswahl von "-" umgehen<br>
[Bugfix]        Der CMDB Explorer startet standardmäßig im Einweg einklappen Modus, die Checkbox ist allerdings unselektiert<br>
[Bugfix]        Fehler beim Erzeugen von "PDU Branches"<br>
[Bugfix]        CMDB-Explorer: Man kann keine Ansicht aller IT-Services Typ XYZ erzeugen (z.B. Aller Business Services)<br>
[Bugfix]        Wird mit dem Controller ein LDAP Sync angestoßen und eine ID als Parameter angegeben, kommt ein Fehler<br>
[Bugfix]        In Datei-Browser: Beim Anlegen einer neuen Datei innerhalb des Browsers kann die Kategorie nur über ein festes Drop-Down-Feld ausgewählt werden<br>
[Bugfix]        Fehlerhafte Umlaute im Mandanten Namen nach Installation<br>
[Bugfix]        Benutzer, die über Rechte für einzelne Objekte verfügen, sehen im Objekt-Browser alle Objekte/Objekttypen und können diese zuweisen.<br>
[Bugfix]        Einige Aktionen bewirken keinen Logbuch-Eintrag<br>
[Bugfix]        Falls mehrere Mandanten vorhanden sind, wird die Sprache auf Englisch zurückgestellt, wenn diese nicht in allen Mandanten angepasst wurde.<br>
[Bugfix]        Kategorie "FC-Port" wird in Objekttyp "FC-Switch" separat und zusätzlich in der Ordner-Kategorie "Speichernetze" angezeigt.<br>
[Bugfix]        Tastaturnavigation in Objektlisten funktioniert nicht mehr<br>
[Bugfix]        CMDB-Explorer: Dynamische Objektgruppen können nicht aufgeklappt werden.<br>
[Bugfix]        Der Download-Button in der Handbuchzuweisung funktioniert nicht<br>
[Bugfix]        Reports erlauben mehrere Beschreibungsfelder in der Ausgabe nicht<br>
[Bugfix]        Systemübersicht in der Verwaltung bringt Fehlermeldung wenn die neue Version nicht überprüft werden kann<br>
[Bugfix]        CMDB-Explorer: Wenn ein IT-Service als Root gesetzt wird und ihm ein Objekt eines benutzerdefinierten Objekttyps zugewiesen wurde, erscheint beim Klick auf den IT-Service die Meldung "Error: Orientation not found. ('')"<br>
[Bugfix]        Purge-Button in Zuweisungskategorien entfernen (Zuweisung soll über den Objekt-Browser entfernt werden)<br>
[Bugfix]        Wenn eine Multi-Value-Kategorie auf der Übersichtsseite angezeigt und bei der Objekterstellung befüllt wird, wird bei jeder Verwendung des Speichern-Buttons ein neuer Eintrag in der Kategorie erzeugt<br>
[Bugfix]        Beim speichern der Kategorien C__CATS__CONTRACT_INFORMATION bzw. C__CATS__CONTRACT über die API tritt ein Fehler auf<br>
[Bugfix]        Online Report Lizenzauslastung zeigt auch die Lizenzen in Benutzung von archivierten oder gelöschten Objekten an.<br>
[Bugfix]        Mouseover bei Icons der Zuweisungsfelder fehlt<br>
[Bugfix]        Controller wirft unter SLES Fehlermeldung, weil php5 Binary nicht gefunden wurde<br>
[Bugfix]        Objektbrowser in LDEV Client filtert nicht nach rückwärtiger Kategorie<br>
[Bugfix]        Ein Editor kann sich der Personengruppe "Admin" zuweisen und erbt im Anschluss alle Rechte dieser Gruppe<br>
[Bugfix]        Benutzerdefinierte Objekttypen mit Umlaut im Titel werden in der Schrankansicht nicht korrekt dargestellt<br>
[Bugfix]        Sortierung von IP-Adressen ist nicht korrekt (alphanummerisch)<br>
[Bugfix]        QR Code Logos haben teilweise eine falsche Höhe<br>
[Bugfix]        API: Die Erstellung eines neuen Logbuch Eintrags liefert die ID des erstellten Eintrags nicht zurück<br>
[Bugfix]        Loginventory und JDisc erzeugen unnötige Logdateien im Temporären Verzeichnis<br>
[Bugfix]        SQL-Fehler beim Löschen von Objekt-Sperrungen<br>
[Bugfix]        Ein neuer LDAP Filter hat als Wert immer "undefined"<br>
[Bugfix]        Fehler beim Filtern von negativen Zahlen<br>
[Bugfix]        [h-inventory] Hosts werden dem falschen Layer-3-Netz zugeordnet (Global v4)<br>
[Bugfix]        Nagios service assignment zeigt nicht alle Einträge an<br>
[Bugfix]        In der Monitoring Konfiguration funktioniert der Klick auf die Listenzeile nicht<br>
[Bugfix]        Erzeugen einer neuen Gruppe über eine Gruppenzuweisung ist nicht möglich<br>
[Bugfix]        Der Reader sieht im Quicklaunch Widget Buttons zu dessen Funktionen er nicht berechtigt ist<br>
[Bugfix]        Der Status-Link für Listen fehlt in Nagios NDO Kategorie<br>
[Bugfix]        Listenansicht erfordert Zugriff auf global alle Kategorien<br>
[Bugfix]        Benutzerdefinierte Workflows tauchen nicht unter my-idoit im Bereich der erstellten Auftrage auf<br>
[Bugfix]        "Check_MK" Modul Fehlermeldung, obwohl das Modul noch nicht veröffentlicht ist<br>
[Bugfix]        Reportview Konsistenzprüfung funktioniert nicht mehr<br>
[Bugfix]        In einer gleichgerichteten Beziehung sollen nur Beziehungen auswählbar sein<br>
[Bugfix]        Beim Laden der Templates werden PHP Fehlermeldungen dargestellt<br>
[Bugfix]        Beschreibungsfeld bei Benutzerdefinierten Kategorien werden nicht exportiert und importiert.<br>
[Bugfix]        Änderungen in "läuft auf" in der Kategorie "Gastsysteme" wird nicht gespeichert.<br>
[Bugfix]        Im Controller Interface für import, können csv und cabling importe genutzt werden, welche hier allerdings keine Funktion haben<br>
[Bugfix]        Beim Abfrageeditor werden gleichnamige Spalten im Ergebnis überschrieben<br>
[Bugfix]        Button zur Anzeige des Nagios-Status kann in der Listenansicht nicht angezeigt werden.<br>
[Bugfix]        PHP Check für vorhandene "GD Lib" Extension<br>
[Bugfix]        Wenn ein Benutzer keine Rechte für die Bearbeitung innerhalb der CMDB hat, kann er auch nicht sein eigenes Passwort ändern<br>
[Bugfix]        Behebung eines Nagios status.cgi Link Problems<br>
[Bugfix]        Remote File Disclosure Sicherheitslücke im Datei Browser wurde behoben<br>
[Bugfix]        SAN-Zoning-Browser: Auswahl der SAN-Zone wählt eine alternative SAN-Zone aus, als die manuelle Auswahl<br>
[Bugfix]        Listeneditierung: Error Meldung bei Speichern in Kategorie Softwarezuweisung<br>
[Bugfix]        Eigenschaft "Name" aus spez. Kategorie "Datenbankschema" wird bei Auswahl immer leer in der Listenansicht angezeigt.<br>
[Bugfix]        View "Keine Beziehungen" funktioniert nicht korrekt<br>
[Bugfix]        Keine Speicherung unter Anwendungen -> Installation (neu)<br>
[Bugfix]        In der Anschluss Kategorie wird der Titel vom Ausgangsanschluss nicht korrekt angelegt, wenn man gleichzeitig ein Ausgangsanschluss anlegen will.<br>
[Bugfix]        Beim Annehmen von Workflows erscheint die Fehlermeldung "Call of unknown method 'clear_compiled_tpl'." (Falls ein Mailserver konfiguriert wurde und eine Mail verschickt wird)<br>
[Bugfix]        Kategorie "logische Ports": Aktualisierung der zugewiesenen Ports über die API<br>
[Bugfix]        Kategorie "logische Ports": Daten bleiben nach dem Purgen erhalten<br>
[Bugfix]        LDAP sync läuft immer Rekursiv auch wenn das Feld Rekursion in den Einstellungen der LDAP Server deaktiviert ist.<br>
[Bugfix]        Arbeitsplatz: Zugewiesene Endgeräte können zwar gelöscht werden, werden sie aber woanders zugewiesen, wird die Beziehung nicht gelöscht.<br>
[Bugfix]        Wenn ein Objekt gelockt wird, werden die Navigations-Buttons nicht ausgeblendet.<br>
[Bugfix]        In Kategorie Anschrift ist es nicht möglich im Feld Hausnummer Buchstaben einzutragen.<br>
[Bugfix]        Im CMDB-Explorer ist es nicht möglich einzelne IT-Services in der IT-Serviceansicht darzustellen.<br>
[Bugfix]        Lizenzen: Wenn die Übersichtsseite verwendet wird, ist die Erzeugung von Lizenzen nicht möglich.<br>
[Bugfix]        CSV-Import: Der erste Button vor dem Mapping darf nicht "Importieren" heissen, sondern z.B. "Datei analysieren"<br>
[Bugfix]        Bei den Beschreibungsfeldern der Kategorien Passwort und Personengruppen kommt es bei langen Beschreibungen zu Datenverlust.<br>
[Bugfix]        JDisc: HDD-Kapazitäten in schlecht ablesbaren Einheiten importiert<br>
[Bugfix]        JDisc: Controller bricht Import sofort ab (0 Objekte gefunden), obwohl Import über Weboberfläche möglich.<br>
[Bugfix]        Mit jedem neu erstellten Netz wird der Eintrag der DNS Domäne in der Kategorie verdoppelt.<br>
[Bugfix]        Feld "Hausnummer" (Kat: Adresse) erlaubt nur die Eingabe von Zahlen<br>
[Bugfix]        LDAP Konfiguration: Anzeigefehler<br>
[Bugfix]        Probleme bei der Verknüpfung von Modell & Hersteller<br>
[Bugfix]        Behebung eines Problems beim Verändern der Objektanzahl einer Hosting Subscription<br>
[Bugfix]        Vererbte Services bleiben trotz Archivierung der Softwarezuweisung "Aktiv"<br>
