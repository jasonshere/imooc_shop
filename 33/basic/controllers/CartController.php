<?php
namespace app\controllers;
use app\controllers\CommonController;

class CartController extends CommonController
{
    public function actionIndex()
    {
        //views/cart/index.php
        $this->layout = 'layout1';
        return $this->render("index");
    }
}
