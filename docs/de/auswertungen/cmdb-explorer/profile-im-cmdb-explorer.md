# Profile im CMDB-Explorer

Um die Ansicht individuell zu gestalten kannst du im [CMDB-Explorer](../../auswertungen/cmdb-explorer/index.md) Profile erzeugen, die dir die bestmögliche Übersicht über die Abhängigkeiten in deiner [IT-Dokumentation](../../glossar.md#it-dokumentation) bietet.

Vorkonfigurierte Profile
------------------------

i-doit liefert bereits vorkonfigurierte Profile mit. Diese können nachträglich nicht direkt bearbeitet, aber kopiert und anschließend bearbeitet werden.

*   **Standard Profil**: Es werden alle Beziehungen visualisiert. Es findet keine Filterung statt. Zu jedem Objekt werden verschiedene Informationen dargestellt.
*   **Mikro Profil**: Die Darstellung wird auf die Objekttyp-Icons reduziert.
*   **Netz Profil**: Dieses Profil dient für die Graphen-Ansicht, steht demnach nicht für die Baum-Ansicht zur Verfügung.

Erstellen und Bearbeiten eines Profils
--------------------------------------

Über das Stift-Icon neben dem Auswahlfeld des aktiven Profils in der [Funktionsleiste](./index.md#funktionsleiste) können bestehende Profile bearbeitet oder kopiert und neue Profile hinzugefügt werden. Die Schaltfläche vor jedem Profil erlaubt es, das Profil als Standard zu setzen, sodass dessen Einstellungen direkt beim Aufruf eines [Objekts](../../glossar.md#objekt) im CMDB-Explorer verwendet werden. Ein grüner Punkt zeigt, dass es sich bei dem Profil um das aktivierte Standard-Profil handelt.

In der Bearbeitungsansicht werden allgemeine Einstellungen im oberen Bereich festgelegt. Die Ansicht wird durch einen Klick auf das Stift-Icon in der Zeile des gewünschten Profils geöffnet. Neben dem Titel des Profils kann festgelegt werden, ob die Darstellung des Pfades zum Root-Objekt aktiviert wird, der Tooltip dargestellt werden soll und welche Ausrichtung verwendet wird. Eine Vorschau der Konfiguration wird rechts der allgemeinen Einstellungen angezeigt.

[![profile](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/1-cep.png)](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/1-cep.png)

Im Reiter **Visualisierungsoptionen** wird die grafische Darstellung der Kacheln festgelegt. Neben der Breite wird die Highlight-Farbe angegeben. Über die Checkboxen werden die Zeilen aktiviert, die verwendet werden. Jedes Objekt kann über bis zu acht Zeilen verfügen. Die Konfiguration in jeder Zeile ist identisch. Im Drop-Down-Menü wird der Inhalt der Zeile ausgewählt. Hier stehen vordefinierte Attribute zur Auswahl. Der Hintergrund kann entweder der Objektfarbe entsprechen, sodass diese abhängig vom [Objekttyp](../../glossar.md#objekttyp) ist oder eine selbstdefinierte Farbe verwenden. Die Schriftfarbe sowie -formatierung können ebenfalls festgelegt werden. Hierbei werden Formatierungsoptionen über die Schaltflächen definiert.

[![visualisierungsoptionen](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/2-cep.png)](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/2-cep.png)

Der Reiter **Standardwerte** ermöglicht die Festlegung von Werten, die auch während der Verwendung angepasst werden können. Hier können die Ausrichtung angegeben, der Standard-Service-Filter festgelegt und der Objekttyp Filter definiert werden. Der Objekttyp Filter beschränkt die Ansicht auf die ausgewählten Objekttypen.

[![standardwerte](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/3-cep.png)](../../assets/images/de/auswertungen/cmdb-explorer/profile-im-cmdb-explorer/3-cep.png)

Im Reiter **Objektinformationen** werden die Objektinformationen ausgewählt, die im Informationsbereich angezeigt werden, wenn ein Objekt aktiviert wurde. Die Auswahl erfolgt über die [Kategorie](../../glossar.md#kategorie) im Drop-Down-Menü und anschließend über das Plus-Icon neben dem gewünschten [Attribut](../../glossar.md#attribut), welches angezeigt werden soll. Gewählte Attribute können in der Spalte **gewählte Attribute** über das Minus-Icon wieder entfernt werden.