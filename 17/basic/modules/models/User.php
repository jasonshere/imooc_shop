<?php
namespace app\modules\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public $repass;
    public static function tableName()
    {
        return "{{%user}}";
    }

    public function rules()
    {
        return [
            ['username', 'required', 'message' => '用户名不能为空', 'on' => ['reg']],
            ['username', 'unique', 'message' => '用户已经被注册', 'on' => ['reg']],
            ['useremail', 'required', 'message' => '电子邮件不能为空', 'on' => ['reg']],
            ['useremail', 'email', 'message' => '电子邮件格式不正确', 'on' => ['reg']],
            ['useremail', 'unique', 'message' => '电子邮件已被注册', 'on' => ['reg']],
            ['userpass', 'required', 'message' => '用户密码不能为空', 'on' => ['reg']],
            ['repass', 'required', 'message' => '确认密码不能为空', 'on' => ['reg']],
            ['repass', 'compare', 'compareAttribute' => 'userpass', 'message' => '两次密码输入不一致', 'on' => ['reg']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'userpass' => '用户密码',
            'repass' => '确认密码',
            'useremail' => '电子邮箱',
        ];
    }

    public function reg($data)
    {
        $this->scenario = "reg";
        if ($this->load($data) && $this->validate()) {
            $this->createtime = time();
            $this->userpass = md5($this->userpass);
            if ($this->save(false)) {
                return true;
            }
            return false;
        }
        return false;
    }

    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['userid' => 'userid']);
    }

}
