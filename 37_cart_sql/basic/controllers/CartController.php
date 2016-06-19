<?php
namespace app\controllers;
use app\controllers\CommonController;
use app\models\User;
use app\models\Cart;
use app\models\Product;
use Yii;

class CartController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = 'layout1';
        return $this->render("index");
    }

}
