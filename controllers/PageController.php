<?php


namespace app\controllers;

use app\models\LoginForm;
use app\models\Menu;
use Yii;
use yii\web\NotFoundHttpException;
use app\models\Office;

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

        if($sub == 'login') {
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }

            $model = new LoginForm();

            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }

            return $this->render('login', [
                'model' => $model,
            ]);
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

        if($alias == 'reviews' && empty($sub)) {
            return $this->render('reviews');
        }

        if($alias == 'reviews' && $sub == 'video-reviews') {
            return $this->render('video-reviews', compact('model'));
        }

        if($alias == 'tours') {
            return $this->render('tours');
        }

        if($alias == 'contacts') {
            $offices = Office::find()->where(['publish' => 1])->all();
            return $this->render('contacts', compact('offices'));
        }

        if(($alias == 'countries-tours') && (empty($sub))) {
            return $this->render('countries');
        }

        if($sub == 'countries') {
            return $this->render('countries');
        }

        if(null === $model) {
            throw new NotFoundHttpException('Page not fount with alias = '.$alias.'.');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}