<?php
namespace app\modules\controllers;

use yii\web\Controller;
use app\modules\models\Admin;
use Yii;

class PublicController extends Controller
{
    public $layout = false;
    public function actionLogin()
    {
        try{
            if (Yii::$app->session['admin']['isLogin']) {
                $this->redirect(['default/index']);
                Yii::$app->end();
            }
            $model = new Admin();
            if (!$model) {
                throw new Exception();
            }
            if (Yii::$app->request->isPost) {
                $post = Yii::$app->request->post();
                if ($model->login($post)) {
                    $this->redirect(['default/index']);
                    Yii::$app->end();
                }
            }
            return $this->render("login", ['model' => $model]);
        } catch(Exception $e) {
            return false;
        }
    }

    public function actionForgetpass()
    {
        $model = new Admin();
        return $this->render("forgetpass", ['model' => $model]);
    }

}
