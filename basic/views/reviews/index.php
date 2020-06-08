<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel app\models\base\ReviewsSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить отзыв', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'emptyText'=>'Результаты не найдены.',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           [
            'attribute'=>'reviews_id',
            'label'=>'Код отзыва'
           ],
           [
           'attribute'=>'user_id',
           'label'=>'Код пользователя'
            ],
           [
           'attribute'=>'login',
           'label'=>'Логин'
            ],
           [
           'attribute'=>'reviews_date',
           'label'=>'Дата',
           'format'=>'date'
            ],
           [
           'attribute'=>'reviews_text',
           'label'=>'Отзыв'
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    ?>

    <?php Pjax::end(); ?>

</div>
