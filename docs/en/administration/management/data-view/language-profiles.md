---
title: Language Profiles
description: With custom translations, you can change the names of desired fields or add new languages with just a few clicks.
icon:
status:
lang: en
---
# Language Profiles

Under **Administration → Data View → Language Profiles**, you can create custom translations for field names, category labels, and other interface texts in i-doit. This way, the terminology can be adapted to the terms used by your organization -- for example, you can rename "Location" to "Branch" or add a completely new language.

To create a language profile, select the source language and the target language. Then you can selectively override individual terms. The changes take effect for all users who have selected this language in their [User Settings](../user-settings/user-language.md).

[![Language Profiles](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile.png)](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile.png)

[![Language Profiles](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile/1-s.png)](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile/1-s.png)

## Export and import

Language profiles can be exported as a JSON file and imported into another i-doit installation or another tenant. This way, you can transfer customized terms, for example from a test system to the production system.

### Export a language profile

1. Open **Administration → Data View → Language Profiles**.
2. Select exactly one language profile in the list.
3. Click **Export**.

i-doit downloads the file `custom-translation-<abbreviation>.json`. It contains the name of the language, the abbreviation, whether the language is available, the flag, and all customized terms of the profile.

### Import a language profile

1. Open **Administration → Data View → Language Profiles**.
2. Click **Import**. The **Import translation** window opens.
3. Under **Merge translations**, define how existing customized terms are handled:
    - **Yes**: The terms from the file are added to the existing ones. Terms contained in both get the value from the file.
    - **No**: The existing customized terms are replaced by the terms from the file.
4. Under **Select file**, choose the exported JSON file. The import starts right after the upload and lists the individual steps.
5. Click **Close**. The page reloads and shows the imported language profile.

If a language profile with the same abbreviation already exists, the import updates this profile (name, flag and availability). Otherwise, it creates a new language profile. Only JSON files up to 16 MB that contain a valid abbreviation are accepted.

Exporting requires the **Edit** right for **Language profiles**, importing requires the **Create** or **Edit** right.

!!! note "Exports before i-doit 39.2"
    Before i-doit 39.2, the export file could contain no customized terms. In this case, export the language profile again with i-doit 39.2 or later.

## See also

- [User Language](../user-settings/user-language.md) -- Set the language per user
- [Data Formats](../user-settings/datenformate.md) -- Configure date and number formats
