---
title: "Object Type: Cloud Storage"
description: Documentation of the Cloud Storage object type in i-doit
icon:
status:
lang: en
---

# Object Type: Cloud Storage

The **Cloud Storage** object type documents storage resources in a public cloud, for example AWS S3 buckets, Azure Blob Storage containers or Google Cloud Storage buckets. Provider, account, region and state are recorded in the [Cloud](../categories/cloud.md) category.

!!! info "New in i-doit 39"
    The Cloud Storage object type is available as of i-doit 39. It is located in the object type group **Infrastructure**.

## Usage

- **Bucket inventory**: Document all storage buckets with provider, account and region in one place.
- **Data location**: Use the Region ID and Region name fields to show in which region data is stored, for example for data protection reviews.
- **Responsibilities and costs**: Assign contacts via [Contact assignment](../categories/contact.md) and record cost data in [Accounting](../categories/accounting.md).
- **Lifecycle**: Use the State field together with the CMDB status and [Status Planning](../categories/planning.md) to document when a bucket is to be created or retired.

[![Cloud Storage](../../assets/images/en/basics/object-types/cloud-storage.png)](../../assets/images/en/basics/object-types/cloud-storage.png)

## Assigned Categories

### Global Categories

- [General](../categories/global.md)
- [Accounting](../categories/accounting.md)
- [Cloud](../categories/cloud.md)
- [Contact assignment](../categories/contact.md)
- [Host Address](../categories/ip.md)
- [Location](../categories/location.md)
- [Logbook](../categories/logbook.md)
- [Relation](../categories/relation.md)
- [Version Number](../categories/version.md)
- [Status Planning](../categories/planning.md)
- Overview page
- Access permissions

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLOUD_STORAGE` |
| **Group** | Infrastructure |
