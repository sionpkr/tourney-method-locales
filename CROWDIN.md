# Crowdin synchronization

The `Sync Crowdin locales` workflow keeps this repository and the private
application synchronized with the
[`tourney-method` Crowdin project](https://crowdin.com/project/tourney-method).

The workflow runs daily, can be dispatched manually, and runs immediately when
an English source file under `lang/en/` changes. Every run first checks out the
private application and exports only the English files approved by its public
locale policy. Changed sources, public English pushes, and manual runs upload
English sources before all current translations are downloaded. The workflow
fills missing, empty, or placeholder-incompatible values from English so every
locale remains structurally complete.

After download, the workflow records Crowdin's translation and approval progress
in `locale-status.json` before validation and import. This preserves real
completion data even when untranslated strings are normalized to English.
The initial tracked manifest is deliberately conservative (0% for every target
locale) until this trusted workflow first replaces it with Crowdin data.

To inspect the live API result without changing files, run this from a shell
that has the two Crowdin variables set:

```bash
php tools/write-locale-status.php --dry-run
```

The workflow validates every exported locale before committing changes to
`main`. After the public revision is current, it imports the locale snapshot
into `sionpkr/tourney-method-private` and opens or refreshes the private
translation pull request.

Private English changes are picked up by the next daily run. Dispatch the
workflow manually when they must reach Crowdin immediately.

## Required Actions secrets

- `CROWDIN_PROJECT_ID`: numeric ID of the Crowdin project.
- `CROWDIN_PERSONAL_TOKEN`: token with project read, source files and strings
  read/write, and translations read permissions.
- `PRIVATE_REPO_TOKEN`: fine-grained GitHub token limited to
  `sionpkr/tourney-method-private`, with Contents and Pull requests read/write
  permissions.

Pull-request workflows do not receive these secrets. The synchronization
workflow runs only from the trusted default branch, the scheduler, or a manual
dispatch.
