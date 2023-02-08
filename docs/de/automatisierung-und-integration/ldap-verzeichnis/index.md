Für die Authentifizierung/Autorisierung und Synchronisierung von Daten aus einem LDAP-Verzeichnis oder Active Directory (AD) bietet i-doit eine Schnittstelle.

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/ldap-integration-mit-i-doit/)

**Inhaltsverzeichnis**

*   *   1.1[Nachträgliche Installation unter Debian GNU/Linux](#LDAPVerzeichnis/ActiveDirectory(AD)-NachträglicheInstallationunter)
    *   1.2[Nachträgliche Installation unter Windows](#LDAPVerzeichnis/ActiveDirectory(AD)-NachträglicheInstallationunterWindows)
*   2[Konfiguration](#LDAPVerzeichnis/ActiveDirectory(AD)-Konfiguration)
    *   2.1[Server](#LDAPVerzeichnis/ActiveDirectory(AD)-Server)
    *   2.2[LDAP Verbindung für Lookups (lesend)](#LDAPVerzeichnis/ActiveDirectory(AD)-LDAPVerbindungfürLookups(lesend))
    *   2.3[LDAP-Parameter für i-doit-Login](#LDAPVerzeichnis/ActiveDirectory(AD)-LDAP-Parameterfüri-doit-Login)
    *   2.4[Identifizierung von Objekten](#LDAPVerzeichnis/ActiveDirectory(AD)-IdentifizierungvonObjekten)
    *   2.5[Directories](#LDAPVerzeichnis/ActiveDirectory(AD)-Directories)
    *   2.6[Import eigener LDAP-Attribute](#LDAPVerzeichnis/ActiveDirectory(AD)-ImporteigenerLDAP-Attribute)
    *   2.7[Regelmäßige Synchronisation](#LDAPVerzeichnis/ActiveDirectory(AD)-RegelmäßigeSynchronisation)
    *   2.8[Erweiterte Konfiguration](#LDAPVerzeichnis/ActiveDirectory(AD)-ErweiterteKonfiguration)
    *   2.9[Automatische Zuweisung von Personen zu Personengruppen](#LDAPVerzeichnis/ActiveDirectory(AD)-AutomatischeZuweisungvonPersonenzuPersonengruppen)
    *   2.10[Personen und Personengruppen Synchronisieren](#LDAPVerzeichnis/ActiveDirectory(AD)-PersonenundPersonengruppenSynchronisieren)
    *   2.11[Logging](#LDAPVerzeichnis/ActiveDirectory(AD)-Logging)
*   3[Den ldap-sync ausführen](#LDAPVerzeichnis/ActiveDirectory(AD)-Denldap-syncausführen)

Voraussetzungen

i-doit unterstützt folgende Verzeichnisdienste:

*   [OpenLDAP](https://de.wikipedia.org/wiki/OpenLDAP)
*   [Microsoft Active Directory (AD)](https://de.wikipedia.org/wiki/Active_Directory)
*   [Novel eDirectory](https://de.wikipedia.org/wiki/Novell_eDirectory) (früher Directory Services)

Die [PHP-Extension `php_ldap`](http://de.php.net/manual/de/ldap.setup.php) für die Kommunikation mit einem Active Directory (AD) bzw. LDAP-Verzeichnis muss installiert und aktiviert werden. Wer den Installationsanweisungen gefolgt ist, hat die Extension bereits auf dem System.

Nicht vergessen, LDAP zu erlauben, wenn SELinux verwendet wird. Dazu `_setsebool -P httpd_can_connect_ldap on_` verwenden. Das -P steht für Permanent  
Überprüfen Sie dies mit `_getsebool -a | grep httpd_`

### Nachträgliche Installation unter [Debian GNU/Linux](/pages/viewpage.action?pageId=10223831)

[?](#)

`sudo` `apt` `install` `php7-ldap`

`sudo` `service apache2 restart`

### Nachträgliche Installation unter [Windows](/display/de/Microsoft+Windows+Server)

Die Datei `php.ini` (in der Regel unter `C:\xampp\php\php.ini`) muss angepasst werden. In einem Texteditor aktiviert man das Laden der Extension `php_ldap`.  

Aus der Zeile

[?](#)

`;extension=php_ldap.dll`

wird das ";" entfernt und somit

[?](#)

`extension=php_ldap.dll`

Manchmal kann es noch notwendig sein, die Dateien `ssleay32.dll` und `libeay32.dll` (von Version zu Version unterschiedlich, jedoch meist unter `C:\xampp\apache\bin\` zu finden) in das Verzeichnis `php\` zu kopieren. Danach muss noch der Apache Webserver neu gestartet werden.

Konfiguration
-------------

Die Konfiguration befindet sich in i-doit unter `**Verwaltung → Schnittstellen / externe Daten → LDAP**`. Dort können unter `**Server**` zum Einen ein oder mehrere Instanzen konfiguriert und zum Anderen eine Zuweisung von Feldern zu Attributen vorgenommen werden.

### Server

Unter `**Verwaltung → Schnittstellen / externe Daten → LDAP → Server**` können ein oder mehrere Instanzen konfiguriert werden. Beim Login werden alle Server nacheinander abgefragt, bis ein Login gefunden wurde. Gibt es mehrere [Mandanten](/pages/viewpage.action?pageId=36864089), werden alle nacheinander abgefragt und die Datenbanken für den Login angeboten, wenn die Abfrage ein positives Ergebnis geliefert hat.

### LDAP Verbindung für Lookups (lesend)

  

| Feldname | Inhalt |
| --- | --- |
| `**Aktiv**` | Soll der Server beim Login mit abgefragt werden? |
| `**Directory***` | Pflichtfeld: Welche Art Directory wird abgefragt? |
| `**LDAP-Version**` | In welcher Version ist das Directory vorhanden? (Standard: `3`) |
| **`Enable LDAP Paging`** | Soll die maximale Anzahl der Suchergebnisse aktiviert/überschrieben werden?  <br>Dann werden die Ergebnisse "päckchenweise" übermittelt.<br><br>_In einem LDAP-Suchvorgang muss stets damit gerechnet werden, dass der LDAP-Server eine Obergrenze der zurückgelieferten Ergebnisse pro Suchanfrage hat. Man sucht z.B. nach allen User-Objekten in einer gesamten OU-Struktur, bekommt aber nur 500 User als Ergebnis zurück, obwohl sich weit über 2000 User auf dem Server befinden müssen._ |
| **`LDAP Page Limit`** | Wie viele Ergebnisse sollen pro "Päckchen" zurückgeliefert werden? |
| `**IP / Hostname***` | Pflichtfeld: Die IP oder der Hostname des Servers |
| `**Port***` | Pflichtfeld: Über welchen Port wird die Abfrage durchgeführt? (Standard: `389`) |
| `**TLS**` | Soll die Abfrage verschlüsselt werden? Achtung: Bei selbst-signierten Zertifikaten oder welchen, deren Zertifikat der Root CA nicht dem Betriebssystem, unter dem i-doit installiert ist, bekannt sind, wird die Authentifizierung fehlschlagen. Wie das Zertifikat akzeptiert werden kann, ist den jeweiligen Anleitungen der Betriebssysteme zu entnehmen. Unter [Debian](/pages/viewpage.action?pageId=10223831)\-basierten Betriebssystemen wird das Zertifikat der Root CA in das Verzeichnis `/usr/local/share/ca-certificates/` kopiert und anschließend mit `sudo update-ca-certificates` aktiviert. |
| `**Admin Benutzername (DN)***` | Pflichtfeld: Der Pfad bis zum Benutzerobjekt, das Leserechte auf das Directory hat.<br><br>(Beispiel: `CN=idoit,OU=tree,DC=synetics,DC=int`) |
| `**Passwort***` | Pflichtfeld: Das Passwort des darüber angegebenen Benutzers |
| **`Benutze Admin-Nutzer für alle lesenden Anfragen`** | Wenn die Option "Benutze Admin-Nutzer für alle lesenden Anfragen" aktiviert ist, wird bei jeder LDAP-Server Abfrage mit dem Administrator Account aus der LDAP-Server Konfiguration geprüft |
| `**Timelimit**` | Limit für die maximale Dauer der Abfrage. (Standard: `30`) |

_Bekannte Lösungen für Probleme bei der TLS Verbindung findet Ihr [HIER](/display/de/LDAP+via+TLS)_

  

### LDAP-Parameter für i-doit-Login

Die hier angegebenen Parameter bestimmen, wo im Directory nach Benutzern gesucht werden soll. 

  

| Feldname | Inhalt |
| --- | --- |
| `**Eindeutige Kennung**` | Es kommt bei der AD-Synchronisierung immer wieder dazu, dass geänderte Datensätze fälschlicherweise aufgrund eines geänderten Namens (Heirat o.Ä.) nicht mehr synchronisiert werden.  <br>Der "alte" Datensatz wird hier archiviert und ein neuer importiert.  <br>Daher kann als Eindeutige Kennung ein anderes Attribut ausgewählt werden. Siehe dazu **`[Kategorieerweiterung](https://kb.i-doit.com/display/de/CMDB+Einstellungen#CMDBEinstellungen-Kategorieerweiterung)`** |
| `**Filter**` | Der Filter wird durch die im unteren Bereich definierten Werte automatisch gefüllt und kann nicht direkt über die Oberfläche abgeändert werden. |
| `**Nach Benutzern suchen in (OU)***` | Pflichtfeld: Der Pfad bis zur Organisationseinheit, in der die Benutzer im Directory abgelegt wurden.<br><br>(Beispiel: `OU=tree,DC=synetics,DC=int`) |
| `**Rekursive Suche**` | Beim Aktivieren der rekursiven Suche werden auch die Verzeichnisse unterhalb der darüber angegebenen Organisationseinheit durchsucht. Bei großen Directories ist dies nicht empfehlenswert und sollte durch die Anlage von mehreren Servern umgangen werden. |

Des Weiteren kann der Filter noch weiter definiert werden. Bei einer einzigen Filterzeile haben die Optionen dahinter noch keine Auswirkungen. Erst wenn über "Filter hinzufügen" die Abfrage erweitert wird, kommen die weiteren Optionen zur Geltung.

  

An letzten Filter anhängen:

[?](#)

`(&(objectClass=user)(``test``=``test``))`

Als neuen Filter anhängen:

[?](#)

`(&(objectClass=user)(&(``test``=``test``)))`

Neuen Term bilden:

[?](#)

`(&(&(objectClass=user))(``test``=``test``))`

Im untersten Bereich lässt sich dann die oben festgelegte Konfiguration testen. Bestenfalls erscheint die Meldung:

[?](#)

`Connection OK!`

`XX object(s) found` `in` `OU=tree,OU=synetics,DC=synetics,DC=int.`

  
Sollte bei Misserfolg die Fehlermeldung noch nicht eindeutig genug sein, kann das Debug-Level hochgesetzt werden, sodass weitere Ausgaben im Apache Error Log mitgeschrieben werden. Das Error Log ist unter [Debian](/pages/viewpage.action?pageId=10223831)\-basierten Betriebssystemen unter `/var/log/apache2/error.log` zu finden.

### Identifizierung von Objekten

Ohne weitere Einstellung z.B. `**Eindeutige Kennung**` wird anhand des `**Login**` Attributes aus der `**Kategorie Personen → Login**` identifiziert`**.**`

  

### Directories

Über **`Verwaltung → Schnittstellen / externe Daten → LDAP → Directories `**lässt sich dann das Mapping einrichten. Es wird dafür genutzt, beim Login grundlegende Informationen zu dem einloggenden Benutzer abzufragen und in dem in i-doit zu erstellenden Benutzer abzulegen. Hier kann nach der Auswahl des zutreffenden Directories die Zuweisung vorgenommen werden. Standardmäßig sind die Felder jedoch schon gefüllt und brauchen in der Regel nicht verändert zu werden.

### Import eigener LDAP-Attribute

Es ist auch möglich, eigene Attribute aus dem LDAP über den Import von Personen in den Stammdaten zu hinterlegen. Dafür können weitere Felder für diese Kategorie unter **`Verwaltung → CMDB-Einstellungen``→ ``[Kategorieerweiterungen](https://kb.i-doit.com/display/de/CMDB+Einstellungen#CMDBEinstellungen-Kategorieerweiterung)`** konfiguriert werden. Sobald ein Name definiert wurde, wird das Feld mit derselben Bezeichnung angezeigt. Die Befüllung findet dann über den zugehörigen Key statt.

### Regelmäßige Synchronisation

Die dafür benötigte Konfiguration wurde in den vorherigen Schritten bereits vorgenommen. Für die Synchronisation muss nun noch der passende [Controller Handler](/display/de/CLI) eingerichtet werden. Außerdem können noch weitere zu synchronisierende Felder konfiguriert werden.

### Erweiterte Konfiguration

Die Konfiguration muss in der [Handler-Konfiguration](/display/de/CLI) vorgenommen werden. Ein Beispiel dazu ist [Hier](/pages/viewpage.action?pageId=82575816) zu finden`(i-doit < 1.15.` Diese Datei kann mit Login-Daten, Tenant und Attributen erweitert und angepasst werden. Die Konfigurationsdatei wird dann nach `i-doit/src/handler/config/ `verschoben. Damit diese Datei z.B. beim ldap-sync Command berücksichtig wird, muss diese beim sync über einen weiteren Parameter (-c /pfad/) mit angegeben werden (weitere Informationen zur [Console](/display/de/Optionen+und+Parameter+der+Console)). 

| Parameter | Zweck |
| --- | --- |
| **`import_rooms`** | Auf `true` gesetzt werden auch Räume mit der Synchronisation angelegt (Standard: `false`) |
| **`defaultCompany`** | Hierdurch werden durch die LDAP-Synchronisation hinzugefügte Benutzer automatisch der konfigurierten<br><br>Organisation zugewiesen. (Standard: leer)<br><br>Bsp. <br><br>`defaultCompany='i-doit'` |
| **`deletedUsersBehaviour`** | Kann auf `**archive**, **delete**` und `**disable_login**` gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](/display/de/Lebens-+und+Dokumentationszyklus) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>deletedUserBehavior=archive, setzt den Status des Benutzers auf archiviert  <br>deletedUserBehavior=delete, setzt den Status des Benutzers auf gelöscht  <br>deletedUserBehavior=disable\_login, setzt den Status des Benutzers auf normal und Deaktiviere Login auf Ja<br><br>(Standard: **`archive`)**<br><br>Bsp.<br><br>`deletedUsersBehaviour=archive` |
| `**disabledUsersBehaviour**` | Kann auf `**archive**`, `**delete**` und `**disable_login**` gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](/display/de/Lebens-+und+Dokumentationszyklus) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>Oder man deaktiviert nur den Login für die User.<br><br>Bsp.<br><br>`disabledUsersBehaviour=archive` |
| **`rooms`** | Wie in dem Beispiel kann hier eine Zuweisung von Benutzer zu einem Raum vordefiniert werden, die bei der Synchronisation vorgenommen wird. Die Zuweisung wird über die Kontaktzuweisung ohne eine Rolle realisiert.<br><br>Bsp. <br><br>`rooms["Raum B"] = ["Person A", "Person C", "Person D"]` |
| **`attributes`** | Hiermit werden die jeweiligen Felder aus dem Directory mit Attributen in i-doit verknüpft. Diese ergänzen die zugewiesenen Attribute aus dem oberen Teil der Anleitung.<br><br>Bsp.<br><br>`attributes[department]=department` |
| **`autoReactivateUsers`** | Ist nur für Novel Directory Services (NDS) und OpenLDAP relevant. Hierdurch werden bei der Synchronisation erst mal alle Benutzer wieder aktiviert und nach dem regulären Prinzip wieder deaktiviert, falls zutreffend.<br><br>Bsp.<br><br>`autoReactivateUsers=false` |
| `**ignoreUsersWithAttributes**` | Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.<br><br>Der Benutzer wird nicht synchronisiert, wenn die ignoreFunctionfür alle ausgewählten Attribute fehlschlägt.<br><br>Bsp.<br><br>ignoreUsersWithAttributes\[\] = "samaccountname" |
| `**ignoreFunction**` | Dies kann ein beliebiger Funktionsname sein, der über call\_user\_func oder die definierten Funktionen aufrufbar ist.<br><br>Definierte Funktionen:<br><br>empty  <br>!empty  <br>isset  <br>!isset<br><br>Bsp,<br><br>ignoreFunction\=empty |
| syncEmptyAttributes | Wurden Werte aus Feldern im AD gelöscht/geleert werden diese in i-doit übernommen<br><br>syncEmptyAttributes=true |

  

### Automatische Zuweisung von Personen zu Personengruppen

Die automatische Zuweisung sorgt dafür, dass nach dem Login automatisch die für die Personengruppe festgelegten Berechtigungen zugewiesen werden. Damit die Zuweisung erfolgen kann, muss in den `**Stammdaten**` einer `**Personengruppe**` das Attribut `**LDAP-Gruppe (Mapping)**` mit einer validen Gruppe aus LDAP/AD gefüllt werden. Loggt sich ein Benutzer ein oder wird die Synchronisation ausgeführt, werden automatisch auch die dem Benutzerobjekt im Directory zugewiesenen Gruppen abgefragt und mit dem Attribut `**LDAP-Gruppe (Mapping)**` der Personengruppen verglichen. Gibt es eine Übereinstimmung wird die Gruppe zugewiesen und die weiteren Gruppen abgefragt.

![](/download/attachments/9666615/Personengruppen-stammdaten.png?version=1&modificationDate=1607425431715&api=v2&effects=drop-shadow)

  

memberOf bei OpenLDAP

Die automatische Zuweisung beruht auf der LDAP-Abfrage, in welchen Gruppen ein Benutzer ist. Hierbei spielt das Attribut `memberOf` eine wichtige Rolle. Dieses Attribut muss als Overlay verfügbar sein, was in vielen Standard-Installationen von OpenLDAP nicht der Fall ist. Gute Artikel für die nötige Konfiguration befinden sich [hier](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) und [hier](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

### Personen und Personengruppen Synchronisieren

Seit Version 1.15 können Personen und Personengruppen aus dem LDAP/AD synchronisiert werden. Dabei werden die Personen Mitglied der Ihnen im LDAP zugewiesenen Gruppe. Solange die Gruppe auch mit dem eingestelltem Filter gefunden wird.  
[HIER](https://kb.i-doit.com/pages/viewpage.action?pageId=97288195) gehts es zum Artikel.  
Voraussetzung ist, dass der Benutzer mit dem der Befehl ausgeführt wird auch die Supervisor Rechte auf die Kategorien ("Gruppenmitgliedschaft" und "Personengruppen > Mitglieder") sowie Supervisor Rechte auf die Objekttypen ("Personen" und "Personengruppen") besitzt.  
![](/download/attachments/9666615/image2020-10-26_15-42-47.png?version=1&modificationDate=1603723367468&api=v2&effects=drop-shadow)

### Logging

Unterhalb von `log/` im Installationsverzeichnis von i-doit befindet sich ein Logfile mit dem Namen `ldap_debug.txt`. Das Logging lässt sich unter **`Verwaltung →`** **`Systemeinstellungen → L`****`ogging → LDAP Debug`** (de-)aktivieren.

Den ldap-sync ausführen
-----------------------

Der ldap-sync lässt sich nur über die Console des Servers ausführen. Um die Console richtig bedienen zu können, sollte der [Artikel](/display/de/Console) dazu bekannt sein. Eine einfache Synchronisation ohne die erweiterte Konfiguration dient die Option `**ldap-sync**`. Eine Beschreibung der Parameter ist im entsprechenden [Kapitel](/display/de/Optionen+und+Parameter+der+Console) zu finden.

**Beispiel zur Verwendung**

[?](#)

`sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1`