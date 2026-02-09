---
title: IT-Grundschutz templates
description: Verwaltung von IT-Grundschutz-Profilen zum Export, Import und zur Anwendung
lang: en
---

# IT-Grundschutz templates

With templates, you bundle a defined selection of modules including associated requirements and threats. Templates can be created, exported, imported, and applied.

### Open template management

Menu: Add-ons → IT-Grundschutz → Templates. The overview page shows all existing templates.

[![profile-overview](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-overview.png)](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-overview.png){:target="_blank"}

### Create a new template

1. Click New
2. Assign a name
3. Select modules
4. Save. Then all associated requirements and threats are displayed

[![profile-create](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-create.png)](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-create.png){:target="_blank"}

### Export template

- Click Export template in the template. A ZIP package is downloaded. Export is also possible from the overview page

### Import template

- In the template overview, select Import template and import a previously exported ZIP

### Apply template

1. Select the desired template in the list
2. Click Apply template
3. Carefully read and confirm the warning message

[![profile-apply](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-apply.png)](../../assets/images/en/i-doit-add-ons/viva2/it-grundschutz-profiles/profile-apply.png){:target="_blank"}

!!! danger
    When applying, all existing modules, threats, and requirements are deleted and then replaced by the contents of the template. Create a backup beforehand and test the effects in a test environment.

### Best Practices

- Establish naming conventions for templates, for example "BSI-Standardtemplate-2025-Q1"
- Version export files, for example `template-bsi-standardtemplate-2025-01.zip`
- Document the application of templates (time, client, user)


[<- Back](setup.md){ .md-button } · [Object types and categories ->](objecttypes-categories.md){ .md-button .md-button--primary }
