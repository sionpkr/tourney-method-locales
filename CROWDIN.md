# Crowdin synchronization

The `Sync Crowdin locales` workflow keeps this repository and the private
application synchronized with the
[`tourney-method` Crowdin project](https://crowdin.com/project/tourney-method).

The workflow runs daily, can be dispatched manually, and runs immediately when
an English source file under `lang/en/` changes. Push and manual runs upload
English sources before all current translations are downloaded. Untranslated strings retain
their English source value so every locale remains structurally complete.

The workflow validates every exported locale before committing changes to
`main`. After the public revision is current, it imports the locale snapshot
into `sionpkr/tourney-method-private` and opens or refreshes the private
translation pull request.

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
