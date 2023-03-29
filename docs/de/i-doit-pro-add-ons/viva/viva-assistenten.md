# VIVA-Assistenten

Während im Kapitel zur _[Vorgehensweise mit VIVA](./vorgehensweise-mit-viva.md)_ ein manueller Weg beschrieben wird, um alle IT-Grundschutz-relevanten Informationen zu dokumentieren, umfasst das [Add-on](../index.md) **VIVA** eine Vielzahl an Assistenten, um diesen Weg teil-automatisiert zu gestalten. Die Assistenten analysieren im Vorfeld die Daten in VIVA und in der CMDB von i-doit, um daraus Vorschläge zu generieren, die der Anwender anschließend nachbearbeiten und/oder übernehmen kann. Komplexe Zusammenhänge innerhalb des Informationsverbunds werden dadurch sichtbar. Der Anwender hat somit die Möglichkeit, schneller und komfortabler zu dokumentieren.

[![Aktions- und Navigationsleiste der Zielgruppen](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/1-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/1-va.png)

Zu finden sind die Assistenten unterhalb eines jeden Informationsverbunds als Buttons in den jeweiligen Aktions- und Navigationsleisten. Beim Aufruf eines Assistenten öffnet sich ein Popup, welches sich nahtlos in die Oberfläche von VIVA einfügt. Die Assistenten arbeiten allesamt nach einem ähnlichen Schema:

1.  Daten aus VIVA und/oder derIT-Dokumentation von i-doit analysieren
2.  Vorschläge zusammenstellen und visuell aufbereiten
3.  Vorschläge nachbearbeiten durch den Anwender
4.  Vorschläge speichern oder verwerfen durch den Anwender

Die Assistenten unterstützen einen umfangreichen Prozess, der sich durch einen wesentlichen Teil der Dokumentation hindurchzieht. Dieser Prozess wird als mögliche Vorgehensweise im Kapitel _[Beispiel eines möglichen Arbeitsablaufs](./arbeitsablauf-mit-viva.md)_ erläutert.

Im Folgenden wird auf die spezifischen Eigenschaften der verschiedenen Assistenten eingegangen. Diese werden in[_Zielgruppen-Assistenten_](#zielgruppen-assistenten) und [_Schutzbedarfs-Assistenten_](#VIVAAssistenten-Schutzbedarfs-Assistenten) unterteilt.

Zielgruppen-Assistenten
-----------------------

Diese Art von Assistenten schlägt geeignete [Zielgruppen](./vorgehensweise-mit-viva.md#zielgruppen-anlegen) auf Basis bestehender Daten vor. Neue Zielgruppen mit IT-Grundschutz-Nummer und Bezeichnung lassen sich dadurch bequem anlegen. Vorschläge können verworfen oder, wenn sinnvoll, erweitert werden. Nachfolgend werden die einzelnen Assistenten näher erläutert. Die Reihenfolge bezieht sich auf die mögliche Vorgehensweise, die im Anhang [_Beispiel eines möglichen Arbeitsablaufs_](./arbeitsablauf-mit-viva.md) beschrieben ist. Zu finden sind die Assistenten innerhalb der jeweiligen Schichten.

| Assistenten | Quelle: Objekttypen | Quelle: Kategorien |
| --- | --- | --- |
| [IT-Service-Assistent (Schicht 5 _Anwendungen_)](#it-service-assistent-schicht-5-anwendungen) | IT-Service | IT-Service-Komponenten |
| [Anwendungs-Assistent (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) | Software (Anwendungen, Dienste, Betriebsysteme, usw.) | Softwarezuweisung, Installation |
| [IT-System-Assistent (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Standortzuweisung |
| [IT-System-Assistent (Schicht 4 _Netze_)](#it-system-assistent-schicht-4-netze) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Netzwerkports |
| [IT-System-Assistent (Schicht 5 _Anwendungen_)](#it-service-assistent-schicht-5-anwendungen) | (Virtuelle) Aktive Hardware (Server, Clients, usw.) | Softwarezuweisung, Installation |
| [Infrastruktur-Assistent (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) | Container-Objekte (Gebäude, Räume, usw.) | Standortzuweisung |

### IT-Service-Assistent (Schicht 5 _Anwendungen_)

Dieser Assistent analysiert die CIs vom Typ _Service_ in derIT-Dokumentation von i-doit, genauer: die Kategorie _Service-Komponenten_. Die Komponenten werden unter verschiedenen Gesichtspunkten analysiert und gegebenenfalls in die Liste der vorzuschlagenen Zielobjekte aufgenommen. Dabei wird rekursiv vorgegangen. Folgende CIs werden vorgeschlagen, wenn sie gefunden werden:

*   Der Service selbst
*   Untergeordnete Services; deren Komponenten werden wiederum analysiert
*   Software-CIs
*   Installierte Software von Komponenten (basierend auf der Kategorie _Softwarezuweisung_ sprich CIs vom Typ _Anwendung_, _Systemdienst, Betriebssystem, usw.)_
*   Installierte Software (basierend auf dem Beziehungsobjekt)
*   Mitglieder von Objektgruppen
*   Mitglieder von Cluster
*   Clusterdienste

Auch wenn keine passenden CIs identifiziert werden, wird aus dem Service ein Vorschlag generiert. Das Gesamtergebnis der Analyse - und damit der Vorschlag - besteht aus einer Liste von Services, deren Namen (bestehend aus dem Objekt-Titel) für die Gruppen-Bezeichner verwendet werden, und dazu optional passende CIs, die den Kriterien der Schicht entsprechen sprich eine Anwendung im weiteren Sinne darstellen.

[![IT-Service-Assistent (Schicht 5 Anwendungen)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/2-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/2-va.png)

**Beispiel:** In der IT-Dokumentation von i-doit gibt es ein Objekt vom Typ _Service_ mit der Bezeichnung "Web". In dessen Kategorie _Service-Komponenten_ sind drei Objekte verknüpft: ein Software-Objekt vom Typ _Anwendungen_ ("Apache HTTP Server"), ein Objekt vom Typ _Server_ ("Webserver"), auf dem eine Anwendung installiert ist (Kategorie _Softwarezuweisung_; namentlich "Shop"), und ein Beziehungsobjekt (welches eine Software-Zuweisung darstellt; namentlich "nginx läuft auf Reverse Proxy"). Daraus wird der Vorschlag für eine Zielgruppe generiert: Der Name entspricht dem Service, demnach "Web". Als verknüpfte Zielobjekte werden die Anwendung "Apache HTTP Server", "Shop" und "ngnix" herangezogen.

### Anwendungs-Assistent (Schicht 3 IT-Systeme)

Um Zielgruppen der Schicht _IT-Systeme_ vorgeschlagen zu bekommen, bietet sich dieser Assistent an. Er zieht Daten aus der Schicht 5 _Anwendungen_ heran. Befinden sich dort Zielgruppen, deren Zielobjekte eine Relation zu potenziellen Zielobjekten dieser Schicht haben, werden diese gruppiert und als eine oder mehrere Gruppen vorgeschlagen.

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/3-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/3-va.png)

**Beispiel:** In Schicht 5 _Anwendungen_ befindet sich die Gruppe "A 1 Web". Dort enthalten ist das Zielobjekt "Apache HTTP Server", das aus dem gleichnamigen Objekt in der CMDB resultiert. Dieses (Software-)Objekt ist auf einem Server ("Webserver") installiert (Kategorie _Installation_ beziehungsweise _Softwarezuweisungen_). Dieser Server eignet sich folglich als Zielobjekt für eine Gruppe in der Schicht 3 _IT-Systeme_. Ist dieses Zielobjekt auch tatsächlich noch keiner Zielgruppe zugeordnet, wird daraus der Vorschlag generiert, eine Zielgruppe zu erstellen, die das CI "Webserver" beinhaltet.

### IT-System-Assistent (Schicht 2 _Infrastruktur_)

In Gebäuden und Räumen stehen Hardware-Komponenten. Existieren zur Hardware entsprechende Zielgruppen in der Schicht 3 _IT-Systeme_, so ist es ratsam, diese Gebäude und Räume ebenfalls zu Zielgruppen zusammenzufassen. Dies übernimmt dieser Assistent. Er analysiert die Standortzuordnungen aus bereits existierenden Zielobjekten der Schicht 3 und generiert daraus Vorschläge für Zielgruppen aus der Schicht 2 _Infrastruktur_. Hierbei werden alle Zielobjekte der Schicht 3 berücksichtigt, die zwar eine Standortzuweisung haben, doch dessen Standort noch nicht als Zielobjekt einer Gruppe in Schicht 2 erfasst worden ist. Als Zielobjekte der Schicht 2 kommen alle Container-Objekte in Frage, d. h., es handelt sich um Objekte, deren Objekttyp sich als Standort eignet. Die Vorschläge sind rekursiv, folglich wird die gesamte Kette an Standortzuweisungen berücksichtigt (exklusive "Root-Lokation").

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/4-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/4-va.png)

**Beispiel:** In der Schicht 2 _IT-Systeme_ existiert die Zielgruppe "S 1 Webserver", der das Zielobjekt "Webserver" zugeordnet ist. Dieser Server steht im Raum "Serverraum I". Der Raum befindet sich im "Hauptgebäude". Soweit noch nicht geschehen, schlägt der Assistent vor, eine Zielgruppe zu erstellen, die Raum und Gebäude beinhaltet.

### IT-System-Assistent (Schicht 4 _Netze_)

In der IT-Dokumentation von i-doit gibt es viele Möglichkeiten, Verbindungen zwischen zwei Objekten zu dokumentieren. Eine Wesentliche ist die Verbindung über Netzwerkports. Auf diese Weise können ganze Netzwerk-Infrastrukturen bis ins kleinste Detail modelliert werden. Diese Daten nutzt dieser Assistent, um Kommunikationsverbindungen zwischen Zielgruppen vorzuschlagen. Diese Zielgruppen stammen alle aus der Schicht 3 _IT-Systeme_. Der Assistent analysiert demnach Zielobjekte aus Schicht 3, denen ein Objekt in der CMDB entspricht, das Einträge in der Kategorie _Netzwerkports_ hat. Wie in der Kategorie _Portübersicht_ gibt es möglicherweise eine Verbindung zwischen zwei oder mehreren Objekten mit Anfang (das Objekt selbst), Zwischenobjekten (zum Beispiel passive Komponenten wie Patchpanels) und einem Endobjekt, das für die weitere Analyse herangezogen wird. Gibt es zu diesem Endobjekt ein Zielobjekt in der Schicht 3 _IT-Systeme_, wird untersucht, ob dieses Zielobjekt einer Zielgruppe zugeordnet ist, die noch keine Kommunikationsverbindung mit der Zielgruppe des Anfangsobjekts hat. Sollte dies der Fall sein, werden beide Zielgruppen als Kommunikationsverbindungen vorgeschlagen.

Kommunikationsverbindungen führen letztlich zu einem "bereinigten Netzplan", der von den Details abstrahiert und nur wesentliche Informationen zulässt, um die Übersichtlichkeit zu wahren. Daher muss auch vom Detailreichtum der CMDB-Daten abstrahiert werden, was der Assistent versucht, dem Anwender abzunehmen.

[![Anwendungs-Assistent (Schicht 3 IT-Systeme)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/5-va.png)](../../assets/images/de/i-doit-pro-add-ons/viva/assistenten/5-va.png)

**Beispiel:** Ein Objekt vom Typ _Server_ mit der Bezeichnung "Webserver" gehört als Zielobjekt zur Zielgruppe "S 1 Webserver" (Schicht 3 _IT-Systeme_). Ebenfalls in dieser Schicht existiert die Zielgruppe "SW 1 Switch" mit dem Zielobjekt "Switch I", hinter dem sich das gleichnamige Objekt in der CMDB verbirgt. In der CMDB sind beide Objekte über die Port-Kategorie miteinander verbunden. Auch die Tatsache, dass zwischen beiden passive Komponenten wie Patchpanels zwischengeschaltet sind, hat keine Auswirkungen. Sollten nun beide Zielgruppen noch nicht über eine gemeinsame Kommunikationsverbindung in Schicht 3 _Netze_ verfügen, schlägt der Assistent diese vor.

### IT-System-Assistent (Schicht 5 _Anwendungen_)

Analog zum [Anwendungs-Assistent (Schicht 3 IT-Systeme)](./viva-assistenten.md) verfährt dieser Assistent: Auf Basis der Zielgruppen in Schicht 3 werden Vorschläge für Zielgruppen der Schicht 5 _Anwendungen_ generiert. Dazu wird die Kategorie _Softwarezuweisung_ in der CMDB von i-doit herangezogen.

### Infrastruktur-Assistent (Schicht 3 _IT-Systeme_)

Ähnlich wie beim vorherigen Assistenten verhält sich dieser analog zum [IT-System-Assistenten (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur). Zielgruppen aus der Schicht 2 _Infrastruktur_ werden analysiert, ob daraus Zielgruppen der Schicht 3 generiert werden können. Dazu dient die Kategorie _Standortzuweisung_ in der CMDB von i-doit.

Schutzbedarfs-Assistenten
-------------------------

Assistenten dieser Art machen Vorschläge, wie der [Schutzbedarf](./vorgehensweise-mit-viva.md#schutzbedarf-festlegen) gestaltet werden sollte. Dazu werden zusammengehörige Zielgruppen analysiert, sodass sich eine Vererbung des Schutzbedarfs ergibt, wie er im BSI-Standard vorgeschlagen wird. (Siehe BSI-Standard 100-2, Kapitel 4.3 _Schutzbedarfsfeststellung_.) Kurz zusammengefasst wird die zu jedem Grundwert (Vertraulichkeit, Integrität, Verfügbarkeit) höchste Schutzklasse (normal, hoch, sehr hoch) vererbt. Die Beispiele in den folgenden Abschnitten verdeutlichen das Prinzip.

Die Assistenten befinden sich innerhalb der Zielgruppen, um die jeweilige Schutzbedarfsfeststellung direkt zu assistieren. Soll der Schutzbedarf für mehrere Zielgruppen gleichzeitig bearbeitet werden, bieten sich die Assistenten innerhalb der Schichten an. Im Folgenden wird auf den jeweiligen Assistenten einer Schicht eingegangen. Hierbei lassen sich Vorschläge für die Schichten [2 _Infrastruktur_](#it-system-assistent-schicht-2-infrastruktur) und [3 _IT-Systeme_](#it-system-assistent-schicht-2-infrastruktur) generieren.

### Schutzbedarfs-Assistenten (Schicht 3 _IT-Systeme_)

Ähnlich dem [Anwendungs-Assistenten (Schicht 3 _IT-Systeme_)](#infrastruktur-assistent-schicht-3-it-systeme) werden die Zielgruppen der Schicht 5 _Anwendungen_ daraufhin analysiert, ob sie in Relation zu einer bestimmten Gruppe (oder mehreren) dieser Schicht stehen. Hierbei werden die Informationen zur Softwarezuweisung/Installation herangezogen.

**Beispiel:** Es existiert die Zielgruppe "Website" in der Schicht 5 _Anwendungen_. Der Schutzbedarf ist wie folgt gesetzt:

*   Vertraulichkeit: normal
*   Integrität: normal
*   Verfügbarkeit: sehr hoch

Zudem existiert in derselben Schicht die Zielgruppe "Forum" mit dem festgestellten Schutzbedarf:

*   Vertraulichkeit: hoch
*   Integrität: normal
*   Verfügbarkeit: hoch

In der Schicht 3 _IT-Systeme_ gibt es die entsprechende Zielgruppe "Webserver", auf dem die Website und das Forum gehostet sind. Der Assistent schlägt nun folgenden Schutzbedarf vor:

*   Vertraulichkeit: hoch
*   Integrität: normal
*   Verfügbarkeit: sehr hoch

### Schutzbedarfs-Assistenten (Schicht 2 _Infrastruktur_)

Wie auch beim [IT-System-Assistenten (Schicht 2 _Infrastruktur_)](#it-system-assistent-schicht-2-infrastruktur) wird die Standortzuweisung analysiert, um daraus den Schutzbedarf einer Zielgruppe (oder mehrerer) in Schicht 2 zu ermitteln, die im Zusammenhang mit einer Zielgruppe der Schicht 3 _IT-Systeme_ steht.

**Beispiel:** Es existiert in der Schicht 2 eine Zielgruppe "Serverraum". In diesem Raum stehen zwei Server, die durch die Zielgruppen "E-Mail-Server" und "Webserver" der Schicht 3 abgedeckt sind.

Schutzbedarf von "E-Mail-Server":

*   Vertraulichkeit: sehr hoch
*   Integrität: hoch
*   Verfügbarkeit: sehr hoch

Schutzbedarf von "Webserver":

*   Vertraulichkeit: hoch
*   Integrität: normal
*   Verfügbarkeit: sehr hoch

Aufgrund der Standortzuweisung schlägt der Assistent folgenden Schutzbedarf für "Serverraum" vor:

*   Vertraulichkeit: sehr hoch
*   Integrität: hoch
*   Verfügbarkeit: sehr hoch
