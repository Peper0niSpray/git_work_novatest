<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\base\UserType;

/* @var $this yii\web\View */
/* @var $model app\models\base\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_code')->dropdownList(UserType::find()->select(['name_code', 'user_code'])->indexBy('user_code')->column())->label('Роль')  ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
