---
title: Häufig gestellte Fragen (FAQ)
description: Antworten auf die häufigsten Fragen rund um i-doit — Lizenzierung, Updates, Datenimport, Performance und mehr
icon:
status:
lang: de
---

# Häufig gestellte Fragen (FAQ)

Hier findest du Antworten auf die Fragen, die im Support am häufigsten gestellt werden. Für detaillierte Anleitungen verlinken wir auf die entsprechenden KB-Artikel.

---

## Lizenzierung

### Wo finde ich meinen Lizenz-Token?

Bei Kauf erhältst du einen **Lizenz-Token**. Mit diesem Token meldest du dich im [Kundenportal](administration/kundenportal.md) an — und derselbe Token dient auch zur Lizenzaktivierung in i-doit.

### Wie aktiviere ich meine Lizenz?

Es gibt zwei Wege:

- **Online-Aktivierung (empfohlen):** Im [Admin-Center](administration/admin-center.md) den Lizenz-Token eingeben. i-doit aktiviert die Lizenz automatisch über `lizenzen.i-doit.com`.
- **Offline-Lizenz:** Für Systeme ohne Internetzugang gibt es eine Offline-Lizenz — ein langer Lizenzschlüssel, den du im Kundenportal generierst und im Admin-Center einträgst.

Details: [Lizenzierung](wartung-und-betrieb/lizenzierung.md)

### Die Lizenz ist gültig, aber i-doit zeigt "nicht lizenziert"?

Häufige Ursachen:

- **Firewall blockiert die Lizenzprüfung** — i-doit muss `lizenzen.i-doit.com` und `center.i-doit.com` über Port 443 erreichen können. Siehe [Firewall-Freigaben](wartung-und-betrieb/sicherheit-und-schutz.md#firewall-freigaben-fur-i-doit).
- **Objektlimit erreicht** — prüfe im Admin-Center unter **Licenses** wie viele Objekte lizenziert sind.
- **Cache veraltet** — leere den Cache unter **Verwaltung → Systemreparatur und Bereinigung**.

### Wie viele Objekte darf ich anlegen?

Das hängt von deiner Lizenz ab. Die Anzahl siehst du im [Admin-Center](administration/admin-center.md) unter **Licenses**. Objekte im Status "archiviert" oder "gelöscht" zählen nicht mit.

---

## Installation und Updates

### Welche Systemvoraussetzungen hat i-doit?

Aktuelle Anforderungen an Betriebssystem, PHP, MariaDB und Apache findest du unter [Systemvoraussetzungen](installation/systemvoraussetzungen.md).

### Wie aktualisiere ich i-doit?

Zwei Wege: Über die **Web-Oberfläche** (mit Internetzugang) oder manuell über die **Konsole** (Update-Paket hochladen). Die komplette Anleitung: [Update einspielen](wartung-und-betrieb/update-einspielen.md)

### Kann ich Versionen überspringen?

Teilweise. Ab Version 20 kannst du Versionen überspringen, aber es gibt definierte **Zwischenschritte** — du kannst z.B. nicht direkt von Version 20 auf 38 springen. Welche Versionssprünge möglich sind, steht in der [Update-Anleitung](upgrades-und-umzuege/update-anleitung.md). Im Zweifelsfall: Lade das neueste Update-Paket aus dem [Kundenportal](administration/kundenportal.md) herunter — der Update-Assistent zeigt dir den nächsten möglichen Schritt.

### Nach dem Update funktioniert etwas nicht — was tun?

1. **Cache leeren** — Verwaltung → Systemreparatur und Bereinigung
2. **Browser-Cache leeren** — Strg+Shift+Entf
3. **Suchindex neu aufbauen** — `php console.php search-index`
4. **Bekannte Probleme prüfen** — [Bekannte Update-Probleme](administration/troubleshooting/bekannte-update-probleme.md)

### Welche PHP-Version brauche ich?

Siehe [Systemvoraussetzungen](installation/systemvoraussetzungen.md). Wenn du PHP aktualisieren musst: [PHP aktualisieren](wartung-und-betrieb/php-update.md)

---

## Datenimport

### Wie importiere ich Daten aus einer Excel-Tabelle?

Exportiere die Excel-Tabelle als CSV und nutze den [CSV-Datenimport](daten-konsolidieren/csv-datenimport/index.md). Erstelle vorher ein Import-Profil, das die Spalten deiner CSV-Datei den i-doit-Kategorien zuordnet.

### Der CSV-Import meldet Fehler — was tun?

Häufige Ursachen:

- **Encoding:** Die CSV-Datei muss in **UTF-8** kodiert sein. Excel speichert oft in ANSI — öffne die Datei in einem Texteditor und speichere als UTF-8.
- **Trennzeichen:** i-doit erwartet Semikolon (`;`) als Standard-Trennzeichen, nicht Komma.
- **Leere Zeilen:** Entferne leere Zeilen am Ende der Datei.
- **Pflichtfelder:** Mindestens der Objekttitel und der Objekttyp müssen zugeordnet sein.

### Wie richte ich den JDisc-Import ein?

JDisc Discovery scannt dein Netzwerk und liefert Hardware- und Software-Daten an i-doit. Die Einrichtung: [JDisc Discovery](daten-konsolidieren/jdisc/index.md)

### Kann ich den Import automatisieren?

Ja, über [Cronjobs](wartung-und-betrieb/cronjobs-einrichten.md). Sowohl CSV- als auch JDisc-Imports lassen sich über die `console.php` zeitgesteuert ausführen. Für komplexe Befehle empfehlen sich [Konfigurationsdateien](automatisierung-und-integration/cli/configuration-files.md).

---

## LDAP und Benutzerverwaltung

### Wie synchronisiere ich Benutzer aus dem Active Directory?

Über die [LDAP-Synchronisation](benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md). Du konfigurierst einen LDAP-Server in der Verwaltung und richtest einen Cronjob für den regelmäßigen Sync ein. Ein vollständiges Konfigurationsbeispiel findest du unter [Konfigurationsdateien — ldap-sync](automatisierung-und-integration/cli/configuration-files.md#beispiel-fur-den-befehl-ldap-sync).

### Der LDAP-Sync findet keine Benutzer — was tun?

- **Verbindung prüfen:** Kann der i-doit-Server den LDAP-Server auf Port 389 (LDAP) oder 636 (LDAPS) erreichen?
- **Base-DN prüfen:** Stimmt der Suchpfad (z.B. `OU=Users,DC=firma,DC=de`)?
- **Filter prüfen:** Ist der LDAP-Filter korrekt? Teste mit `ldapsearch` auf der Kommandozeile.
- **Log prüfen:** Der Sync schreibt ein Log — prüfe es auf Fehlermeldungen.

### Kann ich SSO (Single Sign-On) einrichten?

i-doit selbst bringt keine eigene SSO-Funktion mit, aber du kannst SSO über den **Apache Webserver** realisieren. Es gibt mehrere bewährte Ansätze — von SAML über OpenID Connect bis GSSAPI (Kerberos). Beispielkonfigurationen findest du unter [SSO-Vergleich](benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md).

---

## Performance und Datenbank

### i-doit ist langsam — was kann ich tun?

1. **System prüfen:** Genug RAM? CPU-Auslastung? Festplatte voll? Siehe [Systemvoraussetzungen](installation/systemvoraussetzungen.md).
2. **MariaDB optimieren:** Konfiguration prüfen — besonders `innodb_buffer_pool_size` (sollte ca. 70% des verfügbaren RAM sein).
3. **Suchindex neu aufbauen:** `php console.php search-index`
4. **Cache leeren:** Verwaltung → Systemreparatur und Bereinigung
5. **Unfertige Objekte bereinigen:** `php console.php system-objectcleanup --objectStatus 1`
6. **Cronjobs einrichten:** Regelmäßige [Wartungs-Cronjobs](wartung-und-betrieb/cronjobs-einrichten.md) halten das System sauber.

### "MySQL server has gone away" — was bedeutet das?

Die Verbindung zwischen i-doit und der Datenbank wurde unterbrochen — meist durch ein Timeout bei langen Operationen. Lösung: [MySQL-Server has gone away](administration/troubleshooting/mysql-server-has-gone-away.md)

### MariaDB startet nicht nach einem Update

Siehe [MySQL/MariaDB startet nicht](administration/troubleshooting/mysql-mariadb-startet-nicht.md) — häufig liegt es an geänderten Konfigurationsdirektiven oder einer korrupten Datenbank.

### "Can't create table" oder "Row size too large"

Beide Fehler hängen mit dem InnoDB-Speicherformat zusammen. Lösungen:

- [Can't create table (errno: 140)](administration/troubleshooting/cant-create-table.md)
- [Row size too large](administration/troubleshooting/row-size-too-large.md)

---

## Backup und Wiederherstellung

### Wie sichere ich i-doit?

Drei Bereiche müssen gesichert werden: Datenbanken, Dateien und Systemkonfiguration. Ab Version 35 geht das am einfachsten mit `system:tenant-export`. Die vollständige Anleitung: [Daten sichern und wiederherstellen](wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)

### Wie stelle ich ein Backup wieder her?

Mit `system:tenant-import` (ab v38) oder manuell per `mysql`-Import und Dateien zurückkopieren. Wichtig: Teste den Restore regelmäßig auf einem Testsystem. Details: [Daten sichern und wiederherstellen](wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)

### Kann ich die Produktionsdatenbank auf ein Testsystem kopieren?

Ja — per Shell-Script mit `mysqldump` + `rsync` oder per `system:tenant-export` / `system:tenant-import`. Eine Schritt-für-Schritt-Anleitung findest du unter [Prod→Test Datenbank-Synchronisation](anwendungsfaelle/prod-test-datenbank-synchronisation.md).

!!! info "Testinstanz braucht eine eigene Lizenz"
    Auch ein Testsystem muss lizenziert werden. Ausnahme: Kunden mit **Advanced Support** — dort ist eine Testlizenz in gleicher Größe inkludiert.

---

## API

### Hat i-doit eine API?

Ja, i-doit bietet eine [JSON-RPC API](i-doit-add-ons/api/index.md). Damit kannst du Objekte anlegen, lesen, ändern und löschen — alles programmgesteuert. Die API ist als Add-on verfügbar und muss in der Verwaltung aktiviert werden.

### Wo finde ich API-Beispiele?

- [API v1 Methoden](i-doit-add-ons/api/methoden/v1/index.md) — Vollständige Referenz
- [API v2 Methoden](i-doit-add-ons/api/methoden/v2/index.md) — Neue API-Version
- [Beispiele zur Nutzung der API](i-doit-add-ons/api/beispiele-zur-nutzung-der-api.md) — Praxisbeispiele

### Wie sichere ich die API ab?

API-Key geheim halten, Zugriff per IP einschränken, eigenen API-Benutzer mit minimalen Rechten anlegen. Details: [API absichern](wartung-und-betrieb/sicherheit-und-schutz.md#api-absichern)

---

## Sonstiges

### Kann ich eigene Objekttypen und Kategorien anlegen?

Ja. Eigene Objekttypen: [Benutzerdefinierte Objekttypen](grundlagen/benutzerdefinierte-objekttypen.md). Eigene Kategorien: [Benutzerdefinierte Kategorien](grundlagen/benutzerdefinierte-kategorien.md). Bestehende Objekttypen konfigurieren: [Objekttyp-Konfiguration](grundlagen/objekttyp-konfiguration.md).

### Wie erstelle ich einen Report?

Mit dem [Report Manager](auswertungen/report-manager.md). Du kannst Reports über den visuellen Abfrage-Editor erstellen oder direkt SQL schreiben. Reports lassen sich auch per [Cronjob exportieren](wartung-und-betrieb/cronjobs-einrichten.md#report-export).

### Wo finde ich die Changelogs?

Unter [Changelogs](versionshistorie/changelogs/index.md) — dort sind alle Änderungen pro Version dokumentiert. Die wichtigsten Neuerungen pro Major-Version findest du in den [Release Notes](versionshistorie/release-notes/index.md).

### Ich finde nicht was ich suche — wo bekomme ich Hilfe?

- [i-doit Community Forum](https://community.i-doit.com/) — Austausch mit anderen Anwendern
- [i-doit Help Center](https://help.i-doit.com/) — Bekannte Fehler und Lösungen
- [help@i-doit.com](mailto:help@i-doit.com) — Unser Support-Team hilft dir weiter
