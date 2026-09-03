---
title: "Cloud and Kubernetes Import"
description: "Which cloud and Kubernetes data the JDisc import writes to the CMDB and how to enable it in a profile."
icon:
status:
lang: en
---
# Cloud and Kubernetes Import

The JDisc import can populate cloud and Kubernetes information that JDisc Discovery collects from your infrastructure.
This article describes which cloud and Kubernetes data the import writes to the CMDB and how to enable it in a JDisc profile.
These capabilities are available from i-doit 39 together with the JDisc Connector 1.0.5.

## Prerequisites

Open your import profile under **Administration → Import and Interfaces → JDisc → JDisc Profiles**.
In the category selection of the profile, activate the categories you want to fill: **Cloud**, **Kubernetes**, and **Cluster memberships**.
In the object type assignment of the profile, map the relevant JDisc device types to the i-doit object types you want to use.
As with every import, create a complete backup before you change a profile and run it.

## AWS and cloud metadata

For Amazon EC2 instances the import fills the global category **Cloud** on the matched object, for example a Virtual Server.
The category holds the following attributes:

-   **Provider:** the cloud provider as a selection, for example AWS, Azure, or GCP.
-   **Account:** the AWS account or subscription the instance belongs to.
-   **Region ID:** the technical region identifier, for example `eu-central-1`.
-   **Region name:** the human readable region name.
-   **State:** the instance state as a selection, for example Running, Stopped, Pending, Stopping, or Terminated.

Object storage such as Amazon S3 buckets is imported as the new object type **Cloud Storage**, which also carries the Cloud category.

## Kubernetes topology

Kubernetes resources that JDisc discovers are imported as dedicated object types: **Kubernetes Service**, **Kubernetes Pod**, and **Kubernetes Container**.
Each of these objects receives the global category **Kubernetes** with the following attributes:

-   **Namespace:** the Kubernetes namespace of the resource.
-   **Workload:** the owning workload, for example a Deployment, ReplicaSet, or DaemonSet.
-   **Kind:** the resource kind, for example Service, Deployment, ReplicaSet, or DaemonSet.

The cluster is modelled as a relation, not as a text attribute.
Each Kubernetes object becomes a member of its cluster object through the standard category **Cluster memberships**.
If the cluster object does not exist yet, the import creates it as a Cluster object and links the members to it.
You can therefore navigate from any service, pod, or container to its cluster, and from the cluster to all of its members.

## Further readings

-   [JDisc Connector](./index.md)
-   [JDisc Profiles](../../administration/management/import-and-interfaces/jdisc/jdisc-profile.md)
-   [JDisc Configuration](../../administration/management/import-and-interfaces/jdisc/jdisc-konfiguration.md)
