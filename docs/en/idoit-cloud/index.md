---
title: i-doit cloud
description: All information and services about your i-doit in the cloud. Secure, maintained, and performant.
icon: material/cloud
lang: en
---

# Welcome to the i-doit cloud

Discover the advantages of our managed i-doit cloud solution. We take care of the technology in the background so you can focus entirely on your IT documentation. Secure, performant, and always up to date.

---

## Scope of Services & Technical Details

Here you will find the key specifications of your i-doit cloud instance.

* **Instance size**: Designed for up to 50,000 objects.
* **Storage**: 1 GB of dedicated storage space.
* **Security**: Your data is stored encrypted.
* **Domain**: The name of your subdomain is freely selectable (e.g., `companyname.i-doit.cloud`).
* **Provisioning**: Provisioning takes approximately 15 minutes.
* **Backup**: Automated and frequent backups.
* **Add-on compatibility**: The majority of [i-doit add-ons](https://www.i-doit.com/i-doit/add-ons/){:target="_blank"} are compatible.
* **Server location**: All our servers are located in Germany and are ISO 27000 certified.

!!! warning "No shell access"
    For security and stability reasons, direct SSH or file system access to the servers is not possible.

---

## Support & Service Hours

Our expert team is available to assist you with all matters related to your cloud instance.

* **Service hours**: Monday to Friday from 10:00 to 16:00 (excluding nationwide public holidays).
* **Contact**:
    * **Email**: <a href="mailto:help@i-doit.com">help@i-doit.com</a>
    * **Help Center**: <a href="https://help.i-doit.com" target="_blank">help.i-doit.com</a>

<a href="https://help.i-doit.com" target="_blank" class="md-button md-button--primary">Create a support ticket</a>

**The following services are included in the support:**

* Applying your license
* installation and updates of compatible add-ons
* Adjustment of server-side system settings
* Restoring backups on request
* Performing i-doit software updates
* Recording and forwarding bug reports
* Recording feature improvement requests

---

## Migration: Moving to the Cloud

We actively support you in migrating your existing on-premise installation to the i-doit cloud.

**Migration process:**

1.  **Schedule an appointment**: We arrange an initial meeting to review the prerequisites for the migration.
2.  **Preparation**: Once all prerequisites are met, we prepare your personal cloud instance.
3.  **Data export**: In a second joint session, we export the data from your current system.
4.  **Data import**: We then securely migrate your data to the prepared cloud instance.

---

## Backup & Recovery

We automatically and regularly create backups for every cloud instance.

**Backup schedule:**

-   **Hourly**: Every 3 hours (the last 8 backups are retained)
-   **Daily**: Once daily (the last 7 backups are retained)
-   **Weekly**: Once per week (the last 4 backups are retained)
-   **Monthly**: Once per month (the last 12 backups are retained)
-   **Yearly**: Once per year (the last 10 backups are retained)
-   **Event-based**: Before every system update (the last 10 backups are retained)

!!! info "Request a backup restore"
    You can request a restore to a previous point in time at any time via our [Help Center](https://help.i-doit.com){:target="_blank"} or by [email](mailto:help@i-doit.com).

---

## Network Connectivity and Interfaces

To securely connect external systems such as LDAP, JDisc, or custom APIs to your i-doit cloud instance, you may need to adjust your firewall. Here you will find all the necessary technical information.

### VPN Connectivity (OpenVPN)

For a dedicated and secure connection between your network and your cloud instance, we offer connectivity via OpenVPN.

!!! warning "Beta phase / initial deployment"

    The OpenVPN connectivity uses user and certificate authentication. This feature has been successfully tested internally but is not yet in productive use with customers.

    If you would like to use this option, please define your requirements and contact our [support](#support-service-hours) to start the setup process together.

### Static IP Addresses for Firewall Rules

Your i-doit cloud instance is accessible via static IP addresses (ingress) and also communicates from static IP addresses with your systems (egress).

#### Ingress: External Access to Your Instance

If you restrict access to `*.i-doit.cloud` in your network, please allow the following IP addresses for incoming connections:

* **IPv4:**
    * `159.69.103.121`
    * `78.46.236.49`
* **IPv6:**
    * `2a01:4f8:c01f:289a::`
    * `2a01:4f8:1c17:a07c::`

#### Egress: Outbound Connections from i-doit to You

To allow your cloud instance to reach your local systems (e.g., APIs, LDAP, JDisc), please allow the applicable IP addresses in your firewall for outbound connections:

* **For `i-doit eval` instances:**
    * **IPv4:**
        * `88.99.122.103`
        * `138.199.151.161`
    * **IPv6:**
        * `2a01:4f8:c17:2702::1`
        * `2a01:4f8:c013:9e17::1`

* **For `i-doit pro` instances (e.g., for JDisc, VPN):**
    * **IPv4:**
        * `138.199.151.160`
    * **IPv6:**
        * `2a01:4f8:c013:9e16::1`

!!! note "Validity of the information"

    All IP addresses listed here refer to our production environment (`production stage`), on which all customer instances are operated.

---

## Software Updates

We keep your instance up to date. Updates to a new i-doit version are typically performed **within 7 days** of the official release. During the update, your instance is briefly put into maintenance mode.

You can view the current status here: [i-doit cloud status](https://status.docupike.com/affected/i-doit/){:target="_blank"}

---

## Differences from the On-Premise Version

The cloud version offers the same feature set as the on-premise variant -- with some differences in administration and access:

| Feature | On-Premise | Cloud |
|---------|-----------|-------|
| Hosting | Own server | Operated by i-doit |
| Updates | Self-managed | By i-doit (within 7 days of release) |
| Backup | Self-managed | Automatic (hourly to yearly) |
| Admin Center | Full access | Not available |
| Add-on installation | Manually via ZIP or Subscription Center | Not possible -- included in the package |
| Server access (SSH) | Yes | No |
| Console commands (CLI) | Yes | No -- use [Flows Lite](#automation-with-flows-lite) instead |
| Custom PHP modifications | Possible | Not possible |
| SSO (SAML, Azure AD) | Configurable via Apache | Not yet available (planned) |
| Tenants | Multiple possible | One per instance |
| API access | Yes | Yes (note firewall configuration) |

### Add-ons in the Cloud

Add-ons cannot be installed independently in the cloud. The available add-ons depend on the booked package -- the add-ons included in the contract are pre-installed on your instance.

The majority of [i-doit add-ons](../i-doit-add-ons/index.md) are compatible with the cloud. For questions about available add-ons or package extensions, contact the sales team at [sales@i-doit.com](mailto:sales@i-doit.com).

---

## Automation with Flows Lite

In the on-premise version, you set up recurring tasks via [cronjobs](../wartung-und-betrieb/cronjobs-einrichten.md) and `console.php`. In the cloud, there is no shell access -- instead, **Flows Lite** is available.

Flows Lite is a limited version of the [Flows add-on](../i-doit-add-ons/flows/index.md) that works without a separate license and enables scheduled execution of console commands.

### Flows Lite vs. Flows (Full Version)

| Feature | Flows Lite | Flows (Full Version) |
|---------|-----------|-------------------|
| Time-based triggers | Yes | Yes |
| Button triggers | No | Yes |
| API calls | No | Yes |
| Send email | No | Yes |
| Create/modify objects | No | Yes |
| Conditions (AND/OR) | No | Yes |

### Available Console Commands in Flows Lite

The following commands can be executed on a schedule via Flows Lite:

| Command | Description |
|---------|-------------|
| `ldap-sync` / `ldap-syncdn` | [LDAP synchronization](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) |
| `import-jdisc` | [JDisc import](../daten-konsolidieren/jdisc/index.md) |
| `import-csv` / `import-xml` | [CSV](../daten-konsolidieren/csv-datenimport/index.md) and XML import |
| `notifications-send` | Send [notifications](../auswertungen/benachrichtigungen.md) |
| `search-index` | Update search index |
| `report-export` | Export reports |
| `extend-contracts` | Automatically extend contract terms |
| `sync-dynamic-groups` | Synchronize dynamic groups |

Flows Lite thus replaces the manual [cronjob configuration](../wartung-und-betrieb/cronjobs-einrichten.md) that is done via the server console in on-premise installations.

---

## FAQ - Frequently Asked Questions

???+ question "**Can I use the i-doit interfaces (e.g., for LDAP, JDisc)?**"

    Yes, the API interfaces of your i-doit cloud instance are accessible from outside. You only need to ensure that communication from the cloud instance to your local system (e.g., through your firewall) is possible. Self-signed certificates for TLS connections can be configured in the interface settings.

???+ question "**Can I migrate my data from the cloud back to an on-premise setup?**"

    Yes, exporting your data from the cloud is possible at any time. The data can be seamlessly migrated to another i-doit installation.

???+ question "**Is Single Sign-On (SSO), e.g., with Azure AD, possible?**"

    SSO is not yet supported. However, the implementation of this feature is planned for the future.

???+ question "**Are multiple tenants possible in one instance?**"

    Currently, only one tenant per instance is possible. However, you can book additional separate instances at any time if needed.

???+ question "**Can I set up cronjobs?**"

    No, there is no shell access in the cloud. Instead, you use [Flows Lite](#automation-with-flows-lite) for scheduled tasks such as LDAP sync, JDisc import, or search index updates.

???+ question "**Can I install add-ons myself?**"

    No, add-ons are provided by the i-doit team. The add-ons included in the contract are pre-installed on your instance. For additional add-ons, contact [sales@i-doit.com](mailto:sales@i-doit.com).

???+ question "**How can I switch from on-premise to the cloud (and vice versa)?**"

    Switching is possible in both directions. A complete data export is available at any time. Contact our [support](#support-service-hours) to start the migration process. Details: [Migration](#migration-moving-to-the-cloud)
