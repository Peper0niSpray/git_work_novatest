<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Открыть отызвы</h1>

        <?= Html::a('Полный вперед!', ['/reviews/index'], ['class'=>'btn btn-lg btn-success']) ?>
    </div>
</div>
