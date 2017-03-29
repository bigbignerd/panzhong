<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PzStaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'companyId') ?>

    <?= $form->field($model, 'deptId') ?>

    <?= $form->field($model, 'positionId') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'qq') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'joinTime') ?>

    <?php // echo $form->field($model, 'leaveTime') ?>

    <?php // echo $form->field($model, 'leaveDesc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
