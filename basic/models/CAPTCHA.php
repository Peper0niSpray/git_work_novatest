<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CAPTCHA extends Model
{
    public $CAPTCHA;

    public function rules()
    {
        return [
            ['CAPTCHA','required', 'message'=>'Поле проверки не может быть пустым.'],
            ['CAPTCHA','captcha', 'message'=>'Код проверки введен неверно.'],
        ];
    }
}