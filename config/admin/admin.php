<?php

use app\components\{
    SettingsComponent,
    UserValidateComponent
};
use app\controllers\admin\{
//    PageController,
//    CategoryController,
//    ArticleController,
//    ProductController,
//    QualityController,
    SettingController,
//    FeedbackController,
//    AboutController,
//    TechnologyController,
//    ContactController,
//    SocialController,
//    HomeController,
    PermissionController,
    RoleController,
    ProfileController,
    UserController,
    PositionController,
//    SitemapController,
    MenuController,
    CityController,
    OfficeController,
    PartnerController,
    SSettingController,
    ReviewsController
};
use app\controllers\admin\album\{
    ImageAlbumController,
    AudioAlbumController,
    VideoAlbumController,
    ApplicationAlbumController,
    TextAlbumController,
    OtherAlbumController
};
use Itstructure\AdminModule\Module as AdminModule;
use Itstructure\RbacModule\Module as RbacModule;
use Itstructure\MFUploader\Module as MFUModule;
use Itstructure\MFUploader\controllers\ManagerController;
use Itstructure\MFUploader\controllers\upload\{LocalUploadController, S3UploadController};
use Itstructure\MFUploader\components\{LocalUploadComponent, S3UploadComponent};

return [
    'modules' => [
        'admin' => [
            'class' => AdminModule::class,
            'viewPath' => '@app/views/admin',
            'controllerMap' => [
                '' => SettingController::class,
                'settings' => SettingController::class,
                'users' => UserController::class,
                'menu' => MenuController::class,
                'cities' => CityController::class,
                'offices' => OfficeController::class,
                'partners' => PartnerController::class,
                'ssettings' => SSettingController::class,
                'positions' => PositionController::class,
                'reviews' => ReviewsController::class,
//                'pages' => PageController::class,
//                'categories' => CategoryController::class,
//                'articles' => ArticleController::class,
//                'products' => ProductController::class,
//                'qualities' => QualityController::class,
//                'feedback' => FeedbackController::class,
//                'about' => AboutController::class,
//                'technologies' => TechnologyController::class,
//                'contacts' => ContactController::class,
//                'social' => SocialController::class,
//                'home' => HomeController::class,
//                'sitemap' => SitemapController::class
            ],
            'accessRoles' => ['admin', 'manager'],
            'components' => [
                'view' => require __DIR__ . '/view-component.php',
            ],
        ],
        'rbac' => [
            'class' => RbacModule::class,
            'layout' => '@admin/views/layouts/main-admin.php',
            'controllerMap' => [
                'roles' => RoleController::class,
                'permissions' => PermissionController::class,
                'profiles' => ProfileController::class
            ],
            'accessRoles' => ['admin', 'manager'],
            'components' => [
                'view' => require __DIR__ . '/view-component.php',
            ],
        ],
        'mfuploader' => [
            'class' => MFUModule::class,
            'layout' => '@admin/views/layouts/main-admin.php',
            'controllerMap' => [
                'upload/local-upload' => LocalUploadController::class,
                'upload/s3-upload' => S3UploadController::class,
                'managers' => ManagerController::class,
                'image-album' => ImageAlbumController::class,
                'audio-album' => AudioAlbumController::class,
                'video-album' => VideoAlbumController::class,
                'application-album' => ApplicationAlbumController::class,
                'text-album' => TextAlbumController::class,
                'other-album' => OtherAlbumController::class,
            ],
            'accessRoles' => ['admin', 'manager'],
            'defaultStorageType' => MFUModule::STORAGE_TYPE_LOCAL,
            'previewOptions' => require __DIR__ . '/../preview-options.php',
            'components' => [
                'local-upload-component' => [
                    'class' => LocalUploadComponent::class,
                    'checkExtensionByMimeType' => false,
                    'uploadRoot' => dirname($_SERVER['SCRIPT_FILENAME'])
                ],
                /*'s3-upload-component' => [
                    'class' => S3UploadComponent::class,
                    'checkExtensionByMimeType' => false,
                    'credentials' => require __DIR__ . '/../aws-credentials.php',
                    'region' => 'us-west-2',
                    's3DefaultBucket' => 'filesmodule2',
                ],*/
                'view' => require __DIR__ . '/view-component.php',
            ],
            'publicBaseUrl' => $webConfig['homeUrl'],
            'thumbsConfig' => [
                MFUModule::THUMB_ALIAS_DEFAULT => [
                    'name' => 'Default size',
                    'size' => [200, null],
                ],
                MFUModule::THUMB_ALIAS_SMALL => [
                    'name' => 'Small size',
                    'size' => [100, null],
                ],
                MFUModule::THUMB_ALIAS_MEDIUM => [
                    'name' => 'Medium size',
                    'size' => [400, null],
                ],
                MFUModule::THUMB_ALIAS_LARGE => [
                    'name' => 'Large size',
                    'size' => [970, null],
                ],
            ]
        ]
    ],
    'components' => [
        'settings' => [
            'class' => SettingsComponent::class
        ],
        'user-validate' => [
            'class' => UserValidateComponent::class
        ],
    ]
];
