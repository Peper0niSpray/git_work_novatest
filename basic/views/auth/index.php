<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\User */
/* @var $form ActiveForm */
$this->title = ' aвторизации';
?>
<div class="site-index">
    <h2>Форма <?= Html::encode($this->title)?></h2>
    <!-- <div style="display: <?=Yii::$app->session['Attempt']>=3 ? 'grid': 'none' ?>">
        <h4>Неправильных вводов данных пользователя: <?=Yii::$app->session['Attempt']?></h4>
    </div> -->
    <div class="FORMA">
        <div></div>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'login')->label('Логин')->textInput(['autofocus'=>true]) ?>
        <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
        <div id="show"><label><input type="checkbox" name="" onclick="ShowPassword(event)"> Показать пароль</label>
        </div>
        <?= $form->field($model, 'rememberMe')->checkbox(['label'=>'Запоминть меня']) ?>
        <div class="form-group">
            <?= Html::submitButton('Войти', [
                'class' => 'btn btn-primary',
                'disabled'=> Yii::$app->session['Attempt']>=3 
            ])?>
        </div>
        <div id="dvoynoy"></div>
        <?php ActiveForm::end(); ?>
        <div style="display: <?=Yii::$app->session['Attempt']>=3 ? 'grid': 'none' ?>" class="FORMA1">

            <?php $form = ActiveForm::begin(); ?>
            <div id="AuthorizationButton">
                <?=$form->field($CAPTCHA,'CAPTCHA')->widget(\yii\captcha\Captcha::classname())?>
            </div>
            <div class="form-group" id="AuthorizationButton">
                <?= Html::submitButton('Ok', ['class' => 'btn btn-secondary ok']) ?></div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div><!-- auth-index -->