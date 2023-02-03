Das "DNS Dokumentation" Add-on wurde als erstes [Add-on](/display/de/i-doit+pro+Add-ons) mit dem [Add-on Packager](/display/de/Add-on+Packager) entworfen und erstellt. Der Gedanke hinter der DNS Dokumentation ist, DNS-Einträge einfach in i-doit zu dokumentieren. Dabei werden über das Add-on die nötigen Objekttypen und Kategorien erstellt.

  
Installation und Lizenz

Das "DNS Dokumentation" Add-on wird wie jedes Add-on über das [Admin Center](/display/de/Admin+Center) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

**Inhaltsverzeichnis**

*   1[Inhalt des Add-ons](#DNSDocumentation-InhaltdesAdd-ons)
*   2[DNS Server](#DNSDocumentation-DNSServer)
*   3[DNS Zone](#DNSDocumentation-DNSZone)
    *   3.1[Autorisierende Namsserver](#DNSDocumentation-AutorisierendeNamsserver)
    *   3.2[DNS Records](#DNSDocumentation-DNSRecords)
    *   3.3[SOA Records](#DNSDocumentation-SOARecords)

Inhalt des Add-ons
------------------

Das "DNS-Dokumentation" Add-on bringt die folgenden Objekttypen, Kategorien und Dialog+ Einträge mit:

| Objekttyp | Kategorie | Dialog+ Feld | Dialog+ Einträge |
| --- | --- | --- | --- |
| DNS Server | DNS Zones | \-  | \-  |
| DNS Zone | Autorisierende Namesserver | Rolle | Primary |
|     |     |     | Secondary |
|     | DNS Records | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |
|     |     | Type | A   |
|     |     |     | AAAA |
|     |     |     | NS  |
|     |     |     | CNAME |
|     |     |     | MX  |
|     |     |     | PTR |
|     |     |     | TXT |
|     |     |     | SRV |
|     |     |     | SOA |
|     | SOA Record | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |

DNS Server
----------

Der ausgelieferte Objekttyp "DNS Server" orientiert sich an einem normalen Server Objekt, wobei noch die zusätzliche Kategorie "DNS Zones" zugewiesen ist.   
In dem Add-on wird ein expliziter Objekttyp genutzt, damit eine problemlose Integration gewährleistet werden kann. Die automatisch zugewiesene Kategorie "DNS Zones" beinhaltet eine Übersicht aller zugewiesener DNS Zonen. (Hierbei handelt es sich um eine rückwärtige Kategorie, weswegen die Informationen hier nicht bearbeitet werden können!)

![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2012.34.22.png?version=1&modificationDate=1604330048355&api=v2)

DNS Zone
--------

Im neuen Objekttypen "DNS Zone" werden alle Informationen zu den Zonen Einträgen dokumentiert.   
Hier stehen drei zusätzliche Kategorien zur Verfügung:

*   Autorisierende Namesserver → hier werden die zugehörigen Namesserver eingetragen und können zwischen "Primary" und "Secondary" unterschieden werden
*   DNS Records → hier können die "einzelnen Zeilen" einer Zonendatei eingetragen werden. Diese können über die mitgelieferten "Types" passend erstellt werden
*   SOA Record → hier kann der SOA-Record explizit dokumentiert werden.

### Autorisierende Namsserver

Bei der Kategorie "Autorisierende Namesserver" handelt es sich um eine Multi-Value Kategorie.   
![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2012.47.57.png?version=1&modificationDate=1604330048347&api=v2)

In einem Eintrag werden zwei Informationen dokumentiert:

1.  DNS Server Objekt
2.  Rolle

![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2012.50.33.png?version=1&modificationDate=1604330048339&api=v2)

Für das Attribut "DNS Server Objekt" steht ein Objektbrowser zur Verfügung. Hier kann dann der entsprechende DNS Server ausgewählt werden. Zusätzlich kann dann pro Sever auch die entsprechende "Rolle" angegeben werden. Zu Verfügung stehen hier → Primary und Secondary

### DNS Records

Auch bei der Kategorie "DNS Records" handelt es sich um eine Multi-Value Kategorie.  
![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2012.56.03.png?version=1&modificationDate=1604330048330&api=v2)

Die Kategorie wurde als Multi-Value Kategorie entworfen, damit eine DNS Datei "Zeile für Zeile" dokumentiert werden kann. Dies ermöglicht eine Übersicht aller Einträge. 

![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2015.57.53.png?version=1&modificationDate=1604330048322&api=v2)

Ein Eintrag setzt sich den Textfeldern "Name", "Time to live", "Data" und den Dialog+ Feldern "Class" und Type" zusammen. Für die Dialog+ Felder "Class" und "Type" werden vordefinierte Einträge mitgeliefert.

### SOA Records

Zusätzlich zu den einfachen DNS Records gibt es die Kategorie "SOA Records". Diese Kategorie ermöglicht es den sogenannten "Start of Authority" detaillierter zu dokumentieren. Da der SOA-Record einzigartig ist, steht die Kategorie auch nicht als Multi-Value Kategorie zur Verfügung.

![](/download/attachments/97288490/Bildschirmfoto%202020-11-02%20um%2016.12.29.png?version=1&modificationDate=1604330048310&api=v2)

Abgesehen vom Dialog+ Feld "Class" stehen alle Felder als Textfelder zur Verfügung. Hier können alle notwendigen Informationen des SOA-Records dokumentiert werden.