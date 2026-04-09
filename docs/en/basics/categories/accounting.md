---
title: "Category: Accounting"
description: Documentation of the Accounting category in i-doit
icon:
status:
lang: en
---

# Category: Accounting

The **Accounting** category captures all commercial information for an object -- from inventory numbers and acquisition costs to warranty periods. It is a **single-value category**: each object receives exactly one accounting record that bundles all financial and procurement-related data.

!!! tip "Remaining warranty at a glance"
    i-doit automatically calculates the expiration date and the **remaining warranty** from the warranty period and warranty start date. This calculated value can be displayed as a column in object lists and reports. A report like "Warranty expired" or "Warranty expires in 90 days" provides the basis for timely hardware refresh planning -- before expensive repairs without manufacturer warranty arise.

## Usage

Typical use cases:

- **Inventory and asset accounting**: Assign an inventory number to each asset and link it to a cost center. This creates a seamless connection between IT documentation and financial accounting -- auditors and controllers receive a complete asset list at the push of a button. Invoice and order numbers link the physical asset to the financial system and create a traceable chain for auditors.
- **Procurement documentation**: Record order number, order date, delivery note number, and invoice number without gaps. In case of complaints or warranty claims, it is immediately traceable when and where a device was ordered, delivered, and paid for. The procurement method (purchase, lease, or rental) not only affects the balance sheet treatment but also the end-of-life processes: purchased hardware is disposed of or resold, leased hardware must be returned on schedule -- the [Contract assignment](contract-assignment.md) supplements the details of the leasing contract.
- **Cost analysis and budget planning**: Using the Report Manager, you can evaluate acquisition costs by cost center, procurement method, or time period. Together with ongoing operating costs, a realistic picture of the Total Cost of Ownership (TCO) per asset or location emerges. A typical report: "All assets with procurement method Lease whose contract end falls within the next 6 months" -- the basis for budget planning in the following year.
- **Warranty management**: Define the warranty period and start date -- i-doit automatically calculates the warranty end and displays the remaining warranty. This allows you to identify early which devices are falling out of warranty and when maintenance contracts need to take effect. Extended warranties through service contracts belong in the [Contract assignment](contract-assignment.md) category -- the Accounting category covers only the manufacturer warranty.
- **Supplier management**: Link each object with the supplier as a person or organization object. Reports on this category then show, for example, all assets from a specific supplier -- helpful during framework contract negotiations or recall actions.
- **Planning hardware refresh**: A report combining warranty expiration, acquisition date, and procurement method provides a prioritized list for the next hardware refresh cycle. Devices with expired warranty and high age appear at the top -- this saves ad-hoc research and avoids budget surprises.

[![Accounting](../../assets/images/de/grundlagen/kategorien/accounting.png)](../../assets/images/de/grundlagen/kategorien/accounting.png)

## Fields

### Inventory number

The unique identifier of the asset in the fixed asset accounting, e.g. `INV-2024-00451` or `HW-FRA-003287`. In most organizations, this number is assigned by the finance department and attached to the device as a barcode or QR label. The inventory number is often the most important bridge between i-doit and the ERP system -- therefore keep it consistent and unique.

### Cost center / Account

The cost center or booking account to which the asset is assigned, e.g. `4711 - IT Infrastructure` or `CC-Marketing`. As a Dialog+ field, custom values can be added that are then available for selection across all objects. This assignment makes it possible to allocate IT expenses to departments or projects on a cause-based basis.

### Cost unit

The cost unit defines which product, project, or order the costs are attributed to -- in contrast to the cost center, which describes the location where costs arise. Dialog+ field with freely extensible values, e.g. `Project Migration 2025` or `Product Cloud Platform`.

---

### Order and delivery

#### Procurement method

Indicates how the asset was procured: **Purchase**, **Lease**, or **Rental**. This information is decisive for balance sheet treatment -- purchased assets are depreciated, leased ones may not be capitalized. For leased and rented devices, it is advisable to additionally note the contract duration in the description.

#### Order number

The internal or external order number, e.g. `PO-2024-08-1234`. This field allows the procurement process to be uniquely traced in the purchasing system. Especially with bulk orders containing multiple items, the order number is the central linking element.

#### Order date

The date on which the order was placed. Together with the delivery date and invoice date, a complete timeline of the procurement process emerges. In case of complaints or escalations with the supplier, the order date is often the decisive reference point.

#### Supplier

The supplier or source of the asset -- linked via the object browser to a person or organization object in i-doit. Through the link, the supplier's contact details, address, and contract information are directly available in the context of the asset. Maintain the supplier as a separate object to enable evaluations such as "all devices from supplier X".

#### Delivery note number

The delivery note number, e.g. `DN-2024-56789`. Relevant for goods receipt and verification that all ordered items were delivered in full. In case of deviating deliveries or partial deliveries, this field documents the assignment to the specific shipment.

#### Delivery date

The date on which the asset actually arrived. Important for calculating warranty periods when the warranty start is set to the delivery date (see field "Warranty start"). Also for SLA evaluations with suppliers, the delivery date is the relevant metric.

---

### Costs

#### Acquisition costs

The net or gross price of the asset at the time of purchase. Currency field -- i-doit uses the system-wide configured currency. Enter the actual purchase price here, not the list price. For bulk orders, specify the proportional price per device. This value is the basis for depreciation calculations and TCO analyses.

#### Ongoing operating costs and interval

The recurring costs for operation, maintenance, or licensing of the asset. The interval (monthly, annually, etc.) is selected separately in the associated dialog field. Example: `120.00 EUR` per `year` for a maintenance contract. In combination with the acquisition costs, the total costs of an asset over its lifetime can be calculated via reports.

#### Invoice date

The date of the invoice, e.g. `2024-08-15`. Often used as a reference point for payment terms and warranty start. In many organizations, the invoice date serves as the official activation date in fixed asset accounting.

#### Invoice number

The supplier's invoice number, e.g. `INV-2024-003456`. Enables unique assignment to the invoice in the accounting system and is an indispensable proof for tax audits or warranty claims.

---

### Warranty

#### Warranty period and unit

The duration of the manufacturer warranty as an integer with the associated unit (months or years). Example: `36` months or `3` years. i-doit automatically calculates the expiration date and remaining warranty from the warranty period and warranty start. Enter the standard manufacturer warranty here -- extended warranties through service contracts belong in the Contract assignment category.

#### Warranty start

Determines from which date the warranty runs: **from invoice date** or **from delivery date**. The choice depends on the manufacturer's warranty terms -- many manufacturers calculate from the invoice date, some from the delivery date. The correct start date is crucial for the accurate calculation of the warranty end.

---

### Description

Free text field for supplementary information that does not fit in any of the structured fields: notes on special conditions, leasing contract numbers, internal depreciation notes, or comments on the procurement process. Use this field sparingly -- structured data belongs in the designated fields so that it remains evaluable in reports.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__ACCOUNTING` |
| **Type** | Global category |
| **Multi-value** | No |
| **Assigned to** | All object types (global) |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Inventory number** | `inventory_no` | Text |
| **Cost center / Account** | `account` | Dialog+ (extensible selection) |
| **Invoice date** | `acquirementdate` | Date |
| **Supplier** | `contact` | Object browser (link) |
| **Acquisition costs** | `price` | Currency |
| **Ongoing operating costs** | `operation_expense` | Currency |
| **Operating costs interval** | `operation_expense_interval` | Dialog (selection) |
| **Cost unit** | `cost_unit` | Dialog+ (extensible selection) |
| **Delivery note number** | `delivery_note_no` | Text |
| **Procurement method** | `procurement` | Dialog+ (extensible selection) |
| **Delivery date** | `delivery_date` | Date |
| **Invoice number** | `invoice_no` | Text |
| **Order number** | `order_no` | Text |
| **Order date** | `order_date` | Date |
| **Warranty period** | `guarantee_period` | Integer |
| **Warranty period unit** | `guarantee_period_unit` | Dialog (selection) |
| **Warranty start** | `guarantee_period_base` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATG__ACCOUNTING",
        "data": {
            "inventory_no": "INV-2024-00451",
            "account": "4711 – IT-Infrastruktur",
            "acquirementdate": "2024-08-15",
            "contact": 456,
            "price": 2499.00,
            "operation_expense": 120.00,
            "operation_expense_interval": 2,
            "cost_unit": "Projekt Migration 2025",
            "procurement": "Kauf",
            "order_no": "PO-2024-08-1234",
            "order_date": "2024-08-01",
            "delivery_date": "2024-08-12",
            "delivery_note_no": "LS-2024-56789",
            "invoice_no": "RE-2024-003456",
            "guarantee_period": 36,
            "guarantee_period_unit": 1,
            "guarantee_period_base": 1,
            "description": "default warranty 36 months from invoice date."
        }
    },
    "id": 1
}
```

#### Read entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATG__ACCOUNTING"
    },
    "id": 2
}
```

#### Update entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATG__ACCOUNTING",
        "entry": 1,
        "data": {
            "price": 2299.00,
            "description": "Price corrected after credit note from 2024-09-01."
        }
    },
    "id": 3
}
```
