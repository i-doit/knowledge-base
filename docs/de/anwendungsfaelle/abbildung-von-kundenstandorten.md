**Inhaltsverzeichnis**

*   1[Aufgabenstellung](#AbbildungvonKundenstandorten-Aufgabenstellung)
*   2[Konfiguration](#AbbildungvonKundenstandorten-Konfiguration)
*   3[Anwendung](#AbbildungvonKundenstandorten-Anwendung)

Kunden haben oftmals mehrere Standorte, diese sollen hierarchisch dargestellt und jeweils IT-Komponenten zugeordnet werden.

Aufgabenstellung
----------------

Wir statten unsere Kunden mit Hard- und Software-Komponenten aus. Daher ist es essentiell, sowohl unsere Kunden als auch die dort verwendeten IT-Komponenten zu dokumentieren. Um eine einfache Übersicht zu generieren, möchten wir die Standortsicht von i-doit nutzen.

![](/download/attachments/9666606/standortsicht.png?version=1&modificationDate=1437480342314&api=v2&effects=drop-shadow)

![](/download/attachments/9666606/schulzesx01.png?version=1&modificationDate=1437480342142&api=v2&effects=drop-shadow)

Konfiguration
-------------

Alles, was zur Konfiguration benötigt wird, befindet sich in der **`Objekttyp-Konfiguration`**, zu erreichen über **`Verwaltung → CMDB-Einstellungen`**. Kunden legen wir als eigenständigen Objekttyp **`Kunde`** ab. Der Objekttyp wird als **`Standort`** definiert. Zudem sollten mindestens die Kategorien **`Standort`** und **`Räumlich zugeordnete Objekte`** zugeordnet werden. Ggf. sind weitere Kategorien (**`Organisation`**, **`Anschrift`**, **`E-Mail-Adressen`**, **`Kontaktzuweisung`**, **`Zugriff`**) hilfreich, um die Kunden so detailliert wie nötig zu dokumentieren.

![](/download/attachments/9666606/objekttypkonfiguration.png?version=1&modificationDate=1437480342285&api=v2&effects=drop-shadow)![](/download/attachments/9666606/kontakte.png?version=1&modificationDate=1437480342302&api=v2&effects=drop-shadow)

Anwendung
---------

Beim Anlegen eines neuen Kunden sollte dieser der [Root-Lokation](/display/de/Glossar#Glossar-Root-Lokation) zu geordnet werden. Auch verschachtelte Konstrukte mit Sub-Kunden ist möglich. Hierfür werden Sub-Kunden anderen Kunden räumlich zugeordnet. Unterhalb der Kunden können nun beliebig viele Objekte zugeordnet werden. Dies geschieht über die Kategorie "Räumlich zugeordnete Objekte" oder alternativ über die Kategorie "Standort" innerhalb der Objekte, die zugeordnet werden sollen.