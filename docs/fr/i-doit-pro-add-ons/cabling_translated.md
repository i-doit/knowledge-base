<!-- TRANSLATED by md-translate -->
# Cabling

# Câblage

Mit dem [Add-on](../i-doit-pro-add-ons/index.md) **Verkabelungsansicht** erhalten Sie eine detaillierte Anzeige von Verkabelungen. Egal ob Sie einen Kabelweg nachverfolgen wollen oder Patchaufträge ausdrucken möchten.

Avec le [Add-on](../i-doit-pro-add-ons/index.md) **Vue du câblage**, vous obtenez un affichage détaillé des câblages. Que vous souhaitiez suivre un chemin de câble ou imprimer des ordres de patch.

## Download und Installation

## Téléchargement et installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[Add-ons](../i-doit-pro-add-ons/index.md)".

Ce module complémentaire peut être installé ultérieurement. L'article "[Add-ons](../i-doit-pro-add-ons/index.md)" fournit des descriptions détaillées concernant le téléchargement, l'installation, les mises à jour, etc.

## Konfiguration

## Configuration

Eine technische Konfiguration des Add-ons ist nach der [Installation](../i-doit-pro-add-ons/index.md) nicht notwendig.
Falls die Verkabelungsansicht immer direkt geöffnet werden soll kann dies unter **Verwaltung → Benutzereinstellungen → Benutzeroberfläche** konfiguriert werden.
Die Verkabelungsansicht kann auch über die Kategorie Verkabelung in Objekten aufgerufen werden.

Une configuration technique de l'add-on n'est pas nécessaire après l'[installation](../i-doit-pro-add-ons/index.md).
Si la vue du câblage doit toujours être ouverte directement, cela peut être configuré sous **Administration → Préférences utilisateur → Interface utilisateur**.
L'affichage du câblage peut également être appelé via la catégorie Câblage dans les objets.

## Rechtevergabe

## Attribution de droits

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Verkabelungsansicht** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

Sous **Administration → Système de droits → Attribution des droits → Vue du câblage**, il est possible d'adapter [Droits pour les personnes et groupes de personnes](../documentation efficace/administration des droits/index.md).

[![Rechtevergabe](../assets/images/de/i-doit-pro-add-ons/cabling/1-cab.png)](../assets/images/de/i-doit-pro-add-ons/cabling/1-cab.png)

[ ![Attribution de droits](../assets/images/fr/i-doit-pro-add-ons/cabling/1-cab.png)](../assets/images/fr/i-doit-pro-add-ons/cabling/1-cab.png)

## Verwendung

## Utilisation

Nach der Installation und der Konfiguration der Rechte steht das Add-on unter **Extras → CMDB → Verkabelungsansicht** zur Verfügung.

Après l'installation et la configuration des droits, l'add-on est disponible sous **Extras → CMDB → Vue du câblage**.

[![Verwendung](../assets/images/de/i-doit-pro-add-ons/cabling/2-cab.png)](../assets/images/de/i-doit-pro-add-ons/cabling/2-cab.png)

[ ![Utilisation](../assets/images/fr/i-doit-pro-add-ons/cabling/2-cab.png)](../assets/images/fr/i-doit-pro-add-ons/cabling/2-cab.png)

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Bug]  Setting to display cable names is not saved.<br>[Bug]  Highlight 'add-on' instead of 'extras' menu<br>[Bug] Overlap objects in the wiring view |
| 1.2 | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br> [Task] Design Compatibility |
| 1.1.1 |     | [Bug] Connections are not shown in add-on "cabling" |
| 1.1 | 21.02.2022 | [Improvement] Improve export options <br> [Bug] Remove "print" button in the CMDB-Explorer <br> [Bug] Visualization of cabling pathts, connecting an object with itself (two ports)  <br> [Bug] Sorting of connections in the wiring view is confusing  <br> [Bug] The visualization object browser should only provide objects that contain wiring |
| 1.0.4 | 20.05.2019 | [Bug] Wrong sorting of cabling <br> [Bug] Incorrect display of vitrification in IE11 |
| 1.0.3 | 18.12.2018 | [Bug] Fehler verhindert Erstellung von PDF-Dokumenten bei Verwendung von SSL <br> [Bug] Bilder werden nicht geladen |
| 1.0.2 | 18.12.2017 | [Verbesserung] Druckansicht Verkabelungsstrecken <br> [Verbesserung] Verkabelungsbrowser als Funktion hinzufügen <br> [Verbesserung] Änderung der Anschlusstypen wird nun im Logbuch dokumentiert <br> [Verbesserung] Zu exportierendes Objekt im Popup darstellen <br> [Bug] PDF Export funktioniert nicht, wenn nicht das Root Objekt ausgewählt ist |

| version | date | changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Bug] Le réglage pour afficher les noms des câbles n'est pas sauvegardé.<br>[Bug] Mettre en évidence 'add-on' au lieu du menu 'extras'<br>[Bug] Chevaucher les objets dans la vue de câblage |
| 1.2 | 05.09.2022 | [Tâche] Compatibilité PHP 8.0 <br> [Tâche] Compatibilité de conception |
| 1.1.1 | | [Bug] Les connexions ne sont pas affichées dans l'add-on "cabling" |
| 1.1 | 21.02.2022 | [Amélioration] Améliorer les options d'exportation <br> [Bug] Supprimer le bouton "imprimer" dans l'explorateur CMDB <br> [Bug] Visualisation des chemins de câblage, connectant un objet à lui-même (deux ports) <br> [Bug] Le tri des connexions dans la vue de câblage est confus <br> [Bug] Le navigateur d'objets de visualisation ne devrait fournir que des objets contenant du câblage |
| 1.0.4 | 20.05.2019 | [Bug] Mauvais tri du câblage <br> [Bug] Affichage incorrect de la vitrification dans IE11 |
| 1.0.3 | 18.12.2018 | [Bug] Erreur empêchant la création de documents PDF lors de l'utilisation de SSL <br> [Bug] Les images ne se chargent pas |
| 1.0.2 | 18.12.2017 | [Amélioration] Aperçu avant impression des tronçons de câblage <br> [Amélioration] Ajouter le navigateur de câblage comme fonction <br> [Amélioration] La modification des types de raccordement est désormais documentée dans le journal de bord <br> [Amélioration] Afficher l'objet à exporter dans le popup <br> [Bug] L'exportation PDF ne fonctionne pas si l'objet racine n'est pas sélectionné |