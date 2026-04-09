---
search:
  exclude: true
---
# Changelog 1.5.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Neue Funktion] Neue zusätzliche Lizenzform "Multi-tenant buyers licence"<br>
[Verbesserung]  Schrank-Statistik lässt sich nicht einklappen<br>
[Verbesserung]  JDisc: weitere Beschleunigungen beim Handling des VLAN Imports<br>
[Verbesserung]  Formfaktor hinter Objekten in Schrank-Kategorie darstellen<br>
[Verbesserung]  Beschleunigung des JDisc Imports über den controller (php-cli)<br>
[Verbesserung]  Beschleunigte Filterung nach Benutzer im Logbuch bei sehr hoher Anzahl an Einträgen<br>
[Verbesserung]  Security: config.inc.php backups könnten per Brute-Force ausgelesen werden<br>
[Änderung]      Umbenennung "Desktop" nach "Client" in englischer Übersetzung<br>
[Bug]           Kategorie "Service": Beschreibung wird nicht gespeichert<br>
[Bug]           Kategorie "Grafikkarte" auf der Übersichtsseite erzeugt gleichzeitig bei Neuanlage eines Objekts einen Eintrag in Kategorie "Grafikkarte".<br>
[Bug]           Recht auf Objekte unterhalb einer Lokation verursacht unter Umständen sehr lange Ladezeiten<br>
[Bug]           Fehler beim Purgen eines Objekts, wenn Objektliste gefiltert wurde<br>
[Bug]           Fehler bei Validierung von IP Adressen über die API<br>
[Bug]           Neue Bookmarks in my-doit zeigen lediglich auf das Dashboard<br>
[Bug]           Fehler beim Zuweisen einer Hostadresse zu einem Port über die i-doit API<br>
[Bug]           Fehler bei Erstellung einer Hostadresse über i-doit API<br>
[Bug]           Fehler im Report-Manager bei Verwendung des Attributs "Hostadresse" als verknüpftes Attribut.<br>
[Bug]           Verwaltungsfunktion "Nicht zugewiesene Beziehungen entfernen" leert den Inhalt der Kategorie "Instanz / Oracle-Datenbank"<br>
[Bug]           Beim CSV-Import werden die Inhalte der Kategorie Hostadresse nicht importiert<br>
[Bug]           Kategorie "Logische Ports": Bei Neuanlage existiert bereits eine Layer-2-Netzzuordnung. Die Port-Zuweisung ist nicht möglich<br>
[Bug]           Objekte aus Template erstellen erzeugt "Illegal string Offset"-Meldung<br>
[Bug]           Zustands-Auswahl in Workflow-Typen zeigt in allen Zuständen die Anzahl der Einträge des aktuell ausgewählten Zustands<br>
[Bug]           JDisc: Beim Import werden keine Clustermitglieder aus dem Cluster entfernt<br>
[Bug]           Die Richtung einer Beziehung lässt sich nicht ändern<br>
[Bug]           Report mit "Verbunden mit Anschluss"-Bedingung erzeugt Fehlermeldung<br>
[Bug]           CMDB-Explorer Profil Filter funktioniert nicht einwandfrei (bei Beziehungstypen)<br>
[Bug]           Nach Update auf i-doit 1.5 werden die QR-Code-Einstellungen verworfen<br>
[Bug]           JDisc: Beim Modus 'Aktualisieren' werden neue Hostadressen mit einem Falschen Wert übernommen.<br>
[Bug]           Ein Objekt kann nicht aus der IP-Liste heraus zugeordnet werden<br>
[Bug]           Report Manager: Bei Erstellung eines Reports mit dynamischen Attributen (z.B. "Freie Lizenzen") wird eine Fehlermeldung dargestellt<br>
[Bug]           In Objektliste wird in der Spalte "Betriebssystem" nicht das Betriebssystem angezeigt.<br>
[Bug]           Wenn die automatische Zuweisung im CSV-Import deaktiviert wird, kann kein Mapping vorgenommen werden<br>
[Bug]           Automatische Zuweisung beim CSV-Import wird beim Mapping nicht ausgeführt.<br>
[Bug]           Bei der automatischen Inventar-Nummer darf der Platzhalter %COUNTER% nicht runterzählen wenn Objekte vom selben Typen gelöscht werden.<br>
[Bug]           Kategorie Listener filtert archivierte Softwarezuweisungen nicht heraus<br>
[Bug]           Kategorie Betriebssystem wird nicht dupliziert<br>
[Bug]           Software-Browser in Kategorie "Installation" zeigt nur Objekte aus "Infrastruktur" und "Andere" an<br>
[Bug]           Beim Anlegen einer Hostadresse stehen die Ports nicht zur Verfügung<br>
[Bug]           Wird ein Eintrag in einer Kategorie innerhalb eines Kategorieordners gespeichert, wird der Ordner geschlossen<br>
[Bug]           Layer-2-Netzzuordnung öffnet leeren Port Browser<br>
[Bug]           SQL-Fehler beim Bearbeiten der Objektliste<br>
[Bug]           Übersichtsseite wird nicht komplett gespeichert wenn die Kategorien "Softwarezuweisung" und "Betriebssystem" auch auf der Übersichtsseite sind.<br>
[Bug]           Kategorie "Arbeitsplatzsystem" wird auf der Übersichtsseite nicht gespeichert<br>
[Bug]           QinQ-Kategorien sind in der Objekttypkonfiguration nicht editierbar<br>
[Bug]           Objekttyp Konstanten können mehrfach vorkommen<br>
[Bug]           Apache Module Check führt zu Fehler bei Setup / Update / Systemübersicht, sofern PHP per fcgi eingebunden wird<br>
[Bug]           Routing-Kategorie auf Übersichtsseite wird nicht gespeichert<br>
[Bug]           Beim JDisc Import werden Interfaces unter Netzwerk nicht aktualisiert.<br>
[Bug]           Nach Duplizieren ist Layer-2-Netz mit Root-Lokation verbunden<br>
[Bug]           Dienste-Kategorie wird nicht dupliziert<br>
[Bug]           Ladebalken verbleibt in leerer Portübersicht<br>
[Bug]           Die Funktion "apache_get_modules()" ist nicht immer verfügbar und wirft Fehler im Update<br>
[Bug]           Cache/Datenbank -> unfertige/archivierte/gelöschte Kategorien entfernen erzeugt SQL-Fehlermeldung<br>
[Bug]           Report View Beziehung "layer-3 network plan" gibt Fehlermeldung aus<br>
[Bug]           Beim Anlegen eines APs wird die Kategorie WiFi-Gerät nicht gespeichert<br>
[Bug]           Beim Installieren einer Subskriptions-Lizenz im Admin-Center wird eine Fehlermeldung ausgegeben<br>
[Bug]           SQL-Fehler bei der Standortzuweisung und/oder Standortkorrektur<br>
[Bug]           Bei expandiertem Menübaum (Vollbild) kann die ursprüngliche Breite weiterhin verändert werden<br>
[Bug]           Bei Lizenzfehlern werden im Admin-Center Sprachkonstanten angezeigt<br>
[Bug]           Berechnung des nächstmöglichen Kündigungsdatums bei Verträgen berücksichtigt keine Schaltjahre<br>
