---
title: Reports with VIVA
description: "To ensure continuous quality assurance, the VIVA add-on supports the user with a series of reports..."
icon:
status:
lang: en
---
# Reports with VIVA

To ensure continuous quality assurance, the [add-on](../index.md) **VIVA** supports the user with a series of reports. These are primarily suitable for visualizing missing or insufficient information during the actual documentation process. The reports accompany the user throughout the entire documentation process.

The [audit](./audits-mit-viva-unterstuetzen.md) in turn serves as the result, forming the final report of the project and potentially leading to certification according to ISO 27001 based on IT-Grundschutz.

For each [information domain](./vorgehensweise-mit-viva.md), different reports are available for selection. They can be found within VIVA via the menu tree under **Information Domains → Name of the Information Domain → Reports**.

[![Reports in the menu tree](../../assets/images/de/i-doit-add-ons/viva/berichte/1-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/1-vb.png)

The overview page provides a real-time summary of all available reports. They are listed by name and visualized using a traffic light system:

| Red    | The report identifies missing or insufficient data. The number of identified locations is shown in parentheses.       |
| ------ | --------------------------------------------------------------------------------------------------------------------- |
| Yellow | The report is currently being executed and has not yet returned any results.                                           |
| Green  | The report returns a positive result: no missing or insufficient data has been identified.                             |

[![Overview page of reports](../../assets/images/de/i-doit-add-ons/viva/berichte/2-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/2-vb.png)

Clicking on a report on the overview page or in the menu tree leads to detailed results. All reports follow a similar structure: a brief description of the report's purpose is displayed at the top of the page. Optionally, a graph is included that visually represents the result. Below that, a tabular listing of the results follows. Each row contains the most important information about a location identified as insufficient or erroneous. Clicking on a row leads to the corresponding location within the VIVA add-on. This allows the user to quickly and easily improve the documentation.

[![Result of a report](../../assets/images/de/i-doit-add-ons/viva/berichte/3-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/3-vb.png)

Reports can not only be viewed within the VIVA add-on in the browser, but can also be exported as PDF files. This has the advantage that a report can be easily forwarded or printed. The corresponding functionality is offered by the _PDF_ button at the top of each report.

!!! attention "It is recommended to run reports regularly. Larger changes to the documented data can thus be immediately verified for completeness and formal correctness, provided this can be covered by an automatic algorithm."
