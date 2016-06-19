<?php

namespace app\models;

use yii\db\ActiveRecord;

class OrderDetail extends ActiveRecord
{
    public function rules()
    {
        return [
            [['productid', 'productnum', 'price', 'orderid', 'createtime'],'required'],
        ];
    }

    public static function tableName()
    {
        return "{{%order_detail}}";
    }

    public function add($data)
    {
        if ($this->load($data) && $this->save()) {
            return true;
        }
        return false;
    }



}
