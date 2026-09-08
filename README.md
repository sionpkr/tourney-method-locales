# tourney-method locales

Public, community-maintained translations for tourney-method.

The application source code is private. This repository intentionally contains
only approved public-facing interface text. Administrative, operational, and
unreleased strings are not published here.

## Languages

English (`en`) is the source language. Its approved public snapshot is exported
from the private application by automation. Every complete target language
exported by [Crowdin](https://crowdin.com/project/tourney-method) is validated
and kept in this repository using its BCP 47 locale code.

## Contributing

The preferred translation interface is
[Crowdin](https://crowdin.com/project/tourney-method). Pull requests are also
welcome for translation corrections. English source changes originate in the
private application and are mirrored here automatically.

Please preserve Laravel placeholders such as `:name`, `:count`, and `:id`
exactly. Run the validator before opening a pull request:

```bash
php tools/validate-locales.php
```

Translations contributed here are licensed under the MIT License. Contributors
are credited through Git history and Crowdin contribution history.

## Repository policy

- Only files and keys listed in `config/public-locales.php` are accepted.
- Do not add credentials, private URLs, internal routes, operational notes, or
  unreleased feature text.
- English is the canonical source language.
- Translation changes are reviewed and synchronized into the private
  application repository by automation.

See [CROWDIN.md](CROWDIN.md) for synchronization and credential requirements.
