<!-- TRANSLATED by md-translate -->
# Kategorien und Attribute

# Catégories et attributs

i-doit bringt bereits über 200 vordefinierte [Kategorien](struktur-it-dokumentation.md) mit. Daraus resultieren über 1000 [Attribute](struktur-it-dokumentation.md), die theoretisch pro [Objekt](struktur-it-dokumentation.md) dokumentiert werden können. Diese Fülle führt zwangsläufig zu der häufig gestellten Frage: "Wofür ist die Kategorie XY mit all ihren Attributen gedacht?" Es geht also darum, welche Konzepte hinter jeder einzelnen Kategorie und jedem einzelnen Attribut stecken.

i-doit apporte déjà plus de 200 [catégories](structure-it-documentation.md) prédéfinies. Il en résulte plus de 1000 [attributs](struktur-it-dokumentation.md) qui peuvent théoriquement être documentés par [objet](struktur-it-dokumentation.md). Cette abondance conduit inévitablement à la question fréquemment posée : "À quoi sert la catégorie XY avec tous ses attributs ?" Il s'agit donc de savoir quels concepts se cachent derrière chaque catégorie et chaque attribut.

!!! info "Flexibilität vs. Vorgaben"
    Anhand der folgenden Tabellen starten wir den Versuch, einen allgemeinen Überblick zu verschaffen. "Versuch" deswegen aufgrund der schieren Masse an vordefinierten Kategorien und Attributen. Für viele Kategorien und Attribute gibt es keine strenge Vorgabe. Daher dienen die folgenden Beschreibungen lediglich als Empfehlung. Über Ergänzungen und Korrekturen, wie folgende Kategorien und Attribute in der Praxis genutzt werden, würden wir uns sehr freuen. Eine E-Mail an [feedback@i-doit.com](mailto:feedback@i-doit.com) genügt.

! !! info "Flexibilité vs. directives"
    Les tableaux suivants tentent de donner un aperçu général. "Tentative" en raison de la masse de catégories et d'attributs prédéfinis. Pour beaucoup de catégories et d'attributs, il n'y a pas de prescriptions strictes. Les descriptions suivantes ne sont donc que des recommandations. Nous serions très heureux de recevoir des compléments et des corrections sur la manière dont les catégories et attributs suivants sont utilisés dans la pratique. Il suffit d'envoyer un e-mail à [feedback@i-doit.com](mailto:feedback@i-doit.com).

## Globale Kategorien

## Catégories globales

| Kategorie | Attribut | Beschreibung |
| --- | --- | --- |
| **Alle Tickets** [![alle-tickets](../assets/images/de/grundlagen/icons/comments.png)](../assets/images/de/grundlagen/icons/comments.png) | -  | [Service Desk](../automatisierung-und-integration/service-desk/index.md): Wenn die Schnittstelle zum Service Desk aktiviert ist, können über diese Kategorie alle referenzierten Tickets zu diesem Objekt angezeigt werden. |
| **Allgemein** | **ID** | Jedes Objekt erhält vom dahinter liegende DBMS MySQL/MariaDB [einen eindeutigen Identifier (ID)](eindeutige-referenzierungen.md). |
| **Allgemein** | **Name** | Jedes Objekt muss einen Namen erhalten. Dieser kann sogar eindeutig pro Mandant oder pro Objekttyp sein. Synonyme sind **Bezeichnung** und **Objekt-Titel**. |
| **Allgemein** | **Zustand** | Über den **Zustand** (oftmals auch **Status** genannt) wird der [Lebenszyklus der Dokumentation](lebens-und-dokumentationszyklus.md) abgebildet. |
| **Allgemein** | **CMDB-Status** | Der CMDB-Status zeigt an, in welchem [Stadium des Lebenszyklus](lebens-und-dokumentationszyklus.md) ein Objekt befindet, beispielsweise **In Betrieb**. |
| **Allgemein** | **Einsatzzweck** | Hat die Komponente einen bestimmten Zweck, kann dieser hier hinterlegt werden. Eine gute Alternative ist das Attribut **Tags**. |
| **Allgemein** | **Kategorie** | Dieses Attribut ist nicht mit den Kategorien in i-doit zu verwechseln. Es wird nicht häufig verwendet und kann durch das Attribut **Tags** ersetzt werden. |
| **Allgemein** | **SYSID** | Neben der **Objekt-ID** ist die **SYSID** ebenfalls für [eine eindeutige Referenzierung](eindeutige-referenzierungen.md) geeignet. Zudem lässt es sich vom Benutzer bearbeiten, während die **Objekt-ID** fest vergeben wird. |
| **Allgemein** | **Tags** | Jedes Objekt kann mit beliebig vielen Stichwörtern versehen werden. Dies ist praktisch, um einem Objekt beispielsweise bestimmte Rollen oder einen Einsatzzweck zuzuordnen. |
| **Allgemein** | **Beschreibung** | Fast jeder Eintrag in einer Kategorie kann am Ende mit einer Beschreibung versehen werden. Hier können zusätzliche Notizen hinterlegt werden. Da es sich hierbei um umstrukturierte Texte handelt, wird eine einfache Auswertung erschwert. |
| **Anschrift** | -  | Hausanschrift; wird oftmals Objekten vom Typ **Gebäude** zugeordnet |
| **Betriebssystem** | -  | Das primär installierte Betriebssystem kann hier hinterlegt werden; ergänzt die Kategorie **Softwarezuweisung** |
| **Beziehungen** [![Beziehungen](../assets/images/de/grundlagen/icons/arrow_out.png)](../assets/images/de/grundlagen/icons/arrow_out.png) | -  | Auflistung aller [Objekt-Beziehungen](objekt-beziehungen.md) |
| **Bilder** | -  | Bildergalerie |
| **Buchhaltung** | -  | Buchhalterische Angaben wie eine **Inventarnummer**, **Kostenstelle** usw. |
| **Cluster** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Cluster**, **Clusterdienstzuweisung**, **Clustermitglieder**, **Clustervitalität**, **Gemeinsame Virtuelle Switche**, **Gemeinsamer Speicher**, **Verwaltungsinstanz**. Virtualisierungs-, Web- und Datenbank-Cluster sind häufige Formen |
| **Cluster -> Clusterdienstzuweisung** | -  | Verknüpfung eines Objekts vom Typ **Clusterdienst**, sprich einer Software, die den **Cluster** repräsentiert oder verwaltet; ist im Kategorie-Ordner **Cluster** enthalten |
| **Cluster -> Clustermitglieder** | -  | Komponenten, die einen **Cluster** bilden; ist im Kategorie-Ordner **Cluster** enthalten; rückwärtige Kategorie: **Clustermitgliedschaften** |
| **Cluster -> Clustervitalität** | -  | Visualisierung und Statistiken zur **Objektvitalität** von Clustermitgliedern; ist im Kategorie-Ordner **Cluster** enthalten |
| **Cluster -> Gemeinsame Virtuelle Switche** | -  | Angaben zu gemeinsam genutzten virtuellen Switches (siehe Kategorie **Virtueller Host → Virtuelle Switche**); ist im Kategorie-Ordner **Cluster** enthalten |
| **Cluster -> Gemeinsamer Speicher** | -  | Visualisierung und Statistiken zu Hosts und LUNs; ist im Kategorie-Ordner **Cluster** enthalten |
| **Cluster -> Verwaltungsinstanz** | -  | Instanz, die den virtuellen Cluster verwaltet; ist im Kategorie-Ordner **Cluster** enthalten; rückwärtige Kategorie: **Virtuell gemanagte Objekte** |
| **Clustermitgliedschaften** | -  | Objekte können einem oder mehreren Clustern zugeordnet werden. Rückwärtige Kategorie: **Clustermitglieder** |
| **CMDB-Explorer** [![cmdb-explorer](../assets/images/de/grundlagen/icons/chart_organisation.png)](../assets/images/de/grundlagen/icons/chart_organisation.png) | -  | Öffnet das Objekt im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) |
| **CPU** | -  | Auflistung von CPU-Sockeln und verbauten CPUs. |
| **CUCM VoIP Leitung** | -  | Angaben zum Cisco Unified Call Manager (CUCM) |
| **CUCM VoIP Telefon** | -  | Angaben zum Cisco Unified Call Manager (CUCM) |
| **Custom Identifier** | -  | Angabe, aus welchem [Datenimport](../daten-konsolidieren/index.md) die Attribute dieses Objekts stammen |
| **Dateizuweisung** | -  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Handbuchzuweisung** und **Notfallplanzuweisung**; rückwärtige Kategorie: **Dateien → Zugewiesene Objekte (Dateien)** |
| **Datenbank Hierarchie** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Datenbank Hierarchie**, **Datenbanken**, **Datenbanktabelle** und **DBMS Information** |
| **Datenbankzuweisung** | -  | Greift eine installierte Applikation (siehe Objekttypen **Anwendungen** und **Systemdienst**) auf eine oder mehrere Datenbanken zu, kann dies hier dokumentiert werden; ergänzt Kategorie **Installation** in den Kategorie-Ordnern **Anwendungen** und **Dienste** |
| **Datensicherung** | -  | Backup: Die Daten dieses Objekts wird von einem anderen Objekt gesichert. Rückwärtige Kategorie: **Datensicherung (zugewiesene Objekte)** |
| **Datensicherung (zugewiesene Objekte)** | -  | Backup: Dieses Objekt sichert Daten anderer Objekte. Rückwärtige Kategorie: **Datensicherung** |
| **E-Mail-Adressen** | -  | Liste von E-Mail-Adressen; oftmals in Verbindung von Kontakten (siehe Objekttypen **Personen**, **Personengruppen** und **Organisation**); ergänzt die Kategorie **Stammdaten** in den Kategorie-Ordnern **Personen**, **Personengruppen** und **Organisation** |
| **Fahrzeug** | -  | Angaben zu einem Fahrzeug, zum Beispiel KfZ-Kennzeichen; eignet sich zur Dokumentation eines Fuhrparks oder eines Dienstwagens; siehe gleichnamigen Objekttyp **Fahrzeug** |
| **Faser/Ader** | -  | Detaillierte Beschreibung einer Glasfaser bzw. von Adern eines Kupferkabels; ist daher häufig dem Objekttyp **Kabel** zugeordnet |
| **Flugzeug** | -  | Angaben zu einem flugfähigen Gerät |
| **Formfaktor** | -  | Angaben, ob eine Hardware 19"-fähig ist. Wenn ja, wie viele Höheneinheiten sie belegt. Hiermit wird auch festgelegt, über wie viele Höheneinheiten ein Serverschrank (Rack) verfügt. Weiterhin können die Dimensionen und das Gewicht angegeben werden. |
| **Freigabe** | -  | Dieses Objekt bietet eine oder mehrere Freigaben (Samba, CIFS, NFS usw.). Rückwärtige Kategorie: **Freigabenzugriff** |
| **Freigabenzugriff** | -  | Dieses Objekt greift auf eine bestehende Freigabe (Samba, CIFS, NFS usw.) eines anderen Objekts zu. Rückwärtige Kategorie: **Freigabe** |
| **Grafikkarte** | -  | Liste von eingebauten Grafikkarten |
| **Gruppenmitgliedschaft** | -  | Zuordnung des Objekts zu einer dynamischen oder statischen Gruppe; siehe Objekttyp **Objektgruppe**; rückwärtige Kategorie: **Objektgruppe** |
| **Handbuchzuweisung** | -  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Dateizuweisung** und **Notfallplanzuweisung**; rückwärtige Kategorie: **Dateien → Zugewiesene Objekte (Dateien)** |
| **Hostadresse** | -  | [IPAM](../anwendungsfaelle/ip-adress-management.md): Liste von konfigurierten IP-Adressen (IPv4/IPv6); zusätzliche Zuordnung von **Hostname**, **Domain**, Netzwerkanschlüssen (siehe Kategorie **Netzwerk** **→ Port**) und Subnetzen (siehe Objekttyp **Layer-3-Netz**); rückwärtige Kategorie: **IP-Liste** |
| **JDisc Custom Attributes** | -  | Benutzerdefinierte Attribute, die aus [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) importiert worden sind, anzeigen und bearbeiten |
| **JDisc Discovery** | -  | Import aus [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) für dieses Objekt durchführen |
| **JDisc Geräte Informationen** | -  | Eine "Read only" Kategorie die "Import Datum", "Als letztes gesehen" und "Letzter Discovery" aus JDisc enthält |
| **Kabelverbindung** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Kabelverbindung** und **Kabel**. |
| **Kabelverbindung -> Kabel** | -  | Angaben zu einem **Kabel**, zum Beispiel Länge und Farbe |
| **Kabelverbindung -> Kabelverbindung** | -  | Zeigt die Kabelverbindung an |
| **Karten** | -  | Angaben zu einer **SIM-Karte** (Verknüpftes Mobiltelefon, Pin, Seriennummer); rückwärtige Kategorie: **Verknüpfte Karten** |
| **Kontaktzuweisung** | -  | Ordnet **Personen**, **Personengruppen**, **Organisationen** o. ä. einem Objekt zu; jede Zuordnung kann mit einer **Rolle** versehen werden, z. B. **Administrator**; rückwärtige Kategorie: **Personen/Personengruppen/Organisation → Zugewiesene Objekte** |
| **Laufwerk** | -  | Dokumentation von konfigurierten Mount Points oder Laufwerksbuchstaben; ergänzt Kategorie-Ordner **Lokaler Massenspeicher**; siehe auch Kategorien **Freigabenzugriff** und **Speichernetze → Logische Geräte (Client)** |
| **LDAP** | **Distinguished Name (DN)** | Wird eine Person oder eine Personengruppe über [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) synchronisiert, wird hier der zugehörige DN hinterlegt. |
| **Letzter eingeloggter Benutzer** | -  | Zuletzt angemeldeter Benutzer; kann durch [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) importiert werden |
| **Logbuch** [![logbuch](../assets/images/de/grundlagen/icons/book_open.png)](../assets/images/de/grundlagen/icons/book_open.png) | -  | [Änderungen an einem Objekt](logbuch.md) |
| **Logischer Standort** | **Übergeordnetes Objekt** | Objekt vom Typ **Person**, die einem Objekt vom Typ **Arbeitsplatz** zugeordnet ist. Rückwärtige Kategorie: **Zugewiesene Arbeitsplätze** |
| **Lokaler Massenspeicher** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Controller**, **Gerät** und **Raid-Verbund**; Auswertung ebendieser Kategorien; ergänzt die Kategorie **Laufwerk**; für Zugriffe auf Freigaben siehe Kategorie **Freigabenzugriff** und für LUNs die Kategorie **Speichernetze → Logische Geräte (Client)** |
| **Lokaler Massenspeicher -> Controller** | -  | Verbaute Onboard oder PCIe-Steckkarten zur Anbindung von Speicherlaufwerken; ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten |
| **Lokaler Massenspeicher -> Gerät** | -  | Liste von Speicherlaufwerken (Festplatten, SSDs usw.); ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten; ergänzt Kategorien **Controller** und **Raid-Verbund** in diesem Kategorie-Ordner |
| **Lokaler Massenspeicher -> Raid-Verbund** | -  | Dokumentation von Hardware- oder Software-RAIDs mit den verschiedenen Level (1, 5, 6, 10 usw.); ist im Kategorie-Ordner **Lokaler Massenspeicher** enthalten |
| **Modell** | -  | Eine der wichtigsten Kategorien eines (Hardware-)Objekts mit Angaben zu **Hersteller**, **Modell** und **Seriennummer** |
| **Monitoring** | -  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): Kategorie-Ordner mit den untergeordneten Kategorien **Livestatus**, **Monitoring** und **NDO**; konfiguriert und aktiviert die Abfrage von aktuellen Informationen zu einem Host |
| **Monitoring -> Livestatus** | -  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): zeigt aktuelle Informationen zu einem Host und dessen Services an, die über die Schnittstelle Livestatus zur Verfügung stehen; ist im Kategorie-Ordner **Monitoring** enthalten und wird dort konfiguriert |
| **Monitoring -> NDO** | -  | [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md): zeigt aktuelle Informationen zu einem Host und dessen Services an, die über die Schnittstelle NDOUtils (bzw. IDOUtils) zur Verfügung stehen; ist im Kategorie-Ordner **Monitoring** enthalten und wird dort konfiguriert |
| **Netzbereich** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Netzbereiche** und **Netzbereichsoptionen**; wird in der Regel dem Objekttyp **Netzbereich** zugeordnet |
| **Netzbereich -> Netzbereichsoptionen** | -  | Angaben zu einem Netzbereich; ist im Kategorie-Ordner **Netzbereich** enthalten |
| **Netzbereich -> Netzbereiche** | -  | Verwendung eines Netzbereichs; ist im Kategorie-Ordner **Netzbereich** enthalten; rückwärtige Kategorie: **Netzbereich → Netzbereiche** |
| **Netzwerk** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Netzwerkport**, **Netzwerk-Interface**, **Logische Netzwerkports**, **Übersicht der Netzwerkports**, **VRRP Mitgliedschaft** und **Netzwerk-Endpunkte** |
| **Netzwerk -> Logische Netzwerkports** | -  | Zusammenfassung von physikalischen Netzwerkanschlüssen (siehe Kategorie **Netzwerk → Netzwerkport**), oftmals Trunking oder Bonding genannt; ist im Kategorie-Ordner **Netzwerk** enthalten |
| **Netzwerk -> Netzwerk-Endpunkte** | - | Ist die zugehörige Option im JDisc Profil aktiviert, werden die Verbindungen werden nicht in die Verkabelung, sondern in die Kategorie "Netzwerk-Endpunkte" importiert. Das ermöglicht zwischen der manuellen Verkabelung und der automatischen Verkabelung durch JDisc zu unterscheiden.
| **Netzwerk -> Netzwerk-Interface** | -  | Zuweisung von physikalischen Netzwerkanschlüssen (siehe Kategorie **Netzwerk → Netzwerkport**) zu internen Anschlüssen eines Geräts, zum Beispiel Onboard oder PCIe-Steckkarte; ist im Kategorie-Ordner **Netzwerk** enthalten |
| **Netzwerk -> Netzwerkport** | -  | Liste von physikalischen Netzwerkanschlüssen (Ethernet); enthält Attribute zur MAC-Adresse, zugeordnete VLANs (siehe Objekttyp **Layer-2-Netz**), zugeordnete IP-Adressen (siehe Kategorie **Hostadresse**) und angeschlossenen Geräten; ist im Kategorie-Ordner **Netzwerk** enthalten; befüllt automatisch die Kategorie **Verkabelung → Anschlüsse** |
| **Netzwerk -> Übersicht der Netzwerkports** | - | Zeigt die Ports gebündelt an. |
| **Netzwerk -> VRRP Mitgliedschaft** | -  | Liste aller logischen Ports (siehe Kategorie **Netzwerk → Logische Netzwerkports**), die einem VRRP-/HSRP-/CARP-Cluster zugeordnet sind; ist im Kategorie-Ordner **Netzwerk** enthalten; rückwärtige Kategorie: **VRRP → Mitglieder** |
| **Netzwerk-Listener** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Listener**, **Netzwerk-Listener** und **Netzwerkverbindungen**; ermöglicht das Dokumentieren von Netzwerkkommunikation zwischen Applikationen; wird häufig (virtueller) Hardware wie Server, VMs oder Clients zugeordnet, auf denen Applikationen installiert sind (siehe Kategorie **Softwarezuweisung**); benötigt zudem IP-Adressen (siehe Kategorie **Hostadresse**) |
| **Netzwerk-Listener -> Netzwerkverbindungen** | -  | Greift eine installierte Applikation (siehe Kategorie **Softwarezuweisung**) über eine IP-basierte Netzwerkverbindung (siehe Kategorie **Hostadresse**) auf eine andere Applikation zu, kann dies hier dokumentiert werden; ist im Kategorie-Ordner **Netzwerk-Listener** enthalten; rückwärtige Kategorie: **Listener** |
| **Notfallplanzuweisung** | -  | Zuweisung von Dateien, die wiederum als Objekte vom Typ **Dateien** abgelegt werden; per Drag'n'Drop können neue Dateien hochgeladen werden; ähnelt den Kategorien **Dateizuweisung** und **Handbuchzuweisung**; rückwärtige Kategorie: **Notfallplan → Notfallplan Komponenten** |
| **Objektbild** | -  | Ändert das Standardbild eines Objekts, das auf jeder Seite dargestellt wird; da das Bild lediglich 150x150 Pixel groß sein darf, ist die Kategorie **Bilder** oftmals besser geeignet |
| **Objektvitalität** | -  | Zeigt die Soll-Auslastung eines Systems an; wertet dazu die Kategorien **CPU**, **Speicher**, **Netzwerk → Port**, **Lokaler Massenspeicher** und **Softwarezuweisung** aus und setzt es mit der Kategorie **Rechenressourcen**, die den zugewiesenen Applikationen zugeordnet ist, in Verhältnis; hat aufgrund einer simplen Addition von Werten oftmals eine geringe Aussagekraft |
| **Passwörter** | -  | Liste von Passwörtern |
| **Prüfung** | -  | Wird eine Komponente regelmäßig geprüft, kann in dieser Kategorie das Ergebnis dieser Prüfung hinterlegt werden. |
| **QinQ CE-VLAN** | -  | Dokumentation von QinQ VLANs (siehe Objekttyp **Layer-2-Netz**) |
| **QinQ SP-VLAN** | -  | Dokumentation von QinQ VLANs (siehe Objekttyp **Layer-2-Netz**) |
| **Räumlich zugeordnete Objekte** | -  | Liste aller physikalisch-räumlich untergeordneten Objekte; rückwärtige Kategorie: **Standort** |
| **Rechenressourcen** | -  | Angaben zu den Systemvoraussetzungen von Applikationen (CPU, Arbeitsspeicher, Speicherplatz, Netzwerkbandbreite); wird von der Kategorie **Objektvitalität** ausgewertet |
| **Rechnung** | -  | Liste von Rechnungen; ergänzt Kategorie **Buchhaltung** |
| **Remote Management Controller** | **Zugewiesenes Objekt** | Verfügt das Objekt über ein Lights Out Management (LOM), kann dies über hierüber verknüpft werden. Häufig dient dazu der gleichnamige Objekttyp **Remote Management Controller**. Rückwärtige Kategorie: **Verwaltete Geräte** |
| **Remote Management Controller** | **Primäre Zugriffs URL** | Verfügt das zugewiesene Objekt über einen Link (siehe Kategorie **Zugriff**), wird dieser hier angezeigt. Bei mehreren Links wird der als primär markierte angezeigt. |
| **Schränke** | - | Visuelle Darstellung räumlich zugeordneter Schränke, daher häufig dem Objekttypen **Raum** zugeordnet |
| **Service** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Service**, **Service Beziehung**, **Service Komponenten**, **Service Logbuch** und **Service Typ**; enthält Angaben zum Service; ist meist dem gleichnamigen Objekttypen **Service** zugewiesen |
| **Service Beziehung** | -  | Wenn Komponenten eines Services untereinander abhängig sind, kann diese Abhängigkeit hier dokumentiert werden. Es werden nur Objekte, die in der Kategorie **Service Komponenten** hinzugefügt sind, aufgelistet. Ist im Kategorie-Ordner **Service** enthalten |
| **Service Komponenten** | -  | Auflistung von Objekten, die dem Service untergeordnet sind; ist im Kategorie-Ordner **Service** enthalten; rückwärtige Kategorie: **Servicezuweisung** |
| **Service Logbuch** | -  | Auflistung von [Logbuch](logbuch.md)-Einträgen aus allen Objekten, die dem Service als Komponente hinzugefügt sind (siehe Kategorie **Service Komponenten**); ist im Kategorie-Ordner **Service** enthalten |
| **Service Typ** | **Typ** | Typisierung von Services; ist im Kategorie-Ordner **Service** enthalten |
| **Servicezuweisung** | -  | Dient das Objekt als Komponente eines Services, kann es hierüber hinzugefügt werden. Ein Objekt kann mehreren Services zugewiesen werden. Rückwärtige Kategorie: **Service Komponenten** |
| **SIM** | -  | Angaben zu einer **SIM-Karte** (Netzanbieter, Tarif, Telefonnummer usw.) |
| **SIM-Karte** | -  | Angaben zu einer **SIM-Karte** und Zuweisung zu einem Mobiltelefon (Netzanbieter, Tarif, Telefonnummer usw.) |
| **SLA** | -  | Angaben zu einem Service Level Agreement (SLA); häufig den Objekttypen **Service** und **Vertrag** zugeordnet |
| **Smartcard Zertifikat** | -  | Angaben zu einer Smartcard |
| **SNMP** | -  | Live-Abfrage von Informationen über das Protokoll SNMP; abgerufene Daten werden **nicht** gespeichert |
| **SOA-Stacks** |     | Angaben zu einer **Middleware** |
| **Softwarezuweisung** | -  | Liste von installierten Applikationen (siehe Objekttypen **Anwendungen**, **Systemdienst**, **Betriebssystem**, **DBMS**); ergänzt die Kategorie **Betriebssystem**; rückwärtige Kategorien: **Anwendungen/DBMS/**Dienste** → Installation** |
| **Soundkarte** | -  | Liste von eingebauten Soundkarten |
| **Speicher** | -  | Liste aller verbauten RAM-Bausteine (Arbeitsspeicher) |
| **Speichernetze** | -  | Kategorie-Ordner mit untergeordneten Kategorien **FC-Port**,  **Hostadapter (HBA)**, **Logische Geräte (Client)**, **Logische Geräte (LDEV Server)** und **Speichernetze**; dient der Dokumentation von Storage Area Networks (SANs) und LUNs |
| **Speichernetze -> FC-Port** | -  | Liste von Fiber Channel Ports; dient der Dokumentation von Storage Area Networks (SANs) und wird häufig den Objekttypen **Speichersystem** und **FC-Switch** zugeordnet; ist im Kategorie-Ordner **Speichernetze** enthalten; befüllt automatisch die Kategorie **Verkabelung → Anschlüsse** |
| **Speichernetze -> Hostadapter (HBA)** | -  | Liste von HBAs, die Fiber Channel Ports (siehe **Speichernetze → FC-Port**) bereitstellen; dient der Dokumentation von Storage Area Networks (SANs); ist im Kategorie-Ordner **Speichernetze** enthalten |
| **Speichernetze -> Logische Geräte (Client)** | -  | Greift ein Objekt auf LUNs eines SANs zu, wird dies hier dokumentiert; ist im Kategorie-Ordner **Speichernetze** enthalten; rückwärtige Kategorie: **Logische Geräte (LDEV Server)** |
| **Speichernetze -> Logische Geräte (LDEV Server)** | -  | Bietet ein Objekt, zum Beispiel ein SAN, anderen Objekten LUNs an, wird dies hier dokumentiert; ist im Kategorie-Ordner **Speichernetze** enthalten; rückwärtige Kategorie: **Logische Geräte (Client)** |
| **Stacking** | -  | Angaben zu einem Hardware-Stack; diese Logik wurde durch den Objekttypen **Stacking** und den Kategorien Stack Mitglieder bzw. Stack Mitgliedschaft ersetzt |
| **Stacking Portübersicht** | - | Zeigt die Ports aller Stack Mitglieder gebündelt an. Bei Klick auf einen Port wird dieser aufgerufen |
| **Stack Mitglieder** | -  | Liste von Objekten, die einem Hardware-Stack zugeordnet sind; häufig dem Objekttypen **Stacking** zugeordnet; rückwärtige Kategorie: **Stack Mitgliedschaft** |
| **Stack Mitgliedschaft** | -  | Zuordnung des Objekts zu einem Hardware-Stack; rückwärtige Kategorie **Stack Mitglieder** |
| **Standort** | -  | Physikalisch-räumliche Zuordnung des Objekts zu einem anderen Objekt; zusätzlich können 19"-fähige Objekte (siehe Kategorie **Formfaktor**) einem Serverschrank (Rack) in der passenden Höheneinheit "eingebaut" werden; Geokoordinaten sind ebenfalls möglich; rückwärtige Kategorie: **Räumlich zugeordnete Objekte** |
| **Status-Planung** [![status-planung](../assets/images/de/grundlagen/icons/calendar.png)](../assets/images/de/grundlagen/icons/calendar.png) | -  | Angabe, wann welcher **CMDB-Status** (siehe Kategorie **Allgemein**) gültig ist |
| **Stromlieferant** | -  | Angaben zu einem Stromerzeuger |
| **Stromverbraucher** | -  | Liste von verbauten Netzteilen; bietet somit die Dokumentation einer redundanten Stromversorgung; befüllt automatisch die Kategorie **Verkablung → Anschlüsse**; ermöglicht die Angabe einer **BTU** (geeignet für die Berechnung der Kühlung/Klimatisierung) |
| **Subskriptionen** | -  | Angaben zu vorhandenen Subskriptionen, welche über die Kategorie **Zugewiesene Benutzer** zu **Personen** zugewiesen wird; Kann über **JDisc** importiert werden |
| **Supernet** | - | Auflistung der Supernetze und Subnetze |
| **Support Ansprüche** | -  | **JDisc** ruft direkt von einigen Herstellern den Status von Support Ansprüchen ab und importiert diese in seine Datenbank. Diese Informationen können von JDisc nach i-doit importiert werden. |
| **Telefon/Fax** | -  | Angaben wie **Telefonnummer** oder **Faxnummer** |
| **TSI-Service** |     | Angaben zu Telefonsystemen von Cisco |
| **Verkabelung** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Anschlüsse**, **Schnittstelle** und **Verkabelung**; bietet verschiedene (grafische) Auswertungen ebendieser Kategorien |
| **Verkabelung -> Anschlüsse** | -  | Hierüber wird die Verkabelung zwischen Komponenten dokumentiert. Es wird zwischen **Eingang** und **Ausgang** unterschieden, die miteinander verbunden werden können. Diese Kategorie wird durch weitere Kategorien automatisch befüllt, zum Beispiel **Port** oder **Stromverbraucher** |
| **Verkabelung -> Schnittstelle** | - | Weitere externe Schnittstellen einer Hardware, die über physikalische Netzwerkports (siehe Kategorie **Netzwerk → Port**) und Netzteile (siehe Kategorie **Stromverbraucher**) hinaus gehen, zum Beispiel Peripherie-Geräte über USB, HDMI, Display Port, VGA usw.; eignet sich damit zur Dokumentation eher "unwichtiger" Komponenten wie Mäuse und Tastaturen |
| **Verknüpfte Karten** | - | Zuweisung einer **SIM-Karte** oder einer **Kryptokarte** zu diesem Objekt |
| **Version** | -  | Liste von Versionen einer Software; wird häufig den Objekttypen **Anwendungen**, **Betriebssystem**, **DBMS** und **Systemdienst** zugeordnet; ergänzt die Kategorien **Anwendungen/DBMS/**Dienste** → Installation** und **Varianten** |
| **Vertragszuweisung** | -  | Zuweisung eines **Vertrags** zu diesem Objekt; kann abweichende Angaben zum Start und Ende eines Vertrags enthalten |
| **Verwaltete Geräte** | -  | Handelt es sich bei dem Objekt um einen Remote Management Controller (siehe gleichnamigen Objekttyp), können hierüber Objekte zugewiesen werden, die über dieses Objekt erreicht administriert können (siehe auch Lights Out Management, LOM). Rückwärtige Kategorie: **Remote Management Controller** |
| **Virtuelle Maschine** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Virtuelle Geräte** und **Virtuelle Maschine**; dient der Dokumentation von virtuellen Umgebungen; rückwärtige Kategorie: **Virtueller Host** |
| **Virtuelle Maschine -> Virtuelle Geräte** | -  | Zuordnung von virtuellen Geräten zu Hardwareressourcen des Hosts aus den Bereichen **Netzwerk**, **Storage** und **Schnittstellen**; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtuelle Maschine** | -  | Angabe, ob es sich bei diesem Objekt um eine virtuelle Maschine handelt; ist im gleichnamigen Kategorie-Ordner **Virtuelle Maschine** enthalten |
| **Virtueller Host** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Gastsysteme**, **Virtueller Host** und **Virtuelle Switche**; wird typischerweise einem Host für virtuelle Maschinen (siehe Objekttyp **Virtueller Host**) oder einem **Cluster** zugeordnet; rückwärtige Kategorie: Virtuelle Maschine |
| **Virtueller Host -> Gastsysteme** | -  | Zugeordnete virtuelle Maschinen zu einem Host; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtueller Host -> Virtuelle Switche** | -  | Virtuelle Netzwerk-Switche in einer virtuellen Umgebung; ist im Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtueller Host** | -  | Angaben zum Host oder Cluster einer virtuellen Umgebung; ist im gleichnamigen Kategorie-Ordner **Virtueller Host** enthalten |
| **Virtuell gemanagte Objekte** | -  | Liste von Objekten, die von dieser Instanz verwaltet werden; rückwärtige Kategorie: **Cluster → Verwaltungsinstanz** |
| **VRRP** | -  | Kategorie-Ordner mit der untergeordneten Kategorien **Mitglieder** und **VRRP**; enthält Angaben zu den Protokollen VRRP/HSRP/CARP |
| **VRRP -> VRRP Mitglieder** | -  | Liste von Objekten mit ihren logischen Ports (siehe Kategorie **Netzwerk → Logische Netzwerkports**), die einem VRRP-/HSRP-/CARP-Cluster zugeordnet sind; ist im Kategorie-Ordner **VRRP** enthalten; rückwärtige Kategorie: **VRRP Mitgliedschaft** |
| **WAN-Verbindung** | -  | Attribute wie Up- und Download-Bandbreite einer Internet-Anbindung; oftmals dem Objekttyp **WAN-Leitung** zugeordnet |
| **Zertifikat** | -  | Dokumentation von x.509-Zertifikaten |
| **Zugewiesene Abonnente** | -  | Rückwärtige Kategorie der Kategorie **Zugewiesene Benutzer** |
| **Zugewiesene Arbeitsplätze** | -  | Eine **Person** kann einem oder mehreren Objekten vom Typ **Arbeitsplatz** zugeordnet werden. Rückwärtige Kategorie: **Logischer Standort** |
| **Zugewiesene Benutzer** | -  | Zuordnung von Subskriptionen zu Personen; rückwärtige Kategorie: **Zugewiesene Abonnente** |
| **Zugewiesene Endgeräte** |     | Objekte, die einem Objekt vom Typ **Arbeitsplatz** zugewiesen werden. Rückwärtige Kategorie: **Zugewiesener Arbeitsplatz** |
| **Zugewiesene Objekte (Dateien)** | -  | Zuordnung von Objekten zu einer Datei; ist im Kategorie-Ordner **Dateien** enthalten; rückwärtige Kategorie: **Dateien → Zugewiesene Objekte (Dateien)** |
| **Zugewiesene SIM-Karten** | -  | Liste von SIM-Karten (siehe Objekttyp **SIM-Karte**); rückwärtige Kategorie: **Karten** |
| **Zugewiesener Arbeitsplatz** | -  | Das Objekt mit dieser Kategorie wird hierüber einem **Arbeitsplatz** zugewiesen. Rückwärtige Kategorie: **Zugewiesene Endgeräte** |
| **Zugriff** | -  | Setzen von beliebigen Links; bietet eine einfache, aber schnelle Verknüpfung zwischen verschiedenen Applikationen; das in der URL verwendete Protokoll ist beliebig, muss aber dem Web Browser bekannt sein |

| catégorie | attribut | description |
| --- | --- | --- |
| **Tous les tickets** [ ![tous les tickets](../assets/images/fr/bases/icons/comments.png)](../assets/images/fr/bases/icons/comments.png) | - | [Service Desk](../automatisation-et-intégration/service-desk/index.md) : Si l'interface avec le Service Desk est activée, cette catégorie permet d'afficher tous les tickets référencés pour cet objet. |
| **Général** | **ID** | Chaque objet reçoit du SGBD MySQL/MariaDB sous-jacent [un identifiant unique (ID)](unique-references.md). |
| **Général** | **Nom** | Chaque objet doit recevoir un nom. Celui-ci peut même être unique par mandant ou par type d'objet. Les synonymes sont **désignation** et **titre de l'objet**. |
| **Général** | **Etat** | Le [cycle de vie de la documentation](lebens-und-dokumentationszyklus.md) est représenté par le **Etat** (souvent aussi appelé **Status**). |
| **Général** | **État de la CMDB** | L'état de la CMDB indique dans quelle [étape du cycle de vie](cycle de vie et de documentation.md) se trouve un objet, par exemple **En service**. |
| **Général** | **Utilisation** | Si le composant a une utilisation spécifique, celle-ci peut être indiquée ici. Une bonne alternative est l'attribut **Tags**. |
| **Général** | **Catégorie** | Cet attribut ne doit pas être confondu avec les catégories dans i-doit. Il n'est pas souvent utilisé et peut être remplacé par l'attribut **Tags**. |
| **Général** | **SYSID** | Outre l'ID **Objet**, le **SYSID** convient également pour [un référencement unique](références-uniques.md). De plus, il peut être modifié par l'utilisateur, alors que le **Object-ID** est attribué de manière fixe. |
| **Général** | **Tags** | Chaque objet peut être doté d'un nombre illimité de mots-clés. Ceci est pratique pour attribuer à un objet des rôles spécifiques ou une utilisation par exemple. |
| **Général** | **Description** | Presque chaque entrée dans une catégorie peut être dotée d'une description à la fin. Des notes supplémentaires peuvent être déposées ici. Comme il s'agit ici de textes restructurés, une évaluation simple est rendue plus difficile. |
| **Adresse** | - | Adresse de la maison ; est souvent attribuée aux objets de type **Bâtiment** |
| **Système d'exploitation** | - | Le système d'exploitation installé en premier lieu peut être consigné ici ; complète la catégorie **Attribution de logiciel** |
| **Relations** [ ![Relations](../assets/images/fr/bases/icons/arrow_out.png)](../assets/images/fr/bases/icons/arrow_out.png) | - | Liste de toutes les [relations entre objets](objekt-beziehungen.md) |
| **Images** | - | Galerie d'images |
| **Comptabilité** | - | Données comptables telles qu'un **numéro d'inventaire**, un **centre de coûts**, etc. |
| **Cluster** | - | Dossier de catégorie avec les sous-catégories **Cluster**, **Attribution de service de cluster**, **Membres du cluster**, **Vitesse du cluster**, **Commutateurs virtuels partagés**, **Mémoire partagée**, **Instance de gestion**. Les clusters de virtualisation, les clusters web et les clusters de bases de données sont des formes fréquentes |
| - | Association d'un objet de type **service de cluster**, c'est-à-dire d'un logiciel qui représente ou gère le **cluster** ; est contenu dans le dossier de catégorie **cluster** |
| **Cluster -> Membres du cluster** | - | Composants qui forment un **Cluster** ; est contenu dans le dossier de catégorie **Cluster** ; catégorie arrière : **Membres du cluster** |
| **Cluster -> Vitalité du cluster** | - | Visualisation et statistiques sur la **vitalité des objets** des membres du cluster ; est contenu dans le dossier de catégorie **Cluster** |
| **Cluster -> Commutateurs virtuels partagés** | - | Données sur les commutateurs virtuels partagés (voir catégorie **Hôte virtuel → Commutateurs virtuels**) ; est contenu dans le dossier de catégorie **Cluster** |
| **Cluster -> Mémoire partagée** | - | Visualisation et statistiques sur les hôtes et les LUN ; est contenu dans le dossier de catégorie **Cluster** |
| **Cluster -> Instance de gestion** | - | Instance qui gère le cluster virtuel ; est contenue dans le dossier de catégorie **Cluster** ; catégorie arrière : **Objets gérés virtuellement** |
| **Adhésions aux clusters** | - | Les objets peuvent être attribués à un ou plusieurs clusters. Catégorie arrière : **Membres de clusters** |
| **CMDB-Explorer** [ ![cmdb-explorer](../assets/images/fr/bases/icons/chart_organisation.png)](../assets/images/fr/bases/icons/chart_organisation.png) | - | Ouvre l'objet dans [CMDB-Explorer](../explorations/cmdb-explorer/index.md) |
| **CPU** | - | Liste des sockets CPU et des CPU installés. |
| **CUCM VoIP Line** | - | Informations sur le Cisco Unified Call Manager (CUCM) |
| **CUCM Téléphone VoIP** | - | Données relatives au Cisco Unified Call Manager (CUCM) |
| **Custom Identifier** | - | Indication de laquelle [importation de données](../consolidation-données/index.md) les attributs de cet objet proviennent |
| **Affectation de fichiers** | - | Affectation de fichiers, qui sont à leur tour stockés en tant qu'objets de type **Fichiers** ; de nouveaux fichiers peuvent être téléchargés par glisser-déposer ; ressemble aux catégories **Affectation de manuels** et **Affectation de plans d'urgence** ; catégorie arrière : **Fichiers → Objets assignés (fichiers)** |
| **Hiérarchie de base de données** | -| Dossier de catégorie avec les sous-catégories **Hiérarchie de base de données**, **Bases de données**, **Table de base de données** et **Information SGBD** |
| **Attribution de base de données** | - | Si une application installée (voir types d'objets **Applications** et **Service système**) accède à une ou plusieurs bases de données, cela peut être documenté ici ; complète la catégorie **Installation** dans les dossiers de catégorie **Applications** et **Services** |
| **Sauvegarde des données** | - | Sauvegarde : les données de cet objet sont sauvegardées par un autre objet. Catégorie arrière : **Sauvegarde des données (objets assignés)** |
| **Sauvegarde des données (objets assignés)** | - | Sauvegarde : Cet objet sauvegarde les données d'autres objets. Catégorie arrière : **Sauvegarde des données** |
| **Adresses e-mail** | - | Liste d'adresses e-mail ; souvent en relation avec des contacts (voir types d'objets **Personnes**, **Groupes de personnes** et **Organisation**) ; complète la catégorie **Données de base** dans les dossiers de catégories **Personnes**, **Groupes de personnes** et **Organisation** |
| **Véhicule** | - | Données relatives à un véhicule, par exemple numéro d'immatriculation ; convient à la documentation d'un parc de véhicules ou d'un véhicule de service ; voir type d'objet du même nom **Véhicule** |
| **Fibre/brin** | - | Description détaillée d'une fibre optique ou des brins d'un câble de cuivre ; est donc souvent attribué au type d'objet **Câble** |
| **Avion** | - | Informations sur un appareil capable de voler |
| **Facteur de forme** | - | Indications permettant de savoir si un matériel est compatible 19". Si oui, combien d'unités de hauteur il occupe. Cela permet également de définir le nombre d'unités de hauteur dont dispose une armoire de serveur (rack). En outre, les dimensions et le poids peuvent être indiqués. |
| **Partage** | - | Cet objet offre un ou plusieurs partages (Samba, CIFS, NFS, etc.). Catégorie arrière : **Accès aux partages** |
| **Accès au partage** | - | Cet objet accède à un partage existant (Samba, CIFS, NFS, etc.) d'un autre objet. Catégorie arrière : **Partage** |
| **Carte graphique** | - | Liste des cartes graphiques intégrées |
| **Appartenance à un groupe** | - | Affectation de l'objet à un groupe dynamique ou statique ; voir type d'objet **Groupe d'objets** ; catégorie arrière : **groupe d'objets** |
| **Affectation de manuels** | - | Affectation de fichiers, qui sont à leur tour classés comme objets de type **Fichiers** ; de nouveaux fichiers peuvent être téléchargés par glisser-déposer ; ressemble aux catégories **Affectation de fichiers** et **Affectation de plans de secours** ; catégorie arrière : **Fichiers → Objets assignés (fichiers)** |
| **Adresse hôte** | - | [IPAM](../applicationfaelle/ip-adress-management.md) : Liste d'adresses IP configurées (IPv4/IPv6) ; attribution supplémentaire de **nom d'hôte**, **domaine**, ports réseau (voir catégorie **réseau** **→ port**) et sous-réseaux (voir type d'objet **réseau de couche 3**) ; catégorie arrière : **Liste IP** |
| **JDisc Custom Attributes** | - | Afficher et modifier les attributs personnalisés importés de [JDisc Discovery](../consolidation des données/jdisc-discovery.md) |
| **JDisc Discovery** | - | Effectuer une importation depuis [JDisc Discovery](../consolidation des données/jdisc-discovery.md) pour cet objet |
| **Informations sur le périphérique JDisc** | - | Une catégorie "lecture seule" qui contient "Date d'importation", "Vu en dernier" et "Dernière découverte" de JDisc |
| **Connexion par câble** | - | Dossier de catégories avec les sous-catégories **Connexion par câble** et **Câble**. |
| **Connexion par câble -> Câble** | - | Informations sur un **Câble**, par exemple longueur et couleur |
| **Connexion de câble -> Connexion de câble** | - | Indique la connexion de câble |
| **Cartes** | - | Informations sur une **Carte SIM** (téléphone mobile associé, pin, numéro de série) ; catégorie arrière : **cartes associées** |
| **Attribution de contact** | - | Attribue **Personnes**, **Groupes de personnes**, **Organisations** ou similaires à un objet ; chaque attribution peut être dotée d'un **Rôle**, par ex. **Administrateur** ; catégorie arrière : **Personnes/Groupes de personnes/Organisation → Objets attribués** |
| **Lecteur** | - | Documentation des points de montage configurés ou des lettres de lecteur ; complète le dossier de catégorie **Mémoire de masse locale** ; voir aussi les catégories **Accès aux partages** et **Réseaux de stockage → Périphériques logiques (client)** |
| **LDAP** | **Distinguished Name (DN)** | Si une personne ou un groupe de personnes est synchronisé via [LDAP/AD](../authentification et gestion des utilisateurs/ldap-verzeichnis/index.md), le DN correspondant est enregistré ici. |
| **Dernier utilisateur connecté** | - | Dernier utilisateur connecté ; peut être importé par [JDisc Discovery](../consolidation-données/jdisc-discovery.md) |
| **Logbook** [ ![logbook](../assets/images/fr/bases/icons/book_open.png)](../assets/images/fr/bases/icons/book_open.png) | - | [Modifications apportées à un objet](logbook.md) |
| **Situation logique** | **Objet parent** | Objet de type **Personne** associé à un objet de type **Travail**. Catégorie arrière : **Travail assigné** |
| **Mémoire de masse locale** | -| Dossier de catégorie avec les catégories subordonnées **Contrôleur**, **Périphérique** et **Réseau Raid** ; évaluation de ces mêmes catégories ; complète la catégorie **Lecteur** ; pour les accès aux partages, voir la catégorie **Accès aux partages** et pour les LUN, la catégorie **Réseaux de stockage → Périphériques logiques (client)** |
| **Mémoire de masse locale -> Contrôleur** | - | Cartes enfichables embarquées ou PCIe pour la connexion de lecteurs de stockage ; est inclus dans le dossier de catégorie **Mémoire de masse locale** |
| - | Liste de lecteurs de stockage (disques durs, SSD, etc.) ; est contenue dans le dossier de catégorie **Mémoire de masse locale** ; complète les catégories **Contrôleur** et **Raid-Verbund** dans ce dossier de catégorie |
| - | Documentation sur les RAIDs matériels ou logiciels avec les différents niveaux (1, 5, 6, 10, etc.) ; est contenu dans le dossier de catégorie **Mémoire de masse locale** |
| **Modèle** | - | Une des catégories les plus importantes d'un objet (matériel) avec des informations sur **le fabricant**, **le modèle** et **le numéro de série** |
| **Monitoring** | - | [Network Monitoring](../automatisation-et-intégration/network-monitoring/index.md) : Dossier de catégories avec les sous-catégories **Etat vivant**, **Monitoring** et **NDO** ; configure et active la demande d'informations actuelles sur un hôte |
| **Monitoring -> Livestatus** | - | [Network Monitoring](../automatisation-et-intégration/network-monitoring/index.md) : affiche des informations actuelles sur un hôte et ses services, disponibles via l'interface Livestatus ; est contenu et configuré dans le dossier de catégorie **Monitoring** |
| **Monitoring -> NDO** | - | [Network Monitoring](../automatisation-et-intégration/network-monitoring/index.md) : affiche des informations actuelles sur un hôte et ses services, qui sont disponibles via l'interface NDOUtils (ou IDOUtils) ; est contenu dans le dossier de catégorie **Monitoring** et y est configuré |
| **Zone de réseau** | - | Dossier de catégorie avec les catégories subordonnées **Zones de réseau** et **Options de zone de réseau** ; est généralement attribué au type d'objet **Zone de réseau** |
| - | Indications sur une zone de réseau ; est contenue dans le dossier de catégorie **zone de réseau** |
| - | Utilisation d'une plage de réseau ; est contenue dans le dossier de catégorie **plage de réseau** ; catégorie arrière : **Zone de réseau → Zones de réseau** |
| **Réseau** | - | Dossier de catégorie avec les sous-catégories **Port réseau**, **Interface réseau**, **Ports réseau logiques**, **Aperçu des ports réseau**, **Adhésion VRP** et **Points d'extrémité réseau** |
| **Réseau -> Ports réseau logiques** | - | Regroupement de ports réseau physiques (voir catégorie **Réseau → Ports réseau**), souvent appelé trunking ou bonding ; est contenu dans le dossier de catégorie **Réseau** |
| **Réseau -> Points d'extrémité réseau** | - | Si l'option correspondante est activée dans le profil JDisc, les connexions ne sont pas importées dans le câblage, mais dans la catégorie "Points d'extrémité réseau". Cela permet de faire la différence entre le câblage manuel et le câblage automatique par JDisc.
| **Réseau -> Interface réseau** | - | Attribution de ports réseau physiques (voir catégorie **Réseau → Port réseau**) à des ports internes d'un périphérique, par exemple carte embarquée ou carte enfichable PCIe ; est inclus dans le dossier de catégorie **Réseau** |
| **Réseau -> Port réseau** | -| Liste des ports réseau physiques (Ethernet) ; contient des attributs sur l'adresse MAC, les VLAN attribués (voir type d'objet **Réseau couche 2**), les adresses IP attribuées (voir catégorie **Adresse hôte**) et les appareils connectés ; est contenu dans le dossier de catégorie **Réseau** ; remplit automatiquement la catégorie **Câblage → Ports** |
| **Réseau -> Aperçu des ports réseau** | - | Affiche les ports de manière groupée. |
| **Réseau -> Adhésion VRRP** | - | Liste de tous les ports logiques (voir la catégorie **Réseau → Ports réseau logiques**) associés à un cluster VRRP/HSRP/CARP ; est inclus dans le dossier de catégorie **Réseau** ; catégorie arrière : **VRRP → membres** |
| **Listener réseau** | -| Dossier de catégorie avec les sous-catégories **Listener**, **Listener réseau** et **Liens réseau** ; permet de documenter les communications réseau entre applications ; est souvent attribué à du matériel (virtuel) comme des serveurs, des VM ou des clients sur lesquels des applications sont installées (voir la catégorie **Attribution de logiciels**) ; nécessite également des adresses IP (voir la catégorie **Adresse hôte**) |
| - | Si une application installée (voir catégorie **Attribution de logiciel**) accède à une autre application via une connexion réseau basée sur IP (voir catégorie **Adresse hôte**), cela peut être documenté ici ; est contenu dans le dossier de catégorie **Listener réseau** ; catégorie arrière : **Listener** |
| **Affectation de plan d'urgence** | - | Affectation de fichiers, qui sont à leur tour stockés comme objets de type **Fichiers** ; de nouveaux fichiers peuvent être téléchargés par glisser-déposer ; ressemble aux catégories **Affectation de fichiers** et **Affectation de manuels** ; catégorie arrière : **Plan d'urgence → Plan d'urgence Composants** |
| **Image de l'objet** | - | Change l'image par défaut d'un objet qui sera affichée sur chaque page ; comme l'image ne peut faire que 150x150 pixels, la catégorie **Images** est souvent plus appropriée |
| **Vitesse de l'objet** | - | Indique l'utilisation théorique d'un système ; évalue pour cela les catégories **CPU**, **Mémoire**, **Réseau → Port**, **Mémoire de masse locale** et **Attribution de logiciel** et le met en relation avec la catégorie **Ressources de calcul** attribuée aux applications attribuées ; a souvent peu de valeur en raison d'une simple addition de valeurs |
| **Mots de passe** | - | Liste de mots de passe |
| **Contrôle** | - | Si un composant est régulièrement contrôlé, le résultat de ce contrôle peut être consigné dans cette catégorie. |
| **QinQ CE-VLAN** | - | Documentation des VLAN QinQ (voir type d'objet **Réseau de couche 2**) |
| **QinQ SP-VLAN** | - | Documentation des VLAN QinQ (voir type d'objet **Réseau couche 2**) |
| **Objets spatialement assignés** | - | Liste de tous les objets physiquement subordonnés dans l'espace ; catégorie arrière : **Site** |
| **Ressources de calcul** | - | Indications sur les exigences système des applications (CPU, mémoire vive, espace mémoire, bande passante réseau) ; est évalué par la catégorie **Vitalité de l'objet** |
| **Facture** | - | Liste de factures ; complète la catégorie **Comptabilité** |
| **Contrôleur de gestion à distance** | **Objet attribué** | Si l'objet dispose d'une gestion Lights Out (LOM), celle-ci peut être reliée par ce biais. Le type d'objet du même nom **Remote Management Controller** est souvent utilisé à cet effet. Catégorie arrière : **Périphériques gérés** |
| **Contrôleur de gestion à distance** | **URL d'accès primaire** | Si l'objet attribué dispose d'un lien (voir catégorie **Accès**), celui-ci est affiché ici. S'il y a plusieurs liens, celui qui est marqué comme primaire est affiché. |
| **Armoires** | - | Représentation visuelle des armoires affectées à un espace, donc souvent attribué au type d'objet **Espace** |
| **Service** | - | Dossier de catégorie avec les sous-catégories **Service**, **Relation de service**, **Composants de service**, **Journal de service** et **Type de service** ; contient des indications sur le service ; est le plus souvent attribué au type d'objet du même nom **Service** |
| **Relation de service** | - | Si les composants d'un service sont dépendants les uns des autres, cette dépendance peut être documentée ici. Seuls les objets ajoutés dans la catégorie **Service Components** sont listés. Est contenu dans le dossier de catégorie **Service** |
| **Service Components** | - | Liste des objets subordonnés au service ; est contenu dans le dossier de catégorie **Service** ; catégorie arrière : **assignation de service** |
| **Journal de bord du service** | - | Liste des entrées [Journal de bord](logbuch.md) de tous les objets ajoutés au service en tant que composants (voir catégorie **Composants du service**) ; est contenu dans le dossier de catégorie **Service** |
| **Type de service** | **Type** | Typage des services ; est contenu dans le dossier de catégorie **Service** |
| **Attribution de service** | - | Si l'objet sert de composant d'un service, il peut être ajouté par ce biais. Un objet peut être attribué à plusieurs services. Catégorie arrière : **Composants de service** |
| **SIM** | - | Informations sur une **Carte SIM** (opérateur, tarif, numéro de téléphone, etc.) |
| **Carte SIM** | - | Données relatives à une **Carte SIM** et attribution à un téléphone mobile (fournisseur de réseau, tarif, numéro de téléphone, etc.) |
| **SLA** | - | Données relatives à un Service Level Agreement (SLA) ; souvent attribuées aux types d'objets **Service** et **Contrat** |
| **Certificat de carte à puce** | - | Données relatives à une carte à puce |
| **SNMP** | - | Demande d'informations en direct via le protocole SNMP ; les données demandées sont **non** enregistrées |
| **SOA-Stacks** | | Données relatives à un **middleware** |
| **Affectation du logiciel** | - | Liste des applications installées (voir types d'objets **Applications**, **Service système**, **Système d'exploitation**, **Système de gestion de base de données**) ; complète la catégorie **Système d'exploitation** ; catégories arrière : **Applications/DBMS/**Services** → Installation** |
| **Carte son** | - | Liste des cartes son intégrées |
| **Mémoire** | - | Liste de tous les blocs de RAM (mémoire vive) installés |
| **Réseaux de stockage** | - | Dossier de catégorie avec sous-catégories **PortFC**, **Adaptateur hôte (HBA)**, **Périphériques logiques (client)**, **Périphériques logiques (serveur LDEV)** et **Réseaux de stockage** ; sert à la documentation des Storage Area Networks (SAN) et des LUN |
| **Réseaux de stockage -> Port FC** | - | Liste de ports Fiber Channel ; sert à la documentation des Storage Area Networks (SANs) et est souvent attribué aux types d'objets **Système de stockage** et **Commutateur FC** ; est contenu dans le dossier de catégorie **Réseaux de stockage** ; remplit automatiquement la catégorie **Câblage → Connexions** |
| **Réseaux de stockage -> Adaptateurs hôte (HBA)** | - | Liste des HBA qui fournissent des ports Fiber Channel (voir **Réseaux de stockage → Port FC**) ; sert à la documentation des Storage Area Networks (SAN) ; est contenu dans le dossier de catégorie **Réseaux de stockage** |
| - | Si un objet accède aux LUN d'un SAN, ceci est documenté ici ; est contenu dans le dossier de catégorie **Réseaux de stockage** ; catégorie arrière : **Périphériques logiques (serveurs LDEV)** |
| - | Si un objet, par exemple un SAN, offre des LUN à d'autres objets, ceci est documenté ici ; est contenu dans le dossier de catégorie **Réseaux de stockage** ; catégorie arrière : **Périphériques logiques (client)** |
| **Stacking** | - | Informations sur une pile matérielle ; cette logique a été remplacée par le type d'objet **Stacking** et les catégories Membres de la pile ou Membre de la pile |
| **Stacking Aperçu des ports** | - | Affiche les ports de tous les membres de la pile de manière groupée. En cliquant sur un port, celui-ci est appelé |
| **Membres de la pile** | - | Liste d'objets associés à une pile matérielle ; souvent associés au type d'objet **Stacking** ; catégorie arrière : **Membre de la pile** |
| **Membre de la pile** | - | Association de l'objet à une pile matérielle ; catégorie arrière **Membres de la pile** |
| **Emplacement** | - | Association physique et spatiale de l'objet à un autre objet ; en outre, les objets compatibles 19" (voir catégorie **Facteur de forme**) peuvent être "intégrés" à une armoire de serveur (rack) dans l'unité de hauteur appropriée ; les coordonnées géographiques sont également possibles ; catégorie arrière : **Objets spatialement affectés** |
| **Planification de l'état** [ ![planification de l'état](../assets/images/fr/bases/icônes/calendrier.png)](../assets/images/fr/bases/icônes/calendrier.png) | - | Indication du moment où quel **état de la CMDB** (voir catégorie **Général**) est valide |
| **Fournisseur de courant** | - | Indications concernant un générateur de courant |
| **Consommateur d'électricité** | - | Liste des blocs d'alimentation installés ; offre ainsi la documentation d'une alimentation redondante ; remplit automatiquement la catégorie **Câblage → Connexions** ; permet d'indiquer un **BTU** (approprié pour le calcul du refroidissement/de la climatisation) |
| **Souscriptions** | - | Indications sur les souscriptions existantes, qui sont attribuées à des **personnes** via la catégorie **Utilisateurs attribués** ; Peut être importé via **JDisc** |
| **Supernet** | - | Liste des super-réseaux et sous-réseaux |
| **Réclamations de support** | - | **JDisc** récupère directement auprès de certains fabricants l'état des réclamations de support et les importe dans sa base de données. Ces informations peuvent être importées par JDisc dans i-doit. |
| **Téléphone/Fax** | - | Données telles que **numéro de téléphone** ou **numéro de fax** |
| **ServiceTSI** | | Indications sur les systèmes téléphoniques de Cisco |
| **Câblage** | - | Dossier de catégories avec les sous-catégories **Ports**, **Interface** et **Câblage** ; offre différentes évaluations (graphiques) de ces catégories |
| **Câblage -> Connexions** | - | Le câblage entre les composants est documenté ici. Une distinction est faite entre **entrée** et **sortie** qui peuvent être reliées entre elles. Cette catégorie est automatiquement remplie par d'autres catégories, par exemple **Port** ou **Consommateur d'électricité** |
| **Câblage -> Interface** | - | Autres interfaces externes d'un matériel, qui vont au-delà des ports réseau physiques (voir catégorie **Réseau → Port**) et des blocs d'alimentation (voir catégorie **Consommateur d'énergie**), par exemple des périphériques via USB, HDMI, Display Port, VGA, etc. ; convient donc à la documentation de composants plutôt "insignifiants" comme les souris et les claviers |
| **Cartes associées** | - | Attribution d'une **carte SIM** ou d'une **carte cryptographique** à cet objet |
| **Version** | - | Liste des versions d'un logiciel ; est souvent attribuée aux types d'objets **Applications**, **Système d'exploitation**, **Système de gestion de base de données** et **Service système** ; complète les catégories **Applications/Système de gestion de base de données/**Services** → Installation** et **Variantes** |
| **Affectation de contrat** | - | Affectation d'un **contrat** à cet objet ; peut contenir des informations différentes sur le début et la fin d'un contrat |
| **Appareils gérés** | - | Si l'objet est un Remote Management Controller (voir type d'objet du même nom), il permet d'attribuer des objets qui peuvent être administrés par cet objet (voir aussi Lights Out Management, LOM). Catégorie arrière : **Contrôleur de gestion à distance** |
| **Machine virtuelle** | - | Dossier de catégorie avec les catégories subordonnées **Périphériques virtuels** et **Machine virtuelle** ; sert à la documentation des environnements virtuels ; catégorie arrière : **Hôte virtuel** |
| **Machine virtuelle -> Périphériques virtuels** | - | Attribution de périphériques virtuels aux ressources matérielles de l'hôte dans les domaines **Réseau**, **Storage** et **Interfaces** ; est contenue dans le dossier de catégorie **Hôte virtuel** |
| **Machine virtuelle** | - | Indication si cet objet est une machine virtuelle ; est contenu dans le dossier de catégorie du même nom **Machine virtuelle** |
| **Hôte virtuel** | - | Dossier de catégorie avec les catégories subordonnées **Systèmes hôtes**, **Hôte virtuel** et **Commutateurs virtuels** ; est typiquement attribué à un hôte pour machines virtuelles (voir type d'objet **Hôte virtuel**) ou à un **Cluster** ; catégorie arrière : Machine virtuelle |
| **Hôte virtuel -> Systèmes invités** | - | Machines virtuelles affectées à un hôte ; est inclus dans le dossier de catégorie **Hôte virtuel** |
| - | Commutateurs de réseau virtuels dans un environnement virtuel ; est inclus dans le dossier de catégorie **Hôte virtuel** |
| **Hôte virtuel** | - | Informations sur l'hôte ou le cluster d'un environnement virtuel ; est contenu dans le dossier de catégorie du même nom **Hôte virtuel** |
| **Objets gérés virtuellement** | - | Liste d'objets gérés par cette instance ; catégorie arrière : **Cluster → Instance de gestion** |
| **VRRP** | - | Dossier de catégorie avec les catégories subordonnées **Membres** et **VRRP** ; contient des informations sur les protocoles VRRP/HSRP/CARP |
| **VRRP -> VRRP membres** | - | Liste d'objets avec leurs ports logiques (voir catégorie **Réseau → Ports réseau logiques**) associés à un cluster VRRP/HSRP/CARP ; est inclus dans le dossier de catégorie **VRRP** ; catégorie arrière : **Adhésion VRRP** |
| **Lien WAN** | - | Attributs tels que la bande passante montante et descendante d'une connexion Internet ; souvent attribué au type d'objet **Ligne WAN** |
| **Certificat** | - | Documentation des certificats x.509 |
| **Abonnés assignés** | - | Catégorie arrière de la catégorie **Utilisateurs assignés** |
| **Travail assigné** | - | Une **personne** peut être assignée à un ou plusieurs objets de type **Travail**. Catégorie arrière : **emplacement logique** |
| **Utilisateurs assignés** | - | Affectation d'abonnements à des personnes ; catégorie arrière : **abonnés attribués** |
| **Terminaux assignés** | | Objets assignés à un objet de type **Poste de travail**. Catégorie arrière : **Travail assigné** |
| **Objets assignés (fichiers)** | - | Affectation d'objets à un fichier ; est contenu dans le dossier de catégorie **Fichiers** ; catégorie arrière : **Fichiers → Objets attribués (fichiers)** |
| **Cartes SIM attribuées** | - | Liste de cartes SIM (voir type d'objet **Carte SIM**) ; catégorie arrière : **Cartes** |
| **Poste de travail attribué** | - | L'objet avec cette catégorie est attribué ici à un **poste de travail**. Catégorie arrière : **Terminaux assignés** |
| **Accès** | - | Mise en place de liens quelconques ; offre un lien simple mais rapide entre différentes applications ; le protocole utilisé dans l'URL est quelconque, mais doit être connu du navigateur Web |

## Spezifische Kategorien

## Catégories spécifiques

| Kategorie | Attribute | Beschreibung |
| --- | --- | --- |
| **Anwendungen** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Anwendungen**, **Installation** und **Varianten**; enthält Angaben zur Applikation, beispielsweise den **Hersteller** |
| **Betriebssysteme** | - | Kategorie-Order mit untergeordneten Kategorien **Betriebssysteme**, **Installation** und **Varianten**; enthält Angaben zum Betriebssystem |
| **Arbeitsplatzsystem** | -  | Angaben zu einem Computer, zum Beispiel **Typ des Clients** (Laptop, Desktop usw.) oder **Tastatur-Layout**; häufig dem Objekttyp **Client** zugeordnet |
| **Beziehungsdetails** | -  | Angaben zu einer [Objekt-Beziehung](objekt-beziehungen.md) |
| **Chassis** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Chassis Ansicht**, **Slots**, **Chassis Verkabelung** und **Zugewiesene Geräte**; häufig den Objekttypen **Blade Chassis** und **Switch Chassis** zugeordnet |
| **Chassis -> Chassis Ansicht**  | Visuelle Darstellung eines Blade oder Switch Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Chassis -> Chassis Verkabelung** | -  | Interne Vernetzung innerhalb eines Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Chassis -> Slots** | -  | Liste von verfügbaren Slots in einem Blade oder Switch Chassis; ist im Kategorie-Ordner **Chassis** enthalten |
| **Chassis -> Zugewiesene Geräte** | -  | Liste von Hardware-Objekten (**Blade Server**, Switch-Module), die in einem Chassis eingesteckt sind; ist im Kategorie-Ordner **Chassis** enthalten; ergänzt die Kategorie **Räumlich zugeordnete Objekte** |
| **DBMS** | - | Kategorie-Ordner mit untergeordneten Kategorien **Anwendungen**, **Clusterinstallation**, **Installation**, **Varianten** und **Zugeordnete Cluster** |
| **DBMS -> Anwendungen** | - | Angaben zur Applikation, beispielsweise den **Hersteller**; ist im Kategorie-Ordner **DBMS** enthalten
| **DBMS -> Clusterinstallation**  | Liste von zugeordneten Clustern; ist im Kategorie-Ordner **DBMS** enthalten; speist sich aus Daten der Kategorie **DBMS → Zugeordnete Cluster** |
| **DBMS -> Zugeordnete Cluster** | -  | Liste von Objekten vom Typ **Cluster** mit weiteren Angaben, wie der Cluster definiert ist; ist im Kategorie-Ordner **DBMS** enthalten; rückwärtige Kategorie: **Clustermitgliedschaften** |
| **Dateien** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Aktuelle Datei**, **Dateiversionen** und **Zugewiesene Objekte** |
| **Dateien -> Aktuelle Datei**  | Aktuelle Revision einer Datei zum Download; ist im Kategorie-Ordner **Dateien** enthalten; speist sich aus der Kategorie **Dateiversionen** |
| **Dateien -> Dateiversionen**  | Liste aller verfügbaren Revisionen einer Datei; über diese Kategorie können Dateien hochgeladen werden; ist im Kategorie-Ordner **Dateien** enthalten; speist die Kategorie **Aktuelle Datei** mit Informationen |
| **Datenbankschema** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Datenbank Gateway**, **Datenbanklinks**, **Datenbankobjekte** und **Datenbankzugriff**; häufig dem gleichnamigen Objekttypen **Datenbankschema** zugeordnet |
| **Datenbankschema -> Datenbank Gateway** | -  | Liste von Möglichkeiten, um auf diese Datenbank zuzugreifen; ist im Kategorie-Ordner **Datenbankschema** enthalten |
| **Datenbankschema -> Datenbanklinks** | -  | Verknüpfung zwischen Datenbanken; ist im Kategorie-Order **Datenbankschema** enthalten |
| **Datenbankschema -> Datenbankobjekte** | -  | Angaben zum Aufbau der Datenbank, beispielsweise Liste von Tabellen; ist im Kategorie-Ordner **Datenbankschema** enthalten |
| **Datenbankschema -> Datenbankzugriff** | -  | Liste von installierten Applikationen, die auf diese Datenbank zugreifen; ist im Kategorie-Ordner **Datenbankschema** enthalten; rückwärtige Kategorie: **Softwarezuweisung** |
| **Dienste** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Installation** und **Varianten**; enthält Angaben zur Applikation, beispielsweise den **Hersteller** |
| **Drucker** | -  | Angaben zu einem **Drucker** |
| **FC-Switch** | -  | Angaben zu einem Fiber Channel Switch: **Bezeichnung** und **Aktiv**; häufig dem gleichnamigen Objekttypen **FC-Switch** zugeordnet |
| **Gleichgerichtete Beziehungen** | -  | Angaben zu einer gleichgerichteten [Objekt-Beziehung](objekt-beziehungen.md) |
| **Installation** | -  | Dokumentiert die Installation einer Applikation auf einer Hardware; ist in den Kategorie-Ordnern **Anwendungen**, **DBMS** und **Dienste** enthalten; rückwärtige Kategorie: **Softwarezuweisung** |
| **Instanz / Oracle Datenbank** | -  | Angaben zu einer laufenden Datenbank-Instanz; häufig dem Objekttypen Datenbankinstanz zugeordnet |
| **Klimaanlage** | -  | Angaben zu einer **Klimaanlage** |
| **Kryptokarte** | -  | Angaben zu einer **Kryptokarte** |
| **Layer-2-Netz** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Zugewiesene logische Ports** und **Zugewiesene Ports**; enthält Angaben zu einem VLAN; häufig dem gleichnamigen Objekttypen **Layer-2-Netz** zugeordnet |
| **Layer-2-Netz -> Zugewiesene logische Ports** | -  | Liste von zugeordneten Objekten mit ihren logischen Ports; ist im Kategorie-Ordner **Layer-2-Netz** enthalten; rückwärtige Kategorie: **Netzwerk → Logische Ports** |
| **Layer-2-Netz -> Zugewiesene Ports** | -  | Liste von zugeordneten Objekten mit ihren Ports; ist im Kategorie-Ordner **Layer-2-Netz** enthalten; rückwärtige Kategorie: **Netzwerk → Port** |
| **Leitungsnetz** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Netzart** und **Leitungsnetz Objekte**; häufig dem gleichnamigen Objekttypen **Leistungsnetz** zugeordnet |
| **Leitungsnetz -> Netzart** | - | Angaben zu einem **Leistungsnetz**, zum Beispiel "Strom", "Wasser", "Gas"; ist im Kategorie-Ordner **Leistungsnetz** enthalten |
| **Lizenzzuweisung** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Lizenzzuweisung Übersicht** und **Lizenzschlüssel**; häufig dem Objekttypen **Lizenzen** zugeordnet |
| **Lizenzzuweisung -> Lizenzschlüssel** | -  | Liste von Lizenzschlüsseln und Applikationen, die bei einer Installation eine Lizenz benötigen (siehe Kategorie **Softwarezuweisung**); ist im Kategorie-Ordner **Lizenzzuweisung** enthalten |
| **Lizenzzuweisung -> Übersicht** | -  | 1. Zusammenfassung von Angaben zu einer Lizenz; ist im Kategorie-Ordner **Lizenzzuweisung** enthalten<br>2. Visuelle Darstellung und Statistiken von PDU Branches; ist im Kategorie-Ordner **PDU** enthalten |
| **Middleware** | -  | Angaben zu einer **Middleware** |
| **Mobilfunk** | **IMEI-Nummer** | Eindeutige Nummer eines Handys/Smartphones; häufig dem Objekttypen **Mobiltelefon** zugeordnet |
| **Monitor** | -  | Angaben zu einem Monitor, zum Beispiel **Auflösung**; daher dem Objekttypen **Monitore** zugeordnet |
| **Netz** | -  | Kategorie-Ordner mit untergeordneten Kategorien **DHCP**, **IP-Liste** und **Netzbereiche**; enthält Angaben zu einem Subnet, daher häufig dem Objekttypen **Layer-3-Netz** zugeordnet |
| **Netz -> DHCP** | -  | Liste von DHCP-Bereichen eines Subnets; ist im Kategorie-Ordner **Netz** enthalten |
| **Netz -> IP-Liste** | -  | Visuelle Darstellung eines Subnets mit weiteren Funktionen und Statistiken; ist im Kategorie-Ordner **Netz** enthalten; rückwärtige Kategorie: **Hostadresse** |
| **Netz -> Netzbereiche** | -  | Angaben zur Segmentierung von Subnetzen; ist im Kategorie-Ordner **Netz** enthalten; rückwärtige Kategorie: **Netzbereich → Bereiche** |
| **Netzersatzanlage** | -  | Angaben zu einem Stromgenerator, zum Beispiel Dieselaggregat; häufig dem gleichnamigen Objekttypen **Netzersatzanlage** zugeordnet |
| **Notfallplan** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Notfallplan Eigenschaften** und **Notfallplan Komponenten**; häufig dem gleichnamigen Objekttypen **Notfallplan** zugeordnet |
| **Notfallplan -> Notfallplan Eigenschaften** | -  | Angaben zu einem Notfallplan: **Zeitbedarf** und **Datum Notfallübung**; ist im Kategorie-Ordner **Notfallplan** enthalten |
| **Objektgruppe** | -  | Liste von zugeordneten Objekten (siehe gleichnamigen Objekttyp **Objektgruppe**); ist Kategorie-Ordner mit der untergeordneten Kategorie **Typ**; rückwärtige Kategorie: **Gruppenmitgliedschaft** |
| **Objektgruppe -> Typ** | -  | Definition, ob eine **Objektgruppe** dynamisch (per [Report](../auswertungen/report-manager.md)) oder statisch aufgebaut ist; ist im Kategorie-Ordner **Objektgruppe** enthalten |
| **Organisation** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Zugewiesene Personen (Organisation)**, **Organisation** und **Zugewiesene Objekte (Organisation)**; häufig dem gleichnamigen Objekttypen **Organisation** zugeordnet |
| **PDU** | -  | Kategorie-Ordner mit untergeordneten Kategorien **PDU Übersicht** und **Branch**; enthält Angaben zu einer Power Distribution Unit; häufig dem Objekttypen **Steckdosenleiste** zugeordnet  <br>Diese Kategorie kann über SNMP die Informationen der Steckdosenleisten des Herstellers APC auslesen. Die Kompatibilität dieser Funktion ist auf einzelne Modelle dieses Herstellers ausgelegt.  <br>Weiterhin können die Informationen lediglich bezogen auf die Steckdosenleiste selbst ausgelesen und ausgegeben werden. Das Ergänzen weiterer Informationen ist nicht möglich. |
| **PDU -> Branch** | -  | Liste von Branches; ist im Kategorie-Ordner **PDU** enthalten |
| **Personen** | -  | 1. Kategorie-Ordner mit untergeordneten Kategorien **Login**,**Personen**, **Personengruppenmitgliedschaft**, **Rechtevergabe**, und **Zugewiesene Objekte (Personen)**<br>2. Liste von zugeordneten Objekten vom Typ **Personen**; ist im Kategorie-Ordner **Organisation** enthalten; rückwärtige Kategorie: **Personen → Stammdaten** (Attribut **Firma**) |
| **Personen -> Login** | -  | Credentials für lokale Benutzer von i-doit bestehend aus **Username** und **Passwort** |
| **Personen -> Personen** | -  | 1. Angaben zu einer Person; ist im Kategorie-Ordner **Personen** enthalten<br>2. Angaben zu einer Personengruppe; ist im Kategorie-Ordner **Personengruppen** enthalten<br>3. Angaben zu einer Organisation; ist im Kategorie-Ordner **Organisation** enthalten |
| **Personen -> Personengruppenmitgliedschaft** | -  | Liste von **Personengruppen**, denen die Person untergeordnet ist; ist im Kategorie-Ordner **Personen** enthalten; rückwärtige Kategorie: **Mitglieder** |
| **Personen -> Rechtevergabe** | -  | Siehe [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/cmdb.md); ist in den Kategorie-Ordnern **Personen** und **Personengruppen** enthalten |
| **Personengruppen** | -  | Kategorie-Ordner mit den untergeordneten Kategorien **Personengruppen**, **Personengruppen Mitglieder**, **Rechtevergabe** und **Zugewiesene Objekte (Personengruppen)** |
| **Personengruppen -> Mitglieder** | -  | Liste von Personen, die der Personengruppe zugeordnet sind; ist im Kategorie-Ordner **Personengruppen** zugeordnet; rückwärtige Kategorie: **Personen → Personengruppenmitgliedschaft** |
| **Rechteverwaltung** [![rechteverwaltung](../assets/images/de/grundlagen/icons/lock.png)](../assets/images/de/grundlagen/icons/lock.png) | -  | [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/cmdb.md): Welche Person oder Personengruppe hat welche Zugriffsmöglichkeiten auf dieses Objekt? |
| **Raum** | -  | Angaben wie **Typ**, **Raumnummer** und **Stockwerk**; häufig dem gleichnamigen Objekttypen **Raum** zugeordnet |
| **Replikation** | -  | Kategorie-Ordner mit untergeordneter Kategorie **Replikationspartner**; enthält Angabe zum **Replikationsmechanismus**; häufig dem Objekttypen **Replikationsobjekt** zugeordnet |
| **Replikation -> Replikationspartner** | -  | Liste von Objekten, die repliziert werden; ist im Kategorie-Ordner **Replikation** enthalten |
| **Routing** | -  | Angaben zu konfigurierten Routen: **Routingprotokoll** und **Gateway Adresse** (siehe Kategorie **Hostadresse**); häufig dem Objekttypen **Router** zugeordnet |
| **SAN Zoning** | -  | Storage Area Networks (SAN): Angaben zum **SAN Zoning** |
| **Schrank** | -  | Visuelle Darstellung eines Racks, daher häufig dem Objekttypen **Schrank** zugeordnet; enthält zusätzliche Attribute für vertikale Einschübe und Statistiken, die aus den räumlich zugeordneten Objekten und aus der Kategorie **Formfaktor** generiert werden |
| **Switch** | -  | Angaben zum **Switch**; speist sich aus Informationen aus der Kategorie **Hostadresse** und **Netzwerk → Port** |
| **Unterbrechungsfreie Stromversorgung** | -  | Angaben zu einer USV, daher häufig dem gleichnamigen Objekttypen **Unterbrechungsfreie Stromversorgung** zugeordnet |
| **Varianten** | -  | Liste von Varianten, zum Beispiel "Standard", "Enterprise", "Pro", "Open", einer Applikation; ist in den Kategorie-Ordnern **Anwendungen**, **DBMS** und **Dienste** enthalten; ergänzt die Kategorie **Installation** in diesen Kategorie-Ordnern |
| **Vertrag** | -  | Kategorie-Ordner mit untergeordneten Kategorien **Vertragsinformationen** und **Vertrags Objekte**; häufig dem gleichnamigen Objekttypen **Vertrag** zugeordnet |
| **Vertrag -> Vertrags Objekte** | -  | 1. Liste von Objekten, die einem **Vertrag** zugeordnet sind; ist im Kategorie-Ordner **Vertrag** enthalten; rückwärtige Kategorie: **Vertragszuweisung**<br>2. Liste von Objekten, die einem **Leitungsnetz** zugeordnet sind; ist im Kategorie-Ordner **Leitungsnetz** enthalten; rückwärtige Kategorie: **Verkabelung → Anschlüsse** (Attribut **Leitungsnetz**) |
| **Vertrag -> Vertragsinformationen** | -  | Angaben zu einem Vertrag; ist im Kategorie-Ordner **Vertrag** enthalten |
| **WAN** | -  | Angaben zu einer Internet-Anbindung (WAN, MAN, GAN o. ä.), daher häufig dem Objekttypen **WAN-Leitungen** zugeordnet |
| **WiFi-Gerät** | -  | Angaben zu einem WLAN Access Point, daher häufig dem Objekttypen **Wireless Access Point** zugeordnet |
| **Zugewiesene Objekte** | -  | 1. Zuordnung von Objekten zu einem Kontakt; ist in den Kategorie-Ordnern **Personen**, **Personengruppen** und **Organisation** enthalten; rückwärtige Kategorie: **Kontaktzuweisung**<br>2. Zuordnung von Objekten zu einem **Notfallplan**; ist im Kategorie-Ordner **Notfallplan** enthalten; rückwärtige Kategorie: **Notfallplanzuweisung** |

| Catégorie | Attributs | Description |
| --- | --- | --- |
| **Applications** | - | Dossier de catégorie avec sous-catégories **Applications**, **Installation** et **Variantes** ; contient des informations sur l'application, par exemple le **Fabricant** |
| **Systèmes d'exploitation** | - | Ordre de catégorie avec sous-catégories **Systèmes d'exploitation**, **Installation** et **Variantes** ; contient des indications sur le système d'exploitation |
| **Système de poste de travail** | - | Données relatives à un ordinateur, par exemple **Type de client** (ordinateur portable, de bureau, etc.) ou **Layout du clavier** ; souvent attribué au type d'objet **Client** |
| **Détails de la relation** | - | Détails d'une [relation d'objet](objekt-beziehungen.md) |
| **Châssis** | - | Dossier de catégorie avec sous-catégories **Vue du châssis**, **Slots**, **Câblage du châssis** et **Périphériques attribués** ; souvent associé aux types d'objets **Blade Chassis** et **Switch Chassis** |
| Représentation visuelle d'un châssis de lames ou de commutateurs ; est contenu dans le dossier de catégorie **Châssis** |
| **Châssis -> Câblage du châssis** | - | Réseau interne dans un châssis ; est inclus dans le dossier de catégorie **Châssis** |
| - | Liste des slots disponibles dans un châssis de lames ou de commutateurs ; inclus dans le dossier de catégorie **Châssis** |
| - | Liste d'objets matériels (**serveurs de lames**, modules de commutation) enfichés dans un châssis ; est contenue dans le dossier de catégorie **châssis** ; complète la catégorie **objets spatialement affectés** |
| **DBMS** | - | Dossier de catégories avec les catégories subordonnées **Applications**, **Installation de clusters**, **Installation**, **Variantes** et **Clusters affectés** |
| **DBMS -> Applications** | - | Informations sur l'application, par exemple le **fabricant** ; est contenu dans le dossier de catégorie **DBMS**.
| **DBMS -> Installation de clusters** | Liste des clusters attribués ; est contenu dans le dossier de catégorie **DBMS** ; se nourrit de données de la catégorie **DBMS → Clusters attribués** |
| **DBMS -> Clusters associés** | - | Liste d'objets de type **Cluster** avec des informations supplémentaires sur la manière dont le cluster est défini ; est contenu dans le dossier de catégorie **DBMS** ; catégorie arrière : **appartenance à un cluster** |
| **Fichiers** | - | Dossier de catégorie avec sous-catégories **Fichier actuel**, **Versions de fichiers** et **Objets attribués** |
| **Fichiers -> Fichier actuel** | Révision actuelle d'un fichier à télécharger ; est contenu dans le dossier de catégorie **Fichiers** ; se nourrit de la catégorie **Versions de fichiers** |
| **Fichiers -> Versions de fichiers** | Liste de toutes les révisions disponibles d'un fichier ; cette catégorie permet de télécharger des fichiers ; est contenue dans le dossier de catégories **Fichiers** ; alimente la catégorie **Fichier actuel** en informations |
| **Schéma de base de données** | - | Dossier de catégories avec sous-catégories **Passerelle de base de données**, **Liens de base de données**, **Objets de base de données** et **Accès à la base de données** ; souvent associé au type d'objet du même nom **Schéma de base de données** |
| **Schéma de base de données -> Passerelle de base de données** | - | Liste des possibilités d'accès à cette base de données ; est contenu dans le dossier de catégorie **Schéma de base de données** |
| **Schéma de base de données -> Liens de base de données** | - | Liens entre les bases de données ; est contenu dans le dossier de catégorie **Schéma de base de données** |
| - | Données sur la structure de la base de données, par exemple liste de tables ; est contenu dans le dossier de catégorie **Schéma de base de données** |
| - | Liste des applications installées qui accèdent à cette base de données ; est contenue dans le dossier de catégorie **Schéma de base de données** ; catégorie arrière : **Attribution de logiciels** |
| **Services** | - | Dossier de catégorie avec sous-catégories **Installation** et **Variantes** ; contient des informations sur l'application, par exemple le **Fabricant** |
| **Imprimante** | - | Indications sur une **Imprimante** |
| **Commutateur Fibre Channel** | - | Données relatives à un commutateur Fibre Channel : **Désignation** et **Actif** ; souvent attribué au type d'objet du même nom **FC-Switch** |
| **Relations alignées** | - | Indications sur une [relation objet](objekt-beziehungen.md) alignée |
| **Installation** | - | Documente l'installation d'une application sur un matériel ; est inclus dans les dossiers de catégorie **Applications**, **SGBD** et **Services** ; catégorie arrière : **Attribution de logiciel** |
| **Instance / Base de données Oracle** | - | Données relatives à une instance de base de données en cours d'exécution ; souvent attribué au type d'objet Instance de base de données |
| **Climatisation** | - | Données relatives à une **Climatisation** |
| **Carte cryptographique** | - | Données relatives à une **Carte cryptographique** |
| **Réseau de couche 2** | -| Dossier de catégorie avec sous-catégories **Ports logiques alloués** et **Ports alloués** ; contient des indications sur un VLAN ; souvent associé au type d'objet du même nom **Réseau de couche 2** |
| **Réseau de couche 2 -> Ports logiques attribués** | - | Liste d'objets attribués avec leurs ports logiques ; est contenu dans le dossier de catégorie **Réseau de couche 2** ; catégorie arrière : **Réseau → Ports logiques** |
| **Réseau de couche 2 -> Ports alloués** | - | Liste des objets alloués avec leurs ports ; est contenu dans le dossier de catégorie **Réseau de couche 2** ; catégorie arrière : **Réseau → Port** |
| **Réseau de lignes** | - | Dossier de catégories avec les catégories subordonnées **Type de réseau** et **Objets de réseau de lignes** ; souvent associé au type d'objet du même nom **Réseau de services** |
| **Réseau de conduites -> Type de réseau** | - | Données relatives à un **réseau de prestations**, par exemple "électricité", "eau", "gaz" ; est contenu dans le dossier de catégories **Réseau de prestations** |
| **Attribution de licence** | - | Dossier de catégorie avec les catégories subordonnées **Attribution de licence aperçu** et **Clé de licence** ; souvent attribué au type d'objet **Licences** |
| **Attribution de licence -> Clé de licence** | - | Liste des clés de licence et des applications qui nécessitent une licence lors d'une installation (voir catégorie **Attribution de logiciel**) ; est inclus dans le dossier de catégorie **Attribution de licence** |
| **Attribution de licence -> Aperçu** | - | 1. résumé des informations sur une licence ; est contenu dans le dossier de catégorie **Attribution de licence**<br>2. représentation visuelle et statistiques des branches PDU ; est contenu dans le dossier de catégorie **PDU** |
| **Middleware** | - | Données relatives à un **Middleware** |
| **Mobile** | **NuméroIMEI** | Numéro unique d'un téléphone mobile/smartphone ; souvent attribué au type d'objet **Mobile** |
| **Moniteur** | - | Données relatives à un moniteur, par exemple **résolution** ; donc affecté au type d'objet **Moniteurs** |
| **Réseau** | - | Dossier de catégorie avec sous-catégories **DHCP**, **Liste IP** et **Zones de réseau** ; contient des indications sur un sous-réseau, donc souvent affecté au type d'objet **Réseau de couche 3** |
| **Réseau -> DHCP** | - | Liste des plages DHCP d'un sous-réseau ; est contenu dans le dossier de catégorie **Réseau** |
| **Réseau -> Liste IP** | - | Représentation visuelle d'un sous-réseau avec d'autres fonctions et statistiques ; est contenu dans le dossier de catégorie **Réseau** ; catégorie arrière : **adresse de l'hôte** |
| **Réseau -> Zones de réseau** | - | Indications sur la segmentation des sous-réseaux ; est contenu dans le dossier de catégorie **Réseau** ; catégorie arrière : **Zone de réseau → Zones** |
| **Installation de remplacement du réseau** | - | Données relatives à un générateur électrique, par exemple un groupe électrogène diesel ; souvent attribué au type d'objet du même nom **Installation de remplacement du réseau** |
| **Plan d'urgence** | - | Dossier de catégories avec sous-catégories **Plan d'urgence propriétés** et **Plan d'urgence composants** ; souvent attribué au type d'objet du même nom **Plan d'urgence** |
| **Plan d'urgence -> Propriétés du plan d'urgence** | - | Données relatives à un plan d'urgence : **Temps requis** et **Date exercice d'urgence** ; est contenu dans le dossier de catégorie **Plan d'urgence** |
| **Groupe d'objets** | - | Liste d'objets affectés (voir le type d'objet du même nom **Groupe d'objets**) ; est le dossier de catégorie avec la catégorie subordonnée **Type** ; catégorie arrière : **appartenance à un groupe** |
| **Groupe d'objets -> Type** | - | Définition si un **Groupe d'objets** est dynamique (par [Rapport](../évaluations/report-manager.md)) ou statique ; est contenu dans le dossier de catégorie **Groupe d'objets** |
| **Organisation** | - | Dossier de catégorie avec des catégories subordonnées **Personnes assignées (organisation)**, **Organisation** et **Objets assignés (organisation)** ; souvent attribué au type d'objet du même nom **Organisation** |
| **PDU** | - | Dossier de catégorie avec les catégories subordonnées **PDU Overview** et **Branch** ; contient des informations sur une unité de distribution d'énergie ; souvent attribué au type d'objet **Barrettes d'alimentation** <br>Cette catégorie peut lire les informations des barrettes d'alimentation du fabricant APC via SNMP. La compatibilité de cette fonction est conçue pour certains modèles de ce fabricant.  <br>En outre, les informations ne peuvent être lues et émises que par rapport au bloc multiprises lui-même. Il n'est pas possible d'ajouter d'autres informations. |
| **PDU -> Branch** | - | Liste de Branches ; est contenue dans le dossier de catégorie **PDU** |
| **Personnes** | - | 1. dossier de catégories avec des catégories subordonnées **Login**,**Personnes**, **Adhésion à un groupe de personnes**, **Accorder des droits**, et **Objets attribués (personnes)**<br>2. liste d'objets attribués de type **Personnes** ; est contenue dans le dossier de catégories **Organisation** ; catégorie arrière : **Personnes → Données de base** (attribut **Entreprise**) |
| **Personnes -> Login** | - | Credentials pour les utilisateurs locaux d'i-doit composés de **nom d'utilisateur** et **mot de passe** |
| **Personnes -> Personnes** | - | 1. informations sur une personne ; est contenu dans le dossier de catégorie **Personnes**<br>2. informations sur un groupe de personnes ; est contenu dans le dossier de catégorie **Groupes de personnes**<br>3. informations sur une organisation ; est contenu dans le dossier de catégorie **Organisation** |
| - | Liste des **groupes de personnes** auxquels la personne est subordonnée ; est contenue dans le dossier de catégorie **Personnes** ; catégorie arrière : **membres** |
| **Personnes -> Attribution des droits** | - | Voir [Gestion des droits](../documentation efficace/gestion des droits/cmdb.md) ; est contenu dans les dossiers de catégorie **Personnes** et **Groupes de personnes** |
| **Groupes de personnes** | - | Dossier de catégories avec les catégories subordonnées **Groupes de personnes**, **Groupes de personnes membres**, **Attribution de droits** et **Objets attribués (groupes de personnes)** |
| **Groupes de personnes -> Membres** | -| Liste de personnes attribuées au groupe de personnes ; est attribuée dans le dossier de catégories **Groupes de personnes** ; catégorie arrière : **Personnes → Appartenance à un groupe de personnes** |
| **Gestion des droits** [ ![gestion des droits](../assets/images/fr/bases/icons/lock.png)](../assets/images/fr/bases/icons/lock.png) | - | [gestion des droits](../documentation efficace/gestion des droits/cmdb.md) : Quelle personne ou quel groupe de personnes a quels droits d'accès à cet objet ? |
| **Pièce** | - | Données telles que **Type**, **Numéro de pièce** et **Étage** ; souvent attribué au type d'objet du même nom **Pièce** |
| **Réplication** | - | Dossier de catégorie avec catégorie subordonnée **Partenaire de réplication** ; contient des indications sur le **mécanisme de réplication** ; souvent attribué au type d'objet **Objet de réplication** |
| **Réplication -> Partenaire de réplication** | - | Liste d'objets qui sont répliqués ; est contenu dans le dossier de catégorie **Réplication** |
| **Routage** | - | Informations sur les routes configurées : **protocole de routage** et **adresse de la passerelle** (voir catégorie **adresse de l'hôte**) ; souvent attribué au type d'objet **routeur** |
| **SAN Zoning** | - | Storage Area Networks (SAN) : indications sur le **SAN Zoning** |
| **Baie** | - | Représentation visuelle d'un rack, donc souvent affectée au type d'objet **Baie** ; contient des attributs supplémentaires pour les tiroirs verticaux et les statistiques générées à partir des objets affectés spatialement et de la catégorie **Facteur de forme** |
| **Switch** | - | Informations sur le **Switch** ; se nourrit d'informations provenant de la catégorie **Adresse hôte** et **Réseau → Port** |
| **Alimentation sans interruption** | - | Informations sur une ASI, donc souvent attribuées au type d'objet du même nom **Alimentation sans interruption** |
| **Variantes** | - | Liste de variantes, par exemple "Standard", "Enterprise", "Pro", "Open", d'une application ; est contenue dans les dossiers de catégories **Applications**, **SGBD** et **Services** ; complète la catégorie **Installation** dans ces dossiers de catégories |
| **Contrat** | - | Dossier de catégorie avec sous-catégories **Informations sur le contrat** et **Objets du contrat** ; souvent associé au type d'objet du même nom **Contrat** |
| **Contrat -> Objets de contrat** | -| 1ère liste d'objets associés à un **Contrat** ; est contenu dans le dossier de catégorie **Contrat** ; catégorie arrière : **attribution de contrat**<br>2. liste d'objets attribués à un **réseau de câblage** ; est contenue dans le dossier de catégorie **réseau de câblage** ; catégorie arrière : **câblage → raccordements** (attribut **réseau de lignes**) |
| **Contrat -> Informations sur le contrat** | -| Informations sur un contrat ; est contenu dans le dossier de catégorie **Contrat** |
| **WAN** | - | Informations sur une connexion Internet (WAN, MAN, GAN ou similaire), donc souvent attribué au type d'objet **Lignes WAN** |
| **Périphérique WiFi** | - | Données relatives à un point d'accès WLAN, donc souvent attribuées au type d'objet **Point d'accès sans fil** |
| **Objets attribués** | - | 1ère attribution d'objets à un contact ; est contenu dans les dossiers de catégorie **Personnes**, **Groupes de personnes** et **Organisation** ; catégorie arrière : **Affectation de contacts**<br>2. affectation d'objets à un **plan d'urgence** ; est contenu dans le dossier de catégorie **plan d'urgence** ; catégorie arrière : **Affectation de plan d'urgence** |