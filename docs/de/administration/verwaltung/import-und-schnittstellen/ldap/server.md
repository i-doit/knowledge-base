---
title: Server Konfiguration
description: Server Konfiguration
icon:
status:
lang: de
---

# Server Konfiguration

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

Unter **Verwaltung → Import und Schnittstellen → LDAP → Server** können ein oder mehrere Instanzen konfiguriert werden. Beim Login werden alle Server nacheinander abgefragt, bis ein Login gefunden wurde. Gibt es mehrere [Mandanten](../../administration/mandantenfaehigkeit.md), werden alle nacheinander abgefragt und die Datenbanken für den Login angeboten, wenn die Abfrage ein positives Ergebnis geliefert hat.

[![ldap servers](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/2-ldap.png)](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/2-ldap.png)

## LDAP Verbindung für Lookups (lesend)

| Feldname                                            | Inhalt                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| --------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Aktiv**                                           | Soll der Server beim Login mit abgefragt werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **Directory**                                       | **Pflichtfeld**: Welche Art Directory wird abgefragt?                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **LDAP-Version**                                    | In welcher Version ist das Directory vorhanden? (Standard: 3)                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Enable LDAP Paging**                              | Soll die maximale Anzahl der Suchergebnisse aktiviert/überschrieben werden?  <br>Dann werden die Ergebnisse Paket für Paket übermittelt.<br><br>_In einem LDAP-Suchvorgang muss stets damit gerechnet werden, dass der LDAP-Server eine Obergrenze der zurückgelieferten Ergebnisse pro Suchanfrage hat. Man sucht z.B. nach allen User-Objekten in einer gesamten OU-Struktur, bekommt aber nur 500 User als Ergebnis zurück, obwohl sich weit über 2000 User auf dem Server befinden müssen._ |
| **LDAP Page Limit**                                 | Wie viele Ergebnisse sollen pro "Päckchen" zurückgeliefert werden?                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **IP / Hostname**                                   | **Pflichtfeld**: Die IP oder der Hostname des Servers                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Port**                                            | **Pflichtfeld**: Über welchen Port wird die Abfrage durchgeführt? (Standard: 389)                                                                                                                                                                                                                                                                                                                                                                                                               |
| **TLS**                                             | Soll die Abfrage verschlüsselt werden? Unter Debian-basierten Betriebssystemen wird das Zertifikat der Root CA in das Verzeichnis `/usr/local/share/ca-certificates/` kopiert und anschließend mit `sudo update-ca-certificates` aktiviert.                                                                                                                                                                                                                                                     |
| **TLS-Certificate**                                 | Hier wird das Zertifikat ausgewählt. Wurde noch keines hochgeladen, kann es direkt hochgeladen werden.                                                                                                                                                                                                                                                                                                                                                                                          |
| **TLS-Zertifikatsprüfstrategie**                    | **Allow**: Das Peer-Zertifikat wird angefordert. Wenn kein Zertifikat bereitgestellt wird, wird die Sitzung normal fortgesetzt. Wenn ein ungültiges Zertifikat bereitgestellt wird, wird es ignoriert und die Sitzung wird normal fortgesetzt.<br>**Demand**: Das Peer-Zertifikat wird angefordert. Wenn kein Zertifikat bereitgestellt wird oder ein ungültiges Zertifikat bereitgestellt wird, wird die Sitzung sofort beendet.                                                               |
| **Admin Benutzername (DN)**                         | **Pflichtfeld**: Der Pfad bis zum Benutzerobjekt, das Leserechte auf das Directory hat.<br><br>(Beispiel: CN=idoit,OU=tree,DC=synetics,DC=int)                                                                                                                                                                                                                                                                                                                                                  |
| **Passwort**                                        | **Pflichtfeld**: Das Passwort des darüber angegebenen Benutzers                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Benutze Admin-Nutzer für alle lesenden Anfragen** | Wenn die Option "Benutze Admin-Nutzer für alle lesenden Anfragen" aktiviert ist, wird bei jeder LDAP-Server Abfrage mit dem Administrator Account aus der LDAP-Server Konfiguration geprüft                                                                                                                                                                                                                                                                                                     |
| **Time limit**                                      | Limit für die maximale Dauer der Abfrage. (Standard: 30)                                                                                                                                                                                                                                                                                                                                                                                                                                        |

_Bekannte Lösungen für Probleme bei der TLS Verbindung findet Ihr [LDAP via TLS](../../../../../administration/troubleshooting/ldap-via-tls.md)_

## LDAP-Parameter für i-doit-Login

Die hier angegebenen Parameter bestimmen, wo im Directory nach Benutzern gesucht werden soll.

| Feldname                          | Inhalt                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| --------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Eindeutige Kennung**            | Es kommt bei der AD-Synchronisierung immer wieder dazu, dass geänderte Datensätze fälschlicherweise aufgrund eines geänderten Namens (Heirat o.Ä.) nicht mehr synchronisiert werden.  <br>Der "alte" Datensatz wird hier archiviert und ein neuer importiert.  <br>Daher kann als Eindeutige Kennung ein anderes Attribut ausgewählt werden. Siehe dazu **[Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)** |
| **Filter**                        | Der Filter wird durch die im unteren Bereich definierten Werte automatisch gefüllt. Es is außerdem möglich den Filter **manuell** einzufügen. Dazu auf den Button **Manuell bearbeiten** anklicken.                                                                                                                                                                                                                                                                      |
| **Nach Benutzern suchen in (OU)** | **Pflichtfeld**: Der Pfad bis zur Organisationseinheit, in der die Benutzer im Directory abgelegt wurden.<br>(Beispiel: CN=Users,DC=synetics,DC=int)                                                                                                                                                                                                                                                                                                                     |
| **Rekursive Suche**               | Beim Aktivieren der rekursiven Suche werden auch die Verzeichnisse unterhalb der darüber angegebenen Organisationseinheit durchsucht. Bei großen Directories ist dies nicht empfehlenswert und sollte durch die Anlage von mehreren Servern umgangen werden.                                                                                                                                                                                                             |

Des Weiteren kann der Filter noch weiter definiert werden. Bei einer einzigen Filterzeile haben die Optionen dahinter noch keine Auswirkungen. Erst wenn über "Filter hinzufügen" die Abfrage erweitert wird, kommen die weiteren Optionen zur Geltung. Siehe [Erweiterte ldap-sync Konfiguration](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/so-werden-benutzer-und-gruppen-aus-dem-ad-ldap-importiert.md) für weitere Beispiele.

An letzten Filter anhängen:

```shell
(&(objectClass=user)(test=test))
```

Als neuen Filter anhängen:

```shell
(&(objectClass=user)(&(test=test)))
```

Neuen Term bilden:

```shell
(&(&(objectClass=user))(test=test))
```

Im untersten Bereich lässt sich dann die oben festgelegte Konfiguration testen. Bestenfalls erscheint die Meldung:

```shell
Connection OK!
XX object(s) found in OU=tree,OU=synetics,DC=synetics,DC=int.
```

Sollte bei Misserfolg die Fehlermeldung noch nicht eindeutig genug sein, kann das Debug-Level erhöht werden, sodass weitere Ausgaben im Apache Error Log mitgeschrieben werden. Das Error Log ist unter Debian-basierten Betriebssystemen unter `/var/log/apache2/error.log` zu finden.

## Identifizierung von Personen

Die Identifizierung einer Person beim Import über LDAP erfolgt über das Attribut "**Username**" aus der Kategorie "**Personen -> Login**". Dies kann über die [Directory](#directories) Einstellungen geändert werden. Standardmäßig ist dort der `sAMAccountName` hinterlegt.

Um sicherzustellen, dass Personen bei einer Namensänderung (z.B. durch Heirat) weiterhin korrekt zugeordnet werden, kann alternativ auch ein anderes Attribut verwendet werden. Hierfür eignet sich z.B. das `objectGUID` Attribut, sofern dieses im LDAP/AD eindeutig ist. Dieses Attribut wird über die [Attributerweiterung](#) in i-doit hinterlegt werden.

## Regelmäßige Synchronisation

Die dafür benötigte Konfiguration wurde in den vorherigen Schritten bereits vorgenommen. Für die Synchronisation muss nun noch der passende [i-doit console utility](../../automatisierung-und-integration/cli/index.md) Befehl eingerichtet werden. Außerdem können noch weitere zu synchronisierende Felder konfiguriert werden.

## Automatische Zuweisung von Personen zu Personengruppen

Die automatische Zuweisung sorgt dafür, dass nach dem Login automatisch die für die Personengruppe festgelegten Berechtigungen zugewiesen werden. Damit die Zuweisung erfolgen kann, muss in den **Stammdaten** einer **Personengruppe** das Attribut **LDAP-Gruppe (Mapping)** mit einer validen Gruppe aus LDAP/AD gefüllt werden. Loggt sich ein Benutzer ein oder wird die Synchronisation ausgeführt, werden automatisch auch die dem Benutzerobjekt im Directory zugewiesenen Gruppen abgefragt und mit dem Attribut **LDAP-Gruppe (Mapping)** der Personengruppen verglichen. Gibt es eine Übereinstimmung wird die Gruppe zugewiesen und die weiteren Gruppen abgefragt.

[![ldap-autozuweisung](../../../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)](../../../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)

!!! info "memberOf bei OpenLDAP"
    Die automatische Zuweisung beruht auf der LDAP-Abfrage, in welchen Gruppen ein Benutzer ist. Hierbei spielt das Attribut memberOf eine wichtige Rolle. Dieses Attribut muss als Overlay verfügbar sein, was in vielen Standard-Installationen von OpenLDAP nicht der Fall ist. Gute Artikel für die nötige Konfiguration befinden sich [hier](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) und [hier](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

## Personen und Personengruppen Synchronisieren

Seit Version 1.15 können Personen und Personengruppen aus dem LDAP/AD synchronisiert werden. Dabei werden die Personen Mitglied der Ihnen im LDAP zugewiesenen Gruppe. Solange die Gruppe auch mit dem eingestelltem Filter gefunden wird.

[HIER](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/so-werden-benutzer-und-gruppen-aus-dem-ad-ldap-importiert.md) geht es zum Artikel.

Voraussetzung ist, dass der Benutzer mit dem der Befehl ausgeführt wird auch die Supervisor Rechte auf die Kategorien ("Gruppenmitgliedschaft" und "Personengruppen > Mitglieder") sowie Supervisor Rechte auf die Objekttypen ("Personen" und "Personengruppen") besitzt.

[![ldap-sync](../../../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)](../../../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)
