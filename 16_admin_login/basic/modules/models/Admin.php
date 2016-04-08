<?php

namespace app\modules\models;
use yii\db\ActiveRecord;
use Yii;

class Admin extends ActiveRecord
{
    public $rememberMe = true;
    public static function tableName()
    {
        return "{{%admin}}";
    }

    public function rules()
    {
        return [
            ['adminuser', 'required', 'message' => '管理员账号不能为空', 'on' => ['login', 'seekpass']],
            ['adminpass', 'required', 'message' => '管理员密码不能为空', 'on' => 'login'],
            ['rememberMe', 'boolean', 'on' => 'login'],
            ['adminpass', 'validatePass', 'on' => 'login'],
            ['adminemail', 'required', 'message' => '电子邮箱不能为空', 'on' => 'seekpass'],
            ['adminemail', 'email', 'message' => '电子邮箱格式不正确', 'on' => 'seekpass'],
            ['adminemail', 'validateEmail', 'on' => 'seekpass'],
        ];
    }

    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where('adminuser = :user and adminpass = :pass', [":user" => $this->adminuser, ":pass" => md5($this->adminpass)])->one();
            if (is_null($data)) {
                $this->addError("adminpass", "用户名或者密码错误");
            }
        }
    }

    public function validateEmail()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where('adminuser = :user and adminemail = :email', [':user' => $this->adminuser, ':email' => $this->adminemail])->one();
            if (is_null($data)) {
                $this->addError("adminemail", "管理员电子邮箱不匹配");        
            }
        }
    }

    public function login($data)
    {
        $this->scenario = "login";
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事
            $lifetime = $this->rememberMe ? 24*3600 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin'] = [
                'adminuser' => $this->adminuser,
                'isLogin' => 1,
            ];
            $this->updateAll(['logintime' => time(), 'loginip' => ip2long(Yii::$app->request->userIP)], 'adminuser = :user', [':user' => $this->adminuser]);
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }
    
    public function seekPass($data)
    {
        $this->scenario = "seekpass";
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事
        }
        return false;
    
    }
}
