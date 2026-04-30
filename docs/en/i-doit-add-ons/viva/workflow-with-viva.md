---
title: Workflow with VIVA
description: "The possibilities of IT documentation are already diverse in i-doit and can be adapted to the requirements and needs of the respective organizational environment..."
icon:
status:
lang: en
---
# Workflow with VIVA

The possibilities of IT documentation are already diverse in i-doit and can be adapted to the requirements and needs of the respective organizational environment. The [add-on](../index.md) **VIVA** is no exception: even though the underlying IT-Grundschutz standards impose many requirements, they are open to interpretation in numerous places. VIVA attempts to accommodate this. Nevertheless, certain work sequences have become established in practice, and they are described in more detail in this chapter. This example claims neither completeness nor binding authority. Additional intermediate steps such as adapting the documentation are likely necessary.

[![Step-by-step workflow based on the waterfall model with feedback](../../assets/images/de/i-doit-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)](../../assets/images/de/i-doit-add-ons/viva/arbeitsablauf/i-doit_viva_diagram_workflow.png)

The goal of this workflow is to create a solid documentation base to later support an audit and certification according to ISO 27001 based on IT-Grundschutz.

1.  [Preparing the VIVA installation](./preparation-viva-installation.md): The IT documentation in i-doit contains objects (including location and software assignments as well as port connections, where possible) that are modeled into services and should be covered by IT-Grundschutz.
2.  Managing IT-Grundschutz catalogs
    1.  [Import IT-Grundschutz catalog EL 15 from 2016](./procedure-with-viva.md)
    2.  Customize modules, measures, and threats (optional)
3.  Model information domain with target groups and target objects
    1.  [Create information domain](./procedure-with-viva.md)
    2.  [Run IT service wizard (layer 5 _Applications_)](./viva-assistenten.md); then:
    3.  [Application wizard (layer 3 _IT Systems_)](./viva-assistenten.md)
    4.  [IT system wizard (layer 2 _Infrastructure_)](./viva-assistenten.md)
    5.  [IT system wizard (layer 4 _Networks_)](./viva-assistenten.md)
4.  Determine protection needs
    1.  [Customize protection needs categories](./procedure-with-viva.md)
    2.  [Determine protection needs of target groups in layer 5 _Applications_](./viva-assistenten.md); then run wizards:
    3.  [Protection needs wizard (layer 3 _IT Systems_)](./viva-assistenten.md)
    4.  [Protection needs wizard (layer 2 _Infrastructure_)](./viva-assistenten.md)
5.  Assign modules and implement measures
    1.  [Assign the necessary modules per target group](./procedure-with-viva.md)
    2.  [Document the implementation of measures per target group](./procedure-with-viva.md)
    3.  [Answer audit questions](./procedure-with-viva.md)
6.  Perform risk analysis
    1.  [Perform supplementary security analysis](./procedure-with-viva.md)
    2.  [Perform risk analysis if applicable](./risk-analysis-it-grundschutz.md)
7.  Create audit
    1.  [Review reports](./reports-with-viva.md) and if applicable repeat steps 2-5 until reports no longer yield unavoidably negative results
    2.  Enter information for [reference document A.0](./support-audits-with-viva.md) and [A.1](./support-audits-with-viva.md)
    3.  [Create audits](./support-audits-with-viva.md)
    4.  Post-process output
