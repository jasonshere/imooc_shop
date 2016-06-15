<?php
namespace app\controllers;
use app\app\CommonController;

class OrderController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = "layout2";
        return $this->render("index");
    }

    public function actionCheck()
    {
        $this->layout = "layout1";
        return $this->render("check");
    }
}
