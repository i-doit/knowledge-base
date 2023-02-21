# Changelog 1.4

[Erweiterung]   "Report Modul" wird zu "Report Manager"  
[Erweiterung]       Bearbeitung von Reports, welche mit dem Abfrage Editor erstellt wurden  
[Erweiterung]       Unterstützung von Benutzerdefinierten Kategorien  
[Erweiterung]       Sub-Anfrage von referenzierten Objekten zur Darstellung von mehr als nur dem Objektnamen  
[Erweiterung]       Gruppierung und Verschachtelung von Konditionen  
[Erweiterung]       Reports lassen sich nun kategorisieren  
[Erweiterung]   i-doit Api  
[Erweiterung]       Neue JSON-RPC Login Möglichkeiten zur Authentifizierung gegen die i-doit API (siehe JSON-RPC Doku 1.4)  
[Erweiterung]        JSON-RPC Batch requests (http://www.jsonrpc.org/specification#batch)  
[Erweiterung]       Möglichkeit zur Zählung von Objekten in Api Abfrage cmdb.object_types  
[Erweiterung]       Api Methode cmdb.object.read liefert nunmehr direkt das angefragt Objekt anstatt Array mit nur einem Key "0"  
[Erweiterung]   Export von Check MK Konfigurationen  
[Erweiterung]   Aus der Zuweisung der Cluster Verwaltungsinstanz wird nun eine Beziehung erzeugt  
[Erweiterung]   JDisc: Matching beim Aktualisieren nach Hostname, MAC und/oder IP-Adresse  
[Erweiterung]   JDisc: Erkeunng von VMware, Citrix und MS HyperV Cluster  
[Erweiterung]   JDisc: Neuer Objekttyp VRRP/HSRP Cluster zur Kategorisierung von Clustern  
[Erweiterung]   Netzwerkverbindungen bieten die Möglichkeit zur Dokumentation von TCP/UDP/ICMP Verbindungen  
[Erweiterung]       Neue Kategorie Listener  
[Erweiterung]       Neue Kategorie Connector  
[Erweiterung]       Report View zur Auswertung von allen dokumentierten Netzwerkverbindungen  
[Erweiterung]   Anzeige der Beziehungsart im Quickinfo Overlay  
[Erweiterung]   Die Beziehungsarten erhalten eine angepasste Oberfläche zum definieren der "Standard"-Gewichtung  
[Erweiterung]   Möglichkeit zur Anzeige von Inventarnummern im QR Code  
[Erweiterung]   Deinstallation von Modulen im Admin Center  
[Erweiterung]   Angabe eines Default VLANs in der Kategorie Netzwerk -> Port  
[Erweiterung]   Neues Modul: IT Service  
[Erweiterung]   OCS Inventory NG: Oberfläche modernisiert  
[Erweiterung]   In der Kategorie Kontaktzuweisung kann nun ein und derselbe Kontakt mit unterschiedlichen Rollen mehrfach zugewiesen werden.  
[Erweiterung]   Neue Verwaltungsoberfläche für Beziehungsarten  
[Erweiterung]   Die Report-View für QR-Codes bietet nun verschiedene Layouts an.  
[Erweiterung]   Neue Objekttypen "Land", "Stadt", "Flugzeug" und "Fahrzeug" mit entsprechenden Kategorien  
[Bugfix]        JDisc: Der Port Typ wird nicht importiert  
[Bugfix]        Diverse Probleme mit hochgeladenen Dateien  
[Bugfix]        LDAP Sync erzeugt leere Organisationsobjekte  
[Bugfix]        NDO Kategorie unter Ordner "Monitoring" wird nicht dargestellt  
[Bugfix]        Fehler beim Erzeugen von PDU Branches  
[Bugfix]        Kategorie Freigabenzugriff fehlt in der Listeneditierung  
[Bugfix]        Beschreibungsfelder werden in der Massenänderung nicht berücksichtigt  
[Bugfix]        VoIP-Telefone haben keine Allgemein-Kategorie  
[Bugfix]        Fehler: Not unique table/alias: 'isys_obj' im CSV-Import  
[Bugfix]        Globales Suchfeld erscheint auch bei fehlender Berechtigung für die Suchfunktion  
[Bugfix]        Spalten benutzerdefinierter Multi-Value-Kategorien können nicht sortiert werden  
[Bugfix]        JDisc: Weitere Eigenschaften in Kategorie Gerät (lokaler Massenspeicher) berücksichtigen  
[Bugfix]        JDisc: Datenbankinstanzen berücksichtigen  
[Bugfix]        Nagios-Host-Link ist nicht mehr vorhanden  
[Bugfix]        "LDAP Operations error" beim Suchen innerhalb der gesamten Domäne  
[Bugfix]        OCS Inventory NG: Einstellung für das automatische Überschreiben sämtlicher Softwarezuweisungen in OCS Konfiguration  
[Bugfix]        OCS Inventory NG: Weitere kleine Fehler behoben  
[Bugfix]        OCS Inventory NG: Ein Problem beim erkennen des Hostnames wurde gelöst  
[Bugfix]        [Module Manager] Missing "ZIP" extension returns wrong error message when installing/updating module  
[Bugfix]        [Module Manager] Fehler bei fehlender PHP ZIP Erweiterung  
[Bugfix]        Fehler in der Funktion "archivierte/gelöschte Kategorieeinträge löschen"  
[Bugfix]        Das Pflichtfeld für Standort lässt sich durch Auswahl von "-" umgehen  
[Bugfix]        Der CMDB Explorer startet standardmäßig im Einweg einklappen Modus, die Checkbox ist allerdings unselektiert  
[Bugfix]        Fehler beim Erzeugen von "PDU Branches"  
[Bugfix]        CMDB-Explorer: Man kann keine Ansicht aller IT-Services Typ XYZ erzeugen (z.B. Aller Business Services)  
[Bugfix]        Wird mit dem Controller ein LDAP Sync angestoßen und eine ID als Parameter angegeben, kommt ein Fehler  
[Bugfix]        In Datei-Browser: Beim Anlegen einer neuen Datei innerhalb des Browsers kann die Kategorie nur über ein festes Drop-Down-Feld ausgewählt werden  
[Bugfix]        Fehlerhafte Umlaute im Mandanten Namen nach Installation  
[Bugfix]        Benutzer, die über Rechte für einzelne Objekte verfügen, sehen im Objekt-Browser alle Objekte/Objekttypen und können diese zuweisen.  
[Bugfix]        Einige Aktionen bewirken keinen Logbuch-Eintrag  
[Bugfix]        Falls mehrere Mandanten vorhanden sind, wird die Sprache auf Englisch zurückgestellt, wenn diese nicht in allen Mandanten angepasst wurde.  
[Bugfix]        Kategorie "FC-Port" wird in Objekttyp "FC-Switch" separat und zusätzlich in der Ordner-Kategorie "Speichernetze" angezeigt.  
[Bugfix]        Tastaturnavigation in Objektlisten funktioniert nicht mehr  
[Bugfix]        CMDB-Explorer: Dynamische Objektgruppen können nicht aufgeklappt werden.  
[Bugfix]        Der Download-Button in der Handbuchzuweisung funktioniert nicht  
[Bugfix]        Reports erlauben mehrere Beschreibungsfelder in der Ausgabe nicht  
[Bugfix]        Systemübersicht in der Verwaltung bringt Fehlermeldung wenn die neue Version nicht überprüft werden kann  
[Bugfix]        CMDB-Explorer: Wenn ein IT-Service als Root gesetzt wird und ihm ein Objekt eines benutzerdefinierten Objekttyps zugewiesen wurde, erscheint beim Klick auf den IT-Service die Meldung "Error: Orientation not found. ('')"  
[Bugfix]        Purge-Button in Zuweisungskategorien entfernen (Zuweisung soll über den Objekt-Browser entfernt werden)  
[Bugfix]        Wenn eine Multi-Value-Kategorie auf der Übersichtsseite angezeigt und bei der Objekterstellung befüllt wird, wird bei jeder Verwendung des Speichern-Buttons ein neuer Eintrag in der Kategorie erzeugt  
[Bugfix]        Beim speichern der Kategorien C__CATS__CONTRACT_INFORMATION bzw. C__CATS__CONTRACT über die API tritt ein Fehler auf  
[Bugfix]        Online Report Lizenzauslastung zeigt auch die Lizenzen in Benutzung von archivierten oder gelöschten Objekten an.  
[Bugfix]        Mouseover bei Icons der Zuweisungsfelder fehlt  
[Bugfix]        Controller wirft unter SLES Fehlermeldung, weil php5 Binary nicht gefunden wurde  
[Bugfix]        Objektbrowser in LDEV Client filtert nicht nach rückwärtiger Kategorie  
[Bugfix]        Ein Editor kann sich der Personengruppe "Admin" zuweisen und erbt im Anschluss alle Rechte dieser Gruppe  
[Bugfix]        Benutzerdefinierte Objekttypen mit Umlaut im Titel werden in der Schrankansicht nicht korrekt dargestellt  
[Bugfix]        Sortierung von IP-Adressen ist nicht korrekt (alphanummerisch)  
[Bugfix]        QR Code Logos haben teilweise eine falsche Höhe  
[Bugfix]        API: Die Erstellung eines neuen Logbuch Eintrags liefert die ID des erstellten Eintrags nicht zurück  
[Bugfix]        Loginventory und JDisc erzeugen unnötige Logdateien im Temporären Verzeichnis  
[Bugfix]        SQL-Fehler beim Löschen von Objekt-Sperrungen  
[Bugfix]        Ein neuer LDAP Filter hat als Wert immer "undefined"  
[Bugfix]        Fehler beim Filtern von negativen Zahlen  
[Bugfix]        [h-inventory] Hosts werden dem falschen Layer-3-Netz zugeordnet (Global v4)  
[Bugfix]        Nagios service assignment zeigt nicht alle Einträge an  
[Bugfix]        In der Monitoring Konfiguration funktioniert der Klick auf die Listenzeile nicht  
[Bugfix]        Erzeugen einer neuen Gruppe über eine Gruppenzuweisung ist nicht möglich  
[Bugfix]        Der Reader sieht im Quicklaunch Widget Buttons zu dessen Funktionen er nicht berechtigt ist  
[Bugfix]        Der Status-Link für Listen fehlt in Nagios NDO Kategorie  
[Bugfix]        Listenansicht erfordert Zugriff auf global alle Kategorien  
[Bugfix]        Benutzerdefinierte Workflows tauchen nicht unter my-idoit im Bereich der erstellten Auftrage auf  
[Bugfix]        "Check_MK" Modul Fehlermeldung, obwohl das Modul noch nicht veröffentlicht ist  
[Bugfix]        Reportview Konsistenzprüfung funktioniert nicht mehr  
[Bugfix]        In einer gleichgerichteten Beziehung sollen nur Beziehungen auswählbar sein  
[Bugfix]        Beim Laden der Templates werden PHP Fehlermeldungen dargestellt  
[Bugfix]        Beschreibungsfeld bei Benutzerdefinierten Kategorien werden nicht exportiert und importiert.  
[Bugfix]        Änderungen in "läuft auf" in der Kategorie "Gastsysteme" wird nicht gespeichert.  
[Bugfix]        Im Controller Interface für import, können csv und cabling importe genutzt werden, welche hier allerdings keine Funktion haben  
[Bugfix]        Beim Abfrageeditor werden gleichnamige Spalten im Ergebnis überschrieben  
[Bugfix]        Button zur Anzeige des Nagios-Status kann in der Listenansicht nicht angezeigt werden.  
[Bugfix]        PHP Check für vorhandene "GD Lib" Extension  
[Bugfix]        Wenn ein Benutzer keine Rechte für die Bearbeitung innerhalb der CMDB hat, kann er auch nicht sein eigenes Passwort ändern  
[Bugfix]        Behebung eines Nagios status.cgi Link Problems  
[Bugfix]        Remote File Disclosure Sicherheitslücke im Datei Browser wurde behoben  
[Bugfix]        SAN-Zoning-Browser: Auswahl der SAN-Zone wählt eine alternative SAN-Zone aus, als die manuelle Auswahl  
[Bugfix]        Listeneditierung: Error Meldung bei Speichern in Kategorie Softwarezuweisung  
[Bugfix]        Eigenschaft "Name" aus spez. Kategorie "Datenbankschema" wird bei Auswahl immer leer in der Listenansicht angezeigt.  
[Bugfix]        View "Keine Beziehungen" funktioniert nicht korrekt  
[Bugfix]        Keine Speicherung unter Anwendungen -> Installation (neu)  
[Bugfix]        In der Anschluss Kategorie wird der Titel vom Ausgangsanschluss nicht korrekt angelegt, wenn man gleichzeitig ein Ausgangsanschluss anlegen will.  
[Bugfix]        Beim Annehmen von Workflows erscheint die Fehlermeldung "Call of unknown method 'clear_compiled_tpl'." (Falls ein Mailserver konfiguriert wurde und eine Mail verschickt wird)  
[Bugfix]        Kategorie "logische Ports": Aktualisierung der zugewiesenen Ports über die API  
[Bugfix]        Kategorie "logische Ports": Daten bleiben nach dem Purgen erhalten  
[Bugfix]        LDAP sync läuft immer Rekursiv auch wenn das Feld Rekursion in den Einstellungen der LDAP Server deaktiviert ist.  
[Bugfix]        Arbeitsplatz: Zugewiesene Endgeräte können zwar gelöscht werden, werden sie aber woanders zugewiesen, wird die Beziehung nicht gelöscht.  
[Bugfix]        Wenn ein Objekt gelockt wird, werden die Navigations-Buttons nicht ausgeblendet.  
[Bugfix]        In Kategorie Anschrift ist es nicht möglich im Feld Hausnummer Buchstaben einzutragen.  
[Bugfix]        Im CMDB-Explorer ist es nicht möglich einzelne IT-Services in der IT-Serviceansicht darzustellen.  
[Bugfix]        Lizenzen: Wenn die Übersichtsseite verwendet wird, ist die Erzeugung von Lizenzen nicht möglich.  
[Bugfix]        CSV-Import: Der erste Button vor dem Mapping darf nicht "Importieren" heissen, sondern z.B. "Datei analysieren"  
[Bugfix]        Bei den Beschreibungsfeldern der Kategorien Passwort und Personengruppen kommt es bei langen Beschreibungen zu Datenverlust.  
[Bugfix]        JDisc: HDD-Kapazitäten in schlecht ablesbaren Einheiten importiert  
[Bugfix]        JDisc: Controller bricht Import sofort ab (0 Objekte gefunden), obwohl Import über Weboberfläche möglich.  
[Bugfix]        Mit jedem neu erstellten Netz wird der Eintrag der DNS Domäne in der Kategorie verdoppelt.  
[Bugfix]        Feld "Hausnummer" (Kat: Adresse) erlaubt nur die Eingabe von Zahlen  
[Bugfix]        LDAP Konfiguration: Anzeigefehler  
[Bugfix]        Probleme bei der Verknüpfung von Modell & Hersteller  
[Bugfix]        Behebung eines Problems beim Verändern der Objektanzahl einer Hosting Subscription  
[Bugfix]        Vererbte Services bleiben trotz Archivierung der Softwarezuweisung "Aktiv"  
  
