<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'induk_unit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
