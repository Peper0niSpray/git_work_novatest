<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $user_id
 * @property int $user_code
 * @property string $login
 * @property string $password
 *
 * @property Reviews[] $reviews
 * @property UserType $userCode
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_code', 'login', 'password'], 'required','message'=>'Поле не может быть пустым.'],
            [['user_code'], 'integer'],
            [['login', 'password'], 'string', 'max' => 255],
            [['user_code'], 'exist', 'skipOnError' => true, 'targetClass' => UserType::className(), 'targetAttribute' => ['user_code' => 'user_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_code' => 'User Code',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[UserCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserCode()
    {
        return $this->hasOne(UserType::className(), ['user_code' => 'user_code']);
    }
}
