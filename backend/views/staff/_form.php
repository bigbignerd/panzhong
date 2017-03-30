<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widget\DateTimeControl;
/* @var $this yii\web\View */
/* @var $model backend\models\PzStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pz-staff-form box box-primary">
    <div class="box-header with-border">
        <div class="box-title"><?=Html::encode($this->title)?></div>
    </div>
    <div class="box-body">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <!-- 基本信息 -->
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'qq')->textInput() ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            </div>
            <!-- 选项信息 -->
            <div class="col-md-6">
                <?= $form->field($model, 'companyId')->dropDownList($model->companyMap) ?>

                <?= $form->field($model, 'deptId')->dropDownList($model->deptMap) ?>

                <?= $form->field($model, 'positionId')->dropDownList($model->posMap) ?>

                <?= $form->field($model, 'joinTime')->widget(DateTimeControl::className(), [

                    'fieldName' => 'Pz[joinTime]',
                    'value' => $model->joinTime ? date("Y-m-d H:i",$model->joinTime) : '',
                    'renderInput' => 1,
                    'format' => 'yyyy-mm-dd hh:ii',
                    'contentOptions' => [
                        'class' => 'form-control time endTime',
                        // 'maxlength' => 12,
                    // 'data-provide' =>'datepicker-inline'
                ],]) ?>

                <?= $form->field($model, 'status')->radioList(['1'=>'在职','0'=>'离职']) ?>
                
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h5>添加离职信息</h5>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body" style="display: none;">

                        <?= $form->field($model, 'leaveTime')->widget(DateTimeControl::className(), [

                            'fieldName' => 'Pz[leaveTime]',
                            'value' => $model->leaveTime ? date("Y-m-d H:i",$model->leaveTime) : '',
                            'renderInput' => 1,
                            'format' => 'yyyy-mm-dd hh:ii',
                            'contentOptions' => [
                                'class' => 'form-control time endTime',
                                // 'maxlength' => 12,
                            // 'data-provide' =>'datepicker-inline'
                        ],]) ?>

                        <?= $form->field($model, 'leaveDesc')->textarea(['rows' => 6]) ?>
                    </div>
                </div>

            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>
