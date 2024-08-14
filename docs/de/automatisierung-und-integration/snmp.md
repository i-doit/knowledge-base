# SNMP

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

Die SNMP-Kategorie erlaubt es, in Echtzeit SNMP Werte aus Objekten auszulesen und darzustellen. Anhand der beispielhaften Abfrage eines Switches gehen wir in diesem Artikel die Voraussetzungen und die Umsetzung durch.

!!! info ""
    Dieser Artikel wurde zuletzt für i-doit Version 1.18.2 geprüft

## Voraussetzungen

Um diese Kategorie nutzen zu können benötigt _i-doit_ das SNMP Modul von PHP. Unter Debian lässt sich dies installieren mit dem Befehl:

    sudo apt-get install php-snmp

Die SNMP Kategorie muss anschließend über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) dem gewünschten Objekttyp zugewiesen werden. In unserem Beispiel haben wir uns auf den Objekttyp Router reduziert.

Wir benötigen weiterhin eine gültige Hostadresse, die selbstverständlich in der entsprechenden Kategorie dokumentiert sein muss.

[![snmp-hostadresse](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)

Um unnötige Fehlersuche zu vermeiden begeben wir uns erst einmal per SSH auf die Konsole des Servers und testen die SNMP Verbindung "per Hand". Dazu installieren wir das Paket "snmp" um den Befehl "snmpwalk" zur Verfügung zu bekommen. Anschließend rufen wir einen standard Aufruf an den Switch auf, der uns die Liste aller Interfaces geben soll.

```shell
snmpwalk -v 2c -c public 192.168.10.1 1.3.6.1.2.1.2.2.1.1
```

!!! info
    Die Details zum Thema SNMP und diesem Aufruf lassen wir an dieser Stelle weg. Informationen über die OID .1.3.6.1.2.1.2.2.1.1 gibt es beispielsweise hier: [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)

Das Ergebnis in unserem Falle sieht folgendermaßen aus:

    iso.3.6.1.2.1.2.2.1.1.1 = INTEGER: 1
    iso.3.6.1.2.1.2.2.1.1.2 = INTEGER: 2
    iso.3.6.1.2.1.2.2.1.1.3 = INTEGER: 3
    iso.3.6.1.2.1.2.2.1.1.4 = INTEGER: 4
    iso.3.6.1.2.1.2.2.1.1.5 = INTEGER: 5
    iso.3.6.1.2.1.2.2.1.1.6 = INTEGER: 6
    iso.3.6.1.2.1.2.2.1.1.7 = INTEGER: 7
    iso.3.6.1.2.1.2.2.1.1.8 = INTEGER: 8
    iso.3.6.1.2.1.2.2.1.1.9 = INTEGER: 9
    iso.3.6.1.2.1.2.2.1.1.10 = INTEGER: 10
    iso.3.6.1.2.1.2.2.1.1.11 = INTEGER: 11

Die Abfrage war also erfolgreich, wir habe es mit einem 11 Port Router zu tun. Sollten an dieser Stelle Timeouts o.Ä. Fehler auftreten, sollte die Netzwerk Konnektivität geprüft werden, ob SNMP in den Firewall Regeln erlaubt ist, ob der SNMP Server läuft und ob der i-doit Server Zugriffsberechtigung auf den SNMP Server hat. Selbstverständlich muss auch die gewählte SNMP Community (in unserem Beispiel public) verfügbar sein.

Nun wechseln wir wieder in _i-doit_ in die SNMP Kategorie. Dort bekommen wir automatisch die primäre IP-Adresse des Switches angezeigt und die Standard-SNMP-Community public angeboten.

Da uns allerdings die Interface Indizes nicht interessieren, beschäftigen wir uns mit einer anderen OID und zwar der für die Liste der fehlerhaften Pakete je Interface. Diese hat die OID 1.3.6.1.2.1.2.2.1.1.14.x, wobei x für den Index des jeweiligen Interfaces steht.

Mit dieser OID und weiteren bauen wir uns eine Liste:

[![snmp-liste](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)

und speichern die Kategorie ab.

Wenn wir nun erneut auf die Kategorie klicken werden in Echtzeit die SNMP Werte ausgelesen und angezeigt. Glücklicherweise haben wir bei diesem Test festgestellt, dass wir keine Fehler bei den Paketen haben.
Damit beschließen wir das praktische Beispiel und suchen nun nach der Ursache für die Paket Fehler.

| OID URL                                                                                      | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [http://oid-info.com/get/1.3.6.1.2.1.1.1](http://oid-info.com/get/1.3.6.1.2.1.1.1)           | "A textual description of the entity. This value should include the full name and version identification of the system's hardware type, software operating-system, and networking software."                                                                                                                                                                                                                                                                                                                                               |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2)   | "A textual string containing information about the interface. This string should include the name of the manufacturer, the product name and the version of the interface hardware/software."                                                                                                                                                                                                                                                                                                                                               |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14) | "For packet-oriented interfaces, the number of inbound packets that contained errors preventing them from being deliverable to a higher-layer protocol. For character- oriented or fixed-length interfaces, the number of inbound transmission units that contained errors preventing them  <br>from being deliverable to a higher-layer protocol.  <br>Discontinuities in the value of this counter can occur at re-initialization of the management system, and at other times as indicated by the value of ifCounterDiscontinuityTime." |
| [http://oid-info.com/get/1.3.6.1.2.1.1.4](http://oid-info.com/get/1.3.6.1.2.1.1.4)           | "The textual identification of the contact person for  <br>this managed node, together with information on how to contact this person. If no contact information is known, the value is the zero-length string."                                                                                                                                                                                                                                                                                                                           |
| [http://oid-info.com/get/1.3.6.1.2.1.1.3](http://oid-info.com/get/1.3.6.1.2.1.1.3)           | "The time (in hundredths of a second) since the  <br>network management portion of the system was last re-initialized."                                                                                                                                                                                                                                                                                                                                                                                                                    |

[![snmp-werte](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)
