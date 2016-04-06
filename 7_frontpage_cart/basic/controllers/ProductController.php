<?php
namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public $layout = false;
    public function actionIndex()
    {
        //views/product/index.php
        //$this->layout = false;
        return $this->render("index");
    }

    public function actionDetail()
    {
        //$this->layout = false;
        return $this->render("detail");
    }
}
