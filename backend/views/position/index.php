<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pz Positions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-position-index box box-primary">
    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
       <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                [
                    'attribute' => 'companyId',
                    'filter' => $searchModel->companyMap,
                    'value' => function($data) use($searchModel) {
                        return $searchModel->companyMap[$data->companyId];
                    }
                ],
                'remark:ntext',
                [
                    'attribute' => 'created_at',
                    'value' => function($data){
                        return date('Y-m-d H:i', $data->created_at);
                    }
                ],
                // 'updated_at',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'操作',
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
