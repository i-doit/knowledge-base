In diesem Artikel werden alle in i-doit verfügbaren [Kategorien und deren Attribute](../../grundlagen/struktur-it-dokumentation.md) aufgeführt. Dies kann sehr hilfreich sein, wenn die [programmierbare Schnittstelle (API)](./index.md) von i-doit eingesetzt wird.

Diesen Inhalt automatisch erstellen

Über den URL-Parameter load=api_properties werden die Kategorie-Tabellen für die derzeit installierte Version von i-doit erstellt. Es muss ein Benutzer angemeldet sein. Beispiel: [https://demo.i-doit.com/?load=api_properties](https://demo.i-doit.com/?load=api_properties)

Globale Kategorien (catg)
-------------------------

### Allgemein (C\_\_CATG\_\_GLOBAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| ID  | id  | int |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Status | status | int |     | Ja  |
| Erstellungsdatum | created | text |     | Ja  |
| Erstellt von | created\_by | text |     | Ja  |
| Letzte Änderung | changed | text |     | Ja  |
| Letzte Änderung durch | changed\_by | text |     | Ja  |
| Einsatzzweck | purpose | int | isys\_purpose\_\_id | Ja  |
| Kategorie | category | int | isys\_catg\_global\_category\_\_id | Ja  |
| SYSID | sysid | text |     | Ja  |
| CMDB-Status | cmdb\_status | int | isys\_cmdb\_status\_\_id | Ja  |
| Objekttyp | type | int | isys\_obj\_type\_\_id | Ja  |
| Tags | tag | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Modell (C\_\_CATG\_\_MODEL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hersteller | manufacturer | int | isys\_model\_manufacturer\_\_id | Ja  |
| Modell | title | int | isys\_model\_title\_\_id | Ja  |
| Produkt-ID | productid | text |     | Ja  |
| Service Tag | service\_tag | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Firmware | firmware | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Formfaktor (C\_\_CATG\_\_FORMFACTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Formfaktor | formfactor | int | isys\_catg\_formfactor\_type\_\_id | Ja  |
| Höheneinheiten | rackunits | int |     | Ja  |
| Maßeinheit | unit | int | isys\_depth\_unit\_\_id | Ja  |
| Breite | width | float |     | Ja  |
| Höhe | height | float |     | Ja  |
| Tiefe | depth | float |     | Ja  |
| Gewicht | weight | float |     | Ja  |
| Gewichtseinheit | weight\_unit | int | isys\_weight\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### CPU (C\_\_CATG\_\_CPU)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_catg\_cpu\_manufacturer\_\_id | Ja  |
| Typ | type | int | isys\_catg\_cpu\_type\_\_id | Ja  |
| CPU-Frequenz | frequency | float |     | Ja  |
| CPU-Frequenz Einheit | frequency\_unit | int | isys\_frequency\_unit\_\_id | Ja  |
| CPU-Kerne | cores | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Speicher (C\_\_CATG\_\_MEMORY)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anzahl | quantity | int |     | Ja  |
| Bezeichnung | title | int | isys\_memory\_title\_\_id | Ja  |
| Hersteller | manufacturer | int | isys\_memory\_manufacturer\_\_id | Ja  |
| Typ | type | int | isys\_memory\_type\_\_id | Ja  |
| Gesamtkapazität | total\_capacity | float |     | Ja  |
| Kapazität | capacity | float |     | Ja  |
| Speichereinheit | unit | int | isys\_memory\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netzwerk (C\_\_CATG\_\_NETWORK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_iface\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_iface\_model\_\_id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Slotnummer | slot | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stromverbraucher (C\_\_CATG\_\_POWER\_CONSUMER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Hersteller | manufacturer | int | isys\_pc\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_pc\_model\_\_id | Ja  |
| Volt | volt | text |     | Ja  |
| Watt | watt | text |     | Ja  |
| Ampere | ampere | text |     | Ja  |
| BTU | btu | text |     | Ja  |
| Zielobjekt | assigned\_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Schnittstelle (C\_\_CATG\_\_UNIVERSAL\_INTERFACE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verbindungstyp | type | int | isys\_ui\_con\_type\_\_id | Ja  |
| Anschlusstyp | plug | int | isys\_ui\_plugtype\_\_id | Ja  |
| Verbunden mit | assigned\_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Relation direction | relation\_direction | int |     | Ja  |

### Softwarezuweisung (C\_\_CATG\_\_APPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anwendung | application | int | isys\_connection\_\_id | Ja  |
| Typ | application\_type | int | isys\_catg\_application\_type\_\_id | Ja  |
| Priorität | application\_priority | int | isys\_catg\_application\_priority\_\_id | Ja  |
| Zugewiesene Lizenz | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned\_license\_key | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Ja  |
| Variante | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Ja  |
| Versionsnummer | assigned\_version | int | isys\_catg\_version\_list\_\_id | Ja  |
| Nagios services vererben | bequest\_nagios\_services | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugriff (C\_\_CATG\_\_ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre Zugriffs-URL | primary\_url | text |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Zugriffstyp | type | int | isys\_access\_type\_\_id | Ja  |
| Host\[:Port\]/URL | url | text |     | Ja  |
| Host\[:Port\]/URL | formatted\_url | text |     | Ja  |
| Primär | primary | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datensicherung (C\_\_CATG\_\_BACKUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Wird gesichert von | backup | int | isys\_connection\_\_id | Ja  |
| Art des Backups | backup\_type | int | isys\_backup\_type\_\_id | Ja  |
| Zyklus | cycle | int | isys\_backup\_cycle\_\_id | Ja  |
| Pfad für zu sichernde Daten | path\_to\_save | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Notfallplanzuweisung (C\_\_CATG\_\_EMERGENCY\_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Zugewiesener Notfallplan | emergency\_plan | int | isys\_connection\_\_id | Ja  |
| Zeitbedarf | time\_needed | text |     | Ja  |
| Zeitbedarf (Einheit) | time\_needed\_unit | text |     | Ja  |
| Datum Notfallübung | practice\_date | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Dateien (C\_\_CATG\_\_FILE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datei | file | int | isys\_connection\_\_id | Ja  |
| Revision | revision | int |     | Ja  |
| HTTP-Link (extern) | link | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Kontaktzuweisung (C\_\_CATG\_\_CONTACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kontakt | contact | int |     | Ja  |
| Primärer Kontakt | primary\_contact | int | isys\_connection\_\_id | Ja  |
| Kontakt | contact\_object | int | isys\_connection\_\_id | Ja  |
| Primär | primary | int |     | Ja  |
| Rolle | role | int | isys\_contact\_tag\_\_id | Ja  |
| Kontakte | contact\_list | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Logbuch (C\_\_CATG\_\_LOGBOOK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datum | date | date\_time |     | Ja  |
| Objekt | object | int |     | Ja  |
| Ereignis | event | int | isys\_logbook\_event\_\_id | Ja  |
| Quelle | source | int | isys\_logbook\_source\_\_id | Ja  |
| Benutzer | user | int |     | Ja  |
| Objekttyp | object\_type | text |     | Ja  |
| Kategorie | category | text |     | Ja  |
| Alarmlevel | alert\_level | text | isys\_logbook\_level\_\_id | Ja  |
| Benutzer | user\_name\_static | text |     | Ja  |
| Ereignis | event\_static | text |     | Ja  |
| Kommentar | comment | text |     | Ja  |
| Änderungen | changes | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Zugriffstyp | reason | int | isys\_logbook\_reason\_\_id | Ja  |

### Controller (C\_\_CATG\_\_CONTROLLER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys\_controller\_type\_\_id | Ja  |
| Hersteller | manufacturer | int | isys\_controller\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_controller\_model\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Standort (C\_\_CATG\_\_LOCATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Standort-Pfad | location\_path | text |     | Ja  |
| Standort | parent | int |     | Ja  |
| Montage | option | int |     | Ja  |
| Einschub | insertion | int |     | Ja  |
| Position im Schrank | pos | int |     | Ja  |
| GPS | gps | text |     | Ja  |
| Breitengrad | latitude | text |     | Ja  |
| Längengrad | longitude | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Objektbild (C\_\_CATG\_\_IMAGE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hochgeladene Bilder | image\_selection | int |     | Ja  |
| Datei | image | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Handbuchzuweisung (C\_\_CATG\_\_MANUAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Handbuch Datei | manual | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Soundkarte (C\_\_CATG\_\_SOUND)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hersteller | manufacturer | int | isys\_sound\_manufacturer\_\_id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Räumlich zugeordnete Objekte (C\_\_CATG\_\_OBJECT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | assigned\_object | int |     | Ja  |

### Grafikkarte (C\_\_CATG\_\_GRAPHIC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_graphic\_manufacturer\_\_id | Ja  |
| Speicher | memory | float |     | Ja  |
| Speichereinheit | unit | int | isys\_memory\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Virtuelle Maschine (C\_\_CATG\_\_VIRTUAL\_MACHINE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtuelle Maschine | virtual\_machine | int |     | Ja  |
| Läuft auf Host | hosts | int | isys\_connection\_\_id | Ja  |
| Virtualisierungs-System | system | int | isys\_vm\_type\_\_id | Ja  |
| Konfigurations Datei | config\_file | text |     | Ja  |
| Host im Cluster | primary | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Buchhaltung (C\_\_CATG\_\_ACCOUNTING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Inventarnummer | inventory\_no | text |     | Ja  |
| Kostenstelle | account | int | isys\_account\_\_id | Ja  |
| Rechnungsdatum | acquirementdate | date |     | Ja  |
| Eingekauft bei | contact | int | isys\_contact\_\_id | Ja  |
| Investitionskosten | price | double |     | Ja  |
| Betriebskosten | operation\_expense | double |     | Ja  |
| Betriebskosten (Einheit) | operation\_expense\_interval | int | isys\_interval\_\_id | Ja  |
| Kostenträger | cost\_unit | int | isys\_catg\_accounting\_cost\_unit\_\_id | Ja  |
| Lieferschein-Nummer | delivery\_note\_no | text |     | Ja  |
| Beschaffungsart | procurement | int | isys\_catg\_accounting\_procurement\_\_id | Ja  |
| Lieferdatum | delivery\_date | date |     | Ja  |
| Rechnungs-Nr. | invoice\_no | text |     | Ja  |
| Bestell-Nr. | order\_no | text |     | Ja  |
| Garantiezeitraum | guarantee\_period | int |     | Ja  |
| Garantiezeitraum Einheit | guarantee\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Restgarantie | guarantee\_period\_status | text |     | Ja  |
| Garantiezeitraum nach | guarantee\_period\_base | int |     | Ja  |
| Bestelldatum | order\_date | date |     | Ja  |
| Garantiedatum | guarantee\_date | date |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Port (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_PORT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verknüpftes Interface | interface | int | isys\_catg\_netp\_list\_\_id | Ja  |
| Typ | port\_type | int | isys\_port\_type\_\_id | Ja  |
| Modus | port\_mode | int | isys\_port\_mode\_\_id | Ja  |
| Stecker | plug\_type | int | isys\_plug\_type\_\_id | Ja  |
| Negotiation | negotiation | int | isys\_port\_negotiation\_\_id | Ja  |
| Duplex | duplex | int | isys\_port\_duplex\_\_id | Ja  |
| Geschwindigkeit | speed | float |     | Ja  |
| Einheit | speed\_type | int | isys\_port\_speed\_\_id | Ja  |
| Standard | standard | int | isys\_port\_standard\_\_id | Ja  |
| MAC-Adresse | mac | text |     | Ja  |
| MTU | mtu | text |     | Ja  |
| Verbunden mit | assigned\_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Kabel-ID | cable | int |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Hostadresse | addresses | int | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list\_\_isys\_catg\_port\_list\_\_id | Ja  |
| Layer-2-Netz | layer2\_assignment | int |     | Ja  |
| Verknüpftes Interface (HBA) | hba | int | isys\_catg\_hba\_list\_\_id | Ja  |
| Standard VLAN | default\_vlan | int | isys\_catg\_port\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Relation direction | relation\_direction | int |     | Ja  |

### Interface (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_INTERFACE\_P)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_iface\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_iface\_model\_\_id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Slotnummer | slot | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Logische Ports (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_INTERFACE\_L)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Netz(e) | net | int |     | Ja  |
| MAC | mac | text |     | Ja  |
| Typ | port\_type | int | isys\_netx\_ifacel\_type\_\_id | Ja  |
| Zuweisung | ports | int |     | Ja  |
| Eltern-Port | parent | int | isys\_catg\_log\_port\_list\_\_id | Ja  |
| Standard | standard | int | isys\_netp\_ifacel\_standard\_\_id | Ja  |
| Aktiv | active | int |     | Ja  |
| Hostadresse | addresses | int |     | Ja  |
| Verbunden mit Anschluss | assigned\_connector | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Laufwerk (C\_\_CATG\_\_DRIVE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Laufwerksbuchstabe | mount\_point | text |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Systemlaufwerk | system\_drive | int |     | Ja  |
| Dateisystem | filesystem | int | isys\_filesystem\_type\_\_id | Ja  |
| Kapazität | capacity | float |     | Ja  |
| Speichereinheit | unit | int | isys\_memory\_unit\_\_id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Software-RAID-Gruppe | assigned\_raid | int | isys\_catg\_raid\_list\_\_id | Ja  |
| Typ | drive\_type | int | isys\_catd\_drive\_type\_\_id | Ja  |
| Auf Gerät | device | int | isys\_catg\_stor\_list\_\_id | Ja  |
| Auf Gerät | raid | int | isys\_catg\_raid\_list\_\_id | Ja  |
| Auf Gerät | ldev | int | isys\_catg\_ldevclient\_list\_\_id | Ja  |
| Objekttyp Konstante | category\_const | text |     | Ja  |
| Freier Speicher | free\_space | float |     | Ja  |
| Speichereinheit | free\_space\_unit | int | isys\_memory\_unit\_\_id | Ja  |
| Belegter Speicher | used\_space | float |     | Ja  |
| Speichereinheit | used\_space\_unit | int | isys\_memory\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Gerät (C\_\_CMDB\_\_SUBCAT\_\_STORAGE\_\_DEVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_stor\_type\_\_id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_stor\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_stor\_model\_\_id | Ja  |
| Speichereinheit | unit | int | isys\_memory\_unit\_\_id | Ja  |
| Kapazität | capacity | double |     | Ja  |
| Hotspare | hotspare | int |     | Ja  |
| Anschluss | connected | int | isys\_stor\_con\_type\_\_id | Ja  |
| Controller | controller | int | isys\_catg\_controller\_list\_\_id | Ja  |
| Hardware-RAID-Gruppe | raid\_group | int | isys\_catg\_raid\_list\_\_id | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| LTO Typ | lto\_type | int | isys\_stor\_lto\_type\_\_id | Ja  |
| FC Adresse | fc\_address | text |     | Ja  |
| Firmware | firmware | text |     | Ja  |

### FC-Port (C\_\_CATG\_\_CONTROLLER\_FC\_PORT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys\_fc\_port\_type\_\_id | Ja  |
| Verbundener Controller | connected\_controller | int | isys\_catg\_hba\_list\_\_id | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Medium | medium | int | isys\_fc\_port\_medium\_\_id | Ja  |
| Geschwindigkeit | speed | int |     | Ja  |
| Geschwindigkeit Einheit | speed\_unit | int | isys\_port\_speed\_\_id | Ja  |
| Node WWN | wwn | text |     | Ja  |
| Port WW(P)N | wwpn | text |     | Ja  |
| SAN Zone und Verknüpfungsart | san\_zones | int |     | Ja  |
| Zielobjekt | target | int |     | Ja  |
| Anschluss | connector | int |     | Ja  |
| Verbindung | assigned\_connector | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Relation direction | relation\_direction | int |     | Ja  |

### Hostadresse (C\_\_CATG\_\_IP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre Hostadresse | primary\_hostaddress | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Primärer Hostname | primary\_hostname | text |     | Ja  |
| Typ | net\_type | int | isys\_net\_type\_\_id | Ja  |
| Primär | primary | int |     | Ja  |
| Aktiv | active | int |     | Ja  |
| Netz | net | int |     | Ja  |
| Netzbereich | zone | int |     | Ja  |
| Adressvergabe IPv4 | ipv4\_assignment | int | isys\_ip\_assignment\_\_id | Ja  |
| IPv4-Adresse | ipv4\_address | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Adressvergabe IPv6 | ipv6\_assignment | int | isys\_ipv6\_assignment\_\_id | Ja  |
| IPv6 Gültigkeitsbereich | ipv6\_scope | int | isys\_ipv6\_scope\_\_id | Ja  |
| IPv6-Adresse | ipv6\_address | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Hostadresse | hostaddress | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Hostname | hostname | text |     | Ja  |
| Domain | domain | text |     | Ja  |
| DNS Server | dns\_server | int | isys\_catg\_ip\_list\_\_id | Ja  |
| DNS Server Adresse | dns\_server\_address | text | isys\_catg\_ip\_list\_\_id | Ja  |
| Suchdomänen | search\_domain | int | isys\_catg\_ip\_list\_\_id | Ja  |
| Standardgateway für das Netz | use\_standard\_gateway | int |     | Ja  |
| Verknüpfter Port | assigned\_port | int | isys\_catg\_port\_list\_\_id | Ja  |
| Verknüpfter Port | assigned\_logical\_port | int | isys\_catg\_log\_port\_list\_\_id | Ja  |
| Hostadressen | all\_ips | text |     | Ja  |
| Hostname (FQDN) | primary\_fqdn | text |     | Ja  |
| Aliase | aliases | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Version (C\_\_CATG\_\_VERSION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Versionsnummer | title | text |     | Ja  |
| Servicepack | servicepack | text |     | Ja  |
| Kernel | kernel | text |     | Ja  |
| Patchlevel | patchlevel | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Anschlüsse (C\_\_CATG\_\_CONNECTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Ein-/Ausgang | type | int |     | Ja  |
| Leitungsnetz | wiring\_system | int | isys\_connection\_\_id | Ja  |
| Interface | interface | int | isys\_interface\_\_id | Ja  |
| Faser / Wellenlängen | fiber\_wave\_lengths | int | isys\_catg\_connector\_list\_\_id | Ja  |
| Anschlussart | connection\_type | int | isys\_connection\_type\_\_id | Ja  |
| Verbunden mit Anschluss | assigned\_connector | int |     | Ja  |
| Zugehöriger Kategorietyp | assigned\_category | text |     | Ja  |
| Kabel | cable\_connection | int |     | Ja  |
| Verwendete Faser/Ader (RX) | used\_fiber\_lead\_rx | int |     | Ja  |
| Verwendete Faser/Ader (TX) | used\_fiber\_lead\_tx | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Relation direction | relation\_direction | int |     | Ja  |

### Rechnung (C\_\_CATG\_\_INVOICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | denotation | text |     | Ja  |
| Rechnungsdatum | date | date |     | Ja  |
| Betrag | amount | double |     | Ja  |
| Bearbeitet am | edited | date |     | Ja  |
| Abgabe Finanzbuchhaltung | financial\_accounting\_delivery | date |     | Ja  |
| Abgebucht | charged | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stromlieferant (C\_\_CATG\_\_POWER\_SUPPLIER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Volt | volt | text |     | Ja  |
| Watt | watt | text |     | Ja  |
| Ampere | ampere | text |     | Ja  |
| Zielobjekt | assigned\_connector | int |     | Ja  |
| Verbunden mit Anschluss | connector | int |     | Ja  |
| Zugehöriger Eingang/Ausgang | connector\_sibling | int |     | Ja  |
| Zugehöriger Kategorietyp | assigned\_category | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### RAID-Verbund (C\_\_CATG\_\_RAID)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| RAID-Typ | raid\_type | int | isys\_raid\_type\_\_id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| RAID Level | raid\_level | int | isys\_stor\_raid\_level\_\_id | Ja  |
| Controller | controller | int | isys\_catg\_controller\_list\_\_id | Ja  |
| Verbundene Geräte | storages | int |     | Ja  |
| Gesamtkapazität | full\_capacity | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Logische Geräte (LDEV Server) (C\_\_CATG\_\_LDEV\_SERVER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| LUN | lun | text |     | Ja  |
| Segmentgröße (kB) | segment\_size | float |     | Ja  |
| Speicher-Einheit | unit | int | isys\_memory\_unit\_\_id | Ja  |
| Speichergröße | capacity | double |     | Ja  |
| Zugeordnete Geräte | connected\_devices | int | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | Ja  |
| Pfade | paths | text |     | Ja  |
| Multipath Technologie | multipath | int | isys\_ldev\_multipath\_\_id | Ja  |
| Tierklasse | tierclass | int | isys\_tierclass\_\_id | Ja  |
| Logische Geräte (Client) | ldev\_clients | int | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Logische Geräte (Client) (C\_\_CATG\_\_LDEV\_CLIENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Pfad | paths | int |     | Ja  |
| Logische Geräte (LDEV Server) | assigned\_ldevserver | int | isys\_catg\_sanpool\_list\_\_id | Ja  |
| Primärer Pfad | primary\_path | int |     | Ja  |
| Multipath Technologie | multipath | int | isys\_ldev\_multipath\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Hostadapter (HBA) (C\_\_CATG\_\_HBA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys\_hba\_type\_\_id | Ja  |
| Hersteller | manufacturer | int | isys\_controller\_manufacturer\_\_id | Ja  |
| Modell | model | int | isys\_controller\_model\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Cluster (C\_\_CATG\_\_CLUSTER\_ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Ja  |
| Verwaltungsinstanz | administration\_service | text |     | Ja  |
| Clustermitglieder | cluster\_members | text |     | Ja  |
| Clusterdienstzuweisung | cluster\_service | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Cluster (C\_\_CATG\_\_CLUSTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Ja  |
| Verwaltungsinstanz | administration\_service | text |     | Ja  |
| Clustermitglieder | cluster\_members | text |     | Ja  |
| Clusterdienstzuweisung | cluster\_service | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Freigabe (C\_\_CATG\_\_SHARES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Freigabename | title | text |     | Ja  |
| UNC-Pfad | unc\_path | text |     | Ja  |
| Laufwerk | volume | int | isys\_catg\_drive\_list\_\_id | Ja  |
| Lokaler Pfad | path | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Clusterdienstzuweisung (C\_\_CATG\_\_CLUSTER\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_cluster\_type\_\_id | Ja  |
| Clusterdienst | cluster\_service | int | isys\_connection\_\_id | Ja  |
| Hostadressen | hostaddresses | int | isys\_catg\_cluster\_service\_list\_\_id | Ja  |
| Laufwerke | drives | int | isys\_catg\_cluster\_service\_list\_\_id | Ja  |
| Freigaben | shares | int |     | Ja  |
| Läuft auf | runs\_on | int |     | Ja  |
| Standard Server | default\_server | int |     | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Clustermitglieder (C\_\_CATG\_\_CLUSTER\_MEMBERS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Clustermitglied | member | int | isys\_connection\_\_id | Ja  |

### Clustermitgliedschaften (C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Cluster | connected\_object | int | isys\_connection\_\_isys\_obj\_\_id | Ja  |

### Rechenressourcen (C\_\_CATG\_\_COMPUTING\_RESOURCES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| RAM | ram | float |     | Ja  |
| Speicher-Einheit | ram\_unit | int | isys\_memory\_unit\_\_id | Ja  |
| CPU-Frequenz | cpu | float |     | Ja  |
| CPU-Frequenz Einheit | cpu\_unit | int | isys\_frequency\_unit\_\_id | Ja  |
| Festplattenplatz | disc\_space | float |     | Ja  |
| Speicher Einheit | disc\_space\_unit | int | isys\_memory\_unit\_\_id | Ja  |
| Netzwerk Bandbreite | network\_bandwidth | float |     | Ja  |
| Netzwerk Bandbreiten Einheit | network\_bandwidth\_unit | int | isys\_port\_speed\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### SNMP (C\_\_CATG\_\_SNMP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| SNMP Community | title | int | isys\_snmp\_community\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Virtueller Host (C\_\_CATG\_\_VIRTUAL\_HOST\_ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtueller Host | virtual\_host | int |     | Ja  |
| Lizenzserver | license\_server | int | isys\_connection\_\_id | Ja  |
| Verwaltungsinstanz | administration\_service | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Virtueller Host (C\_\_CATG\_\_VIRTUAL\_HOST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtueller Host | virtual\_host | int |     | Ja  |
| Lizenzserver | license\_server | int | isys\_connection\_\_id | Ja  |
| Verwaltungsinstanz | administration\_service | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Gastsysteme (C\_\_CATG\_\_GUEST\_SYSTEMS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gastsysteme | connected\_object | int |     | Ja  |
| Hostname | hostname | text |     | Ja  |
| Läuft auf | runs\_on | text |     | Ja  |

### Virtuelle Maschine (C\_\_CATG\_\_VIRTUAL\_MACHINE\_\_ROOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Virtuelle Maschine | virtual\_machine | int |     | Ja  |
| Läuft auf Host | hosts | int | isys\_connection\_\_id | Ja  |
| Virtualisierungs-System | system | int | isys\_vm\_type\_\_id | Ja  |
| Konfigurations Datei | config\_file | text |     | Ja  |
| Host im Cluster | primary | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Virtuelle Switche (C\_\_CATG\_\_VIRTUAL\_SWITCH)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Ports | ports | int | isys\_virtual\_switch\_2\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Ja  |
| Portgruppen | portgroup | int | isys\_virtual\_port\_group\_\_isys\_catg\_virtual\_switch\_list\_\_id | Ja  |
| Service Console Ports | serviceconsoleports | int | isys\_service\_console\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Ja  |
| VMKernel Ports | vmkernelports | int | isys\_vmkernel\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Virtuelle Geräte (C\_\_CATG\_\_VIRTUAL\_DEVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gerätetyp | host\_stor\_device | int | isys\_catg\_stor\_list\_\_id | Ja  |
| Host LDEV Client | host\_ldev\_client | int | isys\_catg\_ldevclient\_list\_\_id | Ja  |
| Zugehöriges Storage Gerät (Host) | host\_drive | int | isys\_catg\_drive\_list\_\_id | Ja  |
| Zugehöriger Host Port | host\_port | int | isys\_catg\_port\_list\_\_id | Ja  |
| Host Schnittstelle | host\_interface | int | isys\_catg\_ui\_list\_\_id | Ja  |
| Lokales Storage Gerät | local\_stor\_device | int | isys\_catg\_stor\_list\_\_id | Ja  |
| Lokaler Port | local\_port | int | isys\_catg\_port\_list\_\_id | Ja  |
| Host Ressource | local\_interface | int | isys\_catg\_ui\_list\_\_id | Ja  |
| Speichertyp | storage\_type | int | isys\_virtual\_storage\_type\_\_id | Ja  |
| Netzwerktyp | network\_type | int | isys\_virtual\_network\_type\_\_id | Ja  |
| Switch Port Group | switch\_port\_group | int |     | Ja  |
| Cluster Speicher | cluster\_storage | text |     | Ja  |
| Cluster Interface | cluster\_interface | text |     | Ja  |
| Lokales Storage Gerät | disk\_image\_location | text |     | Ja  |
| Gerätetyp | device\_type | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Typ | virtual\_network\_type | text |     | Ja  |

### Datensicherung (zugewiesene Objekte) (C\_\_CATG\_\_BACKUP\_\_ASSIGNED\_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Sichert | backup | int |     | Ja  |
| Art des Backups | backup\_type | int | isys\_backup\_type\_\_id | Ja  |
| Zyklus | cycle | int | isys\_backup\_cycle\_\_id | Ja  |
| Pfad für zu sichernde Daten | path\_to\_save | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Gruppenmitgliedschaft (C\_\_CATG\_\_GROUP\_MEMBERSHIPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gruppe | connected\_object | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Service Komponenten (C\_\_CATG\_\_IT\_SERVICE\_COMPONENTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes Objekt | connected\_object | int | isys\_connection\_\_id | Ja  |
| Objekttyp | objtype | int |     | Ja  |

### Service Logbuch (C\_\_CATG\_\_ITS\_LOGBOOK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Datum | date | date\_time |     | Ja  |
| Objekt | object | int |     | Ja  |
| Ereignis | event | int | isys\_logbook\_event\_\_id | Ja  |
| Quelle | source | int |     | Ja  |
| Benutzer | user | int |     | Ja  |
| Objekttyp | object\_type | text |     | Ja  |
| Kategorie | category | text |     | Ja  |
| Alarmlevel | alert\_level | text | isys\_logbook\_level\_\_id | Ja  |
| Benutzer | user\_name\_static | text |     | Ja  |
| Ereignis | event\_static | text |     | Ja  |
| Kommentar | comment | text |     | Ja  |
| Änderungen | changes | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Servicezuweisung (C\_\_CATG\_\_IT\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service | connected\_object | int |     | Ja  |
| SYSID | sysid | text |     | Ja  |

### Beziehungen (C\_\_CATG\_\_RELATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys\_obj\_\_id | Nein |
| Object 2 | object2 | int | isys\_obj\_\_id | Nein |
| Beziehungsart | relation\_type | int | isys\_relation\_type\_\_id | Nein |
| Gewichtung | weighting | int | isys\_weighting\_\_id | Nein |
| Service | itservice | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Service Beziehung (C\_\_CATG\_\_IT\_SERVICE\_RELATIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys\_obj\_\_id | Nein |
| Object 2 | object2 | int | isys\_obj\_\_id | Nein |
| Beziehungsart | relation\_type | int | isys\_relation\_type\_\_id | Nein |
| Gewichtung | weighting | int | isys\_weighting\_\_id | Nein |
| Service | itservice | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datenbankzuweisung (C\_\_CATG\_\_DATABASE\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| verwendetes Datenbankschema | database\_assignment | int |     | Nein |
| Software läuft auf | runs\_on | int |     | Nein |
| Beschreibung | description | text\_area |     | Ja  |

### Service Typ (C\_\_CATG\_\_ITS\_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | its\_type | int | isys\_its\_type\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Passwörter (C\_\_CATG\_\_PASSWD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Benutzername | username | text |     | Ja  |
| Passwort | password | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### SOA-Stacks (C\_\_CATG\_\_SOA\_STACKS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| SOA-Stacks | soa\_stack\_object | int |     | Ja  |
| SOA-Komponente | soa\_stack\_components | int |     | Ja  |
| Service | soa\_stack\_it\_services | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Status-Planung (C\_\_CATG\_\_PLANNING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| CMDB-Status | cmdb\_status | int | isys\_cmdb\_status\_\_id | Ja  |
| Gültigkeitszeitraum von | start | date |     | Ja  |
| Gültigkeitszeitraum bis | end | date |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Verknüpfte Karten (C\_\_CATG\_\_ASSIGNED\_CARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verknüpfte Karten | connected\_obj | int |     | Ja  |

### SIM-Karte (C\_\_CATG\_\_SIM\_CARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_cp\_contract\_type\_\_id | Ja  |
| verknüpftes Mobiltelefon | assigned\_mobile | int |     | Ja  |
| Netzanbieter | network\_provider | int | isys\_network\_provider\_\_id | Ja  |
| Telefonrate | telephone\_rate | int | isys\_telephone\_rate\_\_id | Ja  |
| Anfangsdatum | start | date |     | Ja  |
| Enddatum | end | date |     | Ja  |
| Datum für Benachrichtigung | threshold\_date | date |     | Ja  |
| Kartennummer | card\_no | text |     | Ja  |
| Telefonnummer | phone\_no | text |     | Ja  |
| Kundennummer | client\_no | text |     | Ja  |
| Pin | pin | text |     | Ja  |
| Pin 2 | pin2 | text |     | Ja  |
| PUK | puk | text |     | Ja  |
| PUK2 | puk2 | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Twin-Karte | twincard | int |     | Ja  |
| Kartennummer (Twin-Karte) | tc\_card\_no | text |     | Ja  |
| Telefonnummer (Twin-Karte) | tc\_phone\_no | text |     | Ja  |
| Pin (Twin-Karte) | tc\_pin | text |     | Ja  |
| Pin 2 (Twin-Karte) | tc\_pin2 | text |     | Ja  |
| PUK (Twin-Karte) | tc\_puk | text |     | Ja  |
| PUK2 (Twin-Karte) | tc\_puk2 | text |     | Ja  |
| Seriennummer (Twin-Karte) | tc\_serial\_no | text |     | Ja  |
| Beschreibung (Twin-Karte) (Twin-Karte) | optional\_info | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### TSI-Service (C\_\_CATG\_\_TSI\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| TSI-Service ID | tsi\_service\_id | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Prüfung (C\_\_CATG\_\_AUDIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys\_catg\_audit\_type\_\_id | Ja  |
| Beauftragt | commission | int | isys\_contact\_\_id | Ja  |
| Verantwortlich | responsible | int | isys\_contact\_\_id | Ja  |
| Beteiligt | involved | int | isys\_contact\_\_id | Ja  |
| Herstellerfrist | period\_manufacturer | date |     | Ja  |
| Betreiberfrist | period\_operator | date |     | Ja  |
| Durchgeführt | apply | date |     | Ja  |
| Ergebnis | result | text\_area |     | Ja  |
| Störungen | fault | text\_area |     | Ja  |
| Zwischenfälle | incident | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Logischer Standort (C\_\_CATG\_\_LOGICAL\_UNIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | parent | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Endgeräte (C\_\_CATG\_\_ASSIGNED\_LOGICAL\_UNIT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | assigned\_object | int | isys\_obj\_\_id | Ja  |

### Zugewiesener Arbeitsplatz (C\_\_CATG\_\_ASSIGNED\_WORKSTATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Übergeordnetes Objekt | parent | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Arbeitsplätze (C\_\_CATG\_\_PERSON\_ASSIGNED\_WORKSTATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Arbeitsplätze | assigned\_workstations | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Vertragszuweisung (C\_\_CATG\_\_CONTRACT\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesener Vertrag | connected\_contract | int | isys\_connection\_\_id | Ja  |
| Vertragsbeginn | contract\_start | date |     | Ja  |
| Vertragsende | contract\_end | date |     | Ja  |
| Reaktionszeiten | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stacking (C\_\_CATG\_\_STACKING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Chassis | assigned\_object | int | isys\_connection\_\_id | Ja  |

### E-Mail Adressen (C\_\_CATG\_\_MAIL\_ADDRESSES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| E-Mail Adresse | title | text |     | Ja  |
| Primäre E-Mail-Adresse | primary\_mail | text |     | Ja  |
| Primär | primary | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### CUCM VoIP Telefon (C\_\_CATG\_\_VOIP\_PHONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Geräte Protokoll | device\_protocol | text |     | Ja  |
| Beschreibung | description2 | text |     | Ja  |
| Geräte-Pool | device\_pool | text |     | Ja  |
| Gemeinsame Gerätekonfiguration | common\_configuration | text |     | Ja  |
| Tastenbelegung | button\_template | int | isys\_voip\_phone\_button\_template\_\_id | Ja  |
| Belegung der programmierbaren Tasten (Softkeys) | softkey\_template | int | isys\_voip\_phone\_softkey\_template\_\_id | Ja  |
| Gemeinsame Geräteprofil | common\_profile | text |     | Ja  |
| Anrufauswahlzone | calling\_search\_space | text |     | Ja  |
| AAR Anrufauswahlzone | aar\_calling\_search\_space | text |     | Ja  |
| Medienressourcen Gruppenliste | media\_resource\_group\_list | text |     | Ja  |
| Benutzer MOH Audioquelle | user\_hold\_moh\_audio\_source | text |     | Ja  |
| Netzwerk MOH Audioquelle | network\_hold\_moh\_audio\_source | text |     | Ja  |
| Standort | location | text |     | Ja  |
| AAR Gruppe | aar\_group | text |     | Ja  |
| Benutzer-Gebietsschema | user\_locale | text |     | Ja  |
| Netzwerk Gebietsschema | network\_locale | text |     | Ja  |
| Eingebaute Netzwerkbrücke | built\_in\_bridge | text |     | Ja  |
| Privatsphäre | privacy | text |     | Ja  |
| Device Mobility Mode | device\_mobility\_mode | text |     | Ja  |
| Eigentümer Benutzer-ID | owner\_user\_id | text |     | Ja  |
| Phone suite | phone\_suite | text |     | Ja  |
| Service-Bereitstellung | services\_provisioning | text |     | Ja  |
| Load name | load\_name | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### CUCM VoIP Leitung (C\_\_CATG\_\_VOIP\_PHONE\_LINE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verzeichnis-Nummer | directory\_number | text |     | Ja  |
| Route-Partition | route\_partition | text |     | Ja  |
| Beschreibung | description2 | text |     | Ja  |
| Alarmierung Name | alerting\_name | text |     | Ja  |
| ASCII Alarmierung Name | ascii\_alerting\_name | text |     | Ja  |
| Telefon Steuerung via CTI erlauben | allow\_cti\_control | int |     | Ja  |
| Verbundene Geräte | associated\_devices | int |     | Ja  |
| Voice-Mail Profil | voice\_mail\_profile | text |     | Ja  |
| Anrufauswahlzone | calling\_search\_space | text |     | Ja  |
| Präsenzgruppe | presence\_group | text |     | Ja  |
| Benutzer MOH Audioquelle | user\_hold\_moh\_audio\_source | text |     | Ja  |
| Netzwerk MOH Audioquelle | network\_hold\_moh\_audio\_source | text |     | Ja  |
| Automatische Antwort | auto\_answer | text |     | Ja  |
| Alle Anrufe umleiten | call\_forward\_all | text |     | Ja  |
| Sekundäre Anrufauswahlzone für Anrufumleitung | sec\_calling\_search\_space | text |     | Ja  |
| Umleiten bei besetzt intern | forward\_busy\_internal | text |     | Ja  |
| Umleiten bei besetzt extern | forward\_busy\_external | text |     | Ja  |
| Umleiten bei keiner Antwort intern | forward\_no\_answer\_internal | text |     | Ja  |
| Umleiten bei keiner Antwort extern | forward\_no\_answer\_external | text |     | Ja  |
| Umleiten bei keiner Berichterstattung intern | forward\_no\_coverage\_internal | text |     | Ja  |
| Umleiten bei keiner Berichterstattung extern | forward\_no\_coverage\_external | text |     | Ja  |
| Umleitung bei CTI Fehler | forward\_on\_cti\_fail | text |     | Ja  |
| Umleitung bei unregistriert intern | forward\_unregistered\_internal | text |     | Ja  |
| Umleitung bei unregistriert extern | forward\_unregistered\_external | text |     | Ja  |
| Klingeldauer bei keiner Antwort | no\_answer\_ring\_duration | text |     | Ja  |
| Anrufübernahmegruppe | call\_pickup\_group | text |     | Ja  |
| Display | display | text |     | Ja  |
| ASCII Display | ascii\_display | text |     | Ja  |
| Titel der Leitung | line\_text\_label | text |     | Ja  |
| ASCII Titel der Leitung | ascii\_line\_text\_label | text |     | Ja  |
| Visual message waiting indicator policy | visual\_message\_indicator | text |     | Ja  |
| Audible message waiting indicator policy | audible\_message\_indicator | text |     | Ja  |
| Klingel-Einstellung (Telefon im Leerlauf) | ring\_settings\_idle | text |     | Ja  |
| Klingel-Einstellung (Telefon Aktiv) | ring\_settings\_active | text |     | Ja  |
| Call pickup group audio alert setting (phone idle) | call\_pickup\_group\_idle | text |     | Ja  |
| Call pickup group audio alert setting (phone active) | call\_pickup\_group\_active | text |     | Ja  |
| Aufnahmeoption | recording\_option | text |     | Ja  |
| Aufnahmeprofil | recording\_profile | text |     | Ja  |
| Monitoring calling search space | monitoring\_css | text |     | Ja  |
| Verpasste Anrufe mitloggen | log\_missed\_calls | int |     | Ja  |
| Externe Rufnummer Maske | external\_phone\_number\_mask | text |     | Ja  |
| Maximale Anzahl an Anrufen | max\_number\_of\_calls | text |     | Ja  |
| "Besetzt" Auslöser | busy\_trigger | text |     | Ja  |
| Name des Anrufers | caller\_name | int |     | Ja  |
| Nummer des Anrufers | caller\_number | int |     | Ja  |
| Umgeleitete Nummer | redirected\_number | int |     | Ja  |
| Gewählte Nummer | dialed\_number | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Telefon/Fax (C\_\_CATG\_\_TELEPHONE\_FAX)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_telephone\_fax\_type\_\_id | Ja  |
| Telefonnummer | telephone\_number | text |     | Ja  |
| Faxnummer | fax\_number | text |     | Ja  |
| Nebenstelle | extension | text |     | Ja  |
| Pin-Code | pincode | text |     | Ja  |
| IMEI-Nummer | imei | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Smartcard Zertifikat (C\_\_CATG\_\_SMARTCARD\_CERTIFICATE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kartennummer | cardnumber | text |     | Ja  |
| Sperrkennwort | barring\_password | text |     | Ja  |
| PIN-Nr. | pin\_nr | text |     | Ja  |
| Referenznummer | reference | text |     | Ja  |
| Läuft aus am | expires\_on | date |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Freigabenzugriff (C\_\_CATG\_\_SHARE\_ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gewähltes Objekt | assigned\_objects | int | isys\_connection\_\_id | Ja  |
| Mountpoint | mountpoint | text |     | Ja  |
| Freigabename | shares | int | isys\_catg\_shares\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zertifikat (C\_\_CATG\_\_CERTIFICATE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_certificate\_type\_\_id | Ja  |
| Erstelldatum | create\_date | date |     | Ja  |
| Ablaufdatum | expire\_date | date |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### SLA (C\_\_CATG\_\_SLA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service-ID | service\_id | text |     | Ja  |
| SLA Servicelevel | service\_level | int |     | Ja  |
| SLA Servicelevel (Dialog) | service\_level\_dialog | int | isys\_sla\_service\_level\_\_id | Ja  |
| Wochentag | days | int |     | Ja  |
| Montag | monday\_time | text |     | Ja  |
| Dienstag | tuesday\_time | text |     | Ja  |
| Mittwoch | wednesday\_time | text |     | Ja  |
| Donnerstag | thursday\_time | text |     | Ja  |
| Freitag | friday\_time | text |     | Ja  |
| Samstag | saturday\_time | text |     | Ja  |
| Sonntag | sunday\_time | text |     | Ja  |
| Reaktionszeit | reaction\_time | int |     | Ja  |
| Reaktionszeit Einheit | reaction\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Wiederherstellungszeit | recovery\_time | int |     | Ja  |
| Wiederherstellungszeit Einheit | recovery\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Kalender | calendar | int | isys\_calendar\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LDAP (C\_\_CATG\_\_LDAP\_DN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Distinguished Name (DN) | title | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Host Definition (C\_\_CATG\_\_NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is\_exportable | int |     | Ja  |
| Exportkonfiguration | export\_host | int | isys\_monitoring\_export\_config\_\_id | Ja  |
| Templates | host\_template | text |     | Ja  |
| host\_name | host\_name | text |     | Ja  |
| host\_name\_selection | host\_name\_selection | int |     | Ja  |
| Hostname | name1 | text |     | Ja  |
| Alias | alias | text |     | Ja  |
| IP-Adresse | address | int | isys\_catg\_ip\_list\_\_id | Ja  |
| address\_selection | address\_selection | int |     | Ja  |
| Weitere Objekte als parent wählen | parents | text |     | Ja  |
| Folgende Objekte als parent benutzen? | is\_parent | int |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | host\_notification\_options | text |     | Ja  |
| notification\_interval | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| obsess\_over\_host | obsess\_over\_host | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| vrml\_image | vrml\_image | text |     | Ja  |
| statusmap\_image | statusmap\_image | text |     | Ja  |
| 2d\_coords | twod\_coords | text |     | Ja  |
| 3d\_coords | threed\_coords | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Nagios Gruppe (C\_\_CATG\_\_NAGIOS\_GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is\_exportable | int |     | Ja  |
| Gruppen-Typ | type | int |     | Ja  |
| display\_name | name | text |     | Ja  |
| display\_name\_selection | name\_selection | int |     | Ja  |
| Alias | alias | text |     | Ja  |
| Notes | notes | text |     | Ja  |
| Notes URL | notes\_url | text |     | Ja  |
| Action URL | action\_url | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Nagios (Service) (C\_\_CATG\_\_NAGIOS\_SERVICE\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv | is\_active | int |     | Ja  |
| service\_description | service\_description | text |     | Ja  |
| Service-Template | template | text |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| notification\_interval | notification\_interval | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | service\_notification\_options | text |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| is\_volatile | is\_volatile | int |     | Ja  |
| obsess\_over\_service | obsess\_over\_service | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Ja  |
| escalations | escalations | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Nagios (Service TPL) (C\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| check\_command | check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Ja  |
| name | name | text |     | Ja  |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| notification\_interval | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | service\_notification\_options | text |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| is\_volatile | is\_volatile | int |     | Ja  |
| obsess\_over\_service | obsess\_over\_service | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Ja  |
| escalations | escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Service definition (C\_\_CATG\_\_NAGIOS\_SERVICE\_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv | is\_active | int |     | Ja  |
| service\_description | service\_description | text |     | Ja  |
| Service-Template | template | text |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| notification\_interval | notification\_interval | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | service\_notification\_options | text |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| is\_volatile | is\_volatile | int |     | Ja  |
| obsess\_over\_service | obsess\_over\_service | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Ja  |
| escalations | escalations | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Rückwärtige Servicezuweisung (C\_\_CATG\_\_NAGIOS\_REFS\_SERVICES\_BACKWARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned\_objects | int |     | Ja  |

### Service-Template definition (C\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| check\_command | check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Ja  |
| name | name | text |     | Ja  |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| notification\_interval | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | service\_notification\_options | text |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| is\_volatile | is\_volatile | int |     | Ja  |
| obsess\_over\_service | obsess\_over\_service | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Ja  |
| escalations | escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Zugewiesene Objekte (C\_\_CATG\_\_NAGIOS\_SERVICE\_REFS\_TPL\_BACKWARDS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned\_objects | int |     | Ja  |

### Nagios (Host TPL) (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Ja  |
| Nagios Host | nagios\_host | int | isys\_monitoring\_export\_config\_\_id | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | max\_check\_attempts | int |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| obsess\_over\_host | obsess\_over\_host | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| notification\_options | host\_notification\_options | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| vrml\_image | vrml\_image | text |     | Ja  |
| statusmap\_image | statusmap\_image | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Host-Template Definition (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Ja  |
| Nagios Host | nagios\_host | int | isys\_monitoring\_export\_config\_\_id | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | max\_check\_attempts | int |     | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| obsess\_over\_host | obsess\_over\_host | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| notification\_options | host\_notification\_options | text |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| vrml\_image | vrml\_image | text |     | Ja  |
| statusmap\_image | statusmap\_image | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |

### Nagios (Host) (C\_\_CATG\_\_NAGIOS\_HOST\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is\_exportable | int |     | Ja  |
| Exportkonfiguration | export\_host | int | isys\_monitoring\_export\_config\_\_id | Ja  |
| Templates | host\_template | text |     | Ja  |
| host\_name | host\_name | text |     | Ja  |
| host\_name\_selection | host\_name\_selection | int |     | Ja  |
| Hostname | name1 | text |     | Ja  |
| Alias | alias | text |     | Ja  |
| IP-Adresse | address | int | isys\_catg\_ip\_list\_\_id | Ja  |
| address\_selection | address\_selection | int |     | Ja  |
| Weitere Objekte als parent wählen | parents | text |     | Ja  |
| Folgende Objekte als parent benutzen? | is\_parent | int |     | Ja  |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Ja  |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| check\_command\_parameters | check\_command\_parameters | text |     | Ja  |
| check\_interval | check\_interval | int |     | Ja  |
| retry\_interval | retry\_interval | int |     | Ja  |
| max\_check\_attempts | max\_check\_attempts | int |     | Ja  |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Ja  |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Ja  |
| notifications\_enabled | notifications\_enabled | int |     | Ja  |
| notification\_options | host\_notification\_options | text |     | Ja  |
| notification\_interval | notification\_interval | int |     | Ja  |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| initial\_state | initial\_state | text |     | Ja  |
| obsess\_over\_host | obsess\_over\_host | int |     | Ja  |
| check\_freshness | check\_freshness | int |     | Ja  |
| freshness\_threshold | freshness\_threshold | int |     | Ja  |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Ja  |
| flap\_detection\_options | flap\_detection\_options | text |     | Ja  |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Ja  |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Ja  |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Ja  |
| event\_handler | event\_handler | int |     | Ja  |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Ja  |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Ja  |
| process\_perf\_data | process\_perf\_data | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| first\_notification\_delay | first\_notification\_delay | int |     | Ja  |
| stalking\_options | stalking\_options | text |     | Ja  |
| escalations | escalations | int |     | Ja  |
| action\_url | action\_url | text |     | Ja  |
| icon\_image | icon\_image | text |     | Ja  |
| icon\_image\_alt | icon\_image\_alt | text |     | Ja  |
| vrml\_image | vrml\_image | text |     | Ja  |
| statusmap\_image | statusmap\_image | text |     | Ja  |
| 2d\_coords | twod\_coords | text |     | Ja  |
| 3d\_coords | threed\_coords | text |     | Ja  |
| notes | notes | text |     | Ja  |
| notes\_url | notes\_url | text |     | Ja  |
| display\_name | display\_name | text |     | Ja  |
| display\_name\_selection | display\_name\_selection | int |     | Ja  |
| Name | name2 | text |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Objekte (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_ASSIGNED\_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned\_objects | text |     | Ja  |

### Servicezuweisung (C\_\_CATG\_\_NAGIOS\_REFS\_SERVICES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned\_objects | int | isys\_obj\_\_id | Ja  |

### Nagios (Anwendungen) (C\_\_CATG\_\_NAGIOS\_APPLICATION\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned\_objects | int | isys\_obj\_\_id | Ja  |

### Servicezuweisung (C\_\_CATG\_\_NAGIOS\_APPLICATION\_REFS\_NAGIOS\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Nagios Service | assigned\_objects | int | isys\_obj\_\_id | Ja  |

### Nagios Service-Dependencies (C\_\_CATG\_\_NAGIOS\_SERVICE\_DEP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Host | host | int | isys\_catg\_nagios\_refs\_services\_list\_\_id | Ja  |
| Service (Master) | service\_dependency | int |     | Nein |
| Host (Master) | host\_dependency | int | isys\_catg\_nagios\_refs\_services\_list\_\_id | Ja  |
| inherits\_parent | inherits\_parent | int |     | Ja  |
| execution\_failure\_criteria | execution\_fail\_criteria | int | isys\_catg\_nagios\_service\_dep\_list\_\_id | Ja  |
| notification\_failure\_criteria | notification\_fail\_criteria | int | isys\_catg\_nagios\_service\_dep\_list\_\_id | Ja  |
| dependency\_period | dependency\_period | int | isys\_nagios\_timeperiods\_\_id | Ja  |
| dependency\_period+ | dependency\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Anschrift (C\_\_CATG\_\_ADDRESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Adresszusatz | address | text\_area |     | Ja  |
| Straße | street | text |     | Ja  |
| Hausnummer | house\_no | text |     | Ja  |
| Etagen | stories | int |     | Ja  |
| Postleitzahl | postcode | text |     | Ja  |
| Ort | city | text |     | Ja  |
| Region | region | text |     | Ja  |
| Land | country | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Monitoring (C\_\_CATG\_\_MONITORING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Aktiv? | active | int |     | Ja  |
| Host | monitoring\_host | int | isys\_monitoring\_hosts\_\_id | Ja  |
| Hostname | host\_name | text |     | Ja  |
| Hostname auswahl | host\_name\_selection | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Livestatus (C\_\_CATG\_\_LIVESTATUS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Livestatus | livestatus\_state | int |     | Ja  |
| Livestatus (Knopf) | livestatus\_state\_button | int |     | Ja  |

### Fahrzeug (C\_\_CATG\_\_VEHICLE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Kennzeichen | licence\_plate | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Flugzeug (C\_\_CATG\_\_AIRCRAFT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Luftfahrzeugkennzeichen | registration | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netzwerkverbindungen (C\_\_CATG\_\_NET\_CONNECTIONS\_FOLDER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | protocol | int | isys\_net\_protocol\_\_id | Ja  |
| Layer 5-7 Protokoll | protocol\_layer\_5 | int | isys\_net\_protocol\_layer\_5\_\_id | Ja  |
| (Bind) IP-Adresse | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Von | port\_from | int |     | Ja  |
| Bis | port\_to | int |     | Ja  |
| Geöffnet durch Applikation | opened\_by | int | isys\_obj\_\_id | Ja  |
| Gateway | gateway | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Listener (C\_\_CATG\_\_NET\_LISTENER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | protocol | int | isys\_net\_protocol\_\_id | Ja  |
| Layer 5-7 Protokoll | protocol\_layer\_5 | int | isys\_net\_protocol\_layer\_5\_\_id | Ja  |
| (Bind) IP-Adresse | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Von | port\_from | int |     | Ja  |
| Bis | port\_to | int |     | Ja  |
| Geöffnet durch Applikation | opened\_by | int | isys\_obj\_\_id | Ja  |
| Gateway | gateway | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Verbindung (C\_\_CATG\_\_NET\_CONNECTOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| (Source) IP-Adresse | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Ja  |
| Von | port\_from | int |     | Ja  |
| Bis | port\_to | int |     | Ja  |
| Listener | connected\_listener | int | isys\_catg\_net\_listener\_list\_\_id | Nein |
| Verbunden mit | connected\_to | int | isys\_catg\_net\_listener\_list\_\_id | Nein |
| Gateway | gateway | int | isys\_obj\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Verwaltungsinstanz (C\_\_CATG\_\_CLUSTER\_ADM\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Verwaltungsinstanz (Objekt) | connected\_object | int | isys\_connection\_\_id | Ja  |
| Objekttyp | objtype | int |     | Ja  |

### JDisc Custom Attributes (C\_\_CATG\_\_JDISC\_CA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Attribut | attribute | text |     | Ja  |
| Wert | attribute\_content | text |     | Ja  |
| Typ | attribute\_type | int | isys\_jdisc\_ca\_type\_\_id | Ja  |
| Ordner | attribute\_folder | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LC\_\_CATG\_\_CMK\_FOLDER (C\_\_CATG\_\_CMK)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | active | int |     | Ja  |
| Exportkonfiguration | export\_config | int |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_ALIAS | title | text |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | export\_ip | int |     | Ja  |
| Hostadresse | hostaddress | int |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name | text |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name\_selection | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LC\_\_CATG\_\_CMK\_TAG (C\_\_CATG\_\_CMK\_TAG)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_TAG\_\_TAGS | tags | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LC\_\_CATG\_\_CMK\_HOST\_SERVICE (C\_\_CATG\_\_CMK\_HOST\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | service | text |     | Ja  |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_SOFTWARE\_ASSIGNMENT | software\_assignment | int | isys\_catg\_application\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LC\_\_CATG\_\_CMK\_SERVICE (C\_\_CATG\_\_CMK\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_MODULE\_\_CHECK\_MK\_\_HOST | host | int |     | Ja  |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | service | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### LC\_\_CATG\_\_CMK\_DEF (C\_\_CATG\_\_CMK\_DEF)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | active | int |     | Ja  |
| Exportkonfiguration | export\_config | int |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_ALIAS | title | text |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | export\_ip | int |     | Ja  |
| Hostadresse | hostaddress | int |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name | text |     | Ja  |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name\_selection | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### NDO (C\_\_CATG\_\_NDO)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| NDO Status | ndo\_state | text |     | Ja  |
| NDO Status Button | ndo\_state\_button | text |     | Ja  |

### Kabel (C\_\_CATG\_\_CABLE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art des Kabels | cable\_type | int | isys\_cable\_type\_\_id | Ja  |
| Farbe | cable\_colour | int | isys\_cable\_colour\_\_id | Ja  |
| Belegung | cable\_occupancy | int | isys\_cable\_occupancy\_\_id | Ja  |
| Länge in CM | length | float |     | Ja  |
| Längeneinheit | length\_unit | int |     | Ja  |
| Maximale Anzahl an Fasern/Adern | max\_amount\_of\_fibers\_leads | int |     | Ja  |
| Verbindung | connection | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Custom Identifier (C\_\_CATG\_\_IDENTIFIER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Key | key | text |     | Ja  |
| Value | value | text |     | Ja  |
| Zuletzt editiert | last\_edited | date\_time |     | Ja  |
| Art | type | int | isys\_catg\_identifier\_type\_\_id | Ja  |
| Gruppe | group | text |     | Ja  |
| Letzter Scan | last\_scan | text |     | Ja  |
| Letzte Aktualisierung | last\_updated | date\_time |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Service (C\_\_CATG\_\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Service Nummer | service\_number | text |     | Ja  |
| Art des Service | type | int | isys\_service\_type\_\_id | Ja  |
| Service-Kategorie | category | int | isys\_service\_category\_\_id | Ja  |
| Business Unit | business\_unit | int | isys\_business\_unit\_\_id | Ja  |
| Aktiv im Service-Katalog | active | int |     | Ja  |
| Servicebeschreibung intern | service\_description\_intern | text\_area |     | Ja  |
| Servicebeschreibung extern | service\_description\_extern | text\_area |     | Ja  |
| Aliase | service\_alias | int | isys\_catg\_service\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Betriebssystem (C\_\_CATG\_\_OPERATING\_SYSTEM)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Betriebssystem | application | int | isys\_connection\_\_id | Ja  |
| Typ | application\_type | int | isys\_catg\_application\_type\_\_id | Ja  |
| Priorität | application\_priority | int | isys\_catg\_application\_priority\_\_id | Ja  |
| Zugewiesene Lizenz | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned\_license\_key | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Ja  |
| Variante | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Ja  |
| Versionsnummer | assigned\_version | int | isys\_catg\_version\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### QinQ SP-VLAN (C\_\_CATG\_\_QINQ\_SP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | spvlan | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Faser/Ader (C\_\_CATG\_\_FIBER\_LEAD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Label | label | text |     | Ja  |
| Kategorie | category | int | isys\_fiber\_category\_\_id | Ja  |
| Farbe | color | int | isys\_cable\_colour\_\_id | Ja  |
| Dämpfung | damping | float |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### QinQ CE-VLAN (C\_\_CATG\_\_QINQ\_CE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | spvlan | int | isys\_connection\_\_id | Ja  |

### Bilder (C\_\_CATG\_\_IMAGES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Dateiname | name | text |     | Nein |
| Dateiinhalte | content | text |     | Ja  |

### WAN-Leitungen (C\_\_CATG\_\_WAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Rolle | role | int | isys\_wan\_role\_\_id | Ja  |
| Typ | type | int | isys\_wan\_type\_\_id | Ja  |
| Kanäle | channels | int |     | Ja  |
| Rufnummer(n) | call\_numbers | text\_area |     | Ja  |
| Standort des Anschlusses | connection\_location | int | isys\_obj\_\_id | Ja  |
| Kapazität UP | capacity\_up | float |     | Ja  |
| Kapazität UP Einheit | capacity\_up\_unit | int | isys\_wan\_capacity\_unit\_\_id | Ja  |
| Kapazität DOWN | capacity\_down | float |     | Ja  |
| Kapazität DOWN Einheit | capacity\_down\_unit | int | isys\_wan\_capacity\_unit\_\_id | Ja  |
| Max. Kapazität UP | max\_capacity\_up | float |     | Ja  |
| Max. Kapazität UP Einheit | max\_capacity\_up\_unit | int | isys\_wan\_capacity\_unit\_\_id | Ja  |
| Max. Kapazität DOWN | max\_capacity\_down | float |     | Ja  |
| Max. Kapazität DOWN Einheit | max\_capacity\_down\_unit | int | isys\_wan\_capacity\_unit\_\_id | Ja  |
| Projektnummer | project\_no | text |     | Ja  |
| VLAN-ID | vlan\_id | int | isys\_obj\_\_id | Ja  |
| Warenkorbnummer | shopping\_cart\_no | text |     | Ja  |
| Ticket Nr. | ticket\_no | text |     | Ja  |
| Kunden Nr. | customer\_no | text |     | Ja  |
| Verbundene Router | router | int | isys\_catg\_wan\_list\_2\_router\_\_isys\_catg\_wan\_list\_\_id | Ja  |
| Verbundene Netze | net | int | isys\_catg\_wan\_list\_2\_net\_\_isys\_catg\_wan\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Remote Management Controller (C\_\_CATG\_\_RM\_CONTROLLER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Primäre ZugriffsURL | remote\_url | text |     | Ja  |
| Remote Management Controller | connected\_object | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Verwaltete Geräte (C\_\_CATG\_\_RM\_CONTROLLER\_BACKWARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Remote Management Controller | connected\_object | int |     | Ja  |

### Virtuell gemanagte Objekte (C\_\_CATG\_\_MANAGED\_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | connected\_object | int |     | Ja  |

### VRRP (C\_\_CATG\_\_VRRP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_vrrp\_type\_\_id | Ja  |
| VR ID | vrid | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Mitglieder (C\_\_CATG\_\_VRRP\_MEMBER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| VRRP Mitglied | member | int | isys\_catg\_log\_port\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stack Mitglieder (C\_\_CATG\_\_STACK\_MEMBER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Mitglied | assigned\_object | int | isys\_obj\_\_id | Ja  |
| Modus | mode | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Letzter eingeloggter Benutzer (C\_\_CATG\_\_LAST\_LOGIN\_USER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Letzter eingeloggter Benutzer | last\_login | text |     | Ja  |
| Typ | type | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netzbereich (C\_\_CATG\_\_NET\_ZONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereiche | from-to | text | isys\_obj\_\_id | Ja  |

### Optionen (C\_\_CATG\_\_NET\_ZONE\_OPTIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereichsfarbe | color | text |     | Ja  |
| Bereichsfarbe | domain | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Bereiche (C\_\_CATG\_\_NET\_ZONE\_SCOPES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bereiche | from-to | text | isys\_obj\_\_id | Ja  |

Spezifische Kategorien (cats)
-----------------------------

### Rack (C\_\_CATS\_\_ENCLOSURE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertikale Einschübe (Frontseite) | vertical\_slots\_front | int |     | Ja  |
| Vertikale Einschübe (Rückseite) | vertical\_slots\_rear | int |     | Ja  |
| Sortierung der Höheneinheit | slot\_sorting | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Raum (C\_\_CATS\_\_ROOM)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_room\_type\_\_id | Ja  |
| Raumnummer | number | text |     | Ja  |
| Stockwerk | floor | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Dienste (C\_\_CATS\_\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_application\_manufacturer\_\_id | Ja  |
| Installationsart | installation | int | isys\_installation\_type\_\_id | Ja  |
| Registrierungs-Key | registration\_key | text |     | Ja  |
| Installationspfad | install\_path | text |     | Ja  |
| Anzahl Installationen | installation\_count | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Switch (C\_\_CATS\_\_SWITCH\_NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| VLAN Management Protokoll | vlan | int | isys\_vlan\_management\_protocol\_\_id | Ja  |
| Rolle | role | int | isys\_switch\_role\_\_id | Ja  |
| Spanning Tree | spanning\_tree | int | isys\_switch\_spanning\_tree\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### WAN-Leitungen (C\_\_CATS\_\_WAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Rolle | role | int | isys\_wan\_role\_\_id | Ja  |
| Typ | type | int | isys\_wan\_type\_\_id | Ja  |
| Kapazität | capacity | double |     | Ja  |
| Kapazitätseinheit | capacity\_unit | int | isys\_wan\_capacity\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Notfallplan (C\_\_CATS\_\_EMERGENCY\_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zeitbedarf | time\_needed | int |     | Ja  |
| Einheit | time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Datum Notfallübung | practice\_date | date\_time |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Klimaanlage (C\_\_CATS\_\_AC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art | type | int | isys\_ac\_type\_\_id | Ja  |
| Schwellwert | threshold | float |     | Ja  |
| Speicher-Einheit | threshold\_unit | int | isys\_temp\_unit\_\_id | Ja  |
| Kapazitätseinheit | capacity\_unit | int | isys\_ac\_refrigerating\_capacity\_unit\_\_id | Ja  |
| Kühlleistung | capacity | float |     | Ja  |
| Luftmenge | air\_quantity | float |     | Ja  |
| Volumen-Einheit | air\_quantity\_unit | int | isys\_ac\_air\_quantity\_unit\_\_id | Ja  |
| Breite | width | float |     | Ja  |
| Höhe | height | float |     | Ja  |
| Tiefe | depth | float |     | Ja  |
| Maßeinheit | dimension\_unit | int | isys\_depth\_unit\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### WiFi-Gerät (C\_\_CATS\_\_ACCESS\_POINT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Funktion | function | int | isys\_wlan\_function\_\_id | Ja  |
| Standard | standard | int | isys\_wlan\_standard\_\_id | Ja  |
| Kanal | channel | int | isys\_wlan\_channel\_\_id | Ja  |
| SSID übertragen | broadcast\_ssid | int |     | Ja  |
| SSID | ssid | text |     | Ja  |
| MAC-Filter | mac\_filter | int |     | Ja  |
| Authentifikation | auth | int | isys\_wlan\_auth\_\_id | Ja  |
| Verschlüsselung | encryption\_id | int | isys\_wlan\_encryption\_\_id | Ja  |
| Schlüssel | key | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Monitor (C\_\_CATS\_\_MONITOR)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Display | size | float |     | Ja  |
| Einheit | size\_unit | int | isys\_depth\_unit\_\_id | Ja  |
| Typ | type | int | isys\_monitor\_type\_\_id | Ja  |
| Auflösung | resolution | int | isys\_monitor\_resolution\_\_id | Ja  |
| Pivot | pivot | int |     | Ja  |
| Lautsprecher | speaker | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Arbeitsplatzsystem (C\_\_CATS\_\_CLIENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ des Clients | type | int | isys\_client\_type\_\_id | Ja  |
| Tastatur-Layout | keyboard\_layout | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### FC-Switch (C\_\_CATS\_\_SWITCH\_FC)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Aktiv | is\_active | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Routing (C\_\_CATS\_\_ROUTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Routingprotokoll | routing\_protocol | int | isys\_routing\_protocol\_\_id | Ja  |
| Gateway Adresse | gateway\_address | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Drucker (C\_\_CATS\_\_PRT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_cats\_prt\_type\_\_id | Ja  |
| Farbe | is\_color | int |     | Ja  |
| Duplex | is\_duplex | int |     | Ja  |
| Emulation | emulation | int | isys\_cats\_prt\_emulation\_\_id | Ja  |
| Papierformat | paper\_format | int | isys\_cats\_prt\_paper\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Dateien (C\_\_CATS\_\_FILE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | file\_title | text |     | Ja  |
| Dateiname | file\_physical | int |     | Ja  |
| Kategorie | file\_category | int | isys\_file\_category\_\_id | Ja  |
| Revision | revision | text |     | Ja  |
| Versions-Beschreibung | version\_description | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Version | current\_version | int | isys\_file\_version\_\_id | Ja  |
| MD5 Checksumme | md5\_hash | text |     | Ja  |

### Anwendungen (C\_\_CATS\_\_APPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_application\_manufacturer\_\_id | Ja  |
| Installationsart | installation | int | isys\_installation\_type\_\_id | Ja  |
| Registrierungs-Key | registration\_key | text |     | Ja  |
| Installationspfad | install\_path | text |     | Ja  |
| Anzahl Installationen | installation\_count | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netz (C\_\_CATS\_\_NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | type | int | isys\_net\_type\_\_id | Ja  |
| Netz | address | text |     | Ja  |
| Netzmaske | netmask | text |     | Ja  |
| Standardgateway | gateway | int |     | Ja  |
| Adresse von | range\_from | text |     | Ja  |
| Adresse bis | range\_to | text |     | Ja  |
| DNS-Server | dns\_server | int | isys\_cats\_net\_list\_\_id | Ja  |
| DNS Domäne | dns\_domain | int | isys\_cats\_net\_list\_\_id | Ja  |
| CIDR-Suffix | cidr\_suffix | int |     | Ja  |
| Reverse DNS | reverse\_dns | text |     | Ja  |
| Layer-2-Netz Zuordnung | layer2\_assignments | int |     | Ja  |
| Netz | address\_v6 | text |     | Ja  |
| Adressbereich | address\_range | text |     | Ja  |
| Netz mit Suffix | address\_with\_suffix | text |     | Ja  |
| Zugewiesene Adressen | free\_addresses | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Mobilfunk (C\_\_CATS\_\_CELL\_PHONE\_CONTRACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| IMEI-Nummer | imei\_number | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Objektgruppe (C\_\_CATS\_\_GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys\_connection\_\_id | Ja  |
| Objekttyp | object\_type | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Lizenzschlüssel (C\_\_CMDB\_\_SUBCAT\_\_LICENCE\_LIST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Schlüssel | key | text |     | Ja  |
| Seriennummer | serial | text |     | Ja  |
| Lizenz Typ | type | int |     | Ja  |
| Anzahl | amount | int |     | Ja  |
| Lizenzen in Benutzung | used\_licences | int |     | Ja  |
| Freie Lizenzen | lic\_not\_in\_use | int |     | Ja  |
| Startdatum | start | date |     | Ja  |
| Ablaufdatum | expire | date |     | Ja  |
| Einzelpreis | cost | double |     | Ja  |
| Gesamtkosten | overall\_costs | double |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Aktuelle Datei (C\_\_CMDB\_\_SUBCAT\_\_FILE\_ACTUAL)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | file\_title | text |     | Ja  |
| Dateiname | file\_physical | int |     | Ja  |
| Kategorie | file\_category | int | isys\_file\_category\_\_id | Ja  |
| Revision | revision | text |     | Ja  |
| Versions-Beschreibung | version\_description | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Version | current\_version | int | isys\_file\_version\_\_id | Ja  |
| MD5 Checksumme | md5\_hash | text |     | Ja  |

### Dateiversionen (C\_\_CMDB\_\_SUBCAT\_\_FILE\_VERSIONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Dateiname | file\_physical | text |     | Ja  |
| Datei Inhalt | file\_content | text |     | Ja  |
| Bezeichnung | file\_title | text |     | Ja  |
| Revision | revision | text |     | Ja  |
| Upload Datum | upload\_date | text |     | Ja  |
| Versions-Beschreibung | version\_description | text\_area |     | Ja  |
| MD5 Checksumme | md5\_hash | text |     | Ja  |
| Upload von | uploaded\_by | text |     | Ja  |

### Zugewiesene Objekte (C\_\_CMDB\_\_SUBCAT\_\_FILE\_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | assigned\_objects | int |     | Ja  |

### Notfallplan Eigenschaften (C\_\_CMDB\_\_SUBCAT\_\_EMERGENCY\_PLAN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zeitbedarf | time\_needed | int |     | Ja  |
| Einheit | time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Datum Notfallübung | practice\_date | date\_time |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### zugewiesene Objekte (C\_\_CMDB\_\_SUBCAT\_\_EMERGENCY\_PLAN\_LINKED\_OBJECT\_LIST)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | text |     | Ja  |

### Netzart (C\_\_CMDB\_\_SUBCAT\_\_WS\_NET\_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzart | title | int | isys\_net\_type\_title\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugeordnete Objekte (C\_\_CMDB\_\_SUBCAT\_\_WS\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugewiesene Objekte | connected\_object | int |     | Ja  |

### Leitungsnetz (C\_\_CATS\_\_WS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzart | title | int | isys\_net\_type\_title\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Unterbrechungsfreie Stromversorgung (C\_\_CATS\_\_UPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | type | int | isys\_ups\_type\_\_id | Ja  |
| Batterietyp | battery\_type | int | isys\_ups\_battery\_type\_\_id | Ja  |
| Anzahl Batterien | amount | int |     | Ja  |
| Ladedauer | charge\_time | int |     | Ja  |
| Einheit | charge\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Autonomiezeit unter Volllast | autonomy\_time | int |     | Ja  |
| Einheit | autonomy\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netzersatzanlage (C\_\_CATS\_\_EPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Art | type | int | isys\_cats\_eps\_type\_\_id | Ja  |
| Anlaufzeit | warmup\_time | int |     | Ja  |
| Einheit | warmup\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Kraftstofftank | fuel\_tank | int |     | Ja  |
| Einheit | volume\_unit | int | isys\_volume\_unit\_\_id | Ja  |
| Autonomiezeit | autonomy\_time | int |     | Ja  |
| Einheit | autonomy\_time\_unit | int | isys\_unit\_of\_time\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### SAN Zoning (C\_\_CATS\_\_SAN\_ZONING)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Mitglieder | members | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Organisation (C\_\_CATS\_\_ORGANIZATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Nein |
| Telefon | telephone | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Webseite | website | text |     | Ja  |
| Zentrale | headquarter | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stammdaten (C\_\_CATS\_\_ORGANIZATION\_MASTER\_DATA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Nein |
| Telefon | telephone | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Webseite | website | text |     | Ja  |
| Zentrale | headquarter | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Personen (C\_\_CATS\_\_ORGANIZATION\_PERSONS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | int |     | Ja  |
| Kontakt | contact | int |     | Ja  |

### Personen (C\_\_CATS\_\_PERSON)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Anrede | salutation | text |     | Ja  |
| Vorname | first\_name | text |     | Ja  |
| Nachname | last\_name | text |     | Ja  |
| Titel (Akademischer Grad) | academic\_degree | text |     | Ja  |
| Funktion | function | text |     | Ja  |
| Dienstbezeichnung | service\_designation | text |     | Ja  |
| Straße | street | text |     | Ja  |
| Ort | city | text |     | Ja  |
| PLZ | zip\_code | text |     | Ja  |
| E-Mail Adresse | mail | text |     | Ja  |
| Telefon Firma | phone\_company | text |     | Ja  |
| Telefon Privat | phone\_home | text |     | Ja  |
| Handy | phone\_mobile | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Pager | pager | text |     | Ja  |
| Personalnummer | personnel\_number | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Firma | organization | int | isys\_connection\_\_id | Ja  |
| ID  | ldap\_id | text |     | Ja  |
| DN  | ldap\_dn | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Custom 1 | custom\_1 | text |     | Ja  |
| Custom 2 | custom\_2 | text |     | Ja  |
| Custom 3 | custom\_3 | text |     | Ja  |
| Custom 4 | custom\_4 | text |     | Ja  |
| Custom 5 | custom\_5 | text |     | Ja  |
| Custom 6 | custom\_6 | text |     | Ja  |
| Custom 7 | custom\_7 | text |     | Ja  |
| Custom 8 | custom\_8 | text |     | Ja  |

### Stammdaten (C\_\_CATS\_\_PERSON\_MASTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Anrede | salutation | text |     | Ja  |
| Vorname | first\_name | text |     | Ja  |
| Nachname | last\_name | text |     | Ja  |
| Titel (Akademischer Grad) | academic\_degree | text |     | Ja  |
| Funktion | function | text |     | Ja  |
| Dienstbezeichnung | service\_designation | text |     | Ja  |
| Straße | street | text |     | Ja  |
| Ort | city | text |     | Ja  |
| PLZ | zip\_code | text |     | Ja  |
| E-Mail Adresse | mail | text |     | Ja  |
| Telefon Firma | phone\_company | text |     | Ja  |
| Telefon Privat | phone\_home | text |     | Ja  |
| Handy | phone\_mobile | text |     | Ja  |
| Fax | fax | text |     | Ja  |
| Pager | pager | text |     | Ja  |
| Personalnummer | personnel\_number | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Firma | organization | int | isys\_connection\_\_id | Ja  |
| ID  | ldap\_id | text |     | Ja  |
| DN  | ldap\_dn | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Custom 1 | custom\_1 | text |     | Ja  |
| Custom 2 | custom\_2 | text |     | Ja  |
| Custom 3 | custom\_3 | text |     | Ja  |
| Custom 4 | custom\_4 | text |     | Ja  |
| Custom 5 | custom\_5 | text |     | Ja  |
| Custom 6 | custom\_6 | text |     | Ja  |
| Custom 7 | custom\_7 | text |     | Ja  |
| Custom 8 | custom\_8 | text |     | Ja  |

### Login (C\_\_CATS\_\_PERSON\_LOGIN)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Username | title | text |     | Ja  |
| Passwort | user\_pass | text |     | Ja  |
| Passwort | user\_pass2 | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |
| Custom 1 | custom\_1 | text |     | Ja  |
| Custom 2 | custom\_2 | text |     | Ja  |
| Custom 3 | custom\_3 | text |     | Ja  |
| Custom 4 | custom\_4 | text |     | Ja  |
| Custom 5 | custom\_5 | text |     | Ja  |
| Custom 6 | custom\_6 | text |     | Ja  |
| Custom 7 | custom\_7 | text |     | Ja  |
| Custom 8 | custom\_8 | text |     | Ja  |

### Personengruppenmitgliedschaft (C\_\_CATS\_\_PERSON\_ASSIGNED\_GROUPS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Personengruppenmitgliedschaft | connected\_object | int |     | Ja  |
| Kontakt | contact | int |     | Ja  |

### Personengruppen (C\_\_CATS\_\_PERSON\_GROUP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Name | title | text |     | Ja  |
| Email | email\_address | text |     | Ja  |
| Telefon | phone | text |     | Ja  |
| LDAP-Gruppe (Mapping) | ldap\_group | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Stammdaten (C\_\_CATS\_\_PERSON\_GROUP\_MASTER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Name | title | text |     | Ja  |
| Email | email\_address | text |     | Ja  |
| Telefon | phone | text |     | Ja  |
| LDAP-Gruppe (Mapping) | ldap\_group | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Mitglieder (C\_\_CATS\_\_PERSON\_GROUP\_MEMBERS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorname | first\_name | text |     | Ja  |
| Nachname | last\_name | text |     | Ja  |
| Abteilung | department | text |     | Ja  |
| Telefon Firma | phone\_company | text |     | Ja  |
| Email | email\_address | text |     | Ja  |
| Firma | organization | int |     | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Mitglieder | connected\_object | int |     | Ja  |

### Zugewiesene Objekte (C\_\_CATS\_\_ORGANIZATION\_CONTACT\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | object | int |     | Ja  |
| Rolle | role | int | isys\_contact\_tag\_\_id | Ja  |

### Zugewiesene Objekte (C\_\_CATS\_\_PERSON\_CONTACT\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys\_connection\_\_isys\_obj\_\_id | Nein |
| Objekttyp | object\_type | int |     | Ja  |
| Rolle | role | int | isys\_contact\_tag\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Objekte (C\_\_CATS\_\_PERSON\_GROUP\_CONTACT\_ASSIGNMENT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt | object | int | isys\_connection\_\_isys\_obj\_\_id | Nein |
| Objekttyp | object\_type | int |     | Ja  |
| Rolle | role | int | isys\_contact\_tag\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugeordnete Cluster (C\_\_CATS\_\_CLUSTER\_SERVICE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Cluster | cluster | int |     | Nein |
| Typ | type | int | isys\_cluster\_type\_\_id | Ja  |
| Läuft auf | runs\_on | int |     | Ja  |
| Standard Server | default\_server | int |     | Ja  |
| Hostadressen | hostaddresses | int | isys\_catg\_cluster\_service\_list\_\_id | Ja  |
| Laufwerke | drives | int |     | Ja  |
| Freigaben | shares | int |     | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Beziehungsdetails (C\_\_CATS\_\_RELATION\_DETAILS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Object1 | object1 | int |     | Ja  |
| Object2 | object2 | int |     | Ja  |
| Service | itservice | int |     | Ja  |
| Beziehungsart | relation\_type | int | isys\_relation\_type\_\_id | Ja  |
| Gewichtung | weighting | int | isys\_weighting\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datenbankschema (C\_\_CATS\_\_DATABASE\_SCHEMA)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Läuft auf | link | int |     | Ja  |
| Datenbankinstanz | instance | int | isys\_cats\_database\_instance\_list\_\_id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Storage-Engine | storage\_engine | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datenbanklinks (C\_\_CATS\_\_DATABASE\_LINKS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Verknüpftes Datenbankschema | link | int | isys\_connection\_\_id | Ja  |
| Ziel-Benutzer | target\_user | text |     | Ja  |
| Besitzer | owner | text |     | Ja  |
| Öffentlich | public | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### DBMS (C\_\_CATS\_\_DBMS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| DBMS | dbms | int | isys\_dbms\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Instanz / Oracle Datenbank (C\_\_CATS\_\_DATABASE\_INSTANCE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| DBMS | instance | int | isys\_connection\_\_id | Ja  |
| Bezeichnung | title | text |     | Ja  |
| Listener | listener | text |     | Ja  |
| Datenbankschema | database\_schema | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### PDU (C\_\_CATS\_\_PDU)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu\_id | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Branch (C\_\_CATS\_\_PDU\_BRANCH)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu\_id | int |     | Ja  |
| Branch-ID | branch\_id | int |     | Ja  |
| Aufnahmefähig | receptables | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Gleichgerichtete Beziehungen (C\_\_CATS\_\_PARALLEL\_RELATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Mindestmenge an aktiven Komponenten | threshold | text |     | Ja  |
| Gleichgerichtete Beziehungen | rel\_pool | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datenbankobjekte (C\_\_CATS\_\_DATABASE\_OBJECTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Typ | database\_object | int | isys\_database\_objects\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Datenbankzugriff (C\_\_CATS\_\_DATABASE\_ACCESS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Objekte | access | int |     | Ja  |

### Datenbank Gateway (C\_\_CATS\_\_DATABASE\_GATEWAY)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Gateway Typ | type | text |     | Ja  |
| Host | host | text |     | Ja  |
| Port | port | text |     | Ja  |
| User | user | text |     | Ja  |
| verwendetes Datenbankschema | target\_schema | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Replikation (C\_\_CATS\_\_REPLICATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Replikationsmechanismus | replication\_mechanism | int | isys\_replication\_mechanism\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Replikationspartner (C\_\_CATS\_\_REPLICATION\_PARTNER)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Replikationstyp | type | int | isys\_replication\_type\_\_id | Ja  |
| Replikationspartner | replication\_partner | int | isys\_connection\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Installation (C\_\_CATS\_\_APPLICATION\_ASSIGNED\_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application\_type | int | isys\_catg\_application\_type\_\_id | Ja  |
| Priorität | application\_priority | int | isys\_catg\_application\_priority\_\_id | Ja  |
| Zugewiesene Lizenz | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Ja  |
| Variante | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Ja  |
| Nagios services vererben | bequest\_nagios\_services | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Middleware (C\_\_CATS\_\_MIDDLEWARE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Spezifikation | specification | text |     | Ja  |
| Hersteller | manufacturer | int | isys\_application\_manufacturer\_\_id | Ja  |
| Installationsart | installation | int | isys\_installation\_type\_\_id | Ja  |
| Registrierungs-Key | registration\_key | text |     | Ja  |
| Installationspfad | install\_path | text |     | Ja  |
| Anzahl Installationen | installation\_count | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Kryptokarte (C\_\_CATS\_\_KRYPTO\_CARD)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zertifikatsnummer | certificate\_number | text |     | Ja  |
| Certgate Karten-Nummer | certgate\_card\_number | text |     | Ja  |
| Zertifikatsname | certificate\_title | text |     | Ja  |
| Zertifikatsperrkennwort | certificate\_password | text |     | Ja  |
| Zertifikatsablauf | certificate\_procedure | date |     | Ja  |
| Ausgabedatum | date\_of\_issue | date |     | Ja  |
| IMEI-Nummer | imei\_number | text |     | Ja  |
| verknüpftes Mobiltelefon | assigned\_mobile | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### IP-Liste (C\_\_CATS\_\_NET\_IP\_ADDRESSES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | net\_type | int | isys\_net\_type\_\_id | Ja  |
| Hostadresse | title | text |     | Ja  |
| Objekt | assigned\_object | int |     | Ja  |
| Adressvergabe IPv4 | ipv4\_assignment | int | isys\_ip\_assignment\_\_id | Ja  |
| Adressvergabe IPv6 | ipv6\_assignment | int | isys\_ipv6\_assignment\_\_id | Ja  |
| Objekt | object | int |     | Ja  |
| IP-Liste öffnen | ip\_address\_link | text |     | Ja  |

### DHCP (C\_\_CATS\_\_NET\_DHCP)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ v4 | type | int | isys\_net\_dhcp\_type\_\_id | Ja  |
| Typ v6 | typev6 | int | isys\_net\_dhcpv6\_type\_\_id | Ja  |
| DHCP von | range\_from | text |     | Ja  |
| DHCP bis | range\_to | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Layer-2-Netz (C\_\_CATS\_\_LAYER2\_NET)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| ID (VLAN) | vlan\_id | text |     | Ja  |
| Standard VLAN | standard | int |     | Ja  |
| Typ | type | int | isys\_layer2\_net\_type\_\_id | Ja  |
| Unterart | subtype | int | isys\_layer2\_net\_subtype\_\_id | Ja  |
| IP-Helper-Adressen | ip\_helper\_addresses | int |     | Ja  |
| Layer-3-Netz Zuordnung | layer3\_assignments | int | isys\_obj\_\_id | Ja  |
| VRF | vrf | text |     | Ja  |
| VRF Kapazität | vrf\_capacity | int |     | Ja  |
| VRF Kapazität (Einheit) | vrf\_capacity\_unit | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Ports (C\_\_CATS\_\_LAYER2\_NET\_ASSIGNED\_PORTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt-Titel | isys\_obj\_\_id | int |     | Ja  |
| Zugewiesene Ports | isys\_catg\_port\_list\_\_id | int |     | Ja  |
| MAC-Adresse | isys\_catg\_port\_list\_\_mac | int |     | Ja  |

### Vertrag (C\_\_CATS\_\_CONTRACT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertragsart | type | int | isys\_contract\_type\_\_id | Ja  |
| Vertragsnummer | contract\_no | text |     | Ja  |
| Kundennummer | customer\_no | text |     | Ja  |
| Interne Nummer | internal\_no | text |     | Ja  |
| Kosten | costs | double |     | Ja  |
| Produkt | product | text |     | Ja  |
| Reaktionszeiten | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Ja  |
| Vertragsstatus | contract\_status | int | isys\_contract\_status\_\_id | Ja  |
| Vertragsbeginn | start\_date | date |     | Ja  |
| Vertragsende | end\_date | date |     | Ja  |
| Laufzeit | run\_time | int |     | Ja  |
| Laufzeit Einheit | run\_time\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Nächstmögliches Vertragsende | next\_contract\_end\_date | text |     | Ja  |
| Vertragsende durch | end\_type | int | isys\_contract\_end\_type\_\_id | Ja  |
| Nächstmögliches Kündigungsdatum | next\_notice\_end\_date | text |     | Ja  |
| Kündigungsdatum | notice\_date | date |     | Ja  |
| Kündigungsfrist | notice\_period | int |     | Ja  |
| Kündigungsfrist Einheit | notice\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Kündigungstyp | notice\_type | int | isys\_contract\_notice\_period\_type\_\_id | Ja  |
| Wartungs-/Garantiefrist | maintenance\_period | int |     | Ja  |
| Frist Einheit | maintenance\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Zahlart | payment\_period | int | isys\_contract\_payment\_period\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Vertragsinformationen (C\_\_CATS\_\_CONTRACT\_INFORMATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vertragsart | type | int | isys\_contract\_type\_\_id | Ja  |
| Vertragsnummer | contract\_no | text |     | Ja  |
| Kundennummer | customer\_no | text |     | Ja  |
| Interne Nummer | internal\_no | text |     | Ja  |
| Kosten | costs | double |     | Ja  |
| Produkt | product | text |     | Ja  |
| Reaktionszeiten | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Ja  |
| Vertragsstatus | contract\_status | int | isys\_contract\_status\_\_id | Ja  |
| Vertragsbeginn | start\_date | date |     | Ja  |
| Vertragsende | end\_date | date |     | Ja  |
| Laufzeit | run\_time | int |     | Ja  |
| Laufzeit Einheit | run\_time\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Nächstmögliches Vertragsende | next\_contract\_end\_date | text |     | Ja  |
| Vertragsende durch | end\_type | int | isys\_contract\_end\_type\_\_id | Ja  |
| Nächstmögliches Kündigungsdatum | next\_notice\_end\_date | text |     | Ja  |
| Kündigungsdatum | notice\_date | date |     | Ja  |
| Kündigungsfrist | notice\_period | int |     | Ja  |
| Kündigungsfrist Einheit | notice\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Kündigungstyp | notice\_type | int | isys\_contract\_notice\_period\_type\_\_id | Ja  |
| Wartungs-/Garantiefrist | maintenance\_period | int |     | Ja  |
| Frist Einheit | maintenance\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Ja  |
| Zahlart | payment\_period | int | isys\_contract\_payment\_period\_\_id | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugeordnete Objekte (C\_\_CATS\_\_CONTRACT\_ALLOCATION)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Zugeordnete Objekte | assigned\_object | int |     | Ja  |

### Chassis (C\_\_CATS\_\_CHASSIS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | front\_x | int |     | Ja  |
| Vorderseite vertikale Einheiten | front\_y | int |     | Ja  |
| Vorderseite Rastergröße | front\_size | int |     | Ja  |
| Rückseite horizontale Einheiten | rear\_x | int |     | Ja  |
| Rückseite vertikale Einheiten | rear\_y | int |     | Ja  |
| Rückseite Rastergröße | rear\_size | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Slots (C\_\_CATS\_\_CHASSIS\_SLOT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Anschlusstyp | connector\_type | int | isys\_chassis\_connector\_type\_\_id | Ja  |
| Einschub | insertion | int |     | Ja  |
| Slotbezeichnung | title | text |     | Ja  |
| Horizontale Position | from\_x | int |     | Ja  |
| Bis Horizontale Position | to\_x | int |     | Ja  |
| Vertikale Position | from\_y | int |     | Ja  |
| Bis Vertikale Position | to\_y | int |     | Ja  |
| Gerätezuordnung | assigned\_devices | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene Geräte (C\_\_CATS\_\_CHASSIS\_DEVICES)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Rolle | role | int | isys\_chassis\_role\_\_id | Ja  |
| Gerätezuordnung | assigned\_device | int | isys\_connection\_\_id | Ja  |
| Gerätezuordnung (Hostadapter) | assigned\_hba | int | isys\_catg\_hba\_list\_\_id | Ja  |
| Gerätezuordnung (Interface) | assigned\_interface | int | isys\_catg\_netp\_list\_\_id | Ja  |
| Gerätezuordnung (Stromverbraucher) | assigned\_power\_consumer | int | isys\_catg\_pc\_list\_\_id | Ja  |
| Eingeschoben bei | assigned\_slots | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Chassis Ansicht (C\_\_CATS\_\_CHASSIS\_VIEW)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | front\_x | int |     | Ja  |
| Vorderseite vertikale Einheiten | front\_y | int |     | Ja  |
| Vorderseite Rastergröße | front\_size | int |     | Ja  |
| Rückseite horizontale Einheiten | rear\_x | int |     | Ja  |
| Rückseite vertikale Einheiten | rear\_y | int |     | Ja  |
| Rückseite Rastergröße | rear\_size | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Varianten (C\_\_CATS\_\_APPLICATION\_VARIANT)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Bezeichnung | title | text |     | Ja  |
| Variante | variant | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Nagios (C\_\_CATS\_\_PERSON\_NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Alias | alias | text |     | Ja  |
| contact\_name | contact\_name | text |     | Ja  |
| contact\_name selection | contact\_name\_selection | int |     | Ja  |
| host\_notification\_enabled | host\_notification\_enabled | int |     | Ja  |
| service\_notification\_enabled | service\_notification\_enabled | int |     | Ja  |
| host\_notification\_period | host\_notification\_period | int |     | Ja  |
| host\_notification\_period+ | host\_notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| service\_notification\_period | service\_notification\_period | int |     | Ja  |
| service\_notification\_period+ | service\_notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Ja  |
| host\_notification\_options | host\_notification\_options | text |     | Ja  |
| service\_notification\_options | service\_notification\_options | text |     | Ja  |
| host\_notification\_commands | host\_notification\_commands | text |     | Ja  |
| service\_notification\_commands | service\_notification\_commands | text |     | Ja  |
| can\_submit\_commands | can\_submit\_commands | int |     | Ja  |
| retain\_status\_information | retain\_status\_information | int |     | Ja  |
| Diese Konfiguration exportieren | is\_exportable | int |     | Ja  |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Ja  |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Nagios (C\_\_CATS\_\_PERSON\_GROUP\_NAGIOS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Diese Konfiguration exportieren | is\_exportable | int |     | Ja  |
| alias | alias | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Typ (C\_\_CATS\_\_GROUP\_TYPE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Typ | group\_type | int |     | Ja  |
| Report | report | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Zugewiesene logische Ports (C\_\_CATS\_\_LAYER2\_NET\_ASSIGNED\_LOGICAL\_PORTS)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Objekt-Titel | isys\_obj\_\_id | int |     | Ja  |
| Zugewiesene logische Ports | isys\_catg\_log\_port\_list\_\_id | int |     | Ja  |

### Installation (C\_\_CATS\_\_APPLICATION\_SERVICE\_ASSIGNED\_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application\_type | int | isys\_catg\_application\_type\_\_id | Ja  |
| Priorität | application\_priority | int | isys\_catg\_application\_priority\_\_id | Ja  |
| Zugewiesene Lizenz | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Ja  |
| Variante | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Ja  |
| Nagios services vererben | bequest\_nagios\_services | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Installation (C\_\_CATS\_\_APPLICATION\_DBMS\_ASSIGNED\_OBJ)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Installiert auf | object | int |     | Nein |
| Typ | application\_type | int | isys\_catg\_application\_type\_\_id | Ja  |
| Priorität | application\_priority | int | isys\_catg\_application\_priority\_\_id | Ja  |
| Zugewiesene Lizenz | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Ja  |
| Zugewiesener Lizenzschlüssel | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Ja  |
| Datenbankschema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Ja  |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Ja  |
| Variante | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Ja  |
| Nagios services vererben | bequest\_nagios\_services | int |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |

### Netzbereiche (C\_\_CATS\_\_NET\_ZONE)

| Feldname | Key | Datentyp | Referenz | Optional |
| --- | --- | --- | --- | --- |
| Netzbereich Objekt | zone | int | isys\_obj\_\_id | Ja  |
| Bereich von | range\_from | text |     | Ja  |
| Bereich von | range\_from\_long | text |     | Ja  |
| Bereich bis | range\_to | text |     | Ja  |
| Bereich bis | range\_to\_long | text |     | Ja  |
| Beschreibung | description | text\_area |     | Ja  |