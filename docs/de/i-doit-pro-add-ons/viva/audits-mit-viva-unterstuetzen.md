# Audits mit VIVA unterstützen

Audits sind die Berichte, die für eine mögliche Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz benötigt werden. Mit dem [Add-on](../index.md) **VIVA** können Audits erstellt und verwaltet werden. Neben den Audits verfügt VIVA über weitere [Berichte](berichte-mit-viva.md), die der kontinuierlichen Qualitätssicherung dienen.

Audits erstellen
----------------

Wenn alle Informationen zusammengetragen und innerhalb von VIVA dokumentiert sind, können Audits erstellt werden. Diese richten sich nach dem gewählten Informationsverbund und der Art der angestrebten Zertifizierung (Erstzertifizierung, Überwachungsaudit et cetera). Inhaltlich und von der Formatierung her orientieren sie sich an den Vorgaben, die in den BSI-Standards gemacht werden. Zu finden sind die Audits unter dem gleichnamigen Punkt im Menübaum.

[![Audit erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/audits/1-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/audits/1-va.png)

Folgende Ausgabeformate stehen zur Auswahl:

*   PDF
*   HTML (inklusive Head-Bereich und Stylesheet)
*   HTML-Body (ohne Head-Bereich und Stylesheet)

Die generierten HTML-Dokumente enthalten alle Informationen, die nötig sind, um sie in anderen Anwendungen weiterzuverarbeiten. Sie können problemlos in eine Textverarbeitung importiert und dort an eigene Vorgaben (zum Beispiel ans Corporate Design) angepasst werden.

[![Audit-Ausgabe erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/audits/2-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/audits/2-va.png)

Referenzdokumente
-----------------

Im Folgenden wird auf die einzelnen Referenzdokumente eingegangen.

### Referenzdokument A.0 _IT-Sicherheitsrichtlinien_

Das erste Referenzdokument enthält einige übergreifende Angaben, die direkt im jeweiligen Audit dokumentiert werden können.

[![Referenzdokument A.0 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/audits/3-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/audits/3-va.png)

### Referenzdokument A.1 _IT-Strukturanalyse_

Das zweite Referenzdokument speist sich zum Einen aus den Daten, die innerhalb des gewählten Informationsverbunds dokumentiert werden (Siehe _[Zielgruppen anlegen](./vorgehensweise-mit-viva.md#zielgruppen-anlegen)_ und _[Zielobjekte zuordnen](./vorgehensweise-mit-viva.md#zielobjekte-zuordnen)_.\], und zum Anderen aus weiteren Daten, die direkt im jeweiligen Audit hinterlegt werden können.

[![Referenzdokument A.1 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/audits/4-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/audits/4-va.png)

Das Referenzdokument enthält unter anderem einen bereinigten Netzplan (Siehe BSI-Standard 100-2, Kapitel 4.2.3 und 4.3.5.). Dieser kann entweder über das entsprechende Formularfeld textuell referenziert werden oder - wenn das Feld leergelassen wird - ein automatisch generiertes Diagramm wird verwendet, das den Netzplan repräsentiert. Das generierte Bild enthält alle Informationen, die zu einem bereinigten Netzplan benötigt werden und durch die momentane Dokumentation zur Verfügung stehen: Dazu gehören die einzelnen [Zielgruppen](./vorgehensweise-mit-viva.md#zielgruppen-anlegen), deren Kommunikationsverbindungen untereinander sowie den dazugehörenden [Kritikalitäten](./vorgehensweise-mit-viva.md#schutzbedarf-festlegen). Ergänzt wird dies durch eine Farbgestaltung, die sich aus der Objekttyp-Konfiguration zusammensetzt: Dies geschieht auf Basis der den Zielgruppen zugeordneten [Zielobjekte](./vorgehensweise-mit-viva.md#zielobjekte-zuordnen).

[![Bereinigter Netzplan](../../assets/images/de/i-doit-pro-add-ons/viva/audits/5-va.jpg)](../../assets/images/de/i-doit-pro-add-ons/viva/audits/5-va.jpg)

!!! attention "Bitte beachten Sie die [optionalen Systemvoraussetzungen](./vorbereitung-der-viva-installation.md)."

### Referenzdokument A.2 _Schutzbedarfsfeststellung_

Dieses Referenzdokument enthält lediglich Daten, die bereits innerhalb des gewählten Informationsverbunds dokumentiert wurden. Siehe [_Schutzbedarfskategorien definieren_](./vorgehensweise-mit-viva.md#schutzbedarfskategorien-definieren) und _[Schutzbedarf festlegen](./vorgehensweise-mit-viva.md#schutzbedarf-festlegen)_.

### Referenzdokument A.3 _Modellierung des IT-Verbunds_

Dieses Referenzdokument enthält lediglich Daten, die bereits innerhalb des gewählten Informationsverbunds dokumentiert wurden. Siehe _[Informationsverbünde modellieren](./vorgehensweise-mit-viva.md#informationsverbünde-modellieren)_.

### Referenzdokument A.4 _Ergebnis des Basis-Sicherheitschecks_

Dieses Referenzdokument enthält lediglich Daten, die bereits innerhalb des gewählten Informationsverbunds dokumentiert wurden. Siehe _[Maßnahmen umsetzen](./vorgehensweise-mit-viva.md#maßnahmen-umsetzen)_.

### Referenzdokument A.5 _Ergänzende Sicherheitsanalyse_

Dieses Referenzdokument enthält lediglich Daten, die bereits innerhalb des gewählten Informationsverbunds dokumentiert wurden. Siehe _[Ergänzende Sicherheitsanalyse durchführen](./vorgehensweise-mit-viva.md#ergänzende-sicherheitsanalyse-durchführen)_.

### Referenzdokument A.6 _Risikoanalyse_

Dieses Referenzdokument stellt Informationen zusammen, um eine Risikoanalyse nach BSI-Standard 100-3 abzudecken. Siehe _[Risikoanalyse nach IT-Grundschutz](./risikoanalyse-nach-it-grundschutz.md#risikoanalyse-nach-it-grundschutz)_.

### Referenzdokument A.7 _Risikobehandlungsplan_

Dieses Referenzdokument wird derzeit noch nicht generiert.
