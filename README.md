# TYPO3 Extension ``typo3v10_example_sitepackage``

This is a site package extension and contains some examples regarding new features in [TYPO3][1] version 10. All
examples are based on the presentation hold at [T3muc][2] on 05.05.2020. You can find the presentation in german and
english here: ``/Documentation``.

## Installation

You can install the extension via composer ``composer require o-ba/typo3v10_example_sitepackage`` or download
the release packages [zip][3], [tar.gz][4].

## Description

Topics in this repository:
- Site configuration shipped in site package extension
- Using relative paths for imports in site configurations
- Adding custom base urls for ``slug`` fields
- Using content element preview in the new fluid based page layout
- Using Asset Collector
- Using Site processor to access site configuration in fluid templates
- Creating custom dashboard widgets
- Using custom fluid templates for fluid based emails
- Using the new Mailer API (including FluidEmail)
- Sorting of ``ext:form`` forms
- Using ``tables`` attribute in ``be:[uri|link].editRecord``
- Using feature toggles state in [expression language][5]
- Using ``config.htmlTag.attributes``
- Defining default file list action on upload
- Configuration of _reset password_ for backend users

All these features can be found well documented in the [changelog][6].

You can find some additonal settings / configurations which are not inside the extension here:
- ``Additional/config.yaml``: Default [ddev][7] configuration to run your TYPO3 v10 project
- ``Additional/docker-compose.env.yaml``: Setting the application context in the environment
- ``Additional/AdditionalConfiguration.php``: Contains configuration for examples (reset password, fluid email)
- ``Additional/LocalConfiguration.php``: Contains backend extension configuration
- ``Additional/404.yaml``: Import file for site configuration

Furthermore, the feature demonstration used following additional extensions which may be required for some
functionalities:
- ``o-ba/custom_dashboard_widgets``: Kickstarter extension for custom dashboard widgets
- ``bk2k/bootstrap-package``: Bootstrap package for an easy and quick start

## Further notice
If you have any question or found a bug, please don't hesitate to create an issue or pull request.

## Credits
Icons used in this repository are made by [Freepik][8] from [www.flaticon.com][9]

[1]: http://typo3.org/
[2]: http://www.mtug.de/
[3]: https://github.com/o-ba/typo3v10_example_sitepackage/archive/1.0.0.zip
[4]: https://github.com/o-ba/typo3v10_example_sitepackage/archive/1.0.0.tar.gz
[5]: https://symfony.com/doc/current/components/expression_language.html
[6]: https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog-10.html
[7]: https://ddev.readthedocs.io/en/stable/
[8]: https://www.flaticon.com/authors/freepik
[9]: http://www.flaticon.com
