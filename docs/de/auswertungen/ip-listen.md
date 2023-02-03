**Inhaltsverzeichnis**

*   1[Kategorie IP-Liste](#IPListen-KategorieIP-Liste)
*   2[Objekte zuordnen](#IPListen-Objektezuordnen)
*   3[IP-Adressen überprüfen](#IPListen-IP-Adressenüberprüfen)

Eine zentrale Frage stellt sich dem Admin immer wieder: Welche IP-Adressen sind an welchen Host vergeben und welche sind noch frei? Die IP-Listen in i-doit helfen da weiter.

Einen breiter aufgestellten Einblick in die Materie bietet der Anwendungsfall zum [IP Address Management (IPAM)](/pages/viewpage.action?pageId=23068674).

Kategorie IP-Liste
------------------

Eine umfassende Übersicht über jedes Netz bietet die [Kategorie](/display/de/Struktur+der+IT-Dokumentation) **`IP-Liste`**, die in der Standardinstallation von i-doit dem [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) **`Layer-3-Netz`** zugeordnet ist. In einer tabellarischen Liste befinden sich alle [Objekte](/display/de/Struktur+der+IT-Dokumentation), die diesem Netz zugeordnet sind, nebst IP-Adresse, Hostname und Art der Adressvergabe.

![](/download/attachments/47611921/ip-liste.png?version=1&modificationDate=1467991270218&api=v2&effects=drop-shadow)

Die Art der Adressvergabe wird farblich dargestellt, worüber eine Legende rechts neben der Liste aufklärt:

*   **Grün:** Netz-/Broadcast-Adresse
*   **Gelb:** Default Gateway (Dies ist dasjenige Objekt, bei dem in der Kategorie Hostadresse angegeben wurde, als Default Gateway zu agieren.)
*   **Orange:** unnummerierter Adressbereich
*   **Grau:** statisch vergebene IP-Adressen
*   **Blau:** vom DHCP-Server vorreservierte IP-Adressen (siehe Kategorie `**DHCP**`)
*   **Hellblau:** vom DHCP dynamisch vergebene IP-Adressen (siehe Kategorie `**DHCP**`)

Um (unbeabsichtigte) Adresskonflikte zu vermeiden, weißt i-doit neben der Tabelle auf mehrfach vergebene IP-Adressen hin.

Bei kleineren Netzen (< 1.000 IP-Adressen) werden auch nicht vergebene IP-Adressen angezeigt. Sollte das Netz einen zu großen Adressumfang haben, beispielsweise ein `/16` mit über 65000 IP-Adressen, werden nur die vergebenen IP-Adressen angezeigt und die nicht vergebenenen ausgeblendet. Zusätzlich erscheint ein Hinweis.

Eine weitere Tabelle auf der rechten Seite fasst wichtige Informationen des Netzes zusammen:

*   IP-Adressen in Benutzung
*   Netzadresse
*   Subnetzmaske
*   Default Gateway
*   Adressebereich
*   Übergeordnetes Supernetze (Objekttyp `**Supernet**`)
*   Zugeordnete VLANs (Objekttyp `**Layer-2-Netz**`)

Objekte zuordnen
----------------

Die Liste kann um weitere Objekte erweitert werden, ohne die Kategorie `**Hostadresse**` zu verwenden. Hierzu wird der Button `**Objekt Zuordnen**` verwendet.

IP-Adressen überprüfen
----------------------

Die Kategorie `**IP-Liste**` bietet eine Möglichkeit zum Abgleich zwischen Soll- und Ist-Zustand: Um zu prüfen, ob die dokumentierten IP-Adressen und Hostnames tatsächlich vergeben sind, kann i-doit ICMP-Pakete ("Pings") versenden und einen NSLOOKUP starten. Dazu benötigt die i-doit Zugriff auf das Netz. Es gibt die Möglichkeit, einzelne Einträge oder alle Einträge nacheinander prüfen zu lassen. Unter **`Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Optionen für IP-Liste`** lässt sich einstellen, welche Kommandozeilen-Tools verwendet werden. Diese muss der Benutzer/die Gruppe des Apache Webservers aufrufen dürfen.

*   `**Ping**`: ICMP-Paket an IP-Adresse schicken
*   `**NSLOOKUP**`: IP-Adresse zum Hostname bestimmen
*   `**Reverse NSLOOKUP**`: Hostname zur IP-Adresse bestimmen