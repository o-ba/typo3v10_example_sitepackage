<?php

return [
    'frontend' => [
        'typo3v10_example_sitepackage/send-mail' => [
            'target' => \Bo\TYPO3v10ExampleSitepackage\Middleware\SendMail::class,
            'after' => [
                'typo3/cms-frontend/shortcut-and-mountpoint-redirect',
            ]
        ]
    ]
];
