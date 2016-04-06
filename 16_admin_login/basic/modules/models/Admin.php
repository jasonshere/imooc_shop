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
            [['adminuser', 'adminpass'], 'required', 'message' => '用户名或者密码不能为空'],
            ['rememberMe', 'boolean'],
            ['adminpass', 'validatePass'],
        ];
    }

    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where(['adminuser' => $this->adminuser, 'adminpass' => md5($this->adminpass)])->one();
            if (is_null($data)) {
                $this->addError("adminpass", "用户名或者密码错误");
            }
        }
    }
    
    public function login($data)
    {
        if ($this->load($data) && $this->validate()) {
            $lifetime = $this->rememberMe ? 3600*24 : 0;
            $session = Yii::$app->session;
            setcookie($session->name, $session->id, time() + $lifetime);
            $session['admin'] = [
                'adminuser' => $this->adminuser,
                'isLogin'   => 1,
            ];
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }

}
