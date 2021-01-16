<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Contact Table';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-Table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email',
            'contact:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>