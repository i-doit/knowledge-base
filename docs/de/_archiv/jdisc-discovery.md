---
title: JDisc Discovery
description: JDisc Discovery Konfiguration
icon: addons/jdisc
status:
lang: de
---

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

[JDisc Discovery](http://www.jdisc.com/de/) inventarisiert gesamte Netzwerke und erkennt alle wichtigen Betriebssysteme (einschließlich HP-UX, Solaris und AIX). Es erkennt Hardware- und Software, IP-Netzwerke, Windows-Domänen und Active Directory. Darüber hinaus identifiziert JDisc Discovery alle wichtigen Virtualisierungstechnologien, sowie viele Cluster-Umgebungen.
Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/it-service-management-mit-dem-discovery-tool-jdisc-und-i-doit/)

## Installation

Für den Betrieb ist die Installation der JDisc-Server-Komponenten auf einem Microsoft Windows (bestenfalls in der Server-Variante) erforderlich.

Während des Setups wird abgefragt, welche Passwörter für das im Hintergrund verwendete PostgreSQL-DBMS verwendet werden sollen. Dies betrifft den administrativen Account **postgres** und den Account **postgresro**, der lediglich über Leserechte auf die JDisc-Datenbank verfügt. Letztere Account wird für die Schnittstelle zu i-doit benötigt. Zudem muss beim Setup angegeben werden, dass die PostgreSQL-Instanz nach außen hin erreichbar sein soll. Diese hört standardmäßig auf den Port **25321**. Der Port ist in der Windows Firewall freizuschalten.

Die JDisc Dokumentation ist unter [https://jdisc.com/support/documentation/](https://jdisc.com/support/documentation/) zu finden.
Bei Fragen zur Installation oder Konfiguration von JDisc hilft der Support des Herstellers [https://jdisc.com/support/](https://jdisc.com/support/).

Dieser Artikel widmet sich im Folgenden der Schnittstelle zwischen i-doit und JDisc Discovery.

!!! info "JDisc WebService mit GraphQL, Quelle [JDisc FAQ](https://jdisc.com/support/faq/)"
    > Der WebService ist ein SOAP basierter Service, mit dem man einzelne Aktivitäten in JDisc fernsteuern kann. Der SOAP Service läuft normalerweise auf Port 9000. Wir haben allerdings für unser neues WEB UI eine moderne GraphQL Schnittstelle implementiert, die den SOAP Service komplett ersetzt! I-Doit kann unser neues GraphQL API ab Version i-doit Release 22 verwenden!
    > Ändere einfach den Port auf **443** und das Protokoll auf **HTTPS** um auf das GraphQL Interface umzustellen. Das WebService Add-On wird dann nicht mehr benötigt.
    > Das GraphQL API hat nur Vorteile gegenüber dem SOAP Service:
    > Es verwendet ausschliesslich verschlüsselte Kommunikation via HTTPS. Der WEB Service hat by default HTTP verwendet.
    > Das neue API ist ein modernes API, mit dem sich alle Aktionen in JDisc automatisieren lassen!

## Konfiguration

Die Konfiguration der Schnittstelle befindet sich unter **Verwaltung → Import und Schnittstellen → JDISC → JDisc-Konfiguration**. Dort können beliebig viele Instanzen von JDisc Discovery angegeben werden. Dies ermöglicht komplexe Szenarien der Bestandsaufnahme mit getrennten Netzen.

[JDisc Konfiguration]

### Allgemeine Einstellungen

| Parameter                                    | Anmerkung                                                                                                                                                                                         |
| -------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Standard Server**                          | Handelt es sich um diejenige Instanz, die bei einem manuellen Import vorgeschlagen werden soll?                                                                                                   |
| **Bezeichnung**                              | Bezeichnung des Eintrages                                                                                                                                                                         |
| **Host**                                     | Hostname/FQDN oder IP-Adresse der JDisc-Instanz; diese muss von der i-doit-Instanz aus erreichbar sein                                                                                            |
| **Port**                                     | Offener Port der PostgreSQL-Instanz, die im Hintergrund von JDisc Discovery läuft                                                                                                                 |
| **Datenbank**                                | JDisc Discovery verwendet standardmäßig die Datenbank **inventory**.                                                                                                                              |
| **Benutzername**                             | Hier wird einer der Accounts angegeben, die beim Setup abgefragt wurden. Es genügt der Account **postgresro** mit eingeschränkten Rechten, da i-doit lediglich lesend auf die Datenbank zugreift. |
| **Passwort**                                 | Das beim Setup vergebene Passwort, das zum verwendeten Account gehört                                                                                                                             |
| **Import älterer JDisc Versionen erlauben?** | Abfrage, die nur für ältere Versionen von JDisc Discovery relevant ist                                                                                                                            |

Nach dem Speichern der Parameter kann die Verbindung zur JDisc-Datenbank über den Button **Verbindung prüfen** getestet werden.

Um Objekte zu archivieren, die von JDisc für eine bestimmte Anzahl von Tagen nicht gesehen wurden, wird der Schwellenwert und die Schwellenwerteinheit in der Verwaltung eingestellt. **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → JDisc**.

| Parameter               | Anmerkung                                                                                                                               |
| ----------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| **Schwellwert**         | Wenn die Einstellung definiert ist, werden die Objekte, die JDisc innerhalb dieses Zeitraums nicht gesehen hat, beim Import archiviert. |
| **Schwellwert Einheit** | Tage, Wochen oder Monate                                                                                                                |

### Discovery Einstellungen

Über i-doit kann der Benutzer einen Scan bei der konfigurierten JDisc-Instanz auslösen. Dazu wird der WebService von JDisc Discovery verwendet, der installiert und aktiviert sein muss.

| Parameter        | Anmerkung                                            |
| ---------------- | ---------------------------------------------------- |
| **Benutzername** | Account, der für den Web Service genutzt werden soll |
| **Passwort**     | Zum Account passendes Passwort                       |
| **Port**         | Standard: **9000** für GraphQL **443**               |
| **Protokoll**    | Standard: **http** für GraphQL **https**             |

Auch hier kann nach dem Speichern der Parameter über den Button **Verbindung prüfen** getestet werden, ob die Konfiguration erfolgreich ist.

## JDisc-Profile

Die JDisc-Profile innerhalb von i-doit geben die Möglichkeit, die Verknüpfung von Objekttypen und ihren Attributen zwischen JDisc und i-doit zu definieren. Unter **Verwaltung → Import und Schnittstellen → JDISC → JDisc-Profile** kann festgelegt werden, in welcher Weise die durch JDisc gefundenen Objekte ihren Weg in die IT-Dokumentation finden.

[JDisc Profile]

In der Standard-Installation von i-doit ist bereits ein vordefiniertes **Beispiel** Profil vorhanden. Das vordefinierte JDisc Profil **Example** ist ein Profil das Ihnen aufzeigen soll, wie ein JDisc Profil gestaltet werden kann.

!!! info "Eigene Profile erstellen"
    Es ist ratsam eigene Profile zu erstellen die auf die Objekttypen und Kategorien zugeschnitten sind.

### Allgemeine Einstellungen

| Option           | Beschreibung                                                                                                  |
| ---------------- | ------------------------------------------------------------------------------------------------------------- |
| **JDisc Server** | Welche Instanz von JDisc soll beim Import vor-selektiert werden? Siehe Abschnitt "Konfiguration" weiter oben. |
| **Titel**        | Name des Profils                                                                                              |
| **Beschreibung** | Beschreibung des Profils                                                                                      |

### Objekttyp Zuweisungen

Für jeden Typ in JDisc kann ein äquivalenter Objekttyp in i-doit ausgewählt werden. Geschieht dies nicht, werden Devices diesen Typs nicht importiert. Die Reihenfolge der Zuweisungen wird beim Import beachtet. Dieser geht die Liste von oben nach unten durch, um eine Zuweisung zu identifizieren. Die Matrix ist pro Zeile folgendermaßen aufgebaut:

| JDisc-Typ                                                                                                                                                      | JDisc-Betriebssystem                                                                                                                                                                                                                                              | Objektnamen modifizieren                                                                                                                                                                                                                                            | FQDN Zusatz                                    | Port Filter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Objekttyp                                                                                                                             | Import Matching Profil                                                                                                                                                                           | Standort                                                                                                                                                        | Aktionen                                                             |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------- |
| Device Type aus JDisc, der beim Import berücksichtigt werden soll.<br><br>Die Liste wird aus der angegebenen JDisc-Instanz ausgelesen und zwischengespeichert. | Betriebssysteme, die JDisc bereits inventarisiert hat.<br><br>Oftmals reicht der Device Type für eine Zuweisung zu einem Objekttyp nicht aus, weswegen optional das Betriebssystem angegeben werden kann.<br><br>Das Feld kann mit Wildcards (*) versehen werden. | Wandelt den Objekttitel um.<br><br>**Unverändert**: Der Objektname wird nicht verändert<br><br>**Großbuchstaben**: Der komplette Objektname wird in Großbuchstaben geändert.<br><br>**Kleinbuchstaben**: Der komplette Objektname wird in Kleinbuchstaben geändert. | Hängt an den Objekttitel einen FQDN Zusatz an. | Welche Netzwerk-Ports sollen importiert werden?<br><br>**Normaler Import**: Alle physikalischen und logischen Ports werden importiert.<br><br>**Kein Import**: Im Textfeld können Port-Namen angegeben werden, die ignoriert werden sollen.<br>Das Feld kann mit Wildcards (*) genutzt werden. (Beispiel: Port-Name: Loopback → Ports mit dem Namen Loopback werden nicht importiert)<br><br>**Logischer Port**/**Physikalischer Port**/**FC-Port**: Es werden nur die Ports importiert, deren Name im Textfeld zu finden ist.<br><br>Die Kriterien können miteinander kombiniert werden, sodass nur bestimmte physikalische und nur bestimmte logische Ports berücksichtigt werden. | Diesem Objekttyp werden importierte Devices zugeordnet.<br><br>Wird kein Objekttyp ausgewählt, werden Devices diesen Types ignoriert. | [Welche Strategie soll erfolgen](), um bereits in i-doit dokumentierte Objekte durch einen Import zu aktualisieren?<br>**Zusätzliche Filter Kriterien sind im Import Matching Profil zu finden** | Beim Import werden Objekte, die den hier genannten Kriterien entsprechen, einem bestimmten Standort zugeordnet. Dies geschieht über die Kategorie **Standort**. | Neue Zuweisung hinzufügen, eine bestehende duplizieren oder löschen. |

### Zusätzliche Optionen

| Option                                                                      | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Kategorien auswählen**                                                    | Welche [Kategorien]() sollen beim Import befüllt werden? Es werden nur Kategorien gelistet, die der Import behandeln kann.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **MAC-Filter (versteckt)**                                                  | Nur sichtbar wenn die Kategorie **Port** oder **PC port** aktiviert ist. Entweder kann eine White- oder eine Blacklist für MAC Adressen gewählt werden. Eine MAC Adresse pro Zeile.                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **Netzwerk Interfaces importieren als**                                     | Inventarisierte Netzwerk-Schnittstellen können in unterschiedlichen Kategorien abgebildet werden.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **Software beim Import berücksichtigen**                                    | Soll inventarisierte Software als Objekttyp **Anwendungen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Software beim Import berücksichtigen** -> **Softwarestandort**            | Nur sichtbar wenn **Software beim Import berücksichtigen** aktiviert ist. Setzt den Standort von Anwendungen auf einen bestimmten Standort. Nützlich wenn Berechtigungen auf Grundlage von Standorten verwendet werden.                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Softwarelizenzen beim Import berücksichtigen**                            | Sollen inventarisierte Softwarelizenzen als Objekttyp **Lizenzen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Systemdienste importieren**                                               | Sollen inventarisierte Systemdienste als Objekttyp **Systemdienst** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **Cloud Subscriptionen importieren**                                        | Sollen Daten aus der JDisc Kategorie Cloud importiert werden?<br>Wird in die Kategorie **Zugewiesene Abonnente** importiert. Die Rückwärtige Kategorie **Zugewiesene Benutzer** ist bei Objekten vom Typ Lizenzen zu finden.                                                                                                                                                                                                                                                                                                                                                                                              |
| **Unbekannte Cloud Benutzer importieren**                                   | Wird nur angewendet wenn die Option "Cloud Subscriptionen importieren" aktiv ist.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **Verbindungs Endpunkte importieren**                                       | Die Verbindungen werden nicht in die Verkabelung Kategorie, sondern in die Kategorie "Verbindungs Endpunkte" importiert. Das ermöglicht zwischen der manuellen Verkabelung und der automatischen Verkabelung durch JDisc zu unterscheiden.                                                                                                                                                                                                                                                                                                                                                                                |
| **Einfache Datenbank Modellierung verwenden?**                              | Soll die neue oder die alte [Datenbanklogik]() verwendet werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Layer-3-Netze beim Import berücksichtigen**                               | Sollen inventarisierte IP-Netze als Objekttyp **Layer-3-Netze** importiert werden? Ist diese Option gesetzt, wird die **Layer-3-Filter** dargestellt.                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Layer-3-Netze beim Import berücksichtigen** -> **Layer-3-Filter**         | Nur sichtbar wenn **Layer-3-Netze beim Import berücksichtigen**aktiviert ist. Geben Sie den Bereich in den folgenden Formaten an: 127.0.0.1-127.0.10.255 oder 10.40.55.0/24 oder 10.40.55.7. Eine Regel pro Zeile.                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Layer-3-Netze beim Import berücksichtigen** -> **Netzwerkstandort**       | Nur sichtbar wenn **Layer-3-Netze beim Import berücksichtigen** aktiviert ist. Setzt den Standort von Layer-3 Objekten auf einen bestimmten Standort. Nützlich wenn Berechtigungen auf Grundlage von Standorten verwendet werden.                                                                                                                                                                                                                                                                                                                                                                                         |
| **IP Adressentypen beibehalten**                                            | Sollen **IPv4 Adressen**, **IPv6 Adressen**, **Loopback Adressen**, **Virtuelle Adressen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| **Importtyp für DHCP IP Adressen**                                          | Sollen per DHCP zugewiesen Adressen überschrieben werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **VLans beim Import berücksichtigen**                                       | Sollen inventarisierte VLANs als Objekttyp **Layer-2-Netze** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Cluster beim Import berücksichtigen**                                     | Sollen (Virtualisierungs-)Umgebungen als Objekttyp **Cluster** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **Blade/Chassis Verbindungen beim Import berücksichtigen**                  | Sollen Objekte vom Typ **Blade Server** zu Objekten vom Typ **Blade Chassis** beim Import hinzugefügt werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| **Objekttyp der zugewiesenen Module innerhalb eines Blade/Chassis Gerätes** | Ist ein Blade oder Switch Chassis inventarisiert worden, können die eingesteckten Module einem bestimmten Objekttyp beim Import zugeordnet werden.                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Objekttyp der zugewiesenen Module aktualisieren**                         | Sollen die Objekttypen der zugewiesenen Module eines Blade/Chassis Gerätes aktualisiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Custom attributes importieren**                                           | Wenn in JDisc Discovery benutzerdefinierte Attribute (**Custom Attributes**) gepflegt werden, können diese in i-doit importiert werden. Diese werden nach dem Import in der Kategorie **JDisc Custom Attributes** angezeigt.                                                                                                                                                                                                                                                                                                                                                                                              |
| **Standard Templates aus Objekttypen berücksichtigen (nur bei Neuanlage)**  | Wird ein neues Objekt erstellt, kann automatisch ein [Template]() berücksichtigt werden. Die Auswahl des Templates findet in der Objekttyp-Konfiguration statt.                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **CMDB-Status der Objekte ändern auf**                                      | Bereits vorhandene Objekte können beim Aktualisieren einen bestimmten **[CMDB-Status]()** erhalten. Soll der **CMDB-Status** nicht geändert werden, ist in der Auswahl **CMDB-Status beibehalten** zu wählen.                                                                                                                                                                                                                                                                                                                                                                                                             |
| **CMDB Status für neu importierte Objekte**                                 | Neu erstellte Objekte können einen bestimmten **[CMDB-Status]()** erhalten. Soll der **CMDB-Status** nicht geändert werden, ist in der Auswahl **-** zu wählen.                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Software Filter (versteckt)**                                             | Entweder kann eine White- oder eine Blacklist an Software-Applikationen angegeben werden, welche importiert werden sollen (Whitelist) oder eben nicht (Blacklist). Es können Wildcards (\*) angegeben werden. Die Liste von Titeln wird durch Kommas separiert.                                                                                                                                                                                                                                                                                                                                                           |
| **Filter als regexp gebrauchen**                                            | Den Software Filter mit Strings oder mit Regulären Ausdrücken verwenden? Da das regex direkt an die JDisc Datenbank weitergeleitet wird, sollten die passenden regex parameter verwendet werden.<br>Diese sind z.B. unter [h](https://www.postgresql.org/docs/9.3/functions-matching.html)[https://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html) zu finden.<br><br>Hinweis eines Anwenders:<br><br>\s kann nicht verwendet werden. Hier wird mit Leerzeichen gearbeitet.<br>\d kann nicht verwendet werden. Hier muss mit [a-zA-Z] gearbeitet werden. |
| **Benutze OS-Familie (falls verfügbar) anstatt OS-Version als Objekttitel** | Für den Softwareimport anstatt der Softwareversion die Softwarefamilie als Objekttitel verwenden. Z.B. anstatt "Windows Server 2008 Standard" nur "Windows" mit "Server 2008 Standard" als Variante.                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **Objekttyp aktualisieren**                                                 | Ist das Device bereits als Objekt in i-doit vorhanden, kann hierüber bestimmt werden, ob der Objekttyp anhand der Zuweisung (siehe oben) aktualisiert werden soll oder nicht.                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| **Objekt-Titel aktualisieren**                                              | Soll der Objekttitel durch den Import aktualisiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **Hostnamen als Objekt Titel verwenden anstelle des FQDNs?**                | Sofern Geräte ein FQDN besitzen werden diese bis zum Hostnamen aufgelöst.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Standort des übergeordneten Objekts vererben**                            | Geräte die physikalisch an einem anderen Gerät verbunden sind erhalten automatisch den Standort des verbundenen Gerätes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |

!!! note "Wenn eine Whitelist leer ist, wird diese nicht berücksichtigt und es wird alles importiert"

Kategorien die für JDisc erstellt worden sind:

-   [Access Point Controller]()
-   [Custom Identifier]()
-   [JDisc Custom Attributes]()
-   [JDisc Discovery]()
-   [JDisc Geräte Informationen]()
-   [Netzwerk → Verbindungs Endpunkte]()
-   [Subscriptions]()
-   [Support Entitlements]()
-   [Zugewiesene Abonnente]()

### Identifizierung von Objekten

Wir identifizieren JDisc Geräte anhand einer Kombination von Faktoren, vor allem des **Objekttyps**, der **Seriennummer** und der **MAC-Adresse**. Falls verfügbar, verwenden wir auch JDiscs interne unique identifier als zusätzliches Mittel zur Identifizierung. Der Identifikationsprozess ist auf den jeweiligen Objekttyp zugeschnitten und nutzt Attribute wie **Bezeichnung**, **Seriennummer**, **Hostname**, **IP-Adressen**, **FQDN** und **MAC-Adresse**. Um doppelte Einträge zu vermeiden, stellen wir eine Zuordnungsbeziehung zwischen JDisc und i-doit-Geräten her.

Beim Importieren von Objekten werden auch andere Unterobjekte wie Netzwerke, Software, Cluster und andere Objekttypen importiert. In diesem Fall können wir andere Regeln als die im Abschnitt "Objekt matching" definierten verwenden.

## Import von Daten über die Web GUI

Der Import von Inhalten aus JDisc erfolgt über **Extras → Import → JDisc**.

[JDisc Import GUI]

Vor dem Ausführen des Imports müssen die Import-Parameter festgelegt sein. Da es möglich ist, dass mehr als ein JDisc-Server eingesetzt wird, muss im ersten Schritt der JDisc-Server ausgewählt werden. Das Profil, welches zuvor definiert wurde, kann ebenfalls gewählt werden um die importierten Inhalte und deren Handhabung zu beeinflussen. Zusätzlich kann der Modus des Imports angegeben werden. Der Import-Modus **Erstellen** wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren. Der Import-Modus **Aktualisieren** wird nur Objekte erstellen, die im i-doit-Datenbestand nicht gefunden werden. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt. Der Import-Modus **Überschreiben** verhält sich im Prinzip wie der Modus **Aktualisieren** mit dem Unterschied, dass Listen-Kategorien erst geleert und dann neu angelegt werden.

| **Import Modus**                       | **Beschreibung**                                                                                                                                                                                       |
| -------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Aktualisieren**                      | Der Import-Modus **"Aktualisieren"** wird nur Objekte erstellen, die in i-doit nicht gefunden werden konnten. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt. |
| **Aktualisieren (Neu inventarisiert)** | Mit dem Zusatz **"(Neu inventarisiert)"** werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.                                                      |
| **Aktualisieren (Bestehende)**         | Mit dem Zusatz **"(Bestehende)"** werden nur vorhandene Objekte aktualisiert. Es werden keine neuen Objekte erstellt.                                                                                  |
| **Erstellen**                          | Der Import-Modus **"Erstellen"** wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren.                                                                                  |
| **Erstelle nur neu gescannte Geräte**  | Der Modus **"Erstelle nur neu gescannte Geräte"** erstellt nur neu gescannte Objekte, existierende werden übersprungen.                                                                                |
| **Überschreiben**                      | Der Import-Modus **"Überschreiben"** verhält sich genauso wie der Modus "Aktualisieren" mit dem Unterschied, das Listen-Kategorien erst geleert und dann neu angelegt werden.                          |
| **Überschreiben (Neu inventarisiert)** | Mit dem Zusatz **"(Neu inventarisiert)"** werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.                                                      |

In der Protokollierung kann der Umfang der geschriebenen Logs beeinflusst werden. Ein umfangreicheres Logging erhöht die Dauer des Imports. Wenn die Einstellungen vollständig vorgenommen wurden, kann der Import über **Importvorgang starten** angestoßen werden. Bitte beachte, dass die Dauer des Imports sowohl von der Größe der JDisc-Datenbank, als auch von der verwendeten Hardware abhängig ist. Wenn der Import abgeschlossen wurde, wird eine Zusammenfassung im Bereich **Ergebnis** angezeigt. Beim Import erzeugte Logs findest du im i-doit-Verzeichnis `log/`.

Durch das klicken des **Pause** Buttons wird der Import für die Dauer einer festgelegten Zeitspanne pausiert. Dies kann mit der Einstellung Maximale Länge der Importpause innerhalb der i-doit JDisc Einstellungen konfiguriert werden. Nachdem das eingestellte Zeitlimit erreicht wurde wird der Import entweder abgebrochen oder fortgesetzt. Dies ist abhängig von der Einstellung Verhalten des pausierten Imports. Der Import kann außerdem jederzeit manuell fortgesetzt oder abgebrochen werden. Ein pausierter Import kann über den **Fortsetzen** Button wieder fortgesetzt werden. Der **Abbrechen** Button kann jeder Zeit während eines laufenden Imports betätigt werden und sorgt anschließend dafür, dass der laufende Import abgebrochen wird, die bereits importierten Objekte verbleiben allerdings in der Datenbank.

[JDisc Profile]

Die oben genannten Einstellungen können unter **Verwaltung → Mandanten Verwaltung → Einstellungen für Mandant → JDisc** vorgenommen werden.

[JDisc Profile]

## Import über die Kategorie JDisc Discovery

Über die Kategorie JDisc Discovery können Sie einzelne Objekte aktualisieren.
Hier besteht die Möglichkeit, das Gerät über eine bestimmte Identifikation zu scannen (Hostadresse, FQDN und Seriennummer).

!!! note "Die Seriennummer ist nur verfügbar wenn der JDisc Server via [GraphQL](#discovery-einstellungen) verbunden wurde"

[JDisc Profile]

Die Kategorie können Sie über die Objekttyp Konfiguration des Objekttyps hinzufügen.

## Import über die i-doit Console

Der Import der Daten aus JDisc nach i-doit ist nicht nur manuell über die Oberfläche möglich. Er kann ebenfalls über die i-doit [Console]() ausgeführt und somit **automatisiert** werden. Wie der entsprechende Aufruf erzeugt wird, finden Sie im [zugehörigen Artikel]() mit einem Beispiel für die Option **import-jdisc**.

Für den Import lässt sich die ID des gewünschten Profils angeben. Die ID ist in der Liste der Profile zu finden:

[JDisc Profile]

Ebenfalls kann die ID des zu verwendenden JDisc Servers angegeben werden. Diese ist in der Konfiguration zu finden:

[JDisc Konfiguration]

Eine JDISC.ini könnte so aussehen mehr Informationen zu .ini Dateien sind [hier]() zu finden.

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
group=
mode=1
server=2
overwriteHost
detailedLogging=3
regenerateSearchIndex
[additional]
```

Aufruf aus dem i-doit Verzeichnis:

```shell
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```

## Report views

### JDisc-Verfügbarkeit

Unter **Report Manager -> Views** ist ein Report mit dem Namen **JDisc-Verfügbarkeit** zu finden, der i-doit Objekte mit JDisc Objekten vergleicht.

### JDisc delete devices

!!! info "Dieser Report view funktioniert nur, wenn GraphQL konfiguriert ist"

!!! warning "Dieser Report view löscht Objekte in JDisc. Wir empfehlen deshalb vor dem verwenden des Report views ein Backup oder einen Snapshot von JDisc zu machen!"

Unter **Report Manager -> Views** ist ein Report mit dem Namen **JDisc delete devices** zu finden, dieser listet alle JDisc Objekte auf, die in i-doit archiviert oder gelöscht sind. Die jeweiligen Objekte können dann ausgewählt und anschließend in JDisc gelöscht werden. In JDisc gelöschte Objekte werden im **Device Deletion Log** protokolliert.

## FAQ

Der JDisc Import verwendet ein festes `memory_limit` von `2G`, sollte beim JDisc Import der Suchindex dieses Limit überschreiten sollte der Key `system.memory-limit.jdisc` = `3G` zu den [Experteneinstellungen]() hinzugefügt werden.
