<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $reviews_id
 * @property int $user_id
 * @property string $login
 * @property string $reviews_date
 * @property string $reviews_text
 *
 * @property User $user
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'login', 'reviews_date', 'reviews_text'], 'required','message'=>'Поле не может быть пустым.'],
            [['user_id'], 'integer'],
            [['reviews_date'], 'safe'],
            [['login', 'reviews_text'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reviews_id' => 'Reviews ID',
            'user_id' => 'User ID',
            'login' => 'Login',
            'reviews_date' => 'Reviews Date',
            'reviews_text' => 'Reviews Text',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
