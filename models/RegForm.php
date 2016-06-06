<?php

namespace app\models;

use yii\base\Model;
use Yii;


class RegForm extends Model
{
	public $username;
	public $email;
	public $password;
	public $status;
	public $password_repeat;

	public function rules()
	{
		return [
			 [['username','email','password'],'filter','filter' => 'trim'],
			 [['username','email','password','password_repeat'],'required'],
			 ['username','string','min' => 2,'max' => 50],
			 ['password','string','min' => 6,'max' => 255],
			 ['username','unique','targetClass' => User::className(),'message' => 'Имя уже занято!'],
			 ['email','email'],
			 ['email','unique','targetClass' => User::className(),'message' => 'Email уже занят!'],
			 ['status','default','value' => User::STATUS_ACTIVE,'on' => 'default'],
			 ['status','in','range' =>[
			 		User::STATUS_NOT_ACTIVE,
			 		User::STATUS_ACTIVE
			 		]
			 ],
			['password', 'compare'],
			['password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'register'],
		];
	}


	public function attributeLabels()
	{
		return [
			'username' => 'Имя пользователя',
			'emal' => 'E-mail',
			'password' => 'Пароль',
			'password_repeat' => 'Повтор пароля'

		];
	}

	public function reg()
	{
		$user = new User();

		$user->username = $this->username;
		$user->email = $this->email;
		$user->status = $this->status;
		$user->setPassword($this->password);
		$user->generateAuthKey();

		return $user->save() ? $user : null;
	}
}



?>