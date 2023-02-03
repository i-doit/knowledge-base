**Inhaltsverzeichnis**

*   1[Rechte](#CMDB(Rechteverwaltung)-Rechte)
*   2[Automatisches Recht auf selbst erstellte Objekte](#CMDB(Rechteverwaltung)-AutomatischesRechtaufselbsterstellteObjekte)
*   3[Erweiterte Einstellungen](#CMDB(Rechteverwaltung)-ErweiterteEinstellungen)
*   4[Kategorie Rechteverwaltung](#CMDB(Rechteverwaltung)-KategorieRechteverwaltung)

Innerhalb der [IT-Dokumentation](/display/de/Glossar) in i-doit können zahlreiche [Rechte](/display/de/Rechteverwaltung) vergeben werden, um sehr feingranular zu bestimmen, wer was sehen und bearbeiten darf. Hierzu ist es nützlich, die [Struktur der IT-Dokumentation](/display/de/Struktur+der+IT-Dokumentation) zu kennen.

Rechte
------

Die Konfiguration ist unter `**Verwaltung → Rechtesystem → Rechtevergabe → CMDB**` zu erreichen.

  

| ![](/download/attachments/42303548/page_add.png?version=1&modificationDate=1465822302907&api=v2)Erstellen | ![](/download/attachments/42303548/page_magnify.png?version=1&modificationDate=1465822303157&api=v2) Ansehen1 | ![](/download/attachments/42303548/page_edit.png?version=1&modificationDate=1465822303404&api=v2) Bearbeiten | ![](/download/attachments/42303548/page_red.png?version=1&modificationDate=1465822303724&api=v2) Archivieren | ![](/download/attachments/42303548/page_delete.png?version=1&modificationDate=1465822303933&api=v2) Löschen | ![](/download/attachments/42303548/page_go.png?version=1&modificationDate=1465822304099&api=v2) Ausführen | ![](/download/attachments/42303548/user_gray.png?version=1&modificationDate=1465822304279&api=v2) Administrator | Bedingung2 | Parameter |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| ![](/download/attachments/42303548/page_add.png?version=1&modificationDate=1465822302907&api=v2)Erstellen | ![](/download/attachments/42303548/page_magnify.png?version=1&modificationDate=1465822303157&api=v2) Ansehen1 | ![](/download/attachments/42303548/page_edit.png?version=1&modificationDate=1465822303404&api=v2) Bearbeiten | ![](/download/attachments/42303548/page_red.png?version=1&modificationDate=1465822303724&api=v2) Archivieren | ![](/download/attachments/42303548/page_delete.png?version=1&modificationDate=1465822303933&api=v2) Löschen | ![](/download/attachments/42303548/page_go.png?version=1&modificationDate=1465822304099&api=v2) Ausführen | ![](/download/attachments/42303548/user_gray.png?version=1&modificationDate=1465822304279&api=v2) Administrator | Bedingung2 | Parameter |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| –   | Objekt in Objekt-Liste darstellen;<br><br>Quick Info bei Mouseover aufrufen | Objekt in der Erweiterung Gerätetausch austauschen;<br><br>`**Person**` zu `**Personengruppe**` hinzufügen4 | Objekt [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Objekt [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | –   | Objekt [unwiderruflich löschen](/display/de/Lebens-+und+Dokumentationszyklus) (`**purge**`) | `**Objekt-ID**` | Ein, mehrere oder alle Objekte auswählen |
| Neues Objekt eines Typs in Objekt-Liste erstellen | Objekt in Objekt-Liste darstellen;<br><br>Quick Info bei Mouseover aufrufen | Neues [Objekt eines Typs](/display/de/Struktur+der+IT-Dokumentation) erstellen | Objekt eines Typs [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Objekt eines Typs[als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | –   | Objekt eines Typs unwiderruflich löschen (`**purge**`) | `**Objekt(e) vom Typ**` | Einen, mehrere oder alle Objekttypen auswählen |
| –   | Objekttyp-Konfiguration darstellen | Bestehenden Objekttyp bearbeiten oder neuen erstellen | –   | Objekttyp unwiderruflich löschen (`**purge**`) | –   | Ohne Funktion | `**Objekttyp Konfiguration**` | Einen, mehrere oder alle Objekttypen auswählen |
| –   | Objekt unterhalb der Lokation in Objekt-Liste darstellen;<br><br>Quick Info bei Mouseover aufrufen | Neues Objekt unterhalb der Lokation erstellen | –   | –   | –   | –   | `**Objekte unterhalb eines Standorts**` | Standort wählen |
| –   | Objekt unterhalb des logischen Standorts in Objekt-Liste darstellen;<br><br>Quick Info bei Mouseover aufrufen | Neues Objekt unterhalb des logischen Standorts erstellen | Objekt unterhalb des logischen Standorts [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Objekt unterhalb des logischen Standorts [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | –   | Objekt unterhalb des logischen Standorts unwiderruflich löschen (`**purge**`) | `**Objekte unterhalb eines logischen Standorts**` | Logischen Standort wählen |
| –   | Attribute einer Kategorie betrachten | Bestehenden Kategorie-Eintrag bearbeiten oder neuen erstellen | Kategorie-Eintrag [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Kategorie-Eintrag [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | Ping und NSLOOKUP in Kategorie `**Netz**` verwenden | Kategorie-Eintrag unwiderruflich löschen (`**purge**`) | `**Kategorie**` | Eine, mehrere oder alle Kategorien auswählen |
| Neuen Eintrag in einer Listen-Kategorie (Multi-Value) eines bestimmten Objekttyps erstellen | Attribute einer Kategorie eines bestimmten Objekttyps darstellen | Bestehenden Kategorie-Eintrag eines bestimmten Objekttyps bearbeiten oder neuen erstellen | Kategorie-Eintrag eines bestimmten Objekttyps [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Kategorie-Eintrag eines bestimmten Objekttyps [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | Ping und NSLOOKUP in Kategorie `**Netz**` verwenden | Kategorie-Eintrag eines bestimmten Objekttyps unwiderruflich löschen (`**purge**`) | `**Kategorie in Objekttyp**` | Eine, mehrere oder alle Kategorien eines bestimmten Objekttyps auswählen |
| Neuen Eintrag in einer Listen-Kategorie (Multi-Value) eines bestimmten Objekts erstellen | Attribute einer Kategorie eines bestimmten Objekts darstellen | Bestehenden Kategorie-Eintrag eines bestimmten Objekts bearbeiten oder neuen erstellen | Kategorie-Eintrag eines bestimmten Objekts [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Kategorie-Eintrag eines bestimmten Objekts [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | Ping und NSLOOKUP in Kategorie `**Netz**` verwenden | Kategorie-Eintrag eines bestimmten Objekts unwiderruflich löschen (`**purge**`);<br><br>`**Person**` zu `**Personengruppe**` hinzufügen4 | `**Kategorie in Objekt**` | Eine, mehrere oder alle Kategorien eines bestimmten Objekts auswählen |
| Neuen Eintrag in einer Listen-Kategorie (Multi-Value) eines Objekts unterhalb einer bestimmten Lokation erstellen | Attribute einer Kategorie unterhalb einer Lokation darstellen | Bestehenden Kategorie-Eintrag unterhalb einer Lokation bearbeiten oder neuen erstellen | Kategorie-Eintrag unterhalb einer Lokation [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Kategorie-Eintrag unterhalb einer Lokation [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | Ping und NSLOOKUP in Kategorie `**Netz**` verwenden | Kategorie-Eintrag unterhalb einer Lokation unwiderruflich löschen (`**purge**`) | `**Kategorie in Objekten unterhalb eines Standortes**` | Eine, mehrere oder alle Kategorien unterhalb einer Lokation auswählen |
| Neuen Eintrag in einer Listen-Kategorie (Multi-Value) eines selbst erstellen Objekts erstellen | Attribute einer Kategorie eines selbst erstellen Objekts darstellen | Bestehenden Kategorie-Eintrag eines selbst erstellen Objekts bearbeiten oder neuen erstellen | Kategorie-Eintrag eines selbst erstellen Objekts [archivieren und wiederherstellen](/display/de/Lebens-+und+Dokumentationszyklus) | Kategorie-Eintrag eines selbst erstellen Objekts [als gelöscht markieren](/display/de/Lebens-+und+Dokumentationszyklus) und wiederherstellen | Ping und NSLOOKUP in Kategorie `**Netz**` verwenden | Kategorie-Eintrag eines selbst erstellen Objekts unwiderruflich löschen (`**purge**`);<br><br>`**Person**` zu `**Personengruppe**` hinzufügen4 | `**Kategorie(n) in von mir erstellten Objekten**` | Eine, mehrere oder alle Kategorien von selbst erstellten Objekten auswählen |
| \-  | \-  | –   | –   | –   | Änderungen durch die [Listeneditierung](/display/de/Listeneditierung) speichern | –   | `**[Listeneditierung](/display/de/Listeneditierung)**`3 | –   |
| \-  | Ohne Funktion | –   | –   | –   | Eigene [Objekt-Listen](/display/de/Objekt-Liste) anpassen | –   | `**Objekt-Listen definieren**` | –   |
| \-  | Ohne Funktion | –   | –   | –   | [Objekt-Listen](/display/de/Objekt-Liste) anderer Benutzer anpassen | –   | `**Objekt-Listen anderer Benutzer überschreiben**` | –   |
| \-  | Ohne Funktion | –   | –   | –   | [Objekt-Listen](/display/de/Objekt-Liste) für neue Benutzer anpassen | –   | `**Objekt-Listen als Standard definieren**` | –   |
| \-  | [CMDB-Explorer](/display/de/CMDB-Explorer) für jedes Objekt aufrufen | –   | –   | –   | –   | –   | `**[CMDB-Explorer](/display/de/CMDB-Explorer)**`3 | –   |
| \-  | Profile verwenden | Neues Profil erstellen oder bestehende bearbeiten | –   | Bestehendes Profil unwiderruflich löschen (`**purge**`) | –   | –   | `**[CMDB-Explorer Profile](/display/de/Profile+im+CMDB-Explorer)**` | –   |
| \-  | Standorte in einer Baumstruktur darstellen | –   | –   | –   | –   | –   | `**Standortsicht**` | –   |

Anmerkungen:

1.  Das Ansehen-Recht ist pro Bedingung immer angehakt und daher ausgegraut.
2.  Einige Rechte können sich überschneiden. Hat man beispielsweise das Lese-Recht für alle Objekte, braucht man nicht zusätzlich das Lese-Recht auf Objekte aller Objekttypen.
3.  Diese Funktion umgeht an anderer Stelle definierte Rechte. Um alle Rechte zu berücksichtigen, siehe erweiterte Einstellungen weiter unten.
4.  Wird eine Person einer Personengruppe hinzugefügt, erbt diese Person die Rechte der Gruppe. Damit Benutzer sich dadurch nicht zusätzliche Rechte verschaffen, wird das Administrator-Recht für die entsprechenden Kategorien benötigt. Zusätzlich ist das Bearbeiten-Recht auf die Bedingung [Objekt-ID](/display/de/Eindeutige+Referenzierungen) für ebendiese Objekte vom Typ `**Personen**` und `**Personengruppe**` erforderlich.

![](/download/attachments/42303548/auhorization-conf-de.png?version=1&modificationDate=1631796455876&api=v2&effects=drop-shadow)

Automatisches Recht auf selbst erstellte Objekte
------------------------------------------------

Hat ein Benutzer das Recht, ein neues Objekt zu erstellen und nutzt dies auch, erbt der Benutzer automatisch das Recht, das Objekt sehen und bearbeiten zu dürfen. Diese Vererbung wird allerdings nicht in der Rechteverwaltung angezeigt und kann nicht widerrufen werden.

Erweiterte Einstellungen
------------------------

Für das CMDB-Modul existieren erweiterte Einstellungen. Standardmäßig sind diese nicht aktiv, sondern müssen unter `**Verwaltung → Systemeinstellungen → Experteneinstellungen**` eingetragen werden. Folgend wird der jeweilige `**Key**` beschrieben. Aktiviert wird die Einstellung, wenn `**Value**` mit `1` angegeben wird. Deaktiviert wird die Einstellung mit `**Value**` `0`. Alle genannten Einstellungen wirken sich nur auf den derzeit aktiven Mandanten aus und sind daher auf `**Tenant-wide**` zu stellen.

*   `**auth.use-in-cmdb-explorer**`: Im CMDB-Explorer werden alle an anderer Stelle getätigten Rechte berücksichtigt. Objekte, für die der Benutzer kein Lese-Recht hat, werden weder dargestellt noch weiter iteriert. Andernfalls werden alle Objekte ohne Prüfung dargestellt.
*   `**auth.use-in-cmdb-explorer-service-browser**`: Im CMDB-Explorer stehen über den Button `**Service Auswahl**` alle Services zur Verfügung, für die der Benutzer das Lese-Recht besitzt. Anderfalls stehen alle Service-Objekte ohne Prüfung zur Auswahl.
*   `**auth.use-in-object-browser**`: Die Überprüfung des Lese-Rechts wird auch im [Objekt-Browser](/display/de/Attributfelder) (sowie seiner Derivate) aktiviert. Objekte, für die der Benutzer kein Lese-Recht hat, stehen nicht zur Auswahl. Bereits ausgewählte Objekte (zum Beispiel von anderen Benutzern) werden mit `**[Ausgeblendet]**` dargestellt. Ist diese Einstellung nicht aktiv, werden alle Objekte im Objekt-Browser angezeigt.
*   `**auth.use-in-location-tree**`: Besitzt der Benutzer wie oben beschrieben das Recht, die Standortsicht zu verwenden, werden alle Objekte, die einem Standort zugeordnet sind, unabhängig von den Lese-Rechten dargestellt. Wird diese Einstellung aktiviert, werden für jedes Objekt in dieser Baumansicht zusätzlich die Lese-Rechte überprüft. Sollte für Objekte das Lese-Recht fehlen, werden diese sowie alle darunter angesiedelte Objekte nicht dargestellt.

Performance

Die Berücksichtigung der erweiterten Einstellungen kann Auswirkungen auf die Performance von i-doit haben.

Kategorie Rechteverwaltung
--------------------------

Die Kategorie `**Rechteverwaltung**` wird mit einem Schloss-Symbol zu jedem Objekt dargestellt und kann nicht abgewählt werden. Alle Rechte, die mit dem jeweiligen Objekt in Berührung stehen, werden pro `**Person**` und `**Personengruppe**` aufgeschlüsselt. Zudem können die Rechte erweitert werden. Bestehende Rechte können hierüber nicht angepasst werden. Dafür ist die oben beschriebene Konfiguration gedacht.

![](/download/attachments/42303548/access-de.png?version=1&modificationDate=1631797122013&api=v2&effects=drop-shadow)