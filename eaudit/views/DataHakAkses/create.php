<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataHakakses */

$this->title = 'Create Data Hakakses';
$this->params['breadcrumbs'][] = ['label' => 'Data Hakakses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-hakakses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
