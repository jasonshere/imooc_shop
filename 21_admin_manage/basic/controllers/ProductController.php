<?php
namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        //views/product/index.php
        //$this->layout = false;
        $this->layout = "layout2";
        return $this->render("index");
    }

    public function actionDetail()
    {
        //$this->layout = false;
        $this->layout = "layout2";
        return $this->render("detail");
    }
}
