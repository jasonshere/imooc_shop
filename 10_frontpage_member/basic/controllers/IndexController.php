<?php
namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        //$this->layout = false;
        //return $this->render("index");
        return $this->renderPartial("index");
    }
}
