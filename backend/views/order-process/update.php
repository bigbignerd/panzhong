<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrderProcess */

$this->title = 'Update Pz Order Process: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pz Order Processes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pz-order-process-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
