# Objekt Listen konfigurieren
Jeder Benutzer kann seine eigenen Listenansichten konfigurieren.

Konfiguration der benutzerdefinierten Listenansicht
---------------------------------------------------

Die Konfiguration der jeweiligen Objekt Listen erreichen Sie über das Symbol neben dem Filter der Objekt Liste. Alternativ können Sie auch **Administration → Benutzereinstellungen → Objektlisten → [Objekttyp]** öffnen, wobei **[Objekttyp]** durch den Objekttyp zu ersetzen ist, dessen Listenansicht Sie anpassen möchten.

Die Konfiguration einer Listenansicht ist benutzerspezifisch. Das bedeutet, dass diese Einstellungen nur für den Benutzer selbst gelten. Die Ansichten anderer Benutzer werden nicht geändert, es sei denn, einer der Benutzer überträgt diese Ansichten an andere. Der jeweilige Benutzer benötigt die entsprechenden Rechte, die in der Rechteverwaltung eingestellt werden können. Auf diese Weise kann die Notwendigkeit regelmäßiger Anpassungen von Benutzern mit unterschiedlichen Prioritäten (z. B. weil sie in verschiedenen Abteilungen arbeiten) vermieden werden.

[![benutzerdefinierte-listenansicht](../../assets/images/de/grundlagen/objekt-listen-konfigurieren/1-olk.png)](../../assets/images/de/grundlagen/objekt-listen-konfigurieren/1-olk.png)

Einstellen der Art des Öffnens eines Objekts
--------------------------------------------

Oben links markiert ein Kontrollkästchen die Option, dass ein Objekt durch Anklicken seiner Zeile geöffnet werden kann. Bei Deaktivierung dieser Option kann ein Objekt ausschließlich über den Objektlink in der entsprechenden Spalte geöffnet werden.

Auswahl der angezeigten Attribute
---------------------------------

Die in der Liste angezeigten [Attribute](../kategorien-und-attribute.md) können über die beiden Spalten eingestellt werden. Wählen Sie die [Kategorie](../kategorien-und-attribute.md) aus, deren Inhalt Sie in der Liste im linken Bereich sehen möchten.  
Achten Sie bitte darauf, dass Sie zuerst auswählen, ob es sich um eine globale, spezifische oder benutzerdefinierte Kategorie handelt. Die Kategorie selbst wählen Sie über das Dropdown-Menü aus.  
Nun werden alle Attribute, die zu dieser Kategorie gehören, angezeigt. Über das grüne Plus-Symbol können Sie die Attribute zu den ausgewählten Attributen hinzufügen, so dass sie auch in der rechten Spalte erscheinen.  
Mit dem roten Minus-Symbol können Sie bereits ausgewählte Attribute aus der Listenansicht entfernen. Die Hierarchie der Attribute in der rechten Spalte können Sie per Drag'n'Drop anpassen. Das oberste Attribut in dieser Ansicht finden Sie als erstes in Ihrer Liste.

Standardsortierung einstellen
-----------------------------

Im Bereich der ausgewählten Attribute für diese Liste finden Sie Optionsfelder, mit denen Sie festlegen können, nach welchem Attribut die Liste sortiert werden soll. Oberhalb der Auswahl der Attribute steht die Option Sortieren zur Verfügung. Damit ist es möglich, die Sortierung aufsteigend oder absteigend einzustellen.

!!! info "Hinweis"

    Wenn Sie eine Listenansicht konfigurieren und feststellen, dass die Anzeige beim nächsten Laden der Liste nicht mit der Konfiguration übereinstimmt, leeren Sie bitte den Cache Ihres Browsers, um sicherzustellen, dass die Anzeige der Liste aktuell ist.

Apply Configuration to other Users
----------------------------------

Sofern Sie über die entsprechenden Rechte verfügen, ist es möglich, die aktuelle Konfiguration einer Liste anderen Benutzern Ihrer i-doit-Installation zuzuweisen, und zwar im Abschnitt Konfiguration anderen Benutzern zuweisen.  
Wählen Sie dazu über den Objektbrowser den gewünschten Benutzer aus. Bitte beachten Sie, dass Ihre eigene Konfiguration dabei überschrieben werden kann.

Konfiguration als Standard festlegen
------------------------------------

Sie können die Standardansicht für Listen dieses Objekttyps über Konfiguration als Standard festlegen anpassen, sofern Sie die dafür erforderlichen Rechte besitzen. Alle Benutzer, die keine benutzerdefinierte Konfiguration für diese Liste haben, sehen beim nächsten Öffnen der Liste die von Ihnen eingestellte Standardansicht. Benutzer, die eine benutzerdefinierte Ansicht haben, behalten ihre Liste. Alle Benutzer können natürlich weiterhin benutzerdefinierte Listenansichten konfigurieren.

!!! info "Hinweis"

    Objektlisten mit einer großen Anzahl von Attributen können zu einer verminderten Leistung führen. Wenn Sie feststellen, dass Ihre Leistung nachlässt, reduzieren Sie bitte die Anzahl der ausgewählten Attribute oder erhöhen Sie Ihre [Systemressourcen](../../installation/systemvoraussetzungen.md).

!!! success "Tip"

    In der Standardinstallation von i-doit wird die Objekt-ID in jeder Objektliste angezeigt. Da dies für den normalen Gebrauch nicht relevant ist, können Sie diese Spalte aus den Listen entfernen. Dies verbessert auch die Transparenz.