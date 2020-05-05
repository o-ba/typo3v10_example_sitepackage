# TYPO3 Extension ``typo3v10_example_sitepackage``

This is a site package extension and contains some examples regarding new features in [TYPO3][1] version 10. All
examples are based on the presentation hold at [T3muc][2] on 05.05.2020. You can find the presentation in german and
english here: ``/Documentation``.

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
- Using feature toggles state in [expression language][3]
- Using ``config.htmlTag.attributes``
- Defining default file list action on upload
- Configuration of _reset password_ for backend users

All these features can be found well documented in the [changelog][4].

You can find some additonal settings / configurations which are not inside the extension here:
- ``Additional/config.yaml``: Default [ddev][5] configuration to run your TYPO3 v10 project
- ``Additional/docker-compose.env.yaml``: Setting the application context in the environment
- ``Additional/AdditionalConfiguration.php``: Contains configuration for examples (reset password, fluid email)
- ``Additional/LocalConfiguration.php``: Contains backend extension configuration
- ``Additional/404.yaml``: Import file for site configuration

Furthermore, the feature demonstration used following additional extensions which may be required for some
functionalities:
- ``o-ba/custom_dashboard_widgets``: Kickstarter extension for custom dashboard widgets
- ``bk2k/bootstrap-package``: Bootstrap package for an easy and quick start

#### Further notice
If you have any question or found a bug, please don't hesitate to create an issue or pull request.

#### Credits
Icons used in this repository are made by [Freepik][6] from [www.flaticon.com][7]

[1]: http://typo3.org/
[2]: http://www.mtug.de/
[3]: https://symfony.com/doc/current/components/expression_language.html
[4]: https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog-10.html
[5]: https://ddev.readthedocs.io/en/stable/
[6]: https://www.flaticon.com/authors/freepik
[7]: http://www.flaticon.com
