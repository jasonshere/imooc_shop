<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Category;

class CommonController extends Controller
{
    public function init()
    {
        $menu = Category::getMenu();
        $this->view->params['menu'] = $menu;
    }
}
