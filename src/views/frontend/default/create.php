<head>

    <style type="text/css" >

        body{

            position: absolute;
            left:8%;
            top:10%;
        }

    </style>

    <title></title>
</head>

<body style = "background-color :#B0B0B0 ;">
<div align='center'>  <img src = "https://miro.medium.com/max/1418/1*X8xob2f3dwAmB8k6JXIN3Q.jpeg" width="800" height="300" > </div>

</body>

<body>
<div align="center"> <h1>Yetkili İletişim Formu</h1> </div>

</body>

<?php

use yii\helpers\Html;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model portalgece\mymodule\models\ContactTable */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'ContactForm', 'url' => ['create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <div class="contact-table-index">

        <h3>Kullanıcılar tarafından yollanan mesajlar</h3>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'isim',
                'sikayet:ntext',
            ],
        ]); ?>


    </div>

</div>