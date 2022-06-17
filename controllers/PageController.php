<?php


namespace app\controllers;

use app\models\Menu;
use Yii;
use yii\web\NotFoundHttpException;

class PageController extends BaseController
{
    /**
     * Displays page with articles.
     * @return string
     * @throws NotFoundHttpException
     */

    public function actionView()
    {
        $request = Yii::$app->request;
        $alias = $request->get('alias');
        $sub = $request->get('sub');

        if($alias == 'reviews') {
            return $this->render('reviews');
        }

        if($alias == 'tours') {
            return $this->render('tours');
        }

        if($alias == 'contacts') {
            return $this->render('contacts');
        }

        if(($alias == 'countries-tours') && (empty($sub))) {
            return $this->render('countries');
        }

        if($sub == 'countries') {
            return $this->render('countries');
        }

        if(empty($sub)) {
            $model = Menu::find()->where([
                'alias' => $alias
            ])->one();
        } else {
            $model = Menu::find()->where([
                'alias' => $sub
            ])->one();
        }

        if(null === $model) {
            throw new NotFoundHttpException('Page not fount with alias = '.$alias.'.');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}