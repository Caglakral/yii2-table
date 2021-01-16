<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="contact-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textarea(['rows' => 5]) ?>

    <div class="form-group">
        <?= Html::submitButton('Gönder', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>