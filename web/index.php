<?php
session_start();
use yii\helpers\ArrayHelper;
use Itstructure\AdminModule\Module as AdminModule;
use Itstructure\RbacModule\Module as RbacModule;
use Itstructure\MFUploader\Module as MFUModule;

if (isset($_COOKIE['location'])) {
	$code = ['ALA'=>'1312','AST'=>'1323','AKT'=>'1342','ATY'=>'1346','ZHA'=>'1394','KAR'=>'1343','KUS'=>'1345','PAV'=>'1348','MNG'=>'1347'];
	$loc = json_decode($_COOKIE['location'],true);
	if (array_key_exists($loc['k'],$code)) $_SESSION['code'] = $code[$loc['k']];
	
}
require_once 'Mobile_Detect.php';

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::setAlias('@app', dirname(__DIR__));
Yii::setAlias('@admin', AdminModule::getBaseDir());
Yii::setAlias('@rbac', RbacModule::getBaseDir());
Yii::setAlias('@mfuploader', MFUModule::getBaseDir());

$webConfig = require __DIR__ . '/../config/web.php';
$adminConfig = require __DIR__ . '/../config/admin/admin.php';

//(new yii\web\Application($config))->run();
$config = ArrayHelper::merge($webConfig, $adminConfig);

$app = new yii\web\Application($config);

$app->run();