<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Гостевая книга:<?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body id="onebody">
    <?php $this->beginBody() ?>
    <nav id="onenav">
        <div>
            <div id='icon'>
                ▬
            </div>
            <div id='icon2'>
                ✘
            </div>
        </div>
        <?php
	echo Menu::widget([
		'items'=>[
			[
				'label'=>'Мои заявки',
				'url' => ['incidents/index', 'id'=>Yii::$app->user->id],
				'options' => ['class' => (Url::to(['']) == Url::to(['incidents/update'])  ? 'Active' : null)]
			],
			[
				'label'=>'Создать инцидент',
				'url' => ['incidents/create'],
			],
			[
				'label'=>'Cотрудники',
				'url' => ['prosmotr/index'],
				'visible'=> Yii::$app->user->identity->Code_role == 2,
				'options' => ['class' => (Url::to(['']) == Url::to(['prosmotr/update']) ? 'Active' : null)]

			],
		],
		'activeCssClass'=>'Active',
		'options'=>['style' => 'display: ' . (Yii::$app->user->isGuest ? 'none' : 'block') . ';'],
	]);
	echo Menu::widget([
		'items' => [
			[
				'label'=>'Мой профиль',
				'url'=>['sraff/view', 'id'=>Yii::$app->user->id],
				'options' => ['class' => (Url::to(['']) == Url::to(['new-password/update']) || Url::to(['']) == Url::to(['redactionusers/update']) || Url::to(['']) == Url::to(['deletepeople/index']) || Url::to(['']) == Url::to(['polyzovatyli/index']) ? 'Active' : null)]

			],
			[
				'label' => 'Выйти',
				'url'=>['site/logout'],
			],
		],
		'activeCssClass'=>'Active',
		'options'=>['style' => 'display: ' . (Yii::$app->user->isGuest ? 'none' : 'block') . ';']
	]);
	?>
    </nav>
    <div>dsds</div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>