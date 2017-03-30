<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PzPosition */

$this->title = 'Update Pz Position: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pz-position-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
