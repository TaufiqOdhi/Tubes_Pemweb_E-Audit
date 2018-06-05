<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchDetailTax */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-tax-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'id_master') ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'golongan') ?>

    <?= $form->field($model, 'penghasilan') ?>

    <?php // echo $form->field($model, 'pajak') ?>

    <?php // echo $form->field($model, 'tanggal_penerimaanpenghasilan') ?>

    <?php // echo $form->field($model, 'status_audit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
