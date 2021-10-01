<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_db.xlf:tx_hotspotwizard_domain_model_hotspotpoint',
        'label' => 'x_coordinate',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'description,link',
        'iconfile' => 'EXT:hotspot_wizard/Resources/Public/Icons/tx_hotspotwizard_domain_model_hotspotpoint.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, x_coordinate, y_coordinate, description, link, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_hotspotwizard_domain_model_hotspotpoint',
                'foreign_table_where' => 'AND {#tx_hotspotwizard_domain_model_hotspotpoint}.{#pid}=###CURRENT_PID### AND {#tx_hotspotwizard_domain_model_hotspotpoint}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'x_coordinate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_db.xlf:tx_hotspotwizard_domain_model_hotspotpoint.x_coordinate',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'y_coordinate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_db.xlf:tx_hotspotwizard_domain_model_hotspotpoint.y_coordinate',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_db.xlf:tx_hotspotwizard_domain_model_hotspotpoint.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_db.xlf:tx_hotspotwizard_domain_model_hotspotpoint.link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
        'hotspot' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
