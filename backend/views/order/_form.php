<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrder */
/* @var $form yii\widgets\ActiveForm */
?>
<section>
    <div class="modal" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pz-order-form row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?=$this->title?></h3>
            </div>
        
            <div class="box-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-7">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'salesman')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'deposit')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'sum')->textInput(['maxlength' => true]) ?>  
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'status')->radioList(['1'=>'开始','2'=>'结束']) ?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
                </div>
                
                <?= $form->field($model, 'start_at')->hiddenInput()->label(false) ?>

                <?= $form->field($model, 'end_at')->hiddenInput()->label(false) ?>


                <div class="form-group col-md-7">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
