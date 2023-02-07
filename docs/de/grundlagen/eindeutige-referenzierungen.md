# Eindeutige Referenzierungen

Referenzierungen sind wichtig, um innerhalb der [IT-Dokumentation](../glossar.md) Eindeutigkeiten zu schaffen. Sollen beispielsweise [Objekte](struktur-it-dokumentation.md) für Drittsysteme referenziert werden, bieten sich verschiedene [Attribute](struktur-it-dokumentation.md) an.
<!---Todo: Fixme--->
!!! info "Datenimporte"

    Um bereits bestehende Daten zu erkennen, existieren für die [Datenimporte](/display/de/Daten+konsolidieren) entsprechende Strategien. Diese beziehen sich größtenteils auf die nachfolgend erwähnten Attribute. Details sind den jeweiligen Artikeln zu entnehmen.

Objekt-ID
---------

Jedes Objekt in i-doit erhält einen Identifier (ID). Dieser ist pro i-doit-Mandant immer eindeutig. Die ID ist eine positive Zahl größer 0 und kann bis zu 11 Stellen aufweisen. Sie wird von MySQL/MariaDB automatisch vergeben, in dem die Zahl um 1 hochgezählt wird. Eine nachträgliche Änderung der ID durch den Benutzer ist nicht möglich, um Inkonsistenzen zu vermeiden. Durch das [Löschen von Objekten (**Purge**)](lebens-und-dokumentationszyklus.md) werden IDs zwar frei, können aber nicht wiederverwendet werden.

Die Objekt-ID wird in der [Kategorie](struktur-it-dokumentation.md) **Allgemein** als Attribut **Objekt ID** dargestellt.

[![objekt-id](../assets/images/de/grundlagen/eindeutige-referenzierungen/1-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/1-er.png)

Beim [Setup von i-doit](../installation/manuelle-installation/setup.md) kann bestimmt werden, ab welcher Stelle begonnen wird, Objekt-IDs zu vergeben. Standardmäßig beginnt die Zählung bei 1.

Die Objekt-ID findet in der Generierung der URIs eine hohe Bedeutung. Anhand der ID lassen sich Objekte eindeutig per Link aufrufen. Der Variablenname lautet objID. Das Namensschema:

    http://i-doit.example.net/i-doit/?objID=1000

Objekt-IDs werden vor allem zu internen Zwecken verwendet, können aber auch dem Benutzer oder Dritt-Systemen sehr nützlich sein. Die IDs sind beispielsweise bei [API-Zugriffen](/pages/viewpage.action?pageId=7831613) essentiell.

SYS-ID
------

Das Attribut **SYS-ID** erhebt den Anspruch, Mandanten- und Installations-übergreifend eindeutig zu sein. Hierzu wird beim Erstellen eines neuen Objekts eine mindestens 10-stellige, positive Zahl erzeugt, die sich vom [UNIX-Timestamp](https://de.wikipedia.org/wiki/Unixzeit) ableitet. Dargestellt wird sie in der Kategorie **Allgemein**. Synonym wird auch **SYSID** ohne Bindestrich verwendet.

[![sysid](../assets/images/de/grundlagen/eindeutige-referenzierungen/2-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/2-er.png)

Pro [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) kann ein Präfix angegeben werden, der der automatisch generierten Zahl voran gestellt wird. Konfiguriert wird der Präfix unter **Verwaltung → CMDB Einstellungen → Objekttyp-Konfiguration → [Objekttypgruppe] → [Objekttyp] → SYSID Präfix**. Wird dort nichts angegeben, beginnt eine SYS-ID mit dem Präfix SYSID_. Durch die Angabe eines alternativen Präfixes ändert sich die Generierung der Zahl: Statt des UNIX-Timestamps wird die Objekt-ID verwendet.

[![sysid-präfix](../assets/images/de/grundlagen/eindeutige-referenzierungen/3-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/3-er.png)

Standardmäßig ist die SYS-ID vom Benutzer nachträglich nicht veränderbar. Sollen Änderungen möglich sein, wird dies unter **Verwaltung → CMDB Einstellungen → Allgemeine Einstellungen → SYS-ID readonly** aktiviert.

Objekt-Titel
------------

Jedes Objekt erhält zwingend einen Titel. Dieser wird als Attribut in der Kategorie **Allgemein** dokumentiert. Synonym wird dieses Attribut auch **Bezeichnung**, **Name**, **Objekt-Link** genannt.

[![objekt-titel](../assets/images/de/grundlagen/eindeutige-referenzierungen/4-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/4-er.png)
<!---Todo: Fixme--->
!!! success "Objekt-Titel automatisch vergeben"

    Objekt-Titel können automatisch vergeben werden. Besonders hilfreich ist dies bei [Templates](/display/de/Templates):

    1.  Template erzeugen
    2.  Als Objekt-Titel die zur Verfügung stehenden Platzhalter nutzen und speichern
    3.  Template als Default Template dem Objekttyp zuordnen
    4.  Neues Objekt erzeugen; der Objekt-Titel ist bereits ausgefüllt.

IP-Adresse
----------

Pro Objekt können beliebig viele IP-Adressen vergeben werden. Dies geschieht in der Kategorie **Hostadresse**. Für jede IP-Adresse wird ein Kategorie-Eintrag erzeugt.
<!---Todo: Fixme--->
IP-Adressen sind per se nicht eindeutig. Beispielsweise kehren dieselben Adressen bei privaten Netzbereichen wieder und wieder (192.168.1.1 etc.). Werden in i-doit [**Layer-3-Netze**](/pages/viewpage.action?pageId=23068674) mit überlappenden Netzbereichen dokumentiert, kommt es häufig zu Objekten mit nicht-eindeutigen IP-Adressen. Durch Techniken wie DHCP wird es umso schwerer, Objekte anhand dynamisch vergebener IP-Adressen zu identifizieren. Daher ist dieses Attribut für eindeutige Referenzierungen oftmals **nicht geeignet**.

Hostname und FQDN
-----------------

Der **Hostname** wird in der Kategorie **Hostadresse** vergeben. Auch wenn dieser in vielen Fällen pro Gerät (beispielsweise Server) eindeutig vergeben wird, können pro Objekt beliebig viele Hostnames dokumentiert werden. Pro Hostname wird – wie bei der IP-Adresse (siehe oben) – ein Kategorie-Eintrag erzeugt.

Wird pro Kategorie-Eintrag auch das Attribut **DNS Domäne** angegeben, ergibt sich dadurch automatisch der Fully Qualified Domain Name (**FQDN**). Dieser sollte, ähnlich wie IP-Adressen, eindeutig sein, kann aber aus verschiedenen Gründen wiederkehrend sein. Der FQDN wird häufig mit dem Objekt-Titel gleichgesetzt. Die Verwendung von Hostname bzw. FQDN zur Referenzierung sollte wohlüberlegt sein.

[![hostname-fqdn](../assets/images/de/grundlagen/eindeutige-referenzierungen/5-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/5-er.png)

MAC-Adresse
-----------

MAC-Adressen sind in der Regel weltweit eindeutig, weil sie von den Herstellern von Netzwerk-Komponenten vergeben werden. Das Risiko wiederkehrender MAC-Adressen ist damit aber nur theoretisch sehr gering. Durch die immer stärker wachsende Virtualisierung und die damit einhergehenden selbst zu ändernden MAC-Adressen, ist auch dieses Attribut nicht immer die beste Wahl für die eindeutige Referenzierung. In der Kategorie **Port (Netzwerk)** können beliebig viele MAC-Adressen angegeben werden, indem pro Port eine **MAC-Adresse** eingetragen wird. Bei Techniken wie Bonding/Trunking wird die MAC-Adresse in der Kategorie **Logischer Port (Netzwerk)** dokumentiert.

[![mac-adresse](../assets/images/de/grundlagen/eindeutige-referenzierungen/6-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/6-er.png)

Inventarnummer
--------------

Die Inventarisierung von Eigentümern erfolgt meist Organisations-übergreifend, ist also kein rein IT-bezogenes Thema (Asset Management). Jedes materielle Gut, das im Fokus der Inventarisierung steht, erhält eine eindeutige Nummer. Diese Nummer lässt sich in i-doit pro Objekt dokumentieren – und zwar in der Kategorie **Buchhaltung** im Attribut **Inventarnummer**.

Wenn Inventarnummern automatisch generiert werden sollen, kann dies unter **Verwaltung → CMDB Einstellungen → Objekttyp-Konfiguration → [Objekttypgruppe] → [Objekttyp]** konfiguriert werden. Hierbei stehen verschiedene Platzhalter zur Verfügung, um ein Namensschema pro Objekttyp zu erzeugen.

[![inventarnummer](../assets/images/de/grundlagen/eindeutige-referenzierungen/7-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/7-er.png)
<!---Todo: Fixme--->
!!! success "Labels"

    Inventarnummern lassen sich ideal mit QR-Codes zu einem Label verbinden. QR-Codes werden von i-doit pro Objekt generiert. Solche Labels lassen sich beispielsweise mit dem [i-doit QR-Code Printer](/display/de/i-doit+QR-Code+Printer) ausdrucken.

Identifier von Dritt-Systemen
-----------------------------
<!---Todo: Fixme--->
Daten aus Dritt-Systemen, beispielsweise aus den Bereichen Inventory/Discovery, können in i-doit [importiert](/display/de/Daten+konsolidieren) werden. Solche Systeme verfügen meist ebenfalls über eindeutige Identifier o. ä. Werden diese Identifier importiert, kann dazu die Kategorie **Data Source** genutzt werden. Auf diese Art können mehrere eingesetzte Systeme aufeinander abgestimmt werden, sodass Objekte auf sämtlichen Systemen eindeutig referenziert werden können.

[![identifier](../assets/images/de/grundlagen/eindeutige-referenzierungen/8-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/8-er.png)

Konstanten
----------

Intern arbeitet i-doit mit Konstanten, die allerlei Datensätze eindeutig referenzieren. Eine Konstante besteht aus Großbuchstaben (A-Z) und Unterstrichen (\_). Bei einigen Objekten, die in i-doit bereits bei der Standard-Installation mitgeliefert werden, sind solche Konstanten vergeben. Beispielsweise erhält das **Personen**\-Objekt "admin" die Konstante C__OBJ__PERSON_ADMIN.

In der Web GUI lassen sich diese Konstanten nicht betrachten, geschweige denn editieren. Daher geschieht dies in SQL auf der Datenbank. Jeder Mandant hat eine separate Datenbank, in der die Tabelle isys_obj existiert. Dort werden alle Objekte gespeichert. Die Spalte für die Konstante heißt isys_obj__const**.**

!!! attention "Datenbank-Manipulation"

    Manipulationen an der Datenbank gefährden die Funktionalität von i-doit. Daher können wir bei Fehlern, die auf eigenständige Manipulationen zurückzuführen sind, keine Gewährleistung übernehmen. Jede Aktivität sollte daher wohlüberlegt und ggf. mit uns abgestimmt sein.

Weitere Eindeutigkeiten
-----------------------

*   Attribute können global, pro Objekttyp oder (bei Listen-Kategorien) pro Objekt [als eindeutig definiert werden](/display/de/Validierung+und+Pflichtfelder). Mehrfachvorkommen werden von i-doit beim Speichern moniert.
*   Genügen die oben genannten Attribute nicht, können weitere [erzeugt](benutzerdefinierte-kategorien.md) werden.