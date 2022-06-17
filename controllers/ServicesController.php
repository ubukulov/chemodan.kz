<?php
namespace app\controllers;

use app\models\Menu;
use Yii;
use yii\web\NotFoundHttpException;

class ServicesController extends BaseController
{
    /**
     * Displays page with articles.
     * @return string
     * @throws NotFoundHttpException
     */

    public function actionServices()
    {
        $request = Yii::$app->request;
        $alias = $request->get('alias');

        if(empty($alias)) {
            return $this->render('services');
        }

        $model = Menu::find()->where([
            'alias' => $alias
        ])->one();

        if(null === $model) {
            throw new NotFoundHttpException('Page not fount with alias = '.$alias.'.');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}