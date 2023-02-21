# Changelog 1.5.1

[Neue Funktion] Neue zusätzliche Lizenzform "Multi-tenant buyers licence"  
[Verbesserung]  Schrank-Statistik lässt sich nicht einklappen  
[Verbesserung]  JDisc: weitere Beschleunigungen beim Handling des VLAN Imports  
[Verbesserung]  Formfaktor hinter Objekten in Schrank-Kategorie darstellen  
[Verbesserung]  Beschleunigung des JDisc Imports über den controller (php-cli)  
[Verbesserung]  Beschleunigte Filterung nach Benutzer im Logbuch bei sehr hoher Anzahl an Einträgen  
[Verbesserung]  Security: config.inc.php backups könnten per Brute-Force ausgelesen werden  
[Änderung]      Umbenennung "Desktop" nach "Client" in englischer Übersetzung  
[Bug]           Kategorie "Service": Beschreibung wird nicht gespeichert  
[Bug]           Kategorie "Grafikkarte" auf der Übersichtsseite erzeugt gleichzeitig bei Neuanlage eines Objekts einen Eintrag in Kategorie "Grafikkarte".  
[Bug]           Recht auf Objekte unterhalb einer Lokation verursacht unter Umständen sehr lange Ladezeiten  
[Bug]           Fehler beim Purgen eines Objekts, wenn Objektliste gefiltert wurde  
[Bug]           Fehler bei Validierung von IP Adressen über die API  
[Bug]           Neue Bookmarks in my-doit zeigen lediglich auf das Dashboard  
[Bug]           Fehler beim Zuweisen einer Hostadresse zu einem Port über die i-doit API  
[Bug]           Fehler bei Erstellung einer Hostadresse über i-doit API  
[Bug]           Fehler im Report-Manager bei Verwendung des Attributs "Hostadresse" als verknüpftes Attribut.  
[Bug]           Verwaltungsfunktion "Nicht zugewiesene Beziehungen entfernen" leert den Inhalt der Kategorie "Instanz / Oracle-Datenbank"  
[Bug]           Beim CSV-Import werden die Inhalte der Kategorie Hostadresse nicht importiert  
[Bug]           Kategorie "Logische Ports": Bei Neuanlage existiert bereits eine Layer-2-Netzzuordnung. Die Port-Zuweisung ist nicht möglich  
[Bug]           Objekte aus Template erstellen erzeugt "Illegal string Offset"-Meldung  
[Bug]           Zustands-Auswahl in Workflow-Typen zeigt in allen Zuständen die Anzahl der Einträge des aktuell ausgewählten Zustands  
[Bug]           JDisc: Beim Import werden keine Clustermitglieder aus dem Cluster entfernt  
[Bug]           Die Richtung einer Beziehung lässt sich nicht ändern  
[Bug]           Report mit "Verbunden mit Anschluss"-Bedingung erzeugt Fehlermeldung  
[Bug]           CMDB-Explorer Profil Filter funktioniert nicht einwandfrei (bei Beziehungstypen)  
[Bug]           Nach Update auf i-doit 1.5 werden die QR-Code-Einstellungen verworfen  
[Bug]           JDisc: Beim Modus 'Aktualisieren' werden neue Hostadressen mit einem Falschen Wert übernommen.  
[Bug]           Ein Objekt kann nicht aus der IP-Liste heraus zugeordnet werden  
[Bug]           Report Manager: Bei Erstellung eines Reports mit dynamischen Attributen (z.B. "Freie Lizenzen") wird eine Fehlermeldung dargestellt  
[Bug]           In Objektliste wird in der Spalte "Betriebssystem" nicht das Betriebssystem angezeigt.  
[Bug]           Wenn die automatische Zuweisung im CSV-Import deaktiviert wird, kann kein Mapping vorgenommen werden  
[Bug]           Automatische Zuweisung beim CSV-Import wird beim Mapping nicht ausgeführt.  
[Bug]           Bei der automatischen Inventar-Nummer darf der Platzhalter %COUNTER% nicht runterzählen wenn Objekte vom selben Typen gelöscht werden.  
[Bug]           Kategorie Listener filtert archivierte Softwarezuweisungen nicht heraus  
[Bug]           Kategorie Betriebssystem wird nicht dupliziert  
[Bug]           Software-Browser in Kategorie "Installation" zeigt nur Objekte aus "Infrastruktur" und "Andere" an  
[Bug]           Beim Anlegen einer Hostadresse stehen die Ports nicht zur Verfügung  
[Bug]           Wird ein Eintrag in einer Kategorie innerhalb eines Kategorieordners gespeichert, wird der Ordner geschlossen  
[Bug]           Layer-2-Netzzuordnung öffnet leeren Port Browser  
[Bug]           SQL-Fehler beim Bearbeiten der Objektliste  
[Bug]           Übersichtsseite wird nicht komplett gespeichert wenn die Kategorien "Softwarezuweisung" und "Betriebssystem" auch auf der Übersichtsseite sind.  
[Bug]           Kategorie "Arbeitsplatzsystem" wird auf der Übersichtsseite nicht gespeichert  
[Bug]           QinQ-Kategorien sind in der Objekttypkonfiguration nicht editierbar  
[Bug]           Objekttyp Konstanten können mehrfach vorkommen  
[Bug]           Apache Module Check führt zu Fehler bei Setup / Update / Systemübersicht, sofern PHP per fcgi eingebunden wird  
[Bug]           Routing-Kategorie auf Übersichtsseite wird nicht gespeichert  
[Bug]           Beim JDisc Import werden Interfaces unter Netzwerk nicht aktualisiert.  
[Bug]           Nach Duplizieren ist Layer-2-Netz mit Root-Lokation verbunden  
[Bug]           Dienste-Kategorie wird nicht dupliziert  
[Bug]           Ladebalken verbleibt in leerer Portübersicht  
[Bug]           Die Funktion "apache_get_modules()" ist nicht immer verfügbar und wirft Fehler im Update  
[Bug]           Cache/Datenbank -> unfertige/archivierte/gelöschte Kategorien entfernen erzeugt SQL-Fehlermeldung  
[Bug]           Report View Beziehung "layer-3 network plan" gibt Fehlermeldung aus  
[Bug]           Beim Anlegen eines APs wird die Kategorie WiFi-Gerät nicht gespeichert  
[Bug]           Beim Installieren einer Subskriptions-Lizenz im Admin Center wird eine Fehlermeldung ausgegeben  
[Bug]           SQL-Fehler bei der Standortzuweisung und/oder Standortkorrektur  
[Bug]           Bei expandiertem Menübaum (Vollbild) kann die ursprüngliche Breite weiterhin verändert werden  
[Bug]           Bei Lizenzfehlern werden im Admin Center Sprachkonstanten angezeigt  
[Bug]           Berechnung des nächstmöglichen Kündigungsdatums bei Verträgen berücksichtigt keine Schaltjahre  