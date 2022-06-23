<?php

use Itstructure\AdminModule\components\AdminView;

return [
    'class' => AdminView::class,
    'skin' => AdminView::SKIN_YELLOW_LIGHT,
    'bodyLayout' => AdminView::LAYOUT_SIDEBAR_MINI,
//    'mainMenuConfig' => require __DIR__ . '/main-menu.php',
    'companyName' => 'chemodan.kz',
    'shotCompanyName' => 'YTS',
    'extraAssets' => require __DIR__ . '/extra-assets.php',
    'homeUrl' => '/admin',
    'signOutLink' => '/logout',
];
