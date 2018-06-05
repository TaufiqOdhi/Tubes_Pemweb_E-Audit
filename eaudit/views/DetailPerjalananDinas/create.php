<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailPerjalanandinas */

$this->title = 'Create Detail Perjalanandinas';
$this->params['breadcrumbs'][] = ['label' => 'Detail Perjalanandinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-perjalanandinas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
