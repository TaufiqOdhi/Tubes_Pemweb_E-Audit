<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataUnit */

$this->title = 'Create Data Unit';
$this->params['breadcrumbs'][] = ['label' => 'Data Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-unit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
