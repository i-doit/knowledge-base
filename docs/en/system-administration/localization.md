# Localization

_Do you speak IT documentation? _English is and will remain the standard language in the domain of information technology. But as diversity enriches, i-doit supports several languages. Among other things, we will show you how to adjust existing translations in this article.

Supported Languages
-------------------

| Language | i-doit open | i-doit pro |
| --- | --- | --- |
| English | yes | yes |
| German | no  | yes |

The localization refers to the [web GUI of i-doit](../basics/structure-of-the-it-documentation.md). [Login](../basics/initial-login.md), [Admin Center](./admin-center.md), [Setup](../installation/manual-installation/setup.md), [Update assistant](../maintenance-and-operation/update.md) as well as the [command line tool Controller](../automation-and-integration/cli/index.md) are in English.

!!! info "Support new languages"

    i-doit can not be expanded with additional languages without getting into the source code. We would be pleased to hear from you if there are any efforts to translate i-doit into another language.

Automatic Language according to Browser Setting
-----------------------------------------------

When sending a request to a web server, web browsers usually also forward the preferred languages of the user. This information is analyzed by i-doit during login so that i-doit is represented to the user in the respective language automatically. You can influence this behaviour at **Administration → User settings → **Presentation** → Select language by browser**.

Change of Language
------------------

During working with i-doit it is possible for every user to switch to another language. You can change the language by selecting the corresponding flag of the country in the admin box in top right corner of the web GUI.

[![Change of Language](../assets/images/en/system-administration/localization/1-loc.png)](../assets/images/en/system-administration/localization/1-loc.png)

Language per User
-----------------

When the user logs in for the first time ([initial login](../basics/initial-login.md)) in i-doit, the English interface is displayed by default. Each user can set the language to be used as standard individually. This can be carried out under **Administration → User settings → Presentation → Language**. It is important to set the right value in order to receive, for example, [e-mail notifications](../evaluation/notifications.md) in the desired language since the e-mail templates are multilingual.

Language Constants
------------------

Texts to be translated are represented by so-called language constants within the source code and the databases. Example for the object type **Room**:

| Language constant | English | German |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

Only the language constant LC__CMDB__OBJTYPE__ROOM is in the source code/ in the databases. The user, however, receives the matching translation ("Room" or "Raum") in the web GUI of i-doit. Language constants can be identified by the fact that they only contain capital letters (A-Z), underscores (_) and in some cases numbers (0-9). They always begin with the LC__ prefix.

With a server call in the browser i-doit uses translation tables. These are located in the installation path of i-doit at src/lang. There is an abbreviation for each language, for example, de for German, en for English).

| File | Comment | Update safe? |
| --- | --- | --- |
| de_custom.example.inc.php | Example file for custom adjustments to the German language (is ignored for the web GUI) | no  |
| de_custom.inc.php | Custom adjustments to the German language (optional) | yes |
| de.inc.php | German language | no  |
| en_custom.inc.php | Custom adjustments to the English language (optional) | yes |
| en.inc.php | English language | no  |

Caution: The changes to the files src/lang/<Language>.inc.php are overwritten when [updating](../maintenance-and-operation/update.md) and should therefore not be adjusted. The corresponding custom files should be adjusted instead. All files contain PHP source code which can be adjusted easily. For each translation a new line is written following the same scheme:

    $g_langcache['LC__EXAMPLE'] = 'Example translation';

The language constant LC\_\_EXAMPLE becomes "Example translation".

The custom files are not only suitable for new translations but also for overwriting existing ones.

!!! success "Exclude languages"

    In order to provide users with just one language it can help to replace unnecessary language files. If you want to provide i-doit only in English, for example, you carry out the following actions in the command line:
    ```
    cd /var/www/html/i-doit # Change to the installation path of i-doit (adjust if needed)
    cd src/lang/ # Change to the folder containing the language files
    cp de.inc.php de.inc.php.bak # You never know ;-)
    cp en.inc.php de.inc.php # Replace german language with the english one
    # Optional, if adjustments have already been made:
    #cp de_custom.inc.php de_custom.inc.php.bak
    #cp en_custom.inc.php de_custom.inc.php
    ```
    Since this procedure is not update-safe, it should be repeated after each update.

Examples
--------

Generally, any text of the web GUI can be translated. If you want to find out which language constant is used, it may help to look for translations in the language constants in many cases.

### Multilingual Object Type Groups

The language constants are located in the row named isys_obj_type_group__title of the table called isys_obj_type_group in the tenant database. If a new [object-type group](../basics/structure-of-the-it-documentation.md) is created, the value can be converted to a language constant in the database. An existing object-type group should not be renamed in the database. Instead the respective language constant should be translated anew in the custom files.

### Multilingual Object Types

An [object type](../basics/structure-of-the-it-documentation.md) can be set as localized at **Administration → CMDB settings → Object type configuration → [Object type group] → Language constant / Title**. This applies both to standard object types as well as [custom object types](../basics/custom-object-types.md).

### Multilingual Object Titles

Localized [object titles](../basics/structure-of-the-it-documentation.md) are not possible. This would hinder [unambiguous referencing](../basics/unique-references.md).

### Multilingual Categories

If the concerned category is a standard [category,](../basics/structure-of-the-it-documentation.md) you can overwrite the language constant in the custom files.

In case of [custom categories](../basics/custom-categories.md), the category title is tied to a language constant which is translated in the custom files.

### Multilingual Attributes

The default [attributes](../basics/structure-of-the-it-documentation.md) are translated via the language files. The language constants are located in the source code and should therefore not be adjusted.

Attributes in [custom categories](../basics/custom-categories.md) can be translated with a language constant.