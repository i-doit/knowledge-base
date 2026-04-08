---
title: IT-Grundschutz Profiles
description: Administration of IT-Grundschutz profiles for export, import, and application
icon:
status:
lang: en
---

# IT-Grundschutz Profiles

With profiles, you bundle a defined selection of modules including their associated requirements and threats. Profiles can be created, exported, imported, and applied.

### Opening Profile Management

Menu: Add-ons → IT-Grundschutz → Profiles. The overview page shows all existing profiles.

[![Profile overview](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-uebersicht.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-uebersicht.png){:target="_blank"}

### Creating a New Profile

1. Click New
2. Assign a name
3. Select modules
4. Save. Afterward, all associated requirements and threats are displayed.

[![Create profile](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anlegen.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anlegen.png){:target="_blank"}

### Exporting a Profile

- In the profile, click Export Profile. A ZIP package will be downloaded. Exporting is also possible from the overview page.

### Importing a Profile

- In the profile overview, select Import Profile and import a previously exported ZIP file.

### Applying a Profile

1. Select the desired profile in the list
2. Click Apply Profile
3. Read the warning carefully and confirm

[![Apply profile](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anwenden.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anwenden.png){:target="_blank"}

!!! danger "Caution"
    When applying a profile, all existing modules, threats, and requirements are deleted and then replaced with the contents of the profile. Create a backup and verify the effects in a test environment first.

### Best Practices

- Define naming conventions for profiles, for example "BSI-standard-profile-2025-Q1"
- Version export files, for example `profile-bsi-standard-profile-2025-01.zip`
- Document profile applications (timestamp, tenant, user)


[<- Back](setup.md){ .md-button } · [Object Types and Categories ->](objecttypes-categories.md){ .md-button .md-button--primary }
