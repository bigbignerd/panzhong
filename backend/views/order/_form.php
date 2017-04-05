<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widget\StaffLayer;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-order-form row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?=$this->title?></h3>
            </div>
        
            <div class="box-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-7">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])?>
                </div>
                <div class="col-md-7">
                    <?= $form->field($model, 'salesman')->textInput(['maxlength' => true,'readonly'=>'readonly', 'id'=>'salesman','placeholder'=>'点击关联负责人'])?>
                    <?= StaffLayer::widget([
                        'id' => 'salesman',
                    ])?>
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

<?php
    $this->registerJs('
        
    ');
?>
