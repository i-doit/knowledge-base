# Sync contact groups

Checkmk notifies contact groups on every event if properly configured. Within i-doit each contact group can be documented as an object. To share contact groups between both run:

```shell
idoitcmk sync-contact-groups
```

This command will generate new objects in i-doit based on Checkmk's contact groups. Additionally, objects in i-doit can be used to generate new contact groups.

By default, contact groups are stored as person groups in i-doit. You can simply add person objects to those groups and assign the groups to any other objects with the category contact assignment and the role monitoring.

**Recommendation:** Run this command every time you add a new contact group in Checkmk or i-doit.

## Configuration

These [configuration settings](./configuration.md) are available:

| Key                      | Type   | Required | Default                  | Description                                            |
| ------------------------ | ------ | -------- | ------------------------ | ------------------------------------------------------ |
| objectTypes.contactGroup | String | No       | C__OBJTYPE__PERSON_GROUP | Contact groups are marked by this type (use constant!) |
