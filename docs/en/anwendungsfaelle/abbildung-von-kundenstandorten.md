---
title: Mapping Customer Locations
description: A guide on how to represent customer locations in i-doit
lang: en
---

In this article you will learn how to hierarchically map customers with multiple locations in i-doit and assign IT components to them.

## Task

You equip your customers with hardware and software components and want to document both the customers and their IT components. The location view in i-doit provides a clear representation for this purpose.

[![Location view](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)

[![Object](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)

## Configuration

Here is how to set up the object type:

1. Open **Administration > Data Structure > Object Types**.
2. Create a new object type **Customer** and define it as a **Location**.
3. Assign at least the categories **Location** and **Locally assigned objects**.
4. Optionally add further categories such as **Organization**, **Address**, **Email Addresses**, **Contact Assignment**, or **Access**.

[![Object type configuration](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)

[![Object view](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)

## Usage

Here is how to create a customer:

1. Create a new customer object and assign it to the [Root Location](../glossar.md).
2. For nested structures, assign sub-customers spatially to other customers.
3. Assign any number of objects to the customer -- either via the **Locally assigned objects** category in the customer or via the **Location** category in the respective object.
