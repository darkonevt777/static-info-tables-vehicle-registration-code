<?php

$EM_CONF[$_EXTKEY] = Array (
    'title' => 'Vehicle Registration Codes for Static Info Tables',
    'description' => 'Enhancement for static info tables: interational vehicle registration codes (i.e. E for Espania or D for Germany).',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Martin Lazar-Rudolf',
    'author_email' => 'martin@lazar-rudolf.de',
    'constraints' => array (
        'depends' => array(
            'typo3' => '8.7.0-10.99.99',
            'static_info_tables' => '6.7.3-6.99.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
