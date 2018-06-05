<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDetailTax */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Taxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-tax-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Tax', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->id_detail), ['view', 'id' => $model->id_detail]);
        },
    ]) ?>
    <?php Pjax::end(); ?>
</div>
