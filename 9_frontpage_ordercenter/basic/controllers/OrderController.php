<?php
namespace app\controllers;
use yii\web\Controller;

class OrderController extends Controller
{
    public $layout = false;
    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionCheck()
    {
        return $this->render("check");
    }
}
