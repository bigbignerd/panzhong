<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pz Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-staff-index box box-primary">

    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

   <!--  <p>
        <?= Html::a('Create Pz Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [

                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'name',
                    'headerOptions' => ['width'=>'8%'],
                ],
                [
                    'attribute' => 'companyId',
                    'filter' => $searchModel->companyMap,
                    'value' => function($model) use($searchModel){
                        return $searchModel->companyMap[$model->companyId];
                    }
                ],
                [
                    'attribute' => 'deptId',
                    'filter' => $searchModel->deptMap,
                    'value' => function($model) use($searchModel){
                        return $searchModel->deptMap[$model->deptId];
                    }
                ],
                [
                    'attribute' => 'positionId',
                    'filter' => $searchModel->posMap,
                    'value' => function($model) use ($searchModel){
                        return $searchModel->posMap[$model->positionId];
                    }
                ],
                
                'phone',
                'telephone',
                // 'email:email',
                // 'qq',
                // 'address',
                // 'joinTime:datetime',
                // 'leaveTime:datetime',
                // 'leaveDesc:ntext',
                [
                    'attribute' => 'status',
                    'filter' => ['1'=>'在职','0'=>'离职'],
                    'format' => 'raw',
                    'value' => function($model){
                        return ($model->status == 1)? '<span class="green">在职</span>' : '<span class="red">离职</span>';
                    }
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'操作',
                    'headerOptions' => ['width'=>'10%'],
                    'template' => '{view} {update}',
                    'buttons'  => [
                        'view' => function($url, $model, $key){
                            return Html::a("查看", $url, ['title'=>'查看部门详细信息', 'class'=>'btn btn-xs btn-warning']);
                        },
                        'update' => function($url, $model, $key){
                            return Html::a("修改", $url, ['title'=>'修改部门信息', 'class'=>'btn btn-xs btn-primary']);
                        }
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
