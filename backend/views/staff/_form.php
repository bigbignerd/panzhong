<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PzStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companyId')->textInput() ?>

    <?= $form->field($model, 'deptId')->textInput() ?>

    <?= $form->field($model, 'positionId')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'joinTime')->textInput() ?>

    <?= $form->field($model, 'leaveTime')->textInput() ?>

    <?= $form->field($model, 'leaveDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
