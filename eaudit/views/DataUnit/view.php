<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataUnit */

$this->title = $model->id_unit;
$this->params['breadcrumbs'][] = ['label' => 'Data Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-unit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_unit], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_unit], [
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
            'id_unit',
            'nama_unit',
            'induk_unit',
        ],
    ]) ?>

</div>
