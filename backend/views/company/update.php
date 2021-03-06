<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PzCompany */

$this->title = 'Update Pz Company: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pz-company-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
