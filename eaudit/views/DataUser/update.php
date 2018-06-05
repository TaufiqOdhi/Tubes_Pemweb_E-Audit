<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataUser */

$this->title = 'Update Data User: ' . $model->Username;
$this->params['breadcrumbs'][] = ['label' => 'Data Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Username, 'url' => ['view', 'id' => $model->Username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
