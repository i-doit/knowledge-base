---
title: Synchronize Contact Groups
description: "Checkmk notifies contact groups of every event when properly configured."
icon:
status:
lang: en
---
# Synchronize Contact Groups

Checkmk notifies contact groups of every event when properly configured. Within i-doit, each contact group can be documented as an object. To share contact groups between both, run:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-contact-groups
```

This command creates new objects in i-doit based on the contact groups from Checkmk. Additionally, objects in i-doit can be used to create new contact groups.

By default, contact groups are stored as "Person groups" in i-doit. You can simply add person objects to these groups and assign the groups to any other objects with the Contact assignment category and the Monitoring role.

**Recommendation:** Run this command every time you add a new contact group in Checkmk or i-doit.

## Configuration

The following [configuration settings](./konfiguration.md) are available:

| Key                      | Type    | Required | Default                     | Description                                                                 |
| ------------------------ | ------ | ------------ | ------------------------ | ---------------------------------------------------------------------------- |
| objectTypes.contactGroup | String | No         | C__OBJTYPE__PERSON_GROUP | Contact groups are identified by this type (use the constant!) |
