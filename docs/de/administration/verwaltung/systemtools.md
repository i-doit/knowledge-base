**Inhaltsverzeichnis**

*   1[Cache/Datenbank](#Systemtools-Cache/Datenbank)
    *   1.1[Cache](#Systemtools-Cache)
    *   1.2[Datenbank](#Systemtools-Datenbank)
    *   1.3[Objekte](#Systemtools-Objekte)
    *   1.4[Kategorien](#Systemtools-Kategorien)
    *   1.5[Andere](#Systemtools-Andere)
*   2[i-doit Update](#Systemtools-i-doitUpdate)
*   3[Systemübersicht](#Systemtools-Systemübersicht)

Cache/Datenbank
---------------

Hier kannst du verschiedene Reparatur Funktionen für die i-doit Datenbank ausführen.

![](/download/attachments/61014221/Cache-Datenbank-1.13.2.png?version=1&modificationDate=1573641755144&api=v2&effects=drop-shadow)

### Cache

| Button | Was passiert? |
| --- | --- |
| Button | Was passiert? |
| --- | --- |
| Kompletten Cache leeren | Leert den kompletten Cache und erstellt diesen neu  <br>Ordner unter i-doit/temp/cache\_Mandantenname |
| System Cache leeren | Leert den system Cache und erstellt diesen neu  <br>Z.b. die Systemeinstellungen |
| Template Cache leeren | Leert den template Cache und erstellt diesen neu  <br>Lädt Templates neu in den Cache |
| Rechtesystem Cache leeren | Leert den Rechtesystem Cache und erstellt diesen neu  <br>Lädt die Rechte neu in den Cache |
| Validierungscache erneuern | Leert den system Cache und erstellt diesen neu  <br>Erneuert den Validierungscache |

### Datenbank

| Button | Was passiert? |
| --- | --- |
| Button | Was passiert? |
| --- | --- |
| Tabellen optimieren | Im Hintergrund wird eine Query zur MySQL Datenbank geschickt welche die Tabellen optimiert Siehe[https://dev.mysql.com/doc/refman/8.0/en/optimize-table.html](https://dev.mysql.com/doc/refman/8.0/en/optimize-table.html) |
| Tabellen defragmentieren | Gleicht _Tabellen optimieren_ mit einem anderen Statement. Es werden die Tabellen auf die Engine INNODB gesetzt wenn eine Tabelle auf MyISAM oder Sonstiges ist |
| Standorte korrigieren | Der Standortbaum wird neu generiert bzw. neu kalkuliert und die überflüssigen Daten gelöscht |
| Mehrfach zugewiesene Kategorien entfernen | Sind Kategorien mehrfach zugewiesen, wird die 2. Zuweisung entfernt |
| Kategorie-Attribute neu indizieren | Hier werden die Attribute zu Kategorien und Benutzerdefinierten Kategorien neu indiziert |
| Mehrfache Einträge Single-Value-Kategorien löschen | Da es bei Single-Value-Kategorien nur ein Eintrag geben kann, wird ein zweiter Eintrag entfernt falls vorhanden |
| Nicht zugewiesene Beziehungen entfernen | Beziehungen die nicht verwendet werden, werden gelöscht |
| Titel von Beziehungsobjekten erneuern | Die Titel von Beziehungsobjekten werden neu generiert |
| Leere SYS-IDs befüllen | Objekte ohne SYS-ID werden mit einer SYS-ID befüllt |
| Gewichtung aller Beziehungstypen auf Standard setzen | Alle Gewichtungen werden auf Standard gesetzt |
| Beziehungsobjekte erneuern | Beziehungen werden neu erstellt |
| Zeilenklick in Objektlisten aktivieren | Bei allen Listen soll das Objekt über den Klick auf die Zeile geöffnet werden |
| Suche nach Teil-Strings in Objektlisten aktivieren | In Objektlisten sollen Objekte auch gefunden werden wenn der gesuchte String nicht am Anfang der Bezeichnung steht |

### Objekte

| Button | Was passiert? |
| --- | --- |
| Button | Was passiert? |
| --- | --- |
| Unfertige Objekte entfernen | Objekte die keine Bezeichnung o.Ä haben werden aus der Datenbank entfernt  <br>Die Objekte können über den Button ![](/download/thumbnails/61014221/eye.png?version=1&modificationDate=1624283454748&api=v2) zuvor angezeigt werden |
| Archivierte Objekte entfernen | Objekte die archiviert sind werden aus der Datenbank entfernt  <br>Die Objekte können über den Button ![](/download/thumbnails/61014221/eye.png?version=1&modificationDate=1624283454748&api=v2) zuvor angezeigt werden |
| Gelöschte  Objekte entfernen | Gelöschte Objekte werden aus der Datenbank entfernt  <br>Die Objekte können über den Button ![](/download/thumbnails/61014221/eye.png?version=1&modificationDate=1624283454748&api=v2) zuvor angezeigt werden |

### Kategorien

| Button | Was passiert? |
| --- | --- |
| Button | Was passiert? |
| --- | --- |
| Unfertige Kategorie-Einträge entfernen | Kategorie-Einträge die z.B. keine Daten enthalten werden aus der Datenbank entfernt |
| Archivierte Kategorie-Einträge entfernen | Archivierte Kategorie-Einträge werden aus der Datenbank entfernt |
| Gelöschte Kategorie-Einträge entfernen | Gelöschte Kategorie-Einträge werden aus der Datenbank entfernt |

### Andere

| Button | Was passiert? |
| --- | --- |
| Button | Was passiert? |
| --- | --- |
| Suche-Index erneuern | Der Suche-Index wird erneuert damit z.B. neu erstellte oder importierte Objekte gefunden werden |
| Migriere Datenbank Objekte in Kategorien | Migriert die vorhandene Datenbank Dokumentation in das neue Modell, siehe [Dokumentation von Datenbanken](/display/de/Dokumentation+von+Datenbanken) |
| Mandanten Datenbank Passwort verschlüsseln | Das Passwort zur Mandanten Datenbank wird verschlüsselt mit Angabe der Admin-Center Login Credentials |
| Exportierte Check\_MK-Tags löschen | Die von Check\_MK-Tags importierten Tags werden einfach gelöscht |
| Verwaiste Einträge benutzerdefinierter Kategorien löschen | Benutzerdefinierte Kategorie Einträge, die nicht mehr über eine data\_\_id verfügen oder keinem Objekt mehr zugewiesen sind, werden entfernt |

i-doit Update
-------------

Hier kommst du zur [Update](/display/de/Update+einspielen) Funktion von i-doit. → [READMORE](/display/de/Update+einspielen)

![](/download/attachments/61014221/image2016-10-13%2010%3A51%3A57.png?version=1&modificationDate=1476355234847&api=v2&effects=drop-shadow)

  

Systemübersicht
---------------

i-doit hat vieles System Voraussetzungen. In der Systemübersicht kannst du nachschauen ob die [Voraussetzungen](/display/de/Systemvoraussetzungen) erfüllt sind.

![](/download/attachments/61014221/image2016-10-13%2010%3A54%3A15.png?version=1&modificationDate=1476355234820&api=v2&effects=drop-shadow)