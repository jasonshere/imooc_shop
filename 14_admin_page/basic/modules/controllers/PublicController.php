<?php
namespace app\modules\controllers;

use yii\web\Controller;

class PublicController extends Controller
{
    public function actionLogin()
    {
        $this->layout = false;
        return $this->render("login");
    }
}
