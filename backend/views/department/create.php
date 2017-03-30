<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzDepartment */

$this->title = 'Create Pz Department';
$this->params['breadcrumbs'][] = ['label' => 'Pz Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-department-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
