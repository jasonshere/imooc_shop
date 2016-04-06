<?php
namespace app\controllers;
use yii\web\Controller;

class MemberController extends Controller
{
    public function actionAuth()
    {
        $this->layout = false;
        return $this->render("auth");
    }
}
