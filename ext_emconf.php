<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 v10 example site package',
    'description' => 'Site package extension for TYPO3 10 feature demonstration',
    'category' => 'distribution',
    'author' => 'Oliver Bartsch',
    'author_email' => 'bo@cedev.de',
    'author_company' => '',
    'state' => 'test',
    'uploadfolder' => false,
    'clearCacheOnLoad' => true,
    'version' => '1.0.1',
    'autoload' => [
        'psr-4' => [
            'Bo\\TYPO3v10ExampleSitepackage\\' => 'Classes'
        ]
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'php' => '7.2.0-7.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
