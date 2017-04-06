<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrderProcess */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-order-process-form box box-primary">
    <div class="box-header with-border">
        <div class="box-title"><?=Html::encode($this->title)?></div>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-7">

            <?= $form->field($model, 'orderName')->textInput(['readonly'=>'readonly'])->label("订单名称")?>

            <?= $form->field($model, 'orderId')->hiddenInput()->label(false) ?>

            <?= $form->field($model, 'money')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type')->radioList($model->typeMap) ?>
            
            <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
