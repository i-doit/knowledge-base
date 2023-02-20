# Arbeitsablauf mit VIVA

Die Möglichkeiten der IT-Dokumentation sind bereits in i-doit vielfältig und lassen sich an die Vorgaben und Bedürfnisse der jeweiligen (Organisations-)Umgebung anpassen. Das [Add-on](../index.md) **VIVA** stellt hier keine Ausnahme dar: Auch wenn die zugrunde liegenden Standards des IT-Grundschutzes viele Vorgaben machen, sind sie an zahlreichen Stellen interpretationsfähig. Dem versucht VIVA gerecht zu werden. Trotz alledem haben sich einige Arbeitsabfolgen in der Praxis etabliert, die in diesem Kapitel näher beschrieben werden. Das Beispiel stellt weder Anspruch auf Vollständigkeit noch Verbindlichkeit. Weitere (Zwischen-)Schritte wie Anpassung der Dokumentation sind wahrscheinlich nötig.

[![Schrittweiser Arbeitsablauf in Anlehnung an das Wasserfallmodell mit Rückkopplung](../../assets/images/de/i-doit-pro-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)](../../assets/images/de/i-doit-pro-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)

Ziel dieses Arbeitsablaufs ist es, eine solide Dokumentationsbasis zu schaffen, um später eine Auditierung und Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz zu unterstützen.

1.  [Vorbereitung der VIVA-Installation](./vorbereitung-der-viva-installation.md): In der IT-Dokumentation von i-doit befinden sich Objekte (inklusive Standort- und Softwarezuweisung sowie Portanschlüssen, wenn möglich), die zu Services modelliert sind und vom IT-Grundschutz erfasst werden sollen.
2.  IT-Grundschutz-Kataloge verwalten
    1.  [IT-Grundschutz-Kataloge EL 15 von 2016 importieren](./vorgehensweise-mit-viva.md#kataloge-importieren)
    2.  Bausteine, Maßnahmen und Gefährdungen anpassen (optional)
3.  Informationverbund mit Zielgruppen und -objekten modellieren
    1.  [Informationsverbund anlegen](./vorgehensweise-mit-viva.md#informationsverbünde-modellieren)
    2.  [IT-Service-Assistenten (Schicht 5 _Anwendungen_) ausführen](./viva-assistenten.md#it-service-assistent-schicht-5-anwendungen); danach:
    3.  [Anwendungs-Assistent (Schicht 3 _IT-Systeme_)](./viva-assistenten.md#infrastruktur-assistent-schicht-3-it-systeme)
    4.  [IT-System-Assistent (Schicht 2 _Infrastruktur_)](./viva-assistenten.md#it-system-assistent-schicht-2-infrastruktur)
    5.  [IT-System-Assistent (Schicht 4 _Netze_)](./viva-assistenten.md#it-system-assistent-schicht-4-netze)
4.  Schutzbedarf feststellen
    1.  [Schutzbedarfskategorien anpassen](./vorgehensweise-mit-viva.md#schutzbedarfskategorien-definieren)
    2.  [Schutzbedarf der Zielgruppen in Schicht 5 _Anwendungen_ feststellen](./viva-assistenten.md#it-service-assistent-schicht-5-anwendungen); danach Assistenten ausführen:
    3.  [Schutzbedarfs-Assistenten (Schicht 3 _IT-Systeme_)](./viva-assistenten.md#infrastruktur-assistent-schicht-3-it-systeme)
    4.  [Schutzbedarfs-Assistenten (Schicht 2 _Infrastruktur_)](./viva-assistenten.md#it-system-assistent-schicht-2-infrastruktur)
5.  Bausteine zuordnen und Maßnahmen umsetzen
    1.  [Pro Zielgruppe die nötigen Bausteine zuordnen](./vorgehensweise-mit-viva.md#bausteine-zuordnen)
    2.  [Pro Zielgruppe die Umsetzung der Maßnahmen dokumentieren](./vorgehensweise-mit-viva.md#maßnahmen-umsetzen)
    3.  [Prüffragen beantworten](./vorgehensweise-mit-viva.md#prüffragen-beantworten)
6.  Risikoanalyse durchführen
    1.  [Ergänzende Sicherheitsanalyse durchführen](./vorgehensweise-mit-viva.md#ergänzende-sicherheitsanalyse-durchführen)
    2.  [Gegebenenfalls Risikoanalyse durchführen](./risikoanalyse-nach-it-grundschutz.md#risikoanalyse-nach-it-grundschutz)
7.  Audit erstellen
    1.  [Reports überprüfen](./berichte-mit-viva.md) und gegebenenfalls Schritte 2-5 wiederholen, bis Reports keine unvermeidbar negativen Ergebnisse mehr liefern
    2.  Informationen zu [Referenenzdokumenten A.0](./audits-mit-viva-unterstuetzen.md#referenzdokument-a0-it-sicherheitsrichtlinien) und [A.1](./audits-mit-viva-unterstuetzen.md#referenzdokument-a1-it-strukturanalyse) hinterlegen
    3.  [Audits erstellen](./audits-mit-viva-unterstuetzen.md#audits-erstellen)
    4.  Ausgabe nachbearbeiten