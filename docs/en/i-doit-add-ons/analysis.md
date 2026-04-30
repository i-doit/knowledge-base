---
title: Analysis
description: "The Analysis add-on offers you two key functions:"
icon:
status:
lang: en
---
# Analysis

The [add-on](index.md) **Analysis** offers you two key functions:

1. **Check data quality** -- Examine how completely your IT documentation is filled in and receive an interactive results view.
2. **Simulate outages** -- Run "what happens if" scenarios and analyze the impact on your infrastructure.

In combination with the interface to [Checkmk](../i-doit-add-ons/checkmk2/index.md), you can also investigate actual live outages directly.

## Download and installation

This add-on can be installed additionally. Details on download, installation, and updates can be found in the article "[i-doit Add-ons](./index.md)".

## Configuration

No separate configuration is required.

## Assigning rights

Under **Administration → Authorization system → Rights → Analysis**, [permissions for persons and person groups](../efficient-documentation/permission-management/index.md) can be adjusted.

| Condition | Description |
| --- | --- |
| **Analyses** | Perform analyses |
| **Manage data quality profiles** | Create, edit, and/or irrevocably delete profiles for **data quality** |

## Outage simulation

Would you like to find out what impact the failure of a specific object has on your documented services? Use the simulation under **Extras → Analysis → Outage simulation**. The following options are available via the **Manual object selection** tab:

| Option | Description |
| --- | --- |
| **Object selection** | Selection of one or more objects that have failed (or should be simulated as failed) |
| **Service filter** | Narrow the analysis to a specific depth, specific object types, relationships, etc.; the configuration is located under **Extras → Services → Service filter**. |
| **View** | Display the service tree in simplified form |
| **Display filter** | Subsequent filtering |

Click **Start simulation** to obtain the result. The result includes:

- A **list of affected services** -- depending on the service filter, also parent services in the hierarchy.
- Per service, an **outage severity**, displayed in color from green (minor) to red (severe). This is based on the weighting of the [object relationships](../basics/object-relationships.md).
- A **C** after the value indicates that the failed object is part of a cluster.

Under **Tree view**, the outage is visualized as a service tree.

[![Outage simulation](../assets/images/de/i-doit-add-ons/analysis/1-ans.png)](../assets/images/de/i-doit-add-ons/analysis/1-ans.png)

Via the **Report object selection** tab, you can alternatively select the objects based on a [report](../evaluation/report-manager.md).

## Live outages

Under **Extras → Analysis → Live outages**, i-doit accesses the interface to a configured [network monitoring](../automation-and-integration/network-monitoring/index.md) system (e.g., [Checkmk](../i-doit-add-ons/checkmk.md)). If a host actually fails, you can see directly what impact this outage has on your documented services.

## Data quality

Under **Extras → Analysis → Data quality**, you measure how completely your IT documentation is filled in. The benchmark: [Every assigned category](../basics/assigning-categories-to-object-types.md) of every object for each visible object type must be filled in -- that corresponds to 100 percent.

**Example:** You have 21 objects of the type **Client** with 20 assigned categories. Only when all categories are filled in for all 21 objects do you reach 100%. Every gap reduces the value.

Using the **Show detailed information** button, you can display details per object type. For gaps, you can generate a list of affected objects per category using the magnifying glass.

[![Data quality](../assets/images/de/i-doit-add-ons/analysis/2-ans.png)](../assets/images/de/i-doit-add-ons/analysis/2-ans.png)

Object types or categories that distort the result can be hidden. The result is then recalculated.

To save such adjustments as a profile:

1. Click **Save**.
2. Enter a meaningful title under **Name**.
3. Under **User-specific**, specify whether only you or all users may use the profile.

Saved profiles appear in the left navigation tree below **Data quality**.

[![Create data quality profile](../assets/images/de/i-doit-add-ons/analysis/3-ans.png)](../assets/images/de/i-doit-add-ons/analysis/3-ans.png)

## Object catalog

Under **Extras → Analysis → Object catalog**, you list all objects that belong to a service.

1. Under **Object selection**, select an object of the type **Service**.
2. Optionally narrow the analysis using the **Service filter**.
3. Select the desired [attributes](../basics/it-documentation-structure.md) from [global and specific categories](../basics/it-documentation-structure.md) -- similar to the [Report Manager](../evaluation/report-manager.md).
4. Click **Load object data** to generate the tabular result.

[![Object catalog](../assets/images/de/i-doit-add-ons/analysis/4-ans.png)](../assets/images/de/i-doit-add-ons/analysis/4-ans.png)

## Service costs

Under **Extras → Analysis → Service costs**, you calculate the costs of a service based on your IT documentation.

1. Under **Object selection**, select an object of the type **Service**.
2. Optionally narrow using the **Service filter**.
3. Click **Calculate service costs**.

The **Cost summary** shows the following values:

| Category | Description |
| --- | --- |
| **License costs** | See category **Software assignment** |
| **Investment costs** | See category **Accounting** |
| **Annual operating costs** | See category **Accounting** |
| **Contract costs** | See category **Contract assignment** |

Under **Further summaries**, you can find the maximum energy consumption of hardware objects (category **Power consumer**).

Below that is a pie chart of the costs and a detailed breakdown per category and analyzed object.

[![Service costs](../assets/images/de/i-doit-add-ons/analysis/5-ans.png)](../assets/images/de/i-doit-add-ons/analysis/5-ans.png)

## Analysis category

After activating the add-on, every object receives a category called **Analysis**. Via this category, you can go directly to the **Outage simulation** -- the respective object is already preselected.

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.5 | 27.02.20224 | [Task] PHP 8.2 compatibility, cleaned up color usage |
| 1.4 | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files |
| 1.3.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Service assignment is not displayed in data quality<br>[Bug] It is not possible to remove categories in data-quality profiles |
| 1.3 | 05.09.2022 | [Task] PHP 8.0 Compatibility <br/> [Task] Design Compatibility |
| 1.2 | 21.02.2022 | [Improvement] Dataquality on a report basis <br/> [Improvement] Implement API methods for the data quality report <br/> [Improvement] English add-on renaming to Analysis <br/> [Bug] Result In Objectcatalog Is Incomplete And Partially Incorrect |
| 1.1.4 | 20.10.2020 | [Bug] Missing option to add object types back into the data quality profiles after they were removed <br/> [Bug] Data quality is not evaluated correctly for user-defined categories |
| 1.1.3 | 04.05.2020 | [Bug] The "Report object selection" under "Failure simulation" must change the source for the reports. <br/> [Bug] Empty object types generate an SQL error in the data quality. <br/> [Bug] When opening data quality an SQL error is output |
| 1.1.2 | 05.07.2019 | [Bug] Impact simulation aborts with PHP fatal error |
| 1.1.1 | 05.12.2018 | [Improvement] PHP 7.2 compatibility <br/> [Improvement] Links in the outage simulation results should open in a new browser window <br/> [Bug] Object catalog: Attribute display is incorrect <br/> [Bug] Object "Persons" missing workstation assignment in detail view <br/> [Bug] No "Load object data" possible when no object was selected when clicking "Load object data" |
| 1.1 | 19.07.2018 | [Improvement] New visualization in data quality report [Change] Data quality does not display cable object type <br/> [Bug] "List objects without data" for custom categories leads to SQL error <br/> [Bug] Error when displaying detailed information in custom categories <br/> [Bug] Error message in new window after clicking object link in data quality |
| 1.0.5 | 31.07.2017 | [Improvement] Improve data quality performance <br/> [Improvement] New option for calculating total costs <br/> [Bug] Custom object icons are not scaled in data quality <br/> [Bug] Service costs use wrong currency symbol <br/> [Bug] Custom icons are displayed incorrectly. |
| 1.0.4 | 02.05.2017 | [Bug] Outage simulation timeout depending on database size |
| 1.0.3 | 08.03.2017 | [Change] Improved stability and performance in internal service tree evaluation <br/> [Bug] Calling service costs produces error <br/> [Bug] Custom categories are not evaluated <br/> [Bug] get_currency() error when executing the report view "Service costs" |
| 1.0.2 | 09.03.2015 |     |
| 1.0.1 | 23.09.2014 | [Bug] Changing the weight of a relationship has no effect on the "outage severity". <br/> [Bug] Category "Network connections" always shows a data quality of 0%. <br/> [Bug] Category "Racks" always shows a data quality of 0%. |
| 1.0 | 20.08.2014 | Initial release |
