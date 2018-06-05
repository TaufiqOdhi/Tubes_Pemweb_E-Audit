<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTax */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-tax-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detail')->textInput() ?>

    <?= $form->field($model, 'id_master')->textInput() ?>

    <?= $form->field($model, 'NIP')->textInput() ?>

    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penghasilan')->textInput() ?>

    <?= $form->field($model, 'pajak')->textInput() ?>

    <?= $form->field($model, 'tanggal_penerimaanpenghasilan')->textInput() ?>

    <?= $form->field($model, 'status_audit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
