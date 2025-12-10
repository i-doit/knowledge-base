---
name: i-doit Release preparation
about: Checklist for preparing a new i-doit release in the Knowledge Base
title: "[RELEASE] i-doit vXX"
labels: update, documentation
assignees: ''
---

# 📦 Release preparation checklist

## 1. Review new features and fixes

- [ ] Create separate sub issue(s) for documenting new features or important fixes.

## 2. System requirements update

- [ ] Create separate sub issue(s) if system requirements need updating.

### German (GER)

- [ ] Update current version reference
- [ ] Update LAMP/WAMP stack requirements
- [ ] Update recommended system usage
- [ ] Update compatibility matrix

### English (EN)

- [ ] Update current version reference
- [ ] Update LAMP/WAMP stack requirements
- [ ] Update recommended system usage
- [ ] Update compatibility matrix

## 3. Update release notes and changelog

- [ ] Create separate sub issue(s) if needed.

### German (GER)

- [ ] Create `docs/de/versionshistorie/changelogs/changelog-XX.md`
- [ ] Update `docs/de/versionshistorie/changelogs/index.md`
- [ ] Create `docs/de/versionshistorie/release-notes/release-notes-XX.md`
- [ ] Update `docs/de/versionshistorie/release-notes/index.md`
- [ ] Update `docs/de/versionshistorie/index.md`
- [ ] Update `config/de/mkdocs.yml`

### English (EN)

- [ ] Create `docs/en/version-history/changelogs/changelog-XX.md`
- [ ] Update `docs/en/version-history/changelogs/index.md`
- [ ] Create `docs/en/version-history/release-notes/release-notes-XX.md`
- [ ] Update `docs/en/version-history/release-notes/index.md`
- [ ] Update `docs/en/version-history/index.md`
- [ ] Update `config/en/mkdocs.yml`

## 4. Archive and create new hotfix pages

- [ ] Create separate sub issue(s) if needed.

### German (GER)

- [ ] Create `docs/de/administration/hotfixes/hotfix-archive/vXX.md`
  - Copy content from `docs/de/administration/hotfixes/index.md`
  - Adjust links (add `../` where necessary)
- [ ] Update `docs/de/administration/hotfixes/index.md`
  - Remove outdated hotfix entries (only remove add-on hotfixes if the add-on is released separately)
- [ ] Update `docs/de/administration/hotfixes/hotfix-archiv/index.html`
- [ ] Update `config/de/mkdocs.yml`

### English (EN)

- [ ] Create `docs/en/system-administration/hotfixes/hotfix-archive/vXX.md`
  - Copy content from `docs/en/system-administration/hotfixes/index.md`
  - Adjust links (add `../` where necessary)
- [ ] Update `docs/en/system-administration/hotfixes/index.md`
  - Remove outdated hotfix entries (only remove add-on hotfixes if the add-on is released separately)
- [ ] Update `docs/en/system-administration/hotfixes/hotfix-archive/index.html`
- [ ] Update `config/en/mkdocs.yml`

## 5. Add changelogs for updated add-ons

- [ ] Create separate sub issue(s) for each updated add-on.

## 6. Add Downloads to Download Page

- [ ] Added Downloads (DE) `docs/de/download-links.md`
- [ ] Added Downloads (EN) `docs/en/download-links.md`
