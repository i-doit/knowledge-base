---
title: i-doit cloud
description: All information and services for your i-doit in the cloud. Secure, maintained, and performant.
icon: material/cloud
lang: en
---

# Welcome to the i-doit cloud

Discover the advantages of our managed i-doit cloud solution. We handle the technology in the background, so you can fully concentrate on your IT documentation. Secure, performant, and always up-to-date.

---

## Scope of Services & Technical Details

Here you'll find the most important key data for your i-doit cloud instance.

* **Instance Size**: Designed for up to 50,000 objects.
* **Storage Space**: 1 GB of dedicated data storage.
* **Security**: Includes SSL encryption via a `*.i-doit.cloud` subdomain.
* **Domain**: The name of your subdomain can be freely chosen (e.g., `your-company-name.i-doit.cloud`).
* **Tenancy**: Each cloud instance is designed for a single tenant.
* **Provisioning**: Your instance will be ready within 24 hours (on workdays, Mon-Fri).
* **Add-on Compatibility**: A majority of [i-doit add-ons](https://www.i-doit.com/en/i-doit/add-ons/){:target="_blank"} are compatible.
* **Server Location**: All our servers are located in Germany and operate in compliance with GDPR.

!!! warning "No Shell Access"
    For security and stability reasons, direct SSH or file system access to the servers is not possible.

---

## Support & Service Hours

Our team of experts is available to assist you with any matters concerning your cloud instance.

* **Service Hours**: Monday to Friday from 10:00 AM to 4:00 PM (CET/CEST), excluding German nationwide public holidays.
* **How to reach us**:
    * **Email**: <a href="mailto:help@i-doit.com">help@i-doit.com</a>
    * **Help Center**: <a href="https://help.i-doit.com" target="_blank">help.i-doit.com</a>

<a href="https://help.i-doit.com" target="_blank" class="md-button md-button--primary">Create Support Ticket</a>

**These services are included in your support package:**

* Applying your license
* Installation and updates of compatible add-ons
* Adjustment of server-side system settings
* Restoring backups upon request
* Performing i-doit software updates
* Handling and forwarding bug reports
* Handling and forwarding feature requests

---

## Migration: Moving to the Cloud

We actively support you in migrating your existing on-premise installation to the i-doit cloud.

!!! info "Free Migration Service"
    We currently offer the complete migration of your existing data (database and files) from on-premise to the cloud as a free service.

**The Migration Process:**

1.  **Scheduling an Appointment**: We'll schedule an initial meeting to check the prerequisites for the migration.
2.  **Preparation**: If all prerequisites are met, we will prepare your personal cloud instance.
3.  **Data Export**: In a second joint meeting, we will export the data from your current system.
4.  **Data Import**: Afterward, we will securely migrate your data into the prepared cloud instance.

---

## Backup & Recovery

We automatically and regularly create backups for every cloud instance.

**Backup Schedule:**

-   **Hourly**: Every 3 hours (the last 8 backups are kept)
-   **Daily**: Once a day (the last 7 backups are kept)
-   **Weekly**: Once a week (the last 4 backups are kept)
-   **Monthly**: Once a month (the last 12 backups are kept)
-   **Yearly**: Once a year (the last 10 backups are kept)
-   **Event-based**: Before every system update (the last 10 backups are kept)

!!! info "Requesting a Backup Restore"
    You can request a restore to an earlier point in time at any time via our [Help Center](https://help.i-doit.com){:target="_blank"} or by [email](mailto:help@i-doit.com).

---

## Network Connectivity and Interfaces

To securely connect external systems like LDAP, JDisc, or your own APIs with your i-doit cloud instance, you may need to adjust your firewall. Here you will find all the necessary technical information.

### VPN Connection (OpenVPN)

For a dedicated and secure connection between your network and your cloud instance, we offer connectivity via OpenVPN.

!!! warning "Beta Phase / Early Access"

    The connection via OpenVPN uses user and certificate authentication. This feature has been successfully tested internally but is not yet in productive use with customers.

    If you wish to use this option, please define your requirements and contact our [Support](#support-service-hours) to start the setup process together.

### Static IP Addresses for Firewall Rules

Your i-doit cloud instance is reachable at static IP addresses (Ingress) and also communicates from static IP addresses with your systems (Egress).

#### Ingress: Reachability of Your Instance from the Outside

If you restrict access to `*.i-doit.cloud` in your network, please allow the following IP addresses for incoming connections:

* **IPv4:**
    * `159.69.103.121`
    * `78.46.236.49`
* **IPv6:**
    * `2a01:4f8:c01f:289a::`
    * `2a01:4f8:1c17:a07c::`

#### Egress: Outgoing Connections from i-doit to You

To allow your cloud instance to reach your local systems (e.g., APIs, LDAP, JDisc), please allow the relevant IP addresses in your firewall for outgoing connections:

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

!!! note "Validity of Information"

    All IP addresses mentioned here refer to our production environment (`production stage`), where all customer instances are operated.

---

## Software Updates

We keep your instance up-to-date. Updates to a new i-doit version are typically performed **within 7 days** of the official release. During the update, your instance will be temporarily placed in maintenance mode.

You can check the current status here: [i-doit cloud status](https://status.docupike.com/affected/i-doit/){:target="_blank"}

---

## FAQ - Frequently Asked Questions

???+ question "**Can I use the i-doit interfaces (e.g., for LDAP, JDisc)?**"

    Yes, the API interfaces of your i-doit cloud instance are accessible from the internet. You just need to ensure that communication from the cloud instance to your local system is possible (e.g., through your firewall). Self-signed certificates for TLS connections can be configured in the respective interface settings.

???+ question "**Can I migrate my data from the cloud back to an on-premise version?**"

    Yes, exporting your data from the cloud is possible at any time. It can be easily migrated to another i-doit installation.

???+ question "**Is Single Sign-On (SSO), e.g., with Azure AD, possible?**"

    Currently, SSO is not yet supported. However, the implementation of this feature is planned for the future.

???+ question "**Are multiple tenants possible in one instance?**"

    Currently, only one tenant is possible per instance. However, you can book additional, separate instances at any time if needed.
