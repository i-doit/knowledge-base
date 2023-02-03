**Inhaltsverzeichnis**

*   1[Don't Repeat Yourself (DRY)](#TippsundTrickszurAPI-Don'tRepeatYourself(DRY))
*   2[Keep It Simple, Stupid (KISS)](#TippsundTrickszurAPI-KeepItSimple,Stupid(KISS))
*   3[Benutze die API anstatt SQL](#TippsundTrickszurAPI-BenutzedieAPIanstattSQL)
*   4[Benutze die API anstatt CSV-Datenimport](#TippsundTrickszurAPI-BenutzedieAPIanstattCSV-Datenimport)
*   5[Benutze die API anstatt CSV-Datenexport](#TippsundTrickszurAPI-BenutzedieAPIanstattCSV-Datenexport)
*   6[Benutze die API für das Sammeln von Daten](#TippsundTrickszurAPI-BenutzedieAPIfürdasSammelnvonDaten)
*   7[Benutze die Zwei-Faktor-Authentifizierung](#TippsundTrickszurAPI-BenutzedieZwei-Faktor-Authentifizierung)
*   8[Logge alle API Calls](#TippsundTrickszurAPI-LoggealleAPICalls)
*   9[Teste nicht im Produktivsystem](#TippsundTrickszurAPI-TestenichtimProduktivsystem)
*   10[Sichere die Kommunikation ab](#TippsundTrickszurAPI-SicheredieKommunikationab)
*   11[Sichere das Script ab](#TippsundTrickszurAPI-SicheredasScriptab)
*   12[Melde dich an und wieder ab](#TippsundTrickszurAPI-Meldedichanundwiederab)
*   13[Benutze Batch Requests](#TippsundTrickszurAPI-BenutzeBatchRequests)
*   14[Automatisiere den Datenaustausch](#TippsundTrickszurAPI-AutomatisieredenDatenaustausch)
*   15[Kombiniere API und Events](#TippsundTrickszurAPI-KombiniereAPIundEvents)
*   16[Veröffentliche dein Script](#TippsundTrickszurAPI-VeröffentlichedeinScript)
*   17[Read the Fine Manual (RTFM)](#TippsundTrickszurAPI-ReadtheFineManual(RTFM))

An dieser Stelle tragen wir viele Tipps und Tricks zum effizienten Umgang mit der [Programmierschnittstelle (API)](/pages/viewpage.action?pageId=7831613) von i-doit zusammen.

Don't Repeat Yourself (DRY)
---------------------------

Das Rad muss nicht immer neu erfunden werden. Zum Ansteuern der API gibt es mittlerweile einige Libraries und Clients, die genutzt werden können. Wer hier nicht für die geliebte Programmiersprache fündig werden sollte, darf das natürlich ändern.

Keep It Simple, Stupid (KISS)
-----------------------------

Ein weithin bekanntes Paradigma aus der Software-Entwicklung. Jedes Script zum Ansteuern der API sollte nur eine Aufgabe erledigen. 1 Tool, 1 Job – diese aus der Unix-Welt entlehnte Philosophie gilt auch für das IT Service Management (ITSM). Die Komplexität sollte soweit es geht reduziert werden. Andernfalls erschwert das die Wartung des Scripts.

Benutze die API anstatt SQL
---------------------------

i-doit speichert fast alle Daten in einem Datenbankmanagementsystem (MariaDB oder MySQL). Da ist es für den SQL-Kenner verlockend, auf diese Daten direkt zuzugreifen. Doch Vorsicht: Wer die Mechanismen in i-doit explizit umgeht und die Daten via SQL verändert, kann sich schnell eine korrupte Installation einhandeln. Hierfür gilt keine Gewährleistung seitens des Herstellers. Besser ist es, die API zu nutzen. Denn nur hierüber lässt sich gewährleisten, dass beispielsweise [Objekt-Beziehungen](/display/de/Objekt-Beziehungen) oder [Logbuch-Einträge](/display/de/Logbuch) korrekt angelegt werden.

Benutze die API anstatt CSV-Datenimport
---------------------------------------

Wer seine damals provisorischen, aber dann doch über Jahre gepflegten Excel-Tabellen durch eine strukturierte IT-Dokumentation ablösen möchte, kann in vielen Fällen den CSV-Datenimport nutzen. Doch dieser erreicht Grenzen, wenn in den Tabellen nicht nur nackte Daten, sondern ausgeklügelte Konstrukte verborgen sind. Spätestens bei Abhängigkeiten zwischen Spalten sowie Zellen, die mehr als eine Information speichern, ist es ratsam, einen eigenen Import zu implementieren. Der schnellte Weg mag hier die API darstellen.

Benutze die API anstatt CSV-Datenexport
---------------------------------------

Umgekehrt kann die API flexibler verwendet werden, wenn es um den Datenexport geht. Die API stellt also auch eine Alternative zum [Report Manager](/display/de/Report+Manager) und den [CSV-Datenexport](/display/de/CSV-Datenexport) dar.

Benutze die API für das Sammeln von Daten
-----------------------------------------

Keine Frage: Das automatisierte Sammeln von Informationen durch ein Network Discovery erleichtert die Pflege der IT-Dokumentation ungemein. i-doit bietet hier bereits Schnittstellen zu [JDisc Discovery](/display/de/JDisc+Discovery), [OCS Inventory NG](/display/de/OCS+Inventory+NG) und weitere. Sollte eine Schnittstelle fehlen, hilft die API weiter.

Benutze die Zwei-Faktor-Authentifizierung
-----------------------------------------

Neben dem API Key bietet die zusätzliche Authentifizierung mit einem Benutzer-Account mehrere Vorteile: Die so erreichte Zwei-Faktor-Authentifizierung erhöht zum einen die Sicherheit. Zum anderen erleichtert sie die Nachvollziehbarkeit, wenn jedes Script einen eigenen Benutzer-Account verwendet. Auf diese Weise lässt sich anhand des [Logbuchs](/display/de/Logbuch) recherchieren, welches Script welche Daten in der IT-Dokumentation verändert hat.

Logge alle API Calls
--------------------

Nützlich fürs [Troubleshooting](/display/de/Troubleshooting): Alle API Calls lassen sich von i-doit loggen. Requests und Responses werden in handlichen Textdateien unter `log/` im Installationsverzeichnis gespeichert.

Teste nicht im Produktivsystem
------------------------------

Um die produktiven Daten nicht durch ein fehlerhaftes Script zu gefährden, bietet sich eine zweite Installation zum Testen an. Das obligatorische [Backup](/display/de/Daten+sichern+und+wiederherstellen) darf natürlich nicht fehlen.

Sichere die Kommunikation ab
----------------------------

Die IT-Dokumentation enthält in vielen Fällen sensible Informationen, die nicht in falsche Hände geraten dürfen. Damit API Keys, Zugangsdaten und Nutzdaten nicht im Klartext über das Netzwerk ausgetauscht werden, bietet sich die verschlüsselte Kommunikation via TLS (HTTPS) mit einem Zertifikat an. Nur so kann sicher gestellt werden, dass Daten integer sind und nicht missbraucht werden können. Eine mögliche Konfiguration und viele weitere Tipps enthält der Artikel "[Sicherheit und Schutz](/display/de/Sicherheit+und+Schutz)".

Sichere das Script ab
---------------------

Die API umgeht derzeit die in der Web GUI verwendete [Rechteverwaltung](/display/de/Rechteverwaltung). Umso wichtiger ist es, dass der Zugang zur API und die Kommunikation zur API gesichert werden (siehe oben). Ebenfalls essentiell ist es, das Script gegen unberechtigten Zugriff zu schützen.

Melde dich an und wieder ab
---------------------------

Führt das Script gleich mehrere API Calls aus, ist der explizite Login zu empfehlen. Mit der Methode `**idoit.login**` wird eine neue Session erstellt, die für alle weiteren API Calls wiederverwendet werden kann. Zum Schluss schließt man die Session mit der Methode **`idoit.logout`**. So spart man zahlreiche Sessions, die von PHP erst nach und nach gelöscht werden, teilweise erst nach Wochen.

Benutze Batch Requests
----------------------

Die API verfügt über sogenannte Batch Requests: Mit einem API Call lassen sich gleich mehrere Requests senden. Das steigert die Performance, weil Netzwerkverbindungen und weiterer Overhead auf ein Minimum reduziert wird.

Doch Vorsicht: Wer zu viele Requests zu einem Batch Request zusammenfasst, kann eine schwachbrüstige Installation von i-doit in die Knie zwingen. Das Resultat ist ein Abbruch mit einem HTTP Status 500. Hier hilft es, den PHP-Prozessen mehr Arbeitsspeicher zu geben.

Automatisiere den Datenaustausch
--------------------------------

Läuft das Script erst einmal, dass die API von i-doit ansteuert, kann man dieses bestimmt auch automatisiert ausführen. Ein Cronjob ist schnell eingerichtet und erleichtert die Datenpflege.

Kombiniere API und Events
-------------------------

Eine gute Ergänzung zur API stellen die [Events](/display/de/Events) in i-doit dar. Wird über i-doit ein Objekt erstellt oder ein Kategorie-Eintrag verändert, kann ein beliebiges Script ausgeführt werden. Diesem werden die wichtigsten Daten des Events übermittelt (Welches Objekt wurde erstellt? Welche Attribute wurden aktualisiert?). Das ausgeführte Script kann nun die API ansteuern, um weitere Daten abzufragen oder zu manipulieren.

Ein konkretes Beispiel, das sowohl API, als auch Events verwendet, ist die [Provisionierung von virtuellen Maschinen](/pages/viewpage.action?pageId=38371351).

Veröffentliche dein Script
--------------------------

Das Problem, das durch ein Script zum Ansteuern der API gelöst wird, kann nicht nur einem selbst, sondern eventuell auch anderen Nutzern von i-doit weiterhelfen. Wer der Community etwas zurück geben möchte, kann das eigene Script unter einer Open-Source- oder freien Lizenz auf GitHub & Co. veröffentlichen. Wir würden uns über eine kurze Nachricht sehr freuen!

Read the Fine Manual (RTFM)
---------------------------

Alle API-Methoden und viele Beispiele liefert die Knowledge Base. Wer hier nicht fündig wird, ist vielleicht auf eine Lücke gestoßen. Auch hier freuen wir uns über kurzes Feedback.