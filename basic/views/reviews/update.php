<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\Reviews */

$this->title = 'Изменить отзыв: ' . $model->reviews_id;
$this->params['breadcrumbs'][] = ['label' => 'Отзыв', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reviews_id, 'url' => ['view', 'id' => $model->reviews_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="reviews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
