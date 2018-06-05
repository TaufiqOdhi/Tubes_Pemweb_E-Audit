<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDetailPerjalanandinas */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Perjalanandinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-perjalanandinas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Perjalanandinas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'id_master',
            'nama_maskapai',
            'nomor_tiket',
            'flight_number',
            //'origin',
            //'ticket_class',
            //'destination',
            //'harga_total',
            //'best_fare',
            //'status_audit',
            //'tanggal_keberangkatan',
            //'keterangan_audit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
