Dieser Artikel wurde zuletzt für i-doit Version 1.16.2 geprüft

In diesem Beispiel bauen wir auf den[CSV Import von Anwendungen](https://kb.i-doit.com/pages/viewpage.action?pageId=61014686)auf und wollen Lizenzen importieren.

  

  

Für den Import benötigen wir folgende Informationen:

*   Objekttyp → Um welchen Objekttypen soll es sich Handeln
*   Objektname → den Namen des Clients
*   Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ → Welcher Lizenz Typ wird importiert, Einzel- oder Volumen?
    
*   Lizenzzuweisung: Lizenzschlüssel - Anzahl → Welche Anzahl an Lizenzen gibt es?
    
*   Lizenzzuweisung: Lizenzschlüssel - Schlüssel→ Wie lautet der Lizenzschlüssel?
    
*   Lizenzzuweisung: Lizenzschlüssel - Seriennummer → Welche Seriennummer soll zugeordnet werden?
    
*   Lizenzzuweisung: Lizenzschlüssel - Startdatum → Ab wann kann die Lizenz verwendet werden?
    
*   Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum → Wann läuft die Lizenz ab?
    
*   Lizenzzuweisung: Lizenzschlüssel - Einzelpreis → Was kostet eine Lizenz?  
      
    

Bei jedem Import muss auch die Darstellung der Daten beachtet werden.

  

  

  

Zum Beispiel:

 ![](/download/attachments/97289070/darstellung.png?version=1&modificationDate=1620656433617&api=v2&effects=drop-shadow)

Es werden Dialog Bezeichnungen in deutscher Sprache erwartet zum Beispiel: Einzel-Lizenz  
Hier wird das Datumsformat DD.MM.YYYY (01.01.2021) erwartet  
Und das Numerische Format: X.XXX,XX (9.999,99) da wir allerdings Multi-Values Kommasepariert angeben verwenden wir den Punkt für die "nachkommastellen" also 1000.99

  

Beispiel CSV Datei für diesen Import:

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-file.png)Import Lizenzen.csv](/download/attachments/97289070/Import%20Lizenzen.csv?version=1&modificationDate=1620656433608&api=v2)

**Import Lizenzen.csv** Quelle erweitern

[expand source](#)[?](#)

`Objekttyp;ObjektName;Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ;Lizenzzuweisung: Lizenzschlüssel - Anzahl;Lizenzzuweisung: Lizenzschlüssel - Schlüssel;Lizenzzuweisung: Lizenzschlüssel - Seriennummer;Lizenzzuweisung: Lizenzschlüssel - Startdatum;Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum;Lizenzzuweisung: Lizenzschlüssel - Einzelpreis`

`C__OBJTYPE__LICENCE;Lizenz-X;Volumen-Lizenz;1000;Lizenz-X-111-LASKDZHW;123456789;01.01.2021;31.12.2021;999.99`

`C__OBJTYPE__LICENCE;Lizenz-Y;Einzel-Lizenz;1;Lizenz-Y-211-OIHUASFD;1123456789;01.06.2021;31.12.2021;1399.99`

`C__OBJTYPE__LICENCE;Lizenz-Z;Volumen-Lizenz,Volumen-Lizenz;100,50;Lizenz-Z-311-IGUHOPSD,Lizenz-Z-322-IUHGASD;11123456789,11223456789;01.01.2021,01.05.2021;31.12.2021,30.04.2021;1000.99,500.99`

Bei diesem Import werden keine Abhängigkeiten vorausgesetzt.

Für den Import begeben wir uns wieder in den CSV Import Bereich. Die Multivalue-Kategorien setzen wir auf Kommasepariert.

![](/download/attachments/97289070/optionen.png?version=1&modificationDate=1620656433586&api=v2&effects=drop-shadow)

Jetzt können wir im unteren Bereich die Import Konfiguration wie folgt vornehmen und danach den Import Vorgang starten:

![](/download/attachments/97289070/zuweisung.png?version=1&modificationDate=1620656433571&api=v2&effects=drop-shadow)

Solltest du alles richtig gemacht haben, erscheinen nun die einzelnen Lizenzen in der Listenansicht.

![](/download/attachments/97289070/listenansicht.png?version=1&modificationDate=1620656433539&api=v2&effects=drop-shadow)

Außerdem sind die Kategorien`Lizenzzuweisung`und `Lizenzzuweisung: Lizenzschlüssel` gefüllt.

![](/download/attachments/97289070/lizenz-Z-lizenzzuweisung.png?version=1&modificationDate=1620656433549&api=v2)

![](/download/attachments/97289070/lizenz-Z-schluessel.png?version=1&modificationDate=1620656433557&api=v2)