<?php

namespace app\modules\controllers;
use app\models\Order;
use app\models\OrderDetail;
use app\models\Product;
use app\models\User;
use app\models\Address;
use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use app\modules\controllers\CommonController;

class OrderController extends CommonController
{
    public function actionList()
    {
        $this->layout = "layout1";
        $model = Order::find();
        $count = $model->count();
        $pageSize = Yii::$app->params['pageSize']['order'];
        $pager = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);
        $data = $model->offset($pager->offset)->limit($pager->limit)->orderby('createtime desc')->all();
        $data = Order::getDetail($data);
        return $this->render('list', ['orders' => $data, 'pager' => $pager]);
    }

    public function actionDetail()
    {
        $this->layout = "layout1";
        $orderid = Yii::$app->request->get('orderid');
        $order = Order::find()->where('orderid = :oid', [':oid' => $orderid])->one();
        $detail = OrderDetail::find()->where('orderid = :oid', [':oid' => $orderid])->all();
        foreach($detail as $pro) {
            $product = Product::find()->where('productid = :pid', [':pid' => $pro->productid])->one();
            $product->num = $pro->productnum;
            $products[] = $product;
        }
        $order->products = $products;
        $order->address = Address::find()->where('addressid = :aid', [':aid' => $order->addressid])->one()->address;
        $order->zhstatus = Order::$status[$order->status];
        $order->username = User::find()->where('userid = :uid', [':uid' => $order->userid])->one()->username;
        return $this->render("detail", ['order' => $order]);
    }

    public function actionSend()
    {
        $this->layout = "layout1";
        $orderid = Yii::$app->request->get("orderid");
        $model = Order::find()->where('orderid = :oid', [':oid' => $orderid])->one();
        $model->scenario = "send";
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $model->status = Order::SENDED;
            if ($model->load($post) && $model->save()) {
                return $this->redirect(['order/list']);
            }
        }
        return $this->render('send', ['model' => $model]);
    }


}
