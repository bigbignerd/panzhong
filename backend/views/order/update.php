<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrder */

$this->title = 'Update Pz Order: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pz-order-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
