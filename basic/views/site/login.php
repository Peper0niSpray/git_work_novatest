<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="site-login">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-lg btn-success']) ?>
        </div>
        <?= Html::a('Зарегестрироваться', ['/user/create'], ['class' => '']) ?>
    <?php ActiveForm::end(); ?>

</div><!-- site-login -->
