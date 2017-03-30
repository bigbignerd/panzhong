<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PzDepartment */

$this->title = 'Update Pz Department: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pz-department-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
