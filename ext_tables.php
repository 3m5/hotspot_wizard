<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'HotspotWizard',
        'web',
        'wizard',
        '',
        [
            \DMF\HotspotWizard\Controller\HotspotController::class => 'new, create, list,  edit, update, delete',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:hotspot_wizard/Resources/Public/Icons/user_mod_wizard.svg',
            'labels' => 'LLL:EXT:hotspot_wizard/Resources/Private/Language/locallang_wizard.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hotspotwizard_domain_model_hotspot', 'EXT:hotspot_wizard/Resources/Private/Language/locallang_csh_tx_hotspotwizard_domain_model_hotspot.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hotspotwizard_domain_model_hotspot');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hotspotwizard_domain_model_hotspotpoint', 'EXT:hotspot_wizard/Resources/Private/Language/locallang_csh_tx_hotspotwizard_domain_model_hotspotpoint.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hotspotwizard_domain_model_hotspotpoint');
});
