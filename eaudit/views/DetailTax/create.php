<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailTax */

$this->title = 'Create Detail Tax';
$this->params['breadcrumbs'][] = ['label' => 'Detail Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-tax-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
