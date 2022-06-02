<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
class MainController extends Controller {

	public $layout = 'index';

	public function actionIndex() {
		if (isset($_GET['url'])) {
			return $_GET['url'];
		}
        return $this->render('index');
    }

    public function actionSearch() {
    	return $this->render('search');
    }

    

}
?>