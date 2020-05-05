<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:typo3v10_example_sitepackage/Configuration/TSconfig/Page/TCAdefaults.tsconfig'"
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    "@import 'EXT:typo3v10_example_sitepackage/Configuration/TSconfig/User/Options.tsconfig'"
);
