---
title: SNMP
description: "Mit der SNMP-Kategorie liest du in Echtzeit SNMP-Werte aus Objekten aus und stellst sie in i-doit dar."
icon:
status:
lang: de
---
# SNMP

Mit der SNMP-Kategorie liest du in Echtzeit SNMP-Werte aus Objekten aus und stellst sie in i-doit dar. Dieser Artikel zeigt die Einrichtung am Beispiel eines Switches.

!!! info ""
    Dieser Artikel wurde zuletzt für i-doit Version 1.18.2 geprüft

## Voraussetzungen

1. Installiere das SNMP-Modul für PHP. Unter Debian:

        sudo apt-get install php-snmp

2. Weise die SNMP-Kategorie über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) dem gewünschten Objekttyp zu (in diesem Beispiel: Router).

3. Stelle sicher, dass eine gueltige Hostadresse in der entsprechenden Kategorie dokumentiert ist.

[![snmp-hostadresse](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)

Teste zuerst die SNMP-Verbindung per SSH auf dem Server. Installiere dazu das Paket `snmp` für den Befehl `snmpwalk` und prüfe die Erreichbarkeit:

```shell
snmpwalk -v 2c -c public 192.168.10.1 1.3.6.1.2.1.2.2.1.1
```

!!! info
    Die Details zum Thema SNMP und diesem Aufruf lassen wir an dieser Stelle weg. Informationen über die OID .1.3.6.1.2.1.2.2.1.1 gibt es beispielsweise hier: [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)

Ein erfolgreiches Ergebnis sieht beispielsweise so aus:

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

Die Abfrage zeigt 11 Ports. Falls Timeouts oder andere Fehler auftreten, prüfe:

*   Netzwerk-Konnektivitaet zum Gerät
*   SNMP in den Firewall-Regeln
*   Ob der SNMP-Server läuft und der i-doit-Server Zugriff hat
*   Ob die gewählte SNMP-Community (hier: `public`) korrekt ist

Wechsle nun in i-doit zur SNMP-Kategorie. Dort zeigt i-doit automatisch die primaere IP-Adresse und die Standard-Community `public` an.

Für ein praxisnahes Beispiel verwende die OID `1.3.6.1.2.1.2.2.1.1.14.x` (fehlerhafte Pakete je Interface, wobei `x` der Interface-Index ist). Baue damit eine Liste:

[![snmp-liste](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)

Speichere die Kategorie. Beim nächsten Aufruf liest i-doit die SNMP-Werte in Echtzeit aus und zeigt sie an.

Die folgende Tabelle listet nuetzliche OIDs für den Einstieg:

| OID URL                                                                                      | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [http://oid-info.com/get/1.3.6.1.2.1.1.1](http://oid-info.com/get/1.3.6.1.2.1.1.1)           | "A textual description of the entity. This value should include the full name and version identification of the system's hardware type, software operating-system, and networking software."                                                                                                                                                                                                                                                                                                                                               |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2)   | "A textual string containing information about the interface. This string should include the name of the manufacturer, the product name and the version of the interface hardware/software."                                                                                                                                                                                                                                                                                                                                               |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14) | "For packet-oriented interfaces, the number of inbound packets that contained errors preventing them from being deliverable to a higher-layer protocol. For character- oriented or fixed-length interfaces, the number of inbound transmission units that contained errors preventing them  <br>from being deliverable to a higher-layer protocol.  <br>Discontinuities in the value of this counter can occur at re-initialization of the management system, and at other times as indicated by the value of ifCounterDiscontinuityTime." |
| [http://oid-info.com/get/1.3.6.1.2.1.1.4](http://oid-info.com/get/1.3.6.1.2.1.1.4)           | "The textual identification of the contact person for  <br>this managed node, together with information on how to contact this person. If no contact information is known, the value is the zero-length string."                                                                                                                                                                                                                                                                                                                           |
| [http://oid-info.com/get/1.3.6.1.2.1.1.3](http://oid-info.com/get/1.3.6.1.2.1.1.3)           | "The time (in hundredths of a second) since the  <br>network management portion of the system was last re-initialized."                                                                                                                                                                                                                                                                                                                                                                                                                    |

[![snmp-werte](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)
