<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPerjalanandinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-perjalanandinas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detail')->textInput() ?>

    <?= $form->field($model, 'id_master')->textInput() ?>

    <?= $form->field($model, 'nama_maskapai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_tiket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flight_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ticket_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_total')->textInput() ?>

    <?= $form->field($model, 'best_fare')->textInput() ?>

    <?= $form->field($model, 'status_audit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_keberangkatan')->textInput() ?>

    <?= $form->field($model, 'keterangan_audit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
