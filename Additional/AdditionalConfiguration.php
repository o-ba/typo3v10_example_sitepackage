<?php

if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'BE' => [
                'passwordReset' => true,
                'passwordResetForAdmins' => true
            ],
            'MAIL' => [
                'layoutRootPaths' => [
                    700 => 'EXT:typo3v10_example_sitepackage/Resources/Private/Layouts'
                ],
                'templateRootPaths' => [
                    700 => 'EXT:typo3v10_example_sitepackage/Resources/Private/Templates/Email'
                ]
            ]
        ]
    );
}
