# Einstellungen für [Mandanten-Name]

Hier findest du Einstellungen für den aktuellen Mandanten.

## URL Einstellungen

| Option               | Wert                        |
| -------------------- | --------------------------- |
| i-doit Adresse (URL) | URL zur i-doit installation |

## CMDB

| Option                                                                | Wert                                                                                                      |
| --------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| CSV-Export Trennzeichen                                               | Komma, Semikolon, Raute oder Tab                                                                          |
| One-Click-Edit                                                        | Ja oder Nein                                                                                              |
| Globaler SYS-ID Präfix                                                | String                                                                                                    |
| CMDB Status von Kabeln nach verkabelung "In Betrieb" setzen.          | Ja oder Nein                                                                                              |
| CMDB Status von Kabeln nach entkabelung "Außer Betrieb" setzen.       | Ja oder Nein                                                                                              |
| Objekttyp Konstante für Segmentierungs-Templates                      | String                                                                                                    |
| Nummerierung vertikaler Schrank-Einschübe                             | Standard<br>Von oben links nach unten rechts, beide Seiten<br>Von oben links nach unten rechts, pro Seite |
| Die vertikalen Schrank Einschübe auf der Rückseite spiegeln           | Ja oder Nein                                                                                              |
| Aufzählung von Schrank HEs                                            | Von oben<br>Von unten                                                                                     |
| Gelöste Segmentierungs Objekte...                                     | nicht verändern<br>archivieren<br>purgen                                                                  |
| Objekte beim Umzug aus Chassis lösen                                  | Ja oder Nein                                                                                              |
| Interaktion zwischen "Logischer Standort" und "Standort" aktivieren?  | Ja oder Nein                                                                                              |
| Objekttyp-Filter bei Arbeitsplätzen aktivieren?                       | Ja oder Nein                                                                                              |
| Bei CSV-Export von Listen Objekt-IDs entfernen.                       | Ja oder Nein                                                                                              |
| Validierung für MAC-Adressen deaktivieren                             | Ja oder Nein                                                                                              |
| SYS-ID nur lesbar                                                     | Ja oder Nein                                                                                              |
| Freigabe der IP-Adressen eines Objektes beim Löschen oder Archivieren | Ja oder Nein                                                                                              |
| Zustand von importierten Objekten beibehalten?                        | Ja oder Nein                                                                                              |
| Präfix für automatische Bezeichnung von Kabelobjekten                 | Leer oder String                                                                                          |
| Quickpurge-Button aktivieren                                          | Ja oder Nein                                                                                              |
| WYSIWYG Editor in Kategorien                                          | Ja oder Nein                                                                                              |
| Aktiviere alle WYSIWYG Editor Funktionen                              | Ja oder Nein                                                                                              |
| my-doit CMDB-Status auswahl speichern                                 | Ja oder Nein                                                                                              |

## Display Limits

| Option                                                      | Wert                        |
| ----------------------------------------------------------- | --------------------------- |
| Anzeigelimit verknüpfter Objekte in Objektbrowser           | Wert                        |
| Anzeigeart verknüpfter Objekte in Objektbrowsers            | Kommasepariert<br>Als Liste |
| Anzahl vorgeladener Seiten in Report listen                 | Wert                        |
| Anzeigelimit für Spalten in Multivalue Kategorien           | Wert                        |
| Objekt-Browser Ergebnislimit                                | Wert                        |
| Anzeigelimit VLANs in Portlisten                            | Wert                        |
| Anzeigelimit Layer-2 Netze in Portlisten                    | Wert                        |
| Nur Default VLAN in Portübersicht zeigen                    | Ja oder Nein                |
| Anzeigelimit von Verbundenen Anschlüssen in Anschlusslisten | Wert                        |
| Anzeigelimit von Hostadressen                               | Wert                        |
| Anzeigelimit von Services im CMDB Explorer Popup            | Wert                        |
| Limit der Tiefe des Standortpfades                          | Wert                        |
| MyDoIt Taskeinträge                                         | Wert                        |

## Optionen für IP-Liste

| Option                       | Wert                                                                                                                                                                             |
| ---------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Cache Zeitraum (in Sekunden) | Wert                                                                                                                                                                             |
| Ping Funktion                | Ping via NMAP<br>Ping via FPING                                                                                                                                                  |
| NMAP Parameter (für Ping)    | PE/PP/PM: ICMP echo, timestamp, and netmask request discovery probes<br>sP: Ping Scan - go no further than determining if host is online<br>PR: ARP Scan<br>sT: TCP Connect Scan |

## Unique checks (Auswertung lediglich während Import/Export Vorgängen!)

| Option        | Wert         |
| ------------- | ------------ |
| Objekt-Titel  | Ja oder Nein |
| Layer-2-Netze | Ja oder Nein |
| IP-Adressen   | Ja oder Nein |
| Hostname      | Ja oder Nein |

## Barcodes

| Option                        | Wert              |
| ----------------------------- | ----------------- |
| Barcodes in i-doit darstellen | Ja oder Nein      |
| Barcode-Form                  | QR-Code<br>Code39 |

## Oberflächendarstellung

| Option                                | Wert                                  |
| ------------------------------------- | ------------------------------------- |
| Leerwerte darstellen als              | String                                |
| String zur Separation von Standorten  | String                                |
| Orientierung des Standortpfades       | Linksbündig (default)<br>Rechtsbündig |
| String zur Separation von Anschlüssen | String                                |
| Drag 'n' Drop von Objekten            | Ja oder Nein                          |
| Objekttyp Sortierung                  | Alphabetisch<br>Manuelle              |

## Maximallänge von Zeichenfolgen

| Option                             | Wert |
| ---------------------------------- | ---- |
| Dialog-Plus                        | Wert |
| Objektbezeichnung im Standortpfad | Wert |
| Kompletter Standortpfad            | Wert |

## Logbuch

| Option                                      | Wert         |
| ------------------------------------------- | ------------ |
| Detaillierte CMDB Änderungen protokollieren | Ja oder Nein |
| "Änderungskommentar" deaktivieren           | Ja oder Nein |
| Logbucheinträge zu bereinigten Objekten vollständig löschen | Ja oder Nein |

## Templates

| Option                                              | Wert               |
| --------------------------------------------------- | ------------------ |
| Template Filter in den Objektlisten anzeigen        | Ja oder Nein       |
| Markiere Template Verknüpfungen/Referenzen farblich | Ja oder Nein       |
| In folgender Farbe                                  | Colorpicker<br>Hex |

## Sicherheit

| Option                          | Wert             |
| ------------------------------- | ---------------- |
| Rechtesystem                    | Aktiv<br>Inaktiv |
| Minimallänge Benutzerpasswort   | Wert             |
| Passwörter im Klartext          | Ja oder Nein     |
| Information about last login    | Aktiv<br>Inaktiv |
| Informationen zum letzten Login | Ja oder Nein     |
| Dateneingabe bereinigen         | Ja oder Nein     |

## Logging

| Option           | Wert         |
| ---------------- | ------------ |
| Rechtesystem Log | Ja oder Nein |
| Exception Log    | Ja oder Nein |
| CMDB Import      | Ja oder Nein |
| LDAP Debug       | Ja oder Nein |

## Quickinfo (Link mouseover)

| Option               | Wert                    |
| -------------------- | ----------------------- |
| Cache-Laufzeit       | Minute<br>Stunde<br>Tag |
| Zeilen pro Kategorie | Wert                    |

## LDAP

| Option               | Wert                                                                    |
| -------------------- | ----------------------------------------------------------------------- |
| Standard LDAP Gruppe | Komma-separierte Liste von Personengruppen IDs                           |
| LDAP Config:         | JSON String                                                             |
| Anrede Herr          | Kommaseparierte Liste mit gemappten Werten für das LDAP Anrede Attribut |
| Anrede Frau          | Kommaseparierte Liste mit gemappten Werten für das LDAP Anrede Attribut |

## Report Manager

| Option         | Wert                                                                                             |
| -------------- | ------------------------------------------------------------------------------------------------ |
| Standardfilter | ID<br>Bezeichnung<br>Kategorie<br>Mit Abfrage-Editor erzeugt<br>Variabler Report<br>Beschreibung |

## Import

| Option                                                        | Wert         |
| ------------------------------------------------------------- | ------------ |
| Bei Validierungsfehlern Prozess abbrechen?                    | Ja oder Nein |
| Nur die betroffenen Attribute leeren bei Validierungsfehlern? | Ja oder Nein |
| Der CSV Import kann den Objekttyp überschreiben?              | Ja oder Nein |
| Anzahl der Zeilen pro Import Batch                            | Wert         |

## Suche

| Option                                                         | Wert                                                                  |
| -------------------------------------------------------------- | --------------------------------------------------------------------- |
| Standard Such-Modus                                            | Normal<br>Deep Search                                                 |
| Unscharfe Suche verwenden                                      | Ja oder Nein                                                          |
| Automatische DeepSearch                                        | Aktiv<br>Aktiv, wenn keine Ergebnisse gefunden werden.<br>Deaktiviert |
| Hervorhebung des Suchstrings                                   | Ja oder Nein                                                          |
| Mindestlänge Suchwort                                          | Wert                                                                  |
| Archivierte/Gelöschte Objekte mit in der Suche berücksichtigen | Ja oder Nein                                                          |
| Standort Pfade mit in der Suche berücksichtigen                | Ja oder Nein                                                          |

## Sprache

| Option                             | Wert                |
| ---------------------------------- | ------------------- |
| Standard Sprache für neue Benutzer | Deutsch<br>Englisch |

## Benachrichtigungen

| Option                            | Wert         |
| --------------------------------- | ------------ |
| Abgelaufene Lizenzen überspringen | Ja oder Nein |

## Installed Add-on related settings

| Option                                                                                                                                    | Wert                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------ |
| [ISMS](../../../i-doit-pro-add-ons/isms.md) Reportviews nach Standortrechten filtern                                                      | Ja oder Nein                                                                                                                         |
| [ISMS](../../../i-doit-pro-add-ons/isms.md) Risikokennzeichnung anzeigen                                                                  | Ja oder Nein                                                                                                                         |
| [ISMS](../../../i-doit-pro-add-ons/isms.md) Risikotitel anzeigen                                                                          | Ja oder Nein                                                                                                                         |
| [Dokumente](../../../i-doit-pro-add-ons/documents/index.md) Revisionen kommentieren                                                       | Ja oder Nein                                                                                                                         |
| [Dokumente](../../../i-doit-pro-add-ons/documents/index.md) Generierte Dokumente cachen                                                   | Ja oder Nein                                                                                                                         |
| [Wartung](../../../i-doit-pro-add-ons/maintenance.md) E-Mail Adressen entnehmen aus                                                       | Kontaktgruppen auflösen und Mitglieder einzeln Benachrichtigen<br>E-Mail-Adressen der ausgewählten Kontakte ohne auflösung verwenden |
| [Events](../../../i-doit-pro-add-ons/events.md) Base64 Decode Event Parameters                                                            | Ja oder Nein                                                                                                                         |
| [Check_MK](../../../i-doit-pro-add-ons/checkmk.md) Tags dürfen beim Export nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen  | Ja oder Nein                                                                                                                         |
| [Workflows](../../../i-doit-pro-add-ons/workflow.md) Checklisten im my-doit Bereich ausblenden                                            | Ja oder Nein                                                                                                                         |
| [IT-Grundschutz](../../../i-doit-pro-add-ons/viva/index.md) URL-Prefix zum IT-Grundschutz Kompendium                                      | URL                                                                                                                                  |
| [IT-Grundschutz](../../../i-doit-pro-add-ons/viva/index.md) Upload Verzeichnis des IT-Grundschutz Kompendiums                             | Verzeichnis Pfad                                                                                                                       |
| [CI-Umzug](../../../i-doit-pro-add-ons/relocate-ci.md) Nach einem physikalischen Umzug soll der logische Standort entfernt werden.        | Ja oder Nein                                                                                                                         |
| [CI-Umzug](../../../i-doit-pro-add-ons/relocate-ci.md) Nach einem logischen Umzug soll der physische Standort aktualisiert werden.        | Ja oder Nein                                                                                                                         |
| [CI-Umzug](../../../i-doit-pro-add-ons/relocate-ci.md) Schreibe Logbucheinträge in alle positionierten Objekte eines umgezogenen Objekts. | Ja oder Nein                                                                                                                         |
| [Forms Add-on](../../../i-doit-pro-add-ons/forms/index.md) Forms Server                                                                   | URL                                                                                                                                  |
| [Forms Add-on](../../../i-doit-pro-add-ons/forms/index.md) Benutzername                                                                   | String                                                                                                                               |
| [Forms Add-on](../../../i-doit-pro-add-ons/forms/index.md) API Schlüssel                                                                  | String                                                                                                                               |
