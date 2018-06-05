<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTax */

$this->title = $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-tax-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_detail], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_detail], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_detail',
            'id_master',
            'NIP',
            'golongan',
            'penghasilan',
            'pajak',
            'tanggal_penerimaanpenghasilan',
            'status_audit',
        ],
    ]) ?>

</div>
