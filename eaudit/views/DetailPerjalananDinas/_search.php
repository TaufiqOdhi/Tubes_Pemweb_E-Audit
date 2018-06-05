<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchDetailPerjalanandinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-perjalanandinas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'id_master') ?>

    <?= $form->field($model, 'nama_maskapai') ?>

    <?= $form->field($model, 'nomor_tiket') ?>

    <?= $form->field($model, 'flight_number') ?>

    <?php // echo $form->field($model, 'origin') ?>

    <?php // echo $form->field($model, 'ticket_class') ?>

    <?php // echo $form->field($model, 'destination') ?>

    <?php // echo $form->field($model, 'harga_total') ?>

    <?php // echo $form->field($model, 'best_fare') ?>

    <?php // echo $form->field($model, 'status_audit') ?>

    <?php // echo $form->field($model, 'tanggal_keberangkatan') ?>

    <?php // echo $form->field($model, 'keterangan_audit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
