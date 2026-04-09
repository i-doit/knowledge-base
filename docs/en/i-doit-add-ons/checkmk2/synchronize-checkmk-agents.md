---
title: Synchronizing Checkmk Agents
description: Checkmk offers agent-based monitoring of hosts and their services.
icon:
status:
lang: en
---
# Synchronizing Checkmk Agents

Checkmk offers agent-based monitoring of hosts and their services. There are various types of agents that can be shared with i-doit. To do this, simply run:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-agents
```

This adds all available agent types to the i-doit Dialog+ attribute "Agent" in the Check_MK Host category.

**Recommendation:** You only need to run this command once.
