# Systemtools

Cache/Datenbank
---------------

Hier kannst du verschiedene Reparatur Funktionen für die i-doit Datenbank ausführen.

[![Cache/Datenbank](../../assets/images/de/administration/verwaltung/systemtools/1-st.png)](../../assets/images/de/administration/verwaltung/systemtools/1-st.png)


### Cache

| Button | Was passiert? |
| --- | --- |
| Kompletten Cache leeren | Leert den kompletten Cache und erstellt diesen neu<br>Ordner unter i-doit/temp/cache\_Mandantenname |
| System Cache leeren | Leert den system Cache und erstellt diesen neu<br>Z.B. die Systemeinstellungen |
| Template Cache leeren | Leert den template Cache und erstellt diesen neu<br>Lädt Templates neu in den Cache |
| Rechtesystem Cache leeren | Leert den Rechtesystem Cache und erstellt diesen neu<br>Lädt die Rechte neu in den Cache |
| Validierungscache erneuern | Leert den system Cache und erstellt diesen neu<br>Erneuert den Validierungscache |

### Datenbank

| Button | Was passiert? |
| --- | --- |
| Tabellen optimieren | Im Hintergrund wird eine Query zur MySQL Datenbank geschickt welche die Tabellen optimiert Siehe [https://dev.mysql.com/doc/refman/8.0/en/optimize-table.html](https://dev.mysql.com/doc/refman/8.0/en/optimize-table.html) |
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
| Unfertige Objekte entfernen | Objekte die keine Bezeichnung o.Ä haben werden aus der Datenbank entfernt  <br>Die Objekte können über den Button [![eye](../../assets/images/de/administration/verwaltung/systemtools/eye.png)](../../assets/images/de/administration/verwaltung/systemtools/eye.png) zuvor angezeigt werden |
| Archivierte Objekte entfernen | Objekte die archiviert sind werden aus der Datenbank entfernt  <br>Die Objekte können über den Button [![eye](../../assets/images/de/administration/verwaltung/systemtools/eye.png)](../../assets/images/de/administration/verwaltung/systemtools/eye.png) zuvor angezeigt werden |
| Gelöschte  Objekte entfernen | Gelöschte Objekte werden aus der Datenbank entfernt  <br>Die Objekte können über den Button [![eye](../../assets/images/de/administration/verwaltung/systemtools/eye.png)](../../assets/images/de/administration/verwaltung/systemtools/eye.png) zuvor angezeigt werden |

### Kategorien

| Button | Was passiert? |
| --- | --- |
| Unfertige Kategorie-Einträge entfernen | Kategorie-Einträge die z.B. keine Daten enthalten werden aus der Datenbank entfernt |
| Archivierte Kategorie-Einträge entfernen | Archivierte Kategorie-Einträge werden aus der Datenbank entfernt |
| Gelöschte Kategorie-Einträge entfernen | Gelöschte Kategorie-Einträge werden aus der Datenbank entfernt |

### Andere

| Button | Was passiert? |
| --- | --- |
| Suche-Index erneuern | Der Suche-Index wird erneuert damit z.B. neu erstellte oder importierte Objekte gefunden werden |
| Migriere Datenbank Objekte in Kategorien | Migriert die vorhandene Datenbank Dokumentation in das neue Modell, siehe [Dokumentation von Datenbanken](../../anwendungsfaelle/dokumentation-von-datenbanken.md) |
| Mandanten Datenbank Passwort verschlüsseln | Das Passwort zur Mandanten Datenbank wird verschlüsselt mit Angabe der Admin-Center Login Credentials |
| Exportierte Check\_MK-Tags löschen | Die von Check\_MK-Tags importierten Tags werden einfach gelöscht |
| Verwaiste Einträge benutzerdefinierter Kategorien löschen | Benutzerdefinierte Kategorie Einträge, die nicht mehr über eine data\_\_id verfügen oder keinem Objekt mehr zugewiesen sind, werden entfernt |

i-doit Update
-------------

Hier kommst du zur [Update](../../wartung-und-betrieb/update-einspielen.md) Funktion von i-doit. → [READMORE](../../wartung-und-betrieb/update-einspielen.md)

[![i-doit Update](../../assets/images/de/administration/verwaltung/systemtools/2-st.png)](../../assets/images/de/administration/verwaltung/systemtools/2-st.png)

Systemübersicht
---------------

i-doit hat vieles System Voraussetzungen. In der Systemübersicht kannst du nachschauen ob die [Voraussetzungen](../../installation/systemvoraussetzungen.md) erfüllt sind.

[![Systemübersicht](../../assets/images/de/administration/verwaltung/systemtools/3-st.png)](../../assets/images/de/administration/verwaltung/systemtools/3-st.png)
