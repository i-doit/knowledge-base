# Kategorien und Attribute

i-doit bringt bereits über 200 vordefinierte [Kategorien](struktur-it-dokumentation.md) mit. Daraus resultieren über 1000 [Attribute](struktur-it-dokumentation.md), die theoretisch pro [Objekt](struktur-it-dokumentation.md) dokumentiert werden können. Diese Fülle führt zwangsläufig zu der häufig gestellten Frage: "Wofür ist die Kategorie XY mit all ihren Attributen gedacht?" Es geht also darum, welche Konzepte hinter jeder einzelnen Kategorie und jedem einzelnen Attribut stecken.

!!! info "Flexibilität vs. Vorgaben"

    Anhand der folgenden Tabellen starten wir den Versuch, einen allgemeinen Überblick zu verschaffen. "Versuch" deswegen aufgrund der schieren Masse an vordefinierten Kategorien und Attributen. Für viele Kategorien und Attribute gibt es keine strenge Vorgabe. Daher dienen die folgenden Beschreibungen lediglich als Empfehlung. Über Ergänzungen und Korrekturen, wie folgende Kategorien und Attribute in der Praxis genutzt werden, würden wir uns sehr freuen. Eine E-Mail an [feedback@i-doit.com](mailto:feedback@i-doit.com) genügt.

Globale Kategorien
------------------

| Kategorie | Attribut | Beschreibung |
| --- | --- | --- |
| **Alle Tickets** [![alle-tickets](../assets/images/de/grundlagen/icons/comments.png)](../assets/images/de/grundlagen/icons/comments.png) | \-  | [Service Desk](/display/de/Service+Desk): Wenn die Schnittstelle zum Service Desk aktiviert ist, können über diese Kategorie alle referenzierten Tickets zu diesem Objekt angezeigt werden. |
| **Allgemein** | **ID** | Jedes Objekt erhält vom dahinter liegende DBMS MySQL/MariaDB [einen eindeutigen Identifier (ID)](eindeutige-referenzierungen.md). |
|     | **Name** | Jedes Objekt muss einen Namen erhalten. Dieser kann sogar eindeutig pro Mandant oder pro Objekttyp sein. Synonyme sind **Bezeichnung** und **Objekt-Titel**. |
|     | **Zustand** | Über den **Zustand** (oftmals auch **Status** genannt) wird der [Lebenszyklus der Dokumentation](lebens-und-dokumentationszyklus.md) abgebildet. |
|     | **CMDB-Status** | Der CMDB-Status zeigt an, in welchem [Stadium des Lebenszyklus](lebens-und-dokumentationszyklus.md) ein Objekt befindet, beispielsweise **In Betrieb**. |
|     | **Einsatzzweck** | Hat die Komponente einen bestimmten Zweck, kann dieser hier hinterlegt werden. Eine gute Alternative ist das Attribut **Tags**. |
|     | **Kategorie** | Dieses Attribut ist nicht mit den Kategorien in i-doit zu verwechseln. Es wird nicht häufig verwendet und kann durch das Attribut **Tags** ersetzt werden. |
|     | **SYSID** | Neben der **Objekt-ID** ist die **SYSID** ebenfalls für [eine eindeutige Referenzierung](eindeutige-referenzierungen.md) geeignet. Zudem lässt es sich vom Benutzer bearbeiten, während die **Objekt-ID** fest vergeben wird. |
|     | **Tags** | Jedes Objekt kann mit beliebig vielen Stichwörtern versehen werden. Dies ist praktisch, um einem Objekt beispielsweise bestimmte Rollen oder einen Einsatzzweck zuzuordnen. |
|     | **Beschreibung** | Fast jeder Eintrag in einer Kategorie kann am Ende mit einer Beschreibung versehen werden. Hier können zusätzliche Notizen hinterlegt werden. Da es sich hierbei um umstrukturierte Texte handelt, wird eine einfache Auswertung erschwert. |
| **Analyse** [![analyse](../assets/images/de/grundlagen/icons/chart_pie.png)](../assets/images/de/grundlagen/icons/chart_pie.png) | \-  | Leitet zur **Ausfallsimulation** des [Analysis](../i-doit-pro-add-ons/analysis.md)\-Add-ons weiter |
| **Anschlüsse** | \-  | Hierüber wird die Verkabelung zwischen Komponenten dokumentiert. Es wird zwischen **Eingang** und **Ausgang** unterschieden, die miteinander verbunden werden können. Diese Kategorie wird durch weitere Kategorien automatisch befüllt, zum Beispiel **Port** oder **Stromverbraucher** |
| **Anschrift** | \-  | Hausanschrift; wird oftmals Objekten vom Typ **Gebäude** zugeordnet |
| **Bereiche** | \-  | Verwendung eines Netzbereichs; ist im Kategorie-Ordner **Netzbereich** enthalten; rückwärtige Kategorie: **Netz → Netzbereiche** |
| **Betriebssystem** | \-  | Das primär installierte Betriebssystem kann hier hinterlegt werden; ergänzt die Kategorie **Softwarezuweisung** |
| **Beziehungen** [![Beziehungen](../assets/images/de/grundlagen/icons/arrow_out.png)](../assets/images/de/grundlagen/icons/arrow_out.png) | \-  | Auflistung aller [Objekt-Beziehungen](objekt-beziehungen.md) |
| **Bilder** | \-  | Bildergalerie |
| **Buchhaltung** | \-  | Buchhalterische Angaben wie eine **Inventarnummer**, **Kostenstelle** usw. |
| **Cluster** | \-  | Ein **Cluster** kann über diesen Kategorie-Ordner dokumentiert werden. Virtualisierungs-, Web- und Datenbank-Cluster sind häufige Formen. Untergeordnete Kategorien: **Cluster**, **Clusterdienstzuweisung**, **Clustermitglieder**, **Clustervitalität**, **Gemeinsamer Speicher**, **Gemeinsame Virtuelle Switche**, **Verwaltungsinstanz** |
| **Clusterdienstzuweisung** | \-  | Verknüpfung eines Objekts vom Typ **Clusterdienst**, sprich einer Software, die den **Cluster** repräsentiert oder verwaltet; ist im Kategorie-Ordner **Cluster** enthalten |
| **Clustermitglieder** | \-  | Komponenten, die einen **Cluster** bilden; ist im Kategorie-Ordner **Cluster** enthalten; rückwärtige Kategorie: **Clustermitgliedschaften** |
| **Clustermitgliedschaften** | \-  | Objekte können einem oder mehreren Clustern zugeordnet werden. Rückwärtige Kategorie: **Clustermitglieder** |
| **Clustervitalität** | \-  | Visualisierung und Statistiken zur **Objektvitalität** von Clustermitgliedern; ist im Kategorie-Ordner **Cluster** enthalten |
| **CMDB-Explorer** [![cmdb-explorer](../assets/images/de/grundlagen/icons/chart_organisation.png)](../assets/images/de/grundlagen/icons/chart_organisation.png) | \-  | Öffnet das Objekt im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) |
| **Controller** | \-  | Verbaute Onboard oder PCIe-Steckkarten zur Anbindung von Speicherlaufwerken; ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten |
| **CPU** | \-  | Auflistung von CPU-Sockeln und verbauten CPUs. |
| **CUCM VoIP Leitung** | \-  | Angaben zum Cisco Unified Call Manager (CUCM) |
| **CUCM VoIP Telefon** | \-  | Angaben zum Cisco Unified Call Manager (CUCM) |
| **Data Source** | \-  | Angabe, aus welchem [Datenimport](../daten-konsolidieren/index.md) die Attribute dieses Objekts stammen |
| **Dateizuweisung** | \-  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Handbuchzuweisung** und **Notfallplanzuweisung**; rückwärtige Kategorie: **Dateien → Zugewiesene Objekte** |
| **Datenbankzuweisung** | \-  | Greift eine installierte Applikation (siehe Objekttypen **Anwendungen** und **Systemdienst**) auf eine oder mehrere Datenbanken zu, kann dies hier dokumentiert werden; ergänzt Kategorie **Installation** in den Kategorie-Ordnern **Anwendungen** und **Dienste** |
| **Datensicherung** | \-  | Backup: Die Daten dieses Objekts wird von einem anderen Objekt gesichert. Rückwärtige Kategorie: **Datensicherung (zugewiesene Objekte)** |
| **Datensicherung (zugewiesene Objekte)** | \-  | Backup: Dieses Objekt sichert Daten anderer Objekte. Rückwärtige Kategorie: **Datensicherung** |
| **Dokumente** | \-  | Add-on [Documents](../i-doit-pro-add-ons/documents/index.md): Liste von generierten Dokumenten |
| **E-Mail-Adressen** | \-  | Liste von E-Mail-Adressen; oftmals in Verbindung von Kontakten (siehe Objekttypen **Personen**, **Personengruppen** und **Organisation**); ergänzt die Kategorie **Stammdaten** in den Kategorie-Ordnern **Personen**, **Personengruppen** und **Organisation** |
| **Fahrzeug** | \-  | Angaben zu einem Fahrzeug, zum Beispiel KfZ-Kennzeichen; eignet sich zur Dokumentation eines Fuhrparks oder eines Dienstwagens; siehe gleichnamigen Objekttyp **Fahrzeug** |
| **Faser/Ader** | \-  | Detaillierte Beschreibung einer Glasfaser bzw. von Adern eines Kupferkabels; ist daher häufig dem Objekttyp **Kabel** zugeordnet |
| **FC-Port** | \-  | Liste von Fiber Channel Ports; dient der Dokumentation von Storage Area Networks (SANs) und wird häufig den Objekttypen **Speichersystem** und **FC-Switch** zugeordnet; ist im Kategorie-Ordner **Speichernetze** enthalten; befüllt automatisch die Kategorie **Verkabelung → Anschlüsse** |
| **Flugzeug** | \-  | Angaben zu einem flugfähigen Gerät |
| **Formfaktor** | \-  | Angaben, ob eine Hardware 19"-fähig ist. Wenn ja, wie viele Höheneinheiten sie belegt. Hiermit wird auch festgelegt, über wie viele Höheneinheiten ein Serverschrank (Rack) verfügt. Weiterhin können die Dimensionen und das Gewicht angegeben werden. |
| **Freigabe** | \-  | Dieses Objekt bietet eine oder mehrere Freigaben (Samba, CIFS, NFS usw.). Rückwärtige Kategorie: **Freigabenzugriff** |
| **Freigabenzugriff** | \-  | Dieses Objekt greift auf eine bestehende Freigabe (Samba, CIFS, NFS usw.) eines anderen Objekts zu. Rückwärtige Kategorie: **Freigabe** |
| **Gastsysteme** | \-  | Zugeordnete virtuelle Maschinen zu einem Wirtssystem; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Gemanagte Geräte** | \-  | Handelt es sich bei dem Objekt um einen Remote Management Controller (siehe gleichnamigen Objekttyp), können hierüber Objekte zugewiesen werden, die über dieses Objekt erreicht administriert können (siehe auch Lights Out Management, LOM). Rückwärtige Kategorie: **Remote Management Controller** |
| **Gemeinsame Virtuelle Switche** | \-  | Angaben zu gemeinsam genutzten virtuellen Switches (siehe Kategorie **Virtueller Host → Virtuelle Switche**); ist im Kategorie-Ordner **Cluster** enthalten |
| **Gemeinsamer Speicher** | \-  | Visualisierung und Statistiken zu Wirtssystemen und LUNs; ist im Kategorie-Ordner **Cluster** enthalten |
| **Gerät** | \-  | Liste von Speicherlaufwerken (Festplatten, SSDs usw.); ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten; ergänzt Kategorien **Controller** und **Raid-Verbund** in diesem Kategorie-Ordner |
| **Grafikkarte** | \-  | Liste von eingebauten Grafikkarten |
| **Gruppenmitgliedschaft** | \-  | Zuordnung des Objekts zu einer dynamischen oder statischen Gruppe; siehe Objekttyp **Objektgruppe**; rückwärtige Kategorie: **Objektgruppe** |
| **Handbuchzuweisung** | \-  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Dateizuweisung** und **Notfallplanzuweisung**; rückwärtige Kategorie: **Dateien → Zugewiesene Objekte** |
| **Host Definition** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Host-Template definition** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Hostadapter (HBA)** | \-  | Liste von HBAs, die Fiber Channel Ports (siehe **Speichernetze → FC-Port**) bereitstellen; dient der Dokumentation von Storage Area Networks (SANs); ist im Kategorie-Ordner **Speichernetze** enthalten |
| **Hostadresse** | \-  | [IPAM](../anwendungsfaelle/ip-adress-management.md): Liste von konfigurierten IP-Adressen (IPv4/IPv6); zusätzliche Zuordnung von **Hostname**, **Domain**, Netzwerkanschlüssen (siehe Kategorie **Netzwerk** **→ Port**) und Subnetzen (siehe Objekttyp **Layer-3-Netz**); rückwärtige Kategorie: **IP-Liste** |
| **Interface** | \-  | Zuweisung von physikalischen Netzwerkanschlüssen (siehe Kategorie **Netzwerk → Port**) zu internen Anschlüssen eines Geräts, zum Beispiel Onboard oder PCIe-Steckkarte; ist im Kategorie-Ordner **Netzwerk** enthalten |
| **JDisc Custom Attributes** | \-  | Benutzerdefinierte Attribute, die aus [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) importiert worden sind, anzeigen und bearbeiten |
| **JDisc Discovery** | \-  | Import aus [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) für dieses Objekt durchführen |
| **Kabel** | \-  | Angaben zu einem **Kabel**, zum Beispiel Länge und Farbe |
| **Kontaktzuweisung** | \-  | Ordnet **Personen**, **Personengruppen**, **Organisationen** o. ä. einem Objekt zu; jede Zuordnung kann mit einer **Rolle** versehen werden, z. B. **Administrator**; rückwärtige Kategorie: **Personen/Personengruppen/Organisation → Zugewiesene Objekte** |
| **Laufwerk** | \-  | Dokumentation von konfigurierten Mount Points oder Laufwerksbuchstaben; ergänzt Kategorie-Ordner **Lokaler Massenspeicher**; siehe auch Kategorien **Freigabenzugriff** und **Speichernetze → Logische Geräte (Client)** |
| **LDAP** | **Distinguished Name (DN)** | Wird eine Person oder eine Personengruppe über [LDAP/AD](../automatisierung-und-integration/ldap-verzeichnis/index.md) synchronisiert, wird hier der zugehörige DN hinterlegt. |
| **Letzter eingeloggter Benutzer** | \-  | Zuletzt angemeldeter Benutzer; kann durch [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) importiert werden |
| **Listener** | \-  | Öffnet eine installierte Applikation (siehe Kategorie **Softwarezuweisung**) einen Port (1-65535) über das IP-Protokoll (siehe Kategorie **Hostadresse**), sprich über Protokolle wie TCP und UDP, kann dies hier dokumentiert werden; ist im Kategorie-Ordner **Netzwerkverbindungen** enthalten; rückwärtige Kategorie: **Verbindung** |
| **Livestatus** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): zeigt aktuelle Informationen zu einem Host und dessen Services an, die über die Schnittstelle Livestatus zur Verfügung stehen; ist im Kategorie-Ordner **Monitoring** enthalten und wird dort konfiguriert |
| **Logbuch** [![logbuch](../assets/images/de/grundlagen/icons/book_open.png)](../assets/images/de/grundlagen/icons/book_open.png) | \-  | [Änderungen an einem Objekt](logbuch.md) |
| **Logische Geräte (Client)** | \-  | Greift ein Objekt auf LUNs eines SANs zu, wird dies hier dokumentiert; ist im Kategorie-Ordner **Speichernetze** enthalten; rückwärtige Kategorie: **Logische Geräte (LDEV Server)** |
| **Logische Geräte (LDEV Server)** | \-  | Bietet ein Objekt, zum Beispiel ein SAN, anderen Objekten LUNs an, wird dies hier dokumentiert; ist im Kategorie-Ordner **Speichernetze** enthalten; rückwärtige Kategorie: **Logische Geräte (Client)** |
| **Logische Ports** | \-  | Zusammenfassung von physikalischen Netzwerkanschlüssen (siehe Kategorie **Netzwerk → Port**), oftmals Trunking oder Bonding genannt; ist im Kategorie-Ordner **Netzwerk** enthalten |
| **Logischer Standort** | **Übergeordnetes Objekt** | Objekt vom Typ **Person**, die einem Objekt vom Typ **Arbeitsplatz** zugeordnet ist. Rückwärtige Kategorie: **Zugewiesene Arbeitsplätze** |
| **Lokaler Massenspeicher** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Controller**, **Gerät** und **Raid-Verbund**; Auswertung ebendieser Kategorien; ergänzt die Kategorie **Laufwerk**; für Zugriffe auf Freigaben siehe Kategorie **Freigabenzugriff** und für LUNs die Kategorie **Speichernetze → Logische Geräte (Client)** |
| **Mitglieder** | \-  | Liste von Objekten mit ihren logischen Ports (siehe Kategorie **Netzwerk → Logische Ports**), die einem VRRP-/HSRP-/CARP-Cluster zugeordnet sind; ist im Kategorie-Ordner **VRRP** enthalten; rückwärtige Kategorie: **VRRP Mitgliedschaft** |
| **Modell** | \-  | Eine der wichtigsten Kategorien eines (Hardware-)Objekts mit Angaben zu **Hersteller**, **Modell** und **Seriennummer** |
| **Monitoring** | \-  | [Network Monitoring](/display/de/Network+Monitoring): Kategorie-Ordner mit den untergeordneten Kategorien **Livestatus** und **NDO**; konfiguriert und aktiviert die Abfrage von aktuellen Informationen zu einem Host |
| **Nagios (Anwendungen)** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios (Host TPL)** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios (Host)** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios (Service TPL)** | \-  | [Network Monitoring](/../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios (Service)** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios Gruppe** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Nagios Service-Dependencies** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **NDO** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): zeigt aktuelle Informationen zu einem Host und dessen Services an, die über die Schnittstelle NDOUtils (bzw. IDOUtils) zur Verfügung stehen; ist im Kategorie-Ordner **Monitoring** enthalten und wird dort konfiguriert |
| **Netzbereich** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Bereiche** und **Optionen**; wird in der Regel dem Objekttyp **Netzbereich** zugeordnet |
| **Netzwerk** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Interface**, **Logische Ports**, **Port**, **Portübersicht** und **VRRP Mitgliedschaft** |
| **Netzwerkverbindungen** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Listener** und **Verbindung**; ermöglicht das Dokumentieren von Netzwerkkommunikation zwischen Applikationen; wird häufig (virtueller) Hardware wie Server, VMs oder Clients zugeordnet, auf denen Applikationen installiert sind (siehe Kategorie **Softwarezuweisung**); benötigt zudem IP-Adressen (siehe Kategorie **Hostadresse**) |
| **Notfallplanzuweisung** | \-  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Dateizuweisung** und **Handbuchzuweisung**; rückwärtige Kategorie: **Notfallplan → Zugewiesene Objekte** |
| **Objektbild** | \-  | Ändert das Standardbild eines Objekts, das auf jeder Seite dargestellt wird; da das Bild lediglich 150x150 Pixel groß sein darf, ist die Kategorie **Bilder** oftmals besser geeignet |
| **Optionen** | \-  | Angaben zu einem Netzbereich; ist im Kategorie-Ordner **Netzbereich** enthalten |
| **Passwörter** | \-  | Liste von Passwörtern |
| **Port** | \-  | Liste von physikalischen Netzwerkanschlüssen (Ethernet); enthält Attribute zur MAC-Adresse, zugeordnete VLANs (siehe Objekttyp **Layer-2-Netz**), zugeordnete IP-Adressen (siehe Kategorie **Hostadresse**) und angeschlossenen Geräten; ist im Kategorie-Ordner **Netzwerk** enthalten; befüllt automatisch die Kategorie **Verkabelung → Anschlüsse** |
| **Prüfung** | \-  | Wird eine Komponente regelmäßig geprüft, kann in dieser Kategorie das Ergebnis dieser Prüfung hinterlegt werden. |
| **Objektvitalität** | \-  | Zeigt die Soll-Auslastung eines Systems an; wertet dazu die Kategorien **CPU**, **Speicher**, **Netzwerk → Port**, **Lokaler Massenspeicher** und **Softwarezuweisung** aus und setzt es mit der Kategorie **Rechenressourcen**, die den zugewiesenen Applikationen zugeordnet ist, in Verhältnis; hat aufgrund einer simplen Addition von Werten oftmals eine geringe Aussagekraft |
| **QinQ CE-VLAN** | \-  | Dokumentation von QinQ VLANs (siehe Objekttyp **Layer-2-Netz**) |
| **QinQ SP-VLAN** | \-  | Dokumentation von QinQ VLANs (siehe Objekttyp **Layer-2-Netz**) |
| **Raid-Verbund** | \-  | Dokumentation von Hardware- oder Software-RAIDs mit den verschiedenen Leveln (1, 5, 6, 10 usw.); ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten |
| **Räumlich zugeordnete Objekte** | \-  | Liste aller physikalisch-räumlich untergeordneten Objekte; rückwärtige Kategorie: **Standort** |
| **Rechenressourcen** | \-  | Angaben zu den Systemvoraussetzungen von Applikationen (CPU, Arbeitsspeicher, Speicherplatz, Netzwerkbandbreite); wird von der Kategorie **Objektvitalität** ausgewertet |
| **Rechnung** | \-  | Liste von Rechnungen; ergänzt Kategorie **Buchhaltung** |
| **Rechteverwaltung** [![rechteverwaltung](../assets/images/de/grundlagen/icons/lock.png)](../assets/images/de/grundlagen/icons/lock.png) | \-  | [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/cmdb.md): Welche Person oder Personengruppe hat welche Zugriffsmöglichkeiten auf dieses Objekt? |
| **Remote Management Controller** | **Zugewiesenes Objekt** | Verfügt das Objekt über ein Lights Out Management (LOM), kann dies über hierüber verknüpft werden. Häufig dient dazu der gleichnamige Objekttyp **Remote Management Controller**. Rückwärtige Kategorie: **Gemanagte Geräte** |
|     | **Primäre ZugriffsURL** | Verfügt das zugewiesene Objekt über einen Link (siehe Kategorie **Zugriff**), wird dieser hier angezeigt. Bei mehreren Links wird der als primär markierte angezeigt. |
| **Rückwärtige Servicezuweisung** |     |     |
| **Schnittstelle** | \-  | Weitere externe Schnittstellen einer Hardware, die über physikalische Netzwerkports (siehe Kategorie **Netzwerk → Port**) und Netzteile (siehe Kategorie **Stromverbraucher**) hinaus gehen, zum Beispiel Peripherie-Geräte über USB, HDMI, Display Port, VGA usw.; eignet sich damit zur Dokumentation eher "unwichtiger" Komponenten wie Mäuse und Tastaturen |
| **Service** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Service Beziehung**, **Service Komponenten**, **Service Logbuch** und **Service Typ**; enthält Angaben zum Service; ist meist dem gleichnamigen Objekttypen **Service** zugewiesen |
| **Service Beziehung** | \-  | Wenn Komponenten eines Services untereinander abhängig sind, kann diese Abhängigkeit hier dokumentiert werden. Es werden nur Objekte, die in der Kategorie **Service Komponenten** hinzugefügt sind, aufgelistet. Ist im Kategorie-Ordner **Service** enthalten |
| **Service definition** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md: Export von Konfigurationseinstellungen für Nagios |
| **Service Komponenten** | \-  | Auflistung von Objekten, die dem Service untergeordnet sind; ist im Kategorie-Ordner **Service** enthalten; rückwärtige Kategorie: **Servicezuweisung** |
| **Service Logbuch** | \-  | Auflistung von [Logbuch](logbuch.md)\-Einträgen aus allen Objekten, die dem Service als Komponente hinzugefügt sind (siehe Kategorie **Service Komponenten**); ist im Kategorie-Ordner **Service** enthalten |
| **Service Typ** | **Typ** | Typisierung von Services; ist im Kategorie-Ordner **Service** enthalten |
| **Service-Template definition** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Servicezuweisung** | \-  | Dient das Objekt als Komponente eines Services, kann es hierüber hinzugefügt werden. Ein Objekt kann mehreren Services zugewiesen werden. Rückwärtige Kategorie: **Service Komponenten** |
| **SIM** | \-  | Angaben zu  einer **SIM-Karte** (Netzanbieter, Tarif, Telefonnummer usw.) |
| **Karten** | \-  | Angaben zu einer SIM-Karte (Verknüpftes Mobiltelefon, Pin, Seriennummer); rückwärtige Kategorie: **Zugewiesene SIM-Karten** |
| **SLA** | \-  | Angaben zu einem Service Level Agreement (SLA); häufig den Objekttypen **Service** und **Vertrag** zugeordnet |
| **Smartcard Zertifikat** | \-  | Angaben zu einer Smartcard |
| **SNMP** | \-  | Live-Abfrage von Informationen über das Protokoll SNMP; abgerufene Daten werden **nicht** gespeichert |
| **SOA-Stacks** |     | Angaben zu einer **Middleware** |
| **Softwarezuweisung** | \-  | Liste von installierten Applikationen (siehe Objekttypen **Anwendungen**, **Systemdienst**, **Betriebssystem**, **DBMS**); ergänzt die Kategorie **Betriebssystem**; rückwärtige Kategorien: **Anwendungen/DBMS/**Dienste** → Installation** |
| **Soundkarte** | \-  | Liste von eingebauten Soundkarten |
| **Speicher** | \-  | Liste aller verbauten RAM-Bausteine (Arbeitsspeicher) |
| **Speichernetze** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **FC-Port**,  **Hostadapter (HBA)**, **Logische Geräte (Client)** und **Logische Geräte (LDEV Server)**; dient der Dokumentation von Storage Area Networks (SANs) und LUNs |
| **Stack Mitglieder** | \-  | Liste von Objekten, die einem Hardware-Stack zugeordnet sind; häufig dem Objekttypen **Stacking** zugeordnet; rückwärtige Kategorie: **Stack Mitgliedschaft** |
| **Stack Mitgliedschaft** | \-  | Zuordnung des Objekts zu einem Hardware-Stack; rückwärtige Kategorie **Stack Mitglieder** |
| **Stacking** | \-  | Angaben zu einem Hardware-Stack; diese Logik wurde durch den Objekttypen **Stacking** und den Kategorien Stack Mitglieder bzw. Stack Mitgliedschaft ersetzt |
| **Standort** | \-  | Physikalisch-räumliche Zuordnung des Objekts zu einem anderen Objekt; zusätzlich können 19"-fähige Objekte (siehe Kategorie **Formfaktor**) einem Serverschrank (Rack) in der passenden Höheneinheit "eingebaut" werden; Geokoordinaten sind ebenfalls möglich; rückwärtige Kategorie: **Räumlich zugeordnete Objekte** |
| **Status-Planung** [![status-planung](../assets/images/de/grundlagen/icons/calendar.png)](../assets/images/de/grundlagen/icons/calendar.png) | \-  | Angabe, wann welcher **CMDB-Status** (siehe Kategorie **Allgemein**) gültig ist |
| **Stromlieferant** | \-  | Angaben zu einem Stromerzeuger |
| **Stromverbraucher** | \-  | Liste von verbauten Netzteilen; bietet somit die Dokumentation einer redundanten Stromversorgung; befüllt automatisch die Kategorie **Verkablung → Anschlüsse**; ermöglicht die Angabe einer **BTU** (geeignet für die Berechnung der Kühlung/Klimatisierung) |
| **Subskriptionen** | \-  | Angaben zu vorhandenen Subskriptionen, welche über die Kategorie **Zugewiesene Benutzer** zu **Personen** zugewiesen wird; Kann über **JDisc** importiert werden |
| **Support Ansprüche** | \-  | **JDisc** ruft direkt von einigen Herstellern den Status von Support Ansprüchen ab und importiert diese in seine Datenbank. Diese Informationen können von JDisc nach i-doit importiert werden. |
| **Telefon/Fax** | \-  | Angaben wie **Telefonnummer** oder **Faxnummer** |
| **TSI-Service** |     | Angaben zu Telefonsystemen von Cisco |
| **Verbindung** | \-  | Greift eine installierte Applikation (siehe Kategorie **Softwarezuweisung**) über eine IP-basierte Netzwerkverbindung (siehe Kategorie **Hostadresse**) auf eine andere Applikation zu, kann dies hier dokumentiert werden; ist im Kategorie-Ordner **Netzwerkverbindungen** enthalten; rückwärtige Kategorie: **Listener** |
| **Verkabelung** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Anschlüsse** und **Schnittstelle**; bietet verschiedene (grafische) Auswertungen ebendieser Kategorien |
| **Zugewiesene SIM-Karten** | \-  | Liste von SIM-Karten (siehe Objekttyp **SIM-Karte**); rückwärtige Kategorie: **Karten** |
| **Version** | \-  | Liste von Versionen einer Software; wird häufig den Objekttypen **Anwendungen**, **Betriebssystem**, **DBMS** und **Systemdienst** zugeordnet; ergänzt die Kategorien **Anwendungen/DBMS/**Dienste** → Installation** und **Varianten** |
| **Vertragszuweisung** | \-  | Zuweisung eines **Vertrags** zu diesem Objekt; kann abweichende Angaben zum Start und Ende eines Vertrags enthalten |
| **Verwaltungsinstanz** | \-  | Instanz, die den virtuellen Cluster verwaltet; ist im Kategorie-Ordner **Cluster** enthalten; rückwärtige Kategorie: **Virtuell gemanagte Objekte** |
| **Virtuell gemanagte Objekte** | \-  | Liste von Objekten, die von dieser Instanz verwaltet werden; rückwärtige Kategorie: **Cluster → Verwaltungsinstanz** |
| **Virtuelle Geräte** | \-  | Zuordnung von virtuellen Geräten zu Hardwareressourcen des Wirtssystems aus den Bereichen **Netzwerk**, **Storage** und **Schnittstellen**; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtuelle Maschine** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Virtuelle Geräte** und **Virtuelle Maschine**; dient der Dokumentation von virtuellen Umgebungen; rückwärtige Kategorie: **Virtueller Host** |
| **Virtuelle Maschine** | \-  | Angabe, ob es sich bei diesem Objekt um eine virtuelle Maschine handelt; ist im gleichnamigen Kategorie-Ordner **Virtuelle Maschine** enthalten |
| **Virtuelle Switche** | \-  | Virtuelle Netzwerk-Switche in einer virtuellen Umgebung; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtueller Host** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Gastsysteme**, **Virtueller Host** und **Virtuelle Switche**; wird typischerweise einem Wirtssystem für virtuelle Maschinen (siehe Objekttyp **Virtueller Host**) oder einem **Cluster** zugeordnet; rückwärtige Kategorie: Virtuelle Maschine |
| **Virtueller Host** | \-  | Angaben zum Wirtssystem oder Cluster einer virtuellen Umgebung; ist im gleichnamigen Kategorie-Ordner **Virtueller Host** enthalten |
| **VIVA** [![viva](../assets/images/de/grundlagen/icons/shield.png)](../assets/images/de/grundlagen/icons/shield.png) | \-  | Add-on [VIVA](../i-doit-pro-add-ons/viva/index.md): IT-Grundschutz-relevante Informationen |
| **VRRP** | \-  | Kategorie-Ordner mit der untergeordneten Kategorien **Mitglieder**; enthält Angaben zu den Protokollen VRRP/HSRP/CARP |
| **VRRP Mitgliedschaft** | \-  | Liste aller logischen Ports (siehe Kategorie **Netzwerk → Logische Ports**), die einem VRRP-/HSRP-/CARP-Cluster zugeordnet sind; ist im Kategorie-Ordner **Netzwerk** enthalten; rückwärtige Kategorie: **VRRP → Mitglieder** |
| **WAN-Leitungen** | \-  | Attribute wie Up- und Download-Bandbreite einer Internet-Anbindung; oftmals dem Objekttyp **WAN-Leitung** zugeordnet |
| **Zertifikat** | \-  | Dokumentation von x.509-Zertifikaten |
| **Zugewiesene Abonnente** | \-  | Rückwärtige Kategorie der Kategorie Zugewiesene Benutzer |
| **Zugewiesene Arbeitsplätze** | \-  | Eine **Person** kann einem oder mehreren Objekten vom Typ **Arbeitsplatz** zugeordnet werden. Rückwärtige Kategorie: **Logischer Standort** |
| **Zugewiesene Benutzer** | \-  | Zuordnung von Subskriptionen zu Personen; rückwärtige Kategorie: **Zugewiesene Abonnente** |
| **Zugewiesene Objekte** | \-  | Zuordnung von Objekten zu einer Datei; ist im Kategorie-Ordner **Dateien** enthalten; rückwärtige Kategorie: **Dateizuweisung** |
| **Zugewiesener Arbeitsplatz** | \-  | Das Objekt mit dieser Kategorie wird hierüber einem **Arbeitsplatz** zugewiesen. Rückwärtige Kategorie: **Zugewiesene Endgeräte** |
| **Zugewiesene Endgeräte** |     | Objekte, die einem Objekt vom Typ **Arbeitsplatz** zugewiesen werden. Rückwärtige Kategorie: **Zugewiesener Arbeitsplatz** |
| **Zugriff** | \-  | Setzen von beliebigen Links; bietet eine einfache, aber schnelle Verknüpfung zwischen verschiedenen Applikationen; das in der URL verwendete Protokoll ist beliebig, muss aber dem Web Browser bekannt sein |

Spezifische Kategorien
----------------------

| Kategorie | Attribute | Beschreibung |
| --- | --- | --- |
| **Aktuelle Datei** | \-  | Aktuelle Revision einer Datei zum Download; ist im Kategorie-Ordner **Dateien** enthalten; speist sich aus der Kategorie **Dateiversionen** |
| **Anwendungen** | \-  | 1.  Kategorie-Ordner mit untergeordneten Kategorien **Installation** und **Varianten**; enthält Angaben zur Applikation, beispielsweise den **Hersteller**<br>2.  Angaben zur Applikation, beispielsweise den **Hersteller**; ist im Kategorie-Ordner **DBMS** enthalten |
| **Arbeitsplatzsystem** | \-  | Angaben zu einem Computer, zum Beispiel **Typ des Clients** (Laptop, Desktop usw.) oder **Tastatur-Layout**; häufig dem Objekttyp **Client** zugeordnet |
| **Beziehungsdetails** | \-  | Angaben zu einer [Objekt-Beziehung](objekt-beziehungen.md) |
| **Branch** | \-  | Liste von Branches; ist im Kategorie-Ordner **PDU** enthalten |
| **Chassis** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Chassis Ansicht**, **Slots**, **Verkabelung** und **Zugewiesene Geräte**; häufig den Objekttypen **Blade Chassis** und **Switch Chassis** zugeordnet |
| **Chassis Ansicht** | \-  | Visuelle Darstellung eines Blade oder Switch Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Clusterinstallation** | \-  | Liste von zugeordneten Clustern; ist im Kategorie-Ordner **DBMS** enthalten; speist sich aus Daten der Kategorie **DBMS → Zugeordnete Cluster** |
| **Dateien** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Aktuelle Datei**, **Dateiversionen** und **Zugewiesene Objekte** |
| **Dateiversionen** | \-  | Liste aller verfügbaren Revisionen einer Datei; über diese Kategorie können Dateien hochgeladen werden; ist im Kategorie-Ordner **Dateien** enthalten; speist die Kategorie **Aktuelle Datei** mit Informationen |
| **Datenbank Gateway** | \-  | Liste von Möglichkeiten, um auf diese Datenbank zuzugreifen; ist im Kategorie-Ordner **Datenbankschema** enthalten |
| **Datenbanklinks** | \-  | Verknüpfung zwischen Datenbanken; ist im Kategorie-Order **Datenbankschema** enthalten |
| **Datenbankobjekte** | \-  | Angaben zum Aufbau der Datenbank, beispielsweise Liste von Tabellen; ist im Kategorie-Ordner **Datenbankschema** enthalten |
| **Datenbankschema** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Datenbank Gateway**, **Datenbanklinks**, **Datenbankobjekte** und **Datenbankzugriff**; häufig dem gleichnamigen Objekttypen **Datenbankschema** zugeordnet |
| **Datenbankzugriff** | \-  | Liste von installierten Applikationen, die auf diese Datenbank zugreifen; ist im Kategorie-Ordner **Datenbankschema** enthalten; rückwärtige Kategorie: **Softwarezuweisung** |
| **DBMS** | **DBMS** | Kategorie-Ordner mit untergeordneten Kategorien **Anwendungen**, **Clusterinstallation**, **Installation**, **Varianten** und **Zugeordnete Cluster** |
| **DHCP** | \-  | Liste von DHCP-Bereichen eines Subnets; ist im Kategorie-Ordner **Netz** enthalten |
| **Dienste** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Installation** und **Varianten**; enthält Angaben zur Applikation, beispielsweise den **Hersteller** |
| **Drucker** | \-  | Angaben zu einem **Drucker** |
| **FC-Switch** | \-  | Angaben zu einem Fiber Channel Switch: **Bezeichnung** und **Aktiv**; häufig dem gleichnamigen Objekttypen **FC-Switch** zugeordnet |
| **Gleichgerichtete Beziehungen** | \-  | Angaben zu einer gleichgerichteten [Objekt-Beziehung](objekt-beziehungen.md) |
| **Installation** | \-  | Dokumentiert die Installation einer Applikation auf einer Hardware; ist in den Kategorie-Ordnern **Anwendungen**, **DBMS** und **Dienste** enthalten; rückwärtige Kategorie: **Softwarezuweisung** |
| **Instanz / Oracle Datenbank** | \-  | Angaben zu einer laufenden Datenbank-Instanz; häufig dem Objekttypen Datenbankinstanz zugeordnet |
| **IP-Liste** | \-  | Visuelle Darstellung eines Subnets mit weiteren Funktionen und Statistiken; ist im Kategorie-Ordner **Netz** enthalten; rückwärtige Kategorie: **Hostadresse** |
| **Klimaanlage** | \-  | Angaben zu einer **Klimaanlage** |
| **Kryptokarte** | \-  | Angaben zu einer **Kryptokarte** |
| **Layer-2-Netz** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Zugewiesene logische Ports** und **Zugewiesene Ports**; enthält Angaben zu einem VLAN; häufig dem gleichnamigen Objekttypen **Layer-2-Netz** zugeordnet |
| **Leitungsnetz** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Netzart** und **Zugeordnete Objekte**; häufig dem gleichnamigen Objekttypen **Leistungsnetz** zugeordnet |
| **Lizenzschlüssel** | \-  | Liste von Lizenzschlüsseln und Applikationen, die bei einer Installation eine Lizenz benötigen (siehe Kategorie **Softwarezuweisung**); ist im Kategorie-Ordner **Lizenzzuweisung** enthalten |
| **Lizenzzuweisung** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Übersicht** und **Lizenzschlüssel**; häufig dem Objekttypen **Lizenzen** zugeordnet |
| **Login** | \-  | Credentials für lokale Benutzer von i-doit bestehend aus **Username** und **Passwort** |
| **Middleware** | \-  | Angaben zu einer **Middleware** |
| **Mitglieder** | \-  | Liste von Personen, die der Personengruppe zugeordnet sind; ist im Kategorie-Ordner **Personengruppen** zugeordnet; rückwärtige Kategorie: **Personen → Personengruppenmitgliedschaft** |
| **Mobilfunk** | **IMEI-Nummer** | Eindeutige Nummer eines Handys/Smartphones; häufig dem Objekttypen **Mobiltelefon** zugeordnet |
| **Monitor** | \-  | Angaben zu einem Monitor, zum Beispiel **Auflösung**; daher häufig dem Objekttypen **Monitore** zugeordnet |
| **Nagios** | \-  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Export von Konfigurationseinstellungen für Nagios |
| **Netz** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **DHCP**, **IP-Liste** und **Netzbereiche**; enthält Angaben zu einem Subnet, daher häufig dem Objekttypen **Layer-3-Netz** zugeordnet |
| **Netzart** | **Netzart** | Angaben zu einem **Leistungsnetz**, zum Beispiel "Strom", "Wasser", "Gas"; ist im Kategorie-Ordner **Leistungsnetz** enthalten |
| **Netzbereiche** | \-  | Angaben zur Segmentierung von Subnetzen; ist im Kategorie-Ordner **Netz** enthalten; rückwärtige Kategorie: **Netzbereich → Bereiche** |
| **Netzersatzanlage** | \-  | Angaben zu einem Stromgenerator, zum Beispiel Dieselaggregat; häufig dem gleichnamigen Objekttypen **Netzersatzanlage** zugeordnet |
| **Notfallplan** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Notfallplan Eigenschaften** und **Zugewiesene Objekte**; häufig dem gleichnamigen Objekttypen **Notfallplan** zugeordnet |
| **Notfallplan Eigenschaften** | \-  | Angaben zu einem Notfallplan: **Zeitbedarf** und **Datum Notfallübung**; ist im Kategorie-Ordner **Notfallplan** enthalten |
| **Objektgruppe** | \-  | Liste von zugeordneten Objekten (siehe gleichnamigen Objekttyp **Objektgruppe**); ist Kategorie-Ordner mit der untergeordneten Kategorie **Typ**; rückwärtige Kategorie: **Gruppenmitgliedschaft** |
| **Organisation** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Personen**, **Stammdaten** und **Zugewiesene Objekte**; häufig dem gleichnamigen Objekttypen **Organisation** zugeordnet |
| **PDU** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Übersicht** und **Branch**; enthält Angaben zu einer Power Distribution Unit; häufig dem Objekttypen **Steckdosenleiste** zugeordnet  <br>Diese Kategorie kann über SNMP die Informationen der Steckdosenleisten des Herstellers APC auslesen. Die Kompatibilität dieser Funktion ist auf einzelne Modelle dieses Herstellers ausgelegt.  <br>Weiterhin können die Informationen lediglich bezogen auf die Steckdosenleiste selbst ausgelesen und ausgegeben werden. Das Ergänzen weiterer Informationen ist nicht möglich. |
| **Personen** | \-  | 1.  Kategorie-Ordner mit untergeordneten Kategorien **Login**, **Nagios**, **Personengruppenmitgliedschaft**, **Rechtevergabe**, **Stammdaten** und **Zugewiesene Objekte**<br>2.  Liste von zugeordneten Objekten vom Typ **Personen**; ist im Kategorie-Ordner **Organisation** enthalten; rückwärtige Kategorie: **Personen → Stammdaten** (Attribut **Firma**) |
| **Personengruppen** | \-  | Kategorie-Ordner mit den untergeordneten Kategorien **Mitglieder**, **Nagios**, **Rechtevergabe**, **Stammdaten** und **Zugewiesene Objekte** |
| **Personengruppenmitgliedschaft** | \-  | Liste von **Personengruppen**, denen die Person untergeordnet ist; ist im Kategorie-Ordner **Personen** enthalten; rückwärtige Kategorie: **Mitglieder** |
| **Raum** | \-  | Angaben wie **Typ**, **Raumnummer** und **Stockwerk**; häufig dem gleichnamigen Objekttypen **Raum** zugeordnet |
| **Rechtevergabe** | \-  | Siehe [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/cmdb.md); ist in den Kategorie-Ordnern **Personen** und **Personengruppen** enthalten |
| **Replikation** | \-  | Kategorie-Ordner mit untergeordneter Kategorie **Replikationspartner**; enthält Angabe zum **Replikationsmechanismus**; häufig dem Objekttypen **Replikationsobjekt** zugeordnet |
| **Replikationspartner** | \-  | Liste von Objekten, die repliziert werden; ist im Kategorie-Ordner **Replikation** enthalten |
| **Routing** | \-  | Angaben zu konfigurierten Routen: **Routingprotokoll** und **Gateway Adresse** (siehe Kategorie **Hostadresse**); häufig dem Objekttypen **Router** zugeordnet |
| **SAN Zoning** | \-  | Storage Area Networks (SAN): Angaben zum **SAN Zoning** |
| **Schrank** | \-  | Visuelle Darstellung eines Racks, daher häufig dem Objekttypen **Schrank** zugeordnet; enthält zusätzliche Attribute für vertikale Einschübe und Statistiken, die aus den räumlich zugeordneten Objekten und aus der Kategorie **Formfaktor** generiert werden |
| **Slots** | \-  | Liste von verfügbaren Slots in einem Blade oder Switch Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Stammdaten** | \-  | 1.  Angaben zu einer Person; ist im Kategorie-Ordner **Personen** enthalten<br>2.  Angaben zu einer Personengruppe; ist im Kategorie-Ordner **Personengruppen** enthalten<br>3.  Angaben zu einer Organisation; ist im Kategorie-Ordner **Organisation** enthalten |
| **Switch** | \-  | Angaben zum **Switch**; speist sich aus Informationen aus der Kategorie **Hostadresse** und **Netzwerk → Port** |
| **Typ** | \-  | Definition, ob eine **Objektgruppe** dynamisch (per [Report](../auswertungen/report-manager.md)) oder statisch aufgebaut ist; ist im Kategorie-Ordner **Objektgruppe** enthalten |
| **Übersicht** | \-  | 1.  Zusammenfassung von Angaben zu einer Lizenz; ist im Kategorie-Ordner Lizenzzuweisung enthalten<br>2.  Visuelle Darstellung und Statistiken von PDU Branches; ist im Kategorie-Ordner **PDU** enthalten |
| **Unterbrechungsfreie Stromversorgung** | \-  | Angaben zu einer USV, daher häufig dem gleichnamigen Objekttypen **Unterbrechungsfreie Stromversorgung** zugeordnet |
| **Varianten** | \-  | Liste von Varianten, zum Beispiel "Standard", "Enterprise", "Pro", "Open", einer Applikation; ist in den Kategorie-Ordnern **Anwendungen**, **DBMS** und **Dienste** enthalten; ergänzt die Kategorie **Installation** in diesen Kategorie-Ordnern |
| **Verkabelung** | \-  | Interne Vernetzung innerhalb eines Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Vertrag** | \-  | Kategorie-Ordner mit untergeordneten Kategorien **Vertragsinformationen** und **Zugeordnete Objekte**; häufig dem gleichnamigen Objekttypen **Vertrag** zugeordnet |
| **Vertragsinformationen** | \-  | Angaben zu einem Vertrag; ist im Kategorie-Ordner **Vertrag** enthalten |
| **WAN-Leitungen** | \-  | Angaben zu einer Internet-Anbindung (WAN, MAN, GAN o. ä.), daher häufig dem gleichnamigen Objekttypen **WAN-Leitungen** zugeordnet |
| **WiFi-Gerät** | \-  | Angaben zu einem WLAN Access Point, daher häufig dem Objekttypen **Wireless Access Point** zugeordnet |
| **Zugeordnete Cluster** | \-  | Liste von Objekten vom Typ **Cluster** mit weiteren Angaben, wie der Cluster definiert ist; ist im Kategorie-Ordner **DBMS** enthalten; rückwärtige Kategorie: **Clustermitgliedschaften** |
| **Zugeordnete Objekte** | \-  | 1.  Liste von Objekten, die einem **Vertrag** zugeordnet sind; ist im Kategorie-Ordner **Vertrag** enthalten; rückwärtige Kategorie: **Vertragszuweisung**<br>2.  Liste von Objekten, die einem **Leitungsnetz** zugeordnet sind; ist im Kategorie-Ordner **Leitungsnetz** enthalten; rückwärtige Kategorie: **Verkabelung → Anschlüsse** (Attribut **Leitungsnetz**) |
| **Zugewiesene Geräte** | \-  | Liste von Hardware-Objekten (**Blade Server**, Switch-Module), die in einem Chassis eingesteckt sind; ist im Kategorie-Ordner **Chassis** enthalten; ergänzt die Kategorie **Räumlich zugeordnete Objekte** |
| **Zugewiesene logische Ports** | \-  | Liste von zugeordneten Objekten mit ihren logischen Ports; ist im Kategorie-Ordner **Layer-2-Netz** enthalten; rückwärtige Kategorie: **Netzwerk → Logische Ports** |
| **Zugewiesene Objekte** | \-  | 1.  Zuordnung von Objekten zu einem Kontakt; ist in den Kategorie-Ordnern **Personen**, **Personengruppen** und **Organisation** enthalten; rückwärtige Kategorie: **Kontaktzuweisung**<br>2.  Zuordnung von Objekten zu einem **Notfallplan**; ist im Kategorie-Ordner **Notfallplan** enthalten; rückwärtige Kategorie: **Notfallplanzuweisung** |
| **Zugewiesene Ports** | \-  | Liste von zugeordneten Objekten mit ihren Ports; ist im Kategorie-Ordner **Layer-2-Netz** enthalten; rückwärtige Kategorie: **Netzwerk → Port** |