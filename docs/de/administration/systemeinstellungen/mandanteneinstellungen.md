In diesem Bereich finden Sie die Einstellungen für Mandanten, diese gelten nur für den Mandanten in dem Sie eingeloggt sind.

![](/download/attachments/61014148/mandentenseinstellungen.png?version=1&modificationDate=1644919831590&api=v2)

**Inhaltsverzeichnis**

*   2[Display Limits](#Mandanteneinstellungen-DisplayLimits)
*   3[Optionen für IP-Liste](#Mandanteneinstellungen-OptionenfürIP-Liste)
*   4[Unique checks (Auswertung lediglich während Import/Export Vorgängen!)](#Mandanteneinstellungen-Uniquechecks(AuswertunglediglichwährendImport/ExportVorgängen!))
*   5[Barcodes](#Mandanteneinstellungen-Barcodes)
*   6[Oberflächendarstellung](#Mandanteneinstellungen-Oberflächendarstellung)
*   7[Maximallänge von Zeichenfolgen](#Mandanteneinstellungen-MaximallängevonZeichenfolgen)
*   8[Logbuch](#Mandanteneinstellungen-Logbuch)
*   9[Sicherheit](#Mandanteneinstellungen-Sicherheit)
*   10[Logging](#Mandanteneinstellungen-Logging)
*   11[Quickinfo (Link mouseover)](#Mandanteneinstellungen-Quickinfo(Linkmouseover))
*   12[CMDB](#Mandanteneinstellungen-CMDB)

*   14[LDAP](#Mandanteneinstellungen-LDAP)
*   15[Report Manager](#Mandanteneinstellungen-ReportManager)
*   16[Suche](#Mandanteneinstellungen-Suche)
*   17[Import](#Mandanteneinstellungen-Import)
*   18[Sprache (ab 1.19)](#Mandanteneinstellungen-Sprache(ab1.19))
*   19[Maintenance (Add-on)](#Mandanteneinstellungen-(Add-on))
*   20[Workflows (Add-on)](#Mandanteneinstellungen-Workflows(Add-on))
*   21[Check MK 1 (Add-on)](#Mandanteneinstellungen-CheckMK1(Add-on))
*   22[Documents (Add-on)](#Mandanteneinstellungen-(Add-on).1)
*   23[Forms (Add-on)](#Mandanteneinstellungen-(Add-on).2)

URL Einstellungen

Geben Sie hier die Adresse Ihrer i-doit Installation ein, wenn sich diese vom Installationsverzeichnis unterscheidet.

![](/download/attachments/61014148/image2021-8-31_10-11-19.png?version=1&modificationDate=1630397478722&api=v2&effects=drop-shadow)
-----------------------------------------------------------------------------------------------------------------------------------

Display Limits
--------------

Hier können einige Anzeige Optionen für die GUI konfiguriert werden :

Anzeigelimit verknüpfter Objekte in Objektbrowser → Maximale Anzahl der verknüpften Objekte die im Objektbrowser angezeigt werden  
Anzeigeart verknüpfter Objekte in Objektbrowser → Sollen verknüpfte Objekte als Liste oder Kommmasepariert angezeigt werden  
Anzahl vorgeladener Seiten in Report listen→ Anzahl der Seiten die bei der Ausführung eines Reports generiert werden  
Anzeigelimit für Spalten in Multivalue Kategorien → Limitiert die dargestellten Werte auf die angegebene Länge  
Objekt-Browser Ergebnislimit→  Maximal Anzahl der Ergebnisse im Objekt Browser  
Anzeigelimit VLANs in Portlisten→ Maximal Anzahl an VLANs die in den Portlisten angezeigt werden  
Anzeigelimit Layer-2 Netze in Portlisten→ Maximale Anzahl von Layer-2 Netzen die in Portlisten angezeigt werden  
Nur Default VLAN in Portübersicht zeigen→ wenn nicht alle zugewiesenen VLANs angezeigt werden sollen, sondern nur das Default VLAN  
Anzeigelimit von Verbundenen Anschlüssen in Anschlusslisten→ Maximale Anzahl von verbundenen Anschlüssen die in Anschlusslisten angezeigt werden sollen  
Anzeigelimit von Hostadressen→ Maximale Anzahl von Hostadressen die angezeigt werden sollen  
Anzeigelimit von Services im CMDB Explorer Popup → Wie viele Services sollen im CMDB Explorer maximal angezeigt werden  
Limit der Tiefe des Standortpfades → Diese Einstellung erlaubt festzulegen, wie viele Schritte im Standort-Pfad angezeigt werden sollen. Wenn die Anzahl der Schritte im Pfad das Limit überschreitet, kürzt das System ab der Vorgabe die restlichen Schritte

![](/download/attachments/61014148/image2021-8-31_10-16-37.png?version=1&modificationDate=1630397796281&api=v2&effects=drop-shadow)

Optionen für IP-Liste
---------------------

Hier kannst du Optionen für die IP-Listen definieren:

Cache Zeitraum → Angabe in Sekunden, bis die Daten neu generiert werden  
Ping Funktion → Definition des Tools, welches für die Ping Option innerhalb der IP-Listen eingesetzt werden soll  
NMAP Parameter (für Ping) → Welche Ping Methode soll verwendet werden

![](/download/attachments/61014148/image2016-10-13%2011%3A37%3A29.png?version=1&modificationDate=1476352339594&api=v2&effects=drop-shadow)

Unique checks (Auswertung lediglich während Import/Export Vorgängen!)
---------------------------------------------------------------------

Unique checks sorgen dafür, das ein Wert wie z.B. eine IP-Adresse nur einmal innerhalb des jeweiligen Mandanten verwendet werden kann.  
Hier kannst du für Objekt-Titel, Layer-2-Netze, IP-Adressen und Hostnames festlegen ob diese nur einmalig verwendet werden dürfen.

![](/download/attachments/61014148/image2016-10-13%2011%3A37%3A55.png?version=1&modificationDate=1476352339578&api=v2&effects=drop-shadow)

Barcodes
--------

Hier kannst du die innerhalb der Objektansicht verfügbare Barcode Integration an oder ausschalten. Weiterhin kannst du auswählen ob du die herkömmliche Strich Code Variante wählen, oder lieber QR-Codes verwenden möchtest.

![](/download/attachments/61014148/image2016-10-13%2011%3A38%3A23.png?version=1&modificationDate=1476352339563&api=v2&effects=drop-shadow)

Oberflächendarstellung
----------------------

Hier kannst du definieren wie Lehrstellen innerhalb von Feldern, der Standortanzeige und der Separation von Anschlüssen angezeigt werden sollen.

Orientierung des Standortpfades → Diese Option gibt an, ob der Standort-Pfad rechts- oder linksbündig dargestellt wird. Eine Kürzung aus der oben genannten Einstellung findet dann somit auf der rechten oder linken Seite statt.

![](/download/attachments/61014148/image2021-8-31_10-28-19.png?version=1&modificationDate=1630398498354&api=v2&effects=drop-shadow)

Maximallänge von Zeichenfolgen
------------------------------

Hier wird die maximale Zeichenlänge für Dialog-Plus Feld Inhalte, Objekttitel im Standortpfad und die Komplette Länge eines Standortpfades festgelegt.

Objektbezeichnung im Standortpfad und Kompletter Standortpfad.  
Diese geben an, aus wie vielen Zeichen der gesamte Pfad bzw. die einzelnen Objekte im Pfad bestehen dürfen. Sind Objekttitel oder der gesamte Pfad länger, werden diese durch "..." gekürzt.

![](/download/attachments/61014148/image2016-10-13%2011%3A39%3A24.png?version=1&modificationDate=1476352339535&api=v2&effects=drop-shadow)

Logbuch
-------

Hier kannst du definieren ob Änderungen im Logbuch ausführlich ( mit Inhalt der Änderung) stattfinden sollen oder nur eine Übersicht (wurde geändert) erstellt wird.

  

![](/download/attachments/61014148/image2016-10-13%2011%3A39%3A55.png?version=1&modificationDate=1476352339520&api=v2&effects=drop-shadow)

Sicherheit
----------

Hier kannst du die minimale Länge für i-doit Passwörter festlegen die eingehalten werden muss.

![](/download/attachments/61014148/image2022-9-6_10-15-24.png?version=1&modificationDate=1662452129153&api=v2&effects=drop-shadow)

Logging
-------

Hier kannst du die Ablage von Systemfehlermeldungen im System Log an, bzw. ausschalten.

![](/download/attachments/61014148/image2021-8-31_10-30-14.png?version=1&modificationDate=1630398613583&api=v2&effects=drop-shadow)

Quickinfo (Link mouseover)
--------------------------

Hier kannst du die mouseover Funktion Quickinfo an, bzw. ausschalten.

![](/download/attachments/61014148/image2021-8-31_10-30-58.png?version=1&modificationDate=1630398657806&api=v2&effects=drop-shadow)

CMDB
----

![](/download/attachments/61014148/image2021-8-31_10-37-43.png?version=1&modificationDate=1630399061971&api=v2&effects=drop-shadow)
-----------------------------------------------------------------------------------------------------------------------------------

LDAP
----

Der JSON String für LDAP kann hier definiert werden.

![](/download/attachments/61014148/image2021-8-31_10-54-7.png?version=1&modificationDate=1630400046812&api=v2&effects=drop-shadow)

Report Manager
--------------

![](/download/attachments/61014148/image2021-8-31_10-54-55.png?version=1&modificationDate=1630400094538&api=v2)

Suche
-----

Wir unterstützen aktuell verschiedene [Suchmethoden,](/display/de/Suche) hier kann eine von ihnen als Standard definiert werden.

![](/download/attachments/61014148/image2021-8-31_10-55-34.png?version=1&modificationDate=1630400133633&api=v2&effects=drop-shadow)

Import
------

![](/download/attachments/61014148/image2021-8-31_10-56-53.png?version=1&modificationDate=1630400212131&api=v2&effects=drop-shadow)

Sprache (ab 1.19)
-----------------

![](/download/attachments/61014148/image2022-9-5_17-46-29.png?version=1&modificationDate=1662392789928&api=v2&effects=drop-shadow)

  

[Maintenance](/display/de/Maintenance) (Add-on)
-----------------------------------------------

Hier kann definiert werden ob bei einer e-mail Benachrichtigung eine mail an die mail Adresse der jeweiligen Gruppe , oder ob einzelne mails an die jeweiligen Mitglieder der Gruppe geschickt werden sollen.

![](/download/attachments/61014148/image2016-10-13%2011%3A43%3A36.png?version=1&modificationDate=1476352339408&api=v2&effects=drop-shadow)

[Events](/display/de/Events) (Add-on)

![](/download/attachments/61014148/image2016-10-13%2011%3A44%3A0.png?version=1&modificationDate=1476352339385&api=v2&effects=drop-shadow)

[Workflows](/display/de/Workflow) (Add-on)
------------------------------------------

![](/download/attachments/61014148/image2021-8-31_10-58-28.png?version=1&modificationDate=1630400307825&api=v2&effects=drop-shadow)

[Check MK 1](/display/de/Checkmk) (Add-on)
------------------------------------------

![](/download/attachments/61014148/image2021-8-31_10-58-49.png?version=1&modificationDate=1630400328626&api=v2&effects=drop-shadow)

[Documents](/display/de/Documents) (Add-on)
-------------------------------------------

![](/download/attachments/61014148/image2021-8-31_10-59-37.png?version=1&modificationDate=1630400376308&api=v2&effects=drop-shadow)

[Forms](/display/de/Forms) (Add-on)
-----------------------------------

![](/download/attachments/61014148/mandanteinstell.png?version=1&modificationDate=1644920068529&api=v2)