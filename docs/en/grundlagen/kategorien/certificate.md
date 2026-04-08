---
title: "Category: Certificate"
description: Documentation of the Certificate category in i-doit
icon:
status:
lang: en
---

# Category: Certificate

The **Certificate** category documents digital certificates assigned to an object. It is a **multi-value category** -- multiple certificates can be recorded per object, e.g. an SSL/TLS certificate for HTTPS and a separate certificate for the API interface.

!!! warning "Keep expiration dates in view"
    Expired certificates are among the most common causes of unplanned outages: websites show security warnings, API connections fail, VPN tunnels break down. The Certificate category makes it possible to systematically record expiration dates and warn in time via the Report Manager or the notification function -- before an emergency occurs.

## Usage

Typical use cases:

- **Managing SSL/TLS certificates**: Record the TLS certificates used for each web server, load balancer, or reverse proxy with common name, type, and expiration date. A report on all certificates expiring within the next 30 days is the simplest early warning system against certificate outages.
- **Code signing certificates**: Document certificates used for signing software, scripts, or drivers. The expiration of such a certificate can cause installations or updates to fail.
- **Client certificates and machine authentication**: In environments with 802.1X or certificate-based VPN authentication, it must be documented which device uses which certificate. This category provides that assignment.
- **Certificate lifecycle**: Track from creation date to expiration date when a certificate needs to be renewed. When replacing, archive the old entry and create a new one -- the change history then seamlessly shows which certificates were in use over time.

!!! tip "Set up notifications for expiration"
    Under **Extras > Notifications**, you can set up a notification that automatically sends an email when a certificate expires in X days. In combination with a report that lists all certificates with expiration dates, you have a two-stage safety net against forgotten renewals.

[![Certificate](../../assets/images/de/grundlagen/kategorien/certificate.png)](../../assets/images/de/grundlagen/kategorien/certificate.png)

## Fields

### Type

The type of certificate, e.g. `SSL/TLS`, `Code Signing`, `S/MIME`, or `Client`. Since it is a Dialog+ field, you can add custom types -- such as `Wildcard`, `EV (Extended Validation)`, or `Let's Encrypt`. Consistent naming greatly facilitates filtering in reports.

### Creation date

The date on which the certificate was issued. Together with the expiration date, the validity period results. Typical durations are 1 year (Let's Encrypt: 90 days). An unusually old creation date can be an indication that a certificate should have been renewed long ago.

### Expiration date

The most critical field in this category: the day on which the certificate becomes invalid. This date is the basis for reports and notifications. A report with the condition `Expiration date < today + 30 days` shows all certificates that need to be renewed soon. Without a maintained expiration date, the entire certificate management in the CMDB is worthless.

### Common Name

The Common Name (CN) of the certificate -- for TLS certificates, typically the hostname or domain, e.g. `*.example.com` or `api.example.com`. For wildcard certificates, the wildcard domain appears here. The Common Name is the most important identifier for assigning a certificate to a specific service.

### Description

Free text for supplementary details: issuing CA (e.g. DigiCert, Let's Encrypt), Subject Alternative Names (SANs), key algorithm used (RSA 2048, ECDSA P-256), private key storage location, responsible administrator, or notes on automatic renewal (e.g. via Certbot).

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__CERTIFICATE` |
| **Type** | Global category |
| **Multi-value** | Yes |
| **Assigned to** | Application, Database schema, License, Operating system, Service, etc. |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Type** | `type` | Dialog+ (extensible selection) |
| **Creation date** | `create_date` | Date |
| **Expiration date** | `expire_date` | Date |
| **Common Name** | `common_name` | Text field (multi-line) |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__CERTIFICATE",
        "data": {
            "type": "SSL/TLS",
            "create_date": "2026-01-15",
            "expire_date": "2027-01-15",
            "common_name": "*.example.com",
            "description": "Wildcard certificate, DigiCert, RSA 2048 bit, SANs: example.com, *.example.com"
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
        "object": 1042,
        "category": "C__CATG__CERTIFICATE"
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
        "object": 1042,
        "category": "C__CATG__CERTIFICATE",
        "entry": 12,
        "data": {
            "expire_date": "2027-04-15",
            "description": "Renewal 2026-04: new certificate from DigiCert, duration 12 months, old CN retained"
        }
    },
    "id": 3
}
```
