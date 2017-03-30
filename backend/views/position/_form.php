<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PzPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-position-form row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$this->title?></h3>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-7">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-7">
                <?= $form->field($model, 'companyId')->dropDownList($model->companyMap)->label('子公司名<span class="pz_hint">(如果非子公司特有部门，选择通用)</span>') ?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
                </div>
                <div class="col-md-7 form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?> 
            </div>
        </div>
    </div>
    

</div>
