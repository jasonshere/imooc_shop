<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Address extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%address}}";
    }

    public function rules()
    {
        return [
            [['userid', 'firstname', 'lastname', 'address', 'email', 'telephone'], 'required'],
            [['createtime', 'postcode'],'safe'],
        ];
    }
}
