<?php
defined('TYPO3_MODE') or die();

// define new fields
$tempColumns = array(
    'newsicon' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:news_icon_extension/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.newsicon',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'fileFolderConfig' => [
                'folder' => 'EXT:news_icon_extension/Resources/Public/Images/Icons/',
                'allowedExtensions' => 'svg,jpg,gif,png',
                'depth' => 1,
            ],
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ),
    ),
);

// add field to tca
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    $tempColumns,
    1
);

// add new field newsicon after teaser
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("tx_news_domain_model_news", 'newsicon', '', 'after:teaser');