**Inhaltsverzeichnis**

*   1[Überblick](#IPAddressManagement(IPAM)-Überblick)
*   2[LAN](#IPAddressManagement(IPAM)-LAN)
*   3[Supernetze](#IPAddressManagement(IPAM)-Supernetze)
*   4[IP-Adresse mit Hostname](#IPAddressManagement(IPAM)-IP-AdressemitHostname)
*   5[IP-Liste](#IPAddressManagement(IPAM)-IP-Liste)
*   6[VLAN](#IPAddressManagement(IPAM)-VLAN)
*   7[DHCP](#IPAddressManagement(IPAM)-DHCP)
*   8[Netzbereiche](#IPAddressManagement(IPAM)-Netzbereiche)
*   9[DNS und FQDNs](#IPAddressManagement(IPAM)-DNSundFQDNs)
*   10[Gateways](#IPAddressManagement(IPAM)-Gateways)
*   11[IPv4 versus IPv6](#IPAddressManagement(IPAM)-IPv4versusIPv6)
*   12[WLAN](#IPAddressManagement(IPAM)-WLAN)
*   13[WAN](#IPAddressManagement(IPAM)-WAN)
*   14[VPN](#IPAddressManagement(IPAM)-VPN)
*   15[Artverwandte Themen](#IPAddressManagement(IPAM)-ArtverwandteThemen)
    *   15.1[MAC-Adressen und Ports](#IPAddressManagement(IPAM)-MAC-AdressenundPorts)
    *   15.2[Virtuelle Ports](#IPAddressManagement(IPAM)-VirtuellePorts)
    *   15.3[Verkabelung](#IPAddressManagement(IPAM)-Verkabelung)
    *   15.4[Network Listener und Port Binding](#IPAddressManagement(IPAM)-NetworkListenerundPortBinding)
*   16[Weiterführende Links](#IPAddressManagement(IPAM)-WeiterführendeLinks)

Ein wesentliches Element einer [IT-Dokumentation](/display/de/Glossar) ist die Pflege von IP-Netzen, -Adressen und diversen Netzwerk-Komponenten. Dieses wird IP Address Management, kurz IPAM, genannt.

Überblick
---------

[IPAM](https://en.wikipedia.org/wiki/IP_address_management) beinhaltet verschiedene Bereiche, die im folgenden näher erläutert werden. i-doit verfügt bereits in der Standard-Installation über alle [Objekttypen](/display/de/Glossar) und [Kategorien](/display/de/Glossar), um ebendiese Bereiche abzudecken. Dazu zählen unter anderem folgende Objekttypen:

*   `**Layer-3-Netz**`
*   **`Layer-2-Netz`**
*   `**Supernet**`

Dabei konzentrieren wir uns vor allem auf diese Kategorien:

*   `**Hostadresse**`
*   **`Netz`** (Kategorie-Ordner)
*   **`Netzwerk`** (Kategorie-Ordner)

Als aktive Netz-Komponenten liefert i-doit beispielsweise die Objekttypen **`Switch`** und `**Router**` mit, als aktive Endgeräte **`Server`**, `**Client**`, **`VoIP Telefon`** u.v.m.

LAN
---

Bevor einzelne IP-Adressen, Hostnames und MAC-Adressen dokumentiert werden, lohnt es sich, die dazugehörigen LANs (Local Area Network) zu dokumentieren. Hierfür eignet sich der Objekttyp **`Layer-3-Netz`**. In der Kategorie **`Netz`** beinhaltet die wesentlichen [Attribute](/display/de/Glossar) zur Pflege eines IP-Netzes:

*   **`Typ`** (IPv4, IPv6; Auswahlfeld)
*   **`Netz`**\-Adresse (Textfeld) mit Subnetzmaske bzw. CIDR-Notation (Textfelder; bedingen sich gegenseitig)
*   `**Standardgateway**` (Dropdown Auswahl Feld zu aktiven Komponenten, z. B. Router)
*   `**Reverse DNS**` (Textfeld)
*   **`DNS-Server`** (Objektbrowser)
*   **`DNS-Domäne`** (Mehrfachauswahl)
*   `**Layer-2-Netz Zuordnung**` (für VLANs; Objektbeziehung; Mehrfachauswahl)

In dieser Kategorie kann zudem geprüft werden, ob bereits Netze dokumentiert sind, mit denen sich der hier angegebene Adressbereich überschneidet.

Global v4 und Global v6

i-doit bringt zwei [Objekte](/display/de/Glossar) vom Typ `**Layer-3-Netz**` mit: **`Global v4`** und **`Global v6`**. Wer auf die Dokumentation von einzelnen Netzen verzichten möchte, ordnet einzelne IP-Adressen einen der beiden Objekten zu. Dies geschieht automatisch je nach IP-Version. Die Netze umfassen den kompletten IPv4- bzw. IPv6-Adressbereich. Daher können beide Objekte nicht gelöscht werden und sollten bestenfalls auch nicht fundamental verändert werden, sodass ihr Zweck nicht mehr erfüllt werden kann.

Supernetze
----------

Supernetze, sprich die Zusammenfassung von mehreren Subnetzen zu einem Netz, können im Objekttyp **`Supernet`** dokumentiert werden. Wird in einem Objekt diesen Typs der Adressbereich in der Kategorie `**Netz**` definiert, werden die zugehörigen Subnetze automatisch in Beziehung gesetzt. Eine tabellarische Zusammenfassung liefert die Kategorie `**Supernet**`.

IP-Adresse mit Hostname
-----------------------

Die Dokumentation einzelner IP-Adressen geschieht in der Kategorie **`Hostadresse`**, die jedem Objekttypen zugeordnet werden kann. Da es sich um eine [Listen-Kategorie](/display/de/Glossar) handelt, können beliebig viele IP-Adressen pro Objekt angegeben werden. Die Kategorie verfügt neben der reinen Datenpflege über einige Automatismen, die den Benutzer unterstützen. Zuerst sollte angegeben werden, welcher **`Typ`** (also welche IP-Version) verwendet wird. Danach sollte das zuvor angelegte Netz angegeben werden und die Art der **`Adressvergabe`** (z. B. statisch). i-doit schlägt nun die nächst freie IP-Adresse vor, welches übernommen oder abgeändert werden kann. Wichtig ist noch die Angabe des Hostnamens. Unter **`DNS-Domäne`** kann aus den Domains gewählt werden, die dem Netz zugeordnet sind, sodass entsprechende FQDNs (Fully Qualified Domain Name) aus Hostnamen und Domains gebildet werden können.

IP-Liste
--------

Eine [umfassende Übersicht über jedes Netz](/display/de/IP-Listen) bietet die Kategorie **`IP-Liste`**, die dem Objekttyp **`Layer-3-Netz`** zugeordnet ist. In einer tabellarischen Liste befinden sich alle Objekte, die diesem Netz zugeordnet sind, nebst IP-Adresse, Hostname und Art der Adressvergabe. Letztere wird farblich dargestellt, worüber eine Legende rechts neben der Liste aufklärt.

Die Liste kann zudem um weitere Objekte erweitert werden, ohne die Kategorie Hostadresse zu verwenden. Ebenfalls lässt sich eine Zuordnung lösen. Bei "kleineren" Netzen (< 1.000 IP-Adressen) werden freie IP-Adressen ebenfalls angezeigt, andernfalls erscheint ein Hinweis.

Um (unbeabsichtigte) Adresskonflikte zu vermeiden, weißt i-doit neben der Tabelle auf mehrfach vergebene IP-Adressen hin.

Eine weitere Tabelle fasst wichtige Informationen des Netzes zusammen (Anzahl vergebener und freier IP-Adressen, Adressbereich usw.).

Ping und NSLOOKUP

Die Kategorie IP-Liste bietet eine Möglichkeit zum Abgleich zwischen Soll- und Ist-Zustand: Um zu prüfen, ob die dokumentierten IP-Adressen und Hostnames tatsächlich vergeben sind, kann i-doit ICMP-Pakete ("Pings") versenden und einen NSLOOKUP starten. Dazu benötigt die i-doit-Installation Zugriff auf das Netz. Es gibt die Möglichkeit, einzelne Einträge oder alle Einträge nacheinander prüfen zu lassen. Unter **`Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Optionen für IP-Liste`** lässt sich einstellen, welche Kommandozeilen-Tools verwendet werden. Diese muss der Benutzer/die Gruppe des Apache Webservers aufrufen dürfen.

VLAN
----

Pro zu pflegendem Virtual LAN (VLAN) legt man in i-doit ein Objekt vom Typ **`Layer-2-Netz`** an. Wichtig hierbei ist die gleichnamige Kategorie, in der die VLAN ID hinterlegt wird. Dort kann auch über das Attribut **`Layer-3-Netz Zuordnung`** ein physisches Netz mit einem VLAN verbunden werden. Ebenso ist die Angabe von **`IP-Helper-Adressen`** möglich.

Um ein VLAN an einen (virtuellen/physischen) Port zu binden, sollte zuvor der entsprechende Port einer aktiven Netzkomponente angelegt worden sein. Entweder lässt sich der Port im Objekt der Komponente zuordnen (Kategorie **`Port`** bzw. `**Logischer Port**`) oder im `**Layer-2-Netz**`\-Objekt in der Kategorie **`Zugewiesene Ports`** bzw. **`Zugewiesene logische Ports`**.

DHCP
----

IP-Adressen werden in einem Netz (Objekte vom Typ **`Layer-3-Netz`**) auf verschiedene Arten vergeben. Während Server oftmals eine statische IP-Adresse erhalten, bekommen Clients meist eine via DHCP zugewiesenen. Der DHCP-Server mag IP-Adressen dynamisch oder per Reservierung vergeben. Um dies zu dokumentieren, lässt sich ein Netz in verschiedene Bereiche aufteilen. Dazu dient die Kategorie **`DHCP`**.

Bei der Zuordnung einer IP zu einem Netz (Kategorie **`Hostadresse`**) beeinflusst die Wahl der **`Adressvergabe`** die automatische Vergabe der nächst freien IP-Adresse. Anders herum ist es möglich, durch die gezielte Angabe der **`Andressvergabe`** einen neuen (reservierten/unreservierten) DHCP-Bereich in dem zugeordneten Netz zu definieren.

Netzbereiche
------------

Abseits von CIDR kann ein Subnetz kann in mehrere Segmente logisch unterteilt werden. Nützlich ist dies bei der Zuweisung von IP-Adressen für bestimmte Aufgaben oder für bestimmte Abteilungen.

![](/download/attachments/23068674/de_objekt-liste_netzbereich.png?version=1&modificationDate=1494253921698&api=v2)

Jedes Segment wird als Objekt vom Typ `**Netzbereich**` angelegt. Dort steht der gleichnamige Kategorie-Ordner bereit. In der untergeordneten Kategorie `**Optionen**` kann eine `**Bereichsfarbe**` ausgewählt werden. Diese Farbe wird in der Kategorie `**Netz → IP-Liste**` verwendet. Weiterhin werden in der Unter-Kategorie `**Bereiche**` die Adressbereiche der zugeordneten Subnetze vom Typ `**Layer-3-Netz**` angezeigt.

Die Zuordnung eines Bereichs zu einem Subnetz findet in der Kategorie `**Netz → IP-Liste**` eines Subnetzes statt: Erst markiert man eine IP-Adresse oder einen Bereich von IP-Adressen. Anschließend weißt man das Segment über den Button `**Neuer Bereich**` diesen IP-Adressen zu. Die IP-Adressen werden in der Farbe des Bereichs markiert.

![](/download/attachments/23068674/de_ip-liste_mit_netzbereichen.png?version=1&modificationDate=1494253921718&api=v2)

In der Kategorie `**Hostadresse**` wird die nächste freie IP-Adresse anhand des ausgewählten Netzbereiche automatisch vorgeschlagen. Das Attribut `**Domäne**` in der Kategorie `**Netzbereich → Optionen**` sorgt zusätzlich dafür, dass bei neu vergebenen IP-Adressen in der Kategorie `**Hostadresse**` automatisch diese Domäne vorselektiert wird.

DNS und FQDNs
-------------

Wer Angaben zum verwendeten Domain Name System (DNS) und/oder Fully Qualified Domain Names (FQDN) pflegen möchte, kann dies mit i-doit erledigen. Pro **`Layer-3-Netz`** können in der Kategorie **`Netz`** beliebig viele `**DNS-Server**` (Objektbeziehung) und Domains hinterlegt werden. Abweichende Einstellungen zu verwendeten DNS-Servern und Domains können pro Objekt in der Kategorie `**Hostadresse**` hinterlegt werden. Erhält ein Objekt einen oder mehrere Hostnamen (Kategorie `**Hostadresse**`) und Angaben zu den verwendeten Domains, ergeben sich daraus ein oder mehrere FQDNs, die automatisch angezeigt werden. Domains können durch die Zuordnung zu einem Netz vererbt werden. Weiterhin können `**Suchdomänen**` angegeben werden.

![](/download/attachments/23068674/de_kategorie_hostadresse_formular.png?version=1&modificationDate=1494253921731&api=v2)

Konfigurationsdaten für DNS- und DHCP-Server

Prinzipiell eignen sich die dokumentierten Daten, um DNS- oder DHCP-Server mit passenden Konfigurationsdaten auszustatten. i-doit enthält eine [Export-Funktion für den DNS-Server ISC DHCPD](/display/de/CLI).

DNS-Zonen und -Records

Während sich DNS-Zonen aus der IT-Dokumentation mit Hausmitteln von i-doit problemlos ableiten lassen, sind DNS-Records (A, AAAA, MX usw.) derzeit kein Kernbestandteil. Es bietet sich an, eine benutzerdefinierte Listen-Kategorie anzulegen, die die entsprechenden Records enthält. Diese Kategorie lässt sich jedem Objekt zuordnen, für das Records hinterlegt werden soll. Reverse DNS wird in Objekten vom Typ **`Layer-3-Netz`** dokumentiert.

Gateways
--------

Netzkomponenten können als Gateways agieren, um von einem Netz aus Verbindungen zu anderen Netzen zu vermitteln (Routing). Pro Netz gibt es in der Regel ein sogenanntes Standard-Gateway, das verwendet wird, wenn keine explizite Routing-Regel greift. Ein solches Standard-Gateway wird in i-doit pro Netz definiert: Entweder selektiert man in der Kategorie **`Netz`** eines **`Layer-3-Netz`**\-Objekts ein Objekt, das als Standard-Gateway agiert. Dabei ist wichtig, dass dieses Objekt bereits über eine IP-Adresse verfügt, die diesem Netz zugeordnet ist. Oder man selektiert innerhalb des Objekts in der Kategorie **`Hostadresse`** das Attribut **`Standardgateway für das Netz`** auf **`ja`**.

IPv4 versus IPv6
----------------

Auch wenn die Verbreitung von IPv6 in vielen Unternehmens-LANs als eher gering geschätzt werden darf, bietet i-doit die Grundelemente zur Dokumentation von IPv6-Netzen. Dazu werden – wie bei IPv4 – Netze definiert und IP-Adressen zugeordnet. Lediglich die **`Adressvergabe`** unterscheidet sich (SLAAC, DHCPv6, usw.). Zudem kann der **`Gültigkeitsbereich`** (Global, Linklokal usw.) angegeben werden. Beide Attribute gehören zur Kategorie **`Hostadresse`**.

WLAN
----

Die Dokumentation von WLANs unterscheidet sich nicht fundamental von den bereits genannten Möglichkeiten. Ein Access Point (AP) kann als Objekt vom Typ **`Wireless Access Point`** dokumentiert werden. In der Kategorie **`WiFi-Gerät`** werden unter anderem SSIDs und Angaben zur Verschlüsselung gepflegt.

WLAN-Controller

i-doit bringt in der Standard-Installation keine direkte Möglichkeit mit, WLAN-Controller zur Steuerung von Access Points abzubilden. Hierzu bietet es sich an, einen dedizierten Objekttypen anzulegen mit einer dementsprechenden benutzerdefinierten Kategorie zu definieren.

WAN
---

Um Außenverbindungen zu dokumentieren, eignet sich der Objekttyp **`WAN-Leitungen`**. Unter WAN versteht man Wide Area Network. Ähnliche Formen wie Metropol Area Network (MAN) oder Global Area Network (GAN) sollen von WAN mit abgedeckt sein.

Angaben zu Up- und Downstream, zugewiesene LANs und VLANs u.v.m. können in der Kategorie **`WAN-Leitungen`** hinterlegt werden.

VPN
---

Für Virtual Private Networks (VPN) existieren in der Standard-Installation von i-doit weder ein dedizierter Objekttyp noch eine spezielle Kategorie. Es bietet sich an, dazu den Objekttyp **`Layer-3-Netz`** zu nutzen und im **`Objekttitel`** einen aussagekräftigen Namen zu vergeben, dass das Objekt als VPN erkennbar ist. Werden weitere, auf VPNs zugeschnittene Attribute benötigt, helfen ein dedizierter Objekttyp und eine benutzerdefinierte Kategorie weiter.

Artverwandte Themen
-------------------

Mit der "reinen" IPAM-Dokumentation ist es meistens nicht getan: Es gibt viele Randthemen, die eine mehr oder weniger wichtige Rolle spielen. Einige davon möchten wir im Folgenden kurz anreißen.

### MAC-Adressen und Ports

Zu einem Host möchte man neben den IP-Adressen oftmals die zugehörigen MAC-Adressen dokumentieren. Diese sind eindeutig einem Netzwerkport zugeordnet. In i-doit dient zur Dokumentation die Kategorie **`Port`** im Kategorie-Ordner **`Netzwerk`**. Dort werden weitere (physikalische) Eigenschaften des Ports angegeben. Zudem können eine oder mehrere IP-Adressen fest einem Port zugeordnet werden. Da es sich bei der Kategorie **`Port`** um eine Listen-Kategorie handelt, können beliebig viele Ports pro Objekt angelegt werden.

Hilfreich hierbei ist die Angabe, wie viele Ports gleichzeitig erstellt werden sollen. Dabei kann auch ein Namensschema (`eth0`, `eth1`, `eth2`) angewendet werden.

Eine Verbindung zu einer anderen (aktiven/passiven) Netzkomponente ist pro Port-Eintrag möglich: Im **`Port Browser`** wird dazu erst das Objekt vorausgewählt und dann der entsprechende Port. Das heißt, die Ports sollten bereits existieren, bevor sie miteinander verbunden werden.

### Virtuelle Ports

Physische Ports lassen sich zu logischen zusammenstellen. Diese Technik wird oftmals Trunking oder Bonding genannt. Um dies zu dokumentieren, dient die Kategorie **`Logischer Ports`** im Kategorie-Ordner **`Netzwerk`**.

### Verkabelung

In i-doit kann klar zwischen den verschiedenen Schichten des [TCP/IP-Referenzmodells](https://de.wikipedia.org/wiki/Internetprotokollfamilie#TCP.2FIP-Referenzmodell) unterschieden werden. Die oberen Themen behandeln die Schichten (Layer) 3 mit IP und 4 (MAC). Für die übrigen Schichten bringt i-doit weitergehende Dokumentations-Funktionen mit, beispielsweise für die Schicht 1, die das physische Medium betrachtet.

Um Kabel und deren Verbindungen zu aktiven wie passiven Komponenten zu dokumentieren, bringt i-doit bereits zahlreiche Objekttypen mit (`**Kabel**`, `**Patchfeld**`, `**Kabeltrasse**`, `**Leerrohr**` usw.). Die Verbindung von Objekten dieser Typen übernimmt die Kategorie **`Verkabelung`**. Diese kann, muss aber nicht aktiv gepflegt werden. Wird über die Kategorie **`Port`** (Netzwerk) eine Verbindung zwischen zwei Komponenten dokumentiert, wird diese Kategorie automatisch ausgefüllt und ein Objekt vom Typ **`Kabel`** erstellt.

### Network Listener und Port Binding

Analog zur Verkabelung lassen sich auch die oberen Schichten des TCP/IP-Referenzmodells in i-doit dokumentieren. Welche Applikation welche TCP-/UDP-Verbindungen öffnet und welche Applikation welche Ports auf Drittsystemen anspricht, kann im Kategorie-Ordner **`Netzwerkverbindungen`** festgehalten. Innerhalb des Ordners gibt es die Kategorien **`Listener`** (Port wird geöffnet) und **`Verbindung`** (Port auf Drittsystem wird genutzt). Zuvor sollte sichergestellt sein, dass die benötigten Softwareinstallationen in i-doit dokumentiert sind.

Weiterführende Links
--------------------

*   [doIT BETTER: IP Address Management (IPAM)](https://www.i-doit.com/ip-adressmanagement-mit-i-doit/), Blog-Artikel auf [i-doit.com](http://i-doit.com) mit Video
*   [Deutschsprachige Demo](http://ipamdemo.i-doit.com/) zum obigen "doIT BETTER"-Thema (Credentials: `admin`/`admin`)