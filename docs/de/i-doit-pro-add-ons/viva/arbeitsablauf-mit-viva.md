Die Möglichkeiten der IT-Dokumentation sind bereits in i-doit vielfältig und lassen sich an die Vorgaben und Bedürfnisse der jeweiligen (Organisations-)Umgebung anpassen. Das [Add-on](/display/de/i-doit+pro+Add-ons) `**VIVA**` stellt hier keine Ausnahme dar: Auch wenn die zugrunde liegenden Standards des IT-Grundschutzes viele Vorgaben machen, sind sie an zahlreichen Stellen interpretationsfähig. Dem versucht VIVA gerecht zu werden. Trotz alledem haben sich einige Arbeitsabfolgen in der Praxis etabliert, die in diesem Kapitel näher beschrieben werden. Das Beispiel stellt weder Anspruch auf Vollständigkeit noch Verbindlichkeit. Weitere (Zwischen-)Schritte wie Anpassung der Dokumentation sind wahrscheinlich nötig.

![Schrittweiser Arbeitsablauf in Anlehnung an das Wasserfallmodell mit Rückkopplung](/download/attachments/13598789/i-doit_viva_diagram_workflow.png?version=1&modificationDate=1441641784144&api=v2&effects=drop-shadow "Schrittweiser Arbeitsablauf in Anlehnung an das Wasserfallmodell mit Rückkopplung")

Ziel dieses Arbeitsablaufs ist es, eine solide Dokumentationsbasis zu schaffen, um später eine Auditierung und Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz zu unterstützen.

1.  [Vorbereitung der VIVA-Installation](/display/de/Vorbereitung+der+VIVA-Installation): In der IT-Dokumentation von i-doit befinden sich Objekte (inklusive Standort- und Softwarezuweisung sowie Portanschlüssen, wenn möglich), die zu Services modelliert sind und vom IT-Grundschutz erfasst werden sollen.
2.  IT-Grundschutz-Kataloge verwalten
    1.  [IT-Grundschutz-Kataloge EL 15 von 2016 importieren](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Katalogeimportieren)
    2.  Bausteine, Maßnahmen und Gefährdungen anpassen (optional)
3.  Informationverbund mit Zielgruppen und -objekten modellieren
    1.  [Informationsverbund anlegen](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Informationsverbündemodellieren)
    2.  [IT-Service-Assistenten (Schicht 5 _Anwendungen_) ausführen](/display/de/VIVA-Assistenten#VIVAAssistenten-IT-Service-Assistent(Schicht5Anwendungen)); danach:
    3.  [Anwendungs-Assistent (Schicht 3 _IT-Systeme_)](/display/de/VIVA-Assistenten#VIVAAssistenten-Anwendungs-Assistent(Schicht3IT-Systeme))
    4.  [IT-System-Assistent (Schicht 2 _Infrastruktur_)](/display/de/VIVA-Assistenten#VIVAAssistenten-IT-System-Assistent(Schicht2Infrastruktur))
    5.  [IT-System-Assistent (Schicht 4 _Netze_)](/display/de/VIVA-Assistenten#VIVAAssistenten-IT-System-Assistent(Schicht4Netze))
4.  Schutzbedarf feststellen
    1.  [Schutzbedarfskategorien anpassen](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Schutzbedarfskategoriendefinieren)
    2.  [Schutzbedarf der Zielgruppen in Schicht 5 _Anwendungen_ feststellen](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Schutzbedarffestlegen); danach Assistenten ausführen:
    3.  [Schutzbedarfs-Assistenten (Schicht 3 _IT-Systeme_)](/display/de/VIVA-Assistenten#VIVAAssistenten-Schutzbedarfs-Assistenten(Schicht3IT-Systeme))
    4.  [Schutzbedarfs-Assistenten (Schicht 2 _Infrastruktur_)](/display/de/VIVA-Assistenten#VIVAAssistenten-Schutzbedarfs-Assistenten(Schicht2Infrastruktur))
5.  Bausteine zuordnen und Maßnahmen umsetzen
    1.  [Pro Zielgruppe die nötigen Bausteine zuordnen](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Bausteinezuordnen)
    2.  [Pro Zielgruppe die Umsetzung der Maßnahmen dokumentieren](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Maßnahmenumsetzen)
    3.  [Prüffragen beantworten](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-Prüffragenbeantworten)
6.  Risikoanalyse durchführen
    1.  [Ergänzende Sicherheitsanalyse durchführen](/display/de/Vorgehensweise+mit+VIVA#VorgehensweisemitVIVA-ErgänzendeSicherheitsanalysedurchführen)
    2.  [Gegebenenfalls Risikoanalyse durchführen](/display/de/Risikoanalyse+nach+IT-Grundschutz)
7.  Audit erstellen
    1.  [Reports überprüfen](/display/de/Berichte+mit+VIVA) und gegebenenfalls Schritte 2-5 wiederholen, bis Reports keine unvermeidbar negativen Ergebnisse mehr liefern
    2.  Informationen zu [Referenenzdokumenten A.0](/pages/viewpage.action?pageId=13598768#AuditsmitVIVAunterstützen-ReferenzdokumentA.0IT-Sicherheitsrichtlinien) und [A.1](/pages/viewpage.action?pageId=13598768#AuditsmitVIVAunterstützen-ReferenzdokumentA.1IT-Strukturanalyse) hinterlegen
    3.  [Audits erstellen](/pages/viewpage.action?pageId=13598768#AuditsmitVIVAunterstützen-Auditserstellen)
    4.  Ausgabe nachbearbeiten