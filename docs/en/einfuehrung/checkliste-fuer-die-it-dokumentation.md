---
title: "IT Documentation Checklist"
description: "This checklist guides you step by step from planning to productive use of your IT documentation with i-doit."
icon:
status:
lang: en
---
# IT Documentation Checklist

This checklist guides you step by step from planning to productive use of your IT documentation with i-doit. Work through the items in order — this way you won't miss anything important.

## 1. Organizational Preparation

- [ ] Clarify requirements: What should be documented and what benefit should it provide?
- [ ] Define the documentation team: Who manages and maintains the IT documentation?
- [ ] Involve departments: Who should work with the documentation?
- [ ] Review existing documentation: Are there Excel lists, wiki pages, or other tools to be replaced?
- [ ] Identify third-party applications: Which systems should be connected (monitoring, ticketing, LDAP)?
- [ ] Set milestones: When should what be achieved?

## 2. Getting to Know i-doit

- [ ] [Request a trial license](https://www.i-doit.com/i-doit-testen/) and evaluate i-doit
- [ ] Read the [Basics](../grundlagen/index.md) in the Knowledge Base
- [ ] Procure i-doit: Purchase an object package and support contract

## 3. Setting Up i-doit

- [ ] Prepare the server: Check [system requirements](../installation/systemvoraussetzungen.md)
- [ ] [Install i-doit](../installation/index.md)
- [ ] Apply the license in the [Admin Center](../administration/admin-center.md)
- [ ] [Set up cronjobs](../automatisierung-und-integration/cli/index.md) (search, notifications, workflows)
- [ ] [Set up and test backup and recovery](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
- [ ] Set up a test system (optional, recommended for larger environments)

## 4. Configuring i-doit

- [ ] [Create users and groups](../benutzerauthentifizierung-und-verwaltung/index.md), optionally [connect LDAP](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)
- [ ] Change default passwords (admin, reader, editor, author)
- [ ] Activate relevant [object types](../grundlagen/objekttyp-konfiguration.md), deactivate unneeded ones
- [ ] [Assign categories to object types](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)
- [ ] If needed, create [custom object types](../grundlagen/benutzerdefinede-objekttypen.md) and [categories](../grundlagen/benutzerdefinede-kategorien.md)
- [ ] Pre-configure [object lists](../grundlagen/objekt-liste/index.md) for the teams
- [ ] Set up the [dashboard](../grundlagen/dashboard-und-widgets.md)
- [ ] Integrate and test third-party applications ([JDisc](../daten-konsolidieren/jdisc/index.md), [Monitoring](../automatisierung-und-integration/network-monitoring/index.md), [Service Desk](../automatisierung-und-integration/service-desk/index.md))

## 5. Populating Data

- [ ] Import existing data: [CSV import](../daten-konsolidieren/csv-datenimport/index.md) for Excel lists
- [ ] Set up automatic inventory: [JDisc Discovery](../daten-konsolidieren/jdisc/index.md)
- [ ] Complete manual follow-up tasks: Assign locations, maintain relationships
- [ ] Check data quality: Are all important objects captured?

## 6. Going into Production

- [ ] Integrate IT documentation into daily work processes
- [ ] Train all users
- [ ] Configure [permissions management](../effizientes-dokumentieren/rechteverwaltung/index.md): Who is allowed to view and edit what?
- [ ] Schedule regular reviews: Is the documentation up to date?
- [ ] Establish a process for new requirements

---

Have additions or need support? Contact us at [help@i-doit.com](mailto:help@i-doit.com) or join the discussion in the [Community Forum](https://community.i-doit.com/).
