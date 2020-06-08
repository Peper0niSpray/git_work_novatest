<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\UserType */

$this->title = 'Update User Type: ' . $model->user_code;
$this->params['breadcrumbs'][] = ['label' => 'User Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_code, 'url' => ['view', 'id' => $model->user_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
