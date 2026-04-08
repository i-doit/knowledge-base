---
title: Eindeutige Referenzierungen
description: "Eindeutige Referenzierungen ermöglichen dir, jedes Objekt in der IT-Dokumentation zweifelsfrei zu identifizieren -- sei es innerhalb von i-doit oder für..."
icon:
status:
lang: de
---
# Eindeutige Referenzierungen

Eindeutige Referenzierungen ermöglichen dir, jedes [Objekt](struktur-it-dokumentation.md) in der [IT-Dokumentation](../glossar.md) zweifelsfrei zu identifizieren -- sei es innerhalb von i-doit oder für die Anbindung an Drittsysteme. Dafür stehen dir verschiedene [Attribute](struktur-it-dokumentation.md) zur Verfügung.

!!! info "Datenimporte"
    Um bereits bestehende Daten zu erkennen, existieren für die [Datenimporte](../daten-konsolidieren/index.md) entsprechende Strategien. Diese beziehen sich größtenteils auf die nachfolgend erwähnten Attribute. Details sind den jeweiligen Artikeln zu entnehmen.

## Objekt-ID

Jedes Objekt in i-doit erhält einen Identifier (ID). Dieser ist pro i-doit-Mandant immer eindeutig. Die ID ist eine positive Zahl größer 0 und kann bis zu 11 Stellen aufweisen. Sie wird von MySQL/MariaDB automatisch vergeben, in dem die Zahl um 1 hochgezählt wird. Eine nachträgliche Änderung der ID durch den Benutzer ist nicht möglich, um Inkonsistenzen zu vermeiden. Durch das [Löschen von Objekten (**Purge**)](lebens-und-dokumentationszyklus.md) werden IDs zwar frei, können aber nicht wiederverwendet werden.

Die Objekt-ID wird in der [Kategorie](struktur-it-dokumentation.md) **Allgemein** als Attribut **Objekt ID** dargestellt.

[![objekt-id](../assets/images/de/grundlagen/eindeutige-referenzierungen/1-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/1-er.png)

Beim [Setup von i-doit](../installation/manuelle-installation/setup.md) kann bestimmt werden, ab welcher Stelle begonnen wird, Objekt-IDs zu vergeben. Standardmäßig beginnt die Zählung bei 1.

Die Objekt-ID findet in der Generierung der URIs eine hohe Bedeutung. Anhand der ID lassen sich Objekte eindeutig per Link aufrufen. Der Variablenname lautet objID. Das Namensschema:

<https://demo.i-doit.com/?objID=9>

Objekt-IDs werden vor allem zu internen Zwecken verwendet, können aber auch dem Benutzer oder Dritt-Systemen sehr nützlich sein. Die IDs sind beispielsweise bei [API-Zugriffen](../i-doit-add-ons/api/index.md) essentiell.

## SYS-ID

Die **SYS-ID** (auch **SYSID** ohne Bindestrich) ist ein weiteres Identifikationsmerkmal, eignet sich aber nicht zuverlässig für eindeutige Referenzierung bei automatisierten Importen. Beim Anlegen eines neuen Objekts generiert i-doit eine mindestens 10-stellige, positive Zahl, die sich aus dem [UNIX-Timestamp](https://de.wikipedia.org/wiki/Unixzeit) ableitet. Du findest sie in der Kategorie **Allgemein**.

[![sysid](../assets/images/de/grundlagen/eindeutige-referenzierungen/2-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/2-er.png)

Pro [Objekttyp](struktur-it-dokumentation.md) kannst du ein Präfix angeben, das der automatisch generierten Zahl vorangestellt wird. Du konfigurierst den Präfix unter **Verwaltung → Datenstruktur → Objekttypen → [Objekttyp gruppe] → [Objekttyp] → SYSID Präfix**. Ohne Angabe beginnt eine SYS-ID mit dem Präfix SYSID_. Gibst du ein alternatives Präfix an, ändert sich die Generierung: Statt des UNIX-Timestamps verwendet i-doit die Objekt-ID.

[![sysid-präfix](../assets/images/de/grundlagen/eindeutige-referenzierungen/3-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/3-er.png)

Standardmäßig kannst du die SYS-ID nachträglich nicht verändern. Möchtest du Änderungen ermöglichen, aktiviere dies unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → SYS-ID readonly**.

## Objekt-Titel

Jedes Objekt erhält zwingend einen Titel. Dieser wird als Attribut in der Kategorie **Allgemein** dokumentiert. Synonym wird dieses Attribut auch **Bezeichnung**, **Name**, **Objekt-Link** genannt.

[![objekt-titel](../assets/images/de/grundlagen/eindeutige-referenzierungen/4-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/4-er.png)

!!! success "Objekt-Titel automatisch vergeben"
    Objekt-Titel können automatisch vergeben werden. Besonders hilfreich ist dies bei [Templates](../effizientes-dokumentieren/templates.md):
    1.  Template erzeugen
    2.  Als Objekt-Titel die zur Verfügung stehenden Platzhalter nutzen und speichern
    3.  Template als Default Template dem Objekttyp zuordnen
    4.  Neues Objekt erzeugen; der Objekt-Titel ist bereits ausgefüllt.

## IP-Adresse

Pro Objekt können beliebig viele IP-Adressen vergeben werden. Dies geschieht in der Kategorie **Hostadresse**. Für jede IP-Adresse wird ein Kategorie-Eintrag erzeugt.

IP-Adressen sind per se nicht eindeutig. Beispielsweise kehren dieselben Adressen bei privaten Netzbereichen wieder und wieder (192.168.1.1 etc.). Werden in i-doit [**Layer-3-Netze**](../anwendungsfaelle/ip-adress-management.md) mit überlappenden Netzbereichen dokumentiert, kommt es häufig zu Objekten mit nicht-eindeutigen IP-Adressen. Durch Techniken wie DHCP wird es umso schwerer, Objekte anhand dynamisch vergebener IP-Adressen zu identifizieren. Daher ist dieses Attribut für eindeutige Referenzierungen oftmals **nicht geeignet**.

## Hostname und FQDN

Der **Hostname** wird in der Kategorie **Hostadresse** vergeben. Auch wenn dieser in vielen Fällen pro Gerät (beispielsweise Server) eindeutig vergeben wird, können pro Objekt beliebig viele Hostnames dokumentiert werden. Pro Hostname wird - wie bei der IP-Adresse (siehe oben) - ein Kategorie-Eintrag erzeugt.

Wird pro Kategorie-Eintrag auch das Attribut **DNS Domäne** angegeben, ergibt sich dadurch automatisch der Fully Qualified Domain Name (**FQDN**). Dieser sollte, ähnlich wie IP-Adressen, eindeutig sein, kann aber aus verschiedenen Gründen wiederkehrend sein. Der FQDN wird häufig mit dem Objekt-Titel gleichgesetzt. Die Verwendung von Hostname bzw. FQDN zur Referenzierung sollte wohlüberlegt sein.

[![hostname-fqdn](../assets/images/de/grundlagen/eindeutige-referenzierungen/5-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/5-er.png)

## MAC-Adresse

MAC-Adressen sind in der Regel weltweit eindeutig, weil sie von den Herstellern von Netzwerk-Komponenten vergeben werden. Das Risiko wiederkehrender MAC-Adressen ist damit aber nur theoretisch sehr gering. Durch die immer stärker wachsende Virtualisierung und die damit einhergehenden selbst zu ändernden MAC-Adressen, ist auch dieses Attribut nicht immer die beste Wahl für die eindeutige Referenzierung. In der Kategorie **Port (Netzwerk)** können beliebig viele MAC-Adressen angegeben werden, indem pro Port eine **MAC-Adresse** eingetragen wird. Bei Techniken wie Bonding/Trunking wird die MAC-Adresse in der Kategorie **Logischer Port (Netzwerk)** dokumentiert.

[![mac-adresse](../assets/images/de/grundlagen/eindeutige-referenzierungen/6-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/6-er.png)

## Inventarnummer

Die Inventarnummer dient der organisationsübergreifenden Inventarisierung (Asset Management). Jedes materielle Gut erhält eine eindeutige Nummer. In i-doit dokumentierst du diese in der Kategorie **Buchhaltung** im Attribut **Inventarnummer**.

Möchtest du Inventarnummern automatisch generieren, konfiguriere dies unter **Verwaltung → Datenstruktur → Objekttypen → [Objekttyp gruppe] → [Objekttyp]**. Dort stehen verschiedene Platzhalter zur Verfügung, um ein Namensschema pro Objekttyp zu erzeugen.

[![Inventarnummer](../assets/images/de/grundlagen/eindeutige-referenzierungen/7-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/7-er.png)

!!! success "Labels"
    Inventarnummern lassen sich ideal mit QR-Codes zu einem Label verbinden. QR-Codes werden von i-doit Objekt generiert. Solche Labels lassen sich beispielsweise mit dem [i-doit QR-Code Printer](../i-doit-add-ons/i-doit-qr-code-printer.md) ausdrucken.

## Identifier von Dritt-Systemen

Daten aus Dritt-Systemen, beispielsweise aus den Bereichen Inventory/Discovery, können in i-doit [importiert](../daten-konsolidieren/index.md) werden. Solche Systeme verfügen meist ebenfalls über eindeutige Identifier o. ä. Werden diese Identifier importiert, kann dazu die Kategorie **Data Source** genutzt werden. Auf diese Art können mehrere eingesetzte Systeme aufeinander abgestimmt werden, sodass Objekte auf sämtlichen Systemen eindeutig referenziert werden können.

[![identifier](../assets/images/de/grundlagen/eindeutige-referenzierungen/8-er.png)](../assets/images/de/grundlagen/eindeutige-referenzierungen/8-er.png)

## Konstanten

i-doit arbeitet intern mit Konstanten, um Datensätze eindeutig zu referenzieren. Eine Konstante besteht aus Großbuchstaben (A-Z) und Unterstrichen (_). Einige Objekte aus der Standard-Installation haben bereits Konstanten zugewiesen -- beispielsweise hat das **Personen**-Objekt "admin" die Konstante C__OBJ__PERSON_ADMIN.

In der Web GUI kannst du diese Konstanten weder betrachten noch editieren. Der Zugriff erfolgt per SQL auf der Datenbank. Jeder Mandant hat eine separate Datenbank mit der Tabelle isys_obj, in der alle Objekte gespeichert sind. Die Spalte für die Konstante heißt `isys_obj__const`.

!!! attention "Datenbank-Manipulation"
    Manipulationen an der Datenbank gefährden die Funktionalität von i-doit. Daher können wir bei Fehlern, die auf eigenständige Manipulationen zurückzuführen sind, keine Gewährleistung übernehmen. Jede Aktivität sollte daher wohlüberlegt und ggf. mit uns abgestimmt sein.

## Weitere Eindeutigkeiten

-   Attribute können global, pro Objekttyp oder (bei Listen-Kategorien) pro Objekt [als eindeutig definiert werden](eindeutige-referenzierungen.md). Mehrfachvorkommen werden von i-doit beim Speichern moniert.
-   Genügen die oben genannten Attribute nicht, können weitere [erzeugt](benutzerdefinierte-kategorien.md) werden.
