<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'A-Z Keyword List',
    'description' => 'Extracts all keywords from the page\'s keyword field and displays a list of keywords and links the page title to the keyword related page.',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '4.0.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'mehrwert',
    'author_email' => 'typo3@mehrwert.de',
    'author_company' => 'mehrwert intermediale kommunikation GmbH',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.1.99',
            'typo3' => '8.7.8-8.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            't3jquery' => '2.0.0-0.0.0',
        ],
    ],
];
