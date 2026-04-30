---
title: Multilingualism and Translations
description: "i-doit comes with German and English as built-in languages."
icon:
status:
lang: en
---
# Multilingualism and Translations

i-doit comes with German and English as built-in languages. The entire interface — menus, category labels, attribute names, and dialog values — is automatically displayed in the selected language. In addition, you can customize existing translations, override them, or even create entirely new languages via language profiles. This article explains how the language switch works, what is translated and what is not, and how you maintain your own translations.

!!! info "English-only areas"
    Some areas are only available in English: the [login](../basics/initial-login.md), the [Admin Center](../administration/admin-center.md), the [setup](../installation/manual-installation/setup.md), the [update wizard](../maintenance-and-operation/i-doit-update.md), and the [command-line tool Controller](../automation-and-integration/cli/index.md).

---

## Changing the language

There are several ways to change the display language:

### Flags in the interface

In the top right of the web GUI, you will find country flags. Clicking on one immediately switches the language for the current session.

[![Language switch](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)

### User setting (permanent)

Under **Administration → User Settings → User Language**, you can set which language should be active after login. This setting is important because it also applies to functions that operate outside the web GUI — for example, [email notifications](../evaluation/notifications.md) are sent in the language configured here.

### URL parameter

You can also control the language via a URL parameter by appending `?lang=de` or `?lang=en` to the URL. This is practical for sending someone a link in a specific language.

### Automatic language detection

Web browsers send the user's preferred languages with every request. i-doit evaluates this information during login and automatically selects the appropriate language. However, the user setting under **Administration → User Settings → User Language** takes precedence as soon as a value is set there.

---

## What is translated — and what is not?

### Translated

- **UI elements**: Menus, buttons, navigation entries, tooltips
- **Category and attribute names**: For example, "General" becomes "Allgemein"
- **Object type labels**: "Room" ↔ "Raum", "Server" ↔ "Server"
- **Dialog values**: Predefined selection lists such as CMDB status or operating states

### Not translated

- **Object titles**: The name of an object always remains the same, regardless of the language. This is intentional because object titles serve as [unique references](../basics/unique-references.md).
- **User data**: Descriptions, comments, and other free-text fields that you enter yourself are not translated — they remain in the language in which they were written.
- **Custom dialog values**: When you create your own entries in dialog fields, you must make them multilingual yourself via language constants.

---

## Understanding language constants

Behind every translation is a so-called language constant. In the source code and in the database, the visible text is never stored directly — instead, a placeholder such as `LC__CMDB__OBJTYPE__ROOM` is used. Only when displayed in the web GUI does it become "Raum" or "Room" — depending on the selected language.

| Language constant | English | German |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

You can recognize language constants by the fact that they contain only uppercase letters (A–Z), underscores, and occasionally numbers. They always begin with the prefix `LC__`.

---

## Custom translations and language profiles

### When do you need a language profile?

Language profiles are the way to go beyond German and English in i-doit — or to customize an existing language on a large scale. Typical use cases:

- You want to provide i-doit in a third language (e.g., Spanish or French)
- You want to standardize technical terms company-wide without modifying files on the server

### How to create a language profile

Navigate to **Administration → Data View → Language Profiles** and click **New**. Assign a name, select a flag, and save. The new language is immediately available for selection but initially contains the German texts. You then translate individual fields directly in the language profile editor — you can filter by language constants or existing text and enter the translation.

A detailed step-by-step guide can be found under [Custom Translations](../use-cases/custom-translations.md).

---

## Translation files on the server

If you prefer to work directly at the file level, you can find the translations in the i-doit installation directory under `src/lang/`:

| File | Purpose | Update-safe? |
| --- | --- | --- |
| `de.inc.php` | Complete German translation | no |
| `en.inc.php` | Complete English translation | no |
| `de_custom.inc.php` | Your customizations to the German language | yes |
| `en_custom.inc.php` | Your customizations to the English language | yes |
| `de_custom.example.inc.php` | Example file as a template (ignored by i-doit) | no |

!!! warning "Only edit `custom` files"
    The main files `de.inc.php` and `en.inc.php` are overwritten with every [update](../maintenance-and-operation/i-doit-update.md). Therefore, enter your customizations exclusively in the `custom` files.

### Syntax

The files contain PHP code. Each translation is a line following this pattern:

```php
$g_langcache['LC__EXAMPLE'] = 'Your translation';
```

You can use this to both introduce new language constants and override existing ones — the `custom` file always takes precedence over the main file.

### Forcing a language

If you want i-doit to be available in only one language, you can replace the unneeded language file with the desired one:

```shell
cd /var/www/html/           # i-doit installation directory (adjust if needed)
cd src/lang/
cp de.inc.php de.inc.php.bak
cp en.inc.php de.inc.php    # Replace German with English
```

Since the main files are not update-safe, you must repeat this step after every update.

---

## Multilingualism for object types, categories, and attributes

### Object type groups

In the tenant database, the table `isys_obj_type_group` contains the language constants in the column `isys_obj_type_group__title`. When you create a new [object type group](../basics/it-documentation-structure.md), you can replace the title in the database with a language constant and translate it in the `custom` files. Do not rename existing groups directly in the database — instead, override the language constant in the `custom` files.

### Object types

Under **Administration → Data Structure → Object Types → [Group] → [Object Type] → Language Constant / Label**, you can give each [object type](../basics/it-documentation-structure.md) a multilingual name — this applies equally to standard and [custom object types](../basics/custom-object-types.md).

### Categories and attributes

You translate standard [categories](../basics/it-documentation-structure.md) and their attributes by overriding the associated language constant in the `custom` files. For [custom categories](../basics/custom-categories.md), you enter a language constant as the title directly when creating them and then translate it in the `custom` files for each language.

---

## Practical tip: Consistent language in a multilingual team

If your team includes both German-speaking and English-speaking colleagues working with i-doit, it is worth establishing a few rules:

- **Always assign object titles in English** — since they are not translated, all team members will immediately understand the names.
- **Maintain description fields in a consistent language** — or, if that is not realistic, at least agree on one language per category.
- **Create custom dialog values with language constants** so they are displayed correctly in both languages. This requires some effort during setup but saves confusion in the long run.
- **Set the user language correctly** — remind all team members to set their preferred language under **Administration → User Settings → User Language** so that notifications are also delivered in the correct language.
