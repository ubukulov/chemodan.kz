<?php


namespace app\controllers;


class PaymentController extends BaseController
{
    public function actionPaybox()
    {
        return $this->render('paybox');
    }
}