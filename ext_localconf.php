<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        $icons = [
            'timeline-icon' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline.svg',
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $path]
            );
        }

    }
);
