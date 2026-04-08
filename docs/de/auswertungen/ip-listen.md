---
title: "IP-Listen"
description: "Welche IP-Adressen sind an welchen Host vergeben und welche sind noch frei?"
icon:
status:
lang: de
---
# IP-Listen

Welche IP-Adressen sind an welchen Host vergeben und welche sind noch frei? Die IP-Listen in i-doit geben dir einen schnellen Überblick.

Einen umfassenderen Einstieg in das Thema findest du im Anwendungsfall [IP Address Management (IPAM)](../anwendungsfaelle/ip-adress-management.md).

## Kategorie IP-Liste

Eine umfassende Übersicht über jedes Netz bietet die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **IP-Liste**, die in der Standardinstallation von i-doit dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Layer-3-Netz** zugeordnet ist. In einer tabellarischen Liste befinden sich alle [Objekte](../grundlagen/struktur-it-dokumentation.md), die diesem Netz zugeordnet sind, nebst IP-Adresse, Hostname und Art der Adressvergabe.

[![Kategorie IP-Liste](../assets/images/de/auswertungen/ip-listen/ip-liste.png)](../assets/images/de/auswertungen/ip-listen/ip-liste.png)

Die Art der Adressvergabe wird farblich dargestellt, worüber eine Legende rechts neben der Liste aufklärt:

*   **Grün:**<br>
    Netz-/Broadcast-Adresse

*   **Gelb:**<br>
    Default Gateway (Dies ist dasjenige Objekt, bei dem in der Kategorie Hostadresse angegeben wurde, als Default Gateway zu agieren.)

*   **Orange:**<br>
    unnummerierter Adressbereich

*   **Grau:**<br>
    statisch vergebene IP-Adressen

*   **Blau:**<br>
    vom DHCP-Server vorreservierte IP-Adressen (siehe Kategorie **DHCP**)

*   **Hellblau:**<br>
    vom DHCP dynamisch vergebene IP-Adressen (siehe Kategorie **DHCP**)

Um (unbeabsichtigte) Adresskonflikte zu vermeiden, weist i-doit neben der Tabelle auf mehrfach vergebene IP-Adressen hin.

Bei kleineren Netzen (< 1.000 IP-Adressen) werden auch nicht vergebene IP-Adressen angezeigt. Sollte das Netz einen zu großen Adressumfang haben, beispielsweise ein /16 mit über 65000 IP-Adressen, werden nur die vergebenen IP-Adressen angezeigt und die nicht vergebenen ausgeblendet. Zusätzlich erscheint ein Hinweis.

Eine weitere Tabelle auf der rechten Seite fasst wichtige Informationen des Netzes zusammen:

*   IP-Adressen in Benutzung
*   Netzadresse
*   Subnetzmaske
*   Default Gateway
*   Adressbereich
*   Übergeordnetes Supernetze (Objekttyp **Supernet**)
*   Zugeordnete VLANs (Objekttyp **Layer-2-Netz**)

## Objekte zuordnen

Die Liste kann um weitere Objekte erweitert werden, ohne die Kategorie **Hostadresse** zu verwenden. Hierzu wird der Button **Objekt Zuordnen** verwendet.

## IP-Adressen überprüfen

Die Kategorie **IP-Liste** bietet einen Soll-Ist-Abgleich: Du kannst prüfen, ob die dokumentierten IP-Adressen und Hostnames tatsächlich vergeben sind. Dazu versendet i-doit ICMP-Pakete ("Pings") und startet NSLOOKUP-Abfragen. Der i-doit-Server benötigt dafür Zugriff auf das jeweilige Netz.

Du kannst einzelne Einträge oder alle Einträge nacheinander prüfen lassen. Unter **Verwaltung > [Mandanten-Name] Verwaltung > Einstellungen für [Mandanten-Name] > Optionen für IP-Liste** legst du fest, welche Kommandozeilen-Tools verwendet werden. Der Apache-Benutzer muss diese ausführen duerfen.

*   **Ping**: ICMP-Paket an IP-Adresse schicken
*   **NSLOOKUP**: IP-Adresse zum Hostname bestimmen
*   **Reverse NSLOOKUP**: Hostname zur IP-Adresse bestimmen

## Nmap Installation

### Windows

Lade die neueste stable Version von Nmap auf <https://nmap.org/download.html> herunter und führe die Installation aus.

Falls du die Datei aus irgendeinem Grund nicht direkt herunterladen kannst, kannst du die Kommandozeile verwenden.<br>
Öffne die Eingabeaufforderung und benutze `bitsadmin`, um das Nmap-Zip-Archiv herunterzuladen

```cmd
bitsadmin /transfer nmapDownloadJob /download /priority normal https://nmap.org/dist/nmap-7.92-win32.zip C:\nmap-7.92-win32.zip
```

!!! attention "Aktuell ist die letzte Zip-Datei nicht die neueste stable Version."

Sobald Nmap installiert ist, füge das Nmap-Verzeichnis zur Systemumgebungsvariablen PATH hinzu

```cmd
setx PATH "%PATH%;C:\nmap"
```

!!! warning "Stelle sicher, dass der Pfad dem Verzeichnis entspricht, in dem du Nmap extrahiert hast"

### Unix

#### Debian or Ubuntu

```sh
sudo apt update
sudo apt install nmap
```

#### Red Hat Enterprise Linux (RHEL)

```sh
sudo dnf install nmap
```

or

```sh
sudo yum install nmap
```

## IP-Listen Ping

Sobald Nmap installiert ist, steht die Ping Funktion zur Verfügung.

[![Ping Button in IP list](../assets/images/de/auswertungen/ip-listen/ip-liste-2.png)](../assets/images/de/auswertungen/ip-listen/ip-liste-2.png)
