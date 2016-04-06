<?php
namespace app\controllers;
use yii\web\Controller;

class CartController extends Controller
{
    public function actionIndex()
    {
        //views/cart/index.php
        $this->layout = false;
        return $this->render("index");
    }
}
