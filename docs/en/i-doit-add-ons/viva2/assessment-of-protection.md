---
title: Protection needs assessment
description: Visualization and management of the protection needs assessment and inheritance of an scope
icon:
status:
lang: en
---

# Protection needs assessment

Add-ons → IT-Grundschutz → Protection needs assessment opens the graphical view of the protection needs assessment and inheritance of an scope.

To load the assessment, first select an scope in the object browser at the top. For large scopes, this can take several seconds.

As soon as the scope is loaded, the left pane shows all target objects/target object groups assigned to the selected scope via the "scopes" category (or the corresponding reverse category "Infrastructure analysis" in the scope).

[![Target-object-groups](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-object-groups.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-object-groups.png){:target="_blank"}

The main area displays the complete scope graphically.

## Protection needs inheritance

Protection needs are inherited from top to bottom, starting with the target objects/target object groups assigned to the scope. All objects connected through one of the following relationships are then loaded (and the protection needs are inherited):

-   Gruppenmitgliedschaft
-   Service-Komponente
-   Softwarezuweisung
-   Anschlüsse
-   Clustermitgliedschaften
-   Virtuelle Maschine
-   Vertragszuweisung
-   Kommunikationsverbindung
-   Standort

Protection needs for the various basic values are inherited downward using the maximum principle.

[![target-objects.png](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-objects.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-objects.png){:target="_blank"}

If protection needs are entered directly on the object, the value is shown in green; if it is inherited, it is shown in gray. If the value set on the object is lower than the inherited value, it is shown in red (for example, the distribution effect).

[![target-objects-inherited.png](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-objects-inherited.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/target-objects-inherited.png){:target="_blank"}

## Filtering the view

Because the graphical view of large information scopes can become confusing, you can limit the view to specific "subtrees". By default, all target objects/target object groups are selected in the left pane and the complete information scope is loaded. To narrow the view, select only the target objects/target object groups you want to examine. Clicking "Apply filter" re-renders the view and shows only the inheritance trees of the selected target objects/target object groups.

## Entering/changing protection needs

The protection needs of an object can be edited directly in the graphical view. When you click an object in the tree view, it is loaded into the left pane.

[![Protection needs](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/protection-needs.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/protection-needs.png){:target="_blank"}

To enter or change protection needs, click "Edit protection needs" to open the form where you can enter the basic values and provide a justification for the classification.

[![Edit protection needs](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/edit-protection-needs.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/edit-protection-needs.png){:target="_blank"}

When you click Save, the object is stored with the entered values. After saving, the information scope must be reloaded completely because protection needs inheritance must be recalculated.

## Export protection needs

Use the "Export" button in the upper-right corner to export the protection needs assessment and inheritance:

-   SVG: The complete rendered area is saved as SVG.
-   PNG: Only the currently visible area is saved as a PNG file.
-   CSV: The protection needs assessment of the entire information scope is offered as a CSV export. Any filter applied is ignored.
-   JSON: The protection needs assessment of the entire information scope is offered as a JSON export. Any filter applied is ignored.

[![Export protection needs](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/export.png)](../../assets/images/en/i-doit-add-ons/viva2/assessment-of-protection/export.png){:target="_blank"}

[<- Back](structural-analysis.md){ .md-button } · [Modeling the information scope ->](modeling.md){ .md-button .md-button--primary }
