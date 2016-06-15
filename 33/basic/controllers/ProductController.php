<?php
namespace app\controllers;

use app\controllers\CommonController;
use Yii;
use app\models\Product;

class ProductController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = "layout2";
        $cid = Yii::$app->request->get("cateid");
        $model = Product::find()->where("cateid = :cid and ison = '1'", [':cid' => $cid]);
        $all = $model->asArray()->all();
        $srcModel = clone $model;
        $tui = $srcModel->andWhere('istui = \'1\'')->asArray()->all();
        $hot = $srcModel->andWhere('ishot = \'1\'')->asArray()->all();
        $sale = $srcModel->andWhere('issale = \'1\'')->asArray()->all();
        var_dump($tui);exit;
        return $this->render("index", ['sale' => $sale, 'tui' => $tui, 'hot' => $hot, 'all' => $all]);
    }

    public function actionDetail()
    {
        //$this->layout = false;
        $this->layout = "layout2";
        return $this->render("detail");
    }
}
