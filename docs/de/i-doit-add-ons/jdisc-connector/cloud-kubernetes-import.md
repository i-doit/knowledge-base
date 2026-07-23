---
title: "Cloud- und Kubernetes-Import"
description: "Welche Cloud- und Kubernetes-Daten der JDisc-Import in die CMDB schreibt und wie Sie ihn im Profil aktivieren."
icon:
status:
lang: de
---
# Cloud- und Kubernetes-Import

Der JDisc-Import kann Cloud- und Kubernetes-Informationen uebernehmen, die JDisc Discovery in Ihrer Infrastruktur erhebt.
Dieser Artikel beschreibt, welche Cloud- und Kubernetes-Daten der Import in die CMDB schreibt und wie Sie ihn in einem JDisc-Profil aktivieren.
Diese Funktionen stehen ab i-doit 39 zusammen mit dem JDisc Connector 1.0.5 zur Verfuegung.

## Voraussetzungen

Oeffnen Sie Ihr Importprofil unter **Administration → Import und Schnittstellen → JDisc → JDisc Profile**.
Aktivieren Sie in der Kategorieauswahl des Profils die gewuenschten Kategorien: **Cloud**, **Kubernetes** und **Cluster-Mitgliedschaften**.
Ordnen Sie in der Objekttyp-Zuordnung des Profils die relevanten JDisc-Geraetetypen den gewuenschten i-doit-Objekttypen zu.
Erstellen Sie wie bei jedem Import ein vollstaendiges Backup, bevor Sie ein Profil aendern und ausfuehren.

## AWS- und Cloud-Metadaten

Fuer Amazon-EC2-Instanzen fuellt der Import die globale Kategorie **Cloud** am zugeordneten Objekt, zum Beispiel einem Virtual Server.
Die Kategorie enthaelt die folgenden Attribute:

-   **Provider:** der Cloud-Provider als Auswahl, zum Beispiel AWS, Azure oder GCP.
-   **Account:** der AWS-Account beziehungsweise die Subscription der Instanz.
-   **Region ID:** der technische Regions-Identifier, zum Beispiel `eu-central-1`.
-   **Region name:** der lesbare Regionsname.
-   **State:** der Zustand der Instanz als Auswahl, zum Beispiel Running, Stopped, Pending, Stopping oder Terminated.

Object Storage wie Amazon-S3-Buckets wird als neuer Objekttyp **Cloud Storage** importiert, der ebenfalls die Kategorie Cloud traegt.

## Kubernetes-Topologie

Von JDisc erkannte Kubernetes-Ressourcen werden als eigene Objekttypen importiert: **Kubernetes Service**, **Kubernetes Pod** und **Kubernetes Container**.
Jedes dieser Objekte erhaelt die globale Kategorie **Kubernetes** mit den folgenden Attributen:

-   **Namespace:** der Kubernetes-Namespace der Ressource.
-   **Workload:** der zugehoerige Workload, zum Beispiel ein Deployment, ReplicaSet oder DaemonSet.
-   **Kind:** die Art der Ressource, zum Beispiel Service, Deployment, ReplicaSet oder DaemonSet.

Der Cluster wird als Beziehung abgebildet, nicht als Text-Attribut.
Jedes Kubernetes-Objekt wird ueber die Standardkategorie **Cluster-Mitgliedschaften** zum Mitglied seines Cluster-Objekts.
Existiert das Cluster-Objekt noch nicht, legt der Import es als Cluster-Objekt an und verknuepft die Mitglieder damit.
So navigieren Sie von jedem Service, Pod oder Container zu seinem Cluster und vom Cluster zu allen seinen Mitgliedern.

## Weiterfuehrende Themen

-   [JDisc Connector](./index.md)
-   [JDisc Profile](../../administration/verwaltung/import-und-schnittstellen/jdisc/jdisc-profile.md)
-   [JDisc Konfiguration](../../administration/verwaltung/import-und-schnittstellen/jdisc/jdisc-konfiguration.md)
