---
title: idoit
description: idoit
icon: material/api
status: new
lang: en
---

# idoit

This namespace is reserved for common methods.

!!! example "Work in Progress"

## idoit.addons

Displays a list of installed add-ons

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "idoit.addons",
      "params": {
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "result": [
          {
            "title": "Api",
            "key": "api",
            "version": "1.14.1",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          },
          {
            "title": "PRO",
            "key": "pro",
            "version": "25",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          }
        ]
      }
    }
    ```

## idoit.constants

Fetch defined constants from i-doit.

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

### Response

JSON key **result** contains a JSON object.

| Key              | JSON data type | Description                                                                                           |
| ---------------- | -------------- | ----------------------------------------------------------------------------------------------------- |
| **objectTypes**  | Object         | List of object types<br><br>Keys: object type constants<br><br>Values: translated object type titles  |
| **categories**   | Object         | List of global and specific categories                                                                |
| **categories.g** | Object         | List of global categories<br><br>Keys: category constants<br><br>Values: translated category titles   |
| **categories.s** | Object         | List of specific categories<br><br>Keys: category constants<br><br>Values: translated category titles |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "idoit.constants",
      "params": {
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "objectTypes": {
          "C__OBJTYPE__SERVICE": "System Service",
          "C__OBJTYPE__APPLICATION": "Application",
          "C__OBJTYPE__BUILDING": "Building",
          "C__OBJTYPE__ENCLOSURE": "Rack",
          "C__OBJTYPE__SERVER": "Server",
          "C__OBJTYPE__SWITCH": "Switch",
          "C__OBJTYPE__ROUTER": "Router",
          "C__OBJTYPE__FC_SWITCH": "Fc Switch",
          "C__OBJTYPE__SAN": "Storage System",
          "C__OBJTYPE__CLIENT": "Client",
          "C__OBJTYPE__PRINTER": "Printer",
          "C__OBJTYPE__AIR_CONDITION_SYSTEM": "Air Condition System",
          "C__OBJTYPE__WAN": "Wan",
          "C__OBJTYPE__EMERGENCY_PLAN": "Emergency Plan",
          "C__OBJTYPE__KVM_SWITCH": "Kvm Switch",
          "C__OBJTYPE__MONITOR": "Monitor",
          "C__OBJTYPE__APPLIANCE": "Appliance",
          "C__OBJTYPE__TELEPHONE_SYSTEM": "Telephone System",
          "C__OBJTYPE__PRINTBOX": "Printbox",
          "C__OBJTYPE__ROOM": "Room",
          "C__OBJTYPE__ACCESS_POINT": "Wireless Access Point",
          "C__OBJTYPE__MAINTENANCE": "Contract",
          "C__OBJTYPE__FILE": "File",
          "C__OBJTYPE__LOCATION_GENERIC": "Generic Location",
          "C__OBJTYPE__LAYER3_NET": "Layer 3-net",
          "C__OBJTYPE__CELL_PHONE_CONTRACT": "Cellular Phone",
          "C__OBJTYPE__LICENCE": "Licenses",
          "C__OBJTYPE__CONTAINER": "Container",
          "C__OBJTYPE__OPERATING_SYSTEM": "Operating System",
          "C__OBJECT_TYPE__GROUP": "Object Group",
          "C__OBJTYPE__GENERIC_TEMPLATE": "Generic Template",
          "C__OBJTYPE__PHONE": "Phone",
          "C__OBJTYPE__HOST": "Host",
          "C__OBJTYPE__CABLE": "Cable",
          "C__OBJTYPE__CONVERTER": "Converter",
          "C__OBJTYPE__WIRING_SYSTEM": "Wiring System",
          "C__OBJTYPE__PATCH_PANEL": "Patch Panel",
          "C__OBJTYPE__AMPLIFIER": "Amplifier",
          "C__OBJTYPE__IT_SERVICE": "Service",
          "C__OBJTYPE__ESC": "Electric Power Company",
          "C__OBJTYPE__EPS": "Emergency Power Supply",
          "C__OBJTYPE__DISTRIBUTION_BOX": "Distribution Box",
          "C__OBJTYPE__PDU": "Power Distribution Unit",
          "C__OBJTYPE__UPS": "Uninterruptible Power Supply",
          "C__OBJTYPE__SAN_ZONING": "San Zoning",
          "C__OBJTYPE__ORGANIZATION": "Organization",
          "C__OBJTYPE__PERSON": "Persons",
          "C__OBJTYPE__PERSON_GROUP": "Person Groups",
          "C__OBJTYPE__CLUSTER": "Cluster",
          "C__OBJTYPE__CLUSTER_SERVICE": "Cluster Services",
          "C__OBJTYPE__VIRTUAL_CLIENT": "Virtual Client",
          "C__OBJTYPE__VIRTUAL_HOST": "Virtual Host",
          "C__OBJTYPE__VIRTUAL_SERVER": "Virtual Server",
          "C__OBJTYPE__RELATION": "Relation",
          "C__OBJTYPE__DBMS": "Dbms",
          "C__OBJTYPE__DATABASE_SCHEMA": "Database Schema",
          "C__OBJTYPE__PARALLEL_RELATION": "Parallel Relations",
          "C__OBJTYPE__REPLICATION": "Replication Object",
          "C__OBJTYPE__DATABASE_INSTANCE": "Database Instance",
          "C__OBJTYPE__MIDDLEWARE": "Middleware",
          "C__OBJTYPE__SOA_STACK": "Soa Stack",
          "C__OBJTYPE__KRYPTO_CARD": "Crypto Card",
          "C__OBJTYPE__SIM_CARD": "Sim Card",
          "C__OBJTYPE__LAYER2_NET": "Layer 2 Net",
          "C__OBJTYPE__WORKSTATION": "Workplace",
          "C__OBJTYPE__MIGRATION_OBJECT": "Migration Objects",
          "C__OBJTYPE__SWITCH_CHASSIS": "Switch Chassis",
          "C__OBJTYPE__BLADE_CHASSIS": "Blade Chassis",
          "C__OBJTYPE__BLADE_SERVER": "Blade Server",
          "C__OBJTYPE__VOIP_PHONE": "Voip Telephone",
          "C__OBJTYPE__SUPERNET": "Supernet",
          "C__OBJTYPE__VEHICLE": "Vehicle",
          "C__OBJTYPE__AIRCRAFT": "Aircraft",
          "C__OBJTYPE__CLUSTER_VRRP_HSRP": "Vrrp/hsrp Cluster",
          "C__OBJTYPE__COUNTRY": "Country",
          "C__OBJTYPE__CITY": "City",
          "C__CMDB__OBJTYPE__CABLE_TRAY": "Cable Tray",
          "C__CMDB__OBJTYPE__CONDUIT": "Conduit",
          "C__OBJTYPE__RM_CONTROLLER": "Remote Management Controller",
          "C__OBJTYPE__VRRP": "Vrrp",
          "C__OBJTYPE__STACKING": "Stacking",
          "C__OBJTYPE__NET_ZONE": "Net Zone",
          "C__OBJTYPE__RACK_SEGMENT": "Rack Segment",
          "C__NEW_OBJECT_TYPE_2023_08_04": "New Object Type 2023-08-04"
        },
        "categories": {
          "g": {
            "C__CATG__GLOBAL": "General",
            "C__CATG__MODEL": "Model",
            "C__CATG__FORMFACTOR": "Form factor",
            "C__CATG__CPU": "CPU",
            "C__CATG__MEMORY": "Memory",
            "C__CATG__NETWORK": "Network",
            "C__CATG__STORAGE": "Direct Attached Storage",
            "C__CATG__POWER_CONSUMER": "Power consumer",
            "C__CATG__UNIVERSAL_INTERFACE": "Interface",
            "C__CATG__APPLICATION": "Software assignment",
            "C__CATG__ACCESS": "Access",
            "C__CATG__BACKUP": "Backup",
            "C__CATG__EMERGENCY_PLAN": "Emergency plan assignment",
            "C__CATG__FILE": "Files",
            "C__CATG__CONTACT": "Contact assignment",
            "C__CATG__LOGBOOK": "Logbook",
            "C__CATG__CONTROLLER": "Controller",
            "C__CATG__LOCATION": "Location",
            "C__CATG__IMAGE": "Object picture",
            "C__CATG__MANUAL": "Manual assignment",
            "C__CATG__OVERVIEW": "Overview page",
            "C__CATG__SOUND": "Sound card",
            "C__CATG__OBJECT": "locally assigned objects",
            "C__CATG__GRAPHIC": "Graphic card",
            "C__CATG__VIRTUAL_MACHINE": "Virtual machine",
            "C__CATG__ACCOUNTING": "Accounting",
            "C__CATG__NETWORK_PORT": "Port",
            "C__CATG__NETWORK_INTERFACE": "Interface",
            "C__CATG__NETWORK_LOG_PORT": "logical Ports",
            "C__CATG__DRIVE": "Drive",
            "C__CATG__STORAGE_DEVICE": "Device",
            "C__CATG__CONTROLLER_FC_PORT": "FC port",
            "C__CATG__SANPOOL": "Storage Area Network",
            "C__CATG__IP": "Host address",
            "C__CATG__VERSION": "Version",
            "C__CATG__CABLING": "Cabling",
            "C__CATG__CONNECTOR": "Connectors",
            "C__CATG__INVOICE": "Invoice",
            "C__CATG__CUSTOM_FIELDS": "Custom Fields",
            "C__CATG__POWER_SUPPLIER": "Power supplier",
            "C__CATG__RAID": "Raid-Array",
            "C__CATG__LDEV_SERVER": "Logical devices (LDEV Server)",
            "C__CATG__LDEV_CLIENT": "Logical devices (Client)",
            "C__CATG__HBA": "Host Bus Adapter (HBA)",
            "C__CATG__CLUSTER_ROOT": "Cluster",
            "C__CATG__CLUSTER": "Cluster",
            "C__CATG__SHARES": "Shares",
            "C__CATG__CLUSTER_SERVICE": "Cluster service assignment",
            "C__CATG__CLUSTER_MEMBERS": "Cluster Members",
            "C__CATG__CLUSTER_SHARED_STORAGE": "Shared Storage",
            "C__CATG__CLUSTER_MEMBERSHIPS": "Cluster memberships",
            "C__CATG__COMPUTING_RESOURCES": "Computing resources",
            "C__CATG__CLUSTER_VITALITY": "Cluster vitality",
            "C__CATG__SNMP": "SNMP",
            "C__CATG__VIRTUAL_HOST_ROOT": "Virtual host",
            "C__CATG__VIRTUAL_HOST": "Virtual host",
            "C__CATG__GUEST_SYSTEMS": "Guest systems",
            "C__CATG__VIRTUAL_MACHINE__ROOT": "Virtual machine",
            "C__CATG__VIRTUAL_SWITCH": "Virtual Switches",
            "C__CATG__VIRTUAL_DEVICE": "Virtual devices",
            "C__CATG__CLUSTER_SHARED_VIRTUAL_SWITCH": "Shared virtual switches",
            "C__CATG__BACKUP__ASSIGNED_OBJECTS": "Backup (assigned Objects)",
            "C__CATG__GROUP_MEMBERSHIPS": "Group memberships",
            "C__CATG__IT_SERVICE_COMPONENTS": "Service components",
            "C__CATG__ITS_LOGBOOK": "Service Logbook",
            "C__CATG__IT_SERVICE": "Service assignment",
            "C__CATG__OBJECT_VITALITY": "Object vitality",
            "C__CATG__RELATION": "Relationship",
            "C__CATG__IT_SERVICE_RELATIONS": "Service Relation",
            "C__CATG__DATABASE_ASSIGNMENT": "Database assignment",
            "C__CATG__ITS_TYPE": "Service Type",
            "C__CATG__PASSWD": "Passwords",
            "C__CATG__SOA_STACKS": "SOA-Stacks",
            "C__CATG__PLANNING": "Status-Planning",
            "C__CATG__ASSIGNED_CARDS": "Assigned cards",
            "C__CATG__SIM_CARD": "SIM card",
            "C__CATG__TSI_SERVICE": "TSI service",
            "C__CATG__AUDIT": "Audit",
            "C__CATG__NETWORK_PORT_OVERVIEW": "Port overview",
            "C__CATG__LOGICAL_UNIT": "Logical location",
            "C__CATG__ASSIGNED_LOGICAL_UNIT": "Workplace components",
            "C__CATG__ASSIGNED_WORKSTATION": "Assigned workstation",
            "C__CATG__VIRTUAL_TICKETS": "All Tickets",
            "C__CATG__PERSON_ASSIGNED_WORKSTATION": "Assigned Workplaces",
            "C__CATG__CONTRACT_ASSIGNMENT": "Contract assignment",
            "C__CATG__RACK_VIEW": "Racks",
            "C__CATG__MAIL_ADDRESSES": "E-Mail addresses",
            "C__CATG__VOIP_PHONE": "CUCM VoIP telephone",
            "C__CATG__VOIP_PHONE_LINE": "CUCM VoIP line",
            "C__CATG__TELEPHONE_FAX": "Telephone/Fax",
            "C__CATG__SMARTCARD_CERTIFICATE": "Smart Card Certificate",
            "C__CATG__SHARE_ACCESS": "Share Access",
            "C__CATG__VIRTUAL_SUPERNET": "Supernet",
            "C__CATG__CERTIFICATE": "Certificate",
            "C__CATG__SLA": "SLA",
            "C__CATG__LDAP_DN": "LDAP",
            "C__CATG__VIRTUAL_AUTH": "Access permissions",
            "C__CATG__ADDRESS": "Address",
            "C__CATG__MONITORING": "Monitoring",
            "C__CATG__LIVESTATUS": "Livestatus",
            "C__CATG__VEHICLE": "Vehicle",
            "C__CATG__AIRCRAFT": "Aircraft",
            "C__CATG__NET_CONNECTIONS_FOLDER": "Network connections",
            "C__CATG__NET_LISTENER": "Listener",
            "C__CATG__NET_CONNECTOR": "Connection",
            "C__CATG__CLUSTER_ADM_SERVICE": "Administration service",
            "C__CATG__JDISC_CA": "JDisc Custom Attributes",
            "C__CATG__NDO": "NDO",
            "C__CATG__CABLE": "Cable",
            "C__CATG__IDENTIFIER": "Data Source",
            "C__CATG__SERVICE": "Services",
            "C__CATG__OPERATING_SYSTEM": "Operating system",
            "C__CATG__JDISC_DISCOVERY": "JDisc Discovery",
            "C__CATG__QINQ_SP": "QinQ SP-VLAN",
            "C__CATG__FIBER_LEAD": "Fiber/lead",
            "C__CATG__QINQ_CE": "QinQ CE-VLAN",
            "C__CATG__IMAGES": "Images",
            "C__CATG__WAN": "WAN Connection",
            "C__CATG__RM_CONTROLLER": "Remote Management Controller",
            "C__CATG__RM_CONTROLLER_BACKWARD": "Managed devices",
            "C__CATG__MANAGED_OBJECTS": "Virtual managed objects",
            "C__CATG__VRRP": "VRRP",
            "C__CATG__VRRP_MEMBER": "VRRP Member",
            "C__CATG__VRRP_VIEW": "VRRP membership",
            "C__CATG__STACK_MEMBER": "Stack member",
            "C__CATG__STACK_MEMBERSHIP": "Stack membership",
            "C__CATG__LAST_LOGIN_USER": "Last login user",
            "C__CATG__NET_ZONE": "Net zone",
            "C__CATG__NET_ZONE_OPTIONS": "Options",
            "C__CATG__NET_ZONE_SCOPES": "Scope",
            "C__CATG__STACK_PORT_OVERVIEW": "Port Overview (Stacking)",
            "C__CATG__CABLE_CONNECTION": "Cable connection",
            "C__CATG__MULTIEDIT": "Listedit",
            "C__CATG__DATABASE_FOLDER": "Databases",
            "C__CATG__DATABASE": "DBMS",
            "C__CATG__DATABASE_TABLE": "Tables",
            "C__CATG__DATABASE_SA": "Databases",
            "C__CATG__SIM": "SIM",
            "C__CATG__CARDS": "Cards",
            "C__CATG__ASSIGNED_SIM_CARDS": "Assigned SIM cards",
            "C__CATG__CLOUD_SUBSCRIPTIONS": "Subscriptions",
            "C__CATG__ASSIGNED_SUBSCRIPTIONS": "Assigned Subscriptions",
            "C__CATG__ASSIGNED_USERS": "Assigned Users",
            "C__CATG__SUPPORT_ENTITLEMENT": "Support Entitlements",
            "C__CATG__CONNECTION_ENDPOINT": "Connection endpoint",
            "C__CATG__JDISC_DEVICE_INFORMATION": "JDisc Device Information"
          },
          "s": {
            "C__CATS__ENCLOSURE": "Rack",
            "C__CATS__ROOM": "Room",
            "C__CATS__SERVICE": "Services",
            "C__CATS__SWITCH_NET": "Switch",
            "C__CATS__WAN": "WAN",
            "C__CATS__EMERGENCY_PLAN": "Emergency plan",
            "C__CATS__AC": "Air conditioning",
            "C__CATS__ACCESS_POINT": "WiFi device",
            "C__CATS__MONITOR": "Monitor",
            "C__CATS__CLIENT": "Desktop",
            "C__CATS__SWITCH_FC": "FC switch",
            "C__CATS__ROUTER": "Routing",
            "C__CATS__PRT": "Printer",
            "C__CATS__FILE": "Files",
            "C__CATS__APPLICATION": "Applications",
            "C__CATS__NET": "Net",
            "C__CATS__CELL_PHONE_CONTRACT": "Mobile radio",
            "C__CATS__LICENCE": "Licenses",
            "C__CATS__GROUP": "Object group",
            "C__CATS__LICENCE_LIST": "License keys",
            "C__CATS__LICENCE_OVERVIEW": "Overview",
            "C__CATS__FILE_ACTUAL": "Current file",
            "C__CATS__FILE_VERSIONS": "File versions",
            "C__CATS__FILE_OBJECTS": "Assigned objects",
            "C__CATS__EMERGENCY_PLAN_ATTRIBUTE": "Emergency plan properties",
            "C__CATS__EMERGENCY_PLAN_LINKED_OBJECTS": "assigned objects",
            "C__CATS__WS_NET_TYPE": "Net type",
            "C__CATS__WS_ASSIGNMENT": "Assigned objects",
            "C__CATS__WS": "Wiring System",
            "C__CATS__UPS": "Uninterruptible power supply",
            "C__CATS__EPS": "Emergency power supply",
            "C__CATS__SAN_ZONING": "SAN Zoning",
            "C__CATS__ORGANIZATION": "Organization",
            "C__CATS__ORGANIZATION_MASTER_DATA": "Master data",
            "C__CATS__ORGANIZATION_PERSONS": "Persons",
            "C__CATS__PERSON": "Persons",
            "C__CATS__PERSON_MASTER": "Master Data",
            "C__CATS__PERSON_LOGIN": "Login",
            "C__CATS__PERSON_ASSIGNED_GROUPS": "Person group memberships",
            "C__CATS__PERSON_GROUP": "Person groups",
            "C__CATS__PERSON_GROUP_MASTER": "Master Data",
            "C__CATS__PERSON_GROUP_MEMBERS": "Members",
            "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT": "Assigned Objects",
            "C__CATS__PERSON_CONTACT_ASSIGNMENT": "Assigned Objects",
            "C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT": "Assigned Objects",
            "C__CATS__CLUSTER_SERVICE": "Assigned clusters",
            "C__CATS__RELATION_DETAILS": "Relation details",
            "C__CATS__DATABASE_SCHEMA": "Database schema",
            "C__CATS__DATABASE_LINKS": "Database links",
            "C__CATS__DBMS": "DBMS",
            "C__CATS__DATABASE_INSTANCE": "Instance / Oracle database",
            "C__CATS__PDU": "PDU",
            "C__CATS__PDU_BRANCH": "Branch",
            "C__CATS__PDU_OVERVIEW": "Overview",
            "C__CATS__PARALLEL_RELATION": "Parallel relations",
            "C__CATS__DATABASE_OBJECTS": "Database objects",
            "C__CATS__DATABASE_ACCESS": "Database access",
            "C__CATS__DATABASE_GATEWAY": "Database gateway",
            "C__CATS__REPLICATION": "Replication",
            "C__CATS__REPLICATION_PARTNER": "Replication partner",
            "C__CATS__APPLICATION_ASSIGNED_OBJ": "Installation",
            "C__CATS__CLUSTER_SERVICE_ASSIGNED_OBJ": "Cluster installation",
            "C__CATS__MIDDLEWARE": "Middleware",
            "C__CATS__KRYPTO_CARD": "Crypto card",
            "C__CATS__NET_IP_ADDRESSES": "IP list",
            "C__CATS__NET_DHCP": "DHCP",
            "C__CATS__LAYER2_NET": "Layer 2 Net",
            "C__CATS__LAYER2_NET_ASSIGNED_PORTS": "Assigned ports",
            "C__CATS__CONTRACT": "Contract",
            "C__CATS__CONTRACT_INFORMATION": "Contract information",
            "C__CATS__CONTRACT_ALLOCATION": "Assigned Objects",
            "C__CATS__CHASSIS": "Chassis",
            "C__CATS__CHASSIS_SLOT": "Slots",
            "C__CATS__CHASSIS_DEVICES": "Assigned devices",
            "C__CATS__CHASSIS_VIEW": "Chassis view",
            "C__CATS__CHASSIS_CABLING": "Cabling",
            "C__CATS__APPLICATION_VARIANT": "Variants",
            "C__CATS__BASIC_AUTH": "Authorization config",
            "C__CATS__GROUP_TYPE": "Type",
            "C__CATS__LAYER2_NET_ASSIGNED_LOGICAL_PORTS": "Assigned logical ports",
            "C__CATS__APPLICATION_SERVICE_ASSIGNED_OBJ": "Installation",
            "C__CATS__APPLICATION_DBMS_ASSIGNED_OBJ": "Installation",
            "C__CATS__NET_ZONE": "Net zone",
            "C__CATS__OPERATING_SYSTEM": "Operating Systems",
            "C__CATS__DATABASE_INSTALLATION": "Database installation",
            "C__CATS__DBMS_APPLICATION": "Applications"
          },
          "g_custom": {
            "C__CATG__CUSTOM_FIELDS_DIALOG_ADMIN_KB": "Dialog-Admin KB"
          }
        },
        "recordStates": {
          "C__RECORD_STATUS__NORMAL": "Normal",
          "C__RECORD_STATUS__ARCHIVED": "Archived",
          "C__RECORD_STATUS__DELETED": "Deleted",
          "C__RECORD_STATUS__PURGE": "LC__CMDB__RECORD_STATUS__PURGE"
        },
        "relationTypes": {
          "C__RELATION_TYPE__SOFTWARE": "Software assignment",
          "C__RELATION_TYPE__CLUSTER_SERVICE": "Cluster service assignment",
          "C__RELATION_TYPE__BACKUP": "Backup",
          "C__RELATION_TYPE__ADMIN": "Contact assignment",
          "C__RELATION_TYPE__USER": "Contact assignment",
          "C__RELATION_TYPE__CLUSTER_MEMBERSHIPS": "Cluster memberships",
          "C__RELATION_TYPE__POWER_CONSUMER": "Power consumer",
          "C__RELATION_TYPE__NETWORK_PORT": "Ports",
          "C__RELATION_TYPE__VIRTUAL_MACHINE": "Virtual machine",
          "C__RELATION_TYPE__LOCATION": "Location",
          "C__RELATION_TYPE__UNIVERSAL_INTERFACE": "Interface",
          "C__RELATION_TYPE__IP_ADDRESS": "Host address",
          "C__RELATION_TYPE__CONTROLLER_FC_PORT": "FC port",
          "C__RELATION_TYPE__CONNECTORS": "Connectors",
          "C__RELATION_TYPE__LDEV_CLIENT": "Logical devices (Client)",
          "C__RELATION_TYPE__GROUP_MEMBERSHIPS": "Group memberships",
          "C__RELATION_TYPE__PERSON_ASSIGNED_GROUPS": "Person group memberships",
          "C__RELATION_TYPE__DEFAULT": "Dependency",
          "C__RELATION_TYPE__DATABASE_ACCESS": "Database access",
          "C__RELATION_TYPE__DATABASE_LINK": "Database links",
          "C__RELATION_TYPE__DATABASE_GATEWAY": "Database gateway",
          "C__RELATION_TYPE__DATABASE_INSTANCE": "Database instance",
          "C__RELATION_TYPE__IT_SERVICE_COMPONENT": "Service component",
          "C__RELATION_TYPE__REPLICATION_PARTNER": "Replication partner",
          "C__RELATION_TYPE__SOA_COMPONENTS": "SOA-Component",
          "C__RELATION_TYPE__SOA_STACKS": "SOA-Stacks",
          "C__RELATION_TYPE__DBMS": "DBMS",
          "C__RELATION_TYPE__MOBILE_PHONE": "Assigned cards",
          "C__RELATION_TYPE__ORGANIZATION": "Organization",
          "C__RELATION_TYPE__LOGICAL_UNIT": "Logical location",
          "C__RELATION_TYPE__CONTRACT": "Contract assignment",
          "C__RELATION_TYPE__CHASSIS": "Chassis",
          "C__RELATION_TYPE__STACKING": "Stacking",
          "C__RELATION_TYPE__SHARE_ACCESS": "Share Access",
          "C__RELATION_TYPE__NET_CONNECTIONS": "Network connections",
          "C__RELATION_TYPE__CLUSTER_ADM_SERVICE": "Administration service",
          "C__RELATION_TYPE__OPERATION_SYSTEM": "Operating system",
          "C__RELATION_TYPE__LAYER2_TRANSPORT": "Layer 2 Transport",
          "C__RELATION_TYPE__RM_CONTROLLER": "Remote Management Controller",
          "C__RELATION_TYPE__FILE": "Files",
          "C__RELATION_TYPE__ORGANIZATION_HEADQUARTER": "Headquarter (Organization)",
          "C__RELATION_TYPE__VHOST_ADMIN_SERVICE": "Virtual host",
          "C__RELATION_TYPE__VRRP": "VRRP",
          "C__RELATION_TYPE__MANUAL": "Manual assignment",
          "C__RELATION_TYPE__EMERGENCY_PLAN": "Emergency plan",
          "C__RELATION_TYPE__WAN_CONNECTION": "WAN Connection",
          "C__RELATION_TYPE__LAYER3_2_LAYER2": "Layer-2-net assignment",
          "C__RELATION_TYPE__ASSIGNED_SIM_CARDS": "Assigned SIM cards",
          "C__RELATION_TYPE__CONNECTION_ENDPOINT": "Connection endpoint"
        },
        "staticObjects": {
          "C__OBJ__ROOT_LOCATION": "Root location",
          "C__OBJ__PERSON_GUEST": "guest ",
          "C__OBJ__PERSON_READER": "reader ",
          "C__OBJ__PERSON_EDITOR": "editor ",
          "C__OBJ__PERSON_AUTHOR": "author ",
          "C__OBJ__PERSON_ARCHIVAR": "archivar ",
          "C__OBJ__PERSON_ADMIN": "admin ",
          "C__OBJ__PERSON_GROUP_READER": "Reader",
          "C__OBJ__PERSON_GROUP_EDITOR": "Editor",
          "C__OBJ__PERSON_GROUP_AUTHOR": "Author",
          "C__OBJ__PERSON_GROUP_ARCHIVAR": "Archivar",
          "C__OBJ__PERSON_GROUP_ADMIN": "Admin",
          "C__OBJ__NET_GLOBAL_IPV4": "Global v4",
          "C__OBJ__NET_GLOBAL_IPV6": "Global v6",
          "C__OBJ__PERSON_API_SYSTEM": "Api System",
          "C__OBJ__RACK_SEGMENT__4SLOT": "4-Slot",
          "C__OBJ__RACK_SEGMENT__8SLOT": "8-Slot",
          "C__OBJ__RACK_SEGMENT__2SLOT": "2-Slot"
        }
      }
    }
    ```

## idoit.license

Displays information about the installed license.

### Request parameters

| Key             | JSON data type | Required | Description |
| --------------- | -------------- | -------- | ----------- |
| **Placeholder** | Placeholder    | Yes      | Placeholder |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "idoit.license",
      "params": {
        "apikey": "{{apikey}}",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "objectCapacity": {
          "total": 5002,
          "inUse": 1
        },
        "addons": {
          "iso27001": {
            "licensed": true,
            "label": "i-doit pro Add-on ISMS medium"
          },
          "viva": {
            "label": "VIVA",
            "licensed": false
          },
          "viva2": {
            "licensed": true,
            "label": "i-doit pro Add-on VIVA medium"
          },
          "cmk2": {
            "licensed": true,
            "label": "i-doit pro Add-on Checkmk2"
          },
          "document": {
            "licensed": true,
            "label": "i-doit pro Add-on Documents medium"
          },
          "rfc": {
            "licensed": true,
            "label": "i-doit pro Add-on RfC Manager medium"
          },
          "analytics": {
            "licensed": true,
            "label": "i-doit pro Add-on Analysis medium"
          },
          "forms": {
            "licensed": true,
            "label": "i-doit pro Add-on Forms medium"
          },
          "sectornord_ocs": {
            "label": "OCS (Sector Nord AG)",
            "licensed": false
          },
          "check_mk": {
            "licensed": true,
            "label": "i-doit pro Add-on Checkmk"
          },
          "floorplan": {
            "licensed": true,
            "label": "i-doit pro Add-on Floorplan"
          },
          "relocate_ci": {
            "licensed": true,
            "label": "i-doit pro Add-on Relocate-CI"
          },
          "swapci": {
            "licensed": true,
            "label": "i-doit pro Add-on Replacement"
          },
          "packager": {
            "licensed": true,
            "label": "i-doit pro Add-on Packager"
          },
          "workflow": {
            "licensed": true,
            "label": "i-doit pro Add-on Workflow"
          },
          "api": {
            "licensed": true,
            "label": "i-doit pro Add-on API"
          },
          "maintenance": {
            "licensed": true,
            "label": "i-doit pro Add-on Maintenance"
          },
          "cabling": {
            "licensed": true,
            "label": "i-doit pro Add-on Cabling"
          },
          "events": {
            "licensed": true,
            "label": "i-doit pro Add-on Events"
          },
          "privacy": {
            "licensed": true,
            "label": "i-doit pro Add-on GDPR"
          },
          "syneticsgmbh_reportspecial": {
            "licensed": true,
            "label": "i-doit pro Add-on Report-Special"
          },
          "syneticsgmbh_homeoffice": {
            "licensed": true,
            "label": "i-doit pro Add-on HomeOffice"
          },
          "syneticsgmbh_idoit": {
            "licensed": true,
            "label": "i-doit pro Add-on i-Diary"
          },
          "nagios": {
            "licensed": true,
            "label": "i-doit pro Add-on Nagios"
          },
          "syneticsgmbh_dnsdocumentation": {
            "licensed": true,
            "label": "i-doit pro Add-on DNS Documentation"
          },
          "syneticsgmbh_addocumentation": {
            "licensed": true,
            "label": "i-doit pro Add-on AD Documentation"
          },
          "syneticsgmbh_synprojects": {
            "licensed": true,
            "label": "i-doit pro Add-on Project Documentation"
          },
          "gw_gw": {
            "licensed": true,
            "label": "i-doit pro Add-on Rights Documentation"
          },
          "ulfwagner_furnitur": {
            "licensed": true,
            "label": "i-doit pro Add-on Office Furniture"
          },
          "becon_trigger": {
            "licensed": true,
            "label": "i-doit pro Add-on Trigger medium"
          },
          "syneticsgmbh_keybook": {
            "licensed": true,
            "label": "i-doit pro Add-on Keybook"
          },
          "scanit": {
            "licensed": true,
            "label": "i-doit pro Add-on ScanIT medium"
          },
          "med_tec": {
            "licensed": true,
            "label": "i-doit pro Add-on MedTec medium"
          },
          "label": {
            "licensed": true,
            "label": "i-doit pro Add-on Label Printer"
          }
        },
        "licenses": [
          {
            "id": 2,
            "label": "i-doit pro Add-on Checkmk2",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 3,
            "label": "i-doit pro Add-on Checkmk",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 4,
            "label": "i-doit single tenant",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 1,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 5,
            "label": "i-doit pro Add-on Floorplan",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 6,
            "label": "i-doit pro Add-on Relocate-CI",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 7,
            "label": "i-doit pro Add-on Replacement",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 8,
            "label": "i-doit pro Add-on Packager",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 9,
            "label": "i-doit pro Add-on Workflow",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 10,
            "label": "i-doit pro Add-on API",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 11,
            "label": "i-doit pro Add-on Maintenance",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 12,
            "label": "i-doit pro Add-on Cabling",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 13,
            "label": "i-doit pro Add-on Events",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 14,
            "label": "i-doit pro Add-on GDPR",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 15,
            "label": "i-doit pro Add-on ISMS medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 16,
            "label": "i-doit pro Add-on VIVA medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 17,
            "label": "i-doit pro medium",
            "licenseType": "i-doit",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 5000,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 18,
            "label": "i-doit pro Add-on Documents medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 19,
            "label": "i-doit pro Add-on Analysis medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 20,
            "label": "i-doit pro Add-on Report-Special",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 21,
            "label": "i-doit pro Add-on HomeOffice",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 22,
            "label": "i-doit pro Add-on i-Diary",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 23,
            "label": "i-doit pro Add-on Nagios",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 24,
            "label": "i-doit pro Add-on QR Code Label Printer",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 25,
            "label": "i-doit Virtual Appliance",
            "licenseType": "i-doit",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 1,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 26,
            "label": "i-doit pro Add-on DNS Documentation",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 27,
            "label": "i-doit pro Add-on AD Documentation",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 28,
            "label": "i-doit pro Add-on Project Documentation",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 29,
            "label": "i-doit pro Add-on Rights Documentation",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 30,
            "label": "i-doit pro Add-on Office Furniture",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 31,
            "label": "i-doit pro Add-on Trigger medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 32,
            "label": "i-doit pro Add-on Keybook",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 33,
            "label": "i-doit pro Add-on RfC Manager medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 34,
            "label": "i-doit pro Add-on ScanIT medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 35,
            "label": "i-doit pro Add-on MedTec medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 36,
            "label": "i-doit Windows Installer",
            "licenseType": "i-doit",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 1,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 37,
            "label": "i-doit pro Add-on Label Printer",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          {
            "id": 38,
            "label": "i-doit pro Add-on Forms medium",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          }
        ]
      }
    }
    ```

### idoit.login

Create new session with X-RPC-Auth headers.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | -------------- | -------- | ----------- |
| -   | -              | -        | -           |

### Response parameters

JSON key **result** contains a JSON object.

| Key             | JSON data type | Description                                                        |
| --------------- | -------------- | ------------------------------------------------------------------ |
| **result**      | Boolean        | Should be **true**                                                 |
| **userid**      | String         | Object identifier of logged-in user (as numeric string)            |
| **name**        | String         | Object title of logged-in user                                     |
| **mail**        | String         | Attribute **E-mail address** in category **Persons → Master Data** |
| **username**    | String         | Attribute **User name** in category **Persons → Login**            |
| **session-id**  | String         | Generated session identifier                                       |
| **client-id**   | String         | Tenant identifier (as numeric string)                              |
| **client-name** | String         | Tenant name                                                        |

### Example:

=== "Request body with set header"

    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```

    ```json
    {
        "version": "2.0",
        "method": "idoit.login",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Response body with header"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "result": true,
        "userid": "9",
        "name": "admin ",
        "mail": "",
        "username": "admin",
        "session-id": "d1obs9m3d2pd8651grptjhdjg3",
        "client-id": 1,
        "client-name": "KnowledgeBase"
      }
    }
    ```

### idoit.logout

Close current session

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

### Response parameters

JSON key **result** contains a JSON object.


| Key     | JSON data type | Description                        |
| ------- | -------------- | ---------------------------------- |
| message | String         | Should be **"Logout successfull"** |
| result  | Boolean        | Should be **true**                 |

### Example:
See method [idoit.login](#idoitlogin) before.

=== "Request body"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
        "version": "2.0",
        "method": "idoit.logout",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 3
    }
    ```

=== "Response body"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successfull",
            "result": true
        },
        "id": 3
    }
    ```

## idoit.search

[Search](../../../efficient-documentation/search.md) in i-doit

### Request parameters

| Key   | JSON data typ | Required | Description                                |
| ----- | ------------- | -------- | ------------------------------------------ |
| **q** | String        | Yes      | Query, for example: **"My little server"** |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains a search result.

| Key            | JSON data type | Description                                        |
| -------------- | -------------- | -------------------------------------------------- |
| **documentID** | String         | Identifier                                         |
| **key**        | String         | Attribute which relates to query                   |
| **value**      | String         | Value which relates to query                       |
| **type**       | String         | [Add-on](../index.md) or core feature              |
| **link**       | String         | Relative URL which directly links to search result |
| **score**      | Integer        | Scoring (deprecated)                               |

### Example:

=== "Request body"

    ```json
    {
        "version": "2.0",
        "method": "idoit.search",
        "params": {
            "q": "My little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Response body"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "documentId": "1000",
                "key": "Virtual Host > Global > Title",
                "value": "My little server",
                "type": "cmdb",
                "link": "/?objID=1000&catgID=1&cateID=1029&highlight=My%20little%20server",
                "score": "100",
                "status": "Normal"
            },
            […]
        ],
    }
    ```

## idoit.version

Fetch information about i-doit and the current user

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |


### Response parameters

JSON key **result** contains an JSON object with various information about i-doit itself and the current user.

| Key                | JSON data type | Description                                                                     |
| ------------------ | -------------- | ------------------------------------------------------------------------------- |
| **login**          | Array          | Information about the user who has performed the request; see below for details |
| **login.userid**   | String         | Object identifier (as numeric string)                                           |
| **login.name**     | String         | Object title                                                                    |
| **login.mail**     | String         | E-mail address (see category **Persons → Master Data**)                         |
| **login.username** | String         | User name (see category **Persons → Login**)                                    |
| **login.mandator** | String         | Tenant name                                                                     |
| **login.language** | String         | Language: **"en"** or **"de"**                                                  |
| **version**        | String         | Version of installed i-doit                                                     |
| **step**           | String         | Dev, alpha or beta release                                                      |
| **type**           | String         | Release variant: **"OPEN"** or **"PRO"**                                        |

### Example:

=== "Request body"

    ```json
    {
        "version": "2.0",
        "method": "idoit.version",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "login": {
          "userid": "9",
          "name": "admin ",
          "mail": "",
          "username": "admin",
          "tenant": "KnowledgeBase",
          "language": "en"
        },
        "version": "25",
        "step": "",
        "type": "PRO"
      }
    }
    ```

