<?php

namespace app\models;

/**
 * 
 */
class Users extends base\User implements \yii\web\IdentityInterface
{
	public static function findIdentity($Code_users)
	{
		return static::findOne($Code_users);
	}

	public static function findIdentityByAccessToken($token,$type = null)
	{
		return static::findOne(['access_token' => $token]);
	}

	public static function findByUsername($login)
	{
		return static::findOne(['login'=> $login]);
	}
	public function getId()
	{
		return $this->Code_users;
	}
	public function getAuthKey()
	{
		return $this->authKey;
	}
	public function validateAuthKey($authKey)
	{
		return $this->authKey === $authKey;
	}
	public function validatePassword($password)
	{
		return $this->password === $password;
	}
}