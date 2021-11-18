<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_confitmation;

    public function rules()
    {
        return [
            [['username', 'passwrod', 'password_confirmation'], 'required'],
            [['username', 'password', 'password_confirmation'], 'string', 'min' => 4, 'max' => 16],
            ['password_confirmation', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new Users();

        $user->username = $this->username;
    }
}
